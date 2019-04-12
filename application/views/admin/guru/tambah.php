<div class="container-fluid page-body-wrapper">
    <div class="main-panel" style="background-image: url(http://localhost/pengajuan/assets/img/1.jpg)">
        <div class="content-wrapper">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <h1 class="h3 text-gray-800 mb-4">Tambah Data Guru</h1>
                            
                            <div class="row mb-5">
                                <div class="col-md-7 mt-3">
                                    <div class="card">
                                        <div class="card-header">
                                            Form Data Guru
                                        </div>
                                        <div class="card-body">
                                            <form method="post" action="">
                                                <div class="form-group">
                                                    <label for="nip_lama">NIP Lama</label>
                                                    <input type="text" class="form-control" id="nip_lama" placeholder="NIP Lama" name="nip_lama" autocomplete="off" value="<?= set_value('nip_lama'); ?>">
                                                    <?= form_error('nip_lama','<small class="text-danger">','</small>'); ?>
                                                </div>
                                                <div class="form-group">
                                                    <label for="nip">NIP</label>
                                                    <input type="text" class="form-control" id="nip" placeholder="NIP" name="nip" autocomplete="off" value="<?= set_value('nip'); ?>">
                                                    <?= form_error('nip','<small class="text-danger">','</small>'); ?>
                                                </div>
                                                <div class="form-group">
                                                    <label for="nama">Nama</label>
                                                    <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama" autocomplete="off" value="<?= set_value('nama'); ?>">
                                                    <?= form_error('nama','<small class="text-danger">','</small>'); ?>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="tmp_lahir">Tempat Lahir</label>
                                                            <input type="text" class="form-control" id="tmp_lahir" placeholder="Tempat Lahir" name="tmp_lahir" autocomplete="off" value="<?= set_value('tmp_lahir'); ?>">
                                                            <?= form_error('tmp_lahir','<small class="text-danger">','</small>'); ?>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="tgl_lahir">Tanggal Lahir</label>
                                                            <input type="date" class="form-control" id="tgl_lahir" placeholder="Tanggal Lahir" name="tgl_lahir" autocomplete="off" value="<?= set_value('tgl_lahir'); ?>">
                                                            <?= form_error('tgl_lahir','<small class="text-danger">','</small>'); ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="jns_klmn">Jenis Kelamin</label>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="jns_klmn" id="L" value="L" <?php if(set_value('jns_klmn') == 'L') echo "checked";  ?>>
                                                        <label class="form-check-label" for="L">
                                                            Laki-Laki
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="jns_klmn" id="P" value="P" <?php if(set_value('jns_klmn') == 'P') echo "checked";  ?>>
                                                        <label class="form-check-label" for="P">
                                                            Perempuan
                                                        </label>
                                                    </div>
                                                    <?= form_error('jns_klmn','<small class="text-danger">','</small>'); ?>
                                                </div>
                                                <div class="form-group">
                                                    <label for="status">Status</label>
                                                    <select name="status" class="form-control" id="status">
                                                        <option value="">-- Pilih --</option>
                                                        <?php foreach($status as $s) : ?>
                                                            <?php if(set_value('status') == $s) : ?>
                                                                <option value="<?= $s ?>" selected><?= $s ?></option>
                                                            <?php else : ?>
                                                                <option value="<?= $s ?>"><?= $s ?></option>
                                                            <?php endif; ?>
                                                        <?php endforeach; ?>
                                                    </select>
                                                    <small class="form-text text-danger"><?= form_error('status') ?></small>
                                                </div>
                                                <div class="form-group">
                                                    <label for="jabatan">Jabatan</label>
                                                    <select name="jabatan" class="form-control" id="jabatan">
                                                        <option value="">-- Pilih --</option>
                                                        <?php foreach($jabatan as $j) : ?>
                                                            <?php if(set_value('jabatan') == $j->id) : ?>
                                                                <option value="<?= $j->id ?>" selected><?= $j->nama ?> / <?= $j->pangkat ?> / <?= $j->gol_ruang ?></option>
                                                            <?php else : ?>
                                                                <option value="<?= $j->id ?>"><?= $j->nama ?> / <?= $j->pangkat ?> / <?= $j->gol_ruang ?></option>
                                                            <?php endif; ?>
                                                        <?php endforeach; ?>
                                                    </select>
                                                    <small class="form-text text-danger"><?= form_error('jabatan') ?></small>
                                                </div>
                                                <div class="form-group">
                                                    <label for="tamat_pangkat">Tamat Pangkat</label>
                                                    <input type="date" class="form-control" id="tamat_pangkat" placeholder="Tamat Pangkat" name="tamat_pangkat" autocomplete="off" value="<?= set_value('tamat_pangkat'); ?>">
                                                    <?= form_error('tamat_pangkat','<small class="text-danger">','</small>'); ?>
                                                </div>
                                                <div class="form-group">
                                                    <label for="tamat_jabatan">Tamat Jabatan</label>
                                                    <input type="date" class="form-control" id="tamat_jabatan" placeholder="Tamat Jabatan" name="tamat_jabatan" autocomplete="off" value="<?= set_value('tamat_jabatan'); ?>">
                                                    <?= form_error('tamat_jabatan','<small class="text-danger">','</small>'); ?>
                                                </div>
                                                <div class="form-group">
                                                    <label for="agama">Agama</label>
                                                    <select name="agama" class="form-control" id="agama">
                                                        <option value="">-- Pilih --</option>
                                                        <?php foreach($agama as $a) : ?>
                                                            <?php if(set_value('agama') == $a) : ?>
                                                                <option value="<?= $a ?>" selected><?= $a ?></option>
                                                            <?php else : ?>
                                                                <option value="<?= $a ?>"><?= $a ?></option>
                                                            <?php endif; ?>
                                                        <?php endforeach; ?>
                                                    </select>
                                                    <small class="form-text text-danger"><?= form_error('agama') ?></small>
                                                </div>
                                                <div class="form-group">
                                                    <label for="telepon">Telepon</label>
                                                    <input type="text" class="form-control" id="telepon" placeholder="Telepon" name="telepon" autocomplete="off" value="<?= set_value('telepon'); ?>">
                                                    <?= form_error('telepon','<small class="text-danger">','</small>'); ?>
                                                </div>
                                                <div class="form-group">
                                                    <label for="alamat">Alamat</label>
                                                    <textarea name="alamat" id="alamat" class="form-control" autocomplete="off"><?= set_value('alamat'); ?></textarea>
                                                    <?= form_error('alamat','<small class="text-danger">','</small>'); ?>
                                                </div>
                                                <div class="form-group">
                                                    <label for="unit_kerja">Unit Kerja</label>
                                                    <input type="text" class="form-control" id="unit_kerja" placeholder="Unit Kerja" name="unit_kerja" autocomplete="off" value="<?= set_value('unit_kerja'); ?>">
                                                    <?= form_error('unit_kerja','<small class="text-danger">','</small>'); ?>
                                                </div>
                                                <div class="form-group">
                                                    <label for="pendidikan_terakhir">Pendidikan Terakhir</label>
                                                    <input type="text" class="form-control" id="pendidikan_terakhir" placeholder="Pendidikan Terakhir" name="pendidikan_terakhir" autocomplete="off" value="<?= set_value('pendidikan_terakhir'); ?>">
                                                    <?= form_error('pendidikan_terakhir','<small class="text-danger">','</small>'); ?>
                                                </div>
                                                <div class="form-group">
                                                    <label for="th_lulus">Tahun Lulus</label>
                                                    <input type="text" class="form-control" id="th_lulus" placeholder="Tahun Lulus" name="th_lulus" autocomplete="off" value="<?= set_value('th_lulus'); ?>">
                                                    <?= form_error('th_lulus','<small class="text-danger">','</small>'); ?>
                                                </div>
                                                <div class="form-group">
                                                    <label for="kecamatan">Kecamatan</label>
                                                    <input type="text" class="form-control" id="kecamatan" placeholder="Kecamatan" name="kecamatan" autocomplete="off" value="<?= set_value('kecamatan'); ?>">
                                                    <?= form_error('kecamatan','<small class="text-danger">','</small>'); ?>
                                                </div>
                                                <button type="submit" name="simpan" class="btn btn-primary">Save</button>
                                                <a href="<?= base_url('admin/guru') ?>" class="btn btn-secondary">Kembali</a>
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