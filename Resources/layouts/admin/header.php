<?php
    require_once(__DIR__.'/../helpers.php');
?>
<!--
=========================================================
Material Dashboard - v2.1.2
=========================================================

Product Page: https://www.creative-tim.com/product/material-dashboard
Copyright 2020 Creative Tim (https://www.creative-tim.com)
Coded by Creative Tim

=========================================================
The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?php url('Resources/images/apple-icon.png') ?>">
  <link rel="icon" type="image/png" href="<?php url('Resources/images/favicon.png') ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
      Trueanswer - Admin Panel
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="<?php url('Resources/css/admin/material-dashboard.css?v=2.1.2') ?>" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?php url('Resources/css/admin/demo/demo.css') ?>" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="<?php url('Resources/images/sidebar-1.jpg') ?>">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
          Trueanswer
        </a></div>
      <div class="sidebar-wrapper">
          <ul class="nav">
              <li class="nav-item <?= checkURL('index') == true ? 'active' : ''; ?>">
                <a class="nav-link" href="<?php url('admin/index') ?>">
                  <i class="material-icons">dashboard</i>
                  <p>Dashboard</p>
                </a>
              </li>
              <li class="nav-item <?= checkURL('questions') == true ? 'active' : ''; ?>" href="<?php url('admin/questions') ?>">
                <a class="nav-link " href="<?= url('admin/questions') ?>" >
                  <i class="material-icons">library_books</i>
                  <p>Questions</p>
                </a>
              </li>
              <li class="nav-item <?= checkURL('answers') == true ? 'active' : ''; ?>" href="<?php url('admin/answers') ?>">
                <a class="nav-link " href="<?= url('admin/answers') ?>" >
                  <i class="material-icons">content_paste</i>
                  <p>Answers</p>
                </a>
              </li>
              <li class="nav-item <?= checkURL('reports') == true ? 'active' : ''; ?>" href="<?php url('admin/reports') ?>">
                <a class="nav-link " href="<?= url('admin/reports') ?>" >
                  <i class="material-icons">library_books</i>
                  <p>Reports</p>
                </a>
              </li>
              <li class="nav-item <?= checkURL('notifications') == true ? 'active' : ''; ?>" href="<?php url('admin/notifications') ?>">
                <a class="nav-link " href="<?= url('admin/notifications') ?>" >
                  <i class="material-icons">notifications</i>
                  <p>Notifications</p>
                </a>
              </li>
              <li class="nav-item <?= checkURL('contacts') == true ? 'active' : ''; ?>" href="<?php url('admin/contacts') ?>">
                <a class="nav-link " href="<?= url('admin/contacts') ?>">
                  <i class="material-icons">contacts</i>
                  <p>Contacts</p>
                </a>
              </li>
              <li class="nav-item <?= checkURL('notregisters') == true ? 'active' : ''; ?>" href="<?php url('admin/Profile') ?>">
                <a class="nav-link " href="<?= url('admin/notregisters') ?>">
                  <i class="material-icons">group</i>
                  <p>Not Register</p>
                </a>
              </li>
              <li class="nav-item <?= checkURL('/editProfile') == true ? 'active' : ''; ?>" href="<?php url('admin/editProfile') ?>">
                <a class="nav-link " href="<?= url('admin/editProfile') ?>">
                  <i class="material-icons">settings</i>
                  <p>Edit Setting</p>
                </a>
              </li>
              <li class="nav-item <?= checkURL('/profile') == true ? 'active' : ''; ?>" href="<?php url('admin/Profile') ?>">
                <a class="nav-link " href="<?= url('admin/profile') ?>">
                  <i class="material-icons">person</i>
                  <p>Profile</p>
                </a>
              </li>
              <li class="nav-item active-pro ">
                <a style="text-align: center;font-size:20px;color:black" class="nav-link btn-danger" href="<?php url('auth/logout') ?>">
                  Logout
                </a>
              </li>
          </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;">Dashboard</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
          </div>
        </div>
      </nav>
      <!-- End Navbar -->