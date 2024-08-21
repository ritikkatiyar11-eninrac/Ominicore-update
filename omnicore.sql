-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2024 at 07:21 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

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
-- Table structure for table `omni_filter`
--

CREATE TABLE `omni_filter` (
  `DB_ID` int(10) UNSIGNED NOT NULL,
  `NAME` varchar(60) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `DES` varchar(255) NOT NULL,
  `SLUG` text NOT NULL,
  `URL_SLUG` text NOT NULL,
  `IMG` text NOT NULL,
  `IS_PARENT` enum('0','1') NOT NULL DEFAULT '0',
  `GROUP_OF` int(11) NOT NULL,
  `CREATE_AT` datetime NOT NULL DEFAULT current_timestamp(),
  `LAST_CHANGES` datetime NOT NULL DEFAULT current_timestamp(),
  `TYPE` varchar(15) NOT NULL,
  `STATUS` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `omni_filter`
--

INSERT INTO `omni_filter` (`DB_ID`, `NAME`, `DES`, `SLUG`, `URL_SLUG`, `IMG`, `IS_PARENT`, `GROUP_OF`, `CREATE_AT`, `LAST_CHANGES`, `TYPE`, `STATUS`) VALUES
(1, 'Central', 'Central', 'central', 'central', 'https://via.placeholder.com/350x150', '1', 0, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(2, 'CERC', 'CERC', 'cerc', 'central/cerc', 'https://via.placeholder.com/350x150', '1', 1, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(3, 'Orders', 'Orders', 'orders', 'central/cerc/orders', 'https://via.placeholder.com/350x150', '0', 2, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(4, 'Petitions', 'Petitions', 'petitions', 'central/cerc/petitions', 'https://via.placeholder.com/350x150', '0', 2, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(5, 'Consultation on Draft Regulations', 'Consultation on Draft Regulations', 'consultation-on-draft-regulations', 'central/cerc/consultation-on-draft-regulations', 'https://via.placeholder.com/350x150', '0', 2, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(6, 'Regulations', 'Regulations', 'regulations', 'central/cerc/regulations', 'https://via.placeholder.com/350x150', '0', 2, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(7, 'Policies', 'Policies', 'policies', 'central/cerc/policies', 'https://via.placeholder.com/350x150', '0', 2, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(8, 'Eninrac Comments on Draft Regulations', 'Eninrac Comments on Draft Regulations', 'eninrac-comments-on-draft-regulations', 'central/cerc/eninrac-comments-on-draft-regulations', 'https://via.placeholder.com/350x150', '0', 2, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(9, 'Public Hearings', 'Public Hearings', 'public-hearings', 'central/cerc/public-hearings', 'https://via.placeholder.com/350x150', '0', 2, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(10, 'Ammendments', 'Ammendments', 'ammendments', 'central/cerc/ammendments', 'https://via.placeholder.com/350x150', '0', 2, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(11, 'MOM', 'MOM', 'mom', 'central/cerc/mom', 'https://via.placeholder.com/350x150', '0', 2, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(12, 'MoP', 'MoP', 'mop', 'central/mop', 'https://via.placeholder.com/350x150', '1', 1, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(13, 'Regulations', 'Regulations', 'regulations', 'central/mop/regulation', 'https://via.placeholder.com/350x150', '0', 12, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(14, 'Policy', 'Policy', 'policy', 'central/mop/policy', 'https://via.placeholder.com/350x150', '0', 12, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(15, 'Announcements', 'Announcements', 'announcements', 'central/mop/announcements', 'https://via.placeholder.com/350x150', '0', 12, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(16, 'MNRE', 'MNRE', 'mnre', 'central/mnre', 'https://via.placeholder.com/350x150', '1', 1, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(17, 'Regulations', 'Regulations', 'regulations', 'central/mnre/regulation', 'https://via.placeholder.com/350x150', '0', 16, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(18, 'Policy', 'Policy', 'policy', 'central/mnre/policy', 'https://via.placeholder.com/350x150', '0', 16, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(19, 'Announcements', 'Announcements', 'announcements', 'central/mnre/announcements', 'https://via.placeholder.com/350x150', '0', 16, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(20, 'MoF', 'MoF', 'mof', 'central/mof', 'https://via.placeholder.com/350x150', '1', 1, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(21, 'Regulations', 'Regulations', 'announcements', 'central/mof/announcements', 'https://via.placeholder.com/350x150', '0', 20, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(22, 'MoC', 'MoC', 'moc', 'central/moc', 'https://via.placeholder.com/350x150', '1', 1, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(23, 'Regulations', 'Regulations', 'announcements', 'central/moc/announcements', 'https://via.placeholder.com/350x150', '0', 22, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(24, 'Apellate Tribunal', 'Apellate Tribunal', 'apellate-tribunal', 'central/apellate-tribunal', 'https://via.placeholder.com/350x150', '1', 1, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(25, 'Landmark Judgements', 'Landmark Judgements', 'landmark-judgements', 'central/apellate-tribunal/landmark-judgements', 'https://via.placeholder.com/350x150', '0', 24, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(26, 'Interim Orders', 'Interim Orders', 'interim-orders', 'central/apellate-tribunal/interim-orders', 'https://via.placeholder.com/350x150', '0', 24, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(27, 'Final Orders', 'Final Orders', 'final-orders', 'central/apellate-tribunal/final-orders', 'https://via.placeholder.com/350x150', '0', 24, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(28, 'Honb\'le Supreme Court', 'Honb\'le Supreme Court', 'honourable-supreme-court', 'central/honourable-supreme-court', 'https://via.placeholder.com/350x150', '1', 1, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(29, 'Landmark Judgements', 'Landmark Judgements', 'landmark-judgements', 'central/honourable-supreme-court/landmark-judgements', 'https://via.placeholder.com/350x150', '0', 28, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(30, 'Interim Orders', 'Interim Orders', 'interim-orders', 'central/honourable-supreme-court/interim-orders', 'https://via.placeholder.com/350x150', '0', 28, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(31, 'Final Orders', 'Final Orders', 'final-orders', 'central/honourable-supreme-court/final-orders', 'https://via.placeholder.com/350x150', '0', 28, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(32, 'Others', 'Others', 'others', 'central/others', 'https://via.placeholder.com/350x150', '0', 1, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(33, 'State', 'State', 'state', 'state', 'https://via.placeholder.com/350x150', '1', 0, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(34, 'Gujarat', 'Gujarat', 'gujarat', 'state/gujarat', 'https://via.placeholder.com/350x150', '1', 33, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(35, 'GERC', 'GERC', 'gerc', 'state/gujarat/gerc', 'https://via.placeholder.com/350x150', '0', 34, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(36, 'Maharashtra', 'Maharashtra', 'maharashtra', 'state/maharashtra', 'https://via.placeholder.com/350x150', '1', 33, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(37, 'MERC', 'MERC', 'merc', 'state/maharashtra/merc', 'https://via.placeholder.com/350x150', '0', 36, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(38, 'Rajasthan', 'Rajasthan', 'rajasthan', 'state/rajasthan', 'https://via.placeholder.com/350x150', '1', 33, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(39, 'RERC', 'RERC', 'rerc', 'state/rajasthan/rerc', 'https://via.placeholder.com/350x150', '0', 38, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(40, 'Punjab', 'Punjab', 'punjab', 'state/punjab', 'https://via.placeholder.com/350x150', '1', 33, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(41, 'PERC', 'PERC', 'perc', 'state/punjab/perc', 'https://via.placeholder.com/350x150', '0', 40, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(42, 'Haryana', 'Haryana', 'haryana', 'state/haryana', 'https://via.placeholder.com/350x150', '1', 33, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(43, 'HERC', 'HERC', 'herc', 'state/haryana/herc', 'https://via.placeholder.com/350x150', '0', 42, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(44, 'Uttarakhand', 'Uttarakhand', 'uttarakhand', 'state/uttarakhand', 'https://via.placeholder.com/350x150', '1', 33, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(45, 'UERC', 'UERC', 'uerc', 'state/uttarakhand/uerc', 'https://via.placeholder.com/350x150', '0', 44, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(46, 'Odisha', 'Odisha', 'odisha', 'state/odisha', 'https://via.placeholder.com/350x150', '1', 33, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(47, 'OERC', 'OERC', 'oerc', 'state/odisha/oerc', 'https://via.placeholder.com/350x150', '0', 46, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(48, 'Bihar', 'Bihar', 'bihar', 'state/bihar', 'https://via.placeholder.com/350x150', '1', 33, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(49, 'BERC', 'BERC', 'berc', 'state/bihar/berc', 'https://via.placeholder.com/350x150', '0', 48, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(50, 'Assam', 'Assam', 'assam', 'state/assam', 'https://via.placeholder.com/350x150', '1', 33, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(51, 'AERC', 'AERC', 'aerc', 'state/assam/aerc', 'https://via.placeholder.com/350x150', '0', 50, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(52, 'Others', 'Others', 'others', 'state/others', 'https://via.placeholder.com/350x150', '0', 33, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(53, 'Generation', 'Generation', 'generation', 'generation', 'https://via.placeholder.com/350x150', '1', 0, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(54, 'Thermal', 'Thermal', 'thermal', 'generation/thermal', 'https://via.placeholder.com/350x150', '0', 53, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(55, 'Solar', 'Solar', 'solar', 'generation/solar', 'https://via.placeholder.com/350x150', '0', 53, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(56, 'Wind', 'Wind', 'wind', 'generation/wind', 'https://via.placeholder.com/350x150', '0', 53, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(57, 'Biomass', 'Biomass', 'biomass', 'generation/biomass', 'https://via.placeholder.com/350x150', '0', 53, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(58, 'Small Hydro Plants', 'Small Hydro Plants', 'small-hydro-plants', 'generation/small-hydro-plants', 'https://via.placeholder.com/350x150', '0', 53, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(59, 'Nuclear', 'Nuclear', 'nuclear', 'generation/nuclear', 'https://via.placeholder.com/350x150', '0', 53, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(60, 'Others', 'Others', 'others', 'generation/others', 'https://via.placeholder.com/350x150', '0', 53, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(61, 'Distribution', 'Distribution', 'distribution', 'distribution', 'https://via.placeholder.com/350x150', '1', 0, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(62, 'Tariff', 'Tariff', 'tariff', 'distribution/tariff', 'https://via.placeholder.com/350x150', '0', 61, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(63, 'C&I Consumers', 'C&I Consumers', 'c-and-i-consumers', 'distribution/c-and-i-consumers', 'https://via.placeholder.com/350x150', '0', 61, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(64, 'Network Augmentation', 'Network Augmentation', 'network-augmentation', 'distribution/network-augmentation', 'https://via.placeholder.com/350x150', '0', 61, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(65, 'Transmission', 'Transmission', 'transmission', 'transmission', 'https://via.placeholder.com/350x150', '1', 0, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(66, 'Connectivity', 'Connectivity', 'connectivity', 'transmission/connectivity', 'https://via.placeholder.com/350x150', '1', 65, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(67, 'STU', 'STU', 'stu', 'transmission/connectivity/stu', 'https://via.placeholder.com/350x150', '0', 66, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(68, 'CTU', 'CTU', 'ctu', 'transmission/connectivity/ctu', 'https://via.placeholder.com/350x150', '0', 66, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(69, 'Charges', 'Charges', 'charges', 'transmission/charges', 'https://via.placeholder.com/350x150', '1', 65, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(70, 'STU', 'STU', 'stu', 'transmission/charges/stu', 'https://via.placeholder.com/350x150', '0', 69, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(71, 'CTU', 'CTU', 'ctu', 'transmission/charges/ctu', 'https://via.placeholder.com/350x150', '0', 69, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(72, 'Projects', 'Projects', 'projects', 'transmission/projects', 'https://via.placeholder.com/350x150', '1', 65, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(73, 'Govt Announcements', 'Govt Announcements', 'govt-announcements', 'transmission/govt-announcements', 'https://via.placeholder.com/350x150', '0', 65, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(74, 'Central', 'Central', 'central', 'transmission/govt-announcements/central', 'https://via.placeholder.com/350x150', '0', 73, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(75, 'State', 'State', 'state', 'transmission/govt-announcements/state', 'https://via.placeholder.com/350x150', '0', 73, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(76, 'Bid Updates', 'Bid Updates', 'bid-updates', 'bid-updates', 'https://via.placeholder.com/350x150', '1', 0, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(77, 'Bid Invites', 'Bid Invites', 'bid-invites', 'bid-updates/bid-invites', 'https://via.placeholder.com/350x150', '1', 76, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(78, 'SECI', 'SECI', 'seci', 'bid-updates/bid-invites/seci', 'https://via.placeholder.com/350x150', '0', 77, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(79, 'PSU', 'PSU', 'psu', 'bid-updates/bid-invites/psu', 'https://via.placeholder.com/350x150', '0', 77, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(80, 'State Govt', 'State Govt', 'state-govt', 'bid-updates/bid-invites/state-govt', 'https://via.placeholder.com/350x150', '0', 77, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(81, 'Others', 'Others', 'others', 'bid-updates/bid-invites/others', 'https://via.placeholder.com/350x150', '0', 77, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(82, 'Bid Results', 'Bid Results', 'bid-results', 'bid-updates/bid-results', 'https://via.placeholder.com/350x150', '0', 76, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(83, 'Others', 'Others', 'others', 'bid-updates/others', 'https://via.placeholder.com/350x150', '0', 76, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(84, 'Infographics', 'Infographics', 'infographics', 'infographics', 'https://via.placeholder.com/350x150', '1', 0, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(85, 'Central', 'Central', 'central', 'infographics/central', 'https://via.placeholder.com/350x150', '0', 84, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(86, 'State', 'State', 'state', 'infographics/state', 'https://via.placeholder.com/350x150', '0', 84, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(87, 'Generation', 'Generation', 'generation', 'infographics/generation', 'https://via.placeholder.com/350x150', '0', 84, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(88, 'Distribution', 'Distribution', 'distribution', 'infographics/distribution', 'https://via.placeholder.com/350x150', '0', 84, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(89, 'Transmission', 'Transmission', 'transmission', 'infographics/transmission', 'https://via.placeholder.com/350x150', '0', 84, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(90, 'Bid Updates', 'Bid Updates', 'bid-updates', 'infographics/bid-updates', 'https://via.placeholder.com/350x150', '0', 84, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(91, 'OpenAccess', 'OpenAccess', 'open-access', 'infographics/open-access', 'https://via.placeholder.com/350x150', '0', 84, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(92, 'New Energies', 'New Energies', 'new-energies', 'infographics/new-energies', 'https://via.placeholder.com/350x150', '0', 84, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(93, 'Misc', 'Misc', 'misc', 'infographics/misc', 'https://via.placeholder.com/350x150', '0', 84, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(94, 'New Energies', 'New Energies', 'new-energies', 'new-energies', 'https://via.placeholder.com/350x150', '1', 0, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(95, 'BESS', 'BESS', 'bess', 'new-energies/bess', 'https://via.placeholder.com/350x150', '0', 94, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(96, 'Hydrogen', 'Hydrogen', 'hydrogen', 'new-energies/hydrogen', 'https://via.placeholder.com/350x150', '0', 94, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(97, 'PSHP', 'PSHP', 'pshp', 'new-energies/pshp', 'https://via.placeholder.com/350x150', '0', 94, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(98, 'Solar Rooftop', 'Solar Rooftop', 'solar-rooftop', 'solar-rooftop', 'https://via.placeholder.com/350x150', '1', 0, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(99, 'Regulations', 'Regulations', 'regulations', 'solar-rooftop/regulations', 'https://via.placeholder.com/350x150', '0', 98, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(100, 'Policies', 'Policies', 'policies', 'solar-rooftop/policies', 'https://via.placeholder.com/350x150', '0', 98, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(101, 'Feed in Tariffs', 'Feed in Tariffs', 'feed-in-tariffs', 'solar-rooftop/feed-in-tariffs', 'https://via.placeholder.com/350x150', '0', 98, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(102, 'Open Access', 'Open Access', 'open-access', 'open-access', 'https://via.placeholder.com/350x150', '1', 0, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(103, 'Solar', 'Solar', 'solar', 'open-access/solar', 'https://via.placeholder.com/350x150', '1', 102, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(104, 'Charges', 'Charges', 'charges', 'open-access/solar/charges', 'https://via.placeholder.com/350x150', '0', 103, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(105, 'Duty', 'Duty', 'duty', 'open-access/solar/duty', 'https://via.placeholder.com/350x150', '0', 103, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(106, 'Waivers', 'Waivers', 'waivers', 'open-access/solar/waivers', 'https://via.placeholder.com/350x150', '0', 103, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(107, 'Banking', 'Banking', 'banking', 'open-access/solar/banking', 'https://via.placeholder.com/350x150', '0', 103, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(108, 'Wind', 'Wind', 'wind', 'open-access/wind', 'https://via.placeholder.com/350x150', '1', 102, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(109, 'Charges', 'Charges', 'charges', 'open-access/wind/charges', 'https://via.placeholder.com/350x150', '0', 109, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(110, 'Duty', 'Duty', 'duty', 'open-access/wind/duty', 'https://via.placeholder.com/350x150', '0', 109, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(111, 'Waivers', 'Waivers', 'waivers', 'open-access/wind/waivers', 'https://via.placeholder.com/350x150', '0', 109, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(112, 'Banking', 'Banking', 'banking', 'open-access/wind/banking', 'https://via.placeholder.com/350x150', '0', 109, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(113, 'Hybrid', 'Hybrid', 'hybrid', 'open-access/hybrid', 'https://via.placeholder.com/350x150', '1', 102, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(114, 'Charges', 'Charges', 'charges', 'open-access/hybrid/charges', 'https://via.placeholder.com/350x150', '0', 114, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(115, 'Duty', 'Duty', 'duty', 'open-access/hybrid/duty', 'https://via.placeholder.com/350x150', '0', 114, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(116, 'Waivers', 'Waivers', 'waivers', 'open-access/hybrid/waivers', 'https://via.placeholder.com/350x150', '0', 114, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1'),
(117, 'Banking', 'Banking', 'banking', 'open-access/hybrid/banking', 'https://via.placeholder.com/350x150', '0', 114, '2024-08-06 18:14:46', '2024-08-06 18:14:46', 'category', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `omni_filter`
--
ALTER TABLE `omni_filter`
  ADD PRIMARY KEY (`DB_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `omni_filter`
--
ALTER TABLE `omni_filter`
  MODIFY `DB_ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
