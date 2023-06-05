<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\package;
use App\Models\Renew;
use App\Models\ads;
use Auth;

class checkOutController extends Controller
{


    public function customerCheckout(Request $req){
        $packName =  $req->packageName;
        $packdata =  explode(",", $req->packDetails);
        return view("frontend.pages.checkout", compact('packdata','packName'));
    }


    public function customerCheckoutComplete(Request $req){

        if(Auth::guard('customer')->check()){

            if($req->paymentMethod == "cash"){

                $package = new package();
                $package->packageName   = $req->packageName;
                $package->duration      = $req->duration;
                $package->price         = $req->price;
                $package->customerId    = Auth::guard('customer')->id();
                $package->paymentMethod = $req->paymentMethod;
                $package->paymentgetway = $req->paymentgetway;
                $package->save();
                return redirect("/packagelist")->with("success","Thanks your! Order created.");

            }elseif ($req->paymentMethod == "online") {
                return "<h2 align='center' style='margin-top:40px;'>Coming soon</h2>";
            }
            
        }else{
            return redirect("/dashboard");
        }


    }


    // Ad Package List Update
    public function customerAdslistPackageCheckout(Request $req){
        $packName   =  $req->packageName;
        $adid       =  $req->adid;
        $packdata   =  explode(",", $req->packDetails);
        return view("frontend.pages.checkout", compact('packdata','packName', 'adid'));


    }


    // Ad Package List Update

    public function customerRenewCheckoutComplete(Request $req){

        if(Auth::guard('customer')->check()){

            if($req->paymentMethod == "cash"){

                $Renew = new Renew();
                $Renew->packageName   = $req->packageName;
                $Renew->adsid         = base64_decode(base64_decode($req->adid));
                $Renew->duration      = $req->duration;
                $Renew->price         = $req->price;
                $Renew->customerId    = Auth::guard('customer')->id();
                $Renew->paymentMethod = $req->paymentMethod;
                $Renew->paymentgetway = $req->paymentgetway;
                $Renew->save();

                $ads = ads::find(base64_decode(base64_decode($req->adid)));
                $ads->renewstatus = 1;
                $ads->save();

                return redirect(Route('adslist.customerAdslist'))->with("success","Thanks! Your update request send.");
            }elseif ($req->paymentMethod == "online") {
                return "<h2 align='center' style='margin-top:40px;'>Coming soon</h2>";
            }
            
        }else{
            return redirect("/dashboard");
        }


    }








}
