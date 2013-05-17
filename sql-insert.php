<?php require_once("config.php"); 
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename='customized_lastcall_SQL.sql'");
ob_start();
?>
-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 03, 2012 at 09:25 PM
-- Server version: 5.5.24
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `<?php echo DB_NAME; ?>`
--

-- --------------------------------------------------------

--
-- Table structure for table `facts`
--

DROP TABLE IF EXISTS `facts`;
CREATE TABLE IF NOT EXISTS `facts` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `fact` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `facts`
--

INSERT INTO `facts` (`id`, `fact`) VALUES
(1, 'People who drink in moderation tend to be healthier and live longer than those who either abstain or abuse alcohol. Moderation means less than 0.01% of blood / breath alcohol concentration. '),
(2, 'Moderate consumption of alcohol does not appear to contribute to weight gain. '),
(3, 'High protein foods help slow the absorption of alcohol into the body. They include cheese, peanut butter, peanuts or any kind of red meat.'),
(4, 'Designated driver and similar programs have contributed to a decrease in drunk driving fatalities of about one-fourth over a period of 10 years. '),
(5, 'It takes about 3 hours to eliminate the alcohol content of two drinks, depending on your weight. Nothing can speed up this process, not even coffee or a cold shower.  '),
(6, 'A 12-ounce bottle of beer has the same amount of alcohol as a standard shot of 80-proof liquor or 5-ounce of wine.  '),
(7, 'It is estimated that 24,560 lives have been saved by minimum drinking age laws since 1975.  '),
(8, 'high risk drinking for women is consuming 4+ drinks in one day '),
(9, 'high risk drinking for men is consuming 5+ drinks in one day '),
(10, 'a driver with a BAC of .05% is 3 times more likely to get in a fatal car crash than a driver who has not been drinking '),
(11, 'the average beer has 150 calories  '),
(12, 'a driver with a BAC of .10% is 12 times more likely to get in a fatal car crash than a driver who has not been drinking '),
(13, 'a driver with a BAC of .15% is 80 times more likely to get in a fatal car crash than a driver who has not been drinking ');

-- --------------------------------------------------------

--
-- Table structure for table `taxi`
--

DROP TABLE IF EXISTS `taxi`;
CREATE TABLE IF NOT EXISTS `taxi` (
  `taxi_id` int(11) NOT NULL AUTO_INCREMENT,
  `taxi_name` varchar(255) DEFAULT NULL,
  `taxi_description` varchar(255) DEFAULT NULL,
  `taxi_address` varchar(255) DEFAULT NULL,
  `taxi_rating` decimal(2,1) DEFAULT NULL,
  PRIMARY KEY (`taxi_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `taxi`
--

INSERT INTO `taxi` (`taxi_id`, `taxi_name`, `taxi_description`, `taxi_address`, `taxi_rating`) VALUES
(1, 'United Taxi Cab', '(706) 549-0808', '1121 Dr Martin Luther King Pkwy, Athens, GA 30601', 5.0),
(2, 'Golden Taxi', '(706) 543-5646', '184 Elbert St, Athens, GA 30601', 5.0),
(3, 'Your Cab Inc', '(706) 546-5844', '714 Oglethorpe Ave, Athens, GA 30606', 5.0),
(4, 'Five Stars Taxi Cab', '(706) 549-2224', '1737 Lexington Rd, Athens, GA 30605', 5.0),
(5, 'Big Dawg Taxi', '(706) 850-6445', '386 Oak St, Athens, GA 30601', 5.0);

-- --------------------------------------------------------

--
-- Stand-in structure for view `usage_analytics`
--
DROP VIEW IF EXISTS `usage_analytics`;
CREATE TABLE IF NOT EXISTS `usage_analytics` (
`cell` varchar(60)
,`fname` varchar(25)
,`lname` varchar(25)
,`# of times used` bigint(21)
);
-- --------------------------------------------------------

--
-- Table structure for table `waiting`
--

DROP TABLE IF EXISTS `waiting`;
CREATE TABLE IF NOT EXISTS `waiting` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `fname` varchar(25) DEFAULT NULL,
  `lname` varchar(25) DEFAULT NULL,
  `compass` varchar(5) DEFAULT NULL,
  `submit_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `pickuplocation` varchar(255) DEFAULT NULL,
  `pickedup` int(11) DEFAULT NULL,
  `destination` varchar(50) DEFAULT NULL,
  `cell` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=189 ;

--
-- Dumping data for table `waiting`
--

INSERT INTO `waiting` (`id`, `fname`, `lname`, `compass`, `submit_date`, `pickuplocation`, `pickedup`, `destination`, `cell`) VALUES
(184, 'Dhruv', 'Bhavsar', '5Poin', '2012-11-27 21:12:16', 'downtown', 0, '221 fourth', '6789387133'),
(185, 'Dhruv', 'Bhavsar', '5Poin', '2012-11-27 21:12:16', 'downtown', 0, '221 fourth', '6789387133'),
(186, 'James', 'Kim', '5Poin', '2012-11-27 21:12:16', 'downtown', 0, '221 fourth', '7775553333'),
(187, 'John', 'Doe', '5Poin', '2012-11-27 21:12:16', 'downtown', 0, '221 fourth', '7775553210'),
(188, 'John', 'Doe', '5Poin', '2012-11-27 21:12:16', 'downtown', 0, '221 fourth', '7775553210');

-- --------------------------------------------------------

--
-- Stand-in structure for view `waiting_downtown`
--
DROP VIEW IF EXISTS `waiting_downtown`;
CREATE TABLE IF NOT EXISTS `waiting_downtown` (
`id` mediumint(9)
,`fname` varchar(25)
,`lname` varchar(25)
,`compass` varchar(5)
,`submit_date` timestamp
,`pickuplocation` varchar(255)
,`pickedup` int(11)
,`destination` varchar(50)
,`cell` varchar(60)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `waiting_offcampus`
--
DROP VIEW IF EXISTS `waiting_offcampus`;
CREATE TABLE IF NOT EXISTS `waiting_offcampus` (
`id` mediumint(9)
,`fname` varchar(25)
,`lname` varchar(25)
,`compass` varchar(5)
,`submit_date` timestamp
,`pickuplocation` varchar(255)
,`pickedup` int(11)
,`destination` varchar(50)
,`cell` varchar(60)
);
-- --------------------------------------------------------

--
-- Structure for view `usage_analytics`
--
DROP TABLE IF EXISTS `usage_analytics`;

CREATE ALGORITHM=UNDEFINED DEFINER=`<?php echo CPANEL_USERNAME; ?>`@`localhost` SQL SECURITY DEFINER VIEW `usage_analytics` AS select `waiting`.`cell` AS `cell`,`waiting`.`fname` AS `fname`,`waiting`.`lname` AS `lname`,count(0) AS `# of times used` from `waiting` group by `waiting`.`cell`;

-- --------------------------------------------------------

--
-- Structure for view `waiting_downtown`
--
DROP TABLE IF EXISTS `waiting_downtown`;

CREATE ALGORITHM=UNDEFINED DEFINER=`<?php echo CPANEL_USERNAME; ?>`@`localhost` SQL SECURITY DEFINER VIEW `waiting_downtown` AS select `waiting`.`id` AS `id`,`waiting`.`fname` AS `fname`,`waiting`.`lname` AS `lname`,`waiting`.`compass` AS `compass`,`waiting`.`submit_date` AS `submit_date`,`waiting`.`pickuplocation` AS `pickuplocation`,`waiting`.`pickedup` AS `pickedup`,`waiting`.`destination` AS `destination`,`waiting`.`cell` AS `cell` from `waiting` where ((`waiting`.`pickedup` = 0) and (`waiting`.`pickuplocation` = 'downtown'));

-- --------------------------------------------------------

--
-- Structure for view `waiting_offcampus`
--
DROP TABLE IF EXISTS `waiting_offcampus`;

CREATE ALGORITHM=UNDEFINED DEFINER=`<?php echo CPANEL_USERNAME; ?>`@`localhost` SQL SECURITY DEFINER VIEW `waiting_offcampus` AS select `waiting`.`id` AS `id`,`waiting`.`fname` AS `fname`,`waiting`.`lname` AS `lname`,`waiting`.`compass` AS `compass`,`waiting`.`submit_date` AS `submit_date`,`waiting`.`pickuplocation` AS `pickuplocation`,`waiting`.`pickedup` AS `pickedup`,`waiting`.`destination` AS `destination`,`waiting`.`cell` AS `cell` from `waiting` where ((`waiting`.`pickedup` = 0) and (`waiting`.`pickuplocation` <> 'downtown'));

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
<?php 
$text_output = ob_get_clean();
echo $text_output;
?>