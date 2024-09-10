-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2024 at 07:20 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `omnicore`
--

-- --------------------------------------------------------

--
-- Table structure for table `omni_usergroup`
--

CREATE TABLE `omni_usergroup` (
  `mid` bigint(20) UNSIGNED NOT NULL,
  `privateKey` varchar(60) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(120) NOT NULL,
  `password` varchar(255) NOT NULL DEFAULT 'FWM1r0e8H9v1g61jcmzgJZe8DKBsfn45eu5zgPm2bZtjhfTACdK0oelQQAXc',
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `updated` datetime NOT NULL DEFAULT current_timestamp(),
  `role` varchar(15) NOT NULL DEFAULT 'subscriber',
  `status` int(1) NOT NULL DEFAULT 0,
  `emailVerify` int(1) NOT NULL DEFAULT 0,
  `phoneVerify` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `omni_usergroup`
--

INSERT INTO `omni_usergroup` (`mid`, `privateKey`, `username`, `email`, `password`, `created`, `updated`, `role`, `status`, `emailVerify`, `phoneVerify`) VALUES
(9563852919, 'Fl7IGGCdR1NERjF6N02lD2lgvrmvxFb6Yc1sCJgAwglcgYgk9MTtCvu4G2Cy', 'chandan upadhyay', 'chandan@eninrac.com', '$2y$10$Df9Dj1Y92E0NLizNUibjDuuCin9aKCn8lBPY0033t.vw51202XZSi', '2022-12-27 14:58:17', '2022-12-27 14:58:17', 'admin', 1, 1, 1),
(9563852921, 'GdIYUPnbM6BDbtLAz2ZlDLyNfkgh0SikJPHpmaYx6bMpxcbASlBK9FOsNiLx', 'Ravi Shekhar', 'rv@eninrac.com', '$2y$10$9oPB3HJZbYc5.m9zlR5jPObeFiExnaXkNP9VRPUiOdRMQipRSW/3m', '2022-12-27 15:52:13', '2022-12-27 15:52:13', 'admin', 1, 1, 1),
(9563852922, 'm0u95MKHZWRY6pjAa1VJ2oK27DZJx83mllXQ3F4aUdX04D9fqn2TGpyepsLi', 'Nitika Sharma', 'nsharma@eninrac.com', '$2y$10$s07xqFhiUZoZKo7bPM5oBu15vJbgxKTSpesWEZFlsyQaEFijnzvj.', '2023-02-02 16:47:04', '2023-02-02 16:47:04', 'admin', 1, 1, 1),
(9563852923, 'Fl7IGGCdR1NERjF6N02lD2lgvrmvxFb6Yc1sCJgAwglcgYgk9MTtCvu4G2CH', 'Sanjay Kumar', 'sanjay.mittal@eninrac.com', '$2y$10$MD7ch/cRMtspUEICT.DSqO6n5z9fGobW04.1YRTdUb47UgmocHi7W', '2023-08-03 10:58:17', '2023-08-03 10:58:17', 'admin', 1, 1, 1),
(9563852924, 'Fl7IGGCdR1NERjF6N02lD2lgvrmvxFb5yc1sCJgAwglcgYgk9MTtCvu4G2CH', 'Anurag Kumar Dubey', 'akdubey@eninrac.com', '$2y$10$KkN.wxnFYLffbKusmNJHZ.8NEXIYJtMu8CCm3CgKcpsEeNUgciH9e', '2023-08-03 10:58:17', '2023-08-03 10:58:17', 'admin', 1, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `omni_usergroup`
--
ALTER TABLE `omni_usergroup`
  ADD PRIMARY KEY (`mid`),
  ADD UNIQUE KEY `mEmail` (`email`),
  ADD UNIQUE KEY `mUserActivationKey` (`privateKey`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `omni_usergroup`
--
ALTER TABLE `omni_usergroup`
  MODIFY `mid` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9563852927;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
