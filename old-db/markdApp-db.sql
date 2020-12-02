CREATE DATABASE IF NOT EXISTS `markdApp-old` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `markdApp-old`;

CREATE TABLE `user` (
  `userId` int PRIMARY KEY AUTO_INCREMENT,
  `firstName` varchar(255),
  `lastName` varchar(255),
  `emailAddress` varchar(255),
  `password` varchar(255),
  `created_at` timestamp
);

CREATE TABLE `boards` (
  `boardId` int PRIMARY KEY AUTO_INCREMENT,
  `userId` int,
  `boardName` varchar(255),
  `boardDescription` varchar(255),
  `created_at` timestamp
);

CREATE TABLE `savedToBoard` (
  `savedToBoardId` int PRIMARY KEY AUTO_INCREMENT,
  `boardId` int,
  `destinationId` int,
  `created_at` timestamp
);

CREATE TABLE `destination` (
  `destinationId` int PRIMARY KEY AUTO_INCREMENT,
  `destinationName` varchar(255),
  `destinationDescription` varchar(255),
  `city` varchar(255),
  `country` varchar(255),
  `tag1` varchar(255),
  `tag2` varchar(255),
  `tag3` varchar(255),
  `imageLink` varchar(255),
  `landingPageFlag` varchar(255),
  `created_at` timestamp
);

CREATE TABLE `save` (
  `saveId` int PRIMARY KEY AUTO_INCREMENT,
  `userId` int,
  `destinationId` int
);

CREATE TABLE `quiz` (
  `quizId` int PRIMARY KEY AUTO_INCREMENT,
  `quizName` varchar(255)
);

CREATE TABLE `quizQuestion` (
  `questionId` int PRIMARY KEY AUTO_INCREMENT,
  `quizId` int,
  `questionString` varchar(255),
  `resultOption1` varchar(255),
  `resultOption2` varchar(255)
);

CREATE TABLE `questionAnswerUser` (
  `answerId` int PRIMARY KEY AUTO_INCREMENT,
  `questionId` int,
  `userId` int,
  `answer` varchar(255),
  `created_at` timestamp
);

ALTER TABLE `boards` ADD FOREIGN KEY (`userId`) REFERENCES `user` (`userId`);

ALTER TABLE `savedToBoard` ADD FOREIGN KEY (`boardId`) REFERENCES `boards` (`boardId`);

ALTER TABLE `savedToBoard` ADD FOREIGN KEY (`destinationId`) REFERENCES `destination` (`destinationId`);

ALTER TABLE `save` ADD FOREIGN KEY (`userId`) REFERENCES `user` (`userId`);

ALTER TABLE `save` ADD FOREIGN KEY (`destinationId`) REFERENCES `destination` (`destinationId`);

ALTER TABLE `quizQuestion` ADD FOREIGN KEY (`quizId`) REFERENCES `quiz` (`quizId`);

ALTER TABLE `questionAnswerUser` ADD FOREIGN KEY (`questionId`) REFERENCES `quizQuestion` (`questionId`);

ALTER TABLE `questionAnswerUser` ADD FOREIGN KEY (`userId`) REFERENCES `user` (`userId`);
