-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 22, 2017 at 04:58 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jewellery`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `uname` varchar(80) NOT NULL,
  `pswd` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`uname`, `pswd`) VALUES
('123', '123');

-- --------------------------------------------------------

--
-- Table structure for table `diamondprice`
--

CREATE TABLE IF NOT EXISTS `diamondprice` (
  `did` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(70) NOT NULL,
  `gcarte` varchar(70) NOT NULL,
  `dcarte` varchar(70) NOT NULL,
  `price` varchar(70) NOT NULL,
  `available` varchar(70) NOT NULL,
  `weight` varchar(70) NOT NULL,
  `delivery` varchar(70) NOT NULL,
  PRIMARY KEY (`did`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `diamondprice`
--

INSERT INTO `diamondprice` (`did`, `name`, `gcarte`, `dcarte`, `price`, `available`, `weight`, `delivery`) VALUES
(1, 'Bangle', 'NO', '18', '40000', 'Y', 'NO', '250'),
(2, 'Bangle 1', 'NO', '20', '50000', 'Y', 'NO', '250'),
(3, 'Bangle 2', 'NO', '20', '80000', 'Y', 'NO', '250'),
(4, 'Bangle 3', 'NO', '20', '85000', 'Y', 'NO', '250'),
(5, 'Bangle 4', 'NO', '20', '90000', 'Y', 'NO', '250'),
(6, 'Bangle 5', 'NO', '20', '95000', 'Y', 'NO', '250'),
(7, 'Nacklace', 'NO', '20', '100000', 'Y', 'NO', '250'),
(8, 'Nacklace 1', 'NO', '20', '120000', 'Y', 'NO', '250'),
(9, 'Nacklace 2', 'NO', '20', '125000', 'Y', 'NO', '250'),
(10, 'Nacklace 3', 'NO', '20', '150000', 'Y', 'NO', '250'),
(11, 'Nacklace 4', 'NO', '20', '175000', 'Y', 'NO', '250'),
(12, 'Nacklace 5', 'NO', '20', '150000', 'Y', 'NO', '250'),
(13, 'Earring', 'NO', '18', '25000', 'Y', 'NO', '250'),
(14, 'Earring 1', 'NO', '20', '30000', 'Y', 'NO', '250'),
(15, 'Earring 2', 'NO', '18', '40000', 'Y', 'NO', '250'),
(16, 'Earring 3', 'NO', '18', '45000', 'Y', 'NO', '250'),
(17, 'Earring 4', 'NO', '20', '50000', 'Y', 'NO', '250'),
(18, 'Earring 5', 'NO', '20', '55000', 'Y', 'NO', '250'),
(19, 'NosePin', '18', '18', '1000', 'Y', 'NO', '250'),
(20, 'NosePin 1', '18', '18', '1200', 'Y', 'NO', '250'),
(21, 'NosePin 2', '18', '18', '1500', 'Y', 'NO', '250'),
(22, 'NosePin 3', '18', '18', '2000', 'Y', 'NO', '250'),
(23, 'NosePin 4', '18', '18', '2200', 'Y', 'NO', '250'),
(24, 'NosePin 5', '18', '18', '2500', 'Y', 'NO', '250'),
(25, 'Ring', 'NO', '18', '25000', 'Y', 'NO', '250'),
(26, 'Ring 1', 'NO', '20', '30000', 'Y', 'no', '250'),
(27, 'Ring 2', 'no', '20', '35000', 'Y', 'NO', '250'),
(28, 'Ring 3', 'NO', '18', '37000', 'Y', 'NO', '250'),
(29, 'Ring 4', 'NO', '20', '40000', 'Y', 'NO', '250'),
(30, 'Ring 5', 'NO', '20', '42000', 'Y', 'NO', '250'),
(31, 'Pendent', 'NO', '20', '45000', 'Y', 'NO', '250'),
(32, 'Pendent 1', 'NO', '20', '40000', 'Y', 'NO', '250'),
(33, 'Pendent 2', 'NO', '20', '50000', 'Y', 'NO', '250'),
(34, 'Pendent 3', 'NO', '20', '55000', 'Y', 'NO', '250'),
(35, 'Pendent 4', 'NO', '20', '55000', 'Y', 'NO', '250'),
(36, 'Pendent 5', 'NO', '20', '60000', 'Y', 'NO', '250');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(90) NOT NULL,
  `email` varchar(90) NOT NULL,
  `message` varchar(90) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `message`) VALUES
(9, 'anuja', 'gsh@gmail.com', 'nice'),
(10, 'Pragati', 'pra@gmail.com', 'NICE TO'),
(11, 'ashwini zambare', 'ashwinizambare@gmail.com', 'this project is motivated to all other student....'),
(12, 'aaa', 'pragati@gmail.com', 'very nice'),
(13, 'dipali', 'dips@gmail.com', 'very nice jewellery'),
(14, 'pragati', 'pragati@gmail.com', 'very nice jewellery');

-- --------------------------------------------------------

--
-- Table structure for table `goldprice`
--

CREATE TABLE IF NOT EXISTS `goldprice` (
  `rid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(90) NOT NULL,
  `gcarte` varchar(90) NOT NULL,
  `dcarte` varchar(90) NOT NULL,
  `price` varchar(90) NOT NULL,
  `available` varchar(90) NOT NULL,
  `weight` varchar(70) NOT NULL,
  `delivery` varchar(80) NOT NULL,
  PRIMARY KEY (`rid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `goldprice`
--

INSERT INTO `goldprice` (`rid`, `name`, `gcarte`, `dcarte`, `price`, `available`, `weight`, `delivery`) VALUES
(1, 'mangalsutra 1', '24', '10', '60000', 'Y', '20 grm', '250'),
(2, 'mangalsutra 2', '24', '10', '10000', 'Y', '10 grm', '250'),
(3, 'mangalsutra3', '22', '10', '60000', 'Y', '20 grm', '225'),
(4, 'mangalsutra4', '22', '10', '63000', 'Y', '22grm', '250'),
(5, 'mangalsutra5', '22', '10', '65000', 'Y', '25grm', '250'),
(6, 'mangalsutra6', '22', '10', '36000', 'Y', '12 grm', '250'),
(7, 'ring1', '22', '10', '6000', 'Y', '2 grm', '250'),
(8, 'ring 2', '22', '10', '7500', 'Y', '2.50 grm', '250'),
(9, 'ring 3', '22', '10', '9000', 'Y', '3 grm', '250'),
(10, 'ring 4', '22', '10', '12000', 'Y', '4 grm', '250'),
(11, 'ring 5', '22', '10', '10500', 'Y', '3.50 grm', '250'),
(12, 'ring 6', '22', '10', '7500', 'Y', '2.50 grm', '250'),
(13, 'pendent1', '22', '10', '15000', 'Y', '5 grm', '250'),
(14, 'pendent2', '22', '10', '18000', 'Y', '6 grm', '250'),
(15, 'pendent3', '22', '10', '19500', 'Y', '6.50 grm', '250'),
(16, 'pendent4', '22', '10', '16500', 'Y', '5.50 grm', '250'),
(17, 'pendent5', '22', '10', '21000', 'Y', '7 grm', '250'),
(18, 'pendent6', '22', '10', '19500', 'Y', '6.50 grm', '250'),
(19, 'earring1', '24', 'NO', '12000', 'Y', '4 grm', '250'),
(20, 'earring2', '24', 'NO', '9000', 'Y', '3 grm', '250'),
(21, 'earring3', '22', 'NO', '10500', 'Y', '3.50 grm', '250'),
(22, 'earring4', '24', 'NO', '6000', 'Y', '2 grm', '250'),
(23, 'earring5', '24', 'NO', '10500', 'Y', '3.50 grm', '250'),
(24, 'earring6', '24', 'NO', '12000', 'Y', '4 grm', '250'),
(25, 'nacklace1', '22', 'NO', '90000', 'Y', '30 grm', '250'),
(26, 'nacklace2', '22', 'NO', '75000', 'Y', '20.50 grm', '250'),
(27, 'nacklace3', '22', 'NO', '90000', 'Y', '30 grm', '250'),
(28, 'nacklace4', '22', 'NO', '90000', 'Y', '30 grm', '250'),
(29, 'nacklace 5', '22', 'NO', '120000', 'Y', '40 grm', '250'),
(30, 'nacklace 6', '22', 'NO', '105000', 'Y', '30.50 grm', '250'),
(31, 'Bangle1', '22', 'NO', '30000', 'Y', '10 grm', '250'),
(32, 'Bangle2', '22', 'NO', '45000', 'Y', '10.50 grm', '250'),
(33, 'Bangle3', '22', 'NO', '60000', 'Y', '20 grm', '250'),
(34, 'Bangle4', '22', 'NO', '45000', 'Y', '10.50 grm', '250'),
(35, 'Bangle5', '22', 'NO', '90000', 'Y', '30 grm', '250'),
(36, 'Bangle6', '22', 'NO', '75000', 'Y', '20.50 grm', '250'),
(37, 'Mangtika1', '18', '10', '6000', 'Y', '2 grm', '250'),
(38, 'Mangtika2', '18', '10', '9000', 'Y', '3 grm', '250'),
(39, 'Mangtika3', '18', '10', '9000', 'Y', '3 grm', '260'),
(40, 'Mangtika4', '18', '10', '75000', 'Y', '2.50 grm', '250'),
(41, 'Mangtika5', '18', '10', '10500', 'Y', '10.50 grm', '250'),
(42, 'Mangtika 6', '18', '10', '6000', 'Y', '2 grm', '250');

-- --------------------------------------------------------

--
-- Table structure for table `order2`
--

CREATE TABLE IF NOT EXISTS `order2` (
  `oid` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `bank` varchar(80) NOT NULL,
  PRIMARY KEY (`oid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `order2`
--

INSERT INTO `order2` (`oid`, `user_id`, `bank`) VALUES
(1, 18, 'ICICI'),
(2, 18, 'Axis');

-- --------------------------------------------------------

--
-- Table structure for table `silverprice`
--

CREATE TABLE IF NOT EXISTS `silverprice` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(70) NOT NULL,
  `description` varchar(70) NOT NULL,
  `price` varchar(70) NOT NULL,
  `available` varchar(70) NOT NULL,
  `weight` varchar(70) NOT NULL,
  `delivery` varchar(70) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=59 ;

--
-- Dumping data for table `silverprice`
--

INSERT INTO `silverprice` (`sid`, `name`, `description`, `price`, `available`, `weight`, `delivery`) VALUES
(5, 'ring', 'Pure Silver', '1200', 'Y', '3 grm', '250'),
(6, 'ring1', 'pure silver', '1550', 'Y', '3.50 grm', '250'),
(7, 'ring 2', 'pure silver', '860', 'Y', '2.50 grm', '250'),
(8, 'ring 3', 'pure silver', '1720', 'Y', '4 grm', '250'),
(9, 'ring 4', 'pure silver', '860', 'Y', '2.50 grm', '250'),
(10, 'ring 5', 'pure silver', '1290', 'Y', '3 grm', '250'),
(11, 'pendent', 'pure silver', '2580', 'Y', '6 grm', '250'),
(12, 'pendent 1', 'pure silver', '2150', 'Y', '5 grm', '250'),
(13, 'pendent 2', 'pure silver', '2365', 'Y', '5.50', '250'),
(14, 'pendent 3', 'pure silver', '2795', 'Y', '6.50 grm', '250'),
(15, 'pendent 4', 'pure silver', '3010', 'Y', '7 grm', '250'),
(16, 'pendent 5', 'pure silver', '3225', 'Y', '7.50 grm', '250'),
(17, 'anklate', 'pure silver', '860', 'Y', '2 grm', '250'),
(18, 'anklate 1', 'pure silver', '1290', 'Y', '3 grm', '250'),
(19, 'anklate 2', 'pure silver', '1720', 'Y', '4 grm', '250'),
(20, 'anklate 3', 'pure silver', '1290', 'Y', '3 grm', '250'),
(21, 'anklate 4', 'pure silver', '1550', 'Y', '3.50 grm', '250'),
(22, 'anklate 5', 'pure silver', '1935', 'Y', '4.50', '250'),
(23, 'armlate', 'pure silver', '3440', 'Y', '8 drm', '250'),
(24, 'armlate 1', 'pure silver', '3870', 'Y', '9 grm', '250'),
(25, 'armlate 2', 'pure silver', '4300', 'Y', '10 grm', '250'),
(26, 'armlate 3', 'pure silver', '4515', 'Y', '10.50 grm', '250'),
(27, 'armlate 4', 'pure silver', '4730', 'Y', '11 grm', '250'),
(28, 'anklate 5', 'pure silver', '4995', 'Y', '11.50 grm', '250'),
(29, 'bracelate', 'pure silver', '6880', 'Y', '16 grm', '250'),
(30, 'bracelate 1', 'pure silver', '6450', 'Y', '15 Grm', '250'),
(31, 'bracelate 2', 'pure silver', '6665', 'Y', '15.50 grm', '250'),
(32, 'bracelate 3', 'pure silver', '6020', 'Y', '14 gem', '250'),
(33, 'bracelate 4', 'pure silver', '6225', 'Y', '14.5 grm', '250'),
(34, 'bracelate 5', 'pure silver', '7095', 'Y', '16.50 grm', '250'),
(35, 'brooches', 'pure silver', '4300', 'Y', '10 grm', '250'),
(36, 'brooches 1', 'pure silver', '4515', 'Y', '10.50 grm', '250'),
(37, 'brooches 2', 'pure silver', '4730', 'Y', '11 grm', '250'),
(38, 'brooches 3', 'pure silver', '4995', 'Y', '11.50 grm', '250'),
(39, 'brooches 4', 'pure silver', '3870', 'Y', '9 grm', '250'),
(40, 'brooches 5', 'pure silver', '4095', 'Y', '9.50 grm', '250'),
(41, 'hairpin', 'pure silver', '1290`', 'Y', '3 grm', '250'),
(42, 'hairpin 1', 'pure silver', '1720', 'Y', '4 grm', '250'),
(43, 'hairpin 2', 'pure silver', '2150', 'Y', '5 grm', '250'),
(44, 'hairpin 3', 'pure silver', '2580', 'Y', '6 grm', '250'),
(45, 'hairpin 4', 'pure silver', '3010', 'Y', '7 grm', '250'),
(46, 'hairpin 5', 'pure silver', '3055', 'Y', '6.50 grm', '250'),
(47, 'earring', 'pure silver', '1720', 'Y', '4 grm', '250'),
(48, 'earring1', 'pure silver', '1935', 'Y', '4. grm', '250'),
(49, 'earring 2', 'pure silver', '2250', 'y', '5 grm', '250'),
(50, 'earring 3', 'pure silver', '1575', 'Y', '3.50 grm', '250'),
(51, 'earring 4', 'pure silver', '2025', 'Y', '4.50 grm', '250'),
(52, 'earring 5', 'pure silver', '1575', 'Y', '3.50 grm', '250'),
(53, 'chain', 'pure silver', '3150-', 'Y', '7 grm', '250'),
(54, 'chain 1', 'pure silver', '3375', 'Y', '7.50 grm', '250'),
(55, 'chain 2', 'pure silver', '3375', 'Y', '7.50 grm', '250'),
(56, 'chain 3', 'pure silver', '3600', 'Y', '8 grm', '250'),
(57, 'chain 4', 'pure silver', '3825', 'Y', '8.50 grm', '250'),
(58, 'chain 5', 'pure silver', '4050', 'Y', '9 grm', '250');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(60) NOT NULL,
  `pass` varchar(60) NOT NULL,
  `username` varchar(60) NOT NULL,
  `address` varchar(60) NOT NULL,
  `city` varchar(60) NOT NULL,
  `phone` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `login`, `pass`, `username`, `address`, `city`, `phone`, `email`) VALUES
(1, 'anuja', '12345', 'pragati', 'karjat', 'karjat', '9860812020', 'anu@gmail.com'),
(2, '1', '12345', 'pragati', 'karjat', 'karjat', '9860812020', 'pragati@gmail.com'),
(3, '1', '123456', 'pragati', 'dighi', 'karjat', '9860812020', 'samp@gamil.com'),
(4, '2', 'bbbbbb', 'dzg', 'exgx', 'xghnh ', '9665801401', 'aa@gmail.com'),
(5, '1', '1234', 'aaa', 'sss', 'xxx', '9860812020', 'samp@gmail.com'),
(6, 'Ashwini', '0000', 'Ashwini', 'AT/PO karjat', 'Karjat', '9874563210', 'Ashwini@mail.com'),
(7, '1', '1234567', 'ashu', 'karjat', 'karjat', '7757899162', 'ashwinizambare1101@gmail.com'),
(8, '1', '1234567', 'ashu', 'karjat', 'karjat', '7757899162', 'ashwinizambare1101@gmail.com'),
(9, '3', '123456', 'ssss', 'aaaaa', 'llllll', '98660812020', 'ashwinizambare1101@gmail.com'),
(10, '3', '1234', 'ssss', 'aaaaa', 'llllll', '98660812020', 'ashwinizambare1101@gmail.com'),
(11, '55', '123456', 'ssss', 'aaaaa', 'llllll', '98660812020', 'ashwinizambare1101@gmail.com'),
(12, '55', '12345', 'ssss', 'aaaaa', 'llllll', '98660812020', 'ashwinizambare1101@gmail.com'),
(13, '27', 'aaaa', 'pragati', 'Karjat', 'karjat', '9558247896', 'pragati@gmail.com'),
(14, '77', '777777', 'tt', 'ee', 'ee', '9665801401a', 'anu@gmail.com'),
(15, '123', '12', 'ashu', 'karjat', 'anagar', '21345689', 'ashwinizambare1101@gmail.com'),
(16, 'anu', '12345', 'aaa', 'aaa', 'sss', '9860812020', 'samp@gmail.com'),
(17, 'anu', '12345', 'aaa', 'aaa', 'sss', '9860812020', 'samp@gmail.com'),
(18, 'Anu', 'anu', 'anu', 'chapadgoan', 'karjat', '9665401801', 'anu@gmail.com');
