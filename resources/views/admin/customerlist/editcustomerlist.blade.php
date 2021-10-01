@extends('admin.master.masterpage')
@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item active text-danger" aria-current="page"><i class="fa fa-user-plus"></i> Update Customer</li>
    </ol>
  </nav>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header" style="background: #D980FA;">
                <h4>Update Parlour Customers</h4>
            </div>
            <div class="card-body">
                <form action="{{route('update.customerlist',$customer->id)}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" value="{{$customer->name}}" class="form-control" id="name">
                    </div>
                    <div class="form-group">
                        <label for="cost">Email</label>
                        <input type="email" name="email" value="{{$customer->email}}" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="number">Mobile Number</label>
                        <input type="text" name="text" value="{{$customer->text}}" class="form-control" id="number">
                    </div>
                    <div>
                        <label for="">Gender</label><br>
                        <input type="radio" {{$customer->gender == 'male'? 'checked': ''}} name="gender">Male
                        <input type="radio" {{$customer->gender == 'female'? 'checked': ''}} name="gender">Female
                    </div><br>
                    <div>
                        <label for="details">Description</label>
                        <textarea name="describe" id="details" cols="30" rows="5" class="form-control">{{$customer->describe}}</textarea>
                    </div><br>
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