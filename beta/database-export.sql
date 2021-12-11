-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 10, 2021 at 06:28 AM
-- Server version: 5.7.24
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `local_idm232`
--

-- --------------------------------------------------------

--
-- Table structure for table `artifact_sets`
--

CREATE TABLE `artifact_sets` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `img` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `artifact_sets`
--

INSERT INTO `artifact_sets` (`id`, `name`, `img`) VALUES
(1, '', NULL),
(2, 'Resolution of Sojourner', NULL),
(3, 'Tiny Miracle', NULL),
(4, 'Berserker', NULL),
(5, 'Instructor', NULL),
(6, 'The Exile', NULL),
(7, 'Defender\'s Will', NULL),
(8, 'Brave Heart', NULL),
(9, 'Martial Artist', NULL),
(10, 'Gambler', NULL),
(11, 'Scholar', NULL),
(12, 'Prayers for Illumination', NULL),
(13, 'Prayers for Destiny', NULL),
(14, 'Prayers for Wisdom', NULL),
(15, 'Prayers to Springtime', NULL),
(16, 'Gladiator\'s Finale', NULL),
(17, 'Wanderer\'s Troupe', NULL),
(18, 'Thunder­soother', NULL),
(19, 'Thundering Fury', NULL),
(20, 'Maiden Beloved', NULL),
(21, 'Viridescent Venerer', NULL),
(22, 'Crimson Witch of Flames', NULL),
(23, 'Lavawalker', NULL),
(24, 'Noblesse Oblige', NULL),
(25, 'Bloodstained Chivalry', NULL),
(26, 'Archaic Petra', NULL),
(27, 'Retracing Bolide', NULL),
(28, 'Blizzard Strayer', NULL),
(29, 'Heart of Depth', NULL),
(30, 'Tenacity of the Millelith', NULL),
(31, 'Pale Flame', NULL),
(32, 'Shimenawa\'s Reminiscence', NULL),
(33, 'Emblem of Severed Fate', NULL),
(34, 'Husk of Opulent Dreams', NULL),
(35, 'Ocean-Hued Clam', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `artifact_stats`
--

CREATE TABLE `artifact_stats` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `artifact_stats`
--

INSERT INTO `artifact_stats` (`id`, `name`) VALUES
(1, ''),
(2, 'HP'),
(3, 'ATK'),
(4, 'DEF'),
(5, 'Elemental Mastery'),
(6, 'HP (%)'),
(7, 'ATK (%)'),
(8, 'DEF (%)'),
(9, 'Energy Recharge (%)'),
(10, 'CRIT Rate (%)'),
(11, 'CRIT DMG (%)'),
(12, 'Healing Bonus (%)'),
(13, 'Anemo DMG Bonus (%)'),
(14, 'Cryo DMG Bonus (%)'),
(15, 'Dendro DMG Bonus (%)'),
(16, 'Electro DMG Bonus (%)'),
(17, 'Geo DMG Bonus (%)'),
(18, 'Hydro DMG Bonus (%)'),
(19, 'Pyro DMG Bonus (%)'),
(20, 'Physical DMG Bonus (%)');

-- --------------------------------------------------------

--
-- Table structure for table `character_recipes`
--

CREATE TABLE `character_recipes` (
  `recipe_id` int(11) NOT NULL,
  `character_id` varchar(100) NOT NULL,
  `weapon1` varchar(100) NOT NULL,
  `weapon2` varchar(100) NOT NULL,
  `weapon3` varchar(100) NOT NULL,
  `artifact1` varchar(100) NOT NULL,
  `artifact2` varchar(100) NOT NULL,
  `artifact3` varchar(100) NOT NULL,
  `artifact_priority1` varchar(100) NOT NULL,
  `artifact_priority2` varchar(100) NOT NULL,
  `artifact_priority3` varchar(100) NOT NULL,
  `artifact_priority4` varchar(100) NOT NULL,
  `artifact_priority5` varchar(100) NOT NULL,
  `artifact_sands` varchar(100) NOT NULL,
  `artifact_goblet` varchar(100) NOT NULL,
  `artifact_circlet` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `character_recipes`
--

INSERT INTO `character_recipes` (`recipe_id`, `character_id`, `weapon1`, `weapon2`, `weapon3`, `artifact1`, `artifact2`, `artifact3`, `artifact_priority1`, `artifact_priority2`, `artifact_priority3`, `artifact_priority4`, `artifact_priority5`, `artifact_sands`, `artifact_goblet`, `artifact_circlet`) VALUES
(1, 'Ningguang', 'Memory of Dust', 'Lost Prayer to the Sacred Winds', 'Skyward Atlas', 'Archaic Petra', 'Noblesse Oblige', 'Gladiator', 'CRIT Rate (%)', 'CRIT DMG (%)', 'Geo DMG Bonus (%)', 'ATK', 'ATK (%)', ' ATK (%)', 'Geo DMG Bonus (%)', 'CRIT Rate (%)'),
(1, 'Xiangling', 'Engulfing Lightning', '\"The Catch\"', 'Staff of Homa', 'Emblem of Severed Fate', 'Crimson Witch of Flames', 'Noblesse Oblige', 'CRIT Rate (%)', 'CRIT DMG (%)', 'Energy Recharge (%)', 'Elemental Mastery', 'ATK (%)', ' Energy Recharge (%)', 'Pyro DMG Bonus (%)', 'CRIT Rate (%)'),
(1, 'Bennett', 'Aquila Favonia', 'Skyward Blade', 'The Alley Flash', 'Noblesse Oblige', 'Maiden Beloved', '', 'ATK', 'Energy Recharge (%)', 'HP', 'HP (%)', 'Healing Bonus (%)', ' Energy Recharge (%)', 'HP (%)', 'Healing Bonus (%)'),
(1, 'Zhongli', 'Staff of Homa', 'Black Tassel', 'White Tassel', 'Tenacity of the Millelith', 'Archaic Petra', 'Noblesse Oblige', 'HP', 'HP (%)', 'Energy Recharge (%)', 'CRIT Rate (%)', 'CRIT DMG (%)', ' HP (%)', 'HP (%)', 'HP (%)');

-- --------------------------------------------------------

--
-- Table structure for table `elements`
--

CREATE TABLE `elements` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `img` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `genshin_characters`
--

CREATE TABLE `genshin_characters` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `img` int(11) DEFAULT NULL,
  `weapon_type` int(11) DEFAULT NULL,
  `rarity` int(11) DEFAULT NULL,
  `element` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `genshin_characters`
--

INSERT INTO `genshin_characters` (`id`, `name`, `img`, `weapon_type`, `rarity`, `element`) VALUES
(1, ' ', NULL, NULL, NULL, NULL),
(2, 'Amber', NULL, NULL, NULL, NULL),
(3, 'Kaeya', NULL, NULL, NULL, NULL),
(4, 'Lisa', NULL, NULL, NULL, NULL),
(5, 'Barbara', NULL, NULL, NULL, NULL),
(6, 'Razer', NULL, NULL, NULL, NULL),
(7, 'Xiangling', NULL, NULL, NULL, NULL),
(8, 'Beidou', NULL, NULL, NULL, NULL),
(9, 'Xingqiu', NULL, NULL, NULL, NULL),
(10, 'Ningguang', NULL, NULL, NULL, NULL),
(11, 'Fischl', NULL, NULL, NULL, NULL),
(12, 'Bennett', NULL, NULL, NULL, NULL),
(13, 'Noelle', NULL, NULL, NULL, NULL),
(14, 'Chongyun', NULL, NULL, NULL, NULL),
(15, 'Sucrose', NULL, NULL, NULL, NULL),
(16, 'Jean', NULL, NULL, NULL, NULL),
(17, 'Diluc', NULL, NULL, NULL, NULL),
(18, 'Qiqi', NULL, NULL, NULL, NULL),
(19, 'Mona', NULL, NULL, NULL, NULL),
(20, 'Keqing', NULL, NULL, NULL, NULL),
(21, 'Venti', NULL, NULL, NULL, NULL),
(22, 'Klee', NULL, NULL, NULL, NULL),
(23, 'Diona', NULL, NULL, NULL, NULL),
(24, 'Tartaglia', NULL, NULL, NULL, NULL),
(25, 'Xinyan', NULL, NULL, NULL, NULL),
(26, 'Zhongli', NULL, NULL, NULL, NULL),
(27, 'Albedo', NULL, NULL, NULL, NULL),
(28, 'Ganyu', NULL, NULL, NULL, NULL),
(29, 'Xiao', NULL, NULL, NULL, NULL),
(30, 'Hutao', NULL, NULL, NULL, NULL),
(31, 'Rosaria', NULL, NULL, NULL, NULL),
(32, 'Yanfei', NULL, NULL, NULL, NULL),
(33, 'Eula', NULL, NULL, NULL, NULL),
(34, 'Kazuha', NULL, NULL, NULL, NULL),
(35, 'Ayaka', NULL, NULL, NULL, NULL),
(36, 'Sayu', NULL, NULL, NULL, NULL),
(37, 'Yoimiya', NULL, NULL, NULL, NULL),
(38, 'Aloy', NULL, NULL, NULL, NULL),
(39, 'Sara', NULL, NULL, NULL, NULL),
(40, 'Shogun', NULL, NULL, NULL, NULL),
(41, 'Kokomi', NULL, NULL, NULL, NULL),
(42, 'Thoma', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `my_users`
--

CREATE TABLE `my_users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(150) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `my_users`
--

INSERT INTO `my_users` (`id`, `name`, `email`, `password`, `date_created`) VALUES
(1, 'bnvbcvcxzx', 'kjhjghfdgsads', '$2y$10$He0n.NzSAS6BacGJHmVWhu/ONkRo51t8HNsG3MVRfcnOHhwx4ZiwK', '2021-11-26 15:40:14'),
(2, 'lingan233', 'lingan233@gmail.com', '$2y$10$0Ul0HD8M0aMEPfrIWT233ebVPaGn8mB3jXE2fnvTC5jqrwb2/yxbu', '2021-11-28 22:10:21');

-- --------------------------------------------------------

--
-- Table structure for table `team_recipes`
--

CREATE TABLE `team_recipes` (
  `id` int(11) NOT NULL,
  `overview` text NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `author_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `team_recipes`
--

INSERT INTO `team_recipes` (`id`, `overview`, `date_created`, `author_id`) VALUES
(1, 'Ningguang and Xiangling are the DPS.\r\nXiangling should use her elemental burst in Bennett\'s circle. ', '2021-12-10 04:54:08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `weapons`
--

CREATE TABLE `weapons` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `img` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `weapons`
--

INSERT INTO `weapons` (`id`, `name`, `img`) VALUES
(1, ' ', NULL),
(2, '-----swords-----', NULL),
(3, 'Mistsplitter Reforged', NULL),
(4, 'Aquila Favonia', NULL),
(5, 'Summit Shaper', NULL),
(6, 'Skyward Blade', NULL),
(7, 'Freedom-Sworn', NULL),
(8, 'Primordial Jade Cutter', NULL),
(9, 'The Flute', NULL),
(10, 'The Black Sword', NULL),
(11, 'The Alley Flash', NULL),
(12, 'Sword of Descension', NULL),
(13, 'Sacrificial Sword', NULL),
(14, 'Royal Longsword', NULL),
(15, 'Prototype Rancour', NULL),
(16, 'Amenoma Kageuchi', NULL),
(17, 'Lion\'s Roar', NULL),
(18, 'Iron Sting', NULL),
(19, 'Festering Desire', NULL),
(20, 'Favonius Sword', NULL),
(21, 'Cinnabar Spindle', NULL),
(22, 'Blackcliff Longsword', NULL),
(23, 'Harbinger of Dawn', NULL),
(24, 'Fillet Blade', NULL),
(25, 'Skyrider Sword', NULL),
(26, 'Dark Iron Sword', NULL),
(27, 'Cool Steel', NULL),
(28, 'Traveler\'s Handy Sword', NULL),
(29, '-----claymores-----', NULL),
(30, 'Wolf\'s Gravestone', NULL),
(31, 'Skyward Pride', NULL),
(32, 'The Unforged', NULL),
(33, 'Song of Broken Pines', NULL),
(34, 'Redhorn Stonethresher', NULL),
(35, 'Akuoumaru', NULL),
(36, 'Royal Greatsword', NULL),
(37, 'Whiteblind', NULL),
(38, 'The Bell', NULL),
(39, 'Snow-Tombed Starsilver', NULL),
(40, 'Favonius Greatsword', NULL),
(41, 'Katsuragikiri Nagamasa', NULL),
(42, 'Sacrificial Greatsword', NULL),
(43, 'Serpent Spine', NULL),
(44, 'Blackcliff Slasher', NULL),
(45, 'Rainslasher', NULL),
(46, 'Prototype Archaic', NULL),
(47, 'Luxurious Sea-Lord', NULL),
(48, 'Lithic Blade', NULL),
(49, 'Quartz', NULL),
(50, 'Skyrider Greatsword', NULL),
(51, 'Debate Club', NULL),
(52, 'Bloodtainted Greatsword', NULL),
(53, 'White Iron Greatsword', NULL),
(54, 'Ferrous Shadow', NULL),
(55, '-----polearms-----', NULL),
(56, 'Engulfing Lightning', NULL),
(57, 'Skyward Spine', NULL),
(58, 'Primordial Jade Winged-Spear', NULL),
(59, 'Staff of Homa', NULL),
(60, 'Vortex Vanquisher', NULL),
(61, 'Prototype Starglitter', NULL),
(62, 'Lithic Spear', NULL),
(63, 'Kitain Cross Spear', NULL),
(64, '\"The Catch\"', NULL),
(65, 'Favonius Lance', NULL),
(66, 'Dragonspine Spear', NULL),
(67, 'Dragon\'s Bane', NULL),
(68, 'Deathmatch', NULL),
(69, 'Crescent Pike', NULL),
(70, 'Blackcliff Pole', NULL),
(71, 'Wavebreaker\'s Fin', NULL),
(72, 'Royal Spear', NULL),
(73, 'White Tassel', NULL),
(74, 'Black Tassel', NULL),
(75, 'Halberd', NULL),
(76, '-----catalysts-----', NULL),
(77, 'Lost Prayer to the Sacred Winds', NULL),
(78, 'Skyward Atlas', NULL),
(79, 'Everlasting Moonglow', NULL),
(80, 'Memory of Dust', NULL),
(81, 'Wine and Song', NULL),
(82, 'The Widsith', NULL),
(83, 'Solar Pearl', NULL),
(84, 'Sacrificial Fragments', NULL),
(85, 'Royal Grimoire', NULL),
(86, 'Prototype Amber', NULL),
(87, 'Mappa Mare', NULL),
(88, 'Hakushin Ring', NULL),
(89, 'Frostbearer', NULL),
(90, 'Favonius Codex', NULL),
(91, 'Eye of Perception', NULL),
(92, 'Dodoco Tales', NULL),
(93, 'Blackcliff Agate', NULL),
(94, 'Magic Guide', NULL),
(95, 'Otherworldly Story', NULL),
(96, 'Emerald Orb', NULL),
(97, 'Thrilling Tales of Dragon Slayers', NULL),
(98, 'Twin Nephrite', NULL),
(99, 'Amber Catalyst', NULL),
(100, '-----bows-----', NULL),
(101, 'Polar Star', NULL),
(102, 'Thundering Pulse', NULL),
(103, 'Elegy for the End', NULL),
(104, 'Skyward Harp', NULL),
(105, 'Amos\' Bow', NULL),
(106, 'Alley Hunter', NULL),
(107, 'The Viridescent Hunt', NULL),
(108, 'The Stringless', NULL),
(109, 'Sacrificial Bow', NULL),
(110, 'Rust', NULL),
(111, 'Royal Bow', NULL),
(112, 'Predator', NULL),
(113, 'Prototype Crescent', NULL),
(114, 'Mouun\'s Moon', NULL),
(115, 'Mitternachts Waltz', NULL),
(116, 'Hamayumi', NULL),
(117, 'Favonius Warbow', NULL),
(118, 'Compound Bow', NULL),
(119, 'Blackcliff Warbow', NULL),
(120, 'Windblume Ode', NULL),
(121, 'Raven Bow', NULL),
(122, 'Recurve Bow', NULL),
(123, 'Messenger', NULL),
(124, 'Sharpshooter\'s Oath', NULL),
(125, 'Slingshot', NULL),
(126, 'Ebony Bow', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artifact_sets`
--
ALTER TABLE `artifact_sets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artifact_stats`
--
ALTER TABLE `artifact_stats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `character_recipes`
--
ALTER TABLE `character_recipes`
  ADD KEY `recipe_id` (`recipe_id`),
  ADD KEY `character_id` (`character_id`);

--
-- Indexes for table `elements`
--
ALTER TABLE `elements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `genshin_characters`
--
ALTER TABLE `genshin_characters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `my_users`
--
ALTER TABLE `my_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `team_recipes`
--
ALTER TABLE `team_recipes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `weapons`
--
ALTER TABLE `weapons`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artifact_sets`
--
ALTER TABLE `artifact_sets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `artifact_stats`
--
ALTER TABLE `artifact_stats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `elements`
--
ALTER TABLE `elements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `genshin_characters`
--
ALTER TABLE `genshin_characters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `my_users`
--
ALTER TABLE `my_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `team_recipes`
--
ALTER TABLE `team_recipes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `weapons`
--
ALTER TABLE `weapons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
