@extends('admin.master.masterpage')
@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item active" aria-current="page"><i class="fa fa-user-plus"></i> Accepted Appointment</li>
            </ol>
          </nav>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"  style="background: #D980FA;">
                        <h4>Accepted Appointment</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <th>Id</th>
                                <th>Appointment Number</th>
                                <th>Name</th>
                                <th>Mobile Number</th>
                                <th>Appointment Date</th>
                                <th>Appointment Time</th>
                                <th>Action</th>
                            </tr>
                            @foreach ($accepted as $key=>$row)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$row->appointment_no}}</td>
                                <td>{{$row->name}}</td>
                                <td>{{$row->phone}}</td>
                                <td>{{$row->date}}</td>
                                <td>{{$row->time}}</td>
                                <td>
                                    <a href="" class="badge badge-pill badge-warning"> <i class="fas fa-eye"></i></a>
                                </td>
                            </tr>
                            @endforeach
                            
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection