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
  `acc_firstname` varchar(255) DEFAULT NULL,
  `acc_middlename` varchar(255) DEFAULT NULL,
  `acc_lastname` varchar(255) DEFAULT NULL,
  `acc_username` varchar(255) DEFAULT NULL,
  `acc_password` varchar(255) DEFAULT NULL,
  `acc_accessright` varchar(255) DEFAULT NULL,
  `isDeleted` varchar(255) DEFAULT '0',
  `isBlocked` varchar(255) DEFAULT '0',
  `acc_date` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`acc_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

/*Data for the table `account` */

insert  into `account`(`acc_id`,`acc_firstname`,`acc_middlename`,`acc_lastname`,`acc_username`,`acc_password`,`acc_accessright`,`isDeleted`,`isBlocked`,`acc_date`) values 
(1,'admin','admin','admin','admin','admin','1','0','0','02/10/2019 07:10 PM'),
(9,'a','vb','c','wawa','wewe','2','0','0','02/11/2019 09:53 PM');

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
  `isTimeOut` varchar(255) DEFAULT '0',
  `isDeleted` varchar(255) DEFAULT '0',
  `timestamp_date` timestamp(6) NULL DEFAULT NULL,
  PRIMARY KEY (`cust_daily_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `customer_daily` */

insert  into `customer_daily`(`cust_daily_id`,`cust_firstname`,`cust_middlename`,`cust_lastname`,`cust_contact_no`,`cust_time_in`,`amount`,`isTimeOut`,`isDeleted`,`timestamp_date`) values 
(1,'B','C','A','1','February 11, 2019 9:16 PM  ','200','1','0','2019-02-11 21:16:55.000000'),
(2,'B','A','C','2','February 11, 2019 9:17 PM  ','200','1','0','2019-02-11 21:17:01.000000'),
(3,' x','x','z','123123','February 12, 2019 12:03 AM  ','200','1','0','2019-02-12 00:03:36.000000');

/*Table structure for table `customer_sales` */

DROP TABLE IF EXISTS `customer_sales`;

CREATE TABLE `customer_sales` (
  `cust_sales_id` int(255) NOT NULL AUTO_INCREMENT,
  `cust_id` varchar(255) DEFAULT NULL,
  `time_out` varchar(255) DEFAULT NULL,
  `amount` varchar(255) DEFAULT '200',
  `day` varchar(255) DEFAULT NULL,
  `week` varchar(255) DEFAULT NULL,
  `month` varchar(255) DEFAULT NULL,
  `year` varchar(255) DEFAULT NULL,
  `isDeleted` varchar(255) DEFAULT '0',
  PRIMARY KEY (`cust_sales_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `customer_sales` */

insert  into `customer_sales`(`cust_sales_id`,`cust_id`,`time_out`,`amount`,`day`,`week`,`month`,`year`,`isDeleted`) values 
(1,'1','February 11, 2019 9:19 PM  ','200','11','07','February','2019','0'),
(2,'2','February 11, 2019 9:19 PM  ','200','11','07','February','2019','0'),
(3,'3','February 12, 2019 12:03 AM  ','200','12','07','February','2019','0');

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
  `timestamp_date` timestamp(6) NULL DEFAULT NULL,
  PRIMARY KEY (`member_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

/*Data for the table `member` */

insert  into `member`(`member_id`,`member_code`,`member_firstname`,`member_middlename`,`member_lastname`,`member_birthdate`,`member_address`,`member_gender`,`member_contact`,`member_height`,`member_weight`,`member_targetweight`,`member_medicalhistory`,`member_sub_id`,`member_age`,`membership_registered`,`membership_expired`,`annual_expire`,`day`,`week`,`month`,`year`,`amount`,`isPaid`,`isDeleted`,`isExpired`,`isCancelled`,`timestamp_date`) values 
(6,'65783786','Juan MIguel','','Ponce','1996-08-28','Makati City','Male','23','123','123','123','Pogi','1','22','2019-02-11 21:06:58','2019-03-11','2020-02-11','11','07','February','2019','1000','1','0','0','0','2019-02-11 21:06:58.000000'),
(7,'96061238','asd','B','asdasd','1996-08-28','asd','Male','123','123','123','asd','123','1','22','2019-02-11 21:07:42','2019-03-11','2020-02-11','11','07','February','2019','1000','1','0','0','0','2019-02-11 21:07:42.000000');

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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

/*Data for the table `member_logs` */

insert  into `member_logs`(`member_logs_id`,`member_username`,`member_status`,`date_log`,`isDeleted`) values 
(1,'admin',' CREATED MEMBER Juan Miguel Ponce Cortez ','February 11, 2019 8:38 pm  ','0'),
(2,'admin',' CREATED CUSTOMER Juan Miguel  Ponce','February 11, 2019 8:41 PM  ','0'),
(3,'admin',' CREATED CUSTOMER asd asdasd asdasd','February 11, 2019 8:42 PM  ','0'),
(4,'admin',' CREATED CUSTOMER agag aegaga agag','February 11, 2019 8:43 PM  ','0'),
(5,'admin',' CREATED CUSTOMER a 3 a','February 11, 2019 8:52 PM  ','0'),
(6,'admin',' CREATED MEMBER asd asd a ','February 11, 2019 8:58 pm  ','0'),
(7,'admin',' CREATED MEMBER asd asd asd ','February 11, 2019 9:00 pm  ','0'),
(8,'admin',' CREATED MEMBER asd asdasd asd ','February 11, 2019 9:04 pm  ','0'),
(9,'admin',' CREATED MEMBER Juan MIguel  Ponce ','February 11, 2019 9:06 pm  ','0'),
(10,'admin',' CREATED MEMBER asd B asdasd ','February 11, 2019 9:07 pm  ','0'),
(11,'admin',' CREATED CUSTOMER asasd asda asd','February 11, 2019 9:14 PM  ','0'),
(12,'admin',' CREATED CUSTOMER B C A','February 11, 2019 9:16 PM  ','0'),
(13,'admin',' CREATED CUSTOMER B A C','February 11, 2019 9:17 PM  ','0'),
(14,'',' CREATED ACCOUNT  ','February 11, 2019 9:53:pm  ','0'),
(15,'admin',' LOGGED IN ','February 11, 2019 9:53:pm  ','0'),
(16,'admin',' LOGGED IN ','February 11, 2019 10:29:pm  ','0'),
(17,'admin',' CREATED CUSTOMER  x x z','February 12, 2019 12:03 AM  ','0');

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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

/*Data for the table `member_sales` */

insert  into `member_sales`(`member_sales_id`,`member_username`,`member_status`,`date_log`,`annual_expire`,`isDeleted`) values 
(1,NULL,NULL,'February 11, 2019 8:38 pm  ',NULL,'0'),
(3,NULL,NULL,'February 11, 2019 8:58 pm  ',NULL,'0'),
(4,NULL,NULL,'February 11, 2019 9:00 pm  ',NULL,'0'),
(5,NULL,NULL,'February 11, 2019 9:04 pm  ',NULL,'0'),
(6,NULL,NULL,'February 11, 2019 9:06 pm  ',NULL,'0'),
(7,NULL,NULL,'February 11, 2019 9:07 pm  ',NULL,'0');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
