@extends('frontend.layouts.master')

@section('content')
    <div class="under-header-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row position-relative
                ">
                        <div class="col-lg-2 d-none d-lg-block p-0">
                            <div class="sidebar z-1020 cat-hover category-shadow-sm pt-0" style="background-color: #f5f7fa;">
                                <div class="pr-3 pl-3 pt-2 pb-1 d-none d-lg-block all-category position-relative text-left">
                                    <a href="https://sobkisubazar.com/categories" class="text-reset">
                                        <span class="fw-700 mr-3 sidebar-title">Category Filter</span>
                                    </a>
                                </div>


                                <div class="shadow-sm rounded" style="background-color: #f5f7fa;">
                                    <div class="fw-600 px-3 sidebar-subtitle">
                                        <a class="text-dark" href="#saleAd">Sale Ad</a>
                                    </div>
                                    <div class="px-4">
                                        <div class="aiz-checkbox-list">
                                            <label class="aiz-checkbox">
                                                <input type="checkbox" name="product" value="product">
                                                <span class="aiz-square-check"></span>
                                                <a href="#saleProduct"><span class="fs-13 fs-md-13">Product</span></a>
                                            </label>

                                            <label class="aiz-checkbox">
                                                <input type="checkbox" name="property" value="property">
                                                <span class="aiz-square-check"></span>
                                                <a href="#saleProperty"><span class="fs-13 fs-md-13">Property</span></a>
                                            </label>
                                            <label class="aiz-checkbox">
                                                <input type="checkbox" name="service" value="service" onchange="filter()">
                                                <span class="aiz-square-check"></span>
                                                <a href="#saleService"><span class="fs-13 fs-md-13">Service</span></a>

                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="shadow-sm rounded" style="background-color: #f5f7fa;">
                                    <div class="fw-600 px-3 sidebar-subtitle">
                                        <a class="text-dark" href="#buyAd">Buy Ad</a>
                                    </div>
                                    <div class="px-4">
                                        <div class="aiz-checkbox-list">
                                            <label class="aiz-checkbox">
                                                <input type="checkbox" name="Product" value="Product" onchange="filter()">
                                                <span class="aiz-square-check"></span>
                                                <span class="fs-13 fs-md-13">Product</span>
                                            </label>
                                            <label class="aiz-checkbox">
                                                <input type="checkbox" name="Property" value="Property" onchange="filter()">
                                                <span class="aiz-square-check"></span>
                                                <span class="fs-13 fs-md-13">Property</span>
                                            </label>
                                            <label class="aiz-checkbox">
                                                <input type="checkbox" name="Service" value="Service" onchange="filter()">
                                                <span class="aiz-square-check"></span>
                                                <span class="fs-13 fs-md-13">Service</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="shadow-sm rounded" style="background-color: #f5f7fa;">
                                    <div class="fw-600 px-3 sidebar-subtitle">
                                        <a class="text-dark" href="#rentAd">Rent Ad</a>
                                    </div>
                                    <div class="px-4">
                                        <div class="aiz-checkbox-list">
                                            <label class="aiz-checkbox">
                                                <input type="checkbox" name="ForRent" value="ForRent" onchange="filter()">
                                                <span class="aiz-square-check"></span>
                                                <span class="fs-13 fs-md-13">For Rent</span>
                                            </label>
                                            <label class="aiz-checkbox">
                                                <input type="checkbox" name="ToRent" value="ToRent" onchange="filter()">
                                                <span class="aiz-square-check"></span>
                                                <span class="fs-13 fs-md-13">To Rent</span>
                                            </label>
                                            <label class="aiz-checkbox">
                                                <input type="checkbox" name="CorporateAds" value="CorporateAds"
                                                    onchange="filter()">
                                                <span class="aiz-square-check"></span>
                                                <span class="fs-13 fs-md-13">Corporate Ads</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="shadow-sm rounded" style="background-color: #f5f7fa;">
                                    <div class="fw-600 px-3 pb-1 sidebar-subtitle">
                                        <a class="text-dark" href="#allOffer">All Offer</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- all offer big banner from sob kisu baazar --}}
                        <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12 pr-0 pl-0">
                            <section id='saleAd' class="">
                                <!-- <h2 class="py-3 text-center w-700 border-bottom border-top" style="font-size:24px; font-family: 'Roboto', sans-serif;">All Sale Ad</h2> -->
                                <div class="container pt-2 pb-2">
                                    
                        
                                   
                                    <div class="row">
                                        <div class="col-lg-2"></div>
                                        @foreach ($searchItem as $search)
                                            
                                            <div class="col-lg-5 col-sm-6">
                                                <div class="mt-4">
                                                    <h2 class="py-1 text-left w-700" style="font-size:24px; font-family: 'Roboto', sans-serif;">{{ $search->name }}</h2>
                                                    <a href="#">
                                                        <img src="{{ asset('images/sales/' . $search->image) }}"
                                                            alt="{{ $search->name ?? '' }}" class="saleimg">
                                                    </a>
                                                </div>
                                            </div>
                                        @endforeach
                                        <div class="" style="margin: 20px auto!important;">
                                             {{ $searchItem->appends(request()->input())->links() }}
                                        </div>
                                    </div>
                                    
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Banner -->

    
    <!-- Footer -->
    </div>
@endsection
