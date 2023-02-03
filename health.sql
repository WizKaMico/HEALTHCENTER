-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2022 at 11:31 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `health`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user_id` int(11) NOT NULL,
  `fname` text NOT NULL,
  `mname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `age` varchar(11) NOT NULL,
  `birthday` date NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `status` varchar(100) NOT NULL,
  `code` int(100) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_id`, `fname`, `mname`, `lname`, `address`, `gender`, `age`, `birthday`, `phone`, `email`, `password`, `status`, `code`, `date_created`) VALUES
(2, 'Gerald Mico', 'Mico', 'facistol', '10 U206,Agusan del Sur,Bunawan', 'MALE', '23', '1999-10-02', '09166513189', 'tricore012@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'ACTIVATE', 93852, '2022-10-10'),
(3, 'TESTING LANG ', 'TEST', 'TEST', 'TEST,Apayao,Pudtol', 'MALE', '0', '2022-10-19', '09166513189', 'checkme@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'ACTIVATE', 76889, '2022-10-10'),
(4, 'Testing', 'Test', 'test', 'test u206,Bulacan,Pandi', 'MALE', '27', '1995-10-17', '09166513189', 'test_test@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'ACTIVATE', 70705, '2022-10-17');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `id` int(11) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `stocks` int(11) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`id`, `mname`, `type`, `description`, `stocks`, `date_created`) VALUES
(2, 'MMR', 'mRNA vaccines.', 'This is the vacine', 50, '2022-10-10'),
(3, 'MMR 2', 'Subunit, recombinant, conjugate, and polysaccharide vaccines.', 'THIS IS A VACINE ', 250, '2022-10-10'),
(4, 'MMR 3', 'mRNA vaccines.', 'this is a description', 500, '2022-10-17'),
(5, 'MMR 4', 'mRNA vaccines.', 'this is the vaccines', 200, '2022-10-17');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `patient_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(250) NOT NULL,
  `fname` text NOT NULL,
  `mname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `age` varchar(11) NOT NULL,
  `birthday` date NOT NULL,
  `phone` varchar(50) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`patient_id`, `email`, `password`, `fname`, `mname`, `lname`, `address`, `gender`, `age`, `birthday`, `phone`, `status`) VALUES
(1, 'tricore012@gmail.com', '73acd9a5972130b75066c82595a1fae3', 'Gerald Mico', 'Mico', 'devcore', '10 U206,Agusan del Sur,Bunawan', 'MALE', '18', '2004-10-04', '09166513189', 'ACTIVE'),
(2, 'hellodevcore@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'Gerald Mico', 'Mico', 'devcore', '10 U206,Bulacan,Marilao', 'MALE', '27', '1995-10-02', '09166513189', 'VACINATED'),
(3, 'abby@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'Abegail', 'Sevilla', 'Facistol', '10 U206,Bulacan,Guiguinto', 'MALE', '27', '1995-07-28', '09166513189', 'VACINATED'),
(4, 'ilove101213@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'Gerald Mico', 'Mico', 'devcore', '10 U206,Agusan del Sur,Bunawan', 'MALE', '21', '2001-10-02', '09166513189', 'MEASLES'),
(5, 'testingagain@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'Gerald Mico', 'Mico', 'devcore', '10 U206,Agusan del Sur,Bunawan', 'MALE', '25', '1997-10-14', '09166513189', 'MEASLES'),
(6, 'tester@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'Gerald Mico', 'Mico', 'devcore', '10 U206,Agusan del Sur,Bunawan', 'MALE', '21', '2001-06-05', '09166513189', 'VACINATED'),
(7, 'myname@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'my firstname', 'my middlename', 'my lastname', '10 U206,Bulacan,Pandi', 'MALE', '22', '2000-10-02', '09166513189', 'MEASLES');

-- --------------------------------------------------------

--
-- Table structure for table `survey_answer`
--

CREATE TABLE `survey_answer` (
  `id` int(11) NOT NULL,
  `expose_to_measles` varchar(50) NOT NULL,
  `expose_to_measles_yes` varchar(50) NOT NULL,
  `self_medicate` varchar(50) NOT NULL,
  `experience_symptoms` varchar(50) NOT NULL,
  `cough` varchar(50) NOT NULL,
  `runny_nose` varchar(50) NOT NULL,
  `watery_eyes` varchar(50) NOT NULL,
  `how_long` varchar(50) NOT NULL,
  `which_part` varchar(250) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `date_answered` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `survey_answer`
--

INSERT INTO `survey_answer` (`id`, `expose_to_measles`, `expose_to_measles_yes`, `self_medicate`, `experience_symptoms`, `cough`, `runny_nose`, `watery_eyes`, `how_long`, `which_part`, `patient_id`, `date_answered`) VALUES
(2, 'YES', 'MODERATE', 'YES', 'MODERATE', 'MODERATE', 'MODERATE', 'MODERATE', '1-14 days', '', 0, '2022-10-11'),
(3, 'YES', 'MILD', 'YES', 'MILD', 'MILD', 'MILD', 'MILD', '1-3 days', '', 0, '2022-10-11'),
(4, 'YES', 'MILD', 'YES', 'MILD', 'MILD', 'MILD', 'MILD', '1-3 days', '', 2, '2022-10-11'),
(5, 'YES', 'MODERATE', 'YES', 'MODERATE', 'MODERATE', 'SEVERE', 'MODERATE', '1-14 days', '', 3, '2022-10-11'),
(14, 'YES', 'MODERATE', 'YES', 'MILD', 'MILD', 'MILD', 'MILD', '1-3 days', '', 1, '2022-10-11'),
(15, 'YES', 'MILD', 'YES', 'MILD', 'MILD', 'MILD', 'MILD', '1-3 days', 'Neck', 4, '2022-10-17'),
(16, 'YES', 'MILD', 'YES', 'MILD', 'MILD', 'MILD', 'MILD', '1-3 days', 'Thighs', 6, '2022-10-17'),
(17, 'YES', 'SEVERE', 'NO', 'SEVERE', 'SEVERE', 'SEVERE', 'SEVERE', '1-14 days', 'Shoulder and Arms', 7, '2022-10-17');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_events`
--

CREATE TABLE `tbl_events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_events`
--

INSERT INTO `tbl_events` (`id`, `title`, `start`, `end`) VALUES
(3, 'VACINATION TODAY ', '2022-10-10 00:00:00', '2022-10-11 00:00:00'),
(4, 'VACINATION ', '2022-10-11 00:00:00', '2022-10-12 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`patient_id`);

--
-- Indexes for table `survey_answer`
--
ALTER TABLE `survey_answer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_events`
--
ALTER TABLE `tbl_events`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `patient_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `survey_answer`
--
ALTER TABLE `survey_answer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_events`
--
ALTER TABLE `tbl_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
