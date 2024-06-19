-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 21 Bulan Mei 2024 pada 04.37
-- Versi server: 8.0.30
-- Versi PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci-tugas03`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id` int NOT NULL,
  `kode` varchar(20) NOT NULL,
  `barang` varchar(100) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `hargabeli` float NOT NULL,
  `hargajual` float NOT NULL,
  `stok` int NOT NULL,
  `supplier` varchar(100) NOT NULL,
  `tglmasuk` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id`, `kode`, `barang`, `kategori`, `deskripsi`, `hargabeli`, `hargajual`, `stok`, `supplier`, `tglmasuk`) VALUES
(1, 'A505', 'Amplas', 'Bangunan', 'Untuk memperhalus barang yang diinginkan', 10000, 12000, 50, 'P.T. Sinar Emas', '2024-05-19'),
(2, 'A506', 'Cat', 'Bangunan', 'Untuk keawetan warna rumah yang bagus', 50000, 60000, 50, 'P.T. Surya Emas', '2024-05-19'),
(3, 'A507', 'Bata', 'Bangunan', 'Untuk keawetan bangunan rumah yang bagus', 3000, 10000, 50, 'P.T. Surya Emas', '2024-05-19'),
(4, 'A508', 'Kuas', 'Bangunan', 'Untuk mempermudah pengecatan', 3000, 10000, 50, 'P.T. Surya Emas', '2024-05-19'),
(5, 'A508', 'Obeng Plus', 'Bangunan', 'Untuk pertukangan', 3000, 10000, 50, 'P.T. Surya Emas', '2024-05-19'),
(6, 'A509', 'Obeng Minus', 'Bangunan', 'Untuk pertukangan', 3000, 10000, 50, 'P.T. Surya Emas', '2024-05-19'),
(7, 'A510', 'Tali', 'Bangunan', 'Sangat kuat', 3000, 10000, 50, 'P.T. Surya Emas', '2024-05-19'),
(8, 'A511', 'Bata', 'Bangunan', 'Untuk keawetan bangunan rumah yang bagus', 3000, 10000, 50, 'P.T. Surya Emas', '2024-05-19'),
(9, 'A512', 'Kuas', 'Bangunan', 'Untuk mempermudah pengecatan', 3000, 10000, 50, 'P.T. Surya Emas', '2024-05-19'),
(10, 'A513', 'Obeng Plus', 'Bangunan', 'Untuk pertukangan', 3000, 10000, 50, 'P.T. Surya Emas', '2024-05-19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int NOT NULL,
  `nama` varchar(100) NOT NULL,
  `npm` varchar(20) NOT NULL,
  `angkatan` int NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `alamat` text,
  `mata_kuliah_favorit` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `npm`, `angkatan`, `kelas`, `alamat`, `mata_kuliah_favorit`, `email`, `jenis_kelamin`, `tanggal_lahir`) VALUES
(1, 'Ahmad Bin Jafar', '1412220022', 2022, 'A', 'Jl. Sudirman No. 10 RT 01 RW 02 Desa Sumber Kec. Jenu, Tuban', 'Pemrograman Web', 'ahmad@example.com', 'Laki-laki', '2000-05-15'),
(2, 'Budi Prasetyo', '1412220023', 2022, 'B', 'Jl. Pahlawan No. 5 RT 02 RW 03 Desa Karangasem Kec. Bancar, Tuban', 'Sistem Basis Data', 'budi@example.com', 'Laki-laki', '2001-12-10'),
(3, 'Citra Putri Utami', '1412220024', 2022, 'C', 'Jl.Diponegoro No. 15 RT 03 RW 04 Desa Karang Anyar Kec. Jenu, Tuban', 'Pengembangan Aplikasi Mobile', 'citra@example.com', 'Perempuan', '2002-02-20'),
(4, 'Dewi Lestari', '1412220025', 2022, 'D', 'Jl. A. Yani No. 20 RT 04 RW 05 Desa Kalitengah Kec. Merakurak, Tuban', 'Analisis Algoritma', 'dewi@example.com', 'Perempuan', '2003-08-25'),
(5, 'Eko Prasetyo', '1412220026', 2022, 'E', 'Jl. Raya Tuban - Bojonegoro No. 25 RT 05 RW 06 Desa Kalidawir Kec. Tuban, Tuban', 'Desain Grafis', 'eko@example.com', 'Laki-laki', '2004-10-05'),
(6, 'Fani Indah Sari', '1412220027', 2022, 'F', 'Jl. Cendrawasih No. 30 RT 06 RW 07 Desa Kedungwaru Kec. Plumpang, Tuban', 'Manajemen Proyek', 'fani@example.com', 'Perempuan', '2005-04-12');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `npm` (`npm`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
