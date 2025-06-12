-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2021 at 07:59 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `4642347_vacc_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `login_table`
--

CREATE TABLE `login_table` (
  `fathername` varchar(50) NOT NULL,
  `mothername` varchar(50) NOT NULL,
  `date_of_birth` date NOT NULL,
  `time_of_birth` time NOT NULL,
  `baby_weight` int(20) NOT NULL,
  `contact` bigint(100) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `BCG` date DEFAULT NULL,
  `OPV` date DEFAULT NULL,
  `Hep_B1` date DEFAULT NULL,
  `DTP_6w` date DEFAULT NULL,
  `IPV_6w` date DEFAULT NULL,
  `Hep_b_6w` date DEFAULT NULL,
  `Hib_6w` date DEFAULT NULL,
  `Rotavirus_6w` date DEFAULT NULL,
  `PCV_6w` date DEFAULT NULL,
  `DTP_10w` date DEFAULT NULL,
  `IPV_10w` date DEFAULT NULL,
  `Hib_10w` date DEFAULT NULL,
  `Rotavirus_10w` date DEFAULT NULL,
  `PCV_10w` date DEFAULT NULL,
  `DTP_14w` date DEFAULT NULL,
  `IPV_14w` date DEFAULT NULL,
  `Hib_14w` date DEFAULT NULL,
  `Rotavirus_14w` date DEFAULT NULL,
  `PCV_14w` date DEFAULT NULL,
  `OPV_6m` date DEFAULT NULL,
  `Hep_B_6m` date DEFAULT NULL,
  `OPV_9m` date DEFAULT NULL,
  `MMR_9m` date DEFAULT NULL,
  `TCV_9m` date DEFAULT NULL,
  `Hep_A_12m` date DEFAULT NULL,
  `MMR_15m` date DEFAULT NULL,
  `V_15m` date DEFAULT NULL,
  `PCV_15m` date DEFAULT NULL,
  `DTP_16m` date DEFAULT NULL,
  `IPV_16m` date DEFAULT NULL,
  `Hib_16m` date DEFAULT NULL,
  `Hep_A_18m` date DEFAULT NULL,
  `TCV_2y` date DEFAULT NULL,
  `DTP_4y` date DEFAULT NULL,
  `OPV_4y` date DEFAULT NULL,
  `V_4y` date DEFAULT NULL,
  `MMR_4y` date DEFAULT NULL,
  `Tdap_10y` date DEFAULT NULL,
  `HPV_10y` date DEFAULT NULL,
  `BCG1` date DEFAULT NULL,
  `OPV1` date DEFAULT NULL,
  `Hep_B11` date DEFAULT NULL,
  `DTP_6w1` date DEFAULT NULL,
  `IPV_6w1` date DEFAULT NULL,
  `Hep_b_6w1` date DEFAULT NULL,
  `Hib_6w1` date DEFAULT NULL,
  `Rotavirus_6w1` date DEFAULT NULL,
  `PCV_6w1` date DEFAULT NULL,
  `DTP_10w1` date DEFAULT NULL,
  `IPV_10w1` date DEFAULT NULL,
  `Hib_10w1` date DEFAULT NULL,
  `Rotavirus_10w1` date DEFAULT NULL,
  `PCV_10w1` date DEFAULT NULL,
  `DTP_14w1` date DEFAULT NULL,
  `IPV_14w1` date DEFAULT NULL,
  `Hib_14w1` date DEFAULT NULL,
  `Rotavirus_14w1` date DEFAULT NULL,
  `PCV_14w1` date DEFAULT NULL,
  `OPV_6m1` date DEFAULT NULL,
  `Hep_B_6m1` date DEFAULT NULL,
  `OPV_9m1` date DEFAULT NULL,
  `MMR_9m1` date DEFAULT NULL,
  `TCV_9m1` date DEFAULT NULL,
  `Hep_A_12m1` date DEFAULT NULL,
  `MMR_15m1` date DEFAULT NULL,
  `V_15m1` date DEFAULT NULL,
  `PCV_15m1` date DEFAULT NULL,
  `DTP_16m1` date DEFAULT NULL,
  `IPV_16m1` date DEFAULT NULL,
  `Hib_16m1` date DEFAULT NULL,
  `Hep_A_18m1` date DEFAULT NULL,
  `TCV_2y1` date DEFAULT NULL,
  `DTP_4y1` date DEFAULT NULL,
  `OPV_4y1` date DEFAULT NULL,
  `V_4y1` date DEFAULT NULL,
  `MMR_4y1` date DEFAULT NULL,
  `Tdap_10y1` date DEFAULT NULL,
  `HPV_10y1` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_table`
--

INSERT INTO `login_table` (`fathername`, `mothername`, `date_of_birth`, `time_of_birth`, `baby_weight`, `contact`, `username`, `password`, `email`, `BCG`, `OPV`, `Hep_B1`, `DTP_6w`, `IPV_6w`, `Hep_b_6w`, `Hib_6w`, `Rotavirus_6w`, `PCV_6w`, `DTP_10w`, `IPV_10w`, `Hib_10w`, `Rotavirus_10w`, `PCV_10w`, `DTP_14w`, `IPV_14w`, `Hib_14w`, `Rotavirus_14w`, `PCV_14w`, `OPV_6m`, `Hep_B_6m`, `OPV_9m`, `MMR_9m`, `TCV_9m`, `Hep_A_12m`, `MMR_15m`, `V_15m`, `PCV_15m`, `DTP_16m`, `IPV_16m`, `Hib_16m`, `Hep_A_18m`, `TCV_2y`, `DTP_4y`, `OPV_4y`, `V_4y`, `MMR_4y`, `Tdap_10y`, `HPV_10y`, `BCG1`, `OPV1`, `Hep_B11`, `DTP_6w1`, `IPV_6w1`, `Hep_b_6w1`, `Hib_6w1`, `Rotavirus_6w1`, `PCV_6w1`, `DTP_10w1`, `IPV_10w1`, `Hib_10w1`, `Rotavirus_10w1`, `PCV_10w1`, `DTP_14w1`, `IPV_14w1`, `Hib_14w1`, `Rotavirus_14w1`, `PCV_14w1`, `OPV_6m1`, `Hep_B_6m1`, `OPV_9m1`, `MMR_9m1`, `TCV_9m1`, `Hep_A_12m1`, `MMR_15m1`, `V_15m1`, `PCV_15m1`, `DTP_16m1`, `IPV_16m1`, `Hib_16m1`, `Hep_A_18m1`, `TCV_2y1`, `DTP_4y1`, `OPV_4y1`, `V_4y1`, `MMR_4y1`, `Tdap_10y1`, `HPV_10y1`) VALUES
('chandana', 'chandana', '2020-12-03', '15:16:00', 2, 0, 'chandana', 'chandana', 'chandana@gmail.com', '2020-12-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('srinivas', 'srilatha', '2020-12-29', '14:17:00', 3, 8978370321, 'chandana1', 'chandana', 'gaddam.chandana@gmail.com', '2021-01-06', '2021-01-11', '2021-01-20', '2021-02-10', '2021-02-14', '2021-02-18', '2021-02-24', '2021-02-28', '2021-03-05', '2021-03-09', '2021-03-15', '2021-03-19', '2021-03-25', '2021-03-30', '2021-04-07', '2021-04-09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-01-06', '2020-12-09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('srininvas1', 'srilatha1', '2019-09-01', '21:38:00', 2, 9999988888, 'chandu1', 'chandu1', 'abcd@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('sreedhar', 'hyma', '2013-03-15', '08:45:00', 3, 9885224889, 'sreedhar', 'sreedhar', 'g.srinivas.doly@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login_table`
--
ALTER TABLE `login_table`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
