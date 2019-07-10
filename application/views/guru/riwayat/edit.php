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
                                            <div class="form-group">
                                                <label for="uraian">Uraian</label>
                                                <input type="text" class="form-control" id="uraian" placeholder="Uraian" name="uraian" autocomplete="off" value="<?= set_value('uraian') ? set_value('uraian') : $riwayat->uraian; ?>">
                                                <?= form_error('uraian','<small class="text-danger">','</small>'); ?>
                                            </div>
                                            <div class="form-group">
                                                <label for="tamat">Tamat</label>
                                                <input class="form-control datepicker" id="tamat" placeholder="tamat" name="tamat" autocomplete="off" value="<?= set_value('tamat') ? set_value('tamat') : tanggal_id($riwayat->tamat); ?>">
                                                <?= form_error('tamat','<small class="text-danger">','</small>'); ?>
                                            </div>
                                            <div class="form-group">
                                                <label for="gol_ruang">Pangkat/Gol</label>
                                                <select name="pangkat" class="form-control" id="pangkat">
                                                    <option value="">-- Pilih --</option>

                                                    <?php
                                                    $pangkat = $this->db->get('jabatan')->result();
                                                    foreach($pangkat as $j) : ?>
                                                        <?php if($riwayat->jabatan_id == $j->id) : ?>
                                                            <option value="<?= $j->id ?>" selected><?= $j->pangkat ?> / <?= $j->gol_ruang ?></option>
                                                        <?php else : ?>
                                                            <option value="<?= $j->id ?>"><?= $j->pangkat ?> / <?= $j->gol_ruang ?></option>
                                                        <?php endif; ?>
                                                    <?php endforeach; ?>
                                                </select>
                                                <small class="form-text text-danger"><?= form_error('jabatan') ?></small>
                                            </div>
                                            <div class="form-group">
                                                <label for="gaji_pokok">Gaji Pokok</label>
                                                <input type="text" class="form-control" id="gaji_pokok" placeholder="Gaji Pokok" name="gaji_pokok" autocomplete="off" value="<?= set_value('gaji_pokok') ? set_value('gaji_pokok') : $riwayat->gaji_pokok; ?>">
                                                <?= form_error('gaji_pokok','<small class="text-danger">','</small>'); ?>
                                            </div>
                                            <div class="form-group">
                                                <label for="pejabat">SK Pejabat</label>
                                                <input type="text" class="form-control" id="pejabat" placeholder="pejabat" name="pejabat" autocomplete="off" value="<?= set_value('pejabat') ? set_value('pejabat') : $riwayat->pejabat; ?>">
                                                <?= form_error('pejabat','<small class="text-danger">','</small>'); ?>
                                            </div>
                                            <div class="form-group">
                                                <label for="nomor">SK Nomor</label>
                                                <input type="text" class="form-control" id="nomor" placeholder="SK Nomor" name="nomor" autocomplete="off" value="<?= set_value('nomor') ? set_value('nomor') : $riwayat->nomor; ?>">
                                                <?= form_error('nomor','<small class="text-danger">','</small>'); ?>
                                            </div>
                                            <div class="form-group">
                                                <label for="tanggal">Tanggal SK</label>
                                                <input class="form-control datepicker" id="tanggal" placeholder="Tanggal SK" name="tanggal" autocomplete="off" value="<?= set_value('tanggal') ? set_value('tanggal') : tanggal_id($riwayat->tanggal); ?>">
                                                <?= form_error('tanggal','<small class="text-danger">','</small>'); ?>
                                            </div>
                                            <button type="submit" name="simpan" class="btn btn-primary">Save</button>
                                            <a href="<?= base_url('guru/riwayatpekerjaan') ?>" class="btn btn-secondary">Kembali</a>
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