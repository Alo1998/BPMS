<nav class="navbar navbar-expand navbar-dark" style="background:  #8854d0">
    <a class="sidebar-toggle mr-3" href="#"><i class="fa fa-bars"></i></a>
    <a class="navbar-brand" href="#"><strong>Beauty Parlour Management System</strong></a>   

    <div class="navbar-collapse collapse">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-bell"></i> 3</a></li>
            <li class="nav-item dropdown">
                <a href="#" id="dd_user" class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {{auth()->user()->name}}
                <img src="{{asset('/'.auth()->user()->photo)}}" style="height: 30px; width: 30px; border-radius: 50%;" alt="">
                </a>
                
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd_user">
                    <a href="{{route('adminprofile')}}" class="dropdown-item">Profile</a>
                    <a href="{{route('adminlogout')}}" class="dropdown-item">Logout</a>
                </div>
            </li>
        </ul>
    </div>
</nav>