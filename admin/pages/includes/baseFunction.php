<?php
/*
    This is the base function where all request are loading from.
    All functioning menu pages requires this function.

    Created By:     Ibrahim Hammed
    Created Date:   16th August, 2019.

*/

require "dbHandler.php";

// base general db error checker
function generalErrorCheck($dbConnect, $result)
{
    if (!$result) {
        echo "Error_101: " . mysqli_error($dbConnect);
    }
}

// general function for mysql injection
function escapeString($dbConnect, $field)
{
    return mysqli_real_escape_string($dbConnect, $field);
}


function loginCheck($dbConnect)
{
    if (isset($_POST['login'])) { 
        $username = escapeString($dbConnect, $_POST['username']);
        $password = escapeString($dbConnect, $_POST['password']);
        $password = md5($password);
        if (!empty($username) && !empty($password)) {
            $script = "SELECT username, password FROM users WHERE username = '$username' AND password = '$password'";
            $runScript = mysqli_query($dbConnect, $script);
            if (generalErrorCheck($dbConnect, $runScript));
            else {
                if ($returnRows = mysqli_fetch_assoc($runScript)) {
                    $username = $returnRows['username'];
                    $_SESSION['username'] = $username;
                    $_SESSION['loginTime'] = time();

                    if ($runScript) {
                        ?>
<script>
    <?php echo ("location.href = 'dashboard.php';"); ?>
</script>
<?php } else {
                        ?>
<script>
    alert("username or password is incorrect!");
    <?php echo ("location.href = 'index.php';"); ?>
</script>
<?php
                        // header("Location: ..index.php");
                    }
                }
            }
        }
    }
}

function insertData($dbConnect)
{
    if (isset($_POST['items'])) {
        $itemname = escapeString($dbConnect, $_POST['itemname']);
        $itemtype = escapeString($dbConnect, $_POST['itemtype']);
        $itemmodel = escapeString($dbConnect, $_POST['itemmodel']);
        $itemamount = escapeString($dbConnect, $_POST['itemamount']);
        $itemnumber = escapeString($dbConnect, $_POST['itemnumber']);
        $itemrecieptnumber = escapeString($dbConnect, $_POST['itemrecieptnumber']);
        $itemchasisnumber = escapeString($dbConnect, $_POST['itemchasisnumber']);
        $itemenginenumber = escapeString($dbConnect, $_POST['itemenginenumber']);
        $itempurchasedate = escapeString($dbConnect, $_POST['itempurchasedate']);

        // $itempurchasedate = date_format($itempurchasedate, "dd/mm/yy");
      


        $inputField = array(
            'itemname' => $itemname,
            'itemtype' => $itemtype,
            'itemmodel' => $itemmodel,
            'itemamount' => $itemamount,
            'itemnumber' => $itemnumber,
            'itemrecieptnumber' => $itemrecieptnumber,
            'itemchasisnumber' => $itemchasisnumber,
            'itemenginenumber' => $itemenginenumber,
            'itempurchasedate' => $itempurchasedate
        );


        if(!empty($inputField)){

            $fields = array_keys($inputField);

            $sql = "INSERT INTO itemsetup  (`".implode('`,`', $fields)."`) 
                    VALUES('".implode("','", $inputField)."')";

            $result = mysqli_query($dbConnect, $sql);
            // print_r($result);
            if (generalErrorCheck($dbConnect, $result));
            else {
                if ($result) {
                    ?>
                    <script>
                        alert("Data Saved Successfully!");
                        <?php echo ("location.href = 'viewfacility.php';"); ?>
                    </script>
                    <?php
                } else {
                    ?>
                    <script>
                        alert("Data has not been entered correctly!");
                        <?php echo ("location.href = 'facilitysetup.php';"); ?>
                    </script>
                    <?php
                   // header("Location: facilitysetup.php");
                }
            }
        }else{
            ?>
             <script>
                alert("Fill the textboxes!");
                // console.log(result);
                <?php echo ("location.href = 'facilitysetup.php';"); ?>
                
            </script>
            <?php
            //header("Location: facilitysetup.php");

        }
    }
}



function insertIssueInfo($dbConnect)
{
    if (isset($_POST['faultReport'])) {

        // print_r($fields); exit();

        //$inputField = escapeString($dbConnect, $fields);

       // $inputField = [];

        $issuetitle = escapeString($dbConnect, $_POST['issuetitle']);
        $itemname = escapeString($dbConnect, $_POST['itemname']);
        $planamount = escapeString($dbConnect, $_POST['planamount']);
        $reportedby = escapeString($dbConnect, $_POST['reportedby']);
        $repairername = escapeString($dbConnect, $_POST['repairername']);
        $repairernumber = escapeString($dbConnect, $_POST['repairernumber']);
        $repaireraddress = escapeString($dbConnect, $_POST['repaireraddress']);
        $isrepairable = escapeString($dbConnect, $_POST['isrepairable']);
        $issuedate = escapeString($dbConnect, $_POST['issuedate']);
        $description = escapeString($dbConnect, $_POST['description']);
        $repaireddate = escapeString($dbConnect, $_POST['repaireddate']);

        $inputField = array(
            'issuetitle' => $issuetitle,
            'itemname' => $itemname,
            'planamount' => $planamount,
            'reportedby' => $reportedby,
            'repairername' => $repairername,
            'repairernumber' => $repairernumber,
            'repaireraddress' => $repaireraddress,
            'isrepairable' => $isrepairable,
            'issuedate' => $issuedate,
            'description' => $description,
            'repaireddate' => $repaireddate
        );


        if(!empty($inputField)){

            $fields = array_keys($inputField);

            $sql = "INSERT INTO issues  (`".implode('`,`', $fields)."`) 
                    VALUES('".implode("','", $inputField)."')";

            $result = mysqli_query($dbConnect, $sql);
            // print_r($result); exit();
            if (generalErrorCheck($dbConnect, $result));
            else {
                if ($result) {
                    ?>
                    <script>
                        alert("Data Saved Successfully!");
                        <?php echo ("location.href = 'serviceentry.php';"); ?>
                    </script>
                    <?php
                } else {
                    ?>
                    <script>
                        alert("Data has not been entered correctly!");
                        <?php echo ("location.href = 'addissues.php';"); ?>
                    </script>
                    <?php
                   // header("Location: facilitysetup.php");
                }
            }
        }else{
            ?>
             <script>
                alert("Fill the textboxes!");
                // console.log(result);
                <?php echo ("location.href = 'addissues.php';"); ?>
                
            </script>
            <?php
            //header("Location: facilitysetup.php");

        }
    }
}



function insertUserData($dbConnect)
{
    if (isset($_POST['addusers'])) {
        $firstname = escapeString($dbConnect, $_POST['firstname']);
        $lastname = escapeString($dbConnect, $_POST['lastname']);
        $username = escapeString($dbConnect, $_POST['username']);
        $password = escapeString($dbConnect, $_POST['password']);
        $email = escapeString($dbConnect, $_POST['email']);
        $usertype = escapeString($dbConnect, $_POST['usertype']);
      

        $password = md5($password);


        $inputField = array(
            'firstname' => $firstname,
            'lastname' => $lastname,
            'username' => $username,
            'password' => $password,
            'email' => $email,
            'usertype' => $usertype
        );


        if(!empty($inputField)){

            $fields = array_keys($inputField);

            $sql = "INSERT INTO users  (`".implode('`,`', $fields)."`) 
                    VALUES('".implode("','", $inputField)."')";

            $result = mysqli_query($dbConnect, $sql);
            
            if (generalErrorCheck($dbConnect, $result));
            else {
                if ($result) {
                    ?>
                    <script>
                        alert("User Info Saved Successfully!");
                        <?php echo ("location.href = 'manageUsers.php';"); ?>
                    </script>
                    <?php
                } else {
                    ?>
                    <script>
                        alert("User's info cannot be save!");
                        <?php echo ("location.href = 'addUsers.php';"); ?>
                    </script>
                    <?php
                    header("Location: facilitysetup.php");
                }
            }
        }else{
            ?>
             <script>
                alert("Fill the textboxes!");
                // console.log(result);
                window.location("facilitysetup");
                
            </script>
            <?php
            header("Location: facilitysetup.php");

        }
        // print_r($result);
    }
}

function updateItems($dbConnect){

    if(isset($_GET['edit']))
    if(isset($_POST['updateitem'])) {

        $editID = $_GET['edit'];
        $itemname = escapeString($dbConnect, $_POST['itemname']);
        $itemtype = escapeString($dbConnect, $_POST['itemtype']);
        $itemmodel = escapeString($dbConnect, $_POST['itemmodel']);
        $itemamount = escapeString($dbConnect, $_POST['itemamount']);
        $itemnumber = escapeString($dbConnect, $_POST['itemnumber']);
        $itemrecieptnumber = escapeString($dbConnect, $_POST['itemrecieptnumber']);
        $itemchasisnumber = escapeString($dbConnect, $_POST['itemchasisnumber']);
        $itemenginenumber = escapeString($dbConnect, $_POST['itemenginenumber']);
        $itempurchasedate = escapeString($dbConnect, $_POST['itempurchasedate']);

        // $itempurchasedate = date_format($itempurchasedate, "dd/mm/yy");
      


        $inputField = array(
            'itemname' => $itemname,
            'itemtype' => $itemtype,
            'itemmodel' => $itemmodel,
            'itemamount' => $itemamount,
            'itemnumber' => $itemnumber,
            'itemrecieptnumber' => $itemrecieptnumber,
            'itemchasisnumber' => $itemchasisnumber,
            'itemenginenumber' => $itemenginenumber,
            'itempurchasedate' => $itempurchasedate
        );


        if(!empty($inputField)){

            $fields = array_keys($inputField);

            // $sql = "UPDATE itemsetup SET (`".implode('`,`', $fields)."`) 
            //         = ('".implode("','", $inputField)."') WHERE itemid = '$editID'";

            $sql = "UPDATE `itemsetup` SET `itemname`='$itemname',`itemtype`='$itemtype',
                    `itemmodel`='$itemmodel',`itempurchasedate`='$itempurchasedate',
                    `itemamount`='$itemamount',`itemnumber`='$itemnumber',`itemrecieptnumber`='$itemrecieptnumber',
                    `itemchasisnumber`='$itemchasisnumber',`itemenginenumber`='$itemenginenumber' WHERE itemid = '$editID'";

            $result = mysqli_query($dbConnect, $sql);
            // print_r($result);
            if (generalErrorCheck($dbConnect, $result));
            else {
                if ($result) {
                    ?>
                    <script>
                        alert("Data Updated Successfully!");
                        <?php echo ("location.href = 'viewfacility.php';"); ?>
                    </script>
                    <?php
                    // header("Location: viewfacility.php");
                } else {
                    ?>
                    <script>
                        alert("Data has not been updated correctly!");
                    </script>
                    <?php
                    header("Location: facilitysetup.php");
                }
            }
        }else{
            ?>
             <script>
                alert("Update the textboxes!");
                // console.log(result);
                window.location("facilitysetup");
                
            </script>
            <?php
            header("Location: facilitysetup.php");

        }
    }
}



function updateFaultyItems($dbConnect){

    if(isset($_GET['editIssue']))
    if(isset($_POST['updatefaulties'])) {

        $issueID = $_GET['editIssue'];
        
        $issuetitle = escapeString($dbConnect, $_POST['issuetitle']);
        $itemname = escapeString($dbConnect, $_POST['itemname']);
        $planamount = escapeString($dbConnect, $_POST['planamount']);
        $reportedby = escapeString($dbConnect, $_POST['reportedby']);
        $repairername = escapeString($dbConnect, $_POST['repairername']);
        $repairernumber = escapeString($dbConnect, $_POST['repairernumber']);
        $repaireraddress = escapeString($dbConnect, $_POST['repaireraddress']);
        $isrepairable = escapeString($dbConnect, $_POST['isrepairable']);
        $issuedate = escapeString($dbConnect, $_POST['issuedate']);
        $description = escapeString($dbConnect, $_POST['description']);
        $repaireddate = escapeString($dbConnect, $_POST['repaireddate']);
        
        // $issuedate = date_format($issuedate, "dd-MM-yyyy");

        $inputField = array(
            'issuetitle' => $issuetitle,
            'itemname' => $itemname,
            'planamount' => $planamount,
            'reportedby' => $reportedby,
            'repairername' => $repairername,
            'repairernumber' => $repairernumber,
            'repaireraddress' => $repaireraddress,
            'isrepairable' => $isrepairable,
            'issuedate' => $issuedate,
            'description' => $description,
            'repaireddate' => $repaireddate
        );


        if(!empty($inputField)){

            $fields = array_keys($inputField);

            // $sql = "UPDATE itemsetup SET (`".implode('`,`', $fields)."`) 
            //         = ('".implode("','", $inputField)."') WHERE itemid = '$editID'";

            $sql = "UPDATE `issues` SET `issuetitle`='$issuetitle',`itemname`='$itemname',
                    `description`='$description',`repairername`='$repairername',`repairernumber`='$repairernumber',
                    `repaireraddress`='$repaireraddress',`issuedate`='$issuedate',`repaireddate`='$repaireddate',
                    `reportedby`='$reportedby',`planamount`='$planamount',`isrepairable`='$isrepairable' 
                    WHERE `issueid`= '$issueID'";

            $result = mysqli_query($dbConnect, $sql);
            // print_r($result);
            if (generalErrorCheck($dbConnect, $result));
            else {
                if ($result) {
                    ?>
                    <script>
                        alert("Data Updated Successfully!");
                        <?php echo ("location.href = 'serviceentry.php';"); ?>
                    </script>
                    <?php
                    // header("Location: viewfacility.php");
                } else {
                    ?>
                    <script>
                        alert("Data has not been updated correctly!");
                        <?php echo ("location.href = 'editissues.php';"); ?>
                    </script>
                    <?php
                }
            }
        }else{
            ?>
             <script>
                alert("Update the textboxes!");
                <?php echo ("location.href = 'editissues.php';"); ?>                
            </script>
            <?php
           // header("Location: facilitysetup.php");

        }
    }
}



function updateUserProfile($dbConnect)
{
    if(isset($_GET['editUser']))
    if (isset($_POST['updateuser'])) {
        $userID = $_GET['editUser'];
        $firstname = escapeString($dbConnect, $_POST['firstname']);
        $lastname = escapeString($dbConnect, $_POST['lastname']);
        $username = escapeString($dbConnect, $_POST['username']);
        $password = escapeString($dbConnect, $_POST['password']);
        $email = escapeString($dbConnect, $_POST['email']);
        $usertype = escapeString($dbConnect, $_POST['usertype']);
      

        $password = md5($password);


        $inputField = array(
            'firstname' => $firstname,
            'lastname' => $lastname,
            'username' => $username,
            'password' => $password,
            'email' => $email,
            'usertype' => $usertype
        );


        if(!empty($inputField)){

            $fields = array_keys($inputField);

            $sql = "UPDATE `users` SET `firstname`='$firstname',`lastname`='$lastname',
                    `username`='$username',`password`='$password',`email`='$email',
                    `usertype`='$usertype' WHERE userid = '$userID'";

            $result = mysqli_query($dbConnect, $sql);
            
            if (generalErrorCheck($dbConnect, $result));
            else {
                if ($result) {
                    ?>
                    <script>
                        alert("User Info Updated Successfully!");
                        <?php echo ("location.href = 'manageUsers.php';"); ?>
                    </script>
                    <?php
                } else {
                    ?>
                    <script>
                        alert("Error Updating User Info!");
                        <?php echo ("location.href = 'editUsers.php';"); ?>
                    </script>
                    <?php
                    //header("Location: facilitysetup.php");
                }
            }
        }else{
            ?>
             <script>
                alert("Fill the textboxes!");
                <?php echo ("location.href = 'editUsers.php';"); ?>
                
            </script>
            <?php
            //header("Location: facilitysetup.php");

        }
        // print_r($result);
    }
}




function populateAllIssues($dbConnect)
{
    $query = "SELECT * FROM issues";

    $result = mysqli_query($dbConnect, $query);
    if (generalErrorCheck($dbConnect, $result));
    else {
        while ($row = mysqli_fetch_assoc($result)) {
            $issueid = $row['issueid'];
            $issuetitle = $row['issuetitle'];
            $itemname = $row['itemname'];
            $planamount = $row['planamount'];
            $reportedby = $row['reportedby'];
            $repairername = $row['repairername'];
            $repairernumber = $row['repairernumber'];
            $repaireddate = $row['repaireddate'];
            $isrepairable = $row['isrepairable'];
            $issuedate = $row['issuedate'];
            // $description = $row['description'];
            ?>
            <tr>
            <td>
                <a href="editissues.php?editIssue=<?php echo $issueid; ?>"class="far fa-edit text-primary" title="edit <?php echo $itemname; ?> fault"></a> <span style="padding-left: 10px;"></span>
                <a onclick="javascript: return confirm('Are you sure you want to erase <?php echo $itemname; ?>\'s faulty detail?')" href="serviceentry.php?deleteissue=<?php echo $issueid; ?>"class="far fa-trash-alt text-danger" title="erase <?php echo $itemname; ?> fault"></a>
                <!-- data-toggle="modal" data-target="#deleteModal" -->
            </td>
            <td><?php echo $itemname; ?></td>
            <td><?php echo $issuetitle; ?></td>
            <td><?php echo number_format($planamount, '1','.0', ','); ?></td>
            <td><?php echo date("d-M-Y", strtotime($issuedate)); ?></td>
            <td><?php echo date("d-M-Y", strtotime($repaireddate)); ?></td>
            <td><?php echo $repairername; ?></td>
            <td><?php echo $repairernumber; ?></td>
            <td><?php echo $reportedby; ?></td>
            <td><?php echo ($isrepairable)==1 ? "True": "False"; ?></td>
            </tr>

            <?php
        }
    }
}

function populateAllItem($dbConnect)
{
    // echo "table name: ". $tableName;
    // $query = "SELECT * FROM `facilitytypessetup` WHERE 1";
    $query = "SELECT * FROM itemsetup";

    $result = mysqli_query($dbConnect, $query);
    if (generalErrorCheck($dbConnect, $result));
    else {
        while ($row = mysqli_fetch_assoc($result)) {
            $itemid = $row['itemid'];
            $itemname = $row['itemname'];
            $itemtype = $row['itemtype'];
            $itemmodel = $row['itemmodel'];
            $itemamount = $row['itemamount'];
            $itemrecieptnumber = $row['itemrecieptnumber'];
            $itemnumber = $row['itemnumber'];
            $itempurchasedate = $row['itempurchasedate'];
            ?>
            <tr>
            <td>
                <a href="editfacility.php?edit=<?php echo $itemid; ?>"class="far fa-edit text-primary" title="edit <?php echo $itemname; ?>"></a> <span style="padding-left: 10px;"></span>
                <a onclick="javascript: return confirm('Are you sure you want to delete <?php echo $itemname; ?>?')" href="viewfacility.php?delete=<?php echo $itemid; ?>"class="far fa-trash-alt text-danger" title="delete <?php echo $itemname; ?>"></a>
            </td>
            <td><?php echo $itemname; ?></td>
            <td><?php echo $itemtype; ?></td>
            <td><?php echo $itemnumber; ?></td>
            <td><?php echo $itemrecieptnumber; ?></td>
            <td><?php echo number_format($itemamount, '1','.0', ','); ?></td>
            <td><?php echo date("d-M-Y", strtotime($itempurchasedate)); ?></td>
            <td><?php echo $itemmodel; ?></td>
            </tr>

            <?php
        }
    }
}


function populateAllUsers($dbConnect)
{
    // echo "table name: ". $tableName;
    // $query = "SELECT * FROM `facilitytypessetup` WHERE 1";
    $query = "SELECT * FROM users";

    $result = mysqli_query($dbConnect, $query);
    if (generalErrorCheck($dbConnect, $result));
    else {
        while ($row = mysqli_fetch_assoc($result)) {
            $firstname = $row['firstname'];
            $lastname = $row['lastname'];
            $username = $row['username'];
            $userid = $row['userid'];
            $email = $row['email'];
            $usertype = $row['usertype'];
            ?>
            <tr>
            <td>
                <a href="editUsers.php?editUser=<?php echo $userid; ?>"class="far fa-edit text-primary" title="edit <?php echo $firstname; ?> 's Info'"></a> <span style="padding-left: 10px;"></span>
                <a onclick="javascript: return confirm('Are you sure you want to delete <?php echo $firstname; ?>\'s Profile?')" href="manageUsers.php?deleteUser=<?php echo $userid; ?>"class="far fa-trash-alt text-danger" title="About to Delete <?php echo $firstname; ?>'s Data"></a>
            </td>
            <td><?php echo $firstname; ?></td>
            <td><?php echo $lastname; ?></td>
            <td><?php echo $username; ?></td>
            <td><?php echo $email; ?></td>
            <td><?php echo $usertype; ?></td>
            </tr>

            <?php
        }
    }
}

function deleteItems($dbConnect){
    
    if(isset($_GET['delete'])){
        $itemID = $_GET['delete'];

        $qry = "DELETE FROM itemsetup WHERE itemid = '$itemID'";

        $result = mysqli_query($dbConnect, $qry);
        if(generalErrorCheck($dbConnect, $result));
        else{
            if($result)
            ?>
            <script>
                <?php echo ("location.href = 'viewfacility.php';"); ?>
            </script>
            <?php
        }
    }
}

function deleteIssues($dbConnect){
    
    if(isset($_GET['deleteissue'])){
        $issueID = $_GET['deleteissue'];

        $qry = "DELETE FROM issues WHERE issueid = '$issueID'";

        $result = mysqli_query($dbConnect, $qry);
        if(generalErrorCheck($dbConnect, $result));
        else{
            if($result)
            ?>
            <script>
                <?php echo ("location.href = 'serviceentry.php';"); ?>
            </script>
            <?php
        }
    }
}

function deleteUsers($dbConnect){
    
    if(isset($_GET['deleteUser'])){
        $itemID = $_GET['deleteUser'];

        $qry = "DELETE FROM users WHERE userid = '$itemID'";

        $result = mysqli_query($dbConnect, $qry);
        if(generalErrorCheck($dbConnect, $result));
        else{
            if($result)
            ?>
            <script>
                <?php echo ("location.href = 'manageUsers.php';"); ?>
            </script>
            <?php
        }
    }
}

function baseTotalCount($dbConnect, $tableName, $columnClause = null)
{
    $qry = "SELECT * FROM ". $tableName." ";
    $queryWithCondition = "SELECT * FROM ". $tableName." WHERE isrepairable = ".$columnClause. " ";

    if($columnClause){
        $runCondition = mysqli_query($dbConnect, $queryWithCondition);
        if(generalErrorCheck($dbConnect, $runCondition));
        else{
            $counter = mysqli_num_rows($runCondition);
            echo $counter;
        }
    }else{
        $runQuery = mysqli_query($dbConnect, $qry);
        if(generalErrorCheck($dbConnect, $runQuery));
        else {
            $countResult = mysqli_num_rows($runQuery);
            echo $countResult;
        }
    }
}


function baseReportFunction($dbConnect, $tableName, $columnClause = null)
{
    $query = "SELECT * FROM ". $tableName. " ";
    $queryWithCondition = "SELECT * FROM ". $tableName." WHERE isrepairable = ".$columnClause. " ";

    
    if($tableName == 'itemsetup')
    {
        $result = mysqli_query($dbConnect, $query);
        if (generalErrorCheck($dbConnect, $result));
        else{
            while ($row = mysqli_fetch_assoc($result)) {
                $itemname = $row['itemname'];
                $itemtype = $row['itemtype'];
                $itemnumber = $row['itemnumber'];
                $itemamount = $row['itemamount'];
                $itempurchasedate = $row['itempurchasedate'];
                ?>
                <tr>
                <td><?php echo $itemname; ?></td>
                <td><?php echo $itemtype; ?></td>
                <td><?php echo $itemnumber; ?></td>
                <!-- number_format($planamount, '1','.0', ','); -->
                <td><?php echo number_format($itemamount, '1', ".0", ","); ?></td>
                <td><?php echo date("d-M-Y", strtotime($itempurchasedate)); ?></td>
                </tr>
                <?php
            }
        }
    }elseif ($tableName == 'users') 
    {
        $result = mysqli_query($dbConnect, $query);
        if (generalErrorCheck($dbConnect, $result));
        else{
            while ($row = mysqli_fetch_assoc($result)) {
                $firstname = $row['firstname'];
                $lastname = $row['lastname'];
                $username = $row['username'];
                $email = $row['email'];
                $usertype = $row['usertype'];
                ?>
                <tr>
                <td><?php echo $firstname; ?></td>
                <td><?php echo $lastname; ?></td>
                <td><?php echo $username; ?></td>
                <td><?php echo $email; ?></td>
                <td><?php echo $usertype; ?></td>
                </tr>    
                <?php
            }
        }
    }elseif (!isset($columnClause) && $tableName = 'issues')
    {
        $result = mysqli_query($dbConnect, $query);
        if (generalErrorCheck($dbConnect, $result));
        else{
            while ($row = mysqli_fetch_assoc($result)) {
                $issuetitle = $row['issuetitle'];
                $itemname = $row['itemname'];
                $planamount = $row['planamount'];
                $reportedby = $row['reportedby'];
                $repairername = $row['repairername'];
                $repairernumber = $row['repairernumber'];
                $repaireddate = $row['repaireddate'];
                $isrepairable = $row['isrepairable'];
                $issuedate = $row['issuedate'];
                ?>
                <tr>
                <td><?php echo $itemname; ?></td>
                <td><?php echo $issuetitle; ?></td>
                <td><?php echo number_format($planamount, '1','.0', ','); ?></td>
                <td><?php echo date("d-M-Y", strtotime($issuedate)); ?></td>
                <td><?php echo date("d-M-Y", strtotime($repaireddate)); ?></td>
                <td><?php echo $repairername; ?></td>
                <td><?php echo $repairernumber; ?></td>
                <td><?php echo $reportedby; ?></td>
                </tr>
    
                <?php
            }
        }
    }elseif(isset($columnClause) && $tableName ==="issues")
    {
        $runCondition = mysqli_query($dbConnect, $queryWithCondition);
        // print_r($runCondition); exit();
        if(generalErrorCheck($dbConnect, $runCondition));
        else{
            while ($row = mysqli_fetch_assoc($runCondition)) {
                $issuetitle = $row['issuetitle'];
                $itemname = $row['itemname'];
                $planamount = $row['planamount'];
                $reportedby = $row['reportedby'];
                $repairername = $row['repairername'];
                $repairernumber = $row['repairernumber'];
                $repaireddate = $row['repaireddate'];
                $isrepairable = $row['isrepairable'];
                $issuedate = $row['issuedate'];
                ?>
                <tr>
                <td><?php echo $itemname; ?></td>
                <td><?php echo $issuetitle; ?></td>
                <td><?php echo number_format($planamount, '1','.0', ','); ?></td>
                <td><?php echo date("d-M-Y", strtotime($issuedate)); ?></td>
                <td><?php echo date("d-M-Y", strtotime($repaireddate)); ?></td>
                <td><?php echo $repairername; ?></td>
                <td><?php echo $repairernumber; ?></td>
                <td><?php echo $reportedby; ?></td>
                <td><?php echo ($isrepairable)==1 ? "True": "False"; ?></td>
                <!-- <td><?php //echo $isrepairable; ?></td> -->
                </tr>
    
                <?php
            }
        }
    }
}

?>
<script>
    function printReport(){
        var printer = document.getElementById = "printPdf";
        // var hidden = document.getElementById("printPdf").style.visibility = "hidden";
        if(printer){
            print();
        }
        
    }
</script>
<?php


?>