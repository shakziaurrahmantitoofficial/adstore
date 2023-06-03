<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

        $this->validate($req, [
            "image" => "required",
        ]);

            

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
            return redirect()->back()->with(["success" => "Membership Profile updated!" ]);
        }else{
            return redirect()->back()->with(["fail" => "Membership Profile not updated!" ]);
        }

    }
}
