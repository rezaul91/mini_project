-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2016 at 05:46 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `phonebook`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_info`
--

CREATE TABLE IF NOT EXISTS `tbl_info` (
`info_id` int(10) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `mobile` int(11) unsigned zerofill NOT NULL,
  `home_phone` int(11) unsigned zerofill NOT NULL,
  `work_phone` int(11) unsigned zerofill NOT NULL,
  `address` text NOT NULL,
  `city` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `zip_code` int(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_info`
--

INSERT INTO `tbl_info` (`info_id`, `fname`, `lname`, `gender`, `image_name`, `mobile`, `home_phone`, `work_phone`, `address`, `city`, `country`, `zip_code`) VALUES
(29, 'Md.Rezaul', 'Karim Mollah', 'Male', 'WP_20141221_022.jpg', 01670995535, 01678985691, 01678985691, 'Kollanpur,Dhaka', 'Dhaka', 'Bangladesh', 1216),
(30, 'Hossain', 'Mamun', 'Male', '12265873_962291967141811_4290152100534604337_o.jpg', 01716340278, 01716340278, 00000000000, 'House#25,road#2,Block#E,Banasree,Rampura', 'Dhaka', 'Bangladesh', 1216),
(32, 'jahangir', 'alam', 'Male', '10352991_699256566814347_1990471804693892274_n.jpg', 01751688994, 01751688994, 00000000000, 'Sonagazi\r\n3910 Feni', 'Feni', 'Bangladesh', 8500),
(33, 'Shovon Rahman', 'Suvo', 'Male', '12246994_1178873325460206_9191469578375762434_n.jpg', 01578955444, 01578955445, 00000000000, 'Mirpur, Dhaka, Bangladesh', 'Dhaka', 'Bangladesh', 1217),
(34, 'md.golam', 'rabbani', 'Male', '111.jpg', 01579551124, 01579551124, 00000000000, 'shukrabad', 'Dhaka', 'Bangladesh', 1515),
(35, 'habibur', 'rahman', 'Male', 'IMG_20140725_014443 - Copy.jpg', 01568586981, 01568586981, 00000000000, 'dhaka', 'dhaka', 'Bangladesh', 8566),
(36, 'modhuran', 'mazharul', 'Female', '10487333_1458706057718233_2256166332719135849_n.jpg', 01578945612, 01578956432, 00000000000, 'sonakanda,dhaka', 'rangpur', 'Bangladesh', 1216),
(37, 'abdur rahim', 'mia', 'Male', '008.JPG', 01546876451, 01546876451, 01546876451, 'dhaka, gazipur', 'Dhaka', 'Bangladesh', 8500),
(38, 'samsul', 'haque', 'Male', '018.JPG', 00167090900, 00167090900, 00167090900, 'barisal', 'barisal', 'Bangladesh', 8200),
(39, 'jahangir', 'Suvo', 'Male', '10854219_10205487979309088_3694582001817227362_o.jpg', 00167985645, 00175168899, 01546876451, 'khulna', 'khulna', 'Bangladesh', 8300),
(40, 'jahangir', 'Karim Mollah', 'Male', '1279001_10205667178588958_9221247699378789022_o.jpg', 00167090900, 01737028917, 01546876451, 'gazipur', 'Dhaka', 'Bangladesh', 1228),
(41, 'rezaul', 'rahim', 'male', 'kirtankhola-river.jpg', 01670995535, 01737013069, 01738302853, 'dhaka', 'dhaka', 'bangladesh', 1216),
(42, 'hiron', 'molla', 'Male', 'Photo0356.jpg', 01670995535, 01548965874, 01548965874, 'fff', 'dhaka', 'Bangladesh', 1216),
(43, 'Abdul', 'Latif', 'Male', 'Photo0553.jpg', 01659874568, 01659874568, 01659874568, 'Shatinagor', 'Dhaka', 'Bangladesh', 1215),
(44, 'mustfizur ', 'rahman', 'Male', 'Latif.jpg', 01659874568, 01659874568, 01659874568, 'comilla', 'chitagong', 'Bangladesh', 2250),
(45, 'hiron', 'molla', 'Male', '484018_423653234344557_3534567_n.jpg', 01670995535, 01548965874, 01659874568, 'dg', 'dhaka', 'Bangladesh', 1216),
(48, 'rezaul ', 'haq', 'Male', 'index.jpg', 01675252321, 00000000000, 00000000000, 'Khilgaon', 'honululu', 'Honduras', 3733);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE IF NOT EXISTS `tbl_login` (
`login_id` int(2) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`login_id`, `email_address`, `password`) VALUES
(1, 'eng.mkrezaul@gmail.com', '2468'),
(2, 'hossainmamun278@gmail.com', '01716340278');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_info`
--
ALTER TABLE `tbl_info`
 ADD PRIMARY KEY (`info_id`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
 ADD PRIMARY KEY (`login_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_info`
--
ALTER TABLE `tbl_info`
MODIFY `info_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
MODIFY `login_id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
