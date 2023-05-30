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

    </style>






    <div id="all_section_filter_enable">

        <section id='saleAd' class="">
            <div class="container pt-2 pb-2">

        <div class="row my-5">
            
            <div class="col-4 m-auto">

            <div class="card">
            <div class="card-body py-5">

                <div class="text-center">
                    <img src="http://localhost/AdsStore/public/frontend/assets/images/logo.png" width="120">
                </div>
                <p class="text-center my-4" id="errormsg"></p>
                <form class="my-4" id="customerLoginForm3">
                    @csrf
                    <div class="form-group">
                        <label>Email or Phone *</label>
                        <input type="text" name="mailPhone" class="form-control" placeholder="Email or phone">
                        <small id="errmailPhone" class="form-text"></small>
                    </div>
                    <div class="form-group">
                        <label>Password *</label>
                        <input type="password" name="password" class="form-control" placeholder="Password">
                        <small id="errpassword" class="form-text"></small>
                        <a href="{{Route('forgotpassword')}}" class="text-right d-block my-2">Forgot password</a>
                        
                    </div>
                    <button type="submit" class="btn btn-primary" style="background-color: #572c84!important;border-color: #572c84!important;">Submit</button>
                  </form>

                  <p class="text-center">Create new account? <a href="{{Route('customerRegistraion.register')}}" class="text-primary font-weight-bold">Sing up</a></p>

                </div>

            </div>

            </div>
        </div>


            </div>
        </section>

    </div>

















    </div>
@endsection
