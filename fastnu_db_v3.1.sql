/*
SQLyog Ultimate v12.5.0 (64 bit)
MySQL - 10.4.28-MariaDB : Database - fastnu
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`fastnu` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `fastnu`;

/*Table structure for table `computerscience` */

DROP TABLE IF EXISTS `computerscience`;

CREATE TABLE `computerscience` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `teacher` varchar(20) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `skills` varchar(50) DEFAULT NULL,
  `confirmed` char(1) DEFAULT NULL,
  `signup_date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `computerscience` */

insert  into `computerscience`(`id`,`teacher`,`email`,`skills`,`confirmed`,`signup_date`) values 
(1,'Dr. Abdul Aziz',NULL,'Programming','Y','2016-01-15'),
(2,'Dr. Zulfiqar','Database','Y','2',NULL),
(3,'Dr. Zulfiqar','Database','Y','2','0000-00-00'),
(4,'Dr. Abdul Aziz','abc@email.com','Programming','Y','2016-01-15');

/*Table structure for table `products` */

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `sku` varchar(50) DEFAULT NULL,
  `tag` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `products` */

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(20) DEFAULT NULL,
  `LastName` varchar(20) DEFAULT NULL,
  `CNIC` varchar(15) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `pass` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `user` */

insert  into `user`(`ID`,`FirstName`,`LastName`,`CNIC`,`email`,`pass`) values 
(1,'Abdul Rahman','Mahmood','42343-53452-4','alphapeeler@gmail.co','1234'),
(2,'Babar','Magsi','52353-5345256-3','babar@fast.com','1111'),
(3,'Saqib','Kamal','42353-5356256-2','saqib@fast.com','1122'),
(4,'Maria','James','22333-2356256-1','maria@fast.com','2211'),
(5,'Zara','Khan','22333-2356256-1','zara@fast.com','');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
