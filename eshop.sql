-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2018 at 12:09 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Medicine & Health'),
(2, 'Beauty'),
(3, 'Personal Care'),
(4, 'Vitamins & Supplements'),
(5, 'Baby Needs'),
(6, 'Diets & Fitness');

-- --------------------------------------------------------

--
-- Table structure for table `deals`
--

CREATE TABLE `deals` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deals`
--

INSERT INTO `deals` (`id`, `name`) VALUES
(1, 'Today\'s Deals'),
(2, 'New Arrivals'),
(3, 'Featured Products');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `rating` int(1) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `description`, `rating`, `price`) VALUES
(1, 1, 'Paracetamol', 'Pain killler', 4, 100),
(2, 1, 'Mist Mag', 'For ulcer patients', 5, 500),
(3, 2, 'Mary Kay Powder', 'Brown Powder', 3, 150),
(4, 2, 'Concealer', 'For Hiding things', 4, 355),
(5, 3, 'Medicated Soap', 'Ward off infection', 3, 400),
(6, 3, 'Dusting Powder', 'Heat Rash ', 2, 670),
(7, 4, 'GNLD Products', 'Ever living products', 1, 5000),
(8, 4, 'Cod Liver Oil', 'Nurishment', 5, 6500);

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `category_id`, `name`) VALUES
(1, 1, 'Allergy & Sinus'),
(2, 1, 'Children\'s Healthcare'),
(3, 1, 'Cough, Cold & Flu'),
(4, 1, 'Diabeties Management'),
(5, 1, 'Eye Care'),
(6, 1, 'First Aid'),
(7, 2, 'Bath & Spa'),
(8, 2, 'Beauty Clearance'),
(9, 2, 'Gift Sets'),
(10, 2, 'Hair Care'),
(11, 2, 'Skin Care'),
(12, 2, 'Makeup & Accessories'),
(13, 3, 'Oral Care'),
(14, 3, 'Shaving & Hair Removal'),
(15, 3, 'Men\'s'),
(16, 3, 'Sun Care'),
(17, 3, 'Clearnace'),
(18, 3, 'Feminine Care'),
(19, 4, 'Aches & Pains'),
(20, 4, 'Acne Solutions'),
(21, 4, 'Aloe Vera'),
(22, 4, 'Allergy $ Sinus'),
(23, 4, 'Women\'s Multivitamin'),
(24, 4, 'Men\'s Multivitamins');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deals`
--
ALTER TABLE `deals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `deals`
--
ALTER TABLE `deals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
