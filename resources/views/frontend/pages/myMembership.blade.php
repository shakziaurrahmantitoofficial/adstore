@extends('frontend.layouts.master')
@section("title", "Membership")
@section('content')

    <div id="all_section_filter_enable">
        <section id='saleAd' class="">
            <div class="container py-4">

                <div class="row">
                    <div class="col-lg-8 col-md-10 m-auto">

                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        @include('frontend.partials.sidebar')
                                    </div>


                                    <div class="col-md-9">
                                        <div class="ownerName mt-2">
                                            <p class="m-0 ml-4">Membership Information</p>
                                        </div>

    @if(App\Models\membership::where("customerId", Auth::guard("customer")->id())->where("payment", 1)->count() > 0)

        @if(isset($membershp) && $membershp->profile_status != 1)
                                        <div class="my-3">
                                            <div class="card">
                                                <div class="card-body">
                    
                                                    <div class="tab-content" id="myTabContent">
                                                        <div class="tab-pane fade show active" id="home" role="tabpanel"
                                                            aria-labelledby="home-tab">
                    
                                                            @if (Session::has('message'))
                                                                <h5 class="form-text text-danger text-center">{{ Session::get('message') }}</h5>
                                                            @endif
                                                            <form class="my-4" id="MembershipInfo" method="POST" enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="form-group">
                                                                    <label>Profile *</label>
                                                                    <div class="as-pf-setup">
                                                                        <div class="as-pf-img">
                                                                            <input type="file" name="image" class="form-control mb-3" id="fileinputSettings" accept=".jpg,.jpeg,.png,.pdf">
                                                                            {{-- <img src="{{ Auth::guard("customer")->user()->image?asset(Auth::guard("customer")->user()->image):'/frontend/assets/images/author/avatar.png' }}" alt="Image" id="imageSettingsPreview"> --}}
                                                                            <small id="errimage" class="form-text"></small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                    
                                                                <button type="submit" class="btn btn-primary"
                                                                    style="background-color: #572c84!important;border-color: #572c84!important;">Save Change</button>
                                                            </form>
                                                        </div>
                    
                                                    </div>
                    
                                                </div>
                                            </div>


                                        </div>

    @endif


<div class="my-3">

@if(isset($membershp) && $membershp->profile_status != null)
    <table class="table">
        <tr>
            <th>Name</th>
            <th>Apply Date</th>
            <th>Accept Date</th>
            <th>Action</th>
            <th>Status</th>
        </tr>
        @php
            $i = 1;
        @endphp

            <tr>
                <td>{{ucwords($membershp->name)}}</td>
                <td>{{date("d-M-Y", strtotime($membershp->created_at))}}</td>
                <td>{{date("d-M-Y", strtotime($membershp->updated_at))}}</td>
                <td><a href="{{asset($membershp->profile_image)}}" target="_blank" class="btn btn-link btn-sm">View</td>
                <td>
                    @if($membershp->profile_status == 0)
                        <button class="btn btn-info btn-sm">Pending</button>
                    @else
                        <button class="btn btn-success btn-sm">Accepted</button>
                    @endif
                </td>
            </tr>
  

    </table>
@endif
@else
    <p class="h5 text-center my-2">Pending your request.</p>
@endif









                                    </div>

                                </div>


                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

    </div>

    <style>
        .as-pf-img img {
            width: 104px;
            height: 104px;
            line-height: 104px;
            object-fit: cover;
            overflow: hidden;
        }
    </style>


@endsection

