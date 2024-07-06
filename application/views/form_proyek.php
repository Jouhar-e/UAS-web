<div class="card border border-primary">
    <div class="card-header bg-primary text-white">
        <?php echo isset($proyek) ? 'Edit Proyek' : 'Tambah Proyek'; ?></div>
    <div class="card-body">
        <form action="<?php echo isset($proyek) ?
                            site_url('proyek/edit_proyek/' . $proyek['idproyek']) :
                            site_url('proyek/create_proyek'); ?>" method="post">
            <div class="row">
                <div class="form-group mt-3">
                    <label for="proyek">Nama Proyek</label>
                    <input type="text" class="form-control" id="proyek" name="proyek" value="<?php echo isset($proyek) ? $proyek['proyek'] : set_value('proyek'); ?>">
                    <?php echo form_error('proyek', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="form-group mt-3">
                    <label for="deskripsi">Deskripsi Proyek</label>
                    <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"><?php echo isset($proyek) ? $proyek['deskripsi_proyek'] : set_value('deskripsi'); ?></textarea>
                    <?php echo form_error('deskripsi', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="form-group mt-3">
                    <label for="tglmulai">Tanggal Mulai</label>
                    <input type="date" class="form-control" id="tglmulai" name="tglmulai" value="<?php echo isset($proyek) ? $proyek['tanggal_mulai'] : set_value('tglmulai'); ?>">
                    <?php echo form_error('tglmulai', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="form-group mt-3">
                    <label for="tglselesai">Tanggal Selesai</label>
                    <input type="date" class="form-control" id="tglselesai" name="tglselesai" value="<?php echo isset($proyek) ? $proyek['tanggal_selesai'] : set_value('tglselesai'); ?>">
                    <?php echo form_error('tglselesai', '<small class="text-danger">', '</small>'); ?>
                </div>

                <div class="form-group mt-3">
                    <label for="anggaran">Anggaran Proyek</label>
                    <input type="text" class="form-control" id="anggaran" name="anggaran" value="<?php echo isset($proyek) ? $proyek['anggaran_proyek'] : set_value('anggaran'); ?>">
                    <?php echo form_error('anggaran', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="form-group mt-3">
                    <label for="status">Status Proyek</label>
                    <select class="form-control" id="status" name="status">
                        <option value="Aktif" <?php echo isset($proyek) && $proyek['status_proyek'] == 'Aktif' ? 'selected' : ''; ?>>Aktif</option>
                        <option value="Tertunda" <?php echo isset($proyek) && $proyek['status_proyek'] == 'Tertunda' ? 'selected' : ''; ?>>Tertunda</option>
                        <option value="Selesai" <?php echo isset($proyek) && $proyek['status_proyek'] == 'Selesai' ? 'selected' : ''; ?>>Selesai</option>
                    </select>
                    <?php echo form_error('status', '<small class="text-danger">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group mt-3">
                <button type="submit" class="w-100 btn btn-primary"><?php echo isset($proyek) ? 'Update' : 'Simpan'; ?></button><br>
                <a href="<?php echo site_url('proyek/data_proyek'); ?>" class="btn w-100 btn-danger mt-3">Batal</a>
            </div>
        </form>
    </div>
</div>