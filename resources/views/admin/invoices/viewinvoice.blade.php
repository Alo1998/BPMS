@extends('admin.master.masterpage')
@section('content')
  <div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item active text-danger" aria-current="page"><i class="fa fa-user-plus"></i> Invoice Details</li>
        </ol>
      </nav>
      <div class="row">
          <div class="col-md-12">
              <div class="card shadow">
               
                  <div class="card-header text-center" style="font-weight: bold; background-color: #D980FA;">
                      <h4>Invoice#{{$assignservice->invoice_no}}</h4>
                  </div>
                  <table class="table table-bordered table-hover table-striped">
                    <tr>
                      <th colspan="6">Customer Details</th>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <td>{{$assignservice->customer->name}}</td>
                    
                        <th>Email</th>
                        <td>{{$assignservice->customer->email}}</td>
                        
                        <th>Contact no</th>
                        <td>{{$assignservice->customer->text}}</td>
                    </tr>
                
                
                        <th>Gender</th>
                        <td >{{$assignservice->customer->gender}}</td>
                    
                        <th>Invoice date</th>
                        <td colspan="4">{{$assignservice->customer->created_at}}</td>
                    </tr>
                    <tr>
                      <th colspan="6">Service Details</th>
                    </tr>
                    <tr>
                      <th colspan="1">#</th>
                      <th colspan="3">Service Name</th>
                      <th colspan="2">Cost</th>
                  </tr>
                  @php
                      $i = 1;
                      $total = 0;
                  @endphp
                 
                
                  @foreach($serviceDetail as $row)
                  <tr>
                      <td colspan="1">{{$i++}}</td>
                      <td colspan="3">{{$row->service->serviceName}}</td>
                      <td colspan="2">{{$row->service->cost}}</td>
                      <div style="display: none">
                        {{$total = $total + $row->service->cost}}
                      </div>
                  </tr>
                  @endforeach
                  <tr style="font-weight: bold; font-size:15px">
                    <td colspan="4"class="text-center" >Grand Total</td>
                    <td colspan="2">{{$total}}</td>
                  </tr>
                  </table>
              </div>
          </div>
      </div>     
  </div>
@endsection
