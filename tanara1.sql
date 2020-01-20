-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2020 at 10:31 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tanara1`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftarsiswa`
--

CREATE TABLE `daftarsiswa` (
  `id_daftar` int(11) NOT NULL,
  `kd_ruang` varchar(6) NOT NULL,
  `nis` varchar(11) NOT NULL,
  `nama_siswa` varchar(40) NOT NULL,
  `gender` enum('LAKI-LAKI','PEREMPUAN') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `nip` varchar(32) NOT NULL,
  `nama_guru` varchar(30) NOT NULL,
  `tempatlhr` varchar(20) NOT NULL,
  `tgllahir` date NOT NULL,
  `alamat` text NOT NULL,
  `gender` enum('LAKI-LAKI','PEREMPUAN') NOT NULL,
  `agama` enum('ISLAM','KRISTEN','BUDHA','HINDU','KHONG HU CHU') NOT NULL,
  `nope` varchar(13) NOT NULL,
  `mapel` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`nip`, `nama_guru`, `tempatlhr`, `tgllahir`, `alamat`, `gender`, `agama`, `nope`, `mapel`) VALUES
('196404052008012003', 'Nina Maryati', 'Garut', '1964-04-05', 'KP. CIPANAS RT. 01 RW. 08 DESA WANASUKA', 'PEREMPUAN', 'ISLAM', '085317063990', 'Wali Kelas'),
('196405112008012001', 'Popon Karwati', 'Bandung', '1964-05-11', 'Kp. Sukaati', 'PEREMPUAN', 'ISLAM', '082372389820', 'Wali Kelas'),
('196906042008012012', 'Tati suryati', 'Bandung', '1969-04-06', 'KP. CIBOLANG RT. 05 RW. 03 DESA BANJARSARI', 'PEREMPUAN', 'ISLAM', '085312748574', 'Wali Kelas'),
('196906252007012010', 'Eti Rohaeti', 'Bandung', '1969-06-25', 'Kp. Sukaati', 'PEREMPUAN', 'ISLAM', '082246558711', 'Pendidikan Agama Islam'),
('197603102012061704', 'Dedi Irawan', 'Bandung', '1976-03-10', 'KP. SUKAATI RT. 05 RW. 01 DESA BANJARSARI', 'LAKI-LAKI', 'ISLAM', '081320793168', 'PENJASKES'),
('198503182016062302', 'Ai Maryani', 'Bandung', '1985-03-18', 'Kp. Tarikolot Rt. 01 Rw. 01', 'PEREMPUAN', 'ISLAM', '085312748576', 'Wali Kelas'),
('198504162015092102', 'Nurhidayah', 'Bandung', '1985-04-16', 'Kp. Cibolang RT. 04 Rw. 03 Desa Banjarsari', 'PEREMPUAN', 'ISLAM', '081320793166', 'Bahasa Inggris');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `nip` varchar(32) NOT NULL,
  `kd_mapel` varchar(4) NOT NULL,
  `hari` varchar(20) NOT NULL,
  `jam` varchar(20) NOT NULL,
  `kd_ruang` varchar(6) NOT NULL,
  `smt` enum('Ganjil','Genap') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `nip`, `kd_mapel`, `hari`, `jam`, `kd_ruang`, `smt`) VALUES
(1, '196405112008012001', 'MP02', 'Selasa', '08.10 - 08.45', 'RK01', 'Ganjil'),
(2, '196906252007012010', 'MP11', 'Rabu', '08.10 - 08.45', 'RK04', 'Ganjil'),
(3, '198503182016062302', 'MP02', 'Rabu', '08.45 - 09.15', 'RK04', 'Ganjil'),
(4, '196906042008012012', 'MP05', 'Kamis', '10.25 - 11.00', 'RK02', 'Ganjil');

-- --------------------------------------------------------

--
-- Table structure for table `kenaikan`
--

CREATE TABLE `kenaikan` (
  `id_naik` int(11) NOT NULL,
  `nis` varchar(11) NOT NULL,
  `kd_ruang` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE `mapel` (
  `kd_mapel` varchar(4) NOT NULL,
  `nama_mapel` varchar(30) NOT NULL,
  `kkm` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`kd_mapel`, `nama_mapel`, `kkm`) VALUES
('MP01', 'Bahasa Indonesia', '67'),
('MP02', 'Ilmu Pengetahuan Alam', '66'),
('MP03', 'Pendidikan Kewarganegaraan', '67'),
('MP05', 'Matematika', '65'),
('MP06', 'Seni Budaya dan Prakarya', '67'),
('MP07', 'Bahasa Inggris', '67'),
('MP11', 'Pendidikan Agama Islam', '67');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(11) NOT NULL,
  `kd_mapel` varchar(4) NOT NULL,
  `nis` varchar(11) NOT NULL,
  `kd_ruang` varchar(6) NOT NULL,
  `n_uh` decimal(5,0) NOT NULL,
  `n_uts` decimal(5,0) NOT NULL,
  `n_uas` decimal(5,0) NOT NULL,
  `n_akhir` decimal(5,0) NOT NULL,
  `ket` varchar(10) NOT NULL,
  `praktek` decimal(5,0) NOT NULL,
  `keterangan` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `kd_mapel`, `nis`, `kd_ruang`, `n_uh`, `n_uts`, `n_uas`, `n_akhir`, `ket`, `praktek`, `keterangan`) VALUES
(1, 'MP01', '1920.01.001', 'RK01', '70', '70', '70', '70', 'B', '70', 'B'),
(3, 'MP05', '1920.01.002', 'RK01', '0', '0', '0', '0', '', '0', ''),
(4, 'MP06', '1920.01.003', 'RK02', '0', '0', '0', '0', '', '0', '');

-- --------------------------------------------------------

--
-- Table structure for table `ruang`
--

CREATE TABLE `ruang` (
  `kd_ruang` varchar(6) NOT NULL,
  `nama_ruang` varchar(20) NOT NULL,
  `nip` varchar(32) NOT NULL,
  `thnajar` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ruang`
--

INSERT INTO `ruang` (`kd_ruang`, `nama_ruang`, `nip`, `thnajar`) VALUES
('RK01', 'SATU A', '196405112008012001', '2019 / 2020'),
('RK02', 'SATU B', '196404052008012003', '2019 / 2020'),
('RK03', 'DUA A', '196906042008012012', '2019 / 2020'),
('RK04', 'DUA B', '198503182016062302', '2019 / 2020');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nis` varchar(11) NOT NULL,
  `nama_siswa` varchar(40) NOT NULL,
  `tempatlhr` varchar(30) NOT NULL,
  `tgllahir` date NOT NULL,
  `alamat` text NOT NULL,
  `gender` enum('LAKI-LAKI','PEREMPUAN') NOT NULL,
  `agama` enum('ISLAM','KRISTEN','BUDHA','HINDU','KHONG HU CHU') NOT NULL,
  `kelas` varchar(6) NOT NULL,
  `status` enum('KANDUNG','ANGKAT','TIRI') NOT NULL,
  `anakke` varchar(15) NOT NULL,
  `namaayah` varchar(30) NOT NULL,
  `namaibu` varchar(30) NOT NULL,
  `alamatortu` text NOT NULL,
  `telportu` varchar(13) NOT NULL,
  `pekerjaanayah` varchar(30) NOT NULL,
  `pekerjaanibu` varchar(30) NOT NULL,
  `namawali` varchar(30) NOT NULL,
  `alamatwali` text NOT NULL,
  `telpwali` varchar(13) NOT NULL,
  `pekerjaanwali` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nis`, `nama_siswa`, `tempatlhr`, `tgllahir`, `alamat`, `gender`, `agama`, `kelas`, `status`, `anakke`, `namaayah`, `namaibu`, `alamatortu`, `telportu`, `pekerjaanayah`, `pekerjaanibu`, `namawali`, `alamatwali`, `telpwali`, `pekerjaanwali`) VALUES
('1920.01.001', 'Nur Dina', 'Bandung', '2012-01-16', 'KP. CIBOLANG RT. 03 RW. 03 DESA BANJARSARI', 'PEREMPUAN', 'ISLAM', '1', 'KANDUNG', 'SATU', 'Dalim', 'Delya', 'KP. CIBOLANG RT. 03 RW. 03 DESA BANJARSARI', '084736472837', 'KARYAWAN BUMN', 'IBU RUMAH TANGGA', '-', '-', '-', '-'),
('1920.01.002', 'Nova', 'Bandung', '2012-08-26', 'KP. CIBOLANG Rt. 03 Rw. 01', 'LAKI-LAKI', 'ISLAM', '1', 'KANDUNG', 'DUA', 'IYUS', 'NITA', 'KP. CIBOLANG Rt. 03 Rw. 01', '084736472837', 'KARYAWAN BUMN', 'IBU RUMAH TANGGA', '-', '-', '-', '-'),
('1920.01.003', 'Zia Raissa', 'Bandung', '2012-04-14', 'Kp. Tarikolot Rt. 01 Rw. 02', 'PEREMPUAN', 'ISLAM', '1', 'KANDUNG', 'Satu', 'Deni', 'Devi', 'Kp. Tarikolot Rt. 01 Rw. 02', '085748594833', 'Peternak', 'Ibu Rumah Tangga', '-', '-', '-', '-'),
('1920.01.004', 'Rivaldi', 'Bandung', '2012-05-26', 'KP. Tari Kolot Rt. 03 Rw. 03 Desa Banjarsari', 'LAKI-LAKI', 'ISLAM', '1', 'KANDUNG', 'Satu', 'Rijal', 'Nurul', 'KP. Tari Kolot Rt. 03 Rw. 03 Desa Banjarsari', '084736472837', 'Peternak', 'Ibu Rumah Tangga', '-', '-', '-', '-'),
('1920.01.005', 'Mia Nur Hasanah', 'Bandung', '2012-05-19', 'KP. Sukaati Rt. 03 Rw. 03 Desa Banjarsari', 'PEREMPUAN', 'ISLAM', '1', 'KANDUNG', 'DUA', 'Maman', 'Tati', 'KP. Sukaati Rt. 03 Rw. 03 Desa Banjarsari', '084736472837', 'KARYAWAN BUMN', 'KARYAWAN BUMN', '-', '-', '-', '-'),
('1920.01.006', 'Mila', 'Garut', '2012-01-22', 'Kp. Cibolang Rt. 01 Rw. 03 Desa Banjarsari', 'PEREMPUAN', 'ISLAM', '1', 'KANDUNG', 'Tiga', 'Beri', 'Nur', 'Kp. Cibolang Rt. 01 Rw. 03 Desa Banjarsari', '085647388567', 'Peternak', 'Ibu Rumah Tangga', '-', '-', '-', '-'),
('1920.01.007', 'Yeyen Nur', 'Bekasi', '2012-06-08', 'Kp. Sukaati Rt. 01 Rw. 03 Desa Banjarsari', 'PEREMPUAN', 'ISLAM', '1', 'KANDUNG', 'DUA', 'Rijal', 'Lina', 'Kp. Sukaati Rt. 01 Rw. 03 Desa Banjarsari', '084736472837', 'KARYAWAN BUMN', 'IBU RUMAH TANGGA', '-', '-', '-', '-'),
('1920.01.008', 'Wulandari', 'Bandung', '2012-11-02', 'Kp. Tarikolot Rt. 01 Rw. 02 Desa Banjarsari', 'PEREMPUAN', 'ISLAM', '1', 'KANDUNG', 'SATU', 'DALIM', 'DELYA', 'Kp. Tarikolot Rt. 01 Rw. 02 Desa Banjarsari', '087584664537', 'KARYAWAN BUMN', 'IBU RUMAH TANGGA', '-', '-', '-', '-'),
('1920.01.009', 'Reynaldi', 'Jakarta', '2012-09-29', 'Kp. Cibolang Rt. 03 Rw. 02 Desa Banjarsari', 'LAKI-LAKI', 'ISLAM', '1', 'KANDUNG', 'Empat', 'Rajab', 'Cici', 'Kp. Cibolang Rt. 03 Rw. 02 Desa Banjarsari', '082534412324', 'Karyawan BUMN', 'Ibu Rumah Tangga', '-', '-', '-', '-'),
('1920.01.010', 'Hanifa', 'Bandung', '2012-07-09', 'Kp. Cibolang Rt. 03 Rw. 01 Desa Banjarsari', 'PEREMPUAN', 'ISLAM', '1', 'KANDUNG', 'Tiga', 'Nandang', 'Firli', 'Kp. Cibolang Rt. 03 Rw. 01 Desa Banjarsari', '086675770912', 'Peternak', 'Ibu Rumah Tangga', '-', '-', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `syarat`
--

CREATE TABLE `syarat` (
  `id` int(11) NOT NULL,
  `jenis` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `syarat`
--

INSERT INTO `syarat` (`id`, `jenis`) VALUES
(1, 'Akta Kelahiran'),
(2, 'Kartu Keluarga'),
(3, 'KTP Orang Tua');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` enum('admin','guru','walikelas') NOT NULL,
  `nip` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `level`, `nip`) VALUES
(1, 'maryani123', 'maryani123', 'admin', ''),
(2, 'popon11', 'popon11', 'walikelas', ''),
(3, 'eti781', 'eti781', 'guru', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftarsiswa`
--
ALTER TABLE `daftarsiswa`
  ADD PRIMARY KEY (`id_daftar`),
  ADD KEY `kd_ruang` (`kd_ruang`),
  ADD KEY `nis` (`nis`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `nip` (`nip`),
  ADD KEY `kd_mapel` (`kd_mapel`),
  ADD KEY `kd_ruang` (`kd_ruang`);

--
-- Indexes for table `kenaikan`
--
ALTER TABLE `kenaikan`
  ADD PRIMARY KEY (`id_naik`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`kd_mapel`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`),
  ADD KEY `kd_mapel` (`kd_mapel`),
  ADD KEY `nis` (`nis`),
  ADD KEY `kd_ruang` (`kd_ruang`);

--
-- Indexes for table `ruang`
--
ALTER TABLE `ruang`
  ADD PRIMARY KEY (`kd_ruang`),
  ADD KEY `nip` (`nip`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `syarat`
--
ALTER TABLE `syarat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `nama_guru` (`nip`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftarsiswa`
--
ALTER TABLE `daftarsiswa`
  MODIFY `id_daftar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kenaikan`
--
ALTER TABLE `kenaikan`
  MODIFY `id_naik` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `syarat`
--
ALTER TABLE `syarat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `daftarsiswa`
--
ALTER TABLE `daftarsiswa`
  ADD CONSTRAINT `daftarsiswa_ibfk_1` FOREIGN KEY (`kd_ruang`) REFERENCES `ruang` (`kd_ruang`),
  ADD CONSTRAINT `daftarsiswa_ibfk_2` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`);

--
-- Constraints for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `jadwal_ibfk_2` FOREIGN KEY (`nip`) REFERENCES `guru` (`nip`),
  ADD CONSTRAINT `jadwal_ibfk_3` FOREIGN KEY (`kd_mapel`) REFERENCES `mapel` (`kd_mapel`),
  ADD CONSTRAINT `jadwal_ibfk_4` FOREIGN KEY (`kd_ruang`) REFERENCES `ruang` (`kd_ruang`);

--
-- Constraints for table `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `nilai_ibfk_1` FOREIGN KEY (`kd_mapel`) REFERENCES `mapel` (`kd_mapel`),
  ADD CONSTRAINT `nilai_ibfk_2` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`),
  ADD CONSTRAINT `nilai_ibfk_3` FOREIGN KEY (`kd_ruang`) REFERENCES `ruang` (`kd_ruang`);

--
-- Constraints for table `ruang`
--
ALTER TABLE `ruang`
  ADD CONSTRAINT `ruang_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `guru` (`nip`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
