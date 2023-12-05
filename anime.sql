-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2022 at 02:47 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci4`
--

-- --------------------------------------------------------

--
-- Table structure for table `anime`
--

CREATE TABLE `anime` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `studio` varchar(255) NOT NULL,
  `produser` varchar(255) NOT NULL,
  `cover` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anime`
--

INSERT INTO `anime` (`id`, `judul`, `slug`, `genre`, `studio`, `produser`, `cover`, `created_at`, `updated_at`) VALUES
(1, 'Spy x Family', 'spy-x-family', 'Action, Comedy', ' TV Tokyo, Shogakukan-Shueisha Productions, TOHO animation, Shueisha', 'Wit Studio, CloverWorks', 'spy.jpg', '2022-05-17 10:47:05', '2022-05-20 09:32:48'),
(2, 'One Piece', 'one-piece', 'Action, Adventure, Fantasy', 'Toei Animation', ' Fuji TV, TAP, Shueisha', 'one-piece.jpg', '2022-05-17 10:50:57', '2022-05-17 10:50:57'),
(3, 'Kimi no Na wa', 'kimi-no-na-wa', ' Drama, Supernatural', ' CoMix Wave Films', ' Toho, Sound Team Don Juan, Amuse, JR East Marketing & Communications, Kadokawa, voque ting', 'kimi-no-na-wa.jpg', '2022-05-17 10:54:40', '2022-05-17 10:54:40'),
(4, 'The Wolf Children Ame and Yuki', 'the-wolf-children-ame-and-yuki', ' Fantasy, Slice of Life', 'Studio Chizu', 'Madhouse, VAP, Dentsu, Yomiuri Telecasting, Kadokawa Shoten, Toho, Hiroshima Television', 'the-wolf-children-ame-and-yuki.jpg', '2022-05-17 11:07:54', '2022-05-17 11:07:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anime`
--
ALTER TABLE `anime`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anime`
--
ALTER TABLE `anime`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
