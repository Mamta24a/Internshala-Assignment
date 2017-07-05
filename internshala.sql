-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2017 at 08:02 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `internshala`
--

-- --------------------------------------------------------

--
-- Table structure for table `app_recieved`
--

CREATE TABLE IF NOT EXISTS `app_recieved` (
`id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `org_name` varchar(60) NOT NULL,
  `emp_email` varchar(60) NOT NULL,
  `profile` varchar(60) NOT NULL,
  `ans1` varchar(2000) NOT NULL,
  `ans2` varchar(255) NOT NULL,
  `ans3` varchar(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(60) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `emp_user`
--

CREATE TABLE IF NOT EXISTS `emp_user` (
`user_id` int(11) NOT NULL,
  `f_name` varchar(60) NOT NULL,
  `l_name` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `org_name` varchar(60) NOT NULL,
  `ph_num` varchar(10) NOT NULL,
  `password` varchar(60) NOT NULL,
  `temp_pass` varchar(225) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp_user`
--

INSERT INTO `emp_user` (`user_id`, `f_name`, `l_name`, `email`, `org_name`, `ph_num`, `password`, `temp_pass`) VALUES
(5, 'Mamta', 'Kumari', 'mamta24a@gmail.com', 'Internshala', '8962719272', '$2y$10$6BeCKK43RG7xS79BfETVNeWMr11Ua48JRoOFmH8UepyFJZYbXEqYO', '111111'),
(6, 'employer', 'employer', 'employer@gmail.com', 'Internshala', '8962719272', '$2y$10$gxYLhi8FvjcqmEjs.hqt..twiw8Wv5J3CMnMf5OGNkZK9nEbtTPmO', '11111');

-- --------------------------------------------------------

--
-- Table structure for table `new_post`
--

CREATE TABLE IF NOT EXISTS `new_post` (
`post_id` int(11) NOT NULL,
  `emp_email` varchar(60) NOT NULL,
  `org_name` varchar(60) CHARACTER SET latin1 NOT NULL,
  `website` varchar(60) CHARACTER SET latin1 NOT NULL,
  `about_company` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `work_profile` varchar(60) CHARACTER SET latin1 NOT NULL,
  `primary_profile` varchar(60) CHARACTER SET latin1 NOT NULL,
  `location` varchar(60) CHARACTER SET latin1 NOT NULL,
  `part_time` varchar(60) CHARACTER SET latin1 NOT NULL,
  `vacancies` varchar(60) CHARACTER SET latin1 NOT NULL,
  `start_date` date NOT NULL,
  `apply_by` date NOT NULL,
  `posted_on` date NOT NULL,
  `duration` varchar(60) CHARACTER SET latin1 NOT NULL,
  `about_internship` varchar(1000) CHARACTER SET latin1 NOT NULL,
  `stipend` varchar(60) CHARACTER SET latin1 NOT NULL,
  `perks` varchar(255) CHARACTER SET latin1 NOT NULL,
  `skills` varchar(255) CHARACTER SET latin1 NOT NULL,
  `who_can` varchar(1000) NOT NULL,
  `ques1` varchar(255) CHARACTER SET latin1 NOT NULL,
  `ques2` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=100 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `new_post`
--

INSERT INTO `new_post` (`post_id`, `emp_email`, `org_name`, `website`, `about_company`, `work_profile`, `primary_profile`, `location`, `part_time`, `vacancies`, `start_date`, `apply_by`, `posted_on`, `duration`, `about_internship`, `stipend`, `perks`, `skills`, `who_can`, `ques1`, `ques2`) VALUES
(78, 'mamta24a@gmail.com', 'Fitnano Technologies', 'http://www.fitnano.com/', 'Fitnano is an IOT startup engaged in design and development of smart wearable for children, women and elderly safety. A first of its kind IOT company in India to develop in house products for the safety of elderly, children, women and assets. Our aim is to develop peaceful and calm society with the help of technology.\r\nProducts developed at fitnano are enabled with GPS/WiFi/GSM/BLE and much more.', 'Business Development (Sales)', 'Regular', 'Delhi', 'Part time Allowed', '2', '2017-06-04', '2017-06-30', '2017-06-04', '6 Months', 'The selected intern(s) will work on following during the internship:\r\n1. Creating demand for the product \r\n2. Finding potential customers (B2B) (Using google search, shortlist, send ppt to them etc)\r\n3. Creating content for social media marketing campaigns\r\n4. Blogging', 'Unpaid', 'Certificate,Letter of recommendation,Free snacks & beverages,', 'Adobe Photoshop, MS-PowerPoint and MS-Excel', 'Only those candidates can apply who:\r\n1. are available for full time (in-office) internship.\r\n2. can start the internship between 3rd June 2017 and 3rd July 2017.\r\n3. are available for duration of 6 months (preferred, not mandatory).\r\n4. are pursuing any degree but have relevant skills and interest.\r\n5. are currently in any year of study or are recent graduates.', '', ''),
(95, 'mamta24a@gmail.com', 'Hubilo Softech Pvt Ltd', 'http://www.hubilo.com/', 'Hubilo is one of the top 10 rising startups of Gujarat and has built an exceptional tech product which is acknowledged by our esteemed clients across the country such as Government of Gujarat, Vibrant Gujarat, TiE (Ahmedabad, Mumbai, Chennai, Delhi, Bangalore), ispirt, IAMAI, Yourstory, August Fest, Government of Andhra Pradesh.\r\n\r\nOperating in the event technology space, Hubilo is a one stop solution for an event organizers online management needs for every event. It works as an all-in-one event platform that makes events dynamically interactive and empowers the event organizers to create, promote, manage and analyze a number of events effortlessly.', 'Web Development', 'Regular', 'Ahmedabad', 'Part time Allowed', '1', '2017-06-04', '2017-06-30', '2017-06-04', '2 Months', 'The selected intern(s) will work on following during the internship:\r\n1. Develop and maintain a static website - write clean , well-designed code\r\n2. Ensure foolproof performance of the deliverables\r\n3. Coordinate with co-developers and other related departments\r\n4. Send regular updates about project status\r\n5. Work on static websites, dynamic websites, responsive layouts', 'Performance based', 'Certificate,Letter of recommendation,Free snacks & beverages,', 'JavaScript, AngularJS and ReactJS', 'Only those candidates can apply who:\r\n1. are available for full time (in-office) internship.\r\n2. can start the internship between 3rd June 2017 and 3rd July 2017.\r\n3. are available for duration of 2 months (preferred, not mandatory).\r\n4. are pursuing any degree but have relevant skills and interest.\r\n5. are currently in any year of study or are recent graduates.', '', ''),
(96, 'mamta24a@gmail.com', 'Laugh Out Loud Ventures', 'http://lolventures.in/', 'Laugh Out Loud Ventures writes jokes for people. We create humorous content and properties for a wide variety of clients across sectors.', ' Human Resources (HR)', 'Work from home', 'Mumbai', 'Part time Allowed', '5', '2017-06-04', '2017-06-30', '2017-06-04', '1 Month', 'Our HR Associate internship is available in a range of cities - and our HR Associates work on a wide range of projects: from recruiting new, talented, fun people, to engaging old, talented, fun people, to exposure to corporate HR with our corporate partners.\r\n', 'Negotiable', 'Certificate,Letter of recommendation,Free snacks & beverages,', 'Spoken English', 'Only those candidates can apply who:\r\n1. can preferably start the internship between 4th June 2017 and 4th July 2017.\r\n2. are available for duration of 1 month (preferred, not mandatory).\r\n3. are from Mumbai and neighboring cities.\r\n4. are pursuing any degree but have relevant skills and interest.\r\n5. are currently in any year of study or are recent graduates.', '', ''),
(97, 'minnie24a@gmail.com', 'Mind Mines Innovations Pvt Ltd', 'http://http//www.mminnovate.com', 'We are a startup in the digital marketing and software as well as mobile app development services. We are a part of INR 14 crore group with operations in Gurgaon, Raipur, US.', 'Mobile App Development', 'Regular', 'Gurgaon', 'Part time Allowed', '2', '2017-06-15', '2017-06-14', '2017-06-28', '3 Months', 'The selected intern(s) will work on following during the internship:\r\n1. Software development, architecting and coding\r\n2. Mobile app development in cross platform\r\n3. Proposal formation', 'Unpaid', 'Certificate,Letter of recommendation,Free snacks & beverages,', 'Android', 'Only those candidates can apply who:\r\n1. are available for full time (in-office) internship.\r\n2. can start the internship between 3rd June 2017 and 3rd July 2017.\r\n3. are available for duration of 3 months (preferred, not mandatory).\r\n4. are from Gurgaon and neighboring cities.\r\n5. are pursuing any degree but have relevant skills and interest.\r\n6. are currently in any year of study or are recent graduates.', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `stu_user`
--

CREATE TABLE IF NOT EXISTS `stu_user` (
`user_id` int(11) NOT NULL,
  `f_name` varchar(60) NOT NULL,
  `l_name` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(255) NOT NULL,
  `temp_pass` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stu_user`
--

INSERT INTO `stu_user` (`user_id`, `f_name`, `l_name`, `email`, `password`, `temp_pass`) VALUES
(1, 'Mamta', 'Kumari', 'mamta24a@gmail.com', '$2y$10$V0QcIx6O4L4a64I15.OMoe78SsGYyiMVP.pj3Wn4yaaxUZVRtUK6e', '111111'),
(2, 'Minnie', 'kumari', 'minnie24a@gmail.com', '$2y$10$VXRx60275rHUHD66B0K/Q.uSYPg8MpN5ggYt4jwgYWI0vASrFO.LG', '11111'),
(3, 'student', 'student', 'student@gmail.com', '$2y$10$WUIyAygBg/EmLZBUfpsG1edVH/akxJSpRFoR9vkBPBhCmA5Ks6acO', '12345'),
(4, 'shashi', 'prabha', 'shashi@gmail.com', '$2y$10$7Wq8GB4FiO1bq6ODv0r5bOT6DiDJMfzBRpBzlJZPv.KadT6Yqo/BW', '11111');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `app_recieved`
--
ALTER TABLE `app_recieved`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emp_user`
--
ALTER TABLE `emp_user`
 ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `new_post`
--
ALTER TABLE `new_post`
 ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `stu_user`
--
ALTER TABLE `stu_user`
 ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `app_recieved`
--
ALTER TABLE `app_recieved`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `emp_user`
--
ALTER TABLE `emp_user`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `new_post`
--
ALTER TABLE `new_post`
MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=100;
--
-- AUTO_INCREMENT for table `stu_user`
--
ALTER TABLE `stu_user`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
