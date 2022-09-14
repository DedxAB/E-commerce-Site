-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2022 at 07:47 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_kart`
--

-- --------------------------------------------------------

--
-- Table structure for table `e_cart`
--

CREATE TABLE `e_cart` (
  `FIRSTNAME` varchar(25) NOT NULL,
  `LASTNAME` varchar(25) NOT NULL,
  `EMAIL` varchar(30) NOT NULL,
  `PASSWORD` varchar(15) NOT NULL,
  `GENDER` varchar(10) NOT NULL,
  `NUMBER` bigint(10) NOT NULL,
  `ADDRESS` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `e_cart`
--

INSERT INTO `e_cart` (`FIRSTNAME`, `LASTNAME`, `EMAIL`, `PASSWORD`, `GENDER`, `NUMBER`, `ADDRESS`) VALUES
('ar', 'b', 'bhoumikarnab342@gmail.com', '123456', 'Male', 851214625885, 'hchgysgfsbishvisvoiish'),
('Arnab', 'Bhoumik', 'bhoumikarnab@gmail.com', '123456', 'Male', 8597605546, 'Daharkundu, Arambagh,Hooghly pin-712617'),
('Suman', 'Manna', 'manna@gmail.com', '123456', 'Male', 8597605547, ''),
('Ankit', 'Chudirvai', 'pussydistroyer@gmail.com', '123456', 'not given', 8597602258, 'Bra-in-ware University');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `e_cart`
--
ALTER TABLE `e_cart`
  ADD PRIMARY KEY (`EMAIL`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
