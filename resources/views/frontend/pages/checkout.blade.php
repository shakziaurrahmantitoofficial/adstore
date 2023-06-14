@extends('frontend.layouts.master')
@section("title", "Checkout")
@section('content')


    <div id="all_section_filter_enable">

        <section id='saleAd' class="">
            <div class="container py-4">

        <div class="row">
            <div class="col-lg-8 col-md-10 m-auto">

                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                @include("frontend.partials.sidebar")
                            </div>


                            <div class="col-md-9">


                        <form 
                                    method="post"

            @if(isset($adid) && $adid != null)
                action="{{Route('checkoutRenewComplete.customerRenewCheckoutComplete')}}"
            @elseif(isset($mvalid) && $mvalid == "member")
                action="{{Route('checkoutCompleteMembership.customerCheckoutMembershipComplete')}}"
            @else
                action="{{Route('checkoutComplete.customerCheckoutComplete')}}"
            @endif

                                >

                                    @csrf

                                    @if(isset($adid) && $adid != null)
                                        <input type="hidden" name="adid" value="{{$adid}}">
                                    @endif

                                    <input type="hidden" name="paymentMethod" value="cash">
                                    <input type="hidden" name="packageName" value="{{$packName}}">
                                    <input type="hidden" name="duration" value="{{$packdata[0]}}">
                                    <input type="hidden" name="price" value="{{$packdata[1]}}">

                                    <div class="ownerName mt-2">
                                        <p class="m-0 ml-4">Select a payment option.</p>
                                    </div>

                                    
                                    <div class="my-3">
                                        <div class="row m-5">

                                            <div class="col-12 col-md-6">
                                                <img src="https://sobkisubazar.com/public/assets/img/cards/aamarpay.png" class="img-fluid selectPayment" id="online" data-type="online">
                                            </div>

                                            <div class="col-12 col-md-6">
                                                <img src="https://sobkisubazar.com/public/assets/img/cards/cod.png" class="img-fluid selectPayment" id="cash" data-type="cash">
                                            </div>

                                        </div>
                                    </div>

                                    <div class="form-group" id="inputForm">
                                        <select class="form-control" name="paymentgetway" required>
                                            <option value="">Select One</option>
                                            <option value="Bank">Bank</option>
                                            <option value="Bkash">Bkash</option>
                                            <option value="Nagad">Nagad</option>
                                        </select>
                                    </div>

                                    <div class="form-check"> 
                                        <input type="checkbox" name="agreement" class="form-check-input" id="exampleCheck1" required>
                                        <label class="form-check-label mt-1" for="exampleCheck1">I agree to the terms and conditions.</label>
                                    </div>

                                    <button type="submit" class="btn btn-danger float-right fw-600">Order Confirm</button>

                                </form>


                            </div>


                    </div>
                </div>

            </div>
        </div>
       

            </div>
        </section>

    </div>



    </div>
@endsection
