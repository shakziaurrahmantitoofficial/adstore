<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\package;
use App\Models\ads;
use Auth;

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
        $ads->save();

        return redirect(Route('adlist.customerAdList'));

    }


}
