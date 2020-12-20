-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2020 at 12:14 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ghumatmogi`
--

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `alb_id` int(11) NOT NULL,
  `alb_name` varchar(30) NOT NULL,
  `alb_rel_date` date NOT NULL,
  `club_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE `artist` (
  `art_id` int(11) NOT NULL,
  `art_firstname` varchar(20) NOT NULL,
  `art_lastname` varchar(20) NOT NULL,
  `art_address` varchar(30) DEFAULT NULL,
  `club_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artist`
--

INSERT INTO `artist` (`art_id`, `art_firstname`, `art_lastname`, `art_address`, `club_id`) VALUES
(1, 'Ketan', 'Salgaonkar', 'mapusa', 1),
(4, 'Swapnesh', 'Naik', 'Mapusa', 1),
(5, 'Tushar', 'Kukolikar', 'Mapusa', 1),
(6, 'Bhushan', 'Navelkar', 'Mardol', 9),
(7, 'Rushikesh', 'Arlekar', 'H.no 78/127, Verla Freitas Vad', 2),
(8, 'Suraj', 'Pinge', 'Pirna', 8),
(9, '', '', '', 8),
(10, 'Chandu', 'Naik', 'verla', 4),
(11, 'kunal', 'gaonkar', 'vasco', 4),
(12, 'Girish', 'naik', '78/A', 4);

-- --------------------------------------------------------

--
-- Table structure for table `club`
--

CREATE TABLE `club` (
  `club_Id` int(11) NOT NULL,
  `club_name` varchar(50) NOT NULL,
  `club_address` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `club`
--

INSERT INTO `club` (`club_Id`, `club_name`, `club_address`) VALUES
(1, 'Sai Bodgeshwar Ghumat Aarti Mandal', 'Mapusa'),
(2, 'Mahamaya Aarti Mandal', 'Shiroda'),
(3, 'Swar Sai', 'Mapusa'),
(4, 'Ganesh Aarti Mandal', 'Nadora'),
(7, 'Swami Samarth Aarti Mandal', 'Siolim'),
(8, 'On Shiv Shambho', 'Mercem'),
(9, 'Sateri Ghumat Aarti Mandal', 'Khorlim'),
(10, 'Sai Damodar', 'Margao'),
(11, 'Navsai Aarti Mandal', 'Borim'),
(12, 'Sai Damodar', 'Mercem');

-- --------------------------------------------------------

--
-- Table structure for table `perform`
--

CREATE TABLE `perform` (
  `prog_id` int(11) NOT NULL,
  `prog_name` varchar(30) NOT NULL,
  `prog_org_name` varchar(20) DEFAULT NULL,
  `prog_date` date DEFAULT NULL,
  `prog_address` varchar(20) DEFAULT NULL,
  `club_id` int(11) DEFAULT NULL,
  `trk_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `art_id` int(11) NOT NULL,
  `role_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`art_id`, `role_type`) VALUES
(1, 'composer'),
(6, 'singer'),
(7, 'singer'),
(8, 'composer'),
(8, 'ghumat'),
(9, ''),
(10, 'singer'),
(11, 'ghumat'),
(12, 'kasale');

-- --------------------------------------------------------

--
-- Table structure for table `track`
--

CREATE TABLE `track` (
  `trk_id` int(11) NOT NULL,
  `trk_name` varchar(30) NOT NULL,
  `art_id` int(11) DEFAULT NULL,
  `alb_id` int(11) DEFAULT NULL,
  `club_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `track`
--

INSERT INTO `track` (`trk_id`, `trk_name`, `art_id`, `alb_id`, `club_id`) VALUES
(1, 'Aadhi Maya', 0, 0, 0),
(20, 'mandish', 0, 0, 1),
(21, 'madananta', 0, 0, 1),
(22, 'Jai Malhar', 1, 0, 1),
(30, 'Sai Paduka', 1, 0, 7),
(31, 'Shankara Tanaya', 8, 0, 2),
(33, 'Siddhanatha', 8, 0, 11),
(35, 'Bhuvana Mohini', 8, 0, 3),
(36, 'Dasharatha Nandana', 8, 0, 3),
(37, 'sukhakarta', 8, 0, 4),
(38, 'shiv kumar', 8, 0, 4),
(39, 'Sai Paduka', 1, 0, 0),
(40, '', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstname` varchar(20) DEFAULT NULL,
  `lastname` varchar(20) DEFAULT NULL,
  `role` varchar(10) NOT NULL,
  `club` varchar(30) DEFAULT NULL,
  `approved` varchar(30) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `role`, `club`, `approved`, `email`, `password`) VALUES
(12, 'Rushikesh', 'Arlekar', 'admin', 'null', 'null', 'ruarlekar@gmail.com', '12345'),
(13, 'Khushboo', 'Shetkar', 'public', 'NULL', 'NULL', 'khushboo.shetkar43.ks@gmail.com', '11111'),
(20, 'Rushikesh', 'Arlekar', 'club', '2', 'yes', 'ru@gmail.com', '1111'),
(24, 'Rushikeshq', 'Arlekar', 'public', 'NULL', 'NULL', 'rua@gmail.com', 'dqdq'),
(25, 'Rushikesh', 'Arlekar', 'club', '2', 'yes', 'ruar@gmail.com', '1111'),
(26, 'Rushikesh', 'Arlekar', 'club', '1', 'yes', 'rar@gmail.com', 'awdaw'),
(27, 'karesh', 'Arlekar', 'club', '2', 'yes', 'kar@gmail.com', '12345'),
(28, 'Khushboo', 'Shetkar', 'club', '1', 'yes', 'shetkar43.ks@gmail.com', '1222'),
(29, 'mrudul', 'dwdwd', 'club', '8', 'yes', 'mrudul@gmail.com', '1111'),
(30, 'public', 'user', 'public', 'NULL', 'NULL', 'public@gmail.com', '1234'),
(31, 'Rushi', 'Arlekar', 'public', 'NULL', 'NULL', 'rushia@gmail.com', 'rushikesh'),
(32, 'Nitesh', 'Parab', 'public', 'NULL', 'NULL', 'nitesh@gmail.com', '1234'),
(33, 'jaya', 'naik', 'club', '4', 'yes', 'jaya@gmail.com', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`alb_id`);

--
-- Indexes for table `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`art_id`);

--
-- Indexes for table `club`
--
ALTER TABLE `club`
  ADD PRIMARY KEY (`club_Id`);

--
-- Indexes for table `perform`
--
ALTER TABLE `perform`
  ADD PRIMARY KEY (`prog_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`art_id`,`role_type`);

--
-- Indexes for table `track`
--
ALTER TABLE `track`
  ADD PRIMARY KEY (`trk_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `alb_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `artist`
--
ALTER TABLE `artist`
  MODIFY `art_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `club`
--
ALTER TABLE `club`
  MODIFY `club_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `perform`
--
ALTER TABLE `perform`
  MODIFY `prog_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `track`
--
ALTER TABLE `track`
  MODIFY `trk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
