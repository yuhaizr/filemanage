/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50540
Source Host           : localhost:3306
Source Database       : filemanage

Target Server Type    : MYSQL
Target Server Version : 50540
File Encoding         : 65001

Date: 2016-11-15 00:47:35
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `ys_admin`
-- ----------------------------
DROP TABLE IF EXISTS `ys_admin`;
CREATE TABLE `ys_admin` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) COLLATE utf8_bin DEFAULT NULL,
  `account` varchar(256) COLLATE utf8_bin DEFAULT NULL,
  `password` varchar(256) COLLATE utf8_bin DEFAULT NULL,
  `ctime` datetime DEFAULT NULL,
  `cuid` bigint(20) DEFAULT NULL,
  `is_valid` bigint(20) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of ys_admin
-- ----------------------------
INSERT INTO `ys_admin` VALUES ('1', '管理员2', 'admin2', 'e10adc3949ba59abbe56e057f20f883e', '2016-11-13 11:07:58', '1', '1');
INSERT INTO `ys_admin` VALUES ('2', '管理员1', 'admin', 'e10adc3949ba59abbe56e057f20f883e', '2016-11-13 11:17:35', '1', '1');

-- ----------------------------
-- Table structure for `ys_class`
-- ----------------------------
DROP TABLE IF EXISTS `ys_class`;
CREATE TABLE `ys_class` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) COLLATE utf8_bin DEFAULT NULL,
  `year` varchar(16) COLLATE utf8_bin DEFAULT NULL,
  `mark` varchar(512) COLLATE utf8_bin DEFAULT NULL,
  `ctime` datetime DEFAULT NULL,
  `cuid` bigint(20) DEFAULT NULL,
  `is_valid` bigint(20) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of ys_class
-- ----------------------------
INSERT INTO `ys_class` VALUES ('9', 'A1311', '2013', '', '2016-11-14 22:48:27', null, '1');
INSERT INTO `ys_class` VALUES ('10', 'A1312', '2013', '', '2016-11-14 22:48:43', null, '1');
INSERT INTO `ys_class` VALUES ('11', 'A1313', '2013', '', '2016-11-14 22:48:58', null, '1');
INSERT INTO `ys_class` VALUES ('12', 'A1314', '2013', 'test', '2016-11-15 00:20:26', null, '0');

-- ----------------------------
-- Table structure for `ys_course`
-- ----------------------------
DROP TABLE IF EXISTS `ys_course`;
CREATE TABLE `ys_course` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) COLLATE utf8_bin DEFAULT NULL,
  `type` bigint(20) DEFAULT '1' COMMENT '1、代表普通课程   2、代表CET4、CET6等考试科目',
  `mark` varchar(512) COLLATE utf8_bin DEFAULT NULL,
  `ctime` datetime DEFAULT NULL,
  `cuid` bigint(20) DEFAULT NULL,
  `is_valid` bigint(20) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of ys_course
-- ----------------------------
INSERT INTO `ys_course` VALUES ('7', 'CET4', '2', '', '2016-11-10 07:34:58', null, '1');
INSERT INTO `ys_course` VALUES ('8', '计算机原理', '1', '', '2016-11-12 09:43:32', null, '1');
INSERT INTO `ys_course` VALUES ('9', '计算机二级考试', '2', '', '2016-11-12 09:44:01', null, '1');
INSERT INTO `ys_course` VALUES ('10', '数据结构', '1', '', '2016-11-12 11:29:05', '1', '1');
INSERT INTO `ys_course` VALUES ('11', 'C语言', '1', '', '2016-11-15 00:21:26', null, '1');

-- ----------------------------
-- Table structure for `ys_file`
-- ----------------------------
DROP TABLE IF EXISTS `ys_file`;
CREATE TABLE `ys_file` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `file_temp_id` bigint(20) DEFAULT NULL,
  `value` text COLLATE utf8_bin,
  `ctime` datetime DEFAULT NULL,
  `cuid` bigint(20) DEFAULT NULL,
  `is_valid` bigint(20) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of ys_file
-- ----------------------------
INSERT INTO `ys_file` VALUES ('10', '12', 0x7B22647A64776D63223A225C75346665315C75363036665C75356236365C75393636325C75353135615C75363532665C7539306538222C22647768223A22303030303031222C2264777A6E223A225C75376563345C75376563375C75353135615C7535343538222C226677667A72223A225C75366533385C7536303164227D, '2016-11-14 23:43:14', '1', '1');
INSERT INTO `ys_file` VALUES ('11', '12', 0x7B22647A64776D63223A225C75353534365C75356236365C75393636325C75353135615C75363532665C7539306538222C22647768223A22303030303032222C2264777A6E223A225C75376563345C75376563375C75353135615C75353435385C75366433625C7535326138222C226677667A72223A225C75366533385C753630316432227D, '2016-11-14 23:45:53', '1', '1');
INSERT INTO `ys_file` VALUES ('12', '13', 0x7B226A786B7964776D63223A225C75346665315C75363036665C75356236365C75393636325C75373964315C75373831345C75353230365C7539306538222C22647768223A223030303033222C226477667A72223A225C75366533385C7536303164227D, '2016-11-15 00:28:09', null, '1');

-- ----------------------------
-- Table structure for `ys_file_temp`
-- ----------------------------
DROP TABLE IF EXISTS `ys_file_temp`;
CREATE TABLE `ys_file_temp` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `title` varchar(256) COLLATE utf8_bin NOT NULL,
  `mark` text COLLATE utf8_bin,
  `name` text COLLATE utf8_bin NOT NULL COMMENT 'json 数据，存储档案模板信息',
  `ctime` datetime DEFAULT NULL,
  `cuid` bigint(20) DEFAULT NULL,
  `is_valid` bigint(20) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of ys_file_temp
-- ----------------------------
INSERT INTO `ys_file_temp` VALUES ('12', '表1-3学校相关党政单位', '', 0x7B22647A64776D63223A225C75353135615C75363533665C75353335355C75346634645C75353430645C7537396630222C22647768223A225C75353335355C75346634645C7535336637222C2264777A6E223A225C75353335355C75346634645C75383034635C7538306664222C226677667A72223A225C75353335355C75346634645C75386431665C75386432335C7534656261227D, '2016-11-14 23:38:42', '1', '1');
INSERT INTO `ys_file_temp` VALUES ('13', '表1-4学校教学科研单位', '', 0x7B226A786B7964776D63223A225C75363535395C75356236365C75373964315C75373831345C75353335355C75346634645C75353430645C7537396630222C22647768223A225C75353335355C75346634645C7535336637222C226477667A72223A225C75353335355C75346634645C75386431665C75386432335C7534656261227D, '2016-11-15 00:27:14', null, '1');

-- ----------------------------
-- Table structure for `ys_score`
-- ----------------------------
DROP TABLE IF EXISTS `ys_score`;
CREATE TABLE `ys_score` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `student_id` bigint(20) DEFAULT NULL,
  `course_id` bigint(20) DEFAULT NULL,
  `ctime` datetime DEFAULT NULL,
  `cuid` bigint(20) DEFAULT NULL,
  `is_valid` bigint(20) DEFAULT '1',
  `score` float(11,1) DEFAULT NULL,
  `year` bigint(20) DEFAULT NULL,
  `term` bigint(20) DEFAULT '1' COMMENT '1、上学年 2、下学年',
  `class_id` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=81 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of ys_score
-- ----------------------------
INSERT INTO `ys_score` VALUES ('71', '6', '8', '2016-11-14 23:07:13', '1', '1', '70.0', '2013', '1', '9');
INSERT INTO `ys_score` VALUES ('72', '7', '8', '2016-11-14 23:07:26', '1', '1', '80.0', '2013', '1', '10');
INSERT INTO `ys_score` VALUES ('73', '8', '8', '2016-11-14 23:07:38', '1', '1', '90.0', '2013', '1', '11');
INSERT INTO `ys_score` VALUES ('74', '6', '10', '2016-11-14 23:20:26', '1', '1', '78.0', '2013', '2', '9');
INSERT INTO `ys_score` VALUES ('75', '7', '10', '2016-11-14 23:20:40', '1', '1', '88.0', '2013', '2', '10');
INSERT INTO `ys_score` VALUES ('76', '8', '10', '2016-11-14 23:20:55', '1', '1', '98.0', '2013', '2', '11');
INSERT INTO `ys_score` VALUES ('77', '6', '11', '2016-11-15 00:21:52', null, '1', '77.0', '2013', '1', '9');
INSERT INTO `ys_score` VALUES ('78', '7', '11', '2016-11-15 00:22:04', null, '1', '88.0', '2013', '1', '10');
INSERT INTO `ys_score` VALUES ('79', '8', '11', '2016-11-15 00:22:17', null, '1', '79.0', '2013', '1', '11');
INSERT INTO `ys_score` VALUES ('80', '8', '11', '2016-11-15 00:29:18', null, '1', '79.0', '2013', '2', '11');

-- ----------------------------
-- Table structure for `ys_student`
-- ----------------------------
DROP TABLE IF EXISTS `ys_student`;
CREATE TABLE `ys_student` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `number` varchar(32) COLLATE utf8_bin DEFAULT NULL COMMENT '11015020311  11位',
  `name` varchar(256) COLLATE utf8_bin DEFAULT NULL,
  `sex` bigint(20) DEFAULT NULL,
  `birthday` varchar(32) COLLATE utf8_bin DEFAULT NULL,
  `political` varchar(128) COLLATE utf8_bin DEFAULT NULL,
  `phone` varchar(25) COLLATE utf8_bin DEFAULT NULL,
  `addr` varchar(246) COLLATE utf8_bin DEFAULT NULL,
  `class_id` bigint(20) DEFAULT NULL,
  `activity` text COLLATE utf8_bin COMMENT '参与活动',
  `award_punishment` text COLLATE utf8_bin COMMENT '获奖处分情况.',
  `ctime` datetime DEFAULT NULL,
  `cuid` bigint(20) DEFAULT NULL,
  `is_valid` bigint(20) DEFAULT '1',
  `password` varchar(256) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of ys_student
-- ----------------------------
INSERT INTO `ys_student` VALUES ('8', '10000000003', '学生3', '1', '1995-07-13', '群众', '18273898494', '九江市', '11', '', '', '2016-11-14 23:06:16', '1', '1', 'e10adc3949ba59abbe56e057f20f883e');
INSERT INTO `ys_student` VALUES ('7', '10000000001', '学生2', '1', '1995-06-15', '群众', '18235468889', '九江市', '10', '', '', '2016-11-14 22:58:54', '1', '1', '202cb962ac59075b964b07152d234b70');
INSERT INTO `ys_student` VALUES ('9', '10000000004', '学生4', '1', '2013-01-29', '党员', '18239290987', '九江市', '11', '', '', '2016-11-15 00:24:30', null, '1', 'e10adc3949ba59abbe56e057f20f883e');
INSERT INTO `ys_student` VALUES ('6', '10000000002', '学生1', '1', '1994-06-14', '群众', '18258293306', '九江市', '9', '', '', '2016-11-14 22:57:09', '1', '1', 'e10adc3949ba59abbe56e057f20f883e');

-- ----------------------------
-- Table structure for `ys_student_count`
-- ----------------------------
DROP TABLE IF EXISTS `ys_student_count`;
CREATE TABLE `ys_student_count` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `student_id` bigint(20) DEFAULT NULL,
  `year` bigint(20) DEFAULT NULL,
  `term` bigint(20) DEFAULT NULL,
  `total_score` float DEFAULT NULL,
  `rank` bigint(20) DEFAULT NULL,
  `is_valid` bigint(20) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of ys_student_count
-- ----------------------------
INSERT INTO `ys_student_count` VALUES ('11', '8', '2013', '1', '169', null, '1');
INSERT INTO `ys_student_count` VALUES ('12', '7', '2013', '1', '168', null, '1');
INSERT INTO `ys_student_count` VALUES ('13', '6', '2013', '1', '147', null, '1');
INSERT INTO `ys_student_count` VALUES ('14', '6', '2013', '2', '78', null, '1');
INSERT INTO `ys_student_count` VALUES ('15', '7', '2013', '2', '88', null, '1');
INSERT INTO `ys_student_count` VALUES ('16', '8', '2013', '2', '177', null, '1');

-- ----------------------------
-- Table structure for `ys_teacher`
-- ----------------------------
DROP TABLE IF EXISTS `ys_teacher`;
CREATE TABLE `ys_teacher` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) COLLATE utf8_bin NOT NULL,
  `sex` bigint(20) DEFAULT NULL,
  `birthday` varchar(64) COLLATE utf8_bin DEFAULT NULL,
  `political` varchar(128) COLLATE utf8_bin DEFAULT NULL COMMENT '政治面貌',
  `phone` varchar(25) COLLATE utf8_bin DEFAULT NULL COMMENT '联系电话',
  `addr` varchar(256) COLLATE utf8_bin DEFAULT NULL COMMENT '家庭所在地',
  `level` bigint(20) DEFAULT NULL COMMENT '级别',
  `agency` varchar(256) COLLATE utf8_bin DEFAULT NULL COMMENT '教师教学发展机构',
  `trade_learn_status` text COLLATE utf8_bin COMMENT '教师培训进修交流情况',
  `scientific_project_status` text COLLATE utf8_bin COMMENT '教师主持科研项目情况',
  `reward_status` text COLLATE utf8_bin COMMENT '教师获得科研奖励情况',
  `paper_status` text COLLATE utf8_bin COMMENT '教师发表的论文情况',
  `publication_status` text COLLATE utf8_bin COMMENT '教师出版专著情况',
  `patent_status` text COLLATE utf8_bin COMMENT '教师专利著作权授权情况',
  `teaching_material_status` text COLLATE utf8_bin COMMENT '教师主编本专业教材情况',
  `ctime` datetime DEFAULT NULL,
  `cuid` bigint(20) DEFAULT NULL,
  `is_valid` bigint(20) DEFAULT '1',
  `password` varchar(128) COLLATE utf8_bin DEFAULT NULL,
  `number` varchar(32) COLLATE utf8_bin DEFAULT NULL COMMENT '工号',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of ys_teacher
-- ----------------------------
INSERT INTO `ys_teacher` VALUES ('8', '教师3', '1', '1962-02-06', '中共党员', '15179298376', '党员', '300', '', '', '', '', '', '', '', '', '2016-11-15 00:25:41', null, '1', 'e10adc3949ba59abbe56e057f20f883e', '10000000003');
INSERT INTO `ys_teacher` VALUES ('7', '教师2', '1', '1951-01-09', '党员', '18273940578', '九江市', '400', '', '', '', '', '', '', '', '', '2016-11-14 23:28:42', '1', '1', 'e10adc3949ba59abbe56e057f20f883e', '10000000002');
INSERT INTO `ys_teacher` VALUES ('6', '教师1', '1', '1987-02-10', '党员', '1272930489', '九江', '100', '九江计算机协会', '', '', '', '', '', '', '', '2016-11-14 23:24:28', '1', '1', 'e10adc3949ba59abbe56e057f20f883e', '10000000001');

-- ----------------------------
-- Table structure for `ys_teacher_course`
-- ----------------------------
DROP TABLE IF EXISTS `ys_teacher_course`;
CREATE TABLE `ys_teacher_course` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `course_id` bigint(20) DEFAULT NULL,
  `year` bigint(20) DEFAULT NULL,
  `term` bigint(20) DEFAULT NULL,
  `class_id` bigint(20) DEFAULT NULL,
  `ctime` datetime DEFAULT NULL,
  `cuid` bigint(20) DEFAULT NULL,
  `is_valid` bigint(20) DEFAULT '1',
  `teacher_id` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of ys_teacher_course
-- ----------------------------
INSERT INTO `ys_teacher_course` VALUES ('5', '11', '2013', '1', '9', '2016-11-15 00:23:20', null, '1', '7');
INSERT INTO `ys_teacher_course` VALUES ('3', '8', '2013', '1', '9', '2016-11-14 23:32:33', '1', '1', '6');
INSERT INTO `ys_teacher_course` VALUES ('4', '10', '2013', '1', '9', '2016-11-14 23:32:44', '1', '1', '7');
