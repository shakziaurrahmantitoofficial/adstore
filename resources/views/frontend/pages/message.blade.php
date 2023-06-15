@extends('frontend.layouts.master')
@section("title", "Ad List")
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
                                <div class="ownerName mt-2">
                                    <p class="m-0 ml-4">Message</p>
                                </div>

                                <div class="table-responsive-lg my-3">
                                    
                                    <form id="message" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label>Message</label>
                                            <textarea class="form-control" name="message" placeholder="Write your message" rows="4"></textarea>
                                            <small id="errmessage"></small>
                                        </div>

                                        <div class="form-group">
                                            <input type="file" name="file" class="form-control-file">
                                        </div>

                                        <button class="btn btn-primary btn-sm" type="submit">Submit</button>

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
    </div>
@endsection
