<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function bw(){
        return view('admin.reports.bw');
    }
    public function salesreports(){
        return view('admin.reports.salesreports');
    }
}
