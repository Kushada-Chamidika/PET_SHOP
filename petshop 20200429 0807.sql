-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.5.62


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema petshop
--

CREATE DATABASE IF NOT EXISTS petshop;
USE petshop;

--
-- Definition of table `pet_details`
--

DROP TABLE IF EXISTS `pet_details`;
CREATE TABLE `pet_details` (
  `add_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  `mobile` varchar(10) DEFAULT NULL,
  `location` varchar(20) DEFAULT NULL,
  `password` varchar(15) DEFAULT NULL,
  `pict_path` varchar(50) DEFAULT NULL,
  `model` varchar(15) DEFAULT NULL,
  `breed` varchar(40) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `gender` varchar(8) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `description` text,
  `user_id` varchar(40) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`add_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pet_details`
--

/*!40000 ALTER TABLE `pet_details` DISABLE KEYS */;
INSERT INTO `pet_details` (`add_id`,`name`,`mobile`,`location`,`password`,`pict_path`,`model`,`breed`,`birthdate`,`gender`,`price`,`description`,`user_id`,`status`) VALUES 
 (16,'Dinushi','0712345678','Kaluthara','12345','pet_pictures/1588126366.png','Dog','Lion German Shepard','2019-11-08','Female',32233232,'xdvfsdvfdsvf','109','sold'),
 (17,'Dinushi','0712345678','Kaluthara','12345','pet_pictures/1574342540.png','Dog','Lion German Shepard','2019-11-07','Male',433443,'well','109','available'),
 (18,'Dinushi','0712345678','Kaluthara','12345','pet_pictures/1574342568.png','Dog','Lion German Shepard','2019-11-07','Male',23231231,'sdferf','109','sold');
/*!40000 ALTER TABLE `pet_details` ENABLE KEYS */;


--
-- Definition of table `selling_details`
--

DROP TABLE IF EXISTS `selling_details`;
CREATE TABLE `selling_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `add_id` varchar(20) DEFAULT '0',
  `buyer_id` varchar(20) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `selling_details`
--

/*!40000 ALTER TABLE `selling_details` DISABLE KEYS */;
INSERT INTO `selling_details` (`id`,`add_id`,`buyer_id`) VALUES 
 (48,'20','109'),
 (60,'16','114'),
 (61,'18','114');
/*!40000 ALTER TABLE `selling_details` ENABLE KEYS */;


--
-- Definition of table `user_details`
--

DROP TABLE IF EXISTS `user_details`;
CREATE TABLE `user_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pro_pic` varchar(50) NOT NULL,
  `first_name` varchar(15) NOT NULL,
  `last_name` varchar(15) NOT NULL,
  `username` varchar(15) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `country` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `set_password` varchar(15) NOT NULL,
  `confirm_password` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=117 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

/*!40000 ALTER TABLE `user_details` DISABLE KEYS */;
INSERT INTO `user_details` (`id`,`pro_pic`,`first_name`,`last_name`,`username`,`gender`,`country`,`email`,`set_password`,`confirm_password`) VALUES 
 (109,'user_pic/1574075420.png','Dinushi','Sumanasiri','Dinu0801','Female','America','1999dinushi@gmail.com','12345','12345'),
 (111,'user_pic/1574084388.png','Sam','Alvis','fdvsdv','Male','Sri Lanka','1999saman@gmail.com','1234','1234'),
 (113,'user_pic/1574084457.png','frgb','fgbsf','fgbfgs','Male','Sri Lanka','fcswf@gmail.com','0909','0909'),
 (114,'user_pic/1574084564.png','Kushada','Chamidika','dewa99','Male','Australia','1999kushada@gmail.com','2314','2314'),
 (115,'user_pic/1581302317.png','Lashan','Nimal','lashana99','Male','Sri Lanka','1999lashan@gmail.com','12345678','12345678');
/*!40000 ALTER TABLE `user_details` ENABLE KEYS */;




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
