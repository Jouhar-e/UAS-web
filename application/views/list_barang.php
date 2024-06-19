<div class="card border border-primary">
    <div class="card-header bg-primary text-white">List Data Barang</div>
    <div class="card-body">
        <div class="button-container">
            <form action="<?php echo site_url('index.php/caribarang'); ?>" method="post">
                <input class="form-control" type="text" value="<?php echo isset($keyword) ? $keyword : '' ?>" name="keyword" placeholder="Cari Nama Barang"> <button class="btn btn-primary mt-2" type="submit">Cari</button>
                <button class="btn btn-success mt-2" onclick="window.location.href='<?php echo base_url('index.php/barang'); ?>'" type="button">Reset</button>
            </form>
        </div>
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
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>