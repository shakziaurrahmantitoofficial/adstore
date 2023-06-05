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
                                        @include('frontend.partials.sidebar')
                                    </div>


                                    <div class="col-md-9">
                                        @include('frontend.inc.package-box')
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
