-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2023 at 10:55 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mobarmigeblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keyword` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `navbar_status` tinyint(4) NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `create_by` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `image`, `meta_title`, `meta_description`, `meta_keyword`, `navbar_status`, `status`, `create_by`, `created_at`, `updated_at`) VALUES
(2, 'JAVA', 'java', 'get', '202302021722c4922f.jpg', 'JAVA', 'JAVA', 'JAVA', 0, 0, 1, '2023-01-12 21:53:37', '2023-02-02 16:22:39'),
(3, 'SQL', 'sql', 'SQL', '202302021723x655.png', 'SQL', 'SQL', 'SQL', 0, 0, 1, '2023-01-16 21:15:31', '2023-02-02 16:23:15'),
(7, 'PHP', 'php', '<p>PHP</p>', '202302021721imgbin_web-banner-png.png', 'PHP', 'PHP', 'PHP', 0, 0, 1, '2023-02-02 16:21:57', '2023-02-02 16:21:57');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment_body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `user_id`, `comment_body`, `created_at`, `updated_at`) VALUES
(1, 4, 1, 'first comment', '2023-01-31 19:35:55', '2023-01-31 19:35:55'),
(2, 1, 2, 'second comment', '2023-01-31 19:57:15', '2023-01-31 19:57:15'),
(7, 1, 2, 'nice', '2023-02-01 21:21:58', '2023-02-01 21:21:58'),
(8, 1, 2, 'hello', '2023-02-01 21:24:20', '2023-02-01 21:24:20'),
(10, 2, 1, 'java', '2023-02-02 16:27:58', '2023-02-02 16:27:58'),
(11, 1, 1, 'SQL', '2023-02-02 16:28:15', '2023-02-02 16:28:15'),
(12, 4, 1, 'php', '2023-02-02 16:28:42', '2023-02-02 16:28:42');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_01_10_212222_add_rose_as_to_users_tables', 2),
(6, '2023_01_11_151241_create_categories_table', 3),
(7, '2023_01_11_152830_create_categories_table', 4),
(9, '2023_01_16_192144_create_posts_table', 5),
(10, '2023_01_31_192938_create_comments_table', 6),
(11, '2023_02_02_175744_create_settings_table', 7),
(12, '2023_02_09_143909_add_auth_type_to_users', 8),
(13, '2023_02_11_134944_create_videos_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `yt_iframe` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keyword` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `create_by` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `name`, `slug`, `image`, `description`, `yt_iframe`, `meta_title`, `meta_description`, `meta_keyword`, `status`, `create_by`, `created_at`, `updated_at`) VALUES
(1, 3, 'SQL and Mysql', 'sql-and-mysql', '202301282302portfolio-7.jpg', '<p>yyhh</p><p><br></p><p><br></p><div class=\"post-code-bg\" style=\"color: rgb(238, 255, 255); background-color: rgb(33, 33, 33); font-family: Consolas, \" courier=\"\" new\",=\"\" monospace;=\"\" font-size:=\"\" 14px;=\"\" line-height:=\"\" 19px;=\"\" white-space:=\"\" pre;\"=\"\" bis_skin_checked=\"1\"><div bis_skin_checked=\"1\"><span style=\"color: #89ddff;\"><</span><span style=\"color: #f07178;\">div</span><span style=\"color: #89ddff;\"> </span><span style=\"color: #c792ea;\">class</span><span style=\"color: #89ddff;\">=</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #c3e88d;\">sticky-top</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #89ddff;\">></span></div><div bis_skin_checked=\"1\">    <span style=\"color: #89ddff;\"><</span><span style=\"color: #f07178;\">nav</span><span style=\"color: #89ddff;\"> </span><span style=\"color: #c792ea;\">class</span><span style=\"color: #89ddff;\">=</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #c3e88d;\">navbar navbar-expand-lg bg-green navbar-dark</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #89ddff;\">></span></div><div bis_skin_checked=\"1\">            <span style=\"color: #89ddff;\"><</span><span style=\"color: #f07178;\">div</span><span style=\"color: #89ddff;\"> </span><span style=\"color: #c792ea;\">class</span><span style=\"color: #89ddff;\">=</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #c3e88d;\">container</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #89ddff;\">></span></div><div bis_skin_checked=\"1\">            <span style=\"color: #89ddff;\"><</span><span style=\"color: #f07178;\">button</span><span style=\"color: #89ddff;\"> </span><span style=\"color: #c792ea;\">class</span><span style=\"color: #89ddff;\">=</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #c3e88d;\">navbar-toggler</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #89ddff;\"> </span><span style=\"color: #c792ea;\">type</span><span style=\"color: #89ddff;\">=</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #c3e88d;\">button</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #89ddff;\"> </span><span style=\"color: #c792ea;\">data-bs-toggle</span><span style=\"color: #89ddff;\">=</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #c3e88d;\">collapse</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #89ddff;\"> </span><span style=\"color: #c792ea;\">data-bs-target</span><span style=\"color: #89ddff;\">=</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #c3e88d;\">#navbarSupportedContent</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #89ddff;\"> </span><span style=\"color: #c792ea;\">aria-controls</span><span style=\"color: #89ddff;\">=</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #c3e88d;\">navbarSupportedContent</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #89ddff;\"> </span><span style=\"color: #c792ea;\">aria-expanded</span><span style=\"color: #89ddff;\">=</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #c3e88d;\">false</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #89ddff;\"> </span><span style=\"color: #c792ea;\">aria-label</span><span style=\"color: #89ddff;\">=</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #c3e88d;\">Toggle navigation</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #89ddff;\">></span></div><div bis_skin_checked=\"1\">                <span style=\"color: #89ddff;\"><</span><span style=\"color: #f07178;\">span</span><span style=\"color: #89ddff;\"> </span><span style=\"color: #c792ea;\">class</span><span style=\"color: #89ddff;\">=</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #c3e88d;\">navbar-toggler-icon</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #89ddff;\">><!--</span--><span style=\"color: #f07178;\">span</span><span style=\"color: #89ddff;\">></span></span></div><div bis_skin_checked=\"1\">            <span style=\"color: #89ddff;\"><!--</span--><span style=\"color: #f07178;\">button</span><span style=\"color: #89ddff;\">></span></span></div><div bis_skin_checked=\"1\">            <span style=\"color: #89ddff;\"><</span><span style=\"color: #f07178;\">div</span><span style=\"color: #89ddff;\"> </span><span style=\"color: #c792ea;\">class</span><span style=\"color: #89ddff;\">=</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #c3e88d;\">collapse navbar-collapse</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #89ddff;\"> </span><span style=\"color: #c792ea;\">id</span><span style=\"color: #89ddff;\">=</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #c3e88d;\">navbarSupportedContent</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #89ddff;\">></span></div><div bis_skin_checked=\"1\">                <span style=\"color: #89ddff;\"><</span><span style=\"color: #f07178;\">ul</span><span style=\"color: #89ddff;\"> </span><span style=\"color: #c792ea;\">class</span><span style=\"color: #89ddff;\">=</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #c3e88d;\">navbar-nav me-auto mb-2 mb-lg-0</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #89ddff;\">></span></div><div bis_skin_checked=\"1\">                <span style=\"color: #89ddff;\"><</span><span style=\"color: #f07178;\">li</span><span style=\"color: #89ddff;\"> </span><span style=\"color: #c792ea;\">class</span><span style=\"color: #89ddff;\">=</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #c3e88d;\">nav-item</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #89ddff;\">></span></div><div bis_skin_checked=\"1\">                    <span style=\"color: #89ddff;\"><</span><span style=\"color: #f07178;\">a</span><span style=\"color: #89ddff;\"> </span><span style=\"color: #c792ea;\">class</span><span style=\"color: #89ddff;\">=</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #c3e88d;\">nav-link</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #89ddff;\">  </span><span style=\"color: #c792ea;\">href</span><span style=\"color: #89ddff;\">=</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #82aaff;\">{{</span><span style=\"color: #82aaff;\">route</span><span style=\"color: #89ddff;\">(\'</span><span style=\"color: #c3e88d;\">frontend</span><span style=\"color: #89ddff;\">\')</span><span style=\"color: #82aaff;\">}}</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #89ddff;\">></span>Home<span style=\"color: #89ddff;\"><!--</span--><span style=\"color: #f07178;\">a</span><span style=\"color: #89ddff;\">></span></span></div><div bis_skin_checked=\"1\">                <span style=\"color: #89ddff;\"><!--</span--><span style=\"color: #f07178;\">li</span><span style=\"color: #89ddff;\">></span></span></div><br><div bis_skin_checked=\"1\">                <span style=\"color: #89ddff;\"><</span><span style=\"color: #f07178;\">li</span><span style=\"color: #89ddff;\"> </span><span style=\"color: #c792ea;\">class</span><span style=\"color: #89ddff;\">=</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #c3e88d;\">nav-item dropdown</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #89ddff;\">></span></div><div bis_skin_checked=\"1\">                    <span style=\"color: #89ddff;\"><</span><span style=\"color: #f07178;\">a</span><span style=\"color: #89ddff;\"> </span><span style=\"color: #c792ea;\">class</span><span style=\"color: #89ddff;\">=</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #c3e88d;\">nav-link dropdown-toggle</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #89ddff;\"> </span><span style=\"color: #c792ea;\">href</span><span style=\"color: #89ddff;\">=</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #c3e88d;\">#</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #89ddff;\"> </span><span style=\"color: #c792ea;\">role</span><span style=\"color: #89ddff;\">=</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #c3e88d;\">button</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #89ddff;\"> </span><span style=\"color: #c792ea;\">data-bs-toggle</span><span style=\"color: #89ddff;\">=</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #c3e88d;\">dropdown</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #89ddff;\"> </span><span style=\"color: #c792ea;\">aria-expanded</span><span style=\"color: #89ddff;\">=</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #c3e88d;\">false</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #89ddff;\">></span></div><div bis_skin_checked=\"1\">                    Dropdown</div><div bis_skin_checked=\"1\">                    <span style=\"color: #89ddff;\"><!--</span--><span style=\"color: #f07178;\">a</span><span style=\"color: #89ddff;\">></span></span></div><div bis_skin_checked=\"1\">                    <span style=\"color: #89ddff;\"><</span><span style=\"color: #f07178;\">ul</span><span style=\"color: #89ddff;\"> </span><span style=\"color: #c792ea;\">class</span><span style=\"color: #89ddff;\">=</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #c3e88d;\">dropdown-menu</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #89ddff;\">></span></div><div bis_skin_checked=\"1\">                    <span style=\"color: #89ddff;\"><</span><span style=\"color: #f07178;\">li</span><span style=\"color: #89ddff;\">><</span><span style=\"color: #f07178;\">a</span><span style=\"color: #89ddff;\"> </span><span style=\"color: #c792ea;\">class</span><span style=\"color: #89ddff;\">=</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #c3e88d;\">dropdown-item</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #89ddff;\"> </span><span style=\"color: #c792ea;\">href</span><span style=\"color: #89ddff;\">=</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #c3e88d;\">#</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #89ddff;\">></span>Action<span style=\"color: #89ddff;\"><!--</span--><span style=\"color: #f07178;\">a</span><span style=\"color: #89ddff;\">><!--</span--><span style=\"color: #f07178;\">li</span><span style=\"color: #89ddff;\">></span></span></span></div><div bis_skin_checked=\"1\">                    <span style=\"color: #89ddff;\"><</span><span style=\"color: #f07178;\">li</span><span style=\"color: #89ddff;\">><</span><span style=\"color: #f07178;\">a</span><span style=\"color: #89ddff;\"> </span><span style=\"color: #c792ea;\">class</span><span style=\"color: #89ddff;\">=</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #c3e88d;\">dropdown-item</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #89ddff;\"> </span><span style=\"color: #c792ea;\">href</span><span style=\"color: #89ddff;\">=</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #c3e88d;\">#</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #89ddff;\">></span>Another action<span style=\"color: #89ddff;\"><!--</span--><span style=\"color: #f07178;\">a</span><span style=\"color: #89ddff;\">><!--</span--><span style=\"color: #f07178;\">li</span><span style=\"color: #89ddff;\">></span></span></span></div><div bis_skin_checked=\"1\">                    <span style=\"color: #89ddff;\"><</span><span style=\"color: #f07178;\">li</span><span style=\"color: #89ddff;\">><</span><span style=\"color: #f07178;\">hr</span><span style=\"color: #89ddff;\"> </span><span style=\"color: #c792ea;\">class</span><span style=\"color: #89ddff;\">=</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #c3e88d;\">dropdown-divider</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #89ddff;\">><!--</span--><span style=\"color: #f07178;\">li</span><span style=\"color: #89ddff;\">></span></span></div><div bis_skin_checked=\"1\">                    <span style=\"color: #89ddff;\"><</span><span style=\"color: #f07178;\">li</span><span style=\"color: #89ddff;\">><</span><span style=\"color: #f07178;\">a</span><span style=\"color: #89ddff;\"> </span><span style=\"color: #c792ea;\">class</span><span style=\"color: #89ddff;\">=</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #c3e88d;\">dropdown-item</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #89ddff;\"> </span><span style=\"color: #c792ea;\">href</span><span style=\"color: #89ddff;\">=</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #c3e88d;\">#</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #89ddff;\">></span>Something else here<span style=\"color: #89ddff;\"><!--</span--><span style=\"color: #f07178;\">a</span><span style=\"color: #89ddff;\">><!--</span--><span style=\"color: #f07178;\">li</span><span style=\"color: #89ddff;\">></span></span></span></div><div bis_skin_checked=\"1\">                    <span style=\"color: #89ddff;\"><!--</span--><span style=\"color: #f07178;\">ul</span><span style=\"color: #89ddff;\">></span></span></div><div bis_skin_checked=\"1\">                <span style=\"color: #89ddff;\"><!--</span--><span style=\"color: #f07178;\">li</span><span style=\"color: #89ddff;\">></span></span></div><div bis_skin_checked=\"1\">                <span style=\"color: #89ddff;\">@php</span></div><div bis_skin_checked=\"1\">                <span style=\"color: #89ddff;\">$</span>categories <span style=\"color: #89ddff;\">=</span> App\\Models\\<span style=\"color: #ffcb6b;\">Category</span><span style=\"color: #89ddff;\">::</span><span style=\"color: #82aaff;\">where</span><span style=\"color: #89ddff;\">(</span><span style=\"color: #89ddff;\">\'</span><span style=\"color: #c3e88d;\">navbar_status</span><span style=\"color: #89ddff;\">\'</span><span style=\"color: #89ddff;\">,</span><span style=\"color: #89ddff;\">\'</span><span style=\"color: #c3e88d;\">0</span><span style=\"color: #89ddff;\">\'</span><span style=\"color: #89ddff;\">)-></span><span style=\"color: #82aaff;\">where</span><span style=\"color: #89ddff;\">(</span><span style=\"color: #89ddff;\">\'</span><span style=\"color: #c3e88d;\">status</span><span style=\"color: #89ddff;\">\'</span><span style=\"color: #89ddff;\">,</span><span style=\"color: #89ddff;\">\'</span><span style=\"color: #c3e88d;\">0</span><span style=\"color: #89ddff;\">\'</span><span style=\"color: #89ddff;\">)-></span><span style=\"color: #82aaff;\">get</span><span style=\"color: #89ddff;\">();</span></div><div bis_skin_checked=\"1\">                <span style=\"color: #89ddff;\">@endphp</span></div><div bis_skin_checked=\"1\">                <span style=\"color: #89ddff;\">@foreach </span>(<span style=\"color: #89ddff;\">$</span>categories <span style=\"color: #89ddff;\">as</span> <span style=\"color: #89ddff;\">$</span>cateitem)</div><div bis_skin_checked=\"1\">                    <span style=\"color: #89ddff;\"><</span><span style=\"color: #f07178;\">li</span><span style=\"color: #89ddff;\"> </span><span style=\"color: #c792ea;\">class</span><span style=\"color: #89ddff;\">=</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #c3e88d;\">nav-item</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #89ddff;\">></span></div><div bis_skin_checked=\"1\">                        <span style=\"color: #89ddff;\"><</span><span style=\"color: #f07178;\">a</span><span style=\"color: #89ddff;\"> </span><span style=\"color: #c792ea;\">class</span><span style=\"color: #89ddff;\">=</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #c3e88d;\">nav-link</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #89ddff;\"> </span><span style=\"color: #c792ea;\">href</span><span style=\"color: #89ddff;\">=</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #82aaff;\">{{</span><span style=\"color: #82aaff;\">url</span><span style=\"color: #89ddff;\">(\'</span><span style=\"color: #c3e88d;\">tutorial/</span><span style=\"color: #89ddff;\">\'.$</span>cateitem<span style=\"color: #89ddff;\">-></span>slug<span style=\"color: #89ddff;\">)</span><span style=\"color: #82aaff;\">}}</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #89ddff;\">></span><span style=\"color: #82aaff;\">{{</span><span style=\"color: #89ddff;\">$</span>cateitem<span style=\"color: #89ddff;\">-></span>name<span style=\"color: #82aaff;\">}}</span><span style=\"color: #89ddff;\"><!--</span--><span style=\"color: #f07178;\">a</span><span style=\"color: #89ddff;\">></span></span></div><div bis_skin_checked=\"1\">                    <span style=\"color: #89ddff;\"><!--</span--><span style=\"color: #f07178;\">li</span><span style=\"color: #89ddff;\">></span></span></div><div bis_skin_checked=\"1\">                <span style=\"color: #89ddff;\">@endforeach</span></div><br><div bis_skin_checked=\"1\">                <span style=\"color: #89ddff;\"><!--</span--><span style=\"color: #f07178;\">ul</span><span style=\"color: #89ddff;\">></span></span></div><br><div bis_skin_checked=\"1\">            <span style=\"color: #89ddff;\"><!--</span--><span style=\"color: #f07178;\">div</span><span style=\"color: #89ddff;\">></span></span></div><div bis_skin_checked=\"1\">            <span style=\"color: #89ddff;\"><!--</span--><span style=\"color: #f07178;\">div</span><span style=\"color: #89ddff;\">></span></span></div><div bis_skin_checked=\"1\">      <span style=\"color: #89ddff;\"><!--</span--><span style=\"color: #f07178;\">nav</span><span style=\"color: #89ddff;\">></span></span></div><div bis_skin_checked=\"1\"><span style=\"color: #89ddff;\"><!--</span--><span style=\"color: #f07178;\">div</span><span style=\"color: #89ddff;\">></span></span></div><br></div><p> </p>', 'ytyy.com', 'News meta', 'uhu', 'yhgy', 0, 1, '2023-01-16 20:41:52', '2023-02-02 16:27:08'),
(2, 2, 'java and sql', 'java-and-sql', '202301282302portfolio-4.jpg', '<p>this is some code about JAVA :</p><div style=\"color: rgb(238, 255, 255); background-color: rgb(33, 33, 33); font-family: Consolas, \" courier=\"\" new\",=\"\" monospace;=\"\" font-size:=\"\" 14px;=\"\" line-height:=\"\" 19px;=\"\" white-space:=\"\" pre;\"=\"\" bis_skin_checked=\"1\"><br><br><div bis_skin_checked=\"1\"><span style=\"color: #89ddff;\">&lt;</span><span style=\"color: #f07178;\">div</span><span style=\"color: #89ddff;\"> </span><span style=\"color: #c792ea;\">class</span><span style=\"color: #89ddff;\">=</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #c3e88d;\">global-navbar bg-white</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #89ddff;\">&gt;</span></div><div bis_skin_checked=\"1\">&nbsp; &nbsp; <span style=\"color: #89ddff;\">&lt;</span><span style=\"color: #f07178;\">div</span><span style=\"color: #89ddff;\"> </span><span style=\"color: #c792ea;\">class</span><span style=\"color: #89ddff;\">=</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #c3e88d;\">container</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #89ddff;\">&gt;</span></div><div bis_skin_checked=\"1\">&nbsp; &nbsp; &nbsp; &nbsp; <span style=\"color: #89ddff;\">&lt;</span><span style=\"color: #f07178;\">div</span><span style=\"color: #89ddff;\"> </span><span style=\"color: #c792ea;\">class</span><span style=\"color: #89ddff;\">=</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #c3e88d;\">row</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #89ddff;\">&gt;</span></div><div bis_skin_checked=\"1\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style=\"color: #89ddff;\">&lt;</span><span style=\"color: #f07178;\">div</span><span style=\"color: #89ddff;\"> </span><span style=\"color: #c792ea;\">class</span><span style=\"color: #89ddff;\">=</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #c3e88d;\">col-md-3</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #89ddff;\">&gt;</span></div><div bis_skin_checked=\"1\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style=\"color: #89ddff;\">&lt;</span><span style=\"color: #f07178;\">img</span><span style=\"color: #89ddff;\"> </span><span style=\"color: #c792ea;\">src</span><span style=\"color: #89ddff;\">=</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #82aaff;\">{{</span><span style=\"color: #82aaff;\">asset</span><span style=\"color: #89ddff;\">(\'</span><span style=\"color: #c3e88d;\">Image/logo.png</span><span style=\"color: #89ddff;\">\')</span><span style=\"color: #82aaff;\">}}</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #89ddff;\"> &nbsp;</span><span style=\"color: #c792ea;\">width</span><span style=\"color: #89ddff;\">=</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #c3e88d;\">100px</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #89ddff;\"> </span><span style=\"color: #c792ea;\">alt</span><span style=\"color: #89ddff;\">=</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #c3e88d;\">logo</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #89ddff;\">&gt;</span></div><div bis_skin_checked=\"1\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style=\"color: #89ddff;\"><!--</span--><span style=\"color: #f07178;\">div</span><span style=\"color: #89ddff;\">&gt;</span></span></div><div bis_skin_checked=\"1\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style=\"color: #89ddff;\">&lt;</span><span style=\"color: #f07178;\">div</span><span style=\"color: #89ddff;\"> </span><span style=\"color: #c792ea;\">class</span><span style=\"color: #89ddff;\">=</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #c3e88d;\">col-md-9 my-auto</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #89ddff;\">&gt;</span></div><div bis_skin_checked=\"1\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style=\"color: #89ddff;\">&lt;</span><span style=\"color: #f07178;\">div</span><span style=\"color: #89ddff;\"> </span><span style=\"color: #c792ea;\">class</span><span style=\"color: #89ddff;\">=</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #c3e88d;\">border text-center &nbsp;p-2</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #89ddff;\">&gt;</span></div><div bis_skin_checked=\"1\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style=\"color: #89ddff;\">&lt;</span><span style=\"color: #f07178;\">h5</span><span style=\"color: #89ddff;\">&gt;</span> &nbsp;advestire here<span style=\"color: #89ddff;\"><!--</span--><span style=\"color: #f07178;\">h5</span><span style=\"color: #89ddff;\">&gt;</span></span></div><div bis_skin_checked=\"1\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style=\"color: #89ddff;\"><!--</span--><span style=\"color: #f07178;\">div</span><span style=\"color: #89ddff;\">&gt;</span></span></div><div bis_skin_checked=\"1\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style=\"color: #89ddff;\"><!--</span--><span style=\"color: #f07178;\">div</span><span style=\"color: #89ddff;\">&gt;</span></span></div><div bis_skin_checked=\"1\">&nbsp; &nbsp; &nbsp; &nbsp; <span style=\"color: #89ddff;\"><!--</span--><span style=\"color: #f07178;\">div</span><span style=\"color: #89ddff;\">&gt;</span></span></div><div bis_skin_checked=\"1\">&nbsp; &nbsp; <span style=\"color: #89ddff;\"><!--</span--><span style=\"color: #f07178;\">div</span><span style=\"color: #89ddff;\">&gt;</span></span></div><div bis_skin_checked=\"1\"><span style=\"color: #89ddff;\"><!--</span--><span style=\"color: #f07178;\">div</span><span style=\"color: #89ddff;\">&gt;</span></span></div><br><div bis_skin_checked=\"1\"><span style=\"color: #89ddff;\">&lt;</span><span style=\"color: #f07178;\">div</span><span style=\"color: #89ddff;\"> </span><span style=\"color: #c792ea;\">class</span><span style=\"color: #89ddff;\">=</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #c3e88d;\">sticky-top</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #89ddff;\">&gt;</span></div><div bis_skin_checked=\"1\">&nbsp; &nbsp; <span style=\"color: #89ddff;\">&lt;</span><span style=\"color: #f07178;\">nav</span><span style=\"color: #89ddff;\"> </span><span style=\"color: #c792ea;\">class</span><span style=\"color: #89ddff;\">=</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #c3e88d;\">navbar navbar-expand-lg bg-green navbar-dark</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #89ddff;\">&gt;</span></div><div bis_skin_checked=\"1\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style=\"color: #89ddff;\">&lt;</span><span style=\"color: #f07178;\">div</span><span style=\"color: #89ddff;\"> </span><span style=\"color: #c792ea;\">class</span><span style=\"color: #89ddff;\">=</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #c3e88d;\">container</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #89ddff;\">&gt;</span></div><div bis_skin_checked=\"1\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style=\"color: #89ddff;\">&lt;</span><span style=\"color: #f07178;\">button</span><span style=\"color: #89ddff;\"> </span><span style=\"color: #c792ea;\">class</span><span style=\"color: #89ddff;\">=</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #c3e88d;\">navbar-toggler</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #89ddff;\"> </span><span style=\"color: #c792ea;\">type</span><span style=\"color: #89ddff;\">=</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #c3e88d;\">button</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #89ddff;\"> </span><span style=\"color: #c792ea;\">data-bs-toggle</span><span style=\"color: #89ddff;\">=</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #c3e88d;\">collapse</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #89ddff;\"> </span><span style=\"color: #c792ea;\">data-bs-target</span><span style=\"color: #89ddff;\">=</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #c3e88d;\">#navbarSupportedContent</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #89ddff;\"> </span><span style=\"color: #c792ea;\">aria-controls</span><span style=\"color: #89ddff;\">=</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #c3e88d;\">navbarSupportedContent</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #89ddff;\"> </span><span style=\"color: #c792ea;\">aria-expanded</span><span style=\"color: #89ddff;\">=</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #c3e88d;\">false</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #89ddff;\"> </span><span style=\"color: #c792ea;\">aria-label</span><span style=\"color: #89ddff;\">=</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #c3e88d;\">Toggle navigation</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #89ddff;\">&gt;</span></div><div bis_skin_checked=\"1\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style=\"color: #89ddff;\">&lt;</span><span style=\"color: #f07178;\">span</span><span style=\"color: #89ddff;\"> </span><span style=\"color: #c792ea;\">class</span><span style=\"color: #89ddff;\">=</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #c3e88d;\">navbar-toggler-icon</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #89ddff;\">&gt;<!--</span--><span style=\"color: #f07178;\">span</span><span style=\"color: #89ddff;\">&gt;</span></span></div><div bis_skin_checked=\"1\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style=\"color: #89ddff;\"><!--</span--><span style=\"color: #f07178;\">button</span><span style=\"color: #89ddff;\">&gt;</span></span></div><div bis_skin_checked=\"1\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style=\"color: #89ddff;\">&lt;</span><span style=\"color: #f07178;\">div</span><span style=\"color: #89ddff;\"> </span><span style=\"color: #c792ea;\">class</span><span style=\"color: #89ddff;\">=</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #c3e88d;\">collapse navbar-collapse</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #89ddff;\"> </span><span style=\"color: #c792ea;\">id</span><span style=\"color: #89ddff;\">=</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #c3e88d;\">navbarSupportedContent</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #89ddff;\">&gt;</span></div><div bis_skin_checked=\"1\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style=\"color: #89ddff;\">&lt;</span><span style=\"color: #f07178;\">ul</span><span style=\"color: #89ddff;\"> </span><span style=\"color: #c792ea;\">class</span><span style=\"color: #89ddff;\">=</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #c3e88d;\">navbar-nav me-auto mb-2 mb-lg-0</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #89ddff;\">&gt;</span></div><div bis_skin_checked=\"1\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style=\"color: #89ddff;\">&lt;</span><span style=\"color: #f07178;\">li</span><span style=\"color: #89ddff;\"> </span><span style=\"color: #c792ea;\">class</span><span style=\"color: #89ddff;\">=</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #c3e88d;\">nav-item</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #89ddff;\">&gt;</span></div><div bis_skin_checked=\"1\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style=\"color: #89ddff;\">&lt;</span><span style=\"color: #f07178;\">a</span><span style=\"color: #89ddff;\"> </span><span style=\"color: #c792ea;\">class</span><span style=\"color: #89ddff;\">=</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #c3e88d;\">nav-link</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #89ddff;\"> &nbsp;</span><span style=\"color: #c792ea;\">href</span><span style=\"color: #89ddff;\">=</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #82aaff;\">{{</span><span style=\"color: #82aaff;\">route</span><span style=\"color: #89ddff;\">(\'</span><span style=\"color: #c3e88d;\">frontend</span><span style=\"color: #89ddff;\">\')</span><span style=\"color: #82aaff;\">}}</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #89ddff;\">&gt;</span>Home<span style=\"color: #89ddff;\"><!--</span--><span style=\"color: #f07178;\">a</span><span style=\"color: #89ddff;\">&gt;</span></span></div><div bis_skin_checked=\"1\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style=\"color: #89ddff;\"><!--</span--><span style=\"color: #f07178;\">li</span><span style=\"color: #89ddff;\">&gt;</span></span></div><br><div bis_skin_checked=\"1\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style=\"color: #89ddff;\">&lt;</span><span style=\"color: #f07178;\">li</span><span style=\"color: #89ddff;\"> </span><span style=\"color: #c792ea;\">class</span><span style=\"color: #89ddff;\">=</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #c3e88d;\">nav-item dropdown</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #89ddff;\">&gt;</span></div><div bis_skin_checked=\"1\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style=\"color: #89ddff;\">&lt;</span><span style=\"color: #f07178;\">a</span><span style=\"color: #89ddff;\"> </span><span style=\"color: #c792ea;\">class</span><span style=\"color: #89ddff;\">=</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #c3e88d;\">nav-link dropdown-toggle</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #89ddff;\"> </span><span style=\"color: #c792ea;\">href</span><span style=\"color: #89ddff;\">=</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #c3e88d;\">#</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #89ddff;\"> </span><span style=\"color: #c792ea;\">role</span><span style=\"color: #89ddff;\">=</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #c3e88d;\">button</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #89ddff;\"> </span><span style=\"color: #c792ea;\">data-bs-toggle</span><span style=\"color: #89ddff;\">=</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #c3e88d;\">dropdown</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #89ddff;\"> </span><span style=\"color: #c792ea;\">aria-expanded</span><span style=\"color: #89ddff;\">=</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #c3e88d;\">false</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #89ddff;\">&gt;</span></div><div bis_skin_checked=\"1\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Dropdown</div><div bis_skin_checked=\"1\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style=\"color: #89ddff;\"><!--</span--><span style=\"color: #f07178;\">a</span><span style=\"color: #89ddff;\">&gt;</span></span></div><div bis_skin_checked=\"1\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style=\"color: #89ddff;\">&lt;</span><span style=\"color: #f07178;\">ul</span><span style=\"color: #89ddff;\"> </span><span style=\"color: #c792ea;\">class</span><span style=\"color: #89ddff;\">=</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #c3e88d;\">dropdown-menu</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #89ddff;\">&gt;</span></div><div bis_skin_checked=\"1\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style=\"color: #89ddff;\">&lt;</span><span style=\"color: #f07178;\">li</span><span style=\"color: #89ddff;\">&gt;&lt;</span><span style=\"color: #f07178;\">a</span><span style=\"color: #89ddff;\"> </span><span style=\"color: #c792ea;\">class</span><span style=\"color: #89ddff;\">=</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #c3e88d;\">dropdown-item</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #89ddff;\"> </span><span style=\"color: #c792ea;\">href</span><span style=\"color: #89ddff;\">=</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #c3e88d;\">#</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #89ddff;\">&gt;</span>Action<span style=\"color: #89ddff;\"><!--</span--><span style=\"color: #f07178;\">a</span><span style=\"color: #89ddff;\">&gt;<!--</span--><span style=\"color: #f07178;\">li</span><span style=\"color: #89ddff;\">&gt;</span></span></span></div><div bis_skin_checked=\"1\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style=\"color: #89ddff;\">&lt;</span><span style=\"color: #f07178;\">li</span><span style=\"color: #89ddff;\">&gt;&lt;</span><span style=\"color: #f07178;\">a</span><span style=\"color: #89ddff;\"> </span><span style=\"color: #c792ea;\">class</span><span style=\"color: #89ddff;\">=</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #c3e88d;\">dropdown-item</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #89ddff;\"> </span><span style=\"color: #c792ea;\">href</span><span style=\"color: #89ddff;\">=</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #c3e88d;\">#</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #89ddff;\">&gt;</span>Another action<span style=\"color: #89ddff;\"><!--</span--><span style=\"color: #f07178;\">a</span><span style=\"color: #89ddff;\">&gt;<!--</span--><span style=\"color: #f07178;\">li</span><span style=\"color: #89ddff;\">&gt;</span></span></span></div><div bis_skin_checked=\"1\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style=\"color: #89ddff;\">&lt;</span><span style=\"color: #f07178;\">li</span><span style=\"color: #89ddff;\">&gt;&lt;</span><span style=\"color: #f07178;\">hr</span><span style=\"color: #89ddff;\"> </span><span style=\"color: #c792ea;\">class</span><span style=\"color: #89ddff;\">=</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #c3e88d;\">dropdown-divider</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #89ddff;\">&gt;<!--</span--><span style=\"color: #f07178;\">li</span><span style=\"color: #89ddff;\">&gt;</span></span></div><div bis_skin_checked=\"1\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style=\"color: #89ddff;\">&lt;</span><span style=\"color: #f07178;\">li</span><span style=\"color: #89ddff;\">&gt;&lt;</span><span style=\"color: #f07178;\">a</span><span style=\"color: #89ddff;\"> </span><span style=\"color: #c792ea;\">class</span><span style=\"color: #89ddff;\">=</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #c3e88d;\">dropdown-item</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #89ddff;\"> </span><span style=\"color: #c792ea;\">href</span><span style=\"color: #89ddff;\">=</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #c3e88d;\">#</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #89ddff;\">&gt;</span>Something else here<span style=\"color: #89ddff;\"><!--</span--><span style=\"color: #f07178;\">a</span><span style=\"color: #89ddff;\">&gt;<!--</span--><span style=\"color: #f07178;\">li</span><span style=\"color: #89ddff;\">&gt;</span></span></span></div><div bis_skin_checked=\"1\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style=\"color: #89ddff;\"><!--</span--><span style=\"color: #f07178;\">ul</span><span style=\"color: #89ddff;\">&gt;</span></span></div><div bis_skin_checked=\"1\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style=\"color: #89ddff;\"><!--</span--><span style=\"color: #f07178;\">li</span><span style=\"color: #89ddff;\">&gt;</span></span></div><div bis_skin_checked=\"1\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style=\"color: #89ddff;\">@php</span></div><div bis_skin_checked=\"1\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style=\"color: #89ddff;\">$</span>categories <span style=\"color: #89ddff;\">=</span> App\\Models\\<span style=\"color: #ffcb6b;\">Category</span><span style=\"color: #89ddff;\">::</span><span style=\"color: #82aaff;\">where</span><span style=\"color: #89ddff;\">(</span><span style=\"color: #89ddff;\">\'</span><span style=\"color: #c3e88d;\">navbar_status</span><span style=\"color: #89ddff;\">\'</span><span style=\"color: #89ddff;\">,</span><span style=\"color: #89ddff;\">\'</span><span style=\"color: #c3e88d;\">0</span><span style=\"color: #89ddff;\">\'</span><span style=\"color: #89ddff;\">)-&gt;</span><span style=\"color: #82aaff;\">where</span><span style=\"color: #89ddff;\">(</span><span style=\"color: #89ddff;\">\'</span><span style=\"color: #c3e88d;\">status</span><span style=\"color: #89ddff;\">\'</span><span style=\"color: #89ddff;\">,</span><span style=\"color: #89ddff;\">\'</span><span style=\"color: #c3e88d;\">0</span><span style=\"color: #89ddff;\">\'</span><span style=\"color: #89ddff;\">)-&gt;</span><span style=\"color: #82aaff;\">get</span><span style=\"color: #89ddff;\">();</span></div><div bis_skin_checked=\"1\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style=\"color: #89ddff;\">@endphp</span></div><div bis_skin_checked=\"1\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style=\"color: #89ddff;\">@foreach </span>(<span style=\"color: #89ddff;\">$</span>categories <span style=\"color: #89ddff;\">as</span> <span style=\"color: #89ddff;\">$</span>cateitem)</div><div bis_skin_checked=\"1\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style=\"color: #89ddff;\">&lt;</span><span style=\"color: #f07178;\">li</span><span style=\"color: #89ddff;\"> </span><span style=\"color: #c792ea;\">class</span><span style=\"color: #89ddff;\">=</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #c3e88d;\">nav-item</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #89ddff;\">&gt;</span></div><div bis_skin_checked=\"1\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style=\"color: #89ddff;\">&lt;</span><span style=\"color: #f07178;\">a</span><span style=\"color: #89ddff;\"> </span><span style=\"color: #c792ea;\">class</span><span style=\"color: #89ddff;\">=</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #c3e88d;\">nav-link</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #89ddff;\"> </span><span style=\"color: #c792ea;\">href</span><span style=\"color: #89ddff;\">=</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #82aaff;\">{{</span><span style=\"color: #82aaff;\">url</span><span style=\"color: #89ddff;\">(\'</span><span style=\"color: #c3e88d;\">tutorial/</span><span style=\"color: #89ddff;\">\'.$</span>cateitem<span style=\"color: #89ddff;\">-&gt;</span>slug<span style=\"color: #89ddff;\">)</span><span style=\"color: #82aaff;\">}}</span><span style=\"color: #89ddff;\">\"</span><span style=\"color: #89ddff;\">&gt;</span><span style=\"color: #82aaff;\">{{</span><span style=\"color: #89ddff;\">$</span>cateitem<span style=\"color: #89ddff;\">-&gt;</span>name<span style=\"color: #82aaff;\">}}</span><span style=\"color: #89ddff;\"><!--</span--><span style=\"color: #f07178;\">a</span><span style=\"color: #89ddff;\">&gt;</span></span></div><div bis_skin_checked=\"1\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style=\"color: #89ddff;\"><!--</span--><span style=\"color: #f07178;\">li</span><span style=\"color: #89ddff;\">&gt;</span></span></div><div bis_skin_checked=\"1\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style=\"color: #89ddff;\">@endforeach</span></div><br><div bis_skin_checked=\"1\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style=\"color: #89ddff;\"><!--</span--><span style=\"color: #f07178;\">ul</span><span style=\"color: #89ddff;\">&gt;</span></span></div><br><div bis_skin_checked=\"1\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style=\"color: #89ddff;\"><!--</span--><span style=\"color: #f07178;\">div</span><span style=\"color: #89ddff;\">&gt;</span></span></div><div bis_skin_checked=\"1\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style=\"color: #89ddff;\"><!--</span--><span style=\"color: #f07178;\">div</span><span style=\"color: #89ddff;\">&gt;</span></span></div><div bis_skin_checked=\"1\">&nbsp; &nbsp; &nbsp; <span style=\"color: #89ddff;\"><!--</span--><span style=\"color: #f07178;\">nav</span><span style=\"color: #89ddff;\">&gt;</span></span></div><div bis_skin_checked=\"1\"><span style=\"color: #89ddff;\"><!--</span--><span style=\"color: #f07178;\">div</span><span style=\"color: #89ddff;\">&gt;</span></span></div><br></div><p> </p>', 'ytyy.com', 'asc', 'xc', 'sq', 0, 1, '2023-01-16 21:15:56', '2023-02-02 16:26:55'),
(4, 7, 'PHP', 'how-to-create-php', '202301282303portfolio-details-2.jpg', '<p>how to create PHP</p><p><br></p><p><u><b><span style=\"font-family: \"Arial Black\";\">by said </span></b></u></p>', 'ytyy.com', 'how to create PHP', 'how to create PHP', 'how to create PHP', 0, 1, '2023-01-25 17:12:19', '2023-02-02 16:24:43');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `website_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `favicon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keyword` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `website_name`, `logo`, `favicon`, `description`, `meta_title`, `meta_description`, `meta_keyword`, `created_at`, `updated_at`) VALUES
(1, 'MobarmigeBlog', '202302051916logo-1.png', '202302051916logofr.png', 'MobarmigeBlog', 'MobarmigeBlog', 'MobarmigeBlog', 'MobarmigeBlog', '2023-02-02 18:26:12', '2023-02-02 18:26:12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role_as` int(11) NOT NULL DEFAULT 0,
  `auth_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'email'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role_as`, `auth_type`) VALUES
(1, 'said el habhab', 'said@gmail.com', NULL, '$2y$10$NlWSWJH295.Cqkz0F9Sje.e.OBk81U9s40bRefh/kLqp017FyGulO', NULL, '2023-01-10 19:46:46', '2023-01-10 19:46:46', 1, 'email'),
(2, 'hamza', 'hamza@gmail.com', NULL, '$2y$10$49h87AtweSAQqvDeQWf5U.lmY7DHfwwzfbQGgpTCNzQrKb5H54dO2', 'JrMroCHQ22YSg8EoyGEwRZSxXJmp6r95AtyrgfmX9H2fvsnvsbloWaSmO6aA', '2023-01-10 19:48:42', '2023-01-17 20:54:32', 0, 'email'),
(3, 'said el-habhab', 'saidelhabhab@gmail.com', NULL, '$2y$10$vMCOHNbOjXdMfp3KNkPiY.cpy4BAPX4wMFxtzKEhM2s4eaPx2So2S', NULL, '2023-02-09 13:52:28', '2023-02-09 13:52:28', 0, 'github');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `yt_iframe` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `create_by` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `name`, `yt_iframe`, `image`, `description`, `status`, `create_by`, `created_at`, `updated_at`) VALUES
(1, 'First Video', 'https://www.youtube.com/watch?v=SZsFHXeNKmo&t=363s', '202302111508182375744_4267046606690674_613242642708541973_n.jpg', 'thi first Video', 0, 1, '2023-02-11 14:08:48', '2023-02-11 14:20:49'),
(2, 'second Video', 'https://www.youtube.com/watch?v=SZsFHXeNKmo&t=363s', '202302111509WIN_20210524_00_08_09_Pro.jpg', 'the second Video', 0, 1, '2023-02-11 14:09:29', '2023-02-11 14:09:29'),
(3, 'third Video', 'https://www.youtube.com/watch?v=SZsFHXeNKmo&t=363s', '202302111510logo simo said.png', 'the third Video', 0, 1, '2023-02-11 14:10:50', '2023-02-11 14:10:50'),
(4, 'fourth Video', 'https://www.youtube.com/watch?v=SZsFHXeNKmo&t=363s', '202302111522nom simo said.png', 'the fourth Video', 0, 1, '2023-02-11 14:22:13', '2023-02-11 14:22:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
