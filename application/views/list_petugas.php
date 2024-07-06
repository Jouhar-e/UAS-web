<div class="card border border-primary">
    <div class="card-header bg-primary text-white">List Data Petugas</div>
    <div class="card-body">
        <div class="button-container">
            <form action="<?php echo site_url('caripetugas'); ?>" method="post">
                <input class="form-control" type="text" value="<?php echo isset($keyword) ? $keyword : '' ?>" name="keyword" placeholder="Cari Nama petugas"> <button class="btn btn-primary mt-2" type="submit">Cari</button>
                <button class="btn btn-success mt-2" onclick="window.location.href='<?php echo base_url('index.php/petugas'); ?>'" type="button">Reset</button>
            </form>
            <button class="btn btn-primary mt-2" onclick="window.location.href='<?php echo base_url('index.php/petugas/create_petugas'); ?>'">Tambah Petugas</button>
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
                        <th>NO</th>
                        <th>Petugas</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($petugas as $ptg) { ?>
                        <tr>
                            <td><?php $no = 1; echo $no++; ?></td>
                            <td><?php echo $ptg['petugas']; ?></td>
                            <td><?php echo $ptg['username']; ?></td>
                            <td><?php echo $ptg['password']; ?></td>
                            <td>
                                <a href="<?php echo site_url('petugas/edit_petugas/' . $ptg['idpetugas']); ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="<?php echo site_url('petugas/delete_petugas/' . $ptg['idpetugas']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>