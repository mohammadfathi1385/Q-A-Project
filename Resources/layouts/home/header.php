<?php
    require_once(__DIR__.'/../helpers.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?= strtoupper($settings['title']) ?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- editor -->
  <script src="https://cdn.ckeditor.com/ckeditor5/28.0.0/classic/ckeditor.js"></script>
  <!-- editor end -->

  <!-- Favicons -->
  <link href="<?php url('Resources/images/favicon.png') ?>" rel="icon">
  <link href="<?php url('Resources/images/apple-touch-icon.png') ?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php url('Resources/vendors/aos/aos.css') ?>" rel="stylesheet">
  <link href="<?php url('Resources/vendors/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
  <link href="<?php url('Resources/vendors/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">
  <link href="<?php url('Resources/vendors/boxicons/css/boxicons.min.css') ?>" rel="stylesheet">
  <link href="<?php url('Resources/vendors/glightbox/css/glightbox.min.css') ?>" rel="stylesheet">
  <link href="<?php url('Resources/vendors/remixicon/remixicon.css') ?>" rel="stylesheet">
  <link href="<?php url('Resources/vendors/swiper/swiper-bundle.min.css') ?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php url('Resources/css/style.css') ?>" rel="stylesheet">

  <style>
    body{
      font-size: 19px;
      font-weight: bold;
    }
    ::selection{
          background-color: yellow;
          color: black;
      }
  </style>

  <!-- =======================================================
  * Template Name: Arsha - v4.3.0
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href=""><?= $settings['title'] ?></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <?php if(!isset($_SESSION['user'])){ ?>
              <li><a class="getstarted scrollto" href="<?php url('auth/register') ?>">Sign Up \ In</a></li>    
          <?php } else{

          } ?>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->