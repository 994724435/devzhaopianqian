/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50540
Source Host           : localhost:3306
Source Database       : devchongzhi

Target Server Type    : MYSQL
Target Server Version : 50540
File Encoding         : 65001

Date: 2019-08-17 22:36:23
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for jump
-- ----------------------------
DROP TABLE IF EXISTS `jump`;
CREATE TABLE `jump` (
  `url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of jump
-- ----------------------------
INSERT INTO `jump` VALUES ('fang');

-- ----------------------------
-- Table structure for pic
-- ----------------------------
DROP TABLE IF EXISTS `pic`;
CREATE TABLE `pic` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET gbk DEFAULT NULL,
  `url` varchar(255) CHARACTER SET gbk DEFAULT NULL,
  `ishide` int(1) DEFAULT '0' COMMENT '0显示  1隐藏',
  `addtime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pic
-- ----------------------------
INSERT INTO `pic` VALUES ('1', null, '/Public/Uploads/2019-08-16/5d56c74943c8b.jpg', '0', '2019-08-16 23:54:32');
INSERT INTO `pic` VALUES ('2', null, '/Public/Uploads/2019-08-16/5d56c74943c8b.jpg', '0', '2019-08-16 23:54:32');
INSERT INTO `pic` VALUES ('3', null, '/Public/Uploads/2019-08-16/5d56c74943c8b.jpg', '0', '2019-08-16 23:54:32');
INSERT INTO `pic` VALUES ('4', null, '/Public/Uploads/2019-08-16/5d56c74943c8b.jpg', '0', '2019-08-16 23:54:32');
INSERT INTO `pic` VALUES ('5', null, '/Public/Uploads/2019-08-16/5d56c74943c8b.jpg', '0', '2019-08-16 23:54:32');
INSERT INTO `pic` VALUES ('6', null, '/Public/Uploads/2019-08-16/5d56c74943c8b.jpg', '0', '2019-08-16 23:54:32');
INSERT INTO `pic` VALUES ('7', null, '/Public/Uploads/2019-08-17/5d57d467af4af.JPG', '0', '2019-08-17 18:18:17');
INSERT INTO `pic` VALUES ('8', null, '/Public/Uploads/2019-08-17/5d57d4790bf5e.JPG', '0', '2019-08-17 18:18:34');
INSERT INTO `pic` VALUES ('9', null, '/Public/Uploads/2019-08-17/5d57d4ac66088.JPG', '0', '2019-08-17 18:19:26');
INSERT INTO `pic` VALUES ('10', null, '/Public/Uploads/2019-08-16/5d56c74943c8b.jpg', '0', '2019-08-16 23:54:32');
INSERT INTO `pic` VALUES ('11', null, '/Public/Uploads/2019-08-16/5d56c74943c8b.jpg', '0', '2019-08-16 23:54:32');
INSERT INTO `pic` VALUES ('12', null, '/Public/Uploads/2019-08-16/5d56c74943c8b.jpg', '0', '2019-08-16 23:54:32');
INSERT INTO `pic` VALUES ('13', null, '/Public/Uploads/2019-08-17/5d57d4ac66088.JPG', '0', '2019-08-16 23:54:32');
