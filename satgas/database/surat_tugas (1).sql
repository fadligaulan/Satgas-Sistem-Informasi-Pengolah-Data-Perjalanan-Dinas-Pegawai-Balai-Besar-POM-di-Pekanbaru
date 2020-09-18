-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Jan 2020 pada 03.32
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `surat_tugas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bidang`
--

CREATE TABLE `bidang` (
  `id_bidang` int(11) NOT NULL,
  `kode_bidang` varchar(512) NOT NULL,
  `kode_bidang_01` varchar(12) NOT NULL,
  `nama_bidang` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bidang`
--

INSERT INTO `bidang` (`id_bidang`, `kode_bidang`, `kode_bidang_01`, `nama_bidang`) VALUES
(1, '01', '941', 'Bidang TU'),
(2, '02', '942', 'Bidang Pengujian'),
(3, '03', '943', 'Infokom'),
(4, '04', '944.1', 'Inspeksi'),
(5, '05', '944.2', 'Sertifikasi'),
(6, '06', '945', 'Penindakan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dasar`
--

CREATE TABLE `dasar` (
  `id_dasar` int(11) NOT NULL,
  `isi_dasar` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dasar`
--

INSERT INTO `dasar` (`id_dasar`, `isi_dasar`) VALUES
(1, 'Undang-undang Kesehatan Republik Indonesia Nomor 36 Tahun 2009;'),
(2, 'Undang-undang Pangan Nomor 18 Tahun 2012;'),
(3, 'Peraturan Presiden Nomor 80 Tahun 2017 tentang Badan Pengawas Obat dan Makanan; '),
(4, 'PP No. 72 Tahun 1998 Tentang Pengamanan Sediaan Farmasi dan Alat Kesehatan;'),
(5, 'Peraturan Kepala Badan POM Nomor 12 Tahun 2018 tentang organisasi tata Kelola Unit Pelaksanaan teknis di lingkungan Badan POM.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_surat`
--

CREATE TABLE `detail_surat` (
  `id_detail` int(11) NOT NULL,
  `id_detail_surat` int(11) NOT NULL,
  `id_detail_pegawai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_surat`
--

INSERT INTO `detail_surat` (`id_detail`, `id_detail_surat`, `id_detail_pegawai`) VALUES
(3, 1, 89),
(4, 1, 23),
(5, 2, 63),
(6, 2, 48);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `nama_jabatan` varchar(512) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `nama_jabatan`) VALUES
(1, 'Ka BBPOM di Pekanbaru'),
(2, 'Kabid Pengujian'),
(3, 'Kabid Pemeriksaan'),
(4, 'Kabid Penindakan'),
(5, 'Kabag Tata usaha'),
(6, 'Kasi Sertifikasi'),
(7, 'Ka Loka POM di Kab INHIL'),
(8, 'Ka Loka POM di Kota Dumai'),
(9, 'PFM. Ahli Madya'),
(10, 'PFM Muda'),
(11, 'Fungsional Umum '),
(12, 'Kasub.Bag Program dan Evaluasi'),
(13, 'Kasi  Mikrobiologi'),
(14, 'Kasi Peng Kimia'),
(15, 'PFM Penyelia'),
(16, 'Perencana Muda'),
(17, 'Analis SDM Aparatur'),
(18, 'Kasi Inspeksi'),
(19, 'Kasub.Bag Umum'),
(20, 'Peng Adm Umum'),
(21, 'Pengadministrasi Keuangan'),
(22, 'Analis Laboratorium'),
(23, 'Analis Kepeg Penyelia'),
(24, 'PFM Pertama'),
(25, 'PFM Pelaksana ljtan'),
(26, 'Arsiparis Pelaksana laknjtan'),
(27, 'Perencana Pertama'),
(28, 'PFM Pelaksana'),
(29, 'Asisten Penyidik Obat & Mak'),
(30, 'Pengelola  BMN'),
(31, 'Verifikator Keuangan'),
(32, 'Analis Kepeg Ahli'),
(33, 'Pranata Komputer Terampil'),
(34, 'Bendahara'),
(35, 'Pengelola BMN'),
(36, 'Arsiparis Terampil'),
(37, 'Pranata Komputer Terampil/Pelaksana'),
(38, 'Caraka'),
(39, 'Keamanan'),
(40, 'PPNPN');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kabupaten`
--

CREATE TABLE `kabupaten` (
  `id_kabupaten` int(11) NOT NULL,
  `nama_kabupaten` varchar(512) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kabupaten`
--

INSERT INTO `kabupaten` (`id_kabupaten`, `nama_kabupaten`) VALUES
(1, 'Kota'),
(2, 'Kabupaten');

-- --------------------------------------------------------

--
-- Struktur dari tabel `maksud`
--

CREATE TABLE `maksud` (
  `id_maksud` int(11) NOT NULL,
  `mata_anggaran` varchar(512) DEFAULT NULL,
  `tahun_anggaran` varchar(512) DEFAULT NULL,
  `maksud_tugas` varchar(512) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `maksud`
--

INSERT INTO `maksud` (`id_maksud`, `mata_anggaran`, `tahun_anggaran`, `maksud_tugas`) VALUES
(391, '3165.081.052.A.524113', '2017', 'Melaksanakan Tugas Balai Besar POM di Pekanbaru untuk Pengadaan Sampel obat, obat bahan alam, kosmetika, suplemen kesehatan Sarana Distribusi OMKA di Kota Pekanbaru (3165.081.052.A.524113)'),
(392, '3165.003.052.A.524113', '2017', 'Melaksanakan Tugas Balai Besar POM di Pekanbaru untuk Pengadaan Sampel makanan di Sarana Distribusi OMKA (3165.003.052.A.524113)'),
(394, '3165.002.052.A.524113', '2019', 'Investigasi Awal Tindak Pidana OMKA123'),
(396, '3165.084.051.C.524113', '2018', 'Melaksanakan Tugas Balai Besar POM di Pekanbaru untuk Pemeriksaan setempat terhadap Mutu dan Keamanan NAPZA dan Prekursor terhadap sarana Distribusi Obat dan Pelayanan Kesehatan'),
(397, '3165.005.051.G.524111', '2018', 'Melaksanakan Tugas Balai Besar POM di Pekanbaru untuk Melakukan Pemeriksaan Setempat Terhadap Instansi Pengawasan / Rencana Aksi Pasar / Penelusuran kasus Produk TMS di Sarana Distribusi OMKA'),
(400, '22019123243', '2016', 'Melaksanakan Apel Pagi siang makan'),
(406, '3165.002.052.A.524113', '2019', 'Investigasi Awal Tindak Pidana OMKA'),
(407, '324321534531', '2019', 'KPPN');

-- --------------------------------------------------------

--
-- Struktur dari tabel `menimbang`
--

CREATE TABLE `menimbang` (
  `id_menimbang` int(11) NOT NULL,
  `isi_menimbang` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `menimbang`
--

INSERT INTO `menimbang` (`id_menimbang`, `isi_menimbang`) VALUES
(1, 'bahwa untuk melindungi masyarakat dari bahaya Obat dan Makanan yang beresiko terhadap kesehatan maka perlu dilakukan pengawasan;'),
(2, 'bahwa untuk melaksanakan pengawasan peredaran Obat dan Makanan maka perlu melakukan pemeriksaan sarana produksi, distribusi, pelayanan, pengambilan sampel untuk uji laboratorium, serta tugas-tugas lain yang menunjang kegiatan pengawasan;'),
(3, 'bahwa berdasarkan pertimbangan huruf a dan b tersebut di atas maka dibuat Surat Tugas.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pangkat`
--

CREATE TABLE `pangkat` (
  `id_pangkat` int(2) NOT NULL,
  `pangkat` varchar(30) DEFAULT NULL,
  `golongan` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pangkat`
--

INSERT INTO `pangkat` (`id_pangkat`, `pangkat`, `golongan`) VALUES
(1, 'Pembina Utama', 'IV/e'),
(2, 'Pembina Utama Madya', 'IV/d'),
(3, 'Pembina Utama Muda', 'IV/c'),
(4, 'Pembina Tk.I', 'IV/b'),
(5, 'Pembina', 'IV/a'),
(6, 'Penata Tk.I', 'III/d'),
(7, 'Penata', 'III/c'),
(8, 'Penata Muda Tk.I', 'III/b'),
(9, 'Penata Muda', 'III/a'),
(10, 'Pengatur Tk.I', 'II/d'),
(11, 'Pengatur', 'II/c'),
(12, 'Pengatur Muda Tk.I', 'II/b'),
(13, 'Pengatur Muda', 'II/a'),
(14, 'Juru Tk.I', 'I/d'),
(15, 'Juru', 'I/c'),
(16, 'Juru Muda Tk.I', 'I/b'),
(17, 'Juru Muda', 'I/a'),
(18, '-', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `id_pangkat` int(11) DEFAULT NULL,
  `id_jabatan` int(11) DEFAULT NULL,
  `nip` varchar(512) DEFAULT NULL,
  `nama_pegawai` varchar(512) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `id_pangkat`, `id_jabatan`, `nip`, `nama_pegawai`) VALUES
(1, 4, 1, '19730630 200003 1 001', 'Mohamad Kashuri,S.Si,Apt,M.Farm'),
(2, 4, 2, '19660418 199303 2 001', 'Dra. Syarnida, Apt, MM'),
(3, 4, 3, '19671128 199703 2 001', 'Dra.Syelviyane Pelle,Apt.MPPM'),
(4, 5, 4, '19760502 200212 2 001', 'Veramika Ginting,Ssi,Apt,MH'),
(5, 5, 5, '19710326 199603 2 001', 'Martarina, Ssi,MM'),
(6, 5, 6, '19650208 199803 2 001', 'Dra Hj. .Evi Mardini, Apt'),
(7, 5, 7, '19780926 200501 1 001', 'Ayi Mahpud Sidik,Ssi,Apt, MH'),
(8, 5, 8, '19810712 200604 2 004', 'Emy Amalia,S.Farm,Apt,Msc'),
(9, 5, 9, '19640121 199203 2 001', 'Dra.Erlinda'),
(10, 5, 9, '19750426 200003 2 002', 'Fendty Apriliani, SSi,Apt'),
(11, 5, 10, '19810816 200501 2 002', 'Fitria Harya Tika,S.Farm,Apt.M.Farm'),
(12, 5, 11, '19770421 200312 2 001', 'Yustinawati,Ssi,Apt'),
(13, 5, 11, '19810309 200604 2 007', 'Martina Esteria, S.Si, Apt,Msi'),
(14, 5, 12, '19820414 200604 2 004', 'Mery Indrayani,S.Farm,Apt,M.Si'),
(15, 5, 9, '19810105 200501 2 001', 'Hayati, S.Farm. Apt'),
(16, 5, 9, '19830607 2006042 003', 'Rian yuni Sartika,S.Farm,Apt,M.Farm'),
(17, 6, 13, '19790331 200312 2 001', 'Murniati Purba. Ssi.M.Si'),
(18, 6, 14, '19810223 200712 2 001', 'Neni Triana,S.Farm, Apt'),
(19, 6, 15, '19641118 198502 2 001', 'Hj. Nunang Ganis Yatlinar '),
(20, 6, 15, '19650109 198602 2 005', 'Rini Suryani'),
(21, 6, 15, '19670915 198903 2 001', 'Asnimar'),
(22, 6, 15, '19670324 199103 2 001', 'Mikzanani'),
(23, 6, 15, '19690430 199103 2 002', 'Afrida Yusni'),
(24, 6, 15, '19690218 199103 2 001', 'Yusnani'),
(25, 6, 10, '19790323 200501 2 003', 'Martina YS Hutasoit SSi, Apt'),
(26, 6, 10, '19830409 200812 2 001 ', 'Lisna Savitri B.S.Farm,Apt'),
(27, 6, 10, '198408092008122 001 ', 'Elvira Yolanda,S.Far.Apt,Msc'),
(28, 6, 10, '19830105 200604 2 005', 'Yossi Fitrianti,S.Farm,Apt,M.Farm'),
(29, 6, 16, '19630719 198602 2 001', 'Hj. Nurbayani, SE'),
(30, 6, 10, '19650315 199103 2 001', 'Seti Sumartini. SH'),
(31, 6, 17, '19620717 198303 2 001', 'Hj. Yulida, SE'),
(32, 6, 15, '19641202 198802 2 001', 'Desniarti'),
(33, 6, 10, '19820624 200604 2 006', 'Monika Kerry Armi, Ssi'),
(34, 6, 10, '198710192010122004', 'Sonya Annisa, S. Farm,Apt'),
(35, 6, 10, '198305052010122005', 'Nefi setiawati,S.Farm,Apt'),
(36, 6, 11, '19741108 19990 3 2005', 'Novita Sumbawati,S.Kom'),
(37, 6, 10, '19840701 201012 2002', 'Fitri Yulianti, S.Farm Apt'),
(38, 7, 18, '19830311 200912 2 003', 'Ully Mandasari S.Farm.Apt'),
(39, 7, 19, '19850729 201212 2002', 'Ratna Nuraini, S.Farm, Apt'),
(40, 7, 10, '19740718 199303 2 001', 'Yulianni Setiawati, S.Farm'),
(41, 7, 10, '19721210 199303 2 001', 'Molly Deswita ,SH'),
(42, 7, 10, '198304202010122002', 'Dina Ariyani S.Farm Apt'),
(43, 7, 20, '19700610 199303 2 001', 'Hj. Helmizona,SH'),
(44, 7, 15, '19640508 199303 2 001', 'Syahriani'),
(45, 7, 10, '19850405 201212 1 001', 'Hendra Alya S.Farm, Apt'),
(46, 7, 21, '19670612 199503 2 001', 'Rosnita Amd'),
(47, 7, 22, '19680310 199203 2 001', 'Rafita Fitri,S.Sos'),
(48, 7, 10, '19701022 199402 2 001', 'Ade Suryani, S.Farm'),
(49, 7, 10, '19841005 200604 2 003', 'Riyanti  P Simanjuntak,S.Farm Apt'),
(50, 7, 10, '19850219 200712 2 001', 'Detri Driani,SH'),
(51, 7, 23, '19690124 199103 2 001', 'Elviera'),
(52, 7, 10, ' 19890401 201212 1001', 'Pernanda Sapryanoki, S.Farm Apt'),
(53, 7, 10, '19861005 201212  2 001', 'Rita Aristia, S.Farm, Apt'),
(54, 7, 15, '19680817 199203 2 001', 'Suhelmi'),
(55, 8, 24, '19890102 201502 2 002', 'Mutiara Hilma,S.Farm Apt'),
(56, 8, 24, '19901123 201502 1 004', 'Syukran Hamdeni S.Farm Apt'),
(57, 8, 25, '19691104 199203 2 002', 'Yenita'),
(58, 8, 25, '19691128 199203 2 001', 'Maranata Parulian'),
(59, 8, 25, '19680617 199103 1 001', 'Alfiyan'),
(60, 8, 25, '19691123 199603 2 001', 'Donna'),
(61, 8, 25, '19670724 199703 1 002', 'Darwin'),
(62, 8, 26, '19690526 199103 2 001', 'Nur Isnani'),
(63, 8, 27, '19751104199803 2 001', 'Ade Aryeni, S.Farm, Apt'),
(64, 8, 28, '19711120 199303 2 001', 'Milayul Fitri'),
(65, 8, 24, '19731205 199703 2 001', 'Desriyanti,SH'),
(66, 8, 24, '19940605 201801 1 002', 'Shandy Nhegro Tampobolon,Sfarm Apt'),
(67, 8, 29, '19811223 200501 2 010', 'Marlina Natalia,Amaf'),
(68, 8, 20, '19650822 199703 1 001', 'Masnur'),
(69, 8, 20, '19651102 199003 1 001', 'Mirzani'),
(70, 8, 24, '198611292010122002', 'Sri Harnani, STP'),
(71, 8, 30, '19841128 200604 2 002', 'Mery Silvia, A.Md'),
(72, 8, 24, '19930727 201903 2 012', 'Yessy Yunita. Saragih .S.Farm Apt'),
(73, 8, 24, '19920617 201903 2 003', 'Tiodinar Theresia Tampubolon,S.Farm, Apt'),
(74, 8, 24, '19940228 201903 2 008', 'Uci Ramadhani, S.Farm Apt'),
(75, 8, 24, '19940309 201903 2 002', 'Fitria Ramadhani,S.Farm Apt'),
(76, 8, 24, '19890219 201903 2 005', 'Elfridawati Siallagan, S.Farm Apt'),
(77, 8, 24, '19930313 201903 2 008', 'Ertha Sastha Silitonga, S,Farm Apt'),
(78, 8, 24, '19940401 201903 2 009', 'Melva Martua Hutahuruk, S.Farm Apt'),
(79, 8, 24, '19950122 201903 2 007', 'Shinta Alicia Sihombing,S.Farm Apt'),
(80, 8, 24, '19931013 201903 2 005', 'Indah Dwi Mandala, S.Farm Apt'),
(81, 8, 24, '19931004 201903 2 002', 'Shally Liyal Khairah, S.Farm Apt'),
(82, 8, 24, '19940103 201903 2 012', 'Rizka Pratriwi, S.Farm Apt'),
(83, 8, 25, '19700714 199803 2 001', 'Yusnani'),
(84, 9, 25, '19860724 200712 1 001', 'Windu Saputra,A.Md'),
(85, 9, 25, '19860215 200712 2 001', 'Lince Marlina. A.Md'),
(86, 9, 24, '19890427 201502 2 005', 'Misnun Aderlina Nababan S.TP'),
(87, 9, 24, '19910711 201502 2 002', 'Julie Meka Tama Sinabutar,S,Si'),
(88, 9, 31, '198404012008121 001 ', 'Safrizal A.Md'),
(89, 9, 25, '19890218 201012 2 005', 'Adelia Febiyana, A.Mf'),
(90, 9, 24, '19940727 201903 2 013', 'Nadya Dwi Anugrah,S.T'),
(91, 9, 24, '19951125 201903 1 003', 'Resqi Syahri, S.Si'),
(92, 9, 24, '19840512 201903 1 001', 'Darul Nafis, S.Si'),
(93, 9, 24, '19970214 201903 1 002', 'Ali Akbar, S.Sos'),
(94, 9, 32, '19941109 201903 1 004', 'Anugrah Prananda, SE'),
(95, 9, 24, '19941227 201903 2 005', 'Kennita herdyon, SH'),
(96, 9, 24, '19960826 201903 1 002', 'Yudha Agus Pranata Barutu, S.TP'),
(97, 9, 24, '19941103 201903 2 001', 'Tri Santi, S.H'),
(98, 9, 24, '19921112 201903 2 009', 'Rozalia, S.Si'),
(99, 9, 24, '19940114 201903 1 005', 'Arif Kurniawan, S.Si'),
(100, 9, 24, '19930607 201903 2 007', 'Dewi Fahrunisa Manurung, S.T.P'),
(101, 9, 24, '19940411 201903 2 007', 'Dyah PameliaRuwaida, S.T'),
(102, 9, 24, '19960105 201903 1 001', 'Riad Ismar, SH'),
(103, 9, 31, '19950503 201903 2 005', 'Dwi Rafika Rani, S.E'),
(104, 9, 24, '19960916 201903 2 005', 'Fransiska Vony Wicheisa Manihuruk,S.K.M'),
(105, 9, 24, '19940624 201903 1 002', 'Rama Fadli, S.T'),
(106, 9, 24, '19960206 201903 2 003', 'Suci Pusfa Sari,  S.T.P'),
(107, 9, 24, '19960423 201903 2 003', 'Elsha Nadya Putri,S.K.M'),
(108, 9, 24, '19890824 201903 1 003', 'Muhammad Ridianto, SH'),
(109, 9, 24, '19931016 201903 2 003', 'Lidia Asrida, S.H'),
(110, 9, 24, '19970626 201903 2 004', 'Vinny Jovalyna, S.Si'),
(111, 9, 31, '19960426 201903 2 001', 'Debora Janet Sibarani,S.E'),
(112, 9, 24, '19950123 201903 2 004', 'Grisella Monica Gultom, S.T.P'),
(113, 10, 35, '198606022008122 002 ', 'Sri Wahyuni, A.Md'),
(114, 11, 33, '19920426 201502 1 002', 'Oki Hamdani, A.Md'),
(115, 11, 34, '19861225 201502 2 002', 'Rohana Natalia, A.Md'),
(116, 11, 35, '19951127 201903 2 004', 'Putri Harmidola Elga, A.Md'),
(117, 11, 36, '19940719 201903 2 004', 'Lisa Trinanda, A.Md'),
(118, 11, 33, '19950714 201903 1 006', 'Bambang Herianto, A.Md'),
(119, 11, 37, '19951005 201903 2 005', 'Pratiwi, A.Md'),
(120, 12, 20, '19730626201212 1 005', 'Asril'),
(121, 13, 38, '19700526 199103 1 001', 'Andisman'),
(122, 14, 39, '19721116201212 1  003', 'Salimin'),
(125, 15, 32, '11111111', 'fadli'),
(126, 18, 40, '-', 'Dori Ardianda S.Sos');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ppk`
--

CREATE TABLE `ppk` (
  `id_ppk` int(11) NOT NULL,
  `nip_ppk` varchar(512) NOT NULL,
  `nama_ppk` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ppk`
--

INSERT INTO `ppk` (`id_ppk`, `nip_ppk`, `nama_ppk`) VALUES
(1, '197103261996032001', 'Martarina,S.Si.MM'),
(3, '198108162005012002', 'Fitria Harya Tika,S.Farm,Apt.M.Farm');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil`
--

CREATE TABLE `profil` (
  `id_profil` int(5) NOT NULL,
  `foto1` varchar(512) NOT NULL,
  `foto2` varchar(512) NOT NULL,
  `foto3` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `provinsi`
--

CREATE TABLE `provinsi` (
  `id_provinsi` int(4) NOT NULL,
  `nama_provinsi` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `provinsi`
--

INSERT INTO `provinsi` (`id_provinsi`, `nama_provinsi`) VALUES
(1, 'Aceh'),
(2, 'Bali'),
(3, 'Bangka Belitung'),
(4, 'Banten'),
(5, 'Bengkulu'),
(6, 'Gorontalo'),
(7, 'Jakarta'),
(8, 'Jambi'),
(9, 'Jawa Barat'),
(10, 'Jawa Tengah'),
(11, 'Jawa Timur'),
(12, 'Kalimantan Barat'),
(13, 'Kalimantan Selatan'),
(14, 'Kalimantan Tengah'),
(15, 'Kalimantan Timur'),
(16, 'Kalimantan Utara'),
(17, 'Kepulauan Riau'),
(18, 'Lampung'),
(19, 'Maluku Utara'),
(20, 'Maluku'),
(21, 'Nusa Tenggara Barat'),
(22, 'Nusa Tenggara Timur'),
(23, 'Papua Barat'),
(24, 'Papua'),
(25, 'Riau'),
(26, 'Sulawesi Selatan'),
(27, 'Sulawesi Tengah'),
(28, 'Sulawesi Tenggara'),
(29, 'Sulawesi Utara'),
(30, 'Sumatra Barat'),
(31, 'Sumatra Selatan'),
(32, 'Sumatra Utara'),
(33, 'Yogyakarta');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_tugas`
--

CREATE TABLE `surat_tugas` (
  `id_surat_tugas` int(11) NOT NULL,
  `id_provinsi` int(11) DEFAULT NULL,
  `id_wilayah` int(11) DEFAULT NULL,
  `id_bidang` int(11) DEFAULT NULL,
  `id_maksud` int(11) DEFAULT NULL,
  `tanggal_st` date DEFAULT NULL,
  `no_surat` int(12) NOT NULL,
  `dari_tgl` date DEFAULT NULL,
  `sampai_tgl` date DEFAULT NULL,
  `lamanya` int(20) NOT NULL,
  `dipa` varchar(512) DEFAULT NULL,
  `id_tandatangan` int(11) DEFAULT NULL,
  `id_ppk` int(11) NOT NULL,
  `surat_created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `surat_tugas`
--

INSERT INTO `surat_tugas` (`id_surat_tugas`, `id_provinsi`, `id_wilayah`, `id_bidang`, `id_maksud`, `tanggal_st`, `no_surat`, `dari_tgl`, `sampai_tgl`, `lamanya`, `dipa`, `id_tandatangan`, `id_ppk`, `surat_created_at`) VALUES
(1, 3, 8, 4, 394, '2020-01-11', 5, '2020-01-22', '2020-01-30', 8, 'Dibebankan pada DIPA Balai Besar POM di Pekanbaru', 15, 1, '2020-01-09 11:43:57'),
(2, 1, 2, 4, 394, '2020-01-15', 5, '2020-01-25', '2020-01-30', 6, 'Dibebankan pada DIPA Balai Besar POM di Pekanbaru', 15, 1, '2020-01-10 09:25:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_tugas_status`
--

CREATE TABLE `surat_tugas_status` (
  `id_surat_tugas_status` int(11) NOT NULL,
  `id_surat_tugas` int(11) NOT NULL,
  `status` enum('diajukan','ditolak','diterima') DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` varchar(20) DEFAULT NULL,
  `creator_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `surat_tugas_status`
--

INSERT INTO `surat_tugas_status` (`id_surat_tugas_status`, `id_surat_tugas`, `status`, `created_at`, `created_by`, `creator_id`) VALUES
(1, 1, 'diajukan', '2020-01-09 11:43:57', '4', 1),
(2, 2, 'diajukan', '2020-01-10 09:25:29', '7', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sys_user`
--

CREATE TABLE `sys_user` (
  `id_user` int(11) NOT NULL,
  `first_name` varchar(512) NOT NULL,
  `last_name` varchar(512) NOT NULL,
  `username` varchar(512) NOT NULL,
  `password` varchar(512) NOT NULL,
  `id_group` int(11) NOT NULL,
  `aktif` enum('Y','N') NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sys_user`
--

INSERT INTO `sys_user` (`id_user`, `first_name`, `last_name`, `username`, `password`, `id_group`, `aktif`, `level`) VALUES
(1, 'Admin', 'admin', 'admin', 'admin', 7, 'Y', 4),
(2, 'Tatausaha', 'tatausaha', 'tatausaha', 'tatausaha', 1, 'Y', 1),
(3, 'Pengujian', 'pengujian', 'pengujian', 'pengujian', 2, 'Y', 1),
(4, 'Penindakan', 'penindakan', 'penindakan', 'penindakan', 6, 'Y', 1),
(5, 'Infokom', 'infokom', 'infokom', 'infokom', 3, 'Y', 1),
(6, 'Inspeksi', 'inspeksi', 'inspeksi', 'inspeksi', 4, 'Y', 1),
(7, 'Kepala Balai', 'kepala', 'kepala', 'kepala', 8, 'Y', 3),
(10, 'ppk', 'ppk', 'ppk', 'ppk', 9, 'Y', 2),
(13, 'Sertifikasi', 'sertifikasi', 'sertifikasi', 'sertifikasi', 5, 'Y', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tandatangan`
--

CREATE TABLE `tandatangan` (
  `id_tandatangan` int(11) NOT NULL,
  `nip_pejabat` varchar(512) DEFAULT NULL,
  `nama_pejabat` varchar(512) DEFAULT NULL,
  `jabatan1` varchar(512) DEFAULT NULL,
  `jabatan2` varchar(512) DEFAULT NULL,
  `jabatan3` varchar(512) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tandatangan`
--

INSERT INTO `tandatangan` (`id_tandatangan`, `nip_pejabat`, `nama_pejabat`, `jabatan1`, `jabatan2`, `jabatan3`) VALUES
(11, '197306302000031001', 'Mohamad Kashuri, S.Si,Apt.M.Farm', 'a.n', 'Kepala Badan POM ', 'Kepala Balai Besar Pengawas Obat\r\ndan Makanan di Pekanbaru\r\n'),
(15, '197306302000031001', 'Mohamad Kashuri, S.Si,Apt.M.Farm', '', NULL, 'Kepala Balai Besar Pengawas Obat dan Makanan di Pekanbaru');

-- --------------------------------------------------------

--
-- Struktur dari tabel `wilayah`
--

CREATE TABLE `wilayah` (
  `id_wilayah` int(11) NOT NULL,
  `id_provinsi` int(11) DEFAULT NULL,
  `id_kabupaten` int(11) DEFAULT NULL,
  `nama_wilayah` varchar(512) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `wilayah`
--

INSERT INTO `wilayah` (`id_wilayah`, `id_provinsi`, `id_kabupaten`, `nama_wilayah`) VALUES
(1, 1, 1, 'Banda Aceh'),
(2, 1, 1, 'Langsa'),
(3, 1, 1, 'Lhokseumawe'),
(4, 1, 1, 'Meulaboh'),
(5, 1, 1, 'Sabang'),
(6, 1, 1, 'Subulussalam'),
(7, 2, 1, 'Denpasar'),
(8, 3, 1, 'Pangkalpinang'),
(9, 4, 1, 'Cilegon'),
(10, 4, 1, 'Serang'),
(11, 4, 1, 'Tangerang Selatan'),
(12, 4, 1, 'Tangerang'),
(13, 5, 1, 'Bengkulu'),
(14, 6, 1, 'Gorontalo'),
(15, 7, 1, 'Kota Administrasi Jakarta Barat'),
(16, 7, 1, 'Kota Administrasi Jakarta Pusat'),
(17, 7, 1, 'Kota Administrasi Jakarta Selatan'),
(18, 7, 1, 'Kota Administrasi Jakarta Timur'),
(19, 7, 1, 'Kota Administrasi Jakarta Utara'),
(20, 8, 1, 'Sungai Penuh'),
(21, 8, 1, 'Jambi'),
(22, 9, 1, 'Bandung'),
(23, 9, 1, 'Bekasi'),
(24, 9, 1, 'Bogor'),
(25, 9, 1, 'Cimahi'),
(26, 9, 1, 'Cirebon'),
(27, 9, 1, 'Depok'),
(28, 9, 1, 'Sukabumi'),
(29, 9, 1, 'Tasikmalaya'),
(30, 9, 1, 'Banjar'),
(31, 10, 1, 'Magelang'),
(32, 10, 1, 'Pekalongan'),
(33, 10, 1, 'Purwokerto'),
(34, 10, 1, 'Salatiga'),
(35, 10, 1, 'Semarang'),
(36, 10, 1, 'Surakarta'),
(37, 10, 1, 'Tegal'),
(38, 11, 1, 'Batu'),
(39, 11, 1, 'Blitar'),
(40, 11, 1, 'Kediri'),
(41, 11, 1, 'Madiun'),
(42, 11, 1, 'Malang'),
(43, 11, 1, 'Mojokerto'),
(44, 11, 1, 'Pasuruan'),
(45, 11, 1, 'Probolinggo'),
(46, 11, 1, 'Surabaya'),
(47, 12, 1, 'Pontianak'),
(48, 12, 1, 'Singkawang'),
(49, 13, 1, 'Banjarbaru'),
(50, 13, 1, 'Banjarmasin'),
(51, 114, 1, 'Palangkaraya'),
(52, 15, 1, 'Balikpapan'),
(53, 15, 1, 'Bontang'),
(54, 15, 1, 'Samarinda'),
(55, 16, 1, 'Tarakan'),
(56, 17, 1, 'Batam'),
(57, 17, 1, 'Tanjungpinang'),
(58, 18, 1, 'Bandar Lampung'),
(59, 18, 1, 'Metro'),
(60, 19, 1, 'Ternate'),
(61, 19, 1, 'Tidore Kepulauan'),
(62, 20, 1, 'Ambon'),
(63, 20, 1, 'Tual'),
(64, 21, 1, 'Bima'),
(65, 21, 1, 'Mataram'),
(66, 22, 1, 'Kupang'),
(67, 23, 1, 'Sorong'),
(68, 24, 1, 'Jayapura'),
(69, 25, 1, 'Dumai'),
(70, 25, 1, 'Pekanbaru'),
(71, 26, 1, 'Makassar'),
(72, 26, 1, 'Palopo'),
(73, 26, 1, 'Parepare'),
(74, 27, 1, 'Palu'),
(75, 28, 1, 'Bau-Bau'),
(76, 28, 1, 'Kendari'),
(77, 29, 1, 'Bitung'),
(78, 29, 1, 'Kotamobagu'),
(79, 29, 1, 'Manado'),
(80, 29, 1, 'Tomohon'),
(81, 30, 1, 'Bukittinggi'),
(82, 303, 1, 'Padang'),
(83, 30, 1, 'Padangpanjang'),
(84, 30, 1, 'Pariaman'),
(85, 30, 1, 'Payakumbuh'),
(86, 30, 1, 'Sawahlunto'),
(87, 30, 1, 'Solok'),
(88, 31, 1, 'Lubuklinggau'),
(89, 31, 1, 'Pagaralam'),
(90, 31, 1, 'Palembang'),
(91, 31, 1, 'Prabumulih'),
(92, 32, 1, 'Binjai'),
(93, 32, 1, 'Medan'),
(94, 32, 1, 'Padang Sidempuan'),
(95, 32, 1, 'Pematangsiantar'),
(96, 32, 1, 'Sibolga'),
(97, 32, 1, 'Tanjungbalai'),
(98, 32, 1, 'Tebingtinggi'),
(99, 33, 1, 'Yogyakarta');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bidang`
--
ALTER TABLE `bidang`
  ADD PRIMARY KEY (`id_bidang`);

--
-- Indeks untuk tabel `dasar`
--
ALTER TABLE `dasar`
  ADD PRIMARY KEY (`id_dasar`);

--
-- Indeks untuk tabel `detail_surat`
--
ALTER TABLE `detail_surat`
  ADD PRIMARY KEY (`id_detail`),
  ADD KEY `id_detail_surat` (`id_detail_surat`) USING BTREE,
  ADD KEY `id_detail_pegawai` (`id_detail_pegawai`);

--
-- Indeks untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indeks untuk tabel `kabupaten`
--
ALTER TABLE `kabupaten`
  ADD PRIMARY KEY (`id_kabupaten`);

--
-- Indeks untuk tabel `maksud`
--
ALTER TABLE `maksud`
  ADD PRIMARY KEY (`id_maksud`);

--
-- Indeks untuk tabel `menimbang`
--
ALTER TABLE `menimbang`
  ADD PRIMARY KEY (`id_menimbang`);

--
-- Indeks untuk tabel `pangkat`
--
ALTER TABLE `pangkat`
  ADD PRIMARY KEY (`id_pangkat`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indeks untuk tabel `ppk`
--
ALTER TABLE `ppk`
  ADD PRIMARY KEY (`id_ppk`);

--
-- Indeks untuk tabel `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- Indeks untuk tabel `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`id_provinsi`);

--
-- Indeks untuk tabel `surat_tugas`
--
ALTER TABLE `surat_tugas`
  ADD PRIMARY KEY (`id_surat_tugas`);

--
-- Indeks untuk tabel `surat_tugas_status`
--
ALTER TABLE `surat_tugas_status`
  ADD PRIMARY KEY (`id_surat_tugas_status`);

--
-- Indeks untuk tabel `sys_user`
--
ALTER TABLE `sys_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `tandatangan`
--
ALTER TABLE `tandatangan`
  ADD PRIMARY KEY (`id_tandatangan`);

--
-- Indeks untuk tabel `wilayah`
--
ALTER TABLE `wilayah`
  ADD PRIMARY KEY (`id_wilayah`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bidang`
--
ALTER TABLE `bidang`
  MODIFY `id_bidang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `dasar`
--
ALTER TABLE `dasar`
  MODIFY `id_dasar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `detail_surat`
--
ALTER TABLE `detail_surat`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT untuk tabel `kabupaten`
--
ALTER TABLE `kabupaten`
  MODIFY `id_kabupaten` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `maksud`
--
ALTER TABLE `maksud`
  MODIFY `id_maksud` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=408;

--
-- AUTO_INCREMENT untuk tabel `menimbang`
--
ALTER TABLE `menimbang`
  MODIFY `id_menimbang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pangkat`
--
ALTER TABLE `pangkat`
  MODIFY `id_pangkat` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT untuk tabel `ppk`
--
ALTER TABLE `ppk`
  MODIFY `id_ppk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `profil`
--
ALTER TABLE `profil`
  MODIFY `id_profil` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `provinsi`
--
ALTER TABLE `provinsi`
  MODIFY `id_provinsi` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `surat_tugas`
--
ALTER TABLE `surat_tugas`
  MODIFY `id_surat_tugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `surat_tugas_status`
--
ALTER TABLE `surat_tugas_status`
  MODIFY `id_surat_tugas_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `sys_user`
--
ALTER TABLE `sys_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `tandatangan`
--
ALTER TABLE `tandatangan`
  MODIFY `id_tandatangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `wilayah`
--
ALTER TABLE `wilayah`
  MODIFY `id_wilayah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
