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
  PRIMARY KEY (`acc_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Data for the table `account` */

insert  into `account`(`acc_id`,`acc_firstname`,`acc_middlename`,`acc_lastname`,`acc_username`,`acc_password`,`acc_accessright`,`isDeleted`,`isBlocked`,`acc_date`) values 
(1,'',NULL,NULL,'admin','admin','1','0','0','02/10/2019 07:10 PM'),
(2,NULL,NULL,NULL,'user','user','2','0','0','02/09/2019 07:10 PM'),
(3,NULL,NULL,NULL,'admin1','admin1','1','0','0','02/07/2019 07:10 PM'),
(4,'Angelo','','Ferrer','ancel','ancel','1','0','0','02/11/2019 06:10 PM'),
(5,'Arela','','qw','123','1234','1','0','0','02/11/2019 07:10 PM');

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
  PRIMARY KEY (`cust_daily_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `customer_daily` */

insert  into `customer_daily`(`cust_daily_id`,`cust_firstname`,`cust_middlename`,`cust_lastname`,`cust_contact_no`,`cust_time_in`,`amount`,`isTimeOut`,`isDeleted`) values 
(1,'b','c','a','21','February 12, 2019 10:16 PM  ','200','1','0');

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `customer_sales` */

insert  into `customer_sales`(`cust_sales_id`,`cust_id`,`time_out`,`amount`,`day`,`week`,`month`,`year`,`isDeleted`) values 
(1,'1','February 12, 2019 10:16 PM  ','200','12','07','February','2019','0');

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
  PRIMARY KEY (`member_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `member` */

insert  into `member`(`member_id`,`member_code`,`member_firstname`,`member_middlename`,`member_lastname`,`member_birthdate`,`member_address`,`member_gender`,`member_contact`,`member_height`,`member_weight`,`member_targetweight`,`member_medicalhistory`,`member_sub_id`,`member_age`,`membership_registered`,`membership_expired`,`annual_expire`,`day`,`week`,`month`,`year`,`amount`,`isPaid`,`isDeleted`,`isExpired`,`isCancelled`) values 
(1,'10081220','JOSEPH','TORINO','CAPOTE','2013-12-14','Mandaluyong City','Male','0987652388','150','200','130lbs','None','4','5','2020-11-14','2021-11-14','2021-11-14','11','07','February','2019','8500','1','0','0','0'),
(2,'26201002','Angelo','1','Ferrer','2012-03-02','HELLO','Male','09876523288','123','123','123','mklm','1','6','2021-05-17','2021-06-17','2022-05-17','11','07','February','2019','1000','1','0','0','0');

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
) ENGINE=InnoDB AUTO_INCREMENT=114 DEFAULT CHARSET=utf8;

/*Data for the table `member_logs` */

insert  into `member_logs`(`member_logs_id`,`member_username`,`member_status`,`date_log`,`isDeleted`) values 
(1,'admin1',' LOGGED IN ','February 10, 2019 10:18:pm  ','0'),
(2,'admin1',' CREATED MEMBER Angelo  Ferrer ','February 10, 2019 10:19 pm  ','0'),
(3,'admin1',' CREATED CUSTOMER Angelo  Ferrer','February 10, 2019 10:21 PM  ','0'),
(4,'admin',' LOGGED IN ','February 10, 2019 10:22:pm  ','0'),
(5,'admin',' LOGGED IN ','February 10, 2019 11:47:pm  ','0'),
(6,'admin',' LOGGED IN ','February 11, 2019 12:13:am  ','0'),
(7,'admin',' LOGGED IN ','March 11, 2019 2:08:am  ','0'),
(8,'admin',' LOGGED IN ','February 11, 2019 2:36:am  ','0'),
(9,'admin',' LOGGED IN ','February 11, 2019 2:36:am  ','0'),
(10,'admin',' CREATED MEMBER Angelo a aaaa ','February 11, 2019 2:36 am  ','0'),
(11,'admin',' LOGGED IN ','February 11, 2019 3:17:am  ','0'),
(12,'admin',' CREATED MEMBER Angeloo Gutirreez Ferrera ','February 11, 2019 7:40 am  ','0'),
(13,'admin',' CREATED MEMBER BABABAB BABABABA BABABABAB ','February 11, 2019 8:03 am  ','0'),
(14,'admin',' CREATED MEMBER ttttttttttttt tttttttttttttt tttttttttttt ','February 11, 2019 8:11 am  ','0'),
(15,'admin',' CREATED MEMBER gggggg ggggg ggg ','February 11, 2019 8:14 am  ','0'),
(16,'admin',' CREATED MEMBER qqq qqq qqq ','February 11, 2019 8:16 am  ','0'),
(17,'admin',' CREATED MEMBER aaaaa vvvvv tttttttttt ','February 11, 2019 8:21 am  ','0'),
(18,'admin',' CREATED MEMBER aaaaa Ponce tttttttttt ','February 11, 2019 8:21 am  ','0'),
(19,'admin',' CREATED MEMBER AZ AZ AZ ','February 11, 2019 8:27 am  ','0'),
(20,'admin',' CREATED MEMBER qwer qwert qwe ','February 11, 2019 8:31 am  ','0'),
(21,'admin',' CREATED MEMBER qwer qwe qwe ','February 11, 2019 8:32 am  ','0'),
(22,'admin',' RENEWED MEMBER WITH CODE 14485411','February 11, 2019 9:13:am  ','0'),
(23,'admin',' CREATED CUSTOMER qwer qwert qwe','February 11, 2019 9:24 AM  ','0'),
(24,'admin',' CREATED CUSTOMER rt rt rt','February 11, 2019 10:16 AM  ','0'),
(25,'admin',' CREATED CUSTOMER sususu su susu','February 11, 2019 11:03 AM  ','0'),
(26,'admin',' CREATED CUSTOMER su susu susu','February 11, 2019 11:04 AM  ','0'),
(27,'admin',' CREATED CUSTOMER zuzuzuz a sususu','February 11, 2019 11:09 AM  ','0'),
(28,'admin',' LOGGED IN ','February 11, 2019 11:58:am  ','0'),
(29,'admin',' CREATED CUSTOMER Juan Miguel O Ponce','February 11, 2019 12:18 PM  ','0'),
(30,'admin',' CREATED CUSTOMER `jin jn iuhb','February 11, 2019 12:18 PM  ','0'),
(31,'admin',' CREATED CUSTOMER `jin jn iuhb','February 11, 2019 12:20 PM  ','0'),
(32,'admin',' CREATED CUSTOMER `jin jn iuhb','February 11, 2019 12:20 PM  ','0'),
(33,'admin',' CREATED CUSTOMER `jin jn iuhb','February 11, 2019 12:21 PM  ','0'),
(34,'admin',' CREATED CUSTOMER `jin jn iuhb','February 11, 2019 12:23 PM  ','0'),
(35,'admin',' CREATED CUSTOMER `jin jn iuhb','February 11, 2019 12:24 PM  ','0'),
(36,'admin',' CREATED CUSTOMER `jin jn iuhb','February 11, 2019 12:24 PM  ','0'),
(37,'admin',' CREATED CUSTOMER `jin jn iuhb','February 11, 2019 12:27 PM  ','0'),
(38,'admin',' CREATED CUSTOMER `jin jn iuhb','February 11, 2019 12:27 PM  ','0'),
(39,'admin',' CREATED CUSTOMER `jin jn iuhb','February 11, 2019 12:28 PM  ','0'),
(40,'admin',' CREATED CUSTOMER `jin jn iuhb','February 11, 2019 12:30 PM  ','0'),
(41,'admin',' CREATED CUSTOMER `jin jn iuhb','February 11, 2019 12:30 PM  ','0'),
(42,'admin',' CREATED CUSTOMER `jin jn iuhb','February 11, 2019 12:31 PM  ','0'),
(43,'admin',' CREATED CUSTOMER `jin jn iuhb','February 11, 2019 12:31 PM  ','0'),
(44,'admin',' CREATED CUSTOMER `jin jn iuhb','February 11, 2019 12:31 PM  ','0'),
(45,'admin',' CREATED CUSTOMER `jin jn iuhb','February 11, 2019 12:32 PM  ','0'),
(46,'admin',' CREATED CUSTOMER `jin jn iuhb','February 11, 2019 12:32 PM  ','0'),
(47,'admin',' CREATED CUSTOMER `jin jn iuhb','February 11, 2019 12:32 PM  ','0'),
(48,'admin',' CREATED CUSTOMER |JuanMiugle Ponce |Cortez','February 11, 2019 12:34 PM  ','0'),
(49,'admin',' CREATED CUSTOMER |JuanMiugle Ponce |Cortez','February 11, 2019 12:35 PM  ','0'),
(50,'admin',' CREATED CUSTOMER ponce pogi miguel','February 11, 2019 12:59 PM  ','0'),
(51,'admin',' CREATED CUSTOMER kjnb kjb asdljn','February 11, 2019 1:04 PM  ','0'),
(52,'admin',' CREATED CUSTOMER kjb kj iuhjb','February 11, 2019 1:05 PM  ','0'),
(53,'admin',' CREATED CUSTOMER oijn oijn asldjkih','February 11, 2019 1:07 PM  ','0'),
(54,'admin',' LOGGED IN ','February 11, 2019 1:35:pm  ','0'),
(55,'admin',' CREATED CUSTOMER fafafafa fa fafafa','February 11, 2019 1:36 PM  ','0'),
(56,'admin',' CREATED CUSTOMER ferrer ferrer Ferrer','February 11, 2019 1:48 PM  ','0'),
(57,'admin',' CREATED CUSTOMER aaaa aaaa aaaaaa','February 11, 2019 1:53 PM  ','0'),
(58,'admin',' CREATED CUSTOMER oop oop oop','February 11, 2019 2:06 PM  ','0'),
(59,'admin',' CREATED CUSTOMER as as as','February 11, 2019 2:10 PM  ','0'),
(60,'admin',' CREATED CUSTOMER oiu oiu oiuyto','February 11, 2019 2:11 PM  ','0'),
(61,'admin',' CREATED CUSTOMER asdfr asdf asdf','February 11, 2019 2:12 PM  ','0'),
(62,'admin',' CREATED CUSTOMER uuii  uuii','February 11, 2019 2:17 PM  ','0'),
(63,'admin',' CREATED CUSTOMER ferr  ferr','February 11, 2019 2:25 PM  ','0'),
(64,'admin',' CREATED CUSTOMER saad sa aad','February 11, 2019 2:45 PM  ','0'),
(65,'admin',' CREATED CUSTOMER lkj  lkjh','February 11, 2019 2:47 PM  ','0'),
(66,'admin',' CREATED CUSTOMER [poiuy  [poiuy','February 11, 2019 2:49 PM  ','0'),
(67,'admin',' CREATED CUSTOMER a a a','February 11, 2019 2:50 PM  ','0'),
(68,'admin',' CREATED CUSTOMER asedf  asdfg','February 11, 2019 2:51 PM  ','0'),
(69,'admin',' CREATED CUSTOMER bb c c aa','February 11, 2019 2:54 PM  ','0'),
(70,'admin',' LOGGED IN ','February 11, 2019 2:58:pm  ','0'),
(71,'admin',' CREATED MEMBER tra tra tra ','February 11, 2019 3:00 pm  ','0'),
(72,'admin',' CREATED MEMBER tra tra tra ','February 11, 2019 3:01 pm  ','0'),
(73,'admin',' CREATED CUSTOMER Angelo a Ferrer','February 11, 2019 3:11 PM  ','0'),
(74,'admin',' CREATED CUSTOMER aq  aq','February 11, 2019 3:18 PM  ','0'),
(75,'admin',' CREATED CUSTOMER qqwqq  qqw','February 11, 2019 3:20 PM  ','0'),
(76,'admin',' CREATED CUSTOMER a a a','February 11, 2019 3:21 PM  ','0'),
(77,'admin',' CREATED CUSTOMER Angelo  Ferrer','February 11, 2019 3:23 PM  ','0'),
(78,'admin',' LOGGED IN ','February 11, 2019 3:49:pm  ','0'),
(79,'',' CREATED ACCOUNT  ','February 11, 2019 3:50:pm  ','0'),
(80,'admin',' UPDATED ACCOUNT admin ','February 11, 2019 3:50:pm  ','0'),
(81,'admin',' CREATED MEMBER zxc  zxc ','February 11, 2019 3:52 pm  ','0'),
(82,'admin',' CREATED MEMBER zx zxc zxc ','February 11, 2019 3:53 pm  ','0'),
(83,'admin',' LOGGED IN ','February 11, 2019 3:55:pm  ','0'),
(84,'admin',' CREATED MEMBER JOSEPH TORINO CAPOTE ','February 11, 2019 4:12 pm  ','0'),
(85,'admin',' CREATED MEMBER Angelo 1 Ferrer ','February 11, 2019 4:16 pm  ','0'),
(86,'admin',' RENEWED MEMBER WITH CODE 10081220','March 12, 2019 4:17:pm  ','0'),
(87,'admin',' CREATED CUSTOMER OWEN OO ARELASQ','March 12, 2019 4:22 PM  ','0'),
(88,'admin',' CREATED CUSTOMER jn mm macanan','March 12, 2019 4:36 PM  ','0'),
(89,'admin',' CREATED CUSTOMER ryan ./. codizal','March 12, 2019 4:46 PM  ','0'),
(90,'admin',' CREATED CUSTOMER Angelo e Ferrer','March 12, 2019 4:50 PM  ','0'),
(91,'admin',' CREATED CUSTOMER jomari t. panguito','March 12, 2019 4:51 PM  ','0'),
(92,'admin',' CREATED CUSTOMER Angelo o. Ferrer','March 12, 2019 5:03 PM  ','0'),
(93,'admin',' CREATED CUSTOMER Angeloq t Ferrera','March 12, 2019 5:13 PM  ','0'),
(94,'admin',' CREATED CUSTOMER Angelo hello Ferrer','March 12, 2019 5:16 PM  ','0'),
(95,'admin',' CREATED CUSTOMER gilbert t digno','March 12, 2019 5:24 PM  ','0'),
(96,'admin',' CREATED CUSTOMER 1 2 fafafa','March 12, 2019 5:26 PM  ','0'),
(97,'admin',' CREATED CUSTOMER ./. ./. Cortez','March 12, 2019 5:29 PM  ','0'),
(98,'admin',' CREATED CUSTOMER OWEN TOL ARELA','March 12, 2019 5:30 PM  ','0'),
(99,'admin',' CREATED CUSTOMER 1 R Jo','March 12, 2019 5:33 PM  ','0'),
(100,'admin',' CREATED CUSTOMER ./. ././ Cortez','March 12, 2019 5:36 PM  ','0'),
(101,'admin',' CREATED CUSTOMER jerric  Faciolan','March 12, 2019 5:37 PM  ','0'),
(102,'admin',' CREATED CUSTOMER chriq mq datuin','March 12, 2019 5:42 PM  ','0'),
(103,'admin',' CREATED CUSTOMER Angelo B Ferrer','March 12, 2019 5:47 PM  ','0'),
(104,'admin',' RENEWED MEMBER WITH CODE 10081220','June 14, 2019 6:05:pm  ','0'),
(105,'admin',' RENEWED MEMBER WITH CODE 26201002','November 14, 2019 6:40:pm  ','0'),
(106,'admin',' RENEWED MEMBER WITH CODE 10081220','November 14, 2020 6:42:pm  ','0'),
(107,'admin',' RENEWED MEMBER WITH CODE 26201002','November 14, 2020 6:42:pm  ','0'),
(108,'admin',' RENEWED MEMBER WITH CODE 26201002','May 17, 2021 6:45:pm  ','0'),
(109,'admin',' CREATED CUSTOMER RYAN i codizal','May 17, 2021 6:49 PM  ','0'),
(110,'',' CREATED ACCOUNT  ','February 11, 2019 7:07:pm  ','0'),
(111,'',' CREATED ACCOUNT  ','February 11, 2019 7:10:pm  ','0'),
(112,'admin',' CREATED CUSTOMER e c a','February 12, 2019 10:15 PM  ','0'),
(113,'admin',' CREATED CUSTOMER b c a','February 12, 2019 10:16 PM  ','0');

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `member_sales` */

insert  into `member_sales`(`member_sales_id`,`member_username`,`member_status`,`date_log`,`annual_expire`,`isDeleted`) values 
(1,NULL,NULL,'February 11, 2019 4:12 pm  ',NULL,'0'),
(2,NULL,NULL,'February 11, 2019 4:16 pm  ',NULL,'0');

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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

/*Data for the table `member_sales_new` */

insert  into `member_sales_new`(`member_sales_new_id`,`member_firstname`,`member_middlename`,`member_lastname`,`amount`,`date_registered`,`annual_expired`,`day`,`week`,`month`,`year`,`member_package`) values 
(5,'oiujn,','ijuon','oiuhn','8500','2019-03-13 18:52:45','2020-03-13','13','11','March','2019','1 Year Package for P8,500'),
(6,'oiujn,','ijuon','oiuhn','1000','2019-02-12','2020-02-12','12','07','February','2019','1 Month Package for P1,000'),
(7,'iuh','uijn','ouij','4500','2019-02-12 19:01:48','2020-02-12','12','07','February','2019','6 Months Package for P4,500'),
(8,'iuh','uijn','ouij','2500','2019-02-12','2020-02-12','12','07','February','2019','3 Months Package for P2,500'),
(9,'Angelo','Gutierrez','Ferrer','2500','2019-02-12 19:28:50','2020-02-12','12','07','February','2019','3 Months Package for P2,500'),
(10,'Juan','','Dela cruz','2500','2019-02-12 20:02:49','2020-02-12','12','07','February','2019','3 Months Package for P2,500'),
(11,'Juan','','Dela cruz','1000','2019-05-12','2020-05-12','12','19','May','2019','1 Month Package for P1,000');

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
(' Juan  Dela cruz ','3 Months Package for P2,500','2500','2019-02-12 20:02:49','2020-02-12');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
