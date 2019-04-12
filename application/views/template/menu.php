<div class="horizontal-menu">
  <nav class="navbar top-navbar col-lg-12 col-12 p-0">
    <div class="container">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo text-white" href="#"><strong>APLIKASI PENGAJUAN</strong></a>
        <a class="navbar-brand brand-logo-mini text-white" href="#"><strong>APLIKASI PENGAJUAN</strong></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="fas fa-bell fa-fw mx-0"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header"> Pemberitahuan</p>
              
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-primary">
                    <i class="fas fa-file-alt text-white mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">Pengajuan baru</h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    12-04-2019
                  </p>
                </div>
              </a>
            </div>
          </li>

          <li class="nav-item nav-profile dropdown mr-0 mr-sm-3">
            <a class="nav-link" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="<?= base_url('assets/img/'.$this->session->userdata('gambar')); ?>" />
              <span class="nav-profile-name mr-2"><?= $this->session->userdata('nama') ?></span>  
              <i class="fas fa-sort-down mb-2"></i>            
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item" href="<?= base_url('admin/user') ?>">
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
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('admin/home'); ?>">
            <i class="fas fa-tachometer-alt menu-icon"></i>
            <span class="menu-title">Dashboard</span>
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
          <a href="#" class="nav-link">
            <i class="fas fa-user menu-icon"></i>
            <span class="menu-title">Apps</span>
            <i class="fas fa-sort-down ml-2"></i></a>
            <div class="submenu">
              <ul class="submenu-item">
                <li class="nav-item"><a class="nav-link" href="../apps/email.html">Email</a></li>
                <li class="nav-item"><a class="nav-link" href="../apps/calendar.html">Calendar</a></li>
                <li class="nav-item"><a class="nav-link" href="../apps/todo.html">Todo List</a></li>
                <li class="nav-item"><a class="nav-link" href="../apps/gallery.html">Gallery</a></li>
              </ul>
            </div>
        </li>
      </ul>
    </div>
  </nav>
</div>