-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 28, 2020 at 12:28 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `urcart`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` double(9,2) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pid`, `name`, `price`) VALUES
(2, 'RED T-SHIRT', 50.00),
(3, 'Men Yellow T-Shirt', 30.00),
(5, 'Men Navy Blue Hood', 80.00),
(4, 'Men Sea Green T-Shirt', 60.00),
(6, 'Women Grey Top', 40.00),
(7, 'Women White Top', 70.00),
(8, 'Women Teal Blue Top', 85.00),
(9, 'Women Blacl Solid Styled Top', 90.00),
(10, 'Men Off White And Blue Shoes', 80.00),
(11, 'PUMA Men Black Shoes', 100.00),
(12, 'NIKE Women Training Shoes', 250.00),
(13, 'EL PASO Sports Shoes', 75.00),
(14, 'Women Pink Shoes', 95.00),
(15, 'PUMA lack Sneakers', 90.00),
(16, 'ADIDAS Men Sneakers', 250.00),
(17, 'ADIDAS Woven Style Shoes', 230.00),
(18, 'Men Olive Green Trousers', 85.00),
(19, 'Hilfiger Men Biege  Trousers', 115.00),
(20, 'Women Regular Fit Trousers', 100.00),
(21, 'Roadster Women Charcoal Grey Trousers', 75.00),
(22, 'molife Unisex Smart-watch', 290.00),
(23, 'NOISE Unisex Smart-watch', 260.00),
(24, 'FASTRACK Smart-Band', 190.00),
(25, 'FOSSIL Men Smart-watch', 280.00);

-- --------------------------------------------------------

--
-- Table structure for table `userprod`
--

DROP TABLE IF EXISTS `userprod`;
CREATE TABLE IF NOT EXISTS `userprod` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usersId` varchar(100) NOT NULL,
  `pid` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=97 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userprod`
--

INSERT INTO `userprod` (`id`, `usersId`, `pid`) VALUES
(34, 'Ankur', '2'),
(35, 'Ankur', '18'),
(36, 'Ankur', '10'),
(37, 'Ankur', '4'),
(38, 'Pranshu', '4'),
(39, 'Pranshu', '10'),
(40, 'Pranshu', '9'),
(41, 'Pranshu', '15'),
(42, 'Shyam', '17'),
(43, 'Shyam', '4'),
(44, 'Shyam', '18'),
(45, 'Ashish', '4'),
(46, 'Ashish', '10'),
(47, 'Ashish', '17'),
(48, 'Amit', '4'),
(49, 'Amit', '3'),
(50, 'Amit', '2'),
(51, 'Arun', '4'),
(52, 'Arun', '10'),
(53, 'Arun', '21'),
(54, 'Tarun', '4'),
(55, 'Tarun', '23'),
(56, 'Tarun', '22'),
(57, 'Ankit', '4'),
(58, 'Ankit', '3'),
(59, 'Ankit', '2'),
(60, 'Sachin', '4'),
(61, 'Sachin', '3'),
(62, 'Sachin', '24'),
(63, 'Sanchit', '4'),
(64, 'Sanchit', '21'),
(65, 'Sanchit', '15'),
(66, 'Priya', '7'),
(67, 'Priya', '8'),
(68, 'Priya', '5'),
(69, 'Riya', '7'),
(70, 'Riya', '6'),
(71, 'Riya', '5'),
(72, 'Jyoti', '8'),
(73, 'Jyoti', '11'),
(74, 'Jyoti', '7'),
(75, 'Urooz', '19'),
(76, 'Urooz', '16'),
(77, 'Urooz', '7'),
(78, 'Sakshi', '23'),
(79, 'Sakshi', '23'),
(80, 'Sakshi', '7'),
(81, 'Madhu', '20'),
(82, 'Madhu', '7'),
(83, 'Madhu', '11'),
(84, 'Neeti', '7'),
(85, 'Neeti', '14'),
(86, 'Neeti', '13'),
(87, 'Shruti', '7'),
(88, 'Shruti', '20'),
(89, 'Shruti', '21'),
(90, 'Rekha', '7'),
(91, 'Rekha', '23'),
(92, 'Rekha', '21'),
(93, 'Jaya', '7'),
(94, 'Jaya', '21'),
(95, 'Jaya', '19'),
(96, 'Rahul', '5');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `usersId` int(11) NOT NULL AUTO_INCREMENT,
  `usersName` varchar(128) NOT NULL,
  `usersEmail` varchar(128) NOT NULL,
  `usersPwd` varchar(128) NOT NULL,
  `Addressline1` varchar(300) NOT NULL,
  `Addressline2` varchar(300) NOT NULL,
  `gender` text NOT NULL,
  `country` text NOT NULL,
  `PinCode` bigint(255) NOT NULL,
  `district` text NOT NULL,
  `contact` bigint(20) NOT NULL,
  PRIMARY KEY (`usersId`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`usersId`, `usersName`, `usersEmail`, `usersPwd`, `Addressline1`, `Addressline2`, `gender`, `country`, `PinCode`, `district`, `contact`) VALUES
(12, 'Amit', 'amit322@gmail.com', '0cb1eb413b8f7cee17701a37a1d74dc3', 'H.no 821', 'Sector 4', 'male', 'India', 136118, 'Kurukshetra', 8457165936),
(11, 'Ashish', 'ash34@gmail.com', '7b69ad8a8999d4ca7c42b8a729fb0ffd', 'h.no 115', 'Sector 7', 'male', 'India', 136118, 'Kurukshetra', 7854691231),
(9, 'Pranshu', 'pranshu1@gmail.com', 'a6d420cb77a4b29af1c5f58dd6877401', 'h.no 665', 'Sector 8', 'male', 'India', 136118, 'Kurukshetra', 9764582156),
(7, 'Ankur', 'ankurvermaaxz@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'H.no 589', 'Sector 2', 'male', 'India', 136118, 'Kurukshetra', 9996492589),
(10, 'Shyam', 'shyam55@gmail.com', '5a4cd850fc787d454416aa3a47580468', 'h.no 143', 'Sector 7', 'male', 'India', 136118, 'Kurukshetra', 9475214598),
(13, 'Arun', 'arun21@gmail.com', '722279e9e630b3e731464b69968ea4b4', 'h.no 637', 'Sector 7', 'male', 'India', 136118, 'Kurukshetra', 7554862231),
(14, 'Tarun', 'tarun677@gmail.com', '4ec6b242322a0139def69c6380c7aa27', 'h.no 443', 'Sector 5', 'male', 'India', 136118, 'Kurukshetra', 9654785214),
(15, 'Ankit', 'ankit52@gmail.com', '447d2c8dc25efbc493788a322f1a00e7', 'h.no 1662', 'Sector 5', 'male', 'India', 136118, 'Kurukshetra', 9998456328),
(16, 'Sachin', 'sachin33@gmail.com', '15285722f9def45c091725aee9c387cb', 'H.no 889', 'Sector 4', 'male', 'India', 136118, 'Kurukshetra', 9547126475),
(17, 'Sanchit', 'sanchit77@gmail.com', '928bd32ad41e03b097962ed5d69c7e54', 'H.no 1589', 'Sector 13', 'male', 'India', 136118, 'Kurukshetra', 9745625412),
(18, 'Priya', 'priya33@gmail.com', '0b1c8bc395a9588a79cd3c191c22a6b4', 'H.no 5899', 'Sector 13', 'female', 'India', 136118, 'Kurukshetra', 9478856945),
(19, 'Riya', 'riya76@gmail.com', '3153be13ca91e847668fbf430757a0b5', 'h.no 1665', 'Sector 5', 'male', 'India', 136118, 'Kurukshetra', 8451236785),
(20, 'Jyoti', 'jyoti322@gmail.com', '1411a3e2bd0e7c77fd51adc1e17a834e', 'h.no 1437', 'Sector 7', 'female', 'India', 136118, 'Kurukshetra', 7568841296),
(21, 'Urooz', 'urooz180@gmail.com', 'b1ede8caf37f83f0d754d9e80faa5399', 'h.no 715', 'Sector 2', 'gender', 'India', 136118, 'Kurukshetra', 9471236482),
(22, 'Sakshi', 'sakshi764@gmail.com', 'c838f72ee34c09deb620d4d7c11e2b0e', 'H.no 5859', 'Sector 7', 'female', 'India', 136118, 'Kurukshetra', 7777555544),
(23, 'Madhu', 'madhu775@gmail.com', '84811fed582a9c7b8cb41f68f0ed6147', 'h.no 1665', 'Sector 4', 'female', 'India', 136118, 'Kurukshetra', 8987456321),
(24, 'Neeti', 'neeti70@gmail.com', '1a39b1d6c406dde190d38d3c2af2ebe8', 'h.no 1664', 'Sector 13', 'female', 'India', 136118, 'Kurukshetra', 9999751234),
(25, 'Shruti', 'shruti919@gmail.com', 'eab6930b3c87b22874b40a0e52fe1ca3', 'h.no 699', 'Sector 7', 'female', 'India', 136118, 'Kurukshetra', 9875364897),
(26, 'Rekha', 'rekha33@gmail.com', '056062863ed19a32787a3ae9e1117d5e', 'h.no 779', 'Sector 2', 'female', 'India', 136118, 'Kurukshetra', 9647258135),
(27, 'Jaya', 'jaya64@gmail.com', 'ce9689abdeab50b5bee3b56c7aadee27', 'h.no 234', 'Sector 5', 'male', 'India', 136118, 'Kurukshetra', 9841896325),
(28, 'cherish', 'cher45@gmail.com', '7beff0fb4177ff198e6a3a3389197fda', 'h.no 1430', 'Sector 13', 'male', 'India', 136118, 'Kurukshetra', 9654285147),
(29, 'Rahul', 'rychapra@gmail.com', '439ed537979d8e831561964dbbbd7413', 'h.no 967', 'Tilpat', 'male', 'India', 121003, 'Faridabad', 8802345247);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
