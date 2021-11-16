-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2021 at 02:46 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alumnipasca`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumni_profil`
--

CREATE TABLE `alumni_profil` (
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(200) DEFAULT NULL,
  `nim` varchar(12) DEFAULT NULL,
  `jk` varchar(20) DEFAULT NULL,
  `judul_skripsi` varchar(200) DEFAULT NULL,
  `program_studi` varchar(200) DEFAULT NULL,
  `ipk` varchar(10) DEFAULT NULL,
  `th_masuk` varchar(200) DEFAULT NULL,
  `th_keluar` varchar(200) DEFAULT NULL,
  `id_agama` int(3) DEFAULT NULL,
  `tanggal_lahir` varchar(100) DEFAULT NULL,
  `tmpt_lahir` varchar(200) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `id_provinsi` int(4) DEFAULT NULL,
  `id_kota` int(4) DEFAULT NULL,
  `no_telp` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `foto` varchar(2000) DEFAULT NULL,
  `lamaStudi1` varchar(20) DEFAULT NULL,
  `lamaStudi2` varchar(20) DEFAULT NULL,
  `no_ijasah` varchar(30) DEFAULT NULL,
  `yudisium` varchar(100) DEFAULT NULL,
  `statusalumni` varchar(30) DEFAULT NULL,
  `posisi` varchar(200) DEFAULT NULL,
  `nama_perusahaan` varchar(200) DEFAULT NULL,
  `gaji` varchar(200) DEFAULT NULL,
  `lama_bekerja` varchar(200) DEFAULT NULL,
  `alamat_bekerja` varchar(200) DEFAULT NULL,
  `rentangJarak` varchar(200) DEFAULT NULL,
  `kesesuaian` varchar(200) DEFAULT NULL,
  `nama_univ` varchar(200) DEFAULT NULL,
  `program_studi2` varchar(200) DEFAULT NULL,
  `semester` varchar(200) DEFAULT NULL,
  `update_status` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alumni_profil`
--

INSERT INTO `alumni_profil` (`id_user`, `nama_lengkap`, `nim`, `jk`, `judul_skripsi`, `program_studi`, `ipk`, `th_masuk`, `th_keluar`, `id_agama`, `tanggal_lahir`, `tmpt_lahir`, `alamat`, `id_provinsi`, `id_kota`, `no_telp`, `email`, `foto`, `lamaStudi1`, `lamaStudi2`, `no_ijasah`, `yudisium`, `statusalumni`, `posisi`, `nama_perusahaan`, `gaji`, `lama_bekerja`, `alamat_bekerja`, `rentangJarak`, `kesesuaian`, `nama_univ`, `program_studi2`, `semester`, `update_status`) VALUES
(2, 'Yuliana', '191052003049', 'Perempuan', 'Pengembangan Private Cloud Storage di Program Studi Teknik Elektro Fakultas Teknik Universitas Islam Makassar', 'Pendidikan Teknologi dan Kejuruan (S2)', '3.95', '2019', '2021', 1, '08/17/1996', 'Kotabaru', 'Perumahan Gerhana Alauddin Blok L No 5', 26, 393, '082199271499', 'yuliaulia.8@gmail.com', '08072021073155F33DF55F-74DE-47E1-8497-29E7577E8D1D.jpeg', '1 Tahun', '7 Bulan', '-', 'Sangat Memuaskan', 'Bekerja', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-06-23 08:40:50'),
(4, 'Dian Hardianti Eka Lestari', '191032001531', 'Perempuan', NULL, 'Pendidikan Teknologi dan Kejuruan (S2)', '3.94', '2019', '2021', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1 Tahun', '8 Bulan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-06-24 09:27:43'),
(5, 'Muh Fadhil Supriadi', '191052003031', 'Laki-Laki', NULL, 'Pendidikan Teknologi dan Kejuruan (S2)', '3.96', '2019', '2021', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '08072021085005IMG_20210503_235309.jpg', '1 Tahun', '9 Bulan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-07-07 22:59:40'),
(6, 'Fitria', '191052003030', 'Perempuan', '-', 'Pendidikan Teknologi dan Kejuruan (S2)', '4.00', '2019', '2021', 1, '10/25/1996', '-', '-', 15, 240, '-', '-', NULL, '1 Tahun', '6 Bulan', '-', 'Cumlaude', 'Belum Bekerja', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-07-07 13:05:29'),
(8, 'Nur Idil Fitri Idris', '191052003001', 'Perempuan', NULL, 'Pendidikan Teknologi dan Kejuruan (S2)', '3.92', '2019', '2021', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1 Tahun', '7 Bulan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-06-30 10:08:07'),
(9, 'Muh Arief Muhsin', '11B01048', 'Laki-Laki', '-', 'Pendidikan Bahasa (S2)', '-', '2011', '2014', 1, '02 Juli 1983', 'Sinjai', '-', 26, 393, '085242200677', '-', '12072021135610IMG20191031214048.jpg', '3 Tahun', '', '-', 'Sangat Memuaskan', 'Bekerja', 'Sekretaris LP3M', 'Unismuh Makassar', 'Rp. 5.000.000 - Rp. 10.000.000', 'Lebih Dari 3 Tahun', 'Jln.Sultan Alauddin', 'Kurang Dari 1 Bulan', 'Sangat Sesuai', NULL, NULL, NULL, '2021-07-12 13:38:23'),
(10, 'Kholik Prasojo', '162052004003', 'Laki-Laki', NULL, 'Pendidikan Teknologi dan Kejuruan (S2)', '3.92', '2017', '2021', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4 Tahun', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-06-30 10:11:09'),
(11, 'Andi Gagah Purnama', '191052003006', 'Laki-Laki', NULL, 'Pendidikan Teknologi dan Kejuruan (S2)', '3.92', '2019', '2021', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1 Tahun', '8 Bulan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-06-30 10:12:22'),
(12, 'Wahyudi', '191052013001', 'Laki-Laki', NULL, 'Pendidikan Teknologi dan Kejuruan (S2)', '3.92', '2019', '2021', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1 Tahun', '8 Bulan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-06-30 10:14:10'),
(13, 'Yoldis Hasrianti I', '191052004004', 'Perempuan', NULL, 'Pendidikan Teknologi dan Kejuruan (S2)', '-', '2019', '2021', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1 Tahun', '11 Bulan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-06-30 12:39:20'),
(14, 'Nurhaeda', '181052701004', 'Perempuan', NULL, 'Matematika (S2)', '3.96', '2018', '2020', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1 Tahun', '11 Bulan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-06-30 12:38:32'),
(15, 'Amaliah Ansar', '181052701005', 'Perempuan', NULL, 'Matematika (S2)', '3.94', '2018', '2020', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2 Tahun', '3 Bulan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-06-30 12:39:04'),
(16, 'Muh Rifandi', '171052701003', 'Laki-Laki', NULL, 'Matematika (S2)', '3.98', '2017', '2020', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2 Tahun', '10 Bulan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-06-30 12:41:16'),
(17, 'Hasti Maryam', '181052707009', 'Perempuan', NULL, 'Matematika (S2)', '3.93', '2018', '2020', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2 Tahun', '4 Bulan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-06-30 20:38:52'),
(18, 'Ibda Sari', '171052701001', 'Perempuan', NULL, 'Matematika (S2)', '3.85', '2017', '2020', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2 Tahun', '11 Bulan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-06-30 22:47:47'),
(19, 'Hartono', '191052005001', 'Laki-Laki', NULL, 'Pendidikan Teknologi dan Kejuruan (S2)', '3.96', '2019', '2021', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1 Tahun', '10 Bulan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-07-01 20:30:34'),
(20, 'Celia Tri Pristya Devitha', '191052001001', 'Perempuan', NULL, 'Pendidikan Teknologi dan Kejuruan (S2)', '3.98', '2019', '2021', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1 Tahun', '10 Bulan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-07-01 20:31:14'),
(21, 'Asnia Jabbar', '191052009006', 'Perempuan', NULL, 'Pendidikan Teknologi dan Kejuruan (S2)', '3.92', '2019', '2021', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1 Tahun', '9 Bulan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-07-01 21:50:29'),
(22, 'Resky Amalia', '191050101033', 'Perempuan', NULL, 'Pendidikan Bahasa (S2)', '3.82', '2019', '2021', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1 Tahun', '9 Bulan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-07-01 21:51:34'),
(23, 'St. Rahmaniar', '191050101009', 'Perempuan', NULL, 'Pendidikan Bahasa (S2)', '3.97', '2019', '2021', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1 Tahun', '8 Bulan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-07-01 21:52:22'),
(24, 'Selfiani', '191050101006', 'Perempuan', NULL, 'Pendidikan Bahasa (S2)', '3.88', '2019', '2021', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1 Tahun', '9 Bulan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-07-01 21:53:25'),
(25, 'Muh Arifai', '162052201008', 'Laki-Laki', NULL, 'Ilmu Administrasi Publik (S3)', '3.79', '2016', '2019', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3 Tahun', '5 Bulan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-07-04 11:43:12'),
(26, 'Abdul Ma’arief Al Imran', '191052003044', 'Laki-Laki', NULL, 'Pendidikan Teknologi dan Kejuruan (S2)', '3,98', '2019', '2021', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1 Tahun', '8 Bulan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-07-12 14:57:39'),
(27, 'Agusriani', '181052701007', 'Perempuan', NULL, 'Matematika (S2)', '3.96', '2018', '2020', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2 Tahun', '3 Bulan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-07-12 21:13:20'),
(28, 'Srie Chaerunnisa', '181052701003', 'Perempuan', NULL, 'Matematika (S2)', '3,94', '2018', '2020', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2 Tahun', '2 Bulan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-07-12 21:21:14'),
(29, 'Azwan Anwar', '181052701001', 'Laki-Laki', 'Pemodelan Matematika SEIRS Terhadap Kecanduan Game Online pada Mahasiswa Jurusan Matametika FMIPA Universitas Negeri Makassar', 'Matematika (S2)', '3.87', '2018', '2020', 1, '05/26/1994', 'Benteng', 'Benteng, Kecamatan Patampanua, Kabupaten Pinrang', 26, 385, '085255920628', 'azwananwar797@gmail.com', NULL, '1 Tahun', '5 Bulan', '44101202011208', 'Cumlaude', 'Bekerja', 'Makassar', 'MTs Miftahul Khair', '< Rp. 1.000.000 ', 'Lebih Dari 3 Tahun', 'Jl. Hartaco indah, makassar', 'Kurang Dari 1 Bulan', 'Sangat Sesuai', NULL, NULL, NULL, '2021-07-13 01:08:34'),
(30, 'Nurwakia', '181052701002', 'Perempuan', 'Perbandingan Antara Metode Bayesian Self Prior Gamma dan Prior Jeffrey Dalam Mengestimasi Parameter Model Survival Berdistribusi Weibull Data Tersensor', 'Matematika (S2)', '3.96', '2018', '2020', 1, '07/20/1995', 'Bulu Tempe', 'Sinri, kel. Bulu Tempe,Kec.Tanete riattang barat', 26, 374, '082349483662', 'Wakianur1@gmail.com', NULL, '2 Tahun', '3 Bulan', '44101202011433', 'Cumlaude', 'Belum Bekerja', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-07-13 09:21:16'),
(31, 'Besse Paikah', '13A09010', 'Perempuan', NULL, 'Pendidikan Bahasa (S2)', '3.76', '2013', '2017', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3 Tahun', '6 Bulan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-07-13 05:52:04'),
(32, 'Riskayani', '181052003013', 'Perempuan', 'Analisis Kinerja Guru Bersertifikat Pendidik pada Sekolah Menengah Kejuruan Negeri di Kabupaten Soppeng', 'Pendidikan Teknologi dan Kejuruan (S2)', '4.00', '2018', '2020', 1, '25-03-1996', 'Mong', 'Mong, Desa Mariorilau Kec. Marioriwawo', 26, 388, '082349843489', 'rhykaariskayani@gmail.com', NULL, '1 Tahun', '3 Bulan', '83101202011428', 'Cumlaude', 'Belum Bekerja', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-07-13 04:01:35'),
(33, 'Putry Haryana Rasyid', '181051404028', 'Perempuan', NULL, 'Administrasi Pendidikan (S2)', '3.74', '2018', '2020', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1 Tahun', '11 Bulan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-07-13 20:39:49');

-- --------------------------------------------------------

--
-- Table structure for table `data_agama`
--

CREATE TABLE `data_agama` (
  `id_agama` int(3) NOT NULL,
  `nama_agama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_agama`
--

INSERT INTO `data_agama` (`id_agama`, `nama_agama`) VALUES
(1, 'Islam'),
(2, 'Kristen'),
(3, 'Katholik'),
(4, 'Budha'),
(5, 'Hindu');

-- --------------------------------------------------------

--
-- Table structure for table `data_artikel`
--

CREATE TABLE `data_artikel` (
  `id_artikel` int(11) NOT NULL,
  `id_kategori` int(10) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `pengirim` varchar(50) NOT NULL,
  `tanggal` datetime NOT NULL,
  `date` date NOT NULL,
  `foto` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_artikel`
--

INSERT INTO `data_artikel` (`id_artikel`, `id_kategori`, `judul`, `isi`, `pengirim`, `tanggal`, `date`, `foto`) VALUES
(11, 1, 'Presiden RI Harap Mahasiswa Indonesia Berdedikasi Memajukan Indonesia', '<p>\r\n\r\n</p><p><b>Profesi-unm.com</b> – Merdeka Belajar Kampus Merdeka digadang menjadikan mahasiswa bak perenang handal yang mampu mengarungi laut bebas, dengan bekal tiga semester berada diluar prodi dan kampus asal mahasiswa.</p><p>“Kita ingin semua mahasiswa kita bisa berenang pada saat mereka keluar kelautan yang terbuka, jangan dikolam renang harus sekali-kali pergi kelaut untuk melatih diri,” jelas Menteri Pendidikan dan Kebudayaan Indonesia, Nadiem Anwar Makarim.</p>\r\n\r\n\r\n\r\n<p>Hal ini disampaikan dalam unggahan video Instagram Pribadi Menteri Pendidikan dan Kebudayaan Indonesia, Nadiem Anwar Makarim.</p><p>Dalam video tersebut, terlihat Presiden Republik Indonesia (RI), Joko Widodo menyampaikan harapan agar Mahasiswa Indonesia menjadi lulusan berdedidikasi kuat untuk menajukan bangsa Indonesia dengan tangan yang berada didepan dada.</p>\r\n\r\n\r\n\r\n<p>“Yang pertama, lulusan kita harus sangat kuat dedikasinya untuk kemajuan bangsa,” katanya saat ditanya mengenai kompetensi lulusan yang seharusnya.</p><p>Presiden RI, Joko Widodo pun menengaskan agar kesiapan mahasiswa lebih kuat dalam menghadapi rintangan yang akan datang.</p><p>“Jangan sekali-kali, bisa dua kali, tiga kali, empat kali, lima kali, biar ngerasain gelombang laut seperti apa,” tambahnya.</p><p>Nantinya, video tersebut akan tayang pada kegiatan Kencan Kilat untuk perguruan tinggi dan perusahaan, Selasa (22/6) mendatang. (*)</p><p><strong>*Reporter: Annisa Asy Syam. A</strong></p>\r\n\r\n<br><p></p>', 'Administrator', '2021-06-22 00:51:49', '2021-06-21', '21062021164736Screenshot_133.png'),
(12, 1, 'UNM Masuk 10 PTN Penerima Peserta KIP Kuliah Tertinggi', '<p>\r\n\r\n</p><p><b></b>\r\n\r\n<b>Profesi-unm.com</b> –\r\n\r\n Pada Seleksi Bersama Masuk Perguruan Tinggi Negeri (SBMPTN) 2021 lalu terdapat 61.067 peserta yang mengikuti program KIP Kuliah dari berbagai provinsi dan diterima di berbagai PTN di seluruh Indonesia, Jum’at (18/6).</p><p>Universitas Negeri Makassar (UNM) termasuk dalam 10 Perguruan Tinggi penerima peserta KIP Kuliah tertinggi di Indonesia.</p><p>\r\n\r\n</p><p>UNM berhasil meraih peringkat enam dengan jumlah penerima KIP Kuliah sebanyak 1.757 peserta. Berdasarkan data dari Instagram @ltmptofficial, UNM berada di bawah Universitas Halu Oleo dengan perbedaan yang sedikit, yakni selisih 30 peserta.</p><p>Disamping itu, peringkat pertama diraih oleh Universitas Negeri Padang dengan 2.011 peserta penerima KIP Kuliah dan peringkat ke sepuluh diduduki oleh Universitas Negeri Medan dengan 1.490 peserta penerima KIP Kuliah.</p>\r\n\r\n\r\n\r\n<p>Berikut ini daftar PTN penerima Peserta KIP Kuliah tertinggi:</p><ol><li>Universitas Negeri Padang dengan 2.011 peserta KIP Kuliah</li><li>Universitas Tadulako dengan 1.958 peserta KIP Kuliah</li><li>Universitas Nusa Cendana dengan 1.900 peserta KIP Kuliah</li><li>Universitas Malikussaleh dengan 1.843 peserta KIP Kuliah</li><li>Universitas Halu Oleo dengan 1.787 peserta KIP Kuliah</li><li>Universitas Negeri Makassar dengan 1.757 peserta KIP Kuliah</li><li>Universitas Negeri Gorontalo dengan 1.552 peserta KIP Kuliah</li><li>Universitas Trunojoyo Madura dengan 1.540 peserta KIP Kuliah</li><li>Universitas Lampung dengan 1.510 peserta KIP Kuliah</li><li>Universitas Negeri Medan dengan 1.490 peserta KIP Kuliah. (*)</li></ol><p><strong>*Reporter: Mustika Fitri</strong></p>\r\n\r\n<br><p></p>\r\n\r\n<br><p></p>', 'Administrator', '2021-06-22 00:51:58', '2021-06-21', '21062021165135IMG-20210617-WA0025-640x635.jpg'),
(13, 4, '3 Aturan Pendaftaran CPNS 2021 yang Segera Dibuka', '<p>\r\n\r\n</p><p><strong>Suara.com - </strong>Pemerintah bakal membuka pendaftaran Seleksi Calon Pegawai Negeri Sipil (CPNS) 2021 dalam waktu dekat. Para peserta pun wajib tahu 3 <a target=\"_blank\" rel=\"nofollow\" href=\"https://www.suara.com/tag/aturan-pendaftaran-cpns-2021\">aturan pendaftaran CPNS 2021</a>&nbsp;yang segera dibuka ini.</p><p>Kementerian Pendayagunaan Aparatur Negara dan Reformasi Birokrasi (Kemen PANRB) merilis tiga aturan yang harus dipahami bagi para calon pendaftar. Tak hanya <a target=\"_blank\" rel=\"nofollow\" href=\"https://www.suara.com/tag/pendaftaran-cpns-2021\">pendaftaran CPNS 2021</a>, peraturan ini juga memuat penjelasan mengenai seleksi Pegawai Pemerintah dengan Perjanjian Kerja (PPPK) 2021.</p><div><div><div></div></div></div><p>Berikut tiga aturan pendaftaran <a target=\"_blank\" rel=\"nofollow\" href=\"https://www.suara.com/tag/cpns-2021\">CPNS 2021</a>&nbsp;dan <a target=\"_blank\" rel=\"nofollow\" href=\"https://www.suara.com/tag/pppk-2021\">PPPK 2021</a>&nbsp;berdasarkan dikutip dari situs resmi BKN, bkn.go.id.</p>\r\n\r\n\r\n\r\n<ol><li>Permen PANRB No 27 Tahun 2021<br>Aturan pendaftaran CPNS 2021 tertuang dalam Permen PANRB No 27 Tahun 2021 tentang Pengadaan Pegawai Negeri Sipil. Dalam peraturan tersebut dijelaskan mengenai antara lain jenis-jenis formasi yang dibutuhkan, persyaratan umum, dan seleksi yang harus dilalui.</li><li>Permen PANRB No 28 Tahun 2021<br>Permen PANRB No 28 Tahun 2021 tentang Pengadaan Pegawai Pemerintah dengan Perjanjian Kerja untuk Jabatan Fungsional Guru pada Instansi Daerah Tahun 2021 menjadi peratutan yang wajib dipahami bagi calon pendaftar PPPK 2021. Peraturan ini memuat penjelasan antara lain mengenai persyaratan umum PPPK, tahapan seleksi, dan syarat penambahan nilai kompetensi teknis.</li><li>Permen PANRB No 29 Tahun 2021<br>Permen PAN RB No 29 Tahun 2021 memuat tentang Pengadaan Pegawai Pemerintah dengan Perjanjian Kerja untuk Jabatan Fungsional. Peraturan ini hampir sama dengan Permen PANRB No 28 Tahun 2021 hanya saja diperuntukkan bagi jabatan fungsional non guru misalnya tenaga kesehatan atau tenaga teknis sekolah.</li></ol><p>Melalui siaran resmi pada akun Youtube Kementerian PANRB, Plt. Asdep Perencanaan dan Pengadaan SDM Aparatur Kementerian PANRB, Katmoko Ari Sambodo menyebutkan pemerintah pusat dan daerah telah menetapkan kebutuhan CPNS tahun ini sebanyak 707.622.</p><p>Formasi tersebut terdiri dari 531.076 PPPK Guru, 20.960 PPPK Non Guru, dan sisanya 80.961 CPNS. <a target=\"_blank\" rel=\"nofollow\" href=\"https://www.suara.com/tag/formasi-cpns-2021\">Formasi CPNS 2021</a>&nbsp;bisa diikuti baik di tingkat pusat maupun daerah, sementara <a target=\"_blank\" rel=\"nofollow\" href=\"https://www.suara.com/tag/formasi-pppk\">formasi PPPK</a>&nbsp;hanya akan diselenggarakan oleh daerah.</p><p>Kendati kebutuhan sudah diumumkan, para calon pendaftar <a target=\"_blank\" rel=\"nofollow\" href=\"https://www.suara.com/tag/seleksi-cpns\">seleksi CPNS</a>&nbsp;dan PPPK masih harus memantau perkembangan informasi. Pasalnya semua proses seleksi CPNS dan PPPK bakal dilakukan melalui portal sscasn.bkn.go.id. Namun, portal tersebut belum bisa diakses hingga saat ini.</p><p>Seperti itulah 3 aturan pendaftaran CPNS 2021 dan PPPK 2021 yang telah dirilis <a target=\"_blank\" rel=\"nofollow\" href=\"https://www.suara.com/tag/kemenpanrb\">KemenPANRB</a>. Bersiap mulai dari sekarang untuk seleksi CPNS 2021.</p>\r\n\r\n\r\n\r\n<strong>Kontributor : </strong>Nadia Lutfiana Mawarni\r\n\r\n<br><p></p>', 'Administrator', '2021-06-23 22:07:22', '2021-06-23', '23062021140722Screenshot_134.png'),
(15, 3, 'Unpad Buka Program Beasiswa Fast Track Doktoral Padjadjaran', '<p>\r\n\r\n<strong>BANDUNG</strong>&nbsp;- <a target=\"_blank\" rel=\"nofollow\"><strong></strong></a>Universitas Padjadjaran(Unpad) menyediakan <a target=\"_blank\" rel=\"nofollow\">beasiswa pascasarjana</a>&nbsp;bagi calon mahasiswa unggul yang ingin melanjutkan studi ke Program Doktor (S3) atau Program fast track Magister-Doktor (S2-S3).<br><br><a target=\"_blank\" rel=\"nofollow\" href=\"https://www.sindonews.com/topic/74796/rektor-unpad\"><strong>Rektor Unpad Rina Indiastuti</strong></a>&nbsp;mengatakan, ada dua skema beasiswa yang ditawarkan Unpad, yaitu Beasiswa Program Doktoral Padjadjaran untuk program S3; dan Beasiswa Unggulan Pascasarjana Padjadjaran untuk program fast track Magister-Doktor.<br><br>“Kedua program ini merupakan salah satu kontribusi nyata Unpad dalam mendukung program prioritas pemerintah untuk meningkatkan kualitas SDM Indonesia,” kata Rektor dalam keterangan resminya, Selasa (18/5/2021).\r\n\r\n<br></p><p>\r\n\r\nGuru Besar Fakultas Ekonomi dan Bisnis Unpad tersebut menjelaskan, pendaftaran dua program beasiswa ini dapat dilakukan melalui jalur pendaftaran Pascasarjana reguler di laman SMUP Unpad.<br><br>“Cara pendaftarannya akan mengikuti mekanisme SMUP yang reguler. Calon mahasiswa nanti dapat memilih apakah akan mendaftar ke program melalui penawaran beasiswa ini atau tidak,” jelasnya.<br><br>Secara teknis, dua program beasiswa ini diarahkan pada pembelajaran berbasis riset. Program ini diintegrasikan dengan hibah riset internal Unpad yang diperoleh para calon promotor.<br><br>Pada tahun 2021 ini, melalui hibah riset yang dikelola Direktorat Riset dan Pengabdian pada Masyarakat Unpad, sebanyak 13 dosen terpilih akan menjadi promotor untuk mahasiswa penerima Beasiswa Program Doktoral Padjadjaran, serta 14 dosen terpilih akan bertindak sebagai promotor untuk mahasiswa penerima Beasiswa Unggulan Pascasarjana Padjadjaran.<br><br>Beasiswa Unggulan Pascasarjana Padjadjaran sendiri mengadaptasi Program Beasiswa Pendidikan Magister Menuju Doktor untuk Sarjana Unggul (PMDSU) Ditjen Dikti.\r\n\r\n<br></p><p>\r\n\r\nPenerima beasiswa akan mendapatkan beasiswa untuk biaya pendidikan dan riset, serta biaya hidup per bulan selama satu tahun mengikuti pendidikan Magister yang dilanjutkan dengan tiga tahun pendidikan Doktor.<br><br>Selama empat tahun mengikuti program fast track Magister-Doktor tersebut, mahasiswa akan disupervisi dosen promotor untuk melakukan riset dan publikasi bersama.<br><br>“Diharapkan dalam waktu 4 tahun, penerima beasiswa dapat menyelesaikan studinya hingga program Doktor,” kata Rektor.<br><br>Sementara untuk Beasiswa Program Doktoral Padjadjaran, mahasiswa akan mendapatkan beasiswa untuk biaya pendidikan dan riset selama tiga tahun menempuh pendidikan S3 dan melakukan riset bersama dosen promotor. Luaran dari program beasiswa ini berupa satu publikasi artikel ilmiah dalam jurnal internasional bereputasi per tahunnya.</p><div>(mpw)</div>\r\n\r\n<br><p></p>', 'Administrator', '2021-06-24 09:57:53', '2021-06-24', '23062021141400unpad-buka-program-beasiswa-fast-track-doktoral-padjadjaran-inu.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `data_dosen`
--

CREATE TABLE `data_dosen` (
  `id_dosen` int(11) NOT NULL,
  `kode` varchar(200) NOT NULL,
  `nama_dosen` varchar(200) NOT NULL,
  `nip` varchar(200) NOT NULL,
  `nidn` varchar(200) NOT NULL,
  `pangkat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_dosen`
--

INSERT INTO `data_dosen` (`id_dosen`, `kode`, `nama_dosen`, `nip`, `nidn`, `pangkat`) VALUES
(1, '2104', 'Dr. H. Aminuddin Bakry, M.S.', '19580723-198503-1-001', '0023075803', 'Lektor Kepala/ IV.c'),
(2, '2105', 'Drs. Marsud Hamid, M.Kes.', '19570707-198601-1-001', '0007075710', 'Lektor/ III.d'),
(3, '2106', 'Drs. Syarifuddin Kasim, M.T.', '19570402-198601-1-002', '0002045702', 'Lektor Kepala/ IV.a'),
(4, '2107', 'Prof. Dr.  Ir. Yunus Tjandi, M.T.', '19580721-198601-1-001', '0021075803', 'Guru Besar/ IV.e'),
(5, '2109', 'Ir. H. Muddassir, M.T.', '19530818-198601-1-002', '0018085305', 'Lektor Kepala/ IV.b'),
(6, '2111', 'Prof. Dr. H. Syahrul, M.Pd.', '19621005-198702-1-001', '0005106204', 'Lektor Kepala/ IV.b'),
(7, '2112', 'Dr. Ir. Muh. Nasir Malik, M. T.', '19571022-198703-1-004', '0022105706', 'Lektor Kepala/ IV.b'),
(8, '2113', 'Dr. Ir. Riana T Mangesa, M.T.', '19580108-198701-2-001', '0008015802', 'Lektor Kepala/ IV.c'),
(9, '2114', 'Drs. Sugeng A. Karim, M.T.', '19601231-198803-1-012', '0031126024', 'Lektor Kepala/ IV.a'),
(10, '2116', 'Drs. H. Alimuddin Sa\'ban Miru, M.Pd.', '19630723-199003-1-003', '0023076302', 'Lektor Kepala/ IV.a'),
(11, '2117', 'Dr. Ruslan, M.Pd.', '19631231-199003-1-028', '0031126338', 'Lektor Kepala/ IV.c'),
(12, '2118', 'Dr. Syamsurijal, M.T.', '19650304-199112-1-001', '0004036504', 'Lektor Kepala/ IV.b'),
(13, '2119', 'Dr. M. Yusuf Mappeasse, M.Pd.', '19650317-199303-1-001', '0017036502', 'Lektor Kepala/ IV.a'),
(14, '2120', 'Drs. Massikki, M.Pd.', '19640505-199303-1-003', '0005056406', 'Lektor /III.c'),
(15, '2121', 'Dr. Abdul Muis Mappalotteng., M.Pd., M.T.', '19691018-199403-1-001', '0018106905', 'Lektor Kepala/ IV.a'),
(16, '2122', 'H. Harifuddin, S.T., M.T.', '19680510-199702-1-001', '0010056807', 'Lektor Kepala/ IV.a'),
(17, '2123', 'Dr. Iwan Suhardi, S.T., M.T.', '19700207-199702-1-001', '0007027002', 'Lektor Kepala/ IV.a'),
(18, '2124', 'Al Imran, S.T., M.T.', '19711023-199903-1-001', '0023107104', 'Lektor Kepala/ IV.a'),
(19, '2125', 'Hj. Dyah Darma A, S.T., M.Tel.Eng.', '19751115-200004-2-002', '0015117508', 'Lektor /III.b'),
(20, '2126', 'Dr. Mustari S. Lamada, S.Pd. M.T.', '19750505-200501-1-001', '0005057513', 'Lektor/ III.c'),
(21, '2127', 'Hasrul Bakri, S.Pd., M.T', '19770724-200501-1-003', '0024077705', 'Lektor/ III.c'),
(22, '2128', 'Firdaus, S.Pd., M.T.', '19761012-200801-1-008', '0012107606', 'Asisten Ahli/III.b'),
(23, '2129', 'Zulhajji, S.T., M.T', '19720616-200003-1-003', '0016067208', 'Lektor/III.c'),
(24, '2130', 'Muliaty Yantahin, S.T., M.T', '19710202-200912-2-001', '0002027108', 'Asisten Ahli/III b'),
(25, '2131', 'Udin Sidik Sidin, S.Pd., M.T.', '19740615-199703-1-002', '0015067407', 'Lektor/III c'),
(26, '2132', 'Sanatang., S.Pd., M.T', '19752007-20101-2-2001', '0020077512', 'Asisten Ahli/III b'),
(27, '2133', 'Dr. Satria Gunawan Zain, S.Pd., M.T', '19800809-201012-1-002', '0009088003', 'Asisten Ahli/III b'),
(28, '2134', 'Jumadi M. Parenreng, S.ST, M.Kom', '19781103-201012-1-002', '0003117804', 'Asisten Ahli/III b'),
(29, '2135', 'Suhartono, S.Kom., M.Kom', '19761103-201012-1-002', '0303117602', 'Lektor/III c'),
(30, '2136', 'Dyah Vitalocca, S.T., M.Pd', '19840412-201404-2-001', '0412048405', 'Asisten Ahli/III b'),
(31, '2137', 'Edi Suhardi Rahman, S.Pd.,M.Pd.', '19861226-201404-1-001', '0026128601', 'Asisten Ahli/III b'),
(32, '2138', 'Muliadi, S.Pd.,M.T.', '19741116-200112-1-001', '0016117404', 'Asisten Ahli/III c'),
(33, '2139', 'Fathahillah, S.Pd, M.Eng.', '19860326-201504-1-001', '0926038601', 'Asisten Ahli/III b'),
(34, '2140', 'Veronika Asri T., S.Pd., M.Pd.', '19890115-201504-2-001', '0015018904', 'Asisten Ahli/III b'),
(35, '2141', 'Muhammad Riska, S.Pd., M.Pd.', '19850920 201504-1-001', '0020098503', 'Asisten Ahli/III b'),
(36, '2142', 'Abdul Rahman Patta, S.Kom., M.T.', '19821215-201504-1-001', '0015128207', 'Asisten Ahli/III b');

-- --------------------------------------------------------

--
-- Table structure for table `data_galery`
--

CREATE TABLE `data_galery` (
  `id` int(11) NOT NULL,
  `judul` text NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_galery`
--

INSERT INTO `data_galery` (`id`, `judul`, `deskripsi`, `gambar`) VALUES
(8, 'Kegiatan 1', 'Kegiatan 1', '130420181543331507732786.jpg'),
(9, 'Kegiatan 2', 'Kegiatan 2', '140420180719151507733022.jpg'),
(10, 'Kegiatan 3', 'Kegiatan 2', '140420180719321507733050.jpg'),
(11, 'Kegiatan 4', 'Kegiatan 4', '140420180719521507733076.jpg'),
(12, 'Kegiatan 5', 'Kegiatan 5', '140420180720061507733100.jpg'),
(18, 'Foto 1', 'Rektor UNM, Husain Syam didampingi Pembantu Rektor Bidang Akademik, Muharaam foto bersama dengan wisudawan terbaik dari masing-masing fakultas se-UNM (11/4) . (Foto: Dasrin-Profesi)', '140420181305072018-04-11-10.03.32-1.jpg'),
(19, 'Foto 2', 'Wisuda periode kedua tahun akademik 2017/2018. (Foto: Dasrin-Profesi)', '14042018130546DSC_0467.jpg'),
(20, 'Foto 3', 'Wisuda periode kedua tahun akademik 2017/2018. (Foto: Masturi-Profesi)', '14042018130616IMG-20180411-WA0007.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `data_jurusan`
--

CREATE TABLE `data_jurusan` (
  `id_jurusan` int(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nip_dosen` varchar(30) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_jurusan`
--

INSERT INTO `data_jurusan` (`id_jurusan`, `nama`, `nip_dosen`, `foto`) VALUES
(1, 'Dr. Ruslan, M.Pd.', '19631231 199003 1 028', '110920180533581.jpg'),
(2, 'Dr. M. Yusuf Mappeasse, M.Pd.', '19650317 199303 1 001', '15092018150159sekjur.jpg'),
(3, 'Dr. Mustari Lamada, S.Pd., M.T.', '19750505 200501 1 001', '15092018143329prodiptik.jpg'),
(4, 'Hasrul Bakri, S.Pd., M.T.', '19770724 200501 1 003', '031020180547506.jpg'),
(5, 'Zulhajji, S.T.,M.T.', '19680510 199702 1 001', '150920181436042.jpg'),
(6, 'Prof. Dr. H. Hamsu Abdul Gani, M.Pd', '19601231 198503 1 029', '');

-- --------------------------------------------------------

--
-- Table structure for table `data_kategori`
--

CREATE TABLE `data_kategori` (
  `id_kategori` int(3) NOT NULL,
  `nama_kategori` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_kategori`
--

INSERT INTO `data_kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Kampus'),
(2, 'Wisuda'),
(3, 'Berita Pascasarjana'),
(4, 'Bursa dan Peluang Kerja');

-- --------------------------------------------------------

--
-- Table structure for table `data_kota`
--

CREATE TABLE `data_kota` (
  `id_provinsi` int(4) NOT NULL,
  `id_kota` int(4) NOT NULL,
  `nama_kota` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_kota`
--

INSERT INTO `data_kota` (`id_provinsi`, `id_kota`, `nama_kota`) VALUES
(1, 1, 'Kabupaten Aceh Barat'),
(1, 2, 'Kabupaten Aceh Barat Daya'),
(1, 3, 'Kabupaten Aceh Besar'),
(1, 4, 'Kabupaten Aceh Jaya'),
(1, 5, 'Kabupaten Aceh Selatan'),
(1, 6, 'Kabupaten Aceh Singkil'),
(1, 7, 'Kabupaten Aceh Tamiang'),
(1, 8, 'Kabupaten Aceh Tengah'),
(1, 9, 'Kabupaten Aceh Tenggara'),
(1, 10, 'Kabupaten Aceh Timur'),
(1, 11, 'Kabupaten Aceh Utara'),
(1, 12, 'Kabupaten Bener Meriah'),
(1, 13, 'Kabupaten Bireuen'),
(1, 14, 'Kabupaten Gayo Lues'),
(1, 15, 'Kabupaten Nagan Raya'),
(1, 16, 'Kabupaten Pidie'),
(1, 17, 'Kabupaten Pidie Jaya'),
(1, 18, 'Kabupaten Simeulue'),
(1, 19, 'Kota Banda Aceh'),
(1, 20, 'Kota Langsa'),
(1, 21, 'Kota Lhokseumawe'),
(1, 22, 'Kota Sabang'),
(1, 23, 'Kota Subulussalam'),
(2, 24, 'Kabupaten Asahan'),
(2, 25, 'Kabupaten Batubara'),
(2, 26, 'Kabupaten Dairi'),
(2, 27, 'Kabupaten Deli Serdang'),
(2, 28, 'Kabupaten Humbang Hasundutan'),
(2, 29, 'Kabupaten Karo'),
(2, 30, 'Kabupaten Labuhanbatu'),
(2, 31, 'Kabupaten Labuhanbatu Selatan'),
(2, 32, 'Kabupaten Labuhanbatu Utara'),
(2, 33, 'Kabupaten Langkat'),
(2, 34, 'Kabupaten Mandailing Natal'),
(2, 35, 'Kabupaten Nias'),
(2, 36, 'Kabupaten Nias Barat'),
(2, 37, 'Kabupaten Nias Selatan'),
(2, 38, 'Kabupaten Nias Utara'),
(2, 39, 'Kabupaten Padang Lawas'),
(2, 40, 'Kabupaten Padang Lawas Utara'),
(2, 41, 'Kabupaten Pakpak Bharat'),
(2, 42, 'Kabupaten Samosir'),
(2, 43, 'Kabupaten Serdang Bedagai'),
(2, 44, 'Kabupaten Simalungun'),
(2, 45, 'Kabupaten Tapanuli Selatan'),
(2, 46, 'Kabupaten Tapanuli Tengah'),
(2, 47, 'Kabupaten Tapanuli Utara'),
(2, 48, 'Kabupaten Toba Samosir'),
(2, 49, 'Kota Binjai'),
(2, 50, 'Kota Gunungsitoli'),
(2, 51, 'Kota Medan'),
(2, 52, 'Kota Padangsidempuan'),
(2, 53, 'Kota Pematangsiantar'),
(2, 54, 'Kota Sibolga'),
(2, 55, 'Kota Tanjungbalai'),
(2, 56, 'Kota Tebing Tinggi'),
(3, 57, 'Kabupaten Agam'),
(3, 58, 'Kabupaten Dharmasraya'),
(3, 59, 'Kabupaten Kepulauan Mentawai'),
(3, 60, 'Kabupaten Lima Puluh Kota'),
(3, 61, 'Kabupaten Padang Pariaman'),
(3, 62, 'Kabupaten Pasaman'),
(3, 63, 'Kabupaten Pasaman Barat'),
(3, 64, 'Kabupaten Pesisir Selatan'),
(3, 65, 'Kabupaten Sijunjung'),
(3, 66, 'Kabupaten Solok'),
(3, 67, 'Kabupaten Solok Selatan'),
(3, 68, 'Kabupaten Tanah Datar'),
(3, 69, 'Kota Bukittinggi'),
(3, 70, 'Kota Padang'),
(3, 71, 'Kota Padangpanjang'),
(3, 72, 'Kota Pariaman'),
(3, 73, 'Kota Payakumbuh'),
(3, 74, 'Kota Sawahlunto'),
(3, 75, 'Kota Solok'),
(4, 76, 'Kabupaten Bengkalis'),
(4, 77, 'Kabupaten Indragiri Hilir'),
(4, 78, 'Kabupaten Indragiri Hulu'),
(4, 79, 'Kabupaten Kampar'),
(4, 80, 'Kabupaten Kuantan Singingi'),
(4, 81, 'Kabupaten Pelalawan'),
(4, 82, 'Kabupaten Rokan Hilir'),
(4, 83, 'Kabupaten Rokan Hulu'),
(4, 84, 'Kabupaten Siak'),
(4, 85, 'Kabupaten Kepulauan Meranti'),
(4, 86, 'Kota Dumai'),
(4, 87, 'Kota Pekanbaru'),
(5, 88, 'Kabupaten Bintan'),
(5, 89, 'Kabupaten Karimun'),
(5, 90, 'Kabupaten Kepulauan Anambas'),
(5, 91, 'Kabupaten Lingga'),
(5, 92, 'Kabupaten Natuna'),
(5, 93, 'Kota Batam'),
(5, 94, 'Kota Tanjung Pinang'),
(6, 95, 'Kabupaten Batanghari'),
(6, 96, 'Kabupaten Bungo'),
(6, 97, 'Kabupaten Kerinci'),
(6, 98, 'Kabupaten Merangin'),
(6, 99, 'Kabupaten Muaro Jambi'),
(6, 100, 'Kabupaten Sarolangun'),
(6, 101, 'Kabupaten Tanjung Jabung Barat'),
(6, 102, 'Kabupaten Tanjung Jabung Timur'),
(6, 103, 'Kabupaten Tebo'),
(6, 104, 'Kota Jambi'),
(6, 105, 'Kota Sungai Penuh'),
(7, 106, 'Kabupaten Bengkulu Selatan'),
(7, 107, 'Kabupaten Bengkulu Tengah'),
(7, 108, 'Kabupaten Bengkulu Utara'),
(7, 109, 'Kabupaten Kaur'),
(7, 110, 'Kabupaten Kepahiang'),
(7, 111, 'Kabupaten Lebong'),
(7, 112, 'Kabupaten Mukomuko'),
(7, 113, 'Kabupaten Rejang Lebong'),
(7, 114, 'Kabupaten Seluma'),
(7, 115, 'Kota Bengkulu'),
(8, 116, 'Kabupaten Banyuasin'),
(8, 117, 'Kabupaten Empat Lawang'),
(8, 118, 'Kabupaten Lahat'),
(8, 119, 'Kabupaten Muara Enim'),
(8, 120, 'Kabupaten Musi Banyuasin'),
(8, 121, 'Kabupaten Musi Rawas'),
(8, 122, 'Kabupaten Ogan Ilir'),
(8, 123, 'Kabupaten Ogan Komering Ilir'),
(8, 124, 'Kabupaten Ogan Komering Ulu'),
(8, 125, 'Kabupaten Ogan Komering Ulu Selatan'),
(8, 126, 'Kabupaten Ogan Komering Ulu Timur'),
(8, 127, 'Kota Lubuklinggau'),
(8, 128, 'Kota Pagar Alam'),
(8, 129, 'Kota Palembang'),
(8, 130, 'Kota Prabumulih'),
(9, 131, 'Kabupaten Bangka'),
(9, 132, 'Kabupaten Bangka Barat'),
(9, 133, 'Kabupaten Bangka Selatan'),
(9, 134, 'Kabupaten Bangka Tengah'),
(9, 135, 'Kabupaten Belitung'),
(9, 136, 'Kabupaten Belitung Timur'),
(9, 137, 'Kota Pangkal Pinang'),
(10, 138, 'Kabupaten Lampung Barat'),
(10, 139, 'Kabupaten Lampung Selatan'),
(10, 140, 'Kabupaten Lampung Tengah'),
(10, 141, 'Kabupaten Lampung Timur'),
(10, 142, 'Kabupaten Lampung Utara'),
(10, 143, 'Kabupaten Mesuji'),
(10, 144, 'Kabupaten Pesawaran'),
(10, 145, 'Kabupaten Pringsewu'),
(10, 146, 'Kabupaten Tanggamus'),
(10, 147, 'Kabupaten Tulang Bawang'),
(10, 148, 'Kabupaten Tulang Bawang Barat'),
(10, 149, 'Kabupaten Way Kanan'),
(10, 150, 'Kota Bandar Lampung'),
(10, 151, 'Kota Metro'),
(11, 152, 'Kabupaten Tangerang'),
(11, 153, 'Kabupaten Serang'),
(11, 154, 'Kabupaten Lebak'),
(11, 155, 'Kabupaten Pandeglang'),
(11, 156, 'Kota Tangerang'),
(11, 157, 'Kota Serang'),
(11, 158, 'Kota Cilegon'),
(11, 159, 'Kota Tangerang Selatan'),
(12, 160, 'Kabupaten Bandung'),
(12, 161, 'Kabupaten Bandung Barat'),
(12, 162, 'Kabupaten Bekasi'),
(12, 163, 'Kabupaten Bogor'),
(12, 164, 'Kabupaten Ciamis'),
(12, 165, 'Kabupaten Cianjur'),
(12, 166, 'Kabupaten Cirebon'),
(12, 167, 'Kabupaten Garut'),
(12, 168, 'Kabupaten Indramayu'),
(12, 169, 'Kabupaten Karawang'),
(12, 170, 'Kabupaten Kuningan'),
(12, 171, 'Kabupaten Majalengka'),
(12, 172, 'Kabupaten Purwakarta'),
(12, 173, 'Kabupaten Subang'),
(12, 174, 'Kabupaten Sukabumi'),
(12, 175, 'Kabupaten Sumedang'),
(12, 176, 'Kabupaten Tasikmalaya'),
(12, 177, 'Kota Bandung'),
(12, 178, 'Kota Banjar'),
(12, 179, 'Kota Bekasi'),
(12, 180, 'Kota Bogor'),
(12, 181, 'Kota Cimahi'),
(12, 182, 'Kota Cirebon'),
(12, 183, 'Kota Depok'),
(12, 184, 'Kota Sukabumi'),
(12, 185, 'Kota Tasikmalaya'),
(13, 186, 'Kabupaten Administrasi Kepulauan Seribu'),
(13, 187, 'Kota Administrasi Jakarta Barat'),
(13, 188, 'Kota Administrasi Jakarta Pusat'),
(13, 189, 'Kota Administrasi Jakarta Selatan'),
(13, 190, 'Kota Administrasi Jakarta Timur'),
(13, 191, 'Kota Administrasi Jakarta Utara'),
(14, 192, 'Kabupaten Banjarnegara'),
(14, 193, 'Kabupaten Banyumas'),
(14, 194, 'Kabupaten Batang'),
(14, 195, 'Kabupaten Blora'),
(14, 196, 'Kabupaten Boyolali'),
(14, 197, 'Kabupaten Brebes'),
(14, 198, 'Kabupaten Cilacap'),
(14, 199, 'Kabupaten Demak'),
(14, 200, 'Kabupaten Grobogan'),
(14, 201, 'Kabupaten Jepara'),
(14, 202, 'Kabupaten Karanganyar'),
(14, 203, 'Kabupaten Kebumen'),
(14, 204, 'Kabupaten Kendal'),
(14, 205, 'Kabupaten Klaten'),
(14, 206, 'Kabupaten Kudus'),
(14, 207, 'Kabupaten Magelang'),
(14, 208, 'Kabupaten Pati'),
(14, 209, 'Kabupaten Pekalongan'),
(14, 210, 'Kabupaten Pemalang'),
(14, 211, 'Kabupaten Purbalingga'),
(14, 212, 'Kabupaten Purworejo'),
(14, 213, 'Kabupaten Rembang'),
(14, 214, 'Kabupaten Semarang'),
(14, 215, 'Kabupaten Sragen'),
(14, 216, 'Kabupaten Sukoharjo'),
(14, 217, 'Kabupaten Tegal'),
(14, 218, 'Kabupaten Temanggung'),
(14, 219, 'Kabupaten Wonogiri'),
(14, 220, 'Kabupaten Wonosobo'),
(14, 221, 'Kota Magelang'),
(14, 222, 'Kota Pekalongan'),
(14, 223, 'Kota Salatiga'),
(14, 224, 'Kota Semarang'),
(14, 225, 'Kota Surakarta'),
(14, 226, 'Kota Tegal'),
(15, 227, 'Kabupaten Bangkalan'),
(15, 228, 'Kabupaten Banyuwangi'),
(15, 229, 'Kabupaten Blitar'),
(15, 230, 'Kabupaten Bojonegoro'),
(15, 231, 'Kabupaten Bondowoso'),
(15, 232, 'Kabupaten Gresik'),
(15, 233, 'Kabupaten Jember'),
(15, 234, 'Kabupaten Jombang'),
(15, 235, 'Kabupaten Kediri'),
(15, 236, 'Kabupaten Lamongan'),
(15, 237, 'Kabupaten Lumajang'),
(15, 238, 'Kabupaten Madiun'),
(15, 239, 'Kabupaten Magetan'),
(15, 240, 'Kabupaten Malang'),
(15, 241, 'Kabupaten Mojokerto'),
(15, 242, 'Kabupaten Nganjuk'),
(15, 243, 'Kabupaten Ngawi'),
(15, 244, 'Kabupaten Pacitan'),
(15, 245, 'Kabupaten Pamekasan'),
(15, 246, 'Kabupaten Pasuruan'),
(15, 247, 'Kabupaten Ponorogo'),
(15, 248, 'Kabupaten Probolinggo'),
(15, 249, 'Kabupaten Sampang'),
(15, 250, 'Kabupaten Sidoarjo'),
(15, 251, 'Kabupaten Situbondo'),
(15, 252, 'Kabupaten Sumenep'),
(15, 253, 'Kabupaten Trenggalek'),
(15, 254, 'Kabupaten Tuban'),
(15, 255, 'Kabupaten Tulungagung'),
(15, 256, 'Kota Batu'),
(15, 257, 'Kota Blitar'),
(15, 258, 'Kota Kediri'),
(15, 259, 'Kota Madiun'),
(15, 260, 'Kota Malang'),
(15, 261, 'Kota Mojokerto'),
(15, 262, 'Kota Pasuruan'),
(15, 263, 'Kota Probolinggo'),
(15, 264, 'Kota Surabaya'),
(16, 265, 'Kabupaten Bantul'),
(16, 266, 'Kabupaten Gunung Kidul'),
(16, 267, 'Kabupaten Kulon Progo'),
(16, 268, 'Kabupaten Sleman'),
(16, 269, 'Kota Yogyakarta'),
(17, 270, 'Kabupaten Badung'),
(17, 271, 'Kabupaten Bangli'),
(17, 272, 'Kabupaten Buleleng'),
(17, 273, 'Kabupaten Gianyar'),
(17, 274, 'Kabupaten Jembrana'),
(17, 275, 'Kabupaten Karangasem'),
(17, 276, 'Kabupaten Klungkung'),
(17, 277, 'Kabupaten Tabanan'),
(17, 278, 'Kota Denpasar'),
(18, 279, 'Kabupaten Bima'),
(18, 280, 'Kabupaten Dompu'),
(18, 281, 'Kabupaten Lombok Barat'),
(18, 282, 'Kabupaten Lombok Tengah'),
(18, 283, 'Kabupaten Lombok Timur'),
(18, 284, 'Kabupaten Lombok Utara'),
(18, 285, 'Kabupaten Sumbawa'),
(18, 286, 'Kabupaten Sumbawa Barat'),
(18, 287, 'Kota Bima'),
(18, 288, 'Kota Mataram'),
(19, 289, 'Kabupaten Alor'),
(19, 290, 'Kabupaten Belu'),
(19, 291, 'Kabupaten Ende'),
(19, 292, 'Kabupaten Flores Timur'),
(19, 293, 'Kabupaten Kupang'),
(19, 294, 'Kabupaten Lembata'),
(19, 295, 'Kabupaten Manggarai'),
(19, 296, 'Kabupaten Manggarai Barat'),
(19, 297, 'Kabupaten Manggarai Timur'),
(19, 298, 'Kabupaten Ngada'),
(19, 299, 'Kabupaten Nagekeo'),
(19, 300, 'Kabupaten Rote Ndao'),
(19, 301, 'Kabupaten Sabu Raijua'),
(19, 302, 'Kabupaten Sikka'),
(19, 303, 'Kabupaten Sumba Barat'),
(19, 304, 'Kabupaten Sumba Barat Daya'),
(19, 305, 'Kabupaten Sumba Tengah'),
(19, 306, 'Kabupaten Sumba Timur'),
(19, 307, 'Kabupaten Timor Tengah Selatan'),
(19, 308, 'Kabupaten Timor Tengah Utara'),
(19, 309, 'Kota Kupang'),
(20, 310, 'Kabupaten Bengkayang'),
(20, 311, 'Kabupaten Kapuas Hulu'),
(20, 312, 'Kabupaten Kayong Utara'),
(20, 313, 'Kabupaten Ketapang'),
(20, 314, 'Kabupaten Kubu Raya'),
(20, 315, 'Kabupaten Landak'),
(20, 316, 'Kabupaten Melawi'),
(20, 317, 'Kabupaten Pontianak'),
(20, 318, 'Kabupaten Sambas'),
(20, 319, 'Kabupaten Sanggau'),
(20, 320, 'Kabupaten Sekadau'),
(20, 321, 'Kabupaten Sintang'),
(20, 322, 'Kota Pontianak'),
(20, 323, 'Kota Singkawang'),
(21, 324, 'Kabupaten Balangan'),
(21, 325, 'Kabupaten Banjar'),
(21, 326, 'Kabupaten Barito Kuala'),
(21, 327, 'Kabupaten Hulu Sungai Selatan'),
(21, 328, 'Kabupaten Hulu Sungai Tengah'),
(21, 329, 'Kabupaten Hulu Sungai Utara'),
(21, 330, 'Kabupaten Kotabaru'),
(21, 331, 'Kabupaten Tabalong'),
(21, 332, 'Kabupaten Tanah Bumbu'),
(21, 333, 'Kabupaten Tanah Laut'),
(21, 334, 'Kabupaten Tapin'),
(21, 335, 'Kota Banjarbaru'),
(21, 336, 'Kota Banjarmasin'),
(22, 337, 'Kabupaten Barito Selatan'),
(22, 338, 'Kabupaten Barito Timur'),
(22, 339, 'Kabupaten Barito Utara'),
(22, 340, 'Kabupaten Gunung Mas'),
(22, 341, 'Kabupaten Kapuas'),
(22, 342, 'Kabupaten Katingan'),
(22, 343, 'Kabupaten Kotawaringin Barat'),
(22, 344, 'Kabupaten Kotawaringin Timur'),
(22, 345, 'Kabupaten Lamandau'),
(22, 346, 'Kabupaten Murung Raya'),
(22, 347, 'Kabupaten Pulang Pisau'),
(22, 348, 'Kabupaten Sukamara'),
(22, 349, 'Kabupaten Seruyan'),
(22, 350, 'Kota Palangka Raya'),
(23, 351, 'Kabupaten Berau'),
(24, 352, 'Kabupaten Bulungan'),
(23, 353, 'Kabupaten Kutai Barat'),
(23, 354, 'Kabupaten Kutai Kartanegara'),
(23, 355, 'Kabupaten Kutai Timur'),
(24, 356, 'Kabupaten Malinau'),
(24, 357, 'Kabupaten Nunukan'),
(23, 358, 'Kabupaten Paser'),
(23, 359, 'Kabupaten Penajam Paser Utara'),
(24, 360, 'Kabupaten Tana Tidung'),
(23, 361, 'Kota Balikpapan'),
(23, 362, 'Kota Bontang'),
(23, 363, 'Kota Samarinda'),
(24, 364, 'Kota Tarakan'),
(23, 365, 'Kabupaten Mahakam Ulu'),
(25, 366, 'Kabupaten Boalemo'),
(25, 367, 'Kabupaten Bone Bolango'),
(25, 368, 'Kabupaten Gorontalo'),
(25, 369, 'Kabupaten Gorontalo Utara'),
(25, 370, 'Kabupaten Pohuwato'),
(25, 371, 'Kota Gorontalo'),
(26, 372, 'Kabupaten Bantaeng'),
(26, 373, 'Kabupaten Barru'),
(26, 374, 'Kabupaten Bone'),
(26, 375, 'Kabupaten Bulukumba'),
(26, 376, 'Kabupaten Enrekang'),
(26, 377, 'Kabupaten Gowa'),
(26, 378, 'Kabupaten Jeneponto'),
(26, 379, 'Kabupaten Kepulauan Selayar'),
(26, 380, 'Kabupaten Luwu'),
(26, 381, 'Kabupaten Luwu Timur'),
(26, 382, 'Kabupaten Luwu Utara'),
(26, 383, 'Kabupaten Maros'),
(26, 384, 'Kabupaten Pangkajene dan Kepulauan'),
(26, 385, 'Kabupaten Pinrang'),
(26, 386, 'Kabupaten Sidenreng Rappang'),
(26, 387, 'Kabupaten Sinjai'),
(26, 388, 'Kabupaten Soppeng'),
(26, 389, 'Kabupaten Takalar'),
(26, 390, 'Kabupaten Tana Toraja'),
(26, 391, 'Kabupaten Toraja Utara'),
(26, 392, 'Kabupaten Wajo'),
(26, 393, 'Kota Makassar'),
(26, 394, 'Kota Palopo'),
(26, 395, 'Kota Parepare'),
(27, 396, 'Kabupaten Bombana'),
(27, 397, 'Kabupaten Buton'),
(27, 398, 'Kabupaten Buton Utara'),
(27, 399, 'Kabupaten Kolaka'),
(27, 400, 'Kabupaten Kolaka Utara'),
(27, 401, 'Kabupaten Konawe'),
(27, 402, 'Kabupaten Konawe Selatan'),
(27, 403, 'Kabupaten Konawe Utara'),
(27, 404, 'Kabupaten Muna'),
(27, 405, 'Kabupaten Wakatobi'),
(27, 406, 'Kota Bau-Bau'),
(27, 407, 'Kota Kendari'),
(28, 408, 'Kabupaten Banggai'),
(28, 409, 'Kabupaten Banggai Kepulauan'),
(28, 410, 'Kabupaten Buol'),
(28, 411, 'Kabupaten Donggala'),
(28, 412, 'Kabupaten Morowali'),
(28, 413, 'Kabupaten Parigi Moutong'),
(28, 414, 'Kabupaten Poso'),
(28, 415, 'Kabupaten Tojo Una-Una'),
(28, 416, 'Kabupaten Toli-Toli'),
(28, 417, 'Kabupaten Sigi'),
(28, 418, 'Kota Palu'),
(29, 419, 'Kabupaten Bolaang Mongondow'),
(29, 420, 'Kabupaten Bolaang Mongondow Selatan'),
(29, 421, 'Kabupaten Bolaang Mongondow Timur'),
(29, 422, 'Kabupaten Bolaang Mongondow Utara'),
(29, 423, 'Kabupaten Kepulauan Sangihe'),
(29, 424, 'Kabupaten Kepulauan Siau Tagulandang Biaro'),
(29, 425, 'Kabupaten Kepulauan Talaud'),
(29, 426, 'Kabupaten Minahasa'),
(29, 427, 'Kabupaten Minahasa Selatan'),
(29, 428, 'Kabupaten Minahasa Tenggara'),
(29, 429, 'Kabupaten Minahasa Utara'),
(29, 430, 'Kota Bitung'),
(29, 431, 'Kota Kotamobagu'),
(29, 432, 'Kota Manado'),
(29, 433, 'Kota Tomohon'),
(30, 434, 'Kabupaten Majene'),
(30, 435, 'Kabupaten Mamasa'),
(30, 436, 'Kabupaten Mamuju'),
(30, 437, 'Kabupaten Mamuju Utara'),
(30, 438, 'Kabupaten Polewali Mandar'),
(31, 439, 'Kabupaten Buru'),
(31, 440, 'Kabupaten Buru Selatan'),
(31, 441, 'Kabupaten Kepulauan Aru'),
(31, 442, 'Kabupaten Maluku Barat Daya'),
(31, 443, 'Kabupaten Maluku Tengah'),
(31, 444, 'Kabupaten Maluku Tenggara'),
(31, 445, 'Kabupaten Maluku Tenggara Barat'),
(31, 446, 'Kabupaten Seram Bagian Barat'),
(31, 447, 'Kabupaten Seram Bagian Timur'),
(31, 448, 'Kota Ambon'),
(31, 449, 'Kota Tual'),
(32, 450, 'Kabupaten Halmahera Barat'),
(32, 451, 'Kabupaten Halmahera Tengah'),
(32, 452, 'Kabupaten Halmahera Utara'),
(32, 453, 'Kabupaten Halmahera Selatan'),
(32, 454, 'Kabupaten Kepulauan Sula'),
(32, 455, 'Kabupaten Halmahera Timur'),
(32, 456, 'Kabupaten Pulau Morotai'),
(32, 457, 'Kota Ternate'),
(32, 458, 'Kota Tidore Kepulauan'),
(33, 459, 'Kabupaten Asmat'),
(33, 460, 'Kabupaten Biak Numfor'),
(33, 461, 'Kabupaten Boven Digoel'),
(33, 462, 'Kabupaten Deiyai'),
(33, 463, 'Kabupaten Dogiyai'),
(33, 464, 'Kabupaten Intan Jaya'),
(33, 465, 'Kabupaten Jayapura'),
(33, 466, 'Kabupaten Jayawijaya'),
(33, 467, 'Kabupaten Keerom'),
(33, 468, 'Kabupaten Kepulauan Yapen'),
(33, 469, 'Kabupaten Lanny Jaya'),
(33, 470, 'Kabupaten Mamberamo Raya'),
(33, 471, 'Kabupaten Mamberamo Tengah'),
(33, 472, 'Kabupaten Mappi'),
(33, 473, 'Kabupaten Merauke'),
(33, 474, 'Kabupaten Mimika'),
(33, 475, 'Kabupaten Nabire'),
(33, 476, 'Kabupaten Nduga'),
(33, 477, 'Kabupaten Paniai'),
(33, 478, 'Kabupaten Pegunungan Bintang'),
(33, 479, 'Kabupaten Puncak'),
(33, 480, 'Kabupaten Puncak Jaya'),
(33, 481, 'Kabupaten Sarmi'),
(33, 482, 'Kabupaten Supiori'),
(33, 483, 'Kabupaten Tolikara'),
(33, 484, 'Kabupaten Waropen'),
(33, 485, 'Kabupaten Yahukimo'),
(33, 486, 'Kabupaten Yalimo'),
(33, 487, 'Kota Jayapura'),
(34, 488, 'Kabupaten Fakfak'),
(34, 489, 'Kabupaten Kaimana'),
(34, 490, 'Kabupaten Manokwari'),
(34, 491, 'Kabupaten Maybrat'),
(34, 492, 'Kabupaten Raja Ampat'),
(34, 493, 'Kabupaten Sorong'),
(34, 494, 'Kabupaten Sorong Selatan'),
(34, 495, 'Kabupaten Tambrauw'),
(34, 496, 'Kabupaten Teluk Bintuni'),
(34, 497, 'Kabupaten Teluk Wondama'),
(34, 498, 'Kota Sorong');

-- --------------------------------------------------------

--
-- Table structure for table `data_loker`
--

CREATE TABLE `data_loker` (
  `id_loker` int(10) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `pengirim` varchar(50) NOT NULL,
  `tanggal` datetime NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_loker`
--

INSERT INTO `data_loker` (`id_loker`, `judul`, `isi`, `pengirim`, `tanggal`, `tgl`) VALUES
(13, 'Informasi Lowongan Kerja Semua Posisi RS Siloam Hospitals Terbaru 2021', '<p>\r\n\r\n<b>Deskripsi Perusahaan</b>\r\n\r\n<br></p><p><b>\r\n\r\n</b>Rumah Sakit Siloam atau dikenal juga dengan Siloam Hospitals merupakan salah satu jaringan rumah sakit swasta yang didirikan oleh Lippo Group. Awalnya Rumah Sakit ini bernama Rumah Sakit Siloam Gleneagles yang yang merupakan kerjasama antara Lippo Group dan Rumah Sakit Gleneagles, didirikan pada 3 Agustus 1996 melalui PT Sentralindo Wirasta yang bergerak di bidang layanan kesehatan. Rumah Sakit Siloam Gleneagles pertama kali dibangun di kawasan Lippo Village (dahulu: Lippo Karawaci), Tangerang dan Lippo Cikarang. Pada tahun 2010, Siloam Hospitals membangun rumah sakit pendidikan dengan berkolaborasi dengan Fakultas Kedokteran dan School of Nursing (SoN) Universitas Pelita Harapan (UPH), dan Mochtar Riady Institute of Nanotechnology (MRIN)[1]. Mulai tahun 2011 Siloam Hospitals menjadi jaringan Rumah sakit dengan membangun enam rumah sakit dan mengakuisisi lima rumah sakit. Rumah Sakit Siloam atau dikenal juga dengan Siloam Hospitals merupakan salah satu jaringan rumah sakit swasta yang didirikan oleh Lippo Group. Awalnya Rumah Sakit ini bernama Rumah Sakit Siloam Gleneagles yang yang merupakan kerjasama antara Lippo Group dan Rumah Sakit Gleneagles, didirikan pada 3 Agustus 1996 melalui PT Sentralindo Wirasta yang bergerak di bidang layanan kesehatan. Rumah Sakit Siloam Gleneagles pertama kali dibangun di kawasan Lippo Village (dahulu: Lippo Karawaci), Tangerang dan Lippo Cikarang. Pada tahun 2010, Siloam Hospitals membangun rumah sakit pendidikan dengan berkolaborasi dengan Fakultas Kedokteran dan School of Nursing (SoN) Universitas Pelita Harapan (UPH), dan Mochtar Riady Institute of Nanotechnology (MRIN)[1]. Mulai tahun 2011 Siloam Hospitals menjadi jaringan Rumah sakit dengan membangun enam rumah sakit dan mengakuisisi lima rumah sakit.<b>\r\n\r\n<br></b></p><p>\r\n\r\n<b>Uraian Pekerjaan</b><br></p><p><b>\r\n\r\n</b>Rumah Sakit yang bertaraf International ini dibutuhkan tenagaahli yang berkualitas dari semua jurusan untuk menempati posisi-posisi medisdan non medis di rumah sakit kami.\r\nPosisi yang dibutuhkan :<b>\r\n\r\n<br></b></p><p></p><p></p><p></p><ul><li>TENAGA MEDIS<ol><li>Radiografer&nbsp;</li><li>Perawat&nbsp;</li><li>Laboratory Analyst&nbsp;</li><li>Apoteker/ S1 Farmasi/ Kimia/ Biologi&nbsp;</li><li>Ambulance Driver&nbsp;</li><li>Kesehatan Masyarakat&nbsp;</li><li>Kebidanan&nbsp;</li><li>Ahli Gizi&nbsp;</li><li>Dokter (Semua Jurusan)</li></ol></li><li>\r\n\r\nTENAGA NON MEDIS\r\n\r\n<br><ol><li>\r\n\r\nHRD Staff/Staff Personalia&nbsp;</li><li>Finance &amp; Accounting (Manager,Supervisor and Staff)&nbsp;</li><li>Corporate Accountant&nbsp;</li><li>Secretary to Director&nbsp;</li><li>Customer Service&nbsp;</li><li>Purchasing&nbsp;</li><li>Project Architect / Project Manager&nbsp;</li><li>Engineering - Site, Civil, ME, Architect\r\n\r\n<br></li></ol></li></ul><br><b>\r\n\r\nUraian Jabatan</b>\r\n\r\n<br><p></p><p><b>\r\n\r\n</b>Kualifikasi\r\n\r\nPersyaratan Umum :&nbsp;</p><p></p><ul><li>Warga Negara Indonesia&nbsp;</li><li>Pria / Wanita&nbsp;</li><li>Lulusan SMA-SEDERAJAT / D3 / S1 / S2&nbsp;</li><li>Sehat Jasmani Rohani&nbsp;</li><li>Bisa bekerja dengan TIM/KELOMPOK&nbsp;</li><li>Bersedia ditempatkan di Seluruh wilayah Nusantara\r\nKualifikasi</li></ul>\r\n\r\nPersyaratan Berkas / Dokumen :\r\n\r\n<br><p></p><p></p><ul><li>\r\n\r\n Surat Lamaran&nbsp;</li><li>Daftar Riwayat Hidup (CV)&nbsp;</li><li>Kartu Identitas (KTP/SIM)&nbsp;</li><li>Foto Ukuran 4x6 (Berwarna)&nbsp;</li><li>Email &amp; No. Telp/HP\r\n\r\n</li></ul><p><br></p><p>\r\n\r\nInformasi Tambahan</p><p>Bagi anda yang berminat,daftarkan diri anda melalui E-Mail RS.SILOAM disini : HRD RS.SILOAM\r\nE-Mail : rs.siloam.hospitals(at)groupmail.com</p><p><br></p><p>\r\n\r\nNOTE :</p><p><small>Anda mempunyai kesempatan untuk bergabung menjadi salah satu bagian dari RS.SILOAM mungkin terjadi hanya sekali. Oleh sebab itu, Anda menyiapkan diri sempurna mungkin dalam mengikuti lowongan kerja RS.SILOAM. Dan semoga Anda berhasil dalam mengikuti setiap tahapan test seleksi yang dilakukan serta diharapkan semoga Anda lolos dan berhasil bergabing menjadi salah satu bagian perusahaan tersebut.&nbsp;</small></p><p><small>Lowongan dibuka selama iklan masih tayang tidak melalui yayasan / outsourching&nbsp;</small></p><p><small>Bagi yang baru lulus ijazah bisa menyusul dapat dengan melampirkan SKL (Surat Ket. Lulus)</small></p><p></p>\r\n\r\n<p></p><p></p>', 'Administrator', '2021-06-22 00:59:56', '2021-06-21'),
(14, 'Finance and Accounting Staff - Bintang Internasional PT', '<p>Deskripsi Pekerjaan :</p><p>\r\n\r\nFinance &amp; Accounting Staff di PT Bintang Internasional terbagi atas beberapa divisi yang memiliki tanggung jawab masing-masing sesuai divisinya. Terdapat divisi Admin Bank, Admin PIB, Finance, Database &amp; Payroll. Proses perekrutan akan disesuaikan dengan kualifikasi kandidat<br></p><p>Persyaratan :</p><p>\r\n\r\nPria/Wanita, usia maksimal 27 tahun</p><p>- Pendidikan akhir S1 Akuntansi</p><p>- Menguasai dasar-dasar Finance dan Accounting</p><p>- Menguasai penyusunan laporan keuangan</p><p>- Diutamakan yang berpengalaman 1 tahun di bidang Finance dan Accounting (Freshgraduate dipersilahkan melamar)s</p><p>- Menguasai microsoft office (terutama microsoft excel)</p><p>- Mampu bekerja di bawah tekanan</p><p>- Cepat tanggap, disiplin, komunikatif, teliti, dan bertanggung jawab</p><p>- Mampu bekerja secara tim dan individu</p><p>- Aktif berbicara dan berkonsultasi jika menghadapi kendala</p><p>- Memiliki kemampuan belajar dan adaptasi yang cepat</p>- Bersedia melampirkan surat keterangan hasil rapid tes pada saat diundang untuk menjalani proses psikotes dan interview\r\n\r\n<br><p></p>', 'Administrator', '2021-06-22 01:02:42', '2021-06-21');

-- --------------------------------------------------------

--
-- Table structure for table `data_pesankesan`
--

CREATE TABLE `data_pesankesan` (
  `id_pesankesan` int(10) NOT NULL,
  `pesan` varchar(1000) NOT NULL,
  `kesan` varchar(1000) NOT NULL,
  `penulis` varchar(1000) NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_pesankesan`
--

INSERT INTO `data_pesankesan` (`id_pesankesan`, `pesan`, `kesan`, `penulis`, `tanggal`) VALUES
(13, 'Nice', 'Work', 'Yuliana', '2021-06-30 01:34:30');

-- --------------------------------------------------------

--
-- Table structure for table `data_provinsi`
--

CREATE TABLE `data_provinsi` (
  `id_provinsi` int(4) NOT NULL,
  `nama_provinsi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_provinsi`
--

INSERT INTO `data_provinsi` (`id_provinsi`, `nama_provinsi`) VALUES
(1, 'Aceh'),
(2, 'Sumatera Utara'),
(3, 'Sumatera Barat'),
(4, 'Riau'),
(5, 'Kepulauan Riau'),
(6, 'Jambi'),
(7, 'Bengkulu'),
(8, 'Sumatera Selatan'),
(9, 'Kepulauan Bangka Belitung'),
(10, 'Lampung'),
(11, 'Banten'),
(12, 'Jawa Barat'),
(13, 'DKI Jakarta'),
(14, 'Jawa Tengah'),
(15, 'Jawa Timur'),
(16, 'Daerah Istimewa Yogyakarta'),
(17, 'Bali'),
(18, 'Nusa Tenggara Barat'),
(19, 'Nusa Tenggara Timur'),
(20, 'Kalimantan Barat'),
(21, 'Kalimantan Selatan'),
(22, 'Kalimantan Tengah'),
(23, 'Kalimantan Timur'),
(24, 'Kalimantan Utara'),
(25, 'Gorontalo'),
(26, 'Sulawesi Selatan'),
(27, 'Sulawesi Tenggara'),
(28, 'Sulawesi Tengah'),
(29, 'Sulawesi Utara'),
(30, 'Sulawesi Barat'),
(31, 'Maluku'),
(32, 'Maluku Utara'),
(33, 'Papua'),
(34, 'Papua Barat');

-- --------------------------------------------------------

--
-- Table structure for table `data_slide`
--

CREATE TABLE `data_slide` (
  `id_slide` int(10) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `active` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_slide`
--

INSERT INTO `data_slide` (`id_slide`, `gambar`, `active`) VALUES
(40, '2420211456th24062021015416111.jpg', 1),
(44, '241020211636512406202101543522.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `data_slidebantuan`
--

CREATE TABLE `data_slidebantuan` (
  `id_slide` int(10) NOT NULL,
  `gambar` varchar(300) NOT NULL,
  `active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_slidebantuan`
--

INSERT INTO `data_slidebantuan` (`id_slide`, `gambar`, `active`) VALUES
(1, '1%20Login.png', 1),
(2, '2%20Alumni.png', 0),
(3, '3%20Berita.png', 0),
(4, '4%20Loker.png', 0),
(5, '5%20Kontak.png', 0),
(6, '6%20Tentang%20PPs%20UNM.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `nm_lengkap` varchar(200) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `level` enum('admin','user','jurusan') DEFAULT NULL,
  `active` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nm_lengkap`, `email`, `last_login`, `level`, `active`) VALUES
(0, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator', '', '2021-10-29 10:12:41', 'admin', 3),
(1, 'Jurusan', '5fb59c08d91d8e09ec016e2231915d2d', 'Jurusan', '', '2019-11-19 14:00:00', 'jurusan', 3),
(2, '191052003049', '90bdfae7f1edd29021b240d952bc784e', 'Yuliana', '', '2021-10-14 09:36:18', 'user', 1),
(4, '191032001531', '', 'Dian Hardianti Eka Lestari', '', NULL, 'user', 1),
(5, '191052003031', 'd4351d20663bdd06d4584b7340ae595e', 'Muh Fadhil Supriadi', '', NULL, 'user', 1),
(6, '191052003030', '', 'Fitria', '', NULL, 'user', 1),
(8, '191052003001', '', 'Nur Idil Fitri Idris', '', NULL, 'user', 1),
(9, '11B01048', '9e6d866e958d33a72518e00f85728c3d', 'Muh Arief Muhsin', '', NULL, 'user', 1),
(10, '162052004003', '36ce8901df2bdece495214afac8bb04a', 'Kholik Prasojo', '', '2021-07-12 10:31:48', 'user', 1),
(11, '191052003006', '', 'Andi Gagah Purnama', '', NULL, 'user', 0),
(12, '191052013001', '', 'Wahyudi', '', NULL, 'user', 0),
(13, '191052004004', '', 'Yoldis Hasrianti I', '', NULL, 'user', 0),
(14, '181052701004', 'ab3c03ef3c6ba8335689ff5b10d052fb', 'Nurhaeda', '', NULL, 'user', 0),
(15, '181052701005', '', 'Amaliah Ansar', '', NULL, 'user', 0),
(16, '171052701003', '', 'Muh Rifandi', '', NULL, 'user', 0),
(17, '181052707009', '', 'Hasti Maryam', '', NULL, 'user', 0),
(18, '171052701001', '', 'Ibda Sari', '', NULL, 'user', 1),
(19, '191052005001', '', 'Hartono', '', NULL, 'user', 0),
(20, '191052001001', '', 'Celia Tri Pristya Devitha', '', NULL, 'user', 0),
(21, '191052009006', '', 'Asnia Jabbar', '', NULL, 'user', 0),
(22, '191050101033', '', 'Resky Amalia', '', NULL, 'user', 0),
(23, '191050101009', '', 'St. Rahmaniar', '', NULL, 'user', 0),
(24, '191050101006', '', 'Selfiani', '', NULL, 'user', 0),
(25, '162052201008', '', 'Muh Arifai', '', NULL, 'user', 0),
(26, '191052003044', '', 'Abdul Ma’arief Al Imran', '', NULL, 'user', 0),
(27, '181052701007', '', 'Agusriani', '', NULL, 'user', 0),
(28, '181052701003', '', 'Srie Chaerunnisa', '', NULL, 'user', 0),
(29, '181052701001', 'ed901e5975bd60642fb6cc7af4551465', 'Azwan Anwar', '', NULL, 'user', 1),
(30, '181052701002', '03bc4f5315c8b7ef4456aa2b3b775c33', 'Nurwakia', '', NULL, 'user', 1),
(31, '13A09010', '', 'Besse Paikah', '', NULL, 'user', 0),
(32, '181052003013', '270007185d0f4b290ded51f9345a7f29', 'Riskayani', '', NULL, 'user', 1),
(33, '181051404028', '', 'Putry Haryana Rasyid', '', '2021-10-24 23:47:58', 'user', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumni_profil`
--
ALTER TABLE `alumni_profil`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `data_agama`
--
ALTER TABLE `data_agama`
  ADD PRIMARY KEY (`id_agama`);

--
-- Indexes for table `data_artikel`
--
ALTER TABLE `data_artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `data_dosen`
--
ALTER TABLE `data_dosen`
  ADD PRIMARY KEY (`id_dosen`);

--
-- Indexes for table `data_galery`
--
ALTER TABLE `data_galery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_jurusan`
--
ALTER TABLE `data_jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `data_kategori`
--
ALTER TABLE `data_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `data_kota`
--
ALTER TABLE `data_kota`
  ADD PRIMARY KEY (`id_kota`);

--
-- Indexes for table `data_loker`
--
ALTER TABLE `data_loker`
  ADD PRIMARY KEY (`id_loker`);

--
-- Indexes for table `data_pesankesan`
--
ALTER TABLE `data_pesankesan`
  ADD PRIMARY KEY (`id_pesankesan`);

--
-- Indexes for table `data_provinsi`
--
ALTER TABLE `data_provinsi`
  ADD PRIMARY KEY (`id_provinsi`);

--
-- Indexes for table `data_slide`
--
ALTER TABLE `data_slide`
  ADD PRIMARY KEY (`id_slide`);

--
-- Indexes for table `data_slidebantuan`
--
ALTER TABLE `data_slidebantuan`
  ADD PRIMARY KEY (`id_slide`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alumni_profil`
--
ALTER TABLE `alumni_profil`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `data_artikel`
--
ALTER TABLE `data_artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `data_dosen`
--
ALTER TABLE `data_dosen`
  MODIFY `id_dosen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `data_galery`
--
ALTER TABLE `data_galery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `data_kategori`
--
ALTER TABLE `data_kategori`
  MODIFY `id_kategori` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `data_kota`
--
ALTER TABLE `data_kota`
  MODIFY `id_kota` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=499;

--
-- AUTO_INCREMENT for table `data_loker`
--
ALTER TABLE `data_loker`
  MODIFY `id_loker` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `data_pesankesan`
--
ALTER TABLE `data_pesankesan`
  MODIFY `id_pesankesan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `data_provinsi`
--
ALTER TABLE `data_provinsi`
  MODIFY `id_provinsi` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `data_slide`
--
ALTER TABLE `data_slide`
  MODIFY `id_slide` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `data_slidebantuan`
--
ALTER TABLE `data_slidebantuan`
  MODIFY `id_slide` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
