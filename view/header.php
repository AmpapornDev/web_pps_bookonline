<?php
/* start check login */
//session_start(); 
if (!isset($_SESSION)) {
    session_start();
}
include("../../lib/check_login.php");
/* end check login */

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>PPS Book Online</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">
    <!-- Bootstrap core CSS -->
    <link href="../../assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="../../assets/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom styles for this template -->
    <link href="../../assets/css/dashboard.css?ui=003" rel="stylesheet">
    <link href="../../assets/css/style.css?ui=999" rel="stylesheet">

</head>

<body>

    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">PPS Book Online</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
        <div class="navbar-nav">
            <div class="nav-item text-nowrap">
                <a class="nav-link px-3" href="../../controller/admin_login/c_logout.php">Sign out</a>
            </div>
        </div>
    </header>