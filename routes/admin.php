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

Route::group(["prefix" => "admin"], function(){

    Route::get('/login',[adminLoginController::class,'index'])->name("index.login");
    Route::post('/adminlogin',[adminLoginController::class,'admin_login'])->name("admin_login.adminlogin");

    Route::get('/logout',[adminLoginController::class,'admin_logout'])->name("admin_logout.logout");

    //Backend Section
    Route::get('/dashboard', function () {
        return view('backend.pages.dashboard');
    })->middleware(['auth', 'verified'])->name('admin.dashboard');


    //paymentController controller
    Route::get('/paymentlist', [paymentController::class,'customerPaymentList'])->middleware(['auth', 'verified'])->name('paymentlist.customerPaymentList');

    Route::get('/adlist', [paymentController::class,'customerAdList'])->middleware(['auth', 'verified'])->name('adlist.customerAdList');

    Route::get('/payconfirm/{id?}', [paymentController::class,'PayConfirm'])->middleware(['auth', 'verified'])->name('payconfirm.PayConfirm');


   Route::get('/adapprove/{id}', [paymentController::class,'customeradapprove'])->middleware(['auth', 'verified'])->name('adapprove.customeradapprove');

   Route::post('/adaccept', [paymentController::class,'customeradaccept'])->middleware(['auth', 'verified'])->name('adaccept.customeradaccept');

   // Renew route
   Route::get('/renewlist', [paymentController::class,'customerRenewList'])->middleware(['auth', 'verified'])->name('renewlist.customerRenewList');
   Route::get('/renew/payconfirm/{id?}', [paymentController::class,'renewPayConfirm'])->middleware(['auth', 'verified'])->name('renewPay.renewPayConfirm');

    //Membership Route
    Route::get('/membership-list', [MemberController::class,'MembershipList'])->middleware(['auth', 'verified'])->name('membership.List');
    Route::get('/membership-view/{id}', [MemberController::class,'MembershipView'])->middleware(['auth', 'verified'])->name('membership.view');
    Route::get('/membership-confirm/{id}', [MemberController::class,'MembershipConfirm'])->middleware(['auth', 'verified'])->name('membership.confirm');
    Route::get('/membership-paylist', [MemberController::class,'MembershipPayList'])->middleware(['auth', 'verified'])->name('membership.paylist');
    Route::get('/membership-payconfirm/{id}', [MemberController::class,'MembershipPayConfirm'])->middleware(['auth', 'verified'])->name('membership.payconfirm');


    // Site Setting Route
    Route::get('/settings', [SettingController::class,'SettingPage'])->middleware(['auth', 'verified'])->name('settings.page');
    Route::post('/settings-update/header', [SettingController::class,'SettingHeaderUpdate'])->middleware(['auth', 'verified'])->name('settings.update.header');
    Route::post('/settings-update/information', [SettingController::class,'SettingInformationUpdate'])->middleware(['auth', 'verified'])->name('settings.update.information');
    Route::post('/settings-update/social', [SettingController::class,'SettingSocialUpdate'])->middleware(['auth', 'verified'])->name('settings.update.social');
    Route::post('/settings-update/footer', [SettingController::class,'SettingFooterUpdate'])->middleware(['auth', 'verified'])->name('settings.update.footer');
    Route::post('/settings-update/copyright', [SettingController::class,'SettingCopyrightUpdate'])->middleware(['auth', 'verified'])->name('settings.update.copyright');


    // User Route 
    Route::get('/users', [UserController::class,'index'])->middleware(['auth', 'verified'])->name('user.list');
    Route::get('/user-add', [UserController::class,'create'])->middleware(['auth', 'verified'])->name('user.create');
    Route::post('/user-store', [UserController::class,'store'])->middleware(['auth', 'verified'])->name('user.store');
    Route::get('/user-show/{id}', [UserController::class,'show'])->middleware(['auth', 'verified'])->name('user.show');
    Route::post('/user-update/{id}', [UserController::class,'update'])->middleware(['auth', 'verified'])->name('user.update');
    Route::get('/user-delete/{id}', [UserController::class,'delete'])->middleware(['auth', 'verified'])->name('user.delete');

    // Customer Route 
    Route::get('/customers', [CustomersController::class,'index'])->middleware(['auth', 'verified'])->name('customer.list');
    Route::get('/customer-show/{id}', [CustomersController::class,'show'])->middleware(['auth', 'verified'])->name('customer.show');
    Route::get('/customer-delete/{id}', [CustomersController::class,'delete'])->middleware(['auth', 'verified'])->name('customer.delete');

    // Profile Route 
    Route::get('/profile-setting', [adminLoginController::class,'profileSetting'])->middleware(['auth', 'verified'])->name('admin.profile.setting');
    Route::post('/profile-update', [adminLoginController::class,'profileUpdate'])->middleware(['auth', 'verified'])->name('admin.profile.update');
    Route::post('/password-change', [adminLoginController::class,'passwordChange'])->middleware(['auth', 'verified'])->name('admin.password.change');

    //Message Profile
    Route::get('/messagelist',[messageController::class,"customermessagelist"])->name("messagelist.customermessagelist");
    Route::get('/getmessage',[messageController::class,"customerGetmessage"])->name("getmessage.customerGetmessage");

    // Member View
    Route::get('/customer-overview/{id}',[MemberController::class,'CustomerOvertview'])->name("customer.overview");
        
});


require __DIR__.'/auth.php';
