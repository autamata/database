-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2015 at 11:28 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `math`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `id` int(10) unsigned NOT NULL,
  `fname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `lname` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` char(27) COLLATE utf8_unicode_ci NOT NULL,
  `degree` char(3) COLLATE utf8_unicode_ci NOT NULL,
  `funding` char(30) COLLATE utf8_unicode_ci NOT NULL,
  `matriculation_semester` char(7) COLLATE utf8_unicode_ci NOT NULL,
  `matriculation_year` char(5) COLLATE utf8_unicode_ci NOT NULL,
  `graduation_semester` char(7) COLLATE utf8_unicode_ci DEFAULT NULL,
  `graduation_year` char(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `removed_semester` char(7) COLLATE utf8_unicode_ci DEFAULT NULL,
  `removed_year` char(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reason` text COLLATE utf8_unicode_ci,
  `appeal` char(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `advisor` varchar(43) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `student_id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `fname`, `lname`, `phone`, `degree`, `funding`, `matriculation_semester`, `matriculation_year`, `graduation_semester`, `graduation_year`, `removed_semester`, `removed_year`, `reason`, `appeal`, `advisor`) VALUES
(1, 'Jan', 'Q', '3', 'PHD', 'Funded', 'Spring', '2012', '', '', 'Spring', '2015', 'g', 'Accept', 'J'),
(2, 'A', 'G', '7', 'MS', 'Partially funded', 'Spring', '2013', '', '', '', '', '', '', 'Jan'),
(3, 'G', 'G', '77777777777', 'PHD', 'Funded', 'Fall', '2015', '', '', '', '', '', '', 'Aka'),
(4, 'g', 'g', '77', 'PHD', 'Funded', 'Fall', '2015', '', '', '', '', '', '', 'j'),
(5, 'g', 'g', '3333', 'PHD', 'Partially funded', 'Spring', '2014', '', '2015', 'Spring', '', '', '', 'a'),
(6, 'r', 'r', '333', 'PHD', 'Funded', 'Spring', '2013', '', '', '', '2015', '', '', 'g'),
(7, 'r', 'r', '333', 'MS', 'Funded', 'Spring', '2015', '', '', '', '', 'c', '', 'g'),
(9, 'r', 'r', '333', 'PHD', 'Funded', 'Spring', '2013', '', '', '', '', '', 'Accept', 'g'),
(10, 'y', 'y', '7777', 'PHD', 'Funded', 'Spring', '2012', 'Spring', '', '', '', '', '', 'j'),
(11, 'l', 'l', '999', 'PHD', 'Funded', 'Spring', '2011', 'Spring', '2015', 'Spring', '2015', 'nnnnn', 'Accept', 'ok'),
(234, 'jane', 'smith', '3032222222', 'PHD', 'Funded', 'Spring', '2015', 'Fall', '2015', 'Fall', '2016', 'teaching ', 'Accept', 'JOHN'),
(12344, 'jo', 'no', 'k9999', 'PHD', 'Funded', 'Spring', '2012', 'Fall', '2014', 'Fall', '2015', 'jhhjhjh', 'Accept', 'jhjkh'),
(1234567, 'Jane', 'Qiao', '1234567890', 'PHD', 'Funded', 'Spring', '2013', '', '', '', '', '', '', 'Jan'),
(12341777, 'Cathy', 'News', '3312345670', 'MS', 'Partially funded', 'spring', '2016', 'spring', '2015', 'spring', '2015', 'dismissed', 'Reject', 'Jenny Yang'),
(12345677, 'Ann', 'Carthy', '3237654747', 'MS', 'Funded', 'spring', '2010', 'spring', '2012', 'spring', '2014', 'new hire', 'Reject', 'Jon Lee'),
(102340001, 'Hele', 'Nant', '3073213737', 'MS', 'Funded', 'spring', '2007', 'spring', '2011', 'spring', '2013', 'transferred', 'Accept', 'Cathy Cook'),
(102341002, 'Kiki', 'Smith', '3033703133', 'MS', 'Partially', 'Spring', '2011', 'Fall', '2015', 'Spring', '2012', 'teaching assistant', 'Reject', 'John Lo'),
(102341010, 'Jean', 'Cook', '7203231027', 'PHD', 'Funded', 'spring', '2010', 'fall', '2012', 'spring', '2013', 'new TA', 'Reject', 'Helen Clark'),
(102341111, 'Jean', 'Ivon', '3032341007', 'MS', 'Funded', 'fall', '2010', 'spring', '2011', 'spring', '2014', 'research fellow', 'Accept', 'John Han'),
(102352277, 'Jena', 'White', '3035671023', 'MS', 'Partially funded', 'fall', '2013', 'spring', '2015', 'fall', '2015', 'dismissed', 'Accept', 'Anna Jackson'),
(1727374757, 'Tammy ', 'Lau', '3033575757', 'PHD', 'Funded', 'Spring', '2007', 'Spring', '2012', 'Spring', '2015', 'fall in love', 'Accept', 'Jennifer Hisenber');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
