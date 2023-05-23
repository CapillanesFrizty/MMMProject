-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2023 at 01:12 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mmm`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `model_id` int(11) NOT NULL,
  `cus_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`model_id`, `cus_id`, `quantity`, `price`) VALUES
(10, 2, 3, 200),
(11, 2, 3, 200),
(10, 1, 3, 200),
(10, 1, 3, 200),
(10, 1, 3, 200),
(11, 1, 3, 200);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cusID` int(11) NOT NULL,
  `first_name` varchar(250) NOT NULL,
  `last_name` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `contact` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cusID`, `first_name`, `last_name`, `username`, `password`, `email`, `contact`, `address`) VALUES
(1, 'John Fritz', 'Capillanes', 'Jcap', '1234jcap', 'Jcap@gmail.com', '0912345123', 'Davao'),
(2, 'smith', 'john', 'johndoe', '3643johndoe', 'johndoe@edu.ph', '12343212123', 'UK, London');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderNum` int(11) NOT NULL,
  `cusID` int(11) NOT NULL,
  `prodID` int(11) NOT NULL,
  `orderDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderNum`, `cusID`, `prodID`, `orderDate`) VALUES
(14, 1, 11, '0000-00-00'),
(15, 1, 10, '0000-00-00'),
(16, 1, 11, '2023-05-20'),
(17, 1, 10, '0000-00-00'),
(18, 1, 10, '2023-05-20'),
(19, 1, 10, '0000-00-00'),
(20, 1, 10, '0000-00-00'),
(21, 1, 11, '0000-00-00'),
(22, 1, 10, '2023-05-20'),
(23, 1, 11, '0000-00-00'),
(24, 1, 10, '0000-00-00'),
(25, 1, 10, '0000-00-00'),
(26, 1, 10, '0000-00-00'),
(27, 1, 10, '0000-00-00'),
(28, 1, 10, '0000-00-00'),
(29, 1, 11, '2023-05-20'),
(30, 1, 10, '2023-05-20'),
(31, 1, 10, '2023-05-20');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `prodID` int(11) NOT NULL,
  `prodName` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `productmodel`
--

CREATE TABLE `productmodel` (
  `modelID` int(11) NOT NULL,
  `modelName` varchar(250) NOT NULL,
  `modelDescription` varchar(250) NOT NULL,
  `SRP` int(250) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `productmodel`
--

INSERT INTO `productmodel` (`modelID`, `modelName`, `modelDescription`, `SRP`, `img`) VALUES
(9, 'speed69', 'fastest macqueen', 300, 'IMG-645fb259092ea0.71047698.png'),
(10, 'speed01', 'fastest', 200, 'IMG-645fb26edbc9e5.30530976.png'),
(11, 'car300', 'classic vintage car', 200, 'IMG-645fb38bba47c6.68522855.png');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `invoiceNum` int(11) NOT NULL,
  `CusID` int(11) NOT NULL,
  `ProductID` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `SubPrice` int(11) NOT NULL,
  `date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cusID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderNum`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`prodID`);

--
-- Indexes for table `productmodel`
--
ALTER TABLE `productmodel`
  ADD PRIMARY KEY (`modelID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cusID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderNum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `prodID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `productmodel`
--
ALTER TABLE `productmodel`
  MODIFY `modelID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
