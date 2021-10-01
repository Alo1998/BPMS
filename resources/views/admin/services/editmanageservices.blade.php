@extends('admin.master.masterpage')
@section('content')
@if(session('message'))
<div class="alert alert-success">
    {{session('message')}}
</div>
@endif
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item active text-danger" aria-current="page"><i class="fa fa-user-plus"></i> Update services</li>
            </ol>
          </nav>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="background: #D980FA;">
                        <h4>Update Parlour Sevices</h4>
                    </div>
                  <div class="card-body">
                    <form action="{{route('update.service',$service->id)}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="service">Service Name</label>
                                <input type="text" value="{{$service->serviceName}}" name="serviceName" class="form-control" id="service" placeholder="service name">
                            </div>
                            <div class="form-group">
                                <label for="cost">Cost</label>
                                <input type="text" value="{{$service->cost}}" name="cost" class="form-control" id="cost" placeholder="cost">
                            </div>
                            <div>
                                <input type="submit" name="add" value="Update" class="btn btn-success">
                            </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection