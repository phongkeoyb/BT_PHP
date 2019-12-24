/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100406
 Source Host           : 127.0.0.1:3306
 Source Schema         : simple_shop

 Target Server Type    : MySQL
 Target Server Version : 100406
 File Encoding         : 65001

 Date: 24/12/2019 12:57:31
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for products
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `product_image` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `price` double NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of products
-- ----------------------------
INSERT INTO `products` VALUES (1, 'iphone 8 pl', 'iphone8pl.jpg', 16000000);
INSERT INTO `products` VALUES (2, 'iphone 5', 'iphone5.jpg', 1500000);
INSERT INTO `products` VALUES (3, 'iphone 6', 'iphone6.jpg', 3000000);
INSERT INTO `products` VALUES (4, 'iphone 11 pro max', 'iphone11promax.jpg', 35000000);

SET FOREIGN_KEY_CHECKS = 1;
