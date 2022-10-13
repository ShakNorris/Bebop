-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 18, 2020 at 07:04 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bebop`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

DROP TABLE IF EXISTS `accounts`;
CREATE TABLE IF NOT EXISTS `accounts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `vkey` varchar(45) NOT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT 0,
  `createdate` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `usertype` int(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `firstname`, `lastname`, `username`, `password`, `email`, `vkey`, `verified`, `createdate`, `usertype`) VALUES
(1, 'Shako', 'Kushashvili', 'ShakNorris', 'c5a86c2a7bde46111c31c0afabc1092d', 'shako.kushashvili@gmail.com', '9da0e914d1840e0d1e6acb9aeed049e3', 1, '2020-07-18 17:30:11.044394', 1),
(2, 'Guramiko', 'Kublashvili', 'Guramiko123', '4e9d83e6700124361aca097b8769e6bc', 'guram.kublashvili@gmail.com', '9a14355e9688c3a559cb55effde734ee', 1, '2020-07-18 18:59:34.439903', 0),
(11, 'Bobby', 'Hall', 'Logic', '0af98955995c7935b371ec8db37479d0', 'Logic301@gmail.com', '686d18bca2bb64f325f5153aa92b4ce1', 1, '2020-07-18 19:03:34.856062', 0);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(75) NOT NULL,
  `userid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `userid` (`userid`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image`, `userid`) VALUES
(1, '64745377_2271523486216739_2600430221540266426_n.jpg', NULL),
(2, '64745377_2271523486216739_2600430221540266426_n.jpg', NULL),
(3, '64745377_2271523486216739_2600430221540266426_n.jpg', NULL),
(4, 'clown.png', NULL),
(5, '5071110_1_01001062673.jpg', NULL),
(6, '5071110_1_01001062673.jpg', NULL),
(7, '5071110_1_01001062673.jpg', NULL),
(8, '5071110_1_01001062673.jpg', NULL),
(9, 'DorYadzXgAMHZn0.jpg', NULL),
(10, 'DorYadzXgAMHZn0.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(200) NOT NULL,
  `image` varchar(75) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `description`, `image`) VALUES
(1, 'The Weeknd, Metro Boomin, & More Call On Record Labels To Support The Black Lives Matter Movement', 'the-weeknd-variety-cover-shoot-2-16x9-1.jpg'),
(2, 'Killer Mike References The Last Words Of Eric Garner On Run The Jewels’ “Walking In The Snow”', 'KillerMike.jpg'),
(3, 'Lady Gaga Shuts Down Web Store During Her Album Release Week In Solidarity With Protesters', 'LadyGaga.jpg'),
(4, 'Drakeo the Ruler Releases New Mixtape Thank You for Using GTL', 'Drakeo-The-Ruler.jpg\r\n'),
(5, 'J. Cole Joins Protesters In Fayetteville, NC After Death Of George Floyd', 'Jcole.jpg'),
(6, 'Kendrick Lamar to Return Soon, Says TDE CEO', 'Kendrick.jpg'),
(7, 'Kanye West Donates $2M, Launches Education Plan for George Floyd\'s Daughter', 'Kanye.jpg'),
(8, 'Machine Gun Kelly & Travis Barker Reflect on LA Protest Experience for Rage Against the Machine\'s \'Killing In The Name\' Cover', 'MGK.jfif'),
(9, 'Marshmello Donates $50,000 to the NAACP: \'Underneath This Costume I Am Human & This Is My Tipping Point\'', 'Marshmello.jpg'),
(10, 'Killer Mike & El-P Release ‘Run The Jewels 4’ Early In Response To Police Brutality Protests', 'RTJ.jpg'),
(11, 'U2’s Bono debuts star-studded ‘Beautiful Day’ cover and shares powerful speech', 'Bono.jpg'),
(12, 'J.I.D\'s Plans For New Music Have Been Derailed', 'JID.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

DROP TABLE IF EXISTS `reviews`;
CREATE TABLE IF NOT EXISTS `reviews` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `albumname` varchar(45) NOT NULL,
  `albumartist` varchar(45) NOT NULL,
  `albumimage` varchar(75) NOT NULL,
  `albumgenre` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `albumname`, `albumartist`, `albumimage`, `albumgenre`) VALUES
(1, 'RTJ4', 'Run The Jewels', 'RTJ4.jpg', 'Hip-Hop/Rap'),
(2, 'After Hours', 'The Weeknd', 'AfterHours.jpg', 'Hip-Hop/Rap'),
(3, 'Dark Lane Demo Tapes', 'Drake', 'DLDT.jpg', 'Hip-Hop/Rap'),
(4, 'Music To Be Murdered By', 'Eminem', 'MTBMB.jpg', 'Hip-Hop/Rap'),
(5, 'Circles', 'Mac Miller', 'Circles.jpg', 'Hip-Hop/Rap'),
(6, 'The Lost Boy', 'YBN Cordae', 'LostBoy.jpg', 'Hip-Hop/Rap'),
(7, 'Sweet Action', 'Jack Harlow', 'SweetAction.jpg', 'Hip-Hop/Rap'),
(8, 'Confessions Of A Dangerous Mind', 'Logic', 'COADM.jpg', 'Hip-Hop/Rap'),
(9, 'Hollywood\'s Bleeding', 'Post Malone', 'HollywoodsBleeding.jpg', 'Hip-Hop/Rap'),
(10, 'Ventura', 'Anderson .Paak', 'Ventura.jpg', 'Hip-Hop/Rap'),
(11, 'The Sailor', 'Rich Brian', 'TheSailor.jpg', 'Hip-Hop/Rap'),
(12, 'Blame It On Baby', 'DaBaby', 'BlameBaby.jpg', 'Hip-Hop/Rap'),
(13, 'The Incredible True Story', 'Logic', 'TheIncredibleTrueStory.jpg', 'Hip-Hop/Rap'),
(14, 'DiCaprio2', 'J.I.D', 'Dicaprio2.jpg', 'Hip-Hop/Rap'),
(15, 'UNLOCKED', 'Denzel Curry', 'Unlocked.jpg', 'Hip-Hop/Rap'),
(16, 'DAMN.', 'Kendrick Lamar', 'DAMN.jpg', 'Hip-Hop/Rap'),
(17, 'KOD', 'J. Cole', 'KOD.jpg', 'Hip-Hop/Rap'),
(18, 'Mirrorland', 'EarthGang', 'Mirrorland.jpg', 'Hip-Hop/Rap'),
(19, 'Under Pressure', 'Logic', 'UP.jpg', 'Hip-Hop/Rap'),
(20, 'SYRE', 'Jaden Smith', 'Syre.jpg', 'Hip-Hop/Rap');

-- --------------------------------------------------------

--
-- Table structure for table `userreviews`
--

DROP TABLE IF EXISTS `userreviews`;
CREATE TABLE IF NOT EXISTS `userreviews` (
  `accountID` int(11) NOT NULL,
  `reviewID` int(11) NOT NULL,
  PRIMARY KEY (`accountID`,`reviewID`),
  KEY `reviewID` (`reviewID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `accounts` (`id`);

--
-- Constraints for table `userreviews`
--
ALTER TABLE `userreviews`
  ADD CONSTRAINT `userreviews_ibfk_1` FOREIGN KEY (`accountID`) REFERENCES `accounts` (`id`),
  ADD CONSTRAINT `userreviews_ibfk_2` FOREIGN KEY (`reviewID`) REFERENCES `reviews` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
