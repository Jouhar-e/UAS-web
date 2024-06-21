<div class="card border border-primary">
    <div class="card-header bg-primary text-white">
        <?php echo isset($barang) ? 'Edit Barang' : 'Tambah Barang'; ?></div>
    <div class="card-body">
        <form action="<?php echo isset($barang) ?
                            site_url('barang/edit_barang/' . $barang['id']) :
                            site_url('barang/create_barang'); ?>" method="post">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group mt-3">
                        <label for="kode">Kode Barang</label>
                        <input type="text" class="form-control" id="kode" name="kode" value="<?php echo isset($barang) ? $barang['kode'] : set_value('kode'); ?>">
                        <?php echo form_error('kode', '<small class="text-danger">', '</small>'); ?>
                    </div>
                    <div class="form-group mt-3">
                        <label for="barang">Barang</label>
                        <input type="text" class="form-control" id="barang" name="barang" value="<?php echo isset($barang) ? $barang['barang'] : set_value('barang'); ?>">
                        <?php echo form_error('barang', '<small class="text-danger">', '</small>'); ?>
                    </div>
                    <div class="form-group mt-3">
                        <label for="kategori">Kategori</label>
                        <input type="text" class="form-control" id="kategori" name="kategori" value="<?php echo isset($barang) ? $barang['kategori'] : set_value('kategori'); ?>">
                        <?php echo form_error('kategori', '<small class="text-danger">', '</small>'); ?>
                    </div>
                    <div class="form-group mt-3">
                        <label for="deskripsi">Deskripsi</label>
                        <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="<?php echo isset($barang) ? $barang['deskripsi'] : set_value('deskripsi'); ?>">
                        <?php echo form_error('deskripsi', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mt-3">
                        <label for="hargabeli">Harga Beli</label>
                        <input type="text" class="form-control" id="hargabeli" name="hargabeli" value="<?php echo isset($barang) ? $barang['hargabeli'] : set_value('hargabeli'); ?>">
                        <?php echo form_error('hargabeli', '<small class="text-danger">', '</small>'); ?>
                    </div>
                    <div class="form-group mt-3">
                        <label for="hargajual">Harga Jual</label>
                        <input type="text" class="form-control" id="hargajual" name="hargajual" value="<?php echo isset($barang) ? $barang['hargajual'] : set_value('hargajual'); ?>">
                        <?php echo form_error('hargajual', '<small class="text-danger">', '</small>'); ?>
                    </div>
                    <div class="form-group mt-3">
                        <label for="stok">Stok</label>
                        <input type="text" class="form-control" id="stok" name="stok" value="<?php echo isset($barang) ? $barang['stok'] : set_value('stok'); ?>">
                        <?php echo form_error('stok', '<small class="text-danger">', '</small>'); ?>
                    </div>
                    <div class="form-group mt-3">
                        <label for="supplier">Supplier</label>
                        <input type="text" class="form-control" id="supplier" name="supplier" value="<?php echo isset($barang) ? $barang['supplier'] : set_value('supplier'); ?>">
                        <?php echo form_error('supplier', '<small class="text-danger">', '</small>'); ?>
                    </div>
                    <div class="form-group mt-3">
                        <label for="tglmasuk">Tanggal Masuk</label>
                        <input type="date" class="form-control" id="tglmasuk" name="tglmasuk" value="<?php echo isset($barang) ? $barang['tglmasuk'] : set_value('tglmasuk'); ?>">
                        <?php echo form_error('tglmasuk', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
            </div>
            <div class="form-group mt-3">
                <button type="submit" class="w-100 btn btn-primary"><?php echo isset($barang) ? 'Update' : 'Simpan'; ?></button><br>
                <a href="<?php echo site_url('barang/data_barang'); ?>" class="btn w-100 btn-danger mt-3">Batal</a>
            </div>
        </form>
    </div>
</div>