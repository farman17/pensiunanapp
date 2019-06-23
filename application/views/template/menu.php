<div class="horizontal-menu">
  <nav class="navbar top-navbar col-lg-12 col-12 p-0">
    <div class="container">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo text-white" href="<?= base_url('') ?>"><strong><img class="mb-2" src="<?= base_url('assets/img/logo.png') ?>" alt=""> APLIKASI PENGAJUAN PENSIUN DAN MUTASI GURU</strong></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <ul class="navbar-nav navbar-nav-right">

        <?php $link = $this->uri->segment(1,0); ?>
          <li class="nav-item nav-profile dropdown mr-0 mr-sm-3">
            <a class="nav-link" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="<?= base_url('assets/img/'.$this->session->userdata('gambar')); ?>" />
              <span class="nav-profile-name mr-2"><?= $this->session->userdata('nama') ?></span>  
              <i class="fas fa-sort-down mb-2"></i>            
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item" href="<?= base_url($link.'/user') ?>">
                <i class="fas fa-fw fa-cog text-primary"></i>
                Profil
              </a>
              <a class="dropdown-item" href="<?= base_url() ?>auth/logout">
                <i class="fas fa-sign-out-alt text-primary"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="horizontal-menu-toggle">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </div>
  </nav>
  <nav class="bottom-navbar">
    <div class="container">
      <ul class="nav page-navigation">

        <?php if($link == "admin") : ?>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('admin/home'); ?>">
            <i class="fas fa-tachometer-alt menu-icon"></i>
            <span class="menu-title">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('admin/cekdata'); ?>">
            <i class="fas fa-users menu-icon"></i>
            <span class="menu-title">Cek Data</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('admin/guru'); ?>">
            <i class="fas fa-users menu-icon"></i>
            <span class="menu-title">Data Guru</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('admin/jabatan'); ?>">
            <i class="fas fa-users menu-icon"></i>
            <span class="menu-title">Data Jabatan</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('admin/pengajuan'); ?>">
            <i class="fas fa-list-ul menu-icon"></i>
            <span class="menu-title">Data Pengajuan</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('admin/pensiun'); ?>">
            <i class="fas fa-list-ul menu-icon"></i>
            <span class="menu-title">Hasil Pengajuan</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('admin/pengguna'); ?>">
            <i class="fas fa-users menu-icon"></i>
            <span class="menu-title">Data Pengguna</span>
          </a>
        </li>

        <?php elseif($link == "guru") : ?>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('guru/home'); ?>">
            <i class="fas fa-tachometer-alt menu-icon"></i>
            <span class="menu-title">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('guru/pengajuan'); ?>">
            <i class="fas fa-list-ul menu-icon"></i>
            <span class="menu-title">Pengajuan</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('guru/status'); ?>">
            <i class="fas fa-list-ul menu-icon"></i>
            <span class="menu-title">Status Pengajuan</span>
          </a>
        </li>
        <?php endif; ?>
      </ul>
    </div>
  </nav>
</div>