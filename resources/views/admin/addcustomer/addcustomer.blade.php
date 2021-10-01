@extends('admin.master.masterpage')
@section('content')
@if(session('message'))
<div class="alert alert-success">
    {{session('message')}}
</div>
@endif
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item active text-danger" aria-current="page"><i class="fa fa-user-plus"></i> Add customer</li>
    </ol>
  </nav>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header" style="background: #D980FA;">
                <h4>Parlour Customer</h4>
            </div>
            <div class="card-body">
                <form action="{{route('storecustomer')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="name">
                    </div>
                    <div class="form-group">
                        <label for="cost">Email</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="email">
                    </div>
                    <div class="form-group">
                        <label for="number">Mobile Number</label>
                        <input type="text" name="text" class="form-control" id="number" placeholder="number">
                    </div>
                    <div>
                        <label for="">Gender</label><br>
                        <input type="radio" value="male" name="gender">Male
                        <input type="radio" value="female" name="gender">Female
                    </div><br>
                    <div>
                        <label for="details">Description</label>
                        <textarea name="describe" id="details" cols="30" rows="5" class="form-control"></textarea>
                    </div><br>
                    <div>
                        <input type="submit" name="add" value="Add" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection