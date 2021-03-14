-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2021 at 12:19 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web`
--

-- --------------------------------------------------------

--
-- Table structure for table `homepagedesc`
--

CREATE TABLE `homepagedesc` (
  `Id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `homepagedesc`
--

INSERT INTO `homepagedesc` (`Id`, `type`, `description`) VALUES
(1, 'cosmetic', 'Grimi duhet të rrisë bukurinë tuaj natyrore, por gjithashtu t\'ju japë liri për të shprehur personalitetin tuaj individual, rrezatues. Ne ofrojmë zgjedhjet dhe gjërat e domosdoshme për bukurinë më të mirë të modës si maskarë, buzëkuq, kozmetikë të përditshëm për fytyrën, sytë, buzët dhe thonjtë, plus nuancat që i përshtaten të gjithëve dhe çdo pamje. Qofshin bazat sezonale apo kombinime frymëzuese të ngjyrave, është e lehtë të blini produktet tona të reja - të gjitha të duken bukur nga mëngjesi në mbrëmje. '),
(2, 'accesories', 'Freskoni dukjen tuaj përmes koleksonit online ekskluziv të aksesorëve për femra. Koleksioni jonë merr nga trendet kyçe të dimrit, duke përfshirë edhe aksesorët për flokë që bien në sy, shallet me stampime të trashëguara, syzet e guximshme, kapelat e inspiruara nga cilësia \'vintixh\' dhe bizhuteritë e pasura. Është përdorur estetika maksimaliste, ndërsa moto për aksesorët e sezonës festive është \"më shumë është më shumë\".'),
(3, 'skincare', 'Ne besojmë në fuqinë e përbërësve natyror, dhe e cila me mbështetjen shkencore, krijon rezultatet më efektive. Sidoqoftë të jetë lloji i lëkurës suaj dhe mosha juaj, gama jonë e gjerë e produkteve më të reja për trajtimin dhe kujdesin ndaj lëkurës është për ju. '),
(4, 'first-paragraph', 'Për mbi 50 vjet kemi mundësuar njerëzit nga e gjithë bota të festojnë bukurinë e tyre personale dhe të përmbushin ëndrrat e tyre. Ne krijojmë dhe ofrojmë produkte me cilësi të lartë, të sigurtë, të orientuar drejt prirjes për të dashuruar bukurinë dhe mundësinë unike për t\'u bërë pjesë e një bashkësie globale bukurie.'),
(5, 'second-paragraph', 'Për më shumë se 50 vjet, Oriflame u ka fuqizuar njerëzit të bëjnë një ndryshim në jetën e tyre duke rekomanduar dhe shitur produkte bukurie me cilësi të lartë të frymëzuar nga natyra dhe mundësuar nga shkenca suedeze. Oriflame është kompania më e madhe e bukurisë në Evropë që shet drejtpërdrejt me një komunitet global me mbi 3 milion konsulentë të pavarur të shitjeve në të gjithë botën.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` binary(66) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `ccNo` varchar(255) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `name`, `lastname`, `email`, `username`, `password`, `city`, `address`, `ccNo`, `role`) VALUES
(1, 'Hysnije', 'Zllanoga', 'hysnijee.zllanoga@gmail.com', 'Admin', 0x333837313534323438306234663130313261313535323334663764623961626600000000000000000000000000000000000000000000000000000000000000000000, 'Rahovec', 'Mizair-Isma', '2362382782992', 1),
(2, 'Albiona', 'Berisha', 'albionaberisha20@gmail.com', 'AlbionaaB', 0x316664343232666237626139366461636230613966646362653131663332643100000000000000000000000000000000000000000000000000000000000000000000, 'Rahovec', 'Gezim-Hamza', '3789302892', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `homepagedesc`
--
ALTER TABLE `homepagedesc`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `homepagedesc`
--
ALTER TABLE `homepagedesc`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
