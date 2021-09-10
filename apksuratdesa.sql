-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2021 at 07:50 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apksuratdesa`
--

-- --------------------------------------------------------

--
-- Table structure for table `ktpsementara`
--

CREATE TABLE `ktpsementara` (
  `Id_KTPSementara` varchar(10) NOT NULL,
  `No_KTPSementara` varchar(100) NOT NULL,
  `Nama` varchar(80) NOT NULL,
  `Jenis_Kelamin` varchar(20) NOT NULL,
  `Tempat_Lahir` varchar(50) NOT NULL,
  `Tanggal_Lahir` date NOT NULL,
  `Status_Perkawinan` varchar(25) NOT NULL,
  `Agama` varchar(30) NOT NULL,
  `Pekerjaan` varchar(100) NOT NULL,
  `Alamat` text NOT NULL,
  `NIK` varchar(20) NOT NULL,
  `Masa_Berlaku_Surat` date NOT NULL,
  `Tgl_Surat` date NOT NULL,
  `Nama_KepalaDesa` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `Id_Pengguna` int(11) NOT NULL,
  `Nama_Pengguna` varchar(50) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Jenis_Kelamin` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `RetryPassword` varchar(20) NOT NULL,
  `Kontak` varchar(15) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`Id_Pengguna`, `Nama_Pengguna`, `Email`, `Jenis_Kelamin`, `username`, `password`, `RetryPassword`, `Kontak`, `foto`) VALUES
(1, 'Iqbal Zaaenal', 'pranata.teknologi@gmail1.com', 'L', 'adm', 'adm', 'adm', '082215778240', 'team-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sbcovid`
--

CREATE TABLE `sbcovid` (
  `Id_SBCovid` varchar(10) NOT NULL,
  `No_SBCovid` varchar(255) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Tempat_Lahir` varchar(50) NOT NULL,
  `Tanggal_Lahir` date NOT NULL,
  `Pekerjaan` varchar(80) NOT NULL,
  `Alamat` text NOT NULL,
  `NIK` varchar(25) NOT NULL,
  `Tgl_Surat` date NOT NULL,
  `Nama_KepalaDesa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sizinkegiatan`
--

CREATE TABLE `sizinkegiatan` (
  `Id_SIzinKegiatan` varchar(10) NOT NULL,
  `No_SIzinKegiatan` varchar(255) NOT NULL,
  `Nama_Kegiatan` varchar(255) NOT NULL,
  `Tanggal_Pelaksanaan` date NOT NULL,
  `Tempat_Pelaksanaan` varchar(255) NOT NULL,
  `Tgl_Surat` date NOT NULL,
  `Nama_KepalaDesa` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sjalan`
--

CREATE TABLE `sjalan` (
  `Id_Sjalan` varchar(10) NOT NULL,
  `No_Sjalan` varchar(255) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Tempat_Lahir` varchar(50) NOT NULL,
  `Tanggal_Lahir` date NOT NULL,
  `Pekerjaan` varchar(100) NOT NULL,
  `Alamat` text NOT NULL,
  `Jenis_Kendaraan` varchar(50) NOT NULL,
  `No_Polisi` varchar(15) NOT NULL,
  `No_Rangka` varchar(50) NOT NULL,
  `AtasNama_Mobil` varchar(100) NOT NULL,
  `Tujuan` varchar(100) NOT NULL,
  `Barang_Bawaan` text NOT NULL,
  `Tgl_Surat` date NOT NULL,
  `Nama_KepalaDesa` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `skbnikah`
--

CREATE TABLE `skbnikah` (
  `Id_SKBNikah` varchar(10) NOT NULL,
  `No_SKBNikah` varchar(255) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Tempat_Lahir` varchar(50) NOT NULL,
  `Tanggal_Lahir` date NOT NULL,
  `Agama` varchar(30) NOT NULL,
  `Jenis_Kelamin` varchar(30) NOT NULL,
  `Pekerjaan` varchar(50) NOT NULL,
  `Alamat` text NOT NULL,
  `Tgl_Surat` date NOT NULL,
  `Nama_KepalaDesa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `skdomisili`
--

CREATE TABLE `skdomisili` (
  `Id_SKDomisili` varchar(10) NOT NULL,
  `No_SKDomisili` varchar(255) NOT NULL,
  `Nama` varchar(80) NOT NULL,
  `Tempat_Lahir` varchar(50) NOT NULL,
  `Tanggal_Lahir` date NOT NULL,
  `Pekerjaan` varchar(50) NOT NULL,
  `Alamat` text NOT NULL,
  `Tgl_Surat` date NOT NULL,
  `Nama_KepalaDesa` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `skelahiran`
--

CREATE TABLE `skelahiran` (
  `Id_SKelahiran` varchar(10) NOT NULL,
  `No_SKelahiran` varchar(255) NOT NULL,
  `Hari_LahirAnak` varchar(20) NOT NULL,
  `Tgl_LahirAnak` date NOT NULL,
  `Tempat_LahirAnak` varchar(50) NOT NULL,
  `Jenis_KelaminAnak` varchar(20) NOT NULL,
  `Nama_Anak` varchar(50) NOT NULL,
  `Nama_Ibu` varchar(50) NOT NULL,
  `NIK_Ibu` varchar(25) NOT NULL,
  `Jenis_KelaminIbu` varchar(20) NOT NULL,
  `Tempat_LahirIbu` varchar(50) NOT NULL,
  `Tanggal_LahirIbu` date NOT NULL,
  `Agama_Ibu` varchar(20) NOT NULL,
  `Pekerjaan_Ibu` varchar(100) NOT NULL,
  `Alamat_Ibu` varchar(100) NOT NULL,
  `Nama_Pelapor` varchar(50) NOT NULL,
  `Umur_Pelapor` int(11) NOT NULL,
  `Pekerjaan_Pelapor` varchar(100) NOT NULL,
  `Alamat_Pelapor` varchar(100) NOT NULL,
  `Tgl_Surat` date NOT NULL,
  `Nama_KepalaDesa` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `skkip`
--

CREATE TABLE `skkip` (
  `Id_SKKip` varchar(10) NOT NULL,
  `No_SKKip` varchar(100) NOT NULL,
  `Nama` varchar(80) NOT NULL,
  `Tempat_Lahir` varchar(50) NOT NULL,
  `Tanggal_Lahir` date NOT NULL,
  `Jenis_Kelamin` varchar(20) NOT NULL,
  `Pekerjaan` varchar(50) NOT NULL,
  `No_Kip` varchar(20) NOT NULL,
  `Alamat` text NOT NULL,
  `Tgl_Surat` date NOT NULL,
  `Nama_KepalaDesa` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `skkizajah`
--

CREATE TABLE `skkizajah` (
  `Id_SKKIzajah` varchar(10) NOT NULL,
  `No_SKKIzajah` varchar(255) NOT NULL,
  `Nama` varchar(80) NOT NULL,
  `Tempat_Lahir` varchar(100) NOT NULL,
  `Tanggal_Lahir` date NOT NULL,
  `Jenis_Kelamin` varchar(20) NOT NULL,
  `Pekerjaan` varchar(100) NOT NULL,
  `Alamat` text NOT NULL,
  `NIK` varchar(25) NOT NULL,
  `Tgl_Surat` date NOT NULL,
  `Nama_KepalaDesa` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `skkkk`
--

CREATE TABLE `skkkk` (
  `Id_SKKKK` varchar(10) NOT NULL,
  `No_SKKKK` varchar(255) NOT NULL,
  `Nama` varchar(80) NOT NULL,
  `Tempat_Lahir` varchar(50) NOT NULL,
  `Tanggal_Lahir` date NOT NULL,
  `Jenis_Kelamin` varchar(20) NOT NULL,
  `Pekerjaan` varchar(100) NOT NULL,
  `Alamat` text NOT NULL,
  `NIK` varchar(25) NOT NULL,
  `Tgl_Surat` date NOT NULL,
  `Nama_KepalaDesa` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sktmasekolah`
--

CREATE TABLE `sktmasekolah` (
  `Id_SKTMASekolah` varchar(10) NOT NULL,
  `No_SKTMASekolah` varchar(255) NOT NULL,
  `Nama_Ortu` varchar(50) NOT NULL,
  `Tempat_Lahir_Ortu` varchar(30) NOT NULL,
  `Tanggal_Lahir_Ortu` date NOT NULL,
  `Agama_Ortu` varchar(20) NOT NULL,
  `Pekerjaan_Ortu` varchar(50) NOT NULL,
  `Alamat_Ortu` text NOT NULL,
  `NIK_Ortu` varchar(25) NOT NULL,
  `Nama_Anak` varchar(50) NOT NULL,
  `Tempat_Lahir_Anak` varchar(30) NOT NULL,
  `Tanggal_Lahir_Anak` date NOT NULL,
  `Jenis_Kelamin_Anak` varchar(20) NOT NULL,
  `Agama_Anak` varchar(20) NOT NULL,
  `Pekerjaan_Anak` varchar(30) NOT NULL,
  `Alamat_Anak` text NOT NULL,
  `NIK_Anak` varchar(25) NOT NULL,
  `Tgl_Surat` date NOT NULL,
  `Nama_KepalaDesa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sktmbiasa`
--

CREATE TABLE `sktmbiasa` (
  `Id_SKTMBiasa` varchar(10) NOT NULL,
  `No_SKTMBiasa` varchar(255) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Tempat_Lahir` varchar(50) NOT NULL,
  `Tanggal_Lahir` date NOT NULL,
  `Jenis_Kelamin` varchar(20) NOT NULL,
  `Pekerjaan` varchar(80) NOT NULL,
  `Kp` varchar(50) NOT NULL,
  `Rt` varchar(10) NOT NULL,
  `Rw` varchar(10) NOT NULL,
  `NIK` varchar(30) NOT NULL,
  `Tgl_Surat` date NOT NULL,
  `Nama_Rt` varchar(50) NOT NULL,
  `Nama_Rw` varchar(50) NOT NULL,
  `Nama_KepalaDesa` varchar(50) NOT NULL,
  `Nama_Camat` varchar(50) NOT NULL,
  `NIP_Camat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `srkip`
--

CREATE TABLE `srkip` (
  `Id_SRKip` varchar(15) NOT NULL,
  `No_SRKip` varchar(255) NOT NULL,
  `Nama` varchar(80) NOT NULL,
  `Tempat_Lahir` varchar(50) NOT NULL,
  `Tanggal_Lahir` date NOT NULL,
  `Jenis_Kelamin` varchar(20) NOT NULL,
  `Pekerjaan` varchar(50) NOT NULL,
  `Alamat` text NOT NULL,
  `No_Kip` varchar(20) NOT NULL,
  `Tgl_Surat` date NOT NULL,
  `Nama_KepalaDesa` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `suratkeluar`
--

CREATE TABLE `suratkeluar` (
  `Id_Surat` varchar(15) NOT NULL,
  `Tgl_Surat` date NOT NULL,
  `No_Surat` varchar(255) NOT NULL,
  `Jenis_Surat` varchar(100) NOT NULL,
  `Nama_Pengaju` varchar(80) NOT NULL,
  `TTL` varchar(255) NOT NULL,
  `Pekerjaan` varchar(50) NOT NULL,
  `Alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suratkeluar`
--

INSERT INTO `suratkeluar` (`Id_Surat`, `Tgl_Surat`, `No_Surat`, `Jenis_Surat`, `Nama_Pengaju`, `TTL`, `Pekerjaan`, `Alamat`) VALUES
('SDG0001', '2021-02-12', '522.21 / 0001 / V / SK.JLN / 2021', 'Surat Jalan', 'Iqbal Zaenal Mutaqin', 'Surabaya,2021-06-19', 'Mahasiswa1', 'Kp. Gandasoli Rt. 14 Rw. 04 Desa Gandasoli Kec. Tanjungsiang');

-- --------------------------------------------------------

--
-- Table structure for table `suratmasuk`
--

CREATE TABLE `suratmasuk` (
  `Id_SMasuk` varchar(10) NOT NULL,
  `Tgl_Penerimaan` date NOT NULL,
  `No_SMasuk` varchar(100) NOT NULL,
  `Tanggal` date NOT NULL,
  `Pengirim` varchar(50) NOT NULL,
  `IsiSingkat` text NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ktpsementara`
--
ALTER TABLE `ktpsementara`
  ADD PRIMARY KEY (`Id_KTPSementara`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`Id_Pengguna`);

--
-- Indexes for table `sbcovid`
--
ALTER TABLE `sbcovid`
  ADD PRIMARY KEY (`Id_SBCovid`);

--
-- Indexes for table `sizinkegiatan`
--
ALTER TABLE `sizinkegiatan`
  ADD PRIMARY KEY (`Id_SIzinKegiatan`);

--
-- Indexes for table `sjalan`
--
ALTER TABLE `sjalan`
  ADD PRIMARY KEY (`No_Sjalan`);

--
-- Indexes for table `skbnikah`
--
ALTER TABLE `skbnikah`
  ADD PRIMARY KEY (`Id_SKBNikah`);

--
-- Indexes for table `skdomisili`
--
ALTER TABLE `skdomisili`
  ADD PRIMARY KEY (`Id_SKDomisili`);

--
-- Indexes for table `skelahiran`
--
ALTER TABLE `skelahiran`
  ADD PRIMARY KEY (`Id_SKelahiran`);

--
-- Indexes for table `skkip`
--
ALTER TABLE `skkip`
  ADD PRIMARY KEY (`Id_SKKip`);

--
-- Indexes for table `skkizajah`
--
ALTER TABLE `skkizajah`
  ADD PRIMARY KEY (`Id_SKKIzajah`);

--
-- Indexes for table `skkkk`
--
ALTER TABLE `skkkk`
  ADD PRIMARY KEY (`Id_SKKKK`);

--
-- Indexes for table `sktmasekolah`
--
ALTER TABLE `sktmasekolah`
  ADD PRIMARY KEY (`Id_SKTMASekolah`);

--
-- Indexes for table `sktmbiasa`
--
ALTER TABLE `sktmbiasa`
  ADD PRIMARY KEY (`Id_SKTMBiasa`);

--
-- Indexes for table `srkip`
--
ALTER TABLE `srkip`
  ADD PRIMARY KEY (`Id_SRKip`);

--
-- Indexes for table `suratkeluar`
--
ALTER TABLE `suratkeluar`
  ADD PRIMARY KEY (`Id_Surat`);

--
-- Indexes for table `suratmasuk`
--
ALTER TABLE `suratmasuk`
  ADD PRIMARY KEY (`Id_SMasuk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `Id_Pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
