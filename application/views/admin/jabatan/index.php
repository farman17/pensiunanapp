<div class="container-fluid page-body-wrapper">
    <div class="main-panel" style="background-image: url(http://localhost/pengajuan/assets/img/1.jpg)">
        <div class="content-wrapper">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <h1 class="h3 text-gray-800 mb-4">Data Jabatan</h1>

                            <!-- DataTales Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <a href="<?= base_url('admin/jabatan/tambah') ?>" class="btn btn-primary btn-sm btn-rounded">Tambah Data</a>
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
                                        <table id="order-listing" class="table">
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
    </div>
</div>