@extends('frontend.layouts.master')

@section('content')
    <style>
        #paginations nav .small {
            visibility: hidden;
            /* display: none; */
        }

        .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
            color: #ffffff;
            border-color: #dee2e6 #dee2e6 #fff;
            background-color: #572c84!important;
            border-color: #572c84!important;
        }
        .navTitle{
            font-size: 18px;
        }

        .myList{
            font-size: 16px;
        }

        .myList li{
            border-top: 1px solid #e5d4d4;
            padding: 15px 0;
        }

        .myList li a{
            color: #0074ba;
        }

        .ownerName{
            font-size: 18px;
            padding-bottom: 20px;
            border-bottom: 1px solid #e5d4d4;
        }

        .myList li a svg{
            float: right;
        }

        .activelist{
            color: black !important;
            font-weight: bold;
        }
        .productSize{
            font-weight: bold;
            font-size: 16px;
        }

    </style>






    <div id="all_section_filter_enable">

        <section id='saleAd' class="">
            <div class="container py-4">

        <div class="row">
            <div class="col-8 m-auto">

                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                @include("frontend.partials.sidebar")
                            </div>


                            <div class="col-md-9">

                                <form method="post" action="{{Route('checkoutComplete.customerCheckoutComplete')}}">
                                    @csrf

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
                                            <option value="bank">Bank</option>
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
