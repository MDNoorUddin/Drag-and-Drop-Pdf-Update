-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2020 at 09:44 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pdf_project(1)`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `activity` varchar(1000) NOT NULL,
  `created_at` datetime NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`id`, `user_id`, `activity`, `created_at`, `type`) VALUES
(211, 34, 'Logged in', '2020-12-02 10:46:29', 'login'),
(212, 34, 'Logged in', '2020-12-02 10:46:42', 'login'),
(213, 34, 'uploaded a pdf file-sample_150kB13.pdf', '2020-12-02 10:47:16', 'upload'),
(214, 34, 'updated a pdf file-sample_150kB13.pdf', '2020-12-02 10:47:45', 'update'),
(215, 34, 'uploaded a pdf file-sample_150kB14.pdf', '2020-12-02 11:12:02', 'upload'),
(216, 34, 'updated a pdf file-sample_150kB14.pdf', '2020-12-02 11:16:56', 'update'),
(217, 34, 'updated a pdf file-sample_150kB14.pdf', '2020-12-02 11:18:11', 'update'),
(218, 34, 'updated a pdf file-sample_150kB14.pdf', '2020-12-02 11:18:30', 'update'),
(219, 34, 'updated a pdf file-sample_150kB14.pdf', '2020-12-02 11:32:18', 'update'),
(220, 34, 'updated a pdf file-sample_150kB14.pdf', '2020-12-02 11:34:06', 'update'),
(221, 34, 'updated a pdf file-sample_150kB14.pdf', '2020-12-02 11:48:42', 'update'),
(222, 34, 'uploaded a pdf file-sample_150kB20.pdf', '2020-12-02 12:23:45', 'upload'),
(223, 34, 'uploaded a pdf file-sample_150kB22.pdf', '2020-12-02 12:24:55', 'upload'),
(224, 34, 'uploaded a pdf file-sample_150kB23.pdf', '2020-12-02 12:25:45', 'upload'),
(225, 34, 'uploaded a pdf file-sample_150kB24.pdf', '2020-12-02 12:51:32', 'upload'),
(226, 34, 'Logged in', '2020-12-02 13:19:36', 'login'),
(227, 34, 'Logged in', '2020-12-03 05:24:32', 'login'),
(228, 34, 'Logged in', '2020-12-03 07:02:32', 'login'),
(229, 34, 'uploaded a pdf file-sample_150kB27.pdf', '2020-12-03 07:06:38', 'upload'),
(230, 34, 'uploaded a pdf file-sample_150kB28.pdf', '2020-12-03 07:08:09', 'upload'),
(231, 34, 'uploaded a pdf file-sample_150kB29.pdf', '2020-12-03 07:08:32', 'upload'),
(232, 34, 'uploaded a pdf file-sample_150kB30.pdf', '2020-12-03 07:09:03', 'upload'),
(233, 34, 'uploaded a pdf file-sample_150kB31.pdf', '2020-12-03 07:10:19', 'upload'),
(234, 36, 'Created an accound  named rony', '2020-12-03 07:38:54', 'register'),
(235, 36, 'Logged in', '2020-12-03 07:39:10', 'login'),
(236, 34, 'Logged in', '2020-12-03 07:50:02', 'login'),
(237, 36, 'Logged in', '2020-12-03 07:50:13', 'login'),
(238, 34, 'Logged in', '2020-12-03 07:56:37', 'login'),
(239, 34, 'uploaded a pdf file-sample_150kB35.pdf', '2020-12-03 08:29:43', 'upload'),
(240, 34, 'uploaded a pdf file-sample_150kB36.pdf', '2020-12-03 08:32:41', 'upload'),
(241, 34, 'Logged in', '2020-12-03 08:35:00', 'login'),
(242, 34, 'Logged in', '2020-12-03 08:35:03', 'login'),
(243, 34, 'Logged in', '2020-12-03 08:35:05', 'login'),
(244, 34, 'Logged in', '2020-12-03 08:35:06', 'login'),
(245, 34, 'Logged in', '2020-12-03 08:35:08', 'login'),
(246, 34, 'Logged in', '2020-12-03 08:35:10', 'login'),
(247, 34, 'Logged in', '2020-12-03 08:35:12', 'login'),
(248, 34, 'Logged in', '2020-12-03 09:54:41', 'login'),
(249, 36, 'Logged in', '2020-12-03 10:22:28', 'login'),
(250, 36, 'uploaded a pdf file-sample_150kB37.pdf', '2020-12-03 10:22:49', 'upload'),
(251, 36, 'uploaded a pdf file-sample_150kB38.pdf', '2020-12-03 10:23:11', 'upload'),
(252, 34, 'Logged in', '2020-12-03 10:23:27', 'login'),
(253, 34, 'uploaded a pdf Document3.pdf', '2020-12-03 10:23:47', 'upload'),
(254, 37, 'Created an accound  named Asif Mimi', '2020-12-03 10:24:42', 'register'),
(255, 37, 'Logged in', '2020-12-03 10:24:50', 'login'),
(256, 37, 'uploaded a pdf PDF_Updater.pdf', '2020-12-03 10:25:12', 'upload'),
(257, 34, 'Logged in', '2020-12-03 10:27:52', 'login'),
(258, 34, 'uploaded a pdf PDF_Updater1.pdf', '2020-12-03 10:28:11', 'upload'),
(259, 34, 'uploaded a pdf PDF_Updater2.pdf', '2020-12-03 10:28:52', 'upload'),
(260, 34, 'uploaded a pdf PDF_Updater3.pdf', '2020-12-03 10:30:06', 'upload'),
(261, 36, 'Logged in', '2020-12-03 10:31:54', 'login'),
(262, 34, 'Logged in', '2020-12-03 10:33:24', 'login'),
(263, 34, 'Logged in', '2020-12-03 10:35:21', 'login'),
(264, 36, 'Logged in', '2020-12-03 10:37:37', 'login'),
(265, 34, 'Logged in', '2020-12-03 10:51:42', 'login'),
(266, 34, 'Logged out', '0000-00-00 00:00:00', 'logout'),
(267, 34, 'Logged in', '2020-12-03 10:52:56', 'login'),
(268, 34, 'Logged out', '2020-12-03 10:52:58', 'logout'),
(269, 39, 'Created an accound  named Milton Kabir', '2020-12-03 11:40:01', 'register'),
(270, 39, 'Logged in', '2020-12-03 11:40:19', 'login'),
(271, 39, 'Logged out', '2020-12-03 11:40:31', 'logout'),
(272, 34, 'Logged in', '2020-12-03 12:12:33', 'login'),
(273, 34, 'Logged out', '2020-12-03 12:12:38', 'logout'),
(274, 34, 'Logged in', '2020-12-03 12:12:42', 'login'),
(275, 34, 'Logged out', '2020-12-03 12:12:45', 'logout'),
(276, 34, 'Logged in', '2020-12-03 12:13:51', 'login'),
(277, 34, 'uploaded a pdf file-sample_150kB39.pdf', '2020-12-03 12:14:23', 'upload'),
(278, 34, 'uploaded a pdf PDF_Updater4.pdf', '2020-12-03 12:31:29', 'upload'),
(279, 34, 'Logged out', '2020-12-03 12:43:37', 'logout'),
(280, 40, 'Created an accound  named Eashan', '2020-12-03 12:48:22', 'register'),
(281, 40, 'Logged in', '2020-12-03 12:48:27', 'login'),
(282, 40, 'uploaded a pdf PDF_Updater5.pdf', '2020-12-03 12:49:23', 'upload'),
(283, 40, 'Logged out', '2020-12-03 12:50:34', 'logout'),
(284, 40, 'Logged in', '2020-12-03 12:56:16', 'login');

-- --------------------------------------------------------

--
-- Stand-in structure for view `activitylist`
-- (See below for the actual view)
--
CREATE TABLE `activitylist` (
`NAME` varchar(100)
,`TYPE` varchar(100)
,`activity` varchar(1000)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `activity_list`
-- (See below for the actual view)
--
CREATE TABLE `activity_list` (
`NAME` varchar(100)
,`user_id` int(11)
,`TYPE` varchar(100)
,`activity` varchar(1000)
,`created_at` datetime
);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `name`, `created_at`, `updated_at`, `password`) VALUES
(1, 'admin1@gmail.com', 'Admin1', '2020-11-26 15:37:08', '2020-11-26 15:37:08', '5d41402abc4b2a76b9719d911017c592');

-- --------------------------------------------------------

--
-- Table structure for table `admin_profile`
--

CREATE TABLE `admin_profile` (
  `id` int(10) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `profile_pic` varchar(1000) NOT NULL,
  `Address` varchar(1000) NOT NULL,
  `Note` varchar(2000) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Stand-in structure for view `all1`
-- (See below for the actual view)
--
CREATE TABLE `all1` (
`name` varchar(100)
,`email` varchar(100)
,`password` varchar(1000)
,`user_id` int(11)
,`created_at` datetime
,`updated_at` datetime
);

-- --------------------------------------------------------

--
-- Table structure for table `edit_history`
--

CREATE TABLE `edit_history` (
  `id` int(11) NOT NULL,
  `edit_type` varchar(20) NOT NULL,
  `x` float NOT NULL,
  `y` float NOT NULL,
  `text` varchar(200) NOT NULL,
  `editing_time` datetime NOT NULL,
  `fontSize` int(2) NOT NULL,
  `edit_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `pdf_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `edit_history`
--

INSERT INTO `edit_history` (`id`, `edit_type`, `x`, `y`, `text`, `editing_time`, `fontSize`, `edit_id`, `user_id`, `pdf_id`) VALUES
(32, 'existing', 275.97, 44, 'Lorem Ipsum ', '2020-12-02 10:47:45', 20, 1, 34, 315),
(33, 'existing', 362.26, 341, 'Hello ', '2020-12-02 11:16:56', 25, 1, 34, 316),
(34, 'existing', 444.536, 341, 'Hello ', '2020-12-02 11:18:11', 25, 2, 34, 316),
(35, 'existing', 444.536, 341, 'Hello ', '2020-12-02 11:18:30', 25, 3, 34, 316),
(36, 'existing', 526.813, 341, 'Hello ', '2020-12-02 11:32:18', 25, 4, 34, 316),
(37, 'existing', 433.499, 391, 'Hello ', '2020-12-02 11:34:06', 25, 5, 34, 316),
(38, 'existing', 318.111, 400, 'lorem is bad ', '2020-12-02 11:34:06', 20, 5, 34, 316),
(39, 'existing', 422.462, 443, 'Hello ', '2020-12-02 11:48:42', 25, 6, 34, 316),
(40, 'existing', 400.388, 400, 'lorem is bad ', '2020-12-02 11:48:42', 20, 6, 34, 316),
(41, 'existing', 549.89, 409, 'he he ', '2020-12-02 11:48:42', 20, 6, 34, 316);

-- --------------------------------------------------------

--
-- Table structure for table `pdf`
--

CREATE TABLE `pdf` (
  `id` int(11) NOT NULL,
  `pdf_name` varchar(100) NOT NULL,
  `pdf_location` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `edits` int(11) NOT NULL DEFAULT 1,
  `notes` varchar(200) NOT NULL,
  `isDelete` int(1) NOT NULL DEFAULT 0,
  `pdf_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pdf`
--

INSERT INTO `pdf` (`id`, `pdf_name`, `pdf_location`, `user_id`, `created_at`, `updated_at`, `edits`, `notes`, `isDelete`, `pdf_id`) VALUES
(333, 'PDF_Updater5.pdf', 'C:/xampp/htdocs/pdf_drag_and_drop_project/uploads/PDF_Updater5.pdf', 40, '2020-12-03 12:49:23', '2020-12-03 12:49:23', 1, 'Efrtgf', 0, 0);

-- --------------------------------------------------------

--
-- Stand-in structure for view `pdf_information`
-- (See below for the actual view)
--
CREATE TABLE `pdf_information` (
`x` float
,`y` float
);

-- --------------------------------------------------------

--
-- Table structure for table `pdf_points`
--

CREATE TABLE `pdf_points` (
  `id` int(11) NOT NULL,
  `text` varchar(2000) NOT NULL,
  `x` float NOT NULL,
  `y` float NOT NULL,
  `pdf_name` varchar(100) NOT NULL,
  `fontSize` int(11) NOT NULL DEFAULT 10,
  `user_id` int(11) NOT NULL,
  `modified_at` datetime NOT NULL,
  `pdf_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pdf_points`
--

INSERT INTO `pdf_points` (`id`, `text`, `x`, `y`, `pdf_name`, `fontSize`, `user_id`, `modified_at`, `pdf_id`) VALUES
(891, 'Lorem Ipsum ', 275.97, 44, 'file-sample_150kB13.pdf', 20, 34, '2020-12-02 10:47:45', 315),
(892, 'emmet ', 289.013, 97, 'file-sample_150kB13.pdf', 25, 34, '2020-12-02 10:47:45', 315),
(902, 'Hello ', 422.462, 443, 'file-sample_150kB14.pdf', 25, 34, '2020-12-02 11:48:42', 316),
(903, 'lorem is bad ', 400.388, 400, 'file-sample_150kB14.pdf', 20, 34, '2020-12-02 11:48:42', 316),
(904, 'he he ', 549.89, 409, 'file-sample_150kB14.pdf', 20, 34, '2020-12-02 11:48:42', 316),
(905, 'hehe ', 271.956, 653, 'file-sample_150kB14.pdf', 35, 34, '2020-12-02 11:48:42', 316),
(906, 'Notes ', 194, 259, 'file-sample_150kB23.pdf', 30, 34, '2020-12-02 12:25:45', 317),
(907, 'napa extra ', 171, 254, 'file-sample_150kB24.pdf', 20, 34, '2020-12-02 12:51:32', 318),
(908, 'Hello ', 184, 116, 'file-sample_150kB27.pdf', 25, 34, '2020-12-03 07:06:38', 319),
(909, 'Hello ', 199, 249, 'file-sample_150kB28.pdf', 25, 34, '2020-12-03 07:08:09', 320),
(910, 'Hello ', 202, 256, 'file-sample_150kB29.pdf', 25, 34, '2020-12-03 07:08:32', 321),
(911, 'Hello ', 172, 107, 'file-sample_150kB30.pdf', 25, 34, '2020-12-03 07:09:03', 322),
(912, 'Hello ', 87, 343, 'file-sample_150kB31.pdf', 25, 34, '2020-12-03 07:10:19', 323),
(913, 'Hello ', 217, 259, 'file-sample_150kB35.pdf', 30, 34, '2020-12-03 08:29:43', 324),
(914, 'Hellosvddsvds ', 166, 331, 'file-sample_150kB36.pdf', 30, 34, '2020-12-03 08:32:41', 325),
(915, 'erererer ', 207, 254, 'file-sample_150kB37.pdf', 25, 36, '2020-12-03 10:22:49', 326),
(916, 'Hello ', 198, 114, 'file-sample_150kB38.pdf', 25, 36, '2020-12-03 10:23:11', 327),
(917, 'tjyrjryj ', 173, 280, 'Document3.pdf', 30, 34, '2020-12-03 10:23:47', 328),
(918, 'tjyrjryj ', 232, 91, 'Document3.pdf', 40, 34, '2020-12-03 10:23:47', 328),
(919, 'tttttrdhr ', 157, 271, 'PDF_Updater.pdf', 35, 37, '2020-12-03 10:25:12', 329),
(920, 'tttttrdhr ', 164, 373, 'PDF_Updater.pdf', 30, 37, '2020-12-03 10:25:12', 329),
(921, 'rtjrjrjrjjjjjjjjjjjj ', 135, 224, 'PDF_Updater3.pdf', 25, 34, '2020-12-03 10:30:06', 330),
(922, 'xzczxczxc ', 63, 248, 'file-sample_150kB39.pdf', 10, 34, '2020-12-03 12:14:23', 331),
(923, 'Hello ', 181, 289, 'PDF_Updater4.pdf', 25, 34, '2020-12-03 12:31:29', 332),
(924, 'qdSDwdad ', 157, 282, 'PDF_Updater5.pdf', 25, 40, '2020-12-03 12:49:23', 333);

-- --------------------------------------------------------

--
-- Stand-in structure for view `pdf_version`
-- (See below for the actual view)
--
CREATE TABLE `pdf_version` (
`user_id` int(11)
,`notes` varchar(200)
,`pdf_name` varchar(100)
,`edit_id` int(11)
,`x` float
,`y` float
,`text` varchar(200)
,`editing_time` datetime
,`fontSize` int(2)
,`pdf_location` varchar(100)
);

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `p_id` int(11) NOT NULL,
  `privilege_id` int(11) NOT NULL,
  `permission` varchar(30) NOT NULL,
  `updating_date` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`p_id`, `privilege_id`, `permission`, `updating_date`) VALUES
(5, 1, 'write', NULL),
(6, 2, 'write', NULL),
(7, 2, 'edit', NULL),
(8, 3, 'edit', NULL),
(9, 3, 'write', NULL),
(10, 3, 'delete', NULL),
(11, 4, 'read', NULL),
(12, 1, 'read', NULL),
(13, 2, 'read', NULL);

-- --------------------------------------------------------

--
-- Stand-in structure for view `query`
-- (See below for the actual view)
--
CREATE TABLE `query` (
`p` int(11)
,`username` varchar(100)
,`email` varchar(100)
,`first Creation date` datetime
,`Last creation date` datetime
,`Edits` decimal(32,0)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `role`
-- (See below for the actual view)
--
CREATE TABLE `role` (
`user_id` int(11)
,`id` int(11)
,`pdf_name` varchar(100)
,`pdf_location` varchar(100)
,`created_at` datetime
,`updated_at` datetime
,`edits` int(11)
,`notes` varchar(200)
,`isDelete` int(1)
,`pdf_id` int(11)
,`pre_id` int(11)
,`upload_permission` int(11)
,`edit_permission` int(11)
,`delete_permssion` int(11)
);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `r_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `pre_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`r_id`, `role_id`, `pre_id`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 3),
(4, 4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `text` varchar(1000) NOT NULL,
  `x` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `email`, `password`, `user_id`, `created_at`, `updated_at`, `role_id`) VALUES
('Eashan', 'eashan@gmail.com', '5d41402abc4b2a76b9719d911017c592', 40, '2020-12-03 12:48:22', '2020-12-03 12:48:22', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_permissions`
--

CREATE TABLE `user_permissions` (
  `pre_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `upload_permission` int(11) NOT NULL DEFAULT 1,
  `edit_permission` int(11) NOT NULL DEFAULT 0,
  `delete_permssion` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_permissions`
--

INSERT INTO `user_permissions` (`pre_id`, `user_id`, `upload_permission`, `edit_permission`, `delete_permssion`) VALUES
(103, 40, 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

CREATE TABLE `user_profile` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last _name` varchar(50) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `note` varchar(2000) NOT NULL,
  `profile_pic` varchar(1000) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Stand-in structure for view `x`
-- (See below for the actual view)
--
CREATE TABLE `x` (
`pdf_id` int(11)
,`pdf_name` varchar(100)
,`isDelete` int(1)
,`edit_id` int(11)
,`edit_type` varchar(20)
,`user_id` int(11)
,`x` float
,`y` float
,`text` varchar(200)
,`editing_time` datetime
,`fontSize` int(2)
);

-- --------------------------------------------------------

--
-- Structure for view `activitylist`
--
DROP TABLE IF EXISTS `activitylist`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `activitylist`  AS SELECT `user`.`name` AS `NAME`, `activity`.`type` AS `TYPE`, `activity`.`activity` AS `activity` FROM (`user` join `activity` on(`user`.`user_id` = `activity`.`user_id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `activity_list`
--
DROP TABLE IF EXISTS `activity_list`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `activity_list`  AS SELECT `user`.`name` AS `NAME`, `user`.`user_id` AS `user_id`, `activity`.`type` AS `TYPE`, `activity`.`activity` AS `activity`, `activity`.`created_at` AS `created_at` FROM (`user` left join `activity` on(`user`.`user_id` = `activity`.`user_id`)) ORDER BY `activity`.`created_at` DESC ;

-- --------------------------------------------------------

--
-- Structure for view `all1`
--
DROP TABLE IF EXISTS `all1`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `all1`  AS SELECT `user`.`name` AS `name`, `user`.`email` AS `email`, `user`.`password` AS `password`, `user`.`user_id` AS `user_id`, `user`.`created_at` AS `created_at`, `user`.`updated_at` AS `updated_at` FROM `user` ;

-- --------------------------------------------------------

--
-- Structure for view `pdf_information`
--
DROP TABLE IF EXISTS `pdf_information`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `pdf_information`  AS SELECT `pdf_points`.`x` AS `x`, `pdf_points`.`y` AS `y` FROM ((`user` join `pdf` on(`user`.`user_id` = `pdf`.`user_id`)) join `pdf_points` on(`user`.`user_id` = `pdf_points`.`user_id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `pdf_version`
--
DROP TABLE IF EXISTS `pdf_version`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `pdf_version`  AS SELECT `pdf`.`user_id` AS `user_id`, `pdf`.`notes` AS `notes`, `pdf`.`pdf_name` AS `pdf_name`, `edit_history`.`edit_id` AS `edit_id`, `edit_history`.`x` AS `x`, `edit_history`.`y` AS `y`, `edit_history`.`text` AS `text`, `edit_history`.`editing_time` AS `editing_time`, `edit_history`.`fontSize` AS `fontSize`, `pdf`.`pdf_location` AS `pdf_location` FROM (`pdf` join `edit_history`) WHERE `pdf`.`id` = `edit_history`.`pdf_id` ;

-- --------------------------------------------------------

--
-- Structure for view `query`
--
DROP TABLE IF EXISTS `query`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `query`  AS SELECT `pdf`.`user_id` AS `p`, `user`.`name` AS `username`, `user`.`email` AS `email`, min(`pdf`.`created_at`) AS `first Creation date`, max(`pdf`.`created_at`) AS `Last creation date`, sum(`pdf`.`edits`) AS `Edits` FROM (`user` left join `pdf` on(`pdf`.`user_id` = `user`.`user_id`)) GROUP BY `user`.`name` ;

-- --------------------------------------------------------

--
-- Structure for view `role`
--
DROP TABLE IF EXISTS `role`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `role`  AS SELECT `pdf`.`user_id` AS `user_id`, `pdf`.`id` AS `id`, `pdf`.`pdf_name` AS `pdf_name`, `pdf`.`pdf_location` AS `pdf_location`, `pdf`.`created_at` AS `created_at`, `pdf`.`updated_at` AS `updated_at`, `pdf`.`edits` AS `edits`, `pdf`.`notes` AS `notes`, `pdf`.`isDelete` AS `isDelete`, `pdf`.`pdf_id` AS `pdf_id`, `user_permissions`.`pre_id` AS `pre_id`, `user_permissions`.`upload_permission` AS `upload_permission`, `user_permissions`.`edit_permission` AS `edit_permission`, `user_permissions`.`delete_permssion` AS `delete_permssion` FROM (`pdf` join `user_permissions` on(`pdf`.`user_id` = `user_permissions`.`user_id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `x`
--
DROP TABLE IF EXISTS `x`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `x`  AS SELECT `pdf`.`id` AS `pdf_id`, `pdf`.`pdf_name` AS `pdf_name`, `pdf`.`isDelete` AS `isDelete`, `edit_history`.`edit_id` AS `edit_id`, `edit_history`.`edit_type` AS `edit_type`, `edit_history`.`user_id` AS `user_id`, `edit_history`.`x` AS `x`, `edit_history`.`y` AS `y`, `edit_history`.`text` AS `text`, `edit_history`.`editing_time` AS `editing_time`, `edit_history`.`fontSize` AS `fontSize` FROM (`pdf` join `edit_history` on(`pdf`.`id` = `edit_history`.`pdf_id`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `email_2` (`email`);

--
-- Indexes for table `admin_profile`
--
ALTER TABLE `admin_profile`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `edit_history`
--
ALTER TABLE `edit_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pdf`
--
ALTER TABLE `pdf`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pdf_points`
--
ALTER TABLE `pdf_points`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user_permissions`
--
ALTER TABLE `user_permissions`
  ADD PRIMARY KEY (`pre_id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `user_profile`
--
ALTER TABLE `user_profile`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=285;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_profile`
--
ALTER TABLE `admin_profile`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `edit_history`
--
ALTER TABLE `edit_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `pdf`
--
ALTER TABLE `pdf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=334;

--
-- AUTO_INCREMENT for table `pdf_points`
--
ALTER TABLE `pdf_points`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=925;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `user_permissions`
--
ALTER TABLE `user_permissions`
  MODIFY `pre_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `user_profile`
--
ALTER TABLE `user_profile`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
