<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Carbon;

class CustomerContoller extends Controller
{
    //
public function index(){


    return view('customer_form');
}

public function AddCustomer(Request $request){

    $validated = $request->validate([
        'profile_name' => 'required',
        'email'=> 'required',
        'pan_number'=> 'required',
        'aadhar_number'=> 'required',
        'profile_photo_path' => 'required|mimes:jpg,png',
    ],[
        'profile_name.required' => 'Please enter Profile Name',
        'email.required' => 'Please enter Profile Email',
        'pan_number.required' => 'Please enter PAN Card Number',
        'aadhar_number.required' => 'Please enter Aadhar Card number',
    ]);


    $file = $request->file('profile_photo_path');
        
        $filename = date('YmdHi').$file->getClientOriginalName();
        $file->move(public_path('upload/customer_images/'),$filename);
        $path = 'upload/customer_images/'.$filename;
        Customer::insert([
            'profile_name' => $request->profile_name,
            'email' => $request->email,
            'address' => $request->address,
            'pan_number' => $request->pan_number,
            'aadhar_number' => $request->aadhar_number,
            'profile_photo_path' =>$path,
            'created_at' => Carbon::now()
        ]);        
        $notification = array(
            'message'=>'Customer Data Stored Successfully',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);;

}


}
