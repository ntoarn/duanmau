-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 15, 2024 lúc 05:26 PM
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
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(11) NOT NULL,
  `noidung` varchar(1000) NOT NULL,
  `name_user` varchar(200) NOT NULL,
  `idsp` int(11) NOT NULL,
  `timebl` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(21, 'Rau lá'),
(22, 'Rau củ'),
(23, 'Rau gia vị'),
(24, 'Rau đậu'),
(25, 'Rau thảo mộc'),
(26, 'Rau trái');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `sale` varchar(50) NOT NULL,
  `img` varchar(500) NOT NULL,
  `img1` varchar(500) NOT NULL,
  `img2` varchar(500) NOT NULL,
  `img3` varchar(500) NOT NULL,
  `img4` varchar(500) NOT NULL,
  `daban` varchar(200) NOT NULL,
  `price` varchar(100) NOT NULL,
  `price_del` varchar(100) NOT NULL,
  `mota` varchar(1500) NOT NULL,
  `luotxem` int(100) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `product_name`, `sale`, `img`, `img1`, `img2`, `img3`, `img4`, `daban`, `price`, `price_del`, `mota`, `luotxem`, `category_id`) VALUES
(42, 'Cần tây lớn WinEco', '500g', 'can-tay-wineco.jpg', 'can-tay-wineco.jpg', 'can-tay-wineco.jpg', 'can-tay-wineco.jpg', 'can-tay-wineco.jpg', '344', ' 44.720 ₫', ' 55.900 ₫', 'Cần tây lớn Loại 1 WinEco   Dinh dưỡng: Cần tây chứa chất xơ cao và các khoáng chất thiết yếu như Vitamin A, Vitamin C, Vitamin K, folate, kali và mangan, Riboflavin, Vitamin B6, axit Pantothenic, canxi, magiê và phốt pho. Thực phẩm này là thấp trong Chất béo bão hòa và cholesterol nhưng chứa nhiều Sodium.    Công dụng: Cần tây chứa nhiều canxi, sắt, phospho, giàu protid có thể tăng cảm giác thèm ăn, xúc tiến tuần hoàn máu và bổ trí não. Cần tây vị ngọt, tính mát có tác dụng thanh nhiệt, lợi tiểu, điều trị nhiều đàm, đầy ngực, lao hạch,… Hóa chất lưu hóa trong Cần tây có thể tiêu diệt vi khuẩn bao gồm cả các loại vi khuẩn biến đổi gây sâu răng. Cần tây giúp làm giảm hàm lượng Coletxtêrôn có thể ngăn ngừa các bệnh tim mạch, tăng cường hệ thống miễn dịch, hạ huyết áp, điều trị thiếu máu. Cảm cúm ăn Cần tây nóng có thể cải thiện các triệu chứng.    Hướng dẫn sử dụng: Thích hợp dùng làm gia vị trong một số món ăn.', 1, 21),
(43, 'Giá đỗ WinEco 300g', '500g', 'gia-do-wineco-300g_30d1ca80-a65f-45af-b099-154e806a4be4-og.jpg', 'gia-do-wineco-300g_30d1ca80-a65f-45af-b099-154e806a4be4-og.jpg', 'gia-do-wineco-300g_30d1ca80-a65f-45af-b099-154e806a4be4-og.jpg', 'gia-do-wineco-300g_30d1ca80-a65f-45af-b099-154e806a4be4-og.jpg', 'gia-do-wineco-300g_30d1ca80-a65f-45af-b099-154e806a4be4-og.jpg', '322', '8.720 ₫', ' 10.900 ₫', 'Giá đỗ WinEco 300g   Rau củ quả sạch WinEco chuẩn VietGap, nguồn gốc rõ ràng, chất lượng đảm bảo, không dư lượng chất bảo vệ thực vật hay thuốc trừ sâu, hoàn toàn yên tâm sử dụng cho bữa ăn gia đình.  Không chỉ tuân thủ nghiêm ngặt các quy định của VietGap, các sản phẩm rau củ quả mang thương hiệu WinEco đều do doanh nghiệp tự trồng theo quy trình Nhật Bản - quy trình sản xuất khác biệt khi thực hiện chặt chẽ \"3 kiểm soát\" ngay từ đầu vào sản xuất cho tới \"4 không\" ở đầu ra của sản phẩm.  Giá giòn, ngọt thường được dùng làm rau ăn kèm cho các món có nước như bún, phở hoặc nấu canh chua, xào với thịt.    Giá trị dinh dưỡng của giá đậu xanh  Giá đỗ là một trong những nguồn thực phẩm có nguồn gốc thực vật, rất giàu chất dinh dưỡng, giàu vitamin đặc biệt là vitamin C, vitamin E. Bên cạnh đó, chúng còn chứa nhiều khoáng chất amino acid, protein và chất có nguồn gốc thực vật (phytochemicals) rất bổ dưỡng cho con người. - Liệt kê thành phần dinh dưỡng  Trong 100g giá đậu xanh có khoảng 10 Kcal.    Tác dụng của giá đậu xanh đối với sức khỏe  Tăng cường hormone cho nữ  Giải được nhiều loại chất độc tố  Trị các bệnh lý như bệnh đầy bụng, phân sống, khàn tiếng    Cách bảo quản giá đậu xanh tươi ngon  Để giá đậu xanh khô vào túi khóa kéo và đặt trong tủ lạnh. Lưu ý nếu đã rửa giá với nước thì phải để giá thật khô mới được cho vào túi.  Ngắt bỏ bớt phần rễ dài và rửa sạch. Sau đó cho giá vào hộp và cho nước ngập giá. Cách này chỉ bảo quản trong khoảng 1 tuần  Để giá khô và dùng túi vải xô', 1, 21),
(44, 'Hành lá WinEco gói 100g', '500g', 'wineco-hanh-la-100gr_95efa486-d78d-4345-a205-d879215add94-og.jpg', 'wineco-hanh-la-100gr_95efa486-d78d-4345-a205-d879215add94-og.jpg', 'wineco-hanh-la-100gr_95efa486-d78d-4345-a205-d879215add94-og.jpg', 'wineco-hanh-la-100gr_95efa486-d78d-4345-a205-d879215add94-og.jpg', 'wineco-hanh-la-100gr_95efa486-d78d-4345-a205-d879215add94-og.jpg', '564', ' 9.600 ₫', '12.000 ₫', 'Hành lá WinEco 100g   Là một loại rau rất quen thuộc với chị em nội trợ. Hành lá thường được dùng để làm gia vị cho các món ăn, làm tăng hương vị lên gấp nhiều lần. Ngoài ra, hành lá còn có thể dùng để hỗ trợ trị một số bệnh nhẹ như: cảm sốt, nhức đầu,...    Giá trị dinh dưỡng của hành lá  Trong hành lá chứa nhiều vitamin K, vitamin A, vitamin C, các khoáng chất như kali, canxi, chất xơ,...  Trong 100g hành lá có khoảng 32.3 Kcal.  Tác dụng của hành lá đối với sức khỏe  Giải quyết dứt điểm triệu chứng cảm sốt, nhức đầu  Giúp cải thiện vấn đề tiêu hóa  Ngăn ngừa tiểu đường,  Tốt cho mắt  Nâng cao hoạt động hệ tim mạch,...    Cách bảo quản hành lá tươi ngon  Hành lá mua về, rửa sạch, sau đó lót miếng giấy vào dưới đáy hộp thực phẩm hoặc túi nilon và bảo quản bản trong ngăn mát tủ lạnh.', 2, 21),
(45, 'Xà lách lolo xanh WinEco', '500g', 'xa-lach-lolo-xanh-wineco-300g.jpg', 'xa-lach-lolo-xanh-wineco-300g.jpg', 'xa-lach-lolo-xanh-wineco-300g.jpg', 'xa-lach-lolo-xanh-wineco-300g.jpg', 'xa-lach-lolo-xanh-wineco-300g.jpg', '342', ' 19.600 ₫', ' 24.500 ₫', 'Xà lách lolo xanh WinEco', 1, 21),
(46, 'Cà rốt', '1Kg', 'ca-rot-20230721084932.png', 'ca-rot-20230721084932.png', 'ca-rot-20230721084932.png', 'ca-rot-20230721084932.png', 'ca-rot-20230721084932.png', '342', ' 30.000 ₫', '0', 'Cà rốt   Cà rốt là một loại củ rất quen thuộc trong các món ăn của người Việt. Cà rốt có hàm lượng chất dinh dưỡng và vitamin A cao, được xem là nguyên liệu cần thiết cho các món ăn dặm của trẻ nhỏ, giúp trẻ sáng mắt và cung cấp nguồn chất xơ dồi dào.', 0, 22),
(47, 'Củ dền', '1Kg', 'cu-den.jpg', 'cu-den.jpg', 'cu-den.jpg', 'cu-den.jpg', 'cu-den.jpg', '342', ' 35.000 ₫', '0', 'Củ dền', 0, 22),
(48, 'Củ cải trắng', '1Kg', 'cu-cai-trang.jpg', 'cu-cai-trang.jpg', 'cu-cai-trang.jpg', 'cu-cai-trang.jpg', 'cu-cai-trang.jpg', '343', ' 22.000 ₫', '0', 'Củ cải trắng', 0, 22),
(49, 'Củ Sả WinEco', 'Bó', 'cu-sa-wineco-100g_b337522d-3bdf-4550-be73-795523dbda6a-og.jpg', 'cu-sa-wineco-100g_b337522d-3bdf-4550-be73-795523dbda6a-og.jpg', 'cu-sa-wineco-100g_b337522d-3bdf-4550-be73-795523dbda6a-og.jpg', 'cu-sa-wineco-100g_b337522d-3bdf-4550-be73-795523dbda6a-og.jpg', 'cu-sa-wineco-100g_b337522d-3bdf-4550-be73-795523dbda6a-og.jpg', '32', '3.600 ₫', ' 4.500 ₫', 'Củ Sả WinEco', 0, 22),
(50, 'Đậu cove xanh gói 500g', '500g', 'dau-cove-xanh-goi-500g_fe356ea1-4a64-415e-b3a4-a817039f0173-og.png', 'dau-cove-xanh-goi-500g_fe356ea1-4a64-415e-b3a4-a817039f0173-og.png', 'dau-cove-xanh-goi-500g_fe356ea1-4a64-415e-b3a4-a817039f0173-og.png', 'dau-cove-xanh-goi-500g_fe356ea1-4a64-415e-b3a4-a817039f0173-og.png', 'dau-cove-xanh-goi-500g_fe356ea1-4a64-415e-b3a4-a817039f0173-og.png', '343', ' 22.000 ₫', '0', 'Đậu cove xanh 500g   Đậu que hay còn được gọi là đậu cô ve, là loại thực phẩm quen thuộc trong mỗi bữa ăn của gia đình. Như cải bẹ xanh, cải ngọt, cải thìa và những loại rau khác, đậu que mang lại rất nhiều giá trị dinh dưỡng cần thiết cho cơ thể mà nổi bật nhất là giảm lượng Cholesterol xấu nạp vào cơ thể, bảo vệ sức khỏe tim mạch. Đậu que không những giàu chất xơ mà còn bổ sung nhiều loại vitamin cần thiết cho cơ thể như vitamin K, C, A, B1, B2, B3, B6, E và các khoáng chất như Canxi, Sắt, Magie, Phốt pho, Kali, Natri, Kẽm, Đồng, Mangan.    Công dụng của đậu que  Ăn nhiều đậu cô ve sức khỏe bạn sẽ được hỗ trợ đáng kể, cụ thể giúp bạn kiểm soát được lường đường rất tốt, tăng cường hệ tiêu hóa, làm tan sỏi thận, bảo vệ tim mạch cũng như giảm cân do lọc được các Cholesterol xấu khi nạp vào cơ thể.  Ăn đậu cô ve còn tăng khả năng thụ thai, giúp ngăn ngừa dị tật thai nhi, tốt cho thị lực không chỉ mẹ bầu mà còn cho thai nhi trong bụng    Sơ chế đậu que  Trước khi sử dụng đậu để chế biến món ăn, cần rửa sạch đậu, loại bỏ hai đầu của đậu cũng như đường chỉ hai bên hông. Ngâm đậu que trong nước muối loãng 10 phút rồi rửa sạch với nước, cuối cùng là cắt nhỏ tùy vào món ăn định chế biến.  Đậu que khi xào lên nên cho thêm chút muối để có thể giữ được độ xanh cũng như giòn của đậu, không nên xào lửa quá lớn hoặc quá lâu sẽ khiến đậu bị mềm và bở.', 0, 24),
(51, 'Cam lòng vàng', '1Kg', 'cam-long-vang.jpg', 'cam-long-vang.jpg', 'cam-long-vang.jpg', 'cam-long-vang.jpg', 'cam-long-vang.jpg', '232', ' 34.900 ₫', '0', 'Cam lòng vàng', 0, 26),
(52, 'Xoài cát chu', '1Kg', 'xoai-cat-chu.png', 'xoai-cat-chu.png', 'xoai-cat-chu.png', 'xoai-cat-chu.png', 'xoai-cat-chu.png', '234', ' 59.900 ₫', '0', 'Xoài xanh ngọt với bề ngoài màu xanh mướt bên trong vàng ươm, thịt dày, mùi thơm ngon và vị ngọt bùi.  Phần thịt xoài khi chín màu cam đậm gần như không có xơ, mềm nhưng hơi dai, vị ngọt sâu và đậm hương thơm phù hợp sử dụng trực tiếp hoặc chế biến sinh tố hay làm bánh hoặc một số các món ăn khác.  Sản phẩm rất thích hợp để làm món quà biếu tặng, dâng cúng những dịp lễ tết hay trưng bày rất sang trọng cũng như là trái cây bổ dưỡng tẩm bổ cho người ốm, người già hay trẻ con.  Xoài được gọi là vua của tất cả các loại trái cây, không chỉ thơm ngon, ngọt, xoài giàu protein, chất xơ, vitamin C, A, axit folic..., mang lại nhiều lợi ích cho sức khỏe. Nhiều nghiên cứu đã chứng minh xoài có khả năng làm giảm nguy cơ béo phì, bệnh tim, tăng cường năng lượng, cải thiện trí nhớ...  Lưu ý:  - Hạn sử dụng thực tế quý khách vui lòng xem trên bao bì.  - Hình sản phẩm chỉ mang tính chất minh họa, hình thực tế bao bì của sản phẩm tùy thời điểm sẽ khác so với thực tế.', 0, 26),
(53, 'Dưa hấu Hắc Mỹ Nhân loại 1', '2Kg', 'dua-hau-hac-my-nhan-loai-1.jpg', 'dua-hau-hac-my-nhan-loai-1.jpg', 'dua-hau-hac-my-nhan-loai-1.jpg', 'dua-hau-hac-my-nhan-loai-1.jpg', 'dua-hau-hac-my-nhan-loai-1.jpg', '53', '75.800 ₫', '0', 'Dưa hấu Hắc Mỹ Nhân loại 1', 0, 26),
(54, 'Dưa lưới sạch Đế Vương Super King Ruột cam', '1Kg', 'dua-luoi-sach-de-vuong-super-king-ruot-cam_a4cf9c41-ce35-4a89-88fb-68557744bf97-og.jpg', 'dua-luoi-sach-de-vuong-super-king-ruot-cam_a4cf9c41-ce35-4a89-88fb-68557744bf97-og.jpg', 'dua-luoi-sach-de-vuong-super-king-ruot-cam_a4cf9c41-ce35-4a89-88fb-68557744bf97-og.jpg', 'dua-luoi-sach-de-vuong-super-king-ruot-cam_a4cf9c41-ce35-4a89-88fb-68557744bf97-og.jpg', 'dua-luoi-sach-de-vuong-super-king-ruot-cam_a4cf9c41-ce35-4a89-88fb-68557744bf97-og.jpg', '343', ' 95.200 ₫', ' 119.000 ₫', 'Với công thức chăm sóc đặc biệt & giá trị dinh dưỡng cao, sản phẩm Dưa lưới Đế Vương chắc chắn sẽ mang lại những trải nghiệm khác biệt cho khách hàng khi thưởng thức sản phẩm tinh hoa này.', 1, 26);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `sdt` int(13) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `diachi` varchar(200) NOT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `user_name`, `email`, `sdt`, `pass`, `diachi`, `role`) VALUES
(23, 'nqton301004', 'nqton301004@gmail.com', 987654321, '123123', '', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_binhluan_product` (`idsp`),
  ADD KEY `fk_binhluan_user` (`name_user`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_product_category` (`category_id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `fk_binhluan_product` FOREIGN KEY (`idsp`) REFERENCES `product` (`id`);

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `lk_product_category` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
