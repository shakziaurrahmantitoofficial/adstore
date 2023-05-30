<?php

use App\Http\Controllers\Backend\BuyAdController;
use App\Http\Controllers\Backend\RentAdController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Backend\SaleController;
use App\Http\Controllers\Backend\paymentController;
use Illuminate\Support\Facades\Route;
use App\display;
use App\Http\Controllers\Backend\adminLoginController;
use App\Http\Controllers\Frontend\customerLoginController;
use App\Http\Controllers\Frontend\checkOutController;
use App\Http\Controllers\Frontend\packageController;
use App\Http\Controllers\Frontend\adsController;

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

// Route::get('/', function () {
//     return view('welcome');
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
        Route::post('/checkout',[checkOutController::class,"customerCheckout"])->name("checkout.customerCheckout");
        Route::post('/checkoutComplete',[checkOutController::class,"customerCheckoutComplete"])->name("checkoutComplete.customerCheckoutComplete");



    //packageController controller
        Route::get('/packagelist',[packageController::class,"customerPackagelist"])->name("packagelist.customerPackagelist");

        // Route::post('/checkoutComplete',[checkOutController::class,"customerCheckoutComplete"])->name("checkoutComplete.customerCheckoutComplete");


        //adsController controller
        Route::get('/adpublish',[adsController::class,"customerAdpublish"])->name("adpublish.customerAdpublish");

        Route::post('/customeradinsert',[adsController::class,"cusadinsert"])->name("customeradinsert.cusadinsert");

        Route::get('/adslist',[adsController::class,"customerAdslist"])->name("adslist.customerAdslist");

        

        // Route::post('/checkoutComplete',[checkOutController::class,"customerCheckoutComplete"])->name("checkoutComplete.customerCheckoutComplete");


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
