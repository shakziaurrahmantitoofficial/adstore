@extends('frontend.layouts.master')

@section('content')
    <style>
        #paginations nav .small {
            visibility: hidden;
            /* display: none; */
        }

        .nav-tabs .nav-item.show .nav-link,
        .nav-tabs .nav-link.active {
            color: #ffffff;
            border-color: #dee2e6 #dee2e6 #fff;
            background-color: #572c84 !important;
            border-color: #572c84 !important;
        }

        .navTitle {
            font-size: 18px;
        }

        .myList {
            font-size: 16px;
        }

        .myList li {
            border-top: 1px solid #e5d4d4;
            padding: 15px 0;
        }

        .myList li a {
            color: #0074ba;
        }

        .ownerName {
            font-size: 18px;
            padding-bottom: 20px;
            border-bottom: 1px solid #e5d4d4;
        }

        .myList li a svg {
            float: right;
        }

        .activelist {
            color: black !important;
            font-weight: bold;
        }

        .productSize {
            font-weight: bold;
            font-size: 16px;
        }

        .table {
            font-size: 16px;
        }
    </style>



    @if (session()->has('failure'))
        <p class="text-danger text-center fs-4 mt-2 mb-0">{{ session()->get('failure') }}</p>
    @endif


    <div id="all_section_filter_enable">

        <section id='saleAd' class="">
            <div class="container py-4">

                <div class="row">
                    <div class="col-8 m-auto">

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

                                        <div class="my-3">
                                            {{--  
                                            @if ($errors->any())
                                                <ul class="list-unstyled alert alert-danger">
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            @endif
                                            --}}

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

