<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="icon" href="<?php echo site_url('assets/bootswatch5/docs/_assets/img/logo.svg'); ?>" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link href="<?= base_url('assets/bootstrap/css/bootstrap.css') ?>" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
        <div class="container">
            <a class="navbar-brand" <?php echo $active_menu == 'home' ? 'active' : ''; ?>" href="<?= site_url('home') ?>">Web Proyek</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link <?php echo $active_menu == 'data_mahasiswa' ? 'active' : ''; ?>" href="<?= site_url('proyek') ?>">Data Proyek</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo $active_menu == 'data_barang' ? 'active' : ''; ?>" href="<?= site_url('petugas') ?>">Data Petugas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo $active_menu == 'tentang' ? 'active' : ''; ?>" href="<?= site_url('tentang') ?>">Tentang</a>
                    </li>
                </ul>
            </div>
            <a class="nav-link text-white <?php echo $active_menu == 'login' ? 'active' : ''; ?>" href="<?= site_url('login') ?>">Logout</a>
        </div>
    </nav>
    <div class="container mt-5 mb-5">
        <?php echo $content; ?>
        <footer class="d-flex flex-wrap justify-content-between align-itemscenter py-3 my-4 border-top border-2">

            <div class="col-md-4 d-flex align-items-center">
                <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decorationnone lh-1">
                    <!-- <img width="30" height="24" src="<?php echo site_url('assets/bootswatch-5/docs/_assets/img/logo-dark.svg'); ?>"> -->
                </a>
                <span class="text-muted">©2024 Praktikum TIF, <b>AHMAD JAUHARI</b> | 1412220090</span>
            </div>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</html>
</body>

</html>