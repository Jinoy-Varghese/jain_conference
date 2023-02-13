<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if(!isset($_SESSION['u_id']) OR $_SESSION['role']!="Super Admin")
{
  redirect('Home/login','refresh');
}


?>

<!DOCTYPE html>
<html amp lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url('assets/image/jain_fav.png'); ?>" />


    <script type="application/ld+json">
    {

        "image": [
            "logo.jpg"
        ]
    }
    </script>
    <title>JAIN</title>
    <link href="<?php echo base_url('assets/css/loader.css'); ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/fontawesome-5.11.2/css/all.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap-4.3.1/css/bootstrap.min.css'); ?>">
</head>

<body>
    <div class="loader"
        style="position:absolute;z-index:10; background: #275EFE;width:100%;height:100vh;justify-content:center;align-items:center;display:flex;">
        <div class="book">
            <div class="inner">
                <div class="left"></div>
                <div class="middle"></div>
                <div class="right"></div>
            </div>
            <ul>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>
    </div>
    <?php date_default_timezone_set('Asia/Kolkata'); ?>

<style>
@keyframes bell-shake {
    0% {
        transform: rotate(0deg);
    }
    5% {
        transform: rotate(10deg);
    }
    10% {
        transform: rotate(-10deg);
    }
    15% {
        transform: rotate(10deg);
    }
    20% {
        transform: rotate(-10deg);
    }
    25% {
        transform: rotate(0deg);
    }
    75% {
        transform: rotate(0deg);
    }
    80% {
        transform: rotate(10deg);
    }
    85% {
        transform: rotate(-10deg);
    }
    90% {
        transform: rotate(10deg);
    }
    95% {
        transform: rotate(-10deg);
    }
    100% {
        transform: rotate(0);
    }
}
.alert-bell {
  animation: bell-shake 1.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) infinite;
  animation-delay: 4s;
}
.dropdown-menu-arrow {
  top: -26px;
  left: 7%;
  width: 0;
  height: 0;
  position: relative;
}
.dropdown-menu-arrow:before,
.dropdown-menu-arrow:after {
  content: "";
  position: absolute;
  display: block;
  width: 0;
  height: 0;
  border-width: 7px 8px;
  border-style: solid;
  border-color: transparent;
  z-index: 1001;
}
.dropdown-menu-arrow:after {
  bottom: -18px;
  right: -8px;
  border-bottom-color: #fff;
}
.dropdown-menu-arrow:before {
  bottom: -17px;
  right: -8px;
  border-bottom-color: coral;
}
.social
    {
        text-decoration:none;
        color:white;
    }
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="<?php echo base_url('assets/js/sweetalert2.all.min.js'); ?>"></script>
  <!-- Custom styles for this template -->

  <link href="<?php echo base_url('assets/css/simple-sidebar.css'); ?>" rel="stylesheet">
  <!--navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark sticky-top mt-0 mb-0 pb-0 pt-0" style="background-color:#194486"><!-- sticky top can be replaced with fixed-botto or fixed-top -->
    <button class="btn btn-primary" id="menu-toggle">Menu</button>
    <a href="#" class="navbar-brand mx-auto">
<div class='rounded-circle ml-md-2'><img src="<?php echo base_url('assets/image/jain_logo.png');?>"class="ml-n1 mt-n1" style='width:170px; height:60px;'></div>
</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="true" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbarTogglerDemo02">
      <ul class="navbar-nav my-2 my-lg-0">
        <li class="nav-item active"><a class="nav-link" href="#">Submit Paper<span class="sr-only">(current)</span></a></li>
        <li class="nav-item active"><a class="nav-link" href="#">Register Now</a></li>
        <li class="nav-item active"><a class="nav-link" href="#">Conference Flyer </a></li>

      </ul>

    </div>
  </nav>

  <!--/navigation-->
  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">
    
      <div class="text-center font-weight-bold"> </div>
      </div>
      <div class="list-group list-group-flush mt-5">
        <a href="<?php echo base_url(); ?>Super_admin/" class="list-group-item list-group-item-action bg-light">Dashboard</a>
        <a href="<?php echo base_url(); ?>Super_admin/Venue" class="list-group-item list-group-item-action bg-light">Venue<span class="badge badge-danger count" style="border-radius:20px; margin-left:63px;"></span></a>
        <a href="<?php echo base_url(); ?>Super_admin/Agenda" class="list-group-item list-group-item-action bg-light">Agenda</a>
        <a href="<?php echo base_url(); ?>Super_admin/Collaboration" class="list-group-item list-group-item-action bg-light">Collaboration</a>
        <a href="<?php echo base_url(); ?>Super_admin/Downloads" class="list-group-item list-group-item-action bg-light">Downloads</a>
        <a href="<?php echo base_url(); ?>Super_admin/Registration" class="list-group-item list-group-item-action bg-light">Registration</a>
        <a href="<?php echo base_url(); ?>Super_admin/About" class="list-group-item list-group-item-action bg-light">About</a>
        <a href="<?php echo base_url(); ?>Super_admin/publication" class="list-group-item list-group-item-action bg-light">Publication</a>
        <a href="<?php echo base_url(); ?>Super_admin/gallery" class="list-group-item list-group-item-action bg-light">Gallery</a>
        <a href="<?php echo base_url(); ?>Super_admin/contact_us" class="list-group-item list-group-item-action bg-light">Contact Us</a>
        <a href="<?php echo base_url(); ?>Super_admin/important_dates" class="list-group-item list-group-item-action bg-light">Important Dates</a>
        <a href="<?php echo base_url(); ?>Super_admin/paper_submission" class="list-group-item list-group-item-action bg-light">Paper Submission</a>
        <a href="<?php echo base_url(); ?>Super_admin/author_guidelines" class="list-group-item list-group-item-action bg-light">Author Guidelines</a>
        <a href="<?php echo base_url(); ?>Super_admin/organizing_committee" class="list-group-item list-group-item-action bg-light">Organizing Committee</a>
        <a href="<?php echo base_url(); ?>Super_admin/call_for_papers" class="list-group-item list-group-item-action bg-light">Call for Papers</a>

      </div>
    </div>



    <!-- /#sidebar-wrapper -->
    
    <!-- Page Content -->
    <div id="page-content-wrapper">

      <div class="container-fluid">

