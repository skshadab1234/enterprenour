-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2020 at 05:02 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ede`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(60) NOT NULL,
  `type` int(1) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `contact_info` varchar(100) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `created_on` date NOT NULL,
  `strength` varchar(500) NOT NULL,
  `strength2` varchar(255) NOT NULL,
  `strength3` varchar(255) NOT NULL,
  `strength4` varchar(155) NOT NULL,
  `strength5` varchar(255) NOT NULL,
  `strength6` varchar(255) NOT NULL,
  `weakness` varchar(500) NOT NULL,
  `weakness2` varchar(255) NOT NULL,
  `weakness3` varchar(255) NOT NULL,
  `weakness4` varchar(255) NOT NULL,
  `weakness5` varchar(255) NOT NULL,
  `weakness6` varchar(255) NOT NULL,
  `opportunity` varchar(500) NOT NULL,
  `opportunity2` varchar(255) NOT NULL,
  `opportunity3` varchar(255) NOT NULL,
  `opportunity4` varchar(255) NOT NULL,
  `opportunity5` varchar(255) NOT NULL,
  `opportunity6` varchar(255) NOT NULL,
  `threads` varchar(500) NOT NULL,
  `threads2` varchar(100) NOT NULL,
  `threads3` varchar(255) NOT NULL,
  `threads4` varchar(50) NOT NULL,
  `threads5` varchar(255) NOT NULL,
  `threads6` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `type`, `firstname`, `lastname`, `contact_info`, `photo`, `created_on`, `strength`, `strength2`, `strength3`, `strength4`, `strength5`, `strength6`, `weakness`, `weakness2`, `weakness3`, `weakness4`, `weakness5`, `weakness6`, `opportunity`, `opportunity2`, `opportunity3`, `opportunity4`, `opportunity5`, `opportunity6`, `threads`, `threads2`, `threads3`, `threads4`, `threads5`, `threads6`) VALUES
(4, 'ks615044@gmail.com', '$2y$10$U8O3CFAmIqNYJgHQY8jbSOr0o1LkNEEa27QRJoBwA6pYfphumY/VK', 1, 'Khan', 'Shadab', '09165452575', 'favicon.jpg', '2020-01-05', 'Leadership. ', 'Communication Skill.', 'Flexibility and Adaptability.', 'Learning agility: Quick learner.', 'Decision making skills.', 'Creating Ideas: Creativity.', 'Disorganized', 'Self-Critical/Sensitive.', 'My emotiond', 'Ask Questions Frequently', 'I have Trouble Saying ', 'Blind Trust Anxious', 'Job Opportunities', 'Higher  Studies', 'Social Work', 'Positive Environment', '  Assistant professor', 'Software Making ', 'Stage Fear', 'Result display', 'Risks', 'Personal Hea;th', 'Presentation Fear', 'None'),
(5, 'suleman@gmail.com', '$2y$10$fvjH5v6LwOMPe4MJ8nqQgOjyw0G2wmB1xPajNux7keR3G4h0U05Q.', 1, 'Suleman ', 'khan', '1234567988', '', '2020-01-05', 'Leadership. ', 'Communication Skills.', 'Flexibility and Adaptability.', 'Adaptability.', 'Decision making skills.', 'Creating Ideas: Creativity.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, 'haiderkhan1@gmail.com', '$2y$10$fDjr3DR7GevHZ/Hn59AOnOlYpYIu5Ar4WfJNruo1af6b5DK8hKsM2', 1, 'Haider', 'Khan', '7021918970', 'adidas-grey-print-men.jpeg', '2020-01-05', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(7, 'tafarak@gmail.com', '$2y$10$PCEKa.4stA2Sjxp9YVOSLOmoEcs1ioFkqdPVM5H2cAXnnkvjnehr.', 1, 'tafarak', 'a', '', '', '2020-01-05', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
