<div class="container-fluid page-body-wrapper">
    <div class="main-panel" style="background-image: url(http://localhost/pengajuan/assets/img/1.jpg)">
        <div class="content-wrapper">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <h1 class="h3 text-gray-800">Halaman Profil</h1>
                            
                            <div class="row">
                                <div class="col-md-5">
                                    <?php if($this->session->flashdata('flash')) : ?>
                                    <div class="row mt-3">
                                        <div class="col-md-12">
                                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                <?= $this->session->flashdata('flash') ?>
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="card mt-4" style="width: 30rem;">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="<?= base_url('assets/img/'.$user['gambar']); ?>" class="card-img" alt="<?= $user['nama'] ?>">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title"><?= $user['nama'] ?></h5>
                                            <p class="card-text">Username: <?= $user['username'] ?></p>
                                            <p class="card-text"><small class="text-muted">Terdaftar Sejak <?= date('d F Y',$user['date_created']) ?></small></p>

                                            <a href="<?= base_url('guru/user/ubahpassword') ?>" class="btn btn-primary btn-sm btn-rounded">Ubah Password</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>