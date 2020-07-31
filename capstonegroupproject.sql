-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2019 at 03:32 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `capstonegroupproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `username` varchar(100) DEFAULT NULL,
  `accountName` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`username`, `accountName`) VALUES
('Test', 'fishypancake'),
('', 'fishypancake'),
('', 'zezima'),
('jnelson', 'FishyPancake');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `commentID` int(11) NOT NULL,
  `skill` varchar(150) DEFAULT NULL,
  `comText` longtext DEFAULT NULL,
  `commenter` varchar(150) DEFAULT NULL,
  `comTime` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`commentID`, `skill`, `comText`, `commenter`, `comTime`) VALUES
(3, 'mining', 'Motherload Mine is some of the best XP in the game', 'jnelson', '2019-12-14'),
(4, 'mining', 'I love mining its so fun!', 'jnelson', '2019-12-14'),
(8, 'agility', 'Do the rooftops so you can get a graceful outfit!', 'jnelson', '2019-12-15'),
(9, 'agility', 'Ug training agility is so slow', 'jnelson', '2019-12-15'),
(10, 'smithing', 'Cannonballs are really good profit', 'Nate', '2019-12-15'),
(11, 'farming', 'Farming is one of my favorite skills', 'Nate', '2019-12-15'),
(12, 'firemaking', 'Wintertodt is the best place to train firemaking', 'nate2', '2019-12-16');

-- --------------------------------------------------------

--
-- Table structure for table `trainingmethods`
--

CREATE TABLE `trainingmethods` (
  `trainingMethodID` int(11) NOT NULL,
  `skill` varchar(50) DEFAULT NULL,
  `lvlRequired` int(11) DEFAULT NULL,
  `exp` decimal(10,2) DEFAULT NULL,
  `imageURL` varchar(100) DEFAULT NULL,
  `trainingMethodName` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trainingmethods`
--

INSERT INTO `trainingmethods` (`trainingMethodID`, `skill`, `lvlRequired`, `exp`, `imageURL`, `trainingMethodName`) VALUES
(1, 'mining', 1, '17.50', 'https://oldschool.runescape.wiki/images/c/c3/Copper_ore.png?23086', 'Copper Ore'),
(2, 'mining', 1, '17.50', 'https://oldschool.runescape.wiki/images/e/e0/Tin_ore.png?f5f95', 'Tin Ore'),
(3, 'mining', 15, '35.00', 'https://oldschool.runescape.wiki/images/e/e7/Iron_ore.png?d2e61', 'Iron Ore'),
(4, 'mining', 30, '50.00', 'https://oldschool.runescape.wiki/images/a/a7/Coal.png?0b396', 'Coal'),
(5, 'mining', 35, '45.00', 'https://oldschool.runescape.wiki/images/f/f3/Sandstone_%281kg%29.png?d745f', 'Sandstone'),
(6, 'mining', 40, '65.00', 'https://oldschool.runescape.wiki/images/9/91/Gold_ore.png?5d60c', 'Gold Ore'),
(7, 'mining', 45, '62.00', 'https://oldschool.runescape.wiki/images/1/18/Granite_%28500g%29.png?62a29', 'Granite'),
(8, 'mining', 55, '80.00', 'https://oldschool.runescape.wiki/images/9/9a/Mithril_ore.png?42cd6', 'Mithril Ore'),
(9, 'mining', 70, '95.00', 'https://oldschool.runescape.wiki/images/a/a1/Adamantite_ore.png?54faf', 'Adamantite Ore'),
(10, 'mining', 85, '125.00', 'https://oldschool.runescape.wiki/images/a/a0/Runite_ore.png?ae8da', 'Runite Ore'),
(11, 'mining', 92, '240.00', 'https://oldschool.runescape.wiki/images/2/2e/Amethyst.png?b6f41', 'Amethyst'),
(12, 'fishing', 1, '10.00', 'https://oldschool.runescape.wiki/images/d/dc/Raw_shrimps.png?2d989', 'Raw Shrimp'),
(13, 'fishing', 5, '20.00', 'https://oldschool.runescape.wiki/images/0/06/Raw_sardine.png?7fd2f', 'Raw Sardine'),
(14, 'fishing', 10, '30.00', 'https://oldschool.runescape.wiki/images/e/ec/Raw_herring.png?d649c', 'Raw Herring'),
(15, 'fishing', 15, '40.00', 'https://oldschool.runescape.wiki/images/8/89/Raw_anchovies.png?47299', 'Raw Anchovies'),
(16, 'fishing', 20, '50.00', 'https://oldschool.runescape.wiki/images/9/92/Raw_trout.png?13b97', 'Raw Trout'),
(17, 'fishing', 30, '70.00', 'https://oldschool.runescape.wiki/images/7/74/Raw_salmon.png?705ac', 'Raw Salmon'),
(18, 'fishing', 35, '80.00', 'https://oldschool.runescape.wiki/images/b/b0/Raw_tuna.png?d43e9', 'Raw Tuna'),
(19, 'fishing', 40, '90.00', 'https://oldschool.runescape.wiki/images/0/00/Raw_lobster.png?1136a', 'Raw Lobster'),
(20, 'fishing', 50, '100.00', 'https://oldschool.runescape.wiki/images/4/4d/Raw_swordfish.png?cb73c', 'Raw Swordfish'),
(21, 'fishing', 62, '120.00', 'https://oldschool.runescape.wiki/images/7/70/Raw_monkfish.png?583f4', 'Raw Monkfish'),
(22, 'fishing', 70, '67.00', 'https://oldschool.runescape.wiki/images/f/f6/Leaping_sturgeon.png?bc085', 'Barbarian Fishing'),
(23, 'fishing', 76, '110.00', 'https://oldschool.runescape.wiki/images/1/1f/Raw_shark.png?cbed5', 'Raw Shark'),
(24, 'fishing', 82, '120.00', 'https://oldschool.runescape.wiki/images/6/63/Raw_anglerfish.png?2fc0e', 'Raw Anglerfish'),
(25, 'fishing', 85, '130.00', 'https://oldschool.runescape.wiki/images/b/bf/Raw_dark_crab.png?b7a0b', 'Raw Dark Crab'),
(26, 'firemaking', 1, '40.00', 'https://oldschool.runescape.wiki/images/2/2d/Logs.png?a0c18', 'Logs'),
(27, 'firemaking', 15, '60.00', 'https://oldschool.runescape.wiki/images/c/cb/Oak_logs.png?f93f1', 'Oak Logs'),
(28, 'firemaking', 30, '90.00', 'https://oldschool.runescape.wiki/images/1/18/Willow_logs.png?a25e5', 'Willow Logs'),
(29, 'firemaking', 35, '105.00', 'https://oldschool.runescape.wiki/images/7/76/Teak_logs.png?d11f2', 'Teak Logs'),
(30, 'firemaking', 45, '135.00', 'https://oldschool.runescape.wiki/images/3/32/Maple_logs.png?2360e', 'Maple Logs'),
(31, 'firemaking', 50, '157.50', 'https://oldschool.runescape.wiki/images/1/1c/Mahogany_logs.png?c365c', 'Mahogany Logs'),
(32, 'firemaking', 60, '202.50', 'https://oldschool.runescape.wiki/images/a/ae/Yew_logs.png?053a4', 'Yew Logs'),
(33, 'firemaking', 75, '303.80', 'https://oldschool.runescape.wiki/images/2/20/Magic_logs.png?ff7aa', 'Magic Logs'),
(34, 'firemaking', 90, '350.00', 'https://oldschool.runescape.wiki/images/1/16/Redwood_logs.png?a240d', 'Redwood Logs'),
(35, 'agility', 1, '86.50', 'https://oldschool.runescape.wiki/images/thumb/e/e2/Gnome_child.png/25px-Gnome_child.png?2cf22', 'Gnome Stronghold'),
(36, 'agility', 10, '120.00', 'https://oldschool.runescape.wiki/images/9/9b/Mark_of_grace.png?bfd42', 'Draynor Village Rooftop'),
(37, 'agility', 20, '180.00', 'https://oldschool.runescape.wiki/images/9/9b/Mark_of_grace.png?bfd42', 'Al Kharid Rooftop'),
(38, 'agility', 30, '238.00', 'https://oldschool.runescape.wiki/images/9/9b/Mark_of_grace.png?bfd42', 'Varrock Rooftop'),
(39, 'agility', 30, '540.00', 'https://oldschool.runescape.wiki/images/e/e3/Clockwork_suit.png?00d37', 'Penguin'),
(40, 'agility', 35, '152.50', 'https://oldschool.runescape.wiki/images/9/9b/Mark_of_grace.png?bfd42', 'Barbarian Outpost'),
(41, 'agility', 40, '240.00', 'https://oldschool.runescape.wiki/images/9/9b/Mark_of_grace.png?bfd42', 'Canifis Rooftop'),
(42, 'agility', 48, '580.00', 'https://oldschool.runescape.wiki/images/d/d0/Karamjan_monkey_greegree.png?4d6bb', 'Ape Atol'),
(43, 'agility', 50, '440.00', 'https://oldschool.runescape.wiki/images/9/9b/Mark_of_grace.png?bfd42', 'Falador Rooftop'),
(44, 'agility', 52, '571.00', 'https://oldschool.runescape.wiki/images/0/06/Ghost%27s_skull.png?237a5', 'Wilderness'),
(45, 'agility', 60, '570.00', 'https://oldschool.runescape.wiki/images/9/9b/Mark_of_grace.png?bfd42', 'Seers Village Rooftop'),
(46, 'agility', 60, '570.00', 'https://oldschool.runescape.wiki/images/b/b7/Wolfbane.png?bb44d', 'Werewolf'),
(47, 'agility', 70, '890.00', 'https://oldschool.runescape.wiki/images/9/9b/Mark_of_grace.png?bfd42', 'Pollnivneach Rooftop'),
(48, 'agility', 75, '999.99', 'https://oldschool.runescape.wiki/images/a/af/Teleport_crystal.png?a3186', 'Prifddinas (averaged)'),
(49, 'agility', 80, '780.00', 'https://oldschool.runescape.wiki/images/9/9b/Mark_of_grace.png?bfd42', 'Rellekka Rooftop'),
(50, 'agility', 90, '793.00', 'https://oldschool.runescape.wiki/images/9/9b/Mark_of_grace.png?bfd42', 'Ardougne Rooftop'),
(54, 'thieving', 1, '8.00', 'https://oldschool.runescape.wiki/images/0/0c/Thief_Man.png?5d8bc', 'Man/Woman'),
(55, 'thieving', 10, '14.50', 'https://oldschool.runescape.wiki/images/1/15/Thief_Farmer.png?42e52', 'Farmer'),
(56, 'thieving', 15, '18.50', 'https://oldschool.runescape.wiki/images/9/9c/Thief_Ham_%28Woman%29.png?d400c', 'Female H.A.M member'),
(57, 'thieving', 20, '22.50', 'https://oldschool.runescape.wiki/images/9/92/Thief_Ham_%28Man%29.png?6aae0', 'Male H.A.M member'),
(58, 'thieving', 25, '26.00', 'https://oldschool.runescape.wiki/images/e/ed/Thief_Warrior.png?db130', 'Warrior Woman'),
(59, 'thieving', 32, '35.50', 'https://oldschool.runescape.wiki/images/b/b4/Thief_Rogue.png?b959e', 'Rogue'),
(60, 'thieving', 36, '40.00', 'https://oldschool.runescape.wiki/images/6/65/Thief_Cave_goblin.png?4e47a', 'Cave goblin'),
(61, 'thieving', 38, '43.00', 'https://oldschool.runescape.wiki/images/c/c1/Thief_Master_farmer.png?0979f', 'Master Farmer'),
(62, 'thieving', 40, '46.80', 'https://oldschool.runescape.wiki/images/1/1b/Thief_Guard.png?26da6', 'Guard'),
(63, 'thieving', 45, '65.00', 'https://oldschool.runescape.wiki/images/2/2d/Thief_Fremennik.png?307f3', 'Fremennik Citizen'),
(64, 'thieving', 45, '65.00', 'https://oldschool.runescape.wiki/images/5/57/Thief_Pollnivnian_bandit.png?dd131', 'Bearded Pollnivnian Bandit'),
(65, 'thieving', 53, '79.50', 'https://oldschool.runescape.wiki/images/3/39/Thief_Desert_bandit.png?09a01', 'Desert Bandit'),
(66, 'thieving', 55, '84.30', 'https://oldschool.runescape.wiki/images/2/20/Thief_Knight.png?1405d', 'Knight of Ardougne'),
(67, 'thieving', 55, '84.30', 'https://oldschool.runescape.wiki/images/5/57/Thief_Pollnivnian_bandit.png?dd131', 'Pollnivian Bandit'),
(68, 'thieving', 65, '137.50', 'https://oldschool.runescape.wiki/images/b/bd/Thief_Menaphite_thug.png?0e952', 'Menaphite Thug'),
(69, 'thieving', 70, '151.75', 'https://oldschool.runescape.wiki/images/5/5e/Thief_Paladin.png?0634d', 'Paladin'),
(70, 'thieving', 75, '198.50', 'https://oldschool.runescape.wiki/images/0/07/Thief_Gnome.png?3f0e4', 'Gnome'),
(71, 'thieving', 80, '275.00', 'https://oldschool.runescape.wiki/images/a/aa/Thief_Hero.png?aebe6', 'Hero'),
(72, 'thieving', 85, '353.00', 'https://oldschool.runescape.wiki/images/6/62/Thief_Elf.png?587d0', 'Elf'),
(73, 'herblore', 3, '25.00', 'https://oldschool.runescape.wiki/images/8/86/Attack_potion%283%29.png?74c44', 'Attack Potion'),
(74, 'herblore', 5, '37.50', 'https://oldschool.runescape.wiki/images/7/7b/Antipoison%283%29.png?02e60', 'Antipoison'),
(75, 'herblore', 12, '50.00', 'https://oldschool.runescape.wiki/images/5/50/Strength_potion%283%29.png?23a1a', 'Strength potion'),
(76, 'herblore', 15, '50.00', 'https://oldschool.runescape.wiki/images/8/8c/Serum_207_%283%29.png?d05f0', 'Serum 207'),
(77, 'herblore', 22, '62.50', 'https://oldschool.runescape.wiki/images/0/03/Restore_potion%283%29.png?fd50c', 'Restore Potion'),
(78, 'herblore', 26, '67.50', 'https://oldschool.runescape.wiki/images/6/6a/Energy_potion%283%29.png?29afb', 'Energy potion'),
(79, 'herblore', 34, '80.00', 'https://oldschool.runescape.wiki/images/2/22/Agility_potion%283%29.png?b7f24', 'Agility potion'),
(80, 'herblore', 36, '84.00', 'https://oldschool.runescape.wiki/images/6/62/Combat_potion%283%29.png?23785', 'Combat potion'),
(81, 'herblore', 38, '87.50', 'https://oldschool.runescape.wiki/images/0/07/Prayer_potion%283%29.png?f9b25', 'Prayer potion'),
(82, 'herblore', 45, '100.00', 'https://oldschool.runescape.wiki/images/b/bc/Super_attack%283%29.png?e48de', 'Super attack'),
(83, 'herblore', 48, '106.30', 'https://oldschool.runescape.wiki/images/a/ae/Superantipoison%283%29.png?e9928', 'Superantipoison'),
(84, 'herblore', 52, '117.50', 'https://oldschool.runescape.wiki/images/a/ab/Super_energy%283%29.png?84f18', 'Super energy'),
(85, 'herblore', 55, '125.00', 'https://oldschool.runescape.wiki/images/9/9f/Super_strength%283%29.png?25714', 'Super Strength'),
(86, 'herblore', 63, '142.50', 'https://oldschool.runescape.wiki/images/d/dc/Super_restore%283%29.png?b14cf', 'Super restore'),
(87, 'herblore', 66, '150.00', 'https://oldschool.runescape.wiki/images/9/99/Super_defence%283%29.png?3c0ef', 'Super defence'),
(88, 'herblore', 69, '157.50', 'https://oldschool.runescape.wiki/images/f/f5/Antifire_potion%283%29.png?e18e7', 'Antifire potion'),
(89, 'herblore', 72, '162.50', 'https://oldschool.runescape.wiki/images/0/0f/Ranging_potion%283%29.png?b09a6', 'Ranging potion '),
(90, 'herblore', 76, '172.50', 'https://oldschool.runescape.wiki/images/0/02/Magic_potion%283%29.png?774cb', 'Magic Potion'),
(91, 'herblore', 81, '180.00', 'https://oldschool.runescape.wiki/images/b/b6/Saradomin_brew%283%29.png?8ae4e', 'Saradomin brew'),
(92, 'herblore', 84, '82.50', 'https://oldschool.runescape.wiki/images/6/63/Extended_antifire%284%29.png?c3eaa', 'Extended antifire'),
(93, 'herblore', 90, '150.00', 'https://oldschool.runescape.wiki/images/8/82/Super_combat_potion%284%29.png?dc66c', 'Super combat potion'),
(94, 'herblore', 92, '130.00', 'https://oldschool.runescape.wiki/images/3/32/Super_antifire_potion%284%29.png?6a146', 'Super antifire potion'),
(95, 'herblore', 94, '125.00', 'https://oldschool.runescape.wiki/images/6/6d/Anti-venom%2B%284%29.png?c0b09', 'Anti-venom+'),
(96, 'herblore', 98, '125.00', 'https://oldschool.runescape.wiki/images/1/12/Extended_super_antifire%284%29.png?ac98e', 'Extended super antifire'),
(97, 'smithing', 1, '6.25', 'https://oldschool.runescape.wiki/images/c/cd/Bronze_bar.png?4f105', 'Bronze bar'),
(98, 'smithing', 1, '12.50', 'https://oldschool.runescape.wiki/images/a/ac/Bronze_dagger.png?79f14', 'Bronze dagger'),
(99, 'smithing', 15, '12.50', 'https://oldschool.runescape.wiki/images/1/14/Iron_bar.png?1c59b', 'Iron bar'),
(100, 'smithing', 15, '25.00', 'https://oldschool.runescape.wiki/images/1/14/Iron_bar.png?1c59b', 'Iron bar'),
(101, 'smithing', 35, '25.60', 'https://oldschool.runescape.wiki/images/7/77/Cannonball_%28Christmas%29.png?b9c05', 'Cannonball'),
(102, 'smithing', 40, '22.50', 'https://oldschool.runescape.wiki/images/0/07/Gold_bar.png?05c77', 'Gold bar'),
(103, 'smithing', 50, '30.00', 'https://oldschool.runescape.wiki/images/1/18/Mithril_bar.png?a3d3b', 'Mithril bar'),
(104, 'smithing', 68, '250.00', 'https://oldschool.runescape.wiki/images/b/b5/Mithril_platebody.png?c1ded', 'Mithril Platebody'),
(105, 'smithing', 70, '37.50', 'https://oldschool.runescape.wiki/images/e/eb/Adamantite_bar.png?06d1e', 'Adamant Bar'),
(106, 'smithing', 88, '312.50', 'https://oldschool.runescape.wiki/images/7/71/Adamant_platebody.png?b8df5', 'Adamant Platebody'),
(107, 'smithing', 85, '50.00', 'https://oldschool.runescape.wiki/images/8/83/Runite_bar.png?10c4d', 'Runite bar'),
(108, 'cooking', 1, '30.00', 'https://oldschool.runescape.wiki/images/6/60/Shrimps.png?3e5d4', 'Shrimp'),
(109, 'cooking', 15, '70.00', 'https://oldschool.runescape.wiki/images/6/66/Trout.png?0b59a', 'Trout'),
(110, 'cooking', 25, '90.00', 'https://oldschool.runescape.wiki/images/e/e0/Salmon.png?8ed0d', 'Salmon'),
(111, 'cooking', 30, '100.00', 'https://oldschool.runescape.wiki/images/c/c5/Tuna.png?a64a6', 'Tuna'),
(112, 'cooking', 40, '120.00', 'https://oldschool.runescape.wiki/images/9/9f/Lobster.png?059b3', 'Lobster'),
(113, 'cooking', 35, '200.00', 'https://oldschool.runescape.wiki/images/9/98/Jug_of_wine.png?a1091', 'Jug of wine'),
(114, 'cooking', 45, '140.00', 'https://oldschool.runescape.wiki/images/f/f7/Swordfish.png?93249', 'Swordfish'),
(115, 'cooking', 80, '210.00', 'https://oldschool.runescape.wiki/images/1/14/Shark.png?d26d2', 'Shark'),
(116, 'cooking', 30, '190.00', 'https://oldschool.runescape.wiki/images/thumb/6/6a/Cooked_karambwan_detail.png/120px-Cooked_karambwa', 'Karambwan'),
(117, 'cooking', 84, '230.00', 'https://oldschool.runescape.wiki/images/6/64/Anglerfish.png?2fc0e', 'Anglerfish'),
(118, 'woodcutting', 1, '25.00', 'https://oldschool.runescape.wiki/images/2/2d/Logs.png?a0c18', 'Logs'),
(119, 'woodcutting', 1, '25.00', 'https://oldschool.runescape.wiki/images/d/d8/Achey_tree_logs.png?3e3f7', 'Achey tree logs'),
(120, 'woodcutting', 15, '37.50', 'https://oldschool.runescape.wiki/images/c/cb/Oak_logs.png?f93f1', 'Oak logs'),
(121, 'woodcutting', 30, '67.50', 'https://oldschool.runescape.wiki/images/1/18/Willow_logs.png?a25e5', 'Willow logs'),
(122, 'woodcutting', 35, '85.00', 'https://oldschool.runescape.wiki/images/7/76/Teak_logs.png?d11f2', 'Teak logs'),
(123, 'woodcutting', 45, '82.50', 'https://oldschool.runescape.wiki/images/d/dc/Bark.png?b8087', 'Bark'),
(124, 'woodcutting', 45, '100.00', 'https://oldschool.runescape.wiki/images/3/32/Maple_logs.png?2360e', 'Maple logs'),
(125, 'woodcutting', 50, '125.00', 'https://oldschool.runescape.wiki/images/1/1c/Mahogany_logs.png?c365c', 'Mahogany logs'),
(126, 'woodcutting', 54, '40.00', 'https://oldschool.runescape.wiki/images/1/1d/Arctic_pine_logs.png?b8087', 'Arctic pine logs'),
(127, 'woodcutting', 60, '175.00', 'https://oldschool.runescape.wiki/images/a/ae/Yew_logs.png?053a4', 'Yew logs'),
(128, 'woodcutting', 65, '127.00', 'https://general-543f.kxcdn.com/items/sulliuscep_cap.png', 'Sulliusceps'),
(129, 'woodcutting', 75, '250.00', 'https://oldschool.runescape.wiki/images/2/20/Magic_logs.png?ff7aa', 'Magic logs'),
(130, 'woodcutting', 90, '380.00', 'https://oldschool.runescape.wiki/images/1/16/Redwood_logs.png?a240d', 'Redwood logs'),
(131, 'farming', 15, '481.30', 'https://oldschool.runescape.wiki/images/7/78/Acorn_5.png?262f7', 'Acorn'),
(132, 'farming', 27, '1272.50', 'https://oldschool.runescape.wiki/images/6/6c/Apple_tree_seed_5.png?8276d', 'Apple'),
(133, 'farming', 30, '1481.50', 'https://oldschool.runescape.wiki/images/a/a4/Willow_seed_5.png?e7584', 'Willow'),
(134, 'farming', 33, '1841.50', 'https://oldschool.runescape.wiki/images/6/60/Banana_tree_seed_5.png?e8ce4', 'Banana'),
(135, 'farming', 35, '7325.00', 'https://oldschool.runescape.wiki/images/1/13/Teak_seed_5.png?c9fb1', 'Teak'),
(136, 'farming', 39, '2586.70', 'https://oldschool.runescape.wiki/images/c/c1/Orange_tree_seed_5.png?d301a', 'Orange'),
(137, 'farming', 42, '3036.90', 'https://oldschool.runescape.wiki/images/9/98/Curry_tree_seed_5.png?bd411', 'Curry'),
(138, 'farming', 45, '3448.40', 'https://oldschool.runescape.wiki/images/5/56/Maple_seed_5.png?ee59d', 'Maple'),
(139, 'farming', 51, '4791.70', 'https://oldschool.runescape.wiki/images/8/84/Pineapple_seed_5.png?95a99', 'Pineapple'),
(140, 'farming', 55, '15783.00', 'https://oldschool.runescape.wiki/images/d/db/Mahogany_seed_5.png?2a71a', 'Mahogany'),
(141, 'farming', 57, '6380.40', 'https://oldschool.runescape.wiki/images/a/a7/Papaya_tree_seed_5.png?7574f', 'Papaya'),
(142, 'farming', 60, '7150.90', 'https://oldschool.runescape.wiki/images/6/6e/Yew_seed_5.png?eb8e4', 'Yew'),
(143, 'farming', 68, '10509.60', 'https://oldschool.runescape.wiki/images/b/b2/Palm_tree_seed_5.png?9afdd', 'Palm tree'),
(144, 'farming', 72, '12516.50', 'https://oldschool.runescape.wiki/images/2/20/Calquat_tree_seed_5.png?3db5b', 'Calquat'),
(145, 'farming', 74, '13366.00', 'https://oldschool.runescape.wiki/images/2/29/Crystal_acorn_5.png?c55e3', 'Crystal acorn'),
(146, 'farming', 75, '13913.80', 'https://oldschool.runescape.wiki/images/4/4d/Magic_seed_5.png?db296', 'Magic seed'),
(147, 'farming', 81, '17825.00', 'https://oldschool.runescape.wiki/images/a/ab/Dragonfruit_tree_seed_5.png?3777b', 'Dragonfruit'),
(148, 'farming', 85, '14404.50', 'https://oldschool.runescape.wiki/images/d/d5/Celastrus_seed_5.png?b9eff', 'Celastrus'),
(149, 'farming', 90, '22680.00', 'https://oldschool.runescape.wiki/images/b/b4/Redwood_tree_seed_5.png?86eac', 'Redwood'),
(150, 'crafting', 1, '13.80', 'https://oldschool.runescape.wiki/images/9/95/Leather_gloves.png?af91a', 'Leather Gloves'),
(151, 'crafting', 7, '16.20', 'https://oldschool.runescape.wiki/images/e/ea/Leather_boots.png?0917a', 'Leather boots'),
(152, 'crafting', 9, '18.50', 'https://oldschool.runescape.wiki/images/9/96/Leather_cowl.png?af91a', 'Leather cowl'),
(153, 'crafting', 11, '22.00', 'https://oldschool.runescape.wiki/images/a/a0/Leather_vambraces.png?af91a', 'Leather vambraces'),
(154, 'crafting', 14, '25.00', 'https://oldschool.runescape.wiki/images/4/45/Leather_body.png?0917a', 'Leather body'),
(155, 'crafting', 18, '27.00', 'https://oldschool.runescape.wiki/images/e/ee/Leather_chaps.png?af91a', 'Leather chaps'),
(156, 'crafting', 28, '559.00', 'https://oldschool.runescape.wiki/images/1/1d/Hardleather_body.png?68fac', 'Hard leather bodies'),
(157, 'crafting', 20, '50.00', 'https://oldschool.runescape.wiki/images/f/f7/Sapphire.png?0c4f5', 'Sapphire'),
(158, 'crafting', 27, '67.50', 'https://oldschool.runescape.wiki/images/6/6a/Emerald.png?084ea', 'Emerald'),
(159, 'crafting', 34, '85.00', 'https://oldschool.runescape.wiki/images/a/a9/Ruby.png?da807', 'Ruby'),
(160, 'crafting', 43, '107.50', 'https://oldschool.runescape.wiki/images/e/ea/Diamond.png?dae6b', 'Diamond'),
(161, 'crafting', 55, '137.50', 'https://oldschool.runescape.wiki/images/2/25/Dragonstone.png?fcd6f', 'Dragonstone'),
(162, 'crafting', 54, '100.00', 'https://oldschool.runescape.wiki/images/a/a1/Water_battlestaff.png?45d96', 'Water battlestaff'),
(163, 'crafting', 58, '112.50', 'https://oldschool.runescape.wiki/images/e/ee/Earth_battlestaff.png?0a489', 'Earth battlestaff'),
(164, 'crafting', 62, '125.00', 'https://oldschool.runescape.wiki/images/3/3a/Fire_battlestaff.png?4e9db', 'Fire battlestaff'),
(165, 'crafting', 66, '137.50', 'https://oldschool.runescape.wiki/images/a/a0/Air_battlestaff.png?0a489', 'Air battlestaff'),
(166, 'crafting', 63, '186.00', 'https://oldschool.runescape.wiki/images/0/0f/Green_d%27hide_body.png?ab383', 'Green d\'hide body'),
(167, 'crafting', 71, '210.00', 'https://oldschool.runescape.wiki/images/8/80/Blue_d%27hide_body.png?50ade', 'Blue d\'hide body'),
(168, 'crafting', 77, '234.00', 'https://oldschool.runescape.wiki/images/2/27/Red_d%27hide_body.png?a971f', 'Red d\'hide body'),
(169, 'crafting', 84, '258.00', 'https://oldschool.runescape.wiki/images/4/4d/Black_d%27hide_body.png?c167f', 'Black d\'hide body'),
(170, 'fletching', 1, '1.33', 'https://oldschool.runescape.wiki/images/f/f6/Bronze_arrow_5.png?908c0', 'Bronze arrows'),
(171, 'fletching', 5, '5.00', 'https://oldschool.runescape.wiki/images/f/f9/Shortbow.png?83535', 'Shortbows'),
(172, 'fletching', 10, '10.00', 'https://oldschool.runescape.wiki/images/e/e4/Longbow.png?1d3dc', 'Longbows'),
(173, 'fletching', 15, '2.50', 'https://oldschool.runescape.wiki/images/e/ec/Iron_arrow_5.png?8d7e7', 'Iron arrows'),
(174, 'fletching', 20, '16.50', 'https://oldschool.runescape.wiki/images/8/8b/Oak_shortbow.png?14570', 'Oak shortbows'),
(175, 'fletching', 30, '5.00', 'https://oldschool.runescape.wiki/images/6/64/Steel_arrow_5.png?2c4a2', 'Steel arrows'),
(176, 'fletching', 35, '33.30', 'https://oldschool.runescape.wiki/images/d/d6/Willow_shortbow.png?c7ee0', 'Willow shortbows'),
(177, 'fletching', 45, '7.50', 'https://oldschool.runescape.wiki/images/0/09/Mithril_arrow_5.png?bb85d', 'Mithril arrows'),
(178, 'fletching', 50, '50.00', 'https://oldschool.runescape.wiki/images/6/6a/Maple_shortbow.png?c5e59', 'Maple shortbows'),
(179, 'fletching', 60, '10.00', 'https://oldschool.runescape.wiki/images/6/63/Adamant_arrow_5.png?d0b33', 'Adamant arrows'),
(180, 'fletching', 65, '67.50', 'https://oldschool.runescape.wiki/images/6/63/Yew_shortbow.png?f0671', 'Yew shortbows'),
(181, 'fletching', 75, '12.50', 'https://oldschool.runescape.wiki/images/2/27/Rune_arrow_5.png?31136', 'Rune arrows'),
(183, 'fletching', 80, '83.30', 'https://oldschool.runescape.wiki/images/a/a3/Magic_shortbow.png?d6e95', 'Magic shortbows'),
(184, 'fletching', 85, '91.50', 'https://oldschool.runescape.wiki/images/7/7f/Magic_longbow.png?d05a4', 'Magic longbows'),
(185, 'fletching', 95, '25.00', 'https://oldschool.runescape.wiki/images/c/c2/Dragon_dart.png?a2fd4', 'Dragon darts'),
(186, 'hunter', 1, '34.00', 'https://oldschool.runescape.wiki/images/thumb/c/c9/Crimson_swift.png/100px-Crimson_swift.png?73d5e', 'Crimson swift'),
(187, 'hunter', 3, '36.00', 'https://oldschool.runescape.wiki/images/3/3b/Common_kebbit_icon.png?e4d35', 'Common kebbit'),
(188, 'hunter', 9, '61.00', 'https://oldschool.runescape.wiki/images/b/bc/Copper_longtail_icon.png?24312', 'Copper longtail'),
(189, 'hunter', 23, '128.00', 'https://oldschool.runescape.wiki/images/e/ea/Wild_kebbit_icon.png?2b912', 'Wild kebbit'),
(190, 'hunter', 29, '152.00', 'https://oldschool.runescape.wiki/images/a/a3/Swamp_lizard.png?c468b', 'Swamp lizard'),
(191, 'hunter', 31, '180.00', 'https://oldschool.runescape.wiki/images/f/ff/Spined_larupia_icon.png?61cae', 'Spined larupia'),
(192, 'hunter', 47, '224.00', 'https://oldschool.runescape.wiki/images/4/44/Orange_salamander.png?a0f74', 'Orange salamander'),
(193, 'hunter', 53, '198.40', 'https://oldschool.runescape.wiki/images/2/29/Chinchompa.png?32e7e', 'Chinchompa'),
(194, 'hunter', 59, '272.00', 'https://oldschool.runescape.wiki/images/9/97/Red_salamander.png?8bfeb', 'Red salamander'),
(195, 'hunter', 63, '265.00', 'https://oldschool.runescape.wiki/images/b/b0/Red_chinchompa.png?9b7da', 'Red chinchompa'),
(196, 'hunter', 67, '319.50', 'https://oldschool.runescape.wiki/images/0/03/Black_salamander.png?9122a', 'Black salamander'),
(197, 'hunter', 73, '315.00', 'https://oldschool.runescape.wiki/images/7/76/Black_chinchompa.png?4ad1d', 'Black chinchompa'),
(198, 'construction', 1, '58.00', 'https://oldschool.runescape.wiki/images/thumb/7/73/Crude_wooden_chair_built.png/180px-Crude_wooden_c', 'Crude wooden chair'),
(199, 'construction', 8, '87.00', 'https://oldschool.runescape.wiki/images/thumb/0/0b/Wooden_chair_built.png/180px-Wooden_chair_built.p', 'Wooden chair'),
(200, 'construction', 10, '115.00', 'https://oldschool.runescape.wiki/images/5/5c/Wood_dining_table_icon.png?e90e6', 'Wood dining table'),
(201, 'construction', 22, '240.00', 'https://oldschool.runescape.wiki/images/e/e0/Oak_dining_table_icon.png?796b1', 'Oak table'),
(202, 'construction', 33, '480.00', 'https://oldschool.runescape.wiki/images/9/97/Oak_larder_icon.png?f765e', 'Oak larder'),
(203, 'construction', 43, '750.00', 'https://oldschool.runescape.wiki/images/2/27/Teak_larder_icon.png?2ed37', 'Teak larder'),
(204, 'construction', 52, '840.00', 'https://oldschool.runescape.wiki/images/2/2c/Mahogany_table_icon.png?555e3', 'Mahogany table'),
(205, 'construction', 74, '600.00', 'https://oldschool.runescape.wiki/images/thumb/1/1d/Oak_door_built.png/250px-Oak_door_built.png?66493', 'Oak dungeon doors'),
(206, 'runecrafting', 1, '5.00', 'https://oldschool.runescape.wiki/images/b/bf/Air_rune.png?b3a44', 'Air runes'),
(207, 'runecrafting', 5, '6.00', 'https://oldschool.runescape.wiki/images/d/d1/Water_rune.png?835c3', 'Water runes'),
(208, 'runecrafting', 14, '7.00', 'https://oldschool.runescape.wiki/images/a/a2/Fire_rune.png?45ae5', 'Fire runes'),
(209, 'runecrafting', 27, '8.00', 'https://oldschool.runescape.wiki/images/a/ae/Cosmic_rune.png?25f9c', 'Cosmic runes'),
(210, 'runecrafting', 35, '8.50', 'https://oldschool.runescape.wiki/images/d/de/Chaos_rune.png?25f9c', 'Chaos runes'),
(211, 'runecrafting', 44, '9.00', 'https://oldschool.runescape.wiki/images/8/88/Nature_rune.png?55b11', 'Nature runes'),
(212, 'runecrafting', 54, '9.50', 'https://oldschool.runescape.wiki/images/f/f6/Law_rune.png?c7ef5', 'Law runes'),
(213, 'runecrafting', 65, '10.00', 'https://oldschool.runescape.wiki/images/5/55/Death_rune.png?090cd', 'Death runes'),
(214, 'runecrafting', 77, '23.80', 'https://oldschool.runescape.wiki/images/2/2a/Blood_rune.png?9dc50', 'Blood runes'),
(215, 'runecrafting', 90, '29.70', 'https://oldschool.runescape.wiki/images/9/9b/Soul_rune.png?6941a', 'Soul runes'),
(216, 'magic', 1, '5.50', 'https://oldschool.runescape.wiki/images/a/a9/Wind_Strike_icon_%28mobile%29.png?7a89e', 'Wind strike'),
(217, 'magic', 3, '13.00', 'https://oldschool.runescape.wiki/images/d/d1/Confuse_icon_%28mobile%29.png?d7add', 'Confuse'),
(218, 'magic', 11, '21.00', 'https://oldschool.runescape.wiki/images/6/65/Weaken_icon_%28mobile%29.png?eeb7a', 'Weaken'),
(219, 'magic', 13, '11.50', 'https://oldschool.runescape.wiki/images/4/40/Fire_Strike_icon_%28mobile%29.png?9985c', 'Fire strike'),
(220, 'magic', 19, '29.00', 'https://oldschool.runescape.wiki/images/c/cc/Curse_icon_%28mobile%29.png?d7add', 'Curse'),
(221, 'magic', 25, '35.00', 'https://oldschool.runescape.wiki/images/4/44/Varrock_Teleport_icon_%28mobile%29.png?f208d', 'Varrock teleport'),
(222, 'magic', 31, '41.00', 'https://oldschool.runescape.wiki/images/4/44/Lumbridge_Teleport_icon_%28mobile%29.png?ecb04', 'Lumbridge teleport'),
(223, 'magic', 35, '22.50', 'https://oldschool.runescape.wiki/images/1/17/Fire_Bolt_icon_%28mobile%29.png?9985c', 'Fire bolt'),
(224, 'magic', 37, '48.00', 'https://oldschool.runescape.wiki/images/b/b6/Falador_Teleport_icon_%28mobile%29.png?9985c', 'Falador teleport'),
(225, 'magic', 55, '65.00', 'https://oldschool.runescape.wiki/images/0/0e/High_Level_Alchemy_icon_%28mobile%29.png?3e8cc', 'High level alchemy'),
(226, 'magic', 80, '90.00', 'https://oldschool.runescape.wiki/images/0/07/Stun_icon_%28mobile%29.png?4e1c2', 'Stun'),
(227, 'prayer', 1, '4.50', 'https://oldschool.runescape.wiki/images/5/5e/Bones.png?31df0', 'Bones'),
(228, 'prayer', 1, '15.75', 'https://oldschool.runescape.wiki/images/e/ec/Gilded_altar_icon.png?74b60', 'Bones (gilded altar)'),
(229, 'prayer', 1, '15.00', 'https://oldschool.runescape.wiki/images/1/11/Big_bones.png?bc2e9', 'Big bones'),
(230, 'prayer', 1, '52.50', 'https://oldschool.runescape.wiki/images/e/ec/Gilded_altar_icon.png?74b60', 'Big bones(gilded altar)'),
(231, 'prayer', 1, '72.00', 'https://oldschool.runescape.wiki/images/6/63/Dragon_bones.png?59eca', 'Dragon bones'),
(232, 'prayer', 1, '252.00', 'https://oldschool.runescape.wiki/images/e/ec/Gilded_altar_icon.png?74b60', 'Dragon bones(gilded altar)'),
(233, 'prayer', 1, '125.00', 'https://oldschool.runescape.wiki/images/4/4f/Dagannoth_bones.png?3cff6', 'Dagannoth bones'),
(234, 'prayer', 1, '437.50', 'https://oldschool.runescape.wiki/images/e/ec/Gilded_altar_icon.png?74b60', 'Dagannoth bones(gilded altar)'),
(235, 'prayer', 1, '140.00', 'https://oldschool.runescape.wiki/images/9/98/Ourg_bones.png?e334e', 'Ourg bones'),
(236, 'prayer', 1, '490.00', 'https://oldschool.runescape.wiki/images/e/ec/Gilded_altar_icon.png?74b60', 'Ourg bones(gilded altar)'),
(237, 'slayer', 1, '35.00', 'https://oldschool.runescape.wiki/images/thumb/b/bd/Hill_giant.png/150px-Hill_giant.png?d162a', 'Hill giant'),
(238, 'slayer', 5, '19.00', 'https://oldschool.runescape.wiki/images/d/d6/Crawling_Hand_icon.png?5a145', 'Crawling hand'),
(239, 'slayer', 17, '25.00', 'https://oldschool.runescape.wiki/images/a/af/Cave_slime_icon.png?e3368', 'Cave slime'),
(240, 'slayer', 30, '45.00', 'https://oldschool.runescape.wiki/images/5/59/Pyrefiend_icon.png?5577e', 'Pyrefiend'),
(241, 'slayer', 33, '25.00', 'https://oldschool.runescape.wiki/images/1/17/Harpie_Bug_Swarm_icon.png?feba5', 'Harpie bug swarm'),
(242, 'slayer', 52, '75.00', 'https://oldschool.runescape.wiki/images/6/68/Jelly_icon.png?e7538', 'Jelly'),
(243, 'slayer', 55, '81.00', 'https://oldschool.runescape.wiki/images/7/7d/Turoth_icon.png?70112', 'Turoth'),
(244, 'slayer', 65, '93.00', 'https://oldschool.runescape.wiki/images/7/75/Dust_devil_icon.png?4d644', 'Dust devil'),
(245, 'slayer', 75, '111.00', 'https://oldschool.runescape.wiki/images/1/13/Gargoyle_icon.png?feba5', 'Gargoyle'),
(246, 'slayer', 85, '124.00', 'https://oldschool.runescape.wiki/images/3/3f/Abyssal_demon_icon.png?106de', 'Abyssal demon'),
(247, 'hitpoints', 1, '4.00', 'https://oldschool.runescape.wiki/images/thumb/7/72/Chicken_%281%29.png/120px-Chicken_%281%29.png?a72', 'Chicken'),
(248, 'hitpoints', 1, '17.33', 'https://oldschool.runescape.wiki/images/thumb/d/d2/Goblin.png/150px-Goblin.png?21289', 'Goblin'),
(250, 'hitpoints', 1, '66.67', 'https://oldschool.runescape.wiki/images/thumb/0/05/Rock_crab_%28exposed%29.png/200px-Rock_crab_%28ex', 'Rock crab'),
(251, 'hitpoints', 1, '133.33', 'https://oldschool.runescape.wiki/images/thumb/6/64/Experiment_%28level_51%29.png/110px-Experiment_%2', 'Experiment'),
(252, 'hitpoints', 1, '46.67', 'https://oldschool.runescape.wiki/images/thumb/b/bd/Hill_giant.png/150px-Hill_giant.png?d162a', 'Hill giant'),
(253, 'hitpoints', 1, '66.67', 'https://oldschool.runescape.wiki/images/thumb/e/ea/Ali_Morrisane.png/129px-Ali_Morrisane.png?db7f5', 'Bandit(desert)'),
(254, 'hitpoints', 1, '80.00', 'https://oldschool.runescape.wiki/images/thumb/c/c5/Ogre.png/150px-Ogre.png?78692', 'Ogre'),
(255, 'hitpoints', 1, '86.67', 'https://oldschool.runescape.wiki/images/thumb/4/4f/Ankou.png/110px-Ankou.png?efca0', 'Ankou'),
(256, 'hitpoints', 1, '113.33', 'https://oldschool.runescape.wiki/images/thumb/0/07/Green_dragon.png/290px-Green_dragon.png?4657a', 'Green dragon'),
(257, 'attack', 1, '12.00', 'https://oldschool.runescape.wiki/images/thumb/7/72/Chicken_%281%29.png/120px-Chicken_%281%29.png?a72', 'Chicken'),
(258, 'attack', 1, '52.00', 'https://oldschool.runescape.wiki/images/thumb/d/d2/Goblin.png/150px-Goblin.png?21289', 'Goblin'),
(259, 'attack', 1, '200.00', 'https://oldschool.runescape.wiki/images/thumb/0/05/Rock_crab_%28exposed%29.png/200px-Rock_crab_%28ex', 'Rock crab'),
(260, 'attack', 1, '400.00', 'https://oldschool.runescape.wiki/images/thumb/6/64/Experiment_%28level_51%29.png/110px-Experiment_%2', 'Experiment'),
(261, 'attack', 1, '140.00', 'https://oldschool.runescape.wiki/images/thumb/b/bd/Hill_giant.png/150px-Hill_giant.png?d162a', 'Hill giant'),
(262, 'attack', 1, '200.00', 'https://oldschool.runescape.wiki/images/thumb/e/ea/Ali_Morrisane.png/129px-Ali_Morrisane.png?db7f5', 'Bandit(desert)'),
(263, 'attack', 1, '240.00', 'https://oldschool.runescape.wiki/images/thumb/c/c5/Ogre.png/150px-Ogre.png?78692', 'Ogre'),
(264, 'attack', 1, '260.00', 'https://oldschool.runescape.wiki/images/thumb/4/4f/Ankou.png/110px-Ankou.png?efca0', 'Ankou'),
(265, 'attack', 1, '340.00', 'https://oldschool.runescape.wiki/images/thumb/0/07/Green_dragon.png/290px-Green_dragon.png?4657a', 'Green dragon'),
(266, 'strength', 1, '12.00', 'https://oldschool.runescape.wiki/images/thumb/7/72/Chicken_%281%29.png/120px-Chicken_%281%29.png?a72', 'Chicken'),
(267, 'strength', 1, '52.00', 'https://oldschool.runescape.wiki/images/thumb/d/d2/Goblin.png/150px-Goblin.png?21289', 'Goblin'),
(268, 'strength', 1, '200.00', 'https://oldschool.runescape.wiki/images/thumb/0/05/Rock_crab_%28exposed%29.png/200px-Rock_crab_%28ex', 'Rock crab'),
(269, 'strength', 1, '400.00', 'https://oldschool.runescape.wiki/images/thumb/6/64/Experiment_%28level_51%29.png/110px-Experiment_%2', 'Experiment'),
(270, 'strength', 1, '140.00', 'https://oldschool.runescape.wiki/images/thumb/b/bd/Hill_giant.png/150px-Hill_giant.png?d162a', 'Hill giant'),
(271, 'strength', 1, '200.00', 'https://oldschool.runescape.wiki/images/thumb/e/ea/Ali_Morrisane.png/129px-Ali_Morrisane.png?db7f5', 'Bandit(desert)'),
(272, 'strength', 1, '240.00', 'https://oldschool.runescape.wiki/images/thumb/c/c5/Ogre.png/150px-Ogre.png?78692', 'Ogre'),
(273, 'strength', 1, '260.00', 'https://oldschool.runescape.wiki/images/thumb/4/4f/Ankou.png/110px-Ankou.png?efca0', 'Ankou'),
(274, 'strength', 1, '340.00', 'https://oldschool.runescape.wiki/images/thumb/0/07/Green_dragon.png/290px-Green_dragon.png?4657a', 'Green dragon'),
(275, 'ranged', 1, '12.00', 'https://oldschool.runescape.wiki/images/thumb/7/72/Chicken_%281%29.png/120px-Chicken_%281%29.png?a72', 'Chicken'),
(276, 'ranged', 1, '52.00', 'https://oldschool.runescape.wiki/images/thumb/d/d2/Goblin.png/150px-Goblin.png?21289', 'Goblin'),
(277, 'ranged', 1, '200.00', 'https://oldschool.runescape.wiki/images/thumb/0/05/Rock_crab_%28exposed%29.png/200px-Rock_crab_%28ex', 'Rock crab'),
(278, 'ranged', 1, '400.00', 'https://oldschool.runescape.wiki/images/thumb/6/64/Experiment_%28level_51%29.png/110px-Experiment_%2', 'Experiment'),
(279, 'ranged', 1, '140.00', 'https://oldschool.runescape.wiki/images/thumb/b/bd/Hill_giant.png/150px-Hill_giant.png?d162a', 'Hill Giant'),
(280, 'ranged', 1, '200.00', 'https://oldschool.runescape.wiki/images/thumb/e/ea/Ali_Morrisane.png/129px-Ali_Morrisane.png?db7f5', 'Bandit(desert)'),
(281, 'ranged', 1, '240.00', 'https://oldschool.runescape.wiki/images/thumb/c/c5/Ogre.png/150px-Ogre.png?78692', 'Ogre'),
(282, 'ranged', 1, '260.00', 'https://oldschool.runescape.wiki/images/thumb/4/4f/Ankou.png/110px-Ankou.png?efca0', 'Ankou'),
(283, 'ranged', 1, '340.00', 'https://oldschool.runescape.wiki/images/thumb/0/07/Green_dragon.png/290px-Green_dragon.png?4657a', 'Green dragon'),
(284, 'defence', 1, '12.00', 'https://oldschool.runescape.wiki/images/thumb/7/72/Chicken_%281%29.png/120px-Chicken_%281%29.png?a72', 'Chicken'),
(285, 'defence', 1, '52.00', 'https://oldschool.runescape.wiki/images/thumb/d/d2/Goblin.png/150px-Goblin.png?21289', 'Goblin'),
(286, 'defence', 1, '200.00', 'https://oldschool.runescape.wiki/images/thumb/0/05/Rock_crab_%28exposed%29.png/200px-Rock_crab_%28ex', 'Rock crab'),
(287, 'defence', 1, '400.00', 'https://oldschool.runescape.wiki/images/thumb/6/64/Experiment_%28level_51%29.png/110px-Experiment_%2', 'Experiment'),
(288, 'defence', 1, '140.00', 'https://oldschool.runescape.wiki/images/thumb/b/bd/Hill_giant.png/150px-Hill_giant.png?d162a', 'Hill Giant'),
(289, 'defence', 1, '200.00', 'https://oldschool.runescape.wiki/images/thumb/e/ea/Ali_Morrisane.png/129px-Ali_Morrisane.png?db7f5', 'Bandit(desert)'),
(290, 'defence', 1, '240.00', 'https://oldschool.runescape.wiki/images/thumb/c/c5/Ogre.png/150px-Ogre.png?78692', 'Ogre'),
(291, 'defence', 1, '260.00', 'https://oldschool.runescape.wiki/images/thumb/4/4f/Ankou.png/110px-Ankou.png?efca0', 'Ankou'),
(292, 'defence', 1, '340.00', 'https://oldschool.runescape.wiki/images/thumb/0/07/Green_dragon.png/290px-Green_dragon.png?4657a', 'Green dragon');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(50) NOT NULL,
  `password` varchar(100) DEFAULT NULL,
  `role` varchar(50) DEFAULT NULL,
  `accounts` varchar(1500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `role`, `accounts`) VALUES
('admin', '$2y$12$0uLteSv1ZOM0FPhoucsV5uP1H7gHHzgaHkIP.eUORu1qINprq1fj.', 'admin', NULL),
('jnelson', '$2y$12$DhPUu.VFY9LrERpC6X65I.oyJXaBItD2B0s1BxkDv9pTEOIy7Zu.y', 'user', NULL),
('Nate', '$2y$12$q/N7FUYmJny7nVqGAwqcuuNLoaRRfjjR5l5anzkF2iBjEB8XMYlOG', 'user', NULL),
('Nate2', '$2y$12$jhNGASXmXOi0iluodWJVwuKikrDweC7qytZ3e1J9k/BLLsWTDRKDO', 'user', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`commentID`);

--
-- Indexes for table `trainingmethods`
--
ALTER TABLE `trainingmethods`
  ADD PRIMARY KEY (`trainingMethodID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `commentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `trainingmethods`
--
ALTER TABLE `trainingmethods`
  MODIFY `trainingMethodID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=293;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
