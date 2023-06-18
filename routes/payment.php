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


/*----------AamarPay-----------*/
    // Normal Package Payment
    Route::get('/payment',[aamarpayPaymentController::class,"index"]);
    Route::post('/success',[aamarpayPaymentController::class,"success"])->name("success");
    Route::post('/fail',[aamarpayPaymentController::class,"fail"])->name('fail');
    Route::get('/cancel',[aamarpayPaymentController::class,"cancel"])->name('cancel');


    // Renew Payment
    Route::get('/renewpayment',[renewaamarpayPaymentController::class,"index"]);
    Route::post('/renewsuccess',[renewaamarpayPaymentController::class,"success"])->name("success");
    Route::post('/renewfail',[renewaamarpayPaymentController::class,"fail"])->name('fail');
    Route::get('/renewcancel',[renewaamarpayPaymentController::class,"cancel"])->name('cancel');    


    //Membership Payment
    Route::get('/membershippayment',[membershipaamarpayPaymentController::class,"index"]);
    Route::post('/membershipsuccess',[membershipaamarpayPaymentController::class,"success"])->name("membershipsuccess");
    Route::post('/membershipfail',[membershipaamarpayPaymentController::class,"fail"])->name('membershipfail');
    
    Route::get('/membershipcancel',[membershipaamarpayPaymentController::class,"cancel"])->name('membershipcancel');

/*----------AamarPay-----------*/


require __DIR__.'/auth.php';
