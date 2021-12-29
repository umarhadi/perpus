<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?php echo $title_web; ?></title>

  <link href="<?= base_url('assets/'); ?>/css/style.css" rel="stylesheet" type="text/css">
</head>

<body>

  <div class="hk-wrapper">

    <!-- Main Content -->
    <div class="hk-pg-wrapper hk-auth-wrapper">
      <header class="d-flex justify-content-between align-items-center">
        <a class="d-flex auth-brand badge badge-outline" href="#">
          <h3 class="text-white">Perpustakaan SDN 4 Gabus</h3>
        </a>
      </header>
      <div class="container-fluid">
        <div class="row">
          <div class="col-xl-5 pa-0">
            <div id="owl_demo_1" class="owl-carousel dots-on-item owl-theme">
              <div class="fadeOut item auth-cover-img overlay-wrap" style="background-image:url(<?= base_url('assets/'); ?>/img/bg2.jpg);">
                <div class="auth-cover-info py-xl-0 pt-100 pb-50">
                  <div class="auth-cover-content text-center w-xxl-75 w-sm-90 w-xs-100">
                    <h3 class="display-4 text-white mb-20">Perpustakaan yang buruk membangun koleksi, perpustakaan yang baik membangun layanan, perpustakaan yang hebat membangun komunitas.</h3>
                    <p class="text-white">- R. David Lankes</p>
                  </div>
                </div>
                <div class="bg-overlay bg-trans-dark-50"></div>
              </div>
              <div class="fadeOut item auth-cover-img overlay-wrap" style="background-image:url(<?= base_url('assets/'); ?>/img/bg1.jpg);">
                <div class="auth-cover-info py-xl-0 pt-100 pb-50">
                  <div class="auth-cover-content text-center w-xxl-75 w-sm-90 w-xs-100">
                    <h3 class="display-4 text-white mb-20">Berapa pun biaya perpustakaan kami, harganya murah dibandingkan dengan bangsa yang tidak tahu apa-apa.</h3>
                    <p class="text-white">- Walter Cronkite</p>
                  </div>
                </div>
                <div class="bg-overlay bg-trans-dark-50"></div>
              </div>
            </div>
          </div>
          <div class="col-xl-7 pa-0">
            <div class="auth-form-wrap py-xl-0 py-50">
              <div class="auth-form w-xxl-55 w-xl-75 w-sm-90 w-xs-100">
                <form action="<?= base_url('login/auth'); ?>" method="POST">
                  <h1 class="display-4 mb-10">Selamat Datang:)</h1>
                  <p class="mb-30">Silahkan login untuk meminjam atau mengembalikan buku.</p>
                  <div class="form-group">
                    <input class="form-control" placeholder="Nama Pengguna" type="text" id="user" name="user">
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                      <input class="form-control" placeholder="Kata Sandi" type="password" id="pass" name="pass">
                      <div class="input-group-append">
                        <span class="input-group-text"><span class="feather-icon"><i data-feather="eye-off"></i></span></span>
                      </div>
                    </div>
                  </div>
                  <button class="btn btn-primary btn-block" type="submit">Login</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /Main Content -->

  </div>
  <!-- /HK Wrapper -->

  <!-- jQuery -->
  <script src="<?= base_url('assets/'); ?>/vendors/jquery/dist/jquery.min.js"></script>

  <!-- Bootstrap Core JavaScript -->
  <script src="<?= base_url('assets/'); ?>/vendors/popper.js/dist/umd/popper.min.js"></script>
  <script src="<?= base_url('assets/'); ?>/vendors/bootstrap/dist/js/bootstrap.min.js"></script>

  <!-- Slimscroll JavaScript -->
  <script src="<?= base_url('assets/'); ?>/js/jquery.slimscroll.js"></script>

  <!-- Fancy Dropdown JS -->
  <script src="<?= base_url('assets/'); ?>/js/dropdown-bootstrap-extended.js"></script>

  <!-- Owl JavaScript -->
  <script src="<?= base_url('assets/'); ?>/vendors/owl.carousel/dist/owl.carousel.min.js"></script>

  <!-- FeatherIcons JavaScript -->
  <script src="<?= base_url('assets/'); ?>/js/feather.min.js"></script>

  <!-- Init JavaScript -->
  <script src="<?= base_url('assets/'); ?>/js/init.js"></script>
  <script src="<?= base_url('assets/'); ?>/js/login-data.js"></script>
</body>


</html>