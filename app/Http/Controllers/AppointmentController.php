<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function allappointment(){
        $appointment=Appointment::orderBy('id', 'desc')->paginate(5);
        return view('admin.appointment.allappointment', compact('appointment'));
    }
    public function view($id){
        $appointment=Appointment::find($id);
        return view('admin.appointment.viewallappointment', compact('appointment'));
    }

    public function updateAppointment(Request $request, $id){
        Appointment::where('id',$id)->update(['status'=> $request->status]);
        return redirect()->route('allappointment');
    }


   
    public function newappointment(){
        $date = date("Y-m-d");
        $newappointment = Appointment::where(['date'=>$date])->get();
        return view('admin.appointment.newappointment', compact('newappointment'));
    }
    public function newview($id){
        $appointment = Appointment::find($id);
        // dd($appointment);
        return view('admin.appointment.newaptview', compact('appointment'));
    }
    
    
    
    
    public function acceptedappointment(){
        $accepted = Appointment::where(['status'=>'accepted'])->get();
        return view('admin.appointment.acceptedappointment', compact('accepted'));
    }
    public function rejectedappointment(){
        $rejected = Appointment::where(['status'=>'rejected'])->get();
        return view('admin.appointment.rejectedappointment', compact('rejected'));
    }
}
