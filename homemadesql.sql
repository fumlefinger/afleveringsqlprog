CREATE DATABASE `schoolcontrols` /*!40100 COLLATE 'latin1_swedish_ci' */;

CREATE TABLE `administration` 
( `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL DEFAULT '0',
  `title` varchar(255) NOT NULL DEFAULT '0',
  `school` varchar(255) NOT NULL DEFAULT '0') 
  ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `administration` (`id`, `name`, `title`, `school`) VALUES
(1, 'Kim Guldholdt', 'Chef', 'Mercantec'),
(2, 'John', 'Super Chef', 'Mercantec');

CREATE TABLE `cards` 
( `id` int(11) NOT NULL,
  `cardnumber` int(255) NOT NULL DEFAULT '0',
  `credit` int(255) NOT NULL DEFAULT '0')
  ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `cards` (`id`, `cardnumber`, `credit`) VALUES
(1, 4325435, 150),
(2, 112341, 12314),
(3, 324254352, 2342424),
(4, 2343546, 234523452),
(5, 234325, 234324543),
(6, 123534521, 324324);

CREATE TABLE `schools` 
( `id` int(11) NOT NULL,
  `school_name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `boss` varchar(255) DEFAULT NULL)
  ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `schools` (`id`, `school_name`, `address`, `boss`) VALUES
(1, 'Mercantec', 'Hc. Andersensvej 9', NULL),
(2, 'søndervangskolen', 'Hammel', NULL);

CREATE TABLE `students` 
( `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `programme` varchar(255) DEFAULT NULL,
  `cardid` int(11) DEFAULT NULL,
  `school` varchar(255) DEFAULT NULL,
  `contact_teacher` varchar(255) DEFAULT NULL)
  ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `students` (`id`, `name`, `programme`, `cardid`, `school`, `contact_teacher`) VALUES
(1, 'Jannik', 'Datateknikker', NULL, 'Mercantec', 'Mads Bock'),
(2, 'Benjamin Sandland', 'Programmør', 2, 'Mercantec', 'Mads Bock'),
(3, 'Nicklas Pihl', 'Programmør', 9, 'Janniks Skole', 'Mads Bock'),
(4, 'Danny Haslund', 'Programming', 11, 'Mercantec', 'Mads Bock'),
(5, 'Michael Christensen', 'Programming', NULL, 'Mercantec', 'Mads Bock'),
(6, 'Martin Jørgensen', 'Programming', NULL, 'Mercantec', 'Mads Bock');

CREATE TABLE `teachers` 
( `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `school` varchar(255) DEFAULT NULL,
  `subjects` varchar(255) DEFAULT NULL)
  ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `teachers` (`id`, `name`, `school`, `subjects`) VALUES
(1, 'Jakup', 'Mercantec', 'Programming'),
(2, 'Mads Bock', 'Mercantec', 'Programming');

ALTER TABLE `administration`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `cards`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cardnumber` (`cardnumber`);

ALTER TABLE `schools`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cardid` (`cardid`);

ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `students`
  ADD CONSTRAINT `cards` FOREIGN KEY (`cardid`) REFERENCES `cards` (`id`) ON DELETE SET NULL;
COMMIT;