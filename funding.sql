-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 06, 2018 at 01:26 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `math`
--

-- --------------------------------------------------------

--
-- Table structure for table `funding`
--

DROP TABLE IF EXISTS `funding`;
CREATE TABLE IF NOT EXISTS `funding` (
  `id` int(7) NOT NULL,
  `student_id` int(10) NOT NULL,
  `ta_amount` decimal(19,4) NOT NULL,
  `ta_semester` char(7) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `ta_year` char(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `classes` char(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `stipend` decimal(19,4) NOT NULL,
  `tuition_amount` decimal(19,4) NOT NULL,
  `tuition_semester` char(7) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `tuition_year` char(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `research_amount` decimal(19,4) DEFAULT NULL,
  `research_semester` char(7) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `research_year` char(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `preli_fmonth` char(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `preli_fyear` char(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `preli_fstatus` char(7) NOT NULL,
  `preli_smonth` char(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `preli_syear` char(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `preli_sstatus` char(7) NOT NULL,
  `applied_fmonth` char(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `applied_fyear` char(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `applied_fstatus` char(7) NOT NULL,
  `applied_smonth` char(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `applied_syear` char(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `applied_sstatus` char(7) NOT NULL,
  `failed_exam` char(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `funding`
--

INSERT INTO `funding` (`id`, `student_id`, `ta_amount`, `ta_semester`, `ta_year`, `classes`, `stipend`, `tuition_amount`, `tuition_semester`, `tuition_year`, `research_amount`, `research_semester`, `research_year`, `preli_fmonth`, `preli_fyear`, `preli_fstatus`, `preli_smonth`, `preli_syear`, `preli_sstatus`, `applied_fmonth`, `applied_fyear`, `applied_fstatus`, `applied_smonth`, `applied_syear`, `applied_sstatus`, `failed_exam`) VALUES
(0, 123, '100.0000', 'Spring', '2003', 'computer', '200.0000', '300.0000', 'Spring', '2005', '400.0000', 'Spring', '2005', 'January', '2006', 'Pass', 'January', '2007', 'Fail', 'January', '2009', 'Pass', 'March', '2010', 'Fail', 'Graduated'),
(0, 2324, '300.0000', 'Fall', '2006', 'math', '500.0000', '3000.0000', 'Fall', '2005', '1000.0000', 'Fall', '2006', 'January', '2003', 'Fail', 'March', '2003', 'Pass', 'March', '2005', 'Pass', 'May', '2006', 'Fail', 'Left'),
(0, 567, '3000.0000', 'Spring', '2007', 'communication', '7000.0000', '10000.0000', 'Fall', '2009', '7000.0000', 'Fall', '2010', 'January', '2005', 'Pass', 'April', '2010', 'Pass', 'May', '2011', 'Fail', 'July', '2013', 'Fail', 'Graduated');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
