-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Agu 2019 pada 06.11
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lahan_parkir`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `owner`
--

CREATE TABLE `owner` (
  `owner_id` varchar(11) NOT NULL,
  `nama_pemilik` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_rekening` varchar(25) NOT NULL,
  `nomor_handphone` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `owner`
--

INSERT INTO `owner` (`owner_id`, `nama_pemilik`, `alamat`, `no_rekening`, `nomor_handphone`) VALUES
('5d452c9002d', 'Yasin', 'jl sukamenanti', '09090', '09090'),
('5d4b8a07213', 'syaiful bahri', 'jakarta', '34343', '34343'),
('5d4b8a6fe82', 'agung pratama', 'bojong', '2112', '5667654');

-- --------------------------------------------------------

--
-- Struktur dari tabel `register`
--

CREATE TABLE `register` (
  `register_id` varchar(11) NOT NULL,
  `email` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `alamat` varchar(25) NOT NULL,
  `handphone` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `register`
--

INSERT INTO `register` (`register_id`, `email`, `username`, `password`, `alamat`, `handphone`) VALUES
('5d2de8ea108', 'Iful1655@gmail.com', 'admin', '12345', '1122', '242424DSD'),
('5d453f190b0', 'puguh@info.com', 'puguh', '00000', 'j', '9');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tempat_parkir`
--

CREATE TABLE `tempat_parkir` (
  `tempat_parkir_id` varchar(11) NOT NULL,
  `kode_tempat_parkir` varchar(25) NOT NULL,
  `kapasitas_mobil` varchar(50) NOT NULL,
  `owner_id` varchar(25) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `counter` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tempat_parkir`
--

INSERT INTO `tempat_parkir` (`tempat_parkir_id`, `kode_tempat_parkir`, `kapasitas_mobil`, `owner_id`, `alamat`, `counter`) VALUES
('5d4530fb2ed', 'LP001', '10', '5d452caa504', 'rt 8', '5'),
('5d453115693', 'LP002', '30', '5d452c9002d', 'rt 7', '30'),
('5d4b8ac73c9', 'lp0001', '12', '5d4b8a6fe82', 'bojong', '11'),
('5d4b8b1be07', 'lp0001', '12', '5d4b8a6fe82', 'bojong', '12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `transaksi_id` varchar(50) NOT NULL,
  `kode_transaksi_id` varchar(50) NOT NULL,
  `nama_member` varchar(25) NOT NULL,
  `kode_tempat_parkir` varchar(50) NOT NULL,
  `tanggal_awal` varchar(25) NOT NULL,
  `tanggal_akhir` varchar(25) NOT NULL,
  `status` varchar(25) NOT NULL,
  `biaya` varchar(25) NOT NULL,
  `path_file` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`transaksi_id`, `kode_transaksi_id`, `nama_member`, `kode_tempat_parkir`, `tanggal_awal`, `tanggal_akhir`, `status`, `biaya`, `path_file`) VALUES
('5d453f637e7e1', 'BP0001', 'puguh', '5d4530fb2ed', '2019-08-02', '2019-08-02', 'SUDAH_BAYAR', '10000', '5d453f637e7e1.png'),
('5d4541e8ba7ef', 'BP0002', 'puguh', '5d4530fb2ed', '2019-08-02', '2019-08-20', 'SUDAH_BAYAR', '9000', '5d4541e8ba7ef.png'),
('5d4b8b664c888', 'BP0001', 'puguh', '5d4b8ac73c9', '2019-02-12', '2019-03-20', 'SUDAH_BAYAR', '9000', '5d4b8b664c888.png');

--
-- Trigger `transaksi`
--
DELIMITER $$
CREATE TRIGGER `countOfTransaksi` AFTER UPDATE ON `transaksi` FOR EACH ROW begin
update tempat_parkir a set a.counter = (a.counter-1) where a.tempat_parkir_id = new.kode_tempat_parkir; 
end
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`owner_id`);

--
-- Indeks untuk tabel `tempat_parkir`
--
ALTER TABLE `tempat_parkir`
  ADD PRIMARY KEY (`tempat_parkir_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
