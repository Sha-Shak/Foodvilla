-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2017 at 07:41 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_cake`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `retaildb`.`admin` 
( `adminid` INT NULL AUTO_INCREMENT ,
 `username` VARCHAR(30) NOT NULL ,
  `password` VARCHAR(40) NOT NULL ,
   PRIMARY KEY (`adminid`)) ENGINE = InnoDB COMMENT = 'Admin list table';



--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminId`, `username`,`password`) VALUES
(1, 'Nusher Jamil Kazi', '12345'),
(2, 'Shahriar Sakhawat', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `retaildb`.`user` (
  `userId` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `createtime` DATE NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
--
-- Dumping data for table `user`
--



-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `retaildb`.`report` (
  `repId` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `comment` varchar(700) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
--
-- Dumping data for table `report`
--


-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `retaildb`.`product` (
  `productId` int(11) NOT NULL,
  `productname` varchar(40) NOT NULL,
  `productcategory` varchar(25) NOT NULL,
  `size` varchar(20) NOT NULL,
  `category` varchar(20) NOT NULL,
  `price` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
--
-- Dumping data for table `prodeuct`
--


-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `retaildb`.`cart` (
  `productId` int(11) NOT NULL,
  `productname` varchar(40) NOT NULL,
  `productcategory` varchar(25) NOT NULL,
  `size` varchar(20) NOT NULL,
  `category` varchar(20) NOT NULL,
  `price` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
--
-- Dumping data for table `cart`
--

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `retaildb`.`Order` (
  `userId` int(11) NOT NULL,
  `orderId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;







