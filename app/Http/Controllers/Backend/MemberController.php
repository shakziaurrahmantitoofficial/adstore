<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\customer;
use App\Models\membership;
use Illuminate\Support\Facades\Session;

class MemberController extends Controller
{
    public function MembershipList (){

        $membership = null;
        if(customer::orderBy("id","DESC")->count() > 0){
            $membership = customer::where("profile_status",'!=',NULL)->orderBy('id','DESC')->get();
        }
        return view("backend.pages.membership.membershiplist", compact('membership'));
    }

    public function MembershipView ($id){

        $membership = null;
        if(customer::orderBy("id","DESC")->count() > 0){
            $membership = customer::where("profile_status",'!=',NULL)->where('id',$id)->first();
        }
        return view("backend.pages.membership.membershipview", compact('membership'));
    }

    public function MembershipConfirm ($id){

        $membership = null;
        if(customer::orderBy("id","DESC")->count() > 0){
            $membership = customer::where("profile_status",'!=',NULL)->where('id',$id)->update([
                'profile_status' => 1,
            ]);
        }
        if($membership != null){
            return redirect()->back()->with('success','Membership profile Confirm!');
        }else{
            return redirect()->back()->with('error','Something Wrong!');
        }
    }

    public function MembershipPayList (){
        $membership = membership::orderBy('id','DESC')->with('customer')->get();
        return view("backend.pages.membership.membershippaylist", compact('membership'));
    }

    public function MembershipPayConfirm ($id){

        $membership = membership::where('id',$id)->update([
            'payment' => 1,
        ]);
        if($membership != null){
            return redirect()->back()->with('success','Membership Payment Confirm!');
        }else{
            return redirect()->back()->with('error','Something Wrong!');
        }
    }
}
