<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\package;
use App\Models\ads;
use App\Models\Renew;
use Illuminate\Support\Facades\Auth;

class paymentController extends Controller
{

    public function customerPaymentList(){

        $package = null;
        if(package::orderBy("id","DESC")->count() > 0){
            $package = package::orderBy("id","DESC")->get();
        }
        return view("backend.pages.paymentlist", compact('package'));
    }

    public function customerAdList(){

        $ads = null;
        if(ads::orderBy("id","DESC")->count() > 0){
            $ads = ads::orderBy("id","DESC")->get();
        }
        return view("backend.pages.adslist", compact('ads'));
    }


    public function PayConfirm($id = null){

        if($id != null){
            $package = package::find($id);
            $package->payment   = 1;
            $package->prepareby = Auth::id();
            $package->save();
            return redirect(Route('paymentlist.customerPaymentList'));
        }else{
            return redirect("/");
        }
    }    


    public function customeradapprove($id = null){
        $ads = ads::where("id", $id)->first();
        return view("backend.pages.adsapprove", compact('ads'));
    }


    public function customeradaccept(Request $req){

        $ads                = ads::find($req->adid);
        if($req->accept == 2){
            $ads->adstartTime = null;
        }else{
            $ads->adstartTime = time();
        }
        $ads->status          = $req->accept;
        $ads->resubstatus     = 0;
        $ads->save();

        return redirect(Route('adlist.customerAdList'));

    }



    // Renew
    public function customerRenewList(){

        $renews = null;
        if(Renew::orderBy("id","DESC")->count() > 0){
            $renews = Renew::orderBy("id","DESC")->get();
        }
        return view("backend.pages.renewlist", compact('renews'));
    }



    public function renewPayConfirm($id = null){

        $renew = Renew::findOrFail($id);

        $ads                = ads::find($renew->adsid);
        $exipreDate         = $ads->adstartTime + $ads->duration;
        $getoldDate         = $exipreDate - time();
        $ads->duration      = $renew->duration * 86400 + $getoldDate;
        $ads->price         = $renew->duration * 86400 + $getoldDate;
        $ads->renewstatus   = 0;
        $ads->save();
        $renew->delete();

        return redirect("/admin/renewlist");



        // if($id != null){
        //     $package = package::find($id);
        //     $package->payment   = 1;
        //     $package->prepareby = Auth::id();
        //     $package->save();
        //     return redirect(Route('renewlist.customerRenewList'));
        // }else{
        //     return redirect("/");
        // }


    } 


}
