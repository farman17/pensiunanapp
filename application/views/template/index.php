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
</head>

<body>
  <div class="container-scroller">
    
    <!-- Menu -->
    <?php $this->load->view('template/menu.php'); ?>

    <!-- Isi konten -->
    <?php
    if(isset($_view))
    {
        $this->load->view($_view);
    } else 
    {
        echo '
        <div class="container-fluid">
            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800">Halaman tidak ditemukan!</h1>
        </div>
        ';
    }
    ?>
    
    <footer class="footer">
      <div class="w-100 clearfix">
        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2019 <a href="#" target="_blank">APK</a>. All rights reserved.</span>
      </div>
    </footer>
    
  </div>

  <script src="<?= base_url(); ?>assets/vendors/js/vendor.bundle.base.js"></script>
  <script src="<?= base_url(); ?>assets/vendors/js/vendor.bundle.addons.js"></script>
  <script src="<?= base_url(); ?>assets/js/data-table.js"></script>

</body>
</html>
