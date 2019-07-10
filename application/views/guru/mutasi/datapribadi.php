<div class="container-fluid page-body-wrapper">
    <div class="main-panel" style="background-image: url(http://localhost/pengajuan/assets/img/1.jpg)">
        <div class="content-wrapper">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">

                            <a href="" class="btn btn-primary">Data Pribadi</a>
                            <i class="fas fa-arrow-right"></i>
                            <button type="button" class="btn btn-primary" disabled>Data Keluarga</button>
                            <i class="fas fa-arrow-right"></i>
                            <button type="button" class="btn btn-primary" disabled>Detail Pengajuan</button>
                            <i class="fas fa-arrow-right"></i>
                            <button type="button" class="btn btn-primary" disabled>Upload File</button>
                            <i class="fas fa-arrow-right"></i>
                            <button type="button" class="btn btn-primary" disabled>Konfirmasi</button>

                            <hr>

                            <div class="card">
                                <div class="card-header">
                                    Data Pribadi
                                </div>
                                <div class="card-body">
                                    <form method="post" action="">
                                        <input type="hidden" name="id" value="<?= $guru->id ?>">
                                        <div class="form-group">
                                            <label for="nama">Nama</label>
                                            <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama" autocomplete="off" value="<?= set_value('nama') ? set_value('nama') : $guru->nama; ?>">
                                            <?= form_error('nama','<small class="text-danger">','</small>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="nip">NIP</label>
                                            <input type="text" class="form-control" id="nip" placeholder="NIP" name="nip" autocomplete="off" value="<?= set_value('nip') ? set_value('nip') : $guru->nip; ?>">
                                            <?= form_error('nip','<small class="text-danger">','</small>'); ?>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="tmp_lahir">Tempat Lahir</label>
                                                    <input type="text" class="form-control" id="tmp_lahir" placeholder="Tempat Lahir" name="tmp_lahir" autocomplete="off" value="<?= set_value('tmp_lahir') ? set_value('tmp_lahir') : $guru->tmp_lahir; ?>">
                                                    <?= form_error('tmp_lahir','<small class="text-danger">','</small>'); ?>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="tgl_lahir">Tanggal Lahir</label>
                                                    <input type="date" class="form-control" id="tgl_lahir" placeholder="Tanggal Lahir" name="tgl_lahir" autocomplete="off" value="<?= set_value('tgl_lahir') ? set_value('tgl_lahir') : $guru->tgl_lahir; ?>">
                                                    <?= form_error('tgl_lahir','<small class="text-danger">','</small>'); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="jabatan">Jabatan</label>
                                            <select name="jabatan" class="form-control" id="jabatan">
                                                <option value="">-- Pilih --</option>
                                                <?php foreach($jabatan as $j) : ?>
                                                    <?php if($guru->jabatan_id == $j->id) : ?>
                                                        <option value="<?= $j->id ?>" selected><?= $j->nama ?> / <?= $j->pangkat ?> / <?= $j->gol_ruang ?></option>
                                                    <?php else : ?>
                                                        <option value="<?= $j->id ?>"><?= $j->nama ?> / <?= $j->pangkat ?> / <?= $j->gol_ruang ?></option>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                            </select>
                                            <small class="form-text text-danger"><?= form_error('jabatan') ?></small>
                                        </div>
                                        
                                        <button type="submit" name="simpan" class="btn btn-primary">Selanjutnya</button>
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