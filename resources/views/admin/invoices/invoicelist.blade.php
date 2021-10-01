@extends('admin.master.masterpage')
@section('content')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item active text-danger" aria-current="page"><i class="fa fa-user-plus"></i> Invoice</li>
        </ol>
      </nav>
      <div class="row">
          <div class="col-md-12">
              <div class="card">
                  <div class="card-header" style="background: #D980FA;">
                      <h4>Invoice list</h4>
                  </div>
                      <div class="card-body">
                         <table class="table table-bordered table-hover table-striped">
                            <tr>
                                <th>#</th>
                                <th>Invoice Id</th>
                                <th>Customer Name</th>
                                <th>Invoice Date</th>
                                <th>Action</th>
                            </tr>
                            @php ($i=1)
                            @foreach($assignservice as $row)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$row->invoice_no}}</td>
                                <td>{{$row->customer->name}}</td>
                                <td>{{$row->created_at}}</td>
                                <td>
                                    <a href="{{route('view.invoice', $row->id)}}" class="badge badge-pill badge-warning"> <i class="fa fa-eye"></i></a>
                                </td>
                            </tr>
                            @endforeach
                         </table>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection