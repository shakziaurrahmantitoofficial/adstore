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

                                <div class="ownerName mt-4">
                                    <p class="m-0 ml-4">{{Auth::guard("customer")->user()->name}}</p>
                                </div>
                                <div class="my-3">
                                    <p class="text-center" style="font-size: 20px;">You don't have any ads yet.</p>
                                </div>

                                
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
       


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
