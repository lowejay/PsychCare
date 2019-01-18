-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2018 at 10:29 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

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
  `appointment_ID` int(11) NOT NULL,
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

INSERT INTO `data_appointment` (`appointment_ID`, `emp_ID`, `date_available`, `time_start`, `time_end`, `contact_no`, `appointment_status`, `student_ID`) VALUES
(1, '11111111', '2018-11-30', '10:30:00', '12:00:00', '63919912343', 'completed', 15106007),
(2, '11111111', '2018-11-30', '16:00:00', '17:00:00', '63919912343', 'vacant', 0);

-- --------------------------------------------------------

--
-- Table structure for table `data_class_list`
--

CREATE TABLE `data_class_list` (
  `id` int(11) NOT NULL,
  `class_ID` int(11) NOT NULL,
  `student_ID` int(8) NOT NULL,
  `emp_ID` varchar(512) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data_class_sched`
--

CREATE TABLE `data_class_sched` (
  `class_ID` int(11) NOT NULL,
  `course_code` enum('ICT','IT','CS','IS') COLLATE utf8_unicode_ci NOT NULL,
  `class_day` enum('MW','MWF','TTH','TThSat','SatSun','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday') COLLATE utf8_unicode_ci NOT NULL,
  `time_start` time NOT NULL,
  `time_end` time NOT NULL,
  `emp_ID` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `course_title` varchar(10) COLLATE utf8_unicode_ci NOT NULL
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
('22222222', 'Teacher', 'One', 'teacher@psychcare.com', '', 2, '8c76c77c27a79fac5cd3a25c6a4469724228ac78ac6ad36cb370abff4c731473ee13328a103e9f19bf546bee766e82ba688154057c54784bc0db1f07e7e51129'),
('Admin', 'admin', 'admin', 'admin@psychcare.com', '', 3, '52e996dbe9c290c09a6486cd028de90bfec6981a43f56ef0957a2ebaac8602355d7e5f6f86313d39f2ef85f0fa6e1a0f4eb0dcd2afc37bf40cfefde4df9ceeea');

-- --------------------------------------------------------

--
-- Table structure for table `data_history`
--

CREATE TABLE `data_history` (
  `history_ID` int(11) NOT NULL,
  `history_date` date NOT NULL,
  `student_ID` int(11) DEFAULT NULL,
  `score_personality` int(11) DEFAULT NULL,
  `score_learner` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `score_psychological` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `data_history`
--

INSERT INTO `data_history` (`history_ID`, `history_date`, `student_ID`, `score_personality`, `score_learner`, `score_psychological`) VALUES
(1, '2018-11-29', 15106007, NULL, NULL, 40),
(2, '2018-11-29', 15106007, NULL, NULL, 15),
(3, '2018-11-29', 15106007, NULL, NULL, 40),
(4, '2018-11-29', 15106007, NULL, NULL, 40),
(5, '2018-11-29', 15106007, NULL, NULL, 40),
(6, '2018-12-01', 15106007, NULL, 'Auditory', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `data_notification`
--

CREATE TABLE `data_notification` (
  `notif_ID` int(11) NOT NULL,
  `student_ID` int(11) NOT NULL,
  `emp_ID` int(11) NOT NULL,
  `notif_message` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `notif_date` date NOT NULL
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
(15106007, 'Louie Jay', 'Albarico', 'ICT', 4, 'louiealbarico@gmail.com', '', '332b7060613cb049b2ec75f4656f4d87fbdbaa14043215a85a20ff326106a5f59ba416e62bf5fc100c7f7fa650761010e8ee542f8fd24e3b95add3780d9f4066', NULL);

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
(8, 'A', ' To see the letter \"A\" in your dream represents the beginning of a new stage. You are moving on to something new and grand. Alternatively, the letter \"A\" invokes feelings of superiority and grandeur. It may indicate the name or initial of a person. '),
(9, 'ABALONE', 'To see or eat abalone in your dream indicates a transitional period in your life. The symbol may also be a play on words to indicate feelings of \"loneliness\".'),
(10, 'ABANDONMENT', 'To dream that you are abandoned suggests that it is time to leave behind past feelings and characteristics that are hindering your growth. Let go of your old attitudes. A more direct and literal interpretation of this dream indicates you have a fear of being deserted, abandoned, or even betrayed. It may stem from a  recent loss or a fear of losing a loved one. The fear of abandonment may manifest itself into your dream as part of the healing process and dealing with losing a loved one. It may al'),
(11, 'ABBREVIATION', 'To see abbreviations in your dream may represent the initials of someone in your life. The abbreviations could stand for an organization or a common acronym or it may spell out some hidden message or advice. The dreaming mind likes to make use of puns, as well as shorthand messages. For example, \"CD\" could be a pun on a \"seedy\" situation. \"AA\" could stand for Alcoholics Anonymous and thus point to the dangers or your excesses and negative behaviors. \"Inc\" may represent an \"inkling\", hunch or sus'),
(12, 'ABDOMEN', 'To see your abdomen in a dream refers to your natural instincts and repressed emotions. There is something in your real life that you \"cannot stomach\" or have difficulties accepting. You need to get it out of your system. Alternatively, the dream symbol may be strictly physiological and you may just be experiencing constipation or indigestion.  To dream that your abdomen is exposed represents issues you have with trust and feelings of vulnerability. You are expressing your primal emotions and in'),
(13, 'ABORTION', 'To dream that you have an abortion suggests that you are hindering and blocking your own growth. You may be hesitant in pursuing a new direction in your life due to fear, pressure, personal conflict or moral obligation. The dream may also be a reflection of your own real-life abortion and thus serves as  a way of healing from the trauma and working towards self-acceptance. Alternatively, this dream may also be a message for you to take care and look after your health. To dream that someone has a'),
(14, 'ABOVE', 'To see something above you in your dream suggests that you need to set your goals higher. Aim high! Alternatively, the dream indicates that you are feeling inferior or inadequate.'),
(15, 'ABROAD', 'To dream of being or going abroad  indicates unbalance and chaos in your current situation and condition. Consequently, your dream may represent your need for a change in scenery or a desire to escape from a current situation. You need to make some drastic changes in your life. Alternatively,  the dream may suggest that you need to expand your horizons or experience a new sense of spirituality.'),
(16, 'ABSENT', 'To dream that someone is absent, especially if you expect to find them, suggests that you are looking for something that is already lost to you. Alternatively, you may be looking to fill a void in your life. Something is missing from your life.  '),
(17, 'ABSORB', 'To be absorbed in whatever you are doing suggests that you may be too focused on your own thing and risk alienating others around you. The dream may also be a metaphor that you need to integrate and adapt to your various surroundings.  '),
(18, 'ABUSE', 'To dream you are abusing someone suggests that your past actions will come back to haunt you. You may be expressing some regret or remorse over your actions. To dream you are being verbally or physically abused suggests that you are feeling victimized in  a waking situation. You are being taking advantage of.   Dreaming of animals being abused indicates that your own primal desires are being suppressed. You are unable to fully express an important part of who you are. Alternatively, the dream re'),
(19, 'ACADEMY', 'To dream of an academy signifies new friendships and opportunities.'),
(20, 'ACCELERATOR', 'To see an accelerator in your dream indicates that you will achieve your goals through your own efforts. The dream may also be telling you to slow down. To dream that the accelerator is jammed or broken indicates a loss of control in some aspect of your life. You maybe trying to rush through things.'),
(21, 'ACCENT', 'To speak with an accent in your dream suggests that you are having difficulties conveying your thoughts. Consider how you feel about the accent. If you feel the accent makes you stand out in a negative way, then it signifies feelings of insecurities. If the accent makes you stand out in a positive way, then it symbolizes an air of confidence.  To hear someone speaking with an accent in your dream represents something familiar yet different. You are getting the gist of a message, but you still do'),
(22, 'ACCEPTANCE', 'To dream about acceptance indicates issues of self-esteem and measuring up to the expectations of others. There is a waking situation where you are seeking acceptance and wanting to be a part of. '),
(23, 'ACCESSORIES', 'To dream of accessorizing yourself suggests that you are feeling incomplete. Something is missing in your life. '),
(24, 'ACCIDENT', 'To dream that you are in an accident signifies pent-up guilt in which you are subconsciously punishing yourself over. Perhaps you are not proud of something you have done. Alternatively, the accident may symbolize an error or mistake you have made. Accident dreams also represent your fears of being in an actual, physical accident. You may simply be nervous about getting behind the wheel. Or the dream is trying to warn you of some accident.'),
(25, 'ACCUSE', 'To dream that you are being accused of something indicates overwhelming feelings of guilt.  It may also mean that you are having some doubts about yourself and the choices you are making. To dream that you accuse others signifies disagreements and dissension with those around you.'),
(26, 'ACHIEVEMENT', 'To dream of an achievement denotes that you will be greatly satisfied with the outcome of a situation or project. The bigger the achievement, the greater the satisfaction.  '),
(27, 'B', 'To see the letter B in your dream is a pun on \"to be\". Perhaps the dream is telling you to \"let it be\".'),
(28, 'BABY', 'To see a baby in your dream signifies innocence, warmth and new beginnings. Babies symbolize something in your own inner nature that is pure, vulnerable, helpless and/or uncorrupted. If you dream that the baby is smiling at you, then it suggests that you are experiencing pure joy. You do not ask for much to make you happy. If you find a baby in your dream, then it suggests that you have acknowledged your hidden potential. If you dream that you forgot you had a baby, then it suggests that you are'),
(30, 'BACHELOR', 'To meet a bachelor in your dream suggests that you are seeking freedom in your love life.  For a man to dream that he is a bachelor indicates that he is having difficulty with gaining his own sense of self or freedom in a relationship. Alternatively, the bachelor represents your masculine side.'),
(31, 'BAD', 'To dream that you are feeling bad suggests that you are off balance, off centered, or even feeling worthless. '),
(32, 'BACK-BITING', 'To dream of back-biting about someone warns that you will cause harm to someone if you continue on your current course. Think twice over your actions and its consequences.'),
(33, 'BAG', 'To see a bag in your dream represents the responsibilities that you carry. If the bag is ripped or torn, then it indicates that you are carrying a lot of burden. The symbol may be a metaphor for an \"old bag\" and refer to someone who is old.'),
(34, 'BALANCE', 'To dream that you lose your balance suggests that you are having difficulty weighing your options and choices in some situation. '),
(35, 'BALL', 'To see or play with a ball in your dream symbolizes completeness and wholeness. It may also indicate that you need to be more in tune with the inner child within. '),
(36, 'BALLERINA', 'To dream that you are a ballerina suggests that you are moving through the obstacles of your life effortlessly. You feel unrestricted. It is also a symbol of innocence, frailty, and vulnerability. '),
(37, 'BALLET', 'To dream that you are watching a ballet symbolizes balance, cooperation, and harmony.'),
(38, 'BALLOON', 'To see balloons in your dream indicate declining hopes and disappointments in your search for love. A situation in your life will take a turn downward. Balloons also represent arrogance and an inflated opinion of yourself. '),
(39, 'BANANAS', 'To see bananas in your dream may be a metaphor for repressed sexual urges and desires. It is a phallic symbol and represents masculine sexuality. To dream that you are eating bananas indicate that your hard work  will be met with little rewards or gains. '),
(40, 'BEGGAR', 'To dream that you are helping a beggar indicates that you will overcome your hardships and inadequacies.    '),
(41, 'BEHIND', 'To dream that you are behind someone suggests that you are offering your support and encouragement for someone.  Alternatively, it refers to emerging subconscious thoughts and feelings.'),
(42, 'BED', 'To see your bed in your dream represents your intimate self and discovery of your sexuality.  If you are sleeping in your own bed, then it denotes security and restoration of your mind. You may be looking for domestic bliss, for peace or for some form of escape. '),
(43, 'BEACH', 'To dream that you are on the beach and looking out toward the ocean indicates unknown and major changes that are occurring in your life. Consider the state of the ocean, whether it is calm, pleasant, forbidding, etc.'),
(44, 'BASKETBALL', 'To see a basketball in your dream suggests that you need to make the first move. You also need to concentrate and focus on your goals.'),
(45, 'C', 'To see the letter \"C\" in your dream symbolizes being average. It may also be a pun on \"seeing\". The dream is drawing your attention to something that you need to see or take notice. Pay attention!Alternatively, it may indicate the name or initial of a person.'),
(46, 'CABBAGE', 'To see or eat cabbage in your dream suggests that you should not waste time with petty things in your life.'),
(47, 'CABINET', 'To see a cabinet in your dream symbolizes the female body and/or the womb. Alternatively, you may be hiding some family or personal secret. Consider the contents and condition of the cabinet for more clues. '),
(48, 'CABLE', 'To see a cable in your dream represents your stamina and durability. If the cable is frayed or broken, then it signifies a lack of strength.'),
(49, 'CACTUS', 'To see a cactus in your dream suggests that you are feeling invaded, that your space is being crowded into and that you are being suffocated.  The prickly spines of the cactus represent the boundary you are trying to establish between your personal and private. '),
(50, 'CAFE', 'To dream that you are at a cafe represents your social life. The dream is telling you that it is time to call up old friends and catch up with what they are all up to.    '),
(51, 'CAFETERIA', 'To dream that you are in a cafeteria denotes that there may be a lot of issues \"eating\" you up inside.  '),
(52, 'CAKE', 'To see a cake in your dream indicates that you need to learn to share and allocate your workload instead of trying to do everything yourself.  Cakes also symbolize selfishness or the feeling of not getting your fair share. More positively, the dream may represent your accomplishments and achievements.'),
(53, 'CALAMARI', 'To dream that you are eating calamari indicates that you are feeling battered or beaten. However, you are tough.'),
(54, 'CALCULATOR', 'To see a calculator in your dream suggests that you need to thoroughly think through some problem and carefully evaluate your choices.  You need to lay out some sort of plan or outline. The symbol may also be a metaphor for someone who is \"calculating\", cunning and scheming.'),
(55, 'CALENDAR', 'To see a calendar in your dream represents the passing of time and past events. The dream may also be a reminder of a special event, appointment or important date in your waking life.  '),
(56, 'CALM', 'To dream that you are calm denotes a fulfilling life. You find contentment and satisfaction in what you have.'),
(57, 'CAMERA', 'To see a camera in your dream signifies your desires to cling on and/or live in the past. Alternatively, it may indicate that you need to focus on a particular situation. Perhaps you need to get a clearer picture or idea.'),
(58, 'CAMOUFLAGE', 'To dream that you are in camouflage suggests that you are hiding  your true self and feelings. You are concealing who you really are. Alternatively, there is a situation in your waking life that is making you want to blend into the background and not get noticed.'),
(59, 'CAMPING', 'To dream that you are camping indicates a need for relaxation and a long-deserved break.  You need to be more in touch with nature and go back to a more basic and simpler life. Alternatively, it refers to your social circle and support group. You are looking for a sense of belonging, but at the same time be self-sufficient and independent. '),
(60, 'CAMPUS', 'To dream that you are on a campus indicates your need to expand your thinking/knowledge and challenge yourself mentally.'),
(61, 'CANADA', 'To dream that you are in Canada depends on your own personal associations with the country. If you have never been to Canada, then you will need to draw on your own preconceptions and feelings of the country.  '),
(62, 'CANDLE', 'To see a burning candle in your dream signifies that good luck and hope will be coming your way in small and steady amounts. You are in a comfortable stage in your life and may be seeking spiritual enlightenment. Lit candles are also symbolic of intellect, enlightenment, awareness or the search for truth.'),
(63, 'D', 'To see the letter \"D\" in your dream signifies mediocrity. Alternatively, the letter D refers to receptiveness and joy. As a Roman Numeral, it could represent the number 500.'),
(64, 'DANCE', 'To dream that you are dancing signifies freedom from any constraints and restrictions. Your life is in balance and in harmony. Dancing also represents frivolity, happiness, gracefulness, sensuality and sexual desires. You need to incorporate these qualities in your waking life.'),
(65, 'DANGER', 'To dream that you are in danger suggests that you need to be more cautious in some aspect of  your life. Alternatively, your negativity and pessimistic attitude is causing you to be depressed about the future.'),
(66, 'DARKNESS', 'To dream that darkness comes upon you signifies failure in some work that you are attempting.  Darkness is synonymous with ignorance, the subconscious, evil, death, and fear of the unknown. If the sun breaks through the darkness, then you will overcome your failures. '),
(67, 'DEAD', 'To see or talk to the dead in your dream forewarns that you are being influenced by negative people and are hanging around the wrong crowd. This dream may also be a way for you to resolve your feelings with those who have passed on.'),
(68, 'DEATH', 'To dream about the death of a loved one suggests that you are lacking a certain aspect or quality that the loved one embodies. Ask yourself what makes this person special or what you like about them. It is that very quality that you are lacking in your own relationship or circumstances. Alternatively, the dream indicates that whatever that person represents has no part in your own life anymore. In particular, to dream about the death of your living parents indicates that you are undergoing a sig'),
(69, 'DEBT', 'To dream that you are in debt signifies imbalance, struggle, worry and trouble in some personal situation or business matter. Alternatively, it may indicate that you are putting too much demands of others.'),
(70, 'DEEP', 'To dream of something deep or a place of great depth represents things that you are avoiding or feelings that you are suppressing. Alternatively, the dream implies that there is more to something or someone that what you see on the surface.'),
(71, 'DEFEAT', 'To dream that you have been defeated indicates that you are headed in the wrong direction. You need to reevaluate the situation and rethink what is really best for you. Alternatively, the dream suggests that you need to learn from your experiences, even the negative ones.'),
(72, 'DEJA VU', 'To dream of Deja Vu indicates some unresolved issue which you are not addressing or are refusing to acknowledge. It may also represent a message or word of advice that you need to heed.'),
(73, 'DELAY', 'To experience a delay in your dream suggests that obstacles toward your goals are inevitable. '),
(74, 'DEMONS', 'To see demons in your dream indicates that you may be experiencing or inflicting fear, emotional distress or physical abuse in your waking life. Demons are also symbolic of ignorance, negative habits, and of your shadow self.'),
(75, 'DEPRESSION', 'To feel depressed in your dream refers to your inability to make connections. You are unable to see the causes of your problems and consequences of your decisions. '),
(76, 'DESERT', 'To dream that you are walking through a desert signifies loss and misfortune. You may be suffering from an attack on your reputation. Deserts are also symbolic of barrenness, loneliness and feelings of isolation and hopelessness. '),
(77, 'DESSERT', 'To see or eat a tasty dessert in your dream represents indulgence, celebration, reward, or temptation. You are enjoying the good things in life.'),
(78, 'DIAMOND', 'To see diamonds in your dream signify the wholeness of the Self. You may be finding clarity in matters that have been clouding you. Alternatively, it represents vanity, conceit, and your unchanging or unyielding nature. You may be distancing yourself from others. '),
(79, 'DINOSAUR', 'To see a dinosaur in your dream symbolizes an outdated attitude. You may need to discard your old ways of thinking and habits.'),
(80, 'DIPLOMA', 'To see or receive a diploma in your dream symbolizes completion and/or recognition for a job well done. '),
(81, 'DIRTY', 'To dream that you or something is dirty represents your anxieties and feelings toward sex. The dream stems from low self-esteem and feelings of being unworthy.  You need to purify your mind, heart and body. '),
(82, 'DISAPPEAR', 'To dream that people or objects are disappearing right before your eyes signify your anxieties and insecurities over the notion that  loved ones might disappear out of your life. You feel that you cannot depend on anyone and that you will end up alone. You need to work on your self-image and self-esteem. '),
(83, 'DAY', 'To dream of a sunny day symbolizes clarity and/or pleasantness.  You are seeing things clearly. To dream of a gloomy or cloudy day signifies sadness. If you dream of a particular day, then you may need to look closely at that day for any significance. '),
(84, 'D', 'To see the letter \"E\" in your dream implies ease and relaxation. The drug ecstasy is often referred to as \"E\".'),
(85, 'EAGLES', 'To see an eagle in your dream symbolizes nobility, pride, fierceness, freedom, superiority, courage,  and powerful intellectual ability. It also represents self-renewal and your connection with your spirituality. You will struggle fiercely and courageously to realize your highest ambitions and greatest desires. '),
(86, 'EARRINGS', 'To dream that you or someone is wearing earrings suggests that you need to listen more carefully and pay attention to a message that someone is conveying to you. In particular, to see or wear pearl earrings in your dream indicates that are being given some wise advice you should follow. Alternatively, pearl earrings may serve as a memory of a person in your life who wore them.'),
(87, 'EARTH', 'To notice the earth in your dream indicates that you need to be \"grounded\" and realistic. Perhaps your sense of stability and security is lacking. Consider the consistency of the earth for additional significance on how you are feeling. If the earth opens or separates, then it represents a project or relationship that you are afraid of falling into. '),
(88, 'EARTHQUAKE', 'To dream of an earthquake suggests that you are experiencing a major \"shake-up\" that is threatening your stability and foundation.  The dream highlights your insecurity, fears and sense of helplessness. Is there something in your life that you feel at \"fault\" for?    If you find cover from the quake, you will overcome these challenges.  If you become trapped or injured during the quake, you will suffer some sort of loss in your life.'),
(89, 'EATING', 'To dream that you are eating alone signifies loss, loneliness, and depression. You may feel rejected, excluded, and cut off from social/family ties. Eating may be a replacement for companionship and provide a form of comfort. Alternatively, eating alone reflects independent needs.'),
(90, 'ECHO', 'To hear or make an echo in your dream symbolizes your need to repeat yourself in order to be heard and for others to believe you. Pay attention to the power and impact of your own words. You are waiting and hoping for a reaction from those around you. It is also symbolic of the soul. '),
(91, 'ECLIPSE', 'To dream of an eclipse of the sun indicates self-doubt and fears of not achieving your goals. You feel you are being overshadowed and are underestimating your abilities. Your level of confidence is fading or lost. You may be undergoing some difficult times and unable to remain optimistic. '),
(92, 'EDITOR', 'To dream that you are an editor implies that you are censoring yourself and watching what you say. You are controlling your feelings.'),
(93, 'EDUCATION', 'To dream about your education symbolizes your desire for knowledge. You are on a higher level that you peers. '),
(94, 'EGG', 'To see or eat an egg in your dream symbolizes fertility, birth and your creative potential. Something new is about to happen. If the eggs are scrambled, then the dream represents your commitment on a set course. It may also mean that you need to accept the consequences of your actions. '),
(95, 'ELEPHANT', 'To see an elephant in your dream indicates that you need to be more patient or more understanding of others. Or perhaps there is a memory that you are holding on to for too long. You need to let go of the past. The elephant is also a symbol of power, strength, faithfulness and intellect. '),
(96, 'ELEVATOR', 'To dream that you are ascending in an elevator represents a rise to status and wealth. You may have risen to a higher level of consciousness and are looking at the world from an elevated viewpoint. If the elevator is moving upward in an out of control fashion or it crashes through the roof, then it indicates that you are being catapulted to a position of power in which you do not yet know how to deal with. '),
(97, 'EMOTIONS', 'Emotions expressed in dreams are a way for you to act out the feelings that you normally would not express if you were awake. The dream provides a \"safe\" outlet for these emotions instead of letting them get pent up. However if you feel of mix of emotions in your dream, especially if they are contradictory, then it means that your conscious and subconscious are in an emotional conflict.'),
(98, 'EMPEROR', 'To see an emperor in your dream represents completion and creativity. You are trying to maintain harmony and peace.'),
(99, 'EMPLOYEE', 'To see an employee in your dream symbolizes your waking relationship with them. You may be experiencing work difficulties or work-related stress. To dream that you have a new employee indicates that you are discovering a new aspect of yourself.'),
(100, 'ENCYCLOPEDIA', 'To dream of seeing or searching through encyclopedias symbolizes your pursuit for literary knowledge and the fine arts. Although these pursuits may not be financially beneficial, you are enriching you mind. '),
(101, 'END', 'To dream of an end to something represents an achievement or goal that has been reached. It may also mean that the bad times are coming to an end. Or perhaps your time is running out and you need to come to a decision about some issue. The end of something also signals the beginning of something new. '),
(102, 'ENEMY', 'To see your enemy in your dream represents opposing ideas and contradictory attitudes. You are in denial about something or you are rejecting someone. Enemies may also represent the enemies within yourself and the inner conflict you have with yourself.'),
(103, 'F', 'To see the letter \"F\" in your dream symbolizes failure. It may also denote an expletive as in \"F you\".'),
(104, 'FABLE', 'To dream of reading fables represent your literary mind and romantic notions. Alternatively, the fable indicates that there is a lesson to be learned or a message that you need to listen to. '),
(105, 'FACE', 'To see your own face in your dream represents the persona you show to the world as oppose to the real you. It may refer to how you confront problems and deal with issues in your life. '),
(106, 'FACEBOOK', 'To dream about your Facebook page represents your desires to expand your social circle. You need to reach out to others in a more direct and personal way. It is time to get out there and experience life.'),
(107, 'FACTORY', 'To dream that you are at a factory represents repetitious thinking and an old way of doing things. It is symbolic of predictability and unchanging habits. Alternatively, it signifies business, productivity, energy and bustling activity. You are a person that can get things done.'),
(108, 'FADE', 'To dream that a color is faded indicates a lack of motivation or inspiration.'),
(109, 'FAILURE', 'To dream of failure signifies fears of inadequacy and low self-esteem. You are not applying yourself to the fullest potential. Or you are overwhelmed with anxiety and the pressure to excel.'),
(110, 'FAIRY TALE', 'To dream that you are a character in a fairy tale suggests your need to be rescued or to be swept off your feet. It also indicates that you are exploring your limits and trying to awaken your fullest potential.'),
(111, 'FAKE', 'To dream that something or someone is fake suggests that you are pretending to be someone you are not. You are putting up front because you are afraid to show your true self.'),
(112, 'FALL', 'To dream that you fall and are not frightened signifies that you will overcome your adversities with ease.    '),
(113, 'FAME', 'To dream that you have fame denotes unrealized achievements or failed aspirations. You constantly need reaffirmation, praises and acknowledgment. You want to be admired and looked up to by those around you.'),
(114, 'FAMILY', '13 Family To see your own family in your dream represents security, warmth and love. It could also symbolize bitterness, jealousy, or rivalry, depending on your relationship with your family. Alternatively, it could mean that you are overly dependent on your family, especially if the family members are in your recurring dreams. Consider also the significance of a particular family member or the relationship you have with them. '),
(115, 'FANTASY', 'To dream of a fantasy world may be a way for your mind to highlight what is normal. Alternatively, the dream may be telling you to expand your thinking and use your imagination and creativity. Explore all your options no matter how strange or illogical it may be.'),
(116, 'FAR', 'To see something or someone far away in your dream suggests that you are feeling emotionally distant from that person or what that something means to you. Perhaps you are feeling alone or that you are the odd person out. Alternatively, it represents something that is unattainable or something that you failed to achieve.'),
(117, 'FASHION', 'To dream about fashion suggests that you are depending too much on your looks to get your way. You need to start looking within yourself.  Alternatively, the dream indicates that you have blended into the background. You need to step up and be more confident.'),
(118, 'FAST FOOD', 'To see or eat fast food in your dream indicates that you are not taking the time to cater to your emotions. You are not taking good care of your physical or mental health. '),
(119, 'FAT', 'To dream that you are fat signifies a fortunate change in your life. You are experiencing abundance in some area of your life. Alternatively, the dream means that you are being overindulgent. You need to learn moderation. A more literal interpretation of this dream is your fears of gaining weight. You have an skewed perception of your own image which may stem from low self-esteem.'),
(120, 'G', 'To see the letter \"G\" in your dream may be a pun on money.'),
(121, 'GALAXY', 'To see the galaxy in your dream represents your creativity. It also means that you are looking at the broader picture and are more aware of your surroundings.'),
(122, 'GAME', 'To dream that you are hunting, shooting at, or killing game refers to the game of life. It also represents your ability to keep your animalistic nature in check and in control.'),
(123, 'GARBAGE', 'To dream that you are throwing away garbage suggests that you are kicking your old negative habits and throwing away your bad characteristics and unwanted traits. Alternatively, garbage indicates that you are not taking responsibility for something.'),
(124, 'GARDEN', 'To see a vegetable or fruit garden in your dream indicates that your hard work and diligence will pay off in the end.  It is also symbolic of stability, potential, and inner growth. You need to cultivate a new skill or nurture your spiritual and personal growth.'),
(125, 'GATE', 'To see or pass through a gate in your dream suggests that you are walking through a new phase of life. It also represents new opportunities and possibilities, especially if the gate is opened or swinging.'),
(126, 'GEOMETRY', 'To dream about geometry refers to your understanding of your relationship with others and how your presence affects them. '),
(127, 'GHOST', 'To see a ghost in your dream represents something that is no longer obtainable or within reach. It indicates that you are feeling disconnected from life and society. Try to figure out what the ghost wants or what it is looking for. The dream may also be a calling for you to move on and abandon your outdated modes of thinking and behavior.'),
(128, 'GIANT', 'To see a giant in your dream indicates a great struggle between you and your opponents. You are trying to overcome an overwhelming obstacle. Alternatively, a giant symbolizes an issue, a person or a feeling that is dominating you. You are having an inferiority complex.'),
(129, 'GIFT', 'To dream that you are giving a gift signifies your generosity towards others. Alternatively, you may be trying to express some feeling or have something awkward to say that has to be carefully packaged. If you are showering someone with gifts, then it indicates that you are being overly pushy with your advice. Or that you are trying too hard to be accepted. If you are buying or giving someone expensive gifts, then it symbolizes the sacrifices you are making for that person. You want to make them'),
(130, 'GINGER', 'To see ginger in your dream indicates security and comfort in your life. However, you need to add a little more excitement and variety to you life.'),
(131, 'GIRAFFE', 'To see a giraffe in your dream suggests that you need to consider the overall picture. Take a broader view on your life and where it is headed. The dream may also be a metaphor on how you are \"sticking your neck out\" for someone. '),
(132, 'GLASS', 'To see glass in your dream symbolizes passivity or protection. You may be putting up an invisible barrier to protect yourself in a situation or relationship. If the glass is dirty, cloudy or discolored, then it suggests that you are not seeing something clearly. You need more clarity in a situation. To dream that you are drinking from a glass is an omen of good luck.'),
(133, 'GLOBE', 'To see a globe in your dream  suggests that you need to step back and look at the wider perspective. It also indicates that you are in complete control of your life.'),
(134, 'GLOOMY', 'To be surrounded by gloomy things and situations in your dream indicates that you need some direction or clarity in a waking situation. A situation or person in your life is having a negative impact on you.'),
(135, 'GOAL', 'To score a goal in your dream symbolizes your achievements and successes. Your path to success is within reach. The dream may also be a metaphor for the goals you have in your life. Or it may suggests that you need to start making goals for your future.'),
(136, 'GOD', 'To see a god in your dream signifies your spirituality and expression of your feelings about divinity. God also symbolizes an untouchable, unreachable, and unattainable notion of perfection. Thus such a dream may highlight your struggles and attempts with trying to be perfect.'),
(137, 'GOBLIN', 'To see a goblin in your dream refers to a negative person who is working against you. Or it may mean that you have a self-defeatist attitude. You are already setting yourself up for failure.'),
(138, 'GODDESS', 'To see a goddess in your dream symbolizes your femininity or feminine side. For a man to dream of a goddess indicates his fears about the female. '),
(139, 'GOLD', 'To see gold in your dream symbolizes wealth, riches, natural healing, illumination and/or spirituality. It is also a symbol of love, longevity and domestic bliss. Negatively, gold may represent greed, corruption and temptation.'),
(140, 'H', 'To see the letter \"H\" in your dream symbolizes cooperation, balance and teamwork.'),
(141, 'HABIT', 'To dream about an old habit or a habit that you recently quit is an expression of your subconscious desires. Your suppressed urges are making themselves known via your dreams.'),
(142, 'HACK', 'To dream that someone is hacking into your computer or files symbolizes your vulnerabilities and weaknesses. The dream may be a way of telling you that you need to work on building up your self esteem.'),
(143, 'HAIR', 'To see hair in your dream signifies sexual virility, seduction, sensuality, vanity, and health. It is indicative of your attitudes. If your hair is knotted or tangled, then it is symbolic of uncertainty and confusion in your life. You may be unable to think straight. If you dream that you make a drastic change to your hairstyle, then it means that you are taking a drastic, new approach to some issue in your waking life.  '),
(144, 'HALL', 'To dream that you are in a hall represents your ability to share and get along with others. If the hall is empty, then it symbolizes the unexplored and untapped aspects of your character. Consider the activity that is taking place in the hall and the people that were there.'),
(145, 'HALLOWEEN', 'To dream of Halloween signifies death and the underworld. Halloween also represents the temporary adoption of a new persona where you feel less inhibited and more comfortable to freely express yourself. You may also be trying to hide your true self. Alternatively, dreaming of Halloween reflects your childhood and the corresponding feelings that you associated with the holiday.'),
(146, 'HALLUCINATION', 'To have a hallucination in your dream symbolizes an image from your subconscious. They can also represent repressed emotions and feelings that you do not want to confront. Your dream may be telling you to be more alert and to express yourself more clearly. Alternatively, it refers to self-deception. What are you trying to hide? '),
(147, 'HALLWAY', 'To see a hallway in your dream symbolizes self exploration. It is the beginning of the path that you are taking in life. You are going through a transitional phase and journeying into the unknown. It also signals spiritual enlightenment, emotional growth physical prowess, new opportunities and mental passages in your life. '),
(148, 'HAM', 'To dream that you are eating ham indicates that you need to preserve your energy.'),
(149, 'HAMBURGER', 'To see or eat a hamburger in your dream suggests that you are lacking some emotional, intellectual, or physical component in order to feel whole again. You may be feeling unsatisfied with some situation or relationship. It is also symbolic of your experiences and how you need to learn from them. Look at the big picture.'),
(150, 'HAND', 'To dream of your hands represent your relationships with those around you and how you connect with the world. Hands serve as a form of communication and can represent authority, hate, protection, justice, etc depending on the gesture. Perhaps you need to lend a helping hand to someone. If someone else is giving you a helping hand, then it implies your need for help. '),
(151, 'HANDKERCHIEFS', 'To see or use a handkerchief in your dream indicates that you will be disgraced or embarrassed in some way. Alternatively, it symbolizes tears and sadness.'),
(152, 'HANDSOME', 'To dream that you are handsome refers to your confidence and self-esteem level. Alternatively, to dream about your looks points to your concerns about how others perceive you.'),
(153, 'HAPPY', 'To dream that you are happy may be a compensatory dream and is often a dream of the contrary. You may be trying to compensate for the sadness or stress in your waking life. '),
(154, 'HAUNTED HOUSE', 'To dream of a haunted house signifies unfinished emotional business related to your childhood family, dead relatives, or repressed memories and feelings.'),
(155, 'HAWAII', 'To see or dream about Hawaii symbolizes relaxation and leisure. You are trying to escape from your daily problems.'),
(156, 'HEAD', 'To see a head in your dream signifies wisdom, intellect, understanding and rationality. It may also represent your accomplishments, self-image, and perception of the world. The dream may also be metaphor to indicate that you are \"ahead\" in some situation or that you need to get ahead. '),
(157, 'HEART', 'To see your heart in your dream signifies truth, courage, love, and romance. It is representative of how you are currently dealing with your feelings and expressing your emotions. Also consider the saying \"the heart of the matter\" which implies that you may need to get down to the core of a situation before proceeding. '),
(158, 'I', 'To see the letter \"I\" in your dream is on pun on me, myself and I. You need to focus on you. Or the dream may be an indication that you are being too selfish. Alternatively, the letter represents action and responsibility.'),
(159, 'E', 'To see the letter \"E\" in your dream implies ease and relaxation. The drug ecstasy is often referred to as \"E\".'),
(160, 'ICE', 'To see ice in your dream suggests that you are lacking a flow of ideas and thoughts. You are not seeing any progress in your life.'),
(161, 'ICE CREAM', 'To see or eat ice cream in your dream denotes good luck, pleasure, success in love and satisfaction with your life. You need to savor the moment and enjoy it.  Alternatively, the dream may suggest that you need to cool off and not let your temper get out of hand. On the other hand, the ice cream may be a pun on \"I scream\". Perhaps there is something that you need to let out.'),
(162, 'ICE CUBE', 'To make or see ice cubes in your dream symbolizes your frigid emotions. Alternatively, it suggests that you need to cool off. You are letting your temper get out of hand. The ice cubes may also refer to a refreshment. Perhaps you need to kick back and relax.'),
(163, 'ICE SKATING', 'To dream that you or others are ice skating suggests that you need to trust  in yourself and your actions. The dream may also indicate that you need to proceed carefully into some situation or relationship.   '),
(164, 'ICICLES', 'To see icicles in your dream indicate a problem or concern that has been lingering over you. If the icicles are melting in your dream, then it indicate that the tough times are almost over. You will overcome your problems.'),
(165, 'IDEAL', 'To dream that you meet the ideal person suggests that you may be too unrealistic. You have high expectations of others.'),
(166, 'IDENTIFICATION', 'To see your I.D. in your dream signifies your own self-confidence. To dream that you lose your I.D. denotes confusion about your own self-identity and your sense of individuality.'),
(167, 'IDENTITY THEFT', 'To dream that you are a victim of identity theft means that someone in your waking life is taking credit for your work.  Alternatively, you may be having this dream because you are experiencing an identity crisis. You feel lost and not sure where you are headed.'),
(168, 'IDIOT', 'To dream that you are an idiot or call somebody one indicates that you are making a situation more difficult than it need by. Your thought process lacks clarity.   '),
(169, 'IDLE', 'To dream that you are idling represents boredom. You lack initiative to take action in what you really want to do. To see idling people in your dream suggests that you are not using your time and energy wisely. '),
(170, 'IDOLS', 'To dream that you are worshipping an idol signifies little progress in attaining your goals. You are worshipping false values and ideas.'),
(171, 'IGNORANCE', 'To dream that you or someone is ignorant means that you are overly critical of your achievements. It also signifies low self-esteem. '),
(172, 'IGNORE', 'To dream that you are ignoring someone or being ignored represents some aspect of yourself which you are not paying enough attention to. Perhaps you are overlooking something. Alternatively, it may reflect your real waking experiences of being ignored by that person.'),
(173, 'IGUANA', 'To see an iguana in your dream represents harshness, cold-heartedness or fierceness. You approach situations or problems with both hostility and unstoppable determination. '),
(174, 'ILLNESS', 'To dream that you have an illness denotes despair, unpleasant changes, or some emotional breakdown. The illness may be symbolic of your inability to cope with a situation. You see that being ill is an easy way out. On a more direct note, this dream may signal you to pay closer attention to your health especially to the areas of body revealed in the dream.'),
(175, 'J', 'To see the letter \"J\" in your dream means that there is something that you need to hold on to and grasp, as reflected by its hook shape. Alternatively, the dream may be a pun on someone named \"Jay\" or whose initial starts with J.'),
(176, 'JACKFRUIT', 'To see or eat jackfruit in your dream symbolizes fertility and abundance. Alternatively, a jackfruit represents luck. The larger the jackfruit, the greater the luck.'),
(177, 'JACKPOT', 'To see or win a jackpot in your dream suggests that you are too impulsive and relying too much on fate. Alternatively, the dream means that you need to take a chance in life in order to reap the rewards.'),
(178, 'JAM', 'To dream that you are eating jam signifies pleasant surprises, sweet things and new discoveries. Alternatively, the dream may also be a pun that \"caught in a jam\". Are you in trouble or in a sticky situation? To dream that you are making jam refers to a happy home life.'),
(179, 'JANUARY', 'To dream of the month of January signifies loss of love and broken companionship.'),
(180, 'JAPAN', 'To dream about Japan or that you are in Japan depends on your own personal associations with the country. If you have never been to Japan, then the dream may represent some sort of realization enlightenment. As the land of the rising sun, Japan symbolizes peace of mind and tranquility.'),
(181, 'JASMINE', 'To see jasmine in your dream signifies love, beauty, protection and happiness. It is also an indication of short-lived pleasures.'),
(182, 'JAZZ', 'To hear or play jazz music in your dream symbolizes excitement and/or creative freedom. You feel free to express yourself in a situation. This interpretation will also depend on whether you like or hate jazz music. '),
(183, 'JEALOUSY', 'To dream that you are jealous of another person signifies that such feelings may be carried over from your waking life. The dream may reveal your subconscious feelings of jealousy toward that particular person. '),
(184, 'JELLY', 'To see or eat jelly in your dream represents insight into a situation you have been wondering about. The dream may be a metaphor for something that is finally taking shape. You have come to some understanding. Alternatively, it indicates that you are preserving or maintaining a sweet relationship.'),
(185, 'JELLYFISH', 'To see a jellyfish in your dream represents painful memories that is emerging from your subconscious. There may be hidden hostility or aggression in some aspect of your waking relationship or situation. '),
(186, 'JESUS', 'To see Jesus in your dream foretells that your greatest desires and goals will be realized. This dream serves to console and strengthen you in your times of adversity, hardship and struggle. You will rise above a difficult situation or circumstance and become victorious.'),
(187, 'JET', 'To see a jet flying overhead in your dream signifies speed, pride or power.    To see a jet stone in your dream signifies a period of mourning and sadness.'),
(188, 'JET SKI', 'To see or dream that you are on a jet ski represents a journey of self-discovery. You are confronting and exploring aspects of your subconscious in full force. Alternatively, the dream relates to some sexual adventure or relationship.'),
(189, 'JEWELRY', 'To see jewelry in your dream signifies status and your own sense of self worth and personal value. It is also symbolic of knowledge, identity, or whatever qualities you hold precious in your life. Jewelry highlights the importance of spiritual and psychological riches.'),
(190, 'JEWELS', 'To see or wear jewels in your dream signify a value within yourself or within others in which you admire and cherish. It also symbolizes pleasure, riches, ambition and spiritual protection.'),
(191, 'JOB', 'To dream that you are looking for a job suggests that you are feeling unfulfilled and frustrated in a current phase of your life. If you are applying for several jobs in your dream, then it suggests that you need a clear direction and focused goal.'),
(192, 'JOKE', 'To dream that you are telling a joke denotes that you are not being taken seriously and as a result you are feeling frustrated. On the other hand, you may not be the one who is taking an issue seriously.'),
(193, 'K', 'To see the letter \"K\" in your dream implies that something is \"okay\". Alternatively, the dream may be a pun on someone named \"Kay\" or whose initial starts with K.'),
(194, 'KARAOKE', 'To dream that you are taking part in karaoke suggests that you are too overly confident in your abilities. Alternatively, you may not be utilizing your talents to its fullest potential.'),
(195, 'KARMA', 'To dream about karma represents your relationships and what you give and receive from others. Consider if the feel of the dream is a positive or negative one.'),
(196, 'KETCHUP', 'To see or eat ketchup in your dream represents simplicity, youth, and happiness. Alternatively, the dream may be a pun on your need to \"catch up\" on something.'),
(197, 'KEY', 'To see a key in your dream symbolizes opportunities, access, control, secrets, freedom, knowledge or responsibilities. You may be locking away your own inner feelings and emotions. Or you are unlocking the answer to some problem. To see a ring of keys represents status, authority, and power. '),
(198, 'KEY CHAIN', 'To see a key chain in your dream indicates your ability to adapt to most any situations. You fit in with anybody and anywhere. '),
(199, 'KEYBOARD', 'To see a computer keyboard in your dream indicates that there is a message that you need to get out or an idea that you need to share. The keyboard also symbolizes something that you have to get done.'),
(200, 'KID', 'To see a kid (baby goat) in your dream represents a small lapse in judgment  Alternatively, it may mean that you are spending too much time on pleasure and leisure. As a result, your professional or educational pursuits may suffer.'),
(201, 'KILLER', 'To see a killer in your dream suggests that an essential aspect of your emotions have been cut off. You feel that you are losing your identity and your individuality. Alternatively, this dream may represent purification and the healing process. You are standing up for yourself and putting a dramatic end to something.'),
(202, 'KIMCHI', 'To see or eat kimchi in your dream represents an emotional barrier. You are wanting to prevent yourself from getting hurt in a relationship'),
(203, 'KIMONO', 'To see or wear a kimono in your dream symbolizes Japan. You are expressing some connection to the country. A kimono also represents elegance, beauty, and docility.'),
(204, 'KING', 'To see a king in your dream indicates that success and prestige are within reach. You will rise above your problems and adversities. The king is symbolic of power and control. Alternatively, the king symbolizes your father or some father figure. You are looking for support.'),
(205, 'KISS', 'To dream of a kiss denotes love, affection, tranquility, harmony, and contentment. In particular, if you are dreaming of your first kiss, then it may just be the anticipation of experiencing your actual first kiss. This dream is also symbolic of young love and fresh romance. Perhaps the dream is telling you that you need to inject some more romance into your waking relationship. '),
(206, 'KNIFE', 'To dream that you are carrying a knife signifies anger, aggression and/or separation. There may be something in your life that you need to cut out and get rid of.  Perhaps you need to cut ties or sever some relationship. Be more divisive. Alternatively, a knife refers to some sexual tension or sexual confrontation.');
INSERT INTO `survey_dream` (`dream_id`, `dream_name`, `dream_meaning`) VALUES
(207, 'L', 'To see the letter \"L\" in your dream is symbolic of loser. Alternatively, the dream may suggests that you need to take a break from whatever you are doing. The letter L may also signify your fear of the \"l-word\". You cannot even bring your dreaming mind to express love.'),
(208, 'LAMBORGHINI', 'To see or drive a Lamborghini in your dream suggests that you are moving too quickly and aggressively in some area of your life. You are living life in the fast lane.'),
(209, 'LAMP', 'To see a lamp in your dream symbolizes guidance, hope, inspiration, enlightenment and reassurance. If the lamp is dimly lit or unlit, then it suggests that you are feeling overwhelmed by emotional issues. You have lost your ability to find your own way or see things clearly.'),
(210, 'LANAI', 'To see or dream that you are in a lanai indicates that you are open-mined and easy-going. You are receptive to new ideas. As a Hawaiian island, it symbolizes your need to escape and get away from your daily responsibilities.  Give yourself a vacation.'),
(211, 'LAND', 'To see land in your dream represents your need to be more grounded or down to earth. You are looking for a strong foundation and some stability. Alternatively, the dream may be a metaphor for something that you have \"landed\" as in a job, a part in a play, etc.'),
(212, 'LANGUAGES', 'To dream that you are studying a language suggests that you are having difficulties expressing your thoughts. You are confronted with an unfamiliar problem that you do not know how to approach and resolve.'),
(213, 'LAPIS', 'To see a lapis in your dream suggests that no one is perfect. You need to accept yourself along with your imperfections. Look within your own self and your inner strength. Alternatively, the dream represents success, wisdom and divine power.'),
(214, 'LAPTOP', 'To see or use a laptop in your dream represents your need to reach out and communicate with others in any circumstance.'),
(215, 'LAS VEGAS', 'To dream that you are in Las Vegas refers to excess and  overindulgence.  You need to show some restraint in some area of your life.  Alternatively, to dream of Vegas suggests that your good judgment is being clouded by all the emotional turmoil and chaos.'),
(216, 'LASAGNA', 'To see or eat lasagna in your dream symbolizes warmth and comfort. Alternatively, it denotes the layers of your emotions.'),
(217, 'M', 'To see the letter \"M\" in your dream suggests that there is something that you are keeping silent about. Perhaps you have been sworn to secrecy. Alternatively, the dream may imply \"Mmmmm\". Your subconscious mind is hungering for knowledge or information. As a Roman Numeral, it could represent the number 1000.'),
(218, 'MACARONI', 'To dream that you are eating macaroni symbolizes comfort and ease. The dream may be trying to bring you back to a time where things were much simpler.'),
(219, 'MACAROON', 'To see or eat a macaroon in your dream represents a well-rounded experience. You are successfully balancing different aspects of your life.'),
(220, 'MACHINERY', 'To see machinery in your dream suggests that you are too mechanical - going about your way without much thought and making decisions without thinking it through. You need to get out of your boring pattern.'),
(221, 'MADNESS', 'To dream that you are diagnosed with madness or that you are mad forewarns of trouble, loss, and overwhelming grief. You are behaving in an inappropriate way in some area of your waking life.'),
(222, 'MADONNA', 'To see the Madonna in your dream symbolizes the mystical mother and the giver of life. She represents blessings, purity and virginal love. Alternatively, this image signifies feminine power and change.'),
(223, 'MAGIC', 'To perform or dream of magic suggests that you need to look at things from a different view or approach your problems from a new angle in order to successfully move forward. Alternatively, magic symbolizes creativity and wonder. Perhaps someone or something has caused you to be in awe. The dream may also be a metaphor that you or someone is \"up to some trick\".'),
(224, 'MAGNIFYING GLASS', 'To see or use a magnifying glass in your dream indicates that something in your life needs to be examined and looked at more closely.'),
(225, 'MANGO', 'To see or eat a mango in your dream symbolizes fertility, sexual desires, and lust. Alternatively, the mango may also be a pun to mean \"man go\" in reference to a relationship in which you should let go and move on.'),
(226, 'N', 'To see the letter \"N\" in your dream implies the end of some habit, journey, relationship or condition.'),
(227, 'NACHOS', 'To make or eat nachos in your dream signifies your need for more leisurely pursuits. You need to take some time out.'),
(228, 'NAKED', 'To dream that you are naked denotes fear of being found out and exposed over your activities. You feel that you are being misjudged.'),
(229, 'O', 'To see the letter \"O\" in your dream signifies an exclamation of surprise as in \"oh!\". Alternatively, the letter O implies that you need to open wide. Perhaps there is something that you need to open up about and vocalize. '),
(230, 'OCEAN', 'To see an ocean in your dream represents the state of your emotions and feelings. It is indicative of spiritual refreshment, tranquility and renewal. Alternatively, the dream means that you are feeling empowered and unhindered.  '),
(231, 'OCTOBER', 'To dream of the month of October signifies gratifying success in your endeavors.'),
(232, 'OCTOPUS', 'To see an octopus in your dream means that you are entangled in some difficult matter. Your judgment is being clouded.  '),
(233, 'OFFICE', 'To dream of your work office indicates that you cannot seem to leave your work at the office. You are overworked or have too much on your mind. Alternatively, an office symbolizes practicality, status, accomplishments and your place in the world. '),
(234, 'P', 'To see the letter \"P\" in your dream is a pun on \"pee\" or urine. You need to better express your emotions.'),
(235, 'PACKAGE', 'To see a package in your dream represents hidden creative energy, skills, and/or feelings. If you receive a package, then it indicates that you are acknowledging certain feelings or acquiring new resources. '),
(236, 'PAGEANT', 'To watch or dream that you are in a beauty pageant refers to your own insecurities about your appearances. '),
(237, 'PAINT', 'To see paint in your dream symbolizes expression of your inner emotions. Consider the color of the paint and how the color makes your feel. It is this feeling that you need to express more in your waking life. '),
(238, 'PALACE', 'To see a palace in your dream symbolizes wealth and prominence.  You are ready to utilize your full potential. If you are living in a palace, then it signifies that success is right within your reach.'),
(239, 'Q', 'To see the letter Q in your dream is a pun on \"cue\". You are waiting for a sign to make the next move.'),
(240, 'QUEEN', 'To see a queen in your dream symbolizes intuition, personal growth, power and influence. The queen is also a symbol for your mother.'),
(241, 'R', 'To see the letter \"R\" in your dream suggests that you are in need of some \"R & R\" or some rest and relaxation.'),
(242, 'RACE', 'To dream that you are in a race represents your competitive spirit and how you tend to measure yourself against others. Alternatively, this dream may mean that you need to slow down and take a different course in life. '),
(243, 'RAINBOW', 'To see a rainbow in your dream represents hope, success and good fortune in the form of money, prestige, or fame. The rainbow is also seen as a bridge between your earthly, grounded self and the higher, spiritual self. It refers to joy and happiness in your relationship.'),
(244, 'S', 'To see the letter \"S\" in your dream suggests that there is something that needs your attention. '),
(245, 'SACRIFICE', 'To dream that you are being sacrificed signifies your tendency to punish yourself. The dream may parallel waking sentiments where you feel that others do not appreciate your talents and efforts or that you are not being recognized for what you have given up.  '),
(246, 'SALAD', 'To see or eat a salad in your dream suggests that you need to express your feelings and take in the positive influences in your life needed for personal growth. Alternatively, the dream indicates that you are longing for nature and good health.'),
(247, 'SALARY', 'To dream about your salary symbolizes the results of your hard work. You need to take advantage of the opportunities. It is also an indication of your level of confidence and strength.'),
(248, 'T', 'To see the letter T in your dream represents your stubbornness and your refusal to change your attitudes and opinions. Alternatively, the dream is analogous to a fork in the road and the two choices or directions.'),
(249, 'TABLE', 'To see a table in your dream represents social unity and family connections. If the table is broken, wobbly or not functional, then it suggests some dissension in a group. It may also refer to a sense of insecurity. Perhaps there is something you cannot hold inside any longer and need to bring it out in the open.'),
(250, 'TALL', 'To dream that you are taller than someone indicates that you may be looking down on that person. You feel that you are above her or him. Alternatively, the dream represents authority and pride.'),
(251, 'TANK', 'To see a tank filled with water in your dream signifies prosperity and satisfaction with the current state of your life. You have complete control over your emotions. If there is a faceless human/fish-like creature inside the tank, then it implies that you are keeping an aspect of your emotions bottled up. You are afraid of confronting your own feelings.'),
(252, 'U', 'To see the letter \"U\" in your dream is a pun on \"you\" and how you act and behave in your waking life. Consider what you are doing and how you are feeling in the dream for additional significance. Alternatively, the dream signifies a restart. You need to go back and redo something all over again.  '),
(253, 'UFO', 'To see an UFO in your dream signifies your desires to find your spiritual purpose in life. Alternatively, it indicates that you are feeling alienated from those around you. The dream may also be a metaphor that you are acting \"spacey\" or \"spaced out\". You need to be more grounded and come back to reality.'),
(254, 'UMBRELLA', 'To see an umbrella in your dream symbolizes emotional security. You are putting up a shield against your emotions and are trying to avoid dealing with them. If the umbrella is leaking or broken, then it indicates that you are unprepared with facing your problems. '),
(255, 'UNICORN', 'To see a unicorn in your dream symbolizes high ideals, hope and insight in a current situation. It also symbolizes power, gentleness, and purity. Alternatively, it may represent your one-sided views.'),
(256, 'V', 'To see the letter V in your dream symbolizes victory, success or peace. As a Roman Numeral, it could represent the number 5.'),
(257, 'VACATION', 'To dream that you are on vacation indicates that you need a break to recharge your energies and revitalize yourself. You need to break out of your daily routine and do something different.  Alternatively, dreaming of a vacation represents your achievements. '),
(258, 'VALEY', 'To dream that you are in a valley symbolizes fertility, abundance, or your need to be sheltered and protected. If you are entering or walking through a valley, then it is analogous to your issues of death and dying. '),
(259, 'VEGETABLES', 'To see vegetables in your dream signify your need for spiritual nourishment. It may also indicate that you are lacking in a particular nutrient. Look up the specific vegetable for additional interpretation.'),
(260, 'W', 'To see the letter \"W\" in your dream is a reiteration of \"you\". You need to focus on you and only you.'),
(261, 'WAFERS', 'To dream that you are eating a wafer suggests that you need more diversity and spontaneity. You need to gain a better understanding of various facets in your life and incorporate them together. Alternatively, the wafer symbolizes something or some situation that you need to handle with care.'),
(262, 'WAFFLE', 'To dream of eating a waffle indicates that you need to come down from your lofty ideals and approach life from a more pragmatic perspective. The dream may also be a metaphor that you are \"waffling\" or undecided over some matter.'),
(263, 'X', 'To see an X in your dream signify something that is forbidden. You are being prevented to do something. '),
(264, 'XYLOPHONE', 'To see or play a xylophone in your dream indicates concerns for the environment. You need to be more environmentally conscious. Alternatively, the dream represents your ambition and your drive. It also provides motivation and inspirational insight into the future.'),
(265, 'Y', 'To see the letter Y in your dream indicates some decision that you need to make. It may represent a fork in the road or a path that you need to choose. The letter Y may also be a pun on \"why\". Perhaps there is something that you need to start questioning. '),
(266, 'YEAR', 'To dream of a year signifies a passage of time. It represents a cycle of growth, learning and maturity.'),
(267, 'Z', 'To see the letter \"Z\" in your dream suggests that you need to get more rest.'),
(268, 'ZEBRA', 'To see a zebra in your dream represents perfect balance, unity and harmony. It also indicates that opposites attract. Alternatively, a zebra suggests that you are spending too much time in trivial matters. You need to establish a clear timeline and lay your groundwork for success.');

-- --------------------------------------------------------

--
-- Table structure for table `survey_learner`
--

CREATE TABLE `survey_learner` (
  `learner_id` int(11) NOT NULL,
  `learner_section` int(12) DEFAULT NULL,
  `learner_question` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `survey_learner`
--

INSERT INTO `survey_learner` (`learner_id`, `learner_section`, `learner_question`) VALUES
(1, 1, 'I enjoy doodling and even my notes have lots of pictures and arrows in them.'),
(2, 1, 'I remember something better if I write it down.'),
(3, 1, 'I get lost or am late if someone tells me how to get to a new place, and I donâ€™t write down the directions.'),
(4, 1, 'When trying to remember someoneâ€™s telephone number, or something new like that, it helps me to get a picture of it in my mind.'),
(5, 1, 'If I am taking a test, I can â€œseeâ€ the textbook page and where the answer is located.'),
(6, 1, 'It helps me to look at the person while listening; it keeps me focused.'),
(7, 2, 'My written work doesnâ€™t look neat to me.  My papers have crossed-out words and erasures.'),
(8, 3, 'I donâ€™t like to read directions; Iâ€™d rather just start doing.'),
(9, 1, 'Using flashcards helps me to retain material for tests.'),
(10, 1, 'Itâ€™s hard for me to understand what a person is saying when there are people talking or music '),
(11, 1, 'Itâ€™s hard for me to understand a joke when someone tells me.'),
(12, 1, 'It is better for me to get work done in a quiet place.'),
(13, 2, 'It helps to use my finger as a pointer when reading to keep my place. '),
(14, 2, 'Papers with very small print, blotchy dittos or poor copies are tough on me.'),
(15, 2, 'I understand how to do something if someone tells me, rather than having to read the same thing to myself.'),
(16, 2, 'I remember things that I hear, rather than things that I see or read.'),
(17, 2, 'Writing is tiring.  I press down too hard with my pen or pencil.'),
(18, 2, 'My eyes get tired fast, even though the eye doctor says that my eyes are ok.'),
(19, 2, 'When I read, I mix up words that look alike, such as â€œthemâ€ and â€œthen,â€ â€œbadâ€ and â€œdad.â€'),
(20, 2, 'Itâ€™s hard for me to read other peopleâ€™s handwriting.'),
(21, 2, 'If I had the choice to learn new information through a lecture or textbook, I would choose to hear it rather than read it. '),
(22, 3, 'I learn best when I am shown how to do something, and I have the opportunity to do it.'),
(23, 3, 'Studying at a desk is not for me.'),
(24, 3, 'I tend to solve problems through a more trial-and-error approach, rather than from a step-by-step method.'),
(25, 3, 'Before I follow directions, it helps me to see someone else do it first.'),
(26, 3, 'I find myself needing frequent breaks while studying.'),
(27, 3, 'I am not skilled in giving verbal explanations or directions.'),
(28, 3, 'I do not become easily lost, even in strange surroundings.'),
(29, 3, 'I think better when I have the freedom to move around.'),
(30, 3, 'When I canâ€™t think of a specific word, Iâ€™ll use my hands a lot and call something a â€œwhat-cha-ma-call-itâ€ or a â€œthing-a-ma-jig.â€');

-- --------------------------------------------------------

--
-- Table structure for table `survey_personality`
--

CREATE TABLE `survey_personality` (
  `personality_id` int(50) NOT NULL,
  `personality_question` varchar(512) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `survey_personality`
--

INSERT INTO `survey_personality` (`personality_id`, `personality_question`) VALUES
(1, 'You don\'t find it difficult to introduce yourself to other people.'),
(2, 'You don\'t get lost in thoughts that you ignore or forget your surroundings.'),
(3, 'You try to respond to your e-mails as soon as possible and you can\'t stand a messy inbox.'),
(4, 'You find it easy to relax in a crowded room'),
(5, 'You like eating outside\r\n'),
(6, 'You usually initiate conversations.'),
(7, 'You do something just out of sheer curiosity.'),
(8, 'You like to do work'),
(9, 'Being organized is more important to you than being adaptable.'),
(10, 'You are usually highly motivated and energetic.');

-- --------------------------------------------------------

--
-- Table structure for table `survey_psychological`
--

CREATE TABLE `survey_psychological` (
  `psych_id` int(50) NOT NULL,
  `psych_question` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `survey_psychological`
--

INSERT INTO `survey_psychological` (`psych_id`, `psych_question`) VALUES
(1, 'Little interest or pleasure in doing things.'),
(2, 'Feeling down, depressed, or hopeless'),
(3, 'Trouble falling or staying asleep, or sleeping too much'),
(4, 'Feeling tired or having little energy'),
(5, 'Poor appetite or overeating'),
(6, 'Feeling bad about yourself - or that you are a failure or have let yourself or your family down'),
(7, 'Trouble concentrating on things, such as reading the newspaper or watching television'),
(8, 'Moving or speaking so slowly that other people could have noticed'),
(9, 'Thoughts that you would be better off dead, or of hurting yourself'),
(10, 'If you checked off any problems, how difficult have these problems made it for you at work, home, or with other people?');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_appointment`
--
ALTER TABLE `data_appointment`
  ADD PRIMARY KEY (`appointment_ID`);

--
-- Indexes for table `data_class_list`
--
ALTER TABLE `data_class_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_class_sched`
--
ALTER TABLE `data_class_sched`
  ADD PRIMARY KEY (`class_ID`);

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
-- Indexes for table `survey_psychological`
--
ALTER TABLE `survey_psychological`
  ADD PRIMARY KEY (`psych_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_appointment`
--
ALTER TABLE `data_appointment`
  MODIFY `appointment_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `data_class_list`
--
ALTER TABLE `data_class_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_class_sched`
--
ALTER TABLE `data_class_sched`
  MODIFY `class_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_history`
--
ALTER TABLE `data_history`
  MODIFY `history_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `survey_dream`
--
ALTER TABLE `survey_dream`
  MODIFY `dream_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=269;

--
-- AUTO_INCREMENT for table `survey_learner`
--
ALTER TABLE `survey_learner`
  MODIFY `learner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `survey_personality`
--
ALTER TABLE `survey_personality`
  MODIFY `personality_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `survey_psychological`
--
ALTER TABLE `survey_psychological`
  MODIFY `psych_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
