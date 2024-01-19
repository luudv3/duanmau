-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 17, 2023 lúc 12:06 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duanmau`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `id` int(11) NOT NULL,
  `bill_name` varchar(255) NOT NULL,
  `bill_address` varchar(255) NOT NULL,
  `bill_tel` varchar(50) NOT NULL,
  `bill_email` varchar(100) NOT NULL,
  `bill_pttt` tinyint(4) NOT NULL,
  `ngaydathang` varchar(50) NOT NULL,
  `total` int(11) NOT NULL,
  `bill_status` tinyint(4) NOT NULL,
  `receive_name` varchar(255) NOT NULL,
  `receive_address` varchar(255) NOT NULL,
  `receive_tel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`id`, `bill_name`, `bill_address`, `bill_tel`, `bill_email`, `bill_pttt`, `ngaydathang`, `total`, `bill_status`, `receive_name`, `receive_address`, `receive_tel`) VALUES
(11, 'anh tung', ' Hùng Cường', '0866882222', ' thanhtung@gmail.com', 0, ' 03:38:01pm 10/30/2023', 30000, 0, '', '', ''),
(12, 'tung', ' phú diễn', '0866882222', ' thanhtung@gmail.com', 0, ' 09:26:04am 10/31/2023', 32000, 0, '', '', ''),
(15, 'Duong', ' phú diễn', '0866882222', ' thanhtung@gmail.com', 0, ' 09:34:24am 10/31/2023', 50000, 0, '', '', ''),
(16, 'toan', ' phú diễn', '00', ' toantqph38960@fpt.edu.vn', 0, ' 01:44:44pm 11/01/2023', 50000, 0, '', '', ''),
(17, 'tung', ' phú diễn', '0866882222', ' thanhtung@gmail.com', 0, ' 02:05:17pm 11/03/2023', 32000, 0, '', '', ''),
(18, 'toan', ' đan phuong', '0866882222', ' toan@gmail.com', 0, ' 12:03:53pm 11/17/2023', 32000, 0, '', '', ''),
(19, 'toan', ' đan phuong', '0866882222', ' toan@gmail.com', 0, ' 12:04:17pm 11/17/2023', 82000, 0, '', '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(10) NOT NULL,
  `noidung` varchar(255) NOT NULL,
  `iduser` int(10) NOT NULL,
  `idpro` int(10) NOT NULL,
  `ngaybinhluan` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`id`, `noidung`, `iduser`, `idpro`, `ngaybinhluan`) VALUES
(25, '1', 4, 5, '0000-00-00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `idpro` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `thanhtien` int(11) NOT NULL,
  `idbill` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id`, `iduser`, `idpro`, `img`, `name`, `price`, `soluong`, `thanhtien`, `idbill`) VALUES
(18, 4, 14, ' avt.jpg', 'Anh Tùng', 30000, 1, 30000, 11),
(19, 4, 16, ' iPhone 14 Pro Max.jpg', 'Iphone 15 promax', 32000, 1, 32000, 12),
(22, 4, 17, ' sp3.jpg', 'Đồng hồ thông minh', 50000, 1, 50000, 15),
(23, 9, 15, ' Samsung Galaxy S23 Ultra.jpg', 'Samsung Galaxy S23 Ultra', 50000, 1, 50000, 16),
(24, 4, 16, ' iPhone 14 Pro Max.jpg', 'Iphone 15 promax', 32000, 1, 32000, 17),
(25, 4, 16, ' iPhone 14 Pro Max.jpg', 'Iphone 15 promax', 32000, 1, 32000, 18),
(26, 4, 16, ' iPhone 14 Pro Max.jpg', 'Iphone 15 promax', 32000, 1, 32000, 19),
(27, 4, 15, ' Samsung Galaxy S23 Ultra.jpg', 'Samsung Galaxy S23 Ultra', 50000, 1, 50000, 19);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `name`) VALUES
(1, 'Laptop'),
(2, 'Điện Thoại'),
(22, 'Đồng hồ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL DEFAULT 0.00,
  `img` varchar(255) NOT NULL,
  `mota` text NOT NULL,
  `luotxem` int(11) NOT NULL DEFAULT 0,
  `iddm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `price`, `img`, `mota`, `luotxem`, `iddm`) VALUES
(3, 'Laptop Asus VivoBook Go 14', 180000.00, 'download (5).jpg', '', 9, 1),
(5, 'Laptop Lenovo Ideapad 5 Pro', 300000.00, 'download (4).jpg', '', 10, 1),
(6, 'Xiaomi Redmi Note 12 Pro', 140000.00, 'Xiaomi Redmi Note 12 Pro.jpg', '', 9, 2),
(7, 'Macbook Air 15 inch M2 2023', 180000.00, 'download (2).jpg', '', 9, 1),
(8, 'Laptop Lenovo Ideapad 5 Pro', 300000.00, 'download (1).jpg', '', 10, 1),
(9, 'Xiaomi Redmi Note 12 Pro', 140000.00, 'download.jpg', '', 9, 2),
(10, 'Đồng hồ sang trọng', 180000.00, 'sp2.jpg', '', 9, 22),
(15, 'Samsung Galaxy S23 Ultra', 50000.00, 'Samsung Galaxy S23 Ultra.jpg', 'ĐẶC ĐIỂM NỔI BẬT Thoả sức chụp ảnh, quay video chuyên nghiệp - Camera đến 200MP, chế độ chụp đêm cải tiến, bộ xử lí ảnh thông minh Chiến game bùng nổ - chip Snapdragon 8 Gen 2 8 nhân tăng tốc độ xử lí, màn hình 120Hz, pin 5.000mAh Nâng cao hiệu suất làm việc với Siêu bút S Pen tích hợp, dễ dàng đánh dấu sự kiện từ hình ảnh hoặc video Thiết kế bền bỉ, thân thiện - Màu sắc lấy cảm hứng từ thiên nhiên, chất liệu kính và lớp phim phủ PET tái chế Sau sự đổ bộ thành công của Samsung Galaxy S22 những chiếc điện thoại dòng Flagship tiếp theo - Điện thoại Samsung Galaxy S23 Ultra là đối tượng được Samfans hết mực săn đón. Kiểu dáng thanh lịch sang chảnh kết hợp với những bước đột phá trong công nghệ đã kiến tạo nên siêu phẩm Flagship nhà Samsung.\r\n\r\n', 0, 2),
(16, 'Iphone 15 promax', 32000.00, 'iPhone 14 Pro Max.jpg', 'Hôm nay, Apple đã ra mắt iPhone 15 Pro và iPhone 15 Pro Max, được thiết kế bằng Titan chuẩn hàng không vũ trụ chắc chắn mà vẫn mỏng nhẹ, mang đến những mẫu Pro có trọng lượng nhẹ nhất của Apple từ trước đến nay. Thiết kế mới với cạnh viền và nút Tác Vụ có thể tuỳ chỉnh, hỗ trợ người dùng cá nhân hoá trải nghiệm với iPhone. Nhiều nâng cấp camera mạnh mẽ tương đương với bảy ống kính chuyên nghiệp mang đến chất lượng hình ảnh đáng kinh ngạc, bao gồm một camera Chính 48MP tiên tiến nay hỗ trợ độ phân giải mới cực kỳ cao lên đến 24MP ở chế độ mặc định, chụp chân dung thế hệ mới với tính năng Focus và Depth Control, nhiều cải tiến ở Chế độ Ban đêm và Smart HDR, cũng như camera Telephoto 5x hoàn toàn mới chỉ có trên iPhone 15 Pro Max. Chip A17 Pro đưa trải nghiệm chơi game và hiệu năng chuyên nghiệp lên một tầm cao mới. Cổng kết nối USB-C mới được tăng tốc với tốc độ của USB 3 — nhanh hơn gấp 20 lần so với USB 2 — và cùng với các định dạng video mới, giúp xử lý quy trình làm việc chuyên nghiệp một cách mạnh mẽ mà trước đây không thể thực hiện được.1', 0, 2),
(17, 'Đồng hồ thông minh', 50000.00, 'sp3.jpg', '', 0, 22);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `role` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `user`, `pass`, `email`, `address`, `tel`, `role`) VALUES
(4, 'toan', '123', 'toan@gmail.com', 'đan phuong', '0866882222', 1),
(9, 'toan', '1', 'toantqph38960@fpt.edu.vn', NULL, NULL, 0),
(10, 'duong', '1', 'duonghvph32406@fpt.edu.vn', NULL, NULL, 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idpro` (`idpro`),
  ADD KEY `iduser` (`iduser`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `LK_cart_taikhoan` (`iduser`),
  ADD KEY `cart_bill` (`idbill`),
  ADD KEY `cart_sanpham` (`idpro`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `iddm` (`iddm`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluan_ibfk_1` FOREIGN KEY (`idpro`) REFERENCES `sanpham` (`id`),
  ADD CONSTRAINT `binhluan_ibfk_2` FOREIGN KEY (`iduser`) REFERENCES `taikhoan` (`id`);

--
-- Các ràng buộc cho bảng `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `LK_cart_taikhoan` FOREIGN KEY (`iduser`) REFERENCES `taikhoan` (`id`),
  ADD CONSTRAINT `bill` FOREIGN KEY (`idbill`) REFERENCES `bill` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `cart_bill` FOREIGN KEY (`idbill`) REFERENCES `bill` (`id`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
