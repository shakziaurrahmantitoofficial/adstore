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
                                                <input type="checkbox" onclick="" data-type="sale" class="chbox"
                                                    name="mycheckbox" value="product">
                                                <span class="aiz-square-check"></span>
                                                <span class="fs-13 fs-md-13">Product</span>
                                            </label>
                                            <label class="aiz-checkbox">
                                                <input type="checkbox" name="mycheckbox" class="chbox" data-type="sale"
                                                    value="property">
                                                <span class="aiz-square-check"></span>
                                                <span class="fs-13 fs-md-13">Property</span>
                                            </label>
                                            <label class="aiz-checkbox">
                                                <input type="checkbox" name="mycheckbox" class="chbox" data-type="sale"
                                                    value="service">
                                                <span class="aiz-square-check"></span>
                                                <span class="fs-13 fs-md-13">Service</span>
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
                                                <input type="checkbox" class="chbox" data-type="buy" name="mycheckbox"
                                                    value="product">
                                                <span class="aiz-square-check"></span>
                                                <span class="fs-13 fs-md-13">Product</span>
                                            </label>
                                            <label class="aiz-checkbox">
                                                <input type="checkbox" name="mycheckbox" class="chbox" data-type="buy"
                                                    value="property">
                                                <span class="aiz-square-check"></span>
                                                <span class="fs-13 fs-md-13">Property</span>
                                            </label>
                                            <label class="aiz-checkbox">
                                                <input type="checkbox" name="mycheckbox" class="chbox" data-type="buy"
                                                    value="service">
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
                                                <input type="checkbox" name="mycheckbox" class="chbox" data-type="rent"
                                                    value="for_rent">
                                                <span class="aiz-square-check"></span>
                                                <span class="fs-13 fs-md-13">For Rent</span>
                                            </label>
                                            <label class="aiz-checkbox">
                                                <input type="checkbox" name="mycheckbox" value="to_rent" class="chbox"
                                                    data-type="rent">
                                                <span class="aiz-square-check"></span>
                                                <span class="fs-13 fs-md-13">To Rent</span>
                                            </label>
                                            <label class="aiz-checkbox">
                                                <input type="checkbox" name="mycheckbox" value="promotional"
                                                    class="chbox" data-type="rent">
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

                        @if ($platinum != null)
                            <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12 pr-0 pl-0">
                                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                            @foreach ($platinum as $item)
                                                <div class="carousel-item {{ $loop->index == 0 ? 'active' : '' }}">
                                                    <div class="header-banner">
                                                        <a href="{{ $item->link }}">
                                                            <img src="{{ $item['image'] }}" alt="{{ $item->title }}"
                                                                style="width:100%; height: 100%">
                                                        </a>
                                                    </div>
                                                </div>
                                            @endforeach


                                            {{-- <div class="carousel-item">
                                                <a href="">
                                                    <img src="{{ asset('frontend/assets/images/banner7.png') }}"
                                                        alt="" class="banner1">
                                                </a>

                                            </div> --}}

                                        </div>
                                        <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#myCarousel" role="button"
                                            data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endif


                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Banner -->
    <div id="all_section_filter_disable">
        <section id='allOffer' class="">
            <div class="container pt-3 pb-2">
                <div class="row">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-10">
                        <h2 class="py-1 text-left w-700" style="font-size:24px; font-family: 'Roboto', sans-serif;">All
                            Offer
                        </h2>

                        <div id="secondCarousel" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div id="secondCarousel" class="carousel slide" data-ride="carousel">
                                    @foreach ($data as $item)
                                        <div class="carousel-item {{ $loop->index == 0 ? 'active' : '' }}">
                                            <a href="">
                                                <img src="{{ $item['photo'] }}" alt="" class="banner1">
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                                <a class="carousel-control-prev" href="#secondCarousel" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#secondCarousel" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-10">
                        <div class="bbb_main_container">
                            <div class="bbb_viewed_nav bbb_viewed_prev"><i class="fas fa-chevron-left"></i></div>
                            <div class="bbb_viewed_nav bbb_viewed_next"><i class="fas fa-chevron-right"></i></div>
                            <div class="bbb_viewed_slider_container">
                                <div class="owl-carousel owl-theme bbb_viewed_slider d-flex">
                                    @foreach ($platinum_data as $item)
                                        <div class="owl-item" style="margin-right: 10px !important">
                                            <div
                                                class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                <div class="bbb_viewed_image">
                                                    <img src="{{ $item['photo'] }}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <div class="bbb_main_container">
                            <div class="bbb_viewed_nav bbb_viewed_prev_2"><i class="fas fa-chevron-left"></i></div>
                            <div class="bbb_viewed_nav bbb_viewed_next_2"><i class="fas fa-chevron-right"></i></div>
                            <div class="bbb_viewed_slider_container">
                                <div class="owl-carousel owl-theme bbb_viewed_slider_2 d-flex">
                                    @foreach ($advertisement_data as $item)
                                        <div class="owl-item">
                                            <div
                                                class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                <div class="bbb_viewed_image-2">
                                                    <img src="" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </section>


        @if ($gold != null)
            <section id='saleAd' class="">
                <!-- <h2 class="py-3 text-center w-700 border-bottom border-top" style="font-size:24px; font-family: 'Roboto', sans-serif;">All Sale Ad</h2> -->
                <div class="container pt-2">
                    <div class="row">
                        <div class="col-lg-2"></div>
                        <div class="col-lg-10">
                            <h2 class="py-1 text-left w-700" style="font-size:24px; font-family: 'Roboto', sans-serif;">
                                All Sale Ad(Gold)</h2>
                            <div id="saleCarousel" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div id="saleCarousel" class="carousel slide" data-ride="carousel">
                                        @foreach ($gold as $key => $golddata)
                                            <div class="carousel-item {{ $loop->index == 0 ? 'active' : '' }} ">
                                                <a href="{{ $golddata->link }}">
                                                    <img src="{{ asset($golddata->image) }}" alt="{{ $golddata->title }}"
                                                        class="banner1">
                                                </a>

                                            </div>
                                        @endforeach

                                    </div>
                                    <a class="carousel-control-prev" href="#saleCarousel" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#saleCarousel" role="button"
                                        data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif

        @if ($silver != null)
        <section id='buyAd' class="">
            <!-- <h2 class="py-3 text-center w-700 border-bottom border-top" style="font-size:24px; font-family: 'Roboto', sans-serif;">All Sale Ad</h2> -->
            <div class="container pt-1">
                <div class="row">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-10">
                        <h2 class="py-1 text-left w-700" style="font-size:24px; font-family: 'Roboto', sans-serif;">All
                            Buy Ad(Silver)</h2>
                        <div id="buyCarousel" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div id="buyCarousel" class="carousel slide" data-ride="carousel">
                                    @foreach ($silver as $key => $silverData)
                                        <div class="carousel-item {{ $loop->index == 0 ? 'active' : '' }} ">
                                            <a href="{{$silverData->link}}">
                                                <img src="{{ asset($silverData->image) }}"
                                                    alt="{{ $silverData->title ?? '' }}" class="banner1">
                                            </a>

                                        </div>
                                    @endforeach
                                </div>
                                <a class="carousel-control-prev" href="#buyCarousel" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#buyCarousel" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2"></div>
                    @foreach ($buy_ads as $key => $buy_ad)
                        @php
                            $key = $key + 1;
                        @endphp
                        @if ($key % 3 == 0)
                            <div class="col-lg-2"></div>
                        @endif
                        <div class="col-lg-5 col-sm-6">
                            <div class="mt-4"><a href="{{ route('show-buy', $buy_ad->id) }}">
                                    <img src="{{ asset('images/buy_ad/' . $buy_ad->image) }}"
                                        alt="{{ $buy_ad->name ?? '' }}" class="saleimg">
                                </a>
                            </div>
                        </div>
                    @endforeach
                    <div class="" id="paginations" style="margin: 20px auto!important;">
                        {{ $buy_ads->links() }}
                    </div>
                </div>
            </div>
        </section>
        @endif

        <!-- Rent Ads Section -->
        <section id='rentAd' class="">
            <!-- <h2 class="py-3 text-center w-700 border-bottom border-top" style="font-size:24px; font-family: 'Roboto', sans-serif;">All Rent Ad</h2> -->
            <div class="container pt-1 pb-2">


            <div class="row">

                <div class="col-lg-2"></div>

                <div class="col-lg-10">



                    <div class="row">


                        @foreach ($regular as $key => $regularData)
                            @php
                                $key = $key + 1;
                            @endphp
                            @if ($key % 3 == 0)
                                {{-- @dump($key) --}}
                                <div class="col-lg-2"></div>
                            @endif

                            <div class="col-lg-6 col-sm-6 col-xs-6">
                                <div class="mt-4">

                                    <a href="{{ $regularData->link }}" class="border border-secondary d-block py-2 px-2">

                                        <div class="row as-ad-card">
                                            <div class="col-sm-5">
                                                <img src="{{ asset($regularData->image) }}" alt="{{ $regularData->name }}" class="saleimg" style="height: 160px;">
                                            </div>
                                            <div class="col-sm-7">
                                                <div class="content">

                                                    <h2 class="fw-bold" style="font-size:18px;color:#000">{{ $regularData->title }}</h2>

                                                    <p class="text-secondary">{{ $regularData->description }}</p>
                                                    <!-- <div class="price" style="font-size: 20px;color:tomato">৳ ৩৫,০০০</div> -->
                                                </div>
                                            </div>
                                        </div>

                                    </a>
                                </div>
                            </div>

                        @endforeach
                        <div class="" id="paginations" style="margin: 20px auto!important;">
                            {{ $sales->links() }}
                        </div>
                </div>






                </div>
            </div>
                




            </div>
        </section>

        <!-- Footer -->
    </div>







    <div id="all_section_filter_enable">

        <section id='saleAd' class="">
            <!-- <h2 class="py-3 text-center w-700 border-bottom border-top" style="font-size:24px; font-family: 'Roboto', sans-serif;">All Sale Ad</h2> -->
            <div class="container pt-2 pb-2">

                <div class="row" id="allAdd">

                </div>

            </div>
        </section>
    </div>


    </div>

@endsection
