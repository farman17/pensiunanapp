<div class="container-fluid page-body-wrapper">
    <div class="main-panel" style="background-image: url(http://localhost/pengajuan/assets/img/1.jpg)">
        <div class="content-wrapper">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <h1 class="h3 text-gray-800 mb-4">Data Pegawai yang harus mengajukan usulan pensiun</h1>

                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <form action="" method="post" class="form-inline">
                                        <label for="tahunke">Jangka Pensiun </label>
                                        <select name="tahunke" id="tahunke" class="form-control ml-3">
                                            <option value="1" <?php if($tahunke == 1) : ?> selected <?php endif; ?>>1th ke depan</option>
                                            <option value="2" <?php if($tahunke == 2) : ?> selected <?php endif; ?>>2th ke depan</option>
                                            <option value="3" <?php if($tahunke == 3) : ?> selected <?php endif; ?>>3th ke depan</option>
                                            <option value="4" <?php if($tahunke == 4) : ?> selected <?php endif; ?>>4th ke depan</option>
                                            <option value="5" <?php if($tahunke == 5) : ?> selected <?php endif; ?>>5th ke depan</option>
                                        </select>
                                        <button type="submit" class="ml-3 btn btn-primary btn-sm btn-rounded">Cek</button>
                                    </form>
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
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i=1; foreach($guru as $g) : ?>
                                                    <tr>
                                                        <td><?= $i++ ?></td>
                                                        <td><?= $g->nip ?></td>
                                                        <td><?= $g->nama ?></td>
                                                        <td><?= $g->alamat ?></td>
                                                        <td><?= $g->pensiun ?></td>
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