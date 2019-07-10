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
                            <button type="button" class="btn btn-primary" disabled>Upload File</button>
                            <i class="fas fa-arrow-right"></i>
                            <a href="" class="btn btn-primary">Konfirmasi</a>

                            <hr>

                            <div class="card">
                                <div class="card-header">
                                    Pernyataan Pengajuan
                                </div>
                                <div class="card-body">
                                    <form class="forms-sample" action="" method="post">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group ml-4">
                                                    <label for="pengembalian_inventaris">
                                                        <input type="checkbox" name="pengembalian_inventaris" value="1" class="form-check-input" id="pengembalian_inventaris">
                                                        Dengan ini saya telah mengembalikan seluruh barang inventaris milik negara setelah diberhentikan dengan hormat sebagai pegawai negeri sipil sesuai peraturan perundang-undangan yang berlaku
                                                        <i class="input-helper"></i>
                                                    </label>
                                                </div>
                                                <div class="form-group ml-4">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" name="status" value="1"  class="form-check-input">
                                                        Demikian Data Ini dibuat dengan sebenarnya.
                                                        <i class="input-helper"></i>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <button type="submit" name="simpan" class="mt-3 btn btn-primary">Ajukan Pengajuan Mutasi</button>

                                        <a href="<?= base_url('guru/mutasi') ?>" class="mt-3 btn btn-secondary">Cek data kembali</a>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
