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
        $packageName = package::find($packId)->packageName;
        if (package::where("id", $packId)->count() > 0) {
            return view("frontend.pages.adpublish", compact('packageId', 'duration','packageName'));
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
        $ads->packageName   = $req->packageName;
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

    public function customerAdEdit(Request $req){
        $packageId  = base64_decode(base64_decode($req->package));
        $duration   = base64_decode(base64_decode($req->dr));
        $AdsData = ads::where("id", $packageId)->where("duration",$duration)->first();

        if (ads::where("id", $packageId)->count() > 0) {
            return view("frontend.pages.adedit",compact('AdsData'));
        }else{
            return redirect("/dashboard");
        }
 
    }

    public function customerAdUpdate(Request $req){

        
        $adId  = $req->adId;

        $req->validate([
            "title" => "required",
            "link" => "required",
            "description" => "required",
            "adType" => "required",
            "adservicetype" => "required",
            // "image" => "required"
        ]);

        if($req->image != ''){
            $myFile = $req->image;
            $file = substr(md5(time()), 0, 10).".".$req->image->getClientOriginalExtension();
            $myFile->move(public_path("ads"), $file);
            @unlink($myFile);

            $update = ads::where("id",$adId)->update([
                'title'=>$req->title,
                'link'=>$req->link,
                'adservicetype' =>   $req->adservicetype,
                'description'   =>   $req->description,
                'resubstatus'   =>   1,
                'status'        =>   0,
                'adType'        =>          $req->adType,
                'image'         =>  "ads/".$file,
            ]);
        }else {
            $ads = ads::where("id",$adId)->first();
            $file = $ads->image;

            $update = ads::where("id",$adId)->update([
                'title'         =>  $req->title,
                'link'          =>  $req->link,
                'adservicetype' =>  $req->adservicetype,
                'resubstatus'   =>   1,
                'status'        =>   0,
                'description'   =>  $req->description,
                'adType'        =>  $req->adType,
                'image'         =>  $file,
            ]);
        }

        if($update){
            return redirect("/adslist")->with("success","Thanks your! Update your ads.");
        }else{
            return redirect()->back()->with("fail","Something Wrong! Ads not Updated.");
        }
 
    }


    public function customerAdslist(){

        $ads = null;

        if(ads::where("customerId", Auth::guard("customer")->id())->count() > 0){
            $ads = ads::where("customerId", Auth::guard("customer")->id())->orderby("id","DESC")->get();
        }

        return view("frontend.pages.adlist", compact('ads'));
    }


    public function customerAdslistPackage(Request $req){

        $ads  = $req->adid;
        if ($ads) {
            return view("frontend.pages.adlist-package", compact("ads"));
        }else{
            return redirect("/dashboard");
        }
        
    }

    

}
