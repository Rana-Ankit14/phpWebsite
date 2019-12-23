-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2019 at 01:07 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodshala`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cid` int(5) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `preference` varchar(7) NOT NULL,
  `password` varchar(40) NOT NULL,
  `street` varchar(40) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `pincode` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cid`, `name`, `email`, `mobile`, `preference`, `password`, `street`, `city`, `state`, `pincode`) VALUES
(1, 'a', 'a@gmail.com', '123', 'veg', '123456789', 'backend', 'manipal', 'karnataka', 576104),
(4, 'a', 'abc@gmail.com', '123', 'veg', '123456789', 'backend', 'manipal', 'karnataka', 576104),
(5, 'abcd', 'abcd@gmail.com', '+919297781270', 'veg', '123', 'Behind Dwarika Hospital, Mahilong, Purul', 'Ranchi', 'Jharkhand', 835103),
(6, 'abc', 'abcdxf@gmail.com', '+919297781270', 'veg', '123', 'Behind Dwarika Hospital, Mahilong, Purul', 'Ranchi', 'Jharkhand', 835103),
(7, 'abc', 'abdfssc@gmail.com', '+919297781270', 'nonVeg', '123', 'Behind Dwarika Hospital, Mahilong, Purul', 'Ranchi', 'Jharkhand', 835103),
(8, 'ankit', 'ankit@gmail.com', '+919876543210', 'nonVeg', '123', 'a', 'a', 'a', 567894);

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `foodID` int(5) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` int(5) NOT NULL,
  `type` varchar(7) NOT NULL,
  `rid` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`foodID`, `name`, `price`, `type`, `rid`) VALUES
(1, 'abc', 45, 'veg', 2),
(2, 'chicken', 150, 'nonVeg', 2),
(3, 'biryani', 150, 'nonVeg', 1),
(4, 'Salad', 99, 'veg', 3),
(5, 'Kat', 321, 'veg', 3),
(6, 'ad', 85, 'nonVeg', 3),
(7, 'h', 32, 'nonVeg', 3),
(8, 'parota', 50, 'veg', 3),
(9, 'roti', 15, 'veg', 3),
(10, 'choco Milkshake', 50, 'veg', 2),
(11, 'Chicken Biryani', 120, 'nonVeg', 4);

-- --------------------------------------------------------

--
-- Table structure for table `ordertable`
--

CREATE TABLE `ordertable` (
  `orderID` int(5) NOT NULL,
  `foodID` int(5) NOT NULL,
  `cid` int(5) NOT NULL,
  `rid` int(5) NOT NULL,
  `totalPrice` int(6) NOT NULL,
  `price` int(5) NOT NULL,
  `quantity` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ordertable`
--

INSERT INTO `ordertable` (`orderID`, `foodID`, `cid`, `rid`, `totalPrice`, `price`, `quantity`) VALUES
(1, 1, 4, 2, 135, 45, 3),
(2, 1, 4, 2, 225, 45, 5),
(3, 9, 4, 3, 150, 15, 10),
(4, 4, 4, 3, 297, 99, 3),
(5, 8, 4, 3, 300, 50, 6),
(6, 2, 8, 2, 900, 150, 6);

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `rid` int(5) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `password` varchar(40) NOT NULL,
  `street` varchar(40) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `pincode` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`rid`, `name`, `email`, `mobile`, `password`, `street`, `city`, `state`, `pincode`) VALUES
(1, 'a', 'a@gmail.com', '123', '123456789', 'a', 'b', 'c', 4),
(2, 'abc', 'abc@gmail.com', '+919297781270', '123', 'Behind Dwarika Hospital, Mahilong, Purul', 'Ranchi', 'Jharkhand', 835103),
(3, 'New', 'xyz@gmail.com', '+911234567890', '123', 'a', 'a', 'a', 567894),
(4, 'Hotal Shubam', 'h@gmail.com', '+916543217890', '987', 'eshwarnagar', 'manipal ', 'karnataka', 576104);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cid`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`foodID`),
  ADD KEY `restaurant fk` (`rid`);

--
-- Indexes for table `ordertable`
--
ALTER TABLE `ordertable`
  ADD PRIMARY KEY (`orderID`),
  ADD KEY `customer fk` (`cid`),
  ADD KEY `food fk` (`foodID`),
  ADD KEY `restaurant_order fk` (`rid`);

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`rid`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `foodID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `ordertable`
--
ALTER TABLE `ordertable`
  MODIFY `orderID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `rid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `food`
--
ALTER TABLE `food`
  ADD CONSTRAINT `restaurant fk` FOREIGN KEY (`rid`) REFERENCES `restaurant` (`rid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ordertable`
--
ALTER TABLE `ordertable`
  ADD CONSTRAINT `customer fk` FOREIGN KEY (`cid`) REFERENCES `customer` (`cid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `food fk` FOREIGN KEY (`foodID`) REFERENCES `food` (`foodID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `restaurant_order fk` FOREIGN KEY (`rid`) REFERENCES `restaurant` (`rid`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
