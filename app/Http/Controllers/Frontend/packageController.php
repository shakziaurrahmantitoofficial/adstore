<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\package;
use Auth;

class packageController extends Controller
{
    public function customerPackagelist(){
        $package = null;

        if(package::where("customerId", Auth::guard("customer")->id())->count() > 0){
            $package = package::where("customerId", Auth::guard("customer")->id())->orderby("id","DESC")->get();
        }

        return view("frontend.pages.packagelist", compact('package'));
    }
}
