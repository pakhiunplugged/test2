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
-- Table structure for table `century_facilities`
--

CREATE TABLE IF NOT EXISTS `century_facilities` (
`id` int(11) NOT NULL,
  `category` varchar(50) NOT NULL,
  `facility` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `century_facilities`
--

INSERT INTO `century_facilities` (`id`, `category`, `facility`) VALUES
(1, 'Amphitheatre', ''),
(2, 'Multimedia Theatre', ''),
(3, 'Badminton Court', ''),
(4, 'Guest Rooms', ''),
(5, 'Multipurpose Halls', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `century_facilities`
--
ALTER TABLE `century_facilities`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `century_facilities`
--
ALTER TABLE `century_facilities`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
