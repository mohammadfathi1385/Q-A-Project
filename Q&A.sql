-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2021 at 06:34 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trueanswer`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` bigint(50) NOT NULL,
  `user_id` bigint(50) NOT NULL,
  `question_id` bigint(50) NOT NULL,
  `body` text COLLATE utf8_persian_ci NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `apitokens`
--

CREATE TABLE `apitokens` (
  `id` bigint(50) NOT NULL,
  `token` text NOT NULL,
  `email` text NOT NULL,
  `expireTime` date NOT NULL,
  `fullName` varchar(250) NOT NULL,
  `Phone` bigint(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `apitokens`
--

INSERT INTO `apitokens` (`id`, `token`, `email`, `expireTime`, `fullName`, `Phone`) VALUES
(4, '1111', 'asdasdsa@adasda.com', '2021-09-15', 'saddasdasdasdas', 0);

-- --------------------------------------------------------

--
-- Table structure for table `changerole`
--

CREATE TABLE `changerole` (
  `id` bigint(50) NOT NULL,
  `user_id` bigint(50) NOT NULL,
  `language` bigint(50) NOT NULL,
  `body` text COLLATE utf8_persian_ci NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(50) NOT NULL,
  `subject` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `body` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `favorite_language`
--

CREATE TABLE `favorite_language` (
  `id` bigint(50) NOT NULL,
  `language` bigint(50) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp(),
  `score` bigint(22) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `followers`
--

CREATE TABLE `followers` (
  `id` bigint(30) NOT NULL,
  `user_id` bigint(30) NOT NULL,
  `following_id` bigint(30) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(50) NOT NULL,
  `title` varchar(250) COLLATE utf8_persian_ci NOT NULL,
  `url` text COLLATE utf8_persian_ci NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `newlanguage`
--

CREATE TABLE `newlanguage` (
  `id` bigint(50) NOT NULL,
  `user_id` bigint(50) NOT NULL,
  `language` text COLLATE utf8_persian_ci NOT NULL,
  `body` text COLLATE utf8_persian_ci NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` bigint(50) NOT NULL,
  `user_id` bigint(50) NOT NULL,
  `send_id` bigint(50) NOT NULL,
  `body` text COLLATE utf8_persian_ci NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp(),
  `status` enum('unread','read') COLLATE utf8_persian_ci DEFAULT 'unread'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `programming_languages`
--

CREATE TABLE `programming_languages` (
  `id` bigint(30) NOT NULL,
  `name` varchar(250) COLLATE utf8_persian_ci NOT NULL,
  `color` varchar(250) COLLATE utf8_persian_ci NOT NULL,
  `platform` enum('web','android','desktop','data_science','cross_platform') COLLATE utf8_persian_ci DEFAULT 'cross_platform',
  `image` text COLLATE utf8_persian_ci NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp(),
  `score` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `programming_languages`
--

INSERT INTO `programming_languages` (`id`, `name`, `color`, `platform`, `image`, `created_at`, `updated_at`, `score`) VALUES
(1, 'PHP', '#657cf0', 'web', 'PHP.png', '2021-06-22 02:13:54', '2021-06-22 02:13:54', 100),
(2, 'C#', '#9a3ecf', 'cross_platform', 'PHP.png', '2021-06-22 02:13:54', '2021-06-22 02:13:54', 100);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` bigint(50) NOT NULL,
  `plang_id` bigint(50) NOT NULL,
  `user_id` bigint(50) NOT NULL,
  `body` text COLLATE utf8_persian_ci NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp(),
  `title` varchar(250) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `plang_id`, `user_id`, `body`, `created_at`, `updated_at`, `title`) VALUES
(8, 1, 11, 'test question', '2021-06-30 17:08:54', '2021-06-30 17:08:54', 'question test');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` bigint(50) NOT NULL,
  `user_id` bigint(50) NOT NULL,
  `question_id` bigint(50) NOT NULL,
  `body` text COLLATE utf8_persian_ci NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) DEFAULT 0,
  `title` varchar(250) COLLATE utf8_persian_ci NOT NULL,
  `description` text COLLATE utf8_persian_ci NOT NULL,
  `email` text COLLATE utf8_persian_ci NOT NULL,
  `number` text COLLATE utf8_persian_ci NOT NULL,
  `instagram` text COLLATE utf8_persian_ci DEFAULT NULL,
  `facebook` text COLLATE utf8_persian_ci DEFAULT NULL,
  `github` text COLLATE utf8_persian_ci DEFAULT NULL,
  `icon` text COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `title`, `description`, `email`, `number`, `instagram`, `facebook`, `github`, `icon`) VALUES
(0, 'trueanswer', 'website truanswer', 'info@trueanswer.com', '00000000000', NULL, NULL, NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `repeatEmail` text CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(30) NOT NULL,
  `fullname` varchar(60) COLLATE utf8_persian_ci NOT NULL,
  `username` varchar(60) COLLATE utf8_persian_ci NOT NULL,
  `email` varchar(60) COLLATE utf8_persian_ci NOT NULL,
  `password` varchar(250) COLLATE utf8_persian_ci NOT NULL,
  `bio` text COLLATE utf8_persian_ci NOT NULL,
  `favorite_plang` bigint(30) DEFAULT 0,
  `verify_token` text COLLATE utf8_persian_ci DEFAULT NULL,
  `role` enum('user','helper','admin','owner') COLLATE utf8_persian_ci DEFAULT 'user',
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp(),
  `image` text COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `username`, `email`, `password`, `bio`, `favorite_plang`, `verify_token`, `role`, `created_at`, `updated_at`, `image`) VALUES
(11, 'mohammad fathi', 'm_fathi65@yahoo.com', 'm_fathi65@yahoo.com', '$2y$10$EJwOvGUpdcMUt55VTFSaf.WjnyRULZK.xn2wKI1EYXkdJQB9vjig2', 'asdasdasdasdads', 1, NULL, 'helper', '2021-06-30 01:41:29', '2021-07-08 00:58:45', '53233255d88182401d7e43f28351afe4448eab51d8849baee1aba0c6a648_544750.jpg'),
(15, 'mohammad fathi', 'adsadasdasdas', 'asdasdasd@saddsa.comd', '$2y$10$NlcvqbHWM3ZRJzORlOEGye6jvwxVok3eaiM/afGqgoNROOYcSJLHa', 'sadadasdasdasd', 1, '296f72428b5726a36156730dbbfa23298b41a9902d4d5107e4f41c5544a719e9e7f015e8908459c1ed6224e592f18c8e62c3b5d22a25eb4453c7be0a85bbe064a6c2b2a009237151e652dc8f350d838f12e9abe9a4fc65a435660d77c11dcfc97793abb0', 'helper', '2021-07-05 14:49:12', '2021-07-05 14:49:12', 'f79b2a21ac6872884f756f291c151cae3edca76f_544750.jpg'),
(16, 'asdasdasdas', 'm_fdasdathi65@yahasdaoo.com', 'sampassassdadasasin@gmail.comassdasd', '$2y$10$Ml3RCEW57tME9XVpWo2uHO4htD.SKl15oxlPTYaVONHg3gv0U7mXC', 'asdadasdasdas', 1, '92e385e8842dc90dc75d17f6755e1be12d939fe7f9a71dd754b1c39adfb706fb5b643a4740ff7544ffc458d62b7d6edb6fe51f468aaf43b4b21ad80cc261b4ddb9d09903f76565f7628bc48ebad1262e254d658b4678f2caebc3fe95ed8818048f1a0fad', 'user', '2021-07-05 14:51:33', '2021-07-05 14:51:33', ''),
(17, 'asdadasa', 'masdas_fathi65@yahoo.com', 'asdasdsA@dasdasas.com', '$2y$10$tQTA5B4/wm11jvlG462UNO21NTZMoT7lT6kIS9mBEOK4vgCL/khMe', 'sadasdasdad', 1, '6b17ab56dc780864e461024ce88c2e8882df1ff9b80fc0eae6f6612ecf24ed8cae99d4e1c1c0977965bceb0ccd3a03ea030d9b8b4f0933a5d6054be7446b7ab3cf8953fc33b64e48fe26f4dc7974f765defc271c3dfd0a08e2879fbf7229067bf5e8f065', 'user', '2021-07-05 14:53:33', '2021-07-05 14:53:33', ''),
(18, 'asdasdasdasd', 'asdasdasdasdas', 'asdasdassd@saddsa.com', '$2y$10$cDrWi2zF6owr.JWjYlLoF.Y10wVrZ1ZnQtobo57/i44J7UqD3CVTG', 'asdasdasdasd', 1, '851354307e6a95b399af06fe27c3db569dcffb7d70946358cf8e08e4fb3365bebbdf5ca60b066371d7ec6532dfaba9226227a4f9aca9449eed2c3879bb29135ff3553920bcd7a16c4f2f4b9a6eda7e5584608f8e8ad2661d87326d7e5f51bd571c48a0b9', 'user', '2021-07-05 14:55:51', '2021-07-05 14:55:51', 'a65a47489de68f8eb7d61231a078eb8319404fdc_544750.jpg'),
(19, 'mohammad fathi', 'salamsalam', 'mf214529122@gmail.com', '$2y$10$/1j5JS/g1TRpQwgSv50Vquu0sHsowVq2OYosCzHzO471kTRLhNUTq', 'salam mohammad fathi hastam', 1, '495f8172ec7090f80a47a1450aa452413543b4807119bb91e7d498d4c3a7f020d4b00ddf44c96516e733d2ffb5d1cbb0bd29b4f00eda6bba15d3dfd165e7a691cea5d749a4fa11106b02813c3d478c6a9cecb9cb5971b23e631a995e54a9b70ea6d7c072', 'user', '2021-07-06 01:05:03', '2021-07-06 01:05:03', 'f6b6487f709ce2c2e56e19664837081c14df5cb48634b2b81f828c46e7dd2e5e0829a18d4d3adfbcd111774258bae5a7933100195b885bbebe47c07b4b7ba0e0d4638fbbbf17949453b058889e6449a08f756afcbc12a4297a1254865365fbfbddb4c4a9e6aea4f66614bf750f47b8f030d92079662ee3ec_544750.jpg'),
(20, 'mohammad fathi', 'aasdasdas', 'm_fasadthi65@yahoo.com', '$2y$10$UYjxHBXmD3ISP3WDZ4t6h.60UTr1FxWgp.rmp744bXKThWx8HzHcC', 'asdadasdasda', 1, '0cec569089c2d6b7e939117bb295447d944384a4799338f74ca36828b20fe549b0a3c69b1ff7cb29d1c007c587b25dda1695586fbd409e14de7e132ff48aa84e07138c409754d1de7dcaf9fcb72668a5d8f48499263aa4af88602a4ea84a268067610774', 'user', '2021-07-06 01:05:44', '2021-07-06 01:05:44', '968aac481e445fda04e9723504f15aecb50c9e96a9d334c26ae069c1d445_544750.jpg'),
(21, 'mohammad fathi', 'edovoss', 'm_fath222i65@yahoo.com', '$2y$10$swJah6n9SMxfga39Pj3nX.K3J1Cd1xU.tRLIkmTPVUkzwcAuHsWRG', 'i am mmd', 2, 'c73ace3a96d08ef4845823d383da663d22238ee091acc5813cdbf5841c65658385239d4a621319ac3a0372629b15e9c6d703f5d758a80e38c4191ea9fbd7a6b9616d06a6fe527c1f27abea96a23783df36ee8d2866eec52e1c9f1f8b9196de241d786e8e', 'helper', '2021-07-11 15:57:37', '2021-07-11 15:57:37', 'd365ec95e77621c4d601c710947a2d239b1e124bd763ea8cefe2c022d249_download.jpg'),
(22, 'mohammad fathi', 'adasdadas', 'sampassassin2@gmail.com', '$2y$10$CzJQ9xo4JFjg51nKjBFic.0OAh8qdc4tWQP5NT2Ntc.AL9L2ZEUTS', 'asdadsadas', 1, NULL, 'helper', '2021-07-11 16:02:31', '2021-07-11 16:04:30', 'f8d522bc2e04aaa3d2aac077046d344fd2fde00f6f9b99325493d713bd99_download.jpg'),
(25, 'mmmmmm', 'mohammadmmmmmmm', 'aa111111111111@aaa.com', '$2y$10$ZWjOE5PJG8qu66sDOdCBsuLMokBFZ5MOY0G5C.e0gtHUNJh6eFLjS', 'sadasdasas', 1, NULL, 'admin', '2021-09-06 17:04:44', '2021-09-06 17:05:33', '1b5cd8278b99b2077b2addbd80b07d598bf649eddc6348f7efb0803517ef_island2.jpg'),
(26, 'mohammad fathi', 'mohammadfathi13811111', 'yaaaaayaaa@yaa.com', '$2y$10$SZxovHdWk.8NxPbwwTPvju/0Q8Os35HuwP0cvpCEtAeLeWQI.Rzrq', 'hello world', 1, '7d14a70aefd9bd3086d7d01e8e8c59d84cf0856f0c6d7674adbbfe3abee8323c8f2e2e5f10fb1e9f8e8b05cd505b14e4afdd08165e9e031237a5ab2da7a379d23a0b36430ba9be3530f42a041cbb28a1582f9bd00dafc30e5fc4f14432ec53ddbc88ebdf', 'user', '2021-12-09 21:04:00', '2021-12-09 21:04:00', '4501420abe92eb0ee33ed3061e83f96af4bfc971c639d59acf5921a9c72a_image.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `question_id` (`question_id`);

--
-- Indexes for table `apitokens`
--
ALTER TABLE `apitokens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `changerole`
--
ALTER TABLE `changerole`
  ADD PRIMARY KEY (`id`),
  ADD KEY `language` (`language`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `favorite_language`
--
ALTER TABLE `favorite_language`
  ADD PRIMARY KEY (`id`),
  ADD KEY `language` (`language`);

--
-- Indexes for table `followers`
--
ALTER TABLE `followers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `following_id` (`following_id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newlanguage`
--
ALTER TABLE `newlanguage`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `send_id` (`send_id`);

--
-- Indexes for table `programming_languages`
--
ALTER TABLE `programming_languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `plang_id` (`plang_id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `question_id` (`question_id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`,`repeatEmail`) USING HASH;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`,`email`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username_2` (`username`),
  ADD KEY `favorite_plang` (`favorite_plang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `apitokens`
--
ALTER TABLE `apitokens`
  MODIFY `id` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `changerole`
--
ALTER TABLE `changerole`
  MODIFY `id` bigint(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `favorite_language`
--
ALTER TABLE `favorite_language`
  MODIFY `id` bigint(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `followers`
--
ALTER TABLE `followers`
  MODIFY `id` bigint(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `newlanguage`
--
ALTER TABLE `newlanguage`
  MODIFY `id` bigint(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `programming_languages`
--
ALTER TABLE `programming_languages`
  MODIFY `id` bigint(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `answers_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `answers_ibfk_2` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`);

--
-- Constraints for table `changerole`
--
ALTER TABLE `changerole`
  ADD CONSTRAINT `changerole_ibfk_1` FOREIGN KEY (`language`) REFERENCES `programming_languages` (`id`);

--
-- Constraints for table `favorite_language`
--
ALTER TABLE `favorite_language`
  ADD CONSTRAINT `favorite_language_ibfk_1` FOREIGN KEY (`language`) REFERENCES `programming_languages` (`id`);

--
-- Constraints for table `followers`
--
ALTER TABLE `followers`
  ADD CONSTRAINT `followers_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `followers_ibfk_2` FOREIGN KEY (`following_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `newlanguage`
--
ALTER TABLE `newlanguage`
  ADD CONSTRAINT `newlanguage_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `notifications`
--
ALTER TABLE `notifications`
  ADD CONSTRAINT `notifications_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `notifications_ibfk_2` FOREIGN KEY (`send_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `questions_ibfk_2` FOREIGN KEY (`plang_id`) REFERENCES `programming_languages` (`id`);

--
-- Constraints for table `reports`
--
ALTER TABLE `reports`
  ADD CONSTRAINT `reports_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reports_ibfk_2` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`favorite_plang`) REFERENCES `programming_languages` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
