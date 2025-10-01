-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2025 at 09:59 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aurko`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `about` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `about`, `created_at`, `updated_at`) VALUES
(1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has su', '2025-10-01 19:11:09', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `advisorycommittees`
--

CREATE TABLE `advisorycommittees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `advisorycommittees`
--

INSERT INTO `advisorycommittees` (`id`, `photo`, `name`, `position`, `created_at`, `updated_at`) VALUES
(1, 'image.png', 'Tanvir Hasan Tonmoy', 'Chairman', '2025-10-01 19:12:25', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bannername` varchar(255) NOT NULL,
  `bannerimage` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 2,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `bannername`, `bannerimage`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Banner One', '2.jpg', 1, '2025-10-01 13:49:28', '2025-10-01 13:49:30');

-- --------------------------------------------------------

--
-- Table structure for table `chairmanmessages`
--

CREATE TABLE `chairmanmessages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `chairmanmessage` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chairmanmessages`
--

INSERT INTO `chairmanmessages` (`id`, `chairmanmessage`, `created_at`, `updated_at`) VALUES
(1, 'Allah is the source of all creation. He has created us and enriched us with resources. The purpose of this luxuriance is to stand beside to those who are in need. If we can strategically measure our resources then we can understand how effective resources', '2025-10-01 19:49:54', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `covids`
--

CREATE TABLE `covids` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(255) NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `project_desp` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `covids`
--

INSERT INTO `covids` (`id`, `photo`, `project_name`, `project_desp`, `created_at`, `updated_at`) VALUES
(1, 'image.jpg', 'COVID-19 Projects', 'Our world is fighting against one of the biggest crises in the world history. Due to lockdown the economic status at individual level is very pathetic till now. It is high time to stand beside humanity. Previously we have supported the needy families with', '2025-10-01 19:50:35', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customer_forms`
--

CREATE TABLE `customer_forms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `economicdevelopments`
--

CREATE TABLE `economicdevelopments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(255) NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `project_desp` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `economicdevelopments`
--

INSERT INTO `economicdevelopments` (`id`, `photo`, `project_name`, `project_desp`, `created_at`, `updated_at`) VALUES
(1, 'image.jpg', 'Economic Development', 'We believe each and every person is valuable and has something different than others. Only because of lack of funds many latent talents are fall down at bud stages. With the support from our donors we want to ensure that those people can avoid conformity,', '2025-10-01 19:51:13', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(255) NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `project_desp` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `photo`, `project_name`, `project_desp`, `created_at`, `updated_at`) VALUES
(1, 'image.jpg', 'AURKO Foundation Education', 'What is the purpose of education? Is it getting a well-paid job? No! Education will be valueless without achieving noble virtues like better human being, hard work, punctuality etc. Lets shape a society where norms and ethics will be practiced, laws and r', '2025-10-01 19:51:46', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `eiddistributiongift2021s`
--

CREATE TABLE `eiddistributiongift2021s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `eiddistributiongift2021s`
--

INSERT INTO `eiddistributiongift2021s` (`id`, `title`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'Eid', 'image.jpg', '2025-10-01 19:52:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `eiddistributiongift2022s`
--

CREATE TABLE `eiddistributiongift2022s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `eiddistributiongift2022s`
--

INSERT INTO `eiddistributiongift2022s` (`id`, `title`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'Eid 2022', 'image.jpg', '2025-10-01 19:52:40', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `emergenceyaids`
--

CREATE TABLE `emergenceyaids` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(255) NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `project_desp` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `emergenceyaids`
--

INSERT INTO `emergenceyaids` (`id`, `photo`, `project_name`, `project_desp`, `created_at`, `updated_at`) VALUES
(1, 'image.jpg', 'Emergency AID', 'Nature has always been unpredictable. Unexpected events may arrive and cause a huge damage at any time. With the valuable support from the government and our respected donors we are always ready to respond to any kind of emergency voluntary.', '2025-10-01 19:53:11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `executivecommittees`
--

CREATE TABLE `executivecommittees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `executivecommittees`
--

INSERT INTO `executivecommittees` (`id`, `photo`, `name`, `position`, `created_at`, `updated_at`) VALUES
(1, 'image.png', 'Tanvir Hasan Tonmoy', 'Chairman', '2025-10-01 19:18:33', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `freebloodgroupings`
--

CREATE TABLE `freebloodgroupings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `freebloodgroupings`
--

INSERT INTO `freebloodgroupings` (`id`, `title`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'Free Blood', 'image.jpg', '2025-10-01 19:53:42', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `freemaskdistributions`
--

CREATE TABLE `freemaskdistributions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `freemaskdistributions`
--

INSERT INTO `freemaskdistributions` (`id`, `title`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'Free Mask ', 'image.jpg', '2025-10-01 19:53:58', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `healthcares`
--

CREATE TABLE `healthcares` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(255) NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `project_desp` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `healthcares`
--

INSERT INTO `healthcares` (`id`, `photo`, `project_name`, `project_desp`, `created_at`, `updated_at`) VALUES
(1, 'image.jpg', 'AURKO Foundation Healthcare', 'With the supervision of our honorable chief advisor Prof. Dr. Mohammad Rashidul Hassan and his fellow doctors, we are involved in enhancing the health awareness of the people in an effective manner. We act like a bridge between our doctor’s finest medical', '2025-10-01 19:54:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `iftarwithmaanibashes`
--

CREATE TABLE `iftarwithmaanibashes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `iftarwithmaanibashes`
--

INSERT INTO `iftarwithmaanibashes` (`id`, `title`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'Iftari', 'image.jpg', '2025-10-01 19:54:53', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_06_09_083607_create_tasks_table', 1),
(5, '2022_09_09_145308_create_banners_table', 1),
(6, '2022_09_10_065606_create_mission_visions_table', 1),
(7, '2022_09_10_080449_create_running_projects_table', 1),
(8, '2022_09_10_152725_create_customer_forms_table', 1),
(9, '2022_09_10_162053_create_abouts_table', 1),
(10, '2022_09_10_163157_create_chairmanmessages_table', 1),
(11, '2022_09_10_164845_create_advisorycommittees_table', 1),
(12, '2022_09_10_164920_create_executivecommittees_table', 1),
(13, '2022_09_11_091732_create_emergenceyaids_table', 1),
(14, '2022_09_11_091750_create_healthcares_table', 1),
(15, '2022_09_11_091813_create_education_table', 1),
(16, '2022_09_11_091831_create_skilldevelopments_table', 1),
(17, '2022_09_11_091849_create_economicdevelopments_table', 1),
(18, '2022_09_11_091911_create_covids_table', 1),
(19, '2022_09_11_120324_create_notices_table', 1),
(20, '2022_09_16_123646_create_eiddistributiongift2021s_table', 1),
(21, '2022_09_16_123703_create_eiddistributiongift2022s_table', 1),
(22, '2022_09_16_123722_create_freebloodgroupings_table', 1),
(23, '2022_09_16_123745_create_freemaskdistributions_table', 1),
(24, '2022_09_16_123802_create_iftarwithmaanibashes_table', 1),
(25, '2022_09_16_123822_create_sunamganjfloodreliefprojects_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mission_visions`
--

CREATE TABLE `mission_visions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mission` varchar(255) DEFAULT NULL,
  `vision` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mission_visions`
--

INSERT INTO `mission_visions` (`id`, `mission`, `vision`, `created_at`, `updated_at`) VALUES
(1, 'To provide comprehensive care that satisfies the needs of underdeveloped communities through voluntary activities, health care services, financial support, entrepreneurs empowerment and technology.', 'To build a world with smiles, free from all forms of discrimination where everybody will be treated with equal rights and individuals will realise their potentials.', '2025-10-01 19:55:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `notice` varchar(255) NOT NULL,
  `notice_title` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `notice`, `notice_title`, `created_at`, `updated_at`) VALUES
(1, 'test notice', 'test notice', '2025-10-01 19:55:46', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `running_projects`
--

CREATE TABLE `running_projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_name` varchar(255) DEFAULT NULL,
  `project_desp` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `running_projects`
--

INSERT INTO `running_projects` (`id`, `project_name`, `project_desp`, `created_at`, `updated_at`) VALUES
(1, 'test project 1', 'Nature has always been unpredictable. Unexpected events may arrive and cause a huge damage at any time. With the valuable support from the government and our respected donors we are always ready to respond to any kind of emergency voluntary.', '2025-10-02 19:57:43', NULL),
(2, 'test project 2', 'Nature has always been unpredictable. Unexpected events may arrive and cause a huge damage at any time. With the valuable support from the government and our respected donors we are always ready to respond to any kind of emergency voluntary.', '2025-10-02 19:57:43', NULL),
(3, 'test project 3', 'Nature has always been unpredictable. Unexpected events may arrive and cause a huge damage at any time. With the valuable support from the government and our respected donors we are always ready to respond to any kind of emergency voluntary.', '2025-10-02 19:57:43', NULL),
(4, 'test project 4', 'Nature has always been unpredictable. Unexpected events may arrive and cause a huge damage at any time. With the valuable support from the government and our respected donors we are always ready to respond to any kind of emergency voluntary.', '2025-10-02 19:57:43', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `skilldevelopments`
--

CREATE TABLE `skilldevelopments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(255) NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `project_desp` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `skilldevelopments`
--

INSERT INTO `skilldevelopments` (`id`, `photo`, `project_name`, `project_desp`, `created_at`, `updated_at`) VALUES
(1, '', 'Skill Development', 'Nature has always been unpredictable. Unexpected events may arrive and cause a huge damage at any time. With the valuable support from the government and our respected donors we are always ready to respond to any kind of emergency voluntary.', '2025-10-01 19:56:51', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sunamganjfloodreliefprojects`
--

CREATE TABLE `sunamganjfloodreliefprojects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sunamganjfloodreliefprojects`
--

INSERT INTO `sunamganjfloodreliefprojects` (`id`, `title`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'Sunamganj flood', 'image.jpg', '2025-10-01 19:57:08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `task_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Tanvir', 'admin@gmail.com', '2025-09-30 11:06:20', '$2y$12$hVOGjSu4kqZt7Dx7F//ZiuK.5/QmOQlnT9j4R5P0CVan6TLBiAzum', NULL, '2025-09-30 11:06:20', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `advisorycommittees`
--
ALTER TABLE `advisorycommittees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chairmanmessages`
--
ALTER TABLE `chairmanmessages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `covids`
--
ALTER TABLE `covids`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_forms`
--
ALTER TABLE `customer_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `economicdevelopments`
--
ALTER TABLE `economicdevelopments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eiddistributiongift2021s`
--
ALTER TABLE `eiddistributiongift2021s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eiddistributiongift2022s`
--
ALTER TABLE `eiddistributiongift2022s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emergenceyaids`
--
ALTER TABLE `emergenceyaids`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `executivecommittees`
--
ALTER TABLE `executivecommittees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `freebloodgroupings`
--
ALTER TABLE `freebloodgroupings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `freemaskdistributions`
--
ALTER TABLE `freemaskdistributions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `healthcares`
--
ALTER TABLE `healthcares`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `iftarwithmaanibashes`
--
ALTER TABLE `iftarwithmaanibashes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mission_visions`
--
ALTER TABLE `mission_visions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `running_projects`
--
ALTER TABLE `running_projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skilldevelopments`
--
ALTER TABLE `skilldevelopments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sunamganjfloodreliefprojects`
--
ALTER TABLE `sunamganjfloodreliefprojects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
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
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `advisorycommittees`
--
ALTER TABLE `advisorycommittees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `chairmanmessages`
--
ALTER TABLE `chairmanmessages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `covids`
--
ALTER TABLE `covids`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer_forms`
--
ALTER TABLE `customer_forms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `economicdevelopments`
--
ALTER TABLE `economicdevelopments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `eiddistributiongift2021s`
--
ALTER TABLE `eiddistributiongift2021s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `eiddistributiongift2022s`
--
ALTER TABLE `eiddistributiongift2022s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `emergenceyaids`
--
ALTER TABLE `emergenceyaids`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `executivecommittees`
--
ALTER TABLE `executivecommittees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `freebloodgroupings`
--
ALTER TABLE `freebloodgroupings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `freemaskdistributions`
--
ALTER TABLE `freemaskdistributions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `healthcares`
--
ALTER TABLE `healthcares`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `iftarwithmaanibashes`
--
ALTER TABLE `iftarwithmaanibashes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `mission_visions`
--
ALTER TABLE `mission_visions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `running_projects`
--
ALTER TABLE `running_projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `skilldevelopments`
--
ALTER TABLE `skilldevelopments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sunamganjfloodreliefprojects`
--
ALTER TABLE `sunamganjfloodreliefprojects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
