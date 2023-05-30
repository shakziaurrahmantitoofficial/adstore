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
                                <div class="ownerName mt-2">
                                    <p class="m-0 ml-4">Package List</p>
                                </div>

                                <div class="my-3">
                                    

                                    <div class="row">

                                        

                                        
<div class="col-md-6">
    <div class="card overflow-hidden">
        <div class="card-body">
            <div class="text-center mb-2 mt-3">
                <img class="mw-100 mx-auto mb-2" src="https://sobkisubazar.com/public/uploads/all/8d5kET0tQeVw8NRDQxHjRebEu34lHUQzrLwqqGGV.png" height="80">

                <!-- <h5 class=" h6 fw-600">PLATINUM</h5> -->

                <button class="btn btn-primary btn-block" style="background-color:#572c84!important;border-color:#572c84!important">PLATINUM</button>

                <h6 class=" h6 fw-600">Top Short Banner</h6>
                <h6 class=" h6 fw-600">210px*210px</h6>
            </div>

            <ul class="list-group list-group-raw fs-18 text-center">
                <li class="list-group-item py-2">1 Product Upload</li>
            </ul>

            <form id="packageForm1" method="post" action="{{Route('checkout.customerCheckout')}}">
                @csrf
                <input type="hidden" name="packageName" value="platinum">
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="radio" name="packDetails" id="platinum1" aria-label="" value="3, 300" required>
                            </div>
                        </div>
                        <label class="form-check-label form-control" for="platinum1">Days : 3 , Price: 300</label>
                    </div>

                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="radio" name="packDetails" id="platinum2" aria-label="" value="7, 945" required>
                            </div>
                        </div>
                        <label class="form-check-label form-control" for="platinum2">Days : 7 , Price: 945</label>
                    </div>

                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="radio" name="packDetails" id="platinum3" aria-label="" value="15, 1500" required>
                            </div>
                        </div>
                        <label class="form-check-label form-control" for="platinum3">Days : 15 , Price: 1500</label>
                    </div>

                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-block">Purchase Package</button>
                </div>
            </form>
        </div>
    </div>
</div>


<div class="col-md-6">
    <div class="card overflow-hidden">
        <div class="card-body">
            <div class="text-center mb-2 mt-3">
                <img class="mw-100 mx-auto mb-2" src="https://sobkisubazar.com/public/uploads/all/8d5kET0tQeVw8NRDQxHjRebEu34lHUQzrLwqqGGV.png" height="80">

                <!-- <h5 class=" h6 fw-600">PLATINUM</h5> -->

                <button class="btn btn-primary btn-block" style="background-color:#572c84!important;border-color:#572c84!important">Gold</button>

                <h6 class=" h6 fw-600">Top Short Banner</h6>
                <h6 class=" h6 fw-600">210px*210px</h6>
            </div>

            <ul class="list-group list-group-raw fs-18 text-center">
                <li class="list-group-item py-2">1 Product Upload</li>
            </ul>

            <form id="packageForm1" method="post" action="{{Route('checkout.customerCheckout')}}">
                @csrf
                <input type="hidden" name="packageName" value="gold">
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="radio" name="packDetails" id="gold1" aria-label="" value="2, 200" required>
                            </div>
                        </div>
                        <label class="form-check-label form-control" for="gold1">Days : 2 , Price: 200</label>
                    </div>

                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="radio" name="packDetails" id="gold2" aria-label="" value="5, 500" required>
                            </div>
                        </div>
                        <label class="form-check-label form-control" for="gold2">Days : 5 , Price: 500</label>
                    </div>

                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="radio" name="packDetails" id="gold3" aria-label="" value="10, 800" required>
                            </div>
                        </div>
                        <label class="form-check-label form-control" for="gold3">Days : 10 , Price: 800</label>
                    </div>

                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-block">Purchase Package</button>
                </div>
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
        </section>

    </div>



    </div>
@endsection
