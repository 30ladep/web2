-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3309
-- Generation Time: May 14, 2021 at 03:12 PM
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
-- Database: `demoauth`
--

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
  `bill_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `count_product` int(11) NOT NULL,
  `count_price` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `detail_bills_bill_id_foreign` (`bill_id`),
  KEY `detail_bills_product_id_foreign` (`product_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(35, 8, '657861_ZAGZG_4337_011_100_0000_Light.jpg', NULL, NULL);

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
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `manufactures`
--

INSERT INTO `manufactures` (`id`, `manu_name`, `created_at`, `updated_at`) VALUES
(1, 'Gucci', NULL, NULL),
(2, 'Adidas', NULL, NULL),
(3, 'Tommy', NULL, NULL),
(4, 'Chanel', NULL, NULL),
(5, 'Hermas', NULL, NULL);

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
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(15, '2021_05_11_222407_delete_column_user', 1);

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
(2, 'GG perforated cotton cardigan', '655105_XKBWE_9275_001_100_0000_Light.jpg', 1000.00, 0, 30, 1, 'Inspired by the original Gucci rhombi motif from the \'30s, the House\'s monogram is revisited and reimagined in new variations each season. On this cardigan, the GG pattern appears as a perforated design, achieved using a needle punch technique.', '2021-05-10', 0, '0', '0', 1, 1, 32, NULL, NULL),
(3, 'Knit wool blend cardigan with Web', '626349_XKBFJ_2184_001_100_0000_Light.jpg', 1800.00, 0, 29, 1, 'Classic knitwear is reimagined with refined details and emblematic House codes. Crafted from camel knit wool blend, this cardigan brings back the green and red Web as an unexpected detail accenting the pockets, while the shiny gold-toned Double G logos add a precious note.', '2021-05-10', 0, '0', '0', 1, 1, 30, NULL, NULL),
(4, 'Viscose linen single-breasted jacket', '652009_ZAFHJ_3271_001_100_0000_Light.jpg', 2500.00, 0, 29, 1, 'Refined, yet unexpected details adorn new expressions of structure. From jackets that play with new proportions to pants that redefine fit, codes that have become synonymous with the House remain a symbol of lasting beauty. Presented in light green, the single-breasted jacket is renewed with a viscose linen blend, giving it a fresher feel.', '2021-05-10', 1, '0', '1', 1, 1, 30, NULL, NULL),
(5, 'Tulip print silk shirt', '654647_ZAGZG_4337_001_100_0000_Light.jpg', 1400.00, 0, 28, 0, 'Ouverture continues to view classic silhouettes with a contemporary eye. Daywear dresses are printed with colorful flowers, conveying a fresh feel. This oversize shirt is printed with tulips over a light blue silk background.', '2021-05-10', 0, '0', '1', 1, 1, 55, NULL, NULL),
(6, 'Tartan check wool pant', '653360_ZAFVF_9672_001_100_0000_Light.jpg', 1400.00, 0, 30, 1, 'Defined by a muted beige and green tartan check, these wool blend pants carry a distinct vintage vibe. Front pleats and cuffed hems speak to the House’s long history of collegiate-inspired fashion.', '2021-05-10', 1, '0', '0', 2, 1, 30, NULL, NULL),
(7, 'Cotton viscose twill pant', '651686_ZAGP3_9028_001_100_0000_Light.jpg', 1100.00, 0, 30, 1, 'These cream cotton viscose twill pants with front pleats are imbued with a distinct college aesthetic. Their relaxed fit is an expression of the possibilities that lie within familiar silhouettes.', '2021-05-10', 0, '0', '0', 2, 1, 30, NULL, NULL),
(8, 'Tulip print silk shorts', '657861_ZAGZG_4337_001_100_0000_Light.jpg', 980.00, 0, 29, 1, 'Ouverture continues to view classic silhouettes with a contemporary eye. Daywear dresses are printed with colorful flowers, conveying a fresh feel. This pair of shorts are printed with tulips over a light blue silk background.', '2021-05-10', 0, '0', '1', 2, 1, 30, NULL, NULL),
(9, 'Gucci nam 161', '1620481786_aothunnamGucci161_650.jpg', 64.00, 0, 35, 1, 'Áo Thun Nam màu trơn Cổ Bẻ Ngắn Tay', '2021-05-08', 0, '0', '1', 1, 1, 11, NULL, NULL),
(10, 'Gucci nam x2', '1620481881_aothunnamGucci131_650.jpg', 57.00, 0, 31, 1, 'Chất liệu: Polyester, mềm mại.', '2021-05-08', 0, '0', '1', 1, 1, 2, NULL, NULL),
(11, 'Gucci logy', '1620481921_655459_XJDLY_5904_001_100_0000_Light-T-shirt-with-25-Gucci-Eschatology-in-Pink-1921-print.jpg', 45.00, 0, 34, 1, 'Chất liệu : Cotton 100%', '2021-05-08', 0, '0', '0', 1, 1, 13, NULL, NULL),
(12, 'Adidas dream', '1620481980_all-day-i-dream_700.jpg', 45.00, 0, 32, 1, 'Mát mẻ thoải mái.', '2021-05-08', 0, '0', '1', 1, 2, 9, NULL, NULL),
(13, 'Adidas cropped-tea', '1620482016_cropped-tee_700.jpg', 256.00, 0, 26, 1, 'Chất liệu : Cotton 100%', '2021-05-08', 0, '0', '1', 1, 2, 5, NULL, NULL),
(14, 'Áo thun Adidas linear', '1620482067_linear-repeat_850.jpg', 45.00, 0, 29, 0, 'Áo thun nam là trang phục giúp các chàng trai làm mới phong cách của chính mình', '2021-05-08', 0, '0', '1', 1, 2, 21, NULL, NULL),
(15, 'The run adidas', '1620482107_o-tank-top-chạy-bộ-adidas-own-the-run-primeblue_550.jpg', 54.00, 0, 25, 1, 'Thiết kế cổ bẻ xẻ trụ đơn giản, cực kỳ năng động', '2021-05-08', 0, '0', '0', 1, 2, 21, NULL, NULL),
(16, 'Thun Adidas b2', '1620482151_o-thun_850.jpg', 25.00, 0, 36, 0, 'àng phối cùng nhiều kiểu jeans bụi phủi,', '2021-05-08', 0, '0', '0', 1, 2, 98, NULL, NULL),
(17, 'Áo thun adidas graphic', '1620482191_o-thun-graphic-primeblue-fast_800.jpg', 32.00, 0, 65, 0, 'Hàng có sẵn đủ size: M, L, XL, XX️', '2021-05-08', 0, '0', '1', 1, 2, 5, NULL, NULL),
(18, 'Ao thun adidas street', '1620482219_o-thun-graphic-street_700.jpg', 25.00, 0, 65, 1, 'Thiết kế cổ bẻ xẻ trụ đơn giản', '2021-05-08', 0, '0', '0', 1, 2, 25, NULL, NULL),
(19, 'Thun thể thao adidas', '1620482261_o-thun-graphic-thể-thao-tech_550.jpg', 45.00, 0, 64, 0, 'Áo phông nam cổ bẻ việt nam', '2021-05-08', 0, '0', '0', 1, 2, 25, NULL, NULL),
(20, 'Ao thun ncessi', '1620482292_o-thun-necessi-tee_650.jpg', 7.00, 0, 35, 1, 'Áo Thun Nam màu trơn Cổ Bẻ Ngắn Tay', '2021-05-08', 0, '0', '0', 1, 2, 25, NULL, NULL),
(21, 'Thun 3 sọc', '1620482324_o-thun-slim-3-sọc-primeblue-aeroready_700.jpg', 31.00, 0, 33, 0, 'Chất liệu : Cotton 100%', '2021-05-08', 0, '0', '1', 1, 2, 78, NULL, NULL),
(22, 'Sơ mi nam 75', '1620482384_7-5.jpg', 75.00, 0, 29, 1, 'Chất liệu cao cấp mềm mại', '2021-05-08', 0, '0', '1', 1, 3, 12, NULL, NULL),
(23, 'Thun tommy g9', '1620482414_918jmn9+2YL._SS350_AC_.jpg', 5.00, 0, 33, 1, 'Chất liệu: Polyester', '2021-05-08', 0, '0', '1', 1, 3, 123, NULL, NULL),
(24, 'Thun bd', '1620482456_tải xuống.jpg', 100.00, 0, 35, 1, 'Form dáng body vừa người , phù hợp du lịch', '2021-05-08', 0, '0', '0', 1, 3, 6, NULL, NULL),
(25, 'Thun nam tommy h1', '1620482504_rsz_2064887_l.jpg', 44.00, 0, 55, 0, 'chất liệu cao cấp, giá thành hợp lý, sỉ lẻ giá tốt', '2021-05-08', 0, '0', '1', 1, 3, 25, NULL, NULL),
(26, 'Thun tommy paita-aics', '1620482549_lyhythihainen-t-paita-asics-running-essentials-12-zip-top-f0bdf.jpg', 4.00, 0, 78, 1, 'Dáng Ôm Thời Trang Cam Cấp', '2021-05-08', 0, '0', '1', 1, 3, 23, NULL, NULL),
(27, 'Thun chanel đủ loại', '1620482603_2d090e98d4d832c5935c5742a0c53c87jfif.jpg', 45.00, 0, 45, 0, 'Hàng có sẵn đủ size: M, L, XL, XX️', '2021-05-08', 0, '0', '0', 1, 4, 654, NULL, NULL),
(28, 'Chanel blue', '1620482647_5fc38711c27ca7a8f1eb734850ace95d-600x494.jpg', 456.00, 0, 64, 1, 'Chất liệu : Cotton 100%', '2021-05-08', 0, '0', '0', 1, 4, 82, NULL, NULL),
(29, 'Chanel purple', '1620482678_873646fc-a42b-4ce9-a58a-7fda09ecce04.jpg', 455.00, 0, 45, 1, 'Chất liệu : Cotton 100%', '2021-05-08', 0, '0', '0', 1, 4, 25, NULL, NULL),
(30, 'chanel wb', '1620482715_74397285_138671914199766_3078203838432280576_n.jpg', 654.00, 0, 34, 1, 'Lên mua', '2021-05-08', 0, '0', '0', 1, 4, 3, NULL, NULL),
(31, 'shirt chanel hr', '1620482757_1555694983-527-dung-ao-50-trieu-dong-phuong-chanel-co-dep-hon-sieu-sao-quoc-te-vq4r-huqrnan3642600-1555561272-width600height749.jpg', 54.00, 0, 54, 0, '....', '2021-05-08', 0, '0', '0', 1, 4, 65, NULL, NULL),
(32, 'Thanh chanel shirt', '1620482796_Chanel-thanh.jpg', 9999.00, 0, 66, 0, 'cry', '2021-05-08', 0, '0', '1', 1, 4, 1, NULL, NULL),
(33, 'Chanel thun nam hàng hiệu', '1620482827_o-thun-nam-hàng-hiệu-chanel-siêu-cấp_1490.jpg', 45.00, 0, 35, 1, 'Chất liệu: Polyester', '2021-05-08', 0, '0', '1', 1, 4, 6, NULL, NULL),
(34, 'shirt chanel q2', '1620482856_q2-48-1-hong.jpg', 456.00, 0, 54, 1, 'Chất liệu : Cotton 100%', '2021-05-08', 0, '0', '0', 1, 4, 12, NULL, NULL),
(35, 'Thun cam', '1620482891_9ac835939dfa3031d8db4c61b456ab71.png', 32.00, 0, 45, 1, 'Áo Thun Nam màu trơn Cổ Bẻ Ngắn Tay', '2021-05-08', 0, '0', '1', 1, 5, 65, NULL, NULL),
(36, 'Thun đẹp hermes hàng hiệu', '1620482929_áo-hermes-hàng-hiệu.png', 998.00, 0, 32, 1, 'Chất liệu : Cotton 100%', '2021-05-08', 0, '0', '1', 1, 5, 2, NULL, NULL),
(37, 'Áo phông nam đẹp', '1620482957_ao-phong-nam-dep-hang-hieu-hermes-tuyet-dep-1500932948-59766b5400298.jpg', 54.00, 0, 45, 1, 'Chất liệu : Cotton 100%', '2021-05-08', 0, '0', '1', 1, 5, 12, NULL, NULL),
(38, 'Thun cổ be hermes', '1620482983_ao-thun-co-be-hermes-nam-den.jpg', 32.00, 0, 45, 0, 'Áo Thun Nam màu trơn Cổ Bẻ Ngắn Tay', '2021-05-08', 0, '0', '1', 1, 5, 32, NULL, NULL),
(39, 'Thun nam coco', '1620483022_ao-thun-nam-co-co-la-bay-rsp034-6.jpg', 98.00, 0, 35, 0, 'Chất liệu mát mẻ', '2021-05-08', 0, '0', '1', 1, 5, 78, NULL, NULL),
(40, 'Thun cổ be xanh', '1620483049_ao-thun-co-be-hermes-nam-xanh-ly.jpg', 33.00, 0, 33, 1, 'Chất liệu: Polyester', '2021-05-08', 0, '0', '1', 1, 5, 234, NULL, NULL),
(41, 'Thun cổ be trắng', '1620483080_ao-thun-co-be-hermes-nam-trang.jpg', 43.00, 0, 25, 0, 'Áo Thun Nam màu trơn Cổ Bẻ Ngắn Tay', '2021-05-08', 0, '0', '1', 1, 5, 32, NULL, NULL),
(42, 'Áo hermes a15', '1620483114_54b140349caf84a9d26b47b0c55ec5a1.jpg', 23.00, 0, 45, 0, 'Chất liệu: Polyester', '2021-05-08', 0, '0', '1', 1, 5, 24, NULL, NULL),
(43, 'Quần gucci pre', '1620483161_30S---GUCCI_PRE---605437XJB9I2103.jpg', 234.00, 0, 43, 1, 'Chất liệu: Polyester', '2021-05-08', 0, '0', '0', 2, 1, 32, NULL, NULL),
(44, 'Gucci quần nam 7ee', '1620483190_73eebe35-aa4d-4a80-a811-6f1d652197c1.jpg', 43.00, 0, 43, 1, 'Chất liệu : Cotton 100%', '2021-05-08', 0, '0', '1', 2, 1, 23, NULL, NULL),
(45, 'Quần cộc gucci nâu vàng', '1620483221_597837Z403L2286beige-01.jpg', 43.00, 0, 53, 0, 'Chất liệu : Cotton 100%', '2021-05-08', 0, '0', '1', 2, 1, 23, NULL, NULL),
(46, 'Gucci blue trousers', '1620483258_gucci-blue-trousers-with-embroidery-brand-size-48-598647-zabk2-4240.jpg', 321.00, 0, 32, 1, 'chất lượng sản phẩm tốt Cam kết sản phẩm 100% giống ảnh và giới thiệu', '2021-05-08', 0, '0', '1', 2, 1, 645, NULL, NULL),
(47, 'Gucci straightleg', '1620483289_gucci-straightleg-tailored-trousers-brand-size-40-596963-zad88-6055.jpg', 53.00, 0, 43, 0, 'Quần vải gió (vải dù) nhập khẩu cao cấp túi khóa và phù hợp vận động mạnh', '2021-05-08', 0, '0', '1', 2, 1, 23, NULL, NULL),
(48, 'Gucci viscose', '1620483328_viscose-gucci-trousers-11004734-1_1.jpg', 43.00, 0, 56, 1, 'mặc thoáng mát và thoải mái', '2021-05-08', 0, '0', '0', 2, 1, 321, NULL, NULL),
(49, 'Versace medusa', '1620483352_versace-medusa-print-straightleg-jeans-brand-size-32-a85058a232789a8005.jpg', 43.00, 0, 54, 0, 'Chất liệu: Polyester', '2021-05-08', 0, '0', '1', 2, 1, 23, NULL, NULL),
(50, 'satel adidas', '1620483386_astel316161a564_q6_2-0_UX357_QL90_.jpg', 123.00, 0, 40, 1, 'Chất liệu : Cotton 100%', '2021-05-08', 0, '0', '1', 2, 2, 654, NULL, NULL),
(51, 'astel đen', '1620483425_astel315961071b_q1_2-0.jpg', 87.00, 0, 54, 0, 'Chất liệu : Cotton 100%', '2021-05-08', 0, '0', '0', 2, 2, 65, NULL, NULL),
(52, 'Big logo track', '1620483455_Big_Logo_Track_Pants_Blue_FM2560.jpg', 25.00, 0, 45, 0, 'Chất liệu : Cotton 100%', '2021-05-08', 0, '0', '0', 2, 2, 432, NULL, NULL),
(53, 'Jpers adidas', '1620483484_jpers4077712741_q6_2-0_UX357_QL90_.jpg', 235.00, 0, 43, 1, 'Thể thao', '2021-05-08', 0, '0', '0', 2, 2, 432, NULL, NULL),
(54, 'track pants black', '1620483513_Track_Pants_Black_GK6169_21_model.jpg', 99.00, 0, 43, 0, 'Thể thao', '2021-05-08', 0, '0', '0', 2, 2, 55, NULL, NULL),
(55, 'Track pants beige', '1620483544_Track_Pants_Beige_ED7457_01_laydown.jpg', 254.00, 0, 45, 1, 'Bộ đôi', '2021-05-08', 0, '0', '1', 2, 2, 321, NULL, NULL),
(56, 'track pants 3 sọc', '1620483575_Track_pants_3_Soc_Ba_La_3D_Adicolor_DJen_GN3543_21_model.jpg', 77.00, 0, 25, 1, 'Chất liệu : Cotton 100%', '2021-05-08', 0, '0', '1', 2, 2, 44, NULL, NULL),
(57, 'Lgenc adidas', '1620483604_lgenc3130414fce_q6_2-0_UX357_QL90_.jpg', 11.00, 0, 55, 0, 'Chất liệu: Polyester', '2021-05-08', 0, '0', '1', 2, 2, 3354, NULL, NULL),
(58, 'Plant tommy m1', '1620483637_1M87647781_017_alternate4.jpg', 65.00, 0, 35, 0, 'Chất liệu : Cotton 100%', '2021-05-08', 0, '0', '1', 2, 3, 96, NULL, NULL),
(59, 'h2 47', '1620483681_42778574iv_14_f.jpg', 44.00, 0, 43, 0, 'Chất liệu: Thun', '2021-05-08', 0, '0', '1', 2, 3, 34, NULL, NULL),
(60, 'DM001', '1620483708_DM0DM10125_C87_main.jpg', 32.00, 0, 44, 0, 'Chất liệu : Cotton 100%', '2021-05-08', 0, '0', '1', 2, 3, 23, NULL, NULL),
(61, 'Tommy jeans tracksuit', '1620483776_tommy-jeans-tracksuit-pant-002-black-iris_1.jpg', 23.00, 0, 44, 1, 'form dáng suông trẻ trung tạo cảm giác thoải mái cho người mặc', '2021-05-08', 0, '0', '1', 2, 3, 5, NULL, NULL),
(62, 'Tommy hilgiger', '1620483801_tommy-hilfiger-pant-lwk-100752_1.jpg', 58.00, 0, 88, 1, 'Chất liệu: Polyester', '2021-05-08', 0, '0', '1', 2, 3, 665, NULL, NULL),
(63, 'quần chnel 132', '1620483858_132341-5.jpg', 24.00, 0, 32, 0, 'dáng suông rộng trẻ trung', '2021-05-08', 0, '0', '1', 2, 4, 43, NULL, NULL),
(64, 'Chanel 1b2', '1620483894_b657554a60d01b85c22b870ff6148e42.jpg', 43.00, 0, 45, 0, 'Chất liệu : Cotton 100%', '2021-05-08', 0, '0', '0', 2, 4, 65, NULL, NULL),
(65, 'beige wool chanel', '1620483924_beige-wool-chanel-pants.jpg', 54.00, 0, 54, 1, 'Chất liệu: Polyester', '2021-05-08', 0, '0', '0', 2, 4, 35, NULL, NULL),
(66, 'pants navy blue', '1620483960_pants-navy-blue-cotton-tweed-cotton-tweed-packshot-alternative-p70076v61614nb347-8836705976350.jpg', 32.00, 0, 27, 0, 'Hạn chế dùng nước xả vải với quần jeans. Nước xả vải có tác dụng làm mềm vải, dễ khiến quần jeans mất dáng', '2021-05-08', 0, '0', '0', 2, 4, 23, NULL, NULL),
(67, 'pink other chanel', '1620483987_pink-other-chanel-trousers-1522834-1_1.jpg', 555.00, 0, 32, 0, 'Chất liệu : Cotton 100%', '2021-05-08', 0, '0', '0', 2, 4, 23, NULL, NULL),
(68, 'pants pinl late eure', '1620484030_pants-pink-pale-pink-ecru-tweed-tweed-packshot-default-p70016v60002n6537-8834205679646.jpg', 1000.00, 0, 43, 1, 'orm dáng suông rộng trẻ trung', '2021-05-08', 0, '0', '0', 2, 4, 8, NULL, NULL),
(69, 'pants navy cotton', '1620484071_pants-navy-blue-cotton-tweed-cotton-tweed-packshot-default-p70076v61614nb347-8836708597790.jpg', 786.00, 0, 45, 0, 'Form rộng thoải mái.', '2021-05-08', 0, '0', '0', 2, 4, 32, NULL, NULL),
(70, 'Plant hermas 114', '1620486156_114-201710021935_2.jpg', 45.00, 0, 54, 0, 'Chất liệu : Cotton 100%', '2021-05-08', 0, '0', '0', 2, 5, 34, NULL, NULL),
(71, 'Plant hermas 163', '1620486144_beige-synthetic-hermes-trousers-12051656-2_1.jpg', 32.00, 0, 44, 1, 'Chất liệu : Cotton 100%', '2021-05-08', 0, '0', '0', 2, 5, 23, NULL, NULL),
(108, 'Saint germain fitted', '1620486093_saint-germain-fitted-pants--155040H360-worn-2-0-0-1000-1000_b.jpg', 1000.00, 0, 32, 1, 'Chất liệu : Cotton 100%', '2021-05-08', 0, '0', '1', 2, 5, 20, NULL, NULL),
(75, 'Dress gucci xk37', '1620484283_606017_XKA4A_6367_002_100_0000_Light.jpg', 554.00, 0, 45, 1, 'không còn đứng phom', '2021-05-08', 0, '0', '0', 3, 1, 22, NULL, NULL),
(76, 'GG jackquard', '1620484316_GG-jacquard.jpg', 64.00, 0, 54, 0, 'Vải thoáng mát', '2021-05-08', 0, '0', '0', 3, 1, 43, NULL, NULL),
(77, 'za gucci dress', '1620484344_643352_ZAFGT_3408_002_100_0000_Light.jpg', 7.00, 0, 52, 0, 'Chất liệu: Polyester', '2021-05-08', 0, '0', '0', 3, 1, 54, NULL, NULL),
(78, 'Available gucci dress', '1620484384_Available-in.jpg', 122.00, 0, 43, 1, 'Chất liệu : Cotton 100%', '2021-05-08', 0, '0', '0', 3, 1, 42, NULL, NULL),
(79, 'Bn dress gucci', '1620484427_644559_XKBNV_4311_002_100_0000_Light.jpg', 431.00, 0, 34, 0, 'Chất liệu: Bò Phong cách: Dạo phố', '2021-05-08', 0, '0', '0', 3, 1, 342, NULL, NULL),
(80, 'Dress light Gucci', '1620484464_657935_ZAGVN_4337_002_100_0000_Light.jpg', 65.00, 0, 28, 1, 'Ống quần: Dáng suông Chiều dài quần (cm): 100', '2021-05-08', 0, '0', '0', 3, 1, 566, NULL, NULL),
(81, 'Dress g6', '1620484494_657911_ZAG6V_9285_002_100_0000_Light.jpg', 324.00, 0, 32, 1, 'loại quần: Quần dài Xuất Xứ: Việt Nam', '2021-05-08', 0, '0', '0', 3, 1, 435, NULL, NULL),
(82, 'dress lt', '1620484536_652081_ZAGK8_3251_002_100_0000_Light.jpg', 453.00, 0, 34, 0, 'Phong cách: Dạo phố Ống quần: Dáng suông', '2021-05-08', 0, '0', '0', 3, 1, 65, NULL, NULL),
(83, 'Dress gucci cotton polo', '1620484647_653303_XKBSK_9087_001_100_0000_Light-Fine-wool-cotton-polo-dress.jpg', 77.00, 0, 32, 1, 'Phong cách: Dạo phố Ống quần: Dáng suông', '2021-05-08', 0, '0', '0', 3, 1, 3, NULL, NULL),
(84, 'Dress adidas 140', '1620484680_14023826_18288663_1000.jpg', 43.00, 0, 26, 0, 'Chất liệu : Cotton 100%', '2021-05-08', 0, '0', '0', 3, 2, 32, NULL, NULL),
(85, 'Dress adidas 18', '1620484703_1703311492-18.jpg', 42.00, 0, 43, 1, 'Chất liệu : Cotton 100%', '2021-05-08', 0, '0', '0', 3, 2, 23, NULL, NULL),
(86, 'adicolor 3d', '1620484726_Adicolor_3D_Trefoil_Tee_Dress_Red_GD2267_21_model.jpg', 42.00, 0, 43, 1, 'Chất liệu: Polyester', '2021-05-08', 0, '0', '0', 3, 2, 23, NULL, NULL),
(87, 'Classics roll up lack', '1620484749_Adicolor_Classics_Roll-Up_Sleeve_Tee_Dress_Black_GN2777_21_model.jpg', 32.00, 0, 32, 0, 'Chất liệu : Cotton 100%', '2021-05-08', 0, '0', '0', 3, 2, 32, NULL, NULL),
(88, 'Large logo tee', '1620484775_Large_Logo_Tee_Dress_Black_FS7234_21_model.jpg', 323.00, 0, 43, 1, 'Chất liệu : Cotton 100%', '2021-05-08', 0, '0', '0', 3, 2, 23, NULL, NULL),
(89, 'Large dress gay', '1620484795_Large_Logo_Tee_Dress_Grey_FS7233.jpg', 333.00, 0, 32, 0, 'Chất liệu: Polyester', '2021-05-08', 0, '0', '0', 3, 2, 32, NULL, NULL),
(90, 'Logo tee dress orange', '1620484825_Logo_Tee_Dress_Orange_FR7172.jpg', 33.00, 0, 33, 1, 'loại quần: Quần dài Xuất Xứ: Việt Nam', '2021-05-08', 0, '0', '0', 3, 2, 323, NULL, NULL),
(91, 'Dress tommy d3', '1620484871_31DaR5Naj1L.jpg', 3.00, 0, 32, 0, 'loại quần: Quần dài Xuất Xứ: Việt Nam', '2021-05-08', 0, '0', '0', 3, 3, 32, NULL, NULL),
(92, 'Dress tommy 31', '1620484922_31-SQ96-UgL.jpg', 31.00, 0, 55, 1, 'Dáng đầm: Đầm dáng xòe Họa Tiết: Trơn', '2021-05-08', 0, '0', '0', 3, 3, 25, NULL, NULL),
(93, 'Dress tommy Xm', '1620484954_31XmD8uZQsL.jpg', 31.00, 0, 44, 1, 'Loại trang phục: Trang phục buổi tối Chất liệu: vải nhập dày mịn, thấm hút mồ hôi Xuất xứ: Việt Nam', '2021-05-08', 0, '0', '0', 3, 3, 32, NULL, NULL),
(94, 'Dress tommy FNT', '1620484994_76A5859_991_FNT.jpg', 76.00, 0, 32, 0, 'Họa Tiết: Trơn', '2021-05-08', 0, '0', '0', 3, 3, 3, NULL, NULL),
(95, 'Dress tommy b01', '1620485037_76B0734_412_FNT.jpg', 789.00, 0, 34, 1, 'ĐẦM ĐẸP MÚN XỈU lunn á', '2021-05-08', 0, '0', '0', 3, 3, 43, NULL, NULL),
(96, 'Dress cổ vuông', '1620485079_76J1193_641_FNT.jpg', 641.00, 0, 43, 1, 'ÁI GÌ CÓ THỂ THIẾU CHỨ ĐẦM ĐEN THÌ KHÔNG THỂ THIẾU', '2021-05-08', 0, '0', '0', 3, 3, 33, NULL, NULL),
(97, 'Dress tommy Uw', '1620485110_UW02865_600_FNT.jpg', 600.00, 0, 26, 1, 'Chất liệu : Cotton 100%', '2021-05-08', 0, '0', '0', 3, 3, 32, NULL, NULL),
(98, 'Dress len', '1620485178_1104946-z.jpg', 46.00, 0, 32, 0, 'Dáng đầm: Đầm dáng xòe Họa Tiết: Trơn Kiểu tay: ngắn tay Loại trang phục: Chất liệu: Vải cát nhật dày mịn có lót', '2021-05-08', 0, '0', '0', 3, 3, 25, NULL, NULL),
(99, 'Dress tommy A0', '1620485205_A0FC151C_001_FNT.jpg', 44.00, 0, 33, 0, 'Chất liệu: Polyester', '2021-05-08', 0, '0', '0', 3, 3, 22, NULL, NULL),
(100, 'Dress chanel h2', '1620485262_h2_19732972a_b_large.jpg', 197.00, 0, 32, 1, 'Chất liệu : Cotton 100%', '2021-05-08', 0, '0', '0', 3, 4, 97, NULL, NULL),
(101, 'Dress vest', '1620485326_e85454e9543dd70f92ade05fb388f952.jpg', 85.00, 0, 36, 0, 'Dáng đầm: Đầm trang trọng Họa Tiết: Trơn', '2021-05-08', 0, '0', '0', 3, 4, 32, NULL, NULL),
(102, 'Dress getty', '1620485374_gettyimages-1178359361-594x594.jpg', 117.00, 0, 33, 0, 'túi nắp là túi thật cho các chị em đựng tiền hay', '2021-05-08', 0, '0', '0', 3, 4, 32, NULL, NULL),
(103, 'Victoria fall', '1620485425_Victoria-Beckham-Fall-2010-T5Clz5tMM5mx.jpg', 200.00, 0, 33, 0, 'Chất liệu : Cotton 100%', '2021-05-08', 0, '0', '0', 3, 5, 4, NULL, NULL),
(104, 'Dress hermas m5', '1620485462_m_5d7317acfe19c7e580a2e165.jpg', 731.00, 0, 32, 0, 'Chất liệu: Polyester', '2021-05-08', 0, '0', '0', 3, 5, 33, NULL, NULL),
(105, 'Dress gettyi', '1620485501_gettyimages-1039847430-612x612.jpg', 612.00, 0, 33, 1, 'Chất liệu: tuyết mưa hàn quốc Xuất xứ: Việt Nam', '2021-05-08', 0, '0', '0', 3, 5, 123, NULL, NULL),
(106, 'Dress yellow hermas', '1620485550_gettyimages-1251995958-612x612.jpg', 125.00, 0, 32, 0, 'ko bị mất fom', '2021-05-08', 0, '0', '0', 3, 5, 23, NULL, NULL),
(107, 'Fashion chnel vintage', '1620485604_340493c99c6f6d462b7a3f646b0d2504--coco-chanel-fashion-chanel-vintage.jpg', 340.00, 0, 50, 0, 'EM NÀY là VÁY ĐẦM FOM A nên dễ mặc', '2021-05-08', 0, '0', '0', 3, 4, 5, NULL, NULL);

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
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `type_products`
--

INSERT INTO `type_products` (`id`, `type_name`, `created_at`, `updated_at`) VALUES
(1, 'Shirt', NULL, NULL),
(2, 'Trousers', NULL, NULL),
(3, 'Dress', NULL, NULL);

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
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `type_users`
--

INSERT INTO `type_users` (`id`, `type_user_name`, `created_at`, `updated_at`) VALUES
(1, 'customer', NULL, NULL),
(2, 'vip', NULL, NULL);

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
  PRIMARY KEY (`id`),
  KEY `users_type_user_id_foreign` (`type_user_id`),
  KEY `users_role_id_foreign` (`role_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `phone`, `token_cart`, `type_user_id`, `role_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'teo', '$2y$10$gXWm3aJnyNqVMKhkK5VKK.fgIo2zeBT.MGbjHrPzS2mkA3gqC4x4i', 'teo@gmail.com', '1234567891', NULL, 1, 0, 'KtgizNrql6AQX3aQUcLafAQWBnkgnuIpm1teoSxbndlo4JCu5jUMjfT0RVP5', NULL, NULL),
(2, 'teodeptrai', '$2y$10$AuKz0wa1SV0I.uDSukei3eMmVg5r1PTQt20JyzNd4E48wI.WPZWO2', 'teodeptrai@gmail.com', '1234567889', NULL, 1, 0, NULL, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
