-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2020 at 09:44 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `markdapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `boards`
--

CREATE TABLE `boards` (
  `boardId` int(11) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `boardName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `boardDescription` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `boards`
--

INSERT INTO `boards` (`boardId`, `userId`, `boardName`, `boardDescription`, `created_at`) VALUES
(1, 1, 'Test Board', 'this is a test board. ', '2020-12-01 19:02:34');

-- --------------------------------------------------------

--
-- Table structure for table `destination`
--

CREATE TABLE `destination` (
  `destinationId` int(11) NOT NULL,
  `destinationName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `destinationDescription` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tagName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `imageLink` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `landingPageFlag` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `destination`
--

INSERT INTO `destination` (`destinationId`, `destinationName`, `destinationDescription`, `city`, `country`, `tagName`, `imageLink`, `landingPageFlag`, `created_at`) VALUES
(1, 'explore el badi palace', 'Marrakech is a vibrant destination rich in culture. El Badi Palace is the most incredible building in the area. Built during the 16th century by Ahmad al-Mansur, a Sultan of the Saadi dynasty, the El Badi Palace, translated as “The Incomparable” from Arab', 'marrakech', 'morocco', 'chill', 'marrakech.jpg', NULL, '2020-11-27 01:06:43'),
(2, 'a stroll in norway', 'Nordfjord is one of the top destinations in Norway thanks to its breathtaking views. Visitors can take a long, slow pleasure cruise along the fjord and see a wide array of sights including glaciers, mountains, and the open sea.', 'nordfjord', 'norway', 'chill', 'nordfjord.jpg', NULL, '2020-11-27 01:06:52'),
(3, 'kayaking in tahiti', 'Tahiti is our top pick for a chill and relaxing destination. Explore Tahiti\'s beautiful lagoons with a 2-hour guided tour in a transparent kayak. Find sea turtles swimming along the lagoon floor, admire the coral gardens through the bottom of your kayak, ', 'Tahiti', 'Tahiti', 'chill', 'tahiti.jpg', NULL, '2020-12-01 16:56:07'),
(4, 'exciting night life', 'Shanghai has an upbeat and vibrant nightlife culture. A city that is bright as the day during the night, you can even stay up til sunrise enjoying the city to your heart\'s content!', 'shanghai', 'china', 'upbeat', 'shanghai.jpg', NULL, '2020-11-27 01:49:11'),
(5, 'scrambling into kabuki district', 'Tokyo is definitely a destination full of energy! Cross the street at the infamous scramble into the kabuki district for perfect shot for the gram! And you can\'t miss a trip up the Tokyo tower to see a view you won\'t ever forget!', 'Tokyo', 'Japan', 'upbeat', 'tokyo.jpg', NULL, '2020-11-27 01:49:11'),
(6, 'a city that never sleeps', 'Seoul is a city that never sleeps! Always high energy and bustling with people at all hours of the day, you can just feel the energy of the city. Take a look around Gyeongbuk Palace during the day, then head up the Namsan Tower at night for a day full of ', 'seoul', 'korea', 'upbeat', 'seoul.jpg', NULL, '2020-11-27 01:49:11'),
(7, 'crazy wildlife in the galapagos islands', 'The Galapagos Islands is one of the top green and eco-friendly destinations in the world. With minimal human interference in the eco-system, this destination features some of the wildest creatures to be seen on the globe! We recommend a wildlife tour to s', 'galapagos Islands', 'ecuador', 'blue', 'galapagos.jpg', NULL, '2020-12-01 16:45:45'),
(8, 'Grazing on the Isle of Eigg', 'The Isle of Eigg, is a top green and naturo-centric destination. With rolling hills and grazing sheep and cattle, this destination features that super cozy and relaxed aesthetic! we suggest just taking some time to take a walk through the town and look ar', 'Isle of Eigg', 'Scotland', 'green', 'eigg.jpg', NULL, '2020-12-01 16:45:45'),
(9, 'High tech eco-consciousness in Singapore', 'Singapore is one of the world\'s top high tech destinations. With crazy architectural marvels, this destination features a new aesthetic to \"eco-friendly\". We recommend going to the Supergrove to get that extra-high tech eco-friendly feel. ', 'Singapore', 'Singapore', 'green', 'singapore.jpg', NULL, '2020-12-01 16:46:10'),
(10, 'Explore the Marble Caves in Chile', 'Water has eroded these calcium carbonate cliffs to create a highly unusual & beautiful cave system that features an intense blue and distinct marble pattern throughout the structure.', 'carretera austral', 'chile', 'blue', 'carretera.jpg', NULL, '2020-12-01 16:55:53'),
(11, 'Enjoy the breeze in Santorini', 'They say Santorini has the best sunsets in the world. Imagine beams of sunlight reflecting off of the white washed buildings, Crayola-blue roofs and painted skies, and distant islands outlined in iridescent colors.', 'Santorini', 'Greece', 'blue', 'santorini.jpg', NULL, '2020-12-01 16:55:53'),
(12, 'Dye in Blue in Chefhouen', 'described as “mesmerizing,” “electric beauty,” and “Morocco’s best-kept secret\" Chefhouen features vibrant blue streets, immersing you into a whole new experience.', 'chefhouen', 'morocco', 'blue', 'chefhouen.jpg', NULL, '2020-12-01 16:55:53'),
(13, 'explore gothic architecture', 'Budapest\'s most striking architecture, from the Gothic Revival Hungarian Parliament Building to the Neoclassical St Stephen\'s Basilica. Budapest is bursting with buildings of various styles, with some dating back to the 13th century.', 'Budapest', 'Hungary', 'skyscraper', 'budapest.jpg', NULL, '2020-12-01 17:04:07'),
(14, 'In the clouds in Dubai', 'Dubai is definitely a destination that is \"Instagram-ready\". All of Dubai\'s built landscape capture the city\'s modern architectural wonders in the highest buildings to ever have been built. We recommend going to see the famous Burj Khalifa!', 'Dubai', 'United Arab Emirates', 'skyscraper', 'dubai.jpg', NULL, '2020-12-01 17:04:07'),
(15, 'Explore the White City in Tel Aviv', 'Tel Aviv features the best Bauhaus architecture in the world. Try going to the White City to experience that Bauhaus aesthetic.', 'Tel Aviv', 'Israel', 'skyscraper', 'telaviv.jpg', NULL, '2020-12-01 17:04:07'),
(16, 'Up in the Sky at the Sal Flats', 'Easily one of the most beautiful spots on the planet, the Uyuni Salt Flats are spread out over a whopping 4,086 square miles in southwest Bolivia. They are the world\'s largest salt flats and well worth the trip. They call it “The place where Heaven meets ', 'Uyuni', 'Bolivia', 'treehouse', 'uyuni.jpg', NULL, '2020-12-01 17:43:46'),
(17, 'Through Mulu', 'The Gunung Mulu National Park is a national park in Miri Division, Sarawak, Malaysia. It is a UNESCO World Heritage Site that encompasses caves and karst formations in a mountainous equatorial rainforest setting', 'Sarawak', 'Malaysia', 'treehouse', 'mulu.jpg', NULL, '2020-12-01 17:43:46'),
(18, 'Trek Up to Machu Picchu', 'More than 7,000 feet above sea level in the Andes Mountains, Machu Picchu is the most visited tourist destination in Peru. The reason Machu Picchu was selected as a Wonder of the World is that it remained for almost 500 years as a lost city.', 'Machu Picchu', 'Peru', 'treehouse', 'machupicchu.jpg', NULL, '2020-12-01 17:43:46'),
(19, 'Sweet treats in Ho Chi Minh City', 'Ho Chi Minh City is one of the world\'s top unique destinations for coffee lovers. Whether it’s served hot or iced, straight or with milk, Vietnamese coffee hits all the right notes and is an essential beverage of daily life. A cult following has blossomed', 'ho chi minh city', 'vietam', 'coffee', 'hcmc.jpg', NULL, '2020-12-01 17:51:15'),
(20, 'Sipping a Latte in Vienna', 'Although many countries can boast about the quality of their coffee, Vienna, Austria has elevated the beverage to an art form and its consumption to a lifestyle. Partaking in the Vienna coffee house is an integral part of the city’s social experience.', 'Vienna', 'Austria', 'coffee', 'vienna.jpg', NULL, '2020-12-01 17:51:15'),
(21, 'The Very First Starbucks in Seattle', 'It\'s no wonder that as the city that holds the very first ever Starbucks location, people in Seattle consume more coffee than in any other American city! We highly recommend you stop for a latte with some crazy latte-art; a staple of seattle coffee!', 'Seattle', 'United States', 'coffee', 'seattle.jpg', NULL, '2020-12-01 17:51:15'),
(22, 'Train Ride through Ella', 'The breathtaking train from Kandy to Ella delivers you to Sri Lanka hill country. Tea plantations, rolling hills and a slower pace of life welcome you. We recommend you check out Halpewatte Tea Factory Largest tea factory & Plantation in Uva Province.', 'Ella', 'Sri Lanka', 'tea', 'ella.jpg', NULL, '2020-12-01 18:06:10'),
(23, 'A \'cuppa\' in Jaipur', 'India is the second largest producer of tea in the world after China, including the famous Assam tea and Darjeeling tea. Tea is the \'State Drink\' of Assam. But instead of Assam we recommend you go to Jaipur, where the tea culture is more casual.', 'Jaipur', 'India', 'tea', 'jaipur.jpg', NULL, '2020-12-01 18:06:10'),
(24, 'Sipping tea in Taipei', 'Taiwanese tea culture includes tea arts, traditional tea ceremonies, and the social aspects of tea consumption in Taiwan. It can be traced back to its roots in Chinese tea culture. Many of the classical arts can be seen in the tea culture, such as calligr', 'taipei', 'taiwan', 'tea', 'taipei.jpg', NULL, '2020-12-01 18:06:10');

-- --------------------------------------------------------

--
-- Table structure for table `questionansweruser`
--

CREATE TABLE `questionansweruser` (
  `answerId` int(11) NOT NULL,
  `questionId` int(11) DEFAULT NULL,
  `userId` int(11) DEFAULT NULL,
  `answer` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `quizId` int(11) NOT NULL,
  `quizName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`quizId`, `quizName`) VALUES
(1, 'Onboarding');

-- --------------------------------------------------------

--
-- Table structure for table `quizquestion`
--

CREATE TABLE `quizquestion` (
  `questionId` int(11) NOT NULL,
  `quizId` int(11) DEFAULT NULL,
  `questionString` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `resultOption1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `resultOption2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `quizquestion`
--

INSERT INTO `quizquestion` (`questionId`, `quizId`, `questionString`, `resultOption1`, `resultOption2`) VALUES
(1, 1, 'how would you describe your personality?', 'upbeat', 'chill'),
(2, 1, 'what color invigorates you?', 'blue', 'green'),
(3, 1, 'where would you rather live?', 'skyscraper', 'treehouse'),
(4, 1, 'do you drink coffee or tea?', 'coffee', 'tea');

-- --------------------------------------------------------

--
-- Table structure for table `save`
--

CREATE TABLE `save` (
  `saveId` int(11) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `destinationId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `save`
--

INSERT INTO `save` (`saveId`, `userId`, `destinationId`) VALUES
(1, 1, 1),
(2, 1, 4),
(3, 1, 7);

-- --------------------------------------------------------

--
-- Table structure for table `savedtoboard`
--

CREATE TABLE `savedtoboard` (
  `savedToBoardId` int(11) NOT NULL,
  `boardId` int(11) DEFAULT NULL,
  `destinationId` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `savedtoboard`
--

INSERT INTO `savedtoboard` (`savedToBoardId`, `boardId`, `destinationId`, `created_at`) VALUES
(1, 1, 1, '2020-12-01 19:03:09'),
(2, 1, 4, '2020-12-01 19:03:09'),
(3, 1, 7, '2020-12-01 19:03:09');

-- --------------------------------------------------------

--
-- Table structure for table `tag`
--

CREATE TABLE `tag` (
  `tagId` int(11) NOT NULL,
  `tagName` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tag`
--

INSERT INTO `tag` (`tagId`, `tagName`) VALUES
(1, 'upbeat'),
(2, 'chill'),
(3, 'blue'),
(4, 'green'),
(5, 'skyscraper'),
(6, 'treehouse'),
(7, 'coffee'),
(8, 'tea');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userId` int(11) NOT NULL,
  `firstName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `emailAddress` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userId`, `firstName`, `lastName`, `emailAddress`, `password`, `created_at`) VALUES
(1, 'admin', 'admin', 'admin@admin.com', '123456', '2020-12-01 19:01:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `boards`
--
ALTER TABLE `boards`
  ADD PRIMARY KEY (`boardId`);

--
-- Indexes for table `destination`
--
ALTER TABLE `destination`
  ADD PRIMARY KEY (`destinationId`);

--
-- Indexes for table `questionansweruser`
--
ALTER TABLE `questionansweruser`
  ADD PRIMARY KEY (`answerId`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`quizId`);

--
-- Indexes for table `quizquestion`
--
ALTER TABLE `quizquestion`
  ADD PRIMARY KEY (`questionId`);

--
-- Indexes for table `save`
--
ALTER TABLE `save`
  ADD PRIMARY KEY (`saveId`);

--
-- Indexes for table `savedtoboard`
--
ALTER TABLE `savedtoboard`
  ADD PRIMARY KEY (`savedToBoardId`);

--
-- Indexes for table `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`tagId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `boards`
--
ALTER TABLE `boards`
  MODIFY `boardId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `destination`
--
ALTER TABLE `destination`
  MODIFY `destinationId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `questionansweruser`
--
ALTER TABLE `questionansweruser`
  MODIFY `answerId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `quizId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `quizquestion`
--
ALTER TABLE `quizquestion`
  MODIFY `questionId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `save`
--
ALTER TABLE `save`
  MODIFY `saveId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `savedtoboard`
--
ALTER TABLE `savedtoboard`
  MODIFY `savedToBoardId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tag`
--
ALTER TABLE `tag`
  MODIFY `tagId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
