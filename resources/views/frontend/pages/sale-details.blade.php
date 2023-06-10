@extends('frontend.layouts.master')
@section("title", "Details")
@section('content')
   
        <div class="container">
           

                        <div class="row">
                            <div class="col-lg-2"></div>
                            <div class="col-lg-10">
                                <h2 class="py-2 text-left w-700" style="font-size:24px; font-family: 'Roboto', sans-serif;">Details Sale Ad</h2>
                                    <div class="mt-3">
                                        <img src="{{ asset('images/sales/' . $saleItem->image) }}" alt="{{ $saleItem->name ?? '' }}"  height="360px" width="100%" class="">
                                    </div>
                                    <div class="mt-3">
                                        <h4>{{ $saleItem->name }}</h4>
                                        <p>{{ $saleItem->type }}</p>
                                        <p>{{ $saleItem->description }}</p>
                                    </div>
                            </div>
                        </div>
                        

    </div>

    <!-- Banner -->

    
    <!-- Footer -->
    </div>
@endsection
