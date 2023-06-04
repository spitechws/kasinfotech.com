-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2022 at 03:20 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scms-v3`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic_calendar`
--

CREATE TABLE `academic_calendar` (
  `calendar_id` int(11) NOT NULL,
  `attachment` mediumtext DEFAULT NULL,
  `title` varchar(300) DEFAULT NULL,
  `short_description` mediumtext DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '0=Inactive,1=Active',
  `edited_date` datetime NOT NULL,
  `created_date` datetime NOT NULL,
  `sequence_no` int(11) NOT NULL DEFAULT 1,
  `created_by` int(11) DEFAULT NULL,
  `edited_by` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Framework Table';

--
-- Dumping data for table `academic_calendar`
--

INSERT INTO `academic_calendar` (`calendar_id`, `attachment`, `title`, `short_description`, `status`, `edited_date`, `created_date`, `sequence_no`, `created_by`, `edited_by`) VALUES
(1, 'blank_(1).pdf', 'Academic Calendar 2021-2022', NULL, 1, '2021-12-14 11:58:48', '2021-12-14 11:58:48', 1, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `admission`
--

CREATE TABLE `admission` (
  `admission_id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `course` int(11) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `email` varchar(150) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '0=Inactive,1=Active',
  `edited_date` datetime NOT NULL,
  `created_date` datetime NOT NULL,
  `sequence_no` int(11) NOT NULL DEFAULT 1,
  `created_by` int(11) DEFAULT NULL,
  `edited_by` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Framework Table';

--
-- Dumping data for table `admission`
--

INSERT INTO `admission` (`admission_id`, `name`, `course`, `mobile`, `email`, `status`, `edited_date`, `created_date`, `sequence_no`, `created_by`, `edited_by`) VALUES
(1, 'RS', 0, '7878787878', 'rahul.soni@spitech.in', 1, '0000-00-00 00:00:00', '2021-12-16 01:49:49', 1, NULL, NULL),
(2, 'sita ram', 1, '06789056789', 'contact@spitech.co.in', 1, '0000-00-00 00:00:00', '2021-12-16 01:52:49', 1, NULL, NULL),
(3, 'RS', 1, '7878787878', 'rahul.soni@spitech.in', 1, '0000-00-00 00:00:00', '2021-12-17 05:20:46', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `admission_list`
--

CREATE TABLE `admission_list` (
  `list_id` int(11) NOT NULL,
  `attachment` mediumtext DEFAULT NULL,
  `title` varchar(300) DEFAULT NULL,
  `short_description` mediumtext DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '0=Inactive,1=Active',
  `edited_date` datetime NOT NULL,
  `created_date` datetime NOT NULL,
  `sequence_no` int(11) NOT NULL DEFAULT 1,
  `created_by` int(11) DEFAULT NULL,
  `edited_by` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Framework Table';

--
-- Dumping data for table `admission_list`
--

INSERT INTO `admission_list` (`list_id`, `attachment`, `title`, `short_description`, `status`, `edited_date`, `created_date`, `sequence_no`, `created_by`, `edited_by`) VALUES
(1, 'blank.pdf', 'Btech CSE 2021 Admission List', NULL, 1, '2021-12-16 03:05:34', '2021-12-16 03:05:34', 1, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `admission_notification`
--

CREATE TABLE `admission_notification` (
  `admission_notification_id` int(11) NOT NULL,
  `attachment` mediumtext DEFAULT NULL,
  `title` varchar(300) DEFAULT NULL,
  `short_description` mediumtext DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '0=Inactive,1=Active',
  `edited_date` datetime NOT NULL,
  `created_date` datetime NOT NULL,
  `sequence_no` int(11) NOT NULL DEFAULT 1,
  `created_by` int(11) DEFAULT NULL,
  `edited_by` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Framework Table';

--
-- Dumping data for table `admission_notification`
--

INSERT INTO `admission_notification` (`admission_notification_id`, `attachment`, `title`, `short_description`, `status`, `edited_date`, `created_date`, `sequence_no`, `created_by`, `edited_by`) VALUES
(1, 'blank_(2).pdf', 'BSC (PCM) Admission 2021', NULL, 1, '2021-12-15 02:20:35', '2021-12-15 02:18:56', 1, 1, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE `alumni` (
  `alumni_id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `class` varchar(100) NOT NULL,
  `year_of_passing` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `email` varchar(150) NOT NULL,
  `current_organization` varchar(200) NOT NULL,
  `current_designation` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '0=Inactive,1=Active',
  `edited_date` datetime NOT NULL,
  `created_date` datetime NOT NULL,
  `sequence_no` int(11) NOT NULL DEFAULT 1,
  `created_by` int(11) DEFAULT NULL,
  `edited_by` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Framework Table';

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`alumni_id`, `name`, `class`, `year_of_passing`, `dob`, `mobile`, `email`, `current_organization`, `current_designation`, `address`, `status`, `edited_date`, `created_date`, `sequence_no`, `created_by`, `edited_by`) VALUES
(1, 'RS', 'Btech CSE', '0000-00-00', '1999-12-05', '2147483647', 'rahul.soni@spitech.in', 'SPitech web Services', '0', 'park streer', 1, '0000-00-00 00:00:00', '2021-12-15 03:55:10', 1, NULL, NULL),
(2, 'sita ram', 'Btech CSE', '0000-00-00', '2006-02-15', '2147483647', 'contact@spitech.co.in', 'h. no. 144', 'PHP Developer', 'partk street', 1, '0000-00-00 00:00:00', '2021-12-15 03:58:34', 1, NULL, NULL),
(3, 'bhai saab', 'Btech CSE', '2021', '2019-06-14', '2147483647', 'contact@spitech.co.in', 'Spitech Web Services', 'PHP Developer', 'partk street', 1, '0000-00-00 00:00:00', '2021-12-15 04:05:11', 1, NULL, NULL),
(4, 'bhai', 'Btech CSE', '2021', '2018-06-13', '2147483647', 'contact@spitech.co.in', 'TCS Banglore', 'CTO', 'partk street', 1, '0000-00-00 00:00:00', '2021-12-15 04:10:01', 1, NULL, NULL),
(5, 'bhai saab', 'Btech CSE', '2021', '2021-12-02', '2147483647', 'contact@spitech.co.in', 'Spitech Web Services', 'CTO 2', 'partk street', 1, '0000-00-00 00:00:00', '2021-12-15 04:12:27', 1, NULL, NULL),
(6, 'bhai', 'Btech CSE', '2021', '2021-12-09', '2147483647', 'contact@spitech.co.in', 'SPitech web Services', 'PHP Developer', 'partk street', 1, '0000-00-00 00:00:00', '2021-12-15 04:13:50', 1, NULL, NULL),
(7, 'bhai saab', 'Btech CSE', '2021', '2021-12-15', '2147483647', 'contact@spitech.co.in', 'h. no. 144', 'PHP Developer', 'partk street', 1, '0000-00-00 00:00:00', '2021-12-15 04:14:33', 1, NULL, NULL),
(8, 'sita ram', 'Btech CSE', '2021', '2010-02-16', '6789056789', 'contact@spitech.co.in', 'Spitech Web Services', 'PHP Developer', 'partk street', 1, '0000-00-00 00:00:00', '2021-12-15 04:48:57', 1, NULL, NULL),
(9, 'sita ram', 'Btech CSE', '2021', '2008-02-05', '6789056789', 'contact@spitech.co.in', 'h. no. 144', 'PHP Developer', 'partk street', 1, '0000-00-00 00:00:00', '2021-12-17 05:11:29', 1, NULL, NULL),
(10, 'bhai', 'Btech CSE', '2021', '2007-02-20', '6789056789', 'contact@spitech.co.in', 'Spitech Web Services', 'PHP Developer', 'partk street', 1, '0000-00-00 00:00:00', '2021-12-17 05:22:49', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `banner_id` int(11) NOT NULL,
  `image` mediumtext DEFAULT NULL,
  `caption` varchar(300) DEFAULT NULL,
  `short_description` mediumtext DEFAULT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `edited_date` datetime NOT NULL,
  `created_date` datetime NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `edited_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Framework Table';

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

CREATE TABLE `career` (
  `career_id` int(11) NOT NULL,
  `job_title` varchar(300) DEFAULT NULL,
  `job_description` mediumtext DEFAULT NULL,
  `posts` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '0=Inactive,1=Active',
  `salary` int(11) NOT NULL DEFAULT 0,
  `location` varchar(100) NOT NULL DEFAULT '',
  `sequence_no` int(11) NOT NULL DEFAULT 1,
  `created_date` datetime NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `edited_date` datetime NOT NULL,
  `edited_by` int(11) DEFAULT NULL,
  `job_type` int(11) DEFAULT 0,
  `work_mode` int(11) DEFAULT 0,
  `hr_contact` varchar(100) DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Framework Table';

--
-- Dumping data for table `career`
--

INSERT INTO `career` (`career_id`, `job_title`, `job_description`, `posts`, `status`, `salary`, `location`, `sequence_no`, `created_date`, `created_by`, `edited_date`, `edited_by`, `job_type`, `work_mode`, `hr_contact`) VALUES
(1, 'Chairman', 'in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)', 1, 1, 1, 'Bilaspur Chhattisgarh', 1, '2021-11-24 17:10:36', 1, '2021-11-24 17:10:36', NULL, 1, 1, 'gd@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `cms`
--

CREATE TABLE `cms` (
  `cms_id` int(11) NOT NULL,
  `page_name` varchar(100) DEFAULT NULL,
  `page_title` mediumtext DEFAULT NULL,
  `page_content` mediumtext DEFAULT NULL,
  `created_date` datetime NOT NULL,
  `edited_date` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `edited_by` datetime DEFAULT NULL,
  `meta_keywords` mediumtext DEFAULT NULL,
  `meta_description` mediumtext DEFAULT NULL,
  `meta_robots` varchar(100) NOT NULL DEFAULT 'index,follow',
  `sequence_no` int(11) NOT NULL DEFAULT 1,
  `menu` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Framework Table';

--
-- Dumping data for table `cms`
--

INSERT INTO `cms` (`cms_id`, `page_name`, `page_title`, `page_content`, `created_date`, `edited_date`, `created_by`, `edited_by`, `meta_keywords`, `meta_description`, `meta_robots`, `sequence_no`, `menu`) VALUES
(2, 'index', 'WELCOME TO SONKAR COLLEGE', '<p class=\"card-text\">Sonkar College is one of the prestigious institute for education located at Mungeli, Chhattisgarh. It was established in 2015. Sonkar College is managed by Revti Devi Sonkar Education and Charitable Society.</p>\r\n\r\n<p class=\"card-text\">According to Santulal Sonkar head of the college, sports and extracurricular activities are as important as education. We are offering many facilities for students overall growth like sports, hostel facility, industrial visit, T.V room etc.</p>', '2017-12-01 19:16:43', '2022-06-02 12:10:07', 1, '0000-00-00 00:00:00', 'SONKAR COLLEGE', 'SONKAR COLLEGE', 'index,follow', 3, 'home'),
(25, 'gallery', 'Gallery', '', '2018-04-24 14:17:37', '2021-11-24 11:31:34', 1, '0000-00-00 00:00:00', 'Trimurty Public School,CBSE School, Best CBSE School In Bilaspur,Best CBSE School In Chhattishgarh', 'Trimurty Public School,CBSE School, Best CBSE School In Bilaspur,Best CBSE School In Chhattishgarh', 'index,follow', 26, 'gallery'),
(26, 'contact', 'Contact Us', '', '2018-04-24 14:19:50', '2021-08-10 16:14:42', 1, '0000-00-00 00:00:00', 'Trimurty Public School,CBSE School, Best CBSE School In Bilaspur,Best CBSE School In Chhattishgarh', 'Trimurty Public School,CBSE School, Best CBSE School In Bilaspur,Best CBSE School In Chhattishgarh', 'index,follow', 27, 'contact'),
(27, 'about', 'About Sonkar College', '<div class=\"row\">\r\n<div class=\"col-md-5 col-sm-12\">\r\n<div class=\"about-img\"><img alt=\"college images\" class=\"img-fluid mb-2\" src=\"https://theme.swspl.net/sonkarcollege.com-new/assets/images/college-img.jpg\"></div>\r\n</div>\r\n\r\n<div class=\"col-md-7 col-sm-12\">\r\n<p class=\"card-text\">Sonkar College is one of the prestigious institute for education located at Mungeli, Chhattisgarh. It was established in 2015. Sonkar College is managed by Revti Devi Sonkar Education and Charitable Society.</p>\r\n\r\n<p class=\"card-text\">According to Santulal Sonkar head of the college, sports and extracurricular activities are as important as education. We are offering many facilities for students overall growth like sports, hostel facility, industrial visit, T.V room etc.</p>\r\n</div>\r\n</div>', '2019-12-05 11:42:10', '2022-06-02 12:10:19', 1, '0000-00-00 00:00:00', 'SONKAR COLLEGE', 'SONKAR COLLEGE', 'index,follow', 28, 'home'),
(28, 'vision', 'Vision &  Mission', '<div class=\"section-title\">\r\n<h5>Our Mission</h5>\r\n</div>\r\n\r\n<div class=\"about-cont vision-mission\">\r\n<ul class=\"mt-3\">\r\n <li>\r\n <h6>To provide holistic education that enhance cognitive ,emotional,physical,social and spiritual learning.</h6>\r\n </li>\r\n <li>\r\n <h6>To make students academically competence ,innovative creative ,socially aware and independent.</h6>\r\n </li>\r\n <li>\r\n <h6>To help students to broaden their vision and deepen their roots by equipping them with our unique methodology which incubate appreciation towards our culture and values.</h6>\r\n </li>\r\n <li>\r\n <h6>To provide students with modern tools as well as moral and spiritual strength needed to face challenges posed by the modern world ,thereby enabling them to evolve into socially conscious global citizens.</h6>\r\n </li>\r\n</ul>\r\n</div>\r\n\r\n<div class=\"section-title\">\r\n<h5>Our Vision</h5>\r\n</div>\r\n\r\n<div class=\"about-cont vision-mission\">\r\n<ul class=\"mt-3\">\r\n <li>\r\n <h6>To establish SansKar Group of school across the country ,which will be centers of excellence in knowledge and research across the various fields.</h6>\r\n </li>\r\n <li>\r\n <h6>At these institution ,students will be trained to achieve highest levels of professional and personal ability to serve humanity.</h6>\r\n </li>\r\n</ul>\r\n</div>', '2019-12-05 11:45:06', '2022-06-02 12:11:14', 1, '0000-00-00 00:00:00', 'Sanskar', 'Sanskar', 'index,follow', 29, 'home'),
(29, 'director-desk', 'Director\'s Desk', '<div class=\"col-md-8 col-12\">\r\n<div class=\"teacher_details_info\">\r\n<div class=\"about_teacher\">\r\n<p><strong>WELCOME TO Trimurty Public School</strong></p>\r\n\r\n<p><strong>My Dear Parents & Students,</strong></p>\r\n\r\n<p><strong>Trimurty Public School</strong> is established with an objective to provide quality education to the children of underprivileged section of the society ensuring integrated developement.<br>\r\n<br>\r\nWe are pledge to enable them to discover their latent talents by providing a wide range of academic, social cultural and recreational activities.<br>\r\n<br>\r\nWe would help them to develop intellectual toughness and strong character thereby moulding them to be leaders of tomorrow. Our Aim is to provide a high standard platform to educate themselves in the best available educational environment and facilities.</p>\r\n</div>\r\n\r\n<div class=\"name_designation pull-right\">\r\n<h4>Shri. RAJESH TRIVEDI</h4>\r\n\r\n<h6 class=\"text-right\">(Director)</h6>\r\n</div>\r\n</div>\r\n</div>', '2019-12-05 11:51:56', '2021-11-24 12:00:52', 1, '0000-00-00 00:00:00', 'Trimurty Public School,CBSE School, Best CBSE School In Bilaspur,Best CBSE School In Chhattishgarh', 'Trimurty Public School,CBSE School, Best CBSE School In Bilaspur,Best CBSE School In Chhattishgarh', 'index,follow', 30, 'about'),
(30, 'nri-corner', 'NRI Corner', '<img alt=\"\" class=\"img-responsive nri-img pull-left\" src=\"images/nri.jpg\">\r\n<p>In the present economic scenario, as an NRI there couldn’t be a better time to invest in a home or office space in India. But before making the final decision, there are some big questions to be addressed; who is the developer, what are his credentials, what about the property, location, amenities, payment terms, legalities and so on. Trimurty Public School offers rewarding investment options in Bilaspur.</p>\r\n\r\n<p>Our award-winning projects are thoughtfully and creatively designed at prime locations to suit your stature. We whole-heartedly invite you to invest in the finest homes and the smartest corporate avenues. We will be too happy to discuss your plans and help you arrive at the right investment decisions.</p>\r\n\r\n<p>Each project bears a stamp of thoughtful solutions and highest quality. The company has partnered with specialists from India and abroad working on various aspects including design, landscaping, engineering and structural strength of each of the developments. It further employs most advanced construction equipments and technologies that guarantees on time delivery like advanced jump start technology, advanced logistics and vertical transportation systems, wind tunnel engineering as also international quality construction grade steel and the highest strength M70 and M80 concrete.</p>', '2019-12-05 12:04:58', '2021-08-10 16:06:49', 1, '0000-00-00 00:00:00', 'Trimurty Public School,CBSE School, Best CBSE School In Bilaspur,Best CBSE School In Chhattishgarh', 'Trimurty Public School,CBSE School, Best CBSE School In Bilaspur,Best CBSE School In Chhattishgarh', 'Trimurty Public School,CBSE School, Best CBSE School In Bilaspur,Best CBSE School In Chhattishgarh', 31, 'nri'),
(31, 'press-release', 'Press Release', '', '2019-12-05 12:07:57', '2021-08-10 16:06:15', 1, '0000-00-00 00:00:00', 'Trimurty Public School,CBSE School, Best CBSE School In Bilaspur,Best CBSE School In Chhattishgarh', 'Trimurty Public School,CBSE School, Best CBSE School In Bilaspur,Best CBSE School In Chhattishgarh', 'Trimurty Public School,CBSE School, Best CBSE School In Bilaspur,Best CBSE School In Chhattishgarh', 32, 'press-release'),
(32, 'feedback', 'Feedback', '', '2019-12-05 12:08:32', '2021-08-10 16:06:04', 1, '0000-00-00 00:00:00', 'Trimurty Public School,CBSE School, Best CBSE School In Bilaspur,Best CBSE School In Chhattishgarh', 'Trimurty Public School,CBSE School, Best CBSE School In Bilaspur,Best CBSE School In Chhattishgarh', 'Trimurty Public School,CBSE School, Best CBSE School In Bilaspur,Best CBSE School In Chhattishgarh', 33, 'feedback'),
(33, 'enquiry', 'Enquiry', '', '2019-12-05 12:08:59', '2021-08-10 16:05:52', 1, '0000-00-00 00:00:00', 'Trimurty Public School,CBSE School, Best CBSE School In Bilaspur,Best CBSE School In Chhattishgarh', 'Trimurty Public School,CBSE School, Best CBSE School In Bilaspur,Best CBSE School In Chhattishgarh', 'Trimurty Public School,CBSE School, Best CBSE School In Bilaspur,Best CBSE School In Chhattishgarh', 34, 'enquiry'),
(34, 'privacy-policy', 'Privacy Policy', '<p>Your privacy is very important to us. Accordingly, we have developed this Policy in order for you to understand how we collect, use, communicate and disclose and make use of personal information. The following outlines our privacy policy.</p>\r\n\r\n<p>Before or at the time of collecting personal information, we will identify the purposes for which information is being collected. We will collect and use of personal information solely with the objective of fulfilling those purposes specified by us and for other compatible purposes, unless we obtain the consent of the individual concerned or as required by law.</p>\r\n\r\n<p>We will only retain personal information as long as necessary for the fulfillment of those purposes.</p>\r\n\r\n<p>We will collect personal information by lawful and fair means and, where appropriate, with the knowledge or consent of the individual concerned.</p>\r\n\r\n<p>Personal data should be relevant to the purposes for which it is to be used, and, to the extent necessary for those purposes, should be accurate, complete, and up-to-date.</p>\r\n\r\n<p>We will protect personal information by reasonable security safeguards against loss or theft, as well as unauthorized access, disclosure, copying, use or modification.</p>\r\n\r\n<p>We will make readily available to customers information about our policies and practices relating to the management of personal information.</p>\r\n\r\n<p>We are committed to conducting our business in accordance with these principles in order to ensure that the confidentiality of personal information is protected and maintained. Any claim relating to Trimurty Public School&#39; web site shall be governed by the laws of the State of Chhattisgarh without regard to its conflict of law provisions.</p>\r\n\r\n<p>General Terms and Conditions applicable to Use of a Web Site.</p>', '2019-12-05 12:18:29', '2021-08-10 16:05:06', 1, '0000-00-00 00:00:00', 'Trimurty Public School,CBSE School, Best CBSE School In Bilaspur,Best CBSE School In Chhattishgarh', 'Trimurty Public School,CBSE School, Best CBSE School In Bilaspur,Best CBSE School In Chhattishgarh', 'Trimurty Public School,CBSE School, Best CBSE School In Bilaspur,Best CBSE School In Chhattishgarh', 35, 'privacy'),
(35, 'disclaimer', 'Disclaimer & Limitations', '<h3 class=\"green\">Disclaimer :</h3>\r\n\r\n<p>The materials on Trimurty Public School&#39; website are provided \"as is\". Trimurty Public School makes no warranties, expressed or implied, and hereby disclaims and negates all other warranties, including without limitation, implied warranties or conditions of merchantability, fitness for a particular purpose, or non-infringement of intellectual property or other violation of rights. Further, Homes Planner does not warrant or make any representations concerning the accuracy, likely results, or reliability of the use of the materials on its Internet website or otherwise relating to such materials or on any sites linked to this site.</p>\r\n\r\n<h3 class=\"green\">Limitations :</h3>\r\n\r\n<p>In no event shall Trimurty Public School or its suppliers be liable for any damages (including, without limitation, damages for loss of data or profit, or due to business interruption,) arising out of the use or inability to use the materials on Trimurty Public Schoolr&#39; Internet site, even if Homes Planner or a Homes Planner authorized representative has been notified orally or in writing of the possibility of such damage. Because some jurisdictions do not allow limitations on implied warranties, or limitations of liability for consequential or incidental damages, these limitations may not apply to you.</p>\r\n\r\n<p>The materials appearing on Trimurty Public School&#39; website could include technical, typographical, or photographic errors. Trimurty Public School does not warrant that any of the materials on its website are accurate, complete, or current. Trimurty Public School may make changes to the materials contained on its website at any time without notice. Trimurty Public School does not, however, make any commitment to update the materials.</p>\r\n\r\n<p>Trimurty Public School has not reviewed all of the sites linked to its Internet website and is not responsible for the contents of any such linked site. The inclusion of any link does not imply endorsement by Homes Planner of the site. Use of any such linked website is at the user&#39;s own risk.</p>', '2019-12-05 12:21:50', '2021-08-10 16:03:41', 1, '0000-00-00 00:00:00', 'Trimurty Public School,CBSE School, Best CBSE School In Bilaspur,Best CBSE School In Chhattishgarh', 'Trimurty Public School,CBSE School, Best CBSE School In Bilaspur,Best CBSE School In Chhattishgarh', 'Trimurty Public School,CBSE School, Best CBSE School In Bilaspur,Best CBSE School In Chhattishgarh', 36, 'disclaimer'),
(36, 'terms-conditions', 'Terms & Conditions', '<p>By accessing this website, you are agreeing to be bound by these website Terms and Conditions of Use, all applicable laws and regulations, and agree that you are responsible for compliance with any applicable local laws. If you do not agree with any of these terms, you are prohibited from using or accessing this site. The materials contained in this website are protected by applicable copyright and trade mark law.</p>\r\n\r\n<p>Permission is granted to temporarily download one copy of the materials (information or software) on Trimurty Public School&#39; website for personal, non-commercial transitory viewing only. This is the grant of a license, not a transfer of title, and under this license you may not:</p>\r\n\r\n<p>Modify or copy the materials.</p>\r\n\r\n<p>Use the materials for any commercial purpose, or for any public display (commercial or non-commercial).</p>\r\n\r\n<p>Attempt to decompile or reverse engineer any software contained on Trimurty Public School&#39; website.</p>\r\n\r\n<p>Remove any copyright or other proprietary notations from the materials; or</p>\r\n\r\n<p>Transfer the materials to another person or \"mirror\" the materials on any other server.</p>\r\n\r\n<p>This license shall automatically terminate if you violate any of these restrictions and may be terminated by Trimurty Public School at any time. Upon terminating your viewing of these materials or upon the termination of this license, you must destroy any downloaded materials in your possession whether in electronic or printed format.</p>\r\n\r\n<p>Trimurty Public School may revise these terms of use for its website at any time without notice. By using this website you are agreeing to be bound by the then current version of these Terms and Conditions of Use.</p>', '2019-12-05 12:22:55', '2021-08-10 16:03:27', 1, '0000-00-00 00:00:00', 'Trimurty Public School,CBSE School, Best CBSE School In Bilaspur,Best CBSE School In Chhattishgarh', 'Trimurty Public School,CBSE School, Best CBSE School In Bilaspur,Best CBSE School In Chhattishgarh', 'Trimurty Public School,CBSE School, Best CBSE School In Bilaspur,Best CBSE School In Chhattishgarh', 37, 'terms-conditions'),
(37, 'career', 'Career', '', '2021-07-17 05:58:18', '2021-08-10 16:02:57', 1, '0000-00-00 00:00:00', 'Trimurty Public School,CBSE School, Best CBSE School In Bilaspur,Best CBSE School In Chhattishgarh', 'Trimurty Public School,CBSE School, Best CBSE School In Bilaspur,Best CBSE School In Chhattishgarh', 'Trimurty Public School,CBSE School, Best CBSE School In Bilaspur,Best CBSE School In Chhattishgarh', 38, 'career'),
(38, 'reviews', 'Reviews', '', '2021-07-17 06:08:17', '2021-08-05 11:44:26', 1, '0000-00-00 00:00:00', 'Trimurty Public School,CBSE School, Best CBSE School In Bilaspur,Best CBSE School In Chhattishgarh', 'Trimurty Public School,CBSE School, Best CBSE School In Bilaspur,Best CBSE School In Chhattishgarh', 'Trimurty Public School,CBSE School, Best CBSE School In Bilaspur,Best CBSE School In Chhattishgarh', 39, 'reviews'),
(39, 'managing-director-desk', 'Managing Director\'s Desk', '<div class=\"col-md-8 col-12\">\r\n<div class=\"teacher_details_info\">\r\n<div class=\"about_teacher\">\r\n<p><strong>WELCOME TO Trimurty Public School</strong></p>\r\n\r\n<p><strong>My Dear Parents & Students,</strong></p>\r\n\r\n<p><strong>Trimurty Public School</strong> is established with an objective to provide quality education to the children of underprivileged section of the society ensuring integrated developement.<br>\r\n<br>\r\nWe are pledge to enable them to discover their latent talents by providing a wide range of academic, social cultural and recreational activities.<br>\r\n<br>\r\nWe would help them to develop intellectual toughness and strong character thereby moulding them to be leaders of tomorrow. Our Aim is to provide a high standard platform to educate themselves in the best available educational environment and facilities.</p>\r\n</div>\r\n\r\n<div class=\"name_designation pull-right\">\r\n<h4>Shri. RAJESH TRIVEDI</h4>\r\n\r\n<h6 class=\"text-right\">(Director)</h6>\r\n</div>\r\n</div>\r\n</div>', '2021-08-10 15:55:56', '2021-08-10 16:02:42', 1, '0000-00-00 00:00:00', 'Trimurty Public School,CBSE School, Best CBSE School In Bilaspur,Best CBSE School In Chhattishgarh', 'Trimurty Public School,CBSE School, Best CBSE School In Bilaspur,Best CBSE School In Chhattishgarh', 'Trimurty Public School,CBSE School, Best CBSE School In Bilaspur,Best CBSE School In Chhattishgarh', 1, 'about'),
(40, 'founder-desk', 'Founder Desk', '<div class=\"col-md-8 col-12\">\r\n<div class=\"teacher_details_info\">\r\n<div class=\"about_teacher\">\r\n<p><strong>WELCOME TO Trimurty Public School</strong></p>\r\n\r\n<p><strong>My Dear Parents & Students,</strong></p>\r\n\r\n<p><strong>Trimurty Public School</strong> is established with an objective to provide quality education to the children of underprivileged section of the society ensuring integrated developement.<br>\r\n<br>\r\nWe are pledge to enable them to discover their latent talents by providing a wide range of academic, social cultural and recreational activities.<br>\r\n<br>\r\nWe would help them to develop intellectual toughness and strong character thereby moulding them to be leaders of tomorrow. Our Aim is to provide a high standard platform to educate themselves in the best available educational environment and facilities.</p>\r\n</div>\r\n\r\n<div class=\"name_designation pull-right\">\r\n<h4>Shri. RAJESH TRIVEDI</h4>\r\n\r\n<h6 class=\"text-right\">(Director)</h6>\r\n</div>\r\n</div>\r\n</div>', '2021-08-10 15:59:57', '2021-08-10 16:17:47', 1, '0000-00-00 00:00:00', 'Trimurty Public School,CBSE School, Best CBSE School In Bilaspur,Best CBSE School In Chhattishgarh', 'Trimurty Public School,CBSE School, Best CBSE School In Bilaspur,Best CBSE School In Chhattishgarh', 'Trimurty Public School,CBSE School, Best CBSE School In Bilaspur,Best CBSE School In Chhattishgarh', 1, 'about'),
(41, 'principal-desk', 'Principal Desk', '<div class=\"col-md-8 col-12\">\r\n<div class=\"teacher_details_info\">\r\n<div class=\"about_teacher\">\r\n<p><strong>WELCOME TO Trimurty Public School</strong></p>\r\n\r\n<p><strong>My Dear Parents & Students,</strong></p>\r\n\r\n<p><strong>Trimurty Public School</strong> is established with an objective to provide quality education to the children of underprivileged section of the society ensuring integrated developement.<br>\r\n<br>\r\nWe are pledge to enable them to discover their latent talents by providing a wide range of academic, social cultural and recreational activities.<br>\r\n<br>\r\nWe would help them to develop intellectual toughness and strong character thereby moulding them to be leaders of tomorrow. Our Aim is to provide a high standard platform to educate themselves in the best available educational environment and facilities.</p>\r\n</div>\r\n\r\n<div class=\"name_designation pull-right\">\r\n<h4>Shri. RAJESH TRIVEDI</h4>\r\n\r\n<h6 class=\"text-right\">(Director)</h6>\r\n</div>\r\n</div>\r\n</div>', '2021-08-10 16:00:28', '2021-08-10 16:17:25', 1, '0000-00-00 00:00:00', 'Trimurty Public School,CBSE School, Best CBSE School In Bilaspur,Best CBSE School In Chhattishgarh', 'Trimurty Public School,CBSE School, Best CBSE School In Bilaspur,Best CBSE School In Chhattishgarh', 'index,follow', 1, 'about'),
(42, 'curriculum', 'Curriculum', '<h3>MATHS GROUP (XI & XII)</h3>\r\n\r\n<h6>1.   ENGLISH</h6>\r\n\r\n<h6>2.   PHYSICS</h6>\r\n\r\n<h6>3.   CHEMISTRY</h6>\r\n\r\n<h6>4.   MATHEMATICS</h6>\r\n\r\n<h6>5.   HINDI / COMPUTER SCIENCE(I.P)</h6>\r\n<br>\r\n<h3>BIOLOGY GROUP (XI & XII)</h3>\r\n\r\n<h6>1.   ENGLISH</h6>\r\n\r\n<h6>2.   PHYSICS</h6>\r\n\r\n<h6>3.   CHEMISTRY</h6>\r\n\r\n<h6>4.   MATHEMATICS</h6>\r\n\r\n<h6>5.   HINDI / COMPUTER SCIENCE(I.P)</h6>\r\n<br>\r\n<h3>COMMERCE GROUP (XI & XII)</h3>\r\n\r\n<h6>1.   ENGLISH</h6>\r\n\r\n<h6>2.   ECONOMICS</h6>\r\n\r\n<h6>3.   BUSINESS STUDIES</h6>\r\n\r\n<h6>4.   ACCOUNTS</h6>\r\n\r\n<h6>5.   HINDI / COMPUTER SCIENCE(I.P)</h6>', '2021-08-10 16:01:37', '2021-08-10 16:18:57', 1, '0000-00-00 00:00:00', 'Trimurty Public School,CBSE School, Best CBSE School In Bilaspur,Best CBSE School In Chhattishgarh', 'Trimurty Public School,CBSE School, Best CBSE School In Bilaspur,Best CBSE School In Chhattishgarh', 'Trimurty Public School,CBSE School, Best CBSE School In Bilaspur,Best CBSE School In Chhattishgarh', 1, 'academics'),
(43, 'rules-regulations', 'Rules Regulations', '<ul class=\"styled-list-one\">\r\n <li>No leave is granted without the orders of parents and their applications submitted to school with reasonable grounds.</li>\r\n <li>Regular absence without leave or unexplained reasons of absence for more than 10 consecutive working days makes the student liable to have their names struck off from the rolls. Re-admission will only be given on payment of fresh admission fee, without any authorities, discretion.</li>\r\n <li>A student whose name has been struck off for absence without leave and who has been habitually late or persistently careless or indiscipline may not be re-admitted in the school.</li>\r\n <li>The student coming after serious sickness or infectious or contagious disease must bring the fitness certificate by a Registered/Authorized Doctor to legalize the school for allowing attendance.</li>\r\n <li>Parents have to give notice for withdrawal of their ward otherwise one month’s fees in lieu of notice will be charged.</li>\r\n <li>The students have to fill up the form of T.C. for their withdrawal and submit before 11 April in the new session; otherwise the fee will be charged of the remaining months, they submit of application form. Those who have submitted the application for withdrawal before 11 April of the session and have failed to take the T.C. for any reason they will be given T.C. without charge of fees up to any month of the session because one student has been admitted in his place.</li>\r\n</ul>', '2021-08-10 16:08:30', '2021-08-10 16:23:32', 1, '0000-00-00 00:00:00', 'Trimurty Public School,CBSE School, Best CBSE School In Bilaspur,Best CBSE School In Chhattishgarh', 'Trimurty Public School,CBSE School, Best CBSE School In Bilaspur,Best CBSE School In Chhattishgarh', 'Trimurty Public School,CBSE School, Best CBSE School In Bilaspur,Best CBSE School In Chhattishgarh', 1, 'academics'),
(45, 'admission-procedure', 'Admission Procedure', '', '2021-08-10 16:10:21', '2021-08-10 16:10:21', 1, NULL, 'Trimurty Public School,CBSE School, Best CBSE School In Bilaspur,Best CBSE School In Chhattishgarh', 'Trimurty Public School,CBSE School, Best CBSE School In Bilaspur,Best CBSE School In Chhattishgarh', 'index,follow', 1, 'academics'),
(46, 'fee-structure', 'Fee Structure', '', '2021-08-10 16:11:24', '2021-08-10 16:11:24', 1, NULL, 'Trimurty Public School,CBSE School, Best CBSE School In Bilaspur,Best CBSE School In Chhattishgarh', 'Trimurty Public School,CBSE School, Best CBSE School In Bilaspur,Best CBSE School In Chhattishgarh', 'index,follow', 1, 'academics'),
(47, 'co-scholastic-areas', 'Co Scholastic Areas', '<div class=\"col-12\">\r\n<div class=\"about_us_text\">\r\n<p>For practical life and behavioral projection of personality the following skills are assessed and graded:-</p>\r\n<img alt=\"\" class=\"img-responsive center-block\" src=\"http://carebsp.co.in/assets-site/images/areas-of-skills.png\">\r\n<p>The above qualities can be assessed by the student&#39;s day behavioural culture. The above skills reflect the behaviour of individual student being observed by teacher. The grading will also be given accordingly dependent on student&#39;s practiced ability and dexterity. Debate, Extempore, Seminar, Science, Rangoli, Computer, Quiz programming, Essay Writing, Elocution, Guest lecture, Mono Acting are the field of assessment.</p>\r\n\r\n<p>Skill is ability to improve something well to very well. This virtue improves the quality of work day by day. This teaches us-\"There is no best which can not be bettered”. A man with skill keeps improving to reach the height of glory and becomes a man of history by creating something new. Our children must be encouraged their skill and improve them.</p>\r\n</div>\r\n</div>', '2021-08-10 16:12:14', '2021-08-10 16:21:32', 1, '0000-00-00 00:00:00', 'Trimurty Public School,CBSE School, Best CBSE School In Bilaspur,Best CBSE School In Chhattishgarh', 'Trimurty Public School,CBSE School, Best CBSE School In Bilaspur,Best CBSE School In Chhattishgarh', 'index,follow', 1, 'academics'),
(48, 'value-based-education', 'Value Based Education', '<div class=\"col-12\">\r\n<div class=\"about_us_text\">\"<strong>Religions are reality in India. The Indian state is secular but society is religious. There is no contradiction between the two. Religion texts like Quran;  Gita, Upanishads, Bible and Zend-Avesta constitute a huge ocean of universal values. If children learn these in different classes, they will develop respect for religions other than their own.</strong>\".\r\n<div class=\"row\">\r\n<div class=\"col-12 col-md-6\">\r\n<h6 class=\"orange\">A dozen of divine decencies being decorated in C.A.R.E.</h6>\r\n\r\n<ul class=\"styled-list-one\">\r\n <li>Self-Control to attain self-esteem.</li>\r\n <li>Self-Discipline for self-reliance.</li>\r\n <li>Problem solving skills for leadership qualities.</li>\r\n <li>Divine virtues for universality in behaviour.</li>\r\n <li>Moral education to overtake materialism.</li>\r\n <li>Spirituality in occupation for contented career.</li>\r\n <li>Global mind to shape honourable-world citizen.</li>\r\n <li>Value based religions for amiable co-existence.</li>\r\n <li>Enlightened vision to love all the beings.</li>\r\n <li>Selfless support for being kind to all.</li>\r\n <li>Making true to self for being noble to everyone.</li>\r\n <li>Develop tolerance to attain no-violence.</li>\r\n</ul>\r\n</div>\r\n\r\n<div class=\"col-12 col-md-6\">\r\n<h6 class=\"orange\">Fostering seven superiorities of worldly gains by C.A.R.E.</h6>\r\n\r\n<ul class=\"styled-list-one\">\r\n <li>Shaping our student&#39;s creativity into national productivity.</li>\r\n <li>Diverting their outlook towards poverty into dignity of labour.</li>\r\n <li>Changing their bagging & borrowing habits into energetic occupation or employment.</li>\r\n <li>Modifying their day-to-day behaviour into ethical etiquettes.</li>\r\n <li>Promotion their mode of friendship into world-fraternity.</li>\r\n <li>Ameliorating their aggressive outlook into compassionate response.</li>\r\n <li>Reversing their corrupt practices towards their honest commitments.</li>\r\n</ul>\r\n</div>\r\n</div>\r\n \r\n\r\n<h3>VALUE-BASED EDUCATION DEPENDS ON THE FOLLOWING <span>CO-SCHOLASTIC AREAS</span></h3>\r\n<img alt=\"\" class=\"img-responsive center-block\" src=\"http://carebsp.co.in/assets-site/images/value-based-education.png\"><br>\r\n \r\n<div class=\"row\">\r\n<div class=\"col-12 col-md-6\">\r\n<h6 class=\"orange\">The basic requirements of value based education are:</h6>\r\n\r\n<ul class=\"styled-list-one\">\r\n <li>Firm foundation must be laid in early childhood.</li>\r\n <li>Early childhood requires utmost training and care.</li>\r\n <li>Teach your children oneness of God.</li>\r\n <li>Parents to make their children religious in optimistic sense.</li>\r\n <li>The responsibility of children&#39;s education is of whole community.</li>\r\n <li>There must be spiritual approach in moral education.</li>\r\n <li>The education on universal and human values.</li>\r\n <li>Balance between one&#39;s own cultural heritage and universal values.</li>\r\n <li>There must be proper analysis of true education.</li>\r\n <li>Education must help both individual and social growth</li>\r\n <li>Cultivate positive attitude in thinking.</li>\r\n <li>Ability to show respect to elders and equals.</li>\r\n <li>Sense of cooperation to every person.</li>\r\n <li>Ability to judge other&#39;s problems must be inculcated.</li>\r\n <li>Ability to supress negative thinking must be created.</li>\r\n <li>Ability to be sympathetic to all.</li>\r\n <li>Must be ready and volunteer to solve other&#39;s problems.</li>\r\n <li>There must be healthy outburst of emotions.</li>\r\n <li>Broad mindednedd in the need of time is prime importance</li>\r\n <li>Ability to understand all the religions in real sense which leads to humanism.</li>\r\n</ul>\r\n</div>\r\n\r\n<div class=\"col-12 col-md-6\"><img alt=\"Value Based Education\" class=\"img-responsive center-block\" src=\"http://carebsp.co.in/assets-site/images/vbe1.jpg\" xss=removed> <img alt=\"Value Based Education\" class=\"img-responsive center-block\" src=\"http://carebsp.co.in/assets-site/images/vbe2.jpg\"></div>\r\n</div>\r\n\r\n<p>Such education enriches the ethical, moral and human values of the life and enlightens the personality of children to grow as great persons. The following fields of education have to be developed for values based education:-</p>\r\n\r\n<ul class=\"styled-list-one\">\r\n <li>Spiritual discourses</li>\r\n <li>Moral science courses</li>\r\n <li>Classes of yogic exercise</li>\r\n <li>Meditation classes</li>\r\n</ul>\r\n</div>\r\n</div>', '2021-08-10 16:13:00', '2021-08-10 16:24:35', 1, '0000-00-00 00:00:00', 'Trimurty Public School,CBSE School, Best CBSE School In Bilaspur,Best CBSE School In Chhattishgarh', 'Trimurty Public School,CBSE School, Best CBSE School In Bilaspur,Best CBSE School In Chhattishgarh', 'index,follow', 1, 'academics'),
(49, 'celebrations', 'Celebrations', '', '2021-08-10 16:13:25', '2021-08-10 16:13:25', 1, NULL, 'Trimurty Public School,CBSE School, Best CBSE School In Bilaspur,Best CBSE School In Chhattishgarh', 'Trimurty Public School,CBSE School, Best CBSE School In Bilaspur,Best CBSE School In Chhattishgarh', 'index,follow', 1, 'academics'),
(50, 'yoga-mediations', 'Yoga Mediations', '<p><b>YOGA</b> will form the part of training at <b>C.A.R.E.</b></p>\r\n\r\n<div class=\"row\">\r\n<div class=\"col-12 col-md-8\">\r\n<ul class=\"styled-list-one\">\r\n <li>To relax and focus the mind on breathing steadily and rhythmically.</li>\r\n <li>To achieve mental and physical balance in relaxation.</li>\r\n <li>To achieve spiritual peace overcoming the fears, worries, anger and lust.</li>\r\n <li>To improve concentration and registration of mind for the health of gaining education smoothly</li>\r\n <li>Lets you learn as to how to avoid disturbance of mind and thinking hay-wire.</li>\r\n</ul>\r\n\r\n<p><b>\"Meditation</b> is the natural process of withdrawing attention from environmental, physical and mental processes and consciously directing it inward to a chosen focus of attention.</p>\r\n\r\n<div class=\"row\">\r\n<div class=\"col-12 col-md-6\">\r\n<h6 class=\"orange\"><u>Regular Personal Benefits of Meditation</u></h6>\r\n\r\n<ul class=\"styled-list-one\">\r\n <li>Stress reduction.</li>\r\n <li>Strengthening of body&#39;s immune system.</li>\r\n <li>Slowing of biological aging factors.</li>\r\n <li>Cultivate cheerfulness and optimism.</li>\r\n <li>More orderly and scientific thinking.</li>\r\n <li>Regain Natural Breathing Rhythm</li>\r\n</ul>\r\n</div>\r\n\r\n<div class=\"col-12 col-md-6\">\r\n<h6 class=\"orange\"><u>Authentic Spiritual Growth from Meditation</u></h6>\r\n\r\n<ul class=\"styled-list-one\">\r\n <li>Improvement in Power of Concentration.</li>\r\n <li>Feel happy and peaceful.</li>\r\n <li>Mental calmness is experienced.</li>\r\n <li>Makes a man sympathetic organ of society</li>\r\n <li>Increase tremendous tolerance as a lesson to others</li>\r\n <li>Realisation of your true self and your constant relationship with Infinite.</li>\r\n <li>Maintains pleasant Emotional Balance</li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"col-12 col-md-4\"><img alt=\"\" class=\"img-responsive center-block\" src=\"http://carebsp.co.in/assets-site/images/yoga.jpg\"><br>\r\n<br>\r\n<img alt=\"\" class=\"img-responsive center-block\" src=\"http://carebsp.co.in/assets-site/images/yoga1.jpg\"><br>\r\n </div>\r\n \r\n\r\n<p>The students, by and large, choose a nutritious diet to maintain healthy lifestyle. By meditation they adhere to wholesome routines of activities and rest. Spiritually they feel fulfilled and their actions become quite constructive for whole world and all Human Beings. Their smiles spead fragnance of affection in realm of fraternity and reduce stress of repulsion and hatred. This is a social requirement worldwide.</p>\r\n</div>\r\n<br>\r\n ', '2021-08-10 16:13:57', '2021-08-10 16:26:20', 1, '0000-00-00 00:00:00', 'Trimurty Public School,CBSE School, Best CBSE School In Bilaspur,Best CBSE School In Chhattishgarh', 'Trimurty Public School,CBSE School, Best CBSE School In Bilaspur,Best CBSE School In Chhattishgarh', 'index,follow', 1, 'academics'),
(52, 'courses', 'Courses', '', '2021-11-24 12:04:54', '2021-11-24 12:05:12', 1, '0000-00-00 00:00:00', 'Sonkar College', 'Sonkar College', 'index,follow', 1, 'academics'),
(53, 'facility-details', 'Sonkar College', '', '2021-11-24 12:18:31', '2021-11-24 12:18:31', 1, NULL, 'Sonkar College', 'Sonkar College', 'index,follow', 1, 'facilities'),
(54, 'admission-form', 'Admission-Form', '', '2021-11-24 12:42:11', '2021-11-24 12:42:11', 1, NULL, 'Sonkar College', 'Sonkar College', 'index,follow', 1, 'admission'),
(55, 'blog-details', 'Sonkar College', '', '2021-11-24 16:44:51', '2021-11-24 16:44:51', 1, NULL, 'Sonkar College', 'Sonkar College', 'index,follow', 1, 'more'),
(56, 'blog', 'Sonkar College', '', '2021-11-24 16:54:24', '2021-11-24 16:54:24', 1, NULL, 'Sonkar College', 'Sonkar College', 'index,follow', 1, 'more'),
(57, 'career-apply', 'Sonkar College', '', '2021-11-24 17:11:07', '2021-11-24 17:11:07', 1, NULL, 'Sonkar College', 'Sonkar College', 'index,follow', 1, 'more'),
(58, 'downloads', 'Sonkar College', '', '2021-11-24 17:12:52', '2021-11-24 17:12:52', 1, NULL, 'Sonkar College', 'Sonkar College', 'index,follow', 1, 'more'),
(59, 'chairmans-message', 'Chairman\'s Message', '<div class=\"row\">\r\n<div class=\"col-md-5 col-sm-12\">\r\n<div class=\"about-img\"><img alt=\"college images\" class=\"img-fluid mb-2\" src=\"https://theme.swspl.net/sonkarcollege.com-new/assets/images/college-img.jpg\"></div>\r\n</div>\r\n\r\n<div class=\"col-md-7 col-sm-12\">\r\n<p class=\"card-text\">Sonkar College is one of the prestigious institute for education located at Mungeli, Chhattisgarh. It was established in 2015. Sonkar College is managed by Revti Devi Sonkar Education and Charitable Society.</p>\r\n\r\n<p class=\"card-text\">According to Santulal Sonkar head of the college, sports and extracurricular activities are as important as education. We are offering many facilities for students overall growth like sports, hostel facility, industrial visit, T.V room etc.</p>\r\n</div>\r\n</div>', '2021-12-14 03:53:48', '2021-12-14 03:55:29', 1, '0000-00-00 00:00:00', 'Sonkar College', 'Sonkar College', 'index,follow', 1, 'about'),
(60, 'principals-desk', 'Principal\'s Desk', '<div class=\"row\">\r\n<div class=\"col-md-5 col-sm-12\">\r\n<div class=\"about-img\"><img alt=\"college images\" class=\"img-fluid mb-2\" src=\"https://theme.swspl.net/sonkarcollege.com-new/assets/images/college-img.jpg\"></div>\r\n</div>\r\n\r\n<div class=\"col-md-7 col-sm-12\">\r\n<p class=\"card-text\">Sonkar College is one of the prestigious institute for education located at Mungeli, Chhattisgarh. It was established in 2015. Sonkar College is managed by Revti Devi Sonkar Education and Charitable Society.</p>\r\n\r\n<p class=\"card-text\">According to Santulal Sonkar head of the college, sports and extracurricular activities are as important as education. We are offering many facilities for students overall growth like sports, hostel facility, industrial visit, T.V room etc.</p>\r\n</div>\r\n</div>', '2021-12-14 03:55:17', '2021-12-14 03:55:36', 1, '0000-00-00 00:00:00', 'Sonkar College', 'Sonkar College', 'index,follow', 1, 'about'),
(61, 'vission-mission', 'Vision & Mission', '<div class=\"row\">\r\n<div class=\"col-md-12 col-sm-12\">\r\n<p class=\"card-text\">Sonkar College is one of the prestigious institute for education located at Mungeli, Chhattisgarh. It was established in 2015. Sonkar College is managed by Revti Devi Sonkar Education and Charitable Society.</p>\r\n\r\n<p class=\"card-text\">According to Santulal Sonkar head of the college, sports and extracurricular activities are as important as education. We are offering many facilities for students overall growth like sports, hostel facility, industrial visit, T.V room etc.</p>\r\n</div>\r\n</div>', '2021-12-14 04:03:51', '2021-12-14 04:03:51', 1, NULL, 'Sonkar College', 'Sonkar College', 'index,follow', 1, 'about'),
(62, 'faculty', 'Faculty', '<div class=\"col-lg-12\">\r\n<div class=\"section-title\">\r\n<h5>Faculty</h5>\r\n</div>\r\n\r\n<div class=\"about-cont vision-mission\">\r\n<h6 class=\"mt-3\">Coming Soon</h6>\r\n</div>\r\n</div>', '2021-12-14 05:14:02', '2022-06-02 15:33:45', 1, '0000-00-00 00:00:00', 'Sanskar The Gurukul', 'Sanskar The Gurukul', 'index,follow', 1, 'academic'),
(63, 'notification', 'Notifications', '', '2021-12-14 10:45:41', '2021-12-14 10:45:41', 1, NULL, 'Sonkar College', 'Sonkar College', 'index,follow', 1, ''),
(64, 'academic-calendar', 'Academic-Calendar', '', '2021-12-14 11:18:14', '2021-12-14 11:18:14', 1, NULL, 'Sonkar College', 'Sonkar College', 'index,follow', 1, ''),
(65, 'admission-notification', 'Admission Notification', '', '2021-12-15 01:55:07', '2021-12-15 01:55:07', 1, NULL, 'Sonkar College', 'Sonkar College', 'index,follow', 1, ''),
(66, 'sports-department', 'Sports Department', '', '2021-12-15 02:25:39', '2021-12-15 02:25:39', 1, NULL, 'Sonkar College', 'Sonkar College', 'index,follow', 1, ''),
(67, 'alumni', 'Alumni - Sonkar College', '', '2021-12-15 02:47:37', '2021-12-15 02:47:37', 1, NULL, 'Sonkar College', 'Sonkar College', 'index,follow', 1, ''),
(68, 'recognition', 'Recognition', '', '2021-12-15 12:00:02', '2021-12-15 12:00:02', 1, NULL, 'Sonkar College', 'Sonkar College', 'index,follow', 1, ''),
(69, 'admission', 'Admission', '', '2021-12-15 12:24:16', '2021-12-15 12:24:16', 1, NULL, 'Sonkar College', 'Sonkar College', 'index,follow', 1, ''),
(70, 'meritlist', 'Merit List', '', '2021-12-16 01:54:50', '2021-12-16 01:54:50', 1, NULL, 'Sonkar College', 'Sonkar College', 'index,follow', 1, ''),
(71, 'college-ssr', 'College SSR', '', '2021-12-16 02:21:05', '2021-12-16 02:21:05', 1, NULL, 'Sonkar College', 'Sonkar College', 'index,follow', 1, ''),
(72, 'admission-lists', 'Admission Lists', '', '2021-12-16 02:44:11', '2021-12-16 02:44:11', 1, NULL, 'Sonkar College', 'Sonkar College', 'index,follow', 1, ''),
(73, 'download', 'Downloads', '', '2021-12-16 03:12:53', '2021-12-16 03:12:53', 1, NULL, 'Sonkar College', 'Sonkar College', 'index,follow', 1, ''),
(74, 'news', 'News', '', '2021-12-16 03:17:21', '2021-12-16 03:17:21', 1, NULL, 'Sonkar College', 'Sonkar College', 'index,follow', 1, ''),
(75, 'rti', 'RTI', '<div class=\"row\">\r\n<div class=\"col-md-12 col-sm-12\">\r\n<h5 class=\"card-title\">Introduction :</h5>\r\n\r\n<p class=\"card-text\">The Right to Information Act, 2005 has been enacted by the Parliament and has come into force from 15 June, 2005. It extends to the whole of India except the State of Jammu and Kashmir. An Act to provide for setting out the practical regime of right to information for citizens to secure access to information under the control of public authorities, in order to promote transparency and accountability in the working of every public authority. All Universities and Colleges established by law made by Parliament or by State Legislature or by notification by the appropriate Government or owned, controlled or substantially financed directly or indirectly by funds provided by the Government shall come within the meaning of a Public Authority under this Act. As per Government of Chhattisgarh and UGC guidelines Sonkar College implements the Right to Information Act, 2005.</p>\r\n \r\n\r\n<h5 class=\"card-title\">Application Procedure:</h5>\r\n\r\n<ol class=\"mb-5\">\r\n <li>The application may be typed or neatly hand-written, wherein mention atop “application under RTI act 2005″.</li>\r\n <li>The application may preferably be in writing though an e-mail is accepted as a mode as per law.</li>\r\n <li>There is no such prescribed proforma for application.</li>\r\n <li>Applications will not be discarded on the ground that they were not in the prescribed proforma.</li>\r\n <li>The application should be in Hindi or English.</li>\r\n <li>Application is simply address to the “Public Information Officer“ (Don’t mention the name).</li>\r\n <li>Application should be in a simple and easy language.</li>\r\n <li>Mention your question point wise, avoid asking vague questions, ask direct questions.</li>\r\n <li>Avoid using too technical terms or legal terminology.</li>\r\n <li>Attach Government RTI Fee in the form of IPO/DD/MO etc., as applicable with the RTI Application.</li>\r\n <li>Undersign the application and do not forget to take a photocopy for your future references.</li>\r\n <li>At the end of the application make a declaration that you are an Indian citizen.</li>\r\n</ol>\r\n</div>\r\n</div>', '2021-12-16 07:49:16', '2021-12-16 07:51:15', 1, '0000-00-00 00:00:00', 'Sonkar College', 'Sonkar College', 'index,follow', 1, ''),
(76, 'events-notification', 'Events', '', '2021-12-16 10:51:59', '2021-12-16 10:51:59', 1, NULL, 'Sonkar College', 'Sonkar College', 'index,follow', 1, ''),
(77, 'feedback', 'Feedback', '', '2021-12-16 10:52:20', '2021-12-16 10:52:20', 1, NULL, 'Sonkar College', 'Sonkar College', 'index,follow', 1, ''),
(78, 'important-links', 'Impotant Links', '', '2021-12-17 05:34:52', '2021-12-17 05:34:52', 1, NULL, 'Sonkar College', 'Sonkar College', 'index,follow', 1, ''),
(79, 'committees', 'Committee', '', '2021-12-17 05:44:06', '2021-12-17 05:44:06', 1, NULL, 'Sonkar College', 'Sonkar College', 'index,follow', 1, ''),
(80, 'facilities', 'Facilties', '', '2021-12-28 15:54:04', '2021-12-28 15:54:23', 1, '0000-00-00 00:00:00', 'Sonkar College', 'Sonkar College', 'index,follow', 1, 'facilities'),
(81, 'story', 'Our Story', 'Coming Soon', '2022-06-02 12:18:07', '2022-06-02 12:18:07', 1, NULL, 'Sanskar The Gurukul', 'Sanskar The Gurukul', 'index,follow', 1, 'home'),
(82, 'objective', 'Objectives', '<div class=\"col-lg-12\">\r\n<div class=\"section-title mt-20\">\r\n<h5>AIMS and Objectives</h5>\r\n</div>\r\n\r\n<div class=\"about-cont vision-mission\">\r\n<ul class=\"mt-3\">\r\n <li>\r\n <h6>Our motto is to inculcate and instill deep roots of ‘Values and Culture’ among the Students.</h6>\r\n </li>\r\n <li>\r\n <h6>To facilitate the students to speak English which is considered to be the Global language.</h6>\r\n </li>\r\n <li>\r\n <h6>To prepare the students to live their lives in a harmonious and successful way by imparting to them the vision of life.</h6>\r\n </li>\r\n <li>\r\n <h6>To instill the students the spirit of service in all walks of life so that they become responsible citizens of the future.</h6>\r\n </li>\r\n <li>\r\n <h6>To make the students capable of facing challenges of life efficiently.</h6>\r\n </li>\r\n <li>\r\n <h6>To provide a conducive environment to learn and live the right values and appreciate the glory of our culture.</h6>\r\n </li>\r\n <li>\r\n <h6>To enhance self-esteem and the ability to value each person’s own worth through a happy, caring, enriching and secure environment.</h6>\r\n </li>\r\n <li>\r\n <h6>To develop the natural curiosity and to foster positive attitudes to learning.</h6>\r\n </li>\r\n <li>\r\n <h6>To promote a health conscious environment.</h6>\r\n </li>\r\n <li>\r\n <h6>To propagate patriotic, social and ethical values for a responsible citizenship.</h6>\r\n </li>\r\n <li>\r\n <h6>To provide a broad, balanced and differentiated curriculum for all children in keeping with the requirements of the Education Reform Order.</h6>\r\n </li>\r\n</ul>\r\n</div>\r\n</div>', '2022-06-02 12:19:32', '2022-06-02 12:19:53', 1, '0000-00-00 00:00:00', 'Sanskar The Gurukul', 'Sanskar The Gurukul', 'index,follow', 1, 'home'),
(83, 'history', 'Our History', '<div class=\"col-lg-12\">\r\n<div class=\"section-title\">\r\n<h5>History</h5>\r\n</div>\r\n\r\n<div class=\"about-cont\">\r\n<p class=\"mb-3\">Sanskar the Gurukul international school was founded in 2005 in Nagarnaha,jagadalpur from nursery to primary then after it established from nursery to class 12th Sanskar The Gurukul internation day-cum boarding school in chidaipaar,jagadalpur. Late keshav Ram ji jain native was Nabarangpur having being inspired from the teaching methodology of Gurukul towards the building of snaskar within students, he founded the Sanskar Gurukul school to continue the building sanskar within students through education and till yet the school is being run by his family is well known as a Sanskar family. Mr.Ratanlal jain chairman of the school, Director Mr.Amit Kumar jain,co-director Mrs.Nutan jain,president Mrs.Bimla Debi jain.</p>\r\n</div>\r\n</div>', '2022-06-02 12:21:03', '2022-06-02 12:21:10', 1, '0000-00-00 00:00:00', 'Sanskar The Gurukul', 'Sanskar The Gurukul', 'index,follow', 1, 'home'),
(84, 'branches', 'STGIS Branches', '<div class=\"col-lg-12\">\r\n<div class=\"section-title\">\r\n<h5>Branches</h5>\r\n</div>\r\n\r\n<div class=\"about-cont\">\r\n<h6 class=\"mt-3\">Coming Soon</h6>\r\n</div>\r\n</div>', '2022-06-02 12:22:40', '2022-06-02 12:22:40', 1, NULL, 'Sanskar The Gurukul', 'Sanskar The Gurukul', 'index,follow', 1, 'home'),
(85, 'quality-policy', 'Quality-Policy', '<div class=\"col-lg-12\">\r\n<div class=\"section-title\">\r\n<h5>Quality Policy</h5>\r\n</div>\r\n\r\n<div class=\"about-cont\">\r\n<p class=\"mb-3\">Sanskar The Gurukul international school especially takes care of the quality policy in education, health, accommodation, fooding and sports etc.Teachers have been employed from across the India like Assam, west Bengal,odisha. Special hostel facilities for boys and girls are available with special provision in providing free of cost tuttion,counseling,medical service etc. Special care is given to maintain hygienic in school and hostel, indoor and outdoor along with students involved activities are conducted to build the potential of students to promote their skills and ability for their betterment. Qualified students in Olympiad sports are promoted to participate in national sports competition.</p>\r\n</div>\r\n</div>', '2022-06-02 12:24:04', '2022-06-02 12:24:04', 1, NULL, 'Sanskar The Gurukul', 'Sanskar The Gurukul', 'index,follow', 1, 'home'),
(86, 'school-management', 'School-Management', 'Coming Soon', '2022-06-02 12:25:09', '2022-06-02 12:25:09', 1, NULL, 'Sanskar The Gurukul', 'Sanskar The Gurukul', 'index,follow', 1, 'home'),
(87, 'mandatory-public', 'Mandatory-Public-Info', '<div class=\"col-lg-12\">\r\n<div class=\"section-title\">\r\n<h5>Mandatory Public</h5>\r\n</div>\r\n\r\n<div class=\"about-cont vision-mission\">\r\n<h6 class=\"mt-3\">Coming Soon</h6>\r\n</div>\r\n</div>', '2022-06-02 12:26:28', '2022-06-02 12:26:28', 1, NULL, 'Sanskar The Gurukul', 'Sanskar The Gurukul', 'index,follow', 1, 'home'),
(88, 'discloser', 'Discloser', '<div class=\"col-lg-12\">\r\n<div class=\"section-title\">\r\n<h5>Discloser</h5>\r\n</div>\r\n\r\n<div class=\"about-cont vision-mission\">\r\n<h6 class=\"mt-3\">Coming Soon</h6>\r\n</div>\r\n</div>', '2022-06-02 12:27:24', '2022-06-02 12:27:24', 1, NULL, 'Sanskar The Gurukul', 'Sanskar The Gurukul', 'index,follow', 1, 'home');
INSERT INTO `cms` (`cms_id`, `page_name`, `page_title`, `page_content`, `created_date`, `edited_date`, `created_by`, `edited_by`, `meta_keywords`, `meta_description`, `meta_robots`, `sequence_no`, `menu`) VALUES
(89, 'chairman-message', 'Chairman`s Message', '<div class=\"col-lg-12\">\r\n<div class=\"section-title\">\r\n<h5>Chairman Message</h5>\r\n</div>\r\n\r\n<div class=\"about-cont vision-mission\">\r\n<p>Sanskar the Gurukul uniquely aims at providing its students top quality educational standard and impeccable guidance throughout their academic life and beyond .the institute envision to gift its students a goal oriented and transparent system to learn and grow .the inculcation of ancient Indian culture into our ecosystem, which is then clubbed with modern technology is what gives our institute the balance.</p>\r\n\r\n<p>Our belief lies in seva,sadhana,and satang.Here learning is an individual process for each students along with enhancing values such as love ,compassion, friendship, sharing and caring. Regular curriculums presented to the students in a stress free and joyful manner ,making learning a fun process.</p>\r\n</div>\r\n</div>', '2022-06-02 12:29:05', '2022-06-02 12:29:05', 1, NULL, 'Sanskar The Gurukul', 'Sanskar The Gurukul', 'index,follow', 1, 'message'),
(90, 'vice-chairman', 'Vice Chairman`s Message', '<div class=\"col-lg-12\">\r\n                <div class=\"section-title\">\r\n                    <h5>Vice Chairman</h5>\r\n                </div> \r\n                <div class=\"about-cont vision-mission\">\r\n                    <h6 class=\"mt-3\">Coming Soon</h6>\r\n                </div>\r\n            </div>', '2022-06-02 12:36:00', '2022-06-02 12:36:00', 1, NULL, 'Sanskar The Gurukul', 'Sanskar The Gurukul', 'index,follow', 1, 'message'),
(91, 'managing-director', 'Managing-Director', '<div class=\"col-lg-12\">\r\n<div class=\"section-title\">\r\n<h5>Message from the director desk</h5>\r\n</div>\r\n\r\n<div class=\"about-cont vision-mission\">\r\n<p>Our mission of sanskar group is to provide holistic education based on the three pillar of SEVA,SADHANA,SATSANG.our school are on epitome of knowledge centers, where each child is nurtured towards academic excellence and developing moral values in their everyday life. It is through the teachings of my gurus and forefathers that I learnt that the five core aspects of education emergences out of the five elements of nature. Our teaching system is accordance with this principal. The concept we follow is as robuts as mother Earth .we strive to maintain an attitude which mirror of the flow of water. Our readiness to accept information like an air around us .what drive us forward is the fire within us to learn more.the freedom we inculcate in the mind of our students is like the space that is pervading. Through instilling ancient Indian spirit values.our students learn to become socially responsible and global citizen.</p>\r\n</div>\r\n</div>', '2022-06-02 12:38:47', '2022-06-02 12:38:47', 1, NULL, 'Sanskar The Gurukul', 'Sanskar The Gurukul', 'index,follow', 1, 'message'),
(92, 'principal-message', 'Principal\'s-Message', '<div class=\"col-lg-12\">\r\n<div class=\"section-title\">\r\n<h5>Principal Message</h5>\r\n</div>\r\n\r\n<div class=\"about-cont vision-mission\">\r\n<h6 class=\"mt-3\">Coming Soon</h6>\r\n</div>\r\n</div>', '2022-06-02 12:43:40', '2022-06-02 12:43:40', 1, NULL, 'Sanskar The Gurukul', 'Sanskar The Gurukul', 'index,follow', 1, 'message'),
(93, 'teachers', 'Teachers', '', '2022-06-02 12:46:11', '2022-06-02 12:46:11', 1, NULL, 'Sanskar The Gurukul', 'Sanskar The Gurukul', 'index,follow', 1, 'messa'),
(94, 'procedure', 'Procedure', '<div class=\"col-lg-12\">\r\n<div class=\"section-title\">\r\n<h5>Procedure</h5>\r\n</div>\r\n\r\n<div class=\"about-cont\">\r\n<p class=\"mb-3\">Interested students can go the internet to our website and apply for the admission online or visit to school for admission offline or reserve their admission seats through mail or phone call to the principal or to our ofiice.STGIS also provide the scholarship provision to the students qualified in scholarship would take an admission with 100% discounts. Admission is open for all and will be based on entrance exam test and interview. The age of admission into nursery is 3years,children above 3 to 4 year are admitted to L.K.G usually students will not admitted in std.X and XII.those who are desire to enroll for the first time in nursery or K.G classes are requested to produced valid documents to verify the correct date of birth. Students seeking admission from class 1 onwards are required to produce T.C and progress card from the school he/she admitted last year. Fresh students should submit Xerox copy of birth certificate. Parents also will be interviewed for their understanding of the type of education offered in thr school and to see their ability to co-operate in it. Every child for admission must be introduced in person to the principal by the parents or guardians.</p>\r\n</div>\r\n</div>', '2022-06-02 12:57:11', '2022-06-02 12:57:11', 1, NULL, 'Sanskar The Gurukul', 'Sanskar The Gurukul', 'index,follow', 1, 'admission'),
(95, 'interview', 'Interview/Test', '<div class=\"col-lg-12\">\r\n<div class=\"section-title\">\r\n<h5>Interview/Test</h5>\r\n</div>\r\n\r\n<div class=\"about-cont vision-mission\">\r\n<h6 class=\"mt-3\">Coming Soon</h6>\r\n</div>\r\n</div>', '2022-06-02 14:35:24', '2022-06-02 14:35:24', 1, NULL, 'Sanskar The Gurukul', 'Sanskar The Gurukul', 'index,follow', 1, 'admission'),
(96, 'exam-promotion', 'Examination Promotion', '<div class=\"col-lg-12\">\r\n<div class=\"section-title\">\r\n<h5>Examination Promotion</h5>\r\n</div>\r\n\r\n<div class=\"about-cont vision-mission\">\r\n<ul class=\"ml-3 mt-3\">\r\n <li class=\"mb-2\">Any malpractice in answering the examination paper, even if discovered later, is punishable with the cancellation for the whole examination and may even mean expulsion from the school.</li>\r\n <li class=\"mb-2\">Students absents during the examination for any reason will not be reexamined or they should produce valid reason for their absence.</li>\r\n <li class=\"mb-2\">A minmum 85% attendance is required for promotion</li>\r\n <li class=\"mb-2\">In the regard of promotion or examination the decision of the principal is final</li>\r\n</ul>\r\n\r\n<p>Well performed students in annual exams shall be promoted to higher class with high appreciation.</p>\r\n</div>\r\n</div>', '2022-06-02 14:36:56', '2022-06-02 14:36:56', 1, NULL, 'Sanskar The Gurukul', 'Sanskar The Gurukul', 'index,follow', 1, 'admission'),
(97, 'policy', 'Policy', '<div class=\"col-lg-12\">\r\n<div class=\"section-title\">\r\n<h5>Policy</h5>\r\n</div>\r\n\r\n<div class=\"about-cont\">\r\n<p class=\"mb-3\">STIGS has its discipline over the admission fee structure it keeps and furnishes all the details of the fee to the students and parents for the clear maintenance of students’ academicals fee records. Students qualified in scholarship test will be received free admission provision along with 20% discount in tuition fee.</p>\r\n</div>\r\n</div>', '2022-06-02 14:38:00', '2022-06-02 14:38:00', 1, NULL, 'Sanskar The Gurukul', 'Sanskar The Gurukul', 'index,follow', 1, 'admission'),
(98, 'guidance', 'Guidance for parents', '<div class=\"col-lg-12\">\r\n<div class=\"section-title\">\r\n<h5>Guidance for parents</h5>\r\n</div>\r\n\r\n<div class=\"about-cont vision-mission\">\r\n<ul class=\"mt-3\">\r\n <li>\r\n <h6>It is the fact that without the co operation of the parents the work of educaton for thechildents is not possible.parents are requestd to operative with the schooland discipline of the school for the smooth function and betterment of the manner both at home and school.</h6>\r\n </li>\r\n <li>\r\n <h6>The parents can meet to he principal during working days in between 11:30 to 12:30pm physically by special appointment.</h6>\r\n </li>\r\n <li>\r\n <h6>After each examination parents are invited to meet the principal,clas teacher and the head of the institution. Notice will be given to the parents to visit school for the discussion on the progressive of students and other related matters.</h6>\r\n </li>\r\n <li>\r\n <h6>Mode of payment: students can pay their monthly fee through the online mode using QR scan , googly pay or offline.</h6>\r\n </li>\r\n <li>\r\n <h6>Fee can be paid in installment o or or before the date is given in the fees card.</h6>\r\n </li>\r\n <li>\r\n <h6>A penalty of Rs.10 will be paid per day of delayed payment.</h6>\r\n </li>\r\n <li>\r\n <h6>Students are not allowed to appear fro the examination unless all dues are paid.</h6>\r\n </li>\r\n <li>\r\n <h6>There will be an upward revisionof 10-15 of fees per annum.</h6>\r\n </li>\r\n</ul>\r\n</div>\r\n</div>', '2022-06-02 14:39:29', '2022-06-02 14:39:29', 1, NULL, 'Sanskar The Gurukul', 'Sanskar The Gurukul', 'index,follow', 1, 'admission'),
(99, 'payment', 'Mode Of Payment', '<div class=\"col-lg-12\">\r\n<div class=\"section-title\">\r\n<h5>Mode Of Payment</h5>\r\n</div>\r\n\r\n<div class=\"about-cont vision-mission\">\r\n<h6 class=\"mt-3\">Coming Soon</h6>\r\n</div>\r\n</div>', '2022-06-02 14:40:35', '2022-06-02 14:40:35', 1, NULL, 'Sanskar The Gurukul', 'Sanskar The Gurukul', 'index,follow', 1, 'admission'),
(100, 'school-uniform', 'School Uniform', '<div class=\"col-lg-7\">\r\n<div class=\"section-title\">\r\n<h5>School Uniform</h5>\r\n</div>\r\n\r\n<div class=\"about-cont vision-mission\">\r\n<ul class=\"mt-3\">\r\n <li>\r\n <h6>Students should wear the prescribed uniform on all working days.</h6>\r\n </li>\r\n <li>\r\n <h6><b>Boys :</b> Grey sorts/pants, whitish check shirt, half sleeves ,grey tie, black belt ,leather shoes and grey socks.</h6>\r\n </li>\r\n <li>\r\n <h6><b>Girls :</b> Grey tuic,wheatish check shirt. grey tie black leather ,shoes, grey socks and black ribbon.</h6>\r\n </li>\r\n <li>\r\n <h6><b>Sports uniform :</b> grey pants and house colored t shirt</h6>\r\n </li>\r\n <li>\r\n <h6><b>Girls :</b> Grey skirt and house colored t shirt ,black ribbon.</h6>\r\n </li>\r\n <li>\r\n <h6>All should wear black shoes and Grey socks.</h6>\r\n </li>\r\n</ul>\r\n</div>\r\n</div>\r\n\r\n<div class=\"col-lg-5\"><img alt=\"\" class=\"img-responsive img-fluid\" src=\"http://localhost/spitech/dynamic/sanskarthegurukul.in/theme/sanskarthegurukul_latest/assets/images/school-uniform.jpg\"></div>', '2022-06-02 14:44:03', '2022-06-02 14:48:27', 1, '0000-00-00 00:00:00', 'Sanskar The Gurukul', 'Sanskar The Gurukul', 'index,follow', 1, 'admission'),
(101, 'withdrawal', 'Withdrawal', '<div class=\"col-lg-12\">\r\n<div class=\"section-title\">\r\n<h5>Withdrawal</h5>\r\n</div>\r\n\r\n<div class=\"about-cont vision-mission\">\r\n<p>If any students would like to withdraw him/herself from the school the Transfer cerficate will b issued after the payment of all the school dues. The principal has the right to refuse continuation of studies to any pupils whose conduct or attendance is found unsatisfactory.</p>\r\n</div>\r\n</div>', '2022-06-02 14:49:30', '2022-06-02 14:49:30', 1, NULL, 'Sanskar The Gurukul', 'Sanskar The Gurukul', 'index,follow', 1, 'admission'),
(102, 'school-rules', 'School rules and regularities', '<div class=\"col-lg-12\">\r\n<div class=\"section-title\">\r\n<h5>School rules and regularities</h5>\r\n</div>\r\n\r\n<div class=\"about-cont vision-mission\">\r\n<ul class=\"mt-3\">\r\n <li>\r\n <h6>Students shall arrive to the school at least 10 minute before waning bell rang for the assembly.</h6>\r\n </li>\r\n <li>\r\n <h6>The school gate will be closed after 1st bell rang.</h6>\r\n </li>\r\n <li>\r\n <h6>Students with improper dressed will be excluded from the class room.</h6>\r\n </li>\r\n <li>\r\n <h6>Students are required to attend with prescribed dressed /uniform</h6>\r\n </li>\r\n <li>\r\n <h6>No students will leave the school with out the permission of the principal .</h6>\r\n </li>\r\n <li>\r\n <h6>Speaking English is must in all time in the school.</h6>\r\n </li>\r\n <li>\r\n <h6>Students should present on the re opening day without fail.</h6>\r\n </li>\r\n <li>\r\n <h6>Irregelural attendance ,habitual idleness, disobedience and conducting injurious to the moral tone of school are reasons for dismissal of a student.</h6>\r\n </li>\r\n <li>\r\n <h6>No students is permitted to drive the motor vechle to school without legal license.</h6>\r\n </li>\r\n <li>\r\n <h6>Students must not scribe or scratch or spoil the desk not to write with chalk or pencil on the wall or in any where is t damage school property.</h6>\r\n </li>\r\n <li>\r\n <h6>The school is responsible for the lose of any good belonging to the students .they are not permitted to bring any dangerous articles such as knife,bladges ,gun etc.</h6>\r\n </li>\r\n <li>\r\n <h6>Students of any class who are attending practical classes will be charged general breakage on less costly items of glass water action articles which are used individually by the charges will ve levied separately.</h6>\r\n </li>\r\n</ul>\r\n</div>\r\n</div>', '2022-06-02 14:50:50', '2022-06-02 14:51:10', 1, '0000-00-00 00:00:00', 'Sanskar The Gurukul', 'Sanskar The Gurukul', 'index,follow', 1, 'admission'),
(103, 'parents-corner', 'Parents Corner', '<div class=\"col-lg-12\">\r\n<div class=\"section-title\">\r\n<h5>Parents Corner</h5>\r\n</div>\r\n\r\n<div class=\"about-cont vision-mission\">\r\n<h6 class=\"mt-3\">Coming Soon</h6>\r\n</div>\r\n</div>', '2022-06-02 14:52:33', '2022-06-02 14:52:33', 1, NULL, 'Sanskar The Gurukul', 'Sanskar The Gurukul', 'index,follow', 1, 'admission'),
(104, 'distribution', 'Distribution of course', '<div class=\"col-lg-12\">\r\n<div class=\"section-title\">\r\n<h5>Distribution of course</h5>\r\n</div>\r\n\r\n<div class=\"about-cont vision-mission\">\r\n<p>courses are covered before the term 1 examination is to give the best preparation time and guidance for the student as per the syllabus contains prepared by the school and board.</p>\r\n</div>\r\n</div>', '2022-06-02 15:35:00', '2022-06-02 15:35:25', 1, '0000-00-00 00:00:00', 'Sanskar The Gurukul', 'Sanskar The Gurukul', 'index,follow', 1, 'academic'),
(105, 'syllabus', 'Syllabus', '', '2022-06-02 15:37:41', '2022-06-02 15:37:41', 1, NULL, 'Sanskar The Gurukul', 'Sanskar The Gurukul', 'index,follow', 1, 'academic'),
(106, 'school-calendar', 'School cultural event', '<div class=\"col-lg-12\">\r\n<div class=\"section-title\">\r\n<h5>Cultural Events Calendar for the session 2022-2023</h5>\r\n</div>\r\n\r\n<div class=\"about-cont vision-mission\">\r\n<div class=\"table-responsive mt-3\">\r\n<table align=\"center\" class=\"table-bordered table-striped my-table\" width=\"100%\">\r\n <thead>\r\n  <tr>\r\n   <th>Month</th>\r\n   <th>Date</th>\r\n   <th>Days</th>\r\n   <th>Activities</th>\r\n  </tr>\r\n </thead>\r\n <tbody>\r\n  <tr>\r\n   <td rowspan=\"2\">April</td>\r\n   <td>13/04/2022</td>\r\n   <td>Baisakhi</td>\r\n   <td rowspan=\"2\">Punjabi Traditional attire comp., Bhangra, Gidda , Story telling competition on Baisakhi</td>\r\n  </tr>\r\n  <tr>\r\n   <td>18/04/2022</td>\r\n   <td>Council Election</td>\r\n  </tr>\r\n  <tr>\r\n   <td>June</td>\r\n   <td>21/06/2022</td>\r\n   <td>Yoga Day</td>\r\n   <td>Yoga Asana</td>\r\n  </tr>\r\n  <tr>\r\n   <td rowspan=\"2\">July</td>\r\n   <td>12/07/2022</td>\r\n   <td>Guru Purnima</td>\r\n   <td rowspan=\"2\">Guru Pujan, Essay Writing, Anna daan</td>\r\n  </tr>\r\n  <tr>\r\n   <td>24/07/2022</td>\r\n   <td>Annual Parents Day</td>\r\n  </tr>\r\n  <tr>\r\n   <td rowspan=\"3\">August</td>\r\n   <td rowspan=\"2\">15/08/2022</td>\r\n   <td>Independence day</td>\r\n   <td rowspan=\"2\">Inter - House Debate , Inter - Singing Comp (Solo), & Fancy Dress ( Prep)</td>\r\n  </tr>\r\n  <tr>\r\n   <td>Investiture Ceremony</td>\r\n  </tr>\r\n  <tr>\r\n   <td>17/08/2022</td>\r\n   <td>Janmashtami</td>\r\n   <td>Handi phod, Radha Krishna Fancy Dress competition, & Inter - House Skit competition</td>\r\n  </tr>\r\n  <tr>\r\n   <td rowspan=\"3\">September</td>\r\n   <td>05/09/2022</td>\r\n   <td>Teacher&#39;s Day</td>\r\n   <td>Celebration of Teacher&#39;s Day</td>\r\n  </tr>\r\n  <tr>\r\n   <td>07/09/2022</td>\r\n   <td>Onam</td>\r\n   <td>Making of athapookalam ( Flower Rangoli) & Essay Writing competition</td>\r\n  </tr>\r\n  <tr>\r\n   <td>12/09/2022</td>\r\n   <td>Grand Parents Day</td>\r\n   <td> </td>\r\n  </tr>\r\n  <tr>\r\n   <td rowspan=\"3\">October</td>\r\n   <td>01/10/2022</td>\r\n   <td>Gandhi Jayanti</td>\r\n   <td>Remembering Gandhi by a Skit, Debate, & Showcasing of Gandhian Philosophy</td>\r\n  </tr>\r\n  <tr>\r\n   <td>05/10/2022</td>\r\n   <td>Dussehra</td>\r\n   <td>Ravan Dahan, Garba, Dance & Garba Dress competition</td>\r\n  </tr>\r\n  <tr>\r\n   <td>24/10/2022</td>\r\n   <td>Diwali</td>\r\n   <td>Diya Decoration, Class room Decoration & Rangoli Making</td>\r\n  </tr>\r\n  <tr>\r\n   <td>November</td>\r\n   <td>13/11/2022</td>\r\n   <td>Children&#39;s Day</td>\r\n   <td>Talent show, Ramp walk & Celebration</td>\r\n  </tr>\r\n  <tr>\r\n   <td rowspan=\"2\">December</td>\r\n   <td>19/12/2022 to 21/12/2022</td>\r\n   <td>Annual Sports Week</td>\r\n   <td> </td>\r\n  </tr>\r\n  <tr>\r\n   <td>23/12/2022</td>\r\n   <td>Christmas</td>\r\n   <td>Card Making competition, Carol singing , & Christmas socks Decoration (Prep)</td>\r\n  </tr>\r\n  <tr>\r\n   <td rowspan=\"3\">January</td>\r\n   <td>13/01/2023</td>\r\n   <td>Pongal, Makar Sankranti, Lohri</td>\r\n   <td>Drawing competition & Kite Making</td>\r\n  </tr>\r\n  <tr>\r\n   <td rowspan=\"2\">26/01/2023</td>\r\n   <td>Saraswati Puja Basant Panchmi</td>\r\n   <td>Celebration of Saraswati Puja, Sanskrit shlok competition , & Singing Competition</td>\r\n  </tr>\r\n  <tr>\r\n   <td>Republic Day</td>\r\n   <td>Poem competition , Solo Dance , inter- House Choir Singing & Mono Act</td>\r\n  </tr>\r\n  <tr>\r\n   <td rowspan=\"2\">February</td>\r\n   <td>18/02/2023</td>\r\n   <td>Mahashivratri</td>\r\n   <td>Rudra-abhishek, Havan, & Prasad Sevan</td>\r\n  </tr>\r\n  <tr>\r\n   <td>***</td>\r\n   <td colspan=\"2\">School Annual Day</td>\r\n  </tr>\r\n  <tr>\r\n   <td>March</td>\r\n   <td>08/03/2023</td>\r\n   <td>Holi</td>\r\n   <td>Celebration of Holi</td>\r\n  </tr>\r\n </tbody>\r\n</table>\r\n</div>\r\n</div>\r\n</div>', '2022-06-02 15:39:44', '2022-06-02 15:40:04', 1, '0000-00-00 00:00:00', 'Sanskar The Gurukul', 'Sanskar The Gurukul', 'index,follow', 1, 'academic'),
(107, 'school-timing', 'School Timing', '<div class=\"col-lg-12\">\r\n<div class=\"section-title\">\r\n<h5>School Timing</h5>\r\n</div>\r\n\r\n<div class=\"about-cont vision-mission\">\r\n<p>The school timing here is from 8:15 am to 2.45.students are not allowed to leave the school during the school hour without the permission of principal.during th school time there is a recession timing is from 9:50 to 10:15.</p>\r\n</div>\r\n</div>', '2022-06-02 15:41:56', '2022-06-02 15:41:56', 1, NULL, 'Sanskar The Gurukul', 'Sanskar The Gurukul', 'index,follow', 1, 'academic'),
(108, 'holiday', 'School Holidays List', '<div class=\"col-lg-12\">\r\n<div class=\"section-title\">\r\n<h5>School Holidays List</h5>\r\n</div>\r\n\r\n<div class=\"about-cont vision-mission\">\r\n<div class=\"table-responsive mt-3\">\r\n<table align=\"center\" class=\"table-bordered table-striped my-table\" width=\"100%\">\r\n <thead>\r\n  <tr>\r\n   <th>S.No.</th>\r\n   <th>Month</th>\r\n   <th>Date</th>\r\n   <th>Holiday</th>\r\n  </tr>\r\n </thead>\r\n <tbody>\r\n  <tr>\r\n   <td>01.</td>\r\n   <td rowspan=\"4\">April</td>\r\n   <td>02/04/2022</td>\r\n   <td>Gudi Padwa</td>\r\n  </tr>\r\n  <tr>\r\n   <td>02.</td>\r\n   <td>10/04/2022</td>\r\n   <td>Ram Navami</td>\r\n  </tr>\r\n  <tr>\r\n   <td>03.</td>\r\n   <td>14/04/2022</td>\r\n   <td>Ambedkar Jayanti & Mahavir Jayanti</td>\r\n  </tr>\r\n  <tr>\r\n   <td>04.</td>\r\n   <td>15/04/2022</td>\r\n   <td>Good Friday</td>\r\n  </tr>\r\n  <tr>\r\n   <td>05.</td>\r\n   <td rowspan=\"2\">May</td>\r\n   <td>03/05/2022</td>\r\n   <td>EID-UL-Fitar</td>\r\n  </tr>\r\n  <tr>\r\n   <td>06.</td>\r\n   <td>16/05/2022</td>\r\n   <td>Buddh Purnima</td>\r\n  </tr>\r\n  <tr>\r\n   <td>07.</td>\r\n   <td>July</td>\r\n   <td>10/07/2022</td>\r\n   <td>Bakri-EID</td>\r\n  </tr>\r\n  <tr>\r\n   <td>08.</td>\r\n   <td rowspan=\"5\">August</td>\r\n   <td>09/08/2022</td>\r\n   <td>Muharram</td>\r\n  </tr>\r\n  <tr>\r\n   <td>09.</td>\r\n   <td>12/08/2022</td>\r\n   <td>Raksha Bandhan</td>\r\n  </tr>\r\n  <tr>\r\n   <td>10.</td>\r\n   <td>15/08/2022</td>\r\n   <td>Independence Day</td>\r\n  </tr>\r\n  <tr>\r\n   <td>11.</td>\r\n   <td>19/08/2022</td>\r\n   <td>Krishna Janmashtami</td>\r\n  </tr>\r\n  <tr>\r\n   <td>12.</td>\r\n   <td>31/08/2022</td>\r\n   <td>Ganesh Chaturthi</td>\r\n  </tr>\r\n  <tr>\r\n   <td>13.</td>\r\n   <td>September</td>\r\n   <td>08/09/2022</td>\r\n   <td>Onam</td>\r\n  </tr>\r\n  <tr>\r\n   <td>14.</td>\r\n   <td rowspan=\"6\">October</td>\r\n   <td>02/10/2022</td>\r\n   <td>Gandhi</td>\r\n  </tr>\r\n  <tr>\r\n   <td>15.</td>\r\n   <td>05/10/2022</td>\r\n   <td>Dussehra</td>\r\n  </tr>\r\n  <tr>\r\n   <td>16.</td>\r\n   <td>09/10/2022</td>\r\n   <td>EID-E-Milad</td>\r\n  </tr>\r\n  <tr>\r\n   <td>17.</td>\r\n   <td>24/10/2022</td>\r\n   <td>Deepawali</td>\r\n  </tr>\r\n  <tr>\r\n   <td>18.</td>\r\n   <td>26/10/2022</td>\r\n   <td>Bhai Dooj</td>\r\n  </tr>\r\n  <tr>\r\n   <td>19.</td>\r\n   <td>30/10/2022</td>\r\n   <td>Chhat Puja</td>\r\n  </tr>\r\n  <tr>\r\n   <td>20.</td>\r\n   <td rowspan=\"3\">November</td>\r\n   <td>01/11/2022</td>\r\n   <td>C.G Foundation Day</td>\r\n  </tr>\r\n  <tr>\r\n   <td>21.</td>\r\n   <td>08/11/2022</td>\r\n   <td>Guru Purab</td>\r\n  </tr>\r\n  <tr>\r\n   <td>22.</td>\r\n   <td>14/11/2022</td>\r\n   <td>Children’s Day</td>\r\n  </tr>\r\n  <tr>\r\n   <td>23.</td>\r\n   <td>December</td>\r\n   <td>25/12/2022</td>\r\n   <td>Christmas</td>\r\n  </tr>\r\n  <tr>\r\n   <td>24.</td>\r\n   <td rowspan=\"5\">January</td>\r\n   <td>01/01/2023</td>\r\n   <td>New Year</td>\r\n  </tr>\r\n  <tr>\r\n   <td>25.</td>\r\n   <td>14/01/2023</td>\r\n   <td>Lohri</td>\r\n  </tr>\r\n  <tr>\r\n   <td>26.</td>\r\n   <td>15/01/2023</td>\r\n   <td>Makar Sankranti / Pongal</td>\r\n  </tr>\r\n  <tr>\r\n   <td>27.</td>\r\n   <td>25/01/2023</td>\r\n   <td>Basant Panchami</td>\r\n  </tr>\r\n  <tr>\r\n   <td>28.</td>\r\n   <td>26/01/2023</td>\r\n   <td>Republic Day</td>\r\n  </tr>\r\n  <tr>\r\n   <td>29.</td>\r\n   <td rowspan=\"2\">February</td>\r\n   <td>18/02/2023</td>\r\n   <td>Mahashivratri</td>\r\n  </tr>\r\n  <tr>\r\n   <td>30.</td>\r\n   <td>19/02/2023</td>\r\n   <td>Chhatrpati Shivaji Maharaj Ji Jayanti</td>\r\n  </tr>\r\n  <tr>\r\n   <td>31.</td>\r\n   <td>March</td>\r\n   <td>22/03/2023</td>\r\n   <td>Gudi Padwa / Ugadi</td>\r\n  </tr>\r\n </tbody>\r\n</table>\r\n</div>\r\n</div>\r\n</div>', '2022-06-02 15:43:54', '2022-06-02 15:43:54', 1, NULL, 'Sanskar The Gurukul', 'Sanskar The Gurukul', 'index,follow', 1, 'academic'),
(109, 'book-list', 'Book List', '<div class=\"col-lg-12\">\r\n<div class=\"section-title\">\r\n<h5>Book List</h5>\r\n</div>\r\n\r\n<div class=\"about-cont vision-mission\">\r\n<h6 class=\"mt-3\">Coming Soon</h6>\r\n</div>\r\n</div>', '2022-06-02 15:44:56', '2022-06-02 15:44:56', 1, NULL, 'Sanskar The Gurukul', 'Sanskar The Gurukul', 'index,follow', 1, 'academic'),
(110, 'exam-schedule', 'Examination schedules', '<div class=\"col-lg-12\">\r\n<div class=\"section-title\">\r\n<h5>Examination schedules</h5>\r\n</div>\r\n\r\n<div class=\"about-cont vision-mission\">\r\n<p>STGIS conduct examination as per the well preparation concern of students. It has two terms per year to appear examination term 1 and term 2 for all classes.studens appear in examination term wise secure the high percentage in their respective subjects.</p>\r\n</div>\r\n</div>', '2022-06-02 15:46:09', '2022-06-04 13:39:44', 1, '0000-00-00 00:00:00', 'Sanskar The Gurukul', 'Sanskar The Gurukul', 'index,follow', 1, 'academic'),
(111, 'competitive-exam', 'Competition', '<div class=\"col-lg-12\">\r\n<div class=\"section-title\">\r\n<h5>Competition</h5>\r\n</div>\r\n\r\n<div class=\"about-cont vision-mission\">\r\n<p>STIGS conduct various indoor and outdoor compitition for the students as well as conduct the Olympiad competition to promote the sprots spirit of students.</p>\r\n</div>\r\n</div>', '2022-06-02 15:49:59', '2022-06-02 15:49:59', 1, NULL, 'Sanskar The Gurukul', 'Sanskar The Gurukul', 'index,follow', 1, 'academic'),
(112, 'curricular', 'Co-Curriculum', '<div class=\"col-lg-12\">\r\n<div class=\"section-title\">\r\n<h5>Co-Curriculum</h5>\r\n</div>\r\n\r\n<div class=\"about-cont vision-mission\">\r\n<p>Education in the yearly year is what shapes a child personality. Therefore it is imperatively to lay down the perfect foundation on which future learning can take place. For the process of learning to happen effecianlty ,the child has to be motivated ,intrsted ,enthusiactic and happy.our syllabus was designed keeping this in mind.ourschool follows the scientifically designed LBF learn by fun syllabus.Apart from that regular syllabus based learning students will also be speacially trained for compitative exams such as IIT,JEE,NEET,NDC,CPT and CLAD.</p>\r\n\r\n<p>Our teachers will join the students in providing them remediation classes,which will be held after regular school hours on a daily basis.japanese midbraine activation programe,Abacus,mastermind ,mathematics class,vadic math,calligraphy ,robotic are some of the other intellect driven classes that each students will be a part of. Students from class 1to 10 will also be a part of the exclusive future scientist lab class.Students will also have to take compulsory classes in spoken English andsanskrit.</p>\r\n</div>\r\n</div>', '2022-06-02 15:51:05', '2022-06-02 15:51:05', 1, NULL, 'Sanskar The Gurukul', 'Sanskar The Gurukul', 'index,follow', 1, 'academic'),
(113, 'assembly', 'Assembly', '<div class=\"col-lg-12\">\r\n<div class=\"section-title\">\r\n<h5>Assembly</h5>\r\n</div>\r\n\r\n<div class=\"about-cont vision-mission\">\r\n<p>Students assembly takes place everyday in school to offer prayer and thought of the day along with national ,international news update and national anthem performed by the students before commencing the classes .short mediation is conducted by the school and during the assembly students pledge to keep the moral ,ethics and nationality alive.speacial appreciation is given to the students for his/her best performance and birthday occasion.</p>\r\n</div>\r\n</div>', '2022-06-02 15:55:37', '2022-06-02 15:55:37', 1, NULL, 'Sanskar The Gurukul', 'Sanskar The Gurukul', 'index,follow', 1, 'activity'),
(114, 'celebration', 'Celebration', '<div class=\"col-lg-12\">\r\n<div class=\"section-title\">\r\n<h5>Celebration</h5>\r\n</div>\r\n\r\n<div class=\"about-cont vision-mission\">\r\n<p>STIGS celebrates all the national and international observation days to commemorate the values of the day to motivate students to follow the motto of the day celebrated. School also celebrates its annual anniversary and sports events etc.</p>\r\n</div>\r\n</div>', '2022-06-02 15:56:53', '2022-06-02 15:56:53', 1, NULL, 'Sanskar The Gurukul', 'Sanskar The Gurukul', 'index,follow', 1, 'activity'),
(115, 'club-activity', 'Club activity', '<div class=\"col-lg-12\">\r\n<div class=\"section-title\">\r\n<h5>Club activity</h5>\r\n</div>\r\n\r\n<div class=\"about-cont vision-mission\">\r\n<p>School is also conducted club activities like plantation,redcross ,blood donation etc.</p>\r\n</div>\r\n</div>', '2022-06-02 15:57:55', '2022-06-02 15:57:55', 1, NULL, 'Sanskar The Gurukul', 'Sanskar The Gurukul', 'index,follow', 1, 'activity'),
(116, 'education-trip', 'Educational trip', '<div class=\"col-lg-12\">\r\n                <div class=\"section-title\">\r\n                    <h5>Educational trip</h5>\r\n                </div> \r\n                <div class=\"about-cont vision-mission\">\r\n                    <p>\r\n                        Learning is not only confined into the text books only it also confines with nature and cultura places.every year study tour is taken place in school to provide the exporesure programme to the students fro their externatian knowledge through practical mode .\r\n                    </p>\r\n                </div>\r\n            </div>', '2022-06-02 15:58:58', '2022-06-02 15:58:58', 1, NULL, 'Sanskar The Gurukul', 'Sanskar The Gurukul', 'index,follow', 1, 'activity'),
(117, 'music', 'Music and arts', '<div class=\"col-lg-12\">\r\n<div class=\"section-title\">\r\n<h5>Music and arts</h5>\r\n</div>\r\n\r\n<div class=\"about-cont vision-mission\">\r\n<p>Education is an unexpected learning from the skills in music and arts it cerates the recognisation of the students .keeping that in mind music and arts classes are conducted and highly promoted in school.</p>\r\n</div>\r\n</div>', '2022-06-02 16:00:00', '2022-06-02 16:00:00', 1, NULL, 'Sanskar The Gurukul', 'Sanskar The Gurukul', 'index,follow', 1, 'activity'),
(118, 'collage', 'Collage', '<div class=\"col-lg-12\">\r\n<div class=\"section-title\">\r\n<h5>Collage</h5>\r\n</div>\r\n\r\n<div class=\"about-cont vision-mission\">\r\n<h6 class=\"mt-3\">Coming Soon</h6>\r\n</div>\r\n</div>', '2022-06-02 16:00:59', '2022-06-02 16:00:59', 1, NULL, 'Sanskar The Gurukul', 'Sanskar The Gurukul', 'index,follow', 1, 'activity'),
(119, 'sports-activity', 'Sports activities', '<div class=\"col-lg-12\">\r\n<div class=\"section-title\">\r\n<h5>Sports activities</h5>\r\n</div>\r\n\r\n<div class=\"about-cont vision-mission\">\r\n<p>Basketball ,football, volleyball, tennis, badminton ,cricket,kho ko,kabaddi all type of traditional ,national and international sports activities are conducted and promoted in school for the betterment of students in sports sector.students of te school participate in inter-schools, district state and national level sports event every year.STIGS offers students an opportunities to develop and grow their passion for horse ridding in a co education setting.Students have the opportunity to develop their equine skills and the variety of discipline from beginner ridding .sports training program isorganizes for students to become expert in sports skills.</p>\r\n</div>\r\n</div>', '2022-06-02 16:02:18', '2022-06-02 16:02:18', 1, NULL, 'Sanskar The Gurukul', 'Sanskar The Gurukul', 'index,follow', 1, 'activity'),
(120, 'ncc', 'National cadet corps(NCC)', '<div class=\"col-lg-12\">\r\n<div class=\"section-title\">\r\n<h5>National cadet corps(NCC)</h5>\r\n</div>\r\n\r\n<div class=\"about-cont vision-mission\">\r\n<p>National cadet corps is also functions in school to include students in various nation based activities like training program,social and community development programe ,plantation priminister rally,youth exchange program ,climate justice program ,health camp, adventure based learning program to promote and orient the students with co-curriculum activities etc.</p>\r\n</div>\r\n</div>', '2022-06-02 16:03:12', '2022-06-02 16:03:12', 1, NULL, 'Sanskar The Gurukul', 'Sanskar The Gurukul', 'index,follow', 1, 'activity'),
(121, 'nss', 'National service scheme(NSS)', '<div class=\"col-lg-12\">\r\n<div class=\"section-title\">\r\n<h5>National service scheme(NSS)</h5>\r\n</div>\r\n\r\n<div class=\"about-cont vision-mission\">\r\n<p>National service scheme is also conducted in school to involve and promote the students in social and communal activities like, adopting a village and area to work on need based issues ,survey of the village or area, completion of projects ,tree plantation ,health camp etc.</p>\r\n</div>\r\n</div>', '2022-06-02 16:04:33', '2022-06-02 16:04:33', 1, NULL, 'Sanskar The Gurukul', 'Sanskar The Gurukul', 'index,follow', 1, 'activity'),
(122, 'competition', 'Competition', '<div class=\"col-lg-12\">\r\n<div class=\"section-title\">\r\n<h5>Competition</h5>\r\n</div>\r\n\r\n<div class=\"about-cont vision-mission\">\r\n<p>every year annual competition is taken plea in school to promote the ability and skills of the students .music ,dance ,arts ,literature ,science exhibition all type of competition is conducted to uplift the students in overall perspective.</p>\r\n</div>\r\n</div>', '2022-06-02 16:05:57', '2022-06-02 16:05:57', 1, NULL, 'Sanskar The Gurukul', 'Sanskar The Gurukul', 'index,follow', 1, 'activity'),
(123, 'gym', 'Gym', '<div class=\"col-lg-12\">\r\n<div class=\"section-title\">\r\n<h5>Gym</h5>\r\n</div>\r\n\r\n<div class=\"about-cont vision-mission\">\r\n<p>School provides GYM facilities to hostel students for their good flexibly health management. students desire to do GYM are able utilize the opportunities facilities in free of cost.</p>\r\n</div>\r\n</div>', '2022-06-02 16:07:43', '2022-06-04 13:52:27', 1, '0000-00-00 00:00:00', 'Sanskar The Gurukul', 'Sanskar The Gurukul', 'index,follow', 1, 'activity'),
(124, 'house-functioning', 'House function', '<div class=\"col-lg-12\">\r\n<div class=\"section-title\">\r\n<h5>House function</h5>\r\n</div>\r\n\r\n<div class=\"about-cont vision-mission\">\r\n<p>Helpers of the hostels are provided house requirement on time .cleaning ,washing, and all requirement related to house is provide by the hostel helpers and wardens .</p>\r\n</div>\r\n</div>', '2022-06-02 16:09:34', '2022-06-02 16:09:34', 1, NULL, 'Sanskar The Gurukul', 'Sanskar The Gurukul', 'index,follow', 1, 'activity'),
(125, 'kids-gallery', 'Kids Gallery', '', '2022-06-02 18:28:00', '2022-06-02 18:28:00', 1, NULL, 'Sanskar The Gurukul', 'Sanskar The Gurukul', 'index,follow', 1, 'update'),
(126, 'event-gallery', 'Event Gallery', '', '2022-06-03 13:12:17', '2022-06-03 13:12:17', 1, NULL, 'Sanskar The Gurukul', 'Sanskar The Gurukul', 'index,follow', 1, 'update'),
(127, 'video-gallery', 'Video Gallery', '', '2022-06-03 15:29:11', '2022-06-03 15:29:11', 1, NULL, 'Sanskar The Gurukul', 'Sanskar The Gurukul', 'index,follow', 1, 'update'),
(128, 'tc', 'Transfer-Certificate', '', '2022-06-03 16:33:27', '2022-06-03 16:33:27', 1, NULL, 'Sanskar The Gurukul', 'Sanskar The Gurukul', 'index,follow', 1, 'update'),
(129, 'oppening', 'Career Openings', '', '2022-06-04 12:26:58', '2022-06-04 14:10:16', 1, '0000-00-00 00:00:00', 'Sanskar The Gurukul', 'Sanskar The Gurukul', 'index,follow', 1, 'update');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `post_id` int(11) NOT NULL,
  `content` text NOT NULL,
  `web_user_id` int(11) NOT NULL COMMENT 'pk of web user table',
  `created_date` datetime NOT NULL,
  `edited_date` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `edited_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Framework Table';

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

CREATE TABLE `config` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `value` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Framework Table';

--
-- Dumping data for table `config`
--

INSERT INTO `config` (`id`, `name`, `value`) VALUES
(1, 'site_name', 'Sanskar The Gurukul'),
(2, 'site_url', 'http://aareality.in/'),
(3, 'site_email', 'info@sonkarcollege.com'),
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
(46, 'site_address', 'Sonkar College\r\nRaipur Road, Mungeli, Bilaspur, Chattisgarh-495334, India'),
(47, 'is_multilingual', '0'),
(48, 'is_suspended', '0'),
(49, 'is_underconstruction', '0'),
(50, 'site_theme', 'sanskarthegurukul_latest'),
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
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL,
  `image` text DEFAULT NULL,
  `caption` varchar(300) DEFAULT NULL,
  `duration` varchar(100) NOT NULL,
  `level` varchar(100) NOT NULL,
  `ready_in` varchar(100) DEFAULT NULL,
  `short_description` text DEFAULT NULL,
  `description` text NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `edited_date` datetime NOT NULL,
  `created_date` datetime NOT NULL,
  `sequence_no` int(11) NOT NULL DEFAULT 1,
  `created_by` int(11) DEFAULT NULL,
  `edited_by` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Framework Table';

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `image`, `caption`, `duration`, `level`, `ready_in`, `short_description`, `description`, `status`, `edited_date`, `created_date`, `sequence_no`, `created_by`, `edited_by`) VALUES
(4, 'google-logo-9808.png', 'Vinayaka Netralaya', '', '', NULL, 'Where can I get some?\r\nThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injec', '<h2>Where can I get some?</h2>\r\n\r\n<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure the</p>', '1', '2022-06-04 15:14:53', '2022-06-01 18:22:43', 1, 1, '0000-00-00 00:00:00'),
(7, '6.jpg', 'Welcome to Shree Mould', '', '', NULL, 'Where can I get some?\r\nThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injec', '<h2>Where can I get some?</h2>\r\n\r\n<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure the</p>', '1', '2022-06-01 18:24:49', '2022-06-01 18:24:49', 1, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `download`
--

CREATE TABLE `download` (
  `download_id` int(11) NOT NULL,
  `attachment` mediumtext DEFAULT NULL,
  `title` varchar(300) DEFAULT NULL,
  `short_description` mediumtext DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '0=Inactive,1=Active',
  `edited_date` datetime NOT NULL,
  `created_date` datetime NOT NULL,
  `sequence_no` int(11) NOT NULL DEFAULT 1,
  `created_by` int(11) DEFAULT NULL,
  `edited_by` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Framework Table';

--
-- Dumping data for table `download`
--

INSERT INTO `download` (`download_id`, `attachment`, `title`, `short_description`, `status`, `edited_date`, `created_date`, `sequence_no`, `created_by`, `edited_by`) VALUES
(1, 'CMS1.pdf', 'New Time Schedule', NULL, 1, '2021-12-14 10:25:28', '2021-11-24 14:42:38', 1, 1, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `enquiry_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `email` varchar(300) NOT NULL,
  `purpose` varchar(200) NOT NULL,
  `subject` varchar(200) DEFAULT NULL,
  `message` mediumtext NOT NULL,
  `created_date` datetime DEFAULT NULL,
  `edited_date` datetime DEFAULT NULL,
  `sequence_no` int(11) DEFAULT 1,
  `created_by` int(11) NOT NULL,
  `edited_by` datetime DEFAULT NULL,
  `service_name` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Framework Table';

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`enquiry_id`, `name`, `mobile`, `email`, `purpose`, `subject`, `message`, `created_date`, `edited_date`, `sequence_no`, `created_by`, `edited_by`, `service_name`) VALUES
(6, 'rahul.soni@spitech.in', '7878787878', 'rahul.soni@spitech.in', '', NULL, 'hii ji', '2021-12-14 07:33:48', NULL, 1, 0, NULL, NULL),
(7, 'Rahul', '7878787878', 'rahul.soni@spitech.in', '', NULL, 'hey', '2021-12-17 05:18:43', NULL, 1, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(11) NOT NULL,
  `attachment` mediumtext DEFAULT NULL,
  `title` varchar(300) DEFAULT NULL,
  `short_description` mediumtext DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '0=Inactive,1=Active',
  `edited_date` datetime NOT NULL,
  `created_date` datetime NOT NULL,
  `sequence_no` int(11) NOT NULL DEFAULT 1,
  `created_by` int(11) DEFAULT NULL,
  `edited_by` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Framework Table';

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `attachment`, `title`, `short_description`, `status`, `edited_date`, `created_date`, `sequence_no`, `created_by`, `edited_by`) VALUES
(1, 'CMS1.pdf', 'Annual Function 2021', NULL, 1, '2021-12-16 11:14:48', '2021-12-16 11:14:32', 1, 1, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `event_gallery`
--

CREATE TABLE `event_gallery` (
  `gallery_id` int(11) NOT NULL,
  `title` varchar(300) DEFAULT NULL,
  `sequence_no` int(11) DEFAULT NULL,
  `created_date` date DEFAULT NULL,
  `status` int(11) NOT NULL,
  `edited_date` date DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `edited_by` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Framework Table';

--
-- Dumping data for table `event_gallery`
--

INSERT INTO `event_gallery` (`gallery_id`, `title`, `sequence_no`, `created_date`, `status`, `edited_date`, `created_by`, `edited_by`) VALUES
(1, 'Event 1', NULL, '2022-06-03', 0, '2022-06-03', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `event_gallery_image`
--

CREATE TABLE `event_gallery_image` (
  `image_id` int(11) NOT NULL,
  `gallery_id` int(11) NOT NULL,
  `image` mediumtext NOT NULL,
  `sequence_no` int(11) DEFAULT NULL,
  `created_date` date DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `edited_by` datetime DEFAULT NULL,
  `edited_date` date DEFAULT NULL,
  `title` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Framework Table';

--
-- Dumping data for table `event_gallery_image`
--

INSERT INTO `event_gallery_image` (`image_id`, `gallery_id`, `image`, `sequence_no`, `created_date`, `created_by`, `edited_by`, `edited_date`, `title`) VALUES
(1, 1, 'google-logo-9808.png', NULL, '2022-06-03', 1, NULL, '2022-06-03', 'erff'),
(6, 1, '6.jpg', NULL, '2022-06-04', 1, NULL, '2022-06-04', 'uiop'),
(7, 1, 'netflix-logo-png-2616.png', NULL, '2022-06-04', 1, NULL, '2022-06-04', 'df');

-- --------------------------------------------------------

--
-- Table structure for table `facility`
--

CREATE TABLE `facility` (
  `facility_id` int(11) NOT NULL,
  `title` text DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `short_description` text NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL,
  `created_date` datetime NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `edited_by` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Framework Table';

--
-- Dumping data for table `facility`
--

INSERT INTO `facility` (`facility_id`, `title`, `image`, `description`, `short_description`, `edited_date`, `created_date`, `created_by`, `edited_by`) VALUES
(2, 'Interactive Classes', 'bg_31.jpg', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).<br>\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).<br>\r\n<br>\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem', '2021-11-24 12:26:59', '2021-11-24 12:21:12', 1, 1),
(3, 'Institutional Training', 'bg_5.jpg', 'adable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lo\r\n\r\nadable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lo', 'adable content of a page when looking at its layout. The point of using Lorem Ip', '2021-11-24 12:23:48', '2021-11-24 12:23:48', 1, 0),
(4, 'Practical Knowledge', 'person_4.jpg', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).<br>\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 'It is a long established fact that a reader will be distracted by the readable c', '2022-06-02 15:16:22', '2021-11-24 12:36:07', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `faculty_id` int(11) NOT NULL,
  `thumbnail` text DEFAULT NULL,
  `faculty_name` varchar(200) DEFAULT NULL,
  `designation` varchar(200) DEFAULT NULL,
  `qualification` varchar(200) DEFAULT NULL,
  `department` varchar(100) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `email` varchar(200) NOT NULL,
  `edited_date` datetime NOT NULL,
  `created_date` datetime NOT NULL,
  `sequence_no` int(11) NOT NULL DEFAULT 1,
  `created_by` int(11) DEFAULT NULL,
  `edited_by` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Framework Table';

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`faculty_id`, `thumbnail`, `faculty_name`, `designation`, `qualification`, `department`, `mobile`, `email`, `edited_date`, `created_date`, `sequence_no`, `created_by`, `edited_by`) VALUES
(2, 'netflix-logo-png-2616.png', 'Miss Merry', 'English Teacher', 'phd english', 'Litrature', '7878787878', 'rahul.soni@spitech.in', '2022-06-04 15:00:38', '2021-12-14 05:58:05', 1, 1, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `message` text NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `email` varchar(150) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '0=Inactive,1=Active',
  `edited_date` datetime NOT NULL,
  `created_date` datetime NOT NULL,
  `sequence_no` int(11) NOT NULL DEFAULT 1,
  `created_by` int(11) DEFAULT NULL,
  `edited_by` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Framework Table';

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `name`, `message`, `mobile`, `email`, `status`, `edited_date`, `created_date`, `sequence_no`, `created_by`, `edited_by`) VALUES
(1, 'Rahul', 'Hey', '6789056789', 'contact@spitech.co.in', 1, '0000-00-00 00:00:00', '2021-12-17 05:30:51', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `gallery_id` int(11) NOT NULL,
  `title` varchar(300) DEFAULT NULL,
  `sequence_no` int(11) DEFAULT NULL,
  `created_date` date DEFAULT NULL,
  `status` int(11) NOT NULL,
  `edited_date` date DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `edited_by` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Framework Table';

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`gallery_id`, `title`, `sequence_no`, `created_date`, `status`, `edited_date`, `created_by`, `edited_by`) VALUES
(5, 'Campus', NULL, '2021-12-17', 0, '2021-12-17', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `gallery_image`
--

CREATE TABLE `gallery_image` (
  `image_id` int(11) NOT NULL,
  `gallery_id` int(11) NOT NULL,
  `image` mediumtext NOT NULL,
  `sequence_no` int(11) DEFAULT NULL,
  `created_date` date DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `edited_by` datetime DEFAULT NULL,
  `edited_date` date DEFAULT NULL,
  `title` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Framework Table';

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

CREATE TABLE `job_application` (
  `application_id` int(11) NOT NULL,
  `career_id` int(11) DEFAULT NULL,
  `name` varchar(250) DEFAULT NULL,
  `mobile` varchar(100) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `resume` mediumtext DEFAULT NULL,
  `created_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Framework Table';

--
-- Dumping data for table `job_application`
--

INSERT INTO `job_application` (`application_id`, `career_id`, `name`, `mobile`, `email`, `resume`, `created_date`) VALUES
(1, 1, 'sita ram', '6789056789', 'contact@spitech.co.in', 'CMS.pdf', '2021-11-24 05:12:06'),
(2, 1, 'sita ram', '6789056789', 'contact@spitech.co.in', 'CMS1.pdf', '2021-12-17 05:32:32');

-- --------------------------------------------------------

--
-- Table structure for table `label`
--

CREATE TABLE `label` (
  `label_id` int(11) NOT NULL,
  `label` varchar(200) NOT NULL,
  `created_date` datetime DEFAULT NULL,
  `edited_date` datetime DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `edited_by` datetime DEFAULT NULL,
  `sequence_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Framework Table';

--
-- Dumping data for table `label`
--

INSERT INTO `label` (`label_id`, `label`, `created_date`, `edited_date`, `created_by`, `edited_by`, `sequence_no`) VALUES
(1, 'Image Caption', NULL, NULL, 0, NULL, 0),
(2, 'Manage', NULL, NULL, 0, NULL, 0),
(3, 'Status', NULL, NULL, 0, NULL, 0),
(4, 'Active', NULL, NULL, 0, NULL, 0),
(5, 'Inactive', NULL, NULL, 0, NULL, 0),
(6, 'Cancel', NULL, NULL, 0, NULL, 0),
(7, 'Save', NULL, NULL, 0, NULL, 0),
(8, 'Short Description', NULL, NULL, 0, NULL, 0),
(9, 'SN', NULL, NULL, 0, NULL, 0),
(10, 'Action', NULL, NULL, 0, NULL, 0),
(11, 'Search By Caption', NULL, NULL, 0, NULL, 0),
(12, 'Search Here', NULL, NULL, 0, NULL, 0),
(13, 'No Records Found', NULL, NULL, 0, NULL, 0),
(14, 'CMS saved successfully', NULL, NULL, 0, NULL, 0),
(15, 'Page Name', NULL, NULL, 0, NULL, 0),
(16, 'Page Title', NULL, NULL, 0, NULL, 0),
(17, 'Meta Keywords', NULL, NULL, 0, NULL, 0),
(18, 'Search By Page Title', NULL, NULL, 0, NULL, 0),
(19, 'Property', NULL, NULL, 0, NULL, 0),
(20, 'Property Name', NULL, NULL, 0, NULL, 0),
(21, 'Click on image to browse image', NULL, NULL, 0, NULL, 0),
(22, 'Select Property', NULL, NULL, 0, NULL, 0),
(23, 'No. of Room', NULL, NULL, 0, NULL, 0),
(24, 'Listing', NULL, NULL, 0, NULL, 0),
(25, 'Rooms', NULL, NULL, 0, NULL, 0),
(26, 'Floors', NULL, NULL, 0, NULL, 0),
(27, 'Open', NULL, NULL, 0, NULL, 0),
(53, 'Booked', NULL, NULL, 0, NULL, 0),
(54, 'Maintenance', NULL, NULL, 0, NULL, 0),
(55, 'Room Type', NULL, NULL, 0, NULL, 0),
(56, 'Deluxe', NULL, NULL, 0, NULL, 0),
(57, 'Super Deluxe', NULL, NULL, 0, NULL, 0),
(58, 'Premium Deluxe', NULL, NULL, 0, NULL, 0),
(59, 'Extra Person', NULL, NULL, 0, NULL, 0),
(60, 'Adult', NULL, NULL, 0, NULL, 0),
(61, 'Child', NULL, NULL, 0, NULL, 0),
(62, 'Rate', NULL, NULL, 0, NULL, 0),
(63, 'Search By Room Type or Proper Name', NULL, NULL, 0, NULL, 0),
(64, 'Select Room Type', NULL, NULL, 0, NULL, 0),
(65, 'Normal', NULL, NULL, 0, NULL, 0),
(66, 'Page Content', NULL, NULL, 0, NULL, 0),
(67, 'Long Description', NULL, NULL, 0, NULL, 0),
(68, 'Amenities', NULL, NULL, 0, NULL, 0),
(69, 'Select Amenities', NULL, NULL, 0, NULL, 0),
(70, 'Room type saved successfully', NULL, NULL, 0, NULL, 0),
(71, 'Featured Image', NULL, NULL, 0, NULL, 0),
(72, 'Thumbnail', NULL, NULL, 0, NULL, 0),
(73, 'User saved successfully', NULL, NULL, 0, NULL, 0),
(74, 'Gallery image saved successfully', NULL, NULL, 0, NULL, 0),
(75, 'Gallery saved successfully', NULL, NULL, 0, NULL, 0),
(76, 'Browse Image', NULL, NULL, 0, NULL, 0),
(77, 'Gallery Title', NULL, NULL, 0, NULL, 0),
(78, 'Add Images', NULL, NULL, 0, NULL, 0),
(79, 'Images', NULL, NULL, 0, NULL, 0),
(80, 'Manage Gallery', NULL, NULL, 0, NULL, 0),
(81, 'Add Gallery Image', NULL, NULL, 0, NULL, 0),
(82, 'Feedback', NULL, NULL, 0, NULL, 0),
(83, 'Feedback saved successfully', NULL, NULL, 0, NULL, 0),
(84, 'Feedback deleted successfully', NULL, NULL, 0, NULL, 0),
(85, 'Manage Feedback', NULL, NULL, 0, NULL, 0),
(86, 'Datetime', NULL, NULL, 0, NULL, 0),
(87, 'Name', NULL, NULL, 0, NULL, 0),
(88, 'Mobile', NULL, NULL, 0, NULL, 0),
(89, 'Email', NULL, NULL, 0, NULL, 0),
(90, 'Search By Name,Mobile,Email', NULL, NULL, 0, NULL, 0),
(91, 'Message', NULL, NULL, 0, NULL, 0),
(92, 'Mobile Number', NULL, NULL, 0, NULL, 0),
(93, 'Enquiry For Service', NULL, NULL, 0, NULL, 0),
(94, 'Service', NULL, NULL, 0, NULL, 0),
(95, 'Enquiry saved successfully', NULL, NULL, 0, NULL, 0),
(96, 'Enquiry', NULL, NULL, 0, NULL, 0),
(97, 'Enquiry deleted successfully', NULL, NULL, 0, NULL, 0),
(98, 'Testimonials', NULL, NULL, 0, NULL, 0),
(99, 'Testimonial deleted successfully', NULL, NULL, 0, NULL, 0),
(100, 'Testimonial saved successfully', NULL, NULL, 0, NULL, 0),
(101, 'Manage Testimonial', NULL, NULL, 0, NULL, 0),
(102, 'Footer Bottom Text', NULL, NULL, 0, NULL, 0),
(103, 'Select Language', NULL, NULL, 0, NULL, 0),
(104, 'Module', NULL, NULL, 0, NULL, 0),
(106, 'Administrator', NULL, NULL, 0, NULL, 0),
(107, 'Settings', NULL, NULL, 0, NULL, 0),
(108, 'Language saved successfully', NULL, NULL, 0, NULL, 0),
(109, 'Alt. Contact', NULL, NULL, 0, NULL, 0),
(110, 'Contact', '2017-10-29 16:16:29', NULL, 1, NULL, 1),
(113, 'Contact Number', NULL, NULL, 0, NULL, 0),
(114, 'Reg.Date', NULL, NULL, 0, NULL, 0),
(115, 'Customer Name', NULL, NULL, 0, NULL, 0),
(116, 'Search By First Name, Last Name, Mobile, Email', NULL, NULL, 0, NULL, 0),
(117, 'Full Name', NULL, NULL, 0, NULL, 0),
(118, 'Middle Name', NULL, NULL, 0, NULL, 0),
(119, 'First Name', NULL, NULL, 0, NULL, 0),
(120, 'Address Proof', NULL, NULL, 0, NULL, 0),
(121, 'Identity Proof', NULL, NULL, 0, NULL, 0),
(122, 'Address Proof Details', NULL, NULL, 0, NULL, 0),
(123, 'Identity Proof Details', NULL, NULL, 0, NULL, 0),
(124, 'Change Password', NULL, NULL, 0, NULL, 0),
(125, 'Logout', NULL, NULL, 0, NULL, 0),
(126, 'Label', NULL, NULL, 0, NULL, 0),
(127, 'Dashboard', NULL, NULL, 0, NULL, 0),
(128, 'Bookings', NULL, NULL, 0, NULL, 0),
(129, 'Modules', NULL, NULL, 0, NULL, 0),
(130, 'Customer', NULL, NULL, 0, NULL, 0),
(131, 'CMS', NULL, NULL, 0, NULL, 0),
(132, 'Gallery', NULL, NULL, 0, NULL, 0),
(133, 'Banner', NULL, NULL, 0, NULL, 0),
(134, 'Floor', NULL, NULL, 0, NULL, 0),
(135, 'Room', NULL, NULL, 0, NULL, 0),
(136, 'General Settings', NULL, NULL, 0, NULL, 0),
(137, 'Language', NULL, NULL, 0, NULL, 0),
(138, 'Update', NULL, NULL, 0, NULL, 0),
(139, 'Save All', NULL, NULL, 0, NULL, 0),
(140, 'Users', NULL, NULL, 0, NULL, 0),
(141, 'Labels', NULL, NULL, 0, NULL, 0),
(142, 'Label Value', NULL, NULL, 0, NULL, 0),
(143, 'Check Availability', NULL, NULL, 0, NULL, 0),
(144, 'Check In Date', NULL, NULL, 0, NULL, 0),
(145, 'Room Category', NULL, NULL, 0, NULL, 0),
(146, 'Extra Child', NULL, NULL, 0, NULL, 0),
(147, 'Occupancy', NULL, NULL, 0, NULL, 0),
(148, 'View', NULL, NULL, 0, NULL, 0),
(149, 'Book Now', NULL, NULL, 0, NULL, 0),
(150, 'Our Rooms', NULL, NULL, 0, NULL, 0),
(151, 'Home', NULL, NULL, 0, NULL, 0),
(152, 'Check out date', NULL, NULL, 0, NULL, 0),
(153, 'Tariff', NULL, NULL, 0, NULL, 0),
(154, 'Find Best Resort', NULL, NULL, 0, NULL, 0),
(155, 'Room Plan', NULL, NULL, 0, NULL, 0),
(156, 'Room plan saved successfully', NULL, NULL, 0, NULL, 0),
(157, 'Booking Form', NULL, NULL, 0, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `label_value`
--

CREATE TABLE `label_value` (
  `id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `label_id` int(11) NOT NULL,
  `value` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `label_value`
--

INSERT INTO `label_value` (`id`, `language_id`, `label_id`, `value`) VALUES
(17, 1, 107, 'Settings'),
(18, 1, 106, 'Administrator'),
(19, 1, 105, ''),
(20, 1, 104, 'Module'),
(21, 1, 103, 'Select Language'),
(22, 1, 102, 'Footer Bottom Text'),
(23, 1, 101, 'Manage Testimonial'),
(24, 1, 100, 'Testimonial saved successfully'),
(25, 1, 99, ''),
(26, 1, 98, ''),
(27, 1, 97, ''),
(28, 1, 96, ''),
(29, 1, 95, ''),
(30, 1, 94, ''),
(31, 1, 93, ''),
(32, 1, 92, ''),
(33, 1, 91, ''),
(34, 1, 90, ''),
(35, 1, 89, ''),
(36, 1, 88, ''),
(37, 1, 87, ''),
(38, 1, 86, ''),
(39, 1, 85, ''),
(40, 1, 84, ''),
(41, 1, 83, ''),
(42, 1, 82, ''),
(43, 1, 81, ''),
(44, 1, 80, ''),
(45, 1, 79, ''),
(46, 1, 78, ''),
(47, 1, 77, ''),
(48, 1, 76, ''),
(49, 1, 75, ''),
(50, 1, 74, ''),
(51, 1, 73, ''),
(52, 1, 72, ''),
(53, 1, 71, ''),
(54, 1, 70, ''),
(55, 1, 69, ''),
(56, 1, 68, ''),
(57, 1, 67, ''),
(58, 1, 66, ''),
(59, 1, 65, ''),
(60, 1, 64, ''),
(61, 1, 63, ''),
(62, 1, 62, ''),
(63, 1, 61, ''),
(64, 1, 60, ''),
(65, 1, 59, ''),
(66, 1, 58, ''),
(67, 1, 57, ''),
(68, 1, 56, ''),
(69, 1, 55, ''),
(70, 1, 54, ''),
(71, 1, 53, ''),
(72, 1, 27, ''),
(73, 1, 26, ''),
(74, 1, 25, ''),
(75, 1, 24, ''),
(76, 1, 23, ''),
(77, 1, 22, ''),
(78, 1, 21, ''),
(79, 1, 20, ''),
(80, 1, 19, ''),
(81, 1, 18, ''),
(82, 1, 17, ''),
(83, 1, 16, ''),
(84, 1, 15, ''),
(85, 1, 14, ''),
(86, 1, 13, ''),
(87, 1, 12, ''),
(88, 1, 11, ''),
(89, 1, 10, ''),
(90, 1, 9, ''),
(91, 1, 8, ''),
(92, 1, 7, ''),
(93, 1, 6, ''),
(94, 1, 5, ''),
(95, 1, 4, ''),
(96, 1, 3, ''),
(97, 1, 2, ''),
(98, 1, 1, ''),
(99, 2, 107, 'सेटिंग्स'),
(100, 2, 106, 'प्रशासक'),
(101, 2, 105, ''),
(102, 2, 104, 'मॉड्यूल'),
(103, 2, 103, ' भाषा चुनिए'),
(104, 2, 102, ' पाद लेख नीचे का टेक्स्ट'),
(105, 2, 101, ' प्रशंसापत्र प्रबंधित करें'),
(106, 2, 100, 'प्रशंसापत्र सफलतापूर्वक सहेजी गई'),
(107, 2, 99, 'प्रशंसापत्र सफलतापूर्वक हटा दिया गया'),
(108, 2, 98, 'प्रशंसापत्र'),
(109, 2, 97, 'पूछ-ताछ सफलतापूर्वक हटा दी गई'),
(110, 2, 96, 'पूछ-ताछ'),
(111, 2, 95, 'पूछ-ताछ सफलतापूर्वक सहेजी गई'),
(112, 2, 94, 'सेवा'),
(113, 2, 93, 'सेवा के लिए जांच'),
(114, 2, 92, 'मोबाइल नंबर'),
(115, 2, 91, 'संदेश'),
(116, 2, 90, 'नाम, मोबाइल, ईमेल द्वारा खोजें'),
(117, 2, 89, 'ईमेल'),
(118, 2, 88, 'मोबाइल'),
(119, 2, 87, 'नाम'),
(120, 2, 86, 'दिनांक समय'),
(121, 2, 85, 'प्रतिक्रिया प्रबंधित करें'),
(122, 2, 84, 'प्रतिक्रिया  सफलतापूर्वक हटा दिया गया'),
(123, 2, 83, 'प्रतिक्रिया सफलतापूर्वक सहेजी गई'),
(124, 2, 82, 'प्रतिक्रिया'),
(125, 2, 81, 'गैलरी छवि जोड़ें'),
(126, 2, 80, 'गैलरी प्रबंधित करें'),
(127, 2, 79, 'छवियां '),
(128, 2, 78, 'छवियां जोड़ें'),
(129, 2, 77, 'गैलरी शीर्षक'),
(130, 2, 76, 'छवि ब्राउज़ करें'),
(131, 2, 75, 'गैलरी सफलतापूर्वक सहेजी गई'),
(132, 2, 74, 'गैलरी छवि सफलतापूर्वक सहेजी गई'),
(133, 2, 73, 'उपयोगकर्ता सफलतापूर्वक सहेजा गया'),
(134, 2, 72, 'थंबनेल'),
(135, 2, 71, 'निरूपित चित्र'),
(136, 2, 70, 'कमरे का प्रकार सफलतापूर्वक सहेजा गया'),
(137, 2, 69, 'सुविधाएं चुनें'),
(138, 2, 68, 'सुविधाएं'),
(139, 2, 67, 'लंबा वर्णन'),
(140, 2, 66, 'पृष्ठ सामग्री'),
(141, 2, 65, 'साधारण'),
(142, 2, 64, 'कक्ष प्रकार चुनें'),
(143, 2, 63, 'कमरे के प्रकार या उचित नाम से खोजें'),
(144, 2, 62, 'मूल्यांकन करें'),
(145, 2, 61, 'बच्चा'),
(146, 2, 60, 'वयस्क'),
(147, 2, 59, 'अतिरिक्त आदमी'),
(148, 2, 58, 'प्रीमियम डीलक्स'),
(149, 2, 57, 'सुपर डीलक्स'),
(150, 2, 56, 'डीलक्स'),
(151, 2, 55, 'कमरे के प्रकार'),
(152, 2, 54, 'रखरखाव'),
(153, 2, 53, 'बुक्ड'),
(154, 2, 27, 'खुला'),
(155, 2, 26, 'मंज़िल'),
(156, 2, 25, 'कमरे'),
(157, 2, 24, 'सूचीकरण'),
(158, 2, 23, 'कमरे की संख्या'),
(159, 2, 22, 'संपत्ति का चयन करें'),
(160, 2, 21, 'चित्र ब्राउज़ करने के लिए छवि पर क्लिक करें'),
(161, 2, 20, 'सम्पत्ति का नाम'),
(162, 2, 19, 'सम्पत्ति'),
(163, 2, 18, 'पृष्ठ शीर्षक से खोजें'),
(164, 2, 17, 'मेटा कीवर्ड'),
(165, 2, 16, 'पृष्ठ का शीर्षक'),
(166, 2, 15, 'पन्ने का नाम'),
(167, 2, 14, 'सीएमएस सफलतापूर्वक सहेजा गया'),
(168, 2, 13, 'कोई रिकॉर्ड नहीं मिला'),
(169, 2, 12, 'यहाँ ढूँढे'),
(170, 2, 11, 'कैप्शन द्वारा खोजें'),
(171, 2, 10, 'कार्य'),
(172, 2, 9, 'एस.एन.'),
(173, 2, 8, 'संक्षिप्त वर्णन'),
(174, 2, 7, 'सहेजें'),
(175, 2, 6, 'रद्द करना'),
(176, 2, 5, 'निष्क्रिय'),
(177, 2, 4, 'सक्रिय'),
(178, 2, 3, 'स्थिति'),
(179, 2, 2, 'प्रबंधित'),
(180, 2, 1, 'तस्वीर का शीर्षक'),
(181, 2, 0, ''),
(182, 1, 115, 'Demo5'),
(183, 2, 115, 'ग्राहक का नाम'),
(184, 1, 109, 'Label Value'),
(185, 2, 109, 'वैकल्पिक संपर्क'),
(186, 1, 116, ''),
(187, 2, 116, 'प्रथम नाम, अंतिम नाम, मोबाइल, ईमेल द्वारा खोजें'),
(188, 1, 117, ''),
(189, 2, 117, 'पूरा नाम'),
(190, 1, 118, ''),
(191, 2, 118, 'मध्य नाम'),
(192, 1, 119, ''),
(193, 2, 119, 'पहला नाम'),
(194, 1, 120, ''),
(195, 2, 120, 'पते का सबूत'),
(196, 1, 121, ''),
(197, 2, 121, 'पहचान सबूत'),
(198, 1, 122, ''),
(199, 2, 122, 'पता सबूत विवरण'),
(200, 1, 123, ''),
(201, 2, 123, 'पहचान प्रमाण विवरण'),
(202, 1, 124, ''),
(203, 2, 124, 'पासवर्ड बदलें'),
(204, 1, 125, ''),
(205, 2, 125, 'लॉग-आउट'),
(206, 1, 126, ''),
(207, 2, 126, 'लेबल'),
(208, 1, 127, ''),
(209, 2, 127, 'डैशबोर्ड'),
(210, 1, 128, ''),
(211, 2, 128, 'बुकिंग'),
(212, 1, 129, ''),
(213, 2, 129, 'मॉड्यूल'),
(214, 1, 130, ''),
(215, 2, 130, 'ग्राहक'),
(216, 1, 131, ''),
(217, 2, 131, 'सीएमएस'),
(218, 1, 132, ''),
(219, 2, 132, 'गेलरी'),
(220, 1, 133, ''),
(221, 2, 133, 'बैनर'),
(222, 1, 134, ''),
(223, 2, 134, 'मंज़िल'),
(224, 1, 135, ''),
(225, 2, 135, 'कमरा'),
(226, 1, 136, ''),
(227, 2, 136, 'सामान्य सेटिंग्स'),
(228, 1, 137, ''),
(229, 2, 137, 'भाषा'),
(230, 1, 138, ''),
(231, 2, 138, 'अद्यतन'),
(232, 1, 139, ''),
(233, 2, 139, 'सभी को सहेजें'),
(234, 1, 108, ''),
(235, 2, 108, 'भाषा सफलतापूर्वक सहेजी गई'),
(236, 1, 140, ''),
(237, 2, 140, 'उपयोगकर्ता'),
(238, 1, 141, ''),
(239, 2, 141, 'लेबल'),
(240, 1, 142, ''),
(241, 2, 142, 'लेबल मान'),
(242, 1, 143, ''),
(243, 2, 143, ''),
(244, 1, 144, ''),
(245, 2, 144, ''),
(246, 1, 145, ''),
(247, 2, 145, ''),
(248, 1, 146, ''),
(249, 2, 146, ''),
(250, 1, 147, ''),
(251, 2, 147, ''),
(252, 1, 148, ''),
(253, 2, 148, ''),
(254, 1, 149, ''),
(255, 2, 149, ''),
(256, 1, 150, ''),
(257, 2, 150, ''),
(258, 1, 151, ''),
(259, 2, 151, ''),
(260, 1, 152, ''),
(261, 2, 152, ''),
(262, 1, 153, ''),
(263, 2, 153, ''),
(264, 1, 154, ''),
(265, 2, 154, ''),
(266, 1, 155, ''),
(267, 2, 155, ''),
(268, 1, 156, ''),
(269, 2, 156, ''),
(270, 1, 157, ''),
(271, 2, 157, '');

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE `language` (
  `language_id` int(11) NOT NULL,
  `language` varchar(100) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `is_default` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Framework Table';

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`language_id`, `language`, `status`, `is_default`) VALUES
(1, 'english', '1', '0'),
(2, 'hindi', '1', '0');

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE `links` (
  `link_id` int(11) NOT NULL,
  `title` varchar(300) DEFAULT NULL,
  `link` text DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '0=Inactive,1=Active',
  `edited_date` datetime NOT NULL,
  `created_date` datetime NOT NULL,
  `sequence_no` int(11) NOT NULL DEFAULT 1,
  `created_by` int(11) DEFAULT NULL,
  `edited_by` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Framework Table';

--
-- Dumping data for table `links`
--

INSERT INTO `links` (`link_id`, `title`, `link`, `status`, `edited_date`, `created_date`, `sequence_no`, `created_by`, `edited_by`) VALUES
(1, 'Sports Regn', 'https://cmdpgcollege.ac.in/show/important-links', 1, '2022-06-04 14:31:37', '2021-12-16 07:38:57', 1, 1, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `merit`
--

CREATE TABLE `merit` (
  `merit_id` int(11) NOT NULL,
  `attachment` mediumtext DEFAULT NULL,
  `title` varchar(300) DEFAULT NULL,
  `short_description` mediumtext DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '0=Inactive,1=Active',
  `edited_date` datetime NOT NULL,
  `created_date` datetime NOT NULL,
  `sequence_no` int(11) NOT NULL DEFAULT 1,
  `created_by` int(11) DEFAULT NULL,
  `edited_by` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Framework Table';

--
-- Dumping data for table `merit`
--

INSERT INTO `merit` (`merit_id`, `attachment`, `title`, `short_description`, `status`, `edited_date`, `created_date`, `sequence_no`, `created_by`, `edited_by`) VALUES
(1, 'blank.pdf', 'Merit List 2021', NULL, 1, '2021-12-16 02:12:51', '2021-12-16 02:12:51', 1, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `message_templates`
--

CREATE TABLE `message_templates` (
  `template_id` int(11) NOT NULL,
  `template` varchar(300) NOT NULL,
  `subject` mediumtext NOT NULL,
  `from_name` varchar(300) NOT NULL,
  `from_email` varchar(100) NOT NULL,
  `bcc` varchar(100) NOT NULL,
  `cc` varchar(100) NOT NULL,
  `message` mediumtext NOT NULL,
  `type` enum('sms','email') NOT NULL DEFAULT 'sms',
  `sequence_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_date` date DEFAULT NULL,
  `edited_date` datetime DEFAULT NULL,
  `edited_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Framework Table';

--
-- Dumping data for table `message_templates`
--

INSERT INTO `message_templates` (`template_id`, `template`, `subject`, `from_name`, `from_email`, `bcc`, `cc`, `message`, `type`, `sequence_id`, `created_by`, `created_date`, `edited_date`, `edited_by`) VALUES
(1, 'Forgot Password', 'Forgot Password', '', '', '', '', 'Dear [[NAME]],<br />\r\n<br />\r\n<br />\r\nPlease find your new login details &ndash;&nbsp;<br />\r\n<strong>Login Url</strong>: [[LOGIN_URL]]<br />\r\n<strong>Username </strong>: [[USERNAME]]<br />\r\n<strong>Password </strong>: [[PASSWORD]]<br />\r\n<br />\r\nRegards,<br />\r\n[[SITENAME]]', 'email', NULL, 1, '2021-07-18', '2021-07-18 02:00:54', 1);

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `module_id` int(11) NOT NULL,
  `is_module` int(11) NOT NULL DEFAULT 1,
  `group_id` int(11) NOT NULL,
  `sequence_no` int(11) NOT NULL DEFAULT 0,
  `title` varchar(200) NOT NULL,
  `url` text NOT NULL,
  `icon` varchar(200) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `edited_date` date DEFAULT NULL,
  `created_date` date DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `edited_by` int(11) DEFAULT NULL,
  `module_table` varchar(250) DEFAULT NULL,
  `module_table_pk` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Framework Table';

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`module_id`, `is_module`, `group_id`, `sequence_no`, `title`, `url`, `icon`, `status`, `edited_date`, `created_date`, `created_by`, `edited_by`, `module_table`, `module_table_pk`) VALUES
(1, 0, 8, 1, 'CMS', 'admin_cms', 'glyphicon glyphicon-th', '1', '2017-11-30', NULL, 1, NULL, NULL, NULL),
(2, 0, 8, 0, 'Page Component', 'admin_component', 'glyphicon glyphicon-th', '1', NULL, '2021-07-18', 1, NULL, NULL, NULL),
(3, 0, 8, 5, 'Media Files', 'admin_media', 'glyphicon glyphicon-th', '1', '2019-12-04', '2019-03-23', 1, 1, NULL, NULL),
(4, 0, 8, 0, 'Post', 'admin_post', 'glyphicon glyphicon-th', '1', NULL, '2021-07-18', 1, NULL, 'post', 'post_id'),
(5, 1, 8, 4, 'Kids Gallery', 'admin_gallery', 'glyphicon glyphicon-th', '1', '2022-06-02', NULL, 1, 1, NULL, NULL),
(6, 1, 8, 6, 'Enquiry', 'admin_enquiry', 'glyphicon glyphicon-th', '1', '2019-12-04', NULL, 1, 1, NULL, NULL),
(7, 1, 8, 2, 'Testimonials', 'admin_testimonial', 'glyphicon glyphicon-th', '1', '2021-07-11', NULL, 1, 1, NULL, NULL),
(8, 1, 8, 8, 'Toppers', 'admin_topper', 'glyphicon glyphicon-th', '1', '2021-07-23', NULL, 1, 1, 'category', 'category_id'),
(9, 1, 8, 1, 'Career', 'admin_career', 'glyphicon glyphicon-th', '1', '2021-07-11', NULL, 1, 1, NULL, NULL),
(10, 1, 8, 11, 'Faculty / Teachers', 'admin_faculty', 'glyphicon glyphicon-th', '1', '2022-06-04', '2019-10-14', 1, 1, NULL, NULL),
(11, 1, 8, 9, 'Courses', 'admin_course', 'glyphicon glyphicon-th', '1', '2021-11-24', '2019-12-05', 1, 1, NULL, NULL),
(12, 1, 8, 1, 'Job Application', 'admin_job_application', 'glyphicon glyphicon-th', '1', '2021-07-11', NULL, 1, 1, NULL, NULL),
(13, 1, 8, 2, 'Banner', 'admin_banner', 'glyphicon glyphicon-th', '1', '2017-11-30', NULL, 1, NULL, NULL, NULL),
(14, 1, 8, 0, 'Subscribers', 'admin_subscriber', 'glyphicon glyphicon-th', '1', '2021-08-01', '2021-08-01', 1, NULL, NULL, NULL),
(15, 1, 8, 1, 'Facility', 'admin_facility', 'glyphicon glyphicon-th', '1', '2017-11-30', NULL, 1, NULL, 'facility', 'facility_id'),
(16, 1, 8, 0, 'Downloads', 'admin_download', 'glyphicon glyphicon-th', '1', '2021-11-24', '2021-11-24', 1, NULL, NULL, NULL),
(17, 1, 8, 0, 'Notification', 'admin_notification', 'glyphicon glyphicon-th', '1', '2021-12-14', '2021-12-14', 1, NULL, NULL, NULL),
(18, 1, 8, 0, 'Academic Calendar', 'admin_academic_calendar', 'glyphicon glyphicon-th', '1', '2021-12-14', '2021-12-14', 1, NULL, NULL, NULL),
(19, 1, 8, 0, 'Admission Notification', 'admin_admission_notification', 'glyphicon glyphicon-th', '1', '2021-12-15', '2021-12-15', 1, NULL, NULL, NULL),
(20, 1, 8, 0, 'Sports Department', 'admin_sports', 'glyphicon glyphicon-th', '1', '2021-12-15', '2021-12-15', 1, NULL, NULL, NULL),
(21, 1, 8, 0, 'Registered Alumni', 'admin_alumni', 'glyphicon glyphicon-th', '1', '2021-12-15', '2021-12-15', 1, NULL, NULL, NULL),
(22, 1, 8, 0, 'Merit List', 'admin_merit', 'glyphicon glyphicon-th', '1', '2021-12-16', '2021-12-16', 1, NULL, NULL, NULL),
(23, 1, 8, 0, 'College SSR', 'admin_ssr', 'glyphicon glyphicon-th', '1', '2021-12-16', '2021-12-16', 1, NULL, NULL, NULL),
(24, 1, 8, 0, 'Admission Lists', 'admin_admission_list', 'glyphicon glyphicon-th', '1', '2021-12-16', '2021-12-16', 1, NULL, NULL, NULL),
(25, 1, 8, 0, 'News', 'admin_news', 'glyphicon glyphicon-th', '1', '2021-12-16', '2021-12-16', 1, NULL, NULL, NULL),
(26, 1, 8, 0, 'Important Links', 'admin_links', 'glyphicon glyphicon-th', '1', '2021-12-16', '2021-12-16', 1, NULL, NULL, NULL),
(27, 1, 8, 0, 'Events Notification', 'admin_events', 'glyphicon glyphicon-th', '1', '2021-12-16', '2021-12-16', 1, NULL, NULL, NULL),
(28, 1, 8, 0, 'Admission Enquiry', 'admin_admission', 'glyphicon glyphicon-th', '1', '2021-12-17', '2021-12-17', 1, 1, NULL, NULL),
(29, 1, 8, 0, 'Feedback', 'admin_feedback', 'glyphicon glyphicon-th', '1', '2021-12-17', '2021-12-17', 1, NULL, NULL, NULL),
(30, 1, 8, 0, 'Facility', 'admin_facility', 'glyphicon glyphicon-th', '1', '2021-12-28', '2021-12-28', 1, NULL, NULL, NULL),
(31, 1, 8, 0, 'Event Gallery', 'admin_event_gallery', 'glyphicon glyphicon-th', '1', '2022-06-03', '2022-06-03', 1, NULL, NULL, NULL),
(32, 1, 8, 0, 'Video Gallery', 'admin_video', 'glyphicon glyphicon-th', '1', '2022-06-03', '2022-06-03', 1, NULL, NULL, NULL),
(33, 1, 8, 0, 'Transfer Certificate', 'admin_tc', 'glyphicon glyphicon-th', '1', '2022-06-03', '2022-06-03', 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `module_group`
--

CREATE TABLE `module_group` (
  `group_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `selected_id` varchar(100) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `sequence_no` int(11) NOT NULL DEFAULT 1,
  `created_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `edited_date` datetime DEFAULT NULL,
  `edited_by` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COMMENT='Framework Table';

--
-- Dumping data for table `module_group`
--

INSERT INTO `module_group` (`group_id`, `title`, `selected_id`, `icon`, `sequence_no`, `created_date`, `created_by`, `edited_date`, `edited_by`) VALUES
(8, 'Modules', 'modules', 'glyphicon glyphicon-dashboard', 4, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `attachment` mediumtext DEFAULT NULL,
  `title` varchar(300) DEFAULT NULL,
  `short_description` mediumtext DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '0=Inactive,1=Active',
  `edited_date` datetime NOT NULL,
  `created_date` datetime NOT NULL,
  `sequence_no` int(11) NOT NULL DEFAULT 1,
  `created_by` int(11) DEFAULT NULL,
  `edited_by` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Framework Table';

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `attachment`, `title`, `short_description`, `status`, `edited_date`, `created_date`, `sequence_no`, `created_by`, `edited_by`) VALUES
(1, 'CMS1.pdf', 'News 1', NULL, 1, '2021-12-16 06:12:11', '2021-12-16 06:12:11', 1, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `notification_id` int(11) NOT NULL,
  `attachment` mediumtext DEFAULT NULL,
  `title` varchar(300) DEFAULT NULL,
  `short_description` mediumtext DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '0=Inactive,1=Active',
  `edited_date` datetime NOT NULL,
  `created_date` datetime NOT NULL,
  `sequence_no` int(11) NOT NULL DEFAULT 1,
  `created_by` int(11) DEFAULT NULL,
  `edited_by` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Framework Table';

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`notification_id`, `attachment`, `title`, `short_description`, `status`, `edited_date`, `created_date`, `sequence_no`, `created_by`, `edited_by`) VALUES
(1, 'blank.pdf', 'Notice for Inter College Cricket Tournament Selection Camp', NULL, 1, '2021-12-14 10:44:54', '2021-12-14 10:44:54', 1, 1, NULL),
(2, 'blank_(1).pdf', 'Lab Notice for BSC I,II,III & MCS I,II,III', NULL, 1, '2021-12-14 10:58:03', '2021-12-14 10:58:03', 1, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `page_component`
--

CREATE TABLE `page_component` (
  `id` int(11) NOT NULL,
  `section` enum('header','body','sidebar','footer') NOT NULL DEFAULT 'body',
  `name` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `created_date` date DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `edited_date` date DEFAULT NULL,
  `edited_by` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `page_component`
--

INSERT INTO `page_component` (`id`, `section`, `name`, `content`, `status`, `created_date`, `created_by`, `edited_date`, `edited_by`) VALUES
(1, 'footer', 'footer_about', 'The family is growing every day. The core schools have been set up by the Society and schools under aegis of the STGIS Society have been established globally...', '1', '2021-12-14', 1, '2022-06-02', 1);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `slug` varchar(150) NOT NULL,
  `featured_image` text NOT NULL DEFAULT '',
  `content` text NOT NULL,
  `short_description` varchar(150) NOT NULL,
  `tag` text NOT NULL,
  `view_count` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `edited_date` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `edited_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Framework Table';

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

CREATE TABLE `post_category` (
  `category_id` int(11) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `edited_date` datetime DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `edited_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Framework Table';

--
-- Dumping data for table `post_category`
--

INSERT INTO `post_category` (`category_id`, `title`, `created_date`, `edited_date`, `created_by`, `edited_by`) VALUES
(12, 'News', '2021-11-24 16:29:04', '2021-11-24 16:29:04', 1, NULL),
(13, 'Crime', '2021-11-24 16:56:12', '2021-11-24 16:56:12', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sports`
--

CREATE TABLE `sports` (
  `sport_id` int(11) NOT NULL,
  `attachment` mediumtext DEFAULT NULL,
  `title` varchar(300) DEFAULT NULL,
  `short_description` mediumtext DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '0=Inactive,1=Active',
  `edited_date` datetime NOT NULL,
  `created_date` datetime NOT NULL,
  `sequence_no` int(11) NOT NULL DEFAULT 1,
  `created_by` int(11) DEFAULT NULL,
  `edited_by` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Framework Table';

--
-- Dumping data for table `sports`
--

INSERT INTO `sports` (`sport_id`, `attachment`, `title`, `short_description`, `status`, `edited_date`, `created_date`, `sequence_no`, `created_by`, `edited_by`) VALUES
(1, 'blank.pdf', 'Trial - Men\'s U-19 Hockey Team List', NULL, 1, '2021-12-15 02:46:37', '2021-12-15 02:46:37', 1, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ssr`
--

CREATE TABLE `ssr` (
  `ssr_id` int(11) NOT NULL,
  `attachment` mediumtext DEFAULT NULL,
  `title` varchar(300) DEFAULT NULL,
  `short_description` mediumtext DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '0=Inactive,1=Active',
  `edited_date` datetime NOT NULL,
  `created_date` datetime NOT NULL,
  `sequence_no` int(11) NOT NULL DEFAULT 1,
  `created_by` int(11) DEFAULT NULL,
  `edited_by` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Framework Table';

--
-- Dumping data for table `ssr`
--

INSERT INTO `ssr` (`ssr_id`, `attachment`, `title`, `short_description`, `status`, `edited_date`, `created_date`, `sequence_no`, `created_by`, `edited_by`) VALUES
(1, 'blank.pdf', 'College Brochure', NULL, 1, '2021-12-16 02:42:45', '2021-12-16 02:42:45', 1, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subscriber`
--

CREATE TABLE `subscriber` (
  `subscriber_id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Framework Table';

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
-- Table structure for table `tc`
--

CREATE TABLE `tc` (
  `tc_id` int(11) NOT NULL,
  `tc_no` varchar(20) NOT NULL,
  `admission_no` varchar(20) NOT NULL,
  `attachment` mediumtext DEFAULT NULL,
  `title` varchar(300) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '0=Inactive,1=Active',
  `edited_date` datetime NOT NULL,
  `created_date` datetime NOT NULL,
  `sequence_no` int(11) NOT NULL DEFAULT 1,
  `created_by` int(11) DEFAULT NULL,
  `edited_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Framework Table';

--
-- Dumping data for table `tc`
--

INSERT INTO `tc` (`tc_id`, `tc_no`, `admission_no`, `attachment`, `title`, `status`, `edited_date`, `created_date`, `sequence_no`, `created_by`, `edited_by`) VALUES
(4, '0', '0', 'dummy_pdf1.pdf', NULL, 1, '2022-06-03 19:02:01', '2022-06-03 19:02:01', 1, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `testimonial_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `video_url` varchar(300) NOT NULL,
  `message` mediumtext NOT NULL,
  `created_date` datetime DEFAULT NULL,
  `edited_date` datetime DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `edited_by` int(11) NOT NULL,
  `sequence_no` int(11) NOT NULL,
  `image` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Framework Table';

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`testimonial_id`, `name`, `video_url`, `message`, `created_date`, `edited_date`, `created_by`, `edited_by`, `sequence_no`, `image`) VALUES
(1, 'Abhishek', 'KcWcu1ytazY', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that i', '2021-11-24 12:39:10', '2022-06-02 10:28:21', 1, 1, 0, 'staff-21.jpg'),
(2, 'sita ram', 'Go8nTmfrQd8', '“Let me tell you the story of the space viking, Thor Odinson…”\r\n\r\nWatch the brand-new trailer for Marvel Studios’ Thor: Love and Thunder and witness it only in theaters July 8.', '2022-06-02 10:32:53', '2022-06-02 10:32:53', 1, 0, 0, '2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `topper`
--

CREATE TABLE `topper` (
  `topper_id` int(11) NOT NULL,
  `thumbnail` text DEFAULT NULL,
  `topper_name` varchar(200) DEFAULT NULL,
  `standard` varchar(200) DEFAULT NULL,
  `percentage` varchar(200) DEFAULT NULL,
  `edited_date` datetime NOT NULL,
  `created_date` datetime NOT NULL,
  `sequence_no` int(11) NOT NULL DEFAULT 1,
  `created_by` int(11) DEFAULT NULL,
  `edited_by` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Framework Table';

--
-- Dumping data for table `topper`
--

INSERT INTO `topper` (`topper_id`, `thumbnail`, `topper_name`, `standard`, `percentage`, `edited_date`, `created_date`, `sequence_no`, `created_by`, `edited_by`) VALUES
(1, '4.jpg', 'Rahul Soni', 'IIT-JEE-19', 'AIR 1', '2022-06-04 14:59:13', '2022-06-02 10:38:55', 1, 1, '0000-00-00 00:00:00'),
(2, 'google-logo-9808.png', 'Helen Keler jr', 'NEET-19', '1st', '2022-06-02 10:39:30', '2022-06-02 10:39:30', 1, 1, NULL),
(3, 'netflix-logo-png-2616.png', 'Arka Pradhan', 'IIT-JEE-19', '2nd', '2022-06-02 10:40:04', '2022-06-02 10:40:04', 1, 1, NULL),
(4, '1_(1).jpg', 'Arka Pradhan', 'IIT-JEE-19', '2nd', '2022-06-02 10:40:37', '2022-06-02 10:40:37', 1, 1, NULL),
(5, '3.jpg', 'Arka Pradhan', 'CLAT-19', '1st', '2022-06-02 10:41:10', '2022-06-02 10:41:10', 1, 1, NULL),
(6, '5.jpg', 'Avinash Kashyap', 'IIT-JEE-17', '2nd', '2022-06-02 10:42:40', '2022-06-02 10:42:40', 1, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL COMMENT 'User role id',
  `name` varchar(300) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `photo` text NOT NULL,
  `quote` varchar(200) NOT NULL,
  `created_date` date DEFAULT NULL,
  `edited_date` date DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `edited_by` datetime DEFAULT NULL,
  `sequence_no` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Framework Table';

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `role_id`, `name`, `mobile`, `email`, `password`, `status`, `photo`, `quote`, `created_date`, `edited_date`, `created_by`, `edited_by`, `sequence_no`) VALUES
(1, 0, 'SuperAdmin', '7828796979', 'contact@spitech.in', '1ab7bc8a726cd0f7137d190e474cdde7', 1, '', '', '0000-00-00', '2021-07-04', 1, '0000-00-00 00:00:00', 1),
(3, 1, 'Admin', '1234567890', 'info@nagarpalikamungeli.com', '32cc05ae2f9e0b3878d28fa3f5515b68', 1, '', '', '2019-02-18', '2019-10-11', 1, '0000-00-00 00:00:00', 2),
(4, 2, 'Demo', '8888538591', 'spsoni.acc@gmail.com', '1ab7bc8a726cd0f7137d190e474cdde7', 1, '', '', '2021-07-11', '2021-07-11', 1, '0000-00-00 00:00:00', 3),
(5, 2, 'Trimurty Public School', '9755380108', 'tps.sargaon@gmail.com', 'e6e061838856bf47e1de730719fb2609', 1, '', '', '2021-08-07', '2022-06-04', 1, '0000-00-00 00:00:00', 1),
(6, 2, 'Rahul Soni', '9340369212', 'rahul.soni@spitech.in', 'b0a3054e2648c9e4048ac26105289154', 1, '', '', '2022-06-04', '2022-06-04', 1, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_permission`
--

CREATE TABLE `user_permission` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `module_id` int(11) NOT NULL,
  `add_permission` int(11) NOT NULL DEFAULT 0,
  `edit_permission` int(11) NOT NULL DEFAULT 0,
  `delete_permission` int(11) NOT NULL DEFAULT 0,
  `company_id` int(11) NOT NULL DEFAULT 1,
  `view_permission` int(11) NOT NULL DEFAULT 0,
  `export_permission` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Framework Table';

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

CREATE TABLE `user_role` (
  `role_id` int(11) NOT NULL,
  `role` varchar(100) NOT NULL,
  `created_date` datetime DEFAULT NULL,
  `edited_date` datetime DEFAULT NULL,
  `created_by` int(11) NOT NULL DEFAULT 0,
  `edited_by` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Framework Table';

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

CREATE TABLE `video` (
  `video_id` int(11) NOT NULL,
  `title` varchar(300) DEFAULT NULL,
  `link` text DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '0=Inactive,1=Active',
  `edited_date` datetime NOT NULL,
  `created_date` datetime NOT NULL,
  `sequence_no` int(11) NOT NULL DEFAULT 1,
  `created_by` int(11) DEFAULT NULL,
  `edited_by` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Framework Table';

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`video_id`, `title`, `link`, `status`, `edited_date`, `created_date`, `sequence_no`, `created_by`, `edited_by`) VALUES
(1, 'New Video', 'tbbveDpUZv4', 1, '2022-06-03 15:59:10', '2022-06-03 15:59:10', 1, 1, NULL),
(2, 'vd', '5Eqb_-j3FDA', 1, '2022-06-03 16:13:17', '2022-06-03 16:13:17', 1, 1, NULL),
(3, 'ee', '5Eqb_-j3FDA', 1, '2022-06-03 16:14:28', '2022-06-03 16:14:28', 1, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `web_user`
--

CREATE TABLE `web_user` (
  `web_user_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `email` varchar(150) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic_calendar`
--
ALTER TABLE `academic_calendar`
  ADD PRIMARY KEY (`calendar_id`);

--
-- Indexes for table `admission`
--
ALTER TABLE `admission`
  ADD PRIMARY KEY (`admission_id`);

--
-- Indexes for table `admission_list`
--
ALTER TABLE `admission_list`
  ADD PRIMARY KEY (`list_id`);

--
-- Indexes for table `admission_notification`
--
ALTER TABLE `admission_notification`
  ADD PRIMARY KEY (`admission_notification_id`);

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`alumni_id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `career`
--
ALTER TABLE `career`
  ADD PRIMARY KEY (`career_id`);

--
-- Indexes for table `cms`
--
ALTER TABLE `cms`
  ADD PRIMARY KEY (`cms_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `download`
--
ALTER TABLE `download`
  ADD PRIMARY KEY (`download_id`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`enquiry_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `event_gallery`
--
ALTER TABLE `event_gallery`
  ADD PRIMARY KEY (`gallery_id`);

--
-- Indexes for table `event_gallery_image`
--
ALTER TABLE `event_gallery_image`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `facility`
--
ALTER TABLE `facility`
  ADD PRIMARY KEY (`facility_id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`faculty_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`gallery_id`);

--
-- Indexes for table `gallery_image`
--
ALTER TABLE `gallery_image`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `job_application`
--
ALTER TABLE `job_application`
  ADD PRIMARY KEY (`application_id`);

--
-- Indexes for table `label`
--
ALTER TABLE `label`
  ADD PRIMARY KEY (`label_id`),
  ADD UNIQUE KEY `label` (`label`);

--
-- Indexes for table `label_value`
--
ALTER TABLE `label_value`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`language_id`),
  ADD UNIQUE KEY `language` (`language`);

--
-- Indexes for table `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`link_id`);

--
-- Indexes for table `merit`
--
ALTER TABLE `merit`
  ADD PRIMARY KEY (`merit_id`);

--
-- Indexes for table `message_templates`
--
ALTER TABLE `message_templates`
  ADD PRIMARY KEY (`template_id`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`module_id`);

--
-- Indexes for table `module_group`
--
ALTER TABLE `module_group`
  ADD PRIMARY KEY (`group_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`notification_id`);

--
-- Indexes for table `page_component`
--
ALTER TABLE `page_component`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `post_category`
--
ALTER TABLE `post_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `sports`
--
ALTER TABLE `sports`
  ADD PRIMARY KEY (`sport_id`);

--
-- Indexes for table `ssr`
--
ALTER TABLE `ssr`
  ADD PRIMARY KEY (`ssr_id`);

--
-- Indexes for table `subscriber`
--
ALTER TABLE `subscriber`
  ADD PRIMARY KEY (`subscriber_id`);

--
-- Indexes for table `tc`
--
ALTER TABLE `tc`
  ADD PRIMARY KEY (`tc_id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`testimonial_id`);

--
-- Indexes for table `topper`
--
ALTER TABLE `topper`
  ADD PRIMARY KEY (`topper_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_permission`
--
ALTER TABLE `user_permission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`video_id`);

--
-- Indexes for table `web_user`
--
ALTER TABLE `web_user`
  ADD PRIMARY KEY (`web_user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academic_calendar`
--
ALTER TABLE `academic_calendar`
  MODIFY `calendar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admission`
--
ALTER TABLE `admission`
  MODIFY `admission_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `admission_list`
--
ALTER TABLE `admission_list`
  MODIFY `list_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admission_notification`
--
ALTER TABLE `admission_notification`
  MODIFY `admission_notification_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `alumni`
--
ALTER TABLE `alumni`
  MODIFY `alumni_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `career`
--
ALTER TABLE `career`
  MODIFY `career_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cms`
--
ALTER TABLE `cms`
  MODIFY `cms_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `config`
--
ALTER TABLE `config`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `download`
--
ALTER TABLE `download`
  MODIFY `download_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `enquiry_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `event_gallery`
--
ALTER TABLE `event_gallery`
  MODIFY `gallery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `event_gallery_image`
--
ALTER TABLE `event_gallery_image`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `facility`
--
ALTER TABLE `facility`
  MODIFY `facility_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `faculty_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `gallery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `gallery_image`
--
ALTER TABLE `gallery_image`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `job_application`
--
ALTER TABLE `job_application`
  MODIFY `application_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `label`
--
ALTER TABLE `label`
  MODIFY `label_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;

--
-- AUTO_INCREMENT for table `label_value`
--
ALTER TABLE `label_value`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=272;

--
-- AUTO_INCREMENT for table `language`
--
ALTER TABLE `language`
  MODIFY `language_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `links`
--
ALTER TABLE `links`
  MODIFY `link_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `merit`
--
ALTER TABLE `merit`
  MODIFY `merit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `message_templates`
--
ALTER TABLE `message_templates`
  MODIFY `template_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `module_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `module_group`
--
ALTER TABLE `module_group`
  MODIFY `group_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `notification_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `page_component`
--
ALTER TABLE `page_component`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `post_category`
--
ALTER TABLE `post_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `sports`
--
ALTER TABLE `sports`
  MODIFY `sport_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ssr`
--
ALTER TABLE `ssr`
  MODIFY `ssr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subscriber`
--
ALTER TABLE `subscriber`
  MODIFY `subscriber_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tc`
--
ALTER TABLE `tc`
  MODIFY `tc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `testimonial_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `topper`
--
ALTER TABLE `topper`
  MODIFY `topper_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_permission`
--
ALTER TABLE `user_permission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `web_user`
--
ALTER TABLE `web_user`
  MODIFY `web_user_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
