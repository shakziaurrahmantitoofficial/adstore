@extends('frontend.layouts.master')

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
