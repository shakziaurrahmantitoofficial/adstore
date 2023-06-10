@extends('frontend.layouts.master')
@section("title", "Search")
@section('content')

        @if (isset($searchItem) && $searchItem != null)
        <!-- Rent Ads Section -->
        <section id='rentAd' class="">
            <!-- <h2 class="py-3 text-center w-700 border-bottom border-top" style="font-size:24px; font-family: 'Roboto', sans-serif;">All Rent Ad</h2> -->
            <div class="container pt-1 pb-2">
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-10">
                    <div class="row">
                        @foreach ($searchItem as $key => $regularData)
                            <div class="col-lg-6 col-sm-6 col-xs-6">
                                <div class="mt-4">

                                    <a href="{{ $regularData->link }}" class="border border-secondary d-block py-2 px-2">

                                        <div class="row as-ad-card">
                                            <div class="col-5">
                                                <img src="{{ asset($regularData->image) }}" alt="{{ $regularData->name }}" class="saleimg" style="height: 160px;">
                                            </div>
                                            <div class="col-7">
                                                <div class="content d-block">

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
                </div>
                </div>
            </div>
            </div>
        </section>

        @else
            <p class="h4 text-center my-5">Sorry! <span class="text-danger">'{{$search}}'</span> not found!</p>
        @endif

        <!-- Footer -->
    </div>










    </div>

@endsection
