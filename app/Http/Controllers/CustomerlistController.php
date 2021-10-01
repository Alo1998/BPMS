<?php

namespace App\Http\Controllers;

use App\Models\AssignService;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Service;
use App\Models\ServiceDetail;
use Prophecy\Promise\ReturnArgumentPromise;

class CustomerlistController extends Controller
{
    public function customerlist(){

        $customer=Customer::orderBy('id', 'desc')->paginate(5);
        return view('admin.customerlist.customerlist', compact('customer'));
    }
    public function edit($id){
        $customer=Customer::find($id);
        return view('admin.customerlist.editcustomerlist',compact('customer'));
    }
    public function update(Request $request, $id){
        $customer=Customer::find($id);
        $customer->name=$request->name;
        $customer->email=$request->email;
        $customer->text=$request->text;
        $customer->gender=$request->gender;
        $customer->describe=$request->describe;
        $customer->save();
        return redirect()->route('customerlist');

    }

    public function assign($id){
        $customer = Customer::find($id);
        $service = Service::all();
        return view('admin.customerlist.assignservices',compact('service', 'customer'));
        
    }
    

    public function createInvoice(Request $request)
    {
        $id = AssignService::count()+1;
        $generate_id ="12241".$id;

        $data = [
            'customer_id'=>$request->customer_id,
            'invoice_no'=>$generate_id,
        ];
        $id = AssignService::insertGetId($data);

        foreach($request->select_service as $service)
        {
            $pdata[]=[
                'assignService_id'=>$id,
                'service_id'=>$service,
            ];
        }
        ServiceDetail::insert($pdata);
        return redirect()->route('customerlist');
    }
}
