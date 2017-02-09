-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2017 at 12:50 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_sub_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `articals`
--

CREATE TABLE `articals` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articals`
--

INSERT INTO `articals` (`id`, `title`, `email`, `content`) VALUES
(1, 'The Core', 'xyz@abc.com', 'This is the blog about core.'),
(2, 'The Laravel', 'xyz@abc.com', 'This is a blog about a laravel.'),
(3, 'laravel', 'monkey@xyz.com', 'laravel is mindblowing'),
(4, 'laravel 5.3', 'xyz@abc.com', 'this is hard'),
(10, 'laravel 5.4', 'xyz@abc.com', 'soo confusing, but super cool'),
(11, 'laravel 5.4', 'xyz@abc.com', 'is going to relese'),
(12, 'laracasts', 'xyz@abc.com', 'I am blown away'),
(13, 'slim 3.0', 'xyz@abc.com', 'not very easy to learn'),
(14, 'lumen', 'xyz@abc.com', 'i really dont get it'),
(15, 'laravel/lumen', 'xyz@abc.com', 'uses mu-stash.js');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articals`
--
ALTER TABLE `articals`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articals`
--
ALTER TABLE `articals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
