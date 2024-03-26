-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 26, 2024 lúc 02:15 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_mobilelux`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `id_order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id`, `quantity`, `price`, `id_product`, `id_order`) VALUES
(1, 3, 9597000, 16, 1),
(2, 10, 129900000, 14, 1),
(3, 5, 119950000, 12, 1),
(4, 1, 23990000, 12, 2),
(5, 1, 12990000, 14, 3),
(6, 4, 17608800, 17, 3),
(7, 6, 77940000, 14, 4),
(8, 6, 143940000, 12, 4),
(9, 1, 26490000, 11, 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `name`, `image`) VALUES
(1, 'Apple', 'apple.jpg'),
(2, 'Oppo', 'oppo.jpg'),
(3, 'Samsung', 'samsung.png'),
(4, 'Realme', 'realme.png'),
(5, 'Xiaomi', 'xiaomi.jpg'),
(6, 'Vivo', 'vivo.png'),
(7, 'Huawei', 'huawei.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pay_method` tinyint(2) NOT NULL COMMENT '1. Thanh toan khi nhan han\r\n2. Thanh toan online',
  `total` int(11) NOT NULL,
  `date` date NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order`
--

INSERT INTO `order` (`id`, `name`, `phone`, `address`, `pay_method`, `total`, `date`, `id_user`) VALUES
(1, 'Văn Hải', '01213232323', 'adsdasda', 1, 259447000, '2024-03-18', 3),
(2, 'Văn Hải', '023231314', 'Ha noi\r\n', 1, 23990000, '2024-03-18', 3),
(3, 'dá', '232', 'dấddd', 1, 30598800, '2024-03-19', 3),
(4, 'vanhai123', '0121213131', 'adsdasdsdasd', 1, 221880000, '2024-03-20', 3),
(5, 'vanhai', '232', 'dấdadad', 1, 26490000, '2024-03-26', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `color` varchar(255) NOT NULL,
  `memory` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `desc` text NOT NULL,
  `id_category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `name`, `image`, `price`, `color`, `memory`, `quantity`, `desc`, `id_category`) VALUES
(1, 'Iphone 15 pro max', 'product-img-1.jpg', 37999000, 'Titan Tự nhiên', '256GB', 42, 'Màn hình: OLED6.7\"Super Retina XDR\\n\r\nHệ điều hành: iOS 17\\n\r\nCamera sau: Chính 48 MP & Phụ 12 MP, 12 MP\\n\r\nCamera trước: 12 MP\\n\r\nChip: Apple A17 Pro 6 nhân\\n\r\nRAM: 8 GB\\n\r\nDung lượng lưu trữ: 256GB\\n\r\nSIM: 1 Nano SIM & 1 eSIM Hỗ trợ 5G\\n\r\nPin, Sạc: 4422 mAh20 W\r\n', 1),
(2, 'Samsung S22', 'product-img-2.jpg', 9858000, 'Đen', '128GB', 32, 'THÔNG SỐ SAMSUNG S22 5G MỸ:\\n\r\n+ Hệ điều hành: Android\\n\r\n+ Chipset: Qualcomm SM8450 Snapdragon 8 Gen 1 (4 nm)\\n\r\n+ Độ phân giải: 1080 x 2340 pixels\\n\r\n+ Màn hình rộng: 6.1 inches\\n\r\n+ Camera sau: 3 camera: 50MP + 10MP + 12MP\\n\r\n+ RAM: 8 GB\\n\r\n+ Bộ nhớ trong ( Rom): 128 GB\\n\r\n+ Camera trước: 10 MP, f/2.2, 26mm (wide)\\n\r\n+ Dung lượng pin: 3700 mAh', 3),
(3, 'Xiaomi Redmi Note 10', 'product-img-3.jpg', 2349000, 'Đen', '64GB', 12, 'Cấu hình Điện thoại Xiaomi Redmi Note 10 JE 5G\\n\r\n\r\n✔️ Màn hình: IPS LCD 6.5\"Full HD+\\n\r\n✔️ Hệ điều hành: Android 11\\n\r\n✔️ Camera sau: Chính 48 MP & Phụ 2 MP, 2 MP\\n\r\n✔️ Camera trước: 8 MP\\n\r\n✔️ Chip: Snapdragon 480 8 nhân 5G\\n\r\n✔️ RAM: 4 GB\\n\r\n✔️ Bộ nhớ trong: 64 GB\\n\r\n✔️ SIM: 1 Nano SIM Hỗ trợ 5G\\n\r\n✔️ Pin, Sạc: 4800 mAh18 W\\n\r\n✔️ Khả năng kháng nước, kháng bụi chuẩn IP68\r\n✔️ Hãng Xiaomi           ', 5),
(4, 'OPPO Find N2 Flip', 'product-img-5.jpg', 16990000, 'Tím', '256GB', 55, 'Thương hiệu: OPPO\\n\r\nDung lượng lưu trữ: 256GB\\n\r\nLoại bảo hành: Bảo hành nhà cung cấp\\n\r\nHạn bảo hành: 18 tháng\\n\r\nDung lượng pin: 4300mAh\\n\r\nBộ xử lý: Dimensity 9000+\\n\r\nĐộ phân giải camera chính: 50MP\\n\r\nKích thước màn hình: 6.8inches\r\n\r\n\r\n\r\n\r\n', 2),
(9, 'Realme 9i', 'product-img-7.jpg', 4290000, 'Đen', '128 GB', 43, 'Màn hình: IPS LCD6.6\"Full HD+\\n\r\nHệ điều hành: Android 11\\n\r\nCamera sau: Chính 50 MP & Phụ 2 MP, 2 MP\\n\r\nCamera trước:\r\n16 MP\\n\r\nChip: Snapdragon 680\\n\r\nRAM: 6 GB\\n\r\nDung lượng lưu trữ: 128 GB\\n\r\nSIM: 2 Nano SIM \\n\r\nHỗ trợ 4G\r\n', 4),
(11, 'Iphone 14 Pro Max', 'product-img-6.jpeg', 26490000, 'Tím', '256GB', 32, 'Kích thước màn hình: 6.7 inches 2796 x 1290 pixels\\n\r\nCông nghệ màn hình: OLED LPTS\\n\r\nTốc độ làm mới: 120Hz\\n\r\nChipset: Apple A16 Bionic\\n\r\nGPU: Apple GPU (5 lõi)\\n\r\nBộ nhớ trong: 256 GB\\n\r\nRAM: 6 GB\\n\r\nHệ điều hành: iOS\\n\r\nCamera sau	\r\nCamera chính: 48MP\\n\r\nCamera góc siêu rộng: 12MP\\n\r\nCamera tele: 12MP	', 1),
(12, 'Samsung Galaxy S23 Ultra', 'product-img-8.jpg', 23990000, 'Đen', '256 GB', 53, 'Kích thước màn hình: 6.8 inches\\n\r\nCông nghệ màn hình: Dynamic AMOLED 2X\\n\r\nĐộ phân giải màn hình: 1440 x 3088 pixels (QHD+)\\n\r\nTính năng màn hình: \r\n120Hz, HDR10+, 1750 nits, Gorilla Glass Victus 2\\n\r\nTần số quét: 120Hz\\n\r\nKiểu màn hình: Giọt nước\\n\r\nChipset: Snapdragon 8 Gen 2 (4 nm)\\n\r\nLoại CPU: 1x3.36 GHz Cortex-X3 & 2x2.8 GHz Cortex-A715 & 2x2.8 GHz Cortex-A710 & 3x2.0 GHz Cortex-A510\\n\r\nGPU: Adreno 740\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n', 3),
(14, 'Vivo V29', 'product-img-9.webp', 12990000, 'Tím nhạt', '256GB', 11, 'Màn hình: AMOLED6.78\"1.5K\\n\r\nHệ điều hành: Android 13\\n\r\nCamera sau: Chính 50 MP & Phụ 8 MP, 2 MP\\n\r\nCamera trước: 50 MP\\n\r\nChip: Snapdragon 778G 5G\\n\r\nRAM: 12 GB\\n\r\nDung lượng lưu trữ: 256 GB\\n\r\nSIM: 2 Nano SIM Hỗ trợ 5G\\n\r\nPin, Sạc: 4600 mAh80 W\r\n', 6),
(16, 'Huawei P30 Pro', 'product-img-10.jpg', 3199000, 'Xanh dương', '128GB', 64, 'Thương hiệu: HUAWEI\\n\r\nDung lượng lưu trữ: 128GB\\n\r\nĐộ phân giải camera chính: 12MP\\n\r\nLoại bảo hành: Bảo hành nhà cung cấp\\n\r\nHạn bảo hành: 3 tháng\\n\r\nRAM: 8GB\\n\r\nHỗ trợ hệ điều hành: Android\\n\r\nLọai sim: Nano\\n\r\nModel điện thoại: p30 pro\\n\r\nDung lượng pin: 4200mAh\\n\r\nKích thước màn hình: 6.47inches\r\n', 7),
(17, 'Samsung Galaxy S20 Plus', 'product-img-11.webp', 4402200, 'Bạc', '128GB', 56, 'Thương hiệu: SAMSUNG\\n\r\nDung lượng lưu trữ: 128GB\\n\r\nLoại bảo hành: Bảo hành nhà cung cấp\\n\r\nHạn bảo hành: 3 tháng\\n\r\nTình trạng: Khác\\n\r\nBộ xử lý: Snapdragon 865\\n\r\nDung lượng pin: 5000mAh\\n\r\nModel điện thoại: samsung s20 ultra\r\n\r\n\r\n', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL,
  `date` date NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_product` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `review`
--

INSERT INTO `review` (`id`, `content`, `date`, `id_user`, `id_product`) VALUES
(1, 'đẹp', '2024-03-18', 2, 16),
(6, 'xấu', '2024-03-18', 3, 14),
(7, 'xau', '2024-03-25', 3, 16),
(8, 'dasdas', '2024-03-26', 3, 16),
(9, 'adad', '2024-03-26', 2, 16);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` tinyint(2) NOT NULL COMMENT '0. Admin\r\n1. User'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `user`, `pass`, `email`, `role`) VALUES
(1, 'admin', '123', 'daovanhai1424@gmail.com', 0),
(2, 'vanhai', '12345', 'abcd@gmail.com', 1),
(3, 'vanhai123', '123', 'daovanhai1424@gmail.com', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_pro` (`id_product`),
  ADD KEY `fk_id_order` (`id_order`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user` (`id_user`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_category` (`id_category`);

--
-- Chỉ mục cho bảng `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_user` (`id_user`),
  ADD KEY `fk_id_product` (`id_product`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `fk_id_order` FOREIGN KEY (`id_order`) REFERENCES `order` (`id`),
  ADD CONSTRAINT `fk_id_pro` FOREIGN KEY (`id_product`) REFERENCES `product` (`id`);

--
-- Các ràng buộc cho bảng `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `fk_id_category` FOREIGN KEY (`id_category`) REFERENCES `category` (`id`);

--
-- Các ràng buộc cho bảng `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `fk_id_product` FOREIGN KEY (`id_product`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `fk_id_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
