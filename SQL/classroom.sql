-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 31, 2020 at 09:19 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smkkp_sis`
--

-- --------------------------------------------------------

--
-- Table structure for table `classroom`
--

DROP TABLE IF EXISTS `classroom`;
CREATE TABLE IF NOT EXISTS `classroom` (
  `class_id` int(11) NOT NULL AUTO_INCREMENT,
  `class_name` varchar(255) DEFAULT NULL,
  `class_type` enum('Kelas','Dewan','Makmal Komputer','Makmal Biologi','Makmal Kimia','Makmal Fizik','Kelas Muzik','Lain-Lain') DEFAULT NULL,
  `class_status` enum('Aktif','Tidak Aktif','Selenggara') DEFAULT NULL,
  `school_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`class_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `classroom`
--

INSERT INTO `classroom` (`class_id`, `class_name`, `class_type`, `class_status`, `school_id`) VALUES
(1, '5A1', 'Kelas', 'Tidak Aktif', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
