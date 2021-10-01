<div class="sidebar sidebar-dark" style="background: #fd79a8;">
    <ul class="list-unstyled">
        <li><a href="{{route('admin.dashboard')}}"><i class="fa fa-home"></i><strong> Dashboard</strong></a></li>
        <li>
            <a href="#sm_expand_1" data-toggle="collapse">
                <i class="fa fa-cogs"></i><strong> Services</strong> 
            </a>
            <ul id="sm_expand_1" class="list-unstyled collapse">
                <li><a href="{{route('addservices')}}"><strong>Add Services</strong></a></li>
                <li><a href="{{route('manageservices')}}"><strong>Manage Services</strong></a></li>
            </ul>
        </li>
        <li>
            <a href="#sm_expand_3" data-toggle="collapse">
                <i class="fa fa-paper-plane"></i><strong> Appointment</strong> 
            </a>
            <ul id="sm_expand_3" class="list-unstyled collapse">
                <li><a href="{{route('allappointment')}}"><strong>All Appointment</strong></a></li>
                <li><a href="{{route('newappointment')}}"><strong>New Appointment</strong></a></li>
                <li><a href="{{route('acceptedappointment')}}"><strong>Accepted Appointment</strong></a></li>
                <li><a href="{{route('rejectedappointment')}}"><strong>Rejected Appointment</strong></a></li>
            </ul>
        </li>
        <li>
         
           
        <li><a href="{{route('addcustomer')}}"><i class="fa fa-user nav_icon"></i><strong> Add Customer</strong> </a></li>
        <li><a href="{{route('customerlist')}}"><i class="fa fa-users nav_icon"></i><strong> Customer List</strong> </a></li>
        <li><a href="{{route('invoicelist')}}"><i class="fa fa-recycle"></i><strong> Invoices</strong> </a></li>
        <li>
            <a href="#sm_expand_4" data-toggle="collapse">
                <i class="fa fa-share-alt"></i><strong> Reports</strong> 
            </a>
            <ul id="sm_expand_4" class="list-unstyled collapse">
                <li><a href="{{route('bw')}}"><strong>B/w dates</strong></a></li>
            <li><a href="{{route('salesreports')}}"><strong>Sales Reports</strong></a></li>
            </ul>
        </li>
      </ul>
    </div>