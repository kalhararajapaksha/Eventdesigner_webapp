-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2020 at 06:53 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `event_planer`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(100) NOT NULL,
  `is_published` int(1) NOT NULL,
  `is_deleted` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `is_published`, `is_deleted`) VALUES
(1, 'wedding', 1, 0),
(2, 'Birth Day ', 1, 0),
(3, 'DJ Party', 1, 0),
(4, 'Beach party', 1, 1),
(5, 'DJ3', 1, 1),
(6, 'dj3', 1, 0),
(7, 'dj4', 1, 1),
(8, 'dj5', 1, 1),
(9, 'dj6', 1, 0),
(10, 'dj7', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `cat_id` int(10) NOT NULL,
  `pkg_id` int(10) NOT NULL,
  `img_id` int(10) NOT NULL,
  `img_path` varchar(100) NOT NULL,
  `is_deleted` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`cat_id`, `pkg_id`, `img_id`, `img_path`, `is_deleted`) VALUES
(1, 1, 1, 'include/image/im4.jpg', 0),
(1, 1, 2, 'include/image/im3.jpg', 0),
(1, 1, 3, 'include/image/im2.jpg', 0),
(4, 1, 4, 'include/image/im5.jpg', 0),
(1, 1, 5, 'include/image/im5.jpg', 1),
(1, 1, 6, 'include/image/im5.jpg', 0),
(1, 2, 7, 'include/image/im4.jpg', 1),
(2, 1, 8, 'include/image/im3.jpg', 0),
(2, 1, 9, 'include/image/im4.jpg', 0),
(5, 1, 10, 'include/image/im4.jpg', 0),
(1, 2, 11, 'include/image/im3.jpg', 1),
(1, 2, 12, 'include/image/im4.jpg', 1),
(6, 1, 13, 'include/image/im2.jpg', 0),
(1, 2, 14, 'include/image/im1.jpeg', 1),
(1, 2, 15, 'include/image/im3.jpg', 1),
(1, 2, 16, 'include/image/im5.jpg', 1),
(1, 2, 17, 'include/image/im2.jpg', 1),
(1, 2, 18, 'include/image/im3.jpg', 1),
(1, 2, 19, 'include/image/im5.jpg', 1),
(1, 2, 20, 'include/image/im1.jpeg', 1),
(1, 2, 21, 'include/image/im2.jpg', 1),
(1, 2, 22, 'include/image/im5.jpg', 1),
(1, 2, 23, 'include/image/im3.jpg', 1),
(1, 2, 24, 'include/image/im5.jpg', 1),
(1, 2, 25, 'include/image/im1.jpeg', 1),
(1, 2, 26, 'include/image/im3.jpg', 1),
(1, 2, 27, 'include/image/im4.jpg', 1),
(2, 2, 28, 'include/image/im1.jpeg', 0),
(2, 2, 29, 'include/image/im3.jpg', 0),
(1, 1, 30, 'include/image/33.jpg', 0),
(1, 2, 31, 'include/image/im1.jpeg', 1),
(1, 2, 32, 'include/image/im1.jpeg', 1),
(1, 2, 33, 'include/image/im2.jpg', 1),
(1, 2, 34, 'include/image/im2.jpg', 1),
(1, 2, 35, 'include/image/im3.jpg', 1),
(1, 2, 36, 'include/image/im1.jpeg', 1),
(1, 2, 37, 'include/image/im1.jpeg', 1),
(1, 2, 38, 'include/image/im2.jpg', 1),
(1, 2, 39, 'include/image/im2.jpg', 1),
(1, 2, 40, 'include/image/im2.jpg', 1),
(1, 2, 41, 'include/image/im1.jpeg', 1),
(1, 2, 42, 'include/image/im1.jpeg', 1),
(1, 2, 43, 'include/image/im1.jpeg', 1),
(1, 2, 44, 'include/image/im1.jpeg', 1),
(1, 2, 45, 'include/image/im1.jpeg', 1),
(1, 2, 46, 'include/image/im2.jpg', 1),
(1, 2, 47, 'include/image/im1.jpeg', 1),
(1, 2, 48, 'include/image/im1.jpeg', 1),
(1, 2, 49, 'include/image/im2.jpg', 1),
(1, 2, 50, 'include/image/im2.jpg', 1),
(1, 2, 51, 'include/image/im2.jpg', 1),
(1, 2, 52, 'include/image/im2.jpg', 0),
(1, 2, 53, 'include/image/im1.jpeg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `pkg_id` int(10) NOT NULL,
  `pkg_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`pkg_id`, `pkg_name`) VALUES
(1, 'Platinum'),
(2, 'Gold'),
(3, 'Silver'),
(4, 'Bronze');

-- --------------------------------------------------------

--
-- Table structure for table `pnc_join`
--

CREATE TABLE `pnc_join` (
  `cat_id` int(10) NOT NULL,
  `pkg_id` int(10) NOT NULL,
  `pkg_cont` text NOT NULL,
  `pkg_inc` text NOT NULL,
  `pkg_price` int(100) NOT NULL,
  `is_deleted` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pnc_join`
--

INSERT INTO `pnc_join` (`cat_id`, `pkg_id`, `pkg_cont`, `pkg_inc`, `pkg_price`, `is_deleted`) VALUES
(1, 1, '<p><strong>Platinum</strong>&nbsp;is a silver-white metal &mdash; it was once known as &quot;white gold.&quot; It is extremely resistant to tarnishing and corrosion (which makes it known as a &quot;noble metal&quot;) and is very soft and malleable, making it easy to shape; ductile, making it easy to stretch into wire; and unreactive, which means it doesn&#39;t oxidize and&nbsp;</p>\r\n', '<ul>\r\n	<li>\r\n	<p>What is platinum use1</p>\r\n	</li>\r\n	<li>\r\n	<p>What is platinum use2</p>\r\n	</li>\r\n	<li>\r\n	<p>What is platinum use3</p>\r\n	</li>\r\n	<li>\r\n	<p>What is platinum use4</p>\r\n	</li>\r\n</ul>\r\n', 0, 1),
(1, 2, '<p><strong>Gold</strong>&nbsp;is a soft, yellow metal. Like all other metals,&nbsp;<strong>gold</strong>&nbsp;is also highly malleable and ductile. ... The atomic number of&nbsp;<strong>gold</strong>&nbsp;is 79, and its elemental abbreviation is Au, from the Latin &#39;aurum&#39; meaning &#39;shining dawn&#39;.&nbsp;<strong>Gold</strong>&nbsp;has an extremely high density at 19.3 g per cubic centimeter, slightly greater than lead.</p>\r\n', '<ul>\r\n	<li>1</li>\r\n	<li>2</li>\r\n	<li>3</li>\r\n</ul>\r\n', 0, 0),
(1, 3, '<p>Silver is a chemical element with the symbol Ag and atomic number 47. A soft, white, lustrous transition metal, it exhibits the highest electrical conductivity, thermal conductivity, and reflectivity of any metal.</p>\r\n', '<ul>\r\n	<li>1</li>\r\n	<li>2</li>\r\n	<li>3</li>\r\n	<li>4</li>\r\n	<li>5</li>\r\n</ul>\r\n', 0, 1),
(1, 4, '<p><strong>Bronze</strong>&nbsp;is an alloy consisting primarily of copper, commonly with about 12&ndash;12.5% tin and often with the addition of other metals (such as aluminium, manganese, nickel or zinc) and sometimes non-metals or metalloids such as arsenic, phosphorus or silicon</p>\r\n', '<ul>\r\n	<li>1</li>\r\n	<li>2</li>\r\n	<li>3</li>\r\n	<li>4</li>\r\n</ul>\r\n', 0, 1),
(1, 1, '<p><strong>Platinum</strong>&nbsp;is a silver-white metal &mdash; it was once known as &quot;white gold.&quot; It is extremely resistant to tarnishing and corrosion (which makes it known as a &quot;noble metal&quot;) and is very soft and malleable, making it easy to shape; ductile, making it easy to stretch into wire; and unreactive, which means it doesn&#39;t oxidize and&nbsp;</p>\r\n', '<ul>\r\n	<li>1</li>\r\n	<li>2</li>\r\n	<li>3</li>\r\n	<li>4</li>\r\n	<li>5</li>\r\n</ul>\r\n', 0, 1),
(2, 2, '<p><strong>gold&nbsp;</strong>s a silver-white metal &mdash; it was once known as &quot;white gold.&quot; It is extremely resistant to tarnishing and corrosion (which makes it known as a &quot;noble metal&quot;) and is very soft and malleable, making it easy to shape; ductile, making it easy to stretch into wire; and unreactive, which means it doesn&#39;t oxidize and&nbsp;</p>\r\n', '<ul>\r\n	<li>1</li>\r\n	<li>2</li>\r\n	<li>3</li>\r\n	<li>4</li>\r\n	<li>5</li>\r\n</ul>\r\n', 0, 0),
(5, 1, '<p>VVVVVVVVV</p>\r\n', '<ul>\r\n	<li>1</li>\r\n	<li>2</li>\r\n	<li>3</li>\r\n	<li>4</li>\r\n</ul>\r\n', 0, 0),
(6, 1, '<p>kk</p>\r\n', '<ul>\r\n	<li>1</li>\r\n	<li>2</li>\r\n	<li>3</li>\r\n	<li>&nbsp;</li>\r\n</ul>\r\n', 0, 0),
(1, 1, '<p>dasdc</p>\r\n', '<p>fsf</p>\r\n', 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`img_id`),
  ADD KEY `pkg_id` (`pkg_id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`pkg_id`);

--
-- Indexes for table `pnc_join`
--
ALTER TABLE `pnc_join`
  ADD KEY `cat_id` (`cat_id`),
  ADD KEY `pkg_id` (`pkg_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `img_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `pkg_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`pkg_id`) REFERENCES `package` (`pkg_id`),
  ADD CONSTRAINT `images_ibfk_2` FOREIGN KEY (`cat_id`) REFERENCES `category` (`cat_id`);

--
-- Constraints for table `pnc_join`
--
ALTER TABLE `pnc_join`
  ADD CONSTRAINT `pnc_join_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `category` (`cat_id`),
  ADD CONSTRAINT `pnc_join_ibfk_2` FOREIGN KEY (`pkg_id`) REFERENCES `package` (`pkg_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
