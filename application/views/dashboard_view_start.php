<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sistem Informasi Akademik Mahasiswa</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/adminlte.min.css">
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="<?php echo base_url(); ?>images/Universitas_Brawijaya.png" alt="AdminLTELogo" height="60" width="60">
  </div>
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php base_url(); ?>" class="brand-link" style="">
      <img src="<?php echo base_url(); ?>images/Universitas_Brawijaya.png" class="brand-image" style="">
      <span class="brand-text font-weight-light">SIAM<b>UB</b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php base_url(); ?>images/user.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $user[0]->nama; ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?php base_url();?>home" class="nav-link <?php if($this->uri->uri_string() == 'home') { echo 'active'; } ?>">
              <i class="nav-icon fas fa-university"></i>
              <p>
                Akademik
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php base_url();?>absen" class="nav-link <?php if($this->uri->uri_string() == 'absen') { echo 'active'; } ?>">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Presensi Online                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="javascript:void(0)" class="nav-link">
              <i class="nav-icon fas fa-user-graduate "></i>
              <p>
                Profil Mahasiswa                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php base_url(); ?>krs" class="nav-link <?php if($this->uri->uri_string() == 'krs') { echo 'active'; } ?>">
              <i class="nav-icon fas fa-plus"></i>
              <p>
                Kartu Rencana Studi
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="javascript:void(0)" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Kartu Hasil Studi
              </p>
            </a>
          </li>
          <li class="nav-item ">
            <a href="<?php base_url(); ?>home/logout" class="nav-link bg-danger">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

