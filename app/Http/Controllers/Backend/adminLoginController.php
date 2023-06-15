<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class adminLoginController extends Controller
{
    public function index(){
        if (Auth::check()) {
            return redirect(Route('admin.dashboard'));
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

            $User = User::where('email', $req->email)->first();
            if($User){
                if(Hash::check($req->password, $User->password)){
                    if(User::where('email', $req->email)->where('status', 1)->count() > 0){
                        Auth::attempt(['email' => $req->email, 'password' => $req->password, 'status'=>1], $req->remember);
                        return response()->json([
                            "status" => true,
                            "login" => true,
                            "message" => "success"
                        ]);
                    }else{
                        return response()->json([
                            "status" => false,
                            "login" => false,
                            "message" => "Your Account is Deactive. Please Contact!"
                        ]);
                    }
                }else{
                    return response()->json([
                        "status" => false,
                        "login" => false,
                        "message" => "Email or password not match!"
                    ]);
                }
            }
        }
    }


    public function admin_logout(){
        Auth::logout();
        return redirect("admin/login");
    }







}
