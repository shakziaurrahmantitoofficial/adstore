@extends('frontend.layouts.master')

@section('content')
    <style>
        #paginations nav .small {
            visibility: hidden;
            /* display: none; */
        }

        .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
            color: #ffffff;
            border-color: #dee2e6 #dee2e6 #fff;
            background-color: #572c84!important;
            border-color: #572c84!important;
        }
        .navTitle{
            font-size: 18px;
        }

        .myList{
            font-size: 16px;
        }

        .myList li{
            border-top: 1px solid #e5d4d4;
            padding: 15px 0;
        }

        .myList li a{
            color: #0074ba;
        }

        .ownerName{
            font-size: 18px;
            padding-bottom: 20px;
            border-bottom: 1px solid #e5d4d4;
        }

        .myList li a svg{
            float: right;
        }

        .activelist{
            color: black !important;
            font-weight: bold;
        }
        .productSize{
            font-weight: bold;
            font-size: 16px;
        }
        .table{
            font-size: 16px;
        }

    </style>






    <div id="all_section_filter_enable">

        <section id='saleAd' class="">
            <div class="container py-4">

        <div class="row">
            <div class="col-8 m-auto">

                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                @include("frontend.partials.sidebar")
                            </div>


                            <div class="col-md-9">
                                <div class="ownerName mt-2">
                                    <p class="m-0 ml-4">Publish Ads</p>
                                </div>

                                <div class="my-3">

                                    @if($errors->any())
                                        <ul class="list-unstyled alert alert-danger">
                                            @foreach($errors->all() as $error)
                                                <li>{{$error}}</li>
                                            @endforeach  
                                        </ul>
                                    @endif

                                    <form class="form mx-2" action="{{Route('customeradinsert.cusadinsert')}}" method="post" enctype="multipart/form-data">
                                        @csrf

                                        <input type="hidden" name="packageId" value="{{$packageId}}">
                                        <input type="hidden" name="duration" value="{{$duration}}">

                                        <div class="form-group">
                                            <input type="text" name="title" class="form-control" placeholder="Ad title" required>
                                        </div>

                                        <div class="form-group">
                                            <input type="text" name="link" class="form-control" placeholder="Target link" required>
                                        </div>

                                        <div class="form-group">
                                           <textarea cols="8" name="description" class="form-control" placeholder="Ad Description" required></textarea>
                                        </div>

                                        <div class="form-group">
                                            <select class="form-control" name="adType" required>
                                                <option value="">Select Ads Type </option>
                                                <option value="rent">Rent Ad</option>
                                                <option value="buy">Buy Ad</option>
                                                <option value="sale">Sale Ad</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <select class="form-control" name="adservicetype" required>
                                                <option value="">Select Service</option>
                                                <option value="product">Product</option>
                                                <option value="property">Property</option>
                                                <option value="service">Service</option>
                                                <option value="for_rent">For Rent</option>
                                                <option value="to_rent">To Rent</option>
                                                <option value="corporate_ads">Corporate Ads</option>


                                                <option value="buy">Buy Ad</option>
                                                <option value="sale">Sale Ad</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <input type="file" name="image" class="form-control-file" required>
                                        </div>

                                        <button style="submit" class="btn btn-primary">Save</button>

                                    </form>


{{-- @if($package != null)
    <table class="table">
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
                <td>Tk. {{$data->price}}</td>
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
                            <a href="" class="btn btn-primary">Ads Publish</a>
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
@endif --}}
                                        



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
