/*
 Navicat Premium Data Transfer

 Source Server         : local
 Source Server Type    : MySQL
 Source Server Version : 100139
 Source Host           : localhost:3306
 Source Schema         : bancat

 Target Server Type    : MySQL
 Target Server Version : 100139
 File Encoding         : 65001

 Date: 03/12/2019 14:57:48
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for cart
-- ----------------------------
DROP TABLE IF EXISTS `cart`;
CREATE TABLE `cart`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` smallint(5) UNSIGNED NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for cart_detail
-- ----------------------------
DROP TABLE IF EXISTS `cart_detail`;
CREATE TABLE `cart_detail`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `cart_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `number` int(10) UNSIGNED NOT NULL,
  `price` double(8, 2) NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for cate
-- ----------------------------
DROP TABLE IF EXISTS `cate`;
CREATE TABLE `cate`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `pos` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of cate
-- ----------------------------
INSERT INTO `cate` VALUES (5, 'BÀN CẮT VẢI', 'ban-cat-vai', '', 999, '2019-12-03 11:44:13', '2019-12-03 11:44:13');
INSERT INTO `cate` VALUES (6, 'GHẾ NGỒI MÁY MAY', 'ghe-ngoi-may-may', '', 999, '2019-12-03 11:44:24', '2019-12-03 11:44:24');
INSERT INTO `cate` VALUES (7, 'BÀN CHUYỀN MAY', 'ban-chuyen-may', '', 999, '2019-12-03 11:44:30', '2019-12-03 11:44:30');
INSERT INTO `cate` VALUES (8, 'BÀN KIỂM HÀNG', 'ban-kiem-hang', '', 999, '2019-12-03 11:45:17', '2019-12-03 11:45:17');
INSERT INTO `cate` VALUES (9, 'GIÁ KỆ ĐỂ VẢI', 'gia-ke-de-vai', '', 999, '2019-12-03 11:45:30', '2019-12-03 11:45:30');
INSERT INTO `cate` VALUES (10, 'PALLET SẮT', 'pallet-sat', '', 999, '2019-12-03 11:45:40', '2019-12-03 11:45:40');
INSERT INTO `cate` VALUES (11, 'BÀN GHẾ QUÁN ĂN', 'ban-ghe-quan-an', '', 999, '2019-12-03 11:45:50', '2019-12-03 11:45:50');
INSERT INTO `cate` VALUES (12, 'MÁY CẮT VẢI CÔNG NGHIỆP', 'may-cat-vai-cong-nghiep', '', 999, '2019-12-03 11:46:03', '2019-12-03 11:46:03');

-- ----------------------------
-- Table structure for config
-- ----------------------------
DROP TABLE IF EXISTS `config`;
CREATE TABLE `config`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of config
-- ----------------------------
INSERT INTO `config` VALUES (1, 'Web bàn cắt', 'Đơn vị chuyên phân phối sỉ và lẻ bàn cắt.', NULL, '2019-12-03 11:43:33');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 18 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (3, '2019_10_22_124752_create_config_table', 2);
INSERT INTO `migrations` VALUES (16, '2019_11_06_131558_create_cart_table', 3);
INSERT INTO `migrations` VALUES (13, '2019_11_06_131502_create_product_table', 3);
INSERT INTO `migrations` VALUES (14, '2019_11_06_131520_create_news_table', 3);
INSERT INTO `migrations` VALUES (15, '2019_11_06_131546_create_store_table', 3);
INSERT INTO `migrations` VALUES (17, '2019_11_06_131612_create_cart_detail_table', 3);

-- ----------------------------
-- Table structure for news
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pos` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of news
-- ----------------------------
INSERT INTO `news` VALUES (5, 'HẢI SẢN TƯƠI SỐNG', 'hai-san-tuoi-song', 'hai-san-tuoi-song.jpeg?n=1575351429', 'ewrewr', '<p>ewrewrewr</p>\r\n\r\n<p>ewrewrewr</p>\r\n\r\n<p>ewrewrewr</p>\r\n\r\n<p>ewrewrewr</p>\r\n\r\n<p>ewrewrewr</p>\r\n\r\n<p>ewrewrewrdzsfdsfdsfdshgfhgewirgewgrjhgehjghj</p>', 999, '2019-12-03 12:06:16', '2019-12-03 12:40:57');

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL
) ENGINE = MyISAM CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for product
-- ----------------------------
DROP TABLE IF EXISTS `product`;
CREATE TABLE `product`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `type` smallint(5) UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `list_img` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `origin` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` smallint(5) UNSIGNED NOT NULL,
  `pos` int(10) UNSIGNED NOT NULL,
  `price` float NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of product
-- ----------------------------
INSERT INTO `product` VALUES (9, 1, 'Chuối Laba King Đà Lạt9', 'chuoi-laba-king-da-lat9', 'chuoi-laba-king-da-lat.jpeg?n=1573098335', '[\"chuoi-laba-king-da-lat_0.jpeg?n=1573105630\",\"chuoi-laba-king-da-lat_1.jpeg?n=1573105630\",\"chuoi-laba-king-da-lat_2.jpeg?n=1573105630\",\"chuoi-laba-king-da-lat_3.jpeg?n=1573105630\",\"chuoi-laba-king-da-lat_4.jpeg?n=1573105630\",\"chuoi-laba-king-da-lat_5.jpeg?n=1573105630\"]', 'CHUỐI LABA KING là thương hiệu chuối LABA xuất khẩu vào thị trường Nhật Bản do công ty Naturesh Farm Nhật Bản hợp tác với Công ty Chuối Laba Dalat. Khác với việc sản xuất nông sản thông thường, sản phẩm chuối LABA KING được ra đời dưới sự giám sát chặt chẽ của các chuyên gia Nhật. Mỗi lô hàng trước khi xuất khẩu vào thị trường Nhật đều được cơ quan chức năng Nhật Bản và Việt Nam kiểm tra dư lượng thuốc BVTV, đối chiếu các chỉ tiêu về vi sinh vật và kiểm dịch thực vật nghiêm ngặt. Laba King đã được tổ chức SGS Thụy Sĩ giám sát, đánh giá và cấp chứng nhận Global.G.A.P. chính vì lẽ đó, LABA KING là loại chuối cao cấp nhất trên thị trường hiện nay.', '<h2 style=\"text-align:center\"><span style=\"font-size:24px\"><span style=\"color:#008000\"><strong>CHUỐI LABA KING &ndash; VUA CỦA CHUỐI</strong></span></span></h2>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:16px\"><em>MP Fruit cam kết 100% n&oacute;i kh&ocirc;ng với chất bảo quản &amp; tr&aacute;i c&acirc;y Trung Quốc!</em></span></p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\">&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"Trái cây Hoa Biển\" src=\"https://traicayhoabien.com/upload/images/37253630_1792152300869240_7464480184935120896_n(1).jpg\" style=\"width:600px\" /></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\"><span style=\"font-size:16px\"><span style=\"color:#1c1e21\">- Được thi&ecirc;n nhi&ecirc;n ban tặng điều kiện kh&iacute; hậu v&agrave; thổ nhưỡng đặc trưng, Đ&agrave; Lạt sở hữu nhiều loại đặc sản nổi tiếng, trong số đ&oacute;, Chuối Laba</span><span style=\"color:#1c1e21\">&nbsp;l&agrave; một c&aacute;i t&ecirc;n đ&atilde; trở n&ecirc;n nổi tiếng từ thời Ph&aacute;p thuộc đến nay, khi người Ph&aacute;p chiếm đ&oacute;ng khu vực n&agrave;y v&agrave;o cuối thế kỷ 19 họ ph&aacute;t hiện ở đ&acirc;y c&oacute; một giống chuối v&ocirc; c&ugrave;ng đặc biệt: độ ngọt đậm đ&agrave;, rất dẻo v&agrave; thơm ngon, loại chuối n&agrave;y ho&agrave;n to&agrave;n kh&aacute;c biệt so với những loại chuối kh&aacute;c m&agrave; họ đ&atilde; từng biết</span><span style=\"color:#1c1e21; font-family:inherit\">&nbsp;đến v&agrave; người d&acirc;n tộc bản địa gọi l&agrave; <a href=\"https://traicayhoabien.com/san-pham/chuoi-laba-king-da-lat.html\">Chuối Laba</a>. C&aacute;c chủ đồn điền người Ph&aacute;p đ&atilde; cho nh&acirc;n giống loại chuối qu&yacute; n&agrave;y v&agrave; trồng th&agrave;nh c&aacute;c trang trại ở v&ugrave;ng ngoại &ocirc; th&agrave;nh phố để cung cấp cho c&aacute;c quan chức người Ph&aacute;p tại Việt Nam.&nbsp;</span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\">&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"Trái cây Hoa Biển\" src=\"https://traicayhoabien.com/upload/images/4cea4c0d6ea28afcd3b3.jpg\" style=\"width:600px\" /></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\"><br />\r\n&nbsp;</p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\"><span style=\"font-size:16px\"><span style=\"color:#1c1e21; font-family:inherit\">- Trong qu&aacute; khứ <a href=\"https://traicayhoabien.com/san-pham/chuoi-laba-king-da-lat.html\">Chuối Laba Đ&agrave; Lạt</a>&nbsp;c&ograve;n l&agrave; một sản vật m&agrave; người d&acirc;n tộc bản địa nơi đ&acirc;y d&ugrave;ng để d&acirc;ng l&ecirc;n nh&agrave; Vua ở c&aacute;c triều đại phong kiến Việt Nam n&ecirc;n n&oacute; c&ograve;n c&oacute; t&ecirc;n gọi l&agrave; <a href=\"https://traicayhoabien.com/san-pham/chuoi-laba-king-da-lat.html\">Chuối tiến Vua</a>.</span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\">&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"Trái cây Hoa Biển\" src=\"https://traicayhoabien.com/upload/images/3d0f73316d9e89c0d08f.jpg\" style=\"width:600px\" /></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\"><br />\r\n&nbsp;</p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\"><span style=\"font-size:16px\"><span style=\"color:#1c1e21; font-family:inherit\">- Đ&acirc;y l&agrave; một loại chuối v&ocirc; c&ugrave;ng kh&oacute; trồng v&agrave; chỉ c&oacute; thể trồng được ở những v&ugrave;ng kh&iacute; hậu m&aacute;t mẻ tr&ecirc;n nền đất đỏ Bazan c&oacute; độ cao từ 1000m &ndash; 1500m so với mặt nước biển, bi&ecirc;n độ nhiệt giữa ng&agrave;y v&agrave; đ&ecirc;m lớn, phải mất tới 13 - 17 th&aacute;ng mới cho thu hoạch trong khi c&aacute;c loại chuối kh&aacute;c chỉ mất c&oacute; 8 th&aacute;ng.<br />\r\n- Hiện nay d&ograve;ng chuối hiếm n&agrave;y đang được kh&ocirc;i phục với mong muốn giới thiệu loại chuối đặc sản n&agrave;y của Đ&agrave; Lạt ra thế giới với thương hiệu Laba King. C&ocirc;ng ty Chuối Laba Dalat đặt tại th&agrave;nh phố Đ&agrave; Lạt, l&agrave; doanh nghiệp đầu ti&ecirc;n c&oacute; m&ocirc; h&igrave;nh sản xuất kh&eacute;p k&iacute;n, từ kh&acirc;u nh&acirc;n giống trong ph&ograve;ng th&iacute; nghiệm, trồng, chăm s&oacute;c, thu hoạch v&agrave; xử l&yacute; sau thu hoạch.</span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\">&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"Trái cây Hoa Biển\" src=\"https://traicayhoabien.com/upload/images/5a7a50be75199147c808.jpg\" style=\"width:600px\" /></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:center\"><span style=\"font-size:16px\">Chứng nhận Global Gap của Chuối Laba King</span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\">&nbsp;</p>\r\n\r\n<div class=\"text_exposed_show\" style=\"background-color:#ffffff; color:#1c1e21; display:inline; font-family:Helvetica,Arial,sans-serif; font-size:14px\">\r\n<p style=\"margin-left:0px; margin-right:0px\"><span style=\"font-size:16px\">- <a href=\"https://traicayhoabien.com/san-pham/chuoi-laba-king-da-lat.html\">CHUỐI LABA KING</a> l&agrave; thương hiệu chuối LABA xuất khẩu v&agrave;o thị trường Nhật Bản do c&ocirc;ng ty Naturesh Farm Nhật Bản hợp t&aacute;c với C&ocirc;ng ty Chuối Laba Dalat. Kh&aacute;c với việc sản xuất n&ocirc;ng sản th&ocirc;ng thường, sản phẩm chuối LABA KING được ra đời dưới sự gi&aacute;m s&aacute;t chặt chẽ của c&aacute;c chuy&ecirc;n gia Nhật. Mỗi l&ocirc; h&agrave;ng trước khi xuất khẩu v&agrave;o thị trường Nhật đều được cơ quan chức năng Nhật Bản v&agrave; Việt Nam kiểm tra dư lượng thuốc BVTV, đối chiếu c&aacute;c chỉ ti&ecirc;u về vi sinh vật v&agrave; kiểm dịch thực vật nghi&ecirc;m ngặt. Laba King đ&atilde; được tổ chức SGS Thụy Sĩ gi&aacute;m s&aacute;t, đ&aacute;nh gi&aacute; v&agrave; cấp chứng nhận Global.G.A.P. ch&iacute;nh v&igrave; lẽ đ&oacute;, LABA KING l&agrave; loại chuối cao cấp nhất tr&ecirc;n thị trường hiện nay.<br />\r\n- Thương hiệu <a href=\"https://traicayhoabien.com/san-pham/chuoi-laba-king-da-lat.html\">LABA KING</a> đ&atilde; được Cục Sở hữu tr&iacute; tuệ (Bộ Khoa học C&ocirc;ng nghệ) ch&iacute;nh thức c&ocirc;ng nhận v&agrave; bảo hộ độc quyền.</span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\">&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"Trái cây Hoa Biển\" src=\"https://traicayhoabien.com/upload/images/e66d29a10c06e858b117.jpg\" style=\"width:600px\" /></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:center\"><span style=\"font-size:16px\">Qu&aacute; tr&igrave;nh ch&iacute;n của chuối Laba t&iacute;nh theo ng&agrave;y</span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\"><span style=\"font-size:16px\">- Bảo quản v&agrave; c&aacute;ch sử dụng : bảo quản nhiệt độ tốt nhất l&agrave; 18 độ C, ở nhiệt độ ph&ograve;ng chuối sẽ ch&iacute;n nhanh hơn. Thời điểm thưởng thức chuối Laba ngon nhất v&agrave;o ng&agrave;y thứ 5 hoặc 6 ch&uacute;ng ta c&oacute; thể dựa v&agrave;o độ v&agrave;ng của chuối để nhận biết, l&uacute;c n&agrave;y ch&uacute;ng ta cho chuối v&agrave;o ngăn m&aacute;t tủ lạnh khoảng 15 ph&uacute;t trước khi d&ugrave;ng chuối sẽ dẻo hơn v&agrave; ăn rất ngon.</span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\"><span style=\"font-size:16px\"><span style=\"font-family:inherit\">- Hiện nay tr&ecirc;n thị trường xuất hiện nhiều loại chuối gi&agrave; th&ocirc;ng thường nhưng đội lốt chuối laba, kh&aacute;ch h&agrave;ng n&ecirc;n c&acirc;n nhắc chọn đơn vị uy t&iacute;n để kh&ocirc;ng mua phải chuối gi&agrave; th&ocirc;ng thường với gi&aacute; chuối Laba. <span style=\"color:#008000\">HOA BIỂN FRUIT</span> l&agrave; đơn vị ph&acirc;n phối chiến lược của <span style=\"color:#008000\">CTY CHUỐI LABA Đ&Agrave; LẠT - LABA KING</span>, kh&aacute;ch h&agrave;ng c&oacute; thể y&ecirc;n t&acirc;m đến cửa h&agrave;ng ch&uacute;ng t&ocirc;i để chọn những nải chuối Laba vị ngọt đậm đ&agrave;, cực dẻo v&agrave; thơm ngon nhất nh&eacute;.</span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\">&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"Trái cây Hoa Biển\" src=\"https://traicayhoabien.com/upload/images/4e51b583d7dc308269cd.jpg\" style=\"width:600px\" /></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\">&nbsp;</p>\r\n\r\n<p><span style=\"font-size:16px\"><strong><span style=\"color:#008000\">Trái cây Hoa Biển</span></strong></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"color:#008000\"><u>Add</u>: </span>13 Trần hưng đạo , P.Nguyễn Th&aacute;i B&igrave;nh , Quận 1.</span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"color:#008000\"><u>Hotline</u>:</span> 028 38 222 855&nbsp; -&nbsp; 0834 70 11 55</span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"color:#008000\"><u>Email</u></span>: traicayhoabien@gmail.com</span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"color:#008000\"><u>Fanpage</u></span>: www.facebook.com/traicayhoabien</span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"color:#008000\"><u>Web</u></span>:&nbsp; https://traicayhoabien.com&nbsp;</span></p>\r\n\r\n<p><span style=\"font-size:16px\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;http://traicayhoabien.com</span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\">&nbsp;</p>\r\n</div>', 'kg', '1', 'Đà Lạt - Việt Nam', 0, 999, 99000, '2019-11-07 03:45:35', '2019-11-07 05:47:39');
INSERT INTO `product` VALUES (10, 12, 'HẢI SẢN TƯƠI SỐNG', 'hai-san-tuoi-song', 'hai-san-tuoi-song.jpeg?n=1575349973', '[\"hai-san-tuoi-song_0.jpeg?n=1575349973\"]', 'dxvfds', '<p>fdsfdsf</p>', '', '', '', 1, 999, 1211110000, '2019-12-03 12:12:53', '2019-12-03 12:19:04');
INSERT INTO `product` VALUES (11, 12, 'TRÁI CÂY SẤY KHÔ', 'trai-cay-say-kho', 'trai-cay-say-kho.jpeg?n=1575350845', '[\"trai-cay-say-kho_0.jpeg?n=1575350845\"]', 'asdasdasdasd', '<p>dsdasd</p>', '', '', '', 1, 999, 85000, '2019-12-03 12:27:25', '2019-12-03 12:27:25');

-- ----------------------------
-- Table structure for store
-- ----------------------------
DROP TABLE IF EXISTS `store`;
CREATE TABLE `store`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pos` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of store
-- ----------------------------
INSERT INTO `store` VALUES (1, 'Trái Cây Nhập Khẩu Tại Quận 2 - HOA BIỂN Fruit', 'trai-cay-nhap-khau-tai-quan-2-hoa-bien-fruit', 'trai-cay-nhap-khau-tai-quan-2-hoa-bien-fruit.jpeg?n=1573442257', '', '<p>&nbsp;</p>\r\n\r\n<div style=\"color:#333333\"><span style=\"color:#008000\"><span style=\"font-size:28px\"><strong>TR&Aacute;I C&Acirc;Y NHẬP KHẨU TẠI QUẬN 2 - Tr&aacute;i c&acirc;y Hoa Biển</strong></span></span><br />\r\n<br />\r\n&nbsp;</div>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;<span style=\"font-size:16px\">&nbsp; &nbsp;1.&nbsp;&nbsp; Bạn đang cần t&igrave;m một địa chỉ uy t&iacute;n b&aacute;n tr&aacute;i c&acirc;y sạch v&agrave; an to&agrave;n ?</span><br />\r\n<br />\r\n<span style=\"font-size:16px\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2.&nbsp; &nbsp;Bạn ngại phải ra đường giữa trưa nắng hay trời mưa để lựa chọn những tr&aacute;i Cherry &Uacute;c , T&aacute;o New Zealand, Nho Mỹ , Kiwi &Yacute; v..v ngon nhất về cho gia đ&igrave;nh hoặc cả văn ph&ograve;ng c&ugrave;ng ăn ?&nbsp;<br />\r\n<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3.&nbsp;&nbsp; Bạn ph&acirc;n v&acirc;n kh&ocirc;ng biết lựa chọn thế n&agrave;o l&agrave; đ&uacute;ng để tr&aacute;nh chọn nhầm tr&aacute;i c&acirc;y bẩn , tẩm h&oacute;a chất ?<br />\r\n<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 4.&nbsp;&nbsp; Bạn lu&ocirc;n lo lắng về vấn đề nguồn gốc xuất xứ của tr&aacute;i c&acirc;y ?<br />\r\n<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 5.&nbsp;&nbsp; Bạn đ&atilde; biết g&igrave; về&nbsp;<em><strong>TR&Aacute;I C&Acirc;Y NHẬP KHẨU</strong>&nbsp;</em>chưa ?<br />\r\n<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 6.&nbsp; &nbsp;Tại quận 2, bạn kh&ocirc;ng biết nơi n&agrave;o b&aacute;n&nbsp;<a href=\"https://traicayhoabien.com/\" style=\"color: rgb(7, 130, 193);\"><em>TR&Aacute;I C&Acirc;Y NHẬP KHẨU</em></a><span style=\"color:#00ff00\"><strong><em><a href=\"https://traicayhoabien.com/\" style=\"color: rgb(7, 130, 193);\">&nbsp;</a>&nbsp;</em></strong></span></span>&nbsp;<span style=\"font-size:16px\">uy t&iacute;n với gi&aacute; cả hợp l&yacute; v&agrave; chất lượng nhất ?</span><br />\r\n<br />\r\n<span style=\"font-size:16px\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 7.&nbsp;&nbsp; Bạn c&oacute; thật sự quan t&acirc;m đến sức khỏe của gia đ&igrave;nh v&agrave; ch&iacute;nh bản th&acirc;n m&igrave;nh chưa ?</span><br />\r\n<br />\r\n<br />\r\n<br />\r\n<span style=\"font-size:20px\"><strong>=&gt; TẤT CẢ NHỮNG VẤN ĐỀ N&Agrave;Y&nbsp;<span style=\"color:#008000\">HOA BIỂN&nbsp;FRUIT</span>&nbsp;SẼ GIẢI QUYẾT CHO BẠN.</strong></span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"Trái cây Hoa Biển\" src=\"https://traicayhoabien.com/upload/images/56756757657(1).jpg\" style=\"cursor:default; width:600px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><br />\r\n<br />\r\n&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><br />\r\n<br />\r\n<span style=\"font-size:20px\"><span style=\"color:#000000\">==&gt;</span>&nbsp;<strong>TẠI&nbsp;</strong><strong>SAO LẠI CHỌN&nbsp;<span style=\"color:#008000\">TR&Aacute;I C&Acirc;Y NHẬP KHẨU -</span>&nbsp;<span style=\"color:#008000\">Tr&aacute;i c&acirc;y Hoa Biển</span></strong>&nbsp;???</span><br />\r\n<br />\r\n&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"color:#333333\">1. Nguồn gốc xuất xứ r&otilde; r&agrave;ng : Tờ khai + kiểm dịch thực vật đầy đủ</span><br />\r\n<br />\r\n<span style=\"color:#333333\">&nbsp;</span><br />\r\n<br />\r\n2. Chất lượng tương xứng gi&aacute; cả : Tr&aacute;i c&acirc;y Hoa Biển l&agrave; đơn vị uy t&iacute;n h&agrave;ng đầu chuy&ecirc;n cung cấp hoa quả, tr&aacute;i c&acirc;y nhập khẩu&nbsp; từ Mỹ, &Uacute;c, Canada, Ph&aacute;p, H&agrave; Lan, T&acirc;y Ban Nha, New Zealand, Chil&ecirc;, Nam Phi, H&agrave;n Quốc, Nhật Bản, Đ&agrave;i Loan .v..v. cam kết <a href=\"https://traicayhoabien.com/he-thong-ban-hang/trai-cay-nhap-khau-tai-quan-2-hoa-bien-fruit.html\"><em>Tr&aacute;i c&acirc;y nhập khẩu tại quận 2</em></a>&nbsp;- HOA BIỂN Fruit của ch&uacute;ng t&ocirc;i c&oacute; chất lượng v&agrave; gi&aacute; cả tốt nhất thị trường.<br />\r\n<br />\r\n<span style=\"color:#333333\">&nbsp;</span><br />\r\n<br />\r\n<span style=\"color:#333333\">3. Tư vấn mua h&agrave;ng 24/7 : Với đội ngũ nh&acirc;n vi&ecirc;n c&oacute; kiến thức về tr&aacute;i c&acirc;y v&agrave; sức khỏe, lu&ocirc;n sẵn s&agrave;ng tư vấn TẬN T&Acirc;M v&agrave; NHIỆT T&Igrave;NH cho qu&yacute; kh&aacute;ch.</span><br />\r\n<br />\r\n<span style=\"color:#333333\">&nbsp;</span><br />\r\n<br />\r\n<span style=\"color:#333333\">4. Giao h&agrave;ng tận nơi v&agrave; nhanh ch&oacute;ng: Với đội ngũ shipper chuy&ecirc;n nghiệp kh&ocirc;ng ngại mưa nắng , chỉ 1 cuộc điện thoại&nbsp;</span><strong><span style=\"color:#008000\">0834701155</span></strong><span style=\"color:#333333\">&nbsp;qu&yacute; kh&aacute;ch sẽ c&oacute; ngay&nbsp;<a href=\"https://traicayhoabien.com/\" style=\"color: rgb(7, 130, 193);\">tr&aacute;i c&acirc;y tươi ngon</a>&nbsp;được &nbsp;giao tận tay trong v&ograve;ng 1h - 2h .</span><br />\r\n<br />\r\n<span style=\"color:#333333\">&nbsp;</span><br />\r\n<br />\r\n<span style=\"color:#333333\">5. Dịch vụ Fruit Gift : Tr&aacute;i c&acirc;y Hoa Biển nhận l&agrave;m&nbsp;<a href=\"https://traicayhoabien.com/\" style=\"color: rgb(7, 130, 193);\">giỏ tr&aacute;i c&acirc;y cao cấp</a>&nbsp;, hộp qu&agrave; tặng tr&aacute;i c&acirc;y sang trọng theo y&ecirc;u cầu của kh&aacute;ch h&agrave;ng .</span></span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:16px\">6. H&agrave;ng h&oacute;a đa dạng chủng loại : Tr&aacute;i C&acirc;y Nhập Khẩu theo m&ugrave;a từ nhiều nước tr&ecirc;n thế giới.Tr&aacute;i c&acirc;y đặc sản Việt Nam chuẩn Việt Gap, Global Gap, Organic, USDA, Xuất Khẩu.&nbsp;<a href=\"https://traicayhoabien.com/\" style=\"color: rgb(7, 130, 193);\">Thực phẩm dinh dưỡng</a>&nbsp;b&aacute;nh kẹo đồ hộp nhập khẩu từ c&aacute;c nước Mỹ, Canada, &Uacute;c, New Zealand,&nbsp; Đức, Ph&aacute;p, T&acirc;y Ban Nha, Thỗ Nhĩ Kỳ, Nhật Bản, H&agrave;n Quốc, Đ&agrave;i Loan, Th&aacute;i Lan ...</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<div style=\"color:#333333\"><br />\r\n<br />\r\n<br />\r\n<br />\r\n&nbsp;</div>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"Trái cây Hoa Biển\" src=\"https://cdn-img-v2.webbnc.net/media/3632/images.png\" style=\"border:0px; box-sizing:border-box; cursor:default; height:120px; vertical-align:middle; width:277px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<div style=\"background-color:#ffffff; box-sizing:border-box; color:#555555; font-family:Arial,Helvetica,sans-serif; font-size:12px; margin-bottom:0px; margin-left:0px; margin-right:0px; margin-top:0px; padding:0px; text-align:justify\">&nbsp;\r\n<div style=\"box-sizing:border-box; margin-bottom:0px; margin-left:0px; margin-right:0px; margin-top:0px; padding:0px; text-align:center\">&nbsp;\r\n<p>&nbsp;</p>\r\n<br />\r\n<span style=\"font-size:22px\"><strong><span style=\"color:#ff0000\">Tất Cả V&igrave; Sức Khỏe Của Bạn</span>&nbsp;</strong></span></div>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<div style=\"box-sizing:border-box; margin-bottom:0px; margin-left:0px; margin-right:0px; margin-top:0px; padding:0px; text-align:center\"><span style=\"font-size:22px\"><strong><span style=\"color:#008000\">Tr&aacute;i c&acirc;y Hoa Biển - Tr&aacute;i C&acirc;y Nhập Khẩu&nbsp;Tại Tp.HCM</span></strong></span></div>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:center\">&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:center\"><span style=\"font-size:22px\"><strong>CH&Uacute;NG T&Ocirc;I CAM KẾT 100% SẼ ĐỔI TRẢ NHỮNG TR&Aacute;I N&Agrave;O C&Oacute; DẤU HIỆU HƯ HỎNG HOẶC ĐỔI M&Agrave;U</strong></span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:center\">&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"trai-cay-nhap-khau-tai-tphcm\" src=\"https://cdn-img-v2.webbnc.net/media/3632/t%E1%BA%A3i%20xu%E1%BB%91ng.jpg\" style=\"border:0px; box-sizing:border-box; cursor:default; height:224px; margin-bottom:0px; margin-top:0px; padding:0px; vertical-align:middle; width:225px\" /></p>\r\n</div>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\">&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\"><span style=\"font-size:16px\"><u><strong>Nhận tư vấn v&agrave; đặt mua sản phẩm uy t&iacute;n chất lượng tại:</strong></u></span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:16px\"><strong><span style=\"color:#008000\">Tr&aacute;i c&acirc;y Hoa Biển</span></strong></span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"color:#008000\"><u>Add</u>:</span><strong><span style=\"color:#008000\">&nbsp;</span></strong></span><span style=\"font-size:16px\">13 Trần hưng đạo , P.Nguyễn Th&aacute;i B&igrave;nh , Quận 1.</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"color:#008000\"><u>Phone</u>:</span>&nbsp;028 38 222 855&nbsp; -&nbsp; 0834 70 11 55</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"color:#008000; font-size:16px\"><u>Email</u></span><span style=\"font-size:16px\">: traicayhoabien@gmail.com</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"color:#008000; font-size:16px\"><u>Fanpage</u></span><span style=\"font-size:16px\">: www.facebook.com/traicayhoabien</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"color:#008000\"><u>Web</u></span>: https://traicayhoabien.com http://traicayhoabien.com</span></p>\r\n\r\n<p>&nbsp;</p>', 1, '2019-11-07 09:21:37', '2019-11-11 03:17:37');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` int(11) NOT NULL,
  `admin` int(11) NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'admin', '0123456789', 1, 1, 'admin@gmail.com', '$2y$10$1W9UOal.d3YqEX6YuOkCCemwx4MJOWp9Zb6jhNhc7G.EKr0nbK13i', 'nNW9RHGO8LJeSdqeCIM0PApnrDGL1jnC4YCZThKpYrQLFz9ky7gTctGt1UAF', '2019-10-24 07:58:23', '2019-11-06 10:32:32');

SET FOREIGN_KEY_CHECKS = 1;
