-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2025 at 12:49 AM
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
-- Database: `quiz_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `answer_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `answer_text` text NOT NULL,
  `answer_image` varchar(255) DEFAULT NULL,
  `is_correct` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`answer_id`, `question_id`, `answer_text`, `answer_image`, `is_correct`) VALUES
(105, 1, 'She don\'t like apples.', NULL, 0),
(106, 1, 'She doesn\'t likes apples.', NULL, 0),
(107, 1, 'She doesn\'t like apples.', NULL, 1),
(108, 1, 'She didn\'t likes apples.', NULL, 0),
(109, 2, 'Mouses', NULL, 0),
(110, 2, 'Mice', NULL, 1),
(111, 2, 'Mousees', NULL, 0),
(112, 2, 'Mices', NULL, 0),
(113, 3, 'Run', NULL, 0),
(114, 3, 'Beautiful', NULL, 0),
(115, 3, 'And', NULL, 1),
(116, 3, 'Quickly', NULL, 0),
(117, 4, 'He', NULL, 0),
(118, 4, 'Ran', NULL, 0),
(119, 4, 'Quickly', NULL, 1),
(120, 4, 'All of these', NULL, 0),
(121, 5, 'What time is it.', NULL, 0),
(122, 5, 'What time is it?', NULL, 1),
(123, 5, 'what time is it?', NULL, 0),
(124, 5, 'What time is it!', NULL, 0),
(125, 6, 'Goed', NULL, 0),
(126, 6, 'Went', NULL, 1),
(127, 6, 'Gone', NULL, 0),
(128, 6, 'Goes', NULL, 0),
(129, 7, 'Running in the park', NULL, 0),
(130, 7, 'She runs in the park', NULL, 1),
(131, 7, 'Because she was happy', NULL, 0),
(132, 7, 'After the rain stopped', NULL, 0),
(133, 8, 'The dogs\' collar', NULL, 0),
(134, 8, 'The dog\'s collar', NULL, 1),
(135, 8, 'The dogs collar', NULL, 0),
(136, 8, 'The dogs\'s collar', NULL, 0),
(137, 9, 'Jump', NULL, 0),
(138, 9, 'Under', NULL, 1),
(139, 9, 'Happy', NULL, 0),
(140, 9, 'Sing', NULL, 0),
(141, 10, 'Come', NULL, 0),
(142, 10, 'Depart', NULL, 1),
(143, 10, 'Enter', NULL, 0),
(144, 10, 'Appear', NULL, 0),
(145, 11, 'He', NULL, 0),
(146, 11, 'She', NULL, 0),
(147, 11, 'Tree', NULL, 1),
(148, 11, 'They', NULL, 0),
(149, 12, 'Swimed', NULL, 0),
(150, 12, 'Swam', NULL, 0),
(151, 12, 'Swimming', NULL, 1),
(152, 12, 'Swum', NULL, 0),
(153, 13, 'Book', NULL, 0),
(154, 13, 'Bookshelf', NULL, 1),
(155, 13, 'Booking', NULL, 0),
(156, 13, 'Bookish', NULL, 0),
(157, 14, 'A big red ball', NULL, 1),
(158, 14, 'A red big ball', NULL, 0),
(159, 14, 'Big a red ball', NULL, 0),
(160, 14, 'Red a big ball', NULL, 0),
(161, 15, 'The cat sat', NULL, 0),
(162, 15, 'What a beautiful day!', NULL, 1),
(163, 15, 'She ran quickly', NULL, 0),
(164, 15, 'Blue is a color', NULL, 0),
(165, 16, 'If I was you, I would apologize.', NULL, 0),
(166, 16, 'If I were you, I would apologize.', NULL, 1),
(167, 16, 'If I am you, I would apologize.', NULL, 0),
(168, 16, 'If I be you, I would apologize.', NULL, 0),
(169, 17, 'Running quickly, the finish line was crossed by the athlete.', NULL, 1),
(170, 17, 'The athlete ran quickly and crossed the finish line.', NULL, 0),
(171, 17, 'Having trained for months, the athlete crossed the finish line.', NULL, 0),
(172, 17, 'After crossing the finish line, the athlete celebrated.', NULL, 0),
(173, 18, 'She gave birth to a baby boy.', NULL, 0),
(174, 18, 'The CEO himself made the announcement.', NULL, 0),
(175, 18, 'I saw it with my own eyes.', NULL, 1),
(176, 18, 'They entered into an agreement.', NULL, 0),
(177, 19, 'Subject of the relative clause', NULL, 0),
(178, 19, 'Object of the relative clause', NULL, 1),
(179, 19, 'Possessive determiner', NULL, 0),
(180, 19, 'Subject complement', NULL, 0),
(181, 20, 'She likes hiking, swimming, and to ride bicycles.', NULL, 1),
(182, 20, 'She likes hiking, swimming, and riding bicycles.', NULL, 0),
(183, 20, 'She likes to hike, to swim, and to ride bicycles.', NULL, 0),
(184, 20, 'She enjoys hiking, swimming, and bicycling.', NULL, 0),
(185, 21, 'He lost his coat and his temper.', NULL, 1),
(186, 21, 'She ate the cake and drank the coffee.', NULL, 0),
(187, 21, 'They came and saw and conquered.', NULL, 0),
(188, 21, 'We laughed and cried during the movie.', NULL, 0),
(189, 22, 'She had been writing the novel for three years before it was published.', NULL, 1),
(190, 22, 'She was writing the novel for three years before it was published.', NULL, 0),
(191, 22, 'She wrote the novel for three years before it was published.', NULL, 0),
(192, 22, 'She has been writing the novel for three years before it was published.', NULL, 0),
(193, 23, 'Metonymy', NULL, 1),
(194, 23, 'Synecdoche', NULL, 0),
(195, 23, 'Antithesis', NULL, 0),
(196, 23, 'Zeugma', NULL, 0),
(197, 24, 'After he finished his speech, the president left.', NULL, 0),
(198, 24, 'Here it is: your long-awaited package.', NULL, 1),
(199, 24, 'The dog barked because it was hungry.', NULL, 0),
(200, 24, 'She took the book and read it.', NULL, 0),
(201, 25, 'Never have I seen such beauty.', NULL, 1),
(202, 25, 'I have never seen such beauty.', NULL, 0),
(203, 25, 'No beauty have I ever seen like this.', NULL, 0),
(204, 25, 'This beauty I have never seen.', NULL, 0),
(205, 26, 'The results were surprising; nevertheless, we accepted them.', NULL, 1),
(206, 26, 'The results were surprising, nevertheless; we accepted them.', NULL, 0),
(207, 26, 'The results were surprising nevertheless; we accepted them.', NULL, 0),
(208, 26, 'The results were surprising; nevertheless we accepted them.', NULL, 0),
(209, 27, 'Relative pronoun', NULL, 0),
(210, 27, 'Demonstrative adjective', NULL, 0),
(211, 27, 'Complementizer', NULL, 1),
(212, 27, 'Adverbial clause introducer', NULL, 0),
(213, 28, 'I suggest that he goes to the doctor.', NULL, 0),
(214, 28, 'I suggest that he go to the doctor.', NULL, 1),
(215, 28, 'I suggested him going to the doctor.', NULL, 0),
(216, 28, 'I suggested that he should go to the doctor.', NULL, 0),
(217, 29, 'The students, who had studied hard, passed the exam.', NULL, 0),
(218, 29, 'The students who had studied hard passed the exam.', NULL, 1),
(219, 29, 'The students who had studied hard, passed the exam.', NULL, 0),
(220, 29, 'The students, who had studied hard passed the exam.', NULL, 0),
(221, 30, 'If you would have called me, I would have helped.', NULL, 0),
(222, 30, 'If you had called me, I would have helped.', NULL, 1),
(223, 30, 'If you called me, I would have helped.', NULL, 0),
(224, 30, 'If you would call me, I would have helped.', NULL, 0),
(225, 31, 'The sun rises in the east tomorrow.', NULL, 0),
(226, 31, 'Water boils at 100°C at sea level.', NULL, 1),
(227, 31, 'She is writing a novel these days.', NULL, 0),
(228, 31, 'They have completed the project.', NULL, 0),
(229, 32, 'She loves thee not with her eyes but with her mind.', NULL, 0),
(230, 32, 'But me no buts!', NULL, 1),
(231, 32, 'To boldly go where no man has gone before.', NULL, 0),
(232, 32, 'The quality of mercy is not strained.', NULL, 0),
(233, 33, 'I believe him to be honest.', NULL, 1),
(234, 33, 'I believe that he is honest.', NULL, 0),
(235, 33, 'I believe in his honesty.', NULL, 0),
(236, 33, 'I believe he will be honest.', NULL, 0),
(237, 34, 'Past indicative', NULL, 0),
(238, 34, 'Past subjunctive', NULL, 1),
(239, 34, 'Conditional mood', NULL, 0),
(240, 34, 'Imperfect aspect', NULL, 0),
(241, 35, 'I consider him a genius.', NULL, 1),
(242, 35, 'I think that he is a genius.', NULL, 0),
(243, 35, 'I regard him as a genius.', NULL, 0),
(244, 35, 'I believe in his genius.', NULL, 0),
(245, 36, 'He lost his wallet and his temper.', NULL, 0),
(246, 36, 'She opened the door and her heart.', NULL, 1),
(247, 36, 'They ate the cake and conversation.', NULL, 0),
(248, 36, 'We saw the storm and lightning.', NULL, 0),
(249, 37, 'He bought me a book.', NULL, 0),
(250, 37, 'Cry me a river.', NULL, 1),
(251, 37, 'She told me a story.', NULL, 0),
(252, 37, 'Write me a letter.', NULL, 0),
(253, 38, 'Idiomatic expression', NULL, 0),
(254, 38, 'Expletive construction', NULL, 0),
(255, 38, 'Pleonastic subject', NULL, 0),
(256, 38, 'Weather impersonal', NULL, 1),
(257, 39, 'I expect him to win.', NULL, 1),
(258, 39, 'I want that he wins.', NULL, 0),
(259, 39, 'I prefer for him to win.', NULL, 0),
(260, 39, 'I hope he wins.', NULL, 0),
(261, 40, 'Ask not what your country can do for you...', NULL, 0),
(262, 40, 'When the going gets tough, the tough get going.', NULL, 1),
(263, 40, 'To be or not to be...', NULL, 0),
(264, 40, 'All the world\'s a stage...', NULL, 0),
(265, 41, 'She gave me coffee and him tea.', NULL, 1),
(266, 41, 'She gave coffee to me and tea to him.', NULL, 0),
(267, 41, 'She gave to me coffee and to him tea.', NULL, 0),
(268, 41, 'She gave me coffee and to him tea.', NULL, 0),
(269, 42, 'Correlative comparative', NULL, 1),
(270, 42, 'Parallel superlative', NULL, 0),
(271, 42, 'Dependent clause', NULL, 0),
(272, 42, 'Adverbial phrase', NULL, 0),
(273, 43, 'Having eaten lunch, the meeting began.', NULL, 1),
(274, 43, 'After eating lunch, we began the meeting.', NULL, 0),
(275, 43, 'Lunch having been eaten, we met.', NULL, 0),
(276, 43, 'We ate lunch before the meeting.', NULL, 0),
(277, 44, 'If you do that again, I\'ll—', NULL, 1),
(278, 44, 'Do or do not, there is no try.', NULL, 0),
(279, 44, 'It was the best of times...', NULL, 0),
(280, 44, 'To err is human...', NULL, 0),
(281, 45, 'I don\'t think he is coming.', NULL, 1),
(282, 45, 'He isn\'t thinking of coming.', NULL, 0),
(283, 45, 'I think he isn\'t coming.', NULL, 0),
(284, 45, 'Not thinking, he came anyway.', NULL, 0),
(285, 46, 'Won', 'won.webp', 0),
(286, 46, 'Yen', 'yen.jpg', 1),
(287, 46, 'Ringgit', 'ringgit.webp', 0),
(288, 46, 'Baht', 'bahat.jpg', 0),
(289, 47, 'Sahara', 'sahara desert.jpg', 1),
(290, 47, 'Gobi', 'gobi desert.jpg', 0),
(291, 47, 'Kalahari', 'kalahari desert.JPG', 0),
(292, 47, 'Arabian', 'arabian desert.avif', 0),
(293, 48, 'Antarctica', 'antarctica.avif', 0),
(294, 48, 'Australia', 'australia.png', 1),
(295, 48, 'South America', 'south america 2.jpg', 0),
(296, 48, 'Europe', 'europe2.jpg', 0),
(297, 49, 'K2', 'k2.avif', 0),
(298, 49, 'Mount Everest', 'mount everest.jpg', 1),
(299, 49, 'Kangchenjunga', 'kangchenjunga.jpg', 0),
(300, 49, 'Lhotse', 'lhotse.jpg', 0),
(301, 50, 'Greece', 'greece.jpg', 0),
(302, 50, 'Mongolia', 'mangolia.avif', 0),
(303, 50, 'Egypt', 'egypt.jpg', 1),
(304, 50, 'India', 'india.avif', 0),
(305, 51, 'Colosseum', 'colosseum.jpg', 1),
(306, 51, 'Hanging Gardens of Babylon', 'hanging garden of babylon.avif', 0),
(307, 51, 'Great Pyramid of Giza', 'pyramids of giza.avif', 0),
(308, 51, 'Lighthouse of Alexandria', 'lighthouse of alexandria.jpg', 0),
(309, 52, 'Atlantic Ocean', 'atlantic blue sea.jpg', 0),
(310, 52, 'Indian Ocean', 'indian ocean.avif', 0),
(311, 52, 'Arctic Ocean', 'arctic ocean.jpg', 0),
(312, 52, 'Pacific Ocean', 'pacific ocean.jpg', 1),
(313, 53, 'France', 'france.jpg', 1),
(314, 53, 'England', 'england.jpg', 0),
(315, 53, 'Thailand', 'thailand.jpg', 0),
(316, 53, 'Spain', 'spain.jpg', 0),
(317, 54, 'Sparrow', 'sparrow.jpg', 0),
(318, 54, 'Peacock', 'peacock.jpg', 1),
(319, 54, 'Pigeon', 'pigeon.jpg', 0),
(320, 54, 'Eagle', 'eagle.jpg', 0),
(321, 55, 'Dog', 'dog.jpg', 0),
(322, 55, 'Cat', 'cat.avif', 0),
(323, 55, 'Cow', 'cow.jpg', 1),
(324, 55, 'Duck', 'duck.jpg', 0),
(325, 56, 'Africa', 'africa1.jpg', 0),
(326, 56, 'North America', 'north america1.png', 0),
(327, 56, 'Asia', 'asia1.jpg', 1),
(328, 56, 'Europe', 'europe.jpg', 0),
(329, 57, 'Japan', 'japan.jpg', 0),
(330, 57, 'China', 'china.png', 1),
(331, 57, 'Mongolia', 'mangolia.avif', 0),
(332, 57, 'South Korea', 'south korea.jpg', 0),
(333, 58, 'Lion', 'lion.jpg', 0),
(334, 58, 'Kangaroo', 'kangroo.avif', 1),
(335, 58, 'Coala', 'coala.jpg', 0),
(336, 58, 'Emu', 'emu.jpg', 0),
(337, 59, 'London', 'london tower.jpg', 0),
(338, 59, 'Berlin', 'berlin tower.jpg', 0),
(339, 59, 'Paris', 'paris.jpg', 1),
(340, 59, 'Rome', 'rome tower.jpg', 0),
(353, 60, 'Venus', NULL, 0),
(354, 60, 'Mars', NULL, 1),
(355, 60, 'Jupiter', NULL, 0),
(356, 60, 'Saturn', NULL, 0),
(357, 61, 'Aurum', NULL, 1),
(358, 61, 'Argentum', NULL, 0),
(359, 61, 'Ferrum', NULL, 0),
(360, 61, 'Plumbum', NULL, 0),
(361, 62, 'Oxygen', NULL, 0),
(362, 62, 'Carbon Dioxide', NULL, 0),
(363, 62, 'Nitrogen', NULL, 1),
(364, 62, 'Argon', NULL, 0),
(365, 63, '5', NULL, 0),
(366, 63, '6', NULL, 0),
(367, 63, '7', NULL, 1),
(368, 63, '8', NULL, 0),
(369, 64, 'Solid', NULL, 0),
(370, 64, 'Liquid', NULL, 0),
(371, 64, 'Gas', NULL, 0),
(372, 64, 'Energy', NULL, 1),
(373, 65, 'Molecule', NULL, 0),
(374, 65, 'Atom', NULL, 1),
(375, 65, 'Proton', NULL, 0),
(376, 65, 'Electron', NULL, 0),
(377, 66, 'Einstein', NULL, 0),
(378, 66, 'Dalton', NULL, 1),
(379, 66, 'Newton', NULL, 0),
(380, 66, 'Bohr', NULL, 0),
(381, 67, 'H2O', NULL, 1),
(382, 67, 'HO2', NULL, 0),
(383, 67, 'H2O2', NULL, 0),
(384, 67, 'H3O', NULL, 0),
(385, 68, 'Oxygen', NULL, 0),
(386, 68, 'Chlorine', NULL, 0),
(387, 68, 'Neon', NULL, 1),
(388, 68, 'Nitrogen', NULL, 0),
(389, 69, 'Respiration', NULL, 0),
(390, 69, 'Photosynthesis', NULL, 1),
(391, 69, 'Transpiration', NULL, 0),
(392, 69, 'Oxidation', NULL, 0),
(393, 70, 'Hydrochloric acid', NULL, 0),
(394, 70, 'Sulfuric acid', NULL, 0),
(395, 70, 'Acetic acid', NULL, 1),
(396, 70, 'Citric acid', NULL, 0),
(397, 71, '6', NULL, 1),
(398, 71, '12', NULL, 0),
(399, 71, '14', NULL, 0),
(400, 71, '16', NULL, 0),
(401, 72, 'Melting ice', NULL, 0),
(402, 72, 'Boiling water', NULL, 0),
(403, 72, 'Burning wood', NULL, 1),
(404, 72, 'Dissolving salt', NULL, 0),
(405, 73, 'Baking soda', NULL, 0),
(406, 73, 'Table salt', NULL, 1),
(407, 73, 'Sugar', NULL, 0),
(408, 73, 'Bleach', NULL, 0),
(409, 74, 'Iron', NULL, 0),
(410, 74, 'Mercury', NULL, 1),
(411, 74, 'Gold', NULL, 0),
(412, 74, 'Aluminum', NULL, 0),
(413, 75, 'Ethane', NULL, 0),
(414, 75, 'Propane', NULL, 0),
(415, 75, 'Butane', NULL, 0),
(416, 75, 'Methane', NULL, 1),
(420, 91, '\'Rusting of iron', NULL, 0),
(421, 91, 'Formation of ozone from oxygen', NULL, 0),
(422, 91, 'Decomposition of silver chloride in sunlight', NULL, 1),
(423, 91, 'Combustion of methane', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `badges`
--

CREATE TABLE `badges` (
  `badge_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `icon` varchar(100) DEFAULT NULL,
  `criteria` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `badges`
--

INSERT INTO `badges` (`badge_id`, `name`, `description`, `icon`, `criteria`) VALUES
(1, 'Math Whiz', 'Awarded for scoring high in math quizzes', 'fas fa-calculator', 'Score 80% or higher in any math quiz'),
(2, 'Quick Learner', 'Complete a quiz in half the allotted time', 'fas fa-bolt', 'Finish a quiz in less than half the time limit');

-- --------------------------------------------------------

--
-- Table structure for table `leaderboard`
--

CREATE TABLE `leaderboard` (
  `leaderboard_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `quiz_id` int(11) NOT NULL,
  `score` int(11) NOT NULL,
  `completion_time` int(11) DEFAULT NULL,
  `attempt_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `question_id` int(11) NOT NULL,
  `quiz_id` int(11) NOT NULL,
  `question_text` text NOT NULL,
  `question_image` varchar(255) DEFAULT NULL,
  `question_type` enum('MCQ','True/False','Short Answer') NOT NULL,
  `option_a` text DEFAULT NULL,
  `image_path_option_a` varchar(255) DEFAULT NULL,
  `option_b` text DEFAULT NULL,
  `image_path_option_b` varchar(255) DEFAULT NULL,
  `option_c` text DEFAULT NULL,
  `image_path_option_c` varchar(255) DEFAULT NULL,
  `option_d` text DEFAULT NULL,
  `image_path_option_d` varchar(255) DEFAULT NULL,
  `correct_option` varchar(2) DEFAULT NULL,
  `correct_text_answer` text DEFAULT NULL,
  `points` int(11) DEFAULT 1,
  `explanation` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`question_id`, `quiz_id`, `question_text`, `question_image`, `question_type`, `option_a`, `image_path_option_a`, `option_b`, `image_path_option_b`, `option_c`, `image_path_option_c`, `option_d`, `image_path_option_d`, `correct_option`, `correct_text_answer`, `points`, `explanation`, `created_at`) VALUES
(1, 1, 'Which sentence is grammatically correct?', NULL, 'MCQ', 'She don\'t like apples.', NULL, 'She doesn\'t likes apples.', NULL, 'She doesn\'t like apples.', NULL, 'She didn\'t likes apples.', NULL, 'C', NULL, 1, 'Correct present simple tense: \"doesn\'t like\" (third person singular)', '2025-06-07 19:33:36'),
(2, 1, 'What is the plural of \"mouse\" (the animal)?', NULL, 'MCQ', 'Mouses', NULL, 'Mice', NULL, 'Mousees', NULL, 'Mices', NULL, 'B', NULL, 1, 'Irregular plural: mouse → mice', '2025-06-07 19:33:36'),
(3, 1, 'Which word is a conjunction?', NULL, 'MCQ', 'Run', NULL, 'Beautiful', NULL, 'And', NULL, 'Quickly', NULL, 'C', NULL, 1, '\"And\" connects words or phrases', '2025-06-07 19:33:36'),
(4, 1, 'Identify the adverb: \"He ran quickly.\"', NULL, 'MCQ', 'He', NULL, 'Ran', NULL, 'Quickly', NULL, 'All of these', NULL, 'C', NULL, 1, '\"Quickly\" modifies the verb \"ran\"', '2025-06-07 19:33:36'),
(5, 1, 'Which sentence has correct punctuation?', NULL, 'MCQ', 'What time is it.', NULL, 'What time is it?', NULL, 'what time is it?', NULL, 'What time is it!', NULL, 'B', NULL, 1, 'Questions end with question marks', '2025-06-07 19:33:36'),
(6, 1, 'The past tense of \"go\" is:', NULL, 'MCQ', 'Goed', NULL, 'Went', NULL, 'Gone', NULL, 'Goes', NULL, 'B', NULL, 1, 'Irregular past tense: go → went', '2025-06-07 19:33:36'),
(7, 1, 'Which is a complete sentence?', NULL, 'MCQ', 'Running in the park', NULL, 'She runs in the park', NULL, 'Because she was happy', NULL, 'After the rain stopped', NULL, 'B', NULL, 1, 'Only option B has subject + verb', '2025-06-07 19:33:36'),
(8, 1, 'Choose the correct possessive form:', NULL, 'MCQ', 'The dogs\' collar', NULL, 'The dog\'s collar', NULL, 'The dogs collar', NULL, 'The dogs\'s collar', NULL, 'B', NULL, 1, 'Singular possessive: dog\'s', '2025-06-07 19:33:36'),
(9, 1, 'Which word is a preposition?', NULL, 'MCQ', 'Jump', NULL, 'Under', NULL, 'Happy', NULL, 'Sing', NULL, 'B', NULL, 1, '\"Under\" shows position', '2025-06-07 19:33:36'),
(10, 1, 'The opposite of \"arrive\" is:', NULL, 'MCQ', 'Come', NULL, 'Depart', NULL, 'Enter', NULL, 'Appear', NULL, 'B', NULL, 1, 'Arrive → depart (antonyms)', '2025-06-07 19:33:36'),
(11, 1, 'Which is NOT a pronoun?', NULL, 'MCQ', 'He', NULL, 'She', NULL, 'Tree', NULL, 'They', NULL, 'C', NULL, 1, '\"Tree\" is a noun', '2025-06-07 19:33:36'),
(12, 1, 'The \"-ing\" form of \"swim\" is:', NULL, 'MCQ', 'Swimed', NULL, 'Swam', NULL, 'Swimming', NULL, 'Swum', NULL, 'C', NULL, 1, 'Correct present participle', '2025-06-07 19:33:36'),
(13, 1, 'Which is a compound word?', NULL, 'MCQ', 'Book', NULL, 'Bookshelf', NULL, 'Booking', NULL, 'Bookish', NULL, 'B', NULL, 1, 'Book + shelf = bookshelf', '2025-06-07 19:33:36'),
(14, 1, 'The correct order is:', NULL, 'MCQ', 'A big red ball', NULL, 'A red big ball', NULL, 'Big a red ball', NULL, 'Red a big ball', NULL, 'A', NULL, 1, 'Adjective order: size → color', '2025-06-07 19:33:36'),
(15, 1, 'Which is an exclamation?', NULL, 'MCQ', 'The cat sat', NULL, 'What a beautiful day!', NULL, 'She ran quickly', NULL, 'Blue is a color', NULL, 'B', NULL, 1, 'Exclamations end with \"!\"', '2025-06-07 19:33:36'),
(16, 2, 'Which sentence demonstrates the correct use of the subjunctive mood?', NULL, 'MCQ', 'If I was you, I would apologize.', NULL, 'If I were you, I would apologize.', NULL, 'If I am you, I would apologize.', NULL, 'If I be you, I would apologize.', NULL, 'B', NULL, 2, 'The subjunctive mood uses \"were\" for hypothetical situations, even with singular subjects.', '2025-06-07 19:37:54'),
(17, 2, 'Identify the sentence with a dangling modifier:', NULL, 'MCQ', 'Running quickly, the finish line was crossed by the athlete.', NULL, 'The athlete ran quickly and crossed the finish line.', NULL, 'Having trained for months, the athlete crossed the finish line.', NULL, 'After crossing the finish line, the athlete celebrated.', NULL, 'A', NULL, 2, 'The modifier \"Running quickly\" doesn\'t logically modify the subject \"finish line\".', '2025-06-07 19:37:54'),
(18, 2, 'Which sentence contains a pleonasm?', NULL, 'MCQ', 'She gave birth to a baby boy.', NULL, 'The CEO himself made the announcement.', NULL, 'I saw it with my own eyes.', NULL, 'They entered into an agreement.', NULL, 'C', NULL, 2, '\"With my own eyes\" is redundant since \"saw\" already implies using eyes.', '2025-06-07 19:37:54'),
(19, 2, 'What is the syntactical function of \"whom\" in: \"The scientist whom we interviewed won the Nobel Prize.\"?', NULL, 'MCQ', 'Subject of the relative clause', NULL, 'Object of the relative clause', NULL, 'Possessive determiner', NULL, 'Subject complement', NULL, 'B', NULL, 2, '\"Whom\" functions as the object of \"interviewed\" in the relative clause.', '2025-06-07 19:37:54'),
(20, 2, 'Which sentence violates the rules of parallel structure?', NULL, 'MCQ', 'She likes hiking, swimming, and to ride bicycles.', NULL, 'She likes hiking, swimming, and riding bicycles.', NULL, 'She likes to hike, to swim, and to ride bicycles.', NULL, 'She enjoys hiking, swimming, and bicycling.', NULL, 'A', NULL, 2, 'The infinitive \"to ride\" breaks parallelism with the gerunds \"hiking\" and \"swimming\".', '2025-06-07 19:37:54'),
(21, 2, 'Identify the example of syllepsis:', NULL, 'MCQ', 'He lost his coat and his temper.', NULL, 'She ate the cake and drank the coffee.', NULL, 'They came and saw and conquered.', NULL, 'We laughed and cried during the movie.', NULL, 'A', NULL, 2, 'Syllepsis uses a word differently with two other words (\"lost\" literally with coat, figuratively with temper).', '2025-06-07 19:37:54'),
(22, 2, 'Which sentence correctly uses a past perfect continuous tense?', NULL, 'MCQ', 'She had been writing the novel for three years before it was published.', NULL, 'She was writing the novel for three years before it was published.', NULL, 'She wrote the novel for three years before it was published.', NULL, 'She has been writing the novel for three years before it was published.', NULL, 'A', NULL, 2, 'Past perfect continuous emphasizes duration before another past action.', '2025-06-07 19:37:54'),
(23, 2, 'What rhetorical device is used in: \"The pen is mightier than the sword.\"?', NULL, 'MCQ', 'Metonymy', NULL, 'Synecdoche', NULL, 'Antithesis', NULL, 'Zeugma', NULL, 'A', NULL, 2, 'Metonymy substitutes \"pen\" for writing and \"sword\" for military force.', '2025-06-07 19:37:54'),
(24, 2, 'Which sentence contains a cataphoric reference?', NULL, 'MCQ', 'After he finished his speech, the president left.', NULL, 'Here it is: your long-awaited package.', NULL, 'The dog barked because it was hungry.', NULL, 'She took the book and read it.', NULL, 'B', NULL, 2, '\"It\" refers forward to \"package\", making this cataphoric.', '2025-06-07 19:37:54'),
(25, 2, 'Identify the example of anastrophe:', NULL, 'MCQ', 'Never have I seen such beauty.', NULL, 'I have never seen such beauty.', NULL, 'No beauty have I ever seen like this.', NULL, 'This beauty I have never seen.', NULL, 'A', NULL, 2, 'Anastrophe inverts normal word order (\"Never have I\" instead of \"I have never\").', '2025-06-07 19:37:54'),
(26, 2, 'Which sentence demonstrates proper use of the semicolon?', NULL, 'MCQ', 'The results were surprising; nevertheless, we accepted them.', NULL, 'The results were surprising, nevertheless; we accepted them.', NULL, 'The results were surprising nevertheless; we accepted them.', NULL, 'The results were surprising; nevertheless we accepted them.', NULL, 'A', NULL, 2, 'Semicolon correctly links two independent clauses with a conjunctive adverb.', '2025-06-07 19:37:54'),
(27, 2, 'What is the grammatical function of \"that\" in: \"The fact that he arrived late concerned us.\"?', NULL, 'MCQ', 'Relative pronoun', NULL, 'Demonstrative adjective', NULL, 'Complementizer', NULL, 'Adverbial clause introducer', NULL, 'C', NULL, 2, '\"That\" introduces the complement clause \"he arrived late\" modifying \"fact\".', '2025-06-07 19:37:54'),
(28, 2, 'Which sentence contains an example of the mandative subjunctive?', NULL, 'MCQ', 'I suggest that he goes to the doctor.', NULL, 'I suggest that he go to the doctor.', NULL, 'I suggested him going to the doctor.', NULL, 'I suggested that he should go to the doctor.', NULL, 'B', NULL, 2, 'The mandative subjunctive uses base form \"go\" after verbs of suggestion.', '2025-06-07 19:37:54'),
(29, 2, 'Identify the sentence with a correctly placed restrictive clause:', NULL, 'MCQ', 'The students, who had studied hard, passed the exam.', NULL, 'The students who had studied hard passed the exam.', NULL, 'The students who had studied hard, passed the exam.', NULL, 'The students, who had studied hard passed the exam.', NULL, 'B', NULL, 2, 'No commas are used with restrictive clauses essential to the meaning.', '2025-06-07 19:37:54'),
(30, 2, 'Which sentence demonstrates correct use of the conditional perfect?', NULL, 'MCQ', 'If you would have called me, I would have helped.', NULL, 'If you had called me, I would have helped.', NULL, 'If you called me, I would have helped.', NULL, 'If you would call me, I would have helped.', NULL, 'B', NULL, 2, 'Conditional perfect requires \"had + past participle\" in the if-clause.', '2025-06-07 19:37:54'),
(31, 3, 'Which sentence demonstrates the correct use of the gnomic present tense?', NULL, 'MCQ', 'The sun rises in the east tomorrow.', NULL, 'Water boils at 100°C at sea level.', NULL, 'She is writing a novel these days.', NULL, 'They have completed the project.', NULL, 'B', NULL, 3, 'Gnomic present expresses universal truths (\"boils\" is a permanent characteristic).', '2025-06-07 19:52:17'),
(32, 3, 'Identify the example of enallage in Shakespearean usage:', NULL, 'MCQ', 'She loves thee not with her eyes but with her mind.', NULL, 'But me no buts!', NULL, 'To boldly go where no man has gone before.', NULL, 'The quality of mercy is not strained.', NULL, 'B', NULL, 3, 'Enallage deliberately uses incorrect grammar (\"But me\") for rhetorical effect.', '2025-06-07 19:52:17'),
(33, 3, 'Which construction demonstrates the \"accusative with infinitive\" structure?', NULL, 'MCQ', 'I believe him to be honest.', NULL, 'I believe that he is honest.', NULL, 'I believe in his honesty.', NULL, 'I believe he will be honest.', NULL, 'A', NULL, 3, 'Accusative (\"him\") + infinitive (\"to be\") forms the object complement structure.', '2025-06-07 19:52:17'),
(34, 3, 'What is the grammatical function of \"were\" in: \"If I were richer, I would travel.\"?', NULL, 'MCQ', 'Past indicative', NULL, 'Past subjunctive', NULL, 'Conditional mood', NULL, 'Imperfect aspect', NULL, 'B', NULL, 3, '\"Were\" here is past subjunctive, expressing a hypothetical situation.', '2025-06-07 19:52:17'),
(35, 3, 'Which sentence contains a \"small clause\"?', NULL, 'MCQ', 'I consider him a genius.', NULL, 'I think that he is a genius.', NULL, 'I regard him as a genius.', NULL, 'I believe in his genius.', NULL, 'A', NULL, 3, '\"Him a genius\" is a small clause functioning as object + complement without a verb.', '2025-06-07 19:52:17'),
(36, 3, 'Identify the example of syllepsis with zeugma:', NULL, 'MCQ', 'He lost his wallet and his temper.', NULL, 'She opened the door and her heart.', NULL, 'They ate the cake and conversation.', NULL, 'We saw the storm and lightning.', NULL, 'B', NULL, 3, 'Zeugma uses one verb (\"opened\") with two objects requiring different interpretations.', '2025-06-07 19:52:17'),
(37, 3, 'Which sentence demonstrates the \"ethical dative\" construction?', NULL, 'MCQ', 'He bought me a book.', NULL, 'Cry me a river.', NULL, 'She told me a story.', NULL, 'Write me a letter.', NULL, 'B', NULL, 3, 'Ethical dative (\"me\") shows emotional involvement rather than literal benefit.', '2025-06-07 19:52:17'),
(38, 3, 'What is the term for the construction in: \"It is raining cats and dogs.\"?', NULL, 'MCQ', 'Idiomatic expression', NULL, 'Expletive construction', NULL, 'Pleonastic subject', NULL, 'Weather impersonal', NULL, 'D', NULL, 3, 'Weather impersonals use \"it\" as a dummy subject for meteorological phenomena.', '2025-06-07 19:52:17'),
(39, 3, 'Which sentence contains a \"raised object\"?', NULL, 'MCQ', 'I expect him to win.', NULL, 'I want that he wins.', NULL, 'I prefer for him to win.', NULL, 'I hope he wins.', NULL, 'A', NULL, 3, '\"Him\" is raised from subordinate clause subject to main clause object position.', '2025-06-07 19:52:17'),
(40, 3, 'Identify the example of antimetabole:', NULL, 'MCQ', 'Ask not what your country can do for you...', NULL, 'When the going gets tough, the tough get going.', NULL, 'To be or not to be...', NULL, 'All the world\'s a stage...', NULL, 'B', NULL, 3, 'Antimetabole repeats words in inverted order (\"going...tough...tough...going\").', '2025-06-07 19:52:17'),
(41, 3, 'Which construction demonstrates \"noun stripping\"?', NULL, 'MCQ', 'She gave me coffee and him tea.', NULL, 'She gave coffee to me and tea to him.', NULL, 'She gave to me coffee and to him tea.', NULL, 'She gave me coffee and to him tea.', NULL, 'A', NULL, 3, 'Noun stripping omits repeated verbs (\"gave\" is not repeated before \"him tea\").', '2025-06-07 19:52:17'),
(42, 3, 'What is the term for the construction in: \"The more, the merrier.\"?', NULL, 'MCQ', 'Correlative comparative', NULL, 'Parallel superlative', NULL, 'Dependent clause', NULL, 'Adverbial phrase', NULL, 'A', NULL, 3, 'Correlative comparative uses parallel \"the + comparative\" structures.', '2025-06-07 19:52:17'),
(43, 3, 'Which sentence contains a \"hanging participle\"?', NULL, 'MCQ', 'Having eaten lunch, the meeting began.', NULL, 'After eating lunch, we began the meeting.', NULL, 'Lunch having been eaten, we met.', NULL, 'We ate lunch before the meeting.', NULL, 'A', NULL, 3, '\"Having eaten\" illogically modifies \"meeting\" rather than the participants.', '2025-06-07 19:52:17'),
(44, 3, 'Identify the example of aposiopesis:', NULL, 'MCQ', 'If you do that again, I\'ll—', NULL, 'Do or do not, there is no try.', NULL, 'It was the best of times...', NULL, 'To err is human...', NULL, 'A', NULL, 3, 'Aposiopesis abruptly breaks off speech (\"I\'ll—\") for dramatic effect.', '2025-06-07 19:52:17'),
(45, 3, 'Which construction demonstrates \"negative raising\"?', NULL, 'MCQ', 'I don\'t think he is coming.', NULL, 'He isn\'t thinking of coming.', NULL, 'I think he isn\'t coming.', NULL, 'Not thinking, he came anyway.', NULL, 'A', NULL, 3, 'Negative raising moves negation from subordinate (\"he isn\'t\") to main clause (\"I don\'t\").', '2025-06-07 19:52:17'),
(46, 4, 'Which of these is the currency of Japan?', NULL, 'MCQ', 'Won', 'won.webp', 'Yen', 'yen.jpg', 'Ringgit', 'ringgit.webp', 'Baht', 'bahat.jpg', 'B', NULL, 1, '', '2025-06-08 10:32:25'),
(47, 4, 'Which of these is the largest desert in the world?', NULL, 'MCQ', 'Sahara', 'sahara desert.jpg', 'Gobi', 'gobi desert.jpg', 'Kalahari', 'kalahari desert.JPG', 'Arabian', 'arabian desert.avif', 'A', NULL, 1, NULL, '2025-06-08 10:32:25'),
(48, 4, 'Which of these is the smallest continent?', NULL, 'MCQ', 'Antarctica', 'antarctica.avif', 'Australia', 'australia.png', 'South America', 'south america 2.jpg', 'Europe', 'europe2.jpg', 'B', NULL, 1, NULL, '2025-06-08 10:32:25'),
(49, 4, 'Which of these is the tallest mountain in the world?', NULL, 'MCQ', 'K2', 'k2.avif', 'Mount Everest', 'mount everest.jpg', 'Kangchenjunga', 'kangchenjunga.jpg', 'Lhotse', 'lhotse.jpg', 'B', NULL, 1, NULL, '2025-06-08 10:32:25'),
(50, 4, 'The Great Pyramid of Giza is located in which country?', NULL, 'MCQ', 'Greece', 'greece.jpg', 'Mongolia', 'mangolia.avif', 'Egypt', 'egypt.jpg', 'India', 'india.avif', 'C', NULL, 1, NULL, '2025-06-08 10:32:25'),
(51, 4, 'Which of these is NOT one of the seven wonders of the ancient world?', NULL, 'MCQ', 'Colosseum', 'colosseum.jpg', 'Hanging Gardens of Babylon', 'hanging garden of babylon.avif', 'Great Pyramid of Giza', 'pyramids of giza.avif', 'Lighthouse of Alexandria', 'lighthouse of alexandria.jpg', 'A', NULL, 1, NULL, '2025-06-08 10:32:25'),
(52, 4, 'Which of these is the largest ocean on Earth?', NULL, 'MCQ', 'Atlantic Ocean', 'atlantic blue sea.jpg', 'Indian Ocean', 'indian ocean.avif', 'Arctic Ocean', 'arctic ocean.jpg', 'Pacific Ocean', 'pacific ocean.jpg', 'D', NULL, 1, NULL, '2025-06-08 10:32:25'),
(53, 4, 'The Statue of Liberty was a gift to the USA from which country?', NULL, 'MCQ', 'France', 'france.jpg', 'England', 'england.jpg', 'Thailand', 'thailand.jpg', 'Spain', 'spain.jpg', 'A', NULL, 1, NULL, '2025-06-08 10:32:25'),
(54, 4, 'Which of these is the national bird of India?', NULL, 'MCQ', 'Sparrow', 'sparrow.jpg', 'Peacock', 'peacock.jpg', 'Pigeon', 'pigeon.jpg', 'Eagle', 'eagle.jpg', 'B', NULL, 1, NULL, '2025-06-08 10:32:25'),
(55, 4, 'Which animal says \'moo\'?', NULL, 'MCQ', 'Dog', 'dog.jpg', 'Cat', 'cat.avif', 'Cow', 'cow.jpg', 'Duck', 'duck.jpg', 'C', NULL, 1, NULL, '2025-06-08 10:32:25'),
(56, 4, 'Which of these is the largest continent by area?', NULL, 'MCQ', 'Africa', 'africa1.jpg', 'North America', 'north america1.png', 'Asia', 'asia1.jpg', 'Europe', 'europe.jpg', 'C', NULL, 1, NULL, '2025-06-08 10:32:25'),
(57, 4, 'The Great Wall of China is located in which country?', NULL, 'MCQ', 'Japan', 'japan.jpg', 'China', 'china.png', 'Mongolia', 'mangolia.avif', 'South Korea', 'south korea.jpg', 'B', NULL, 1, NULL, '2025-06-08 10:32:25'),
(58, 4, 'Which of these is the national animal of Australia?', NULL, 'MCQ', 'Lion', 'lion.jpg', 'Kangaroo', 'kangroo.avif', 'Coala', 'coala.jpg', 'Emu', 'emu.jpg', 'B', NULL, 1, NULL, '2025-06-08 10:32:25'),
(59, 4, 'The Eiffel Tower is located in which city?', NULL, 'MCQ', 'London', 'london tower.jpg', 'Berlin', 'berlin tower.jpg', 'Paris', 'paris.jpg', 'Rome', 'rome tower.jpg', 'C', NULL, 1, NULL, '2025-06-08 10:32:25'),
(60, 4, 'Which planet is known as the \'Red Planet\'?', NULL, 'MCQ', 'Venus', 'venus.jpg', 'Mars', 'mars1.jpeg', 'Jupiter', 'jupitor.jpg', 'Saturn', 'saturn.jpg', 'B', NULL, 1, NULL, '2025-06-08 10:32:25'),
(61, 5, 'The chemical symbol for Gold comes from which Latin word?', NULL, 'MCQ', 'Aurum', NULL, 'Argentum', NULL, 'Ferrum', NULL, 'Plumbum', NULL, 'A', 'Aurum', 1, '', '2025-06-18 10:04:29'),
(62, 5, 'Which gas makes up about 78% of Earth\'s atmosphere?', NULL, 'MCQ', 'Oxygen', NULL, 'Carbon Dioxide', NULL, 'Nitrogen', NULL, 'Argon', NULL, 'C', 'Nitrogen', 1, '', '2025-06-18 10:04:29'),
(63, 5, 'What is the pH value of pure water at 25°C?', NULL, 'MCQ', '5', NULL, '6', NULL, '7', NULL, '8', NULL, 'C', '7', 1, '', '2025-06-18 10:04:29'),
(64, 5, 'Which of these is NOT one of the classical states of matter?', NULL, 'MCQ', 'Solid', NULL, 'Liquid', NULL, 'Gas', NULL, 'Energy', NULL, 'D', 'Energy', 1, '', '2025-06-18 10:04:29'),
(65, 5, 'What is the smallest unit of an element that retains its properties?', NULL, 'MCQ', 'Molecule', NULL, 'Atom', NULL, 'Proton', NULL, 'Electron', NULL, 'B', 'Atom', 1, '', '2025-06-18 10:04:29'),
(66, 5, 'Which scientist is credited with proposing the atomic theory?', NULL, 'MCQ', 'Einstein', NULL, 'Dalton', NULL, 'Newton', NULL, 'Bohr', NULL, 'B', 'Dalton', 1, '', '2025-06-18 10:04:29'),
(67, 5, 'What is the chemical formula for water?', NULL, 'MCQ', 'H2O', NULL, 'HO2', NULL, 'H2O2', NULL, 'H3O', NULL, 'A', 'H2O', 1, '', '2025-06-18 10:04:29'),
(68, 5, 'Which of these elements is a noble gas?', NULL, 'MCQ', 'Oxygen', NULL, 'Chlorine', NULL, 'Neon', NULL, 'Nitrogen', NULL, 'C', 'Neon', 1, '', '2025-06-18 10:04:29'),
(69, 5, 'What is the primary process plants use to convert sunlight into chemical energy?', NULL, 'MCQ', 'Respiration', NULL, 'Photosynthesis', NULL, 'Transpiration', NULL, 'Oxidation', NULL, 'B', 'Photosynthesis', 1, '', '2025-06-18 10:04:29'),
(70, 5, 'Which acid gives vinegar its characteristic sour taste?', NULL, 'MCQ', 'Hydrochloric acid', NULL, 'Sulfuric acid', NULL, 'Acetic acid', NULL, 'Citric acid', NULL, 'C', 'Acetic acid', 1, '', '2025-06-18 10:04:29'),
(71, 5, 'How many protons does a carbon atom have in its nucleus?', NULL, 'MCQ', '6', NULL, '12', NULL, '14', NULL, '16', NULL, 'A', '6', 1, '', '2025-06-18 10:04:29'),
(72, 5, 'Which of these processes represents a chemical change?', NULL, 'MCQ', 'Melting ice', NULL, 'Boiling water', NULL, 'Burning wood', NULL, 'Dissolving salt', NULL, 'C', 'Burning wood', 1, '', '2025-06-18 10:04:29'),
(73, 5, 'What is the common name for sodium chloride (NaCl)?', NULL, 'MCQ', 'Baking soda', NULL, 'Table salt', NULL, 'Sugar', NULL, 'Bleach', NULL, 'B', 'Table salt', 1, '', '2025-06-18 10:04:29'),
(74, 5, 'Which metallic element is liquid at standard room temperature?', NULL, 'MCQ', 'Iron', NULL, 'Mercury', NULL, 'Gold', NULL, 'Aluminum', NULL, 'B', 'Mercury', 1, '', '2025-06-18 10:04:29'),
(75, 5, 'What is the primary component of natural gas?', NULL, 'MCQ', 'Ethane', NULL, 'Propane', NULL, 'Butane', NULL, 'Methane', NULL, 'D', 'Methane', 1, '', '2025-06-18 10:04:29'),
(76, 6, 'Which of the following elements is placed in the same group as oxygen in the modern periodic table?', NULL, 'MCQ', 'Nitrogen', NULL, 'Sulfur', NULL, 'Fluorine', NULL, 'Neon', NULL, 'B', 'Sulfur', 1, NULL, '2025-06-18 22:20:36'),
(77, 6, 'What is the period number of the element with atomic number 15 (Phosphorus)?', NULL, 'MCQ', '2', NULL, '3', NULL, '4', NULL, '5', NULL, 'B', '3', 1, NULL, '2025-06-18 22:20:36'),
(78, 6, 'Which block of the periodic table do transition metals belong to?', NULL, 'MCQ', 's-block', NULL, 'p-block', NULL, 'd-block', NULL, 'f-block', NULL, 'C', 'd-block', 1, NULL, '2025-06-18 22:20:36'),
(79, 6, 'Which element in the periodic table has the highest electronegativity?', NULL, 'MCQ', 'Oxygen', NULL, 'Nitrogen', NULL, 'Fluorine', NULL, 'Chlorine', NULL, 'C', 'Fluorine', 1, NULL, '2025-06-18 22:20:36'),
(80, 6, 'Which property increases across a period from left to right in the periodic table?', NULL, 'MCQ', 'Atomic radius', NULL, 'Metallic character', NULL, 'Ionization energy', NULL, 'Reactivity', NULL, 'C', 'Ionization energy', 1, NULL, '2025-06-18 22:20:36'),
(81, 6, 'Which of the following elements has a complete octet in its natural form?', NULL, 'MCQ', 'Helium', NULL, 'Neon', NULL, 'Oxygen', NULL, 'Hydrogen', NULL, 'B', 'Neon', 1, NULL, '2025-06-18 22:20:36'),
(82, 6, 'Which group contains the most reactive nonmetals?', NULL, 'MCQ', 'Group 1', NULL, 'Group 2', NULL, 'Group 17', NULL, 'Group 18', NULL, 'C', 'Group 17', 1, NULL, '2025-06-18 22:20:36'),
(83, 6, 'What is the reason for placing Hydrogen separately in the periodic table?', NULL, 'MCQ', 'It resembles alkali metals only', NULL, 'It is a noble gas', NULL, 'It has properties of both metals and nonmetals', NULL, 'It forms covalent bonds only', NULL, 'C', 'It has properties of both metals and nonmetals', 1, NULL, '2025-06-18 22:20:36'),
(84, 6, 'Which of the following pairs belong to the same period?', NULL, 'MCQ', 'Li and Na', NULL, 'O and S', NULL, 'C and N', NULL, 'Na and Cl', NULL, 'D', 'Na and Cl', 1, NULL, '2025-06-18 22:20:36'),
(85, 6, 'What is the valency of Aluminum (Atomic Number = 13)?', NULL, 'MCQ', '1', NULL, '2', NULL, '3', NULL, '4', NULL, 'C', '3', 1, NULL, '2025-06-18 22:20:36'),
(86, 6, 'Which of these elements has the smallest atomic radius?', NULL, 'MCQ', 'Sodium', NULL, 'Magnesium', NULL, 'Aluminum', NULL, 'Chlorine', NULL, 'D', 'Chlorine', 1, NULL, '2025-06-18 22:20:36'),
(87, 6, 'Which of the following statements is true for group 18 elements?', NULL, 'MCQ', 'They are highly reactive', NULL, 'They easily gain electrons', NULL, 'They have completely filled outer shells', NULL, 'They have 7 valence electrons', NULL, 'C', 'They have completely filled outer shells', 1, NULL, '2025-06-18 22:20:36'),
(88, 6, 'What is the position of Lanthanides and Actinides in the periodic table?', NULL, 'MCQ', 'Between groups 1 and 2', NULL, 'In the f-block below the main table', NULL, 'Along the leftmost side', NULL, 'In the d-block', NULL, 'B', 'In the f-block below the main table', 1, NULL, '2025-06-18 22:20:36'),
(89, 6, 'Which of the following elements is a metalloid?', NULL, 'MCQ', 'Sulfur', NULL, 'Boron', NULL, 'Calcium', NULL, 'Iodine', NULL, 'B', 'Boron', 1, NULL, '2025-06-18 22:20:36'),
(90, 6, 'Which of the following trends decreases down a group?', NULL, 'MCQ', 'Atomic size', NULL, 'Electron affinity', NULL, 'Metallic character', NULL, 'Number of shells', NULL, 'B', 'Electron affinity', 1, NULL, '2025-06-18 22:20:36'),
(91, 7, 'Which of the following reactions is an example of a photochemical reaction?', NULL, 'MCQ', '\'Rusting of iron', NULL, 'Formation of ozone from oxygen', NULL, 'Decomposition of silver chloride in sunlight', NULL, 'Combustion of methane', NULL, 'C', NULL, 1, '', '2025-06-18 22:43:29'),
(92, 7, 'Which of the following is not a redox reaction?', NULL, 'MCQ', 'Zn + CuSO₄ → ZnSO₄ + Cu', NULL, 'H₂ + Cl₂ → 2HCl', NULL, 'AgNO₃ + NaCl → AgCl + NaNO₃', NULL, 'Fe + CuSO₄ → FeSO₄ + Cu', NULL, 'C', 'AgNO₃ + NaCl → AgCl + NaNO₃', 1, NULL, '2025-06-18 22:47:58'),
(93, 7, 'Which gas is evolved when dilute hydrochloric acid reacts with zinc?', NULL, 'MCQ', 'Oxygen', NULL, 'Hydrogen', NULL, 'Chlorine', NULL, 'Carbon dioxide', NULL, 'B', 'Hydrogen', 1, NULL, '2025-06-18 22:47:58'),
(94, 7, 'Which of the following is an example of an endothermic reaction?', NULL, 'MCQ', 'Combustion of coal', NULL, 'Respiration', NULL, 'Photosynthesis', NULL, 'Neutralization of acid and base', NULL, 'C', 'Photosynthesis', 1, NULL, '2025-06-18 22:47:58'),
(95, 7, 'What happens when ammonium chloride is heated?', NULL, 'MCQ', 'It burns with a flame', NULL, 'It decomposes into ammonia and hydrogen chloride', NULL, 'It forms water and nitrogen', NULL, 'It remains unchanged', NULL, 'B', 'It decomposes into ammonia and hydrogen chloride', 1, NULL, '2025-06-18 22:47:58'),
(96, 7, 'Which reaction type involves one element replacing another in a compound?', NULL, 'MCQ', 'Combination', NULL, 'Displacement', NULL, 'Decomposition', NULL, 'Neutralization', NULL, 'B', 'Displacement', 1, NULL, '2025-06-18 22:47:58'),
(97, 7, 'Which of the following reactions will not take place?', NULL, 'MCQ', 'Fe + CuSO₄ → FeSO₄ + Cu', NULL, 'Cu + FeSO₄ → No reaction', NULL, 'Zn + HCl → ZnCl₂ + H₂', NULL, 'Na + H₂O → NaOH + H₂', NULL, 'B', 'Cu + FeSO₄ → No reaction', 1, NULL, '2025-06-18 22:47:58'),
(98, 7, 'Which reaction shows thermal decomposition?', NULL, 'MCQ', '2KClO₃ → 2KCl + 3O₂', NULL, 'NaOH + HCl → NaCl + H₂O', NULL, 'H₂ + Cl₂ → 2HCl', NULL, 'AgNO₃ + NaCl → AgCl + NaNO₃', NULL, 'A', '2KClO₃ → 2KCl + 3O₂', 1, NULL, '2025-06-18 22:47:58'),
(99, 7, 'What type of reaction is the reaction of calcium oxide with water to form calcium hydroxide?', NULL, 'MCQ', 'Decomposition', NULL, 'Neutralization', NULL, 'Exothermic combination', NULL, 'Endothermic combination', NULL, 'C', 'Exothermic combination', 1, NULL, '2025-06-18 22:47:58'),
(100, 7, 'Which metal reacts with steam but not with cold water?', NULL, 'MCQ', 'Potassium', NULL, 'Sodium', NULL, 'Magnesium', NULL, 'Copper', NULL, 'C', 'Magnesium', 1, NULL, '2025-06-18 22:47:58'),
(101, 7, 'Which of the following reactions involves a color change as a visual sign?', NULL, 'MCQ', 'Mixing dilute sulfuric acid and sodium carbonate', NULL, 'Copper sulfate solution + iron → iron sulfate + copper', NULL, 'Heating blue vitriol (CuSO₄·5H₂O)', NULL, 'All of the above', NULL, 'D', 'All of the above', 1, NULL, '2025-06-18 22:47:58'),
(102, 7, 'What happens when baking soda is heated?', NULL, 'MCQ', 'It releases hydrogen', NULL, 'It releases carbon dioxide', NULL, 'It forms a salt only', NULL, 'No reaction occurs', NULL, 'B', 'It releases carbon dioxide', 1, NULL, '2025-06-18 22:47:58'),
(103, 7, 'Which of the following represents a precipitation reaction?', NULL, 'MCQ', 'AgNO₃ + NaCl → AgCl↓ + NaNO₃', NULL, 'Zn + HCl → ZnCl₂ + H₂', NULL, 'CaCO₃ → CaO + CO₂', NULL, 'CuO + HCl → CuCl₂ + H₂O', NULL, 'A', 'AgNO₃ + NaCl → AgCl↓ + NaNO₃', 1, NULL, '2025-06-18 22:47:58'),
(104, 7, 'Which product is formed when ethanol is oxidized with acidified potassium dichromate?', NULL, 'MCQ', 'Methanol', NULL, 'Ethanoic acid', NULL, 'Acetone', NULL, 'Carbon dioxide', NULL, 'B', 'Ethanoic acid', 1, NULL, '2025-06-18 22:47:58'),
(105, 7, 'Which condition is essential for rusting of iron to occur?', NULL, 'MCQ', 'Oxygen only', NULL, 'Water only', NULL, 'Both oxygen and water', NULL, 'CO₂ and water', NULL, 'C', 'Both oxygen and water', 1, NULL, '2025-06-18 22:47:58');

-- --------------------------------------------------------

--
-- Table structure for table `quizzes`
--

CREATE TABLE `quizzes` (
  `quiz_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `time_limit` int(11) DEFAULT NULL,
  `passing_score` int(11) DEFAULT NULL,
  `difficulty` enum('Easy','Medium','Hard') DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` int(11) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quizzes`
--

INSERT INTO `quizzes` (`quiz_id`, `subject_id`, `title`, `description`, `time_limit`, `passing_score`, `difficulty`, `created_at`, `created_by`, `is_active`) VALUES
(1, 1, 'Grammer', '', 30, 45, 'Easy', '2025-06-07 19:22:46', NULL, 1),
(2, 1, 'Grammer', '', 30, 45, 'Medium', '2025-06-07 19:23:21', NULL, 1),
(3, 1, 'Grammer', '', 45, 45, 'Hard', '2025-06-07 19:50:24', NULL, 1),
(4, 4, 'General knowledge', '', 30, 45, 'Easy', '2025-06-08 10:21:25', NULL, 1),
(5, 5, 'Chemistry', '', 35, 45, 'Easy', '2025-06-18 09:56:51', NULL, 1),
(6, 5, 'Chemistry', '', 35, 45, 'Medium', '2025-06-18 22:11:10', NULL, 1),
(7, 5, 'Chemistry', '', 40, 45, 'Hard', '2025-06-18 22:22:23', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `quiz_attempts`
--

CREATE TABLE `quiz_attempts` (
  `attempt_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `quiz_id` int(11) NOT NULL,
  `start_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `end_time` timestamp NULL DEFAULT NULL,
  `score` int(11) DEFAULT NULL,
  `status` enum('In Progress','Completed','Abandoned') DEFAULT 'In Progress'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `subject_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `icon` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `is_active` tinyint(1) DEFAULT 1,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`subject_id`, `name`, `description`, `icon`, `created_at`, `is_active`, `updated_at`) VALUES
(1, 'English', '\"English: More Than Just a Language!\"', 'fas fa-font', '2025-06-07 17:13:08', 1, '2025-06-07 17:13:47'),
(4, 'General Knowledge', '\"Explore a world with Quiz\"', 'fa-solid fa-earth-americas', '2025-06-08 10:20:33', 1, '2025-06-08 10:20:33'),
(5, 'Chemistry', '\"From the smallest atom to the largest galaxy, chemistry connects it all.\"', 'fas fa-microscope', '2025-06-16 21:45:35', 1, '2025-06-16 21:45:35');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `profile_picture` varchar(255) DEFAULT NULL,
  `bio` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `last_login` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) DEFAULT 0,
  `is_active` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password_hash`, `first_name`, `last_name`, `profile_picture`, `bio`, `created_at`, `last_login`, `is_admin`, `is_active`) VALUES
(1, 'admin', 'admin@quizwebsite.com', 'admin123', 'Admin', 'User', 'user_1_68304ff38eb5d.jpg', NULL, '2025-05-19 08:22:12', NULL, 1, 1),
(2, 'john_doe', 'john@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'John', 'Doe', 'user_2_68305355938bf.jpg', NULL, '2025-05-19 08:22:12', NULL, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_answers`
--

CREATE TABLE `user_answers` (
  `user_answer_id` int(11) NOT NULL,
  `attempt_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `answer_id` int(11) DEFAULT NULL,
  `user_answer_text` text DEFAULT NULL,
  `is_correct` tinyint(1) DEFAULT NULL,
  `points_earned` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_badges`
--

CREATE TABLE `user_badges` (
  `user_badge_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `badge_id` int(11) NOT NULL,
  `earned_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`answer_id`),
  ADD KEY `question_id` (`question_id`);

--
-- Indexes for table `badges`
--
ALTER TABLE `badges`
  ADD PRIMARY KEY (`badge_id`);

--
-- Indexes for table `leaderboard`
--
ALTER TABLE `leaderboard`
  ADD PRIMARY KEY (`leaderboard_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `quiz_id` (`quiz_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`question_id`),
  ADD KEY `quiz_id` (`quiz_id`);

--
-- Indexes for table `quizzes`
--
ALTER TABLE `quizzes`
  ADD PRIMARY KEY (`quiz_id`),
  ADD KEY `subject_id` (`subject_id`),
  ADD KEY `created_by` (`created_by`);

--
-- Indexes for table `quiz_attempts`
--
ALTER TABLE `quiz_attempts`
  ADD PRIMARY KEY (`attempt_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `quiz_id` (`quiz_id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user_answers`
--
ALTER TABLE `user_answers`
  ADD PRIMARY KEY (`user_answer_id`),
  ADD KEY `attempt_id` (`attempt_id`),
  ADD KEY `question_id` (`question_id`),
  ADD KEY `answer_id` (`answer_id`);

--
-- Indexes for table `user_badges`
--
ALTER TABLE `user_badges`
  ADD PRIMARY KEY (`user_badge_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `badge_id` (`badge_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=424;

--
-- AUTO_INCREMENT for table `badges`
--
ALTER TABLE `badges`
  MODIFY `badge_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `leaderboard`
--
ALTER TABLE `leaderboard`
  MODIFY `leaderboard_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `question_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `quizzes`
--
ALTER TABLE `quizzes`
  MODIFY `quiz_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `quiz_attempts`
--
ALTER TABLE `quiz_attempts`
  MODIFY `attempt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_answers`
--
ALTER TABLE `user_answers`
  MODIFY `user_answer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_badges`
--
ALTER TABLE `user_badges`
  MODIFY `user_badge_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `answers_ibfk_1` FOREIGN KEY (`question_id`) REFERENCES `questions` (`question_id`) ON DELETE CASCADE;

--
-- Constraints for table `leaderboard`
--
ALTER TABLE `leaderboard`
  ADD CONSTRAINT `leaderboard_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `leaderboard_ibfk_2` FOREIGN KEY (`quiz_id`) REFERENCES `quizzes` (`quiz_id`);

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_ibfk_1` FOREIGN KEY (`quiz_id`) REFERENCES `quizzes` (`quiz_id`) ON DELETE CASCADE;

--
-- Constraints for table `quizzes`
--
ALTER TABLE `quizzes`
  ADD CONSTRAINT `quizzes_ibfk_1` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`subject_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `quizzes_ibfk_2` FOREIGN KEY (`created_by`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `quiz_attempts`
--
ALTER TABLE `quiz_attempts`
  ADD CONSTRAINT `quiz_attempts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `quiz_attempts_ibfk_2` FOREIGN KEY (`quiz_id`) REFERENCES `quizzes` (`quiz_id`);

--
-- Constraints for table `user_answers`
--
ALTER TABLE `user_answers`
  ADD CONSTRAINT `user_answers_ibfk_1` FOREIGN KEY (`attempt_id`) REFERENCES `quiz_attempts` (`attempt_id`),
  ADD CONSTRAINT `user_answers_ibfk_2` FOREIGN KEY (`question_id`) REFERENCES `questions` (`question_id`),
  ADD CONSTRAINT `user_answers_ibfk_3` FOREIGN KEY (`answer_id`) REFERENCES `answers` (`answer_id`) ON DELETE CASCADE;

--
-- Constraints for table `user_badges`
--
ALTER TABLE `user_badges`
  ADD CONSTRAINT `user_badges_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `user_badges_ibfk_2` FOREIGN KEY (`badge_id`) REFERENCES `badges` (`badge_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
