@extends('frontend.layouts.master')
@section("title", "Package List")
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
                                @include("frontend.partials.sidebar")
                            </div>


                            <div class="col-md-9">
                                <div class="ownerName mt-2">
                                    <p class="m-0 ml-4">Ordered Package</p>
                                </div>

                                <div class="my-3">

@if($package != null)
    <table class="table table-responsive">
        <tr>
            <th>SL</th>
            <th>Package</th>
            <th>Price</th>
            <th>Duration</th>
            <th>Payment</th>
            <th>Ads Mode</th>
        </tr>
        @php
            $i = 1;
        @endphp
        @foreach($package as $data)
            <tr>
                <td>{{$i++}}</td>
                <td>{{ucwords($data->packageName)}}</td>
                @if($data->price == "Free")
                    <td>{{$data->price}}</td>
                @else
                    <td>Tk. {{$data->price}}</td>
                @endif
                <td>{{$data->duration}} days</td>
                <td>
                    @if($data->payment == 0)
                        <button class="btn btn-danger">Unpaid</button>
                    @else
                        <button class="btn btn-success">Paid</button>
                    @endif
                </td>
                <td>
                    @if($data->payment == 0)
                        <button class="btn btn-info">Pending</button>
                    @else
                        @if($data->adstatus == 1)
                            <a href="{{Route('adpublish.customerAdpublish')}}?package={{base64_encode(base64_encode($data->id))}}&dr={{base64_encode(base64_encode($data->duration))}}" class="btn btn-primary">Ads Publish</a>
                        @else
                            <button class="btn btn-success">Published</button>
                        @endif
                    @endif
                </td>
            </tr>
        @endforeach

    </table>
@else
    <p class="text-center" style="font-size: 26px;">Data not found!</p>
@endif
                                        



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



    </div>
@endsection
