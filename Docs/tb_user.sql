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

-- SET FOREIGN_KEY_CHECKS=0;

-- -- ----------------------------
-- -- Table structure for tb_user
-- -- ----------------------------
-- DROP TABLE IF EXISTS `tb_user`;
-- CREATE TABLE `tb_user` (
--   `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'id主键',
--   `username` char(30) NOT NULL DEFAULT '' COMMENT '用户名',
--   `password` char(40) NOT NULL DEFAULT '' COMMENT '密码，用sha1加密',
--   `login_time` int(10) unsigned DEFAULT NULL COMMENT '上次登录时间',
--   `login_ip` char(15) DEFAULT NULL COMMENT '上次登录ip',
--   `valid` tinyint(1) unsigned DEFAULT '1' COMMENT '标记用户是否有效，即可以使用',
--   PRIMARY KEY (`id`),
--   KEY `AK_Key_2` (`username`)
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='用户表，存放用户信息';



-- -- ----------------------------
-- -- Table structure for tb_rack_params
-- -- ----------------------------
-- DROP TABLE IF EXISTS `tb_rack_params`;
-- CREATE TABLE `tb_rack_params` (
--   `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'id主键',
--   `box_cds` int NOT NULL DEFAULT 1 COMMENT '每盒盘片数',
--   `rows` int NOT NULL DEFAULT 1 COMMENT '每大层所含层数',
--   `layers` int NOT NULL DEFAULT 1 COMMENT '机架层数',
--   `columns` int NOT NULL DEFAULT 1 COMMENT '上次登录ip',
--   `eachBlockSize` int NOT NULL DEFAULT 64 COMMENT '文件块大小',
--   `eachCdSize` int NOT NULL DEFAULT 307200 COMMENT '每盘片容量',
--   PRIMARY KEY (`id`)
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='机架参数表';

-- insert into `tb_rack_params` () values ();

-- -- ----------------------------
-- -- Table structure for tb_init_params
-- -- ----------------------------
-- DROP TABLE IF EXISTS `tb_init_params`;
-- CREATE TABLE `tb_init_params` (
--   `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'id主键',
--   `write_channel_timeout` int NOT NULL DEFAULT 5 COMMENT '传输完成时间间隔',
--   `readCacheSize` int NOT NULL DEFAULT 5 COMMENT '读缓存',
--   `NFS_read_size` int NOT NULL DEFAULT 1024 COMMENT 'NFS读尺寸',
--   `NFS_write_size` int NOT NULL DEFAULT 1024 COMMENT 'NFS写尺寸',
--   `readCachePre` varchar(80) NOT NULL DEFAULT '' COMMENT '读缓存目录',
--   `writeCachePre` varchar(80) NOT NULL DEFAULT '' COMMENT '写缓存目录',
--   `isoPre` varchar(80) NOT NULL DEFAULT '' COMMENT '打包目录',
--   `linkPre` varchar(80) NOT NULL DEFAULT '' COMMENT '链接分块',
--   `dirPre` varchar(80) NOT NULL DEFAULT '' COMMENT '假目录',
--   PRIMARY KEY (`id`)
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='机架参数表';

-- insert into `tb_init_params` () values ();
