-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2018 at 02:12 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

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
  `images` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `rating` int(1) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `images`, `description`, `rating`, `price`) VALUES
(1, 6, '4 Station home gym machine', '4 Station home gym machine.jpg', 'Muscle builder', 4, 100),
(2, 6, 'Analog heart rate monitor sensor', 'Analog heart rate monitor sensor.jpg', 'To monitor heart rate', 5, 500),
(3, 5, 'baby boy Tshirt', 'baby boy Tshirt.jpg', 'baby\'s clothing', 3, 150),
(4, 6, 'Supplement', 'B-Complex.jpg', 'Food supplements', 4, 355),
(5, 2, 'Face primer', 'Blemish Rescue.jpg', 'Smoother and lasting make-up', 3, 400),
(6, 2, 'Face primer', 'Bryon Bay.jpg', 'Smoother and lasting make-up', 2, 670),
(7, 6, 'Fitness', 'C4 sport.jpg', 'keeping fit', 1, 5000),
(8, 2, 'face primer', 'Chanel Ultra Foundation.jpg', 'smoother and lasting foundation', 5, 6500),
(9, 5, 'changing table', 'changing table.jpg', 'for changing baby\'s diaper', 5, 5000),
(10, 2, 'face primer', 'Cream  BB.jpg', 'for smoother and lasting foundation', 5, 5000),
(11, 4, 'creatine for muscle building', 'creatine-for-muscle-building.jpg', 'Food supplement and vitamins', 5, 3000),
(12, 5, 'Diaper changing pads', 'Diaper changing pads.jpg', 'changing pad', 3, 2000),
(13, 5, 'Diaper rash ointment', 'Diaper rash ointment.jpg', ' rash ointment', 5, 3000),
(14, 4, 'Digest gold', 'Digest gold.jpg', 'food supplement', 3, 2000),
(15, 5, 'Dirty diaper receptacle', 'Dirty diaper receptacle.jpg', 'diaper receptacle', 4, 6000),
(16, 6, 'Elliptical Machine', 'Elliptical Machine.jpg', 'fitness ', 5, 23000),
(17, 6, 'forerunner 35 gps', 'forerunner 35 gps.png', 'running heart rate monitor', 6, 20000),
(18, 5, 'changing table', 'changing table.jpg', 'for changing baby\'s diaper', 5, 5000),
(19, 2, 'face primer', 'Cream  BB.jpg', 'for smoother and lasting foundation', 5, 5000),
(20, 4, 'creatine for muscle building', 'creatine-for-muscle-building.jpg', 'Food supplement and vitamins', 5, 3000),
(21, 5, 'Diaper changing pads', 'Diaper changing pads.jpg', 'changing pad', 3, 2000),
(22, 5, 'Diaper rash ointment', 'Diaper rash ointment.jpg', ' rash ointment', 5, 3000),
(23, 4, 'Digest gold', 'Digest gold.jpg', 'food supplement', 3, 2000),
(24, 5, 'Dirty diaper receptacle', 'Dirty diaper receptacle.jpg', 'diaper receptacle', 4, 6000),
(25, 6, 'Elliptical Machine', 'Elliptical Machine.jpg', 'fitness ', 5, 23000),
(26, 6, 'forerunner 35 gps', 'forerunner 35 gps.png', 'running heart rate monitor', 6, 20000);

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

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Indexes for table `users`
--
ALTER TABLE `users`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
