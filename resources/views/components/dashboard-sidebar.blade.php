<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard.index') }}">
        <div class="sidebar-brand-icon">
            <img src="{{ asset('frontend/images/logo22.png')}}">
        </div>
        {{-- <div class="sidebar-brand-text mx-3 text-primary lead">Payment Tracker</div> --}}
    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Features
    </div>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
            aria-expanded="true" aria-controls="collapseBootstrap">
            <i class="far fa-fw fa-window-maximize"></i>
            <span>Bill Payments</span>
        </a>
        <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner">
                <h6 class="collapse-header">Bill Payment Operations </h6>
                <a class="collapse-item" href="{{ route('bill.create') }}">Add New Bill to Track</a>
                <a class="collapse-item" href="#">All Bills</a>
                <a class="collapse-item" href="#">Paid Bills</a>
                <a class="collapse-item" href="#">Unpaid Bills</a>
                <a class="collapse-item" href="#">Mark Bill As Paid</a>

            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseForm" aria-expanded="true"
            aria-controls="collapseForm">
            <i class="fab fa-fw fa-wpforms"></i>
            <span>Vendors</span>
        </a>
        <div id="collapseForm" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Vendors Records</h6>
                <a class="collapse-item" href="form_basics.html">All Vendors</a>
                <a class="collapse-item" href="form_advanceds.html">Active Vendors</a>
                <a class="collapse-item" href="form_advanceds.html">Inactive Vendors</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable" aria-expanded="true"
            aria-controls="collapseTable">
            <i class="fas fa-fw fa-table"></i>
            <span>Vehicle & Documents</span>
        </a>
        <div id="collapseTable" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Vehicle Documents</h6>
                <a class="collapse-item" href="{{ route('vehicle.create') }}">Add Vehicle</a>
                <a class="collapse-item" href="#">Add Document</a>
                <a class="collapse-item" href="{{ route('vehicle.index') }}">Vehicles</a>
                <a class="collapse-item" href="#">Documents</a>
                <a class="collapse-item" href="#">Expiration Dashboard</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-palette"></i>
            <span>Document Expiration</span>
        </a>
    </li>
    <hr class="sidebar-divider my2">
    <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePage" aria-expanded="true"
            aria-controls="collapsePage">
            <i class="fas fa-fw fa-columns"></i>
            <span>Users Management</span>
        </a>
        <div id="collapsePage" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Manage Users</h6>
                <a class="collapse-item" href="#">User's Records</a>
                <a class="collapse-item" href="#">Inactive Users</a>
                <a class="collapse-item" href="#">Roles</a>
                <a class="collapse-item" href="#">Permission</a>
                <a class="collapse-item" href="#">User Role</a>
                <a class="collapse-item" href="#">User Permissions</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-university"></i>
            <span>Company</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Departments</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Banks List</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Charts</span>
        </a>
    </li>
    {{--
    <hr class="sidebar-divider">
    <div class="version" id="version-ruangadmin"></div> --}}
</ul>
