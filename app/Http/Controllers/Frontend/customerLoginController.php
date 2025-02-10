<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\customer;
use App\Mail\Forgot\passwordSendMail;
use Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class customerLoginController extends Controller
{

    public function customerRegistraion(){

        if (Auth::guard("customer")->check()) {
            return redirect("/dashboard");
        }else{
             return view("frontend.pages.customerRegister");
        }
    }


    public function customerRegisstationInsert(Request $req){
        if($req->method("POST")){
            $errors = Validator::make($req->all(),[
                "name" => "required",
                "mailPhone" => "required",
                "address" => "required",
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
            if(is_numeric($req->mailPhone)){
                $errors = Validator::make($req->all(),[
                    "mailPhone" => "unique:customers|min:11",
                ],[
                    "mailPhone.min" => "Please valid phone number."
                ]);

            }else{
                $errors = Validator::make($req->all(),[
                    "mailPhone" => "email|unique:customers",
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

            $customer = new customer();
            $customer->name = $req->name;
            $customer->mailPhone = $req->mailPhone;
            $customer->nid = $req->nid;
            $customer->customerType = "personal";
            $customer->address = $req->address;
            $customer->password = bcrypt($req->repassword);
            $customer->save();

            if(Auth::guard("customer")->attempt(['mailPhone' => $req->mailPhone, 'password' => $req->password], true)){
                return response()->json([
                    "status" => true,
                    "customerReglogin" => true,
                    "message" => $customer
                ]);
            }else{
                return response()->json([
                    "status" => false,
                    "customerReglogin" => false,
                    "message" => "Email or password not match!"
                ]);
            }
        }

    }


    public function customerCompanyReg(Request $req){
        
        if($req->method("POST")){

            $errors = Validator::make($req->all(),[
                "name" => "required",
                "companyName" => "required",
                "nid" => "required",
                "businessType" => "required",
                "mailPhone" => "required|min:11|unique:customers|numeric",
                "tradelince" => "required",
                "address" => "required",
                "password" => "required|min:8",
                "repassword" => "required|same:password",
            ],[
                "mailPhone.required" => "Please give your phone number.",
                "mailPhone.unique" => "Phone number already exists.",
                "mailPhone.numeric" => "Please valid phone number."
            ]);


            if ($errors->fails()) {
                return response()->json([
                    "status" => false,
                    "message" => "error",
                    "data" => $errors->errors()
                ]);
            }

            $customer               = new customer();
            $customer->name         = $req->name;
            $customer->companyName  = $req->companyName;
            $customer->businessType = $req->businessType;
            $customer->mailPhone    = $req->mailPhone;
            $customer->tradelince   = $req->tradelince;
            $customer->nid          = $req->nid;
            $customer->customerType = "company";
            $customer->address      = $req->address;
            $customer->password     = bcrypt($req->repassword);
            $customer->save();


            if(Auth::guard("customer")->attempt(['mailPhone' => $req->mailPhone, 'password' => $req->password], true)){
                return response()->json([
                    "status" => true,
                    "customerReglogin" => true,
                    "message" => $customer
                ]);
            }else{
                return response()->json([
                    "status" => false,
                    "customerReglogin" => false,
                    "message" => "Email or password not match!"
                ]);
            }
        }

    }




    public function customer_login(Request $req){

        if($req->method("POST")){

            $errors = Validator::make($req->all(),[
                "mailPhone" => "required",
                "password" => "required"
            ]);


            if ($errors->fails()) {
                return response()->json([
                    "status" => false,
                    "message" => "error",
                    "data" => $errors->errors()
                ]);
            }

            $customer = customer::where('mailPhone', $req->mailPhone)->first();
            if($customer){
                if(Hash::check($req->password, $customer->password)){
                    if(customer::where('mailPhone', $req->mailPhone)->where('status', 1)->count() > 0){
                        Auth::guard("customer")->attempt(['mailPhone' => $req->mailPhone, 'password' => $req->password],true);
                        // return $customer;
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
            }else{
                return response()->json([
                    "status" => false,
                    "login" => false,
                    "message" => "Email or password not match!"
                ]);
            }
        }

    } 

    

    public function customerforgot_password(Request $req){


        if($req->method("POST")){

            $errors = Validator::make($req->all(),[
                "mailPhone" => "required"
            ]);
            if (is_numeric($req->mailPhone)) {
                $errors = Validator::make($req->all(),[
                    "mailPhone" => "min:11"
                ],[
                    "mailPhone.min" => "Please valid phone number."
                ]);
            }else{
                $errors = Validator::make($req->all(),[
                    "mailPhone" => "email"
                ],[
                    "mailPhone.email" => "Please valid email address."
                ]);
            }

            if ($errors->fails()) {
                return response()->json([
                    "status" => false,
                    "message" => "error",
                    "data" => $errors->errors()
                ]);
            }
        
        
            if(customer::where("mailPhone", $req->mailPhone)->count() > 0){
                $pass               = random_int(1, 1000000);
                $customer           = customer::where("mailPhone", $req->mailPhone)->first();
                $customer->password = bcrypt($pass);
                $customer->save();

                if(is_numeric($customer->mailPhone)){

                    $msg    = "Dear $customer->name,\nYour username: $customer->mailPhone \npassword: $pass from Adstore.";
                    $number = $customer->mailPhone;
                    
                    if($this->sendSMS($number, $msg)){
                        return response()->json([
                            "status"    => true,
                            "messageSend"    => true,
                            "message"   => "We sent $customer->mailPhone login info.",
                            "data"      => $customer
                        ]);
                    }

                }else{

                    Mail::to($customer->mailPhone)->send(new passwordSendMail($customer->name, $customer->mailPhone, $pass));
                    return response()->json([
                        "status"    => true,
                        "messageSend"    => true,
                        "message"   => "We sent $customer->mailPhone login info.",
                        "data"      => $customer
                    ]);
                        
                }

                
            }else{
                return response()->json([
                    "status"    => false,
                    "dataNotFound"    => false,
                    "message"   => "Not found any account."
                ]);
            }

            
        }


    
    }


    public function sendSMS($number, $msg){
            $url = "http://bulksmsbd.net/api/smsapi";
            $api_key = "ocylQe8yBCQqC60ORi5a";
            $senderid = "8809617611040";
            $number = $number;
            $message = $msg;
            $data = [
                "api_key" => $api_key,
                "senderid" => $senderid,
                "number" => $number,
                "message" => $message
            ];
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            $response = curl_exec($ch);
            curl_close($ch);
            return true;
    }












}
