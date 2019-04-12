<div class="container-fluid page-body-wrapper">
    <div class="main-panel" style="background-image: url(http://localhost/pengajuan/assets/img/1.jpg)">
        <div class="content-wrapper">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <h1 class="h3 text-gray-800 mb-4">Detail Data Guru</h1>
                            <div class="row">
                            <div class="col-md-7 mt-3">
                                <div class="card" style="width: 30rem;">
                                    <div class="card-body">
                                        <h5 class="card-title"><?= $guru->nama ?></h5>
                                        <p class="card-text">
                                            NIP LAMA : <?= $guru->nip_lama ?> <br>
                                            NIP : <?= $guru->nip ?> <br>
                                            Nama : <?= $guru->nama ?> <br>
                                            TTL : <?= $guru->tmp_lahir.', '.$guru->tgl_lahir ?> <br>
                                            Jenis Kelamin : <?= $guru->jns_klmn ?> <br>
                                            Status : <?= $guru->status ?> <br>
                                            
                                            <?php $jabatan = $this->db->get_where('jabatan',['id' => $guru->jabatan_id])->row(); ?>
                                            Pangkat : <?= $jabatan->pangkat ?> / <?= $jabatan->gol_ruang ?> <br>
                                            Tamat Pangkat : <?= $guru->tamat_pangkat ?> <br>
                                            Jabatan : <?= $jabatan->nama ?> <br>
                                            Tamat Jabatan : <?= $guru->tamat_jabatan ?> <br>
                                            Agama : <?= $guru->agama ?> <br>
                                            Telepon : <?= $guru->telepon ?> <br>
                                            Alamat : <?= $guru->alamat ?> <br>
                                            Unit Kerja : <?= $guru->unit_kerja ?> <br>
                                            Pensiun : <?= $guru->pensiun ?> <br>
                                            Pendidikan Terakhir : <?= $guru->pendidikan_terakhir ?> <br>
                                            Tahun Lulus : <?= $guru->th_lulus ?> <br>
                                            Kecamatan : <?= $guru->kecamatan ?>
                                        </p>
                                        <a href="<?= base_url('admin/guru') ?>" class="card-link">Kembali</a>
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