-- Database: sql_fun1
-- Table structure for table `users`
-- NeverLAN CTF <info@neverlanctf.com>
-- Authors : Zane Durkin, Quintin Slaqowski

-- Create user for web
CREATE USER 'sql_fun1'@'localhost' IDENTIFIED BY '<password_web>';
GRANT SELECT ON sql_fun1.* To 'sql_fun1'@'localhost' WITH GRANT OPTION;
CREATE USER 'sql_fun1'@'%' IDENTIFIED BY '<password_web>';
GRANT SELECT ON sql_fun1.* To 'sql_fun1'@'%' WITH GRANT OPTION;


-- Add password for root user
/*--ALTER USER 'root'@'localhost' IDENTIFIED BY '<password_root>';*/

-- Create sql_fun1 database
CREATE DATABASE `sql_fun1`;
USE `sql_fun1`;

-- Create Table
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `Username` varchar(255) DEFAULT NULL,
  `Fname` varchar(255) DEFAULT NULL,
  `Lname` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

LOCK TABLES `users` WRITE;
INSERT INTO `users` VALUES (1,'Jhon','Jhon','Hancock','WhyDoYouWantMy@email.com','KEY: PintoBeans'),(2,'Undertaker','Mark','Willman','WWE@example.com','KEY: I<3Pandas'),(3,'Captin','Jack','sparrow','pirates@carribean.com','KEY: BlackPearl'),(4,'Slag','quentin','slag','info@neverlanctf.com','KEY: OnlyOneKeyIsCorrect');
UNLOCK TABLES;

