<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ads;

class FilteringController extends Controller
{
    public function filterUpDown(Request $req){
        if(isset($req->updowndata)){
            if($req->updowndata == "updown"){
                $ads = ads::orderBy("id","ASC")->get();
            }elseif($req->updowndata == "downup"){
                $ads = ads::orderBy("id","DESC")->get();
            }
            return response()->json([
                "status"    => true,
                "filtering" => "updown",
                "updowndata" => $req->updowndata,
                "data"      => $ads
            ]);
        }else{
            return response()->json([
                "status"    => false,
                "filtering" => false
            ]);
        }
    }



    public function filterHighLow(Request $req){

        if(isset($req->highlowdata)){

            if($req->highlowdata == "highlow"){
                $ads = ads::orderBy("duration","ASC")->get();
            }elseif($req->highlowdata == "lowhigh"){
                $ads = ads::orderBy("duration","DESC")->get();
            }
            return response()->json([
                "status"    => true,
                "filtering" => "highLow",
                "data"      => $ads
            ]);

        }else{

            return response()->json([
                "status"    => false,
                "filtering" => false
            ]);

        }

    }  



    public function filterMember(Request $req){

        if(isset($req->memberdata)){

            if($req->memberdata == "member"){
                $ads = ads::where("member_status", 1)->orderBy("duration","ASC")->get();
            }elseif($req->memberdata == "non-member"){
                $ads = ads::where("member_status", 0)->orderBy("duration","DESC")->get();
            }
            return response()->json([
                "status"    => true,
                "filtering" => "member",
                "data"      => $ads
            ]);

        }else{

            return response()->json([
                "status"    => false,
                "filtering" => false
            ]);

        }

    }





}
