<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use App\Models\Customer;

class AdminController extends Controller
{
    //

    public function Index(){
        return view('admin_login_form');
    }

public function AdminRegister(){

    return view('admin_register_form');
}

public function Register(Request $request){
    // dd($request->all());
    Admin::insert([
        'name'=>$request->name,
        'email'=>$request->email,
        'password'=>Hash::make($request->password),
        'created_at'=>Carbon::now(),
    ]);
    
    return redirect()->route('admin.login.form')->with('error','Admin Created Successfully');
    
    }

    public function Login(Request $request){

        $check = $request->all();
        if(Auth::guard('admin')->attempt(['email'=>$check['email'],'password'=>$check['password']])){
            return redirect()->route('admin.dashboard')->with('error','Admin Loging Successfully');
        }else{
    
            $notification = array(
                'message'=>'Invalid Email or Password',
                'alert-type'=>'error'
            );
            return back()->with($notification);
        }
        
    
    }

    public function Dashboard(){

        $customer_data = Customer::latest()->get();
        
        return view('admin_dashboard',compact('customer_data'));
    }


    public function AdminLogout(){
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login.form')->with('error','Admin Logout Successfully');
    
    }

}
