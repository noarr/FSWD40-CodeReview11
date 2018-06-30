-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2018 at 04:38 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cr11_nora_horvath_php_car_rental`
--

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `id` int(11) NOT NULL,
  `model` varchar(255) NOT NULL,
  `IMG` varchar(255) DEFAULT NULL,
  `year` date DEFAULT NULL,
  `status` varchar(25) DEFAULT NULL,
  `FK_media` int(11) DEFAULT NULL,
  `location` double NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`id`, `model`, `IMG`, `year`, `status`, `FK_media`, `location`, `latitude`, `longitude`) VALUES
(1, 'Trabant', 'trabant.jpg', '2010-06-11', 'in', 1, 0, 48.0945787638212, 16.58945695898433),
(2, 'Volvo', 'volvo.jpg', '2012-06-12', 'in', 2, 0, 48.13125468127064, 16.407495899414016),
(3, 'Wartburg', 'wartburg.jpg', '2010-08-20', 'out', 3, 0, 48.16882033154756, 16.25437395117183),
(4, 'Lada', 'lada.jpg', '2011-06-18', 'out', 4, 0, 48.1614926078484, 16.228968067382766),
(5, 'BMW', 'bmw.jpg', '2013-06-05', 'out', 5, 0, 48.19537455451155, 16.32578508398433),
(6, 'Honda', 'honda.jpg', '2013-06-11', 'in', 5, 0, 48.19537455451155, 16.325785032535236),
(7, 'Honda', 'honda.jpg', '2017-06-11', 'in', 6, 0, 48.195374234231124, 16.3257823452352),
(8, 'KIA', 'kia.jpg', '2013-06-05', 'in', 6, 0, 48.19537412312323, 16.32578525235235),
(9, 'LADA', 'lada.jpg', '2010-08-28', 'out', 4, 0, 48.1953745234235, 16.32523525245626),
(10, 'MERCEDES', 'mercedes.jpg', '2010-06-11', 'in', 1, 0, 48.19537424323525, 16.325782524652347),
(11, 'HONDA', 'honda.jpg', '2011-03-18', 'in', 4, 0, 48.1953745736363, 16.3257823456246),
(12, 'BMW', 'bmw.jpg', '2001-06-05', 'out', 6, 0, 48.19537434563463, 16.3257834636346),
(13, 'Ford', 'volvo.jpg', '2000-01-01', 'in', NULL, 48.2091041, 48.19537452352352, 16.32578508398433);

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `userId` int(11) NOT NULL,
  `first_name` varchar(60) DEFAULT NULL,
  `last_name` varchar(60) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `pass` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`userId`, `first_name`, `last_name`, `email`, `pass`) VALUES
(1, NULL, NULL, NULL, NULL),
(2, NULL, NULL, NULL, NULL),
(3, NULL, NULL, NULL, NULL),
(4, NULL, NULL, NULL, NULL),
(5, 'DQEWT', 'ASDF', 'adsf@dsf.com', 'qqweqweq'),
(13, 'Manden', 'Verter', 'verter@fre.com', '123456'),
(14, 'LoLka', 'Bolka', 'lolka@bolka.com', '123456'),
(15, 'Terem', 'Verd', 'asd@gmail.com', '123456'),
(16, 'koko', 'Luci', 'koko@gmail.com', '123456'),
(17, 'vert', 'Mert', 'Vert@mer.com', '1234566'),
(18, 'lohe', 'Inde', 'aik@geml.com', '123456'),
(24, 'asdasd', 'asdasd', 'asdasd@asdas.com', '1234414124'),
(25, 'Nora', 'Horvath', 'rr.noar@gmail.com', '123456'),
(26, 'Virag', 'Kaufer', 'floestsai@gmail.com', 'BlaBlaBla'),
(27, 'hvfghsfh', 'sfghfsgh', 'sfgh@zezt.com', 'sfgsdfg'),
(28, 'norcs', 'morcs', 'norcs@gmail.com', '123456'),
(32, 'qwqw', 'qwqw', 'qwqw@gma.com', 'qweqwe'),
(33, 'hehehehe', 'hehehehe', 'hehehe@ge.com', 'hrhrhrhrh'),
(34, 'kkk', 'kkk', 'kkk@g.com', 'gfjghj'),
(35, 'opopopopop', 'opopopopop', 'opopop@op.com', '123456'),
(36, 'qwe', 'qwe', 'qwe@g.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `drivers`
--

CREATE TABLE `drivers` (
  `author_id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `FK_media` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `drivers`
--

INSERT INTO `drivers` (`author_id`, `firstname`, `lastname`, `FK_media`) VALUES
(1, 'John', 'Brown', 1),
(2, 'Erik', 'Meddling', 2),
(3, 'Brown', 'Breem', 3),
(4, 'Milan', 'Brows', 2),
(5, 'Vera', 'Gill', 4),
(6, 'Lali', 'Lala', 5),
(7, 'Jhon', 'Doe', 5),
(8, 'More', 'JOhn', 4),
(9, 'Ester', 'Mester', 4),
(10, 'Qlok', 'Erte', 4),
(11, 'Piros', 'Ka', 3);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `name` varchar(55) DEFAULT NULL,
  `position` varchar(22) DEFAULT NULL,
  `salary` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `position`, `salary`) VALUES
(1, 'Mike', 'android developer', 94000),
(2, 'John', 'software engineer', 78000),
(3, 'Steven', 'data analyst', 85000),
(4, 'Carol', 'software engineer', 94000),
(5, 'Jim', 'android developer', 83000),
(6, 'Robert', 'data analyst', 79000),
(7, 'Bill', 'project manager', 112000),
(8, 'Georg', 'software engineer', 93000),
(9, 'Boris', 'android developer', 97000),
(10, 'Brian', 'data analyst', 82000);

-- --------------------------------------------------------

--
-- Table structure for table `publisher`
--

CREATE TABLE `publisher` (
  `publisher_id` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `size` varchar(25) DEFAULT NULL,
  `FK_author` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `publisher`
--

INSERT INTO `publisher` (`publisher_id`, `address`, `name`, `size`, `FK_author`) VALUES
(0, '21 Erden St. \r\nMissuri, MN 54580', 'Erden Books', 'small', 3),
(1, '8407 Nut Swamp St. \r\nSouthfield, MI 48076', 'Small Mouse', 'small', 1),
(2, '9990 Carriage Ave. \r\nCaldwell, NJ 07006', 'BigBook', 'big', 2),
(3, '96 Green Ave. \r\nWestport, CT 06880', 'Green Port', 'middle', 3),
(4, '1 Buttonwood St. \r\nBronx, NY 10451', 'Button Books', 'small', 4),
(5, '795B Fifth Street \r\nBloomington, IN 47401', 'Fifth Publish', 'big', 5),
(6, '39 Fulton St. \r\nOwatonna, MN 55060', 'Fulton Records', 'small', 6),
(12, '21 Erden St. \r\nMissuri, MN 54580', 'Erden Books', 'small', 3),
(13, '39 Fulton St. \r\nOwatonna, MN 55060', 'The other Publisher', 'middle', 2),
(14, '2 Vert St. \r\nOrb, MN 55210', 'Vertical Books', 'small', 3);

-- --------------------------------------------------------

--
-- Table structure for table `rent`
--

CREATE TABLE `rent` (
  `rent_id` int(11) NOT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `FK_userid` int(11) DEFAULT NULL,
  `FK_media` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rent`
--

INSERT INTO `rent` (`rent_id`, `start_date`, `end_date`, `FK_userid`, `FK_media`) VALUES
(1, '2018-06-03', '2018-07-08', 2, 1),
(2, '2018-06-05', '2018-07-11', 2, 2),
(3, '2018-07-18', '2018-07-25', 3, 3),
(4, '2018-06-11', '2018-07-20', 4, 4),
(5, '2018-06-13', '2018-07-21', 5, 5),
(6, '2018-07-26', '2018-08-22', 6, 6);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `firstname` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `surname`, `address`, `email`, `password`, `firstname`) VALUES
(0, 'muvek', NULL, 'elso@gmail.com', '123456', 'nalassuk'),
(1, 'Taylor', '728 Heritage Hls Unit D\r\nSomers, NY 10589-4082', 'taylor@robert.com', '123456', 'Robertson'),
(2, 'Melanie', '123 Stage rd Unit D\r\nSome, NY 4082', 'M.erder@asd.com', '123456', 'Werde'),
(3, 'Cecil', 'Kelley A. Fleming 196 Woodside Circle Mobile, FL 36602 Phone:240-256-1942', 'asd@gte.com', '123456', 'Qellog'),
(4, 'Martina', ' 3756 Preston Street Wichita, KS 67213 Phone:857-778-1265', 'michael@gmail.com', '123456', 'Michael '),
(5, 'Csücsök', 'Dog street 234. Berlin 1230', 'csucsi@gmail.com', '123456', 'Csont'),
(6, 'Verdem', '213. National road London N16 2341', 'erdeo.lo@gmail.com', '123456', 'Kolleg'),
(12, 'first_name', 'sgsd', 'emai@dsf.com', 'password', 'last_name'),
(98, 'adfgsdfg', 'werwerwe', 'yfasadf@ad.com', 'afsdf', 'asdfasdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_media` (`FK_media`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`userId`);

--
-- Indexes for table `drivers`
--
ALTER TABLE `drivers`
  ADD PRIMARY KEY (`author_id`),
  ADD KEY `FK_media` (`FK_media`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `publisher`
--
ALTER TABLE `publisher`
  ADD PRIMARY KEY (`publisher_id`),
  ADD KEY `FK_author` (`FK_author`);

--
-- Indexes for table `rent`
--
ALTER TABLE `rent`
  ADD PRIMARY KEY (`rent_id`),
  ADD KEY `FK_userid` (`FK_userid`),
  ADD KEY `FK_media` (`FK_media`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `car`
--
ALTER TABLE `car`
  ADD CONSTRAINT `car_ibfk_1` FOREIGN KEY (`FK_media`) REFERENCES `drivers` (`author_id`);

--
-- Constraints for table `publisher`
--
ALTER TABLE `publisher`
  ADD CONSTRAINT `publisher_ibfk_1` FOREIGN KEY (`FK_author`) REFERENCES `drivers` (`author_id`);

--
-- Constraints for table `rent`
--
ALTER TABLE `rent`
  ADD CONSTRAINT `rent_ibfk_1` FOREIGN KEY (`FK_userid`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `rent_ibfk_2` FOREIGN KEY (`FK_media`) REFERENCES `car` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
