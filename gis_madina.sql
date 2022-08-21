-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Agu 2022 pada 11.48
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gis_madina`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kecamatans`
--

CREATE TABLE `kecamatans` (
  `id_kecamatan` bigint(20) UNSIGNED NOT NULL,
  `nama_kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kecamatans`
--

INSERT INTO `kecamatans` (`id_kecamatan`, `nama_kecamatan`) VALUES
(1, 'Batahan'),
(2, 'Batang Natal'),
(3, 'Bukit Malintang'),
(4, 'Huta Bargot'),
(5, 'Panyabungan'),
(6, 'Panyabungan Utara'),
(7, 'Panyabungan Timur'),
(8, 'Panyabungan Selatan'),
(9, 'Panyabungan Barat'),
(10, 'Siabu'),
(11, 'Kotanopan'),
(12, 'Ulu Pungkut'),
(13, 'Muara Sipongi'),
(14, 'Lingga Bayu'),
(15, 'Natal'),
(16, 'Muara Batang Gadis'),
(17, 'Ranto Baek'),
(18, 'Tambangan'),
(19, 'Puncak Sorik Marapi'),
(20, 'Pakantan'),
(21, 'Naga Juang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelurahans`
--

CREATE TABLE `kelurahans` (
  `id_kelurahan` bigint(20) UNSIGNED NOT NULL,
  `nama_kelurahan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_kecamatan` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kelurahans`
--

INSERT INTO `kelurahans` (`id_kelurahan`, `nama_kelurahan`, `id_kecamatan`) VALUES
(1, 'Banjar Aur', 1),
(2, 'Batahan I', 1),
(3, 'Batahan II', 1),
(4, 'Batahan III', 1),
(5, 'Batahan IV', 1),
(6, 'Batu Sondat', 1),
(7, 'Bintungan Bejangkar', 1),
(8, 'Kampung Kapas', 1),
(9, 'Kampung Kapas I', 1),
(10, 'Kuala Batahan', 1),
(11, 'Kubangan Pandan Sari', 1),
(12, 'Kubangan Tompek', 1),
(13, 'Muara Pertemuan', 1),
(14, 'Pasar Baru Batahan', 1),
(15, 'Pulau Tamang', 1),
(16, 'Sari Kenanga Batahan', 1),
(17, 'Sinunukan VI', 1),
(18, 'Aek Baru Jae', 2),
(19, 'Aek Baru Julu', 2),
(20, 'Aek Guo', 2),
(21, 'Aek Holbung', 2),
(22, 'Aek Manggis', 2),
(23, 'Aek Nabara', 2),
(24, 'Aek Nangali', 2),
(25, 'Ampung Julu', 2),
(26, 'Ampung Padang', 2),
(27, 'Ampung Siala', 2),
(28, 'Bangkelang', 2),
(29, 'Banjar Melayu', 2),
(30, 'Batu Madinding', 2),
(31, 'Bulu Soma', 2),
(32, 'Guo Batu', 2),
(33, 'Hadangkahan', 2),
(34, 'Hatupangan', 2),
(35, 'Huta Lobu', 2),
(36, 'Jamur Baru', 2),
(37, 'Lubuk Bondar Panjang', 2),
(38, 'Lubuk Samboa', 2),
(39, 'Muara Parlampungan', 2),
(40, 'Muara Soma', 2),
(41, 'Rantobi', 2),
(42, 'Rao Rao', 2),
(43, 'Simanguntong', 2),
(44, 'Sipogu', 2),
(45, 'Sopo Tinjak', 2),
(46, 'Tarlola', 2),
(47, 'Tombang Kaluang', 2),
(48, 'Tor Naincat', 2),
(49, 'Bange', 3),
(50, 'Bange Nauli', 3),
(51, 'Huta Bangun', 3),
(52, 'Huta Bangun Jae', 3),
(53, 'Janji Matogu', 3),
(54, 'Lambou Darul Ihsan', 3),
(55, 'Malintang', 3),
(56, 'Malintang Jae', 3),
(57, 'Malintang Julu', 3),
(58, 'Pasar Baru Malintang', 3),
(59, 'Sidojadi', 3),
(60, 'Bangun Sejati', 4),
(61, 'Huta Bargot Dolok', 4),
(62, 'Huta Bargot Lombang', 4),
(63, 'Huta Bargot Nauli', 4),
(64, 'Huta Bargot Setia', 4),
(65, 'Hutarimbaru', 4),
(66, 'Kumpulan Setia', 4),
(67, 'Mondan', 4),
(68, 'Pasar Huta Bargot', 4),
(69, 'Saba Padang', 4),
(70, 'Sayur Mincat', 4),
(71, 'Simalagi', 4),
(72, 'Adian Jior', 5),
(73, 'Aek Banir', 5),
(74, 'Aek Mata', 5),
(75, 'Dalan Lidang', 5),
(76, 'Darussalam', 5),
(77, 'Gunung Barani', 5),
(78, 'Gunung Manaon', 5),
(79, 'Gunung Tua Jae', 5),
(80, 'Gunung Tua Julu', 5),
(81, 'Gunung Tua Tonga', 5),
(82, 'Huta Lombang Lubis', 5),
(83, 'Ipar Bondar', 5),
(84, 'Kampung Padang', 5),
(85, 'Kayu Jati', 5),
(86, 'Kota Siantar', 5),
(87, 'Lumban Pasir', 5),
(88, 'Manyabar', 5),
(89, 'Manyabar Jae', 5),
(90, 'Pagaran Tonga', 5),
(91, 'Panggorengan', 5),
(92, 'Panyabungan I', 5),
(93, 'Panyabungan II', 5),
(94, 'Panyabungan III', 5),
(95, 'Panyabungan Jae', 5),
(96, 'Panyabungan Julu', 5),
(97, 'Panyabungan Tonga', 5),
(98, 'Pasar Hilir', 5),
(99, 'Perbangunan', 5),
(100, 'Pidoli Dolok', 5),
(101, 'Pidoli Lombang', 5),
(102, 'Saba Jambu', 5),
(103, 'Salam Bue', 5),
(104, 'Sarak Matua', 5),
(105, 'Sigalapang Julu', 5),
(106, 'Siobon Jae', 5),
(107, 'Siobon Julu', 5),
(108, 'Sipapaga', 5),
(109, 'Sipolu-Polu', 5),
(110, 'Sopobatu', 5),
(111, 'Barbaran', 5),
(112, 'Beringin Jaya', 6),
(113, 'Binanga', 6),
(114, 'Huta Damai', 6),
(115, 'Hutanaingkan', 6),
(116, 'Jambur Padang Matinggi', 6),
(117, 'Kampung Baru', 6),
(118, 'Mompang Jae', 6),
(119, 'Mompang Julu', 6),
(120, 'Rumbio', 6),
(121, 'Simanondong', 6),
(122, 'Sopo Sorik', 6),
(123, 'Suka Ramai', 6),
(124, 'Tanjung Mompang', 6),
(125, 'Torbanua Raja', 6),
(126, 'Aek Nabara', 7),
(127, 'Banjar Lancat', 7),
(128, 'Gunung Baringin', 7),
(129, 'Huta Bangun', 7),
(130, 'Huta Tinggi', 7),
(131, 'Hutaimbaru', 7),
(132, 'Padang Laru', 7),
(133, 'Pagur', 7),
(134, 'Pardomuan', 7),
(135, 'Parmomapang', 7),
(136, 'Ranto Natas', 7),
(137, 'Sirangkap', 7),
(138, 'Tanjung', 7),
(139, 'Tanjung Julu', 7),
(140, 'Tebing Tinggi', 7),
(141, 'Aek Ngali', 8),
(142, 'Hayuraja', 8),
(143, 'Huta Julu', 8),
(144, 'Huta Raja', 8),
(145, 'Hutarimbaru', 8),
(146, 'Kayu Laut', 8),
(147, 'Lumban Dolok', 8),
(148, 'Pagaran Gala-Gala', 8),
(149, 'Roburan Dolok', 8),
(150, 'Roburan Lombang', 8),
(151, 'Tano Bato', 8),
(152, 'Barbaran', 9),
(153, 'Barbaran Jae', 9),
(154, 'Batang Gadis', 9),
(155, 'Batang Gadis Jae', 9),
(156, 'Huta Baringin', 9),
(157, 'Huta Tonga BB', 9),
(158, 'Longat', 9),
(159, 'Runding', 9),
(160, 'Sabar Jior', 9),
(161, 'Sirambas', 9),
(162, 'Aek Mual', 10),
(163, 'Bonan Dolok', 10),
(164, 'Huaraba I', 10),
(165, 'Huaraba II', 10),
(166, 'Huta Baringin', 10),
(167, 'Huta Godang Muda', 10),
(168, 'Huta Puli', 10),
(169, 'Huta Raja', 10),
(170, 'Lumban Dolok', 10),
(171, 'Lumban Pinasa', 10),
(172, 'Muara Batang Angkola', 10),
(173, 'Pintu Padang Jae', 10),
(174, 'Pintu Padang Julu', 10),
(175, 'Siabu', 10),
(176, 'Sibaruang', 10),
(177, 'Sihepeng', 10),
(178, 'Sihepeng Dua', 10),
(179, 'Sihepeng Lima', 10),
(180, 'Sihepeng Opat', 10),
(181, 'Sihepeng Sada', 10),
(182, 'Sihepeng Tolu', 10),
(183, 'Simangambat', 10),
(184, 'Simaninggir', 10),
(185, 'Sinonoan', 10),
(186, 'Tangga Bosi I', 10),
(187, 'Tangga Bosi II', 10),
(188, 'Tangga Bosi III', 10),
(189, 'Tanjung Sialang', 10),
(190, 'Batahan', 11),
(191, 'Botung', 11),
(192, 'Gading Bain', 11),
(193, 'Gunung Tua Ms', 11),
(194, 'Gunung Tua Sm', 11),
(195, 'Huta Baringin Tb', 11),
(196, 'Huta Dangka', 11),
(197, 'Huta Padang MS', 11),
(198, 'Huta Pungkut Jae', 11),
(199, 'Huta Pungkut Julu', 11),
(200, 'Huta Pungkut Tonga', 11),
(201, 'Hutapuli', 11),
(202, 'Hutarimbaru Sm', 11),
(203, 'Manambin', 11),
(204, 'Muara Botung', 11),
(205, 'Muara Potan', 11),
(206, 'Muara Pungkut', 11),
(207, 'Muara Saladi', 11),
(208, 'Muara Siambak', 11),
(209, 'Padang Bulan', 11),
(210, 'Pagar Gunung', 11),
(211, 'Pasar Kotanopan', 11),
(212, 'Patialo', 11),
(213, 'Saba Dolok', 11),
(214, 'Sayar Maincat', 11),
(215, 'Sibio-Bio', 11),
(216, 'Simandolam', 11),
(217, 'Simpang Tolang Jae', 11),
(218, 'Simpang Tolang Julu', 11),
(219, 'Singengu Jae', 11),
(220, 'Singengu Julu', 11),
(221, 'Sopo Sorik', 11),
(222, 'Tamiang', 11),
(223, 'Tobang', 11),
(224, 'Tombang Bustak', 11),
(225, 'Ujung Marisi', 11),
(226, 'Usor Tolong', 11),
(227, 'Alahan Kae', 12),
(228, 'Kabincaran', 12),
(229, 'Huta Godang', 12),
(230, 'Huta Padang UP', 12),
(231, 'Hutaimbaru UP', 12),
(232, 'Patahajang', 12),
(233, 'Simpang Banyak Jae', 12),
(234, 'Simpang Banyak Julu', 12),
(235, 'Simpang Duhu Dolok', 12),
(236, 'Simpang Duhu Lombang', 12),
(237, 'Simpang Pining', 12),
(238, 'Tolang', 12),
(239, 'Aek Botung', 13),
(240, 'Bandar Panjang', 13),
(241, 'Bandar Panjang Tuo', 13),
(242, 'Kampung Pinang', 13),
(243, 'Koto Baringin', 13),
(244, 'Koto Boru', 13),
(245, 'Limau Manis', 13),
(246, 'Muara Kumpulan', 13),
(247, 'Pasar Muara Sipongi', 13),
(248, 'Ranjo Batu', 13),
(249, 'Sibinail', 13),
(250, 'Simpang Mandepo', 13),
(251, 'Tamiang Mudo', 13),
(252, 'Tanjung Alai', 13),
(253, 'Tanjung Larangan', 13),
(254, 'Tanjung Medan', 13),
(255, 'Aek Garingging', 14),
(256, 'Aek Manyuruk', 14),
(257, 'Bandar Limabung', 14),
(258, 'Bonca Bayuon', 14),
(259, 'Dalan Lidang', 14),
(260, 'Kampung Baru', 14),
(261, 'Lancat', 14),
(262, 'Lobung', 14),
(263, 'Padang Silojongan', 14),
(264, 'Pangkalan', 14),
(265, 'Perbatasan', 14),
(266, 'Perk. Simpang Gambir', 14),
(267, 'Sikumbu', 14),
(268, 'Simpang Bajole', 14),
(269, 'Simpang Duku', 14),
(270, 'Simpang Durian', 14),
(271, 'Simpang Gambir', 14),
(272, 'Simpang Koje', 14),
(273, 'Tangsi Atas', 14),
(274, 'Tapus', 14),
(275, 'Balimbing', 15),
(276, 'Bintuas', 15),
(277, 'Bonda Kase', 15),
(278, 'Buburan', 15),
(279, 'Kampung Sawah', 15),
(280, 'Kun-Kun', 15),
(281, 'Panggautan', 15),
(282, 'Pardamean Baru', 15),
(283, 'Pasar I Natal', 15),
(284, 'Pasar II Natal', 15),
(285, 'Pasar III Natal', 15),
(286, 'Pasar V Natal', 15),
(287, 'Pasar VI Natal', 15),
(288, 'Patiluban Hilir', 15),
(289, 'Patiluban Mudik', 15),
(290, 'Perkebunan Patiluban', 15),
(291, 'Rukun Jaya', 15),
(292, 'Sasaran', 15),
(293, 'Setia Karya', 15),
(294, 'Sikara Kara I', 15),
(295, 'Sikara Kara II', 15),
(296, 'Sikara Kara III', 15),
(297, 'Sikara Kara IV', 15),
(298, 'Sikara Kara V', 15),
(299, 'Sinunukan V', 15),
(300, 'Suka Maju', 15),
(301, 'Sundutan Tigo', 15),
(302, 'Taluk', 15),
(303, 'Tegal Sari', 15),
(304, 'Tunas Karya', 15),
(305, 'Batu Mundom', 16),
(306, 'Hutaimbaru', 16),
(307, 'Lubuk Kapundung', 16),
(308, 'Lubuk Kapundung II', 16),
(309, 'Manuncang', 16),
(310, 'Panunggulan', 16),
(311, 'Pasar Singkuang I', 16),
(312, 'Pasar Singkuang II', 16),
(313, 'Rantau Panjang', 16),
(314, 'Sali Baru', 16),
(315, 'Sikapas', 16),
(316, 'Suka Makmur', 16),
(317, 'Tabuyung', 16),
(318, 'Tagilang Julu', 16),
(319, 'Bangun Saroha', 17),
(320, 'Banjar Maga', 17),
(321, 'Duo Sepakat', 17),
(322, 'Gonting', 17),
(323, 'Gunung Godang', 17),
(324, 'Huta Baringin', 17),
(325, 'Huta Nauli', 17),
(326, 'Huta Raja', 17),
(327, 'Lubuk Kancah', 17),
(328, 'Manisak', 17),
(329, 'Muara Bangko', 17),
(330, 'Ranto Nalinjang', 17),
(331, 'Ranto Panjang', 17),
(332, 'Sampuran', 17),
(333, 'Simaninggir', 17),
(334, 'Simpang Talap', 17),
(335, 'Tandikek', 17),
(336, 'Angin Barat', 18),
(337, 'Huta Tonga AB', 18),
(338, 'Laru Baringin', 18),
(339, 'Laru Bolak', 18),
(340, 'Laru Dolak', 18),
(341, 'Laru Lombang', 18),
(342, 'Lumban Pasir', 18),
(343, 'Muara Mais', 18),
(344, 'Muara Mais Jambur', 18),
(345, 'Padang Sanggar', 18),
(346, 'Panjaringan', 18),
(347, 'Pasar Laru', 18),
(348, 'Pastap', 18),
(349, 'Pastap Julu', 18),
(350, 'Rao Rao Dolok', 18),
(351, 'Rao Rao Lombang', 18),
(352, 'Simangambat TB', 18),
(353, 'Tambangan Jae', 18),
(354, 'Tambangan Pasoman', 18),
(355, 'Tambangan Tonga', 18),
(356, 'Handel', 19),
(357, 'Huta Baringin', 19),
(358, 'Huta Baru', 19),
(359, 'Huta Lombang', 19),
(360, 'Hutabaringin Julu', 19),
(361, 'Hutanmale', 19),
(362, 'Hutantinggi', 19),
(363, 'Purba Julu', 19),
(364, 'Sibanggor Jae', 19),
(365, 'Sibanggor Julu', 19),
(366, 'Sibanggor Tonga', 19),
(367, 'Huta Gambir', 20),
(368, 'Huta Julu', 20),
(369, 'Huta Lancat', 20),
(370, 'Huta Padang', 20),
(371, 'Huta Toras', 20),
(372, 'Pakantan Dolok', 20),
(373, 'Pakantan Lombang', 20),
(374, 'Silogun', 20),
(375, 'Banua Rakyat', 21),
(376, 'Banua Simanosor', 21),
(377, 'Humbang I', 21),
(378, 'Sayur Matua', 21),
(379, 'Tambiski', 21),
(380, 'Tambiski Nauli', 21);

-- --------------------------------------------------------

--
-- Struktur dari tabel `layanan_kesehatans`
--

CREATE TABLE `layanan_kesehatans` (
  `id_layanan_kesehatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_layanan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_layanan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jam_buka` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jam_tutup` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fasilitas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_kelurahan` bigint(20) UNSIGNED NOT NULL,
  `longitude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar_tempat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `layanan_kesehatans`
--

INSERT INTO `layanan_kesehatans` (`id_layanan_kesehatan`, `nama_layanan`, `jenis_layanan`, `alamat`, `jam_buka`, `jam_tutup`, `fasilitas`, `id_kelurahan`, `longitude`, `latitude`, `gambar_tempat`) VALUES
('lay-kes-2acEs-yFWP1', 'Naga Juang', 'Puskesmas', 'jl sutan namora', '08:00', '22:00', '[\"Rawat Inap\",\"Kantin\",\"Ruang Besalin\"]', 379, '99.490050401671', '0.9326058606896998', 'puskesmas_naga_juang_n9mqnkgzc.jpg'),
('lay-kes-2KuVT-fV8bg', 'Penyuluhan KB Siabu', 'Balai', 'Jl.Trans Sumatra - Padang Sidimpuan', '09:00', '21:00', '[\"Rawat Inap\",\"Kantin\",\"Ruang Besalin\"]', 175, '99.500625719081', '1.0139853758361', 'balai_penyuluhan_k_b_siabu_tcxktr02l.jpg'),
('lay-kes-3rkjD-hCaMd', 'Sihepeng', 'Puskesmas', 'Jl. Lintas Sumatera No.165, Sihepeng', '08:00', '22:00', '[\"Rawat Inap\",\"Kantin\",\"Ruang Besalin\"]', 177, '99.453856213152', '1.0968352476341', 'puskesmas_sihepeng_n01n4hsr4.jpg'),
('lay-kes-5P277-ksEZH', 'Pakantan', 'Puskesmas', 'Huta Padang', '08:00', '22:00', '[\"Rawat Inap\",\"Kantin\",\"Ruang Besalin\"]', 370, '99.89109269805', '0.54088708008518', 'puskesmas_pakantan_eqksggxxm.jpg'),
('lay-kes-5QsXE-Jb2Lr', 'drg.Siti Aminah Hasibuan', 'Klinik Gigi', 'Kayu Jati', '09:00', '21:00', '[\"Rawat Inap\",\"Kantin\",\"Ruang Besalin\"]', 85, '99.562605168601', '0.8646757897288', 'praktek_drg._siti_aminah_hasibuan_ninl9dwjq.jpg'),
('lay-kes-6QBDp-RlDQ8', 'Muarasipongi', 'Puskesmas', 'Muara Kumpulan', '08:00', '22:00', '[\"Rawat Inap\",\"Kantin\",\"Ruang Besalin\"]', 246, '99.848759039752', '0.64170295405234', 'puskesma_muarasipongi_ieowxpnwu.jpg'),
('lay-kes-aUKGF-rzIV8', 'Dokter Gigi  Parlindungan Nasution', 'Klinik Gigi', 'Jl. Willem Iskandar No.128', '09:00', '21:00', '[\"Rawat Inap\",\"Kantin\",\"Ruang Besalin\"]', 109, '99.562591536388', '0.85543697400597', 'dokter_gigi_parlindungan_nasution_qcme73xhv.jpg'),
('lay-kes-bhVYD-5Hk2y', 'Manisak', 'Puskesmas', 'Muara Bangko', '08:00', '22:00', '[\"Rawat Inap\",\"Kantin\",\"Ruang Besalin\"]', 328, '99.371830292851', '0.54478605551321', 'puskesmas_manisak_gjuypvn1p.jpg'),
('lay-kes-cNPZB-6kvJJ', 'Mompang', 'Puskesmas', 'Jl. Trans Sumatera Bukittinggi - Padang Sidempuan No.50', '06:00', '00:00', '[\"Rawat Inap\",\"Kantin\",\"Ruang Besalin\"]', 118, '99.533542083945', '0.91138930386791', 'puskesmas_mompang_61mv6clrw.jpg'),
('lay-kes-e7m6X-nQtf0', 'Penyuluhan Kb Pakantan', 'Balai', 'Huta Padang', '09:00', '18:00', '[\"Rawat Inap\",\"Kantin\",\"Ruang Besalin\"]', 370, '99.891815185547', '0.54089696431744', 'balai_penyuluhan_kb_pakantan_xqo9eiheq.jpg'),
('lay-kes-E7QMT-f3Oix', 'Maga', 'Puskesmas', 'Jl. Trans Sumatera Bukittinggi - Padang Sidempuan', '08:00', '22:00', '[\"Rawat Inap\",\"Kantin\",\"Ruang Besalin\"]', 356, '99.600178599358', '0.73129784239386', 'puskesmas_maga_wagvrdv9r.jpg'),
('lay-kes-eVi6N-N6YxP', 'Kb Lingga Bayu', 'Balai', 'Lobung', '09:00', '18:00', '[\"Rawat Inap\",\"Kantin\",\"Ruang Besalin\"]', 262, '99.288694166259', '0.6205062693041706', 'balai_penyuluhan_kb_lingga_bayu_5bhaswlhp.jpg'),
('lay-kes-F4fnF-GB5J8', 'Penyuluhan Kb Panyabungan Selatan', 'Balai', 'Desa Hutarimbaru', '09:00', '21:00', '[\"Rawat Inap\",\"Kantin\",\"Ruang Besalin\"]', 145, '99.552768375851', '0.75523088110304', 'balai_penyuluhan_kb_panyabungan_selatan_fcv5ltqn3.jpg'),
('lay-kes-FG8rB-psdaI', 'Medika Madina', 'Klinik', 'Jl. H. Adam Malik', '09:00', '22:00', '[\"Rawat Inap\",\"Ruang Besalin\"]', 100, '99.566714018583', '0.85147077777311', 'klinik_medika_madina_ubwhuovlh.jpg'),
('lay-kes-Gga8b-wuXzb', 'Permata Madina Panyabungan', 'Rumah Sakit', 'Jl. Merdeka No.155', '06:00', '00:00', '[\"Rawat Inap\",\"Kantin\",\"Ruang Besalin\"]', 84, '99.561319682093', '0.87229340640309', 'rumah_sakit_permata_madina_panyabungan_ids8x7zhd.jpg'),
('lay-kes-gMgyR-MqohZ', 'Bersalin Al Choir', 'Klinik', 'JL Medan Padang', '08:00', '22:00', '[\"Rawat Inap\",\"Kantin\",\"Ruang Besalin\"]', 79, '99.559446526273', '0.8943838049841393', 'klinik_bersalin_al_choir_nxyfwafjc.jpg'),
('lay-kes-H0KDV-XInQN', 'Batahan', 'Puskesmas', 'Jl. Batahan', '08:00', '00:00', '[\"Rawat Inap\",\"Kantin\",\"Ruang Besalin\"]', 16, '99.142846244195', '0.41550278971572', 'puskesmas_batahan_ngcchie1c.jpg'),
('lay-kes-H2Ets-ELr2I', 'Hutabargot', 'Puskesmas', 'Jl. Manyabar', '08:00', '22:00', '[\"Rawat Inap\",\"Kantin\",\"Ruang Besalin\"]', 62, '99.510932890281', '0.87315631281215', 'puskesmas_hutabargot_a1yxn48du.jpg'),
('lay-kes-HSUdc-PKrE7', 'Kayu Laut', 'Puskesmas', 'Kayu laut', '08:00', '22:00', '[\"Rawat Inap\",\"Kantin\",\"Ruang Besalin\"]', 146, '99.557960926273', '0.74869751825233', 'puskesmas_kayu_laut_8fo2gnaml.jpg'),
('lay-kes-iQG5b-yxxEC', 'Prima Sehat Panyabungan', 'Klinik', 'Jl. Trans Sumatera Bukittinggi - Padang Sidempuan No.123', '08:00', '22:00', '[\"Rawat Inap\",\"Kantin\",\"Ruang Besalin\"]', 93, '99.563023944771', '0.85741982181012', 'klinik_prima_sehat_panyabungan_lsymdyd2k.jpg'),
('lay-kes-iXjO2-0HkGy', 'Singkuang', 'Puskesmas', 'Ps. I. Singkuang', '08:00', '22:00', '[\"Rawat Inap\",\"Kantin\",\"Ruang Besalin\"]', 311, '98.930515182094', '1.0607591931701', 'puskesmas_singkuang_stebwuqri.jpg'),
('lay-kes-J0Fjm-ujbye', 'Sikara kara', 'Puskesmas', 'Suka Maju', '08:00', '18:00', '[\"Rawat Inap\",\"Kantin\",\"Ruang Besalin\"]', 300, '99.152375041616', '0.61969592013431', 'puskesmas_sikara_kara_a6p7afbgf.jpg'),
('lay-kes-KGW8N-jexSu', 'Ulu Pungkut', 'Puskesmas', 'Jl. Raya Ulupungkut, Habincaran', '08:00', '22:00', '[\"Rawat Inap\",\"Kantin\",\"Ruang Besalin\"]', 228, '99.770726497437', '0.53569642368415', 'puskesmas_ulu_pungkut_inuuwqzil.jpg'),
('lay-kes-lCf2Z-s36Of', 'Penyuluhan Kb Panyabungan Timur', 'Balai', 'Jl. Dr. H. Mhd. Rusdi Oloan Nasution', '09:00', '21:00', '[\"Rawat Inap\",\"Kantin\",\"Ruang Besalin\"]', 128, '99.647100083763', '0.80004532743414', 'balai_penyuluhan_kb_panyabungan_timur_dbccdrod1.jpg'),
('lay-kes-mKN2R-CkATr', 'Gunung Tua', 'Puskesmas', 'Jalan Bhayangkara', '06:00', '00:00', '[\"Rawat Inap\",\"Kantin\",\"Ruang Besalin\"]', 79, '99.619656900135', '1.5405565469901', 'g_u_n_u_n_g_t_u_a_tqnmiqmfz.jpg'),
('lay-kes-mNnvj-tZvAM', 'Praktek gigi drg juraidah', 'Klinik Gigi', 'Ps. III', '08:00', '21:00', '[\"Rawat Inap\",\"Kantin\",\"Ruang Besalin\"]', 285, '99.11404492812399', '0.5572462661641375', 'praktek_gigi_drg_juraidah_zlfvfq6pw.jpg'),
('lay-kes-N9jXT-XKdsL', 'Balai Penyuluhan Kb Hutabargot', 'Balai', 'Jl. Syech Tabangun', '09:00', '21:00', '[\"Rawat Inap\",\"Kantin\",\"Ruang Besalin\"]', 60, '99.506253639582', '0.88981762265903', 'balai_penyuluhan_kb_hutabargot_bmwxmckem.jpg'),
('lay-kes-NGe4l-2s3RB', 'dr. Husni Thamrin', 'Rumah Sakit', 'RSUD dr. Husni Thamrin', '06:00', '00:00', '[\"Rawat Inap\",\"Kantin\",\"Ruang Besalin\"]', 286, '99.112364768601', '0.5570326078184', 'r_s_u_d_dr._husni_thamrin_mt0ahwkoq.jpg'),
('lay-kes-ny9Jb-J0rKc', 'Siabu', 'Puskesmas', 'Jl. Trans Sumatera Bukittinggi - Padang Sidempuan No.18', '06:00', '00:00', '[\"Rawat Inap\",\"Kantin\",\"Ruang Besalin\"]', 175, '99.112364768601', '0.5570326078184', 'puskesmas_siabu_thtnhcqrl.jpg'),
('lay-kes-oHV2a-mMcq3', 'Kotanopan', 'Puskesmas', 'Jl. Sindang Laya No. 15', '08:00', '22:00', '[\"Rawat Inap\",\"Kantin\",\"Ruang Besalin\"]', 211, '99.706480324422', '0.66619756495168', 'puskesmas_kotanopan_ycdiswm9x.jpg'),
('lay-kes-PTGYi-T4cJo', 'Longat', 'Puskesmas', 'longat', '08:00', '22:00', '[\"Rawat Inap\",\"Kantin\",\"Ruang Besalin\"]', 158, '99.515733810929', '0.82833473683769', 'puskesmas_longat_jumryf9ch.jpg'),
('lay-kes-Q137K-YfcCF', 'RSU Panyabungan', 'Rumah Sakit', 'Jl. Merdeka No.40', '06:00', '00:00', '[\"Rawat Inap\",\"Kantin\",\"Ruang Besalin\"]', 85, '99.563646012781', '0.86471548596529', 'r_s_u_panyabungan_ktr2vvajz.jpg'),
('lay-kes-qipT3-cJvQF', 'Penyuluhan Kb Batang Natal', 'Balai', 'Ampung Padang', '09:00', '18:00', '[\"Rawat Inap\",\"Kantin\",\"Ruang Besalin\"]', 26, '99.37720829191', '0.7284011015399393', 'balai_penyuluhan_kb_batang_natal_ugtbvwt2s.jpg'),
('lay-kes-qjj5f-pznqt', 'Penyuluhan KB Mompang', 'Balai', 'jl.lintas Sumatra Km.7', '09:00', '21:00', '[\"Rawat Inap\",\"Kantin\",\"Ruang Besalin\"]', 119, '99.535186247247', '0.91022192379934', 'balai_penyuluhan_k_b_mompang_mfbu37svf.jpg'),
('lay-kes-qKprs-njqJD', 'Sibanggor Jae', 'Puskesmas', 'sibanggor jae', '08:00', '22:00', '[\"Rawat Inap\",\"Kantin\",\"Ruang Besalin\"]', 364, '99.577941364097', '0.72688710659897', 'puskesmas_sibanggor_jae_seufd0y0n.jpg'),
('lay-kes-QsmE7-s89TV', 'Gunung Baringin', 'Puskesmas', 'Gn. Baringin', '08:00', '22:00', '[\"Rawat Inap\",\"Kantin\",\"Ruang Besalin\"]', 128, '99.644741347439', '0.8113935689332701', 'puskesmas_g_u_n_u_n_g_b_a_r_i_n_g_i_n_evvuad003.jpg'),
('lay-kes-RBQwW-EwPOE', 'Penyuluhan KB Bukit Malintang', 'Balai', 'Malintang Jae', '09:00', '21:00', '[\"Rawat Inap\",\"Kantin\",\"Ruang Besalin\"]', 56, '99.504918013692', '0.95369569385136', 'balai_penyuluhan_k_b_bukit_malintang_gtvinp9z3.jpg'),
('lay-kes-sA0PI-UB8UH', 'Panyabungan Jae', 'Puskesmas', 'Panyabungan Jae', '06:00', '00:00', '[\"Rawat Inap\",\"Kantin\",\"Ruang Besalin\"]', 79, '99.550789028124', '0.86328692411555', 'puskesmas_panyabungan_jae_kabhpyiji.jpg'),
('lay-kes-si7ms-vnYBb', 'panyabungan', 'Klinik Gigi', 'Jl. Willem Iskandar No.85', '09:00', '21:00', '[\"Rawat Inap\",\"Kantin\",\"Ruang Besalin\"]', 93, '99.562868036348', '0.8564638514731703', 'klinik_dokter_gigi_panyabungan_gnymqkmh1.jpg'),
('lay-kes-SMzTS-UGM9u', 'Penyuluhan Kb Lembah Sorik Marapi', 'Balai', 'Ps. Maga, Kec. Lembah Sorik Marapi', '09:00', '21:00', '[\"Rawat Inap\",\"Kantin\",\"Ruang Besalin\"]', 356, '99.598487378598', '0.73025171726671', 'balai_penyuluhan_kb_lembah_sorik_marapi_tbozi4zx9.jpg'),
('lay-kes-sP7uY-qWipI', 'Penyuluhan Kb Ulu Pungkut', 'Balai', 'Jl. Raya Ulupungkut', '09:00', '21:00', '[\"Rawat Inap\",\"Kantin\",\"Ruang Besalin\"]', 229, '99.765018861692', '0.54237121907812', 'balai_penyuluhan_kb_ulu_pungkut_zgzgicwqv.jpg'),
('lay-kes-SvLqH-C8qsW', 'Penyuluhan Kb Natal', 'Balai', 'Jl. Pendidikan', '09:00', '18:00', '[\"Rawat Inap\",\"Kantin\",\"Ruang Besalin\"]', 286, '99.110767024421', '0.55777970778383', 'balai_penyuluhan_kb_natal_ezppgrd0i.jpg'),
('lay-kes-tqEwm-ccUat', 'Penyuluhan Kb Batahan', 'Balai', 'Ps. Baru Batahan', '09:00', '18:00', '[\"Rawat Inap\",\"Kantin\",\"Ruang Besalin\"]', 14, '99.151467236489', '0.40174901548549', 'balai_penyuluhan_kb_batahan_jlnfh2kj1.jpg'),
('lay-kes-uv8fW-TnFCi', 'Malintang', 'Puskesmas', 'Jl. Trans Sumatera Bukittinggi - Padang Sidempuan No.54', '08:00', '22:00', '[\"Rawat Inap\",\"Kantin\",\"Ruang Besalin\"]', 56, '99.523265238417', '0.95509701780349', 'puskesmas_malintang_1wg1uzl7v.jpg'),
('lay-kes-vvnUo-L0OGY', 'Penyuluhan Kb Puncak Sorik Marapi', 'Balai', 'Jl. Sorik Marapi', '09:00', '21:00', '[\"Rawat Inap\",\"Kantin\",\"Ruang Besalin\"]', 366, '99.575465042322', '0.71065547258405', 'balai_penyuluhan_kb_puncak_sorik_marapi_cicqslksl.jpg'),
('lay-kes-Vyz3S-JK1zy', 'Penyuluhan Kb Tambangan', 'Balai', 'Laru Lombang', '09:00', '21:00', '[\"Rawat Inap\",\"Kantin\",\"Ruang Besalin\"]', 341, '99.624671786431', '0.72932579424113', 'balai_penyuluhan_kb_tambangan_najykg2zb.jpg'),
('lay-kes-wFQfy-IJ6yt', 'Armina Madina', 'Rumah Sakit', 'JL Merdeka, No. 23', '06:00', '00:00', '[\"Rawat Inap\",\"Kantin\",\"Ruang Besalin\"]', 85, '99.562572983945', '0.8650533792468', 'rumah_sakit_umum_armina_madina_zfh7eh1dd.jpg'),
('lay-kes-wJUAo-7Y4hh', 'MuaraSoma', 'Puskesmas', 'Jl. Lintas Natal', '08:00', '22:00', '[\"Rawat Inap\",\"Kantin\",\"Ruang Besalin\"]', 26, '99.369372139765', '0.68965776067218', 'puskesmas_muara_soma_wme6lvm1f.jpg'),
('lay-kes-wMeS4-RYecs', 'Penyuluhan Kb Ranto Baek', 'Balai', 'Manisak', '09:00', '18:00', '[\"Rawat Inap\",\"Kantin\",\"Ruang Besalin\"]', 328, '99.400204278124', '0.52239682982983', 'balai_penyuluhan_kb_ranto_baek_bw1kphguk.jpg'),
('lay-kes-wYy2p-qfcHn', 'Penyuluhan Kb Muarasipongi', 'Balai', 'Jl. Trans Sumatera Bukittinggi - Padang Sidempuan', '09:00', '21:00', '[\"Rawat Inap\",\"Kantin\",\"Ruang Besalin\"]', 247, '99.855845125739', '0.61901122016529', 'balai_penyuluhan_kb_muarasipongi_y3kohmxuy.jpg'),
('lay-kes-xfrEM-tJlKB', 'Penyuluhan Kb Kotanopan', 'Balai', 'JL Muara Soro', '09:00', '21:00', '[\"Rawat Inap\",\"Kantin\",\"Ruang Besalin\"]', 211, '99.713964041616', '0.66413127747346', 'balai_penyuluhan_kb_kotanopan_mot0lqszt.jpg'),
('lay-kes-XKTd8-1h5Rv', 'Penyuluhan Kb Sinunukan', 'Balai', 'Sinunukan IV', '09:00', '18:00', '[\"Rawat Inap\",\"Kantin\",\"Ruang Besalin\"]', 255, '99.212454862466', '0.46651541626393056', 'balai_penyuluhan_kb_sinunukan_p9zu1tkm8.jpg'),
('lay-kes-xnYQd-5WnW8', 'Penyuluhan KB Panyabungan', 'Balai', 'kayu jati', '07:00', '22:00', '[\"Rawat Inap\",\"Kantin\",\"Ruang Besalin\"]', 85, '99.561797772894', '0.86990073012384', 'balai_penyuluhan_k_b_panyabungan_yr4d6szyy.jpg'),
('lay-kes-XZ37j-EQbIw', 'Patiluban Mudik', 'Puskesmas', 'Patiluban Mudik', '08:00', '22:00', '[\"Rawat Inap\",\"Kantin\",\"Ruang Besalin\"]', 289, '99.217555882093', '0.55194133639128', 'puskesmas_patiluban_mudik_oevidel9j.jpg'),
('lay-kes-yue0k-jydZi', 'Penyuluhan Kb Muara Batang Gadis', 'Balai', 'Jl. Pendidikan No.2', '09:00', '18:00', '[\"Rawat Inap\",\"Kantin\",\"Ruang Besalin\"]', 311, '98.925724547226', '1.0839260712964', 'balai_penyuluhan_kb_muara_batang_gadis_at2vpaoj8.jpg'),
('lay-kes-z4mSW-HAUG9', 'Fisioterapi Stroke', 'Klinik', 'Jl. Willem Iskandar', '08:00', '22:00', '[\"Rawat Inap\",\"Ruang Besalin\"]', 101, '99.56213140370254', '0.8447164350632227', 'klinik_fisioterapi_stroke_owk1xjx8l.jpg'),
('lay-kes-ZCSgk-KxoBR', 'Simpang Gambir', 'Puskesmas', 'Simpang Gambir, Lingga Bayu, Lobung', '06:00', '00:00', '[\"Rawat Inap\",\"Kantin\",\"Ruang Besalin\"]', 262, '99.288353741616', '0.61620304601962', 'puskesmas_simpang_gambir_absqkmjr4.jpg'),
('lay-kes-ZNFKT-V4Txi', 'Penyuluhan Kb Panyabungan Barat', 'Balai', 'Kompleks Perkantoran Camat', '09:00', '21:00', '[\"Rawat Inap\",\"Kantin\",\"Ruang Besalin\"]', 158, '99.516380621016', '0.83902290018723', 'balai_penyuluhan_kb_panyabungan_barat_1jrbjrkdz.jpg'),
('lay-kes-zRdGZ-4Phb4', 'Penyuluhan Kb NagaJuang', 'Balai', 'Simanosor. 26.74 km', '09:00', '21:00', '[\"Rawat Inap\",\"Kantin\",\"Ruang Besalin\"]', 376, '99.482621357563', '0.93737527574972', 'balai_penyuluhan_kb_naga_juang_ruq1epbl0.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_06_19_095946_create_kecamatans_table', 1),
(6, '2022_06_19_100321_create_kelurahans_table', 1),
(7, '2022_06_23_155844_create_layanan_kesehatans_table', 1),
(8, '2022_06_27_064648_create_tenaga_medis_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tenaga_medis`
--

CREATE TABLE `tenaga_medis` (
  `id_tenaga_medis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_tenaga_medis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profesi_tenaga_medis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_layanan_kesehatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tenaga_medis`
--

INSERT INTO `tenaga_medis` (`id_tenaga_medis`, `nama_tenaga_medis`, `profesi_tenaga_medis`, `id_layanan_kesehatan`) VALUES
('tenaga-medis-1O2xb-ja6T2', 'SOFIAH FAJAR AYU', 'Dokter', 'lay-kes-QsmE7-s89TV'),
('tenaga-medis-276wF-uUOrL', 'Febrinawati', 'Dokter', 'lay-kes-wJUAo-7Y4hh'),
('tenaga-medis-2AzCK-uyP0x', 'MAHYUNI', 'Dokter', 'lay-kes-iXjO2-0HkGy'),
('tenaga-medis-4Efl4-dzrRY', 'MUHIBBAH NASUTION', 'Dokter', 'lay-kes-ZCSgk-KxoBR'),
('tenaga-medis-4lDVQ-YfF6n', 'LILIS RUSIANI', 'Bidan', 'lay-kes-HSUdc-PKrE7'),
('tenaga-medis-64Vv5-gooID', 'ANDRI ARISTA SURBAKTI', 'Dokter', 'lay-kes-XZ37j-EQbIw'),
('tenaga-medis-6nAUJ-1yVUv', 'RIZKI ARIGAYANI', 'Dokter', 'lay-kes-bhVYD-5Hk2y'),
('tenaga-medis-8V8WY-4MsKb', 'Mesra Riana Lubis', 'Dokter', 'lay-kes-bhVYD-5Hk2y'),
('tenaga-medis-91xYe-t3P88', 'TIKA HAKIKAH', 'DOKTER AHLI PERTAMA', 'lay-kes-H0KDV-XInQN'),
('tenaga-medis-9KGCE-UdbSw', 'M. Nazir Tambunan, Sp.B', 'Dokter', 'lay-kes-Gga8b-wuXzb'),
('tenaga-medis-9PzEl-CiewQ', 'Syafran Halim Harahap, Sp.PD', 'Dokter', 'lay-kes-Q137K-YfcCF'),
('tenaga-medis-a9LoG-rD4BY', 'ADOHANNUR NST', 'Bidan', 'lay-kes-iXjO2-0HkGy'),
('tenaga-medis-afzGj-ucINO', 'Syaida Maysarah Panjaitan', 'Dokter', 'lay-kes-6QBDp-RlDQ8'),
('tenaga-medis-aN9HY-Flmei', 'MAISYAHRANI', 'Dokter', 'lay-kes-HSUdc-PKrE7'),
('tenaga-medis-aqCxN-nMsKa', 'FITRY MAHYUNI HASIBUAN, M.Kes', 'Dokter', 'lay-kes-wFQfy-IJ6yt'),
('tenaga-medis-AQWtR-stiOi', 'Jemiliana Hasibuan,AM.Keb', 'Bidan', 'lay-kes-uv8fW-TnFCi'),
('tenaga-medis-ASUD2-fia5D', 'NANDA PEBRIANI DAULAY', 'Bidan', 'lay-kes-ZCSgk-KxoBR'),
('tenaga-medis-bDq5U-GP8fW', 'Dedy Muhammad Abu Bakar, Sp.PD', 'Dokter', 'lay-kes-Q137K-YfcCF'),
('tenaga-medis-bHUN0-DEvVa', 'SULASTRI DUMARIA LUMBAN RAJA', 'Bidan', 'lay-kes-2acEs-yFWP1'),
('tenaga-medis-blwvO-XbA5b', 'UMMI KALSUM', 'Dokter Gigi', 'lay-kes-uv8fW-TnFCi'),
('tenaga-medis-ccpne-spASk', 'RIANI HARNAS NASUTION', 'Dokter', 'lay-kes-sA0PI-UB8UH'),
('tenaga-medis-CDZ53-6EiYC', 'Ahmad Amsal', 'Dokter', 'lay-kes-wJUAo-7Y4hh'),
('tenaga-medis-cFrTW-dZe7r', 'drg. ADELINA LUBIS', 'Dokter Gigi', 'lay-kes-HSUdc-PKrE7'),
('tenaga-medis-cK1TV-EItLt', 'HOTLINA SIRINGO RINGO', 'Bidan', 'lay-kes-6QBDp-RlDQ8'),
('tenaga-medis-cq1tx-UpEhn', 'Siti Aminah Hasibuan', 'Dokter gigi', 'lay-kes-5QsXE-Jb2Lr'),
('tenaga-medis-d2Fr4-PlWnZ', 'Kholidah, Sp.A', 'Dokter', 'lay-kes-Q137K-YfcCF'),
('tenaga-medis-DjNI2-gtJ4j', 'AMI MASROIDA SIREGAR', 'Dokter', 'lay-kes-KGW8N-jexSu'),
('tenaga-medis-DOS8I-7EDBD', 'LILIK HERAWATI', 'Bidan', 'lay-kes-qKprs-njqJD'),
('tenaga-medis-DQiFj-KrxMW', 'FATIMAH HANNUM NASUTION', 'Perawat', 'lay-kes-3rkjD-hCaMd'),
('tenaga-medis-DvRX7-On8tO', 'ROSWITA DEWI', 'Perawat', 'lay-kes-qKprs-njqJD'),
('tenaga-medis-E9ssg-aiGlg', 'RIDHA FAUZIAH NASUTION', 'Dokter', 'lay-kes-qKprs-njqJD'),
('tenaga-medis-EFqVZ-XKSiv', 'SARMARINTAN SIREGAR', 'Bidan', 'lay-kes-3rkjD-hCaMd'),
('tenaga-medis-F7Z8R-rdPES', 'Afrida Gemma', 'Perawat', 'lay-kes-cNPZB-6kvJJ'),
('tenaga-medis-Fe83P-Sn2si', 'YULIDA NEHRI LUBIS', 'Dokter', 'lay-kes-sA0PI-UB8UH'),
('tenaga-medis-frLKP-7TZY5', 'BAHWIN SIREGAR', 'Perawat', 'lay-kes-3rkjD-hCaMd'),
('tenaga-medis-g80Yv-9jArp', 'EVI MELINDA SARI NST', 'Bidan', 'lay-kes-sA0PI-UB8UH'),
('tenaga-medis-GasJs-MFxCs', 'FATMALA HAYATI', 'Dokter', 'lay-kes-mKN2R-CkATr'),
('tenaga-medis-GlUUL-uBxhg', 'Nuraisyah Khairani Nasution', 'Bidan', 'lay-kes-cNPZB-6kvJJ'),
('tenaga-medis-h1fvi-7e46L', 'Dina Mardiana,AM.Keb', 'Bidan', 'lay-kes-bhVYD-5Hk2y'),
('tenaga-medis-iBcFR-7fWzk', 'LENI ASNITA', 'Bidan', 'lay-kes-H0KDV-XInQN'),
('tenaga-medis-if24M-OaQqY', 'INDRA SAKTI', 'Perawat', 'lay-kes-HSUdc-PKrE7'),
('tenaga-medis-iL3YH-gbX7e', 'ZAITUN EL RUMMAN', 'Bidan', 'lay-kes-HSUdc-PKrE7'),
('tenaga-medis-iNB5q-gE6Za', 'KHOLILAH BATUBARA', 'Dokter', 'lay-kes-XZ37j-EQbIw'),
('tenaga-medis-j43z4-C3Khc', 'Parlindungan Nasution', 'Dokter Gigi', 'lay-kes-aUKGF-rzIV8'),
('tenaga-medis-jMvs6-UrXuO', 'LOKOT ROKYAL AINI', 'Perawat', 'lay-kes-sA0PI-UB8UH'),
('tenaga-medis-jReyb-TxcdA', 'Amalia Harahap', 'Bidan', 'lay-kes-XZ37j-EQbIw'),
('tenaga-medis-jVIGa-p0bjI', 'Faurina Zulfiyanti', 'Dokter', 'lay-kes-uv8fW-TnFCi'),
('tenaga-medis-ltyoZ-j9l9o', 'ERLI SURYANI NST', 'Dokter Gigi', 'lay-kes-E7QMT-f3Oix'),
('tenaga-medis-mhip6-ExDkb', 'H.SYARIFUL', 'Dokter', 'lay-kes-J0Fjm-ujbye'),
('tenaga-medis-mrDMd-MiUq1', 'Mukhsin Abri Harefa', 'Perawat', 'lay-kes-bhVYD-5Hk2y'),
('tenaga-medis-NGIMD-aPebj', 'BADUAMAN TANJUNG', 'Dokter', 'lay-kes-3rkjD-hCaMd'),
('tenaga-medis-NuQqT-mJTNo', 'Lila Efrida', 'Dokter', 'lay-kes-cNPZB-6kvJJ'),
('tenaga-medis-NUwqa-IYaHp', 'AMIRIL MUKMIN SIREGAR', 'Dokter Gigi', 'lay-kes-QsmE7-s89TV'),
('tenaga-medis-o6UVi-RxNn9', 'Eva Santi Lubis', 'Kesehatan Masyarakat', 'lay-kes-XZ37j-EQbIw'),
('tenaga-medis-o7cTR-pxKbu', 'Anni Madia Sari Batubara,AM.Keb', 'Bidan', 'lay-kes-ny9Jb-J0rKc'),
('tenaga-medis-OWdzl-yqCH8', 'EVITA NORA, AM.Keb', 'Bidan', 'lay-kes-oHV2a-mMcq3'),
('tenaga-medis-P2N3q-ZNRly', 'Indah Prianti, Sp.PD.,M.Kes', 'Dokter', 'lay-kes-Gga8b-wuXzb'),
('tenaga-medis-PgKgA-sgemg', 'FAWZHIAH JAMBAK', 'Dokter', 'lay-kes-E7QMT-f3Oix'),
('tenaga-medis-pL8d3-PhCi9', 'RICHA REZKI', 'Dokter', 'lay-kes-ny9Jb-J0rKc'),
('tenaga-medis-pWJQ8-avi5Q', 'MILA RIZKY', 'Ahli Teknologi Laboratorium Medik (Analis Kesehatan)', 'lay-kes-2acEs-yFWP1'),
('tenaga-medis-Q1fan-WzKZf', 'PUTRI INGGRIANI TANJUNG', 'Dokter', 'lay-kes-H2Ets-ELr2I'),
('tenaga-medis-q7Btw-IeEgk', 'Siti Maryam NST,AMK', 'Dokter gigi', 'lay-kes-E7QMT-f3Oix'),
('tenaga-medis-Q94hX-HSBDO', 'Atikah IM Batubara, AM.Keb', 'Bidan', 'lay-kes-mKN2R-CkATr'),
('tenaga-medis-qc1UT-QDr0x', 'Devi Nurhabibah', 'Dokter Gigi', 'lay-kes-si7ms-vnYBb'),
('tenaga-medis-QpLC1-KThar', 'LIYA INDRIYANI', 'Bidan', 'lay-kes-J0Fjm-ujbye'),
('tenaga-medis-RESlj-19obZ', 'AMELIA NASUTION,AMK', 'Perawat', 'lay-kes-uv8fW-TnFCi'),
('tenaga-medis-siGFs-0vMJd', 'MARTIANI PUJIATMIKA', 'Dokter', 'lay-kes-2acEs-yFWP1'),
('tenaga-medis-SVsdq-sm9qe', 'H. Safii Siregar, Sp.OG', 'Dokter', 'lay-kes-Gga8b-wuXzb'),
('tenaga-medis-Tden3-3czia', 'AMRI SITUMORANG', 'Dokter', 'lay-kes-5P277-ksEZH'),
('tenaga-medis-Tl4hb-8xsbQ', 'M RAJAMIN NASUTION, MKT', 'Dokter', 'lay-kes-ZCSgk-KxoBR'),
('tenaga-medis-TUH5q-esQ71', 'Nurmaini rangkuti,Am.Keb', 'Bidan', 'lay-kes-wJUAo-7Y4hh'),
('tenaga-medis-UBExM-U5sjg', 'Irma Seri Hartini,AMK', 'Perawat', 'lay-kes-ny9Jb-J0rKc'),
('tenaga-medis-ugUsK-CCWa7', 'YUNI ELPRIDA NASUTION', 'Bidan', 'lay-kes-H2Ets-ELr2I'),
('tenaga-medis-umobU-ys4bI', 'Afni Sari harahap', 'Bidan', 'lay-kes-wJUAo-7Y4hh'),
('tenaga-medis-vJGtf-lMB2R', 'HABIBAH HANNUM SIREGAR', 'Dokter', 'lay-kes-HSUdc-PKrE7'),
('tenaga-medis-VSGF3-8xs8M', 'Juang Usman Rangkuti, Sp.PD', 'Dokter', 'lay-kes-Q137K-YfcCF'),
('tenaga-medis-vYVvO-jmSLG', 'Bidasari Siregar', 'Dokter Gigi', 'lay-kes-si7ms-vnYBb'),
('tenaga-medis-wcxoh-FtMno', 'Ns. WINDA MORANI LUBIS, S.Kep', 'Perawat', 'lay-kes-oHV2a-mMcq3'),
('tenaga-medis-whkTu-ERkwH', 'MUHAMMAD RIZQI NASUTION', 'Dokter', 'lay-kes-HSUdc-PKrE7'),
('tenaga-medis-WlWyM-mScHx', 'Rani Sari,AM.Keb', 'Perawat', 'lay-kes-E7QMT-f3Oix'),
('tenaga-medis-Wp3eA-9j6Jk', 'LUFTI', 'Perawat', 'lay-kes-5P277-ksEZH'),
('tenaga-medis-wQ1wT-3a3n0', 'HASMAR ARIFIN', 'Perawat', 'lay-kes-KGW8N-jexSu'),
('tenaga-medis-xD6n7-pwYOu', 'Erly Melina Nasution', 'Dokter Gigi', 'lay-kes-ny9Jb-J0rKc'),
('tenaga-medis-xeOL1-DlhTK', 'Elly Susanti Siregar', 'Dokter', 'lay-kes-cNPZB-6kvJJ'),
('tenaga-medis-xHkSg-Xf1os', 'WINDA WAHYUNI', 'Dokter', 'lay-kes-oHV2a-mMcq3'),
('tenaga-medis-XLJGj-PTcgv', 'Faisal Situmorang', 'Dokter', 'lay-kes-NGe4l-2s3RB'),
('tenaga-medis-xPhzP-saqED', 'NURHASANAH NASUTION', 'Dokter', 'lay-kes-3rkjD-hCaMd'),
('tenaga-medis-XTlFK-tFP4q', 'KHAIRUL IHSAN SIREGAR', 'Dokter', 'lay-kes-H2Ets-ELr2I'),
('tenaga-medis-XvNdb-kJShF', 'Syarifah Lubis', 'Dokter', 'lay-kes-ny9Jb-J0rKc'),
('tenaga-medis-XwXin-awRhl', 'juraidah', 'Dokter Gigi', 'lay-kes-mNnvj-tZvAM'),
('tenaga-medis-y3n3t-7xnEu', 'RIZKA MALISA SINAGA', 'Dokter Gigi', 'lay-kes-cNPZB-6kvJJ'),
('tenaga-medis-YBFCP-jZdt0', 'SYARIFAH AINI RAY', 'Perawat', 'lay-kes-6QBDp-RlDQ8'),
('tenaga-medis-yeXsI-ZfBpl', 'ANISAH', 'Bidan', 'lay-kes-H2Ets-ELr2I'),
('tenaga-medis-yzi9R-Pgu7v', 'LIA SILVANA, AM.Keb', 'Bidan', 'lay-kes-5P277-ksEZH'),
('tenaga-medis-YZrzw-bhqbn', 'ANWAR FADLY HARAHAP', 'Dokter', 'lay-kes-KGW8N-jexSu'),
('tenaga-medis-zPW2U-iLSWI', 'ADELINA', 'Dokter', 'lay-kes-6QBDp-RlDQ8');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'sekretaris', 'sekretaris', '$2y$10$5dkI2XyahsybZvkpy6ammOeyRcMr4QsEDtAlxiG0ECpG.8TjzvOS.', NULL, '2022-07-04 11:57:05', '2022-07-04 11:57:05');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `kecamatans`
--
ALTER TABLE `kecamatans`
  ADD PRIMARY KEY (`id_kecamatan`);

--
-- Indeks untuk tabel `kelurahans`
--
ALTER TABLE `kelurahans`
  ADD PRIMARY KEY (`id_kelurahan`),
  ADD KEY `kelurahans_id_kecamatan_foreign` (`id_kecamatan`);

--
-- Indeks untuk tabel `layanan_kesehatans`
--
ALTER TABLE `layanan_kesehatans`
  ADD PRIMARY KEY (`id_layanan_kesehatan`),
  ADD KEY `layanan_kesehatans_id_kelurahan_foreign` (`id_kelurahan`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `tenaga_medis`
--
ALTER TABLE `tenaga_medis`
  ADD PRIMARY KEY (`id_tenaga_medis`),
  ADD KEY `tenaga_medis_id_layanan_kesehatan_foreign` (`id_layanan_kesehatan`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kecamatans`
--
ALTER TABLE `kecamatans`
  MODIFY `id_kecamatan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `kelurahans`
--
ALTER TABLE `kelurahans`
  MODIFY `id_kelurahan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=381;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `kelurahans`
--
ALTER TABLE `kelurahans`
  ADD CONSTRAINT `kelurahans_id_kecamatan_foreign` FOREIGN KEY (`id_kecamatan`) REFERENCES `kecamatans` (`id_kecamatan`);

--
-- Ketidakleluasaan untuk tabel `layanan_kesehatans`
--
ALTER TABLE `layanan_kesehatans`
  ADD CONSTRAINT `layanan_kesehatans_id_kelurahan_foreign` FOREIGN KEY (`id_kelurahan`) REFERENCES `kelurahans` (`id_kelurahan`);

--
-- Ketidakleluasaan untuk tabel `tenaga_medis`
--
ALTER TABLE `tenaga_medis`
  ADD CONSTRAINT `tenaga_medis_id_layanan_kesehatan_foreign` FOREIGN KEY (`id_layanan_kesehatan`) REFERENCES `layanan_kesehatans` (`id_layanan_kesehatan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
