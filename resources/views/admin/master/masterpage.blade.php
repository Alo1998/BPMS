<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{asset('admin/assets')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('admin/assets')}}/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="{{asset('admin/assets')}}/css/bootadmin.min.css">

    <title>BPMS | AdminDashboard</title>
    <style>
        .sidebar ul li a {
    font-size: 17px;
    font-weight: 500;}
    .fa{padding: 5px;}
    .fas{padding: 5px;}
    </style>
</head>
<body class="bg-light">
@include('admin.layouts.navbar')


<div class="d-flex">
   @include('admin.layouts.sidebar')
    <div class="content p-4">
        @yield('content')
    </div>
</div>
@include('admin.layouts.footer')
<script src="{{asset('admin/assets')}}/js/jquery.min.js"></script>
<script src="{{asset('admin/assets')}}/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('admin/assets')}}/js/bootadmin.min.js"></script>

</body>
</html>



