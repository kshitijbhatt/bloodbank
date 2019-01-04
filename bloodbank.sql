-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2019 at 11:16 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloodbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `bb_users`
--

CREATE TABLE `bb_users` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `user_pass` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `blood_type` varchar(4) NOT NULL,
  `display_name` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_phone` varchar(20) NOT NULL,
  `user_location` varchar(100) DEFAULT NULL,
  `user_type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bb_users`
--

INSERT INTO `bb_users` (`ID`, `user_pass`, `user_email`, `blood_type`, `display_name`, `created_at`, `user_phone`, `user_location`, `user_type`) VALUES
(9, 'e19d5cd5af0378da05f63f891c7467af', 'abcd@efgh.co', 'A+', 'abcd efgh', '2019-01-04 17:43:00', '9413331200', 'Online', 'Receiver'),
(10, 'e19d5cd5af0378da05f63f891c7467af', 'king@hospital.com', 'N/A', 'King hospital', '2019-01-04 18:03:43', '89456123', 'Jaipur', 'Hospital'),
(11, 'eee6d0228727487eb3f8ff6dd0dcc10f', 'kshitijbhatt@example.com', 'O+', 'Kshitij Bhatt', '2019-01-04 18:25:46', '9413331200', 'Online', 'Receiver'),
(12, 'ba9d1bb1a83ce49511b30c55215e0727', 'auroivlle@hospital.com', 'N/A', 'Auroville Hospital', '2019-01-04 18:40:19', '77376566061', 'Chennai', 'Hospital'),
(13, 'ba9d1bb1a83ce49511b30c55215e0727', 'sante@hospital.com', 'N/A', 'Sante', '2019-01-04 18:40:58', '77376566061', 'Chennai', 'Hospital'),
(14, '9dcbcc5d394eae2ee7d42bbed87d2e03', 'yahoo@mail.com', 'A+', 'Another user', '2019-01-04 18:43:38', '9413331200', 'Online', 'Receiver'),
(15, '2f2b675be22459905e1622a5ed7a5086', 'downtown@snow.heyo', 'A+', 'under the bridge', '2019-01-04 18:49:18', '123457890', 'Online', 'Receiver');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bb_users`
--
ALTER TABLE `bb_users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bb_users`
--
ALTER TABLE `bb_users`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
