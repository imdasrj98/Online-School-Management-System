-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2020 at 03:57 PM
-- Server version: 10.4.11-MariaDB
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
-- Database: `debayan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admindetail`
--

CREATE TABLE `admindetail` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(500) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(10) NOT NULL,
  `cabin` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admindetail`
--

INSERT INTO `admindetail` (`id`, `name`, `address`, `email`, `phone`, `cabin`) VALUES
(1111, 'Suhasiny', 'Howrah', 'suha@gmail.com', 2147483647, 'A207'),
(1235, 'Sourav Agarwal', 'Vellore', 'coolsourav@gmail.com', 649863485, 'A201'),
(1240, '0', 'Kolkata', 'subha@gmail.com', 659522952, 'A205'),
(1894, 'wrjvgbwhieuo', 'wrhigowe', 'dslknghqk', 1984984, 'wrihgwoie'),
(4146, 'rjgweijgweio', 'eoghqwoeigfqa', 'renlhagwierjg', 684189, 'rghweiogh'),
(4567, 'febeq', 'ewgwqe', 'wrgrw@gmail.com', 1545, 'dfq');

-- --------------------------------------------------------

--
-- Table structure for table `administratordetail`
--

CREATE TABLE `administratordetail` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(500) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(10) NOT NULL,
  `cabin` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `administratordetail`
--

INSERT INTO `administratordetail` (`id`, `name`, `address`, `email`, `phone`, `cabin`) VALUES
(468, '4rbhvwoi', 'wrhjqgp', 'wrgihwpeg', 4564, 'dejhvqie'),
(1236, 'Geeta Munjal', 'Katpadi', 'munjalgeeta@gmail.com', 89681891, 'A202'),
(1241, '0', 'Punjab', 'ankit@gmail.com', 496226559, 'A206'),
(4564, 'rklhgqje', 'erj3oh', 'erlhiw4e', 454653, 'ergjler'),
(4568, 'avq', 'safq', 'veveq@gmail.com', 1566546, 'aefe'),
(5464, 'hleijql', 'frnb;o', 'wrl3poq', 48947987, 'whrgowpreu'),
(156488, 'wrghwieo', 'RJHWPOERG', 'ewhgowpehj4', 4984869, 'rjhwpo');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `bid` int(10) NOT NULL,
  `bname` int(10) NOT NULL,
  `bauthor` varchar(200) NOT NULL,
  `copiesleft` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `complain` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`complain`) VALUES
('too much noise'),
('too much noise pollution');

-- --------------------------------------------------------

--
-- Table structure for table `coursedetails`
--

CREATE TABLE `coursedetails` (
  `cid` int(10) NOT NULL,
  `cname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coursedetails`
--

INSERT INTO `coursedetails` (`cid`, `cname`) VALUES
(111, 'Programming');

-- --------------------------------------------------------

--
-- Table structure for table `materail`
--

CREATE TABLE `materail` (
  `id` int(10) NOT NULL,
  `teacherid` int(10) NOT NULL,
  `materialfile` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `materail`
--

INSERT INTO `materail` (`id`, `teacherid`, `materialfile`) VALUES
(123, 1237, 0x68656c6c6f31);

-- --------------------------------------------------------

--
-- Table structure for table `notcie`
--

CREATE TABLE `notcie` (
  `adminid` int(10) NOT NULL,
  `notice` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `programmedetails`
--

CREATE TABLE `programmedetails` (
  `pid` int(10) NOT NULL,
  `pname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `programmedetails`
--

INSERT INTO `programmedetails` (`pid`, `pname`) VALUES
(111, 'MCA');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `resultid` int(10) NOT NULL,
  `studentid` int(10) NOT NULL,
  `examname` varchar(100) NOT NULL,
  `resultfile` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `schoolstaff`
--

CREATE TABLE `schoolstaff` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(500) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(10) NOT NULL,
  `room` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schoolstaff`
--

INSERT INTO `schoolstaff` (`id`, `name`, `address`, `email`, `phone`, `room`) VALUES
(1112, 'rhwegoi', 'Asguard', 'rr@avengers.com', 48415, 'A205');

-- --------------------------------------------------------

--
-- Table structure for table `studentdetail`
--

CREATE TABLE `studentdetail` (
  `name` varchar(100) NOT NULL,
  `regno` int(10) NOT NULL,
  `address` varchar(200) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(10) NOT NULL,
  `blood` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentdetail`
--

INSERT INTO `studentdetail` (`name`, `regno`, `address`, `email`, `phone`, `blood`) VALUES
('Bhola', 1122, 'hell', 'egnwek@gmail.com', 1546468, 'AB'),
('Debayan Das', 1234, 'Kolkata', 'dasriju98@gmail.com', 2147483647, 'o+'),
('Anish Si', 1238, 'Kolkata', 'snansih@gmail.com', 64968298, 'A+');

-- --------------------------------------------------------

--
-- Table structure for table `studentlogin`
--

CREATE TABLE `studentlogin` (
  `userid` int(10) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentlogin`
--

INSERT INTO `studentlogin` (`userid`, `password`) VALUES
(1234, 'debayan');

-- --------------------------------------------------------

--
-- Table structure for table `teacherdetail`
--

CREATE TABLE `teacherdetail` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(500) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(10) NOT NULL,
  `cabin` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacherdetail`
--

INSERT INTO `teacherdetail` (`id`, `name`, `address`, `email`, `phone`, `cabin`) VALUES
(1237, 'Madhurima Chakraborty', 'Hariyana', 'madhurima@gmail.com', 489619822, 'A203'),
(1239, 'Himadri S. Chatterjee', 'Kolkata', 'himadri@gmail.com', 498649296, ''),
(1240, 'Captain America', 'New York', 'caps@avengers.com', 2147483647, 'A205');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `userid` int(10) NOT NULL,
  `bid` int(10) NOT NULL,
  `issudate` varchar(100) NOT NULL,
  `returndate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `password`, `type`) VALUES
(1122, 'asd', 'student'),
(1234, 'debayan', 'student'),
(1235, 'sourav', 'admin'),
(1236, 'geeta', 'administrator'),
(1237, 'madhu', 'teacher'),
(1240, 'ass', 'teacher'),
(4567, 'asd', 'admin'),
(4568, 'asd', 'administrator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admindetail`
--
ALTER TABLE `admindetail`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `administratordetail`
--
ALTER TABLE `administratordetail`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`complain`);

--
-- Indexes for table `coursedetails`
--
ALTER TABLE `coursedetails`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `materail`
--
ALTER TABLE `materail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teacherid` (`teacherid`);

--
-- Indexes for table `notcie`
--
ALTER TABLE `notcie`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `programmedetails`
--
ALTER TABLE `programmedetails`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD KEY `studentid` (`studentid`);

--
-- Indexes for table `schoolstaff`
--
ALTER TABLE `schoolstaff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentdetail`
--
ALTER TABLE `studentdetail`
  ADD PRIMARY KEY (`regno`),
  ADD UNIQUE KEY `regno` (`regno`);

--
-- Indexes for table `studentlogin`
--
ALTER TABLE `studentlogin`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `userid` (`userid`);

--
-- Indexes for table `teacherdetail`
--
ALTER TABLE `teacherdetail`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD KEY `bid` (`bid`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `userid` (`userid`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `materail`
--
ALTER TABLE `materail`
  ADD CONSTRAINT `materail_ibfk_1` FOREIGN KEY (`teacherid`) REFERENCES `teacherdetail` (`id`) ON DELETE NO ACTION;

--
-- Constraints for table `notcie`
--
ALTER TABLE `notcie`
  ADD CONSTRAINT `notcie_ibfk_1` FOREIGN KEY (`adminid`) REFERENCES `admindetail` (`id`);

--
-- Constraints for table `result`
--
ALTER TABLE `result`
  ADD CONSTRAINT `result_ibfk_1` FOREIGN KEY (`studentid`) REFERENCES `studentdetail` (`regno`);

--
-- Constraints for table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `transaction_ibfk_1` FOREIGN KEY (`bid`) REFERENCES `books` (`bid`) ON DELETE NO ACTION,
  ADD CONSTRAINT `transaction_ibfk_2` FOREIGN KEY (`userid`) REFERENCES `users` (`userid`) ON DELETE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
