<?php

use Illuminate\Support\Facades\Route;
use App\display;
use App\Http\Controllers\Backend\BuyAdController;
use App\Http\Controllers\Backend\RentAdController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Backend\SaleController;
use App\Http\Controllers\Backend\paymentController;
use App\Http\Controllers\Backend\adminLoginController;
use App\Http\Controllers\Backend\CustomersController;
use App\Http\Controllers\Backend\MemberController;
use App\Http\Controllers\Backend\SettingController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Frontend\customerLoginController;
use App\Http\Controllers\Frontend\checkOutController;
use App\Http\Controllers\Frontend\packageController;
use App\Http\Controllers\Frontend\adsController;
use App\Http\Controllers\Frontend\CustomerController;
use App\Http\Controllers\Frontend\FilteringController;
use App\Http\Controllers\Frontend\MembershipController;
use App\Http\Controllers\messageController;
use App\Http\Controllers\aamarpay\aamarpayPaymentController;
use App\Http\Controllers\aamarpay\renewaamarpayPaymentController;
use App\Http\Controllers\aamarpay\membershipaamarpayPaymentController;
use App\Models\ads;


Route::group(["middleware" => "auth:customer"], function(){

    Route::get('/dashboard',function(){
        return view("frontend.pages.dashboard");
    })->name("dashboard");

    Route::get('/package',function(){
        return view("frontend.pages.package");
    })->name("package");


    Route::get('/logout',function(){
        Auth::guard("customer")->logout();
        // return redirect("/login");
        return redirect(route("customer.login"));
    })->name("logout");


    //checkOutController controller

        //For normal payment
        Route::post('/checkout',[checkOutController::class,"customerCheckout"])->name("checkout.customerCheckout");
        Route::post('/checkoutComplete',[checkOutController::class,"customerCheckoutComplete"])->name("checkoutComplete.customerCheckoutComplete");



        //For membership package
        Route::post('/checkoutMembership',[checkOutController::class,"customerCheckoutMembership"])->name("checkoutMembership.customerCheckout");

        Route::post('/checkoutCompleteMembership',[checkOutController::class,"customerCheckoutMembershipComplete"])->name("checkoutCompleteMembership.customerCheckoutMembershipComplete");



        //For renew package
        Route::post('/checkoutrenew',[checkOutController::class,"customerAdslistPackageCheckout"])->name("checkout.customerAdPackageCheckout");
        Route::post('/checkoutRenewComplete',[checkOutController::class,"customerRenewCheckoutComplete"])->name("checkoutRenewComplete.customerRenewCheckoutComplete");




    //packageController controller
        Route::get('/packagelist',[packageController::class,"customerPackagelist"])->name("packagelist.customerPackagelist");

        // Route::post('/checkoutComplete',[checkOutController::class,"customerCheckoutComplete"])->name("checkoutComplete.customerCheckoutComplete");


        //adsController controller
        Route::get('/adpublish',[adsController::class,"customerAdpublish"])->name("adpublish.customerAdpublish");

        Route::post('/customeradinsert',[adsController::class,"cusadinsert"])->name("customeradinsert.cusadinsert");

        Route::get('/adslist',[adsController::class,"customerAdslist"])->name("adslist.customerAdslist");
        Route::get('/adedit',[adsController::class,"customerAdEdit"])->name("adedit.customerAdEdit");
        Route::post('/adedit',[adsController::class,"customerAdUpdate"])->name("customeradUpdate.cusadupdate");
        Route::get('/adslist-package',[adsController::class,"customerAdslistPackage"])->name("adslist.customerAdslistPackage");
        

        // Route::post('/checkoutComplete',[checkOutController::class,"customerCheckoutComplete"])->name("checkoutComplete.customerCheckoutComplete");


        Route::get('/settings',[CustomerController::class,'customerSettings'])->name("customer.customerSettings");
        Route::post('/customer-update',[CustomerController::class,'customerUpdate'])->name("customer.customerUpdate");
        

        Route::post('/password-change',[CustomerController::class,'customerPasswordChange'])->name("customer.customerPasswordChange");

        // 
        Route::get('/my-membership',[MembershipController::class,'MyMembership'])->name("customer.MyMembership");
        Route::post('/my-membership',[MembershipController::class,'MyMembershipCreate'])->name("customer.MyMembershipCreate");


        //For messageController
        Route::get('/umessage',function(){
            return view("frontend.pages.message");
        })->name("CMessage");

        Route::post('/mess',[messageController::class,'CMessage'])->name("mess.CMessage");

        // Member View
        Route::get('/customer-overview/{id}',[MemberController::class,'CustomerOvertview'])->name("customer.overview");

});
