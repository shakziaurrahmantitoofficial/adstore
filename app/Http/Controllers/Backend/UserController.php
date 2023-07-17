<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        $users = User::orderBy('id','DESC')->get();
        return view('backend.pages.user.user_list',compact('users'));
    }

    public function create(){
        return view('backend.pages.user.user_add');
    }

    public function store(Request $request){
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed'],
        ]);

        $user = new User();
        if($request->image){
            @unlink($user->image);
            $path = $request->image;
            $paths = substr(md5(time()), 0, 10).".".$path->getClientOriginalExtension();
            $path->move(public_path("upload/user"),$paths);
            $path_url = 'upload/user/'.$paths;
            $user->image = $path_url;
        }
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        if($user){
            return redirect()->route('user.list')->with('success','User Created Successfully!');
        }else{
            return redirect()->back()->with('failure','User Not Created!');
        }
    }

    public function show($id){
        $users = User::findOrFail($id);
        return view('backend.pages.user.user_edit',compact('users'));
    }

    public function edit(){
        return 'edit';
    }

    public function update(Request $request,$id){
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,id,'.$id],
        ]);

        $user = User::findOrFail($id);
        if($request->image){
            @unlink($user->image);
            $path = $request->image;
            $paths = substr(md5(time()), 0, 10).".".$path->getClientOriginalExtension();
            $path->move(public_path("upload/user"),$paths);
            $path_url = 'upload/user/'.$paths;
            $user->image = $path_url;
        }
        if($request->password){
            if($request->password == $request->password_confirmation){
                $user->password = Hash::make($request->password);
            }else{
                return redirect()->back()->with('failure','Password and Confirm Password Not Match!');
            }
        }
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        if($user){
            return redirect()->route('user.list')->with('success','User Update Successfully!');
        }else{
            return redirect()->back()->with('failure','User Not Updated!');
        }
    }

    public function delete($id){
        $user = User::findOrFail($id);
        if($user->status == 1){
            $user->status = 0;
        }else{
            $user->status = 1;
        }
        $user->save();
        if($user){
            return redirect()->route('user.list')->with('success','User Account Deactive Successfully!');
        }else{
            return redirect()->back()->with('failure','User Account Not Deactive!');
        }
    }
}
