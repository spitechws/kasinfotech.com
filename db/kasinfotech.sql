-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2023 at 12:54 PM
-- Server version: 10.5.19-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u440197273_kasinfotech`
--

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Framework Table';

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Framework Table';

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Framework Table';

--
-- Dumping data for table `cms`
--

INSERT INTO `cms` (`cms_id`, `page_name`, `page_title`, `page_content`, `created_date`, `edited_date`, `created_by`, `edited_by`, `meta_keywords`, `meta_description`, `meta_robots`, `sequence_no`, `menu`) VALUES
(1, 'index', 'KAS INFO TECH', '', '2023-06-07 15:01:37', '2023-06-07 15:01:37', 1, NULL, 'KAS INFO TECH', 'KAS INFO TECH', 'index,follow', 1, ''),
(2, 'about-us', 'About Us', '', '2023-06-08 05:43:38', '2023-06-08 05:43:38', 1, NULL, 'KAS INFO TECH', 'KAS INFO TECH', 'index,follow', 1, 'about-us'),
(3, 'contact', 'KAS INFO TECH', '', '2023-06-08 05:43:51', '2023-06-10 08:53:18', 1, '0000-00-00 00:00:00', 'KAS INFO TECH', 'KAS INFO TECH', 'index,follow', 1, 'contact-us'),
(4, 'privacy-policy', 'KAS INFO TECH', '<h1>Privacy Policy</h1>\r\n\r\n<p>Last updated: June 08, 2023</p>\r\n\r\n<p>This Privacy Policy describes Our policies and procedures on the collection, use and disclosure of Your information when You use the Service and tells You about Your privacy rights and how the law protects You.</p>\r\n\r\n<p>We use Your Personal data to provide and improve the Service. By using the Service, You agree to the collection and use of information in accordance with this Privacy Policy.</p>\r\n\r\n<h1>Interpretation and Definitions</h1>\r\n\r\n<h2>Interpretation</h2>\r\n\r\n<p>The words of which the initial letter is capitalized have meanings defined under the following conditions. The following definitions shall have the same meaning regardless of whether they appear in singular or in plural.</p>\r\n\r\n<h2>Definitions</h2>\r\n\r\n<p>For the purposes of this Privacy Policy:</p>\r\n\r\n<ul>\r\n <li>\r\n <p><strong>Account</strong> means a unique account created for You to access our Service or parts of our Service.</p>\r\n </li>\r\n <li>\r\n <p><strong>Affiliate</strong> means an entity that controls, is controlled by or is under common control with a party, where \"control\" means ownership of 50% or more of the shares, equity interest or other securities entitled to vote for election of directors or other managing authority.</p>\r\n </li>\r\n <li>\r\n <p><strong>Company</strong> (referred to as either \"the Company\", \"We\", \"Us\" or \"Our\" in this Agreement) refers to KAS InfoTech Pvt. Ltd., HNo 3-6-54/3 Vivekananda Nagar, Kukatpally. Hyderabad, Telangana ,India 500072.</p>\r\n </li>\r\n <li>\r\n <p><strong>Cookies</strong> are small files that are placed on Your computer, mobile device or any other device by a website, containing the details of Your browsing history on that website among its many uses.</p>\r\n </li>\r\n <li>\r\n <p><strong>Country</strong> refers to: Telangana, India</p>\r\n </li>\r\n <li>\r\n <p><strong>Device</strong> means any device that can access the Service such as a computer, a cellphone or a digital tablet.</p>\r\n </li>\r\n <li>\r\n <p><strong>Personal Data</strong> is any information that relates to an identified or identifiable individual.</p>\r\n </li>\r\n <li>\r\n <p><strong>Service</strong> refers to the Website.</p>\r\n </li>\r\n <li>\r\n <p><strong>Service Provider</strong> means any natural or legal person who processes the data on behalf of the Company. It refers to third-party companies or individuals employed by the Company to facilitate the Service, to provide the Service on behalf of the Company, to perform services related to the Service or to assist the Company in analyzing how the Service is used.</p>\r\n </li>\r\n <li>\r\n <p><strong>Usage Data</strong> refers to data collected automatically, either generated by the use of the Service or from the Service infrastructure itself (for example, the duration of a page visit).</p>\r\n </li>\r\n <li>\r\n <p><strong>Website</strong> refers to KAS InfoTech, accessible from <a href=\"https://kasinfotech.com/\" rel=\"external nofollow noopener\" target=\"_blank\">https://kasinfotech.com/</a></p>\r\n </li>\r\n <li>\r\n <p><strong>You</strong> means the individual accessing or using the Service, or the company, or other legal entity on behalf of which such individual is accessing or using the Service, as applicable.</p>\r\n </li>\r\n</ul>\r\n\r\n<h1>Collecting and Using Your Personal Data</h1>\r\n\r\n<h2>Types of Data Collected</h2>\r\n\r\n<h3>Personal Data</h3>\r\n\r\n<p>While using Our Service, We may ask You to provide Us with certain personally identifiable information that can be used to contact or identify You. Personally identifiable information may include, but is not limited to:</p>\r\n\r\n<ul>\r\n <li>\r\n <p>Email address</p>\r\n </li>\r\n <li>\r\n <p>First name and last name</p>\r\n </li>\r\n <li>\r\n <p>Phone number</p>\r\n </li>\r\n <li>\r\n <p>Usage Data</p>\r\n </li>\r\n</ul>\r\n\r\n<h3>Usage Data</h3>\r\n\r\n<p>Usage Data is collected automatically when using the Service.</p>\r\n\r\n<p>Usage Data may include information such as Your Device&#39;s Internet Protocol address (e.g. IP address), browser type, browser version, the pages of our Service that You visit, the time and date of Your visit, the time spent on those pages, unique device identifiers and other diagnostic data.</p>\r\n\r\n<p>When You access the Service by or through a mobile device, We may collect certain information automatically, including, but not limited to, the type of mobile device You use, Your mobile device unique ID, the IP address of Your mobile device, Your mobile operating system, the type of mobile Internet browser You use, unique device identifiers and other diagnostic data.</p>\r\n\r\n<p>We may also collect information that Your browser sends whenever You visit our Service or when You access the Service by or through a mobile device.</p>\r\n\r\n<h3>Tracking Technologies and Cookies</h3>\r\n\r\n<p>We use Cookies and similar tracking technologies to track the activity on Our Service and store certain information. Tracking technologies used are beacons, tags, and scripts to collect and track information and to improve and analyze Our Service. The technologies We use may include:</p>\r\n\r\n<ul>\r\n <li><strong>Cookies or Browser Cookies.</strong> A cookie is a small file placed on Your Device. You can instruct Your browser to refuse all Cookies or to indicate when a Cookie is being sent. However, if You do not accept Cookies, You may not be able to use some parts of our Service. Unless you have adjusted Your browser setting so that it will refuse Cookies, our Service may use Cookies.</li>\r\n <li><strong>Web Beacons.</strong> Certain sections of our Service and our emails may contain small electronic files known as web beacons (also referred to as clear gifs, pixel tags, and single-pixel gifs) that permit the Company, for example, to count users who have visited those pages or opened an email and for other related website statistics (for example, recording the popularity of a certain section and verifying system and server integrity).</li>\r\n</ul>\r\n\r\n<p>Cookies can be \"Persistent\" or \"Session\" Cookies. Persistent Cookies remain on Your personal computer or mobile device when You go offline, while Session Cookies are deleted as soon as You close Your web browser. Learn more about cookies on the <a href=\"https://www.freeprivacypolicy.com/blog/sample-privacy-policy-template/#Use_Of_Cookies_And_Tracking\" target=\"_blank\">Free Privacy Policy website</a> article.</p>\r\n\r\n<p>We use both Session and Persistent Cookies for the purposes set out below:</p>\r\n\r\n<ul>\r\n <li>\r\n <p><strong>Necessary / Essential Cookies</strong></p>\r\n\r\n <p>Type: Session Cookies</p>\r\n\r\n <p>Administered by: Us</p>\r\n\r\n <p>Purpose: These Cookies are essential to provide You with services available through the Website and to enable You to use some of its features. They help to authenticate users and prevent fraudulent use of user accounts. Without these Cookies, the services that You have asked for cannot be provided, and We only use these Cookies to provide You with those services.</p>\r\n </li>\r\n <li>\r\n <p><strong>Cookies Policy / Notice Acceptance Cookies</strong></p>\r\n\r\n <p>Type: Persistent Cookies</p>\r\n\r\n <p>Administered by: Us</p>\r\n\r\n <p>Purpose: These Cookies identify if users have accepted the use of cookies on the Website.</p>\r\n </li>\r\n <li>\r\n <p><strong>Functionality Cookies</strong></p>\r\n\r\n <p>Type: Persistent Cookies</p>\r\n\r\n <p>Administered by: Us</p>\r\n\r\n <p>Purpose: These Cookies allow us to remember choices You make when You use the Website, such as remembering your login details or language preference. The purpose of these Cookies is to provide You with a more personal experience and to avoid You having to re-enter your preferences every time You use the Website.</p>\r\n </li>\r\n</ul>\r\n\r\n<p>For more information about the cookies we use and your choices regarding cookies, please visit our Cookies Policy or the Cookies section of our Privacy Policy.</p>\r\n\r\n<h2>Use of Your Personal Data</h2>\r\n\r\n<p>The Company may use Personal Data for the following purposes:</p>\r\n\r\n<ul>\r\n <li>\r\n <p><strong>To provide and maintain our Service</strong>, including to monitor the usage of our Service.</p>\r\n </li>\r\n <li>\r\n <p><strong>To manage Your Account:</strong> to manage Your registration as a user of the Service. The Personal Data You provide can give You access to different functionalities of the Service that are available to You as a registered user.</p>\r\n </li>\r\n <li>\r\n <p><strong>For the performance of a contract:</strong> the development, compliance and undertaking of the purchase contract for the products, items or services You have purchased or of any other contract with Us through the Service.</p>\r\n </li>\r\n <li>\r\n <p><strong>To contact You:</strong> To contact You by email, telephone calls, SMS, or other equivalent forms of electronic communication, such as a mobile application&#39;s push notifications regarding updates or informative communications related to the functionalities, products or contracted services, including the security updates, when necessary or reasonable for their implementation.</p>\r\n </li>\r\n <li>\r\n <p><strong>To provide You</strong> with news, special offers and general information about other goods, services and events which we offer that are similar to those that you have already purchased or enquired about unless You have opted not to receive such information.</p>\r\n </li>\r\n <li>\r\n <p><strong>To manage Your requests:</strong> To attend and manage Your requests to Us.</p>\r\n </li>\r\n <li>\r\n <p><strong>For business transfers:</strong> We may use Your information to evaluate or conduct a merger, divestiture, restructuring, reorganization, dissolution, or other sale or transfer of some or all of Our assets, whether as a going concern or as part of bankruptcy, liquidation, or similar proceeding, in which Personal Data held by Us about our Service users is among the assets transferred.</p>\r\n </li>\r\n <li>\r\n <p><strong>For other purposes</strong>: We may use Your information for other purposes, such as data analysis, identifying usage trends, determining the effectiveness of our promotional campaigns and to evaluate and improve our Service, products, services, marketing and your experience.</p>\r\n </li>\r\n</ul>\r\n\r\n<p>We may share Your personal information in the following situations:</p>\r\n\r\n<ul>\r\n <li><strong>With Service Providers:</strong> We may share Your personal information with Service Providers to monitor and analyze the use of our Service, to contact You.</li>\r\n <li><strong>For business transfers:</strong> We may share or transfer Your personal information in connection with, or during negotiations of, any merger, sale of Company assets, financing, or acquisition of all or a portion of Our business to another company.</li>\r\n <li><strong>With Affiliates:</strong> We may share Your information with Our affiliates, in which case we will require those affiliates to honor this Privacy Policy. Affiliates include Our parent company and any other subsidiaries, joint venture partners or other companies that We control or that are under common control with Us.</li>\r\n <li><strong>With business partners:</strong> We may share Your information with Our business partners to offer You certain products, services or promotions.</li>\r\n <li><strong>With other users:</strong> when You share personal information or otherwise interact in the public areas with other users, such information may be viewed by all users and may be publicly distributed outside.</li>\r\n <li><strong>With Your consent</strong>: We may disclose Your personal information for any other purpose with Your consent.</li>\r\n</ul>\r\n\r\n<h2>Retention of Your Personal Data</h2>\r\n\r\n<p>The Company will retain Your Personal Data only for as long as is necessary for the purposes set out in this Privacy Policy. We will retain and use Your Personal Data to the extent necessary to comply with our legal obligations (for example, if we are required to retain your data to comply with applicable laws), resolve disputes, and enforce our legal agreements and policies.</p>\r\n\r\n<p>The Company will also retain Usage Data for internal analysis purposes. Usage Data is generally retained for a shorter period of time, except when this data is used to strengthen the security or to improve the functionality of Our Service, or We are legally obligated to retain this data for longer time periods.</p>\r\n\r\n<h2>Transfer of Your Personal Data</h2>\r\n\r\n<p>Your information, including Personal Data, is processed at the Company&#39;s operating offices and in any other places where the parties involved in the processing are located. It means that this information may be transferred to — and maintained on — computers located outside of Your state, province, country or other governmental jurisdiction where the data protection laws may differ than those from Your jurisdiction.</p>\r\n\r\n<p>Your consent to this Privacy Policy followed by Your submission of such information represents Your agreement to that transfer.</p>\r\n\r\n<p>The Company will take all steps reasonably necessary to ensure that Your data is treated securely and in accordance with this Privacy Policy and no transfer of Your Personal Data will take place to an organization or a country unless there are adequate controls in place including the security of Your data and other personal information.</p>\r\n\r\n<h2>Delete Your Personal Data</h2>\r\n\r\n<p>You have the right to delete or request that We assist in deleting the Personal Data that We have collected about You.</p>\r\n\r\n<p>Our Service may give You the ability to delete certain information about You from within the Service.</p>\r\n\r\n<p>You may update, amend, or delete Your information at any time by signing in to Your Account, if you have one, and visiting the account settings section that allows you to manage Your personal information. You may also contact Us to request access to, correct, or delete any personal information that You have provided to Us.</p>\r\n\r\n<p>Please note, however, that We may need to retain certain information when we have a legal obligation or lawful basis to do so.</p>\r\n\r\n<h2>Disclosure of Your Personal Data</h2>\r\n\r\n<h3>Business Transactions</h3>\r\n\r\n<p>If the Company is involved in a merger, acquisition or asset sale, Your Personal Data may be transferred. We will provide notice before Your Personal Data is transferred and becomes subject to a different Privacy Policy.</p>\r\n\r\n<h3>Law enforcement</h3>\r\n\r\n<p>Under certain circumstances, the Company may be required to disclose Your Personal Data if required to do so by law or in response to valid requests by public authorities (e.g. a court or a government agency).</p>\r\n\r\n<h3>Other legal requirements</h3>\r\n\r\n<p>The Company may disclose Your Personal Data in the good faith belief that such action is necessary to:</p>\r\n\r\n<ul>\r\n <li>Comply with a legal obligation</li>\r\n <li>Protect and defend the rights or property of the Company</li>\r\n <li>Prevent or investigate possible wrongdoing in connection with the Service</li>\r\n <li>Protect the personal safety of Users of the Service or the public</li>\r\n <li>Protect against legal liability</li>\r\n</ul>\r\n\r\n<h2>Security of Your Personal Data</h2>\r\n\r\n<p>The security of Your Personal Data is important to Us, but remember that no method of transmission over the Internet, or method of electronic storage is 100% secure. While We strive to use commercially acceptable means to protect Your Personal Data, We cannot guarantee its absolute security.</p>\r\n\r\n<h1>Children&#39;s Privacy</h1>\r\n\r\n<p>Our Service does not address anyone under the age of 13. We do not knowingly collect personally identifiable information from anyone under the age of 13. If You are a parent or guardian and You are aware that Your child has provided Us with Personal Data, please contact Us. If We become aware that We have collected Personal Data from anyone under the age of 13 without verification of parental consent, We take steps to remove that information from Our servers.</p>\r\n\r\n<p>If We need to rely on consent as a legal basis for processing Your information and Your country requires consent from a parent, We may require Your parent&#39;s consent before We collect and use that information.</p>\r\n\r\n<h1>Links to Other Websites</h1>\r\n\r\n<p>Our Service may contain links to other websites that are not operated by Us. If You click on a third party link, You will be directed to that third party&#39;s site. We strongly advise You to review the Privacy Policy of every site You visit.</p>\r\n\r\n<p>We have no control over and assume no responsibility for the content, privacy policies or practices of any third party sites or services.</p>\r\n\r\n<h1>Changes to this Privacy Policy</h1>\r\n\r\n<p>We may update Our Privacy Policy from time to time. We will notify You of any changes by posting the new Privacy Policy on this page.</p>\r\n\r\n<p>We will let You know via email and/or a prominent notice on Our Service, prior to the change becoming effective and update the \"Last updated\" date at the top of this Privacy Policy.</p>\r\n\r\n<p>You are advised to review this Privacy Policy periodically for any changes. Changes to this Privacy Policy are effective when they are posted on this page.</p>\r\n\r\n<h1>Contact Us</h1>\r\n\r\n<p>If you have any questions about this Privacy Policy, You can contact us:</p>\r\n\r\n<ul>\r\n <li>\r\n <p>By email: info@kasinfotech.com</p>\r\n </li>\r\n <li>\r\n <p>By visiting this page on our website: <a href=\"https://kasinfotech.com/contact-us\" rel=\"external nofollow noopener\" target=\"_blank\">https://kasinfotech.com/contact-us</a></p>\r\n </li>\r\n <li>\r\n <p>By phone number: 6300873412</p>\r\n </li>\r\n <li>\r\n <p>By mail: no-reply@kasinfotech.com</p>\r\n </li>\r\n</ul>', '2023-06-08 05:44:06', '2023-06-08 06:34:32', 1, '0000-00-00 00:00:00', 'KAS INFO TECH', 'KAS INFO TECH', 'index,follow', 1, 'privacy-policy'),
(5, 'terms-and-conidtions', 'Terms and Conidtions', '', '2023-06-08 05:44:40', '2023-06-08 05:44:40', 1, NULL, 'KAS INFO TECH', 'KAS INFO TECH', 'index,follow', 1, 'terms-and-conidtions'),
(6, 'blog', 'KAS INFO TECH', '', '2023-06-10 08:52:51', '2023-06-10 08:52:51', 1, NULL, 'KAS INFO TECH', 'KAS INFO TECH', 'index,follow', 1, '');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Framework Table';

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

CREATE TABLE `config` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `value` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Framework Table';

--
-- Dumping data for table `config`
--

INSERT INTO `config` (`id`, `name`, `value`) VALUES
(1, 'site_name', 'KAS INFO TECH'),
(2, 'site_url', 'http://aareality.in/'),
(3, 'site_email', 'info@kasinfotech.com'),
(7, 'date_format', 'm/d/Y'),
(8, 'site_logo', 'MicrosoftTeams-image_(3).png'),
(9, 'site_favicon', 'MicrosoftTeams-image_(1).png'),
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
(28, 'language', NULL),
(29, 'facebook', 'https://www.facebook.com/KASPvtLtd/'),
(30, 'twitter', 'https://twitter.com/kas_ltd98324'),
(31, 'instagram', 'https://www.instagram.com/kas_pvtltd/ '),
(32, 'linkedin', 'https://www.linkedin.com/in/krishnaarjun-sankalp-pvt-ltd-16731927a/'),
(33, 'youtube', ''),
(38, 'record_limit', '100'),
(39, 'bulk_sms_param_value1', ''),
(40, 'bulk_sms_param_value2', ''),
(41, 'bulk_sms_param_value3', ''),
(42, 'bulk_sms_param_value4', ''),
(43, 'bulk_sms_param_value5', 'dsfds'),
(44, 'bulk_sms_param_value6', 'dsfdsfds'),
(45, 'site_contact', '6300873412'),
(46, 'site_address', 'HNo 3-6-54/3 Vivekananda Nagar, \r\nKukatpally. Hyderabad, \r\nTelangana, India-500072'),
(47, 'is_multilingual', NULL),
(48, 'is_suspended', '0'),
(49, 'is_underconstruction', '0'),
(50, 'site_theme', 'kasinfotech'),
(51, 'datetime_format', 'd/M/Y g:i A'),
(52, 'logo_height', '80'),
(53, 'logo_width', '150'),
(54, 'copyright_text', '@KAS Infotech - All Rights Reserved'),
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

CREATE TABLE `enquiry` (
  `id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `email` varchar(300) NOT NULL,
  `message` mediumtext NOT NULL,
  `created_date` datetime DEFAULT NULL,
  `edited_date` datetime DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `edited_by` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Framework Table';

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`id`, `service_id`, `name`, `mobile`, `email`, `message`, `created_date`, `edited_date`, `created_by`, `edited_by`) VALUES
(6, 0, 'rahul.soni@spitech.in', '7878787878', 'rahul.soni@spitech.in', 'hii ji', '2021-12-14 07:33:48', NULL, 0, NULL),
(7, 0, 'Rahul', '7878787878', 'rahul.soni@spitech.in', 'hey', '2021-12-17 05:18:43', NULL, 0, NULL);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Framework Table';

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Framework Table';

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Framework Table';

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Framework Table';

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
  `title` varchar(200) NOT NULL,
  `module_id` int(11) NOT NULL,
  `is_module` int(11) NOT NULL DEFAULT 1,
  `group_id` int(11) NOT NULL,
  `sequence_no` int(11) NOT NULL DEFAULT 0,
  `url` text NOT NULL,
  `icon` varchar(200) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `edited_date` date DEFAULT NULL,
  `created_date` date DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `edited_by` int(11) DEFAULT NULL,
  `module_table` varchar(250) DEFAULT NULL,
  `module_table_pk` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Framework Table';

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Framework Table';

--
-- Dumping data for table `module_group`
--

INSERT INTO `module_group` (`group_id`, `title`, `selected_id`, `icon`, `sequence_no`, `created_date`, `created_by`, `edited_date`, `edited_by`) VALUES
(8, 'Modules', 'modules', 'glyphicon glyphicon-dashboard', 4, NULL, NULL, NULL, NULL);

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `featured_image` text NOT NULL,
  `content` text NOT NULL,
  `short_description` varchar(150) NOT NULL,
  `tag` text NOT NULL,
  `view_count` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `edited_date` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `edited_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Framework Table';

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Framework Table';

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

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `image` mediumtext DEFAULT NULL,
  `title` varchar(250) DEFAULT NULL,
  `demo_url` mediumtext DEFAULT NULL,
  `username` varchar(120) DEFAULT NULL,
  `password` varchar(120) DEFAULT NULL,
  `description` mediumtext NOT NULL,
  `slug` text DEFAULT NULL,
  `edited_date` datetime NOT NULL,
  `created_date` datetime NOT NULL,
  `sequence_no` int(11) NOT NULL DEFAULT 1,
  `created_by` int(11) DEFAULT NULL,
  `edited_by` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Framework Table';

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `image`, `title`, `demo_url`, `username`, `password`, `description`, `slug`, `edited_date`, `created_date`, `sequence_no`, `created_by`, `edited_by`) VALUES
(4, 'google-logo-9808.png', NULL, NULL, NULL, NULL, '<h2>Where can I get some?</h2>\r\n\r\n<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure the</p>', '1', '2022-06-04 15:14:53', '2022-06-01 18:22:43', 1, 1, '0000-00-00 00:00:00'),
(7, '6.jpg', NULL, NULL, NULL, NULL, '<h2>Where can I get some?</h2>\r\n\r\n<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure the</p>', '1', '2022-06-01 18:24:49', '2022-06-01 18:24:49', 1, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subscriber`
--

CREATE TABLE `subscriber` (
  `subscriber_id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Framework Table';

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

CREATE TABLE `testimonial` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `video_url` varchar(300) DEFAULT NULL,
  `message` mediumtext NOT NULL,
  `created_date` datetime DEFAULT NULL,
  `edited_date` datetime DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `edited_by` int(11) NOT NULL,
  `sequence_no` int(11) NOT NULL,
  `image` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Framework Table';

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `name`, `video_url`, `message`, `created_date`, `edited_date`, `created_by`, `edited_by`, `sequence_no`, `image`) VALUES
(1, 'Abhishek', 'KcWcu1ytazY', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that i', '2021-11-24 12:39:10', '2022-06-02 10:28:21', 1, 1, 0, 'staff-21.jpg'),
(2, 'sita ram', 'Go8nTmfrQd8', '“Let me tell you the story of the space viking, Thor Odinson…”\r\n\r\nWatch the brand-new trailer for Marvel Studios’ Thor: Love and Thunder and witness it only in theaters July 8.', '2022-06-02 10:32:53', '2022-06-02 10:32:53', 1, 0, 0, '2.jpg');

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
  `status` int(11) NOT NULL DEFAULT 1,
  `photo` text NOT NULL,
  `quote` varchar(200) NOT NULL,
  `created_date` date DEFAULT NULL,
  `edited_date` date DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `edited_by` datetime DEFAULT NULL,
  `sequence_no` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Framework Table';

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Framework Table';

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Framework Table';

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Framework Table';

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`video_id`, `title`, `link`, `status`, `edited_date`, `created_date`, `sequence_no`, `created_by`, `edited_by`) VALUES
(1, 'New Video', 'tbbveDpUZv4', 1, '2022-06-03 15:59:10', '2022-06-03 15:59:10', 1, 1, NULL),
(2, 'vd', '5Eqb_-j3FDA', 1, '2022-06-03 16:13:17', '2022-06-03 16:13:17', 1, 1, NULL),
(3, 'ee', '5Eqb_-j3FDA', 1, '2022-06-03 16:14:28', '2022-06-03 16:14:28', 1, 1, NULL);

--
-- Indexes for dumped tables
--

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
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscriber`
--
ALTER TABLE `subscriber`
  ADD PRIMARY KEY (`subscriber_id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for dumped tables
--

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
  MODIFY `cms_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `subscriber`
--
ALTER TABLE `subscriber`
  MODIFY `subscriber_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
