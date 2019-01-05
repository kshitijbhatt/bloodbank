-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2019 at 03:40 PM
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
(15, '2f2b675be22459905e1622a5ed7a5086', 'downtown@snow.heyo', 'A+', 'under the bridge', '2019-01-04 18:49:18', '123457890', 'Online', 'Receiver'),
(16, 'e19d5cd5af0378da05f63f891c7467af', 'dragn@aaya.com', 'A+', 'kshitij dragon', '2019-01-05 07:28:42', '1234567890', 'Online', 'Receiver'),
(17, 'e19d5cd5af0378da05f63f891c7467af', 'using@email.com', 'N/A', 'hospital Name', '2019-01-05 07:29:45', '123456789', 'Delhi', 'Hospital'),
(18, 'e19d5cd5af0378da05f63f891c7467af', 'another@mail.com', 'A+', 'register ', '2019-01-05 07:31:45', '7894561230', 'Online', 'Receiver'),
(19, 'e19d5cd5af0378da05f63f891c7467af', 'abcd@mail.com', 'A+', 'Bogus user', '2019-01-05 08:04:22', '1234567890', 'Online', 'Receiver'),
(20, 'e19d5cd5af0378da05f63f891c7467af', 'internshala@gmail.com', 'A+', 'Internshala Expert', '2019-01-05 13:28:41', '1234567890', 'Online', 'Receiver'),
(21, 'e19d5cd5af0378da05f63f891c7467af', 'big@hospital.com', 'N/A', 'Some Big Hospital', '2019-01-05 13:42:15', '9413331200', 'Delhi', 'Hospital');

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('52cors2kedhf4rh7qq2i7r6lq5ppvbh9', '::1', 1546699192, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534363639393139323b);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bb_users`
--
ALTER TABLE `bb_users`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bb_users`
--
ALTER TABLE `bb_users`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
