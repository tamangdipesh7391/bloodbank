-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2022 at 07:37 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloodbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `aid` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`aid`, `username`, `password`, `status`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bloodgroup`
--

CREATE TABLE `tbl_bloodgroup` (
  `bid` int(100) NOT NULL,
  `bloodgroup` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_bloodgroup`
--

INSERT INTO `tbl_bloodgroup` (`bid`, `bloodgroup`) VALUES
(1, 'A+'),
(2, 'B+'),
(8, 'O+'),
(9, 'O-');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bloodstock`
--

CREATE TABLE `tbl_bloodstock` (
  `sid` int(100) NOT NULL,
  `bid` int(100) NOT NULL,
  `stock` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_bloodstock`
--

INSERT INTO `tbl_bloodstock` (`sid`, `bid`, `stock`) VALUES
(1, 8, 6),
(2, 9, 10),
(3, 9, 10),
(4, 2, 10);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_campaign`
--

CREATE TABLE `tbl_campaign` (
  `cid` int(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `veneu` varchar(100) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `start_time` varchar(100) NOT NULL,
  `end_time` varchar(100) NOT NULL,
  `guest` varchar(100) NOT NULL,
  `remark` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_campaign`
--

INSERT INTO `tbl_campaign` (`cid`, `title`, `description`, `veneu`, `start_date`, `end_date`, `start_time`, `end_time`, `guest`, `remark`) VALUES
(5, 'school program', 'you all are welcomed to donate a blood', 'ktm', '2022-06-01', '2022-06-04', '13:05', '16:05', 'neha ', 'for the needed people'),
(6, 'Numquam sequi aut la', 'Maiores quia volupta', 'Quisquam omnis ex al', '1995-07-06', '2017-04-15', '15:59', '10:58', 'Qui placeat elit r', 'Explicabo Quibusdam'),
(7, 'Numquam sequi aut la', 'Maiores quia volupta', 'Quisquam omnis ex al', '1995-07-06', '2017-04-15', '15:59', '10:58', 'Qui placeat elit r', 'Explicabo Quibusdam');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'Stewart Farley', 'hopusi@mailinator.com', 'Sed sint non libero ', 'Consectetur laborum'),
(2, 'Stewart Farley', 'hopusi@mailinator.com', 'Sed sint non libero ', 'Consectetur laborum'),
(3, 'Stewart Farley', 'hopusi@mailinator.com', 'Sed sint non libero ', 'Consectetur laborum'),
(4, 'Kato Clarke', 'moxara@mailinator.com', 'Est deserunt earum ', 'Hic animi aut volup');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_donor_list`
--

CREATE TABLE `tbl_donor_list` (
  `dlid` int(11) NOT NULL,
  `did` int(11) NOT NULL,
  `date` date NOT NULL,
  `amount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_donor_list`
--

INSERT INTO `tbl_donor_list` (`dlid`, `did`, `date`, `amount`) VALUES
(6, 8, '2022-08-02', 50),
(7, 9, '2022-08-02', 11),
(8, 10, '2022-06-10', 20),
(9, 10, '1900-01-03', 10),
(10, 11, '1900-01-03', 20),
(11, 12, '1900-01-03', 10),
(12, 8, '0000-00-00', 0),
(13, 15, '2022-08-04', 10),
(14, 17, '2022-08-10', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_donor_login`
--

CREATE TABLE `tbl_donor_login` (
  `id` int(11) NOT NULL,
  `did` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_donor_login`
--

INSERT INTO `tbl_donor_login` (`id`, `did`, `username`, `password`, `status`) VALUES
(4, 8, 'neha', '056eafe7cf52220de2df36845b8ed170c67e23e3', 1),
(5, 11, 'megha', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_donor_register`
--

CREATE TABLE `tbl_donor_register` (
  `did` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `bid` int(100) NOT NULL,
  `healthstatus` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `is_from_campaign` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_donor_register`
--

INSERT INTO `tbl_donor_register` (`did`, `name`, `phone`, `address`, `email`, `gender`, `dob`, `bid`, `healthstatus`, `date`, `is_from_campaign`) VALUES
(8, 'Zachery Cooley', '2', 'Quas reprehenderit ', 'qyxegery@mailinator.com', 'Aliquip possimus es', '2012-04-28', 2, 'other', '2022-04-29', 0),
(9, 'Lilah Chandler', '12', 'Tempore quis optio', 'gepofe@mailinator.com', 'Ut et ullam do autem', '2020-05-09', 2, 'unhealthy', '2022-04-29', 0),
(10, 'Harper Matthews', '53', 'Rerum enim amet fug', 'foji@mailinator.com', 'Temporibus ipsum dui', '2004-06-11', 8, 'unhealthy', '2022-04-29', 1),
(11, 'megha', '94', 'Cupidatat dignissimo', 'cetoz@mailinator.com', 'Totam blanditiis in ', '1970-08-07', 9, 'Healthy', '2022-06-20', 0),
(12, 'sumitra', '32', 'Rerum incididunt mai', 'xorun@mailinator.com', 'Quam Nam quo molliti', '2022-05-08', 9, 'Healthy', '2022-06-20', 1),
(14, 'Chancellor Franklin', '50', 'Quo voluptatem Cupi', 'lazekyb@mailinator.com', 'Velit id ipsam volu', '1976-03-21', 8, 'unhealthy', '2022-08-07', 0),
(15, 'neha ', '12345678', 'anamnagar', 'neha@gmail.com', 'female', '2022-08-04', 8, 'unhealthy', '2022-08-07', 0),
(17, 'Samantha Holmes', '16', 'Quidem quae aut labo', 'kocimepug@mailinator.com', 'Voluptatem dolorem p', '1999-11-06', 9, 'other', '2022-08-09', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_requester_login`
--

CREATE TABLE `tbl_requester_login` (
  `id` int(11) NOT NULL,
  `rid` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_requester_login`
--

INSERT INTO `tbl_requester_login` (`id`, `rid`, `username`, `password`, `status`) VALUES
(2, 3, 'telesac', 'ac748cb38ff28d1ea98458b16695739d7e90f22d', 1),
(3, 7, 'neha', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_request_list`
--

CREATE TABLE `tbl_request_list` (
  `rlid` int(11) NOT NULL,
  `rid` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  `amount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_request_list`
--

INSERT INTO `tbl_request_list` (`rlid`, `rid`, `date`, `amount`) VALUES
(9, 1, 0, 10),
(10, 1, 2022, 25),
(11, 4, 0, 25),
(12, 7, 2022, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_request_register`
--

CREATE TABLE `tbl_request_register` (
  `rid` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `bid` int(100) NOT NULL,
  `description` text NOT NULL,
  `date` date NOT NULL,
  `is_from_campaign` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_request_register`
--

INSERT INTO `tbl_request_register` (`rid`, `name`, `phone`, `address`, `email`, `gender`, `dob`, `bid`, `description`, `date`, `is_from_campaign`) VALUES
(1, 'Chelsea Coleman', '34', 'Ipsum enim enim quid', 'dogyseluj@mailinator.com', 'Et sequi laboriosam', '2015-09-26', 2, 'Cumque eos ut quia ', '2022-04-29', 0),
(3, 'Britanney Carroll', '81', 'Qui ipsam consectetu', 'hasyg@mailinator.com', 'Voluptatem totam per', '1995-07-26', 1, 'Cupidatat ab quia se', '2022-04-29', 0),
(4, 'Imogene Decker', '67', 'Vel et esse ratione', 'velyqa@mailinator.com', 'Et fuga Enim nisi l', '1989-05-08', 8, 'Id expedita dicta a', '2022-05-01', 0),
(5, 'Tamara Valentine', '87', 'Aut in et in qui eli', 'bifijax@mailinator.com', 'Quas magna voluptas ', '1998-04-04', 8, 'In a vel doloribus n', '2022-05-01', 0),
(6, 'Quincy Cannon', '45', 'In enim sit amet i', 'qywy@mailinator.com', 'Provident laudantiu', '2009-10-22', 9, 'Facilis quis natus d', '2022-06-20', 0),
(7, 'Neha', '66', 'Qui blanditiis moles', 'tato@mailinator.com', 'Quaerat voluptatem ', '1974-10-23', 8, 'Natus consequuntur u', '2022-06-20', 0),
(8, 'musa', '1234567', 'chauni', 'musa@gmail.com', 'female', '2022-08-09', 8, ' ', '2022-08-07', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_role`
--

CREATE TABLE `tbl_role` (
  `roid` int(100) NOT NULL,
  `title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `tbl_bloodgroup`
--
ALTER TABLE `tbl_bloodgroup`
  ADD PRIMARY KEY (`bid`),
  ADD UNIQUE KEY `bloodgroup` (`bloodgroup`);

--
-- Indexes for table `tbl_bloodstock`
--
ALTER TABLE `tbl_bloodstock`
  ADD PRIMARY KEY (`sid`),
  ADD KEY `bid` (`bid`);

--
-- Indexes for table `tbl_campaign`
--
ALTER TABLE `tbl_campaign`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_donor_list`
--
ALTER TABLE `tbl_donor_list`
  ADD PRIMARY KEY (`dlid`),
  ADD KEY `did` (`did`);

--
-- Indexes for table `tbl_donor_login`
--
ALTER TABLE `tbl_donor_login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `did` (`did`);

--
-- Indexes for table `tbl_donor_register`
--
ALTER TABLE `tbl_donor_register`
  ADD PRIMARY KEY (`did`),
  ADD KEY `bid` (`bid`);

--
-- Indexes for table `tbl_requester_login`
--
ALTER TABLE `tbl_requester_login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `rid` (`rid`);

--
-- Indexes for table `tbl_request_list`
--
ALTER TABLE `tbl_request_list`
  ADD PRIMARY KEY (`rlid`);

--
-- Indexes for table `tbl_request_register`
--
ALTER TABLE `tbl_request_register`
  ADD PRIMARY KEY (`rid`),
  ADD KEY `bid` (`bid`);

--
-- Indexes for table `tbl_role`
--
ALTER TABLE `tbl_role`
  ADD PRIMARY KEY (`roid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `aid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_bloodgroup`
--
ALTER TABLE `tbl_bloodgroup`
  MODIFY `bid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_bloodstock`
--
ALTER TABLE `tbl_bloodstock`
  MODIFY `sid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_campaign`
--
ALTER TABLE `tbl_campaign`
  MODIFY `cid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_donor_list`
--
ALTER TABLE `tbl_donor_list`
  MODIFY `dlid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_donor_login`
--
ALTER TABLE `tbl_donor_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_donor_register`
--
ALTER TABLE `tbl_donor_register`
  MODIFY `did` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_requester_login`
--
ALTER TABLE `tbl_requester_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_request_list`
--
ALTER TABLE `tbl_request_list`
  MODIFY `rlid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_request_register`
--
ALTER TABLE `tbl_request_register`
  MODIFY `rid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_role`
--
ALTER TABLE `tbl_role`
  MODIFY `roid` int(100) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_bloodstock`
--
ALTER TABLE `tbl_bloodstock`
  ADD CONSTRAINT `tbl_bloodstock_ibfk_1` FOREIGN KEY (`bid`) REFERENCES `tbl_bloodgroup` (`bid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_donor_list`
--
ALTER TABLE `tbl_donor_list`
  ADD CONSTRAINT `tbl_donor_list_ibfk_1` FOREIGN KEY (`did`) REFERENCES `tbl_donor_register` (`did`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_donor_login`
--
ALTER TABLE `tbl_donor_login`
  ADD CONSTRAINT `tbl_donor_login_ibfk_1` FOREIGN KEY (`did`) REFERENCES `tbl_donor_register` (`did`) ON UPDATE CASCADE;

--
-- Constraints for table `tbl_donor_register`
--
ALTER TABLE `tbl_donor_register`
  ADD CONSTRAINT `tbl_donor_register_ibfk_1` FOREIGN KEY (`bid`) REFERENCES `tbl_bloodgroup` (`bid`) ON UPDATE CASCADE;

--
-- Constraints for table `tbl_requester_login`
--
ALTER TABLE `tbl_requester_login`
  ADD CONSTRAINT `tbl_requester_login_ibfk_1` FOREIGN KEY (`rid`) REFERENCES `tbl_request_register` (`rid`) ON UPDATE CASCADE;

--
-- Constraints for table `tbl_request_register`
--
ALTER TABLE `tbl_request_register`
  ADD CONSTRAINT `tbl_request_register_ibfk_1` FOREIGN KEY (`bid`) REFERENCES `tbl_bloodgroup` (`bid`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
