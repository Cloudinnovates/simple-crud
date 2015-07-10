/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50532
Source Host           : 127.0.0.1:3306
Source Database       : lat_crud_ci

Target Server Type    : MYSQL
Target Server Version : 50532
File Encoding         : 65001

Date: 2015-07-09 23:03:38
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for buku_tamu
-- ----------------------------
DROP TABLE IF EXISTS `buku_tamu`;
CREATE TABLE `buku_tamu` (
  `buku_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `pesan` text,
  PRIMARY KEY (`buku_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of buku_tamu
-- ----------------------------
INSERT INTO `buku_tamu` VALUES ('1', 'Ferdhika Yudira', 'rpl4rt08@gmail.com', 'Mantap brooo.. ;;)');
INSERT INTO `buku_tamu` VALUES ('2', 'Ferdhika Tamvan', 'fer@dika.web.id', 'Hello broo');
