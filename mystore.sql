-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2019 at 04:16 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mystore`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `mahd` varchar(200) NOT NULL,
  `mahang` varchar(200) NOT NULL,
  `gia` int(11) DEFAULT NULL,
  `soluong` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chitiethoadon`
--

INSERT INTO `chitiethoadon` (`mahd`, `mahang`, `gia`, `soluong`) VALUES
('1554455719', 'bantay', 100, 2),
('1554455719', 'hong', 70, 1),
('1554455719', 'saigon', 100, 1);

-- --------------------------------------------------------

--
-- Table structure for table `hang`
--

CREATE TABLE `hang` (
  `mahang` varchar(200) NOT NULL,
  `tenhang` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mota` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `hinh` varchar(200) DEFAULT NULL,
  `gia` int(11) DEFAULT NULL,
  `maloai` varchar(200) DEFAULT NULL,
  `manxb` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hang`
--

INSERT INTO `hang` (`mahang`, `tenhang`, `mota`, `hinh`, `gia`, `maloai`, `manxb`) VALUES
('bantay', 'áo bàn tay', 'áo bàn tay', 'upload/trang-you_medium.jpg', 100, 'l1', 'abc'),
('cam', 'áo cam', 'áo cam', 'upload/cam-aotron_c28b55d4-31e0-4d41-56bb-aa495bd476b9_medium.jpg', 70, 'l1', 'abc'),
('danang', 'áo đà nẵng', 'áo đà nẵng', 'upload/den-dn_medium.jpg', 100, 'l1', 'abc'),
('do', 'áo đỏ', 'áo đỏ', 'upload/do-aotron_7cdcf461-3325-436e-682f-0363957f0a9d_medium.jpg', 70, 'l1', 'abc'),
('hanoi', 'áo Hà Nội', 'áo Hà Nội', 'upload/den-hn_medium.jpg', 100, 'l1', 'abc'),
('hong', 'áo hồng', 'áo hồng', 'upload/hong-aothuntron_medium (1).jpg', 70, 'l1', 'abc'),
('saigon', 'áo Sài Gòn', 'áo Sài Gòn', 'upload/den-sg_medium.jpg', 100, 'l1', 'abc'),
('trang', 'áo trắng', 'áo trắng', 'upload/trang-aotron_a072e778-a443-4343-460f-4d89a2f9717e_medium.jpg', 70, 'l1', 'abc'),
('truelove', 'áo true love', 'áo true love', 'upload/trang-truelove_medium.jpg', 70, 'l1', 'abc'),
('vang', 'áo vàng', 'áo vàng', 'upload/vangdam-aotron_5ac262b4-553e-4ff7-5b78-47df0e49f207_medium.jpg', 70, 'l1', 'abc');

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `mahd` varchar(200) NOT NULL,
  `email` varchar(200) DEFAULT NULL,
  `tenngnhan` varchar(200) DEFAULT NULL,
  `diachi` varchar(200) DEFAULT NULL,
  `dienthoai` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`mahd`, `email`, `tenngnhan`, `diachi`, `dienthoai`) VALUES
('1554455719', 'minhkhoi', 'khoisss', '277ss', '221213');

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `email` varchar(200) NOT NULL,
  `matkhau` varchar(200) DEFAULT NULL,
  `tenkh` varchar(200) DEFAULT NULL,
  `diachi` varchar(200) DEFAULT NULL,
  `dienthoai` int(11) DEFAULT NULL,
  `admin` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`email`, `matkhau`, `tenkh`, `diachi`, `dienthoai`, `admin`) VALUES
('minhkhoi', '123465', 'khoi', '123456', 123123, 1),
('s', '1', 's', 's', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `loai`
--

CREATE TABLE `loai` (
  `maloai` varchar(200) NOT NULL,
  `tenloai` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loai`
--

INSERT INTO `loai` (`maloai`, `tenloai`) VALUES
('l1', 'l1'),
('l2', 'l2');

-- --------------------------------------------------------

--
-- Table structure for table `nhaxb`
--

CREATE TABLE `nhaxb` (
  `manxb` varchar(200) NOT NULL,
  `tennxb` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nhaxb`
--

INSERT INTO `nhaxb` (`manxb`, `tennxb`) VALUES
('abc', 'abc'),
('xyz', 'xyz');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD PRIMARY KEY (`mahd`,`mahang`),
  ADD KEY `mahd` (`mahd`),
  ADD KEY `mahang` (`mahang`);

--
-- Indexes for table `hang`
--
ALTER TABLE `hang`
  ADD PRIMARY KEY (`mahang`),
  ADD KEY `maloai` (`maloai`),
  ADD KEY `manxb` (`manxb`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`mahd`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`maloai`);

--
-- Indexes for table `nhaxb`
--
ALTER TABLE `nhaxb`
  ADD PRIMARY KEY (`manxb`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD CONSTRAINT `chitiethoadon_ibfk_1` FOREIGN KEY (`mahd`) REFERENCES `hoadon` (`mahd`),
  ADD CONSTRAINT `chitiethoadon_ibfk_2` FOREIGN KEY (`mahang`) REFERENCES `hang` (`mahang`);

--
-- Constraints for table `hang`
--
ALTER TABLE `hang`
  ADD CONSTRAINT `hang_ibfk_1` FOREIGN KEY (`maloai`) REFERENCES `loai` (`maloai`),
  ADD CONSTRAINT `hang_ibfk_2` FOREIGN KEY (`manxb`) REFERENCES `nhaxb` (`manxb`),
  ADD CONSTRAINT `hang_ibfk_3` FOREIGN KEY (`manxb`) REFERENCES `nhaxb` (`manxb`);

--
-- Constraints for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`email`) REFERENCES `khachhang` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
