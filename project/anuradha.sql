-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2017 at 10:19 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `anuradha`
--

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `id` int(30) NOT NULL,
  `std_id` int(30) DEFAULT NULL,
  `sub` int(30) DEFAULT NULL,
  `mark` int(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`id`, `std_id`, `sub`, `mark`) VALUES
(1, 17, 13, 6),
(2, 17, 13, 6),
(3, 17, 13, 8),
(4, 17, 13, 8),
(5, 17, 13, 9),
(6, 17, 13, 7),
(7, 17, 14, 1),
(8, 17, 14, 1),
(9, 17, 13, 3),
(10, 17, 13, 3),
(11, 17, 13, 7),
(12, 17, 13, 1),
(13, 17, 13, 1),
(14, 17, 13, 1),
(15, 17, 13, 1),
(16, 17, 13, 1),
(17, 17, 13, 9),
(18, 17, 13, 8),
(19, 17, 13, 8),
(20, 17, 13, 0),
(21, 17, 13, 1),
(22, 1, 13, 0),
(23, 1, 13, 1),
(24, 1, 13, 1);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(40) NOT NULL,
  `fname` varchar(200) DEFAULT NULL,
  `lname` varchar(300) DEFAULT NULL,
  `emailid` varchar(300) DEFAULT NULL,
  `password` varchar(300) DEFAULT NULL,
  `gender` varchar(200) DEFAULT NULL,
  `age` int(30) DEFAULT NULL,
  `addres` varchar(300) DEFAULT NULL,
  `contact` int(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `fname`, `lname`, `emailid`, `password`, `gender`, `age`, `addres`, `contact`) VALUES
(1, 'anu', 'radha', 'a@gmail.com', '1234', 'femail', 20, 'alwar', 123);

-- --------------------------------------------------------

--
-- Table structure for table `sub`
--

CREATE TABLE `sub` (
  `id` int(40) NOT NULL,
  `subject` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub`
--

INSERT INTO `sub` (`id`, `subject`) VALUES
(13, 'HTML'),
(14, 'PHP'),
(17, 'CSS'),
(18, 'JAVASRIPT'),
(33, 'jquery');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(10) NOT NULL,
  `sub` int(10) NOT NULL,
  `questions` varchar(255) NOT NULL,
  `first` varchar(150) NOT NULL,
  `second` varchar(150) NOT NULL,
  `third` varchar(150) NOT NULL,
  `fourth` varchar(150) NOT NULL,
  `right_answer` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `sub`, `questions`, `first`, `second`, `third`, `fourth`, `right_answer`) VALUES
(1, 13, 'what is HTML?', 'markup language', 'programming language', 'machine language', ' assembly language', 'markup language '),
(2, 13, 'A webpage displays a picture. what tag was used to display that picture?', 'picture', 'image', 'img', 'src', 'img'),
(3, 13, '<b> tag makes the enclosed text bold. what is other tag to make text bold.', '<strong>', '<dar>', '<black>', '<emp>', '<strong>'),
(4, 13, 'Tags and text that are not directly displayed on the pages are written in__section.', '<html>', '<head>', '<title>', '<body>', '<body>'),
(5, 14, 'which tag insert a line horizontally on your webpage', '<hr>', '<line>', '<line direction=\"horizontal\">', '<tr>', '<hr>'),
(12, 13, 'choose the correct HTML tag for the largest heading?', '<h1>', '<h6>', '<h10>', '<head>', '<h1>'),
(13, 13, '<td>...</td> tag is used for', 'table heading', 'table records', 'table rows', 'none of the above', 'table records'),
(14, 13, '<ul>...</ul> tag is used for', 'display the numbered list', 'underline the text', 'display the bulleted text', 'bold the text', 'display the bulleted text'),
(15, 13, 'text within <strong>...</strong> tag is displayed as', 'bold', 'italic', 'list', 'indented', 'bold'),
(16, 13, 'text within <em>..</em> tag is displayed as', 'bold', 'italic', 'list', 'indented', 'italic'),
(19, 14, 'Demo', 'Demo', 'Demo', 'Dmeo', 'Dmeo', 'Dmeo'),
(20, 14, 'Demo', 'Demo', 'Demo', 'Dmeo', 'Dmeo', 'Dmeo'),
(21, 13, ',mm,,m', 'nmm,,', 'jhn', 'mnm', 'hghnmnn', 'hghjh'),
(22, 13, 'hjhjjnmk', 'hjhkjj', 'nnm', 'jlkkm', 'lkm', 'kjjkk');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `std_id` (`std_id`),
  ADD KEY `sub` (`sub`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub`
--
ALTER TABLE `sub`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub` (`sub`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `marks`
--
ALTER TABLE `marks`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sub`
--
ALTER TABLE `sub`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `marks`
--
ALTER TABLE `marks`
  ADD CONSTRAINT `marks_ibfk_1` FOREIGN KEY (`std_id`) REFERENCES `student` (`id`),
  ADD CONSTRAINT `marks_ibfk_2` FOREIGN KEY (`sub`) REFERENCES `sub` (`id`);

--
-- Constraints for table `test`
--
ALTER TABLE `test`
  ADD CONSTRAINT `test_ibfk_1` FOREIGN KEY (`sub`) REFERENCES `sub` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
