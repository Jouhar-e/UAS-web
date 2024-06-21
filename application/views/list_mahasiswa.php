<div class="card border border-primary">
    <div class="card-header bg-primary text-white">List Data
        Mahasiswa</div>
    <div class="card-body">
        <div class="button-container">
            <form action="<?php echo site_url('mahasiswa/search_mahasiswa'); ?>" method="post">
                <div class="row">
                    <div class="col-md-10 col-sm-8">
                        <input class="form-control" type="text" value="<?php echo isset($keyword) ? $keyword : ''; ?>" name="keyword" placeholder="Cari Nama Mahasiswa">
                    </div>
                    <div class="col-md-1 col-sm-2">
                        <button class="btn btn-primary mt-2 btn-block" type="submit">Cari</button>
                    </div>
                    <div class="col-md-1 col-sm-2">
                        <button class="btn btn-success mt-2 btn-block" onclick="window.location.href='<?php echo base_url('index.php/mahasiswa/data_mahasiswa'); ?>'" type="button">Reset</button>
                    </div>
                </div>
            </form>
            <button class="btn btn-primary mt-2" onclick="window.location.href='<?php echo base_url('index.php/mahasiswa/create_mahasiswa'); ?>'">Tambah Mahasiswa</button>
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
                        <th class="text-center">ID</th>
                        <th class="text-center">Nama</th>
                        <th class="text-center">NPM</th>
                        <th class="text-center">Angkatan</th>
                        <th class="text-center">Kelas</th>
                        <th class="text-center">Alamat</th>
                        <th class="text-center">Mata Kuliah Favorit</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Jenis Kelamin</th>
                        <th class="text-center">Tanggal Lahir</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <?php foreach ($mahasiswa as $mhs) { ?>
                    <tbody>
                        <tr>
                            <td><?php echo $mhs['id']; ?></td>
                            <td><?php echo $mhs['nama']; ?></td>
                            <td><?php echo $mhs['npm']; ?></td>
                            <td><?php echo $mhs['angkatan']; ?></td>
                            <td><?php echo $mhs['kelas']; ?></td>
                            <td><?php echo $mhs['alamat']; ?></td>
                            <td><?php echo $mhs['mata_kuliah_favorit']; ?></td>
                            <td><?php echo $mhs['email']; ?></td>
                            <td><?php echo $mhs['jenis_kelamin']; ?></td>
                            <td><?php echo $mhs['tanggal_lahir']; ?></td>
                            <td>
                                <a href="<?php echo site_url('mahasiswa/edit_mahasiswa/' . $mhs['id']); ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="<?php echo site_url('mahasiswa/delete_mahasiswa/' . $mhs['id']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                <?php } ?>
            </table>
        </div>
    </div>
</div>