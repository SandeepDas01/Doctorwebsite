-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 28, 2017 at 11:40 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ajaydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE IF NOT EXISTS `adminlogin` (
  `userName` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `emailId` varchar(50) NOT NULL,
  `image` text NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`userName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`userName`, `password`, `emailId`, `image`, `status`) VALUES
('admin', '111', 'cubeheap@gmail.com', 'assets/uploads/profile/650115_grassclip1.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
  `bId` int(11) NOT NULL AUTO_INCREMENT,
  `tComments` int(11) NOT NULL,
  `tView` int(11) NOT NULL,
  `title` text NOT NULL,
  `imagePath` text NOT NULL,
  `sDescription` text NOT NULL,
  `description` text NOT NULL,
  `date` date NOT NULL,
  `isPopular` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL,
  PRIMARY KEY (`bId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`bId`, `tComments`, `tView`, `title`, `imagePath`, `sDescription`, `description`, `date`, `isPopular`, `status`) VALUES
(1, 0, 0, ' Lates blog post with image', 'assets/uploads/blogImages/573730_about-1.jpg', '<p>Lorem ipsum dolor sit amet, his ea unum ponderum, detracto ponderum an vim. Equidem evertitur vel ea, has ad inermis principes. Mentitum appareat conceptam id quo. Vis evertitur referrentur ad, no laoreet consetetur reformidans pro, sit habeo omnes eu.</p>\r\n', '<p>Lorem ipsum dolor sit amet, his ea unum ponderum, detracto ponderum an vim. Equidem evertitur vel ea, has ad inermis principes. Mentitum appareat conceptam id quo. Vis evertitur referrentur ad, no laoreet consetetur reformidans pro, sit habeo omnes eu.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Iisque quaeque propriae has no. Modo blandit tincidunt ne eos, diam periculis disputationi usu cu. Ea eos suscipit expetendis. Vix ea quot modus, id novum vocibus pro. Nec autem ullum albucius no, vel ne tritani omnesque omittantur. Pro fierent hendrerit assueverit et, per quod luptatum comprehensam in.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>No consulatu comprehensam nam. Ferri dolore sententiae te eum, nibh dictas definitiones mea ei. Nec cu augue dicunt, est id verear labitur necessitatibus. Salutandi quaerendum ex nec.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Cu quo audire apeirian. Dolore necessitatibus sea id, nihil mandamus an ius, per recusabo interesset reprehendunt ea. In vix autem vituperatoribus, mei sint ipsum dolorem ex, quodsi vitupera</p>\r\n', '2017-08-28', 0, 1),
(2, 0, 0, 'Lates blog post with image', 'assets/uploads/blogImages/193084_featured-4.jpg', '<p>Lorem&nbsp; &quot;ipsum&quot; dolor &#39;sit&#39; amet, his ea unum ponderum, detracto ponderum an vim. Equidem evertitur vel ea, has ad inermis principes. Mentitum appareat conceptam id quo. Vis evertitur referrentur ad, no laoreet consetetur reformidans pro, sit habeo omnes eu</p>\r\n', '<div class=`content`>\r\n<h3><a href=`http://localhost/ajay/?action=blog-details#`>Lates blog post with image</a></h3>\r\n\r\n<p>Lorem&nbsp; &quot;ipsum&quot; dolor &#39;sit&#39; amet, his ea unum ponderum, detracto ponderum an vim. Equidem evertitur vel ea, has ad inermis principes. Mentitum appareat conceptam id quo. Vis evertitur referrentur ad, no laoreet consetetur reformidans pro, sit habeo omnes eu.</p>\r\n&nbsp;\r\n\r\n<p>Iisque quaeque propriae has no. Modo blandit tincidunt ne eos, diam periculis disputationi usu cu. Ea eos suscipit expetendis. Vix ea quot modus, id novum vocibus pro. Nec autem ullum albucius no, vel ne tritani omnesque omittantur. Pro fierent hendrerit assueverit et, per quod luptatum comprehensam in.</p>\r\n&nbsp;\r\n\r\n<p>No consulatu comprehensam nam. Ferri dolore sententiae te eum, nibh dictas definitiones mea ei. Nec cu augue dicunt, est id verear labitur necessitatibus. Salutandi quaerendum ex nec.</p>\r\n&nbsp;\r\n\r\n<p>Cu quo audire apeirian. Dolore necessitatibus sea id, nihil mandamus an ius, per recusabo interesset reprehendunt ea. In vix autem vituperatoribus, mei sint ipsum dolorem ex, quodsi vitupera</p>\r\n\r\n<div class=`bottom-box clearfix`>&nbsp;</div>\r\n</div>\r\n', '2017-08-28', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `gId` int(11) NOT NULL AUTO_INCREMENT,
  `serviceId` int(11) NOT NULL,
  `gCaption` varchar(50) NOT NULL,
  `gImagePath` text NOT NULL,
  `gStatus` int(11) NOT NULL,
  PRIMARY KEY (`gId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`gId`, `serviceId`, `gCaption`, `gImagePath`, `gStatus`) VALUES
(1, 0, '', 'assets/uploads/galleryImages/108703_1.jpg', 1),
(2, 0, '', 'assets/uploads/galleryImages/119659_featured-1.jpg', 1),
(3, 0, '', 'assets/uploads/galleryImages/778991_service-details-1.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hiw`
--

CREATE TABLE IF NOT EXISTS `hiw` (
  `hId` int(11) NOT NULL AUTO_INCREMENT,
  `hName` varchar(50) NOT NULL,
  `hpost` text NOT NULL,
  `hImage` text NOT NULL,
  `hDesc` text NOT NULL,
  `hStatus` int(11) NOT NULL,
  PRIMARY KEY (`hId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `hiw`
--

INSERT INTO `hiw` (`hId`, `hName`, `hpost`, `hImage`, `hDesc`, `hStatus`) VALUES
(3, 'Neelu', 'CEO & Founder of dentist', 'assets/uploads/hiw/872650_2.jpg', 'We are an independent gym that is committed to working with you to ga', 1),
(5, 'Sanjay', 'CEO & Founder of dentist', 'assets/uploads/hiw/71350_single-doctor.jpg', 'We are an independent gym that is committed to working with you to ga', 1),
(6, 'Sandeep', ' Founder of dentist', 'assets/uploads/hiw/929107_4.jpg', 'We are an independent gym that is committed to working with you to ga', 1),
(7, 'Mike Rogers', 'CEO & Founder of dentist', 'assets/uploads/hiw/97412_3.jpg', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod it tincidunt ut laoreet commodo consequat. Duis autem vel eum iriure tation dolore lorem ipsue magna aliquam erat the dummy text use for sample text</p>\r\n\r\n<ul>\r\n	<li>Speciality &nbsp;&nbsp;Physiotherapist</li>\r\n	<li>Degrees &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;M.D. of Medicine</li>\r\n	<li>Experience 38 years of Experience</li>\r\n	<li>Training &nbsp;&nbsp;&nbsp;&nbsp;Lorem ipsum dolor sit amet, consectetur , sed do eiusmod tempor</li>\r\n	<li>Degrees &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Monday, Friday</li>\r\n</ul>\r\n', 1);

-- --------------------------------------------------------

--
-- Table structure for table `metatag`
--

CREATE TABLE IF NOT EXISTS `metatag` (
  `pageId` int(11) NOT NULL AUTO_INCREMENT,
  `pageName` text NOT NULL,
  `pageTitle` text NOT NULL,
  `metaContent` text NOT NULL,
  `metaKeyword` text NOT NULL,
  `metaDescription` text NOT NULL,
  `mStatus` int(11) NOT NULL,
  PRIMARY KEY (`pageId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `metatag`
--

INSERT INTO `metatag` (`pageId`, `pageName`, `pageTitle`, `metaContent`, `metaKeyword`, `metaDescription`, `mStatus`) VALUES
(1, 'Home', 'Home', '<p>Home</p>\r\n', '<p>Home</p>\r\n', '<p>Home</p>\r\n', 1),
(2, 'About Us', 'About Us', 'About Us', 'About Us', 'About Us', 1),
(3, 'Blog', 'Blog', 'Blog', 'Blog', 'Blog', 1),
(4, 'Contact-Us', 'Contact-Us', 'Contact-Us', 'Contact-Us', 'Contact-Us', 1),
(5, 'Trainer', 'Trainer', 'Trainer', 'Trainer', 'Trainer', 1),
(6, 'Member', 'Member', 'Member', 'Member', 'Member', 1),
(7, 'Forum', 'Forum', 'Forum', 'Forum', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `newslatter`
--

CREATE TABLE IF NOT EXISTS `newslatter` (
  `nId` int(11) NOT NULL AUTO_INCREMENT,
  `imagePath` text NOT NULL,
  `viewLink` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`nId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `pId` int(11) NOT NULL AUTO_INCREMENT,
  `pageTitle` text NOT NULL,
  `pageContent` text NOT NULL,
  `pStatus` int(11) NOT NULL,
  PRIMARY KEY (`pId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`pId`, `pageTitle`, `pageContent`, `pStatus`) VALUES
(1, 'About Us', '<p>We are an independent gym that is committed to working with you to gain the results you want. Whether your aim is to loose weight, tone up, build bulk or gain weight we can put together a gym programme or recommend the right classes for you to attend in our studios..</p>\r\n\r\n<p>Hello, Fitness freak people is a community of fitness freak people. We are here to help you to achieve your health and fitness goals.In these days everyone is crazy about fitness, it should be. Fitness is the most important thing in the world. if you are fit then you can do everything .</p>\r\n\r\n<p><strong>If you have any Question for us then please fell free to ask from us <a href= http://localhost/fitness1/Contact >Contact Us</a>.</strong></p>\r\n\r\n<p>If you want to discuss something about you or have any question for me then mail me on- <strong>admin@fitnessfreakpeople.com</strong></p>\r\n\r\n<p><strong>Thanks</strong></p>\r\n', 1),
(2, 'Contact Us', '<p><strong>Email:</strong> info@fitnessfreakpeople.com</p>\r\n', 1);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE IF NOT EXISTS `services` (
  `sId` int(11) NOT NULL AUTO_INCREMENT,
  `sName` varchar(50) NOT NULL,
  `sImage` text NOT NULL,
  `hImage` text NOT NULL,
  `desc` text NOT NULL,
  `sStatus` int(11) NOT NULL,
  PRIMARY KEY (`sId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`sId`, `sName`, `sImage`, `hImage`, `desc`, `sStatus`) VALUES
(1, 'Cosmetic dentistry', 'assets/uploads/services/678649_3.jpg', 'assets/uploads/services/630828_t5.PNG', 'We are an independent gym that is committed to working with you to gain the results you want. Whether your aim is to loose  ', 1),
(2, 'Trainng', 'assets/uploads/services/622528_g4.jpg', 'assets/uploads/services/451995_t4.PNG', 'We are an independent gym that is committed to working with you to gain the results you want. Whether your aim is to loose weight, tone up, build bulk or gain weight we can put together a gym programme or recommend the right classes for you to attend in our studios.', 1),
(3, 'Available Lab', 'assets/uploads/services/754455_left-box-bg.jpg', 'assets/uploads/services/22766_t3.PNG', 'There are many variations of lorem\r\npassagei of Lorem Ipsum available\r\nbut the majority have ', 1),
(4, 'Crowns & bridges', 'assets/uploads/services/866821_left-box-bg.jpg', 'assets/uploads/services/209625_t2.PNG', 'There are many variations of lorem\r\npassagei of Lorem Ipsum available\r\nbut the majority have ', 1),
(8, 'leanings', 'assets/uploads/services/468475_pricing-1.jpg', 'assets/uploads/services/527709_t1.PNG', 'There are many variations of lorem\r\npassagei of Lorem Ipsum available\r\nbut the majority have', 1),
(9, 'Dental implants', 'assets/uploads/services/265808_4.jpg', 'assets/uploads/services/6072_t6.PNG', 'There are many variations of lorem\r\npassagei of Lorem Ipsum available\r\nbut the majority have ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `sId` int(11) NOT NULL AUTO_INCREMENT,
  `imagePath` text NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`sId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`sId`, `imagePath`, `status`) VALUES
(6, 'assets/uploads/sliderImages/566680_s1.jpg', 1),
(7, 'assets/uploads/sliderImages/633697_s2.jpg', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
