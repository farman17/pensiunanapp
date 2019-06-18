<div class="container-fluid page-body-wrapper">
    <div class="main-panel" style="background-image: url(http://localhost/pengajuan/assets/img/1.jpg)">
        <div class="content-wrapper">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <h1 class="h3 text-gray-800 mb-4">Data Guru</h1>

                            <?php if($this->session->flashdata('flash')) : ?>
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        Data Guru <strong>berhasil</strong> <?= $this->session->flashdata('flash') ?>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <?php endif; ?>
                            
                            <!-- IMPORT DATA DARI EXCEL -->
                            <!-- <?php if($this->session->flashdata('upload_error')) : ?>
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <?= $this->session->flashdata('upload_error') ?>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <?php endif; ?>

                            <button type="submit"  data-toggle="modal" data-target="#exampleModal-4" class="btn btn-success">Import data dari Excel</button>
                            <hr><br> -->

                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <a href="<?= base_url('admin/guru/tambah') ?>" class="btn btn-primary btn-sm btn-rounded">Tambah Data</a>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>NIP</th>
                                                    <th>Nama</th>
                                                    <th>TTL</th>
                                                    <th>L/P</th>
                                                    <th>Status</th>
                                                    <th>Alamat</th>
                                                    <th>Opsi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i=1; foreach($guru as $g) : ?>
                                                    <tr>
                                                        <td><?= $i++ ?></td>
                                                        <td><?= $g->nip ?></td>
                                                        <td><?= $g->nama ?></td>
                                                        <td><?= $g->tmp_lahir ?>, <?= $g->tgl_lahir ?></td>
                                                        <td><?= $g->jns_klmn ?></td>
                                                        <td><?= $g->status ?></td>
                                                        <td><?= $g->alamat ?></td>
                                                        <td>
                                                            <a href="<?= base_url('admin/guru/hapus/'.$g->id) ?>" onclick="return confirm('Hapus?');" class="badge badge-danger float-right tombol-hapus mb-1">Hapus</a>
                                                            <a href="<?= base_url('admin/guru/edit/'.$g->id) ?>" class="badge badge-info float-right mr-1 mb-1">Edit</a>
                                                            <a href="<?= base_url('admin/guru/detail/'.$g->id) ?>" class="badge badge-success float-right mr-1">Detail</a>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
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

<!-- IMPORT DATA DARI EXCEL -->
<!-- <div class="modal fade" id="exampleModal-4" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="<?=base_url(); ?>admin/guru/proses" enctype="multipart/form-data" method="post" accept-charset="utf-8">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalLabel">Import data dari Exel</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="hidden" name="judul" value="lanjut">
                <label for="file">Pilih File (.xls)</label>
                <div class="form-group">
                    <input type="file" name="file" id="file">
                </div>
            </div>
            <div class="modal-footer">
                <input type="submit" name="mysubmit" value="Upload" class="btn btn-success">
                <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
            </div>
            </div>
        </form>
    </div>
</div> -->