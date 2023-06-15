<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\message;
use Illuminate\Support\Facades\Validator;
use Auth;
use Session;

class messageController extends Controller
{
    

    public function CMessage(Request $req){

        $errors = Validator::make($req->all(),[
            "message" => "required"
        ]);

        if ($errors->fails()) {
            return response()->json([
                "status" => false,
                "message" => "error",
                "data" => $errors->errors()
            ]);
        }



        $message = new message();
        $message->message       = $req->message;
        $message->customer_id   = Auth::guard("customer")->id();

        if($req->file){
            $myFile = $req->file;
            $file   = substr(md5(time()), 0, 10).".".$req->file->getClientOriginalExtension();
            $myFile->move(public_path("message"), $file);
            $message->file  = "message/".$file;
        }
    
        $message->save();

        Session::put("success","Message sent successfully");
        return response()->json([
            "status"    => true,
            "message"   => "success",
            "data"      => $message
        ]);

    }


}
