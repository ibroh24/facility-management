<?php include "includes/header.php"; ?>


<?php

$qry = "SELECT repairername FROM issues";
$res = mysqli_query($dbConnect, $qry);
// print_r($res);
$repairer = mysqli_num_rows($res);



?>


<div id="main-wrapper">
    <header class="topbar" data-navbarbg="skin5">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
            <div class="navbar-header" data-logobg="skin5">
                <!-- This is for the sidebar toggle which is visible on mobile only -->
                <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>

                <!-- Logo -->

                <a class="navbar-brand" href="index.html">
                    <!-- Logo icon -->
                    <b class="logo-icon p-l-10">
                        <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                        <!-- Dark Logo icon -->
                        <img src="../../assets/images/facility.png" alt="homepage" class="light-logo" />

                    </b>
                    <!--End Logo icon -->
                    <!-- Logo text -->
                    <!-- <span class="logo-text"> -->
                    <!-- dark Logo text -->
                    <!-- <img src="../../assets/images/logo-text.png" alt="homepage" class="light-logo" /> -->

                    <!-- </span> -->
                    <!-- Logo icon -->
                    <!-- <b class="logo-icon"> -->
                    <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                    <!-- Dark Logo icon -->
                    <!-- <img src="../../assets/images/logo-text.png" alt="homepage" class="light-logo" /> -->

                    <!-- </b> -->
                    <!--End Logo icon -->
                </a>
                <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
            </div>

            <!-- End Logo -->
            <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                <!-- toggle and nav items -->
                <ul class="navbar-nav float-left mr-auto">
                    <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                    <!-- Search -->
                    <li class="nav-item search-box"> <a class="nav-link waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>
                        <form class="app-search position-absolute">
                            <input type="text" class="form-control" placeholder="Search &amp; enter"> <a class="srh-btn"><i class="ti-close"></i></a>
                        </form>
                    </li>
                </ul>
                <!-- Right side toggle and nav items -->
                <ul class="navbar-nav float-right">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../../assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31"></a>
                        <div class="dropdown-menu dropdown-menu-right user-dd animated">
                            <!-- <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user m-r-5 m-l-5"></i> My Profile</a> -->
                            <a class="dropdown-item" href="index.php"><i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                            <div class="dropdown-divider"></div>
                            <div class="p-l-30 p-10"><a href="javascript:void(0)" class="btn btn-sm btn-success btn-rounded">View Profile</a></div>
                        </div>
                    </li>

                </ul>
            </div>
        </nav>
    </header>

    <aside class="left-sidebar" data-sidebarbg="skin5">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
                <ul id="sidebarnav" class="p-t-30">
                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link active" href="dashboard.php" aria-expanded="false"><i class="fas fa-clipboard-list"></i><span class="hide-menu">Dashboard</span></a></li>
                    <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"><i class="fas fa-warehouse"></i><span class="hide-menu"> Facilities Management </span></a>
                        <ul aria-expanded="false" class="collapse  first-level">
                            <li class="sidebar-item"><a href="facilitysetup.php" class="sidebar-link"><i class="mdi mdi-settings"></i><span class="hide-menu"> Facility Setup </span></a></li>
                            <li class="sidebar-item"><a href="viewfacility.php" class="sidebar-link"><i class="mdi mdi-bug"></i><span class="hide-menu"> View All Facilities </span></a></li>
                        </ul>
                    </li>
                    <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"><i class="fas fa-cogs"></i><span class="hide-menu"> Facilities Maintenance </span></a>
                        <ul aria-expanded="false" class="collapse  first-level">
                            <li class="sidebar-item"><a href="addissues.php" class="sidebar-link"><i class="mdi mdi-bug"></i><span class="hide-menu"> Add Issues </span></a></li>
                            <li class="sidebar-item"><a href="serviceentry.php" class="sidebar-link"><i class="mdi mdi-settings"></i><span class="hide-menu"> Service Entry </span></a></li>
                            <li class="sidebar-item"><a href="dueserviceitems.php" class="sidebar-link"><i class="mdi mdi-settings"></i><span class="hide-menu"> Item Due to Service Today</span></a></li>
                        </ul>
                    </li>
                    <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"><i class="fas fa-user-circle"></i><span class="hide-menu">Users </span></a>
                        <ul aria-expanded="false" class="collapse  first-level">
                            <li class="sidebar-item"><a href="addUsers.php" class="sidebar-link"><i class="mdi mdi-account-plus"></i><span class="hide-menu"> Add Users </span></a></li>
                            <li class="sidebar-item"><a href="manageUsers.php" class="sidebar-link"><i class="fas fa-users"></i><span class="hide-menu"> Manage Users </span></a></li>
                        </ul>
                    </li>
                    <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"><i class="fas fa-database"></i><span class="hide-menu">Reports </span></a>
                        <ul aria-expanded="false" class="collapse  first-level">
                            <!-- <li class="sidebar-item"><a href="addUsers.php" class="sidebar-link"><i class="fas fa-chart-area"></i><span class="hide-menu"> Vehicle Report </span></a></li> -->
                            <li class="sidebar-item"><a href="report_user.php" target="_blank" class="sidebar-link"><i class="fas fa-chart-bar"></i><span class="hide-menu"> All User Report</span></a></li>
                            <li class="sidebar-item"><a href="report_item.php" target="_blank" class="sidebar-link"><i class="fas fa-chart-pie"></i><span class="hide-menu"> All Item Report</span></a></li>
                            <!-- <li class="sidebar-item"><a href="report_issues.php" class="sidebar-link"><i class="fas fa-chart-pie"></i><span class="hide-menu"> All Issues Report </span></a></li> -->
                            <li class="sidebar-item"><a href="report_service.php" target="_blank" class="sidebar-link"><i class="fas fa-history"></i><span class="hide-menu"> Service History </span></a></li>
                            <li class="sidebar-item"><a href="report_repair.php" target="_blank" class="sidebar-link"><i class="mdi mdi-bug"></i><span class="hide-menu"> Repairable Item Reports </span></a></li>
                            <li class="sidebar-item"><a href="report_nonrepair.php" target="_blank" class="sidebar-link"><i class="fas fa-trash-alt"></i><span class="hide-menu"> Non-Repairable Item Reports </span></a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>

    <div class="page-wrapper">
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Dashboard</h4>
                    <div class="ml-auto text-right">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-md-flex align-items-center" style="background-color: rgb(3, 169, 243); height:50px; padding-top: 20px; padding-left: 10px; margin-bottom: 10px; color: rgb(255, 255, 255);">
                            <div>
                                <!-- <h4 class="card-title">Dashboard</h4> -->
                                <b>
                                    <h4 class="card-subtitle" style="color:blanchedalmond;">Overview of Latest Users, Items and Issues</h4>
                                </b>
                            </div>
                        </div>
                        <div class="row">
                            <div class="container-fluid" style="padding-top:50px; padding-left:250px; padding-right: 50px;">
                                <div class="col-lg-9">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="bg-success p-40 text-white text-center">
                                                <h3 class="fas fa-users m-b-15 font-30"></h3>
                                                <h5 class="m-b-0 m-t-5"><?php baseTotalCount($dbConnect, 'users'); ?></h5>
                                                <br>
                                                <h4 class="font-light"><a href="manageUsers.php" class="text-white">Total Users</a></h4>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="bg-warning p-25 text-white text-center">
                                                <h3 class="mdi mdi-bug m-b-15 font-30"></h3>
                                                <h5 class="m-b-0 m-t-5"><?php baseTotalCount($dbConnect, 'issues'); ?></h5>
                                                <br>
                                                <h4 class="font-light"><a href="serviceentry.php" class="text-white" ><b>Total Faulty Reported</b></a></h4>
                                                <p class="font-light"></p>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                        <div class="bg-secondary p-40 text-white text-center">
                                                <h3 class="fas fa-warehouse m-b-15 font-30"></h3>
                                                <h5 class="m-b-0 m-t-5"><?php baseTotalCount($dbConnect, 'itemsetup'); ?></h5>
                                                <br>
                                                <h4 class="font-light"><a href="viewfacility.php" class="text-white">Total Item</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br><br>
                                <div class="col-lg-9">
                                    <div class="row">
                                    <div class="col-md-4">
                                            <div class="bg-danger p-25 text-white text-center">
                                                <h3 class="fas fa-trash-alt m-b-15 font-30"></h3>
                                                <h5 class="m-b-0 m-t-5"><?php baseTotalCount($dbConnect, 'issues', 'false'); ?></h5>
                                                <br>
                                                <h4 class="font-light"><a href="serviceentry.php" class="text-white" >Non-Repairable Faulty Items</a></h4>
                                                <p class="font-light"></p>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="bg-success p-25 text-white text-center">
                                                <h3 class="mdi mdi-bug m-b-15 font-30"></h3>
                                                <h5 class="m-b-0 m-t-5"><?php baseTotalCount($dbConnect, 'issues', 'true'); ?></h5>
                                                <br>
                                                <h4 class="font-light"><a href="serviceentry.php" class="text-white" >Repairable Faulty Items</a></h4>
                                                <p class="font-light"></p>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                        <div class="bg-warning p-30 text-white text-center">
                                                <h3 class="mdi mdi-settings m-b-15 font-25"></h3>
                                                <h5 class="m-b-0 m-t-5"><?php totalServiceDateCount($dbConnect, 'issues'); ?></h5>
                                                <br>
                                                <h4 class="font-dark" style="background-color:white;"><a href="dueserviceitems.php" class="text-danger"><b>Total Item(s) Due for Service Today</b></a></h4>
                                                <!-- <p class="font-light"></p> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- column -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- </div>
    </div>
</div> -->

<!-- for histogram -->

            <?php include "includes/footer.php"; ?>