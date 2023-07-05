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
        <div class="col-lg-8 col-md-10 m-auto">

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
                                                    <img src="/customerImage/3f44f83c03.jpg" alt="Image" style="width:180px; height:200px; margin:auto">
                                                    <h3 class="mt-4 mb-3">Dipankar Biswas</h3>
                                                    <h6 class="mb-3">Phone : 01741571104</h6>
                                                    <h6 class="mb-3">NID : 415711048</h6>
                                                    <h6 class="mb-3">Address : <span class="text-secondary ">SDOuiorrf sdfiohgssdf gfiogfosdghdfs</span></h6>
                                                </div>
                                            </div>
                                            <div class="col-lg-7 col-md-6 col-12">
                                                <div class="cus-details">
                                                    <div class="box">
                                                        <h5>Company Information</h5>
                                                        <hr>
                                                        <p class="mb-2">Company Type : Phone</p>
                                                        <p class="mb-2">Company Type : Phone</p>
                                                        <p class="mb-2">Company Type : Phone</p>
                                                        <p class="mb-2">Company Type : Phone</p>
                                                        <p class="mb-2">Company Type : Phone</p>
                                                        <p class="mb-2">Company Type : Phone</p>
                                                    </div>
                                                    <div class="box mt-5">
                                                        <h5>Ads Information</h5>
                                                        <hr>
                                                        <p class="mb-2">Company Type : Phone</p>
                                                        <p class="mb-2">Company Type : Phone</p>
                                                        <p class="mb-2">Company Type : Phone</p>
                                                        <p class="mb-2">Company Type : Phone</p>
                                                        <p class="mb-2">Company Type : Phone</p>
                                                        <p class="mb-2">Company Type : Phone</p>
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
