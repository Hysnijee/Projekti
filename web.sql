-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2021 at 09:25 PM
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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `lowerCategory` varchar(255) NOT NULL,
  `img_path` varchar(255) NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category`, `lowerCategory`, `img_path`, `price`) VALUES
(1, 'NovAge Vaj Pastrues për Fytyrë', 'skincare', 'pastrues', '../images/novage-pastrues.jpg', 19.99),
(2, 'Optimals Even Out Pastrues Shkumoz', 'skincare', 'pastrues', '../images/optimals-pastrues.jpeg', 8.99),
(3, 'Pure Skin 2-në-1 Pastrim & Skrab', 'skincare', 'pastrues', '../images/pureskin-pastrues.jpeg', 4.79),
(4, 'Love Nature Pastrues me Tërshërë', 'skincare', 'pastrues', '../images/lovenature-pastrues.jpeg', 6.49),
(5, 'Optimals Hydra Micellar Ujë Pastrues', 'skincare', 'pastrues', '../images/optimalsUje-pastrues.jpeg', 8.99),
(6, 'Essentials me Vitamin E & Vaj Kanol', 'skincare', 'pastrues', '../images/essentials-pastrues.jpeg', 5.99),
(7, 'NovAge Bright Sublime Set', 'skincare', 'ushqyes', '../images/novage-ushqyes.jpeg', 59.99),
(8, 'Tender Care Balsam Mbrojtës me Vaj Organik të Farës së Shegës', 'skincare', 'ushqyes', '../images/tendercare-ushqyes.jpeg', 6.49),
(9, 'Eco Beauty Krema për Fytyrë', 'skincare', 'ushqyes', '../images/ecobeauty-ushqyes.jpeg', 21.99),
(10, 'NovAge Time Restore Krema Regjenerative e Natës', 'skincare', 'ushqyes', '../images/novage2-ushqyes.jpeg', 28.99),
(11, 'NovAge Ultimate Lift Set', 'skincare', 'ushqyes', '../images/novage3-ushqyes.jpeg', 68.74),
(12, 'Milk & Honey Gold Kremë e Ditës Ushqyese', 'skincare', 'ushqyes', '../images/milkhoney-ushqyes.jpeg', 5.49),
(13, 'Essentials me Vitamin E & Vaj Kanoli', 'skincare', 'hidratues', '../images/essentials-krem.jpeg', 6.49),
(14, 'NovAge Bright Sublime Kremë e Ditës', 'skincare', 'hidratues', '../images/novage-krem.jpeg', 25.99),
(15, 'NovAge Bright Sublime Kremë e Natës', 'skincare', 'hidratues', '../images/novage-krem2.jpeg', 17.99),
(16, 'RoyalVelvet për ripërtrirjen e lëkurës', 'skincare', 'hidratues', '../images/royalvelvet-krem.jpeg', 7.99),
(17, 'Diamond Cellular për ripërtrirjen e lëkurës', 'skincare', 'hidratues', '../images/diamond-krem.jpeg', 8.99),
(18, 'Optimals Serum Antioksidant', 'skincare', 'serume', '../images/optimals-serum.jpeg', 14.99),
(19, 'NovAge mbrojtës kundër akneve', 'skincare', 'serume', '../images/novage-serum.jpeg', 23.99),
(20, 'NovAge Ecollagen Wrinkle Power', 'skincare', 'serume', '../images/novage2-serum.jpeg', 17.99),
(21, 'Pure Skin SOS Spot Xhel', 'skincare', 'serume', '../images/pureskin-serum.jpeg', 7.99),
(22, 'Love Nature Vaj me Dru Caji', 'skincare', 'serume', '../images/lovenature-serum.jpeg', 3.99),
(23, 'Pure Skin pë Pastrimin e Pucrrave të Zeza', 'skincare', 'maska', '../images/pureskin-mask.jpeg', 3.99),
(24, 'Love Nature Maskë Argjile Rrodhe', 'skincare', 'maska', '../images/lovenature-mask.jpeg', 0.79),
(25, 'NovAge Maskë Fortësuese për Fytyrë', 'skincare', 'maska', '../images/novage-mask.jpeg', 7.49),
(26, 'Set Maskë Argjile (Pajisjet për Pastrim)', 'skincare', 'maska', '../images/argjile-mask.jpeg', 0.79),
(27, 'NovAge Ultimate Lift Contour Define SPF15', 'skincare', 'kunderDiellit', '../images/novage-diell.jpeg', 28.99),
(28, 'Optimals Urban UV Mbrojtje gjatë ditës FM30', 'skincare', 'kunderDiellit', '../images/optimals-diell.jpeg', 9.99),
(29, 'Sprej për Trup dhe për Fytyrë SPF 50', 'skincare', 'kunderDiellit', '../images/sprej-diell.jpeg', 17.99),
(30, 'Losion për Trup dhe për Fytyrë SPF 30', 'skincare', 'kunderDiellit', '../images/losion-diell.jpeg', 15.99),
(31, 'Xhel për Trup dhe për Fytyrë pas Diellit', 'skincare', 'kunderDiellit', '../images/xhel-diell.jpeg', 8.49),
(32, 'ushqyes', 'NovAge Skinergise Ideal Perfection Krema e Natës', '', '../images/novage-ushqyes2.jpeg', 21.99),
(33, 'ushqyes', 'NovAge Skinergise Ideal Perfection Krema e Natës', '', '../images/novage4-ushqyes.jpeg', 21.99),
(34, 'hhjvghv', 'ghvghvg', '', 'hcgchgcgvhg', 7.99);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
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

INSERT INTO `user` (`userid`, `fullname`, `email`, `username`, `password`, `city`, `address`, `ccNo`, `role`) VALUES
(1, 'Hysnije Zllanoga', 'hysnijee.zllanoga@gmail.com', 'Hysnije_z', 0x333837313534323438306234663130313261313535323334663764623961626600000000000000000000000000000000000000000000000000000000000000000000, 'Rahovec', 'Mizair Isma', '2362382782992', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `homepagedesc`
--
ALTER TABLE `homepagedesc`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
