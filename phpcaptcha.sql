-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 28, 2021 at 10:29 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpcaptcha`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabreg`
--

CREATE TABLE `tabreg` (
  `Id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `dateofbirth` date NOT NULL,
  `about` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabreg`
--

INSERT INTO `tabreg` (`Id`, `Name`, `Email`, `dateofbirth`, `about`) VALUES
(1, 'brinda chanchad', 'brindachanchad00@gmail.com', '2021-09-02', 'brinda chanchad'),
(2, 'fsajhfajbfjf', 'brindachanchad00@gmail.com', '2021-09-02', 'fsajhfajbfjf'),
(3, 'adfgafa', 'brindachanchad00@gmail.com', '2021-09-06', 'adfgafa'),
(4, 'bdfsgsdg', 'brindachanchad00@gmail.com', '2021-09-08', 'bdfsgsdg'),
(5, 'afsfafafad', 'brindachanchad00@gmail.com', '2021-09-09', 'afsfafafad');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabreg`
--
ALTER TABLE `tabreg`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabreg`
--
ALTER TABLE `tabreg`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
