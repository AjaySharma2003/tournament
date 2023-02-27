-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 27, 2023 at 06:55 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tournament`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_name` varchar(20) NOT NULL,
  `mail` varchar(25) NOT NULL,
  `mobile_number` bigint(10) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_name`, `mail`, `mobile_number`, `password`) VALUES
('Admin', 'admin@gmail.com', 9876543219, '1234');

-- --------------------------------------------------------

--
-- Table structure for table `organizers`
--

CREATE TABLE `organizers` (
  `organizer_name` varchar(20) NOT NULL,
  `organizer_mail` varchar(25) NOT NULL,
  `mobile_number` bigint(10) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `organizers`
--

INSERT INTO `organizers` (`organizer_name`, `organizer_mail`, `mobile_number`, `password`) VALUES
('organizer', 'organizer@gmail.com', 9876553427, '1234'),
('organizer', 'organizer2@gmail.com', 9876553427, '1234');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `tournament_id` int(100) NOT NULL,
  `team_id` int(100) NOT NULL,
  `team_name` varchar(100) NOT NULL,
  `captain_name` varchar(100) NOT NULL,
  `vice_captain_name` varchar(100) NOT NULL,
  `captain_contact_number` varchar(10) NOT NULL,
  `vice_captain_contact_number` varchar(10) NOT NULL,
  `team_mail_id` varchar(100) NOT NULL,
  `street_name` varchar(100) NOT NULL,
  `area` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `pin_code` bigint(10) NOT NULL,
  `user_mail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`tournament_id`, `team_id`, `team_name`, `captain_name`, `vice_captain_name`, `captain_contact_number`, `vice_captain_contact_number`, `team_mail_id`, `street_name`, `area`, `district`, `state`, `pin_code`, `user_mail`) VALUES
(1, 1, 'CSK', 'AJ', 'VJ', '976457454', '896745454', '', 'aaaa', 'aaaaa', 'aaaaaaaaaaa', 'aaaaaa', 5656, 'user@gmail.com'),
(1, 2, 'Anal Boys', 'Murugan', 'Ajay', '9876575678', '9387853845', 'murugan@gmail.com', 'Bheema Rav Ramji Nagar', 'Sevelpatti', 'Ramanathapuram', 'Tamil Nadu', 623135, '');

-- --------------------------------------------------------

--
-- Table structure for table `tournaments`
--

CREATE TABLE `tournaments` (
  `tournament_id` int(20) NOT NULL,
  `tournament_name` varchar(50) NOT NULL,
  `organizer` varchar(50) NOT NULL,
  `game` varchar(20) NOT NULL,
  `category` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `venue` varchar(500) NOT NULL,
  `landmark` varchar(100) DEFAULT NULL,
  `district` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `first_price` int(10) NOT NULL,
  `second_price` int(10) NOT NULL,
  `third_price` int(10) NOT NULL,
  `additional_price` text NOT NULL,
  `entrance_fees` int(10) NOT NULL,
  `rules` text NOT NULL,
  `about_event` text NOT NULL,
  `about_organizer` text NOT NULL,
  `contact_details` text NOT NULL,
  `organizer_mail` varchar(50) NOT NULL,
  `image` longblob,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tournaments`
--

INSERT INTO `tournaments` (`tournament_id`, `tournament_name`, `organizer`, `game`, `category`, `gender`, `venue`, `landmark`, `district`, `state`, `country`, `date`, `first_price`, `second_price`, `third_price`, `additional_price`, `entrance_fees`, `rules`, `about_event`, `about_organizer`, `contact_details`, `organizer_mail`, `image`, `status`) VALUES
(1, 'Pongal Special', 'Heaven Matha Boys', 'Kabaddi', 'Under-19', 'Men', 'Vembar', NULL, 'Thoothukudi', 'Tamil Nadu', 'India', '2023-01-13', 7000, 5000, 3000, 'Fourth Price - 2500\r\nQuatrafinal Lose Team get price amount 2000', 250, 'Umpire judgement is final', 'First Year Kabaddi Tournament. Conducted by Heaven Matha Boys, Vembar', '-', 'Contact Number - 9786756554\r\nMail Id - ajf@gmail.com', 'organizer@gmail.com', 0x2e2e2f696d616765732f6b6162616464692e706e67, 0),
(12, 'Sun Shine Kabaddi Tournament', 'Singara Velan Kabaddi Club', 'Kabaddi', 'Open-Match', 'Men', 'Vilathikulam', NULL, 'Thoothukudi', 'Tamil Nadu', 'India', '2023-02-11', 10000, 7000, 5000, '-', 250, '-', '-', '-', '-', 'organizer@gmail.com', 0x2e2e2f696d616765732f6b6162616464692e706e67, 0),
(17, 'Sun Shine Kabaddi Tournament', 'Singara Velan Kabaddi Club', 'Kabaddi', 'Open-Match', 'Men', 'Vilathikulam, Thoothukudi', 'hi style', 'Thoothukudi', 'Tamil Nadu', 'India', '2023-02-26', 4564, 4564, 5675, '-', 76, '-', '-', '-', '-', 'organizer@gmail.com', 0x2e2e2f696d616765732f6b6162616464692e706e67, 0),
(18, 'Sun Shine Kabaddi Tournament', 'Singara Velan Kabaddi Club', 'Kabaddi', 'Open-Match', 'Men', 'Vilathikulam, Thoothukudi', 'hi style', 'Thoothukudi', 'Tamil Nadu', 'India', '2023-02-26', 4564, 4564, 5675, '-', 76, '-', '-', '-', '-', 'organizer@gmail.com', 0x2e2e2f696d616765732f6b6162616464692e706e67, 0),
(19, 'Sun Shine Kabaddi Tournament', 'Singara Velan Kabaddi Club', 'Kabaddi', 'Open-Match', 'Men', 'Vilathikulam, Thoothukudi', 'hi style', 'Thoothukudi', 'Tamil Nadu', 'India', '2023-02-26', 4564, 4564, 5675, '-', 76, '-', '-', '-', '-', 'organizer@gmail.com', 0x2e2e2f696d616765732f6b6162616464692e706e67, 0),
(20, 'Sun Shine Kabaddi Tournament', 'Singara Velan Kabaddi Club', 'Kabaddi', 'Open-Match', 'Men', 'Vilathikulam, Thoothukudi', 'hi style', 'Thoothukudi', 'Tamil Nadu', 'India', '2023-02-26', 4564, 4564, 5675, '-', 76, '-', '-', '-', '-', 'organizer@gmail.com', 0x2e2e2f696d616765732f6b6162616464692e706e67, 0),
(21, 'Sun Shine Kabaddi Tournament', 'Singara Velan Kabaddi Club', 'Kabaddi', 'Open-Match', 'Men', 'Vilathikulam, Thoothukudi', 'hi style', 'Thoothukudi', 'Tamil Nadu', 'India', '2023-02-26', 4564, 4564, 5675, '-', 76, '-', '-', '-', '-', 'organizer@gmail.com', 0x2e2e2f696d616765732f6b6162616464692e706e67, 0),
(22, 'Sun Shine Kabaddi Tournament', 'Singara Velan Kabaddi Club', 'Kabaddi', 'Open-Match', 'Men', 'Vilathikulam, Thoothukudi', 'hi style', 'Thoothukudi', 'Tamil Nadu', 'India', '2023-02-26', 4564, 4564, 5675, '-', 76, '-', '-', '-', '-', 'organizer@gmail.com', 0x2e2e2f696d616765732f6b6162616464692e706e67, 0),
(23, 'Sun Shine Kabaddi Tournament', 'Singara Velan Kabaddi Club', 'Kabaddi', 'Open-Match', 'Men', 'Vilathikulam, Thoothukudi', 'hi style', 'Thoothukudi', 'Tamil Nadu', 'India', '2023-02-26', 4564, 4564, 5675, '-', 76, '-', '-', '-', '-', 'organizer@gmail.com', 0x2e2e2f696d616765732f6b6162616464692e706e67, 0),
(24, 'Sun Shine Kabaddi Tournament', 'Singara Velan Kabaddi Club', 'Kabaddi', 'Open-Match', 'Men', 'Vilathikulam, Thoothukudi', 'hi style', 'Thoothukudi', 'Tamil Nadu', 'India', '2023-02-26', 4564, 4564, 5675, '-', 76, '-', '-', '-', '-', 'organizer@gmail.com', 0x2e2e2f696d616765732f6b6162616464692e706e67, 0),
(25, 'Sun Shine Kabaddi Tournament', 'Singara Velan Kabaddi Club', 'Kabaddi', 'Open-Match', 'Men', 'Vilathikulam, Thoothukudi', 'hi style', 'Thoothukudi', 'Tamil Nadu', 'India', '2023-02-26', 4564, 4564, 5675, '-', 76, '-', '-', '-', '-', 'organizer@gmail.com', 0x2e2e2f696d616765732f6b6162616464692e706e67, 0),
(26, 'Sun Shine Kabaddi Tournament', 'Singara Velan Kabaddi Club', 'Kabaddi', 'Open-Match', 'Men', 'Vilathikulam, Thoothukudi', 'hi style', 'Thoothukudi', 'Tamil Nadu', 'India', '2023-02-26', 4564, 4564, 5675, '-', 76, '-', '-', '-', '-', 'organizer@gmail.com', 0x2e2e2f696d616765732f6b6162616464692e706e67, 0),
(27, 'Sun Shine Kabaddi Tournament', 'Singara Velan Kabaddi Club', 'Kabaddi', 'Open-Match', 'Men', 'Vilathikulam, Thoothukudi', 'hi style', 'Thoothukudi', 'Tamil Nadu', 'India', '2023-02-26', 4564, 4564, 5675, '-', 76, '-', '-', '-', '-', 'organizer@gmail.com', 0x2e2e2f696d616765732f6b6162616464692e706e67, 0),
(28, 'Sun Shine Kabaddi Tournament', 'Singara Velan Kabaddi Club', 'Kabaddi', 'Open-Match', 'Men', 'Vilathikulam, Thoothukudi', 'hi style', 'Thoothukudi', 'Tamil Nadu', 'India', '2023-03-03', 10000, 7000, 5000, '-', 300, '--', '--', '-', '-', 'organizer@gmail.com', 0x2e2e2f696d616765732f6b6162616464692e706e67, 0),
(29, 'Sun Shine Kabaddi Tournament', 'Singara Velan Kabaddi Club', 'Kabaddi', 'Open-Match', 'Men', 'Vilathikulam, Thoothukudi', 'hi style', 'Thoothukudi', 'Tamil Nadu', 'India', '2023-03-03', 10000, 7000, 5000, '-', 300, '--', '--', '-', '-', 'organizer@gmail.com', 0x2e2e2f696d616765732f6b6162616464692e706e67, 0),
(30, 'Sun Shine Volley Ball Tournament', 'Singara Velan Volley Ball Club', 'Volley-ball', 'Under-19', 'Men', 'Vilathikulam, Thoothukudi', 'hi style', 'Thoothukudi', 'Tamil Nadu', 'India', '2023-03-11', 10000, 7000, 5000, 'Fourth Price - 3000\r\nBest Attacker - 1000\r\nBest Defender - 1000', 500, 'Umpire rules finalized.\r\nAll players Must bring Aadhar card Xeroc', 'This Event is organized by SVVB.\r\nThis Event is only for Under 19 age category.\r\nThis is finalized', 'Organizer won many state level prizes.\r\nThese organizers organize a tournament more than 10 years regularly', 'Mobile Number - 876576787\r\nEmail - sjfas@gmail..com', 'organizer@gmail.com', NULL, NULL),
(31, 'Sun Shine Volley Ball Tournament', 'Singara Velan Volley Ball Club', 'Volley-ball', 'Under-19', 'Men', 'Vilathikulam, Thoothukudi', 'hi style', 'Thoothukudi', 'Tamil Nadu', 'India', '2023-03-11', 10000, 7000, 5000, 'Fourth Price - 3000\r\nBest Attacker - 1000\r\nBest Defender - 1000', 500, 'Umpire rules finalized.\r\nAll players Must bring Aadhar card Xeroc', 'This Event is organized by SVVB.\r\nThis Event is only for Under 19 age category.\r\nThis is finalized', 'Organizer won many state level prizes.\r\nThese organizers organize a tournament more than 10 years regularly', 'Mobile Number - 876576787\r\nEmail - sjfas@gmail..com', 'organizer@gmail.com', NULL, NULL),
(32, 'Sun Shine Football Tournament', 'Sun Shine Football Club', 'Football', 'Open-Match', 'Men', 'Vilathikulam, Thoothukudi', 'Sharon School', 'Thoothukudi', 'Tamil Nadu', 'India', '2023-03-19', 10000, 7000, 5000, '-', 300, '-', '-', '-', '-', 'organizer@gmail.com', 0x2e2e2f696d616765732f666f6f7462616c6c2e706e67, NULL),
(33, 'Sun Shine Football Tournament', 'Sun Shine Football Club', 'Football', 'Open-Match', 'Men', 'Vilathikulam, Thoothukudi', 'Sharon School', 'Thoothukudi', 'Tamil Nadu', 'India', '2023-03-19', 10000, 7000, 5000, '-', 300, '-', '-', '-', '-', 'organizer@gmail.com', 0x2e2e2f696d616765732f666f6f7462616c6c2e706e67, NULL),
(34, 'Sun Shine Football Tournament', 'Sun Shine Football Club', 'Football', 'Open-Match', 'Men', 'Vilathikulam, Thoothukudi', 'Sharon School', 'Thoothukudi', 'Tamil Nadu', 'India', '2023-03-19', 10000, 7000, 5000, '-', 300, '-', '-', '-', '-', 'organizer@gmail.com', 0x2e2e2f696d616765732f666f6f7462616c6c2e706e67, NULL),
(35, 'Sun Shine Cricket Tournament', 'Singara Velan Cricket Club', 'Cricket', 'Under-19', 'Men', 'Vilathikulam, Thoothukudi', 'Sharon School', 'Thoothukudi', 'Tamil Nadu', 'India', '2023-03-19', 15000, 10000, 8000, '-', 300, '-', '-', '-', '-', 'organizer@gmail.com', 0x2e2e2f696d616765732f637269636b65742e706e67, NULL),
(36, 'Sun Shine Cricket Tournament', 'Singara Velan Cricket Club', 'Cricket', 'Under-19', 'Men', 'Vilathikulam, Thoothukudi', 'Sharon School', 'Thoothukudi', 'Tamil Nadu', 'India', '2023-03-19', 15000, 10000, 8000, '-', 300, '-', '-', '-', '-', 'organizer@gmail.com', 0x2e2e2f696d616765732f637269636b65742e706e67, NULL),
(37, 'Sun Shine Cricket Tournament', 'Singara Velan Cricket Club', 'Cricket', 'Under-19', 'Men', 'Vilathikulam, Thoothukudi', 'Sharon School', 'Thoothukudi', 'Tamil Nadu', 'India', '2023-03-19', 15000, 10000, 8000, '-', 300, '-', '-', '-', '-', 'organizer@gmail.com', 0x2e2e2f696d616765732f637269636b65742e706e67, NULL),
(38, 'Sun Shine Volley Ball Tournament', 'Sun Shine Volley Ball Club', 'Volley-ball', 'Open-Match', 'Men', 'Vilathikulam, Thoothukudi', 'Sharon School', 'Thoothukudi', 'Tamil Nadu', 'India', '2023-03-19', 10000, 7000, 5000, '-', 300, '-', '-', '-', '-', 'organizer@gmail.com', 0x2e2e2f696d616765732f766f6c6c65795f62616c6c2e706e67, NULL),
(39, 'Sun Shine Volley Ball Tournament', 'Sun Shine Volley Ball Club', 'Volley-ball', 'Open-Match', 'Men', 'Vilathikulam, Thoothukudi', 'Sharon School', 'Thoothukudi', 'Tamil Nadu', 'India', '2023-03-19', 10000, 7000, 5000, '-', 300, '-', '-', '-', '-', 'organizer@gmail.com', 0x2e2e2f696d616765732f766f6c6c65795f62616c6c2e706e67, NULL),
(40, 'Sun Shine Volley Ball Tournament', 'Sun Shine Volley Ball Club', 'Volley-ball', 'Open-Match', 'Men', 'Vilathikulam, Thoothukudi', 'Sharon School', 'Thoothukudi', 'Tamil Nadu', 'India', '2023-03-19', 10000, 7000, 5000, '-', 300, '-', '-', '-', '-', 'organizer@gmail.com', 0x2e2e2f696d616765732f766f6c6c65795f62616c6c2e706e67, NULL),
(41, 'Sun Shine Kabaddi Tournament', 'Singara Velan Kabaddi Club', 'Kabaddi', 'Open-Match', 'Men', 'Vilathikulam, Thoothukudi', 'Sharon School', 'Thoothukudi', 'Tamil Nadu', 'India', '2023-03-11', 10000, 7000, 5000, '-', 300, '-', '-', '-', '-', 'organizer@gmail.com', 0x2e2e2f696d616765732f6b6162616464692e706e67, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_name` varchar(20) NOT NULL,
  `user_mail` varchar(25) NOT NULL,
  `mobile_number` bigint(10) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_name`, `user_mail`, `mobile_number`, `password`) VALUES
('user', 'user@gmail.com', 8765433546, '1234'),
('user', 'user1@gmail.com', 8765434532, '12'),
('fsd', 'sfd@hkgk.in', 9876553427, '12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD UNIQUE KEY `team_id` (`team_id`);

--
-- Indexes for table `tournaments`
--
ALTER TABLE `tournaments`
  ADD UNIQUE KEY `tournament_id` (`tournament_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `team_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tournaments`
--
ALTER TABLE `tournaments`
  MODIFY `tournament_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
