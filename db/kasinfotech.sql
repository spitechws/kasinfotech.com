-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 07, 2023 at 02:54 PM
-- Server version: 8.0.31
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kasinfotech`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

DROP TABLE IF EXISTS `banner`;
CREATE TABLE IF NOT EXISTS `banner` (
  `banner_id` int NOT NULL AUTO_INCREMENT,
  `image` mediumtext COLLATE utf8mb4_general_ci,
  `caption` varchar(300) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `short_description` mediumtext COLLATE utf8mb4_general_ci,
  `status` enum('1','0') COLLATE utf8mb4_general_ci NOT NULL DEFAULT '1',
  `edited_date` datetime NOT NULL,
  `created_date` datetime NOT NULL,
  `created_by` int DEFAULT NULL,
  `edited_by` int DEFAULT NULL,
  PRIMARY KEY (`banner_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Framework Table';

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`banner_id`, `image`, `caption`, `short_description`, `status`, `edited_date`, `created_date`, `created_by`, `edited_by`) VALUES
(2, 'IMG-20170723-WA0057.jpg', 'Sonkar College', '', '1', '2021-11-24 11:30:54', '2021-08-05 11:25:52', 1, 1),
(3, 'IMG-20180815-WA02251.jpg', 'Sonkar College', '', '1', '2021-11-24 11:29:54', '2021-08-05 11:26:04', 1, 1),
(4, '_MG_69601.jpg', 'Sonkar College', '', '1', '2022-06-04 11:30:59', '2021-08-05 11:26:42', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `career`
--

DROP TABLE IF EXISTS `career`;
CREATE TABLE IF NOT EXISTS `career` (
  `career_id` int NOT NULL AUTO_INCREMENT,
  `job_title` varchar(300) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `job_description` mediumtext COLLATE utf8mb4_general_ci,
  `posts` int DEFAULT NULL,
  `status` int NOT NULL DEFAULT '1' COMMENT '0=Inactive,1=Active',
  `salary` int NOT NULL DEFAULT '0',
  `location` varchar(100) COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `sequence_no` int NOT NULL DEFAULT '1',
  `created_date` datetime NOT NULL,
  `created_by` int DEFAULT NULL,
  `edited_date` datetime NOT NULL,
  `edited_by` int DEFAULT NULL,
  `job_type` int DEFAULT '0',
  `work_mode` int DEFAULT '0',
  `hr_contact` varchar(100) COLLATE utf8mb4_general_ci DEFAULT '',
  PRIMARY KEY (`career_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Framework Table';

--
-- Dumping data for table `career`
--

INSERT INTO `career` (`career_id`, `job_title`, `job_description`, `posts`, `status`, `salary`, `location`, `sequence_no`, `created_date`, `created_by`, `edited_date`, `edited_by`, `job_type`, `work_mode`, `hr_contact`) VALUES
(1, 'Chairman', 'in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)', 1, 1, 1, 'Bilaspur Chhattisgarh', 1, '2021-11-24 17:10:36', 1, '2021-11-24 17:10:36', NULL, 1, 1, 'gd@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `cms`
--

DROP TABLE IF EXISTS `cms`;
CREATE TABLE IF NOT EXISTS `cms` (
  `cms_id` int NOT NULL AUTO_INCREMENT,
  `page_name` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `page_title` mediumtext COLLATE utf8mb4_general_ci,
  `page_content` mediumtext COLLATE utf8mb4_general_ci,
  `created_date` datetime NOT NULL,
  `edited_date` datetime NOT NULL,
  `created_by` int NOT NULL,
  `edited_by` datetime DEFAULT NULL,
  `meta_keywords` mediumtext COLLATE utf8mb4_general_ci,
  `meta_description` mediumtext COLLATE utf8mb4_general_ci,
  `meta_robots` varchar(100) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'index,follow',
  `sequence_no` int NOT NULL DEFAULT '1',
  `menu` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`cms_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Framework Table';

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `comment_id` int NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8mb4_general_ci NOT NULL,
  `post_id` int NOT NULL,
  `content` text COLLATE utf8mb4_general_ci NOT NULL,
  `web_user_id` int NOT NULL COMMENT 'pk of web user table',
  `created_date` datetime NOT NULL,
  `edited_date` datetime NOT NULL,
  `created_by` int NOT NULL,
  `edited_by` int DEFAULT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Framework Table';

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

DROP TABLE IF EXISTS `config`;
CREATE TABLE IF NOT EXISTS `config` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(300) COLLATE utf8mb4_general_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_general_ci,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Framework Table';

--
-- Dumping data for table `config`
--

INSERT INTO `config` (`id`, `name`, `value`) VALUES
(1, 'site_name', 'KAS INFO TECH'),
(2, 'site_url', 'http://aareality.in/'),
(3, 'site_email', 'info@kasinfotech.com'),
(7, 'date_format', 'm/d/Y'),
(8, 'site_logo', 'logo.png'),
(9, 'site_favicon', 'sonkar_college1.png'),
(10, 'google_analytics_code', ''),
(11, 'bulk_sms_url', ''),
(12, 'bulk_sms_sender_id', ''),
(13, 'bulk_sms_username', ''),
(14, 'bulk_sms_pass', ''),
(15, 'bulk_sms_param1', ''),
(16, 'bulk_sms_param2', ''),
(17, 'bulk_sms_param3', ''),
(18, 'bulk_sms_param4', ''),
(19, 'bulk_sms_param5', 'fdsfds'),
(20, 'bulk_sms_param6', 'fdsfds'),
(21, 'site_assets', 'assets-site'),
(27, 'version', '1.0.1'),
(28, 'language', 'english'),
(29, 'facebook', 'https://www.facebook.com/Sonkar.495334'),
(30, 'twitter', 'http://facebook.com'),
(31, 'instagram', 'http://facebook.com'),
(32, 'linkedin', 'http://facebook.com'),
(33, 'youtube', 'http://facebook.com'),
(38, 'record_limit', '100'),
(39, 'bulk_sms_param_value1', ''),
(40, 'bulk_sms_param_value2', ''),
(41, 'bulk_sms_param_value3', ''),
(42, 'bulk_sms_param_value4', ''),
(43, 'bulk_sms_param_value5', 'dsfds'),
(44, 'bulk_sms_param_value6', 'dsfdsfds'),
(45, 'site_contact', '9754676700'),
(46, 'site_address', 'TELANGANA'),
(47, 'is_multilingual', '0'),
(48, 'is_suspended', '0'),
(49, 'is_underconstruction', '0'),
(50, 'site_theme', 'kasinfotech'),
(51, 'datetime_format', 'd/M/Y g:i A'),
(52, 'logo_height', '80'),
(53, 'logo_width', '150'),
(54, 'copyright_text', '@copyright'),
(55, 'developed_by_url', 'http://spitech.in'),
(56, 'developed_by', 'SpiTech Web Services Pvt. Ltd.'),
(57, 'google_map', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3701.9613965130698!2d81.96507711403304!3d21.897562262928624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a286ee195555555%3A0x257d458504bc612a!2sTrimurty%20Public%20School!5e0!3m2!1sen!2sin!4v1628143646091!5m2!1sen!2sin'),
(58, 'affilation_no', 'C.B.S.E. Affiliation No. : 3330188'),
(59, 'school_code', 'School Code : 15262'),
(61, 'cbsc_mandate', 'sonkar_college1.png'),
(63, 'committee', 'blank_(8).pdf');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

DROP TABLE IF EXISTS `enquiry`;
CREATE TABLE IF NOT EXISTS `enquiry` (
  `enquiry_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `mobile` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(300) COLLATE utf8mb4_general_ci NOT NULL,
  `purpose` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `subject` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `message` mediumtext COLLATE utf8mb4_general_ci NOT NULL,
  `created_date` datetime DEFAULT NULL,
  `edited_date` datetime DEFAULT NULL,
  `sequence_no` int DEFAULT '1',
  `created_by` int NOT NULL,
  `edited_by` datetime DEFAULT NULL,
  `service_name` mediumtext COLLATE utf8mb4_general_ci,
  PRIMARY KEY (`enquiry_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Framework Table';

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`enquiry_id`, `name`, `mobile`, `email`, `purpose`, `subject`, `message`, `created_date`, `edited_date`, `sequence_no`, `created_by`, `edited_by`, `service_name`) VALUES
(6, 'rahul.soni@spitech.in', '7878787878', 'rahul.soni@spitech.in', '', NULL, 'hii ji', '2021-12-14 07:33:48', NULL, 1, 0, NULL, NULL),
(7, 'Rahul', '7878787878', 'rahul.soni@spitech.in', '', NULL, 'hey', '2021-12-17 05:18:43', NULL, 1, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

DROP TABLE IF EXISTS `gallery`;
CREATE TABLE IF NOT EXISTS `gallery` (
  `gallery_id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(300) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `sequence_no` int DEFAULT NULL,
  `created_date` date DEFAULT NULL,
  `status` int NOT NULL,
  `edited_date` date DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `edited_by` datetime DEFAULT NULL,
  PRIMARY KEY (`gallery_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Framework Table';

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`gallery_id`, `title`, `sequence_no`, `created_date`, `status`, `edited_date`, `created_by`, `edited_by`) VALUES
(5, 'Campus', NULL, '2021-12-17', 0, '2021-12-17', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `gallery_image`
--

DROP TABLE IF EXISTS `gallery_image`;
CREATE TABLE IF NOT EXISTS `gallery_image` (
  `image_id` int NOT NULL AUTO_INCREMENT,
  `gallery_id` int NOT NULL,
  `image` mediumtext COLLATE utf8mb4_general_ci NOT NULL,
  `sequence_no` int DEFAULT NULL,
  `created_date` date DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `edited_by` datetime DEFAULT NULL,
  `edited_date` date DEFAULT NULL,
  `title` mediumtext COLLATE utf8mb4_general_ci,
  PRIMARY KEY (`image_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Framework Table';

--
-- Dumping data for table `gallery_image`
--

INSERT INTO `gallery_image` (`image_id`, `gallery_id`, `image`, `sequence_no`, `created_date`, `created_by`, `edited_by`, `edited_date`, `title`) VALUES
(9, 5, 'image_5.jpg', NULL, '2021-12-17', 1, NULL, '2021-12-17', 'Gate'),
(10, 5, 'google-logo-9808.png', NULL, '2022-06-02', 1, NULL, '2022-06-02', 'imhfgfs');

-- --------------------------------------------------------

--
-- Table structure for table `job_application`
--

DROP TABLE IF EXISTS `job_application`;
CREATE TABLE IF NOT EXISTS `job_application` (
  `application_id` int NOT NULL AUTO_INCREMENT,
  `career_id` int DEFAULT NULL,
  `name` varchar(250) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `mobile` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(250) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `resume` mediumtext COLLATE utf8mb4_general_ci,
  `created_date` datetime DEFAULT NULL,
  PRIMARY KEY (`application_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Framework Table';

--
-- Dumping data for table `job_application`
--

INSERT INTO `job_application` (`application_id`, `career_id`, `name`, `mobile`, `email`, `resume`, `created_date`) VALUES
(1, 1, 'sita ram', '6789056789', 'contact@spitech.co.in', 'CMS.pdf', '2021-11-24 05:12:06'),
(2, 1, 'sita ram', '6789056789', 'contact@spitech.co.in', 'CMS1.pdf', '2021-12-17 05:32:32');

-- --------------------------------------------------------

--
-- Table structure for table `message_templates`
--

DROP TABLE IF EXISTS `message_templates`;
CREATE TABLE IF NOT EXISTS `message_templates` (
  `template_id` int NOT NULL AUTO_INCREMENT,
  `template` varchar(300) COLLATE utf8mb4_general_ci NOT NULL,
  `subject` mediumtext COLLATE utf8mb4_general_ci NOT NULL,
  `from_name` varchar(300) COLLATE utf8mb4_general_ci NOT NULL,
  `from_email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `bcc` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `cc` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `message` mediumtext COLLATE utf8mb4_general_ci NOT NULL,
  `type` enum('sms','email') COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'sms',
  `sequence_id` int DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `created_date` date DEFAULT NULL,
  `edited_date` datetime DEFAULT NULL,
  `edited_by` int DEFAULT NULL,
  PRIMARY KEY (`template_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Framework Table';

--
-- Dumping data for table `message_templates`
--

INSERT INTO `message_templates` (`template_id`, `template`, `subject`, `from_name`, `from_email`, `bcc`, `cc`, `message`, `type`, `sequence_id`, `created_by`, `created_date`, `edited_date`, `edited_by`) VALUES
(1, 'Forgot Password', 'Forgot Password', '', '', '', '', 'Dear [[NAME]],<br />\r\n<br />\r\n<br />\r\nPlease find your new login details &ndash;&nbsp;<br />\r\n<strong>Login Url</strong>: [[LOGIN_URL]]<br />\r\n<strong>Username </strong>: [[USERNAME]]<br />\r\n<strong>Password </strong>: [[PASSWORD]]<br />\r\n<br />\r\nRegards,<br />\r\n[[SITENAME]]', 'email', NULL, 1, '2021-07-18', '2021-07-18 02:00:54', 1);

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

DROP TABLE IF EXISTS `modules`;
CREATE TABLE IF NOT EXISTS `modules` (
  `title` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `module_id` int NOT NULL AUTO_INCREMENT,
  `is_module` int NOT NULL DEFAULT '1',
  `group_id` int NOT NULL,
  `sequence_no` int NOT NULL DEFAULT '0',
  `url` text COLLATE utf8mb4_general_ci NOT NULL,
  `icon` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `status` enum('0','1') COLLATE utf8mb4_general_ci NOT NULL DEFAULT '1',
  `edited_date` date DEFAULT NULL,
  `created_date` date DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `edited_by` int DEFAULT NULL,
  `module_table` varchar(250) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `module_table_pk` varchar(250) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`module_id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Framework Table';

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`title`, `module_id`, `is_module`, `group_id`, `sequence_no`, `url`, `icon`, `status`, `edited_date`, `created_date`, `created_by`, `edited_by`, `module_table`, `module_table_pk`) VALUES
('CMS', 1, 0, 8, 1, 'admin_cms', 'glyphicon glyphicon-th', '1', '2017-11-30', NULL, 1, NULL, NULL, NULL),
('Page Component', 2, 0, 8, 0, 'admin_component', 'glyphicon glyphicon-th', '1', NULL, '2021-07-18', 1, NULL, NULL, NULL),
('Media Files', 3, 0, 8, 5, 'admin_media', 'glyphicon glyphicon-th', '1', '2019-12-04', '2019-03-23', 1, 1, NULL, NULL),
('Post', 4, 0, 8, 0, 'admin_post', 'glyphicon glyphicon-th', '1', NULL, '2021-07-18', 1, NULL, 'post', 'post_id'),
('Enquiry', 6, 1, 8, 6, 'admin_enquiry', 'glyphicon glyphicon-th', '1', '2019-12-04', NULL, 1, 1, NULL, NULL),
('Testimonials', 7, 1, 8, 2, 'admin_testimonial', 'glyphicon glyphicon-th', '1', '2021-07-11', NULL, 1, 1, NULL, NULL),
('Career', 9, 1, 8, 1, 'admin_career', 'glyphicon glyphicon-th', '1', '2021-07-11', NULL, 1, 1, NULL, NULL),
('Services', 11, 1, 8, 9, 'admin_service', 'glyphicon glyphicon-th', '1', '2023-06-07', '2019-12-05', 1, 1, 'service', ''),
('Job Application', 12, 1, 8, 1, 'admin_job_application', 'glyphicon glyphicon-th', '1', '2021-07-11', NULL, 1, 1, NULL, NULL),
('Banner', 13, 1, 8, 2, 'admin_banner', 'glyphicon glyphicon-th', '1', '2017-11-30', NULL, 1, NULL, NULL, NULL),
('Subscribers', 14, 1, 8, 0, 'admin_subscriber', 'glyphicon glyphicon-th', '1', '2021-08-01', '2021-08-01', 1, NULL, NULL, NULL),
('Video Gallery', 32, 1, 8, 0, 'admin_video', 'glyphicon glyphicon-th', '1', '2022-06-03', '2022-06-03', 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `module_group`
--

DROP TABLE IF EXISTS `module_group`;
CREATE TABLE IF NOT EXISTS `module_group` (
  `group_id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `selected_id` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `icon` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `sequence_no` int NOT NULL DEFAULT '1',
  `created_date` datetime DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `edited_date` datetime DEFAULT NULL,
  `edited_by` int DEFAULT NULL,
  PRIMARY KEY (`group_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Framework Table';

--
-- Dumping data for table `module_group`
--

INSERT INTO `module_group` (`group_id`, `title`, `selected_id`, `icon`, `sequence_no`, `created_date`, `created_by`, `edited_date`, `edited_by`) VALUES
(8, 'Modules', 'modules', 'glyphicon glyphicon-dashboard', 4, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `page_component`
--

DROP TABLE IF EXISTS `page_component`;
CREATE TABLE IF NOT EXISTS `page_component` (
  `id` int NOT NULL AUTO_INCREMENT,
  `section` enum('header','body','sidebar','footer') COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'body',
  `name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `content` text COLLATE utf8mb4_general_ci NOT NULL,
  `status` enum('1','0') COLLATE utf8mb4_general_ci NOT NULL DEFAULT '1',
  `created_date` date DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `edited_date` date DEFAULT NULL,
  `edited_by` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `page_component`
--

INSERT INTO `page_component` (`id`, `section`, `name`, `content`, `status`, `created_date`, `created_by`, `edited_date`, `edited_by`) VALUES
(1, 'footer', 'footer_about', 'The family is growing every day. The core schools have been set up by the Society and schools under aegis of the STGIS Society have been established globally...', '1', '2021-12-14', 1, '2022-06-02', 1);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

DROP TABLE IF EXISTS `post`;
CREATE TABLE IF NOT EXISTS `post` (
  `post_id` int NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8mb4_general_ci NOT NULL,
  `slug` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `featured_image` text COLLATE utf8mb4_general_ci NOT NULL,
  `content` text COLLATE utf8mb4_general_ci NOT NULL,
  `short_description` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `tag` text COLLATE utf8mb4_general_ci NOT NULL,
  `view_count` int NOT NULL,
  `category_id` int NOT NULL,
  `created_date` datetime NOT NULL,
  `edited_date` datetime NOT NULL,
  `created_by` int NOT NULL,
  `edited_by` int DEFAULT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Framework Table';

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `title`, `slug`, `featured_image`, `content`, `short_description`, `tag`, `view_count`, `category_id`, `created_date`, `edited_date`, `created_by`, `edited_by`) VALUES
(1, 'Where Can I Get Some?', 'news', 'jpeg-featured-image.jpg', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)<br>\r\n<br>\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)', 'many web sites still in their infancy. Various versions have evolved over the years, sometimes by accid', 'tag, hashtag, tom', 6, 12, '2021-11-24 16:30:08', '2021-11-24 16:36:05', 1, 1),
(2, 'By Accident, Sometimes On Purpose (injected Humour And The Like).', 'crime', 'spitech-logo.jpg', '<h2>Why do we use it?</h2>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).<br>\r\n<br>\r\n </p>\r\n\r\n<h2>Why do we use it?</h2>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem ', 'hey, buddy', 3, 13, '2021-11-24 16:57:34', '2021-11-24 16:57:34', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `post_category`
--

DROP TABLE IF EXISTS `post_category`;
CREATE TABLE IF NOT EXISTS `post_category` (
  `category_id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `edited_date` datetime DEFAULT NULL,
  `created_by` int NOT NULL,
  `edited_by` int DEFAULT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Framework Table';

--
-- Dumping data for table `post_category`
--

INSERT INTO `post_category` (`category_id`, `title`, `created_date`, `edited_date`, `created_by`, `edited_by`) VALUES
(12, 'News', '2021-11-24 16:29:04', '2021-11-24 16:29:04', 1, NULL),
(13, 'Crime', '2021-11-24 16:56:12', '2021-11-24 16:56:12', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

DROP TABLE IF EXISTS `service`;
CREATE TABLE IF NOT EXISTS `service` (
  `course_id` int NOT NULL AUTO_INCREMENT,
  `image` mediumtext COLLATE utf8mb4_general_ci,
  `title` varchar(250) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `demo_url` mediumtext COLLATE utf8mb4_general_ci,
  `username` varchar(120) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `password` varchar(120) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` mediumtext COLLATE utf8mb4_general_ci NOT NULL,
  `status` enum('1','0') COLLATE utf8mb4_general_ci NOT NULL DEFAULT '1',
  `edited_date` datetime NOT NULL,
  `created_date` datetime NOT NULL,
  `sequence_no` int NOT NULL DEFAULT '1',
  `created_by` int DEFAULT NULL,
  `edited_by` datetime DEFAULT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Framework Table';

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`course_id`, `image`, `title`, `demo_url`, `username`, `password`, `description`, `status`, `edited_date`, `created_date`, `sequence_no`, `created_by`, `edited_by`) VALUES
(4, 'google-logo-9808.png', NULL, NULL, NULL, NULL, '<h2>Where can I get some?</h2>\r\n\r\n<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure the</p>', '1', '2022-06-04 15:14:53', '2022-06-01 18:22:43', 1, 1, '0000-00-00 00:00:00'),
(7, '6.jpg', NULL, NULL, NULL, NULL, '<h2>Where can I get some?</h2>\r\n\r\n<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure the</p>', '1', '2022-06-01 18:24:49', '2022-06-01 18:24:49', 1, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subscriber`
--

DROP TABLE IF EXISTS `subscriber`;
CREATE TABLE IF NOT EXISTS `subscriber` (
  `subscriber_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`subscriber_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Framework Table';

--
-- Dumping data for table `subscriber`
--

INSERT INTO `subscriber` (`subscriber_id`, `name`, `email`, `created_date`) VALUES
(1, NULL, 'contact@spitech.co.in', '2021-11-24 17:08:10'),
(2, NULL, 'contact@spitech.co.in', '2021-11-24 17:08:20'),
(3, NULL, 'contact@spitech.in', '2021-11-24 17:09:03'),
(4, NULL, 'adubey269@gmail.com', '2021-12-14 08:00:05'),
(5, NULL, 'ss@ok.com', '2021-12-17 05:43:29');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

DROP TABLE IF EXISTS `testimonial`;
CREATE TABLE IF NOT EXISTS `testimonial` (
  `testimonial_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `video_url` varchar(300) COLLATE utf8mb4_general_ci NOT NULL,
  `message` mediumtext COLLATE utf8mb4_general_ci NOT NULL,
  `created_date` datetime DEFAULT NULL,
  `edited_date` datetime DEFAULT NULL,
  `created_by` int NOT NULL,
  `edited_by` int NOT NULL,
  `sequence_no` int NOT NULL,
  `image` mediumtext COLLATE utf8mb4_general_ci,
  PRIMARY KEY (`testimonial_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Framework Table';

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`testimonial_id`, `name`, `video_url`, `message`, `created_date`, `edited_date`, `created_by`, `edited_by`, `sequence_no`, `image`) VALUES
(1, 'Abhishek', 'KcWcu1ytazY', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that i', '2021-11-24 12:39:10', '2022-06-02 10:28:21', 1, 1, 0, 'staff-21.jpg'),
(2, 'sita ram', 'Go8nTmfrQd8', '“Let me tell you the story of the space viking, Thor Odinson…”\r\n\r\nWatch the brand-new trailer for Marvel Studios’ Thor: Love and Thunder and witness it only in theaters July 8.', '2022-06-02 10:32:53', '2022-06-02 10:32:53', 1, 0, 0, '2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `role_id` int NOT NULL COMMENT 'User role id',
  `name` varchar(300) COLLATE utf8mb4_general_ci NOT NULL,
  `mobile` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(300) COLLATE utf8mb4_general_ci NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `photo` text COLLATE utf8mb4_general_ci NOT NULL,
  `quote` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `created_date` date DEFAULT NULL,
  `edited_date` date DEFAULT NULL,
  `created_by` int NOT NULL,
  `edited_by` datetime DEFAULT NULL,
  `sequence_no` int NOT NULL DEFAULT '1',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Framework Table';

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `role_id`, `name`, `mobile`, `email`, `status`, `photo`, `quote`, `created_date`, `edited_date`, `created_by`, `edited_by`, `sequence_no`) VALUES
(1, 0, 'SuperAdmin', '7828796979', 'spitechtesting@gmail.com', 1, '', '', '0000-00-00', '2021-07-04', 1, '0000-00-00 00:00:00', 1),
(7, 2, 'demo123', '1234567891', 'demo@gmail.com', 1, '', '', '2023-06-06', '2023-06-06', 1, '0000-00-00 00:00:00', 1),
(8, 2, 'demo1', '1234567890', 'demo123@gmail.com', 1, '', '', '2023-06-06', '2023-06-06', 1, NULL, 1),
(9, 2, 'ssdsds', '1234567898', 'demo1234@gmail.com', 1, '', '', '2023-06-06', '2023-06-06', 1, NULL, 1),
(10, 2, 'RAMESH1', '1234567897', 'spitechsoft@gmail.com', 1, '', '', '2023-06-06', '2023-06-06', 1, '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_permission`
--

DROP TABLE IF EXISTS `user_permission`;
CREATE TABLE IF NOT EXISTS `user_permission` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `module_id` int NOT NULL,
  `add_permission` int NOT NULL DEFAULT '0',
  `edit_permission` int NOT NULL DEFAULT '0',
  `delete_permission` int NOT NULL DEFAULT '0',
  `company_id` int NOT NULL DEFAULT '1',
  `view_permission` int NOT NULL DEFAULT '0',
  `export_permission` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Framework Table';

--
-- Dumping data for table `user_permission`
--

INSERT INTO `user_permission` (`id`, `user_id`, `module_id`, `add_permission`, `edit_permission`, `delete_permission`, `company_id`, `view_permission`, `export_permission`) VALUES
(1, 5, 1, 1, 1, 1, 1, 1, 1),
(2, 5, 2, 1, 1, 1, 1, 1, 1),
(3, 5, 3, 1, 1, 1, 1, 1, 1),
(4, 5, 4, 1, 1, 1, 1, 1, 1),
(5, 5, 5, 1, 1, 1, 1, 1, 1),
(6, 5, 6, 1, 1, 1, 1, 1, 1),
(7, 5, 7, 1, 1, 1, 1, 1, 1),
(8, 5, 8, 1, 1, 1, 1, 1, 1),
(9, 5, 9, 1, 1, 1, 1, 1, 1),
(10, 5, 10, 1, 1, 1, 1, 1, 1),
(11, 5, 11, 1, 1, 1, 1, 1, 1),
(12, 5, 12, 1, 1, 1, 1, 1, 1),
(13, 5, 13, 1, 1, 1, 1, 1, 1),
(14, 5, 14, 1, 1, 1, 1, 1, 1),
(15, 5, 15, 1, 1, 1, 1, 1, 1),
(16, 6, 1, 1, 1, 1, 1, 1, 1),
(17, 6, 2, 0, 0, 0, 1, 0, 0),
(18, 6, 3, 0, 0, 0, 1, 0, 0),
(19, 6, 4, 0, 0, 0, 1, 0, 0),
(20, 6, 5, 0, 0, 0, 1, 0, 0),
(21, 6, 6, 0, 0, 0, 1, 0, 0),
(22, 6, 7, 0, 0, 0, 1, 0, 0),
(23, 6, 8, 0, 0, 0, 1, 0, 0),
(24, 6, 9, 0, 0, 0, 1, 0, 0),
(25, 6, 10, 0, 0, 0, 1, 0, 0),
(26, 6, 11, 0, 0, 0, 1, 0, 0),
(27, 6, 12, 0, 0, 0, 1, 0, 0),
(28, 6, 13, 0, 0, 0, 1, 0, 0),
(29, 6, 14, 0, 0, 0, 1, 0, 0),
(30, 6, 15, 0, 0, 0, 1, 0, 0),
(31, 6, 16, 0, 0, 0, 1, 0, 0),
(32, 6, 17, 0, 0, 0, 1, 0, 0),
(33, 6, 18, 0, 0, 0, 1, 0, 0),
(34, 6, 19, 0, 0, 0, 1, 0, 0),
(35, 6, 20, 0, 0, 0, 1, 0, 0),
(36, 6, 21, 0, 0, 0, 1, 0, 0),
(37, 6, 22, 0, 0, 0, 1, 0, 0),
(38, 6, 23, 0, 0, 0, 1, 0, 0),
(39, 6, 24, 0, 0, 0, 1, 0, 0),
(40, 6, 25, 0, 0, 0, 1, 0, 0),
(41, 6, 26, 0, 0, 0, 1, 0, 0),
(42, 6, 27, 0, 0, 0, 1, 0, 0),
(43, 6, 28, 0, 0, 0, 1, 0, 0),
(44, 6, 29, 0, 0, 0, 1, 0, 0),
(45, 6, 30, 0, 0, 0, 1, 0, 0),
(46, 6, 31, 0, 0, 0, 1, 0, 0),
(47, 6, 32, 0, 0, 0, 1, 0, 0),
(48, 6, 33, 0, 0, 0, 1, 0, 0),
(49, 5, 16, 0, 0, 0, 1, 0, 0),
(50, 5, 17, 0, 0, 0, 1, 0, 0),
(51, 5, 18, 0, 0, 0, 1, 0, 0),
(52, 5, 19, 0, 0, 0, 1, 0, 0),
(53, 5, 20, 0, 0, 0, 1, 0, 0),
(54, 5, 21, 0, 0, 0, 1, 0, 0),
(55, 5, 22, 0, 0, 0, 1, 0, 0),
(56, 5, 23, 0, 0, 0, 1, 0, 0),
(57, 5, 24, 0, 0, 0, 1, 0, 0),
(58, 5, 25, 0, 0, 0, 1, 0, 0),
(59, 5, 26, 0, 0, 0, 1, 0, 0),
(60, 5, 27, 0, 0, 0, 1, 0, 0),
(61, 5, 28, 0, 0, 0, 1, 0, 0),
(62, 5, 29, 0, 0, 0, 1, 0, 0),
(63, 5, 30, 0, 0, 0, 1, 0, 0),
(64, 5, 31, 0, 0, 0, 1, 0, 0),
(65, 5, 32, 0, 0, 0, 1, 0, 0),
(66, 5, 33, 0, 0, 0, 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

DROP TABLE IF EXISTS `user_role`;
CREATE TABLE IF NOT EXISTS `user_role` (
  `role_id` int NOT NULL AUTO_INCREMENT,
  `role` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `created_date` datetime DEFAULT NULL,
  `edited_date` datetime DEFAULT NULL,
  `created_by` int NOT NULL DEFAULT '0',
  `edited_by` datetime DEFAULT NULL,
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Framework Table';

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`role_id`, `role`, `created_date`, `edited_date`, `created_by`, `edited_by`) VALUES
(0, 'Super Admin', '2017-07-23 00:00:00', '2017-08-01 00:00:00', 1, NULL),
(1, 'Admin', NULL, NULL, 0, NULL),
(2, 'Operator', NULL, '2017-07-23 00:00:00', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

DROP TABLE IF EXISTS `video`;
CREATE TABLE IF NOT EXISTS `video` (
  `video_id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(300) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `link` text COLLATE utf8mb4_general_ci,
  `status` int NOT NULL DEFAULT '1' COMMENT '0=Inactive,1=Active',
  `edited_date` datetime NOT NULL,
  `created_date` datetime NOT NULL,
  `sequence_no` int NOT NULL DEFAULT '1',
  `created_by` int DEFAULT NULL,
  `edited_by` datetime DEFAULT NULL,
  PRIMARY KEY (`video_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Framework Table';

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`video_id`, `title`, `link`, `status`, `edited_date`, `created_date`, `sequence_no`, `created_by`, `edited_by`) VALUES
(1, 'New Video', 'tbbveDpUZv4', 1, '2022-06-03 15:59:10', '2022-06-03 15:59:10', 1, 1, NULL),
(2, 'vd', '5Eqb_-j3FDA', 1, '2022-06-03 16:13:17', '2022-06-03 16:13:17', 1, 1, NULL),
(3, 'ee', '5Eqb_-j3FDA', 1, '2022-06-03 16:14:28', '2022-06-03 16:14:28', 1, 1, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
