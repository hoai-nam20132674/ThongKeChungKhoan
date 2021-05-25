-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 25, 2021 lúc 01:53 PM
-- Phiên bản máy phục vụ: 10.1.38-MariaDB
-- Phiên bản PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `thongkechungkhoan`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bcids`
--

CREATE TABLE `bcids` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_id` bigint(20) UNSIGNED NOT NULL,
  `cate_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bcids`
--

INSERT INTO `bcids` (`id`, `blog_id`, `cate_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2021-05-08 08:08:56', '2021-05-08 08:08:56'),
(2, 2, 1, '2021-05-08 19:37:26', '2021-05-08 19:37:26'),
(3, 3, 1, '2021-05-08 19:38:01', '2021-05-08 19:38:01'),
(4, 4, 1, '2021-05-08 22:31:53', '2021-05-08 22:31:53');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bills`
--

CREATE TABLE `bills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ma` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tiencan` int(11) DEFAULT NULL,
  `phiphatsinh` int(11) DEFAULT NULL,
  `philuukho` int(11) DEFAULT NULL,
  `phiship` int(11) DEFAULT NULL,
  `chongsoc` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `seo_description` longtext COLLATE utf8mb4_unicode_ci,
  `seo_keyword` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display` tinyint(1) NOT NULL,
  `avata` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hot` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `blogs`
--

INSERT INTO `blogs` (`id`, `name`, `user_id`, `title`, `content`, `seo_description`, `seo_keyword`, `url`, `display`, `avata`, `hot`, `created_at`, `updated_at`) VALUES
(1, 'THÔNG BÁO: Giảm giá cước vận chuyển quốc tế', 1, 'THÔNG BÁO: Giảm giá cước vận chuyển quốc tế', '<p>tin tức cập nhật</p>', 'tin tức cập nhật', 'tin tức cập nhật', 'tin-tuc-cap-nhat-moi-bi1', 1, 'service1.jpg', 1, '2021-05-08 08:08:56', '2021-05-08 20:30:50'),
(2, 'THÔNG BÁO: Điều chỉnh tỷ giá đồng NDT', 1, 'THÔNG BÁO: Điều chỉnh tỷ giá đồng NDT', '<p>TH&Ocirc;NG B&Aacute;O: Điều chỉnh tỷ gi&aacute; đồng NDT&nbsp;</p>', 'THÔNG BÁO: Điều chỉnh tỷ giá đồng NDT', 'THÔNG BÁO: Điều chỉnh tỷ giá đồng NDT', 'thong-bao-dieu-chinh-ty-gia-dong-ndt-bi2', 1, 'service2.jpg', 1, '2021-05-08 19:37:26', '2021-05-08 20:31:10'),
(3, 'THÔNG BÁO: Lịch nghỉ lễ ngày 30/04-01/05', 1, 'THÔNG BÁO: Lịch nghỉ lễ ngày 30/04-01/05', '<p>TH&Ocirc;NG B&Aacute;O: Lịch nghỉ lễ ng&agrave;y 30/04-01/05</p>', 'THÔNG BÁO: Lịch nghỉ lễ ngày 30/04-01/05', 'THÔNG BÁO: Lịch nghỉ lễ ngày 30/04-01/05', 'thong-bao-lich-nghi-le-ngay-3004-0105-bi3', 1, 'service3.jpg', 1, '2021-05-08 19:38:01', '2021-05-08 20:31:39'),
(4, 'THÔNG BÁO: Lịch nghỉ lễ ngày', 1, 'demotop.redcar.com.vn', '<p>demotop.redcar.com.vn</p>', 'demotop.redcar.com.vn', 'demotop.redcar.com.vn', 'demotopredcarcomvn-bi4', 1, 'service1.jpg', 1, '2021-05-08 22:31:53', '2021-05-08 22:31:53');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blog_cates`
--

CREATE TABLE `blog_cates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` bigint(20) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_description` longtext COLLATE utf8mb4_unicode_ci,
  `seo_keyword` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avata` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `blog_cates`
--

INSERT INTO `blog_cates` (`id`, `parent_id`, `name`, `title`, `seo_description`, `seo_keyword`, `url`, `avata`, `display`, `created_at`, `updated_at`) VALUES
(1, NULL, 'TIN TỨC', 'TIN TỨC', 'TIN TỨC', 'TIN TỨC', 'tin-tuc-test-bc1', '7fc7c76d-1144-46cb-8660-da82c7cda379.jpg', 1, '2021-05-08 08:07:41', '2021-05-08 08:08:12');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `phone`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Nguyễn Hoài Nam', '0848384333', 'namnnguyen@gmail.com', 'VẬN CHUYỂN HÀNG TRUNG QUỐC 2', '2021-05-08 11:37:34', '2021-05-08 11:37:34'),
(2, 'Bùi Thị Mến', '0848384333', 'menbt@gmail.com', 'VẬN CHUYỂN HÀNG TRUNG QUỐC 3', '2021-05-08 11:44:00', '2021-05-08 11:44:00'),
(3, 'Nam Nguyễn', '0848384333', 'namnguyen2013@gmail.com', 'Gọi tư vấn ngay', '2021-05-10 04:48:38', '2021-05-10 04:48:38');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `delivery_notes`
--

CREATE TABLE `delivery_notes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nt` datetime DEFAULT NULL,
  `ktn` datetime DEFAULT NULL,
  `ns` datetime DEFAULT NULL,
  `nth` datetime DEFAULT NULL,
  `tiencan` int(11) DEFAULT NULL,
  `phiphatsinh` int(11) DEFAULT NULL,
  `philuukho` int(11) DEFAULT NULL,
  `phiship` int(11) DEFAULT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kx` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nvx` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pids` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `delivery_notes`
--

INSERT INTO `delivery_notes` (`id`, `name`, `email`, `phone`, `nt`, `ktn`, `ns`, `nth`, `tiencan`, `phiphatsinh`, `philuukho`, `phiship`, `message`, `status`, `kx`, `nvx`, `pids`, `created_at`, `updated_at`) VALUES
(9, 'Nguyễn Hoài Nam', 'namnguyen@gmail.com', '0848384333', '2021-05-07 13:57:00', '2021-05-08 02:58:00', '2021-05-08 13:57:00', '2021-05-09 13:57:00', 200000, 10000, 10000, 30000, 'Giao hàng sớm nhé', 'Đã trả hàng', 'Hà Nội 2', 'Nguyễn Văn B', ',1', '2021-05-08 06:57:43', '2021-05-08 07:27:23');

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `target` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_id` int(11) DEFAULT NULL,
  `parent_id` bigint(20) DEFAULT NULL,
  `stt` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `menus`
--

INSERT INTO `menus` (`id`, `title`, `url`, `icon`, `target`, `type`, `type_id`, `parent_id`, `stt`, `created_at`, `updated_at`) VALUES
(1, 'TRANG CHỦ', NULL, NULL, '_self', 'custom-link', 0, NULL, 0, '2021-05-08 10:34:17', '2021-05-08 10:36:59'),
(2, 'GIỚI THIỆU', NULL, NULL, '_self', 'custom-link', 0, NULL, 1, '2021-05-08 10:34:17', '2021-05-08 10:37:00'),
(3, 'TIN TỨC', 'tin-tuc-test-bc1', 'undefined', '_self', 'blogCategory', 1, NULL, 3, '2021-05-08 10:34:17', '2021-05-08 18:38:21'),
(4, 'LIÊN HỆ', NULL, NULL, '_self', 'custom-link', 0, NULL, 4, '2021-05-08 10:34:17', '2021-05-08 18:38:22'),
(5, 'DỊCH VỤ', 'dich-vu-sc1', 'undefined', '_self', 'serviceCategory', 1, NULL, 2, '2021-05-08 18:38:20', '2021-05-08 18:38:20'),
(6, 'VẬN CHUYỂN HÀNG TRUNG QUỐC', 'http://localhost:8000/van-chuyen-hang-trung-quoc-si2', NULL, '_self', 'custom-link', 0, 5, 0, '2021-05-08 19:03:36', '2021-05-08 19:03:36');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(90, '2014_10_12_000000_create_users_table', 1),
(91, '2014_10_12_100000_create_password_resets_table', 1),
(92, '2019_08_19_000000_create_failed_jobs_table', 1),
(93, '2020_07_06_075835_create_service_cates_table', 1),
(94, '2020_07_06_095540_create_services_table', 1),
(95, '2020_07_06_095747_create_blog_cates_table', 1),
(96, '2020_07_06_095800_create_blogs_table', 1),
(97, '2020_07_06_095845_create_pages_table', 1),
(98, '2020_07_06_095913_create_menus_table', 1),
(99, '2020_07_11_114458_create_b_c_i_d_s_table', 1),
(100, '2020_07_13_080637_create_s_c_i_d_s_table', 1),
(101, '2020_07_15_101004_create_systems_table', 1),
(102, '2020_07_19_180327_create_contacts_table', 1),
(103, '2021_04_24_133051_create_sacks_table', 1),
(104, '2021_04_28_091919_create_packages_table', 1),
(105, '2021_04_28_094752_create_bills_table', 1),
(106, '2021_04_29_023003_create_properties_table', 1),
(107, '2021_04_29_023322_create_s_p_i_d_s_table', 1),
(108, '2021_04_29_023332_create_p_p_i_d_s_table', 1),
(109, '2021_05_04_100229_create_delivery_notes_table', 1),
(110, '2021_05_07_041201_create_stts_table', 1),
(112, '2021_05_08_160348_create_sliders_table', 2),
(113, '2021_05_13_170258_create_popups_table', 3),
(114, '2021_05_22_000015_create_stock_exchanges_table', 4),
(115, '2021_05_22_000227_create_stocks_table', 4),
(116, '2021_05_22_000400_create_s_s_i_d_s_table', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `packages`
--

CREATE TABLE `packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ma` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mvd` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl` int(11) NOT NULL DEFAULT '1',
  `dongiacan` int(11) DEFAULT NULL,
  `dongiakhoi` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `sack_id` bigint(20) UNSIGNED NOT NULL,
  `mhx` datetime DEFAULT NULL,
  `stqph` datetime DEFAULT NULL,
  `ktqnh` datetime DEFAULT NULL,
  `xktq` datetime DEFAULT NULL,
  `tkvn` datetime DEFAULT NULL,
  `dth` datetime DEFAULT NULL,
  `kkc` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cannang` int(11) DEFAULT NULL,
  `dai` int(11) DEFAULT NULL,
  `rong` int(11) DEFAULT NULL,
  `cao` int(11) DEFAULT NULL,
  `cnqd` int(11) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mpxk` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `packages`
--

INSERT INTO `packages` (`id`, `ma`, `mvd`, `sl`, `dongiacan`, `dongiakhoi`, `price`, `sack_id`, `mhx`, `stqph`, `ktqnh`, `xktq`, `tkvn`, `dth`, `kkc`, `cannang`, `dai`, `rong`, `cao`, `cnqd`, `name`, `phone`, `message`, `status`, `mpxk`, `created_at`, `updated_at`) VALUES
(1, 'KIENHANG01-MK1', NULL, 1, NULL, NULL, NULL, 1, '2021-05-05 11:42:00', '2021-05-05 11:42:00', NULL, NULL, NULL, NULL, 'Kho Hà Nội', 1000, 100, 12, 13, NULL, 'Nguyễn Hoài Nam', '0848384333', 'Giao hàng sớm', 'Xuất kho Trung Quốc', 9, '2021-05-06 21:42:41', '2021-05-08 06:57:43'),
(2, 'adasd-MK2', 'adsdafasasdasđâs', 1, 12000, 150000, 21600, 1, '2021-05-09 03:53:00', NULL, NULL, NULL, NULL, NULL, 'Kho Hà Nội', 1000, 100, 12, 120, 144000, 'Nam', '0848384666', 'giao sớm', 'Chờ xử lý', NULL, '2021-05-08 20:53:45', '2021-05-13 09:34:30'),
(3, 'mk1-MK3', 'adsdafasasdas', 10, 12000, 16000, 230400, 1, NULL, NULL, NULL, NULL, NULL, NULL, 'Kho Hồ Chí Minh', 12000, 120, 1200, 100, 14400000, 'Nam Nguyễn', '0848384333', '13/05', 'Chờ xử lý', NULL, '2021-05-13 07:04:52', '2021-05-13 09:16:51'),
(4, '-MK4', '123sdfdfa', 10, 17000, 150000, 225067500, 1, '2021-05-13 14:32:00', '2021-05-13 16:32:00', '2021-05-13 19:32:00', '2021-05-13 20:32:00', '2021-05-14 14:32:00', '2021-05-14 17:32:00', 'Kho Đà Nẵng', 12000, 100, 100, 150045, 1500450000, 'Nam Nguyễn', '0848384333', 'Giao hàng sớm', 'Chờ xử lý', NULL, '2021-05-13 07:08:50', '2021-05-13 08:52:57');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `seo_description` longtext COLLATE utf8mb4_unicode_ci,
  `seo_keyword` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `popups`
--

CREATE TABLE `popups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `href` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `target` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `display` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `popups`
--

INSERT INTO `popups` (`id`, `href`, `url`, `target`, `display`, `created_at`, `updated_at`) VALUES
(2, '#', '7fc7c76d-1144-46cb-8660-da82c7cda379.jpg', '_self', 0, '2021-05-13 10:44:15', '2021-05-13 10:49:24'),
(3, '#', 'felix-uresti-F5uQIJRoyb0-unsplash.jpg', '_self', 0, '2021-05-13 10:47:59', '2021-05-13 10:49:10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ppids`
--

CREATE TABLE `ppids` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `package_id` bigint(20) UNSIGNED NOT NULL,
  `properties_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ppids`
--

INSERT INTO `ppids` (`id`, `package_id`, `properties_id`, `created_at`, `updated_at`) VALUES
(1, 2, 1, '2021-05-08 20:53:45', '2021-05-08 20:53:45'),
(2, 3, 1, '2021-05-13 07:04:52', '2021-05-13 07:04:52'),
(3, 4, 1, '2021-05-13 07:08:50', '2021-05-13 07:08:50');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `properties`
--

CREATE TABLE `properties` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `properties`
--

INSERT INTO `properties` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Đóng gỗ', '2021-05-06 21:17:27', '2021-05-06 21:40:02');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sacks`
--

CREATE TABLE `sacks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ma` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ktqnh` datetime DEFAULT NULL,
  `xktq` datetime DEFAULT NULL,
  `tkvn` datetime DEFAULT NULL,
  `ht` datetime DEFAULT NULL,
  `history` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sacks`
--

INSERT INTO `sacks` (`id`, `ma`, `ktqnh`, `xktq`, `tkvn`, `ht`, `history`, `created_at`, `updated_at`) VALUES
(1, 'BAOHANG01-MB1', '2021-05-06 11:41:00', NULL, NULL, NULL, NULL, '2021-05-06 21:41:13', '2021-05-06 21:41:13'),
(2, 'adasd-MB2', '2021-05-10 03:52:00', '2021-05-10 03:52:00', '2021-05-11 03:52:00', '2021-05-10 03:52:00', NULL, '2021-05-08 20:52:19', '2021-05-08 20:52:19');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `scids`
--

CREATE TABLE `scids` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `cate_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `scids`
--

INSERT INTO `scids` (`id`, `service_id`, `cate_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2021-05-08 18:38:53', '2021-05-08 18:38:53'),
(2, 2, 1, '2021-05-08 18:39:08', '2021-05-08 18:39:08'),
(3, 3, 1, '2021-05-08 18:39:22', '2021-05-08 18:39:22');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `seo_description` longtext COLLATE utf8mb4_unicode_ci,
  `seo_keyword` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display` tinyint(1) DEFAULT NULL,
  `hot` tinyint(1) NOT NULL,
  `avata` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `services`
--

INSERT INTO `services` (`id`, `name`, `title`, `content`, `seo_description`, `seo_keyword`, `url`, `display`, `hot`, `avata`, `created_at`, `updated_at`) VALUES
(1, 'VẬN CHUYỂN HÀNG TRUNG QUỐC 2', 'VẬN CHUYỂN HÀNG TRUNG QUỐC', '<p>Với nhiều năm kinh nghiệm trong lĩnh vực vận chuyển h&agrave;ng h&oacute;a, Ch&uacute;ng t&ocirc;i được rất nhiều kh&aacute;ch h&agrave;ng lựa chọn l&agrave; đối t&aacute;c vận chuyển h&agrave;ng từ Trung Quốc về Việt Nam</p>\r\n\r\n<div id=\"gtx-trans\" style=\"left:303px; position:absolute; top:-6px\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>', 'Với nhiều năm kinh nghiệm trong lĩnh vực vận chuyển hàng hóa, Chúng tôi được rất nhiều khách hàng lựa chọn là đối tác vận chuyển hàng từ Trung Quốc về Việt Nam', 'VẬN CHUYỂN HÀNG TRUNG QUỐC', 'van-chuyen-hang-trung-quoc-test-si1', 1, 1, 'service1.jpg', '2021-05-08 07:46:30', '2021-05-08 11:23:02'),
(2, 'VẬN CHUYỂN HÀNG TRUNG QUỐC', 'VẬN CHUYỂN HÀNG TRUNG QUỐC', '<p>Với nhiều năm kinh nghiệm trong lĩnh vực vận chuyển h&agrave;ng h&oacute;a, Ch&uacute;ng t&ocirc;i được rất nhiều kh&aacute;ch h&agrave;ng lựa chọn l&agrave; đối t&aacute;c vận chuyển h&agrave;ng từ Trung Quốc về Việt Nam</p>\r\n\r\n<div id=\"gtx-trans\" style=\"left:320px; position:absolute; top:-6px\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>', 'Với nhiều năm kinh nghiệm trong lĩnh vực vận chuyển hàng hóa, Chúng tôi được rất nhiều khách hàng lựa chọn là đối tác vận chuyển hàng từ Trung Quốc về Việt Nam', 'VẬN CHUYỂN HÀNG TRUNG QUỐC', 'van-chuyen-hang-trung-quoc-si2', 1, 1, 'service2.jpg', '2021-05-08 11:15:14', '2021-05-08 11:22:44'),
(3, 'VẬN CHUYỂN HÀNG TRUNG QUỐC 3', 'VẬN CHUYỂN HÀNG TRUNG QUỐC 3', '<p>Với nhiều năm kinh nghiệm trong lĩnh vực vận chuyển h&agrave;ng h&oacute;a, Ch&uacute;ng t&ocirc;i được rất nhiều kh&aacute;ch h&agrave;ng lựa chọn l&agrave; đối t&aacute;c vận chuyển h&agrave;ng từ Trung Quốc về Việt Nam</p>', 'Với nhiều năm kinh nghiệm trong lĩnh vực vận chuyển hàng hóa, Chúng tôi được rất nhiều khách hàng lựa chọn là đối tác vận chuyển hàng từ Trung Quốc về Việt Nam', 'VẬN CHUYỂN HÀNG TRUNG QUỐC 3', 'van-chuyen-hang-trung-quoc-3-si3', 1, 1, 'service3.jpg', '2021-05-08 11:15:43', '2021-05-08 11:22:27');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `service_cates`
--

CREATE TABLE `service_cates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` bigint(20) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_description` longtext COLLATE utf8mb4_unicode_ci,
  `seo_keyword` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avata` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `service_cates`
--

INSERT INTO `service_cates` (`id`, `parent_id`, `name`, `title`, `seo_description`, `seo_keyword`, `url`, `avata`, `display`, `created_at`, `updated_at`) VALUES
(1, NULL, 'DỊCH VỤ', 'DỊCH VỤ', 'DỊCH VỤ', 'DỊCH VỤ', 'dich-vu-sc1', 'service2.jpg', 1, '2021-05-08 18:37:29', '2021-05-08 18:37:29');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `href` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `target` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `display` tinyint(1) DEFAULT NULL,
  `stt` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sliders`
--

INSERT INTO `sliders` (`id`, `href`, `title`, `description`, `url`, `target`, `display`, `stt`, `created_at`, `updated_at`) VALUES
(1, '#', 'VẬN CHUYỂN HÀNG VIỆT NAM TRUNG QUỐC', 'Với nhiều năm kinh nghiệm trong lĩnh vực vận chuyển hàng hóa, Chúng tôi được rất nhiều khách hàng lựa chọn là đối tác vận chuyển hàng từ Trung Quốc về Việt Nam', '2.jpg', '_self', 1, NULL, '2021-05-08 09:30:05', '2021-05-08 09:30:05');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `spids`
--

CREATE TABLE `spids` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sack_id` bigint(20) UNSIGNED NOT NULL,
  `properties_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `spids`
--

INSERT INTO `spids` (`id`, `sack_id`, `properties_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2021-05-06 21:41:13', '2021-05-06 21:41:13'),
(2, 2, 1, '2021-05-08 20:52:19', '2021-05-08 20:52:19');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ssids`
--

CREATE TABLE `ssids` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `stock_id` bigint(20) UNSIGNED NOT NULL,
  `se_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ssids`
--

INSERT INTO `ssids` (`id`, `stock_id`, `se_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2021-05-21 19:59:49', '2021-05-21 19:59:49'),
(2, 1, 2, '2021-05-21 19:59:49', '2021-05-21 19:59:49'),
(3, 2, 2, '2021-05-22 05:08:57', '2021-05-22 05:08:57');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `stocks`
--

CREATE TABLE `stocks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ma` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tg` longtext COLLATE utf8mb4_unicode_ci,
  `tc` longtext COLLATE utf8mb4_unicode_ci,
  `gt` longtext COLLATE utf8mb4_unicode_ci,
  `gs` longtext COLLATE utf8mb4_unicode_ci,
  `g` longtext COLLATE utf8mb4_unicode_ci,
  `kll` longtext COLLATE utf8mb4_unicode_ci,
  `tkl_old` longtext COLLATE utf8mb4_unicode_ci,
  `tkl` longtext COLLATE utf8mb4_unicode_ci,
  `tb10` longtext COLLATE utf8mb4_unicode_ci,
  `status` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `stocks`
--

INSERT INTO `stocks` (`id`, `ma`, `tg`, `tc`, `gt`, `gs`, `g`, `kll`, `tkl_old`, `tkl`, `tb10`, `status`, `created_at`, `updated_at`) VALUES
(1, 'AAA', 'get-data-value?url=https://s.cafef.vn/Lich-su-giao-dich-AAA-6.chn&start=<td style=\"width:20%;\" class=\"Item_DateItem\">&finish=</td>', 'get-data-value?url=https://s.cafef.vn/Lich-su-giao-dich-AAA-6.chn&start=<span class=\"title\">Tham chiếu: </span><span class=\"price\">&finish=</span>', 'get-data-value?url=http://s.cafef.vn/hose/AAA-cong-ty-co-phan-nhua-an-phat-xanh-.chn&start=<div class=\"r pink\" id=\"CE\">&finish=</div>', 'get-data-value?url=http://s.cafef.vn/hose/AAA-cong-ty-co-phan-nhua-an-phat-xanh-.chn&start=<div class=\"r fl\" id=\"FL\">&finish=</div>', 'get-data-value?url=https://s.cafef.vn/Lich-su-giao-dich-AAA-6.chn&start=</td><td style=\"width:25%;\" class=\"Item_Price10\">&finish=</span>', 'get-data-value?url=https://s.cafef.vn/Lich-su-giao-dich-AAA-6.chn&start=</span></td><td style=\"width:20%;\" class=\"Item_Price10\">&finish=</td>', 'get-data-value?url=https://s.cafef.vn/Lich-su-giao-dich-AAA-1.chn&start=<img src=\'http://cafef3.vcmedia.vn/images/Scontrols/Images/LSG/up_.gif\' align=\'absmiddle\' /> </td><td class=\"Item_Price10\">&finish=</td>', 'get-data-value?url=https://s.cafef.vn/Lich-su-giao-dich-AAA-6.chn&start=<span class=\"price\"><b class=\"totalvolume\">&finish=</b>', 'get-data-value?url=http://s.cafef.vn/hose/AAA-cong-ty-co-phan-nhua-an-phat-xanh-.chn&start=<b>KLGD khớp lệnh trung bình 10 phiên:</b></div><div class=\"r\">&finish=</div>', 1, '2021-05-21 19:59:49', '2021-05-22 11:02:54'),
(2, 'AAM', 'get-data-value?url=https://s.cafef.vn/Lich-su-giao-dich-AAM-6.chn&start=<td style=\"width:20%;\" class=\"Item_DateItem\">&finish=</td>', 'get-data-value?url=https://s.cafef.vn/Lich-su-giao-dich-AAM-6.chn&start=<span class=\"title\">Tham chiếu: </span><span class=\"price\">&finish=</span>', 'get-data-value?url=http://s.cafef.vn/hose/AAM-cong-ty-co-phan-nhua-an-phat-xanh-.chn&start=<div class=\"r pink\" id=\"CE\">&finish=</div>', 'get-data-value?url=http://s.cafef.vn/hose/AAM-cong-ty-co-phan-nhua-an-phat-xanh-.chn&start=<div class=\"r fl\" id=\"FL\">&finish=</div>', 'get-data-value?url=https://s.cafef.vn/Lich-su-giao-dich-AAM-6.chn&start=</td><td style=\"width:25%;\" class=\"Item_Price10\">&finish=</span>', 'get-data-value?url=https://s.cafef.vn/Lich-su-giao-dich-AAM-6.chn&start=</span></td><td style=\"width:20%;\" class=\"Item_Price10\">&finish=</td>', 'get-data-value?url=https://s.cafef.vn/Lich-su-giao-dich-AAM-1.chn&start=<img src=\'http://cafef3.vcmedia.vn/images/Scontrols/Images/LSG/up_.gif\' align=\'absmiddle\' /> </td><td class=\"Item_Price10\">&finish=</td>', 'get-data-value?url=https://s.cafef.vn/Lich-su-giao-dich-AAM-6.chn&start=<span class=\"price\"><b class=\"totalvolume\">&finish=</b>', 'get-data-value?url=http://s.cafef.vn/hose/AAM-cong-ty-co-phan-nhua-an-phat-xanh-.chn&start=<b>KLGD khớp lệnh trung bình 10 phiên:</b></div><div class=\"r\">&finish=</div>', 1, '2021-05-22 05:08:57', '2021-05-25 11:43:57');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `stock_exchanges`
--

CREATE TABLE `stock_exchanges` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `stock_exchanges`
--

INSERT INTO `stock_exchanges` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'THEO DÕI RIÊNG', 1, '2021-05-21 19:08:16', '2021-05-21 19:08:16'),
(2, 'HOSE', 1, '2021-05-21 19:10:35', '2021-05-21 19:10:35'),
(3, 'HNX', 1, '2021-05-21 19:10:46', '2021-05-21 19:10:46'),
(5, 'UPCOM', 1, '2021-05-21 19:13:08', '2021-05-21 19:13:08');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `stts`
--

CREATE TABLE `stts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `stts`
--

INSERT INTO `stts` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Chờ xử lý', '2021-05-06 21:33:18', '2021-05-06 21:37:28'),
(2, 'Xuất kho Trung Quốc', '2021-05-06 21:34:12', '2021-05-06 21:34:12');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `systems`
--

CREATE TABLE `systems` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shortcut_logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_keyword` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_description` longtext COLLATE utf8mb4_unicode_ci,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zalo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `css` longtext COLLATE utf8mb4_unicode_ci,
  `script` longtext COLLATE utf8mb4_unicode_ci,
  `map` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `systems`
--

INSERT INTO `systems` (`id`, `name`, `logo`, `shortcut_logo`, `banner`, `title`, `seo_keyword`, `seo_description`, `facebook`, `instagram`, `zalo`, `youtube`, `website`, `address`, `phone`, `email`, `css`, `script`, `map`, `created_at`, `updated_at`) VALUES
(1, 'Website Vận Chuyển Việt Nam Trung Quốc', 'logo.png', NULL, NULL, 'Website Vận Chuyển Việt Nam Trung Quốc', 'Website Vận Chuyển Việt Nam Trung Quốc', 'Website Vận Chuyển Việt Nam Trung Quốc', NULL, NULL, NULL, NULL, 'https://demotop.redcar.com.vn/', 'Nam Đồng - Đống Đa - Hà Nội', '0123456789', 'hotro@gmail.com', NULL, NULL, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.465405574465!2d105.8314164151702!3d21.014056093655448!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab815cd0e341%3A0xc46f2b5263cf2d3b!2zMTQgUGjhu5EgTmFtIMSQ4buTbmcsIE5hbSDEkOG7k25nLCDEkOG7kW5nIMSQYSwgSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1620622259315!5m2!1svi!2s\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', NULL, '2021-05-10 04:52:06');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` tinyint(1) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `phone`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Nam Nguyễn', 'namnguyen20132674@gmail.com', NULL, '$2y$10$2LEnrvNwqf0oKQ/Cr8LWreQ8cPcYnIqJ1UXyUosdAAuc/wz6fZWj6', '0848384333', 1, NULL, NULL, NULL),
(2, 'Người dùng 1', 'test@gmail.com', NULL, '$2y$10$W2NddwOLNWK7Aiaz2i8RQeLlxAnQtSGeuHVAHSnpTbIAWbNNzaaCq', '0342911168', 2, NULL, '2021-05-08 03:14:22', '2021-05-08 03:14:22'),
(3, 'Bùi Thị Mến', 'menbui@gmail.com', NULL, '$2y$10$3l2y168pfphfwwgo685DLeJuvMmkbdgsPCnm832ERsTT.AlJ7iKRC', '0842829222', 2, NULL, '2021-05-08 06:24:23', '2021-05-08 06:24:23'),
(4, 'Nam Nguyễn', 'nam@gmail.com', NULL, '$2y$10$APGJvzGPrHH22NECGpDnueuCtROGtYSQTo.ixFbvwFViuhEldbD0W', '0848384555', 2, NULL, '2021-05-08 17:27:42', '2021-05-08 17:27:42'),
(5, '0848384666', 'superadmin@gmail.com', NULL, '$2y$10$ap6ZqoGK5qzXtEXzHQk43O58h30VJAPhbC1LFDSY3Di7IDAtopI1K', '0848384666', 2, NULL, '2021-05-08 17:35:28', '2021-05-08 17:35:28'),
(6, 'A Xuyên', 'axuyen@gmail.com', NULL, '$2y$10$D5KowiEzRvVjNsANnly39O26wDQr/jw518saH.gsyXf3O3/7VLpj.', '0946173333', 1, NULL, '2021-05-08 22:32:24', '2021-05-08 22:32:24');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bcids`
--
ALTER TABLE `bcids`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bcids_blog_id_foreign` (`blog_id`),
  ADD KEY `bcids_cate_id_foreign` (`cate_id`);

--
-- Chỉ mục cho bảng `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `bills_ma_unique` (`ma`);

--
-- Chỉ mục cho bảng `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blogs_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `blog_cates`
--
ALTER TABLE `blog_cates`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `delivery_notes`
--
ALTER TABLE `delivery_notes`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `packages_ma_unique` (`ma`),
  ADD KEY `packages_sack_id_foreign` (`sack_id`);

--
-- Chỉ mục cho bảng `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `popups`
--
ALTER TABLE `popups`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `ppids`
--
ALTER TABLE `ppids`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ppids_package_id_foreign` (`package_id`),
  ADD KEY `ppids_properties_id_foreign` (`properties_id`);

--
-- Chỉ mục cho bảng `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sacks`
--
ALTER TABLE `sacks`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sacks_ma_unique` (`ma`);

--
-- Chỉ mục cho bảng `scids`
--
ALTER TABLE `scids`
  ADD PRIMARY KEY (`id`),
  ADD KEY `scids_service_id_foreign` (`service_id`),
  ADD KEY `scids_cate_id_foreign` (`cate_id`);

--
-- Chỉ mục cho bảng `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `service_cates`
--
ALTER TABLE `service_cates`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `spids`
--
ALTER TABLE `spids`
  ADD PRIMARY KEY (`id`),
  ADD KEY `spids_sack_id_foreign` (`sack_id`),
  ADD KEY `spids_properties_id_foreign` (`properties_id`);

--
-- Chỉ mục cho bảng `ssids`
--
ALTER TABLE `ssids`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ssids_stock_id_foreign` (`stock_id`),
  ADD KEY `ssids_se_id_foreign` (`se_id`);

--
-- Chỉ mục cho bảng `stocks`
--
ALTER TABLE `stocks`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `stocks_ma_unique` (`ma`);

--
-- Chỉ mục cho bảng `stock_exchanges`
--
ALTER TABLE `stock_exchanges`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `stts`
--
ALTER TABLE `stts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `systems`
--
ALTER TABLE `systems`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bcids`
--
ALTER TABLE `bcids`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `bills`
--
ALTER TABLE `bills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `blog_cates`
--
ALTER TABLE `blog_cates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `delivery_notes`
--
ALTER TABLE `delivery_notes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT cho bảng `packages`
--
ALTER TABLE `packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `popups`
--
ALTER TABLE `popups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `ppids`
--
ALTER TABLE `ppids`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `properties`
--
ALTER TABLE `properties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `sacks`
--
ALTER TABLE `sacks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `scids`
--
ALTER TABLE `scids`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `service_cates`
--
ALTER TABLE `service_cates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `spids`
--
ALTER TABLE `spids`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `ssids`
--
ALTER TABLE `ssids`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `stocks`
--
ALTER TABLE `stocks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `stock_exchanges`
--
ALTER TABLE `stock_exchanges`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `stts`
--
ALTER TABLE `stts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `systems`
--
ALTER TABLE `systems`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `bcids`
--
ALTER TABLE `bcids`
  ADD CONSTRAINT `bcids_blog_id_foreign` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `bcids_cate_id_foreign` FOREIGN KEY (`cate_id`) REFERENCES `blog_cates` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `packages`
--
ALTER TABLE `packages`
  ADD CONSTRAINT `packages_sack_id_foreign` FOREIGN KEY (`sack_id`) REFERENCES `sacks` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `ppids`
--
ALTER TABLE `ppids`
  ADD CONSTRAINT `ppids_package_id_foreign` FOREIGN KEY (`package_id`) REFERENCES `packages` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `ppids_properties_id_foreign` FOREIGN KEY (`properties_id`) REFERENCES `properties` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `scids`
--
ALTER TABLE `scids`
  ADD CONSTRAINT `scids_cate_id_foreign` FOREIGN KEY (`cate_id`) REFERENCES `service_cates` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `scids_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `spids`
--
ALTER TABLE `spids`
  ADD CONSTRAINT `spids_properties_id_foreign` FOREIGN KEY (`properties_id`) REFERENCES `properties` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `spids_sack_id_foreign` FOREIGN KEY (`sack_id`) REFERENCES `sacks` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `ssids`
--
ALTER TABLE `ssids`
  ADD CONSTRAINT `ssids_se_id_foreign` FOREIGN KEY (`se_id`) REFERENCES `stock_exchanges` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `ssids_stock_id_foreign` FOREIGN KEY (`stock_id`) REFERENCES `stocks` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
