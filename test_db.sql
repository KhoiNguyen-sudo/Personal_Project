-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 24, 2022 lúc 05:04 PM
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
-- Cơ sở dữ liệu: `test_db`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `user_name`, `password`, `name`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70', 'admin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thoikhoabieu`
--

CREATE TABLE `thoikhoabieu` (
  `id` int(20) NOT NULL,
  `hoten` varchar(30) NOT NULL,
  `msgv` varchar(100) NOT NULL,
  `mon` varchar(30) NOT NULL,
  `nienkhoa` varchar(20) NOT NULL,
  `thu` varchar(20) NOT NULL,
  `ca` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `thoikhoabieu`
--

INSERT INTO `thoikhoabieu` (`id`, `hoten`, `msgv`, `mon`, `nienkhoa`, `thu`, `ca`) VALUES
(56, 'Hồ Đăng Khôi Nguyen', '197CT09890', 'Lập trình ứng dụng web', '2022-2023', '7', '123'),
(59, 'Nguyễn Thế Hiển', '197CT0001', 'Lập trình ứng dụng web', '2022-2023', '6', '123'),
(60, 'Trần Đức Toàn', '197CT0002', 'Lập trình ứng dụng web', '2022-2023', '5', '123');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `ngaysinh` varchar(100) NOT NULL,
  `ngaycapcccd` varchar(100) NOT NULL,
  `gioitinh` varchar(50) NOT NULL,
  `noicapcccd` varchar(100) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `msgv` varchar(100) NOT NULL,
  `CCCD` int(100) NOT NULL,
  `sodienthoai` int(100) NOT NULL,
  `noisinh` varchar(255) NOT NULL,
  `dantoc` varchar(255) NOT NULL,
  `diachithuongtru` varchar(255) NOT NULL,
  `tongiao` varchar(100) NOT NULL,
  `diachilienlac` varchar(255) NOT NULL,
  `masothue` varchar(255) NOT NULL,
  `hamhoc` varchar(255) NOT NULL,
  `hocvi` varchar(255) NOT NULL,
  `chucvu` varchar(255) NOT NULL,
  `loaigiangvien` varchar(255) NOT NULL,
  `chuyennganh` varchar(255) NOT NULL,
  `sotaikhoan` varchar(255) NOT NULL,
  `tennganhang` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pp` varchar(255) NOT NULL DEFAULT 'default-pp.png	'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `password`, `name`, `ngaysinh`, `ngaycapcccd`, `gioitinh`, `noicapcccd`, `user_name`, `msgv`, `CCCD`, `sodienthoai`, `noisinh`, `dantoc`, `diachithuongtru`, `tongiao`, `diachilienlac`, `masothue`, `hamhoc`, `hocvi`, `chucvu`, `loaigiangvien`, `chuyennganh`, `sotaikhoan`, `tennganhang`, `email`, `pp`) VALUES
(16, '202cb962ac59075b964b07152d234b70', 'user', '', '', '', '', 'user', '', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'default-pp.png	'),
(19, '202cb962ac59075b964b07152d234b70', 'Ho Dang Khoi Nguyen', '5/8/2001', '24/11/2022', 'Nam', 'TP.HCM', '197CT09890', '197CT09890', 2147483647, 934657981, 'TP.Ho Chi Minh', 'Kinh', 'Quan 3', 'Phat', 'Ha noi', '123456789', '123', 'Cu Nhan', 'Giang Vien', 'Co huu', 'Du Lieu', '123456', 'ShinHanBank', 'nguyen.197ct09890@vanlanguni.vn', 'nguyen.png'),
(21, '202cb962ac59075b964b07152d234b70', 'NguyenThe Hien', '1/1/2001', '26/12/2022', 'Nam', 'TP.Ha noi', '197CT00001', '197CT00001', 123456789, 113, 'TP.Ha Noi', 'Kinh', 'Quan 7', 'Thien Chua', 'Ha Noi', '987654321', '321', 'Cu Nhan', 'Giang vien', 'Thinh Giang', 'Phan Mem', '654321', 'Vietcombank', 'hien.197ct00001@vanlanguni.vn', 'hien.png'),
(22, '202cb962ac59075b964b07152d234b70', 'Tran Duc Toan', '2/2/2001', '29/12/2022', 'Nam', 'TP.Ha noi', '197CT00002', '197CT00002', 987654321, 114, 'TP.Ha Noi', 'Kinh', 'Quan 1', 'Ki to ', 'Ha Noi', '177345678', '456', 'Cu Nhan', 'Giang vien', 'Thinh Giang', 'Mang', '6789', 'Techcombank', 'toan.197ct00002@vanlanguni.vn', 'toan.png');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `thoikhoabieu`
--
ALTER TABLE `thoikhoabieu`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `thoikhoabieu`
--
ALTER TABLE `thoikhoabieu`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
