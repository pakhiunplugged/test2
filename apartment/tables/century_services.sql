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
-- Table structure for table `century_services`
--

CREATE TABLE IF NOT EXISTS `century_services` (
`id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `company` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `century_services`
--

INSERT INTO `century_services` (`id`, `name`, `phone`, `company`, `category`) VALUES
(1, 'Shivam', '1234567890', 'XYZ', 'carpenter'),
(2, 'Priyanka', '1234567890', 'ABC', 'tutor'),
(3, 'Shivam', '1234567890', 'ABC', 'plumber'),
(4, 'Hashit Mehta', '1234567890', 'XYZ', 'carpenter'),
(5, 'Sudha', '1234567890', 'ABC', 'plumber'),
(6, 'Gangadhar', '1234567890', 'PQR', 'carpenter'),
(7, 'Priyanka', '1234567890', 'electrician', 'maid'),
(8, 'Varsha', '1234567890', 'PQR', 'taxi'),
(9, 'Pakhi', '1234567890', 'Sigma', 'taxi'),
(10, 'Varsha', '1234567890', 'PQR', 'tutor'),
(11, 'Gangadhar', '1234567890', 'Sigma', 'handyman'),
(12, 'Priaynka', '1234567890', 'PQR', 'doctor'),
(13, 'Pakhi', '1234567890', 'Sigma', 'doctor'),
(14, 'Varsha', '1234567890', 'PQR', 'Electrician');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `century_services`
--
ALTER TABLE `century_services`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `century_services`
--
ALTER TABLE `century_services`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
