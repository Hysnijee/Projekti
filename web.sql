-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2021 at 10:53 PM
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
(1, 'cosmetic', 'Grimi duhet të rrisë bukurinë tuaj natyrore, por gjithashtu t\'ju japë liri për të shprehur personalitetin tuaj individual, rrezatues. Ne ofrojmë zgjedhjet dhe gjërat e domosdoshme për bukurinë më të mirë të modës si maskarë, buzëkuq, kozmetikë të përditsh'),
(2, 'accesories', 'Freskoni dukjen tuaj përmes koleksonit online ekskluziv të aksesorëve për femra. Koleksioni jonë merr nga trendet kyçe të dimrit, duke përfshirë edhe aksesorët për flokë që bien në sy, shallet me stampime të trashëguara, syzet e guximshme, kapelat e inspiruara nga cilësia \'vintixh\' dhe bizhuteritë e pasura. Është përdorur estetika maksimaliste, ndërsa moto për aksesorët e sezonës festive është \"më shumë është më shumë\".'),
(3, 'skincare', 'Ne besojmë në fuqinë e përbërësve natyror, dhe e cila me mbështetjen shkencore, krijon rezultatet më efektive. Sidoqoftë të jetë lloji i lëkurës suaj dhe mosha juaj, gama jonë e gjerë e produkteve më të reja për trajtimin dhe kujdesin ndaj lëkurës është për ju. ');

-- --------------------------------------------------------

--
-- Table structure for table `skincareproducts`
--

CREATE TABLE `skincareproducts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `img_path` varchar(255) NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skincareproducts`
--

INSERT INTO `skincareproducts` (`id`, `name`, `category`, `img_path`, `price`) VALUES
(1, 'NovAge Vaj Pastrues për Fytyrë', 'pastrues', '../images/novage-pastrues.jpg', 19.99),
(2, 'Optimals Even Out Pastrues Shkumoz', 'pastrues', '../images/optimals-pastrues.jpeg', 8.99),
(3, 'Pure Skin 2-në-1 Pastrim & Skrab', 'pastrues', '../images/pureskin-pastrues.jpeg', 4.79),
(4, 'Love Nature Pastrues me Tërshërë', 'pastrues', '../images/lovenature-pastrues.jpeg', 6.49),
(5, 'Optimals Hydra Micellar Ujë Pastrues', 'pastrues', '../images/optimalsUje-pastrues.jpeg', 8.99),
(6, 'Essentials me Vitamin E & Vaj Kanol', 'pastrues', '../images/essentials-pastrues.jpeg', 5.99),
(7, 'NovAge Bright Sublime Set', 'ushqyes', '../images/novage-ushqyes.jpeg', 59.99),
(8, 'Tender Care Balsam Mbrojtës me Vaj Organik të Farës së Shegës', 'ushqyes', '../images/tendercare-ushqyes.jpeg', 6.49),
(9, 'Eco Beauty Krema për Fytyrë', 'ushqyes', '../images/ecobeauty-ushqyes.jpeg', 21.99),
(10, 'NovAge Time Restore Krema Regjenerative e Natës', 'ushqyes', '../images/novage2-ushqyes.jpeg', 28.99),
(11, 'NovAge Ultimate Lift Set', 'ushqyes', '../images/novage3-ushqyes.jpeg', 68.74),
(12, 'Milk & Honey Gold Kremë e Ditës Ushqyese', 'ushqyes', '../images/milkhoney-ushqyes.jpeg', 5.49),
(13, 'Essentials me Vitamin E & Vaj Kanoli', 'hidratues', '../images/essentials-krem.jpeg', 6.49),
(14, 'NovAge Bright Sublime Kremë e Ditës', 'hidratues', '../images/novage-krem.jpeg', 25.99),
(15, 'NovAge Bright Sublime Kremë e Natës', 'hidratues', '../images/novage-krem2.jpeg', 17.99),
(16, 'RoyalVelvet për ripërtrirjen e lëkurës', 'hidratues', '../images/royalvelvet-krem.jpeg', 7.99),
(17, 'Diamond Cellular për ripërtrirjen e lëkurës', 'hidratues', '../images/diamond-krem.jpeg', 8.99),
(18, 'Optimals Serum Antioksidant', 'serume', '../images/optimals-serum.jpeg', 14.99),
(19, 'NovAge mbrojtës kundër akneve', 'serume', '../images/novage-serum.jpeg', 23.99),
(20, 'NovAge Ecollagen Wrinkle Power', 'serume', '../images/novage2-serum.jpeg', 17.99),
(21, 'Pure Skin SOS Spot Xhel', 'serume', '../images/pureskin-serum.jpeg', 7.99),
(22, 'Love Nature Vaj me Dru Caji', 'serume', '../images/lovenature-serum.jpeg', 3.99),
(23, 'Pure Skin pë Pastrimin e Pucrrave të Zeza', 'maska', '../images/pureskin-mask.jpeg', 3.99),
(24, 'Love Nature Maskë Argjile Rrodhe', 'maska', '../images/lovenature-mask.jpeg', 0.79),
(25, 'NovAge Maskë Fortësuese për Fytyrë', 'maska', '../images/novage-mask.jpeg', 7.49),
(26, 'Set Maskë Argjile (Pajisjet për Pastrim)', 'maska', '../images/argjile-mask.jpeg', 0.79),
(27, 'NovAge Ultimate Lift Contour Define SPF15', 'kunderDiellit', '../images/novage-diell.jpeg', 28.99),
(28, 'Optimals Urban UV Mbrojtje gjatë ditës FM30', 'kunderDiellit', '../images/optimals-diell.jpeg', 9.99),
(29, 'Sprej për Trup dhe për Fytyrë SPF 50', 'kunderDiellit', '../images/sprej-diell.jpeg', 17.99),
(30, 'Losion për Trup dhe për Fytyrë SPF 30', 'kunderDiellit', '../images/losion-diell.jpeg', 15.99),
(31, 'Xhel për Trup dhe për Fytyrë pas Diellit', 'kunderDiellit', '../images/xhel-diell.jpeg', 8.49);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `homepagedesc`
--
ALTER TABLE `homepagedesc`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `skincareproducts`
--
ALTER TABLE `skincareproducts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `homepagedesc`
--
ALTER TABLE `homepagedesc`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `skincareproducts`
--
ALTER TABLE `skincareproducts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
