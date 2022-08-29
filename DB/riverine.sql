-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 26, 2022 at 04:32 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `riverine`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_activity`
--

DROP TABLE IF EXISTS `tbl_activity`;
CREATE TABLE IF NOT EXISTS `tbl_activity` (
  `act_id` int(11) NOT NULL AUTO_INCREMENT,
  `act_title` varchar(255) NOT NULL,
  `act_desc` mediumtext NOT NULL,
  `act_pricing_info` varchar(255) NOT NULL,
  `act_img` varchar(100) NOT NULL,
  `act_date` date NOT NULL DEFAULT current_timestamp(),
  `act_status` tinyint(2) NOT NULL DEFAULT 1,
  PRIMARY KEY (`act_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_activity`
--

INSERT INTO `tbl_activity` (`act_id`, `act_title`, `act_desc`, `act_pricing_info`, `act_img`, `act_date`, `act_status`) VALUES
(1, 'Jeep Safari', 'Jeep Safari is a 2 hour activity as we take you through the forests and plantations negotiating tough terrains. You would have to opportunity to experience exciting moments during this activity. Options for capturing memorable pictures at serene and offbeat locations would be an added advantage. Normally our jeep carries 4 guests at a time and for larger groups we have the options of organizing more such vehicles.', 'Charges for Jeep safari Rs. 4000/- (Rupees Four Thousand only) upto 4 guests.', 'a11.jpg', '2022-08-22', 1),
(2, 'River Crossing', 'River Crossing is yet another guided activity that we offer to our guests. This activity is an adventure activity guided by our experts who are very familiar with the river and her behavior. They would know the mood changes of the river and can even know the depth at each point. We hope on to different naturally formed islands as we accomplish the river crossing. A sense of achievement and excitement brings out the confidence in you to take on tougher assignments in career and life. This activity is highly recommended for corporate team building too.', 'Charges for River crossing is Rs. 400/- (Rupees Four Hundred Only) per person.', 'a2.jpg', '2022-08-22', 1),
(3, 'Guided Trekking to the Athirappilly waterfalls', 'Guided Trekking to the Athirappilly waterfalls : This activity is a unique program offered by Riverine suites. This activity is recommended to be experienced in the morning. Our team would take you very close to the waterfall where the water lands forming a scenic picturesque frame to be captured without fail. This activity is a 90 minute activity from the starting point of the trek.', 'Charges for guided trek to Athirappilly is Rs. 500/- (Rupees Five Hundred Only) per person.', 'a3.jpg', '2022-08-22', 1),
(4, 'Guided Trekking through the forests and plantations of Western Ghats', 'Guided Trekking through the forests and plantations of Western Ghats : This activity has a duration of around four hours. Our guide would explain to you in detail about the various flora and fauna present in this natural haven. The walk would take you across the plantations, variety of forests, lakes and through the river side.', 'Charges for guided trekking through the forests is Rs. 750/- (Rupees Seven Hundred and Fifty Only) per person.', 'a4.jpg', '2022-08-22', 1),
(5, 'Guided bird watching tour', 'Guided bird watching tour : This area is a haven for the Bird watchers. Popular ornithologists from across the globe have explored this region and have come across various rare species of birds. Famous bird watcher and world record holder Noah Strycker spotted over 50 species of birds in the Athirappilly forest region. He was seeing four of them for the first time. Noah Strycker is a world record holder in sighting maximum number birds in one year. The great Malabar hornbill, Malabar Pied Hornbill. Indian Grey Hornbill, Malabar Grey Hornbill, Malabar Parakeet, Plum Headed Parakeet, Flame throated Bulbul, Chestnut headed Bee eater, Blue bearded Bee eater, Orange Minivet are some of the most popular species of birds which could be spotted here. The documented evidence says that there are over 100 species in the forests of Athirappilly and some of these species are endangered too.', 'Charges for bird watching tour is Rs. 750/- (Rupees Seven Hundred and Fifty) per person', 'a5.jpg', '2022-08-22', 1),
(6, 'Malakkapara Drive', 'Malakkapara Drive : hop on to our jeep seats and fasten your seat belts. You are in for yet another adventurous drive through the ever green rain forest of Sholayar. This four hour drive would take you through the thick forests and you come across stunning views of small rivulets, waterfalls as we negotiate winding roads to reach a small village called Malakkapara. Malakkapara is surrounded by beautiful tea gardens. Malakkapara is bordered to the state of Tamil Nadu. The chance of wild life sighting adds to the attraction of the activity.', 'Charges for Malakkapara drive is Rs. 5000/- (Rupees Five Thousand Only) upto 4 persons', 'a6.jpg', '2022-08-22', 1),
(7, 'Camp Fire', 'Camp Fire: The gentle breeze that caresses your body and the soothing music carries you into a different world as you sit by the riverside enjoying reflections in the water that flows by. The camp fire adds to the mood as you gaze to the sky to check out the shining stars. We create camp fires that make you enjoy the togetherness.', 'The Charges for camp fire is Rs. 1500/- (Rupees One Thousand Five Hundred Only)', 'a7.jpg', '2022-08-22', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

DROP TABLE IF EXISTS `tbl_contact`;
CREATE TABLE IF NOT EXISTS `tbl_contact` (
  `contact_id` int(11) NOT NULL AUTO_INCREMENT,
  `contact_email` varchar(50) NOT NULL,
  `contact_phone` varchar(11) NOT NULL,
  `city` varchar(100) NOT NULL,
  `contact_address` varchar(300) NOT NULL,
  `contact_status` int(11) NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`contact_id`, `contact_email`, `contact_phone`, `city`, `contact_address`, `contact_status`) VALUES
(1, 'hr@inforizonhr.com', '04844063563', 'kochi', 'Corrazone 420 st, Panadans Avenue, Thrikkakara, Kalamassery, Kochi- 682022', 1),
(2, 'hr@inforizonhr.com', '04844063563', 'Delhi', 'F-3, Plot No. 290, Ghyan Khand-1, Indirapuram\r\nGhaziabad- 201014\r\nNCR', 1),
(3, 'frfr@gmail.com', '85955', 'Kakkanad', 'Kakkanad', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery`
--

DROP TABLE IF EXISTS `tbl_gallery`;
CREATE TABLE IF NOT EXISTS `tbl_gallery` (
  `gallery_id` int(11) NOT NULL AUTO_INCREMENT,
  `gallery_title` varchar(255) NOT NULL,
  `gallery_image` varchar(255) NOT NULL,
  `gallery_date` datetime NOT NULL DEFAULT current_timestamp(),
  `gallery_status` tinyint(2) NOT NULL DEFAULT 1,
  PRIMARY KEY (`gallery_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`gallery_id`, `gallery_title`, `gallery_image`, `gallery_date`, `gallery_status`) VALUES
(1, '1', '2.jpg', '2022-08-23 11:07:47', 1),
(2, '2', '21.jpg', '2022-08-23 11:08:21', 1),
(3, '3', '22.jpg', '2022-08-23 11:08:31', 1),
(4, '4', '23.jpg', '2022-08-23 11:08:48', 1),
(5, '5', '24.jpg', '2022-08-23 11:08:58', 1),
(6, '6', '25.jpg', '2022-08-23 11:09:06', 1),
(7, '7', '26.jpg', '2022-08-23 11:09:15', 1),
(8, '8', '27.jpg', '2022-08-23 11:09:23', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_home_desc`
--

DROP TABLE IF EXISTS `tbl_home_desc`;
CREATE TABLE IF NOT EXISTS `tbl_home_desc` (
  `hd_id` int(11) NOT NULL AUTO_INCREMENT,
  `hd_title` varchar(255) NOT NULL,
  `hd_desc` mediumtext NOT NULL,
  `hd_date` date NOT NULL DEFAULT current_timestamp(),
  `hd_status` tinyint(2) NOT NULL DEFAULT 1,
  PRIMARY KEY (`hd_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_home_desc`
--

INSERT INTO `tbl_home_desc` (`hd_id`, `hd_title`, `hd_desc`, `hd_date`, `hd_status`) VALUES
(1, 'Enjoy a Luxury Experience', 'Located on the banks of the Chalakudi river a short way down stream for the famed Athirappilly waterfalls, Riverine Suites is an ideal getaway in the lap of nature. Here we offer absolute comfort, peace and serenity to the guests.  The rooms are very spacious and well appointed. The amenities and design can be compared with the best Star hotels in the country.  Most of our rooms offer an unobstructed view of the rock-strewn river bed with the streams gushing through the gaps in various forms with a visual feast to our eyes.', '2022-08-20', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_home_text`
--

DROP TABLE IF EXISTS `tbl_home_text`;
CREATE TABLE IF NOT EXISTS `tbl_home_text` (
  `ht_id` int(11) NOT NULL AUTO_INCREMENT,
  `ht_desc` mediumtext NOT NULL,
  `ht_date` date NOT NULL DEFAULT current_timestamp(),
  `ht_status` tinyint(2) NOT NULL DEFAULT 1,
  PRIMARY KEY (`ht_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_home_text`
--

INSERT INTO `tbl_home_text` (`ht_id`, `ht_desc`, `ht_date`, `ht_status`) VALUES
(1, '<h1>ENJOY A LUXURY EXPERIENCE</h1>\r\n', '2022-08-10', 1);

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
(1, 'admin', '1234', 'A', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mail`
--

DROP TABLE IF EXISTS `tbl_mail`;
CREATE TABLE IF NOT EXISTS `tbl_mail` (
  `mail_id` int(11) NOT NULL AUTO_INCREMENT,
  `mail_title` varchar(255) NOT NULL,
  `mail_username` varchar(255) NOT NULL,
  `mail_password` varchar(255) NOT NULL,
  `mail_host` varchar(255) NOT NULL,
  `mail_port` int(11) NOT NULL,
  `mail_recieve` varchar(255) NOT NULL,
  `mail_date` datetime NOT NULL DEFAULT current_timestamp(),
  `mail_status` tinyint(2) NOT NULL DEFAULT 1,
  PRIMARY KEY (`mail_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_mail`
--

INSERT INTO `tbl_mail` (`mail_id`, `mail_title`, `mail_username`, `mail_password`, `mail_host`, `mail_port`, `mail_recieve`, `mail_date`, `mail_status`) VALUES
(1, 'Email Credentials for Mail', 'yedelecrtric@yandex.com', 'zaknuwxzjrrzmcws', 'smtp.yandex.com', 465, 'user16.wahylab@gmail.com', '2022-07-13 16:48:43', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_media`
--

DROP TABLE IF EXISTS `tbl_media`;
CREATE TABLE IF NOT EXISTS `tbl_media` (
  `media_id` int(11) NOT NULL AUTO_INCREMENT,
  `media_youtube_embed` mediumtext NOT NULL,
  `media_date` datetime NOT NULL DEFAULT current_timestamp(),
  `media_status` tinyint(2) NOT NULL DEFAULT 1,
  PRIMARY KEY (`media_id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_media`
--

INSERT INTO `tbl_media` (`media_id`, `media_youtube_embed`, `media_date`, `media_status`) VALUES
(4, 'https://www.youtube.com/embed/8QhaewmSm84', '2022-07-13 15:51:45', 1),
(2, 'https://www.youtube.com/embed/lfj6sZ52glg', '2022-07-13 15:48:11', 1),
(3, 'https://www.youtube.com/embed/oEobMHZCSbo', '2022-07-13 15:48:22', 1),
(5, 'https://www.youtube.com/embed/ylAEUbmiAqA', '2022-07-13 15:52:32', 1),
(6, 'https://www.youtube.com/embed/aZ-vtwKA0D4', '2022-07-13 15:54:09', 1),
(7, 'https://www.youtube.com/embed/AeyPGeb0frk', '2022-07-13 15:54:50', 1),
(8, 'https://www.youtube.com/embed/kzepMR_MA3Q', '2022-07-14 14:37:07', 1),
(9, 'https://www.youtube.com/embed/bYChJAOnytA', '2022-07-14 15:09:34', 1),
(10, 'https://www.youtube.com/embed/y_iwN_SVhyE', '2022-07-14 15:10:03', 1),
(11, 'https://www.youtube.com/embed/DN1Tw5DKRX0', '2022-07-14 15:10:35', 1),
(12, 'https://www.youtube.com/embed/JMSnpU8tHKc', '2022-07-14 15:12:04', 1),
(13, 'https://www.youtube.com/embed/y_s9AzAY_wl', '2022-07-14 15:12:39', 1),
(14, 'https://www.youtube.com/embed/hWD2abdSLhE', '2022-07-14 15:13:09', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nearby`
--

DROP TABLE IF EXISTS `tbl_nearby`;
CREATE TABLE IF NOT EXISTS `tbl_nearby` (
  `nearby_id` int(11) NOT NULL AUTO_INCREMENT,
  `nearby_title` varchar(255) NOT NULL,
  `nearby_desc` mediumtext NOT NULL,
  `nearby_img` varchar(100) NOT NULL,
  `nearby_display` tinyint(2) NOT NULL DEFAULT 0,
  `nearby_date` date NOT NULL DEFAULT current_timestamp(),
  `nearby_status` tinyint(2) NOT NULL DEFAULT 1,
  PRIMARY KEY (`nearby_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_nearby`
--

INSERT INTO `tbl_nearby` (`nearby_id`, `nearby_title`, `nearby_desc`, `nearby_img`, `nearby_display`, `nearby_date`, `nearby_status`) VALUES
(1, 'Athirapilly Waterfalls', 'Athirappilly waterfall is one of the largest and most popular tourist destinations in the country. The 145 kilometer long chalakudi rivier originates from the aanamudi hills of the western ghats and flows down gently through the sholayar forest ranges. On reaching athirappilly the river lunges 80 feet down a rocky massif, offering a spectacular view that draws hundreds of tourists each day to this spot.', '11.jpg', 1, '2022-08-23', 1),
(2, 'Charpa Waterfalls', 'As we drive further uphill through the forests, the beautiful charpa waterfalls is on your left. The drive from Athirappilly to charpa is around 3 kms. This beautiful waterfalls becomes more active during the monsoon.', '3.jpg', 1, '2022-08-23', 1),
(3, 'Vazhachal Water Falls', 'Vazhachal waterfalls are yet another feast to your eyes. The river at vazhachal gives you a rare experience of flowing through the sloppy terrains in a ferocious mood. You could spend hours sitting here and doing nothing.', 'n2.jpg', 0, '2022-08-23', 1),
(4, 'Peringalkuthu Sam', 'Perigalkuthu dam is the first hydro electric power project to commissioned on the Chalakudi river. This dam and project was commissioned on 15th May 1957. The length of this dam is 290.25 meters and height is 23 meters.', 'n3.jpg', 0, '2022-08-23', 1),
(5, 'Sholayar Dam', 'Sholayar dam is yet another hydro electric project across chalakudi river. This is one of the major projects after Idukki dam. The forests have rich evergreen character and drive through these forests is really refreshing. The view from the road side of the reservoir is really a great one.', 'n4.jpg', 0, '2022-08-23', 1),
(6, 'Malakkapara', 'Malakkapara is a small town bordering Kerala and Tamilnadu. This area is rich with tea plantations. The view is really spectacular.', 'n5.jpg', 0, '2022-08-23', 1),
(7, 'Thumboormuzhi Gardens', 'Thumboormuzhi Gardens is basically an irrigation project where the river is divided into left bank canal and right bank canal for agricultural requirements. The beautiful butterfly gardens and the hanging bridge is designed with an aesthetic sense. The play area for children is also very attractive.', 'n6.jpg', 0, '2022-08-23', 1),
(8, 'Valparai', 'Valparai is a mid-elevation hill station (Ootacamund is considerably higher). The tea plantations are surrounded by evergreen forest. The region is also a rich elephant tract and is known to have many leopardsIt is located 3,500 feet (1,100 m) above sea level on the Anaimalai Hills range of the Western Ghats. There are 40 hairpin bends on the way up from Valparai to Azhiyar.', '2.jpg', 1, '2022-08-23', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

DROP TABLE IF EXISTS `tbl_products`;
CREATE TABLE IF NOT EXISTS `tbl_products` (
  `products_id` int(11) NOT NULL AUTO_INCREMENT,
  `products_name` varchar(255) NOT NULL,
  `products_img` varchar(255) DEFAULT NULL,
  `products_feature_1` varchar(255) DEFAULT NULL,
  `products_feature_2` varchar(255) DEFAULT NULL,
  `products_feature_3` varchar(255) DEFAULT NULL,
  `products_feature_4` varchar(255) DEFAULT NULL,
  `products_feature_5` varchar(255) DEFAULT NULL,
  `products_feature_6` varchar(255) DEFAULT NULL,
  `products_feature_7` varchar(255) DEFAULT NULL,
  `products_feature_8` varchar(255) DEFAULT NULL,
  `products_inner_img` varchar(200) DEFAULT NULL,
  `products_date` datetime NOT NULL DEFAULT current_timestamp(),
  `products_status` tinyint(2) NOT NULL DEFAULT 1,
  PRIMARY KEY (`products_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`products_id`, `products_name`, `products_img`, `products_feature_1`, `products_feature_2`, `products_feature_3`, `products_feature_4`, `products_feature_5`, `products_feature_6`, `products_feature_7`, `products_feature_8`, `products_inner_img`, `products_date`, `products_status`) VALUES
(1, 'Yed Angel', 'p41.jpg', ' Comfortable Sitting', 'Emergency Repair Switch', 'Anti Theft Lock', 'Self Diagnosis', 'Disk Breaks for Better Safety', 'Bis Wheels Enhance Stability', 'Multiple Sensors', 'Vivid Smart Dash', 'Untitled-2-black.jpg', '2022-07-14 11:05:32', 1),
(2, 'Yed Zeus', 'p5.jpg', ' Comfortable Sitting', 'Emergency Repair Switch', 'Anti Theft Lock', 'Self Diagnosis', 'Disk Breaks for Better Safety', 'Bis Wheels Enhance Stability', 'Multiple Sensors', 'Vivid Smart Dash', 'Untitled-5-red.jpg', '2022-07-14 11:19:59', 1),
(3, 'Yed Galaxy', 'p3.jpg', ' Comfortable Sitting', 'Emergency Repair Switch', 'Anti Theft Lock', 'Self Diagnosis', 'Disk Breaks for Better Safety', 'Bis Wheels Enhance Stability', 'Multiple Sensors', 'Vivid Smart Dash', 'Untitled-3-maroon.jpg', '2022-07-14 11:20:37', 1),
(4, 'Yed Mars', 'p2.jpg', ' Comfortable Sitting', 'Emergency Repair Switch', 'Anti Theft Lock', 'Self Diagnosis', 'Disk Breaks for Better Safety', 'Bis Wheels Enhance Stability', 'Multiple Sensors', 'Vivid Smart Dash', 'Untitled-4-orange.jpg', '2022-07-14 11:21:19', 1),
(5, 'Yed Apollo', 'P12.jpg', ' Comfortable Sitting', 'Emergency Repair Switch', 'Anti Theft Lock', 'Self Diagnosis', 'Disk Breaks for Better Safety', 'Bis Wheels Enhance Stability', 'Multiple Sensors', 'Vivid Smart Dash', 'Untitled-1-yellow1.jpg', '2022-07-14 11:22:11', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_testimonial`
--

DROP TABLE IF EXISTS `tbl_testimonial`;
CREATE TABLE IF NOT EXISTS `tbl_testimonial` (
  `tsml_id` int(11) NOT NULL AUTO_INCREMENT,
  `tsml_cname` varchar(255) NOT NULL,
  `tsml_descp` mediumtext NOT NULL,
  `tsml_img` varchar(80) NOT NULL,
  `tsml_date` date NOT NULL DEFAULT current_timestamp(),
  `tsml_status` tinyint(4) NOT NULL DEFAULT 1,
  PRIMARY KEY (`tsml_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_testimonial`
--

INSERT INTO `tbl_testimonial` (`tsml_id`, `tsml_cname`, `tsml_descp`, `tsml_img`, `tsml_date`, `tsml_status`) VALUES
(1, 'Jishnu', 'Hotel dapibus asue metus the nec feusiate eraten miss hendreri net ve ante the lemon sanleo nectan feugiat erat hendrerit necuis ve ante otel inilla duiman at finibus viverra neca the sene on satien the miss drana inc fermen norttito sit space, mus nellentesque habitan.', 'images.jpg', '2022-08-20', 1),
(2, 'Rajeev', 'Hotel dapibus asue metus the nec feusiate eraten miss hendreri net ve ante the lemon sanleo nectan feugiat erat hendrerit necuis ve ante otel inilla duiman at finibus viverra neca the sene on satien the miss drana inc fermen norttito sit space, mus nellentesque habitan.', 'images_(1).jpg', '2022-08-20', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
