@extends('admin.master.masterpage')
@section('content')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item active" aria-current="page"><i class="fa fa-user-plus"></i> B/W Dates</li>
        </ol>
      </nav>
      <div class="row">
          <div class="col-md-12">
              <div class="card">
                  <div class="card-header">
                      <h4>Between Dates Reports</h4>
                  </div>
                  <div class="card-body">
                      <form action="from" method="POST">
                          @csrf
                        <div class="form group">
                            <label for="">From Date</label>
                            <input type="date" name="date" class="form-control" placeholder="dd/mm/yy" id="from">
                        </div>
                        <div class="form group">
                            <label for="to">To Date</label>
                            <input type="date" name="date" class="form-control" placeholder="dd/mm/yy" id="to">
                        </div><br>
                        <div class="form-group">
                            <label for="">Request type</label>
                            <input type="radio" value="month wise" name="request type">Month wise
                            <input type="radio" value="year wise" name="request type">Year wise
                        </div>
                        <div>
                            <input type="submit" name="submit" value="submit" class="btn btn-success">
                        </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection