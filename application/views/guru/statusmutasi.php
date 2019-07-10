<div class="container-fluid page-body-wrapper">
    <div class="main-panel" style="background-image: url(http://localhost/pengajuan/assets/img/1.jpg)">
        <div class="content-wrapper">
            <div class="card" style="min-height:300px">
                <div class="card-body">
                    <div class="row">
                        <?php if($mutasi) : 
                                if($mutasi->status == 1): ?>
                                    <div class="col-12">
                                        <h1 class="h3 text-gray-800 mb-4">STATUS PENGAJUAN MUTASI TELAH DITERIMA</h1>


                                        <!-- <p>Cetak berkas mutasi</p> -->




                                    </div>
                                <?php elseif($mutasi->status == 2) : ?>
                                    <div class="col-12">
                                        <h1 class="h3 text-gray-800 mb-4">STATUS PENGAJUAN MUTASI DITOLAK, ULANGI PENGAJUAN!</h1>
                                        <a href="<?= base_url() ?>guru/mutasi">Form Mutasi</a>
                                    </div>
                                <?php else : ?>
                                    <?php if($mutasi->status == 0) : 
                                        // proses pengajuan
                                        // redirect('guru/mutasi');
                                        ?>
                                        
                                        <div class="col-12">
                                            <h1 class="h3 text-gray-800 mb-4">STATUS PENGAJUAN MUTASI MASIH DALAM PROSES PENILAIAN</h1>
                                        </div>
                                    <?php endif ?>
                                <?php endif; ?>

                        <?php else : ?>

                        <div class="col-12">
                            <h1 class="h3 text-gray-800 mb-4">BELUM MELAKUKAN PENGAJUAN MUTASI</h1>
                            <hr>

                            <?php $guru = $this->db->get_where('guru', ['id' => $this->session->userdata('id')])->row(); ?>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="list-group">
                                        <li class="list-group-item active">Data Guru</li>
                                        <li class="list-group-item">NAMA : <?= $guru->nama ?></li>
                                        <li class="list-group-item">NIP LAMA : <?= $guru->nip_lama ?></li>
                                        <li class="list-group-item">NIP BARU : <?= $guru->nip ?></li>
                                        <li class="list-group-item">TTL : <?= $guru->tmp_lahir ?>, <?= $guru->tgl_lahir ?></li>
                                        <li class="list-group-item">JENIS KELAMIN : <?php  if($guru->jns_klmn == 'L') echo "LAKI-LAKI"; else echo 'PEREMPUAN' ?></li>
                                        <li class="list-group-item">STATUS : <?= $guru->status ?></li>
                                        <li class="list-group-item">AGAMA : <?= $guru->agama ?></li>
                                        <li class="list-group-item">TELEPON : <?= $guru->telepon ?></li>
                                        <li class="list-group-item">ALAMAT : <?= $guru->alamat ?></li>
                                        <li class="list-group-item">PENDIDIKAN TERAKHIR : <?= $guru->pendidikan_terakhir ?></li>
                                        <li class="list-group-item">UNIT KERJA : <?= $guru->unit_kerja ?></li>
                                        <li class="list-group-item">JABATAN : <?php $jabatan = $this->db->get_where('jabatan', ['id' => $guru->jabatan_id])->row();
                                        echo $jabatan->nama.' / '. $jabatan->pangkat.' / '.$jabatan->gol_ruang; ?></li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="list-group">
                                        <li class="list-group-item active">Waktu Mutasi</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>