-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 12, 2019 lúc 04:22 AM
-- Phiên bản máy phục vụ: 10.4.6-MariaDB
-- Phiên bản PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `doraemonshop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `images_library`
--

CREATE TABLE `images_library` (
  `id` int(11) NOT NULL,
  `id_parent` varchar(25) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `images_library`
--

INSERT INTO `images_library` (`id`, `id_parent`, `link`) VALUES
(1, 'DORAEMON1', 'a1.PNG'),
(2, 'DORAEMON1', 'a2.PNG'),
(3, 'DORAEMON1', 'a3.PNG'),
(4, 'DORAEMON1', 'a4.PNG'),
(5, 'TIQUAY1', 'b1.PNG'),
(6, 'TIQUAY1', 'b2.PNG'),
(7, 'TIQUAY1', 'b3.PNG'),
(8, 'TIQUAY1', 'b4.PNG'),
(9, 'TĐĐV1', 'c1.jpg'),
(10, 'TĐĐV1', 'c2.jpg'),
(11, 'TĐĐV1', 'c3.jpg'),
(12, 'TĐĐV1', 'c4.jpg'),
(13, 'DRAGONBALL1', 'd1.jpg'),
(14, 'DRAGONBALL1', 'd2.jpg'),
(15, 'DRAGONBALL1', 'd3.jpg'),
(16, 'DRAGONBALL1', 'd4.jpg'),
(17, 'SHIN1', 'e1.jpg'),
(18, 'SHIN1', 'e2.jpg'),
(19, 'SHIN1', 'e3.jpg'),
(20, 'SHIN1', 'e4.jpg'),
(21, 'CONAN1', 'k1.jpg'),
(22, 'CONAN1', 'k2.jpg'),
(23, 'CONAN1', 'k3.jpg'),
(24, 'CONAN1', 'k4.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `login`
--

CREATE TABLE `login` (
  `login_id` smallint(6) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `pass` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `login`
--

INSERT INTO `login` (`login_id`, `username`, `pass`) VALUES
(1, 'luong@gmail.com', '12345678');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nav`
--

CREATE TABLE `nav` (
  `nav_id` smallint(6) NOT NULL,
  `nav_name` varchar(50) NOT NULL,
  `nav_link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `nav`
--

INSERT INTO `nav` (`nav_id`, `nav_name`, `nav_link`) VALUES
(1, 'Home', '?controller=home'),
(2, 'Storys', '?controller=detail&action=truyen'),
(3, 'Toys', '?controller=detail&action=toy'),
(4, 'Login', './Views/login.php'),
(5, 'Contact', './Views/contact.php');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `silde`
--

CREATE TABLE `silde` (
  `slide_id` smallint(6) NOT NULL,
  `slide_title` varchar(50) DEFAULT NULL,
  `slide_content` varchar(50) DEFAULT NULL,
  `slide_link` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `silde`
--

INSERT INTO `silde` (`slide_id`, `slide_title`, `slide_content`, `slide_link`) VALUES
(1, 'Doraemon', 'Doreamon', 'doraemon.jpg'),
(2, 'Dragon', 'Dragon', 'dragon.jpg'),
(3, 'Shin', 'Shin', 'shin.jpg'),
(4, 'Ch? cái', 'Ch? cái', 'chucai.jpg'),
(5, 'Lego city', 'Lego city', 'legocity.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thue`
--

CREATE TABLE `thue` (
  `id` int(11) NOT NULL,
  `tensp` varchar(255) NOT NULL,
  `hoten` varchar(255) NOT NULL,
  `sdt` int(11) NOT NULL,
  `diachi` text NOT NULL,
  `ngay_muon` varchar(255) NOT NULL,
  `ngay_tra` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `thue`
--

INSERT INTO `thue` (`id`, `tensp`, `hoten`, `sdt`, `diachi`, `ngay_muon`, `ngay_tra`) VALUES
(61, 'Dragon Ball Super', 'Hoàng Văn A', 243848393, 'Thành Phố Buôn Ma thuộc', '0000-00-00', '0000-00-00'),
(62, 'Xe điều khiển từ xa REVENTON mz 2028', 'Lê Ngọc Vĩnh Triều', 243848393, 'Cư jut Đăk Nông', '0000-00-00', '0000-00-00'),
(63, 'Doraemon và người khổng lồ xanh', 'Lê Ngọc Vĩnh Triều', 353561801, 'xã Quảng Hiệp Huyện Cư mgar tỉnh Đăk Lăk', '0000-00-00', '0000-00-00'),
(164, '', '', 0, '', '', ''),
(165, 'Thám Tử Lừng Danh Conan', 'Lê Ngọc Vĩnh Triều', 353561801, 'xã Quảng Hiệp Huyện Cư mgar tỉnh Đăk Lăk', '12/11/2019', '19/11/2019'),
(166, 'Thám Tử Lừng Danh Conan', 'Lê Ngọc Vĩnh Triều', 353561801, 'xã Quảng Hiệp Huyện Cư mgar tỉnh Đăk Lăk', '12/11/2019', '19/11/2019'),
(167, 'Thám Tử Lừng Danh Conan', 'Lê Ngọc Vĩnh Triều', 353561801, 'xã Quảng Hiệp Huyện Cư mgar tỉnh Đăk Lăk', '12/11/2019', '19/11/2019');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `toy`
--

CREATE TABLE `toy` (
  `id` smallint(6) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `toy`
--

INSERT INTO `toy` (`id`, `name`, `link`, `content`) VALUES
(1, 'Đồ chơi Lego City - Biển sâu khởi đầu', 'legocity.jpg', 'Đồ chơi Lego City - Biển sâu khởi đầu 60091 sẽ đưa bé đến với cuộc phiêu lưu đầy thú vị dưới đáy biển cùng với các thợ lặn để khám phá bí mật bên trong hộp kho báu...'),
(2, 'Đồ chơi LEGO Friends - Cứu hộ tại thác nước', 'cuuho.jpg', 'LEGO Friends được thiết kế nhằm vào đối tượng chơi là các bé gái với ý tưởng mang lại khát vọng về vai trò của các em trong cuộc sống, hiện thực hóa những ước mơ của mình...'),
(3, ' Bộ đồ chơi trống, kèn (màu đỏ)', 'trong-do.jpg', 'Bộ đồ chơi trống kèn cho bé. Sản phẩm làm từ nhựa an toàn, không độc hại. Phù hợp cho bé từ 3 tháng trở lên. Đồ chơi phát ra âm thanh vui tai, màu sắc bắt mắt, đảm bảo bé sẽ thích bộ đồ chơi này.'),
(4, 'Bảng chữ số đa năng Tiếng Anh Antona', 'chucai-1.jpg', 'Bảng chữ cái tiếng Anh giúp các bậc phụ huynh hỗ trợ các bé trong quá trình mới tiếp xúc với tiếng Anh'),
(5, 'Bảng đa năng học toán', 'chucai.jpg', 'Bảng Toán Học Đa Năng bao gồm những khối gỗ nhỏ trên có in hình những con số cùng với cột tính vòng tròn nhiều màu sắc giúp các bé vừa tập đếm, vừa tập làm quen dần với các con số, bước đầu tiếp cận, ghi nhớ và phát triển tư duy logic toán học'),
(6, 'Xe điều khiển từ xa REVENTON mz 2028', 'oto.jpg', 'Ô tô đồ chơi được thiết kế sang trọng, mô phỏng kiểu dáng siêu xe thế giới Lamborghini. Điều này không chỉ khơi gợi sự thích thú của các bé  mà còn  có thế  trở thành một phần trong bộ sưu tập của các chàng mê siêu xe'),
(12, 'Triều xe oto', 'f2.jpg', 'xe oto dieu khien chat luong');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `truyen`
--

CREATE TABLE `truyen` (
  `id` smallint(6) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_truyen` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tacgia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nxb` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `truyen`
--

INSERT INTO `truyen` (`id`, `name`, `link`, `content`, `id_truyen`, `type`, `tacgia`, `nxb`, `price`) VALUES
(1, 'Thần Đồng Đất Việt: Hoàng Sa - Trường Sa', 'than-dong.png', 'Hoàng Sa – Trường Sa đã được khẳng định thuộc chủ quyền Việt Nam qua sách sử Việt Nam!Nhưng bạn có biết, người Trung Quốc xưa và thư tịch cổ Trung Quốc đã từng nói gì, viết gì về  vùng đảo Hoàng Sa – Trường Sa ...', 'TĐĐV1', 'thần đồng đất việt', 'Phan Thị', 'Đại học sư phạm Thành Phố Hồ Chí Minh', 20000),
(2, 'Doraemon và người khổng lồ xanh', 'doraemon.jpg', 'Nobita nhặt được một cây con và giúp nó hoạt động được như động vật. Cậu đặt tên cho nó là Kibou. Kibou rất ham học, thích xem tivi - đặc biệt là những chuyên mục tin tức và giáo dục...', 'DORAEMON1', 'Doraemon', 'Fujiko F Fujio', 'Kim Đồng', 21000),
(3, 'Dragon Ball Super', 'dragon.jpg', '3 năm sau trận chiến với ác nhân Majin Buu. Trái đất vẫn không được yên bình với sự xuất hiện của thần hủy diệt. Một nhân vật hoàn toàn mới mở ra đa vũ trụ với những sức mạnh thần thánh...', 'DRAGONBALL1', 'Dragon Ball', ' Akira Toriyama Toyotarou', 'kim Đồng', 21000),
(4, 'Thám Tử Lừng Danh Conan', 'conan.jpg', 'Hiện trường vụ ám sát bởi một tay súng bắn tỉa là tầng cao nhất toà tháp Bell Tree có độ cao 635 mét. Vô tình có mặt và chứng kiến sự việc, Conan đã lập tức rượt đuổi hung thủ bằng xe máy cùng Sera. Một kế hoạch phá án chưa từng có tiền lệ...', 'CONAN1', 'Conan', 'Gosho Aoyama', 'kim Đồng', 15000),
(5, 'Tí Quậy', 'tiquay.jpg', 'Tý Quậy là một phần tuổi thơ của tôi, của bạn bè tôi. Không có ý mong Tý trở thành nhân vật điển hình, tôi chỉ ước sao Tý quậy là một người bạn gần gũi, quen thuộc và sống với đúng nghĩa tuổi thơ...', 'TIQUAY1', 'Tí quậy', 'Đào Hải & Nguyễn Quang Toàn', 'kim Đồng', 20000),
(6, 'SHIN - CẬU BÉ BÚT CHÌ', 'shin.jpg', 'Ô tô đồ chơi được thiết kế sang trọng, mô phỏng kiểu dáng siêu xe thế giới Lamborghini. Điều này không chỉ khơi gợi sự thích thú của các bé  mà còn  có thế  trở thành một phần trong bộ sưu tập của các chàng mê siêu xe', 'SHIN1', 'Shin', ' Yoshito Usui', 'Nxb Kim Đồng', 24000),
(25, 'conan', '1.jpg', 'conan', 'conan2', '', '1', '1', 1),
(34, 'Trieu', 'd4.jpg', 'aaaaaaaaaaaaaa', '', '', '', '', 0),
(37, 'Trieu', 'K1.JPG', 'k11111 22223', '', 'ư', 'ư', 'ư', 20002),
(38, 'conan thám thử lừng danh', 'e4.jpg', 'conan thám tử lừng danh', 'CONAN1', '', '1', '1', 20000),
(41, '', '', '', '', '', '', '', 0),
(45, 'OPPO F9', 'f3.jpg', 'aaaaaaaaaaaaaaaaaaaaaaaaaa', 'f3f3', '', 'd', 'd', 0),
(46, 'OPPO F9', 'f3.jpg', 'aaaaaaaaaaaaaaaaaaaaaaaaaa', 'f3f3', '', 'd', 'd', 0),
(47, 'Trieu', 'a4.jpg', 'tý quậy', 'tyquay', '', '1', '1', 1),
(48, 'Trieu1111', 'f4.jpg', 'aaaaaaaaaaaaaa', '', '', '', '', 0),
(49, 'conan thám thử lừng danh ', 'e4.jpg', '<?php?>', '<?php?>', '', '<?php?>', '<?php?>', 300000),
(55, 'xe do', 'oto.jpg', 'aaaaaaaaaaaaaa', '', '', '', '', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `images_library`
--
ALTER TABLE `images_library`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`login_id`);

--
-- Chỉ mục cho bảng `nav`
--
ALTER TABLE `nav`
  ADD PRIMARY KEY (`nav_id`);

--
-- Chỉ mục cho bảng `silde`
--
ALTER TABLE `silde`
  ADD PRIMARY KEY (`slide_id`);

--
-- Chỉ mục cho bảng `thue`
--
ALTER TABLE `thue`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `toy`
--
ALTER TABLE `toy`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `truyen`
--
ALTER TABLE `truyen`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `images_library`
--
ALTER TABLE `images_library`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `login`
--
ALTER TABLE `login`
  MODIFY `login_id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `nav`
--
ALTER TABLE `nav`
  MODIFY `nav_id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `silde`
--
ALTER TABLE `silde`
  MODIFY `slide_id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `thue`
--
ALTER TABLE `thue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=168;

--
-- AUTO_INCREMENT cho bảng `toy`
--
ALTER TABLE `toy`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `truyen`
--
ALTER TABLE `truyen`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
