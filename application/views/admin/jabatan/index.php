<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 mb-4">
            <div class="card border-left-primary shadow h-100">
                <!-- judul -->
                <div class="card-body">
                    <h1 class="h3 text-gray-800 mb-4">Data Jabatan</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <a href="<?= base_url('admin/jabatan/tambah') ?>" class="btn btn-primary">Tambah Data</a>
                        </div>
                        <div class="card-body">

                            <?php if($this->session->flashdata('flash')) : ?>
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        Data Jabatan <strong>berhasil</strong> <?= $this->session->flashdata('flash') ?>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <?php endif; ?>

                            <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Jabatan</th>
                                    <th>Pangkat</th>
                                    <th>Gol. Ruang</th>
                                    <th>Option</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1; foreach($jabatan as  $j) : ?>
                                        <tr>
                                            <td><?= $i++; ?></td>
                                            <td><?= $j->nama; ?></td>
                                            <td><?= $j->pangkat; ?></td>
                                            <td><?= $j->gol_ruang; ?></td>
                                            <td>
                                                <a href="<?= base_url('admin/jabatan/hapus/'.$j->id) ?>" onclick="return confirm('Hapus?');" class="badge badge-danger float-right tombol-hapus mb-1">Hapus</a>
                                                <a href="<?= base_url('admin/jabatan/edit/'.$j->id) ?>" class="badge badge-info float-right mr-1">Edit</a>
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
<!-- /.container-fluid -->