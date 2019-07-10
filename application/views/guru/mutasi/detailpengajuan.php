<div class="container-fluid page-body-wrapper">
    <div class="main-panel" style="background-image: url(http://localhost/pengajuan/assets/img/1.jpg)">
        <div class="content-wrapper">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">

                            <button type="button" class="btn btn-primary" disabled>Data Pribadi</button>
                            <i class="fas fa-arrow-right"></i>
                            <button type="button" class="btn btn-primary" disabled>Data Keluarga</button>
                            <i class="fas fa-arrow-right"></i>
                            <a href="" class="btn btn-primary">Detail Pengajuan Mutasi</a>
                            <i class="fas fa-arrow-right"></i>
                            <button type="button" class="btn btn-primary" disabled>Upload File</button>
                            <i class="fas fa-arrow-right"></i>
                            <button type="button" class="btn btn-primary" disabled>Konfirmasi</button>

                            <hr>

                            <div class="card">
                                <div class="card-header">
                                    Detail Pengajuan Mutasi
                                </div>
                                <div class="card-body">
                                    <form method="post" action="">
                                        <div class="form-group">
                                            <label for="tamat_pangkat">Tamat Pangkat</label>
                                            <input class="form-control datepicker" id="tamat_pangkat" placeholder="Tamat Pangkat" name="tamat_pangkat" autocomplete="off" value="<?= set_value('tamat_pangkat') ? set_value('tamat_pangkat') : tanggal_id($mutasi['tamat_pangkat']); ?>">
                                            <?= form_error('tamat_pangkat','<small class="text-danger">','</small>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="gaji_pokok">Gaji Pokok</label>
                                            <input type="text" class="form-control" id="gaji_pokok" placeholder="Gaji Pokok" name="gaji_pokok" autocomplete="off" value="<?= set_value('gaji_pokok') ? set_value('gaji_pokok') : $mutasi['gaji_pokok']; ?>">
                                            <?= form_error('gaji_pokok','<small class="text-danger">','</small>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="surat_keputusan_pejabat">Surat keputusan pejabat</label>
                                            <input type="text" class="form-control" id="surat_keputusan_pejabat" placeholder="Surat keputusan pejabat" name="surat_keputusan_pejabat" autocomplete="off" value="<?= set_value('surat_keputusan_pejabat') ? set_value('surat_keputusan_pejabat') : $mutasi['surat_keputusan_pejabat']; ?>">
                                            <?= form_error('surat_keputusan_pejabat','<small class="text-danger">','</small>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="nomor_keputusan">Nomor Keputusan</label>
                                            <input type="text" class="form-control" id="nomor_keputusan" placeholder="Nomor Keputusan" name="nomor_keputusan" autocomplete="off" value="<?= set_value('nomor_keputusan') ? set_value('nomor_keputusan') : $mutasi['nomor_keputusan']; ?>">
                                            <?= form_error('nomor_keputusan','<small class="text-danger">','</small>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="tanggal_keputusan">Tanggal Keputusan</label>
                                            <input class="form-control datepicker" id="tanggal_keputusan" placeholder="Nomor Keputusan" name="tanggal_keputusan" autocomplete="off" value="<?= set_value('tanggal_keputusan') ? set_value('tanggal_keputusan') : tanggal_id($mutasi['tanggal_keputusan']); ?>">
                                            <?= form_error('tanggal_keputusan','<small class="text-danger">','</small>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="tempat_mutasi">Tempat mutasi</label>
                                            <input type="text" class="form-control" id="tempat_mutasi" placeholder="tempat_mutasi Pengajuan" name="tempat_mutasi" autocomplete="off" value="<?= set_value('tempat_mutasi') ? set_value('tempat_mutasi') : $mutasi['tempat_mutasi']; ?>">
                                            <?= form_error('tempat_mutasi','<small class="text-danger">','</small>'); ?>
                                        </div>
                                        
                                        <button type="submit" name="simpan" class="btn btn-primary">Selanjutnya</button>
                                        <a href="<?= base_url('guru/mutasi/datakeluarga') ?>" class="btn btn-secondary">Sebelumnya</a>
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