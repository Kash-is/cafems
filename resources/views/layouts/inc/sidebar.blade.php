<ul class="navbar-nav bg-gradient-transparent sidebar " id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <h7>
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-2">
                    <img src="{{asset('assets/images/Delian-8.png')}}" rel="logo" width="40px"></img>
                </div>
                <div class="sidebar-brand-text mx-3">Delian</div>
            </a>
            </h7>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-bag-shopping"></i>
                    <span>Order</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Orders:</h6>
                        <a class="collapse-item" href="buttons.html">Order List</a>
                        <a class="collapse-item" href="cards.html">Order Details</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fa-sharp fa-solid fa-bell-concierge"></i>
                    <span>Kitchen</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Kitchen:</h6>
                        <a class="collapse-item" href="utilities-color.html">KOT</a>
                        <a class="collapse-item" href="utilities-border.html">Inventory</a>
                        
                    </div>
                </div>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Staff</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Staff:</h6>
                        <a class="collapse-item" href="login.html">Staff Details</a>
                        <a class="collapse-item" href="register.html">Add Staff</a>                      
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseReserve"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-book"></i>
                    <span>Booking</span>
                </a>
                <div id="collapseReserve" class="collapse" aria-labelledby="headingReserve" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h5 class="collapse-header">Booking:</h5>
                        <a class="collapse-item" href="login.html">Table Reservation</a>
                                            
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCustomer"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-book"></i>
                    <span>Customers</span>
                </a>
                <div id="collapseCustomer" class="collapse" aria-labelledby="headingCustomer" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h5 class="collapse-header">Customers:</h5>
                        <a class="collapse-item" href="{{url('admin/addCustomer')}}">Add Customer</a>
                        <a class="collapse-item" href="{{url('admin/customer')}}">View Customer</a>
                                            
                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="{{url('menu')}}
                ">
                    <i class="fa-solid fa-burger"></i>
                    <span>Menu</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-wallet"></i>
                    <span>Billing</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>


        </ul>