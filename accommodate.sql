-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2020 at 12:32 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `accommodate`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `adminid` int(11) NOT NULL,
  `adminname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`adminid`, `adminname`, `password`) VALUES
(1, 'joe', 'pass');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryid` int(11) NOT NULL,
  `categoryname` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryid`, `categoryname`) VALUES
(1, 'Residential'),
(2, 'Commercial'),
(3, 'Sites');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `author_name` varchar(100) NOT NULL,
  `author_email` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` enum('pending','planned') NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `title`, `content`, `author_name`, `author_email`, `created_at`, `status`) VALUES
(10, 'This is a test', 'This is a test', 'testing', 'test@hotmail.com', '2017-02-14 19:23:40', 'planned'),
(21, 'hi', 'hello there', 'evelyn', 'evelyn@test.com', '2017-02-16 13:40:51', 'planned'),
(23, 'Great service!', 'Thanks for all your help! It made getting my foot on the property ladder much easier.', 'Joe', 'joe@hotmail.com', '2017-02-19 10:37:23', 'planned'),
(24, 'Love this Site', 'Great company. Customer service second to none!', 'Les', 'Les@lse.uk', '2017-02-19 11:30:00', 'planned'),
(25, 'Superb Website', 'Great website, helped me find a great site to build upon', 'JG', 'josephgrimes@hotmail.com', '2020-05-14 15:28:39', 'planned'),
(26, 'Test', 'This is a test comment', 'Testman', 'Testman@test.com', '2020-05-14 15:31:09', 'pending'),
(27, 'test', 'test', 'jg', 'jsdkdj@hor.co', '2020-05-24 15:51:55', 'planned'),
(29, 'Perfect', 'Loved this site. So easy to use.', 'Paul', 'paul@hotmail.com', '2020-05-25 19:03:39', 'pending'),
(30, 'Perfect', 'Loved this site. So easy to use.', 'Paul', 'paul@hotmail.com', '2020-05-25 19:07:45', 'pending'),
(31, 'Perfect', 'Loved this site. So easy to use.', 'Paul', 'paul@hotmail.com', '2020-05-25 19:10:18', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `propertyid` int(11) NOT NULL,
  `address1` varchar(50) NOT NULL,
  `town` varchar(50) NOT NULL,
  `county` varchar(50) NOT NULL,
  `price` double NOT NULL,
  `bedrooms` int(2) DEFAULT NULL,
  `shortdescription` text NOT NULL,
  `longdescription` text NOT NULL,
  `image` varchar(50) NOT NULL,
  `categoryid` int(11) NOT NULL,
  `vendorid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`propertyid`, `address1`, `town`, `county`, `price`, `bedrooms`, `shortdescription`, `longdescription`, `image`, `categoryid`, `vendorid`) VALUES
(1, '31 Erne Heights', 'Letterkenny', 'Donegal', 139000, 3, 'Well-maintained family home. Has to be viewed. now', 'This three-bedroomed property sits on an elevated site in a quiet cul-de-sac. The open plan kitchen diner boasts a fully-fitted high-shine kitchen with top quality appliances. The sitting room has a wood-burning stove and marble fireplace.......\r\n\r\nmore information can go in here about the number of bathrooms, size of rooms, etc etc', 'images\\istock1.jpg', 1, 1),
(2, 'Fyanstown', 'Kells', 'Meath', 250000, 4, 'A beautiful 4 bedroom house for sale in the countryside just a 5 minute drive from the closest town', '4 bedrooms \r\n2 En-suite room\r\n3 bathrooms\r\nRecently refurbished with all modern conveniences. A great place ot live in a sought after area.\r\n\r\nCall James for more details.', 'images/istock2.jpeg', 1, 0),
(3, '98 Brickland Heights', 'Enniscorthy', 'Wexford', 269000, 4, 'A beautiful 4 bedroom house for sale in the countryside just a 5 minute drive from the closest town.', '4 bedrooms \r\n1 En-suite room\r\n2 bathrooms\r\n\r\nRecently refurbished with all modern conveniences. A great place to live in a sought after area.\r\nLovely garden out the back, South Facing\r\n\r\nCall us for more details.', 'images/istock3.jpg', 1, 0),
(4, '65 Mornington Towers', 'Mornington ', 'Meath', 250000, 2, '2 bedroom terrace house, 3 minute walk from the nearest village and only a 10 minute walk to the beach. Houses like this don\'t stay on the market for long so enquire today.', '2 bedrooms \r\n1 En-suite room\r\n2 bathrooms\r\nRecently refurbished with all modern conveniences. A beautiful area to live in and very close to the local blue flag beach. Ideal house for pet owners with the enclosed garden\r\n\r\nCall James for more details.', 'images/istock4.jpg', 1, 0),
(5, 'Office space', 'Letterkenny', 'Donegal', 147000, 0, 'New building under construction.', 'This fabulous new building will house 60 new office blocks. Currently deposits have been taken from a range of clients consisting of accountancy businesses and freelance graphic designers.', 'images/comm1.jpg', 2, 1),
(6, 'Main Street', 'Letterkenny', 'Donegal', 230000, 0, 'Great spot in town to open any type of business', 'A very well situated building in the middle of Letterkenny. 5 large rooms. Would suit a range of different business. Previously used as a cafe.', 'images/comm4.jpg', 2, 7),
(11, '0.66 acre site', 'Gormanston', 'Meath', 140000, 0, 'A fabulous site situated beside the seaside. Not far from a well developed town.', 'Large 0.66 acre site with loads of potential, planning permission granted. An absolute steal at this price.', 'images/site1.jpg', 3, 3),
(17, 'Half Acre House', 'Cape town', 'Wexford', 300000, 0, 'Recently enlisted site with planning permission granted. ', 'An absolute gem of a site, good quality land and situated in the countryside of Wexford. Just 15 minutes drive from the nearest town.', 'images/site2.jpg', 3, 5),
(18, 'Thomas street', 'Blanchardstown', 'Dublin', 12000000, 0, 'Large retail unit for sale, previously owned by Debenhams Ireland', 'Stunning building, only recently filled and partially furnished inside. Structurally sound building in use for the past 23 years.', 'images/comm5.jpg', 2, 9),
(19, '28 St James Road', 'Cork City', 'Cork', 5000000, 0, 'Commercial property for rent in Cork city', 'Old terrace building for sale just off main street with heavy foot fall in the area. Busy part of town for retail outlets, close to main car park in the city.', 'images/comm6.jpg', 2, 9),
(20, 'Ringsend', 'Churchill', 'Donegal', 58000, 0, 'Plot of land for sale in the countryside', 'Planning permission for 28000 square foot building pending. plot of land is 0.75 acre. Sound foundations, close to small village in a quiet and friendly neighborhood.', 'images/site3.jpg', 3, 9);

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `vendorid` int(11) NOT NULL,
  `surname` varchar(20) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `address1` varchar(50) NOT NULL,
  `town` varchar(20) NOT NULL,
  `county` varchar(20) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`vendorid`, `surname`, `firstname`, `address1`, `town`, `county`, `mobile`, `email`) VALUES
(7, 'Grimes', 'Joe', '1 Sylvan Park', 'Letterkenny', 'Donegal', '084733772', 'joe2020@gmail.com'),
(2, 'OShae', 'Tommy', '99 Salt Lake', 'Courtown', 'Cavan', '0899933471', 'tommyos87@hotmail.co'),
(3, 'O Donnell', 'Ryan', 'Main Street', 'Drogheda', 'Louth', '0875644321', 'RyanOD@hotmail.com'),
(5, 'Mc Ginley', 'Sarah', '97 Oakwood Heights', 'Cobh', 'Cork', '0861255632', 'Sarah09@rocketmail.c'),
(6, 'Duff', 'James', 'Old Dublin Road', 'Gormanston', 'Meath', '0899933472', 'josephgrimes@hotmail');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryid`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`propertyid`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`vendorid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `adminid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `categoryid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `propertyid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `vendorid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
