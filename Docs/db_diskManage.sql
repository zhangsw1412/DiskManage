/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 50630
 Source Host           : localhost
 Source Database       : db_diskManage

 Target Server Type    : MySQL
 Target Server Version : 50630
 File Encoding         : utf-8

 Date: 05/24/2016 18:08:22 PM
*/

SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `tb_blockmodel`
-- ----------------------------
DROP TABLE IF EXISTS `tb_blockmodel`;
CREATE TABLE `tb_blockmodel` (
  `fileId_offset` varchar(255) NOT NULL,
  `blockOffset` bigint(20) NOT NULL,
  `blockPath` varchar(255) DEFAULT NULL,
  `block_replication` int(11) NOT NULL,
  `cdNum` int(11) NOT NULL,
  `cdPath` varchar(255) DEFAULT NULL,
  `columnNum` int(11) NOT NULL,
  `crc32_value` varchar(255) DEFAULT NULL,
  `fileId` bigint(20) NOT NULL,
  `isBurnSuccess` bit(1) NOT NULL,
  `isEOF` bit(1) NOT NULL,
  `layerNum` int(11) NOT NULL,
  `rackId` int(11) NOT NULL,
  `realSize` int(11) NOT NULL,
  `rowNum` int(11) NOT NULL,
  PRIMARY KEY (`fileId_offset`),
  UNIQUE KEY `UK_jy0k679lmaylhgd8u3r3615et` (`blockPath`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `tb_blockmodel`
-- ----------------------------
BEGIN;
INSERT INTO `tb_blockmodel` VALUES ('10_0', '0', '/home/kds/cfs/sdb5/writeCache/10/10-0', '0', '0', null, '7', null, '10', b'1', b'1', '3', '0', '67108864', '2'), ('10_134217728', '134217728', '/home/kds/cfs/sdb5/writeCache/10/10-134217728', '0', '0', null, '7', null, '10', b'1', b'1', '3', '0', '67108864', '2'), ('10_201326592', '201326592', '/home/kds/cfs/sdb5/writeCache/10/10-201326592', '0', '1', null, '7', null, '10', b'1', b'1', '3', '0', '67108864', '2'), ('10_268435456', '268435456', '/home/kds/cfs/sdb5/writeCache/10/10-268435456', '0', '0', null, '7', null, '10', b'1', b'1', '3', '0', '67108864', '2'), ('10_335544320', '335544320', '/home/kds/cfs/sdb5/writeCache/10/10-335544320', '0', '1', null, '7', null, '10', b'1', b'1', '3', '0', '67108864', '2'), ('10_402653184', '402653184', '/home/kds/cfs/sdb5/writeCache/10/10-402653184', '0', '0', null, '7', null, '10', b'1', b'1', '3', '0', '67108864', '2'), ('10_469762048', '469762048', '/home/kds/cfs/sdb5/writeCache/10/10-469762048', '0', '1', null, '7', null, '10', b'1', b'1', '3', '0', '67108864', '2'), ('10_536870912', '536870912', '/home/kds/cfs/sdb5/writeCache/10/10-536870912', '0', '0', null, '7', null, '10', b'1', b'1', '3', '0', '67108864', '2'), ('10_603979776', '603979776', '/home/kds/cfs/sdb5/writeCache/10/10-603979776', '0', '1', null, '7', null, '10', b'1', b'1', '3', '0', '67108864', '2'), ('10_67108864', '67108864', '/home/kds/cfs/sdb5/writeCache/10/10-67108864', '0', '1', null, '7', null, '10', b'1', b'1', '3', '0', '67108864', '2'), ('10_671088640', '671088640', '/home/kds/cfs/sdb5/writeCache/10/10-671088640', '0', '0', null, '7', null, '10', b'1', b'1', '3', '0', '67108864', '2'), ('10_738197504', '738197504', '/home/kds/cfs/sdb5/writeCache/10/10-738197504', '0', '1', null, '7', null, '10', b'1', b'1', '3', '0', '67108864', '2'), ('10_805306368', '805306368', '/home/kds/cfs/sdb5/writeCache/10/10-805306368', '0', '0', null, '7', null, '10', b'1', b'1', '3', '0', '12582912', '2'), ('11_0', '0', '/home/kds/cfs/sdb5/writeCache/11/11-0', '0', '0', null, '7', null, '11', b'1', b'1', '3', '0', '67108864', '2'), ('11_134217728', '134217728', '/home/kds/cfs/sdb5/writeCache/11/11-134217728', '0', '0', null, '7', null, '11', b'1', b'1', '3', '0', '67108864', '2'), ('11_201326592', '201326592', '/home/kds/cfs/sdb5/writeCache/11/11-201326592', '0', '1', null, '7', null, '11', b'1', b'1', '3', '0', '67108864', '2'), ('11_268435456', '268435456', '/home/kds/cfs/sdb5/writeCache/11/11-268435456', '0', '0', null, '7', null, '11', b'1', b'1', '3', '0', '67108864', '2'), ('11_335544320', '335544320', '/home/kds/cfs/sdb5/writeCache/11/11-335544320', '0', '1', null, '7', null, '11', b'1', b'1', '3', '0', '67108864', '2'), ('11_402653184', '402653184', '/home/kds/cfs/sdb5/writeCache/11/11-402653184', '0', '0', null, '7', null, '11', b'1', b'1', '3', '0', '67108864', '2'), ('11_469762048', '469762048', '/home/kds/cfs/sdb5/writeCache/11/11-469762048', '0', '1', null, '7', null, '11', b'1', b'1', '3', '0', '67108864', '2'), ('11_536870912', '536870912', '/home/kds/cfs/sdb5/writeCache/11/11-536870912', '0', '0', null, '7', null, '11', b'1', b'1', '3', '0', '67108864', '2'), ('11_603979776', '603979776', '/home/kds/cfs/sdb5/writeCache/11/11-603979776', '0', '1', null, '7', null, '11', b'1', b'1', '3', '0', '67108864', '2'), ('11_67108864', '67108864', '/home/kds/cfs/sdb5/writeCache/11/11-67108864', '0', '1', null, '7', null, '11', b'1', b'1', '3', '0', '67108864', '2'), ('11_671088640', '671088640', '/home/kds/cfs/sdb5/writeCache/11/11-671088640', '0', '0', null, '7', null, '11', b'1', b'1', '3', '0', '67108864', '2'), ('11_738197504', '738197504', '/home/kds/cfs/sdb5/writeCache/11/11-738197504', '0', '1', null, '7', null, '11', b'1', b'1', '3', '0', '67108864', '2'), ('11_805306368', '805306368', '/home/kds/cfs/sdb5/writeCache/11/11-805306368', '0', '0', null, '0', null, '11', b'0', b'1', '0', '0', '12582912', '0'), ('12_0', '0', '/home/kds/cfs/sdb5/writeCache/12/12-0', '0', '1', null, '0', null, '12', b'1', b'1', '3', '0', '67108864', '3'), ('12_134217728', '134217728', '/home/kds/cfs/sdb5/writeCache/12/12-134217728', '0', '1', null, '0', null, '12', b'1', b'1', '3', '0', '67108864', '3'), ('12_201326592', '201326592', '/home/kds/cfs/sdb5/writeCache/12/12-201326592', '0', '0', null, '0', null, '12', b'1', b'1', '3', '0', '67108864', '3'), ('12_268435456', '268435456', '/home/kds/cfs/sdb5/writeCache/12/12-268435456', '0', '1', null, '0', null, '12', b'1', b'1', '3', '0', '46137344', '3'), ('12_67108864', '67108864', '/home/kds/cfs/sdb5/writeCache/12/12-67108864', '0', '0', null, '0', null, '12', b'1', b'1', '3', '0', '67108864', '3'), ('13_0', '0', '/home/kds/cfs/sdb5/writeCache/13/13-0', '0', '0', null, '0', null, '13', b'1', b'1', '3', '0', '67108864', '3'), ('13_134217728', '134217728', '/home/kds/cfs/sdb5/writeCache/13/13-134217728', '0', '0', null, '0', null, '13', b'1', b'1', '3', '0', '67108864', '3'), ('13_201326592', '201326592', '/home/kds/cfs/sdb5/writeCache/13/13-201326592', '0', '1', null, '0', null, '13', b'1', b'1', '3', '0', '67108864', '3'), ('13_268435456', '268435456', '/home/kds/cfs/sdb5/writeCache/13/13-268435456', '0', '0', null, '0', null, '13', b'1', b'1', '3', '0', '46137344', '3'), ('13_67108864', '67108864', '/home/kds/cfs/sdb5/writeCache/13/13-67108864', '0', '1', null, '0', null, '13', b'1', b'1', '3', '0', '67108864', '3'), ('14_0', '0', '/home/kds/cfs/sdb5/writeCache/14/14-0', '0', '0', null, '0', null, '14', b'0', b'1', '0', '0', '67108864', '0'), ('14_134217728', '134217728', '/home/kds/cfs/sdb5/writeCache/14/14-134217728', '0', '0', null, '0', null, '14', b'0', b'1', '0', '0', '67108864', '0'), ('14_201326592', '201326592', '/home/kds/cfs/sdb5/writeCache/14/14-201326592', '0', '0', null, '0', null, '14', b'0', b'1', '0', '0', '67108864', '0'), ('14_268435456', '268435456', '/home/kds/cfs/sdb5/writeCache/14/14-268435456', '0', '0', null, '0', null, '14', b'0', b'1', '0', '0', '46137344', '0'), ('14_67108864', '67108864', '/home/kds/cfs/sdb5/writeCache/14/14-67108864', '0', '0', null, '0', null, '14', b'0', b'1', '0', '0', '67108864', '0'), ('15_0', '0', '/home/kds/cfs/sdb5/writeCache/15/15-0', '0', '1', null, '0', null, '15', b'1', b'1', '3', '0', '67108864', '3'), ('15_134217728', '134217728', '/home/kds/cfs/sdb5/writeCache/15/15-134217728', '0', '1', null, '0', null, '15', b'1', b'1', '3', '0', '67108864', '3'), ('15_201326592', '201326592', '/home/kds/cfs/sdb5/writeCache/15/15-201326592', '0', '0', null, '0', null, '15', b'1', b'1', '3', '0', '67108864', '3'), ('15_268435456', '268435456', '/home/kds/cfs/sdb5/writeCache/15/15-268435456', '0', '1', null, '0', null, '15', b'1', b'1', '3', '0', '46137344', '3'), ('15_67108864', '67108864', '/home/kds/cfs/sdb5/writeCache/15/15-67108864', '0', '0', null, '0', null, '15', b'1', b'1', '3', '0', '67108864', '3'), ('16_0', '0', '/home/kds/cfs/sdb5/writeCache/16/16-0', '0', '1', null, '0', null, '16', b'1', b'1', '3', '0', '67108864', '3'), ('16_134217728', '134217728', '/home/kds/cfs/sdb5/writeCache/16/16-134217728', '0', '1', null, '0', null, '16', b'1', b'1', '3', '0', '67108864', '3'), ('16_201326592', '201326592', '/home/kds/cfs/sdb5/writeCache/16/16-201326592', '0', '0', null, '0', null, '16', b'1', b'1', '3', '0', '67108864', '3'), ('16_268435456', '268435456', '/home/kds/cfs/sdb5/writeCache/16/16-268435456', '0', '1', null, '0', null, '16', b'1', b'1', '3', '0', '46137344', '3'), ('16_67108864', '67108864', '/home/kds/cfs/sdb5/writeCache/16/16-67108864', '0', '0', null, '0', null, '16', b'1', b'1', '3', '0', '67108864', '3'), ('17_0', '0', '/home/kds/cfs/sdb5/writeCache/17/17-0', '0', '0', null, '0', null, '17', b'1', b'1', '3', '0', '67108864', '3'), ('17_134217728', '134217728', '/home/kds/cfs/sdb5/writeCache/17/17-134217728', '0', '0', null, '0', null, '17', b'1', b'1', '3', '0', '67108864', '3'), ('17_201326592', '201326592', '/home/kds/cfs/sdb5/writeCache/17/17-201326592', '0', '1', null, '0', null, '17', b'1', b'1', '3', '0', '67108864', '3'), ('17_268435456', '268435456', '/home/kds/cfs/sdb5/writeCache/17/17-268435456', '0', '0', null, '0', null, '17', b'1', b'1', '3', '0', '46137344', '3'), ('17_67108864', '67108864', '/home/kds/cfs/sdb5/writeCache/17/17-67108864', '0', '1', null, '0', null, '17', b'1', b'1', '3', '0', '67108864', '3'), ('18_0', '0', '/home/kds/cfs/sdb5/writeCache/18/18-0', '0', '0', null, '0', null, '18', b'1', b'1', '3', '0', '67108864', '3'), ('18_134217728', '134217728', '/home/kds/cfs/sdb5/writeCache/18/18-134217728', '0', '0', null, '0', null, '18', b'1', b'1', '3', '0', '67108864', '3'), ('18_201326592', '201326592', '/home/kds/cfs/sdb5/writeCache/18/18-201326592', '0', '1', null, '0', null, '18', b'1', b'1', '3', '0', '67108864', '3'), ('18_268435456', '268435456', '/home/kds/cfs/sdb5/writeCache/18/18-268435456', '0', '0', null, '0', null, '18', b'1', b'1', '3', '0', '46137344', '3'), ('18_67108864', '67108864', '/home/kds/cfs/sdb5/writeCache/18/18-67108864', '0', '1', null, '0', null, '18', b'1', b'1', '3', '0', '67108864', '3'), ('7_0', '0', '/home/kds/cfs/sdb5/writeCache/7/7-0', '0', '1', null, '7', null, '7', b'1', b'1', '3', '0', '67108864', '2'), ('7_134217728', '134217728', '/home/kds/cfs/sdb5/writeCache/7/7-134217728', '0', '1', null, '7', null, '7', b'1', b'1', '3', '0', '67108864', '2'), ('7_201326592', '201326592', '/home/kds/cfs/sdb5/writeCache/7/7-201326592', '0', '0', null, '7', null, '7', b'1', b'1', '3', '0', '67108864', '2'), ('7_268435456', '268435456', '/home/kds/cfs/sdb5/writeCache/7/7-268435456', '0', '1', null, '7', null, '7', b'1', b'1', '3', '0', '67108864', '2'), ('7_335544320', '335544320', '/home/kds/cfs/sdb5/writeCache/7/7-335544320', '0', '0', null, '7', null, '7', b'1', b'1', '3', '0', '67108864', '2'), ('7_402653184', '402653184', '/home/kds/cfs/sdb5/writeCache/7/7-402653184', '0', '1', null, '7', null, '7', b'1', b'1', '3', '0', '67108864', '2'), ('7_469762048', '469762048', '/home/kds/cfs/sdb5/writeCache/7/7-469762048', '0', '0', null, '7', null, '7', b'1', b'1', '3', '0', '67108864', '2'), ('7_536870912', '536870912', '/home/kds/cfs/sdb5/writeCache/7/7-536870912', '0', '1', null, '7', null, '7', b'1', b'1', '3', '0', '67108864', '2'), ('7_603979776', '603979776', '/home/kds/cfs/sdb5/writeCache/7/7-603979776', '0', '0', null, '7', null, '7', b'1', b'1', '3', '0', '67108864', '2'), ('7_67108864', '67108864', '/home/kds/cfs/sdb5/writeCache/7/7-67108864', '0', '0', null, '7', null, '7', b'1', b'1', '3', '0', '67108864', '2'), ('7_671088640', '671088640', '/home/kds/cfs/sdb5/writeCache/7/7-671088640', '0', '1', null, '7', null, '7', b'1', b'1', '3', '0', '67108864', '2'), ('7_738197504', '738197504', '/home/kds/cfs/sdb5/writeCache/7/7-738197504', '0', '0', null, '7', null, '7', b'1', b'1', '3', '0', '67108864', '2'), ('7_805306368', '805306368', '/home/kds/cfs/sdb5/writeCache/7/7-805306368', '0', '1', null, '7', null, '7', b'1', b'1', '3', '0', '12582912', '2'), ('8_0', '0', '/home/kds/cfs/sdb5/writeCache/8/8-0', '0', '0', null, '0', null, '8', b'1', b'1', '3', '0', '67108864', '3'), ('8_134217728', '134217728', '/home/kds/cfs/sdb5/writeCache/8/8-134217728', '0', '0', null, '0', null, '8', b'1', b'1', '3', '0', '67108864', '3'), ('8_201326592', '201326592', '/home/kds/cfs/sdb5/writeCache/8/8-201326592', '0', '1', null, '0', null, '8', b'1', b'1', '3', '0', '67108864', '3'), ('8_268435456', '268435456', '/home/kds/cfs/sdb5/writeCache/8/8-268435456', '0', '0', null, '0', null, '8', b'1', b'1', '3', '0', '46137344', '3'), ('8_67108864', '67108864', '/home/kds/cfs/sdb5/writeCache/8/8-67108864', '0', '1', null, '0', null, '8', b'1', b'1', '3', '0', '67108864', '3'), ('9_0', '0', '/home/kds/cfs/sdb5/writeCache/9/9-0', '0', '1', null, '0', null, '9', b'1', b'1', '3', '0', '67108864', '3'), ('9_134217728', '134217728', '/home/kds/cfs/sdb5/writeCache/9/9-134217728', '0', '1', null, '0', null, '9', b'1', b'1', '3', '0', '67108864', '3'), ('9_201326592', '201326592', '/home/kds/cfs/sdb5/writeCache/9/9-201326592', '0', '0', null, '0', null, '9', b'1', b'1', '3', '0', '67108864', '3'), ('9_268435456', '268435456', '/home/kds/cfs/sdb5/writeCache/9/9-268435456', '0', '1', null, '0', null, '9', b'1', b'1', '3', '0', '46137344', '3'), ('9_67108864', '67108864', '/home/kds/cfs/sdb5/writeCache/9/9-67108864', '0', '0', null, '0', null, '9', b'1', b'1', '3', '0', '67108864', '3');
COMMIT;

-- ----------------------------
--  Table structure for `tb_cdmodel`
-- ----------------------------
DROP TABLE IF EXISTS `tb_cdmodel`;
CREATE TABLE `tb_cdmodel` (
  `id` bigint(20) NOT NULL,
  `cdNum` int(11) NOT NULL,
  `columnNum` int(11) NOT NULL,
  `isBurnSuccess` tinyint(4) NOT NULL DEFAULT '0',
  `layerNum` int(11) NOT NULL,
  `rackId` int(11) NOT NULL,
  `rowNum` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `tb_cdmodel`
-- ----------------------------
BEGIN;
INSERT INTO `tb_cdmodel` VALUES ('1', '0', '7', '1', '3', '0', '2'), ('2', '1', '7', '1', '3', '0', '2'), ('3', '0', '0', '1', '3', '0', '3'), ('4', '1', '0', '1', '3', '0', '3'), ('5', '3', '0', '0', '3', '0', '2'), ('6', '2', '7', '0', '3', '0', '2');
COMMIT;

-- ----------------------------
--  Table structure for `tb_filemodel`
-- ----------------------------
DROP TABLE IF EXISTS `tb_filemodel`;
CREATE TABLE `tb_filemodel` (
  `fileId` bigint(20) NOT NULL,
  `accessTime` bigint(20) NOT NULL,
  `blockSize` bigint(20) NOT NULL,
  `children_num` int(11) NOT NULL,
  `fileGroup` varchar(255) DEFAULT NULL,
  `fileName` tinyblob,
  `fileOwner` varchar(255) DEFAULT NULL,
  `filePath` varchar(255) NOT NULL,
  `is_dir` bit(1) NOT NULL,
  `md5Value` bigint(20) NOT NULL,
  `modificationTime` bigint(20) NOT NULL,
  PRIMARY KEY (`fileId`),
  UNIQUE KEY `UK_peab5e8u6ltgx08cynonxxqxj` (`filePath`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `tb_filemodel`
-- ----------------------------
BEGIN;
INSERT INTO `tb_filemodel` VALUES ('1', '1463370757000', '0', '4', 'root', 0x2f, 'root', '/home/kds/cfs/sdb5/dir', b'1', '0', '1463370757000'), ('2', '1463370757000', '67108864', '0', 'root', 0x2e5472617368, 'root', '/home/kds/cfs/sdb5/dir/.Trash', b'0', '0', '1463370757000'), ('3', '1463370757000', '67108864', '0', 'root', 0x2e7864672d766f6c756d652d696e666f, 'root', '/home/kds/cfs/sdb5/dir/.xdg-volume-info', b'0', '0', '1463370757000'), ('4', '1463370757000', '67108864', '0', 'root', 0x6175746f72756e2e696e66, 'root', '/home/kds/cfs/sdb5/dir/autorun.inf', b'0', '0', '1463370757000'), ('5', '1463370757000', '0', '2', 'root', 0x2e2e, 'root', '/home/kds/cfs/sdb5/dir/..', b'1', '0', '1463370757000'), ('6', '1463370757000', '67108864', '0', 'root', 0x2e54726173682d353030, 'root', '/home/kds/cfs/sdb5/dir/.Trash-500', b'0', '0', '1463370757000'), ('7', '1463370786000', '67108864', '0', 'root', 0x302e747874, 'root', '/home/kds/cfs/sdb5/dir/0.txt', b'0', '0', '1463370786000'), ('8', '1463370795000', '67108864', '0', 'root', 0x31302e747874, 'root', '/home/kds/cfs/sdb5/dir/10.txt', b'0', '0', '1463370795000'), ('9', '1463370798000', '67108864', '0', 'root', 0x31312e747874, 'root', '/home/kds/cfs/sdb5/dir/11.txt', b'0', '0', '1463370798000'), ('10', '1463370802000', '67108864', '0', 'root', 0x312e747874, 'root', '/home/kds/cfs/sdb5/dir/1.txt', b'0', '0', '1463370802000'), ('11', '1463370811000', '67108864', '0', 'root', 0x322e747874, 'root', '/home/kds/cfs/sdb5/dir/2.txt', b'0', '0', '1463370811000'), ('12', '1463370820000', '67108864', '0', 'root', 0x332e747874, 'root', '/home/kds/cfs/sdb5/dir/3.txt', b'0', '0', '1463370820000'), ('13', '1463370828000', '67108864', '0', 'root', 0x342e747874, 'root', '/home/kds/cfs/sdb5/dir/4.txt', b'0', '0', '1463370828000'), ('14', '1463370841000', '67108864', '0', 'root', 0x352e747874, 'root', '/home/kds/cfs/sdb5/dir/5.txt', b'0', '0', '1463370841000'), ('15', '1463370845000', '67108864', '0', 'root', 0x362e747874, 'root', '/home/kds/cfs/sdb5/dir/6.txt', b'0', '0', '1463370845000'), ('16', '1463370848000', '67108864', '0', 'root', 0x372e747874, 'root', '/home/kds/cfs/sdb5/dir/7.txt', b'0', '0', '1463370848000'), ('17', '1463370852000', '67108864', '0', 'root', 0x382e747874, 'root', '/home/kds/cfs/sdb5/dir/8.txt', b'0', '0', '1463370852000'), ('18', '1463370855000', '67108864', '0', 'root', 0x392e747874, 'root', '/home/kds/cfs/sdb5/dir/9.txt', b'0', '0', '1463370855000');
COMMIT;

-- ----------------------------
--  Table structure for `tb_init_params`
-- ----------------------------
DROP TABLE IF EXISTS `tb_init_params`;
CREATE TABLE `tb_init_params` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'id主键',
  `write_channel_timeout` int(11) NOT NULL DEFAULT '5' COMMENT '传输完成时间间隔',
  `readCacheSize` int(11) NOT NULL DEFAULT '5' COMMENT '读缓存',
  `NFS_read_size` int(11) NOT NULL DEFAULT '1024' COMMENT 'NFS读尺寸',
  `NFS_write_size` int(11) NOT NULL DEFAULT '1024' COMMENT 'NFS写尺寸',
  `readCachePre` varchar(80) NOT NULL DEFAULT '' COMMENT '读缓存目录',
  `writeCachePre` varchar(80) NOT NULL DEFAULT '' COMMENT '写缓存目录',
  `isoPre` varchar(80) NOT NULL DEFAULT '' COMMENT '打包目录',
  `linkPre` varchar(80) NOT NULL DEFAULT '' COMMENT '链接分块',
  `dirPre` varchar(80) NOT NULL DEFAULT '' COMMENT '假目录',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='机架参数表';

-- ----------------------------
--  Records of `tb_init_params`
-- ----------------------------
BEGIN;
INSERT INTO `tb_init_params` VALUES ('1', '12', '12', '12', '12', '12', '12', '12', '12', '12');
COMMIT;

-- ----------------------------
--  Table structure for `tb_rack_params`
-- ----------------------------
DROP TABLE IF EXISTS `tb_rack_params`;
CREATE TABLE `tb_rack_params` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'id主键',
  `box_cds` int(11) NOT NULL DEFAULT '1' COMMENT '每盒盘片数',
  `rows` int(11) NOT NULL DEFAULT '1' COMMENT '每大层所含层数',
  `layers` int(11) NOT NULL DEFAULT '1' COMMENT '机架层数',
  `columns` int(11) NOT NULL DEFAULT '1' COMMENT '上次登录ip',
  `eachBlockSize` int(11) NOT NULL DEFAULT '64' COMMENT '文件块大小',
  `eachCdSize` int(11) NOT NULL DEFAULT '307200' COMMENT '每盘片容量',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='机架参数表';

-- ----------------------------
--  Records of `tb_rack_params`
-- ----------------------------
BEGIN;
INSERT INTO `tb_rack_params` VALUES ('1', '2', '1', '3', '2', '23', '23');
COMMIT;

-- ----------------------------
--  Table structure for `tb_user`
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='用户表，存放用户信息';

-- ----------------------------
--  Records of `tb_user`
-- ----------------------------
BEGIN;
INSERT INTO `tb_user` VALUES ('1', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', '1464083735', '127.0.0.1', '1');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
