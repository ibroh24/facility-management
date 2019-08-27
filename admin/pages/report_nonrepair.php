<?php include "includes/header.php"; ?>

<div class="container-fluid">
    <div class="row">
        <!-- Column -->
        <div class="col-md-12">
            <div class="card">
                <form class="form-group">
                    <div class="card-body">
                        <h4 class="card-title">Non Repairable Facilities</h4>
                        <div class="border-top">
                            <br>
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover table-striped">
                                            <thead style="background-color:dodgerblue; font-weight: bold; font-size: 16px;">
                                                <tr>
                                                    <th><b>Item Name</b></th>
                                                    <th><b>Fault Title</b></th>
                                                    <th><b>Propose Amount</b></th>
                                                    <th><b>Fault Date</b></th>
                                                    <th><b>Repaired Date</b></th>
                                                    <th><b>Repairer Name</b></th>
                                                    <th><b>Repairer Number</b></th>
                                                    <th><b>Reported By</b></th>
                                                    <th><b>Repairable</b></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php baseReportFunction($dbConnect, 'issues', '0'); ?>
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