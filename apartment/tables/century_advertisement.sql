-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2016 at 08:53 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `apartment`
--

-- --------------------------------------------------------

--
-- Table structure for table `century_advertisement`
--

CREATE TABLE IF NOT EXISTS `century_advertisement` (
`id` int(11) NOT NULL,
  `path` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `date_changed` date NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `century_advertisement`
--

INSERT INTO `century_advertisement` (`id`, `path`, `category`, `date_changed`) VALUES
(1, 'temp/Century_vertical.jpg', 'vertical', '2016-10-14'),
(2, 'temp/Century_horizontal.jpg', 'horizontal', '2016-10-14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `century_advertisement`
--
ALTER TABLE `century_advertisement`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `century_advertisement`
--
ALTER TABLE `century_advertisement`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
