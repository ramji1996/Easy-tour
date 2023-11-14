-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2020 at 05:24 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `accomodations`
--

CREATE TABLE `accomodations` (
  `Sigiriya` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accomodations`
--

INSERT INTO `accomodations` (`Sigiriya`) VALUES
('It is place to visit');

-- --------------------------------------------------------

--
-- Table structure for table `driver_bookings`
--

CREATE TABLE `driver_bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tourist_id` bigint(20) UNSIGNED NOT NULL,
  `driver_id` bigint(20) UNSIGNED NOT NULL,
  `from` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `to` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `note` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `book_flag` int(11) NOT NULL,
  `finiesd_flag` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `driver_bookings`
--

INSERT INTO `driver_bookings` (`id`, `tourist_id`, `driver_id`, `from`, `to`, `date`, `time`, `note`, `book_flag`, `finiesd_flag`, `created_at`, `updated_at`) VALUES
(14, 55, 24, 'gampaha', 'colombo', '2020-11-12', '15:00:00', 'at railway station', 2, 2, '2020-11-11 01:00:37', '2020-11-11 01:40:43'),
(15, 57, 24, 'gampaha', 'jaffna', '2020-11-25', '18:30:00', 'bus stand, Gampaha', 2, 2, '2020-11-11 01:14:16', '2020-11-11 01:54:27'),
(16, 58, 24, 'gampaha', 'jaffna', '2020-11-13', '17:00:00', 'tsfwyh', 0, 0, '2020-11-11 01:21:44', '2020-11-11 01:21:44'),
(17, 59, 24, 'Hambanthota', 'Jaffna', '2020-11-25', '18:00:00', 'fedtegy', 1, 0, '2020-11-11 01:35:00', '2020-11-11 01:40:36'),
(18, 61, 24, 'mannar', 'colombo', '2020-11-20', '15:00:00', 'hello', 1, 0, '2020-11-11 01:51:12', '2020-11-11 01:54:21');

-- --------------------------------------------------------

--
-- Table structure for table `drvregisters`
--

CREATE TABLE `drvregisters` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` int(11) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `area` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `licence` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `v_brand` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `v_owner` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `v_reg_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `v_seats` int(11) DEFAULT NULL,
  `image_path` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '1',
  `isavailable` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `drvregisters`
--

INSERT INTO `drvregisters` (`id`, `email`, `name`, `contact`, `age`, `gender`, `area`, `licence`, `v_brand`, `v_owner`, `v_reg_no`, `v_seats`, `image_path`, `isavailable`, `created_at`, `updated_at`) VALUES
(24, 'Pasindu@gmail.com', 'Pasindu Ranasinghe', 768356698, 35, 'Male', 'Ampara', 'B4157478', 'Mini van', NULL, 'QL9904', 8, 'user.png', 1, '2020-11-09 10:01:01', '2020-11-09 10:01:01'),
(26, 'Saman@gmail.com', 'Kavishka Saman', 784596323, 38, 'Male', 'Matale', 'B4567298', 'Car', NULL, 'QL8899', 4, 'user.png', 1, '2020-11-09 10:05:43', '2020-11-09 10:05:43'),
(33, 'ag@gmail.com', 'ag', 762598876, 12, 'Male', 'Mullaitivu', '1256', 'Mini van', NULL, '1256', 6, 'user.png', 1, '2020-11-10 08:06:48', '2020-11-10 08:06:48'),
(57, 'azam21@gmail.com', 'Mohomed Azam', 771254693, 24, 'male', 'Jaffna', '24', NULL, NULL, 'np-xw-2401', NULL, 'user.png', 1, NULL, NULL),
(58, 'kamal@gmail.com', 'Kamal Fonseka', 774567810, 40, 'male', 'Kilinochchi', '2445', NULL, NULL, 'np-kw-0401', NULL, 'user.png', 1, NULL, NULL),
(59, 'vimala@gmail.com', 'vimala', 724865126, 34, 'female', 'jaffna', '102', NULL, NULL, 'np-abc-2401', NULL, 'user.png', 1, NULL, NULL),
(60, 'sajith1@gmail.com', 'Sajith Amarasiri', 764567820, 27, 'male', 'Colombo', '0257', NULL, NULL, 'wp-xu-4701', NULL, 'user.png', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `eqpregisters`
--

CREATE TABLE `eqpregisters` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` int(11) DEFAULT NULL,
  `area` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isavailable` tinyint(1) NOT NULL DEFAULT 1,
  `image_path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `ename` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `eqpregisters`
--

INSERT INTO `eqpregisters` (`id`, `email`, `name`, `contact`, `area`, `isavailable`, `image_path`, `created_at`, `updated_at`, `ename`, `address`, `price`) VALUES
(27, 'Eshan@gmail.com', 'Eshan Rathnauake', 779645238, 'Kegalle', 1, 'user.png', '2020-11-09 10:08:27', '2020-11-09 10:08:27', 'Tents,Hiking boots', '2/2,St. lane,Mervin lane,Kegalle.', 1000),
(30, 'ram@gmail.com', 'Anantharam', 786953248, 'Kalutara', 1, 'user.png', '2020-11-09 10:50:16', '2020-11-09 10:50:16', 'Swimming kits, Hiking jackets', '89,Main road,Kaluthara', 750),
(31, 'Sunil@gmail.com', 'Sunil Amarathunga', 778964529, 'Hambantota', 1, 'user.png', '2020-11-09 13:04:07', '2020-11-09 13:04:07', 'tent,boots,socks', '89,st.Clares road , Hambanthota', 800),
(34, 'Soor@gmail.com', 'Sooriya Arachch', 775332699, 'Kurunegala', 1, 'user.png', '2020-11-10 08:57:44', '2020-11-10 09:08:04', 'Food carriers', '45, Colombo road, Kurunegala', 500);

-- --------------------------------------------------------

--
-- Table structure for table `equipment`
--

CREATE TABLE `equipment` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `costpd` int(11) NOT NULL,
  `availability` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `equipment`
--

INSERT INTO `equipment` (`id`, `name`, `description`, `costpd`, `availability`, `created_at`, `updated_at`) VALUES
(1, 'Ball and Bat', 'To use in a ground', 500, 1, '2020-11-08 14:01:31', '2020-11-08 14:01:31'),
(2, 't', 't', 12, 1, '2020-11-08 15:59:01', '2020-11-08 15:59:01');

-- --------------------------------------------------------

--
-- Table structure for table `equipment_bookings`
--

CREATE TABLE `equipment_bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tourist_id` bigint(20) UNSIGNED NOT NULL,
  `equipment_id` bigint(20) UNSIGNED NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `note` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `book_flag` int(11) NOT NULL,
  `finiesd_flag` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `equipment_bookings`
--

INSERT INTO `equipment_bookings` (`id`, `tourist_id`, `equipment_id`, `start_date`, `end_date`, `note`, `book_flag`, `finiesd_flag`, `created_at`, `updated_at`) VALUES
(3, 29, 27, '2020-12-23', '2020-12-24', 'Tent only', 0, 0, '2020-11-09 10:48:38', '2020-11-09 10:48:38'),
(4, 45, 27, '2020-12-12', '2020-12-13', 'Give', 0, 0, '2020-11-10 17:56:09', '2020-11-10 17:56:09');

-- --------------------------------------------------------

--
-- Table structure for table `feedback_drivers`
--

CREATE TABLE `feedback_drivers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tourist_id` bigint(20) UNSIGNED NOT NULL,
  `driver_id` bigint(20) UNSIGNED NOT NULL,
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `rate` int(11) NOT NULL,
  `comment` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `Start` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `End` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Travelmode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `RateTour` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feedback_drivers`
--

INSERT INTO `feedback_drivers` (`id`, `tourist_id`, `driver_id`, `service_id`, `rate`, `comment`, `created_at`, `updated_at`, `Start`, `End`, `Travelmode`, `RateTour`) VALUES
(2, 29, 25, 7, 2, 'Very good', '2020-11-09 14:48:15', '2020-11-09 14:48:15', 'Matara to Galle', 'Galle fort, a superb experience.', 'Van', 4),
(3, 29, 24, 7, 4, 'Very good', '2020-11-09 15:39:05', '2020-11-09 15:39:05', 'Nuwra eliya to Badhulla', 'Nice scenes, Beautiful nature', 'Train', 5),
(4, 29, 24, 7, 1, 'Felt unsafe drive', '2020-11-10 04:44:07', '2020-11-10 04:44:07', 'Kandy to colombo', 'the travelling scenes were so good. Good to travel bt train', 'Van', 3);

-- --------------------------------------------------------

--
-- Table structure for table `feedback_equipment`
--

CREATE TABLE `feedback_equipment` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tourist_id` bigint(20) UNSIGNED NOT NULL,
  `equipment_id` bigint(20) UNSIGNED NOT NULL,
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `rate` int(11) NOT NULL,
  `comment` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback_guides`
--

CREATE TABLE `feedback_guides` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tourist_id` bigint(20) UNSIGNED NOT NULL,
  `guide_id` bigint(20) UNSIGNED NOT NULL,
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `rate` int(11) NOT NULL,
  `comment` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `Start` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `End` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Travelmode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `RateTour` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feedback_guides`
--

INSERT INTO `feedback_guides` (`id`, `tourist_id`, `guide_id`, `service_id`, `rate`, `comment`, `created_at`, `updated_at`, `Start`, `End`, `Travelmode`, `RateTour`) VALUES
(4, 29, 28, 7, 1, 'A very good guide. Knows about the places very well.', '2020-11-10 07:40:21', '2020-11-10 07:40:21', 'Colombo to Matale', 'Very boring place, full of idiots', 'car', 1);

-- --------------------------------------------------------

--
-- Table structure for table `gudregisters`
--

CREATE TABLE `gudregisters` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` int(11) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `licence` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `area` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `languages` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isavailable` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gudregisters`
--

INSERT INTO `gudregisters` (`id`, `email`, `name`, `contact`, `age`, `gender`, `licence`, `area`, `price`, `languages`, `image_path`, `isavailable`, `created_at`, `updated_at`) VALUES
(28, 'vithush@gmail.com', 'Vithushanth', 768325587, 44, 'Male', 'SLDTA/1256', 'Ampara', 1000, 'English and Sinhala', 'user.png', 1, '2020-11-09 10:18:56', '2020-11-09 10:18:56'),
(37, 'Somantha@gmail.com', 'Somantha Rathnayaka', 715698346, 31, 'Male', 'SLDTA1796', 'Gampaha', 900, NULL, 'user.png', 1, '2020-11-10 13:14:58', '2020-11-10 13:14:58'),
(38, 'viky11@gmail.com', 'vignesh', 721237910, 24, 'male', '24', 'jaffna', 4500, NULL, 'user.png', 1, NULL, NULL),
(39, 'rathu@gmail.com', 'rathu', 774567910, 33, 'male', '2414', 'colombo', 3500, NULL, 'user.png', 1, NULL, NULL),
(40, 'raveesha2@gmail.com', 'raveesha', 774567880, 23, 'male', '0014', 'colombo', 3000, NULL, 'user.png', 1, NULL, NULL),
(60, 'guide@gmail.com', 'Guide', 772997323, 32, 'Male', 'SLDTA/5689', 'Kegalle', 500, NULL, 'user.png', 1, '2020-11-11 01:38:52', '2020-11-11 01:38:52');

-- --------------------------------------------------------

--
-- Table structure for table `guide_bookings`
--

CREATE TABLE `guide_bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tourist_id` bigint(20) UNSIGNED NOT NULL,
  `guide_id` bigint(20) UNSIGNED NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `nop` int(11) NOT NULL,
  `district` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `book_flag` int(11) NOT NULL,
  `finiesd_flag` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `guide_bookings`
--

INSERT INTO `guide_bookings` (`id`, `tourist_id`, `guide_id`, `start_date`, `end_date`, `nop`, `district`, `note`, `book_flag`, `finiesd_flag`, `created_at`, `updated_at`) VALUES
(10, 55, 28, '2020-11-25', '2020-11-30', 4, 'Kurunegala', 'We provide accomodation', 2, 2, '2020-11-11 01:02:16', '2020-11-11 01:53:36'),
(11, 57, 28, '2020-12-12', '2020-12-20', 4, 'Monaragala', 'we provide accomodations', 0, 0, '2020-11-11 01:13:20', '2020-11-11 01:13:20'),
(12, 58, 28, '2020-12-12', '2020-12-15', 5, 'Mannar', 'trfydhteduy', 2, 2, '2020-11-11 01:20:55', '2020-11-11 01:39:51'),
(13, 59, 28, '2020-11-20', '2020-11-25', 4, 'Hambantota', 'twfehegrj', 1, 1, '2020-11-11 01:36:22', '2020-11-11 01:40:00'),
(14, 61, 28, '2020-11-25', '2020-11-28', 4, 'Mannar', 'hello', 1, 1, '2020-11-11 01:50:31', '2020-11-11 01:53:32');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_01_07_163120_create_driver_bookings_table', 1),
(4, '2020_01_20_081802_create_touregisters_table', 1),
(5, '2020_01_20_085338_create_gudregisters_table', 1),
(6, '2020_01_20_085408_create_drvregisters_table', 1),
(7, '2020_01_20_085435_create_eqpregisters_table', 1),
(8, '2020_01_22_114155_create_threads_table', 1),
(9, '2020_02_12_140011_create_guide_bookings_table', 1),
(10, '2020_02_12_194105_create_feedback_drivers_table', 1),
(11, '2020_02_12_202958_create_feedback_guides_table', 1),
(12, '2020_02_14_073347_create_feedback_equipment_table', 1),
(13, '2020_02_14_074432_create_equipment_bookings_table', 1),
(14, '2020_02_14_145647_add_user_id_to_threads', 1),
(15, '2020_07_15_051349_create_equipment_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `threads`
--

CREATE TABLE `threads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thread` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `threads`
--

INSERT INTO `threads` (`id`, `subject`, `thread`, `type`, `created_at`, `updated_at`, `user_id`) VALUES
(4, 'A vehicle to travel', '5000km', 'Vehicles', '2020-11-10 02:54:21', '2020-11-10 02:54:21', 23);

-- --------------------------------------------------------

--
-- Table structure for table `touregisters`
--

CREATE TABLE `touregisters` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` int(11) DEFAULT NULL,
  `image_path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `touregisters`
--

INSERT INTO `touregisters` (`id`, `email`, `name`, `country`, `contact`, `image_path`, `created_at`, `updated_at`) VALUES
(56, 'a@gmail.com', 'a', 'Sri Lanka', 112265894, 'user.png', '2020-11-11 01:06:08', '2020-11-11 01:06:08'),
(45, 'Diana@gmail.com', 'Diana', 'Sri Lanka', 789652234, 'user.png', '2020-11-10 17:53:31', '2020-11-10 17:53:31'),
(59, 'hello@gmail.com', 'hello', 'Sri Lanka', 786954423, 'driver10.jpg', '2020-11-11 01:33:36', '2020-11-11 01:37:29'),
(44, 'infas@gmail.com', 'Mohomed Infass', 'Sri Lanka', 789658846, 'driver10.jpg', '2020-11-10 17:08:04', '2020-11-10 17:13:41'),
(48, 'Kasun@gmail.com', 'Kasun', 'Sri Lanka', 768954403, 'user.png', '2020-11-11 00:58:20', '2020-11-11 00:58:20'),
(41, 'kaveesha@gmail.com', 'Kaveesha', 'Sri Lanka', 789965436, 'user.png', '2020-11-10 16:10:40', '2020-11-10 16:10:40'),
(38, 'Mano@gmail.com', 'Manoranjani', 'Sri Lanka', 789645582, 'user.png', '2020-11-10 16:40:16', '2020-11-10 16:40:16'),
(57, 'sam2012@gmail.com', 'sam', 'Sri Lanka', 762598364, 'user.png', '2020-11-11 01:10:26', '2020-11-11 01:10:26'),
(47, 'Samyuktha@gmail.com', 'Samyukthaa', 'Sri Lanka', 768324406, 'driver10.jpg', '2020-11-10 18:11:01', '2020-11-10 18:14:54'),
(46, 'Sasha@gmail.com', 'Sasha', 'Sri Lanka', 785996833, 'user.png', '2020-11-10 18:05:51', '2020-11-10 18:05:51'),
(58, 'se@gmail.com', 'safwan', 'Sri Lanka', 762548896, 'driver6.jpg', '2020-11-11 01:18:26', '2020-11-11 01:23:01'),
(1, 'shaharaameer@gmail.com', 'Sahara Ameer', 'Sri Lanka', 768324406, 'user.png', '2020-11-09 09:39:56', '2020-11-09 09:39:56'),
(29, 'sumaiya@gmail.com', 'Sumaiya', 'Sri Lanka', 789687326, 'user.png', '2020-11-09 10:21:31', '2020-11-09 10:21:31'),
(61, 'user@gmail.com', 'user', 'Sri Lanka', 769586423, 'driver10.jpg', '2020-11-11 01:48:53', '2020-11-11 01:52:06');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_type`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(23, 'admin', 'Sahara Ameer', 'shaharaameer@gmail.com', NULL, '$2y$10$qiJqELaJIzamdPk8v2GLi.4E6CJI0LVgUBijC.a/LWkS2klawLY8G', NULL, '2020-11-09 09:39:57', '2020-11-09 09:39:57'),
(24, 'drv', 'Pasindu Ranasinghe', 'Pasindu@gmail.com', NULL, '$2y$10$V6TEeqrK6t/Fis7xo/ypve6SYfddbcxtUFsLP4.lgA7oTLEC2lqMm', NULL, '2020-11-09 10:01:01', '2020-11-09 10:01:01'),
(26, 'drv', 'Kavishka Saman', 'Saman@gmail.com', NULL, '$2y$10$kx4A084i37xZZ1proH73musWpyjjMK8ISP/DAaqs0hzeROtxpArWG', NULL, '2020-11-09 10:05:44', '2020-11-09 10:05:44'),
(27, 'eqp', 'Eshan Rathnauake', 'Eshan@gmail.com', NULL, '$2y$10$BwuUwjk5AZjQlv0LJubZOug5qN.PDvCqHatHax86hOHY44NOObPD.', NULL, '2020-11-09 10:08:27', '2020-11-09 10:08:27'),
(28, 'gud', 'Vithushanth', 'vithush@gmail.com', NULL, '$2y$10$Nem7JpcKULaIJDkIpS418ei0OFhPVg8QlWQMKeIHJYzxsHNiUEj0.', NULL, '2020-11-09 10:18:56', '2020-11-09 10:18:56'),
(29, 'tou', 'Sumaiya', 'sumaiya@gmail.com', NULL, '$2y$10$T/2JHeDvKV.7et96ZJZl5OIzk.bu.PlvozljMvny6TDy1SPx3AXzG', NULL, '2020-11-09 10:21:31', '2020-11-09 10:21:31'),
(30, 'eqp', 'Anantharam', 'ram@gmail.com', NULL, '$2y$10$gS8QCVFFSbkkJFqF0e4iduQ5OgUEkF/0iv2TFVG7ebjj8Grlr6Ru2', NULL, '2020-11-09 10:50:16', '2020-11-09 10:50:16'),
(31, 'eqp', 'Sunil Amarathunga', 'Sunil@gmail.com', NULL, '$2y$10$RI0d7BeTm5NaHhl1WUYt..WLsF5NYrS2Vw8ZNBycydoTHjHFo98oi', NULL, '2020-11-09 13:04:08', '2020-11-09 13:04:08'),
(33, 'drv', 'ag', 'ag@gmail.com', NULL, '$2y$10$B8Cu5ZDLbRfUBeXTABtQ/OdqQwKGlkAUHgjZlBkc5HuEFDiNlrGE6', NULL, '2020-11-10 08:06:48', '2020-11-10 08:06:48'),
(34, 'eqp', 'Sooriya Arachch', 'Soor@gmail.com', NULL, '$2y$10$ta/bXX.UZ7IMCKNvCAX45.Cw4yrgl/5MTF82M58cKh1s3/5XFfp5i', NULL, '2020-11-10 08:57:44', '2020-11-10 09:03:17'),
(37, 'gud', 'Somantha Rathnayaka', 'Somantha@gmail.com', NULL, '$2y$10$XNNW9Wy/Hfj8Ffhvrl1QT.U1T8ctupXjrEQzlzB3oyPyoWxhQrow2', NULL, '2020-11-10 13:14:58', '2020-11-10 13:14:58'),
(42, 'tou', 'Manoranjani', 'Mano@gmail.com', NULL, '$2y$10$EZvy6eTxCw4Vh2QEF6fD4OE9Et.IqCV6TYwVkShwLK5MEz4rsim9e', NULL, '2020-11-10 16:40:16', '2020-11-10 16:40:16'),
(44, 'tou', 'Mohomed Infas', 'infas@gmail.com', NULL, '$2y$10$IAPmhjkdLo9RpuDRsYjkvOJda6aCDoVEpse8q3KTtlDeSoW6ze802', NULL, '2020-11-10 17:08:04', '2020-11-10 17:08:04'),
(45, 'tou', 'Diana', 'Diana@gmail.com', NULL, '$2y$10$/D4FtS7yPUP70MfMOAfS0OlmRLS5guz/r8CFhxMN2y3w2E2ZMWHO.', NULL, '2020-11-10 17:53:31', '2020-11-10 17:53:31'),
(46, 'tou', 'Sasha', 'Sasha@gmail.com', NULL, '$2y$10$yhk1MzdQL9KPXfPcRjSjjeY3yI5AbZgBXskenWj6WtJpixGemj0Ki', NULL, '2020-11-10 18:05:51', '2020-11-10 18:05:51'),
(47, 'tou', 'Samyuktha', 'Samyuktha@gmail.com', NULL, '$2y$10$Q6t7pn7CGNDSFI79QKsxke.n4ZdCPYppWfl2XvluUniLjc0CkN.Wy', NULL, '2020-11-10 18:11:02', '2020-11-10 18:11:02'),
(48, 'drv', 'mayu', 'mayurathan@gmail.com', NULL, '$2y$10$JgzmUDaWZmHtnHzwcsMeye2A6ajoUIlXzbWvL7jhbCfi994tF1Vd6', NULL, NULL, NULL),
(49, 'drv', 'kalmal', 'kamal@gmail.com', NULL, '$2y$10$Yr2dq2N.wlR23ywnCNK/ROfyca9DEyiCPBMqDTPi1UOC6g9Hd1Szq', NULL, NULL, NULL),
(50, 'drv', 'vimala', 'vimala@gmail.com', NULL, '$2y$10$i.gsb6nA/CbKHjYzUp9X6eYiWN9PDyVULW/734s6AhbHP9sAQBP02', NULL, NULL, NULL),
(51, 'drv', 'sajith', 'sajith1@gmail.com', NULL, '$2y$10$YE592iU49aaFlBfX/7vZhOTvzCSEC9uJ8kJpNUhWPdtHqVmRg7nD.', NULL, NULL, NULL),
(52, 'gud', 'sandy', 'sandy@gmail.com', NULL, '$2y$10$quJA.Y0iQXwlTDDtYkkAx.b9YyS5Fr3L7K0u67aKLDUsuuf./zKpi', NULL, NULL, NULL),
(53, 'gud', 'rathu', 'rathu@gmail.com', NULL, '$2y$10$KniHTy69yLpdlMVpOVypwe6VmappcOffjlarlyJyL4fCoquRhjUNq', NULL, NULL, NULL),
(54, 'gud', 'raveesha', 'raveesha2@gmail.com', NULL, '$2y$10$kxMKH12xKjDelK2zeBG23./COuzvX0fhVf15mnTadZhVsigpfiEbu', NULL, NULL, NULL),
(55, 'tou', 'Kasun', 'Kasun@gmail.com', NULL, '$2y$10$BN9zmsHm5db0D5N0QgCLW.CSufApM2Hpmvgr6g/2eScQqOaV.xhdq', NULL, '2020-11-11 00:58:20', '2020-11-11 00:58:20'),
(56, 'tou', 'a', 'a@gmail.com', NULL, '$2y$10$G4F0Yg/S5PWp6yg.RSOtIOe15rKDTuT4GNw0lQFpdGax2F97LZ40u', NULL, '2020-11-11 01:06:08', '2020-11-11 01:06:08'),
(57, 'tou', 'sam', 'sam2012@gmail.com', NULL, '$2y$10$pPsaSTHoXqNbypsx2CrjkO3IR2quIdpQxcDAlTv7Y1PN61nQ7ji/6', NULL, '2020-11-11 01:10:26', '2020-11-11 01:10:26'),
(58, 'tou', 'se', 'se@gmail.com', NULL, '$2y$10$EtsVA0n0neWH.j1RBY4zS.XSoFSqjvhsSKTPvWQnxyNV6cPYRuqN6', NULL, '2020-11-11 01:18:26', '2020-11-11 01:18:26'),
(59, 'tou', 'hello', 'hello@gmail.com', NULL, '$2y$10$txNgFNULJApZK83CsBTTjufD9VdltDkbv.NlNuz4m1N9inDYoofU6', NULL, '2020-11-11 01:33:36', '2020-11-11 01:33:36'),
(60, 'gud', 'Guide', 'guide@gmail.com', NULL, '$2y$10$6opW5A94vTdS9oIL3za5ZuQQ1S6/aTBFsOXmiTMQcweVodWMDJiaG', NULL, '2020-11-11 01:38:52', '2020-11-11 01:38:52'),
(61, 'tou', 'user', 'user@gmail.com', NULL, '$2y$10$wqYhOoB255Tc6nkLCDJmJuhy6cxbs2REzQB/6Ts3o01NG2GSdeF86', NULL, '2020-11-11 01:48:53', '2020-11-11 01:48:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `driver_bookings`
--
ALTER TABLE `driver_bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `driver_bookings_tourist_id_index` (`tourist_id`),
  ADD KEY `driver_bookings_driver_id_index` (`driver_id`);

--
-- Indexes for table `drvregisters`
--
ALTER TABLE `drvregisters`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `drvregisters_email_unique` (`email`);

--
-- Indexes for table `eqpregisters`
--
ALTER TABLE `eqpregisters`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `eqpregisters_email_unique` (`email`);

--
-- Indexes for table `equipment`
--
ALTER TABLE `equipment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `equipment_bookings`
--
ALTER TABLE `equipment_bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `equipment_bookings_tourist_id_index` (`tourist_id`),
  ADD KEY `equipment_bookings_equipment_id_index` (`equipment_id`);

--
-- Indexes for table `feedback_drivers`
--
ALTER TABLE `feedback_drivers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback_equipment`
--
ALTER TABLE `feedback_equipment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback_guides`
--
ALTER TABLE `feedback_guides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gudregisters`
--
ALTER TABLE `gudregisters`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `gudregisters_email_unique` (`email`);

--
-- Indexes for table `guide_bookings`
--
ALTER TABLE `guide_bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `guide_bookings_tourist_id_index` (`tourist_id`),
  ADD KEY `guide_bookings_guide_id_index` (`guide_id`);

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
-- Indexes for table `threads`
--
ALTER TABLE `threads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `touregisters`
--
ALTER TABLE `touregisters`
  ADD UNIQUE KEY `touregisters_email_unique` (`email`);

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
-- AUTO_INCREMENT for table `driver_bookings`
--
ALTER TABLE `driver_bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `drvregisters`
--
ALTER TABLE `drvregisters`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `eqpregisters`
--
ALTER TABLE `eqpregisters`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `equipment`
--
ALTER TABLE `equipment`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `equipment_bookings`
--
ALTER TABLE `equipment_bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `feedback_drivers`
--
ALTER TABLE `feedback_drivers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `feedback_equipment`
--
ALTER TABLE `feedback_equipment`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback_guides`
--
ALTER TABLE `feedback_guides`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `gudregisters`
--
ALTER TABLE `gudregisters`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `guide_bookings`
--
ALTER TABLE `guide_bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `threads`
--
ALTER TABLE `threads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
