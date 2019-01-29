-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2018 at 03:22 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `psychcare`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_appointment`
--

CREATE TABLE `data_appointment` (
  `schedule_ID` int(11) NOT NULL,
  `emp_ID` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `date_available` date NOT NULL,
  `time_start` time NOT NULL,
  `time_end` time NOT NULL,
  `contact_no` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `appointment_status` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `student_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `data_appointment`
--

INSERT INTO `data_appointment` (`schedule_ID`, `emp_ID`, `date_available`, `time_start`, `time_end`, `contact_no`, `appointment_status`, `student_ID`) VALUES
(1, '11111111', '2018-09-13', '05:00:00', '18:00:00', '09239438909', 'occupied', 15106007),
(3, '11111111', '2018-09-18', '10:30:00', '17:30:00', '09090909090', 'occupied', 15106007),
(4, '11111111', '2018-09-20', '10:30:00', '12:00:00', '21212121212', 'occupied', 15106007),
(5, '11111111', '2018-10-12', '13:00:00', '14:00:00', '09258551050', 'occupied', 15106007),
(16, '11111111', '2018-10-24', '12:00:00', '13:00:00', '', 'vacant', 0),
(17, '11111111', '2018-10-26', '12:00:00', '13:00:00', '', 'vacant', 0),
(18, '11111111', '2018-10-25', '13:30:00', '14:30:00', '', 'vacant', 0),
(19, '11111111', '2018-10-27', '12:30:00', '13:30:00', '', 'vacant', 0),
(20, '11111111', '2018-10-27', '16:30:00', '17:30:00', '', 'vacant', 0),
(21, '11111111', '2018-10-27', '08:00:00', '17:00:00', '', 'vacant', 0),
(22, '11111111', '2018-10-26', '17:00:00', '18:00:00', '', 'vacant', 0);

-- --------------------------------------------------------

--
-- Table structure for table `data_class`
--

CREATE TABLE `data_class` (
  `id` int(11) NOT NULL,
  `class_ID` int(11) NOT NULL,
  `student_ID` int(8) NOT NULL,
  `emp_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data_employee`
--

CREATE TABLE `data_employee` (
  `emp_ID` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `emp_FN` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `emp_LN` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `emp_Email` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `emp_Contact` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `emp_Privilege` int(1) NOT NULL,
  `emp_Password` varchar(130) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `data_employee`
--

INSERT INTO `data_employee` (`emp_ID`, `emp_FN`, `emp_LN`, `emp_Email`, `emp_Contact`, `emp_Privilege`, `emp_Password`) VALUES
('11111111', 'Guidance', 'One', 'guidance@psychcare.com', '', 1, 'fc85af604dc9168bed9fbe5c70dc3bf089bd336259961e14ddf2ddfdad193bfea267747164d3aa72fc12ce6184a3936b2954b83d6d1b6b86edf62705775369a8'),
('14104068', 'Darlene', 'Guaca', 'ahrmanpactores@yahoo.com', '', 1, '332b7060613cb049b2ec75f4656f4d87fbdbaa14043215a85a20ff326106a5f59ba416e62bf5fc100c7f7fa650761010e8ee542f8fd24e3b95add3780d9f4066'),
('22222222', 'Teacher', 'One', 'teacher@psychcare.com', '', 2, '8c76c77c27a79fac5cd3a25c6a4469724228ac78ac6ad36cb370abff4c731473ee13328a103e9f19bf546bee766e82ba688154057c54784bc0db1f07e7e51129'),
('32131222', 'Guidacne', 'Guidance', 'Guidances@gmail.com', '', 1, 'fc85af604dc9168bed9fbe5c70dc3bf089bd336259961e14ddf2ddfdad193bfea267747164d3aa72fc12ce6184a3936b2954b83d6d1b6b86edf62705775369a8'),
('3213123123', 'Guidacne', 'Guidance', 'Guidances@gmail.com', '129381293', 1, '68fe35971d5972b796269ca11d60f59b56bf4db09a0a5cfc5d0860dc1b8f78c9dc0491e7e12b1d7fedd6c23038f7c54093d11a19893379c8c1030ade8867f30a'),
('Admin', 'admin', 'admin', 'admin@psychcare.com', '', 3, '52e996dbe9c290c09a6486cd028de90bfec6981a43f56ef0957a2ebaac8602355d7e5f6f86313d39f2ef85f0fa6e1a0f4eb0dcd2afc37bf40cfefde4df9ceeea');

-- --------------------------------------------------------

--
-- Table structure for table `data_history`
--

CREATE TABLE `data_history` (
  `history_ID` int(11) NOT NULL,
  `student_ID` int(11) DEFAULT NULL,
  `total_personality` int(11) DEFAULT NULL,
  `total_learner` int(11) DEFAULT NULL,
  `total_disorder` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `data_history`
--

INSERT INTO `data_history` (`history_ID`, `student_ID`, `total_personality`, `total_learner`, `total_disorder`) VALUES
(1, 15106007, NULL, NULL, 12),
(2, 15106007, NULL, NULL, 9),
(3, 15106007, NULL, NULL, 4),
(4, 15106007, NULL, NULL, 19),
(5, 15106007, NULL, NULL, 26);

-- --------------------------------------------------------

--
-- Table structure for table `data_notification`
--

CREATE TABLE `data_notification` (
  `notif_ID` int(11) NOT NULL,
  `user_ID` int(11) NOT NULL,
  `notif_message` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `date_notified` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data_student`
--

CREATE TABLE `data_student` (
  `student_ID` int(11) NOT NULL,
  `student_FN` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `student_LN` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `course_code` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `year_code` int(11) NOT NULL,
  `student_Email` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `student_Contact` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `student_Password` varchar(130) COLLATE utf8_unicode_ci NOT NULL,
  `user_Privilege` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `data_student`
--

INSERT INTO `data_student` (`student_ID`, `student_FN`, `student_LN`, `course_code`, `year_code`, `student_Email`, `student_Contact`, `student_Password`, `user_Privilege`) VALUES
(14104068, '', '', 'ICT', 1, '', '', '332b7060613cb049b2ec75f4656f4d87fbdbaa14043215a85a20ff326106a5f59ba416e62bf5fc100c7f7fa650761010e8ee542f8fd24e3b95add3780d9f4066', NULL),
(15106007, '', 'Albarico', 'ICT', 1, '', '', '332b7060613cb049b2ec75f4656f4d87fbdbaa14043215a85a20ff326106a5f59ba416e62bf5fc100c7f7fa650761010e8ee542f8fd24e3b95add3780d9f4066', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `data_teacher`
--

CREATE TABLE `data_teacher` (
  `class_ID` int(11) NOT NULL,
  `course_code` enum('ICT','IT','CS','IS') COLLATE utf8_unicode_ci NOT NULL,
  `class_day` enum('MW','MWF','TTH','TThSat','SatSun','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday') COLLATE utf8_unicode_ci NOT NULL,
  `time_start` time NOT NULL,
  `time_end` time NOT NULL,
  `emp_ID` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `course_title` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `data_teacher`
--

INSERT INTO `data_teacher` (`class_ID`, `course_code`, `class_day`, `time_start`, `time_end`, `emp_ID`, `course_title`) VALUES
(23, 'ICT', 'MW', '00:00:00', '00:00:00', '5555555', ''),
(24, 'ICT', '', '00:00:00', '00:00:00', '5555555', '123'),
(25, 'CS', 'TThSat', '12:30:00', '13:30:00', '22222222', '10011');

-- --------------------------------------------------------

--
-- Table structure for table `survey_disorder`
--

CREATE TABLE `survey_disorder` (
  `disorder_id` int(50) NOT NULL,
  `disorder_question` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `survey_disorder`
--

INSERT INTO `survey_disorder` (`disorder_id`, `disorder_question`) VALUES
(1, 'Little interest or pleasure in doing things.'),
(2, 'Feeling down, depressed, or hopeless'),
(3, 'Trouble falling or staying asleep, or sleeping too much'),
(4, 'Feeling tired or having little energy'),
(5, 'Poor appetite or overeating'),
(6, 'Feeling bad about yourself - or that you are a failure or have let yourself or your family down'),
(7, 'Trouble concentrating on things, such as reading the newspaper or watching television'),
(8, 'Moving or speaking so slowly that other people could have noticed'),
(9, 'Thoughts that you would be better off dead, or of hurting yourself'),
(10, 'If you checked off any problems, how difficult have these problems made it for you at work, home, or');

-- --------------------------------------------------------

--
-- Table structure for table `survey_dream`
--

CREATE TABLE `survey_dream` (
  `dream_id` int(50) NOT NULL,
  `dream_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `dream_meaning` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `survey_dream`
--

INSERT INTO `survey_dream` (`dream_id`, `dream_name`, `dream_meaning`) VALUES
(1, 'ACCESORIES	', '- to dream of accessorizing yourself suggests that you are feeling incomplete. Something is missing in your life.');

-- --------------------------------------------------------

--
-- Table structure for table `survey_learner`
--

CREATE TABLE `survey_learner` (
  `learner_id` int(11) NOT NULL,
  `learner_question` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `survey_personality`
--

CREATE TABLE `survey_personality` (
  `personality_id` int(50) NOT NULL,
  `personality_question` int(100) NOT NULL,
  `choices` enum('Everytime','Often','Sometimes','Rarely','Never') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_appointment`
--
ALTER TABLE `data_appointment`
  ADD PRIMARY KEY (`schedule_ID`);

--
-- Indexes for table `data_class`
--
ALTER TABLE `data_class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_employee`
--
ALTER TABLE `data_employee`
  ADD PRIMARY KEY (`emp_ID`);

--
-- Indexes for table `data_history`
--
ALTER TABLE `data_history`
  ADD PRIMARY KEY (`history_ID`);

--
-- Indexes for table `data_notification`
--
ALTER TABLE `data_notification`
  ADD PRIMARY KEY (`notif_ID`);

--
-- Indexes for table `data_student`
--
ALTER TABLE `data_student`
  ADD PRIMARY KEY (`student_ID`);

--
-- Indexes for table `data_teacher`
--
ALTER TABLE `data_teacher`
  ADD PRIMARY KEY (`class_ID`);

--
-- Indexes for table `survey_disorder`
--
ALTER TABLE `survey_disorder`
  ADD PRIMARY KEY (`disorder_id`);

--
-- Indexes for table `survey_dream`
--
ALTER TABLE `survey_dream`
  ADD PRIMARY KEY (`dream_id`);

--
-- Indexes for table `survey_learner`
--
ALTER TABLE `survey_learner`
  ADD PRIMARY KEY (`learner_id`);

--
-- Indexes for table `survey_personality`
--
ALTER TABLE `survey_personality`
  ADD PRIMARY KEY (`personality_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_appointment`
--
ALTER TABLE `data_appointment`
  MODIFY `schedule_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `data_class`
--
ALTER TABLE `data_class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_history`
--
ALTER TABLE `data_history`
  MODIFY `history_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `data_teacher`
--
ALTER TABLE `data_teacher`
  MODIFY `class_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `survey_disorder`
--
ALTER TABLE `survey_disorder`
  MODIFY `disorder_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `survey_dream`
--
ALTER TABLE `survey_dream`
  MODIFY `dream_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `survey_personality`
--
ALTER TABLE `survey_personality`
  MODIFY `personality_id` int(50) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
