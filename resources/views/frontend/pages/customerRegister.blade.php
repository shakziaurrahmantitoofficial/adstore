@extends('frontend.layouts.master')
@section("title", "User Registration")
@section('content')


    <div id="all_section_filter_enable">

        <section id='saleAd' class="">
            <div class="container pt-2 pb-2">

                <div class="row my-5">
                    <div class="col-lg-5 col-md-10 m-auto">

                        <div class="card">
                            <div class="card-body">


                                
            <ul class="nav nav-tabs m-auto" id="myTab" role="tablist">
              <li class="nav-item navTitle" style="width: 50%;">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Personal</a>
              </li>
              <li class="nav-item navTitle" style="width: 50%">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Company</a>
              </li>
            </ul>



            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                  
                  <form class="my-4" id="customerLoginForm1">
                    @csrf
                    <div class="form-group">
                        <label>Name *</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter name">
                        <small id="errname" class="form-text"></small>
                    </div>

                    <div class="form-group">
                        <label>Email or Phone *</label>
                        <input type="text" name="mailPhone" class="form-control" placeholder="Email or phone">
                        <small id="errmailPhone" class="form-text"></small>
                    </div>

                    <div class="form-group">
                        <label>NID Number</label>
                        <input type="text" name="nid" class="form-control" placeholder="National ID number (Optional)">
                        <small id="errnid" class="form-text"></small>
                    </div>

                    <div class="form-group">
                        <label>Address *</label>
                        <input type="text" name="address" class="form-control" placeholder="Address">
                        <small id="erraddress" class="form-text"></small>
                    </div>

                    <div class="form-group">
                        <label>Password *</label>
                        <input type="password" name="password" class="form-control" placeholder="Password">
                        <small id="errpassword" class="form-text"></small>
                    </div>

                    <div class="form-group">
                        <label>Confirm Password *</label>
                        <input type="password" name="repassword" class="form-control" placeholder="Confirm Password">
                        <small id="errrepassword" class="form-text"></small>
                    </div>

                    <button type="submit" class="btn btn-primary" style="background-color: #572c84!important;border-color: #572c84!important;">Submit</button>
                  </form>
              </div>




              <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                  

                <form class="my-4" id="customerLoginForm2">
                    @csrf
                    <div class="form-group">
                        <label>Company Name *</label>
                        <input type="text" name="companyName" class="form-control" placeholder="Enter name">
                        <small id="errorcompanyName" class="form-text"></small>
                    </div>

                    <div class="form-group">
                        <label>Owner Name *</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter owner name">
                        <small id="errorname" class="form-text"></small>
                    </div>

                    <div class="form-group">
                        <label>Owner NID Number *</label>
                        <input type="text" name="nid" class="form-control" placeholder="Owner National ID number">
                        <small id="errornid" class="form-text"></small>
                    </div>

                    <div class="form-group">
                        <label>Phone *</label>
                        <input type="text" name="mailPhone" class="form-control" placeholder="Phone number">
                        <small id="errormailPhone" class="form-text"></small>
                    </div>

                    <div class="form-group">
                        <label>Type of Business *</label>
                        <input type="text" name="businessType" class="form-control" placeholder="Business type">
                        <small id="errorbusinessType" class="form-text"></small>
                    </div>

                    <div class="form-group">
                        <label>Trade license number *</label>
                        <input type="text" name="tradelince" class="form-control" placeholder="Trade license">
                        <small id="errortradelince" class="form-text"></small>
                    </div>

                    <div class="form-group">
                        <label>Address *</label>
                        <input type="text" name="address" class="form-control" placeholder="Enter address">
                        <small id="erroraddress" class="form-text"></small>
                    </div>
                    <div class="form-group">
                        <label>Password *</label>
                        <input type="password" name="password" class="form-control" placeholder="Password">
                        <small id="errorpassword" class="form-text"></small>
                    </div>
                    <div class="form-group">
                        <label>Confirm Password *</label>
                        <input type="password" name="repassword" class="form-control" placeholder="Confirm Password">
                        <small id="errorrepassword" class="form-text"></small>
                    </div>

                    <button type="submit" class="btn btn-primary" style="background-color: #572c84!important;border-color: #572c84!important;">Submit</button>

                  </form>

              </div>

              <p class="text-center">Already create account? <a href="{{Route('customer.login')}}" class="text-primary font-weight-bold">Sing in</a></p>

            </div>

                            </div>
                        </div>








                    </div>
                </div>


                <!-- <div class="row" id="allAdd">
                    
                    <div class="col-12">

                        <form>
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                        </form>


                    </div>

                </div> -->


            


            

            </div>
        </section>

    </div>

















    </div>
@endsection
