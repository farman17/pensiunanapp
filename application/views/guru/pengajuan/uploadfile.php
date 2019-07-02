<div class="container-fluid page-body-wrapper">
    <div class="main-panel" style="background-image: url(http://localhost/pengajuan/assets/img/1.jpg)">
        <div class="content-wrapper">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">

                            <button type="button" class="btn btn-primary" disabled>Data Pribadi</button>
                            <i class="fas fa-arrow-right"></i>
                            <button type="button" class="btn btn-primary" disabled>Data Keluarga</button>
                            <i class="fas fa-arrow-right"></i>
                            <button type="button" class="btn btn-primary" disabled>Detail Pengajuan</button>
                            <i class="fas fa-arrow-right"></i>
                            <a href="" class="btn btn-primary">Upload File</a>
                            <i class="fas fa-arrow-right"></i>
                            <button type="button" class="btn btn-primary" disabled>Konfirmasi</button>

                            <hr>

                            <span style="color:red">* Format File hanya boleh berupa : JPG, PNG, dan PDF.</span><br>
                            <span style="color:red">* Ukuran FIle Maksimal 2 Mb.</span>

                            <br><br>
                            <div class="card">
                                <div class="card-header">
                                    Upload File
                                </div>
                                <div class="card-body">
                                    <?php if($this->session->flashdata('flash')) : ?>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                Upload File <strong>berhasil</strong> <?= $this->session->flashdata('flash') ?>
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <?php endif; ?>

                                    <?php if(isset($error)) : ?>
                                    <div class="row mt-3">
                                        <div class="col-md-12">
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                <?= $error ?>
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
                                                <strong><?= $this->session->flashdata('error') ?></strong>
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endif; ?>

                                    <table class="table table-hover table-bordered">
                                        <thead>
                                            <tr>
                                                <td>Berkas</td>
                                                <td>Upload</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $file = $this->db->get_where('file',['guru_id' => $this->session->userdata('id')])->result();

                                            foreach($file as $f) : ?>
                                            <tr>
                                                <td><?= $f->judul; ?></td>
                                                <td>
                                                    <?php if($f->file == "") : ?>
                                                        <form name="form1" id="form1" method="post" action="" enctype="multipart/form-data">        
                                                            <input type="hidden" name="idFile" value="<?= $f->id ?>">
                                                            <input type="file" class="gambar" name="file">
                                                        </form>
                                                    
                                                    <?php else : ?>
                                                        <!-- ubah isi dari field nya dengan tidak_valid agar gambar tidak terdeteksi -->

                                                        <?php if($f->status == 2): ?>
                                                        
                                                            <div class='alert alert-warning'>Berkas Sebelumnya tidak valid, Upload ulang...</div>
                                                            <form name="form1" id="form1" method="post" action="" enctype="multipart/form-data">        
                                                                <input type="hidden" name="idFile" value="<?= $f->id ?>">
                                                                <input type="file" class="gambar" name="file">
                                                            </form>

                                                        <?php else : 
                                                            $guru = $this->db->get_where('guru',['id' => $f->guru_id])->row(); ?>

                                                            <a href="<?= base_url('upload_berkas/'.$guru->nama.'/'.$f->file); ?>" target="_blank" class="badge badge-primary">Lihat Berkas</a>

                                                            <a href="<?= base_url('guru/pengajuan/hapusfile/'.$f->id); ?>" class="badge badge-danger">Hapus</a>

                                                        <?php endif ?>

                                                    <?php endif; ?>
                                                </td>
                                            </tr>

                                            <?php endforeach; ?>
                                            
                                        </tbody>
                                    </table>

                                    <a href="<?= base_url('guru/pengajuan/cekberkas') ?>" class="mt-3 btn btn-primary">Selanjutnya</a>

                                    <a href="<?= base_url('guru/pengajuan/detailpengajuan') ?>" class="mt-3 btn btn-secondary">Sebelumnya</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
