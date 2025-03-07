-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2025 at 02:39 AM
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
-- Database: `kv_dental`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_appointments`
--

CREATE TABLE `tbl_appointments` (
  `patient_id` int(11) NOT NULL,
  `timeSlot` int(11) NOT NULL,
  `appointment_date` date DEFAULT NULL,
  `service` varchar(100) NOT NULL,
  `IsNewPatient` enum('New Patient','Follow-up Schedule') NOT NULL,
  `hmo` varchar(191) NOT NULL,
  `patient_name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(191) NOT NULL,
  `note` varchar(255) NOT NULL,
  `reason_visit` varchar(255) NOT NULL,
  `urgency_lvl` enum('Non-urgent','Urgent','Emergency') NOT NULL,
  `status_upt` enum('Waiting','In-progress','Completed') NOT NULL,
  `read_status` tinyint(4) NOT NULL,
  `dob` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_appointments`
--

INSERT INTO `tbl_appointments` (`patient_id`, `timeSlot`, `appointment_date`, `service`, `IsNewPatient`, `hmo`, `patient_name`, `email`, `age`, `gender`, `phone`, `address`, `note`, `reason_visit`, `urgency_lvl`, `status_upt`, `read_status`, `dob`, `created_at`) VALUES
(273, 2, '2025-02-20', 'Cosmetic Dentistry', 'New Patient', 'No HMO', 'Reese Allison Mabait ', 'varondeguzman02@gmail.com', 8, 'Female', '09848476224', 'Tres Mashon Blk 8 Lot 2 Phase 2 Pinagsama Taguig', '', '', 'Non-urgent', 'Waiting', 0, '2016-02-18', '2025-02-13 01:24:20'),
(274, 2, '2025-02-25', 'Dentures', 'New Patient', 'Maxicare Healthcare Corp.', 'Yves Ahron Garcia', '', 10, 'Male', '09726653332', 'Blk 8 Lot 2 Phase 2 Pinagsama Taguig', '', '', 'Non-urgent', 'Waiting', 0, '2014-06-13', '2025-02-13 01:27:34'),
(275, 3, '2025-02-20', 'Crowns & bridges', 'New Patient', 'No HMO', 'Jannah Nalson', '', 7, 'Female', '09872325419', 'Kalraran SBG Phase 2 Pinagsama taguig City', '', '', 'Non-urgent', 'Waiting', 0, '2017-03-04', '2025-02-13 01:29:13'),
(276, 4, '2025-02-20', 'Fluoride treatment', 'New Patient', 'No HMO', 'Neil Andre Bayona', '', 13, 'Male', '09872325419', 'Igorot Ibl Heb Blk 8 Lot 2 Phase 2 Pinagsama Taguig', '', '', 'Non-urgent', 'Waiting', 0, '2011-03-13', '2025-02-13 01:29:58'),
(277, 2, '2025-02-27', 'Tooth filling', 'New Patient', 'No HMO', 'Reggor Abodoso', 'leonairinco03@gmail.com', 21, 'Male', '09312931293', 'Blk 7 Lot 2 Phase 2 Arogon Basbas', 'Toothbrush once a day', 'Gum Ache', 'Emergency', 'Waiting', 0, '2025-02-13', '2025-02-13 01:34:12'),
(279, 0, NULL, 'Orthodontic braces', 'New Patient', 'No HMO', 'Amoron Agron', 'lloydlanguido@gmail.com', 21, 'Male', '09312931293', 'ihayte AMA blk 6 lot 2 phase 2', '', 'Tooth ache and gum pain', 'Emergency', 'Waiting', 0, '2025-02-20', '2025-02-13 01:35:17'),
(280, 0, NULL, 'Cleaning & polishing', 'New Patient', 'No HMO', 'Sibal Christian Halolo', 'lloydlanguido@gmail.com', 21, 'Prefer not to say', '09312931293', 'Blk 7 Lot 2 Phase 2 Arogon Basbas', '', 'Tooth Pain and gum ache', 'Emergency', 'Waiting', 0, '2014-03-05', '2025-02-13 01:37:01');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blog`
--

CREATE TABLE `tbl_blog` (
  `id` int(11) NOT NULL,
  `title` varchar(191) NOT NULL,
  `image` varchar(191) NOT NULL,
  `description` mediumtext NOT NULL,
  `links` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_blog`
--

INSERT INTO `tbl_blog` (`id`, `title`, `image`, `description`, `links`) VALUES
(55, 'Overcoming your fear', '1710065705.jpg', 'Mild fear over seeing the dentist is best remedied by going to the dentist instead of avoiding it. In the case of significant dental work, you may ask to be consciously sedated so you’ll feel less anxious', 'https://www.facebook.com/photo/?fbid=231428019655163&set=pb.100083638991034.-2207520000'),
(56, '8 unit Emax Veneers', '1710066135.jpg', 'A durable near match for natural teeth.', 'https://www.facebook.com/photo/?fbid=197234023074563&set=pb.100083638991034.-2207520000'),
(57, 'Pain or no pain', '1739408462.jpg', 'Signs that you should extract your 3rd molar/wisdom tooth. ', 'https://www.facebook.com/photo/?fbid=179738624824103&set=pb.100083638991034.-2207520000');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_chart`
--

CREATE TABLE `tbl_chart` (
  `chart_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_expenses`
--

CREATE TABLE `tbl_expenses` (
  `bill_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `billName` varchar(255) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_expenses`
--

INSERT INTO `tbl_expenses` (`bill_id`, `date`, `billName`, `amount`, `image`) VALUES
(218, '2024-05-15 04:53:00', 'Manila water bill', 1300.00, '66d3672b5df789.16973526.png'),
(219, '2024-05-15 04:53:00', 'E-bill', 3000.00, '66d3672b5f44b1.89332752.png'),
(220, '2024-05-15 04:53:00', 'E-bill WIFI', 300.00, '66d3672b603b58.74692384.png'),
(221, '2024-06-12 02:55:00', 'Water bill', 5000.00, '66d3674a9bfc54.19774628.png'),
(222, '2024-07-25 02:56:00', 'Brace stock', 4000.00, '66d3677325ddc0.86663907.png'),
(223, '2024-08-07 02:56:00', 'WAT', 2555.00, '66d3678a2add98.22272636.png'),
(224, '2025-02-12 15:24:00', 'Water Bill', 2321.00, '67ad3bf76797c4.71804238.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `message` varchar(191) NOT NULL,
  `rate` int(5) NOT NULL,
  `msg_submitted` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`id`, `name`, `email`, `message`, `rate`, `msg_submitted`) VALUES
(74, 'Julie Ann K. Serbeso', 'serbesoann@gmail.com', 'We had a very pleasant experience with Dr. Meena and her staff. My daughter was very anxious about the appointment and any procedure, but Dr. Meena was very patient with her and spend a lot o', 4, '2024-04-02 00:22:11'),
(75, 'Joseph B. Apollo', 'appoloj24@gmail.com', 'I desperately needed dentures and I am on MassHealth. A cloud hangs over the people who are on MassHealth and the providers of their services', 3, '2024-04-02 00:22:43'),
(77, 'Susan Mara', 'marasusan77@gmail.com', 'Excellent doctor!!!Very thorough and caring. I\\\'m terribly afraid of the dentist and she\\\'s very sensitive to that and goes the extra mile to make you feel comfortable. Love her!', 5, '2024-04-02 00:23:48');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_syrulli`
--

CREATE TABLE `tbl_syrulli` (
  `id` int(11) NOT NULL,
  `image` varchar(191) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_syrulli`
--

INSERT INTO `tbl_syrulli` (`id`, `image`, `created_at`) VALUES
(3, '1725005151.jpg', '2024-08-30 08:05:51'),
(4, '1725134782.jpg', '2024-08-31 20:06:22'),
(5, '1725134788.png', '2024-08-31 20:06:28'),
(6, '1725134794.jpg', '2024-08-31 20:06:34'),
(7, '1725134803.jpg', '2024-08-31 20:06:43');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_timeslots`
--

CREATE TABLE `tbl_timeslots` (
  `id` int(11) NOT NULL,
  `time_labels` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_timeslots`
--

INSERT INTO `tbl_timeslots` (`id`, `time_labels`) VALUES
(1, '09:00am - 10:00am'),
(2, '10:00am - 11:00am'),
(3, '11:00am - 12:00pm'),
(4, '12:00pm - 01:00pm'),
(5, '01:00pm - 02:00pm'),
(6, '02:00pm - 03:00pm'),
(7, '03:00pm - 04:00pm'),
(8, '04:00pm - 05:00pm'),
(9, '05:00pm - 06:00pm');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_treatment_record`
--

CREATE TABLE `tbl_treatment_record` (
  `record_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `procedure_description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `dob` date NOT NULL,
  `phone` varchar(15) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `reset_token` varchar(255) DEFAULT NULL,
  `reset_token_expire` datetime DEFAULT NULL,
  `role_as` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `name`, `email`, `dob`, `phone`, `password`, `reset_token`, `reset_token_expire`, `role_as`, `created_at`, `updated_at`) VALUES
(1, 'Neil Bayona', 'lloydlanguido@gmail.com', '1970-01-02', '09326073245', '$2y$10$nYgoBM86LwATjeQ5dBGRV.eYNmJkwGYuC3In62RA9VGU9jWT0y2i.', NULL, NULL, 1, '2024-01-21 10:03:21', '2024-08-31 10:16:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_appointments`
--
ALTER TABLE `tbl_appointments`
  ADD PRIMARY KEY (`patient_id`);

--
-- Indexes for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_chart`
--
ALTER TABLE `tbl_chart`
  ADD PRIMARY KEY (`chart_id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `tbl_expenses`
--
ALTER TABLE `tbl_expenses`
  ADD PRIMARY KEY (`bill_id`);

--
-- Indexes for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_syrulli`
--
ALTER TABLE `tbl_syrulli`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_timeslots`
--
ALTER TABLE `tbl_timeslots`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_treatment_record`
--
ALTER TABLE `tbl_treatment_record`
  ADD PRIMARY KEY (`record_id`),
  ADD KEY `FOREIGN KEY` (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_appointments`
--
ALTER TABLE `tbl_appointments`
  MODIFY `patient_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=281;

--
-- AUTO_INCREMENT for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `tbl_chart`
--
ALTER TABLE `tbl_chart`
  MODIFY `chart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=339;

--
-- AUTO_INCREMENT for table `tbl_expenses`
--
ALTER TABLE `tbl_expenses`
  MODIFY `bill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=225;

--
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `tbl_syrulli`
--
ALTER TABLE `tbl_syrulli`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_timeslots`
--
ALTER TABLE `tbl_timeslots`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=618;

--
-- AUTO_INCREMENT for table `tbl_treatment_record`
--
ALTER TABLE `tbl_treatment_record`
  MODIFY `record_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_chart`
--
ALTER TABLE `tbl_chart`
  ADD CONSTRAINT `tbl_chart_ibfk_1` FOREIGN KEY (`id`) REFERENCES `tbl_appointments` (`patient_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_treatment_record`
--
ALTER TABLE `tbl_treatment_record`
  ADD CONSTRAINT `FOREIGN KEY` FOREIGN KEY (`id`) REFERENCES `tbl_appointments` (`patient_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
