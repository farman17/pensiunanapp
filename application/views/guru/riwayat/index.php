<div class="container-fluid page-body-wrapper">
    <div class="main-panel" style="background-image: url(http://localhost/pengajuan/assets/img/1.jpg)">
        <div class="content-wrapper">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <h1 class="h3 text-gray-800 mb-4">Data Riwayat Pekerjaan</h1>

                            <!-- DataTales Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <a href="<?= base_url('guru/riwayatpekerjaan/tambah') ?>" class="btn btn-primary btn-sm btn-rounded">Tambah Data</a>
                                </div>
                                <div class="card-body">

                                    <?php if($this->session->flashdata('flash')) : ?>
                                    <div class="row mt-3">
                                        <div class="col-md-12">
                                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                Data Riwayat Pekerjaan <strong>berhasil</strong> <?= $this->session->flashdata('flash') ?>
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endif; ?>

                                    <?php if($this->session->flashdata('error')) : ?>
                                    <div class="row mt-3">
                                        <div class="col-md-12">
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                <?= $this->session->flashdata('error') ?>
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
                                                <th>Uraian</th>
                                                <th>Tamat</th>
                                                <th>Pangkat/Gol</th>
                                                <th>Gaji Pokok</th>
                                                <th>SK Pejabat</th>
                                                <th>SK Nomor</th>
                                                <th>SK Tanggal</th>
                                                <th>Option</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $i=1; foreach($riwayat as  $r) : ?>
                                                    <tr>
                                                        <td><?= $i++; ?></td>
                                                        <td><?= $r->uraian; ?></td>
                                                        <td><?= tanggal_id($r->tamat); ?></td>

                                                        <?php $jabatan = $this->db->get_where('jabatan',['id' => $r->jabatan_id])->row(); ?>

                                                        <td><?= $jabatan->pangkat.' / '.$jabatan->gol_ruang; ?></td>
                                                        <td><?= $r->gaji_pokok; ?></td>
                                                        <td><?= $r->pejabat; ?></td>
                                                        <td><?= $r->nomor; ?></td>
                                                        <td><?= tanggal_id($r->tanggal); ?></td>
                                                        <td>
                                                            <a href="<?= base_url('guru/riwayatpekerjaan/hapus/'.$r->id) ?>" onclick="return confirm('Hapus?');" class="badge badge-danger float-right tombol-hapus mb-1">Hapus</a>
                                                            <a href="<?= base_url('guru/riwayatpekerjaan/edit/'.$r->id) ?>" class="badge badge-info float-right mr-1">Edit</a>
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