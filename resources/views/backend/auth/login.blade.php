<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Admin Login</title>
    <style>
      .back{
        background-image: url({{asset('upload/B2.jpg')}});
      }
      .shadow {
        
        box-shadow: 0px 0px 11px 5px #696969;
      }
    </style>
  </head>
  <body class="back">
    <div class="container pt-5">
      <div class="row">
        <div class="col-md-12">
          <div class="text-center mb-3">
            <h3><marquee behavior="" direction="">welcome Back to Beauty Parlour Management System</marquee></h3>
            </div>
        </div>
      </div>
        <div class="row">

          <div class="col-md-4 offset-md-4">
            @if(session('error'))
                <div class="alert alert-danger">
                  {{session('error')}}
                </div>
                @endif
                
            <div class="card shadow">
                <div class="card-header text-center" style="background: #ba92f1">
                    <h4>Log In</h4>
                </div>
                
                <div class="card-body" style="background: #fd79a8;">
                    <form action="{{route('adminsubmit')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" placeholder="email" id="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" placeholder="password" id="password" class="form-control">
                        </div>
                        <div>
                            <input type="submit" name="submit" value="Submit" class="btn btn-danger btn-block">
                        </div>
                    </form>
                </div>
            </div>
          </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>