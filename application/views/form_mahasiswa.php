<div class="card border border-primary">
    <div class="card-header bg-primary text-white">
        <?php echo isset($mahasiswa) ? 'Edit Mahasiswa' : 'Tambah Mahasiswa'; ?></div>
    <div class="card-body">
        <form action="<?php echo isset($mahasiswa) ?
                            site_url('mahasiswa/edit_mahasiswa/' . $mahasiswa['id']) :
                            site_url('mahasiswa/create_mahasiswa'); ?>" method="post">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group mt-3">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="<?php echo isset($mahasiswa) ? $mahasiswa['nama'] : set_value('nama'); ?>">
                        <?php echo form_error('nama', '<small class="text-danger">', '</small>'); ?>
                    </div>
                    <div class="form-group mt-3">
                        <label for="npm">NPM</label>
                        <input type="text" class="form-control" id="npm" name="npm" value="<?php echo isset($mahasiswa) ? $mahasiswa['npm'] : set_value('npm'); ?>">
                        <?php echo form_error('npm', '<small class="text-danger">', '</small>'); ?>
                    </div>
                    <div class="form-group mt-3">
                        <label for="angkatan">Angkatan</label>
                        <input type="text" class="form-control" id="angkatan" name="angkatan" value="<?php echo isset($mahasiswa) ? $mahasiswa['angkatan'] : set_value('angkatan'); ?>">
                        <?php echo form_error('angkatan', '<small class="text-danger">', '</small>'); ?>
                    </div>
                    <div class="form-group mt-3">
                        <label for="kelas">Kelas</label>
                        <input type="text" class="form-control" id="kelas" name="kelas" value="<?php echo isset($mahasiswa) ? $mahasiswa['kelas'] : set_value('kelas'); ?>">
                        <?php echo form_error('kelas', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mt-3">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" id="alamat" name="alamat" rows="3"><?php echo isset($mahasiswa) ? $mahasiswa['alamat'] : set_value('alamat'); ?></textarea>
                        <?php echo form_error('alamat', '<small class="text-danger">', '</small>'); ?>
                    </div>
                    <div class="form-group mt-3">
                        <label for="mata_kuliah_favorit">Mata Kuliah
                            Favorit</label>
                        <input type="text" class="form-control" id="mata_kuliah_favorit" name="mata_kuliah_favorit" value="<?php echo isset($mahasiswa) ? $mahasiswa['mata_kuliah_favorit'] : set_value('mata_kuliah_favorit'); ?>">
                        <?php echo form_error('mata_kuliah_favorit', '<small class="text-danger">', '</small>'); ?>
                    </div>
                    <div class="form-group mt-3">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="<?php echo isset($mahasiswa) ? $mahasiswa['email'] : set_value('email'); ?>">
                        <?php echo form_error('email', '<small class="text-danger">', '</small>'); ?>
                    </div>
                    <div class="form-group mt-3">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                            <option value="Laki-laki" <?php echo isset($mahasiswa) && $mahasiswa['jenis_kelamin'] == 'Laki-laki' ? 'selected' : ''; ?>>Laki-laki</option>
                            <option value="Perempuan" <?php echo isset($mahasiswa) && $mahasiswa['jenis_kelamin'] == 'Perempuan' ? 'selected' : ''; ?>>Perempuan</option>
                        </select>
                        <?php echo form_error('jenis_kelamin', '<small class="text-danger">', '</small>'); ?>
                    </div>
                    <div class="form-group mt-3">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="<?php echo isset($mahasiswa) ? $mahasiswa['tanggal_lahir'] : set_value('tanggal_lahir'); ?>">
                        <?php echo form_error('tanggal_lahir', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
            </div>
            <div class="form-group mt-3">
                <button type="submit" class="w-100 btn btn-primary"><?php echo isset($mahasiswa) ? 'Update' : 'Simpan'; ?></button><br>
                <a href="<?php echo site_url('mahasiswa/data_mahasiswa'); ?>" class="btn w-100 btn-danger mt-3">Batal</a>
            </div>
        </form>
    </div>
</div>