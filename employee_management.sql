-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 07 Jul 2024 pada 12.33
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employee_management`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `departments`
--

INSERT INTO `departments` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Product', '2024-07-06 23:44:23', '2024-07-06 23:44:23'),
(2, 'Operasional', '2024-07-06 23:44:32', '2024-07-06 23:44:32'),
(5, 'Data', '2024-07-07 03:26:08', '2024-07-07 03:26:08'),
(8, 'Finance', '2024-07-07 03:27:48', '2024-07-07 03:27:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nomor_induk` varchar(255) NOT NULL,
  `nama_karyawan` varchar(255) NOT NULL,
  `no_ktp` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `tempat_lahir` varchar(255) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `no_telepon` varchar(255) DEFAULT NULL,
  `jenis_kelamin` varchar(255) DEFAULT NULL,
  `agama` varchar(255) DEFAULT NULL,
  `status_pernikahan` varchar(255) DEFAULT NULL,
  `jenjang_pendidikan` varchar(255) DEFAULT NULL,
  `tahun_lulus` varchar(255) DEFAULT NULL,
  `tahun_bergabung` varchar(255) DEFAULT NULL,
  `lama_bekerja` int(11) DEFAULT NULL,
  `status_karyawan` varchar(255) DEFAULT NULL,
  `department_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `employees`
--

INSERT INTO `employees` (`id`, `nomor_induk`, `nama_karyawan`, `no_ktp`, `alamat`, `tempat_lahir`, `tanggal_lahir`, `no_telepon`, `jenis_kelamin`, `agama`, `status_pernikahan`, `jenjang_pendidikan`, `tahun_lulus`, `tahun_bergabung`, `lama_bekerja`, `status_karyawan`, `department_id`, `created_at`, `updated_at`) VALUES
(4, '4638525067', 'Warta Sinaga', '1190600753845638', 'Ds. Baja Raya No. 697, Singkawang 12671, Sultra', 'Batam', '2005-01-21', '087129787287', 'Laki-laki', 'Katholik', 'Cerai Hidup', 'D3/D4', '1985', '2013', 423, 'Tetap', 1, '2024-07-07 00:58:21', '2024-07-07 03:13:55'),
(6, '4962686539', 'Oskar Kuswoyo', '8918463303003092', 'Jln. Industri No. 960, Padangpanjang 26154, Jabar', 'Semarang', '1986-11-14', '084490096964', 'Perempuan', 'Islam', 'Belum Kawin', 'S1', '2002', '1964', 192, 'Tetap', 1, '2024-07-07 00:58:21', '2024-07-07 03:14:06'),
(9, '5979164490', 'Karna Daliono Samosir', '7532862556591282', 'Jln. Bazuka Raya No. 142, Depok 24155, Pabar', 'Banda Aceh', '1989-10-26', '086303331793', 'Perempuan', 'Katholik', 'Kawin', 'S1', '1997', '2019', 167, 'Magang', 1, '2024-07-07 00:58:21', '2024-07-07 03:14:15'),
(12, '9724547996', 'Hamima Oni Farida', '4393632858168831', 'Ki. Ciwastra No. 921, Kotamobagu 44965, Kalteng', 'Sungai Penuh', '1994-10-12', '084027104885', 'Perempuan', 'Islam', 'Cerai Mati', 'SMA/SMK', '1992', '2003', 344, 'Tetap', 2, '2024-07-07 00:58:21', '2024-07-07 03:14:34'),
(13, '1865556558', 'Eko Aslijan Tamba S.Kom', '9413453217368621', 'Dk. Babakan No. 686, Bandar Lampung 31551, Pabar', 'Dumai', '1987-12-11', '085429341049', 'Perempuan', 'Katholik', 'Cerai Mati', 'SMP', '1993', '1986', 289, 'Kontrak', 2, '2024-07-07 00:58:21', '2024-07-07 03:04:59'),
(14, '7032518965', 'Sarah Wahyuni', '0812915028239812', 'Jln. Katamso No. 635, Tasikmalaya 63036, Kepri', 'Cirebon', '1989-09-03', '084040239695', 'Perempuan', 'Kristen', 'Kawin', 'S1', '1992', '2003', 476, 'Magang', 2, '2024-07-07 00:58:21', '2024-07-07 03:14:44'),
(15, '8405247572', 'Kamila Winarsih', '476593072905255', 'Gg. Yos Sudarso No. 132, Pangkal Pinang 43214, Riau', 'Manado', '1985-10-25', '088952180028', 'Laki-laki', 'Budha', 'Cerai Mati', 'S1', '1967', '1973', 220, 'Kontrak', 1, '2024-07-07 00:58:21', '2024-07-07 00:58:21'),
(16, '8795607242', 'Raisa Mandasari', '4803325019263911', 'Jr. Gegerkalong Hilir No. 836, Ambon 89727, Sulteng', 'Bengkulu', '1995-02-03', '084682161005', 'Laki-laki', 'Hindu', 'Belum Kawin', 'SMA/SMK', '1999', '1972', 223, 'Magang', 5, '2024-07-07 00:58:21', '2024-07-07 03:30:17'),
(17, '0302793412', 'Marsudi Prayoga', '1821265923000701', 'Jr. Madrasah No. 652, Tual 58681, Kaltim', 'Cimahi', '1988-04-20', '080105878909', 'Perempuan', 'Budha', 'Kawin', 'S1', '1979', '1988', 110, 'Kontrak', 2, '2024-07-07 00:58:21', '2024-07-07 03:15:04'),
(18, '5633164273', 'Dina Pertiwi', '7875189235800112', 'Gg. Acordion No. 976, Samarinda 79237, Papua', 'Salatiga', '1987-03-21', '085899526580', 'Laki-laki', 'Kristen', 'Cerai Mati', 'S1', '1968', '2015', 464, 'Magang', 1, '2024-07-07 00:58:21', '2024-07-07 03:13:43'),
(19, '8422001328', 'Lidya Raisa Sudiati S.Ked', '663203404351920', 'Ki. Dewi Sartika No. 623, Bandar Lampung 56118, Babel', 'Makassar', '2005-01-20', '086117968530', 'Laki-laki', 'Budha', 'Kawin', 'SMP', '1989', '1971', 168, 'Kontrak', 1, '2024-07-07 00:58:21', '2024-07-07 00:58:21'),
(20, '0860273650', 'Gaduh Eka Prabowo', '459702862090811', 'Jln. Acordion No. 18, Bekasi 53073, Jateng', 'Palembang', '1982-09-11', '083591049549', 'Perempuan', 'Hindu', 'Cerai Mati', 'S3', '1978', '2008', 266, 'Magang', 1, '2024-07-07 00:58:21', '2024-07-07 00:58:21'),
(21, '9613056012', 'Salsabila Kani Wijayanti S.Sos', '792220534730523', 'Ds. Industri No. 402, Tanjung Pinang 78211, Kaltara', 'Magelang', '2005-11-30', '087519903642', 'Laki-laki', 'Konghuchu', 'Cerai Mati', 'S2', '2005', '1980', 441, 'Kontrak', 2, '2024-07-07 00:58:21', '2024-07-07 00:58:21'),
(22, '4264533344', 'Adiarja Prasetyo', '754490926336978', 'Psr. Mulyadi No. 402, Depok 11328, Pabar', 'Prabumulih', '1994-11-20', '082398286615', 'Perempuan', 'Budha', 'Cerai Mati', 'D3/D4', '1973', '1989', 260, 'Kontrak', 2, '2024-07-07 00:58:21', '2024-07-07 00:58:21'),
(23, '6914450928', 'Mutia Namaga', '489448727666846', 'Jln. Pelajar Pejuang 45 No. 101, Pematangsiantar 43630, Kalteng', 'Palu', '1982-04-19', '087780679037', 'Perempuan', 'Konghuchu', 'Kawin', 'S3', '1965', '1978', 396, 'Magang', 2, '2024-07-07 00:58:21', '2024-07-07 00:58:21'),
(24, '8717337622', 'Puput Padma Novitasari M.Farm', '839993982851103', 'Jr. Bagis Utama No. 562, Kediri 64140, NTB', 'Lubuklinggau', '1984-07-28', '080032598502', 'Laki-laki', 'Katholik', 'Belum Kawin', 'S3', '2000', '1997', 293, 'Magang', 1, '2024-07-07 00:58:21', '2024-07-07 00:58:21'),
(25, '4287880786', 'Kamaria Belinda Agustina S.IP', '137884191907473', 'Kpg. Batako No. 79, Bandar Lampung 28904, Gorontalo', 'Banda Aceh', '1970-07-04', '088869771556', 'Perempuan', 'Konghuchu', 'Cerai Hidup', 'SMP', '1991', '1961', 143, 'Kontrak', 1, '2024-07-07 00:58:21', '2024-07-07 00:58:21'),
(26, '8500249714', 'Panji Sinaga', '984365798952059', 'Ki. Cikutra Barat No. 335, Jayapura 42327, Kalteng', 'Parepare', '1985-09-21', '086990212939', 'Perempuan', 'Islam', 'Belum Kawin', 'S2', '1977', '1972', 100, 'Magang', 2, '2024-07-07 00:58:21', '2024-07-07 00:58:21'),
(27, '2204507221', 'Juli Amalia Nuraini S.IP', '627847131623090', 'Dk. Tentara Pelajar No. 135, Palembang 76009, Pabar', 'Administrasi Jakarta Barat', '1983-10-19', '083280118256', 'Perempuan', 'Islam', 'Cerai Hidup', 'S3', '1969', '1961', 118, 'Tetap', 1, '2024-07-07 00:58:21', '2024-07-07 00:58:21'),
(28, '8460813638', 'Eli Hasanah S.Farm', '632774251784112', 'Dk. Wahidin Sudirohusodo No. 53, Batu 76847, Jabar', 'Bontang', '1994-10-06', '082855948669', 'Perempuan', 'Kristen', 'Belum Kawin', 'SMP', '1961', '1961', 28, 'Tetap', 2, '2024-07-07 00:58:21', '2024-07-07 00:58:21'),
(29, '1221443051', 'Laswi Tarihoran', '567364689196704', 'Gg. Jayawijaya No. 366, Sukabumi 83639, Sulteng', 'Padangsidempuan', '1999-01-14', '085185484598', 'Laki-laki', 'Katholik', 'Kawin', 'SD', '1976', '2013', 440, 'Kontrak', 1, '2024-07-07 00:58:21', '2024-07-07 00:58:21'),
(30, '4390829531', 'Raisa Hassanah', '861692080048874', 'Dk. Reksoninten No. 114, Kupang 69983, Sulut', 'Bima', '1971-07-27', '088383426119', 'Perempuan', 'Hindu', 'Belum Kawin', 'S1', '1992', '2006', 408, 'Tetap', 1, '2024-07-07 00:58:21', '2024-07-07 00:58:21'),
(31, '0375174091', 'Ilsa Puput Andriani', '813875403919065', 'Ki. Baladewa No. 752, Kupang 60568, Jatim', 'Pontianak', '1989-09-09', '082500738234', 'Laki-laki', 'Budha', 'Cerai Hidup', 'S3', '1993', '1969', 267, 'Kontrak', 2, '2024-07-07 00:58:21', '2024-07-07 00:58:21'),
(32, '3894723917', 'Keisha Riyanti', '552474569353012', 'Dk. Eka No. 302, Tidore Kepulauan 60361, DKI', 'Banjarbaru', '1975-06-27', '080279301332', 'Laki-laki', 'Budha', 'Kawin', 'SMA/SMK', '1989', '2013', 297, 'Kontrak', 2, '2024-07-07 00:58:21', '2024-07-07 00:58:21'),
(33, '6532895945', 'Baktiadi Mulya Dabukke S.IP', '133126499975932', 'Dk. Mahakam No. 737, Tanjung Pinang 59501, Kalteng', 'Sorong', '2006-09-19', '089470146839', 'Perempuan', 'Budha', 'Belum Kawin', 'D3/D4', '1960', '1999', 254, 'Kontrak', 1, '2024-07-07 00:58:21', '2024-07-07 00:58:21'),
(35, '5239272920', 'Hasna Yulianti', '971299249028703', 'Jln. Qrisdoren No. 378, Pematangsiantar 35799, Banten', 'Lhokseumawe', '1970-11-08', '081817827950', 'Laki-laki', 'Katholik', 'Cerai Hidup', 'S2', '1971', '1993', 265, 'Kontrak', 1, '2024-07-07 00:58:21', '2024-07-07 00:58:21'),
(36, '1369197590', 'Hasim Damanik', '587722582218823', 'Jr. Untung Suropati No. 800, Ambon 47782, Kalsel', 'Payakumbuh', '2003-07-24', '085402194312', 'Laki-laki', 'Konghuchu', 'Cerai Mati', 'SD', '1980', '2016', 3, 'Kontrak', 2, '2024-07-07 00:58:21', '2024-07-07 00:58:21'),
(37, '1623941457', 'Icha Jasmin Lailasari', '387412860801047', 'Kpg. Basudewo No. 725, Kupang 76032, Bali', 'Parepare', '1973-04-14', '083518314117', 'Perempuan', 'Hindu', 'Kawin', 'SD', '2004', '1987', 43, 'Tetap', 1, '2024-07-07 00:58:21', '2024-07-07 00:58:21'),
(38, '0627275700', 'Lamar Nashiruddin S.Ked', '954697805889080', 'Ds. Wahidin No. 402, Batu 16724, DKI', 'Banjarbaru', '1979-09-10', '084486448278', 'Perempuan', 'Budha', 'Kawin', 'S1', '1979', '2017', 216, 'Tetap', 1, '2024-07-07 00:58:21', '2024-07-07 00:58:21'),
(39, '5117805135', 'Belinda Farhunnisa Lestari', '042408624118244', 'Kpg. Baabur Royan No. 871, Kediri 39923, Babel', 'Cimahi', '1984-06-18', '082301629231', 'Perempuan', 'Hindu', 'Kawin', 'S1', '1977', '2010', 318, 'Magang', 2, '2024-07-07 00:58:21', '2024-07-07 00:58:21'),
(40, '8515659510', 'Rahman Habibi', '047766941291478', 'Ds. Bakit  No. 628, Banjarbaru 36430, Papua', 'Kotamobagu', '2000-06-21', '085101499964', 'Laki-laki', 'Islam', 'Cerai Mati', 'D3/D4', '1987', '2005', 114, 'Magang', 1, '2024-07-07 00:58:21', '2024-07-07 00:58:21'),
(41, '5617255205', 'Edward Raharja Jailani S.Sos', '047401863694061', 'Ki. Baik No. 555, Sabang 86874, Kalbar', 'Surabaya', '1997-11-25', '084258292619', 'Perempuan', 'Budha', 'Belum Kawin', 'S3', '1971', '2005', 183, 'Kontrak', 1, '2024-07-07 00:58:21', '2024-07-07 00:58:21'),
(42, '6934605610', 'Upik Panji Saputra S.Psi', '637219008006644', 'Ds. Barasak No. 711, Pariaman 97460, Sumbar', 'Bima', '1977-08-04', '080716984331', 'Perempuan', 'Konghuchu', 'Kawin', 'SD', '1965', '1989', 444, 'Kontrak', 1, '2024-07-07 00:58:21', '2024-07-07 00:58:21'),
(43, '0191217614', 'Capa Sidiq Natsir S.Gz', '095132840847152', 'Ki. Sampangan No. 544, Cimahi 54229, Bali', 'Yogyakarta', '1987-05-26', '086771312458', 'Laki-laki', 'Hindu', 'Belum Kawin', 'S3', '1982', '2020', 401, 'Kontrak', 2, '2024-07-07 00:58:21', '2024-07-07 00:58:21'),
(44, '4253049202', 'Kunthara Simanjuntak', '189610292756605', 'Ds. Gremet No. 343, Lubuklinggau 31523, Lampung', 'Bitung', '1972-11-26', '085843397543', 'Laki-laki', 'Budha', 'Kawin', 'S2', '1964', '1995', 303, 'Magang', 2, '2024-07-07 00:58:21', '2024-07-07 00:58:21'),
(45, '7536772026', 'Syahrini Jasmin Pertiwi', '509654569703155', 'Psr. Radio No. 880, Pontianak 40077, Malut', 'Tual', '1995-09-22', '082025988635', 'Perempuan', 'Budha', 'Kawin', 'SD', '1964', '1963', 233, 'Tetap', 1, '2024-07-07 00:58:21', '2024-07-07 00:58:21'),
(46, '4564747563', 'Nalar Latupono', '145827825982453', 'Jr. Padang No. 924, Sabang 12350, Sultra', 'Samarinda', '1989-08-21', '083967553330', 'Laki-laki', 'Budha', 'Cerai Hidup', 'S2', '2003', '2011', 316, 'Kontrak', 2, '2024-07-07 00:58:21', '2024-07-07 00:58:21'),
(47, '4704375781', 'Wisnu Utama', '771015722829945', 'Ds. Kusmanto No. 867, Bogor 11363, NTT', 'Tangerang Selatan', '1973-12-29', '083708776828', 'Perempuan', 'Islam', 'Belum Kawin', 'SD', '1998', '1967', 399, 'Kontrak', 2, '2024-07-07 00:58:21', '2024-07-07 00:58:21'),
(48, '5224023752', 'Julia Wahyuni', '609464986177830', 'Jr. Achmad Yani No. 164, Medan 28262, Sumsel', 'Cirebon', '1986-09-24', '083314106877', 'Laki-laki', 'Katholik', 'Kawin', 'S1', '1971', '1965', 41, 'Tetap', 1, '2024-07-07 00:58:21', '2024-07-07 00:58:21'),
(49, '0475400748', 'Alika Novitasari', '574343332984450', 'Kpg. Bayan No. 498, Makassar 97772, Sulteng', 'Magelang', '1981-06-07', '082185943493', 'Laki-laki', 'Islam', 'Belum Kawin', 'S1', '1981', '1997', 476, 'Kontrak', 2, '2024-07-07 00:58:21', '2024-07-07 00:58:21'),
(50, '4664552406', 'Endra Wibisono S.Psi', '387425356687238', 'Gg. Sentot Alibasa No. 498, Bau-Bau 11119, Lampung', 'Sawahlunto', '1989-09-11', '081132014376', 'Laki-laki', 'Budha', 'Cerai Hidup', 'SMA/SMK', '1972', '1963', 179, 'Magang', 1, '2024-07-07 00:58:21', '2024-07-07 00:58:21'),
(51, '8743623823', 'Cakrawala Kawaca Mustofa', '097196722634141', 'Psr. Hasanuddin No. 748, Tebing Tinggi 66690, Sulut', 'Yogyakarta', '1989-09-16', '089684556280', 'Laki-laki', 'Budha', 'Belum Kawin', 'SD', '1974', '2001', 443, 'Tetap', 1, '2024-07-07 00:58:21', '2024-07-07 00:58:21'),
(52, '3519766214', 'Lamar Galur Setiawan S.Kom', '984607518887548', 'Jr. Tentara Pelajar No. 55, Singkawang 56708, Jatim', 'Semarang', '1978-06-12', '089498210064', 'Perempuan', 'Konghuchu', 'Cerai Mati', 'SMP', '1992', '1998', 120, 'Kontrak', 2, '2024-07-07 00:58:21', '2024-07-07 00:58:21'),
(53, '0935774585', 'Yance Rahayu', '712357920596978', 'Jr. Zamrud No. 216, Serang 87358, DKI', 'Tual', '1985-08-29', '085452026897', 'Perempuan', 'Hindu', 'Kawin', 'S1', '1993', '2007', 463, 'Tetap', 1, '2024-07-07 00:58:21', '2024-07-07 00:58:21'),
(54, '65654565456', 'Ayas', '8765678987678987', 'Bandung', 'Bandung', '2006-12-07', '76567765678', 'Laki-laki', 'Islam', 'Belum Kawin', 'SD', '2002', '2004', 2, 'Tetap', 2, '2024-07-07 02:50:24', '2024-07-07 02:50:24'),
(55, '282882888', 'Sakha Aditya', '8765678987656789', 'Cimahi', 'Bandung', '2006-11-30', '876567876567876', 'Laki-laki', 'Islam', 'Belum Kawin', 'SD', '2020', '2020', 2, 'Tetap', 5, '2024-07-07 03:33:22', '2024-07-07 03:33:22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_07_06_051431_create_employees_table', 1),
(5, '2024_07_06_082602_update_employees', 2),
(6, '2024_07_06_083623_empolyees_table', 3),
(7, '2024_07_07_055847_create_departments_table', 4),
(8, '2024_07_07_055911_create_employee_table', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('hiG6BKtCV4XDWMDtgvbNVqmmwrUJvvkL7wn6VltV', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiT1B3dTdHQ2dUeFVIanB3TFl5aG1UWGRzTXhTT0ZwTTk3ZTlYZFdrUSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9lbXBsb3llZXMiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1720348411);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@example.com', NULL, '$2y$12$aTDdKQzCGa2BwRHb588BJO9Qy2VhrNakBHYEA44WJFJUDmQb3cFMK', 'xLXNhVwVMJZSlN3OYmXX7cV6aa3xrx6Mu4lHnhzTgJE2WOGWzR1httpZCxNs', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `departments_name_unique` (`name`);

--
-- Indeks untuk tabel `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `employees_nomor_induk_unique` (`nomor_induk`),
  ADD KEY `employees_department_id_foreign` (`department_id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indeks untuk tabel `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
