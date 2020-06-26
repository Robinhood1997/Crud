-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 25, 2020 at 06:29 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `urbanfit`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`) VALUES
('robin@123.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `f_name` varchar(10) NOT NULL,
  `l_name` varchar(10) NOT NULL,
  `mobile_no` varchar(10) NOT NULL,
  `email_id` varchar(15) NOT NULL,
  `d.o.b` date NOT NULL,
  `photo` varchar(30) NOT NULL,
  `desc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--


-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `address`) VALUES
(0, 'robin', 'ribdmskc', 'team2.jpg', '234');

-- --------------------------------------------------------

--
-- Table structure for table `user1`
--

CREATE TABLE `user1` (
  `fname` varchar(10) NOT NULL,
  `lname` varchar(10) NOT NULL,
  `email` varchar(10) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `image` varchar(50) NOT NULL,
  `descrip` varchar(50) default NULL,
  `dob` date default NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user1`
--

INSERT INTO `user1` (`fname`, `lname`, `email`, `phone`, `image`, `descrip`, `dob`) VALUES
('Harsh', 'Singh', 'Harsh@123.', '8584558855', 'pravin.jpg', 'weasfgh', '1997-02-14'),
('Robin', 'Singh', 'robin@123.', '9309133156', 'team2.jpg', 'hiiiiii', '1997-04-14'),
('Himanshu', 'Singh', 'himanshu@1', '93094568', 'team5.jpg', 'zdcxvbnm,,', '1998-05-04');
