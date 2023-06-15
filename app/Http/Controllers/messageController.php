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

    public function customermessagelist(){
        $message = null;
        if(message::orderby("id","DESC")->count() > 0){
            $message = message::orderby("id","DESC")->get();
        }
        return view("backend.pages.messagelist", compact('message'));
    }    

    public function customerGetmessage(Request $req){

        $message = message::find($req->id);
        $message->status = 1;
        $message->save();
        
        $count = message::where("customer_id", Auth::guard("customer")->id())->where("status", 0)->count();
        return response()->json([
            "status" => true,
            "data"   => $message,
            "imagepath"  => isset($message->file) ? asset($message->file) : false,
            "count"  => $count
        ]);
    }


}
