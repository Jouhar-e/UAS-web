<div class="card border border-primary">
    <div class="card-header bg-primary text-white">List Data Barang</div>
    <div class="card-body">
        <div class="button-container">
            <form action="<?php echo site_url('caribarang'); ?>" method="post">
                <input class="form-control" type="text" value="<?php echo isset($keyword) ? $keyword : '' ?>" name="keyword" placeholder="Cari Nama Barang"> <button class="btn btn-primary mt-2" type="submit">Cari</button>
                <button class="btn btn-success mt-2" onclick="window.location.href='<?php echo base_url('index.php/barang'); ?>'" type="button">Reset</button>
            </form>
            <button class="btn btn-primary mt-2" onclick="window.location.href='<?php echo base_url('index.php/barang/create_barang'); ?>'">Tambah Mahasiswa</button>
        </div>
        <?php if ($this->session->flashdata('success')) : ?>
            <div class="alert alert-success mt-3" role="alert">
                <?php echo $this->session->flashdata('success'); ?>
            </div>
        <?php endif; ?>
        <?php if ($this->session->flashdata('error')) : ?>
            <div class="alert alert-danger mt-3" role="alert">
                <?php echo $this->session->flashdata('error'); ?>
            </div>
        <?php endif; ?>
        <div class="table-responsive">
            <table class="table table-bordered table-hover mt-3">
                <thead>
                    <tr class="table-primary">
                        <th>ID</th>
                        <th>Kode Barang</th>
                        <th>Barang</th>
                        <th>Kategori</th>
                        <th>Deskripsi</th>
                        <th>Harga Beli</th>
                        <th>Harga Jual</th>
                        <th>Stok Barang</th>
                        <th>Supplier Barang</th>
                        <th>Tanggal Masuk</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($barang as $brg) { ?>
                        <tr>
                            <td><?php echo $brg['id']; ?></td>
                            <td><?php echo $brg['kode']; ?></td>
                            <td><?php echo $brg['barang']; ?></td>
                            <td><?php echo $brg['kategori']; ?></td>
                            <td><?php echo $brg['deskripsi']; ?></td>
                            <td><?php echo $brg['hargabeli']; ?></td>
                            <td><?php echo $brg['hargajual']; ?></td>
                            <td><?php echo $brg['stok']; ?></td>
                            <td><?php echo $brg['supplier']; ?></td>
                            <td><?php echo $brg['tglmasuk']; ?></td>
                            <td>
                                <a href="<?php echo site_url('barang/edit_barang/' . $brg['id']); ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="<?php echo site_url('barang/delete_barang/' . $brg['id']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>