-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2023 at 08:57 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `contact`, `message`) VALUES
(22, 'sohail shaikh', 'shaikhsohail@gmail.com', '9874561235', 'hello your website is so nice'),
(24, 'siddhart kulthe', 'sidkulthe@gmail.com', '9876543210', 'your website lacking .website is giving some issue'),
(25, 'roshan singh', 'roshan123@gmail.com', '8686765690', 'thanks for your services'),
(26, 'farhan shaikh', 'farhan52@gmail.com', '7898657656', 'i did not get order yet.PLease GIVE ME PRODUCT FAST '),
(28, 'manish kadam', 'kadammanish@gmail.com', '9090986245', 'can i change my password after login'),
(29, 'arun kangare', 'arun512@gmail.com', '7659876534', 'hello nice services');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `price`) VALUES
(1, 'Baidyanath Chyawanprash 1kg', 350),
(2, 'Baidyanath Giloy Juice 1litre', 280),
(3, 'Patanjali Natural Toothpaste 100g', 55),
(4, 'Indulekha Hair oil 100ml', 410),
(5, 'Himalaya Baby kit', 210),
(6, 'Himalaya Baby powder 100gm', 195),
(7, 'Himalaya Baby soap 75gm', 80),
(8, 'Himalaya Baby message oil', 350),
(9, 'Alovera Moisturizing cream 50gm', 85),
(10, 'Alovera gel 150ml', 45),
(11, 'Himalaya Natural Glow Kesar face cream', 80),
(12, 'Himalya Neem face wash', 75),
(13, 'Dabur Chyawanprash 1.5kg', 444),
(14, 'Dr. Ortho oil 120ml', 266),
(15, 'Baidyanath shankhapushpi 450ml', 196),
(16, 'kayam churna 100gm', 95),
(17, 'kesh King Oil 300ml', 244),
(18, 'patanjali chyawanprash 500gm', 160),
(19, 'dabur Tulsi drop 20+10ml', 160),
(20, 'Zandu Haldi drop 32ml', 170),
(21, 'Amla juice 1litre', 220),
(22, 'Jamun vinegar 500ml', 80),
(23, 'Patanjali Roghan Badam oil 150ml', 405),
(24, 'patanjali Apple vinegar 500ml', 130),
(25, 'Hamdard Safi syrup 200 ml', 100),
(26, 'Aloe vera Juice 1litre', 299),
(27, 'giloy juice', 90),
(28, 'Himalaya Gentle Baby Wash (200ml)', 140),
(29, 'Himalaya Diaper Rash Cream,50g', 120),
(30, 'Himalaya Baby Body Lotion, For All Skin Types (400 ml)', 270),
(31, 'Himalaya Baby Cream,For Dry Skin 200ml', 220),
(32, 'Himalaya Gentle Baby Shampoo (100ml)', 80),
(33, 'Himalaya Gentle Baby Soap Value Pack,4*75g', 149),
(34, 'Himalaya Baby Wipes-72 Pieces(Pack of 2)', 285),
(35, 'Himalaya Gentle Baby Wipes Mega Offer Pack', 517),
(36, 'Himalaya Baby Gift Pack Series,Pack of 1 set,white', 501),
(37, 'Himalaya Baby Care Gift Jar Pack', 185),
(38, 'Baby Hair Oil 200ml', 220),
(39, 'Himalaya Total Care Baby Pants Diapers,Medium,78p', 918),
(40, 'Himalaya Baby Diaper pants,Small(4-8 kg),54p', 576),
(41, 'Total Care Baby Pants Diapers,XL(12-17 kg),74p', 949),
(42, 'Himalaya Baby Total Care Baby Pants Large (L)54s', 731),
(43, 'PATANJALI SAUNDARYA FACE WASH 60g', 70),
(44, 'Patanjali Ayurveda Moisturizer Cream', 75),
(45, 'Himalaya Neem Tablet', 180),
(46, 'Anti-Wrinkle Cream 50g', 270),
(47, 'Aloe Vera Shampoo 200ml', 110),
(48, 'Roop Mantra Ayurvedic Cream For Men And Women 60g', 146),
(49, 'Roop Mantra Cucumber Herbal Face Wash,115ml (Pack of 2)', 196),
(50, 'PATANJALI BEAUTY CREAM 50g', 70),
(51, 'PATANJALI ANTI WRINKLE CREAM 50g', 150),
(52, 'Patanjali Herbal Shaving Cream 100 g', 60),
(53, 'MEN\'S BEARD ENTICE FACE WASH 100g', 220),
(54, 'Natural Face Cream Ayurvedic Care+,50g', 154),
(55, 'PATANJALI Aloe vera Gel Kesar Chandan 150ml', 110),
(56, 'ALOE & CUCUM.REF.BODY LOTION 200ml INDIA', 149),
(57, 'Himalaya Cocoa Butter Intensive Body Lotion, 200 ml', 145);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('admin@gmail.com', 'admin@1234');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact`, `city`, `address`) VALUES
(12, 'sohail shaikh', 'shaikhsohail@gmail.com', '4fb5f54bed130914cb5be7836e0a425f', '9874561235', 'shrirampur', 'milat nagar ward 1 shrirampur'),
(13, 'siddhart kulthe', 'sidkulthe@gmail.com', 'ca576ba0203ba0bee36311df85af3013', '9876543210', 'shrirampur', 'near tilak library ward 3 shrirampur'),
(14, 'roshan singh', 'roshan123@gmail.com', '3e038f2e621a758c99a2cf350a72e049', '9087654322', 'shrirampur', 'sindhi colony ward 1 shrirampur'),
(15, 'nikhil deshmukh', 'nikhildeshmukh43@gmail.com', '003d6361b4c0d406b42bb0232f85bd86', '8686765690', 'shrirampur', 'morge hospital ward 7 shrirampur'),
(16, 'farhan shaikh', 'farhan52@gmail.com', 'fcbc0fc067b32f162c45e0c43cd77cd6', '7898657656', 'shrirampur', 'milat nagar sector 2 ward 1 shrirampur'),
(17, 'prashant satpute', 'prashant@gmail.com', '44fdf1884889aad6e6bc75c42a8e1c2e', '7898765453', 'shrirampur', 'gondhavani road shrirampur'),
(18, 'manish kadam', 'kadammanish@gmail.com', '64255ee6b4ba7cd6cc5188db7aa21d8b', '9090986245', 'shrirampur', 'near college road ward 1 shrirampur'),
(19, 'arun kangare', 'arun512@gmail.com', '92723ce47061a6c2a7a67f95db3edc6e', '7659876534', 'shrirampur', 'morge wasti ward 7 shrirampur');

-- --------------------------------------------------------

--
-- Table structure for table `users_items`
--

CREATE TABLE `users_items` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `status` enum('Added to cart','Confirmed') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_items`
--

INSERT INTO `users_items` (`id`, `user_id`, `item_id`, `status`) VALUES
(109, 12, 2, 'Confirmed'),
(110, 12, 8, 'Confirmed'),
(111, 13, 53, 'Added to cart'),
(112, 13, 50, 'Added to cart'),
(113, 13, 24, 'Added to cart'),
(114, 13, 3, 'Added to cart'),
(116, 14, 35, 'Confirmed'),
(118, 15, 41, 'Confirmed'),
(119, 15, 56, 'Added to cart'),
(120, 16, 10, 'Confirmed'),
(121, 17, 37, 'Confirmed'),
(122, 17, 36, 'Confirmed'),
(123, 19, 3, 'Added to cart');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_items`
--
ALTER TABLE `users_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`,`item_id`),
  ADD KEY `item_id` (`item_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users_items`
--
ALTER TABLE `users_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
