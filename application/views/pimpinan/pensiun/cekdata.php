<div class="container-fluid page-body-wrapper">
    <div class="main-panel" style="background-image: url(http://localhost/pengajuan/assets/img/1.jpg)">
        <div class="content-wrapper">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <h1 class="h3 text-gray-800 mb-4">Data Pegawai yang sudah mengajukan usulan pensiun</h1>
                            <hr>
                            <h5 class="mb-4">Nama Pegawai: <?= $pengajuan->nama ?>, Pensiun pada tanggal: <?= tanggal_id($pengajuan->pensiun) ?></h5>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card shadow mb-4">
                                        <div class="card-header py-3">
                                            Data Pegawai
                                        </div>
                                        <div class="card-body">
                                            <ul>
                                                <li>
                                                    NIP LAMA : <?= $pengajuan->nip_lama ?>
                                                </li>
                                                <li>
                                                    NIP BARU :<?= $pengajuan->nip ?>
                                                </li>
                                                <li>
                                                    TTL : <?= $pengajuan->tmp_lahir ?>, <?= $pengajuan->tgl_lahir ?>
                                                </li>
                                                <li>
                                                    JENIS KELAMIN : <?= $pengajuan->jns_klmn ?>
                                                </li>
                                                <li>
                                                    STATUS : <?= $pengajuan->status ?>
                                                </li>
                                                <li>
                                                    AGAMA : <?= $pengajuan->agama ?>
                                                </li>
                                                <li>
                                                    TELEPON : <?= $pengajuan->telepon ?>
                                                </li>
                                                <li>
                                                    ALAMAT : <?= $pengajuan->alamat ?>
                                                </li>
                                                <li>
                                                    UNIT KERJA : <?= $pengajuan->unit_kerja ?>
                                                </li>
                                                <li>
                                                    PENDIDIKAN TERAKHIR : <?= $pengajuan->pendidikan_terakhir ?>
                                                </li>
                                                <li>
                                                    TH LULUS : <?= $pengajuan->th_lulus ?>
                                                </li>
                                                <li>
                                                    TAMAT PANGKAT : <?= $pengajuan->tamat_pangkat ?>
                                                </li>
                                                <li>
                                                    TAMAT JABATAN : <?= $pengajuan->tamat_jabatan ?>
                                                </li>
                                                <li>
                                                    JABATAN : <?php $jabatan = $this->db->get_where('jabatan',['id' => $pengajuan->jabatan_id])->row();
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
                                            <?php $guru = $this->db->get_where('keluarga',['guru_id' => $pengajuan->guru_id])->result(); ?>
                                            
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

                                            <?php $file = $this->db->get_where('file',['guru_id' => $pengajuan->guru_id, 'jenis' => 1])->result();
                                            // var_dump($file);die;
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
                                                            <a href="<?= base_url('upload_berkas/'.$pengajuan->nama.'/'.$f->file); ?>" target="_blank" class="badge badge-primary">Lihat Berkas</a>
                                                        </td>
                                                        <td>
                                                            <?php if($f->status == 1): ?>
                                                                <div class='alert alert-success'>File valid</div>

                                                            <?php elseif($f->status == 2): ?>
                                                                <div class='alert alert-danger'>File tidak valid</div>

                                                            <?php else : ?>
                                                                <a href="<?= base_url('pimpinan/pengajuan/validasi/1/'.$f->id) ?>" class="badge badge-success">Valid</a>
                                                                
                                                                <a href="<?= base_url('pimpinan/pengajuan/validasi/2/'.$f->id) ?>" class='badge badge-danger'>Tidak Valid</a>

                                                            <?php endif; ?>
                                                        </td>
                                                    </tr>
                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>

                                            <a href="<?= base_url('pimpinan/pensiun/cekdatasave/'.$pengajuan->guru_id) ?>" class="btn btn-primary mt-4">Save</a>
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