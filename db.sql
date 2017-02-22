-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2017 at 07:56 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `djit`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `thread_id` int(10) UNSIGNED NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2017_02_20_111453_create_topics_table', 2),
('2017_02_20_110612_create_threads_table', 3),
('2017_02_20_110629_create_comments_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `threads`
--

CREATE TABLE `threads` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `topic_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `summary` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `threads`
--

INSERT INTO `threads` (`id`, `user_id`, `topic_id`, `title`, `summary`, `description`, `image`, `created_at`, `updated_at`) VALUES
(2, 3, 1, 'Using HTML buttons to get PHP input', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making', 'it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.', '', '2017-02-22 12:25:52', NULL),
(3, 2, 1, 'Best Steps to learn php', ' am a newbie in Php and I am confused about where to start,where to end etc.so before start to learning it,I have find some answers after a research on google.Here is what I have concluded.Let me know is these steps for becoming a php developer are correc', 'Steps:\r\n1-Learn Php Basic\r\n2-Build a Simple Php Website\r\n3-MYSQL Basic\r\n4-Website Using Php and MySQL\r\n5-Php OOP \r\n6-Project Using OOP\r\n7-Php MVC Framework', '', '2017-02-22 12:28:03', NULL),
(4, 1, 2, 'MySQL Intallation FAQ', 'Okej Now i''ve seen many of you having troubles with configuring and installing PHP and MySQL. Some people didn''t even know where to start.  Here im starting a topic that i will be updating once in a while to help people understand how they should install ', 'Download an installer package. This will make it much easier for you to install and configure the server. The good thing about MySQL installator for 4.1.x is that it has an auto configuration utility called Instance Configuration Wizard. More about it to come.. \r\n\r\nSo now when youve downloaded that zip file containing Setup.exe, extract it and run. You will see a quite familliar installation wizard. I will not take you through it as i think everyone can mannage to click on ''Next'' couple of times', '', '2017-02-22 12:31:43', NULL),
(5, 2, 3, 'Need Free Image Hosting Website', 'i need free image hosing website, plz suggest me any free image hosting webiste, i have heard about datazap, but it is only 1 month trial, not full free', 'Try this websites:\r\n\r\nhttp://www.freeimagehosting.net/\r\nhttp://imgur.com/\r\nhttps://beta.postimage.org/\r\n\r\nThanks', '', '2017-02-22 12:33:48', NULL),
(6, 1, 2, 'Register with auto-expire time', 'Hello guys. I am a front-end developer, just starting with PHP. ', 'I want to create a system in which the user selects a country and a city and then he registers his nickname, and that username auto-expires after a number of days (selected by the user when he registers his username). \r\nI also want other registered users to find other users from the selected cities, basically a sort of dating website, with a payment system too.', '', '2017-02-22 13:50:25', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'PHP', '2017-02-20 13:13:00', NULL),
(2, 'MySQL', '2017-02-20 13:14:16', NULL),
(3, 'Web Hosting', '2017-02-20 16:19:45', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'default-avatar.png',
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `avatar`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'M. Zaman', 'mzaman.tech@gmail.com', '1.png', '$2y$10$dFjoLGcKozJpKrwQ8Gr5sed.dGnkYRCkm7MBNpL9sZ.cYov6VG7h.', 'tXTxbZmXKAriEYbRs7DWF5CEUdrucBcapteFavKY7XzuMe0Rz4eT5lvWOgyX', '2017-02-20 19:27:29', '2017-02-22 20:55:36'),
(2, 'John Doe', 'john.doe@email.com', 'default-avatar.png', '$2y$10$bR8V1xzTteyDY95cEMyhpu7TcZp7cyCnQ.n8hjyQgi5X4ivKv509.', 'gpNqe99xFUxO7ix03ZGePJVGonr7dMPA7KD8FsY8eWcnBZvlVCMEhu0ErQMz', '2017-02-20 19:29:33', '2017-02-22 19:57:12'),
(3, 'David Smith', 'david.smith@email.com', 'default-avatar.png', '$2y$10$opyjd4QjMI4n/kZd7jT30OA3o.wRE5Dz.EfGLJZ66/1d6Xzjp5KqW', 'DE2n3KwVkmagRq9e27PadHPBFsbG3nui881aVKf4nhjZqcPth4UooOfbqP35', '2017-02-20 19:34:29', '2017-02-20 19:34:33'),
(4, 'Maria Hyden', 'maria.hyden@email.com', 'default-avatar.png', '$2y$10$GudlnQNeJ0T0/FRehOcCnu2Igsq4HR7dAT4uUUIpyXf8kQiBY.mUW', 'TS243hV2fum8Sz1IAqXuv4l3VILOG5cwnQIcBM3hdtAtU43q26aEjjhongeI', '2017-02-20 19:35:45', '2017-02-20 19:35:48'),
(5, 'Bill Clinton', 'bill.clinton@email.com', 'default-avatar.png', '$2y$10$KK7y/VVuTlvle9AJ.tnYSuWWTuCcD50WQrP/rd.y6LpSpwYi/mC.S', 'UpY60jcFyj9bFFc5yK8RlKp9M4el5nWZYnJSp98mla1AEDVb6Q4qBXkEsqbG', '2017-02-21 18:50:52', '2017-02-22 13:32:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_user_id_foreign` (`user_id`),
  ADD KEY `comments_thread_id_foreign` (`thread_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `threads`
--
ALTER TABLE `threads`
  ADD PRIMARY KEY (`id`),
  ADD KEY `threads_user_id_foreign` (`user_id`),
  ADD KEY `threads_topic_id_foreign` (`topic_id`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `threads`
--
ALTER TABLE `threads`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_thread_id_foreign` FOREIGN KEY (`thread_id`) REFERENCES `threads` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `threads`
--
ALTER TABLE `threads`
  ADD CONSTRAINT `threads_topic_id_foreign` FOREIGN KEY (`topic_id`) REFERENCES `topics` (`id`),
  ADD CONSTRAINT `threads_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
