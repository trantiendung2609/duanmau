-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2022 at 07:25 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `binh_luan`
--

CREATE TABLE `binh_luan` (
  `ma_bl` int(11) NOT NULL,
  `ma_kh` int(20) NOT NULL,
  `ma_hh` int(11) NOT NULL,
  `noi_dung` varchar(100) COLLATE utf8_bin NOT NULL,
  `ngay_bl` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `binh_luan`
--

INSERT INTO `binh_luan` (`ma_bl`, `ma_kh`, `ma_hh`, `noi_dung`, `ngay_bl`) VALUES
(38, 65, 1123, 'đucợ', '2022-10-16 00:00:00'),
(40, 65, 1129, 'không nét lắm', '2022-10-16 00:00:00'),
(41, 65, 1129, 'nói chung k đáng tiền', '2022-10-16 00:00:00'),
(42, 65, 1129, 'chất lượng 480p', '2022-10-16 00:00:00'),
(46, 65, 1129, 'đc', '2022-10-16 00:00:00'),
(48, 65, 1129, 'đẹpk', '2022-10-16 00:00:00'),
(59, 65, 1128, 'nghe hay', '2022-10-16 00:00:00'),
(60, 65, 1123, 'gõ thích', '2022-10-16 00:00:00'),
(61, 65, 1132, 'đúng đồ apple', '2022-10-16 00:00:00'),
(62, 66, 1128, 'ok không bạn', '2022-10-16 00:00:00'),
(63, 65, 1128, 'nghe hay trong tầm giá', '2022-10-16 00:00:00'),
(64, 66, 1128, 'đc', '2022-10-16 00:00:00'),
(65, 65, 1128, 'mua đi', '2022-10-16 00:00:00'),
(66, 65, 1128, 'tôi muốn mua', '2022-10-16 00:00:00'),
(67, 66, 1128, 'mua đi', '2022-10-16 00:00:00'),
(68, 66, 1128, 'dsfdf', '2022-10-16 00:00:00'),
(69, 66, 1124, 'muốn mua', '2022-10-16 00:00:00'),
(70, 65, 1124, 'thế mua k bán cho', '2022-10-16 00:00:00'),
(84, 65, 1131, 'thiết kế đẹp', '2022-10-21 09:43:07'),
(85, 72, 1131, 'quá đẹp luôn', '2022-10-21 09:43:45'),
(87, 65, 1123, 'asdjkhfd\\', '2022-10-21 10:25:07');

-- --------------------------------------------------------

--
-- Table structure for table `hang_hoa`
--

CREATE TABLE `hang_hoa` (
  `ma_hh` int(11) NOT NULL,
  `ten_hh` varchar(60) COLLATE utf8_bin NOT NULL,
  `don_gia` float NOT NULL,
  `giam_gia` float NOT NULL,
  `hinh` varchar(500) COLLATE utf8_bin NOT NULL,
  `ma_loai` int(11) NOT NULL,
  `dac_biet` int(1) NOT NULL,
  `so_luot_xem` int(11) NOT NULL,
  `ngay_nhap` date NOT NULL,
  `mo_ta` varchar(2000) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `hang_hoa`
--

INSERT INTO `hang_hoa` (`ma_hh`, `ten_hh`, `don_gia`, `giam_gia`, `hinh`, `ma_loai`, `dac_biet`, `so_luot_xem`, `ngay_nhap`, `mo_ta`) VALUES
(1123, 'Bàn phím Bluetooth Logitech K580', 89900, 30, '3.2.jpg', 1020, 0, 31, '2022-10-13', 'Bàn phím Bluetooth Logitech K580 hiện đại, tối ưu hoá không gian\r\nBàn phím không dây là sản phẩm của công nghệ hiện đại ngày nay giúp mang đến tính thẩm mĩ, sự thuận tiện tối đa cho người dùng. Một trong những thiết kế mà bạn không nên bỏ qua đó chính là bàn phím bluetooth Logitech K580.'),
(1124, 'Samsung Galaxy Watch5', 40000, 0, 'watch-lte-44_1.jpg', 1000, 0, 28, '2022-10-13', 'Samsung Galaxy Watch 5 – Trải nghiệm tuyệt vời từ thiết kế đến tính năng\r\nĐồng hồ Galaxy Watch5 là thế hệ đồng hồ đeo tay thông minh tiếp theo được Samsung ra mắt trong năm nay. Với thiết kế đột phá cùng các công nghệ mới nhất thì đây là lựa chọn tuyệt vời cho những ai yêu thích sự trẻ trung và sang trọng.'),
(1128, 'Tai nghe chụp tai Rapoo H100', 10000, 20, 'tai-nghe-chup-tai-rapoo-h1000-1.jpg', 1021, 1, 41, '2022-10-14', 'Tai nghe chụp tai Rapoo H100 - âm thanh chất lượng cao\r\nTai nghe chụp tai Rapoo H100 được thiết kế theo hướng gaming nhưng lại mang đến kích thước gọn nhẹ tối ưu cho cảm giác êm tai và phù hợp với mọi đối tượng. Hãy cùng ghé đến CellphoneS để trải nghiệm rõ hơn nhé!'),
(1129, 'Camera IP Wifi Ezviz BC1C', 40000, 20, '37_2_6.jpg', 1002, 0, 6, '2022-10-13', 'Camera IP Wifi Ezviz BC1C - Thời lượng pin ấn tượng, đạt chuẩn IP66\r\nCách hoạt động của camera IP Wifi Ezviz BC1C khác biệt hoàn toàn so với những sản phẩm khác, bởi có chức năng sạc bằng tấm năng lượng mặt trời. Nghe qua công nghệ này đã cảm thấy thú vị rồi, hãy cùng tìm hiểu rõ hơn về thiết bị camera an ninh Ezviz phía bên dưới mô tả này nhé.\r\n'),
(1131, 'HP Palivion 15', 230000, 10, 'download.png', 1001, 0, 16, '2022-10-13', 'Thiết kế di động, mỏng nhẹ\r\nHP Pavilion 15 sở hữu một thiết kế sang trọng với các đường nét mạnh mẽ, nắp lưng và chiếu nghỉ tay bằng kim loại mang lại cho chiếc laptop vẻ ngoài cao cấp. Với chất liệu kim loại giúp máy ít bám vân tay và bụi bẩn mang lại cảm giác cầm nắm mát tay.\r\nBản lề của máy được thiết kế để khi mở máy sẽ tự nâng lên một góc khoảng 2 độ, cho hiệu quả tản nhiệt tốt. Trọng lượng chỉ 1,85 kg phù hợp với người dùng cần di chuyển thường xuyên như học sinh, dân văn phòng.'),
(1132, 'Apple Macbook Air M2 2022 8GB 256GB I Chính hãng Apple Việt ', 4000000, 0, 'macbook_air_m2_2_1.jpg', 1001, 0, 10, '2022-10-13', 'Macbook Air 2022 - Vi xử lý Apple M2 mạnh mẽ\r\nSau thành công của dòng Macbook M1 thì Apple lại chuẩn bị mang đến cho người dùng dòng sản phẩm Macbook Air 2022 với những điểm nâng cấp đáng chú ý. Bên cạnh đó mức giá thành lại thấp hơn so với hiện tại, chắc chắn rằng các iFan đang rất nóng lòng chờ đón sự xuất hiện của dòng sản phẩm mới này.'),
(1138, 'Bàn phím cơ không dây iQunix L80 Formular RGB', 43999, 2, '65951_ban_phim_co_khong_day_iqunix_l80_formular_rgb_1.jpg', 1020, 0, 12, '2022-10-17', 'Thiết kế ấn tượng với bộ keycap Formular\r\nLayout 80% tiện lợi\r\nSwitch Cherry MX\r\nHỗ trợ Hotswap\r\nKết nối: Bluetooth, Wireless 2.4GHz, Dây type C\r\nThời lượng pin 4000mAh ấn tượng'),
(1140, 'Tai nghe chụp tai Soundpeats A6 chống ồn', 80000, 12, 'tai-nghe-chup-tai-soundpeats-a6-chong-on.jpg', 1021, 0, 0, '2022-10-17', 'Tai nghe Soundpeats A6 chống ồn -  Đêm tai êm ái, băng đeo công thái học\r\nVì lý do nào đó, các game thủ hay người dùng PC chỉ luôn tin dùng tai nghe chụp tai. Nhưng để chọn ra một chiếc tai nghe chụp tai có hỗ trợ khả năng chống ồn thì tai nghe chụp tai Soundpeats A6 chống ồn là lựa chọn xứng đáng hơn cả.'),
(1142, 'Laptop Acer Gaming Nitro 5 Eagle ', 98765, 12, '250_60790_nitrophim.png', 1001, 0, 0, '2022-10-17', 'CPU: Intel core i5 11400H\r\nRAM: 8GB\r\nỔ cứng: 512GB SSD\r\nVGA: NVIDIA RTX3050 4G\r\nMàn hình: 15.6 inch FHD 144Hz\r\nBàn phím: có led'),
(1143, 'Đồng hồ thông minh Huawei Watch GT3 dây da', 23423, 0, 'watch_3_leather.jpg', 1000, 0, 1, '2022-10-17', 'Đồng hồ Huawei Watch GT3 46mm chất lượng, đẳng cấp\r\nBên cạnh những dòng điện thoại thông minh thì Huawei lại tiếp tục cho ra mắt mẫu đồng hồ Huawei Watch GT3 46mm. Sản phẩm được kế thừa thiết kế dạng thể thao của các phiên bản trước, bên cạnh đó là mặt đồng hồ dạng tròn và khung viền kim loại sang trọng. Chắc chắn sẽ mang đến đẳng cấp cho người sử dụng.'),
(1144, 'Laptop Dell Inspiron 15 3511 P112F001FBL', 1234230, 12, '19_2_112.jpg', 1001, 0, 0, '2022-10-17', 'Laptop Dell Inspiron 15 3511 P112F001FBL - Hiệu năng mạnh mẽ\r\nLaptop Dell Inspiron 15 3511 P112F001FBL có thiết kế hiện đại và cấu hình mạnh mẽ. Chiếc laptop Dell Inspiron này là lựa chọn tối ưu cho học sinh, sinh viên bởi hiệu năng tốt giúp bạn hoàn thành công việc nhanh chóng.'),
(1145, 'Máy ảnh Oaxis myFirst Camera Insta 2', 12321, 0, '20_2_11.jpg', 1002, 0, 0, '2022-10-17', 'Máy ảnh Oaxis Myfirst camera Insta 2 chụp ảnh lấy ngay\r\nMáy ảnh Oaxis Myfirst camera Insta 2 là chiếc máy ảnh siêu cute, dành cho các bé tập tành chụp ảnh có thể lấy ảnh ngay tức thì. Với tính năng in nhiệt, Oaxis Myfirst camera Insta 2 tạo ra những bức ảnh thú vị rõ nét và vô cùng chân thật không cần đợi khô. Cùng tìm hiểu kỹ hơn những tính năng của phụ kiện cho bé kỳ diệu này nhé!'),
(1146, 'Máy ảnh Oaxis myFirst Camera 3', 123123, 0, '9_9_22.jpg', 1002, 0, 0, '2022-10-17', 'Máy ảnh Oaxis myFirst Camera 3 – Bắt trọn từng khoảnh khắc\r\nMáy ảnh Oaxis myFirst Camera 3 sẽ giúp con bạn nhận ra được nhiều vẻ đẹp muôn màu của cuộc sống thông qua đôi mắt trẻ con. Máy sở hữu thiết kế nhỏ gọn, thẻ nhớ lên đến 32GB cùng độ phân giải cao, hứa hẹn sẽ không khiến các bậc phụ huynh thất vọng khi dành cho con.'),
(1148, 'Tai nghe trẻ em Oaxis myFirst Headphones Bone Conductor Wire', 43424, 12, '28_1_15.jpg', 1021, 0, 0, '2022-10-17', 'Thiết kế siêu nhỏ gọn, thân thiện với trẻ em\r\nPhụ kiện cho bé này chỉ nặng 26 gram, mang đến thiết kế khá nhỏ gọn, có thể lưu trữ ở bất cứ đâu và bất cứ lúc nào. Thêm vào đó các điểm tiếp xúc làm bằng cao su mềm mại trên tai nghe, mang đến cảm giác thoải mái ngay cả khi sử dụng thời gian dài.'),
(1149, 'Laptop gaming MSI GF63 Thin 11SC 664VN', 45645, 43, 'text_ng_n_21_.png', 1001, 0, 0, '2022-10-17', 'Laptop MSI Gaming GF63 Thin 11SC-664VN - dòng laptop Gaming với thiết kế mỏng nhẹ\r\nLaptop MSI Gaming GF63 Thin 11SC-664VN là sản phẩm thuộc phân khúc giá tầm trung, phù hợp với những game thủ. Đây là dòng laptop có vẻ ngoài nhỏ gọn nhưng vẫn mang đậm phong cách gaming.'),
(1150, 'Vòng đeo tay thông minh Huawei Band 7', 11231, 5, 'en_leia_id_png_800_30.jpg', 1000, 0, 0, '2022-10-17', 'Vòng đeo tay thông minh Huawei band 7 – Thiết kế nhỏ gọn, tiện lợi\r\nVòng đeo tay Huawei Band 7 không chỉ mang tính thẩm mỹ cao mà còn giúp nâng cao sức khỏe người dùng qua các bài tập. Hãy xem một số điểm chú ý khiến bạn muốn mua ngay một chiếc về'),
(1151, 'Đồng hồ thông minh Huami Amazfit Bip U Pro', 35223, 5, '4_35_1.jpg', 1000, 0, 0, '2022-10-17', 'Đồng hồ Huami Amazfit Bip U Pro – Thiết kế hiện đại, đo sức khỏe hiệu quả\r\nAmazfit Bip U Pro là chiếc đồng hồ thông minh nâng cấp của phiên bản cũ, vốn đã nhận được nhiều lời khen. Thiết bị vẫn có kiểu dáng tương tự có là hơi hướng hiện đại nhưng theo trường phái tối giản. Đồng thời được tích hợp đầy đủ công cụ đo sức khỏe tiện lợi.'),
(1154, 'iphone 13', 123123, 0, '3_51_1_7.jpg', 1026, 0, 0, '2022-10-17', 'iPhone 13 Pro Max chắc chắn sẽ là chiếc smartphone cao cấp được quan tâm nhiều nhất trong năm 2021. Dòng iPhone 13 series được ra mắt vào ngày 14 tháng 9 năm 2021 tại sự kiện \"California Streaming\" diễn ra trực tuyến tương tự năm ngoái cùng với 3 phiên bản khác là iPhone 13, 13 mini và 13 Pro. Vậy điện thoại 13 Pro Max giá bao nhiêu? Có gì nổi bật? Cùng tìm hiểu ngay nhé!'),
(1155, 'iphone 14', 23452300, 0, '637985700630020572_ip-14-pro-max-vang.webp', 1026, 0, 0, '2022-10-17', 'iPhone 14 Pro Max là mẫu flagship nổi bật nhất của Apple trong lần trở lại năm 2022 với nhiều cải tiến về công nghệ cũng như vẻ ngoài cao cấp, sang chảnh hợp với gu thẩm mỹ đại chúng. Những chiếc điện thoại đến từ nhà Táo Khuyết nhận được rất nhiều sự kỳ vọng của thị trường ngay từ khi chưa ra mắt. Vậy liệu những chiếc flagship đến từ công ty công nghệ hàng đầu thế giới này có làm bạn thất vọng? Cùng khám phá những điều thú vị về iPhone 14 Pro Max ở bài viết dưới đây nhé.'),
(1156, 'Xiaomi Redmi Note 11 Pro Plus 5G', 213423, 12, '11-pro-plus-blue.jpg', 1026, 0, 7, '2022-10-17', 'Xiaomi Redmi Note 11 Pro Plus – Cấu hình mạnh mẽ, camera ấn tượng\r\nRedmi Note 11 Pro Plus chính là mẫu smartphone tầm trung tiếp theo được Xiaomi cho ra mắt với giá hấp dẫn cùng với thiết kế mới tinh tế, cấu hình mạnh mẽ và cụm camera chất lượng cao cho trải nghiệm nhiếp ảnh đầy hứa hẹn.\r\n\r\nThiết kế phẳng, vuông vắn hơn với cụm camera tinh tế, nhiều màu sắc độc đáo');

-- --------------------------------------------------------

--
-- Table structure for table `khach_hang`
--

CREATE TABLE `khach_hang` (
  `ma_kh` int(20) NOT NULL,
  `mat_khau` varchar(50) COLLATE utf8_bin NOT NULL,
  `ho_ten` varchar(50) COLLATE utf8_bin NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  `hinh` varchar(50) COLLATE utf8_bin NOT NULL,
  `kich_hoat` int(1) DEFAULT NULL,
  `vai_tro` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `khach_hang`
--

INSERT INTO `khach_hang` (`ma_kh`, `mat_khau`, `ho_ten`, `email`, `hinh`, `kich_hoat`, `vai_tro`) VALUES
(1, '08112002', 'NGUYỄN THANH TÙNG', 'thanhtungx0811@gmail.com', 'admin.png', 1, 1),
(65, '234', 'thành công', 'thanhcong@gmail.com', 'daidien2.jpg', 1, 0),
(66, '123', 'minh tuyển', 'minhtuyen@gmail.com', 'daidien1.jpg', 1, 0),
(72, 'ádasd', 'sdfdf', 'thaphuongcauthuc2005@yahoo.com.vn', 'oppo-reno-8-pro-render_1280x720-800-resize.jpg', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `loai`
--

CREATE TABLE `loai` (
  `ma_loai` int(11) NOT NULL,
  `ten_loai` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `loai`
--

INSERT INTO `loai` (`ma_loai`, `ten_loai`) VALUES
(1000, 'Đồng hồ đeo tay'),
(1001, 'Máy tính xách tay'),
(1002, 'Máy ảnh'),
(1020, 'Bàn phím'),
(1021, 'Tai nghe'),
(1026, 'Điện thoại');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`ma_bl`),
  ADD KEY `FK_HangHoa_BinhLuan` (`ma_hh`),
  ADD KEY `FK_KhachHang_BinhLuan` (`ma_kh`);

--
-- Indexes for table `hang_hoa`
--
ALTER TABLE `hang_hoa`
  ADD PRIMARY KEY (`ma_hh`),
  ADD KEY `FK_Loai_HangHoa` (`ma_loai`);

--
-- Indexes for table `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`ma_kh`);

--
-- Indexes for table `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`ma_loai`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `ma_bl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `hang_hoa`
--
ALTER TABLE `hang_hoa`
  MODIFY `ma_hh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1157;

--
-- AUTO_INCREMENT for table `khach_hang`
--
ALTER TABLE `khach_hang`
  MODIFY `ma_kh` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `loai`
--
ALTER TABLE `loai`
  MODIFY `ma_loai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1028;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD CONSTRAINT `FK_HangHoa_BinhLuan` FOREIGN KEY (`ma_hh`) REFERENCES `hang_hoa` (`ma_hh`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_KhachHang_BinhLuan` FOREIGN KEY (`ma_kh`) REFERENCES `khach_hang` (`ma_kh`);

--
-- Constraints for table `hang_hoa`
--
ALTER TABLE `hang_hoa`
  ADD CONSTRAINT `FK_Loai_HangHoa` FOREIGN KEY (`ma_loai`) REFERENCES `loai` (`ma_loai`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
