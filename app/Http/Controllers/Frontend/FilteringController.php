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
                "data"      => $ads
            ]);

        }else{
            return response()->json([
                "status"    => false,
                "filtering" => false
            ]);
        }
    

    }

    public function filterHighLow(){
        return 'Ok';
    }

    public function filterMember(){
        return 'Ok';
    }
}
