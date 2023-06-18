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



//Frontent Section
Route::get('/',[HomeController::class,'index'])->name("homepage");
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
