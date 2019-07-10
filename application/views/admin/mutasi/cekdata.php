<div class="container-fluid page-body-wrapper">
    <div class="main-panel" style="background-image: url(http://localhost/pengajuan/assets/img/1.jpg)">
        <div class="content-wrapper">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <h1 class="h3 text-gray-800 mb-4">Data Pegawai yang sudah mengajukan mutasi</h1>
                            <hr>
                            <h5 class="mb-4">Nama Pegawai: <?= $mutasi->nama ?></h5>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card shadow mb-4">
                                        <div class="card-header py-3">
                                            Data Pegawai
                                        </div>
                                        <div class="card-body">
                                            <ul>
                                                <li>
                                                    NIP LAMA : <?= $mutasi->nip_lama ?>
                                                </li>
                                                <li>
                                                    NIP BARU :<?= $mutasi->nip ?>
                                                </li>
                                                <li>
                                                    TTL : <?= $mutasi->tmp_lahir ?>, <?= $mutasi->tgl_lahir ?>
                                                </li>
                                                <li>
                                                    JENIS KELAMIN : <?= $mutasi->jns_klmn ?>
                                                </li>
                                                <li>
                                                    STATUS : <?= $mutasi->status ?>
                                                </li>
                                                <li>
                                                    AGAMA : <?= $mutasi->agama ?>
                                                </li>
                                                <li>
                                                    TELEPON : <?= $mutasi->telepon ?>
                                                </li>
                                                <li>
                                                    ALAMAT : <?= $mutasi->alamat ?>
                                                </li>
                                                <li>
                                                    UNIT KERJA : <?= $mutasi->unit_kerja ?>
                                                </li>
                                                <li>
                                                    PENDIDIKAN TERAKHIR : <?= $mutasi->pendidikan_terakhir ?>
                                                </li>
                                                <li>
                                                    TH LULUS : <?= $mutasi->th_lulus ?>
                                                </li>
                                                <li>
                                                    TAMAT PANGKAT : <?= $mutasi->tamat_pangkat ?>
                                                </li>
                                                <li>
                                                    JABATAN : <?php $jabatan = $this->db->get_where('jabatan',['id' => $mutasi->jabatan_id])->row();
                                                    echo $jabatan->nama.' / '.$jabatan->pangkat.' / '.$jabatan->gol_ruang; ?>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card shadow mb-4">
                                        <div class="card-header py-3">
                                            Data Keluarga
                                        </div>
                                        <div class="card-body">
                                            <?php $guru = $this->db->get_where('keluarga',['guru_id' => $mutasi->guru_id])->result(); ?>
                                            
                                            <table class="table table-bordered">
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama</th>
                                                    <th>Lahir</th>
                                                    <th>Status</th>
                                                </tr>
                                                <?php $i=1; foreach($guru as $g) : ?>
                                                    <tr>
                                                        <td><?= $i++ ?></td>
                                                        <td><?= $g->nama ?></td>
                                                        <td><?= $g->tgl_lahir ?></td>
                                                        <td><?= $g->status ?></td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </table>
                                                
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-8">
                                    <div class="card shadow mb-4">
                                        <div class="card-header py-3">
                                            Cek Kelengkapan berkas
                                        </div>
                                        <div class="card-body">

                                            <?php if($this->session->flashdata('flash')) : ?>
                                            <div class="row mt-3">
                                                <div class="col-md-12">
                                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                        Berkas <strong>berhasil</strong> <?= $this->session->flashdata('flash') ?>
                                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php endif; ?>

                                            <?php $file = $this->db->get_where('file',['guru_id' => $mutasi->guru_id, 'jenis' => 2])->result();
                                            ?>
                                            
                                            <table class="table table-hover table-bordered">
                                                <thead>
                                                    <tr>
                                                        <td>Berkas</td>
                                                        <td>File</td>
                                                        <td>Opsi</td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach($file as $f) : ?>
                                                    <tr>
                                                        <td><?= $f->judul ?></td>
                                                        <td>
                                                            <a href="<?= base_url('upload_berkas/'.$mutasi->nama.'/'.$f->file); ?>" target="_blank" class="badge badge-primary">Lihat Berkas</a>
                                                        </td>
                                                        <td>
                                                            <?php if($f->status == 1): ?>
                                                                <div class='alert alert-success'>File valid</div>

                                                            <?php elseif($f->status == 2): ?>
                                                                <div class='alert alert-danger'>File tidak valid</div>

                                                            <?php else : ?>
                                                                <a href="<?= base_url('admin/mutasi/validasi/1/'.$f->id) ?>" class="badge badge-success">Valid</a>
                                                                
                                                                <a href="<?= base_url('admin/mutasi/validasi/2/'.$f->id) ?>" class='badge badge-danger'>Tidak Valid</a>

                                                            <?php endif; ?>
                                                        </td>
                                                    </tr>
                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>

                                            <a href="<?= base_url('admin/mutasi/cekdatasave/'.$mutasi->guru_id) ?>" class="btn btn-primary mt-4">Save</a>
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