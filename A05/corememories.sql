-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2024 at 07:06 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `corememories`
--

-- --------------------------------------------------------

--
-- Table structure for table `islandcontents`
--

CREATE TABLE `islandcontents` (
  `islandContentID` int(4) NOT NULL,
  `islandOfPersonalityID` int(4) NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `content` varchar(300) NOT NULL,
  `color` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `islandcontents`
--

INSERT INTO `islandcontents` (`islandContentID`, `islandOfPersonalityID`, `image`, `content`, `color`) VALUES
(1, 1, 'img/loving1.jpg', 'Family represents a source of comfort, unconditional love, and enduring support, where peace and happiness thrive together.', NULL),
(2, 1, 'img/loving2.jpg', 'Friends provides laughter, understanding, and shared memories, creating a space where joy and connection flourish effortlessly.', NULL),
(3, 1, 'img/loving3.jpg', 'My beloved is a place of unwavering love, deep connection, and serene happiness, where every moment is filled with warmth and fulfillment.', NULL),
(4, 2, 'img/adventurous1.jpg', 'Hiking on breathtaking trails, zip-lining through forests, or exploring hidden caves—your love for thrilling outdoor activities defines your adventurous spirit.', NULL),
(5, 2, 'img/adventurous2.jpeg', 'Traveling to new destinations to experience diverse cultures, cuisines, and traditions feeds your curiosity and broadens your horizons.', NULL),
(6, 2, 'img/adventurous3.jpg', 'Whether its facing a fear of heights or trying an extreme sport, you embrace challenges as opportunities to grow and discover your limits.', NULL),
(7, 3, 'img/foodie1.jpg', 'Exploring diverse cuisines, from street food to fine dining, and always being on the lookout for the next unique flavor experience.', NULL),
(8, 3, 'img/foodie2.jpg', 'Experimenting in the kitchen with new recipes, fusion dishes, or baking creations that bring joy to you and those you share them with.', NULL),
(9, 3, 'img/foodie3.jpg', 'Capturing the beauty of plated dishes and sharing your food journeys through vibrant photos, blogs, or social media posts.', NULL),
(10, 4, 'img/et1.jpg', 'Watching classic films, new releases, and cinematic masterpieces, whether solo or with friends, and appreciating the art of storytelling through movies.', NULL),
(11, 4, 'img/et2.jpg', 'Diving into binge-worthy TV series, following ongoing seasons, and discussing the latest episodes and character arcs with fellow fans.', NULL),
(12, 4, 'img/et3.jpg', 'Diving into the colorful world of anime, exploring iconic series, and following captivating characters and unique storylines.', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `islandcontents`
--
ALTER TABLE `islandcontents`
  ADD PRIMARY KEY (`islandContentID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `islandcontents`
--
ALTER TABLE `islandcontents`
  MODIFY `islandContentID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
