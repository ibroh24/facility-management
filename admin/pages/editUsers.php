<?php include "includes/header.php"; ?>
<?php if (isset($_GET['editUser'])) {
    $userID = $_GET['editUser'];
    $qry = "SELECT * FROM users WHERE userid = '$userID'";
    $result = mysqli_query($dbConnect, $qry);
    if (generalErrorCheck($dbConnect, $result));
    else {
        while ($row = mysqli_fetch_assoc($result)) {
            $firstname = $row['firstname'];
            $lastname = $row['lastname'];
            $username = $row['username'];
            $password = $row['password'];
            $userid = $row['userid'];
            $email = $row['email'];
            $usertype = $row['usertype'];
        }
    }
}

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
                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="dashboard.php" aria-expanded="false"><i class="fas fa-clipboard-list"></i><span class="hide-menu">Dashboard</span></a></li>
                    <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark active"><i class="fas fa-warehouse"></i><span class="hide-menu"> Facilities Management </span></a>
                        <ul aria-expanded="false" class="collapse  first-level">
                            <li class="sidebar-item"><a href="facilitysetup.php" class="sidebar-link"><i class="mdi mdi-settings"></i><span class="hide-menu"> Facility Setup </span></a></li>
                            <li class="sidebar-item"><a href="viewfacility.php" class="sidebar-link"><i class="mdi mdi-bug"></i><span class="hide-menu"> View All Facilities </span></a></li>
                        </ul>
                    </li>
                    <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"><i class="fas fa-cogs"></i><span class="hide-menu"> Facilities Maintenance </span></a>
                        <ul aria-expanded="false" class="collapse  first-level">
                            <li class="sidebar-item"><a href="addissues.php" class="sidebar-link"><i class="mdi mdi-bug"></i><span class="hide-menu"> Add Issues </span></a></li>
                            <!-- <li class="sidebar-item"><a href="viewVehicle.php" class="sidebar-link"><i class="mdi mdi-bug"></i><span class="hide-menu"> View Expired Facilities </span></a></li> -->
                            <li class="sidebar-item"><a href="serviceentry.php" class="sidebar-link"><i class="mdi mdi-settings"></i><span class="hide-menu"> Service Entry </span></a></li>
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
                    <h4 class="page-title">Update <?php echo $firstname; ?>'s Profile</h4>
                    <div class="ml-auto text-right">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><?php echo $firstname; ?>'s Profile</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Edit Profile</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <!-- Column -->
                <div class="col-md-12">
                    <div class="card">
                        <form class="form-group" method="post">
                            <div class="card-body">
                                <h4 style="background-color: rgb(3, 169, 243); height:50px; padding-top: 20px; padding-left: 10px; color: rgb(255, 255, 255);"><?php echo $firstname; ?>'s Information</h4>
                                <div class="border-top">
                                    <br>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="fname" class="control-label"><b>First Name</b></label>
                                            <input type="text" class="form-control" value="<?php echo $firstname; ?>" name="firstname" id="itemname" placeholder="Update First Name">
                                        </div>

                                        <div class="col-md-6">
                                            <label class="control-label"><b>User Type</b></label>
                                            <select class="form-control custom-select" value="<?php echo $usertype; ?>" name="usertype" style="width: 100%; height:36px;">

                                                <option value="<?php echo $usertype; ?>"><?php echo $usertype; ?></option>  

                                                <?php $query = "SELECT * FROM `usertypesetup`"; ?>

                                            <?php $result = mysqli_query($dbConnect, $query);
                                            if(generalErrorCheck($dbConnect, $result));
                                            else
                                                while($row = mysqli_fetch_assoc($result))
                                                { $usertype = $row['usertype'];
                                                  echo "<option value='$usertype'>{$usertype}</option>";
                                                }
                                            ?>     
                                            </select>
                                        </div>


                                        <div class="col-md-6">
                                            <label for="lname" class="control-label col-form-label"><b>Last Name</b></label>
                                            <input type="text" class="form-control" value="<?php echo $lastname; ?>" name="lastname" id="lname" placeholder="Update Last Name">
                                        </div>


                                        <div class="col-md-6">
                                            <label for="lname" class="control-label col-form-label"><b>Username</b></label>
                                            <input type="text" class="form-control" value="<?php echo $username; ?>" name="username" id="lname" placeholder="Update Username">

                                        </div>

                                        <div class="col-md-6">
                                            <label for="lname" class="control-label col-form-label"><b>Password</b></label>
                                            <input type="password" class="form-control" value="<?php echo $password; ?>" name="password" id="lname" placeholder="Update Password">
                                        </div>

                                        <div class="col-md-6">
                                            <label for="lname" class="control-label col-form-label"><b>Email</b></label>
                                            <input type="email" class="form-control" value="<?php echo $email; ?>" name="email" id="lname" placeholder="Update Email">
                                        </div>

                                    </div>
                                </div>
                                <br><br>
                                <div class="border-top">
                                    <div class="card-body">
                                        <b><input type="submit" style="background-color: rgb(3, 169, 243); font-weight: bold; font-size: 16px; color: rgb(255, 255, 255);" class="btn btn-block" name="updateuser" value="Update <?php echo $firstname; ?>'s Data"></b>
                                    </div>
                                </div>
                                <?php updateUserProfile($dbConnect); ?>

                                </div>
                            </div>
                    </div>

                </div>
            </div>
           
            </form>
        </div>
    </div>

</div>

<?php include "includes/footer.php"; ?>