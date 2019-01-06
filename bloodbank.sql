-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2019 at 10:37 AM
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
-- Table structure for table `bb_hospital_meta`
--

CREATE TABLE `bb_hospital_meta` (
  `ID` bigint(20) NOT NULL,
  `hospital_id` bigint(20) NOT NULL,
  `meta_key` varchar(255) NOT NULL,
  `meta_value` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bb_hospital_meta`
--

INSERT INTO `bb_hospital_meta` (`ID`, `hospital_id`, `meta_key`, `meta_value`) VALUES
(6, 10, 'A+', '45');

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
('52cors2kedhf4rh7qq2i7r6lq5ppvbh9', '::1', 1546699192, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534363639393139323b),
('vbmqr2qaemudcu7q693g7d943feofaqa', '::1', 1546755894, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534363735353839343b),
('mujmbbvcsio3ti120ucsfu3mqkt1lqro', '::1', 1546756467, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534363735363436373b),
('4lqk3mbj6bbn03d6f61h3d6hp8bqdrde', '::1', 1546756824, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534363735363832343b),
('qc4bqdcjuj14sir0e92taqf0b289sjik', '::1', 1546757376, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534363735373337363b757365725f69647c733a323a223130223b757365725f656d61696c7c733a31373a226b696e6740686f73706974616c2e636f6d223b626c6f6f645f747970657c733a333a224e2f41223b646973706c61795f6e616d657c733a31333a224b696e6720686f73706974616c223b757365725f70686f6e657c733a383a223839343536313233223b757365725f6c6f636174696f6e7c733a31333a224b696e6720686f73706974616c223b757365725f747970657c733a383a22486f73706974616c223b),
('653g3d5i6189n1us924mq9dnrf1kh8jf', '::1', 1546757816, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534363735373831363b757365725f69647c733a323a223130223b757365725f656d61696c7c733a31373a226b696e6740686f73706974616c2e636f6d223b626c6f6f645f747970657c733a333a224e2f41223b646973706c61795f6e616d657c733a31333a224b696e6720686f73706974616c223b757365725f70686f6e657c733a383a223839343536313233223b757365725f6c6f636174696f6e7c733a31333a224b696e6720686f73706974616c223b757365725f747970657c733a383a22486f73706974616c223b),
('tfjjj7dea4r9la1pfme152hvuosimbse', '::1', 1546758130, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534363735383133303b757365725f69647c733a323a223130223b757365725f656d61696c7c733a31373a226b696e6740686f73706974616c2e636f6d223b626c6f6f645f747970657c733a333a224e2f41223b646973706c61795f6e616d657c733a31333a224b696e6720686f73706974616c223b757365725f70686f6e657c733a383a223839343536313233223b757365725f6c6f636174696f6e7c733a31333a224b696e6720686f73706974616c223b757365725f747970657c733a383a22486f73706974616c223b),
('2dsjpr8klh8eqfga0pegaq6uav69c3q1', '::1', 1546758673, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534363735383637333b757365725f69647c733a323a223130223b757365725f656d61696c7c733a31373a226b696e6740686f73706974616c2e636f6d223b626c6f6f645f747970657c733a333a224e2f41223b646973706c61795f6e616d657c733a31333a224b696e6720686f73706974616c223b757365725f70686f6e657c733a383a223839343536313233223b757365725f6c6f636174696f6e7c733a31333a224b696e6720686f73706974616c223b757365725f747970657c733a383a22486f73706974616c223b),
('lv1ggt8jmqc8l5jlpkboj1pom9lkal7k', '::1', 1546759397, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534363735393339373b757365725f69647c733a323a223130223b757365725f656d61696c7c733a31373a226b696e6740686f73706974616c2e636f6d223b626c6f6f645f747970657c733a333a224e2f41223b646973706c61795f6e616d657c733a31333a224b696e6720686f73706974616c223b757365725f70686f6e657c733a383a223839343536313233223b757365725f6c6f636174696f6e7c733a31333a224b696e6720686f73706974616c223b757365725f747970657c733a383a22486f73706974616c223b),
('n05ula1lqm5hnk48rjueid3jlli4sqhj', '::1', 1546759933, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534363735393933333b757365725f69647c733a323a223130223b757365725f656d61696c7c733a31373a226b696e6740686f73706974616c2e636f6d223b626c6f6f645f747970657c733a333a224e2f41223b646973706c61795f6e616d657c733a31333a224b696e6720686f73706974616c223b757365725f70686f6e657c733a383a223839343536313233223b757365725f6c6f636174696f6e7c733a31333a224b696e6720686f73706974616c223b757365725f747970657c733a383a22486f73706974616c223b),
('bp5a01uqnsish851sahunv6916fuprt0', '::1', 1546760262, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534363736303236323b757365725f69647c733a323a223130223b757365725f656d61696c7c733a31373a226b696e6740686f73706974616c2e636f6d223b626c6f6f645f747970657c733a333a224e2f41223b646973706c61795f6e616d657c733a31333a224b696e6720686f73706974616c223b757365725f70686f6e657c733a383a223839343536313233223b757365725f6c6f636174696f6e7c733a31333a224b696e6720686f73706974616c223b757365725f747970657c733a383a22486f73706974616c223b),
('4blr83ggpadmgb4rps6l78nfpu1dj1i0', '::1', 1546760793, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534363736303739333b757365725f69647c733a323a223130223b757365725f656d61696c7c733a31373a226b696e6740686f73706974616c2e636f6d223b626c6f6f645f747970657c733a333a224e2f41223b646973706c61795f6e616d657c733a31333a224b696e6720686f73706974616c223b757365725f70686f6e657c733a383a223839343536313233223b757365725f6c6f636174696f6e7c733a31333a224b696e6720686f73706974616c223b757365725f747970657c733a383a22486f73706974616c223b),
('fdt7aasap5dida6p6u4u79cdk2dppmpu', '::1', 1546761154, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534363736313135343b757365725f69647c733a323a223130223b757365725f656d61696c7c733a31373a226b696e6740686f73706974616c2e636f6d223b626c6f6f645f747970657c733a333a224e2f41223b646973706c61795f6e616d657c733a31333a224b696e6720686f73706974616c223b757365725f70686f6e657c733a383a223839343536313233223b757365725f6c6f636174696f6e7c733a31333a224b696e6720686f73706974616c223b757365725f747970657c733a383a22486f73706974616c223b),
('b2gi00h9idh7qa30ljdusfm4co0n7ekv', '::1', 1546762324, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534363736323332343b757365725f69647c733a323a223130223b757365725f656d61696c7c733a31373a226b696e6740686f73706974616c2e636f6d223b626c6f6f645f747970657c733a333a224e2f41223b646973706c61795f6e616d657c733a31333a224b696e6720686f73706974616c223b757365725f70686f6e657c733a383a223839343536313233223b757365725f6c6f636174696f6e7c733a31333a224b696e6720686f73706974616c223b757365725f747970657c733a383a22486f73706974616c223b),
('urg1ekfrmsc2g57l18pe2cij7543iev8', '::1', 1546763166, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534363736333136363b757365725f69647c733a323a223130223b757365725f656d61696c7c733a31373a226b696e6740686f73706974616c2e636f6d223b626c6f6f645f747970657c733a333a224e2f41223b646973706c61795f6e616d657c733a31333a224b696e6720686f73706974616c223b757365725f70686f6e657c733a383a223839343536313233223b757365725f6c6f636174696f6e7c733a31333a224b696e6720686f73706974616c223b757365725f747970657c733a383a22486f73706974616c223b),
('thqh5jpsr8saj12h1s8c8td9sgt32hjv', '::1', 1546766209, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534363736363230393b757365725f69647c733a323a223130223b757365725f656d61696c7c733a31373a226b696e6740686f73706974616c2e636f6d223b626c6f6f645f747970657c733a333a224e2f41223b646973706c61795f6e616d657c733a31333a224b696e6720686f73706974616c223b757365725f70686f6e657c733a383a223839343536313233223b757365725f6c6f636174696f6e7c733a31333a224b696e6720686f73706974616c223b757365725f747970657c733a383a22486f73706974616c223b),
('fkk30n7qnr110cv2qfmjn9ai8off1c73', '::1', 1546766515, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534363736363531353b757365725f69647c733a323a223130223b757365725f656d61696c7c733a31373a226b696e6740686f73706974616c2e636f6d223b626c6f6f645f747970657c733a333a224e2f41223b646973706c61795f6e616d657c733a31333a224b696e6720686f73706974616c223b757365725f70686f6e657c733a383a223839343536313233223b757365725f6c6f636174696f6e7c733a31333a224b696e6720686f73706974616c223b757365725f747970657c733a383a22486f73706974616c223b),
('e9q2sqkv1sn1mipn7ar5bt8fk7aa87ud', '::1', 1546766867, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534363736363836373b757365725f69647c733a323a223130223b757365725f656d61696c7c733a31373a226b696e6740686f73706974616c2e636f6d223b626c6f6f645f747970657c733a333a224e2f41223b646973706c61795f6e616d657c733a31333a224b696e6720686f73706974616c223b757365725f70686f6e657c733a383a223839343536313233223b757365725f6c6f636174696f6e7c733a31333a224b696e6720686f73706974616c223b757365725f747970657c733a383a22486f73706974616c223b),
('ad8g1obs8lh0s77n2db2juc77udlhene', '::1', 1546767219, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534363736373231393b757365725f69647c733a323a223130223b757365725f656d61696c7c733a31373a226b696e6740686f73706974616c2e636f6d223b626c6f6f645f747970657c733a333a224e2f41223b646973706c61795f6e616d657c733a31333a224b696e6720686f73706974616c223b757365725f70686f6e657c733a383a223839343536313233223b757365725f6c6f636174696f6e7c733a31333a224b696e6720686f73706974616c223b757365725f747970657c733a383a22486f73706974616c223b),
('7od220ca6alr47lbriepcrkodchnupfj', '::1', 1546767358, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534363736373231393b757365725f69647c733a323a223130223b757365725f656d61696c7c733a31373a226b696e6740686f73706974616c2e636f6d223b626c6f6f645f747970657c733a333a224e2f41223b646973706c61795f6e616d657c733a31333a224b696e6720686f73706974616c223b757365725f70686f6e657c733a383a223839343536313233223b757365725f6c6f636174696f6e7c733a31333a224b696e6720686f73706974616c223b757365725f747970657c733a383a22486f73706974616c223b);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bb_hospital_meta`
--
ALTER TABLE `bb_hospital_meta`
  ADD PRIMARY KEY (`ID`);

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
-- AUTO_INCREMENT for table `bb_hospital_meta`
--
ALTER TABLE `bb_hospital_meta`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `bb_users`
--
ALTER TABLE `bb_users`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
