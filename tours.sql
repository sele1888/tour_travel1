-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 28, 2017 at 01:05 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tours`
--
CREATE DATABASE IF NOT EXISTS `tours` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `tours`;

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE IF NOT EXISTS `cars` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `carBaordnumber` varchar(80) NOT NULL,
  `carSideNumber` varchar(11) NOT NULL,
  `carLevel` varchar(80) NOT NULL,
  `carCurrentCity` varchar(80) NOT NULL,
  `rate` varchar(11) NOT NULL,
  `img` varchar(80) NOT NULL,
  `username` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `carBaordnumber`, `carSideNumber`, `carLevel`, `carCurrentCity`, `rate`, `img`, `username`) VALUES
(1, 'ET 0123', '5632', 'bus', 'Dessie', '403', 'a11.JPG', 'Tourist'),
(2, 'ET 00670', '1211', 'home car', 'Gonder', '350', '04.jpg', 'Tourist'),
(3, 'ET 01121', '1010', 'First', 'BaherDar', '250', 'tr2.png', 'Tourist'),
(4, 'ET 00231', '3003', 'Second', 'Lilibla', '500', 'images (72).jpg', 'Tourist'),
(6, 'ET 23545', '2121', 'toyeto', ' woldya', '1162', 'tr2.png', 'Tourist'),
(7, 'ET 00987', '0098', 'loneshen', 'Dessie', '320', 'PhotoFunia-66caa7.gif', 'Tourist');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE IF NOT EXISTS `history` (
  `history_id` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(50) NOT NULL,
  `data` varchar(50) NOT NULL,
  `action` varchar(50) NOT NULL,
  `user` varchar(50) NOT NULL,
  PRIMARY KEY (`history_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=63 ;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`history_id`, `date`, `data`, `action`, `user`) VALUES
(1, '2015-06-19 17:48:44', 'fentaw goreg', 'Login', 'Admin'),
(2, '2015-06-19 18:12:52', 'mohammed&nbsp;hessen', 'Add User', ''),
(3, '2015-06-19 18:14:07', 'biniyem&nbsp;semene', 'Add User', ''),
(4, '2015-06-19 18:15:35', 'toyeba&nbsp;yemem', 'Add User', ''),
(5, '2015-06-19 18:16:44', 'mohammed hessen', 'Login', 'Admin'),
(6, '2015-06-19 18:21:45', 'mohammed hessen', 'Login', 'Admin'),
(7, '2015-06-19 18:23:33', 'mohammed hessen', 'Logout', 'Admin'),
(8, '2015-06-19 19:31:39', 'tras&nbsp;yemam', 'Add User', ''),
(9, '2015-06-19 19:31:55', ' ', 'Login', ''),
(10, '2015-06-19 19:32:26', ' ', 'Login', ''),
(11, '2015-06-19 19:43:03', 'toyeba yemem', 'Login', 'tourist'),
(12, '2015-06-20 01:39:38', 'biniyem semene', 'Login', 'operator'),
(13, '2015-06-20 01:39:45', 'biniyem semene', 'Logout', 'operator'),
(14, '2015-06-20 01:42:39', 'toyeba yemem', 'Login', 'tourist'),
(15, '2015-06-20 02:29:55', 'samule&nbsp;abebe', 'Add User', ''),
(16, '2015-06-20 02:35:28', ' ', 'Delete User', ''),
(17, '2015-06-20 02:36:01', ' ', 'Delete User', ''),
(18, '2015-06-20 02:36:16', ' ', 'Delete User', ''),
(19, '2015-06-20 02:41:47', 'Join&nbsp;alemu', 'Add User', ''),
(20, '2015-06-20 02:45:35', 'tadese&nbsp;lamesgne', 'Add User', ''),
(21, '2015-06-20 03:04:09', 'tras yemam', 'Login', 'tourist'),
(22, '2015-06-20 03:06:24', 'biniyem semene', 'Login', 'operator'),
(23, '2015-06-20 03:07:44', 'tadese lamesgne', 'Login', 'operator'),
(24, '2015-06-20 03:08:51', 'toyeba yemem', 'Login', 'tourist'),
(25, '2015-06-20 03:10:00', 'mohammed hessen', 'Login', 'Admin'),
(26, '2015-06-20 03:11:06', 'mohammed hessen', 'Login', 'Admin'),
(27, '2015-06-20 04:05:23', 'samule abebe', 'Login', 'tourist'),
(28, '2015-06-20 04:18:15', 'toyeba yemem', 'Login', 'tourist'),
(29, '2015-06-20 04:24:50', 'toyeba yemem', 'Login', 'tourist'),
(30, '2015-06-20 16:24:57', 'toyeba&nbsp;mubarek', 'Add User', ''),
(31, '2015-06-20 16:28:46', 'toyeba mubarek', 'Login', 'tourist'),
(32, '2015-06-20 16:44:15', 'mohammed hessen', 'Login', 'Admin'),
(33, '2015-06-20 16:56:34', 'volt&nbsp;yuhenes', 'Add User', ''),
(34, '2015-06-20 17:02:02', 'mohammed hessen', 'Logout', 'Admin'),
(35, '2015-06-20 17:02:26', 'volt yuhenes', 'Login', 'operator'),
(36, '2015-06-20 17:13:57', 'toyeba yemem', 'Login', 'tourist'),
(37, '2015-06-20 17:18:33', 'mohammed hessen', 'Login', 'Admin'),
(38, '2015-06-20 17:20:16', 'mohammed hessen', 'Login', 'Admin'),
(39, '2015-06-20 17:22:28', 'mohammed hessen', 'Login', 'Admin'),
(40, '2015-06-20 17:45:45', 'mohammed hessen', 'Login', 'Admin'),
(41, '2015-06-20 18:29:40', 'biniyem semene', 'Login', 'operator'),
(42, '2015-06-20 18:31:06', 'mohammed hessen', 'Login', 'Admin'),
(43, '2015-06-20 18:39:30', 'toyeba yemem', 'Login', 'tourist'),
(44, '2015-06-20 19:09:16', 'toyeba yemem', 'Logout', 'tourist'),
(45, '2015-06-20 19:09:25', 'mohammed hessen', 'Login', 'Admin'),
(46, '2015-06-20 19:30:38', 'toyeba yemem', 'Login', 'tourist'),
(47, '2015-06-20 19:35:53', 'mohammed hessen', 'Login', 'Admin'),
(48, '2015-06-20 19:36:25', 'mohammed hessen', 'Logout', 'Admin'),
(49, '2015-06-20 19:40:44', 'mohammed hessen', 'Login', 'Admin'),
(50, '2015-06-20 19:40:56', 'mohammed hessen', 'Logout', 'Admin'),
(51, '2015-06-20 19:45:25', 'toyeba yemem', 'Login', 'tourist'),
(52, '2015-06-20 19:54:21', 'toyeba yemem', 'Logout', 'tourist'),
(53, '2015-06-20 19:55:18', 'biniyem semene', 'Login', 'operator'),
(54, '2015-06-20 19:57:49', 'biniyem semene', 'Logout', 'operator'),
(55, '2015-06-20 19:57:55', 'biniyem semene', 'Login', 'operator'),
(56, '2015-06-20 19:58:00', 'biniyem semene', 'Logout', 'operator'),
(57, '2015-06-20 19:58:25', 'mohammed hessen', 'Login', 'Admin'),
(58, '2015-06-20 20:07:25', 'mohammed hessen', 'Logout', 'Admin'),
(59, '2017-03-28 02:30:48', 'mohammed hessen', 'Login', 'Admin'),
(60, '2017-03-28 03:02:10', 'mohammed hessen', 'Logout', 'Admin'),
(61, '2017-03-28 03:08:41', 'mohammed hessen', 'Login', 'Admin'),
(62, '2017-03-28 03:27:24', 'mohammed hessen', 'Logout', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE IF NOT EXISTS `hotel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hotelname` varchar(70) NOT NULL,
  `roomno` varchar(11) NOT NULL,
  `category` varchar(70) NOT NULL,
  `price` varchar(11) NOT NULL,
  `status` varchar(70) NOT NULL,
  `start` varchar(70) NOT NULL,
  `end` varchar(70) NOT NULL,
  `img` varchar(70) NOT NULL,
  `username` varchar(70) NOT NULL,
  `totalroom` varchar(70) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`id`, `hotelname`, `roomno`, `category`, `price`, `status`, `start`, `end`, `img`, `username`, `totalroom`) VALUES
(1, 'Roha Hotel', '1', 'single', '100', 'available', '2015-06-15', '2015-06-16', '11.jpg', 'Tourist', '35'),
(2, 'Genet Hotel', '5', 'double', '348', 'reserved', '2015-06-10', '2015-06-15', '14.jpg', 'Tourist', '35'),
(3, 'Sevene Olibes Hotel', '1', 'single', '90', 'reserved', '2015-06-15', '2015-06-16', 'a1.jpg', 'Tourist', '30'),
(4, 'Bluelale  Hotel', '2', 'double', '140', 'available', '2015-06-15', '2015-06-16', 'a2.jpg', 'Tourist', '30'),
(5, 'Bete Abriham  Hotel', '5', 'double', '324', 'available', '2015-06-15', '2015-06-16', 'aa7.jpeg', 'Tourist', '50'),
(6, 'Tana Hotel', '2', 'double', '200', 'reserved', '2015-07-15', '2015-07-16', 'aa7.jpeg', 'Tourist', '50'),
(7, 'Genet Hotel', '1', 'double', '120', 'available', '2015-06-15', '2015-06-16', 'a5.jpg', 'Tourist', '25'),
(8, 'Time Hotel', '1', 'double', '106', 'available', '2015_04-02', '2015_04_12', 'a5.jpg', 'Tourist', '25'),
(9, 'GoldnGet Hotel', '1', 'single', '100', 'reserved', '2015-06-25', '2015-06-26', 'b6.jpeg', 'Tourist', '40');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `message_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(500) NOT NULL,
  PRIMARY KEY (`message_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`message_id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'nuru', 'nur@gmail.com', 'wellcom', 'tour and travel'),
(2, 'yimer', 'holl@gmail.com', 'hello', 'well come to agency'),
(3, 'bobol', 'seid@gmail.com', 'go', 'seid seiawe'),
(5, 'mekin', 'gogol@gmail.com', 'well', 'come to samera'),
(9, 'biniam', 'bino@gmail.com', 'hi', ' good service thank'),
(10, 'gogele', 'gogle@gmail.com', 'hi', 'the system is good'),
(11, 'toyeba', 'doo@gmail.com', 'hi', 'i hi good visiting time thank');

-- --------------------------------------------------------

--
-- Table structure for table `operator`
--

CREATE TABLE IF NOT EXISTS `operator` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `operator`
--

INSERT INTO `operator` (`id`, `name`, `username`, `email`, `password`) VALUES
(1, 'mohammed', 'operator', 'muba@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(2, 'kelil', 'ooohjgfd', 'hus@gmail.com', 'e2fc714c4727ee9395f324cd2e7f331f'),
(3, 'asgfhkjsf', 'opjhsfd', 'hfgs@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `touristsite` varchar(64) NOT NULL,
  `name` varchar(64) NOT NULL,
  `confirmation` varchar(64) NOT NULL,
  `total` varchar(64) NOT NULL,
  `design` varchar(64) NOT NULL,
  `note` varchar(64) NOT NULL,
  `firstname` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `hotelname` varchar(64) NOT NULL,
  `roomno` varchar(64) NOT NULL,
  `category` varchar(64) NOT NULL,
  `price` varchar(64) NOT NULL,
  `carLevel` varchar(64) NOT NULL,
  `carSideNumber` varchar(64) NOT NULL,
  `rate` varchar(64) NOT NULL,
  `year` varchar(64) DEFAULT NULL,
  `permission` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `touristsite`, `name`, `confirmation`, `total`, `design`, `note`, `firstname`, `email`, `hotelname`, `roomno`, `category`, `price`, `carLevel`, `carSideNumber`, `rate`, `year`, `permission`) VALUES
(1, '2', 'Tis Abay', '1', '1000', 'design/Abi.jpg', 'good', 'mohammed', 'mubarek1@gmail.com', 'samerLand ', '1', 'double', '100', 'home car', '1211', '350', '2015-06-15', NULL),
(2, '2', 'Simien Mountains National Park', '1', '460', 'design/a6.png', 'hi', 'terehes', 'con@gmail.com', 'Bluelale Hotel', '1', 'single', '90', 'First', '1010', '250', '2015-06-15', NULL),
(3, '5', 'Gonder Fasiladas', '1', '300', 'design/IMG_20150506_053106.jpg', 'well', 'biniyem', 'bini@gmail.com', 'Sevat Wayra  Hotel', '1', 'double', '100', 'Second', '3003', '500', '2015-06-15', ''),
(4, '10', 'Bete Giorgis /House of St. ', '', '', 'Image0013.jpg', 'sectember 1 2016 i will come', 'toyeba', 'doo@gmail.com', 'Lale Hotel', '21', 'single', '100', 'bus', '5632', '1243', '2016-09-01', NULL),
(5, '3', 'The Zegie Peninsula ', '1', '1305', 'design/Image0080.jpg', 'well', 'biniyem', 'bini@gmail.com', 'Aman  Hotel', '23', 'single', '90', 'loneshen', '0098', '320', '2016-09-01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `register_id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `sex` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(60) NOT NULL,
  `startdate` varchar(100) NOT NULL,
  `year` varchar(100) NOT NULL,
  `month` varchar(100) NOT NULL,
  `password` varchar(60) NOT NULL,
  `address_type` varchar(100) NOT NULL,
  `user_type` varchar(64) NOT NULL,
  PRIMARY KEY (`register_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`register_id`, `firstname`, `lastname`, `username`, `sex`, `address`, `city`, `email`, `contact`, `startdate`, `year`, `month`, `password`, `address_type`, `user_type`) VALUES
(1, 'mohammed', 'hessen', 'tourist', 'Male', 'dawudo', 'dessie', 'mubarek1@gmail.com', '0931489554', '2015-06-19 16:17:54', '2015-06-15', '2015-06-18', 'abcd', 'semer', ''),
(2, 'terehes', 'yemam', 'computer', 'Fmale', 'mekele', 'tegeray', 'con@gmail.com', '095423617', '2015-06-19 16:27:27', '2015-06-15', '2015-06-18', 'comp', 'semera', 'tourist'),
(3, 'biniyem', 'semene', 'bini', 'Male', 'baherdar', 'gojjam', 'bini@gmail.com', '0924567843', '2015-06-19 17:32:01', '2015-06-15', '2015-06-17', 'abcd', 'semera', 'tourist'),
(4, 'toyeba', 'mubarek', 'bolon', 'Fmale', 'athelaneta', 'new work', 'doo@gmail.com', '0978654323', '2015-06-20 16:22:51', '2016-09-01', '2016-09-09', 'abcd', 'afar', 'tourist');

-- --------------------------------------------------------

--
-- Table structure for table ` reservation`
--

CREATE TABLE IF NOT EXISTS ` reservation` (
  ` reservation_id` int(6) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(60) NOT NULL,
  `city` varchar(60) NOT NULL,
  `address` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `contact` varchar(60) NOT NULL,
  `payable` varchar(50) NOT NULL,
  `status` varchar(70) NOT NULL,
  `confirmation` varchar(60) NOT NULL,
  `delivery` varchar(50) NOT NULL,
  `date` varchar(40) NOT NULL,
  `time` varchar(40) NOT NULL,
  PRIMARY KEY (` reservation_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE IF NOT EXISTS `schedule` (
  `schedule_id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `address` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `touristsite` varchar(100) NOT NULL,
  `othersite` varchar(100) NOT NULL,
  `day` varchar(50) NOT NULL,
  `year` varchar(64) NOT NULL,
  `month` varchar(64) NOT NULL,
  `hotelname` varchar(64) NOT NULL,
  `roomno` varchar(64) NOT NULL,
  `carLevel` varchar(64) NOT NULL,
  `carSideNumber` varchar(64) NOT NULL,
  PRIMARY KEY (`schedule_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`schedule_id`, `fullname`, `city`, `address`, `email`, `contact`, `touristsite`, `othersite`, `day`, `year`, `month`, `hotelname`, `roomno`, `carLevel`, `carSideNumber`) VALUES
(1, 'seid', 'ethiopia', 'dessia', 'sewq@gmail.com', '0931234', '', '', 'Monday  Wednesday  ', '', '', '', '', '', ''),
(2, 'bolo', 'Dessie', 'your', 'fool@', '9666', 'Bhardar', '', 'Monday    Friday', '', '', '', '', '', ''),
(3, 'wel', 'des', 'qaws', 'asdx', '435', 'The Zegie Peninsula', '', '  Wednesday  ', '', '', '', '', '', ''),
(4, 'mohammed', 'dess', 'qwert', 'weee@gmail.com', '0943256', 'Bete Giorgis /House of St. ', '', '  Wednesday  Friday', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tourist_site`
--

CREATE TABLE IF NOT EXISTS `tourist_site` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `img` varchar(64) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(6) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `tourist_site`
--

INSERT INTO `tourist_site` (`id`, `img`, `name`, `price`, `description`) VALUES
(8, '12.JPG', 'Tis Abay', '2154', 'Thirty kilometers south of Bahir Dar, there is a spectacular basalt cliff where the Nile forms an incredible falls of 45 meters high, known as the Blue Nile falls. The noise, the force and the smoke created by this fall is really worth discovering. The Blue Nile Falls is locally called Tis Abay, literally meaning water that smokes.'),
(9, 'h9.JPG', 'Bahrdar', '2145', 'Founded during the first decades of the 20thc. at the Southern tip of Lake Tana and   along sides of the Blue Nile, Bahir Dar has gone on to become the foremost tourist destination of North Western Ethiopia. The city has an altitude of 1830 meters above sea  level and a tropical climate with an average temperature of 190c. At Bahir Dar days can be spent by strolling through palm-lined avenues, lake side vistas, and exploring the Nile, and the negede Woito (clan of Woitos’) village, viewing spectacular sun set and riding a bicycle. St George church and the 16thc one storied Portuguese building in the same compound are also worth visiting.'),
(10, 'h5.JPG', 'The Zegie Peninsula', '2157', 'Situated to the south west edge of Lake Tana, and  20 kilometers from Bahir Dar, the Zegie peninsula  is covered by a dense  tropical forest .Walking through the forest toped by birds and  monkeys and bathed by the fragrance of strange flowers leads to the reverend monasteries in the near by.'),
(11, 'b11.JPG', 'Gonder Fasiladas', '1568', 'Gondar is positioned in Northwestern Ethiopia, at about 740 and 175 kilometers away from Addis Ababa and Bahir-Dar respectively. Its altitude is 2200 meters above sea level.  Founded by emperor Fasiladas in 1636, the city of Gondar had been the seat of the Ethiopian state for about 250 years. The foundation of this Imperial city witnessed a period of optimism and renaissance of the golden days of Aksum and Lalibela. Architecture, literature, education, music, painting commerce that had been perished after the fall of ancient Aksum, rose to prominence.'),
(12, 'f.PNG', 'Shadey Festival Shadey', '1325', 'This traditional game is conducting every year from September 1-16E.C. This long aged game is celebrated during night time Especially it is very lovely game by male youngsters, youngsters dividing themselves in different group. First they warmed the circle black stone by fire and they start the competition. After the stone is warmed then throwing in to the field the most competent group will catch and turn in to the fire place.  The group that catch and turn the stone in to the fire place will be the winner of the game.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(60) NOT NULL,
  `last_name` varchar(60) NOT NULL,
  `user_name` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `ability` varchar(60) NOT NULL,
  `user_type` varchar(60) NOT NULL,
  `Question` varchar(60) NOT NULL,
  `answer` varchar(60) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `user_name`, `password`, `email`, `ability`, `user_type`, `Question`, `answer`) VALUES
(1, 'mohammed', 'hessen', 'abc', 'abc', 'shemeles@gmail.com', 'admin', 'Admin', '1. What is your beloved ancle name?', 'chiled'),
(2, 'biniyem', 'semene', 'aaa', 'aaa', 'bini@gmail.com', 'operator to guide tour', 'operator', '1. What is your beloved ancle name?', 'tour'),
(3, 'toyeba', 'yemem', 'ttt', 'ttt', 'toye@gmail.com', 'researcher', 'tourist', '1. What is your beloved ancle name?', 'visit'),
(4, 'tras', 'yemam', 'aaaa', 'aaaa', 'tra@gmail.com', 'tourist', 'tourist', '1. What is your love?', 'food'),
(5, 'samule', 'abebe', 'almaze', '1234', 'alma@gmail.com', 'exllent', 'tourist', '1. What is your love?', 'ewwee'),
(6, 'Join', 'alemu', 'asdffdn', '26465', 'gfdghg@gmail.com', 'to view hote reserv', 'operator', '1. What is your love?', 'opera'),
(7, 'tadese', 'lamesgne', 'germa', '12344ad', 'aswe@gmail.com', 'to viewtourist place', 'operator', '1. What is your love?', 'yes'),
(8, 'toyeba', 'mubarek', 'bolon', '1234', 'doo@gmail.com', 'resaecher to human fucilic', 'tourist', '1. What is your love?', 'see afar'),
(9, 'volt', 'yuhenes', 'bbb', 'bbb', 'fool@gmail.com', 'runner', 'operator', '1. What is your love?', 'guide');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
