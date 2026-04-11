-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2026 at 07:10 AM
-- Server version: 11.8.6-MariaDB-log
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u540617098_lazutest`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `is_dark_mode` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `phone_number`, `image`, `is_dark_mode`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Build Holistik', 'admin@gmail.com', '$2y$12$zkGdvhph2GjruVF4iLZSLOF4KIC4sC1aKdo1CZbcxIQDTLfoG4gRS', '12345678', NULL, NULL, '2025-04-12 08:53:45', '2025-04-12 08:53:45', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `buildings`
--

CREATE TABLE `buildings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `document_path` varchar(255) NOT NULL,
  `is_form` tinyint(4) NOT NULL,
  `meta_title` text NOT NULL,
  `meta_description` text NOT NULL,
  `meta_keyword` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `buildings`
--

INSERT INTO `buildings` (`id`, `title`, `description`, `image`, `slug`, `status`, `document_path`, `is_form`, `meta_title`, `meta_description`, `meta_keyword`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Immune™  System Certifications', '<div>Build Holistic is the only Indian arm for HOBI’s ImmuneTM&nbsp; Building Standard. We facilitate the process from Registration, consulting &amp; finally certifying a space under the Global standard seamlessly.</div><div>Our Goal is to evaluate &amp; certify the resilience &amp; indoor environments (offices, residential, industrial, logistics, etc;) against biological and toxic threads.&nbsp;&nbsp;</div>', 'uploads/building/office-buildings_adobestock_250195228.jpeg', 'immune-system-certification', 1, 'uploads/document/office-buildings_adobestock_250195228.jpeg', 1, 'Immune™  System Certifications', 'Immune™  System Certifications', 'Immune™  System Certifications', '2025-05-24 00:00:25', '2025-07-22 14:20:16', NULL),
(2, 'Immune™  Design', '<p>We device national out strategies during the design stage of the project along with the designer to design a facility that is ready and resilient for the client.</p><p>We customize this based on client requirements and designers vision for the client. These strategies don’t come in the way of the clients specific art &amp; the designers creative expression.</p>', 'uploads/building/White_final 1.png', 'immune-design', 1, 'uploads/document/White_final.png', 1, 'Immune™  Design', 'Immune™  Design', 'Immune™  Design', '2025-07-13 16:26:52', '2025-07-22 14:23:09', NULL),
(3, 'Assessor Training & Certification', '<p>Build Holistic has a Army of trained Assessors &amp; a few assessors under training for our growing clientele in the Region.</p><p>We are affiliated with a training&nbsp; partner responsible for training young professionals as immune assessors that continue to join our team and grow the assessor community here in India.</p>', 'uploads/building/White_final 1.png', 'assessor-training-certification', 1, 'uploads/document/White_final 1.png', 0, 'Assessor Training & Certification', 'Assessor Training & Certification', 'Assessor Training & Certification', '2025-07-13 16:28:05', '2025-07-22 14:23:21', NULL),
(4, 'Immune™ Material Consultancy', '<p>We can provide Keg material guidelines to help keep our client at their best score. Ranging from workstation surface finishes, Desk frames, chairs, partition panels &amp; recommended propylic elements.</p><p>We are also able to guide on interior paints, wall finishes, glass partitions &amp; overall sustainable &amp; Hygienic furniture materials recommended for the client &amp; Design professionals.</p>', 'uploads/building/White_final 1.png', 'immune-material-consultancy', 1, 'uploads/document/White_final 1.png', 0, 'Immune™ Material Consultancy', 'Immune™ Material Consultancy', 'Immune™ Material Consultancy', '2025-07-13 16:28:52', '2025-07-22 14:23:39', NULL),
(5, 'ESG Consultations', '<p>Build Holistic has in house ESG Consultant that are able to ties in ESG score requirements to what the standard offers.</p><p>The standard enhances a building ESG quotient by integrating health, safety &amp; sustainability measures. Our consultant will guide on how it aligns with Global trends in responsible investments &amp; corporate sustainability. We Holistically support organizations to meet their ESG reporting requirements.</p>', 'uploads/building/White_final 1.png', 'esg-consultations', 1, 'uploads/document/White_final 1.png', 0, 'ESG Consultations', 'ESG Consultations', 'ESG Consultations', '2025-07-13 16:29:58', '2025-07-22 14:23:59', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `building_enquiries`
--

CREATE TABLE `building_enquiries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `building_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contactuses`
--

CREATE TABLE `contactuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `message` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contributions`
--

CREATE TABLE `contributions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country` text DEFAULT NULL,
  `name` text DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `website` varchar(255) NOT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contributions`
--

INSERT INTO `contributions` (`id`, `country`, `name`, `image`, `description`, `website`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'USAs', 'Vigneshs', 'uploads/contribution/cambridge.png', 'tests', 'https://www.w', 1, '2025-05-18 08:45:53', '2025-05-18 08:48:59', '2025-05-18 08:48:59'),
(2, 'Bucharest, ROMANIA', 'Genesis Property', 'uploads/contribution/genesis.jpg', 'Dr. Liviu Tudor – Chairman & President – European Property Federation', 'genesisproperty.net', 1, '2025-05-24 01:58:11', '2025-05-31 02:34:32', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `media_coverages`
--

CREATE TABLE `media_coverages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `media_coverage_category_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` text NOT NULL,
  `short_description` text NOT NULL,
  `author_name` text DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `post_date` date NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media_coverages`
--

INSERT INTO `media_coverages` (`id`, `media_coverage_category_id`, `title`, `slug`, `short_description`, `author_name`, `image`, `description`, `post_date`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Mann Publications', 'https://www.mannpublications.com/mannreport/2021/11/23/worlds-first-immune-certified-residential-building-unveiled-in-london/', 'World’s First Immune Certified Residential Building Unveiled in London', NULL, 'uploads/mediacoverage/mann-publications.jpg', '<p>Measures include: aligning policies to the Immune standards at a corporate level, especially in areas such as business continuity, recovery and well-being; providing additional training to its onsite team and the dedicated Immune steward; increasing the cleaning frequency of high-touch and foot traffic areas.</p>', '2025-05-18', 0, '2025-05-25 04:09:30', '2026-03-01 08:32:14', NULL),
(2, 1, 'Future ICT Forum for Sustainable Cities', 'future-ict-form-for-sustainable-cities', '\'Technology is finally catching up to what the body always knew\'. \n\nDigital innovation is the nervous system of the wellness- smart city. it connects our bodies, our spaces and our behaviour in real time.\nThankyou Jose Jacob K & Future ICT Forum for Sustainable Cities for the opportunity to share fresh ideas that are shaping the future of Health, Real estate and Technolgy.', 'Nikitha Rayappa', 'uploads/mediacoverage/3.jpeg', '<p>Nikitha Rayappa, Founder, BUILD HOLISTIK,At the Future ICT Forum for Sustainable Cities, during the health &amp; wellness powered by digital innovation panel, Nikitha Rayappa spoke about urban wellness and rethinking health through the lens of breath, light, air, and design. She emphasized viewing buildings as living bodies and highlighted the digital connection between human wisdom and built environments, showcasing how thoughtful design and technology together can enable healthier, more holistic urban living.</p><p>#FutureICTForum2026#EnergyTransition#NewMobility#SustainableInnovation#RegenerativeEconomy#DigitalTransformation#CleanEnergy#SmartMobility#InnovationLeadership#ClimateTech#FutureOfMobility</p>', '2026-02-15', 1, '2026-03-01 08:32:10', '2026-03-01 08:32:10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `media_coverage_categories`
--

CREATE TABLE `media_coverage_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media_coverage_categories`
--

INSERT INTO `media_coverage_categories` (`id`, `name`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Media & Coverage', 1, '2025-05-25 04:06:46', '2025-05-25 04:07:04', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_03_09_092657_create_admins_table', 1),
(6, '2024_03_09_100736_create_settings_table', 1),
(7, '2024_03_09_184858_create_seos_table', 1),
(8, '2024_03_10_142051_create_page_management_table', 1),
(9, '2024_03_11_164415_create_contactuses_table', 1),
(10, '2024_03_13_143443_create_socials_table', 1),
(11, '2025_03_30_141657_create_buildings_table', 1),
(12, '2025_03_30_142029_create_building_enquiries_table', 1),
(13, '2025_03_31_054013_create_media_coverage_categories_table', 1),
(14, '2025_03_31_054019_create_media_coverages_table', 1),
(15, '2025_03_31_065228_create_press_releases_table', 1),
(16, '2025_05_18_125305_create_contributions_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `page_management`
--

CREATE TABLE `page_management` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `meta_title` longtext NOT NULL,
  `meta_keyword` longtext NOT NULL,
  `meta_description` longtext NOT NULL,
  `og_image` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_management`
--

INSERT INTO `page_management` (`id`, `title`, `url`, `meta_title`, `meta_keyword`, `meta_description`, `og_image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Home-Build Holistik', '/', 'Home-Build Holistik', 'Home-Build Holistik', 'Home-Build Holistik', NULL, '2025-05-24 00:45:16', '2025-07-13 17:08:36', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `press_releases`
--

CREATE TABLE `press_releases` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` longtext NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `short_description` longtext NOT NULL,
  `description` longtext NOT NULL,
  `slug` varchar(255) NOT NULL,
  `banner_image` varchar(255) DEFAULT NULL,
  `meta_title` longtext DEFAULT NULL,
  `meta_keyword` longtext DEFAULT NULL,
  `meta_description` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `press_releases`
--

INSERT INTO `press_releases` (`id`, `title`, `status`, `short_description`, `description`, `slug`, `banner_image`, `meta_title`, `meta_keyword`, `meta_description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'JCV & Associates HQ in Avire Tower, Philippines, achieves IMMUNE Building Standard™ - 4 stars', 1, 'The JCV & Associates Headquarters (JCVA) in Avire Tower, Quezon City, Philippines, has achieved IMMUNE Building Standard™ - 4 stars - Powerful. Healthy by Design Building Institute awarded the IMMUNE™ Powerful certificate and plaque to the JCVA team in a virtual ceremony last week.', '<p>Besides material technologies, JCVA also releases guidelines regarding COVID protocols for employees who were infected or had contact with someone infected with the disease. Recently, JCVA has also launched an Employee Wellbeing Program.&nbsp;</p><p><br></p><p>IMMUNE Building Standard™ was developed by Genesis Property and launched in 2020, immediately after the pandemic outbreak. Reaching Asia in 2022 and globally adopted by many companies around the world, it was conceived from the start to address the threats to the built environment caused by the pandemic.&nbsp;</p><p><br></p><p>“Our continued growth in Asia is a testament to the recognition of what IMMUNE™ is proposing, as we witness significant projects, like JCVA, adopting our standard. The imperative for healthier indoor environments has never been greater, as the pandemic has heightened awareness of the impact of indoor air quality on employee wellbeing and tenant safety. IMMUNE™ offers a proactive approach to address not only present health concerns but also anticipate and prepare for the health challenges of the future, and we are proud to be part of the movement towards healthier indoor spaces,” added Darren Allen, Director, Healthy by Design Building Institute.</p><p><br></p><p>The JCVA office, located in Avire Tower, has implemented IMMUNE™ measures throughout the entire office space, including the enclosed rooms - conference rooms, meeting rooms, as well as open space areas. The measures were implemented from the start of occupancy, in November 2020, and further strengthened throughout the course of the global pandemic.&nbsp;&nbsp;</p><p><br></p><p>Inspired by technologies and procedures grounded in science, the health and safety measures recommended by IMMUNE™ put people first and boost the immunity of the built environment against present and future health challenges, minimising the impact of pandemics such as COVID-19 and other bacteriological or toxicological threats.</p>', 'jcv-associates-hq-in-avire-tower-philippines-achieves-immune-building-standard-4-stars', 'uploads/pressrelease/jcva-hq_1.jpg', 'JCV & Associates HQ in Avire Tower, Philippines, achieves IMMUNE Building Standard™ - 4 stars', 'JCV & Associates HQ in Avire Tower, Philippines, achieves IMMUNE Building Standard™ - 4 stars', 'JCV & Associates HQ in Avire Tower, Philippines, achieves IMMUNE Building Standard™ - 4 stars', '2025-05-31 02:35:48', '2025-05-31 02:35:48', NULL),
(2, 'Menarco Tower from Bonifacio Global City achieves IMMUNE Building Standard™ - 5 stars - Shell & Core', 1, 'IMMUNE Building Standard™ was developed by Genesis Property and launched to address health threats to the built environment caused by the pandemic event. The standard was globally adopted by companies around the world to strengthen their commitment in having healthier buildings for both the present and the future. The standard reached Asia in June and continues to gain recognition in the region. ', '<p>August 18, 2022. Menarco Tower, a multi-awarded boutique office development situated in Bonifacio Global City, Metro Manila, managed and owned by one of the most innovative real estate developers in the country, Menarco Development, obtained a 5-star IMMUNE Building Standard™ certification for Shell &amp; Core.&nbsp;</p><p><span style=\"font-size: 1rem;\">IMMUNE Building Standard™ was developed by Genesis Property and launched to address health threats to the built environment caused by the pandemic event. The standard was globally adopted by companies around the world to strengthen their commitment in having healthier buildings for both the present and the future. The standard reached Asia in June and continues to gain recognition in the region.&nbsp;</span></p><p><span style=\"font-size: 1rem;\">“I want to congratulate the entire Menarco Development team for their authentic passion and positive energy put in the certification process. Achieving the IMMUNETM 5 stars – Resilient for Shell &amp; Core label demonstrates their team’s extraordinary strive for excellence, good practices, and respect for their business. ­Sometimes it takes a pandemic for people from different corners of the globe to work together and achieve wonderful things. The highest IMMUNE Building Standard™ label certification for Menarco Tower translates into a collective commitment for healthy buildings, but also a contribution to a healthier world”, said Liviu Tudor, founder of Genesis Property and president of the European Property Federation.</span></p><p><span style=\"font-size: 1rem;\">Menarco Tower has a gross floor area of 25,876 sqm and 32 floors, and outdoor activities are encouraged and recommended at the Pandan Terrace, there are also bicycle parking and shower areas. The entrances of Menarco Tower have disinfection systems, air barriers, mats, and disinfection stations. The restrooms are equipped with sensors for lights, faucets, and hand dryers.&nbsp;</span></p><p><span style=\"font-size: 1rem;\">The building has MERV 13 filtered fresh air that maintains CO2 levels at below 500 PPM, verified and continuously monitored by Air Quality Sensors. Moreover, the office building has a Green Cleaning Policy where only compliant chemicals, cleaning materials, and cleaning processes are being used. On top of that, all materials flowing into the building are evaluated from a sustainability perspective.</span></p><p><span style=\"font-size: 1rem;\">\"From day one, Menarco Development Corporation has designed, built and provided only the safest and healthiest spaces and experiences to every person we have touched. We are honored that Menarco Tower is Asia’s first recipient of the IMMUNE™ Resilient certification, the highest rating from the Healthy by Design Institute. This recognition certifies that our safe spaces are ready for present or future threats posed by Covid or any similar future events. Building better spaces that provide peace of mind for all, that is our ultimate goal\", said Carmen Jimenez-Ong, Founder &amp; CEO, Menarco Development Corporation.</span></p><p><span style=\"font-size: 1rem;\">IMMUNE™ is based on a practical investment in a Healthy by Design System (HbDS), which incorporates a network of specialized sensors that measure the indoor environment parameters such as air, humidity, temperature, or CO2 levels, devices and available technologies.</span></p><p><span style=\"font-size: 1rem;\">“We are very happy to have a strong partnership with Menarco Development Corporation in Asia and share the mission of creating healthy indoor spaces for our staff, our tenants and partners. At HDBI, we are very proud to demonstrate once again that IMMUNE™ is a serious proposition for any company that wants to be prepared for the health challenges of the future”, said Darren Allen, Director at Healthy by Design Building Institute.</span></p><p><span style=\"font-size: 1rem;\">The standard also recommends a set of measures embedding dedicated personnel such as the IMMUNE™ Steward, and new amenities, promoting operational and health rules. An authorized building assessor performs the evaluation and recommends a property to become IMMUNE™-certified with one of the three labels: Strong (3 stars), Powerful (4 stars) or Resilient (5 stars).</span></p>', 'menarco-tower-from-bonifacio-global-city-achieves-immune-building-standard-5-stars-shell-core', 'uploads/pressrelease/menarco-tower-01 (1).jpg', 'Menarco Tower from Bonifacio Global City achieves IMMUNE Building Standard™ - 5 stars - Shell & Core', 'Menarco Tower from Bonifacio Global City achieves IMMUNE Building Standard™ - 5 stars - Shell & Core', 'Menarco Tower from Bonifacio Global City achieves IMMUNE Building Standard™ - 5 stars - Shell & Core', '2025-09-22 15:23:37', '2025-09-22 15:23:37', NULL),
(3, 'St. Catherine\'s British School in Athens becomes the world’s first IMMUNE™ certified educational institution', 1, 'St. Catherine\'s British School, an international school located in northern Athens, Greece, obtained the highest certification level of the IMMUNE Building Standard™, becoming the first certified educational institution in the world.', '<p>3 August 2022, Athens. The IMMUNE Building Standard™, developed to attenuate the effects of the Covid-19 pandemic, continues to extend its global reach that started in 2020. After offices, industrial and residential assets, the certification launched at the initiative of Genesis Property, a leading member of the European Property Federation, now also covers educational institutions buildings.</p><p>St. Catherine\'s British School, an international school located in northern Athens, Greece, obtained the highest certification level of the IMMUNE Building Standard™, becoming the first certified educational institution in the world.</p><p><span style=\"font-size: 1rem;\">The school achieved the label IMMUNE™ - Resilient, scoring 5 stars out of 5, following the successful implementation of a large majority of measures included in the IMMUNE™ Assessment Scoring Index, an evaluation tool developed by Genesis Property. The building now has enhanced air filtration systems and benefits from strengthened sanitation in essential areas such as the main entrance, lifts, stairwells, door touch plates and handles. Moreover, automatic hand sanitizers were installed in the main entrance and lobbies on each floor.</span></p><p>“We are proud to receive this certification which emphasizes a key priority to enabling a healthy environment for our whole community, especially our staff and students. It is our responsibility to create a greener setting and future for our future generations and this certification validates our vision and mission in action”, stated Stuart Smith, the CEO and Headteacher of St. Catherine’s British School.</p><p>Established in 1956 on the grounds of the British Embassy in Athens, St. Catherine\'s teaches over 1,300 students, aged 3 to 18 years, from 54 nationalities. The school is a COBIS Executive Member (Council of British International Schools), an HMC School (Head) and an IBO World School (International Baccalaureate). St. Catherine\'s British School has outstanding teaching and recreational facilities, including a 350-seat theater, state-of the art science laboratories, a design technology Fablab and much more. Moreover, the classrooms are equipped with interactive smart board technology and Wi-Fi is available throughout the entire school.</p><p><span style=\"font-size: 1rem;\">”This new milestone for IMMUNE Building Standard™ reflects a strong commitment in creating healthier built environments for the future and proves the versatility and adaptability of the standard. We support safe education and believe that it is our responsibility to engage and unlock the potential of future generations. Achieving the highest level, 5 stars out of 5, St. Catherine’s demonstrates the commitment to transform the educational institution into the best place for children to nurture their innovative spirit and creativity”, said Liviu Tudor, founder of Genesis Property and president of the European Property Federation.</span></p><p>IMMUNE™ is based on a practical investment in a Healthy by Design System (HbDS), which empowers building operators to verify and adjust the condition of the building to a healthy performance level, and thus providing occupants with the space and confidence for a healthy experience.</p><p>Every IMMUNE™ certified building incorporates advanced technologies, specialized equipment, and dedicated personnel such as an IMMUNE™ Steward, to manage the building’s operations and health parameters, as recommended. The standard is based on an IMMUNE™ Assessment Scoring Index comprising 130+ measures recommended for implementation in buildings that include technical solutions for architectural engineering, technology, and design.</p><p>An independent authorized building assessor performs the evaluation and recommends a property to become IMMUNE™ - certified by the Healthy by Design Building Institute with one of the three labels: Strong (3 stars), Powerful (4 stars) or Resilient (5 stars).</p>', 'st-catherine-s-british-school-in-athens-becomes-the-world-s-first-immune-certified-educational-institution', 'uploads/pressrelease/st-catherine-s-british-school_3-1.jpg', 'St. Catherine\'s British School in Athens becomes the world’s first IMMUNE™ certified educational institution', 'St. Catherine\'s British School in Athens becomes the world’s first IMMUNE™ certified educational institution', 'St. Catherine\'s British School in Athens becomes the world’s first IMMUNE™ certified educational institution', '2025-09-22 15:25:20', '2025-09-22 15:25:20', NULL),
(4, 'IMMUNE Building Standard™ reaches Asia with two office buildings in Philippines achieving Shell & Core, Powerful – 4 Stars Label – first in the region', 1, 'IMMUNE Building Standard™, developed by Genesis Property and launched in 2020 to mitigate the challenges of a pandemic event for the built environment and globally adopted by companies to underline their commitment for healthier buildings for the future, continues to gain global recognition, reaching Asia.', '<p>June 15, 2022. First in the region, two office buildings of one of the largest real-estate developers in the Philippines, MREIT Inc., a Megaworld company operating as a Real Estate Investment Trust, received the IMMUNETM certification for Shell &amp; Core, achieving the label Powerful - 4 stars.</p><p>IMMUNE Building Standard™, developed by Genesis Property and launched in 2020 to mitigate the challenges of a pandemic event for the built environment and globally adopted by companies to underline their commitment for healthier buildings for the future, continues to gain global recognition, reaching Asia.</p><p style=\"margin-bottom: 15px; margin-right: 0px; margin-left: 0px; color: rgb(0, 0, 51); font-family: Montserrat, sans-serif; letter-spacing: -0.15px;\">“We started our journey shortly after the pandemic emerged, developing the IMMUNE Building Standard™ as a blueprint for the healthy buildings of the future.&nbsp;<strong style=\"font-weight: bold; margin-top: 0px !important; margin-bottom: 0px !important;\">Today, one year and a half after the first IMMUNE™ building was certified, we reached a new milestone in Asia,&nbsp;</strong>together with the team at Megaworld. With every new property adopting the IMMUNE Building Standard™ we acknowledge not only the growing interest, but also a clear commitment of the real estate business in creating a healthier workplace environment for people, businesses, and economies around the world”, said Liviu Tudor, founder of Genesis Property and president of the European Property Federation.</p><p style=\"margin-top: 8px; margin-right: 0px; margin-left: 0px; color: rgb(0, 0, 51); font-family: Montserrat, sans-serif; letter-spacing: -0.15px; margin-bottom: 0px !important;\">The IMMUNE™ Shell &amp; Core certification, awarded by Healthy by Design Building Institute (HDBI), was achieved by Megaworld after the implementation, in the shared spaces of the buildings,&nbsp;<strong style=\"font-weight: bold; margin-top: 0px !important; margin-bottom: 0px !important;\">of a large majority of the measures included in the IMMUNE™ Assessment Scoring Index</strong>. This is an evaluation tool developed at the initiative of Genesis Property, a leading member of the European Property Federation and renowned Class A office developer.</p><p style=\"margin-top: 8px; margin-right: 0px; margin-left: 0px; margin-bottom: 0px !important;\"><font color=\"#000033\" face=\"Montserrat, sans-serif\"><span style=\"letter-spacing: -0.15px;\">“We take great pride in becoming the first-ever recipient of the IMMUNE Building Standard™ certifications in Asia. We hope to make this a benchmark across all the properties in our portfolio, and we look forward to accrediting all our assets in the future. We are into township development and creating safe working environments not only benefits the office population, but also the greater community that surrounds our developments. That’s why it’s a very important step for MREIT to be taking. We are truly honored to be given this recognition”, said Kevin L. Tan, President and CEO of MREIT Inc.</span></font></p><p style=\"margin-top: 8px; margin-right: 0px; margin-left: 0px; margin-bottom: 0px !important;\"><font color=\"#000033\" face=\"Montserrat, sans-serif\"><span style=\"letter-spacing: -0.15px;\">Entrances, exit areas and routes of the two buildings located in Eastwood City, Megaworlds first-ever township development, in the Manila metropolitan area, were re-configured and equipped with touchless systems and enhanced sanitation systems. The buildings now benefit from improved sanitation in areas such as the main entrance, lifts, and stairwells.</span></font></p><p style=\"margin-top: 8px; margin-right: 0px; margin-left: 0px; margin-bottom: 0px !important;\"><font color=\"#000033\" face=\"Montserrat, sans-serif\"><span style=\"letter-spacing: -0.15px;\"><br></span></font></p><p style=\"margin-bottom: 15px; margin-right: 0px; margin-left: 0px; color: rgb(0, 0, 51); font-family: Montserrat, sans-serif; letter-spacing: -0.15px;\">“MREIT needs to be recognized for their ingenuity and resilience in making their buildings a safer place for clients, partners and staff and in doing so, became a trailblazer in their field and in the region”, said Darren Allen, Director at Healthy by Design Building Institute.</p><p style=\"margin-top: 8px; margin-right: 0px; margin-left: 0px; color: rgb(0, 0, 51); font-family: Montserrat, sans-serif; letter-spacing: -0.15px; margin-bottom: 0px !important;\">IMMUNE™ is based on a practical investment in a&nbsp;<strong style=\"font-weight: bold; margin-top: 0px !important;\">Healthy by Design System (HbDS)</strong>, which incorporates a network of specialized sensors that measure the indoor environment parameters such as air, humidity, temperature, or CO2 levels, devices and available technologies, specialized equipment, dedicated personnel such as the IMMUNE™ Steward, and new amenities, promoting operational and health rules. An authorized building assessor performs the evaluation and recommends a property to become IMMUNE™-certified with one of the three labels:&nbsp;<strong style=\"font-weight: bold; margin-bottom: 0px !important;\">Strong (3 stars), Powerful (4 stars) or Resilient (5 stars).</strong></p>', 'two-office-buildings-in-philippines-achieving-shell-core-powerful-4-stars-label', 'uploads/pressrelease/1800-eastwood-avenue.jpg', 'IMMUNE Building Standard™ reaches Asia with two office buildings in Philippines achieving Shell & Core, Powerful – 4 Stars Label – first in the region', 'IMMUNE Building Standard™ reaches Asia with two office buildings in Philippines achieving Shell & Core, Powerful – 4 Stars Label – first in the region', 'IMMUNE Building Standard™ reaches Asia with two office buildings in Philippines achieving Shell & Core, Powerful – 4 Stars Label – first in the region', '2025-09-22 15:26:56', '2025-09-22 15:26:56', NULL),
(5, 'Nearly 88% of employees improve their collaboration with colleagues when they go to the office', 1, 'The easing of the Covid-19 restrictions, two years after the start of the pandemic, strengthens the prospects of employees returning to the office, but also increasingly highlights the effects of the lack of physical interaction between employees and teams during this time. Thus, 82.6% of employees say that working from home has affected their relationship with the team. ', '<p>07 April 2022. The easing of the Covid-19 restrictions, two years after the start of the pandemic, strengthens the prospects of employees returning to the office, but also increasingly highlights the effects of the lack of physical interaction between employees and teams during this time. Thus, 82.6% of employees say that working from home has affected their relationship with the team. Today, nearly 88% of employees who have returned to the office or work in a hybrid system with predominantly physical presence say they spend a good amount of time interacting and collaborating directly with colleagues when they are in the office, according to a recent survey of 1,073 employees nationwide by Genesis Property.</p><p>3 out of 10 employees say that the lack of physical interaction and collaboration has had an effect on their career development, over 38% feel that working from home has also affected their day-to-day activity at work, and about as many believe that also the company\'s business can suffer in the long run in a remote working system. Physical interaction among employees currently focuses on project collaboration or team activities (63.5%), and on socialising (23.5%).</p><p><span style=\"font-size: 1rem;\">”The importance of workplace interaction has become increasingly clear in the last years, and solid career development, especially for those just starting, cannot take shape without this collaborative component. Physical interaction in the office, whether in a formal or informal setting, provides the opportunity for a much more detailed and nuanced understanding of the work environment and the steps that need to be taken to move up the career ladder”, says Teodor Stoica, Human Resources Manager at Genesis Property.</span></p><p>This is strengthened by the fact that nearly 95% of respondents believe that young employees, at the beginning of their career, would benefit more in their careers if they came into the office at least a few days a week.</p><p>“Moreover, equally important are the obvious benefits of physical interaction on each individual, as being around our peers can positively affect our mental and physical health”, adds Teodor Stoica.</p><p>Healthy indoor spaces support faster return to the office</p><p>Even though Romania ended the state of alert, the health of indoor spaces remains an important concern for employees. Nearly 92% of respondents say additional measures are needed in offices to better protect employees\' health, the Genesis Property survey also shows.</p><p>This confirms the need for long-term solutions that turn offices into platforms that truly support collaboration and real interaction, but also limit health risks. IMMUNE Building Standard™, initiated by Genesis Property in 2020, was specifically designed to reduce both current and future health threats.</p><p>The Genesis Property survey on employees\' perception of health within the built environment and office work was conducted nationwide in February 2022 via the iVox platform on a total sample of 1,073 internet users in Romania. Some 57% of participants are women, over 60% are aged between 20 and 40, and 60% have a net income of more than 3,000 lei.</p>', 'nearly-88-of-employees-improve-their-collaboration-with-colleagues-when-they-go-to-the-office', 'uploads/pressrelease/infographic_genesis-property_en.jpg', 'Nearly 88% of employees improve their collaboration with colleagues when they go to the office', 'Nearly 88% of employees improve their collaboration with colleagues when they go to the office', 'Nearly 88% of employees improve their collaboration with colleagues when they go to the office', '2025-09-22 15:28:46', '2025-09-22 15:28:46', NULL),
(6, 'TEC One BKC Centre Achieves IMMUNE™ 4-Star Certification | Mumbai, India', 1, 'TEC One BKC Centre, an exclusive flexible workspace located in the heart of Mumbai’s premium business district - Bandra Kurla Complex - has been awarded the IMMUNE Building Standard™ 4-Star “Powerful” Certification for its 17th Floor office. This achievement marks a significant milestone for India, showcasing the nation’s growing commitment to health, safety, and well-being in workplace design.', '<p>TEC One BKC Centre, an exclusive flexible workspace located in the heart of Mumbai’s premium business district - Bandra Kurla Complex - has been awarded the<b> IMMUNE Building Standard™ 4-Star “Powerful” Certification</b> for its 17th Floor office. This achievement marks a significant milestone for India, showcasing the nation’s growing commitment to health, safety, and well-being in workplace design.</p><p>Envisioned by <b>Mr. Shek Zawad</b>, Director – Projects &amp; Facilities, South Asia, UAE and Kingdom of Saudi Arabia, the initiative reflects The Executive Centre’s regional vision of creating spaces that prioritize occupant health and operational resilience. The project was led by <b>Ms. Soumya Satyanarayan</b>, whose on-ground leadership and cross-functional coordination ensured the seamless integration of IMMUNE™ guidelines into the daily functioning of the facility.</p><p>The certification journey was facilitated under the aegis of <b>Build Holistik</b>, founded by Ar. Nikitha Rayappa, representing a pioneering step in India’s adoption of the IMMUNE™ Standard. <b>Er. Priyank Patel</b>, serving as the project’s Sustainability Advisor, supported the team with end-to-end guidance — from baseline gap analysis to final certification facilitation.</p><p>At TEC One BKC, the certification process underscored the centre’s advanced health and safety measures, including:</p><ul><li><b>MERV 13 air filtration systems</b> ensuring high-quality indoor air.</li><li><b>Touch-free sensors</b> for lighting and washroom utilities.</li><li><b>Enhanced disinfection protocols</b> and green cleaning policies aligned with global best practices.</li><li><b>Well-being-focused amenities,</b> ensuring comfort and mental wellness for all occupants.</li></ul><p><b>Leadership Reflections</b></p><p>“Our spaces have always been designed to enhance human experience — not just in aesthetics and functionality, but in safety and wellness. The IMMUNE™ 4-Star certification reaffirms our global commitment to providing secure, healthy, and inspiring environments for our members,” said <b>Mr. Shek Zawad, Director - Capital Development</b>.</p><p>“It was a deeply fulfilling experience to work alongside passionate teams who share a vision for healthier workplaces. The TEC One BKC achievement reflects India’s readiness to adopt next-generation health standards in commercial real estate,” shared <b>Ar. Nikitha Rayappa, Founder of Build Holistik</b>.</p><p>“As the first IMMUNE™ certified project facilitated in India, this milestone will inspire more organizations to view health resilience as a core pillar of sustainability and business continuity,” added <b>Er. Priyank Patel</b>, Advisor and Local Immune Assessor for the project.</p><p>“We congratulate TEC One BKC Centre for their authentic passion and positive energy put in the certification process. Achieving the IMMUNE label demonstrates their team’s extraordinary strive for excellence, good practices, and respect for their business,” said <b>Gavin Bonner, Director, Healthy by Design Building Institute</b>.</p>', 'tec-one-bkc-centre-achieves-immune-4-star-certification-mumbai-india', 'uploads/pressrelease/3.jpg', 'TEC One BKC Centre Achieves IMMUNE™ 4-Star Certification | Mumbai, India', 'TEC One BKC Centre Achieves IMMUNE™ 4-Star Certification | Mumbai, India', 'TEC One BKC Centre Achieves IMMUNE™ 4-Star Certification | Mumbai, India', '2025-12-25 14:49:03', '2025-12-25 14:50:06', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `seos`
--

CREATE TABLE `seos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_keyword` varchar(255) DEFAULT NULL,
  `meta_description` varchar(255) DEFAULT NULL,
  `og_image` varchar(255) DEFAULT NULL,
  `google_tagmanager` longtext DEFAULT NULL,
  `google_analytics` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seos`
--

INSERT INTO `seos` (`id`, `meta_title`, `meta_keyword`, `meta_description`, `og_image`, `google_tagmanager`, `google_analytics`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Build Holistik', 'Build Holistik', 'Build Holistik', 'uploads/companyimage/logo.png', '<script></script>', '<script></script>', '2025-04-12 08:53:45', '2025-07-13 18:14:13', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `common_image` varchar(255) DEFAULT NULL,
  `favicon` varchar(255) DEFAULT NULL,
  `address` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `email`, `phone_number`, `logo`, `common_image`, `favicon`, `address`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Build Holistik', 'info@buildholistik.in', '+918904879177', 'uploads/companyimage/White_final 1 (1).png', 'uploads/companyimage/White_final 1 (1).png', 'uploads/companyimage/White_final 1 (1).png', 'Build Holistik', '2025-04-12 08:53:45', '2025-09-14 04:29:09', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `socials`
--

CREATE TABLE `socials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `facebook_url` varchar(255) DEFAULT NULL,
  `instagram_url` varchar(255) DEFAULT NULL,
  `linkedin_url` varchar(255) DEFAULT NULL,
  `twitter_url` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `socials`
--

INSERT INTO `socials` (`id`, `facebook_url`, `instagram_url`, `linkedin_url`, `twitter_url`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'https://www.facebook.com/IMMUNEBuildingStandard#', 'https://immune-building.com/news/rss/', 'https://www.linkedin.com/company/immune-building-standard/', 'https://www.youtube.com/channel/UCx5OoWCCDlFl33gwB-g4Fjg#', '2025-05-31 10:35:26', '2025-07-13 15:00:29', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `page_url` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscriptions`
--

INSERT INTO `subscriptions` (`id`, `email`, `page_url`, `created_at`, `updated_at`) VALUES
(1, 'vignesh.nexevo@gmail.com', 'http://127.0.0.1:8000/immune-scoring-index', '2025-06-01 08:31:20', '2025-06-01 08:31:20'),
(2, 'vignesh.nexevo1@gmail.com', 'https://www.olive-beaver-402437.hostingersite.com', '2025-06-01 15:51:16', '2025-06-01 15:51:16');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buildings`
--
ALTER TABLE `buildings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `building_enquiries`
--
ALTER TABLE `building_enquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactuses`
--
ALTER TABLE `contactuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contributions`
--
ALTER TABLE `contributions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `media_coverages`
--
ALTER TABLE `media_coverages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media_coverage_categories`
--
ALTER TABLE `media_coverage_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_management`
--
ALTER TABLE `page_management`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `press_releases`
--
ALTER TABLE `press_releases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seos`
--
ALTER TABLE `seos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socials`
--
ALTER TABLE `socials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `buildings`
--
ALTER TABLE `buildings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `building_enquiries`
--
ALTER TABLE `building_enquiries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contactuses`
--
ALTER TABLE `contactuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contributions`
--
ALTER TABLE `contributions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `media_coverages`
--
ALTER TABLE `media_coverages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `media_coverage_categories`
--
ALTER TABLE `media_coverage_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `page_management`
--
ALTER TABLE `page_management`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `press_releases`
--
ALTER TABLE `press_releases`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `seos`
--
ALTER TABLE `seos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `socials`
--
ALTER TABLE `socials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
