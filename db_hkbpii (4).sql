-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2022 at 06:29 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kapel`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_agenda`
--

CREATE TABLE `tbl_agenda` (
  `agenda_id` int(11) NOT NULL,
  `agenda_nama` varchar(200) NOT NULL,
  `agenda_tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `agenda_deskripsi` text NOT NULL,
  `agenda_mulai` date NOT NULL,
  `agenda_selesai` date NOT NULL,
  `agenda_tempat` varchar(90) NOT NULL,
  `agenda_waktu` varchar(30) NOT NULL,
  `agenda_keterangan` varchar(200) NOT NULL,
  `agenda_author` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_agenda`
--

INSERT INTO `tbl_agenda` (`agenda_id`, `agenda_nama`, `agenda_tanggal`, `agenda_deskripsi`, `agenda_mulai`, `agenda_selesai`, `agenda_tempat`, `agenda_waktu`, `agenda_keterangan`, `agenda_author`) VALUES
(1, 'Sermon Parhalado (Huria/ Sa-Ressort)', '2022-07-29 03:48:24', 'Dipatupa do Sermon Parhalado Siganup Jumat, Ingana marganti-ganti Sabungan dht Pagaran', '2021-03-19', '2021-03-19', 'Gereja HKBP Resort Sidikalang II', '15.00 Wib - sd selesai', '-	Dimulai ma sermon Parhalado : Hari Jumat, 19 Maret 2021\r\n-	Parsermonan di mulai Pkl. 15.00 Wib tu Angka Calon Sintua \r\n-	Parsermonan patanakhon Hata ni Debata di mulai Pkl.16.00 Wib\r\n-	Sangsi Pangko', 'St.Nelson Simanjorang'),
(2, 'Pendaftaran Parguru Malua', '2022-07-29 03:52:30', 'apatupa do Marsiajar tu angka Parguru Malua dibagasan Taon 2021 on', '2021-03-28', '2021-04-04', 'Ruang Konsistori', '09.30 - 16.00 WIB', 'Jala marguru ma sahali saminggu (Masa Pandemi).\r\nAsa boi mardalan Pembelajaran tu angka namarguru malua secara evektif na, dibagi ma angka parguru I manang pigapiga kelompok.\r\nDirencanahon ma manghati', 'Steffanny'),
(3, 'Pesta Gotilon', '2022-07-29 03:54:31', 'Tapatupa do Pesta Gotilon (Pesta Panen) di Hurianta on taon 2021 on', '2021-03-21', '2021-03-21', 'Gereja HKBP Resort Sidikalang II', '09.00 - sd selesai', 'Dohot godangna @Rp.450.000,-/KK', 'Steffanny');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_album`
--

CREATE TABLE `tbl_album` (
  `album_id` int(11) NOT NULL,
  `album_nama` varchar(50) NOT NULL,
  `album_tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `album_pengguna_id` int(11) NOT NULL,
  `album_author` varchar(60) NOT NULL,
  `album_count` int(11) NOT NULL,
  `album_cover` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_album`
--

INSERT INTO `tbl_album` (`album_id`, `album_nama`, `album_tanggal`, `album_pengguna_id`, `album_author`, `album_count`, `album_cover`) VALUES
(1, 'Natal Naposo Bulung 2021', '2022-07-29 08:13:40', 5, 'Steffanny', 5, '81ade32c772031728f89fd22e2ec55c3.jpeg'),
(2, 'Majelis Pimpinan Gereja', '2022-07-29 08:12:10', 5, 'Steffanny', 4, 'd4431213a1894c433961b83dc9b57ee2.JPG'),
(3, 'Eliezer (Remaja HKBP II)', '2022-07-29 08:13:22', 5, 'Steffanny', 3, '909bbb24c0e29fbabdcbdeb3343efdbf.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dewan`
--

CREATE TABLE `tbl_dewan` (
  `dewan_id` int(11) NOT NULL,
  `dewan_parhalado_id` int(11) NOT NULL,
  `dewan_katid` int(11) NOT NULL,
  `dewan_jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_dewan`
--

INSERT INTO `tbl_dewan` (`dewan_id`, `dewan_parhalado_id`, `dewan_katid`, `dewan_jabatan`) VALUES
(1, 46, 1, 'Ketua Dewan Koinonia'),
(2, 63, 1, 'Sei Sekolah Minggu'),
(3, 43, 1, 'Sei Remaja/Naposo'),
(4, 58, 1, 'Sei Perempuan'),
(5, 61, 1, 'Sei Ama'),
(6, 45, 1, 'Sei Lansia'),
(7, 40, 3, 'Ketua Ketua Marturia'),
(8, 49, 3, 'Sei Musik'),
(9, 53, 3, 'Sei Zending'),
(10, 47, 2, 'Ketua Dewan Diakonia'),
(11, 44, 2, 'Sei Diakonia Sosial'),
(12, 42, 2, 'Sei Pendidikan'),
(13, 62, 2, 'Sei Kesehatan'),
(14, 59, 2, 'Sei Kemasyarakatan');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_files`
--

CREATE TABLE `tbl_files` (
  `file_id` int(11) NOT NULL,
  `file_judul` varchar(120) DEFAULT NULL,
  `file_deskripsi` text DEFAULT NULL,
  `file_tanggal` date NOT NULL,
  `file_oleh` varchar(60) NOT NULL,
  `file_download` int(11) DEFAULT 0,
  `file_data` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_files`
--

INSERT INTO `tbl_files` (`file_id`, `file_judul`, `file_deskripsi`, `file_tanggal`, `file_oleh`, `file_download`, `file_data`) VALUES
(13, 'MINGGU PENTAKOSTA I', 'MINGGU PENTAKOSTA I ; PARNINGOTAN ARI HASASAOR NI TONDI PARBADIA\r\nTopik : MANGOLU DIBAGASAN TONDI NI DEBATA\r\n(HIDUP DALAM ROH TUHAN)', '2022-06-05', 'steffanny', 0, '1129cb933f8dc0056fc4a95036457d37.pdf'),
(14, 'MINGGU TRINITATIS', 'MINGGU TRINITATIS : HASITOLUSADAON NI DEBATA\r\nTopik : DEBATANTA NASANGAP JALA NA TIMBUL\r\n(TUHAN KITA MULIA AN AGUNG)', '2022-06-12', 'steffanny', 0, '3c9c5a449a417d78b54eb899bb4c69c5.pdf'),
(15, 'MINGGU I SETELAH TRINITATIS', 'MINGGU I SETELAH TRINITATIS\r\nTopik : KITA ADALAH ANAK-ANAK ALLAH KARENA IMAN DIDALAM YESUS KRISTUS', '2022-06-19', 'St.Nelson S. Simanjorang', 0, '85e9c38c3a49c0abce5b384c498c2e58.pdf'),
(16, 'MINGGU II DUNG TRINITATIS', 'MINGGU II DUNG TRINITATIS\r\nTopik : SATIA MANGIHUTHON DEBATA\r\n(PENGIKUT TUHAN YANG SETIA)', '2022-06-26', 'St.Nelson S. Simanjorang', 0, '60d00d3914e3d26682fb229a39cfb945.pdf'),
(17, 'MINGGU Ke III SETELAH TRINITATIS', 'MINGGU Ke III SETELAH TRINITATIS\r\nTopik : BERBUAT BAIK KEPADA SEMUA ORANG\r\n(MANGULAHON NADENGGAN TU SALUHUT HALAK)', '2022-07-03', 'Steffanny', 0, 'cc14e77016105245889d83400ff6353c.pdf'),
(18, 'MINGGU Pa-IV-hon DUNG TRINITATIS', 'MINGGU Pa-IV-hon DUNG TRINITATIS\r\nTopik : MAMARITAHON HUHUT MANGULAHON HATA NI DEBATA\r\n(MEMBERITAKAN DAN MELAKUKAN FIRMAN TUHAN)', '2022-07-10', 'Steffanny', 0, '5cd55b0769d9807672e5ecf8336c0dbe.pdf'),
(19, 'MINGGU Ke V SETELAH TRINITATIS', 'MINGGU Ke V SETELAH TRINITATIS\r\nTopik : YESUS MENCARI DAN MENYELAMATKAN YANG HILANG\r\n(JESUS MANGALULUI JALA PALUAHON NA MAGO)', '2022-07-17', 'Steffanny', 0, 'bc57d1777951a3c6234f0eee89a643ee.pdf'),
(20, 'MINGGU Pa-VI-hon DUNG TRINITATIS', 'MINGGU Pa-VI-hon DUNG TRINITATIS\r\nTopik : DEBATA NASATIA DIBAGASAN HOLONGNA\r\n(TUHAN SETIA DALAM KASIHNYA)', '2022-07-24', 'Steffanny', 0, '6ef17aa554b7442fe97240306b4f10a8.pdf'),
(21, 'MINGGU Pa-VII-hon DUNG TRINITATIS', 'MINGGU Pa-VII-hon DUNG TRINITATIS\r\nTopik : HABISUHON NA SIAN GINJANG (HIKMAT YANG ARI ATAS)', '2022-07-31', 'Steffanny', 0, '6489e9864f0a04f6da264c4fb094840c.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_flag`
--

CREATE TABLE `tbl_flag` (
  `flag_id` int(2) NOT NULL,
  `flag_nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_flag`
--

INSERT INTO `tbl_flag` (`flag_id`, `flag_nama`) VALUES
(1, 'Aktif'),
(2, 'Pindah'),
(3, 'Meninggal');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_galeri`
--

CREATE TABLE `tbl_galeri` (
  `galeri_id` int(11) NOT NULL,
  `galeri_judul` varchar(60) NOT NULL,
  `galeri_tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `galeri_gambar` varchar(40) NOT NULL,
  `galeri_album_id` int(11) NOT NULL,
  `galeri_pengguna_id` int(11) NOT NULL,
  `galeri_author` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_galeri`
--

INSERT INTO `tbl_galeri` (`galeri_id`, `galeri_judul`, `galeri_tanggal`, `galeri_gambar`, `galeri_album_id`, `galeri_pengguna_id`, `galeri_author`) VALUES
(1, 'Natal 2021', '2022-07-29 08:09:15', '7a80d2b294d48bb7788ff777027b1e66.jpeg', 1, 5, 'Steffanny'),
(2, 'Natal 2021', '2022-07-29 08:09:36', '7d95516560d040ba4ad6c721da3f382c.JPG', 1, 5, 'Steffanny'),
(3, 'Natal 2021', '2022-07-29 08:09:59', 'ae0295ed2895bbde79fe876c285f6a12.JPG', 1, 5, 'Steffanny'),
(4, 'Natal 2021', '2022-07-29 08:10:24', '23dd31b27eaca871e1f0d855845c133f.JPG', 1, 5, 'Steffanny'),
(5, 'Parhalado', '2022-07-29 08:10:50', '82933deafec2351f2c37062c1c85da5b.JPG', 2, 5, 'Steffanny'),
(6, 'Parhalado', '2022-07-29 08:11:07', 'b26daaf9d76fd5c19f1de9c88cea7219.JPG', 2, 5, 'Steffanny'),
(7, 'Parhalado', '2022-07-29 08:11:26', '56a2fb89de173830692862a29526ef30.JPG', 2, 5, 'Steffanny'),
(8, 'Parhalado', '2022-07-29 08:12:10', 'eff99bbcd30f0ad12ec036fb557496bf.JPG', 2, 6, 'St.Nelson Simanjorang'),
(9, 'Eliezer', '2022-07-29 08:12:31', '7c01d56bb68efd42bd57a518ebc7c482.JPG', 3, 6, 'St.Nelson Simanjorang'),
(10, 'Eliezer', '2022-07-29 08:12:44', '2f120880291aa0a3adb627cf6579badd.JPG', 3, 6, 'St.Nelson Simanjorang'),
(11, 'Eliezer', '2022-07-29 08:13:22', 'c9bce822e762fbc332dd31eb2ab37fa6.JPG', 3, 6, 'St.Nelson Simanjorang'),
(12, 'Tim Musik', '2022-08-08 16:16:21', '037c8ebc63ff7157df808b11c8a09316.jpeg', 1, 9, 'St.A.Sianturi');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_inbox`
--

CREATE TABLE `tbl_inbox` (
  `inbox_id` int(11) NOT NULL,
  `inbox_nama` varchar(40) NOT NULL,
  `inbox_email` varchar(60) NOT NULL,
  `inbox_kontak` varchar(20) NOT NULL,
  `inbox_pesan` text NOT NULL,
  `inbox_tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `inbox_status` int(11) DEFAULT 1 COMMENT '1=Belum dilihat, 0=Telah dilihat'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_inbox`
--

INSERT INTO `tbl_inbox` (`inbox_id`, `inbox_nama`, `inbox_email`, `inbox_kontak`, `inbox_pesan`, `inbox_tanggal`, `inbox_status`) VALUES
(1, 'steffanny putri', 'putristeffanny6@gmail.com', '+6281949667728', 'Good', '2022-07-29 08:29:46', 0),
(2, 'Lili', 'lili@gmail.com', '+6281949667789', 'Mantap jiuwwaa', '2022-07-29 08:31:05', 0),
(4, 'siten gultom', 'siten@gmail.com', '0813 1841 207', 'sangat Baik', '2022-09-08 04:14:15', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jadwal_ibadah`
--

CREATE TABLE `tbl_jadwal_ibadah` (
  `jadwal_ibadah_id` int(11) NOT NULL,
  `nama_ibadah` varchar(150) CHARACTER SET latin1 DEFAULT NULL,
  `ibadah_tanggal` date DEFAULT NULL,
  `ibadah_waktu` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `ibadah_keterangan` varchar(100) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_jadwal_ibadah`
--

INSERT INTO `tbl_jadwal_ibadah` (`jadwal_ibadah_id`, `nama_ibadah`, `ibadah_tanggal`, `ibadah_waktu`, `ibadah_keterangan`) VALUES
(1, 'Ibadah Sekolah Minggu', '2022-05-01', '08.30', 'Bahasa Indonesia'),
(2, 'Ibadah Pagi [Gel.1]', '2022-05-01', '10.00', 'Bahasa Indonesia'),
(3, 'Ibadah Siang [Gel.2]', '2022-05-01', '11.00', 'Bahasa Batak'),
(5, 'Ibadah Padang', '2022-05-14', '05.00', 'R/NHKBP, beserta Pembimbing'),
(7, 'Ibadah Padang ke-II', '2022-05-21', '04.00', 'Bersama Koor Ama Huria dan Ama DosRoha');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jemaat`
--

CREATE TABLE `tbl_jemaat` (
  `jemaat_id` char(9) NOT NULL,
  `jemaat_nokk` char(8) NOT NULL,
  `jemaat_nama` varchar(100) NOT NULL,
  `jemaat_jenkel` varchar(1) NOT NULL,
  `jemaat_tmptlahir` varchar(100) NOT NULL,
  `jemaat_tgllahir` date NOT NULL,
  `jemaat_tgltardidi` date NOT NULL,
  `jemaat_tglmalua` date NOT NULL,
  `jemaat_pendidikan` varchar(100) NOT NULL,
  `jemaat_pekerjaan` varchar(100) NOT NULL,
  `jemaat_statuskel` varchar(100) NOT NULL,
  `jemaat_notelp` varchar(13) NOT NULL,
  `jemaat_nourutkk` int(2) NOT NULL,
  `jemaat_flag_id` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_jemaat`
--

INSERT INTO `tbl_jemaat` (`jemaat_id`, `jemaat_nokk`, `jemaat_nama`, `jemaat_jenkel`, `jemaat_tmptlahir`, `jemaat_tgllahir`, `jemaat_tgltardidi`, `jemaat_tglmalua`, `jemaat_pendidikan`, `jemaat_pekerjaan`, `jemaat_statuskel`, `jemaat_notelp`, `jemaat_nourutkk`, `jemaat_flag_id`) VALUES
('D6R150001', 'KK010001', 'St.BONAR SIALAHI', 'L', 'Hr.Boho', '1977-04-06', '1993-07-04', '1993-07-04', 'SLTA', 'Wiraswasta', 'Kepala Keluarga', '082363714572', 1, 1),
('D6R150002', 'KK010001', 'LINA SINAGA', 'P', 'Sumbul Berampu', '1979-01-15', '1998-06-01', '2001-05-06', 'SLTA', 'Petani', 'Ibu Rumah Tangga', '', 2, 1),
('D6R150003', 'KK010001', 'JHON PAULUS SIHALOHO', 'L', 'Sidikalang', '2002-12-26', '2002-03-03', '0000-00-00', 'SMK', 'Pelajar', 'Anak', '', 3, 1),
('D6R150004', 'KK010001', 'DAME MARIA ANNA VALENTINA', 'P', 'Sidikalang', '2005-11-30', '2005-12-26', '0000-00-00', 'SMP', 'Pelajar', 'Anak', '', 4, 3),
('D6R150005', 'KK010001', 'EVI CRISTIAN SIHALOHO', 'P', 'Sidikalang', '2010-03-22', '2010-12-12', '0000-00-00', 'SD', 'Pelajar', 'Anak', '', 5, 1),
('D6R150006', 'KK010001', 'CHESHANY SIHALOHO', 'P', 'Sidikalang', '2012-02-06', '2012-05-08', '0000-00-00', 'SD', 'Pelajar', 'Anak', '', 6, 1),
('D6R150007', 'KK010002', 'ALBERT NABABAN 	', 'L', 'Tapanuli Utara', '1958-02-19', '0000-00-00', '0000-00-00', 'SLTA', 'Pengsiunan', 'Kepala Keluarga', '', 1, 3),
('D6R150008', 'KK010002', 'ARTA SIMANULLANG', 'P', 'Sidikalang', '1962-07-22', '0000-00-00', '0000-00-00', 'S-1', 'Guru', 'Ibu Rumah Tangga', '', 2, 3),
('D6R150009', 'KK010002', 'BERTA NABABAN', 'P', 'Sidikalang', '1987-07-30', '1987-12-26', '2004-04-04', 'S-1', 'PNS', 'Anak', '', 3, 1),
('D6R150010', 'KK010002', 'SAFRINA NABABAN', 'P', 'Sidikalang', '1989-03-20', '1989-10-08', '2004-04-04', 'S-1', 'Wiraswasta', 'Anak', '', 4, 1),
('D6R150011', 'KK010002', 'ALFONSO NABABAN', 'L', 'Sidikalang', '1991-09-14', '1992-04-05', '2009-12-20', 'S-1', 'Wiraswasta', 'Anak', '', 5, 1),
('D6R150012', 'KK010002', 'EBENEZER NABABAN', 'L', 'Sidikalang', '1994-12-17', '2009-12-25', '2009-12-20', 'S-1', 'Wiraswasta', 'Anak', '', 6, 1),
('D6R150013', 'KK010003', 'SITEN GULTOM', 'L', '-', '1958-05-03', '0198-09-03', '0000-00-00', 'SLTA', 'Bertani', 'Kepala Keluarga', '0813 1841 207', 1, 1),
('D6R150014', 'KK010004', 'MALEM UKUR PINEM', 'L', '-', '1984-03-19', '1984-08-20', '0000-00-00', 'SD', 'Wiraswasta', 'Kepala Keluarga', '085373046009', 1, 1),
('D6R150015', 'KK010004', 'HERLINA SIHOMBING', 'P', '-', '1985-08-10', '1985-12-07', '2004-09-05', 'SLTP', 'Wiraswasta', 'Ibu Rumah Tangga', '', 2, 1),
('D6R150016', 'KK010004', 'GIDEON ANDRIANO PINEM', 'L', '-', '2005-07-12', '2006-04-17', '0000-00-00', 'SLTP', 'Pelajar', 'Anak', '', 3, 1),
('D6R150017', 'KK010004', 'CRISTINE NATALY PINEM', 'L', '', '2008-12-12', '2009-02-15', '0000-00-00', 'SLTP', 'Pelajar', 'Anak', '', 4, 1),
('D6R150018', 'KK010004', 'IMMANUEL PINEM', 'L', '-', '2015-07-15', '2015-12-26', '0000-00-00', '-', '-', 'Anak', '', 5, 1),
('D6R150019', 'KK010004', 'VITA LILI PEBRIANTI SIHOMBING', 'P', '', '2004-02-21', '0000-00-00', '0000-00-00', 'SLTP', 'Pelajar', 'Anak', '', 6, 1),
('D6R150020', 'KK010005', 'TIORLI SIMANJUNTAK ', 'P', 'Sipahutar', '1943-04-17', '0000-00-00', '0000-00-00', '-', 'Petani', 'Kepala Keluarga', ' 081360520488', 1, 1),
('D6R150021', 'KK010006', 'ANDAR SIMANGUNSONG', 'L', 'Sidikalang', '1974-11-15', '1975-10-12', '2002-06-16', 'STM', 'Wiraswasta', 'Anak', ' 081360520488', 1, 1),
('D6R150022', 'KK010006', 'FARIDA GULTOM', 'P', 'Cinta Dame', '1973-04-17', '2002-01-20', '2002-02-05', 'SMA', 'Bertani', 'Kepala Keluarga', '-', 2, 1),
('D6R150023', 'KK010006', 'MOSES SIMANGUNSONG', 'L', 'Sidikalang', '2002-12-23', '2003-10-12', '0000-00-00', 'SMU', 'Pelajar', 'Anak', '', 3, 1),
('D6R150024', 'KK010006', 'FELIX SIMANGUNSONG', 'L', 'Sidikalang', '2007-08-01', '2007-12-25', '0000-00-00', 'SD', 'Pelajar', 'Anak', '', 4, 1),
('D6R150025', 'KK010007', 'RUSTI MANURUNG', 'P', 'Lae Meang', '1948-12-31', '1949-04-25', '1965-12-26', 'SMP', 'Bertani', 'Kepala Keluarga', '', 1, 3),
('D6R150026', 'KK010008', 'SABAR MANAHAN TANI SIMANG', 'L', 'Sidikalang', '1967-09-05', '1967-12-17', '1997-09-16', 'SMA', 'Petani', 'Kepala Keluarga', '0823 8466 553', 1, 1),
('D6R150027', 'KK010008', 'RASKITA NURDIANA BANJARNAHOR', 'P', 'Sidikalang', '1976-07-19', '1992-05-24', '1997-09-16', 'smp', 'Bertani', 'Kepala Keluarga', '', 2, 1),
('D6R150028', 'KK010008', 'RONNI MANGUNSONG', 'L', 'Bekasi', '1998-05-30', '1999-12-25', '0000-00-00', 'SMP', 'Pelajar', 'Anak', '', 3, 1),
('D6R150029', 'KK010008', 'INDAH SARINAH MANGUNSONG', 'P', 'T.Tinggi', '2000-08-14', '2001-12-25', '0000-00-00', 'SMP', 'Pelajar', 'Anak', '', 4, 1),
('D6R150030', 'KK010008', 'RIO MANGUNSONG', 'L', 'Rimbo Makmul', '2002-04-03', '2002-12-29', '0000-00-00', 'Mahasiswa', 'Pelajar', 'Anak', '', 5, 1),
('D6R150031', 'KK010008', 'VANY NATALIA MANGUNSONG', 'P', 'Segati', '2010-12-20', '2011-04-10', '0000-00-00', 'SMP', 'Pelajar', 'Anak', '', 6, 1),
('D6R150032', 'KK010008', 'RUSPITA KASIM MANGUNSONG', 'L', 'Sidikalang', '2016-06-19', '0000-00-00', '0000-00-00', 'Paud', '', 'Anak', '', 7, 1),
('D6R150033', 'KK010009', 'A.SIANTURI', 'L', 'Kalang Baru', '1972-12-02', '0000-00-00', '0000-00-00', 'SLTP', 'Wiraswasta', 'Kepala Keluarga', '081260055269', 1, 2),
('D6R150034', 'KK010009', 'M.br.LINGGA', 'P', 'Tumangger', '1972-04-14', '0000-00-00', '0000-00-00', 'SMA', 'Berdagang', 'Ibu Rumah Tangga', '', 2, 1),
('D6R150035', 'KK010009', 'LEO F.SIANTURI', 'L', 'Kalang Baru', '1995-02-15', '1995-05-07', '0000-00-00', 'SMP', 'Pedangan', 'Anak', '', 3, 1),
('D6R150036', 'KK010009', 'AYU KARTIKA SIANTURI', 'P', 'Kalang Baru', '1996-09-04', '1997-08-31', '2013-04-01', 'SMA', 'Berdagang', 'Anak', '', 4, 1),
('D6R150037', 'KK010009', 'SAFITRI SIANTURI', 'P', 'Kalang Baru', '1998-06-03', '1998-10-04', '0000-00-00', 'Mahasiswa', 'Pelajar', 'Anak', '', 5, 1),
('D6R150038', 'KK010009', 'INDAH PERMATA SARI SIANTURI', 'P', 'Kalang Baru', '2000-06-14', '2001-10-07', '0000-00-00', 'Mahasiswa', 'Pelajar', 'Anak', '', 6, 1),
('D6R150039', 'KK010009', 'MELATI KUMALA DEWI SIANTURI', 'P', 'Kalang Baru', '2005-03-27', '2005-05-05', '0000-00-00', 'SMP', 'Pelajar', 'Anak', '', 7, 1),
('D6R150040', 'KK010009', 'MAWAR ASSARI SIANTURI', 'P', 'Kalang Baru', '2006-09-03', '2007-12-25', '0000-00-00', 'SMP', 'Pelajar', 'Anak', '', 8, 1),
('D6R150041', 'KK010010', 'LIN SIANTURI	', 'L', 'Dolok Sanggul', '1950-12-11', '1950-03-10', '1962-01-20', 'SR', 'Bertani', 'Kepala Keluarga', '', 1, 1),
('D6R150042', 'KK010010', 'ALBINA SIMANJUNTAK', 'P', 'Balige', '1954-05-24', '1954-09-03', '1965-02-01', 'SR', 'Bertani', 'Kepala Keluarga', '', 2, 1),
('D6R150043', 'KK010010', 'RAHMAT MANGATAS SIANTURI', 'L', 'Kalang Baru', '1990-12-20', '1990-04-16', '2010-06-02', 'SMK', 'Karyawan', 'Anak', '', 3, 1),
('D6R150044', 'KK010010', 'AMRIA MOSES SIANTURI', 'P', 'Jakarta', '2007-03-16', '0000-00-00', '0000-00-00', 'SD', 'Pelajar', 'Anak', '', 4, 1),
('D6R150045', 'KK060001', 'St.Mangara Tua Sintinjak,SE', 'L', 'Sidikalang', '1960-05-16', '0000-00-00', '0000-00-00', 'S-1', 'Wiraswasta', 'Kepala Keluarga', '081262343224', 1, 1),
('D6R150046', 'KK060001', 'Dra.Astina Farida Harianja ', 'P', 'Jakarta', '1962-09-27', '0000-00-00', '0000-00-00', 'S-1', 'Wiraswasta', 'Kepala Keluarga', '', 2, 1),
('D6R150047', 'KK060001', 'Dame Renta Sitinjak,SH', 'P', 'Sidikalang', '1990-03-24', '0000-00-00', '0000-00-00', 'S-1', 'Wiraswasta', 'Anak', '', 3, 1),
('D6R150048', 'KK060001', 'Obed Ebenezer Sitinjak, ST', 'L', 'Sidikalang', '1993-09-18', '0000-00-00', '0000-00-00', 'S-1', 'Karyawan', 'Anak', '', 4, 1),
('D6R150049', 'KK060001', 'Benison S.Sitinjak ', 'L', 'Sidikalang', '1997-10-10', '0000-00-00', '0000-00-00', 'S-1', 'Karyawan', 'Anak', '', 5, 1),
('D6R150050', 'KK060001', 'Roy Benhard Sitinjak', 'L', 'Sidikalang', '1999-10-16', '0000-00-00', '0000-00-00', 'S-1', 'Mahasiswa', 'Anak', '', 6, 1),
('D6R150051', 'KK060004', 'Mangara Bako', 'L', 'Sidikalang', '1979-03-11', '1979-04-01', '1997-06-22', 'S-1', 'Wiraswasta', 'Kepala Keluarga', '085275193322', 1, 1),
('D6R150052', 'KK060004', 'Uli Arny Juanita Tumanggor ', 'P', 'Sidikalang', '1979-07-11', '1980-02-24', '1996-06-30', 'S-1', 'PNS', 'Ibu Rumah Tangga', '', 2, 3),
('D6R150053', 'KK060004', 'Steven Agustino Caryesta Bako', 'L', 'Sidikalang', '2007-08-12', '2007-11-11', '0000-00-00', '', '', 'Anak', '', 3, 1),
('D6R150054', 'KK060004', 'Vidya Anggun Rohany Bako', 'P', 'Sidikalang', '2012-05-16', '2012-11-18', '0000-00-00', '', '', 'Anak', '', 4, 1),
('D6R150055', 'KK060004', 'Sahmo Rezeki Johannes Bako', 'L', 'Sidikalang', '2013-10-11', '2014-06-09', '0000-00-00', '', '', 'Anak', '', 5, 1),
('D6R150056', 'KK060005', 'Aman Selamat Tua Bako', 'L', '', '1951-09-27', '0000-00-00', '0000-00-00', 'SMP', 'Wiraswasta', 'Kepala Keluarga', '082165865278', 1, 1),
('D6R150057', 'KK060005', 'Lamria Delima Tampubolon', 'P', 'Sidikalang', '1955-01-26', '0000-00-00', '0000-00-00', 'SMP', '-', 'Kepala Keluarga', '', 2, 1),
('D6R150058', 'KK070001', 'St.SAUT LUMBAN GAOL', 'L', 'Sidikalang', '1959-03-16', '1960-05-16', '1973-11-18', 'SLTA', 'Pengsiunan', 'Kepala Keluarga', '08126591396', 1, 1),
('D6R150059', 'KK070001', 'RIDA SIMANGUNSONG', 'P', 'Sidikalang', '1961-12-05', '1962-05-27', '1976-10-24', 'S-1', 'PNS', 'Ibu Rumah Tangga', '', 2, 1),
('D6R150060', 'KK070001', 'SARBARITA LUMBAN GAOL', 'L', 'Sidikalang', '1991-05-04', '1991-07-14', '2006-04-30', 'SLTA', 'Wiraswasta', 'Anak', '', 3, 1),
('D6R150061', 'KK070002', 'TOHONAN RF.LUMBAN GAOL', 'L', 'Sidikalang', '1985-02-21', '1989-06-11', '2006-04-30', 'SLTA', 'Wiraswasta', 'Kepala Keluarga', '081260317321', 1, 1),
('D6R150062', 'KK070002', 'FALMA IRAWATI SIJABAT', 'P', 'Waringin', '1988-10-26', '1988-12-26', '2005-12-25', 'SLTA', 'Wiraswasta', 'Kepala Keluarga', '', 2, 1),
('D6R150063', 'KK070003', 'ROMITA SITINJAK', 'P', 'Km. Tiga', '1961-04-21', '1961-12-12', '0000-00-00', 'SLTP', 'Tk.Jahit', 'Kepala Keluarga/Ibu Rumah Tangga', '081260317321', 1, 1),
('D6R150064', 'KK070003', 'RICKYANDO SIMARMATA', 'L', 'Sidikalang', '1986-12-10', '1991-07-14', '2007-12-25', 'SD', 'Petani', 'Anak', '', 2, 1),
('D6R150065', 'KK070003', 'SUMURUNG SIMARMATA', 'L', 'Sidikalang', '1988-11-29', '1991-07-14', '2007-12-25', 'SMA', 'Petani', 'Anak', '', 3, 1),
('D6R150066', 'KK070003', 'BERNANDUS SIMARMATA', 'L', 'Sidikalang', '1992-12-04', '1993-08-01', '0000-00-00', 'SMA', 'Petani', 'Anak', '', 4, 1),
('D6R150067', 'KK070003', 'SINTIA SANTI SIMARMATA', 'P', 'Sidikalang', '1997-10-31', '1998-03-22', '2017-12-25', 'SMA', 'Pelajar', 'Anak', '', 5, 1),
('D6R150068', 'KK120001', 'St.Anggiat Sianturi', 'L', 'Lbn, Sitiotio', '1963-06-27', '1978-12-25', '1985-07-08', 'SMA', 'Wiraswasta', 'Kepala Keluarga', '082165370944', 1, 1),
('D6R150069', 'KK120001', 'Rusmawan Sihombing', 'P', 'Kentara', '1960-10-10', '1960-12-18', '1977-08-28', 'SPG', 'PNS', 'Kepala Keluarga', '', 2, 1),
('D6R150070', 'KK120001', 'Irvan Jonriver Sianturi', 'L', 'Sidikalang', '1988-06-24', '1989-12-24', '0000-00-00', 'SMK', 'Wiraswasta', 'Anak', '', 3, 1),
('D6R150071', 'KK120001', 'Parel Ivander Sianturi', 'L', 'Sidikalang', '1991-04-09', '1991-12-29', '0000-00-00', 'SMK', 'Wiraswasta', 'Anak', '', 4, 1),
('D6R150072', 'KK120001', 'Ester Suryati Sianturi', 'P', 'Sidikalang', '1993-03-16', '0000-00-00', '0000-00-00', 'SMA', 'Wiraswasta', 'Anak', '', 5, 1),
('D6R150073', 'KK120001', 'Dino Johan Sianturi', 'L', 'Sidikalang', '1996-08-28', '1996-12-25', '0000-00-00', 'SMK', 'Wiraswasta', 'Anak', '', 6, 1),
('D6R150074', 'KK120002', 'Hotmina Situngkir', 'P', 'Silalahi', '1962-09-05', '1963-06-10', '1986-07-12', 'SMA', 'Bertani', 'Kepala Keluarga/Ibu Rumah Tangga', '082277741901', 1, 1),
('D6R150075', 'KK120002', 'Junior Sihombing', 'L', 'Salak', '1987-06-16', '1988-05-08', '2004-04-04', 'SMA', 'Wiraswasta', 'Anak', '', 2, 1),
('D6R150076', 'KK120002', 'Sepronson Sihombing', 'L', 'Salak', '1988-09-09', '1989-04-16', '2004-04-04', 'SMA', 'Wiraswasta', 'Anak', '', 3, 1),
('D6R150077', 'KK120002', 'Tolapma Sihombing', 'L', 'Salak', '1994-01-30', '1994-12-25', '0000-00-00', 'S-1', 'Karyawan', 'Anak', '', 4, 1),
('D6R150078', 'KK120003', 'Ir.Gindo Alim Simbolon', 'L', 'Parmonangan', '1954-02-07', '1954-02-07', '1971-08-22', 'S-1', 'Pengsiunan', 'Kepala Keluarga', '081361144747', 1, 1),
('D6R150079', 'KK120003', 'Saida br.Gultom', 'P', 'Onanrunggu', '1954-01-21', '1970-03-01', '0000-00-00', 'SLTA', 'Pengsiunan', 'Kepala Keluarga', '', 2, 1),
('D6R150080', 'KK120003', 'Duma Simbolon', 'P', 'Sihiong', '1984-05-01', '1984-06-17', '1998-05-03', 'S-1', 'Karyawan', 'Anak', '', 3, 1),
('D6R150081', 'KK120003', 'Dewi Simbolon', 'P', 'Sihiong', '1990-09-12', '1990-10-28', '2008-03-24', 'S-1', 'Karyawan', 'Anak', '', 4, 1),
('D6R150082', 'KK120004', 'Hotman Simamora', 'L', 'Ht. Karangan', '1952-08-18', '0000-00-00', '0000-00-00', '', 'Berdagang', 'Kepala Keluarga', '', 1, 1),
('D6R150083', 'KK120004', 'Bunga br.Hutasoit', 'P', '', '1958-11-01', '0000-00-00', '0000-00-00', '', 'Bertani', 'Kepala Keluarga', '', 2, 1),
('D6R150084', 'KK120005', 'Bengar Sihombing', 'L', 'Sindula', '1962-04-29', '0000-00-00', '0000-00-00', 'SMA', 'Pegawai', 'Kepala Keluarga', '', 1, 1),
('D6R150085', 'KK120005', 'Nurmalina br.Purba', 'P', 'Hasurungan', '1965-11-05', '0000-00-00', '0000-00-00', 'SMA', 'Berdagang', 'Kepala Keluarga', '', 2, 1),
('D6R150086', 'KK120005', 'Monalisa Sihombing', 'P', 'Sidikalang', '1984-03-17', '2000-12-17', '0000-00-00', 'S-1', 'Karyawan', 'Anak', '', 3, 1),
('D6R150087', 'KK120005', 'Makmur Franata Sihombing', 'L', 'Sidikalang', '1996-12-09', '2000-12-17', '0000-00-00', 'D-3', 'Peg.Swasta', 'Anak', '', 4, 1),
('D6R150088', 'KK120006', 'St.Drs.Nelson Sinaga Simanjorang', 'L', 'Dairi', '1968-03-08', '1968-04-19', '1984-08-19', 'S-1', 'PNS/Guru', 'Kepala Keluarga', '081361752678', 1, 1),
('D6R150089', 'KK120006', 'Tiurlan Simbolon, SS', 'P', 'Medan', '1969-03-05', '1969-10-19', '1989-07-16', 'S-1', 'Wiraswasta', 'Ibu Rumah Tangga', '081376068860', 2, 1),
('D6R150090', 'KK120006', 'Yosua Nelan Sinaga Simanjorang,S.T', 'L', 'Medan', '1998-10-05', '1999-04-05', '2015-04-19', 'S-1', 'Karyawan', 'Anak', '082273733054', 3, 1),
('D6R150091', 'KK120006', 'Steffanny Putri N Simanjorang', 'P', 'Medan', '2000-07-20', '2000-12-26', '2016-12-18', 'Mahasiswa', 'Pelajar', 'Anak', '081264968045', 4, 1),
('D6R150092', 'KK120006', 'Zefanya Nelan Simanjorang', 'P', 'Sidikalang', '2004-02-12', '2005-09-04', '2019-12-26', 'Mahasiswa', 'Pelajar', 'Anak', '081370044377', 5, 1),
('D6R150093', 'KK120006', 'Lady Loisa N Simanjorang', 'P', 'Sidikalang', '2012-02-15', '2012-07-08', '0000-00-00', 'SD', 'Pelajar', 'Anak', '081272379319', 6, 1),
('D6R150094', 'KK120007', 'Manua Simamora', 'L', 'Bangun', '1960-05-26', '1960-08-27', '1976-12-25', 'SLTA', 'PNS', 'Kepala Keluarga', '081265580807', 1, 1),
('D6R150095', 'KK120007', 'Lisbet Situmorang,S.Pd', 'P', 'Sidikalang', '1961-03-10', '1961-06-25', '1976-10-03', 'S-1', 'PNS', 'Kepala Keluarga', '', 2, 1),
('D6R150096', 'KK120007', 'Elfrida Yuni Simamora,S.Keb.NERS', 'P', 'Sidikalang', '1989-01-04', '0000-00-00', '0000-00-00', 'S-1', 'Peg.Swasta', 'Anak', '', 3, 1),
('D6R150097', 'KK140001', 'St.REWIN SILABAN,S.Sos.MM', 'L', 'Sidikalang', '1959-03-13', '1959-04-19', '1972-11-19', 'S-2', 'PNS', 'Kepala Keluarga', '08116200459', 1, 1),
('D6R150098', 'KK140001', 'Dra.NURMAYA TOGATOROP', 'P', 'Tapanuli Utara', '1960-12-14', '1961-02-28', '1975-12-25', 'S-1', 'PNS', 'Kepala Keluarga', '', 2, 1),
('D6R150099', 'KK140001', 'HERTA A.SILABAN', 'P', 'Sidikalang', '1991-04-14', '1991-12-29', '2008-03-24', 'S-1', 'PNS', 'Anak', '', 3, 1),
('D6R150100', 'KK140001', 'HERLINA N.SILABAN', 'P', 'Sidikalang', '1993-11-23', '1994-04-03', '1994-04-03', 'S-1', 'Karyawan', 'Anak', '', 4, 1),
('D6R150101', 'KK140002', 'OKTO SOLIDEO  SILABAN', 'L', 'Sidikalang', '1988-10-17', '1988-12-25', '2015-04-03', 'S-1', 'Karyawan', 'Kepala Keluarga', '', 1, 1),
('D6R150102', 'KK140002', 'MEYLISSA SITOPU', 'P', 'Simalungun', '1990-03-08', '1990-06-20', '2009-04-26', 'S-1', 'Karyawan', 'Kepala Keluarga', '', 2, 1),
('D6R150103', 'KK140005', 'St.Banjar Pasaribu', 'L', 'Sidikalang', '1956-09-09', '1957-01-10', '1975-12-07', 'SLTA', 'Wiraswasta', 'Kepala Keluarga', '082294511091', 1, 1),
('D6R150104', 'KK140005', 'Tiarma Siahaan', 'P', 'Balige', '1960-04-16', '1960-08-07', '1975-09-08', 'SLTA', 'PNS', 'Ibu Rumah Tangga', '', 2, 1),
('D6R150105', 'KK140005', 'Dedy Bakti Eko Pasaribu', 'L', 'Sidikalang', '1987-10-28', '1988-04-10', '2016-12-26', 'SP', 'Peng.Swasta', 'Anak', '', 3, 1),
('D6R150106', 'KK140005', 'Sudirman Andhika I. Pasaribu', 'L', 'Sidikalang', '1992-03-15', '1992-09-13', '2011-01-23', 'SP', 'Peg.Swasta', 'Anak', '', 4, 3),
('D6R150107', 'KK070006', 'Pdt.Edison MB.Nababan,S.Th', 'L', 'Binjai', '1971-06-12', '1971-12-26', '1989-12-26', 'S-1', 'Pendeta Ressort', 'Kepala Keluarga', '6282272981090', 1, 1),
('D6R150108', 'KK070006', 'Shinta Siregar', 'P', 'Medan', '1973-05-25', '1973-12-12', '1990-12-24', 'S-1', 'Ibu Rumah Tangga', 'Ibu Rumah Tangga', '', 2, 1),
('D6R150109', 'KK070006', 'Daniel Petra Nababan', 'L', 'Sidikalang', '2000-08-01', '2000-12-26', '2016-12-18', 'Mahasiswa', 'Mahasiswa', 'Anak', '', 3, 1),
('D6R150110', 'KK070007', 'Pdt.Netty Farida Sirait,S.Th', 'P', '', '1979-05-07', '1979-12-26', '0000-00-00', 'S-1', 'Pendeta', 'Ibu Rumah Tangga', '082168368294', 2, 1),
('D6R150111', 'KK070007', 'Maston Silalahi', 'L', 'Parongil', '1978-03-23', '0000-00-00', '0000-00-00', 'S-1', '', 'Kepala Keluarga', '', 1, 1),
('D6R150112', 'KK070008', 'Biv.Pormina Tambunan,S.Mis', 'P', 'Aek Nauli', '1976-01-22', '0000-00-00', '0000-00-00', 'S-1', 'Biblevrouw', 'Ibu Rumah Tangga', '081375885246', 2, 1),
('D6R150113', 'KK070008', 'Swandi Simangunsong', 'L', 'Kt.Cane', '1963-07-09', '1966-08-14', '0000-00-00', 'S-1', '', 'Kepala Keluarga', '', 1, 1),
('D6R150114', 'KK010009', 'Diak.Justina Simbolon', 'P', 'Pangururan', '1984-04-03', '1984-12-12', '0000-00-00', 'D-3', 'Diakones', 'Ibu Rumah Tangga', '082283334086', 2, 1),
('D6R150115', 'KK010011', 'St.SINDAR DOMU MALAU', 'L', 'Sidikalang', '1965-02-11', '1965-05-02', '1982-05-30', 'SLTA', 'Wiraswasta', 'Kepala Keluarga', '082367326114', 1, 1),
('D6R150116', 'KK020001', 'St.Gulsen Purba,S.Pd', 'L', 'Dolok Sanggul', '1960-07-20', '0000-00-00', '0000-00-00', 'S-1', 'PNS', 'Kepala Keluarga', '081360157460', 1, 1),
('D6R150117', 'KK060006', 'St.Binuar Lumbangaol', 'L', 'Sidikalang', '1973-10-15', '0000-00-00', '0000-00-00', 'SLTA', 'PNS', 'Kepala Keluarga', '081361224138', 1, 1),
('D6R150118', 'KK070010', 'St.Eppen Sitanggang', 'L', 'Dl.Najagar', '1964-05-11', '0000-00-00', '0000-00-00', 'SLTA', 'Wiraswasta', 'Kepala Keluarga', '081375028443', 1, 1),
('D6R150119', 'KK080001', 'St.Pande Simanjuntak', 'L', 'Balige', '1975-06-06', '1975-07-27', '1989-12-26', 'SLTA', 'Pedagang', 'Kepala Keluarga', '081265416536', 1, 1),
('D6R150120', 'KK080006', 'St.Preddi Naibaho', 'L', 'Sitinjo', '1974-08-20', '0000-00-00', '0000-00-00', 'SLTP', 'Wiraswasta', 'Kepala Keluarga', '085362640097', 1, 1),
('D6R150121', 'KK090001', 'St.Antoni Togatorop', 'L', 'Sempung', '1972-06-27', '0000-00-00', '0000-00-00', 'SLTA', 'Wiraswasta', 'Kepala Keluarga', '081260038855', 1, 1),
('D6R150122', 'KK110001', 'St.Parasian Simanullang', 'L', '', '1958-02-07', '0000-00-00', '0000-00-00', 'SLTP', 'Pedagang', 'Kepala Keluarga', '082168018304', 1, 1),
('D6R150123', 'KK110002', 'St.Jaimin Tambunan', 'L', '', '1966-08-28', '0000-00-00', '0000-00-00', 'SLTP', 'Wiraswasta', 'Kepala Keluarga', '', 1, 1),
('D6R150124', 'KK130001', 'St.H.Tampubolon', 'L', '', '1961-11-15', '0000-00-00', '0000-00-00', 'SLTA', 'Pengusaha', 'Kepala Keluarga', '081281311110', 1, 1),
('D6R150125', 'KK130002', 'St.Tiurlan br.Hombing', 'P', 'Ht. Imbaru', '1957-12-20', '0000-00-00', '0000-00-00', 'S-1', 'PNS', 'Ibu Rumah Tangga', '08126346315', 2, 1),
('D6R150126', 'KK140006', 'St. Sunggul Sianturi	', 'L', 'Lb.Penaulu', '1977-05-15', '0000-00-00', '0000-00-00', 'S-1', 'PNS', 'Kepala Keluarga', '082161089085', 1, 1),
('D6R150127', 'KK010012', 'St.Hotmauli Sinamo,S.Th', 'P', 'Sidikalang', '1985-06-11', '0000-00-00', '0000-00-00', 'S-1', 'PNS', 'Ibu Rumah Tangga', '081260097585', 2, 1),
('D6R150128', 'KK090002', 'St.Morris Sitorus', 'L', 'Parongil', '1976-07-29', '0000-00-00', '0000-00-00', '', 'Pengusaha', 'Kepala Keluarga', '082165146160', 1, 1),
('D6R150129', 'KK130003', 'St. Agus Piser Simamora,SE', 'L', 'Sidikalang', '1972-08-15', '0000-00-00', '0000-00-00', 'S-1', 'Pengusaha', 'Kepala Keluarga', '08126270376', 1, 1),
('D6R150130', 'KK130004', 'St. Luber Sianturi,S.Far', 'L', 'Simangunbun', '1982-04-25', '0000-00-00', '0000-00-00', 'S-1', 'PNS', 'Kepala Keluarga', '081265848282', 1, 1),
('D6R150131', 'KK100001', 'St.Liberiana br.Sitohang', 'P', 'Lae Mahanpan', '1980-12-10', '0000-00-00', '0000-00-00', '', 'Pengusaha', 'Ibu Rumah Tangga', '081260909457', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jmenikah`
--

CREATE TABLE `tbl_jmenikah` (
  `jmenikah_id` int(11) NOT NULL,
  `jmenikah_jemaat_id` char(9) NOT NULL,
  `jmenikah_namapasangan` varchar(100) NOT NULL,
  `jmenikah_tglnikah` date NOT NULL,
  `jmenikah_huria` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_jmenikah`
--

INSERT INTO `tbl_jmenikah` (`jmenikah_id`, `jmenikah_jemaat_id`, `jmenikah_namapasangan`, `jmenikah_tglnikah`, `jmenikah_huria`) VALUES
(1, 'D6R150011', 'Dewi Lestari Malau.G', '2021-01-15', 'HKBP Panji Bako'),
(2, 'D6R150048', 'Galuh Wilistyotami Manurung,ST', '2021-11-12', 'GKPI Sabulan'),
(3, 'D6R150076', 'Berlianta Sembiring', '2021-03-11', 'GBKP Bertungan Julu'),
(4, 'D6R150080', 'Royandi Sianturi', '2021-03-11', 'HKBP Janji Matogu'),
(5, 'D6R150099', 'Jakson  Harianja', '2021-11-01', 'HKBP Tualang/Rst.Jm.Teguh'),
(6, 'D6R150105', 'Vivi Luriani Malau ,S.Pd', '2021-06-22', 'HKBP Tigalingga'),
(7, 'D6R150009', 'Josephine Aritonang', '2022-03-12', 'GKPI Sabulan');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `kategori_id` int(11) NOT NULL,
  `kategori_nama` varchar(30) DEFAULT NULL,
  `kategori_tanggal` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`kategori_id`, `kategori_nama`, `kategori_tanggal`) VALUES
(1, 'Bacaan Injil', '2016-09-06'),
(2, 'Renungan', '2016-09-06'),
(3, 'Mazmur Tanggapan', '2016-09-06'),
(5, 'Bacaan', '2016-09-06');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori_warta`
--

CREATE TABLE `tbl_kategori_warta` (
  `kategori_warta_id` int(11) NOT NULL,
  `kategori_warta_nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kategori_warta`
--

INSERT INTO `tbl_kategori_warta` (`kategori_warta_id`, `kategori_warta_nama`) VALUES
(1, 'Warta Anak Lahir (Nasorang)'),
(2, 'Warta Meninggal Dunia (Namonding)'),
(3, 'Warta Pernikahan'),
(4, 'Hamuliateon (Ucapan Terima kasih)'),
(5, 'Warta Pindah'),
(6, 'Warta Lainnya');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_katfilter`
--

CREATE TABLE `tbl_katfilter` (
  `katfilter_id` int(11) NOT NULL,
  `katfilter_nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_katfilter`
--

INSERT INTO `tbl_katfilter` (`katfilter_id`, `katfilter_nama`) VALUES
(1, 'Ama'),
(2, 'Ina'),
(3, 'Naposo'),
(4, 'Sekolah Minggu'),
(5, 'Lansia'),
(7, 'Pendeta'),
(8, 'Parhalado');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_katsurat`
--

CREATE TABLE `tbl_katsurat` (
  `katsurat_id` int(11) NOT NULL,
  `katsurat_nama` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_katsurat`
--

INSERT INTO `tbl_katsurat` (`katsurat_id`, `katsurat_nama`) VALUES
(1, 'Marguru Tardidi'),
(2, 'NA SORANG'),
(3, 'Surat Keterangan Anggota Jemaat'),
(4, 'Surat Keterangan Pindah Keanggotaan Jemaat'),
(5, 'Surat Keterangan Hendak Menikah'),
(6, 'Marguru Manghatindanghon Haporseaon'),
(7, 'Manjalo Surat Parhuriaon');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kdewan`
--

CREATE TABLE `tbl_kdewan` (
  `kdewan_id` int(11) NOT NULL,
  `kdewan_nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kdewan`
--

INSERT INTO `tbl_kdewan` (`kdewan_id`, `kdewan_nama`) VALUES
(1, 'KOINONIA'),
(2, 'DIAKONIA'),
(3, 'MARTURIA');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kelahiran`
--

CREATE TABLE `tbl_kelahiran` (
  `kelahiran_id` int(11) NOT NULL,
  `kelahiran_tgl` date NOT NULL,
  `kelahiran_kk_id` char(8) NOT NULL,
  `kelahiran_jenkel` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kelahiran`
--

INSERT INTO `tbl_kelahiran` (`kelahiran_id`, `kelahiran_tgl`, `kelahiran_kk_id`, `kelahiran_jenkel`) VALUES
(1, '2020-12-20', 'KK010004', 'L'),
(2, '2021-02-11', 'KK140002', 'P'),
(4, '2021-09-10', 'KK010001', 'P'),
(5, '2021-03-28', 'KK060004', 'P'),
(6, '2021-09-01', 'KK070002', 'L'),
(7, '2020-12-22', 'KK010002', 'L'),
(8, '2020-12-22', 'KK010006', 'P'),
(9, '2021-01-07', 'KK010008', 'L'),
(10, '2021-01-25', 'KK060002', 'L'),
(11, '2021-02-09', 'KK080005', 'L'),
(12, '2021-03-10', 'KK120005', 'P'),
(13, '2021-05-08', 'KK080003', 'P'),
(14, '2020-12-13', '', 'L'),
(15, '2020-12-13', 'KK010002', 'L');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kk`
--

CREATE TABLE `tbl_kk` (
  `kk_id` char(8) NOT NULL,
  `kk_username` varchar(100) NOT NULL,
  `kk_lingk_id` varchar(4) NOT NULL,
  `kk_alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kk`
--

INSERT INTO `tbl_kk` (`kk_id`, `kk_username`, `kk_lingk_id`, `kk_alamat`) VALUES
('KK010001', 'St.B.SILALAHI/ L.br.SINAGA', 'IA', 'Jl.Lestari Kalang Baru'),
('KK010002', 'ALBERT  NABABAN/ A.br.SIMANULLANG', 'IA', 'Jl.Lestari Kalang Baru '),
('KK010003', 'SITEN GULTOM', 'IA', 'Jl.Lestari Kalang Baru '),
('KK010004', 'MALEM UKUR PINEM/ HERLINA SIHOMBING', 'IA', 'Jl.Lestari Kalang Baru '),
('KK010005', 'TIORLI SIMANJUNTAK ', 'IA', 'Jl.Lestari No.57. Kalang Baru '),
('KK010006', 'ANDAR TOGAP SIMANGUNSONG', 'IA', 'Jl.Lestari No.57. Kalang Baru'),
('KK010007', 'RUSTI MANURUNG (Op.DITHA)', 'IA', 'Jl.Lestari Kalang Baru '),
('KK010008', 'SABAR MANAHAN TANI SIMANGUNSONG', 'IA', 'Desa Kalang '),
('KK010009', 'A.SIANTURI/M br.LINGGA ', 'IA', 'Jl.Lestari No. 87. Kalang Baru '),
('KK010010', 'LIN SIANTURI/ A.br.MANJUNTAK', 'IA', 'Jl.Lestari Kalang Baru '),
('KK010011', 'St.D.Malau/ E.br.Silalahi', 'IA', 'Jl.Lestari Kalang Baru '),
('KK010012', 'St.Hotmauli Sinamo/', 'IA', 'Jl.Lestari Kl.Baru'),
('KK020001', 'Gulsen Purba,S.Pd/', 'IB', 'Jl.Lestari Kl.Baru'),
('KK060001', 'St.MT.Sitinjak,SE/ Dra.A.br.Harianja', 'III', 'Jl.Kopi No.19'),
('KK060002', 'M.Simbolon/ L.br.Marbun', 'III', 'Jl.Dairi No.66'),
('KK060003', 'T.Sitinjak/ S.br.Siburian ', 'III', 'Jl.Kopi'),
('KK060004', 'M.Bako/ U br.Tumanggor (Ama Agus)', 'III', 'Jl.Kopi No.05 Sdk'),
('KK060005', 'A.Bako/ L.br.Tampubolon (Op.Agus)', 'III', 'Jl.Kopi No.05 Sdk'),
('KK060006', 'Binuar Lumbangaol/', 'III', 'Jl.Dairi'),
('KK070001', 'St.S.LUMBAN GAOL/ R.br.SIMANGUNSONG', 'IVA', 'Jl.Damai II. No.94'),
('KK070002', 'T.R.LUMBAN GAOL/ F.br.SIJABAT', 'IVA', 'Jl.Damai No 94'),
('KK070003', 'Ny.SIMARMAYA R.br.SITINJAK', 'IVA', 'Jl.Damai No.98'),
('KK070004', 'I.GULTOM/ R.br.SIHITE', 'IVA', 'Jl.Damai II'),
('KK070005', 'H.LUMBAN GAOL/ R.br.SINURAT', 'IVA', 'Jl.Damai II, No.106'),
('KK070006', 'Pdt. Edison MB.Nababan/ Shinta Siregar', 'IVA', 'Jl. Damai, Lingkungan Gereja'),
('KK070007', 'Pdt.Netty Farida Sirait/ Maston Silalahi', 'IVA', 'Jl. Damail, Lingkungan Gereja'),
('KK070008', 'Swandi Simanulang/Pormina Tambunan', 'IVA', 'Jl. Damai, Lingkungan Gereja'),
('KK070009', 'Janner Manalu/Justina Simbolon', 'IVA', 'Jl. Damai, Lingkungan Gereja'),
('KK070010', 'St.Eppen Sitanggang/', 'IVA', 'Jl.Damai'),
('KK080001', 'St.Pande Simanjuntak', 'IVB', 'Jl.Perintis No.136'),
('KK080002', 'Ny.St.P.Lumban Gaol R br.Sinaga', 'IVB', 'Jl.Perintis No.138'),
('KK080003', 'Tarianus Hutasoit/ E.br.Parapat', 'IVB', 'Jl.Perintis No.91'),
('KK080004', 'Edison Malau/ R.br.Munthe', 'IVB', 'Jl.Perintis'),
('KK080005', 'M.Sitanggang/ br.Sinambela', 'IVB', 'Jl.Lestari'),
('KK080006', 'St.Preddi Naibaho/', 'IVB', 'Jl.Perintis'),
('KK090001', 'St.Antoni Togatorop/', 'V', 'Jl.Trikora'),
('KK090002', 'St.Morris Sitorus', 'V', 'Jl.Trikora'),
('KK100001', 'St.Liberiana br.Sitohang/', 'VI', 'Jl.Niaga'),
('KK110001', 'St.Parasian Simanullang/', 'VII', 'Jl.Parluasan'),
('KK110002', 'St.Jaimin Tambunan', 'VII', 'Jl.Parluasan'),
('KK120001', 'St.A.Sianturi/ R.br.Sihombing', 'VIII', 'Jl.Maholi'),
('KK120002', 'Ny.Sihombing H.br.Situngkir', 'VIII', 'Jl.Lestari'),
('KK120003', 'Ir.G.Simbolon/ S.br.Gultom', 'VIII', 'Jl.KH.Dewantara No.19'),
('KK120004', 'H.Simamora/ br.Hutasoit (Op.Hemat)', 'VIII', 'Jl.Maholi/ Lestari'),
('KK120005', 'B.Sihombing/ N.br.Purba', 'VIII', 'Jl.Maholi'),
('KK120006', 'St.Drs.NS.SIMANJORANG/T.br.SIMBOLON', 'VIII', 'Jl.Persada No.61'),
('KK120007', 'M.Simamora/ L.br.Situmorang', 'VIII', 'Jl.Persada N0.162'),
('KK130001', 'St.H.Tampubolon/', 'IX', 'Jl.Tapanuli'),
('KK130002', 'St.Tiurlan br.Hombing/', 'IX', 'Jl.Pakpak'),
('KK130003', 'St. Agus Piser Simamora/', 'IX', 'Jl.Pakpak'),
('KK130004', 'Luber Sianturi,S.Far/', 'IX', 'Jl.Nusantara'),
('KK140001', 'St.R.Silaban/ N.br.Togatorop', 'X', 'Jl.Rimo Bunga Panji Bako'),
('KK140002', 'O.Silaban/M.br.Sitopu', 'X', '-'),
('KK140003', 'P.Sinaga/L.br.Sianturi', 'X', 'Panji Siburabura'),
('KK140004', 'J.Togatorop/M. br.Sijabat', 'X', 'Panji'),
('KK140005', 'St.B.Pasaribu/ T.br.Siahaan', 'X', 'Jl.Ahmadyani Gg.GPI No.1 Btg.Bruh'),
('KK140006', 'S.Sianturi / br.Butarbutar', 'X', 'Jl.Empat Enam');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kkpindah`
--

CREATE TABLE `tbl_kkpindah` (
  `kkpindah_id` int(11) NOT NULL,
  `kkpindah_kk_id` char(8) NOT NULL,
  `kkpindah_tgl` date NOT NULL,
  `kkpindah_jlhanak` varchar(2) NOT NULL,
  `kkpindah_huria` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kkpindah`
--

INSERT INTO `tbl_kkpindah` (`kkpindah_id`, `kkpindah_kk_id`, `kkpindah_tgl`, `kkpindah_jlhanak`, `kkpindah_huria`) VALUES
(1, 'KK010008', '2021-01-10', '1', 'HKBP Padang Bulan Resst.Padang Bulan Dist.X.Mdn Aceh'),
(2, 'KK120003', '2021-03-07', '3', 'HKBP Panji Bako, Rest.Panji Bako'),
(3, 'KK140004', '2021-11-05', '4', 'Gereja GKPI Jemaat Khusus Sdk Kota'),
(4, 'KK010002', '2022-02-21', '4', 'HKBP Panji Bako, Rest.Panji Bako'),
(5, 'KK070003', '2021-02-12', '4', 'HKBP Tj.Sari Medan');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_komentar`
--

CREATE TABLE `tbl_komentar` (
  `komentar_id` int(11) NOT NULL,
  `komentar_nama` varchar(30) DEFAULT NULL,
  `komentar_email` varchar(50) DEFAULT NULL,
  `komentar_isi` varchar(120) DEFAULT NULL,
  `komentar_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `komentar_status` varchar(2) DEFAULT NULL,
  `komentar_tulisan_id` int(11) DEFAULT NULL,
  `komentar_renungan_id` int(11) NOT NULL,
  `komentar_parent` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_komentar`
--

INSERT INTO `tbl_komentar` (`komentar_id`, `komentar_nama`, `komentar_email`, `komentar_isi`, `komentar_tanggal`, `komentar_status`, `komentar_tulisan_id`, `komentar_renungan_id`, `komentar_parent`) VALUES
(1, 'M Fikri', 'fikrifiver97@gmail.com', ' Nice Post.', '2018-08-07 15:09:07', '1', 24, 0, 0),
(2, 'M Fikri Setiadi', 'fikrifiver97@gmail.com', ' Awesome Post', '2018-08-07 15:14:26', '1', 24, 0, 0),
(3, 'Joko', 'joko@gmail.com', 'Thank you.', '2018-08-08 03:54:56', '1', 24, 0, 1),
(6, 'kiko', 'kiko@gmail.com', ' Tuhan Yesus Memberkati', '2022-07-31 05:45:02', '1', 7, 0, 0),
(7, 'Steffanny', '', 'Tuhan Memberkati', '2022-07-31 05:46:15', '1', 7, 0, 0),
(8, 'kiko', 'kiko@gmail.com', ' God Bless Us', '2022-07-31 07:00:27', '1', 1, 0, 0),
(9, 'Steffanny', '', 'God Blees Too', '2022-07-31 07:14:52', '1', 1, 0, 8),
(10, 'Hosea', 'hosea@gmai.com', ' Puji Tuhan', '2022-08-09 02:18:22', '1', 8, 0, 0),
(11, 'hana', 'hana@gmail.com', 'Puji Tuhan', '2022-08-17 03:23:07', '1', 7, 0, 0),
(12, 'siten gultom', 'siten@gmail.com', ' Tuhan memberkati', '2022-09-02 04:31:37', '1', 3, 0, 0),
(14, 'siten gultom', 'siten@gmail.com', ' Tuhan memberkati', '2022-09-02 04:34:07', '0', 3, 0, 0),
(15, 'Pdt. EMB Nababan', '', 'Puji Tuhan', '2022-09-08 04:15:05', '1', 7, 0, 7);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lingkungan`
--

CREATE TABLE `tbl_lingkungan` (
  `lingkungan_id` varchar(4) NOT NULL,
  `lingkungan_nama` varchar(50) NOT NULL,
  `lingkungan_jalan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_lingkungan`
--

INSERT INTO `tbl_lingkungan` (`lingkungan_id`, `lingkungan_nama`, `lingkungan_jalan`) VALUES
('IA', 'IA', 'Jl.Kalang Baru'),
('IB', 'IB', 'Jl. Peasangkar'),
('IIA', 'IIA', 'Jl.Tigalingga'),
('IIB', 'IIB', 'Jl.Air Bersih, KM2'),
('IIC', 'IIC', 'Jl.Sitanggiring'),
('III', 'III', 'Jl.Pekan, Jl. Dairi'),
('IVA', 'IVA', 'Jl.Damai'),
('IVB', 'IVB', 'Jl.Perintis'),
('IX', 'IX', 'Jl.Tapanuli'),
('V', 'V', 'Jl.Trikora'),
('VI', 'VI', 'Jl.Boanng, Jl.Kalasen'),
('VII', 'VII', 'Jl.Parluasan'),
('VIII', 'VIII', 'Jl.Persada'),
('X', 'X', 'Gabungan');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_meninggal`
--

CREATE TABLE `tbl_meninggal` (
  `meninggal_id` int(11) NOT NULL,
  `meninggal_jemaat_id` char(9) NOT NULL,
  `meninggal_tgl` date NOT NULL,
  `meninggal_katfilter_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_meninggal`
--

INSERT INTO `tbl_meninggal` (`meninggal_id`, `meninggal_jemaat_id`, `meninggal_tgl`, `meninggal_katfilter_id`) VALUES
(1, 'D6R150007', '2021-11-23', 5),
(2, 'D6R150025', '2021-12-06', 5),
(3, 'D6R150063', '2021-03-18', 5),
(4, 'D6R150004', '2021-02-21', 3),
(5, 'D6R150052', '2021-06-03', 2),
(6, 'D6R150106', '2021-06-20', 3),
(7, 'D6R150008', '2021-08-08', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_minggu`
--

CREATE TABLE `tbl_minggu` (
  `minggu_id` int(2) NOT NULL,
  `minggu_nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_minggu`
--

INSERT INTO `tbl_minggu` (`minggu_id`, `minggu_nama`) VALUES
(1, 'Minggu I'),
(2, 'Minggu II'),
(3, 'Minggu III'),
(4, 'Minggu IV');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_parhalado`
--

CREATE TABLE `tbl_parhalado` (
  `parhalado_id` int(11) NOT NULL,
  `parhalado_jemaat_id` char(9) NOT NULL,
  `parhalado_jabatan` varchar(50) NOT NULL,
  `parhalado_dilantik` varchar(80) NOT NULL,
  `parhalado_photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_parhalado`
--

INSERT INTO `tbl_parhalado` (`parhalado_id`, `parhalado_jemaat_id`, `parhalado_jabatan`, `parhalado_dilantik`, `parhalado_photo`) VALUES
(35, 'D6R150107', 'Pendeta Ressort HKBP Sdk II', '2000-07-30', 'bd6e188f7c6f477f0e994d31f572139e.jpg'),
(36, 'D6R150110', 'Pdt.Fungsiomnal  HKBP Sdk II', '2012-04-29', 'b35ed90c93fc60a97b23638916a4020f.jpg'),
(37, 'D6R150112', 'Bibv.Ressort HKBP Sdk II', '2002-09-29', '5e7566f8a26686cda3ac4d3dd69b1405.jpg'),
(38, 'D6R150114', 'Diakones / Ka.TK HKBP II', '2011-05-22', '1d3c0e59093affc1ecc3a7053cebbb1d.jpg'),
(39, 'D6R150001', 'Sintua Lingkungan', '2004-02-03', '627907f6b49eb046ca1ccf4921369d90.jpg'),
(40, 'D6R150115', 'Bestur ; Pan.Kat.Ama / Parartaon', '1994-08-14', 'ccb6b51a4aa79b58884654fb5fec4731.jpg'),
(41, 'D6R150116', 'Sintua Lingkungan', '1999-12-26', 'b602e9123e13adce10b99d5df6851b1d.jpg'),
(42, 'D6R150117', 'Sintua Lingkungan ; Bend Pend.TK', '2009-01-03', 'a480ef9354d212a5757d2f48b3014a4e.jpg'),
(43, 'D6R150103', 'Sintua Lingkungan', '1988-04-24', '2edaf84f6a0d3332cceb9bdd4cfc10eb.jpg'),
(44, 'D6R150045', 'Bestur : Sek Bend / Bend.Huria ; Pan. NH', '2009-01-03', 'c89a7d240585f693deca6a91d1cabbaa.jpg'),
(45, 'D6R150118', 'Ketua Parartaon  ; Sei Kemasyarakatan', '1999-12-26', 'cd2a3909dff4add5c194fa6f767d26ad.jpg'),
(46, 'D6R150119', 'Bestur / Ketua.Koinonia ; Parartaon ', '2011-12-25', 'afc9751925f8890a07252e537a51e573.jpg'),
(47, 'D6R150120', 'Ketua Diakonia ', '2014-12-26', 'ef6205b99a19d397cecb4539d254531b.png'),
(48, 'D6R150058', 'Paniroi Lansia', '1988-04-24', 'b54dac3bbe5a2d4805cbfb23ecdd4761.jpg'),
(49, 'D6R150121', 'Paniroi Sk.Minggu ; Sei Musik', '2015-06-28', '5134e12209d5e2b73d77d8754d7af7bc.jpg'),
(50, 'D6R150122', 'Sei Kesehatan ', '1992-08-06', 'd192ffe6c8247da84001020cb1baca00.png'),
(51, 'D6R150123', 'Sei Sosial', '2000-03-12', 'bb502b65feb5ed3bf9e0871c9af929e2.jpg'),
(52, 'D6R150068', 'Sintua Lingkungan', '1999-12-26', '38c18199a6f7bae4a71182e837e59b29.jpg'),
(53, 'D6R150088', 'Bestur;Kat.Sk.Mggu/Sek.Huria:Sei Zending', '2003-12-23', '2817fa11d04482295070a834882616e3.jpg'),
(54, 'D6R150124', 'Sintua Lingkungan', '1995-08-15', 'fe96dab2ec5d04e7ddc3784dcc79e287.jpg'),
(55, 'D6R150125', 'Paniroi INA', '2009-01-03', 'fa3cefc82e6b30d7699f1c69262dcf0a.png'),
(56, 'D6R150097', 'Sei.Pendidikan ', '1999-12-26', '670757f064e9d733e2e30e1a0e24f306.png'),
(57, 'D6R150126', 'Sei Ama', '2005-06-02', 'ae8a4b80ae3278b3e70fb0216cdfffde.png'),
(58, 'D6R150127', 'Sintua Lingkungan', '2020-12-26', '70c880ea5d566bb360c9eec05c9c6e56.png'),
(59, 'D6R150128', 'Sintua', '2020-12-26', '46adb359d2e7a03de6931c4895025681.png'),
(60, 'D6R150058', 'Sintua', '2020-12-26', '64aad9403ff5d0f284a6312a80135ab6.png'),
(61, 'D6R150129', 'Sintua', '2020-12-26', '040478d04b17af006b13b06e1648e919.png'),
(62, 'D6R150130', 'Sintua', '2020-12-26', '2e6c90f01bfb34dc1960fa116cbbac19.png'),
(63, 'D6R150131', 'Sintua', '2020-12-26', '450b90a3df9e81e1f1f47c654c1e4ab0.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengguna`
--

CREATE TABLE `tbl_pengguna` (
  `pengguna_id` int(11) NOT NULL,
  `pengguna_jemaat_id` char(9) NOT NULL,
  `pengguna_nama` varchar(50) NOT NULL,
  `pengguna_username` varchar(30) DEFAULT NULL,
  `pengguna_password` varchar(35) DEFAULT NULL,
  `pengguna_email` varchar(50) DEFAULT NULL,
  `pengguna_status` int(2) DEFAULT 1,
  `pengguna_level` varchar(3) DEFAULT NULL,
  `pengguna_register` timestamp NULL DEFAULT current_timestamp(),
  `pengguna_photo` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pengguna`
--

INSERT INTO `tbl_pengguna` (`pengguna_id`, `pengguna_jemaat_id`, `pengguna_nama`, `pengguna_username`, `pengguna_password`, `pengguna_email`, `pengguna_status`, `pengguna_level`, `pengguna_register`, `pengguna_photo`) VALUES
(1, '', '', 'admin', '71f834206210899badb69f3d1b86c6dc', 'fikrifiver97@gmail.com', 1, '1', '2016-09-03 06:07:55', '44936673a389c064ae6298d6f1af9083.png'),
(5, 'D6R150091', 'Steffanny P N Simanjorang', 'spnjorg', '82682943a05de360abb183236c632bd6', 'putristeffanny@gmail.com', 1, '1', '2021-12-23 13:08:13', '0cf659846edb624ff3b30bc7ed088495.jpg'),
(6, 'D6R150088', 'St. Nelson Simanjorang', 'nelson', 'a4e360681676c770121e891f8c407572', 'nelsonsimanjorang@gmail.com', 1, '3', '2022-06-07 08:22:46', 'b09626d24fdeb6849c1239ad7c0d0853.jpg'),
(7, 'D6R150007', 'Pdt. EMB Nababan', 'nababan', 'f33775008fc60a80c13531878756edf5', 'pendeta@gmail.com', 1, '2', '2022-06-07 08:53:26', '0233ec46871675396412698f5895b683.jpg'),
(9, 'D6R150068', 'St. Anggiat Sianturi', 'sianturi', 'bd5070d31150ced36c0027b4d301ae6e', 'sianturi@gmail.com', 1, '3', '2022-08-08 16:14:40', '0004620e31f5d5957f8eadc13bef4b76.jpg'),
(38, 'D6R150009', 'Berta Nababan', 'berta', '43d75035f949d7bad66383b46374d2e2', 'berta@gmail.com', 1, '4', '2022-08-20 10:44:03', 'cc0991c409f8c65f42d6e3ba11db5fb6.jpg'),
(39, 'D6R150053', 'Steven Agustino Caryesta Bako', 'stevenbako', '1e6a14d6cbe5804c01f616efa4c967f9', 'stevenbako@gmail.com', 1, '4', '2022-08-20 11:37:45', 'fadcaf472133e2f8ba5e8d1978b275cb.png'),
(40, 'D6R150051', 'Mangara Bako', 'mangara', 'bd8d9a55821823d37b020127655f41c4', 'magara@gmail.com', 1, '4', '2022-08-20 11:50:47', '27156d85a854218151dd85d709b0901a.jpg'),
(41, 'D6R150065', 'Sumurung Simarmata', 'sumurung', '4d10b3934472d4e6cfb4f821143ae20c', 'sumurungsimarmata@gmail.com', 1, '4', '2022-08-20 11:56:41', '8355c0d7ea50f734fe99efce1522c420.jpg'),
(43, 'D6R150013', 'siten gultom', 'siten', '8c2ecf0e2ec0d4198427846230c4afd7', 'siten@gmail.com', 1, '4', '2022-08-29 09:07:22', 'b2ba560d1c54aaebdaf53d94b04044fc.png'),
(46, 'D6R150050', 'Roy', 'roy', 'd4c285227493531d0577140a1ed03964', 'roy@gmail.com', 1, '4', '2022-10-25 06:52:29', '8f8ad9465d979014a83e3e40d4b548a7.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengumuman`
--

CREATE TABLE `tbl_pengumuman` (
  `pengumuman_id` int(11) NOT NULL,
  `pengumuman_judul` varchar(150) DEFAULT NULL,
  `pengumuman_deskripsi` text DEFAULT NULL,
  `pengumuman_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `pengumuman_author` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pengumuman`
--

INSERT INTO `tbl_pengumuman` (`pengumuman_id`, `pengumuman_judul`, `pengumuman_deskripsi`, `pengumuman_tanggal`, `pengumuman_author`) VALUES
(1, 'Kebaktian Persekutuan ELIEZER', 'Kebaktian Persekutuan ELIEZER : Pada hari, Kamis, tgl.23 Juni 2022. Diadakan Kebaktian (Partangiangan) Persekutuan Eliezer (Remaja) bertempat di Rumah Kel.St.P.Siumanjuntak/ br.Hutasoit, di Jl.Perintis, Lk.4-B Masuk Pkl.20.00 Wib. Oleh karena itu dihimbau kepada para Remaja HKBP Sdk.II, agar sudi meringankan langkah untuk mengikuti Kebaktian tersebut', '2017-01-21 01:17:30', 'St.Nelson Simanjorang'),
(2, 'Pembinaan/ Pembekalan Guru-Guru Sekolah Minggu', 'Pembinaan/ Pembekalan Guru-Guru Sekolah Minggu : Di Ari Selasa, Tgl.24 Juni 2022. Dipatupa do Acara Pembinaan/ Pembekalan tu Guru-Guru Singkola Minggu Ni Hurianta HKBP Sidikalang II, Maringanan di Taman Wisata Iman Sitinjo (TWI).', '2017-01-21 01:16:20', 'St.Nelson Simanjorang'),
(3, 'Pelepasan TK.Agape HKBP', 'Pelepasan TK.Agape HKBP. Di ari Selasa, 14 Juni 2022. Dipatu do Acara Pelepasan TK Agape HKBP. Jala dimulai Ibadah Singkat maringanan di Gereja, masuk Pkl.09.30 Wib. Marhite i, pinangido ma tu saluhut natoras dohot saluhut Parhalado asa renta mandohoti acara i.', '2017-01-22 07:16:16', 'Steffanny'),
(4, 'Acara Kebaktian', 'Acara tu Minggu tgl. 12 Juni 2022 : BAHASA BATAK TOBA, / (ORGAN)', '2017-01-22 07:15:28', 'Steffanny'),
(5, 'Goar Ni Minggu', 'Goar ni minggunta sadarion ima Minggu ESTOMIHI, Jala topik ni minggunta ima \"NDANG MULAK BOTI HATA NI DEBATA\" ( FIRMAN TUHAN TIDAK AKAN KEMBALI DENGAN SIA_SIA).', '2022-05-25 08:21:38', 'Steffanny');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengunjung`
--

CREATE TABLE `tbl_pengunjung` (
  `pengunjung_id` int(11) NOT NULL,
  `pengunjung_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `pengunjung_ip` varchar(40) DEFAULT NULL,
  `pengunjung_perangkat` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pengunjung`
--

INSERT INTO `tbl_pengunjung` (`pengunjung_id`, `pengunjung_tanggal`, `pengunjung_ip`, `pengunjung_perangkat`) VALUES
(930, '2018-08-09 08:04:59', '::1', 'Chrome'),
(931, '2021-12-20 13:20:06', '::1', 'Chrome'),
(932, '2021-12-21 04:14:44', '::1', 'Chrome'),
(933, '2021-12-22 04:23:51', '::1', 'Chrome'),
(934, '2021-12-23 03:26:31', '::1', 'Chrome'),
(935, '2021-12-27 03:15:48', '::1', 'Chrome'),
(936, '2021-12-28 04:57:14', '::1', 'Chrome'),
(937, '2021-12-30 02:20:24', '::1', 'Chrome'),
(938, '2022-01-04 02:43:49', '::1', 'Chrome'),
(939, '2022-01-05 06:46:25', '::1', 'Chrome'),
(940, '2022-01-06 12:44:13', '::1', 'Chrome'),
(941, '2022-01-07 13:48:33', '::1', 'Chrome'),
(942, '2022-01-08 11:27:39', '::1', 'Chrome'),
(943, '2022-01-09 03:29:52', '::1', 'Chrome'),
(944, '2022-01-11 06:55:47', '::1', 'Chrome'),
(945, '2022-01-12 02:00:14', '::1', 'Chrome'),
(946, '2022-01-15 06:09:09', '127.0.0.1', 'Firefox'),
(947, '2022-01-15 13:03:47', '::1', 'Chrome'),
(948, '2022-01-16 12:34:35', '::1', 'Chrome'),
(949, '2022-01-17 13:14:03', '::1', 'Chrome'),
(950, '2022-01-25 03:06:38', '::1', 'Chrome'),
(951, '2022-02-03 04:04:43', '::1', 'Chrome'),
(952, '2022-03-01 09:24:28', '127.0.0.1', 'Chrome'),
(953, '2022-03-09 03:26:26', '::1', 'Chrome'),
(954, '2022-03-23 05:17:13', '::1', 'Chrome'),
(955, '2022-04-04 04:40:25', '::1', 'Chrome'),
(956, '2022-04-29 06:03:03', '::1', 'Chrome'),
(957, '2022-05-03 10:51:04', '::1', 'Chrome'),
(958, '2022-05-06 04:34:22', '::1', 'Chrome'),
(959, '2022-05-09 04:32:34', '::1', 'Chrome'),
(960, '2022-05-10 12:02:40', '::1', 'Chrome'),
(961, '2022-05-11 03:16:36', '::1', 'Chrome'),
(962, '2022-05-12 02:21:26', '::1', 'Chrome'),
(963, '2022-05-12 04:02:39', '127.0.0.1', 'Firefox'),
(964, '2022-05-13 06:02:10', '::1', 'Chrome'),
(965, '2022-05-16 08:00:04', '::1', 'Chrome'),
(966, '2022-05-20 07:08:21', '::1', 'Chrome'),
(967, '2022-05-23 02:19:07', '::1', 'Chrome'),
(968, '2022-05-24 02:36:05', '::1', 'Chrome'),
(969, '2022-05-25 05:25:59', '::1', 'Chrome'),
(970, '2022-05-30 04:33:44', '::1', 'Chrome'),
(971, '2022-05-31 04:18:37', '::1', 'Chrome'),
(972, '2022-06-01 04:19:36', '::1', 'Chrome'),
(973, '2022-06-06 01:59:56', '::1', 'Chrome'),
(974, '2022-06-07 08:22:54', '::1', 'Chrome'),
(975, '2022-06-09 06:49:37', '::1', 'Chrome'),
(976, '2022-06-09 08:38:20', '127.0.0.1', 'Firefox'),
(977, '2022-06-13 04:46:23', '::1', 'Chrome'),
(978, '2022-06-14 03:38:56', '::1', 'Chrome'),
(979, '2022-06-20 03:17:49', '::1', 'Chrome'),
(980, '2022-06-20 17:01:28', '::1', 'Chrome'),
(981, '2022-06-22 02:49:10', '::1', 'Chrome'),
(982, '2022-06-23 01:41:46', '::1', 'Chrome'),
(983, '2022-06-25 05:05:55', '::1', 'Chrome'),
(984, '2022-06-27 03:12:52', '::1', 'Chrome'),
(985, '2022-06-29 03:44:01', '::1', 'Chrome'),
(986, '2022-07-05 03:39:36', '::1', 'Chrome'),
(987, '2022-07-06 10:21:59', '::1', 'Chrome'),
(988, '2022-07-07 02:48:42', '::1', 'Chrome'),
(989, '2022-07-08 06:26:42', '::1', 'Chrome'),
(990, '2022-07-11 08:57:36', '::1', 'Chrome'),
(991, '2022-07-12 02:55:34', '::1', 'Chrome'),
(992, '2022-07-18 02:01:55', '::1', 'Chrome'),
(993, '2022-07-19 05:02:41', '::1', 'Chrome'),
(994, '2022-07-20 02:36:14', '::1', 'Chrome'),
(995, '2022-07-21 14:21:09', '::1', 'Chrome'),
(996, '2022-07-22 05:06:49', '::1', 'Chrome'),
(997, '2022-07-25 00:40:35', '::1', 'Chrome'),
(998, '2022-07-25 17:01:27', '::1', 'Chrome'),
(999, '2022-07-26 17:28:26', '::1', 'Chrome'),
(1000, '2022-07-26 19:04:09', '127.0.0.1', 'Firefox'),
(1001, '2022-07-29 01:03:41', '::1', 'Chrome'),
(1002, '2022-07-30 03:40:07', '::1', 'Chrome'),
(1003, '2022-07-30 17:03:36', '::1', 'Chrome'),
(1004, '2022-07-31 01:55:56', '127.0.0.1', 'Firefox'),
(1005, '2022-08-01 03:57:21', '::1', 'Chrome'),
(1006, '2022-08-01 03:59:25', '127.0.0.1', 'Firefox'),
(1007, '2022-08-02 00:56:55', '::1', 'Chrome'),
(1008, '2022-08-02 19:09:48', '::1', 'Chrome'),
(1009, '2022-08-03 06:06:04', '127.0.0.1', 'Firefox'),
(1010, '2022-08-03 17:00:30', '::1', 'Chrome'),
(1011, '2022-08-04 09:26:28', '127.0.0.1', 'Firefox'),
(1012, '2022-08-05 02:36:19', '::1', 'Chrome'),
(1013, '2022-08-06 02:55:07', '::1', 'Chrome'),
(1014, '2022-08-07 02:38:01', '::1', 'Chrome'),
(1015, '2022-08-07 07:52:20', '127.0.0.1', 'Firefox'),
(1016, '2022-08-07 17:02:28', '::1', 'Chrome'),
(1017, '2022-08-09 02:17:25', '::1', 'Chrome'),
(1018, '2022-08-10 05:17:00', '::1', 'Chrome'),
(1019, '2022-08-12 14:41:15', '::1', 'Chrome'),
(1020, '2022-08-12 17:12:03', '::1', 'Chrome'),
(1021, '2022-08-14 04:31:42', '::1', 'Chrome'),
(1022, '2022-08-15 02:51:33', '::1', 'Chrome'),
(1023, '2022-08-15 17:37:43', '::1', 'Chrome'),
(1024, '2022-08-17 01:52:52', '::1', 'Chrome'),
(1025, '2022-08-18 03:46:33', '::1', 'Chrome'),
(1026, '2022-08-18 17:58:56', '::1', 'Chrome'),
(1027, '2022-08-19 05:14:57', '127.0.0.1', 'Firefox'),
(1028, '2022-08-20 02:14:23', '::1', 'Chrome'),
(1029, '2022-08-21 02:15:22', '::1', 'Chrome'),
(1030, '2022-08-22 00:52:26', '::1', 'Chrome'),
(1031, '2022-08-22 17:22:55', '::1', 'Chrome'),
(1032, '2022-08-24 01:53:29', '::1', 'Chrome'),
(1033, '2022-08-28 11:45:23', '::1', 'Chrome'),
(1034, '2022-08-29 02:16:47', '::1', 'Chrome'),
(1035, '2022-08-30 00:29:49', '::1', 'Chrome'),
(1036, '2022-09-02 04:31:00', '::1', 'Chrome'),
(1037, '2022-09-08 03:59:09', '::1', 'Chrome'),
(1038, '2022-10-04 05:04:32', '::1', 'Chrome'),
(1039, '2022-10-05 02:41:57', '::1', 'Chrome'),
(1040, '2022-10-05 03:33:29', '127.0.0.1', 'Firefox'),
(1041, '2022-10-07 08:03:00', '127.0.0.1', 'Firefox'),
(1042, '2022-10-07 08:13:10', '::1', 'Chrome'),
(1043, '2022-10-11 02:36:57', '::1', 'Chrome'),
(1044, '2022-10-12 06:43:56', '::1', 'Chrome'),
(1045, '2022-10-13 03:17:22', '::1', 'Chrome'),
(1046, '2022-10-13 03:20:32', '127.0.0.1', 'Firefox'),
(1047, '2022-10-13 22:55:26', '::1', 'Chrome'),
(1048, '2022-10-17 13:29:41', '::1', 'Chrome'),
(1049, '2022-10-21 07:41:34', '::1', 'Chrome'),
(1050, '2022-10-25 06:45:18', '::1', 'Chrome'),
(1051, '2022-10-31 04:34:43', '::1', 'Chrome'),
(1052, '2022-11-01 05:27:42', '::1', 'Chrome');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_petugas`
--

CREATE TABLE `tbl_petugas` (
  `petugas_id` int(11) NOT NULL,
  `petugas_tgl` date NOT NULL,
  `petugas_jamita1` varchar(200) NOT NULL,
  `petugas_jamita2` varchar(200) NOT NULL,
  `petugas_jamita3` varchar(200) NOT NULL,
  `petugas_agenda1` varchar(200) NOT NULL,
  `petugas_agenda2` varchar(200) NOT NULL,
  `petugas_agenda3` varchar(200) NOT NULL,
  `petugas_tingting1` varchar(200) NOT NULL,
  `petugas_tingting2` varchar(200) NOT NULL,
  `petugas_tingting3` varchar(200) NOT NULL,
  `petugas_pelean1` varchar(200) NOT NULL,
  `petugas_pelean2` varchar(200) NOT NULL,
  `petugas_pelean3` varchar(200) NOT NULL,
  `petugas_balkon1` varchar(200) NOT NULL,
  `petugas_balkon2` varchar(200) NOT NULL,
  `petugas_balkon3` varchar(200) NOT NULL,
  `petugas_dlmgereja1` varchar(200) NOT NULL,
  `petugas_dlmgereja2` varchar(200) NOT NULL,
  `petugas_dlmgereja3` varchar(200) NOT NULL,
  `petugas_musik` varchar(200) NOT NULL,
  `petugas_ket` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_petugas`
--

INSERT INTO `tbl_petugas` (`petugas_id`, `petugas_tgl`, `petugas_jamita1`, `petugas_jamita2`, `petugas_jamita3`, `petugas_agenda1`, `petugas_agenda2`, `petugas_agenda3`, `petugas_tingting1`, `petugas_tingting2`, `petugas_tingting3`, `petugas_pelean1`, `petugas_pelean2`, `petugas_pelean3`, `petugas_balkon1`, `petugas_balkon2`, `petugas_balkon3`, `petugas_dlmgereja1`, `petugas_dlmgereja2`, `petugas_dlmgereja3`, `petugas_musik`, `petugas_ket`) VALUES
(7, '2022-07-17', 'Diak.J.br.Simbolon', 'Bvr.P.Tambunan, S.Mis', 'Pdt.NF.Siratit,S.Th', 'St.D.Malau', 'St.P.Naibaho', 'St.PA.Simamora', 'St.S.Lumbangaol', 'St.S.Pasaribu', 'St.S.Sianturi', 'St.B.Silalahi, St.S.Sianturi', 'St.MT.Sintinjak,SECSt.A.Panjaitan', 'St.L.Sianturi,Apt.MMSt.A.Togatorop', 'St.J.Tambunan', 'St.H.br.Sinamo,S.Th', 'St.NS.Simanjorang', 'St.M.Sitorus', 'St.E.Sitanggang', 'CSt.M.br.Malau', 'Musik Box', ''),
(13, '2022-07-24', 'Pdt.NF.Sirait, S.Th', 'Diak.J.br.Simbolon', 'Bvr.P.Tambunan, S.MM', 'St.NS.Simanjorang', 'St.A.Sianturi', 'St.E.Sitanggang', 'St.MT.SItinjak, SE', 'St.S.Sianturi', 'CSt.H.br.Sinamo, S.Th', 'St.M.Sitorus, St.J.Tambunan', 'St.B.Silalahi, CSt. A.Panjaitan', 'St.S.Lumbangaol, St.PA.Simamora', 'St.L.Sianturi', 'St.B.Sitanggang', 'St. H. Hutagalung', 'St.P.Naibaho', 'St.D.Malau', 'St. J.Sinaga', 'Team Musik', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_petugasskm`
--

CREATE TABLE `tbl_petugasskm` (
  `petugas_skmid` int(11) NOT NULL,
  `petugas_skmtgl` date NOT NULL,
  `petugas_skmliturgis` varchar(200) NOT NULL,
  `petugas_skmkhotbah` varchar(200) NOT NULL,
  `petugas_skmpiket` varchar(200) NOT NULL,
  `petugas_skmmusik` varchar(200) NOT NULL,
  `petugas_skmket` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_petugasskm`
--

INSERT INTO `tbl_petugasskm` (`petugas_skmid`, `petugas_skmtgl`, `petugas_skmliturgis`, `petugas_skmkhotbah`, `petugas_skmpiket`, `petugas_skmmusik`, `petugas_skmket`) VALUES
(1, '2022-07-17', 'St.PA.Simamora', 'Guru-guru Sekolah Minggu', 'Guru-guru Sekolah Minggu', 'Jeremia', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pewarta`
--

CREATE TABLE `tbl_pewarta` (
  `pewarta_id` int(11) NOT NULL,
  `pewarta_jemaat_id` char(9) NOT NULL,
  `pewarta_notelp` varchar(15) NOT NULL,
  `pewarta_nama` varchar(100) NOT NULL,
  `pewarta_katfilter_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pewarta`
--

INSERT INTO `tbl_pewarta` (`pewarta_id`, `pewarta_jemaat_id`, `pewarta_notelp`, `pewarta_nama`, `pewarta_katfilter_id`) VALUES
(1, 'D6R150091', '6282273875454', 'Steffanny Putri', 3),
(2, 'D6R150103', '6281260571556', 'St.Banjar Pasaribu', 8),
(3, 'D6R150001', '6282294755165', 'St.Bonar Silalahi', 8),
(6, 'D6R150011', '6289669246363', 'Rodo Sinaga', 1),
(7, 'D6R150013', '6282164012428', 'Lando', 3),
(8, 'D6R150012', '6287793594734', 'Ebenezer nababan', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_renungan`
--

CREATE TABLE `tbl_renungan` (
  `renungan_id` int(11) NOT NULL,
  `renungan_judul` varchar(100) DEFAULT NULL,
  `renungan_isi` text DEFAULT NULL,
  `renungan_tanggal` date NOT NULL DEFAULT current_timestamp(),
  `renungan_kategori_id` int(11) DEFAULT NULL,
  `renungan_kategori_nama` varchar(30) DEFAULT NULL,
  `renungan_views` int(11) NOT NULL DEFAULT 0,
  `renungan_gambar` varchar(255) DEFAULT NULL,
  `renungan_pengguna_id` int(11) DEFAULT NULL,
  `renungan_author` varchar(40) DEFAULT NULL,
  `renungan_img_slider` int(2) NOT NULL DEFAULT 0,
  `renungan_slug` varchar(200) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_renungan`
--

INSERT INTO `tbl_renungan` (`renungan_id`, `renungan_judul`, `renungan_isi`, `renungan_tanggal`, `renungan_kategori_id`, `renungan_kategori_nama`, `renungan_views`, `renungan_gambar`, `renungan_pengguna_id`, `renungan_author`, `renungan_img_slider`, `renungan_slug`) VALUES
(1, 'Penggalan Film Rohani Kristen 2 dari ', '<hr />\r\n<p>Penggalan Film Rohani Kristen 2 dari &quot;BANGKIT DARI MIMPI&quot;: Tanpa Kekudusan, Tidak Ada Orang Yang Akan Masuk Kerajaan Tuhan</p>\r\n\r\n<p>Ketika dosa-dosa kita yang&nbsp;<a href=\"https://id.kingdomsalvation.org/gospel/God-and-bible-5.html\" target=\"_blank\">percaya kepada Tuhan</a>&nbsp;diampuni, apakah kita mencapai penyucian? Jika kita tidak berusaha untuk mencapai penyucian, dan hanya memperhatikan memberi diri untuk Tuhan dan tekun melakukan pekerjaan Tuhan, akankah kita diangkat ke dalam kerajaan surga? Klip film Bangkit Dari Mimpi ini, akan memberi Anda semua jawaban!</p>\r\n\r\n<p>Film Rohani Kristen | &quot;BANGKIT DARI MIMPI&quot;</p>\r\n\r\n<p><a href=\"https://id.kingdomsalvation.org/videos/awakening-from-the-dream-movie.html\">https://id.kingdomsalvation.org/videos/awakening-from-the-dream-movie.html</a></p>\r\n\r\n<p>Kilat dari Timur, Gereja&nbsp;<a href=\"https://id.kingdomsalvation.org/\" target=\"_blank\">Tuhan Yang Mahakuasa</a>&nbsp;dibentuk oleh karena penampakan dan pekerjaan Tuhan Yang Mahakuasa, kedatangan Tuhan Yesus yang kedua kali, Kristus akhir zaman. Gereja ini berisi semua orang yang menerima pekerjaan Tuhan Yang Mahakuasa pada akhir zaman dan ditaklukkan dan diselamatkan oleh firman-Nya. Gereja ini sepenuhnya dibentuk oleh Tuhan Yang Mahakuasa sendiri dan dibimbing oleh-Nya sebagai Sang Gembala. Gereja ini tentu saja tidak dibentuk oleh seseorang. Kristus adalah&nbsp;<a href=\"https://id.kingdomsalvation.org/gospel/reality-of-truth-1.html\" target=\"_blank\">kebenaran</a>, jalan, dan kehidupan. Domba Tuhan mendengarkan suara Tuhan. Selama engkau membaca&nbsp;<a href=\"https://id.kingdomsalvation.org/video-category/Almighty-God-word.html\" target=\"_blank\">firman Tuhan</a>&nbsp;Yang Mahakuasa, engkau akan mengerti bahwa Tuhan telah menampakkan diri.</p>\r\n\r\n<p>Pernyataan khusus: video ini diproduksi sebagai karya nirlaba oleh&nbsp;<a href=\"https://id.kingdomsalvation.org/\" target=\"_blank\">Gereja Tuhan Yang Mahakuasa</a>. Aktor-aktor yang tampil dalam produksi ini berakting secara nirlaba dan tidak dibayar sama sekali. Video ini tidak boleh didistribusikan secara komersial kepada pihak ketiga, dan kami berharap bahwa semua orang akan berbagi dan menyebarkannya secara terbuka. Jika Anda menyebarkannya, harap sebutkan sumbernya. Tanpa seizin Gereja Tuhan Yang Mahakuasa, tidak ada organisasi, kelompok masyarakat atau individu yang boleh mengubah atau menggunakan isi video ini untuk tujuan lain.</p>\r\n\r\n<p>#FilmRohani #Filmkristen</p>\r\n', '2021-12-27', 5, 'Bacaan', 65, '8ac0d28ce131701c3aaba129d59fabb1.jpg', 5, 'Steffanny', 0, 'penggalan-film-rohani-kristen-2-dari'),
(2, 'Kecerdasan Wanita Samaria', '<hr />\r\n<p>Kisah wanita Samaria yang tercatat dalam Alkitab pasti sudah tidak asing lagi bagi banyak orang. Wanita Samaria yang sedang mengambil air bertemu dengan Tuhan Yesus yang meminta air untuk minum darinya.Dari dialog antara Tuhan Yesus dan Wanita Samaria, dia mengenali bahwa Tuhan Yesus adalah Mesias yang dinubuatkan.</p>\r\n\r\n<p>Seorang wanita biasa yang tidak memiliki banyak pengetahuan tentang Alkitab tetapi dapat mengenali bahwa Tuhan Yesus adalah Mesias yang akan datang benar-benar luar biasa! Kita semua tahu bahwa Tuhan Yesus bekerja di bumi selama tiga setengah tahun. Banyak orang telah berhubungan dengan-Nya untuk waktu yang singkat dengan Tuhan dan bahkan banyak orang telah mendengar Tuhan Yesus berkhotbah, tetapi pada kenyataannya terlalu sedikit orang yang dapat mengenali Tuhan Yesus sebagai Mesias. Bagaimana wanita Samaria mengenali Tuhan Yesus sebagai Mesias? Mari kita bersama-sama membaca kisahnya agar mendapatkan jawaban atas pertanyaan-pertanyaan ini.</p>\r\n\r\n<p>Tercatat dalam Alkitab: Datanglah seorang wanita Samaria untuk menimba air: Yesus berkata kepadanya, &quot;<strong>Beri Aku minum.</strong>&quot; (Karena murid-murid-Nya pergi ke kota untuk membeli daging.) Kemudian kata perempuan Samaria itu kepada-Nya, Bagaimana mungkin Engkau, seorang Yahudi, meminta minuman kepadaku, seorang perempuan Samaria? Karena orang Yahudi tidak berurusan dengan orang Samaria. Yesus menjawab dan berkata kepadanya, &quot;<strong>Jika kamu tahu karunia Tuhan, dan siapa ini yang berkata kepadamu, Berilah Aku minum; kamu akan meminta kepada-Nya, dan Dia akan memberimu air hidup... Tetapi barang siapa minum dari air yang Kuberikan kepadanya tidak akan pernah haus lagi; tetapi air yang akan Kuberikan kepadanya itu akan menjadi sumur mata air di dalam dirinya, yang memancar terus hingga kehidupan yang kekal.</strong>&quot; Wanita itu berkata kepada-Nya, Tuan, beri aku air ini, agar aku tidak haus lagi, dan tidak kemari untuk mengambilnya. Yesus berkata kepadanya, &quot;<strong>Pergi, panggil suamimu, dan datang ke sini.</strong>&quot; Wanita itu menjawab dan berkata, &quot;Aku tidak punya suami.&quot; Yesus berkata kepadanya, Kamu berkata benar, Aku tidak punya suami: Karena kamu telah memiliki lima suami; dan dia yang kamu miliki sekarang bukan suamimu: perkataanmu itu jujur. Wanita itu berkata kepada-Nya, Tuan, kurasa Engkau adalah nabi. Nenek moyang kami menyembah di gunung ini; dan Engkau berkata, di Yerusalem adalah tempat manusia harus menyembah.Yesus berkata kepadanya,&nbsp;<strong>Wanita, percayalah kepada-Ku, Waktunya akan datang ketika, engkau tidak menyembah Bapa di gunung ini, tidak juga di Yerusalem. Kamu menyembah yang tidak kamu kenal: kami mengenal yang kami sembah: karena&nbsp;<a href=\"https://id.kingdomsalvation.org/testimonies/apa-arti-keselamatan.html\" target=\"_blank\">keselamatan</a>&nbsp;berasal dari orang Yahudi.</strong>&nbsp;Wanita itu berkata kepada-Nya, &quot;Aku tahu bahwa Mesias datang, yang disebut Kristus: ketika Dia datang, Dia akan memberi tahu kami semua hal.&quot; Yesus berkata kepadanya,&nbsp;<strong>Aku yang berbicara kepadamu adalah Dia.</strong>&nbsp;... Wanita itu kemudian meninggalkan kendi airnya, dan pergi ke kota, dan berkata kepada semua orang, Mari, temuilah seorang pria, yang memberitahuku segala hal yang pernah kulakukan: bukankah ini Kristus? (Yohanes 4:7-10, 13-26, 28-29).</p>\r\n\r\n<p>Dari bacaan Alkitab di atas kita bisa melihat bahwa ada dua alasan utama mengapa perempuan Samaria itu mampu mengenali bahwa Tuhan Yesus adalah Mesias yang sudah datang.</p>\r\n\r\n<h3>1. Mengenali Suara Tuhan dalam Perkataan Tuhan Yesus</h3>\r\n\r\n<p>Awalnya, ketika Tuhan Yesus meminta air minum kepada perempuan Samaria itu, dia bersikap waspada terhadap-Nya karena Dia adalah seorang Yahudi, sebab orang Yahudi tidak bergaul dengan orang Samaria. Tetapi setelah Tuhan Yesus berbicara sedikit dengannya, dia merasa bahwa Tuhan Yesus bukanlah orang biasa, sehingga dia memanggil-Nya Tuan. Ketika mendengar Tuhan Yesus berkata: &quot;<strong>Siapa pun yang minum dari air ini akan haus lagi: Tetapi barangsiapa minum dari air yang Kuberikan kepadanya tidak akan pernah haus lagi; tetapi air yang akan Kuberikan kepadanya itu akan menjadi sumur mata air di dalam dirinya, yang memancar terus hingga kehidupan yang kekal</strong>,&quot; perempuan itu merasa bahwa kata-kata-Nya memiliki otoritas dan kuasa dan tidak bisa diucapkan oleh orang biasa. Kemudian, Tuhan Yesus mengungkapkan rahasia terdalam perempuan itu dengan mengatakan: &quot;Karena kamu telah memiliki lima suami; dan dia yang kamu miliki sekarang bukan suamimu: perkataanmu itu jujur.&quot; Dia merasa takjub akan hal ini karena tidak ada seorang pun yang tahu hal-hal yang secara diam-diam dilakukannya. Tetapi Tuhan Yesus, yang tidak pernah bertemu dengannya, mengetahui segala hal mengenai dirinya. Dia yakin bahwa ini tidak akan mungkin dicapai oleh orang biasa, sehingga dia menganggap Tuhan Yesus seorang nabi. Oleh karena itu, dia berbicara mengenai kebingungannya sendiri dan bertanya kepada-Nya apakah untuk menyembah Tuhan dia harus pergi ke atas gunung atau ke Yerusalem. Tuhan Yesus berkata: &quot;Waktunya akan datang ketika, engkau tidak menyembah Bapa di gunung ini, tidak juga di Yerusalem.&quot; Tuhan Yesus juga dengan jelas mengatakan kepadanya: &quot;<strong>Ketika penyembah-penyembah benar akan menyembah Bapa dalam roh dan&nbsp;<a href=\"https://id.kingdomsalvation.org/gospel/reality-of-truth-1.html\" target=\"_blank\">kebenaran</a>: karena Bapa mencari penyembah yang seperti itu.</strong>&quot; Setelah mendengar semua ini, dia mengenali bahwa Tuhan Yesus adalah Mesias. Ini karena Tuhan Yesus telah menjawab kebingungannya hanya dengan perkataan, dan juga menunjukkan kepadanya jalan penerapan untuk menyembah Tuhan. Ini memampukannya untuk memahami bahwa ketika menyembah Tuhan, umat percaya tidak perlu dengan kaku menuruti formalitas lahiriah, tetapi harus menyembah Tuhan dalam roh dan kebenaran, dan hanya&nbsp;<a href=\"https://id.kingdomsalvation.org/testimonies/how-to-pray-effectively.html\" target=\"_blank\">berdoa</a>&nbsp;dengan sungguh-sungguh dan hati tuluslah yang berkenan di hati Tuhan. Terutama ketika mendengar Tuhan Yesus berkata: &quot;Aku yang berbicara kepadamu adalah Dia,&quot; perempuan Samaria itu bersukacita dan menjadi semakin yakin bahwa Dia adalah Mesias. Jadi, dia bergegas kembali ke kota dan memberitahukan kabar baik itu kepada orang-orang di sana. Meskipun percakapan antara Tuhan Yesus dan perempuan itu singkat, nama yang digunakan perempuan itu memanggil-Nya berubah dengan sangat cepat. Itu karena dia melihat bahwa&nbsp;<a href=\"https://id.kingdomsalvation.org/video-category/Almighty-God-word.html\" target=\"_blank\">firman Tuhan</a>&nbsp;memiliki otoritas dan kuasa, dan Dia mampu mengungkapkan rahasia terdalam dan kerusakan perempuan itu, menyelesaikan masalah dan kebingungannya, dan menunjukkan kepadanya cara yang jelas untuk menerapkannya. Karena alasan ini, dia mengenali bahwa Tuhan Yesus adalah Mesias yang sudah datang.</p>\r\n\r\n<h3>2. Mengesampingkan Dirinya dan Mencari dengan Rendah Hati</h3>\r\n\r\n<p>Fakta sebenarnya, orang Samaria selalu dipandang rendah oleh orang Yahudi, dan mereka tidak bergaul satu sama lain. Jadi, ketika mendengar Tuhan Yesus meminta kepadanya air minum, dia merasa sangat terkejut. Namun dia tidak menolak berbicara dengan Tuhan karena hal itu, tetapi dengan rendah hati mendengarkan Dia berbicara. Ketika mendengar bahwa Tuhan Yesus memiliki air kehidupan, dia mampu mengesampingkan dirinya dan meminta Dia memberikan kepadanya air yang mampu memberikan kepadanya hidup yang kekal. Ketika Tuhan Yesus mengungkapkan rahasia terdalam perempuan itu, meskipun dia tidak bersedia menyebutkannya, ini tidak menghentikan perempuan itu untuk berbicara dengan Tuhan dan dia justru terus mencari dari Dia. Setelah Tuhan Yesus menjawab kebingungannya, dan memampukannya memahami bagaimana cara menyembah Tuhan agar berkenan di hati-Nya, dia pun mengenali bahwa Tuhan Yesus adalah Mesias yang sudah datang. Dari sini kita bisa melihat bahwa alasan lain mengapa perempuan Samaria mampu menerima keselamatan melalui kasih karunia adalah karena dia mampu merendahkan dirinya untuk mencari kebenaran. Oleh sebab itu, dia menerima kasih karunia Tuhan, mendengar suara Tuhan dan menyambut sang Mesias.</p>\r\n\r\n<p>Sekarang kita hidup di akhir zaman, momen utama ketika Tuhan datang. Lantas, bagaimanakah seharusnya kita menyerap kekuatan perempuan Samaria itu sehingga kita bisa menyambut kedatangan kembali Tuhan Yesus?</p>\r\n\r\n<h3>1. Memperhatikan untuk Mendengarkan Suara Tuhan</h3>\r\n\r\n<p>Tuhan Yesus berkata: &quot;<strong>Ada banyak hal lain yang bisa Kukatakan kepadamu, tetapi engkau tidak bisa menerima semuanya itu saat ini. Namun, ketika Dia, Roh Kebenaran itu, datang, Dia akan menuntun engkau sekalian ke dalam seluruh kebenaran: karena Dia tidak akan berbicara tentang diri-Nya sendiri; tetapi Dia akan menyampaikan segala sesuatu yang telah didengar-Nya: dan Dia akan menunjukkan hal-hal yang akan datang kepadamu</strong>&quot; (Yohanes 16:12-13). Dan dinubuatkan berkali-kali dalam kitab Wahyu: &quot;<strong>Barang siapa memiliki telinga, hendaklah dia mendengarkan apa yang diucapkan Roh kepada gereja-gereja</strong>&quot; (Wahyu 2,3). Kita bisa melihat dari firman Tuhan ini bahwa ketika Tuhan datang kembali di akhir zaman, Dia akan berbicara kembali untuk memberitahukan kepada kita kebenaran yang tidak kita pahami. Dia menuntut kita untuk menjadi gadis-gadis yang bijaksana dan memperhatikan untuk mendengarkan suara-Nya. Dengan cara ini, kita bisa mengikuti jejak langkah sang Anak Domba, menghadiri pesta perjamuan, dan menerima keselamatan Tuhan di akhir zaman. Oleh karena itu, jika kita ingin menyambut kedatangan kembali Tuhan, kita perlu secara aktif mencari firman yang Roh Kudus ucapkan kepada seluruh jemaat. Ketika seseorang bersaksi kepada kita bahwa Tuhan sudah datang untuk mengucapkan firman-Nya, kita harus mengikuti teladan perempuan Samaria, dan mendengarkan apakah firman tersebut memiliki otoritas dan kuasa, dan apakah firman itu mampu mengungkapkan kerusakan kita yang tidak seorang pun ketahui, menyelesaikan masalah dan kesulitan kita, dan menunjukkan kepada kita cara untuk menerapkannya. Aku percaya bahwa ketika mendengar firman dari Tuhan yang telah datang kembali, semua orang yang memiliki hati dan roh akan mampu mendengar bahwa itu adalah suara Tuhan. Sebagaimana yang Tuhan Yesus katakan, &quot;<strong>Domba-domba-Ku mendengarkan suara-Ku dan Aku mengenal mereka, dan mereka mengikut Aku</strong>&quot; (Yohanes 10:27).</p>\r\n\r\n<h3>2.Menjadi Orang yang Miskin dalam Roh dan yang Mencari Secara Aktif</h3>\r\n\r\n<p>Tuhan Yesus berkata: &quot;<strong>Mintalah, maka akan diberikan kepadamu; carilah, maka engkau akan menemukan; ketuklah, maka pintu akan dibukakan bagimu. Karena setiap orang yang meminta, menerima; dan yang mencari, menemukan; dan bagi orang yang mengetuk, pintu akan dibukakan</strong>&quot; (Matius 7:7-8). &quot;<strong>Diberkatilah orang yang miskin dalam roh: karena kerajaan surga adalah milik mereka &hellip;</strong>&quot; (Matius 5:3).</p>\r\n\r\n<p>Mencari dengan rendah hati adalah tuntutan Tuhan terhadap kita, dan juga kunci yang menentukan apakah kita mampu menyambut kedatangan kembali Tuhan atau tidak. Sekarang, dalam menantikan kedatangan Tuhan, kebanyakan dari kita memiliki banyak kebingungan dan masalah. Sebagai contoh, dikatakan bahwa Tuhan akan datang kembali di tahun 2000, tetapi sekarang tahun 2021, jadi bagaimana mungkin kita masih belum menyambut kedatangan-Nya kembali? Lagi pula, nubuat tentang kedatangan kembali Tuhan pada dasarnya sudah digenapi semuanya, jadi semua saudara dan saudari yang sungguh&nbsp;<a href=\"https://id.kingdomsalvation.org/gospel/God-and-bible-5.html\" target=\"_blank\">percaya kepada Tuhan</a>&nbsp;merasa bahwa Tuhan mungkin sudah datang kembali, lalu bertanya-tanya apakah Dia sudah menampakkan diri di suatu tempat untuk bekerja. Jadi, bukankah kita seharusnya secara aktif mencari jejak langkah-Nya? Tuhan itu setia. Dia memberkati yang miskin dalam roh, dan mengasihani mereka yang haus akan kebenaran. Jika kita dengan rendah hati mencari, berdoa lebih lagi kepada Tuhan, dan secara aktif mencari jejak langkah-Nya, maka Tuhan tentunya akan memimpin dan menuntun kita, dan memampukan kita untuk menyambut penampakan Tuhan di akhir zaman.</p>\r\n', '2022-05-11', 1, 'Bacaan Injil', 9, 'f8881875b9a27a53cf6680e99d77b51e.jpg', 5, 'Steffanny', 0, 'kecerdasan-wanita-samaria'),
(3, 'Segala Kuasa telah Diberikan kepada Yesus', '<hr />\r\n<p>Setelah para malaikat memberitakan berita kebangkitan Yesus kepada beberapa perempuan yang mau mengunjungi kubur Yesus, sekarang Yesus sendiri berjumpa dengan para perempuan itu. Yesus memberikan pesan kepada mereka, sama seperti yang pernah dikatakan-Nya sebelum Dia mati, yaitu bahwa Dia akan mendahului para murid ke Galilea (Mat. 26:32). Setelah itu kisah perjumpaan Yesus dan murid-murid-Nya diselingi oleh Matius dengan kisah asal usul kabar berita yang menyebar bahwa murid-murid telah mencuri mayat Yesus. Siapakah yang menyebar berita ini? Para penjaga. Dari manakah asal usul berita ini? Dari rancangan para imam kepala yang mengarang berita ini. Mereka menyogok para penjaga supaya setuju dengan cerita mereka. Konspirasi ini makin kuat karena mereka juga bekerja sama dengan Pilatus untuk tidak menghukum para penjaga tersebut. Berita ini pun mulai menyebar di tengah-tengah rakyat banyak. Tetapi berita yang menyebar dengan dusta ini dibenturkan oleh Matius dengan berita para saksi mata. Yang satu berbicara karena dibayar (yaitu para penjaga), yang lain berbicara karena menyaksikan (para murid). Maka Matius menutup Injil yang ditulisnya ini dengan perbandingan dua macam saksi.</p>\r\n\r\n<p>Golongan pertama adalah para penjaga. Dari manakah sumber berita para penjaga itu? Dari imam kepala. Apakah imam kepala tahu bahwa berita itu palsu? Tentu saja. Merekalah yang mengarang berita itu. Lalu, bagaimana caranya mereka menggerakkan para tentara itu untuk menyebarkan berita itu? Dengan memberikan uang yang banyak kepada mereka. Mengapa para serdadu itu tidak takut memberitakan berita bohong padahal mereka telah melihat malaikat yang turun? Uanglah yang meredakan ketakutan mereka. Uang dengan jumlah sangat banyak ternyata bisa memberikan penghiburan dan kekuatan bagi mereka untuk berdusta melawan kebenaran! Mereka bersaksi karena dibayar. Betapa banyak orang seperti ini di dunia ini. Mau kerjakan apa pun, bahkan mengompromikan kebenaran dan ketulusan karena dibayar mahal. Apa yang menggerakkan orang-orang di dunia ini untuk bertindak? Uang! Jika kita masih bersemangat berjuang di dalam hidup karena digerakkan oleh uang, betapa kerdil jiwa kita, dan betapa kerdil ilah kita, yaitu uang. Kita hanyalah penyembah-penyembah uang yang tidak punya pendirian di dalam kebenaran. Uang sangat diperlukan, tetapi uang tidak pernah boleh menjadi alasan kita berjuang di dalam hidup. Kita berjuang untuk suatu hidup, suatu iman yang sejati, dan kita memanfaatkan uang untuk mencapai apa yang kita perjuangkan itu. Para prajurit menyebarkan berita bahwa murid-murid mencuri mayat Yesus, tetapi para murid menyebarkan berita bahwa Yesus bangkit!</p>\r\n\r\n<p>Dari manakah berita yang disebarkan para murid? Para murid menyebarkan berita itu karena mereka telah menjadi saksi mata dari kebangkitan Kristus. Tidak mungkin mereka tidak berkata-kata tentang segala sesuatu yang telah mereka saksikan mengenai kematian dan kebangkitan Kristus (Kis. 4:20). Adakah yang membayar mereka untuk menyebarkan berita ini? Tidak. Tidak ada yang membayar. Bahkan mereka rela membayar harga agar berita ini tersebar lebih pesat lagi! Para murid menjadi saksi untuk suatu fakta yang benar. Itulah sebabnya berita yang mereka sebarkan terus menyebar dengan cara yang begitu agung. Di tengah-tengah penganiayaan dan ancaman, di tengah-tengah hambatan dan tekanan, berita itu terus mereka sebarkan dengan berani. Mengapa? Karena mereka adalah saksi, dan karena mereka telah diutus oleh Kristus yang bangkit untuk memberitakan kebangkitan-Nya.</p>\r\n\r\n<p>Ayat 16 hingga akhir menuliskan perjumpaan para murid dengan Yesus di Galilea. Mereka segera menyembah Dia, meskipun ada yang masih ragu-ragu. Yesus segera mengutus mereka dengan kalimat yang sangat besar. Segala kuasa di langit dan di bumi sekarang telah menjadi milik Yesus. Apakah sebelumnya kuasa di langit dan di bumi belum menjadi milik Yesus? Bukankah Dia memiliki segala kuasa itu dari kekal sampai kekal? Ya. Tetapi saat ini kuasa tersebut menjadi milik-Nya karena kerelaan-Nya untuk taat. Ketaatan-Nya inilah yang memberikan Dia takhta dan kuasa yang jauh lebih besar daripada Daud. Dia adalah Anak Daud, tetapi Kerajaan-Nya jauh lebih mulia dari Daud sehingga Daud pun sujud menyembah kepada Dia (Mzm. 2:11; 110:1). Tuhan memanggil Daud untuk memerintah atas Kerajaan-Nya. Tetapi Daud tidak sanggup melakukan itu karena Kerajaan Allah itu kekal sedangkan Daud tidak mungkin tidak mati. Maka Tuhan menjanjikan akan mendudukkan seorang Anak yang kekal dan akan bertakhta secara kekal (2Sam. 7:12-13; Kis. 2:29-32). Bukan Daud yang akan bertakhta atas Kerajaan Allah sampai selama-lamanya, tetapi Yesus Kristus, Anak Daud, Anak Allah! Maka Yesus, setelah bangkit, segera akan menduduki takhta-Nya yang adalah milik Allah. Takhta-Nya yang berada di sebelah kanan Allah di surga. Dia menduduki takhta-Nya di surga sambil menantikan penaklukkan yang dilakukan oleh pasukan tentara-Nya di bumi ini. Siapakah pasukan tentara-Nya itu? Kita semua. Mulai dari para rasul, orang Kristen mula-mula, hingga zaman sekarang, kita semualah pasukan yang dimiliki oleh Kristus sendiri. Pasukan yang tidak bergerak karena dibayar. Pasukan yang tidak menyebarkan berita karena dorongan uang. Tetapi pasukan yang memberitakan apa yang telah terjadi. Itulah sebabnya Tuhan Yesus memberikan perintah agar para murid mulai berjuang menjadikan semua bangsa murid Yesus. Mulai dari Yerusalem, Yudea, Samaria, Antiokhia, Aleksandria, Persia, Babel, Anatolia, Yunani, Roma, Spanyol, Prancis, Inggris, Afrika, Amerika, Tiongkok, India, Indonesia&hellip; Siapakah yang sanggup mencegah berita Injil ini? Siapa yang sanggup menghalangi orang-orang Kristen menjadikan semua bangsa menyembah Kristus dan menjadi murid-Nya? Tidak ada yang sanggup! Bahkan setan pun gemetar melihat apa yang dilakukan para murid dengan kuasa Roh Kudus.</p>\r\n\r\n<p>Mari berbagian! Tuhan membangkitkan kita semua untuk meneruskan perjuangan ini. Siapa yang diam dan tidak bergerak berarti dia belum menangkap inti dari Amanat Agung yang Yesus nyatakan pada ayat 19. Jadikan semua bangsa murid! Yang menjadi penekanan bukanlah kata &ldquo;murid&rdquo;. Tuhan tidak bermaksud kita hanya mengumpulkan dua atau tiga orang lalu melakukan Kelompok Tumbuh Bersama yang terus hanya membina relasi eksklusif yang sempit. Tekanan ada pada &ldquo;semua bangsa&rdquo;. Sudahkah kita menangkap semangat ini? Menjadikan semua bangsa murid. Ini sangat agung, besar, dan penuh penyertaan Tuhan. Yesus mengatakan bahwa Allah Tritunggal akan menjadi segel dari orang-orang yang dimenangkan dari berbagai bangsa. Tuhan juga menyatakan bahwa kuasa-Nya melalui Roh Kudus, yaitu kuasa atas langit dan bumi yang telah menjadi milik Yesus, akan menyertai kita hingga saatnya Yesus, Sang Raja, datang ke bumi untuk mengklaim takhta-Nya. Dialah Raja Agung yang sedang ada di tempat yang jauh, yang memercayakan kepada kita sekalian tugas untuk menjadikan semua bangsa mengenal Dia. Kepada Dialah kita harus bertanggung jawab nanti. Dialah sumber kekuatan kita. Dari Dialah segala kemampuan dan kuasa bagi kita untuk memberitakan tentang Dia. Seluruh bangsa harus mengenal Yesus Kristus dan menyembah Dia. Semua orang harus sujud kepada Yesus Kristus. Sudahkah kita berbagian? Mari mulai berjuang. Keluarga kita, tetangga kita, daerah kita, kota kita, suku kita, mari kita bawa kepada kebertundukan kepada Kristus, Sang Raja. Maukah kita sekarang mengambil komitmen untuk berbagian di dalam perjuangan ini? Seperti dikatakan oleh misionaris bernama William Carey, &ldquo;mintalah hal-hal besar kepada Tuhan, minta Dia mengerjakannya dengan besar, dan cobalah mengerjakan hal-hal besar itu untuk Tuhan!&rdquo; Saya sungguh berharap kita sekalian memiliki ambisi besar untuk Dia. Berdoa untuk pengaruh yang besar! Berdoa untuk bangsa kita! Berdoa untuk pengaruh gereja ini di dalam memberitakan Injil! Seluruh bangsa ini harus sujud kepada Yesus Kristus, Sang Raja alam semesta! Dan mari berharap, setelah berdoa kita sekalian rela dipakai dengan total: seluruh hati, seluruh tenaga, seluruh kekuatan, seluruh apa yang ada pada kita, untuk penyebaran berita Injil. Kiranya Tuhan memberkati dan menguatkan kita sesuai dengan janji penyertaan-Nya.</p>\r\n', '2022-05-11', 5, 'Bacaan', 12, 'ed570a7745f2d587f0d9344afd46b54f.jpg', 5, 'Steffanny', 0, 'segala-kuasa-telah-diberikan-kepada-yesus'),
(5, 'Belajar Mencukupkan Diri', '<p>Ketika membaca sebuah berita, saya cukup miris dengan berita yang di turunkan, artikel tersebut berjudul &ldquo;Isi Surat Wasiat Karyawan Bank Yang Gantung Diri Terjerat Pinjol&rdquo; dalam pengabaran berita tertulis seperti ini: &ldquo; Seorang karyawan bank di Bojonegoro gantung diri karena terjerat hutang pinjol. Selain pinjol, karyawan yang berinisial HP itu juga mempunya hutang ke nasabah dan temannya. Sebelum gantung diri, korban meninggalkan sebuah surat wasiat yang dituliskannya dalam secarik kertas. Surat itu menerangkan bahwa korban terjerat hutang pinjol dan juga hutang ke teman dan nasabahnya. Korban diketahui gantung diri di kantornya pada senin 23/8/2021 saat seorang teman membuka kantornya. Sebelumnya pada sabtu 21/8/2021 korban enggan diajak pulang oleh rekannya dan beralasan memilih tidur di kantor. Korban sendiri merupakan pengantin baru setelah menikah 2 bulan lalu.</p>\r\n\r\n<p>Sering kita mendengar orang yang akhirnya memutuskan untuk mengakhiri hidupnya karena terlilit hutang. Seperti misalnya, seorang karyawan Indomaret Bernama Slamet Khudori ditemukan mengakhiri hidupnya di kontrakan yang berada di Duri Kosambi, Cengkareng, Jakarta Barat pada tanggal 26/11/2019, diketahui motifnya dari secarik kertas yang dia tinggalkan, bahwa dia terlilit hutang pinjaman online dalam jumlah yang besar. Atau pada Februari 2019, seorang supir taksi Bernama zulfadli yang baru berumur 35 tahun, juga ditemukan gantung diri di kamar kosnya, motifnya sama, yaitu karena tidak kuat dengan tekanan psikis yang dilakukan oleh penagih hutang dari aplikasi pinjaman online illegal.</p>\r\n\r\n<p>Sangat miris mengakhiri hidup larena terlilit hutang. Mari kita perhatikan nasihat Yohanes kepada para prajurit, &ldquo; &hellip; dan cukupkanlah dirimu dengan gajimu.&rdquo; (Luk 3:14) Mencukupkan diri adalah hal terpenting yang harus kita lakukan agar kita tidak jatuh kedalam &ldquo; besar pasak daripada tiang&rdquo;. Mencukupkan diri bukanlah hal yang mudah, karena memerlukan hikmat dan pengendalian diri. Kalua kita tidak bisa mengendalikan diri dalam hal keinginan terhadap barang, maka kemungkinan besar kit akita akan jatuh kedalam lubang hutang. Bukan berarti kita tidak boleh berhutang, kitab oleh berhutang apabila jika memang sangat diperlukan, dan dengan perhitungan yang matang dan keyakinan bahwa kita sanggup membayarnya. Seperti misalnya, hutang ke bank dalam bentuk KPR, jika kita yakin bisa membayarnya,mengapa tidak? Bukankan memiliki rumah adalah hal yang baik dan kedepannya harga rumah akan terus naik. Yang harus kita hindari adalah berhutang untuk membeli barang barang yang sebenarnya kita tidak perlukan atau hanya sekedar agar dilihat oleh orang lain. Mari mencukupkan diri dengan apa yang kita miliki.&nbsp; Jangan sampai anda menjadi batu sandungan karena terlilit hutang hanya karena memenuhi gaya hidup dan keegoisan anda. Bersyukurlah untuk seberapa pun berkat yang kita terima dan berhikmatlah dalam mengaturnya untuk memenuhi kebutuhan hidup, bukan untuk keinginan.</p>\r\n\r\n<p>Mencukupkan diri bukan hal yang mudah di tengah masyarakat yang hedonis, tetapi Bersama Tuhan , KITA BISA</p>\r\n', '2022-06-13', 5, 'Bacaan', 2, 'b6ddf8a6b2efd7a6ff4f4a93640b515d.jpeg', 7, 'Pdt. EMB. Nababan', 0, 'belajar-mencukupkan-diri'),
(7, 'Percaya Tuhan Pasti Menolong', '<p>Percayakah anda pada sebuah harapan? Mungkin kita sebagai manusia terkadang goyah Ketika sedang mengalami sebuah masalah / kesulitan di dalam hidup ini, sehingga harapan dan kepercayaan kita terhadap Tuhan Yesus menjadi berkurang atau hilang. Tetapi tahu kan kita, bahwa &ldquo;Harapan&rdquo; dan &ldquo;Percaya&rdquo; adalah hal yg membuat kita bisa bertahan sejauh ini. Harapan dan Percaya kepada Tuhan Yesus lah yang menyelamatkan kita sampai hari ini.</p>\r\n\r\n<p>Pada tahun 1950an seorang profesor Bernama Curt Richter melakukan percobaan terhadap tikus untuk mengetahui seberapa kuat mereka bertahan di dalam air. Profesor Ritcher mengambil selusin tikus dan menaruh mereka kedalam ember yang berisi air dan menyaksikan mereka tenggelam. Ember tersebut sangat besar sehingga tikus tikus tersebut tidak bisa melompat maupun berlari keluar ember.</p>\r\n\r\n<p>Secara umum, tikus tikus tersebut dapat bertahan 15 menit sebelum kemudian mereka tenggelam.</p>\r\n\r\n<p>Kemudian Profesor Richter melakukan eksperimen kembali, percobaan yang sama seperti sebelumnya tetapi sebelum tikus tikus itu kelelahan, para peneliti akan mengambil dan mengeringkan para tikus, setelah itu para tikus diberikan waktu istirahat sebelum dilemparkan kembali kedalam ember.</p>\r\n\r\n<p>Menurut anda, berapa lama tikus tikus tersebut dapat bertahan hidup? Perlu diingat, sebelumnya mereka berenang hingga kelelahan sebelum diangkat oleh para peneliti.</p>\r\n\r\n<p>Ternyata mereka dapat bertahan rata rata 60 jam.</p>\r\n\r\n<p>60 jam rata rata, itu tidak salah. Hasil dari penelitian tersebut menunjukan bahwa dengan menyelamatkan mereka sebelum tenggelam, menaikan kekuatan dan waktu berenang mereka hingga 240 kali lebih lama saat diletakan kembali kedalam ember.</p>\r\n\r\n<p>Kesimpulan dari percobaan tersebut adalah, karena para tikus yakin bahwa mereka akan diselamatkan, mereka mampu memaksa tubuh melebihi batasan maksimal yang mereka percaya.</p>\r\n\r\n<p>Tentu kita bukanlah tikus, tetapi dari percobaan tersebut kita dapat mengambil arti dari sebuah &ldquo;HARAPAN&rdquo;.</p>\r\n\r\n<blockquote>\r\n<p><em>&ldquo;Marilah kita teguh berpegang pada pengakuan tentang pengharapan kita,sebab Ia,yang menjanjikannya, setia&rdquo;</em></p>\r\n\r\n<p><em>Ibrani 10:23</em></p>\r\n</blockquote>\r\n\r\n<p>Dalam permasalahan hidup kita, tetaplah kita berpegang teguh dan berharap selalu kepada Tuhan. Percayalah kita tidak akan dibiarkan berjalan sendiri, sebab Tuhan selalu menyertai.</p>\r\n', '2022-06-13', 5, 'Bacaan', 21, 'e62adebdf9465a09994b2b4d3f5d4363.jpg', 7, 'Pdt. EMB. Nababan', 0, 'percaya-tuhan-pasti-menolong'),
(8, 'Sopan Santun Berkomunikasi', '<p>&nbsp;<a href=\"https://renunganhariankristen.com/renungan-harian-anak/\">Anak</a>&nbsp;zaman sekarang kurang etika! Tidak sopan!&rdquo;Saya cukup sering mendengar orangtua atau orang dewasa berkata seperti itu merespons perilaku&nbsp;<a href=\"https://renunganhariankristen.com/renungan-harian-anak/\">anak</a>&nbsp;muda masa kini. Salah satu hal yang membuat mereka sering merasa kurang dihargai adalah ketika pesan mereka (biasanya lewat aplikasi&nbsp;<em>WhatsApp</em>) dibaca, tetapi tidak dijawab. Memang tidak semua, tetapi cukup banyak yang seperti itu. Berinteraksi via media sosial dengan cara seperti ini, sebagai bagian dari komunikasi masa kini, tentu saja bukanlah hal yang patut dilakukan.</p>\r\n\r\n<p>Koreksi untuk perilaku di atas berlaku bagi semua golongan usia. Firman-nya mengajarkan bahwa perkataan kita diharapkan penuh kasih dan tidak hambar<em>-Hendaklah hal-hal yang kalian ucapkan selalu menyenangkan dan menarik. Hendaklah kalian tahu bagaimana seharusnya kalian menjawab pertanyaan-pertanyaan orang</em>&rdquo;(ay.6; BIS). Dalam interaksi lewat media sosial, yang mungkin sering kita lakukan, nasihat itu dapat kita penuhi dengan tidak mengabaikan interaksi yang memerlukan jawaban, sekalipun jawaban kita singkat seperti, &ldquo;<em>Baik, Pak!&rdquo;, &ldquo;Terima kasih, Bu</em>!&rdquo;, dan lain sebagainya. Jawaban itu lebih sopan daripada membalas dengan&nbsp;<em>emoticon.</em>&nbsp;Ingatlah bahwa respons tak terduga dapat muncul kapan saja karena&nbsp;<em>mood</em>&nbsp;setiap orang tak selalu baik.</p>\r\n\r\n<p>Pada dasarnya, setiap orang senang dihargai dan diperlakukan dengan baik, termasuk diri kita. Kasih Tuhan yang kita terima dengan berlimpah, akan bisa diterima oleh orang lain saat menerima perlakuan yang baik dari kita. Jadi, mari belajar lebih memperhatikan cara berinteraksi dengan sesama, terutama saat kita berhadapan dengan orang dewasa, orangtua, atau pimpinan kita!&nbsp;</p>\r\n', '2022-08-07', 1, 'Bacaan Injil', 13, '2b91e4d494704dc0537f4dec6b35441d.JPG', 7, 'Pdt. EMB. Nababan', 0, 'sopan-santun-berkomunikasi');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sidi`
--

CREATE TABLE `tbl_sidi` (
  `sidi_id` int(11) NOT NULL,
  `sidi_tgl` date NOT NULL,
  `sidi_jemaat_id` char(9) NOT NULL,
  `sidi_ham` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_sidi`
--

INSERT INTO `tbl_sidi` (`sidi_id`, `sidi_tgl`, `sidi_jemaat_id`, `sidi_ham`) VALUES
(1, '2021-12-12', 'D6R150003', '250,000'),
(2, '2021-12-12', 'D6R150004', '300,000'),
(3, '2021-12-12', 'D6R150016', '300,000'),
(4, '2021-12-12', 'D6R150019', '300,000'),
(5, '2021-12-12', 'D6R150023', '300,000'),
(6, '2021-12-12', 'D6R150028', '300,000'),
(9, '2021-12-19', 'D6R150009', '300,000');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sk`
--

CREATE TABLE `tbl_sk` (
  `sk_id` int(11) NOT NULL,
  `sk_kk_id` char(8) NOT NULL,
  `sk_jemaat_id` char(9) NOT NULL,
  `sk_username` varchar(30) NOT NULL,
  `sk_tanggal` date NOT NULL,
  `sk_jlhanak` varchar(10) NOT NULL,
  `sk_namapasangan` varchar(200) NOT NULL,
  `sk_huria` varchar(200) NOT NULL,
  `sk_tujuanhuria` varchar(200) NOT NULL,
  `sk_tglnikah` date NOT NULL,
  `sk_katsurat_id` int(11) NOT NULL,
  `sk_ketjk` varchar(1) NOT NULL,
  `sk_ket` text NOT NULL,
  `sk_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_sk`
--

INSERT INTO `tbl_sk` (`sk_id`, `sk_kk_id`, `sk_jemaat_id`, `sk_username`, `sk_tanggal`, `sk_jlhanak`, `sk_namapasangan`, `sk_huria`, `sk_tujuanhuria`, `sk_tglnikah`, `sk_katsurat_id`, `sk_ketjk`, `sk_ket`, `sk_status`) VALUES
(9, 'KK010002', '', 'berta', '2022-02-21', '4', '', '', 'HKBP Panji Bako, Rest.Panji Bako', '0000-00-00', 4, '0', '', 2),
(10, '', 'D6R150009', 'berta', '0000-00-00', '', 'Josephine Aritonang', 'GKPI Sabulan', '', '2022-03-12', 5, 'P', '', 2),
(12, 'KK070003', '', 'sumurung', '2021-02-12', '4', '', '', 'HKBP Tj.Sari Medan', '0000-00-00', 4, '0', '', 1),
(13, '', 'D6R150065', 'sumurung', '0000-00-00', '', 'Berlianta Sembiring', 'HKBP Janji Matogu', '', '2021-05-03', 5, 'L', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_surat`
--

CREATE TABLE `tbl_surat` (
  `surat_id` int(11) NOT NULL,
  `surat_kk_id` char(8) NOT NULL,
  `surat_jemaat_id` char(9) NOT NULL,
  `surat_username` varchar(30) NOT NULL,
  `surat_nama` varchar(200) NOT NULL,
  `surat_jenkel` varchar(1) NOT NULL,
  `surat_tmptlahir` varchar(200) NOT NULL,
  `surat_tgllahir` date NOT NULL,
  `surat_tgltardidi` date NOT NULL,
  `surat_tglsidi` date NOT NULL,
  `surat_katsurat_id` int(11) NOT NULL,
  `surat_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_surat`
--

INSERT INTO `tbl_surat` (`surat_id`, `surat_kk_id`, `surat_jemaat_id`, `surat_username`, `surat_nama`, `surat_jenkel`, `surat_tmptlahir`, `surat_tgllahir`, `surat_tgltardidi`, `surat_tglsidi`, `surat_katsurat_id`, `surat_status`) VALUES
(17, 'KK010002', 'D6R150009', 'berta', '', 'L', '', '2020-12-13', '0000-00-00', '0000-00-00', 2, 1),
(18, 'KK060004', 'D6R150051', 'mangara', 'Santo Bako', 'L', 'Sidikalang', '2021-05-18', '2021-12-26', '0000-00-00', 1, 1),
(19, 'KK010002', 'D6R150009', 'berta', '', '', '', '0000-00-00', '2021-12-19', '0000-00-00', 6, 1),
(20, 'KK060004', 'D6R150053', 'stevenbako', '', 'L', '', '2021-07-22', '0000-00-00', '0000-00-00', 2, 2),
(22, 'KK060004', 'D6R150053', 'stevenbako', 'Hana Jayati Bako', 'P', 'Sidikalang', '2004-03-12', '2021-12-26', '0000-00-00', 1, 1),
(24, 'KK070003', 'D6R150065', 'sumurung', '', '', '', '0000-00-00', '2017-12-26', '0000-00-00', 6, 2),
(26, 'KK010003', 'D6R150013', 'siten', 'Siten Gultom', 'L', 'sidikalang', '2000-07-20', '2021-12-26', '0000-00-00', 1, 1),
(27, 'KK010001', 'D6R150002', 'linasinagaa', 'Sania Silalahi', 'P', 'Medan', '2020-01-14', '2021-12-26', '0000-00-00', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tardidi`
--

CREATE TABLE `tbl_tardidi` (
  `tardidi_id` int(11) NOT NULL,
  `tardidi_tgl` date NOT NULL,
  `tardidi_kk_id` char(8) NOT NULL,
  `tardidi_nama` varchar(100) NOT NULL,
  `tardidi_jenkel` varchar(1) NOT NULL,
  `tardidi_tmptlahir` varchar(100) NOT NULL,
  `tardidi_tgllahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_tardidi`
--

INSERT INTO `tbl_tardidi` (`tardidi_id`, `tardidi_tgl`, `tardidi_kk_id`, `tardidi_nama`, `tardidi_jenkel`, `tardidi_tmptlahir`, `tardidi_tgllahir`) VALUES
(1, '2021-12-26', 'KK010004', 'WILLIAM ARYATAMA PINEM', 'L', 'Sidikalang', '2020-12-20'),
(2, '2021-12-26', 'KK140002', 'PELITA OMARISE SILABAN', 'P', 'Sidikalang', '2021-04-11'),
(3, '2021-12-26', 'KK010001', 'RADELA GWENNY SILALAHI', 'P', 'Sidikalang', '2021-09-10'),
(4, '2021-12-26', 'KK060004', 'EVI PHANIAS BAKO', 'P', 'Sidikalang', '2021-03-28'),
(5, '2021-12-26', 'KK070002', 'DIEGO MIGUEL LUMBAN GAOL', 'L', 'Sidikalang', '2021-09-01'),
(6, '2021-12-26', 'KK060004', 'Santo Bako', 'L', 'Sidikalang', '2021-05-18');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_video`
--

CREATE TABLE `tbl_video` (
  `video_id` int(11) NOT NULL,
  `video_judul` varchar(200) NOT NULL,
  `video_link` varchar(200) NOT NULL,
  `video_ket` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_video`
--

INSERT INTO `tbl_video` (`video_id`, `video_judul`, `video_link`, `video_ket`) VALUES
(1, 'Bangkit dari Kegagalan', 'https://www.youtube.com/embed/enu7VwcQ2zM', '#KERINDUANKU adalah segmen daily devotions dari Gideon Simanjuntak, dengan harapan agar setiap orang percaya yang menonton atau mendengarnya dapat dikuatkan.  Kami berdoa agar melalui segmen #KERINDUA'),
(2, 'Menanti Dengan Beriman', 'https://www.youtube.com/embed/oM8agslPXYY', '-'),
(3, 'Ketika Saya Kecewa', 'https://www.youtube.com/embed/8Si44eADEAo', '-'),
(4, 'Tetap Mengasihi Walaupun Dibenci', 'https://www.youtube.com/embed/cmfCsrVNehU', '-'),
(5, 'Bersyukur dan Bersukacitalah', 'https://www.youtube.com/embed/uct7l2NsZWc', '-');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_wartafix`
--

CREATE TABLE `tbl_wartafix` (
  `wartafix_id` int(11) NOT NULL,
  `wartafix_tgl` varchar(200) NOT NULL,
  `wartafix_nama` varchar(200) NOT NULL,
  `wartafix_isi` text NOT NULL,
  `wartafix_kat_id` int(11) NOT NULL,
  `wartafix_minggu_id` int(2) NOT NULL,
  `wartafix_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_wartafix`
--

INSERT INTO `tbl_wartafix` (`wartafix_id`, `wartafix_tgl`, `wartafix_nama`, `wartafix_isi`, `wartafix_kat_id`, `wartafix_minggu_id`, `wartafix_status`) VALUES
(1, '2020-05-22', 'St.Liberiana br.Sitohang', 'Nungga Marujung Ngolu ni Rimpun Manalu, Tutup Umur 21 Taon. Ianangkon ni Kel.Op.Yoselin J Manalu/ R.br.Sihotang (+), Sian Jl.Damai Gg. Melati,Lk.4-A. Tatangiangkon ma Keluarga namarhabot ni roha, anggiat tumibu tarapul marhiite holong ni Tuhanta i', 2, 1, 1),
(3, '2022-05-07 11:22:46', 'St.AM.Sinaga', 'Na di ari Sabtu, tgl.7 Mei 2022. Dibasabasahon Tuhanta do saa dakdanak BORU, di Kel.ANDREAS SINAMBELA/ SISKA br.SIHOMBING, Sian Jl.Boang No.41. Lk.6. Hipas do dakdanak I suang songoni nang natorasna.', 1, 1, 1),
(7, '2022-05-20 01:37:38', 'St.B.Silalahi', 'Na di ari Kamis, tgl.26 Mei 2022. Dibasabasahon Tuhanta do saa dakdanak BORU, di Kel.PIMPIN MALAU / MESLY br.SARAGI, Sian Jl.Lestari,Lk.1-A. Hipas do dakdanak I suang songoni nang natorasna', 1, 2, 0),
(8, '2022-07-12', 'St.P.Simanullang', 'Naeng manjalo Pasu-pasu Pardongansaripeon ma : BRIPTU JHONY SYAPUTRA SIHOMBING, Anak ni Amanta Sakjan Sihombing, Tubu Ni Inanta, Parulian Aritonang, Sian Jl.Cipta,Gg.Batu bara, Lk.7, Huria HKBP Sidikalang II, Rest.Sdk.II, Dohot Oroanna PAULA FITRI SIM-SIM ASTUTI br.BOANG MANALU,STR,Keb ,Boru ni Amanta Bonifasius Boang Manalu,Tubu ni Inanta Meri br.Lubis. Sian Desa Boang Manalu Pak-Pak Barat. Huria HKBP Sdk.II, Rest.Sdk.II, Nasida manjalo Pamasumasuon di Ari Jumat tgl. 17 Juni 2022, Maringanan di Gereja HKBP Sidikalang II, Rest.Sidikalang II, Masuk Pkl. 10.00 Wib', 3, 2, 0),
(9, '2022-06-20', 'St.N.S. Simanjorang', 'Naeng manjalo Pasu-pasu Pardongansaripeon ma RAYMOND SAPUTRA BUTARBUTAR, Anak ni amanta Olopan Butarbutar (+), Tubu ni Inanta Salam br.Malau, Sian Jl.Persada Gg.Horas Huta Rakyat Sdk, Huria KHBP Sdk.II,Rest.Sdk.II,Lk.8. Dohot Oroanna Pdt.JUNITA PURNAMA ELLYS RAJAGUKGUK,S.Th. Boru ni Amanta, St.Monang Rajagukguk, Tubu ni Inanta Lidia br.Silalahi, Sian Jl.Batu Kapur No.239, Ht.Gambir. Huria HKI Ressort Khusus Sidikalang Kota. Nasida manjalo Pamasumasuon di Ari Jumat,tgl.24 Juni 2022. Maringanan di Gereja HKI Resort Khusus Sidikalang Kota, Masuk Pkl. 10 Wib', 3, 2, 1),
(11, '2022-06-20', 'St.ES', 'Hendak menerima Pemberkatan Pernikahan BINTER SIANTURI, Putra dari Kel.Normal Sianturi(+)/ Ruminta Naibaho, dari Jl.Dlk.Sanggul Desa Huta Buntul Lae Hole.Jemaat HKBP Lae Hole, Rest.Lae Hole. Dengan Tunangannya DUMA LASMA ROHANA NAIBAHO, Putri dari Kel.Sabam Naibaho (+)/ Hermina Sitanggang, dari Jl.Tg.Lingga,Km.2,Lk.2 . Jemaat HKBP Sidikalang II, Rest.Sdk.II. Mereka hendak menerima Pemberkatan Pernikahan, Pada hari Rabu, 29 Juni 2022, Bertempat di Gereja HKBP Lae Hole , Rest.Lae Hole, Masuk Pkl.10.00 Wib', 3, 3, 1),
(12, '2022-06-16', 'St.A.Sianturi', 'Pada hari, Selasa,tgl.14 Juni 2022. Telah meninggal dunia Bapak MANGAMBANG SITUMORANG (Op.Ni si Sean doli) Tutup Umur 57 Thn. Dan meninggalkan tiga orang anak yang belum berumahtangga, Dari Jl.Persada, Lk.8. Marilah kita mendoakan Keluarga yang sedang berduka. Kiranya Tuhan yang senantiasa memberikan Penghiburan', 2, 3, 0),
(13, '2022-06-22', 'St.A.Sianturi', 'Na di ari Senen, tgl.20 Juni 2022. Dibasabasahon Tuhanta do sada dakdanak BAOA di Kel.Iskandar Muda Sagala / Helena br.Sitanggang, Sian Jl.Persada,Lk.8. Sorang di Medan. Hipas do dakdanak I, suang songoni nang natorasna', 1, 3, 0),
(14, '2022-06-16', 'St.ES', 'Na di ari Senen, tgl.14 Juni 2022. Dibasabasahon Tuhanta do sada dakdanak BORU di Kel.H.Panjaitan/ br.Nainggolan, Sian Perum Sitanggiring,Km.2,Lk.2. Hipas do dakdanak I suang songoni nang natorasna', 1, 4, 0),
(15, '2022-06-14', 'Pdt. EMB. Nababan', 'Pada hari, Selasa,tgl.14 Juni 2022. Telah meninggal dunia Inanta ROSALINA br.SIRINGORINGO (Op.Naomi Boru)\r\n Tutup Umur 58 Thn. Dan meninggalkan tiga orang anak yang belum berumahtangga, Dari Jl.Persada, Lk.4B.\r\nMarilah kita mendoakan Keluarga yang sedang berduka. Kiranya Tuhan yang senantiasa memberikan Penghiburan', 2, 3, 0),
(23, '2022-07-01 02:03:34', 'St.Mangara Tua Sitinjak,SE', 'Lalap hanya ngetes karejomu', 6, 1, 0),
(25, '2022-08-09 23:45:37', 'St.Nelson.S.Simanjorang', 'Naeng manjalo Pasu-pasu Pardongansaripeon ma ANDRI NAINGGOLAN, Anak ni Amanta Parsaoran Nainggolan, Tubu ni Inanta Rolan Tambunan (+) Sian Jl.Lestari Kl.Baru, Lk.1-B. Huria HKBP Sidikalang II, Rest.Sdk.II. Dohot Oroanna LUMINTANG MAYASARI SITINDAON , Boru ni Amanta Sarwedi Sitindaon, Tubu ni Inanta Dormaida br.Lubis (+) Sian Jl..Kiwi Raya No.10 Medan. Huria GKPI Mandala, Rest.Agape Mandala Medan. Nasida manjalo Pamasumasuon di Ari Senin, tgl.25 Juli 2022. Maringanan di HKBP Sidikalang II, Rest.Sdk.II. Masuk Pkl.10.00 Wib', 1, 1, 0),
(27, '2022-07-01 12:42:45', 'St.Eppen Sitanggang', 'Ku blokir la kau ga', 6, 1, 0),
(28, '2022-07-01 12:42:45', 'St.Bonar Silalahi', 'Ku blokir la kau ga', 5, 1, 0),
(29, '2022-07-01 11:22:46', 'St.Banjar Pasaribu', 'https://fc8bbe9.jpgs.magicreposa5ce3ae2c7049901c', 4, 3, 0),
(30, '2022-07-01 09:38:15', 'St.Eppen Sitanggang', 'Kutengok review..agak pedih katanya', 2, 4, 0),
(31, '2022-10-05 00:41:24', 'St.Banjar Pasaribu', 'BILA PADA HARI INI TUHAN MELAKUKAN KEBAIKAN BAGI KITA,\r\nMAKA ESOK DAN SELAMANYA TUHAN JUGA MELAKUKAN KEBAIKAN BAGI KITA.', 6, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_wartain`
--

CREATE TABLE `tbl_wartain` (
  `wartain_id` int(11) NOT NULL,
  `wartain_nama` varchar(200) NOT NULL,
  `wartain_tanggal` datetime NOT NULL,
  `wartain_notelp` text NOT NULL,
  `wartain_isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_wartain`
--

INSERT INTO `tbl_wartain` (`wartain_id`, `wartain_nama`, `wartain_tanggal`, `wartain_notelp`, `wartain_isi`) VALUES
(1, 'Lando', '2022-10-13 00:51:08', '6282164012428', 'Hendak menerima Pemberkatan Pernikahan CLINTON BANDE ALEXANDER MANURUNG,S.IP Putra dari Kel.Charles Manurung/ Enny Maulita Boang Manalu, dari Jl.45 Sdk.Jemaat HKBP Perkembangan, Rest.Sidikalang III, Dengan Tunangannya HASTUTI NIRWANA SIHOMBING,SE, Putri dari Kel.Parningotan Sihombing (+)/ Romauli Simanjuntak, dari Jl.Pakpak No.191 Sdk. Jemaat HKBP Sidikalang II, Rest.Sdk.II. Mereka hendak menerima Pemberkatan Pernikahan, Pada hari Jumat, 8 Juli 2022, Bertempat di Gereja HKBP Perkembangan, Rest.Sidikalang III, Masuk Pkl.10.00 Wib'),
(2, 'Rodo Sinaga', '2022-10-13 00:44:34', '6289669246363', 'Naeng manjalo Pasu-pasu Pardongansaripeon ma RAYMOND SAPUTRA BUTARBUTAR, Anak ni amanta Olopan Butarbutar (+), Tubu ni Inanta Salam br.Malau, Sian Jl.Persada Gg.Horas Huta Rakyat Sdk, Huria KHBP Sdk.II,Rest.Sdk.II,Lk.8. Dohot Oroanna Pdt.JUNITA PURNAMA ELLYS RAJAGUKGUK,S.Th. Boru ni Amanta, St.Monang Rajagukguk, Tubu ni Inanta Lidia br.Silalahi, Sian Jl.Batu Kapur No.239, Ht.Gambir. Huria HKI Ressort Khusus Sidikalang Kota. Nasida manjalo Pamasumasuon di Ari Jumat,tgl.24 Juni 2022. Maringanan di Gereja HKI Resort Khusus Sidikalang Kota, Masuk Pkl. 10 Wib'),
(3, 'Ebenezer nababan', '2022-10-13 00:37:27', '6287793594734', 'Ucapan Syukur dari Kel.Samuel Gultom/ br.Purba (Pk.Gabriel) dari Jl.Lestari Kl.Baru, Lk.1-B. Mengucap syukur buat Kebaikan Tuhan atas kebaikanNya, dimana keluarga mereka senantiasa di dalam sukacita kesehatan hingga saat ini. Kiranya Tuhan yang senantiasa memberkati keluarga mereka disetiap aktifitas dan kegiatan, serta memberikan sukacita kesehatan, menjadi kemuliaan buat nama Tuhan.'),
(4, 'St.Bonar Silalahi', '2022-10-13 00:37:23', '6282294755165', 'Hendak menerima Pemberkatan Pernikahan MARYONO BAKKARA, Anak dari Kel. Kepler Bakkara/ Adelina Sitanggang, dari Perum Kalsim Blok.C, Jemaat HKBP Immanuel, Resst.Persiapan Immanuel. Dengan Tunagannya ROMAULI SRI RAHAYU NAINGGOLAN, Putri dari Kel.Sahat Nainggolan/ Nurita Manurung, dari Jl.Lestari Kl.Baru, Jemaat HKBP Sidikalang II, Rest.Sdk.II. Mereka Hendak menerima Pemberkatan Pernikahan pada hari Kamis, 7 Juli 2022'),
(6, 'Steffanny Putri', '2022-10-04 23:40:20', '6282273875454', 'Tes'),
(7, 'noname', '2022-07-21 01:07:02', '62882016164823', 'P'),
(8, 'noname', '2022-07-21 01:07:02', '62882016164823', 'Terblokir wa ku stef'),
(9, 'noname', '2022-07-21 01:06:54', '6282287988304', 'Pagi fransiska coba tanya si stefany apa sudah bisa programnya yg kemaren itu ?'),
(10, 'noname', '2022-07-21 01:06:54', '62882016164823', 'P'),
(11, 'noname', '2022-07-04 04:16:58', '6281376068860', 'P'),
(12, 'noname', '2022-07-04 02:07:19', '6281376068860', 'P'),
(13, 'noname', '2022-07-04 01:37:39', '6285668308737', 'udah gimana programmu'),
(14, 'noname', '2022-07-04 01:37:38', '6285668308737', 'stef'),
(15, 'noname', '2022-07-04 01:06:11', '6281376068860', 'call (miss_video)'),
(16, 'noname', '2022-07-04 01:02:52', '6281376068860', 'Lagi dimana kamu?'),
(17, 'noname', '2022-07-04 01:02:22', '6281376068860', 'Ada masalahmu nang?gk kamu jawab pertanyaan mama'),
(18, 'noname', '2022-07-04 00:19:37', '6281376068860', 'Apa kegiatanmu hari ini nang'),
(19, 'noname', '2022-07-03 20:53:03', '6281376068860', 'Bangun abg,  jgn lupa bawa doa buat adk zefanya,  hari ini ujian spikotes. No 00393'),
(20, 'noname', '2022-07-03 10:18:24', '6282273733053', 'Payah kali menjawa'),
(21, 'noname', '2022-07-03 10:16:37', '6282273733053', 'Cuman di riet'),
(22, 'noname', '2022-07-03 10:16:29', '6282273733053', 'Put?'),
(23, 'noname', '2022-07-03 10:15:22', '6282273733053', 'Halo?'),
(24, 'noname', '2022-07-03 10:14:32', '6282273733053', 'Udah makan kalian?'),
(25, 'noname', '2022-07-03 10:16:37', '6282273733053', 'Cuman di riet'),
(26, 'noname', '2022-07-03 10:16:29', '6282273733053', 'Put?'),
(27, 'noname', '2022-07-02 09:22:11', '6282273733053', 'Perhatikan adek ituyahh'),
(28, 'noname', '2022-07-02 09:21:28', '6282273733053', 'Udah makan malam kalian?'),
(29, 'noname', '2022-07-01 13:10:21', '6282370166246', 'Test'),
(31, 'noname', '2022-07-02 09:22:11', '6282273733053', 'Perhatikan adek ituyahh'),
(32, 'noname', '2022-07-01 12:42:42', '6281370044377', 'https://fs.magicrepository.com/incoming/43227ead03d4be9667b2d6d6aadc35ad.jpg'),
(33, 'noname', '2022-07-01 12:41:44', '6281370044377', 'kaak'),
(36, 'noname', '2022-07-01 12:05:37', '6282361194525', 'https://fs.magicrepository.com/incoming/a84f827b6c538815031d4d2db0c9d88a.webp'),
(37, 'noname', '2022-07-01 12:04:42', '6281370044377', 'p kan lh aku'),
(38, 'noname', '2022-07-01 12:04:35', '6281370044377', '🙃'),
(39, 'noname', '2022-07-01 12:00:39', '6281370044377', '💪🏻💪🏻'),
(40, 'noname', '2022-07-01 11:59:34', '6282361194525', 'Terserah kamu aja lah yank🙃'),
(41, 'noname', '2022-07-01 11:59:09', '6281370044377', 'dah ku hapus'),
(42, 'noname', '2022-07-01 11:54:57', '6281396107088', 'Okey'),
(43, 'noname', '2022-07-01 11:54:04', '6281396107088', 'Coba chat pakai nomor lama aku bro'),
(44, 'noname', '2022-07-01 11:29:11', '6281263280374', 'Ok,,besok bibi kasi kwitansinya y del🙏'),
(45, 'noname', '2022-07-01 11:26:48', '6281263280374', 'Bukti transfernya tlng fotokan y dek'),
(46, 'noname', '2022-07-01 11:26:19', '6281263280374', 'Oke transfer ke rek yg kemaren atas nama Rio bawer sinuraya,terima kasih   baru aja mau bibi ingatkan🙏'),
(47, 'noname', '2022-07-01 11:54:04', '6281396107088', 'Coba chat pakai nomor lama aku bro'),
(48, 'noname', '2022-07-01 10:41:05', '6282273733053', 'Udah makan kalian?'),
(52, 'noname', '2022-07-01 10:41:05', '6282273733053', 'Udah makan kalian?'),
(54, 'noname', '2022-07-01 09:25:40', '6281262479871', 'Ok'),
(55, 'noname', '2022-07-01 08:19:12', '6281376068860', 'Mama rindu Lady....'),
(56, 'noname', '2022-07-01 07:56:00', '6281262479871', 'call (miss)'),
(57, 'noname', '2022-07-01 07:55:27', '6281262479871', 'Paket kk'),
(58, 'noname', '2022-07-01 07:55:26', '6281262479871', 'https://fs.magicrepository.com/incoming/9bea749986136bd49871c28d4ff6f3cb.jpg'),
(59, 'noname', '2022-07-01 07:55:14', '6281262479871', 'call (miss)'),
(60, 'noname', '2022-07-01 07:54:59', '6281262479871', 'Paket'),
(62, 'St.Eppen Sitanggang', '2022-07-01 05:47:43', '6282277411131', 'https://fs.magicrepository.com/incoming/fd8fb99e51d75251095984bb617dae97.jpg'),
(63, 'St.Eppen Sitanggang', '2022-07-01 05:47:42', '6282277411131', 'Kuyyyy'),
(64, 'noname', '2022-07-01 04:36:47', '6281361752678', '01/07/2022 14:35\n\nTrf sukses rek.x945 ke x399/SDRI STEFFANNY PUTRI N/BANK BNI\n\nRp.400.000,00 Fee:Rp.6.500,00\n\nRRN:220701102856\nUang Kamar'),
(65, 'noname', '2022-07-01 04:25:16', '6282288801280', 'Fotokan ntar ya'),
(66, 'noname', '2022-07-01 04:17:52', '6282288801280', 'Ste buat dlu alur ubah password'),
(67, 'noname', '2022-07-01 03:00:29', '6282288801280', 'Gambarkan di kertas ya'),
(68, 'noname', '2022-07-01 03:00:20', '6282288801280', 'https://fs.magicrepository.com/incoming/126e9dc473dc73c487bee99125a5a542.jpg'),
(69, 'noname', '2022-07-01 03:00:18', '6282288801280', 'https://fs.magicrepository.com/incoming/99b478bfa50ccbd534cff480247ba10f.jpg'),
(70, 'noname', '2022-07-01 03:00:07', '6282288801280', 'Ada 1 lagi alur lupa pasword\nJd dia masuk dari login klik lupa pasword stelah itu nampil masukkan email\nNtar kalau benar email ditemukan lanjutkan'),
(71, 'noname', '2022-07-01 02:59:45', '6282288801280', 'https://fs.magicrepository.com/incoming/23cced3b786cb7fcb1299703132a3991.ogg'),
(72, 'noname', '2022-07-01 02:57:52', '6282288801280', 'Jd panahny gada'),
(73, 'noname', '2022-07-01 02:57:08', '6282288801280', 'Mnrtmu gmn'),
(74, 'noname', '2022-07-01 02:57:00', '6282288801280', 'https://fs.magicrepository.com/incoming/613deaf3b83bcbabd99bae3784075c57.jpg'),
(75, 'noname', '2022-07-01 02:56:26', '6282288801280', 'https://fs.magicrepository.com/incoming/2bf7c27cd8cc34e891f0fc797fedda5a.jpg'),
(76, 'noname', '2022-07-01 02:55:17', '6282288801280', 'call (miss)'),
(77, 'noname', '2022-07-01 02:54:39', '6282288801280', 'Ih'),
(78, 'noname', '2022-07-01 02:54:31', '6282288801280', 'Pp'),
(79, 'noname', '2022-07-01 02:54:27', '6282288801280', 'Stee'),
(80, 'noname', '2022-07-01 02:54:24', '6282288801280', 'call (miss_video)'),
(81, 'noname', '2022-07-01 02:54:02', '6282288801280', 'Woi'),
(82, 'noname', '2022-07-01 02:53:54', '6282288801280', 'call (miss_video)'),
(83, 'noname', '2022-07-01 02:53:32', '6282288801280', 'call (miss_video)'),
(84, 'noname', '2022-07-01 02:53:09', '6282288801280', 'Woi'),
(85, 'noname', '2022-07-01 02:53:03', '6282288801280', 'Angjat'),
(86, 'noname', '2022-07-01 02:52:58', '6282288801280', 'Ste'),
(87, 'noname', '2022-07-01 02:52:52', '6282288801280', 'call (miss_video)'),
(88, 'noname', '2022-07-01 02:52:21', '6282288801280', 'P'),
(89, 'noname', '2022-07-01 02:52:19', '6282288801280', 'Ste'),
(90, 'noname', '2022-07-01 02:52:10', '6282288801280', 'call (miss_video)'),
(91, 'noname', '2022-07-01 02:21:51', '6285668308737', 'test'),
(92, 'St.Mangara Tua Sitinjak,SE', '2022-07-01 02:03:52', '6281260571556', 'Online tp centang 1'),
(93, 'noname', '2022-07-01 02:52:19', '6282288801280', 'Ste'),
(94, 'St.Mangara Tua Sitinjak,SE', '2022-07-01 02:03:34', '6281260571556', 'Lalap hanya ngetes karejomu'),
(95, 'St.Eppen Sitanggang', '2022-07-01 02:00:18', '6282277411131', 'Halooo'),
(96, 'St.Mangara Tua Sitinjak,SE', '2022-07-01 02:03:52', '6281260571556', 'Online tp centang 1'),
(97, 'St.Mangara Tua Sitinjak,SE', '2022-07-01 02:03:47', '6281260571556', 'Aneh wa mu'),
(98, 'St.Mangara Tua Sitinjak,SE', '2022-07-01 02:03:34', '6281260571556', 'Lalap hanya ngetes karejomu'),
(99, 'St.Eppen Sitanggang', '2022-07-01 02:00:18', '6282277411131', 'Halooo');

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_ama`
-- (See below for the actual view)
--
CREATE TABLE `v_ama` (
`jemaat_id` char(9)
,`jemaat_nokk` char(8)
,`jemaat_nama` varchar(100)
,`jemaat_jenkel` varchar(1)
,`jemaat_tmptlahir` varchar(100)
,`jemaat_tgllahir` date
,`jemaat_tgltardidi` date
,`jemaat_tglmalua` date
,`jemaat_pendidikan` varchar(100)
,`jemaat_pekerjaan` varchar(100)
,`jemaat_statuskel` varchar(100)
,`jemaat_notelp` varchar(13)
,`jemaat_nourutkk` int(2)
,`jemaat_flag_id` int(2)
,`Umur` int(5)
,`lingkungan_nama` varchar(50)
,`flag_nama` varchar(100)
,`kk_alamat` varchar(100)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_dewan`
-- (See below for the actual view)
--
CREATE TABLE `v_dewan` (
`dewan_id` int(11)
,`dewan_parhalado_id` int(11)
,`dewan_katid` int(11)
,`dewan_jabatan` varchar(50)
,`parhalado_jemaat_id` char(9)
,`parhalado_photo` varchar(255)
,`Nama` varchar(100)
,`Dewan` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_ina`
-- (See below for the actual view)
--
CREATE TABLE `v_ina` (
`jemaat_id` char(9)
,`jemaat_nokk` char(8)
,`jemaat_nama` varchar(100)
,`jemaat_jenkel` varchar(1)
,`jemaat_tmptlahir` varchar(100)
,`jemaat_tgllahir` date
,`jemaat_tgltardidi` date
,`jemaat_tglmalua` date
,`jemaat_pendidikan` varchar(100)
,`jemaat_pekerjaan` varchar(100)
,`jemaat_statuskel` varchar(100)
,`jemaat_notelp` varchar(13)
,`jemaat_nourutkk` int(2)
,`jemaat_flag_id` int(2)
,`Umur` int(5)
,`lingkungan_nama` varchar(50)
,`flag_nama` varchar(100)
,`kk_alamat` varchar(100)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_katusia`
-- (See below for the actual view)
--
CREATE TABLE `v_katusia` (
`jemaat_id` char(9)
,`jemaat_nokk` char(8)
,`jemaat_nama` varchar(100)
,`jemaat_jenkel` varchar(1)
,`jemaat_tmptlahir` varchar(100)
,`jemaat_tgllahir` date
,`jemaat_tgltardidi` date
,`jemaat_tglmalua` date
,`jemaat_pendidikan` varchar(100)
,`jemaat_pekerjaan` varchar(100)
,`jemaat_statuskel` varchar(100)
,`jemaat_notelp` varchar(13)
,`jemaat_nourutkk` int(2)
,`jemaat_flag_id` int(2)
,`Umur` int(5)
,`lingkungan_nama` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_katwarta`
-- (See below for the actual view)
--
CREATE TABLE `v_katwarta` (
`wartafix_id` int(11)
,`wartafix_tgl` varchar(200)
,`wartafix_nama` varchar(200)
,`wartafix_isi` text
,`wartafix_kat_id` int(11)
,`kategori_warta_nama` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_lansia`
-- (See below for the actual view)
--
CREATE TABLE `v_lansia` (
`jemaat_id` char(9)
,`jemaat_nokk` char(8)
,`jemaat_nama` varchar(100)
,`jemaat_jenkel` varchar(1)
,`jemaat_tmptlahir` varchar(100)
,`jemaat_tgllahir` date
,`jemaat_tgltardidi` date
,`jemaat_tglmalua` date
,`jemaat_pendidikan` varchar(100)
,`jemaat_pekerjaan` varchar(100)
,`jemaat_statuskel` varchar(100)
,`jemaat_notelp` varchar(13)
,`jemaat_nourutkk` int(2)
,`jemaat_flag_id` int(2)
,`Umur` int(5)
,`lingkungan_nama` varchar(50)
,`flag_nama` varchar(100)
,`kk_alamat` varchar(100)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_naposo`
-- (See below for the actual view)
--
CREATE TABLE `v_naposo` (
`jemaat_id` char(9)
,`jemaat_nokk` char(8)
,`jemaat_nama` varchar(100)
,`jemaat_jenkel` varchar(1)
,`jemaat_tmptlahir` varchar(100)
,`jemaat_tgllahir` date
,`jemaat_tgltardidi` date
,`jemaat_tglmalua` date
,`jemaat_pendidikan` varchar(100)
,`jemaat_pekerjaan` varchar(100)
,`jemaat_statuskel` varchar(100)
,`jemaat_notelp` varchar(13)
,`jemaat_nourutkk` int(2)
,`jemaat_flag_id` int(2)
,`Umur` int(5)
,`lingkungan_nama` varchar(50)
,`flag_nama` varchar(100)
,`kk_alamat` varchar(100)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_parhalado`
-- (See below for the actual view)
--
CREATE TABLE `v_parhalado` (
`parhalado_id` int(11)
,`parhalado_jemaat_id` char(9)
,`parhalado_jabatan` varchar(50)
,`parhalado_dilantik` varchar(80)
,`parhalado_photo` varchar(255)
,`jemaat_id` char(9)
,`jemaat_nokk` char(8)
,`jemaat_nama` varchar(100)
,`jemaat_jenkel` varchar(1)
,`jemaat_tmptlahir` varchar(100)
,`jemaat_tgllahir` date
,`jemaat_tgltardidi` date
,`jemaat_tglmalua` date
,`jemaat_pendidikan` varchar(100)
,`jemaat_pekerjaan` varchar(100)
,`jemaat_statuskel` varchar(100)
,`jemaat_notelp` varchar(13)
,`jemaat_nourutkk` int(2)
,`jemaat_flag_id` int(2)
,`kk_id` char(8)
,`kk_username` varchar(100)
,`kk_lingk_id` varchar(4)
,`kk_alamat` varchar(100)
,`lingkungan_nama` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_remaja`
-- (See below for the actual view)
--
CREATE TABLE `v_remaja` (
`jemaat_id` char(9)
,`jemaat_nokk` char(8)
,`jemaat_nama` varchar(100)
,`jemaat_jenkel` varchar(1)
,`jemaat_tmptlahir` varchar(100)
,`jemaat_tgllahir` date
,`jemaat_tgltardidi` date
,`jemaat_tglmalua` date
,`jemaat_pendidikan` varchar(100)
,`jemaat_pekerjaan` varchar(100)
,`jemaat_statuskel` varchar(100)
,`jemaat_notelp` varchar(13)
,`jemaat_nourutkk` int(2)
,`jemaat_flag_id` int(2)
,`Umur` int(5)
,`lingkungan_nama` varchar(50)
,`flag_nama` varchar(100)
,`kk_alamat` varchar(100)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_skm`
-- (See below for the actual view)
--
CREATE TABLE `v_skm` (
`jemaat_id` char(9)
,`jemaat_nokk` char(8)
,`jemaat_nama` varchar(100)
,`jemaat_jenkel` varchar(1)
,`jemaat_tmptlahir` varchar(100)
,`jemaat_tgllahir` date
,`jemaat_tgltardidi` date
,`jemaat_tglmalua` date
,`jemaat_pendidikan` varchar(100)
,`jemaat_pekerjaan` varchar(100)
,`jemaat_statuskel` varchar(100)
,`jemaat_notelp` varchar(13)
,`jemaat_nourutkk` int(2)
,`jemaat_flag_id` int(2)
,`Umur` int(5)
,`lingkungan_nama` varchar(50)
,`flag_nama` varchar(100)
,`kk_alamat` varchar(100)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_wartahome`
-- (See below for the actual view)
--
CREATE TABLE `v_wartahome` (
`wartafix_id` int(11)
,`wartafix_tgl` varchar(200)
,`wartafix_nama` varchar(200)
,`wartafix_isi` text
,`wartafix_kat_id` int(11)
,`wartafix_minggu_id` int(2)
,`wartafix_status` int(1)
,`kategori_warta_nama` varchar(50)
,`minggu_nama` varchar(50)
);

-- --------------------------------------------------------

--
-- Structure for view `v_ama`
--
DROP TABLE IF EXISTS `v_ama`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_ama`  AS  select `v_katusia`.`jemaat_id` AS `jemaat_id`,`v_katusia`.`jemaat_nokk` AS `jemaat_nokk`,`v_katusia`.`jemaat_nama` AS `jemaat_nama`,`v_katusia`.`jemaat_jenkel` AS `jemaat_jenkel`,`v_katusia`.`jemaat_tmptlahir` AS `jemaat_tmptlahir`,`v_katusia`.`jemaat_tgllahir` AS `jemaat_tgllahir`,`v_katusia`.`jemaat_tgltardidi` AS `jemaat_tgltardidi`,`v_katusia`.`jemaat_tglmalua` AS `jemaat_tglmalua`,`v_katusia`.`jemaat_pendidikan` AS `jemaat_pendidikan`,`v_katusia`.`jemaat_pekerjaan` AS `jemaat_pekerjaan`,`v_katusia`.`jemaat_statuskel` AS `jemaat_statuskel`,`v_katusia`.`jemaat_notelp` AS `jemaat_notelp`,`v_katusia`.`jemaat_nourutkk` AS `jemaat_nourutkk`,`v_katusia`.`jemaat_flag_id` AS `jemaat_flag_id`,`v_katusia`.`Umur` AS `Umur`,`v_katusia`.`lingkungan_nama` AS `lingkungan_nama`,`tbl_flag`.`flag_nama` AS `flag_nama`,`tbl_kk`.`kk_alamat` AS `kk_alamat` from ((`v_katusia` join `tbl_flag` on(`v_katusia`.`jemaat_flag_id` = `tbl_flag`.`flag_id`)) join `tbl_kk` on(`v_katusia`.`jemaat_nokk` = `tbl_kk`.`kk_id`)) where `v_katusia`.`jemaat_jenkel` = 'l' and `v_katusia`.`Umur` between 30 and 59 and `v_katusia`.`jemaat_statuskel` like '%Kepala Keluarga%' ;

-- --------------------------------------------------------

--
-- Structure for view `v_dewan`
--
DROP TABLE IF EXISTS `v_dewan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_dewan`  AS  select `tbl_dewan`.`dewan_id` AS `dewan_id`,`tbl_dewan`.`dewan_parhalado_id` AS `dewan_parhalado_id`,`tbl_dewan`.`dewan_katid` AS `dewan_katid`,`tbl_dewan`.`dewan_jabatan` AS `dewan_jabatan`,`tbl_parhalado`.`parhalado_jemaat_id` AS `parhalado_jemaat_id`,`tbl_parhalado`.`parhalado_photo` AS `parhalado_photo`,`tbl_jemaat`.`jemaat_nama` AS `Nama`,`tbl_kdewan`.`kdewan_nama` AS `Dewan` from (((`tbl_dewan` join `tbl_parhalado` on(`tbl_dewan`.`dewan_parhalado_id` = `tbl_parhalado`.`parhalado_id`)) join `tbl_jemaat` on(`tbl_parhalado`.`parhalado_jemaat_id` = `tbl_jemaat`.`jemaat_id`)) join `tbl_kdewan` on(`tbl_dewan`.`dewan_katid` = `tbl_kdewan`.`kdewan_id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `v_ina`
--
DROP TABLE IF EXISTS `v_ina`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_ina`  AS  select `v_katusia`.`jemaat_id` AS `jemaat_id`,`v_katusia`.`jemaat_nokk` AS `jemaat_nokk`,`v_katusia`.`jemaat_nama` AS `jemaat_nama`,`v_katusia`.`jemaat_jenkel` AS `jemaat_jenkel`,`v_katusia`.`jemaat_tmptlahir` AS `jemaat_tmptlahir`,`v_katusia`.`jemaat_tgllahir` AS `jemaat_tgllahir`,`v_katusia`.`jemaat_tgltardidi` AS `jemaat_tgltardidi`,`v_katusia`.`jemaat_tglmalua` AS `jemaat_tglmalua`,`v_katusia`.`jemaat_pendidikan` AS `jemaat_pendidikan`,`v_katusia`.`jemaat_pekerjaan` AS `jemaat_pekerjaan`,`v_katusia`.`jemaat_statuskel` AS `jemaat_statuskel`,`v_katusia`.`jemaat_notelp` AS `jemaat_notelp`,`v_katusia`.`jemaat_nourutkk` AS `jemaat_nourutkk`,`v_katusia`.`jemaat_flag_id` AS `jemaat_flag_id`,`v_katusia`.`Umur` AS `Umur`,`v_katusia`.`lingkungan_nama` AS `lingkungan_nama`,`tbl_flag`.`flag_nama` AS `flag_nama`,`tbl_kk`.`kk_alamat` AS `kk_alamat` from ((`v_katusia` join `tbl_flag` on(`v_katusia`.`jemaat_flag_id` = `tbl_flag`.`flag_id`)) join `tbl_kk` on(`v_katusia`.`jemaat_nokk` = `tbl_kk`.`kk_id`)) where `v_katusia`.`jemaat_jenkel` = 'p' and `v_katusia`.`Umur` between 30 and 59 and `v_katusia`.`jemaat_statuskel` like '%Kepala Keluarga%' or `v_katusia`.`jemaat_statuskel` like '%Ibu Rumah Tangga%' ;

-- --------------------------------------------------------

--
-- Structure for view `v_katusia`
--
DROP TABLE IF EXISTS `v_katusia`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_katusia`  AS  select `tbl_jemaat`.`jemaat_id` AS `jemaat_id`,`tbl_jemaat`.`jemaat_nokk` AS `jemaat_nokk`,`tbl_jemaat`.`jemaat_nama` AS `jemaat_nama`,`tbl_jemaat`.`jemaat_jenkel` AS `jemaat_jenkel`,`tbl_jemaat`.`jemaat_tmptlahir` AS `jemaat_tmptlahir`,`tbl_jemaat`.`jemaat_tgllahir` AS `jemaat_tgllahir`,`tbl_jemaat`.`jemaat_tgltardidi` AS `jemaat_tgltardidi`,`tbl_jemaat`.`jemaat_tglmalua` AS `jemaat_tglmalua`,`tbl_jemaat`.`jemaat_pendidikan` AS `jemaat_pendidikan`,`tbl_jemaat`.`jemaat_pekerjaan` AS `jemaat_pekerjaan`,`tbl_jemaat`.`jemaat_statuskel` AS `jemaat_statuskel`,`tbl_jemaat`.`jemaat_notelp` AS `jemaat_notelp`,`tbl_jemaat`.`jemaat_nourutkk` AS `jemaat_nourutkk`,`tbl_jemaat`.`jemaat_flag_id` AS `jemaat_flag_id`,year(curdate()) - year(`tbl_jemaat`.`jemaat_tgllahir`) AS `Umur`,`tbl_lingkungan`.`lingkungan_nama` AS `lingkungan_nama` from ((`tbl_jemaat` join `tbl_kk` on(`tbl_jemaat`.`jemaat_nokk` = `tbl_kk`.`kk_id`)) join `tbl_lingkungan` on(`tbl_kk`.`kk_lingk_id` = `tbl_lingkungan`.`lingkungan_id`)) order by `tbl_jemaat`.`jemaat_id` ;

-- --------------------------------------------------------

--
-- Structure for view `v_katwarta`
--
DROP TABLE IF EXISTS `v_katwarta`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_katwarta`  AS  select `tbl_wartafix`.`wartafix_id` AS `wartafix_id`,`tbl_wartafix`.`wartafix_tgl` AS `wartafix_tgl`,`tbl_wartafix`.`wartafix_nama` AS `wartafix_nama`,`tbl_wartafix`.`wartafix_isi` AS `wartafix_isi`,`tbl_wartafix`.`wartafix_kat_id` AS `wartafix_kat_id`,`tbl_kategori_warta`.`kategori_warta_nama` AS `kategori_warta_nama` from (`tbl_wartafix` join `tbl_kategori_warta`) where `tbl_wartafix`.`wartafix_id` = `tbl_kategori_warta`.`kategori_warta_id` ;

-- --------------------------------------------------------

--
-- Structure for view `v_lansia`
--
DROP TABLE IF EXISTS `v_lansia`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_lansia`  AS  select `v_katusia`.`jemaat_id` AS `jemaat_id`,`v_katusia`.`jemaat_nokk` AS `jemaat_nokk`,`v_katusia`.`jemaat_nama` AS `jemaat_nama`,`v_katusia`.`jemaat_jenkel` AS `jemaat_jenkel`,`v_katusia`.`jemaat_tmptlahir` AS `jemaat_tmptlahir`,`v_katusia`.`jemaat_tgllahir` AS `jemaat_tgllahir`,`v_katusia`.`jemaat_tgltardidi` AS `jemaat_tgltardidi`,`v_katusia`.`jemaat_tglmalua` AS `jemaat_tglmalua`,`v_katusia`.`jemaat_pendidikan` AS `jemaat_pendidikan`,`v_katusia`.`jemaat_pekerjaan` AS `jemaat_pekerjaan`,`v_katusia`.`jemaat_statuskel` AS `jemaat_statuskel`,`v_katusia`.`jemaat_notelp` AS `jemaat_notelp`,`v_katusia`.`jemaat_nourutkk` AS `jemaat_nourutkk`,`v_katusia`.`jemaat_flag_id` AS `jemaat_flag_id`,`v_katusia`.`Umur` AS `Umur`,`v_katusia`.`lingkungan_nama` AS `lingkungan_nama`,`tbl_flag`.`flag_nama` AS `flag_nama`,`tbl_kk`.`kk_alamat` AS `kk_alamat` from ((`v_katusia` join `tbl_flag` on(`v_katusia`.`jemaat_flag_id` = `tbl_flag`.`flag_id`)) join `tbl_kk` on(`v_katusia`.`jemaat_nokk` = `tbl_kk`.`kk_id`)) where `v_katusia`.`Umur` >= 60 order by `v_katusia`.`jemaat_id` ;

-- --------------------------------------------------------

--
-- Structure for view `v_naposo`
--
DROP TABLE IF EXISTS `v_naposo`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_naposo`  AS  select `v_katusia`.`jemaat_id` AS `jemaat_id`,`v_katusia`.`jemaat_nokk` AS `jemaat_nokk`,`v_katusia`.`jemaat_nama` AS `jemaat_nama`,`v_katusia`.`jemaat_jenkel` AS `jemaat_jenkel`,`v_katusia`.`jemaat_tmptlahir` AS `jemaat_tmptlahir`,`v_katusia`.`jemaat_tgllahir` AS `jemaat_tgllahir`,`v_katusia`.`jemaat_tgltardidi` AS `jemaat_tgltardidi`,`v_katusia`.`jemaat_tglmalua` AS `jemaat_tglmalua`,`v_katusia`.`jemaat_pendidikan` AS `jemaat_pendidikan`,`v_katusia`.`jemaat_pekerjaan` AS `jemaat_pekerjaan`,`v_katusia`.`jemaat_statuskel` AS `jemaat_statuskel`,`v_katusia`.`jemaat_notelp` AS `jemaat_notelp`,`v_katusia`.`jemaat_nourutkk` AS `jemaat_nourutkk`,`v_katusia`.`jemaat_flag_id` AS `jemaat_flag_id`,`v_katusia`.`Umur` AS `Umur`,`v_katusia`.`lingkungan_nama` AS `lingkungan_nama`,`tbl_flag`.`flag_nama` AS `flag_nama`,`tbl_kk`.`kk_alamat` AS `kk_alamat` from ((`v_katusia` join `tbl_flag` on(`v_katusia`.`jemaat_flag_id` = `tbl_flag`.`flag_id`)) join `tbl_kk` on(`v_katusia`.`jemaat_nokk` = `tbl_kk`.`kk_id`)) where `v_katusia`.`Umur` between 18 and 39 and `v_katusia`.`jemaat_statuskel` like '%anak%' order by `v_katusia`.`jemaat_id` ;

-- --------------------------------------------------------

--
-- Structure for view `v_parhalado`
--
DROP TABLE IF EXISTS `v_parhalado`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_parhalado`  AS  select `tbl_parhalado`.`parhalado_id` AS `parhalado_id`,`tbl_parhalado`.`parhalado_jemaat_id` AS `parhalado_jemaat_id`,`tbl_parhalado`.`parhalado_jabatan` AS `parhalado_jabatan`,`tbl_parhalado`.`parhalado_dilantik` AS `parhalado_dilantik`,`tbl_parhalado`.`parhalado_photo` AS `parhalado_photo`,`tbl_jemaat`.`jemaat_id` AS `jemaat_id`,`tbl_jemaat`.`jemaat_nokk` AS `jemaat_nokk`,`tbl_jemaat`.`jemaat_nama` AS `jemaat_nama`,`tbl_jemaat`.`jemaat_jenkel` AS `jemaat_jenkel`,`tbl_jemaat`.`jemaat_tmptlahir` AS `jemaat_tmptlahir`,`tbl_jemaat`.`jemaat_tgllahir` AS `jemaat_tgllahir`,`tbl_jemaat`.`jemaat_tgltardidi` AS `jemaat_tgltardidi`,`tbl_jemaat`.`jemaat_tglmalua` AS `jemaat_tglmalua`,`tbl_jemaat`.`jemaat_pendidikan` AS `jemaat_pendidikan`,`tbl_jemaat`.`jemaat_pekerjaan` AS `jemaat_pekerjaan`,`tbl_jemaat`.`jemaat_statuskel` AS `jemaat_statuskel`,`tbl_jemaat`.`jemaat_notelp` AS `jemaat_notelp`,`tbl_jemaat`.`jemaat_nourutkk` AS `jemaat_nourutkk`,`tbl_jemaat`.`jemaat_flag_id` AS `jemaat_flag_id`,`tbl_kk`.`kk_id` AS `kk_id`,`tbl_kk`.`kk_username` AS `kk_username`,`tbl_kk`.`kk_lingk_id` AS `kk_lingk_id`,`tbl_kk`.`kk_alamat` AS `kk_alamat`,`tbl_lingkungan`.`lingkungan_nama` AS `lingkungan_nama` from (((`tbl_parhalado` join `tbl_jemaat` on(`tbl_parhalado`.`parhalado_jemaat_id` = `tbl_jemaat`.`jemaat_id`)) join `tbl_kk` on(`tbl_jemaat`.`jemaat_nokk` = `tbl_kk`.`kk_id`)) join `tbl_lingkungan` on(`tbl_kk`.`kk_lingk_id` = `tbl_lingkungan`.`lingkungan_id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `v_remaja`
--
DROP TABLE IF EXISTS `v_remaja`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_remaja`  AS  select `v_katusia`.`jemaat_id` AS `jemaat_id`,`v_katusia`.`jemaat_nokk` AS `jemaat_nokk`,`v_katusia`.`jemaat_nama` AS `jemaat_nama`,`v_katusia`.`jemaat_jenkel` AS `jemaat_jenkel`,`v_katusia`.`jemaat_tmptlahir` AS `jemaat_tmptlahir`,`v_katusia`.`jemaat_tgllahir` AS `jemaat_tgllahir`,`v_katusia`.`jemaat_tgltardidi` AS `jemaat_tgltardidi`,`v_katusia`.`jemaat_tglmalua` AS `jemaat_tglmalua`,`v_katusia`.`jemaat_pendidikan` AS `jemaat_pendidikan`,`v_katusia`.`jemaat_pekerjaan` AS `jemaat_pekerjaan`,`v_katusia`.`jemaat_statuskel` AS `jemaat_statuskel`,`v_katusia`.`jemaat_notelp` AS `jemaat_notelp`,`v_katusia`.`jemaat_nourutkk` AS `jemaat_nourutkk`,`v_katusia`.`jemaat_flag_id` AS `jemaat_flag_id`,`v_katusia`.`Umur` AS `Umur`,`v_katusia`.`lingkungan_nama` AS `lingkungan_nama`,`tbl_flag`.`flag_nama` AS `flag_nama`,`tbl_kk`.`kk_alamat` AS `kk_alamat` from ((`v_katusia` join `tbl_flag` on(`v_katusia`.`jemaat_flag_id` = `tbl_flag`.`flag_id`)) join `tbl_kk` on(`v_katusia`.`jemaat_nokk` = `tbl_kk`.`kk_id`)) where `v_katusia`.`Umur` between 12 and 17 and `v_katusia`.`jemaat_statuskel` like '%anak%' order by `v_katusia`.`jemaat_id` ;

-- --------------------------------------------------------

--
-- Structure for view `v_skm`
--
DROP TABLE IF EXISTS `v_skm`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_skm`  AS  select `v_katusia`.`jemaat_id` AS `jemaat_id`,`v_katusia`.`jemaat_nokk` AS `jemaat_nokk`,`v_katusia`.`jemaat_nama` AS `jemaat_nama`,`v_katusia`.`jemaat_jenkel` AS `jemaat_jenkel`,`v_katusia`.`jemaat_tmptlahir` AS `jemaat_tmptlahir`,`v_katusia`.`jemaat_tgllahir` AS `jemaat_tgllahir`,`v_katusia`.`jemaat_tgltardidi` AS `jemaat_tgltardidi`,`v_katusia`.`jemaat_tglmalua` AS `jemaat_tglmalua`,`v_katusia`.`jemaat_pendidikan` AS `jemaat_pendidikan`,`v_katusia`.`jemaat_pekerjaan` AS `jemaat_pekerjaan`,`v_katusia`.`jemaat_statuskel` AS `jemaat_statuskel`,`v_katusia`.`jemaat_notelp` AS `jemaat_notelp`,`v_katusia`.`jemaat_nourutkk` AS `jemaat_nourutkk`,`v_katusia`.`jemaat_flag_id` AS `jemaat_flag_id`,`v_katusia`.`Umur` AS `Umur`,`v_katusia`.`lingkungan_nama` AS `lingkungan_nama`,`tbl_flag`.`flag_nama` AS `flag_nama`,`tbl_kk`.`kk_alamat` AS `kk_alamat` from ((`v_katusia` join `tbl_flag` on(`v_katusia`.`jemaat_flag_id` = `tbl_flag`.`flag_id`)) join `tbl_kk` on(`v_katusia`.`jemaat_nokk` = `tbl_kk`.`kk_id`)) where `v_katusia`.`Umur` between 5 and 14 and `v_katusia`.`jemaat_statuskel` like '%anak%' order by `v_katusia`.`jemaat_id` ;

-- --------------------------------------------------------

--
-- Structure for view `v_wartahome`
--
DROP TABLE IF EXISTS `v_wartahome`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_wartahome`  AS  select `tbl_wartafix`.`wartafix_id` AS `wartafix_id`,`tbl_wartafix`.`wartafix_tgl` AS `wartafix_tgl`,`tbl_wartafix`.`wartafix_nama` AS `wartafix_nama`,`tbl_wartafix`.`wartafix_isi` AS `wartafix_isi`,`tbl_wartafix`.`wartafix_kat_id` AS `wartafix_kat_id`,`tbl_wartafix`.`wartafix_minggu_id` AS `wartafix_minggu_id`,`tbl_wartafix`.`wartafix_status` AS `wartafix_status`,`tbl_kategori_warta`.`kategori_warta_nama` AS `kategori_warta_nama`,`tbl_minggu`.`minggu_nama` AS `minggu_nama` from ((`tbl_wartafix` join `tbl_kategori_warta` on(`tbl_wartafix`.`wartafix_kat_id` = `tbl_kategori_warta`.`kategori_warta_id`)) join `tbl_minggu` on(`tbl_wartafix`.`wartafix_minggu_id` = `tbl_minggu`.`minggu_id`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_agenda`
--
ALTER TABLE `tbl_agenda`
  ADD PRIMARY KEY (`agenda_id`);

--
-- Indexes for table `tbl_album`
--
ALTER TABLE `tbl_album`
  ADD PRIMARY KEY (`album_id`),
  ADD KEY `album_pengguna_id` (`album_pengguna_id`);

--
-- Indexes for table `tbl_dewan`
--
ALTER TABLE `tbl_dewan`
  ADD PRIMARY KEY (`dewan_id`),
  ADD KEY `dewan_parhalado_id` (`dewan_parhalado_id`),
  ADD KEY `dewan_katid` (`dewan_katid`);

--
-- Indexes for table `tbl_files`
--
ALTER TABLE `tbl_files`
  ADD PRIMARY KEY (`file_id`);

--
-- Indexes for table `tbl_flag`
--
ALTER TABLE `tbl_flag`
  ADD PRIMARY KEY (`flag_id`);

--
-- Indexes for table `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  ADD PRIMARY KEY (`galeri_id`),
  ADD KEY `galeri_album_id` (`galeri_album_id`),
  ADD KEY `galeri_pengguna_id` (`galeri_pengguna_id`);

--
-- Indexes for table `tbl_inbox`
--
ALTER TABLE `tbl_inbox`
  ADD PRIMARY KEY (`inbox_id`);

--
-- Indexes for table `tbl_jadwal_ibadah`
--
ALTER TABLE `tbl_jadwal_ibadah`
  ADD PRIMARY KEY (`jadwal_ibadah_id`);

--
-- Indexes for table `tbl_jemaat`
--
ALTER TABLE `tbl_jemaat`
  ADD PRIMARY KEY (`jemaat_id`),
  ADD KEY `jemaat_flag_id` (`jemaat_flag_id`),
  ADD KEY `jemaat_nokk` (`jemaat_nokk`);

--
-- Indexes for table `tbl_jmenikah`
--
ALTER TABLE `tbl_jmenikah`
  ADD PRIMARY KEY (`jmenikah_id`),
  ADD KEY `jmenikah_jemaat_id` (`jmenikah_jemaat_id`);

--
-- Indexes for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indexes for table `tbl_kategori_warta`
--
ALTER TABLE `tbl_kategori_warta`
  ADD PRIMARY KEY (`kategori_warta_id`);

--
-- Indexes for table `tbl_katfilter`
--
ALTER TABLE `tbl_katfilter`
  ADD PRIMARY KEY (`katfilter_id`);

--
-- Indexes for table `tbl_katsurat`
--
ALTER TABLE `tbl_katsurat`
  ADD PRIMARY KEY (`katsurat_id`);

--
-- Indexes for table `tbl_kdewan`
--
ALTER TABLE `tbl_kdewan`
  ADD PRIMARY KEY (`kdewan_id`);

--
-- Indexes for table `tbl_kelahiran`
--
ALTER TABLE `tbl_kelahiran`
  ADD PRIMARY KEY (`kelahiran_id`),
  ADD KEY `kelahiran_kk_id` (`kelahiran_kk_id`);

--
-- Indexes for table `tbl_kk`
--
ALTER TABLE `tbl_kk`
  ADD PRIMARY KEY (`kk_id`),
  ADD KEY `kk_lingk_id` (`kk_lingk_id`);

--
-- Indexes for table `tbl_kkpindah`
--
ALTER TABLE `tbl_kkpindah`
  ADD PRIMARY KEY (`kkpindah_id`),
  ADD KEY `kkpindah_kk_id` (`kkpindah_kk_id`);

--
-- Indexes for table `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  ADD PRIMARY KEY (`komentar_id`),
  ADD KEY `komentar_tulisan_id` (`komentar_tulisan_id`),
  ADD KEY `komentar_tulilsan_id` (`komentar_renungan_id`);

--
-- Indexes for table `tbl_lingkungan`
--
ALTER TABLE `tbl_lingkungan`
  ADD PRIMARY KEY (`lingkungan_id`);

--
-- Indexes for table `tbl_meninggal`
--
ALTER TABLE `tbl_meninggal`
  ADD PRIMARY KEY (`meninggal_id`),
  ADD KEY `meninggal_jemaat_id` (`meninggal_jemaat_id`),
  ADD KEY `meninggal_katfilter_id` (`meninggal_katfilter_id`);

--
-- Indexes for table `tbl_minggu`
--
ALTER TABLE `tbl_minggu`
  ADD PRIMARY KEY (`minggu_id`);

--
-- Indexes for table `tbl_parhalado`
--
ALTER TABLE `tbl_parhalado`
  ADD PRIMARY KEY (`parhalado_id`),
  ADD KEY `parhalado_jemaat_id` (`parhalado_jemaat_id`);

--
-- Indexes for table `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  ADD PRIMARY KEY (`pengguna_id`),
  ADD KEY `pengguna_jemaat_id` (`pengguna_jemaat_id`);

--
-- Indexes for table `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
  ADD PRIMARY KEY (`pengumuman_id`);

--
-- Indexes for table `tbl_pengunjung`
--
ALTER TABLE `tbl_pengunjung`
  ADD PRIMARY KEY (`pengunjung_id`);

--
-- Indexes for table `tbl_petugas`
--
ALTER TABLE `tbl_petugas`
  ADD PRIMARY KEY (`petugas_id`);

--
-- Indexes for table `tbl_petugasskm`
--
ALTER TABLE `tbl_petugasskm`
  ADD PRIMARY KEY (`petugas_skmid`);

--
-- Indexes for table `tbl_pewarta`
--
ALTER TABLE `tbl_pewarta`
  ADD PRIMARY KEY (`pewarta_id`),
  ADD KEY `pewarta_katfilter_id` (`pewarta_katfilter_id`),
  ADD KEY `pewarta_jemaat_id` (`pewarta_jemaat_id`);

--
-- Indexes for table `tbl_renungan`
--
ALTER TABLE `tbl_renungan`
  ADD PRIMARY KEY (`renungan_id`) USING BTREE,
  ADD KEY `renungan_kategori_id` (`renungan_kategori_id`),
  ADD KEY `renungan_pengguna_id` (`renungan_pengguna_id`) USING BTREE;

--
-- Indexes for table `tbl_sidi`
--
ALTER TABLE `tbl_sidi`
  ADD PRIMARY KEY (`sidi_id`),
  ADD KEY `sidi_jemaat_id` (`sidi_jemaat_id`);

--
-- Indexes for table `tbl_sk`
--
ALTER TABLE `tbl_sk`
  ADD PRIMARY KEY (`sk_id`),
  ADD KEY `sk_katsurat_id` (`sk_katsurat_id`),
  ADD KEY `sk_kk_id` (`sk_kk_id`),
  ADD KEY `sk_jemaat_id` (`sk_jemaat_id`);

--
-- Indexes for table `tbl_surat`
--
ALTER TABLE `tbl_surat`
  ADD PRIMARY KEY (`surat_id`),
  ADD KEY `surat_katsurat_id` (`surat_katsurat_id`),
  ADD KEY `surat_kk_id` (`surat_kk_id`),
  ADD KEY `surat_jemaat_id` (`surat_jemaat_id`);

--
-- Indexes for table `tbl_tardidi`
--
ALTER TABLE `tbl_tardidi`
  ADD PRIMARY KEY (`tardidi_id`),
  ADD KEY `tardidi_kk_id` (`tardidi_kk_id`);

--
-- Indexes for table `tbl_video`
--
ALTER TABLE `tbl_video`
  ADD PRIMARY KEY (`video_id`);

--
-- Indexes for table `tbl_wartafix`
--
ALTER TABLE `tbl_wartafix`
  ADD PRIMARY KEY (`wartafix_id`),
  ADD KEY `wartafix_kat_id` (`wartafix_kat_id`),
  ADD KEY `wartafix_minggu_id` (`wartafix_minggu_id`);

--
-- Indexes for table `tbl_wartain`
--
ALTER TABLE `tbl_wartain`
  ADD PRIMARY KEY (`wartain_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_agenda`
--
ALTER TABLE `tbl_agenda`
  MODIFY `agenda_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_album`
--
ALTER TABLE `tbl_album`
  MODIFY `album_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_dewan`
--
ALTER TABLE `tbl_dewan`
  MODIFY `dewan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_files`
--
ALTER TABLE `tbl_files`
  MODIFY `file_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  MODIFY `galeri_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_inbox`
--
ALTER TABLE `tbl_inbox`
  MODIFY `inbox_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_jadwal_ibadah`
--
ALTER TABLE `tbl_jadwal_ibadah`
  MODIFY `jadwal_ibadah_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_jmenikah`
--
ALTER TABLE `tbl_jmenikah`
  MODIFY `jmenikah_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_kategori_warta`
--
ALTER TABLE `tbl_kategori_warta`
  MODIFY `kategori_warta_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_katfilter`
--
ALTER TABLE `tbl_katfilter`
  MODIFY `katfilter_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_katsurat`
--
ALTER TABLE `tbl_katsurat`
  MODIFY `katsurat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_kdewan`
--
ALTER TABLE `tbl_kdewan`
  MODIFY `kdewan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_kelahiran`
--
ALTER TABLE `tbl_kelahiran`
  MODIFY `kelahiran_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_kkpindah`
--
ALTER TABLE `tbl_kkpindah`
  MODIFY `kkpindah_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  MODIFY `komentar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_meninggal`
--
ALTER TABLE `tbl_meninggal`
  MODIFY `meninggal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_minggu`
--
ALTER TABLE `tbl_minggu`
  MODIFY `minggu_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_parhalado`
--
ALTER TABLE `tbl_parhalado`
  MODIFY `parhalado_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  MODIFY `pengguna_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
  MODIFY `pengumuman_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_pengunjung`
--
ALTER TABLE `tbl_pengunjung`
  MODIFY `pengunjung_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1053;

--
-- AUTO_INCREMENT for table `tbl_petugas`
--
ALTER TABLE `tbl_petugas`
  MODIFY `petugas_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_petugasskm`
--
ALTER TABLE `tbl_petugasskm`
  MODIFY `petugas_skmid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_pewarta`
--
ALTER TABLE `tbl_pewarta`
  MODIFY `pewarta_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_renungan`
--
ALTER TABLE `tbl_renungan`
  MODIFY `renungan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_sidi`
--
ALTER TABLE `tbl_sidi`
  MODIFY `sidi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_sk`
--
ALTER TABLE `tbl_sk`
  MODIFY `sk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_surat`
--
ALTER TABLE `tbl_surat`
  MODIFY `surat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tbl_tardidi`
--
ALTER TABLE `tbl_tardidi`
  MODIFY `tardidi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_video`
--
ALTER TABLE `tbl_video`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_wartafix`
--
ALTER TABLE `tbl_wartafix`
  MODIFY `wartafix_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
