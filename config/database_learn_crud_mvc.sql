-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2022 at 09:18 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database_learn_crud_mvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `Brand_id` int(11) NOT NULL,
  `Brand_name` varchar(30) NOT NULL,
  `Brand_pic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`Brand_id`, `Brand_name`, `Brand_pic`) VALUES
(1, 'apple', 'http://mobilz.com/assets/images/apple.png'),
(2, 'samsung', 'http://mobilz.com/assets/images/samsung.png'),
(3, 'Oppo', 'http://mobilz.com/assets/images/Oppo.png'),
(4, 'xiaomi', 'http://mobilz.com/assets/images/xiaomi.png'),
(5, 'infinix', 'http://mobilz.com/assets/images/infinix1.png'),
(6, 'huawei', 'http://mobilz.com/assets/images/huawei.png');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `Check_id` int(11) NOT NULL,
  `Check_price` int(11) NOT NULL,
  `Customer_Ssn` int(11) NOT NULL,
  `items_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`Check_id`, `Check_price`, `Customer_Ssn`, `items_id`) VALUES
(1, 10000, 2147483647, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cart_items`
--

CREATE TABLE `cart_items` (
  `items_id` int(11) NOT NULL,
  `Check_id` int(11) DEFAULT NULL,
  `Mobile_name` varchar(60) DEFAULT NULL,
  `Mobile_price` int(11) DEFAULT NULL,
  `Mobile_pic` varchar(100) DEFAULT NULL,
  `Mobile_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart_items`
--

INSERT INTO `cart_items` (`items_id`, `Check_id`, `Mobile_name`, `Mobile_price`, `Mobile_pic`, `Mobile_id`) VALUES
(52, 1, 'Iphone 13', 16000, 'http://mobilz.com/assets/images/Iphone 13.jpg', 12),
(53, 1, 'IPhone 11', 11000, 'http://mobilz.com/assets/images/IPhone 11.jpg', 10);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `Customer_name` varchar(50) NOT NULL,
  `Customer_Ssn` int(11) NOT NULL,
  `Customer_location` varchar(50) NOT NULL,
  `Customer_post_code` varchar(10) NOT NULL,
  `Customer_email` varchar(50) NOT NULL,
  `Customer_pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`Customer_name`, `Customer_Ssn`, `Customer_location`, `Customer_post_code`, `Customer_email`, `Customer_pass`) VALUES
('fatma', 30203030, 'benha', '13814', 'fatma@gmail.com', '0000'),
('doha', 30302020, 'benha', '13814', 'doha@gmail.com', '0000'),
('mohamed awni', 123456789, 'benha', '13814', 'mohamedawni@gmail.com', '01010909Aa'),
('amr awni', 2147483647, 'benha', '13814', 'amrawni33@gmail.com', '01010909Aa');

-- --------------------------------------------------------

--
-- Table structure for table `mobiles`
--

CREATE TABLE `mobiles` (
  `Mobile_id` int(11) NOT NULL,
  `Mobile_name` varchar(50) NOT NULL,
  `Mobile_price` int(11) NOT NULL,
  `description` varchar(100) NOT NULL,
  `CPU` varchar(20) NOT NULL,
  `RAM` varchar(20) NOT NULL,
  `Front_Cam` varchar(20) NOT NULL,
  `Back_Cam` varchar(20) NOT NULL,
  `Battery` varchar(20) NOT NULL,
  `Brand_ID` int(11) NOT NULL,
  `Mobile_pic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mobiles`
--

INSERT INTO `mobiles` (`Mobile_id`, `Mobile_name`, `Mobile_price`, `description`, `CPU`, `RAM`, `Front_Cam`, `Back_Cam`, `Battery`, `Brand_ID`, `Mobile_pic`) VALUES
(10, 'IPhone 11', 11000, '8K SUPER STEADY VIDEO: Shoot videos that rival how epic your life is with stunning 8K recording, the', 'snapdragon 985', '12GB', '12Mp', '45Mp', '5000 mAh', 1, 'http://mobilz.com/assets/images/IPhone 11.jpg'),
(11, 'IPhone 12', 14000, '8K SUPER STEADY VIDEO: Shoot videos that rival how epic your life is with stunning 8K recording, the', 'snapdragon 985', '12GB', '12Mp', '45Mp', '5000 mAh', 1, 'http://mobilz.com/assets/images/IPhone 12.jpg'),
(12, 'Iphone 13', 16000, '8K SUPER STEADY VIDEO: Shoot videos that rival how epic your life is with stunning 8K recording, the', 'snapdragon 985', '12GB', '12Mp', '45Mp', '5000 mAh', 1, 'http://mobilz.com/assets/images/Iphone 13.jpg'),
(13, 'Iphone 14 Pro Max ', 40000, '8K SUPER STEADY VIDEO: Shoot videos that rival how epic your life is with stunning 8K recording, the', 'snapdragon 985', '12GB', '12Mp', '45Mp', '5000 mAh', 1, 'http://mobilz.com/assets/images/Iphone 14 Pro Max .jpg'),
(14, 'Samsung Galaxy A03s', 10000, '8K SUPER STEADY VIDEO: Shoot videos that rival how epic your life is with stunning 8K recording, the', 'snapdragon 985', '12GB', '12Mp', '45Mp', '5000 mAh', 2, 'http://mobilz.com/assets/images/Samsung Galaxy A03s.jpg'),
(15, 'Samsung Galaxy A04 ', 10000, '8K SUPER STEADY VIDEO: Shoot videos that rival how epic your life is with stunning 8K recording, the', 'snapdragon 985', '12GB', '12Mp', '45Mp', '5000 mAh', 2, 'http://mobilz.com/assets/images/Samsung Galaxy A04 .jpg'),
(16, 'Samsung Galaxy A04s', 14000, '8K SUPER STEADY VIDEO: Shoot videos that rival how epic your life is with stunning 8K recording, the', 'snapdragon 985', '12GB', '12Mp', '45Mp', '5000 mAh', 2, 'http://mobilz.com/assets/images/Samsung Galaxy A04s.jpg'),
(19, 'Samsung Galaxy M33', 14025, '8K SUPER STEADY VIDEO: Shoot videos that rival how epic your life is with stunning 8K recording, the', 'snapdragon 985', '12GB', '12Mp', '45Mp', '5000 mAh', 2, 'http://mobilz.com/assets/images/Samsung Galaxy M33.jpg'),
(20, 'OPPO A16K', 10565, '8K SUPER STEADY VIDEO: Shoot videos that rival how epic your life is with stunning 8K recording, the', 'snapdragon 985', '12GB', '12Mp', '45Mp', '5000 mAh', 3, 'http://mobilz.com/assets/images/OPPO A16K.jpg'),
(21, 'OPPO A55', 2135, '8K SUPER STEADY VIDEO: Shoot videos that rival how epic your life is with stunning 8K recording, the', 'snapdragon 985', '12GB', '12Mp', '45Mp', '5000 mAh', 3, 'http://mobilz.com/assets/images/OPPO A55.jpg'),
(22, 'OPPO A76', 12540, '8K SUPER STEADY VIDEO: Shoot videos that rival how epic your life is with stunning 8K recording, the', 'snapdragon 985', '12GB', '12Mp', '45Mp', '5000 mAh', 3, 'http://mobilz.com/assets/images/OPPO A76.jpg'),
(23, 'OPPO Reno 6', 10000, '8K SUPER STEADY VIDEO: Shoot videos that rival how epic your life is with stunning 8K recording, the', 'snapdragon', '12MB', '12MB', '45MB', '4000MA', 3, 'http://mobilz.com/assets/images/OPPO Reno 6.jpg'),
(24, 'XIAOMI Redmi 10 2022', 10000, '8K SUPER STEADY VIDEO: Shoot videos that rival how epic your life is with stunning 8K recording, the', 'snapdragon', '12MB', '12MB', '45MB', '4000MA', 4, 'http://mobilz.com/assets/images/XIAOMI Redmi 10 2022.jpg'),
(25, 'XIAOMI Redmi 10A -', 10000, '8K SUPER STEADY VIDEO: Shoot videos that rival how epic your life is with stunning 8K recording, the', 'snapdragon', '12MB', '12MB', '45MB', '4000MA', 4, 'http://mobilz.com/assets/images/XIAOMI Redmi 10A -.jpg'),
(26, 'XIAOMI Redmi A1 Plus', 10000, '8K SUPER STEADY VIDEO: Shoot videos that rival how epic your life is with stunning 8K recording, the', 'snapdragon', '12MB', '12MB', '45MB', '4000MA', 4, 'http://mobilz.com/assets/images/XIAOMI Redmi A1 Plus.jpg'),
(27, 'XIAOMI Redmi Note 11', 10000, '8K SUPER STEADY VIDEO: Shoot videos that rival how epic your life is with stunning 8K recording, the', 'snapdragon', '12MB', '12MB', '45MB', '4000MA', 4, 'http://mobilz.com/assets/images/XIAOMI Redmi Note 11.jpg'),
(28, 'Infinix Hot 11', 10000, '8K SUPER STEADY VIDEO: Shoot videos that rival how epic your life is with stunning 8K recording, the', 'snapdragon', '12MB', '12MB', '45MB', '4000MA', 5, 'http://mobilz.com/assets/images/Infinix Hot 11.jpg'),
(29, 'Infinix Hot 11S', 10000, '8K SUPER STEADY VIDEO: Shoot videos that rival how epic your life is with stunning 8K recording, the', 'snapdragon', '12MB', '12MB', '45MB', '4000MA', 5, 'http://mobilz.com/assets/images/Infinix Hot 11S.jpg'),
(30, 'Infinix Note 11', 10000, '8K SUPER STEADY VIDEO: Shoot videos that rival how epic your life is with stunning 8K recording, the', 'snapdragon', '12MB', '12MB', '45MB', '4000MA', 5, 'http://mobilz.com/assets/images/Infinix Note 11.jpg'),
(31, 'Infinix Smart 6', 10000, '8K SUPER STEADY VIDEO: Shoot videos that rival how epic your life is with stunning 8K recording, the', 'snapdragon', '12MB', '12MB', '45MB', '4000MA', 5, 'http://mobilz.com/assets/images/Infinix Smart 6.jpg'),
(32, 'Huawei nova 7 5G', 10000, '8K SUPER STEADY VIDEO: Shoot videos that rival how epic your life is with stunning 8K recording, the', 'snapdragon', '12MB', '12MB', '45MB', '4000MA', 6, 'http://mobilz.com/assets/images/Huawei nova 7 5G.jpg'),
(33, 'Huawei Nova 9 SE ', 10000, '8K SUPER STEADY VIDEO: Shoot videos that rival how epic your life is with stunning 8K recording, the', 'snapdragon', '12MB', '12MB', '45MB', '4000MA', 6, 'http://mobilz.com/assets/images/Huawei Nova 9 SE .jpg'),
(34, 'Huawei Nova Y70 ', 10000, '8K SUPER STEADY VIDEO: Shoot videos that rival how epic your life is with stunning 8K recording, the', 'snapdragon', '12MB', '12MB', '45MB', '4000MA', 6, 'http://mobilz.com/assets/images/Huawei Nova Y70.jpg'),
(35, 'Huawei Nova Y90', 10000, '8K SUPER STEADY VIDEO: Shoot videos that rival how epic your life is with stunning 8K recording, the', 'snapdragon', '12MB', '12MB', '45MB', '4000MA', 6, 'http://mobilz.com/assets/images/Huawei Nova Y90.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`Brand_id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`Check_id`),
  ADD KEY `Customer_Ssn` (`Customer_Ssn`),
  ADD KEY `items_id` (`items_id`);

--
-- Indexes for table `cart_items`
--
ALTER TABLE `cart_items`
  ADD PRIMARY KEY (`items_id`),
  ADD KEY `Mobile_id` (`Mobile_name`),
  ADD KEY `Check_id` (`Check_id`),
  ADD KEY `Mobile_id_2` (`Mobile_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`Customer_Ssn`);

--
-- Indexes for table `mobiles`
--
ALTER TABLE `mobiles`
  ADD PRIMARY KEY (`Mobile_id`),
  ADD KEY `Brand_ID` (`Brand_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `Check_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart_items`
--
ALTER TABLE `cart_items`
  MODIFY `items_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `mobiles`
--
ALTER TABLE `mobiles`
  MODIFY `Mobile_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_ibfk_1` FOREIGN KEY (`Customer_Ssn`) REFERENCES `customers` (`Customer_Ssn`);

--
-- Constraints for table `cart_items`
--
ALTER TABLE `cart_items`
  ADD CONSTRAINT `cart_items_ibfk_1` FOREIGN KEY (`Check_id`) REFERENCES `carts` (`Check_id`),
  ADD CONSTRAINT `cart_items_ibfk_2` FOREIGN KEY (`Mobile_id`) REFERENCES `mobiles` (`Mobile_id`);

--
-- Constraints for table `mobiles`
--
ALTER TABLE `mobiles`
  ADD CONSTRAINT `mobiles_ibfk_1` FOREIGN KEY (`Brand_ID`) REFERENCES `brands` (`Brand_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
