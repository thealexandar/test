-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2020 at 12:02 AM
-- Server version: 10.4.11-MariaDB-log
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cit`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `approved` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `email`, `message`, `created_at`, `approved`) VALUES
(13, 'Jordan Peterson', 'jordan@mail.com', 'Nice cocktails!', '2020-05-21 21:51:18', 1),
(14, 'Lex Fridman', 'lex@mail.com', 'Really fresh fruits!', '2020-05-21 21:52:14', 1),
(15, 'Alex Jones', 'alex@mail.com', 'THE COCKTAILS ARE OUT OF THIS WORLD!!!', '2020-05-21 21:54:05', 0);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `image`) VALUES
(1, 'Orangade', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus faucibus hendrerit euismod.', 'assets/image/summer-drinks-drink-still-life-109275.jpg'),
(3, 'Citrus', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus faucibus hendrerit euismod.', 'assets/image/alcohol-beverage-blur-brown-616836.jpg'),
(4, 'John Mellow', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus faucibus hendrerit euismod.', 'assets/image/lemon-juice-on-selective-focus-photography-2109099.jpg'),
(5, 'Fruit Mix', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus faucibus hendrerit euismod.', 'assets/image/assorted-juice-on-glass-bottles-1234079.jpg'),
(6, 'Devils Ice Tea', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus faucibus hendrerit euismod.', 'assets/image/close-up-photo-of-clear-glass-mason-mug-with-white-liquid-1146754.jpg'),
(7, 'Fresh Fruits', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus faucibus hendrerit euismod.', 'assets/image/food-healthy-nature-water-129574.jpg'),
(8, 'Summer Party', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus faucibus hendrerit euismod.', 'assets/image/three-assorted-fruit-juice-in-glasses-1233319.jpg'),
(9, 'Vitamin Sea', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus faucibus hendrerit euismod.', 'assets/image/selective-focus-photography-of-pure-orange-juice-158053.jpg'),
(10, 'Lemonade', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus faucibus hendrerit euismod.', 'assets/image/background-beverage-citrus-close-up-298720.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
