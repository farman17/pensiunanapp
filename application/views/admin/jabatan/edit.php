<div class="container-fluid page-body-wrapper">
    <div class="main-panel" style="background-image: url(http://localhost/pengajuan/assets/img/1.jpg)">
        <div class="content-wrapper">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <h1 class="h3 text-gray-800 mb-4">Edit Data Jabatan</h1>
                            
                            <div class="row mb-5">
                                <div class="col-md-7 mt-3">
                                    <div class="card">
                                        <div class="card-header">
                                            Form Data Jabatan
                                        </div>
                                        <div class="card-body">
                                            <form method="post" action="">
                                                <input type="hidden" name="id" value="<?= $jabatan->id; ?>" >
                                                <div class="form-group">
                                                    <label for="nama">Jabatan</label>
                                                    <input type="text" class="form-control" id="nama" placeholder="Jabatan" name="nama" autocomplete="off" value="<?= set_value('nama') ? set_value('nama') : $jabatan->nama; ?>">
                                                    <?= form_error('nama','<small class="text-danger">','</small>'); ?>
                                                </div>
                                                <div class="form-group">
                                                    <label for="pangkat">Pangkat</label>
                                                    <input type="text" class="form-control" id="pangkat" placeholder="Pangkat" name="pangkat" autocomplete="off" value="<?= set_value('pangkat') ? set_value('pangkat') : $jabatan->pangkat; ?>">
                                                    <?= form_error('pangkat','<small class="text-danger">','</small>'); ?>
                                                </div>
                                                <div class="form-group">
                                                    <label for="gol_ruang">Gol. Ruang</label>
                                                    <input type="text" class="form-control" id="gol_ruang" placeholder="Gol. Ruang" name="gol_ruang" autocomplete="off" value="<?= set_value('gol_ruang') ? set_value('gol_ruang') : $jabatan->gol_ruang; ?>">
                                                    <?= form_error('gol_ruang','<small class="text-danger">','</small>'); ?>
                                                </div>
                                                <button type="submit" name="simpan" class="btn btn-primary">Save</button>
                                                <a href="<?= base_url('admin/jabatan') ?>" class="btn btn-secondary">Kembali</a>
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