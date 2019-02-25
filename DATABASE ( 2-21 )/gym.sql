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
CREATE DATABASE /*!32312 IF NOT EXISTS*/`gym` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */;

USE `gym`;

/*Table structure for table `account` */

DROP TABLE IF EXISTS `account`;

CREATE TABLE `account` (
  `acc_id` int(255) NOT NULL AUTO_INCREMENT,
  `acc_firstname` varchar(255) DEFAULT NULL,
  `acc_middlename` varchar(255) DEFAULT NULL,
  `acc_lastname` varchar(255) DEFAULT NULL,
  `acc_username` varchar(255) DEFAULT NULL,
  `acc_password` varchar(255) DEFAULT NULL,
  `acc_accessright` varchar(255) DEFAULT NULL,
  `isDeleted` varchar(255) DEFAULT '0',
  `isBlocked` varchar(255) DEFAULT '0',
  `acc_date` varchar(255) DEFAULT NULL,
  `isActivated` varchar(255) DEFAULT '0',
  PRIMARY KEY (`acc_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

/*Data for the table `account` */

insert  into `account`(`acc_id`,`acc_firstname`,`acc_middlename`,`acc_lastname`,`acc_username`,`acc_password`,`acc_accessright`,`isDeleted`,`isBlocked`,`acc_date`,`isActivated`) values 
(1,'admin','admin','admin','admin','admin','1','0','0','02/10/2019 07:10 PM','1'),
(2,NULL,NULL,NULL,'user','user','2','1','0','02/09/2019 07:10 PM','1'),
(3,NULL,NULL,NULL,'admin1','admin1','1','1','0','02/07/2019 07:10 PM','1'),
(4,'Angelo','','Ferrer','ancel','ancel','1','0','0','02/11/2019 06:10 PM','1'),
(5,'Arela','','qw','123','1234','1','0','0','02/11/2019 07:10 PM','1'),
(6,'v','c','a','ac','1234','2','0','0','02/16/2019 10:35 PM','1'),
(7,'BAC','C','A','2','1234','1','0','0','02/16/2019 10:44 PM','1'),
(8,'B','C','A','EEE','maspogi','2','0','0','02/16/2019 10:44 PM','1'),
(9,'TEST','TEST','TEST','TEST','tester','1','0','0','02/17/2019 11:11 AM','1');

/*Table structure for table `annual_sales` */

DROP TABLE IF EXISTS `annual_sales`;

CREATE TABLE `annual_sales` (
  `annual_sales_id` int(255) NOT NULL AUTO_INCREMENT,
  `member_id` varchar(255) DEFAULT NULL,
  `date_renewed` varchar(255) DEFAULT NULL,
  `date_expired` varchar(255) DEFAULT NULL,
  `annual_amount` varchar(255) DEFAULT '500',
  `isExpired` varchar(255) DEFAULT '0',
  `day` varchar(255) DEFAULT NULL,
  `week` varchar(255) DEFAULT NULL,
  `month` varchar(255) DEFAULT NULL,
  `year` varchar(255) DEFAULT NULL,
  `isDeleted` varchar(255) DEFAULT '0',
  PRIMARY KEY (`annual_sales_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `annual_sales` */

insert  into `annual_sales`(`annual_sales_id`,`member_id`,`date_renewed`,`date_expired`,`annual_amount`,`isExpired`,`day`,`week`,`month`,`year`,`isDeleted`) values 
(1,'11','2019-02-25 02:46:34','2020-02-25','500','0','25','08','02','2019','0');

/*Table structure for table `customer_daily` */

DROP TABLE IF EXISTS `customer_daily`;

CREATE TABLE `customer_daily` (
  `cust_daily_id` int(255) NOT NULL AUTO_INCREMENT,
  `cust_firstname` varchar(255) DEFAULT NULL,
  `cust_middlename` varchar(255) DEFAULT NULL,
  `cust_lastname` varchar(255) DEFAULT NULL,
  `cust_contact_no` varchar(255) DEFAULT NULL,
  `cust_time_in` varchar(255) DEFAULT NULL,
  `amount` varchar(255) DEFAULT '200',
  `cust_address` varchar(255) DEFAULT NULL,
  `cust_birthday` varchar(255) DEFAULT NULL,
  `cust_age` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `cust_height` varchar(255) DEFAULT NULL,
  `cust_weight` varchar(255) DEFAULT NULL,
  `cust_medical_history` varchar(255) DEFAULT NULL,
  `isTimeOut` varchar(255) DEFAULT '0',
  `isDeleted` varchar(255) DEFAULT '0',
  `isMember` varchar(255) DEFAULT '0',
  PRIMARY KEY (`cust_daily_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `customer_daily` */

insert  into `customer_daily`(`cust_daily_id`,`cust_firstname`,`cust_middlename`,`cust_lastname`,`cust_contact_no`,`cust_time_in`,`amount`,`cust_address`,`cust_birthday`,`cust_age`,`cust_height`,`cust_weight`,`cust_medical_history`,`isTimeOut`,`isDeleted`,`isMember`) values 
(1,'Juan Miguel','Ponce','Cortez','123','February 17, 2019 10:36 PM  ','200','a','1996-08-28','22','123','123','asd','1','0','0');

/*Table structure for table `customer_sales` */

DROP TABLE IF EXISTS `customer_sales`;

CREATE TABLE `customer_sales` (
  `cust_sales_id` int(255) NOT NULL AUTO_INCREMENT,
  `cust_id` varchar(255) DEFAULT NULL,
  `cust_firstname` varchar(255) DEFAULT NULL,
  `cust_middlename` varchar(255) DEFAULT NULL,
  `cust_lastname` varchar(255) DEFAULT NULL,
  `time_out` varchar(255) DEFAULT NULL,
  `cust_contact_no` varchar(255) DEFAULT NULL,
  `amount` varchar(255) DEFAULT '200',
  `day` varchar(255) DEFAULT NULL,
  `week` varchar(255) DEFAULT NULL,
  `month` varchar(255) DEFAULT NULL,
  `year` varchar(255) DEFAULT NULL,
  `isDeleted` varchar(255) DEFAULT '0',
  PRIMARY KEY (`cust_sales_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `customer_sales` */

insert  into `customer_sales`(`cust_sales_id`,`cust_id`,`cust_firstname`,`cust_middlename`,`cust_lastname`,`time_out`,`cust_contact_no`,`amount`,`day`,`week`,`month`,`year`,`isDeleted`) values 
(1,'1','Juan Miguel','Ponce','Cortez','February 17, 2019 10:36 PM  ',NULL,'200','17','07','February','2019','0'),
(2,'1','Juan Miguel','Ponce','Cortez','February 17, 2019 10:36 PM  ',NULL,'200','17','07','February','2019','0');

/*Table structure for table `daily_time_in_out` */

DROP TABLE IF EXISTS `daily_time_in_out`;

CREATE TABLE `daily_time_in_out` (
  `time_in_id` int(255) NOT NULL AUTO_INCREMENT,
  `cust_daily_id` varchar(255) DEFAULT NULL,
  `time_update` varchar(255) DEFAULT NULL,
  `isTimeOut` varchar(255) DEFAULT '0',
  PRIMARY KEY (`time_in_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `daily_time_in_out` */

insert  into `daily_time_in_out`(`time_in_id`,`cust_daily_id`,`time_update`,`isTimeOut`) values 
(1,'1','February 20, 2019 9:32 PM  ','1');

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
  `member_contact` varchar(255) DEFAULT NULL,
  `member_height` varchar(255) DEFAULT NULL,
  `member_weight` varchar(255) DEFAULT NULL,
  `member_targetweight` varchar(255) DEFAULT NULL,
  `member_medicalhistory` varchar(255) DEFAULT NULL,
  `member_package` varchar(255) DEFAULT NULL,
  `member_sub_id` varchar(255) DEFAULT NULL,
  `member_age` varchar(255) DEFAULT NULL,
  `membership_registered` varchar(255) DEFAULT NULL,
  `membership_expired` varchar(255) DEFAULT NULL,
  `annual_expire` varchar(255) DEFAULT NULL,
  `day` varchar(255) DEFAULT NULL,
  `week` varchar(255) DEFAULT NULL,
  `month` varchar(255) DEFAULT NULL,
  `year` varchar(255) DEFAULT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `isPaid` varchar(255) DEFAULT '1',
  `isDeleted` varchar(255) DEFAULT '0',
  `isExpired` varchar(255) DEFAULT '0',
  `isCancelled` varchar(255) DEFAULT '0',
  `isTimeIn` varchar(255) DEFAULT '1',
  `isTimeOut` varchar(255) DEFAULT '0',
  PRIMARY KEY (`member_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

/*Data for the table `member` */

insert  into `member`(`member_id`,`member_code`,`member_firstname`,`member_middlename`,`member_lastname`,`member_birthdate`,`member_address`,`member_gender`,`member_contact`,`member_height`,`member_weight`,`member_targetweight`,`member_medicalhistory`,`member_package`,`member_sub_id`,`member_age`,`membership_registered`,`membership_expired`,`annual_expire`,`day`,`week`,`month`,`year`,`amount`,`isPaid`,`isDeleted`,`isExpired`,`isCancelled`,`isTimeIn`,`isTimeOut`) values 
(2,'31669180','','','','','','Female','','','','123','',NULL,'1','','2019-02-20 20:46:55','2019-03-20','2020-02-20','20','08','February','2019','1000','1','0','0','0','1','0'),
(3,'49246891','','','','','','Male','','','','2','',NULL,'1','','2019-02-20 20:47:34','2019-03-20','2020-02-20','20','08','February','2019','1000','1','0','0','0','1','0'),
(4,'49246891','','','','','','Male','','','','2','',NULL,'1','','2019-02-20 20:48:10','2019-03-20','2020-02-20','20','08','February','2019','1000','1','0','0','0','1','0'),
(5,'22298509','','','','','','Male','','','','21','',NULL,'1','','2019-02-20 20:50:08','2019-03-20','2020-02-20','20','08','February','2019','1000','1','0','0','0','1','0'),
(6,'22298509','Juan Miguel','Ponce','Cortez','1996-08-28','a','Male','123','123','123','21','asd',NULL,'1','22','2019-02-20 20:50:20','2019-03-20','2020-02-20','20','08','February','2019','1000','1','0','0','0','1','0'),
(7,'63825237','','','','','','Male','','','','1','',NULL,'1','','2019-02-20 20:50:42','2019-03-20','2020-02-20','20','08','February','2019','1000','1','0','0','0','1','0'),
(8,'85258713','Juan Miguel','Ponce','Cortez','1996-08-28','a','Male','123','123','123','12','asd',NULL,'1','22','2019-02-20 20:52:44','2019-03-20','2020-02-20','20','08','February','2019','1000','1','0','0','0','1','0'),
(9,'53032959','e','1','a','1996-08-28','a','Male','12','32','12','123','asd',NULL,'1','22','2019-02-20 20:54:00','2019-03-20','2020-02-20','20','08','February','2019','1000','1','0','0','0','1','0'),
(10,'8716801','f','a','awwd','1996-08-28','123','Male','123','123','123','123','asd',NULL,'1','22','2019-02-20 21:27:09','2019-03-20','2020-02-20','20','08','February','2019','1000','1','0','0','0','1','0');

/*Table structure for table `member_cancelled` */

DROP TABLE IF EXISTS `member_cancelled`;

CREATE TABLE `member_cancelled` (
  `member_cancelled_id` int(255) NOT NULL AUTO_INCREMENT,
  `member_id` varchar(255) DEFAULT NULL,
  `date_cancelled` varchar(255) DEFAULT NULL,
  `isDeleted` varchar(255) DEFAULT '0',
  PRIMARY KEY (`member_cancelled_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `member_cancelled` */

/*Table structure for table `member_expired` */

DROP TABLE IF EXISTS `member_expired`;

CREATE TABLE `member_expired` (
  `member_expired_id` int(255) NOT NULL AUTO_INCREMENT,
  `member_id` varchar(255) DEFAULT NULL,
  `date_expired` varchar(255) DEFAULT NULL,
  `annual_expire` varchar(255) DEFAULT NULL,
  `isDeleted` varchar(255) DEFAULT '0',
  PRIMARY KEY (`member_expired_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `member_expired` */

/*Table structure for table `member_logs` */

DROP TABLE IF EXISTS `member_logs`;

CREATE TABLE `member_logs` (
  `member_logs_id` int(255) NOT NULL AUTO_INCREMENT,
  `member_username` varchar(255) DEFAULT NULL,
  `member_status` varchar(255) DEFAULT NULL,
  `date_log` varchar(255) DEFAULT NULL,
  `isDeleted` varchar(254) DEFAULT '0',
  PRIMARY KEY (`member_logs_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

/*Data for the table `member_logs` */

insert  into `member_logs`(`member_logs_id`,`member_username`,`member_status`,`date_log`,`isDeleted`) values 
(1,'admin',' CREATED MEMBER asd as asd ','February 17, 2019 1:33 pm  ','0'),
(2,'admin',' CREATED CUSTOMER v c a','February 17, 2019 1:35 PM  ','0'),
(3,'admin',' CREATED CUSTOMER B C A','February 17, 2019 1:57 PM  ','0'),
(4,'admin',' CREATED CUSTOMER B C A','February 17, 2019 1:57 PM  ','0'),
(5,'admin',' CREATED CUSTOMER A C A','February 17, 2019 9:01 PM  ','0'),
(6,'admin',' CREATED CUSTOMER b c a','February 17, 2019 9:01 PM  ','0'),
(7,'admin',' CREATED CUSTOMER b c a','February 17, 2019 9:57 PM  ','0'),
(8,'admin',' CREATED CUSTOMER Juan Miguel Ponce Cortez','February 17, 2019 10:00 PM  ','0'),
(9,'admin',' CREATED CUSTOMER Angelo Something Ferrer','February 17, 2019 10:31 PM  ','0'),
(10,'admin',' CREATED CUSTOMER Juan Miguel Ponce Cortez','February 17, 2019 10:36 PM  ','0'),
(11,'admin',' LOGGED IN ','February 19, 2019 8:21:pm  ','0'),
(12,'admin',' LOGGED IN ','February 19, 2019 8:21:pm  ','0'),
(13,'admin',' CREATED MEMBER v c a ','February 19, 2019 8:35 pm  ','0'),
(14,'admin',' CREATED MEMBER b f a ','February 19, 2019 8:36 pm  ','0'),
(15,'admin',' CREATED MEMBER B C A ','February 19, 2019 8:38 pm  ','0'),
(16,'admin',' LOGGED IN ','February 20, 2019 7:04:pm  ','0'),
(17,'admin',' LOGGED IN ','February 20, 2019 8:49:pm  ','0'),
(18,'admin',' CREATED MEMBER e 1 a ','February 20, 2019 8:54 pm  ','0'),
(19,'admin',' CREATED MEMBER f a awwd ','February 20, 2019 9:27 pm  ','0');

/*Table structure for table `member_promo` */

DROP TABLE IF EXISTS `member_promo`;

CREATE TABLE `member_promo` (
  `promo_id` int(255) NOT NULL AUTO_INCREMENT,
  `promo_description` varchar(255) DEFAULT NULL,
  `promo_duration` varchar(255) DEFAULT NULL,
  `promo_amount` varchar(255) DEFAULT NULL,
  `isDeleted` varchar(255) DEFAULT '0',
  PRIMARY KEY (`promo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `member_promo` */

/*Table structure for table `member_sales` */

DROP TABLE IF EXISTS `member_sales`;

CREATE TABLE `member_sales` (
  `member_sales_id` int(255) NOT NULL AUTO_INCREMENT,
  `member_username` varchar(255) DEFAULT NULL,
  `member_status` varchar(255) DEFAULT NULL,
  `date_log` varchar(255) DEFAULT NULL,
  `annual_expire` varchar(255) DEFAULT NULL,
  `isDeleted` varchar(255) DEFAULT '0',
  PRIMARY KEY (`member_sales_id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;

/*Data for the table `member_sales` */

insert  into `member_sales`(`member_sales_id`,`member_username`,`member_status`,`date_log`,`annual_expire`,`isDeleted`) values 
(1,NULL,NULL,'February 16, 2019 5:56 pm  ',NULL,'0'),
(2,NULL,NULL,'February 16, 2019 5:56 pm  ',NULL,'0'),
(3,NULL,NULL,'February 16, 2019 5:58 pm  ',NULL,'0'),
(4,NULL,NULL,'February 16, 2019 6:45 pm  ',NULL,'0'),
(5,NULL,NULL,'February 16, 2019 6:46 pm  ',NULL,'0'),
(6,NULL,NULL,'February 16, 2019 6:48 pm  ',NULL,'0'),
(7,NULL,NULL,'February 16, 2019 6:50 pm  ',NULL,'0'),
(8,NULL,NULL,'February 16, 2019 6:52 pm  ',NULL,'0'),
(9,NULL,NULL,'February 16, 2019 6:54 pm  ',NULL,'0'),
(10,NULL,NULL,'February 16, 2019 6:56 pm  ',NULL,'0'),
(11,NULL,NULL,'February 16, 2019 6:56 pm  ',NULL,'0'),
(12,NULL,NULL,'February 16, 2019 6:58 pm  ',NULL,'0'),
(13,NULL,NULL,'February 16, 2019 9:02 pm  ',NULL,'0'),
(14,NULL,NULL,'February 16, 2019 9:03 pm  ',NULL,'0'),
(15,NULL,NULL,'February 16, 2019 9:03 pm  ',NULL,'0'),
(16,NULL,NULL,'February 16, 2019 9:04 pm  ',NULL,'0'),
(17,NULL,NULL,'February 16, 2019 9:04 pm  ',NULL,'0'),
(18,NULL,NULL,'February 16, 2019 9:06 pm  ',NULL,'0'),
(19,NULL,NULL,'February 16, 2019 9:06 pm  ',NULL,'0'),
(20,NULL,NULL,'February 16, 2019 9:07 pm  ',NULL,'0'),
(21,NULL,NULL,'February 16, 2019 9:07 pm  ',NULL,'0'),
(22,NULL,NULL,'February 16, 2019 9:07 pm  ',NULL,'0'),
(23,NULL,NULL,'February 16, 2019 9:09 pm  ',NULL,'0'),
(24,NULL,NULL,'February 16, 2019 9:12 pm  ',NULL,'0'),
(25,NULL,NULL,'February 16, 2019 9:14 pm  ',NULL,'0'),
(26,NULL,NULL,'February 16, 2019 9:15 pm  ',NULL,'0'),
(27,NULL,NULL,'February 16, 2019 9:16 pm  ',NULL,'0'),
(28,NULL,NULL,'February 16, 2019 9:17 pm  ',NULL,'0'),
(29,NULL,NULL,'February 17, 2019 12:54 pm  ',NULL,'0'),
(30,NULL,NULL,'February 17, 2019 12:56 pm  ',NULL,'0'),
(31,NULL,NULL,'February 17, 2019 1:33 pm  ',NULL,'0'),
(32,NULL,NULL,'February 19, 2019 8:35 pm  ',NULL,'0'),
(33,NULL,NULL,'February 19, 2019 8:36 pm  ',NULL,'0'),
(34,NULL,NULL,'February 19, 2019 8:38 pm  ',NULL,'0');

/*Table structure for table `member_sales_new` */

DROP TABLE IF EXISTS `member_sales_new`;

CREATE TABLE `member_sales_new` (
  `member_sales_new_id` int(255) NOT NULL AUTO_INCREMENT,
  `member_firstname` varchar(255) DEFAULT NULL,
  `member_middlename` varchar(255) DEFAULT NULL,
  `member_lastname` varchar(255) DEFAULT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `date_registered` varchar(255) DEFAULT NULL,
  `annual_expired` varchar(255) DEFAULT NULL,
  `day` varchar(255) DEFAULT NULL,
  `week` varchar(255) DEFAULT NULL,
  `month` varchar(255) DEFAULT NULL,
  `year` varchar(255) DEFAULT NULL,
  `member_package` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`member_sales_new_id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;

/*Data for the table `member_sales_new` */

insert  into `member_sales_new`(`member_sales_new_id`,`member_firstname`,`member_middlename`,`member_lastname`,`amount`,`date_registered`,`annual_expired`,`day`,`week`,`month`,`year`,`member_package`) values 
(1,'Juan Miguel','Ponce','Cortez','1000','2019-02-16 17:56:13','2020-02-16','16','07','February','2019','1 Month Package for P1,000'),
(2,'Juan Miguel','Ponce','Cortez','1000','2019-02-16 17:56:34','2020-02-16','16','07','February','2019','1 Month Package for P1,000'),
(3,'Juan Miguel','Ponce','Cortez','1000','2019-02-16 17:58:39','2020-02-16','16','07','February','2019','1 Month Package for P1,000'),
(4,'asd','asd','asd','1000','2019-02-16 18:45:52','2020-02-16','16','07','February','2019','1 Month Package for P1,000'),
(5,'Juan Miguel','Ponce','Cortez','1000','2019-02-16 18:46:13','2020-02-16','16','07','February','2019','1 Month Package for P1,000'),
(6,'Juan Miguel','Ponce','Cortez','1000','2019-02-16 18:48:30','2020-02-16','16','07','February','2019','1 Month Package for P1,000'),
(7,'Juan Miguel','Ponce','Cortez','1000','2019-02-16 18:50:14','2020-02-16','16','07','February','2019','1 Month Package for P1,000'),
(8,'Juan Miguel','Ponce','Cortez','1000','2019-02-16 18:52:58','2020-02-16','16','07','February','2019','1 Month Package for P1,000'),
(9,'Juan Miguel','Ponce','Cortez','1000','2019-02-16 18:54:17','2020-02-16','16','07','February','2019','1 Month Package for P1,000'),
(10,'Juan Miguel','Ponce','Cortez','1000','2019-02-16 18:56:03','2020-02-16','16','07','February','2019','1 Month Package for P1,000'),
(11,'Juan Miguel','Ponce','Cortez','1000','2019-02-16 18:56:55','2020-02-16','16','07','February','2019','1 Month Package for P1,000'),
(12,'Juan Miguel','Ponce','Cortez','1000','2019-02-16 18:58:54','2020-02-16','16','07','February','2019','1 Month Package for P1,000'),
(13,'Juan Miguel','Ponce','Cortez','1000','2019-02-16 21:02:17','2020-02-16','16','07','February','2019','1 Month Package for P1,000'),
(14,'Juan Miguel','Ponce','Cortez','1000','2019-02-16 21:03:37','2020-02-16','16','07','February','2019','1 Month Package for P1,000'),
(15,'Juan Miguel','Ponce','Cortez','1000','2019-02-16 21:03:50','2020-02-16','16','07','February','2019','1 Month Package for P1,000'),
(16,'Juan Miguel','Ponce','Cortez','1000','2019-02-16 21:04:03','2020-02-16','16','07','February','2019','1 Month Package for P1,000'),
(17,'Juan Miguel','Ponce','Cortez','1000','2019-02-16 21:04:29','2020-02-16','16','07','February','2019','1 Month Package for P1,000'),
(18,'Juan Miguel','Ponce','Cortez','1000','2019-02-16 21:06:38','2020-02-16','16','07','February','2019','1 Month Package for P1,000'),
(19,'Juan Miguel','Ponce','Cortez','1000','2019-02-16 21:06:51','2020-02-16','16','07','February','2019','1 Month Package for P1,000'),
(20,'Juan Miguel','Ponce','Cortez','1000','2019-02-16 21:07:12','2020-02-16','16','07','February','2019','1 Month Package for P1,000'),
(21,'Juan Miguel','Ponce','Cortez','1000','2019-02-16 21:07:15','2020-02-16','16','07','February','2019','1 Month Package for P1,000'),
(22,'Juan Miguel','Ponce','Cortez','1000','2019-02-16 21:07:21','2020-02-16','16','07','February','2019','1 Month Package for P1,000'),
(23,'Juan Miguel','Ponce','Cortez','1000','2019-02-16 21:09:48','2020-02-16','16','07','February','2019','1 Month Package for P1,000'),
(24,'Juan Miguel','Ponce','Cortez','1000','2019-02-16 21:12:46','2020-02-16','16','07','February','2019','1 Month Package for P1,000'),
(25,'Juan Miguel','Ponce','Cortez','1000','2019-02-16 21:14:07','2020-02-16','16','07','February','2019','1 Month Package for P1,000'),
(26,'Juan Miguel','Ponce','Cortez','1000','2019-02-16 21:15:31','2020-02-16','16','07','February','2019','1 Month Package for P1,000'),
(27,'Juan Miguel','Ponce','Cortez','1000','2019-02-16 21:16:57','2020-02-16','16','07','February','2019','1 Month Package for P1,000'),
(28,'asdasd','asdasd','asdasd','1000','2019-02-16 21:17:22','2020-02-16','16','07','February','2019','1 Month Package for P1,000'),
(29,'Juan Miguelssss','aaa','Cortez','1000','2019-02-17 12:54:49','2020-02-17','17','07','February','2019','1 Month Package for P1,000'),
(30,'dwa','w','asd','1000','2019-02-17 12:56:31','2020-02-17','17','07','February','2019','1 Month Package for P1,000'),
(31,'asd','as','asd','1000','2019-02-17 13:33:46','2020-02-17','17','07','February','2019','1 Month Package for P1,000'),
(32,'v','c','a','1000','2019-02-19 20:35:29','2020-02-19','19','08','February','2019','1 Month Package for P1,000'),
(33,'b','f','a','1000','2019-02-19 20:36:02','2020-02-19','19','08','February','2019','1 Month Package for P1,000'),
(34,'B','C','A','1000','2019-02-19 20:38:16','2020-02-19','19','08','February','2019','1 Month Package for P1,000'),
(35,'e','1','a','1000','2019-02-20 20:54:00','2020-02-20','20','08','February','2019','1 Month Package for P1,000'),
(36,'f','a','awwd','1000','2019-02-20 21:27:09','2020-02-20','20','08','February','2019','1 Month Package for P1,000');

/*Table structure for table `member_time_in_logs` */

DROP TABLE IF EXISTS `member_time_in_logs`;

CREATE TABLE `member_time_in_logs` (
  `member_time_in_logs_id` int(255) NOT NULL AUTO_INCREMENT,
  `member_id` varchar(255) DEFAULT NULL,
  `member_firstname` varchar(255) DEFAULT NULL,
  `member_middlename` varchar(255) DEFAULT NULL,
  `member_lastname` varchar(255) DEFAULT NULL,
  `member_time` varchar(255) DEFAULT NULL,
  `member_timein` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT '1',
  `member_timeout` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT '0',
  `isDeleted` varchar(255) DEFAULT '0',
  PRIMARY KEY (`member_time_in_logs_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `member_time_in_logs` */

insert  into `member_time_in_logs`(`member_time_in_logs_id`,`member_id`,`member_firstname`,`member_middlename`,`member_lastname`,`member_time`,`member_timein`,`member_timeout`,`isDeleted`) values 
(1,NULL,'f','a','awwd','2019-02-20 21:45:00','1','0','0');

/*Table structure for table `sales` */

DROP TABLE IF EXISTS `sales`;

CREATE TABLE `sales` (
  `mem_full` varchar(255) DEFAULT NULL,
  `mem_package` varchar(255) DEFAULT NULL,
  `mem_amount` varchar(255) DEFAULT NULL,
  `mem_date` varchar(255) DEFAULT NULL,
  `mem_expired` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `sales` */

insert  into `sales`(`mem_full`,`mem_package`,`mem_amount`,`mem_date`,`mem_expired`) values 
(' owen mil arela ','2','2500','12','2020-02-12'),
(' pp pp pp ','1','1000','2019-02-12 17:41:35','2020-02-12'),
(' zz zz zz ','1 Year Package for P8,500','2500','2019-02-12 17:43:24','2020-02-12'),
(' PO POP POKE ','1 Year Package for P8,500','2500','2019-02-12 17:45:05','2020-02-12'),
(' KJB KJB KAJSDBNKHJB ','1 Month Package for P1,000','1000','2019-03-13 18:25:01','2020-03-13'),
(' KJBN KJB KIJB ','1 Month Package for P1,000','1000','2019-03-13 18:25:53','2020-03-13'),
(' rrr rr rrrrrrrrrrr ','3 Months Package for P2,500','2500','2019-03-13 18:30:42','2020-03-13'),
(' asd asd aqsd ','1 Month Package for P1,000','1000','2019-03-13 18:31:32','2020-03-13'),
(' oiujn, ijuon oiuhn ','1 Year Package for P8,500','8500','2019-03-13 18:52:45','2020-03-13'),
(' iuh uijn ouij ','6 Months Package for P4,500','4500','2019-02-12 19:01:48','2020-02-12'),
(' Angelo Gutierrez Ferrer ','3 Months Package for P2,500','2500','2019-02-12 19:28:50','2020-02-12'),
(' Juan  Dela cruz ','3 Months Package for P2,500','2500','2019-02-12 20:02:49','2020-02-12'),
(' 1 3 3 ','1 Month Package for P1,000','1000','2019-02-16 16:01:26','2020-02-16'),
(' B C A ','1 Month Package for P1,000','1000','2019-02-16 16:03:13','2020-02-16'),
(' a d 3 ','1 Month Package for P1,000','6666','2019-02-16 16:06:27','2020-02-16'),
(' BCCC ECC ACC ','1 Month Package for P1,000','6666','2019-02-16 16:12:01','2020-02-16'),
(' Juan Miguel Ponce Cortez ','1 Month Package for P1,000','1000','2019-02-16 17:56:13','2020-02-16'),
(' Juan Miguel Ponce Cortez ','1 Month Package for P1,000','1000','2019-02-16 17:56:34','2020-02-16'),
(' Juan Miguel Ponce Cortez ','1 Month Package for P1,000','1000','2019-02-16 17:58:39','2020-02-16'),
(' asd asd asd ','1 Month Package for P1,000','1000','2019-02-16 18:45:52','2020-02-16'),
(' Juan Miguel Ponce Cortez ','1 Month Package for P1,000','1000','2019-02-16 18:46:13','2020-02-16'),
(' Juan Miguel Ponce Cortez ','1 Month Package for P1,000','1000','2019-02-16 18:48:30','2020-02-16'),
(' Juan Miguel Ponce Cortez ','1 Month Package for P1,000','1000','2019-02-16 18:50:14','2020-02-16'),
(' Juan Miguel Ponce Cortez ','1 Month Package for P1,000','1000','2019-02-16 18:52:58','2020-02-16'),
(' Juan Miguel Ponce Cortez ','1 Month Package for P1,000','1000','2019-02-16 18:54:17','2020-02-16'),
(' Juan Miguel Ponce Cortez ','1 Month Package for P1,000','1000','2019-02-16 18:56:03','2020-02-16'),
(' Juan Miguel Ponce Cortez ','1 Month Package for P1,000','1000','2019-02-16 18:56:55','2020-02-16'),
(' Juan Miguel Ponce Cortez ','1 Month Package for P1,000','1000','2019-02-16 18:58:54','2020-02-16'),
(' Juan Miguel Ponce Cortez ','1 Month Package for P1,000','1000','2019-02-16 21:02:17','2020-02-16'),
(' Juan Miguel Ponce Cortez ','1 Month Package for P1,000','1000','2019-02-16 21:03:37','2020-02-16'),
(' Juan Miguel Ponce Cortez ','1 Month Package for P1,000','1000','2019-02-16 21:03:50','2020-02-16'),
(' Juan Miguel Ponce Cortez ','1 Month Package for P1,000','1000','2019-02-16 21:04:03','2020-02-16'),
(' Juan Miguel Ponce Cortez ','1 Month Package for P1,000','1000','2019-02-16 21:04:29','2020-02-16'),
(' Juan Miguel Ponce Cortez ','1 Month Package for P1,000','1000','2019-02-16 21:06:38','2020-02-16'),
(' Juan Miguel Ponce Cortez ','1 Month Package for P1,000','1000','2019-02-16 21:06:51','2020-02-16'),
(' Juan Miguel Ponce Cortez ','1 Month Package for P1,000','1000','2019-02-16 21:07:12','2020-02-16'),
(' Juan Miguel Ponce Cortez ','1 Month Package for P1,000','1000','2019-02-16 21:07:15','2020-02-16'),
(' Juan Miguel Ponce Cortez ','1 Month Package for P1,000','1000','2019-02-16 21:07:21','2020-02-16'),
(' Juan Miguel Ponce Cortez ','1 Month Package for P1,000','1000','2019-02-16 21:09:48','2020-02-16'),
(' Juan Miguel Ponce Cortez ','1 Month Package for P1,000','1000','2019-02-16 21:12:46','2020-02-16'),
(' Juan Miguel Ponce Cortez ','1 Month Package for P1,000','1000','2019-02-16 21:14:07','2020-02-16'),
(' Juan Miguel Ponce Cortez ','1 Month Package for P1,000','1000','2019-02-16 21:15:31','2020-02-16'),
(' Juan Miguel Ponce Cortez ','1 Month Package for P1,000','1000','2019-02-16 21:16:57','2020-02-16'),
(' asdasd asdasd asdasd ','1 Month Package for P1,000','1000','2019-02-16 21:17:22','2020-02-16'),
(' Juan Miguelssss aaa Cortez ','1 Month Package for P1,000','1000','2019-02-17 12:54:49','2020-02-17'),
(' dwa w asd ','1 Month Package for P1,000','1000','2019-02-17 12:56:31','2020-02-17'),
(' asd as asd ','1 Month Package for P1,000','1000','2019-02-17 13:33:46','2020-02-17'),
(' v c a ','1 Month Package for P1,000','1000','2019-02-19 20:35:29','2020-02-19'),
(' b f a ','1 Month Package for P1,000','1000','2019-02-19 20:36:02','2020-02-19'),
(' B C A ','1 Month Package for P1,000','1000','2019-02-19 20:38:16','2020-02-19'),
(' e 1 a ','1 Month Package for P1,000','1000','2019-02-20 20:54:00','2020-02-20'),
(' f a awwd ','1 Month Package for P1,000','1000','2019-02-20 21:27:09','2020-02-20');

/*Table structure for table `time_logs` */

DROP TABLE IF EXISTS `time_logs`;

CREATE TABLE `time_logs` (
  `time_id` int(255) NOT NULL AUTO_INCREMENT,
  `member_firstname` varchar(255) DEFAULT NULL,
  `member_middlename` varchar(255) DEFAULT NULL,
  `member_lastname` varchar(255) DEFAULT NULL,
  `time_log` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`time_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `time_logs` */

insert  into `time_logs`(`time_id`,`member_firstname`,`member_middlename`,`member_lastname`,`time_log`) values 
(1,'f','a','awwd','2019-02-20 21:44:13'),
(2,'f','a','awwd','2019-02-20 21:44:14'),
(3,'f','a','awwd','2019-02-20 21:44:42'),
(4,'f','a','awwd','2019-02-20 21:45:00');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
