-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2023 at 03:09 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbgereja`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blog`
--

CREATE TABLE `tbl_blog` (
  `kode` int(11) NOT NULL,
  `kategori` varchar(50) DEFAULT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `konten` text,
  `tgl_posting` date DEFAULT NULL,
  `user` varchar(50) DEFAULT NULL,
  `status` varchar(10) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_blog`
--

INSERT INTO `tbl_blog` (`kode`, `kategori`, `judul`, `konten`, `tgl_posting`, `user`, `status`, `gambar`) VALUES
(63, 'Dd', 'adad', '<p>asdad</p>\r\n', '1312-02-13', 'mfwmfasdasdasdsad', 'wfwsada', '2.jpg'),
(64, 'apa ajaq', 'lari', '<p>egetww</p>\r\n', '0323-02-23', 'snsng', 'NFNSGJ', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_file`
--

CREATE TABLE `tbl_file` (
  `kode` int(11) NOT NULL,
  `kategori` varchar(50) DEFAULT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `konten` text,
  `tgl_posting` date DEFAULT NULL,
  `user` varchar(50) DEFAULT NULL,
  `status` varchar(10) NOT NULL,
  `data_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_file`
--

INSERT INTO `tbl_file` (`kode`, `kategori`, `judul`, `konten`, `tgl_posting`, `user`, `status`, `data_file`) VALUES
(1, 'MINGGU', '11 : 00 Jam Ibdah Telah di ubah', '<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"height:80px; width:383px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>09:00-10.40 WIB</td>\r\n			<td>Ibadah Pertama</td>\r\n		</tr>\r\n		<tr>\r\n			<td>11.00-Selesai</td>\r\n			<td>Ibdah Ke II</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>\r\n			<p>Kami Mengharapkan Kedatangan Anda Untuk Tuhan</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n', '2018-09-16', 'Delisman', 'Aktif', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_folio`
--

CREATE TABLE `tbl_folio` (
  `kode` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `gambar` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_folio`
--

INSERT INTO `tbl_folio` (`kode`, `nama`, `alamat`, `gambar`) VALUES
(50, 'maman', '-', '40-fizi-upin-ipin.jpg'),
(51, '', '-', 'whatsapp image 2022-11-10 at 14.11.44.jpeg'),
(52, '', '-', 'resources_photonews_2021_01_31_33743_15-meme-kocak-joko-dari-jendela-smp-yang-bikin-ngakak-parah-210131i-001.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ibadah_perempuan`
--

CREATE TABLE `tbl_ibadah_perempuan` (
  `id` int(11) NOT NULL,
  `lingkungan` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `tempat` varchar(255) NOT NULL,
  `pemimpin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ibadah_rt`
--

CREATE TABLE `tbl_ibadah_rt` (
  `id` int(11) NOT NULL,
  `lingkungan` varchar(255) NOT NULL,
  `wilayah` varchar(255) NOT NULL,
  `rumah_keluarga` varchar(255) NOT NULL,
  `pemimpin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kaum_bapa`
--

CREATE TABLE `tbl_kaum_bapa` (
  `kode` int(11) NOT NULL,
  `lingkungan` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `tempat` varchar(255) NOT NULL,
  `asal_lingkungan` varchar(255) NOT NULL,
  `pemimpin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kaum_bapa`
--

INSERT INTO `tbl_kaum_bapa` (`kode`, `lingkungan`, `tanggal`, `tempat`, `asal_lingkungan`, `pemimpin`) VALUES
(5, 'afanf', '1222-12-22', 'afmamf', 'afml', 'alfklamf'),
(6, 'ADAD', '2222-12-12', 'jafjanf', 'ajfanf', 'afnanf'),
(7, 'anafa', '1212-12-21', 'lanfanf', 'anflnq', 'kalnflnaf');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pemuda`
--

CREATE TABLE `tbl_pemuda` (
  `kode` int(11) NOT NULL,
  `lingkungan` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `tempat` varchar(255) NOT NULL,
  `pemimpin` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pesan`
--

CREATE TABLE `tbl_pesan` (
  `kode` int(11) NOT NULL,
  `nama` varchar(40) DEFAULT NULL,
  `hp` varchar(20) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `pesan` varchar(200) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `keterangan` int(11) NOT NULL COMMENT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pesan`
--

INSERT INTO `tbl_pesan` (`kode`, `nama`, `hp`, `email`, `pesan`, `tanggal`, `keterangan`) VALUES
(2, 'maman', '0822321313', 'ada@admin.com', 'kamu ganteng', '2023-03-17', 0),
(3, 'maman', '0822321313', 'ada@admin.com', 'kamu ganteng', '2023-03-17', 0),
(4, 'maman', '0822321313', 'ada@admin.com', 'kamu ganteng', '2023-03-17', 0),
(5, 'maman', '0822321313', 'ada@admin.com', 'kamu ganteng', '2023-03-17', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `kode` int(11) NOT NULL,
  `user_name` varchar(40) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`kode`, `user_name`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_video`
--

CREATE TABLE `tbl_video` (
  `kode` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_video`
--

INSERT INTO `tbl_video` (`kode`, `nama`, `alamat`) VALUES
(3, 'Video Lagu - Lagu Rohani', 'kvF5QsrR1Z0'),
(4, 'Lagu-Lau Rohani 2', 'kvF5QsrR1Z0'),
(5, 'Video Ke COBA', 'cq4SUrLJfN8');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_warta_jemaat`
--

CREATE TABLE `tbl_warta_jemaat` (
  `id` int(11) NOT NULL,
  `isi_warta` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_warta_jemaat`
--

INSERT INTO `tbl_warta_jemaat` (`id`, `isi_warta`) VALUES
(2, '<p><em><strong>Informasi atau embaran[1] adalah pesan (ucapan atau ekspresi) atau kumpulan pesan yang terdiri dari order sekuens dari simbol, atau makna yang dapat ditafsirkan dari pesan atau kumpulan pesan. Informasi dapat direkam atau ditransmisikan. Hal ini dapat dicatat sebagai tanda-tanda, atau sebagai sinyal berdasarkan gelombang. Informasi adalah jenis acara yang mempengaruhi suatu negara dari sistem dinamis. Para konsep memiliki banyak arti lain dalam konteks yang berbeda.[2] Informasi bisa dikatakan sebagai pengetahuan yang didapatkan dari pembelajaran, pengalaman, atau instruksi.[3] Informasi telah digunakan untuk seluruh segi kehidupan manusia secara individual, kelompok maupun organisasi. Pada tingkat individu, informasi digunakan untuk pengetahuan tentang pendidikan, kesehatan, lapangan pekerjaan maupun jenis produk atau jasa.[4] Kegunaan informasi ditentukan oleh tujuan pengguna, ketelitian pengolahan data, ruang dan waktu serta bentuk dan keadaan semantik.[5] jndnadnasnjd</strong></em></p><p><em><strong>amdafamfa</strong></em></p>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `tbl_file`
--
ALTER TABLE `tbl_file`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `tbl_folio`
--
ALTER TABLE `tbl_folio`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `tbl_ibadah_perempuan`
--
ALTER TABLE `tbl_ibadah_perempuan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_ibadah_rt`
--
ALTER TABLE `tbl_ibadah_rt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_kaum_bapa`
--
ALTER TABLE `tbl_kaum_bapa`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `tbl_pemuda`
--
ALTER TABLE `tbl_pemuda`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `tbl_pesan`
--
ALTER TABLE `tbl_pesan`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `tbl_video`
--
ALTER TABLE `tbl_video`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `tbl_warta_jemaat`
--
ALTER TABLE `tbl_warta_jemaat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `tbl_file`
--
ALTER TABLE `tbl_file`
  MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `tbl_folio`
--
ALTER TABLE `tbl_folio`
  MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `tbl_ibadah_perempuan`
--
ALTER TABLE `tbl_ibadah_perempuan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_ibadah_rt`
--
ALTER TABLE `tbl_ibadah_rt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_kaum_bapa`
--
ALTER TABLE `tbl_kaum_bapa`
  MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_pemuda`
--
ALTER TABLE `tbl_pemuda`
  MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_pesan`
--
ALTER TABLE `tbl_pesan`
  MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_video`
--
ALTER TABLE `tbl_video`
  MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_warta_jemaat`
--
ALTER TABLE `tbl_warta_jemaat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
