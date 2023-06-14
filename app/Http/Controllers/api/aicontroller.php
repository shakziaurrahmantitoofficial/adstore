<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ads;

class aicontroller extends Controller
{
    public function getAllAds(){
        
        $ads = ads::whereIn("packageName", ["platinum","gold"])
        ->where("status", 1)
        ->get();
        return response()->json([
                "status" => 200,
                "data" => $ads
        ]);
        
    }
}
