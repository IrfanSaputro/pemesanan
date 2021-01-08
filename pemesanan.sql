-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Jan 2021 pada 05.22
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pemesanan`
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
(4, '2021_01_07_132046_table-produk', 1),
(5, '2021_01_07_132109_table-pemesan', 1);

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
-- Struktur dari tabel `table_pemesan`
--

CREATE TABLE `table_pemesan` (
  `id_pemesan` int(10) UNSIGNED NOT NULL,
  `nama_pemesan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_pemesan` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon_pemesan` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `produk_pemesan` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `table_pemesan`
--

INSERT INTO `table_pemesan` (`id_pemesan`, `nama_pemesan`, `alamat_pemesan`, `telepon_pemesan`, `produk_pemesan`, `deskripsi`, `harga`, `created_at`, `updated_at`) VALUES
(1, 'Bagus', 'Jl. Bandung', '08165788900', 'Majoo Pro', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam animi, et nemo distinctio, consequatur eligendi maiores sed qui illum hic cumque sit a adipisci vero modi culpa omnis aspernatur perferendis. Maxime ipsam vitae aliquam, quidem incidunt iusto quos sequi alias, eligendi minus ipsum beatae consequuntur eos delectus deleniti! Alias, suscipit.', 2750000, '2021-01-07 18:15:06', '2021-01-07 18:15:06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_produk`
--

CREATE TABLE `table_produk` (
  `id_produk` int(10) UNSIGNED NOT NULL,
  `nama_produk` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_produk` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar_produk` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_produk` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `table_produk`
--

INSERT INTO `table_produk` (`id_produk`, `nama_produk`, `deskripsi_produk`, `gambar_produk`, `harga_produk`, `created_at`, `updated_at`) VALUES
(7, 'Majoo Pro', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam animi, et nemo distinctio, consequatur eligendi maiores sed qui illum hic cumque sit a adipisci vero modi culpa omnis aspernatur perferendis. Maxime ipsam vitae aliquam, quidem incidunt iusto quos sequi alias, eligendi minus ipsum beatae consequuntur eos delectus deleniti! Alias, suscipit.', 'standard_repo.png', 2750000, '2021-01-07 16:24:35', '2021-01-07 16:28:59'),
(8, 'Majoo Advance', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam animi, et nemo distinctio, consequatur eligendi maiores sed qui illum hic cumque sit a adipisci vero modi culpa omnis aspernatur perferendis. Maxime ipsam vitae aliquam, quidem incidunt iusto quos sequi alias, eligendi minus ipsum beatae consequuntur eos delectus deleniti! Alias, suscipit.', 'paket-advance.png', 2750000, '2021-01-07 16:25:41', '2021-01-07 16:25:41'),
(9, 'Majoo Lifestyle', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam animi, et nemo distinctio, consequatur eligendi maiores sed qui illum hic cumque sit a adipisci vero modi culpa omnis aspernatur perferendis. Maxime ipsam vitae aliquam, quidem incidunt iusto quos sequi alias, eligendi minus ipsum beatae consequuntur eos delectus deleniti! Alias, suscipit.', 'paket-lifestyle.png', 2750000, '2021-01-07 16:26:24', '2021-01-07 16:26:24'),
(10, 'Majoo Desktop', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam animi, et nemo distinctio, consequatur eligendi maiores sed qui illum hic cumque sit a adipisci vero modi culpa omnis aspernatur perferendis. Maxime ipsam vitae aliquam, quidem incidunt iusto quos sequi alias, eligendi minus ipsum beatae consequuntur eos delectus deleniti! Alias, suscipit.', 'paket-desktop.png', 2750000, '2021-01-07 16:26:54', '2021-01-07 16:26:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(2) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'irfan', 'irfan', 'irfan@example.com', NULL, '$2y$10$4roQ/1x4YS3ilbHyYlci/enmtvTQWQBfWJL/BCEbTG8bTxfzrsGkG', 1, NULL, '2021-01-07 13:22:50', '2021-01-07 13:22:50'),
(4, 'admin', 'admin', 'admin@example.com', NULL, '$2y$10$ICFjux37btZyUkMlf1VWIefO/ejndiLXPtMjVNuPMtNQ0Er6HTss6', 1, NULL, '2021-01-07 15:35:36', '2021-01-07 15:35:36');

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
-- Indeks untuk tabel `table_pemesan`
--
ALTER TABLE `table_pemesan`
  ADD PRIMARY KEY (`id_pemesan`);

--
-- Indeks untuk tabel `table_produk`
--
ALTER TABLE `table_produk`
  ADD PRIMARY KEY (`id_produk`);

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
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `table_pemesan`
--
ALTER TABLE `table_pemesan`
  MODIFY `id_pemesan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `table_produk`
--
ALTER TABLE `table_produk`
  MODIFY `id_produk` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
