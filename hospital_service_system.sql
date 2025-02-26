-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2025 at 06:01 PM
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
-- Database: `hospital_service_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `nurse_requests`
--

CREATE TABLE `nurse_requests` (
  `id` int(11) NOT NULL,
  `request_type` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `priority` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nurse_requests`
--

INSERT INTO `nurse_requests` (`id`, `request_type`, `description`, `priority`) VALUES
(1, 'Emergency', 'Patient needs urgent assistance', 'High'),
(2, 'Routine Checkup', 'Daily vital check for patient', 'Medium'),
(3, 'Medication Request', 'Need additional painkillers for patient', 'High');

-- --------------------------------------------------------

--
-- Table structure for table `pharmacist_requests`
--

CREATE TABLE `pharmacist_requests` (
  `id` int(11) NOT NULL,
  `patient_id` varchar(255) NOT NULL,
  `medication_name` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `urgency` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pharmacist_requests`
--

INSERT INTO `pharmacist_requests` (`id`, `patient_id`, `medication_name`, `quantity`, `urgency`) VALUES
(1, 'P001', 'Paracetamol', 2, 'High'),
(2, 'P002', 'Antibiotics', 5, 'Medium'),
(3, 'P003', 'Cough Syrup', 1, 'Low');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nurse_requests`
--
ALTER TABLE `nurse_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pharmacist_requests`
--
ALTER TABLE `pharmacist_requests`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nurse_requests`
--
ALTER TABLE `nurse_requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pharmacist_requests`
--
ALTER TABLE `pharmacist_requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
