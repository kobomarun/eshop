-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2018 at 03:21 PM
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
