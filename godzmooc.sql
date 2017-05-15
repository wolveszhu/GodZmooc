/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50547
Source Host           : localhost:3306
Source Database       : data

Target Server Type    : MYSQL
Target Server Version : 50547
File Encoding         : 65001

Date: 2016-10-08 23:46:49
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `godz_admin`
-- ----------------------------
DROP TABLE IF EXISTS `godz_admin`;
CREATE TABLE `godz_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(32) NOT NULL,
  `pwd` char(50) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `auth` tinyint(4) NOT NULL DEFAULT '1',
  `photo` varchar(50) NOT NULL DEFAULT 'default.jpg',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of godz_admin
-- ----------------------------
INSERT INTO `godz_admin` VALUES ('1', 'admin', '21232f297a57a5a743894a0e4a801fc3', '1', '1', '2016-10-08/57f9128f80bef.jpg');
INSERT INTO `godz_admin` VALUES ('9', 'user123123', '21232f297a57a5a743894a0e4a801fc3', '1', '1', '2015-12-23/5679fba72625a.gif');

-- ----------------------------
-- Table structure for `godz_adv`
-- ----------------------------
DROP TABLE IF EXISTS `godz_adv`;
CREATE TABLE `godz_adv` (
  `id` int(32) unsigned NOT NULL AUTO_INCREMENT,
  `price` decimal(10,2) NOT NULL DEFAULT '100.00',
  `url` char(50) NOT NULL,
  `des` text NOT NULL,
  `pic` char(255) NOT NULL,
  `place` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=67 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of godz_adv
-- ----------------------------
INSERT INTO `godz_adv` VALUES ('65', '78.00', 'godz/admin.php/Adv/index.html', '       广告                         ', '2015-12-22/56796e4f89544.jpg', '3');
INSERT INTO `godz_adv` VALUES ('49', '100.00', '__APP__type/index', '                 便宜实惠               ', '2015-12-20/56763f7aa4083.jpg', '0');
INSERT INTO `godz_adv` VALUES ('50', '100.00', '__APP__type/index', '便宜实惠                       ', '2015-12-20/56763f6357bcf.jpg', '0');
INSERT INTO `godz_adv` VALUES ('66', '435.00', 'godz/admin.php/Adv/index.html', '           34543                     ', '2015-12-23/5679fc3faf79e.jpg', '0');
INSERT INTO `godz_adv` VALUES ('61', '89.00', 'godz/admin.php/Adv/index.html', '          广告                      ', '2015-12-22/56796e5faba95.jpg', '2');

-- ----------------------------
-- Table structure for `godz_advice`
-- ----------------------------
DROP TABLE IF EXISTS `godz_advice`;
CREATE TABLE `godz_advice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `advice` text NOT NULL,
  `uid` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `relation` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of godz_advice
-- ----------------------------
INSERT INTO `godz_advice` VALUES ('1', '5555555', '5555555', '19', '1450663850', 'ypl189@11.com');
INSERT INTO `godz_advice` VALUES ('4', '11111111111', '1111111111111111', '27', '1450829421', '111@qq.com');
INSERT INTO `godz_advice` VALUES ('5', '111111111', '111111111111', '27', '1450834632', '111@qq.com');

-- ----------------------------
-- Table structure for `godz_app`
-- ----------------------------
DROP TABLE IF EXISTS `godz_app`;
CREATE TABLE `godz_app` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` varchar(11) NOT NULL,
  `time` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `addr` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of godz_app
-- ----------------------------
INSERT INTO `godz_app` VALUES ('22', 'unknow', '1450663524', '安卓版', '127.0.0.1');
INSERT INTO `godz_app` VALUES ('23', 'unknow', '1450685512', 'iPhone版', '127.0.0.1');
INSERT INTO `godz_app` VALUES ('24', 'unknow', '1450769296', 'iPhone版', '192.168.121.112');
INSERT INTO `godz_app` VALUES ('25', 'unknow', '1450769299', 'iPad版', '192.168.121.112');
INSERT INTO `godz_app` VALUES ('26', '26', '1450769319', 'iPad版', '192.168.121.112');
INSERT INTO `godz_app` VALUES ('27', '27', '1450770643', 'iPhone版', '192.168.121.112');
INSERT INTO `godz_app` VALUES ('28', '27', '1450770648', 'iPhone版', '192.168.121.112');
INSERT INTO `godz_app` VALUES ('29', '27', '1450829344', 'iPad版', '192.168.121.112');
INSERT INTO `godz_app` VALUES ('30', '27', '1450834654', 'iPad版', '192.168.121.112');

-- ----------------------------
-- Table structure for `godz_auth_group`
-- ----------------------------
DROP TABLE IF EXISTS `godz_auth_group`;
CREATE TABLE `godz_auth_group` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` char(100) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `rules` char(80) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of godz_auth_group
-- ----------------------------
INSERT INTO `godz_auth_group` VALUES ('3', '超级管理', '1', '1,2,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,3');
INSERT INTO `godz_auth_group` VALUES ('10', '用户管理', '1', '1,2,4,5,6,7');

-- ----------------------------
-- Table structure for `godz_auth_group_access`
-- ----------------------------
DROP TABLE IF EXISTS `godz_auth_group_access`;
CREATE TABLE `godz_auth_group_access` (
  `uid` mediumint(8) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  UNIQUE KEY `uid_group_id` (`uid`,`group_id`),
  KEY `uid` (`uid`),
  KEY `group_id` (`group_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of godz_auth_group_access
-- ----------------------------
INSERT INTO `godz_auth_group_access` VALUES ('3', '3');
INSERT INTO `godz_auth_group_access` VALUES ('4', '1');
INSERT INTO `godz_auth_group_access` VALUES ('5', '2');
INSERT INTO `godz_auth_group_access` VALUES ('6', '7');
INSERT INTO `godz_auth_group_access` VALUES ('7', '5');
INSERT INTO `godz_auth_group_access` VALUES ('8', '8');
INSERT INTO `godz_auth_group_access` VALUES ('9', '3');

-- ----------------------------
-- Table structure for `godz_auth_rule`
-- ----------------------------
DROP TABLE IF EXISTS `godz_auth_rule`;
CREATE TABLE `godz_auth_rule` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(80) NOT NULL DEFAULT '',
  `title` char(20) NOT NULL DEFAULT '',
  `type` tinyint(1) NOT NULL DEFAULT '1',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `condition` char(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=69 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of godz_auth_rule
-- ----------------------------
INSERT INTO `godz_auth_rule` VALUES ('1', 'index/index', '后台首页', '1', '1', '');
INSERT INTO `godz_auth_rule` VALUES ('2', 'User/index', '用户首页', '1', '1', '');
INSERT INTO `godz_auth_rule` VALUES ('4', 'user/mod', '用户的修改', '1', '1', '');
INSERT INTO `godz_auth_rule` VALUES ('5', 'user/add', '用户的添加', '1', '1', '');
INSERT INTO `godz_auth_rule` VALUES ('6', 'user/del', '用户的删除', '1', '1', '');
INSERT INTO `godz_auth_rule` VALUES ('7', 'user/status', '用户的状态', '1', '1', '');
INSERT INTO `godz_auth_rule` VALUES ('8', 'admin/index', '管理员列表', '1', '1', '');
INSERT INTO `godz_auth_rule` VALUES ('9', 'admin/add', '添加管理员', '1', '1', '');
INSERT INTO `godz_auth_rule` VALUES ('10', 'admin/mod', '修改管理员', '1', '1', '');
INSERT INTO `godz_auth_rule` VALUES ('11', 'admin/del', '管理员删除', '1', '1', '');
INSERT INTO `godz_auth_rule` VALUES ('12', 'admin/status', '管理员状态', '1', '1', '');
INSERT INTO `godz_auth_rule` VALUES ('13', 'auth/ruleIndex', '权限列表', '1', '1', '');
INSERT INTO `godz_auth_rule` VALUES ('14', 'auth/addRule', '添加权限', '1', '1', '');
INSERT INTO `godz_auth_rule` VALUES ('15', 'auth/modRule', '修改权限', '1', '1', '');
INSERT INTO `godz_auth_rule` VALUES ('16', 'auth/delRule', '删除权限', '1', '1', '');
INSERT INTO `godz_auth_rule` VALUES ('17', 'auth/modStatus', '修改状态', '1', '1', '');
INSERT INTO `godz_auth_rule` VALUES ('18', 'adv/index', '广告列表', '1', '1', '');
INSERT INTO `godz_auth_rule` VALUES ('19', 'adv/add', '添加广告', '1', '1', '');
INSERT INTO `godz_auth_rule` VALUES ('20', 'adv/mod', '修改广告', '1', '1', '');
INSERT INTO `godz_auth_rule` VALUES ('21', 'adv/del', '删除广告', '1', '1', '');
INSERT INTO `godz_auth_rule` VALUES ('22', 'config/index', '网站配置的列表', '1', '1', '');
INSERT INTO `godz_auth_rule` VALUES ('23', 'config/status', '修改网站状态', '1', '1', '');
INSERT INTO `godz_auth_rule` VALUES ('24', 'config/mod', '修改网站配置', '1', '1', '');
INSERT INTO `godz_auth_rule` VALUES ('25', 'group/index', '管理组列表', '1', '1', '');
INSERT INTO `godz_auth_rule` VALUES ('26', 'group/mod', '修改管理组', '1', '1', '');
INSERT INTO `godz_auth_rule` VALUES ('27', 'group/add', '添加管理组', '1', '1', '');
INSERT INTO `godz_auth_rule` VALUES ('28', 'group/del', '删除管理组', '1', '1', '');
INSERT INTO `godz_auth_rule` VALUES ('29', 'group/status', '修改管理组状态', '1', '1', '');
INSERT INTO `godz_auth_rule` VALUES ('30', 'advice/index', '反馈意见列表', '1', '1', '');
INSERT INTO `godz_auth_rule` VALUES ('31', 'advice/del', '删除反馈意见', '1', '1', '');
INSERT INTO `godz_auth_rule` VALUES ('32', 'course/index', '目录列表', '1', '1', '');
INSERT INTO `godz_auth_rule` VALUES ('33', 'course/mod', '修改目录', '1', '1', '');
INSERT INTO `godz_auth_rule` VALUES ('34', 'course/add', '添加目录', '1', '1', '');
INSERT INTO `godz_auth_rule` VALUES ('35', 'course/del', '删除目录', '1', '1', '');
INSERT INTO `godz_auth_rule` VALUES ('36', 'news/index', '新闻列表', '1', '1', '');
INSERT INTO `godz_auth_rule` VALUES ('37', 'news/add', '添加新闻', '1', '1', '');
INSERT INTO `godz_auth_rule` VALUES ('38', 'news/mod', '修改新闻', '1', '1', '');
INSERT INTO `godz_auth_rule` VALUES ('39', 'news/del', '删除新闻', '1', '1', '');
INSERT INTO `godz_auth_rule` VALUES ('40', 'organ./index', '机构列表', '1', '1', '');
INSERT INTO `godz_auth_rule` VALUES ('41', 'organ/add', '添加机构', '1', '1', '');
INSERT INTO `godz_auth_rule` VALUES ('42', 'organ/mod', '修改机构', '1', '1', '');
INSERT INTO `godz_auth_rule` VALUES ('43', 'organ/del', '删除机构', '1', '1', '');
INSERT INTO `godz_auth_rule` VALUES ('44', 'teacher/index', '讲师列表', '1', '1', '');
INSERT INTO `godz_auth_rule` VALUES ('45', 'teacher/add', '添加讲师', '1', '1', '');
INSERT INTO `godz_auth_rule` VALUES ('46', 'teacher/mod', '修改讲师', '1', '1', '');
INSERT INTO `godz_auth_rule` VALUES ('47', 'teacher/del', '删除讲师', '1', '1', '');
INSERT INTO `godz_auth_rule` VALUES ('48', 'type/index', '视频分类列表', '1', '1', '');
INSERT INTO `godz_auth_rule` VALUES ('49', 'type/add_parent', '添加一级分类', '1', '1', '');
INSERT INTO `godz_auth_rule` VALUES ('50', 'type/add_son', '添加二级分类', '1', '1', '');
INSERT INTO `godz_auth_rule` VALUES ('51', 'type/select', '查询二级分类内容', '1', '1', '');
INSERT INTO `godz_auth_rule` VALUES ('52', 'type/del_video', '删除二级分类视频', '1', '1', '');
INSERT INTO `godz_auth_rule` VALUES ('53', 'type/add_video', '添加视频', '1', '1', '');
INSERT INTO `godz_auth_rule` VALUES ('54', 'type/del', '删除分类', '1', '1', '');
INSERT INTO `godz_auth_rule` VALUES ('55', 'type/mod_parent', '修改一级分类', '1', '1', '');
INSERT INTO `godz_auth_rule` VALUES ('56', 'type/mod_son', '修改二级分类', '1', '1', '');
INSERT INTO `godz_auth_rule` VALUES ('57', 'video/index', '视频列表', '1', '1', '');
INSERT INTO `godz_auth_rule` VALUES ('58', 'video/mod', '修改视频', '1', '1', '');
INSERT INTO `godz_auth_rule` VALUES ('60', 'video/del', '删除视频', '1', '1', '');
INSERT INTO `godz_auth_rule` VALUES ('61', 'user/select', '查询用户详情', '1', '1', '');
INSERT INTO `godz_auth_rule` VALUES ('62', 'download/index', '下载列表', '1', '1', '');
INSERT INTO `godz_auth_rule` VALUES ('64', 'info/index', '公告列表', '1', '1', '');
INSERT INTO `godz_auth_rule` VALUES ('65', 'info/add', '添加公告', '1', '1', '');
INSERT INTO `godz_auth_rule` VALUES ('66', 'info/mod', '修改公告', '1', '1', '');
INSERT INTO `godz_auth_rule` VALUES ('68', 'info/del', '删除公告', '1', '1', '');

-- ----------------------------
-- Table structure for `godz_config`
-- ----------------------------
DROP TABLE IF EXISTS `godz_config`;
CREATE TABLE `godz_config` (
  `id` int(32) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `copyright` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of godz_config
-- ----------------------------
INSERT INTO `godz_config` VALUES ('9', '123', '123', '123', '123', '2015-12-23/5679fc75b34a7.png', '1');

-- ----------------------------
-- Table structure for `godz_course`
-- ----------------------------
DROP TABLE IF EXISTS `godz_course`;
CREATE TABLE `godz_course` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `vid` int(11) NOT NULL,
  `name` char(32) NOT NULL,
  `url` char(50) NOT NULL DEFAULT 'www.itxdl.com',
  `tid` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=50 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of godz_course
-- ----------------------------
INSERT INTO `godz_course` VALUES ('35', '126', ' 软件的设置与准备工作', '3424', '0', '34');
INSERT INTO `godz_course` VALUES ('30', '126', '新的版本新的生产力', '___APP___Paly/index', '0', '3333');
INSERT INTO `godz_course` VALUES ('34', '127', ' 软件的设置与准备工作', '324', '0', '344');
INSERT INTO `godz_course` VALUES ('31', '125', '新的版本新的生产力', '4324', '0', '32');
INSERT INTO `godz_course` VALUES ('33', '124', '新的版本新的生产力', '3434', '0', '343');
INSERT INTO `godz_course` VALUES ('32', '125', '新的版本新的生产力', '23432', '0', '43');
INSERT INTO `godz_course` VALUES ('29', '127', 'eeeeeeeeee', '___APP___Paly/index', '0', '2222');
INSERT INTO `godz_course` VALUES ('36', '125', ' 软件的设置与准备工作', '434', '0', '343');
INSERT INTO `godz_course` VALUES ('37', '124', ' 软件的设置与准备工作', '34', '0', '34');
INSERT INTO `godz_course` VALUES ('38', '127', '其他编辑小技巧b（还有，不要在评价区问问题，因为那样我看不到', '32432', '0', '32');
INSERT INTO `godz_course` VALUES ('39', '126', '其他编辑小技巧b（还有，不要在评价区问问题，因为那样我看不到', '434', '0', '43');
INSERT INTO `godz_course` VALUES ('40', '124', '其他编辑小技巧b（还有，不要在评价区问问题，因为那样我看不到', '3434', '0', '234');
INSERT INTO `godz_course` VALUES ('41', '127', '快捷键 快速访问栏', '545', '0', '54');
INSERT INTO `godz_course` VALUES ('42', '126', 'qqqqqqqqqqq', '___APP___Paly/index', '0', '99999999');
INSERT INTO `godz_course` VALUES ('48', '125', '广告', '', '0', '0');
INSERT INTO `godz_course` VALUES ('49', '126', 'aspku测试', '', '0', '0');

-- ----------------------------
-- Table structure for `godz_coursenote`
-- ----------------------------
DROP TABLE IF EXISTS `godz_coursenote`;
CREATE TABLE `godz_coursenote` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `content` char(255) NOT NULL,
  `ntime` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of godz_coursenote
-- ----------------------------

-- ----------------------------
-- Table structure for `godz_coursereply`
-- ----------------------------
DROP TABLE IF EXISTS `godz_coursereply`;
CREATE TABLE `godz_coursereply` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `tid` int(11) NOT NULL,
  `content` char(255) NOT NULL,
  `reply_time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of godz_coursereply
-- ----------------------------

-- ----------------------------
-- Table structure for `godz_coursetalk`
-- ----------------------------
DROP TABLE IF EXISTS `godz_coursetalk`;
CREATE TABLE `godz_coursetalk` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `descriptione` char(255) NOT NULL DEFAULT '欢迎进入课程讨论区，畅所欲言吧!',
  `content` char(255) NOT NULL,
  `talk_time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of godz_coursetalk
-- ----------------------------

-- ----------------------------
-- Table structure for `godz_info`
-- ----------------------------
DROP TABLE IF EXISTS `godz_info`;
CREATE TABLE `godz_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(30) NOT NULL,
  `content` text NOT NULL,
  `time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of godz_info
-- ----------------------------
INSERT INTO `godz_info` VALUES ('11', '双十一活动通知', '价格半折', '1450592737');
INSERT INTO `godz_info` VALUES ('13', '呦呦呦', '										语言', '1450593038');
INSERT INTO `godz_info` VALUES ('14', 'uuuu', '										翻番 ', '1450594505');
INSERT INTO `godz_info` VALUES ('15', '1111', '				1111111						', '1450834683');

-- ----------------------------
-- Table structure for `godz_news`
-- ----------------------------
DROP TABLE IF EXISTS `godz_news`;
CREATE TABLE `godz_news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` char(32) NOT NULL,
  `content` char(255) NOT NULL,
  `ntime` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of godz_news
-- ----------------------------
INSERT INTO `godz_news` VALUES ('11', '和秋叶一起学职场技能', '       和秋叶一起学职场技能', '1450537862');
INSERT INTO `godz_news` VALUES ('10', '手把手教你读财报', '              手把手教你读财报', '1450537869');
INSERT INTO `godz_news` VALUES ('18', 'qwe', '                qwe', '1450834934');
INSERT INTO `godz_news` VALUES ('13', '    18招教你运营好微信公众账号  雷子思维导图', '                 18招教你运营好微信公众账号  雷子思维导图', '1450537820');

-- ----------------------------
-- Table structure for `godz_organ`
-- ----------------------------
DROP TABLE IF EXISTS `godz_organ`;
CREATE TABLE `godz_organ` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `organ` char(32) NOT NULL,
  `url` char(50) NOT NULL,
  `name` char(32) NOT NULL,
  `description` char(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of godz_organ
-- ----------------------------
INSERT INTO `godz_organ` VALUES ('23', '', 'godz/admin.php/Organ/index.html', '河南', '         教育基地');
INSERT INTO `godz_organ` VALUES ('17', '', 'godz/admin.php/Organ/index.html', '开课吧', '             汽车驾驶大百科 影想力摄影教育 育英科技 浙江工业大学之江学院');
INSERT INTO `godz_organ` VALUES ('24', '', 'godz/admin.php/Organ/index.html', 'daxw', '          asd qwdsad');

-- ----------------------------
-- Table structure for `godz_teacher`
-- ----------------------------
DROP TABLE IF EXISTS `godz_teacher`;
CREATE TABLE `godz_teacher` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `photo` char(255) NOT NULL DEFAULT 'default.jpg',
  `tname` char(32) NOT NULL,
  `organ` char(32) NOT NULL,
  `description` char(255) NOT NULL DEFAULT '德育教人',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=57 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of godz_teacher
-- ----------------------------
INSERT INTO `godz_teacher` VALUES ('46', '2015-12-18/567372134c4b4.png', '钟平', '兄弟连', '                     德育教人');
INSERT INTO `godz_teacher` VALUES ('45', '2015-12-18/56736e6d00000.png', '肖扬', '兄弟连', '德育教人');
INSERT INTO `godz_teacher` VALUES ('49', '2015-12-18/5673f3b341663.png', '魏文庆', '兄弟连', '     网易高级总监，曾担任网易泡泡，网易UU产品总监，易信产品总经理，网易产品经理评审委员会委员');
INSERT INTO `godz_teacher` VALUES ('50', '2015-12-18/5673f4b87e6f3.jpg', '彭国军', '兄弟连', '                     武汉大学计算机学院副教授，博士生导师，全国网络与信息安全防护峰会联合发起人');
INSERT INTO `godz_teacher` VALUES ('47', '2015-12-18/56736ec22625a.png', '李涛', '兄弟连', '    德育教人');
INSERT INTO `godz_teacher` VALUES ('52', '2015-12-22/56789b4989544.png', '李松', '兄弟连', '            aaaaaaaaaaaaaaaaaaaaaaaa');

-- ----------------------------
-- Table structure for `godz_type`
-- ----------------------------
DROP TABLE IF EXISTS `godz_type`;
CREATE TABLE `godz_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(32) NOT NULL,
  `pid` int(11) NOT NULL DEFAULT '0',
  `path` char(30) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=92 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of godz_type
-- ----------------------------
INSERT INTO `godz_type` VALUES ('60', 'IT互联网', '0', '0');
INSERT INTO `godz_type` VALUES ('61', '移动开发', '60', '0-60');
INSERT INTO `godz_type` VALUES ('65', '办公技能', '64', '0-64');
INSERT INTO `godz_type` VALUES ('62', '编程语言', '60', '0-60');
INSERT INTO `godz_type` VALUES ('63', '产品设计', '60', '0-60');
INSERT INTO `godz_type` VALUES ('64', '职场技能', '0', '0');
INSERT INTO `godz_type` VALUES ('66', '职业考试', '64', '0-64');
INSERT INTO `godz_type` VALUES ('67', '人力资源', '64', '0-64');
INSERT INTO `godz_type` VALUES ('68', '语言学习', '0', '0');
INSERT INTO `godz_type` VALUES ('69', '实用英语', '68', '0-68');
INSERT INTO `godz_type` VALUES ('70', '韩语', '68', '0-68');
INSERT INTO `godz_type` VALUES ('71', '托福雅思', '68', '0-68');
INSERT INTO `godz_type` VALUES ('72', '兴趣爱好', '0', '0');
INSERT INTO `godz_type` VALUES ('73', '唱歌', '72', '0-72');
INSERT INTO `godz_type` VALUES ('74', '跳舞', '72', '0-72');
INSERT INTO `godz_type` VALUES ('75', '摄影', '72', '0-72');
INSERT INTO `godz_type` VALUES ('76', '更多分类', '0', '0');
INSERT INTO `godz_type` VALUES ('77', '育儿', '76', '0-76');
INSERT INTO `godz_type` VALUES ('78', '中学', '76', '0-76');
INSERT INTO `godz_type` VALUES ('79', '大学', '76', '0-76');

-- ----------------------------
-- Table structure for `godz_user`
-- ----------------------------
DROP TABLE IF EXISTS `godz_user`;
CREATE TABLE `godz_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` char(32) NOT NULL,
  `pwd` char(32) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `auth` enum('0','1') NOT NULL DEFAULT '0',
  `pic` varchar(255) NOT NULL DEFAULT 'default.jpg',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of godz_user
-- ----------------------------
INSERT INTO `godz_user` VALUES ('19', 'ypl189@11.com', '2b70ca2826958781587c348fe4b44607', '1', '0', '2015-12-18/5673e7ab76ce1.png');
INSERT INTO `godz_user` VALUES ('21', 'usergg@qq.com', 'f5bb0c8de146c67b44babbf4e6584cc0', '1', '0', '2015-12-21/56779c91ca2dd.jpg');
INSERT INTO `godz_user` VALUES ('29', 'user@qq.com', 'f5bb0c8de146c67b44babbf4e6584cc0', '1', '0', 'default.jpg');
INSERT INTO `godz_user` VALUES ('31', 'qqq@qq.com', 'b59c67bf196a4758191e42f76670ceba', '1', '0', 'default.jpg');
INSERT INTO `godz_user` VALUES ('27', '111@qq.com', '0f3d30b36a0367535bdd45d3cfc5f099', '1', '0', '2015-12-23/5679fa9fe1113.gif');
INSERT INTO `godz_user` VALUES ('32', '123456@163.com', 'd8aef083b975fa612649470de94c6d92', '1', '0', 'default.jpg');

-- ----------------------------
-- Table structure for `godz_userdetail`
-- ----------------------------
DROP TABLE IF EXISTS `godz_userdetail`;
CREATE TABLE `godz_userdetail` (
  `id` int(10) unsigned NOT NULL,
  `username` char(32) NOT NULL,
  `sex` enum('0','2','1') NOT NULL,
  `description` char(255) NOT NULL DEFAULT '这个家伙很懒，什么都没有留下!',
  `realname` char(32) DEFAULT '',
  `qq` int(11) NOT NULL,
  `special` char(100) DEFAULT '我知道你会的多',
  `edu` char(32) NOT NULL DEFAULT '高中',
  `cardid` varchar(17) DEFAULT NULL,
  `phone` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of godz_userdetail
-- ----------------------------
INSERT INTO `godz_userdetail` VALUES ('27', 'qqq', '1', '这个家伙很懒，什么都没有留下!																', '卢伟11111', '11111', '我知道你会的多1111', '大学', '1111111111111', '1111111');
INSERT INTO `godz_userdetail` VALUES ('0', '', '0', '这个家伙很懒，什么都没有留下!', '', '0', '', '高中', null, null);
INSERT INTO `godz_userdetail` VALUES ('18', 'hahaa为', '1', '这个家伙很懒，什么都没有留下!																								', '', '0', '', '高中学', '', '');
INSERT INTO `godz_userdetail` VALUES ('19', 'fsdf', '0', '这个家伙很懒，什么都没有留下!																								', '', '0', '我知道你会的多', '高中学', '', '');
INSERT INTO `godz_userdetail` VALUES ('20', '爱你', '0', '这个家伙很懒，什么都没有留下!								', '喻佩玲', '594173463', '我知道你会的多', '大学', '121435456457', '15600449981');
INSERT INTO `godz_userdetail` VALUES ('21', '李彦宏', '1', '这个家伙很懒，什么都没有留下!																', '', '0', '我知道你会的多', '高中学', '', '');
INSERT INTO `godz_userdetail` VALUES ('24', '', '0', '这个家伙很懒，什么都没有留下!', '', '0', '我知道你会的多', '高中', null, null);
INSERT INTO `godz_userdetail` VALUES ('26', '卢伟', '1', '这个家伙很懒，什么都没有留下!								', '卢伟', '123123123', '呵呵', '大学', '2312321321', '12345678091');

-- ----------------------------
-- Table structure for `godz_video`
-- ----------------------------
DROP TABLE IF EXISTS `godz_video`;
CREATE TABLE `godz_video` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tid` int(11) NOT NULL,
  `nid` int(11) NOT NULL,
  `title` char(255) NOT NULL,
  `price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `video` char(255) NOT NULL DEFAULT 'pic.png',
  `number` int(11) NOT NULL DEFAULT '0',
  `des` char(255) NOT NULL DEFAULT '新手入门，简单易懂',
  `pid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=186 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of godz_video
-- ----------------------------
INSERT INTO `godz_video` VALUES ('126', '61', '46', ' 	30分钟轻松制作', '0.00', '2016-10-08/57f911054cc55.jpg', '8', '新手入门，简单易懂', '60');
INSERT INTO `godz_video` VALUES ('125', '61', '46', '30分钟轻松制作', '0.00', '2015-12-18/567372da03d09.jpg', '1', '新手入门，简单易懂', '60');
INSERT INTO `godz_video` VALUES ('124', '61', '46', '30分钟轻松制作', '0.00', '2015-12-18/56737294487ab.jpg', '0', '新手入门，简单易懂', '60');
INSERT INTO `godz_video` VALUES ('133', '61', '47', ' 	C++的应用', '222.00', '2015-12-18/567374926ea05.png', '0', '新手入门，简单易懂', '60');
INSERT INTO `godz_video` VALUES ('131', '65', '49', ' 	C++的应用', '33.00', '2015-12-18/5673742dc28cb.jpg', '0', '新手入门，简单易懂', '64');
INSERT INTO `godz_video` VALUES ('130', '65', '49', 'C++的应用', '100.00', '2015-12-18/567373e522551.jpg', '0', '新手入门，简单易懂', '64');
INSERT INTO `godz_video` VALUES ('129', '62', '46', 'PHP零基础教学', '0.00', '2015-12-18/5673737fdd40a.png', '3', '新手入门，简单易懂', '60');
INSERT INTO `godz_video` VALUES ('128', '65', '45', ' 	30分钟轻松制作', '0.00', '2015-12-18/5673733a81b32.jpg', '0', '新手入门，简单易懂', '64');
INSERT INTO `godz_video` VALUES ('139', '61', '45', ' 	C++的应用', '12.00', '2015-12-18/567377b7c65d4.jpg', '0', '新手入门，简单易懂', '60');
INSERT INTO `godz_video` VALUES ('138', '61', '46', ' 	C++的应用', '23.00', '2015-12-18/567377a6d1cef.jpg', '0', '新手入门，简单易懂', '60');
INSERT INTO `godz_video` VALUES ('137', '61', '49', ' 	C++的应用', '544.00', '2015-12-18/5673859157bcf.jpg', '0', '新手入门，简单易懂', '60');
INSERT INTO `godz_video` VALUES ('136', '62', '47', ' 	C++的应用', '122.00', '2015-12-18/5673776ab34a7.jpg', '0', '新手入门，简单易懂', '60');
INSERT INTO `godz_video` VALUES ('134', '61', '47', ' 	C++的应用', '77.00', '2015-12-18/5673772d03d09.jpg', '0', '新手入门，简单易懂', '60');
INSERT INTO `godz_video` VALUES ('140', '65', '49', ' 	C++的应用', '90.00', '2015-12-18/567377cc89544.png', '0', '新手入门，简单易懂', '64');
INSERT INTO `godz_video` VALUES ('141', '65', '46', ' 	C++的应用', '43.00', '2015-12-18/567377eacdfe6.jpg', '0', '新手入门，简单易懂', '64');
INSERT INTO `godz_video` VALUES ('142', '65', '45', ' 	C++的应用', '65.00', '2015-12-18/567378032dc6c.jpg', '0', '新手入门，简单易懂', '64');
INSERT INTO `godz_video` VALUES ('143', '65', '45', '30分钟学会制作H5', '23.00', '2015-12-18/56737ca7487ab.jpg', '0', '新手入门，简单易懂', '64');
INSERT INTO `godz_video` VALUES ('144', '65', '49', ' 	30分钟学会制作H5', '55.00', '2015-12-18/567385710b71b.jpg', '0', '新手入门，简单易懂', '64');
INSERT INTO `godz_video` VALUES ('145', '65', '45', ' 	30分钟学会制作H5', '66.00', '2015-12-18/56738588ec82e.jpg', '0', '新手入门，简单易懂', '64');
INSERT INTO `godz_video` VALUES ('146', '62', '47', ' 	30分钟学会制作H5', '0.00', '2015-12-18/567385ba487ab.png', '0', '新手入门，简单易懂', '60');
INSERT INTO `godz_video` VALUES ('147', '62', '49', ' 	30分钟学会制作H5', '6.00', '2015-12-18/567385cf501bd.jpg', '0', '新手入门，简单易懂', '60');
INSERT INTO `godz_video` VALUES ('148', '62', '45', ' 	30分钟学会制作H5', '8.00', '2015-12-18/567385e6ca2dd.jpg', '0', '新手入门，简单易懂', '60');
INSERT INTO `godz_video` VALUES ('149', '63', '46', ' 	30分钟学会制作H5', '0.00', '2015-12-18/5673867f81b32.png', '0', '新手入门，简单易懂', '60');
INSERT INTO `godz_video` VALUES ('150', '63', '45', ' 	30分钟学会制作H5', '6.00', '2015-12-18/567386903d090.png', '0', '新手入门，简单易懂', '60');
INSERT INTO `godz_video` VALUES ('151', '63', '49', '21', '0.00', '2015-12-18/567386a08d24d.jpg', '0', '新手入门，简单易懂', '60');
INSERT INTO `godz_video` VALUES ('152', '63', '45', ' 	30分钟学会制作H5', '0.00', '2015-12-18/567386ae44aa2.jpg', '0', '新手入门，简单易懂', '60');
INSERT INTO `godz_video` VALUES ('153', '63', '49', ' 	30分钟学会制作H5', '4.00', '2015-12-18/567386c5ec82e.jpg', '0', '新手入门，简单易懂', '60');
INSERT INTO `godz_video` VALUES ('154', '61', '46', '30分钟学会制作H5', '2.00', '2015-12-18/567388c6cdfe6.png', '0', '新手入门，简单易懂', '60');
INSERT INTO `godz_video` VALUES ('155', '65', '45', 'style=&quot;color:red;font-size:20px&quot;', '0.00', '2015-12-18/567388eea037a.png', '0', '新手入门，简单易懂', '64');
INSERT INTO `godz_video` VALUES ('156', '65', '45', '30分钟学会制作H5', '0.00', '2015-12-18/56738909501bd.jpg', '0', '新手入门，简单易懂', '64');
INSERT INTO `godz_video` VALUES ('157', '65', '49', '30分钟学会制作H5', '5.00', '2015-12-18/5673891ae1113.jpg', '0', '新手入门，简单易懂', '64');
INSERT INTO `godz_video` VALUES ('158', '62', '46', '30分钟学会制作H5', '0.00', '2015-12-18/5673895d57bcf.png', '0', '新手入门，简单易懂', '60');
INSERT INTO `godz_video` VALUES ('159', '62', '45', '30分钟学会制作H5', '8.00', '2015-12-18/5673896bf0537.jpg', '0', '新手入门，简单易懂', '60');
INSERT INTO `godz_video` VALUES ('160', '62', '45', '30分钟学会制作H5', '0.00', '2015-12-18/567389784c4b4.jpg', '0', '新手入门，简单易懂', '60');
INSERT INTO `godz_video` VALUES ('161', '62', '45', '30分钟学会制作H5', '34.00', '2015-12-18/56738984bebc2.jpg', '0', '新手入门，简单易懂', '60');
INSERT INTO `godz_video` VALUES ('162', '63', '46', '30分钟学会制作H5', '0.00', '2015-12-18/567389920b71b.jpg', '0', '新手入门，简单易懂', '60');
INSERT INTO `godz_video` VALUES ('163', '63', '49', '30分钟学会制作H5', '44.00', '2015-12-18/567389a481b32.jpg', '0', '新手入门，简单易懂', '60');
INSERT INTO `godz_video` VALUES ('164', '63', '49', '30分钟学会制作H5', '0.00', '2015-12-18/567389ae07a12.jpg', '1', '新手入门，简单易懂', '60');
INSERT INTO `godz_video` VALUES ('165', '63', '47', '30分钟学会制作H5', '66.00', '2015-12-18/567389ba7a120.jpg', '5', '新手入门，简单易懂', '60');
INSERT INTO `godz_video` VALUES ('166', '73', '45', '零基础快速上手', '0.00', '2015-12-18/56738a695f5e1.jpg', '0', '新手入门，简单易懂', '72');
INSERT INTO `godz_video` VALUES ('167', '73', '45', '零基础快速上手', '1.00', '2015-12-18/56738a94d9701.png', '0', '新手入门，简单易懂', '72');
INSERT INTO `godz_video` VALUES ('168', '73', '45', '零基础快速上手', '0.00', '2015-12-18/56738aa922551.png', '0', '新手入门，简单易懂', '72');
INSERT INTO `godz_video` VALUES ('169', '74', '46', '零基础快速上手', '22.00', '2015-12-18/56738ab6e4e1c.jpg', '0', '新手入门，简单易懂', '72');
INSERT INTO `godz_video` VALUES ('170', '74', '45', '零基础快速上手', '0.00', '2015-12-18/56738ac95f5e1.jpg', '0', '新手入门，简单易懂', '72');
INSERT INTO `godz_video` VALUES ('171', '74', '45', '零基础快速上手', '66.00', '2015-12-18/56738ad966ff3.jpg', '0', '新手入门，简单易懂', '72');
INSERT INTO `godz_video` VALUES ('172', '75', '46', '零基础快速上手', '21.00', '2015-12-18/56738aed90f56.jpg', '0', '新手入门，简单易懂', '72');
INSERT INTO `godz_video` VALUES ('173', '75', '45', '零基础快速上手', '8.00', '2015-12-18/56738af8af79e.jpg', '0', '新手入门，简单易懂', '72');
INSERT INTO `godz_video` VALUES ('174', '75', '47', '零基础快速上手', '0.00', '2015-12-18/56738b0303d09.jpg', '0', '新手入门，简单易懂', '72');
INSERT INTO `godz_video` VALUES ('179', '63', '45', '11', '11.00', '2015-12-22/5678e808af79e.png', '2', '新手入门，简单易懂', '60');
INSERT INTO `godz_video` VALUES ('185', '66', '46', '测试', '11.00', '2016-10-08/57f90ffe1c5f2.jpg', '0', '新手入门，简单易懂', '64');
