-- MySQL dump 10.13  Distrib 5.6.27, for Linux (x86_64)
--
-- Host: localhost    Database: cfs
-- ------------------------------------------------------
-- Server version	5.6.27

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `BlockModel`
--

DROP TABLE IF EXISTS `BlockModel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `BlockModel` (
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
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `BlockModel`
--

LOCK TABLES `BlockModel` WRITE;
/*!40000 ALTER TABLE `BlockModel` DISABLE KEYS */;
INSERT INTO `BlockModel` VALUES ('10_0',0,'/home/kds/cfs/sdb5/writeCache/10/10-0',0,0,NULL,7,NULL,10,'','',3,0,67108864,2),('10_134217728',134217728,'/home/kds/cfs/sdb5/writeCache/10/10-134217728',0,0,NULL,7,NULL,10,'','',3,0,67108864,2),('10_201326592',201326592,'/home/kds/cfs/sdb5/writeCache/10/10-201326592',0,1,NULL,7,NULL,10,'','',3,0,67108864,2),('10_268435456',268435456,'/home/kds/cfs/sdb5/writeCache/10/10-268435456',0,0,NULL,7,NULL,10,'','',3,0,67108864,2),('10_335544320',335544320,'/home/kds/cfs/sdb5/writeCache/10/10-335544320',0,1,NULL,7,NULL,10,'','',3,0,67108864,2),('10_402653184',402653184,'/home/kds/cfs/sdb5/writeCache/10/10-402653184',0,0,NULL,7,NULL,10,'','',3,0,67108864,2),('10_469762048',469762048,'/home/kds/cfs/sdb5/writeCache/10/10-469762048',0,1,NULL,7,NULL,10,'','',3,0,67108864,2),('10_536870912',536870912,'/home/kds/cfs/sdb5/writeCache/10/10-536870912',0,0,NULL,7,NULL,10,'','',3,0,67108864,2),('10_603979776',603979776,'/home/kds/cfs/sdb5/writeCache/10/10-603979776',0,1,NULL,7,NULL,10,'','',3,0,67108864,2),('10_67108864',67108864,'/home/kds/cfs/sdb5/writeCache/10/10-67108864',0,1,NULL,7,NULL,10,'','',3,0,67108864,2),('10_671088640',671088640,'/home/kds/cfs/sdb5/writeCache/10/10-671088640',0,0,NULL,7,NULL,10,'','',3,0,67108864,2),('10_738197504',738197504,'/home/kds/cfs/sdb5/writeCache/10/10-738197504',0,1,NULL,7,NULL,10,'','',3,0,67108864,2),('10_805306368',805306368,'/home/kds/cfs/sdb5/writeCache/10/10-805306368',0,0,NULL,7,NULL,10,'','',3,0,12582912,2),('11_0',0,'/home/kds/cfs/sdb5/writeCache/11/11-0',0,0,NULL,7,NULL,11,'','',3,0,67108864,2),('11_134217728',134217728,'/home/kds/cfs/sdb5/writeCache/11/11-134217728',0,0,NULL,7,NULL,11,'','',3,0,67108864,2),('11_201326592',201326592,'/home/kds/cfs/sdb5/writeCache/11/11-201326592',0,1,NULL,7,NULL,11,'','',3,0,67108864,2),('11_268435456',268435456,'/home/kds/cfs/sdb5/writeCache/11/11-268435456',0,0,NULL,7,NULL,11,'','',3,0,67108864,2),('11_335544320',335544320,'/home/kds/cfs/sdb5/writeCache/11/11-335544320',0,1,NULL,7,NULL,11,'','',3,0,67108864,2),('11_402653184',402653184,'/home/kds/cfs/sdb5/writeCache/11/11-402653184',0,0,NULL,7,NULL,11,'','',3,0,67108864,2),('11_469762048',469762048,'/home/kds/cfs/sdb5/writeCache/11/11-469762048',0,1,NULL,7,NULL,11,'','',3,0,67108864,2),('11_536870912',536870912,'/home/kds/cfs/sdb5/writeCache/11/11-536870912',0,0,NULL,7,NULL,11,'','',3,0,67108864,2),('11_603979776',603979776,'/home/kds/cfs/sdb5/writeCache/11/11-603979776',0,1,NULL,7,NULL,11,'','',3,0,67108864,2),('11_67108864',67108864,'/home/kds/cfs/sdb5/writeCache/11/11-67108864',0,1,NULL,7,NULL,11,'','',3,0,67108864,2),('11_671088640',671088640,'/home/kds/cfs/sdb5/writeCache/11/11-671088640',0,0,NULL,7,NULL,11,'','',3,0,67108864,2),('11_738197504',738197504,'/home/kds/cfs/sdb5/writeCache/11/11-738197504',0,1,NULL,7,NULL,11,'','',3,0,67108864,2),('11_805306368',805306368,'/home/kds/cfs/sdb5/writeCache/11/11-805306368',0,0,NULL,0,NULL,11,'\0','',0,0,12582912,0),('12_0',0,'/home/kds/cfs/sdb5/writeCache/12/12-0',0,1,NULL,0,NULL,12,'','',3,0,67108864,3),('12_134217728',134217728,'/home/kds/cfs/sdb5/writeCache/12/12-134217728',0,1,NULL,0,NULL,12,'','',3,0,67108864,3),('12_201326592',201326592,'/home/kds/cfs/sdb5/writeCache/12/12-201326592',0,0,NULL,0,NULL,12,'','',3,0,67108864,3),('12_268435456',268435456,'/home/kds/cfs/sdb5/writeCache/12/12-268435456',0,1,NULL,0,NULL,12,'','',3,0,46137344,3),('12_67108864',67108864,'/home/kds/cfs/sdb5/writeCache/12/12-67108864',0,0,NULL,0,NULL,12,'','',3,0,67108864,3),('13_0',0,'/home/kds/cfs/sdb5/writeCache/13/13-0',0,0,NULL,0,NULL,13,'','',3,0,67108864,3),('13_134217728',134217728,'/home/kds/cfs/sdb5/writeCache/13/13-134217728',0,0,NULL,0,NULL,13,'','',3,0,67108864,3),('13_201326592',201326592,'/home/kds/cfs/sdb5/writeCache/13/13-201326592',0,1,NULL,0,NULL,13,'','',3,0,67108864,3),('13_268435456',268435456,'/home/kds/cfs/sdb5/writeCache/13/13-268435456',0,0,NULL,0,NULL,13,'','',3,0,46137344,3),('13_67108864',67108864,'/home/kds/cfs/sdb5/writeCache/13/13-67108864',0,1,NULL,0,NULL,13,'','',3,0,67108864,3),('14_0',0,'/home/kds/cfs/sdb5/writeCache/14/14-0',0,0,NULL,0,NULL,14,'\0','',0,0,67108864,0),('14_134217728',134217728,'/home/kds/cfs/sdb5/writeCache/14/14-134217728',0,0,NULL,0,NULL,14,'\0','',0,0,67108864,0),('14_201326592',201326592,'/home/kds/cfs/sdb5/writeCache/14/14-201326592',0,0,NULL,0,NULL,14,'\0','',0,0,67108864,0),('14_268435456',268435456,'/home/kds/cfs/sdb5/writeCache/14/14-268435456',0,0,NULL,0,NULL,14,'\0','',0,0,46137344,0),('14_67108864',67108864,'/home/kds/cfs/sdb5/writeCache/14/14-67108864',0,0,NULL,0,NULL,14,'\0','',0,0,67108864,0),('15_0',0,'/home/kds/cfs/sdb5/writeCache/15/15-0',0,1,NULL,0,NULL,15,'','',3,0,67108864,3),('15_134217728',134217728,'/home/kds/cfs/sdb5/writeCache/15/15-134217728',0,1,NULL,0,NULL,15,'','',3,0,67108864,3),('15_201326592',201326592,'/home/kds/cfs/sdb5/writeCache/15/15-201326592',0,0,NULL,0,NULL,15,'','',3,0,67108864,3),('15_268435456',268435456,'/home/kds/cfs/sdb5/writeCache/15/15-268435456',0,1,NULL,0,NULL,15,'','',3,0,46137344,3),('15_67108864',67108864,'/home/kds/cfs/sdb5/writeCache/15/15-67108864',0,0,NULL,0,NULL,15,'','',3,0,67108864,3),('16_0',0,'/home/kds/cfs/sdb5/writeCache/16/16-0',0,1,NULL,0,NULL,16,'','',3,0,67108864,3),('16_134217728',134217728,'/home/kds/cfs/sdb5/writeCache/16/16-134217728',0,1,NULL,0,NULL,16,'','',3,0,67108864,3),('16_201326592',201326592,'/home/kds/cfs/sdb5/writeCache/16/16-201326592',0,0,NULL,0,NULL,16,'','',3,0,67108864,3),('16_268435456',268435456,'/home/kds/cfs/sdb5/writeCache/16/16-268435456',0,1,NULL,0,NULL,16,'','',3,0,46137344,3),('16_67108864',67108864,'/home/kds/cfs/sdb5/writeCache/16/16-67108864',0,0,NULL,0,NULL,16,'','',3,0,67108864,3),('17_0',0,'/home/kds/cfs/sdb5/writeCache/17/17-0',0,0,NULL,0,NULL,17,'','',3,0,67108864,3),('17_134217728',134217728,'/home/kds/cfs/sdb5/writeCache/17/17-134217728',0,0,NULL,0,NULL,17,'','',3,0,67108864,3),('17_201326592',201326592,'/home/kds/cfs/sdb5/writeCache/17/17-201326592',0,1,NULL,0,NULL,17,'','',3,0,67108864,3),('17_268435456',268435456,'/home/kds/cfs/sdb5/writeCache/17/17-268435456',0,0,NULL,0,NULL,17,'','',3,0,46137344,3),('17_67108864',67108864,'/home/kds/cfs/sdb5/writeCache/17/17-67108864',0,1,NULL,0,NULL,17,'','',3,0,67108864,3),('18_0',0,'/home/kds/cfs/sdb5/writeCache/18/18-0',0,0,NULL,0,NULL,18,'','',3,0,67108864,3),('18_134217728',134217728,'/home/kds/cfs/sdb5/writeCache/18/18-134217728',0,0,NULL,0,NULL,18,'','',3,0,67108864,3),('18_201326592',201326592,'/home/kds/cfs/sdb5/writeCache/18/18-201326592',0,1,NULL,0,NULL,18,'','',3,0,67108864,3),('18_268435456',268435456,'/home/kds/cfs/sdb5/writeCache/18/18-268435456',0,0,NULL,0,NULL,18,'','',3,0,46137344,3),('18_67108864',67108864,'/home/kds/cfs/sdb5/writeCache/18/18-67108864',0,1,NULL,0,NULL,18,'','',3,0,67108864,3),('7_0',0,'/home/kds/cfs/sdb5/writeCache/7/7-0',0,1,NULL,7,NULL,7,'','',3,0,67108864,2),('7_134217728',134217728,'/home/kds/cfs/sdb5/writeCache/7/7-134217728',0,1,NULL,7,NULL,7,'','',3,0,67108864,2),('7_201326592',201326592,'/home/kds/cfs/sdb5/writeCache/7/7-201326592',0,0,NULL,7,NULL,7,'','',3,0,67108864,2),('7_268435456',268435456,'/home/kds/cfs/sdb5/writeCache/7/7-268435456',0,1,NULL,7,NULL,7,'','',3,0,67108864,2),('7_335544320',335544320,'/home/kds/cfs/sdb5/writeCache/7/7-335544320',0,0,NULL,7,NULL,7,'','',3,0,67108864,2),('7_402653184',402653184,'/home/kds/cfs/sdb5/writeCache/7/7-402653184',0,1,NULL,7,NULL,7,'','',3,0,67108864,2),('7_469762048',469762048,'/home/kds/cfs/sdb5/writeCache/7/7-469762048',0,0,NULL,7,NULL,7,'','',3,0,67108864,2),('7_536870912',536870912,'/home/kds/cfs/sdb5/writeCache/7/7-536870912',0,1,NULL,7,NULL,7,'','',3,0,67108864,2),('7_603979776',603979776,'/home/kds/cfs/sdb5/writeCache/7/7-603979776',0,0,NULL,7,NULL,7,'','',3,0,67108864,2),('7_67108864',67108864,'/home/kds/cfs/sdb5/writeCache/7/7-67108864',0,0,NULL,7,NULL,7,'','',3,0,67108864,2),('7_671088640',671088640,'/home/kds/cfs/sdb5/writeCache/7/7-671088640',0,1,NULL,7,NULL,7,'','',3,0,67108864,2),('7_738197504',738197504,'/home/kds/cfs/sdb5/writeCache/7/7-738197504',0,0,NULL,7,NULL,7,'','',3,0,67108864,2),('7_805306368',805306368,'/home/kds/cfs/sdb5/writeCache/7/7-805306368',0,1,NULL,7,NULL,7,'','',3,0,12582912,2),('8_0',0,'/home/kds/cfs/sdb5/writeCache/8/8-0',0,0,NULL,0,NULL,8,'','',3,0,67108864,3),('8_134217728',134217728,'/home/kds/cfs/sdb5/writeCache/8/8-134217728',0,0,NULL,0,NULL,8,'','',3,0,67108864,3),('8_201326592',201326592,'/home/kds/cfs/sdb5/writeCache/8/8-201326592',0,1,NULL,0,NULL,8,'','',3,0,67108864,3),('8_268435456',268435456,'/home/kds/cfs/sdb5/writeCache/8/8-268435456',0,0,NULL,0,NULL,8,'','',3,0,46137344,3),('8_67108864',67108864,'/home/kds/cfs/sdb5/writeCache/8/8-67108864',0,1,NULL,0,NULL,8,'','',3,0,67108864,3),('9_0',0,'/home/kds/cfs/sdb5/writeCache/9/9-0',0,1,NULL,0,NULL,9,'','',3,0,67108864,3),('9_134217728',134217728,'/home/kds/cfs/sdb5/writeCache/9/9-134217728',0,1,NULL,0,NULL,9,'','',3,0,67108864,3),('9_201326592',201326592,'/home/kds/cfs/sdb5/writeCache/9/9-201326592',0,0,NULL,0,NULL,9,'','',3,0,67108864,3),('9_268435456',268435456,'/home/kds/cfs/sdb5/writeCache/9/9-268435456',0,1,NULL,0,NULL,9,'','',3,0,46137344,3),('9_67108864',67108864,'/home/kds/cfs/sdb5/writeCache/9/9-67108864',0,0,NULL,0,NULL,9,'','',3,0,67108864,3);
/*!40000 ALTER TABLE `BlockModel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `CdModel`
--

DROP TABLE IF EXISTS `CdModel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `CdModel` (
  `id` bigint(20) NOT NULL,
  `cdNum` int(11) NOT NULL,
  `columnNum` int(11) NOT NULL,
  `isBurnSuccess` bit(1) NOT NULL,
  `layerNum` int(11) NOT NULL,
  `rackId` int(11) NOT NULL,
  `rowNum` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `CdModel`
--

LOCK TABLES `CdModel` WRITE;
/*!40000 ALTER TABLE `CdModel` DISABLE KEYS */;
INSERT INTO `CdModel` VALUES (1,0,7,'',3,0,2),(2,1,7,'',3,0,2),(3,0,0,'',3,0,3),(4,1,0,'',3,0,3);
/*!40000 ALTER TABLE `CdModel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `FileModel`
--

DROP TABLE IF EXISTS `FileModel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `FileModel` (
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
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `FileModel`
--

LOCK TABLES `FileModel` WRITE;
/*!40000 ALTER TABLE `FileModel` DISABLE KEYS */;
INSERT INTO `FileModel` VALUES (1,1463370757000,0,4,'root','/','root','/home/kds/cfs/sdb5/dir','',0,1463370757000),(2,1463370757000,67108864,0,'root','.Trash','root','/home/kds/cfs/sdb5/dir/.Trash','\0',0,1463370757000),(3,1463370757000,67108864,0,'root','.xdg-volume-info','root','/home/kds/cfs/sdb5/dir/.xdg-volume-info','\0',0,1463370757000),(4,1463370757000,67108864,0,'root','autorun.inf','root','/home/kds/cfs/sdb5/dir/autorun.inf','\0',0,1463370757000),(5,1463370757000,0,2,'root','..','root','/home/kds/cfs/sdb5/dir/..','',0,1463370757000),(6,1463370757000,67108864,0,'root','.Trash-500','root','/home/kds/cfs/sdb5/dir/.Trash-500','\0',0,1463370757000),(7,1463370786000,67108864,0,'root','0.txt','root','/home/kds/cfs/sdb5/dir/0.txt','\0',0,1463370786000),(8,1463370795000,67108864,0,'root','10.txt','root','/home/kds/cfs/sdb5/dir/10.txt','\0',0,1463370795000),(9,1463370798000,67108864,0,'root','11.txt','root','/home/kds/cfs/sdb5/dir/11.txt','\0',0,1463370798000),(10,1463370802000,67108864,0,'root','1.txt','root','/home/kds/cfs/sdb5/dir/1.txt','\0',0,1463370802000),(11,1463370811000,67108864,0,'root','2.txt','root','/home/kds/cfs/sdb5/dir/2.txt','\0',0,1463370811000),(12,1463370820000,67108864,0,'root','3.txt','root','/home/kds/cfs/sdb5/dir/3.txt','\0',0,1463370820000),(13,1463370828000,67108864,0,'root','4.txt','root','/home/kds/cfs/sdb5/dir/4.txt','\0',0,1463370828000),(14,1463370841000,67108864,0,'root','5.txt','root','/home/kds/cfs/sdb5/dir/5.txt','\0',0,1463370841000),(15,1463370845000,67108864,0,'root','6.txt','root','/home/kds/cfs/sdb5/dir/6.txt','\0',0,1463370845000),(16,1463370848000,67108864,0,'root','7.txt','root','/home/kds/cfs/sdb5/dir/7.txt','\0',0,1463370848000),(17,1463370852000,67108864,0,'root','8.txt','root','/home/kds/cfs/sdb5/dir/8.txt','\0',0,1463370852000),(18,1463370855000,67108864,0,'root','9.txt','root','/home/kds/cfs/sdb5/dir/9.txt','\0',0,1463370855000);
/*!40000 ALTER TABLE `FileModel` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-05-16 12:06:47
