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
                  <form action="{{route('update.appointment', $appointment->id)}}" method="POST">
                    @csrf
                  <table class="table table-bordered">
                    <tr>
                        <th>Appointment Number</th>
                        <td>{{$appointment->appointment_no}}</td>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <td>{{$appointment->name}}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{$appointment->email}}</td>
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
                    <tr>
                        <th>Services</th>
                        <td>{{$appointment->select}}</td>
                    </tr>
                    <tr>
                        <th>Apply Date</th>
                        <td>{{$appointment->created_at}}</td>
                    </tr>
                        <tr>
                            <th>Selected:</th>
                            <td>
                        
                            <div class="form-group">
                                <select name="status" class="form-control">
                                    <option value="accepted" style="margin-left: 30px;" @php
                                        if($appointment->status == 'pending') echo "selected"
                                    @endphp >Pending</option>
                                    <option value="accepted">Accepted</option>
                                    <option value="rejected">Rejected</option>
                                </select>
                            </div>
                    </td>
                        </tr>
                    </table>
                    <div class="text-center">
                        <button class="btn btn-primary mr-2 mb-2" type="submit">Submit</button>
                    </div>
                </form>
                    
              </div>
          </div>
      </div>
  </div>
@endsection