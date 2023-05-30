<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ads;
use App\Models\package;
use Auth;

class adsController extends Controller
{
    public function customerAdpublish(Request $req){

        /*$packageId = base64_decode(base64_decode($req->package));
        return $duration = base64_decode(base64_decode($req->dr));*/

        $packId = base64_decode(base64_decode($req->package));

        $packageId  = $req->package;
        $duration   = $req->dr;

        if (package::where("id", $packId)->count() > 0) {
            return view("frontend.pages.adpublish", compact('packageId', 'duration'));
        }else{
            return redirect("/dashboard");
        }
 
    }

    public function cusadinsert(Request $req){

        $packageId  = base64_decode(base64_decode($req->packageId));
        $duration   = base64_decode(base64_decode($req->duration));
        $duration   = ($duration * 3600 * 24);

        $req->validate([
            "title" => "required",
            "link" => "required",
            "description" => "required",
            "adType" => "required",
            "adservicetype" => "required",
            "image" => "required"
        ]);

        $myFile = $req->image;
        $file = substr(md5(time()), 0, 10).".".$req->image->getClientOriginalExtension();
        $myFile->move(public_path("ads"), $file);

        $ads = new ads();
        $ads->packageId     = $packageId;
        $ads->duration      = $duration;
        $ads->title         = $req->title;
        $ads->link          = $req->link;
        $ads->adservicetype = $req->adservicetype;
        $ads->customerId    = Auth::guard("customer")->id();
        $ads->description   = $req->description;
        $ads->adType        = $req->adType;
        $ads->image         = "ads/".$file;
        $ads->save();

        $package = package::find($packageId);
        $package->adstatus = 0;
        $package->save();
        return redirect("/adslist")->with("success","Thanks your! Submitted your ads.");
 
    }

    public function customerAdslist(){

        $ads = null;

        if(ads::where("customerId", Auth::guard("customer")->id())->count() > 0){
            $ads = ads::where("customerId", Auth::guard("customer")->id())->orderby("id","DESC")->get();
        }

        return view("frontend.pages.adlist", compact('ads'));
    }



}
