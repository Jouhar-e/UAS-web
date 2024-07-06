<?php
$no = 1;
?>
<div class="card border border-primary">
    <div class="card-header bg-primary text-white">List Data Proyek</div>
    <div class="card-body">
        <div class="button-container">
            <form action="<?php echo site_url('proyek/search_proyek'); ?>" method="post">
                <div class="row">
                    <div class="col-12 col-md-10 mb-2 mb-md-0">
                        <input class="form-control" type="text" value="<?php echo isset($keyword) ? $keyword : ''; ?>" name="keyword" placeholder="Cari Nama Proyek">
                    </div>
                    <div class="col-12 col-md-1 mb-2 mb-md-0">
                        <button class="btn btn-primary btn-block" type="submit">Cari</button>
                    </div>
                    <div class="col-12 col-md-1">
                        <button class="btn btn-success btn-block" onclick="window.location.href='<?php echo base_url('index.php/proyek/data_proyek'); ?>'" type="button">Reset</button>
                    </div>
                </div>
            </form>

            <button class="btn btn-primary mt-2" onclick="window.location.href='<?php echo base_url('index.php/proyek/create_proyek'); ?>'">Tambah Proyek</button>
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
                        <th class="text-center">No</th>
                        <th class="text-center">Nama Proyek</th>
                        <th class="text-center">Deskripsi</th>
                        <th class="text-center">Tanggal Mulai</th>
                        <th class="text-center">Tanggal Selesai</th>
                        <th class="text-center">Anggaran</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <?php foreach ($proyek as $p) { ?>
                    <tbody>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $p['proyek']; ?></td>
                            <td><?php echo $p['deskripsi_proyek']; ?></td>
                            <td><?php echo $p['tanggal_mulai']; ?></td>
                            <td><?php echo $p['tanggal_selesai']; ?></td>
                            <td><?php echo $p['anggaran_proyek']; ?></td>
                            <td><?php echo $p['status_proyek']; ?></td>
                            <td>
                                <a href="<?php echo site_url('proyek/edit_proyek/' . $p['idproyek']); ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="<?php echo site_url('proyek/delete_proyek/' . $p['idproyek']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                <?php } ?>
            </table>
        </div>
    </div>
</div>