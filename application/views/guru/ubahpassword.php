<div class="container-fluid page-body-wrapper">
    <div class="main-panel" style="background-image: url(http://localhost/pengajuan/assets/img/1.jpg)">
        <div class="content-wrapper">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <h1 class="h3 text-gray-800 mb-4">Ubah Password</h1>
                            
                            <div class="row mb-5">
                                <div class="col-md-7 mt-3">
                                    <?php if($this->session->flashdata('flash')) : ?>
                                    <div class="row mt-3">
                                        <div class="col-md-12">
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                <?= $this->session->flashdata('flash') ?>
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endif; ?>

                                    <div class="card">
                                        <div class="card-header">
                                            Form Ubah Password
                                        </div>
                                        <div class="card-body">
                                            <form method="post" action="<?= base_url('guru/user/ubahpassword') ?>">
                                                <div class="form-group">
                                                    <label for="passwordlama">Password Lama</label>
                                                    <input type="password" class="form-control" id="passwordlama" placeholder="Password Lama" name="passwordlama" autocomplete="off" value="">
                                                    <?= form_error('passwordlama','<small class="text-danger">','</small>'); ?>
                                                </div>
                                                <div class="form-group">
                                                    <label for="passwordbaru">Password Baru</label>
                                                    <input type="password" class="form-control" id="passwordbaru" placeholder="Password Lama" name="passwordbaru" autocomplete="off" value="">
                                                    <?= form_error('passwordbaru','<small class="text-danger">','</small>'); ?>
                                                </div>
                                                <div class="form-group">
                                                    <label for="ulangipassword">Ulangi Password baru</label>
                                                    <input type="password" class="form-control" id="ulangipassword" placeholder="Ulangi Password baru" name="ulangipassword" autocomplete="off" value="">
                                                </div>
                                                <button type="submit" name="simpan" class="btn btn-primary">Save</button>
                                                <a href="<?= base_url('guru/user') ?>" class="btn btn-secondary">Kembali</a>
                                            </form>
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