<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\customer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Session;

class CustomerController extends Controller
{
    public function customerSettings(){

        if (!Auth::guard("customer")->check()) {
            return redirect("/dashboard");
        }else{
             return view("frontend.pages.customerSettings");
        }
    }


    public function customerUpdate(Request $req){
      
        if($req->method("POST")){

            $errors = Validator::make($req->all(),[
                "name" => "required",
                "mailPhone" => "required|unique:customers,mailPhone,".$req->id,
                "nid" => "required|unique:customers,nid,".$req->id,
                "address" => "required",
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
                Session::put("success","Profile updated successfully!");
                return response()->json([
                    "status" => "reload"
                ]);
            }else{
                Session::put("error","Profile updated unsuccessful!");
                return response()->json([
                    "status" => "reload"
                ]);            
            }



        }

    }

    public function customerPasswordChange(Request $req){
        $errors = Validator::make($req->all(), [
            "oldpassword" => "required",
            "password" => "required|min:8",
            "repassword" => "required|same:password",
        ]);

        if ($errors->fails()) {
            return response()->json([
                "status" => false,
                "message" => "error",
                "data" => $errors->errors()
            ]);
        }


        $check_data = customer::where('id', Auth::guard("customer")->user()->id)->first();

        if (Hash::check($req->oldpassword, $check_data->password)) {
            $customer = customer::where('id',Auth::guard("customer")->user()->id)->first();
            $customer->password = $req->password;
            $customer->save();
            if($customer){
                Session::put("success","Password change successfully");
                return response()->json([
                    "status" => "reload"
                ]);
            }else{
                Session::put("error","Something Wrong!");
                return response()->json([
                    "status" => "reload"
                ]);
            }
        }else{
            Session::put("error","Old password not match!");
            return response()->json([
                "status" => "reload"
            ]);
        }
    }
}
