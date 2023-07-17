<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
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



    // Profile Setting
    public function profileSetting(){
        $users = User::where('id',Auth::user()->id)->first();
        return view("backend.pages.profile.profile_setting",compact('users'));
    }
    public function profileUpdate(Request $req){
        if($req->method("POST")){

            $errors = Validator::make($req->all(),[
                "name" => "required",
                "email" => "required|unique:users,id,".$req->id,
            ]);

            if($req->email){
                $errors = Validator::make($req->all(),[
                    "email" => "email",
                ],[
                    "email.email" => "Please valid email address.",
                    "email.users" => "Email address already exists."
                ]);
            }

            if ($errors->fails()) {
                return response()->json([
                    "status" => false,
                    "message" => "error",
                    "data" => $errors->errors()
                ]);
            }

            $users = User::where('id',Auth::user()->id)->first();

            if($req->image){
                @unlink($users->image);
                $path   = $req->image;
                $paths  = substr(md5(time()), 0, 10).".".$path->getClientOriginalExtension();
                $path->move(public_path("upload/user"),$paths);
                $path_url = 'upload/user/'.$paths;
                $users->image        = $path_url;
            }

            $users->name     = $req->name;
            $users->email    = $req->email;
            $users->save();

            if($users){
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
    public function passwordChange(Request $req){
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


        $check_data = User::where('id', Auth::user()->id)->first();

        if (Hash::check($req->oldpassword, $check_data->password)) {
            $users = User::where('id',Auth::user()->id)->first();
            $users->password = Hash::make($req->password);
            $users->save();
            if($users){
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
