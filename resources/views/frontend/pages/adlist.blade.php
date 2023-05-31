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



    @if (session()->has('success'))
        <p class="text-success text-center fs-4 mt-2 mb-0">{{ session()->get('success') }}</p>
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
                                @include("frontend.partials.sidebar")
                            </div>


                            <div class="col-md-9">
                                <div class="ownerName mt-2">
                                    <p class="m-0 ml-4">Ad List</p>
                                </div>

                                <div class="my-3">

@if($ads != null)
    <table class="table">
        <tr>
            <th>SL</th>
            <th>Package</th>
            <th>Price</th>
            <th>Duration</th>
            <th>Start</th>
            <th>Expire</th>
            <th>Update</th>
            <th>Status</th>
        </tr>
        @php
            $i = 1;
        @endphp
        @foreach($ads as $data)
            <tr>
                <td>{{$i++}}</td>

                <td>{{ucfirst($data->package->packageName)}}</td>
                <td>TK.{{ucfirst($data->package->price)}}</td>
                <td>{{$data->duration/(3600 * 24)}} days</td>
                <td>
                    @if($data->status == 2)
                        <span class="bg-danger text-white">Invalid</span>
                    @else
                        @if(isset($data->adstartTime))
                            {{date("d.m.y", $data->adstartTime)}}
                        @else
                            Pending
                        @endif
                    @endif
                    
                </td>
                <td>
                    @if($data->status == 2)
                        <span class="bg-danger text-white">Invalid</span>
                    @else
                        @if(isset($data->adstartTime))
                            {{date("d.m.y", $data->adstartTime + $data->duration)}}
                        @else
                            Pending
                        @endif
                    @endif
                </td>
                <td>
                    <a href="" style="color:blue;">Upgrade</a>
                </td>
                <td>
                    @if($data->status == 0)
                        <span class="bg-warning text-white">Pending</span>
                    @elseif($data->status == 1)
                        <span class="bg-success text-white">Approved</span>
                    @elseif($data->status == 2)
                       <a href="{{Route('adedit.customerAdEdit')}}?package={{base64_encode(base64_encode($data->id))}}&dr={{base64_encode(base64_encode($data->duration))}}"><span class="bg-danger text-white">Rejected</span></a>
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
