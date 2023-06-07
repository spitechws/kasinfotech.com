-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 07, 2023 at 02:23 PM
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
  `image` mediumtext,
  `caption` varchar(300) DEFAULT NULL,
  `short_description` mediumtext,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `edited_date` datetime NOT NULL,
  `created_date` datetime NOT NULL,
  `created_by` int DEFAULT NULL,
  `edited_by` int DEFAULT NULL,
  PRIMARY KEY (`banner_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='Framework Table';

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
  `job_title` varchar(300) DEFAULT NULL,
  `job_description` mediumtext,
  `posts` int DEFAULT NULL,
  `status` int NOT NULL DEFAULT '1' COMMENT '0=Inactive,1=Active',
  `salary` int NOT NULL DEFAULT '0',
  `location` varchar(100) NOT NULL DEFAULT '',
  `sequence_no` int NOT NULL DEFAULT '1',
  `created_date` datetime NOT NULL,
  `created_by` int DEFAULT NULL,
  `edited_date` datetime NOT NULL,
  `edited_by` int DEFAULT NULL,
  `job_type` int DEFAULT '0',
  `work_mode` int DEFAULT '0',
  `hr_contact` varchar(100) DEFAULT '',
  PRIMARY KEY (`career_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='Framework Table';

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
  `page_name` varchar(100) DEFAULT NULL,
  `page_title` mediumtext,
  `page_content` mediumtext,
  `created_date` datetime NOT NULL,
  `edited_date` datetime NOT NULL,
  `created_by` int NOT NULL,
  `edited_by` datetime DEFAULT NULL,
  `meta_keywords` mediumtext,
  `meta_description` mediumtext,
  `meta_robots` varchar(100) NOT NULL DEFAULT 'index,follow',
  `sequence_no` int NOT NULL DEFAULT '1',
  `menu` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`cms_id`)
) ENGINE=InnoDB AUTO_INCREMENT=130 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='Framework Table';

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

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `comment_id` int NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `post_id` int NOT NULL,
  `content` text NOT NULL,
  `web_user_id` int NOT NULL COMMENT 'pk of web user table',
  `created_date` datetime NOT NULL,
  `edited_date` datetime NOT NULL,
  `created_by` int NOT NULL,
  `edited_by` int DEFAULT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='Framework Table';

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

DROP TABLE IF EXISTS `config`;
CREATE TABLE IF NOT EXISTS `config` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(300) NOT NULL,
  `value` mediumtext,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='Framework Table';

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
  `name` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `email` varchar(300) NOT NULL,
  `purpose` varchar(200) NOT NULL,
  `subject` varchar(200) DEFAULT NULL,
  `message` mediumtext NOT NULL,
  `created_date` datetime DEFAULT NULL,
  `edited_date` datetime DEFAULT NULL,
  `sequence_no` int DEFAULT '1',
  `created_by` int NOT NULL,
  `edited_by` datetime DEFAULT NULL,
  `service_name` mediumtext,
  PRIMARY KEY (`enquiry_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='Framework Table';

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
  `title` varchar(300) DEFAULT NULL,
  `sequence_no` int DEFAULT NULL,
  `created_date` date DEFAULT NULL,
  `status` int NOT NULL,
  `edited_date` date DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `edited_by` datetime DEFAULT NULL,
  PRIMARY KEY (`gallery_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='Framework Table';

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
  `image` mediumtext NOT NULL,
  `sequence_no` int DEFAULT NULL,
  `created_date` date DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `edited_by` datetime DEFAULT NULL,
  `edited_date` date DEFAULT NULL,
  `title` mediumtext,
  PRIMARY KEY (`image_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='Framework Table';

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
  `name` varchar(250) DEFAULT NULL,
  `mobile` varchar(100) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `resume` mediumtext,
  `created_date` datetime DEFAULT NULL,
  PRIMARY KEY (`application_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='Framework Table';

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
  `template` varchar(300) NOT NULL,
  `subject` mediumtext NOT NULL,
  `from_name` varchar(300) NOT NULL,
  `from_email` varchar(100) NOT NULL,
  `bcc` varchar(100) NOT NULL,
  `cc` varchar(100) NOT NULL,
  `message` mediumtext NOT NULL,
  `type` enum('sms','email') NOT NULL DEFAULT 'sms',
  `sequence_id` int DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `created_date` date DEFAULT NULL,
  `edited_date` datetime DEFAULT NULL,
  `edited_by` int DEFAULT NULL,
  PRIMARY KEY (`template_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='Framework Table';

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
  `title` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `module_id` int NOT NULL AUTO_INCREMENT,
  `is_module` int NOT NULL DEFAULT '1',
  `group_id` int NOT NULL,
  `sequence_no` int NOT NULL DEFAULT '0',
  `url` text NOT NULL,
  `icon` varchar(200) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `edited_date` date DEFAULT NULL,
  `created_date` date DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `edited_by` int DEFAULT NULL,
  `module_table` varchar(250) DEFAULT NULL,
  `module_table_pk` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`module_id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='Framework Table';

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
  `title` varchar(100) NOT NULL,
  `selected_id` varchar(100) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `sequence_no` int NOT NULL DEFAULT '1',
  `created_date` datetime DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `edited_date` datetime DEFAULT NULL,
  `edited_by` int DEFAULT NULL,
  PRIMARY KEY (`group_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='Framework Table';

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
  `section` enum('header','body','sidebar','footer') NOT NULL DEFAULT 'body',
  `name` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `created_date` date DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `edited_date` date DEFAULT NULL,
  `edited_by` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
  `title` text NOT NULL,
  `slug` varchar(150) NOT NULL,
  `featured_image` text NOT NULL,
  `content` text NOT NULL,
  `short_description` varchar(150) NOT NULL,
  `tag` text NOT NULL,
  `view_count` int NOT NULL,
  `category_id` int NOT NULL,
  `created_date` datetime NOT NULL,
  `edited_date` datetime NOT NULL,
  `created_by` int NOT NULL,
  `edited_by` int DEFAULT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='Framework Table';

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
  `title` varchar(50) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `edited_date` datetime DEFAULT NULL,
  `created_by` int NOT NULL,
  `edited_by` int DEFAULT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='Framework Table';

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
  `image` text,
  `title` varchar(250) DEFAULT NULL,
  `demo_url` text,
  `username` varchar(120) DEFAULT NULL,
  `password` varchar(120) DEFAULT NULL,
  `description` text NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `edited_date` datetime NOT NULL,
  `created_date` datetime NOT NULL,
  `sequence_no` int NOT NULL DEFAULT '1',
  `created_by` int DEFAULT NULL,
  `edited_by` datetime DEFAULT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb3 COMMENT='Framework Table';

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
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`subscriber_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='Framework Table';

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
  `name` varchar(100) NOT NULL,
  `video_url` varchar(300) NOT NULL,
  `message` mediumtext NOT NULL,
  `created_date` datetime DEFAULT NULL,
  `edited_date` datetime DEFAULT NULL,
  `created_by` int NOT NULL,
  `edited_by` int NOT NULL,
  `sequence_no` int NOT NULL,
  `image` mediumtext,
  PRIMARY KEY (`testimonial_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='Framework Table';

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
  `name` varchar(300) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `email` varchar(300) NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `photo` text NOT NULL,
  `quote` varchar(200) NOT NULL,
  `created_date` date DEFAULT NULL,
  `edited_date` date DEFAULT NULL,
  `created_by` int NOT NULL,
  `edited_by` datetime DEFAULT NULL,
  `sequence_no` int NOT NULL DEFAULT '1',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='Framework Table';

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
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='Framework Table';

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
  `role` varchar(100) NOT NULL,
  `created_date` datetime DEFAULT NULL,
  `edited_date` datetime DEFAULT NULL,
  `created_by` int NOT NULL DEFAULT '0',
  `edited_by` datetime DEFAULT NULL,
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='Framework Table';

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
  `title` varchar(300) DEFAULT NULL,
  `link` text,
  `status` int NOT NULL DEFAULT '1' COMMENT '0=Inactive,1=Active',
  `edited_date` datetime NOT NULL,
  `created_date` datetime NOT NULL,
  `sequence_no` int NOT NULL DEFAULT '1',
  `created_by` int DEFAULT NULL,
  `edited_by` datetime DEFAULT NULL,
  PRIMARY KEY (`video_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='Framework Table';

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
