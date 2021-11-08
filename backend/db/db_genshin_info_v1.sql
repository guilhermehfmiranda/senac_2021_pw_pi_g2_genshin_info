-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04-Nov-2021 às 00:10
-- Versão do servidor: 10.4.20-MariaDB
-- versão do PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_genshin_info_v1`
--

START TRANSACTION;
-- --------------------------------------------------------
--
CREATE DATABASE `db_genshin_info_v1`;
--
USE `db_genshin_info_v1`;
--
-- --------------------------------------------------------
--
CREATE TABLE `ascensions_table` (
    `ascension_id` int(11) NOT NULL,
    `ascension_bonus` varchar(512) NOT NULL,
    `ascension_value` float(4,1) NOT NULL
    -- PRIMARY KEY (`ascension_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--
CREATE TABLE `elements_table` (
    `element_id` int(11) NOT NULL,
    `element_name` varchar(32) NOT NULL,
    `element_image`varchar(32) NOT NULL
    -- PRIMARY KEY (`element_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--
CREATE TABLE `characters_table` (
    `character_id` int(11) NOT NULL,
    `character_name` varchar(64) NOT NULL,
    `character_image` varchar(32) NOT NULL,
    `element_id` int(11) NOT NULL,
    `character_atk` int(11) NOT NULL,
    `character_def` int(11) NOT NULL,
    `character_hp` int(11) NOT NULL,
    `ascension_id` int(11) NOT NULL
    -- PRIMARY KEY (`character_id`),
    -- FOREIGN KEY (`element_id`) REFERENCES `elements_table` (`element_id`),
    -- FOREIGN KEY (`ascension_id`) REFERENCES `ascensions_table` (`ascension_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--
INSERT INTO `ascensions_table` 
    (`ascension_id`,`ascension_bonus`, `ascension_value`) 
VALUES
    (1, 'ATK Increase', 24),
    (2, 'HP Increase', 24),
    (3, 'Critical Hit Rate', 19.2),
    (4, 'Critical Hit DMG', 38.4),
    (5, 'Physical DMG', 30),
    (6, 'Anemo DMG', 19.2),
    (7, 'Cryo DMG', 28.8),
    (8, 'Dendro DMG', 0.0),
    (9, 'Electro DMG', 24),
    (10, 'Geo DMG', 28.8),
    (11, 'Hydro DMG', 28.8),
    (12, 'Pyro DMG', 24),
    (13, 'Elemental Mastery', 115.2),
    (14, 'Healing Bonus', 22.2),
    (15, 'Energy Recharge', 26.7);
--
INSERT INTO `elements_table` 
    (`element_id`,`element_name`, `element_image`) 
VALUES
    (1, 'Anemo', 'Element_Anemo.png'),
    (2, 'Cryo', 'Element_Cryo.png'),
    (3, 'Dendro', 'Element_Dendro.png'),
    (4, 'Electro', 'Element_Electro.png'),
    (5, 'Geo', 'Element_Geo.png'),
    (6, 'Hydro', 'Element_Hydro.png'),
    (7, 'Pyro', 'Element_Pyro.png');
--
INSERT INTO `characters_table`
    (`character_id`, `character_name`, `character_image`, `element_id`, `character_atk`, `character_def`, `character_hp`, `ascension_id`)
VALUES
    (1, 'Albedo', 'UI_AvatarIcon_Albedo.png', 5, 251, 876, 13226, 10),
    (2, 'Amber', 'UI_AvatarIcon_Ambor.png', 7, 234, 676, 10899, 7),
    (3, 'Ayaka', 'UI_AvatarIcon_Ayaka.png', 2, 342, 784, 12858, 4),
    (4, 'Barbara', 'UI_AvatarIcon_Barbara.png', 6, 159, 669, 9787, 2),
    (5, 'Beidou', 'UI_AvatarIcon_Beidou.png', 4, 225, 648, 13050, 9),
    (6, 'Bennett', 'UI_AvatarIcon_Bennett.png', 7, 191, 771, 12397, 15),
    (7, 'Chongyun', 'UI_AvatarIcon_Chongyun.png', 2, 223, 648, 10984, 1),
    (8, 'Dilluc', 'UI_AvatarIcon_Diluc.png', 7, 335, 784, 12981, 3),
    (9, 'Diona', 'UI_AvatarIcon_Diona.png', 2, 212, 601, 9570, 7),
    (10, 'Eula', 'UI_AvatarIcon_Eula.png', 2, 342, 751, 13226, 4),
    (11, 'Yanfei', 'UI_AvatarIcon_Feiyan.png', 7, 587, 601, 9352, 12),
    (12, 'Fischl', 'UI_AvatarIcon_Fischl.png', 4, 244, 594, 9189, 1),
    (13, 'Ganyu', 'UI_AvatarIcon_Ganyu.png', 2, 335, 630, 9797, 4),
    (14, 'Hu Tao', 'UI_AvatarIcon_Hutao.png', 7, 106, 876, 15552, 4),
    (15, 'Kaeya', 'UI_AvatarIcon_Kaeya.png', 2, 223, 792, 11636, 15),
    (16, 'Kazuha', 'UI_AvatarIcon_Kazuha.png', 1, 297, 807, 13348, 13),
    (17, 'Keqing', 'UI_AvatarIcon_Keqing.png', 4, 323, 799, 13103, 4),
    (18, 'Klee', 'UI_AvatarIcon_Klee.png', 7, 331, 615, 10287, 12),
    (19, 'Lisa', 'UI_AvatarIcon_Lisa.png', 4, 232, 573, 9570, 13),
    (20, 'Mona', 'UI_AvatarIcon_Mona.png', 6, 287, 653, 10409, 15),
    (21, 'Ningguang', 'UI_AvatarIcon_Ningguang.png', 5, 212, 573, 9787, 10),
    (22, 'Noelle', 'UI_AvatarIcon_Noel.png', 5, 191, 573, 12071, 10),
    (23, 'MC Male', 'UI_AvatarIcon_PlayerBoy.png', 4, 335, 784, 12981, 3),
    (24, 'MC Female', 'UI_AvatarIcon_PlayerGirl.png', 1, 335, 784, 12981, 3),
    (25, 'Jean', 'UI_AvatarIcon_Qin.png', 1, 239, 769, 14695, 14),
    (26, 'Qiqi', 'UI_AvatarIcon_Qiqi.png', 2, 287, 922, 12368, 14),
    (27, 'Razor', 'UI_AvatarIcon_Razor.png', 4, 234, 751, 11962, 5),
    (28, 'Rosaria', 'UI_AvatarIcon_Rosaria.png', 2, 240, 710, 12289, 1),
    (29, 'Sara', 'UI_AvatarIcon_Sara.png', 4, 232, 573, 9570, 1),
    (30, 'Raiden  Shogun', 'UI_AvatarIcon_Shougun.png', 4, 337, 789, 12907, 15),
    (31, 'Sucrose', 'UI_AvatarIcon_Sucrose.png', 1, 170, 703, 9243, 6),
    (32, 'Tartaglia', 'UI_AvatarIcon_Tartaglia.png', 6, 301, 815, 13103, 11),
    (33, 'Venti', 'UI_AvatarIcon_Venti.png', 1, 263, 669, 10531, 15),
    (34, 'Xiangling', 'UI_AvatarIcon_Xiangling.png', 7, 225, 669, 10875, 13),
    (35, 'Xiao', 'UI_AvatarIcon_Xiao.png', 1, 349, 799, 12736, 3),
    (36, 'Xingqiu', 'UI_AvatarIcon_Xingqiu.png', 6, 202, 758, 10233, 1),
    (37, 'Xinyan', 'UI_AvatarIcon_Xinyan.png', 7, 249, 799, 11201, 1),
    (38, 'Yoimiya', 'UI_AvatarIcon_Yoimiya.png', 7, 323, 615, 10164, 3),
    (39, 'Zhongli', 'UI_AvatarIcon_Zhongli.png', 5, 251, 738, 14695, 10);
--
ALTER TABLE `ascensions_table`
    ADD PRIMARY KEY (`ascension_id`),
    MODIFY `ascension_id` int(11) NOT NULL UNIQUE AUTO_INCREMENT, AUTO_INCREMENT = 1;
--
ALTER TABLE `elements_table`
    ADD PRIMARY KEY (`element_id`),
    MODIFY `element_id` int(11) NOT NULL UNIQUE AUTO_INCREMENT, AUTO_INCREMENT = 1;
--
ALTER TABLE `characters_table`
    ADD PRIMARY KEY (`character_id`),
    ADD FOREIGN KEY (`element_id`) REFERENCES `elements_table` (`element_id`),
    ADD FOREIGN KEY (`ascension_id`) REFERENCES `ascensions_table` (`ascension_id`),
    MODIFY `character_id` int(11) NOT NULL UNIQUE AUTO_INCREMENT, AUTO_INCREMENT = 1;
--
ALTER TABLE `characters_table`
    ADD CONSTRAINT `character_element` FOREIGN KEY (`element_id`) REFERENCES `elements_table` (`element_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
    ADD CONSTRAINT `character_ascension` FOREIGN KEY (`ascension_id`) REFERENCES `ascensions_table` (`ascension_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
--
-- --------------------------------------------------------
--
CREATE TABLE `locations_table` (
    `location_id` int(11) NOT NULL,
    `location_name` varchar(45) NOT NULL
    -- PRIMARY KEY (`location_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--
CREATE TABLE `bonuses_table` (
    `bonus_id` int(11) NOT NULL,
    `bonus_description` varchar(612) NOT NULL
    -- PRIMARY KEY (`bonus_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--
CREATE TABLE `atks_table` (
    `atk_id` int(11) NOT NULL,
    `atk_value` int(45) NOT NULL
    -- PRIMARY KEY (`atk_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--
CREATE TABLE `rarities_table` (
    `rarity_id` int(11) NOT NULL,
    `rarity_value` int(11) NOT NULL
    -- PRIMARY KEY (`rarity_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--
CREATE TABLE `types_table` (
    `type_id` int(11) NOT NULL,
    `type_name` varchar(45) NOT NULL
    -- PRIMARY KEY (`type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--
CREATE TABLE `weapons_table` (
    `weapon_id` int(11) NOT NULL,
    `weapon_name` varchar(45) NOT NULL,
    `weapon_image` varchar(45) NOT NULL,
    `type_id` int(11) NOT NULL,
    `rarity_id` int(11) NOT NULL,
    `atk_id` int(11) NOT NULL,
    `bonus_id` int(11) NOT NULL,
    `location_id` int(11) NOT NULL
    -- PRIMARY KEY (`weapon_id`),
    -- FOREIGN KEY (`type_id`) REFERENCES `types_table` (`type_id`),
    -- FOREIGN KEY (`rarity_id`) REFERENCES `rarities_table` (`rarity_id`),
    -- FOREIGN KEY (`atk_id`) REFERENCES `atks_table` (`atk_id`),
    -- FOREIGN KEY (`bonus_id`) REFERENCES `bonuses_table` (`bonus_id`),
    -- FOREIGN KEY (`location_id`) REFERENCES `locations_table` (`location_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--
INSERT INTO `locations_table` 
    (`location_id`,`location_name`) 
VALUES
    (1, 'Wish'),
    (2, 'BP Bounty'),
    (3, 'Crafting'),
    (4, 'Starglitter Exchange'),
    (5, 'Event'),
    (6, 'Story Quest');
--
INSERT INTO `bonuses_table` 
    (`bonus_id`, `bonus_description`) 
VALUES
    (1, 'Increases Elemental DMG Bonus by 12/15/18/21/24%.<br>Normal Attack hits have a 50% chance to earn the favor of the clouds.<br>which actively seek out nearby enemies to attack for 15s, dealing 160/200/240/280/320% ATK DMG.<br>Can only occur once every 30s.'),
    (2, 'Increases Normal Attack and Aimed Shot DMG by 12/15/18/21/24%.<br>Increases DMG from arrows shot by a further 8/10/12/14/16% for every 0.1s that the arrow is in flight, up to 0.5s.<br>Stacks up to 5 times on each arrow.'),
    (3, 'HP increased by 20/25/30/35/40%.<br>Additionally, provides an ATK Bonus based on 0.8/1/1.2/1.4/1.6% of the wielders Max HP.<br>When the wielders HP is less than 50%, this ATK bonus is increased by an additional 1/1.2/1.4/1.6/1.8% of Max HP.'),
    (4, 'For every characters who hails from Liyue, the characters who equips this weapon gains 7/8/9/10/11% ATK increase and a 3/4/5/6/7% CRIT Rate increase.<br>This effect stacks up to 4 times.'),
    (5, 'After defeating an enemy, ATK is increased by 12/15/18/21/24% for 30s.<br>This effect has a maximum of 3 stacks, and the duration of each stack is independent of the others.'),
    (6, 'CRIT hits have a 60/70/80/90/100% chance to generate 1 Elemental Orb, which will regenerate 6 Energy for the character.<br>Can only occur once every 12/10.5/9/7.5/6s.'),
    (7, 'Upon damaging an enemy, increases CRIT Rate by 8/10/12/14/16%.<br>Max 5 stacks. A CRIT hit removes all stacks'),
    (8, 'After damaging an opponent with an Elemental Skill, the skill has a 40/50/60/70/80% chance to end its own CD.<br>Can only occur once every 30/26/22/18/14s.'),
    (9, 'On hit, Normal or Charged Attacks have a 50% chance to deal an additional 240/300/360/420/480% ATK DMG to enemies within a small radius.<br>Can only occur once every 15s.'),
    (10, 'Aimed Shot hits on weak points increase Movement SPD by 10% and ATK by 36/45/54/63/72% for 10s.'),
    (11, 'A part of the Millennial Movement that wanders amidst the winds.<br>Increases DMG by 10/12.5/15/17.5/20%.<br>When the character wielding this weapon triggers Elemental Reactions, they gain a Sigil of Rebellion.<br>This effect can be triggered once every 0.5s and can be triggered even if said character is not on the field.<br>When you possess 2 Sigils of Rebellion, all of them will be consumed and all nearby party members will obtain Millennial Movement: Song of Resistance for 12s. '),
    (12, 'ATK is increased by 20/25/30/35/40%.<br>Triggers on taking DMG: the soul of the Falcon of the West awakens, holding the banner of the resistance aloft, regenerating HP equal to 100/115/130/145/160% of ATK and dealing 200/230/260/290/320% of ATK as DMG to surrounding enemies.<br>This effect can only occur once every 15s.'),
    (13, 'On hit, Normal or Charged Attacks increase Base ATK and DEF by 4/4.5/5/5.5/6% for 6s. Max 4 stacks.<br>Can only occur once every 0.3s.'),
    (14, 'Increases DMG against enemies affected by Pyro or Electro by 20/24/28/32/36%.'),
    (15, 'After casting an Elemental Skill, gain 1 Succession Seed.<br>This effect can be triggered once every 5s.<br>The Succession Seed lasts for 30s.<br>Up to 3 Succession Seeds may exist simultaneously.<br>After using an Elemental Burst, all Succession Seeds are consumed and after 2s, the character regenerates 6 Energy for each seed consumed.'),
    (16, 'If there are at least 2 opponents nearby, ATK is increased by 16/20/24/28/32% and DEF is increased by 16/20/24/28/32%.<br>If there are less than 2 enemies nearby, ATK is increased by 24/30/36/42/48%.'),
    (17, 'After picking up an Elemental Orb/Particle, Normal and Charged Attacks deal an additional 20/25/30/35/40% ATK as DMG for 5s.'),
    (18, 'Increases Elemental Skill DMG by 6%.<br>After Elemental Skill hits an opponent, the character loses 3 Energy but regenerates 3 Energy every 2s for the next 6s.<br>This effect can occur once every 10s. Can be triggered even when the character is not on the field.'),
    (19, 'Increases Shield Strength by 20/25/30/35/40%, scoring hits on opponents increases ATK by 4/5/6/7/8% for 8s. Max 5 stacks.<br>Can only occur once every 0.3s.<br>While protected by a shield this ATK increase effect is increased by 100%'),
    (20, 'On hit, increases ATK by 3.2/3.9/4.6/5.3/6% for 6s.<br>Max 7 stacks.<br>This effect can only occur once every 0.3s.<br>While in possession of the maximum possible stacks, DMG dealt is increased by 12/15/18/21/24%.'),
    (21, 'Hitting enemies with Normal or Charged Attacks grants a 50% chance to deal 200% ATK as DMG in a small AoE.<br>This effect can only occur once every 10s.<br>Additionally, if the Traveler equips the Sword of Descension, their ATK is increased by 66.'),
    (22, 'Increases Elemental Skill DMG by 16/20/24/28/32% and Elemental Skill CRIT Rate by 6/7.5/9/10.5/12%.'),
    (23, 'Hitting an opponent with Normal and Charged Attacks has a 60/70/80/90/100% chance of forming and dropping an Everfrost Icicle above them, dealing 80/95/110/125/140% AoE ATK DMG.<br>Opponents affected by Cryo are dealt 200/240/280/320/360% ATK DMG.<br>Can only occur once every 10s.'),
    (24, 'Normal Attack hits on opponents increase Charged Attack DMG by 16/20/24/28/32% for 6s.<br>Charged Attack hits on opponents increase ATK by 8/10/12/14/16% for 6s.'),
    (25, 'Increases CRIT DMG by 20/25/30/35/40%.<br>Hits have a 60/70/80/90/100% chance to inflict a small AoE attack, dealing 125% Physical ATK DMG.<br>Can only occur once every 4/3.5/3/2.5/2s.'),
    (26, 'Dealing Cryo DMG to opponents increases this characters Normal and Charged Attack DMG by 10% for 6s.<br>This effect can have a maximum of 2 stacks.<br>Additionally, when Aloy equips Predator, ATK is increased by 66.'),
    (27, 'Increases ATK by 20/25/30/35/40%.<br>On hit, attacks against enemies with less than 30% HP increase all party members Base ATK by 40/50/60/70/80% for 12s.<br>Can only occur once every 30s.'),
    (28, 'Increases Shield Strength by 20/25/30/35/40%, scoring hits on opponents increases ATK by 4/5/6/7/8% for 8s.<br>Max 5 stacks.<br>Can only occur once every 0.3s.<br>While protected by a shield this ATK increase effect is increased by 100%');
--
INSERT INTO `atks_table` 
    (`atk_id`, `atk_value`) 
VALUES
    (1, 39),
    (2, 40),
    (3, 41),
    (4, 42),
    (5, 43),
    (6, 44),
    (7, 45),
    (8, 46),
    (9, 47),
    (10, 48),
    (11, 49);
--
INSERT INTO `rarities_table` 
    (`rarity_id`, `rarity_value`) 
VALUES
    (1, 1),
    (2, 2),
    (3, 3),
    (4, 4),
    (5, 5);
--
INSERT INTO `types_table` 
    (`type_id`, `type_name`) 
VALUES
    (1, 'Sword'),
    (2, 'Catalyst'),
    (3, 'Polearm'),
    (4, 'Bow'),
    (5, 'Claymore');
--
INSERT INTO `weapons_table` 
    (`weapon_id`, `weapon_name`, `weapon_image`, `type_id`, `rarity_id`, `atk_id`, `bonus_id`, `location_id`)
VALUES
    (1, 'Amos Bow', 'amosbow.png', 1, 5, 8, 2, 1),
    (2, 'Skyward Atlas', 'atlascatalyst.png', 1, 5, 10, 1, 1),
    (3, 'Staff of Homa', 'lancehoma.png', 3, 5, 8, 3, 1),
    (4, 'Lithic Spear', 'lanceLithic.png', 3, 4, 4, 4, 1),
    (5, 'Crescent Pike', 'lanceCresentpike.png', 3, 4, 6, 17, 3),
    (6, 'Blackcliff Pole', 'lanceBlackcliff.png', 3, 4, 4, 5, 4),
    (7, 'Favonius Lance', 'lanceFavonius.png', 3, 4, 7, 6, 1),
    (8, 'Dragons Bane', 'lanceDragonsbane.png', 3, 4, 3, 14, 1),
    (9, 'Kitain Cross Spear', 'lanceKitain.png', 3, 4, 6, 18, 3),
    (10, 'Royal Spear', 'lanceRoyal.png', 3, 4, 6, 7, 4),
    (11, 'Primordial Jade Winged-Spear', 'jadelance.png', 3, 5, 10, 20, 1),
    (12, 'Vortex Vanquisher', 'lancevortex.png', 3, 5, 8, 19, 1),
    (13, 'Lions Roar', 'swordLion.png', 1, 4, 4, 14, 1),
    (14, 'Freedom-Sworn', 'swordbrokenpines.png', 1, 5, 8, 11, 1),
    (15, 'Amenoma Kageuchi', 'swordAmenoma.png', 1, 4, 3, 15, 3),
    (16, 'Prototype Rancour', 'swordPrototype.png', 1, 4, 6, 20, 3),
    (17, 'Blackcliff Longsword', 'swordBlackcliff.png', 1, 4, 6, 5, 4),
    (18, 'Royal Longsword', 'swordRoyal.png', 1, 4, 4, 7, 4),
    (19, 'Favonius Sword', 'swordFavonius.png', 1, 4, 3, 6, 1),
    (20, 'Aquila Favonia', 'aquilasword.png', 1, 5, 10, 12, 1),
    (21, 'Sword of Descension', 'swordDescension.png', 1, 4, 1, 23, 1),
    (23, 'Sacrificial Fragments', 'catalystSacrif.png', 2, 4, 3, 8, 1),
    (24, 'Favonius Codex', 'catalystFavonius.png', 2, 4, 4, 6, 1),
    (25, 'Dodoco Tales', 'catalystDodoco.png', 2, 4, 3, 24, 6),
    (26, 'Blackcliff Amulet', 'catalystBlackcliff.png', 2, 4, 4, 5, 4),
    (27, 'Frostbearer', 'catalystFrostbear.png', 2, 4, 4, 23, 3),
    (28, 'Sacrificial Bow', 'bowSacrif.png', 1, 4, 6, 8, 1),
    (29, 'Predator', 'bowAlley.pn.png', 4, 4, 4, 26, 5),
    (30, 'Skyward Harp', 'bowskyward.png', 4, 5, 10, 8, 1),
    (31, 'Blackcliff Warbow', 'bowBlackcliff.png', 4, 4, 6, 5, 4),
    (32, 'Favonius Greatsword', 'bigswordFavonius.png', 5, 4, 3, 6, 1),
    (33, 'Wolfs Gravestone', 'bigswordwolf.png', 5, 5, 8, 27, 1),
    (34, 'The Unforged', 'bigswordunforged.png', 5, 5, 8, 28, 1),
    (35, 'Sacrificial Greatsword', 'bigswordSacrif.png', 5, 4, 6, 8, 1),
    (36, 'Luxurious Sea-Lord', 'swordFish.png', 2, 4, 3, 1, 5),
    (37, 'Lithic Blade', 'bigswordLithic.png', 5, 4, 4, 4, 1),
    (38, 'Blackcliff Slasher', 'bigswordBlackcliff.png', 5, 4, 4, 5, 4);
--
ALTER TABLE `locations_table`
    ADD PRIMARY KEY (`location_id`),
    MODIFY `location_id` int(11) NOT NULL UNIQUE AUTO_INCREMENT, AUTO_INCREMENT = 1;
--
ALTER TABLE `bonuses_table`
    ADD PRIMARY KEY (`bonus_id`),
    MODIFY `bonus_id` int(11) NOT NULL UNIQUE AUTO_INCREMENT, AUTO_INCREMENT = 1;
--
ALTER TABLE `atks_table`
    ADD PRIMARY KEY (`atk_id`),
    MODIFY `atk_id` int(11) NOT NULL UNIQUE AUTO_INCREMENT, AUTO_INCREMENT = 1;
--
ALTER TABLE `rarities_table`
    ADD PRIMARY KEY (`rarity_id`),
    MODIFY `rarity_id` int(11) NOT NULL UNIQUE AUTO_INCREMENT, AUTO_INCREMENT = 1;
--
ALTER TABLE `types_table`
    ADD PRIMARY KEY (`type_id`),
    MODIFY `type_id` int(11) NOT NULL UNIQUE AUTO_INCREMENT, AUTO_INCREMENT = 1;
--
ALTER TABLE `weapons_table`
    ADD PRIMARY KEY (`weapon_id`),
    ADD FOREIGN KEY (`type_id`) REFERENCES `types_table` (`type_id`),
    ADD FOREIGN KEY (`rarity_id`) REFERENCES `rarities_table` (`rarity_id`),
    ADD FOREIGN KEY (`atk_id`) REFERENCES `atks_table` (`atk_id`),
    ADD FOREIGN KEY (`bonus_id`) REFERENCES `bonuses_table` (`bonus_id`),
    ADD FOREIGN KEY (`location_id`) REFERENCES `locations_table` (`location_id`),
    MODIFY `weapon_id` int(11) NOT NULL UNIQUE AUTO_INCREMENT, AUTO_INCREMENT = 1;
--
ALTER TABLE `weapons_table`
    ADD CONSTRAINT `weapon_type` FOREIGN KEY (`type_id`) REFERENCES `types_table` (`type_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
    ADD CONSTRAINT `weapon_rarity` FOREIGN KEY (`rarity_id`) REFERENCES `rarities_table` (`rarity_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
    ADD CONSTRAINT `weapon_atk` FOREIGN KEY (`atk_id`) REFERENCES `atks_table` (`atk_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
    ADD CONSTRAINT `weapon_bonus` FOREIGN KEY (`bonus_id`) REFERENCES `bonuses_table` (`bonus_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
    ADD CONSTRAINT `weapon_location` FOREIGN KEY (`location_id`) REFERENCES `locations_table` (`location_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
--
-- --------------------------------------------------------
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
