@extends('admin.master.masterpage')
@section('content')
  <div class="container">
      <div class="row">
          <div class="col-md-6">
              <div class="card">
                  <div class="card-header text-center" style="background: #D980FA;">
                      <h4>Admin Profile</h4>
                  </div>
                  <table class="table table-bordered">
                    <tr>
                        <th>Photo</th>
                        <td>{{auth()->user()->photo}}</td>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <td>{{auth()->user()->name}}</td>
                        </tr>
                      <tr>
                        <th>Email</th>
                        <td>{{auth()->user()->email}}</td>
                    </tr>
                    
                    <tr>
                        <th>Address</th>
                        <td>{{auth()->user()->address}}</td>
                    </tr>
                <tr>
                        <th>Gender</th>
                        <td>{{auth()->user()->gender}}</td>
                     </tr>
                  </table>
              </div>
          </div>
      </div>     

  </div>
@endsection
