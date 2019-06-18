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
                            <a href="" class="btn btn-primary">Detail Pengajuan</a>
                            <i class="fas fa-arrow-right"></i>
                            <button type="button" class="btn btn-primary" disabled>Upload File</button>
                            <i class="fas fa-arrow-right"></i>
                            <button type="button" class="btn btn-primary" disabled>Konfirmasi</button>

                            <hr>

                            <div class="card">
                                <div class="card-header">
                                    Detail Pengajuan
                                </div>
                                <div class="card-body">
                                    <form method="post" action="">
                                        <div class="form-group">
                                            <label for="nomor_karpeg">Nomor Karpeg</label>
                                            <input type="text" class="form-control" id="nomor_karpeg" placeholder="Nomor Karpeg" name="nomor_karpeg" autocomplete="off" value="<?= set_value('nomor_karpeg') ? set_value('nomor_karpeg') : $pengajuan['nomor_karpeg']; ?>">
                                            <?= form_error('nomor_karpeg','<small class="text-danger">','</small>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="gaji_pokok_terakhir">Gaji Pokok Terakhir</label>
                                            <input type="text" class="form-control" id="gaji_pokok_terakhir" placeholder="Gaji Pokok Terakhir" name="gaji_pokok_terakhir" autocomplete="off" value="<?= set_value('gaji_pokok_terakhir') ? set_value('gaji_pokok_terakhir') : $pengajuan['gaji_pokok_terakhir']; ?>">
                                            <?= form_error('gaji_pokok_terakhir','<small class="text-danger">','</small>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="mksd">Masa Kerja Sebelum Diangkat</label>
                                            <input type="date" class="form-control" id="mksd" placeholder="dd/mm/yyyy" name="mksd" autocomplete="off" value="<?= set_value('mksd') ? set_value('mksd') : $pengajuan['mksd']; ?>">
                                            <?= form_error('mksd','<small class="text-danger">','</small>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="pspp">Pendidikan Sebagai Pengangkatan Pertama</label>
                                            <input type="text" class="form-control" id="pspp" placeholder="Pendidikan Sebagai Pengangkatan Pertama" name="pspp" autocomplete="off" value="<?= set_value('pspp') ? set_value('pspp') : $pengajuan['pspp']; ?>">
                                            <?= form_error('pspp','<small class="text-danger">','</small>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="mulai_masuk_pns">Mulai masuk PNS</label>
                                            <input type="date" class="form-control" id="mulai_masuk_pns" placeholder="Mulai masuk PNS" name="mulai_masuk_pns" autocomplete="off" value="<?= set_value('mulai_masuk_pns') ? set_value('mulai_masuk_pns') : $pengajuan['mulai_masuk_pns']; ?>">
                                            <?= form_error('mulai_masuk_pns','<small class="text-danger">','</small>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat">Alamat Sesudah Pensiun</label>
                                            <textarea name="alamat" id="alamat" class="form-control" autocomplete="off"><?= set_value('alamat') ? set_value('alamat') : $pengajuan['alamat']; ?></textarea>
                                            <?= form_error('alamat','<small class="text-danger">','</small>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="gaji_pokok">Gaji Pokok</label>
                                            <input type="text" class="form-control" id="gaji_pokok" placeholder="Gaji Pokok" name="gaji_pokok" autocomplete="off" value="<?= set_value('gaji_pokok') ? set_value('gaji_pokok') : ''; ?>">
                                            <?= form_error('gaji_pokok','<small class="text-danger">','</small>'); ?>
                                        </div>
                                        
                                        <button type="submit" name="simpan" class="btn btn-primary">Selanjutnya</button>
                                        <a href="<?= base_url('guru/pengajuan/datakeluarga') ?>" class="btn btn-secondary">Sebelumnya</a>
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