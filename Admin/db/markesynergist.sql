-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 27, 2019 at 04:01 AM
-- Server version: 5.7.24
-- PHP Version: 7.0.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `markesynergist`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_about`
--

DROP TABLE IF EXISTS `tbl_about`;
CREATE TABLE IF NOT EXISTS `tbl_about` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `about_content` varchar(1000) DEFAULT NULL,
  `about_status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_about`
--

INSERT INTO `tbl_about` (`id`, `about_content`, `about_status`) VALUES
(2, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Why do we use it? It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_banner`
--

DROP TABLE IF EXISTS `tbl_banner`;
CREATE TABLE IF NOT EXISTS `tbl_banner` (
  `banner_id` int(11) NOT NULL AUTO_INCREMENT,
  `banner_name` varchar(50) DEFAULT NULL,
  `banner_imgname` varchar(50) DEFAULT NULL,
  `banner_status` int(11) DEFAULT NULL,
  PRIMARY KEY (`banner_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_banner`
--

INSERT INTO `tbl_banner` (`banner_id`, `banner_name`, `banner_imgname`, `banner_status`) VALUES
(1, '1', '11.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallimage`
--

DROP TABLE IF EXISTS `tbl_gallimage`;
CREATE TABLE IF NOT EXISTS `tbl_gallimage` (
  `gal_id` int(11) NOT NULL AUTO_INCREMENT,
  `gal_name` varchar(50) DEFAULT NULL,
  `gal_imgname` varchar(50) DEFAULT NULL,
  `gal_status` int(11) DEFAULT NULL,
  PRIMARY KEY (`gal_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_gallimage`
--

INSERT INTO `tbl_gallimage` (`gal_id`, `gal_name`, `gal_imgname`, `gal_status`) VALUES
(1, '1', '1.jpg', 1),
(2, '2', '2.jpg', 1),
(3, '3', '4.jpg', 1),
(4, '1', '11.jpg', 1),
(5, '2', '21.jpg', 1),
(6, '3', '41.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallvideo`
--

DROP TABLE IF EXISTS `tbl_gallvideo`;
CREATE TABLE IF NOT EXISTS `tbl_gallvideo` (
  `gal_id` int(11) NOT NULL AUTO_INCREMENT,
  `gal_name` varchar(50) DEFAULT NULL,
  `gal_videoname` varchar(50) DEFAULT NULL,
  `gal_status` int(11) DEFAULT NULL,
  PRIMARY KEY (`gal_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_gallvideo`
--

INSERT INTO `tbl_gallvideo` (`gal_id`, `gal_name`, `gal_videoname`, `gal_status`) VALUES
(1, '1', 'wew1.MP4', 1),
(2, '2', 'wew2.MP4', 1),
(3, '3', 'wew3.MP4', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_keypeople`
--

DROP TABLE IF EXISTS `tbl_keypeople`;
CREATE TABLE IF NOT EXISTS `tbl_keypeople` (
  `keypeople_id` int(11) NOT NULL AUTO_INCREMENT,
  `keypeople_name` varchar(50) DEFAULT NULL,
  `keypeople_designation` varchar(50) DEFAULT NULL,
  `keypeople_description` varchar(1000) DEFAULT NULL,
  `keypeople_imgname` varchar(50) DEFAULT NULL,
  `keypeople_status` int(11) DEFAULT NULL,
  PRIMARY KEY (`keypeople_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_keypeople`
--

INSERT INTO `tbl_keypeople` (`keypeople_id`, `keypeople_name`, `keypeople_designation`, `keypeople_description`, `keypeople_imgname`, `keypeople_status`) VALUES
(1, 'Ambika TM', 'Founder and CEO', 'Ambika has rich experience in the\r\nfield of Public Relations and Digital Marketing. She began her career with BizTV Network as a\r\npublicist for the movie DAM999 and has made notable contributions towards the publicity of the\r\nmovie and stirring up conversations on mullaperiyar dam. Ambika has also worked with\r\nAdfactors PR, All Lights Film Magazine, I am Impresario, and Applied Singularity. Over the\r\nyears, Ambika has worked in a myriad of projects under various sectors such as BFSI,\r\ntechnology, healthcare, startups, education, telecom, entertainment, and lifestyle', 'manjima.jpg', 1),
(2, 'Pranava', 'Director', 'Pranava has over five years of experience in the field\r\nof Public Relations. Prior to this, Pravana has worked with Bloomingdale PR. Pranava has\r\nworked in myriad of projects under various sectors such as technology, healthcare, education,\r\nCSR, and lifestyle.', 'manjima1.jpg', 1),
(3, 'Arun S Nair', 'Consultant', 'Arun has over two decades of rich\r\nexperience in handling leading brands, creating IP’s, Profit Centres etc. Over the years, Arun\r\nhas worked with companies like RK swamy/ BBDO, Asianet Communications Ltd, Indiavision\r\nSatellite Communications, Red FM, Blueye PR and Events and currently with Insight Media City.\r\nAs part of PR he has handled brands like Reliance ADAG, Coca Cola India Ltd, BCG Builders\r\netc. He holds an MBA from Madras University', 'manjima2.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

DROP TABLE IF EXISTS `tbl_login`;
CREATE TABLE IF NOT EXISTS `tbl_login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `user_type` varchar(50) DEFAULT NULL,
  `login_status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`id`, `user_name`, `password`, `user_type`, `login_status`) VALUES
(1, 'admin', 'admin@321', 'A', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_partners`
--

DROP TABLE IF EXISTS `tbl_partners`;
CREATE TABLE IF NOT EXISTS `tbl_partners` (
  `partner_id` int(11) NOT NULL AUTO_INCREMENT,
  `partner_name` varchar(50) DEFAULT NULL,
  `partner_imgname` varchar(50) DEFAULT NULL,
  `partner_status` int(11) DEFAULT NULL,
  PRIMARY KEY (`partner_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_partners`
--

INSERT INTO `tbl_partners` (`partner_id`, `partner_name`, `partner_imgname`, `partner_status`) VALUES
(1, 'asfas', 'p1.jpg', 1),
(2, 'sffgsgfgs', 'p2.jpg', 1),
(3, 'Sachin', 'p4.jpg', 1),
(4, 'qeqweqw', 'p5.jpg', 1),
(5, 'qwrqwrqwr', 'p3.jpg', 1),
(6, 'rwqrqw', 'p21.jpg', 1),
(7, 'qwrqwr', 'p31.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_services`
--

DROP TABLE IF EXISTS `tbl_services`;
CREATE TABLE IF NOT EXISTS `tbl_services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_services`
--

INSERT INTO `tbl_services` (`id`, `name`, `description`, `status`) VALUES
(1, 'dsd', 'dsfdcfscxxsxs', 0),
(2, 'Public Relations', 'We raise awareness about your product or service and handle\r\nbrand integrity through various earned channels such as social media campaigns,\r\npress and publicity, promotion through internal employees and so on, and engage you\r\nwith the most influential audiences.', 1),
(3, 'Digital Marketing', 'Using breakthrough digital strategies and customised digital\r\nmarketing services such as Social Media Marketing, SEO, PPC Advertising and Web\r\nDevelopment, we ensure t o target the right audience at the right time bringing in more\r\npotential leads for you.', 1),
(4, 'Event Management', 'We let the world know your brand through the events that we\r\nhost. We come up with innovative ideas alongside the suggestions from you, to\r\nshowcase your brand identity so that your brand remains a powerful competitive\r\ndifferentiator in the market.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_testimonial`
--

DROP TABLE IF EXISTS `tbl_testimonial`;
CREATE TABLE IF NOT EXISTS `tbl_testimonial` (
  `testimonial_id` int(11) NOT NULL AUTO_INCREMENT,
  `testimonial_name` varchar(50) DEFAULT NULL,
  `testimonial_imgname` varchar(50) DEFAULT NULL,
  `testimonial_description` varchar(500) DEFAULT NULL,
  `testimonial_status` int(11) DEFAULT NULL,
  PRIMARY KEY (`testimonial_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_testimonial`
--

INSERT INTO `tbl_testimonial` (`testimonial_id`, `testimonial_name`, `testimonial_imgname`, `testimonial_description`, `testimonial_status`) VALUES
(1, 'sasa', 'images.jpg', 'fasfafasfsafsfasfasfasfasfsfas asfaaaaaaaaaaaaaaaaaaaaa', 1),
(2, 'qwrqwr', 'images1.jpg', 'qwrqr qwrqwr qrqw wrqw wrq', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
