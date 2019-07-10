<div class="container-fluid page-body-wrapper">
    <div class="main-panel" style="background-image: url(http://localhost/pengajuan/assets/img/1.jpg)">
        <div class="content-wrapper">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">

                            <button type="button" class="btn btn-primary" disabled>Data Pribadi</button>
                            <i class="fas fa-arrow-right"></i>
                            <a href="" class="btn btn-primary">Data Keluarga</a>
                            <i class="fas fa-arrow-right"></i>
                            <button type="button" class="btn btn-primary" disabled>Detail Pengajuan</button>
                            <i class="fas fa-arrow-right"></i>
                            <button type="button" class="btn btn-primary" disabled>Upload File</button>
                            <i class="fas fa-arrow-right"></i>
                            <button type="button" class="btn btn-primary" disabled>Konfirmasi</button>

                            <hr>

                            <div class="card">
                                <div class="card-header">
                                    Data Keluarga
                                </div>
                                <div class="card-body">
                                    <?php if($this->session->flashdata('flash')) : ?>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                Data Keluarga <strong>berhasil</strong> <?= $this->session->flashdata('flash') ?>
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <?php endif; ?>

                                    <a href="<?= base_url('admin/guru/tambah') ?>" class="btn btn-primary btn-sm btn-rounded" data-toggle="modal" data-target="#tambahkeluarga" >Tambah Data Keluarga</a>
                                    <br><br>

                                    <div class="table-responsive">
                                        <table class="table table-bordered" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama</th>
                                                    <th>TGL Lahir</th>
                                                    <th>Status</th>
                                                    <th>Opsi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i=1; foreach($keluarga as $k) : ?>
                                                    <tr>
                                                        <td><?= $i++ ?></td>
                                                        <td><?= $k->nama ?></td>
                                                        <td><?= $k->tgl_lahir ?></td>
                                                        <td><?= $k->status ?></td>
                                                        <td>
                                                            <a href="<?= base_url('guru/pensiun/hapusdatakeluarga/'.$k->id) ?>" onclick="return confirm('Hapus?');" class="badge badge-danger float-right tombol-hapus mb-1">Hapus</a>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                                <?php if(!$keluarga) : ?>
                                                <tr>
                                                    <td colspan="5" align="center">Data Kosong</td>
                                                </tr>
                                                <?php endif; ?>
                                            </tbody>
                                        </table>
                                    </div>

                                    <a href="<?= base_url('guru/pensiun/detailpengajuan') ?>" class="mt-3 btn btn-primary">Selanjutnya</a>

                                    <a href="<?= base_url('guru/pensiun') ?>" class="mt-3 btn btn-secondary">Sebelumnya</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- tambah data keluarga -->
<div class="modal fade" id="tambahkeluarga" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="" enctype="multipart/form-data" method="post" accept-charset="utf-8">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalLabel">Tambah data keluarga</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama" autocomplete="off" value="<?= set_value('nama'); ?>">
                    <?= form_error('nama','<small class="text-danger">','</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="tgl_lahir">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="tgl_lahir" placeholder="Tanggal Lahir" name="tgl_lahir" autocomplete="off" value="<?= set_value('tgl_lahir'); ?>">
                    <?= form_error('tgl_lahir','<small class="text-danger">','</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <select name="status" class="form-control" id="status">
                        <option value="">-- Pilih --</option>
                        <?php foreach($statuskeluarga as $s) : ?>
                            <?php if(set_value('status') == $s) : ?>
                                <option value="<?= $s ?>" selected><?= $s ?></option>
                            <?php else : ?>
                                <option value="<?= $s ?>"><?= $s ?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
                    <small class="form-text text-danger"><?= form_error('status') ?></small>
                </div>
            </div>
            <div class="modal-footer">
                <input type="submit" name="mysubmit" value="Simpan" class="btn btn-success">
                <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
            </div>
            </div>
        </form>
    </div>
</div>
