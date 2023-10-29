-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2023 at 07:21 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myjus`
--

-- --------------------------------------------------------

--
-- Table structure for table `contect`
--

CREATE TABLE `contect` (
  `id` int(50) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `sub` text NOT NULL,
  `sug` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contect`
--

INSERT INTO `contect` (`id`, `name`, `email`, `sub`, `sug`) VALUES
(2, 'jkkl', 'jkl@vnb.com', 'ghjkllkjg', 'tyuioplkjhhgtyuiooplk'),
(3, 'jkkl', 'jkl@vnb.com', 'ghjkllkjg', 'tyuioplkjhhgtyuiooplk'),
(4, 'jkkl', 'jkl@vnb.com', 'ghjkllkjg', 'tyuioplkjhhgtyuiooplk'),
(5, 'mjkl', 'mjkl@gnmj.com', 'asdfg', 'aqswedrftgyhujikolp;,mnbvxzz');

-- --------------------------------------------------------

--
-- Table structure for table `pdf`
--

CREATE TABLE `pdf` (
  `id` int(20) NOT NULL,
  `name` text NOT NULL,
  `url` text NOT NULL,
  `des` text NOT NULL,
  `course` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pdf`
--

INSERT INTO `pdf` (`id`, `name`, `url`, `des`, `course`) VALUES
(13, 'html1', 'book/HTML FILE.pdf', 'HTMLFILE', 'BCA'),
(14, 'php file', 'book/PHP FILE.pdf', 'php file', 'BSCIT'),
(15, 'java', 'book/JAVA FILE.pdf', 'JAVA FILE', 'MCA'),
(16, 'C##', 'book/C.pdf', 'C## FILE', 'MSCIT'),
(17, 'oracle', 'book/oracle File.pdf', 'oracle file', 'BCA'),
(18, 'seo', 'book/SEO File.pdf', 'seo file', 'BSCIT'),
(19, 'wordpress', 'book/Wordpress File.pdf', 'wordpress file', 'MCA'),
(20, 'python', 'book/Python File.pdf', 'python', 'MSCIT');

-- --------------------------------------------------------

--
-- Table structure for table `sug`
--

CREATE TABLE `sug` (
  `id` bigint(30) NOT NULL,
  `em` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sug`
--

INSERT INTO `sug` (`id`, `em`) VALUES
(1, 'sdcascas'),
(2, 'sdcascas'),
(3, 'sdcascas');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(50) NOT NULL,
  `name` text NOT NULL,
  `pass` text NOT NULL,
  `vpass` text NOT NULL,
  `redio` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `pass`, `vpass`, `redio`) VALUES
(1, 'mila', 'mila', 'mila', 'Admin'),
(2, 'milan', 'milan', 'milan', 'Teacher'),
(3, 'ak', 'ak', 'ak', 'Admin'),
(4, 'op', 'op', 'op', 'Teacher'),
(5, 'lk', 'lk', 'lk', 'Admin'),
(6, 'lk', 'lk', 'lk', 'Admin'),
(7, 'lo', 'lo', 'lo', 'Admin'),
(8, 'oio', 'oio', 'oio', 'Admin'),
(9, 'oio', 'oio', 'oio', 'Admin'),
(10, 'oio', 'oio', 'oio', 'Admin'),
(11, 'oio', 'oio', 'oio', 'Admin'),
(12, 'oio', 'oio', 'oio', 'Admin'),
(13, 'oio', 'oio', 'oio', 'Admin'),
(14, 'uio', 'uio', 'uio', 'Teacher'),
(15, 'op', 'op', 'op', 'Teacher'),
(16, 'op', 'op', 'op', 'Teacher'),
(17, 'ui', 'ui', 'ui', 'Teacher'),
(18, 'ui', 'ui', 'ui', 'Teacher'),
(19, 'ui', 'ui', 'ui', 'Teacher'),
(20, 'ui', 'ui', 'ui', 'Teacher'),
(21, 'ui', 'ui', 'ui', 'Teacher'),
(22, 'ty', 'ty', 'ty', 'Admin'),
(23, 'princi', 'princi', 'princi', 'Principal'),
(24, 'qwr', 'qwr', 'qwr', 'Manager'),
(25, 'yu', 'yu', 'yu', 'Teacher');

-- --------------------------------------------------------

--
-- Table structure for table `user1`
--

CREATE TABLE `user1` (
  `id` int(50) NOT NULL,
  `name` text NOT NULL,
  `pass` text NOT NULL,
  `vapss` text NOT NULL,
  `email` text NOT NULL,
  `mobie` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user1`
--

INSERT INTO `user1` (`id`, `name`, `pass`, `vapss`, `email`, `mobie`) VALUES
(13, 'io', 'io', 'io', 'io@gmail.com', '8855334422'),
(14, 'milan', 'milan', 'milan', 'mil@34gmail.com', '8866107332'),
(15, 'mkl', 'mkl', 'mkl', 'mjkl@gnmj.com', '9090909');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` int(20) NOT NULL,
  `name` text NOT NULL,
  `url` text NOT NULL,
  `des` text NOT NULL,
  `course` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `name`, `url`, `des`, `course`) VALUES
(14, 'ffdfdfe', 'video/tresh.mp4', 'dfsfsdfds', 'BCA'),
(16, 'mbnmkjhkhlkg', 'video/1.mp4', 'hnkbbbnmnm', 'BSCIT'),
(17, ' n nd n f   k kn jkgnjkgnkngkng', 'video/tresh.mp4', 'sxaXAXA', 'MSCIT'),
(18, 'lcdnknknknfk', 'video/tresh.mp4', 'fdwsfcsdc', 'BSCIT'),
(19, 'corse1', 'video/1.mp4', 'NWECOURSE', 'BCA'),
(20, 'corse1', 'video/1.mp4', 'NWECOURSE', 'BCA'),
(21, 'mjklkfanfdsna', 'video/1.mp4', 'klmakXNASNNXKLNS', 'BCA'),
(22, 'nwm,df,fnf,wd f, d,f m,dn,fn,nm,', 'video/tresh.mp4', 'dcxzcsxcxsc', 'MCA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contect`
--
ALTER TABLE `contect`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pdf`
--
ALTER TABLE `pdf`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sug`
--
ALTER TABLE `sug`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user1`
--
ALTER TABLE `user1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contect`
--
ALTER TABLE `contect`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pdf`
--
ALTER TABLE `pdf`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `sug`
--
ALTER TABLE `sug`
  MODIFY `id` bigint(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `user1`
--
ALTER TABLE `user1`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
