-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2025 at 02:45 PM
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
-- Database: `dataiku`
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
(1, 'assets/uploads/2025/04/JJ-2.svg', 1, 1, 1, 'admin', '2025-08-08 11:45:34', NULL, '2025-08-08 11:45:34'),
(2, 'assets/uploads/2025/04/LVMH.svg', 1, 2, 1, 'admin', '2025-08-08 11:45:34', NULL, '2025-08-08 11:45:34'),
(3, 'assets/uploads/2025/07/Michelin.svg', 1, 3, 1, 'admin', '2025-08-08 11:45:34', NULL, '2025-08-08 11:45:34'),
(4, 'assets/uploads/2025/04/BMO.svg', 1, 4, 1, 'admin', '2025-08-08 11:45:34', NULL, '2025-08-08 11:45:34'),
(5, 'assets/uploads/2025/04/Novartis.svg', 1, 5, 1, 'admin', '2025-08-08 11:45:34', NULL, '2025-08-08 11:45:34'),
(6, 'assets/uploads/2025/04/Unilever.svg', 1, 6, 1, 'admin', '2025-08-08 11:45:34', NULL, '2025-08-08 11:45:34'),
(7, 'assets/uploads/2025/04/Accenture.svg', 2, 1, 1, 'admin', '2025-08-08 11:45:34', NULL, '2025-08-08 11:45:34'),
(8, 'assets/uploads/2025/04/AWS.svg', 2, 2, 1, 'admin', '2025-08-08 11:45:34', NULL, '2025-08-08 11:45:34'),
(9, 'assets/uploads/2025/04/Databricks.svg', 2, 3, 1, 'admin', '2025-08-08 11:45:34', NULL, '2025-08-08 11:45:34'),
(10, 'assets/uploads/2025/04/Deloitte.svg', 2, 4, 1, 'admin', '2025-08-08 11:45:34', NULL, '2025-08-08 11:45:34'),
(11, 'assets/uploads/2025/04/Snowflake.svg', 2, 5, 1, 'admin', '2025-08-08 11:45:34', NULL, '2025-08-08 11:45:34'),
(12, 'assets/uploads/2025/04/SLB.svg', 2, 6, 1, 'admin', '2025-08-08 11:45:34', NULL, '2025-08-08 11:45:34'),
(13, 'assets/uploads/2025/04/Pinecone.svg', 3, 1, 1, 'admin', '2025-08-08 11:45:34', NULL, '2025-08-08 11:45:34'),
(14, 'assets/uploads/2025/04/Anthropic.svg', 3, 2, 1, 'admin', '2025-08-08 11:45:34', NULL, '2025-08-08 11:45:34'),
(15, 'assets/uploads/2025/04/Hugging-Face.svg', 3, 3, 1, 'admin', '2025-08-08 11:45:34', NULL, '2025-08-08 11:45:34'),
(16, 'assets/uploads/2025/04/Mistral-1.svg', 3, 4, 1, 'admin', '2025-08-08 11:45:34', NULL, '2025-08-08 11:45:34'),
(17, 'assets/uploads/2025/04/NVIDIA.svg', 3, 5, 1, 'admin', '2025-08-08 11:45:34', NULL, '2025-08-08 11:45:34'),
(18, 'assets/uploads/2025/04/OpenAI.svg', 3, 6, 1, 'admin', '2025-08-08 11:45:34', NULL, '2025-08-08 11:45:34');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials2_rmm`
--

CREATE TABLE `testimonials2_rmm` (
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
-- Dumping data for table `testimonials2_rmm`
--

INSERT INTO `testimonials2_rmm` (`ID`, `Company_Logo_URL`, `Testimonial_Quote`, `Author_Name`, `Author_Position`, `Display_Order`, `Is_Active`, `Created_By`, `Created_On`, `Modified_By`, `Modified_On`) VALUES
(1, 'assets/uploads/2024/02/1200px-Oshkosh_Corporation_logo.svg.png', 'Dataiku is a full solution, helping us build a purpose-driven data practice in the modern era.', 'Dr. Michael Schuh, Chief Data Scientist', 'Chief Data Scientist, Oshkosh Engineering', 1, 1, 'admin', '2025-08-08 17:38:12', NULL, '2025-08-08 17:38:12'),
(2, 'assets/uploads/2023/11/novartis-logo-transparent.png.webp', 'Dataiku\'s user-friendly interface democratized data access, enabling a data-driven culture that permeated throughout the organization. Moreover, the platform\'s transparency elevated risk management and governance, ensuring that decisions were grounded in accurate and trustworthy information.', 'Novartis, on using Dataiku for their automated commercial analytics use case', '', 2, 1, 'admin', '2025-08-08 17:38:12', NULL, '2025-08-08 17:38:12'),
(3, 'assets/uploads/2022/05/450x-NEW-gartner-peer-insights-logo-may-2022.png', 'Dataiku is a platform that accelerates the democratization of data.', 'Digital Culture Manager in the energy and utilities industry', '(Jan. 25, 2024)', 3, 1, 'admin', '2025-08-08 17:38:12', NULL, '2025-08-08 17:38:12'),
(4, 'assets/uploads/2022/05/450x-NEW-gartner-peer-insights-logo-may-2022.png', 'Overall, as a machine learning platform, Dataiku is easy enough to use that it can be utilized by citizen developers, but robust and customizable enough that you can accomplish whatever you need to on the platform.', 'Data scientist in the transportation industry', '(Jan. 24, 2024)', 4, 1, 'admin', '2025-08-08 17:38:12', NULL, '2025-08-08 17:38:12');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials_rmm`
--

CREATE TABLE `testimonials_rmm` (
  `ID` int(11) NOT NULL,
  `Brand_Thumb_Image_URL` varchar(255) NOT NULL,
  `Brand_Logo_URL` varchar(255) NOT NULL,
  `Brand_Title` varchar(255) NOT NULL,
  `Brand_Description` text NOT NULL,
  `Brand_Link` varchar(255) NOT NULL,
  `Brand_Link_Text` varchar(255) NOT NULL,
  `Indicator_Image_URL` varchar(255) DEFAULT NULL,
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

INSERT INTO `testimonials_rmm` (`ID`, `Brand_Thumb_Image_URL`, `Brand_Logo_URL`, `Brand_Title`, `Brand_Description`, `Brand_Link`, `Brand_Link_Text`, `Indicator_Image_URL`, `Display_Order`, `Is_Active`, `Created_By`, `Created_On`, `Modified_By`, `Modified_On`) VALUES
(1, 'assets/uploads/2025/04/Novartis.png', 'assets/uploads/2025/04/Novartis-1.svg', 'Faster GenAI Insights With the Dataiku LLM Mesh', 'Novartis drove a 10x improvement in time to insights by reducing the complexity of AI application development with the Dataiku LLM Mesh, transforming healthcare market research.', 'stories/detail/novartis/', 'EVERYTHING ON NOVARTIS & GENAI', 'assets/uploads/2025/04/Novartis-150x150.png', 1, 1, 'admin', '2025-08-08 12:04:47', NULL, '2025-08-08 12:04:47'),
(2, 'assets/uploads/2025/05/Roche.png', 'assets/uploads/2024/11/roche-logo-with-padding.png', 'Accelerating Case Law Analysis With GenAI', 'Roche uses GenAI and the Dataiku LLM Mesh to automate legal research, accelerate case preparation, and reduce attorney workloads.', 'stories/detail/roche-boosting-case-law-analysis/', 'SEE ROCHE\'S GENAI RESULTS', 'assets/uploads/2025/05/Roche-150x150.png', 2, 1, 'admin', '2025-08-08 12:04:47', NULL, '2025-08-08 12:04:47'),
(3, 'assets/uploads/2025/04/JJ-1.png', 'assets/uploads/2025/04/JJ-2.svg', 'Igniting GenAI Innovation for Vision Care', 'Johnson & Johnson\'s Vision team partnered with Dataiku for a GenAI hackathon, where non-data scientists from commercial teams, supply chain, & more built working prototypes, fast.', 'stories/detail/johnson-and-johnson-vision/', 'READ THE J&J VISION STORY', 'assets/uploads/2025/04/JJ-1-150x150.png', 3, 1, 'admin', '2025-08-08 12:04:47', NULL, '2025-08-08 12:04:47'),
(4, 'assets/uploads/2025/05/Akamai.png', 'assets/uploads/2024/11/akamai-logo-rgb.svg', 'Transforming Enterprise Data Discovery With LLMs', 'With Dataiku, Akamai built a locally hosted LLM-powered chatbot, serving as a comprehensive tool for effortless data exploration tailored to all users.', 'stories/detail/akamai/', 'EXPLORE AKAMAI\'S LLM BREAKTHROUGH', 'assets/uploads/2025/05/Akamai-150x150.png', 4, 1, 'admin', '2025-08-08 12:04:47', NULL, '2025-08-08 12:04:47'),
(5, 'assets/uploads/2025/05/System1-1.png', 'assets/uploads/2024/11/system1-logo-with-padding.png', 'Driving Campaign Wins With GenAI and Business Alignment', 'System1 reimagined campaign execution with Dataiku, unlocking faster development cycles, aligned cross-functional teams, and sustained business impact.', 'stories/detail/system1/', 'DISCOVER SYSTEM1\'S GENAI Breakthrough', 'assets/uploads/2025/05/System1-1-150x150.png', 5, 1, 'admin', '2025-08-08 12:04:47', NULL, '2025-08-08 12:04:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners_rmm`
--
ALTER TABLE `banners_rmm`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `clients_rmm`
--
ALTER TABLE `clients_rmm`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `idx_group_order` (`Group_ID`,`Display_Order`);

--
-- Indexes for table `testimonials2_rmm`
--
ALTER TABLE `testimonials2_rmm`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `idx_display_order` (`Display_Order`);

--
-- Indexes for table `testimonials_rmm`
--
ALTER TABLE `testimonials_rmm`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `idx_display_order` (`Display_Order`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners_rmm`
--
ALTER TABLE `banners_rmm`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `clients_rmm`
--
ALTER TABLE `clients_rmm`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `testimonials2_rmm`
--
ALTER TABLE `testimonials2_rmm`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `testimonials_rmm`
--
ALTER TABLE `testimonials_rmm`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
