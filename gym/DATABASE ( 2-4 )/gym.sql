/*
SQLyog Community v13.1.2 (32 bit)
MySQL - 8.0.13 : Database - gym
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`gym` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `gym`;

/*Table structure for table `account` */

DROP TABLE IF EXISTS `account`;

CREATE TABLE `account` (
  `acc_id` int(255) NOT NULL AUTO_INCREMENT,
  `acc_username` varchar(255) DEFAULT NULL,
  `acc_password` varchar(255) DEFAULT NULL,
  `acc_accessright` varchar(255) DEFAULT NULL,
  `isDeleted` varchar(255) DEFAULT '0',
  `isBlocked` varchar(255) DEFAULT '0',
  PRIMARY KEY (`acc_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `account` */

insert  into `account`(`acc_id`,`acc_username`,`acc_password`,`acc_accessright`,`isDeleted`,`isBlocked`) values 
(1,'admin','admin','1','0','0');

/*Table structure for table `member` */

DROP TABLE IF EXISTS `member`;

CREATE TABLE `member` (
  `member_id` int(255) NOT NULL AUTO_INCREMENT,
  `member_code` varchar(255) DEFAULT NULL,
  `member_firstname` varchar(255) DEFAULT NULL,
  `member_middlename` varchar(255) DEFAULT NULL,
  `member_lastname` varchar(255) DEFAULT NULL,
  `member_birthdate` varchar(255) DEFAULT NULL,
  `member_address` varchar(255) DEFAULT NULL,
  `member_gender` varchar(255) DEFAULT NULL,
  `member_occupation` varchar(255) DEFAULT NULL,
  `member_contact` varchar(255) DEFAULT NULL,
  `member_sub_id` varchar(255) DEFAULT NULL,
  `member_age` varchar(255) DEFAULT NULL,
  `membership_registered` varchar(255) DEFAULT NULL,
  `membership_expired` varchar(255) DEFAULT NULL,
  `isPaid` varchar(255) DEFAULT '1',
  `isDeleted` varchar(255) DEFAULT '0',
  `isExpired` varchar(255) DEFAULT '0',
  `isCancelled` varchar(255) DEFAULT '0',
  PRIMARY KEY (`member_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `member` */

insert  into `member`(`member_id`,`member_code`,`member_firstname`,`member_middlename`,`member_lastname`,`member_birthdate`,`member_address`,`member_gender`,`member_occupation`,`member_contact`,`member_sub_id`,`member_age`,`membership_registered`,`membership_expired`,`isPaid`,`isDeleted`,`isExpired`,`isCancelled`) values 
(1,'44587185','asd','asda','dasdasdasd','2019-02-27','asdasd','1','asda','sdasdasd','3','12','2019-02-04','2019-08-04','1','0','0','0');

/*Table structure for table `member_cancelled` */

DROP TABLE IF EXISTS `member_cancelled`;

CREATE TABLE `member_cancelled` (
  `member_cancelled_id` int(255) NOT NULL AUTO_INCREMENT,
  `member_id` varchar(255) DEFAULT NULL,
  `date_cancelled` varchar(255) DEFAULT NULL,
  `isDeleted` varchar(255) DEFAULT '0',
  PRIMARY KEY (`member_cancelled_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `member_cancelled` */

insert  into `member_cancelled`(`member_cancelled_id`,`member_id`,`date_cancelled`,`isDeleted`) values 
(1,'1','2019-02-04','0');

/*Table structure for table `member_expired` */

DROP TABLE IF EXISTS `member_expired`;

CREATE TABLE `member_expired` (
  `member_expired_id` int(255) NOT NULL AUTO_INCREMENT,
  `member_id` varchar(255) DEFAULT NULL,
  `date_expired` varchar(255) DEFAULT NULL,
  `isDeleted` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT '0',
  PRIMARY KEY (`member_expired_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `member_expired` */

/*Table structure for table `member_logs` */

DROP TABLE IF EXISTS `member_logs`;

CREATE TABLE `member_logs` (
  `member_logs_id` int(255) NOT NULL AUTO_INCREMENT,
  `member_username` varchar(255) DEFAULT NULL,
  `member_status` varchar(255) DEFAULT NULL,
  `date_log` varchar(255) DEFAULT NULL,
  `isDeleted` varchar(254) DEFAULT NULL,
  PRIMARY KEY (`member_logs_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

/*Data for the table `member_logs` */

insert  into `member_logs`(`member_logs_id`,`member_username`,`member_status`,`date_log`,`isDeleted`) values 
(1,'admin',' CREATED MEMBER asd asda dasdasdasd ','February 4, 2019 9:12 pm  ',NULL),
(2,'admin',' LOGGED IN ','February 4, 2019 9:13:pm  ',NULL),
(3,'admin',' LOGGED IN ','February 4, 2019 9:15:pm  ',NULL),
(4,'admin',' LOGGED IN ','February 4, 2019 9:15:pm  ',NULL),
(5,'admin',' LOGGED IN ','February 4, 2019 9:15:pm  ',NULL),
(6,'admin',' LOGGED IN ','February 4, 2019 9:15:pm  ',NULL),
(7,'admin',' LOGGED IN ','February 4, 2019 9:17:pm  ',NULL),
(8,'admin',' LOGGED IN ','February 4, 2019 9:18:pm  ',NULL),
(9,'admin',' RENEWED MEMBER WITH CODE 44587185','February 4, 2019 9:24:pm  ',NULL);

/*Table structure for table `member_sales` */

DROP TABLE IF EXISTS `member_sales`;

CREATE TABLE `member_sales` (
  `member_sales_id` int(255) NOT NULL AUTO_INCREMENT,
  `member_username` varchar(255) DEFAULT NULL,
  `member_status` varchar(255) DEFAULT NULL,
  `date_log` varchar(255) DEFAULT NULL,
  `isDeleted` varchar(255) DEFAULT '0',
  PRIMARY KEY (`member_sales_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `member_sales` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
