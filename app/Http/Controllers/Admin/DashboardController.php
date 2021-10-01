<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Customer;
use App\Models\Service;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function showdashboard(){
        return view('admin.dashboard',[
            'total_service'=>Service::count(),
            'apoinment'=>Appointment::count(),
            'customer'=>Customer::count(),
        ]);
    }
    
}
