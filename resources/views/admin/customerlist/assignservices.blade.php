@extends('admin.master.masterpage')
@section('content')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item active text-danger" aria-current="page"><i class="fa fa-user-plus"></i> Assign Services</li>
        </ol>
      </nav>
      <div class="row">
          <div class="col-md-12">
              <div class="card">

                  <div class="card-header" style="background: #D980FA;">
                      <h4>Assign Services</h4>
                  </div>
                      <div class="card-body">
                      <form action="{{route('create.invoice')}}" method="POST">
                        @csrf
                            <table class="table table-bordered">
                                <tr>
                                    <th>Sr</th>
                                    <th>Service Name</th>
                                    <th>Service Price</th>
                                    <th>Action</th>
                                </tr>
                                @foreach($service as $key=> $row)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$row->serviceName}}</td>
                                    <td>{{$row->cost}}</td>
                                    <td>
                                    {{-- <input type="hidden" name="service_id[$row->id]" value="{{$row->id}}"> --}}
                                    <input type="checkbox" name="select_service[]" value="{{$row->id}}">
                                    </td>
                                </tr>
                                @endforeach
                             </table>
                                <input type="hidden" value="{{$customer->id}}" name="customer_id">
                             <div class="text-center">
                                <input type="submit" value="Submit" class="btn btn-info">
                            </div>
                         </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection