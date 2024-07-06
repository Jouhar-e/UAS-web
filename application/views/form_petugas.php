<div class="card border border-primary">
    <div class="card-header bg-primary text-white">
        <?php echo isset($petugas) ? 'Edit Petugas' : 'Tambah Petugas'; ?></div>
    <div class="card-body">
        <form action="<?php echo isset($petugas) ?
                            site_url('petugas/edit_petugas/' . $petugas['idpetugas']) :
                            site_url('petugas/create_petugas'); ?>" method="post">
            <div class="">
                <div class="form-group mt-3">
                    <label for="petugas">Petugas</label>
                    <input type="text" class="form-control" id="petugas" name="petugas" value="<?php echo isset($petugas) ? $petugas['petugas'] : set_value('petugas'); ?>">
                    <?php echo form_error('petugas', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="form-group mt-3">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username" value="<?php echo isset($petugas) ? $petugas['username'] : set_value('username'); ?>">
                    <?php echo form_error('username', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="form-group mt-3">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" value="<?php echo isset($petugas) ? $petugas['password'] : set_value('password'); ?>">
                    <?php echo form_error('password', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="form-group mt-3">
                    <button type="submit" class="w-100 btn btn-primary"><?php echo isset($petugas) ? 'Update' : 'Simpan'; ?></button><br>
                    <a href="<?php echo site_url('petugas/data_petugas'); ?>" class="btn w-100 btn-danger mt-3">Batal</a>
                </div>
        </form>
    </div>
</div>