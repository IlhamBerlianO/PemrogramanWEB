-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 13, 2023 at 04:16 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `praktek8pemweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id`, `username`, `password`) VALUES
(1, 'iwam', 'iwam123');

-- --------------------------------------------------------

--
-- Table structure for table `data_diri`
--

CREATE TABLE `data_diri` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `nisn` int(50) NOT NULL,
  `nik` int(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `berkebutuhan_khusus` varchar(100) NOT NULL,
  `alamat_jalan` varchar(255) NOT NULL,
  `rt` int(10) NOT NULL,
  `rw` int(10) NOT NULL,
  `nama_dusun` varchar(255) NOT NULL,
  `nama_kelurahan_desa` varchar(255) NOT NULL,
  `kecamatan` varchar(255) NOT NULL,
  `kode_pos` int(50) NOT NULL,
  `tempat_tinggal` varchar(255) NOT NULL,
  `moda_transportasi` varchar(255) NOT NULL,
  `no_hp` int(14) NOT NULL,
  `no_telp` int(14) NOT NULL,
  `email` varchar(255) NOT NULL,
  `penerima_kps_pkh_kip` varchar(10) NOT NULL,
  `no_penerima` varchar(255) DEFAULT NULL,
  `kewarganegaraan` varchar(255) NOT NULL,
  `nama_negara` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_diri`
--

INSERT INTO `data_diri` (`id`, `nama_lengkap`, `jenis_kelamin`, `nisn`, `nik`, `tgl_lahir`, `tempat_lahir`, `agama`, `berkebutuhan_khusus`, `alamat_jalan`, `rt`, `rw`, `nama_dusun`, `nama_kelurahan_desa`, `kecamatan`, `kode_pos`, `tempat_tinggal`, `moda_transportasi`, `no_hp`, `no_telp`, `email`, `penerima_kps_pkh_kip`, `no_penerima`, `kewarganegaraan`, `nama_negara`) VALUES
(1, 'Ilham Berlian Oktavio', 'Laki-Laki', 1111, 2222, '2001-10-18', 'Sidoarjo', 'Islam', 'Tidak', 'Pondok Buana blok D-6,Bluru Kidul, Sidoarjo, Jawa Timur', 4, 12, 'Bluru Kidul', 'Pondok Buana', 'Sidoarjo', 61233, 'Bersama Orang Tua', 'Kendaraan Pribadi', 2147483647, 2147483647, 'ilhamberliano.20@gmail.com', 'Tidak', '', 'Indonesia(WNI)', ''),
(2, 'Wanda Berlian Mardianti', 'Perempuan', 1111, 2222, '2001-03-14', 'Sidoarjo', 'Islam', 'Tidak', 'Pondok Buana blok D-6,Bluru Kidul, Sidoarjo, Jawa Timur', 4, 12, 'Bluru Kidul', 'Pondok Buana', 'Sidoarjo', 61233, 'Bersama Orang Tua', 'Kendaraan Pribadi', 0, 0, 'qr.wandantii@gmail.com', 'Ya', 'testestes', 'Indonesia(WNI)', ''),
(3, 'iwam', 'Laki-Laki', 123, 123, '2023-05-13', 'Sidoarjo', 'Islam', 'Tidak', 'Pondok Buana blok D-6,Bluru Kidul, Sidoarjo, Jawa Timur', 4, 12, 'Bluru Kidul', 'Pondok Buana', 'Sidoarjo', 61233, 'Bersama Orang Tua', 'Kendaraan Pribadi', 0, 0, 'pkngo182002@gmail.com', 'Ya', '00000000', 'Indonesia(WNI)', 'yayaya');

-- --------------------------------------------------------

--
-- Table structure for table `data_ortu`
--

CREATE TABLE `data_ortu` (
  `id` int(11) NOT NULL,
  `nama_ayah_kandung` varchar(100) NOT NULL,
  `tahun_lahir_ayah` int(10) NOT NULL,
  `pendidikan_ayah` varchar(100) NOT NULL,
  `pekerjaan_ayah` varchar(255) NOT NULL,
  `penghasilan_bulanan_ayah` varchar(255) NOT NULL,
  `berkebutuhan_khusus_ayah` varchar(100) NOT NULL,
  `nama_ibu_kandung` varchar(100) NOT NULL,
  `tahun_lahir_ibu` int(10) NOT NULL,
  `pendidikan_ibu` varchar(100) NOT NULL,
  `pekerjaan_ibu` varchar(255) NOT NULL,
  `penghasilan_bulanan_ibu` varchar(255) NOT NULL,
  `berkebutuhan_khusus_ibu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_ortu`
--

INSERT INTO `data_ortu` (`id`, `nama_ayah_kandung`, `tahun_lahir_ayah`, `pendidikan_ayah`, `pekerjaan_ayah`, `penghasilan_bulanan_ayah`, `berkebutuhan_khusus_ayah`, `nama_ibu_kandung`, `tahun_lahir_ibu`, `pendidikan_ibu`, `pekerjaan_ibu`, `penghasilan_bulanan_ibu`, `berkebutuhan_khusus_ibu`) VALUES
(1, 'Barlian Soebiantoro', 1975, 'S1', 'Karyawan Swasta', '2 Juta - 4.999.999', 'Tidak', 'Sri Karyawati', 1975, 'S1', 'Karyawan Swasta', '2 Juta - 4.999.999', 'Tidak'),
(2, 'Barlian Soebiantoro', 1975, 'S1', 'Karyawan Swasta', '2 Juta - 4.999.999', 'Tidak', 'Sri Karyawati', 1975, 'S1', 'Karyawan Swasta', '2 Juta - 4.999.999', 'Tidak'),
(3, 'Barlian Soebiantoro', 1975, 'S1', 'Wirausaha', 'Lebih dari 20 Juta', 'Tidak', 'Sri Karyawati', 1975, 'S1', 'Karyawan Swasta', '5 Juta - 20 Juta', 'Tidak');

-- --------------------------------------------------------

--
-- Table structure for table `regis_peserta_didik`
--

CREATE TABLE `regis_peserta_didik` (
  `id` int(11) NOT NULL,
  `tgl_isi` date NOT NULL,
  `jenis_pendaftaran` varchar(50) NOT NULL,
  `tgl_masuk_sekolah` date NOT NULL,
  `nis` varchar(255) NOT NULL,
  `nomor_peserta_ujian` varchar(20) NOT NULL,
  `paud` varchar(10) NOT NULL,
  `tk` varchar(10) NOT NULL,
  `no_skhun` varchar(16) NOT NULL,
  `no_ijazah` varchar(16) NOT NULL,
  `hobi` varchar(255) NOT NULL,
  `citacita` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regis_peserta_didik`
--

INSERT INTO `regis_peserta_didik` (`id`, `tgl_isi`, `jenis_pendaftaran`, `tgl_masuk_sekolah`, `nis`, `nomor_peserta_ujian`, `paud`, `tk`, `no_skhun`, `no_ijazah`, `hobi`, `citacita`) VALUES
(1, '2023-05-13', 'Siswa Baru', '2023-05-01', '1111', '2222', 'Tidak', 'Ya', '3333', '4444', 'Travelin', 'Lainnya'),
(2, '2023-05-13', 'Siswa Baru', '2023-05-01', '1111', '2222', 'Tidak', 'Ya', '3333', '4444', 'Lainnya', 'Lainnya'),
(3, '2023-05-13', 'Siswa Baru', '2023-05-01', '123', '123', 'Ya', 'Ya', '123', '123', 'Menulis', 'Guru/Dosen');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_diri`
--
ALTER TABLE `data_diri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_ortu`
--
ALTER TABLE `data_ortu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regis_peserta_didik`
--
ALTER TABLE `regis_peserta_didik`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `data_diri`
--
ALTER TABLE `data_diri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `data_ortu`
--
ALTER TABLE `data_ortu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `regis_peserta_didik`
--
ALTER TABLE `regis_peserta_didik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
