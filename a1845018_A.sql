
-- phpMyAdmin SQL Dump
-- version 2.11.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 17, 2016 at 01:12 PM
-- Server version: 5.1.57
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `a1845018_A`
--

-- --------------------------------------------------------

--
-- Table structure for table `LOGIN`
--

CREATE TABLE `LOGIN` (
  `EID` int(5) NOT NULL,
  `EMAIL` char(25) COLLATE latin1_general_ci NOT NULL,
  `PASSWORD` char(45) COLLATE latin1_general_ci NOT NULL,
  UNIQUE KEY `EID` (`EID`),
  UNIQUE KEY `EMAIL` (`EMAIL`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `LOGIN`
--

INSERT INTO `LOGIN` VALUES(1, 'h@g', 'd87c448044defb778f33158d8ccf94a20531d600');
INSERT INTO `LOGIN` VALUES(2, 'hvarday@gmail.com', 'd87c448044defb778f33158d8ccf94a20531d600');
INSERT INTO `LOGIN` VALUES(3, 'abc@xyz.com', 'a9993e364706816aba3e25717850c26c9cd0d89d');
INSERT INTO `LOGIN` VALUES(4, 'a@a.com', '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8');
INSERT INTO `LOGIN` VALUES(5, 'a@1.com', 'e9d71f5ee7c92d6dc9e92ffdad17b8bd49418f98');
INSERT INTO `LOGIN` VALUES(6, 'Kapilabhinav98@gmail.com', '9dfb52edfd991de3c54686495a52e0d45d76f6ea');

-- --------------------------------------------------------

--
-- Table structure for table `RES`
--

CREATE TABLE `RES` (
    `PID` int(5) NOT NULL,
    `ID` varchar(35) NOT NULL,
    `NAME` varchar(40) NOT NULL,
    `L` int(5) NOT NULL,
    `V` int(5) NOT NULL,
    UNIQUE KEY `RES` (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `RES`
--

INSERT INTO `RES` VALUES(1, 'ChIJk76VwWNHrTsRVuPDE8Bm4ww', 'Hundreds Heritage', 0, 0);
INSERT INTO `RES` VALUES(2, 'ChIJUxp0bWNHrTsRldtB5r8BCOA', 'Vellore Fried Chicken', 0, 0);
INSERT INTO `RES` VALUES(3, 'ChIJ63pNKpE4rTsRRcO1J_zjG0E', 'Sri Durga Bhavan', 0, 0);
INSERT INTO `RES` VALUES(4, 'ChIJrUiLB5M4rTsR_PZOkQlwB-s', 'Hotel Saravana Bhavan', 0, 1);
INSERT INTO `RES` VALUES(5, 'ChIJ3Wc8J944rTsRiBw3O0ZloC4', 'Baby Veg Restaurant', 0, 0);
INSERT INTO `RES` VALUES(6, 'ChIJoY5JMJU4rTsRw17P-B8TZZw', 'Gyan Vaishnav Dhaba', 0, 0);
INSERT INTO `RES` VALUES(7, 'ChIJK3btq2I4rTsRlW1CMDhYCnk', 'Star Biriyani', 0, 0);
INSERT INTO `RES` VALUES(8, 'ChIJmWnDoHRHrTsRO8OgoQHtybc', 'Olive Kitchen', 0, 0);
INSERT INTO `RES` VALUES(9, 'ChIJ3TGae8I4rTsRlX-4XSkpf9E', 'Guc Canteen', 0, 0);
INSERT INTO `RES` VALUES(10, 'ChIJL3EU1JA4rTsRsK1OmLomSfg', 'The Vellore Kitchen', 1, 1);
INSERT INTO `RES` VALUES(11, 'ChIJQdpcoHRHrTsRPl898wZw_cA', 'Chickin Fried Cicken', 0, 0);
INSERT INTO `RES` VALUES(12, 'ChIJ1zFNSZM4rTsRrqVmX4D7zkI', 'Hotel Gayathri', 0, 0);
INSERT INTO `RES` VALUES(13, 'ChIJi1KVyWhHrTsRnYgeI9_hzG4', 'Quality & Taste Restaurant', 0, 0);
INSERT INTO `RES` VALUES(14, 'ChIJzTCidZc4rTsRn9rMeAhoxi0', 'Virundhu - The Best Multicusin', 0, 0);
INSERT INTO `RES` VALUES(15, 'ChIJlVlMtZ9HrTsR9kGbqe-VcHo', 'Andhra Spice', 0, 0);
INSERT INTO `RES` VALUES(16, 'ChIJj3OpQ5U4rTsRk69xIBmcd5M', 'Bandhi Biryani Restaurant', 0, 0);
INSERT INTO `RES` VALUES(17, 'ChIJa6RU6ts4rTsRapC16ebXtko', 'China Town', 0, 0);
INSERT INTO `RES` VALUES(18, 'ChIJq1Ndruo4rTsR2mcmNrEd4KA', 'Amma Restaurant', 0, 0);
INSERT INTO `RES` VALUES(19, 'ChIJET_KYffCUjoRlAPfZZPQ9io', 'GRT Regency Sameera Vellore Ho', 0, 0);
INSERT INTO `RES` VALUES(20, 'ChIJUZ6RpZ9HrTsRaOVhMrzE3mw', 'Big Chick', 0, 0);
INSERT INTO `RES` VALUES(21, 'ChIJ2zNBxKKzbTkRcJv-eMTTbQE', 'Viking Bar & Restaurant', 0, 0);
INSERT INTO `RES` VALUES(22, 'ChIJixvg7hGzbTkRqHQJf7x-rKg', 'Rawastica Veg Restaurant', 0, 0);
INSERT INTO `RES` VALUES(23, 'ChIJQwtP3XSzbTkR0ZiNn7eAmpg', 'Tanwar Restaurant', 0, 0);
INSERT INTO `RES` VALUES(24, 'ChIJ2zNBxKKzbTkRa2RFu6kTAsg', 'Chatkara Chat Corner', 0, 0);
INSERT INTO `RES` VALUES(25, 'ChIJO5RYdXOzbTkRchDsc2d_dzM', 'Riddhi Siddhi Restaurant', 0, 0);
INSERT INTO `RES` VALUES(26, 'ChIJb4pjwBCzbTkR1sIUd3ckfLQ', 'Zaika Restaurant', 0, 0);
INSERT INTO `RES` VALUES(27, 'ChIJ68fmtgqzbTkRJcvFoUHYBOU', 'Godara Restaurant', 0, 1);
INSERT INTO `RES` VALUES(28, 'ChIJ2zNBxKKzbTkRU4eEgE_ki8k', 'Rajputana Restaurant', 0, 0);
INSERT INTO `RES` VALUES(29, 'ChIJ5Ut-4amzbTkR2W18MSVUJEs', 'Saini Restaurant', 0, 0);
INSERT INTO `RES` VALUES(30, 'ChIJrTKkXNeybTkRht7ZR-Z05ak', 'Shri Shyam Restaurant', 0, 0);
INSERT INTO `RES` VALUES(31, 'ChIJPa85H6GzbTkRtx07riL2MyA', 'Shree Hanuman Restaurant', 0, 0);
INSERT INTO `RES` VALUES(32, 'ChIJa0izb9eybTkR2nJE0V1fVfI', 'Shree Sai Restaurant', 0, 0);
INSERT INTO `RES` VALUES(33, 'ChIJVX3hn6CzbTkRMR6CgJ56KW4', 'Sharma Cold Drink and Restaura', 0, 0);
INSERT INTO `RES` VALUES(34, 'ChIJ6fRrVhGzbTkR6d6-jrYhUEo', 'Kaishav Multicuisine Restauran', 0, 0);
INSERT INTO `RES` VALUES(35, 'ChIJh5FaY6GzbTkRwPtjpXe62II', 'Jai Shree Shyam Restaurant', 0, 0);
INSERT INTO `RES` VALUES(36, 'ChIJ489AsS-zbTkRQ3msPfIQ-yU', 'Govind Restaurant & Family Gar', 0, 0);
INSERT INTO `RES` VALUES(37, 'ChIJ4esyld-ybTkR7lKBHLD1E04', 'New Shekhawati Restaurant', 0, 0);
INSERT INTO `RES` VALUES(38, 'ChIJ1xLvIlmybTkR-n0Xft_iN1g', 'Minku Restaurant Pure Veg', 0, 0);
INSERT INTO `RES` VALUES(39, 'ChIJyz6W1AuzbTkRb5qg-PtEado', 'Jagdamba Restaurant', 0, 0);
INSERT INTO `RES` VALUES(40, 'ChIJjR2w3KKzbTkR5HI-_HE-HpI', 'Lalten Restaurant', 0, 0);
INSERT INTO `RES` VALUES(41, 'ChIJ0yacMLs6RDkRA4_2wsRlGpE', 'Hotel Kalinga Palace', 0, 1);
INSERT INTO `RES` VALUES(42, 'ChIJOblC-s46RDkR2j6i9vb7j74', 'K K Hotel', 0, 0);
INSERT INTO `RES` VALUES(43, 'ChIJ7b8qNrs6RDkRYIWgYU5m-2s', 'Kohinoor Restaurant', 0, 0);
INSERT INTO `RES` VALUES(44, 'ChIJe81vVnucEhQRWRwZpuqDxtY', 'Krishna White House Internatio', 0, 0);
INSERT INTO `RES` VALUES(45, 'ChIJW6i1O3E6RDkRuc3gfvXlUlY', 'The Goodhall Restaurant', 0, 0);
INSERT INTO `RES` VALUES(46, 'ChIJqQxcmIckRDkRab5cI3_J_Tk', 'Solanki Restaurant', 0, 0);
INSERT INTO `RES` VALUES(47, 'ChIJj2KMiS39mzkRdYxz2hvOow4', 'Barbeque Nation', 1, 1);
INSERT INTO `RES` VALUES(48, 'ChIJsQXBsjv9mzkRaFs8cR0ccmk', 'Naushijaan', 0, 0);
INSERT INTO `RES` VALUES(49, 'ChIJQW_id9VXmTkRD9fmxCxYygc', 'Aryan Restaurant', 0, 0);
INSERT INTO `RES` VALUES(50, 'ChIJY-JHMwn9mzkRZD6ZAImsNvs', 'Kool Break', 0, 0);
INSERT INTO `RES` VALUES(51, 'ChIJG0aYHsbimzkR8XTdOO9eS9c', 'Tunday Kababi', 0, 0);
INSERT INTO `RES` VALUES(52, 'ChIJZ9eFp6f9mzkR7hBAtS0VR1o', 'Royal Sky', 0, 0);
INSERT INTO `RES` VALUES(53, 'ChIJIbrJ7Ab9mzkR3pKh_yT1x0M', 'Aryans', 0, 0);
INSERT INTO `RES` VALUES(54, 'ChIJB_0sOQb9mzkRyRI_IDdKDmk', 'Sakhawat Restaurant', 0, 0);
INSERT INTO `RES` VALUES(55, 'ChIJW-mIvGX9mzkRnj8VuymC_VI', 'Chungfa Chinese Restaurant', 0, 0);
INSERT INTO `RES` VALUES(56, 'ChIJN0o53g39mzkR5YFleczpcxc', 'Cassia', 0, 0);
INSERT INTO `RES` VALUES(57, 'ChIJk0jJIK_-mzkR5nIQnm9Sb9o', 'The Posh Pouf', 0, 0);
INSERT INTO `RES` VALUES(58, 'ChIJm73RfQdYmTkR4xX24tF22ak', 'The Archeria Restaurant', 0, 0);
INSERT INTO `RES` VALUES(59, 'ChIJ6Ykvjwj8mzkRufLdHCmgzq8', 'Raj & Raj', 0, 0);
INSERT INTO `RES` VALUES(60, 'ChIJ98TsK9VXmTkRMFcJXvo7G78', 'Salt Restaurant', 0, 0);
INSERT INTO `RES` VALUES(61, 'ChIJUUfj3Xf7mzkRZHAZpJUkk9o', 'Aryan''s', 0, 0);
INSERT INTO `RES` VALUES(62, 'ChIJlWzd5UT9mzkRjUlxql_0ieU', 'Chef Cuisine', 0, 0);
INSERT INTO `RES` VALUES(63, 'ChIJj2KMiS39mzkRSYQ5VSeL0CI', 'SANBORN RESTAURANT', 0, 0);
INSERT INTO `RES` VALUES(64, 'ChIJOe9Yu8pXmTkRCjBSLOQevfA', 'Purab Pashchim Restaurant', 0, 0);
INSERT INTO `RES` VALUES(65, 'ChIJ8-31sgv9mzkRbniAp_U9qAo', 'Dosa Plaza', 0, 0);
INSERT INTO `RES` VALUES(66, 'ChIJGSf86uBXmTkR3bGa4GL4cXs', 'Farabi', 0, 0);
INSERT INTO `RES` VALUES(67, 'ChIJPfH6gPHC4DsRuJuyDwBcegU', 'Enjoy Restaurant, Valsad', 0, 1);
INSERT INTO `RES` VALUES(68, 'ChIJi7v-AZ7C4DsRns89sr_soEU', 'Madhuli Restaurant', 0, 0);
INSERT INTO `RES` VALUES(69, 'ChIJbzA4bNra4DsRRBjARvdtkpc', 'Manpasand Bar & Restaurant', 0, 0);
INSERT INTO `RES` VALUES(70, 'ChIJTYOty5h3AjoRr9D6HYp7LoM', 'The Bridge', 0, 0);
INSERT INTO `RES` VALUES(71, 'ChIJnxjKmAh3AjoR5_GBA3DpXlE', 'Badshah Bar & Restaurant', 0, 0);
INSERT INTO `RES` VALUES(72, 'ChIJueElZM1wAjoRBc5iHcXFH5M', 'Kim Ling Mini Chinese Restaura', 0, 0);
INSERT INTO `RES` VALUES(73, 'ChIJSd9aPtV2AjoRBzU5AWtd4yw', 'Bliss Restaurant', 0, 0);
INSERT INTO `RES` VALUES(74, 'ChIJIzNsq0ie-DkRSfg7tFfkUkI', 'Hotel Gateway Continental', 0, 1);
INSERT INTO `RES` VALUES(75, 'ChIJxwdGy1J2AjoR8-i_4xpEAL4', 'Food Station', 0, 0);
INSERT INTO `RES` VALUES(76, 'ChIJP6ucYsZwAjoR00gpUAK-OEk', 'Smart Kolkata', 0, 0);
INSERT INTO `RES` VALUES(77, 'ChIJi4ez4zCe-DkRvEatsMl_TSQ', 'Haldiram''s', 0, 0);
INSERT INTO `RES` VALUES(78, 'ChIJyUdILt52AjoRGyAmYKqbOdE', 'Yauatcha Kolkata', 0, 0);
INSERT INTO `RES` VALUES(79, 'ChIJEy0DLoh1AjoROu8s8uoBJuc', 'Golden inn', 0, 0);
INSERT INTO `RES` VALUES(80, 'ChIJGQs9UcF1AjoRrmdkKQ7W0Xs', 'Afraa, Kolkata, Salt Lake', 0, 0);
INSERT INTO `RES` VALUES(81, 'ChIJVX7i4kR1AjoR3Pe7JpZfq4o', 'Cafe Ekante', 0, 0);
INSERT INTO `RES` VALUES(82, 'ChIJedEMnlJxAjoRNsnozqd-fUY', 'Dhaba @ Kolkata', 0, 0);
INSERT INTO `RES` VALUES(83, 'ChIJIRC6w611AjoRyNBbBqrcvA4', 'Barbeque Nation', 0, 0);
INSERT INTO `RES` VALUES(84, 'ChIJmwVOZeB5AjoRzs22JgpH6Fk', 'India Restaurant', 0, 0);
INSERT INTO `RES` VALUES(85, 'ChIJM9fTCT11AjoRV-Pw_vZCErg', 'Novotel Kolkata Hotel and Resi', 0, 0);
INSERT INTO `RES` VALUES(86, 'ChIJ9aRH_A93AjoRdHK5lM47S_s', 'The Myx, Kolkata, Park Street ', 0, 0);
INSERT INTO `RES` VALUES(87, 'ChIJ___IdOF2AjoR1fQGvJfH64k', 'ARSALAN', 0, 0);
INSERT INTO `RES` VALUES(88, 'ChIJ33o0YBF3AjoRmeCs4RBy3Hk', 'The Oberoi Grand, Kolkata', 0, 0);
INSERT INTO `RES` VALUES(89, 'ChIJd-ZQ6q51AjoRg_cElGOaoi8', 'The Rose Confectionery', 0, 0);
INSERT INTO `RES` VALUES(90, 'ChIJ5z0H1ZA4rTsRkJejP_H-yBw', 'Gingee Restaurant', 0, 0);
INSERT INTO `RES` VALUES(91, 'ChIJCd9wLpc4rTsRP9Gx--Vx8Cg', 'Hotel Aryaas', 0, 0);
INSERT INTO `RES` VALUES(92, 'ChIJzyNMPZ9HrTsRAj0xfZ2HFcc', 'Swagath Dine in', 0, 0);
INSERT INTO `RES` VALUES(93, 'ChIJRRXp1b0-rTsRD-PpsyioDz0', 'Divine Cafe', 0, 0);
INSERT INTO `RES` VALUES(94, 'ChIJNdh6q5c4rTsRFg-54rVeiUk', 'Berry''s Bistro', 0, 0);
INSERT INTO `RES` VALUES(95, 'ChIJtSbylmZHrTsR2omjzmFmfcM', '7 Spice Multicuisine Restauran', 0, 0);
INSERT INTO `RES` VALUES(96, 'ChIJ6edJU21HrTsRtatJ8SA7J_s', 'Moni Restaurant', 0, 0);
INSERT INTO `RES` VALUES(97, 'ChIJYZ-op59HrTsRO4sGbyz3YEU', 'FLO Cafe', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `RL`
--

CREATE TABLE `RL` (
  `PID` int(5) NOT NULL,
  `EID` int(5) NOT NULL,
  UNIQUE KEY `RL` (`PID`,`EID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `RL`
--

INSERT INTO `RL` VALUES(10, 2);
INSERT INTO `RL` VALUES(47, 2);

-- --------------------------------------------------------

--
-- Table structure for table `RV`
--

CREATE TABLE `RV` (
  `EID` int(5) NOT NULL,
  `PID` int(5) NOT NULL,
  UNIQUE KEY `RV` (`EID`,`PID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `RV`
--

INSERT INTO `RV` VALUES(1, 41);
INSERT INTO `RV` VALUES(1, 67);
INSERT INTO `RV` VALUES(2, 4);
INSERT INTO `RV` VALUES(2, 10);
INSERT INTO `RV` VALUES(2, 27);
INSERT INTO `RV` VALUES(2, 47);
INSERT INTO `RV` VALUES(2, 74);
