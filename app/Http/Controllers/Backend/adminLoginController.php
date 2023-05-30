<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Illuminate\Support\Facades\Validator;

class adminLoginController extends Controller
{
    public function index(){
        if (Auth::check()) {
            return "ok";
        }else{
            return view("auth.login");
        }
    }

    public function admin_login(Request $req){

        if($req->method("POST")){

            $errors = Validator::make($req->all(),[
                "email" => "required|email",
                "password" => "required"
            ]);

            if ($errors->fails()) {
                return response()->json([
                    "status" => false,
                    "message" => "error",
                    "data" => $errors->errors()
                ]);
            }

            if(Auth::attempt(['email' => $req->email, 'password' => $req->password], $req->remember)){
                return response()->json([
                    "status" => true,
                    "login" => true,
                    "message" => "success"
                ]);
            }else{
                return response()->json([
                    "status" => false,
                    "login" => false,
                    "message" => "Email or password not match!"
                ]);
            }

        }
    }


    public function admin_logout(){
        Auth::logout();
        return redirect("admin/login");
    }







}
