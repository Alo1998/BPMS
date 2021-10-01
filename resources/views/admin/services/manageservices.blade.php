@extends('admin.master.masterpage')
@section('content')
  <div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item active text-danger" aria-current="page"><i class="fa fa-user-plus"></i> Manage services</li>
        </ol>
      </nav>
      <div class="row">
          <div class="col-md-12">
              <div class="card">
                  <div class="card-header" style="background: #D980FA;">
                      <h4>Update Services</h4>
                      @csrf
                  </div>
                      <div class="card-body">
                          
                         <table class="table table-bordered table-hover table-striped">
                            <tr>
                                <th>Id</th>
                                <th>Service Name</th>
                                <th>Cost</th>
                                <th>Creation Date</th>
                                <th>Action</th>
                            </tr>
                            @php($i=1)
                            @foreach($service as $row)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$row->serviceName}}</td>
                                <td>{{$row->cost}}</td>
                                <td>{{$row->created_at->diffForHumans()}}</td>
                                <td>
                                <a href="{{ route('edit.service',$row->id)}}" class="badge badge-pill badge-primary"> <i class="fas fa-edit"></i></a>
                                    <a href="{{route('delete.service',$row->id)}}" class="badge badge-pill badge-danger"> <i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            @endforeach
                         </table>
                      </div>
                      {{$service->links()}}
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection