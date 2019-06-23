<div class="container-fluid page-body-wrapper">
    <div class="main-panel" style="background-image: url(http://localhost/pengajuan/assets/img/1.jpg)">
        <div class="content-wrapper">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <h1 class="h3 text-gray-800 mb-4">Edit Data Pengguna</h1>
                            
                            <div class="row mb-5">
                                <div class="col-md-7 mt-3">
                                    <div class="card">
                                        <div class="card-header">
                                            Form Data Pengguna
                                        </div>
                                        <div class="card-body">
                                            <form method="post" action="">
                                                <input type="hidden" name="id" value="<?= $pengguna->id; ?>" >
                                                <div class="form-group">
                                                    <label for="username">Username</label>
                                                    <input type="text" class="form-control" id="username" placeholder="Username" name="username" autocomplete="off" value="<?= set_value('username') ? set_value('username') : $pengguna->username; ?>" readonly="">
                                                    <?= form_error('username','<small class="text-danger">','</small>'); ?>
                                                </div>
                                                <div class="form-group">
                                                    <label for="nama">Nama Pengguna</label>
                                                    <input type="text" class="form-control" id="nama" placeholder="Nama Pengguna" name="nama" autocomplete="off" value="<?= set_value('nama') ? set_value('nama') : $pengguna->nama; ?>">
                                                    <?= form_error('nama','<small class="text-danger">','</small>'); ?>
                                                </div>
                                                <div class="form-group">
                                                    <label for="role_id">Level</label>
                                                    <select name="role_id" class="form-control" id="role_id">
                                                        <option value="">-- Pilih --</option>
                                                        <?php foreach($role as $r) : ?>
                                                            <?php if($pengguna->role_id == $r->id) : ?>
                                                                <option value="<?= $r->id ?>" selected><?= $r->nama ?></option>
                                                            <?php else : ?>
                                                                <option value="<?= $r->id ?>"><?= $r->nama ?></option>
                                                            <?php endif; ?>
                                                        <?php endforeach; ?>
                                                    </select>
                                                    <small class="form-text text-danger"><?= form_error('role_id') ?></small>
                                                </div>
                                                <button type="submit" name="simpan" class="btn btn-primary">Save</button>
                                                <a href="<?= base_url('admin/pengguna') ?>" class="btn btn-secondary">Kembali</a>
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
    </div>
</div>