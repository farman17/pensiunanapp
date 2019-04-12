<div class="container-fluid page-body-wrapper">
    <div class="main-panel" style="background-image: url(http://localhost/pengajuan/assets/img/1.jpg)">
        <div class="content-wrapper">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <h1 class="h3 text-gray-800">Halaman Profil</h1>

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