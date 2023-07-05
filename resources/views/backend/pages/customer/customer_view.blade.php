@extends('backend.layouts.master')

@section('content')
<div class="main-content-inner">
    <div class="row">

        @section('breadcrumbs')
        <ul class="breadcrumbs pull-left">
            <li><a href="{{ url('/') }}">Dashboard</a></li>
            <li><span>Customer</span></li>
        </ul>
        @endsection
       
        <!-- Form inputs start -->
        <div class="col-lg-10 col-md-10 m-auto">

            <div class="card mt-5">
                <div class="card-body">
                    <div class="ownerName mt-2">
                        <h5 class="m-0 ml-4">Customer Information</h5>
                    </div>
                    <hr>

                    <div class="my-3">
                        <div class="card">
                            <div class="card-body">

                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="home"
                                        role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-lg-5 col-md-6 col-12">
                                                <div class="cus-info">
                                                    <img src="{{asset($customer->image)}}" alt="Image" style="width:180px; height:200px; margin:auto">
                                                    <h3 class="mt-4 mb-3">{{$customer->name}}</h3>
                                                    <h6 class="mb-3">Phone : {{$customer->mailPhone}}</h6>
                                                    <h6 class="mb-3">NID : {{$customer->nid}}</h6>
                                                    <h6 class="mb-3">Address : <span class="text-secondary ">{{$customer->address}}</span></h6>
                                                </div>
                                            </div>
                                            <div class="col-lg-7 col-md-6 col-12">
                                                <div class="cus-details">
                                                    <div class="box">
                                                        <h5>Company Information</h5>
                                                        <hr>

                                                        <p class="mb-2"><strong>Company Name</strong> : {{isset($customer->customerName) ? $customer->customerName : "N/A"}}</p>

                                                        <p class="mb-2"><strong>Company Type</strong> : {{isset($customer->customerType) ? $customer->customerType : "N/A"}}</p>

                                                        <p class="mb-2"><strong>Business Type</strong> : {{isset($customer->businessType) ? $customer->businessType : "N/A"}}</p>
                                                        <p class="mb-2"><strong>Trade License</strong> : {{isset($customer->tradelince) ? $customer->tradelince : "N/A"}}</p>
                                                    </div>

                                                    <div class="box mt-5">
                                                        <h5>Account Info</h5>
                                                        <hr>
                                                        <p class="mb-2"><strong>Account Status</strong> : 
                                                            @if($customer->status == 1)
                                                                <span class="badge badge-pill badge-success">Active</span>
                                                            @else
                                                                <span class="badge badge-pill badge-danger">Inactive</span>
                                                            @endif
                                                        </p>
                                                    </div>

                                                    <div class="box mt-5">
                                                        <h5>Ads Information</h5>
                                                        <hr>
                                                @if(App\Models\ads::where('id', $customer->id)->count() > 0)
                                                        <table class="table">
                                                            <tr>
                                                                <th>SL</th>
                                                                <th>Title</th>
                                                                <th>Package</th>
                                                                <th>Start</th>
                                                                <th>Expire</th>
                                                                <th>Image</th>
                                                                <th>Status</th>
                                                            </tr>


                                                        @foreach(App\Models\ads::where('customerId', $customer->id)->get() as $data)
                                                            <tr>
                                                                <td>{{$loop->index + 1}}</td>
                                                                <td>{{substr($data->title, 0 , 20)}}</td>

                                                                <td>{{$data->package?->packageName}}</td>

                                                                <td>{{date("d M Y",$data->adstartTime)}}</td>
                                                                <td>{{date("d M Y", $data->adstartTime + $data->duration)}}</td>
                                                                <td>
                                                                    <a href="{{asset($data->image)}}" target="_blank">
                                                                    <img src="{{asset($data->image)}}" width="60"></a>
                                                                </td>
                                                                <td>
                                                                    @if($data->status == 0)
                                                                        <span class="badge badge-pill badge-secondary">Pending</span>
                                                                    @elseif($data->status == 1)
                                                                        <span class="badge badge-pill badge-success">Active</span>
                                                                    @elseif($data->status == 2)
                                                                        <span class="badge badge-pill badge-danger">Rejected</span>
                                                                    @elseif($data->status == 3)
                                                                        <span class="badge badge-pill badge-info">Expired</span>
                                                                    @else
                                                                        <span class="badge badge-pill badge-danger">Unknown</span>
                                                                    @endif
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                        </table>
                                                @else
                                                    <p class="text-center">Ads not found!</p>
                                                @endif

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
        <!-- Form inputs end -->
               
    </div>
</div>


<style>
    .as-pf-setup {
        margin: auto;
        display: table;
    }

    .as-pf-img {
        position: relative;
        width: 110px;
        height: 110px;
        border: 3px solid #ddd;
        border-radius: 50%;
        background-color: #f7f7f7;
    }

    .as-pf-img img {
        width: 104px;
        height: 104px;
        line-height: 104px;
        object-fit: cover;
        overflow: hidden;
        border-radius: 50%;
    }

    .as-pf-img .edit-btn {
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        cursor: pointer;
        transition: all 0.3s ease 0s;
        -webkit-transition: all 0.3s ease 0s;
    }

    .as-pf-img .edit-btn i {
        font-size: 20px;
        color: #000;
        cursor: pointer;
        display: none;
    }

    .as-pf-img:hover::before {
        position: absolute;
        content: '';
        width: 100%;
        height: 100%;
        border-radius: 50%;
        background-color: rgba(0, 0, 0, .35);
    }

    .as-pf-img:hover .edit-btn i {
        color: #fff;
        display: block;
    }

    @media only screen and (max-width: 767px) {
        .as-pf-img:hover::before {
            position: relative;
            background-color: none;
        }

        .as-pf-img .edit-btn {
            left: auto !important;
            top: auto !important;
            bottom: 0 !important;
            right: 6px !important;
            transform: none;
        }

        .as-pf-img .edit-btn i {
            display: block;
        }

        .as-pf-img:hover .edit-btn i {
            color: #777;
        }
    }
</style>
@endsection
