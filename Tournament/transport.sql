-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 16, 2023 at 03:26 PM
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
-- Database: `transport`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `name` varchar(20) NOT NULL,
  `admin_mail` varchar(20) NOT NULL,
  `phone_number` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`name`, `admin_mail`, `phone_number`, `password`) VALUES
('Admin', 'admin@gmail.com', '8940048700', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `buses`
--

CREATE TABLE `buses` (
  `bus_name` varchar(20) NOT NULL,
  `bus_number` int(5) NOT NULL,
  `from_place` varchar(20) NOT NULL,
  `to_place` varchar(20) NOT NULL,
  `time` time NOT NULL,
  `amount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `buses`
--

INSERT INTO `buses` (`bus_name`, `bus_number`, `from_place`, `to_place`, `time`, `amount`) VALUES
('SETC', 1, 'Trichy', 'Madurai', '12:00:00', 140),
('Gov', 3, 'Trichy ', 'Madurai', '20:00:00', 120),
('Gov', 4, 'Trichy   ', 'Madurai', '04:30:00', 120),
('SETC', 5, 'Trichy', 'Madurai', '05:35:00', 140),
('SETC', 60, 'Trichy  ', 'Madurai', '05:30:00', 120),
('SETC', 60, 'Madurai', 'Thoothukudi', '08:15:00', 250),
('SETC', 60, 'Trichy', 'Thoothukudi', '05:43:00', 350),
('Gov', 7, 'trichy', 'madurai', '07:06:00', 130),
('Gov', 70, 'Trichy ', 'Madurai', '07:56:00', 120),
('Gov', 46, 'trichy ', 'madurai', '07:05:00', 120),
('SETC', 78, 'Trichy   ', 'Madurai', '03:45:00', 150),
('SETC', 78, 'Trichy', 'Madurai', '12:00:00', 150),
('Gov', 65, 'Trichy', 'Madurai', '12:00:00', 120),
('SETC', 17, 'Chennai', 'Thoothukudi', '15:10:00', 600),
('Jeyavilas', 84, 'Madurai', 'Sayalkudi', '10:15:00', 110),
('Ratha', 34534, 'Thoothukudi ', 'Sayalkudi', '03:30:00', 50),
('Gov', 85454, 'Kanniyakumari ', 'Chennai', '10:00:00', 950),
('Gov', 98363, 'Chennai', 'Trichy', '08:00:00', 450),
('Gov', 35, 'Tanjavur', 'Trichy', '10:00:00', 70),
('Gov', 353, 'Ariyalur', 'Trichy', '05:00:00', 100),
('SETC', 7456, 'Chennai ', 'Madurai', '15:00:00', 540),
('SETC', 85, 'Trichy ', 'Chennai', '12:15:00', 450),
('SETC', 786, 'Chennai ', 'Trichy', '10:00:00', 500),
('SETC', 74, 'Trichy', 'Madurai', '11:28:00', 120);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `name` varchar(30) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `mail`, `subject`, `message`) VALUES
('AJ', 'user@gmail.com', 'Nothing', 'ragging & dropping assets to the sidebar does now work\r\n- Dragging & dropping a file to a source text automatically inserts a link or path\r\n- Text selection is preserved when switching files\r\n- Template editor now uses the font and color settings from the Font & Colors section\r\n- The color for placeholders in template files can now customized\r\n- Three (adjustable) font & color presets: Standard, Plain, Dark\r\n- Font quirks in the editor resolved\r\n- Post-installed PHP versions will now function in CGI mod'),
('jo', 'user@gmail.com', 'book', 'jasjdfasdfadsklfaskldflaksdsklfadvhfsjdhfbasdjjjjjjjjjjjjjjhnfcklshfljsksdhfdscfasdgadckjfasghfggcshdgfshdfjsdhjfsdfffffffffffffffffffffffffffffffffffffffffffffffsddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd'),
('dfg', 'user@gmail.com', 'sdgfgdfggdffg', 'fdgsdgsdfgsdfgds'),
(' hoi', 'user@gmail.com', 'dfdf', 'fsdf'),
(' hoi', 'user@gmail.com', 'dfdf', 'fsdf'),
('sfsfd', 'user@gmail.com', 'sdfsdf', 'dfsaadfsdfasd'),
('ddfsdf', 'user@gmail.com', 'dfgsdfgsdf', 'dfgsdfsgds'),
('fdfsd', 'user@gmail.com', 'sfgdfgdf', 'dfgdfgfdgsdg'),
('fdfsd', 'user@gmail.com', 'sfgdfgdf', 'dfgdfgfdgsdg'),
('fdgdfsg', 'user@gmail.com', 'sdfsgfdfdf', 'fghdfghdfghdfghgggg');

-- --------------------------------------------------------

--
-- Table structure for table `passengers`
--

CREATE TABLE `passengers` (
  `passenger_name` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `age` int(3) NOT NULL,
  `pnr` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `passengers`
--

INSERT INTO `passengers` (`passenger_name`, `gender`, `age`, `pnr`) VALUES
('prabhu', 'male', 23, 15904),
('Jsfd', 'male', 45, 46019),
('fasdfa', 'male', 34, 46019),
('hfjaskdf', 'female', 23, 46019),
('affffewrwer', 'male', 45, 46019),
('samuvel', 'male', 43, 21788),
('Thaya', 'male', 54, 64523),
('skjfds', 'male', 43, 47813),
('sjldf', 'female', 32, 47813),
('uuu', 'female', 23, 47813),
('aaa', 'male', 43, 49243),
('bbbb', 'female', 19, 49243),
('aaa', 'male', 45, 28165),
('bbbb', 'female', 45, 28165),
('Aj', 'male', 19, 27260),
('riya', 'male', 34, 27260),
('per', 'male', 54, 27260),
('hfhhvj', 'male', 76, 82104),
(' ig', 'male', 54, 45315),
('aaaaaaa', 'male', 5, 38323),
('bbbbbbbbbbb', 'female', 45, 38323),
('fghf', 'male', 56, 81038),
('hiii', 'male', 31, 35282),
('hiii', 'male', 43, 80792),
('gfffds', 'female', 54, 80792),
('ugfdg', 'female', 45, 80792),
('sss', 'female', 45, 13664),
('dfgdfg', 'female ', 45, 13664),
('jjjjj', 'male', 65, 13664),
('jjjj', 'female', 56, 13664),
('sssss', 'male', 65, 13664),
('kkkk', 'female', 97, 13664),
('kkkk', 'male', 76, 35905),
('dddd', 'male', 23, 63755),
('ajfdre', 'male', 45, 91447),
('rtrt', 'male', 54, 61848),
('fdgd', 'female', 54, 61848);

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `bus_name` varchar(20) NOT NULL,
  `bus_number` int(5) NOT NULL,
  `from_place` varchar(20) NOT NULL,
  `to_place` varchar(20) NOT NULL,
  `time` time NOT NULL,
  `amount_paid` int(5) NOT NULL,
  `status` varchar(20) NOT NULL,
  `no_of_passengers` int(100) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `phone_number` bigint(10) NOT NULL,
  `date` date NOT NULL,
  `pnr` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`bus_name`, `bus_number`, `from_place`, `to_place`, `time`, `amount_paid`, `status`, `no_of_passengers`, `mail`, `phone_number`, `date`, `pnr`) VALUES
('SETC', 78, 'Trichy   ', 'Madurai', '03:45:00', 900, 'Confirmed', 6, 'user@gmail.com', 8765432345, '2023-02-05', 13664),
('SETC', 78, 'Trichy ', 'Madurai', '03:45:00', 150, 'Completed', 1, 'user@gmail.com', 9886732562, '2022-12-29', 15904),
('Gov', 4, 'Trichy  ', 'Madurai', '04:15:00', 120, 'Completed', 1, 'user@gmail.com', 9764754674, '2023-01-02', 21788),
('Gov', 85454, 'Kanniyakumari ', 'Chennai', '10:00:00', 2850, 'Completed', 3, 'riyas@gmail.com', 9876543234, '2023-01-14', 27260),
('SETC', 17, 'Chennai', 'Thoothukudi', '15:10:00', 1200, 'Completed', 2, 'user@gmail.com', 9998765432, '2023-01-05', 28165),
('SETC', 78, 'Trichy   ', 'Madurai', '03:45:00', 150, 'Completed', 1, 'user@gmail.com', 8765432345, '2023-01-29', 35282),
('SETC', 78, 'Trichy   ', 'Madurai', '03:45:00', 150, 'Confirmed', 1, 'user@gmail.com', 9876543245, '2023-02-05', 35905),
('Gov', 85454, 'Kanniyakumari ', 'Chennai', '10:00:00', 1900, 'Completed', 2, 'user@gmail.com', 9876543345, '2023-01-19', 38323),
('Gov', 353, 'Ariyalur', 'Trichy', '05:00:00', 100, 'Completed', 1, 'user@gmail.com', 9876546765, '2023-01-21', 45315),
('SETC', 78, 'Trichy  ', 'Madurai', '03:45:00', 640, 'Completed', 4, 'user@gmail.com', 7534532523, '2023-01-01', 46019),
('SETC', 78, 'Trichy  ', 'Madurai', '03:45:00', 480, 'Completed', 3, 'user@gmail.com', 9834757454, '2023-01-05', 47813),
('SETC', 78, 'Trichy  ', 'Madurai', '03:45:00', 320, 'Completed', 2, 'uuu123@gmail.com', 9876543210, '2023-01-05', 49243),
('SETC', 78, 'Trichy   ', 'Madurai', '03:45:00', 300, 'Confirmed', 2, 'user@gmail.com', 7856465456, '2023-02-05', 61848),
('SETC', 78, 'Trichy   ', 'Madurai', '03:45:00', 150, 'Confirmed', 1, 'user@gmail.com', 9876544354, '2023-02-05', 63755),
('SETC', 78, 'Trichy  ', 'Madurai', '03:45:00', 160, 'Completed', 1, 'user@gmail.com', 9485764544, '2023-01-05', 64523),
('SETC', 78, 'Trichy   ', 'Madurai', '03:45:00', 450, 'Completed', 3, 'user@gmail.com', 9876543456, '2023-01-29', 80792),
('SETC', 60, 'Trichy  ', 'Madurai', '05:30:00', 120, 'Completed', 1, 'user@gmail.com', 9876544678, '2023-01-28', 81038),
('SETC', 7456, 'Chennai ', 'Madurai', '15:00:00', 540, 'Completed', 1, 'user@gmail.com', 9876543234, '2023-01-12', 82104),
('SETC', 78, 'Trichy   ', 'Madurai', '03:45:00', 150, 'Confirmed', 1, 'user@gmail.com', 9675432567, '2023-02-04', 91447);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(30) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `phone_number` bigint(10) NOT NULL,
  `security_question` varchar(20) NOT NULL,
  `security_question_answer` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `mail`, `phone_number`, `security_question`, `security_question_answer`, `password`) VALUES
('sdf', 'adf@gmail.com', 8656434563, 'pet', 'tgtrsg', '12'),
('fdssg', 'afs@gmail.com', 8755675676, 'color', 'rgr', '123'),
('gsfdfdgfd', 'aja@gmail.com', 9654645365, 'color', 'sdfsf', '12'),
('Ajay', 'ajay@gmail.com', 6894354789, 'color', 'ruby', '12'),
('gs', 'dfgs@gmail.com', 8356456345, 'pet', 'fdgs', '12'),
('gf', 'dfgsfdfg@gmail.com', 7546546475, 'color', 'dfgs', 'dfgs'),
('dfs', 'fa@gmail.com', 9564565756, 'color', 'er', '1243'),
('fsdgdsdgg', 'gds@gmail.com', 8567456456, 'color', 'fhdf', 'gfhdfg'),
('klhjgc', 'hkgg@gmail.com', 7654345676, 'color', 'jbkhvcv', 'mm'),
('iii', 'iii@gmail.com', 6597865756, 'color', 'tres', '123'),
('Infant', 'infant@gmail.com', 8765645423, 'country', 'rdgsdfg', '11'),
('lhjbl', 'jhkg@gmail.com', 8766746764, 'color', 'jhgj', 'jhkjhv'),
('riyas', 'riyas@gmail.com', 9876543456, 'pet', 'hi', '1234'),
('jasdf', 'saf@gmail.com', 7467657567, 'pet', 'dhs', '1234'),
('User', 'user@gmail.com', 8964344344, 'pet', 'ruby', '1234'),
('uuu123', 'uuu123@gmail.com', 9876543210, 'color', 'red', 'red'),
('uuu', 'uuu@gmail.com', 9887642342, 'pet', 'sffs', 'uuu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD UNIQUE KEY `mail` (`admin_mail`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD UNIQUE KEY `pnr` (`pnr`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `mail` (`mail`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
