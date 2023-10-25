-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2022 at 05:28 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aroma`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'bhavy123', 'bhavy@gmail.com', '123'),
(2, 'yog123', 'bhavy@gmail.com', '000');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email id` varchar(30) NOT NULL,
  `blogtitle` varchar(30) NOT NULL,
  `review` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `name`, `email id`, `blogtitle`, `review`) VALUES
(1, 'Maulik', 'maulik123@gmail.com', 'C language', 'Review about your C language tutorial easy to copy and run and explain very neat and clean'),
(2, 'Rohan', 'Rohan@gmail.com', 'C++ language', 'Review about your C++ language tutorial easy to copy and run and explain very neat and clean'),
(3, 'Aarav', 'aarav123@gmail.com', 'python language', 'Review about your python language tutorial it have all oops concept and best Explanation'),
(4, 'Abha', 'abha0987@gmail.com', 'Sql Tutorial', 'Review about your sql language tutorial most of the query and explanation is best.');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `message` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'Loy', 'Loy@email.com', 'Contact for the class', 'I am seeing your course content and material it should very interesting so do you have any classes for language or not.'),
(2, 'Loy', 'Loy@email.com', 'Contact for the class', 'I am seeing your course content and material it should very interesting so do you have any classes for language or not.'),
(3, 'Loy', 'Loy@email.com', 'Contact for the class', 'I am seeing your course content and material it should very interesting so do you have any classes for language or not.'),
(4, 'Loy', 'Loy@email.com', 'Contact for the class', 'I am seeing your course content and material it should very interesting so do you have any classes for language or not.');

-- --------------------------------------------------------

--
-- Table structure for table `favorite`
--

CREATE TABLE `favorite` (
  `id` int(11) NOT NULL,
  `product_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `favorite`
--

INSERT INTO `favorite` (`id`, `product_name`) VALUES
(57, 'watch'),
(58, 'Women Facewash'),
(59, 'Room flash light'),
(60, 'Room flash light'),
(67, 'watch'),
(68, 'watch'),
(74, 'Room flash light');

-- --------------------------------------------------------

--
-- Table structure for table `index_cart`
--

CREATE TABLE `index_cart` (
  `id` int(11) NOT NULL,
  `product_name` varchar(30) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `index_cart`
--

INSERT INTO `index_cart` (`id`, `product_name`, `quantity`, `price`) VALUES
(115, 'watch', 1, 150),
(118, 'RoomFlashLight', 1, 600),
(123, 'watch', 1, 150),
(125, 'watch', 1, 150),
(134, 'watch', 1, 150),
(135, 'watch', 1, 150),
(136, 'BeautyProducts', 1, 300),
(140, 'BeautyProducts', 1, 300),
(141, 'RoomFlashLight', 1, 500);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `email`) VALUES
(1, 'bhavy@gmail.com'),
(5, 'pbhavy802@gmail.com'),
(6, 'pbhavy802@gmail.com'),
(7, 'ewdewdwe@apple.com'),
(8, 'rocky112@gmail.com'),
(22, 'jenil@email.com');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `email`, `password`) VALUES
(1, 'Rohan', 'rohan@gmail.com', '789'),
(2, 'Rohit', 'rohit674@rku.ac.in', '1010'),
(3, 'Ram', 'ram34@gmail.com', '8988'),
(4, 'Yog', 'yog564@gmail.com', '0000');

-- --------------------------------------------------------

--
-- Table structure for table `replacement`
--

CREATE TABLE `replacement` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `product_id` varchar(30) NOT NULL,
  `product_name` varchar(30) NOT NULL,
  `photo` varchar(30) NOT NULL,
  `problem` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `replacement`
--

INSERT INTO `replacement` (`id`, `name`, `email`, `product_id`, `product_name`, `photo`, `problem`) VALUES
(25, 'Parmar bhavy bharatbhai', 'pbhavy112@gmail.com', 'ZX568978ER', 'Silk choclate', 'upload/flower-field-250016.jpg', 'Zxcvbnm,');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `review` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `name`, `email`, `subject`, `review`) VALUES
(1, 'bhavy', 'bhavy@gmail.com', 'Good', 'This product is very good.'),
(2, 'bhavy', 'pbhavy112@gmail.com', 'ertr', 'dqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq'),
(3, 'Rocky KGF', 'r@gmail.com', 'Rocky Bhai', 'Rocky season 2 release plzzzzzzzzzzzzzzzzzzzzzzzzzz'),
(4, 'Parmar bhavy bharatbhai', 'pbhavy112@gmail.com', 'sssss', 'sdcfvgbhnjmk,l'),
(5, 'bhavy', 'knowledgestudio125@gmail.com', 'Rocky Bhai', 'I am best in this review'),
(16, 'bhavy', 'unique@email.com', 'Susuuee', 'fevbgrfewfvb vfdvb');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `favorite`
--
ALTER TABLE `favorite`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `index_cart`
--
ALTER TABLE `index_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `replacement`
--
ALTER TABLE `replacement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `favorite`
--
ALTER TABLE `favorite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `index_cart`
--
ALTER TABLE `index_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `replacement`
--
ALTER TABLE `replacement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
