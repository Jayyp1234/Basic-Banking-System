-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2020 at 01:14 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bankuser`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Name` varchar(40) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Amount` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Name`, `Email`, `Amount`) VALUES
('Okeke Johnpaul', 'Okekejohnpaul12@gmail.com', 18806784);

-- --------------------------------------------------------

--
-- Table structure for table `candiates`
--

CREATE TABLE `candiates` (
  `id` int(11) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Names` varchar(40) NOT NULL,
  `Amount` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `candiates`
--

INSERT INTO `candiates` (`id`, `Email`, `Names`, `Amount`) VALUES
(1, 'Oyegbilemarvellous@gmail.com', 'Oyegbile Marvellous', 1096067),
(2, 'Offisongemasket@yahoo.com', 'Offisong Emmanuel', 85001),
(3, 'Okekeflorence12@gmail.com', 'Okeke Florence', 4700000),
(4, 'ezeokeetta123@gmail.com', 'Ezeoke Onyinye', 347590),
(5, 'offongabis343@gmail.com', 'Offong Abigail', 25000),
(6, 'iamblake212@gmail.com', 'Blake Clack', 45070),
(7, 'thatgeekybandits@gmail.com', 'Heavenly Geeks', 45660),
(8, 'FredickoMarve180@gmail.com', 'Fredick marvella ', 90001),
(9, 'linkerdin0202@gmail.com', 'linker marina', 75000),
(10, 'pipololauwamini@gmail.com', 'Pipolola Oluwa', 35000);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` int(50) NOT NULL,
  `Message` varchar(190) NOT NULL,
  `Dater` varchar(40) NOT NULL,
  `soney` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `Message`, `Dater`, `soney`) VALUES
(18, 'Txn: Debit \n Amt: NGN 1000000 \n Bal : NGN 18886784 \n Date : 2020-10-13 10:28am \n COVID19 is real #StaySafe', '2020-10-13 10:28am', '1000000'),
(19, 'Txn: Debit \n Amt: NGN 30000 \n Bal : NGN 18856784 \n Date : 2020-10-13 10:29am \n COVID19 is real #StaySafe', '2020-10-13 10:29am', '30000'),
(20, 'Txn: Debit \n Amt: NGN 50000 \n Bal : NGN 18806784 \n Date : 2020-10-13 10:30am \n COVID19 is real #StaySafe', '2020-10-13 10:30am', '50000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candiates`
--
ALTER TABLE `candiates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candiates`
--
ALTER TABLE `candiates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
