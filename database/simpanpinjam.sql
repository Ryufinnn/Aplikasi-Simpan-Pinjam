-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 23 Feb 2018 pada 07.19
-- Versi Server: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `simpanpinjam`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE IF NOT EXISTS `anggota` (
  `id_anggota` varchar(10) NOT NULL,
  `nama_anggota` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jekel` varchar(12) NOT NULL,
  `no_ktp` varchar(30) NOT NULL,
  `alamat` varchar(80) NOT NULL,
  `telepon` varchar(13) NOT NULL,
  `pekerjaan` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `nama_anggota`, `tgl_lahir`, `jekel`, `no_ktp`, `alamat`, `telepon`, `pekerjaan`, `password`) VALUES
('AN0001', 'Silvia', '1990-01-22', 'Perempuan', '8476546546542323', 'Jl. Lubuk Begalung No. 5 Kec. Padang Barat', '082377459900', 'Wiraswasta', '1111'),
('AN0002', 'Zikri F.', '1990-10-10', 'Laki laki', '54656546545456', 'Jl. Lubuk Begalung No. 15 Kota Padang', '082263646354', 'PNS', '1111'),
('AN0003', 'Rizki X', '1993-01-22', 'Laki laki', '654654646543764', 'Jl. Moh. Hatta No.30 ', '0822454654654', 'Programmer', '12345'),
('AN0004', 'Rizka', '1993-10-22', 'Perempuan', '755665655665', 'Jl. Lubuk Buaya No.33', '082245454544', 'Guru', '12345'),
('AN0005', 'Fitri Permata', '1994-08-20', 'Perempuan', '54564656563764364', 'Jl. Lubuk Begalung No. 07 Kota Padang', '08127465746', 'PNS', '12345');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengajuan`
--

CREATE TABLE IF NOT EXISTS `pengajuan` (
  `id_pengajuan` varchar(10) NOT NULL,
  `id_anggota` varchar(10) NOT NULL,
  `nama_wali` varchar(40) NOT NULL,
  `pekerjaan_wali` varchar(30) NOT NULL,
  `alamat_kerja_wali` varchar(50) NOT NULL,
  `telepon_wali` varchar(15) NOT NULL,
  `besar_pinjaman` int(11) NOT NULL,
  `lama_pinjaman` int(11) NOT NULL,
  `jaminan1` varchar(20) NOT NULL,
  `jaminan2` varchar(20) NOT NULL,
  `jaminan3` varchar(20) NOT NULL,
  `jaminan4` varchar(20) NOT NULL,
  `tujuan_pinjaman` varchar(30) NOT NULL,
  `tanggal_pengajuan` date NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengajuan`
--

INSERT INTO `pengajuan` (`id_pengajuan`, `id_anggota`, `nama_wali`, `pekerjaan_wali`, `alamat_kerja_wali`, `telepon_wali`, `besar_pinjaman`, `lama_pinjaman`, `jaminan1`, `jaminan2`, `jaminan3`, `jaminan4`, `tujuan_pinjaman`, `tanggal_pengajuan`, `status`) VALUES
('P0001', 'AN0001', 'Siti Rahma', 'Guru', 'Jl. Moh. Hatta No.23', '082345678765', 5000000, 12, 'BPKB Motor', '', '', 'KTP', 'Pembangunan', '2018-02-22', 'Diterima'),
('P0002', 'AN0002', 'Sintia', 'Pegawai Bank', 'Jl. Moh. Hatta No.23', '083211223344', 2000000, 6, '', '', '', 'KTP', 'Tabungan', '2018-02-22', 'Diterima'),
('P0003', 'AN0003', 'Nurhayati', 'PNS', 'Jl. Moh. Hatta No.23', '082217876655', 4000000, 12, 'BPKB Motor', '', '', 'KTP', 'Tambahan Modal', '2018-02-22', 'Tidak diterima'),
('P0004', 'AN0004', 'Adinda', 'Guru', 'Jl. Lubuk Buaya No.44', '082217891122', 10000000, 18, 'BPKB Motor', '', '', '', 'Pembangunan', '2018-02-22', 'Diterima');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id_user` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `level` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', 'admin'),
(9, 'AN0001', '1111', 'anggota'),
(10, 'AN0002', '1111', 'anggota'),
(11, 'AN0003', '12345', 'anggota'),
(12, 'AN0004', '12345', 'anggota'),
(13, 'AN0005', '12345', 'anggota');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
 ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `pengajuan`
--
ALTER TABLE `pengajuan`
 ADD PRIMARY KEY (`id_pengajuan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
