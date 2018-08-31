-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 31, 2018 at 05:08 PM
-- Server version: 5.7.21
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `content` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `post_id`, `content`, `author`, `created_at`, `updated_at`) VALUES
(1, 4, 1, 'ldhushof', 'Nimal', '2018-08-27 00:06:35', '2018-08-27 00:06:35'),
(2, 1, 1, 'lkkuy', 'MadhurangaWijesekara', '2018-08-27 00:07:12', '2018-08-27 00:07:12');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(7, '2014_10_12_000000_create_users_table', 2),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_08_25_101505_create_posts_table', 1),
(4, '2018_08_25_160802_create_comments_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `sub_title`, `author`, `content`, `image`, `created_at`, `updated_at`) VALUES
(1, 6, 'Another Beauty from AI', 'AI Can Transform Anyone Into a Professional Dancer', 'Jone Sri Doe', 'Think of it as style transfer for dancing, a deep learning based algorithm that can convincingly show a real person mirroring the moves of their favorite dancers.\r\n\r\nThe work, developed by a team of researchers from the University of California Berkeley, allows anyone to portray themselves as a world-class ballerina or a pop superstar like Bruno Mars.\r\n\r\n“With our framework, we create a variety of videos, enabling untrained amateurs to spin and twirl like ballerinas, perform martial arts kicks or dance as vibrantly as pop stars,” the researchers stated in their paper. “Using pose detections as an intermediate representation between source and target, we learn a mapping from pose images to a target subject’s appearance,” the team explained.', 'Commits2.PNG', NULL, '2018-08-31 04:38:25'),
(2, 6, 'CLI: improved', 'OLD is GOLD', 'Jone Sri Doe', 'I\'m not sure many web developers can get away without visiting the command line. As for me, I\'ve been using the command line since 1997, first at university when I felt both super cool l33t-hacker and simultaneously utterly out of my depth.\r\n\r\nOver the years my command line habits have improved and I often search for smarter tools for the jobs I commonly do. With that said, here\'s my current list of improved CLI tools.\r\n\r\nIn a number of cases I\'ve aliased the new and improved command line tool over the original (as with cat and ping).\r\n\r\nIf I want to run the original command, which is sometimes I do need to do, then there\'s two ways I can do this (I\'m on a Mac so your mileage may vary):\r\n\r\ncat is used to print the contents of a file, but given more time spent in the command line, features like syntax highlighting come in very handy. I found ccat which offers highlighting then I found bat which has highlighting, paging, line numbers and git integration.\r\n\r\nThe bat command also allows me to search during output (only if the output is longer than the screen height) using the / key binding (similarly to less searching).', 'Commits2.PNG', '2018-08-31 04:40:38', '2018-08-31 04:40:38'),
(3, 6, 'People Hacks for Technical Leads', 'Five things you must know for your fast track to Tech Lead', 'Jone Sri Doe', 'Lately I’ve been thinking about, doing a lot of research on and experimenting with management strategy. As a technologist I’m inclined to look for a structured approach — a process with which to automate teams. But as a student of anthropology I tend to reject frameworks so structured they become blind to context and nuance. I’m hopelessly attracted to large, complex systems. Generally the thorniest of those involve people rather than machines.\r\n\r\nStill, I also believe that people themselves are not terribly complex. I’m very attracted to the Westworldian idea that human beings as individual pieces are actually very simple. The complexity comes from reactions and sub-reactions to interacting with each other.\r\n\r\nManagement, for that reason, has always been something I find fascinating. How does one leverage that simplicity to navigate its complexity? I wanted a way to hack people the same way I could hack machines.\r\n\r\nAbout fifteen years ago I took a job that changed my life: I started teaching.\r\n\r\nIt changed my life because it turns out good teachers have to develop all these fundamental communication and organizational skills that are applicable in virtually every other profession. Or, in other words, what you cannot survive without as a teacher you can use to dominate in the business world.\r\n\r\nOne of the most interesting lessons from that period was learning to anticipate and leverage learning styles. The concept of learning styles is simple: some people are visual thinkers, some people are logical (math) thinkers, some people are kinetic thinkers. If you present information in a way that aligns with that person’s learning style they will learn it much faster and easier than if you presented it in a way that is inconsistent with their style.\r\n\r\nThe challenge for a teacher is that you are not always working one on one. You have a classroom of students and a mix of learning styles. So good teachers learn how to present the same information in multiple styles at once. A simple example of this might be talking through a concept, while drawing a representation of it on the whiteboard, then following that up with an exercise where students go through the process described to them.', 'Commits2.PNG', '2018-08-31 04:42:55', '2018-08-31 04:42:55');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'non-admin',
  `provider` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `provider`, `provider_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'MadhurangaWijesekara', '123kanishka@gmail.com', NULL, 'non-admin', 'https://avatars3.githubusercontent.com/u/27579184?v=4', '27579184', 'z5877rR5zkgT8ErtzVjdWWje4K4LguNcs3uubgODN45zTDeSu1kjWDwr5sDh', '2018-08-25 22:16:58', '2018-08-25 22:16:58'),
(2, 'Kamal', 'kamal@kamal.com', '$2y$10$1Tx4q/cze.QoEOY6ZJ1PC.hW7woSPLKwHPtA8gpEJMw0hYVTI4oeu', 'non-admin', NULL, NULL, 'RbRp1FmHvS8VwMdLcVg8bkwHJ29HyxavyzLDDJzZvGXV3Qsh2k80FF7XmDW4', NULL, NULL),
(3, 'Kamal2', 'kamal2@kamal.com', '$2y$10$t8XUX5S2zPcRxYIjdDm/y.Fr5A2dLEw7ERgQy/V2sSB1ow1AoB0tG', 'non-admin', NULL, NULL, NULL, NULL, NULL),
(4, 'Nimal', 'nimal@nimal.com', '$2y$10$YZvjWU0QEP1.E.A4koeXpuv8EUB21nCa5HzpTXmA2d3HfOmaoDjTm', 'admin', NULL, NULL, 'r7RTqf5G4L30JfspRun7ZNKLvYtFSg579eC5mOL2MgIqqLcM7NQE7P4BxJJG', NULL, NULL),
(6, 'Jone Sri Doe', 'admin@admin.com', '$2y$10$Jk6Ie0FyHwxALY4SuNJOiu41oR.sutVYgTzt3iXFmaukumLEfaYfu', 'admin', NULL, NULL, '1GcF6mi4A41FEKSTz17OULCeucda5FC3bhCEj3QpqhiFKf2B5Oqx6qxYqetW', NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
