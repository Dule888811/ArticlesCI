-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2020 at 08:22 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `articles`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `headline` varchar(20) NOT NULL,
  `content` varchar(400) NOT NULL,
  `image` text DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `headline`, `content`, `image`, `user_id`) VALUES
(6, 'jjjjjjjjjjjjjjj', 'ccccccccccccc', '\",1608101641Koala.jpg,1608101641Jellyfish.jpg\"', 1),
(10, 'naslovcccc', 'Enter text here...', '\",1608102413Koala.jpg\"', 1),
(11, 'naslovcccc', 'Enter text here...', '\",1608102924Koala.jpg\"', 1),
(12, 'naslovcccc', 'Enter text here...', '\"\"', 1),
(13, 'naslovcccc', 'Enter text here...', '\"\"', 1),
(14, 'naslovcccc', 'Enter text here...', '\"\"', 1),
(15, 'naslovcccc', 'Enter text here...', '\"\"', 1),
(16, '', '', NULL, 1),
(17, 'naslovcccc', 'Enter text here...', '\"\"', 1),
(18, 'naslovcccc', 'Enter text here...', '\"\"', 1),
(19, 'naslovcccc', 'Enter text here...', '\"\"', 1),
(20, 'naslovcccc', 'Enter text here...', '\"\"', 1),
(21, 'naslovcccc', 'Enter text here...', '\"\"', 1),
(22, '', '', NULL, 1),
(23, 'naslovcccc', 'Enter text here...', '\"\"', 1),
(24, 'naslovcccc', 'Enter text here...', '\"\"', 1),
(25, 'naslovcccc', 'Enter text here...', '\"\"', 1),
(26, 'naslovcccc', 'Enter text here...', '\"\"', 1),
(27, 'naslovcccc', 'Enter text here...', '\"\"', 1),
(29, 'hhhhhhhhhhhhhhhhh', 'Enter text here...', '\"\"', 1),
(30, 'hhhhhhhhhhhhhhhhh', 'Enter text here...', '\"\"', 1),
(31, 'hhhhhhhhhhhhhhhhh', 'Enter text here...', '\"\"', 1),
(32, 'TitleTitle', 'Enter text here...TitleTitleTitleTitleTitleTitle', '\"\"', 1),
(33, 'TitleTitle', 'Enter text here...TitleTitleTitleTitleTitleTitle', '\"\"', 1),
(34, 'TitleTitle', 'Enter text here...TitleTitleTitleTitleTitleTitle', '\"\"', 1),
(35, 'TitleTitle', 'Enter text here...TitleTitleTitleTitleTitleTitle', '\"\"', 1),
(36, 'TitleTitle', 'Enter text here...TitleTitleTitleTitleTitleTitle', '\"\"', 1),
(37, 'TitleTitle', 'Enter text here...TitleTitleTitleTitleTitleTitle', '\"\"', 1),
(38, 'TitleTitle', 'Enter text here...TitleTitleTitleTitleTitleTitle', '\"\"', 1),
(39, 'TitleTitle', 'Enter text here...TitleTitleTitleTitleTitleTitle', '\",1608098740Jellyfish.jpg\"', 1),
(40, 'Titlejson_encode(imp', 'json_encode(implode(\',\' ,$dataImage))', '\",1608099170Koala.jpg,1608099170Koala.jpg,1608099170Koala.jpg\"', 1),
(41, 'Titlejson_encode(imp', 'json_encode(implode(\',\' ,$dataImage))', '\",1608099212Koala.jpg,1608099212Lighthouse.jpg,1608099212Chrysanthemum.jpg\"', 1),
(42, 'Titlejson_encode(imp', 'json_encode(implode(\',\' ,$dataImage))', '\",1608099243Koala.jpg,1608099243Lighthouse.jpg,1608099243Chrysanthemum.jpg\"', 1),
(43, 'Titlejson_encode(imp', 'json_encode(implode(\',\' ,$dataImage))', '\",1608099286Koala.jpg,1608099286Tulips.jpg,1608099286Tulips.jpg\"', 1),
(44, 'Titlejson_encode(imp', 'json_encode(implode(\',\' ,$dataImage))', '\",1608099415Koala.jpg,1608099415Jellyfish.jpg,1608099415Hydrangeas.jpg\"', 1),
(45, 'Titlejson_encode(imp', 'json_encode(implode(\',\' ,$dataImage))', '\",1608099482Koala.jpg\"', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
