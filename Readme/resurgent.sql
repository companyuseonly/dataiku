-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2025 at 04:47 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resurgent`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners_rmm`
--

CREATE TABLE `banners_rmm` (
  `ID` int(11) NOT NULL,
  `Name` varchar(300) NOT NULL,
  `SubTitle` varchar(500) NOT NULL,
  `Link` varchar(500) NOT NULL,
  `Link_Text` varchar(500) NOT NULL,
  `Detail_Image_URL` varchar(500) DEFAULT NULL,
  `Display_Order` int(11) NOT NULL,
  `Status` varchar(50) NOT NULL,
  `IsDelete` varchar(1) DEFAULT NULL,
  `Created_By` int(11) NOT NULL,
  `Created_On` datetime NOT NULL,
  `Modified_By` int(11) NOT NULL,
  `Modified_On` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `banners_rmm`
--

INSERT INTO `banners_rmm` (`ID`, `Name`, `SubTitle`, `Link`, `Link_Text`, `Detail_Image_URL`, `Display_Order`, `Status`, `IsDelete`, `Created_By`, `Created_On`, `Modified_By`, `Modified_On`) VALUES
(1, 'Enterprise Application - ERP', 'Oracle complete cloud suite of SaaS applications brings consistent processes and a single source of truth across important business functions-from', 'Solutions/ERP/', 'Explore Now', 'assets/images/background/25644130_7076235.jpg', 1, 'Active', NULL, 1, '2025-08-08 17:06:42', 1, '2025-08-08 17:06:42'),
(2, 'Digital Transformation', 'Helping enterprises navigate the world of digital disruption in business models, products, services and experiences with ease.', 'Solutions/Digital-Transformation/', 'Learn More', 'assets/images/background/2150010125.jpg', 2, 'Active', NULL, 1, '2025-08-08 17:06:42', 1, '2025-08-08 17:06:42'),
(3, 'Technology Delivery', 'Industry Best Practices Delivery, Existing Process and System Rationalization, Solution Governance, Adherence to Approach.', 'Solutions/Technology-Delivery/', 'Get Started', 'assets/images/background/6864937_23324.jpg', 3, 'Active', NULL, 1, '2025-08-08 17:06:42', 1, '2025-08-08 17:06:42');

-- --------------------------------------------------------

--
-- Table structure for table `clients_rmm`
--

CREATE TABLE `clients_rmm` (
  `ID` int(11) NOT NULL,
  `Client_Image_URL` varchar(255) NOT NULL,
  `Group_ID` int(11) NOT NULL DEFAULT 1,
  `Display_Order` int(11) DEFAULT 0,
  `Is_Active` tinyint(1) DEFAULT 1,
  `Created_By` varchar(100) DEFAULT NULL,
  `Created_On` datetime DEFAULT current_timestamp(),
  `Modified_By` varchar(100) DEFAULT NULL,
  `Modified_On` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clients_rmm`
--

INSERT INTO `clients_rmm` (`ID`, `Client_Image_URL`, `Group_ID`, `Display_Order`, `Is_Active`, `Created_By`, `Created_On`, `Modified_By`, `Modified_On`) VALUES
(0, 'assets/images/Clients/1.png', 1, 1, 1, 'system', '2025-08-09 14:08:36', NULL, '2025-08-09 14:08:36'),
(0, 'assets/images/Clients/2.png', 1, 2, 1, 'system', '2025-08-09 14:08:36', NULL, '2025-08-09 14:08:36'),
(0, 'assets/images/Clients/3.png', 1, 3, 1, 'system', '2025-08-09 14:08:36', NULL, '2025-08-09 14:08:36'),
(0, 'assets/images/Clients/4.png', 1, 4, 1, 'system', '2025-08-09 14:08:36', NULL, '2025-08-09 14:08:36'),
(0, 'assets/images/Clients/5.png', 1, 5, 1, 'system', '2025-08-09 14:08:36', NULL, '2025-08-09 14:08:36'),
(0, 'assets/images/Clients/6.png', 1, 6, 1, 'system', '2025-08-09 14:08:36', NULL, '2025-08-09 14:08:36'),
(0, 'assets/images/Clients/7.png', 1, 7, 1, 'system', '2025-08-09 14:08:36', NULL, '2025-08-09 14:08:36'),
(0, 'assets/images/Clients/8.png', 1, 8, 1, 'system', '2025-08-09 14:08:36', NULL, '2025-08-09 14:08:36'),
(0, 'assets/images/Clients/9.png', 1, 9, 1, 'system', '2025-08-09 14:08:36', NULL, '2025-08-09 14:08:36'),
(0, 'assets/images/Clients/10.png', 1, 10, 1, 'system', '2025-08-09 14:08:36', NULL, '2025-08-09 14:08:36'),
(0, 'assets/images/Clients/11.png', 1, 11, 1, 'system', '2025-08-09 14:08:36', NULL, '2025-08-09 14:08:36'),
(0, 'assets/images/Clients/12.png', 1, 12, 1, 'system', '2025-08-09 14:08:36', NULL, '2025-08-09 14:08:36'),
(0, 'assets/images/Clients/13.png', 1, 13, 1, 'system', '2025-08-09 14:08:36', NULL, '2025-08-09 14:08:36'),
(0, 'assets/images/Clients/14.png', 1, 14, 1, 'system', '2025-08-09 14:08:36', NULL, '2025-08-09 14:08:36'),
(0, 'assets/images/Clients/15.png', 1, 15, 1, 'system', '2025-08-09 14:08:36', NULL, '2025-08-09 14:08:36'),
(0, 'assets/images/Clients/16.png', 1, 16, 1, 'system', '2025-08-09 14:08:36', NULL, '2025-08-09 14:08:36'),
(0, 'assets/images/Clients/17.png', 1, 17, 1, 'system', '2025-08-09 14:08:36', NULL, '2025-08-09 14:08:36'),
(0, 'assets/images/Clients/18.png', 1, 18, 1, 'system', '2025-08-09 14:08:36', NULL, '2025-08-09 14:08:36'),
(0, 'assets/images/Clients/19.png', 1, 19, 1, 'system', '2025-08-09 14:08:36', NULL, '2025-08-09 14:08:36'),
(0, 'assets/images/Clients/20.png', 1, 20, 1, 'system', '2025-08-09 14:08:36', NULL, '2025-08-09 14:08:36'),
(0, 'assets/images/Clients/21.png', 1, 21, 1, 'system', '2025-08-09 14:08:36', NULL, '2025-08-09 14:08:36'),
(0, 'assets/images/Clients/22.png', 1, 22, 1, 'system', '2025-08-09 14:08:36', NULL, '2025-08-09 14:08:36'),
(0, 'assets/images/Clients/23.png', 1, 23, 1, 'system', '2025-08-09 14:08:36', NULL, '2025-08-09 14:08:36'),
(0, 'assets/images/Clients/24.png', 1, 24, 1, 'system', '2025-08-09 14:08:36', NULL, '2025-08-09 14:08:36'),
(0, 'assets/images/Clients/25.png', 1, 25, 1, 'system', '2025-08-09 14:08:36', NULL, '2025-08-09 14:08:36'),
(0, 'assets/images/Clients/26.png', 1, 26, 1, 'system', '2025-08-09 14:08:36', NULL, '2025-08-09 14:08:36'),
(0, 'assets/images/Clients/27.png', 1, 27, 1, 'system', '2025-08-09 14:08:36', NULL, '2025-08-09 14:08:36'),
(0, 'assets/images/Clients/28.png', 1, 28, 1, 'system', '2025-08-09 14:08:36', NULL, '2025-08-09 14:08:36'),
(0, 'assets/images/Clients/29.png', 1, 29, 1, 'system', '2025-08-09 14:08:36', NULL, '2025-08-09 14:08:36'),
(0, 'assets/images/Clients/30.png', 1, 30, 1, 'system', '2025-08-09 14:08:36', NULL, '2025-08-09 14:08:36'),
(0, 'assets/images/Clients/31.png', 1, 31, 1, 'system', '2025-08-09 14:08:36', NULL, '2025-08-09 14:08:36'),
(0, 'assets/images/Clients/32.png', 1, 32, 1, 'system', '2025-08-09 14:08:36', NULL, '2025-08-09 14:08:36'),
(0, 'assets/images/Clients/33.png', 1, 33, 1, 'system', '2025-08-09 14:08:36', NULL, '2025-08-09 14:08:36'),
(0, 'assets/images/Clients/34.png', 1, 34, 1, 'system', '2025-08-09 14:08:36', NULL, '2025-08-09 14:08:36'),
(0, 'assets/images/Clients/35.png', 1, 35, 1, 'system', '2025-08-09 14:08:36', NULL, '2025-08-09 14:08:36'),
(0, 'assets/images/Clients/36.png', 1, 36, 1, 'system', '2025-08-09 14:08:36', NULL, '2025-08-09 14:08:36'),
(0, 'assets/images/Clients/37.png', 1, 37, 1, 'system', '2025-08-09 14:08:36', NULL, '2025-08-09 14:08:36'),
(0, 'assets/images/Clients/38.png', 1, 38, 1, 'system', '2025-08-09 14:08:36', NULL, '2025-08-09 14:08:36'),
(0, 'assets/images/Clients/39.png', 1, 39, 1, 'system', '2025-08-09 14:08:36', NULL, '2025-08-09 14:08:36'),
(0, 'assets/images/Clients/40.png', 1, 40, 1, 'system', '2025-08-09 14:08:36', NULL, '2025-08-09 14:08:36'),
(0, 'assets/images/Clients/41.png', 1, 41, 1, 'system', '2025-08-09 14:08:36', NULL, '2025-08-09 14:08:36'),
(0, 'assets/images/Clients/42.png', 1, 42, 1, 'system', '2025-08-09 14:08:36', NULL, '2025-08-09 14:08:36'),
(0, 'assets/images/Clients/43.png', 1, 43, 1, 'system', '2025-08-09 14:08:36', NULL, '2025-08-09 14:08:36'),
(0, 'assets/images/Clients/44.png', 1, 44, 1, 'system', '2025-08-09 14:08:36', NULL, '2025-08-09 14:08:36'),
(0, 'assets/images/Clients/45.png', 1, 45, 1, 'system', '2025-08-09 14:08:36', NULL, '2025-08-09 14:08:36'),
(0, 'assets/images/Clients/46.png', 1, 46, 1, 'system', '2025-08-09 14:08:36', NULL, '2025-08-09 14:08:36'),
(0, 'assets/images/Clients/47.png', 1, 47, 1, 'system', '2025-08-09 14:08:36', NULL, '2025-08-09 14:08:36'),
(0, 'assets/images/Clients/48.png', 1, 48, 1, 'system', '2025-08-09 14:08:36', NULL, '2025-08-09 14:08:36'),
(0, 'assets/images/Clients/49.png', 1, 49, 1, 'system', '2025-08-09 14:08:36', NULL, '2025-08-09 14:08:36');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials_rmm`
--

CREATE TABLE `testimonials_rmm` (
  `ID` int(11) NOT NULL,
  `Company_Logo_URL` varchar(255) NOT NULL,
  `Testimonial_Quote` text NOT NULL,
  `Author_Name` varchar(255) NOT NULL,
  `Author_Position` varchar(255) DEFAULT NULL,
  `Display_Order` int(11) DEFAULT 0,
  `Is_Active` tinyint(1) DEFAULT 1,
  `Created_By` varchar(100) DEFAULT NULL,
  `Created_On` datetime DEFAULT current_timestamp(),
  `Modified_By` varchar(100) DEFAULT NULL,
  `Modified_On` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimonials_rmm`
--

INSERT INTO `testimonials_rmm` (`ID`, `Company_Logo_URL`, `Testimonial_Quote`, `Author_Name`, `Author_Position`, `Display_Order`, `Is_Active`, `Created_By`, `Created_On`, `Modified_By`, `Modified_On`) VALUES
(1, 'assets/uploads/2024/02/1200px-Oshkosh_Corporation_logo.svg.png', 'Dataiku is a full solution, helping us build a purpose-driven data practice in the modern era.', 'Dr. Michael Schuh, Chief Data Scientist', 'Chief Data Scientist, Oshkosh Engineering', 1, 1, 'admin', '2025-08-08 17:38:12', NULL, '2025-08-08 17:38:12'),
(2, 'assets/uploads/2023/11/novartis-logo-transparent.png.webp', 'Dataiku\'s user-friendly interface democratized data access, enabling a data-driven culture that permeated throughout the organization. Moreover, the platform\'s transparency elevated risk management and governance, ensuring that decisions were grounded in accurate and trustworthy information.', 'Novartis, on using Dataiku for their automated commercial analytics use case', '', 2, 1, 'admin', '2025-08-08 17:38:12', NULL, '2025-08-08 17:38:12'),
(3, 'assets/uploads/2022/05/450x-NEW-gartner-peer-insights-logo-may-2022.png', 'Dataiku is a platform that accelerates the democratization of data.', 'Digital Culture Manager in the energy and utilities industry', '(Jan. 25, 2024)', 3, 1, 'admin', '2025-08-08 17:38:12', NULL, '2025-08-08 17:38:12'),
(4, 'assets/uploads/2022/05/450x-NEW-gartner-peer-insights-logo-may-2022.png', 'Overall, as a machine learning platform, Dataiku is easy enough to use that it can be utilized by citizen developers, but robust and customizable enough that you can accomplish whatever you need to on the platform.', 'Data scientist in the transportation industry', '(Jan. 24, 2024)', 4, 1, 'admin', '2025-08-08 17:38:12', NULL, '2025-08-08 17:38:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners_rmm`
--
ALTER TABLE `banners_rmm`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners_rmm`
--
ALTER TABLE `banners_rmm`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
