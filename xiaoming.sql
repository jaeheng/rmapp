-- MySQL dump 10.13  Distrib 5.7.17, for macos10.12 (x86_64)
--
-- Host: localhost    Database: xiaoming
-- ------------------------------------------------------
-- Server version	5.7.17

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
-- Table structure for table `xm_admin`
--

DROP TABLE IF EXISTS `xm_admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `xm_admin` (
  `uid` tinyint(1) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `xm_area`
--

DROP TABLE IF EXISTS `xm_area`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `xm_area` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `area_name` varchar(255) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `xm_category`
--

DROP TABLE IF EXISTS `xm_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `xm_category` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `cate_name` varchar(255) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `xm_forum`
--

DROP TABLE IF EXISTS `xm_forum`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `xm_forum` (
  `w_id` int(11) NOT NULL AUTO_INCREMENT,
  `area` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL COMMENT '类别',
  `sort` varchar(255) DEFAULT NULL COMMENT '分类',
  `site_name` varchar(255) NOT NULL COMMENT '微信号',
  `plate` varchar(255) DEFAULT NULL COMMENT '板块',
  `plate_url` varchar(255) DEFAULT NULL COMMENT '板块地址',
  `effect` varchar(255) DEFAULT NULL COMMENT '效果',
  `top_pri` int(11) DEFAULT NULL COMMENT '置顶价格',
  `anima_pri` int(11) DEFAULT NULL COMMENT '加精价格',
  `top_ben` int(11) DEFAULT NULL COMMENT '置顶成本',
  `anima_ben` int(11) DEFAULT NULL COMMENT '加精成本',
  `owner` varchar(255) DEFAULT NULL COMMENT '拥有者',
  `dateline` int(11) DEFAULT NULL,
  PRIMARY KEY (`w_id`)
) ENGINE=InnoDB AUTO_INCREMENT=80 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `xm_forum_rec`
--

DROP TABLE IF EXISTS `xm_forum_rec`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `xm_forum_rec` (
  `w_id` int(11) NOT NULL AUTO_INCREMENT,
  `area` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL COMMENT '类别',
  `sort` varchar(255) DEFAULT NULL COMMENT '分类',
  `site_name` varchar(255) NOT NULL COMMENT '微信号',
  `plate` varchar(255) DEFAULT NULL COMMENT '板块',
  `plate_url` varchar(255) DEFAULT NULL COMMENT '板块地址',
  `effect` varchar(255) DEFAULT NULL COMMENT '效果',
  `top_pri` int(11) DEFAULT NULL COMMENT '置顶价格',
  `anima_pri` int(11) DEFAULT NULL COMMENT '加精价格',
  `top_ben` int(11) DEFAULT NULL COMMENT '置顶成本',
  `anima_ben` int(11) DEFAULT NULL COMMENT '加精成本',
  `owner` varchar(255) DEFAULT NULL COMMENT '拥有者',
  `dateline` int(11) DEFAULT NULL,
  PRIMARY KEY (`w_id`)
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `xm_member`
--

DROP TABLE IF EXISTS `xm_member`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `xm_member` (
  `mid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `qq` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `remark` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`mid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `xm_news`
--

DROP TABLE IF EXISTS `xm_news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `xm_news` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `title` char(50) DEFAULT NULL,
  `author` varchar(20) DEFAULT NULL,
  `from` varchar(20) DEFAULT NULL,
  `content` text,
  `dateline` int(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `xm_sort`
--

DROP TABLE IF EXISTS `xm_sort`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `xm_sort` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `sort_name` varchar(255) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `xm_weibo`
--

DROP TABLE IF EXISTS `xm_weibo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `xm_weibo` (
  `w_id` int(11) NOT NULL AUTO_INCREMENT,
  `nick` varchar(255) NOT NULL,
  `sort` varchar(255) DEFAULT NULL,
  `fans` int(11) DEFAULT NULL,
  `zhi_pri` int(11) DEFAULT NULL,
  `zhuan_pri` int(11) DEFAULT NULL,
  `zhi_ben` int(11) DEFAULT NULL,
  `zhuan_ben` int(11) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `area` varchar(255) DEFAULT NULL,
  `classU` varchar(255) DEFAULT NULL,
  `owner` varchar(255) DEFAULT NULL,
  `owner_url` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `dateline` int(4) DEFAULT NULL,
  PRIMARY KEY (`w_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1471 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `xm_weibo_rec`
--

DROP TABLE IF EXISTS `xm_weibo_rec`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `xm_weibo_rec` (
  `w_id` int(11) NOT NULL,
  `nick` varchar(255) NOT NULL,
  `sort` varchar(255) DEFAULT NULL,
  `fans` int(11) DEFAULT NULL,
  `zhi_pri` int(11) DEFAULT NULL,
  `zhuan_pri` int(11) DEFAULT NULL,
  `zhi_ben` int(11) DEFAULT NULL,
  `zhuan_ben` int(11) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `area` varchar(255) DEFAULT NULL,
  `classU` varchar(255) DEFAULT NULL,
  `owner` varchar(255) DEFAULT NULL,
  `owner_url` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `dateline` int(11) DEFAULT NULL,
  PRIMARY KEY (`w_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `xm_weixin`
--

DROP TABLE IF EXISTS `xm_weixin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `xm_weixin` (
  `w_id` int(11) NOT NULL AUTO_INCREMENT,
  `nick` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL COMMENT '微信号',
  `sort` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `fans` int(11) DEFAULT NULL,
  `dan_pri` int(11) DEFAULT NULL,
  `dan_ben` int(11) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `area` varchar(255) DEFAULT NULL,
  `owner` varchar(255) DEFAULT NULL,
  `owner_url` varchar(255) DEFAULT NULL,
  `dateline` int(11) DEFAULT NULL,
  PRIMARY KEY (`w_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `xm_weixin_rec`
--

DROP TABLE IF EXISTS `xm_weixin_rec`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `xm_weixin_rec` (
  `w_id` int(11) NOT NULL AUTO_INCREMENT,
  `nick` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL COMMENT '微信号',
  `sort` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `fans` int(11) DEFAULT NULL,
  `dan_pri` int(11) DEFAULT NULL,
  `dan_ben` int(11) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `area` varchar(255) DEFAULT NULL,
  `owner` varchar(255) DEFAULT NULL,
  `owner_url` varchar(255) DEFAULT NULL,
  `dateline` int(11) DEFAULT NULL,
  PRIMARY KEY (`w_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-08-11 17:58:49
