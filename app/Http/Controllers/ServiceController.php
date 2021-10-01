<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function addservices(){
     return view('admin.services.addservices');
    }
    public function storeservices(Request $request){
        $request->validate([
            'serviceName'=>'required',
            'cost'=> 'required',
        ]);
        $service=new Service;
        $service->serviceName=$request->serviceName;
        $service->cost=$request->cost;
        $service->save();
        return redirect()->back()->with('message', 'service has been added');
    }

        public function manageservices(){
            $service=Service::paginate(5);
        return view('admin.services.manageservices', compact('service'));
    }
    public function edit($id){
       $service=Service::find($id);
       return view('admin.services.editmanageservices', compact('service'));
    }
    public function update(Request $request, $id){
        $service=Service::find($id);
        $service->serviceName=$request->serviceName;
        $service->cost=$request->cost;
        $service->save();
        return redirect()->back()->with('message', 'service has been updated');
    }
    public function destroy($id){
        $service=Service::find($id);
        $service->delete();
        return redirect()->back();
    }
  }
