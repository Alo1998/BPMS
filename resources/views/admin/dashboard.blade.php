@extends('admin.master.masterpage')
@section('content')
<div class="col-sm-12">
    <div>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
        </ol>
         </nav>
        <div class="row">

           <div class="col-lg-4">
            <div class="card">
              <div class="card-body text-white" style="background: #e056fd;">
                <div class="row">
                  <div class="col-lg-7"><i class="fas fa-user fa-4x"></i></div>
                  <div class="col-lg-5">
                    <div><h1>{{$total_service}}</h1></div>
                    <div class="clearfix">SERVICES</div>
                  </div>
                </div>
              </div>
              <a href="#">
              <div class="card-footer">
                <span class="">Total Services</span>
                <div class="float-right"><i class="fas fa-user"></i></div>
              </div>
            </a>
            </div>
          </div>


          <div class="col-lg-4">
            <div class="card ">
              <div class="card-body text-white" style="background: #e056fd;">
                <div class="row">
                  <div class="col-lg-6"><i class="fas fa-user fa-4x"></i></div>
                  <div class="col-lg-6">
                    <div><h1>{{$apoinment}}</h1></div>
                    <div class="clearfix">APPOINTMENT</div>
                  </div>
                </div>
              </div>
              <a href="#">
              <div class="card-footer">
                <span class="">Total Appointment</span>
                <div class="float-right"><i class="fas fa-user"></i></div>
              </div>
            </a>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="card ">
              <div class="card-body text-white" style="background: #e056fd;">
                <div class="row">
                  <div class="col-lg-7"><i class="fas fa-user fa-4x"></i></div>
                  <div class="col-lg-5">
                    <div><h1>{{$customer}}</h1></div>
                    <div class="clearfix">CUSTOMER</div>
                  </div>
                </div>
              </div>
              <a href="#">
              <div class="card-footer">
                <span class="">Total Customer</span>
                <div class="float-right"><i class="fas fa-user"></i></div>
              </div>
            </a>
            </div>
          </div>
          <div class="col-lg-4 mt-4">
            <div class="card">
              <div class="card-body text-white" style="background: #e056fd;">
                <div class="row">
                  <div class="col-lg-6"><i class="fas fa-user fa-4x"></i></div>
                  <div class="col-lg-6">
                    <div><h1>10</h1></div>
                    <div class="clearfix">ACCCEPTED APPOINTMENT</div>
                  </div>
                </div>
              </div>
              <a href="#">
              <div class="card-footer">
                <span class="">Total Accepted</span>
                <div class="float-right"><i class="fas fa-user"></i></div>
              </div>
            </a>
            </div>
          </div>
          <div class="col-lg-4 mt-4">
            <div class="card">
              <div class="card-body text-white" style="background: #e056fd;">
                <div class="row">
                  <div class="col-lg-6"><i class="fas fa-user fa-4x"></i></div>
                  <div class="col-lg-6">
                    <div><h1>10</h1></div>
                    <div class="clearfix">REJECTED APPOINTMENT</div>
                  </div>
                </div>
              </div>
              <a href="#">
              <div class="card-footer">
                <span class="">Total Rejected</span>
                <div class="float-right"><i class="fas fa-user"></i></div>
              </div>
            </a>
            </div>
          </div>
        </div>
        </div>
         </div>
@endsection
