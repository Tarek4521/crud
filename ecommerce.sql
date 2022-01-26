-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 05, 2022 at 03:50 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf32_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf32_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf32_unicode_ci NOT NULL,
  `phone` varchar(50) COLLATE utf32_unicode_ci NOT NULL,
  `is_draft` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `phone`, `is_draft`, `created_at`, `modified_at`) VALUES
(5, 'Mr. Y', 'mail@gamail.com', '12345678', '123888888', 1, '2021-12-20 11:44:21', '2021-12-20 11:44:21'),
(6, 'Mr. Y', 'example@mail.com updated', '1235588', '888888', 1, '2021-12-20 11:50:20', '2021-12-30 04:45:01');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `title` varchar(256) COLLATE utf32_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf32_unicode_ci NOT NULL,
  `id` int(11) NOT NULL,
  `picture` varchar(255) COLLATE utf32_unicode_ci DEFAULT NULL,
  `promotional_message` varchar(255) COLLATE utf32_unicode_ci NOT NULL,
  `html_banner` varchar(255) COLLATE utf32_unicode_ci NOT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT '0',
  `is_draft` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`title`, `link`, `id`, `picture`, `promotional_message`, `html_banner`, `is_active`, `is_draft`, `created_at`, `modified_at`) VALUES
('index 02 up', 'www.google.com.bd updated', 23, 'IMG_1641354282_slide-22-1920x600.jpg', '', '', 1, 0, '2021-12-20 10:34:47', '2022-01-05 03:44:42'),
('aaa ', 'google.com ', 25, 'IMG_1641276451_slide-44-1920x600.jpg', 'aaaaaaa', 'aaaaaaaa', 1, 0, '2021-12-20 10:34:47', '2022-01-04 06:07:31'),
('New item', 'www.google.com', 26, 'IMG_1641276433_slide-33-1920x600.jpg', 'This is a promotional message', 'This is a HTML Banner', 1, 1, '2022-01-04 05:18:35', '2022-01-04 06:07:13');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int(11) NOT NULL,
  `sld` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `picture` varchar(255) COLLATE utf32_unicode_ci DEFAULT NULL,
  `product_title` varchar(255) COLLATE utf32_unicode_ci NOT NULL,
  `qty` int(11) NOT NULL,
  `unite_price` int(11) NOT NULL,
  `total_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `sld`, `product_id`, `picture`, `product_title`, `qty`, `unite_price`, `total_price`) VALUES
(3, 4, 4, 'IMG_1639561189_IMG_1639549090_R (1).jpg', 'aaa 2', 7, 77, 217),
(4, 8, 13, 'IMG_1639545138_Screenshot (1).png', 'aaa', 15, 50, 50),
(5, 8, 13, 'IMG_1639545163_Screenshot (1).png', 'abcd ddddd', 15, 50, 500),
(6, 2, 2, 'IMG_1639549605_unnamed.jpg', 'item update', 15, 45, 60),
(7, 1, 2, 'IMG_1641106590_product4-700x850 (1).jpg', 'd', 5, 2, 40),
(8, 1, 2, 'IMG_1641106624_custom-img1_620x620.jpg', 'd', 5, 50, 500);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf32_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf32_unicode_ci NOT NULL,
  `is_draft` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `link`, `is_draft`, `created_at`, `modified_at`) VALUES
(1, 'Mr. Y 2', 'www.google.com up', 0, '2021-12-20 11:47:49', '2021-12-20 11:48:00'),
(3, 'Mr. Y', 'www.google.com.bd updated', 0, '2021-12-20 11:55:22', '2021-12-20 11:59:42'),
(4, 'Mr. o', 'hgfhf', 0, '2021-12-20 12:20:15', '2021-12-20 12:20:29');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(40) COLLATE utf32_unicode_ci NOT NULL,
  `email` varchar(40) COLLATE utf32_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf32_unicode_ci NOT NULL,
  `comment` text COLLATE utf32_unicode_ci NOT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `comment`, `is_active`, `created_at`, `modified_at`) VALUES
(1, 'mr', 'example@mail.com', 'aaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaa', 0, '2021-12-20 12:05:37', '2021-12-20 12:06:06'),
(5, 'Fahim Sakib', 'example@mail.com updated', 'subject updated', 'comment updated', 0, '2021-12-20 12:05:37', '2021-12-20 12:06:06'),
(6, 'Mr. Y', 'example@mail.com updated', 'abcd', 'aaaaaaaaaa', 1, '2021-12-20 12:07:50', '2021-12-20 12:07:50'),
(7, 'Mr. Y 2', 'example@mail.com updated 2', 'aaaaaaaaaaaaaaaa v2', 'aaaaaaaaaaaaaaaaaaaaaa 3', 1, '2021-12-20 12:09:34', '2021-12-20 12:14:59'),
(8, 'zzz', 'mail@gamail.com', 'abcd', 'aaaaaaaaaa', 0, '2021-12-20 12:18:07', '2021-12-20 12:18:20');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `Product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `Product_id`, `qty`) VALUES
(3, 13, 90),
(4, 42, 201),
(5, 30, 20),
(6, 301, 201);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `title` varchar(256) COLLATE utf32_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `picture` varchar(255) COLLATE utf32_unicode_ci DEFAULT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `title`, `created_at`, `modified_at`, `picture`, `is_active`) VALUES
(25, 'new', '2021-12-20 09:47:26', '2021-12-20 10:11:03', '', 1),
(26, 'dd', '2021-12-20 09:47:26', '2022-01-02 05:46:12', NULL, 0),
(27, 'ssssssss', '2021-12-20 09:47:26', '2021-12-20 10:11:03', NULL, 0),
(28, 'dd', '2021-12-20 09:47:26', '2021-12-20 10:11:03', 'R (1).jpg', 0),
(29, 'new img', '2021-12-20 09:47:26', '2022-01-02 05:46:08', NULL, 0),
(39, 'l', '2022-01-02 04:41:54', '2022-01-02 10:41:54', 'IMG_1641098514_email_templete.PNG', 1),
(42, 'changed', '2022-01-02 05:12:21', '2022-01-02 05:46:04', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sponsers`
--

CREATE TABLE `sponsers` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf32_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf32_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf32_unicode_ci NOT NULL,
  `promotional_massege` varchar(255) COLLATE utf32_unicode_ci NOT NULL,
  `html_banner` varchar(255) COLLATE utf32_unicode_ci NOT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT '0',
  `is_draft` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `sponsers`
--

INSERT INTO `sponsers` (`id`, `title`, `picture`, `link`, `promotional_massege`, `html_banner`, `is_active`, `is_draft`, `created_at`, `modified_at`) VALUES
(1, '55', '.jph', 'sssssss', 'ssssssssssssssssssssssss', 'ssssssssssssss', 0, 0, '2021-12-20 12:37:43', '2021-12-20 12:37:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
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
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sponsers`
--
ALTER TABLE `sponsers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `sponsers`
--
ALTER TABLE `sponsers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
