-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2025 at 04:59 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

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
  `id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `userpassword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `userpassword`) VALUES
(1, 'admin', 'admin12345');

-- --------------------------------------------------------

--
-- Table structure for table `tblproduct`
--

CREATE TABLE `tblproduct` (
  `id` int(11) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `pprice` varchar(100) NOT NULL,
  `pimage` varchar(200) NOT NULL,
  `pcategory` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblproduct`
--

INSERT INTO `tblproduct` (`id`, `pname`, `pprice`, `pimage`, `pcategory`) VALUES
(1, 'HP victus intel core i5 13th Gen', '65000', 'uploadimage/Screenshot 2025-03-05 180135.png', 'Laptop'),
(2, 'Acer Aspire 3 Intel Celeron Dual Core', '20098', 'uploadimage/Screenshot 2025-03-05 181304.png', 'Laptop'),
(3, 'lenovo IdeaPad Slim 1 AMD Ryzen', '36900', 'uploadimage/Screenshot 2025-03-05 181506.png', 'Laptop'),
(4, 'ASUS Vivibook Go 15 AMD Ryzen', '28450', 'uploadimage/Screenshot 2025-03-05 181622.png', 'Laptop'),
(5, 'SAMSUNG Galaxy Book4 Metal intel Core i3 13 Gen', '38990', 'uploadimage/Screenshot 2025-03-05 181815.png', 'Laptop'),
(6, 'DELL Vostro 3530 intel Core i5 13th Gen ', '51990', 'uploadimage/Screenshot 2025-03-05 182029.png', 'Laptop'),
(7, 'MSI Cyborg 15 AI PC Core Ultra 7 155H', '99990', 'uploadimage/Screenshot 2025-03-05 182206.png', 'Laptop'),
(8, 'CHUWI Intel Celeron Quad Core 12th Gen N100', '17990', 'uploadimage/Screenshot 2025-03-05 182620.png', 'Laptop'),
(9, 'Infinix Y3 Max Series Intel Core i5 12th Gen 1235U', '69990', 'uploadimage/Screenshot 2025-03-05 182726.png', 'Laptop'),
(10, 'Thomson NEO Core Series Intel Core i3 12th Gen 1215U ', '27490', 'uploadimage/Screenshot 2025-03-05 182857.png', 'Laptop'),
(11, 'MOTOROLA g35 5G (Leaf Green, 128 GB)  (4 GB RAM)', '9999', 'uploadimage/Screenshot 2025-03-05 183024.png', 'Mobile'),
(12, 'IQOO Z9s 5G (Onyx Green, 128 GB)  (8 GB RAM)', '19500', 'uploadimage/Screenshot 2025-03-05 183202.png', 'Mobile'),
(13, 'Google Pixel 8a (Porcelain, 128 GB)  (8 GB RAM)', '37999', 'uploadimage/Screenshot 2025-03-05 183326.png', 'Mobile'),
(14, 'realme P2 Pro 5G (Parrot Green, 128 GB)  (8 GB RAM)', '18999', 'uploadimage/Screenshot 2025-03-05 183441.png', 'Mobile'),
(15, 'Nothing Phone (2a) 5G (Blue, 256 GB)  (12 GB RAM)', '25999', 'uploadimage/Screenshot 2025-03-05 183555.png', 'Mobile'),
(16, 'Apple iPhone 16 (White, 256 GB)', '84900', 'uploadimage/Screenshot 2025-03-05 183642.png', 'Mobile'),
(17, 'SAMSUNG Galaxy S23 Ultra 5G (Phantom Black, 256 GB)  (12 GB RAM)', '84990', 'uploadimage/Screenshot 2025-03-05 183819.png', 'Mobile'),
(18, 'Apple Apple M3 - (16 GB/256 GB SSD/macOS Sequoia) ', '103799', 'uploadimage/Screenshot 2025-03-05 183922.png', 'Laptop'),
(19, 'Nokia C21 Plus (Dark Cyan, 32 GB)  (3 GB RAM)', '7999', 'uploadimage/Screenshot 2025-03-05 184120.png', 'Mobile'),
(20, 'Micromax IN 1b (Purple, 64 GB)  (4 GB RAM)', '9999', 'uploadimage/Screenshot 2025-03-05 184220.png', 'Mobile'),
(21, '17.5 L Backpack Unisex Echo Plus  (Black)', '849', 'uploadimage/Screenshot 2025-03-05 184401.png', 'Bag'),
(22, 'Medium 30 L Laptop Backpack Laptop Backpack for Men', ' 448', 'uploadimage/Screenshot 2025-03-05 184437.png', 'Bag'),
(23, 'Small 16 L Backpack Small Bag Printed Bag for Daily Use Gym Bag ', '405', 'uploadimage/Screenshot 2025-03-05 184554.png', 'Bag'),
(24, 'Large 34 L Laptop Backpack Laptop Backpack for Men', '689', 'uploadimage/Screenshot 2025-03-05 184625.png', 'Bag'),
(25, 'Small 19 L Laptop Backpack Batavia  (Black)', '3999', 'uploadimage/Screenshot 2025-03-05 184732.png', 'Bag'),
(26, 'Large 34 L Laptop Backpack Viktor  (Black)', '2399', 'uploadimage/Screenshot 2025-03-05 184808.png', 'Bag'),
(27, 'Large Check-in Suitcase (76 cm) 8 Wheels ', '5599', 'uploadimage/Screenshot 2025-03-05 184959.png', 'Bag'),
(28, 'Medium Check-in Suitcase (64 cm) 4 Wheels - CHIC VOYAGER - Grey', '10465', 'uploadimage/Screenshot 2025-03-05 185033.png', 'Bag'),
(29, 'Small Cabin Suitcase (59 cm) 4 Wheels -Trolley Bag - Blue', '5999', 'uploadimage/Screenshot 2025-03-05 185131.png', 'Bag'),
(30, 'Soft Body Set of 6 Luggage 4 Wheels ', '6999', 'uploadimage/Screenshot 2025-03-05 185229.png', 'Bag'),
(31, 'Soft Body Set of 6 Luggage 4 Wheels', '6999', 'uploadimage/Screenshot 2025-03-05 185229.png', 'Home'),
(32, 'Small Cabin Suitcase (59 cm) 4 Wheels -Trolley Bag - Blue', '5999', 'uploadimage/Screenshot 2025-03-05 185131.png', 'Home'),
(33, 'Medium Check-in Suitcase (64 cm) 4 Wheels - CHIC VOYAGER - Grey	', '10465', 'uploadimage/Screenshot 2025-03-05 185033.png', 'Home'),
(34, 'Large Check-in Suitcase (76 cm) 8 Wheels	', '5599', 'uploadimage/Screenshot 2025-03-05 184959.png', 'Home'),
(35, 'Large 34 L Laptop Backpack Viktor (Black)', '2399', 'uploadimage/Screenshot 2025-03-05 184808.png', 'Home'),
(36, 'Small 19 L Laptop Backpack Batavia (Black)', '3999', 'uploadimage/Screenshot 2025-03-05 184732.png', 'Home'),
(37, 'Large 34 L Laptop Backpack Laptop Backpack for Men', '689', 'uploadimage/Screenshot 2025-03-05 184625.png', 'Home'),
(38, 'Small 16 L Backpack Small Bag Printed Bag for Daily Use Gym Bag', '405', 'uploadimage/Screenshot 2025-03-05 184554.png', 'Home'),
(39, 'Medium 30 L Laptop Backpack Laptop Backpack for Men', '448', 'uploadimage/Screenshot 2025-03-05 184437.png', 'Home'),
(40, '17.5 L Backpack Unisex Echo Plus (Black)', '849', 'uploadimage/Screenshot 2025-03-05 184401.png', 'Home'),
(41, 'Micromax IN 1b (Purple, 64 GB) (4 GB RAM)', '9999', 'uploadimage/Screenshot 2025-03-05 184220.png', 'Home'),
(42, 'Nokia C21 Plus (Dark Cyan, 32 GB) (3 GB RAM)', '7999', 'uploadimage/Screenshot 2025-03-05 184120.png', 'Home'),
(43, 'Apple Apple M3 - (16 GB/256 GB SSD/macOS Sequoia)', '103799', 'uploadimage/Screenshot 2025-03-05 183922.png', 'Home'),
(44, 'SAMSUNG Galaxy S23 Ultra 5G (Phantom Black, 256 GB) (12 GB RAM)', '84990', 'uploadimage/Screenshot 2025-03-05 183819.png', 'Home'),
(45, 'Apple iPhone 16 (White, 256 GB)', '84900', 'uploadimage/Screenshot 2025-03-05 183642.png', 'Home'),
(46, 'Nothing Phone (2a) 5G (Blue, 256 GB) (12 GB RAM)', '25999', 'uploadimage/Screenshot 2025-03-05 183555.png', 'Home'),
(47, 'Google Pixel 8a (Porcelain, 128 GB) (8 GB RAM)', '37999', 'uploadimage/Screenshot 2025-03-05 183326.png', 'Home'),
(48, 'IQOO Z9s 5G (Onyx Green, 128 GB) (8 GB RAM)', '18500', 'uploadimage/Screenshot 2025-03-05 183202.png', 'Home'),
(49, 'HP victus intel core i5 13th Gen	', '65000', 'uploadimage/Screenshot 2025-03-05 180135.png', 'Home'),
(50, 'Acer Aspire 3 Intel Celeron Dual Core', '20098', 'uploadimage/Screenshot 2025-03-05 181304.png', 'Home'),
(51, 'lenovo IdeaPad Slim 1 AMD Ryzen', '36900', 'uploadimage/Screenshot 2025-03-05 181506.png', 'Home'),
(52, 'MSI Cyborg 15 AI PC Core Ultra 7 155H', '99990', 'uploadimage/Screenshot 2025-03-05 182206.png', 'Home');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`id`, `username`, `email`, `number`, `password`) VALUES
(1, 'durgesh sharma', 'ixbdurgeshsharma@gmail.com', '8414957832', 'yaravirus@123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblproduct`
--
ALTER TABLE `tblproduct`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblproduct`
--
ALTER TABLE `tblproduct`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
