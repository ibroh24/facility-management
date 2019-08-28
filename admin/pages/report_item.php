<?php include "includes/header.php"; ?>

<div class="container-fluid">
    <div class="row">
        <!-- Column -->
        <div class="col-md-12">
            <div class="card">
                <form class="form-group">
                    <div class="card-body">
                        <h4 class="card-title">Item's Report</h4>
                        <div class="border-top">
                            <br>
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover table-striped">
                                            <thead style="background-color:dodgerblue; font-weight: bold; font-size: 16px;">
                                                <tr>
                                                    <th><b>Item Name</b></th>
                                                    <th><b>Item Type</b></th>
                                                    <th><b>Item Number</b></th>
                                                    <th><b>Item Amount</b></th>
                                                    <th><b>Item Purchase Date</b></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php baseReportFunction($dbConnect, "itemsetup"); ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <br>
                                    <div>
                                        <!-- <button style="background-color: rgb(3, 169, 243); color: rgb(255, 255, 255); font-weight: bold; font-size: 16px; margin-top: 20px;"> -->
                                        <a onclick="print()" style="background-color: rgb(3, 169, 243); color: rgb(255, 255, 255); font-weight: bold; font-size: 16px;" id="printPdf" class="btn" href="facilitysetup.php">Print Report</a>
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