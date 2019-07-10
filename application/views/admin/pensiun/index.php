<div class="container-fluid page-body-wrapper">
    <div class="main-panel" style="background-image: url(http://localhost/pengajuan/assets/img/1.jpg)">
        <div class="content-wrapper">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <h1 class="h3 text-gray-800 mb-4">Data Pensiun</h1>

                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>NIP</th>
                                                    <th>Nama</th>
                                                    <th>Alamat</th>
                                                    <th>Pensiun</th>
                                                    <th>Status</th>
                                                    <th>Opsi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i=1; foreach($pengajuan as $g) : ?>
                                                    <tr>
                                                        <td><?= $i++ ?></td>
                                                        <td><?= $g->nip ?></td>
                                                        <td><?= $g->nama ?></td>
                                                        <td><?= $g->alamat ?></td>
                                                        <td><?= tanggal_id($g->pensiun) ?></td>
                                                        <td>
                                                            <?php 

                                                            $pengajuan = $this->db->get_where('pengajuan',['guru_id' => $g->guru_id])->row();

                                                            

                                                            if($pengajuan->status == 1){
                                                                echo 
                                                                "<span class='alert alert-success'>
                                                                    Pengajuan sukses
                                                                </span>";
                                                            } else if($pengajuan->status == 2){
                                                                echo 
                                                                "<span class='alert alert-danger'>
                                                                    Pengajuan ditolak
                                                                </span>";
                                                            } else {
                                                                echo 
                                                                "<span class='alert alert-warning'>
                                                                    Pengajuan Belum divalidasi
                                                                </span>";
                                                            }

                                                            ?>
                                                        </td>
                                                        <td>
                                                            <a href="<?= base_url('admin/pensiun/hapus/'.$g->id) ?>" onclick="return confirm('Hapus?');" class="badge badge-danger float-right tombol-hapus mb-1">Hapus</a>
                                                            <a href="<?= base_url('admin/pensiun/cekdata/'.$g->id) ?>" class="badge badge-info float-right mr-1">Cek Data</a>
                                                            <a href="<?= base_url('admin/pensiun/cetak/'.$g->id) ?>" class="badge badge-success float-right mr-1">Cetak Data</a>
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