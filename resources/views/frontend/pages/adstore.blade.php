@extends('frontend.layouts.master')
@section("title", "Adstore")
@section('content')
    <div class="mt-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                <div class="carousel-item active">
                                    <img src="{{ asset('frontend/assets/images/ad-banner2.jpg') }}" class="ad-store-img">
                                </div>

                                <div class="carousel-item">
                                    <a href="">
                                        <img src="{{ asset('frontend/assets/images/ad-banner2.jpg') }}" alt=""
                                            class="ad-store-img">
                                    </a>

                                </div>

                                <div class="carousel-item">
                                    <a href="">
                                        <img src="{{ asset('frontend/assets/images/ad-banner2.jpg') }}" alt=""
                                            class="ad-store-img">
                                    </a>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="mb-4">
                        <h1 class="adstore-header-text text-center">Hello, Welcome to our ad store.<br />
                            We are delighted to have you as our customer</h1>
                        <h2 class="adstore-header-text-2 mt-4 mb-5 text-center">For Post Your Ad, Please Select an Option Below</h3>
                    </div>

                    <div class="row justify-content-between">
                        <div class="col-lg-3 col-sm-4">
                            <div class="ad-list align-items-center justify-content-center"
                                style="justify-content: center;align-items: center;margin: 0 auto;">
                                <ul class="list-group" style="background-color: #e2e2e2;padding: 6px;border-radius: 0px">
                                    <a href="" data-toggle="modal" data-target="#salesModal">
                                        <li class="list-group-item text-white mb-2 border-0 text-center font-weight-bold list-design"
                                            style="background-color: #ec5223;">Sale Ad</li>
                                    </a>
                                   

                                    <a href="" data-toggle="modal" data-target="#salesModal">
                                        <li class="list-group-item my-2 text-dark border-0 font-weight-bold list-design">
                                            Product</li>
                                    </a>
                                   
                                    <a href="#" data-toggle="modal" data-target="#salesModal">
                                        <li class="list-group-item my-2 text-dark border-0 font-weight-bold list-design">
                                            Property</li>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#salesModal">
                                        <li class="list-group-item text-dark mt-2 border-0 font-weight-bold list-design">
                                            Service</li>
                                    </a>
                                    @include('frontend.pages.sales_modal')
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-4">
                            <div class="ad-list">
                                <ul class="list-group" style="background-color: #e2e2e2;padding: 6px;border-radius: 0px">
                                    <a href="" data-toggle="modal" data-target="#buyModal">
                                        <li class="list-group-item text-white mb-2 border-0 text-center font-weight-bold list-design"
                                            style="background-color: #ec5223;">Buy Ad</li>
                                    </a>
                                   
                                    <a href="" data-toggle="modal" data-target="#buyModal">
                                        <li class="list-group-item my-2 text-dark border-0 font-weight-bold list-design">
                                            Product</li>
                                    </a>
                                    <a href="" data-toggle="modal" data-target="#buyModal">
                                        <li class="list-group-item my-2 text-dark border-0 font-weight-bold list-design">
                                            Property</li>
                                    </a>
                                    <a href="" data-toggle="modal" data-target="#buyModal">
                                        <li class="list-group-item text-dark mt-2 border-0 font-weight-bold list-design">
                                            Service</li>
                                    </a>
                                    @include('frontend.pages.buy_modal')
                                </ul>
                            </div>

                        </div>
                        <div class="col-lg-3 col-sm-4">
                            <div class="ad-list">
                                <ul class="list-group" style="background-color: #e2e2e2;padding: 6px;border-radius: 0px">
                                    <a href="" data-toggle="modal" data-target="#rentModal" >
                                        <li class="list-group-item text-white mb-2 border-0 text-center font-weight-bold list-design"
                                            style="background-color: #ec5223;">Rent Ad</li>
                                    </a>
                                    <a href="" data-toggle="modal" data-target="#rentModal">
                                        <li class="list-group-item my-2 text-dark border-0 font-weight-bold list-design">For
                                            Rent</li>
                                    </a>
                                    <a href="" data-toggle="modal" data-target="#rentModal">
                                        <li class="list-group-item my-2 text-dark border-0 font-weight-bold list-design">To
                                            Rent</li>
                                    </a>
                                    <a href="" data-toggle="modal" data-target="#rentModal">
                                        <li class="list-group-item text-dark mt-2 border-0 font-weight-bold list-design">
                                            Promotional</li>
                                    </a>
                                    @include('frontend.pages.rent_modal')
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
