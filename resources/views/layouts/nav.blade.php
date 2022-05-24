<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
{{-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> --}}
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css
">
<style>

  .my-card
  {
      position:absolute;
      left:40%;
      top:-20px;
      border-radius:50%;
  }
  
  
  a:hover {
      background-color:brown !important;
      color: white !important;
  }
  @media (min-width: 991.98px) {
    main {
      padding-left: 240px;
    }
  }
  
  /* Sidebar */
  .sidebar {
    position: fixed;
    top: 0;
    bottom: 0;
    left: 0;
    padding: 58px 0 0; /* Height of navbar */
    box-shadow: 0 2px 5px 0 rgb(0 0 0 / 5%), 0 2px 10px 0 rgb(0 0 0 / 5%);
    width: 240px;
    z-index: 600;
  }
  
  @media (max-width: 991.98px) {
    .sidebar {
      width: 100%;
    }
  }
  .sidebar .active {
    border-radius: 5px;
    box-shadow: 0 2px 5px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 / 12%);
    background-color: yellowgreen;
    color: #000;
  
  }
  
  .sidebar-sticky {
    position: relative;
    top: 0;
    height: calc(100vh - 48px);
    padding-top: 0.5rem;
    overflow-x: hidden;
    overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
  }
  </style>
<!--Main Navigation-->
<header>
    <!-- Sidebar -->
    <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse " style="background-color: aqua">
      <div class="position-sticky">
        <div class="list-group list-group-flush mx-3 mt-4">
            {{-- <a href="#" class="list-group-item list-group-item-action py-2 ripple">
                <img src="{{ asset('img/logo_dark.png') }}" class="navbar-logo pt-3" alt="logo"
                style="height: 75px;width:240px;margin-left: -36px;margin-top: -111px;">
              </a> --}}
          {{-- <a
            href="#"
            class="list-group-item list-group-item-action py-2 ripple"
            aria-current="true"
          >
           --}}
           <img src="{{ asset('img/logo_dark.png') }}" class="navbar-logo pt-3" alt="logo"
           style="height: 75px;width:240px;margin-left: -36px;margin-top: -190px;">
            <h5 class="py-2 ripple  list-group-item bg-success mt-5">Dashboards</h5>
          </a>
          {{-- <a href="#" class="list-group-item list-group-item-action py-2 ripple ">
            <i class="fas fa-chart-area fa-fw me-3"></i><span>Webiste traffic</span>
          </a> --}}
          <a href="{{ route('role.index') }}" class="list-group-item list-group-item-action py-2 ripple {{ request()->routeIs('role.*') ? 'active' : '' }}"
            ><i class="fa-brands fa-critical-role"></i><span>Roles</span></a
          >
         
          <a href="{{ route('permission.index') }}" class="list-group-item list-group-item-action py-2 ripple {{ request()->routeIs('permission.*') ? 'active' : '' }}"
            ><i class="fas fa-chart-line fa-fw me-3"></i><span>Permission</span></a
          >
          <h5 class="py-2 ripple  list-group-item bg-warning">Users</h5>
          <a href="{{ route('admin.index') }}" class="list-group-item list-group-item-action py-2 ripple {{ request()->routeIs('admin.*') ? 'active' : '' }} ">
            <i class="fas fa-chart-pie fa-fw me-3"></i><span>Admin User</span>
          </a>
          <a href="{{ route('employee.index') }}" class="list-group-item list-group-item-action py-2 ripple menu  {{ request()->routeIs('employee.*') ? 'active' : '' }}"
            ><i class="fas fa-chart-bar fa-fw me-3"></i><span>Employee User</span></a
          >
          <a href="{{ route('customer.index') }}" class="list-group-item list-group-item-action py-2 ripple  {{ request()->routeIs('customer.*') ? 'active' : '' }} "
            ><i class="fa-brands fa-critical-role"></i><span>Customer User</span></a
          >

          <a href="{{ route('move-customer') }}" class="list-group-item list-group-item-action py-2 ripple  {{ request()->routeIs('move-customer') ? 'active' : '' }} "
            ><i class="fa-brands fa-critical-role"></i><span> Move Customer</span></a>
          <h5 class="py-2 ripple  list-group-item bg-warning">Employee Task</h5>
          <a href="#" class="list-group-item list-group-item-action py-2 ripple"
            ><i class="fa-brands fa-critical-role"></i><span>My Task</span></a
          >
          <a href="{{ route('all-tasks') }}" class="list-group-item list-group-item-action py-2 ripple {{ request()->routeIs('all-tasks') ? 'active' : '' }} "
            ><i class="fa-brands fa-critical-role"></i><span>All Assigned Task</span></a
          >
          <a href="{{ route('tasks.index') }}" class="list-group-item list-group-item-action py-2 ripple"
            ><i class="fa-brands fa-critical-role"></i><span>Manage Task</span></a
          >
          <a href="{{ route('assign-tasks') }}" class="list-group-item list-group-item-action py-2 ripple {{ request()->routeIs('assign-tasks') ? 'active' : '' }} "
            ><i class="fa-brands fa-critical-role"></i><span>Assign Task</span></a
          >
          <h5 class="py-2 ripple  list-group-item bg-warning">CATEGORY</h5>
          <a href="{{ route('category.index') }}" class="list-group-item list-group-item-action py-2 ripple {{ request()->routeIs('category.*') ? 'active' : '' }} "
            ><i class="fa-brands fa-critical-role"></i><span>Manage Category</span></a>

          <h5 class="py-2 ripple  list-group-item bg-warning">PACKAGES</h5>
          <a href="{{ route('package.index') }}" class="list-group-item list-group-item-action py-2 ripple {{ request()->routeIs('package.*') ? 'active' : '' }} "
            ><i class="fa-brands fa-critical-role"></i><span>Manage Packages</span></a>
        </div>
      </div>
    </nav>
    <!-- Sidebar -->
  
 
  </header>
  <!--Main Navigation-->
  
