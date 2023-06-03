<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\customer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
    public function customerSettings(){

        return view("frontend.pages.customerSettings");
        // if (Auth::guard("customer")->check()) {
        //     return redirect("/dashboard");
        // }else{
        //      return view("frontend.pages.customerSettings");
        // }
    }


    public function customerUpdate(Request $req){
      
        if($req->method("POST")){

            $errors = Validator::make($req->all(),[
                "name" => "required",
                "mailPhone" => "required|unique:customers,mailPhone,".$req->id,
                "nid" => "required|unique:customers,nid,".$req->nid,
                "address" => "required",
                // "password" => "required|min:8",
                // "repassword" => "required|same:password",
            ]);

            if ($errors->fails()) {
                return response()->json([
                    "status" => false,
                    "message" => "error",
                    "data" => $errors->errors()
                ]);
            }

            if(is_numeric($req->mailPhone)){

                $errors = Validator::make($req->all(),[
                    "mailPhone" => "min:11",
                ],[
                    "mailPhone.min" => "Please valid phone number."
                ]);

            }else{
                $errors = Validator::make($req->all(),[
                    "mailPhone" => "email",
                ],[
                    "mailPhone.email" => "Please valid email address.",
                    "mailPhone.customers" => "Email address already exists."
                ]);
            }

            if ($errors->fails()) {
                return response()->json([
                    "status" => false,
                    "message" => "error",
                    "data" => $errors->errors()
                ]);
            }

            $customer = customer::where('id',Auth::guard("customer")->user()->id)->first();

            if($req->image){
                @unlink($customer->image);
                $path   = $req->image;
                $paths  = substr(md5(time()), 0, 10).".".$path->getClientOriginalExtension();
                $path->move(public_path("customerImage"),$paths);
                $path_url = 'customerImage/'.$paths;
                $customer->image        = $path_url;
            }

            $customer->name         = $req->name;
            $customer->mailPhone    = $req->mailPhone;
            $customer->nid          = $req->nid;
            $customer->address      = $req->address;
            $customer->save();

            if($customer){
                return redirect()->back()->with([
                    "status" => true,
                    "customerReglogin" => true,
                    "message" => "Customer Profile updated!"
                ]);
            }else{
                return redirect()->back()->with([
                    "status" => false,
                    "customerReglogin" => false,
                    "message" => "Customer Profile not updated!"
                ]);
            }
        }

    }

    public function customerPasswordChange(Request $req){
        $this->validate($req, [
            "oldpassword" => "required",
            "password" => "required|min:8",
            "repassword" => "required|same:password",
        ]);

        $check_data = customer::where('id',Auth::guard("customer")->user()->id)->first();

        if (Hash::check($req->oldpassword, $check_data->password)) {
            $customer = customer::where('id',Auth::guard("customer")->user()->id)->first();
            $customer->password = $req->password;
            $customer->save();
            if($customer){
                return redirect()->back()->with([
                    "status" => true,
                    "customerReglogin" => true,
                    "message" => 'Password Change Successfully'
                ]);
            }else{
                return redirect()->back()->with([
                    "status" => false,
                    "customerReglogin" => false,
                    "message" => "Password not change!"
                ]);
            }
        }else{
            return redirect()->back()->with([
                "status" => false,
                "customerReglogin" => false,
                "message" => "Old password not match!"
            ]);
        }
    }
}
