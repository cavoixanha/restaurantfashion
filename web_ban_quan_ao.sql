-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2014 at 06:29 PM
-- Server version: 5.5.34
-- PHP Version: 5.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `web_ban_quan_ao`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_chi_tiet_hoa_don`
--

CREATE TABLE IF NOT EXISTS `tbl_chi_tiet_hoa_don` (
  `id_hoa_don` int(11) NOT NULL,
  `id_san_pham` int(11) NOT NULL,
  `so_luong` int(11) NOT NULL,
  PRIMARY KEY (`id_hoa_don`,`id_san_pham`,`so_luong`),
  KEY `FK_id_san_pham` (`id_san_pham`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_danh_muc`
--

CREATE TABLE IF NOT EXISTS `tbl_danh_muc` (
  `id_danh_muc` int(11) NOT NULL AUTO_INCREMENT,
  `ten_danh_muc` varchar(200) NOT NULL,
  PRIMARY KEY (`id_danh_muc`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tbl_danh_muc`
--

INSERT INTO `tbl_danh_muc` (`id_danh_muc`, `ten_danh_muc`) VALUES
(1, 'Áo Nữ'),
(2, 'Váy Nữ'),
(3, 'Quần Nữ'),
(4, 'Giày'),
(5, 'Mỹ Phẩm'),
(6, 'Phụ Kiện'),
(7, 'Quần Nam'),
(8, 'Áo Nam'),
(9, 'Jumsuil'),
(10, 'Áo Khoác');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hoa_don`
--

CREATE TABLE IF NOT EXISTS `tbl_hoa_don` (
  `id_hoa_don` int(11) NOT NULL AUTO_INCREMENT,
  `id_khach_hang` int(11) NOT NULL,
  `dia_chi_giao` varchar(500) NOT NULL,
  `ngay_dat` date NOT NULL,
  `gio_dat` time NOT NULL,
  `trang_thai` bit(5) NOT NULL,
  PRIMARY KEY (`id_hoa_don`),
  UNIQUE KEY `id_hoa_don` (`id_hoa_don`),
  KEY `FK_id_khach_hang` (`id_khach_hang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_khach_hang`
--

CREATE TABLE IF NOT EXISTS `tbl_khach_hang` (
  `id_khach_hang` int(11) NOT NULL AUTO_INCREMENT,
  `ten_khach_hang` varchar(500) NOT NULL,
  `dia_chi` varchar(500) NOT NULL,
  `sdt` decimal(18,0) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` int(50) NOT NULL,
  `email` varchar(300) NOT NULL,
  PRIMARY KEY (`id_khach_hang`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_khach_hang`
--

INSERT INTO `tbl_khach_hang` (`id_khach_hang`, `ten_khach_hang`, `dia_chi`, `sdt`, `username`, `password`, `email`) VALUES
(1, 'Nguyễn Văn Nam', '134/130', '123456789', 'admin', 123456, 'kiemsi789@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nhom_sp`
--

CREATE TABLE IF NOT EXISTS `tbl_nhom_sp` (
  `id_nhom_sp` int(11) NOT NULL AUTO_INCREMENT,
  `ten_nhom_sp` varchar(300) NOT NULL,
  `id_danh_muc` int(11) NOT NULL,
  `anh_dai_dien` varchar(500) NOT NULL,
  PRIMARY KEY (`id_nhom_sp`),
  KEY `FK_id_danh_muc` (`id_danh_muc`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `tbl_nhom_sp`
--

INSERT INTO `tbl_nhom_sp` (`id_nhom_sp`, `ten_nhom_sp`, `id_danh_muc`, `anh_dai_dien`) VALUES
(8, 'Áo Thun Nữ', 1, 'images/shopmeo/hinhmau/hm4.jpg'),
(9, 'Áo Sơ-Mi Nữ', 1, 'images/shopmeo/hinhmau/hm14.jpg'),
(10, 'Váy đầm dự tiệc', 2, 'images/shopmeo/hinhmau/hm12.jpg'),
(11, 'jumsuil', 9, 'images/shopmeo/hinhmau/hm9.jpg'),
(12, 'Quần Jean Dài', 3, 'images/shopmeo/hinhmau/hm12.jpg'),
(13, 'Quần Jean Ngắn', 3, 'images/shopmeo/hinhmau/hm6.jpg'),
(14, 'Đồng Hồ', 6, 'images/shopmeo/dongho/dh8.jpg'),
(15, 'Giỏ Sách', 6, 'images/shopmeo/giay/g3.jpg'),
(16, 'Ví', 6, 'images/shopmeo/giay/g3.jpg'),
(17, 'Sandal', 4, 'images/shopmeo/giay/g3.jpg'),
(18, 'Quần Nữ', 3, 'images/shopmeo/hinhmau/g3.jpg'),
(19, 'Quần Nam', 7, 'images/shopmeo/hinhmau/g3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_san_pham`
--

CREATE TABLE IF NOT EXISTS `tbl_san_pham` (
  `id_san_pham` int(11) NOT NULL AUTO_INCREMENT,
  `ten_san_pham` varchar(300) NOT NULL,
  `id_nhom_sp` int(11) NOT NULL,
  `size` varchar(100) NOT NULL,
  `gioi_tinh` tinyint(1) NOT NULL,
  `gia` decimal(10,0) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `phan_tram_sale` int(11) NOT NULL,
  `tieu_de` varchar(500) NOT NULL,
  `anh_dai_dien` varchar(500) NOT NULL,
  `noi_dung` text NOT NULL,
  `ngay_nhap` datetime NOT NULL,
  PRIMARY KEY (`id_san_pham`),
  UNIQUE KEY `id_san_pham` (`id_san_pham`),
  KEY `FK_id_nhom_sp` (`id_nhom_sp`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `tbl_san_pham`
--

INSERT INTO `tbl_san_pham` (`id_san_pham`, `ten_san_pham`, `id_nhom_sp`, `size`, `gioi_tinh`, `gia`, `so_luong`, `phan_tram_sale`, `tieu_de`, `anh_dai_dien`, `noi_dung`, `ngay_nhap`) VALUES
(1, 'Váy Bông Trắng', 10, 'M', 0, '200000', 100, 0, 'Váy Bông Hồng', 'images/shopmeo/hinhmau/hm12.jpg', 'Mô Tả Váy', '2014-08-04 10:00:00'),
(2, 'Quần', 18, 'M', 0, '200000', 100, 0, 'Quần Đẹp', 'images/shopmeo/hinhmau/hm17.jpg', 'Mô Tả Quần', '2014-08-04 11:00:00'),
(3, 'Áo Nữ', 9, 'M', 0, '200000', 100, 0, 'Áo Nữ', 'images/shopmeo/hinhmau/hm16.jpg', 'Mô Tả Áo Nữ', '2014-08-04 12:00:00'),
(4, 'Váy Trắng', 10, 'M', 0, '200000', 100, 0, 'Váy Trắng', 'images/shopmeo/hinhmau/hm15.jpg', 'Mô Tả Váy Trắng', '2014-08-04 13:00:00'),
(5, 'Váy Đẹp', 10, 'M', 0, '200000', 100, 0, 'Váy Đẹp', 'images/shopmeo/hinhmau/hm13.jpg', 'Mô Tả Váy', '2014-08-04 14:00:00'),
(6, 'Váy Bông Hồng', 10, 'M', 0, '200000', 100, 10, 'Váy Đẹp', 'images/shopmeo/hinhmau/hm10.jpg', 'Mô Tả Váy', '2014-08-04 15:00:00'),
(7, 'Áo Thun Xám', 8, 'M, L', 0, '150000', 14, 15, 'Áo Thun Xám', 'images/shopmeo/aothun/aothun1.jpg', 'Áo Thun Xám', '2014-08-11 15:00:00'),
(8, 'Áo Thun Hồng Nhạt', 8, 'M, L', 0, '12000', 150, 0, 'Áo Thun Hồng Nhạt', 'images/shopmeo/aothun/aothun2.jpg', 'Áo Thun Hồng Nhạt', '2014-08-11 17:00:00'),
(9, 'Áo Thun Xám Chấm', 8, 'M, L', 0, '150000', 14, 15, 'Áo Thun Xám', 'images/shopmeo/aothun/aothun3.jpg', 'Áo Thun Xám Chấm', '2014-08-11 17:00:00'),
(10, 'Áo Thun Trắng Cổ Viền', 8, 'M, L', 0, '150000', 14, 15, 'Áo Thun Trắng Cổ Viền', 'images/shopmeo/aothun/aothun4.jpg', 'Áo Thun Trắng Cổ Viền', '2014-08-11 16:00:00'),
(11, 'Áo Thun Xanh Nhạt', 8, 'M, L', 0, '150000', 14, 15, 'Áo Thun Xanh Nhạt', 'images/shopmeo/aothun/aothun5.jpg', 'Áo Thun Xanh Nhạt', '2014-08-11 16:00:00'),
(12, 'Áo Thun Xanh Đậm', 8, 'M, L', 0, '150000', 14, 15, 'Áo Thun Xanh Đậm', 'images/shopmeo/aothun/aothun6.jpg', 'Áo Thun Xanh Đậm', '2014-08-11 18:00:00'),
(13, 'Áo Thun Cam', 8, 'M, L', 0, '150000', 14, 0, 'Áo Thun Cam', 'images/shopmeo/aothun/aothun7.jpg', 'Áo Thun Cam', '2014-08-11 18:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tin_tuc`
--

CREATE TABLE IF NOT EXISTS `tbl_tin_tuc` (
  `id_tin_tuc` int(11) NOT NULL AUTO_INCREMENT,
  `tieu_de` varchar(500) NOT NULL,
  `anh_minh_hoa` varchar(500) NOT NULL,
  `noi_dung` text NOT NULL,
  `ngay_dang` datetime NOT NULL,
  PRIMARY KEY (`id_tin_tuc`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_tin_tuc`
--

INSERT INTO `tbl_tin_tuc` (`id_tin_tuc`, `tieu_de`, `anh_minh_hoa`, `noi_dung`, `ngay_dang`) VALUES
(1, 'Lịch lãm phong cách thời trang nam trong mùa mưa', 'images/tintuc/style-rain-150x150.jpg', '<p>Mùa mưa không nằm trong các xu hướng catwalk tại các show thời trang lớn trong năm nhưng xu hướng thời trang mùa mưa đang ngày các được quan tâm, bởi cuộc sống ngày càng hối hả và chúng ta sẽ không trốn tránh lười biếng mãi ở nhà để phòng trừ những cơn mưa cho đến hết mùa. Mọi người đều có nhu cầu đi học, đi làm và vui chơi giải trí hằng ngày, vì thế, để giữ được niềm vui và sự hứng khởi trong cuộc sống, chỉ cần một chút tinh tế các chàng trai có thể lựa chọn cho mình những trang phục phù hợp và không quản ngại những vạt mưa thấm ướt.</p>', '2014-08-09 10:00:00'),
(2, 'Giày nhựa sành điệu cho mùa mưa ', 'images/tintuc/1.png', '<p style="text-align: justify;">Ngoài ra, trong thế giới thời trang nam khiêm tốn, bạn vẫn còn rất nhiều sự lựa chọn để “diện” đồ thật thoải mái và cá tính, thể hiện phong cách trẻ năng động và không quản ngại mưa gió “ngáng chân cảng đường”. Các bạn nam của chúng ta có thể lựa chọn những loại trang phục với kiểu dáng, chất liệu rất “hợp mùa” và tiện dụng như quần kaki, quần linen, quần thun thể thao hay quần sooc kaki, đây là các lựa chọn thay thế cho jean, đem lại cảm giác nhẹ nhàng và thoải mái trong mùa mưa ẩm ướt.</p>', '2014-08-09 11:00:00'),
(3, '"Cơn lốc" săn hàng hiệu bình dân giảm giá', 'images/newsimg1.jpg', '<p>Từ nhiều năm nay, các tín đồ thời trang Việt đã dần quen thuộc với các thương hiệu thời trang quốc tế, đặc biệt là những thương hiệu bình dân có tính ứng dụng cao như Zara, H&M, Top shop... Tuy vậy, với đại đa số chị em thì mức giá được cho là bình dân của nước ngoài vẫn còn khá cao. Hơn nữa, để mua được hàng chính hãng lại khá mất công. Nếu không thể trực tiếp ra nước ngoài mua đồ, phần lớn chị em chọn cách nhờ mua qua người thân xách tay về, hoặc đặt hàng\r\n qua các cửa hàng nhận đặt và chuyển phát nhanh... Những cách như vậy còn nhiều hạn chế vì sẽ đội chi phí lên cao và khá mất công chọn, đặt. Việc đặt hàng này chỉ thực sự nở rộ khi tới những kỳ giảm giá lớn mà các hãng tung ra hàng năm.</p>', '2014-08-12 00:00:00'),
(4, 'Mẫu sinh đôi "gây bão" khi rủ casting thời trang', 'images/newsimg2.jpg', '<p>Không giống bất kỳ buổi casting người mẫu nào khác từng diễn ra\r\n					trong làng thời trang Việt trước đây, buổi casting mẫu cho show\r\n					thời trang Thu/Đông của NTK Đỗ Mạnh Cường diễn ra vào sáng qua\r\n					(22/6) thu hút sự chú ý khi bất ngờ xuất hiện hằng trăm cặp sinh\r\n					đôi, thậm chí còn có những trường hợp sinh ba đến tìm hiếm cơ hội\r\n					làm mẫu..</p>\r\n				<p>\r\n					Tất cả những cặp song sinh, sinh ba được lựa chọn sẽ được lấy số đo\r\n					và thiết kế riêng để phù hợp với vóc dáng của từng người. Đó cũng\r\n					chính là lý do vì sao mà buổi casting được diển ra khá sớm trước 5\r\n					tháng để có sự chuần bị kỹ lưỡng.<a href="#" title="more">[....]</a>\r\n				</p>', '2014-08-12 09:00:00'),
(5, 'Sự âm thầm trở lại của thân hình siêu mỏng', 'images/newsimg3.jpg', '<p>Thân hình size 0 đã trở thành một trào lưu phổ biến trong nhiều\r\n					năm về trước. Những người mẫu khẳng khiu trên sàn catwalk, những\r\n					ngôi sao ép cân để diện trang phục khi ra phố... tất cả đã tạo nên\r\n					"cơn sốt" giữ vóc dáng siêu mỏng với phụ nữ khắp thế giới. Nhưng\r\n					cũng như sự tuần hoàn của thời trang, trào lưu mình dây đã rơi vào\r\n					thoái trào, nhường ngôi cho những thân hình nóng bỏng, đầy đặn hơn.\r\n					Các ngôi sao có thân hình đồng hồ cát như Jennifer Lopez, Rihanna,\r\n					Christina Aguilera,...</p>\r\n				<p>\r\n					Điều gì đang xảy ra trên phố? Đối với những cô gái trẻ, những người\r\n					luôn rất nhạy cảm với thời trang và mọi xu hướng, điều tương tự\r\n					dường như đang xảy ra, không ít trong số họ cũng tôn sùng kiểu mình\r\n					dây từ các ngôi sao Hollywood.<a href="#" title="more">[....]</a>\r\n				</p>', '2014-08-12 09:00:00');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_chi_tiet_hoa_don`
--
ALTER TABLE `tbl_chi_tiet_hoa_don`
  ADD CONSTRAINT `FK_id_hoa_don` FOREIGN KEY (`id_hoa_don`) REFERENCES `tbl_hoa_don` (`id_hoa_don`),
  ADD CONSTRAINT `FK_id_san_pham` FOREIGN KEY (`id_san_pham`) REFERENCES `tbl_san_pham` (`id_san_pham`);

--
-- Constraints for table `tbl_hoa_don`
--
ALTER TABLE `tbl_hoa_don`
  ADD CONSTRAINT `FK_id_khach_hang` FOREIGN KEY (`id_khach_hang`) REFERENCES `tbl_khach_hang` (`id_khach_hang`);

--
-- Constraints for table `tbl_nhom_sp`
--
ALTER TABLE `tbl_nhom_sp`
  ADD CONSTRAINT `FK_id_danh_muc` FOREIGN KEY (`id_danh_muc`) REFERENCES `tbl_danh_muc` (`id_danh_muc`);

--
-- Constraints for table `tbl_san_pham`
--
ALTER TABLE `tbl_san_pham`
  ADD CONSTRAINT `FK_id_nhom_sp` FOREIGN KEY (`id_nhom_sp`) REFERENCES `tbl_nhom_sp` (`id_nhom_sp`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
