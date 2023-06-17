@extends('backend.layouts.master')

@section('content')
<div class="main-content-inner">
    <div class="row">
       
                <!-- Form inputs start -->
                <div class="col-lg-12 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">All Rent Ads Product</h4>
                            <div class="data-tables">

                            @if($package != null)

                                <table id="dataTable" class="text-center">
                                    <thead class="bg-light text-capitalize">
                                        <tr>
                                            <th>SL</th>
                                            <th>Name</th>
                                            <th>Company</th>
                                            <th>Package</th>
                                            <th>Duration</th>
                                            <th>Payment Type</th>
                                            <th>Getway(Cash)</th>
                                            <th>Payment Status</th>
                                            <th>Action</th>
                                            <th>Comment</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $i = 1;
                                        @endphp
                                        @foreach($package as $data)
                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td>{{ucfirst($data->customer?->name)}}</td>
                                            <td>{{ucfirst($data->customer?->customerType)}}</td>
                                            <td>{{ucfirst($data->packageName)}}</td>
                                            <td>{{ucfirst($data->duration)}} Day</td>
                                            <td>{{ucfirst($data->paymentMethod)}}</td>
                                            <td>
                                                @if(isset($data->paymentGetway))
                                                    {{ucfirst($data->paymentGetway)}}
                                                @else
                                                    N/A
                                                @endif
                                            </td>
                                            <td>
                                                @if($data->payment == 0)
                                                    <span class="bg-danger text-white">Unpaid</span>
                                                @else
                                                    <span class="bg-success text-white">Paid</span>
                                                @endif
                                            </td>
                                            <td>
                                                
                                                @if($data->payment == 0)
                                                    <a onclick="return confirm('Are you sure?')" href="{{Route('payconfirm.PayConfirm').'/'.$data->id}}">Pay</a>
                                                @else
                                                    N/A
                                                @endif
                                                

                                            </td>
                                            <td>N/A</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                            @else
                                <hr>
                                <p class="h5 text-center">Data not found!</p>
                            @endif

                            </div>
                        </div>
                    </div>
                </div>
                <!-- Form inputs end -->
               
    </div>
</div>
@endsection