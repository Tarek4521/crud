-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 30, 2021 at 03:45 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerceseip`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `name` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `created_at`, `modified_at`) VALUES
(2, 'farija ss', 'farija0s22@gmail.com', 'abcds', '2021-12-20 16:25:51', '2021-12-20 16:34:03'),
(3, 'eevv', 'ee@gmail.com', 'eevv', '2021-12-20 16:25:51', '2021-12-20 16:34:03'),
(4, 'ss', 'dd@gmail.com', 'dd', '2021-12-20 16:25:51', '2021-12-20 16:34:03');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `title` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `promotional_message` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `html_banner` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT '0',
  `is_draft` tinyint(4) NOT NULL DEFAULT '0',
  `picture` varchar(55) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `link`, `promotional_message`, `html_banner`, `is_active`, `is_draft`, `picture`, `created_at`, `modified_at`) VALUES
(11, 'hh', 'hh', 'hh', 'hh', 1, 1, 'IMG_1639474483_newsletter-img.jpg', '2021-12-20 03:27:00', '2021-12-21 02:47:40'),
(13, 'mk', 'https:/facebook.com', 'fffww', 'hh', 1, 1, 'IMG_1639473792_newsletter-img.jpg', '2021-12-20 04:48:08', '2021-12-21 02:47:48'),
(14, 'rr', 'rrr', 'rr', 'html', 1, 1, 'b-logo2-130x50.png', '2021-12-20 04:49:53', '2021-12-21 02:47:53'),
(15, 'ee', 'ee', 'ee', 'hh', 1, 1, 'IMG_1639478534_Hapus_Mango.jpg', '2021-12-20 04:51:44', '2021-12-21 02:48:02'),
(16, 'g', 'wew', 'ee', 'html', 1, 1, 'blog-img1-913x500.jpg', '2021-12-20 04:52:20', '2021-12-21 02:48:09'),
(17, 'dd', 'dd', 'dd', 'html', 1, 1, 'b-logo3-130x50.png', '2021-12-20 04:52:53', '2021-12-21 02:48:14'),
(18, 'dd', 'dd', 'dd', 'dd', 1, 1, 'b-logo1-130x50.png', '2021-12-21 02:16:37', '2021-12-21 02:48:18'),
(19, 'ggg', 'ggg', 'ggg', 'ggggjh', 1, 0, 'IMG_1639478534_Hapus_Mango.jpg', '2021-12-21 02:24:12', '2021-12-21 02:31:18'),
(20, 'dd', 'dd', 'dd', 'dd', 1, 1, 'b-logo1-130x50.png', '2021-12-21 02:40:21', '2021-12-21 14:40:21');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `title`, `link`) VALUES
(2, 'ff', 'ff'),
(3, 'ffdd', 'ffdd');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `qty` int(11) NOT NULL,
  `unite_price` int(11) NOT NULL,
  `total_price` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `picture` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `product_id`, `product_title`, `qty`, `unite_price`, `total_price`, `created_at`, `picture`) VALUES
(4, 111, 'chair', 1, 100, 0, '2021-12-20 16:16:37', 'b-logo1-130x50.png'),
(5, 2, 'mango', 12, 155, 0, '2021-12-20 04:21:54', 'IMG_1639478534_Hapus_Mango.jpg'),
(6, 1, 'pp', 12, 10, 1000, '2021-12-21 03:32:50', 'IMG_1639477237_Capture.PNG'),
(7, 4, 'mango', 10, 12, 120, '2021-12-21 03:38:51', 'IMG_1639478534_Hapus_Mango.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_draft` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `link`, `is_draft`, `created_at`, `modified_at`) VALUES
(1, 'farija sfg', 'ddgg', 1, '2021-12-20 16:37:11', '2021-12-21 03:08:18'),
(2, 'dee', 'rrr', 0, '2021-12-20 16:37:11', '2021-12-20 16:37:25'),
(3, 'Atiq', 'https:/facebook.com', 0, '2021-12-20 04:42:41', '2021-12-20 16:42:41'),
(4, 'tt', 'yyy', 1, '2021-12-21 03:08:12', '2021-12-21 15:08:12');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`) VALUES
(1, 'Juhi', 'juhi@gmail.com', 'ssss dscc'),
(2, '33', '33@gmail.com', '33'),
(3, 'vpn', 'pp@gmail.com', 'uguhgihg');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `title` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT '0',
  `picture` varchar(55) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `is_deleted` tinyint(4) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `title`, `is_active`, `picture`, `created_at`, `modified_at`, `is_deleted`) VALUES
(18, 'brands', 1, NULL, '2021-12-20 14:27:46', '2021-12-21 04:41:36', 0),
(23, 'nail paint', 1, 'IMG_1639560104_btn-cart.png', '2021-12-20 14:27:46', '2021-12-30 03:29:34', 0),
(27, 'faru  akter', 1, 'IMG_1639558979_product23-700x850.jpg', '2021-12-20 14:27:46', '2021-12-30 02:07:42', 0),
(28, 'ddd', 0, 'IMG_1639560151_payment-2.png', '2021-12-20 14:27:46', '2021-12-20 14:52:39', 1),
(29, 'ss', 0, 'IMG_1639473792_newsletter-img.jpg', '2021-12-20 14:27:46', '2021-12-20 14:52:39', 1),
(30, 'tttdd', 1, 'IMG_1640084766_b-logo3-130x50.png', '2021-12-20 14:37:58', '2021-12-21 05:06:06', 1),
(32, 'farija', 1, 'IMG_1640085293_blog-img2-913x500.jpg', '2021-12-21 05:14:53', '2021-12-21 05:15:06', 0),
(33, 'rrr', 1, 'IMG_1640085321_b-logo2-130x50.png', '2021-12-21 05:15:21', '2021-12-21 05:15:26', 1),
(34, 'juhi rahman', 1, 'IMG_1640085348_custom-img3.jpg', '2021-12-21 05:15:48', '2021-12-21 05:15:56', 0),
(35, 'ff', 1, 'IMG_1640851606_blog-img1-913x500.jpg', '2021-12-30 02:06:46', '2021-12-30 14:06:46', 1),
(36, 'yyy', 1, 'IMG_1640851624_b-logo3-130x50.png', '2021-12-30 02:07:04', '2021-12-30 14:07:04', 1),
(37, 'dd', 1, 'IMG_1640851675_b-logo2-130x50.png', '2021-12-30 02:07:55', '2021-12-30 14:07:55', 1),
(38, 'ff', 1, 'IMG_1640851765_b-logo1-130x50.png', '2021-12-30 02:09:25', '2021-12-30 14:09:25', 1),
(39, 'fw34', 1, 'IMG_1640851777_IMG_1639473792_newsletter-img.jpg', '2021-12-30 02:09:37', '2021-12-30 14:09:37', 0),
(40, 'faru', 1, 'IMG_1640851810_blog-img2-913x500.jpg', '2021-12-30 02:10:10', '2021-12-30 14:10:10', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
