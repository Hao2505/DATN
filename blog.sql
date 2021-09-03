-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 03, 2021 lúc 05:34 PM
-- Phiên bản máy phục vụ: 10.4.17-MariaDB
-- Phiên bản PHP: 7.3.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `blog`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `about_us_homes`
--

CREATE TABLE `about_us_homes` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_5` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `about_us_homes`
--

INSERT INTO `about_us_homes` (`id`, `title`, `content`, `image_1`, `image_2`, `image_3`, `image_4`, `image_5`, `created_at`, `updated_at`) VALUES
(1, 'GIỚI THIỆU BỔN TỰ', '<p>Thân sinh: Ông Lê Hoàng Triệu và bà Lưu Thị Hột đã có nhiều thành tích đóng góp cho đất nước, đạo pháp, dân tộc và cúng dường 1.350m2 đất khuôn viên ngôi Chánh Điện.</p><p>Năm 2007 được UBND Tỉnh Tây Ninh có quyết định công nhận là cơ sở tín ngưỡng Tôn Giáo.</p><p>Năm 2008 Lê Thị Thúy Vân, Lương Thị Nhung, Tân Thị Út, Tạ Đức Quý, Hạnh Quả, gia đình Hạnh Hồng, Phật Tử trong và ngoài tỉnh cúng dường 1.080m2 đất mở rộng chùa.</p><p>Năm 2015 Đại trưởng Lão Chư Tổ Sư Ni đời thứ Tứ Thập Lục - thế Húy Nhuận Định - Thượng Diệu Hạ Nghĩa - Phái Tế Thượng Chánh Tông - Viện Chủ Hệ Thống các Chùa Núi Bà tỉnh Tây Ninh tế độ làm chủ đầu tư xây dựng.</p><p>Ngày 29/02/2016 ( Niên Bính Thân ) lễ đặt đá khởi công xây dựng.</p><p>Hộ trì Tam Bảo: Đệ nhất Trưởng tử Ngọc Tâm Hương.</p>', '13-41-03-09-August-2021_Mask Group 15.png', '13-41-03-09-August-2021_Mask Group 33.png2', '13-41-03-09-August-2021_Mask Group 17.png3', '13-41-03-09-August-2021_Mask Group 38.png4', '13-41-03-09-August-2021_Mask Group 30.png5', NULL, '2021-09-01 00:44:51');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` text DEFAULT NULL,
  `description` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `category` int(11) DEFAULT NULL,
  `featured_post` int(1) NOT NULL DEFAULT 0,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `blogs`
--

INSERT INTO `blogs` (`id`, `name`, `image`, `description`, `content`, `category`, `featured_post`, `updated_at`, `created_at`) VALUES
(7, 'THÔNG BẠCH XÂY DỰNG THÁNG 08/2019', '12-59-38-09-August-2021_Mask Group 35.png', 'Suis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto.', '<p>Suis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto.Suis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto.Suis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto.Suis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto.Suis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto.</p><p>Suis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto.Suis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto.</p><p>Suis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto.Suis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto.</p><p>Suis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto.</p>', 2, 1, '2021-08-20 21:23:03', '2021-08-07 12:00:17'),
(8, 'THÔNG BẠCH XÂY DỰNG THÁNG 08/2019', '12-59-45-09-August-2021_Mask Group 36.png', 'posit asl itwposit asl itwposit asl itwposit asl itwposit asl itwposit asl itwposit asl itwposit asl itwposit asl itwposit asl itw', '<p>posit asl itwposit asl itwposit asl itwposit asl itwposit asl itwposit asl itwposit asl itwposit asl itwposit asl itwposit asl itwposit asl itwposit asl itwposit asl itwposit asl itwposit asl itwposit asl itwposit asl itwposit asl itwposit asl itwposit asl itw</p><p>posit asl itwposit asl itwposit asl itwposit asl itwposit asl itwposit asl itwposit asl itwposit asl itwposit asl itwposit asl itwposit asl itwposit asl itwposit asl itwposit asl itwposit asl itwposit asl itwposit asl itwposit asl itwposit asl itwposit asl itw</p><p>posit asl itwposit asl itwposit asl itwposit asl itwposit asl itwposit asl itwposit asl itwposit asl itwposit asl itwposit asl itw</p>', 2, 1, '2021-08-20 21:22:58', '2021-08-07 12:17:48'),
(9, 'THÔNG BẠCH XÂY DỰNG THÁNG 08/2019', '12-59-59-09-August-2021_Mask Group 27.png', 'Suis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto.', '<p>Suis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto.Suis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto.Suis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto.Suis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto.</p><p>Suis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto.</p><p>Suis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto.</p><p>Suis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto.</p>', 2, 0, '2021-08-20 21:23:09', '2021-08-07 12:19:23'),
(10, 'THÔNG BẠCH XÂY DỰNG THÁNG 08/2019', '13-00-11-09-August-2021_Mask Group 35.png', 'THÔNG BẠCH XÂY DỰNG THÁNG 08/2019 THÔNG BẠCH XÂY DỰNG THÁNG 08/2019', '<p>Suis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto.Suis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto.</p><p>Suis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto.</p>', 2, 1, '2021-08-20 21:23:17', '2021-08-08 11:23:46'),
(11, 'Thông Bạch Từ Thiện Đại Dịch Covid – 19 Năm 2021', '13-00-22-09-August-2021_Mask Group 26.png', 'Thông Bạch Từ Thiện Đại Dịch Covid – 19 Năm 2021', '<p>Thông Bạch Từ Thiện Đại Dịch Covid – 19 Năm 2021 Thông Bạch Từ Thiện Đại Dịch Covid – 19 Năm 2021</p><p>Thông Bạch Từ Thiện Đại Dịch Covid – 19 Năm 2021</p><p>Thông Bạch Từ Thiện Đại Dịch Covid – 19 Năm 2021</p><p>&nbsp;</p>', 6, 1, '2021-08-09 06:00:22', '2021-08-08 11:30:33'),
(12, 'Thông Bạch Từ Thiện Đại Dịch Covid – 19 Năm 2021', '13-03-00-09-August-2021_Mask Group 24.png', 'Thông Bạch Từ Thiện Đại Dịch Covid – 19 Năm 2021', '<p>Thông Bạch Từ Thiện Đại Dịch Covid – 19 Năm 2021</p><p>Thông Bạch Từ Thiện Đại Dịch Covid – 19 Năm 2021</p><p>Thông Bạch Từ Thiện Đại Dịch Covid – 19 Năm 2021</p><p>&nbsp;</p>', 6, 1, '2021-08-09 06:03:01', '2021-08-08 11:31:13'),
(13, 'Thông Bạch Từ Thiện Đại Dịch Covid – 19 Năm 2021', '14-17-50-09-August-2021_Mask Group 26.png', 'Thông Bạch Từ Thiện Đại Dịch Covid – 19 Năm 2021\r\nThông Bạch Từ Thiện Đại Dịch Covid – 19 Năm 2021', '<p>Thông Bạch Từ Thiện Đại Dịch Covid – 19 Năm 2021</p><p>Thông Bạch Từ Thiện Đại Dịch Covid – 19 Năm 2021</p><p>Thông Bạch Từ Thiện Đại Dịch Covid – 19 Năm 2021</p><p>Thông Bạch Từ Thiện Đại Dịch Covid – 19 Năm 2021</p><p>&nbsp;</p>', 6, 0, '2021-08-09 07:17:50', '2021-08-08 11:31:53'),
(14, 'Thông Bạch Từ Thiện Đại Dịch Covid – 19 Năm 2021', '14-18-07-09-August-2021_Mask Group 25.png', 'Thông Bạch Từ Thiện Đại Dịch Covid – 19 Năm 2021\r\nThông Bạch Từ Thiện Đại Dịch Covid – 19 Năm 2021\r\nThông Bạch Từ Thiện Đại Dịch Covid – 19 Năm 2021', '<p>Thông Bạch Từ Thiện Đại Dịch Covid – 19 Năm 2021</p><p>Thông Bạch Từ Thiện Đại Dịch Covid – 19 Năm 2021</p><p>Thông Bạch Từ Thiện Đại Dịch Covid – 19 Năm 2021</p><p>Thông Bạch Từ Thiện Đại Dịch Covid – 19 Năm 2021</p><p>&nbsp;</p>', 6, 0, '2021-08-09 07:18:07', '2021-08-08 11:32:23'),
(15, 'Thông Bạch Từ Thiện Đại Dịch Covid – 19 Năm 2021', '14-22-14-09-August-2021_Mask Group 35.png', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd', '<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores</p><p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores</p>', 7, 0, '2021-08-09 07:22:14', '2021-08-09 07:22:14'),
(16, 'Thông Bạch Từ Thiện Đại Dịch Covid – 19 Năm 2020', '14-22-55-09-August-2021_Mask Group 27.png', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd', '<p>Thông Bạch Từ Thiện Đại Dịch Covid – 19 Năm 2020Thông Bạch Từ Thiện Đại Dịch Covid – 19 Năm 2020Thông Bạch Từ Thiện Đại Dịch Covid – 19 Năm 2020Thông Bạch Từ Thiện Đại Dịch Covid – 19 Năm 2020Thông Bạch Từ Thiện Đại Dịch Covid – 19 Năm 2020</p>', 7, 1, '2021-08-12 07:30:40', '2021-08-09 07:22:55'),
(17, 'Thông Bạch Từ Thiện Đại Dịch Covid – 19 Năm 2021', '14-23-21-09-August-2021_Mask Group 35.png', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd', '<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores</p><p><br>&nbsp;</p>', 7, 1, '2021-08-09 07:23:21', '2021-08-09 07:23:21'),
(18, 'Thông Bạch Từ Thiện Đại Dịch Covid – 19 Năm 2021', '14-24-48-09-August-2021_Mask Group 36.png', 'Thông Bạch Từ Thiện Đại Dịch Covid – 19 Năm 2021\r\nThông Bạch Từ Thiện Đại Dịch Covid – 19 Năm 2021', '<h3>Thông Bạch Từ Thiện Đại Dịch Covid – 19 Năm 2021Thông Bạch Từ Thiện Đại Dịch Covid – 19 Năm 2021Thông Bạch Từ Thiện Đại Dịch Covid – 19 Năm 2021</h3>', 6, 0, '2021-08-09 07:24:48', '2021-08-09 07:24:48'),
(19, 'THÔNG BẠCH XÂY DỰNG THÁNG 08/2019', '14-25-22-09-August-2021_Mask Group 23.png', 'THÔNG BẠCH XÂY DỰNG THÁNG 08/2019 THÔNG BẠCH XÂY DỰNG THÁNG 08/2019', '<p>THÔNG BẠCH XÂY DỰNG THÁNG 08/2019 THÔNG BẠCH XÂY DỰNG THÁNG 08/2019THÔNG BẠCH XÂY DỰNG THÁNG 08/2019 THÔNG BẠCH XÂY DỰNG THÁNG 08/2019THÔNG BẠCH XÂY DỰNG THÁNG 08/2019 THÔNG BẠCH XÂY DỰNG THÁNG 08/2019</p>', 6, 0, '2021-08-09 07:25:22', '2021-08-09 07:25:22');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blogs_categories`
--

CREATE TABLE `blogs_categories` (
  `blog_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `categories` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `books`
--

INSERT INTO `books` (`id`, `name`, `description`, `content`, `price`, `categories`, `qty`, `created_at`, `updated_at`, `image`) VALUES
(3, 'ẤN QUANG ĐẠI SƯ GIA NGÔN LỤC', 'Tác giả: Như Hòa', '<p>Pháp môn Tịnh độ Lý cực cao sâu, Sự cực giản dị. Do vậy, người thiên tư thông mẫn, tri kiến cao siêu thường xem Tịnh độ là pháp tu của bọn ngu phu, ngu phụ, chẳng chịu tu trì. Nào biết đây là pháp môn rốt ráo để mười phương Tam thế hết thảy chư Phật, trên thành Phật đạo, dưới độ chúng sinh, thành thủy, thành chung. Họ thấy kẻ ngu phu, ngu phụ tu được pháp nầy bèn coi thường, sao chẳng xét trong hội Hoa Nghiêm, bậc đã chứng bằng với Phổ Hiền, bằng với chư Phật, vẫn phải dùng mười đại nguyện vương hồi hướng vãng sinh Tây Phương Cực Lạc ngõ hầu viên mãn Phật quả? Miệt thị pháp môn Tịnh độ chẳng chịu tu là coi những vị trong hội Hoa Nghiêm thuộc hạng người gì? Chỗ quy tông cuối cùng của kinh Hoa Nghiêm có đáng nên tôn trọng hay nên coi thường đây?</p>', '12000', '1', '1', '2021-08-20 20:32:41', '2021-08-31 05:41:53', '03-32-41-21-August-2021_bizmac__thumb_800.jpg'),
(4, '48 ĐẠI NGUYỆN CỦA ĐỨC PHẬT A DI ĐÀ', 'Bài thơ Khuyên Tu của HT. Vạn Đức viết:\r\nTuổi ngoài bảy chục gẫm nhân sinh\r\nNhân sinh vô nghĩa mãi trôi quanh\r\nĂn uống, uống ăn, lo đại tiểu.\r\nViệc làm, làm việc, nhọc bại thành.', '<p>Chúng sinh luân hồi trong sáu nẻo, chìm đắm nơi ba đường, nỗi khổ không nói hết được! May mắn được làm thân người, thế nhưng suy xét kỹ, lúc sinh tiền chỉ mê lầm, rộng tạo nghiệp ác, ham danh ham lợi, vì mình hại người, rốt cuộc thân này cũng tan hoại. Muôn thứ đem chẳng được, chỉ có nghiệp theo mình.</p><p>Vì vậy, đức Phật từ bi thương xót chúng sinh, mở bày pháp môn Tịnh độ, chỉ rõ hai cõi khổ vui, để thức tỉnh muôn loài đang chìm đắm. Ví như ao sen báu trước mặt, non đao sau lưng, khi ấy tự nhiên sinh khởi nguyện thù thắng, nhàm chán Ta-bà, cầu sinh Cực Lạc; đã sinh lòng tín - nguyện, ắt chuyên nhất trì danh, liền được độ thoát. Sinh về cõi kia, gặp Phật nghe pháp, được đạo giác ngộ tột cùng. Dùng hữu niệm vào vô niệm, do vãng sinh khế hợp vô sinh. Đốn ngộ tâm này vốn sẵn bình đẳng.</p>', '30000', '2', '8', '2021-08-25 09:23:01', '2021-08-30 07:12:50', '16-23-01-25-August-2021_bizmac__thumb_5194.jpg'),
(5, 'NHỮNG ĐIỀU CĂN BẢN VỀ PHÁP MÔN TỊNH ĐỘ', 'Nam Mô Bổn Sư Thích-ca Mâu-ni Phật\r\nNam Mô Tây Phương Cực Lạc Thế Giới Đại Từ Đại Bi Tiếp Dẫn Đạo Sư A-di-đà Phật\r\nNam Mô Liên Trì Hải Hội Phật Bồ-tát Ma-ha-tát', '<p>Chúng con kính dâng ba nghiệp thanh tịnh cúng dường lên chư Phật, chư Bồ-tát, chư Thánh chúng, chư lịch đại Tổ sư, Hòa thượng bổn sư, Hòa thượng ân sư và tất cả chúng sinh trong trong mười phương ba đời.</p><p>Chúng con cung kính đảnh lễ đức Đại Trí Văn Thù Sư Lợi Bồ-tát, bậc Tướng Quân Chánh Pháp vĩ đại với suối nguồn bi mẫn, vung gươm trí tuệ giúp chúng sinh chặt đứt xích xiềng vô minh, phiền não.</p>', '30000', '1', '0', '2021-08-25 09:33:56', '2021-08-27 09:27:26', '16-33-56-25-August-2021_Nhung-dieu-can-ban-Tro-Niem-Lam-Chung.jpg'),
(6, 'TỊNH ĐỘ CẢNH NGỮ', 'Tác giả: Thích Minh Thành\r\nNgười đời ai cũng muốn tìm cầu hạnh phúc, nên chạy đuổi theo tiền của, sắc đẹp, danh vọng, quyền thế, ăn uống và ngủ nghỉ… Họ lầm tưởng rằng sẽ được vui sướng lâu dài, nhưng cuối cùng vẫn phải gánh chịu nhiều đau khổ!', '<p>Người vào đạo chán cõi Ta-bà<a href=\"http://chuahoangphap.com.vn/webadminqthp/books_title.php?book_id=180&amp;mode=add#_ftn1\">[1]</a> xấu xa uế trược, chí tâm niệm Phật mong muốn vãng sinh, nhưng dù trải qua nhiều năm tháng thực hành vẫn không đạt được chỗ nhất tâm bất loạn?</p><p>Nguyên do là tại đâu? Bởi vì vô minh, mê lầm, cứ lầm cho mọi vật là thật, là bền lâu mãi mãi nên bám chấp vào đó… để rồi khi sự thật vô thường xảy ra thì đau khổ vô cùng. Thế nên, đạo Phật lấy việc <i>nhận rõ lẽ thật</i> (giác ngộ) làm chánh nhân để giải thoát. Lẽ thật đó chính là sự biến đổi vay mượn ở ngay nơi bản thân mình, tâm mình và sự vật chung quanh mình mình.</p>', '50000', '1', '11', '2021-08-25 09:37:32', '2021-08-25 09:37:32', '16-37-32-25-August-2021_tdo-canh-ngu-XP.jpg'),
(7, 'TỊNH ĐỘ HOẶC VẤN', 'Tác giả: HT.Thích Thiền Tâm', '<p><i>“Ngoài song non xanh giăng màn hoa</i></p><p><i>Triền non thanh tuyền buông cầm ca</i></p><p><i>Trong song kìa ai im như mơ</i></p><p><i>Ngồi xem Thiên Như câu Di-đà</i></p>', '25000', '1', '5', '2021-08-25 09:39:50', '2021-08-27 11:09:59', '16-39-50-25-August-2021_TINHDOHOACVAN-XP.jpg'),
(8, 'SỮA PHÁP BAN MAI - BƯỚC ĐƯỜNG DU HÓA', 'Tác giả: Thích Chân Tính', '<p>SỮA PHÁP BAN MAI - BƯỚC ĐƯỜNG DU HÓA</p>', '30000', '1', '0', '2021-08-25 09:42:24', '2021-08-27 11:09:43', '16-42-24-25-August-2021_hoangphap_sua-phap-ban-mai-buoc-duong-du-hoa_full_16062021_050602.jpg'),
(9, 'QUẢ BÁO SÁT SINH', 'Tác giả: Thích Chân Tính\r\nMục lục\r\nLời dẫn Câu chuyện thứ nhất: Chuyện về con dê Câu chuyện thứ hai: Chuyện người giết heo Câu chuyện thứ ba: Chuyện người giết bò Câu chuyện thứ tư: Chuyện người thợ săn Câu chuyện thứ năm: Chuyện người bẫy chim Nguyên nhân sát sinh Mấy lời tâm huyết', '<p>LỜI DẪN</p><p>Trong năm giới căn bản của người Phật tử, giới đầu tiên là không sát sinh. Quả báo của hành động sát sinh này rất nặng, không những gây ảnh hưởng xấu trong đời này mà còn nhiều đời về sau. Chính vì sát sinh nguy hại như vậy nên bây giờ tôi sẽ chia sẻ một vài câu chuyện trong kinh điển nhà Phật, để chúng ta cùng rút ra bài học cho bản thân mình.</p>', '60000', '2', '19', '2021-08-27 10:30:20', '2021-08-27 10:30:20', '17-30-20-27-August-2021__thumb_13555.jpg'),
(10, 'ĐÚNG NGƯỜI ĐÚNG VIỆC', 'Tác giả: Thích Chân Tính', '<p>ĐÚNG NGƯỜI ĐÚNG VIỆC</p><p>Theo quy luật tự nhiên, con người sinh ra trên cuộc đời này, khi đến tuổi trưởng thành, đều phải lập gia đình, người nam có vợ, người nữ có chồng. Tuy nhiên, một số người không đi theo lối mòn đó mà chọn sống đời độc thân. Đặc biệt, có những người vì lý tưởng cao cả nên không lập gia đình và trở thành tu sĩ của các tôn giáo. Như vậy, trong cuộc đời này có ba hạng người: một là lập gia đình, hai là sống độc thân, ba là đi theo lý tưởng và trở thành tu sĩ.</p><p>&nbsp;</p><p>Hạng người lập gia đình: Ví dụ như một cô gái về nhà chồng làm dâu. Ngày xưa, phụ nữ về làm dâu, không chỉ phục vụ cha mẹ chồng, mà đôi khi còn phải phục vụ cả anh em, dòng họ bên nhà chồng. Hơn nữa, do khoảng cách thế hệ, giữa cha mẹ chồng và nàng dâu nhiều lúc nảy sinh những mâu thuẫn gay gắt. Ngày nay, để tránh tình trạng đó, sau khi kết hôn và về nhà chồng sống một thời gian ngắn, đôi vợ chồng trẻ sẽ dọn ra ở riêng. Có những cặp tình nhân đã chuẩn bị sẵn một căn nhà để khi cưới xong là có nhà ở riêng ngay, không phải sống chung với những người lớn tuổi.</p><p>&nbsp;</p><p>Hạng người sống độc thân: Đây là những người không muốn vướng bận chuyện gia đình, thích được tự do tự tại, hoặc vì một lý do nào đó mà họ không nghĩ đến việc kết hôn. Chẳng hạn như, có những người yêu đơn phương, cả cuộc đời họ theo đuổi một tình yêu vô vọng, hoặc họ không thể tìm được người nào khác có thể thay thế người mà họ đã yêu, và thế là họ sống độc thân. Cũng có những người bị tàn tật hay mắc bệnh nan y, do không muốn làm khổ người khác, nên quyết định cả đời sẽ sống một mình.</p>', '80000', '2', '35', '2021-08-27 10:32:03', '2021-08-27 10:32:03', '17-32-03-27-August-2021__thumb_8101.jpg'),
(11, 'NHÌN LẠI', 'Tác giả: Thích Chân Tính\r\nMục lục\r\nLời Tựa I. Kiểm điểm ý II. Kiểm điểm khẩu III. Kiểm điểm thân IV. Kiểm điểm công phu', '<p>LỜI TỰA</p><p>Theo thông lệ, mỗi khi năm hết tết đến, các cơ quan, đoàn thể, công ty, xí nghiệp thường tổ chức lễ tổng kết để nhìn lại trong năm qua đã làm được gì, chưa làm được gì, rút ra những ưu khuyết điểm, và vạch kế hoạch, phương hướng để trong năm tới có thể phát triển tốt đẹp hơn. Là người Phật tử về chùa tu tập, chúng ta cũng nên kiểm điểm và quán xét lại sự tu học của mình trong năm qua đã đạt được những kết quả gì; ba nghiệp thân, khẩu, ý có thanh tịnh và tốt đẹp hay không? Từ đó, chúng ta mới thấy được mình đã tu học đến đâu và rút ra những bài học kinh nghiệm để giúp cho việc tu học của mình trong những năm tới được tốt hơn, tiến bộ hơn, thanh tịnh hơn và đạt được nhiều kết quả hơn.</p><p>Vì vậy, hôm nay, quý Phật tử nên lắng lòng để suy nghĩ, quán xét xem trong một năm qua mình tu học như thế nào? Cụ thể nhất là quán xét ba nghiệp thân, khẩu, ý của mình xem ý có tham, sân, si; khẩu có nói dối, nói lời ác, nói lời đâm thọc, nói lời thêu dệt; và thân có sát sinh, trộm cắp, tà dâm hay không? Trong năm qua, thân, khẩu, ý của mình có giảm bớt những nghiệp ác và tăng trưởng những nghiệp thiện hay không? Công phu tu hành của mình có vững chắc và tiến bộ hay không?</p>', '100000', '2', '6', '2021-08-27 10:33:37', '2021-08-30 07:12:50', '17-33-37-27-August-2021__thumb_18122.jpg'),
(12, 'TÂM SỰ ĐẦU NĂM', 'Tác giả: Thích Chân Tính\r\nMục lục\r\nLời Tựa I - Hoạt động hoằng pháp II - Phương tiện hoằng pháp III - Chùa Hoằng Pháp giàu hay nghèo IV - Kết', '<p>LỜI TỰA</p><p>Hôm nay ngày rằm tháng Giêng năm Giáp Ngọ (2014). Nhân dịp đầu năm mới, thầy có đôi lời tâm sự cùng toàn thể quý Phật tử về việc hoằng pháp lợi sinh của mình, để từ đó quý vị sẽ hiểu thầy, rồi từ hiểu mới thông cảm, có thông cảm chúng ta mới hợp tác để cùng nhau chuyển bánh xe pháp làm lợi ích cho mọi người. Sở dĩ thầy được xuất gia tu học như ngày hôm nay, là nhờ đọc được những kinh sách của các vị Hòa thượng viết và in tặng. Sau khi xuất gia, thầy luôn luôn nhớ ơn đức Phật - Người đã khai sáng, cũng như mở đường chỉ lối cho thầy biết con đường tu tập đưa đến giác ngộ, giải thoát, tránh những con đường tà. Thầy cũng luôn luôn biết ơn chư tôn đức Tăng Ni đã phổ biến Phật pháp giúp thầy hiểu và thấm nhuần chánh pháp mà giác ngộ đi xuất gia. Thầy phát nguyện trong cuộc đời mình phải làm công việc hoằng pháp lợi sinh, đúng như bản hoài của người xuất gia là: “Trên cầu thành Phật, dưới độ chúng sinh”. Suốt những năm qua, thầy đã nỗ lực dùng các phương tiện để đưa Phật pháp đến với mọi đối tượng, mọi ngõ ngách trong xã hội.</p><p>Phật dạy chúng sinh có nhiều căn cơ, trình độ khác nhau. Người hoằng pháp cần phải biết những nhu cầu hoặc sở thích của họ để dùng mọi phương tiện hóa độ. Ví như con người có nhiều bệnh thì cần có nhiều thuốc để chữa trị. Thầy là người xuất gia mang tâm niệm hoằng pháp lợi sinh, nên phải suy nghĩ rất nhiều phương tiện để có thể đưa Phật pháp đến với mọi đối tượng trong xã hội.</p>', '70000', '2', '0', '2021-08-27 10:35:09', '2021-09-01 00:38:37', '17-35-09-27-August-2021__thumb_22685.jpg'),
(13, 'sach moi', 'sachmoio', '<p>sachmoio</p>', '100000', '6', '15', '2021-09-01 00:40:38', '2021-09-01 00:41:20', '07-40-38-01-September-2021_hoangphap_nguoi-lanh-dao_full_08162021_081627.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `book_categories`
--

CREATE TABLE `book_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `book_categories`
--

INSERT INTO `book_categories` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'PHÁP MÔN TỊNH ĐỘ', 'PHÁP MÔN TỊNH ĐỘ', '2021-08-20 21:15:23', '2021-08-20 21:15:23'),
(2, 'SÁCH TT. THÍCH CHÂN TÍNH', 'SÁCH TT. THÍCH CHÂN TÍNH', '2021-08-20 21:19:58', '2021-08-20 21:19:58'),
(6, 'dach muc moi', 'dach muc moi', '2021-09-01 00:41:10', '2021-09-01 00:41:10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(2, 'THÔNG BẠCH', 'THÔNG BẠCH', '2021-08-20 21:21:19', '2021-08-20 21:21:19'),
(6, 'TIN TỨC', 'TIN TỨC', '2021-08-07 11:18:40', '2021-08-08 11:07:01'),
(7, 'PHẬT SỰ', 'PHẬT SỰ', '2021-08-08 11:07:21', '2021-08-08 11:07:21');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donation_infomations`
--

CREATE TABLE `donation_infomations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `abbot_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `office_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `secretary_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Bank_account` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Bank_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Bank_nane` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `donation_infomations`
--

INSERT INTO `donation_infomations` (`id`, `title`, `abbot_phone`, `office_phone`, `secretary_phone`, `email`, `address`, `Bank_account`, `Bank_number`, `Bank_nane`, `created_at`, `updated_at`) VALUES
(1, 'THÔNG TIN CÚNG DƯỜNG', '+84899 495 919', '+84947 000 788', '+84917 806 837', 'chualinhnghiadieuphap@gmail.com', 'Khu Phố 4, Thị Trấn Châu Thành, Huyện Châu Thành, TỈnh Tây Ninh', 'Lê Thị Huỳnh Vân', '050003579236', 'Ngân Hàng Sài Gòn Thương Tín Sacombank – Chi nhánh Tây Ninh.', NULL, '2021-08-09 07:31:37'),
(2, 'dsa', '', '', '', '', NULL, '', '', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_08_05_182526_create_categories_table', 2),
(5, '2021_08_08_161409_create_sliders_table', 3),
(6, '2021_08_08_165953_create_about_us_homes_table', 4),
(7, '2021_08_09_132301_create_donation_infomations_table', 5),
(8, '2021_08_12_152243_create_newsletters_table', 6),
(9, '2021_08_21_022542_create_books_table', 7),
(10, '2021_08_21_030229_add_collum_image_to_table_books', 8),
(11, '2021_08_21_034407_create_book_categories_table', 9),
(12, '2021_08_21_160949_create_sessions_table', 10),
(13, '2021_08_24_141523_create_order_products_table', 11),
(14, '2021_08_24_141630_create_orders_table', 11);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `newsletters`
--

CREATE TABLE `newsletters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `newsletters`
--

INSERT INTO `newsletters` (`id`, `name`, `phone`, `email`, `created_at`, `updated_at`) VALUES
(1, 'hao', '123132', 'hao@gmail.com', '2021-08-12 08:47:06', '2021-08-12 08:47:06'),
(3, 'hao', '12131', 'hao123@gmail.com', '2021-08-12 09:13:36', '2021-08-12 09:13:36'),
(4, 'dangky', '123123', 'dangky@gmail.com', '2021-09-01 00:39:23', '2021-09-01 00:39:23');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ls_province` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ls_district` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ls_ward` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` bigint(20) DEFAULT NULL,
  `status` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `name`, `phone`, `email`, `ls_province`, `ls_district`, `ls_ward`, `address`, `note`, `price`, `status`, `created_at`, `updated_at`) VALUES
(9, '36k', '360', '36k@gmail.com', 'Đà Nẵng', 'Hoà Vang', 'Hoà Khương', '36k', '36k', 36000, 2, '2021-08-24 09:28:22', '2021-08-24 10:16:08'),
(10, 'mau tiep', '098989', 'mautiep@gmail.com', 'Bạc Liêu', 'Hoà Bình', 'Vĩnh Hậu', 'mautiep@gmail.com', 'mautiep@gmail.com', 198000, 2, '2021-08-25 10:28:08', '2021-08-25 10:33:42'),
(11, 'hao', '09999', 'hao@gmail.com', 'Bình Phước', 'Bù Đăng', 'Thọ Sơn', '123', 'ghichughichughichughichughichu', 575000, 2, '2021-08-25 10:31:42', '2021-08-25 10:34:07'),
(12, 'hao', '054646', 'hao@gmail.com', 'Hồ Chí Minh', 'Gò Vấp', '15', '152/15', 'aaaaaaaaaaaaaa', 150030, 2, '2021-08-27 09:27:26', '2021-08-27 09:29:16'),
(13, 'mua5con15', '123123', 'mua5con15@gmail.com', 'Đắk Lắk', 'Krông Năng', 'Krông Năng', '123/321', 'noteeeeeee', 150000, -1, '2021-08-27 09:45:43', '2021-08-27 09:54:07'),
(14, 'tien', '123456', 'tien@gmail.com', 'Cao Bằng', 'Thông Nông', 'Thanh Long', 'tien/123', 'ghi chuuuuuuuuuuuu ne', 30000, 1, '2021-08-27 09:57:10', '2021-08-27 09:58:04'),
(15, 'Thanh Vân', '02313', 'van@gmail.com', 'Bắc Kạn', 'Bạch Thông', 'Tân Tiến', '324/21', 'thanhvan', 420000, 2, '2021-08-27 10:41:02', '2021-08-30 07:23:42'),
(16, 'huynh', '098989', 'huynh@gmail.com', 'Tây Ninh', 'Gò Dầu', 'Hiệp Thạnh', 'huynh', 'huynhhuynhhuynh', 100000, 2, '2021-08-30 07:12:50', '2021-08-30 07:33:50'),
(17, 'Kieuoanh', '01989817', 'kieuoanh@gmail.com', 'An Giang', 'Chợ Mới', 'Long Giang', '123/1 ABC', 'muahang', 12000, 2, '2021-08-31 05:41:53', '2021-08-31 06:49:04'),
(18, 'hao van', '0123123', 'hao@gmail.com', 'Quảng Ninh', 'Hải Hà', 'Quảng Phong', '123123', 'haohao', 910000, 2, '2021-09-01 00:38:37', '2021-09-01 00:42:32');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_products`
--

CREATE TABLE `order_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order_products`
--

INSERT INTO `order_products` (`id`, `order_id`, `product_id`, `qty`, `created_at`, `updated_at`) VALUES
(1, 3, 3, NULL, '2021-08-24 07:52:52', '2021-08-24 07:52:52'),
(2, 3, 1, NULL, '2021-08-24 07:52:52', '2021-08-24 07:52:52'),
(3, 4, 3, NULL, '2021-08-24 08:03:30', '2021-08-24 08:03:30'),
(4, 4, 1, NULL, '2021-08-24 08:03:30', '2021-08-24 08:03:30'),
(5, 5, 1, NULL, '2021-08-24 08:16:08', '2021-08-24 08:16:08'),
(6, 6, 1, NULL, '2021-08-24 08:23:19', '2021-08-24 08:23:19'),
(7, 7, 1, NULL, '2021-08-24 08:25:13', '2021-08-24 08:25:13'),
(8, 8, 3, 1, '2021-08-24 09:18:52', '2021-08-24 09:18:52'),
(9, 9, 3, 3, '2021-08-24 09:28:22', '2021-08-24 09:28:22'),
(10, 10, 3, 4, '2021-08-25 10:28:08', '2021-08-25 10:28:08'),
(11, 10, 4, 5, '2021-08-25 10:28:08', '2021-08-25 10:28:08'),
(12, 11, 7, 23, '2021-08-25 10:31:42', '2021-08-25 10:31:42'),
(13, 12, 8, 1, '2021-08-27 09:27:26', '2021-08-27 09:27:26'),
(14, 12, 5, 3, '2021-08-27 09:27:26', '2021-08-27 09:27:26'),
(15, 12, 4, 2, '2021-08-27 09:27:26', '2021-08-27 09:27:26'),
(16, 13, 8, 5, '2021-08-27 09:45:43', '2021-08-27 09:45:43'),
(17, 14, 8, 1, '2021-08-27 09:57:10', '2021-08-27 09:57:10'),
(18, 15, 8, 14, '2021-08-27 10:41:02', '2021-08-27 10:41:02'),
(19, 16, 11, 1, '2021-08-30 07:12:50', '2021-08-30 07:12:50'),
(20, 16, 4, 0, '2021-08-30 07:12:50', '2021-08-30 07:12:50'),
(21, 17, 3, 1, '2021-08-31 05:41:53', '2021-08-31 05:41:53'),
(22, 18, 12, 13, '2021-09-01 00:38:37', '2021-09-01 00:38:37');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `description`, `content`, `image`, `created_at`, `updated_at`) VALUES
(1, 'DIỆU PHÁP', 'LINH NGHĨA TỰ', '<p>TỌA&nbsp;LẠC:&nbsp;Khu&nbsp;Phố&nbsp;4,&nbsp;Châu&nbsp;Thành,&nbsp;Tây&nbsp;Ninh</p>', '13-11-41-09-August-2021_Mask Group 30.png', '2021-08-08 09:44:21', '2021-08-09 06:11:41'),
(3, 'title 2', 'title 2title 2title 2', '<p>title 2title 2title 2title 2title 2title 2title 2title 2title 2title 2</p>', '12-44-00-16-August-2021_mau-chua-2-tang-3.jpg', '2021-08-16 05:44:00', '2021-08-16 05:44:00'),
(4, 'slider moi', 'slider moi', '<p>slider moi</p>', '07-44-21-01-September-2021_1.jpg', '2021-09-01 00:44:21', '2021-09-01 00:44:21');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Hao', 'haovan2505@gmail.com', NULL, '$2y$10$9qXMT4C1Yt3wJfDWEYTEb.Hi73E.rSZt8qc6xvTgs3x27GZycLMbi', NULL, '2021-08-09 10:10:11', '2021-08-09 10:10:11');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `about_us_homes`
--
ALTER TABLE `about_us_homes`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `blogs_categories`
--
ALTER TABLE `blogs_categories`
  ADD PRIMARY KEY (`blog_id`,`category_id`),
  ADD KEY `blogs_categorues_category_id_index` (`category_id`) USING BTREE,
  ADD KEY `blogs_categorues_blog_id_index` (`blog_id`) USING BTREE;

--
-- Chỉ mục cho bảng `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `book_categories`
--
ALTER TABLE `book_categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `donation_infomations`
--
ALTER TABLE `donation_infomations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order_products`
--
ALTER TABLE `order_products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `sessions`
--
ALTER TABLE `sessions`
  ADD UNIQUE KEY `sessions_id_unique` (`id`);

--
-- Chỉ mục cho bảng `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `about_us_homes`
--
ALTER TABLE `about_us_homes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `book_categories`
--
ALTER TABLE `book_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `donation_infomations`
--
ALTER TABLE `donation_infomations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `order_products`
--
ALTER TABLE `order_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
