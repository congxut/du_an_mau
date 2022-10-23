-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 09, 2022 lúc 05:43 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `du_an_mau_2`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `dm_id` int(11) NOT NULL,
  `dm_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`dm_id`, `dm_name`) VALUES
(1, 'Quần áo'),
(2, 'Giầy nữ'),
(3, 'Giầy thể thao');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `cmtt_id` int(11) NOT NULL,
  `sp_id` int(11) NOT NULL,
  `kh_id` int(11) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`cmtt_id`, `sp_id`, `kh_id`, `content`) VALUES
(2, 7, 17, 'Oke ngon rooi'),
(4, 2, 18, 'ccccccccccccccccccccccccc'),
(7, 1, 18, 'Oke r cháu'),
(8, 1, 18, 'ccccccccc'),
(9, 2, 18, 'Oke r nhé ae '),
(10, 2, 18, 'Good chop'),
(13, 7, 18, 'Em nóng bừng cả mặt vì ngượng nhưng đành chịu. Bác ấy đâu có nói sai. Bước xuống lòng đường, cơn gió đêm mát lạnh làm cho em tỉnh hẳn. Niềm phấn khích lúc nãy chợt tan biến và nỗi lo ập đến. Trời ơi! Biết nói với bố mẹ thế nào đây?!'),
(15, 7, 18, 'okokokok'),
(16, 7, 18, 'Ngueyenx cscscscs'),
(18, 4, 19, 'Okokoko');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order`
--

CREATE TABLE `order` (
  `hd_id` int(11) NOT NULL,
  `kh_name` varchar(255) NOT NULL,
  `kh_email` varchar(255) NOT NULL,
  `kh_phone` varchar(255) NOT NULL,
  `kh_address` varchar(255) NOT NULL,
  `kh_content` text DEFAULT NULL,
  `kh_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `order`
--

INSERT INTO `order` (`hd_id`, `kh_name`, `kh_email`, `kh_phone`, `kh_address`, `kh_content`, `kh_id`) VALUES
(22, 'Nguyễn Văn A', 'anguyen@gmail.com', '234567890 ', 'Hương sơn Hà NỘI', 'Gửi vào văn phòng cho mk', 19);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orderdetail`
--

CREATE TABLE `orderdetail` (
  `hd_ct_id` int(11) NOT NULL,
  `sp_name` varchar(255) NOT NULL,
  `sp_image` varchar(300) NOT NULL,
  `sp_price` varchar(200) NOT NULL,
  `sp_quantity` int(11) NOT NULL,
  `hd_id` int(11) NOT NULL,
  `sp_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `orderdetail`
--

INSERT INTO `orderdetail` (`hd_ct_id`, `sp_name`, `sp_image`, `sp_price`, `sp_quantity`, `hd_id`, `sp_id`) VALUES
(14, 'GIÀY ADIDAS GRAND COURT BASE NAM - TRẮNG ĐEN', 'images (7).jpg', '300000', 2, 22, 7),
(15, 'GIÀY PUMA CLUB NAM - XANH NAVY', 'b2130590d8b30584b4329cf31f85bfc0.jpg', '360000', 4, 22, 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `sp_id` int(11) NOT NULL,
  `sp_name` varchar(255) NOT NULL,
  `sp_price` varchar(200) NOT NULL,
  `sp_sale` int(200) NOT NULL DEFAULT 0,
  `sp_quantity` int(11) NOT NULL,
  `sp_description` text DEFAULT NULL,
  `kt_id` int(11) NOT NULL,
  `dm_id` int(11) NOT NULL,
  `sp_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`sp_id`, `sp_name`, `sp_price`, `sp_sale`, `sp_quantity`, `sp_description`, `kt_id`, `dm_id`, `sp_image`) VALUES
(1, 'GIÀY ADIDAS CLIMACOOL VENT NỮ - TRẮNG', '  400000', 300000, 20, 'Giày Adidas Climacool Vent là một mẫu giày thể thao với thiết kế rất đẹp và thời trang, bộ đế êm có khả năng đàn hồi cao hỗ trợ tuyệt vời trong quá trình luyện tập. Phần upper công nghệ Climacool giúp đôi giày cực thoáng khi và dễ chịu khi sử dụng.', 8, 1, '390350e48301702a01b9248f41fda0b0.jpg_720x720q80.jpg_.webp'),
(2, 'GIÀY ADIDAS BRAVADA NAM - TRẮNG ĐEN', ' 500000', 350000, 20, 'Giày adidas Bravada mẫu giày được thiết kế Basic cho các tín đồ yêu thời trang. Với các kiểu thiết kế Original này bạn sẽ không bao giờ lo lắng chuyện đôi giày của bạn bị lỗi mốt theo năm tháng.', 6, 1, 'images (1).jpg'),
(3, 'GIÀY NIKE AIR ZOOM PEGASUS 39 NỮ- XÁM', ' 500000', 450000, 20, 'Giày Nike Air Zoom Pegasus 39 là mẫu giày thể thao phiên bản thứ 39 của dòng giày huyền thoại Nike Pegasus nổi tiếng. Với những cải tiến vượt trội đặc biệt với việc gấp 2 lần lớp đệm Air Zoom so với phiên bản trước, Nike Air Zoom Pegasus 39 xứng đáng là siêu phẩm được săn đón nhất năm 2022.', 6, 3, 'images (5).jpg'),
(4, 'GIÀY PUMA CLUB NAM - XANH NAVY', '   640000', 360000, 20, 'Giày Puma Club có thết kế thời trang cổ điển đặc trưng của Puma, một mẫu giày không bao giờ lỗi mốt, trường tồn với thời gian. Chất liệu da lộn mềm đẹp kết hợp với canvas cao cấp và đế cao su bền bỉ khiến bạn không thể bỏ qua được.', 8, 3, 'b2130590d8b30584b4329cf31f85bfc0.jpg'),
(5, 'GIÀY ADIDAS BREAKNET NỮ - TRẮNG ĐEN', ' 550000', 370000, 30, 'Giày Adidas Breaknet Nữ được thiết kế basic cho các tín đồ yêu thời trang. Với các kiểu thiết kế Original này bạn sẽ không bao giờ lo lắng chuyện đôi giày của bạn bị lỗi mốt theo năm tháng.', 6, 3, 'images.jpg'),
(6, 'GIÀY NIKE REACT PEGASUS TRAIL 4 NAM - XÁM XANH', ' 500000', 350000, 20, 'Giày Nike React Pegasus Trail 4 là một trong những siêu phẩm giày trail năm 2022 với thiết kế rất thời trang. Nike React Pegasus Trail 4 giúp bạn chinh phục mọi địa hình khó khăn nhất. Đây cũng là mẫu giày đa dụng trong nhiều hoạt động hàng ngày.', 5, 2, 'images (6).jpg'),
(7, 'GIÀY ADIDAS GRAND COURT BASE NAM - TRẮNG ĐEN', ' 450000', 300000, 40, 'Giày adidas Grand Court Base được thiết kế basic cho các tín đồ yêu thời trang. Với các kiểu thiết kế Original này bạn sẽ không bao giờ lo lắng chuyện đôi giày của bạn bị lỗi mốt theo năm tháng.', 4, 3, 'images (7).jpg'),
(8, 'GIÀY NIKE AIR MAX BELLA TR 5 NỮ - ĐEN HỒNG', ' 750000', 460000, 20, 'Giày Nike Air Max Bella TR 5 là mẫu giày training với thiết kế vô cùng thời trang của Nike với sự kết hợp hài hòa giữa quá khứ và hiện đại.', 4, 3, 'images (4).jpg'),
(9, 'GIÀY NIKE GTS 97 NỮ - TRẮNG XANH', '  755000', 360000, 40, ' Giày Nike Nữ GTS 97 là mẫu giày với thiết kế cổ điển, cực kỳ đơn giản nhưng không bao giờ lỗi mốt. Bạn có thể sử dụng đôi giày này trong bất cứ hoàn cảnh nào đều rất phù hợp.', 10, 2, 'images (3).jpg'),
(10, 'GIÀY PUMA TAPER NAM - XÁM', '  640000', 300000, 40, 'Giày Puma Taper có thiết kế rất đẹp cùng với những công nghệ cao cấp của Puma. Với trọng lượng rất nhẹ và bộ đế cực kỳ êm ái Puma Taper mang đến cho người đi cảm giác rất linh hoạt và năng động.', 5, 2, 'tải xuống.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `size`
--

CREATE TABLE `size` (
  `kt_id` int(11) NOT NULL,
  `kt_name` varchar(255) NOT NULL,
  `kieu_display` int(11) NOT NULL DEFAULT 0,
  `ma_color` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `size`
--

INSERT INTO `size` (`kt_id`, `kt_name`, `kieu_display`, `ma_color`) VALUES
(4, 'Size M', 1, '#000000'),
(5, 'Size S', 1, '#000000'),
(6, 'Size L', 1, '#000000'),
(8, 'Đỏ', 2, '#fa0000'),
(9, 'Vàng', 2, '#ecc609'),
(10, 'Đen', 2, '#000000'),
(11, 'Cam ', 2, '#ef8c01');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `kh_id` int(11) NOT NULL,
  `kh_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `kh_password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `kh_email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `kh_avatar` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `role` int(11) NOT NULL DEFAULT 1,
  `kh_phone` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`kh_id`, `kh_name`, `kh_password`, `kh_email`, `kh_avatar`, `role`, `kh_phone`) VALUES
(14, 'Hoàng', '$2y$10$oEO6xJKQ0zBEFgXXhDTeIuj0UTv2UI7B9vIKAkq3fn9ebzBMIS8em', ' hoangnguyen@gmail.com', 'xiaomi-mi-smart-standing-fan-2-lite-foto_1024x1024@2x.webp ', 1, '0349791128'),
(16, 'Admin ', '$2y$10$wekdv32Md9DtMm73NZjfhepaksZmu9owfVIpH1UjsDLdsVXQsNmiu', ' admin@fpt.edu.vn', '142614275_2873802792941169_8225115999541308946_n.jpg ', 0, '234567890-'),
(17, 'okoko', '$2y$10$9PTDr.cRSDMx6sKCrsAUGOWRs/L654h6.YDuBpRM0fk1NfkmrKsDG', ' hoang123@gmail.com', 'z3752183850589_6c859cfad5d3b61f04e2f83b4eb463fe.jpg ', 0, '234567890'),
(18, 'Nguyễn Văn Toàn', '$2y$10$E7T94.w9bzIPbgvUiTbRr.iPBpeKYQFLItIgcdwUvQFonZ363O8cO', ' toannguyen123@gmail.com', 'images (6).jpg', 1, '234567890'),
(19, 'xuatnguyen', '$2y$10$YhAgj4/uutHdVWOjwN1SzeKBaI43xbYVGaS57on54SICA0V1B4G.2', ' xuatnguyen@gmail.com', '96500745e1a25e36896559385ff5521c.jpg ', 1, '234567890');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`dm_id`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`cmtt_id`),
  ADD KEY `Fk_product_id` (`sp_id`),
  ADD KEY `Fk_user_id` (`kh_id`);

--
-- Chỉ mục cho bảng `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`hd_id`),
  ADD KEY `FK_customer` (`kh_id`);

--
-- Chỉ mục cho bảng `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD PRIMARY KEY (`hd_ct_id`),
  ADD KEY `FK_product` (`sp_id`),
  ADD KEY `FK_order` (`hd_id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`sp_id`);

--
-- Chỉ mục cho bảng `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`kt_id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`kh_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `dm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `cmtt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `order`
--
ALTER TABLE `order`
  MODIFY `hd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `orderdetail`
--
ALTER TABLE `orderdetail`
  MODIFY `hd_ct_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `sp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `size`
--
ALTER TABLE `size`
  MODIFY `kt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `kh_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `Fk_product_id` FOREIGN KEY (`sp_id`) REFERENCES `product` (`sp_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Fk_user_id` FOREIGN KEY (`kh_id`) REFERENCES `user` (`kh_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `FK_customer` FOREIGN KEY (`kh_id`) REFERENCES `user` (`kh_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD CONSTRAINT `FK_order` FOREIGN KEY (`hd_id`) REFERENCES `order` (`hd_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_product` FOREIGN KEY (`sp_id`) REFERENCES `product` (`sp_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
