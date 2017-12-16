-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2017 at 07:58 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `parlamento-studijos`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `name` varchar(300) NOT NULL,
  `author` varchar(50) NOT NULL,
  `id` int(10) NOT NULL,
  `publication` int(5) NOT NULL,
  `topic` varchar(25) NOT NULL,
  `pdf_url` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`name`, `author`, `id`, `publication`, `topic`, `pdf_url`) VALUES
('', 'dar nera', 782, 1, 'izanga', ''),
('', 'asd', 783, 2, 'izanga', ''),
('', 'a', 785, 4, 'izanga', ''),
('', 'a', 786, 5, 'izanga', ''),
('', 'a', 787, 6, 'izanga', ''),
('', 'a', 788, 7, 'izanga', ''),
('', 'a', 789, 8, 'izanga', ''),
('', 'a', 790, 9, 'izanga', ''),
('', 'a', 791, 10, 'izanga', ''),
('', 'a', 792, 11, 'izanga', ''),
('', 'a', 793, 12, 'izanga', ''),
('', 'a', 794, 13, 'izanga', ''),
('', 'a', 795, 14, 'izanga', ''),
('', 'a', 796, 15, 'izanga', ''),
('', 'a', 797, 16, 'izanga', ''),
('dsadasdsa', 'asdasd', 798, 17, 'izanga', '17_izanga.pdf'),
('dasdas', 'dasfsad', 799, 17, 'istorija', '17_istorija_1.pdf'),
('kalbetojas1', 'kalbininkas', 800, 17, 'kalba', '17_kalba_1.pdf'),
('kalbininkautojas2', 'kalbinetojas', 801, 17, 'kalba', '17_kalba_2.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `publications`
--

CREATE TABLE `publications` (
  `number` int(5) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `publications`
--

INSERT INTO `publications` (`number`, `image`) VALUES
(1, 'studijos01.jpg'),
(2, 'studijos02.jpg'),
(3, ''),
(4, 'studijos04.jpg'),
(5, 'studijos05.jpg'),
(6, 'studijos06.jpg'),
(7, 'studijos07.jpg'),
(8, 'studijos08.gif'),
(9, 'studijos09.jpg'),
(10, 'studijos10.jpg'),
(11, 'studijos11.jpg'),
(12, 'studijos12.jpg'),
(13, 'studijos13.jpg'),
(14, 'studijos14.jpg'),
(15, 'studijos15.jpg'),
(16, 'studijos16.jpg'),
(17, 'studijos17.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`name`) VALUES
('bibliografija'),
('informacinestechnologijos'),
('istorija'),
('izanga'),
('kalba'),
('kalendorius'),
('komentarai'),
('komunikacija'),
('politika'),
('recenzijos'),
('teise');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `topic` (`topic`),
  ADD KEY `publication` (`publication`);

--
-- Indexes for table `publications`
--
ALTER TABLE `publications`
  ADD PRIMARY KEY (`number`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=802;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_ibfk_2` FOREIGN KEY (`topic`) REFERENCES `topics` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `articles_ibfk_3` FOREIGN KEY (`publication`) REFERENCES `publications` (`number`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
