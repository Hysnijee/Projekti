-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2021 at 04:02 PM
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
-- Table structure for table `catalog`
--

CREATE TABLE `catalog` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img_path` varchar(255) NOT NULL,
  `pdf_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `catalog`
--

INSERT INTO `catalog` (`id`, `name`, `img_path`, `pdf_path`) VALUES
(3, 'Katalogu Janar 2021', '../images/catalog/c3.jpg', '../pdf/./Oriflame Catalogue January 2021.pdf'),
(5, 'Katalogu Nëntor 2020', '../images/catalog/c4.jpg', '../pdf/./Oriflame catalogue november 2020.pdf'),
(6, 'Katalogu Shtator 2020', '../images/catalog/c5.jpg', '../pdf/./Oriflame Catalogue september 2020.pdf'),
(7, 'Katalogu Gusht 2020', '../images/catalog/c6.jpg', '../pdf/./Oriflame catalogue August 2020.pdf'),
(9, 'Katalogu Korrik 2020', '../images/catalog/c7.jpg', '../pdf/./Oriflame catalogue July 2020.pdf');

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
(5, 'second-paragraph', 'Për më shumë se 50 vjet, Oriflame u ka fuqizuar njerëzit të bëjnë një ndryshim në jetën e tyre duke rekomanduar dhe shitur produkte bukurie me cilësi të lartë të frymëzuar nga natyra dhe mundësuar nga shkenca suedeze. Oriflame është kompania më e madhe e bukurisë në Evropë që shet drejtpërdrejt me një komunitet global me mbi 3 milion konsulentë të pavarur të shitjeve në të gjithë botën.'),
(6, 'Fashion-up', 'Accessories are the alpha and omega in any wardrobe to express style, elegance and personality. \r\nYou can transform your look with our wide range of accessories, including beautiful jewelry, gorgeous handbags, cool sunglasses and great gift ideas.');

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
(35, 'Body Lotion FAIRNESS', 'Cosmetics', 'Bath & Body', '../images/bb1.png', 8),
(36, 'Lotion FAIRNESS', 'Cosmetics', 'Bath & Body', '../images/bb2.jpeg', 6),
(37, 'Bubble Bath', 'Cosmetics', 'Bath & Body', '../images/bb3.jpg', 4.5),
(38, 'Feminelle Special Care', 'Cosmetics', 'Bath & Body', '../images/bb4.png', 5),
(39, 'Bubble Bath Sweetheart', 'Cosmetics', 'Bath & Body', '../images/bb5.png', 9),
(40, 'Body & Mind', 'Cosmetics', 'Bath & Body', '../images/bb6.jpg', 9),
(41, 'Silk Beauty - Body Wash', 'Cosmetics', 'Bath & Body', '../images/bb7.jpg', 5),
(42, 'Milk & Honey - Body Wash ', 'Cosmetics', 'Bath & Body', '../images/bb8.jpg', 5.6),
(43, 'Tenderly - Body Spray', 'Cosmetics', 'Bath & Body', '../images/bb9.jpg', 4),
(44, 'Coconut & Ricemilk Shampoo', 'Cosmetics', 'Bath & Body', '../images/bb10.jpg', 8),
(45, 'Milk Honey Gold', 'Cosmetics', 'Bath & Body', '../images/bb11.jpg', 7.9),
(46, 'Love Nature - Shower gel', 'Cosmetics', 'Bath & Body', '../images/bb12.jpg', 7),
(47, 'Nude Lip Gloss', 'Cosmetics', 'Lip Gloss', '../images/lg1.Jpeg', 3),
(48, 'Pink Lip Gloss', 'Cosmetics', 'Lip Gloss', '../images/lg2.jpg', 3),
(49, 'Purple Lip Gloss', 'Cosmetics', 'Lip Gloss', '../images/lg3.Jpeg', 3),
(50, 'Open Pink Lip', 'Cosmetics', 'Lip', '../images/lip1.Jpeg', 3),
(51, 'Pink Lip', 'Cosmetics', 'Lip', '../images/lip2.jpg', 3),
(52, 'Nude Lipp', 'Cosmetics', 'Lip', '../images/lip3.jpg', 3),
(53, 'Purple Lip', 'Cosmetics', 'Lip', '../images/lip4.jpg', 3),
(54, 'Red Lip', 'Cosmetics', 'Lip', '../images/lip5.Jpeg', 3),
(55, 'Nude Lip', 'Cosmetics', 'Lip', '../images/lip6.jpg', 3),
(56, 'The One Foundation - Everlasting', 'Cosmetics', 'Foundation', '../images/f1.jpg', 12),
(57, 'Matte Control Foundation', 'Cosmetics', 'Foundation', '../images/f6.jpg', 24),
(58, 'The One Foundation - Everlasting Extreme', 'Cosmetics', 'Foundation', '../images/f3.Jpeg', 15),
(59, 'Illuskin Foundation and Concealer', 'Cosmetics', 'Foundation', '../images/f4.jpg', 28),
(60, 'One Color Foundation', 'Cosmetics', 'Foundation', '../images/f5.Jpeg', 8),
(61, 'Waterproof Mascara', 'Cosmetics', 'Lash Mascara', '../images/lash1.Jpeg', 8),
(62, 'FatLash Mascara', 'Cosmetics', 'Lash Mascara', '../images/lash2.jpg', 6),
(63, 'Wonder Lash XXL', 'Cosmetics', 'Lash Mascara', '../images/lash3.Jpeg', 7.5),
(64, '5-in-1 Wonder Lash Mascara', 'Cosmetics', 'Lash Mascara', '../images/lash4.Jpeg', 7),
(65, 'Long Lash Mascara', 'Cosmetics', 'Lash Mascara', '../images/lash5.jpg', 9),
(66, 'Wonder Lash Mascara', 'Cosmetics', 'Lash Mascara', '../images/lash6.jpg', 9),
(67, 'Double Effect Mascara', 'Cosmetics', 'Lash Mascara', '../images/lash7.Jpeg', 12),
(68, 'Theme Douse Mascara', 'Cosmetics', 'Lash Mascara', '../images/lash8.jpg', 5.6),
(69, 'Macnetista', 'Cosmetics', 'Parfume', '../images/p1.jpg', 25),
(70, 'Paradise', 'Cosmetics', 'Parfume', '../images/p2.jpg', 40),
(71, 'Mysterial OUD', 'Cosmetics', 'Parfume', '../images/p3.jpg', 19.5),
(72, 'Infinita', 'Cosmetics', 'Parfume', '../images/p4.jpg', 34),
(73, 'Amber Elixer', 'Cosmetics', 'Parfume', '../images/p5.jpg', 43),
(74, 'Eclat Mon Parfum', 'Cosmetics', 'Parfume', '../images/p6.jpg', 27),
(75, 'Possess', 'Cosmetics', 'Parfume', '../images/p7.jpg', 31),
(76, 'ColourBox Face Powder 3', 'Cosmetics', 'Powder', '../images/powder1.Jpeg', 12),
(77, 'Powder', 'Cosmetics', 'Powder', '../images/powder2.jpg', 8),
(78, 'ColourBox Face Powder 1', 'Cosmetics', 'Powder', '../images/powder3.jpg', 12),
(79, 'Colour Powder', 'Cosmetics', 'Powder', '../images/powder4.webp', 24),
(80, 'Powder 2', 'Cosmetics', 'Powder ', '../images/powder5.webp', 12),
(81, 'Colour Powder 1', 'Cosmetics', 'Powder', '../images/powder6.webp', 24),
(82, 'Hydratin face cream - Normal Skin', 'Cosmetics', 'Organic Products', '../images/organic1.Jpeg', 8),
(83, 'Nourishing face cream - Dry Skin', 'Cosmetics', 'Organic Products', '../images/organic2.Jpeg', 6),
(84, 'Purifying face wash', 'Cosmetics', 'Organic Products', '../images/organic3.jpg', 4.5),
(85, 'Blackhead Clearing Mask', 'Cosmetics', 'Organic Products', '../images/organic4.Jpeg', 5),
(86, 'Cleansing Gel - Oily Skin', 'Cosmetics ', 'Organic Products', '../images/organic5.jpeg', 9),
(87, 'Protecting Face Wash', 'Cosmetics', 'Organic Products', '../images/organic6.jpg', 9),
(88, 'Purifying Face Oil', 'Cosmetics', 'Organic Products', '../images/organic7.Jpeg', 9),
(89, 'Cracked Heel Repair & Smooth', 'Cosmetics', 'Organic Products', '../images/organic8.jpg', 7.6),
(90, 'Silk Baeuty - Hand Cream', 'Cosmetics', 'Organic Products', '../images/organic9.jpg', 4),
(91, 'Dragonfly Garnet Earrings', 'Accessories', 'Accessories', '../images/acc1.Jpeg', 9.99),
(92, 'Empower Love Bracelet', 'Accessories', 'Accessories', '../images/acc2.Jpeg', 17.99),
(93, 'Lucky Clover Bracelet', 'Accessories', 'Accessories', '../images/acc3.Jpeg', 8.99),
(94, 'Lucky Clover Earrings', 'Accessories\r\n', 'Accessories', '../images/acc4.Jpeg', 9.99),
(95, 'Quartz Blossom Ring 19', 'Accessories', 'Accessories', '../images/acc5.Jpeg', 39.99),
(96, 'Rose Pearl Ring 20', 'Accessories', 'Accessories', '../images/acc6.Jpeg', 9.99),
(97, 'Feminina Sunglasses', 'Accessories', 'Accessories', '../images/acc7.Jpeg', 13.99),
(98, 'Grace Rose Watch', 'Accessories', 'Accessories', '../images/acc8.Jpeg', 19.99),
(99, 'Essential Watch', 'Accessories', 'Accessories', '../images/acc9.Jpeg', 29.99),
(100, 'Galaxy Quartz Ring 17', 'Accessories', 'Accessories', '../images/acc10.Jpeg', 19.99),
(101, 'Savage Hawk´s Eye Ring 16', 'Accessories', 'Accessories', '../images/acc11.Jpeg', 19.99),
(102, 'EClassica Sunglasses', 'Accessories', 'Accessories', '../images/acc12.Jpeg', 18.99),
(103, 'Passionate Watch', ' Accessories', ' Accessories', '../images/acc13.Jpeg', 39.99),
(104, 'Passionate Tourmaline Earrings', 'Accessories', 'Accessories', '../images/acc14.Jpeg', 40),
(105, 'Exotic Quilted Bag', 'Accessories', 'Accessories', '../images/acc15.Jpeg', 34.99),
(106, 'Saga Mist Bag', 'Accessories', 'Accessories', '../images/acc16.Jpeg', 32.99),
(107, 'Bjork Colourful Scarf', 'Accessories', 'Accessories', '../images/acc17.Jpeg', 11.95),
(108, 'Energy Clutch wallet', 'Accessories', 'Accessories', '../images/acc18.Jpeg', 17.95),
(109, 'To You Hat in a Box', 'Accessories', 'Accessories', '../images/acc19.Jpeg', 8.95),
(110, 'Laura Knit Scarf', 'Accessories', 'Accessories', '../images/acc20.Jpeg', 16.99),
(111, 'Oceanica Bucket Bag', 'Accessories', 'Accessories', '../images/acc21.Jpeg', 24.95),
(112, 'Dragonfly Garnet Earrings.', 'Accessories', 'Jewerly', '../images/acc1.Jpeg', 9.99),
(113, 'Empower Love Bracelet.', 'Accessories', 'Jewerly', '../images/acc2.Jpeg', 17.99),
(114, 'Lucky Clover Bracelet.', 'Accessories', 'Jewerly', '../images/acc3.Jpeg', 8.99),
(115, 'Lucky Clover Earrings.', 'Accessories', 'Jewerly', '../images/acc4.Jpeg', 9.99),
(116, 'Quartz Blossom Ring 19.', 'Accessories', 'Jewerly', '../images/acc5.Jpeg', 39.99),
(117, 'Rose Pearl Ring 20.', 'Accessories', 'Jewerly', '../images/acc6.Jpeg', 9.99),
(118, 'Galaxy Quartz Ring 17.', 'Accessories', 'Jewerly', '../images/acc10.Jpeg', 19.99),
(119, 'Savage Hawk´s Eye Ring 16.', 'Accessories', 'Jewerly', '../images/acc11.Jpeg', 19.99),
(120, 'Passionate Tourmaline Earrings.', 'Accessories', 'Jewerly', '../images/acc14.Jpeg', 39.99),
(121, 'Feminina Sunglasses.', 'Accessories', 'Fashion Accessories', '../images/acc7.Jpeg', 13.99),
(122, 'Essential Watch.', 'Accessories', 'Fashion Accessories', '../images/acc9.Jpeg', 29.99),
(123, 'EClassica Sunglasses.', 'Accessories', 'Fashion Accessories', '../images/acc12.Jpeg', 19.99),
(124, 'Exotic Quilted Bag.', 'Accessories', 'Fashion Accessories', '../images/acc15.Jpeg', 34.99),
(125, 'Saga Mist Bag.', 'Accessories', 'Fashion Accessories', '../images/acc16.Jpeg', 32.95),
(126, 'Bjork Colourful Scarf.', 'Accessories', 'Fashion Accessories', '../images/acc17.Jpeg', 11.95),
(127, 'Energy Clutch wallet.', 'Accessories', 'Fashion Accessories', '../images/acc18.Jpeg', 17.95),
(128, 'To You Hat in a Box.', 'Accessories', 'Fashion Accessories', '../images/acc19.Jpeg', 8.95),
(129, 'Laura Knit Scarf.', ' Accessories', 'Fashion  Accessories', '../images/acc20.Jpeg', 16.95),
(130, 'Oceanica Bucket Bag.', 'Accessories', 'Fashion Accessories', '../images/acc21.Jpeg', 24.95),
(134, 'Demi Frame Sunglasses', 'Accessories', 'Accessories', '../images/accnew.Jpeg', 39.99),
(135, 'Lash Extension Mascara', 'Cosmetics', 'Lash Mascara', '../images/lash9.Jpeg', 6.89),
(136, 'Foundation for oily skin', 'Cosmetics', 'Foundation', '../images/foundation6.jpg', 12.99),
(137, 'NovAge Men Intense Losion Xhel Kundër Plakjes', 'skincare', 'hidratues', '../images/hidratues-last.Jpeg', 17.99),
(138, 'Love Nature Skrab Marmelade e manave ​​për fytyrë', 'skincare', 'serume', '../images/serume-last.Jpeg', 5.99),
(139, 'Sun Zone Ujë për Nxierje për Fytyrë dhe Trup', 'skincare', 'kunderDiellit', '../images/kujdesi-last.Jpeg', 8.49);

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
  `password` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `ccNo` bigint(20) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `name`, `lastname`, `email`, `username`, `password`, `city`, `address`, `ccNo`, `role`) VALUES
(8, 'Hysnije', 'Zllanoga', 'hysnijee.zllanoga@gmail.com', 'Hysnije', '$2y$10$pWMJ1lFJduRcExdtet8gBuUPFR6zkJF4RkdxIiQ62Cfkk/OqQ5X4q', 'Rahovec', 'Mizair-Isma', 123456788654, 1),
(9, 'Albiona', 'Berisha', 'albionaberisha20@gmail.com', 'Albiona', '$2y$10$aUsaEftC/xowZeAowpcjCeB9sgxwuKLUawpLOyAdSXRwzjKtda65m', 'Rahovec', 'Milaim-Morina', 4237489872, 1),
(10, 'Floriana', 'Zllanoga', 'florizllanoga@hotmail.com', 'Floriana', '$2y$10$d2sYzHQQ.cY.eZ7LgG/2Ju.MyywOJe5FDwjRnUzqqsNgjKICghZOi', 'Rahovec', 'Milaim-Morina', 34738949393, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `catalog`
--
ALTER TABLE `catalog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `homepagedesc`
--
ALTER TABLE `homepagedesc`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
