<?php include "includes/header.php"; ?>

<div class="container-fluid">
    <div class="row">
        <!-- Column -->
        <div class="col-md-12">
            <div class="card">
                <form class="form-group">
                    <div class="card-body">
                        <h4 class="card-title">User's Report</h4>
                        <div class="border-top">
                            <br>
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover table-striped">
                                            <thead style="background-color:dodgerblue; font-weight: bold; font-size: 16px;">
                                                <tr>
                                                    <th><b>First Name</b></th>
                                                    <th><b>Last Name</b></th>
                                                    <th><b>Username</b></th>
                                                    <th><b>Email</b></th>
                                                    <th><b>User Type</b></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php baseReportFunction($dbConnect, "users"); ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <br>
                                    <div>
                                        <!-- <button style="background-color: rgb(3, 169, 243); color: rgb(255, 255, 255); font-weight: bold; font-size: 16px; margin-top: 20px;"> -->
                                        <a onclick="print()" style="background-color: rgb(3, 169, 243); color: rgb(255, 255, 255); font-weight: bold; font-size: 16px;" class="btn" href="facilitysetup.php">Print Report</a>
                                        <!-- </button> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>

    <?php include "includes/footer.php"; ?>