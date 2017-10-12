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
-- Table structure for table `century_bookings`
--

CREATE TABLE IF NOT EXISTS `century_bookings` (
`id` int(11) NOT NULL,
  `category` varchar(50) NOT NULL,
  `for_date` date NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `century_bookings`
--

INSERT INTO `century_bookings` (`id`, `category`, `for_date`, `name`, `phone`, `status`) VALUES
(1, 'Amphitheatre', '2016-10-15', 'Priyanka', 2147483647, 'confirmed'),
(2, 'Badminton Court', '2016-10-14', 'Priyanka', 2147483647, 'confirmed'),
(3, 'Multimedia Theatre', '2016-10-19', 'Jaysal', 1234567890, 'cancelled'),
(4, 'Amphitheatre', '2016-10-20', 'Gangadhar', 1234567890, 'confirmed'),
(5, 'Badminton Court', '2016-10-15', 'Priyanka', 2147483647, 'pending'),
(6, 'Amphitheatre', '2016-10-22', 'sudha', 2147483647, 'pending'),
(7, 'Guest Room', '2016-10-14', 'Gangadhar', 1234567890, 'pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `century_bookings`
--
ALTER TABLE `century_bookings`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `century_bookings`
--
ALTER TABLE `century_bookings`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
