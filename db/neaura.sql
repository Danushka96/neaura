-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2018 at 10:29 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.1.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `neaura`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(4) NOT NULL,
  `branchid` int(4) NOT NULL,
  `customerid` int(11) NOT NULL,
  `service_id` int(4) NOT NULL,
  `appdate` varchar(20) NOT NULL,
  `apptime` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `branchid`, `customerid`, `service_id`, `appdate`, `apptime`) VALUES
(1, 1, 12, 1, '2018-05-31', '12:00');

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `id` int(4) NOT NULL,
  `name` varchar(30) NOT NULL,
  `location` varchar(100) NOT NULL,
  `hours` int(2) NOT NULL,
  `appointments` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`id`, `name`, `location`, `hours`, `appointments`) VALUES
(1, 'Ne Aura - Borella', 'Borella', 5, 12),
(2, 'Ne Aura - Moratuwa', 'Moratuwa', 2, 25),
(3, 'Ne\'Aura - Kelaniya', 'Kelaniya', 18, 15);

-- --------------------------------------------------------

--
-- Table structure for table `branchitems`
--

CREATE TABLE `branchitems` (
  `itemid` varchar(20) NOT NULL,
  `branchid` int(4) NOT NULL,
  `quantity` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branchitems`
--

INSERT INTO `branchitems` (`itemid`, `branchid`, `quantity`) VALUES
('24', 1, 46),
('24', 2, 50),
('24', 3, 60),
('25', 1, 15),
('25', 2, 60),
('25', 3, 90),
('26', 1, 25),
('27', 1, 10),
('28', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(4) NOT NULL,
  `customerid` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `customerid`, `comment`, `time`) VALUES
(1, 12, 'hi', '2018-06-28 04:59:58'),
(2, 12, 'I was just browsing your website & it has a good presentation of all the products you offer. Im a regular user of NeAura products as well & I think they are better than any of the international products offered in the market. Proud to youll. Keep it up', '2018-06-28 05:05:07'),
(3, 12, 'Hi..I really liked your facewash------Thilini - Sri Lanka-------', '2018-06-28 05:05:33'),
(4, 12, '123', '2018-06-28 05:14:48');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `age` int(2) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `firstname`, `lastname`, `age`, `email`, `contact`) VALUES
(11, 'Danushka', 'Herath', 32, 'danushkaherath96@gmail.com', '717705526'),
(12, 'Customer', '1', 17, 'customer@customer.com', '0785465254');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` varchar(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` double(6,2) NOT NULL,
  `type` int(1) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `price`, `type`, `image`) VALUES
('24', 'Face Cream', 545.00, 0, 'cream.png'),
('25', 'NeAura Carrot Face wash', 250.00, 0, 'facewash.png'),
('26', 'NeAura Sandun Scrub', 800.00, 0, 'scrub.png'),
('27', 'NeAura Aloe Body Wash', 450.00, 0, 'bodywash.png'),
('28', 'NeAura Hand Cream', 450.00, 0, 'handcream.png');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(4) NOT NULL,
  `name` varchar(30) NOT NULL,
  `branchid` int(4) NOT NULL,
  `price` double(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `branchid`, `price`) VALUES
(1, 'Waxing-Full', 1, 500.00),
(2, 'Waxing-Half', 1, 300.00),
(3, 'Manicure/Pedicure', 1, 1000.00),
(4, 'Rebonding', 1, 2500.00),
(5, 'Makeup', 1, 1000.00),
(6, 'Haircuts', 1, 400.00),
(7, 'Hair Coloring', 1, 3000.00),
(8, 'Facials', 1, 900.00),
(9, 'Clean-Ups', 1, 300.00);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `type` int(1) NOT NULL,
  `branch` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`email`, `password`, `type`, `branch`) VALUES
('admin@admin.com', '1234', 1, 1),
('customer@customer.com', '1234', 2, 0),
('danushkaherath96@gmail.com', '1234', 2, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `branchid` (`branchid`),
  ADD KEY `customerid` (`customerid`),
  ADD KEY `service_id` (`service_id`);

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branchitems`
--
ALTER TABLE `branchitems`
  ADD PRIMARY KEY (`itemid`,`branchid`),
  ADD KEY `branchid` (`branchid`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customerid` (`customerid`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `branchid` (`branchid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `appointment_ibfk_1` FOREIGN KEY (`branchid`) REFERENCES `branches` (`id`),
  ADD CONSTRAINT `appointment_ibfk_2` FOREIGN KEY (`customerid`) REFERENCES `customers` (`id`),
  ADD CONSTRAINT `appointment_ibfk_3` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`);

--
-- Constraints for table `branchitems`
--
ALTER TABLE `branchitems`
  ADD CONSTRAINT `branchitems_ibfk_1` FOREIGN KEY (`branchid`) REFERENCES `branches` (`id`),
  ADD CONSTRAINT `branchitems_ibfk_2` FOREIGN KEY (`itemid`) REFERENCES `items` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`customerid`) REFERENCES `customers` (`id`);

--
-- Constraints for table `customers`
--
ALTER TABLE `customers`
  ADD CONSTRAINT `fk_users_email` FOREIGN KEY (`email`) REFERENCES `users` (`email`);

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_ibfk_1` FOREIGN KEY (`branchid`) REFERENCES `branches` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
