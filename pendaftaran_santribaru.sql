-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 26, 2024 at 10:28 PM
-- Server version: 8.0.30
-- PHP Version: 8.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pendaftaran_santribaru`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `ID_Admin` int NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`ID_Admin`, `Nama`, `Username`, `Email`, `Password`) VALUES
(2, 'Firky', 'Firky', 'firkypribadi@gmail.com', '$2y$12$hUbsUUmJpFxu//aHXi3ADOFpQeLc58.JzgM.P0wW9qsYkocGPfI/e'),
(3, 'Ari', 'Ari', 'Ari@gmail.com', '$2y$12$bxFahT.eMovoD.80vrqdp.O0R2dcjH97eG0CeocQ.FFC8qFkqIqoC'),
(6, 'Nanda', 'Nanda', '2218049@scholar.itn.ac.id', '$2y$12$76hkQIkujj464CRRwpwWxevchO0vYt7Hqht725PQyurK7ME/yKw6C');

-- --------------------------------------------------------

--
-- Table structure for table `biaya_penerimaan`
--

CREATE TABLE `biaya_penerimaan` (
  `ID_Biaya_Penerimaan` char(10) NOT NULL,
  `ID_Calon_Santri` char(10) NOT NULL,
  `Jenis_Pembayaran` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Biaya` int NOT NULL,
  `Deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `biaya_penerimaan`
--

INSERT INTO `biaya_penerimaan` (`ID_Biaya_Penerimaan`, `ID_Calon_Santri`, `Jenis_Pembayaran`, `Biaya`, `Deskripsi`) VALUES
('BP001', 'CS001', 'Pembayaran Awal', 1000000, 'Pembayaran Awal Masuk Pondok'),
('BP002', 'CS001', 'Pembayaran Ujian', 1000000, 'Pembayaran Keperluan Ujian');

-- --------------------------------------------------------

--
-- Table structure for table `biaya_pondok`
--

CREATE TABLE `biaya_pondok` (
  `ID_Biaya_Pondok` char(10) NOT NULL,
  `ID_Santri` char(10) NOT NULL,
  `Nama_Biaya` varchar(100) NOT NULL,
  `Jenis_Biaya` varchar(100) NOT NULL,
  `Deskripsi` varchar(255) NOT NULL,
  `Total_Biaya` int NOT NULL,
  `Tanggal_Berlaku` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `biaya_pondok`
--

INSERT INTO `biaya_pondok` (`ID_Biaya_Pondok`, `ID_Santri`, `Nama_Biaya`, `Jenis_Biaya`, `Deskripsi`, `Total_Biaya`, `Tanggal_Berlaku`) VALUES
('BP002', 'S001', 'Seragam', 'Kebutuhan Wajib', 'Pembayaran Seragam 3 Biji', 150000, '2024-05-27');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `calon_santri`
--

CREATE TABLE `calon_santri` (
  `ID_Calon_Santri` char(10) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `Tempat_Tanggal_Lahir` varchar(255) NOT NULL,
  `Jenis_Kelamin` enum('Laki-Laki','Perempuan') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Alamat_Rumah` varchar(100) NOT NULL,
  `No_Telepon` char(15) NOT NULL,
  `ID_Pendaftaran` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `calon_santri`
--

INSERT INTO `calon_santri` (`ID_Calon_Santri`, `Nama`, `Tempat_Tanggal_Lahir`, `Jenis_Kelamin`, `Alamat_Rumah`, `No_Telepon`, `ID_Pendaftaran`) VALUES
('CS001', 'Kiki', 'Malang 20 July 2002', 'Perempuan', 'Singosari', '082340721234', 'PE001'),
('CS002', 'Firky', 'Malang 20 July 2001', 'Laki-Laki', 'Singosari', '082340721234', 'PD002');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hasil_ujian`
--

CREATE TABLE `hasil_ujian` (
  `ID_Hasil_Ujian` char(10) NOT NULL,
  `ID_Pelaksanaan_Ujian` char(10) NOT NULL,
  `ID_Calon_Santri` char(10) NOT NULL,
  `Jumlah_Soal` char(10) NOT NULL,
  `Waktu_Selesai` time NOT NULL,
  `Nilai_Akhir` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `hasil_ujian`
--

INSERT INTO `hasil_ujian` (`ID_Hasil_Ujian`, `ID_Pelaksanaan_Ujian`, `ID_Calon_Santri`, `Jumlah_Soal`, `Waktu_Selesai`, `Nilai_Akhir`) VALUES
('HU001', 'P003', 'CS002', '20', '20:46:00', 80);

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `ID_Kelas` char(10) NOT NULL,
  `Level_Kelas` char(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Kapasitas_Kelas` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`ID_Kelas`, `Level_Kelas`, `Kapasitas_Kelas`) VALUES
('K001', 'Ibtidayiyah 5', '23'),
('K006', 'Ibtidayiyah 4', '30');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_05_25_002753_create_pelaksanaan_ujians_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `nilai_ujian_masuk`
--

CREATE TABLE `nilai_ujian_masuk` (
  `ID_Nilai_Ujian_Masuk` char(10) NOT NULL,
  `ID_Calon_Santri` char(10) NOT NULL,
  `ID_Pelaksanaan_Ujian` char(10) NOT NULL,
  `Nilai_Ujian_Masuk` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pelaksanaan_ujians`
--

CREATE TABLE `pelaksanaan_ujians` (
  `ID_Pelaksanaan_Ujian` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tanggal_Ujian` date NOT NULL,
  `Jenis_Ujian` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Waktu_Mulai` time NOT NULL,
  `Durasi_Ujian` time NOT NULL,
  `Nilai_Minimum` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pelaksanaan_ujians`
--

INSERT INTO `pelaksanaan_ujians` (`ID_Pelaksanaan_Ujian`, `Tanggal_Ujian`, `Jenis_Ujian`, `Waktu_Mulai`, `Durasi_Ujian`, `Nilai_Minimum`) VALUES
('P003', '2024-05-29', 'Esai', '18:00:00', '02:30:00', 75);

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `ID_Pembayaran` char(10) NOT NULL,
  `ID_Biaya_Penerimaan` char(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `ID_Biaya_Pondok` char(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Tanggal_Pembayaran` date NOT NULL,
  `Jenis_Pembayaran` enum('Tunai','Non-Tunai') NOT NULL,
  `Status_Pembayaran` enum('Lunas','Diproses') NOT NULL,
  `Petugas_Pembayaran` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`ID_Pembayaran`, `ID_Biaya_Penerimaan`, `ID_Biaya_Pondok`, `Tanggal_Pembayaran`, `Jenis_Pembayaran`, `Status_Pembayaran`, `Petugas_Pembayaran`) VALUES
('P0001', 'BP001', 'BP002', '2024-05-27', 'Tunai', 'Lunas', 'Habbul Masakin');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `ID_Pendaftaran` char(10) NOT NULL,
  `Tanggal_Pendaftaran` date NOT NULL,
  `Status_Pendaftaran` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`ID_Pendaftaran`, `Tanggal_Pendaftaran`, `Status_Pendaftaran`) VALUES
('PD002', '2024-05-24', 'Pindahan'),
('PD003', '2024-05-16', 'Pindahan'),
('PE001', '2024-05-18', 'Baru');

-- --------------------------------------------------------

--
-- Table structure for table `pendidikan_terakhir`
--

CREATE TABLE `pendidikan_terakhir` (
  `ID_Pendidikan` char(10) NOT NULL,
  `Tingkatan_Pendidikan` varchar(50) NOT NULL,
  `Nama_Sekolah` varchar(200) NOT NULL,
  `Tahun_Lulus_Sekolah` year NOT NULL,
  `Pendidikan_Non_Formal` varchar(200) NOT NULL,
  `Tahun_Lulus` char(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `ID_Calon_Santri` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pendidikan_terakhir`
--

INSERT INTO `pendidikan_terakhir` (`ID_Pendidikan`, `Tingkatan_Pendidikan`, `Nama_Sekolah`, `Tahun_Lulus_Sekolah`, `Pendidikan_Non_Formal`, `Tahun_Lulus`, `ID_Calon_Santri`) VALUES
('PT001', 'SD', 'Almaaarif 01 Lawang', 2021, '-', '-', 'CS001');

-- --------------------------------------------------------

--
-- Table structure for table `pengunduran_diri`
--

CREATE TABLE `pengunduran_diri` (
  `ID_Pengunduran_Diri` char(10) NOT NULL,
  `ID_Santri` char(10) NOT NULL,
  `Tanggal_Pengunduran` date NOT NULL,
  `Alasan_Pengunduran` varchar(100) NOT NULL,
  `Keterangan` varchar(255) NOT NULL,
  `Status_Pengunduran` enum('Diterima','Diproses','Ditolak') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pengunduran_diri`
--

INSERT INTO `pengunduran_diri` (`ID_Pengunduran_Diri`, `ID_Santri`, `Tanggal_Pengunduran`, `Alasan_Pengunduran`, `Keterangan`, `Status_Pengunduran`) VALUES
('PD001', 'S001', '2024-05-27', 'Pindah', 'DIterima Di Ponpes Lain', 'Ditolak');

-- --------------------------------------------------------

--
-- Table structure for table `santri`
--

CREATE TABLE `santri` (
  `ID_Santri` char(10) NOT NULL,
  `ID_Calon_Santri` char(10) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `Tanggal_Diterima` date NOT NULL,
  `ID_Kelas` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `santri`
--

INSERT INTO `santri` (`ID_Santri`, `ID_Calon_Santri`, `Nama`, `Tanggal_Diterima`, `ID_Kelas`) VALUES
('S001', 'CS002', 'Firky', '2024-05-23', 'K006');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('HRjGqmZmQK84mCpOoy1KPrhZPPdPBKhVDOjDib9y', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', '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', 1716761015),
('VFO8KrOpl0114ANZjxThktjCnLX0iqhpxGJjGx9j', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', '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', 1716762344);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wali_santri`
--

CREATE TABLE `wali_santri` (
  `ID_Wali` char(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Nama_Wali` varchar(100) NOT NULL,
  `Hubungan_Wali` enum('Kandung','Angkat') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Alamat_Wali` varchar(100) NOT NULL,
  `No_Telepon_Wali` char(15) NOT NULL,
  `Email_Wali` varchar(100) NOT NULL,
  `ID_Calon_Santri` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `wali_santri`
--

INSERT INTO `wali_santri` (`ID_Wali`, `Nama_Wali`, `Hubungan_Wali`, `Alamat_Wali`, `No_Telepon_Wali`, `Email_Wali`, `ID_Calon_Santri`) VALUES
('W001', 'Joko', 'Kandung', 'Singosari', '087674526211', 'joko@yahoo.com', 'CS001'),
('W002', 'Suki', 'Kandung', 'Pasuruan', '087674526211', 'suki@yahoo.com', 'CS002');

-- --------------------------------------------------------

--
-- Table structure for table `wawancara`
--

CREATE TABLE `wawancara` (
  `ID_Wawancara` char(10) NOT NULL,
  `ID_Calon_Santri` char(10) NOT NULL,
  `Tanggal_Wawancara` date NOT NULL,
  `Mulai_Wawancara` time NOT NULL,
  `Pewawancara` varchar(150) NOT NULL,
  `Nilai_Wawancara` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `wawancara`
--

INSERT INTO `wawancara` (`ID_Wawancara`, `ID_Calon_Santri`, `Tanggal_Wawancara`, `Mulai_Wawancara`, `Pewawancara`, `Nilai_Wawancara`) VALUES
('W002', 'CS002', '2024-06-01', '14:27:00', 'Ustad Hafidz', 85);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`ID_Admin`);

--
-- Indexes for table `biaya_penerimaan`
--
ALTER TABLE `biaya_penerimaan`
  ADD PRIMARY KEY (`ID_Biaya_Penerimaan`),
  ADD KEY `ID_Calon_Santri` (`ID_Calon_Santri`);

--
-- Indexes for table `biaya_pondok`
--
ALTER TABLE `biaya_pondok`
  ADD PRIMARY KEY (`ID_Biaya_Pondok`),
  ADD KEY `ID_Santri` (`ID_Santri`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `calon_santri`
--
ALTER TABLE `calon_santri`
  ADD PRIMARY KEY (`ID_Calon_Santri`),
  ADD KEY `ID_Pendaftaran` (`ID_Pendaftaran`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `hasil_ujian`
--
ALTER TABLE `hasil_ujian`
  ADD PRIMARY KEY (`ID_Hasil_Ujian`),
  ADD KEY `ID_Pelaksanaan_Ujian` (`ID_Pelaksanaan_Ujian`),
  ADD KEY `ID_Calon_Santri` (`ID_Calon_Santri`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`ID_Kelas`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilai_ujian_masuk`
--
ALTER TABLE `nilai_ujian_masuk`
  ADD PRIMARY KEY (`ID_Nilai_Ujian_Masuk`),
  ADD KEY `ID_Calon_Santri` (`ID_Calon_Santri`),
  ADD KEY `ID_Pelaksanaan_Ujian` (`ID_Pelaksanaan_Ujian`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `pelaksanaan_ujians`
--
ALTER TABLE `pelaksanaan_ujians`
  ADD PRIMARY KEY (`ID_Pelaksanaan_Ujian`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`ID_Pembayaran`),
  ADD KEY `ID_Biaya` (`ID_Biaya_Penerimaan`),
  ADD KEY `ID_Biaya Pondok` (`ID_Biaya_Pondok`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`ID_Pendaftaran`);

--
-- Indexes for table `pendidikan_terakhir`
--
ALTER TABLE `pendidikan_terakhir`
  ADD PRIMARY KEY (`ID_Pendidikan`),
  ADD UNIQUE KEY `ID_Calon_Santri` (`ID_Calon_Santri`);

--
-- Indexes for table `pengunduran_diri`
--
ALTER TABLE `pengunduran_diri`
  ADD PRIMARY KEY (`ID_Pengunduran_Diri`),
  ADD KEY `ID_Santri` (`ID_Santri`);

--
-- Indexes for table `santri`
--
ALTER TABLE `santri`
  ADD PRIMARY KEY (`ID_Santri`),
  ADD KEY `ID_Calon_Santri` (`ID_Calon_Santri`),
  ADD KEY `ID_Kelas` (`ID_Kelas`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wali_santri`
--
ALTER TABLE `wali_santri`
  ADD PRIMARY KEY (`ID_Wali`),
  ADD KEY `ID_Calon_Santri` (`ID_Calon_Santri`);

--
-- Indexes for table `wawancara`
--
ALTER TABLE `wawancara`
  ADD PRIMARY KEY (`ID_Wawancara`),
  ADD KEY `ID_Calon_Santri` (`ID_Calon_Santri`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `ID_Admin` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `biaya_penerimaan`
--
ALTER TABLE `biaya_penerimaan`
  ADD CONSTRAINT `biaya_penerimaan_ibfk_1` FOREIGN KEY (`ID_Calon_Santri`) REFERENCES `calon_santri` (`ID_Calon_Santri`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `biaya_pondok`
--
ALTER TABLE `biaya_pondok`
  ADD CONSTRAINT `biaya_pondok_ibfk_1` FOREIGN KEY (`ID_Santri`) REFERENCES `santri` (`ID_Santri`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `calon_santri`
--
ALTER TABLE `calon_santri`
  ADD CONSTRAINT `calon_santri_ibfk_1` FOREIGN KEY (`ID_Pendaftaran`) REFERENCES `pendaftaran` (`ID_Pendaftaran`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hasil_ujian`
--
ALTER TABLE `hasil_ujian`
  ADD CONSTRAINT `hasil_ujian_ibfk_1` FOREIGN KEY (`ID_Calon_Santri`) REFERENCES `calon_santri` (`ID_Calon_Santri`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `nilai_ujian_masuk`
--
ALTER TABLE `nilai_ujian_masuk`
  ADD CONSTRAINT `nilai_ujian_masuk_ibfk_1` FOREIGN KEY (`ID_Calon_Santri`) REFERENCES `calon_santri` (`ID_Calon_Santri`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`ID_Biaya_Pondok`) REFERENCES `biaya_pondok` (`ID_Biaya_Pondok`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pendidikan_terakhir`
--
ALTER TABLE `pendidikan_terakhir`
  ADD CONSTRAINT `pendidikan_terakhir_ibfk_1` FOREIGN KEY (`ID_Calon_Santri`) REFERENCES `calon_santri` (`ID_Calon_Santri`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pengunduran_diri`
--
ALTER TABLE `pengunduran_diri`
  ADD CONSTRAINT `pengunduran_diri_ibfk_1` FOREIGN KEY (`ID_Santri`) REFERENCES `santri` (`ID_Santri`) ON DELETE CASCADE;

--
-- Constraints for table `santri`
--
ALTER TABLE `santri`
  ADD CONSTRAINT `santri_ibfk_1` FOREIGN KEY (`ID_Kelas`) REFERENCES `kelas` (`ID_Kelas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `santri_ibfk_2` FOREIGN KEY (`ID_Calon_Santri`) REFERENCES `calon_santri` (`ID_Calon_Santri`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `wali_santri`
--
ALTER TABLE `wali_santri`
  ADD CONSTRAINT `wali_santri_ibfk_1` FOREIGN KEY (`ID_Calon_Santri`) REFERENCES `calon_santri` (`ID_Calon_Santri`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `wawancara`
--
ALTER TABLE `wawancara`
  ADD CONSTRAINT `wawancara_ibfk_1` FOREIGN KEY (`ID_Calon_Santri`) REFERENCES `calon_santri` (`ID_Calon_Santri`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
