<!-- 
    Here is the Base Header for all the Pages
    Created by: Ibrahim Hammed
    Date: 15th August, 2019.
 -->
<?php session_start(); ?>
 <?php include "baseFunction.php"; ?>
 <?php

if(!isset($_SESSION['username']))
{
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">


    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/loaderStyle.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">







    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <title>Facility Mgmt - Admin Dashboard</title>
    <!-- Custom CSS -->
    <link href="../../assets/libs/flot/css/float-chart.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../assets/extra-libs/multicheck/multicheck.css">
    <link href="../../assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../../dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>


<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>