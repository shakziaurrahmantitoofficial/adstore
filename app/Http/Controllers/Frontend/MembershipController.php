<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class MembershipController extends Controller
{
    public function MyMembership(){

        if (!Auth::guard("customer")->check()) {
            return redirect("/dashboard");
        }else{
             return view("frontend.pages.myMembership");
        }
    }

    public function MyMembershipUpdate(Request $req){

        $errors = Validator::make($req->all(),[
            "image" => "required",
        ]);

        if ($errors->fails()) {
            return response()->json([
                "status" => false,
                "message" => "error",
                "data" => $errors->errors()
            ]);
        }

            


        $customer = customer::where('id',Auth::guard("customer")->user()->id)->first();
        if($req->image){
            @unlink('membershipImage/'.$customer->profile_image);
            $path = $req->image;
            $paths = substr(md5(time()), 0, 10).".".$path->getClientOriginalExtension();
            $path->move(public_path("membershipImage"),$paths);
            $path_url = 'membershipImage/'.$paths;
            $customer->profile_image = $path_url;
        }
        $customer->save();

        if($customer){
            return response()->with("success","Membership Profile updated!" );
            
            // Session::put("success","Membership Profile updated!");
            // return response()->json([
            //     "status"=>"success"
            // ]);
        }else{
            return response()->json()->with("fail", "Membership Profile not updated!" );
        }

    }
}
