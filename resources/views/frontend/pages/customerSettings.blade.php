@extends('frontend.layouts.master')
@section('title', 'User Settings')
@section('content')

    @if (session()->has('failure'))
        <p class="text-danger text-center fs-4 mt-2 mb-0">{{ session()->get('failure') }}</p>
    @endif


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
                                            <p class="m-0 ml-4">Edit Profile</p>
                                        </div>

                                        <div class="my-3">
                                            <div class="card">
                                                <div class="card-body">

                                                    <div class="tab-content" id="myTabContent">
                                                        <div class="tab-pane fade show active" id="home"
                                                            role="tabpanel" aria-labelledby="home-tab">

                                                            @if (Session::has('message'))
                                                                <h5 class="form-text text-danger text-center">
                                                                    {{ Session::get('message') }}</h5>
                                                            @endif
                                                            {{-- <form class="my-4" id="customerLoginForm1" action="{{ Route('customer.customerUpdate') }}" method="POST"> --}}

                                                            <form class="my-4" id="custmerSettings" method="POST"
                                                                enctype="multipart/form-data">
                                                                @csrf
                                                                <input type="hidden" name="id"
                                                                    value="{{ Auth::guard('customer')->id() }}">
                                                                <div class="form-group">
                                                                    <div class="as-pf-setup">
                                                                        <div class="as-pf-img">
                                                                            <img src="{{ Auth::guard('customer')->user()->image ? asset(Auth::guard('customer')->user()->image) : 'frontend/assets/images/author/avatar.png' }}"
                                                                                alt="Image" id="imageSettingsPreview">
                                                                            <input type="file" name="image"
                                                                                id="fileinputSettings"
                                                                                style="height: 0;padding:0;margin:0;">
                                                                            <div class="edit-btn"><i class="fa fa-edit"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label>Name *</label>
                                                                    <input type="text" name="name"
                                                                        class="form-control"
                                                                        value="{{ Auth::guard('customer')->user()->name }}"
                                                                        placeholder="Enter name">
                                                                    <small id="errname" class="form-text"></small>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label>Email or Phone *</label>
                                                                    <input type="text" name="mailPhone"
                                                                        class="form-control"
                                                                        value="{{ Auth::guard('customer')->user()->mailPhone }}"
                                                                        placeholder="Email or phone">
                                                                    <small id="errmailPhone" class="form-text"></small>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label>NID Number</label>
                                                                    <input type="text" name="nid"
                                                                        class="form-control"
                                                                        value="{{ Auth::guard('customer')->user()->nid }}"
                                                                        placeholder="National ID number (Optional)">
                                                                    <small id="errnid" class="form-text"></small>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label>Address *</label>
                                                                    <input type="text" name="address"
                                                                        class="form-control"
                                                                        value="{{ Auth::guard('customer')->user()->address }}"
                                                                        placeholder="Address">
                                                                    <small id="erraddress" class="form-text"></small>
                                                                </div>

                                                                @if (Auth::guard('customer')->user()->companyName)
                                                                <div class="form-group">
                                                                    <label for="rentProduct">Company Name</label>
                                                                    <input type="text" name="companyName" value="{{ Auth::guard('customer')->user()->companyName }}" class="form-control">
                                                                    <small id="errcompanyName" class="form-text"></small>
                                                                </div>
                                                                @endif
                                                                @if (Auth::guard('customer')->user()->businessType)
                                                                <div class="form-group">
                                                                    <label for="rentProduct">Business Type </label>
                                                                    <input type="text" name="businessType" value="{{ Auth::guard('customer')->user()->businessType }}" class="form-control">
                                                                    <small id="errbusinessType" class="form-text"></small>
                                                                </div>
                                                                @endif
                                                                @if (Auth::guard('customer')->user()->tradelince)
                                                                <div class="form-group">
                                                                    <label for="rentProduct">Tradelince</label>
                                                                    <input type="text" name="tradelince" value="{{ Auth::guard('customer')->user()->tradelince }}" class="form-control">
                                                                    <small id="errtradelince" class="form-text"></small>
                                                                </div>
                                                                @endif

                                                                <button type="submit" class="btn btn-primary"
                                                                    style="background-color: #572c84!important;border-color: #572c84!important;">Save
                                                                    Change</button>
                                                            </form>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>

                                            <div class="ownerName mt-5">
                                                <p class="m-0 ml-4">Change Password</p>
                                            </div>

                                            <div class="card my-3">
                                                <div class="card-body">

                                                    <div class="tab-content" id="myTabContent">
                                                        <div class="tab-pane fade show active" id="home"
                                                            role="tabpanel" aria-labelledby="home-tab">




                                                            <form class="my-4" id="cuspasschange" method="POST">
                                                                @csrf

                                                                <div class="form-group">
                                                                    <label>Old Password *</label>
                                                                    <input type="password" name="oldpassword"
                                                                        class="form-control" placeholder="Password">
                                                                    <small id="erroldpassword"
                                                                        class="form-text text-danger"></small>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label>New Password *</label>
                                                                    <input type="password" name="password"
                                                                        class="form-control" placeholder="Password">
                                                                    <small id="errpassword"
                                                                        class="form-text text-danger"></small>

                                                                </div>

                                                                <div class="form-group">
                                                                    <label>Confirm Password *</label>
                                                                    <input type="password" name="repassword"
                                                                        class="form-control"
                                                                        placeholder="Confirm Password">
                                                                    <small id="errrepassword"
                                                                        class="form-text text-danger"></small>

                                                                </div>

                                                                <button type="submit" class="btn btn-primary"
                                                                    style="background-color: #572c84!important;border-color: #572c84!important;">Save
                                                                    Change</button>
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
