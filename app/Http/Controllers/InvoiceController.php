<?php

namespace App\Http\Controllers;

use App\Models\AssignService;
use App\Models\Customer;
use App\Models\ServiceDetail;
use Illuminate\Http\Request;


class InvoiceController extends Controller
{
    public function invoicelist(){
        $assignservice = AssignService::with('customer')->get();
        return view('admin.invoices.invoicelist', compact('assignservice'));
    }
    public function view($id){
        $customer=Customer::find($id);
        $assignservice = AssignService::where('id', $id)->with('customer')->first();
        $serviceDetail = ServiceDetail::where('assignservice_id',$id)->with('service')->get();
        return view('admin.invoices.viewinvoice',compact('assignservice', 'serviceDetail'));
        
}
}