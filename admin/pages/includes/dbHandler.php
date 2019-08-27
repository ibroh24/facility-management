<?php
/*
    This is the database handler file, where connection comes from

    Created By:     Ibrahim Hammed
    Created Date:   16th August, 2019.

*/


define("DB_HOST","localhost");
define("DB_USER","root");
define("DB_PASS","");
define("DB_NAME","facilities");


$dbConnect = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if(!$dbConnect)
die("cant connect to the database!");



?>