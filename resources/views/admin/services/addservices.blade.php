@extends('admin.master.masterpage')
@section('content')


    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{url('/dashboard')}}"><i class="fa fa-home"></i> Home</a></li>
              <li class="breadcrumb-item active text-danger" aria-current="page"><i class="fa fa-user-plus"></i> Add services</li>
            </ol>
          </nav>
          @if(session('message'))
                <div class="alert alert-success">
                    {{session('message')}}
                </div>
                @endif
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="background: #D980FA;">
                        <h4>Parlour Service</h4>
                    </div>
                    @if($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="text-danger">
                            {{$error}}
                        </div>
                    @endforeach
                    @endif
                    <div class="card-body">
                    <form action="{{route('storeservices')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="service">Service Name</label>
                                <input type="text" name="serviceName" value="{{old('serviceName')}}" class="form-control" id="service" placeholder="service name">
                            </div>
                            <div class="form-group">
                                <label for="cost">Service Cost</label>
                                <input type="text" name="cost" value="{{old('cost')}}" class="form-control" id="cost" placeholder="cost">
                            </div>
                            <div>
                                <input type="submit" name="add" value="Add" class="btn btn-info">
                            </div>
                            </form>
                            
                    </div>
                </div>
                </div>
        </div>
    </div>
@endsection