-- phpMyAdmin SQL Dump
-- version 3.5.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 30, 2014 at 08:38 PM
-- Server version: 5.5.29
-- PHP Version: 5.4.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `pets`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` char(16) NOT NULL,
  `password` char(40) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', '315f166c5aca63a157f7d41007675cb44a948b33');

-- --------------------------------------------------------

--
-- Table structure for table `bill_info`
--

CREATE TABLE `bill_info` (
  `customerid` int(10) unsigned NOT NULL,
  `orderid` int(10) unsigned NOT NULL,
  `shipping_amount` int(11) NOT NULL,
  `total_amount` int(11) NOT NULL,
  PRIMARY KEY (`customerid`,`orderid`),
  KEY `orderid` (`orderid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill_info`
--

INSERT INTO `bill_info` (`customerid`, `orderid`, `shipping_amount`, `total_amount`) VALUES
(1, 1, 5, 300),
(2, 2, 0, 500),
(3, 1, 20, 80),
(3, 2, 10, 100),
(5, 1, 5, 150);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `catid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `catname` char(60) NOT NULL,
  PRIMARY KEY (`catid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`catid`, `catname`) VALUES
(1, 'Sweaters'),
(2, 'Harnesses'),
(3, 'Jackets'),
(4, 'Accessories'),
(5, 'Hello');

-- --------------------------------------------------------

--
-- Table structure for table `credit_card_info`
--

CREATE TABLE `credit_card_info` (
  `customerid` int(10) unsigned NOT NULL,
  `credit_card_number` varchar(16) NOT NULL,
  `card_type` varchar(30) NOT NULL,
  `security_code` int(3) NOT NULL,
  `billing_address` varchar(500) NOT NULL,
  `exp_date` date NOT NULL,
  PRIMARY KEY (`credit_card_number`,`customerid`),
  KEY `customerid` (`customerid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `credit_card_info`
--

INSERT INTO `credit_card_info` (`customerid`, `credit_card_number`, `card_type`, `security_code`, `billing_address`, `exp_date`) VALUES
(1, '1234567898765432', 'Visa', 100, 'Jersey City, NJ', '2016-06-05'),
(2, '1237898765432456', 'Master', 191, 'Manhattan, NY', '2016-01-01'),
(3, '8765412378932456', 'Discover', 13, 'Manhattan, NY', '2016-01-01'),
(4, '8765724893123456', 'VISA', 199, 'IN', '2019-06-01'),
(4, '8765789324123456', 'AMEX', 911, 'IN', '2015-01-01'),
(5, '8931234567657248', 'BitCoin', 311, 'Queens, NY', '2014-06-01');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customerid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(60) NOT NULL,
  `address` char(80) NOT NULL,
  `city` char(30) NOT NULL,
  `state` char(20) DEFAULT NULL,
  `zip` char(10) DEFAULT NULL,
  `country` char(20) NOT NULL,
  PRIMARY KEY (`customerid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=61 ;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customerid`, `name`, `address`, `city`, `state`, `zip`, `country`) VALUES
(1, 'Bryn', 'fulton street', 'NEW YORK', 'NY', '10038', 'USA'),
(2, 'Monika', 'Chambers Street', 'NEW YORK', 'NY', '10001', 'USA'),
(3, 'Nikita Ravindranath', 'Van Reypen Street', 'Jersey City', 'NJ', '07306', 'USA'),
(4, 'Bryan', '80 Summit Ave', 'Indiana', 'IN', '20335', 'USA'),
(5, 'John', '56 William Street', 'NEW YORK', 'NY', '10035', 'USA'),
(17, 'Bryn Haffey', '6', 'o', 'o', 'o', 'o'),
(18, '1', '1', '1', '1', '1', '1'),
(19, '1', '1', '11', '1', '1', '1'),
(20, '9812', '91823', '923', '912', '123', '12'),
(21, '12', '12PO', '2O3', '023', 'LKSD', '23'),
(22, '12', '234', '1', '1', '12', '1'),
(23, '09ew', '0w9e', '0-9ew', '023', '20-3', '203'),
(24, '12', '1', '12', '34', '34', '34'),
(25, '12', '4', '5', '4', '5', '4'),
(26, '123', '12', '1', '3', '1', '1'),
(27, '34', '23', '12', '3', '2', '3'),
(28, '23', '2', '1', '2', '3', '4'),
(29, 'a', 'b', 'c', 'd', 'e', 'g'),
(30, '1', '2', '3', '4', '5', '12'),
(31, '3', '34', '34', '4', '4', '4'),
(32, '1', '2', '3', '4', '5', '6'),
(33, 'lksf', 'l;ksf', 'l;sf', 'lk;s', ';lskq', 's;lk'),
(34, '12', 'ew', 'sdf', 'DG', 'SDF', 'F'),
(35, '98012', 'sfd', '90', 'kjk', 'jkl', 'hkj'),
(36, '1', '121', '12', '1212', '12', '12'),
(37, '1', '12', '13', '23', '13', '12'),
(38, 'a', 'sfd', 'ss', 'ss', 's', 'fgg'),
(39, '1', '2', '1', '3', '1', '3'),
(40, '13', '2', '3', '4', '5', '6'),
(41, '23', '23', '13', '123', '132', '23'),
(42, 'm,n', 'gf', 'hg', 'jgh', 'gf', 'gfd'),
(43, 'kdsj', 'skfj', 'sklf', 'kasld', 'kld', 'akld'),
(44, 'wqe', 'wqe', 'qew', 'we', 'qwe', 'eqw'),
(45, '34`', 'se', 'et', 'r', 'dr', 'dg'),
(46, 'adl', 'sl;dkf', 'sl;dfk', 'ds;lg', 'sl;f', 'sl;f'),
(47, 'GPAAssignment', 'sd', 'as', 'j', 'lkj', 'klj'),
(48, 'hello', 'how', 'are', 'you', 'today', 'dumbbell'),
(49, 'l;adk', 'sl;k', 'sl;e', 'sl;', 'sl;', 'l;s'),
(50, 'asd', 'l;k', 'lk', 'klk', 'l;k', 'l;k'),
(51, 'akldj', 'kalsd', 'kl', 'kl', 'kl', 'kl'),
(52, 'klsdf', 'kljs', 'klj', 'klj', 'klj', 'klj'),
(53, 'kjh', 'jk', 'jk', 'jk', 'kj', 'jk'),
(54, 'michelle', 'obama', '121', 'odl', 'l;d', 'k'),
(55, 'micheell', 'klflds', 'l;akdf', 'l;k', 'l;k', 'l;k'),
(56, 'hello', 'how are y', ';klfl;ds', 'lk;;l', 'k;l', 'k;l'),
(57, 'sad', 'sad', 'sad', 'sd', 'sd', 'sad'),
(58, 'hi', 'how', 'are', ' you', 'my', 'friend'),
(59, 'hi', 'hoq', ';laksd', 'l;k;', ';kl;', 'k;'),
(60, 'hi', 'hisa', 'lk;l', ';lk', 'l;k', 'l;k');

-- --------------------------------------------------------

--
-- Table structure for table `customer_info_old`
--

CREATE TABLE `customer_info_old` (
  `customer_id` int(10) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `state` char(2) NOT NULL,
  `zip` varchar(5) NOT NULL DEFAULT '00000',
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `customer_info_old`
--

INSERT INTO `customer_info_old` (`customer_id`, `first_name`, `last_name`, `phone`, `state`, `zip`) VALUES
(1, 'Nikita', 'Ravindranath', '7327890744', 'NJ', '07306'),
(2, 'Monica', 'LaPlante', '6467483647', 'NY', '10038'),
(3, 'Bryn', 'Haffey', '2147483647', 'NY', '10028'),
(4, 'Joe', 'Smith', '1236785432', 'IN', '04532'),
(5, 'Elliott', 'Back', '6462038443', 'NY', '10001');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `username` char(16) NOT NULL,
  `password` char(40) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`username`, `password`) VALUES
('Bryn', '1a7a6dfc5bc9cfed8f6743d4013d8c0ec72f37da');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `items_id` int(10) NOT NULL AUTO_INCREMENT,
  `quantity` int(5) NOT NULL,
  `catid` int(10) unsigned NOT NULL,
  `description` varchar(200) NOT NULL,
  `size` char(1) NOT NULL,
  `image_loc` varchar(50) NOT NULL,
  `name` char(100) NOT NULL,
  `price` float(4,2) NOT NULL,
  PRIMARY KEY (`items_id`),
  KEY `Category` (`catid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`items_id`, `quantity`, `catid`, `description`, `size`, `image_loc`, `name`, `price`) VALUES
(1, 300, 1, 'A fetching blue sweater made out of 100% pure wool.', 'S', 'bluesweater.jpg', 'Blue Knit Sweater', 50.00),
(2, 300, 2, 'A full harness for the safety of your kitty during a walk.', 'M', 'fullharness.jpg', 'Full Harness', 20.00),
(3, 43, 1, 'A green holiday sweater made out of 100% pure wool, featuring a festive reindeer.', 'S', 'greensweater.jpg', 'Green Holiday Sweater', 50.00),
(4, 30, 3, 'A protective life jacket to keep your cat safe on his or her next jetski or sailing expedition.\r\n', 'L', 'lifejacket.jpg', 'Life Jacket', 30.00),
(5, 30, 4, 'A ridiculously adorable penguin halloween costume for your cat.', 'S', 'penguin.jpg', 'Penguin Costume', 40.00),
(6, 3, 4, 'A cashmere scarf for the sophisticated cat.  Perfect for chilly fall days.', 'S', 'scarf.jpg', 'Red Scarf', 99.99),
(7, 20, 2, 'A thin harness for safely walking your kitty around the neighborhood.', 'M', 'thinharness.jpg', 'Thin Harness', 20.00),
(8, 45, 4, 'A tie for your stylish cat''s next soiree - be it a wedding, quinceanera, or bar/bat mitzvah.', 'S', 'tie.jpg', 'Neck Tie', 15.00);

-- --------------------------------------------------------

--
-- Table structure for table `login_info`
--

CREATE TABLE `login_info` (
  `username` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL,
  `usertype` char(1) NOT NULL,
  PRIMARY KEY (`username`,`password`,`usertype`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_info`
--

INSERT INTO `login_info` (`username`, `password`, `usertype`) VALUES
('admin', 'admin', 'A'),
('bryn.haffey', 'temp', 'C'),
('monica.laplante', 'temp', 'C'),
('nikita.ravindranath', 'temp', 'C'),
('worker', 'temp', 'W');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `customerid` int(10) unsigned NOT NULL,
  `amount` float(6,2) DEFAULT NULL,
  `date` date NOT NULL,
  `order_status` char(10) DEFAULT NULL,
  `ship_name` char(60) NOT NULL,
  `ship_address` char(80) NOT NULL,
  `ship_city` char(30) NOT NULL,
  `ship_state` char(20) DEFAULT NULL,
  `ship_zip` char(10) DEFAULT NULL,
  `ship_country` char(20) NOT NULL,
  PRIMARY KEY (`orderid`),
  UNIQUE KEY `customerid` (`customerid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=76 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderid`, `customerid`, `amount`, `date`, `order_status`, `ship_name`, `ship_address`, `ship_city`, `ship_state`, `ship_zip`, `ship_country`) VALUES
(1, 1, 359.00, '2014-04-14', 'Processing', 'Fedex', '88 Van Reypen Street', 'Jersey City', 'NJ', '07306', 'USA'),
(2, 2, 999.00, '2014-04-13', 'Completed', 'UPS', 'Chambers Street', 'New York', 'NY', '10038', 'USA'),
(14, 17, 290.00, '2014-04-18', 'PARTIAL', '0', 'o', 'o', 'o', 'o', 'o'),
(15, 18, 40.00, '2014-04-23', 'PARTIAL', '1', '1', '1', '1', '1', '1'),
(16, 19, 100.00, '2014-04-24', 'PARTIAL', '1', '1', '11', '1', '1', '1'),
(19, 20, 100.00, '2014-04-24', 'PARTIAL', '9812', '91823', '923', '912', '123', '12'),
(20, 21, 50.00, '2014-04-24', 'PARTIAL', '12', '12PO', '2O3', '023', 'LKSD', '23'),
(22, 22, 50.00, '2014-04-24', 'PARTIAL', '12', '234', '1', '1', '12', '1'),
(24, 23, 50.00, '2014-04-24', 'PARTIAL', '09ew', '0w9e', '0-9ew', '023', '20-3', '203'),
(25, 24, 50.00, '2014-04-24', 'PARTIAL', '12', '1', '12', '34', '34', '34'),
(26, 25, 50.00, '2014-04-24', 'PARTIAL', '12', '4', '5', '4', '5', '4'),
(27, 26, 50.00, '2014-04-24', 'PARTIAL', '123', '12', '1', '3', '1', '1'),
(29, 27, 92.00, '2014-04-24', 'PARTIAL', '34', '23', '12', '3', '2', '3'),
(30, 28, 92.00, '2014-04-24', 'PARTIAL', '23', '2', '1', '2', '3', '4'),
(31, 29, 92.00, '2014-04-24', 'PARTIAL', 'a', 'b', 'c', 'd', 'e', 'g'),
(32, 30, 92.00, '2014-04-24', 'PARTIAL', '1', '2', '3', '4', '5', '12'),
(33, 31, 30.00, '2014-04-24', 'PARTIAL', '3', '34', '34', '4', '4', '4'),
(34, 32, 30.00, '2014-04-24', 'PARTIAL', '1', '2', '3', '4', '5', '6'),
(35, 33, 92.00, '2014-04-24', 'PARTIAL', 'lksf', 'l;ksf', 'l;sf', 'lk;s', ';lskq', 's;lk'),
(36, 34, 30.00, '2014-04-24', 'PARTIAL', '12', 'ew', 'sdf', 'DG', 'SDF', 'F'),
(38, 35, 50.00, '2014-04-24', 'PARTIAL', '98012', 'sfd', '90', 'kjk', 'jkl', 'hkj'),
(39, 36, 50.00, '2014-04-24', 'PARTIAL', '1', '121', '12', '1212', '12', '12'),
(40, 37, 92.00, '2014-04-24', 'PARTIAL', '1', '12', '13', '23', '13', '12'),
(41, 38, 50.00, '2014-04-24', 'PARTIAL', 'a', 'sfd', 'ss', 'ss', 's', 'fgg'),
(43, 39, 50.00, '2014-04-24', 'PARTIAL', '1', '2', '1', '3', '1', '3'),
(44, 40, 92.00, '2014-04-24', 'PARTIAL', '13', '2', '3', '4', '5', '6'),
(46, 41, 50.00, '2014-04-24', 'PARTIAL', '23', '23', '13', '123', '132', '23'),
(47, 42, 50.00, '2014-04-24', 'PARTIAL', 'm,n', 'gf', 'hg', 'jgh', 'gf', 'gfd'),
(48, 43, 92.00, '2014-04-24', 'PARTIAL', 'kdsj', 'skfj', 'sklf', 'kasld', 'kld', 'akld'),
(49, 44, 104.95, '2014-04-24', 'PARTIAL', 'wqe', 'wqe', 'qew', 'we', 'qwe', 'eqw'),
(50, 45, 62.95, '2014-04-24', 'PARTIAL', '34`', 'se', 'et', 'r', 'dr', 'dg'),
(52, 46, 118.90, '2014-04-24', 'PARTIAL', 'adl', 'sl;dkf', 'sl;dfk', 'ds;lg', 'sl;f', 'sl;f'),
(53, 47, 132.85, '2014-04-24', 'PARTIAL', 'GPAAssignment', 'sd', 'as', 'j', 'lkj', 'klj'),
(54, 48, 370.00, '2014-04-24', 'PARTIAL', 'hello', 'how', 'are', 'you', 'today', 'dumbbell'),
(55, 49, 383.95, '2014-04-24', 'PARTIAL', 'l;adk', 'sl;k', 'sl;e', 'sl;', 'sl;', 'l;s'),
(56, 50, 100.00, '2014-04-24', 'PARTIAL', 'asd', 'l;k', 'lk', 'klk', 'l;k', 'l;k'),
(58, 51, 104.95, '2014-04-24', 'PARTIAL', 'akldj', 'kalsd', 'kl', 'kl', 'kl', 'kl'),
(60, 52, 109.90, '2014-04-24', 'PARTIAL', 'klsdf', 'kljs', 'klj', 'klj', 'klj', 'klj'),
(61, 53, 114.85, '2014-04-24', 'PARTIAL', 'kjh', 'jk', 'jk', 'jk', 'kj', 'jk'),
(62, 54, 115.00, '2014-04-26', 'PARTIAL', 'michelle', 'obama', '121', 'odl', 'l;d', 'k'),
(63, 55, 115.00, '2014-04-26', 'PARTIAL', 'micheell', 'klflds', 'l;akdf', 'l;k', 'l;k', 'l;k'),
(65, 56, 115.00, '2014-04-26', 'PARTIAL', 'hello', 'how are y', ';klfl;ds', 'lk;;l', 'k;l', 'k;l'),
(67, 57, 115.00, '2014-04-26', 'PARTIAL', 'sad', 'sad', 'sad', 'sd', 'sd', 'sad'),
(73, 58, 160.00, '2014-04-27', 'PARTIAL', 'hi', 'how', 'are', ' you', 'my', 'friend'),
(74, 59, 70.00, '2014-04-28', 'PARTIAL', 'hi', 'hoq', ';laksd', 'l;k;', ';kl;', 'k;'),
(75, 60, 270.00, '2014-04-28', 'PARTIAL', 'hi', 'hisa', 'lk;l', ';lk', 'l;k', 'l;k');

-- --------------------------------------------------------

--
-- Table structure for table `orders_old`
--

CREATE TABLE `orders_old` (
  `order_id` int(10) NOT NULL AUTO_INCREMENT,
  `customer_id` int(10) NOT NULL,
  `date_of_order` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `shipping_address` varchar(500) NOT NULL,
  PRIMARY KEY (`order_id`),
  KEY `customer_id` (`customer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `orders_old`
--

INSERT INTO `orders_old` (`order_id`, `customer_id`, `date_of_order`, `shipping_address`) VALUES
(1, 1, '2014-04-05 05:05:31', ''),
(2, 2, '2014-04-05 05:05:41', ''),
(3, 3, '2014-04-05 05:05:48', ''),
(4, 5, '2014-04-05 05:05:55', ''),
(5, 3, '2014-04-05 05:06:04', ''),
(6, 3, '2014-04-05 05:06:23', '');

-- --------------------------------------------------------

--
-- Table structure for table `order_description`
--

CREATE TABLE `order_description` (
  `orderid` int(10) unsigned NOT NULL,
  `item_id` int(10) NOT NULL,
  `item_price` float(4,2) NOT NULL,
  `quantity` int(5) NOT NULL,
  PRIMARY KEY (`orderid`,`item_id`,`quantity`),
  KEY `item_id` (`item_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_description`
--

INSERT INTO `order_description` (`orderid`, `item_id`, `item_price`, `quantity`) VALUES
(1, 1, 30.00, 20),
(1, 5, 10.00, 10),
(2, 3, 50.00, 90),
(2, 6, 40.00, 100),
(14, 1, 50.00, 5),
(14, 5, 40.00, 1),
(15, 6, 20.00, 2),
(16, 3, 50.00, 2),
(19, 1, 50.00, 1),
(19, 3, 50.00, 1),
(20, 3, 50.00, 1),
(22, 3, 50.00, 1),
(24, 3, 50.00, 1),
(25, 3, 50.00, 1),
(26, 3, 50.00, 1),
(27, 3, 50.00, 1),
(29, 3, 50.00, 1),
(30, 3, 50.00, 1),
(31, 3, 50.00, 1),
(32, 3, 50.00, 1),
(33, 4, 30.00, 1),
(34, 4, 30.00, 1),
(35, 3, 50.00, 1),
(36, 4, 30.00, 1),
(38, 2, 20.00, 1),
(38, 4, 30.00, 1),
(39, 2, 20.00, 1),
(39, 4, 30.00, 1),
(40, 3, 50.00, 1),
(41, 2, 20.00, 1),
(41, 4, 30.00, 1),
(43, 2, 20.00, 1),
(43, 4, 30.00, 1),
(44, 3, 50.00, 1),
(46, 2, 20.00, 1),
(46, 4, 30.00, 1),
(47, 2, 20.00, 1),
(47, 4, 30.00, 1),
(48, 3, 50.00, 1),
(49, 3, 50.00, 1),
(50, 2, 20.00, 1),
(50, 4, 30.00, 1),
(52, 3, 50.00, 1),
(53, 3, 50.00, 1),
(54, 2, 20.00, 17),
(54, 4, 30.00, 1),
(55, 2, 20.00, 17),
(55, 4, 30.00, 1),
(56, 3, 50.00, 2),
(58, 3, 50.00, 2),
(60, 3, 50.00, 2),
(61, 3, 50.00, 2),
(62, 3, 50.00, 2),
(62, 8, 15.00, 1),
(63, 3, 50.00, 2),
(63, 8, 15.00, 1),
(65, 3, 50.00, 2),
(65, 8, 15.00, 1),
(67, 3, 50.00, 2),
(67, 8, 15.00, 1),
(73, 3, 50.00, 2),
(73, 8, 15.00, 4),
(74, 2, 20.00, 2),
(74, 4, 30.00, 1),
(75, 2, 20.00, 2),
(75, 3, 50.00, 4),
(75, 4, 30.00, 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `orderid` int(10) unsigned NOT NULL,
  `item_id` char(13) NOT NULL,
  `quantity` tinyint(3) unsigned DEFAULT NULL,
  `size` varchar(10) NOT NULL,
  PRIMARY KEY (`orderid`,`item_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`orderid`, `item_id`, `quantity`, `size`) VALUES
(0, '', NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` char(16) NOT NULL,
  `password` char(40) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`) VALUES
('nikita', '5b7dcd14a4faa2cdd54cf6eb8d4bc35da31914a1');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bill_info`
--
ALTER TABLE `bill_info`
  ADD CONSTRAINT `bill_info_ibfk_1` FOREIGN KEY (`customerid`) REFERENCES `customers` (`customerid`),
  ADD CONSTRAINT `bill_info_ibfk_2` FOREIGN KEY (`orderid`) REFERENCES `orders` (`orderid`);

--
-- Constraints for table `credit_card_info`
--
ALTER TABLE `credit_card_info`
  ADD CONSTRAINT `credit_card_info_ibfk_1` FOREIGN KEY (`customerid`) REFERENCES `customers` (`customerid`);

--
-- Constraints for table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `items_ibfk_1` FOREIGN KEY (`catid`) REFERENCES `categories` (`catid`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`customerid`) REFERENCES `customers` (`customerid`);

--
-- Constraints for table `orders_old`
--
ALTER TABLE `orders_old`
  ADD CONSTRAINT `orders_old_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer_info_old` (`customer_id`);

--
-- Constraints for table `order_description`
--
ALTER TABLE `order_description`
  ADD CONSTRAINT `order_description_ibfk_1` FOREIGN KEY (`orderid`) REFERENCES `orders` (`orderid`),
  ADD CONSTRAINT `order_description_ibfk_2` FOREIGN KEY (`item_id`) REFERENCES `items` (`items_id`);
