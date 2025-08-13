-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2025 at 12:32 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `RESURGENT`
--

-- --------------------------------------------------------

--
-- Table structure for table `BANNERS_RMM`
--

CREATE TABLE `BANNERS_RMM` (
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
-- Dumping data for table `BANNERS_RMM`
--

INSERT INTO `BANNERS_RMM` (`ID`, `Name`, `SubTitle`, `Link`, `Link_Text`, `Detail_Image_URL`, `Display_Order`, `Status`, `IsDelete`, `Created_By`, `Created_On`, `Modified_By`, `Modified_On`) VALUES
(1, 'Enterprise Application - ERP', 'Oracle complete cloud suite of SaaS applications brings consistent processes and a single source of truth across important business functions-from', 'Solutions/ERP/', 'Explore Now', 'assets/images/background/25644130_7076235.jpg', 1, 'Active', NULL, 1, '2025-08-08 17:06:42', 1, '2025-08-08 17:06:42'),
(2, 'Digital Transformation', 'Helping enterprises navigate the world of digital disruption in business models, products, services and experiences with ease.', 'Solutions/Digital-Transformation/', 'Learn More', 'assets/images/background/2150010125.jpg', 2, 'Active', NULL, 1, '2025-08-08 17:06:42', 1, '2025-08-08 17:06:42'),
(3, 'Technology Delivery', 'Industry Best Practices Delivery, Existing Process and System Rationalization, Solution Governance, Adherence to Approach.', 'Solutions/Technology-Delivery/', 'Get Started', 'assets/images/background/6864937_23324.jpg', 3, 'Active', NULL, 1, '2025-08-08 17:06:42', 1, '2025-08-08 17:06:42');

-- --------------------------------------------------------

--
-- Table structure for table `BLOGS_DETAILS_RMM`
--

CREATE TABLE `BLOGS_DETAILS_RMM` (
  `ID` int(11) NOT NULL,
  `Unique_ID` varchar(150) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Description` varchar(5000) NOT NULL,
  `Category` varchar(200) DEFAULT NULL,
  `Event_Date` datetime NOT NULL,
  `Publish_Start_Date` datetime NOT NULL,
  `Publish_End_Date` datetime DEFAULT NULL,
  `Venue` varchar(50) NOT NULL,
  `Event_Thumbnail_Image_URL` varchar(500) DEFAULT NULL,
  `Detail_Image_URL` varchar(500) DEFAULT NULL,
  `Short_Description` varchar(2000) DEFAULT NULL,
  `Gallery_Folder_URL` varchar(500) DEFAULT NULL,
  `Display_Order` varchar(11) NOT NULL,
  `Status` varchar(50) NOT NULL,
  `IsDelete` varchar(1) DEFAULT NULL,
  `Created_By` int(11) DEFAULT NULL,
  `Created_On` datetime NOT NULL,
  `Modified_By` int(11) DEFAULT NULL,
  `Modified_On` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `BLOGS_DETAILS_RMM`
--

INSERT INTO `BLOGS_DETAILS_RMM` (`ID`, `Unique_ID`, `Name`, `Description`, `Category`, `Event_Date`, `Publish_Start_Date`, `Publish_End_Date`, `Venue`, `Event_Thumbnail_Image_URL`, `Detail_Image_URL`, `Short_Description`, `Gallery_Folder_URL`, `Display_Order`, `Status`, `IsDelete`, `Created_By`, `Created_On`, `Modified_By`, `Modified_On`) VALUES
(1, '', 'IFRS16/AS842 Solution on Oracle FCCS', 'Solution on Oracle FCCS - Is your organization still struggling with IFRS16 and AS842 compliance due January 01, 2019? Our latest end-to-end solution on Oracle FCCS helps manage the new lease standards including data collection, calculations, reporting and disclosures on a secure, collaborative, cloud-based platform. Contact Us to know more.', NULL, '2018-09-10 09:00:00', '2018-09-10 09:00:00', '2025-09-10 09:00:00', 'India', 'assets/images/Blogs/1.jpg', 'assets/images/Blogs/1.jpg', 'Is your organization still struggling with IFRS16 and AS842 compliance due January 01, 2019? Our latest end-to-end solution on Oracle FCCS helps manage the new lease standards including data collection, calculations, reporting and disclosures on a secure, collaborative, cloud-based platform.', 'assets/images/Blogs/', '1', 'Active', NULL, 1, '2022-12-14 09:00:00', 1, '2022-12-14 09:00:00'),
(2, '', 'Oracle PBCS', 'Solution on Oracle FCCS	- Is your organization still struggling with IFRS16 and AS842 compliance due January 01, 2019? Our latest end-to-end solution on Oracle FCCS helps manage the new lease standards including data collection, calculations, reporting and disclosures on a secure, collaborative, cloud-based platform. Contact Us to know more.', NULL, '2018-07-15 09:00:00', '2018-09-10 09:00:00', '2025-09-10 09:00:00', 'India', 'assets/images/Blogs/2.jpg', 'assets/images/Blogs/2.jpg', 'Resurgent successfully delivered a four day comprehensive training on Oracle Planning and Budgeting Cloud Service (PBCS) to a Big4 consulting firm in Mumbai, India, from July 11 to July 14, 2018. A very excited audience and equally dynamic trainers made this event a huge success.', 'assets/images/Blogs/', '2', 'Active', NULL, 1, '2022-12-14 09:00:00', 1, '2022-12-14 09:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `CLIENTS_RMM`
--

CREATE TABLE `CLIENTS_RMM` (
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
-- Dumping data for table `CLIENTS_RMM`
--

INSERT INTO `CLIENTS_RMM` (`ID`, `Client_Image_URL`, `Group_ID`, `Display_Order`, `Is_Active`, `Created_By`, `Created_On`, `Modified_By`, `Modified_On`) VALUES
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
-- Table structure for table `CONTACT_DETAILS`
--

CREATE TABLE `CONTACT_DETAILS` (
  `ID` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Mobile_Number` varchar(50) NOT NULL,
  `Product` varchar(150) NOT NULL,
  `Subject` varchar(250) NOT NULL,
  `Description` varchar(500) DEFAULT NULL,
  `IsDelete` varchar(1) DEFAULT NULL,
  `Created_By` int(11) DEFAULT NULL,
  `Created_On` datetime NOT NULL,
  `Modified_By` int(11) DEFAULT NULL,
  `Modified_On` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `TESTIMONIALS_RMM`
--

CREATE TABLE `TESTIMONIALS_RMM` (
  `ID` int(11) NOT NULL,
  `Company_Logo_URL` varchar(255) NOT NULL,
  `Testimonial_Quote` text NOT NULL,
  `Company_Name` varchar(255) DEFAULT NULL,
  `Display_Order` int(11) DEFAULT 0,
  `Is_Active` tinyint(1) DEFAULT 1,
  `Created_By` varchar(100) DEFAULT NULL,
  `Created_On` datetime DEFAULT current_timestamp(),
  `Modified_By` varchar(100) DEFAULT NULL,
  `Modified_On` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `TESTIMONIALS_RMM`
--

INSERT INTO `TESTIMONIALS_RMM` (`ID`, `Company_Logo_URL`, `Testimonial_Quote`, `Company_Name`, `Display_Order`, `Is_Active`, `Created_By`, `Created_On`, `Modified_By`, `Modified_On`) VALUES
(1, 'assets/images/Clients/43.png', 'Resurgent’s Managed Services team has transformed the way we operate. From program and project management to business engagement, their proactive approach has brought measurable results and operational efficiency.', 'Head of IT, OBCB Bank', 1, 1, 'admin', '2025-08-11 11:58:41', NULL, '2025-08-11 11:58:41'),
(2, 'assets/images/Clients/5.png', 'With Resurgent’s Technology Delivery and Infrastructure Management expertise, we achieved a seamless digital transformation. Their structured methodology ensured zero downtime and maximum impact.', 'Director of Operations, Singtel', 2, 1, 'admin', '2025-08-11 11:58:41', NULL, '2025-08-11 11:58:41'),
(3, 'assets/images/Clients/1.png', 'Resurgent’s Data and Analytics (DNA) solutions empowered our teams with real-time insights, driving smarter decisions across the enterprise. Their ERP and EPM implementations are truly world-class.', 'VP of Technology, Citibank', 3, 1, 'admin', '2025-08-11 11:58:41', NULL, '2025-08-11 11:58:41'),
(4, 'assets/images/Clients/40.png', 'From business engagement to digital transformation, Resurgent delivers with precision and professionalism. Their commitment to innovation and client success is unmatched.', 'CIO, Mammut', 4, 1, 'admin', '2025-08-11 11:58:41', NULL, '2025-08-11 11:58:41');

-- --------------------------------------------------------

--
-- Table structure for table `USER_INFORMATION_DETAILS`
--

CREATE TABLE `USER_INFORMATION_DETAILS` (
  `ID` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Login_Name` varchar(100) NOT NULL,
  `Mobile_Number` varchar(50) DEFAULT NULL,
  `Roles` int(11) DEFAULT NULL,
  `Unique_ID` varchar(150) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Description` varchar(500) DEFAULT NULL,
  `Image_Url` varchar(500) DEFAULT NULL,
  `IsDelete` varchar(1) DEFAULT NULL,
  `Status` varchar(50) NOT NULL,
  `Created_By` int(11) NOT NULL,
  `Created_On` datetime NOT NULL,
  `Modified_By` int(11) NOT NULL,
  `Modified_On` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `USER_INFORMATION_DETAILS`
--

INSERT INTO `USER_INFORMATION_DETAILS` (`ID`, `Name`, `Login_Name`, `Mobile_Number`, `Roles`, `Unique_ID`, `Password`, `Description`, `Image_Url`, `IsDelete`, `Status`, `Created_By`, `Created_On`, `Modified_By`, `Modified_On`) VALUES
(1, 'Administrator', 'test@rmmindia.com', '9880320879', 1, '1DB9D86BF32B4A529511180BBAE274DE', 'test@123', NULL, NULL, NULL, 'Active', 1, '2019-07-05 00:00:00', 1, '2019-07-05 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `USER_ROLES_DETAILS`
--

CREATE TABLE `USER_ROLES_DETAILS` (
  `ID` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Description` varchar(500) DEFAULT NULL,
  `Mask_Code` varchar(10) NOT NULL,
  `Status` varchar(50) NOT NULL,
  `IsDelete` varchar(1) DEFAULT NULL,
  `IsDefault` varchar(1) DEFAULT NULL,
  `Created_By` int(11) NOT NULL,
  `Created_On` datetime NOT NULL,
  `Modified_By` int(11) NOT NULL,
  `Modified_On` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `USER_ROLES_DETAILS`
--

INSERT INTO `USER_ROLES_DETAILS` (`ID`, `Name`, `Description`, `Mask_Code`, `Status`, `IsDelete`, `IsDefault`, `Created_By`, `Created_On`, `Modified_By`, `Modified_On`) VALUES
(1, 'Administrator', 'Administrator', '444444', 'Active', NULL, '1', 1, '2025-08-13 10:26:01', 1, '2025-08-13 10:26:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `BANNERS_RMM`
--
ALTER TABLE `BANNERS_RMM`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `BLOGS_DETAILS_RMM`
--
ALTER TABLE `BLOGS_DETAILS_RMM`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Created_By` (`Created_By`),
  ADD KEY `Modified_By` (`Modified_By`);

--
-- Indexes for table `CONTACT_DETAILS`
--
ALTER TABLE `CONTACT_DETAILS`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Created_By` (`Created_By`),
  ADD KEY `Modified_By` (`Modified_By`);

--
-- Indexes for table `TESTIMONIALS_RMM`
--
ALTER TABLE `TESTIMONIALS_RMM`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `USER_INFORMATION_DETAILS`
--
ALTER TABLE `USER_INFORMATION_DETAILS`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Created_By` (`Created_By`),
  ADD KEY `Modified_By` (`Modified_By`);

--
-- Indexes for table `USER_ROLES_DETAILS`
--
ALTER TABLE `USER_ROLES_DETAILS`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Created_By` (`Created_By`),
  ADD KEY `Modified_By` (`Modified_By`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `BANNERS_RMM`
--
ALTER TABLE `BANNERS_RMM`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `BLOGS_DETAILS_RMM`
--
ALTER TABLE `BLOGS_DETAILS_RMM`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `CONTACT_DETAILS`
--
ALTER TABLE `CONTACT_DETAILS`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `TESTIMONIALS_RMM`
--
ALTER TABLE `TESTIMONIALS_RMM`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `USER_INFORMATION_DETAILS`
--
ALTER TABLE `USER_INFORMATION_DETAILS`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `USER_ROLES_DETAILS`
--
ALTER TABLE `USER_ROLES_DETAILS`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `BLOGS_DETAILS_RMM`
--
ALTER TABLE `BLOGS_DETAILS_RMM`
  ADD CONSTRAINT `BLOGS_DETAILS_RMM_ibfk_1` FOREIGN KEY (`Created_By`) REFERENCES `USER_INFORMATION_DETAILS` (`ID`),
  ADD CONSTRAINT `BLOGS_DETAILS_RMM_ibfk_2` FOREIGN KEY (`Modified_By`) REFERENCES `USER_INFORMATION_DETAILS` (`ID`);

--
-- Constraints for table `CONTACT_DETAILS`
--
ALTER TABLE `CONTACT_DETAILS`
  ADD CONSTRAINT `CONTACT_DETAILS_ibfk_1` FOREIGN KEY (`Created_By`) REFERENCES `USER_INFORMATION_DETAILS` (`ID`),
  ADD CONSTRAINT `CONTACT_DETAILS_ibfk_2` FOREIGN KEY (`Modified_By`) REFERENCES `USER_INFORMATION_DETAILS` (`ID`);

--
-- Constraints for table `USER_INFORMATION_DETAILS`
--
ALTER TABLE `USER_INFORMATION_DETAILS`
  ADD CONSTRAINT `USER_INFORMATION_DETAILS_ibfk_1` FOREIGN KEY (`Created_By`) REFERENCES `USER_INFORMATION_DETAILS` (`ID`),
  ADD CONSTRAINT `USER_INFORMATION_DETAILS_ibfk_2` FOREIGN KEY (`Modified_By`) REFERENCES `USER_INFORMATION_DETAILS` (`ID`);

--
-- Constraints for table `USER_ROLES_DETAILS`
--
ALTER TABLE `USER_ROLES_DETAILS`
  ADD CONSTRAINT `USER_ROLES_DETAILS_ibfk_1` FOREIGN KEY (`Created_By`) REFERENCES `USER_INFORMATION_DETAILS` (`ID`),
  ADD CONSTRAINT `USER_ROLES_DETAILS_ibfk_2` FOREIGN KEY (`Modified_By`) REFERENCES `USER_INFORMATION_DETAILS` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
