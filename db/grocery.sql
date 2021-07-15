-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2021 at 01:34 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET
SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET
time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grocery`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders`
(
    `order_id` int(11) NOT NULL,
    `salesman` varchar(64) NOT NULL,
    `total`    double(20, 2
) NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `salesman`, `total`, `datetime`)
VALUES (1, 'negus', 20000.00, '2021-07-01 10:01:38');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details`
(
    `order_id`    int(11) NOT NULL,
    `product_id`  int(11) NOT NULL,
    `quantity`    double NOT NULL,
    `total_price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`order_id`, `product_id`, `quantity`, `total_price`)
VALUES (1, 1, 3, 9000),
       (1, 1, 2, 6000),
       (1, 1, 2, 6000);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product`
(
    `product_id`       int(11) NOT NULL,
    `product_name`     varchar(64) NOT NULL,
    `number_of_produt` int(11) NOT NULL,
    `uom_id`           int(11) NOT NULL,
    `price_per_unit`   double(10, 2
) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `number_of_produt`, `uom_id`, `price_per_unit`)
VALUES (1, '', 0, 0, 0.00),
       (2, 'Sugar', 40, 2, 2500.00),
       (3, 'Bar of soap', 10, 1, 2500.00),
       (24, 'beans', 10, 1, 1000.00),
       (25, 'salt', 200, 1, 400.00),
       (27, 'rice', 200, 2, 300.00),
       (29, 'milk', 40, 3, 1500.00),
       (33, 'salt', 200, 1, 0.00),
       (35, 'salt', 0, 1, 0.00),
       (36, 'Water', 15, 3, 500.00),
       (37, 'beans', 20, 2, 2000.00),
       (41, 'cereals', 200, 2, 3000.00);

-- --------------------------------------------------------

--
-- Table structure for table `salesman`
--

CREATE TABLE `salesman`
(
    `salesman_id`   int(11) NOT NULL,
    `salesman_name` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `salesman`
--

INSERT INTO `salesman` (`salesman_id`, `salesman_name`)
VALUES (1, 'negus'),
       (2, 'enoch');

-- --------------------------------------------------------

--
-- Table structure for table `uom`
--

CREATE TABLE `uom`
(
    `uom_id`   int(11) NOT NULL,
    `uom_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uom`
--

INSERT INTO `uom` (`uom_id`, `uom_name`)
VALUES (1, 'each'),
       (2, 'kg'),
       (3, 'litre');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
    ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
    ADD KEY `fk_product_id` (`product_id`),
  ADD KEY `order_id` (`order_id`) USING BTREE;

--
-- Indexes for table `product`
--
ALTER TABLE `product`
    ADD PRIMARY KEY (`product_id`),
  ADD KEY `ky_uom` (`uom_id`);

--
-- Indexes for table `salesman`
--
ALTER TABLE `salesman`
    ADD PRIMARY KEY (`salesman_id`);

--
-- Indexes for table `uom`
--
ALTER TABLE `uom`
    ADD PRIMARY KEY (`uom_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
    MODIFY `order_id` int (11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
    MODIFY `product_id` int (11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `salesman`
--
ALTER TABLE `salesman`
    MODIFY `salesman_id` int (11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `uom`
--
ALTER TABLE `uom`
    MODIFY `uom_id` int (11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
    ADD CONSTRAINT `fk_order_id` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `fk_product_id` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON
DELETE
NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
