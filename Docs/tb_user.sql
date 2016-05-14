/*
Navicat MySQL Data Transfer

Source Server         : 风电叶片
Source Server Version : 50621
Source Host           : 202.112.137.12:9527
Source Database       : db_anliku

Target Server Type    : MYSQL
Target Server Version : 50621
File Encoding         : 65001

Date: 2016-05-14 22:35:41
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for tb_user
-- ----------------------------
DROP TABLE IF EXISTS `tb_user`;
CREATE TABLE `tb_user` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'id主键',
  `username` char(30) NOT NULL DEFAULT '' COMMENT '用户名',
  `password` char(40) NOT NULL DEFAULT '' COMMENT '密码，用sha1加密',
  `login_time` int(10) unsigned DEFAULT NULL COMMENT '上次登录时间',
  `login_ip` char(15) DEFAULT NULL COMMENT '上次登录ip',
  `valid` tinyint(1) unsigned DEFAULT '1' COMMENT '标记用户是否有效，即可以使用',
  PRIMARY KEY (`id`),
  KEY `AK_Key_2` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='用户表，存放用户信息';
