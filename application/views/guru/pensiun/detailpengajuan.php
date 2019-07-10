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
                                            <input class="form-control datepicker" id="mksd"  name="mksd" autocomplete="off" value="<?= set_value('mksd') ? set_value('mksd') : tanggal_id($pengajuan['mksd']); ?>">
                                            <?= form_error('mksd','<small class="text-danger">','</small>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="pspp">Pendidikan Sebagai Pengangkatan Pertama</label>
                                            <select name="pspp" class="form-control" id="pspp">
                                                <option value="">-- Pilih --</option>
                                                <?php foreach($pspp as $s) : ?>
                                                    <?php if($pengajuan['pspp'] == $s) : ?>
                                                        <option value="<?= $s ?>" selected><?= $s ?></option>
                                                    <?php else : ?>
                                                        <option value="<?= $s ?>"><?= $s ?></option>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                            </select>
                                            <small class="form-text text-danger"><?= form_error('pspp') ?></small>
                                        </div>
                                        <div class="form-group">
                                            <label for="mulai_masuk_pns">Mulai masuk PNS</label>
                                            <input class="form-control datepicker" id="mulai_masuk_pns" placeholder="Mulai masuk PNS" name="mulai_masuk_pns" autocomplete="off" value="<?= set_value('mulai_masuk_pns') ? set_value('mulai_masuk_pns') : tanggal_id($pengajuan['mulai_masuk_pns']); ?>">
                                            <?= form_error('mulai_masuk_pns','<small class="text-danger">','</small>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="tamat_pangkat">Tamat Pangkat</label>
                                            <input class="form-control datepicker" id="tamat_pangkat" placeholder="Tamat Pangkat" name="tamat_pangkat" autocomplete="off" value="<?= set_value('tamat_pangkat') ? set_value('tamat_pangkat') : $pengajuan['tamat_pangkat']; ?>">
                                            <?= form_error('tamat_pangkat','<small class="text-danger">','</small>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="tamat_jabatan">Tamat Jabatan</label>
                                            <input class="form-control datepicker" id="tamat_jabatan" placeholder="Tamat Jabatan" name="tamat_jabatan" autocomplete="off" value="<?= set_value('tamat_jabatan') ? set_value('tamat_jabatan') : $pengajuan['tamat_jabatan']; ?>">
                                            <?= form_error('tamat_jabatan','<small class="text-danger">','</small>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat">Alamat Sesudah Pensiun</label>
                                            <textarea name="alamat" id="alamat" class="form-control" autocomplete="off"><?= set_value('alamat') ? set_value('alamat') : $pengajuan['alamat']; ?></textarea>
                                            <?= form_error('alamat','<small class="text-danger">','</small>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="keterangan">Keterangan Pengajuan</label>
                                            <input type="text" class="form-control" id="keterangan" placeholder="Keterangan Pengajuan" name="keterangan" autocomplete="off" value="<?= set_value('keterangan') ? set_value('keterangan') : $pengajuan['keterangan']; ?>">
                                            <?= form_error('keterangan','<small class="text-danger">','</small>'); ?>
                                        </div>
                                        
                                        <button type="submit" name="simpan" class="btn btn-primary">Selanjutnya</button>
                                        <a href="<?= base_url('guru/pensiun/datakeluarga') ?>" class="btn btn-secondary">Sebelumnya</a>
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