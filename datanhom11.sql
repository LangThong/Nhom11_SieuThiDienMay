-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2024 at 06:56 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datanhom11`
--
CREATE DATABASE IF NOT EXISTS `datanhom11` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `datanhom11`;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `IdCart` int(11) NOT NULL,
  `IdUser` int(11) NOT NULL,
  `ChiTiet` longtext COLLATE utf8_unicode_ci NOT NULL,
  `GiaTien` int(11) NOT NULL,
  `TrangThai` text COLLATE utf8_unicode_ci NOT NULL,
  `ThoiGian` longtext COLLATE utf8_unicode_ci NOT NULL,
  `shipping_address` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `Phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`IdCart`, `IdUser`, `ChiTiet`, `GiaTien`, `TrangThai`, `ThoiGian`, `shipping_address`, `Phone`) VALUES
(75, 8, '\r\n								Mã sản phẩm: 17 - Số lượng: 1</br>								', 6790000, 'Chưa thanh toán', '10/04/24-08:18:58pm', '', 0),
(76, 2, '\r\n								Mã sản phẩm: 2 - Số lượng: 1</br>Mã sản phẩm: 17 - Số lượng: 1</br>								', 14390000, 'Chưa thanh toán', '10/04/24-08:22:01pm', '', 0),
(77, 2, '\r\n								Mã sản phẩm: 2 - Số lượng: 1</br>Mã sản phẩm: 17 - Số lượng: 1</br>								', 14390000, 'Chưa thanh toán', '10/04/24-08:22:43pm', '', 0),
(78, 8, '\r\n								Mã sản phẩm: 3 - Số lượng: 16</br>Mã sản phẩm: 11 - Số lượng: 16</br>								', 231440000, 'Chưa thanh toán', '11/04/24-02:16:26pm', '', 0),
(79, 8, '\r\n								Mã sản phẩm: 18 - Số lượng: 100</br>								', 1229000000, 'Chưa thanh toán', '11/04/24-04:16:41pm', '', 773343290),
(80, 8, '\r\n								Mã sản phẩm: 18 - Số lượng: 100</br>								', 1229000000, 'Chưa thanh toán', '11/04/24-04:21:36pm', '', 773343290),
(81, 8, '\r\n								Mã sản phẩm: 18 - Số lượng: 100</br>								', 1229000000, 'Chưa thanh toán', '11/04/24-04:24:11pm', '', 773343290),
(82, 8, '\r\n								Mã sản phẩm: 18 - Số lượng: 100</br>								', 1229000000, 'Chưa thanh toán', '11/04/24-04:24:25pm', '', 123123123),
(83, 8, '\r\n								Mã sản phẩm: 18 - Số lượng: 5</br>								', 61450000, 'Chưa thanh toán', '11/04/24-04:26:39pm', 'ascas', 0);

-- --------------------------------------------------------

--
-- Table structure for table `nhomsp`
--


CREATE TABLE `nhomsp` (
  `IdNhomSP` int(11) NOT NULL,
  `TenNhomSP` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
 `HinhNSP` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
--
-- Dumping data for table `nhomsp`
--

INSERT INTO `nhomsp` (`IdNhomSP`, `TenNhomSP`, `HinhNSP`) VALUES
(1, 'Tivi', '/nhomsp/TV.jpg'),
(2, 'Tủ Lạnh', '/nhomsp/TL.jpg'),
(3, 'Máy Giặt', '/nhomsp/MG.jpg'),
(4, 'Máy Lạnh', '/nhomsp/ML.jpg');


-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `IdSP` int(11) NOT NULL,
  `IdNhomSP` int(11) NOT NULL,
  `TenSP` varchar(50) NOT NULL,
  `HangSX` varchar(50) NOT NULL,
  `Hinh` varchar(255) NOT NULL,
  `Gia` int(11) NOT NULL,
  `ChiTiet` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `GiamGia` int(11) NOT NULL,
  `BaoHanh` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`IdSP`, `IdNhomSP`, `TenSP`, `HangSX`, `Hinh`, `Gia`, `ChiTiet`, `GiamGia`, `BaoHanh`) VALUES
(1, 0, 'TV Sony 1000 inch', 'TOSHIBA', '/sanpham/tvsn1.jpg', 11290000, '', 2000000, 50),
(2, 1, 'TV Sony 40 inch', 'Sony', '/sanpham/tvsn2.jpg', 7600000, '', 0, 0),
(3, 1, 'TV Sony 55 inch', 'Sony', '/sanpham/tvsn3.jpg', 35900000, '', 0, 0),
(4, 1, 'TV Samsung 24 inch', 'Samsung', '/sanpham/tvss1.jpg', 3900000, '', 0, 0),
(5, 1, 'TV Samsung 32 inch', 'Samsung', '/sanpham/tvss2.jpg', 5900000, '', 0, 0),
(6, 1, 'TV Samsung 49 inch', 'Samsung', '/sanpham/tvss3.jpg', 14900000, '<p>ABC XYZ</p>\r\n', 0, 0),
(7, 1, 'TV Samsung 40 inch', 'Samsung', '/sanpham/tvss4.jpg', 10490000, '', 0, 0),
(8, 1, 'TV Panasonic 40 inch', 'Panasonic', '/sanpham/tvp1.jpg', 6790000, '', 0, 0),
(9, 1, 'TV Panasonic 50 inch', 'Panasonic', '/sanpham/tvp2.jpg', 11790000, '', 0, 0),
(10, 2, 'Tu Lanh Panasonic 152 lit', 'Panasonic', '/sanpham/tlp1.jpg', 4390000, '<p><strong>C&ocirc;ng suất ti&ecirc;u thụ:</strong> 100 - 180 W.</p>\r\n\r\n<p><strong>D&ograve;ng điện:</strong> 220V/50Hz/1.5A.</p>\r\n\r\n<p><strong>Trọng lượng:</strong> 62 Kg.</p>\r\n\r\n<p><strong>K&iacute;ch thước (RxSxC):</strong> 587 x 650 x 1677 mm.</p>\r\n', 0, 0),
(11, 2, 'Tu Lanh Panasonic 188 lit', 'Panasonic', '/sanpham/tlp2.jpg', 5490000, '<p><strong>C&ocirc;ng suất ti&ecirc;u thụ:</strong> 100 - 180 W.</p>\r\n\r\n<p><strong>D&ograve;ng điện:</strong> 220V/50Hz/1.5A.</p>\r\n\r\n<p><strong>Trọng lượng:</strong> 62 Kg.</p>\r\n\r\n<p><strong>K&iacute;ch thước (RxSxC):</strong> 587 x 650 x 1677 mm.</p>\r\n', 0, 0),
(12, 2, 'Tu Lanh Panasonic 546 lit', 'Panasonic', '/sanpham/tlp3.jpg', 20500000, '<p><strong>C&ocirc;ng suất ti&ecirc;u thụ:</strong> 100 - 180 W.</p>\r\n\r\n<p><strong>D&ograve;ng điện:</strong> 220V/50Hz/1.5A.</p>\r\n\r\n<p><strong>Trọng lượng:</strong> 62 Kg.</p>\r\n\r\n<p><strong>K&iacute;ch thước (RxSxC):</strong> 587 x 650 x 1677 mm.</p>\r\n', 0, 0),
(13, 2, 'Tu Lanh Samsung 203 lit', 'Samsung', '/sanpham/tlss1.jpg', 6290000, '', 0, 0),
(14, 2, 'Tu Lanh Samsung 518 lit', 'Samsung', '/sanpham/tlss2.jpg', 42990000, '', 0, 0),
(15, 2, 'Tu Lanh Toshiba 359 lit', 'Toshiba', '/sanpham/tlt1.jpg', 11490000, '', 0, 0),
(16, 2, 'Tu Lanh Toshiba 600 lit', 'Toshiba', '/sanpham/tlt2.jpg', 18900000, '<p><strong>C&ocirc;ng suất ti&ecirc;u thụ:</strong> 100 - 180 W.</p>\r\n\r\n<p><strong>D&ograve;ng điện:</strong> 220V/50Hz/1.5A.</p>\r\n\r\n<p><strong>Trọng lượng:</strong> 62 Kg.</p>\r\n\r\n<p><strong>K&iacute;ch thước (RxSxC):</strong> 587 x 650 x 1677 mm.</p>\r\n', 0, 0),
(17, 3, 'May Giat Toshiba 10kg', 'Toshiba', '/sanpham/mgt1.jpg', 6790000, '', 0, 0),
(18, 3, 'May Giat Toshiba 10,5kg', 'Toshiba', '/sanpham/mgt2.jpg', 12290000, '', 0, 0),
(19, 3, 'May Giat Toshiba 11kg', 'Toshiba', '/sanpham/mgt3.jpg', 10190000, '', 0, 0),
(20, 3, 'May Giat Samsung 8kg', 'Samsung', '/sanpham/mgss1.jpg', 4190000, '', 0, 0),
(21, 3, 'May Giat Samsung 9kg', 'Samsung', '/sanpham/mgss2.jpg', 6690000, '', 0, 0),
(22, 3, 'May Giat Samsung 10,5kg', 'Samsung', '/sanpham/mgss3.jpg', 14190000, '', 0, 0),
(23, 3, 'May Giat Samsung 16kg', 'Samsung', '/sanpham/mgss4.jpg', 15900000, '', 0, 0),
(24, 3, 'May Giat Sharp 7kg', 'Sharp', '/sanpham/mgs1.jpg', 3790000, '', 0, 0),
(25, 3, 'May Giat Sharp 10kg', 'Sharp', '/sanpham/mgs2.jpg', 6990000, '', 0, 0),
(26, 4, 'May Lanh Panasonic 1,5HP', 'Panasonic', '/sanpham/mlp1.jpg', 9990000, '', 0, 0),
(27, 4, 'May Lanh Panasonic inverter 1,5HP', 'Panasonic', '/sanpham/mlp2.jpg', 11290000, '', 0, 0),
(28, 4, 'May Lanh Samsung 1,5HP', 'Samsung', '/sanpham/mlss1.jpg', 11650000, '', 0, 0),
(29, 4, 'May Lanh Samsung 2HP', 'Samsung', '/sanpham/mlss2.jpg', 16790000, '', 0, 0),
(30, 4, 'May Lanh Toshiba 1HP', 'Toshiba', '/sanpham/mlt1.jpg', 7490000, '', 0, 0),
(31, 4, 'May Lanh Toshiba 1,5HP', 'Toshiba', '/sanpham/mlt2.jpg', 18290000, '', 0, 0),
(32, 4, 'May Lanh Toshiba 2,5HP', 'Toshiba', '/sanpham/mlt3.jpg', 19950000, '', 0, 0),
(33, 0, 'a1', '', '/nhomsp/Tittle-Microsite-Singapore.png', 0, '', 0, 0),
(34, 0, 'aa', 'aa', '/nhomsp/Tittle-Microsite-Singapore.png', 56, 'ád', 45, 45),
(35, 0, '123123', '13123', '/nhomsp/Tittle-Microsite-Singapore.png', 45, '', 234, 34);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `IdUser` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `MatKhau` varchar(50) NOT NULL,
  `Loai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`IdUser`, `Username`, `Email`, `MatKhau`, `Loai`) VALUES
(2, 'admin', 'admin', 'admin', 2),
(4, '215125125', '123123@123', '125125', 1),
(7, 'hth1831990', '123@123', '123123', 1),
(8, 'vinh', 'jinbao1994@gmail.com', '123', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`IdCart`);

--
-- Indexes for table `nhomsp`
--
ALTER TABLE `nhomsp`
  ADD PRIMARY KEY (`IdNhomSP`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`IdSP`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`IdUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `IdCart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `nhomsp`
--
ALTER TABLE `nhomsp`
  MODIFY `IdNhomSP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `IdSP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `IdUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
