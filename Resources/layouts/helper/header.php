<?php
    require_once(__DIR__.'/../helpers.php');
?>
<!--
=========================================================
* * Black Dashboard - v1.0.1
=========================================================

* Product Page: https://www.creative-tim.com/product/black-dashboard
* Copyright 2019 Creative Tim (https://www.creative-tim.com)


* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php url('Resources/images/helper/apple-icon.png') ?>">
  <link rel="icon" type="image/png" href="<?php url('Resources/images/helper/favicon.png') ?>">
  <title>
    Black Dashboard by Creative Tim
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="<?php url('Resources/css/helper/nucleo-icons.css') ?>" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="<?php url('Resources/css/helper/black-dashboard.css?v=1.0.0') ?>" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?php url('Resources/css/helper/demo/demo.css') ?>" rel="stylesheet" />
  <link rel="stylesheet" href="<?php url('Resources/css/helper/profile/style.css') ?>">
</head>

<body class="">
  <div class="wrapper">
    <div class="sidebar">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red"
    -->
      <div class="sidebar-wrapper">
        <div class="logo">
          <a href="javascript:void(0)" class="simple-text logo-mini">
            TA
          </a>
          <a href="javascript:void(0)" class="simple-text logo-normal">
            TRUEANSWER
          </a>
        </div>
        <ul class="nav">
          <li class="active">
            <a href="<?php url('helper/index') ?>">
              <i class="tim-icons icon-chart-pie-36"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a href="<?php url('helper/profile') ?>">
              <i class="tim-icons icon-atom"></i>
              <p>Profile</p>
            </a>
          </li>
          <li>
            <a href="<?php url('helper/editProfile') ?>">
              <i class="tim-icons icon-pin"></i>
              <p>Edit Setting</p>
            </a>
          </li>
          <li>
            <a href="<?php url('helper/notifications') ?>">
              <i class="tim-icons icon-bell-55"></i>
              <p>Notifications</p>
            </a>
          </li>
          <li>
            <a href="<?php url('helper/answers') ?>">
              <i class="tim-icons icon-puzzle-10"></i>
              <p>Answers</p>
            </a>
          </li>
          <li>
            <a class="btn btn-danger" href="<?php url('auth/logout') ?>">
              LogOut
            </a>
          </li>
        </ul>
      </div>
    </div>