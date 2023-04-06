<ul class="navbar-nav bg-gradient-transparent sidebar " id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <h7>
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-2">
                    <img src="{{asset('assets/images/Delian-8.png')}}" rel="logo" width="40px">
                </div>
                <div class="sidebar-brand-text mx-3">Delian</div>
            </a>
            </h7>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item  {{Request::is('admin/dashboard') ? 'active':' '}}">
                <a class="nav-link" href="{{url('admin/dashboard')}}">
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
                        <a class="collapse-item" href="{{url('admin/order')}}">Order Details</a>
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
                        <a class="collapse-item" href="{{url('admin/kitchen')}}">KOT</a>
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
                        <a class="collapse-item" href="{{url('admin/staff')}}">Staff Details</a>
                        <a class="collapse-item" href="{{url('admin/addStaff')}}">Add Staff</a>
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
                        <a class="collapse-item" href="{{url('admin/addBooking')}}">Table Booking</a>
                        <a class="collapse-item" href="{{url('admin/booking')}}">Booking Details</a>

                    </div>
                </div>
            </li>

            <li class="nav-item {{Request::is('admin/customer') || Request::is('admin/addCustomer') || Request::is('admin/editCustomer') ? ' active':'collapsed'}}">
                <a class="nav-link " href="#" data-toggle="collapse" data-target="#collapseCustomer"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fa-solid fa-people-group"></i>
                    <span>Customers</span>
                </a>
                <div id="collapseCustomer" class=" collapsed collapse {{Request::is('admin/customer') || Request::is('admin/addCustomer') || Request::is('admin/editCustomer') ? 'show': null}}" aria-labelledby="headingCustomer" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h5 class="collapse-header">Customers:</h5>
                        <a class="collapse-item {{Request::is('admin/addCustomer') ? 'active':' '}}" href="{{url('admin/addCustomer')}}">Add Customer</a>
                        <a class="collapse-item {{Request::is('admin/customer')|| Request::is('admin/editCustomer/*') ? 'active':' '}}" href="{{url('admin/customer')}}">View Customer</a>
                    </div>
                </div>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="{{url('admin/table')}}">
                    <i class="fa-solid fa-table-list"></i>
                    <span>Table</span>
                </a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-wallet"></i>
                    <span>Billing</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCategory"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fa-solid fa-tags"></i>
                    <span>Category</span>
                </a>
                <div id="collapseCategory" class="collapse" aria-labelledby="headingReserve" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h5 class="collapse-header">Product:</h5>
                        <a class="collapse-item" href="{{route('category.create')}}">Add Categories</a>
                        <a class="collapse-item" href="{{url('admin/categories')}}">Categories</a>

                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProduct"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fa-solid fa-kaaba"></i>
                    <span>Product</span>
                </a>
                <div id="collapseProduct" class="collapse" aria-labelledby="headingReserve" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h5 class="collapse-header">Product:</h5>
                        <a class="collapse-item" href="{{url('admin/addProduct')}}">Add Products</a>
                        <a class="collapse-item" href="{{url('admin/product')}}">Product</a>

                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>


        </ul>
