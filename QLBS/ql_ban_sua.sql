-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th1 07, 2024 lúc 03:38 AM
-- Phiên bản máy phục vụ: 5.7.33
-- Phiên bản PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ql_ban_sua`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ct_hoadon`
--

CREATE TABLE `ct_hoadon` (
  `So_hoa_don` varchar(5) NOT NULL,
  `Ma_sua` varchar(6) NOT NULL,
  `So_luong` int(11) NOT NULL,
  `Don_gia` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `ct_hoadon`
--

INSERT INTO `ct_hoadon` (`So_hoa_don`, `Ma_sua`, `So_luong`, `Don_gia`) VALUES
('D001', 'VNM012', 4, 10300),
('D002', 'AB002', 2, 13000),
('D003', 'DL021', 3, 5000),
('D004', 'NTF003', 2, 7200),
('D005', 'DM012', 0, 5000),
('D006', 'DS123', 3, 9000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hang_sua`
--

CREATE TABLE `hang_sua` (
  `Ma_hang_sua` varchar(20) NOT NULL,
  `Teng_hang_sua` varchar(100) NOT NULL,
  `Dia_chi` varchar(200) DEFAULT NULL,
  `Dien_thoai` varchar(20) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `hang_sua`
--

INSERT INTO `hang_sua` (`Ma_hang_sua`, `Teng_hang_sua`, `Dia_chi`, `Dien_thoai`, `Email`) VALUES
('VNM', 'Vinamilk', '123 - Nguyễn Du - Quận 1 - Tp. HCM', '02113456789', 'Vinamilk@gmail.com'),
('NTF', 'Nutifood', 'Khu Công Nghệp Sóng Thần - Bình Dương', '03568982', 'Nutifood@gmail.com'),
('AB', 'Abbort', 'Công ty nhập khẩu Việt Nam', '02116548625', 'Abbort@gmail.com'),
('DS', 'Daisy', 'Khu Công Nghệp Sóng Thần - Bình Dương', '14451267', 'Daisy@gmail.com'),
('DL', 'Dutch Lady', 'Khu Công Nghệp Biên Hòa - Đồng Nai', '03514625', 'Dutchlady@gmail.com'),
('DM', 'Dumex', 'Khu công nghiệp Bắc Thăng Long - Hà Nội', '02116502648', 'Dumex@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoa_don`
--

CREATE TABLE `hoa_don` (
  `So_hoa_don` varchar(5) NOT NULL,
  `Ngay_hd` date NOT NULL,
  `Ma_khach_hang` varchar(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `hoa_don`
--

INSERT INTO `hoa_don` (`So_hoa_don`, `Ngay_hd`, `Ma_khach_hang`) VALUES
('D001', '0000-00-00', 'kh001'),
('D002', '2010-01-14', 'kh002'),
('D004', '2011-01-03', 'kh001'),
('D005', '2008-01-17', 'kh001'),
('D006', '2010-01-21', 'kh002');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khach_hang`
--

CREATE TABLE `khach_hang` (
  `Ma_khach_hang` varchar(5) NOT NULL,
  `Ten_khach_hang` varchar(100) NOT NULL,
  `Phai` tinyint(1) NOT NULL,
  `Dia_chi` varchar(200) NOT NULL,
  `Dien_thoai` varchar(20) NOT NULL,
  `Email` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `khach_hang`
--

INSERT INTO `khach_hang` (`Ma_khach_hang`, `Ten_khach_hang`, `Phai`, `Dia_chi`, `Dien_thoai`, `Email`) VALUES
('kh001', 'Hà Hữu Đôn', 0, 'Hải Lựu - Lập Thạch - Vĩnh Phúc', '0974136509', 'haanhdon@gmail.com'),
('kh002', 'Phạm Kỳ khôi', 0, 'Sơn Lôi - Bình Xuyên - Vĩnh Phúc', '01689937167', 'khoilopci@gmil.com'),
('kh003', 'La Thị Thu Thủy', 1, 'Hải Lựu - Lập Thạch - Vĩnh Phúc', '0974128483', 'kieuthanh2312@gmail.com'),
('kh004', 'Nguyễn Xuân Bách', 0, 'Hải Lựu - Sông Lô - Vĩnh Phúc', '0976256106', 'nhatgai195@gmail.com'),
('kh007', 'ha anh don', 0, 'Vĩnh Phúc', '0974136509', 'haanhdon.cntt@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai_sua`
--

CREATE TABLE `loai_sua` (
  `Ma_loai_sua` varchar(3) NOT NULL,
  `Ten_loai` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `loai_sua`
--

INSERT INTO `loai_sua` (`Ma_loai_sua`, `Ten_loai`) VALUES
('sd', 'Sữa đặc'),
('st', 'Sữa tươi'),
('sc', 'Sữa chua'),
('sb', 'Sữa bột');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sua`
--

CREATE TABLE `sua` (
  `Ma_sua` varchar(6) NOT NULL,
  `Ten_sua` varchar(50) NOT NULL,
  `Ma_hang_sua` varchar(20) NOT NULL,
  `Ma_loai_sua` varchar(3) NOT NULL,
  `Trong_luong` int(11) NOT NULL,
  `Don_gia` int(11) NOT NULL,
  `Tp_dinh_duong` text,
  `Loi_ich` text,
  `Hinh` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `sua`
--

INSERT INTO `sua` (`Ma_sua`, `Ten_sua`, `Ma_hang_sua`, `Ma_loai_sua`, `Trong_luong`, `Don_gia`, `Tp_dinh_duong`, `Loi_ich`, `Hinh`) VALUES
('VNM012', 'Sữa VNM 001', 'VNM', 'sd', 700, 10300, 'Sữa đặc có đường với các thành phần lipit,vitamin A ...', 'Ngon bổ và rẻ @@', '01.jpg'),
('DL001', 'Sữa DL 003', 'DL', 'st', 650, 5000, 'toàn chất xơ,làm bằng sắn tươi,ăn vào thêm còi xương @@', NULL, '02.jpg'),
('VNM011', 'Sữa VNM 002', 'VNM', 'st', 650, 10300, NULL, NULL, '03.jpg'),
('VNM013', 'Sữa VNM 003', 'VNM', 'sd', 400, 10300, 'sữa ngon', NULL, '04.jpg'),
('VNM001', 'Sữa VNM 004', 'VNM', 'sc', 400, 10300, NULL, NULL, '05.jpg'),
('AB001', 'Sữa AB 001', 'AB', 'sb', 400, 13000, 'Sữa thượng hạng đó', NULL, '06.png'),
('AB002', 'Sữa AB 002', 'AB', 'sc', 400, 13000, NULL, NULL, '07.jpg'),
('NTF001', 'Sữa NTF 001', 'NTF', 'sb', 650, 7200, NULL, NULL, '08.jpg'),
('NTF002', 'Sữa NTF 002', 'NTF', 'st', 700, 7200, NULL, NULL, '09.jpg'),
('DS123', 'Sữa DS 123', 'DS', 'st', 650, 9000, NULL, NULL, '10.jpg'),
('DS001', 'Sữa DS 001', 'DS', 'sc', 200, 9000, 'Sữa chua làm từ rong biển,an rai như rẻ váy ^^', NULL, '11.jpg');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `ct_hoadon`
--
ALTER TABLE `ct_hoadon`
  ADD PRIMARY KEY (`So_hoa_don`,`Ma_sua`);

--
-- Chỉ mục cho bảng `hang_sua`
--
ALTER TABLE `hang_sua`
  ADD PRIMARY KEY (`Ma_hang_sua`);

--
-- Chỉ mục cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD PRIMARY KEY (`So_hoa_don`);

--
-- Chỉ mục cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`Ma_khach_hang`);

--
-- Chỉ mục cho bảng `loai_sua`
--
ALTER TABLE `loai_sua`
  ADD PRIMARY KEY (`Ma_loai_sua`);

--
-- Chỉ mục cho bảng `sua`
--
ALTER TABLE `sua`
  ADD PRIMARY KEY (`Ma_sua`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
