-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 02, 2024 at 06:00 PM
-- Server version: 8.0.36-0ubuntu0.22.04.1
-- PHP Version: 8.1.2-1ubuntu2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `email`, `password`) VALUES
(1, 'user@gmail.com', 'user123');

-- --------------------------------------------------------

--
-- Table structure for table `new_project`
--

CREATE TABLE `new_project` (
  `id` int NOT NULL,
  `project_name` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `tech_involved` text NOT NULL,
  `duration` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `new_project`
--

INSERT INTO `new_project` (`id`, `project_name`, `description`, `tech_involved`, `duration`) VALUES
(1, 'PayLeo', 'A Fintech app', 'laravel', '2 month'),
(2, 'Event-Planner', 'An Event Planner app', 'javascript', '3 month'),
(3, 'Event-Planner', 'An Event Planner app', 'laravel', '3 month'),
(4, 'Event-Planner', 'An Event Planner app', 'php', '3 month'),
(5, 'Event-Planner', 'An Event Planner app', 'mysql', '3 month'),
(7, 'Portfolio builder', 'Bulid portfolio', 'c#', '4 month'),
(8, 'Bakery Orders', 'A bakery orders app', 'laravel', '1.5 month'),
(9, 'Face app', 'Can manipulte images', 'mysql', '1 month'),
(10, 'esdew', 'wewe', 'laravel,php', 'sw2');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `project_id` int NOT NULL,
  `project_name` varchar(50) NOT NULL,
  `staff_name` varchar(50) NOT NULL,
  `designation` varchar(30) NOT NULL,
  `task` varchar(70) NOT NULL,
  `comments` text NOT NULL,
  `due_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`project_id`, `project_name`, `staff_name`, `designation`, `task`, `comments`, `due_date`) VALUES
(1, 'PayLeo-fintech', 'Nimya', 'senior_developer', 'A fintech application', 'need to add crud operations. Add functions work using ajax', '2024-04-10');

-- --------------------------------------------------------

--
-- Table structure for table `staff_details`
--

CREATE TABLE `staff_details` (
  `staff_id` int NOT NULL,
  `staff_name` varchar(35) NOT NULL,
  `mail_id` varchar(30) NOT NULL,
  `designation` varchar(30) NOT NULL,
  `staff_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `staff_details`
--

INSERT INTO `staff_details` (`staff_id`, `staff_name`, `mail_id`, `designation`, `staff_image`) VALUES
(1, 'Anaks Madhav', 'anaks@gmail.com ', 'junior_developer', 'image 2.jpeg'),
(16, 'Amal Raj', 'amal@gmail.com', 'team_lead', 'images4.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `new_project`
--
ALTER TABLE `new_project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `staff_details`
--
ALTER TABLE `staff_details`
  ADD PRIMARY KEY (`staff_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `new_project`
--
ALTER TABLE `new_project`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `project_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `staff_details`
--
ALTER TABLE `staff_details`
  MODIFY `staff_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
