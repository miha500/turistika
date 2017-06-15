-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Gostitelj: 127.0.0.1
-- Čas nastanka: 15. jun 2017 ob 12.13
-- Različica strežnika: 10.1.21-MariaDB
-- Različica PHP: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Zbirka podatkov: `turistika`
--

-- --------------------------------------------------------

--
-- Struktura tabele `agencies`
--

CREATE TABLE `agencies` (
  `id` int(11) NOT NULL,
  `title` varchar(75) COLLATE utf8_slovenian_ci NOT NULL,
  `user_name` varchar(100) COLLATE utf8_slovenian_ci NOT NULL,
  `pass` varchar(250) COLLATE utf8_slovenian_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_slovenian_ci NOT NULL,
  `avatar` varchar(150) COLLATE utf8_slovenian_ci DEFAULT NULL,
  `admin` int(11) NOT NULL,
  `description` text COLLATE utf8_slovenian_ci,
  `spletna` text COLLATE utf8_slovenian_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Odloži podatke za tabelo `agencies`
--

INSERT INTO `agencies` (`id`, `title`, `user_name`, `pass`, `email`, `avatar`, `admin`, `description`, `spletna`) VALUES
(1, 'Kompas', 'kompas', 'kompas', 'kompas@gmail.com', 'slike/kompas.jpg', 2, 'Kompas je odlično podjetje z več kot šesto tisoč zadovoljnimi gosti, s številnimi zvestimi poslovnimi partnerji, zadovoljnimi zaposlenimi sodelavci ter številnimi priznanji in certifikati, ki dokazujejo našo uspešno poslovno pot.\n\nVrhunsko strokovno znanje in petinšestdeset let izkušenj ter tradicije nam omogočajo, da učinkovito organiziramo različna krožna potovanja, počitniške pakete ali poslovne storitve, tako v jadranski regiji kot v Evropi ali drugod po svetu.', 'http://www.kompas.si/'),
(2, 'CIA', 'Cia', '7e09880f9e26878470db1a5302e48e83bd2a92b5', 'cia@gmail.com', 'slike/cia-logo.png', 2, 'The Central Intelligence Agency (CIA) is a civilian foreign intelligence service of the United States federal government, tasked with gathering, processing, and analyzing national security information from around the world, primarily through the use of human intelligence (HUMINT). As one of the principal members of the U.S. Intelligence Community (IC), the CIA reports to the Director of National Intelligence and is primarily focused on providing intelligence for the President and Cabinet.', 'http://cia.com/');

-- --------------------------------------------------------

--
-- Struktura tabele `agency_comments`
--

CREATE TABLE `agency_comments` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `agency_id` int(11) NOT NULL,
  `content` text COLLATE utf8_slovenian_ci NOT NULL,
  `date_add` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Odloži podatke za tabelo `agency_comments`
--

INSERT INTO `agency_comments` (`id`, `user_id`, `agency_id`, `content`, `date_add`) VALUES
(1, 3, 2, 'O yeah daddy', '2017-06-14 09:32:11'),
(2, 3, 1, 'hmm', '2017-06-14 10:09:02'),
(3, 3, 1, 'comment', '2017-06-14 16:00:26'),
(4, 3, 1, 'Dj komentiri da vidim če komentira', '2017-06-15 05:48:30');

-- --------------------------------------------------------

--
-- Struktura tabele `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `destination_id` int(11) NOT NULL,
  `content` text COLLATE utf8_slovenian_ci NOT NULL,
  `date_add` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Odloži podatke za tabelo `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `destination_id`, `content`, `date_add`) VALUES
(1, 1, 1, 'To je TOP destinacija!', '2015-06-01 07:12:25'),
(2, 2, 1, 'Malo moram popraviti zamike!', '2015-06-01 07:59:45'),
(3, 2, 1, 'asdasdasd', '2015-06-01 07:59:48'),
(4, 2, 1, 'sdfsdfsdf', '2015-06-05 08:50:01'),
(5, 4, 1, 'TOP!', '2017-06-12 13:47:50'),
(6, 3, 5, 'ok', '2017-06-14 10:02:42'),
(7, 3, 1, 'fd<sdf', '2017-06-14 10:15:23'),
(9, 3, 1, 'funny', '2017-06-14 10:35:39'),
(10, 3, 1, 'that\'s that', '2017-06-14 15:59:51');

-- --------------------------------------------------------

--
-- Struktura tabele `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `title` varchar(200) COLLATE utf8_slovenian_ci NOT NULL,
  `short` varchar(5) COLLATE utf8_slovenian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Odloži podatke za tabelo `countries`
--

INSERT INTO `countries` (`id`, `title`, `short`) VALUES
(6, 'Slovenija', 'SLO'),
(7, 'Italija', 'ITA'),
(8, 'Bosna in hercegovina', 'BiH'),
(9, 'Avstrija', 'AUT');

-- --------------------------------------------------------

--
-- Struktura tabele `destinations`
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
-- Odloži podatke za tabelo `destinations`
--

INSERT INTO `destinations` (`id`, `country_id`, `agency_id`, `title`, `description`, `www`, `lat`, `alt`, `cost`, `duration`) VALUES
(1, 6, 1, 'Trg mladost 3', 'Najboljša šola na svetu', 'vss.scv.si', '46.8437568', '15.98234765', 5000, 365),
(2, 8, 1, 'VELENJE', 'saf,msdbnlfsndlkjfnsdlkjf', 'sdfbsdkfjnkl.net', '32', '34', 459, 5),
(3, 7, 1, 'Bled', 'Lep otok s cerkvijo.', 'www.bled.si', '32', '12', 3, 7),
(4, 7, 1, 'Hradčani222', 'asfdasdfsdf', 'www.nevem.com', '123', '123', 294, 3);

-- --------------------------------------------------------

--
-- Struktura tabele `pictures`
--

CREATE TABLE `pictures` (
  `id` int(11) NOT NULL,
  `destination_id` int(11) NOT NULL,
  `url` varchar(200) COLLATE utf8_slovenian_ci NOT NULL,
  `title` varchar(200) COLLATE utf8_slovenian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Odloži podatke za tabelo `pictures`
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
-- Struktura tabele `rates`
--

CREATE TABLE `rates` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `destination_id` int(11) NOT NULL,
  `date_add` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `rate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Odloži podatke za tabelo `rates`
--

INSERT INTO `rates` (`id`, `user_id`, `destination_id`, `date_add`, `rate`) VALUES
(1, 4, 1, '2017-06-12 13:53:03', 5),
(2, 3, 1, '2017-06-14 09:57:18', 4),
(3, 3, 5, '2017-06-14 10:02:01', 4);

-- --------------------------------------------------------

--
-- Struktura tabele `users`
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
-- Odloži podatke za tabelo `users`
--

INSERT INTO `users` (`id`, `email`, `pass`, `first_name`, `last_name`, `avatar`, `admin`) VALUES
(3, 'admin@gmail.com', 'b0098f084ad999df0cf755479953dbc225907a4a', 'Admin', 'Admin', NULL, 1),
(4, 'miha.slatnar@gmail.com', '74ed99a7fa78285c625a399701f0e49c4e037b54', 'Miha', 'Slatnar', NULL, 0),
(5, 'boi@gmail.com', '1764ee783dcea8f4f5de8ceba7f4477102f17286', 'boi', 'boi', NULL, 0);

-- --------------------------------------------------------

--
-- Struktura tabele `users_destinations`
--

CREATE TABLE `users_destinations` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `destination_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Odloži podatke za tabelo `users_destinations`
--

INSERT INTO `users_destinations` (`id`, `user_id`, `destination_id`, `date`) VALUES
(1, 4, 1, '2017-06-12 14:43:44'),
(2, 3, 1, '2017-06-14 09:31:08'),
(3, 3, 1, '2017-06-14 09:58:01'),
(4, 3, 1, '2017-06-14 09:58:09');

-- --------------------------------------------------------

--
-- Struktura tabele `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `destination_id` int(11) NOT NULL,
  `title` varchar(200) COLLATE utf8_slovenian_ci NOT NULL,
  `url` varchar(200) COLLATE utf8_slovenian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Indeksi zavrženih tabel
--

--
-- Indeksi tabele `agencies`
--
ALTER TABLE `agencies`
  ADD PRIMARY KEY (`id`);

--
-- Indeksi tabele `agency_comments`
--
ALTER TABLE `agency_comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `agency_id` (`agency_id`);

--
-- Indeksi tabele `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `destination_id` (`destination_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeksi tabele `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indeksi tabele `destinations`
--
ALTER TABLE `destinations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `country_id` (`country_id`),
  ADD KEY `agency_id` (`agency_id`);

--
-- Indeksi tabele `pictures`
--
ALTER TABLE `pictures`
  ADD PRIMARY KEY (`id`),
  ADD KEY `destination_id` (`destination_id`);

--
-- Indeksi tabele `rates`
--
ALTER TABLE `rates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `destination_id` (`destination_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeksi tabele `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indeksi tabele `users_destinations`
--
ALTER TABLE `users_destinations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `destination_id` (`destination_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeksi tabele `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `destination_id` (`destination_id`);

--
-- AUTO_INCREMENT zavrženih tabel
--

--
-- AUTO_INCREMENT tabele `agencies`
--
ALTER TABLE `agencies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT tabele `agency_comments`
--
ALTER TABLE `agency_comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT tabele `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT tabele `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT tabele `destinations`
--
ALTER TABLE `destinations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT tabele `pictures`
--
ALTER TABLE `pictures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT tabele `rates`
--
ALTER TABLE `rates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT tabele `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT tabele `users_destinations`
--
ALTER TABLE `users_destinations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT tabele `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
