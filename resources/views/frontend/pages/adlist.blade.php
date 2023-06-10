@extends('frontend.layouts.master')
@section("title", "Ad List")
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
                                    <p class="m-0 ml-4">Ad List</p>
                                </div>

                                <div class="table-responsive-lg my-3">

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
                <td>{{Round($data->duration/(3600 * 24))}} days</td>
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
                    @if($data->renewstatus == 0)
                        @if($data->status == 0)
                            N/A
                        @else
                            <a href="{{Route('adslist.customerAdslistPackage')}}?adid={{base64_encode(base64_encode($data->id))}}" style="color:blue;">Upgrade</a>
                        @endif
                    @else
                        Submitted
                    @endif
                </td>
                <td>
                    @if($data->status == 0)
                        <span class="bg-warning text-white">Pending</span>
                    @elseif($data->status == 1)
                        <span class="bg-success text-white">Approved</span>
                    @elseif($data->status == 2)
                       <a href="{{Route('adedit.customerAdEdit')}}?package={{base64_encode(base64_encode($data->id))}}&dr={{base64_encode(base64_encode($data->duration))}}"><span class="bg-danger text-white">Rejected</span></a>
                    @elseif($data->status == 3)
                        <span class="bg-danger text-white">Expired</span>
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
