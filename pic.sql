/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50540
Source Host           : localhost:3306
Source Database       : devchongzhi

Target Server Type    : MYSQL
Target Server Version : 50540
File Encoding         : 65001

Date: 2019-08-17 13:39:22
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for pic
-- ----------------------------
DROP TABLE IF EXISTS `pic`;
CREATE TABLE `pic` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `addtime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of pic
-- ----------------------------
INSERT INTO `pic` VALUES ('1', null, '/Public/Uploads/2019-08-16/5d56c74943c8b.jpg', '2019-08-16 23:10:01');
INSERT INTO `pic` VALUES ('2', null, '/Public/Uploads/2019-08-16/5d56c75037ac9.jpg', '2019-08-16 23:10:08');
INSERT INTO `pic` VALUES ('3', null, '/Public/Uploads/2019-08-16/5d56c90aa2703.JPG', '2019-08-16 23:17:30');
INSERT INTO `pic` VALUES ('4', null, '/Public/Uploads/2019-08-16/5d56d1b7d4be0.JPG', '2019-08-16 23:54:32');
