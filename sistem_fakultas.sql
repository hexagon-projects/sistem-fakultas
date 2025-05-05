-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Apr 2025 pada 02.52
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistem_fakultas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `acces_departements`
--

CREATE TABLE `acces_departements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_departement` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `achievements`
--

CREATE TABLE `achievements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_departement` bigint(20) UNSIGNED DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `winner_name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `home` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `agendas`
--

CREATE TABLE `agendas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `description` text NOT NULL,
  `event` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `yt` varchar(255) NOT NULL,
  `register_link` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `analytics`
--

CREATE TABLE `analytics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `google` text DEFAULT NULL,
  `meta` text DEFAULT NULL,
  `chat` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `analytics`
--

INSERT INTO `analytics` (`id`, `google`, `meta`, `chat`, `created_at`, `updated_at`) VALUES
(1, 'ini contoh google analytic', 'Deskripsi website kamu', 'Hallo Minpas, Saya mau info pendaftaran mahasiswa baru untuk tahun ini!', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('902e63a8f8b6742c85bc74baf1f46dee', 'i:1;', 1745828167),
('902e63a8f8b6742c85bc74baf1f46dee:timer', 'i:1745828167;', 1745828167);

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
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Artikel', 'images/categories/article.jpg', NULL, NULL),
(2, 'Berita', 'images/categories/news.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_values`
--

CREATE TABLE `data_values` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title1` varchar(255) NOT NULL,
  `title2` varchar(255) NOT NULL,
  `title3` varchar(255) NOT NULL,
  `title4` varchar(255) NOT NULL,
  `data1` varchar(255) NOT NULL,
  `data2` varchar(255) NOT NULL,
  `data3` varchar(255) NOT NULL,
  `data4` varchar(255) NOT NULL,
  `value1` varchar(255) NOT NULL,
  `value2` varchar(255) NOT NULL,
  `value3` varchar(255) NOT NULL,
  `value4` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `data_values`
--

INSERT INTO `data_values` (`id`, `title1`, `title2`, `title3`, `title4`, `data1`, `data2`, `data3`, `data4`, `value1`, `value2`, `value3`, `value4`, `created_at`, `updated_at`) VALUES
(1, 'Mahasiswa', 'Lulusan', 'Program Studi', 'Prestasi', '9112', '9877436', '44', '2139', 'Some value 1', 'Some value 2', 'Some value 3', 'Some value 4', '2025-04-28 01:10:37', '2025-04-28 01:10:37');

-- --------------------------------------------------------

--
-- Struktur dari tabel `departements`
--

CREATE TABLE `departements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `akreditasi` varchar(255) DEFAULT NULL,
  `tagline` varchar(255) DEFAULT NULL,
  `yt_id` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `tiktok` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `statistik1` varchar(255) DEFAULT NULL,
  `statistik2` varchar(255) DEFAULT NULL,
  `statistik3` varchar(255) DEFAULT NULL,
  `statistik4` varchar(255) DEFAULT NULL,
  `title1` varchar(255) DEFAULT NULL,
  `title2` varchar(255) DEFAULT NULL,
  `title3` varchar(255) DEFAULT NULL,
  `title4` varchar(255) DEFAULT NULL,
  `description1` text DEFAULT NULL,
  `description2` text DEFAULT NULL,
  `description3` text DEFAULT NULL,
  `description4` text DEFAULT NULL,
  `image1` text DEFAULT NULL,
  `image2` text DEFAULT NULL,
  `image3` text DEFAULT NULL,
  `image4` text DEFAULT NULL,
  `color1` varchar(255) DEFAULT NULL,
  `color2` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `map` text DEFAULT NULL,
  `link1` text DEFAULT NULL,
  `link2` text DEFAULT NULL,
  `link3` text DEFAULT NULL,
  `link4` text DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `facilities`
--

CREATE TABLE `facilities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_departement` bigint(20) UNSIGNED DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `home` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `yt` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `faculties`
--

CREATE TABLE `faculties` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `akreditasi` varchar(255) DEFAULT NULL,
  `tagline` varchar(255) DEFAULT NULL,
  `yt_id` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `tiktok` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `statistik1` varchar(255) DEFAULT NULL,
  `statistik2` varchar(255) DEFAULT NULL,
  `statistik3` varchar(255) DEFAULT NULL,
  `statistik4` varchar(255) DEFAULT NULL,
  `title1` varchar(255) DEFAULT NULL,
  `title2` varchar(255) DEFAULT NULL,
  `title3` varchar(255) DEFAULT NULL,
  `title4` varchar(255) DEFAULT NULL,
  `description1` text DEFAULT NULL,
  `description2` text DEFAULT NULL,
  `description3` text DEFAULT NULL,
  `description4` text DEFAULT NULL,
  `image1` text DEFAULT NULL,
  `image2` text DEFAULT NULL,
  `image3` text DEFAULT NULL,
  `image4` text DEFAULT NULL,
  `color1` varchar(255) DEFAULT NULL,
  `color2` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `map` text DEFAULT NULL,
  `link1` text DEFAULT NULL,
  `link2` text DEFAULT NULL,
  `link3` text DEFAULT NULL,
  `link4` text DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Struktur dari tabel `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_category` bigint(20) UNSIGNED DEFAULT NULL,
  `question` varchar(255) NOT NULL,
  `answer` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `faq_categories`
--

CREATE TABLE `faq_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `identities`
--

CREATE TABLE `identities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `meta` varchar(255) NOT NULL,
  `adress` text NOT NULL,
  `link_map` text NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `fb` varchar(255) NOT NULL,
  `ig` varchar(255) NOT NULL,
  `tiktok` varchar(255) NOT NULL,
  `yt` varchar(255) NOT NULL,
  `time_service` varchar(255) NOT NULL,
  `day_service` varchar(255) NOT NULL,
  `image1` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `identities`
--

INSERT INTO `identities` (`id`, `title`, `meta`, `adress`, `link_map`, `phone`, `email`, `fb`, `ig`, `tiktok`, `yt`, `time_service`, `day_service`, `image1`, `image2`, `created_at`, `updated_at`) VALUES
(1, 'Universitas Pasundan', 'Universitas Pasundan (UNPAS) - Perguruan Tinggi Swasta terkemuka di Bandung, Jawa Barat, yang menyediakan berbagai program studi berkualitas untuk jenjang Diploma, Sarjana, Magister, dan Doktor.', '(Kampus I) Jl. Lengkong besar no 68, Kec Lengkong Kota Bandung Jawa Barat 40261', 'https://maps.app.goo.gl/K4ZfK6MNnNN2NuRq7', '62811960193', 'konsultasi@jatidiri.app', 'unpas', 'unpas', '@unpas', '@unpas', '08.00 - 17.00', 'Senin - Jumat', 'image/sdjnajdn', 'image/sdjnajdn', '2025-04-28 01:10:37', '2025-04-28 01:10:37');

-- --------------------------------------------------------

--
-- Struktur dari tabel `inovations`
--

CREATE TABLE `inovations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_departement` bigint(20) UNSIGNED DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `home` varchar(255) DEFAULT NULL,
  `image1` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `inovator` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
-- Struktur dari tabel `legal_documents`
--

CREATE TABLE `legal_documents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_departement` bigint(20) UNSIGNED DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `home` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(4, '2025_04_10_033055_create_profile_fakultas_table', 1),
(5, '2025_04_10_033249_create_departements_table', 1),
(6, '2025_04_10_033429_create_user_pics_table', 1),
(7, '2025_04_10_033520_create_analytics_table', 1),
(8, '2025_04_10_033605_create_sliders_table', 1),
(9, '2025_04_10_033651_create_side_baners_table', 1),
(10, '2025_04_10_033739_create_identities_table', 1),
(11, '2025_04_10_034209_create_partners_table', 1),
(12, '2025_04_10_034318_create_legal_documents_table', 1),
(13, '2025_04_10_034402_create_ourteams_table', 1),
(14, '2025_04_10_034432_create_usps_table', 1),
(15, '2025_04_10_034542_create_facilities_table', 1),
(16, '2025_04_10_034722_create_achievements_table', 1),
(17, '2025_04_10_034818_create_organizations_table', 1),
(18, '2025_04_10_035009_create_testimonials_table', 1),
(19, '2025_04_10_035112_create_inovations_table', 1),
(20, '2025_04_10_035152_create_supports_table', 1),
(21, '2025_04_10_035247_create_faq_categories_table', 1),
(22, '2025_04_10_035318_create_faqs_table', 1),
(23, '2025_04_11_031523_add_two_factor_columns_to_users_table', 1),
(24, '2025_04_21_015737_create_categories_table', 1),
(25, '2025_04_21_021324_create_posts_table', 1),
(26, '2025_04_23_015339_create_acces_departements_table', 1),
(27, '2025_04_26_133532_create_data_values_table', 1),
(28, '2025_04_28_033445_create_agendas_table', 1),
(29, '2025_04_28_034420_create_faculties_table', 1),
(30, '2025_04_28_042255_create_portofolios_table', 1),
(31, '2025_04_28_064315_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `organizations`
--

CREATE TABLE `organizations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_departement` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `home` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ourteams`
--

CREATE TABLE `ourteams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_departement` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `ig` varchar(255) NOT NULL,
  `fb` varchar(255) NOT NULL,
  `yt` varchar(255) NOT NULL,
  `tiktok` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `home` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `partners`
--

CREATE TABLE `partners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_departement` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `detail` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `home` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `portofolios`
--

CREATE TABLE `portofolios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_departement` bigint(20) UNSIGNED DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `home` varchar(255) DEFAULT NULL,
  `image1` varchar(255) NOT NULL,
  `image2` varchar(255) DEFAULT NULL,
  `image3` varchar(255) DEFAULT NULL,
  `yt` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_category` bigint(20) UNSIGNED DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `resume` text NOT NULL,
  `content` text NOT NULL,
  `publish` date NOT NULL,
  `image` varchar(255) NOT NULL,
  `yt` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `posts`
--

INSERT INTO `posts` (`id`, `id_category`, `title`, `slug`, `resume`, `content`, `publish`, `image`, `yt`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Cara Menggunakan Laravel', NULL, 'Panduan singkat cara menggunakan Laravel.', '<p>Laravel adalah framework PHP yang sangat powerful...</p>', '2023-10-21', 'images/posts/post1.jpg', 'https://www.youtube.com/watch?v=video1', 'active', '2025-04-28 01:10:38', '2025-04-28 01:10:38'),
(2, 2, 'Tips Belajar Quill Editor', NULL, 'Cara integrasi Quill Editor di Laravel.', '<p>Quill adalah rich text editor yang ringan dan mudah digunakan...</p>', '2023-10-21', 'images/posts/post2.jpg', 'https://www.youtube.com/watch?v=video2', 'active', '2025-04-28 01:10:38', '2025-04-28 01:10:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profile_fakultas`
--

CREATE TABLE `profile_fakultas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `tagline` text NOT NULL,
  `title1` varchar(255) NOT NULL,
  `description1` text NOT NULL,
  `title2` varchar(255) NOT NULL,
  `description2` text NOT NULL,
  `title3` varchar(255) NOT NULL,
  `description3` text NOT NULL,
  `title4` varchar(255) NOT NULL,
  `description4` text NOT NULL,
  `image1` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `image3` varchar(255) NOT NULL,
  `image4` varchar(255) NOT NULL,
  `statistik1` varchar(255) NOT NULL,
  `statistik2` varchar(255) NOT NULL,
  `statistik3` varchar(255) NOT NULL,
  `statistik4` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `yt` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `profile_fakultas`
--

INSERT INTO `profile_fakultas` (`id`, `name`, `tagline`, `title1`, `description1`, `title2`, `description2`, `title3`, `description3`, `title4`, `description4`, `image1`, `image2`, `image3`, `image4`, `statistik1`, `statistik2`, `statistik3`, `statistik4`, `status`, `yt`, `created_at`, `updated_at`) VALUES
(1, 'Fakultas Teknik', 'Mewujudkan Insinyur Berkarakter', 'Visi', 'Menjadi fakultas teknik unggulan tingkat nasional.', 'Misi', 'Menyelenggarakan pendidikan, penelitian, dan pengabdian.', 'Tujuan', 'Membentuk lulusan yang berdaya saing global.', 'Nilai', 'Integritas, Profesionalisme, Inovasi.', 'image1.jpg', 'image2.jpg', 'image3.jpg', 'image4.jpg', '10.000 Mahasiswa', '50 Dosen', '20 Program Studi', '5 Gedung Kuliah', 'aktif', 'https://youtube.com/example', NULL, NULL);

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
('kGHY0RAn2nIrBTC2yzuP9I0pmQK1JJ3VUzrOAi1z', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoieFA4QWhreWdOMTdUNjlYYVVoM3E3OFhmMmpWUmJWNWtEZnl3MFRiWiI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjQwOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvZGVwYXJ0ZW1lbnQvY3JlYXRlIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1745830087);

-- --------------------------------------------------------

--
-- Struktur dari tabel `side_baners`
--

CREATE TABLE `side_baners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_departement` bigint(20) UNSIGNED DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image1` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `yt` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `home` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_departement` bigint(20) UNSIGNED DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image1` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `yt` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `home` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `supports`
--

CREATE TABLE `supports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_departement` bigint(20) UNSIGNED DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `support_by` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `yt` varchar(255) NOT NULL,
  `home` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_departement` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `home` varchar(255) DEFAULT NULL,
  `yt` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `role` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `role`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Kemal Ramadhan', 'km.kemal03@gmail.com', '08986004677', 'Super Admin', '2025-04-28 01:10:37', '$2y$12$HH6keLehE24npkFC.qBjR.BDsPdUDxiKgRxOUxFvXzSbMf2O/Flz.', NULL, NULL, NULL, NULL, '2025-04-28 01:10:37', '2025-04-28 01:10:37'),
(2, 'Admin User', 'admin@example.com', '08123456789', 'admin', '2025-04-28 01:10:37', '$2y$12$TxdBI68rjab6Nl1lWqRm7.wKEpT.RzsGGEx0DuCVywypzdcB21u9K', NULL, NULL, NULL, NULL, '2025-04-28 01:10:38', '2025-04-28 01:10:38'),
(3, 'Regular User', 'user@example.com', '08987654321', 'admin', '2025-04-28 01:10:38', '$2y$12$CALVTGZlDq/AUNK6UD4mw.HFgw4.8Hp1616nkaMS7AllseSyEpgze', NULL, NULL, NULL, NULL, '2025-04-28 01:10:38', '2025-04-28 01:10:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_pics`
--

CREATE TABLE `user_pics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_departement` bigint(20) UNSIGNED DEFAULT NULL,
  `id_user` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `usps`
--

CREATE TABLE `usps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_departement` bigint(20) UNSIGNED DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `home` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `acces_departements`
--
ALTER TABLE `acces_departements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `acces_departements_id_departement_foreign` (`id_departement`),
  ADD KEY `acces_departements_id_user_foreign` (`id_user`);

--
-- Indeks untuk tabel `achievements`
--
ALTER TABLE `achievements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `achievements_id_departement_foreign` (`id_departement`);

--
-- Indeks untuk tabel `agendas`
--
ALTER TABLE `agendas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `analytics`
--
ALTER TABLE `analytics`
  ADD PRIMARY KEY (`id`);

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
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_values`
--
ALTER TABLE `data_values`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `departements`
--
ALTER TABLE `departements`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `facilities_id_departement_foreign` (`id_departement`);

--
-- Indeks untuk tabel `faculties`
--
ALTER TABLE `faculties`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `faqs_id_category_foreign` (`id_category`);

--
-- Indeks untuk tabel `faq_categories`
--
ALTER TABLE `faq_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `identities`
--
ALTER TABLE `identities`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `inovations`
--
ALTER TABLE `inovations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `inovations_id_departement_foreign` (`id_departement`);

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
-- Indeks untuk tabel `legal_documents`
--
ALTER TABLE `legal_documents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `legal_documents_id_departement_foreign` (`id_departement`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `organizations`
--
ALTER TABLE `organizations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `organizations_id_departement_foreign` (`id_departement`);

--
-- Indeks untuk tabel `ourteams`
--
ALTER TABLE `ourteams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ourteams_id_departement_foreign` (`id_departement`);

--
-- Indeks untuk tabel `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`),
  ADD KEY `partners_id_departement_foreign` (`id_departement`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `portofolios`
--
ALTER TABLE `portofolios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `portofolios_id_departement_foreign` (`id_departement`);

--
-- Indeks untuk tabel `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_id_category_foreign` (`id_category`);

--
-- Indeks untuk tabel `profile_fakultas`
--
ALTER TABLE `profile_fakultas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indeks untuk tabel `side_baners`
--
ALTER TABLE `side_baners`
  ADD PRIMARY KEY (`id`),
  ADD KEY `side_baners_id_departement_foreign` (`id_departement`);

--
-- Indeks untuk tabel `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sliders_id_departement_foreign` (`id_departement`);

--
-- Indeks untuk tabel `supports`
--
ALTER TABLE `supports`
  ADD PRIMARY KEY (`id`),
  ADD KEY `supports_id_departement_foreign` (`id_departement`);

--
-- Indeks untuk tabel `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`),
  ADD KEY `testimonials_id_departement_foreign` (`id_departement`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indeks untuk tabel `user_pics`
--
ALTER TABLE `user_pics`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_pics_id_departement_foreign` (`id_departement`),
  ADD KEY `user_pics_id_user_foreign` (`id_user`);

--
-- Indeks untuk tabel `usps`
--
ALTER TABLE `usps`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usps_id_departement_foreign` (`id_departement`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `acces_departements`
--
ALTER TABLE `acces_departements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `achievements`
--
ALTER TABLE `achievements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `agendas`
--
ALTER TABLE `agendas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `analytics`
--
ALTER TABLE `analytics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `data_values`
--
ALTER TABLE `data_values`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `departements`
--
ALTER TABLE `departements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `facilities`
--
ALTER TABLE `facilities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `faculties`
--
ALTER TABLE `faculties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `faq_categories`
--
ALTER TABLE `faq_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `identities`
--
ALTER TABLE `identities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `inovations`
--
ALTER TABLE `inovations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `legal_documents`
--
ALTER TABLE `legal_documents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `organizations`
--
ALTER TABLE `organizations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `ourteams`
--
ALTER TABLE `ourteams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `partners`
--
ALTER TABLE `partners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `portofolios`
--
ALTER TABLE `portofolios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `profile_fakultas`
--
ALTER TABLE `profile_fakultas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `side_baners`
--
ALTER TABLE `side_baners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `supports`
--
ALTER TABLE `supports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user_pics`
--
ALTER TABLE `user_pics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `usps`
--
ALTER TABLE `usps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `acces_departements`
--
ALTER TABLE `acces_departements`
  ADD CONSTRAINT `acces_departements_id_departement_foreign` FOREIGN KEY (`id_departement`) REFERENCES `departements` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `acces_departements_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `achievements`
--
ALTER TABLE `achievements`
  ADD CONSTRAINT `achievements_id_departement_foreign` FOREIGN KEY (`id_departement`) REFERENCES `departements` (`id`);

--
-- Ketidakleluasaan untuk tabel `facilities`
--
ALTER TABLE `facilities`
  ADD CONSTRAINT `facilities_id_departement_foreign` FOREIGN KEY (`id_departement`) REFERENCES `departements` (`id`);

--
-- Ketidakleluasaan untuk tabel `faqs`
--
ALTER TABLE `faqs`
  ADD CONSTRAINT `faqs_id_category_foreign` FOREIGN KEY (`id_category`) REFERENCES `faq_categories` (`id`);

--
-- Ketidakleluasaan untuk tabel `inovations`
--
ALTER TABLE `inovations`
  ADD CONSTRAINT `inovations_id_departement_foreign` FOREIGN KEY (`id_departement`) REFERENCES `departements` (`id`);

--
-- Ketidakleluasaan untuk tabel `legal_documents`
--
ALTER TABLE `legal_documents`
  ADD CONSTRAINT `legal_documents_id_departement_foreign` FOREIGN KEY (`id_departement`) REFERENCES `departements` (`id`);

--
-- Ketidakleluasaan untuk tabel `organizations`
--
ALTER TABLE `organizations`
  ADD CONSTRAINT `organizations_id_departement_foreign` FOREIGN KEY (`id_departement`) REFERENCES `departements` (`id`);

--
-- Ketidakleluasaan untuk tabel `ourteams`
--
ALTER TABLE `ourteams`
  ADD CONSTRAINT `ourteams_id_departement_foreign` FOREIGN KEY (`id_departement`) REFERENCES `departements` (`id`);

--
-- Ketidakleluasaan untuk tabel `partners`
--
ALTER TABLE `partners`
  ADD CONSTRAINT `partners_id_departement_foreign` FOREIGN KEY (`id_departement`) REFERENCES `departements` (`id`);

--
-- Ketidakleluasaan untuk tabel `portofolios`
--
ALTER TABLE `portofolios`
  ADD CONSTRAINT `portofolios_id_departement_foreign` FOREIGN KEY (`id_departement`) REFERENCES `departements` (`id`);

--
-- Ketidakleluasaan untuk tabel `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_id_category_foreign` FOREIGN KEY (`id_category`) REFERENCES `categories` (`id`);

--
-- Ketidakleluasaan untuk tabel `side_baners`
--
ALTER TABLE `side_baners`
  ADD CONSTRAINT `side_baners_id_departement_foreign` FOREIGN KEY (`id_departement`) REFERENCES `departements` (`id`);

--
-- Ketidakleluasaan untuk tabel `sliders`
--
ALTER TABLE `sliders`
  ADD CONSTRAINT `sliders_id_departement_foreign` FOREIGN KEY (`id_departement`) REFERENCES `departements` (`id`);

--
-- Ketidakleluasaan untuk tabel `supports`
--
ALTER TABLE `supports`
  ADD CONSTRAINT `supports_id_departement_foreign` FOREIGN KEY (`id_departement`) REFERENCES `departements` (`id`);

--
-- Ketidakleluasaan untuk tabel `testimonials`
--
ALTER TABLE `testimonials`
  ADD CONSTRAINT `testimonials_id_departement_foreign` FOREIGN KEY (`id_departement`) REFERENCES `departements` (`id`);

--
-- Ketidakleluasaan untuk tabel `user_pics`
--
ALTER TABLE `user_pics`
  ADD CONSTRAINT `user_pics_id_departement_foreign` FOREIGN KEY (`id_departement`) REFERENCES `departements` (`id`),
  ADD CONSTRAINT `user_pics_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `usps`
--
ALTER TABLE `usps`
  ADD CONSTRAINT `usps_id_departement_foreign` FOREIGN KEY (`id_departement`) REFERENCES `departements` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
