@extends('frontend.layouts.master')
@section("title", "Ad Edit")

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
                                            <p class="m-0 ml-4">Edit Ads</p>
                                        </div>

                                        <div class="my-3">

                                            @if ($errors->any())
                                                <ul class="list-unstyled alert alert-danger">
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            @endif

                                            <form class="form mx-2" action="{{ Route('customeradUpdate.cusadupdate') }}"
                                                method="post" enctype="multipart/form-data">
                                                @csrf

                                                <input type="hidden" name="adId" value="{{$AdsData->id}}">

                                                <div class="form-group">
                                                    <input type="text" name="title" class="form-control"
                                                        value="{{ $AdsData->title }}" placeholder="Ad title" required>
                                                </div>

                                                <div class="form-group">
                                                    <input type="text" name="link" class="form-control"
                                                        value="{{ $AdsData->link }}" placeholder="Target link" required>
                                                </div>

                                                <div class="form-group">
                                                    <textarea cols="8" rows="6" name="description" class="form-control" placeholder="Ad Description" required>{{ $AdsData->description }}</textarea>
                                                </div>

                                                <div class="form-group">
                                                    <select class="form-control" name="adType" required>
                                                        <option value="">Select Ads Type </option>
                                                        <option value="rent"
                                                            {{ $AdsData->adType == 'rent' ? 'selected' : '' }}>Promotional Ad
                                                        </option>
                                                        <option value="buy"
                                                            {{ $AdsData->adType == 'buy' ? 'selected' : '' }}>Buy Ad
                                                        </option>
                                                        <option value="sale"
                                                            {{ $AdsData->adType == 'sale' ? 'selected' : '' }}>Sale Ad
                                                        </option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <select class="form-control" name="adservicetype" required>
                                                        <option value="">Select Service</option>
                                                        <option value="product"
                                                            {{ $AdsData->adservicetype == 'product' ? 'selected' : '' }}>
                                                            Product
                                                        </option>
                                                        <option value="property"
                                                            {{ $AdsData->adservicetype == 'property' ? 'selected' : '' }}>
                                                            Property</option>
                                                        <option value="service"
                                                            {{ $AdsData->adservicetype == 'service' ? 'selected' : '' }}>
                                                            Service</option>
                                                        <option value="for_rent"
                                                            {{ $AdsData->adservicetype == 'for_rent' ? 'selected' : '' }}>
                                                            For
                                                            Promotional</option>
                                                        <option value="to_rent"
                                                            {{ $AdsData->adservicetype == 'to_rent' ? 'selected' : '' }}>To
                                                            Promotional</option>
                                                        <option value="corporate_ads"
                                                            {{ $AdsData->adservicetype == 'corporate_ads' ? 'selected' : '' }}>
                                                            Corporate Ads</option>
                                                        <option value="buy"
                                                            {{ $AdsData->adservicetype == 'buy' ? 'selected' : '' }}>Buy Ad
                                                        </option>
                                                        <option value="sale"
                                                            {{ $AdsData->adservicetype == 'sale' ? 'selected' : '' }}>Sale
                                                            Ad
                                                        </option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <input type="file" name="image" id="ImageFile"
                                                        class="form-control-file">
                                                </div>
                                                <div class="form-group">
                                                    <img src="{{ asset($AdsData->image) }}" id="PreviewImage"
                                                        alt="Image"
                                                        style="width: 200px; height: 140px; object-fit: cover;">
                                                </div>
                                                <button style="submit" class="btn btn-primary">Save Change</button>
                                            </form>
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


@endsection
