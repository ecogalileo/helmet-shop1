-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2023 at 01:39 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asdasd`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adm_id` int(11) NOT NULL,
  `username` varchar(222) NOT NULL,
  `password` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `code` varchar(222) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adm_id`, `username`, `password`, `email`, `code`, `date`) VALUES
(1, 'admin', '5f4dcc3b5aa765d61d8327deb882cf99', 'admin@gmail.com', '', '2023-06-06 16:18:11');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `rs_id` int(11) NOT NULL,
  `title` varchar(222) NOT NULL,
  `address` text NOT NULL,
  `image` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`rs_id`, `title`, `address`, `image`, `date`) VALUES
(1, 'Dual Sports', ' DUAL SPORT HELMETS ARE A MIX BETWEEN AN OFF-ROAD HELMET AND FULL FACE HELMET. ', '647f6334bc29e.jpg', '2023-06-06 16:47:48'),
(2, 'Modular', ' MODULAR HELMET WITH DUAL VISOR GIVES YOU THE FREEDOM TO FLIP UP WHENEVER YOU WANT TO. ', '647f6322b2388.jpg', '2023-06-06 16:47:30'),
(3, 'Open Face Helmet', ' OPEN FACE HELMET OFFERS GREAT VISIBILITY, COOL VENTILATION, AND MAXIMUM COMFORT ', '647f63158b992.jpg', '2023-06-06 16:47:17'),
(4, 'Full Face Helmet', '  DELIVERS DOUBLE LEVEL IMPACT PROTECTION WITH MAXIMUM FRESH-AIR INTAKE FOR MAXIMUM COOLING OERFORMANCE  ', '647f6309f0f76.jpg', '2023-06-06 16:47:05');

-- --------------------------------------------------------

--
-- Table structure for table `remark`
--

CREATE TABLE `remark` (
  `id` int(11) NOT NULL,
  `frm_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `remark` mediumtext NOT NULL,
  `remarkDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `remark`
--

INSERT INTO `remark` (`id`, `frm_id`, `status`, `remark`, `remarkDate`) VALUES
(16, 23, 'in process', 'asd', '2023-06-04 11:52:12'),
(17, 24, 'rejected', 'asdasd', '2023-06-04 13:24:41'),
(18, 25, 'closed', 'done', '2023-06-04 13:39:34'),
(19, 24, 'in process', 'sadasd', '2023-06-04 14:55:50'),
(20, 24, '', '', '2023-06-04 14:58:46'),
(21, 24, 'in process', 'asdasd', '2023-06-04 15:03:07'),
(22, 25, 'in process', '123123', '2023-06-04 15:29:20'),
(23, 25, 'closed', 'asdasd', '2023-06-04 15:29:40'),
(24, 26, 'closed', 'done', '2023-06-04 15:32:50'),
(25, 27, 'in process', 'On the way!', '2023-06-07 11:35:55');

-- --------------------------------------------------------

--
-- Table structure for table `res_category`
--

CREATE TABLE `res_category` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(222) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `res_category`
--

INSERT INTO `res_category` (`c_id`, `c_name`, `date`) VALUES
(1, '', '2023-06-06 16:38:20'),
(2, '', '2023-06-06 16:39:51'),
(3, '', '2023-06-06 16:40:04'),
(4, '', '2023-06-06 16:40:11');

-- --------------------------------------------------------

--
-- Table structure for table `style`
--

CREATE TABLE `style` (
  `d_id` int(11) NOT NULL,
  `rs_id` int(11) NOT NULL,
  `title` varchar(222) NOT NULL,
  `slogan` varchar(222) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `img` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `style`
--

INSERT INTO `style` (`d_id`, `rs_id`, `title`, `slogan`, `price`, `img`) VALUES
(20, 2, 'ASDASD', 'ASDASDASD', '123.00', '647f62bc8d9f6.jpg'),
(21, 4, 'GSX3000 V2 SABER', '• DOT Certified (American Standard) • ICC Certified • ABS Composite Shell • Dual Visor Technology • Dura-flex washable foam set • Aerodynamic vents • Iridium Lens with free Clear Lens', '3600.00', '6480624e16e00.jpg'),
(22, 4, 'GSX3000 V2 PRIZM', '• DOT Certified (American Standard) • ICC Certified • ABS Composite Shell • Dual Visor Technology • Dura-flex washable foam set • Aerodynamic vents • Smoke Lens with free Clear Lens', '3600.00', '6480629364953.jpg'),
(23, 3, 'RX-7 ALPHA', '• ECE Certified (European Standard) • ICC Certified • ABS composite shell • Dual Visor technology • Dura-flex washable foam set • Aerodynamic vents • with FREE clear lens', '3300.00', '648062cd00065.jpg'),
(24, 3, 'RX-7 CRUCIAL', '• ECE Certified (European Standard) • ICC Certified • ABS composite shell • Dual Visor technology • Dura-flex washable foam set • Aerodynamic vents • with FREE clear lens', '3300.00', '648062fa24cda.jpg'),
(25, 2, 'VXR-4000 STRIFE', '• ECE certified helmet (European Standard) • ICC certified • ABS composite shell • Dual Visor technology • Dura-flex washable foam set • Aerodynamic vents • Smoke lens with free clear lens', '4300.00', '6480633f38231.jpg'),
(26, 2, 'VXR-4000 STRIFE', '• ECE certified helmet (European Standard) • ICC certified • ABS composite shell • Dual Visor technology • Dura-flex washable foam set • Aerodynamic vents • Smoke lens with free clear lens', '4300.00', '648063e601fb7.jpg'),
(27, 1, 'Lorem Ipsum', '• ECE Certified (European Standard) • ICC Certified • ABS Composite Shell • Dura-Flex Washable Foam Set • Aerodynamic Vents • Pinlock Ready Visor System • Aggressive Spoiler • Iridium Lens with FREE Clear Lens', '3500.00', '64806bf30e70b.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(11) NOT NULL,
  `username` varchar(222) NOT NULL,
  `f_name` varchar(222) NOT NULL,
  `l_name` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `phone` varchar(222) NOT NULL,
  `password` varchar(222) NOT NULL,
  `address` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `username`, `f_name`, `l_name`, `email`, `phone`, `password`, `address`, `status`, `date`) VALUES
(9, 'ericogalileo', 'Erico', 'galileo', 'erick@test.com', '09123456789', 'f5bb0c8de146c67b44babbf4e6584cc0', 'baguio city', 1, '2023-06-04 11:45:43'),
(10, 'galileo', 'Dq9BPA0E1w', 'Sf4uDVyhbc', 'test@test.com', '09123456789', '4297f44b13955235245b2497399d7a93', 'JJnXohMLqj', 1, '2023-06-04 15:31:59'),
(11, 'testing123', 'eco', 'galileo', 'ecogalileo@test.com', '09123456789', '5f4dcc3b5aa765d61d8327deb882cf99', 'testing address', 1, '2023-06-07 11:12:36');

-- --------------------------------------------------------

--
-- Table structure for table `users_orders`
--

CREATE TABLE `users_orders` (
  `o_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `title` varchar(222) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `status` varchar(222) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users_orders`
--

INSERT INTO `users_orders` (`o_id`, `u_id`, `title`, `quantity`, `price`, `status`, `date`) VALUES
(24, 9, 'AR-01 MORPHEUS', 1, '3980.00', 'in process', '2023-06-04 15:03:07'),
(25, 9, 'AR-01 MORPHEUS', 1, '3980.00', 'closed', '2023-06-04 15:29:40'),
(26, 10, 'AR-01 MORPHEUS', 1, '3980.00', 'closed', '2023-06-04 15:32:50'),
(27, 11, 'GSX3000 V2 SABER', 1, '3600.00', 'in process', '2023-06-07 11:35:55'),
(28, 11, 'GSX3000 V2 PRIZM', 1, '3600.00', NULL, '2023-06-07 11:33:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adm_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`rs_id`);

--
-- Indexes for table `remark`
--
ALTER TABLE `remark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `style`
--
ALTER TABLE `style`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `users_orders`
--
ALTER TABLE `users_orders`
  ADD PRIMARY KEY (`o_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `rs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `remark`
--
ALTER TABLE `remark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `style`
--
ALTER TABLE `style`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users_orders`
--
ALTER TABLE `users_orders`
  MODIFY `o_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
