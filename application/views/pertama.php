<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  
  <title>Aplikasi pengajuan pensiun dan mutasi</title>

  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/horizontal-layout/style.css">
  <link href="<?= base_url(); ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="<?= base_url(); ?>assets/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/vendors/css/vendor.bundle.addons.css">
  <link rel="shortcut icon" href="<?= base_url(); ?>assets/images/favicon.png" />

  <!-- Custom styles for this page -->
  <link href="<?= base_url(); ?>assets/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

</head>

<body>
  <div class="container-scroller">
    
    <!-- Menu -->
    <div class="horizontal-menu">
        <nav class="navbar top-navbar col-lg-12 col-12 p-0">
            <div class="container">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo text-white" href="<?= base_url('') ?>"><strong><img class="mb-2" src="<?= base_url('assets/img/logo.png') ?>" alt=""> APLIKASI PENGAJUAN PENSIUN DAN MUTASI GURU</strong></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item nav-profile dropdown mr-0 mr-sm-3">
                        <a class="nav-link" href="<?= base_url('dashboard') ?>" >
                        <span class="nav-profile-name mr-2">Dashboard</span>  
                        </a>
                    </li>
                    <li class="nav-item nav-profile dropdown mr-0 mr-sm-3">
                        <a class="nav-link" href="<?= base_url('auth') ?>">
                        <span class="nav-profile-name mr-2">Login</span>  
                        </a>
                    </li>
                    <li class="nav-item nav-profile dropdown mr-0 mr-sm-3">
                        <a class="nav-link" href="<?= base_url('auth/register') ?>">
                        <span class="nav-profile-name mr-2">Registrasi</span>  
                        </a>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="horizontal-menu-toggle">
                <span class="mdi mdi-menu"></span>
                </button>
            </div>
            </div>
        </nav>
    </div>

    <!-- Isi konten -->
    <div class="container-fluid page-body-wrapper">
        <div class="main-panel" style="background-image: url(http://localhost/pengajuan/assets/img/1.jpg)">
            <div class="content-wrapper">
                
            </div>
        </div>
    </div>
    
    <footer class="footer">
      <div class="w-100 clearfix">
        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2019 <a href="#" target="_blank">APK</a>. All rights reserved.</span>
      </div>
    </footer>
    
  </div>

  <script src="<?= base_url(); ?>assets/vendors/js/vendor.bundle.base.js"></script>
  <script src="<?= base_url(); ?>assets/vendors/js/vendor.bundle.addons.js"></script>
  <!-- <script src="<?= base_url(); ?>assets/js/data-table.js"></script> -->

  <!-- Page level plugins -->
  <script src="<?= base_url(); ?>assets/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="<?= base_url(); ?>assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="<?= base_url(); ?>assets/js/demo/datatables-demo.js"></script>

  <script>
      $('.gambar').on('change', function(){
          let fileName = $(this).val().split('\\').pop();

          if( fileName ){
              document.getElementById('form1').submit();
          }

      });
  </script>


</body>
</html>
