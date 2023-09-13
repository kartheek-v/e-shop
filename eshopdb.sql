-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2023 at 02:23 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eshopdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `product_id` varchar(20) DEFAULT NULL,
  `pname` varchar(20) DEFAULT NULL,
  `pprice` int(11) DEFAULT NULL,
  `pimage` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `product_id`, `pname`, `pprice`, `pimage`) VALUES
(23, 6, 'APP40000', 'Apple iPhone 14', 40000, 'pimages/apple.webp'),
(24, 6, 'APP40000', 'Apple iPhone 14', 40000, 'pimages/apple.webp'),
(58, 19, 'APP40000', 'Apple iPhone 14', 40000, 'pimages/apple.webp'),
(60, 19, 'KAR11000', 'KARBON TV', 11000, 'pimages/KARBON.webp');

-- --------------------------------------------------------

--
-- Table structure for table `mobilespecification`
--

CREATE TABLE `mobilespecification` (
  `pid` varchar(11) NOT NULL,
  `os` varchar(30) DEFAULT NULL,
  `processor` varchar(30) DEFAULT NULL,
  `color` varchar(30) DEFAULT NULL,
  `display_size` varchar(30) DEFAULT NULL,
  `internal_storage` varchar(10) DEFAULT NULL,
  `ram` varchar(10) DEFAULT NULL,
  `primary_camera` varchar(30) DEFAULT NULL,
  `secondary_camera` varchar(30) DEFAULT NULL,
  `network_type` varchar(30) DEFAULT NULL,
  `battery_capacity` varchar(30) DEFAULT NULL,
  `warrenty_summary` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mobilespecification`
--

INSERT INTO `mobilespecification` (`pid`, `os`, `processor`, `color`, `display_size`, `internal_storage`, `ram`, `primary_camera`, `secondary_camera`, `network_type`, `battery_capacity`, `warrenty_summary`) VALUES
('APP40000', 'IOS', 'DUAL CORE', 'WHITE', '15INCH', '64GB', '4GB', '15MP', '10MP', '5G', '5000MH', '2 YEARS'),
('IQ031000', 'ANDROID ', 'SNAP DRAGON', 'BLUE', '13INCH', '128GB', '6GB', '50MP', '25MP', '4G', '6000MH', '1 YEAR'),
('KAR11000', 'ANDROID ', 'SNAP DRAGON', 'OCEAN BLUE', '17INCH', '64GB', '4GB', '', '25MP', '4G', '4000MH', '1 YEAR'),
('NOT30000', 'ANDROID ', 'SNAP DRAGON 655', 'OCEAN BLUE', '17INCH', '128GB', '12GB', '30MP', '25MP', '4G/5G', '4000MH', '3 YEAR'),
('ONE36000', 'ANDROID ', 'SNAP DRAGON 655', 'GREEN', '17INCH', '128GB', '12GB', '30MP', '25MP', '4G/5G', '4000MH', '3 YEAR'),
('OPP27000', 'ANDROID ', 'DUAL CORE', 'ROYAL BLUE', '16INCH', '128GB', '6GB', '15MP', '25MP', '4G/5G', '7000MH', '3 YEARS'),
('REA24000', 'ANDROID ', 'SNAP DRAGON 555', 'GREEN', '16INCH', '128GB', '12GB', '50MP', '25MP', '5G', '5500MH', '2YEARS'),
('RED19000', 'ANDROID ', 'SNAP DRAGON', 'WHITE', '16INCH', '64GB', '4GB', '50MP', '10MP', '4G/5G', '4000MH', '3 YEARS'),
('RED25000', 'ANDROID ', 'SNAP DRAGON 655', 'PINK', '16INCH', '128GB', '6GB', '50MP', '25MP', '4G/5G', '6000MH', '3 YEARS'),
('SAM16000', 'ANDROID ', 'DUAL CORE', 'ROYAL BLUE', '17INCH', '128GB', '12GB', '15MP', '10MP', '5G', '5000MH', '1 YEAR'),
('VIV18000', 'ANDROID ', 'SNAP DRAGON 555', 'BLUE', '15INCH', '128GB', '6GB', '50MP', '25MP', '4G/5G', '4000MH', '5 YEARS');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `pid` varchar(100) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `pname` varchar(30) DEFAULT NULL,
  `pprice` varchar(100) NOT NULL,
  `pimage` varchar(1111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `pid`, `mobile`, `address`, `pname`, `pprice`, `pimage`) VALUES
(11, 2, 'APP40000', '09381878073', 'karthinagar colony', 'Apple iPhone 14', '40000', 'pimages/apple.webp'),
(12, 2, 'IQ031000', '09381878073', 'karthinagar colony', 'IQOO Z', '31000', 'pimages/iqoo.webp'),
(35, 22, 'LG29000', '9381878073', 'ongole', 'LG 4K', '29000', 'pimages/LG.webp'),
(36, 19, 'LG29000', '09381878073', 'ONGOLE', 'LG 4K', '29000', 'pimages/LG.webp'),
(37, 19, 'APP40000', '09381878073', 'karthinagar colony', 'Apple iPhone 14', '40000', 'pimages/apple.webp');

-- --------------------------------------------------------

--
-- Table structure for table `productmaster`
--

CREATE TABLE `productmaster` (
  `pid` varchar(11) NOT NULL,
  `pname` varchar(40) DEFAULT NULL,
  `pprice` int(11) DEFAULT NULL,
  `ptype` varchar(40) DEFAULT NULL,
  `pimage` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productmaster`
--

INSERT INTO `productmaster` (`pid`, `pname`, `pprice`, `ptype`, `pimage`) VALUES
('APP40000', 'Apple iPhone 14', 40000, 'mobile', 'pimages/apple.webp'),
('IQ031000', 'IQOO Z', 31000, 'mobile', 'pimages/iqoo.webp'),
('KAR11000', 'KARBON TV', 11000, 'tv', 'pimages/KARBON.webp'),
('LG29000', 'LG 4K', 29000, 'tv', 'pimages/LG.webp'),
('NOT30000', 'Nothing', 30000, 'mobile', 'pimages/nothing.webp'),
('ONE14000', 'ONEPLUS TV 4K', 14000, 'tv', 'pimages/OLA.jpg'),
('ONE36000', 'One Plus', 36000, 'mobile', 'pimages/oneplus.webp'),
('OPP25000', 'OPPO TV HD', 25000, 'tv', 'pimages/b011030f12fbcd257f586ffc7db8cf0f6dcb47a60d358f0863ae38578a2f4335_01.jpg'),
('OPP27000', 'OPPO', 27000, 'mobile', 'pimages/OPPO.webp'),
('REA12000', 'REALME SMART TV 4K', 12000, 'tv', 'pimages/OLA.jpg'),
('REA24000', 'Realme 9 PRO', 24000, 'mobile', 'pimages/realme.webp'),
('RED16000', 'REDMI TV 4K', 16000, 'tv', 'pimages/mi-tv-4x-43-135955-large-1.webp'),
('RED19000', 'Redmi 11Pro', 19000, 'mobile', 'pimages/redmi.webp'),
('RED25000', 'Redmi K20 Pro', 26000, 'mobile', 'pimages/redmik20pro.jpeg'),
('SAM13000', 'SAMSUNG TV 4K', 13000, 'tv', 'pimages/sumsung_tv.webp'),
('SAM16000', 'Samsung Galaxy', 16000, 'mobile', 'pimages/samsung.webp'),
('VIV18000', 'Vivo T1', 18000, 'mobile', 'pimages/hai.jpeg'),
('VU14000', 'VU PREMUM 4K', 14000, 'tv', 'pimages/VU.webp');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) DEFAULT NULL,
  `name` char(1) DEFAULT NULL,
  `age` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tv_specification`
--

CREATE TABLE `tv_specification` (
  `pid` varchar(15) NOT NULL,
  `In_The_Box` varchar(150) DEFAULT NULL,
  `color` varchar(20) DEFAULT NULL,
  `display_size` varchar(20) DEFAULT NULL,
  `screen_type` varchar(20) DEFAULT NULL,
  `hd_tech_res` varchar(20) DEFAULT NULL,
  `smart_tv` varchar(15) DEFAULT NULL,
  `motion_sensor` varchar(15) DEFAULT NULL,
  `hdmi` varchar(20) DEFAULT NULL,
  `usb` varchar(20) DEFAULT NULL,
  `bulit_in_wifi` varchar(15) DEFAULT NULL,
  `lunch_year` date DEFAULT NULL,
  `wall_mount` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tv_specification`
--

INSERT INTO `tv_specification` (`pid`, `In_The_Box`, `color`, `display_size`, `screen_type`, `hd_tech_res`, `smart_tv`, `motion_sensor`, `hdmi`, `usb`, `bulit_in_wifi`, `lunch_year`, `wall_mount`) VALUES
('KAR11000', ' 2 pins', 'WHITE', '24INCH', 'QLED', 'HD', 'YES', 'YES', 'YES', '8.0', 'YES', '2023-08-25', 'YES'),
('LG29000', ' 2 pins', 'BLUE', '24INCH', 'QLED', 'HD', 'yes', 'Yes', 'YES', '8.0', 'Yes', '2023-08-10', 'Yes'),
('ONE14000', '2 PINS', 'ROYAL BLUE', '32INCH', 'LED', 'FULL HD', 'yes', 'Yes', 'YES', '8.0', 'Yes', '2022-05-27', 'Yes'),
('OPP25000', 'SINGLE STAND,2 PINS', 'OCEAN BLUE', '24INCH', 'QLED', 'HD', 'yes', 'Yes', 'YES', '12.0', 'Yes', '2022-01-10', 'Yes'),
('REA12000', 'SINGLE STANDS', 'GREEN', '16INCH', 'LED', 'HD', 'yes', 'Yes', 'NO', '8.0', 'No', '2021-06-15', 'No'),
('RED16000', '2 STANDS', 'WHITE', '16INCH', 'LED', 'HD', 'yes', 'Yes', 'YES', '8.0', 'Yes', '2022-12-23', 'Yes'),
('SAM13000', 'SINGLE STAND', 'BLUE', '16INCH', 'LED', 'HD', 'yes', 'Yes', 'NO', '8.0', 'No', '2021-03-04', 'No'),
('VU14000', '2 STANDS', 'PINK', '24INCH', 'LED', 'HD', 'yes', 'Yes', 'YES', '8.0', 'Yes', '2022-10-17', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `usermaster`
--

CREATE TABLE `usermaster` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(40) DEFAULT NULL,
  `user_email` varchar(40) NOT NULL,
  `user_pwd` varchar(40) DEFAULT NULL,
  `user_gender` varchar(40) DEFAULT NULL,
  `user_mobile` bigint(20) DEFAULT NULL,
  `user_dob` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usermaster`
--

INSERT INTO `usermaster` (`user_id`, `user_name`, `user_email`, `user_pwd`, `user_gender`, `user_mobile`, `user_dob`) VALUES
(6, 'CHARAN TEJA', 'charangct@gmail.com', 'hai', 'male', 7337457765, '2023-08-05'),
(19, 'naveen', 'karthikT8008@outlook.com', 'karthik', 'male', 7075123256, '2002-11-12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobilespecification`
--
ALTER TABLE `mobilespecification`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `productmaster`
--
ALTER TABLE `productmaster`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `tv_specification`
--
ALTER TABLE `tv_specification`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `usermaster`
--
ALTER TABLE `usermaster`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `usermaster`
--
ALTER TABLE `usermaster`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
