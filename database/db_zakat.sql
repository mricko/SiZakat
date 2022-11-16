-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Nov 2022 pada 23.23
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_zakat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_koordinator`
--

CREATE TABLE `tbl_koordinator` (
  `id_koor` int(11) NOT NULL,
  `nama_koor` varchar(50) DEFAULT NULL,
  `panggilan_koor` varchar(100) DEFAULT NULL,
  `alamat_koor` varchar(20) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` text,
  `ket_pass` varchar(100) DEFAULT NULL,
  `level` int(11) DEFAULT '3'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_koordinator`
--

INSERT INTO `tbl_koordinator` (`id_koor`, `nama_koor`, `panggilan_koor`, `alamat_koor`, `username`, `password`, `ket_pass`, `level`) VALUES
(17, 'Muhammad Akbar Fauzi', 'Akbar', 'RT01', NULL, NULL, NULL, 3),
(18, 'Risman Ahmad Syahroni', 'Risman', 'RT02', NULL, NULL, NULL, 3),
(19, 'Syihabudin', 'Aang', 'RT03', NULL, NULL, NULL, 3),
(20, 'Rizki Aditiya', 'Rizki', 'Lainnya', NULL, NULL, NULL, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_master_alamat`
--

CREATE TABLE `tbl_master_alamat` (
  `id_alamat` int(255) NOT NULL,
  `alamat` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_master_alamat`
--

INSERT INTO `tbl_master_alamat` (`id_alamat`, `alamat`) VALUES
(1, 'RT 01'),
(2, 'RT 02'),
(3, 'RT 03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_master_kwitansi`
--

CREATE TABLE `tbl_master_kwitansi` (
  `id_kwitansi` int(11) NOT NULL,
  `nama_organisasi` varchar(100) DEFAULT NULL,
  `nama_lembaga` varchar(100) DEFAULT NULL,
  `logo_organisasi` text,
  `pembayaran` text,
  `kota_kwitansi` varchar(30) DEFAULT NULL,
  `alamat_organisasi` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_master_kwitansi`
--

INSERT INTO `tbl_master_kwitansi` (`id_kwitansi`, `nama_organisasi`, `nama_lembaga`, `logo_organisasi`, `pembayaran`, `kota_kwitansi`, `alamat_organisasi`) VALUES
(1, 'Remaja Masjid Baiturrohmah', 'Masjid Besar  Baiturrohmah', 'logo_1587121453.png', 'Maal, Partisipasi Sosial, Infaq/Shodaqoh, Fidyah', 'Cianjur', 'Kp. Baru Pawenang, \r\nMuka, Cianjur, Kabupaten Cianjur, Jawa Barat\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_master_laporan`
--

CREATE TABLE `tbl_master_laporan` (
  `id_laporan` int(11) NOT NULL,
  `jabatan_laporan` varchar(100) DEFAULT NULL,
  `nama_pemilik_jabatan` varchar(100) DEFAULT NULL,
  `masehi` varchar(12) DEFAULT NULL,
  `hijriyah` varchar(12) DEFAULT NULL,
  `jabatan` varchar(100) DEFAULT NULL,
  `nama_sekretaris` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_master_laporan`
--

INSERT INTO `tbl_master_laporan` (`id_laporan`, `jabatan_laporan`, `nama_pemilik_jabatan`, `masehi`, `hijriyah`, `jabatan`, `nama_sekretaris`) VALUES
(1, 'Ketua Amil Zakat', 'Wildan Maulid Nugraha', '2022', '1444', 'Sekretaris', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_master_lokasi`
--

CREATE TABLE `tbl_master_lokasi` (
  `id_lokasi` int(11) NOT NULL,
  `nama_lokasi` text,
  `alamat_lokasi` varchar(100) DEFAULT NULL,
  `kontak_lokasi` varchar(100) DEFAULT NULL,
  `foto_lokasi` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_master_lokasi`
--

INSERT INTO `tbl_master_lokasi` (`id_lokasi`, `nama_lokasi`, `alamat_lokasi`, `kontak_lokasi`, `foto_lokasi`) VALUES
(1, 'Masjid Besar \"Baiturrohmah\" Cianjur', 'Kp. Baru Pawenang, Muka, Cianjur, Kabupaten Cianjur, Jawa Barat', '085860631636', 'lok_1667913069.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_master_penerima`
--

CREATE TABLE `tbl_master_penerima` (
  `id_ket_penerima` int(11) NOT NULL,
  `nama_ket` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_master_penerima`
--

INSERT INTO `tbl_master_penerima` (`id_ket_penerima`, `nama_ket`) VALUES
(1, 'Berat'),
(2, 'Ringan'),
(3, 'Sabilillah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_panitia`
--

CREATE TABLE `tbl_panitia` (
  `id_panitia` int(255) NOT NULL,
  `nama_panitia` varchar(100) DEFAULT NULL,
  `jabatan_panitia` varbinary(50) DEFAULT NULL,
  `alamat` text,
  `kontak` varchar(20) DEFAULT NULL,
  `foto_panitia` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_panitia`
--

INSERT INTO `tbl_panitia` (`id_panitia`, `nama_panitia`, `jabatan_panitia`, `alamat`, `kontak`, `foto_panitia`) VALUES
(1, 'Moch. Firman Firdaus', 0x35, '1', '089666515952', 'PANITIA_29042020121634.png'),
(2, 'Aceng', 0x31, '1', '0812345', 'PANITIA_06112022172015.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_penerima_zakat`
--

CREATE TABLE `tbl_penerima_zakat` (
  `id_penerima` int(11) NOT NULL,
  `nama_penerima` varchar(100) DEFAULT NULL,
  `ket_penerima` int(11) DEFAULT NULL,
  `koordinator` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_qurban`
--

CREATE TABLE `tbl_qurban` (
  `id_qurban` int(11) NOT NULL,
  `mudhohi` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL,
  `hewan` varchar(100) NOT NULL,
  `tangal` date NOT NULL,
  `petugas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `nama_user` varchar(100) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` text,
  `ket_pass` varchar(100) DEFAULT NULL,
  `level` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama_lengkap`, `nama_user`, `username`, `password`, `ket_pass`, `level`) VALUES
(6, 'Teguh Ramadhan', 'Teguh', 'teguh', 'f5cd3a020bc94866049206a7cf14e266', 'teguh', 4),
(10, 'Muhammad Ricko', 'Ricko', 'admin', '0192023a7bbd73250516f069df18b500', 'admin123', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_zakat_fitrah`
--

CREATE TABLE `tbl_zakat_fitrah` (
  `id_zakat_fitrah` int(11) NOT NULL,
  `nama_pemberi_zakat` varchar(100) DEFAULT NULL,
  `besaran_jiwa` int(11) DEFAULT NULL,
  `beras` varchar(20) DEFAULT NULL,
  `uang` varchar(20) DEFAULT NULL,
  `alamat` text,
  `tanggal` date DEFAULT NULL,
  `petugas` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_zakat_maal`
--

CREATE TABLE `tbl_zakat_maal` (
  `id_zakat_maal` int(11) NOT NULL,
  `nama_pemberi_zakat` varchar(50) DEFAULT NULL,
  `kategori_zakat` varchar(30) DEFAULT NULL,
  `nominal_zakat` varchar(100) DEFAULT NULL,
  `alamat` text,
  `tanggal` date DEFAULT NULL,
  `petugas1` varchar(30) DEFAULT NULL,
  `petugas2` varchar(30) DEFAULT NULL,
  `keterangan` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_koordinator`
--
ALTER TABLE `tbl_koordinator`
  ADD PRIMARY KEY (`id_koor`);

--
-- Indeks untuk tabel `tbl_master_alamat`
--
ALTER TABLE `tbl_master_alamat`
  ADD PRIMARY KEY (`id_alamat`);

--
-- Indeks untuk tabel `tbl_master_kwitansi`
--
ALTER TABLE `tbl_master_kwitansi`
  ADD PRIMARY KEY (`id_kwitansi`);

--
-- Indeks untuk tabel `tbl_master_laporan`
--
ALTER TABLE `tbl_master_laporan`
  ADD PRIMARY KEY (`id_laporan`);

--
-- Indeks untuk tabel `tbl_master_lokasi`
--
ALTER TABLE `tbl_master_lokasi`
  ADD PRIMARY KEY (`id_lokasi`);

--
-- Indeks untuk tabel `tbl_master_penerima`
--
ALTER TABLE `tbl_master_penerima`
  ADD PRIMARY KEY (`id_ket_penerima`);

--
-- Indeks untuk tabel `tbl_panitia`
--
ALTER TABLE `tbl_panitia`
  ADD PRIMARY KEY (`id_panitia`);

--
-- Indeks untuk tabel `tbl_penerima_zakat`
--
ALTER TABLE `tbl_penerima_zakat`
  ADD PRIMARY KEY (`id_penerima`);

--
-- Indeks untuk tabel `tbl_qurban`
--
ALTER TABLE `tbl_qurban`
  ADD PRIMARY KEY (`id_qurban`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `tbl_zakat_fitrah`
--
ALTER TABLE `tbl_zakat_fitrah`
  ADD PRIMARY KEY (`id_zakat_fitrah`);

--
-- Indeks untuk tabel `tbl_zakat_maal`
--
ALTER TABLE `tbl_zakat_maal`
  ADD PRIMARY KEY (`id_zakat_maal`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_koordinator`
--
ALTER TABLE `tbl_koordinator`
  MODIFY `id_koor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `tbl_master_alamat`
--
ALTER TABLE `tbl_master_alamat`
  MODIFY `id_alamat` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_master_kwitansi`
--
ALTER TABLE `tbl_master_kwitansi`
  MODIFY `id_kwitansi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_master_laporan`
--
ALTER TABLE `tbl_master_laporan`
  MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_master_lokasi`
--
ALTER TABLE `tbl_master_lokasi`
  MODIFY `id_lokasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_master_penerima`
--
ALTER TABLE `tbl_master_penerima`
  MODIFY `id_ket_penerima` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_panitia`
--
ALTER TABLE `tbl_panitia`
  MODIFY `id_panitia` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_penerima_zakat`
--
ALTER TABLE `tbl_penerima_zakat`
  MODIFY `id_penerima` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tbl_qurban`
--
ALTER TABLE `tbl_qurban`
  MODIFY `id_qurban` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tbl_zakat_fitrah`
--
ALTER TABLE `tbl_zakat_fitrah`
  MODIFY `id_zakat_fitrah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `tbl_zakat_maal`
--
ALTER TABLE `tbl_zakat_maal`
  MODIFY `id_zakat_maal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
