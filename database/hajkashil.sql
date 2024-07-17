-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2023 at 02:34 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hajkashil`
--

-- --------------------------------------------------------

--
-- Table structure for table `hamalt`
--

CREATE TABLE `hamalt` (
  `hamalid` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `number` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hamalt`
--

INSERT INTO `hamalt` (`hamalid`, `name`, `number`, `price`, `phone`) VALUES
(1, 'الأحسان', 1001, 3984, '055555551'),
(2, 'منى', 1002, 11841,'055555552'),
(3, 'مكه', 1003, 8241, '05555553');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `reservationid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `hamalid` int(11) NOT NULL,
  `payment` int(11) NOT NULL DEFAULT 1 COMMENT '1 دفع الكتروني\r\n2 دفع حضوري'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`reservationid`, `userid`, `hamalid`, `payment`) VALUES
(17, 6, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `fullname` varchar(255) CHARACTER SET utf8 NOT NULL,
  `username` varchar(255) CHARACTER SET utf8 NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 NOT NULL,
  `idnumber` varchar(255) CHARACTER SET utf8 NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8 NOT NULL,
  `city` varchar(255) NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `fullname`, `username`, `password`, `idnumber`, `phone`, `city`, `email`) VALUES
(1, 'asassa', 'asass', 'sasaa', '12212', '121221', 'sassasa', ''),
(2, 'jamal', 'jamal', '12345', '21212', '122112', '212221', ''),
(3, 'sasa', 'sasasa', 'sassa', '122', '21221', '212121', ''),
(4, 'qwqww', 'qwwqwq', 'qwwqw', '211221', '2121', '21212', ''),
(5, '21121', '122121', '21212', '12122', '2121', '211212', ''),
(6, 'asas', 'asas', 'asas', '1212', '1212', '1212', ''),
(7, 'asma ahmed', 'asma', '123456', '1200120012', '0120120021', 'جده', ''),
(9, 'test', 'test', 'test', '12123', '35113', 'TEST', ''),
(10, 'Arwa', 'arwa', '1234', '1', '12122121', 'sawdi', ''),
(11, 'qwqw', 'qwqw', 'qwqw', '1212', '121221', 'qwqw', 'qwqw@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hamalt`
--
ALTER TABLE `hamalt`
  ADD PRIMARY KEY (`hamalid`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`reservationid`),
  ADD KEY `aasas` (`hamalid`),
  ADD KEY `aasasas` (`userid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hamalt`
--
ALTER TABLE `hamalt`
  MODIFY `hamalid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `reservationid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `aasas` FOREIGN KEY (`hamalid`) REFERENCES `hamalt` (`hamalid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `aasasas` FOREIGN KEY (`userid`) REFERENCES `users` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
