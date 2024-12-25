-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 27, 2024 lúc 10:26 AM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `hocsinh`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tongketnamhoc`
--

CREATE TABLE `tongketnamhoc` (
  `id` int(5) NOT NULL,
  `hocsinh_id` varchar(32) NOT NULL,
  `namhoc` varchar(9) NOT NULL,
  `nhanxetchung` text NOT NULL,
  `uudiem` text NOT NULL,
  `cachkhacphuc` text NOT NULL,
  `duoclenlop` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tongketnamhoc`
--

INSERT INTO `tongketnamhoc` (`id`, `hocsinh_id`, `namhoc`, `nhanxetchung`, `uudiem`, `cachkhacphuc`, `duoclenlop`) VALUES
(1, 'Nguyen Mai Phuong', '2024', 'Tot', 'Di hoc dung gio', 'Khong co', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `username` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `role` varchar(9) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`username`, `password`, `role`, `status`) VALUES
('admin', '123', 'admin', 1),
('user', '123', 'client', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tongketnamhoc`
--
ALTER TABLE `tongketnamhoc`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tongketnamhoc`
--
ALTER TABLE `tongketnamhoc`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
