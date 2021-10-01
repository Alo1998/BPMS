<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function Frontend(){
        return view('frontend.index');
    }

    public function admin(){
        return view('backend.auth.login');
    }

    
    
    
    //USER APPOINTMENT:  
    
    public function userappointment(){
        return view('frontend.index');
    }
    public function storeappointment(Request $request){

        $count = Appointment::count()+1;
        $id_generate = "10101".$count;
        $appointment = new Appointment;
        $appointment->name=$request->name;
        $appointment->email=$request->email;
        $appointment->select=$request->select;
        $appointment->date=$request->date;
        $appointment->time=$request->time;
        $appointment->phone=$request->phone;
        $appointment->appointment_no =$id_generate;
        $appointment->save();
        
        return redirect()->route('appointment.success',['id'=>$appointment->id]);

    }
    

    public function success(Request $request){

            $id = $request->query('id');

            $appointment = Appointment::find($id);

           return view('frontend.success',compact('appointment'));


    }

}
