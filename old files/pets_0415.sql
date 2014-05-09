-- phpMyAdmin SQL Dump
-- version 3.5.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 15, 2014 at 10:04 PM
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
('admin', 'd033e22ae348aeb5660fc2140aec35850c4da997');

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
(4, 'Accessories');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customerid`, `name`, `address`, `city`, `state`, `zip`, `country`) VALUES
(1, 'Bryn', 'fulton street', 'NEW YORK', 'NY', '10038', 'USA'),
(2, 'Monika', 'Chambers Street', 'NEW YORK', 'NY', '10001', 'USA'),
(3, 'Nikita Ravindranath', 'Van Reypen Street', 'Jersey City', 'NJ', '07306', 'USA'),
(4, 'Bryan', '80 Summit Ave', 'Indiana', 'IN', '20335', 'USA'),
(5, 'John', '56 William Street', 'NEW YORK', 'NY', '10035', 'USA');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`items_id`, `quantity`, `catid`, `description`, `size`, `image_loc`, `name`, `price`) VALUES
(1, 300, 1, 'blue sweater made out of pure wool ', 'S', 'bluesweater.jpg', 'Blue Sweater', 50.00),
(2, 300, 2, 'full harness for the safety of your kitty', 'M', 'fullharness.jpg', 'Full Harness', 20.00),
(3, 600, 1, 'green sweater made out of pure wool.', 'S', 'greensweater.jpg', 'Green Sweater', 50.00),
(4, 300, 3, 'life jacket to keep your cat safe on a picnic\n', 'L', 'lifejacket.jpg', 'Life Jacket', 30.00),
(5, 30, 4, 'penguin halloween costume for your cat', 'S', 'penguin.jpg', 'Penguin Costume', 40.00),
(6, 3, 4, 'Scarf made out of pure wool for a stylish cat. ', 'S', 'scarf.jpg', 'Red Scarf', 20.00);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderid`, `customerid`, `amount`, `date`, `order_status`, `ship_name`, `ship_address`, `ship_city`, `ship_state`, `ship_zip`, `ship_country`) VALUES
(1, 1, 359.00, '2014-04-14', 'Processing', 'Fedex', '88 Van Reypen Street', 'Jersey City', 'NJ', '07306', 'USA'),
(2, 2, 999.00, '2014-04-13', 'Completed', 'UPS', 'Chambers Street', 'New York', 'NY', '10038', 'USA');

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
(2, 6, 40.00, 100);

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
  ADD CONSTRAINT `bill_info_ibfk_2` FOREIGN KEY (`orderid`) REFERENCES `orders` (`orderid`),
  ADD CONSTRAINT `bill_info_ibfk_1` FOREIGN KEY (`customerid`) REFERENCES `customers` (`customerid`);

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
  ADD CONSTRAINT `order_description_ibfk_2` FOREIGN KEY (`item_id`) REFERENCES `items` (`items_id`),
  ADD CONSTRAINT `order_description_ibfk_1` FOREIGN KEY (`orderid`) REFERENCES `orders` (`orderid`);
