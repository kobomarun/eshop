-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2018 at 01:15 PM
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
-- Table structure for table `all_users`
--

CREATE TABLE `all_users` (
  `id` int(11) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `status` int(1) NOT NULL,
  `last_login` datetime NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `all_users`
--

INSERT INTO `all_users` (`id`, `fname`, `address`, `city`, `state`, `country`, `email`, `pwd`, `status`, `last_login`, `date`) VALUES
(3, 'Oluwasegun Daramola', '', '', '', '', 'daramolasegun@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 1, '0000-00-00 00:00:00', '2018-10-02 08:27:44'),
(5, 'Olufemi Oluoje', '', '', '', '', 'kobomarun@gmail.com', '93279e3308bdbbeed946fc965017f67a', 1, '0000-00-00 00:00:00', '2018-10-02 08:39:28'),
(0, 'Agboola Michael', '', '', '', '', 'drexlar37@gmail.com', '0acf4539a14b3aa27deeb4cbdf6e989f', 1, '0000-00-00 00:00:00', '2018-10-02 19:25:47');

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
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `serial` int(11) NOT NULL,
  `name` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(80) COLLATE latin1_general_ci NOT NULL,
  `address` varchar(80) COLLATE latin1_general_ci NOT NULL,
  `phone` varchar(20) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`serial`, `name`, `email`, `address`, `phone`) VALUES
(1, 'bjhb', 'a@a.com', 'jh jhb', '5477');

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
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `serial` int(11) NOT NULL,
  `date` date NOT NULL,
  `customerid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`serial`, `date`, `customerid`) VALUES
(1, '2018-10-06', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `orderid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`orderid`, `productid`, `quantity`, `price`) VALUES
(1, 3, 1, 150),
(1, 4, 1, 355);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `rating` int(1) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `photo`, `description`, `rating`, `price`) VALUES
(1, 1, 'Paracetamol', 'ibuprofen.jpg', 'Pain killler', 4, 100),
(2, 1, 'Mist Mag', 'ibuprofen.jpg', 'For ulcer patients', 5, 500),
(3, 2, 'Mary Kay Powder', 'ibuprofen.jpg', 'Brown Powder', 3, 150),
(4, 2, 'Concealer', 'dusting.jpg', 'For Hiding things', 4, 355),
(5, 3, 'Medicated Soap', 'dusting.jpg', 'Ward off infection', 3, 400),
(6, 3, 'Dusting Powder', 'dusting.jpg', 'Heat Rash ', 2, 670),
(7, 4, 'GNLD Products', 'dusting.jpg', 'Ever living products', 1, 5000),
(8, 4, 'Cod Liver Oil', 'ibuprofen.jpg', 'Nurishment', 5, 6500);

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
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `deals`
--
ALTER TABLE `deals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`serial`);

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
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `deals`
--
ALTER TABLE `deals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
