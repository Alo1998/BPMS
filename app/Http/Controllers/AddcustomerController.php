<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class AddcustomerController extends Controller
{
    public function addcustomer(){
        return view('admin.addcustomer.addcustomer');
    }
    public function storecustomer(Request $request){
        $id = Customer::count()+1;
        $generate_id ="101011".$id;
        $customer=new Customer;
        $customer ->invoice_id = $generate_id;
        $customer->name=$request->name;
        $customer->email=$request->email;
        $customer->text=$request->text;
        $customer->gender=$request->gender;
        $customer->describe=$request->describe;
        $customer->save();
        return redirect()->back()->with('message', 'customer has been added');
    }
}
