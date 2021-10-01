@extends('admin.master.masterpage')
@section('content')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item active text-danger" aria-current="page"><i class="fa fa-user-plus"></i> customer list</li>
        </ol>
      </nav>
      <div class="row">
          <div class="col-md-12">
              <div class="card">

                  <div class="card-header" style="background: #D980FA;">
                      <h4>Customer List</h4>
                  </div>
                      <div class="card-body">
                         <table class="table table-bordered table-hover table-striped">
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Creation Date</th>
                                <th>Action</th>
                            </tr>
                            @php ($i=1)
                            @foreach($customer as $row)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$row->name}}</td>
                                <td>{{$row->email}}</td>
                                <td>{{$row->text}}</td>
                                <td>{{$row->created_at->diffForHumans()}}</td>
                                <td>
                                    <a href="{{route('edit.customerlist',$row->id)}}" class="badge badge-pill badge-primary"> <i class="fas fa-edit"></i></a>
                                    <a href="{{route('assign.services',$row->id)}}" class="badge badge-pill badge-danger"> <i class="fa fa-plus-square"></i></a>
                                </td>
                            </tr>
                            @endforeach
                         </table>
                      </div>
                      {{$customer->links()}}
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection