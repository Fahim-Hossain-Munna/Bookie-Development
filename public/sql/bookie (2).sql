-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 31, 2024 at 12:09 PM
-- Server version: 8.0.30
-- PHP Version: 8.3.9

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
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'deactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `user_id`, `category_id`, `title`, `slug`, `description`, `image`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 2, 'টিএসসিতে দিনরাত খাটছেন শিক্ষার্থীরা, গতকাল সংগ্রহ প্রায় দেড় কোটি টাকা', 'tiessite-dinrat-khatchen-sikshartheera-gtkal-snggrh-pray-der-koti-taka', '<p>বন্যার্ত মানুষকে সহযোগিতা করার জন্য আজ শনিবার টানা তৃতীয় দিনের মতো ঢাকা বিশ্ববিদ্যালয়ের ছাত্র-শিক্ষক কেন্দ্রে (টিএসসি) গণত্রাণ সংগ্রহ করছে বৈষম্যবিরোধী ছাত্র আন্দোলন৷</p>\r\n<p>নগদ অর্থের পাশাপাশি বিভিন্ন শ্রেণি-পেশার মানুষেরা গতকাল যে পরিমাণ ত্রাণসামগ্রী টিএসসিতে বৈষম্যবিরোধী ছাত্র আন্দোলনের কাছে তুলে দিয়েছেন, তা বহন করতে প্রায় ৫০টি ট্রাক লেগেছে৷ দিনভর ত্রাণ ও নগদ অর্থ সংগ্রহের পর রাতে প্যাকেজিংয়েও অংশ নেন বিপুলসংখ্যক ছাত্র-ছাত্রী৷ পরে ট্রাকে করে ত্রাণ পাঠানো হয়েছে দুর্গত এলাকায়৷ আজ সকাল ১০টা থেকে টিএসসির ফটকে আবারও ত্রাণ সংগ্রহ কর্মসূচি শুরু হয়েছে চলবে রাত আটটা পর্যন্ত</p>\r\n<p>সকাল থেকে শুরু হওয়া এই কর্মসূচি চলবে রাত আটটা পর্যন্ত৷ গতকাল শুক্রবার কর্মসূচির দ্বিতীয় দিনে বৈষম্যবিরোধী ছাত্র আন্দোলনের এই উদ্যোগে ১ কোটি ৪২ লাখ টাকা&nbsp; ৫০ হাজার ১৯৬ টাকা জমা পড়েছে ৷</p>', '1-টিএসসিতে দিনরাত খাটছেন শিক্ষার্থীরা, গতকাল সংগ্রহ প্রায় দেড় কোটি টাকা-24-08-2024-137.webp', 'deactive', '2024-08-24 03:13:15', '2024-08-24 03:13:15', NULL),
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
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'deactive',
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
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'deactive',
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
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
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
(30, '2024_08_29_092043_create_product_tag_table', 5);

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_short_description` longtext COLLATE utf8mb4_unicode_ci,
  `product_description` longtext COLLATE utf8mb4_unicode_ci,
  `product_unit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hole_price` float DEFAULT NULL,
  `purchase_price` float DEFAULT NULL,
  `selling_price` float DEFAULT NULL,
  `discount_price` float DEFAULT NULL,
  `discount_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `feature` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'deactive',
  `today_deal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'deactive',
  `vat_tax` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_rate` float DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'deactive',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `user_id`, `category_id`, `product_name`, `product_slug`, `product_code`, `product_short_description`, `product_description`, `product_unit`, `product_thumbnail`, `hole_price`, `purchase_price`, `selling_price`, `discount_price`, `discount_type`, `feature`, `today_deal`, `vat_tax`, `shipping_type`, `shipping_rate`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '1', '6', 'Fiver Gig', 'fiver-gig', '#AbCD123', '<p>Hey! I am PHP Senior( 8+ years) with great knowledge working of 1)WordPress/Woo commerce 2 Laravel 3)JavaScript 4HTML 5)CSS 6)CodeIgniter I love work with Laravel/WordPress and have great experience with customization &amp; optimization of theme , creating &amp; support plugin , etc. Let\'s start to work! Kind regards, Adeel</p>', '<p>Discuss requirements before ordering. Thank you.t!!</p>\r\n<p>&nbsp;</p>\r\n<p>If you\'re looking for a skilled PHP developer who can create or fix Laravel, CodeIgniter, or any PHP website, then you\'ve come to the right place.</p>\r\n<p>&nbsp;</p>\r\n<p>As a PHP developer, I understand the ins and outs of creating robust web applications using some of the most popular PHP frameworks available today. Whether you need a brand new website built from scratch or an existing fixed and improved, I can help.</p>\r\n<p>I can work with your existing codebase, or start from scratch to create a custom PHP website that perfectly meets your needs. I can create websites that are responsive and user-friendly, with a clean and modern design that showcases your brand and captures the attention of your audience.</p>\r\n<p>&nbsp;</p>\r\n<p>I have experience with a range of PHP frameworks, including Laravel, CodeIgniter, Symfony, and CakePHP, among others. I can work with databases such as MySQL, PostgreSQL, and MongoDB, and I am well-versed in HTML, CSS, and JavaScript.</p>\r\n<p>Whether you need a simple or a complex web application with advanced features, I can help you achieve your goals.</p>\r\n<p>Contact me today to discuss your project and see how I can help you</p>', '1', '1-Fiver Gig-7685-31-08-2024.png', NULL, 500, 800, 100, 'flat', 'deactive', 'deactive', '3', 'inner', 60, 'deactive', NULL, '2024-08-31 03:44:35', '2024-08-31 03:44:35');

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
(1, 8),
(1, 7);

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
('cOkZhqgadOU6VuyZIHphSza7VK9ukps31rIbktne', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiOHZmazlPTnR1NHFGeTdUbnA4ODFidmlFTXFET2JVZnJodm82dURkWSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czozNjoiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2Jvb2tpZS9wcm9kdWN0Ijt9fQ==', 1725098374),
('TfnQltleqGr8P90StkFGNrrI9zCyhJEHuQhh0xiO', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiUUswd24zdDBpMDRxMEc5SW5BcjlpbGU2VjVXVkxyaFoxOVhwMGdnbSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9ib29raWUvcHJvZHVjdCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1724925717);

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE `sizes` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'deactive',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sizes`
--

INSERT INTO `sizes` (`id`, `user_id`, `size_title`, `size`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '1', 'extra small', 'xs', 'deactive', NULL, '2024-08-26 03:47:06', '2024-08-26 03:47:06'),
(2, '1', 'small', 's', 'deactive', NULL, '2024-08-26 03:47:36', '2024-08-26 03:47:36'),
(3, '1', 'medium', 'm', 'deactive', NULL, '2024-08-25 23:41:46', '2024-08-26 04:36:24'),
(4, '1', 'large', 'l', 'deactive', NULL, '2024-08-26 00:13:20', '2024-08-26 03:49:15');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'deactive',
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
(8, 'culture', 'culture', 'deactive', NULL, '2024-08-24 02:20:48', '2024-08-24 02:20:48');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `image`, `email_verified_at`, `designation`, `website`, `contact`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Fahim Hossain Munna', 'admin@dev.com', 'default.png', '2024-08-20 01:14:45', NULL, NULL, NULL, '$2y$12$LiyA7g76.VLmjlRRDCH6puz6QpithLf0BT88JKr1yfc/xbHaQlc.y', '4LDLaN34By', '2024-08-20 01:14:46', '2024-08-20 01:14:46');

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
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
