-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3309
-- Generation Time: Jun 16, 2021 at 01:04 AM
-- Server version: 10.3.14-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `be2_nhom4`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

DROP TABLE IF EXISTS `banners`;
CREATE TABLE IF NOT EXISTS `banners` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_slide` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `content`, `image_slide`, `created_at`, `updated_at`) VALUES
(8, 'Gucci Equilibrium is our commitment to generate positive change for people and our planet', '1622468069.z2507759305665_125c3318b0e2daaeda3544f47a9dfdd3.jpg', NULL, NULL),
(7, 'Bad Bunny Cake Topper', '1622467991.z2507758172663_f2aa65393823da9650eaf511abd34ac5.jpg', NULL, NULL),
(11, 'SUNSET MONOGRAM SPORTY SHORTS', '1622512402.z2507758174798_b3f5b5b1c4f94faffbc8693301fc293d.jpg', NULL, NULL),
(10, 'Presenting CHIME FOR CHANGE’s new creative identity, ArtWalls, nonprofit projects & creative collaborations', '1622512345.z2507758177868_67cc6986c22ab2a39b4c6763b015ca9c.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

DROP TABLE IF EXISTS `bills`;
CREATE TABLE IF NOT EXISTS `bills` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `price` double(8,2) NOT NULL,
  `create_date` datetime NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_check_out` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `bills_user_id_foreign` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `detail_bills`
--

DROP TABLE IF EXISTS `detail_bills`;
CREATE TABLE IF NOT EXISTS `detail_bills` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `bill_id` int(11) DEFAULT NULL,
  `product_id` int(11) NOT NULL,
  `count_product` int(11) NOT NULL,
  `count_price` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `detail_bills_bill_id_foreign` (`bill_id`),
  KEY `detail_bills_product_id_foreign` (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `detail_bills`
--

INSERT INTO `detail_bills` (`id`, `bill_id`, `product_id`, `count_product`, `count_price`, `created_at`, `updated_at`) VALUES
(9, NULL, 3, 1, 1800.00, NULL, NULL),
(6, NULL, 8, 1, 980.00, NULL, NULL),
(8, NULL, 3, 1, 1800.00, NULL, NULL),
(7, NULL, 6, 1, 1400.00, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `evalutes`
--

DROP TABLE IF EXISTS `evalutes`;
CREATE TABLE IF NOT EXISTS `evalutes` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `rate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int(11) NOT NULL,
  `comment` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `evalutes_product_id_foreign` (`product_id`),
  KEY `evalutes_user_id_foreign` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `image_products`
--

DROP TABLE IF EXISTS `image_products`;
CREATE TABLE IF NOT EXISTS `image_products` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_id` int(10) UNSIGNED NOT NULL,
  `image_product` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `image_products_product_id_foreign` (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=418 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `image_products`
--

INSERT INTO `image_products` (`id`, `product_id`, `image_product`, `created_at`, `updated_at`) VALUES
(1, 2, '655105_XKBWE_9275_002_100_0000_Light.jpg', '2021-05-09 23:14:00', '2021-05-09 23:14:00'),
(2, 2, '655105_XKBWE_9275_004_100_0000_Light.jpg', NULL, NULL),
(3, 2, '655105_XKBWE_9275_005_100_0000_Light.jpg', NULL, NULL),
(4, 2, '655105_XKBWE_9275_010_100_0000_Light.jpg', NULL, NULL),
(5, 3, '626349_XKBFJ_2184_001_100_0000_Light.jpg', NULL, NULL),
(6, 3, '626349_XKBFJ_2184_002_100_0000_Light.jpg', NULL, NULL),
(7, 3, '626349_XKBFJ_2184_004_100_0000_Light.jpg', NULL, NULL),
(8, 3, '626349_XKBFJ_2184_005_100_0000_Light.jpg', NULL, NULL),
(9, 3, '626349_XKBFJ_2184_010_100_0000_Light.jpg', NULL, NULL),
(10, 4, '652009_ZAFHJ_3271_001_100_0000_Light.jpg', NULL, NULL),
(11, 4, '652009_ZAFHJ_3271_002_100_0000_Light.jpg', NULL, NULL),
(12, 4, '652009_ZAFHJ_3271_004_100_0000_Light.jpg', NULL, NULL),
(13, 4, '652009_ZAFHJ_3271_005_100_0000_Light.jpg', NULL, NULL),
(14, 4, '652009_ZAFHJ_3271_006_100_0000_Light.jpg', NULL, NULL),
(15, 2, '655105_XKBWE_9275_001_100_0000_Light.jpg', NULL, NULL),
(16, 5, '654647_ZAGZG_4337_001_100_0000_Light.jpg', NULL, NULL),
(17, 5, '654647_ZAGZG_4337_002_100_0000_Light.jpg', NULL, NULL),
(18, 5, '654647_ZAGZG_4337_004_100_0000_Light.jpg', NULL, NULL),
(19, 5, '654647_ZAGZG_4337_005_100_0000_Light.jpg', NULL, NULL),
(20, 5, '654647_ZAGZG_4337_010_100_0000_Light.jpg', NULL, NULL),
(21, 6, '653360_ZAFVF_9672_001_100_0000_Light.jpg', NULL, NULL),
(22, 6, '653360_ZAFVF_9672_002_100_0000_Light.jpg', NULL, NULL),
(23, 6, '653360_ZAFVF_9672_004_100_0000_Light.jpg', NULL, NULL),
(24, 6, '653360_ZAFVF_9672_005_100_0000_Light.jpg', NULL, NULL),
(25, 6, '653360_ZAFVF_9672_011_100_0000_Light.jpg', NULL, NULL),
(26, 7, '651686_ZAGP3_9028_001_100_0000_Light.jpg', NULL, NULL),
(27, 7, '651686_ZAGP3_9028_002_100_0000_Light.jpg', NULL, NULL),
(28, 7, '651686_ZAGP3_9028_004_100_0000_Light.jpg', NULL, NULL),
(29, 7, '651686_ZAGP3_9028_005_100_0000_Light.jpg', NULL, NULL),
(30, 7, '651686_ZAGP3_9028_011_100_0000_Light.jpg', NULL, NULL),
(31, 8, '657861_ZAGZG_4337_001_100_0000_Light.jpg', NULL, NULL),
(32, 8, '657861_ZAGZG_4337_002_100_0000_Light.jpg', NULL, NULL),
(33, 8, '657861_ZAGZG_4337_004_100_0000_Light.jpg', NULL, NULL),
(34, 8, '657861_ZAGZG_4337_005_100_0000_Light.jpg', NULL, NULL),
(35, 8, '657861_ZAGZG_4337_011_100_0000_Light.jpg', NULL, NULL),
(42, 9, '548334_XJDNH_1082_001_100_0000_Light.jpg', NULL, NULL),
(43, 9, '548334_XJDNH_1082_004_100_0000_Light.jpg', NULL, NULL),
(44, 9, '548334_XJDNH_1082_005_100_0000_Light.jpg', NULL, NULL),
(45, 9, '548334_XJDNH_1082_010_100_0000_Light.jpg', NULL, NULL),
(46, 9, '548334_XJDNH_1082_002_100_0000_Light.jpg', NULL, NULL),
(47, 10, '548334_XJDJV_9095_001_100_0000_Light.jpg', NULL, NULL),
(48, 10, '548334_XJDJV_9095_002_100_0000_Light.jpg', NULL, NULL),
(49, 10, '548334_XJDJV_9095_004_100_0000_Light.jpg', NULL, NULL),
(50, 10, '548334_XJDJV_9095_005_100_0000_Light.jpg', NULL, NULL),
(51, 10, '548334_XJDJV_9095_010_100_0000_Light.jpg', NULL, NULL),
(52, 11, '655459_XJDLY_5904_001_100_0000_Light-T-shirt-with-25-Gucci-Eschatology-in-Pink-1921-print.jpg', NULL, NULL),
(53, 11, '645251_XJC6F_7252_001_100_0000_Light-Striped-cotton-polo-with-patch.jpg', NULL, NULL),
(54, 11, '645251_XJC6F_7121_002_100_0000_Light.jpg', NULL, NULL),
(55, 11, '615044_XJDGQ_1082_002_100_0000_Light.jpg', NULL, NULL),
(56, 11, '539080_XJA9C_7136_001_100_0000_Light-Oversize-T-shirt-with-Gucci-logo.jpg', NULL, NULL),
(57, 12, 'Ao_thun_Tokyo_Run_DJen_GD5031_02_laydown.jpg', NULL, NULL),
(58, 12, 'Ao_thun_Tokyo_Run_DJen_GD5031_21_model.jpg', NULL, NULL),
(59, 12, 'Ao_thun_Tokyo_Run_DJen_GD5031_22_model.jpg', NULL, NULL),
(60, 12, 'Ao_thun_Tokyo_Run_DJen_GD5031_23_hover_model.jpg', NULL, NULL),
(61, 12, 'Ao_thun_Tokyo_Run_DJen_GD5031_25_model.png', NULL, NULL),
(62, 13, 'Ao_Tap_Tiro_Arsenal_GR4158_01_laydown.jpg', NULL, NULL),
(63, 13, 'Ao_Tap_Tiro_Arsenal_GR4158_21_model.jpg', NULL, NULL),
(64, 13, 'Ao_Tap_Tiro_Arsenal_GR4158_25_model.jpg', NULL, NULL),
(65, 13, 'Ao_Tap_Tiro_Arsenal_GR4158_41_detail.jpg', NULL, NULL),
(66, 13, 'Ao_Tap_Tiro_Arsenal_GR4158_42_detail.jpg', NULL, NULL),
(67, 14, 'M_PHOTO_TEE_DJen_HA3643_01_laydown.jpg', NULL, NULL),
(68, 14, 'M_PHOTO_TEE_DJen_HA3643_21_model.jpg', NULL, NULL),
(69, 14, 'M_PHOTO_TEE_DJen_HA3643_23_hover_model.jpg', NULL, NULL),
(70, 14, 'M_PHOTO_TEE_DJen_HA3643_25_model.jpg', NULL, NULL),
(71, 14, 'M_PHOTO_TEE_DJen_HA3643_41_detail.jpg', NULL, NULL),
(72, 15, 'Ao_Thun_Graphic_Parley_(Unisex)_trang_HB1549_01_laydown.jpg', NULL, NULL),
(73, 15, 'Ao_Thun_Graphic_Parley_(Unisex)_trang_HB1549_21_model.jpg', NULL, NULL),
(74, 15, 'Ao_Thun_Graphic_Parley_(Unisex)_trang_HB1549_23_hover_model.jpg', NULL, NULL),
(75, 15, 'Ao_Thun_Graphic_Parley_(Unisex)_trang_HB1549_25_model.jpg', NULL, NULL),
(76, 15, 'Ao_Thun_Graphic_Parley_(Unisex)_trang_HB1549_41_detail.jpg', NULL, NULL),
(77, 16, 'Ao_jersey_Squadra_21_trai_cam_GN8092_01_laydown.jpg', NULL, NULL),
(78, 16, 'Ao_jersey_Squadra_21_trai_cam_GN8092_21_model.jpg', NULL, NULL),
(79, 16, 'Ao_jersey_Squadra_21_trai_cam_GN8092_23_hover_model.jpg', NULL, NULL),
(80, 16, 'Ao_jersey_Squadra_21_trai_cam_GN8092_25_model.jpg', NULL, NULL),
(81, 16, 'Ao_jersey_Squadra_21_trai_cam_GN8092_42_detail.jpg', NULL, NULL),
(82, 17, 'M_3S_TEE_mau_xanh_la_HA3636_01_laydown.jpg', NULL, NULL),
(83, 17, 'M_3S_TEE_mau_xanh_la_HA3636_21_model.jpg', NULL, NULL),
(84, 17, 'M_3S_TEE_mau_xanh_la_HA3636_23_hover_model.jpg', NULL, NULL),
(85, 17, 'M_3S_TEE_mau_xanh_la_HA3636_41_detail.jpg', NULL, NULL),
(86, 17, 'M_3S_TEE_mau_xanh_la_HA3636_42_detail.jpg', NULL, NULL),
(87, 18, 'Ao_Tank_Top_Love_Unites_(Unisex)_DJen_H43967_01_laydown.jpg', NULL, NULL),
(88, 18, 'Ao_Tank_Top_Love_Unites_(Unisex)_DJen_H43967_21_model.jpg', NULL, NULL),
(89, 18, 'Ao_Tank_Top_Love_Unites_(Unisex)_DJen_H43967_23_hover_model.jpg', NULL, NULL),
(90, 18, 'Ao_Tank_Top_Love_Unites_(Unisex)_DJen_H43967_25_model.jpg', NULL, NULL),
(91, 18, 'Ao_Tank_Top_Love_Unites_(Unisex)_DJen_H43967_41_detail.jpg', NULL, NULL),
(92, 19, 'Ao_Thun_Logo_Essentials_(Unisex)_DJen_GS8749_01_laydown.jpg', NULL, NULL),
(93, 19, 'Ao_Thun_Logo_Essentials_(Unisex)_DJen_GS8749_21_model.jpg', NULL, NULL),
(94, 19, 'Ao_Thun_Logo_Essentials_(Unisex)_DJen_GS8749_23_hover_model.jpg', NULL, NULL),
(95, 19, 'Ao_Thun_Logo_Essentials_(Unisex)_DJen_GS8749_41_detail.jpg', NULL, NULL),
(96, 19, 'Ao_Thun_Logo_Essentials_(Unisex)_DJen_GS8749_42_detail.jpg', NULL, NULL),
(97, 20, 'Ao_Tank_Top_Det_Thoi_HEAT.RDY_Warrior_trang_GT8268_01_laydown.jpg', NULL, NULL),
(98, 20, 'Ao_Tank_Top_Det_Thoi_HEAT.RDY_Warrior_trang_GT8268_21_model.jpg', NULL, NULL),
(99, 20, 'Ao_Tank_Top_Det_Thoi_HEAT.RDY_Warrior_trang_GT8268_22_model.jpg', NULL, NULL),
(100, 20, 'Ao_Tank_Top_Det_Thoi_HEAT.RDY_Warrior_trang_GT8268_23_hover_model.jpg', NULL, NULL),
(101, 20, 'Ao_Tank_Top_Det_Thoi_HEAT.RDY_Warrior_trang_GT8268_25_model.jpg', NULL, NULL),
(102, 21, 'Ao_Truoc_Tran_DJau_Real_Madrid_Hong_GR4309_01_laydown.jpg', NULL, NULL),
(103, 21, 'Ao_Truoc_Tran_DJau_Real_Madrid_Hong_GR4309_21_model.jpg', NULL, NULL),
(104, 21, 'Ao_Truoc_Tran_DJau_Real_Madrid_Hong_GR4309_23_hover_model.jpg', NULL, NULL),
(105, 21, 'Ao_Truoc_Tran_DJau_Real_Madrid_Hong_GR4309_25_model.jpg', NULL, NULL),
(106, 21, 'Ao_Truoc_Tran_DJau_Real_Madrid_Hong_GR4309_41_detail.jpg', NULL, NULL),
(107, 22, 'tommy-hilfiger-White-Tape-Short-Sleeve-Shirt.jpg', NULL, NULL),
(108, 22, '12721948-6264858271382318.jpg', NULL, NULL),
(109, 22, '12721948-6394858271426805.jpg', NULL, NULL),
(110, 22, '12721948-8074858271467041.jpg', NULL, NULL),
(111, 27, 'tom-and-jerry-chanel-shirt-Ladies-tee.jpg', NULL, NULL),
(112, 27, 'tom-and-jerry-chanel-shirt-Hoodie.jpg', NULL, NULL),
(113, 27, 'tom-and-jerry-chanel-shirt-Sweater.jpg', NULL, NULL),
(114, 27, 'tom-and-jerry-chanel-shirt-Tank-top.jpg', NULL, NULL),
(115, 28, 'never-underestimate-an-old-man-who-loves-badminton-and-was-born-in-august-shirt-4.jpg', NULL, NULL),
(116, 28, 'never-underestimate-an-old-man-who-loves-badminton-and-was-born-in-august-shirt-12.jpg', NULL, NULL),
(117, 29, 'golden-girls-chibi-thank-you-for-being-a-friend-shirt-Unisex.jpg', NULL, NULL),
(118, 29, 'golden-girls-chibi-thank-you-for-being-a-friend-shirt-Hoodie.jpg', NULL, NULL),
(119, 29, 'golden-girls-chibi-thank-you-for-being-a-friend-shirt-Sweater.jpg', NULL, NULL),
(120, 29, 'golden-girls-chibi-thank-you-for-being-a-friend-shirt-Tank-top.jpg', NULL, NULL),
(121, 30, 'dear-coronavirus-donald-trump-fuck-you-shirt-14.jpg', NULL, NULL),
(122, 30, 'dear-coronavirus-donald-trump-fuck-you-shirt-17.jpg', NULL, NULL),
(123, 30, 'dear-coronavirus-donald-trump-fuck-you-shirt-18.jpg', NULL, NULL),
(124, 31, 'you-look-bit-but-my-god-is-bigger-covid-19-shirt-8.jpg', NULL, NULL),
(125, 31, 'you-look-bit-but-my-god-is-bigger-covid-19-shirt-17.jpg', NULL, NULL),
(126, 31, 'you-look-bit-but-my-god-is-bigger-covid-19-shirt-5.jpg', NULL, NULL),
(127, 31, 'you-look-bit-but-my-god-is-bigger-covid-19-shirt-6.jpg', NULL, NULL),
(128, 32, 'chanel-logo-loose-tee-768x955.jpg', NULL, NULL),
(129, 32, 'chanel-logo-tshirt-768x955.jpg', NULL, NULL),
(130, 33, 'karl-black-loose-tee-768x955.jpg', NULL, NULL),
(131, 33, 'karl-loose-tee-768x955.jpg', NULL, NULL),
(132, 34, 'cc-dog-tee-768x955.jpg', NULL, NULL),
(133, 34, 'cc-dog-black-tee-768x955.jpg', NULL, NULL),
(134, 34, 'cc-dog-loose-tee-768x955.jpg', NULL, NULL),
(135, 35, 'blue-hermes-bag-loose-tee-1-768x955.jpg', NULL, NULL),
(136, 35, 'blue-hermes-bag-t-shirt-1-768x955.jpg', NULL, NULL),
(137, 35, 'hermes-blue-bag-tshirt-woman-1-768x955.jpg', NULL, NULL),
(138, 35, 'hermes-blue-bag-tshirt-grey-1-768x955.jpg', NULL, NULL),
(139, 36, 'double-cotes-h-t-shirt--157330HA69-worn-3-0-0-850-850_b.jpg', NULL, NULL),
(140, 36, 'double-cotes-h-t-shirt--157330HA69-worn-2-0-0-850-850_b.jpg', NULL, NULL),
(141, 36, 'double-cotes-h-t-shirt--157330HA69-worn-4-0-0-1700-1700-q99_b.jpg', NULL, NULL),
(142, 36, 'double-cotes-h-t-shirt--157330HA69-worn-5-0-0-1700-1700-q99_b.jpg', NULL, NULL),
(143, 37, 'rayure-sellier-polo-shirt-with-pocket--157930HA2Q-worn-2-0-0-850-850_b.jpg', NULL, NULL),
(144, 37, 'rayure-sellier-polo-shirt-with-pocket--157930HA2Q-worn-3-0-0-850-850_b.jpg', NULL, NULL),
(145, 37, 'rayure-sellier-polo-shirt-with-pocket--157930HA2Q-worn-4-0-0-850-850_b.jpg', NULL, NULL),
(146, 37, 'rayure-sellier-polo-shirt-with-pocket--157930HA2Q-worn-5-0-0-850-850_b.jpg', NULL, NULL),
(147, 38, 'jacket-shirt-with-swing-collar--156520HI66-worn-2-0-0-850-850_b.jpg', NULL, NULL),
(148, 38, 'jacket-shirt-with-swing-collar--156520HI66-worn-3-0-0-850-850_b.jpg', NULL, NULL),
(149, 38, 'jacket-shirt-with-swing-collar--156520HI66-worn-4-0-0-850-850_b.jpg', NULL, NULL),
(150, 38, 'jacket-shirt-with-swing-collar--156520HI66-worn-5-0-0-850-850_b.jpg', NULL, NULL),
(151, 38, 'jacket-shirt-with-swing-collar--156520HI66-worn-6-0-0-850-850_b.jpg', NULL, NULL),
(152, 39, 'flash-t-shirt--157870HA90-worn-3-0-0-850-850_b.jpg', NULL, NULL),
(153, 39, 'flash-t-shirt--157870HA90-worn-4-0-0-850-850_b.jpg', NULL, NULL),
(154, 39, 'flash-t-shirt--157870HA90-worn-5-0-0-850-850_b.jpg', NULL, NULL),
(155, 40, 'bicolor-jogging-t-shirt--157700HA2D-worn-2-0-0-850-850_b.jpg', NULL, NULL),
(156, 40, 'bicolor-jogging-t-shirt--157700HA2D-worn-3-0-0-850-850_b.jpg', NULL, NULL),
(157, 40, 'bicolor-jogging-t-shirt--157700HA2D-worn-4-0-0-850-850_b.jpg', NULL, NULL),
(158, 40, 'bicolor-jogging-t-shirt--157700HA2D-worn-5-0-0-850-850_b.jpg', NULL, NULL),
(159, 41, 'maillons-t-shirt--157220HA0X-worn-2-0-0-850-850_b.jpg', NULL, NULL),
(160, 41, 'maillons-t-shirt--157220HA0X-worn-3-0-0-850-850_b.jpg', NULL, NULL),
(161, 41, 'maillons-t-shirt--157220HA0X-worn-4-0-0-850-850_b.jpg', NULL, NULL),
(162, 41, 'maillons-t-shirt--157220HA0X-worn-5-0-0-850-850_b.jpg', NULL, NULL),
(163, 42, 'reversible-rib-trim-jacket--152660HHGV-worn-2-0-0-850-850_b.jpg', NULL, NULL),
(164, 42, 'reversible-rib-trim-jacket--152660HHGV-worn-3-0-0-850-850_b.jpg', NULL, NULL),
(165, 42, 'reversible-rib-trim-jacket--152660HHGV-worn-4-0-0-850-850_b.jpg', NULL, NULL),
(166, 42, 'reversible-rib-trim-jacket--152660HHGV-worn-5-0-0-850-850_b.jpg', NULL, NULL),
(167, 42, 'reversible-rib-trim-jacket--152660HHGV-worn-6-0-0-850-850_b.jpg', NULL, NULL),
(168, 43, '663651_ZAGZI_4303_001_100_0000_Light-Online-Exclusive-pond-print-pajama-trousers.jpg', NULL, NULL),
(169, 43, '663651_ZAGZI_4303_004_100_0000_Light-Online-Exclusive-pond-print-pajama-trousers.jpg', NULL, NULL),
(170, 43, '663651_ZAGZI_4303_005_100_0000_Light-Online-Exclusive-pond-print-pajama-trousers.jpg', NULL, NULL),
(171, 43, '663651_ZAGZI_4303_011_100_0000_Light-Online-Exclusive-pond-print-pajama-trousers.jpg', NULL, NULL),
(172, 44, '664495_XDBMO_9011_002_100_0000_Light-Organic-denim-flared-trousers.jpg', NULL, NULL),
(173, 44, '664495_XDBMO_9011_001_100_0000_Light-Organic-denim-flared-trousers.jpg', NULL, NULL),
(174, 44, '664495_XDBMO_9011_004_100_0000_Light-Organic-denim-flared-trousers.jpg', NULL, NULL),
(175, 44, '664495_XDBMO_9011_005_100_0000_Light-Organic-denim-flared-trousers.jpg', NULL, NULL),
(176, 45, '655146_XJDF0_3305_001_100_0000_Light-GG-jersey-jogging-trousers-with-Web.jpg', NULL, NULL),
(177, 45, '655146_XJDF0_3305_002_100_0000_Light-GG-jersey-jogging-trousers-with-Web.jpg', NULL, NULL),
(178, 45, '655146_XJDF0_3305_004_100_0000_Light-GG-jersey-jogging-trousers-with-Web.jpg', NULL, NULL),
(179, 45, '655146_XJDF0_3305_005_100_0000_Light-GG-jersey-jogging-trousers-with-Web.jpg', NULL, NULL),
(180, 46, '572183_XDBPO_4759_001_100_0000_Light-Childrens-trousers-with-Gucci-cat-patch.jpg', NULL, NULL),
(181, 46, '572183_XDBPO_4759_002_100_0000_Light-Childrens-trousers-with-Gucci-cat-patch.jpg', NULL, NULL),
(182, 46, '572183_XDBPO_4759_011_100_0000_Light-Childrens-trousers-with-Gucci-cat-patch.jpg', NULL, NULL),
(183, 47, '653788_XWAPH_4265_001_100_0000_Light-Childrens-stretch-gabardine-trousers.jpg', NULL, NULL),
(184, 47, '653788_XWAPH_4265_002_100_0000_Light-Childrens-stretch-gabardine-trousers.jpg', NULL, NULL),
(185, 47, '653788_XWAPH_4265_011_100_0000_Light-Childrens-stretch-gabardine-trousers.jpg', NULL, NULL),
(186, 48, '663569_XJDE9_1043_001_100_0000_Light-GG-jacquard-jersey-jogging-trousers.jpg', NULL, NULL),
(187, 48, '663569_XJDE9_1043_002_100_0000_Light-GG-jacquard-jersey-jogging-trousers.jpg', NULL, NULL),
(188, 48, '663569_XJDE9_1043_004_100_0000_Light-GG-jacquard-jersey-jogging-trousers.jpg', NULL, NULL),
(189, 48, '663569_XJDE9_1043_005_100_0000_Light-GG-jacquard-jersey-jogging-trousers.jpg', NULL, NULL),
(190, 49, '651728_ZAGPY_9813_001_100_0000_Light-Cotton-canvas-trousers-with-Gucci-cat.jpg', NULL, NULL),
(191, 49, '651728_ZAGPY_9813_002_100_0000_Light-Cotton-canvas-trousers-with-Gucci-cat.jpg', NULL, NULL),
(192, 49, '651728_ZAGPY_9813_004_100_0000_Light-Cotton-canvas-trousers-with-Gucci-cat.jpg', NULL, NULL),
(193, 49, '651728_ZAGPY_9813_005_100_0000_Light-Cotton-canvas-trousers-with-Gucci-cat.jpg', NULL, NULL),
(194, 50, 'Quan_the_thao_Primeblue_SST_DJen_GD2361_01_laydown.jpg', NULL, NULL),
(195, 50, 'Quan_the_thao_Primeblue_SST_DJen_GD2361_21_model.jpg', NULL, NULL),
(196, 50, 'Quan_the_thao_Primeblue_SST_DJen_GD2361_22_model.jpg', NULL, NULL),
(197, 50, 'Quan_the_thao_Primeblue_SST_DJen_GD2361_23_hover_model.jpg', NULL, NULL),
(198, 50, 'Quan_the_thao_Primeblue_SST_DJen_GD2361_43_detail.jpg', NULL, NULL),
(199, 51, 'Quan_Bo_Dang_Dai_Techfit_Marimekko_DJen_GR8030_01_laydown.jpg', NULL, NULL),
(200, 51, 'Quan_Bo_Dang_Dai_Techfit_Marimekko_DJen_GR8030_21_model.jpg', NULL, NULL),
(201, 51, 'Quan_Bo_Dang_Dai_Techfit_Marimekko_DJen_GR8030_23_hover_model.jpg', NULL, NULL),
(202, 51, 'Quan_Bo_Dang_Dai_Techfit_Marimekko_DJen_GR8030_25_model.jpg', NULL, NULL),
(203, 51, 'Quan_Bo_Dang_Dai_Techfit_Marimekko_DJen_GR8030_41_detail.jpg', NULL, NULL),
(204, 52, 'Quan_Short_Marathon_20_DJen_GK5265_01_laydown.jpg', NULL, NULL),
(205, 52, 'Quan_Short_Marathon_20_DJen_GK5265_21_model.jpg', NULL, NULL),
(206, 52, 'Quan_Short_Marathon_20_DJen_GK5265_23_hover_model.jpg', NULL, NULL),
(207, 52, 'Quan_Short_Marathon_20_DJen_GK5265_25_model.jpg', NULL, NULL),
(208, 52, 'Quan_Short_Marathon_20_DJen_GK5265_42_detail.jpg', NULL, NULL),
(209, 53, 'Quan_short_Tokyo_Run_DJen_GD5029_01_laydown.jpg', NULL, NULL),
(210, 53, 'Quan_short_Tokyo_Run_DJen_GD5029_21_model.jpg', NULL, NULL),
(211, 53, 'Quan_short_Tokyo_Run_DJen_GD5029_22_model.jpg', NULL, NULL),
(212, 53, 'Quan_short_Tokyo_Run_DJen_GD5029_23_hover_model.jpg', NULL, NULL),
(213, 53, '00.jpg', NULL, NULL),
(214, 54, 'Quan_Short_Colorblock_Love_Unites_(Unisex)_Nhieu_mau_H43975_01_laydown.jpg', NULL, NULL),
(215, 54, 'Quan_Short_Colorblock_Love_Unites_(Unisex)_Nhieu_mau_H43975_21_model.jpg', NULL, NULL),
(216, 54, 'Quan_Short_Colorblock_Love_Unites_(Unisex)_Nhieu_mau_H43975_23_hover_model.jpg', NULL, NULL),
(217, 54, 'Quan_Short_Colorblock_Love_Unites_(Unisex)_Nhieu_mau_H43975_25_model.jpg', NULL, NULL),
(218, 54, 'Quan_Short_Colorblock_Love_Unites_(Unisex)_Nhieu_mau_H43975_41_detail.jpg', NULL, NULL),
(219, 55, 'Quan_short_3_Soc_Ultimate365_Mau_xanh_da_troi_GM0313_01_laydown.jpg', NULL, NULL),
(220, 55, 'Quan_short_3_Soc_Ultimate365_Mau_xanh_da_troi_GM0313_21_model.jpg', NULL, NULL),
(221, 55, 'Quan_short_3_Soc_Ultimate365_Mau_xanh_da_troi_GM0313_23_hover_model.jpg', NULL, NULL),
(222, 55, 'Quan_short_3_Soc_Ultimate365_Mau_xanh_da_troi_GM0313_42_detail.jpg', NULL, NULL),
(223, 56, 'Quan_adidas_Z.N.E._DJen_GM3282_01_laydown.jpg', NULL, NULL),
(224, 56, 'Quan_adidas_Z.N.E._DJen_GM3282_21_model.jpg', NULL, NULL),
(225, 56, 'Quan_adidas_Z.N.E._DJen_GM3282_22_model.jpg', NULL, NULL),
(226, 56, 'Quan_adidas_Z.N.E._DJen_GM3282_23_hover_model.jpg', NULL, NULL),
(227, 56, 'Quan_adidas_Z.N.E._DJen_GM3282_42_detail.jpg', NULL, NULL),
(228, 57, 'Quan_Short_Marimekko_DJen_H20477_01_laydown.jpg', NULL, NULL),
(229, 57, 'Quan_Short_Marimekko_DJen_H20477_21_model.jpg', NULL, NULL),
(230, 57, 'Quan_Short_Marimekko_DJen_H20477_23_hover_model.jpg', NULL, NULL),
(231, 57, 'Quan_Short_Marimekko_DJen_H20477_41_detail.jpg', NULL, NULL),
(232, 58, 'DM0DM09595_PR9_alternate3.jpg', NULL, NULL),
(233, 58, 'DM0DM09595_PR9_main.jpg', NULL, NULL),
(234, 58, 'DM0DM09595_PR9_alternate1.jpg', NULL, NULL),
(235, 58, 'DM0DM09595_PR9_alternate2.jpg', NULL, NULL),
(236, 59, 'DM0DM09595_BDS_alternate3.jpg', NULL, NULL),
(237, 59, 'DM0DM09595_BDS_main.jpg', NULL, NULL),
(238, 59, 'DM0DM09595_BDS_alternate1.jpg', NULL, NULL),
(239, 59, 'DM0DM09595_BDS_alternate2.jpg', NULL, NULL),
(240, 60, 'DM0DM10876_0K7_alternate3.jpg', NULL, NULL),
(241, 60, 'DM0DM10876_0K7_main.jpg', NULL, NULL),
(242, 60, 'DM0DM10876_0K7_alternate1.jpg', NULL, NULL),
(243, 60, 'DM0DM10876_0K7_alternate2.jpg', NULL, NULL),
(244, 61, 'DM0DM10877_0ZS_alternate3.jpg', NULL, NULL),
(245, 61, 'DM0DM10877_0ZS_main.jpg', NULL, NULL),
(246, 61, 'DM0DM10877_0ZS_alternate1.jpg', NULL, NULL),
(247, 61, 'DM0DM10877_0ZS_alternate2.jpg', NULL, NULL),
(248, 62, 'DM0DM10559_1AB_alternate3.jpg', NULL, NULL),
(249, 62, 'DM0DM10559_1AB_main.jpg', NULL, NULL),
(250, 62, 'DM0DM10559_1AB_alternate1.jpg', NULL, NULL),
(251, 62, 'DM0DM10559_1AB_alternate2.jpg', NULL, NULL),
(252, 63, 'm_607aef8aae766fe575c7991e.jpg', NULL, NULL),
(253, 63, 'm_607aef8943895fbc760588e6.jpg', NULL, NULL),
(254, 63, 'm_607aef88ff830404d023f26f.jpg', NULL, NULL),
(255, 63, 'm_607aef8bffba94c3a4ba38f7.jpg', NULL, NULL),
(256, 64, 'm_606786eb7176608c00e3cfac.jpg', NULL, NULL),
(257, 64, 'm_606786eb47471a771ea99949.jpg', NULL, NULL),
(258, 64, 'm_606786ecfc204ddfcb71a1ca.jpg', NULL, NULL),
(259, 64, 'm_606786ebfdea1bcb77478efa.jpg', NULL, NULL),
(260, 65, 'm_5ff11c6943895f6ee71ee9a8.jpg', NULL, NULL),
(261, 65, 'm_5ff11c6743895f6ee71ee997.jpg', NULL, NULL),
(262, 65, 'm_5ff11c6843895f6ee71ee9a3.jpg', NULL, NULL),
(263, 65, 'm_5ff11c6a43895f6ee71ee9ab.jpg', NULL, NULL),
(264, 66, 'm_5d0e487a16105d6164eabd79.jpg', NULL, NULL),
(265, 66, 'm_5d0e487dd4000812e53a63ce.jpg', NULL, NULL),
(266, 66, 'm_5d0e48842e7c2f2eeea71cee.jpg', NULL, NULL),
(267, 66, 'm_5d0e4881264a55f3602172c9.jpg', NULL, NULL),
(268, 67, 'm_5bb7d50b534ef92df0691df8.jpg', NULL, NULL),
(269, 67, 'm_5bb7d5312e1478b2cce02918.jpg', NULL, NULL),
(270, 67, 'm_5bb7d53ac2e9fea596cb6606.jpg', NULL, NULL),
(271, 67, 'm_5bb7d547e944bad8da3d8cb7.jpg', NULL, NULL),
(272, 68, 'm_5fc4372f691412d916e181cb.jpg', NULL, NULL),
(273, 68, 'm_5fc43730bcdb2f689b9202ae.jpg', NULL, NULL),
(274, 68, 'm_5fc43732bcdb2f5eea9202cd.jpg', NULL, NULL),
(275, 68, 'm_5fc437338da5c972acf4754b.jpg', NULL, NULL),
(276, 69, 'm_5de2b40ede696a43f608dbd2.jpg', NULL, NULL),
(277, 69, 'm_5d179004bbf076efe7ed1805.jpg', NULL, NULL),
(278, 69, 'm_5cf975df689ebcad4e50f183.jpg', NULL, NULL),
(279, 69, 'm_5cf975ec1153baefefe9e199.jpg', NULL, NULL),
(280, 70, '16114260_30214026_800.jpg', NULL, NULL),
(281, 70, '16114260_30215225_800.jpg', NULL, NULL),
(282, 70, '16114260_30214027_800.jpg', NULL, NULL),
(283, 70, '16114260_30214011_800.jpg', NULL, NULL),
(284, 71, 'petar-petrov-Ivory-Gea-Cream-Woven-Shorts.jpg', NULL, NULL),
(285, 71, 'petrov-Ivory-Gea-Cream-Woven-Shorts.jpg', NULL, NULL),
(286, 75, '657870_XDBP0_5237_001_100_0000_Light-Baby-GG-Multicolour-canvas-dress.jpg', NULL, NULL),
(287, 75, '657870_XDBP0_5237_002_100_0000_Light-Baby-GG-Multicolour-canvas-dress.jpg', NULL, NULL),
(288, 75, '657870_XDBP0_5237_011_100_0000_Light-Baby-GG-Multicolour-canvas-dress.jpg', NULL, NULL),
(289, 76, '661678_XKBSK_6117_001_100_0000_Light-Fine-cotton-knit-polo-dress.jpg', NULL, NULL),
(290, 76, '661678_XKBSK_6117_002_100_0000_Light-Fine-cotton-knit-polo-dress.jpg', NULL, NULL),
(291, 76, '661678_XKBSK_6117_005_100_0000_Light-Fine-cotton-knit-polo-dress.jpg', NULL, NULL),
(292, 76, '661678_XKBSK_6117_011_100_0000_Light-Fine-cotton-knit-polo-dress.jpg', NULL, NULL),
(293, 77, '653408_XJDE4_9133_001_100_0000_Light-Blue-trimmed-jersey-dress-with-belt.jpg', NULL, NULL),
(294, 77, '653408_XJDE4_9133_002_100_0000_Light-Blue-trimmed-jersey-dress-with-belt.jpg', NULL, NULL),
(295, 77, '653408_XJDE4_9133_005_100_0000_Light-Blue-trimmed-jersey-dress-with-belt.jpg', NULL, NULL),
(296, 77, '653408_XJDE4_9133_011_100_0000_Light-Blue-trimmed-jersey-dress-with-belt.jpg', NULL, NULL),
(297, 78, '658350_XKBVO_6167_001_100_0000_Light-Double-G-chain-dress.jpg', NULL, NULL),
(298, 78, '658350_XKBVO_6167_002_100_0000_Light-Double-G-chain-dress.jpg', NULL, NULL),
(299, 78, '658350_XKBVO_6167_005_100_0000_Light-Double-G-chain-dress.jpg', NULL, NULL),
(300, 78, '658350_XKBVO_6167_011_100_0000_Light-Double-G-chain-dress.jpg', NULL, NULL),
(301, 79, '657895_XKBSJ_4668_001_100_0000_Light-Striped-cotton-knit-polo-dress.jpg', NULL, NULL),
(302, 79, '657895_XKBSJ_4668_002_100_0000_Light-Striped-cotton-knit-polo-dress.jpg', NULL, NULL),
(303, 79, '657895_XKBSJ_4668_005_100_0000_Light-Striped-cotton-knit-polo-dress.jpg', NULL, NULL),
(304, 79, '657895_XKBSJ_4668_011_100_0000_Light-Striped-cotton-knit-polo-dress.jpg', NULL, NULL),
(305, 80, '643430_ZAF5U_4035_001_100_0000_Light-Tweed-crpe-dress.jpg', NULL, NULL),
(306, 80, '643430_ZAF5U_4035_002_100_0000_Light-Tweed-crpe-dress.jpg', NULL, NULL),
(307, 80, '643430_ZAF5U_4035_005_100_0000_Light-Tweed-crpe-dress.jpg', NULL, NULL),
(308, 80, '643430_ZAF5U_4035_010_100_0000_Light-Tweed-crpe-dress.jpg', NULL, NULL),
(309, 81, '654450_ZAGR4_9376_001_100_0000_Light-Nautical-print-cotton-linen-dress.jpg', NULL, NULL),
(310, 81, '654450_ZAGR4_9376_002_100_0000_Light-Nautical-print-cotton-linen-dress.jpg', NULL, NULL),
(311, 81, '654450_ZAGR4_9376_005_100_0000_Light-Nautical-print-cotton-linen-dress.jpg', NULL, NULL),
(312, 81, '654450_ZAGR4_9376_011_100_0000_Light-Nautical-print-cotton-linen-dress.jpg', NULL, NULL),
(313, 82, '652584_ZAGER_6285_002_100_0000_Light-Childrens-poplin-dress-with-GG-hearts.jpg', NULL, NULL),
(314, 82, '652584_ZAGER_6285_011_100_0000_Light-Childrens-poplin-dress-with-GG-hearts.jpg', NULL, NULL),
(315, 83, '647003_XJC85_9023_001_100_0000_Light-Baby-cotton-dress-with-Web-and-Interlocking-G.jpg', NULL, NULL),
(316, 83, '647003_XJC85_9023_002_100_0000_Light-Baby-cotton-dress-with-Web-and-Interlocking-G.jpg', NULL, NULL),
(317, 83, '647003_XJC85_9023_011_100_0000_Light-Baby-cotton-dress-with-Web-and-Interlocking-G.jpg', NULL, NULL),
(318, 84, 'adicolor_dress_DJen_FM5653_01_laydown.jpg', NULL, NULL),
(319, 84, 'adicolor_dress_DJen_FM5653_02_laydown_hover.jpg', NULL, NULL),
(320, 84, 'adicolor_dress_DJen_FM5653_41_detail.jpg', NULL, NULL),
(321, 84, 'adicolor_dress_DJen_FM5653_42_detail.jpg', NULL, NULL),
(322, 85, 'Ao_Vay_Love_Unites_DJen_H43973_01_laydown.jpg', NULL, NULL),
(323, 85, 'Ao_Vay_Love_Unites_DJen_H43973_21_model.jpg', NULL, NULL),
(324, 85, 'Ao_Vay_Love_Unites_DJen_H43973_23_hover_model.jpg', NULL, NULL),
(325, 85, 'Ao_Vay_Love_Unites_DJen_H43973_25_model.jpg', NULL, NULL),
(326, 85, 'Ao_Vay_Love_Unites_DJen_H43973_41_detail.jpg', NULL, NULL),
(327, 86, 'Ao_Vay_Ba_La_Hoa_Tiet_Marimekko_DJo_H20486_01_laydown.jpg', NULL, NULL),
(328, 86, 'Ao_Vay_Ba_La_Hoa_Tiet_Marimekko_DJo_H20486_21_model.jpg', NULL, NULL),
(329, 86, 'Ao_Vay_Ba_La_Hoa_Tiet_Marimekko_DJo_H20486_23_hover_model.jpg', NULL, NULL),
(330, 86, 'Ao_Vay_Ba_La_Hoa_Tiet_Marimekko_DJo_H20486_41_detail.jpg', NULL, NULL),
(331, 86, 'Ao_Vay_Ba_La_Hoa_Tiet_Marimekko_DJo_H20486_42_detail.jpg', NULL, NULL),
(332, 87, 'Vay_Tank_Top_Midi_Marimekko_DJen_H20489_01_laydown.jpg', NULL, NULL),
(333, 87, 'Vay_Tank_Top_Midi_Marimekko_DJen_H20489_21_model.jpg', NULL, NULL),
(334, 87, 'Vay_Tank_Top_Midi_Marimekko_DJen_H20489_23_hover_model.jpg', NULL, NULL),
(335, 87, 'Vay_Tank_Top_Midi_Marimekko_DJen_H20489_41_detail.jpg', NULL, NULL),
(336, 87, 'Vay_Tank_Top_Midi_Marimekko_DJen_H20489_42_detail.jpg', NULL, NULL),
(337, 88, 'Chan_Vay_DJan_Day_DJen_H20235_01_laydown.jpg', NULL, NULL),
(338, 88, 'Chan_Vay_DJan_Day_DJen_H20235_21_model.jpg', NULL, NULL),
(339, 88, 'Chan_Vay_DJan_Day_DJen_H20235_23_hover_model.jpg', NULL, NULL),
(340, 88, 'Chan_Vay_DJan_Day_DJen_H20235_25_model.jpg', NULL, NULL),
(341, 88, 'Chan_Vay_DJan_Day_DJen_H20235_41_detail.jpg', NULL, NULL),
(342, 89, 'Ao_Vay_Ba_La_3D_Adicolor_trang_GN2848_01_laydown.jpg', NULL, NULL),
(343, 89, 'Ao_Vay_Ba_La_3D_Adicolor_trang_GN2848_21_model.jpg', NULL, NULL),
(344, 89, 'Ao_Vay_Ba_La_3D_Adicolor_trang_GN2848_23_hover_model.jpg', NULL, NULL),
(345, 89, 'Ao_Vay_Ba_La_3D_Adicolor_trang_GN2848_41_detail.jpg', NULL, NULL),
(346, 89, 'Ao_Vay_Ba_La_3D_Adicolor_trang_GN2848_42_detail.jpg', NULL, NULL),
(347, 90, 'Ao_vay_tay_lat_Classics_Adicolor_DJen_GN2777_01_laydown.jpg', NULL, NULL),
(348, 90, 'Ao_vay_tay_lat_Classics_Adicolor_DJen_GN2777_21_model.jpg', NULL, NULL),
(349, 90, 'Ao_vay_tay_lat_Classics_Adicolor_DJen_GN2777_23_hover_model.jpg', NULL, NULL),
(350, 90, 'Ao_vay_tay_lat_Classics_Adicolor_DJen_GN2777_41_detail.jpg', NULL, NULL),
(351, 90, 'Ao_vay_tay_lat_Classics_Adicolor_DJen_GN2777_42_detail.jpg', NULL, NULL),
(352, 91, 'DW0DW10440_TZ8_alternate3.jpg', NULL, NULL),
(353, 91, 'DW0DW10440_TZ8_main.jpg', NULL, NULL),
(354, 91, 'DW0DW10440_TZ8_alteDW0DW10440_TZ8_alternate2.jpgrnate2.jpg', NULL, NULL),
(355, 91, 'DW0DW10440_TZ8_alternate1.jpg', NULL, NULL),
(356, 92, 'DW0DW10122_XNL_alternate3.jpg', NULL, NULL),
(357, 92, 'DW0DW10122_XNL_main.jpg', NULL, NULL),
(358, 92, 'DW0DW10122_XNL_alternate1.jpg', NULL, NULL),
(359, 92, 'DW0DW10122_XNL_alternate2.jpg', NULL, NULL),
(360, 93, 'DW0DW10261_0GJ_alternate3.jpg', NULL, NULL),
(361, 93, 'DW0DW10261_0GJ_main.jpg', NULL, NULL),
(362, 93, 'DW0DW10261_0GJ_alternate1.jpg', NULL, NULL),
(363, 93, 'DW0DW10261_0GJ_alternate2.jpg', NULL, NULL),
(364, 94, 'WW0WW30508_DW5_alternate3.jpg', NULL, NULL),
(365, 94, 'WW0WW30508_DW5_main.jpg', NULL, NULL),
(366, 94, 'WW0WW30508_DW5_alternate1.jpg', NULL, NULL),
(367, 94, 'WW0WW30508_DW5_alternate2.jpg', NULL, NULL),
(368, 95, 'WW0WW30337_0KV_alternate4.jpg', NULL, NULL),
(369, 95, 'WW0WW30337_0KV_main.jpg', NULL, NULL),
(370, 95, 'WW0WW30337_0KV_alternate1.jpg', NULL, NULL),
(371, 95, 'WW0WW30337_0KV_alternate3.jpg', NULL, NULL),
(372, 96, 'WW0WW30498_YBR_alternate3.jpg', NULL, NULL),
(373, 96, 'WW0WW30498_YBR_main.jpg', NULL, NULL),
(374, 96, 'WW0WW30498_YBR_alternate1.jpg', NULL, NULL),
(375, 96, 'WW0WW30498_YBR_alternate2.jpg', NULL, NULL),
(383, 101, '14139156_18938923_1000.jpg', NULL, NULL),
(382, 101, '14139156_18938937_1000.jpg', NULL, NULL),
(389, 103, 'parcours-sans-faute-long-beach-dress--P21LKMB22F-worn-2-50-0-580-580_b.jpg', NULL, NULL),
(381, 101, '14139156_18938945_1000.jpg', NULL, NULL),
(380, 101, '14139156_18938952_1000.jpg', NULL, NULL),
(388, 103, 'parcours-sans-faute-long-beach-dress--P21LKMB22F-worn-3-50-0-580-580_b.jpg', NULL, NULL),
(384, 102, '15194099_26396811_1000.jpg', NULL, NULL),
(385, 102, '15194099_26396812_1000.jpg', NULL, NULL),
(386, 102, '15194099_26396814_1000.jpg', NULL, NULL),
(387, 102, '15194099_26396815_1000.jpg', NULL, NULL),
(390, 103, 'parcours-sans-faute-long-beach-dress--P21LKMB22F-worn-4-50-0-580-580_b.jpg', NULL, NULL),
(391, 104, 'silk-dress--1028088 92-worn-2-0-0-850-850_b.jpg', NULL, NULL),
(392, 104, 'silk-dress--1028088 92-worn-3-0-0-850-850_b.jpg', NULL, NULL),
(393, 104, 'silk-dress--1028088 92-worn-6-0-0-850-850_b.jpg', NULL, NULL),
(394, 104, 'silk-dress--1028088 92-worn-5-0-0-1700-1700-q99_b.jpg', NULL, NULL),
(395, 105, 'l-epopee-d-hermes-shawl-140--243691S 01-worn-7-0-0-850-850_b.jpg', NULL, NULL),
(396, 105, 'l-epopee-d-hermes-shawl-140--243691S 01-flat-1-300-0-850-850_b.jpg', NULL, NULL),
(397, 106, 'straight-dress--1E0524DM02-worn-2-0-0-850-850_b.jpg', NULL, NULL),
(398, 106, 'straight-dress--1E0524DM02-worn-3-0-0-850-850_b.jpg', NULL, NULL),
(399, 106, 'straight-dress--1E0524DM02-worn-4-0-0-850-850_b.jpg', NULL, NULL),
(400, 106, 'straight-dress--1E0524DM02-worn-5-0-0-850-850_b.jpg', NULL, NULL),
(401, 107, 'circuit-24-maxi-jacquard-straight-dress--1E4505DC02-worn-2-0-0-850-850_b.jpg', NULL, NULL),
(402, 107, 'circuit-24-maxi-jacquard-straight-dress--1E4505DC02-worn-4-0-0-850-850_b.jpg', NULL, NULL),
(403, 107, 'circuit-24-maxi-jacquard-straight-dress--1E4505DC02-worn-5-0-0-850-850_b.jpg', NULL, NULL),
(404, 107, 'circuit-24-maxi-jacquard-straight-dress--1E4505DC02-worn-6-0-0-850-850_b.jpg', NULL, NULL),
(405, 26, 'MW17618_400_FNT.jpg', NULL, NULL),
(406, 26, 'MW17618_400_BCK.jpg', NULL, NULL),
(407, 26, 'MW17618_400_DE1.jpg', NULL, NULL),
(408, 23, '78J2331_410_FNT.jpg', NULL, NULL),
(409, 23, '78J2331_410_BCK.jpg', NULL, NULL),
(410, 23, '78J2331_410_DE1.jpg', NULL, NULL),
(411, 24, 'DM11518_400_FNT.jpg', NULL, NULL),
(412, 24, 'DM11518_400_BCK.jpg', NULL, NULL),
(413, 24, 'DM11518_400_DE1.jpg', NULL, NULL),
(414, 24, 'DM11518_400_DE2.jpg', NULL, NULL),
(415, 24, 'DM11518_400_DE3.jgp', NULL, NULL),
(416, 25, '78J2944_660_FNT.jpg', NULL, NULL),
(417, 25, '78J2944_660_BCK.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `manufactures`
--

DROP TABLE IF EXISTS `manufactures`;
CREATE TABLE IF NOT EXISTS `manufactures` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `manu_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `manufactures`
--

INSERT INTO `manufactures` (`id`, `manu_name`, `created_at`, `updated_at`) VALUES
(1, 'Gucci', NULL, NULL),
(2, 'Adidas', NULL, NULL),
(3, 'Tommy', NULL, NULL),
(4, 'Chanel', NULL, NULL),
(5, 'Hermas', NULL, NULL),
(17, 'Gang teo 1234567', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_05_01_091019_create_type_users_table', 1),
(5, '2021_05_01_091259_create_contacts_table', 1),
(6, '2021_05_01_091419_create_partners_table', 1),
(7, '2021_05_01_091525_create_manufactures_table', 1),
(8, '2021_05_01_091711_create_type_products_table', 1),
(9, '2021_05_01_091913_create_evalutes_table', 1),
(10, '2021_05_01_092510_create_bills_table', 1),
(11, '2021_05_01_092647_create_detail_bills_table', 1),
(12, '2021_05_01_092745_create_products_table', 1),
(13, '2021_05_05_022844_create_image_products_table', 1),
(14, '2021_05_08_060726_create_roles_table', 1),
(15, '2021_05_11_222407_delete_column_user', 1),
(16, '2021_05_26_035225_inster_email_verified', 2),
(17, '2021_05_30_144826_create_banners_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

DROP TABLE IF EXISTS `partners`;
CREATE TABLE IF NOT EXISTS `partners` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('teodeptrai@gmail.com', '$2y$10$ug/z0MCjYRivcckM8PsRU.Fq/QaV5a3yYlYgD95uHVQ86ENtjVSTe', '2021-05-18 17:01:47'),
('teo@gmail.com', '$2y$10$ooAR9ppi0xxYfqf5FnQ1nOXxMOksU9eg3mnWVtLRAeoearvhFC52S', '2021-05-25 20:00:45');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `sold` int(11) NOT NULL,
  `size` double NOT NULL,
  `hot` tinyint(4) NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `create_date` date NOT NULL,
  `view` int(11) NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_id` int(11) NOT NULL,
  `manu_id` int(11) NOT NULL,
  `count` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `products_type_id_foreign` (`type_id`),
  KEY `products_manu_id_foreign` (`manu_id`)
) ENGINE=MyISAM AUTO_INCREMENT=109 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `image`, `price`, `sold`, `size`, `hot`, `note`, `create_date`, `view`, `color`, `gender`, `type_id`, `manu_id`, `count`, `created_at`, `updated_at`) VALUES
(2, 'GG perforated cotton cardigan', '655105_XKBWE_9275_001_100_0000_Light.jpg', 1000.00, 3, 30, 1, 'Inspired by the original Gucci rhombi motif from the \'30s, the House\'s monogram is revisited and reimagined in new variations each season. On this cardigan, the GG pattern appears as a perforated design, achieved using a needle punch technique.', '2021-05-10', 0, '0', '0', 1, 1, 2, NULL, NULL),
(3, 'Knit wool blend cardigan with Web', '626349_XKBFJ_2184_001_100_0000_Light.jpg', 1800.00, 3, 29, 1, 'Classic knitwear is reimagined with refined details and emblematic House codes. Crafted from camel knit wool blend, this cardigan brings back the green and red Web as an unexpected detail accenting the pockets, while the shiny gold-toned Double G logos add a precious note.', '2021-05-10', 0, '0', '0', 1, 1, 2, NULL, NULL),
(4, 'Viscose linen single-breasted jacket', '652009_ZAFHJ_3271_001_100_0000_Light.jpg', 2500.00, 3, 29, 1, 'Refined, yet unexpected details adorn new expressions of structure. From jackets that play with new proportions to pants that redefine fit, codes that have become synonymous with the House remain a symbol of lasting beauty. Presented in light green, the single-breasted jacket is renewed with a viscose linen blend, giving it a fresher feel.', '2021-05-10', 1, '0', '1', 1, 1, 2, NULL, NULL),
(5, 'Tulip print silk shirt', '654647_ZAGZG_4337_001_100_0000_Light.jpg', 1400.00, 3, 28, 0, 'Ouverture continues to view classic silhouettes with a contemporary eye. Daywear dresses are printed with colorful flowers, conveying a fresh feel. This oversize shirt is printed with tulips over a light blue silk background.', '2021-05-10', 0, '0', '1', 1, 1, 2, NULL, NULL),
(6, 'Tartan check wool pant', '653360_ZAFVF_9672_001_100_0000_Light.jpg', 1400.00, 3, 30, 1, 'Defined by a muted beige and green tartan check, these wool blend pants carry a distinct vintage vibe. Front pleats and cuffed hems speak to the House’s long history of collegiate-inspired fashion.', '2021-05-10', 1, '0', '0', 2, 1, 2, NULL, NULL),
(7, 'Cotton viscose twill pant', '651686_ZAGP3_9028_001_100_0000_Light.jpg', 1100.00, 3, 30, 1, 'These cream cotton viscose twill pants with front pleats are imbued with a distinct college aesthetic. Their relaxed fit is an expression of the possibilities that lie within familiar silhouettes.', '2021-05-10', 0, '0', '0', 2, 1, 2, NULL, NULL),
(8, 'Tulip print silk shorts', '657861_ZAGZG_4337_001_100_0000_Light.jpg', 980.00, 3, 29, 1, 'Ouverture continues to view classic silhouettes with a contemporary eye. Daywear dresses are printed with colorful flowers, conveying a fresh feel. This pair of shorts are printed with tulips over a light blue silk background.', '2021-05-10', 0, '0', '1', 2, 1, 2, NULL, NULL),
(9, 'Gucci nam 161', '1620481786_aothunnamGucci161_650.jpg', 64.00, 3, 35, 1, 'Áo Thun Nam màu trơn Cổ Bẻ Ngắn Tay', '2021-05-08', 0, '0', '1', 1, 1, 2, NULL, NULL),
(10, 'Gucci nam x2', '1620481881_aothunnamGucci131_650.jpg', 57.00, 3, 31, 1, 'Chất liệu: Polyester, mềm mại.', '2021-05-08', 0, '0', '1', 1, 1, 2, NULL, NULL),
(11, 'Gucci logy', '1620481921_655459_XJDLY_5904_001_100_0000_Light-T-shirt-with-25-Gucci-Eschatology-in-Pink-1921-print.jpg', 45.00, 3, 34, 1, 'Chất liệu : Cotton 100%', '2021-05-08', 0, '0', '0', 1, 1, 2, NULL, NULL),
(12, 'Adidas dream', '1620481980_all-day-i-dream_700.jpg', 45.00, 3, 32, 1, 'Mát mẻ thoải mái.', '2021-05-08', 0, '0', '1', 1, 2, 2, NULL, NULL),
(13, 'Adidas cropped-tea', '1620482016_cropped-tee_700.jpg', 256.00, 3, 26, 1, 'Chất liệu : Cotton 100%', '2021-05-08', 0, '0', '1', 1, 2, 2, NULL, NULL),
(14, 'Áo thun Adidas linear', '1620482067_linear-repeat_850.jpg', 45.00, 3, 29, 0, 'Áo thun nam là trang phục giúp các chàng trai làm mới phong cách của chính mình', '2021-05-08', 0, '0', '1', 1, 2, 2, NULL, NULL),
(15, 'The run adidas', '1620482107_o-tank-top-chạy-bộ-adidas-own-the-run-primeblue_550.jpg', 54.00, 3, 25, 1, 'Thiết kế cổ bẻ xẻ trụ đơn giản, cực kỳ năng động', '2021-05-08', 0, '0', '0', 1, 2, 2, NULL, NULL),
(16, 'Thun Adidas b2', '1620482151_o-thun_850.jpg', 25.00, 3, 36, 0, 'àng phối cùng nhiều kiểu jeans bụi phủi,', '2021-05-08', 0, '0', '0', 1, 2, 2, NULL, NULL),
(17, 'Áo thun adidas graphic', '1620482191_o-thun-graphic-primeblue-fast_800.jpg', 32.00, 3, 65, 0, 'Hàng có sẵn đủ size: M, L, XL, XX️', '2021-05-08', 0, '0', '1', 1, 2, 2, NULL, NULL),
(18, 'Ao thun adidas street', '1620482219_o-thun-graphic-street_700.jpg', 25.00, 3, 65, 1, 'Thiết kế cổ bẻ xẻ trụ đơn giản', '2021-05-08', 0, '0', '0', 1, 2, 2, NULL, NULL),
(19, 'Thun thể thao adidas', '1620482261_o-thun-graphic-thể-thao-tech_550.jpg', 45.00, 3, 64, 0, 'Áo phông nam cổ bẻ việt nam', '2021-05-08', 0, '0', '0', 1, 2, 2, NULL, NULL),
(20, 'Ao thun ncessi', '1620482292_o-thun-necessi-tee_650.jpg', 7.00, 3, 35, 1, 'Áo Thun Nam màu trơn Cổ Bẻ Ngắn Tay', '2021-05-08', 0, '0', '0', 1, 2, 2, NULL, NULL),
(21, 'Thun 3 sọc', '1620482324_o-thun-slim-3-sọc-primeblue-aeroready_700.jpg', 31.00, 3, 33, 0, 'Chất liệu : Cotton 100%', '2021-05-08', 0, '0', '1', 1, 2, 2, NULL, NULL),
(22, 'Sơ mi nam 75', '1620482384_7-5.jpg', 75.00, 3, 29, 1, 'Chất liệu cao cấp mềm mại', '2021-05-08', 0, '0', '1', 1, 3, 2, NULL, NULL),
(23, 'Thun tommy g9', '1620482414_918jmn9+2YL._SS350_AC_.jpg', 5.00, 3, 33, 1, 'Chất liệu: Polyester', '2021-05-08', 0, '0', '1', 1, 3, 2, NULL, NULL),
(24, 'Thun bd', '1620482456_tải xuống.jpg', 100.00, 3, 35, 1, 'Form dáng body vừa người , phù hợp du lịch', '2021-05-08', 0, '0', '0', 1, 3, 2, NULL, NULL),
(25, 'Thun nam tommy h1', '1620482504_rsz_2064887_l.jpg', 44.00, 3, 55, 0, 'chất liệu cao cấp, giá thành hợp lý, sỉ lẻ giá tốt', '2021-05-08', 0, '0', '1', 1, 3, 2, NULL, NULL),
(26, 'Thun tommy paita-aics', '1620482549_lyhythihainen-t-paita-asics-running-essentials-12-zip-top-f0bdf.jpg', 4.00, 3, 78, 1, 'Dáng Ôm Thời Trang Cam Cấp', '2021-05-08', 0, '0', '1', 1, 3, 2, NULL, NULL),
(27, 'Thun chanel đủ loại', '1620482603_2d090e98d4d832c5935c5742a0c53c87jfif.jpg', 45.00, 3, 45, 0, 'Hàng có sẵn đủ size: M, L, XL, XX️', '2021-05-08', 0, '0', '0', 1, 4, 2, NULL, NULL),
(28, 'Chanel blue', '1620482647_5fc38711c27ca7a8f1eb734850ace95d-600x494.jpg', 456.00, 3, 64, 1, 'Chất liệu : Cotton 100%', '2021-05-08', 0, '0', '0', 1, 4, 2, NULL, NULL),
(29, 'Chanel purple', '1620482678_873646fc-a42b-4ce9-a58a-7fda09ecce04.jpg', 455.00, 3, 45, 1, 'Chất liệu : Cotton 100%', '2021-05-08', 0, '0', '0', 1, 4, 2, NULL, NULL),
(30, 'chanel wb', '1620482715_74397285_138671914199766_3078203838432280576_n.jpg', 654.00, 3, 34, 1, 'Lên mua', '2021-05-08', 0, '0', '0', 1, 4, 2, NULL, NULL),
(31, 'shirt chanel hr', '1620482757_1555694983-527-dung-ao-50-trieu-dong-phuong-chanel-co-dep-hon-sieu-sao-quoc-te-vq4r-huqrnan3642600-1555561272-width600height749.jpg', 54.00, 3, 54, 0, '....', '2021-05-08', 0, '0', '0', 1, 4, 2, NULL, NULL),
(32, 'Thanh chanel shirt', '1620482796_Chanel-thanh.jpg', 9999.00, 3, 66, 0, 'cry', '2021-05-08', 0, '0', '1', 1, 4, 2, NULL, NULL),
(33, 'Chanel thun nam hàng hiệu', '1620482827_o-thun-nam-hàng-hiệu-chanel-siêu-cấp_1490.jpg', 45.00, 3, 35, 1, 'Chất liệu: Polyester', '2021-05-08', 0, '0', '1', 1, 4, 2, NULL, NULL),
(34, 'shirt chanel q2', '1620482856_q2-48-1-hong.jpg', 456.00, 3, 54, 1, 'Chất liệu : Cotton 100%', '2021-05-08', 0, '0', '0', 1, 4, 2, NULL, NULL),
(35, 'Thun cam', '1620482891_9ac835939dfa3031d8db4c61b456ab71.png', 32.00, 3, 45, 1, 'Áo Thun Nam màu trơn Cổ Bẻ Ngắn Tay', '2021-05-08', 0, '0', '1', 1, 5, 2, NULL, NULL),
(36, 'Thun đẹp hermes hàng hiệu', '1620482929_áo-hermes-hàng-hiệu.png', 998.00, 3, 32, 1, 'Chất liệu : Cotton 100%', '2021-05-08', 0, '0', '1', 1, 5, 2, NULL, NULL),
(37, 'Áo phông nam đẹp', '1620482957_ao-phong-nam-dep-hang-hieu-hermes-tuyet-dep-1500932948-59766b5400298.jpg', 54.00, 3, 45, 1, 'Chất liệu : Cotton 100%', '2021-05-08', 0, '0', '1', 1, 5, 2, NULL, NULL),
(38, 'Thun cổ be hermes', '1620482983_ao-thun-co-be-hermes-nam-den.jpg', 32.00, 3, 45, 0, 'Áo Thun Nam màu trơn Cổ Bẻ Ngắn Tay', '2021-05-08', 0, '0', '1', 1, 5, 2, NULL, NULL),
(39, 'Thun nam coco', '1620483022_ao-thun-nam-co-co-la-bay-rsp034-6.jpg', 98.00, 3, 35, 0, 'Chất liệu mát mẻ', '2021-05-08', 0, '0', '1', 1, 5, 2, NULL, NULL),
(40, 'Thun cổ be xanh', '1620483049_ao-thun-co-be-hermes-nam-xanh-ly.jpg', 33.00, 3, 33, 1, 'Chất liệu: Polyester', '2021-05-08', 0, '0', '1', 1, 5, 2, NULL, NULL),
(41, 'Thun cổ be trắng', '1620483080_ao-thun-co-be-hermes-nam-trang.jpg', 43.00, 3, 25, 0, 'Áo Thun Nam màu trơn Cổ Bẻ Ngắn Tay', '2021-05-08', 0, '0', '1', 1, 5, 2, NULL, NULL),
(42, 'Áo hermes a15', '1620483114_54b140349caf84a9d26b47b0c55ec5a1.jpg', 23.00, 3, 45, 0, 'Chất liệu: Polyester', '2021-05-08', 0, '0', '1', 1, 5, 2, NULL, NULL),
(43, 'Quần gucci pre', '1620483161_30S---GUCCI_PRE---605437XJB9I2103.jpg', 234.00, 3, 43, 1, 'Chất liệu: Polyester', '2021-05-08', 0, '0', '0', 2, 1, 2, NULL, NULL),
(44, 'Gucci quần nam 7ee', '1620483190_73eebe35-aa4d-4a80-a811-6f1d652197c1.jpg', 43.00, 3, 43, 1, 'Chất liệu : Cotton 100%', '2021-05-08', 0, '0', '1', 2, 1, 2, NULL, NULL),
(45, 'Quần cộc gucci nâu vàng', '1620483221_597837Z403L2286beige-01.jpg', 43.00, 3, 53, 0, 'Chất liệu : Cotton 100%', '2021-05-08', 0, '0', '1', 2, 1, 2, NULL, NULL),
(46, 'Gucci blue trousers', '1620483258_gucci-blue-trousers-with-embroidery-brand-size-48-598647-zabk2-4240.jpg', 321.00, 3, 32, 1, 'chất lượng sản phẩm tốt Cam kết sản phẩm 100% giống ảnh và giới thiệu', '2021-05-08', 0, '0', '1', 2, 1, 2, NULL, NULL),
(47, 'Gucci straightleg', '1620483289_gucci-straightleg-tailored-trousers-brand-size-40-596963-zad88-6055.jpg', 53.00, 3, 43, 0, 'Quần vải gió (vải dù) nhập khẩu cao cấp túi khóa và phù hợp vận động mạnh', '2021-05-08', 0, '0', '1', 2, 1, 2, NULL, NULL),
(48, 'Gucci viscose', '1620483328_viscose-gucci-trousers-11004734-1_1.jpg', 43.00, 3, 56, 1, 'mặc thoáng mát và thoải mái', '2021-05-08', 0, '0', '0', 2, 1, 2, NULL, NULL),
(49, 'Versace medusa', '1620483352_versace-medusa-print-straightleg-jeans-brand-size-32-a85058a232789a8005.jpg', 43.00, 3, 54, 0, 'Chất liệu: Polyester', '2021-05-08', 0, '0', '1', 2, 1, 2, NULL, NULL),
(50, 'satel adidas', '1620483386_astel316161a564_q6_2-0_UX357_QL90_.jpg', 123.00, 3, 40, 1, 'Chất liệu : Cotton 100%', '2021-05-08', 0, '0', '1', 2, 2, 2, NULL, NULL),
(51, 'astel đen', '1620483425_astel315961071b_q1_2-0.jpg', 87.00, 3, 54, 0, 'Chất liệu : Cotton 100%', '2021-05-08', 0, '0', '0', 2, 2, 2, NULL, NULL),
(52, 'Big logo track', '1620483455_Big_Logo_Track_Pants_Blue_FM2560.jpg', 25.00, 3, 45, 0, 'Chất liệu : Cotton 100%', '2021-05-08', 0, '0', '0', 2, 2, 2, NULL, NULL),
(53, 'Jpers adidas', '1620483484_jpers4077712741_q6_2-0_UX357_QL90_.jpg', 235.00, 3, 43, 1, 'Thể thao', '2021-05-08', 0, '0', '0', 2, 2, 2, NULL, NULL),
(54, 'track pants black', '1620483513_Track_Pants_Black_GK6169_21_model.jpg', 99.00, 3, 43, 0, 'Thể thao', '2021-05-08', 0, '0', '0', 2, 2, 2, NULL, NULL),
(55, 'Track pants beige', '1620483544_Track_Pants_Beige_ED7457_01_laydown.jpg', 254.00, 3, 45, 1, 'Bộ đôi', '2021-05-08', 0, '0', '1', 2, 2, 2, NULL, NULL),
(56, 'track pants 3 sọc', '1620483575_Track_pants_3_Soc_Ba_La_3D_Adicolor_DJen_GN3543_21_model.jpg', 77.00, 3, 25, 1, 'Chất liệu : Cotton 100%', '2021-05-08', 0, '0', '1', 2, 2, 2, NULL, NULL),
(57, 'Lgenc adidas', '1620483604_lgenc3130414fce_q6_2-0_UX357_QL90_.jpg', 11.00, 3, 55, 0, 'Chất liệu: Polyester', '2021-05-08', 0, '0', '1', 2, 2, 2, NULL, NULL),
(58, 'Plant tommy m1', '1620483637_1M87647781_017_alternate4.jpg', 65.00, 3, 35, 0, 'Chất liệu : Cotton 100%', '2021-05-08', 0, '0', '1', 2, 3, 2, NULL, NULL),
(59, 'h2 47', '1620483681_42778574iv_14_f.jpg', 44.00, 3, 43, 0, 'Chất liệu: Thun', '2021-05-08', 0, '0', '1', 2, 3, 2, NULL, NULL),
(60, 'DM001', '1620483708_DM0DM10125_C87_main.jpg', 32.00, 3, 44, 0, 'Chất liệu : Cotton 100%', '2021-05-08', 0, '0', '1', 2, 3, 2, NULL, NULL),
(61, 'Tommy jeans tracksuit', '1620483776_tommy-jeans-tracksuit-pant-002-black-iris_1.jpg', 23.00, 3, 44, 1, 'form dáng suông trẻ trung tạo cảm giác thoải mái cho người mặc', '2021-05-08', 0, '0', '1', 2, 3, 2, NULL, NULL),
(62, 'Tommy hilgiger', '1620483801_tommy-hilfiger-pant-lwk-100752_1.jpg', 58.00, 3, 88, 1, 'Chất liệu: Polyester', '2021-05-08', 0, '0', '1', 2, 3, 2, NULL, NULL),
(63, 'quần chnel 132', '1620483858_132341-5.jpg', 24.00, 3, 32, 0, 'dáng suông rộng trẻ trung', '2021-05-08', 0, '0', '1', 2, 4, 2, NULL, NULL),
(64, 'Chanel 1b2', '1620483894_b657554a60d01b85c22b870ff6148e42.jpg', 43.00, 3, 45, 0, 'Chất liệu : Cotton 100%', '2021-05-08', 0, '0', '0', 2, 4, 2, NULL, NULL),
(65, 'beige wool chanel', '1620483924_beige-wool-chanel-pants.jpg', 54.00, 3, 54, 1, 'Chất liệu: Polyester', '2021-05-08', 0, '0', '0', 2, 4, 2, NULL, NULL),
(66, 'pants navy blue', '1620483960_pants-navy-blue-cotton-tweed-cotton-tweed-packshot-alternative-p70076v61614nb347-8836705976350.jpg', 32.00, 3, 27, 0, 'Hạn chế dùng nước xả vải với quần jeans. Nước xả vải có tác dụng làm mềm vải, dễ khiến quần jeans mất dáng', '2021-05-08', 0, '0', '0', 2, 4, 2, NULL, NULL),
(67, 'pink other chanel', '1620483987_pink-other-chanel-trousers-1522834-1_1.jpg', 555.00, 3, 32, 0, 'Chất liệu : Cotton 100%', '2021-05-08', 0, '0', '0', 2, 4, 2, NULL, NULL),
(68, 'pants pinl late eure', '1620484030_pants-pink-pale-pink-ecru-tweed-tweed-packshot-default-p70016v60002n6537-8834205679646.jpg', 1000.00, 3, 43, 1, 'orm dáng suông rộng trẻ trung', '2021-05-08', 0, '0', '0', 2, 4, 2, NULL, NULL),
(69, 'pants navy cotton', '1620484071_pants-navy-blue-cotton-tweed-cotton-tweed-packshot-default-p70076v61614nb347-8836708597790.jpg', 786.00, 3, 45, 0, 'Form rộng thoải mái.', '2021-05-08', 0, '0', '0', 2, 4, 2, NULL, NULL),
(70, 'Plant hermas 114', '1620486156_114-201710021935_2.jpg', 45.00, 3, 54, 0, 'Chất liệu : Cotton 100%', '2021-05-08', 0, '0', '0', 2, 5, 2, NULL, NULL),
(71, 'Plant hermas 163', '1620486144_beige-synthetic-hermes-trousers-12051656-2_1.jpg', 32.00, 3, 44, 1, 'Chất liệu : Cotton 100%', '2021-05-08', 0, '0', '0', 2, 5, 2, NULL, NULL),
(108, 'Saint germain fitted', '1620486093_saint-germain-fitted-pants--155040H360-worn-2-0-0-1000-1000_b.jpg', 1000.00, 3, 32, 1, 'Chất liệu : Cotton 100%', '2021-05-08', 0, '0', '1', 2, 5, 2, NULL, NULL),
(75, 'Dress gucci xk37', '1620484283_606017_XKA4A_6367_002_100_0000_Light.jpg', 554.00, 3, 45, 1, 'không còn đứng phom', '2021-05-08', 0, '0', '0', 3, 1, 2, NULL, NULL),
(76, 'GG jackquard', '1620484316_GG-jacquard.jpg', 64.00, 3, 54, 0, 'Vải thoáng mát', '2021-05-08', 0, '0', '0', 3, 1, 2, NULL, NULL),
(77, 'za gucci dress', '1620484344_643352_ZAFGT_3408_002_100_0000_Light.jpg', 7.00, 3, 52, 0, 'Chất liệu: Polyester', '2021-05-08', 0, '0', '0', 3, 1, 2, NULL, NULL),
(78, 'Available gucci dress', '1620484384_Available-in.jpg', 122.00, 3, 43, 1, 'Chất liệu : Cotton 100%', '2021-05-08', 0, '0', '0', 3, 1, 2, NULL, NULL),
(79, 'Bn dress gucci', '1620484427_644559_XKBNV_4311_002_100_0000_Light.jpg', 431.00, 3, 34, 0, 'Chất liệu: Bò Phong cách: Dạo phố', '2021-05-08', 0, '0', '0', 3, 1, 2, NULL, NULL),
(80, 'Dress light Gucci', '1620484464_657935_ZAGVN_4337_002_100_0000_Light.jpg', 65.00, 3, 28, 1, 'Ống quần: Dáng suông Chiều dài quần (cm): 100', '2021-05-08', 0, '0', '0', 3, 1, 2, NULL, NULL),
(81, 'Dress g6', '1620484494_657911_ZAG6V_9285_002_100_0000_Light.jpg', 324.00, 3, 32, 1, 'loại quần: Quần dài Xuất Xứ: Việt Nam', '2021-05-08', 0, '0', '0', 3, 1, 2, NULL, NULL),
(82, 'dress lt', '1620484536_652081_ZAGK8_3251_002_100_0000_Light.jpg', 453.00, 3, 34, 0, 'Phong cách: Dạo phố Ống quần: Dáng suông', '2021-05-08', 0, '0', '0', 3, 1, 2, NULL, NULL),
(83, 'Dress gucci cotton polo', '1620484647_653303_XKBSK_9087_001_100_0000_Light-Fine-wool-cotton-polo-dress.jpg', 77.00, 3, 32, 1, 'Phong cách: Dạo phố Ống quần: Dáng suông', '2021-05-08', 0, '0', '0', 3, 1, 2, NULL, NULL),
(84, 'Dress adidas 140', '1620484680_14023826_18288663_1000.jpg', 43.00, 3, 26, 0, 'Chất liệu : Cotton 100%', '2021-05-08', 0, '0', '0', 3, 2, 2, NULL, NULL),
(85, 'Dress adidas 18', '1620484703_1703311492-18.jpg', 42.00, 3, 43, 1, 'Chất liệu : Cotton 100%', '2021-05-08', 0, '0', '0', 3, 2, 2, NULL, NULL),
(86, 'adicolor 3d', '1620484726_Adicolor_3D_Trefoil_Tee_Dress_Red_GD2267_21_model.jpg', 42.00, 3, 43, 1, 'Chất liệu: Polyester', '2021-05-08', 0, '0', '0', 3, 2, 2, NULL, NULL),
(87, 'Classics roll up lack', '1620484749_Adicolor_Classics_Roll-Up_Sleeve_Tee_Dress_Black_GN2777_21_model.jpg', 32.00, 3, 32, 0, 'Chất liệu : Cotton 100%', '2021-05-08', 0, '0', '0', 3, 2, 2, NULL, NULL),
(88, 'Large logo tee', '1620484775_Large_Logo_Tee_Dress_Black_FS7234_21_model.jpg', 323.00, 3, 43, 1, 'Chất liệu : Cotton 100%', '2021-05-08', 0, '0', '0', 3, 2, 2, NULL, NULL),
(89, 'Large dress gay', '1620484795_Large_Logo_Tee_Dress_Grey_FS7233.jpg', 333.00, 3, 32, 0, 'Chất liệu: Polyester', '2021-05-08', 0, '0', '0', 3, 2, 2, NULL, NULL),
(90, 'Logo tee dress orange', '1620484825_Logo_Tee_Dress_Orange_FR7172.jpg', 33.00, 3, 33, 1, 'loại quần: Quần dài Xuất Xứ: Việt Nam', '2021-05-08', 0, '0', '0', 3, 2, 2, NULL, NULL),
(91, 'Dress tommy d3', '1620484871_31DaR5Naj1L.jpg', 3.00, 3, 32, 0, 'loại quần: Quần dài Xuất Xứ: Việt Nam', '2021-05-08', 0, '0', '0', 3, 3, 2, NULL, NULL),
(92, 'Dress tommy 31', '1620484922_31-SQ96-UgL.jpg', 31.00, 3, 55, 1, 'Dáng đầm: Đầm dáng xòe Họa Tiết: Trơn', '2021-05-08', 0, '0', '0', 3, 3, 2, NULL, NULL),
(93, 'Dress tommy Xm', '1620484954_31XmD8uZQsL.jpg', 31.00, 3, 44, 1, 'Loại trang phục: Trang phục buổi tối Chất liệu: vải nhập dày mịn, thấm hút mồ hôi Xuất xứ: Việt Nam', '2021-05-08', 0, '0', '0', 3, 3, 2, NULL, NULL),
(94, 'Dress tommy FNT', '1620484994_76A5859_991_FNT.jpg', 76.00, 3, 32, 0, 'Họa Tiết: Trơn', '2021-05-08', 0, '0', '0', 3, 3, 2, NULL, NULL),
(95, 'Dress tommy b01', '1620485037_76B0734_412_FNT.jpg', 789.00, 3, 34, 1, 'ĐẦM ĐẸP MÚN XỈU lunn á', '2021-05-08', 0, '0', '0', 3, 3, 2, NULL, NULL),
(96, 'Dress cổ vuông', '1620485079_76J1193_641_FNT.jpg', 641.00, 3, 43, 1, 'ÁI GÌ CÓ THỂ THIẾU CHỨ ĐẦM ĐEN THÌ KHÔNG THỂ THIẾU', '2021-05-08', 0, '0', '0', 3, 3, 2, NULL, NULL),
(97, 'Dress tommy Uw', '1620485110_UW02865_600_FNT.jpg', 600.00, 3, 26, 1, 'Chất liệu : Cotton 100%', '2021-05-08', 0, '0', '0', 3, 3, 2, NULL, NULL),
(98, 'Dress len', '1620485178_1104946-z.jpg', 46.00, 3, 32, 0, 'Dáng đầm: Đầm dáng xòe Họa Tiết: Trơn Kiểu tay: ngắn tay Loại trang phục: Chất liệu: Vải cát nhật dày mịn có lót', '2021-05-08', 0, '0', '0', 3, 3, 2, NULL, NULL),
(99, 'Dress tommy A0', '1620485205_A0FC151C_001_FNT.jpg', 44.00, 3, 33, 0, 'Chất liệu: Polyester', '2021-05-08', 0, '0', '0', 3, 3, 2, NULL, NULL),
(100, 'Dress chanel h2', '1620485262_h2_19732972a_b_large.jpg', 197.00, 3, 32, 1, 'Chất liệu : Cotton 100%', '2021-05-08', 0, '0', '0', 3, 4, 2, NULL, NULL),
(101, 'Dress vest', '1620485326_e85454e9543dd70f92ade05fb388f952.jpg', 85.00, 3, 36, 0, 'Dáng đầm: Đầm trang trọng Họa Tiết: Trơn', '2021-05-08', 0, '0', '0', 3, 4, 2, NULL, NULL),
(102, 'Dress getty', '1620485374_gettyimages-1178359361-594x594.jpg', 117.00, 3, 33, 0, 'túi nắp là túi thật cho các chị em đựng tiền hay', '2021-05-08', 0, '0', '0', 3, 4, 2, NULL, NULL),
(103, 'Victoria fall', '1620485425_Victoria-Beckham-Fall-2010-T5Clz5tMM5mx.jpg', 200.00, 3, 33, 0, 'Chất liệu : Cotton 100%', '2021-05-08', 0, '0', '0', 3, 5, 2, NULL, NULL),
(104, 'Dress hermas m5', '1620485462_m_5d7317acfe19c7e580a2e165.jpg', 731.00, 3, 32, 0, 'Chất liệu: Polyester', '2021-05-08', 0, '0', '0', 3, 5, 2, NULL, NULL),
(105, 'Dress gettyi', '1620485501_gettyimages-1039847430-612x612.jpg', 612.00, 3, 33, 1, 'Chất liệu: tuyết mưa hàn quốc Xuất xứ: Việt Nam', '2021-05-08', 0, '0', '0', 3, 5, 2, NULL, NULL),
(106, 'Dress yellow hermas', '1620485550_gettyimages-1251995958-612x612.jpg', 125.00, 3, 32, 0, 'ko bị mất fom', '2021-05-08', 0, '0', '0', 3, 5, 2, NULL, NULL),
(107, 'Fashion chnel vintage', '1620485604_340493c99c6f6d462b7a3f646b0d2504--coco-chanel-fashion-chanel-vintage.jpg', 340.00, 3, 50, 0, 'EM NÀY là VÁY ĐẦM FOM A nên dễ mặc', '2021-05-08', 0, '0', '0', 3, 4, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `role_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role_name`, `created_at`, `updated_at`) VALUES
(1, 'user', NULL, NULL),
(2, 'admin', NULL, NULL),
(3, 'super_admin', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `type_products`
--

DROP TABLE IF EXISTS `type_products`;
CREATE TABLE IF NOT EXISTS `type_products` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `type_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `type_products`
--

INSERT INTO `type_products` (`id`, `type_name`, `created_at`, `updated_at`) VALUES
(1, 'Shirt', NULL, NULL),
(2, 'Trousers', NULL, NULL),
(3, 'Dress', NULL, NULL),
(5, 'Luis Vuitton', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `type_users`
--

DROP TABLE IF EXISTS `type_users`;
CREATE TABLE IF NOT EXISTS `type_users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `type_user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `type_users`
--

INSERT INTO `type_users` (`id`, `type_user_name`, `created_at`, `updated_at`) VALUES
(1, 'customer', NULL, NULL),
(2, 'vip', NULL, NULL),
(3, 'admin', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token_cart` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `users_type_user_id_foreign` (`type_user_id`),
  KEY `users_role_id_foreign` (`role_id`)
) ENGINE=MyISAM AUTO_INCREMENT=56 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `phone`, `token_cart`, `type_user_id`, `role_id`, `remember_token`, `created_at`, `updated_at`, `email_verified_at`) VALUES
(54, 'superadminquyen', '$2y$10$nfNcSqi8fcNeR..Tpd8fZOf7zNg.s7uUjS.pFM0MKE8u/aSODR5oC', 'nguyenhuuquyen2001@gmail.com', '0123456789', NULL, 3, 3, NULL, NULL, NULL, '2021-06-08 23:56:45'),
(52, 'adminquyen', '$2y$10$M5hXrf12eQngjrzuVJG6DOn5kErxpBd78WJcLYSg4P6a4459iGBjC', 'nguyenhuuquyen2001@gmail.com', '0123456789', NULL, 3, 2, NULL, NULL, NULL, '2021-06-08 13:22:11'),
(49, 'nguyenteo', '$2y$10$05KfSvqvqtsUd1Lnx4oK7OnmdYutNpVwLEgf0l78zx4KwAduPWUJO', 'backend2nhom4@gmail.com', '098765432', NULL, 3, 3, 'wIvjHYVRjnNJNOWqzpufFbGvskIG6zJEzRrNsf60NTL3fSv85xtuRbUkoice', NULL, NULL, '2021-05-31 18:33:59'),
(55, 'vuducthien', '$2y$10$lvDmh1mftf0axLy52hFrEOCYXwIUWd.c8bo5c5Xwwy/QCxry2.v0O', 'thienaka2p@gmail.com', '1234564356', NULL, 3, 2, NULL, NULL, NULL, '2021-06-09 06:52:09'),
(51, 'nhquyen', '$2y$10$b43A84tyWPrdpRasLMExCOm40c05ISibMNtQkraG2oBN7g9JzpHT6', 'nguyenhuuquyen2001@gmail.com', '0123456789', NULL, 1, 1, NULL, NULL, NULL, '2021-06-01 13:52:35');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
