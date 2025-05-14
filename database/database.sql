-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 27, 2022 at 08:20 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_starter_kit`
--

-- --------------------------------------------------------

--
-- Table structure for table `designations`
--

CREATE TABLE `designations` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `designations`
--

INSERT INTO `designations` (`id`, `title`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'HRM', 'hrm', '2022-10-27 02:19:39', '2022-10-27 02:19:39'),
(2, 'Admin', 'admin', '2022-10-27 02:19:39', '2022-10-27 02:19:39'),
(3, 'Accounts', 'accounts', '2022-10-27 02:19:39', '2022-10-27 02:19:39'),
(4, 'Development', 'development', '2022-10-27 02:19:39', '2022-10-27 02:19:39'),
(5, 'Software', 'software', '2022-10-27 02:19:39', '2022-10-27 02:19:39');

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
-- Table structure for table `flag_icons`
--

CREATE TABLE `flag_icons` (
  `id` bigint UNSIGNED NOT NULL,
  `icon_class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `flag_icons`
--

INSERT INTO `flag_icons` (`id`, `icon_class`, `title`, `created_at`, `updated_at`) VALUES
(1, 'flag-icon flag-icon-ad', 'ad', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(2, 'flag-icon flag-icon-ae', 'ae', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(3, 'flag-icon flag-icon-af', 'af', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(4, 'flag-icon flag-icon-ag', 'ag', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(5, 'flag-icon flag-icon-ai', 'ai', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(6, 'flag-icon flag-icon-al', 'al', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(7, 'flag-icon flag-icon-am', 'am', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(8, 'flag-icon flag-icon-ao', 'ao', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(9, 'flag-icon flag-icon-aq', 'aq', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(10, 'flag-icon flag-icon-ar', 'ar', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(11, 'flag-icon flag-icon-as', 'as', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(12, 'flag-icon flag-icon-at', 'at', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(13, 'flag-icon flag-icon-au', 'au', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(14, 'flag-icon flag-icon-aw', 'aw', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(15, 'flag-icon flag-icon-ax', 'ax', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(16, 'flag-icon flag-icon-az', 'az', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(17, 'flag-icon flag-icon-ba', 'ba', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(18, 'flag-icon flag-icon-bb', 'bb', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(19, 'flag-icon flag-icon-bd', 'bd', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(20, 'flag-icon flag-icon-be', 'be', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(21, 'flag-icon flag-icon-bf', 'bf', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(22, 'flag-icon flag-icon-bg', 'bg', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(23, 'flag-icon flag-icon-bh', 'bh', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(24, 'flag-icon flag-icon-bi', 'bi', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(25, 'flag-icon flag-icon-bj', 'bj', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(26, 'flag-icon flag-icon-bl', 'bl', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(27, 'flag-icon flag-icon-bm', 'bm', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(28, 'flag-icon flag-icon-bn', 'bn', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(29, 'flag-icon flag-icon-bo', 'bo', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(30, 'flag-icon flag-icon-bq', 'bq', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(31, 'flag-icon flag-icon-br', 'br', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(32, 'flag-icon flag-icon-bs', 'bs', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(33, 'flag-icon flag-icon-bt', 'bt', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(34, 'flag-icon flag-icon-bv', 'bv', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(35, 'flag-icon flag-icon-bw', 'bw', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(36, 'flag-icon flag-icon-by', 'by', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(37, 'flag-icon flag-icon-bz', 'bz', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(38, 'flag-icon flag-icon-ca', 'ca', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(39, 'flag-icon flag-icon-cc', 'cc', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(40, 'flag-icon flag-icon-cd', 'cd', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(41, 'flag-icon flag-icon-cf', 'cf', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(42, 'flag-icon flag-icon-cg', 'cg', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(43, 'flag-icon flag-icon-ch', 'ch', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(44, 'flag-icon flag-icon-ci', 'ci', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(45, 'flag-icon flag-icon-ck', 'ck', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(46, 'flag-icon flag-icon-cl', 'cl', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(47, 'flag-icon flag-icon-cm', 'cm', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(48, 'flag-icon flag-icon-cn', 'cn', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(49, 'flag-icon flag-icon-co', 'co', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(50, 'flag-icon flag-icon-cr', 'cr', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(51, 'flag-icon flag-icon-cu', 'cu', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(52, 'flag-icon flag-icon-cv', 'cv', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(53, 'flag-icon flag-icon-cw', 'cw', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(54, 'flag-icon flag-icon-cx', 'cx', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(55, 'flag-icon flag-icon-cy', 'cy', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(56, 'flag-icon flag-icon-cz', 'cz', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(57, 'flag-icon flag-icon-de', 'de', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(58, 'flag-icon flag-icon-dj', 'dj', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(59, 'flag-icon flag-icon-dk', 'dk', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(60, 'flag-icon flag-icon-dm', 'dm', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(61, 'flag-icon flag-icon-do', 'do', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(62, 'flag-icon flag-icon-dz', 'dz', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(63, 'flag-icon flag-icon-ec', 'ec', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(64, 'flag-icon flag-icon-ee', 'ee', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(65, 'flag-icon flag-icon-eg', 'eg', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(66, 'flag-icon flag-icon-eh', 'eh', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(67, 'flag-icon flag-icon-er', 'er', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(68, 'flag-icon flag-icon-es', 'es', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(69, 'flag-icon flag-icon-et', 'et', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(70, 'flag-icon flag-icon-fi', 'fi', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(71, 'flag-icon flag-icon-fj', 'fj', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(72, 'flag-icon flag-icon-fk', 'fk', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(73, 'flag-icon flag-icon-fm', 'fm', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(74, 'flag-icon flag-icon-fo', 'fo', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(75, 'flag-icon flag-icon-fr', 'fr', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(76, 'flag-icon flag-icon-ga', 'ga', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(77, 'flag-icon flag-icon-gb', 'gb', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(78, 'flag-icon flag-icon-gd', 'gd', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(79, 'flag-icon flag-icon-ge', 'ge', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(80, 'flag-icon flag-icon-gf', 'gf', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(81, 'flag-icon flag-icon-gg', 'gg', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(82, 'flag-icon flag-icon-gh', 'gh', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(83, 'flag-icon flag-icon-gi', 'gi', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(84, 'flag-icon flag-icon-gl', 'gl', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(85, 'flag-icon flag-icon-gm', 'gm', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(86, 'flag-icon flag-icon-gn', 'gn', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(87, 'flag-icon flag-icon-gp', 'gp', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(88, 'flag-icon flag-icon-gq', 'gq', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(89, 'flag-icon flag-icon-gr', 'gr', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(90, 'flag-icon flag-icon-gs', 'gs', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(91, 'flag-icon flag-icon-gt', 'gt', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(92, 'flag-icon flag-icon-gu', 'gu', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(93, 'flag-icon flag-icon-gw', 'gw', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(94, 'flag-icon flag-icon-gy', 'gy', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(95, 'flag-icon flag-icon-hk', 'hk', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(96, 'flag-icon flag-icon-hm', 'hm', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(97, 'flag-icon flag-icon-hn', 'hn', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(98, 'flag-icon flag-icon-hr', 'hr', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(99, 'flag-icon flag-icon-ht', 'ht', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(100, 'flag-icon flag-icon-hu', 'hu', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(101, 'flag-icon flag-icon-id', 'id', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(102, 'flag-icon flag-icon-ie', 'ie', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(103, 'flag-icon flag-icon-il', 'il', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(104, 'flag-icon flag-icon-im', 'im', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(105, 'flag-icon flag-icon-in', 'in', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(106, 'flag-icon flag-icon-io', 'io', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(107, 'flag-icon flag-icon-iq', 'iq', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(108, 'flag-icon flag-icon-ir', 'ir', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(109, 'flag-icon flag-icon-is', 'is', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(110, 'flag-icon flag-icon-it', 'it', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(111, 'flag-icon flag-icon-je', 'je', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(112, 'flag-icon flag-icon-jm', 'jm', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(113, 'flag-icon flag-icon-jo', 'jo', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(114, 'flag-icon flag-icon-jp', 'jp', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(115, 'flag-icon flag-icon-ke', 'ke', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(116, 'flag-icon flag-icon-kg', 'kg', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(117, 'flag-icon flag-icon-kh', 'kh', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(118, 'flag-icon flag-icon-ki', 'ki', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(119, 'flag-icon flag-icon-km', 'km', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(120, 'flag-icon flag-icon-kn', 'kn', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(121, 'flag-icon flag-icon-kp', 'kp', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(122, 'flag-icon flag-icon-kr', 'kr', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(123, 'flag-icon flag-icon-kw', 'kw', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(124, 'flag-icon flag-icon-ky', 'ky', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(125, 'flag-icon flag-icon-kz', 'kz', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(126, 'flag-icon flag-icon-la', 'la', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(127, 'flag-icon flag-icon-lb', 'lb', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(128, 'flag-icon flag-icon-lc', 'lc', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(129, 'flag-icon flag-icon-li', 'li', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(130, 'flag-icon flag-icon-lk', 'lk', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(131, 'flag-icon flag-icon-lr', 'lr', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(132, 'flag-icon flag-icon-ls', 'ls', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(133, 'flag-icon flag-icon-lt', 'lt', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(134, 'flag-icon flag-icon-lu', 'lu', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(135, 'flag-icon flag-icon-lv', 'lv', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(136, 'flag-icon flag-icon-ly', 'ly', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(137, 'flag-icon flag-icon-ma', 'ma', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(138, 'flag-icon flag-icon-mc', 'mc', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(139, 'flag-icon flag-icon-md', 'md', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(140, 'flag-icon flag-icon-me', 'me', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(141, 'flag-icon flag-icon-mf', 'mf', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(142, 'flag-icon flag-icon-mg', 'mg', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(143, 'flag-icon flag-icon-mh', 'mh', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(144, 'flag-icon flag-icon-mk', 'mk', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(145, 'flag-icon flag-icon-ml', 'ml', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(146, 'flag-icon flag-icon-mm', 'mm', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(147, 'flag-icon flag-icon-mn', 'mn', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(148, 'flag-icon flag-icon-mo', 'mo', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(149, 'flag-icon flag-icon-mp', 'mp', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(150, 'flag-icon flag-icon-mq', 'mq', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(151, 'flag-icon flag-icon-mr', 'mr', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(152, 'flag-icon flag-icon-ms', 'ms', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(153, 'flag-icon flag-icon-mt', 'mt', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(154, 'flag-icon flag-icon-mu', 'mu', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(155, 'flag-icon flag-icon-mv', 'mv', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(156, 'flag-icon flag-icon-mw', 'mw', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(157, 'flag-icon flag-icon-mx', 'mx', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(158, 'flag-icon flag-icon-my', 'my', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(159, 'flag-icon flag-icon-mz', 'mz', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(160, 'flag-icon flag-icon-na', 'na', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(161, 'flag-icon flag-icon-nc', 'nc', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(162, 'flag-icon flag-icon-ne', 'ne', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(163, 'flag-icon flag-icon-nf', 'nf', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(164, 'flag-icon flag-icon-ng', 'ng', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(165, 'flag-icon flag-icon-ni', 'ni', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(166, 'flag-icon flag-icon-nl', 'nl', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(167, 'flag-icon flag-icon-no', 'no', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(168, 'flag-icon flag-icon-np', 'np', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(169, 'flag-icon flag-icon-nr', 'nr', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(170, 'flag-icon flag-icon-nu', 'nu', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(171, 'flag-icon flag-icon-nz', 'nz', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(172, 'flag-icon flag-icon-om', 'om', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(173, 'flag-icon flag-icon-pa', 'pa', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(174, 'flag-icon flag-icon-pe', 'pe', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(175, 'flag-icon flag-icon-pf', 'pf', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(176, 'flag-icon flag-icon-pg', 'pg', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(177, 'flag-icon flag-icon-ph', 'ph', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(178, 'flag-icon flag-icon-pk', 'pk', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(179, 'flag-icon flag-icon-pl', 'pl', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(180, 'flag-icon flag-icon-pm', 'pm', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(181, 'flag-icon flag-icon-pn', 'pn', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(182, 'flag-icon flag-icon-pr', 'pr', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(183, 'flag-icon flag-icon-ps', 'ps', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(184, 'flag-icon flag-icon-pt', 'pt', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(185, 'flag-icon flag-icon-pw', 'pw', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(186, 'flag-icon flag-icon-py', 'py', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(187, 'flag-icon flag-icon-qa', 'qa', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(188, 'flag-icon flag-icon-re', 're', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(189, 'flag-icon flag-icon-ro', 'ro', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(190, 'flag-icon flag-icon-rs', 'rs', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(191, 'flag-icon flag-icon-ru', 'ru', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(192, 'flag-icon flag-icon-rw', 'rw', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(193, 'flag-icon flag-icon-sa', 'sa', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(194, 'flag-icon flag-icon-sb', 'sb', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(195, 'flag-icon flag-icon-sc', 'sc', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(196, 'flag-icon flag-icon-sd', 'sd', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(197, 'flag-icon flag-icon-se', 'se', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(198, 'flag-icon flag-icon-sg', 'sg', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(199, 'flag-icon flag-icon-sh', 'sh', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(200, 'flag-icon flag-icon-si', 'si', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(201, 'flag-icon flag-icon-sj', 'sj', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(202, 'flag-icon flag-icon-sk', 'sk', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(203, 'flag-icon flag-icon-sl', 'sl', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(204, 'flag-icon flag-icon-sm', 'sm', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(205, 'flag-icon flag-icon-sn', 'sn', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(206, 'flag-icon flag-icon-so', 'so', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(207, 'flag-icon flag-icon-sr', 'sr', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(208, 'flag-icon flag-icon-ss', 'ss', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(209, 'flag-icon flag-icon-st', 'st', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(210, 'flag-icon flag-icon-sv', 'sv', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(211, 'flag-icon flag-icon-sx', 'sx', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(212, 'flag-icon flag-icon-sy', 'sy', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(213, 'flag-icon flag-icon-sz', 'sz', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(214, 'flag-icon flag-icon-tc', 'tc', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(215, 'flag-icon flag-icon-td', 'td', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(216, 'flag-icon flag-icon-tf', 'tf', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(217, 'flag-icon flag-icon-tg', 'tg', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(218, 'flag-icon flag-icon-th', 'th', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(219, 'flag-icon flag-icon-tj', 'tj', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(220, 'flag-icon flag-icon-tk', 'tk', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(221, 'flag-icon flag-icon-tl', 'tl', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(222, 'flag-icon flag-icon-tm', 'tm', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(223, 'flag-icon flag-icon-tn', 'tn', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(224, 'flag-icon flag-icon-to', 'to', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(225, 'flag-icon flag-icon-tr', 'tr', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(226, 'flag-icon flag-icon-tt', 'tt', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(227, 'flag-icon flag-icon-tv', 'tv', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(228, 'flag-icon flag-icon-tw', 'tw', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(229, 'flag-icon flag-icon-tz', 'tz', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(230, 'flag-icon flag-icon-ua', 'ua', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(231, 'flag-icon flag-icon-ug', 'ug', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(232, 'flag-icon flag-icon-um', 'um', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(233, 'flag-icon flag-icon-us', 'us', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(234, 'flag-icon flag-icon-uy', 'uy', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(235, 'flag-icon flag-icon-uz', 'uz', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(236, 'flag-icon flag-icon-va', 'va', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(237, 'flag-icon flag-icon-vc', 'vc', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(238, 'flag-icon flag-icon-ve', 've', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(239, 'flag-icon flag-icon-vg', 'vg', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(240, 'flag-icon flag-icon-vi', 'vi', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(241, 'flag-icon flag-icon-vn', 'vn', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(242, 'flag-icon flag-icon-vu', 'vu', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(243, 'flag-icon flag-icon-wf', 'wf', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(244, 'flag-icon flag-icon-ws', 'ws', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(245, 'flag-icon flag-icon-ye', 'ye', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(246, 'flag-icon flag-icon-yt', 'yt', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(247, 'flag-icon flag-icon-za', 'za', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(248, 'flag-icon flag-icon-zm', 'zm', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(249, 'flag-icon flag-icon-zw', 'zw', '2022-10-27 02:19:41', '2022-10-27 02:19:41');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint UNSIGNED NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `path`, `created_at`, `updated_at`) VALUES
(1, 'backend/uploads/users/user-icon-1.png', '2022-10-27 02:19:39', '2022-10-27 02:19:39'),
(2, 'backend/uploads/users/user-icon-2.png', '2022-10-27 02:19:39', '2022-10-27 02:19:39'),
(3, 'backend/uploads/users/user-icon-3.png', '2022-10-27 02:19:39', '2022-10-27 02:19:39'),
(4, 'backend/uploads/users/user-icon-4.png', '2022-10-27 02:19:39', '2022-10-27 02:19:39');

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon_class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `direction` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `name`, `code`, `icon_class`, `direction`, `created_at`, `updated_at`) VALUES
(1, 'English', 'en', 'flag-icon flag-icon-us', 'ltr', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(2, 'Bangla', 'bn', 'flag-icon flag-icon-bd', 'ltr', '2022-10-27 02:19:41', '2022-10-27 02:19:41');

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
(1, '2013_08_03_072003_create_roles_table', 1),
(2, '2013_08_17_080223_create_images_table', 1),
(3, '2014_10_12_000000_create_users_table', 1),
(4, '2014_10_12_100000_create_password_resets_table', 1),
(5, '2019_08_19_000000_create_failed_jobs_table', 1),
(6, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(7, '2022_07_19_045514_create_flag_icons_table', 1),
(8, '2022_08_08_043550_create_permissions_table', 1),
(9, '2022_08_16_103633_create_settings_table', 1),
(10, '2022_08_17_092623_create_languages_table', 1),
(11, '2022_10_04_044255_create_searches_table', 1),
(12, '2022_10_13_064230_create_designations_table', 1);

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint UNSIGNED NOT NULL,
  `attribute` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keywords` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `attribute`, `keywords`, `created_at`, `updated_at`) VALUES
(1, 'users', '{\"read\":\"user_read\",\"create\":\"user_create\",\"update\":\"user_update\",\"delete\":\"user_delete\"}', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(2, 'roles', '{\"read\":\"role_read\",\"create\":\"role_create\",\"update\":\"role_update\",\"delete\":\"role_delete\"}', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(3, 'language', '{\"read\":\"language_read\",\"create\":\"language_create\",\"update\":\"language_update\",\"update terms\":\"language_update_terms\",\"delete\":\"language_delete\"}', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(4, 'general settings', '{\"read\":\"general_settings_read\",\"update\":\"general_settings_update\"}', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(5, 'storage settings', '{\"read\":\"storage_settings_read\",\"update\":\"storage_settings_update\"}', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(6, 'recaptcha settings', '{\"read\":\"recaptcha_settings_read\",\"update\":\"recaptcha_settings_update\"}', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(7, 'email settings', '{\"read\":\"email_settings_read\",\"update\":\"email_settings_update\"}', '2022-10-27 02:19:41', '2022-10-27 02:19:41');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `permissions` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `status`, `permissions`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', '1', '[\"user_read\",\"user_create\",\"user_update\",\"user_delete\",\"role_read\",\"role_create\",\"role_update\",\"role_delete\",\"language_read\",\"language_create\",\"language_update\",\"language_update_terms\",\"language_delete\",\"general_settings_read\",\"general_settings_update\",\"storage_settings_read\",\"storage_settings_update\",\"recaptcha_settings_read\",\"recaptcha_settings_update\",\"email_settings_read\",\"email_settings_update\"]', '2022-10-27 02:19:39', '2022-10-27 02:19:39'),
(2, 'Admin', '1', '[\"user_read\",\"user_create\",\"user_update\",\"user_delete\",\"role_read\",\"role_create\",\"role_update\",\"role_delete\",\"language_read\",\"language_create\",\"language_update_terms\",\"general_settings_read\",\"general_settings_update\",\"storage_settings_read\",\"storage_settings_read\",\"recaptcha_settings_update\",\"email_settings_read\"]', '2022-10-27 02:19:39', '2022-10-27 02:19:39'),
(3, 'Manager', '1', '[\"user_read\",\"user_create\",\"role_read\",\"language_read\",\"language_create\",\"general_settings_read\",\"storage_settings_read\",\"recaptcha_settings_read\",\"email_settings_read\"]', '2022-10-27 02:19:39', '2022-10-27 02:19:39'),
(4, 'User', '1', '[\"user_read\",\"role_read\",\"language_read\"]', '2022-10-27 02:19:39', '2022-10-27 02:19:39');

-- --------------------------------------------------------

--
-- Table structure for table `searches`
--

CREATE TABLE `searches` (
  `id` bigint UNSIGNED NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `searches`
--

INSERT INTO `searches` (`id`, `url`, `created_at`, `updated_at`) VALUES
(1, 'dashboard', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(2, 'users', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(3, 'languages', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(4, 'general-settings', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(5, 'recaptcha-setting', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(6, 'email-setting', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(7, 'dashboard1', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(8, 'basic-pricing', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(9, 'pricing-table', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(10, 'pricing-table-2', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(11, 'pricing-table-3', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(12, 'pricing-table-4', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(13, 'form-elements', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(14, 'input-group', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(15, 'form-validations', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(16, 'signin', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(17, 'signup', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(18, 'reset-password', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(19, 'recover-password', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(20, 'tables', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(21, 'datatable', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(22, 'promotional', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(23, 'promotional-2', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(24, 'greetings', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(25, 'greetings-2', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(26, 'reset-password-email', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(27, 'email-verify', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(28, 'email-approved', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(29, 'deactive-account', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(30, 'terms-conditions', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(31, 'content-grid', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(32, 'content-typography', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(33, 'content-text', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(34, 'colors', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(35, 'profile', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(36, 'error-page403', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(37, 'error-page404', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(38, 'error-page500', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(39, 'error-page502', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(40, 'error-coming-soon', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(41, 'error-maintenance', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(42, 'faq-classic', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(43, 'faq', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(44, 'basic-timeline', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(45, 'split-timeline', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(46, 'centered-timeline', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(47, 'apex-chart', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(48, 'chartjs', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(49, '#', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(50, 'basic-cards', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(51, 'dashboard-cards', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(52, 'charts', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(53, 'analytics-charts', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(54, 'product-lists', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(55, 'product-grids', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(56, 'categories', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(57, 'add-category', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(58, 'orders', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(59, 'order-detsils', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(60, 'invoice', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(61, 'line-awesome', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(62, 'line-icon', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(63, 'font-awesome', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(64, 'alert', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(65, 'accordion', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(66, 'badges', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(67, 'buttons', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(68, 'carousels', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(69, 'modals', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(70, 'navs-tabs', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(71, 'navbars', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(72, 'paginations', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(73, 'tooltips', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(74, 'sweet-alert', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(75, 'progress', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(76, 'spiners', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(77, 'breadcrumb', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(78, 'notifications', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(79, 'slick', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(80, 'notification', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(81, 'chat', '2022-10-27 02:19:41', '2022-10-27 02:19:41');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `value`, `created_at`, `updated_at`) VALUES
(1, 'application_name', 'Onest Drax', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(2, 'footer_text', '© 2022 Onest Drax . All rights reserved.', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(3, 'file_system', 'local', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(4, 'aws_access_key_id', 'AKIA3OGN2RWSOIIG3A4J', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(5, 'aws_secret_key', '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', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(6, 'aws_region', 'ap-southeast-1', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(7, 'aws_bucket', 'onest-starter-kit', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(8, 'aws_endpoint', 'https://s3.ap-southeast-1.amazonaws.com', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(9, 'recaptcha_sitekey', '6Lfn6nQhAAAAAKYauxvLddLtcqSn1yqn-HRn_CbN', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(10, 'recaptcha_secret', '6Lfn6nQhAAAAABOzRtEjhZYB49Dd4orv41thfh02', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(11, 'recaptcha_status', '1', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(12, 'mail_drive', 'smtp', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(13, 'mail_host', 'smtp.gmail.com', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(14, 'mail_address', 'sales@onesttech.com', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(15, 'from_name', 'Onest Kit', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(16, 'mail_username', 'sales@onesttech.com', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(17, 'mail_password', 'ya!@a+TIY3Vl&esT', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(18, 'mail_port', '587', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(19, 'encryption', 'tls', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(20, 'default_langauge', 'en', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(21, 'light_logo', 'backend/uploads/settings/light.png', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(22, 'dark_logo', 'backend/uploads/settings/dark.png', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(23, 'favicon', 'backend/uploads/settings/favicon.png', '2022-10-27 02:19:41', '2022-10-27 02:19:41');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` date DEFAULT NULL,
  `gender` tinyint NOT NULL DEFAULT '1',
  `email_verified_at` timestamp NULL DEFAULT NULL COMMENT 'if null then verifield, not null then not verified',
  `token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Token for email/phone verification, if null then verifield, not null then not verified',
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8mb4_unicode_ci,
  `last_login` timestamp NULL DEFAULT NULL,
  `status` tinyint NOT NULL DEFAULT '1',
  `image_id` bigint UNSIGNED DEFAULT NULL,
  `role_id` bigint UNSIGNED DEFAULT NULL,
  `designation_id` bigint UNSIGNED DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `date_of_birth`, `gender`, `email_verified_at`, `token`, `phone`, `password`, `permissions`, `last_login`, `status`, `image_id`, `role_id`, `designation_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Jarret Waelchi', 'superadmin@onest.com', '2022-09-07', 1, '2022-10-27 02:19:39', NULL, '01811000000', '$2y$10$g33WuRXkH9BlTCu8L/SFf.4AYR1Ep3UKwlKU7kgqKORaybIdCXvrm', '[\"user_read\",\"user_create\",\"user_update\",\"user_delete\",\"role_read\",\"role_create\",\"role_update\",\"role_delete\",\"language_read\",\"language_create\",\"language_update\",\"language_update_terms\",\"language_delete\",\"general_settings_read\",\"general_settings_update\",\"storage_settings_read\",\"storage_settings_update\",\"recaptcha_settings_read\",\"recaptcha_settings_update\",\"email_settings_read\",\"email_settings_update\"]', NULL, 1, 1, 1, 1, 'TsQEZ5T7EW', '2022-10-27 02:19:39', '2022-10-27 02:19:39'),
(2, 'Faye Clether', 'admin@onest.com', '2022-09-07', 1, '2022-10-27 02:19:39', NULL, '01811000001', '$2y$10$eUESc/hdrFE7H1hnQZ53YOhPBfQhP.1UsC0UvJhnoBn8GXYzdLkZC', '[\"user_read\",\"user_create\",\"user_update\",\"user_delete\",\"role_read\",\"role_create\",\"role_update\",\"role_delete\",\"language_read\",\"language_create\",\"language_update_terms\",\"general_settings_read\",\"general_settings_update\",\"storage_settings_read\",\"storage_settings_read\",\"recaptcha_settings_update\",\"email_settings_read\"]', NULL, 1, 2, 2, 5, 'Atu6JV7DBU', '2022-10-27 02:19:39', '2022-10-27 02:19:39'),
(3, 'Anna Littlical', 'manager@onest.com', '2022-09-07', 1, '2022-10-27 02:19:39', NULL, '01811000002', '$2y$10$VFkaR9jx.QawFWHprwnz9.gVKF0VkQ5CG0oSglffrrss4OOs5W.dq', '[\"user_read\",\"user_create\",\"role_read\",\"language_read\",\"language_create\",\"general_settings_read\",\"storage_settings_read\",\"recaptcha_settings_read\",\"email_settings_read\"]', NULL, 1, 3, 3, 2, 'oQDoEfGw1g', '2022-10-27 02:19:39', '2022-10-27 02:19:39'),
(4, 'Al Annon 0', 'user0@onest.com', '2022-09-07', 1, '2022-10-27 02:19:39', NULL, '1345789784560', '$2y$10$Oo5Ni1xIRj2AaBIygRwqHuAWvmeNl533k9Jbl0k2fCuIk66N1Z0tG', '[\"user_read\",\"role_read\",\"language_read\"]', NULL, 1, 4, 4, 3, 'frGYTKhbb5', '2022-10-27 02:19:39', '2022-10-27 02:19:39'),
(5, 'Al Annon 1', 'user1@onest.com', '2022-09-07', 1, '2022-10-27 02:19:39', NULL, '1345789784561', '$2y$10$D2HdP9YUKblBxiRlgp3eSOTEwvX.AXKr3VuYjvHnLKSBgZDPEW15C', '[\"user_read\",\"role_read\",\"language_read\"]', NULL, 1, 4, 4, 1, 'cfBEEkd548', '2022-10-27 02:19:39', '2022-10-27 02:19:39'),
(6, 'Al Annon 2', 'user2@onest.com', '2022-09-07', 1, '2022-10-27 02:19:39', NULL, '1345789784562', '$2y$10$SaXt8DwSNAEOcVSYtVglCul9n5t/ucc9Zp81dA2JX3V10nJ4c0P1S', '[\"user_read\",\"role_read\",\"language_read\"]', NULL, 1, 4, 4, 4, '3d9vml5l7K', '2022-10-27 02:19:39', '2022-10-27 02:19:39'),
(7, 'Al Annon 3', 'user3@onest.com', '2022-09-07', 1, '2022-10-27 02:19:39', NULL, '1345789784563', '$2y$10$3Eo7C3aZh1g.KtjZddxmOevak2/9Yxzn6U9TKmVa95NJbydpYQDri', '[\"user_read\",\"role_read\",\"language_read\"]', NULL, 1, 4, 4, 3, 'LK4o421T2F', '2022-10-27 02:19:39', '2022-10-27 02:19:39'),
(8, 'Al Annon 4', 'user4@onest.com', '2022-09-07', 1, '2022-10-27 02:19:39', NULL, '1345789784564', '$2y$10$Kg1egpMzsz.bkGb3QkAJPeCuBkaDwsqmoin1W2nNBQQDhp4FB7tPq', '[\"user_read\",\"role_read\",\"language_read\"]', NULL, 1, 4, 4, 3, 'UMHwwC8ptE', '2022-10-27 02:19:39', '2022-10-27 02:19:39'),
(9, 'Al Annon 5', 'user5@onest.com', '2022-09-07', 1, '2022-10-27 02:19:39', NULL, '1345789784565', '$2y$10$i.C43GBHwvKCHWQ6FS8uqu/m/zQdrfMkwo3rlijob6SePkJvUR.Am', '[\"user_read\",\"role_read\",\"language_read\"]', NULL, 1, 4, 4, 4, 'TjNCMKZ94z', '2022-10-27 02:19:39', '2022-10-27 02:19:39'),
(10, 'Al Annon 6', 'user6@onest.com', '2022-09-07', 1, '2022-10-27 02:19:39', NULL, '1345789784566', '$2y$10$jcFb0DJTiTZr42UOJoOC0.eeT4SF.6RFBRzYGN6pwp0gZsPuLyhLy', '[\"user_read\",\"role_read\",\"language_read\"]', NULL, 1, 4, 4, 3, 'an7Bph5NiL', '2022-10-27 02:19:39', '2022-10-27 02:19:39'),
(11, 'Al Annon 7', 'user7@onest.com', '2022-09-07', 1, '2022-10-27 02:19:39', NULL, '1345789784567', '$2y$10$xfn/W83ecCaabCtm7wvYu..HiTl8v4gEljdtQvV1jbOfWxWBqomma', '[\"user_read\",\"role_read\",\"language_read\"]', NULL, 1, 4, 4, 1, 'Lmrgn5l1rg', '2022-10-27 02:19:39', '2022-10-27 02:19:39'),
(12, 'Al Annon 8', 'user8@onest.com', '2022-09-07', 1, '2022-10-27 02:19:39', NULL, '1345789784568', '$2y$10$FdU9gt2iaI5ZlZB5R.ZzAu8b/CbJtjA/xznkX2Pm9PfZu9HTCkQlC', '[\"user_read\",\"role_read\",\"language_read\"]', NULL, 1, 4, 4, 2, 'iXS5yhXL6O', '2022-10-27 02:19:39', '2022-10-27 02:19:39'),
(13, 'Al Annon 9', 'user9@onest.com', '2022-09-07', 1, '2022-10-27 02:19:39', NULL, '1345789784569', '$2y$10$zjRjVUoqwnixYXNYfpLarOrzmr5M1o.GEYXGHUyVuDCbZJ7x844Ra', '[\"user_read\",\"role_read\",\"language_read\"]', NULL, 1, 4, 4, 2, 'JPXnytlr4g', '2022-10-27 02:19:39', '2022-10-27 02:19:39'),
(14, 'Al Annon 10', 'user10@onest.com', '2022-09-07', 1, '2022-10-27 02:19:39', NULL, '13457897845610', '$2y$10$9TDJjei4MZ8eKdJnaO4NhuUu7IZ5nBORyGU7IW454RykraWP42QFy', '[\"user_read\",\"role_read\",\"language_read\"]', NULL, 1, 4, 4, 2, 'Nlcl2M6ZKn', '2022-10-27 02:19:40', '2022-10-27 02:19:40'),
(15, 'Al Annon 11', 'user11@onest.com', '2022-09-07', 1, '2022-10-27 02:19:40', NULL, '13457897845611', '$2y$10$1JGISf40PPy/n8CuuFCsu.NOJtAgb7gKz4KI/Xu27C8d3O1I.fPJC', '[\"user_read\",\"role_read\",\"language_read\"]', NULL, 1, 4, 4, 5, '0NCNhvEEuh', '2022-10-27 02:19:40', '2022-10-27 02:19:40'),
(16, 'Al Annon 12', 'user12@onest.com', '2022-09-07', 1, '2022-10-27 02:19:40', NULL, '13457897845612', '$2y$10$t33TC2GelmhCAp1hepnPzevcZS6BR1E8Auo4xFT2Khm0ghl9paVOm', '[\"user_read\",\"role_read\",\"language_read\"]', NULL, 1, 4, 4, 3, '11hT3iUcVc', '2022-10-27 02:19:40', '2022-10-27 02:19:40'),
(17, 'Al Annon 13', 'user13@onest.com', '2022-09-07', 1, '2022-10-27 02:19:40', NULL, '13457897845613', '$2y$10$JTzNU4N29vqchaJ/QIz9AuYONGCe01Kf8Mmd7EmxHr3Yd.e66A6Ta', '[\"user_read\",\"role_read\",\"language_read\"]', NULL, 1, 4, 4, 1, '8kRuVZ17pt', '2022-10-27 02:19:40', '2022-10-27 02:19:40'),
(18, 'Al Annon 14', 'user14@onest.com', '2022-09-07', 1, '2022-10-27 02:19:40', NULL, '13457897845614', '$2y$10$5pZa3lVIFAa7Hs2PdS.ZlO0wy41vk0pEhsqiWOUJI4KMIQZnLRq4G', '[\"user_read\",\"role_read\",\"language_read\"]', NULL, 1, 4, 4, 5, '444sO1x545', '2022-10-27 02:19:40', '2022-10-27 02:19:40'),
(19, 'Al Annon 15', 'user15@onest.com', '2022-09-07', 1, '2022-10-27 02:19:40', NULL, '13457897845615', '$2y$10$9em/dxjLTgxgKgGb8UrhV.f6zL6nXO/GxZrhEpSGrKo.dM1rObIVW', '[\"user_read\",\"role_read\",\"language_read\"]', NULL, 1, 4, 4, 4, 'TBdbK0he0G', '2022-10-27 02:19:40', '2022-10-27 02:19:40'),
(20, 'Al Annon 16', 'user16@onest.com', '2022-09-07', 1, '2022-10-27 02:19:40', NULL, '13457897845616', '$2y$10$HRqjgmzFy7LBPSM2MMVuI.d.hBqEmn8802O949glgDIgJ7qNlL30u', '[\"user_read\",\"role_read\",\"language_read\"]', NULL, 1, 4, 4, 2, 'nPTElNWsS7', '2022-10-27 02:19:40', '2022-10-27 02:19:40'),
(21, 'Al Annon 17', 'user17@onest.com', '2022-09-07', 1, '2022-10-27 02:19:40', NULL, '13457897845617', '$2y$10$eE5fEU2ceXlFVEoiI4zdzecHraAiq7XNNL2.eBsbD5AS7tUUVR2l2', '[\"user_read\",\"role_read\",\"language_read\"]', NULL, 1, 4, 4, 2, 'xrPO5xqoIr', '2022-10-27 02:19:40', '2022-10-27 02:19:40'),
(22, 'Al Annon 18', 'user18@onest.com', '2022-09-07', 1, '2022-10-27 02:19:40', NULL, '13457897845618', '$2y$10$qqZNrrtzjawRVxNKu/A97.uOiWdUWnGXdpRmCgvcSCa6vkpN6mruK', '[\"user_read\",\"role_read\",\"language_read\"]', NULL, 1, 4, 4, 5, '0n5LeVxuyn', '2022-10-27 02:19:40', '2022-10-27 02:19:40'),
(23, 'Al Annon 19', 'user19@onest.com', '2022-09-07', 1, '2022-10-27 02:19:40', NULL, '13457897845619', '$2y$10$95HyUvGzMH1j.2VytIC5FOPPqY5eDlpXnnqe8/RGxwc3lvhYMyQui', '[\"user_read\",\"role_read\",\"language_read\"]', NULL, 1, 4, 4, 3, 'TNZHhDg6D7', '2022-10-27 02:19:40', '2022-10-27 02:19:40'),
(24, 'Al Annon 20', 'user20@onest.com', '2022-09-07', 1, '2022-10-27 02:19:40', NULL, '13457897845620', '$2y$10$qUv4fzgDBE9MzswXlu96NufGVcUSxSZrUWx92gfdDyG3MjSBSfyzO', '[\"user_read\",\"role_read\",\"language_read\"]', NULL, 1, 4, 4, 4, '9YtFBXsexC', '2022-10-27 02:19:40', '2022-10-27 02:19:40'),
(25, 'Al Annon 21', 'user21@onest.com', '2022-09-07', 1, '2022-10-27 02:19:40', NULL, '13457897845621', '$2y$10$ITiL9X6sU1j2KdqweQMGU.pOAJ74.rAFWqhCZ5tXJoKZBO98bV/wm', '[\"user_read\",\"role_read\",\"language_read\"]', NULL, 1, 4, 4, 4, '77uB9mL3xo', '2022-10-27 02:19:40', '2022-10-27 02:19:40'),
(26, 'Al Annon 22', 'user22@onest.com', '2022-09-07', 1, '2022-10-27 02:19:40', NULL, '13457897845622', '$2y$10$JFupMFe9DdhjClfrDb0Cm.nLF.Jq.WVovWmrM6GfqUJT9MwUTG3Ya', '[\"user_read\",\"role_read\",\"language_read\"]', NULL, 1, 4, 4, 4, 'kU0RE3P9N1', '2022-10-27 02:19:40', '2022-10-27 02:19:40'),
(27, 'Al Annon 23', 'user23@onest.com', '2022-09-07', 1, '2022-10-27 02:19:40', NULL, '13457897845623', '$2y$10$qbpOl4kuhxlIDz1p2M1MWuN6QHZ8HvykvmiWwXCQdFCrYkLlrTzI.', '[\"user_read\",\"role_read\",\"language_read\"]', NULL, 1, 4, 4, 5, 'oxjjLRvQ3N', '2022-10-27 02:19:40', '2022-10-27 02:19:40'),
(28, 'Al Annon 24', 'user24@onest.com', '2022-09-07', 1, '2022-10-27 02:19:40', NULL, '13457897845624', '$2y$10$JvCLdmi1e01p2WZNxZ4Vze0zeNjObPgUX8Y7prNixQhdhjQUYJafi', '[\"user_read\",\"role_read\",\"language_read\"]', NULL, 1, 4, 4, 2, '8CNRpPegSW', '2022-10-27 02:19:40', '2022-10-27 02:19:40'),
(29, 'Al Annon 25', 'user25@onest.com', '2022-09-07', 1, '2022-10-27 02:19:40', NULL, '13457897845625', '$2y$10$3BaGI3qbg7yTdJHzrhq2QuDaMJx8oC0AKA9W0ryQH68EPh5dJYqAa', '[\"user_read\",\"role_read\",\"language_read\"]', NULL, 1, 4, 4, 5, 'laRw3otnBc', '2022-10-27 02:19:40', '2022-10-27 02:19:40'),
(30, 'Al Annon 26', 'user26@onest.com', '2022-09-07', 1, '2022-10-27 02:19:40', NULL, '13457897845626', '$2y$10$9BOd5rNBPDdq.QsC5reriepTvEXOK30cktBQaaB2XJK.cq0TLAFYi', '[\"user_read\",\"role_read\",\"language_read\"]', NULL, 1, 4, 4, 1, 'Yq8VACw9mD', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(31, 'Al Annon 27', 'user27@onest.com', '2022-09-07', 1, '2022-10-27 02:19:41', NULL, '13457897845627', '$2y$10$1P1FwEFoZDDANo954HA.OebnhaquV/LG0O8M/sJ.dCYyVqtMRzLmi', '[\"user_read\",\"role_read\",\"language_read\"]', NULL, 1, 4, 4, 1, 'Pf7Z2aZJsy', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(32, 'Al Annon 28', 'user28@onest.com', '2022-09-07', 1, '2022-10-27 02:19:41', NULL, '13457897845628', '$2y$10$aKzFhmg1uwxmGd0AkeuYHeB3W0qy/gYIga/TxHgmQ9ZRudW/IoMHi', '[\"user_read\",\"role_read\",\"language_read\"]', NULL, 1, 4, 4, 5, 'j1EaIOce8m', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(33, 'Al Annon 29', 'user29@onest.com', '2022-09-07', 1, '2022-10-27 02:19:41', NULL, '13457897845629', '$2y$10$xAEK0ifTp8HEdVT5Y5LvSOvYeGQjVPLEQW9bmIqK9pbCHzlxNhhiS', '[\"user_read\",\"role_read\",\"language_read\"]', NULL, 1, 4, 4, 4, 'aPWJ60N3pd', '2022-10-27 02:19:41', '2022-10-27 02:19:41'),
(34, 'Al Annon 30', 'user30@onest.com', '2022-09-07', 1, '2022-10-27 02:19:41', NULL, '13457897845630', '$2y$10$kVJdSd1UqFYlrqtpflXJbeYOJsR.lJycMTW2EiJ4rJhckCmjXKpH6', '[\"user_read\",\"role_read\",\"language_read\"]', NULL, 1, 4, 4, 4, 'Eokxpnqymk', '2022-10-27 02:19:41', '2022-10-27 02:19:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `designations`
--
ALTER TABLE `designations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `flag_icons`
--
ALTER TABLE `flag_icons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `searches`
--
ALTER TABLE `searches`
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
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`),
  ADD KEY `users_image_id_foreign` (`image_id`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `designations`
--
ALTER TABLE `designations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `flag_icons`
--
ALTER TABLE `flag_icons`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=250;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `searches`
--
ALTER TABLE `searches`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_image_id_foreign` FOREIGN KEY (`image_id`) REFERENCES `images` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
