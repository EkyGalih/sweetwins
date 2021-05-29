-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 29, 2021 at 02:53 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_olshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token_komentar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `produk_id` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `komentar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id`, `token_komentar`, `user_id`, `produk_id`, `komentar`, `rating`, `created_at`, `updated_at`, `deleted_at`) VALUES
('a36c391c-0f10-42fa-b8e8-45736c625df4', '030521011taJNZIORUIAFL0OYdHlMQU5VGdXGY7u3TQk0iKibE84QoNhwLXDBWONsPbLICGvFTYkmXorLgrpuzzc45pmPuL6g69xFomqMRZ', '9e09dada-5144-4cd8-a3b3-4924232edffd', 'c7f3d1bc-433e-4cce-86e3-edb093e220c3', 'tes', NULL, '2021-05-02 22:54:01', '2021-05-02 22:54:01', NULL),
('cb093909-ae5a-4d63-b7ec-143a25ea2130', '03052115nDxFAdQ2xWBcYAyUMoiy63CoHOqoO7Qt3SeDKULF05XCYHEf2VtE8doiJDDbVJP9MJ8uFkuSdGLkLpNQR6mpkZbNQVpkXoYBmQR', '9e09dada-5144-4cd8-a3b3-4924232edffd', 'c7f3d1bc-433e-4cce-86e3-edb093e220c3', 'apa aja dah', NULL, '2021-05-02 22:58:15', '2021-05-02 22:58:15', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2018_12_06_022126_produk', 1),
(2, '2018_12_06_145326_komentar', 1),
(3, '2018_12_06_145356_user', 1),
(4, '2018_12_06_150115_pemesanan', 1),
(5, '2021_05_02_022234_add__f_k_to_komentar_table', 1),
(6, '2021_05_02_022244_add__f_k_to_pemesanan_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `_token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `produk_id` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_bayar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_bayar` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_produk` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `warna` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stok` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `token_produk`, `nama_produk`, `deskripsi`, `warna`, `model`, `stok`, `harga`, `status`, `gambar`, `created_at`, `updated_at`, `deleted_at`) VALUES
('291c2362-ff67-459e-aa13-17dda502e684', '030521539v7Tnn7rY9Xtz5aHayJxAwOkw6bbgc1oFYiMxrE16vZDWKF3KjA8CnBbNbjom6IGCIylm7XCNKNXJwgDKmuTFOOnJ2fD10AxAu7', 'Cadar 1', 'Cadar hitam bahan kasturi', 'hijau,merah,pink', 'kastrui', '40', '20000', 1, 'upload/produk/cadar.jpg', '2021-05-02 19:25:53', '2021-05-02 19:25:53', NULL),
('46e51fd8-fde3-4995-88fc-f202592f8a68', '030521206Bvqmww4zV7vp8UDLxlEUXSyXYREpJbysn5Q7Z9RGav8MblO6st7qbxkAVWCSlng2VmeyXQFRYHiDWBQn0pRTq6yMdkMHGQTaHX', 'Cadar Sultan', 'cadar yang terbuat dari kain sutra sultan persia', 'merah,pink', 'Arbeschi', '203', '115000', 1, 'upload/produk/cadara sultan.jpg', '2021-05-02 19:29:20', '2021-05-02 19:29:20', NULL),
('a59fa0cd-9624-4639-a506-2240722c4f00', '03052149ZN9BKYbYjXB2iBYQQNbePJLOLPsiXniB19nVtfi9OQ5Rp1DBlu4pTyg8HAR9YtdkSIk4e57A1xDHt68Gp93IPXghbPsDoZxZGJK', 'Jilbab Simple', 'Jilbab kain biasa murah', 'putih,kuning,abu muda,pink', 'tenun', '300', '25000', 1, 'upload/produk/jilbab.jpg', '2021-05-02 19:29:49', '2021-05-02 19:29:49', NULL),
('c7f3d1bc-433e-4cce-86e3-edb093e220c3', '030521366ZqfxlwRAjSt8om5LHykOBZH2SR66IegiHLoqY8WcbrCM5xA5OFmTTZ8q8rcngD3ziivGsgeRiaCFfCS2buKxcl0X5w9TIVOyHR', 'Cadar 2', 'cadar bagus berbahan kasturi premium', 'hitam,merah,ungu', 'kygo', '100', '45000', 1, 'upload/produk/cadar 2.jpg', '2021-05-02 19:28:36', '2021-05-02 19:28:36', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_lengkap` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` enum('admin','user') COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `token_user`, `nama_lengkap`, `username`, `password`, `email`, `gambar`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
('21f55045-165e-4554-946c-a205909d8d62', '02052126yOZnGTGJ3s6x3iHELF1LWWB8nQu5KxMsnGZzjm5vjmqYMwA8BnBn8Ajq5SkGizwJA6UnAQviiZIJ18AXwD3Q6rMDFJZv2Td2Ae1', 'Dena Dwi Septiyana', 'denads', '$2y$10$Qd0./dDmuzYOj3TRXz1Oz.VZsYYRGq6mvyrrQ5f8iT9/F2K2HxTJG', 'denads@gmail.com', 'upload/user/default.jpg', 'admin', NULL, '2021-05-01 18:50:26', '2021-05-01 18:50:26'),
('9e09dada-5144-4cd8-a3b3-4924232edffd', '02052113EdNcgU9CeSIRnSya0AdYSwbcUSNGoJM5hhV44VwsEeppwJ1n8VKQH2wTQDtDuySKG7Q1Uc6zdfMvQNNGO1VfF39dmSRtfaItive', 'dena dwi', 'denadwi', '$2y$10$ChtPCNEdpoJIM5hMLPW8wuk17jx.2DdqGWrf.sTQalfJz/cPySkJ.', 'denadwi@gmail.com', 'upload/user/default.jpg', 'user', NULL, '2021-05-02 00:52:13', '2021-05-02 00:52:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `komentar_produk_id_foreign` (`produk_id`),
  ADD KEY `komentar_user_id_foreign` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pemesanan_produk_id_foreign` (`produk_id`),
  ADD KEY `pemesanan_user_id_foreign` (`user_id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `komentar_produk_id_foreign` FOREIGN KEY (`produk_id`) REFERENCES `produk` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `komentar_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `pemesanan_produk_id_foreign` FOREIGN KEY (`produk_id`) REFERENCES `produk` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pemesanan_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
