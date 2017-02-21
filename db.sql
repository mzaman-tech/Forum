-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2017 at 12:42 PM
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
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `threads`
--

INSERT INTO `threads` (`id`, `user_id`, `topic_id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'How to write better PHP code', '<p><span style="color: rgb(51, 51, 51); font-family: Verdana, Arial, Tahoma, Calibri, Geneva, sans-serif;">If you''re reading this you''re either looking for tips, or curious about what interesting stuff I can possibly add to an already amazing forum. I''m going to dispense some tips about general PHP development practices based on my experience, my experience with other developers and my experience with Coding Forums.</span><br style="color: rgb(51, 51, 51); font-family: Verdana, Arial, Tahoma, Calibri, Geneva, sans-serif; box-shadow: none !important;"><br style="color: rgb(51, 51, 51); font-family: Verdana, Arial, Tahoma, Calibri, Geneva, sans-serif; box-shadow: none !important;"><span style="color: rgb(51, 51, 51); font-family: Verdana, Arial, Tahoma, Calibri, Geneva, sans-serif;">I will be adding to this post reguarly depending on what I''ve had to moderate in the last week, and comments I''ve recieved.</span><br style="color: rgb(51, 51, 51); font-family: Verdana, Arial, Tahoma, Calibri, Geneva, sans-serif; box-shadow: none !important;"><br style="color: rgb(51, 51, 51); font-family: Verdana, Arial, Tahoma, Calibri, Geneva, sans-serif; box-shadow: none !important;"><b style="color: rgb(51, 51, 51); font-family: Verdana, Arial, Tahoma, Calibri, Geneva, sans-serif; box-shadow: none !important;">1. PHP</b><br style="color: rgb(51, 51, 51); font-family: Verdana, Arial, Tahoma, Calibri, Geneva, sans-serif; box-shadow: none !important;"><br style="color: rgb(51, 51, 51); font-family: Verdana, Arial, Tahoma, Calibri, Geneva, sans-serif; box-shadow: none !important;"><span style="color: rgb(51, 51, 51); font-family: Verdana, Arial, Tahoma, Calibri, Geneva, sans-serif;">1.1. Formatting for the forum: This has been said so many times before. Please ensure your PHP code is surrounded by [php]code[/php] tags, and your HTML, Javascript etc is surrounded by [code]html/js[/code]. This isn''t just people being too lazy to read your code. There''s a reason syntax highlighting editors are so popular: It makes it a HELL of a lot easier to read. Please do us all the courtesy of remembering this.</span><br style="color: rgb(51, 51, 51); font-family: Verdana, Arial, Tahoma, Calibri, Geneva, sans-serif; box-shadow: none !important;"><br style="color: rgb(51, 51, 51); font-family: Verdana, Arial, Tahoma, Calibri, Geneva, sans-serif; box-shadow: none !important;"><span style="color: rgb(51, 51, 51); font-family: Verdana, Arial, Tahoma, Calibri, Geneva, sans-serif;">1.2. Controverial though it may seem, the community as a whole are following some vague variation of&nbsp;</span><a href="http://framework.zend.com/manual/en/coding-standard.html" target="_blank" rel="nofollow" sl-processed="1" style="color: rgb(39, 134, 5); border: none; font-family: Verdana, Arial, Tahoma, Calibri, Geneva, sans-serif; background-color: rgb(255, 255, 255); box-shadow: none !important;">http://framework.zend.com/manual/en/...-standard.html</a><span style="color: rgb(51, 51, 51); font-family: Verdana, Arial, Tahoma, Calibri, Geneva, sans-serif;">&nbsp;- I don''t like all of it, and I don''t expect you to either. I break some of their guidelines on a daily basis, but I have 10 years experience of reading my own PHP. Try and meet as many of those guidelines as you feel able to. It''s not about some facist coding law, it''s about standard ways of code layout that the majority of people can read easily.</span><br style="color: rgb(51, 51, 51); font-family: Verdana, Arial, Tahoma, Calibri, Geneva, sans-serif; box-shadow: none !important;"><br style="color: rgb(51, 51, 51); font-family: Verdana, Arial, Tahoma, Calibri, Geneva, sans-serif; box-shadow: none !important;"><span style="color: rgb(51, 51, 51); font-family: Verdana, Arial, Tahoma, Calibri, Geneva, sans-serif;">1.3. To follow on from 1.1 and 1.2: Code that''s easy to read is easy to support. If you want support, make it easy for people to help you.</span><br style="color: rgb(51, 51, 51); font-family: Verdana, Arial, Tahoma, Calibri, Geneva, sans-serif; box-shadow: none !important;"><br style="color: rgb(51, 51, 51); font-family: Verdana, Arial, Tahoma, Calibri, Geneva, sans-serif; box-shadow: none !important;"><span style="color: rgb(51, 51, 51); font-family: Verdana, Arial, Tahoma, Calibri, Geneva, sans-serif;">1.4. Try and keep your HTML, CSS, Javascript and PHP separate from each other. It might look pretty to mix a dozen PHP code segments into your HTML, but I can assure you: It impresses no one. Do as much as possible in a separate PHP file, and make your HTML file use the absolute minimum of PHP. If that whopping chunk of PHP inside that lovely HTML table can be put into a function, in an included file, do it.</span><br></p>', '2017-02-20 12:13:14', NULL);

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
(2, 'Java', '2017-02-20 13:14:16', NULL),
(3, 'C++', '2017-02-20 13:13:00', NULL),
(4, 'Python', '2017-02-20 16:19:45', NULL);

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
(1, 'M. Zaman', 'mzaman.tech@gmail.com', 'default-avatar.png', '$2y$10$dFjoLGcKozJpKrwQ8Gr5sed.dGnkYRCkm7MBNpL9sZ.cYov6VG7h.', 'JsfUeYMHCQQoGUUgoYDvhN8P6fJgka9QbIr4wR2bbTWHiDJGlBD5QuM1gB7T', '2017-02-20 19:27:29', '2017-02-20 19:31:47'),
(2, 'John Doe', 'john.doe@email.com', 'default-avatar.png', '$2y$10$bR8V1xzTteyDY95cEMyhpu7TcZp7cyCnQ.n8hjyQgi5X4ivKv509.', 'YYkxJBPsYAwdoAz7fvVSRSglS2wwshCG3XnxUqD5s6sG8nehZRKAm4CfvIi1', '2017-02-20 19:29:33', '2017-02-20 19:29:38'),
(3, 'David Smith', 'david.smith@email.com', 'default-avatar.png', '$2y$10$opyjd4QjMI4n/kZd7jT30OA3o.wRE5Dz.EfGLJZ66/1d6Xzjp5KqW', 'DE2n3KwVkmagRq9e27PadHPBFsbG3nui881aVKf4nhjZqcPth4UooOfbqP35', '2017-02-20 19:34:29', '2017-02-20 19:34:33'),
(4, 'Maria Hyden', 'maria.hyden@email.com', 'default-avatar.png', '$2y$10$GudlnQNeJ0T0/FRehOcCnu2Igsq4HR7dAT4uUUIpyXf8kQiBY.mUW', 'TS243hV2fum8Sz1IAqXuv4l3VILOG5cwnQIcBM3hdtAtU43q26aEjjhongeI', '2017-02-20 19:35:45', '2017-02-20 19:35:48');

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
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
