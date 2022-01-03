-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2021 at 05:21 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubeskelompok1pw`
--

-- --------------------------------------------------------

--
-- Table structure for table `data1`
--

CREATE TABLE `data1` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data1`
--

INSERT INTO `data1` (`id`, `username`, `password`, `nama`, `email`) VALUES
(48, 'mitha', '202cb962ac59075b964b07152d234b70', 'mitha', 'mitha@gmail.com'),
(49, 'ayam', '202cb962ac59075b964b07152d234b70', 'level', 'ku@banjir.com'),
(50, 'parmit', 'e71400a13af56d7b99e5fc34d70c0555', 'level', 'ku@banjir.com'),
(54, 'diah paramitha', '827ccb0eea8a706c4c34a16891f84e7b', 'bunga', 'a@mak.com'),
(57, 'emak', '827ccb0eea8a706c4c34a16891f84e7b', 'saya', 'hhhhnn@m.vom'),
(58, 'ayam', '202cb962ac59075b964b07152d234b70', 'mitha', 'mitha@gmail.com'),
(59, 'sapi', '202cb962ac59075b964b07152d234b70', 'marfo', 'sabu@gmail.com'),
(60, 'kerbau', '827ccb0eea8a706c4c34a16891f84e7b', 'saya', 'hhhhnn@m.vom'),
(61, 'test', '202cb962ac59075b964b07152d234b70', 'mitha', 'mitha@gmail.com'),
(62, 'kelompok1', '202cb962ac59075b964b07152d234b70', 'level', 'ku@banjir.com'),
(64, '123', '202cb962ac59075b964b07152d234b70', 'bunga', 'dandi@emak.com'),
(65, 'mawar', 'bd117502364227fd8c09098d31e11313', 'mawar', 'mawar@gmail.com'),
(67, 'kelompok1', 'd9b1d7db4cd6e70935368a1efb10e377', 'kelompok1', 'test@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `posting`
--

CREATE TABLE `posting` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `isi` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posting`
--

INSERT INTO `posting` (`id`, `nama`, `isi`) VALUES
(34, 'afdoni', '<p><img alt=\"\" src=\"upload/82376089.jpg\" style=\"height:300px; width:300px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h5><span style=\"color:#e74c3c\"><strong>D R A G O N</strong></span></h5>\r\n\r\n<p>It&#39;s a fruit called dragon fruit. Dragon fruit trees&nbsp;<strong>belong to the cactus plant</strong>&nbsp;with vine roots. This fruit has many benefits, one of which&nbsp;<strong>lowers the body&#39;s cholesterol levels.</strong><br />\r\nThe price for a kilo of dragon fruit is a bit expensive nih bund. Can be purchased starting from IDR 35.000. Eits but about taste,&nbsp;<strong>guaranteed mantul bund.</strong></p>\r\n'),
(35, 'diah', '<p><img alt=\"\" src=\"upload/1495226498.jpg\" style=\"height:300px; width:300px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h5><span style=\"color:#e67e22\"><strong>A P P L E</strong></span></h5>\r\n\r\n<p>Apples are generally ripe in&nbsp;<strong>late summer or autumn.</strong>&nbsp;The size ranges from a diameter of 5 cm to 9 cm. This drink contains Vitamin C and&nbsp;<strong>various types of antioxidants are high.</strong><br />\r\nWell for the price of fruit this one is quite expensive bund. For sekilo this fruit can be priced with Rp 45.00 bund.&nbsp;<strong>Wew expensive!</strong></p>\r\n'),
(36, 'siddiq', '<p><img alt=\"\" src=\"upload/1764180101.jpg\" style=\"height:300px; width:300px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h5><span style=\"color:#2ecc71\"><strong>P E A R</strong></span></h5>\r\n\r\n<p>Pears are fruits produced and consumed around the world, growing on a tree and&nbsp;<strong>harvested in late Summer into October.</strong>&nbsp;One of the benefits of pears can offer an&nbsp;<strong>anticancer effect.</strong><br />\r\nThe price for a kilo of pears is&nbsp;<strong>relatively cheap bund.</strong>&nbsp;Starting from IDR 18,000 to IDR 25,000. But just relax bund, cheap does not mean not sell right? Hehe...</p>\r\n'),
(37, 'dara', '<p><img alt=\"\" src=\"upload/955883046.jpg\" style=\"height:300px; width:300px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h5><span style=\"color:#339900\"><strong>B R O C C O L I</strong></span></h5>\r\n\r\n<p>Broccoli belongs to the&nbsp;<strong>type of cabbage as in cabbage.</strong>&nbsp;Regular consumption of processed broccoli recipes is believed&nbsp;<strong>to prevent cancer, maintain bone health.</strong><br />\r\nThe price for a kilo of broccoli is&nbsp;<strong>quite expensive bund.</strong>&nbsp;Around Rp 35.000 to Rp 40.000.&nbsp;<strong>Is this the reason kids don&#39;t like broccoli?</strong>&nbsp;Hmm...</p>\r\n'),
(38, 'rio', '<p><img alt=\"\" src=\"upload/707954005.jpg\" style=\"height:300px; width:300px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h5><span style=\"color:#16a085\"><strong>S I A M E S E</strong></span></h5>\r\n\r\n<p>Siamese pumpkin or jipang is&nbsp;<strong>a pumpkin plant&nbsp;</strong>that can be eaten by fruits and young shoots. This plant&nbsp;<strong>propagates</strong>&nbsp;in the ground or rather climbs.<br />\r\nThe price of a kilo of&nbsp;<strong>siamese pumpkin is cheap bund.</strong>&nbsp;In the range of Rp 10.000 to 15.000, Bunda already able to cook a good vegetable bund.</p>\r\n'),
(39, 'unknown', '<p><img alt=\"\" src=\"upload/399621001.jpg\" style=\"height:300px; width:300px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"color:#f39c12\"><span style=\"font-size:11px\">P U M P K I N</span></span></p>\r\n\r\n<p>A pumpkin is a cultivar of winter squash that is round <strong>with smooth, slightly ribbed skin,</strong> and is most often deep yellow to orange in coloration. The thick shell contains the seeds and pulp. One of benefits of pumpkin packs vitamin that my boost imunity.</p>\r\n'),
(40, 'diah', '<p><img alt=\"\" src=\"upload/1026618865.jpg\" style=\"height:238px; width:300px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>kacang hijau</p>\r\n\r\n<p>kacang hijau warnanya hijau, bentuknya kecil, enaak untuk dibubur.</p>\r\n'),
(41, 'test', '<p><img alt=\"\" src=\"upload/1911940534.jpg\" style=\"height:156px; width:300px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>hg</p>\r\n\r\n<p>striolasdfm adhbf ngdfkgkf kvmdfkvm</p>\r\n'),
(42, 'kelompok1', '<p><img alt=\"\" src=\"upload/1506848258.jpg\" style=\"height:238px; width:300px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>kacang</p>\r\n\r\n<p>ini adalah kacang yang kaya akan nutrisi</p>\r\n'),
(43, 'bunga', '<p><img alt=\"\" src=\"upload/2041886964.jpg\" style=\"height:300px; width:300px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>khf</p>\r\n\r\n<p>jgdkbehdbednejn</p>\r\n'),
(44, 'test', '<p><img alt=\"\" src=\"upload/2023001213.jpg\" style=\"height:296px; width:350px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>sayur</p>\r\n\r\n<p>anak-anak gak suka sayur</p>\r\n'),
(45, 'kelompok1', '<p><img alt=\"\" src=\"upload/1905619957.jpg\" style=\"height:354px; width:300px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>pepaya</p>\r\n\r\n<p>buah ini rasanya manis.</p>\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data1`
--
ALTER TABLE `data1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posting`
--
ALTER TABLE `posting`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data1`
--
ALTER TABLE `data1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `posting`
--
ALTER TABLE `posting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
