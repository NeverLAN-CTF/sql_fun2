-- Database: sql_fun2
-- Table structure for table `users`
-- NeverLAN CTF <info@neverlanctf.com>
-- Authors : Zane Durkin, Quintin Slaqowski

-- Create user for web
CREATE USER 'sql_fun2'@'localhost' IDENTIFIED BY '<password_web>';
GRANT SELECT ON sql_fun2.* To 'sql_fun2'@'localhost' WITH GRANT OPTION;
CREATE USER 'sql_fun2'@'%' IDENTIFIED BY '<password_web>';

-- Create sql_fun2 database
CREATE DATABASE `sql_fun2`;
USE `sql_fun2`;

-- Create passwd table
CREATE TABLE `passwd` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(6) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Add info to passwd
LOCK TABLES `passwd` WRITE;
INSERT INTO `passwd` VALUES (1,1,'KEY: d3JvbmcgdXNlcg=='),(2,5,'KEY: I3N1cGVyc3Fs=='),(3,2,'KEY: bGthZmpsa05PVFJFQUxzZGxmYWtqc2RmYQ=='),(4,3,'KEY: Tk9UIFJFQUwgYnV0IHlvdSBoYXZlIGhlYXJkIG9mIG1l'),(5,4,'KEY: Tk9UIFJFQUwgYnV0IGtlbiBpcw==');
UNLOCK TABLES;

-- Create users table
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `Username` varchar(255) DEFAULT NULL,
  `Fname` varchar(30) NOT NULL,
  `Lname` varchar(30) NOT NULL,
  `Email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Add info to users
LOCK TABLES `users` WRITE;
INSERT INTO `users` VALUES (1,'John','John','Hancock','WhyDoYouWantMy@email.com'),(2,'Undertaker','Mark','Willman','WWE@example.com'),(3,'Captin','Jack','sparrow','pirates@carribean.com'),(4,'NEO','Zane','Durkin','info@neverlanctf.com'),(5,'DisUser','Tom','Miller','Miller@example.com');
UNLOCK TABLES;
