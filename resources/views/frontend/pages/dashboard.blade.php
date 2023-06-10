@extends('frontend.layouts.master')

@section('content')
@php
    $joinCustomer = App\Models\ads::where('id',Auth::user()->id)->first()->duration;
    $adsRuning = App\Models\ads::where('id',Auth::user()->id)->where('status',1)->count();
    
    $duration   = ($joinCustomer);
    $duration   = ($duration * 3600 * 24);
    $duration   = Round($duration/(3600 * 24));

    $adsPadding = App\Models\ads::where('id',Auth::user()->id)->where('status',0)->count();
    $packageOrder = App\Models\package::where('customerId',Auth::user()->id)->count();
@endphp

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

                                <div class="ownerName mt-4">
                                    <p class="m-0 ml-4">{{Auth::guard("customer")->user()->name}}</p>
                                </div>
                                <div class="row dash-overview mt-2">
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="grid one">
                                            <p>Ads Duration</p>
                                            <h2>{{ $duration }} Days</h2>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="grid two">
                                            <p>Total Package</p>
                                            <h2>{{ $packageOrder }}</h2>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="grid three mt-3">
                                            <p>Ads Runing</p>
                                            <h2>{{ $adsRuning }}</h2>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="grid four mt-3">
                                            <p>Ads Padding</p>
                                            <h2>{{ $adsPadding }}</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
       
        <style>
            .dash-overview .grid {
                color: #fff;
                padding: 30px 24px;
                border-radius: 4px;
                position: relative;
            }
            .dash-overview .grid::before,
            .dash-overview .grid::after {
                position: absolute;
                content: '';
                border-radius: 50%;
                background-color: #ffffff24;
            }
            .dash-overview .grid::before {
                width: 200px;
                height: 200px;
                left: 0;
            }
            .dash-overview .grid::after {
                width: 140px;
                height: 140px;
                bottom: -100px;
                right: 0;
            }
            .dash-overview .grid.one {
                background-color: #875fc0;
                background-image: linear-gradient(315deg, #875fc0 0%, #5346ba 74%);
            }
            .dash-overview .grid.two {
                background-color: #47c5f4;
                background-image: linear-gradient(315deg, #47c5f4 0%, #6791d9 74%);
            }
            .dash-overview .grid.three {
                background-color: #eb4786;
                background-image: linear-gradient(315deg, #eb4786 0%, #b854a6 74%);
            }
            .dash-overview .grid.four {
                background-color: #ffb72c;
                background-image: linear-gradient(315deg, #ffb72c 0%, #f57f59 74%);
            }
        </style>

<!-- <div class="pos-f-t">

    <nav class="navbar navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </nav>

  <div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-dark p-4">
      <h4 class="text-white">Collapsed content</h4>
      <span class="text-muted">Toggleable via the navbar brand.</span>
    </div>
  </div>



</div> -->




            </div>
        </section>

    </div>

















    </div>
@endsection
