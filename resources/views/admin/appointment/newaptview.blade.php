@extends('admin.master.masterpage')
@section('content')
  <div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item active text-danger" aria-current="page"><i class="fa fa-user-plus"></i> View Appointment</li>
        </ol>
      </nav>
      <div class="row">
          <div class="col-md-12">
              <div class="card">
                  <div class="card-header" style="background: #D980FA;">
                      <h4>View Appointment</h4>
                  </div>
                  <table class="table table-bordered table-hover table-striped">
                    <tr>
                        <th>#</th>
                        <td>{{$appointment->id}}</td>
                    <tr>
                        <th>Appointment Number</th>
                        <td>{{$appointment->appointment_no}}</td>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <td>{{$appointment->name}}</td>
                    </tr>
                    <tr>
                        <th>Mobile Number</th>
                        <td>{{$appointment->phone}}</td>
                    </tr>
                    <tr>
                        <th>Appointment Date</th>
                        <td>{{$appointment->date}}</td>
                    </tr>
                    <tr>
                        <th>Appointment Time</th>
                        <td>{{$appointment->time}}</td>
                    </tr>
                  </table>
              </div>
          </div>
      </div> 
    </div>   
      @endsection