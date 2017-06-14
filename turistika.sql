-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2017 at 01:52 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `turistika`
--

-- --------------------------------------------------------

--
-- Table structure for table `agencies`
--

CREATE TABLE `agencies` (
  `id` int(11) NOT NULL,
  `title` varchar(75) COLLATE utf8_slovenian_ci NOT NULL,
  `user_name` varchar(100) COLLATE utf8_slovenian_ci NOT NULL,
  `pass` varchar(250) COLLATE utf8_slovenian_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_slovenian_ci NOT NULL,
  `avatar` varchar(150) COLLATE utf8_slovenian_ci DEFAULT NULL,
  `admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Dumping data for table `agencies`
--

INSERT INTO `agencies` (`id`, `title`, `user_name`, `pass`, `email`, `avatar`, `admin`) VALUES
(1, 'Kompas', 'kompas', 'kompas', 'kompas@gmail.com', NULL, 1),
(2, 'CIA', 'Cia', '7e09880f9e26878470db1a5302e48e83bd2a92b5', 'cia@gmail.com', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `agency_comments`
--

CREATE TABLE `agency_comments` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `agency_id` int(11) NOT NULL,
  `content` text COLLATE utf8_slovenian_ci NOT NULL,
  `date_add` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Dumping data for table `agency_comments`
--

INSERT INTO `agency_comments` (`id`, `user_id`, `agency_id`, `content`, `date_add`) VALUES
(3, 4, 2, 'test 3sdsasdg\r\ndsgsgsogmskgpsg\r\ngosdgdiokhgnogwnsr', '2017-06-14 09:38:08'),
(4, 4, 2, 'SPY AGENCY NOT GOOD.', '2017-06-14 09:50:19');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `destination_id` int(11) NOT NULL,
  `content` text COLLATE utf8_slovenian_ci NOT NULL,
  `date_add` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `destination_id`, `content`, `date_add`) VALUES
(1, 1, 1, 'To je TOP destinacija!', '2015-06-01 07:12:25'),
(2, 2, 1, 'Malo moram popraviti zamike!', '2015-06-01 07:59:45'),
(3, 2, 1, 'asdasdasd', '2015-06-01 07:59:48'),
(4, 2, 1, 'sdfsdfsdf', '2015-06-05 08:50:01'),
(5, 4, 1, 'TOP!', '2017-06-12 13:47:50');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `title` varchar(200) COLLATE utf8_slovenian_ci NOT NULL,
  `short` varchar(5) COLLATE utf8_slovenian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `title`, `short`) VALUES
(6, 'Slovenija', 'SLO'),
(7, 'Italija', 'ITA'),
(8, 'Bosna in hercegovina', 'BiH'),
(9, 'Avstrija', 'AUT');

-- --------------------------------------------------------

--
-- Table structure for table `destinations`
--

CREATE TABLE `destinations` (
  `id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `agency_id` int(11) NOT NULL,
  `title` varchar(200) COLLATE utf8_slovenian_ci NOT NULL,
  `description` text COLLATE utf8_slovenian_ci,
  `www` varchar(200) COLLATE utf8_slovenian_ci DEFAULT NULL,
  `lat` varchar(100) COLLATE utf8_slovenian_ci DEFAULT NULL,
  `alt` varchar(100) COLLATE utf8_slovenian_ci DEFAULT NULL,
  `cost` int(11) DEFAULT NULL,
  `duration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Dumping data for table `destinations`
--

INSERT INTO `destinations` (`id`, `country_id`, `agency_id`, `title`, `description`, `www`, `lat`, `alt`, `cost`, `duration`) VALUES
(1, 6, 1, 'Trg mladost 3', 'Najboljša šola na svetu', 'vss.scv.si', '46.8437568', '15.98234765', 5000, 365),
(2, 8, 1, 'VELENJE', 'saf,msdbnlfsndlkjfnsdlkjf', 'sdfbsdkfjnkl.net', '32', '34', 459, 5),
(3, 7, 1, 'Bled', 'Lep otok s cerkvijo.', 'www.bled.si', '32', '12', 3, 7),
(4, 7, 1, 'Hradčani222', 'asfdasdfsdf', 'www.nevem.com', '123', '123', 294, 3);

-- --------------------------------------------------------

--
-- Table structure for table `pictures`
--

CREATE TABLE `pictures` (
  `id` int(11) NOT NULL,
  `destination_id` int(11) NOT NULL,
  `url` varchar(200) COLLATE utf8_slovenian_ci NOT NULL,
  `title` varchar(200) COLLATE utf8_slovenian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Dumping data for table `pictures`
--

INSERT INTO `pictures` (`id`, `destination_id`, `url`, `title`) VALUES
(1, 1, 'slike/20150522090447000000Lighthouse.jpg', 'safssdsf'),
(2, 3, 'slike/20150522090518000000Penguins.jpg', 'dsfsfdsdfsdfs'),
(3, 3, 'slike/20150522094140000000Chrysanthemum.jpg', 'sdfdfssdfsfd'),
(4, 3, 'slike/20150522094211000000VSO-LAB7.doc', 'fdssfdfd'),
(5, 3, 'slike/20150522100118000000Chrysanthemum.jpg', 'dsffdssfddsfs'),
(6, 3, 'slike/20150522100126000000Lighthouse.jpg', 'fdsfdssdfsdf'),
(7, 3, 'slike/20150522100146000000Penguins.jpg', 'hdfhfdghfdgh'),
(8, 4, 'slike/20150522101340000000Lighthouse.jpg', 'ggafdasdf'),
(9, 1, 'slike/20150522101353000000Chrysanthemum.jpg', 'sdgljsgk');

-- --------------------------------------------------------

--
-- Table structure for table `rates`
--

CREATE TABLE `rates` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `destination_id` int(11) NOT NULL,
  `date_add` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `rate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Dumping data for table `rates`
--

INSERT INTO `rates` (`id`, `user_id`, `destination_id`, `date_add`, `rate`) VALUES
(1, 4, 1, '2017-06-12 13:53:03', 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(100) COLLATE utf8_slovenian_ci NOT NULL,
  `pass` varchar(100) COLLATE utf8_slovenian_ci NOT NULL,
  `first_name` varchar(50) COLLATE utf8_slovenian_ci DEFAULT NULL,
  `last_name` varchar(50) COLLATE utf8_slovenian_ci NOT NULL,
  `avatar` varchar(200) COLLATE utf8_slovenian_ci DEFAULT NULL,
  `admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `pass`, `first_name`, `last_name`, `avatar`, `admin`) VALUES
(3, 'admin@gmail.com', 'b0098f084ad999df0cf755479953dbc225907a4a', 'Admin', 'Admin', NULL, 1),
(4, 'miha.slatnar@gmail.com', '74ed99a7fa78285c625a399701f0e49c4e037b54', 'Miha', 'Slatnar', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users_destinations`
--

CREATE TABLE `users_destinations` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `destination_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Dumping data for table `users_destinations`
--

INSERT INTO `users_destinations` (`id`, `user_id`, `destination_id`, `date`) VALUES
(1, 4, 1, '2017-06-12 14:43:44');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `destination_id` int(11) NOT NULL,
  `title` varchar(200) COLLATE utf8_slovenian_ci NOT NULL,
  `url` varchar(200) COLLATE utf8_slovenian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agencies`
--
ALTER TABLE `agencies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agency_comments`
--
ALTER TABLE `agency_comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `agency_id` (`agency_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `destination_id` (`destination_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destinations`
--
ALTER TABLE `destinations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `country_id` (`country_id`),
  ADD KEY `agency_id` (`agency_id`);

--
-- Indexes for table `pictures`
--
ALTER TABLE `pictures`
  ADD PRIMARY KEY (`id`),
  ADD KEY `destination_id` (`destination_id`);

--
-- Indexes for table `rates`
--
ALTER TABLE `rates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `destination_id` (`destination_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `users_destinations`
--
ALTER TABLE `users_destinations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `destination_id` (`destination_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `destination_id` (`destination_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agencies`
--
ALTER TABLE `agencies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `agency_comments`
--
ALTER TABLE `agency_comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `destinations`
--
ALTER TABLE `destinations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pictures`
--
ALTER TABLE `pictures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `rates`
--
ALTER TABLE `rates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users_destinations`
--
ALTER TABLE `users_destinations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
