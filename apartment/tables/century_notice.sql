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
-- Table structure for table `century_notice`
--

CREATE TABLE IF NOT EXISTS `century_notice` (
`id` int(11) NOT NULL,
  `notice` text NOT NULL,
  `date_added` datetime NOT NULL,
  `more` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `century_notice`
--

INSERT INTO `century_notice` (`id`, `notice`, `date_added`, `more`) VALUES
(1, 'Workshop on Fashion and Beauty by Bobby Brown', '2016-10-03 16:00:00', ''),
(2, 'Workshop on Fashion and Beauty by LAKME Fashion Academy', '2016-10-03 15:00:00', ''),
(3, 'Workshop on Fashion and Beauty by LAKME Fashion Academy', '2016-10-03 13:00:00', ''),
(4, 'Workshop on Fashion and Beauty by LAKME Fashion Academy', '2016-10-03 15:00:00', ''),
(5, 'Workshop on Fashion and Beauty by LAKME Fashion Academy', '2016-10-03 18:00:00', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `century_notice`
--
ALTER TABLE `century_notice`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `century_notice`
--
ALTER TABLE `century_notice`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
