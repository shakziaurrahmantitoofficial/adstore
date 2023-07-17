<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\customer;

class CustomersController extends Controller
{
    public function index(){
        $customers = customer::orderBy('id','DESC')->get();
        return view('backend.pages.customer.customer_list',compact('customers'));
    }

    public function show($id){
        $customers = customer::where('id',$id)->first();
        return view('backend.pages.customer.customer_edit',compact('customers'));
    }

    public function delete($id){
        $user = customer::findOrFail($id);
        if($user->status == 1){
            $user->status = 0;
        }else{
            $user->status = 1;
        }
        $user->save();
        if($user){
            return redirect()->route('customer.list')->with('success','Customer Account Deactive Successfully!');
        }else{
            return redirect()->back()->with('failure','Customer Account Not Deactive!');
        }
    }
}
