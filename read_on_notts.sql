-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2022 at 03:22 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `read on notts`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `ID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `noOfSpaces` int(11) NOT NULL,
  `shortDescription` varchar(255) NOT NULL,
  `activityDescription` varchar(1000) NOT NULL,
  `eventImage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`ID`, `name`, `date`, `noOfSpaces`, `shortDescription`, `activityDescription`, `eventImage`) VALUES
(1, 'Our First Event!', '2022-04-27 13:00:00', 20, 'Join us for Our First Event! See you there :)', 'Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum', 'activities.jpg'),
(2, 'Big Read Along ', '2022-05-13 11:00:00', 3, 'Join us for our big read along!\'', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus luctus ipsum nec nulla imperdiet, sit amet dignissim ex tempor. In non nibh erat. Etiam sed odio quam. Donec convallis, arcu nec tincidunt feugiat, massa mi eleifend neque, sit amet scelerisque urna odio quis leo. Curabitur non leo suscipit, lacinia lectus a, auctor felis. Donec accumsan sem nec purus convallis, sagittis molestie leo gravida. Maecenas luctus orci vel risus pellentesque volutpat. Quisque id molestie nulla. Proin elementum sodales nunc, sed consectetur tellus malesuada non. Donec non tortor nunc. Curabitur facilisis sapien tortor, quis molestie dolor tempor a. Vivamus at porttitor enim.\r\n\r\nDonec ligula quam, blandit at ultricies ut, fringilla a nisi. Suspendisse dictum elementum ligula et pretium. Vestibulum vitae eros a erat accumsan aliquet non quis erat. Vivamus at dignissim augue, sed egestas lorem. Mauris bibendum sem feugiat tristique lobortis. Ut blandit quis odio molestie pulvinar. Nulla elementum', '3.png'),
(3, 'Another Great Event\'', '2022-04-29 11:00:00', 0, 'Join us as we read as many books as possible in one moring!\'', 'Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem Ipsum', '1.png'),
(5, 'Take102Read', '2022-05-09 10:00:00', 36, 'Join us at Hyson Green Library to share the joy of reading', 'Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum ', 'nottcitylib.png');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `bookingID` int(11) NOT NULL,
  `eventName` varchar(255) NOT NULL,
  `parentName` varchar(255) NOT NULL,
  `noOfAttendees` int(11) NOT NULL,
  `contactNumber` int(20) NOT NULL,
  `emailAddress` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`bookingID`, `eventName`, `parentName`, `noOfAttendees`, `contactNumber`, `emailAddress`) VALUES
(29, 'Big Read Along', 'Test2', 23, 2147483647, 'masonireland12@gmail.com'),
(30, 'Another Great Event', 'Jamie O\'Brien', 1, 115, 'jo\'brien@gmail.com'),
(31, 'Big Read Along', 'Jamie Hamilton', 2, 2147483647, 'tester123@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `explore`
--

CREATE TABLE `explore` (
  `ID` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `link` varchar(1000) NOT NULL,
  `image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `explore`
--

INSERT INTO `explore` (`ID`, `title`, `description`, `link`, `image`) VALUES
(4, 'Podcast Grab some friends. Nottingham!', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'https://grabsomefriends.com/s01-e20-nottingham', 'partners.jpg'),
(5, 'Storytelling Scrapbooks ages 5-7', 'Use these storytelling scrapbooks to support your child’s writing, speaking and listening skills. It will help them share their story, explore family traditions and create a piece of history to look back on in the future.', 'https://myntuac-my.sharepoint.com/:b:/g/personal/n0935168_my_ntu_ac_uk/EWmilEL330hPmjL-2xB52U4BRXPhyEgfuoKwFDBddBsW7g?e=VSzLZO', 'storytelling.png');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `ID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`ID`, `name`, `image`, `link`) VALUES
(2, 'Read On Nottingham', 'readonnott.png', 'https://literacytrust.org.uk/communities/nottingham/'),
(3, 'Nottingham City Libraries', 'citylib.png', 'https://www.nottinghamcitylibraries.co.uk/'),
(4, 'SSBC ', 'ssbc.png', 'https://www.smallstepsbigchanges.org.uk/'),
(5, 'Unesco City of Literature', 'unescocityoflit.png', 'https://nottinghamcityofliterature.com/'),
(6, 'Nottingham City Council', 'nottcitycouncil.png', 'https://www.nottinghamcity.gov.uk/'),
(7, 'NTU', 'ntu.png', 'https://www.ntu.ac.uk/'),
(8, 'Literacy Volunteers', 'literacyvolun.png', 'https://www.literacyvolunteers.org.uk'),
(9, 'Futures', 'futures.png', 'https://www.the-futures-group.com'),
(10, 'Test Partner', 'partners.jpg', 'https://www.ntu.ac.uk/'),
(11, 'Renewal Trust', 'renewalTrust.png', 'http://renewaltrust.co.uk/');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('readonnottingham2023', 'nottingham2023');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`bookingID`);

--
-- Indexes for table `explore`
--
ALTER TABLE `explore`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `bookingID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `explore`
--
ALTER TABLE `explore`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
