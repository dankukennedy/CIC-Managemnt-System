
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
           <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php base_url('home.php') ?>">
                <div class="sidebar-brand-icon rotate-n-15">
                   <!-- <i class="fas fa-laptop"></i>-->
                     <img src="img/logo.png" alt="" width="90" height="60">
                </div>
                <div class="sidebar-brand-text mx-3">lite<sup> R</sup></div>
            </a>

        
            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?php base_url('home.php') ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Manager Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-book"></i>
                    <span>Records</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header"> CIC Vitals:</h6>
                        <a class="collapse-item" href="<?php base_url('reports.php') ?>">Reports </a>
                        <a class="collapse-item" href="<?php base_url('train.php') ?>">Training</a>
                        <a class="collapse-item" href="<?php base_url('activity.php') ?>">Activity</a>
                        <a class="collapse-item" href="<?php base_url('inventory.php') ?>">Inventory</a>
                    </div>
                </div>
            </li>



            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Settings</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Profile Settings:</h6>
                        <a class="collapse-item"  href="<?php base_url('profile.php') ?>">Profile</a>
                        <a class="collapse-item"  href="<?php base_url('settings.php') ?>">Settings</a>
                    </div>
                </div>
            </li>


                        <!-- Nav Item - Utilities Collapse Menu -->
                        <li class="nav-item">
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities1"
                                aria-expanded="true" aria-controls="collapseUtilities1">
                                <i class="fas fa-fw fa-rocket"></i>
                                <span>Services</span>
                            </a>
                            <div id="collapseUtilities1" class="collapse" aria-labelledby="headingUtilities"
                                data-parent="#accordionSidebar">
                                <div class="bg-white py-2 collapse-inner rounded">
                                    <h6 class="collapse-header">Lab Usage:</h6>
                                   <!-- <a class="collapse-item" href="utilities-color.html">Secretariet services</a>
                                    <a class="collapse-item" href="utilities-animation.html">Bills</a> -->                                   
                                    <a class="collapse-item" href="#">Event</a>
                                    <a class="collapse-item" href="#">About CIC</a>
                                </div>
                            </div>
                        </li>


            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Vitals & Reports
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Accounts</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Details:</h6>
                        <a class="collapse-item" href="<?= base_url('profile.php')?>">Profile</a>
                        <a class="collapse-item" href="<?= base_url('changePassword.php')?>">Change Password</a>
                       
                       <!-- <a class="collapse-item" href="forgot-password.html">Forgot Password</a>-->
                       <!-- <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Vitals Pages:</h6>
                        <a class="collapse-item" href="#">Reports</a>
                        <a class="collapse-item" href="#">List Of All CICs</a>-->
                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->
          <!--  <li class="nav-item">
                <a class="nav-link" href="<?= base_url('charts.php')?>">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Charts</span></a>
            </li>-->

            <!-- Nav Item - Tables -->
           <!-- <li class="nav-item">
                <a class="nav-link" href="<?= base_url('tables.php')?>">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
            </li>-->

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            <div class="sidebar-card d-none d-lg-flex">
            <!--    <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
                <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>-->
              <!--  <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>-->
            </div>


        </ul>
        <!-- End of Sidebar -->
