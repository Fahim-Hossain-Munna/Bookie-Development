-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 09, 2024 at 05:50 PM
-- Server version: 8.0.30
-- PHP Version: 8.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookie`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int NOT NULL,
  `category_id` int NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'deactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `user_id`, `category_id`, `title`, `slug`, `description`, `image`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 2, 'টিএসসিতে দিনরাত খাটছেন শিক্ষার্থীরা, গতকাল সংগ্রহ প্রায় দেড় কোটি টাকা', 'tiessite-dinrat-khatchen-sikshartheera-gtkal-snggrh-pray-der-koti-taka', '<p>বন্যার্ত মানুষকে সহযোগিতা করার জন্য আজ শনিবার টানা তৃতীয় দিনের মতো ঢাকা বিশ্ববিদ্যালয়ের ছাত্র-শিক্ষক কেন্দ্রে (টিএসসি) গণত্রাণ সংগ্রহ করছে বৈষম্যবিরোধী ছাত্র আন্দোলন৷</p>\r\n<p>নগদ অর্থের পাশাপাশি বিভিন্ন শ্রেণি-পেশার মানুষেরা গতকাল যে পরিমাণ ত্রাণসামগ্রী টিএসসিতে বৈষম্যবিরোধী ছাত্র আন্দোলনের কাছে তুলে দিয়েছেন, তা বহন করতে প্রায় ৫০টি ট্রাক লেগেছে৷ দিনভর ত্রাণ ও নগদ অর্থ সংগ্রহের পর রাতে প্যাকেজিংয়েও অংশ নেন বিপুলসংখ্যক ছাত্র-ছাত্রী৷ পরে ট্রাকে করে ত্রাণ পাঠানো হয়েছে দুর্গত এলাকায়৷ আজ সকাল ১০টা থেকে টিএসসির ফটকে আবারও ত্রাণ সংগ্রহ কর্মসূচি শুরু হয়েছে চলবে রাত আটটা পর্যন্ত</p>\r\n<p>সকাল থেকে শুরু হওয়া এই কর্মসূচি চলবে রাত আটটা পর্যন্ত৷ গতকাল শুক্রবার কর্মসূচির দ্বিতীয় দিনে বৈষম্যবিরোধী ছাত্র আন্দোলনের এই উদ্যোগে ১ কোটি ৪২ লাখ টাকা&nbsp; ৫০ হাজার ১৯৬ টাকা জমা পড়েছে ৷</p>', '1-টিএসসিতে দিনরাত খাটছেন শিক্ষার্থীরা, গতকাল সংগ্রহ প্রায় দেড় কোটি টাকা-24-08-2024-137.webp', 'deactive', '2024-08-24 03:13:15', '2024-09-01 04:20:57', NULL),
(2, 1, 5, 'পাকিস্তানে ২১ বছরের যে খরা কাটালেন মুশফিক', 'pakistane-21-bchrer-ze-khra-katalen-musfik', '<p>অথচ আঙুলে ব্যথা নিয়ে রাওয়ালপিন্ডি টেস্ট খেলতে নেমেছিলেন মুশফিক। পাকিস্তানের কন্ডিশন সম্পর্কে স্বচ্ছ ধারণা পেতে জাতীয় দলের সঙ্গে সেখানে না গিয়ে &lsquo;এ&rsquo; দলের সঙ্গে আগেই গিয়েছিলেন। ইসলামাবাদে পাকিস্তান &lsquo;এ&rsquo; দলের বিপক্ষে প্রথম অনানুষ্ঠানিক টেস্ট চলাকালে নেটে অনুশীলনের সময় আঙুলে চোট পান। ওই ম্যাচের দ্বিতীয় ইনিংসে ব্যাটিংও করতে পারেননি। এমনকি ভারী বর্ষণের কারণে পারেননি টেস্টের ঠিকঠাক প্রস্তুতি নিতেও।</p>\r\n<p>সেই মুশফিকই টেস্টে ২১ বছর ধরে পাকিস্তানের মাটিতে বাংলাদেশি ব্যাটসম্যানের সেঞ্চুরিখরা কাটালেন। তাঁর আগে পাকিস্তানের মাঠে টেস্টে সেঞ্চুরি ছিল হাবিবুল বাশার ও জাভেদ ওমরের। ২০০৩ সালের পাকিস্তান সফরে করাচি টেস্টে হাবিবুল ও পেশোয়ার টেস্টে তিন অঙ্ক ছুঁয়েছিলেন জাভেদ।</p>\r\n<p>এই সিরিজ শুরুর সময় থেকেই মুশফিকের সঙ্গে তামিম ইকবালের নাম উচ্চারিত হচ্ছিল। মুশফিকের কারণে তামিম যেন বাংলাদেশ দলে দীর্ঘ দিন ধরে না থেকেও আছেন! কীভাবে? আন্তর্জাতিক ক্রিকেটে ১৫০০০ রানের মাইলফলক থেকে ৩২ রান দূরে থাকতে রাওয়ালপিন্ডি টেস্ট খেলতে নেমেছিলেন মুশফিক। কাল তৃতীয় দিনের শেষ সেশনে ফিফটি পূরণের পথে সেই দ্বিতীয় বাংলাদেশি হিসেবে সেই মাইলফলক স্পর্শ করেছেন। প্রথমজন অবশ্যই তামিম (১৫১৯২)।</p>', '1-পাকিস্তানে ২১ বছরের যে খরা কাটালেন মুশফিক-24-08-2024-3427.webp', 'deactive', '2024-08-24 02:33:49', '2024-08-24 02:33:49', NULL),
(3, 1, 2, 'হাসিনার পররাষ্ট্রনীতি ছিল মূলত গদি টেকানোর হাতিয়ার', 'hasinar-prrashtrneeti-chil-muult-gdi-tekanor-hatiyar', '<p>গণভবন লক্ষ্য করে বিক্ষুব্ধ জনতা রওনা হওয়ার পর হাসিনার ভারতে পালিয়ে যাওয়াটা মোটেও আশ্চর্যের বিষয় ছিল না। এর কারণ বেশ কয়েক বছর ধরে বাংলাদেশের সরকারের মধ্যে গভীর পচনের লক্ষণ স্পষ্ট হয়েছিল। বাংলাদেশের &lsquo;অর্থনৈতিক অলৌকিক ঘটনা&rsquo; অনেক মানুষকে চরম দারিদ্র্য থেকে বের করে এনেছিল বটে, কিন্তু সেই সাফল্যের বন্দনাগীতি শেষ পর্যন্ত তিক্ত হতে শুরু করেছিল।</p>\r\n<p>জাতীয় নির্বাচনে হাসিনার কারসাজি, জনগণের ব্যক্তিগত স্বাধীনতা খর্ব করা এবং প্রতিষ্ঠানের অবমূল্যায়ন নিয়েও হতাশা বাড়ছিল। যে পৃষ্ঠপোষক চক্রগুলো ক্রমবর্ধমান অজনপ্রিয় স্বৈরশাসককে ক্ষমতায় টিকিয়ে রেখেছিল তাদের দুর্নীতি ও অব্যবস্থাপনা অর্থনীতিকে পর্যুদস্ত করে ফেলেছিল।</p>\r\n<p>বিরোধী দল বিএনপি ২০২৪ সালের জানুয়ারির নির্বাচন বর্জন করার পর একতরফা ভোটে হাসিনার আওয়ামী লীগ বিশাল জয় পায়। কিন্তু এই একতরফা ভোটের পর জনমনে যে অসন্তোষ দেখা দিয়েছিল তা আওয়ামী সরকার ঢেকে রাখতে ব্যর্থ হয়েছিল।</p>', '1-হাসিনার পররাষ্ট্রনীতি ছিল মূলত গদি টেকানোর হাতিয়ার-25-08-2024-5753.webp', 'deactive', '2024-08-24 22:25:24', '2024-08-24 22:25:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blog_tag`
--

CREATE TABLE `blog_tag` (
  `blog_id` bigint UNSIGNED NOT NULL,
  `tag_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_tag`
--

INSERT INTO `blog_tag` (`blog_id`, `tag_id`) VALUES
(1, 6),
(1, 4),
(2, 6),
(2, 4),
(2, 3),
(3, 8),
(3, 7),
(3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'deactive',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `slug`, `image`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(2, 'nature', 'nature', '1-nature-24-08-2024.jfif', 'deactive', NULL, '2024-08-24 02:18:56', '2024-08-24 02:18:56'),
(3, 'food', 'food', '1-food-24-08-2024.jfif', 'deactive', NULL, '2024-08-24 02:19:10', '2024-08-24 02:19:10'),
(4, 'makeup', 'makeup', '1-makeup-24-08-2024.jfif', 'deactive', NULL, '2024-08-24 02:19:24', '2024-08-24 02:19:24'),
(5, 'gadget', 'gadget', '1-gadget-24-08-2024.jfif', 'deactive', NULL, '2024-08-24 02:19:39', '2024-08-24 02:19:39'),
(6, 'Technology', 'technology', '1-Technology-25-08-2024.jpg', 'deactive', NULL, '2024-08-24 22:26:39', '2024-08-24 22:26:39');

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `color_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'deactive',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id`, `user_id`, `color_title`, `color`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '1', 'red', '#ff0000', 'deactive', NULL, '2024-08-26 00:14:36', '2024-08-26 00:14:36'),
(2, '1', 'black', '#000000', 'deactive', NULL, '2024-08-26 00:15:02', '2024-08-26 00:15:02'),
(3, '1', 'yellow', '#ffd500', 'deactive', NULL, '2024-08-26 00:15:18', '2024-08-26 04:33:21'),
(4, '1', 'sky paste', '#9cb0ec', 'deactive', NULL, '2024-08-26 03:34:57', '2024-08-26 03:34:57'),
(5, '1', 'pink', '#ff00c8', 'deactive', NULL, '2024-08-26 03:35:46', '2024-08-26 04:36:29');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int NOT NULL,
  `blog_id` int NOT NULL,
  `parent_id` int DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `blog_id`, `parent_id`, `name`, `email`, `comment`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 3, NULL, 'Fahim', 'admin@dev.com', 'Big Fun Sir!', NULL, '2024-09-04 05:41:35', '2024-09-04 05:41:35'),
(2, 1, 3, NULL, 'Munna', 'fhmunna.dev@gmail.com', 'Just WoW!', NULL, '2024-09-04 05:41:52', '2024-09-04 05:41:52'),
(3, 1, 3, 1, 'Dighol', 'dighol.kamla@gmail.com', 'Mia eto fan hoiyen na , zoldi poira jaibo.', NULL, '2024-09-04 05:57:16', '2024-09-04 05:57:16');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int NOT NULL,
  `product_id` int NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'deactive',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `user_id`, `product_id`, `title`, `image`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'gallery 1', '1-gallery 1-6406-02-09-2024.png', 'deactive', '2024-09-02 00:34:24', '2024-09-01 23:12:47', '2024-09-02 00:34:24'),
(2, 1, 1, 'gallery 2', '1-gallery 2-3545-02-09-2024.png', 'deactive', NULL, '2024-09-01 23:22:15', '2024-09-02 05:48:30'),
(3, 1, 1, 'gallery 3', '1-gallery 3-6113-02-09-2024.jpg', 'deactive', NULL, '2024-09-01 23:23:22', '2024-09-02 05:45:38');

-- --------------------------------------------------------

--
-- Table structure for table `inventories`
--

CREATE TABLE `inventories` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int NOT NULL,
  `product_id` int NOT NULL,
  `size_id` int NOT NULL,
  `color_id` int NOT NULL,
  `quantity` int NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'deactive',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inventories`
--

INSERT INTO `inventories` (`id`, `user_id`, `product_id`, `size_id`, `color_id`, `quantity`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 2, 1, 10, 'active', NULL, '2024-09-02 04:30:13', '2024-09-02 05:47:19'),
(2, 1, 1, 4, 2, 25, 'deactive', NULL, '2024-09-02 04:30:27', '2024-09-02 04:30:27'),
(3, 1, 1, 1, 3, 115, 'active', NULL, '2024-09-02 04:34:04', '2024-09-02 05:47:22'),
(4, 1, 2, 4, 3, 10, 'deactive', NULL, '2024-09-09 00:43:31', '2024-09-09 00:43:31'),
(5, 1, 2, 4, 1, 20, 'deactive', NULL, '2024-09-09 00:43:45', '2024-09-09 00:43:45'),
(6, 1, 2, 4, 4, 50, 'deactive', NULL, '2024-09-09 00:44:00', '2024-09-09 00:44:00'),
(7, 1, 3, 4, 1, 100, 'deactive', NULL, '2024-09-09 00:44:41', '2024-09-09 00:44:41'),
(8, 1, 3, 4, 3, 80, 'deactive', NULL, '2024-09-09 00:44:53', '2024-09-09 00:44:53'),
(9, 1, 4, 3, 2, 1000, 'deactive', NULL, '2024-09-09 00:45:53', '2024-09-09 00:45:53'),
(10, 1, 4, 3, 1, 10, 'deactive', NULL, '2024-09-09 00:46:07', '2024-09-09 00:46:07'),
(11, 1, 5, 2, 2, 15, 'deactive', NULL, '2024-09-09 00:46:27', '2024-09-09 00:46:27'),
(12, 1, 5, 4, 2, 38, 'deactive', NULL, '2024-09-09 00:46:41', '2024-09-09 00:46:41'),
(13, 1, 5, 3, 1, 8, 'deactive', NULL, '2024-09-09 00:46:59', '2024-09-09 00:46:59');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_08_19_112730_create_categories_table', 1),
(5, '2024_08_22_063313_create_tags_table', 2),
(6, '2024_08_23_114934_create_blogs_table', 3),
(7, '2024_08_23_143925_create_blog_tag_table', 3),
(12, '2024_08_25_111247_create_sizes_table', 4),
(13, '2024_08_25_111254_create_colors_table', 4),
(29, '2024_08_28_102552_create_products_table', 5),
(30, '2024_08_29_092043_create_product_tag_table', 5),
(32, '2024_09_02_032049_create_galleries_table', 6),
(33, '2024_09_02_091616_create_inventories_table', 7),
(37, '2024_09_04_100615_create_comments_table', 8),
(38, '2024_09_06_063647_create_customers_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_short_description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `product_description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `product_unit` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_thumbnail` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hole_price` float DEFAULT NULL,
  `purchase_price` float DEFAULT NULL,
  `selling_price` float DEFAULT NULL,
  `discount_price` float DEFAULT NULL,
  `discount_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `feature` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'deactive',
  `today_deal` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'deactive',
  `vat_tax` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_rate` float DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'deactive',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `user_id`, `category_id`, `product_name`, `product_slug`, `product_code`, `product_short_description`, `product_description`, `product_unit`, `product_thumbnail`, `hole_price`, `purchase_price`, `selling_price`, `discount_price`, `discount_type`, `feature`, `today_deal`, `vat_tax`, `shipping_type`, `shipping_rate`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(2, '1', '3', 'Alooz Magic Masala', 'alooz-magic-masala', '#xyz123', '<p>Eating Potato chips has been made for fun than ever before with this new innovative wavy shaped Alooz and its new range of mouthwatering flavours.</p>', '<p>A chip (American English and Australian English) or crisp (British English and Irish English) is a snack food in the form of a crisp, flat or slightly bowl shaped, bite-sized unit. Some chips can be made into dishes and served as an appetizer, side, hors d\'oeuvre, etc. Some types of chip are often served in the combination plate, chips and dip. Other chips are sweet or strongly flavored or fragile. Tortilla chips can be used for chips and salsa, nachoes, bean dip, guacamole, or a layered dip containing multiple of these.</p>', '100gm', '1-Alooz Magic Masala-6503-09-09-2024.jpg', NULL, 10, 15, NULL, NULL, 'deactive', 'deactive', NULL, NULL, NULL, 'active', NULL, '2024-09-09 00:09:36', '2024-09-09 00:52:07'),
(3, '1', '3', 'Lays Sizzlin Hot', 'lays-sizzlin-hot', '#AbCD123', '<p>Lay\'s is a brand of potato chips with different flavors, as well as the name of the company that founded the chip brand in the United States.</p>', '<p>A chip (American English and Australian English) or crisp (British English and Irish English) is a snack food in the form of a crisp, flat or slightly bowl shaped, bite-sized unit. Some chips can be made into dishes and served as an appetizer, side, hors d\'oeuvre, etc. Some types of chip are often served in the combination plate, chips and dip. Other chips are sweet or strongly flavored or fragile. Tortilla chips can be used for chips and salsa, nachoes, bean dip, guacamole, or a layered dip containing multiple of these.</p>', '55gm', '1-Lays Sizzlin Hot-8616-09-09-2024.webp', NULL, 40, 70, 10, 'flat', 'active', 'deactive', NULL, NULL, NULL, 'active', NULL, '2024-09-09 00:11:59', '2024-09-09 03:37:29'),
(4, '1', '5', 'Samsung Galaxy S23 Ultra', 'samsung-galaxy-s23-ultra', '#987ygc', '<p>Samsung&rsquo;s Galaxy S23 lineup (which also includes the S23+, a model I haven&rsquo;t tested yet) are not game-changing devices in the least&mdash;and most people don&rsquo;t need all these high-end cameras and tremendous horsepower. But I have to remind myself that sometimes it&rsquo;s OK to pay up for the best of the best. It&rsquo;s nice not having to squint at a dim screen on a sunny day, and to have the ability to play a demanding game at its highest fidelity.</p>', '<p>Samsung&rsquo;s Galaxy S23 lineup (which also includes the S23+, a model I haven&rsquo;t tested yet) are not game-changing devices in the least&mdash;and most people don&rsquo;t need all these high-end cameras and tremendous horsepower. But I have to remind myself that sometimes it&rsquo;s OK to pay up for the best of the best. It&rsquo;s nice not having to squint at a dim screen on a sunny day, and to have the ability to play a demanding game at its highest fidelity.</p>', '120gm', '1-Samsung Galaxy S23 Ultra-1461-09-09-2024.webp', NULL, 75000, 90000, 5, 'percentage', 'deactive', 'deactive', '5', 'outer', 500, 'active', NULL, '2024-09-09 00:20:01', '2024-09-09 00:52:05'),
(5, '1', '4', 'Leather of Bangladesh', 'leather-of-bangladesh', '#098mYc', '<p>Leather is a strong, flexible and durable material obtained from the tanning, or chemical treatment, of animal skins and hides to prevent decay. The most common leathers come from cattle, sheep, goats, equine animals, buffalo, pigs and hogs, and aquatic animals such as seals and alligators.</p>', '<p>Leather can be made to absorb water, resist water or be completely waterproof. Most leathers manufactured for the shoe, bag, upholstery and leather goods industries offer a degree of water resistance that enables the leather to get wet yet, after drying, retain the properties of elasticity and shape. Many leathers for leather goods are treated to avoid marks from water spotting in light rain. Waterproofing can be made for specific applications, particularly for outdoor shoes and boots that allow for walking several hours in the rain without getting wet feet. Most waterproof leathers are made from cattle hides.Leather is one of the most versatile materials known. This is due to the unique arrangement of complex natural fibres that give the variations on the different types of hides and skins. Chemical and physical processes are tailored to give specific properties and performance to the hides and skins as they are being converted into leather. For definition: The skins from small animals are called skins, and those from large animals are called hides. Here we highlight some of the most important variations of key leather properties.</p>', '350gm', '1-Leather of Bangladesh-8418-09-09-2024.jpg', NULL, 40000, 45000, NULL, NULL, 'deactive', 'deactive', '3', 'outer', 1000, 'active', NULL, '2024-09-09 00:25:21', '2024-09-09 00:52:03'),
(6, '1', '3', 'Chocolate Cake', 'chocolate-cake', '#mmkO098', '<p>A breadlike food made from a dough or batter that is usually fried or baked in small flat shapes and is often unleavened. b. : a sweet baked food made from a dough or thick batter usually containing flour and sugar and often shortening, eggs, and a raising agent (such as baking powder)</p>', '<p>Cake is a flour confection made from flour, sugar, and other ingredients and is usually baked. In their oldest forms, cakes were modifications of bread, but cakes now cover a wide range of preparations that can be simple or elaborate and which share features with desserts such as pastries, meringues, custards, and pies. The most common ingredients include flour, sugar, eggs, fat (such as butter, oil, or margarine), a liquid, and a leavening agent, such as baking soda or baking powder. Common additional ingredients include dried, candied, or fresh fruit, nuts, cocoa, and extracts such as vanilla, with numerous substitutions for the primary ingredients. Cakes can also be filled with fruit preserves, nuts, or dessert sauces (like custard, jelly, cooked fruit, whipped cream, or syrups),[1] iced with buttercream or other icings, and decorated with marzipan, piped borders, or candied fruit. Cake is often served as a celebratory dish on ceremonial occasions, such as weddings, anniversaries, and birthdays. There are countless cake recipes; some are bread-like, some are rich and elaborate, and many are centuries old. Cake making is no longer a complicated procedure; while at one time considerable labor went into cake making (particularly the whisking of egg foams), baking equipment and directions have been simplified so that even the most amateur of cooks may bake a cake.</p>', NULL, '1-Chocolate Cake-1880-09-09-2024.jpg', NULL, 1000, 700, NULL, 'Select Type', 'deactive', 'deactive', '2', 'inner', 60, 'active', NULL, '2024-09-09 03:25:51', '2024-09-09 03:37:27'),
(7, '1', '4', 'Bangladeshi Saree', 'bangladeshi-saree', '#saree129', '<p>The sari (or saree) is traditional attire for women of South Asian (especially Indian) descent and is essentially a long piece of fabric that is draped around the body. It is usually worn together with a short fitted blouse, known as a choli, and a long petticoat.</p>', '<p>A sari (sometimes also saree or sadi)[note 1] is a women\'s garment from the Indian subcontinent. It consists of an un-stitched stretch of woven fabric arranged over the body as a robe, with one end attached to the waist, while the other end rests over one shoulder as a stole (shawl), sometimes baring a part of the midriff. It may vary from 4.1 to 8.2 metres (4.5 to 9 yards) in length, and 60 to 120 centimetres (24 to 47 inches) in breadth, and is a form of ethnic wear in India, Sri Lanka, Nepal, Bangladesh, Pakistan. There are various names and styles of sari manufacture and draping, the most common being the Nivi style. The sari is worn with a fitted bodice also called a choli (ravike or kuppasa in southern India, and cholo in Nepal) and a petticoat called ghagra, parkar, or ul-pavadai.It remains fashionable in the Indian subcontinent today.</p>', NULL, '1-Bangladeshi Saree-1129-09-09-2024.webp', NULL, 1400, 1400, 100, 'flat', 'active', 'deactive', '1', 'inner', 60, 'active', NULL, '2024-09-09 03:29:59', '2024-09-09 03:37:28');

-- --------------------------------------------------------

--
-- Table structure for table `product_tag`
--

CREATE TABLE `product_tag` (
  `product_id` bigint UNSIGNED NOT NULL,
  `tag_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_tag`
--

INSERT INTO `product_tag` (`product_id`, `tag_id`) VALUES
(2, 7),
(2, 4),
(2, 3),
(3, 8),
(3, 5),
(3, 4),
(3, 3),
(4, 16),
(4, 15),
(4, 13),
(4, 12),
(4, 4),
(5, 25),
(5, 22),
(5, 21),
(5, 16),
(5, 7),
(5, 5),
(5, 3),
(6, 25),
(6, 24),
(6, 23),
(6, 21),
(6, 14),
(6, 13),
(6, 9),
(6, 6),
(6, 3),
(7, 25),
(7, 23),
(7, 22),
(7, 21),
(7, 19),
(7, 16),
(7, 13),
(7, 10),
(7, 8),
(7, 7),
(7, 5),
(7, 3);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('fpdF4FEIqbinynUmwbR5UxpynkhuSN5Ok6awDDaU', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiMWxOQmU0SEUzdGQ4NllEUEE1cUpUSHR5WmhBNVRDNUJGNnBRc3NNZyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Njk6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9ib29raWUvZnJvbnRlbmQvcHJvZHVjdC9zaW5nbGUvbGF5cy1zaXp6bGluLWhvdCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1725904098);

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE `sizes` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `size_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'deactive',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sizes`
--

INSERT INTO `sizes` (`id`, `user_id`, `size_title`, `size`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(2, '1', 'small', 's', 'deactive', NULL, '2024-08-26 03:47:36', '2024-08-26 03:47:36'),
(3, '1', 'medium', 'm', 'deactive', NULL, '2024-08-25 23:41:46', '2024-08-26 04:36:24'),
(4, '1', 'large', 'l', 'deactive', NULL, '2024-08-26 00:13:20', '2024-08-26 03:49:15');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'deactive',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `title`, `slug`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Men', 'men', 'deactive', '2024-08-24 02:20:02', '2024-08-22 03:20:26', '2024-08-24 02:20:02'),
(2, 'Women', 'women-girl', 'deactive', '2024-08-22 03:11:35', '2024-08-22 03:09:50', '2024-08-22 03:11:35'),
(3, 'love', 'love', 'deactive', NULL, '2024-08-24 02:20:10', '2024-08-24 02:20:10'),
(4, 'live', 'live', 'deactive', NULL, '2024-08-24 02:20:16', '2024-08-24 02:20:16'),
(5, 'we', 'we', 'deactive', NULL, '2024-08-24 02:20:21', '2024-08-24 02:20:21'),
(6, 'saveus', 'saveus', 'deactive', NULL, '2024-08-24 02:20:26', '2024-08-24 02:20:26'),
(7, 'design', 'design', 'deactive', NULL, '2024-08-24 02:20:32', '2024-08-24 02:20:32'),
(8, 'culture', 'culture', 'deactive', NULL, '2024-08-24 02:20:48', '2024-08-24 02:20:48'),
(9, 'food', 'food', 'deactive', NULL, '2024-09-09 00:12:35', '2024-09-09 00:12:35'),
(10, 'healthy', 'healthy', 'deactive', NULL, '2024-09-09 00:12:46', '2024-09-09 00:12:46'),
(11, 'foodgasm', 'foodgasm', 'deactive', NULL, '2024-09-09 00:12:57', '2024-09-09 00:12:57'),
(12, 'cybersecurity', 'cybersecurity', 'deactive', NULL, '2024-09-09 00:13:21', '2024-09-09 00:13:21'),
(13, 'future', 'future', 'deactive', NULL, '2024-09-09 00:13:27', '2024-09-09 00:13:27'),
(14, 'entrepreneur', 'entrepreneur', 'deactive', NULL, '2024-09-09 00:13:34', '2024-09-09 00:13:34'),
(15, 'internet', 'internet', 'deactive', NULL, '2024-09-09 00:13:44', '2024-09-09 00:13:44'),
(16, 'marketing', 'marketing', 'deactive', NULL, '2024-09-09 00:13:56', '2024-09-09 00:13:56'),
(17, 'computerscience', 'computerscience', 'deactive', NULL, '2024-09-09 00:14:05', '2024-09-09 00:14:05'),
(18, 'hoodie', 'hoodie', 'deactive', NULL, '2024-09-09 00:14:49', '2024-09-09 00:14:49'),
(19, 'saree', 'saree', 'deactive', NULL, '2024-09-09 00:14:54', '2024-09-09 00:14:54'),
(20, 'panjabi', 'panjabi', 'deactive', NULL, '2024-09-09 00:14:59', '2024-09-09 00:14:59'),
(21, 'women', 'women', 'deactive', NULL, '2024-09-09 00:15:07', '2024-09-09 00:15:07'),
(22, 'beauty', 'beauty', 'deactive', NULL, '2024-09-09 00:15:14', '2024-09-09 00:15:15'),
(23, 'onlineshop', 'onlineshop', 'deactive', NULL, '2024-09-09 00:15:22', '2024-09-09 00:15:22'),
(24, 'cake', 'cake', 'deactive', NULL, '2024-09-09 00:15:27', '2024-09-09 00:15:27'),
(25, 'summer', 'summer', 'deactive', NULL, '2024-09-09 00:15:36', '2024-09-09 00:15:36');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `designation` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `image`, `email_verified_at`, `designation`, `website`, `contact`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Fahim Hossain Munna', 'admin@dev.com', 'default.png', '2024-08-20 01:14:45', NULL, NULL, NULL, '$2y$12$LiyA7g76.VLmjlRRDCH6puz6QpithLf0BT88JKr1yfc/xbHaQlc.y', '65mqQ7KO1bOz9QuDo10lt6zMvBCEtt9bZ7he7hdNiaDLG6okaohElWaP0WQK', '2024-08-20 01:14:46', '2024-08-20 01:14:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_tag`
--
ALTER TABLE `blog_tag`
  ADD KEY `blog_tag_blog_id_foreign` (`blog_id`),
  ADD KEY `blog_tag_tag_id_foreign` (`tag_id`);

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
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_email_unique` (`email`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventories`
--
ALTER TABLE `inventories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_tag`
--
ALTER TABLE `product_tag`
  ADD KEY `product_tag_product_id_foreign` (`product_id`),
  ADD KEY `product_tag_tag_id_foreign` (`tag_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `inventories`
--
ALTER TABLE `inventories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog_tag`
--
ALTER TABLE `blog_tag`
  ADD CONSTRAINT `blog_tag_blog_id_foreign` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `blog_tag_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_tag`
--
ALTER TABLE `product_tag`
  ADD CONSTRAINT `product_tag_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_tag_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
