<?php include "includes/header.php"; ?>

<?php

function servicePersonnel($dbConnect)
{
    $qry = "SELECT * FROM issues";
    $res = mysqli_query($dbConnect, $qry);

    if (generalErrorCheck($dbConnect, $res));
    else {
        while ($row = mysqli_fetch_assoc($res)) {
            $repairername = $row['repairername'];
            $repairernumber = $row['repairernumber'];
            $repaireraddress = $row['repaireraddress'];
            ?>
            <tr>
                <td><?php echo $repairername; ?></td>
                <td><?php echo $repairernumber; ?></td>
                <td><?php echo $repaireraddress; ?></td>
            </tr>
            <?php 
        } 
    } 
}
?>


<div class="container-fluid">
    <div class="row">
        <!-- Column -->
        <div class="col-md-12">
            <div class="card">
                <form class="form-group">
                    <div class="card-body">
                        <h4 class="card-title">Service Personnel Report</h4>
                        <div class="border-top">
                            <br>
                            <div class="card">
                                <!-- <div class="card-body"> -->
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped">
                                        <thead style="background-color:dodgerblue; font-weight: bold; font-size: 16px;">
                                            <tr>
                                                <th><b>Repairer Name</b></th>
                                                <th><b>Repairer Number</b></th>
                                                <th><b>Repairer Address</b></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php servicePersonnel($dbConnect); ?>
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