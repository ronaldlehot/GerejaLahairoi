-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2023 at 06:19 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.5.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
(2, 'Renungan', 'Satu Jam Saja', '<p>Bacaan : Matius 26:36-46</p>\r\n\r\n<p><strong>Satu Jam Saja</strong></p>\r\n\r\n<p>Ketika anak pertama kami meninggal, kami begitu terkesan dengan seorang sahabat yang datang menemani kami pada saat kejadian. Ketika kami memberikan kabar duka, ia segera hadir, dengan rela dan tulus ia memberikan waktunya untuk ada bersama kami di tengah-tengah kesedihan dan pergumulan kami yang berat.</p>\r\n\r\n<p>Menjelang akhir pelayanan-Nya di dunia untuk menyelesaikan karya penebusan-Nya, Yesus mengalami pergumulan yang berat. Dia harus menanggung banyak penderitaan, dari pihak tua-tua, imam-imam kepala dan ahli-ahli Taurat, lalu dibunuh dan dibangkitkan pada hari ketiga (Mat. 16:21).</p>\r\n\r\n<p>Dalam kesedihan-Nya yang sangat, Dia ingin berdoa kepada Bapa-Nya di taman Gestemani. Dia mengajak murid-murid-Nya yang terdekat: Petrus, Yohanes, dan Yakobus bersama-Nya. Dia ingin mereka menemani dan berjaga-jaga satu jam saja. Tetapi apa yang terjadi dengan mereka ketika Yesus berdoa? Mereka semua tertidur, bahkan sampai tiga kali, setiap kali Yesus sedang berdoa. Pergumulan berat Yesus untuk taat dalam menghadapi kematian di atas kayu salib ternyata tidak mudah mereka pahami sehingga mereka tidak sanggup sejenak berjaga-jaga bersama-Nya.</p>\r\n\r\n<p>Ada orang-orang di sekitar kita yang membutuhkan dukungan di masa-masa kritis karena situasi dan masalah yang berat dalam studi, keluarga, kesehatan, pekerjaan, dan relasi dengan orang lain. Mereka sangat kesepian dan membutuhkan teman yang dapat sekadar mendengar dan mengerti beratnya pergumulan yang mereka hadapi. Maukah kita hadir, sebagai wujud kasih dan dukungan, dan berdoa bagi mereka? --ANT/www.renunganharian.net</p>\r\n\r\n<p>* * *<br />\r\nSATU JAM SAJA ADALAH LAYAK DIPERJUANGKAN UNTUK KITA HADIR<br />\r\nBAGI SESAMA YANG SEDANG KESEPIAN DI DALAM PERGUMULAN YANG BERAT.</p>\r\n', '2023-04-03', 'Admin', 'Aktif', '0f9cbf0edd464de9fd09ac1bb9c5b945.jpg'),
(3, 'Khotbah', 'Tidak Menyayangkan', '<p>Bacaan :&nbsp;Roma 8:31-39</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Tidak Menyayangkan</strong></p>\r\n\r\n<p>Umumnya, kita memiliki benda kesayangan. Dijaga dan dirawat baik-baik. Disayangi. Saking sayangnya, kita hanya akan menggunakannya dalam momen-momen istimewa. Tidak digunakan setiap saat, supaya awet lebih lama.</p>\r\n\r\n<p>Kita juga memiliki orang-orang yang sangat kita sayangi: orang tua, anak-anak, saudara kandung, pasangan, sahabat baik, dan lain-lain. Kita mengupayakan yang terbaik bagi mereka. Kita rela berkorban demi mereka. Kita mempertimbangkan perasaan dan kenyamanan mereka ketika kita hendak melakukan sesuatu. Kita tidak ingin mereka terluka, tersakiti atau hidup menderita.</p>\r\n\r\n<p>Namun sikap berbeda ditunjukkan oleh Allah sendiri. Walau Dia sangat menyayangi Anak-Nya yang tunggal, namun Dia tidak menyayangkan-Nya. Dia merelakan Sang Anak meninggalkan takhta dan kemuliaan-Nya, lalu menjadi manusia yang lemah dan terbatas. Menderita hingga mengalami kematian yang hina. Namun, Dia melakukan itu bukan tanpa tujuan, melainkan demi menyelamatkan manusia berdosa yang dikasihi-Nya. Itu juga sekaligus jaminan, bahwa Allah juga berkenan mengaruniakan segala kebaikan-Nya bagi kita, baik di dunia ini maupun di dunia yang akan datang. Yang terbaik telah Dia berikan, maka tidak ada alasan bagi kita untuk meragukan kasih-Nya. Bersama Kristus, segala berkat lainnya telah, sedang dan masih akan kita terima. Kiranya kita tidak menyia-nyiakan atau menganggap remeh pemberian-Nya yang berharga ini. Melainkan dengan penuh syukur menjalani hidup yang mencerminkan bahwa kita adalah anak-anak kesayangan Allah, yang telah ditebus dengan darah Kristus yang mahal. --HT/www.renunganharian.net</p>\r\n\r\n<p>* * *<br />\r\nALLAH TIDAK MENYAYANGKAN ANAK-NYA DEMI MENYELAMATKAN KITA.<br />\r\nKASIH-NYA YANG BESAR MENJADIKAN KITA MULIA DAN BERHARGA.</p>\r\n\r\n<p>* * *</p>\r\n', '2023-04-02', 'Admin 2', 'Terbaru', 'screen-2.jpg'),
(4, 'Renungan', 'Cross', '<p>Bacaan : Yohanes 14:1-14</p>\r\n\r\n<p><strong>Cross</strong></p>\r\n\r\n<p>Salah satu patokan kota London ialah Charing Cross. Letaknya dekat pusat geografis kota itu dan dipakai sebagai alat navigasi oleh orang-orang yang bingung akan jalan-jalan di sana. Pernah polisi menemukan seorang anak perempuan kecil tersesat. Dengan menangis ia mengatakan tidak tahu jalan pulang. Alamat rumah tidak tahu, nomor telepon juga tidak hafal. Tetapi ketika polisi menanyakan apa yang diketahui anak itu, tiba-tiba mukanya berseri-seri. &quot;Saya tahu Cross (Salib) itu, &quot; katanya, &quot;bawalah saya ke Cross, dan dari sana saya tahu jalan pulang ke rumah.&quot;</p>\r\n\r\n<p>Sadarkah situasi kita tidak berbeda? Kita sedang tersesat di hamparan kehidupan dunia yang amat luas. Rumah Bapa begitu kita rindukan, tetapi kita tidak tahu jalan menuju ke sana. Sedih hati kita mengetahui ada banyak jalan tampak lurus, padahal berujung maut (Ams. 14:12). Kasih karunia Allah mengubah kesedihan hati menjadi sukacita. Wajah berseri saat mengingat apa yang kita ketahui. Ada Cross, (Salib) Yesus sebagai alat navigasi. Bawalah diri kita ke Cross, dan dari sana kita tahu jalan pulang. Dari Cross, kita tidak lagi bingung bagaimana berjalan menuju kekekalan.</p>\r\n\r\n<p>Yesus adalah jalan, kebenaran dan kehidupan. Tidak seorang pun yang datang kepada Bapa kalau tidak melalui Yesus (ay. 6). Alat navigasi Yesus berikan bagi kita melalui Cross, pengorbanan-Nya di kayu salib. Bawalah diri kita sekarang ke Cross. Terimalah Yesus sebagai Tuhan dan Juru Selamat. Bawalah juga orang-orang di sekeliling kita ke Cross. Perkenalkan Yesus pada mereka sehingga mereka pun dapat sampai ke kekekalan karena menerima Yesus sebagai Tuhan dan Juru Selamat. --LIN/www.renunganharian.net</p>\r\n\r\n<p>* * *<br />\r\nBERJALAN DENGAN MEMANDANG KEPADA SALIB YESUS,<br />\r\nKITA DAPAT SELAMAT TIBA DI KEKEKALAN.</p>\r\n\r\n<p>* * *</p>\r\n', '2023-04-01', 'Admin', 'Aktif', 'OIP (1).jpg'),
(5, 'Renungan', 'Atas Nama Keadilan', '<p>Bacaan : Keluaran 2:11-15</p>\r\n\r\n<p><strong>Atas Nama Keadilan</strong></p>\r\n\r\n<p>Seorang pemuda melihat adiknya pulang dengan kondisi babak belur. &quot;Aku dikeroyok!&quot; kata adiknya. Pemuda itu pun segera mengejar anak-anak yang memukuli adiknya, kemudian menghajar mereka habis-habisan. &quot;Ini demi keadilan!&quot; katanya.</p>\r\n\r\n<p>Dalam kehidupan sehari-hari, kita pun kerap bersikap seperti pemuda di atas. Mengatasnamakan keadilan, kita bersikap reaktif terhadap segala sesuatu yang tidak kita sukai menggunakan cara dan pemikiran kita sendiri. Musa pun pernah bertindak demikian. Melihat orang Mesir memukul orang Ibrani, yang adalah kawan sebangsanya, atas nama keadilan, Musa langsung membunuhnya. Faktanya, formula keadilan versi manusia itu terbatas. Keesokan harinya, melihat dua orang Ibrani berkelahi, Musa tidak tahu siapa yang harus dibelanya. Tidak dapat Musa, atas nama keadilan, membunuh orang yang memukul temannya, karena ia juga adalah orang Ibrani. Beruntung, dalam usahanya menegakkan keadilan, Musa dengan rendah hati memberi dirinya dididik oleh Allah. Alih-alih bersikap reaktif, Musa akhirnya menjadi seorang yang berhati lembut, melebihi setiap manusia di muka bumi ini (Bil. 12:3).</p>\r\n\r\n<p>Alih-alih menuntut balas dengan mengatasnamakan keadilan, kita diminta menyerahkan perkara kepada Allah (Rm. 12:19). Alih-alih mendendam, kita diminta untuk mengampuni sesama (Mrk. 11:25). Alih-alih membenci, kita diminta untuk mengasihi dan mendoakan orang-orang yang memusuhi kita (Mat. 5:44). Tidak adil? Tampaknya benar. Namun, adilkah kita yang adalah manusia berdosa dan layak untuk dihukum, menerima keselamatan dari Allah dengan cuma-cuma? Apabila kita hendak bertindak atas nama keadilan, maka bertindaklah seturut kata firman Tuhan yang adalah Hakim Yang Adil! --LIN/www.renunganharian.net</p>\r\n\r\n<p>* * *<br />\r\nFIRMAN TUHAN ADALAH PEDOMAN YANG TEPAT BAGI SETIAP ORANG<br />\r\nYANG MAU BERTINDAK ATAS NAMA KEADILAN.</p>\r\n\r\n<p>* * *</p>\r\n', '2023-03-31', 'Admin', 'Aktif', 'R (1).jpg');

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
(1, 'Senin', 'Stunting', '<p>Kegiatan Ini bertujuan Untuk mengajak masyarakat lebiih baik</p>\r\n', '2023-04-03', 'Admin', '', '');

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
(51, 'Peresmian Gereja Lahairoi', '-', 'Peresmian Gereja.jpg'),
(53, 'Gereja Lama', '-', 'gereja lama.jpg'),
(58, 'Foto Bersama', '-', 'oip.jpg'),
(60, 'Foto Bersama', '-', 'r.jpg'),
(61, 'Peresmin Gereja Lahairoi', '-', 'img_8981.jpg'),
(62, '1', '-', 'img_8583.jpg'),
(64, '2', '-', 'download.jpg'),
(66, 'sasasa', '-', 'kredit-merdeka.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ibadah_perempuan`
--

CREATE TABLE `tbl_ibadah_perempuan` (
  `kode` int(11) NOT NULL,
  `lingkungan` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `tempat` varchar(255) NOT NULL,
  `pemimpin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_ibadah_perempuan`
--

INSERT INTO `tbl_ibadah_perempuan` (`kode`, `lingkungan`, `tanggal`, `tempat`, `pemimpin`) VALUES
(1, 'Getsemani', '2023-04-09', 'Ibu Since Boki', 'Ibu Elisabet Oktavianus'),
(2, 'Golgota 1-4', '2023-04-09', 'Ibu Fin For A', 'Ibu Sundriana Meda'),
(3, 'Golgota 5-8', '2023-04-09', 'Ibu Yandri Snae', 'Ibu Ibu A. Betty'),
(4, 'Tiberias', '2023-04-09', 'Ibu Sarlota Djami-Rohi', 'Ibu Antonia Dima-Edo Pita'),
(5, 'Galilea', '2023-04-09', 'Ibu Ruth Mooy-Nggebu', 'Ibu Elisabet Hurint-Ndun');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ibadah_rt`
--

CREATE TABLE `tbl_ibadah_rt` (
  `kode` int(11) NOT NULL,
  `lingkungan` varchar(255) NOT NULL,
  `wilayah` varchar(255) NOT NULL,
  `rumah_keluarga` varchar(255) NOT NULL,
  `pemimpin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_ibadah_rt`
--

INSERT INTO `tbl_ibadah_rt` (`kode`, `lingkungan`, `wilayah`, `rumah_keluarga`, `pemimpin`) VALUES
(1, 'Getsemani', '1', 'Bpk. Yosep Kiuk', 'Dkn. Yohana Kamuri'),
(2, '', '2', 'Bpk. Absalom Sine', 'Pnt. Elisabet Oktavianus'),
(3, '', '3', 'Bpk. Andykson Nggeon', 'Dkn. Milka Kabnani'),
(4, '', '4', 'Bpk. Ismael Safu', 'Dkn. Wempy Nggeon'),
(5, '', '5', 'Bpk. Bren Angi', 'Pnt. Hanna Borithnaban'),
(6, '', '6', 'Bpk. Guntur Tafui', 'Dkn. Heriyati Ndolu'),
(7, 'Golgota', '1', 'Bpk. Marthen Adu', 'Pnt. Kristin Ratu Radja'),
(8, '', '2', 'Ibu Marce Nge', 'Pnt. Sundriana Meda'),
(9, '', '3', 'Bpk. Jemi Messakh', 'Pnt. Rizal Ndolu'),
(10, '', '4', 'Bpk. Gustaf Pramau', 'Pnt. Amedniada Noni'),
(11, '', '5', 'Bpk. Frit Biaf', 'Dkn. Sely Taklal'),
(12, '', '6', 'Ibu Regina Naitboho', 'Pnt. Juli Setiyanto'),
(13, '', '7', 'Bpk. Yulius Peni', 'Pnt. Yohana Padahana'),
(14, '', '8', 'Bpk. Yunus Taopan', 'Pnt. Edwin Sarimin'),
(15, 'Tiberias', '1', 'Bpk. Alexander Ndun', 'Pnt. Martha Nenometa'),
(16, 'Tiberias', '2', 'Bpk. Agus Binsai', 'Pnt. Kristian Mbado'),
(17, 'Tiberias', '3', 'Bpk. Yusuf  Tungga ', 'Dkn. Yohana Banfatin'),
(18, 'Tiberias', '4', 'Bpk. Maksi Sodak', 'Pnt. Antonia Dima Edopita'),
(19, 'Tiberias', '5', 'Bpk.  Rival Ndun', 'Pnt. Jane Lassi'),
(20, 'Tiberias', '6', 'Bpk. Rosemi Djami', 'Dkn. Meri Henuk'),
(21, 'Galilea', '1', 'Bpk. Isak Ledo', 'Dkn. Elsi Nomleni'),
(22, 'Galilea', '2', 'Bpk. Jhon Nuban', 'Dkn. Elisabet Hurint- Ndun'),
(23, 'Galilea', '3', 'Bpk. Daud Obed Bekak', 'Pnt. Soleman Panie'),
(24, 'Galilea', '4', 'Bpk. Yunus Foeh', 'Dkn. Ronald Bulan'),
(25, 'Galilea', '5', 'Bpk. Revin Adu', 'Dkn. Rut Mooy-Nggebu'),
(26, 'Galilea', '6', 'Bpk. Ayub Mooy', 'Pnt. Doris Ndun'),
(27, 'Kapernaum', '1', 'Bpk. Arianto Ndun', ' Pnt. Mathilda Blegur'),
(28, 'Kapernaum', '2', 'Bpk. Nudub Olla', 'Pnt. Nelson Ndolu'),
(29, 'Kapernaum', '3', 'Ibu Martha Efendy', 'Pnt. Rini Mella'),
(30, 'Kapernaum', '4', 'Ibu Antoneta Rassa', 'Dkn. Paulina Dethan'),
(31, 'Kapernaum', '5', 'Bpk. Paulus Lusi', 'Pnt. Sarlota Djami'),
(32, 'Kapernaum', '6', 'Bpk. Oktovianus Klau', 'Pnt. Lexi Nggeon');

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
(1, 'Getsemani', '2023-04-15', 'Bpk. Dedy Kotte', 'Golgota', 'Bpk. Yulius Adu'),
(2, 'Golgota', '2023-04-15', 'Bpk. Deky Wabang', 'Tiberias', 'Ibu Pdt. Yorita Kim'),
(3, 'Tiberias', '2023-04-15', 'Bpk. Dance Tungga', 'Getsemani', 'Bpk. Dimazz'),
(4, 'Galilea', '2023-04-15', 'Bpk. Dimazz', 'Tiberias', 'Bpk. Ibrahim Dethan');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pegawai`
--

CREATE TABLE `tbl_pegawai` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

--
-- Dumping data for table `tbl_pemuda`
--

INSERT INTO `tbl_pemuda` (`kode`, `lingkungan`, `tanggal`, `tempat`, `pemimpin`, `keterangan`) VALUES
(1, 'Getsemai ', '2023-04-15', 'Sdr. Yudi Leome', 'Sdr. Rafly Radja/Vany Henukh', 'Pemberita Firman/Liturgos'),
(2, 'Golgota', '2023-04-15', '-', '-', 'Pemberita Firman/Liturgos'),
(3, 'Tiberias', '2023-04-15', '-', '-', 'Pemberita Firman/Liturgos'),
(4, 'Galilea', '2023-04-15', 'Sdri. Asri Oematan', 'Sdri. Erna Henuk/Sdri. Sanci Manu', 'Pemberita Firman/Liturgos'),
(5, 'Kapernaum', '2023-04-15', '-', '-', 'Pemberita Firman/Liturgos');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pendeta`
--

CREATE TABLE `tbl_pendeta` (
  `kode` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `periode` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
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
(15, 'Arny Hardin', '081221121', 'arnyhardin@gmail.com', 'Hallo\r\n', '2023-04-03', 1),
(16, 'riana', '0811213121', 'rianange@gmail.com', 'Tes\r\n', '2023-04-03', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sejarah`
--

CREATE TABLE `tbl_sejarah` (
  `id` int(11) NOT NULL,
  `isi_sejarah` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sejarah`
--

INSERT INTO `tbl_sejarah` (`id`, `isi_sejarah`) VALUES
(1, '<p>&nbsp;</p><p><strong>PENDAHULUAN :</strong></p><p>A.&nbsp;&nbsp;&nbsp;Pembangnan Gedung Kebaktian Jemaat Lahairoi Tuaksabu Lasiana Barat.</p><p>Laporan singkat berdirinya Jemaat Lahairoi Tuaksabu.</p><p>Jemaat Lahairoi Tuaksabu pada mulanya merupakan sala satu rayon pelayanan dari jemaat Bethel Oesapa Tengah, yang luas pelayanannya meliputi&nbsp; kampung/rayon :</p><p>1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rayon Oesapa Kecil.</p><p>2.&nbsp;&nbsp;&nbsp;&nbsp;Rayon Korbafo.</p><p>3.&nbsp;&nbsp;&nbsp;&nbsp;Rayon Oesapa Besa.</p><p>4.&nbsp;&nbsp;&nbsp;&nbsp;Rayon Tua Bai Hitu.</p><p>5.&nbsp;&nbsp;&nbsp;&nbsp;Rayon Tua Bata.</p><p>6.&nbsp;&nbsp;&nbsp;&nbsp;Rayon Besak Hur.</p><p>7.&nbsp;&nbsp;&nbsp;&nbsp;Rayon Nunsui.</p><p>8.&nbsp;&nbsp;&nbsp;&nbsp;Rayon Tua Hur.</p><p>9.&nbsp;&nbsp;&nbsp;&nbsp;Rayon Tuaksabu.</p><p>Pelayanan rumah tangga dari gereja Bethel Oesapa Tengah pada 9 rayon awalnya berjalan dengan baik, namun karena luasnya wilayah pelayanan dan makin berkembangnya jumblah anggota jemaat pada setiap rayon, mengakibatkan pelayanan rumah tangga tidak dapat berjalan sebagaimana mestinya. Hal ini sangat terasa bagi jemaat rayon Tuaksabu terutama dalam kurun waktu tahun 1960 &ndash; 1963.</p><p>Apalagi letak rayon Tuaksabu agak terpencil dari gereja induk yaitu jaraknya kurang lebih 2,5 Km.Dengan berkembangnya jumblah anggota jemaat Kristen Protestan dalam rayon pelayanan jemaat Tuaksabu yang makin meningkat dari tahun ketahun, menuntut pula kebutuhan pelayanan yang intensif dari gereja induk.Kebutuhan ini nampaknya tidak dapat dipenuhi oleh gereja Bethel Oesapa Tengah sebagai gereja induk.</p><p>Untuk mengatasi keadaan yang demikian maka Tokoh-tokoh jemaat dan pemuka jemaat rayon Tuaksabu berinisiatif&nbsp; mengembangkan rayon Tuaksabu menjadi satu mata jemaat yang berdiri sendiri, sehingga dengan demikian diharapkan dapat menampung serta meningkatkan intensitas pelayanan dan pembinaan jemaat dalam lingkungannya.</p><p>Inisiatif ini kemudian dibahas dalam berbagai pertemuan antara tokoh jemaat dan pemuka masyarakat. Dari beberapa pertemuan kemudian diambil keputusan bersama bahwa jemaat rayon Tuaksabu harus memisahkan diridari jemaat induk, Jemaat Bethel Oesapa Tengah sebagai jemaat yang berdiri sendiri.</p><p>Permohonan ini kemudian disampaikan dengan surat bernomor : 1/TS/1963 tertanggal, 19 Nopember 1963.</p><p>&nbsp;</p><p><strong>Dasar pertimbangan yang dikemukakan untu menjadi jemaat yang berdiri sendiri antara lain sbb :</strong></p><p>1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dengan adanya 1 Gedung Gereja dalam rayon Tuaksabu memungkikan jemaat terutama yang lanjut usia dapat turut berbakti, karena selama ini jarak yang cukup jauh antar rayon Tuaksabu dengan gereja induk merupakan salah satu faktor penghambat dalam keikut sertaan anggota jemaat dalam berbakti.</p><p>2.&nbsp;&nbsp;&nbsp;&nbsp;Dengan menjadi jemaat yang berdiri sendiri diharapkan intensifitas pelayanan jemaat makin berkembang dan menigkat yang dengan demikian memenuhi tuntutan kebutuhan rohani dalam jemaatnya.Jumblah anggota jemaat rayon Tuaksabu memungkinkan untuk menjadi jemaat yang berdiri sendiri.</p><p>Pertimbangan-pertimbangan inilah yang disampaikan kepada majelis jemaat Bethel Oesapa tengah. Tindak lanjut permohonan tersebut jemaat rayon Tuaksabu mulai membangun gedung kebaktian yang bersifat darurat dengan ukuran 6 X 10 m, Gedung tersebut dibangun pada tgl. 19 Nopember 1963 dan selesai pada tgl. 5 Desember 1963.</p><p>Jemaat Lahairoi Tuaksabu pada mulanya merupakan salah satu rayon pelayanan dari jemaat Betel Oesapa, yang luas wilayah pelayanannya meliputi kampung/rayon &ndash; rayon Oesapa Kecil, Korbafo, Tua Bay Hitu, Tua Bata, Besa Hur, Nunsui, Tua Hur, dan Tuaksabu. Mengingat pada tahun 1950 s/d 1960-an hanya ada dua ( 2 ) gereja sehingga pembagian rayon &ndash; rayon pada waktu itu bukan merupakan KK, tetapi merupakan kampung &ndash; kampung oleh sebab itu pelayanan rumah tangga dari gereja Betel Oesapa pada walnya berjalan dengan baik namun karena luasnya wilayah pelayanan dan makin berkembangnya jumlah anggota jemaat pada setiap rayon, mengakibatkan pelayanan rumah tangga tidak dapat berjalan sebagaimana mestinya. Hal ini sangat terasa bagi jemaat rayon Tuaksabu terutama dalam kurun waktu tahun 1960 s/d 1963 apalagi letak rayon Tuaksabu agak terpencil dari gereja induk &plusmn; 2, 5 Km.</p><p>Dengan berkembangnya jumlah anggota jemaat Kristen Protestan dalam rayon pelayanan Tuaksabu yang makin meningkat dari tahun ke tahun menuntut pula kebutuhan pelayanan yang insentif dari gereja induk. Kebutuhan ini nampaknya tidak dapat dipenuhi oleh gereja Betel Oesapa sebagai gereja induk. Untuk mengatasi keadaan yang demikian maka, tokoh &ndash; tokoh jemaat dan pemuka &ndash; pemuka masyarakat rayon Tuaksabu berinisiatif mengembangkan rayon Tuaksabu menjadi satu mata jemaat yang berdiri sendiri sehingga dengan demikian diharapkan dapat menampung serta meningkatkan intensitas pelayanan dan pembinaan jemaat dalam lingkungannya.</p><p>Inisiatif ini kemudian dibahas dalam berbagai pertemuan antara tokoh &ndash; tokoh jemaat dan pemuka &ndash; pemuka masyarakat. Dari beberapa pertemuan kemudian diambil keputusan bahwa rayon Tuaksabu harus memisahkan diri dari jemaat Betel Oesapa sebagai jemaat yang berdiri sendiri. Surat permohonan ditulis, kemudian disampaikan dengan no : 01/TS/../3 tertanggal 19 November 1963. Dasar pertimbangan yang dikemukakan untuk menjadi jemaat yang berdiri sendiri antara lain :</p><p>1.&nbsp;&nbsp;&nbsp; Dengan adanya satu gedung gereja dalam rayon Tuaksabu memungkinkan jemaat terutama yang lanjut usia dapat turut berbakti karena selama ini jarak tempuh yang cukup jauh merupakan salah satu faktor penghambat dalam keikutsertaan jemaat dalam berbakti.</p><p>Permohonan ini kemudian disampaikan dengan surat bernomor : 1/TS/1963 tertanggal, 19 Nopember 1963.</p><p>&nbsp;</p><p><strong>Dasar pertimbangan yang dikemukakan untu menjadi jemaat yang berdiri sendiri</strong></p><p><strong>antara lain sbb :</strong></p><p>1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dengan adanya 1 Gedung Gereja dalam rayon Tuaksabu memungkikan jemaat terutama yang lanjut usia dapat turut berbakti, karena selama ini jarak yang cukup jauh antar rayon Tuaksabu dengan gereja induk merupakan salah satu faktor penghambat dalam keikut sertaan anggota jemaat dalam berbakti.</p><p>&nbsp;</p><p>2.&nbsp;&nbsp;&nbsp;&nbsp;Dengan menjadi jemaat yang berdiri sendiri diharapkan intensifitas pelayanan jemaat makin berkembang dan menigkat yang dengan demikian memenuhi tuntutan kebutuhan rohani dalam jemaatnya.</p><p>&nbsp;</p><p>Jumblah anggota jemaat rayon Tuaksabu memungkinkan untuk menjadi jemaat yang berdiri sendiri.</p><p>&nbsp;</p><p>Pertimbangan-pertimbangan inilah yang disampaikan kepada majelis jemaat Bethel Oesapa tengah. Tindak lanjut permohonan tersebut jemaat rayon Tuaksabu mulai membangun gedung kebaktian yang bersifat darurat dengan ukuran 6 X 10 m, Gedung tersebut dibangun pada tgl. 19 Nopember 1963 dan selesai pada tgl. 5 Desember 1963.</p><p>&nbsp;</p><p>Jemaat Lahairoi Tuaksabu pada mulanya merupakan salah satu rayon pelayanan dari jemaat Betel Oesapa, yang luas wilayah pelayanannya meliputi kampung/rayon &ndash; rayon Oesapa Kecil, Korbafo, Tua Bay Hitu, Tua Bata, Besa Hur, Nunsui, Tua Hur, dan Tuaksabu. Mengingat pada tahun 1950 s/d 1960-an hanya ada dua ( 2 ) gereja sehingga pembagian rayon &ndash; rayon pada waktu itu bukan merupakan KK, tetapi merupakan kampung &ndash; kampung oleh sebab itu pelayanan rumah tangga dari gereja Betel Oesapa pada walnya berjalan dengan baik namun karena luasnya wilayah pelayanan dan makin berkembangnya jumlah anggota jemaat pada setiap rayon, mengakibatkan pelayanan rumah tangga tidak dapat berjalan sebagaimana mestinya. Hal ini sangat terasa bagi jemaat rayon Tuaksabu terutama dalam kurun waktu tahun 1960 s/d 1963 apalagi letak rayon Tuaksabu agak terpencil dari gereja induk &plusmn; 2, 5 Km.</p><p>Dengan berkembangnya jumlah anggota jemaat Kristen Protestan dalam rayon pelayanan Tuaksabu yang makin meningkat dari tahun ke tahun menuntut pula kebutuhan pelayanan yang insentif dari gereja induk. Kebutuhan ini nampaknya tidak dapat dipenuhi oleh gereja Betel Oesapa sebagai gereja induk. Untuk mengatasi keadaan yang demikian maka, tokoh &ndash; tokoh jemaat dan pemuka &ndash; pemuka masyarakat rayon Tuaksabu berinisiatif mengembangkan rayon Tuaksabu menjadi satu mata jemaat yang berdiri sendiri sehingga dengan demikian diharapkan dapat menampung serta meningkatkan intensitas pelayanan dan pembinaan jemaat dalam lingkungannya.</p><p>Inisiatif ini kemudian dibahas dalam berbagai pertemuan antara tokoh &ndash; tokoh jemaat dan pemuka &ndash; pemuka masyarakat. Dari beberapa pertemuan kemudian diambil keputusan bahwa rayon Tuaksabu harus memisahkan diri dari jemaat Betel Oesapa sebagai jemaat yang berdiri sendiri. Surat permohonan ditulis, kemudian disampaikan dengan no : 01/TS/../3 tertanggal 19 November 1963. Dasar pertimbangan yang dikemukakan untuk menjadi jemaat yang berdiri sendiri antara lain :</p><p>1.&nbsp;&nbsp;&nbsp; Dengan adanya satu gedung gereja dalam rayon Tuaksabu memungkinkan jemaat terutama yang lanjut usia dapat turut berbakti karena selama ini jarak tempuh yang cukup jauh merupakan salah satu faktor penghambat dalam keikutsertaan jemaat dalam berbakti. Permohonan ini kemudian disampaikan dengan surat bernomor : 1/TS/1963 tertanggal, 19 Nopember 1963.</p><p>1.&nbsp;&nbsp;&nbsp; Dengan menjadi jemaat yang berdiri sendiri diharapkan intensitas pelayanan jemaat makin berkembang dan meningkat, dengan demikian memenuhi tuntutan kebutuhan rohani dalam jemaat.</p><p>2.&nbsp;&nbsp;&nbsp; Jumlah anggota jemaat rayon Tuaksabu memungkinkan untuk menjadi jemaat yang berdiri sendiri.</p><p>&nbsp;</p><p>Pertimbangan &ndash; pertimbangan ini disampaikan kepada majlis jemaat Betel Oesapa. Tindak lanjut permohonan tersebut, jemaat rayon Tuaksabu mulai membangun gedung kebaktian yang bersifat darurat dengan ukuran 6 X 10, gedung tersebut dibangun pada 19 November 1963 dan selesai pada tanggal 5 Desember 1963. Pada tanggal 15 Januari 1964 surat dari jemaat induk Oesapa merupakan balasan surat No : 01/TS/63 bahwa permohonan yang dikirim oleh jemaat rayon Tuaksabu dikabulkan. Berdasrkan surat persetujuan tersebut diadakan musyawarah untuk menentukan waktu pengresmian dan pentabisannya. Dalam pertemuan ditetapkan tanggal 26 Januari 1964 sebagai waktu pengresmian. Pengresmian gereja Lahairoi Tuaksabu Lasiana Barat oleh gubernur Nusa Tenggara Timur yang diwakili oleh Bapak Drs. S. T. E. Lapodooh.&nbsp; Kebaktian penabisan oleh ketua Klasis Bapak Y. L. Radja Haba dan Pdt. P. F. de Haan, ketua Majelis wilayah Tarus Barat serta undangan lainnya.</p><p>Dengan pengresmian dan penabisan tersebut, resmilah jemaat rayon Tuaksabu Lasiana Barat menjadi jemaat yang berdiri sendiri. Jemaat tersebut kemudian diberi nama : LAHAI &ndash; ROI. Artinya : telah kulihat Dia ; dan Ia melihat aku.</p><p>&nbsp;</p><p>Tokoh &ndash; tokoh pendiri jemaat Lahairoi Tuaksabu Lasiana Barat pada tahun 1964 adalah :</p><p>1. Bapak Johan Mooy&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tokoh masyarakat</p><p>2. Bapak Jonas Petrus Foeh&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tokoh masyarakat</p><p>3. Bapak Matheos Ndun &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tokoh Jemaat</p><p>Gereja Lahai &ndash; Roi Tuaksabu berdiri di atas tanah seluas &plusmn; 2. 140 m&sup2; yang merupakan sumbangan dari Bapak Johan Mooy.</p><p>Gedung kebaktian Lahai-Roi Tuak Sabu Lasiana Barat diresmikan pemakaiannya oleh Bupati Kupang Paul lawahiri, pada hari Minggu tgl. 01 November 1992.</p><p>&nbsp;</p><p>Perkembangan Jemaat Lahairoi Tuaksabu Lasiana barat dari Tahun 1964 s/d tahun 1992</p><p>Perkembangan jemaat Lahairoi Tuaksabu dari tahun ke tahun berkembang pesat, di bidang; organisasi gereja, keadaan jemaat, pelayanan jemaat, dan pembinaan warga gereja.</p><p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Perkembangan &nbsp;pembangunan</p><p>Pada tahun 1964 dibangun gereja bersifat darurat dengan ukuran 6 X 10 meter beratap daun tuak</p><p>Pada tahun 1969 direhab dn dikembangkan menjadi semi permanen dengan ukuran&nbsp; 8 X 21 meter.</p><p>Pada tahun 1973 direhab lagi menjadi permanen dan bertap seng dengan ukuran yang sama.</p><p>Pada tahun 1986 dibangun gedung yang baru secara permanen dengan luas 384 m&sup3;.</p><p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Perkembangan organisasi gereja</p><p>Pada tahun 1964 belum terbentuk organisasi gereja</p><p>Pada tahun 1973 dibentuk organisasi pemuda dan wanita GMIT</p><p>Pada tahun 1990 dibentuk persekutuan kaum bapak.</p><p>&nbsp;</p><p><strong>Keadaan Jemaat</strong></p><p>Perkembangan anggota jemaat Lahairoi</p><p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tahun 1964 dua ( 2 ) rayon pelayanan / kelompok pelayanan</p><p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tahun 1968 tiga ( 3 ) rayon / kelompok pelayanan</p><p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tahun 1973 empat ( 4 ) rayon / kelompok pelayanan</p><p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tahun 1983 enam ( 6 ) rayon / kelompok pelayanan</p><p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tahun 1992 tujuh ( 7 ) rayon / kelompok pelayanan</p><p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tahun 2002, Tiga Belas (13) rayon</p><p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tahun 2008, Tiga Belas (13) rayon, 29 gugus pelayanan</p><p><strong>Pembinaan warga jemaat </strong></p><p>Pembinaan warga jemaat Lahairoi Tuaksabu Lasiana Barat, berlangsung secara kontinyu setiap tahun seperti pembinaan dan pelayanan sakramen</p><p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pembinaan katekisasi</p><p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pelayanan sakramen Baptisan dan Perjamuan kudus</p><p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pelayanan pernikahan</p>');

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
-- Table structure for table `tbl_visi_misi`
--

CREATE TABLE `tbl_visi_misi` (
  `id` int(11) NOT NULL,
  `isi_visi_misi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_visi_misi`
--

INSERT INTO `tbl_visi_misi` (`id`, `isi_visi_misi`) VALUES
(2, '<p><strong>Visi</strong></p><p>Terwujudnya GMIT sebagai gereja yang misioner, yaitu GMIT sebagai :</p><p>1. Gereja yang memahami diri sebagai keluarga Allah yang terikat oleh Kasih Kristus dan secara bersama-sama ikut serta dalam karya penyelamatan Allah bagi dunia.<br />2. Gereja yang memahami diri sebagai umat keluaran yang diutus ke dalam dunia untuk membawa Syalom Allah di mana semua anggota GMIT berfungsi sebagai surat Kristus yang hidup untuk membawa kabar baik bagi dunia sesuai dengan teladan Kristus, Sang Diakonos Agung.<br />3. Gereja yang jemaat-jemaatnya saling membina, membangun dan bertumbuh menuju kedewasaan penuh sesuai dengan kepenuhan Kristus.</p><p><strong>Misi</strong></p><p>Untuk mewujudkan visinya maka GMIT terpanggil untuk melaksanakan misi pelayanan Koinonia, Marturia, Diakonia, Liturgia dan Oikonomia yang selanjutnya disebut sebagai Panca Pelayanan GMIT.</p><p>1. Menghadirkan GMIT sebagai sebuah persekutuan Gereja Kristen yang Esa, Kudus dan Am serta Rasuli yang secara inklusif menyampaikan Syalom Allah di dunia dalam kebersamaan dan kesetaraan dalam pelayanan dan secara aktif mengembangkan persekutuan hidup yang produktif sebagai warga Indonesia serta memajukan kebaikan dunia dan kemanusiaan.<br />2. Mengembangkan teologia dan spiritualitas yang menyatakan jati diri GMIT sebagai utusan Kristus yang oleh karenanya memungkinkan keterlibatan segenap anggota jemaat GMIT dalam berbagai bidang kehidupan di dunia sebagai pengejawantahan kesaksian hidup.<br />3. Menyatukan, mengarahkan dan mendayagunakan berbagai karunia dan talenta anggota GMIT dalam pelayanan bagi jemaat dan masyarakat untuk menjawab berbagai kebutuhan nyata warga jemaat, masyarakat dan kemanusiaan secara holistik, komprehensif dan berkelanjutan.<br />4. Menghadirkan GMIT sebagai komunitas ibadah yang visioner dan misioner, sesuai jati diri GMIT yang khas, yang diwujudnyatakan dalam seluruh aspek kehidupan berjemaat, bermasyarakat, berbangsa dan kemanusiaan.<br />5. Membangun struktur dan fungsi GMIT yang berdisiplin, kreatif, produktif dan memiliki akuntabilitas yang tinggi sebagai landasan organisasi yang tangguh guna terlibat dalam berbagai aktivitas pelayanan dalam azas presbiterial-sinodal sekaligus memiliki kepedulian ekologi yang tinggi.</p><p>&nbsp;</p>');

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
(2, '<p><strong>Warta Jemaat<br />Minggu, 05 Maret 2023</strong></p><p>1. Pembagian Lingkungan untuk kebaktianMinggu, tanggal 12 Maret 2023 sebagai berikut :&nbsp;<br />- Pukul 06.00 WITA : Lingkungan Golgota 6-8, Tiberias, dan Galilea.<br />- Pukul 08.00 WITA : Lingkungan Galilea 4-7 dan Kapernaum.<br />- Pukul 17.00 WITA : Lingkungan Getsemani dan Golgota 1-5.<br />Sangat diharapkan jemaat tetap mengikuti jadwal yang telah ditentukan.<br />2. Disampaikan kepada jemaat bahwa tanggal 12 Maret 2023 kita sudah memasuki masa raya sengsara keempat.<br />3. Ibadah Gabungan Majelis Jemaat Lingkungan Getsemani akan berlangsung pada tanggal 06 Maret 2023 pukul 18.30 wita dirumah Pnt. Djibrael Djami He dipimpin oleh Pnt. Petronela Mooy.<br />4. Kebaktian Utama Kedua pada tanggal 12 Maret 2023 akan dipimpin oleh Pdt. Yuniken Siokain, S.Th (Pendeta asal Jemaat Betania Ba&#39;a Rote).<br />5. Ucapan terimakasih disampaikan keapda PT. Charoen Pokphan Jaya Farm Haceri Kupang Desa oefafi Kabupaten Kupang atas sumbangan 5000 butir telur yang akan disalurkan kepada Jemaat Lahairoi Tuak Sabu Lasiana untuk anak-anak.<br />&nbsp;</p>');

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
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `tbl_ibadah_rt`
--
ALTER TABLE `tbl_ibadah_rt`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `tbl_kaum_bapa`
--
ALTER TABLE `tbl_kaum_bapa`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `tbl_pegawai`
--
ALTER TABLE `tbl_pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pemuda`
--
ALTER TABLE `tbl_pemuda`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `tbl_pendeta`
--
ALTER TABLE `tbl_pendeta`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `tbl_pesan`
--
ALTER TABLE `tbl_pesan`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `tbl_sejarah`
--
ALTER TABLE `tbl_sejarah`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `tbl_visi_misi`
--
ALTER TABLE `tbl_visi_misi`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_file`
--
ALTER TABLE `tbl_file`
  MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_folio`
--
ALTER TABLE `tbl_folio`
  MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
--
-- AUTO_INCREMENT for table `tbl_ibadah_perempuan`
--
ALTER TABLE `tbl_ibadah_perempuan`
  MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_ibadah_rt`
--
ALTER TABLE `tbl_ibadah_rt`
  MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `tbl_kaum_bapa`
--
ALTER TABLE `tbl_kaum_bapa`
  MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_pegawai`
--
ALTER TABLE `tbl_pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_pemuda`
--
ALTER TABLE `tbl_pemuda`
  MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_pendeta`
--
ALTER TABLE `tbl_pendeta`
  MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_pesan`
--
ALTER TABLE `tbl_pesan`
  MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `tbl_sejarah`
--
ALTER TABLE `tbl_sejarah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
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
-- AUTO_INCREMENT for table `tbl_visi_misi`
--
ALTER TABLE `tbl_visi_misi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_warta_jemaat`
--
ALTER TABLE `tbl_warta_jemaat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
