-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Dec 17, 2022 at 01:22 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `haugs`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `S.N` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `Date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`S.N`, `name`, `Email`, `phone`, `comment`, `Date`) VALUES
(1, 'Asmit chaudhary', 'aayush@gmail.com', '9819302671', 'hlw baby', '2022-05-22'),
(2, 'Asmit chaudhary', 'aashish@gmail.com', '9819302671', '2211', '2022-05-22'),
(3, 'Aayush chaudhary', 'aayush@gmail.com', '9819302672', 'Hii i am', '2022-05-22'),
(4, 'Asmit chaudhary', 'asmitrehhl@gmail.com', '9819902671', 'heyy man', '2022-05-23'),
(5, 'Asmit chaudhary', 'asmit.backup@gmail.com', '9862289721', 'assgvjn', '2022-08-23'),
(9, 'Asmit chaudhary', 'asmitreal@gmail.com', '9819302671', 'asss', '2022-08-30');

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `I.D` int(100) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `gender` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `region` varchar(100) NOT NULL,
  `postal` varchar(50) NOT NULL,
  `file_img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`I.D`, `fname`, `email`, `phone`, `date`, `gender`, `address`, `country`, `city`, `region`, `postal`, `file_img`) VALUES
(1, 'Asmit Chaudhary', 'asmit.backup@gmail.com', '9819302671', '2022-12-05', 'on', 'Biratnagar', 'Nepal', 'Duhabi', 'sunsari', '5604', '');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `S.N` int(11) NOT NULL,
  `user` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `num` int(100) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `file_doc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`S.N`, `user`, `title`, `num`, `date`, `file_doc`) VALUES
(1, 'LINQ Query Method', 'Computer programer', 12, '2022-12-16', '291721538_412136837598404_6929036325511613569_n.jpg'),
(2, 'ABC School', 'Teacher', 2, '2022-12-17', 'My project.png');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `S.N` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `file_doc` varchar(255) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`S.N`, `user`, `file_doc`, `date`) VALUES
(1, 'Health Camp for Blind People', 'IMG_20210512_172549.jpg', '0000-00-00'),
(13, 'Food service ', '291721538_412136837598404_6929036325511613569_n.jpg', '2022-12-16'),
(14, 'Food service ', '291721538_412136837598404_6929036325511613569_n.jpg', '2022-12-16'),
(15, 'Immunization', 'download-removebg-preview.png', '2022-12-17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` varchar(20) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `user_type`) VALUES
(24, 'Asmit chy', 'asmit.backup@gmail.com', '618a96b835716f59492a60a2258a6e8c', 'user'),
(25, 'smarika', 'smarika@gmail.com', 'f993009d405a28bc2d26ad0c83a68f28', 'user'),
(26, 'Aashish Bishwas', 'ashish@gmail.com', '7b69ad8a8999d4ca7c42b8a729fb0ffd', 'user'),
(27, 'Real Asmit', 'admian@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'user'),
(28, 'Real Asmit', 'admi.n@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`S.N`);

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`I.D`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`S.N`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`S.N`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `S.N` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `I.D` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `S.N` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `S.N` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
