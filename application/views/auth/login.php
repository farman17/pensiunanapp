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
  <link rel="shortcut icon" href="<?= base_url(); ?>assets/images/favicon.png" />
</head>

<body style="background-image : url('http://localhost/pengajuan/assets/img/1.jpg')">
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="">
        <div class="content-wrapper d-flex align-items-center auth">
          <div class="row w-100">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light p-5">
                <h4 class="text-center">LOG IN</h4>
                <h6 class="font-weight-light text-center">Aplikasi Pengajuan pensiun dan mutasi guru</h6>
                
                <?php 
                  // pesan error/sukses
                  if($this->session->flashdata('pesan'))
                  {
                    echo '<br>'.$this->session->flashdata('pesan');
                  }
                ?>

                <form class="pt-3" method="POST" action="">
                  <div class="form-group">
                      <label for="username">Masukkan Username</label>
                      <input type="text" class="form-control form-control-lg" id="username" placeholder="" name="username" autocomplete="off" value="<?= set_value('username') ?>">
                      <?= form_error('username','<small class="text-danger">','</small>'); ?>
                  </div>
                  <div class="form-group">
                      <label for="password">Masukkan Password</label>
                      <input type="password" class="form-control form-control-lg" placeholder="" name="password" autocomplete="off">
                      <?= form_error('password','<small class="text-danger">','</small>'); ?>
                  </div>
                  <div class="form-group">
                      <button type="submit" name="simpan" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">
                      LOG IN
                      </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
