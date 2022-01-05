<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $title_web; ?> | Sistem Informasi Perpustakaan SDN 4 Gabus </title>
  <!-- Tell the browser to be responsive to screen width -->


  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets_style/assets/plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets_style/assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets_style/assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  
      <!-- Toggles CSS -->
      <link href="<?= base_url('assets/'); ?>/vendors/jquery-toggles/css/toggles.css" rel="stylesheet" type="text/css">
      <link href="<?= base_url('assets/'); ?>/vendors/jquery-toggles/css/themes/toggles-light.css" rel="stylesheet" type="text/css">
	
	<!-- Toastr CSS -->
  <link href="<?= base_url('assets/'); ?>/vendors/jquery-toast-plugin/dist/jquery.toast.min.css" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link href="<?= base_url('assets/'); ?>/css/style.css" rel="stylesheet" type="text/css">

  <!-- offline -->
  <script type="text/javascript">
    $(document).ajaxStart(function() {
      Pace.restart();
    });
  </script>
</head>

<body>

  <!-- HK Wrapper -->
  <div class="hk-wrapper hk-vertical-nav">

    <!-- Top Navbar -->
    <nav class="navbar navbar-expand-xl navbar-dark fixed-top hk-navbar">
      <a id="navbar_toggle_btn" class="navbar-toggle-btn nav-link-hover" href="javascript:void(0);"><span class="feather-icon"><i data-feather="menu"></i></span></a>
      <a class="navbar-brand" href="dashboard1.html">
        Perpus SDN 4 Gabus
      </a>
      <ul class="navbar-nav hk-navbar-content">
        <li class="nav-item dropdown dropdown-authentication">
          <a class="nav-link dropdown-toggle no-caret" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="media">
              <div class="media-img-wrap">
                <div class="avatar">
                  <?php
                  $d = $this->db->query("SELECT * FROM tbl_login WHERE id_login='$idbo'")->row();
                  if (!empty($d->foto)) {
                  ?>
                    <img src="<?php echo base_url(); ?>assets_style/image/<?php echo $d->foto; ?>" alt="user" class="avatar-img rounded-circle">
                  <?php } else { ?>
                    <i class="fa fa-user fa-4x" style="color:#fff;"></i>
                  <?php } ?>
                </div>
                <span class="badge badge-success badge-indicator"></span>
              </div>
              <div class="media-body">
                <?php
                $d = $this->db->query("SELECT * FROM tbl_login WHERE id_login = '$idbo'")->row();
                ?>
                <span><?php echo $d->nama; ?><i class="zmdi zmdi-chevron-down"></i></span>
              </div>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-right" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
            <a class="dropdown-item" href="profile.html"><i class="dropdown-icon zmdi zmdi-account"></i><span>Edit Akun</span></a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="<?php echo base_url(); ?>login/logout"><i class="dropdown-icon zmdi zmdi-power"></i><span>Log out</span></a>
          </div>
        </li>
      </ul>
    </nav>
    <!-- /Top Navbar -->

    <div class="wrapper">
      <header class="main-header">

        <!-- Logo -->
        <a href="<?php echo base_url('index.php/dashboard'); ?>" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><i class="fa fa-arrow-right"></i></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg">Perpus SDN 4 Gabus</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <li>
                <?php
                $d = $this->db->query("SELECT * FROM tbl_login WHERE id_login = '$idbo'")->row();
                ?>
                <a href="<?= base_url('user/edit/' . $idbo); ?>">
                  Welcome , <i class="fa fa-edit"> </i> <?php echo $d->nama;
                                                        echo ' | ( ' . $d->level . ' )'; ?></a>
              </li>
              <li>
                <a href="<?php echo base_url(); ?>login/logout">Sign out</a>
              </li>
              <!-- Control Sidebar Toggle Button 
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>-->
            </ul>
          </div>
        </nav>
      </header>
      <!--loading-->
      <!-- Left side column. contains the logo and sidebar -->