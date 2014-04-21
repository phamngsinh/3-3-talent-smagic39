-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 20, 2014 at 03:48 PM
-- Server version: 5.1.71
-- PHP Version: 5.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `33talent`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customers`
--

CREATE TABLE IF NOT EXISTS `tbl_customers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `age` tinyint(4) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `city` varchar(200) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `nric` varchar(15) DEFAULT NULL,
  `mobile_number` varchar(20) DEFAULT NULL,
  `landline_number` varchar(20) DEFAULT NULL,
  `timezone` varchar(10) DEFAULT NULL,
  `url` tinytext,
  `visits` int(11) DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `is_active` tinyint(4) DEFAULT NULL,
  `userid` varchar(200) DEFAULT NULL,
  `username` varchar(200) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `first_name` varchar(200) DEFAULT NULL,
  `last_name` varchar(200) DEFAULT NULL,
  `location` varchar(200) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `unique_key` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_debate`
--

CREATE TABLE IF NOT EXISTS `tbl_debate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `debate_title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `favour_user_name` varchar(255) NOT NULL,
  `favour_user_image` varchar(255) NOT NULL,
  `favour_title` varchar(255) NOT NULL,
  `favour_video` text NOT NULL,
  `favour_video_2` varchar(255) NOT NULL,
  `favour_image` varchar(255) NOT NULL,
  `favour_description` text NOT NULL,
  `against_user_name` varchar(255) NOT NULL,
  `against_user_image` varchar(255) NOT NULL,
  `against_title` varchar(255) NOT NULL,
  `against_description` text NOT NULL,
  `against_video` varchar(255) NOT NULL,
  `against_video_2` varchar(255) NOT NULL,
  `against_image` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `start_date` varchar(255) NOT NULL,
  `expire_date` varchar(255) NOT NULL,
  `is_featured` varchar(255) NOT NULL DEFAULT 'normal',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `tbl_debate`
--

INSERT INTO `tbl_debate` (`id`, `debate_title`, `image`, `favour_user_name`, `favour_user_image`, `favour_title`, `favour_video`, `favour_video_2`, `favour_image`, `favour_description`, `against_user_name`, `against_user_image`, `against_title`, `against_description`, `against_video`, `against_video_2`, `against_image`, `ip_address`, `start_date`, `expire_date`, `is_featured`) VALUES
(10, 'In this digital social era CMOs should be under 35', '830216011-1359689109.jpg', 'Lucy McCabe', '869517904-1366826367.png', 'Lucy McCabe: Born digital v learnt digital', '<iframe width="306" height="187" src="http://www.youtube.com/embed/tyDGCJDZNZw?rel=0" frameborder="0" allowfullscreen></iframe>', '', '1264129306-1359536602.png', 'CMOs should be future looking and over 35 it''s harder to relate to consumers that grew up in the digital era.  Everyone under 35 has grown up digital, whereas over 35 we''ve had to learn digital.', 'Chris Reitermann', '1002439940-1366963890.png', 'Chris Reitermann: Experience outweighs age', 'You need to be connected but you don''t have to be young or the target audience to do the job.\r\nI know 50 and 60 year olds who are at the top of their game!', '<iframe width="306" height="187" src="http://www.youtube.com/embed/qkftku_NON8?rel=0" frameborder="0" allowfullscreen></iframe>', '', '411528528-1359536672.png', '', '2013-01-30', '2013-02-26', 'normal'),
(17, 'China will get old before it gets rich', '708691771-1362733642.jpg', 'Paul French', '2132953223-1366964439.png', 'Paul French - Chief China Markets Strategist, Mintel', '<iframe width="306" height="187" src="http://www.youtube.com/embed/IqpyM-lLi8o" frameborder="0" allowfullscreen></iframe>', '', '1320771110-1366813701.png', 'In 10 years the population of Chinese over 80 rose from 12 to 20 mil. Savings of the young will be stretched to breaking point caring for their parents. Skewing the economy to pay for the demographic time bomb!', 'Mickey Chak', '767519947-1366970991.png', 'Mickey Chak - Chief Planning Officer, Ogilvy China', 'The aging problem is a global issue. Recent reports  show that the Chinese ''affluent class'' is the youngest in the world. As China gets older, its getting richer.', '<iframe width="306" height="187" src="http://www.youtube.com/embed/8PgQXAWbcJA" frameborder="0" allowfullscreen></iframe>', '', '637360174-1366813701.png', '', '2013-03-08', '2013-04-04', 'normal'),
(18, 'Fools rush in. Foreign companies are too quick to enter Myanmar', '291043944-1365484586.jpg', 'Sumana Rajarethnam', '278180200-1367834416.png', 'Sumana Rajarethnam - Senior Analyst, Economist Intelligence Unit', '<iframe width="306" height="187" src="http://www.youtube.com/embed/bwFtMJCyXaY" frameborder="0" allowfullscreen></iframe>', '', '', 'Myanmar is a difficult place to do business.  It''s difficult to bring money in, it''s not a full democracy, it''s one of the poorest countries, there is endemic corruption and ethnic conflict.', 'John Goodman', '931083572-1367834416.png', 'John Goodman - President OgilvyAction, Asia Pacific', 'Burma was the most prosperous country in SE Asia after WW2. With 60 million people and abundant resources, it would be mad to ignore the opportunity.\r\nCompanies not going in now will forever be playing catch-up with the competition.\r\n', '<iframe width="306" height="187" src="http://www.youtube.com/embed/vqcK6swdXq0" frameborder="0" allowfullscreen></iframe>', '', '', '', '2013-05-02', '2013-05-05', 'normal'),
(23, 'Green washing is better than green nothing', '', 'Thomas Kolster', '1713623473-1367902340.png', 'Thomas Kolster, Founder of the Goodvertising Agency', '<iframe width="306" height="187" src="http://www.youtube.com/embed/GJUBd8d3pSQ" frameborder="0" allowfullscreen></iframe>', '', '1606575604-1367900638.png', 'Greenwashing can serve a purpose. For many brands it’s the first tentative step in the right direction. Every company/brand should start speaking up for a more sustainable future. ', 'Andrew Ure', '76127975-1367902496.png', 'Andrew Ure, Managing Director, OgilvyEarth, Sydney', 'It''s better to do nothing than greenwash - which is unethical, misleading and counter productive.  Bad for the environment, society and your company. You''ll be found out if you try to spin your sustainability creds to look as though you''re doing more than you are. ', '<iframe width="306" height="187" src="http://www.youtube.com/embed/RJlW9t1F4Vg" frameborder="0" allowfullscreen></iframe>', '', '', '', '2013-05-08', '2013-06-10', 'normal'),
(24, 'The mobile screen is the most important consumer touchpoint', '', 'Barney Loehnis', '1406196825-1375782597.png', ' Barney Loehnis - Head of Digital Strategy, Asia Pacific', ' <iframe width="306" height="187" src="http://www.youtube.com/embed/AfuH_Rpey9U" frameborder="0" allowfullscreen></iframe>', '', '406544399-1374134043.png', 'It''s 2020 and the ad world has been decimated by teenage mutant marketers. If you''re not mobile, you''re irrelevant. It''s all about giving consumers what they they want when they want it.\r\n', 'Anonymous', '2113923650-1375782597.png', 'Anonymous : We are legion. We never forget.', 'This is a very dangerous idea. You are being led down another corridor of consumerism and quietly strangled by suggestion.\r\nIf you vote for Barney we will know.  You have been warned!', '<iframe width="306" height="187" src="http://www.youtube.com/embed/nvlk7gtCdD8" frameborder="0" allowfullscreen></iframe>', '', '1737728978-1374134043.png', '', '2013-06-12', '2013-07-17', 'normal');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_entries`
--

CREATE TABLE IF NOT EXISTS `tbl_entries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `fb_user` varchar(45) DEFAULT NULL,
  `title` varchar(250) DEFAULT NULL,
  `photo` varchar(200) DEFAULT NULL,
  `details` text,
  `date` datetime DEFAULT NULL,
  `is_active` tinyint(4) DEFAULT NULL,
  `total_votes` int(11) DEFAULT NULL,
  `total_views` int(11) NOT NULL,
  `total_comments` int(11) NOT NULL,
  `total_downloads` int(11) NOT NULL,
  `is_deleted` tinyint(4) NOT NULL,
  `display_order` int(11) NOT NULL,
  `category` varchar(50) NOT NULL,
  `banner` varchar(100) NOT NULL,
  `selected_friends` varchar(250) NOT NULL,
  `ip_address` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jobs`
--

CREATE TABLE IF NOT EXISTS `tbl_jobs` (
  `cat_id` int(11) DEFAULT NULL COMMENT 'Category relation',
  `job_id` int(11) NOT NULL AUTO_INCREMENT,
  `base_salary` int(11) NOT NULL COMMENT 'The base salary of the job',
  `benefits` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Description of benefits associated with the job.',
  `date_posted` date NOT NULL COMMENT 'Publication date for the job posting.',
  `education_requirements` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Educational background needed for the position.',
  `experience_requirements` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Description of skills and experience needed for the position.',
  `hiring_organization_id` int(11) NOT NULL COMMENT 'Organization offering the job position.',
  `incentives` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Description of bonus and commission compensation aspects of the job.',
  `industry` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'The industry associated with the job position.',
  `job_location_id` int(11) NOT NULL COMMENT 'A (typically single) geographic location associated with the job position.',
  `qualifications` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Specific qualifications required for this role.',
  `responsibilities` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Responsibilities associated with this role.',
  `salary_currency` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'The currency (coded using ISO 4217, http://en.wikipedia.org/wiki/ISO_4217 used for the main salary information in this job posting.',
  `skills` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Skills required to fulfill this role.',
  `special_commitments` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Any special commitments associated with this job posting. Valid entries include VeteranCommit, MilitarySpouseCommit, etc.',
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'The title of the job.',
  `work_hours` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'The typical working hours for this job (e.g. 1st shift, night shift, 8am-5pm).',
  `descriptions` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`job_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_jobs`
--

INSERT INTO `tbl_jobs` (`cat_id`, `job_id`, `base_salary`, `benefits`, `date_posted`, `education_requirements`, `experience_requirements`, `hiring_organization_id`, `incentives`, `industry`, `job_location_id`, `qualifications`, `responsibilities`, `salary_currency`, `skills`, `special_commitments`, `title`, `work_hours`, `descriptions`) VALUES
(1, 1, 1000, 'Working with Professional', '2014-04-18', 'Graduated', 'Yii, CakePhp', 100, 'Bonus,Extra,weekend', 'IT SOFTWARE', 1, 'PHP Certification', 'Overtime, Impress', '$', 'PHP, Javascripts', 'VeteranCommit', 'Solutions Architect', '8am-5pm', 'dsadasdas'),
(4, 2, 1000, 'Working with Professional', '2014-04-19', 'Graduated', 'Android Application', 100, 'Bonus,Extra,weekend', 'IT SOFTWARE', 1, 'Java Certification', 'Overtime, Impress', '$', 'PHP, Javascripts', 'VeteranCommit', 'Solutions Architect', '8am-5pm', NULL),
(2, 3, 1000, 'Working with Professional', '2014-04-19', 'Graduated', 'Java', 100, 'Bonus,Extra,weekend', 'IT SOFTWARE', 2, 'PHP Certification', 'Overtime, Impress', '$', 'PHP, Javascripts', 'VeteranCommit', 'Solutions Architect', '8am-5pm', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job_about`
--

CREATE TABLE IF NOT EXISTS `tbl_job_about` (
  `about_id` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'Content page',
  `date_created` date NOT NULL,
  PRIMARY KEY (`about_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job_categories`
--

CREATE TABLE IF NOT EXISTS `tbl_job_categories` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_job_categories`
--

INSERT INTO `tbl_job_categories` (`cat_id`, `cat_name`) VALUES
(1, 'Jobs PHP'),
(2, 'Java '),
(3, 'Java Application'),
(4, 'Android'),
(5, 'ISO');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job_contactus`
--

CREATE TABLE IF NOT EXISTS `tbl_job_contactus` (
  `contactus_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `content` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date_created` date NOT NULL,
  PRIMARY KEY (`contactus_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job_employees`
--

CREATE TABLE IF NOT EXISTS `tbl_job_employees` (
  `employ_id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'Full Name of User ',
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'Email Address',
  PRIMARY KEY (`employ_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job_files`
--

CREATE TABLE IF NOT EXISTS `tbl_job_files` (
  `file_id` int(11) NOT NULL AUTO_INCREMENT,
  `filename` varchar(255) DEFAULT NULL,
  `uri` int(11) DEFAULT NULL,
  `timestamp` date DEFAULT NULL COMMENT 'Time to send file',
  `uid` int(11) DEFAULT NULL COMMENT 'Who post file',
  PRIMARY KEY (`file_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job_location`
--

CREATE TABLE IF NOT EXISTS `tbl_job_location` (
  `job_location_id` int(11) NOT NULL AUTO_INCREMENT,
  `address` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'Physical address of the item.',
  `fax_number` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'The fax number.',
  `geo` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'The geo coordinates of the place.',
  `map` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'A URL to a map of the place. Supercedes maps.',
  `opening_hours_specification` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `telephone` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`job_location_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_job_location`
--

INSERT INTO `tbl_job_location` (`job_location_id`, `address`, `fax_number`, `geo`, `map`, `opening_hours_specification`, `telephone`) VALUES
(1, '12/2 ABC Str Singpore ', '123456789', '111111111111111', '', '', '8499999999'),
(2, '12/2 ABC Str India', '120333232', '111111111111111', '', '', '8499999999');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job_resumes`
--

CREATE TABLE IF NOT EXISTS `tbl_job_resumes` (
  `resume_id` int(11) NOT NULL AUTO_INCREMENT,
  `employ_id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `file_id` int(11) NOT NULL,
  `coverletter` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`resume_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job_subcategories`
--

CREATE TABLE IF NOT EXISTS `tbl_job_subcategories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_id` int(11) NOT NULL DEFAULT '0',
  `parent` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_job_subcategories`
--

INSERT INTO `tbl_job_subcategories` (`id`, `cat_id`, `parent`) VALUES
(1, 1, 0),
(2, 2, 0),
(3, 3, 0),
(4, 4, 0),
(5, 5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job_teams`
--

CREATE TABLE IF NOT EXISTS `tbl_job_teams` (
  `teams_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'name of user',
  `positions` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'current positions, công việc hiện tại',
  `descriptions` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'descriptions about user',
  `link_twitter` varchar(255) DEFAULT NULL,
  `link_facebook` varchar(255) DEFAULT NULL,
  `link_email` varchar(255) DEFAULT NULL,
  `image_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`teams_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_job_teams`
--

INSERT INTO `tbl_job_teams` (`teams_id`, `name`, `positions`, `descriptions`, `link_twitter`, `link_facebook`, `link_email`, `image_id`) VALUES
(1, 'Smagic39', 'It techer', 'Work from ', '', '', '', NULL),
(2, 'Rob Fanshawe', 'Group Managing Director / Co-Founder', 'Rob has over 14 years HR and Recruitment experience, including 5 years working across Asia Pacific and 7 years with a niche UK based IT consultancy specialising in delivering human capital solutions for high-end professional service firms.', 'https://twitter.com/admin', 'https://www.facebook.com/pages/Bootstrap-Me/438114289583548?ref=hl', 'admin@localhost.com', NULL),
(3, 'Kathryn Woof', 'Managing Director, Asia | Co-founder', 'Kathryn has over 13 years HR and Recruitment experience, working across Asia Pacific and Europe. She has worked as a divisional manager and led senior headhunt briefs across the APAC region,', 'https://twitter.com/admin', 'https://www.facebook.com/pages/Bootstrap-Me/438114289583548?ref=hl', 'admin@localhost.com', NULL),
(4, 'Rachel Mason', 'Marketing & Operations Manager', 'Rachel joined the 33 Talent team in Singapore in November 2012 and has worked for 2 years in marketing roles in the recruitment and HR industry. Rachel''s role incorporates marketing, research, HR and other support functions to keep the office running smoothly.', '', 'https://www.facebook.com/pages/Bootstrap-Me/438114289583548?ref=hl', 'admin@localhost.com', NULL),
(5, 'Administrator', 'Admin page', 'Kathryn has over 13 years HR and Recruitment experience, working across Asia Pacific and Europe. She has worked as a divisional manager and led senior headhunt briefs across the APAC region,', 'https://twitter.com/admin', 'https://www.facebook.com/pages/Bootstrap-Me/438114289583548?ref=hl', 'admin@localhost.com', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job_testimonials`
--

CREATE TABLE IF NOT EXISTS `tbl_job_testimonials` (
  `testimonials_id` int(11) NOT NULL AUTO_INCREMENT,
  `image_id` int(11) DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `descriptions` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`testimonials_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_job_testimonials`
--

INSERT INTO `tbl_job_testimonials` (`testimonials_id`, `image_id`, `title`, `descriptions`) VALUES
(1, NULL, 'Stephanie, PR Account Manager', '33 Talent and Riley did a great job of connecting me with lots of companies and moving me to the job offer phase fairly quickly. Riley was always very responsive and efficient, a pleasure to work with!'),
(2, NULL, 'Chandresh, Senior Data Scientist', 'While 33 Talent represented me, I never felt I was working with a cold job consultant who was only interested in filling the position for an organisation who had hired him. I always saw Ken as being a well-wishing friend and guide. Working with profession'),
(3, NULL, 'Executive Director, Global Marketing', 'I wanted you to know that Kathryn''s professionalism as a head hunter really stands out. You seem to be one in a million!'),
(4, NULL, 'Anjali, Project Manager', '"From the moment I made contact with Rob, what struck me most was his intelligent, friendly, professional manner and (as time would prove) his adeptness to mediate between the interests of all parties. Rob placed me in two of the most important roles of m');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job_worktype`
--

CREATE TABLE IF NOT EXISTS `tbl_job_worktype` (
  `worktype_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `job_id` int(11) NOT NULL,
  PRIMARY KEY (`worktype_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ms`
--

CREATE TABLE IF NOT EXISTS `tbl_ms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `var_name` varchar(100) DEFAULT NULL,
  `value1` varchar(100) DEFAULT NULL,
  `value2` varchar(100) DEFAULT NULL,
  `value3` varchar(100) DEFAULT NULL,
  `value4_text` text,
  `value5_text` text,
  `value6_int` int(11) DEFAULT NULL,
  `value7_int` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=298 ;

--
-- Dumping data for table `tbl_ms`
--

INSERT INTO `tbl_ms` (`id`, `var_name`, `value1`, `value2`, `value3`, `value4_text`, `value5_text`, `value6_int`, `value7_int`) VALUES
(1, 'votes_per_user', 'settings', NULL, NULL, NULL, NULL, 5, NULL),
(2, 'videos_per_user', 'settings', NULL, NULL, NULL, NULL, 50, NULL),
(3, 'votes_after_every', 'settings', NULL, NULL, NULL, NULL, 300, NULL),
(4, 'videos_default_status', 'settings', NULL, NULL, NULL, NULL, 1, NULL),
(14, 'page_people', NULL, NULL, NULL, 'sdf', NULL, NULL, NULL),
(15, 'tab_url', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(16, 'who_tab_url', NULL, NULL, NULL, 'http://yahoo.com', NULL, NULL, NULL),
(17, 'adminEmail', NULL, NULL, NULL, 'amol.chawathe@fountaintechies.com', NULL, 1, NULL),
(18, 'entries_per_user', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, 'MANUAL_POPUP_BOX_TITLE_GLOBAL', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(22, 'MANUAL_POPUP_BOX_DETAILS_GLOBAL', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(23, 'INVITE_FRIEND_TITLE_GLOBAL', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(24, 'INVITE_FRIEND_DETAILS_GLOBAL', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(25, 'INVITE_FRIEND_TITLE_SINGLE_ENTRY', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(26, 'INVITE_FRIEND_DETAILS_SINGLE_ENTRY', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(27, 'SHARING_TITLE_SINGLE_ENTRY', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(28, 'SHARING_DETAILS_SINGLE_ENTRY', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(29, 'AUTO_MSG_TITLE_ON_ENTRY_SUBMISSION', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(30, 'AUTO_MSG_DETAILS_ON_ENTRY_SUBMISSION', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(31, 'AUTO_MSG_APP_DETAILS_ON_ENTRY_SUBMISSION', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(32, 'AUTO_MSG_TITLE_ON_VOTING', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(33, 'AUTO_MSG_DETAILS_ON_VOTING', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(34, 'AUTO_MSG_APP_DETAILS_ON_VOTING', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(35, 'TWITTER_MESSAGE_GLOBAL', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(36, 'TWITTER_MESSAGE_SINGLE_ENTRY', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(37, 'emailFrom', NULL, NULL, NULL, 'amol.chawathe@fountaintechies.com', NULL, 1, NULL),
(38, 'year_from', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(39, 'year_to', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(40, 'APPLICATION_START_DATE', NULL, NULL, NULL, '10/18/2012 08:14', NULL, NULL, NULL),
(43, 'APPLICATION_STATUS', NULL, NULL, NULL, '<p style="text-align: center;"><strong>Coming Soon</strong></p>', NULL, 1, NULL),
(45, 'APPLICATION_TIMEZONE', 'Singapore', NULL, NULL, NULL, NULL, NULL, NULL),
(46, 'PRELIKE_PAGE', 'Disable', NULL, NULL, '<p><img src="http://localhost:8888/yii/projects/shalu/fb/ndg_perfect_gift/admin/uploads/3D-Nature-Wallpapers-HD-2.jpg" alt="" width="80" height="60" /></p>\r\n<p>You must click on like <strong>button</strong> to see this page.</p>', NULL, 0, NULL),
(50, 'FACEBOOK_KEYS', 'threethreetalent', 'publish_stream, email, user_photos', NULL, '1483874521824989', 'e60de2978c49c19c5ff3b3660443940b', NULL, NULL),
(51, 'FACEBOOK_URLS', NULL, NULL, NULL, 'https://www.facebook.com/pages/Amol-Chawathe/621206881248355?id=621206881248355&sk=app_1483874521824989', 'https://apps.fountaintechies.com/threethreetalent', NULL, NULL),
(52, 'APP_DETAILS', NULL, NULL, NULL, '33talent', '33talent', NULL, NULL),
(115, 'FB_APP_DETAILS1', NULL, NULL, NULL, 'Facebook sharing title here', 'Facebook sharing details here', NULL, NULL),
(117, 'FB_INVITE_FRIENDS_GLOBAL1', NULL, NULL, NULL, 'Invite', 'Invite your friends.', NULL, NULL),
(118, 'FB_INVITE_FRIENDS_SINGLE_ENTRY1', NULL, NULL, NULL, 'Invite', 'Invite your friends.', NULL, NULL),
(119, 'FB_SHARING_SINGLE_ENTRY1', NULL, NULL, NULL, '[ENTRY_TITLE]', '[ENTRY_DETAILS]', NULL, NULL),
(120, 'FB_AUTO_MSG_ON_ENTRY_SUBMISSION1', '[ENTRY_TITLE]', NULL, NULL, '[ENTRY_DETAILS]', '[APP_DETAILS]', NULL, NULL),
(121, 'FB_AUTO_MSG_ON_VOTING1', '[ENTRY_TITLE]', NULL, NULL, '[ENTRY_DETAILS]', '[APP_DETAILS]', NULL, NULL),
(129, 'TWITTER_MESSAGE_GLOBAL0', NULL, NULL, NULL, '[APP_DETAILS]', NULL, NULL, NULL),
(130, 'TWITTER_MESSAGE_SINGLE_ENTRY0', NULL, NULL, NULL, '[APP_DETAILS]', NULL, NULL, NULL),
(166, 'TWITTER_MESSAGE_GLOBAL1', NULL, NULL, NULL, '[APP_DETAILS]2a', NULL, NULL, NULL),
(167, 'TWITTER_MESSAGE_SINGLE_ENTRY1', NULL, NULL, NULL, '[APP_DETAILS]3b', NULL, NULL, NULL),
(182, 'FB_APP_DETAILS', NULL, NULL, NULL, 'Facebook sharing title here', 'Facebook sharing details here', NULL, NULL),
(184, 'FB_INVITE_FRIENDS_GLOBAL', NULL, NULL, NULL, 'Invite', 'Invite your friends.', NULL, NULL),
(185, 'FB_INVITE_FRIENDS_SINGLE_ENTRY', NULL, NULL, NULL, 'Invite', 'Invite your friends.', NULL, NULL),
(186, 'FB_SHARING_SINGLE_ENTRY', NULL, NULL, NULL, '[ENTRY_TITLE]', '[ENTRY_DETAILS]', NULL, NULL),
(187, 'FB_AUTO_MSG_ON_ENTRY_SUBMISSION', '[ENTRY_TITLE]', NULL, NULL, '[ENTRY_DETAILS]', '[APP_DETAILS]', 1, NULL),
(188, 'FB_AUTO_MSG_ON_VOTING', '[ENTRY_TITLE]', NULL, NULL, '[ENTRY_DETAILS]', '[APP_DETAILS]', NULL, NULL),
(191, 'FB_MANUAL_POPUP_BOX_GLOBAL', NULL, NULL, NULL, '[APP_TITLE]', '[APP_DETAILS]', NULL, NULL),
(220, 'ADMIN_PANEL_BRANDING', NULL, NULL, NULL, '<p><img src="http://apps.fountaintechies.com/33talent/images/company-logo.png" alt="" width="234" height="80" /></p>', '<p style="text-align: center;">&nbsp; &nbsp; Copyright &copy; 2014.&nbsp;Site designed and Developed by <a href="http://apps.fountaintechies.com/33talent/admin/fountaintechies.com">Fountain Technologies</a></p>\r\n<p style="text-align: center;"><span><br /></span></p>', NULL, NULL),
(221, 'ALLOW_BLOCK_USERS', NULL, NULL, NULL, '<p>You are not <strong>allowed</strong> to view this application.</p>', 'abc,aa,ee,dd,ee,ff,100', 1, NULL),
(222, 'MOBILE_PHONES_STATUS', NULL, NULL, NULL, '<p>This application can not run on <strong>mobile</strong> phones. Please use your computer''s web browser.</p>', NULL, 1, NULL),
(223, 'CATEGORIES_MESSAGES_EP', 'Custom HTML', NULL, NULL, '<p>Experts want the very best and only the best to keep their pets in tip-top condition by learning everything they can about the specific breed, owning a dog, their diet and training. They feel great responsibility for their pet and regard them as an extension of themselves. They are like parents who make sure their pet kids have the best whether they love it or not. They share an inter-dependent relationship with their pets.</p>', NULL, NULL, NULL),
(224, 'CATEGORIES_MESSAGES_LH', 'Custom HTML', NULL, NULL, '<p>The leash-holder set very high but realistic standards for themselves and their pets. They believe there is only one way to do things and that is the right way. They like to stick to well-trodden roads and place emphasis on rules and discipline. They expect the same of their pets and are often persistent and skilled in handling and training their dogs. Probably an avid fan of celebrity dog trainers like Cesar Millan.</p>', NULL, NULL, NULL),
(225, 'CATEGORIES_MESSAGES_PP', 'Custom HTML', NULL, NULL, '<p>Selfless and generous, you will do anything to bring joy and happiness to your pets. You are happy if they are happy. Disappointing your pet is the last thing you would like to do. Probably guilty of loving your pet more than most people you know. You probably take your dog out for a ride in the car because well, you believe "he likes it". You seek to enjoy as many of life''s moments as you can together with your pets. You treasure every moment spent with your pet!</p>', NULL, NULL, NULL),
(226, 'CATEGORIES_MESSAGES_FS', 'Custom HTML', NULL, NULL, '<p>Free Spirits have no interest in controlling their pets. They will buy whatever they know their pet will enjoy and be happy with. Unencumbered by social norms, most will probably question "Why shouldn&rsquo;t my pet have cereal in the morning too?" Your pet is like your little baby to be spoiled and doted on. You love to express your love for them them through self-made costumes, prepared dishes and even share what you have on your plate with them!</p>', NULL, NULL, NULL),
(227, 'CATEGORIES_MESSAGES_TP', 'Custom HTML', NULL, NULL, '<p>The Providers are busy people who get a lot done in a day. They are hard workers who stick to a tight and hectic schedule. Most of all, they are reliable. They feel much responsibility in rewarding their pets should they prove to be obedient and meet their needs.</p>', NULL, NULL, NULL),
(228, 'CATEGORIES_MESSAGES_EM', 'Custom HTML', NULL, NULL, '<p>The Easy-Going Masters see themselves as the undefiable alpha in the relationship. They believe their pets have a role to fulfill in their life and don''t see a need to fuss much about their pets if they are happy and healthy.&nbsp;</p>', NULL, NULL, NULL),
(285, 'FB_APP_DETAILS0', NULL, NULL, NULL, 'Facebook sharing title here', 'Facebook sharing details here', NULL, NULL),
(286, 'FB_MANUAL_POPUP_BOX_GLOBAL0', NULL, NULL, NULL, 'Do Debate', '[APP_DETAILS]', 1, NULL),
(287, 'FB_INVITE_FRIENDS_GLOBAL0', NULL, NULL, NULL, 'Invite', 'Invite your friends.', 1, NULL),
(288, 'FB_INVITE_FRIENDS_SINGLE_ENTRY0', NULL, NULL, NULL, 'Invite', 'Invite your friends.', NULL, NULL),
(289, 'FB_SHARING_SINGLE_ENTRY0', NULL, NULL, NULL, 'I am a [ENTRY_TITLE]! What about you?', 'Do Debate', 1, NULL),
(290, 'FB_AUTO_MSG_ON_ENTRY_SUBMISSION0', '[APP_TITLE]', NULL, NULL, 'Do Debate', '[APP_DETAILS]', 1, NULL),
(291, 'FB_AUTO_MSG_ON_VOTING0', '[ENTRY_TITLE]', NULL, NULL, '[name] voted [choice] the motion [Debate_title] in the [app_name]. Do you share this view? ', '[APP_DETAILS]', 1, NULL),
(292, 'ENTRIES_SETTINGS', '1000', '1', '1000', NULL, NULL, 1, 86400),
(293, 'ENTRIES_SETTINGS_ENTRIES_PER_USER', NULL, NULL, NULL, 'You are not allowed to add more than [VALUE] entries.', 'Thanks! Your entrys has been submitted successfully....', 1000, NULL),
(294, 'ENTRIES_SETTINGS_ENTRIES_DEFAULT_STATUS', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(295, 'ENTRIES_SETTINGS_ENTRIES_ALLOW_AFTER_EVERY', NULL, NULL, NULL, 'You can not add entries before 10 minutes.', NULL, 600, NULL),
(296, 'ENTRIES_SETTINGS_VOTES_PER_USER', NULL, NULL, NULL, 'You are not allowed to add more than [VALUE] votes on this entry.', 'Thanks! Voted successfully......', 1, NULL),
(297, 'ENTRIES_SETTINGS_VOTES_ALLOW_AFTER_EVERY', NULL, NULL, NULL, 'You can not vote before one day on this entry. ', NULL, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_options`
--

CREATE TABLE IF NOT EXISTS `tbl_options` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question_id` int(11) NOT NULL,
  `option` text NOT NULL,
  `is_correct` int(11) NOT NULL,
  `score` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=116 ;

--
-- Dumping data for table `tbl_options`
--

INSERT INTO `tbl_options` (`id`, `question_id`, `option`, `is_correct`, `score`) VALUES
(95, 40, 'asda', 0, 4),
(96, 40, 'dfsasd', 0, 1),
(97, 40, 'sfadas', 0, 5),
(98, 40, 'asda', 0, 23),
(111, 44, 'sdfsdf dsfs', 0, 234),
(112, 44, 'sdfasd sdas', 0, 224),
(113, 44, 'asd asda sd', 0, 24),
(114, 44, 'sdf sdf sdfs', 0, 3),
(115, 40, 'asdww', 0, 21);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_page`
--

CREATE TABLE IF NOT EXISTS `tbl_page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(200) DEFAULT NULL,
  `details` text,
  `display_order` int(11) DEFAULT NULL,
  `added_by` int(11) DEFAULT NULL,
  `added_on` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_category_id` (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `tbl_page`
--

INSERT INTO `tbl_page` (`id`, `category_id`, `title`, `details`, `display_order`, `added_by`, `added_on`, `updated_by`, `updated_on`) VALUES
(13, NULL, 'TC', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam in nisi at nulla lobortis dapibus sit amet venenatis metus. Proin eu iaculis ligula. Phasellus lorem mi, tincidunt quis lacinia at, faucibus a sem. Vestibulum porta, tortor at mattis tempor, augue odio egestas nisi, vel egestas mi arcu sit amet risus. Phasellus faucibus tincidunt dolor, vitae viverra odio dictum a. Maecenas ut nisl enim, non cursus nisl. Pellentesque imperdiet velit commodo nisl vehicula pulvinar dictum odio lacinia. Aenean tempus metus quis est interdum eu volutpat lacus laoreet. Praesent a magna elit, vitae mattis magna. Vivamus mattis lobortis tempus. Curabitur accumsan dictum iaculis. Etiam ipsum neque, condimentum eu molestie ac, laoreet nec tortor.</p>\r\n<p>Nam nec ligula ut dolor pharetra vulputate et nec sapien. Praesent id ipsum ante, eget fermentum massa. Proin elementum mi nec lacus viverra nec convallis metus faucibus. Donec ac ligula ac dui elementum lacinia sit amet sit amet tortor. Mauris sapien velit, auctor quis lobortis quis, egestas malesuada urna. Praesent nunc mi, tincidunt eget fermentum vitae, condimentum nec tellus. Praesent metus dui, feugiat id fringilla sed, blandit non urna. Suspendisse sed sem non orci adipiscing dictum non sit amet arcu. Nunc molestie sem vel ante fermentum ut porta ligula luctus. Nam dictum lectus id justo vestibulum in cursus purus viverra.</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam in nisi at nulla lobortis dapibus sit amet venenatis metus. Proin eu iaculis ligula. Phasellus lorem mi, tincidunt quis lacinia at, faucibus a sem. Vestibulum porta, tortor at mattis tempor, augue odio egestas nisi, vel egestas mi arcu sit amet risus. Phasellus faucibus tincidunt dolor, vitae viverra odio dictum a. Maecenas ut nisl enim, non cursus nisl. Pellentesque imperdiet velit commodo nisl vehicula pulvinar dictum odio lacinia. Aenean tempus metus quis est interdum eu volutpat lacus laoreet. Praesent a magna elit, vitae mattis magna. Vivamus mattis lobortis tempus. Curabitur accumsan dictum iaculis. Etiam ipsum neque, condimentum eu molestie ac, laoreet nec tortor.</p>\r\n<p>Nam nec ligula ut dolor pharetra vulputate et nec sapien. Praesent id ipsum ante, eget fermentum massa. Proin elementum mi nec lacus viverra nec convallis metus faucibus. Donec ac ligula ac dui elementum lacinia sit amet sit amet tortor. Mauris sapien velit, auctor quis lobortis quis, egestas malesuada urna. Praesent nunc mi, tincidunt eget fermentum vitae, condimentum nec tellus. Praesent metus dui, feugiat id fringilla sed, blandit non urna. Suspendisse sed sem non orci adipiscing dictum non sit amet arcu. Nunc molestie sem vel ante fermentum ut porta ligula luctus. Nam dictum lectus id justo vestibulum in cursus purus viverra.</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam in nisi at nulla lobortis dapibus sit amet venenatis metus. Proin eu iaculis ligula. Phasellus lorem mi, tincidunt quis lacinia at, faucibus a sem. Vestibulum porta, tortor at mattis tempor, augue odio egestas nisi, vel egestas mi arcu sit amet risus. Phasellus faucibus tincidunt dolor, vitae viverra odio dictum a. Maecenas ut nisl enim, non cursus nisl. Pellentesque imperdiet velit commodo nisl vehicula pulvinar dictum odio lacinia. Aenean tempus metus quis est interdum eu volutpat lacus laoreet. Praesent a magna elit, vitae mattis magna. Vivamus mattis lobortis tempus. Curabitur accumsan dictum iaculis. Etiam ipsum neque, condimentum eu molestie ac, laoreet nec tortor.</p>\r\n<p>Nam nec ligula ut dolor pharetra vulputate et nec sapien. Praesent id ipsum ante, eget fermentum massa. Proin elementum mi nec lacus viverra nec convallis metus faucibus. Donec ac ligula ac dui elementum lacinia sit amet sit amet tortor. Mauris sapien velit, auctor quis lobortis quis, egestas malesuada urna. Praesent nunc mi, tincidunt eget fermentum vitae, condimentum nec tellus. Praesent metus dui, feugiat id fringilla sed, blandit non urna. Suspendisse sed sem non orci adipiscing dictum non sit amet arcu. Nunc molestie sem vel ante fermentum ut porta ligula luctus. Nam dictum lectus id justo vestibulum in cursus purus viverra.</p>', NULL, NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00'),
(14, NULL, 'Prizes', '<p>Send your story in for a chance to win a set of 5 tickets to an invite-only comedy night titled "One, Two, Many...Get Your Sexy Back" featuring Hossan Leong, Jonathan Atherton &amp; Kavin Jay!</p>\r\n<p><strong>You could be famous!</strong></p>\r\n<p>You could be one of five lucky winners who stand a chance to inspire the performers&rsquo; scripts for the night. Your story could be the next big thing! &nbsp;</p>\r\n<p>Could your story make it?</p>', NULL, NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00'),
(15, NULL, 'Landing Page', '<p>At Dreyer?s Singapore, we believe that everyone has that one special ice cream moment in his or her lives.</p>\r\n<p>Whether it be sharing a cup of Rocky Road with that special someone, celebrating your parents? wedding anniversary with mountainous tubs of Toasted Almond, or young nephews conspiring to finish off the Cookies ?N Cream you stashed away at the back of your freezer ? we want to know about it!</p>\r\n<p>At Dreyer?s Singapore, we believe that everyone has that one special ice cream moment in his or her lives.</p>\r\n<p>Whether it be sharing a cup of Rocky Road with that special someone, celebrating your parents? wedding anniversary with mountainous tubs of Toasted Almond, or young nephews conspiring to finish off the Cookies ?N Cream you stashed away at the back of your freezer ? we want to know about it!</p>\r\n<p>At Dreyer?s Singapore, we believe that everyone has that one special ice cream moment in his or her lives.</p>\r\n<p>Whether it be sharing a cup of Rocky Road with that special someone, celebrating your parents? wedding anniversary with mountainous tubs of Toasted Almond, or young nephews conspiring to finish off the Cookies ?N Cream you stashed away at the back of your freezer ? we want to know about it!</p>', NULL, NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_page_category`
--

CREATE TABLE IF NOT EXISTS `tbl_page_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) DEFAULT NULL,
  `parent_category` int(11) DEFAULT NULL,
  `display_order` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_participations`
--

CREATE TABLE IF NOT EXISTS `tbl_participations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `fb_id` int(11) NOT NULL,
  `entry_id` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `ip_address` varchar(20) NOT NULL,
  `answer_id` int(11) NOT NULL,
  `is_correct` int(11) NOT NULL,
  `score` int(11) NOT NULL,
  `date` date NOT NULL,
  `is_confirmed` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_queries`
--

CREATE TABLE IF NOT EXISTS `tbl_queries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `artist` varchar(100) NOT NULL,
  `salutation` varchar(20) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email_address` varchar(200) NOT NULL,
  `contact_number` varchar(20) NOT NULL,
  `city_country` varchar(50) NOT NULL,
  `subject` tinytext NOT NULL,
  `comments` text NOT NULL,
  `nric` varchar(20) NOT NULL,
  `date` datetime NOT NULL,
  `ip_address` varchar(20) NOT NULL,
  `is_read` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_queries`
--

INSERT INTO `tbl_queries` (`id`, `artist`, `salutation`, `name`, `email_address`, `contact_number`, `city_country`, `subject`, `comments`, `nric`, `date`, `ip_address`, `is_read`) VALUES
(1, '', '', 'wasim', 'wasim@fortsolution.com', '03008124001', 'Lahore pakistan', '', 'ghfghfg', '', '0000-00-00 00:00:00', '', 0),
(2, '', '', 'wasim', 'wasim@fortsolution.com', '03008124001', 'Lahore pakistan', '', 'ghfghfg', '', '0000-00-00 00:00:00', '', 0),
(3, '', '', 'wasim', 'wasim@fortsolution.com', '03008124001', 'Lahore pakistan', '', 'xxcvcxvxcvxc', '', '0000-00-00 00:00:00', '', 0),
(4, '', '', 'wasim', 'wasim@fortsolution.com', '03008124001', 'Lahore pakistan', '', 'sdasd', '', '0000-00-00 00:00:00', '', 0),
(5, '', '', 'wasim', 'wasim@fortsolution.com', '03008124001', 'Lahore pakistan', '', 'dsdsd', '', '0000-00-00 00:00:00', '', 0),
(6, '', '', 'wasim', 'wasim@fortsolution.com', '03008124001', 'Lahore pakistan', '', 'dsadasdasd', '', '0000-00-00 00:00:00', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_questions`
--

CREATE TABLE IF NOT EXISTS `tbl_questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `video_id` int(11) NOT NULL,
  `question` text NOT NULL,
  `correct_answer` int(11) NOT NULL,
  `difficulty_level` varchar(50) NOT NULL,
  `visual` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_test`
--

CREATE TABLE IF NOT EXISTS `tbl_test` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `age` tinyint(4) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `city` varchar(200) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `nric` varchar(15) DEFAULT NULL,
  `mobile_number` varchar(20) DEFAULT NULL,
  `landline_number` varchar(20) DEFAULT NULL,
  `timezone` varchar(10) DEFAULT NULL,
  `url` tinytext,
  `visits` int(11) DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `is_active` tinyint(4) DEFAULT NULL,
  `userid` varchar(200) DEFAULT NULL,
  `username` varchar(200) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `first_name` varchar(200) DEFAULT NULL,
  `last_name` varchar(200) DEFAULT NULL,
  `location` varchar(200) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `title` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `is_internal` tinyint(1) NOT NULL,
  `full_details` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_test`
--

INSERT INTO `tbl_test` (`id`, `name`, `email`, `age`, `gender`, `city`, `country`, `nric`, `mobile_number`, `landline_number`, `timezone`, `url`, `visits`, `last_login`, `is_active`, `userid`, `username`, `password`, `first_name`, `last_name`, `location`, `dob`, `title`, `role`, `is_internal`, `full_details`) VALUES
(6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sdf', 'admin', 1, 'Hello <strong>Sir</strong>');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE IF NOT EXISTS `tbl_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `age` tinyint(4) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `city` varchar(200) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `nric` varchar(15) DEFAULT NULL,
  `mobile_number` varchar(20) DEFAULT NULL,
  `landline_number` varchar(20) DEFAULT NULL,
  `timezone` varchar(10) DEFAULT NULL,
  `url` tinytext,
  `visits` int(11) DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `is_active` tinyint(4) DEFAULT NULL,
  `userid` varchar(200) DEFAULT NULL,
  `username` varchar(200) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `first_name` varchar(200) DEFAULT NULL,
  `last_name` varchar(200) DEFAULT NULL,
  `location` varchar(200) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `title` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `birthday` date NOT NULL,
  `phone_number_prefix` varchar(20) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `address` tinytext NOT NULL,
  `postal_code` varchar(20) NOT NULL,
  `i_am_lover_of` varchar(100) NOT NULL,
  `i_am` varchar(200) NOT NULL,
  `is_subscribed` tinyint(1) NOT NULL,
  `salutation` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=412 ;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `name`, `email`, `age`, `gender`, `city`, `country`, `nric`, `mobile_number`, `landline_number`, `timezone`, `url`, `visits`, `last_login`, `is_active`, `userid`, `username`, `password`, `first_name`, `last_name`, `location`, `dob`, `title`, `role`, `birthday`, `phone_number_prefix`, `phone_number`, `address`, `postal_code`, `i_am_lover_of`, `i_am`, `is_subscribed`, `salutation`, `contact_number`) VALUES
(1, 'a', 'b@yahoo.co', NULL, NULL, NULL, NULL, NULL, 'c', NULL, NULL, NULL, 14, '2012-11-08 16:45:47', 1, NULL, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'm', '', 'del', NULL, '', 'operator', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(2, 'M Shahid', 'shahid_mau@yahoo.com', NULL, NULL, 'Delhi', 'India', '22344', '99105757991', NULL, '+5.5', 'http://shahidmau.blogspot.com', 17, '2012-12-06 01:44:50', 1, '100', 'shahidmau', '21232f297a57a5a743894a0e4a801fc3', 'M', 'Shahid', 'delhi', '1998-07-11', 'admin', 'admin', '1991-04-04', '2', '12', 'efsdf', '23', 'Both', 'An animal lover - satisfied with just seeing and not owning at the moment', 1, '', ''),
(3, 'ss', 'mshahid85@gmail.com', NULL, NULL, NULL, NULL, NULL, '09910575799', NULL, NULL, NULL, 1, '2012-10-22 21:12:47', 1, NULL, 'user112', '202cb962ac59075b964b07152d234b70', NULL, NULL, NULL, NULL, '', 'admin', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(4, 'M Shahid', 'mshahid85@gmail.com', 27, 'male', NULL, NULL, NULL, '9910575799', NULL, NULL, 'techisworld.com', 13, '2012-11-16 17:13:11', 1, '', 'ms', 'b53993e76f6dc8966579e5bab2ba9b31', NULL, NULL, NULL, NULL, '', 'super admin', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(5, 'Admin', 'mshahid85@gmail.com', NULL, NULL, NULL, NULL, NULL, '09910575799', NULL, NULL, NULL, 211, '2014-04-20 07:15:37', 1, NULL, 'admin', '21232f297a57a5a743894a0e4a801fc3', NULL, NULL, NULL, NULL, '', 'admin', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(6, 'Chouhdary Wasim', 'choclatefair@yahoo.com', NULL, NULL, 'Lahore, Pakistan', NULL, NULL, NULL, NULL, '5', 'http://www.facebook.com/king.chouhdary', NULL, '2013-05-30 15:10:17', NULL, '100000389303076', 'king.chouhdary', NULL, 'Chouhdary', 'Wasim', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(7, 'Mohammad Shahid', 'mshahid85@gmail.com', NULL, NULL, 'Delhi, India', NULL, NULL, NULL, NULL, '5.5', 'http://www.facebook.com/shahidmau', NULL, '2013-04-30 21:52:24', NULL, '699429441', 'shahidmau', NULL, 'Mohammad', 'Shahid', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(8, 'Bilal Zahid', 'bilalzahidse@gmail.com', NULL, NULL, 'Lahore, Pakistan', NULL, NULL, NULL, NULL, '5', 'http://www.facebook.com/bilal.zahid.12935', NULL, '2012-12-15 23:59:25', NULL, '100000847274188', 'bilal.zahid.12935', NULL, 'Bilal', 'Zahid', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(9, 'Shalu Wasu', 'shalu@shaluwasu.com', NULL, NULL, 'Singapore, Singapore', NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/shaluwasu', NULL, '2013-05-13 17:55:04', NULL, '590193638', 'shaluwasu', NULL, 'Shalu', 'Wasu', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(10, 'Saif Ali Malik', 'saif_alimalik@yahoo.com', NULL, NULL, 'Lahore, Pakistan', NULL, NULL, NULL, NULL, '0', 'http://www.facebook.com/saifali.malik.33', NULL, '2012-12-16 00:46:26', NULL, '100000046220263', 'saifali.malik.33', NULL, 'Saif Ali', 'Malik', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(11, 'Hania Jee', 'rabia@fortsolution.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5', 'http://www.facebook.com/fortsolution.fort', NULL, '2013-01-23 13:01:49', NULL, '100002529204009', 'fortsolution.fort', NULL, 'Hania', 'Jee', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(12, 'Xeesh Mughal', 'zeeshannushahi@gmail.com', NULL, NULL, 'Seoul, Korea', NULL, NULL, NULL, NULL, '5', 'http://www.facebook.com/Zeesh.N.Q', NULL, '2013-05-17 18:29:37', NULL, '100001797291335', 'Zeesh.N.Q', NULL, 'Xeesh', 'Mughal', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(13, 'Umar Qayyum Butt', 'umar.qayyum186@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5', 'http://www.facebook.com/umar.q.butt', NULL, '2013-03-18 15:44:22', NULL, '100001312336440', 'umar.q.butt', NULL, 'Umar', 'Butt', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(14, 'Amol Chawathe', 'amolschawathe@gmail.com', NULL, NULL, 'Singapore, Singapore', NULL, NULL, NULL, NULL, '8', 'https://www.facebook.com/amol.chavthee', NULL, '2014-04-14 10:21:51', NULL, '560700961', 'amol.chavthee', NULL, 'Amol', 'Chawathe', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(15, 'Ghulam Murtaza', 'ghm.murteza@gmail.com', NULL, NULL, 'Lahore, Pakistan', NULL, NULL, NULL, NULL, '5', 'http://www.facebook.com/ghm.murtaza', NULL, '2013-03-06 20:45:37', NULL, '1838613512', 'ghm.murtaza', NULL, 'Ghulam', 'Murtaza', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(16, 'Adnan Rafique', 'adnan_iub08@yahoo.com', NULL, NULL, 'Lahore, Pakistan', NULL, NULL, NULL, NULL, '5', 'http://www.facebook.com/adnan.rafique.501', NULL, '2012-12-22 20:56:25', NULL, '100000023167801', 'adnan.rafique.501', NULL, 'Adnan', 'Rafique', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(17, 'Rukhsar Ch', 'rukhsar_ch@hotmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5', 'http://www.facebook.com/rukhsar.ch.7', NULL, '2013-05-17 18:32:01', NULL, '100003062988591', 'rukhsar.ch.7', NULL, 'Rukhsar', 'Ch', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(18, 'Akmal Javed', 'javedakmal@hotmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5', 'http://www.facebook.com/javedakmal', NULL, '2012-12-23 00:27:57', NULL, '1746369033', 'javedakmal', NULL, 'Akmal', 'Javed', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(19, 'Umer Mushtaq', 'umarmushtaq88@hotmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '-8', 'http://www.facebook.com/ch.umermushtaq', NULL, '2012-12-23 04:48:34', NULL, '551807728', 'ch.umermushtaq', NULL, 'Umer', 'Mushtaq', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(20, 'Shilpi Chawathe', 'shilpi@suzantravels.com', NULL, NULL, 'Singapore, Singapore', NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/shilpi.chawathe', NULL, '2013-04-05 22:16:40', NULL, '100000097672417', 'shilpi.chawathe', NULL, 'Shilpi', 'Chawathe', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(21, 'Don''t Say', 'asimiqbal63@hotmail.co.uk', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5', 'http://www.facebook.com/smile.goodfriend', NULL, '2013-01-03 17:27:29', NULL, '100000246160119', 'smile.goodfriend', NULL, 'Don''t', 'Say', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(22, 'Tim Vazquez', 'timvazquez@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/t1mvazquez', NULL, '2013-05-30 11:25:31', NULL, '100000383082706', 't1mvazquez', NULL, 'Tim', 'Vazquez', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(23, 'Theo Lyall', '6591062235', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/theo.lyall.3', NULL, '2013-01-08 20:47:44', NULL, '100004741478842', 'theo.lyall.3', NULL, 'Theo', 'Lyall', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(24, 'Puneet Kumar', 'kumars6363@gmail.com', NULL, NULL, 'Jalandhar, India', NULL, NULL, NULL, NULL, '5.5', 'http://www.facebook.com/puneetk4', NULL, '2013-05-13 13:30:26', NULL, '523563379', 'puneetk4', NULL, 'Puneet', 'Kumar', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(25, 'Jackie Helena Gay', 'jaggae@yahoo.com.sg', NULL, NULL, 'Singapore, Singapore', NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/jackiehgay', NULL, '2013-04-24 02:30:59', NULL, '639686763', 'jackiehgay', NULL, 'Jackie', 'Gay', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(26, 'Shashwith Uthappa Surana', 'shashwith@gmail.com', NULL, NULL, 'Singapore, Singapore', NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/shashwith.surana', NULL, '2013-05-17 17:19:19', NULL, '1198569660', 'shashwith.surana', NULL, 'Shashwith', 'Surana', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(27, 'Kate Brady', 'kkate_brady@hotmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/kkate.brady', NULL, '2013-06-13 05:36:55', NULL, '634319838', 'kkate.brady', NULL, 'Kate', 'Brady', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(28, 'Natalie Lyall', 'thelyallsuk@btinternet.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/natalie.lyall.31', NULL, '2013-06-12 17:43:45', NULL, '712726560', 'natalie.lyall.31', NULL, 'Natalie', 'Lyall', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(29, 'Suma Raj', 'suma_raj16@yahoo.co.in', NULL, NULL, 'Bangalore, India', NULL, NULL, NULL, NULL, '5.5', 'http://www.facebook.com/suma.raj.391', NULL, '2013-01-31 20:02:21', NULL, '777404275', 'suma.raj.391', NULL, 'Suma', 'Raj', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(30, 'Hope Katherine Frank', 'hopekfrank@gmail.com', NULL, NULL, 'Chicago, Illinois', NULL, NULL, NULL, NULL, '-6', 'http://www.facebook.com/hope.k.frank', NULL, '2013-02-01 10:53:23', NULL, '1569690006', 'hope.k.frank', NULL, 'Hope', 'Frank', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(31, 'István Busák', 'istvan.busak@gmail.com', NULL, NULL, 'Dubai, United Arab Emirates', NULL, NULL, NULL, NULL, '4', 'http://www.facebook.com/istvan.busak', NULL, '2013-02-01 10:54:56', NULL, '581811059', 'istvan.busak', NULL, 'István', 'Busák', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(32, 'Amir Tohid', 'amir.tohid@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/amir.tohid', NULL, '2013-02-01 11:01:47', NULL, '100001788409764', 'amir.tohid', NULL, 'Amir', 'Tohid', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(33, 'Mahita Vas', 'm_geekie@yahoo.com.sg', NULL, NULL, 'Singapore, Singapore', NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/Mahita88', NULL, '2013-02-01 11:24:20', NULL, '778152145', 'Mahita88', NULL, 'Mahita', 'Vas', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(34, 'Macson Ashley Tan', 'macson88@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/macson', NULL, '2013-02-01 11:30:03', NULL, '630117891', 'macson', NULL, 'Macson', 'Tan', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(35, 'Li Xian Lee', 'xian.lee21@gmail.com', NULL, NULL, 'Singapore, Singapore', NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/llxian', NULL, '2013-02-07 12:06:57', NULL, '740193578', 'llxian', NULL, 'Li Xian', 'Lee', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(36, 'Xu Xuan', 'evaxuan@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/evaxuan', NULL, '2013-06-12 16:34:55', NULL, '632673526', 'evaxuan', NULL, 'Xu', 'Xuan', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(37, 'Kapil Arora', 'talktokapil@gmail.com', NULL, NULL, 'Mumbai, Maharashtra, India', NULL, NULL, NULL, NULL, '5.5', 'http://www.facebook.com/talktokapil', NULL, '2013-02-01 16:05:12', NULL, '767968135', 'talktokapil', NULL, 'Kapil', 'Arora', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(38, 'Sebastian Puhze', 'sese@puhze.net', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '7', 'http://www.facebook.com/sebastian.puhze', NULL, '2013-05-02 19:27:37', NULL, '883205133', 'sebastian.puhze', NULL, 'Sebastian', 'Puhze', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(39, 'Vivianne Tu', 'sisuviv@msn.com', NULL, NULL, 'Shanghai, China', NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/vivianne.tu.9', NULL, '2013-02-01 16:08:49', NULL, '531925454', 'vivianne.tu.9', NULL, 'Vivianne', 'Tu', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(40, 'Abhishek Jain', 'abhi_paragon@yahoo.co.in', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5.5', 'http://www.facebook.com/abhishek.jain2', NULL, '2013-02-01 16:10:14', NULL, '507550753', 'abhishek.jain2', NULL, 'Abhishek', 'Jain', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(41, 'Ravinder Janakiraman', 'ravinder.j@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5.5', 'http://www.facebook.com/ravinderj', NULL, '2013-02-01 16:16:35', NULL, '608975756', 'ravinderj', NULL, 'Ravinder', 'Janakiraman', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(42, 'Ed Chan', 'eddy31@gmail.com', NULL, NULL, 'Singapore, Singapore', NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/edchan31', NULL, '2013-02-01 18:26:05', NULL, '545196943', 'edchan31', NULL, 'Ed', 'Chan', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(43, 'Barney Loehnis', 'barneylo@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/loehnis', NULL, '2013-06-14 08:30:33', NULL, '594295022', 'loehnis', NULL, 'Barney', 'Loehnis', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(44, 'Dwi Tunjung Sari', 'dwitunjungsari@yahoo.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '7', 'http://www.facebook.com/dwi.t.sari.14', NULL, '2013-02-01 16:22:04', NULL, '1102881370', 'dwi.t.sari.14', NULL, 'Dwi', 'Sari', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(45, 'Paul Heath', 'paul.heath@ogilvy.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/paul.heath.3139', NULL, '2013-02-01 16:23:53', NULL, '673841315', 'paul.heath.3139', NULL, 'Paul', 'Heath', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(46, 'Tracy Bay', 'tracybay@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/tracy.bay', NULL, '2013-02-05 15:38:41', NULL, '647272798', 'tracy.bay', NULL, 'Tracy', 'Bay', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(47, 'Francis Chay', 'francischay@hotmail.com', NULL, NULL, 'Shanghai, China', NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/francis.chay.9', NULL, '2013-02-01 16:34:37', NULL, '598036649', 'francis.chay.9', NULL, 'Francis', 'Chay', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(48, 'Ellen Tan', 'ellentanishere@hotmail.com', NULL, NULL, 'Singapore, Singapore', NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/ellen.tan.923', NULL, '2013-04-28 01:23:49', NULL, '664102734', 'ellen.tan.923', NULL, 'Ellen', 'Tan', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(49, 'Shivam Agnihotri', 'shivam.s2dm@gmail.com', NULL, NULL, 'Mumbai, Maharashtra, India', NULL, NULL, NULL, NULL, '6', 'http://www.facebook.com/shivams2dm', NULL, '2013-02-01 17:01:13', NULL, '737581568', 'shivams2dm', NULL, 'Shivam', 'Agnihotri', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(50, 'Noj Chan', 'jonthechan@yahoo.com', NULL, NULL, 'Hong Kong', NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/noj.chan.3', NULL, '2013-02-01 17:21:59', NULL, '100003721320031', 'noj.chan.3', NULL, 'Noj', 'Chan', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(51, 'Uma CH Wu', 'chiahui1983@hotmail.com', NULL, NULL, 'Taipei, Taiwan', NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/UmaCH.Wu', NULL, '2013-03-18 00:47:35', NULL, '682245173', 'UmaCH.Wu', NULL, 'Uma', 'Wu', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(52, 'Ji-Ann Ng', 'jiann.ng@gmail.com', NULL, NULL, 'Shanghai, China', NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/jiann.ng', NULL, '2013-02-01 18:09:28', NULL, '663338046', 'jiann.ng', NULL, 'Ji-Ann', 'Ng', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(53, 'Gavin Ashley Hall', 'zoooctan@yahoo.com.sg', NULL, NULL, 'Singapore, Singapore', NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/zoo.octan', NULL, '2013-02-02 13:21:24', NULL, '777734656', 'zoo.octan', NULL, 'Gavin', 'Hall', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(54, 'Hannah Law', 'hannah@hannahlaw.com.au', NULL, NULL, 'Hong Kong', NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/hannahlouiselaw', NULL, '2013-02-04 10:16:40', NULL, '211601233', 'hannahlouiselaw', NULL, 'Hannah', 'Law', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(55, 'Edwin Rozells', 'edwin.rozells@gmail.com', NULL, NULL, 'Singapore, Singapore', NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/edwin.rozells', NULL, '2013-02-04 10:31:18', NULL, '514077328', 'edwin.rozells', NULL, 'Edwin', 'Rozells', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(56, 'Anthony Reza Prasetya', 'anthony.reza@yahoo.co.uk', NULL, NULL, 'Jakarta, Indonesia', NULL, NULL, NULL, NULL, '7', 'http://www.facebook.com/anthony.rezaprasetya', NULL, '2013-02-04 10:57:50', NULL, '602306469', 'anthony.rezaprasetya', NULL, 'Anthony', 'Prasetya', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(57, 'Jeremy Seow', 'jemseow@yahoo.com', NULL, NULL, 'Singapore, Singapore', NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/jemseow', NULL, '2013-02-04 11:52:33', NULL, '789260453', 'jemseow', NULL, 'Jeremy', 'Seow', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(58, 'Rannajoy Roy', 'rannajoyroy@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/Rannajoyroy', NULL, '2013-05-10 20:41:47', NULL, '527310277', 'Rannajoyroy', NULL, 'Rannajoy', 'Roy', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(59, 'Orko Basu', 'dunkelstern@hotmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5.5', 'http://www.facebook.com/orko.basu', NULL, '2013-03-12 18:20:36', NULL, '675640206', 'orko.basu', NULL, 'Orko', 'Basu', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(60, 'Peter Moss', 'peter.moss@mac.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/mrpmoss', NULL, '2013-06-13 13:58:39', NULL, '534729133', 'mrpmoss', NULL, 'Peter', 'Moss', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(61, 'Jonny Haha', 'jonny.ha@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/jonnyha', NULL, '2013-04-19 23:53:49', NULL, '888305713', 'jonnyha', NULL, 'Jonny', 'Haha', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(62, 'Greg Carton', 'greg.carton@ogilvy.com', NULL, NULL, 'Hong Kong', NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/gregcarton', NULL, '2013-03-08 18:41:29', NULL, '515566183', 'gregcarton', NULL, 'Greg', 'Carton', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(63, 'Amber Price', 'amber.kay.price@gmail.com', NULL, NULL, 'Hong Kong', NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/amber.kay.price', NULL, '2013-02-05 13:48:53', NULL, '19207190', 'amber.kay.price', NULL, 'Amber', 'Price', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(64, 'Connie Lo', 'cpslo@hotmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/connie.lo.3538', NULL, '2013-02-05 13:53:31', NULL, '522692290', 'connie.lo.3538', NULL, 'Connie', 'Lo', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(65, 'Gabriel Tang', 'gabrielcwtang@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/gabriel.tang.18', NULL, '2013-02-05 13:55:38', NULL, '550966292', 'gabriel.tang.18', NULL, 'Gabriel', 'Tang', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(66, 'Andrew Au', 'andrewtcau@gmail.com', NULL, NULL, 'Hong Kong', NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/andrewtcau', NULL, '2013-02-05 14:10:44', NULL, '554716113', 'andrewtcau', NULL, 'Andrew', 'Au', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(67, 'Chris Lee', 'c_eel_333@hotmail.com', NULL, NULL, 'Hong Kong', NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/christopher.lee1214', NULL, '2013-02-06 16:15:15', NULL, '1669500095', 'christopher.lee1214', NULL, 'Chris', 'Lee', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(68, 'Dino Man', 'cman7@uwo.ca', NULL, NULL, 'Hong Kong', NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/DinoManCH', NULL, '2013-02-05 14:49:24', NULL, '58015998', 'DinoManCH', NULL, 'Dino', 'Man', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(69, 'Charles Leung', 'fatchar1016@hotmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/charles.leung.353', NULL, '2013-04-05 01:29:34', NULL, '780000480', 'charles.leung.353', NULL, 'Charles', 'Leung', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(70, 'Teresa Lo', 'teresalo.nyc@gmail.com', NULL, NULL, 'Hong Kong', NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/teresalo.nyc', NULL, '2013-02-05 14:49:42', NULL, '820036117', 'teresalo.nyc', NULL, 'Teresa', 'Lo', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(71, 'Darren Ho', 'darren.ho@gmail.com', NULL, NULL, 'Hong Kong', NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/darren.ho1', NULL, '2013-02-05 14:53:01', NULL, '837650194', 'darren.ho1', NULL, 'Darren', 'Ho', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(72, 'Bjoern Schneider', 'bjoern.schneider@ogilvy.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'http://www.facebook.com/bjoern.schneider.37', NULL, '2013-02-05 14:53:28', NULL, '100001414780303', 'bjoern.schneider.37', NULL, 'Bjoern', 'Schneider', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(73, 'Carmen Lee Yuk Wah', 'carmen_wah@yahoo.com', NULL, NULL, 'Hong Kong', NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/carmenleeyukwah', NULL, '2013-02-05 14:55:49', NULL, '619182119', 'carmenleeyukwah', NULL, 'Carmen', 'Wah', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(74, 'Sandy Ling', 'sandywkling@hotmail.com', NULL, NULL, 'Hong Kong', NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/sandywkling', NULL, '2013-02-08 11:00:25', NULL, '614972564', 'sandywkling', NULL, 'Sandy', 'Ling', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(75, 'Raymond Leung', 'ray1219@gmail.com', NULL, NULL, 'Hong Kong', NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/ray1219', NULL, '2013-02-05 15:02:47', NULL, '664900982', 'ray1219', NULL, 'Raymond', 'Leung', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(76, 'Howard Kwong', 'sunfffd@gmail.com', NULL, NULL, 'Hong Kong', NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/sunfffd', NULL, '2013-02-05 15:04:44', NULL, '524389782', 'sunfffd', NULL, 'Kwong', 'Howard', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(77, 'Ray Lam', 'raylam831@hotmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/raylam831', NULL, '2013-02-05 15:04:56', NULL, '760745636', 'raylam831', NULL, 'Ray', 'Lam', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(78, 'Nicole Schneiderjohn', 'nschneiderjohn@gmail.com', NULL, NULL, 'Victoria, Hong Kong', NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/nicole.schneiderjohn', NULL, '2013-02-05 15:05:49', NULL, '2502051', 'nicole.schneiderjohn', NULL, 'Nicole', 'Schneiderjohn', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(79, 'Daniel Cullen', 'danielcullen25@googlemail.com', NULL, NULL, 'Hong Kong', NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/daniel.cullen.969', NULL, '2013-02-05 15:05:57', NULL, '838085153', 'daniel.cullen.969', NULL, 'Daniel', 'Cullen', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(80, 'Harish Nambiar', 'harish_pn@hotmail.com', NULL, NULL, 'Singapore, Singapore', NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/harish.nambiar', NULL, '2013-02-05 15:07:38', NULL, '542163586', 'harish.nambiar', NULL, 'Harish', 'Nambiar', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(81, 'Chan Yinddm', 'ianchanddm@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/chan.yinddm', NULL, '2013-03-13 11:07:08', NULL, '100002278532721', 'chan.yinddm', NULL, 'Chan', 'Yinddm', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(82, 'Banda Chan', 'banda.chan@ogilvy.com', NULL, NULL, 'Kowloon, Hong Kong', NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/banda.chan', NULL, '2013-04-22 14:24:32', NULL, '786174194', 'banda.chan', NULL, 'Banda', 'Chan', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(83, 'Vinod Kurup', 'vinod79@hotmail.com', NULL, NULL, 'Kuala Lumpur, Malaysia', NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/vinod.kurup.900', NULL, '2013-02-05 15:26:14', NULL, '620528801', 'vinod.kurup.900', NULL, 'Vinod', 'Kurup', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(84, 'Mismylastname Kanashan', 'mkanashan@gmail.com', NULL, NULL, 'Kuala Lumpur, Malaysia', NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/mkanashan', NULL, '2013-02-05 15:28:25', NULL, '614178085', 'mkanashan', NULL, 'Mismylastname', 'Kanashan', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(85, 'Nickel Tommy Lui', 'nickel984@hotmail.com', NULL, NULL, 'Beijing, China', NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/nickel.lui', NULL, '2013-02-05 15:43:39', NULL, '532400934', 'nickel.lui', NULL, 'Nickel', 'Lui', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(86, 'Jeevan Kumar', 'jeevank79@yahoo.com', NULL, NULL, 'Singapore, Singapore', NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/profile.php?id=708846741', NULL, '2013-02-05 15:43:59', NULL, '708846741', NULL, NULL, 'Jeevan', 'Kumar', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(87, 'Giulia Lina Callegari', 'giuliacallegari@yahoo.it', NULL, NULL, 'Hong Kong', NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/giulialinacallegari', NULL, '2013-02-20 16:03:15', NULL, '1275537074', 'giulialinacallegari', NULL, 'Giulia', 'Callegari', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(88, 'Alex Egger', 'alex.egger40@gmail.com', NULL, NULL, 'Zürich, Switzerland', NULL, NULL, NULL, NULL, '1', 'http://www.facebook.com/alex.egger.35', NULL, '2013-02-14 00:53:07', NULL, '100001717797320', 'alex.egger.35', NULL, 'Alex', 'Egger', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(89, 'Mehdi Lamloum', 'mmehdilamloum@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/MehdiLamloum', NULL, '2013-02-05 15:56:22', NULL, '887875550', 'MehdiLamloum', NULL, 'Mehdi', 'Lamloum', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(90, 'Sanchit Khera', 'sanchitkhera@hotmail.com', NULL, NULL, 'Rochester, New York', NULL, NULL, NULL, NULL, '5.5', 'http://www.facebook.com/sanchitkhera7', NULL, '2013-02-05 16:59:11', NULL, '656795471', 'sanchitkhera7', NULL, 'Sanchit', 'Khera', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(91, 'Cherry Leong', 'cherryleong@hotmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/cherryleong1124', NULL, '2013-02-05 17:18:10', NULL, '505408685', 'cherryleong1124', NULL, 'Cherry', 'Leong', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(92, 'Derek Seto', 'derekseto@hotmail.com', NULL, NULL, 'Hong Kong', NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/derekwtseto', NULL, '2013-02-05 17:57:35', NULL, '516164380', 'derekwtseto', NULL, 'Derek', 'Seto', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(93, 'Igor Lau', 'yee_gor@yahoo.com', NULL, NULL, 'Hong Kong', NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/igorlau', NULL, '2013-02-05 19:00:28', NULL, '583600282', 'igorlau', NULL, 'Igor', 'Lau', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(94, 'Vik? Prudnyk', 'prudnik07@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', 'http://www.facebook.com/vika.prudnyk', NULL, '2013-02-05 19:17:00', NULL, '1410048242', 'vika.prudnyk', NULL, 'Vik?', 'Prudnyk', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(95, 'Reto Steiner', 'retostar@gmail.com', NULL, NULL, 'Binningen, Switzerland', NULL, NULL, NULL, NULL, '1', 'http://www.facebook.com/reto.steiner.547', NULL, '2013-02-06 00:43:49', NULL, '100001744169049', 'reto.steiner.547', NULL, 'Reto', 'Steiner', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(96, 'Benson Lau', 'ahho123@hotmail.com.hk', NULL, NULL, 'Hong Kong', NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/benson0117', NULL, '2013-02-06 00:59:01', NULL, '100001217633846', 'benson0117', NULL, 'Benson', 'Lau', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(97, 'San Vu', 'vuminhsan@gmail.com', NULL, NULL, 'Saigon', NULL, NULL, NULL, NULL, '7', 'http://www.facebook.com/vuminhsan', NULL, '2013-02-08 12:14:00', NULL, '682516941', 'vuminhsan', NULL, 'San', 'Vu', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(98, 'Sharmi Dey', 'sharmi.dey@gmail.com', NULL, NULL, 'Mumbai, Maharashtra, India', NULL, NULL, NULL, NULL, '5.5', 'http://www.facebook.com/sharmi.dey.50', NULL, '2013-02-06 15:03:22', NULL, '760796288', 'sharmi.dey.50', NULL, 'Sharmi', 'Dey', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(99, 'Tracy Wong', 'wts_tracywong@yahoo.com.hk', NULL, NULL, 'Hong Kong', NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/wts.tracywong', NULL, '2013-02-22 10:25:29', NULL, '500961222', 'wts.tracywong', NULL, 'Tracy', 'Wong', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(100, 'Thrishool Thoom', 'thrishool@me.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5.5', 'http://www.facebook.com/thrishool.thoom', NULL, '2013-02-06 20:15:09', NULL, '1041622573', 'thrishool.thoom', NULL, 'Thrishool', 'Thoom', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(101, 'Carnaen Azer', 'carnaen@gmail.com', NULL, NULL, 'Ampang, Kuala Lumpur', NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/carnaen', NULL, '2013-02-07 12:02:46', NULL, '517000257', 'carnaen', NULL, 'Carnaen', 'Azer', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(102, 'Jo Ho', 'joho188@yahoo.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/pinkflyingpigs', NULL, '2013-02-07 12:02:58', NULL, '639714745', 'pinkflyingpigs', NULL, 'Jo', 'Ho', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(103, 'Ima Adeima', 'me_adeima@yahoo.co.id', NULL, NULL, 'Jakarta, Indonesia', NULL, NULL, NULL, NULL, '7', 'http://www.facebook.com/ima.adeima', NULL, '2013-02-07 12:03:09', NULL, '1235059718', 'ima.adeima', NULL, 'Ima', 'Adeima', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(104, 'Edmund Wong', 'myselfed@msn.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/edmund.wjm', NULL, '2013-02-07 12:03:32', NULL, '517175063', 'edmund.wjm', NULL, 'Edmund', 'Wong', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(105, 'Edwina Lim', 'justahype@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8.5', 'http://www.facebook.com/eddymonmon', NULL, '2013-02-07 13:44:20', NULL, '714712589', 'eddymonmon', NULL, 'Edwina', 'Lim', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(106, 'Rohit Gadru', 'gadrurohit@gmail.com', NULL, NULL, 'New Delhi, India', NULL, NULL, NULL, NULL, '5.5', 'http://www.facebook.com/gadrurohit', NULL, '2013-02-07 12:06:35', NULL, '1281085297', 'gadrurohit', NULL, 'Rohit', 'Gadru', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(107, 'Rahul Antony', 'staind181@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5.5', 'http://www.facebook.com/rahul.antony', NULL, '2013-02-07 12:07:33', NULL, '838030415', 'rahul.antony', NULL, 'Rahul', 'Antony', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(108, 'Nitin Mohan', 'nitinmohan99@gmail.com', NULL, NULL, 'Bangalore, India', NULL, NULL, NULL, NULL, '5.5', 'http://www.facebook.com/nitinmoh', NULL, '2013-02-07 12:08:05', NULL, '100001363774005', 'nitinmoh', NULL, 'Nitin', 'Mohan', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(109, 'Aw Jet Chin', 'jetstar7@gmail.com', NULL, NULL, 'Singapore, Singapore', NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/jet.aw', NULL, '2013-02-07 12:08:21', NULL, '702747266', 'jet.aw', NULL, 'Jet Chin', 'Aw', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(110, 'Prasad N. Edirisooriya', 'edirisooriya.prasad@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5.5', 'http://www.facebook.com/prasad.n.edirisooriya', NULL, '2013-02-07 12:08:33', NULL, '100003953935039', 'prasad.n.edirisooriya', NULL, 'Prasad', 'N. Edirisooriya', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(111, 'Kushani Pieries', 'kushanipieries@yahoo.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5.5', 'http://www.facebook.com/kushi2', NULL, '2013-02-15 14:45:29', NULL, '1473646463', 'kushi2', NULL, 'Kushani', 'Pieries', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(112, 'Rafael Guida', 'docsender@hotmail.com', NULL, NULL, 'Kuala Lumpur, Malaysia', NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/rafael.guida.1', NULL, '2013-02-07 12:09:53', NULL, '676553766', 'rafael.guida.1', NULL, 'Rafael', 'Guida', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(113, 'Lee Jyh Yeong', 'fuzk.is@gmail.com', NULL, NULL, 'Singapore, Singapore', NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/leejyhyeong', NULL, '2013-02-07 12:10:53', NULL, '645096281', 'leejyhyeong', NULL, 'Lee', 'Yeong', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(114, 'Suhasini Nafisa Jayaraam', 'suhasinii88@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5.5', 'http://www.facebook.com/suhasinij', NULL, '2013-02-07 12:11:23', NULL, '685754012', 'suhasinij', NULL, 'Suhasini', 'Jayaraam', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(115, 'Ana Tan', 'ana.ecaterina.tan@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/ana.ecaterina.tan', NULL, '2013-03-12 18:24:02', NULL, '541131836', 'ana.ecaterina.tan', NULL, 'Ana', 'Tan', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(116, 'Joshua Kho', 'jklw@hotmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/joshuakho', NULL, '2013-02-07 12:13:49', NULL, '598590324', 'joshuakho', NULL, 'Joshua', 'Kho', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(117, 'Deazz Christiadi', 'deaz_ultimate@hotmail.com', NULL, NULL, 'Jakarta, Indonesia', NULL, NULL, NULL, NULL, '7', 'http://www.facebook.com/andreas.christiadi', NULL, '2013-02-08 00:25:18', NULL, '736358930', 'andreas.christiadi', NULL, 'Deazz', 'Christiadi', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(118, 'Vaibhav Sawant', 'vaibhavsawnt@gmail.com', NULL, NULL, 'Mumbai, Maharashtra, India', NULL, NULL, NULL, NULL, '5.5', 'http://www.facebook.com/vaibhav.sawant.165', NULL, '2013-02-07 12:18:06', NULL, '654130832', 'vaibhav.sawant.165', NULL, 'Vaibhav', 'Sawant', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(119, 'Umash Shankar', 'umash.shankar@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5.5', 'http://www.facebook.com/umash.shankar.7', NULL, '2013-02-14 15:11:45', NULL, '1567309793', 'umash.shankar.7', NULL, 'Umash', 'Shankar', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(120, 'Maki Suzuki', 'maki.suzuki@ogilvy.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '9', 'http://www.facebook.com/maki.suzuki.9461', NULL, '2013-02-07 12:19:48', NULL, '1752712273', 'maki.suzuki.9461', NULL, 'Maki', 'Suzuki', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(121, 'Infas Iqbal', 'infas.iq@gmail.com', NULL, NULL, 'Colombo, Sri Lanka', NULL, NULL, NULL, NULL, '5.5', 'http://www.facebook.com/infas.iq', NULL, '2013-04-19 16:45:06', NULL, '100001025928072', 'infas.iq', NULL, 'Infas', 'Iqbal', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(122, 'Ushnish Paul', 'ushnishpaul@gmail.com', NULL, NULL, 'Bangalore, India', NULL, NULL, NULL, NULL, '5.5', 'http://www.facebook.com/ushnish.paul', NULL, '2013-02-07 12:25:56', NULL, '518734609', 'ushnish.paul', NULL, 'Ushnish', 'Paul', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(123, 'Kunal Jeswani', 'kunaljeswani@gmail.com', NULL, NULL, 'Mumbai, Maharashtra, India', NULL, NULL, NULL, NULL, '5.5', 'http://www.facebook.com/kunal.jeswani', NULL, '2013-02-14 13:19:29', NULL, '843273269', 'kunal.jeswani', NULL, 'Kunal', 'Jeswani', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(124, 'Christopher William Taylor', 'chriswtaylor@gmail.com', NULL, NULL, 'Jakarta, Indonesia', NULL, NULL, NULL, NULL, '7', 'http://www.facebook.com/chriswtaylor', NULL, '2013-02-07 12:38:35', NULL, '696817513', 'chriswtaylor', NULL, 'Christopher', 'Taylor', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(125, 'Justine Tabone', 'juz18@hotmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/justine.tabone.3', NULL, '2013-02-07 12:47:24', NULL, '901390386', 'justine.tabone.3', NULL, 'Justine', 'Tabone', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(126, 'Deep Vartak', 'deepvartak@gmail.com', NULL, NULL, 'Mumbai, Maharashtra, India', NULL, NULL, NULL, NULL, '5.5', 'http://www.facebook.com/deep.vartak', NULL, '2013-02-07 12:49:49', NULL, '1076212046', 'deep.vartak', NULL, 'Deep', 'Vartak', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(127, 'Pande Putu Putra Sujana', 'smithneoman@yahoo.com', NULL, NULL, 'Jakarta, Indonesia', NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/pande.putu.sujana', NULL, '2013-02-07 12:51:57', NULL, '635418386', 'pande.putu.sujana', NULL, 'Pande', 'Sujana', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(128, 'Raamesh Gowri Raghavan', 'iambecomedeath@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5.5', 'http://www.facebook.com/raameshgowriraghavan', NULL, '2013-02-07 12:59:34', NULL, '688523522', 'raameshgowriraghavan', NULL, 'Raamesh', 'Gowri Raghavan', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(129, 'Kamala Ram', 'kamalaram90@gmail.com', NULL, NULL, 'Pune, Maharashtra', NULL, NULL, NULL, NULL, '5.5', 'http://www.facebook.com/kamalaram', NULL, '2013-03-13 12:18:27', NULL, '518210020', 'kamalaram', NULL, 'Kamala', 'Ram', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(130, 'Jayant Mishra', 'jayantmishra1@yahoo.com', NULL, NULL, 'Bangalore, India', NULL, NULL, NULL, NULL, '5.5', 'http://www.facebook.com/jayantm2', NULL, '2013-02-07 13:02:49', NULL, '540850227', 'jayantm2', NULL, 'Jayant', 'Mishra', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(131, 'Prakash Nair', 'praxxx.nair@gmail.com', NULL, NULL, 'Mumbai, Maharashtra, India', NULL, NULL, NULL, NULL, '5.5', 'http://www.facebook.com/prakash.nair.9256', NULL, '2013-02-07 13:04:25', NULL, '648771470', 'prakash.nair.9256', NULL, 'Prakash', 'Nair', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(132, 'Robin Phillips', 'robinp73@gmail.com', NULL, NULL, 'Singapore, Singapore', NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/robin.phillips.5473', NULL, '2013-02-07 13:06:14', NULL, '598582062', 'robin.phillips.5473', NULL, 'Robin', 'Phillips', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(133, 'Rajat Ray', 'rajat.ray@ogilvy.com', NULL, NULL, 'Bangalore, India', NULL, NULL, NULL, NULL, '6', 'http://www.facebook.com/rajat.ray3', NULL, '2013-02-07 13:09:37', NULL, '1392130860', 'rajat.ray3', NULL, 'Rajat', 'Ray', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(134, 'Neha Shobha Punjabi', 'nehapunjabi@gmail.com', NULL, NULL, 'Mumbai, Maharashtra, India', NULL, NULL, NULL, NULL, '5.5', 'http://www.facebook.com/nehapunjabi', NULL, '2013-02-07 13:09:44', NULL, '844850229', 'nehapunjabi', NULL, 'Neha', 'Punjabi', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(135, 'Tejwinder S Anand', 'advantej@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5.5', 'http://www.facebook.com/advantej', NULL, '2013-02-07 13:14:24', NULL, '606849612', 'advantej', NULL, 'Tejwinder', 'Anand', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(136, 'Vinki Bhatia', 'vinkaibhatia@hotmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5.5', 'http://www.facebook.com/vinki.bhatia', NULL, '2013-02-07 13:17:47', NULL, '569871778', 'vinki.bhatia', NULL, 'Vinki', 'Bhatia', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(137, 'Joycie Koor', 'joyce_koor@hotmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/joyce.koor', NULL, '2013-05-20 09:56:04', NULL, '787941659', 'joyce.koor', NULL, 'Joycie', 'Koor', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(138, 'Jle Tan', 'jayle.c@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '6.5', 'http://www.facebook.com/charlottetann', NULL, '2013-02-07 13:19:47', NULL, '227800415', 'charlottetann', NULL, 'Jle', 'Tan', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(139, 'Bhavna Neel', 'bhavna.unique@gmail.com', NULL, NULL, 'Bangalore, India', NULL, NULL, NULL, NULL, '5.5', 'http://www.facebook.com/bhavna.neel', NULL, '2013-02-07 13:22:22', NULL, '286700565', 'bhavna.neel', NULL, 'Bhavna', 'Neel', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(140, 'Daone Maddy', 'da1nly.maddy@gmail.com', NULL, NULL, 'Mumbai, Maharashtra, India', NULL, NULL, NULL, NULL, '5.5', 'http://www.facebook.com/daone.maddy', NULL, '2013-02-07 13:24:12', NULL, '100002083884085', 'daone.maddy', NULL, 'Daone', 'Maddy', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(141, 'Raghav Srinivasan', 'venkataraghavan.srinivasan@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5.5', 'http://www.facebook.com/raghav.srinivasan.9', NULL, '2013-02-07 13:28:35', NULL, '649252634', 'raghav.srinivasan.9', NULL, 'Raghav', 'Srinivasan', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(142, 'Samera Khan', 'samera21@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5.5', 'http://www.facebook.com/samera.khan.184', NULL, '2013-02-07 13:30:15', NULL, '756162288', 'samera.khan.184', NULL, 'Samera', 'Khan', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(143, 'Heather Cheong-Garratt', 'heather.cheong@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/heather.cheong.garratt', NULL, '2013-02-21 19:49:25', NULL, '691655550', 'heather.cheong.garratt', NULL, 'Heather', 'Cheong-Garratt', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(144, 'Lu-Ann Fuentes-Bajarias', 'fuentes.luann@gmail.com', NULL, NULL, 'Manila, Philippines', NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/luann.fuentesbajarias', NULL, '2013-02-07 13:32:32', NULL, '699379138', 'luann.fuentesbajarias', NULL, 'Lu-Ann', 'Fuentes-Bajarias', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(145, 'Kiran Ramamurthy', 'kiran.murthy@in.lenovo.com', NULL, NULL, 'Bangalore, India', NULL, NULL, NULL, NULL, '5.5', 'http://www.facebook.com/kiranrmurthy', NULL, '2013-02-07 13:33:44', NULL, '625848082', 'kiranrmurthy', NULL, 'Kiran', 'Ramamurthy', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(146, 'Sreenivasan K K Nambiar', 'kk.sreenivasan@ogilvy.com', NULL, NULL, 'New Delhi, India', NULL, NULL, NULL, NULL, '5.5', 'http://www.facebook.com/sreenivasan.k.nambiar', NULL, '2013-02-07 13:43:48', NULL, '656592616', 'sreenivasan.k.nambiar', NULL, 'Sreenivasan', 'Nambiar', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(147, 'Anoop Sathyanand', 'noops2270@yahoo.co.uk', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5.5', 'http://www.facebook.com/anoop.sathyanand', NULL, '2013-02-07 13:44:00', NULL, '537983906', 'anoop.sathyanand', NULL, 'Anoop', 'Sathyanand', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(148, '???', 'saradi73@hotmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '9', 'http://www.facebook.com/saradikor', NULL, '2013-02-07 13:44:10', NULL, '100000506597991', 'saradikor', NULL, '??', '?', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(149, 'Manu Nair', 'manushyama@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5.5', 'http://www.facebook.com/manu.nair.96930', NULL, '2013-02-07 13:48:11', NULL, '1616546534', 'manu.nair.96930', NULL, 'Manu', 'Nair', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(150, 'Siddhesh Pednekar', 'siddhesh.pednekar5@gmail.com', NULL, NULL, 'Mumbai, Maharashtra, India', NULL, NULL, NULL, NULL, '5.5', 'http://www.facebook.com/SiddheshPednekar8', NULL, '2013-02-07 13:51:25', NULL, '100001461784567', 'SiddheshPednekar8', NULL, 'Siddhesh', 'Pednekar', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(151, 'Loren Cheung', 'loren0929@hotmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/loren.cheung.1', NULL, '2013-02-07 13:51:39', NULL, '756105695', 'loren.cheung.1', NULL, 'Loren', 'Cheung', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(152, 'Wang Xiao Qing', 'nathalie1126@hotmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/wang.x.qing.16', NULL, '2013-02-07 13:59:34', NULL, '686615265', 'wang.x.qing.16', NULL, 'Wang', 'Qing', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(153, 'Kumail Mohib', 'kumail.mohib@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5', 'http://www.facebook.com/kumail.mohib', NULL, '2013-02-07 14:34:06', NULL, '603860296', 'kumail.mohib', NULL, 'Kumail', 'Mohib', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(154, 'Nitin Navalkar', 'nitin.navalkar@gmail.com', NULL, NULL, 'Mumbai, Maharashtra, India', NULL, NULL, NULL, NULL, '5.5', 'http://www.facebook.com/nitin.navalkar', NULL, '2013-02-07 14:21:08', NULL, '591747441', 'nitin.navalkar', NULL, 'Nitin', 'Navalkar', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(155, 'Brenda Han', 'brenda.han@gmail.com', NULL, NULL, 'Singapore, Singapore', NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/brenda.han', NULL, '2013-02-07 14:24:29', NULL, '631502336', 'brenda.han', NULL, 'Brenda', 'Han', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(156, 'Jonam Bocaj', 'copylation@hotmail.com', NULL, NULL, 'Bangalore, India', NULL, NULL, NULL, NULL, '5.5', 'http://www.facebook.com/jonam.bocaj', NULL, '2013-02-07 14:29:30', NULL, '707092680', 'jonam.bocaj', NULL, 'Jonam', 'Bocaj', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(157, 'Sunil Krishnan', 'sunua10@gmail.com', NULL, NULL, 'Bangalore, India', NULL, NULL, NULL, NULL, '5.5', 'http://www.facebook.com/sunua10', NULL, '2013-02-07 14:34:05', NULL, '1543174162', 'sunua10', NULL, 'Sunil', 'Krishnan', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(158, 'Anil Nair', 'kak009@hotmail.com', NULL, NULL, 'Bangalore, India', NULL, NULL, NULL, NULL, '5.5', 'http://www.facebook.com/anilkkumar', NULL, '2013-02-07 14:34:38', NULL, '765830374', 'anilkkumar', NULL, 'Anil', 'Nair', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(159, 'Tonico Maningat', 'jamaningat@yahoo.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/sirtonico', NULL, '2013-02-07 14:37:38', NULL, '1537265736', 'sirtonico', NULL, 'Tonico', 'Maningat', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(160, 'Ami Parekh', 'parekh.amee@gmail.com', NULL, NULL, 'Mumbai, Maharashtra, India', NULL, NULL, NULL, NULL, '5.5', 'http://www.facebook.com/ami.parekh.507', NULL, '2013-02-07 14:43:49', NULL, '100000238131081', 'ami.parekh.507', NULL, 'Ami', 'Parekh', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(161, 'Lindsay Yi-Ling Ting', 'lindsayting10@googlemail.com', NULL, NULL, 'Taipei, Taiwan', NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/LindsayTing', NULL, '2013-02-07 15:01:28', NULL, '536580771', 'LindsayTing', NULL, 'Lindsay Yi-Ling', 'Ting', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(162, 'Tròn Ngu?n', 'alwq2002@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '7', 'http://www.facebook.com/alwq2002', NULL, '2013-03-13 15:35:59', NULL, '1278120723', 'alwq2002', NULL, 'Tròn', 'Ngu?n', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(163, 'Rahmat Chaniago', 'ogar@rocketmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '7', 'http://www.facebook.com/rahmat.chaniago', NULL, '2013-02-07 15:11:26', NULL, '1014794646', 'rahmat.chaniago', NULL, 'Rahmat', 'Chaniago', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(164, 'Ayu Shintya', 'shintya_2008@yahoo.com.au', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '7', 'http://www.facebook.com/ayu.shintya', NULL, '2013-02-07 15:19:02', NULL, '1469635752', 'ayu.shintya', NULL, 'Ayu', 'Shintya', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', '');
INSERT INTO `tbl_users` (`id`, `name`, `email`, `age`, `gender`, `city`, `country`, `nric`, `mobile_number`, `landline_number`, `timezone`, `url`, `visits`, `last_login`, `is_active`, `userid`, `username`, `password`, `first_name`, `last_name`, `location`, `dob`, `title`, `role`, `birthday`, `phone_number_prefix`, `phone_number`, `address`, `postal_code`, `i_am_lover_of`, `i_am`, `is_subscribed`, `salutation`, `contact_number`) VALUES
(165, 'Waleed Ansari', 'waleedansarian@gmail.com', NULL, NULL, 'Karachi, Pakistan', NULL, NULL, NULL, NULL, '5', 'http://www.facebook.com/waleed.ansari', NULL, '2013-02-07 15:19:49', NULL, '765189433', 'waleed.ansari', NULL, 'Waleed', 'Ansari', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(166, 'Be Baldoza', 'bebaldoza@yahoo.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/bellestar', NULL, '2013-02-07 15:34:08', NULL, '751772042', 'bellestar', NULL, 'Be', 'Baldoza', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(167, 'Laura Kamaruddin', 'laurakamaruddin@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/lkamaruddin', NULL, '2013-02-07 15:38:30', NULL, '749074289', 'lkamaruddin', NULL, 'Laura', 'Kamaruddin', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(168, 'Jenna Boller', 'jboller@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/jennaboller', NULL, '2013-02-07 15:46:49', NULL, '205333', 'jennaboller', NULL, 'Jenna', 'Boller', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(169, 'Jess Huang', 'jess_xf@126.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/jesshuang912', NULL, '2013-02-07 15:49:43', NULL, '750019855', 'jesshuang912', NULL, 'Jess', 'Huang', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(170, 'Thanh Dao', 'thanhdad@yahoo.com', NULL, NULL, 'Ho Chi Minh City, Vietnam', NULL, NULL, NULL, NULL, '7', 'http://www.facebook.com/thanhdad', NULL, '2013-02-07 15:58:58', NULL, '716696929', 'thanhdad', NULL, 'Thanh', 'Dao', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(171, 'Ajanta Barker', 'ajanta.barker@ogilvy.com', NULL, NULL, 'Bangalore, India', NULL, NULL, NULL, NULL, '6', 'http://www.facebook.com/ajanta.barker', NULL, '2013-04-23 14:30:27', NULL, '606203664', 'ajanta.barker', NULL, 'Ajanta', 'Barker', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(172, 'Tes Parado', 'mtparanda@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/tes.parado', NULL, '2013-02-07 17:00:30', NULL, '646341977', 'tes.parado', NULL, 'Tes', 'Parado', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(173, 'Liao Ahon', 'liaoahon@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/liao.ahon', NULL, '2013-02-07 17:31:20', NULL, '735529819', 'liao.ahon', NULL, 'Liao', 'Ahon', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(174, 'Lydia Aprilla Tarigan', 'red_fanta@yahoo.com', NULL, NULL, 'Jakarta, Indonesia', NULL, NULL, NULL, NULL, '7', 'http://www.facebook.com/lydiatarigan', NULL, '2013-03-13 11:29:13', NULL, '782661893', 'lydiatarigan', NULL, 'Lydia', 'Tarigan', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(175, 'Murtaza Ali', 'murtazabagasjiwala@gmail.com', NULL, NULL, 'Mumbai, Maharashtra, India', NULL, NULL, NULL, NULL, '5.5', 'http://www.facebook.com/murtazabagasjiwala', NULL, '2013-02-07 17:40:26', NULL, '1243323856', 'murtazabagasjiwala', NULL, 'Murtaza', 'Ali', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(176, 'Anand Gharat', 'anand.gharat@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5.5', 'http://www.facebook.com/anand.gharat.397', NULL, '2013-02-07 17:42:25', NULL, '687983196', 'anand.gharat.397', NULL, 'Anand', 'Gharat', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(177, 'Chris Reitermann', 'kwokamba@hotmail.com', NULL, NULL, 'Shanghai, China', NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/chris.reitermann', NULL, '2013-02-07 17:53:35', NULL, '660690290', 'chris.reitermann', NULL, 'Chris', 'Reitermann', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(178, 'Dirk Eschenbacher', 'zedirk@yahoo.com', NULL, NULL, 'Beijing, China', NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/zedirk', NULL, '2013-04-28 13:49:31', NULL, '615376885', 'zedirk', NULL, 'Dirk', 'Eschenbacher', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(179, 'Raffy Castaneda', 'raffy.castaneda@ogilvy.com', NULL, NULL, 'Pasig', NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/raffy.castaneda.77', NULL, '2013-02-07 18:04:19', NULL, '526280834', 'raffy.castaneda.77', NULL, 'Raffy', 'Castaneda', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(180, 'Riyasat Mahmud', 'rohon691@yahoo.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '6', 'http://www.facebook.com/riyasat.mahmud', NULL, '2013-02-07 18:13:48', NULL, '100001919764142', 'riyasat.mahmud', NULL, 'Riyasat', 'Mahmud', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(181, 'Zae Tein', 'zaeberry@yahoo.co.uk', NULL, NULL, 'Beijing, China', NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/zaeberry', NULL, '2013-02-07 18:19:04', NULL, '533555570', 'zaeberry', NULL, 'Zae', 'Tein', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(182, 'Supavadee Noi Tantiyanon', 'stantiyanon@gmail.com', NULL, NULL, 'Bangkok, Thailand', NULL, NULL, NULL, NULL, '7', 'http://www.facebook.com/Supavadee.Noi', NULL, '2013-02-21 20:17:50', NULL, '757284022', 'Supavadee.Noi', NULL, 'Supavadee Noi', 'Tantiyanon', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(183, 'Hsien-Hsien Lei', 'hsienlei@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/hsien.lei', NULL, '2013-05-05 20:16:12', NULL, '502482172', 'hsien.lei', NULL, 'Hsien-Hsien', 'Lei', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(184, 'Nikita Goswami', 'goswami.nikita05@gmail.com', NULL, NULL, 'Mumbai, Maharashtra, India', NULL, NULL, NULL, NULL, '5.5', 'http://www.facebook.com/nikita.goswami.752', NULL, '2013-02-07 19:53:26', NULL, '905810397', 'nikita.goswami.752', NULL, 'Nikita', 'Goswami', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(185, 'Shweta Agarwal', 'ladoo.sam@gmail.com', NULL, NULL, 'Mumbai, Maharashtra, India', NULL, NULL, NULL, NULL, '5.5', 'http://www.facebook.com/agarwal.k.shweta', NULL, '2013-02-07 19:54:52', NULL, '538019685', 'agarwal.k.shweta', NULL, 'Shweta', 'Agarwal', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(186, 'Aldila Mandalika', 'missfolksy@yahoo.com', NULL, NULL, 'Jakarta, Indonesia', NULL, NULL, NULL, NULL, '7', 'http://www.facebook.com/dila.aldila', NULL, '2013-02-07 22:20:34', NULL, '1047560735', 'dila.aldila', NULL, 'Aldila', 'Mandalika', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(187, 'Carl Tan', 'carizl@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/carl.tan.927', NULL, '2013-02-07 22:12:57', NULL, '100000850235632', 'carl.tan.927', NULL, 'Carl', 'Tan', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(188, 'Akash Jain', 'aks1416@yahoo.co.in', NULL, NULL, 'Mumbai, Maharashtra, India', NULL, NULL, NULL, NULL, '5.5', 'http://www.facebook.com/akash.jain.5015', NULL, '2013-02-07 22:29:52', NULL, '100000095241885', 'akash.jain.5015', NULL, 'Akash', 'Jain', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(189, 'Chris Riley', 'chris.riley@ogilvy.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/chris.riley.96343', NULL, '2013-04-27 10:17:36', NULL, '664094808', 'chris.riley.96343', NULL, 'Chris', 'Riley', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(190, 'Hass Aminian', 'hassled@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/hass.aminian', NULL, '2013-02-07 23:35:10', NULL, '719225627', 'hass.aminian', NULL, 'Hass', 'Aminian', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(191, 'Tal Adams', 'app+56s6d3ddcc.estjs1.f5d39cb83e3fb95bfafa8e4f1ca8037b@proxymail.facebook.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 'http://www.facebook.com/tal.adams', NULL, '2013-02-07 23:56:17', NULL, '500092801', 'tal.adams', NULL, 'Tal', 'Adams', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(192, 'Chandra Barathi', 'chandra.barathi@gmail.com', NULL, NULL, 'Singapore, Singapore', NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/chandra.barathi', NULL, '2013-02-08 00:07:45', NULL, '575949314', 'chandra.barathi', NULL, 'Chandra', 'Barathi', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(193, 'Bret Clement', 'bret.clement@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '-7', 'http://www.facebook.com/bret.clement', NULL, '2013-02-08 04:51:20', NULL, '680747834', 'bret.clement', NULL, 'Bret', 'Clement', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(194, 'Miki  Fujimura', 'mura-fura@mail.bbexcite.jp', NULL, NULL, 'Suginami-ku, Tokyo, Japan', NULL, NULL, NULL, NULL, '9', 'http://www.facebook.com/miki.fujimura.5', NULL, '2013-02-08 09:20:19', NULL, '100003705094154', 'miki.fujimura.5', NULL, 'Miki', 'Fujimura', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(195, 'Shen Acosta', 'shenuska@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/shen.acosta', NULL, '2013-02-08 09:54:54', NULL, '737964335', 'shen.acosta', NULL, 'Shen', 'Acosta', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(196, 'Harinder Singh', 'me@lightyoruichi.com', NULL, NULL, 'Petaling Jaya, Malaysia', NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/lightyoruichi', NULL, '2013-02-08 11:48:33', NULL, '664596657', 'lightyoruichi', NULL, 'Harinder', 'Singh', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(197, 'Anshul Nanda', 'nanda.anshul@gmail.com', NULL, NULL, 'Mumbai, Maharashtra, India', NULL, NULL, NULL, NULL, '5.5', 'http://www.facebook.com/Anshul.Nanda', NULL, '2013-02-08 12:26:49', NULL, '648724841', 'Anshul.Nanda', NULL, 'Anshul', 'Nanda', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(198, 'Rinita Parekh', 'rinita.parekh@yahoo.com', NULL, NULL, 'Mumbai, Maharashtra, India', NULL, NULL, NULL, NULL, '5.5', 'http://www.facebook.com/rinita.parekh', NULL, '2013-02-08 12:31:51', NULL, '100001882763205', 'rinita.parekh', NULL, 'Rinita', 'Parekh', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(199, 'Thirza Zefanya', 'tzephania@hotmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '7', 'http://www.facebook.com/thirza.zefanya', NULL, '2013-02-08 12:34:35', NULL, '793033424', 'thirza.zefanya', NULL, 'Thirza', 'Zefanya', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(200, 'Leon De Silva', 'avtarius.osirus@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/avtarius', NULL, '2013-02-08 12:57:11', NULL, '100000541437115', 'avtarius', NULL, 'Leon', 'De Silva', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(201, 'Michelle Wong Ming Ming', 'wongmingming@gmail.com', NULL, NULL, 'Singapore, Singapore', NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/wongmingming', NULL, '2013-02-08 14:42:17', NULL, '750728135', 'wongmingming', NULL, 'Michelle', 'Ming', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(202, 'YanYi Chee', 'cheeyanyi@yahoo.com', NULL, NULL, 'Singapore, Singapore', NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/yanyi.chee', NULL, '2013-02-08 16:23:01', NULL, '595616094', 'yanyi.chee', NULL, 'YanYi', 'Chee', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(203, 'Yogi Bhagat', 'yogibhagat_16@yahoo.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5.5', 'http://www.facebook.com/yogi.bhagat.3', NULL, '2013-02-08 17:58:49', NULL, '1681073124', 'yogi.bhagat.3', NULL, 'Yogi', 'Bhagat', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(204, 'Julian Smith', 'julian_lilia@uol.com.br', NULL, NULL, 'Singapore, Singapore', NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/julianssmith', NULL, '2013-02-22 12:23:14', NULL, '670657358', 'julianssmith', NULL, 'Julian', 'Smith', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(205, 'Darshanie Saman Kumari', 'rathnawalli@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5.5', 'http://www.facebook.com/ratnawalli', NULL, '2013-02-08 19:52:58', NULL, '1481900145', 'ratnawalli', NULL, 'Darshanie', 'Kumari', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(206, 'Natasha Suresh', 'natasha088@gmail.com', NULL, NULL, 'Mumbai, Maharashtra, India', NULL, NULL, NULL, NULL, '5.5', 'http://www.facebook.com/gyak88', NULL, '2013-02-08 22:06:24', NULL, '501886871', 'gyak88', NULL, 'Natasha', 'Suresh', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(207, 'Nikhil Agnihotri', 'nikhil.agni786@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5.5', 'http://www.facebook.com/nikhil.agnihotri.5', NULL, '2013-02-09 19:49:47', NULL, '100000997651983', 'nikhil.agnihotri.5', NULL, 'Nikhil', 'Agnihotri', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(208, 'Xu Zi', 'xuzixuzi@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8.5', 'http://www.facebook.com/soozey', NULL, '2013-02-11 03:04:28', NULL, '782155690', 'soozey', NULL, 'Xu', 'Zi', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(209, 'TzeChin Alyssa', 'alyssa_ttc@yahoo.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '11', 'http://www.facebook.com/tzechin.alyssa', NULL, '2013-02-11 11:09:06', NULL, '1266962936', 'tzechin.alyssa', NULL, 'TzeChin', 'Alyssa', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(210, 'Henry Wijaya', 'kirasuran79@yahoo.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '7', 'http://www.facebook.com/henry.wijaya.376', NULL, '2013-02-11 11:34:14', NULL, '1040411330', 'henry.wijaya.376', NULL, 'Henry', 'Wijaya', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(211, 'Mansi Pal', 'mansipal1@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5.5', 'http://www.facebook.com/mansi.pal.3', NULL, '2013-02-11 13:02:22', NULL, '536492048', 'mansi.pal.3', NULL, 'Mansi', 'Pal', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(212, 'Albert Tang', 'sexay_kulmasta@hotmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/albert.tang1', NULL, '2013-02-12 12:01:17', NULL, '648535824', 'albert.tang1', NULL, 'Albert', 'Tang', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(213, 'Jun Yeo', 'junyeo@rocketmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/jun.yeo', NULL, '2013-07-12 17:09:23', NULL, '705390599', 'jun.yeo', NULL, 'Jun', 'Yeo', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(214, 'Brian Kwek', 'briankwek@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/briankwek', NULL, '2013-02-14 09:36:52', NULL, '935384', 'briankwek', NULL, 'Brian', 'Kwek', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(215, 'Geraldine Yap', 'jadedout86@gmail.com', NULL, NULL, 'Singapore, Singapore', NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/gly86', NULL, '2013-02-14 11:23:46', NULL, '557436104', 'gly86', NULL, 'Geraldine', 'Yap', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(216, 'Ananda Nanda', 'anandan9900@yahoo.co.in', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5.5', 'http://www.facebook.com/anandan.subramani', NULL, '2013-02-14 13:41:37', NULL, '1222228077', 'anandan.subramani', NULL, 'Ananda', 'Nanda', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(217, 'Denise Ng', 'shaoyoulijin@yahoo.com', NULL, NULL, 'Hong Kong', NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/denise.ng.589', NULL, '2013-02-14 23:41:17', NULL, '1292966282', 'denise.ng.589', NULL, 'Denise', 'Ng', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(218, 'Daan Van Rossum', 'daanv@nrossum.nl', NULL, NULL, 'Chicago, Illinois', NULL, NULL, NULL, NULL, '-6', 'http://www.facebook.com/daan.vanrossum', NULL, '2013-02-15 14:20:49', NULL, '670514102', 'daan.vanrossum', NULL, 'Daan', 'Van Rossum', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(219, 'Nijesh Warrier', 'taureanrules@gmail.com', NULL, NULL, 'Mumbai, Maharashtra, India', NULL, NULL, NULL, NULL, '5.5', 'http://www.facebook.com/nijesh.warrier', NULL, '2013-02-15 14:57:31', NULL, '697910366', 'nijesh.warrier', NULL, 'Nijesh', 'Warrier', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(220, 'Shoba Uthappa', 'ajit_shob@yahoo.com', NULL, NULL, 'Hyderabad, Andhra Pradesh', NULL, NULL, NULL, NULL, '5.5', 'http://www.facebook.com/shoba.uthappa', NULL, '2013-02-15 16:24:28', NULL, '100000230424661', 'shoba.uthappa', NULL, 'Shoba', 'Uthappa', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(221, 'Ashish Tomar', 'ashishh.tomar@yahoo.co.in', NULL, NULL, 'Mumbai, Maharashtra, India', NULL, NULL, NULL, NULL, '5.5', 'http://www.facebook.com/ashish.160221', NULL, '2013-02-15 17:23:15', NULL, '1447856971', 'ashish.160221', NULL, 'Ashish', 'Tomar', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(222, 'Jazz Joshua', 'joshuadoi.aung@gmail.com', NULL, NULL, 'Rangoon, Yangon, Burma', NULL, NULL, NULL, NULL, '6.5', 'http://www.facebook.com/seng.jazz', NULL, '2013-04-21 01:06:55', NULL, '100000127339949', 'seng.jazz', NULL, 'Joshua', 'Jazz', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(223, 'Sabrina Baumeler', 'sabrina.baumeler@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'http://www.facebook.com/sabrina.baumeler.9', NULL, '2013-02-21 16:17:50', NULL, '100002267853096', 'sabrina.baumeler.9', NULL, 'Sabrina', 'Baumeler', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(224, 'Matt Doherty', 'matt.dort@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '-5', 'http://www.facebook.com/dorts', NULL, '2013-02-16 00:40:37', NULL, '1906981', 'dorts', NULL, 'Matt', 'Doherty', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(225, 'Wish Saliente Torres', 'wishnie.torres@redworks.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/wish.s.torres', NULL, '2013-02-16 16:02:00', NULL, '683415082', 'wish.s.torres', NULL, 'Wish', 'Torres', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(226, 'Shafaq Noor', 'shafaqnoor_@hotmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5', 'http://www.facebook.com/shafaq.noor.9', NULL, '2013-02-18 01:05:31', NULL, '576970754', 'shafaq.noor.9', NULL, 'Shafaq', 'Noor', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(227, 'Jean Lim', 'archermist@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '-8', 'http://www.facebook.com/jean.lim.319', NULL, '2013-02-18 03:21:24', NULL, '1499717991', 'jean.lim.319', NULL, 'Jean', 'Lim', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(228, 'Ajay Kumar', 'ajaykumar_1245@yahoo.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4', 'http://www.facebook.com/profile.php?id=100002248548951', NULL, '2013-02-18 04:02:15', NULL, '100002248548951', NULL, NULL, 'Ajay', 'Kumar', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(229, 'Raheel Talat', 'raheeltalat92@gmail.com', NULL, NULL, 'Faisalabad', NULL, NULL, NULL, NULL, '5', 'http://www.facebook.com/raheel.talat', NULL, '2013-02-18 07:35:20', NULL, '100002095707435', 'raheel.talat', NULL, 'Raheel', 'Talat', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(230, 'Yi Yang', 'eva.yang1@hotmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/yi.yang.9026040', NULL, '2013-02-18 11:54:01', NULL, '1014801550', 'yi.yang.9026040', NULL, 'Yi', 'Yang', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(231, 'Lu Na', 'nlu_542@hotmail.com', NULL, NULL, 'Beijing', NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/profile.php?id=595822971', NULL, '2013-03-14 17:08:35', NULL, '595822971', NULL, NULL, 'Lu', 'Na', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(232, 'Nicoletta Stefanidou', 'nstefanidou@mac.com', NULL, NULL, 'Hong Kong', NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/nicoletta.stefanidou', NULL, '2013-02-18 17:55:48', NULL, '602266960', 'nicoletta.stefanidou', NULL, 'Nicoletta', 'Stefanidou', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(233, 'Rajesh Nair', 'rajesh230776@gmail.com', NULL, NULL, 'New Delhi, India', NULL, NULL, NULL, NULL, '5.5', 'http://www.facebook.com/rajesh.nair.794628', NULL, '2013-02-18 19:12:13', NULL, '100002364729423', 'rajesh.nair.794628', NULL, 'Rajesh', 'Nair', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(234, 'Gautam Verma', 'gautam093@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5.5', 'http://www.facebook.com/gtm.social', NULL, '2013-02-18 21:31:29', NULL, '782810611', 'gtm.social', NULL, 'Gautam', 'Verma', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(235, 'Sreekanth Reddy', 'sreekanth_1nonly@yahoo.co.in', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5.5', 'http://www.facebook.com/sreekanththeone', NULL, '2013-02-19 21:25:36', NULL, '1001850282', 'sreekanththeone', NULL, 'Sreekanth', 'Reddy', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(236, 'Justin Yu', 'just_justin_carfreak2@hotmail.com', NULL, NULL, 'Brisbane, Queensland, Australia', NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/Justiiin.Yu', NULL, '2013-02-19 15:07:36', NULL, '502692906', 'Justiiin.Yu', NULL, 'Justin', 'Yu', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(237, 'Lissa Deng', 'lissadeng@126.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/lissa.deng', NULL, '2013-02-19 16:58:14', NULL, '1396994501', 'lissa.deng', NULL, 'Lissa', 'Deng', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(238, 'Nick Turner', 'nickjamesturner@yahoo.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/nick.turner.716', NULL, '2013-02-19 17:43:40', NULL, '100000078155837', 'nick.turner.716', NULL, 'Nick', 'Turner', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(239, 'Raf Blmsk', 'rafikb@gmail.com', NULL, NULL, 'Montreal, Quebec', NULL, NULL, NULL, NULL, '-5', 'http://www.facebook.com/rafikb', NULL, '2013-02-20 05:31:00', NULL, '149300281', 'rafikb', NULL, 'Raf', 'Blmsk', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(240, 'Ung Siripat', 'ung_siripat@hotmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '7', 'http://www.facebook.com/ung.siripat', NULL, '2013-02-20 14:29:33', NULL, '647554950', 'ung.siripat', NULL, 'Ung', 'Siripat', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(241, 'Pritasari Himawan', 'himawan_pritasari@yahoo.co.uk', NULL, NULL, 'Jakarta, Indonesia', NULL, NULL, NULL, NULL, '7', 'http://www.facebook.com/pritasari.himawan', NULL, '2013-02-20 14:40:46', NULL, '698572305', 'pritasari.himawan', NULL, 'Pritasari', 'Himawan', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(242, 'Paul Matheson', 'paul.matheson@gmail.com', NULL, NULL, 'Hong Kong', NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/paul.matheson.33', NULL, '2013-02-20 14:59:57', NULL, '534272924', 'paul.matheson.33', NULL, 'Paul', 'Matheson', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(243, 'Tjahjadi Handaja', 'handaja.tjahjadi@yahoo.com', NULL, NULL, 'Jakarta, Indonesia', NULL, NULL, NULL, NULL, '7', 'http://www.facebook.com/tjahjadi.handaja', NULL, '2013-02-20 18:14:44', NULL, '100000519376020', 'tjahjadi.handaja', NULL, 'Tjahjadi', 'Handaja', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(244, 'Chandrabose KR', 'boseakpz@gmail.com', NULL, NULL, 'Kochi, India', NULL, NULL, NULL, NULL, '5.5', 'http://www.facebook.com/chandrabose.kr', NULL, '2013-02-20 21:59:14', NULL, '1053899933', 'chandrabose.kr', NULL, 'Chandrabose', 'KR', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(245, 'Akber Ahmed', 'akberahmed@gmail.com', NULL, NULL, 'Karachi, Pakistan', NULL, NULL, NULL, NULL, '5', 'http://www.facebook.com/akber.ahmed2', NULL, '2013-02-21 03:28:02', NULL, '100000374727829', 'akber.ahmed2', NULL, 'Akber', 'Ahmed', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(246, 'Aaron Kwok', 'aaronkwok@live.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '-5', 'http://www.facebook.com/akwok', NULL, '2013-02-21 14:06:08', NULL, '1642560018', 'akwok', NULL, 'Aaron', 'Kwok', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(247, 'Kouri Woongki Song', 'wsong949@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/kwsong', NULL, '2013-02-21 18:51:22', NULL, '776378791', 'kwsong', NULL, 'Kouri', 'Song', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(248, 'Jerry Smith', 'jerry.smith@ogilvy.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/Jerrydouglassmith', NULL, '2013-02-21 18:52:16', NULL, '686125963', 'Jerrydouglassmith', NULL, 'Jerry', 'Smith', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(249, 'Pradyumn Tandon', 'pradyumntandon@gmail.com', NULL, NULL, 'Mumbai, Maharashtra, India', NULL, NULL, NULL, NULL, '5.5', 'http://www.facebook.com/pradyumn.tandon', NULL, '2013-02-21 19:15:12', NULL, '557876043', 'pradyumn.tandon', NULL, 'Pradyumn', 'Tandon', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(250, 'Vida Verity Lim', 'vverity@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/vidaverity', NULL, '2013-02-21 19:31:31', NULL, '557244225', 'vidaverity', NULL, 'Vida', 'Lim', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(251, 'Hans Eric Roxas-Chua', 'hansr@umich.edu', NULL, NULL, 'Makati', NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/blueblade', NULL, '2013-03-09 14:55:03', NULL, '695321364', 'blueblade', NULL, 'Hans Eric', 'Roxas-Chua', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(252, 'Connect Aci', 'aci-institute@ntu.edu.sg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/connect.aci', NULL, '2013-02-22 10:57:36', NULL, '100003355749725', 'connect.aci', NULL, 'Connect', 'Aci', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(253, 'Dharshika Satheeja', 'toondharsh@yahoo.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5.5', 'http://www.facebook.com/dharshika.satheeja', NULL, '2013-02-22 11:44:41', NULL, '615498878', 'dharshika.satheeja', NULL, 'Dharshika', 'Satheeja', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(254, 'Shenaz Bapooji', 'shenazzb@gmail.com', NULL, NULL, 'Bangalore, India', NULL, NULL, NULL, NULL, '5.5', 'http://www.facebook.com/shenazzb', NULL, '2013-02-22 14:44:22', NULL, '781433337', 'shenazzb', NULL, 'Shenaz', 'Bapooji', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(255, 'Zahra Errol Babuji', 'thirty6th.zahir@hotmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/faraahandzahra', NULL, '2013-03-12 19:28:14', NULL, '504608729', 'faraahandzahra', NULL, 'Zahra', 'Babuji', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(256, 'Mai Pham', 'phamphuongmai1990@yahoo.com', NULL, NULL, 'Ho Chi Minh City, Vietnam', NULL, NULL, NULL, NULL, '7', 'http://www.facebook.com/mai.pham.1460', NULL, '2013-02-22 16:02:15', NULL, '647027425', 'mai.pham.1460', NULL, 'Mai', 'Pham', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(257, 'Pratap Nambiar', 'pnambiar@thoughtperfect.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/pratap.nambiar', NULL, '2013-02-22 17:21:40', NULL, '674998446', 'pratap.nambiar', NULL, 'Pratap', 'Nambiar', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(258, 'Fu Jing', 'fujing1220@gmail.com', NULL, NULL, 'London, United Kingdom', NULL, NULL, NULL, NULL, '0', 'http://www.facebook.com/fujing1220', NULL, '2013-02-24 02:06:41', NULL, '1448923360', 'fujing1220', NULL, 'Jing', 'Fu', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(259, 'Tiffany Kenyon Shield', 'tiffanykenyon@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '11', 'http://www.facebook.com/tiffany.k.shield', NULL, '2013-02-25 12:10:17', NULL, '876850163', 'tiffany.k.shield', NULL, 'Tiffany', 'Shield', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(260, 'Priya Khatri', 'priyak11@hotmail.com', NULL, NULL, 'Singapore, Singapore', NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/priya.khatri.967806', NULL, '2013-03-01 16:20:23', NULL, '100004163977526', 'priya.khatri.967806', NULL, 'Priya', 'Khatri', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(261, 'Samantha Kudus', 'samanthadominique@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/samanthakudus', NULL, '2013-02-25 17:46:06', NULL, '512172015', 'samanthakudus', NULL, 'Samantha', 'Kudus', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(262, 'Theresa Minton Nasi', 'theresanasi@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '-5', 'http://www.facebook.com/theresanasi', NULL, '2013-02-26 07:07:38', NULL, '545593834', 'theresanasi', NULL, 'Theresa', 'Nasi', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(263, NULL, 'neo.prudentialsg@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/profile.php?id=100002576860661', NULL, '2013-02-26 15:27:46', NULL, '100002576860661', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(264, 'Chiky Phan', 'cryinsnail@hotmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/chiky.phan', NULL, '2013-05-02 11:47:18', NULL, '711773831', 'chiky.phan', NULL, 'Chiky', 'Phan', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(265, 'Vineeta Sukhija', 'sukhija.vineeta@gmail.com', NULL, NULL, 'Mumbai, Maharashtra, India', NULL, NULL, NULL, NULL, '5.5', 'http://www.facebook.com/vineeta.sukhija', NULL, '2013-03-01 01:11:58', NULL, '665949407', 'vineeta.sukhija', NULL, 'Vineeta', 'Sukhija', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(266, 'Kimberly Vonckx', 'kimmy_vonckx@hotmail.com', NULL, NULL, 'Oostmalle, Antwerpen, Belgium', NULL, NULL, NULL, NULL, '1', 'http://www.facebook.com/kimberly.vonckx', NULL, '2013-03-01 17:25:36', NULL, '1491887675', 'kimberly.vonckx', NULL, 'Kimberly', 'Vonckx', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(267, 'Nickoloz Lee', 'l.nick@yahoo.it', NULL, NULL, 'Shanghai, China', NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/lninl', NULL, '2013-03-04 18:35:20', NULL, '680440783', 'lninl', NULL, 'Nickoloz', 'Lee', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(268, 'Nick Gordon', 'nickjgordon@yahoo.com', NULL, NULL, 'Singapore, Singapore', NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/nickjgordon', NULL, '2013-03-05 09:04:06', NULL, '654158853', 'nickjgordon', NULL, 'Nick', 'Gordon', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(269, 'Bastian Döhling', 'bambes@gmail.com', NULL, NULL, 'Singapore, Singapore', NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/bastian.dohling', NULL, '2013-03-08 18:35:16', NULL, '722540581', 'bastian.dohling', NULL, 'Bastian', 'Döhling', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(270, 'Paul French', 'paul@accessasia.co.uk', NULL, NULL, 'Shanghai, China', NULL, NULL, NULL, NULL, '11', 'http://www.facebook.com/paul.french.14019', NULL, '2013-03-11 19:23:57', NULL, '668876085', 'paul.french.14019', NULL, 'Paul', 'French', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(271, 'Meena Vathyam', 'mvathyam@gmail.com', NULL, NULL, 'Philadelphia, Pennsylvania', NULL, NULL, NULL, NULL, '-5', 'http://www.facebook.com/meena.vathyam', NULL, '2013-03-09 04:05:57', NULL, '1163348217', 'meena.vathyam', NULL, 'Meena', 'Vathyam', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(272, 'SkyBear Wong', 'wongtinhung@gmail.com', NULL, NULL, 'Hong Kong', NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/skybearwong', NULL, '2013-04-19 17:35:05', NULL, '100000350810432', 'skybearwong', NULL, 'SkyBear', 'Wong', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(273, 'Ayesha Tariq', 'aqua_teen88@hotmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5', 'http://www.facebook.com/ayesha.tariq.589', NULL, '2013-03-09 03:01:51', NULL, '516213924', 'ayesha.tariq.589', NULL, 'Ayesha', 'Tariq', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(274, 'Mohammad Bilal Arif Shaikh', 'bilal_arif09@hotmail.com', NULL, NULL, 'Karachi, Pakistan', NULL, NULL, NULL, NULL, '-5', 'http://www.facebook.com/mohammad.b.shaikh', NULL, '2013-03-10 00:12:37', NULL, '1266450801', 'mohammad.b.shaikh', NULL, 'Mohammad', 'Shaikh', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(275, 'Negi Kawaikunai', 'garcianheljee@yahoo.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/negi.kawaikunai', NULL, '2013-03-11 06:44:39', NULL, '100002643925683', 'negi.kawaikunai', NULL, 'Negi', 'Kawaikunai', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(276, 'Ara Vu', 'ara_phuongvu@yahoo.com.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '7', 'http://www.facebook.com/ara.phuongvu', NULL, '2013-03-11 15:21:49', NULL, '550729947', 'ara.phuongvu', NULL, 'Ara', 'Vu', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(277, 'Monica Trombini', 'trombini.monica@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 'http://www.facebook.com/Papunette', NULL, '2013-03-12 01:08:22', NULL, '100001538662831', 'Papunette', NULL, 'Monica', 'Trombini', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(278, 'Claudia Wong', 'claudiawsy@hotmail.com', NULL, NULL, 'Singapore, Singapore', NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/claudiawsy', NULL, '2013-03-12 10:28:17', NULL, '748342393', 'claudiawsy', NULL, 'Claudia', 'Wong', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(279, 'Arti Batavia', 'arti_batavia@hotmail.com', NULL, NULL, 'Singapore, Singapore', NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/arti.batavia', NULL, '2013-03-12 18:14:43', NULL, '100000033962701', 'arti.batavia', NULL, 'Arti', 'Batavia', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(280, 'Vijaya Sriram', 'vijibuzz@yahoo.co.in', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5.5', 'http://www.facebook.com/vijaya.sriram.3', NULL, '2013-03-12 18:16:26', NULL, '791603809', 'vijaya.sriram.3', NULL, 'Vijaya', 'Sriram', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(281, 'Estrella Chua', 'chufang@gmail.com', NULL, NULL, 'Singapore, Singapore', NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/chufang', NULL, '2013-03-12 18:17:22', NULL, '737265607', 'chufang', NULL, 'Estrella', 'Chua', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(282, 'Elias Hamed', 'eliashamed@hotmail.com', NULL, NULL, 'Ho Chi Minh City, Vietnam', NULL, NULL, NULL, NULL, '7', 'http://www.facebook.com/elias.hamed.1', NULL, '2013-03-12 18:18:02', NULL, '1389998519', 'elias.hamed.1', NULL, 'Elias', 'Hamed', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(283, 'Meghna Hiran AB Positive', 'meghna.hiran@gmail.com', NULL, NULL, 'Mumbai, Maharashtra, India', NULL, NULL, NULL, NULL, '5.5', 'http://www.facebook.com/meghna.hiran', NULL, '2013-03-12 18:22:16', NULL, '1283524614', 'meghna.hiran', NULL, 'Meghna', 'Hiran AB Positive', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(284, 'Joey Yu', 'joeyyy1388@yahoo.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/Joey.yu.1388', NULL, '2013-03-12 18:24:48', NULL, '100001395662081', 'Joey.yu.1388', NULL, 'Joey', 'Yu', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(285, '??', 'anny9@foxmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/profile.php?id=1788646108', NULL, '2013-03-12 18:26:10', NULL, '1788646108', NULL, NULL, '?', '?', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(286, 'Marina Biglione', 'marina.biglione@gmail.com', NULL, NULL, 'Shanghai, China', NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/marinabiglione', NULL, '2013-03-12 18:29:18', NULL, '523742071', 'marinabiglione', NULL, 'Marina', 'Biglione', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(287, 'Rahul Biswas', 'rahul.biswas@batesasia.com', NULL, NULL, 'Mumbai, Maharashtra, India', NULL, NULL, NULL, NULL, '5.5', 'http://www.facebook.com/rahul.biswas3', NULL, '2013-03-12 18:33:21', NULL, '100001299791285', 'rahul.biswas3', NULL, 'Rahul', 'Biswas', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(288, 'Jennifer Lu', 'jennifer.lu731@gmail.com', NULL, NULL, 'Taipei, Taiwan', NULL, NULL, NULL, NULL, '11', 'http://www.facebook.com/jenniferlululu', NULL, '2013-03-12 18:33:44', NULL, '553693634', 'jenniferlululu', NULL, 'Jennifer', 'Lu', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(289, 'Jason Wee', 'b_for_b@hotmail.com', NULL, NULL, 'Beijing, China', NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/jasonwee', NULL, '2013-03-12 18:34:35', NULL, '690100065', 'jasonwee', NULL, 'Jason', 'Wee', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(290, 'Filbert Hu?nh', 'apipedro@gmail.com', NULL, NULL, 'Ho Chi Minh City, Vietnam', NULL, NULL, NULL, NULL, '7', 'http://www.facebook.com/filbert.huynh', NULL, '2013-03-12 18:37:37', NULL, '100000011250183', 'filbert.huynh', NULL, 'Filbert', 'Hu?nh', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(291, 'Adheesh Haridevan', 'hadheesh@gmail.com', NULL, NULL, 'Bangalore, India', NULL, NULL, NULL, NULL, '5.5', 'http://www.facebook.com/adheesh.haridevan', NULL, '2013-03-12 18:39:10', NULL, '571973165', 'adheesh.haridevan', NULL, 'Adheesh', 'Haridevan', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(292, 'Alfred Leitao', 'alfred.leitao@who.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '7', 'http://www.facebook.com/alfred.leitao.9', NULL, '2013-03-12 18:40:57', NULL, '100003700760293', 'alfred.leitao.9', NULL, 'Alfred', 'Leitao', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(293, 'Naokazu Wakaguri', 'naokazu.wakaguri@gmail.com', NULL, NULL, 'Hong Kong', NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/naokazu.wakaguri', NULL, '2013-03-12 18:45:03', NULL, '1313157344', 'naokazu.wakaguri', NULL, 'Naokazu', 'Wakaguri', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(294, 'Hanim AbdulCader', 'minah.ac@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5.5', 'http://www.facebook.com/hanim.abdulcader', NULL, '2013-03-12 19:05:10', NULL, '500227750', 'hanim.abdulcader', NULL, 'Hanim', 'AbdulCader', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(295, 'Surajit Guha', 'surajitguha@rediffmail.com', NULL, NULL, 'Delhi, India', NULL, NULL, NULL, NULL, '5.5', 'http://www.facebook.com/surajitguha', NULL, '2013-03-12 19:09:13', NULL, '807164662', 'surajitguha', NULL, 'Surajit', 'Guha', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(296, 'Prashant Halbe', 'halbe.prashant@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5.5', 'http://www.facebook.com/prashant.halbe.3', NULL, '2013-03-12 20:04:16', NULL, '528350258', 'prashant.halbe.3', NULL, 'Prashant', 'Halbe', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(297, 'Kelly Vu', 'nihonzin1107@live.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '7', 'http://www.facebook.com/VuThiNganHa', NULL, '2013-03-12 20:59:46', NULL, '100000423904714', 'VuThiNganHa', NULL, 'Kelly', 'Vu', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(298, 'Bhavya Garg', 'bhavya_garg@hotmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5.5', 'http://www.facebook.com/bhavya.garg87', NULL, '2013-03-12 21:39:53', NULL, '622535106', 'bhavya.garg87', NULL, 'Bhavya', 'Garg', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(299, 'Kishore Kumar', 'milesaboveheaven@gmail.com', NULL, NULL, 'Bangalore, India', NULL, NULL, NULL, NULL, '5.5', 'http://www.facebook.com/milesaboveheaven', NULL, '2013-03-12 22:25:42', NULL, '545278104', 'milesaboveheaven', NULL, 'Kishore', 'Kumar', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(300, 'Joseph Chan', 'chanckjoseph@hotmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/chanckjoseph', NULL, '2013-03-13 00:14:36', NULL, '714298942', 'chanckjoseph', NULL, 'Joseph', 'Chan', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(301, 'Sven Pham', 'sven.pham@gmail.com', NULL, NULL, 'Sydney, Australia', NULL, NULL, NULL, NULL, '11', 'http://www.facebook.com/svenpham', NULL, '2013-03-13 06:19:16', NULL, '530911199', 'svenpham', NULL, 'Sven', 'Pham', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(302, 'ByongJoo AJ Ahn', 'ajahn0642@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '9', 'http://www.facebook.com/byongjooaj.ahn', NULL, '2013-03-13 08:50:13', NULL, '100002479677249', 'byongjooaj.ahn', NULL, 'ByongJoo AJ', 'Ahn', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(303, 'Sherlyn Yew', 'smilies_89@hotmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/lynsher', NULL, '2013-03-13 09:20:28', NULL, '707407949', 'lynsher', NULL, 'Sherlyn', 'Yew', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(304, 'Alex Robertson', 'alexjohnlundrobertson@googlemail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/alexjohnlundrobertson', NULL, '2013-03-13 09:32:42', NULL, '687096019', 'alexjohnlundrobertson', NULL, 'Alex', 'Robertson', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(305, 'Larry Chen', 'treestump340@sbcglobal.net', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/larry.chen.545', NULL, '2013-03-13 10:11:56', NULL, '5512883', 'larry.chen.545', NULL, 'Larry', 'Chen', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(306, 'Uma Wang', 'umawang342@gmail.com', NULL, NULL, 'Shanghai, China', NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/uma.wang', NULL, '2013-03-13 10:26:18', NULL, '644353452', 'uma.wang', NULL, 'Uma', 'Wang', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(307, 'Andrea Vennhaus', 'andrea.vennhaus@web.de', NULL, NULL, 'Singapore, Singapore', NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/andrea.vennhaus', NULL, '2013-03-13 12:10:03', NULL, '1611524044', 'andrea.vennhaus', NULL, 'Andrea', 'Vennhaus', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(308, 'Graham Davis', 'grahamdavis@economist.com', NULL, NULL, 'Minato-ku, Tokyo, Japan', NULL, NULL, NULL, NULL, '9', 'http://www.facebook.com/graham.davis.731', NULL, '2013-04-09 16:13:50', NULL, '728241538', 'graham.davis.731', NULL, 'Graham', 'Davis', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(309, 'Mukund Sharma', 'mukund.sharma@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5.5', 'http://www.facebook.com/mukund.sharma.1291', NULL, '2013-03-13 13:11:25', NULL, '100004419670560', 'mukund.sharma.1291', NULL, 'Mukund', 'Sharma', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(310, 'Lilia Barreto', 'pproposito@uol.com.br', NULL, NULL, 'Singapore, Singapore', NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/lilia.barreto', NULL, '2013-03-13 14:39:58', NULL, '1603365266', 'lilia.barreto', NULL, 'Lilia', 'Barreto', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(311, 'Anne Oh', 'liljanger@hotmail.com', NULL, NULL, 'Kuala Lumpur, Malaysia', NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/anne.oh1', NULL, '2013-03-13 18:42:47', NULL, '523310716', 'anne.oh1', NULL, 'Anne', 'Oh', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(312, '??', '270690860@qq.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 'http://www.facebook.com/profile.php?id=1768714331', NULL, '2013-03-13 18:58:01', NULL, '1768714331', NULL, NULL, '?', '?', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(313, 'Jing Zh', 'zhang_xuejing@hotmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 'http://www.facebook.com/jing.zh.7', NULL, '2013-03-13 22:11:41', NULL, '500916207', 'jing.zh.7', NULL, 'Jing', 'Zh', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(314, 'Ruri Sato', 'satoruri1985@gmail.com', NULL, NULL, 'Ota-ku, Tokyo, Japan', NULL, NULL, NULL, NULL, '9', 'http://www.facebook.com/ruriruris', NULL, '2013-03-14 11:18:48', NULL, '1802005896', 'ruriruris', NULL, 'Ruri', 'Sato', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(315, 'Arwen Zhai', 'zhaiww@hotmail.com', NULL, NULL, 'Vancouver, British Columbia', NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/arwen.zhai', NULL, '2013-03-14 17:33:29', NULL, '609657999', 'arwen.zhai', NULL, 'Arwen', 'Zhai', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(316, 'Ivan Pratama', 'ivanbeck@live.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '7', 'http://www.facebook.com/navikceb', NULL, '2013-03-14 18:21:49', NULL, '1480736226', 'navikceb', NULL, 'Ivan', 'Pratama', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(317, 'Kuan Cheng Lau', 'kuancheng@me.com', NULL, NULL, 'Sungai Buluh, Selangor, Malaysia', NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/kuancheng.lau', NULL, '2013-03-15 10:22:19', NULL, '764640738', 'kuancheng.lau', NULL, 'Kuan Cheng', 'Lau', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(318, 'James Mayo Svensson', 'pjm1968@live.co.uk', NULL, NULL, 'Stockholm, Sweden', NULL, NULL, NULL, NULL, '1', 'http://www.facebook.com/james.svensson.355', NULL, '2013-03-18 01:37:46', NULL, '100004754081094', 'james.svensson.355', NULL, 'James', 'Svensson', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(319, 'Inês Rollason', 'ines.rollason@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 'http://www.facebook.com/ines.rollason', NULL, '2013-03-18 07:03:14', NULL, '500781531', 'ines.rollason', NULL, 'Inês', 'Rollason', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(320, 'Nilesh Havire', 'nilesh379@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/nilesh.havire', NULL, '2013-03-19 22:45:32', NULL, '700494700', 'nilesh.havire', NULL, 'Nilesh', 'Havire', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(321, 'Sumana Rajarethnam', 'sumana187@hotmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/Sumana.Rajarethnam', NULL, '2013-04-10 09:49:19', NULL, '2244502', 'Sumana.Rajarethnam', NULL, 'Sumana', 'Rajarethnam', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(322, 'Laurel West', 'lwest@netvigator.com', NULL, NULL, 'Hong Kong', NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/laurel.west.142', NULL, '2013-04-09 16:08:02', NULL, '705275434', 'laurel.west.142', NULL, 'Laurel', 'West', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(323, 'Moshiur Rahman', 'mr.pppgce@googlemail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5.5', 'http://www.facebook.com/grambanglamobile', NULL, '2013-03-22 23:29:32', NULL, '100001597077945', 'grambanglamobile', NULL, 'Moshiur', 'Rahman', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(324, 'Khanh Nguyen', 'christkhanh@yahoo.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 'http://www.facebook.com/christkhanh', NULL, '2013-03-23 20:42:15', NULL, '566721765', 'christkhanh', NULL, 'Khanh', 'Nguyen', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(325, 'Bhavik Shah', 'bhasha_8@yahoo.in', NULL, NULL, 'Pune, Maharashtra', NULL, NULL, NULL, NULL, '5.5', 'http://www.facebook.com/bhavik.shah.52493', NULL, '2013-03-26 14:38:31', NULL, '100001797437802', 'bhavik.shah.52493', NULL, 'Bhavik', 'Shah', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(326, 'Youngjun Kim', 'keephaus@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '9', 'http://www.facebook.com/keephaus', NULL, '2013-03-27 14:36:22', NULL, '100001218014338', 'keephaus', NULL, 'Youngjun', 'Kim', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', '');
INSERT INTO `tbl_users` (`id`, `name`, `email`, `age`, `gender`, `city`, `country`, `nric`, `mobile_number`, `landline_number`, `timezone`, `url`, `visits`, `last_login`, `is_active`, `userid`, `username`, `password`, `first_name`, `last_name`, `location`, `dob`, `title`, `role`, `birthday`, `phone_number_prefix`, `phone_number`, `address`, `postal_code`, `i_am_lover_of`, `i_am`, `is_subscribed`, `salutation`, `contact_number`) VALUES
(327, 'Adeel Hasan', 'adzventures@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5', 'http://www.facebook.com/adeel.hasan.73', NULL, '2013-03-27 14:43:23', NULL, '501862635', 'adeel.hasan.73', NULL, 'Adeel', 'Hasan', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(328, 'Servitude Yatta', 'goddness1027@yahoo.com.tw', NULL, NULL, 'Taipei, Taiwan', NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/servitude.yatta', NULL, '2013-03-27 18:20:50', NULL, '100000220980898', 'servitude.yatta', NULL, 'Servitude', 'Yatta', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(329, 'Adnan Noor', 'hurted_soul_ad@hotmail.com', NULL, NULL, 'Peshawar, Pakistan', NULL, NULL, NULL, NULL, '5', 'http://www.facebook.com/ADNOORSS', NULL, '2013-03-28 04:53:43', NULL, '1292315163', 'ADNOORSS', NULL, 'Adnan', 'Noor', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(330, 'Wasem Afzal', 'waseemafzal20@yahoo.com', NULL, NULL, 'Bahawalpur', NULL, NULL, NULL, NULL, '5', 'http://www.facebook.com/waseemcheetaa', NULL, '2013-03-28 11:22:21', NULL, '100000882315868', 'waseemcheetaa', NULL, 'Wasem', 'Afzal', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(331, 'Alexis Raphael', 'tecson_trp8@yahoo.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/alexisraphael.tecson', NULL, '2013-03-28 16:20:25', NULL, '100005491990384', 'alexisraphael.tecson', NULL, 'Alexis', 'Raphael', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(332, 'Bhavna Lalchandani', 'blalchandani@gmail.com', NULL, NULL, 'Bangalore, India', NULL, NULL, NULL, NULL, '5.5', 'http://www.facebook.com/blalchandani', NULL, '2013-03-28 17:17:48', NULL, '778270720', 'blalchandani', NULL, 'Bhavna', 'Lalchandani', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(333, 'Ubaid Jarral', 'ubaid_jamal60@yahoo.com', NULL, NULL, 'Wah, Pakistan', NULL, NULL, NULL, NULL, '5', 'http://www.facebook.com/rajpoot90', NULL, '2013-03-28 20:17:44', NULL, '100000540007416', 'rajpoot90', NULL, 'Ubaid', 'Jarral', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(334, 'Khurram Waseem', 'khurram.waseem@yahoo.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5', 'http://www.facebook.com/khurram.waseem', NULL, '2013-03-28 21:52:37', NULL, '1269497653', 'khurram.waseem', NULL, 'Khurram', 'Waseem', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(335, 'Ohhyun Park', 'ksohlove@naver.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '9', 'http://www.facebook.com/ohhyun.park.3', NULL, '2013-04-05 17:47:20', NULL, '100001347277779', 'ohhyun.park.3', NULL, 'Ohhyun', 'Park', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(336, 'John Goodman', 'john.goodman@ogilvy.com', NULL, NULL, 'Bangkok, Thailand', NULL, NULL, NULL, NULL, '7', 'http://www.facebook.com/HonzaD', NULL, '2013-04-27 18:36:55', NULL, '696095457', 'HonzaD', NULL, 'John', 'Goodman', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(337, 'Aaron Wee', 'aaronjwee@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/aaronwee', NULL, '2013-04-10 09:59:39', NULL, '1014789', 'aaronwee', NULL, 'Aaron', 'Wee', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(338, 'Beatrice Yong', 'beatrice.yong@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/beatrice.y.s', NULL, '2013-04-11 14:50:01', NULL, '61403066', 'beatrice.y.s', NULL, 'Beatrice', 'Yong', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(339, 'Waqas Tahir', 'wtahir@gmail.com', NULL, NULL, 'Singapore, Singapore', NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/waqas.tahir.397', NULL, '2013-04-11 14:50:29', NULL, '651920426', 'waqas.tahir.397', NULL, 'Waqas', 'Tahir', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(340, 'Charlie Lowe', 'charliemlowe@hotmail.com', NULL, NULL, 'Singapore, Singapore', NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/charlie.lowe.9847', NULL, '2013-04-11 14:52:11', NULL, '661236869', 'charlie.lowe.9847', NULL, 'Charlie', 'Lowe', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(341, 'Kapil Trehan', 'trehan.k@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5.5', 'http://www.facebook.com/trehan.k', NULL, '2013-04-11 15:31:32', NULL, '100002411414803', 'trehan.k', NULL, 'Kapil', 'Trehan', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(342, 'Paul Eden', 'paul.eden@ogilvy.com', NULL, NULL, 'London, United Kingdom', NULL, NULL, NULL, NULL, '1', 'http://www.facebook.com/paul.eden.3576', NULL, '2013-04-11 17:57:43', NULL, '635449972', 'paul.eden.3576', NULL, 'Paul', 'Eden', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(343, 'Misbah Rehman Khan', 'princesszehra51@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5', 'http://www.facebook.com/misbahrk', NULL, '2013-04-11 22:47:53', NULL, '100004257883912', 'misbahrk', NULL, 'Misbah', 'Khan', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(344, 'Elaine Go', 'elaine_go8@yahoo.com.ph', NULL, NULL, 'Jakarta, Indonesia', NULL, NULL, NULL, NULL, '7', 'http://www.facebook.com/elaine.go.7', NULL, '2013-04-12 13:24:21', NULL, '100000510482037', 'elaine.go.7', NULL, 'Elaine', 'Go', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(345, 'Matt Eaton', 'eatonmje27@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '9', 'http://www.facebook.com/matt.eaton', NULL, '2013-04-12 14:15:13', NULL, '566274037', 'matt.eaton', NULL, 'Matt', 'Eaton', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(346, 'Nilmala Angulugaha', 'nilmalak@yahoo.com', NULL, NULL, 'Kandy', NULL, NULL, NULL, NULL, '5.5', 'http://www.facebook.com/nilmala.angulugaha', NULL, '2013-04-30 16:53:37', NULL, '594445619', 'nilmala.angulugaha', NULL, 'Nilmala', 'Angulugaha', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(347, 'Aashish Singhal', 'ashish.scripter@gmail.com', NULL, NULL, 'Jaipur, Rajasthan', NULL, NULL, NULL, NULL, '5.5', 'http://www.facebook.com/aashishscripter', NULL, '2013-05-17 19:02:59', NULL, '100000004402748', 'aashishscripter', NULL, 'Aashish', 'Singhal', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(348, 'John Snow', 'johnsnow77@ymail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/john.snow.10004', NULL, '2013-04-19 16:36:07', NULL, '100003910435545', 'john.snow.10004', NULL, 'John', 'Snow', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(349, 'Sithira Nandula', 'sithira.fb@gmail.com', NULL, NULL, 'Colombo, Sri Lanka', NULL, NULL, NULL, NULL, '5.5', 'http://www.facebook.com/sithira.nandula', NULL, '2013-04-19 16:36:17', NULL, '100001476081336', 'sithira.nandula', NULL, 'Sithira', 'Nandula', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(350, 'Peter Glaser', 'glaserpeter@web.de', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/glaserpeter', NULL, '2013-04-19 16:36:36', NULL, '557400462', 'glaserpeter', NULL, 'Peter', 'Glaser', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(351, 'Dinsha Munshi', 'munshidinsha@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5.5', 'http://www.facebook.com/munshidinsha', NULL, '2013-04-19 16:43:40', NULL, '1166310935', 'munshidinsha', NULL, 'Dinsha', 'Munshi', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(352, 'Shiva Kumar', 'shivaviswa@gmail.com', NULL, NULL, 'Bangalore, India', NULL, NULL, NULL, NULL, '5.5', 'http://www.facebook.com/shiva.kumar', NULL, '2013-04-19 16:47:10', NULL, '740239852', 'shiva.kumar', NULL, 'Shiva', 'Kumar', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(353, 'Ali Jon Alesander Hanafiah', 'm00nrun@hotmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/jinkama', NULL, '2013-04-19 16:52:18', NULL, '539885758', 'jinkama', NULL, 'Ali', 'Hanafiah', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(354, 'Fahad Javed', 'fahad_ili@yahoo.com', NULL, NULL, 'Karachi, Pakistan', NULL, NULL, NULL, NULL, '5', 'http://www.facebook.com/fahad.jav', NULL, '2013-04-19 16:55:19', NULL, '100001310499757', 'fahad.jav', NULL, 'Fahad', 'Javed', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(355, 'Prem KM', 'prem241@hotmail.com', NULL, NULL, 'Bangalore, India', NULL, NULL, NULL, NULL, '5.5', 'http://www.facebook.com/prem241', NULL, '2013-04-19 17:13:57', NULL, '532605152', 'prem241', NULL, 'Prem', 'KM', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(356, 'Olivia Paul', 'oliviapaul88@hotmail.com', NULL, NULL, 'Hong Kong', NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/olivia.paul.9', NULL, '2013-04-19 17:16:06', NULL, '504949721', 'olivia.paul.9', NULL, 'Olivia', 'Paul', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(357, 'Zhang Xiaoyuan', 'zxyaak@gmail.com', NULL, NULL, 'Singapore, Singapore', NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/zhang.xiaoyuan.5', NULL, '2013-04-19 18:03:05', NULL, '677630646', 'zhang.xiaoyuan.5', NULL, 'Zhang', 'Xiaoyuan', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(358, 'Matt Foulk', 'mattfoulk99@hotmail.co.uk', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '-5', 'http://www.facebook.com/matt.foulk', NULL, '2013-04-19 21:51:15', NULL, '512306242', 'matt.foulk', NULL, 'Matt', 'Foulk', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(359, 'Karthik Juvvala', 'karthik.juvvala@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5.5', 'http://www.facebook.com/karthik.juvvala', NULL, '2013-04-21 15:09:56', NULL, '631568568', 'karthik.juvvala', NULL, 'Karthik', 'Juvvala', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(360, 'Jonas Wu', 'jonas8179@gmail.com', NULL, NULL, 'Beijing', NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/jonas.wu.718', NULL, '2013-04-22 11:51:22', NULL, '1045027041', 'jonas.wu.718', NULL, 'Jonas', 'Wu', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(361, 'Ganga Ganapathi Poovaiah', 'gangapg@hotmail.com', NULL, NULL, 'Bangalore, India', NULL, NULL, NULL, NULL, '5.5', 'http://www.facebook.com/ganga.ganapathi', NULL, '2013-04-22 14:39:14', NULL, '720881003', 'ganga.ganapathi', NULL, 'Ganga', 'Poovaiah', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(362, 'Siju RS', 'siju.r.santhosh@gmail.com', NULL, NULL, 'Bangalore, India', NULL, NULL, NULL, NULL, '5.5', 'http://www.facebook.com/rs.siju', NULL, '2013-04-23 14:35:16', NULL, '1011979668', 'rs.siju', NULL, 'Siju', 'RS', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(363, 'Abhishek Singh', 'abhishek26immortal.singh@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5.5', 'http://www.facebook.com/immortal26', NULL, '2013-05-21 17:54:13', NULL, '100000485530619', 'immortal26', NULL, 'Abhishek', 'Singh', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(364, 'Ammar Yasir', 'pucit_ammar@yahoo.com', NULL, NULL, 'Lahore, Pakistan', NULL, NULL, NULL, NULL, '5', 'http://www.facebook.com/ammar.yasir.79656', NULL, '2013-05-17 17:10:40', NULL, '100000458786312', 'ammar.yasir.79656', NULL, 'Ammar', 'Yasir', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(365, 'Alex Louie', 'alexander.j.louie@gmail.com', NULL, NULL, 'Chicago, Illinois', NULL, NULL, NULL, NULL, '-5', 'http://www.facebook.com/alexjlouie', NULL, '2013-04-26 10:26:38', NULL, '854545242', 'alexjlouie', NULL, 'Alex', 'Louie', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(366, 'Fiona Gordon', 'fiona.gordon@ogilvy.com', NULL, NULL, 'Singapore, Singapore', NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/fiona.gordon.1654', NULL, '2013-04-29 10:08:17', NULL, '583717288', 'fiona.gordon.1654', NULL, 'Fiona', 'Gordon', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(367, 'Kent M. Wertime', 'kent.wertime@ogilvy.com', NULL, NULL, 'Minato-ku, Tokyo, Japan', NULL, NULL, NULL, NULL, '9', 'http://www.facebook.com/kent.wertime', NULL, '2013-04-28 13:00:43', NULL, '659228444', 'kent.wertime', NULL, 'Kent', 'Wertime', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(368, 'Samir Gupte', 'samgupte@hotmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5.5', 'http://www.facebook.com/samir.gupte.5', NULL, '2013-04-28 17:29:57', NULL, '522105928', 'samir.gupte.5', NULL, 'Samir', 'Gupte', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(369, 'Igor Eros', 'dr.igor.eros@gmail.com', NULL, NULL, 'Donetsk, Ukraine', NULL, NULL, NULL, NULL, '3', 'http://www.facebook.com/dr.igor.eros', NULL, '2013-04-29 17:16:38', NULL, '1015576737', 'dr.igor.eros', NULL, 'Igor', 'Eros', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(370, 'Daniel Comar', 'danicomar@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/danicomar', NULL, '2013-05-18 12:52:16', NULL, '643058985', 'danicomar', NULL, 'Daniel', 'Comar', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(371, 'Catherine Lam', 'garlic_77@hotmail.com', NULL, NULL, 'Singapore, Singapore', NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/catherine.lamsn', NULL, '2013-05-02 17:19:10', NULL, '663936259', 'catherine.lamsn', NULL, 'Catherine', 'Lam', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(372, 'Wanpen Sootthane', 'wanpen_ple@yahoo.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '7', 'http://www.facebook.com/wanpen.sootthane', NULL, '2013-05-02 17:23:51', NULL, '610373423', 'wanpen.sootthane', NULL, 'Wanpen', 'Sootthane', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(373, 'Sumana Samuk', 'ssamuk3@yahoo.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5.5', 'http://www.facebook.com/sumanasamuk', NULL, '2013-05-02 17:27:36', NULL, '771217585', 'sumanasamuk', NULL, 'Sumana', 'Samuk', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(374, 'Andrew Ure', 'andrew.ure@gmail.com', NULL, NULL, 'Sydney, Australia', NULL, NULL, NULL, NULL, '10', 'http://www.facebook.com/andrew.ure1', NULL, '2013-05-14 09:10:23', NULL, '578140407', 'andrew.ure1', NULL, 'Andrew', 'Ure', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(375, 'Avtar Ram Singh', 'avtarramsingh@yahoo.com', NULL, NULL, 'Singapore, Singapore', NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/avtarramsingh', NULL, '2013-05-07 12:19:12', NULL, '501571916', 'avtarramsingh', NULL, 'Avtar', 'Ram Singh', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(376, 'Toshi Briones', 'dent_noodle@yahoo.com', NULL, NULL, 'Singapore, Singapore', NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/toshi.briones', NULL, '2013-05-28 16:18:38', NULL, '1143371853', 'toshi.briones', NULL, 'Toshi', 'Briones', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(377, 'Ting Huang', 'tingst.huang@ogilvy.com', NULL, NULL, 'Taipei, Taiwan', NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/tingstHuang', NULL, '2013-05-10 11:29:53', NULL, '100004020465350', 'tingstHuang', NULL, 'Ting', 'Huang', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(378, '??', 'younhe9325@nate.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '9', 'http://www.facebook.com/yunhee9325', NULL, '2013-05-10 12:05:10', NULL, '100001777741036', 'yunhee9325', NULL, '?', '?', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(379, 'Melanie Vaz', 'toirtle@hotmail.com', NULL, NULL, 'Sydney, Australia', NULL, NULL, NULL, NULL, '10', 'http://www.facebook.com/melanie.vaz2', NULL, '2013-05-10 13:55:17', NULL, '510650721', 'melanie.vaz2', NULL, 'Melanie', 'Vaz', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(380, 'Louisa Harker-Marin', 'louisa_harker@hotmail.com', NULL, NULL, 'Singapore, Singapore', NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/Louisaville', NULL, '2013-05-13 22:51:17', NULL, '676591866', 'Louisaville', NULL, 'Louisa', 'Harker-Marin', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(381, 'Skye Lewis', 'skye_lewis@hotmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '10', 'http://www.facebook.com/skyeflewis', NULL, '2013-05-10 14:07:21', NULL, '882985526', 'skyeflewis', NULL, 'Skye', 'Lewis', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(382, 'Niki Torres', 'niki.torres@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/nikitorres', NULL, '2013-05-10 14:18:43', NULL, '631715259', 'nikitorres', NULL, 'Niki', 'Torres', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(383, 'Suraj Dubey', 'leo.suraj23@gmail.com', NULL, NULL, 'Bangalore, India', NULL, NULL, NULL, NULL, '5.5', 'http://www.facebook.com/suraj.dubey23', NULL, '2013-05-10 14:23:08', NULL, '1271007329', 'suraj.dubey23', NULL, 'Suraj', 'Dubey', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(384, 'Simon Webb', 'simon.r.a.webb@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/simon.webb.3720', NULL, '2013-05-10 17:44:40', NULL, '721765092', 'simon.webb.3720', NULL, 'Simon', 'Webb', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(385, 'Bryce Rudyk', 'bryce.rudyk@gmail.com', NULL, NULL, 'New York, New York', NULL, NULL, NULL, NULL, '-4', 'http://www.facebook.com/bryce.rudyk', NULL, '2013-05-10 18:35:50', NULL, '541205446', 'bryce.rudyk', NULL, 'Bryce', 'Rudyk', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(386, 'James Christopherson', 'james.christopherson@mail.mcgill.ca', NULL, NULL, 'Toronto, Ontario', NULL, NULL, NULL, NULL, '-4', 'http://www.facebook.com/jchristrocks', NULL, '2013-05-10 21:27:22', NULL, '13617407', 'jchristrocks', NULL, 'James', 'Christopherson', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(387, 'Tessa Ferguson', 'tessa-ferguson@hotmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '10', 'http://www.facebook.com/Tessarina', NULL, '2013-05-12 11:06:54', NULL, '798800429', 'Tessarina', NULL, 'Tessa', 'Ferguson', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(388, 'Shilpi Chawathe', 'shilpiprasad123@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/shilpi.chawathe.5', NULL, '2013-05-13 10:21:19', NULL, '1198401942', 'shilpi.chawathe.5', NULL, 'Shilpi', 'Chawathe', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(389, 'Deepak Agrika', 'deepakagrika@gmail.com', NULL, NULL, 'Jaipur, Rajasthan', NULL, NULL, NULL, NULL, '5.5', 'http://www.facebook.com/deepak.agrika', NULL, '2013-05-14 18:17:45', NULL, '100001357852233', 'deepak.agrika', NULL, 'Deepak', 'Agrika', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(390, 'Naima Hamid Leera', 'namleera@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '6', 'http://www.facebook.com/nleera', NULL, '2013-05-13 14:35:00', NULL, '605006304', 'nleera', NULL, 'Naima', 'Leera', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(391, 'Jason Scott Lee', 'wtfn00b@yahoo.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/jason.scottlee.714', NULL, '2013-05-14 10:59:41', NULL, '1782824229', 'jason.scottlee.714', NULL, 'Jason', 'Scott Lee', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(392, 'Thomas Kolster', 'tk@inkognitocph.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', 'http://www.facebook.com/thomas.kolster', NULL, '2013-05-17 15:34:26', NULL, '555769804', 'thomas.kolster', NULL, 'Thomas', 'Kolster', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(393, 'Erik Lindqvist', 'mr.lindqvist@gmail.com', NULL, NULL, 'Stockholm, Sweden', NULL, NULL, NULL, NULL, '2', 'http://www.facebook.com/erik.lindqvist.14', NULL, '2013-05-17 15:39:29', NULL, '1834909386', 'erik.lindqvist.14', NULL, 'Erik', 'Lindqvist', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(394, 'Nina Hussain', 'nina_hussain7@yahoo.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5', 'http://www.facebook.com/nina.hussain.71', NULL, '2013-05-19 13:31:47', NULL, '100005953413541', 'nina.hussain.71', NULL, 'Nina', 'Hussain', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(395, 'Henry Ho', 'jimmyoo@hotmail.com', NULL, NULL, 'Beijing, China', NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/henry.ho.5895834', NULL, '2013-05-17 17:29:10', NULL, '680226154', 'henry.ho.5895834', NULL, 'Henry', 'Ho', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(396, 'Jenith D. Liyanagoda', 'ladyslover1992@gmail.com', NULL, NULL, 'Colombo, Sri Lanka', NULL, NULL, NULL, NULL, '5.5', 'http://www.facebook.com/jenith.liyanagoda', NULL, '2013-05-17 17:47:33', NULL, '100000725149904', 'jenith.liyanagoda', NULL, 'Jenith', 'Liyanagoda', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(397, 'Faisal Fortsolution', 'faisal@fortsolution.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5', 'http://www.facebook.com/faisal.fortsolution', NULL, '2013-05-17 18:24:01', NULL, '100005840341456', 'faisal.fortsolution', NULL, 'Faisal', 'Fortsolution', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(398, 'Kashif Ali Fortsolution', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5', 'http://www.facebook.com/profile.php?id=100005869814363', NULL, '2013-05-17 18:27:59', NULL, '100005869814363', NULL, NULL, 'Kashif', 'Fortsolution', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(399, 'Kashif Ali', 'ali-kashif@hotmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5', 'http://www.facebook.com/kashif.ali.9803150', NULL, '2013-05-17 18:54:01', NULL, '1684102498', 'kashif.ali.9803150', NULL, 'Kashif', 'Ali', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(400, 'Abhishek Saini', 'abhi_jaipur123@yahoo.in', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5.5', 'http://www.facebook.com/oyeavi', NULL, '2013-05-17 19:00:05', NULL, '100002594418563', 'oyeavi', NULL, 'Abhishek', 'Saini', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(401, 'Aarti Khajuria', 'gauris683@gmail.com', NULL, NULL, 'Jaipur, Rajasthan', NULL, NULL, NULL, NULL, '5.5', 'http://www.facebook.com/aarti.khajuria.7', NULL, '2013-05-17 19:05:58', NULL, '100001543037481', 'aarti.khajuria.7', NULL, 'Aarti', 'Khajuria', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(402, 'Akshita Sarraf', 'akshi.jn389@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5.5', 'http://www.facebook.com/akshisarraf', NULL, '2013-05-17 19:11:15', NULL, '100001944175439', 'akshisarraf', NULL, 'Akshita', 'Sarraf', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(403, 'Futuristic Avenue', 'socialnetworkfa@gmail.com', NULL, NULL, 'Lahore, Pakistan', NULL, NULL, NULL, NULL, '5', 'http://www.facebook.com/futuristic.avenue', NULL, '2013-05-19 02:09:40', NULL, '100002254383221', 'futuristic.avenue', NULL, 'Futuristic', 'Avenue', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(404, 'Lisa Neimann-Sørensen', 'tommelisa_@hotmail.com', NULL, NULL, 'Copenhagen, Denmark', NULL, NULL, NULL, NULL, '2', 'http://www.facebook.com/lisa.neimannsorensen', NULL, '2013-05-19 16:37:49', NULL, '536092125', 'lisa.neimannsorensen', NULL, 'Lisa', 'Neimann-Sørensen', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(405, 'Kamila Jane?ková', 'kamila.janeckova@gmail.com', NULL, NULL, 'Prague, Czech Republic', NULL, NULL, NULL, NULL, '2', 'http://www.facebook.com/kamila.janeckova1', NULL, '2013-05-20 11:42:58', NULL, '1463393721', 'kamila.janeckova1', NULL, 'Kamila', 'Jane?ková', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(406, 'Power Full', 'powerfull260@yahoo.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5', 'http://www.facebook.com/power.full.756859', NULL, '2013-05-20 13:32:06', NULL, '100005936407925', 'power.full.756859', NULL, 'Power', 'Full', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(407, 'Ashish Arya', 'ashishkarya@hotmail.com', NULL, NULL, 'Mumbai, Maharashtra, India', NULL, NULL, NULL, NULL, '5.5', 'http://www.facebook.com/aryaashish', NULL, '2013-05-21 14:05:43', NULL, '1268007262', 'aryaashish', NULL, 'Ashish', 'Arya', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(408, 'JingMin Tan', 'jmtan27@hotmail.com', NULL, NULL, 'Singapore, Singapore', NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/JingMin27', NULL, '2013-05-30 01:56:49', NULL, '596165579', 'JingMin27', NULL, 'JingMin', 'Tan', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(409, 'Jayrx Sevs', 'severinolorillajr@gmail.com', NULL, NULL, 'Cebu City', NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/SmileyRaven', NULL, '2013-05-30 16:20:08', NULL, '1834222746', 'SmileyRaven', NULL, 'Jayrx', 'Sevs', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(410, 'Julia King', 'juliapking@yahoo.com', NULL, NULL, 'Los Angeles, California', NULL, NULL, NULL, NULL, '-7', 'http://www.facebook.com/julia.king.7543', NULL, '2013-06-14 09:03:31', NULL, '507742371', 'julia.king.7543', NULL, 'Julia', 'King', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(411, 'Sebastien TestPy', 'sebpy.test@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8', 'http://www.facebook.com/sebastien.py.5', NULL, '2013-07-05 16:14:53', NULL, '100004397683254', 'sebastien.py.5', NULL, 'Sebastien', 'TestPy', NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_votings`
--

CREATE TABLE IF NOT EXISTS `tbl_votings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `entry_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `fb_user` varchar(200) NOT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `vote_time` bigint(20) DEFAULT NULL,
  `vote_date` datetime NOT NULL,
  `vote_value` int(11) NOT NULL,
  `vote_type` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=237 ;

--
-- Dumping data for table `tbl_votings`
--

INSERT INTO `tbl_votings` (`id`, `entry_id`, `user_id`, `fb_user`, `ip_address`, `vote_time`, `vote_date`, `vote_value`, `vote_type`) VALUES
(2, 1, 9, '590193638', '182.55.188.25', 1356139769, '2012-12-22 09:29:29', 1, 1),
(3, 2, 9, '590193638', '182.55.188.25', 1356139996, '2012-12-22 09:33:16', 1, 0),
(12, 1, 16, '100000023167801', '182.177.192.139', 1356181011, '2012-12-22 20:56:51', 1, 1),
(21, 1, 18, '1746369033', '182.177.192.139', 1356193714, '2012-12-23 00:28:34', 1, 0),
(28, 7, 9, '590193638', '59.177.227.180', 1356537410, '2012-12-26 23:56:50', 1, 0),
(31, 5, 9, '590193638', '182.55.188.25', 1356666047, '2012-12-28 11:40:47', 1, 1),
(59, 5, 11, '100002529204009', '182.177.166.206', 1357100140, '2013-01-02 12:15:40', 1, 0),
(60, 1, 25, '639686763', '116.12.248.162', 1358406999, '2013-01-17 15:16:39', 1, 0),
(63, 10, 28, '712726560', '116.12.248.162', 1359541820, '2013-01-30 18:30:20', 1, 1),
(73, 10, 9, '590193638', '116.12.248.162', 1359628255, '2013-01-31 18:30:55', 1, 0),
(74, 10, 14, '560700961', '116.12.248.162', 1359629427, '2013-01-31 18:50:27', 1, 1),
(75, 10, 27, '634319838', '116.12.248.162', 1359685642, '2013-02-01 10:27:22', 1, 1),
(76, 10, 30, '1569690006', '173.165.22.4', 1359687261, '2013-02-01 10:54:21', 1, 0),
(77, 10, 31, '581811059', '94.205.123.115', 1359687384, '2013-02-01 10:56:24', 1, 1),
(78, 10, 33, '778152145', '175.156.227.129', 1359689184, '2013-02-01 11:26:24', 1, 0),
(79, 10, 25, '639686763', '116.12.248.162', 1359690841, '2013-02-01 11:54:01', 1, 0),
(80, 10, 37, '767968135', '203.145.159.148', 1359706044, '2013-02-01 16:07:24', 1, 0),
(82, 10, 46, '647272798', '199.229.216.240', 1359707081, '2013-02-01 16:24:41', 1, 1),
(83, 10, 47, '598036649', '180.235.155.178', 1359707677, '2013-02-01 16:34:37', 1, 0),
(84, 10, 11, '100002529204009', '182.177.211.140', 1359710082, '2013-02-01 17:14:42', 1, 1),
(85, 10, 54, '211601233', '199.229.216.240', 1359944466, '2013-02-04 10:21:06', 1, 0),
(86, 10, 58, '527310277', '161.162.4.23', 1359957251, '2013-02-04 13:54:11', 1, 0),
(87, 10, 61, '888305713', '211.25.203.35', 1359967920, '2013-02-04 16:52:00', 1, 0),
(88, 10, 62, '515566183', '199.229.216.240', 1360043189, '2013-02-05 13:46:29', 1, 0),
(89, 10, 68, '58015998', '199.229.216.240', 1360047167, '2013-02-05 14:52:47', 1, 1),
(90, 10, 73, '619182119', '199.229.216.240', 1360047481, '2013-02-05 14:58:01', 1, 0),
(91, 10, 74, '614972564', '199.229.216.240', 1360047623, '2013-02-05 15:00:23', 1, 0),
(92, 10, 71, '837650194', '199.229.216.240', 1360047759, '2013-02-05 15:02:39', 1, 0),
(93, 10, 79, '838085153', '199.229.216.240', 1360048119, '2013-02-05 15:08:39', 1, 0),
(94, 10, 80, '542163586', '116.12.248.162', 1360048545, '2013-02-05 15:15:45', 1, 0),
(95, 10, 83, '620528801', '211.25.203.35', 1360049249, '2013-02-05 15:27:29', 1, 0),
(96, 10, 84, '614178085', '210.19.75.162', 1360049585, '2013-02-05 15:33:05', 1, 1),
(97, 10, 86, '708846741', '58.185.170.114', 1360050281, '2013-02-05 15:44:41', 1, 1),
(98, 10, 87, '1275537074', '199.229.216.240', 1360050684, '2013-02-05 15:51:24', 1, 1),
(99, 10, 90, '656795471', '203.145.159.148', 1360054973, '2013-02-05 17:02:53', 1, 0),
(100, 10, 94, '1410048242', '213.133.166.138', 1360063104, '2013-02-05 19:18:24', 1, 0),
(101, 10, 99, '500961222', '199.229.216.240', 1360151681, '2013-02-06 19:54:41', 1, 0),
(102, 10, 100, '1041622573', '117.195.176.53', 1360152961, '2013-02-06 20:16:01', 1, 0),
(103, 10, 106, '1281085297', '125.16.88.4', 1360210123, '2013-02-07 12:08:43', 1, 1),
(104, 10, 113, '645096281', '116.12.248.162', 1360210445, '2013-02-07 12:14:05', 1, 0),
(105, 10, 120, '1752712273', '203.167.35.36', 1360210932, '2013-02-07 12:22:12', 1, 0),
(106, 10, 114, '685754012', '111.93.150.114', 1360211581, '2013-02-07 12:33:01', 1, 0),
(107, 10, 123, '843273269', '203.145.159.148', 1360211946, '2013-02-07 12:39:06', 1, 0),
(108, 10, 117, '736358930', '202.137.16.66', 1360211970, '2013-02-07 12:39:30', 1, 0),
(109, 10, 36, '632673526', '116.12.248.162', 1360212705, '2013-02-07 12:51:45', 1, 0),
(110, 10, 126, '1076212046', '203.145.159.148', 1360212716, '2013-02-07 12:51:56', 1, 1),
(111, 10, 128, '688523522', '203.145.159.148', 1360213226, '2013-02-07 13:00:26', 1, 0),
(112, 10, 111, '1473646463', '222.165.138.227', 1360213233, '2013-02-07 13:00:33', 1, 1),
(113, 10, 129, '518210020', '111.93.150.114', 1360213234, '2013-02-07 13:00:34', 1, 1),
(114, 10, 137, '787941659', '116.12.248.162', 1360214432, '2013-02-07 13:20:32', 1, 1),
(115, 10, 136, '569871778', '203.145.159.148', 1360214565, '2013-02-07 13:22:45', 1, 0),
(116, 10, 142, '756162288', '203.145.159.148', 1360215039, '2013-02-07 13:30:39', 1, 0),
(117, 10, 144, '699379138', '120.28.62.4', 1360215620, '2013-02-07 13:40:20', 1, 0),
(118, 10, 105, '714712589', '116.12.248.162', 1360215860, '2013-02-07 13:44:20', 1, 1),
(119, 10, 141, '649252634', '111.93.150.114', 1360216052, '2013-02-07 13:47:32', 1, 0),
(120, 10, 147, '537983906', '111.93.150.114', 1360216352, '2013-02-07 13:52:32', 1, 0),
(121, 10, 150, '100001461784567', '203.145.159.148', 1360216355, '2013-02-07 13:52:35', 1, 0),
(122, 10, 155, '631502336', '220.231.34.10', 1360218466, '2013-02-07 14:27:46', 1, 1),
(123, 10, 157, '1543174162', '111.93.150.114', 1360219155, '2013-02-07 14:39:15', 1, 0),
(124, 10, 159, '1537265736', '116.12.248.162', 1360219524, '2013-02-07 14:45:24', 1, 1),
(125, 10, 167, '749074289', '211.25.203.35', 1360223086, '2013-02-07 15:44:46', 1, 0),
(126, 10, 172, '646341977', '120.28.62.4', 1360227811, '2013-02-07 17:03:31', 1, 0),
(127, 10, 175, '1243323856', '203.145.159.148', 1360230234, '2013-02-07 17:43:54', 1, 0),
(128, 10, 177, '660690290', '203.167.35.36', 1360230764, '2013-02-07 17:52:44', 1, 0),
(129, 10, 181, '533555570', '220.231.34.10', 1360232553, '2013-02-07 18:22:33', 1, 0),
(130, 10, 183, '502482172', '116.12.248.162', 1360237923, '2013-02-07 19:52:03', 1, 0),
(131, 10, 185, '538019685', '203.145.159.148', 1360238216, '2013-02-07 19:56:56', 1, 0),
(132, 10, 189, '664094808', '113.41.139.141', 1360250656, '2013-02-07 23:24:16', 1, 0),
(133, 10, 190, '719225627', '118.200.26.130', 1360251321, '2013-02-07 23:35:21', 1, 0),
(134, 10, 191, '500092801', '193.193.188.8', 1360252928, '2013-02-08 00:02:08', 1, 0),
(135, 10, 196, '664596657', '211.25.203.35', 1360295595, '2013-02-08 11:53:15', 1, 0),
(136, 10, 200, '100000541437115', '219.92.12.5', 1360299475, '2013-02-08 12:57:55', 1, 0),
(137, 10, 201, '750728135', '116.12.248.162', 1360305831, '2013-02-08 14:43:51', 1, 0),
(138, 10, 206, '501886871', '203.145.159.148', 1360333093, '2013-02-08 22:18:13', 1, 1),
(139, 10, 208, '782155690', '116.89.81.46', 1360523547, '2013-02-11 03:12:27', 1, 0),
(140, 10, 212, '648535824', '124.13.56.195', 1360642008, '2013-02-12 12:06:48', 1, 0),
(141, 10, 182, '757284022', '223.27.203.33', 1360657711, '2013-02-12 16:28:31', 1, 0),
(142, 10, 213, '705390599', '116.12.248.162', 1360754411, '2013-02-13 19:20:11', 1, 0),
(143, 10, 217, '1292966282', '14.136.46.169', 1360856647, '2013-02-14 23:44:07', 1, 0),
(144, 10, 218, '670514102', '205.178.20.64', 1360909249, '2013-02-15 14:20:49', 1, 0),
(145, 10, 219, '697910366', '59.163.17.114', 1360911532, '2013-02-15 14:58:52', 1, 1),
(146, 10, 221, '1447856971', '203.145.159.148', 1360920569, '2013-02-15 17:29:29', 1, 0),
(147, 10, 225, '683415082', '112.198.78.136', 1361001412, '2013-02-16 15:56:52', 1, 1),
(148, 10, 228, '100002248548951', '175.107.248.59', 1361131895, '2013-02-18 04:11:35', 1, 1),
(149, 10, 229, '100002095707435', '182.186.173.217', 1361144232, '2013-02-18 07:37:12', 1, 1),
(150, 10, 230, '1014801550', '58.32.228.134', 1361159858, '2013-02-18 11:57:38', 1, 1),
(151, 10, 240, '647554950', '61.91.10.131', 1361342099, '2013-02-20 14:34:59', 1, 1),
(152, 10, 241, '698572305', '118.97.99.99', 1361342488, '2013-02-20 14:41:28', 1, 0),
(153, 10, 242, '534272924', '116.12.248.162', 1361343597, '2013-02-20 14:59:57', 1, 0),
(154, 10, 250, '557244225', '211.25.203.35', 1361446498, '2013-02-21 19:34:58', 1, 0),
(155, 10, 143, '691655550', '121.7.40.69', 1361447797, '2013-02-21 19:56:37', 1, 0),
(156, 10, 254, '781433337', '111.93.150.114', 1361515462, '2013-02-22 14:44:22', 1, 0),
(157, 10, 255, '504608729', '116.12.248.162', 1361515981, '2013-02-22 14:53:01', 1, 0),
(158, 17, 27, '634319838', '116.12.248.162', 1362738863, '2013-03-08 18:34:23', 1, 1),
(159, 17, 28, '712726560', '116.12.248.162', 1362739182, '2013-03-08 18:39:42', 1, 1),
(160, 17, 13, '100001312336440', '182.177.131.65', 1362998919, '2013-03-11 18:48:39', 1, 1),
(161, 17, 277, '100001538662831', '83.244.213.90', 1363021702, '2013-03-12 01:08:22', 1, 1),
(162, 17, 14, '560700961', '116.12.248.162', 1363055210, '2013-03-12 10:26:50', 1, 0),
(163, 17, 278, '748342393', '116.12.248.162', 1363055668, '2013-03-12 10:34:28', 1, 0),
(164, 17, 255, '504608729', '116.12.248.162', 1363087739, '2013-03-12 19:28:59', 1, 0),
(165, 17, 296, '528350258', '125.16.88.4', 1363090128, '2013-03-12 20:08:48', 1, 1),
(166, 17, 300, '714298942', '203.185.20.7', 1363104876, '2013-03-13 00:14:36', 1, 1),
(167, 17, 304, '687096019', '116.12.248.162', 1363138574, '2013-03-13 09:36:14', 1, 1),
(168, 17, 137, '787941659', '116.12.248.162', 1363141701, '2013-03-13 10:28:21', 1, 1),
(169, 17, 306, '644353452', '220.231.34.10', 1363141706, '2013-03-13 10:28:26', 1, 1),
(170, 17, 309, '100004419670560', '125.16.93.129', 1363151809, '2013-03-13 13:16:49', 1, 1),
(171, 17, 315, '609657999', '220.231.34.10', 1363254022, '2013-03-14 17:40:22', 1, 0),
(172, 17, 324, '566721765', '109.156.20.26', 1364043093, '2013-03-23 20:51:33', 1, 0),
(173, 17, 326, '100001218014338', '58.232.182.4', 1364366325, '2013-03-27 14:38:45', 1, 1),
(174, 18, 336, '696095457', '203.121.55.184', 1365501392, '2013-04-09 17:56:32', 1, 0),
(175, 18, 337, '1014789', '203.116.140.167', 1365559198, '2013-04-10 09:59:58', 1, 1),
(176, 18, 28, '712726560', '116.12.248.162', 1365584759, '2013-04-10 17:05:59', 1, 1),
(177, 18, 36, '632673526', '116.12.248.162', 1365651830, '2013-04-11 11:43:50', 1, 0),
(178, 18, 343, '100004257883912', '119.160.125.19', 1365691841, '2013-04-11 22:50:41', 1, 1),
(179, 18, 345, '566274037', '153.160.201.236', 1365747313, '2013-04-12 14:15:13', 1, 0),
(180, 18, 213, '705390599', '116.12.248.162', 1365761213, '2013-04-12 18:06:53', 1, 1),
(181, 18, 26, '1198569660', '116.12.248.162', 1366007736, '2013-04-15 14:35:36', 1, 1),
(182, 18, 348, '100003910435545', '116.12.248.162', 1366360808, '2013-04-19 16:40:08', 1, 1),
(183, 18, 58, '527310277', '59.189.184.74', 1366389430, '2013-04-20 00:37:10', 1, 1),
(184, 18, 82, '786174194', '199.229.216.240', 1366612032, '2013-04-22 14:27:12', 1, 0),
(185, 18, 361, '720881003', '111.93.150.114', 1366612784, '2013-04-22 14:39:44', 1, 0),
(186, 18, 171, '606203664', '111.93.150.114', 1366698210, '2013-04-23 14:23:30', 1, 0),
(187, 18, 12, '100001797291335', '182.177.244.1', 1366715600, '2013-04-23 19:13:20', 1, 0),
(189, 18, 9, '590193638', '116.12.248.162', 1366856816, '2013-04-25 10:26:56', 1, 1),
(190, 18, 14, '560700961', '116.12.248.162', 1366874620, '2013-04-25 15:23:40', 1, 1),
(192, 18, 364, '100000458786312', '39.42.69.7', 1366876937, '2013-04-25 16:02:17', 1, 0),
(195, 18, 6, '100000389303076', '39.42.69.7', 1366878121, '2013-04-25 16:22:01', 1, 0),
(196, 18, 48, '664102734', '175.156.81.63', 1367083429, '2013-04-28 01:23:49', 1, 0),
(197, 18, 367, '659228444', '203.167.35.36', 1367125289, '2013-04-28 13:01:29', 1, 0),
(198, 18, 43, '594295022', '199.229.216.240', 1367205549, '2013-04-29 11:19:09', 1, 0),
(199, 18, 346, '594445619', '222.165.138.227', 1367312084, '2013-04-30 16:54:44', 1, 1),
(200, 23, 26, '1198569660', '116.12.248.162', 1368088205, '2013-05-09 16:30:05', 1, 1),
(201, 23, 36, '632673526', '116.12.248.162', 1368094916, '2013-05-09 18:21:56', 1, 0),
(202, 23, 380, '676591866', '116.12.248.162', 1368166062, '2013-05-10 14:07:42', 1, 0),
(203, 23, 381, '882985526', '203.174.170.132', 1368166203, '2013-05-10 14:10:03', 1, 0),
(204, 23, 379, '510650721', '203.174.170.132', 1368166302, '2013-05-10 14:11:42', 1, 0),
(205, 23, 385, '541205446', '68.173.118.126', 1368182150, '2013-05-10 18:35:50', 1, 0),
(206, 23, 58, '527310277', '59.189.184.74', 1368189771, '2013-05-10 20:42:51', 1, 0),
(207, 23, 386, '13617407', '192.0.161.235', 1368192498, '2013-05-10 21:28:18', 1, 0),
(208, 23, 363, '100000485530619', '115.112.59.162', 1368424779, '2013-05-13 13:59:39', 1, 1),
(209, 23, 9, '590193638', '116.12.248.162', 1368438942, '2013-05-13 17:55:42', 1, 1),
(210, 23, 392, '555769804', '105.235.218.14', 1368776308, '2013-05-17 15:38:28', 1, 1),
(211, 23, 28, '712726560', '116.12.248.162', 1368777829, '2013-05-17 16:03:49', 1, 1),
(212, 23, 213, '705390599', '116.12.248.162', 1368780550, '2013-05-17 16:49:10', 1, 1),
(213, 23, 6, '100000389303076', '39.42.217.132', 1368781778, '2013-05-17 17:09:38', 1, 1),
(214, 23, 364, '100000458786312', '39.42.217.132', 1368781890, '2013-05-17 17:11:30', 1, 1),
(215, 23, 394, '100005953413541', '39.42.217.132', 1368785664, '2013-05-17 18:14:24', 1, 0),
(216, 23, 397, '100005840341456', '39.42.92.82', 1368786271, '2013-05-17 18:24:31', 1, 0),
(217, 23, 398, '100005869814363', '39.42.92.82', 1368786498, '2013-05-17 18:28:18', 1, 1),
(218, 23, 12, '100001797291335', '39.42.92.82', 1368786603, '2013-05-17 18:30:03', 1, 0),
(219, 23, 17, '100003062988591', '39.42.92.82', 1368786754, '2013-05-17 18:32:34', 1, 1),
(220, 23, 399, '1684102498', '39.42.92.82', 1368788058, '2013-05-17 18:54:18', 1, 1),
(221, 23, 400, '100002594418563', '115.112.59.162', 1368788419, '2013-05-17 19:00:19', 1, 0),
(222, 23, 347, '100000004402748', '115.112.59.162', 1368788600, '2013-05-17 19:03:20', 1, 0),
(223, 23, 401, '100001543037481', '115.112.59.162', 1368788784, '2013-05-17 19:06:24', 1, 1),
(224, 23, 402, '100001944175439', '115.112.59.162', 1368789113, '2013-05-17 19:11:53', 1, 1),
(225, 23, 404, '536092125', '83.94.215.250', 1368952669, '2013-05-19 16:37:49', 1, 0),
(226, 23, 137, '787941659', '116.12.248.162', 1369016089, '2013-05-20 10:14:49', 1, 0),
(227, 23, 407, '1268007262', '203.145.159.148', 1369116766, '2013-05-21 14:12:46', 1, 1),
(228, 23, 409, '1834222746', '222.127.118.36', 1369902008, '2013-05-30 16:20:08', 1, 0),
(229, 24, 36, '632673526', '116.12.248.162', 1371026095, '2013-06-12 16:34:55', 1, 1),
(230, 24, 28, '712726560', '116.12.248.162', 1371030225, '2013-06-12 17:43:45', 1, 0),
(231, 24, 27, '634319838', '124.185.15.62', 1371073015, '2013-06-13 05:36:55', 1, 0),
(232, 24, 60, '534729133', '116.12.248.162', 1371103119, '2013-06-13 13:58:39', 1, 0),
(233, 24, 43, '594295022', '203.117.117.119', 1371169833, '2013-06-14 08:30:33', 1, 1),
(234, 24, 410, '507742371', '168.161.192.17', 1371171811, '2013-06-14 09:03:31', 1, 1),
(235, 24, 213, '705390599', '116.12.248.162', 1372816488, '2013-07-03 09:54:48', 1, 1),
(236, 24, 411, '100004397683254', '116.12.248.162', 1373012093, '2013-07-05 16:14:53', 1, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
