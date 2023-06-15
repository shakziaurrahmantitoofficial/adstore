@extends('backend.layouts.master')

@section('content')
<div class="main-content-inner">
    <div class="row">
       
        <!-- Form inputs start -->
        <div class="col-lg-8 col-md-10 m-auto">

            <div class="card mt-5">
                <div class="card-body">
                    <div class="ownerName mt-2">
                        <h5 class="m-0 ml-4">Edit Profile</h5>
                    </div>
                    <hr>

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

                                        <form class="my-4" id="adminUserProfile" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="id"
                                                value="{{ $users->id }}">
                                            <div class="form-group">
                                                <div class="as-pf-setup">
                                                    <div class="as-pf-img imageChange">
                                                        <img src="{{ $users->image ? asset($users->image) : 'frontend/assets/images/author/avatar.png' }}"
                                                            alt="Image" class="imagePreview">
                                                        <input type="file" name="image"
                                                            class="imageSelect"
                                                            style="height: 0;padding:0;margin:0;">
                                                        <div class="edit-btn imageTigger"><i class="fa fa-edit"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label>Name *</label>
                                                <input type="text" name="name"
                                                    class="form-control"
                                                    value="{{ $users->name }}">
                                                <small id="errname" class="form-text"></small>
                                            </div>

                                            <div class="form-group">
                                                <label>Email *</label>
                                                <input type="text" name="email"
                                                    class="form-control"
                                                    value="{{ $users->email }}">
                                                <small id="erremail" class="form-text"></small>
                                            </div>

                                            <button type="submit" class="btn btn-primary"
                                                style="background-color: #572c84!important;border-color: #572c84!important;">Save
                                                Change</button>
                                        </form>
                                    </div>

                                </div>

                            </div>
                        </div>

                        <div class="ownerName mt-5">
                            <h5 class="m-0 ml-4">Change Password</h5>
                        </div>
                        <hr>
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="home"
                                        role="tabpanel" aria-labelledby="home-tab">

                                        <form class="my-4" id="adminUserPassowrd" method="POST">
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