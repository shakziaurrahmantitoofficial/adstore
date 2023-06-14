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
use App\Http\Controllers\Backend\MemberController;
use App\Http\Controllers\Backend\SettingController;
use App\Http\Controllers\Frontend\customerLoginController;
use App\Http\Controllers\Frontend\checkOutController;
use App\Http\Controllers\Frontend\packageController;
use App\Http\Controllers\Frontend\adsController;
use App\Http\Controllers\Frontend\CustomerController;
use App\Http\Controllers\Frontend\FilteringController;
use App\Http\Controllers\Frontend\MembershipController;
use App\Models\ads;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
| request()->route('user')->id!
|
*/




// Route::get('/test', function () {

//         $adsData    = ads::get();
//         foreach($adsData as $data){
//            $expire  = $data->adstartTime + $data->duration;
//             if($expire <= time()){
//               $ads  = ads::find($data->id);
//               $ads->status = 3;
//               $ads->save();
//             }
//         }

// });


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
});





Route::get('/login',function(){
    if (Auth::guard("customer")->check()) {
        return redirect("/dashboard");
    }else{
        return view("frontend.pages.login");
    }
})->name("customer.login");



Route::get('/forgotpassword',function(){
    if (Auth::guard("customer")->check()) {
        return redirect("/dashboard");
    }else{
        return view("frontend.pages.forgotpassword");
    }
})->name("forgotpassword");


Route::post('/customerforgotpassword',[customerLoginController::class,'customerforgot_password'])->name("customerforgotpassword.customerforgot_password");



Route::post('/customerLogin',[customerLoginController::class,'customer_login'])->name("customerLogin.customer_login");
Route::get('/register',[customerLoginController::class,'customerRegistraion'])->name("customerRegistraion.register");
Route::post('/registerInsert',[customerLoginController::class,'customerRegisstationInsert'])->name("customerRegisstationInsert.registerInsert");
Route::post('/registerInsertCompany',[customerLoginController::class,'customerCompanyReg'])->name("customerCompanyReg.registerInsertCompany");
















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


});




//Frontent Section
Route::get('/',[HomeController::class,'index']);
Route::get('show-sale/{id}',[HomeController::class,'showSale'])->name('show-sale');
Route::get('show-buy/{id}',[HomeController::class,'showBuy'])->name('show-buy');
Route::get('show-rent/{id}',[HomeController::class,'showRent'])->name('show-rent');

// For Filtering
Route::get('allfiltering',[HomeController::class,'allFiltering'])->name('allFiltering.allfiltering');

Route::get('/search',[HomeController::class,'search'])->name('search');
Route::get('/adstore',[HomeController::class,'adstore'])->name('adstore');








// Category Filltering
Route::get('/filter/up-down',[FilteringController::class,'filterUpDown'])->name('filter.up-down');
Route::get('/filter/high-low',[FilteringController::class,'filterHighLow'])->name('filter.high-low');
Route::get('/filter/member',[FilteringController::class,'filterMember'])->name('filter.member');




Route::get('/testProvider',function(){

    App()->bind("newClass", display::class);

    dd(app());

//     $name = app()->make('newClass');

//    return $name->getName();

});



    // sales ads
Route::middleware('auth')->group(function(){
    Route::resource('sale-add',SaleController::class);

    Route::resource('buy-add',BuyAdController::class);

    Route::resource('rent-add',RentAdController::class);
  
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
