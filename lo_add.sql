/*
Navicat MySQL Data Transfer

Source Server         : qdm190234501_db
Source Server Version : 50173
Source Host           : qdm190234501.my3w.com:3306
Source Database       : qdm190234501_db

Target Server Type    : MYSQL
Target Server Version : 50173
File Encoding         : 65001

Date: 2018-11-28 11:49:20
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `lo_add`
-- ----------------------------
DROP TABLE IF EXISTS `lo_add`;
CREATE TABLE `lo_add` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `addname` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `inf` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `peo` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `tel` varchar(11) DEFAULT NULL,
  `lng` varchar(20) DEFAULT NULL,
  `lat` varchar(200) DEFAULT NULL COMMENT '可空',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of lo_add
-- ----------------------------
INSERT INTO `lo_add` VALUES ('26', 'zhang12311', '黑龙江省大庆市让胡路区', '大庆师范学院10舍', '张博文', '18246164589', '124.868949', '46.646772');
INSERT INTO `lo_add` VALUES ('28', '13796639782', '黑龙江省哈尔滨市松北区世纪大道1号', '一单元101', '刘硕', '17645851931', '126.541615', '45.808826');
INSERT INTO `lo_add` VALUES ('29', '15776548173', '黑龙江省大庆市让胡路区', '大庆师范', '刘硕', '15776547681', '124.868949', '46.646772');
INSERT INTO `lo_add` VALUES ('30', '18246164589', '黑龙江省哈尔滨市道里区斯大林街', '防洪纪念塔', '张博文', '18246164589', '126.62346', '45.78685');
INSERT INTO `lo_add` VALUES ('31', '15776548173', '黑龙江省大庆市萨尔图区', '1001', '杨洋', '17645851931', '125.051056', '46.602647');
INSERT INTO `lo_add` VALUES ('32', '15776548173', '黑龙江省大庆市萨尔图区世纪大道辅路', '220', '一一', '13145678765', '125.036826', '46.608588');
INSERT INTO `lo_add` VALUES ('33', 'zhang12311', '黑龙江省哈尔滨市道里区斯大林街', '旁边', '孙悟空', '18246164589', '126.62346', '45.78685');
INSERT INTO `lo_add` VALUES ('34', 'zhang12311', '点击此处选择您的位置', '计算机楼', '唐珑铭', '1814697008', '', '');

-- ----------------------------
-- Table structure for `lo_admin`
-- ----------------------------
DROP TABLE IF EXISTS `lo_admin`;
CREATE TABLE `lo_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `pwd` varchar(255) DEFAULT NULL,
  `grade` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of lo_admin
-- ----------------------------
INSERT INTO `lo_admin` VALUES ('1', 'admin', 'admin', null);
INSERT INTO `lo_admin` VALUES ('11', 'dasdas', '1111', '1,2');
INSERT INTO `lo_admin` VALUES ('12', 'zhang', 'zhang', '1,2,3,4,5,22,6,7,8,10,11,12,13,14,15,16,17,18,19,20,21,23,24');
INSERT INTO `lo_admin` VALUES ('14', 'zhuifengzhe', 'zfz666666', '');
INSERT INTO `lo_admin` VALUES ('15', 'aaa', '11111', '1');

-- ----------------------------
-- Table structure for `lo_adminsss`
-- ----------------------------
DROP TABLE IF EXISTS `lo_adminsss`;
CREATE TABLE `lo_adminsss` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL COMMENT '账号',
  `password` varchar(255) DEFAULT NULL COMMENT '密码',
  `level_s` varchar(255) DEFAULT NULL,
  `createtime` datetime NOT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=utf8 COMMENT='理员管表';

-- ----------------------------
-- Records of lo_adminsss
-- ----------------------------
INSERT INTO `lo_adminsss` VALUES ('1', 'yangguanyu', '0f3da0c70ae7c1af8b1a2f49479e8cfb', '1', '2013-07-05 10:10:51');
INSERT INTO `lo_adminsss` VALUES ('2', 'gys007', 'cd7fd1517e323f26c6f1b0b6b96e3b3d', '1', '2013-07-05 10:11:11');
INSERT INTO `lo_adminsss` VALUES ('3', '杜维民', '3d2f8900f2e49c02b481c2f717aa9020', '2', '2013-07-05 10:11:34');
INSERT INTO `lo_adminsss` VALUES ('4', '王勃', '28c8edde3d61a0411511d3b1866f0636', '2', '2013-07-05 10:12:02');
INSERT INTO `lo_adminsss` VALUES ('5', '张耀军', '28c8edde3d61a0411511d3b1866f0636', '2', '2013-07-05 10:12:24');
INSERT INTO `lo_adminsss` VALUES ('6', '韩非', '28c8edde3d61a0411511d3b1866f0636', '2', '2013-07-05 10:14:01');
INSERT INTO `lo_adminsss` VALUES ('7', '张冲', '28c8edde3d61a0411511d3b1866f0636', '3,7', '2013-07-05 10:19:53');
INSERT INTO `lo_adminsss` VALUES ('8', '于韬', '28c8edde3d61a0411511d3b1866f0636', '3,7', '2013-07-05 11:05:00');
INSERT INTO `lo_adminsss` VALUES ('9', '冯建春', '28c8edde3d61a0411511d3b1866f0636', '4,8', '2013-07-05 11:06:58');
INSERT INTO `lo_adminsss` VALUES ('10', '刘洪涛', '28c8edde3d61a0411511d3b1866f0636', '4,8', '2013-07-05 11:07:56');
INSERT INTO `lo_adminsss` VALUES ('11', '宣大宇', '28c8edde3d61a0411511d3b1866f0636', '5,9', '2013-07-05 11:09:31');
INSERT INTO `lo_adminsss` VALUES ('12', '白洁', '28c8edde3d61a0411511d3b1866f0636', '5,9', '2013-07-05 11:09:55');
INSERT INTO `lo_adminsss` VALUES ('13', '鞠复双', '28c8edde3d61a0411511d3b1866f0636', '6,10', '2013-07-05 11:10:18');
INSERT INTO `lo_adminsss` VALUES ('14', '林晓静', '28c8edde3d61a0411511d3b1866f0636', '6,10', '2013-07-05 11:10:38');
INSERT INTO `lo_adminsss` VALUES ('15', '张旭辉', '28c8edde3d61a0411511d3b1866f0636', '11,22', '2013-07-05 11:11:59');
INSERT INTO `lo_adminsss` VALUES ('16', '闻世龙', '28c8edde3d61a0411511d3b1866f0636', '11,22', '2013-07-05 11:16:10');
INSERT INTO `lo_adminsss` VALUES ('17', '胡柏玲', '28c8edde3d61a0411511d3b1866f0636', '11,22', '2013-07-05 11:16:36');
INSERT INTO `lo_adminsss` VALUES ('18', '方秀娟', '28c8edde3d61a0411511d3b1866f0636', '11,22', '2013-07-05 11:26:35');
INSERT INTO `lo_adminsss` VALUES ('19', '杨佰龙', '28c8edde3d61a0411511d3b1866f0636', '12,22', '2013-07-05 11:27:02');
INSERT INTO `lo_adminsss` VALUES ('20', '王桂丽', '28c8edde3d61a0411511d3b1866f0636', '12,22', '2013-07-05 11:41:44');
INSERT INTO `lo_adminsss` VALUES ('21', '王 辉', '28c8edde3d61a0411511d3b1866f0636', '12,22', '2013-07-05 11:42:39');
INSERT INTO `lo_adminsss` VALUES ('22', '宋淑玲', '28c8edde3d61a0411511d3b1866f0636', '12,22', '2013-07-05 11:42:58');
INSERT INTO `lo_adminsss` VALUES ('23', '赵铁军', '28c8edde3d61a0411511d3b1866f0636', '13,22', '2013-07-05 11:43:30');
INSERT INTO `lo_adminsss` VALUES ('24', '常淑云', '28c8edde3d61a0411511d3b1866f0636', '13,22', '2013-07-05 11:44:16');
INSERT INTO `lo_adminsss` VALUES ('25', '门艳霞', '28c8edde3d61a0411511d3b1866f0636', '13,22', '2013-07-05 11:44:36');
INSERT INTO `lo_adminsss` VALUES ('26', '王星婵', '28c8edde3d61a0411511d3b1866f0636', '13,22', '2013-07-05 11:44:55');
INSERT INTO `lo_adminsss` VALUES ('27', '于浩', '28c8edde3d61a0411511d3b1866f0636', '14,22', '2013-07-05 11:45:15');
INSERT INTO `lo_adminsss` VALUES ('28', '陶占龙', '28c8edde3d61a0411511d3b1866f0636', '14,22', '2013-07-05 11:45:28');
INSERT INTO `lo_adminsss` VALUES ('29', '许世丽', '28c8edde3d61a0411511d3b1866f0636', '14,22', '2013-07-05 11:45:40');
INSERT INTO `lo_adminsss` VALUES ('30', '周晓慧', '28c8edde3d61a0411511d3b1866f0636', '14,22', '2013-07-05 11:45:56');
INSERT INTO `lo_adminsss` VALUES ('31', '王滨华', '28c8edde3d61a0411511d3b1866f0636', '15,22', '2013-07-05 11:46:10');
INSERT INTO `lo_adminsss` VALUES ('32', '田湘毓', '28c8edde3d61a0411511d3b1866f0636', '15,22', '2013-07-05 11:46:22');
INSERT INTO `lo_adminsss` VALUES ('33', '刘佩兰', '28c8edde3d61a0411511d3b1866f0636', '15,22', '2013-07-05 11:46:42');
INSERT INTO `lo_adminsss` VALUES ('34', '王晓莉', '28c8edde3d61a0411511d3b1866f0636', '15,22', '2013-07-05 11:46:58');
INSERT INTO `lo_adminsss` VALUES ('35', '王润峰', '28c8edde3d61a0411511d3b1866f0636', '16,22', '2013-07-05 11:47:34');
INSERT INTO `lo_adminsss` VALUES ('36', '赵洪志', '28c8edde3d61a0411511d3b1866f0636', '16,22', '2013-07-05 11:47:57');
INSERT INTO `lo_adminsss` VALUES ('37', '张铁岩', '28c8edde3d61a0411511d3b1866f0636', '16,22', '2013-07-05 11:48:19');
INSERT INTO `lo_adminsss` VALUES ('38', '朱云峰', '28c8edde3d61a0411511d3b1866f0636', '16,22', '2013-07-05 11:48:30');
INSERT INTO `lo_adminsss` VALUES ('39', '丁国盛', '28c8edde3d61a0411511d3b1866f0636', '16,22', '2013-07-05 11:48:41');
INSERT INTO `lo_adminsss` VALUES ('40', '赵彦波', '28c8edde3d61a0411511d3b1866f0636', '16,22', '2013-07-05 11:48:51');
INSERT INTO `lo_adminsss` VALUES ('41', '栾大为', '28c8edde3d61a0411511d3b1866f0636', '15,22', '2013-07-05 11:49:00');
INSERT INTO `lo_adminsss` VALUES ('42', '杜跃鹏', '28c8edde3d61a0411511d3b1866f0636', '16,22', '2013-07-05 11:49:13');
INSERT INTO `lo_adminsss` VALUES ('43', '冯爱军', '28c8edde3d61a0411511d3b1866f0636', '16,22', '2013-07-05 11:49:27');
INSERT INTO `lo_adminsss` VALUES ('44', '丛建国', '28c8edde3d61a0411511d3b1866f0636', '16,22', '2013-07-05 11:49:38');
INSERT INTO `lo_adminsss` VALUES ('45', '陈治颖', '28c8edde3d61a0411511d3b1866f0636', '16,22', '2013-07-05 11:49:55');
INSERT INTO `lo_adminsss` VALUES ('46', '王立英', '28c8edde3d61a0411511d3b1866f0636', '16,22', '2013-07-05 11:50:07');
INSERT INTO `lo_adminsss` VALUES ('47', '邹灵慧', '28c8edde3d61a0411511d3b1866f0636', '16,22', '2013-07-05 11:50:24');
INSERT INTO `lo_adminsss` VALUES ('48', '张心媛', '28c8edde3d61a0411511d3b1866f0636', '16,22', '2013-07-05 11:51:16');
INSERT INTO `lo_adminsss` VALUES ('49', '刘淑清', '28c8edde3d61a0411511d3b1866f0636', '16,22', '2013-07-05 11:51:30');
INSERT INTO `lo_adminsss` VALUES ('50', '李蓉辉', '28c8edde3d61a0411511d3b1866f0636', '16,22', '2013-07-05 11:51:40');
INSERT INTO `lo_adminsss` VALUES ('51', '陈长青', '28c8edde3d61a0411511d3b1866f0636', '17,23', '2013-07-05 11:52:44');
INSERT INTO `lo_adminsss` VALUES ('52', '韦 晶', '28c8edde3d61a0411511d3b1866f0636', '17,23', '2013-07-05 11:52:57');
INSERT INTO `lo_adminsss` VALUES ('53', '徐艳玲', '28c8edde3d61a0411511d3b1866f0636', '17,23', '2013-07-05 11:53:11');
INSERT INTO `lo_adminsss` VALUES ('54', '刘玉萍', '28c8edde3d61a0411511d3b1866f0636', '17,23', '2013-07-05 11:53:21');
INSERT INTO `lo_adminsss` VALUES ('55', '王宏宇', '28c8edde3d61a0411511d3b1866f0636', '17,23', '2013-07-05 11:53:32');
INSERT INTO `lo_adminsss` VALUES ('56', '尤 丽', '28c8edde3d61a0411511d3b1866f0636', '17,23', '2013-07-05 11:53:51');
INSERT INTO `lo_adminsss` VALUES ('57', '徐艳华', '28c8edde3d61a0411511d3b1866f0636', '17,23', '2013-07-05 11:54:06');
INSERT INTO `lo_adminsss` VALUES ('58', '田悦颖', '28c8edde3d61a0411511d3b1866f0636', '17,23', '2013-07-05 11:54:16');
INSERT INTO `lo_adminsss` VALUES ('59', '刘 爽', '28c8edde3d61a0411511d3b1866f0636', '17,23', '2013-07-05 11:54:33');
INSERT INTO `lo_adminsss` VALUES ('60', '张东玉', '28c8edde3d61a0411511d3b1866f0636', '17,23', '2013-07-05 11:54:48');
INSERT INTO `lo_adminsss` VALUES ('61', '范治刚', '28c8edde3d61a0411511d3b1866f0636', '17,23', '2013-07-05 11:55:03');
INSERT INTO `lo_adminsss` VALUES ('62', '于秀荣', '28c8edde3d61a0411511d3b1866f0636', '17,23', '2013-07-05 11:55:17');
INSERT INTO `lo_adminsss` VALUES ('63', '常中', '28c8edde3d61a0411511d3b1866f0636', '18', '2013-07-05 11:55:36');
INSERT INTO `lo_adminsss` VALUES ('64', '王云灵', '28c8edde3d61a0411511d3b1866f0636', '18', '2013-07-05 11:55:55');
INSERT INTO `lo_adminsss` VALUES ('65', '宣大宇1', '28c8edde3d61a0411511d3b1866f0636', '2', '2013-07-19 08:01:31');

-- ----------------------------
-- Table structure for `lo_areas`
-- ----------------------------
DROP TABLE IF EXISTS `lo_areas`;
CREATE TABLE `lo_areas` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `pid` smallint(6) NOT NULL DEFAULT '0',
  `level` tinyint(1) NOT NULL DEFAULT '1',
  `name` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1943 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of lo_areas
-- ----------------------------
INSERT INTO `lo_areas` VALUES ('1', '0', '1', '北京');
INSERT INTO `lo_areas` VALUES ('2', '0', '1', '天津');
INSERT INTO `lo_areas` VALUES ('3', '0', '1', '河北');
INSERT INTO `lo_areas` VALUES ('4', '0', '1', '山西');
INSERT INTO `lo_areas` VALUES ('5', '0', '1', '内蒙古');
INSERT INTO `lo_areas` VALUES ('6', '0', '1', '辽宁');
INSERT INTO `lo_areas` VALUES ('7', '0', '1', '吉林');
INSERT INTO `lo_areas` VALUES ('8', '0', '1', '黑龙江');
INSERT INTO `lo_areas` VALUES ('9', '0', '1', '上海');
INSERT INTO `lo_areas` VALUES ('10', '0', '1', '江苏');
INSERT INTO `lo_areas` VALUES ('11', '0', '1', '浙江');
INSERT INTO `lo_areas` VALUES ('12', '0', '1', '安徽');
INSERT INTO `lo_areas` VALUES ('13', '0', '1', '福建');
INSERT INTO `lo_areas` VALUES ('14', '0', '1', '江西');
INSERT INTO `lo_areas` VALUES ('15', '0', '1', '山东');
INSERT INTO `lo_areas` VALUES ('16', '0', '1', '河南');
INSERT INTO `lo_areas` VALUES ('17', '0', '1', '湖北');
INSERT INTO `lo_areas` VALUES ('18', '0', '1', '湖南');
INSERT INTO `lo_areas` VALUES ('19', '0', '1', '广东');
INSERT INTO `lo_areas` VALUES ('20', '0', '1', '广西');
INSERT INTO `lo_areas` VALUES ('21', '0', '1', '海南');
INSERT INTO `lo_areas` VALUES ('22', '0', '1', '重庆');
INSERT INTO `lo_areas` VALUES ('23', '0', '1', '四川');
INSERT INTO `lo_areas` VALUES ('24', '0', '1', '贵州');
INSERT INTO `lo_areas` VALUES ('25', '0', '1', '云南');
INSERT INTO `lo_areas` VALUES ('26', '0', '1', '西藏');
INSERT INTO `lo_areas` VALUES ('27', '0', '1', '陕西');
INSERT INTO `lo_areas` VALUES ('28', '0', '1', '甘肃');
INSERT INTO `lo_areas` VALUES ('29', '0', '1', '青海');
INSERT INTO `lo_areas` VALUES ('30', '0', '1', '宁夏');
INSERT INTO `lo_areas` VALUES ('31', '0', '1', '新疆');
INSERT INTO `lo_areas` VALUES ('32', '0', '1', '台湾');
INSERT INTO `lo_areas` VALUES ('33', '0', '1', '香港');
INSERT INTO `lo_areas` VALUES ('34', '0', '1', '澳门');
INSERT INTO `lo_areas` VALUES ('35', '1', '2', '市辖区');
INSERT INTO `lo_areas` VALUES ('36', '1', '2', '县');
INSERT INTO `lo_areas` VALUES ('37', '2', '2', '市辖区');
INSERT INTO `lo_areas` VALUES ('38', '2', '2', '县');
INSERT INTO `lo_areas` VALUES ('39', '3', '2', '石家庄市');
INSERT INTO `lo_areas` VALUES ('40', '3', '2', '唐山市');
INSERT INTO `lo_areas` VALUES ('41', '3', '2', '秦皇岛市');
INSERT INTO `lo_areas` VALUES ('42', '3', '2', '邯郸市');
INSERT INTO `lo_areas` VALUES ('43', '3', '2', '邢台市');
INSERT INTO `lo_areas` VALUES ('44', '3', '2', '保定市');
INSERT INTO `lo_areas` VALUES ('45', '3', '2', '张家口市');
INSERT INTO `lo_areas` VALUES ('46', '3', '2', '承德市');
INSERT INTO `lo_areas` VALUES ('47', '3', '2', '沧州市');
INSERT INTO `lo_areas` VALUES ('48', '3', '2', '廊坊市');
INSERT INTO `lo_areas` VALUES ('49', '3', '2', '衡水市');
INSERT INTO `lo_areas` VALUES ('50', '4', '2', '太原市');
INSERT INTO `lo_areas` VALUES ('51', '4', '2', '大同市');
INSERT INTO `lo_areas` VALUES ('52', '4', '2', '阳泉市');
INSERT INTO `lo_areas` VALUES ('53', '4', '2', '长治市');
INSERT INTO `lo_areas` VALUES ('54', '4', '2', '晋城市');
INSERT INTO `lo_areas` VALUES ('55', '4', '2', '朔州市');
INSERT INTO `lo_areas` VALUES ('56', '4', '2', '晋中市');
INSERT INTO `lo_areas` VALUES ('57', '4', '2', '运城市');
INSERT INTO `lo_areas` VALUES ('58', '4', '2', '忻州市');
INSERT INTO `lo_areas` VALUES ('59', '4', '2', '临汾市');
INSERT INTO `lo_areas` VALUES ('60', '4', '2', '吕梁市');
INSERT INTO `lo_areas` VALUES ('61', '5', '2', '呼和浩特市');
INSERT INTO `lo_areas` VALUES ('62', '5', '2', '包头市');
INSERT INTO `lo_areas` VALUES ('63', '5', '2', '乌海市');
INSERT INTO `lo_areas` VALUES ('64', '5', '2', '赤峰市');
INSERT INTO `lo_areas` VALUES ('65', '5', '2', '通辽市');
INSERT INTO `lo_areas` VALUES ('66', '5', '2', '鄂尔多斯市');
INSERT INTO `lo_areas` VALUES ('67', '5', '2', '呼伦贝尔市');
INSERT INTO `lo_areas` VALUES ('68', '5', '2', '巴彦淖尔市');
INSERT INTO `lo_areas` VALUES ('69', '5', '2', '乌兰察布市');
INSERT INTO `lo_areas` VALUES ('70', '5', '2', '兴安盟');
INSERT INTO `lo_areas` VALUES ('71', '5', '2', '锡林郭勒盟');
INSERT INTO `lo_areas` VALUES ('72', '5', '2', '阿拉善盟');
INSERT INTO `lo_areas` VALUES ('73', '6', '2', '沈阳市');
INSERT INTO `lo_areas` VALUES ('74', '6', '2', '大连市');
INSERT INTO `lo_areas` VALUES ('75', '6', '2', '鞍山市');
INSERT INTO `lo_areas` VALUES ('76', '6', '2', '抚顺市');
INSERT INTO `lo_areas` VALUES ('77', '6', '2', '本溪市');
INSERT INTO `lo_areas` VALUES ('78', '6', '2', '丹东市');
INSERT INTO `lo_areas` VALUES ('79', '6', '2', '锦州市');
INSERT INTO `lo_areas` VALUES ('80', '6', '2', '营口市');
INSERT INTO `lo_areas` VALUES ('81', '6', '2', '阜新市');
INSERT INTO `lo_areas` VALUES ('82', '6', '2', '辽阳市');
INSERT INTO `lo_areas` VALUES ('83', '6', '2', '盘锦市');
INSERT INTO `lo_areas` VALUES ('84', '6', '2', '铁岭市');
INSERT INTO `lo_areas` VALUES ('85', '6', '2', '朝阳市');
INSERT INTO `lo_areas` VALUES ('86', '6', '2', '葫芦岛市');
INSERT INTO `lo_areas` VALUES ('87', '7', '2', '长春市');
INSERT INTO `lo_areas` VALUES ('88', '7', '2', '吉林市');
INSERT INTO `lo_areas` VALUES ('89', '7', '2', '四平市');
INSERT INTO `lo_areas` VALUES ('90', '7', '2', '辽源市');
INSERT INTO `lo_areas` VALUES ('91', '7', '2', '通化市');
INSERT INTO `lo_areas` VALUES ('92', '7', '2', '白山市');
INSERT INTO `lo_areas` VALUES ('93', '7', '2', '松原市');
INSERT INTO `lo_areas` VALUES ('94', '7', '2', '白城市');
INSERT INTO `lo_areas` VALUES ('95', '7', '2', '延边朝鲜族自治州');
INSERT INTO `lo_areas` VALUES ('96', '8', '2', '哈尔滨市');
INSERT INTO `lo_areas` VALUES ('97', '8', '2', '齐齐哈尔市');
INSERT INTO `lo_areas` VALUES ('98', '8', '2', '鸡西市');
INSERT INTO `lo_areas` VALUES ('99', '8', '2', '鹤岗市');
INSERT INTO `lo_areas` VALUES ('100', '8', '2', '双鸭山市');
INSERT INTO `lo_areas` VALUES ('101', '8', '2', '大庆市');
INSERT INTO `lo_areas` VALUES ('102', '8', '2', '伊春市');
INSERT INTO `lo_areas` VALUES ('103', '8', '2', '佳木斯市');
INSERT INTO `lo_areas` VALUES ('104', '8', '2', '七台河市');
INSERT INTO `lo_areas` VALUES ('105', '8', '2', '牡丹江市');
INSERT INTO `lo_areas` VALUES ('106', '8', '2', '黑河市');
INSERT INTO `lo_areas` VALUES ('107', '8', '2', '绥化市');
INSERT INTO `lo_areas` VALUES ('108', '8', '2', '大兴安岭地区');
INSERT INTO `lo_areas` VALUES ('109', '9', '2', '市辖区');
INSERT INTO `lo_areas` VALUES ('110', '9', '2', '县');
INSERT INTO `lo_areas` VALUES ('111', '10', '2', '南京市');
INSERT INTO `lo_areas` VALUES ('112', '10', '2', '无锡市');
INSERT INTO `lo_areas` VALUES ('113', '10', '2', '徐州市');
INSERT INTO `lo_areas` VALUES ('114', '10', '2', '常州市');
INSERT INTO `lo_areas` VALUES ('115', '10', '2', '苏州市');
INSERT INTO `lo_areas` VALUES ('116', '10', '2', '南通市');
INSERT INTO `lo_areas` VALUES ('117', '10', '2', '连云港市');
INSERT INTO `lo_areas` VALUES ('118', '10', '2', '淮安市');
INSERT INTO `lo_areas` VALUES ('119', '10', '2', '盐城市');
INSERT INTO `lo_areas` VALUES ('120', '10', '2', '扬州市');
INSERT INTO `lo_areas` VALUES ('121', '10', '2', '镇江市');
INSERT INTO `lo_areas` VALUES ('122', '10', '2', '泰州市');
INSERT INTO `lo_areas` VALUES ('123', '10', '2', '宿迁市');
INSERT INTO `lo_areas` VALUES ('124', '11', '2', '杭州市');
INSERT INTO `lo_areas` VALUES ('125', '11', '2', '宁波市');
INSERT INTO `lo_areas` VALUES ('126', '11', '2', '温州市');
INSERT INTO `lo_areas` VALUES ('127', '11', '2', '嘉兴市');
INSERT INTO `lo_areas` VALUES ('128', '11', '2', '湖州市');
INSERT INTO `lo_areas` VALUES ('129', '11', '2', '绍兴市');
INSERT INTO `lo_areas` VALUES ('130', '11', '2', '金华市');
INSERT INTO `lo_areas` VALUES ('131', '11', '2', '衢州市');
INSERT INTO `lo_areas` VALUES ('132', '11', '2', '舟山市');
INSERT INTO `lo_areas` VALUES ('133', '11', '2', '台州市');
INSERT INTO `lo_areas` VALUES ('134', '11', '2', '丽水市');
INSERT INTO `lo_areas` VALUES ('135', '12', '2', '合肥市');
INSERT INTO `lo_areas` VALUES ('136', '12', '2', '芜湖市');
INSERT INTO `lo_areas` VALUES ('137', '12', '2', '蚌埠市');
INSERT INTO `lo_areas` VALUES ('138', '12', '2', '淮南市');
INSERT INTO `lo_areas` VALUES ('139', '12', '2', '马鞍山市');
INSERT INTO `lo_areas` VALUES ('140', '12', '2', '淮北市');
INSERT INTO `lo_areas` VALUES ('141', '12', '2', '铜陵市');
INSERT INTO `lo_areas` VALUES ('142', '12', '2', '安庆市');
INSERT INTO `lo_areas` VALUES ('143', '12', '2', '黄山市');
INSERT INTO `lo_areas` VALUES ('144', '12', '2', '滁州市');
INSERT INTO `lo_areas` VALUES ('145', '12', '2', '阜阳市');
INSERT INTO `lo_areas` VALUES ('146', '12', '2', '宿州市');
INSERT INTO `lo_areas` VALUES ('147', '12', '2', '巢湖市');
INSERT INTO `lo_areas` VALUES ('148', '12', '2', '六安市');
INSERT INTO `lo_areas` VALUES ('149', '12', '2', '亳州市');
INSERT INTO `lo_areas` VALUES ('150', '12', '2', '池州市');
INSERT INTO `lo_areas` VALUES ('151', '12', '2', '宣城市');
INSERT INTO `lo_areas` VALUES ('152', '13', '2', '福州市');
INSERT INTO `lo_areas` VALUES ('153', '13', '2', '厦门市');
INSERT INTO `lo_areas` VALUES ('154', '13', '2', '莆田市');
INSERT INTO `lo_areas` VALUES ('155', '13', '2', '三明市');
INSERT INTO `lo_areas` VALUES ('156', '13', '2', '泉州市');
INSERT INTO `lo_areas` VALUES ('157', '13', '2', '漳州市');
INSERT INTO `lo_areas` VALUES ('158', '13', '2', '南平市');
INSERT INTO `lo_areas` VALUES ('159', '13', '2', '龙岩市');
INSERT INTO `lo_areas` VALUES ('160', '13', '2', '宁德市');
INSERT INTO `lo_areas` VALUES ('161', '14', '2', '南昌市');
INSERT INTO `lo_areas` VALUES ('162', '14', '2', '景德镇市');
INSERT INTO `lo_areas` VALUES ('163', '14', '2', '萍乡市');
INSERT INTO `lo_areas` VALUES ('164', '14', '2', '九江市');
INSERT INTO `lo_areas` VALUES ('165', '14', '2', '新余市');
INSERT INTO `lo_areas` VALUES ('166', '14', '2', '鹰潭市');
INSERT INTO `lo_areas` VALUES ('167', '14', '2', '赣州市');
INSERT INTO `lo_areas` VALUES ('168', '14', '2', '吉安市');
INSERT INTO `lo_areas` VALUES ('169', '14', '2', '宜春市');
INSERT INTO `lo_areas` VALUES ('170', '14', '2', '抚州市');
INSERT INTO `lo_areas` VALUES ('171', '14', '2', '上饶市');
INSERT INTO `lo_areas` VALUES ('172', '15', '2', '济南市');
INSERT INTO `lo_areas` VALUES ('173', '15', '2', '青岛市');
INSERT INTO `lo_areas` VALUES ('174', '15', '2', '淄博市');
INSERT INTO `lo_areas` VALUES ('175', '15', '2', '枣庄市');
INSERT INTO `lo_areas` VALUES ('176', '15', '2', '东营市');
INSERT INTO `lo_areas` VALUES ('177', '15', '2', '烟台市');
INSERT INTO `lo_areas` VALUES ('178', '15', '2', '潍坊市');
INSERT INTO `lo_areas` VALUES ('179', '15', '2', '济宁市');
INSERT INTO `lo_areas` VALUES ('180', '15', '2', '泰安市');
INSERT INTO `lo_areas` VALUES ('181', '15', '2', '威海市');
INSERT INTO `lo_areas` VALUES ('182', '15', '2', '日照市');
INSERT INTO `lo_areas` VALUES ('183', '15', '2', '莱芜市');
INSERT INTO `lo_areas` VALUES ('184', '15', '2', '临沂市');
INSERT INTO `lo_areas` VALUES ('185', '15', '2', '德州市');
INSERT INTO `lo_areas` VALUES ('186', '15', '2', '聊城市');
INSERT INTO `lo_areas` VALUES ('187', '15', '2', '滨州市');
INSERT INTO `lo_areas` VALUES ('188', '15', '2', '荷泽市');
INSERT INTO `lo_areas` VALUES ('189', '16', '2', '郑州市');
INSERT INTO `lo_areas` VALUES ('190', '16', '2', '开封市');
INSERT INTO `lo_areas` VALUES ('191', '16', '2', '洛阳市');
INSERT INTO `lo_areas` VALUES ('192', '16', '2', '平顶山市');
INSERT INTO `lo_areas` VALUES ('193', '16', '2', '安阳市');
INSERT INTO `lo_areas` VALUES ('194', '16', '2', '鹤壁市');
INSERT INTO `lo_areas` VALUES ('195', '16', '2', '新乡市');
INSERT INTO `lo_areas` VALUES ('196', '16', '2', '焦作市');
INSERT INTO `lo_areas` VALUES ('197', '16', '2', '濮阳市');
INSERT INTO `lo_areas` VALUES ('198', '16', '2', '许昌市');
INSERT INTO `lo_areas` VALUES ('199', '16', '2', '漯河市');
INSERT INTO `lo_areas` VALUES ('200', '16', '2', '三门峡市');
INSERT INTO `lo_areas` VALUES ('201', '16', '2', '南阳市');
INSERT INTO `lo_areas` VALUES ('202', '16', '2', '商丘市');
INSERT INTO `lo_areas` VALUES ('203', '16', '2', '信阳市');
INSERT INTO `lo_areas` VALUES ('204', '16', '2', '周口市');
INSERT INTO `lo_areas` VALUES ('205', '16', '2', '驻马店市');
INSERT INTO `lo_areas` VALUES ('206', '17', '2', '武汉市');
INSERT INTO `lo_areas` VALUES ('207', '17', '2', '黄石市');
INSERT INTO `lo_areas` VALUES ('208', '17', '2', '十堰市');
INSERT INTO `lo_areas` VALUES ('209', '17', '2', '宜昌市');
INSERT INTO `lo_areas` VALUES ('210', '17', '2', '襄樊市');
INSERT INTO `lo_areas` VALUES ('211', '17', '2', '鄂州市');
INSERT INTO `lo_areas` VALUES ('212', '17', '2', '荆门市');
INSERT INTO `lo_areas` VALUES ('213', '17', '2', '孝感市');
INSERT INTO `lo_areas` VALUES ('214', '17', '2', '荆州市');
INSERT INTO `lo_areas` VALUES ('215', '17', '2', '黄冈市');
INSERT INTO `lo_areas` VALUES ('216', '17', '2', '咸宁市');
INSERT INTO `lo_areas` VALUES ('217', '17', '2', '随州市');
INSERT INTO `lo_areas` VALUES ('218', '17', '2', '恩施土家族苗族自治州');
INSERT INTO `lo_areas` VALUES ('219', '17', '2', '省直辖行政单位');
INSERT INTO `lo_areas` VALUES ('220', '18', '2', '长沙市');
INSERT INTO `lo_areas` VALUES ('221', '18', '2', '株洲市');
INSERT INTO `lo_areas` VALUES ('222', '18', '2', '湘潭市');
INSERT INTO `lo_areas` VALUES ('223', '18', '2', '衡阳市');
INSERT INTO `lo_areas` VALUES ('224', '18', '2', '邵阳市');
INSERT INTO `lo_areas` VALUES ('225', '18', '2', '岳阳市');
INSERT INTO `lo_areas` VALUES ('226', '18', '2', '常德市');
INSERT INTO `lo_areas` VALUES ('227', '18', '2', '张家界市');
INSERT INTO `lo_areas` VALUES ('228', '18', '2', '益阳市');
INSERT INTO `lo_areas` VALUES ('229', '18', '2', '郴州市');
INSERT INTO `lo_areas` VALUES ('230', '18', '2', '永州市');
INSERT INTO `lo_areas` VALUES ('231', '18', '2', '怀化市');
INSERT INTO `lo_areas` VALUES ('232', '18', '2', '娄底市');
INSERT INTO `lo_areas` VALUES ('233', '18', '2', '湘西土家族苗族自治州');
INSERT INTO `lo_areas` VALUES ('234', '19', '2', '广州市');
INSERT INTO `lo_areas` VALUES ('235', '19', '2', '韶关市');
INSERT INTO `lo_areas` VALUES ('236', '19', '2', '深圳市');
INSERT INTO `lo_areas` VALUES ('237', '19', '2', '珠海市');
INSERT INTO `lo_areas` VALUES ('238', '19', '2', '汕头市');
INSERT INTO `lo_areas` VALUES ('239', '19', '2', '佛山市');
INSERT INTO `lo_areas` VALUES ('240', '19', '2', '江门市');
INSERT INTO `lo_areas` VALUES ('241', '19', '2', '湛江市');
INSERT INTO `lo_areas` VALUES ('242', '19', '2', '茂名市');
INSERT INTO `lo_areas` VALUES ('243', '19', '2', '肇庆市');
INSERT INTO `lo_areas` VALUES ('244', '19', '2', '惠州市');
INSERT INTO `lo_areas` VALUES ('245', '19', '2', '梅州市');
INSERT INTO `lo_areas` VALUES ('246', '19', '2', '汕尾市');
INSERT INTO `lo_areas` VALUES ('247', '19', '2', '河源市');
INSERT INTO `lo_areas` VALUES ('248', '19', '2', '阳江市');
INSERT INTO `lo_areas` VALUES ('249', '19', '2', '清远市');
INSERT INTO `lo_areas` VALUES ('250', '19', '2', '东莞市');
INSERT INTO `lo_areas` VALUES ('251', '19', '2', '中山市');
INSERT INTO `lo_areas` VALUES ('252', '19', '2', '潮州市');
INSERT INTO `lo_areas` VALUES ('253', '19', '2', '揭阳市');
INSERT INTO `lo_areas` VALUES ('254', '19', '2', '云浮市');
INSERT INTO `lo_areas` VALUES ('255', '20', '2', '南宁市');
INSERT INTO `lo_areas` VALUES ('256', '20', '2', '柳州市');
INSERT INTO `lo_areas` VALUES ('257', '20', '2', '桂林市');
INSERT INTO `lo_areas` VALUES ('258', '20', '2', '梧州市');
INSERT INTO `lo_areas` VALUES ('259', '20', '2', '北海市');
INSERT INTO `lo_areas` VALUES ('260', '20', '2', '防城港市');
INSERT INTO `lo_areas` VALUES ('261', '20', '2', '钦州市');
INSERT INTO `lo_areas` VALUES ('262', '20', '2', '贵港市');
INSERT INTO `lo_areas` VALUES ('263', '20', '2', '玉林市');
INSERT INTO `lo_areas` VALUES ('264', '20', '2', '百色市');
INSERT INTO `lo_areas` VALUES ('265', '20', '2', '贺州市');
INSERT INTO `lo_areas` VALUES ('266', '20', '2', '河池市');
INSERT INTO `lo_areas` VALUES ('267', '20', '2', '来宾市');
INSERT INTO `lo_areas` VALUES ('268', '20', '2', '崇左市');
INSERT INTO `lo_areas` VALUES ('269', '21', '2', '海口市');
INSERT INTO `lo_areas` VALUES ('270', '21', '2', '三亚市');
INSERT INTO `lo_areas` VALUES ('271', '21', '2', '省直辖县级行政单位');
INSERT INTO `lo_areas` VALUES ('272', '22', '2', '市辖区');
INSERT INTO `lo_areas` VALUES ('273', '22', '2', '县');
INSERT INTO `lo_areas` VALUES ('274', '22', '2', '市');
INSERT INTO `lo_areas` VALUES ('275', '23', '2', '成都市');
INSERT INTO `lo_areas` VALUES ('276', '23', '2', '自贡市');
INSERT INTO `lo_areas` VALUES ('277', '23', '2', '攀枝花市');
INSERT INTO `lo_areas` VALUES ('278', '23', '2', '泸州市');
INSERT INTO `lo_areas` VALUES ('279', '23', '2', '德阳市');
INSERT INTO `lo_areas` VALUES ('280', '23', '2', '绵阳市');
INSERT INTO `lo_areas` VALUES ('281', '23', '2', '广元市');
INSERT INTO `lo_areas` VALUES ('282', '23', '2', '遂宁市');
INSERT INTO `lo_areas` VALUES ('283', '23', '2', '内江市');
INSERT INTO `lo_areas` VALUES ('284', '23', '2', '乐山市');
INSERT INTO `lo_areas` VALUES ('285', '23', '2', '南充市');
INSERT INTO `lo_areas` VALUES ('286', '23', '2', '眉山市');
INSERT INTO `lo_areas` VALUES ('287', '23', '2', '宜宾市');
INSERT INTO `lo_areas` VALUES ('288', '23', '2', '广安市');
INSERT INTO `lo_areas` VALUES ('289', '23', '2', '达州市');
INSERT INTO `lo_areas` VALUES ('290', '23', '2', '雅安市');
INSERT INTO `lo_areas` VALUES ('291', '23', '2', '巴中市');
INSERT INTO `lo_areas` VALUES ('292', '23', '2', '资阳市');
INSERT INTO `lo_areas` VALUES ('293', '23', '2', '阿坝藏族羌族自治州');
INSERT INTO `lo_areas` VALUES ('294', '23', '2', '甘孜藏族自治州');
INSERT INTO `lo_areas` VALUES ('295', '23', '2', '凉山彝族自治州');
INSERT INTO `lo_areas` VALUES ('296', '24', '2', '贵阳市');
INSERT INTO `lo_areas` VALUES ('297', '24', '2', '六盘水市');
INSERT INTO `lo_areas` VALUES ('298', '24', '2', '遵义市');
INSERT INTO `lo_areas` VALUES ('299', '24', '2', '安顺市');
INSERT INTO `lo_areas` VALUES ('300', '24', '2', '铜仁地区');
INSERT INTO `lo_areas` VALUES ('301', '24', '2', '黔西南布依族苗族自治州');
INSERT INTO `lo_areas` VALUES ('302', '24', '2', '毕节地区');
INSERT INTO `lo_areas` VALUES ('303', '24', '2', '黔东南苗族侗族自治州');
INSERT INTO `lo_areas` VALUES ('304', '24', '2', '黔南布依族苗族自治州');
INSERT INTO `lo_areas` VALUES ('305', '25', '2', '昆明市');
INSERT INTO `lo_areas` VALUES ('306', '25', '2', '曲靖市');
INSERT INTO `lo_areas` VALUES ('307', '25', '2', '玉溪市');
INSERT INTO `lo_areas` VALUES ('308', '25', '2', '保山市');
INSERT INTO `lo_areas` VALUES ('309', '25', '2', '昭通市');
INSERT INTO `lo_areas` VALUES ('310', '25', '2', '丽江市');
INSERT INTO `lo_areas` VALUES ('311', '25', '2', '思茅市');
INSERT INTO `lo_areas` VALUES ('312', '25', '2', '临沧市');
INSERT INTO `lo_areas` VALUES ('313', '25', '2', '楚雄彝族自治州');
INSERT INTO `lo_areas` VALUES ('314', '25', '2', '红河哈尼族彝族自治州');
INSERT INTO `lo_areas` VALUES ('315', '25', '2', '文山壮族苗族自治州');
INSERT INTO `lo_areas` VALUES ('316', '25', '2', '西双版纳傣族自治州');
INSERT INTO `lo_areas` VALUES ('317', '25', '2', '大理白族自治州');
INSERT INTO `lo_areas` VALUES ('318', '25', '2', '德宏傣族景颇族自治州');
INSERT INTO `lo_areas` VALUES ('319', '25', '2', '怒江傈僳族自治州');
INSERT INTO `lo_areas` VALUES ('320', '25', '2', '迪庆藏族自治州');
INSERT INTO `lo_areas` VALUES ('321', '26', '2', '拉萨市');
INSERT INTO `lo_areas` VALUES ('322', '26', '2', '昌都地区');
INSERT INTO `lo_areas` VALUES ('323', '26', '2', '山南地区');
INSERT INTO `lo_areas` VALUES ('324', '26', '2', '日喀则地区');
INSERT INTO `lo_areas` VALUES ('325', '26', '2', '那曲地区');
INSERT INTO `lo_areas` VALUES ('326', '26', '2', '阿里地区');
INSERT INTO `lo_areas` VALUES ('327', '26', '2', '林芝地区');
INSERT INTO `lo_areas` VALUES ('328', '27', '2', '西安市');
INSERT INTO `lo_areas` VALUES ('329', '27', '2', '铜川市');
INSERT INTO `lo_areas` VALUES ('330', '27', '2', '宝鸡市');
INSERT INTO `lo_areas` VALUES ('331', '27', '2', '咸阳市');
INSERT INTO `lo_areas` VALUES ('332', '27', '2', '渭南市');
INSERT INTO `lo_areas` VALUES ('333', '27', '2', '延安市');
INSERT INTO `lo_areas` VALUES ('334', '27', '2', '汉中市');
INSERT INTO `lo_areas` VALUES ('335', '27', '2', '榆林市');
INSERT INTO `lo_areas` VALUES ('336', '27', '2', '安康市');
INSERT INTO `lo_areas` VALUES ('337', '27', '2', '商洛市');
INSERT INTO `lo_areas` VALUES ('338', '28', '2', '兰州市');
INSERT INTO `lo_areas` VALUES ('339', '28', '2', '嘉峪关市');
INSERT INTO `lo_areas` VALUES ('340', '28', '2', '金昌市');
INSERT INTO `lo_areas` VALUES ('341', '28', '2', '白银市');
INSERT INTO `lo_areas` VALUES ('342', '28', '2', '天水市');
INSERT INTO `lo_areas` VALUES ('343', '28', '2', '武威市');
INSERT INTO `lo_areas` VALUES ('344', '28', '2', '张掖市');
INSERT INTO `lo_areas` VALUES ('345', '28', '2', '平凉市');
INSERT INTO `lo_areas` VALUES ('346', '28', '2', '酒泉市');
INSERT INTO `lo_areas` VALUES ('347', '28', '2', '庆阳市');
INSERT INTO `lo_areas` VALUES ('348', '28', '2', '定西市');
INSERT INTO `lo_areas` VALUES ('349', '28', '2', '陇南市');
INSERT INTO `lo_areas` VALUES ('350', '28', '2', '临夏回族自治州');
INSERT INTO `lo_areas` VALUES ('351', '28', '2', '甘南藏族自治州');
INSERT INTO `lo_areas` VALUES ('352', '29', '2', '西宁市');
INSERT INTO `lo_areas` VALUES ('353', '29', '2', '海东地区');
INSERT INTO `lo_areas` VALUES ('354', '29', '2', '海北藏族自治州');
INSERT INTO `lo_areas` VALUES ('355', '29', '2', '黄南藏族自治州');
INSERT INTO `lo_areas` VALUES ('356', '29', '2', '海南藏族自治州');
INSERT INTO `lo_areas` VALUES ('357', '29', '2', '果洛藏族自治州');
INSERT INTO `lo_areas` VALUES ('358', '29', '2', '玉树藏族自治州');
INSERT INTO `lo_areas` VALUES ('359', '29', '2', '海西蒙古族藏族自治州');
INSERT INTO `lo_areas` VALUES ('360', '30', '2', '银川市');
INSERT INTO `lo_areas` VALUES ('361', '30', '2', '石嘴山市');
INSERT INTO `lo_areas` VALUES ('362', '30', '2', '吴忠市');
INSERT INTO `lo_areas` VALUES ('363', '30', '2', '固原市');
INSERT INTO `lo_areas` VALUES ('364', '30', '2', '中卫市');
INSERT INTO `lo_areas` VALUES ('365', '31', '2', '乌鲁木齐市');
INSERT INTO `lo_areas` VALUES ('366', '31', '2', '克拉玛依市');
INSERT INTO `lo_areas` VALUES ('367', '31', '2', '吐鲁番地区');
INSERT INTO `lo_areas` VALUES ('368', '31', '2', '哈密地区');
INSERT INTO `lo_areas` VALUES ('369', '31', '2', '昌吉回族自治州');
INSERT INTO `lo_areas` VALUES ('370', '31', '2', '博尔塔拉蒙古自治州');
INSERT INTO `lo_areas` VALUES ('371', '31', '2', '巴音郭楞蒙古自治州');
INSERT INTO `lo_areas` VALUES ('372', '31', '2', '阿克苏地区');
INSERT INTO `lo_areas` VALUES ('373', '31', '2', '克孜勒苏柯尔克孜自治州');
INSERT INTO `lo_areas` VALUES ('374', '31', '2', '喀什地区');
INSERT INTO `lo_areas` VALUES ('375', '31', '2', '和田地区');
INSERT INTO `lo_areas` VALUES ('376', '31', '2', '伊犁哈萨克自治州');
INSERT INTO `lo_areas` VALUES ('377', '31', '2', '塔城地区');
INSERT INTO `lo_areas` VALUES ('378', '31', '2', '阿勒泰地区');
INSERT INTO `lo_areas` VALUES ('379', '31', '2', '省直辖行政单位');
INSERT INTO `lo_areas` VALUES ('380', '33', '2', '香港');
INSERT INTO `lo_areas` VALUES ('381', '34', '2', '澳门');
INSERT INTO `lo_areas` VALUES ('382', '32', '2', '台北');
INSERT INTO `lo_areas` VALUES ('383', '32', '2', '高雄');
INSERT INTO `lo_areas` VALUES ('384', '32', '2', '基隆');
INSERT INTO `lo_areas` VALUES ('385', '32', '2', '台中');
INSERT INTO `lo_areas` VALUES ('386', '32', '2', '台南');
INSERT INTO `lo_areas` VALUES ('387', '32', '2', '新竹');
INSERT INTO `lo_areas` VALUES ('388', '32', '2', '嘉义');
INSERT INTO `lo_areas` VALUES ('389', '32', '2', '台北县');
INSERT INTO `lo_areas` VALUES ('390', '32', '2', '宜兰县');
INSERT INTO `lo_areas` VALUES ('391', '32', '2', '桃园县');
INSERT INTO `lo_areas` VALUES ('392', '32', '2', '新竹县');
INSERT INTO `lo_areas` VALUES ('393', '32', '2', '苗栗县');
INSERT INTO `lo_areas` VALUES ('394', '32', '2', '台中县');
INSERT INTO `lo_areas` VALUES ('395', '32', '2', '彰化县');
INSERT INTO `lo_areas` VALUES ('396', '32', '2', '南投县');
INSERT INTO `lo_areas` VALUES ('397', '32', '2', '云林县');
INSERT INTO `lo_areas` VALUES ('398', '32', '2', '嘉义县');
INSERT INTO `lo_areas` VALUES ('399', '32', '2', '台南县');
INSERT INTO `lo_areas` VALUES ('400', '32', '2', '高雄县');
INSERT INTO `lo_areas` VALUES ('401', '32', '2', '屏东县');
INSERT INTO `lo_areas` VALUES ('402', '32', '2', '台东县');
INSERT INTO `lo_areas` VALUES ('403', '32', '2', '花莲县');
INSERT INTO `lo_areas` VALUES ('404', '32', '2', '澎湖县');
INSERT INTO `lo_areas` VALUES ('405', '35', '3', '东城区');
INSERT INTO `lo_areas` VALUES ('406', '35', '3', '西城区');
INSERT INTO `lo_areas` VALUES ('407', '35', '3', '崇文区');
INSERT INTO `lo_areas` VALUES ('408', '35', '3', '宣武区');
INSERT INTO `lo_areas` VALUES ('409', '35', '3', '朝阳区');
INSERT INTO `lo_areas` VALUES ('410', '35', '3', '丰台区');
INSERT INTO `lo_areas` VALUES ('411', '35', '3', '石景山区');
INSERT INTO `lo_areas` VALUES ('412', '35', '3', '海淀区');
INSERT INTO `lo_areas` VALUES ('413', '35', '3', '门头沟区');
INSERT INTO `lo_areas` VALUES ('414', '35', '3', '房山区');
INSERT INTO `lo_areas` VALUES ('415', '35', '3', '通州区');
INSERT INTO `lo_areas` VALUES ('416', '35', '3', '顺义区');
INSERT INTO `lo_areas` VALUES ('417', '35', '3', '昌平区');
INSERT INTO `lo_areas` VALUES ('418', '35', '3', '大兴区');
INSERT INTO `lo_areas` VALUES ('419', '35', '3', '怀柔区');
INSERT INTO `lo_areas` VALUES ('420', '35', '3', '平谷区');
INSERT INTO `lo_areas` VALUES ('421', '36', '3', '密云县');
INSERT INTO `lo_areas` VALUES ('422', '36', '3', '延庆县');
INSERT INTO `lo_areas` VALUES ('423', '37', '3', '和平区');
INSERT INTO `lo_areas` VALUES ('424', '37', '3', '河东区');
INSERT INTO `lo_areas` VALUES ('425', '37', '3', '河西区');
INSERT INTO `lo_areas` VALUES ('426', '37', '3', '南开区');
INSERT INTO `lo_areas` VALUES ('427', '37', '3', '河北区');
INSERT INTO `lo_areas` VALUES ('428', '37', '3', '红桥区');
INSERT INTO `lo_areas` VALUES ('429', '37', '3', '塘沽区');
INSERT INTO `lo_areas` VALUES ('430', '37', '3', '汉沽区');
INSERT INTO `lo_areas` VALUES ('431', '37', '3', '大港区');
INSERT INTO `lo_areas` VALUES ('432', '37', '3', '东丽区');
INSERT INTO `lo_areas` VALUES ('433', '37', '3', '西青区');
INSERT INTO `lo_areas` VALUES ('434', '37', '3', '津南区');
INSERT INTO `lo_areas` VALUES ('435', '37', '3', '北辰区');
INSERT INTO `lo_areas` VALUES ('436', '37', '3', '武清区');
INSERT INTO `lo_areas` VALUES ('437', '37', '3', '宝坻区');
INSERT INTO `lo_areas` VALUES ('438', '38', '3', '宁河县');
INSERT INTO `lo_areas` VALUES ('439', '38', '3', '静海县');
INSERT INTO `lo_areas` VALUES ('440', '38', '3', '蓟县');
INSERT INTO `lo_areas` VALUES ('441', '39', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('442', '39', '3', '长安区');
INSERT INTO `lo_areas` VALUES ('443', '39', '3', '桥东区');
INSERT INTO `lo_areas` VALUES ('444', '39', '3', '桥西区');
INSERT INTO `lo_areas` VALUES ('445', '39', '3', '新华区');
INSERT INTO `lo_areas` VALUES ('446', '39', '3', '井陉矿区');
INSERT INTO `lo_areas` VALUES ('447', '39', '3', '裕华区');
INSERT INTO `lo_areas` VALUES ('448', '39', '3', '井陉县');
INSERT INTO `lo_areas` VALUES ('449', '39', '3', '正定县');
INSERT INTO `lo_areas` VALUES ('450', '39', '3', '栾城县');
INSERT INTO `lo_areas` VALUES ('451', '39', '3', '行唐县');
INSERT INTO `lo_areas` VALUES ('452', '39', '3', '灵寿县');
INSERT INTO `lo_areas` VALUES ('453', '39', '3', '高邑县');
INSERT INTO `lo_areas` VALUES ('454', '39', '3', '深泽县');
INSERT INTO `lo_areas` VALUES ('455', '39', '3', '赞皇县');
INSERT INTO `lo_areas` VALUES ('456', '39', '3', '无极县');
INSERT INTO `lo_areas` VALUES ('457', '39', '3', '平山县');
INSERT INTO `lo_areas` VALUES ('458', '39', '3', '元氏县');
INSERT INTO `lo_areas` VALUES ('459', '39', '3', '赵县');
INSERT INTO `lo_areas` VALUES ('460', '39', '3', '辛集市');
INSERT INTO `lo_areas` VALUES ('461', '39', '3', '藁城市');
INSERT INTO `lo_areas` VALUES ('462', '39', '3', '晋州市');
INSERT INTO `lo_areas` VALUES ('463', '39', '3', '新乐市');
INSERT INTO `lo_areas` VALUES ('464', '39', '3', '鹿泉市');
INSERT INTO `lo_areas` VALUES ('465', '40', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('466', '40', '3', '路南区');
INSERT INTO `lo_areas` VALUES ('467', '40', '3', '路北区');
INSERT INTO `lo_areas` VALUES ('468', '40', '3', '古冶区');
INSERT INTO `lo_areas` VALUES ('469', '40', '3', '开平区');
INSERT INTO `lo_areas` VALUES ('470', '40', '3', '丰南区');
INSERT INTO `lo_areas` VALUES ('471', '40', '3', '丰润区');
INSERT INTO `lo_areas` VALUES ('472', '40', '3', '滦县');
INSERT INTO `lo_areas` VALUES ('473', '40', '3', '滦南县');
INSERT INTO `lo_areas` VALUES ('474', '40', '3', '乐亭县');
INSERT INTO `lo_areas` VALUES ('475', '40', '3', '迁西县');
INSERT INTO `lo_areas` VALUES ('476', '40', '3', '玉田县');
INSERT INTO `lo_areas` VALUES ('477', '40', '3', '唐海县');
INSERT INTO `lo_areas` VALUES ('478', '40', '3', '遵化市');
INSERT INTO `lo_areas` VALUES ('479', '40', '3', '迁安市');
INSERT INTO `lo_areas` VALUES ('480', '41', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('481', '41', '3', '海港区');
INSERT INTO `lo_areas` VALUES ('482', '41', '3', '山海关区');
INSERT INTO `lo_areas` VALUES ('483', '41', '3', '北戴河区');
INSERT INTO `lo_areas` VALUES ('484', '41', '3', '青龙满族自治县');
INSERT INTO `lo_areas` VALUES ('485', '41', '3', '昌黎县');
INSERT INTO `lo_areas` VALUES ('486', '41', '3', '抚宁县');
INSERT INTO `lo_areas` VALUES ('487', '41', '3', '卢龙县');
INSERT INTO `lo_areas` VALUES ('488', '42', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('489', '42', '3', '邯山区');
INSERT INTO `lo_areas` VALUES ('490', '42', '3', '丛台区');
INSERT INTO `lo_areas` VALUES ('491', '42', '3', '复兴区');
INSERT INTO `lo_areas` VALUES ('492', '42', '3', '峰峰矿区');
INSERT INTO `lo_areas` VALUES ('493', '42', '3', '邯郸县');
INSERT INTO `lo_areas` VALUES ('494', '42', '3', '临漳县');
INSERT INTO `lo_areas` VALUES ('495', '42', '3', '成安县');
INSERT INTO `lo_areas` VALUES ('496', '42', '3', '大名县');
INSERT INTO `lo_areas` VALUES ('497', '42', '3', '涉县');
INSERT INTO `lo_areas` VALUES ('498', '42', '3', '磁县');
INSERT INTO `lo_areas` VALUES ('499', '42', '3', '肥乡县');
INSERT INTO `lo_areas` VALUES ('500', '42', '3', '永年县');
INSERT INTO `lo_areas` VALUES ('501', '42', '3', '邱县');
INSERT INTO `lo_areas` VALUES ('502', '42', '3', '鸡泽县');
INSERT INTO `lo_areas` VALUES ('503', '42', '3', '广平县');
INSERT INTO `lo_areas` VALUES ('504', '42', '3', '馆陶县');
INSERT INTO `lo_areas` VALUES ('505', '42', '3', '魏县');
INSERT INTO `lo_areas` VALUES ('506', '42', '3', '曲周县');
INSERT INTO `lo_areas` VALUES ('507', '42', '3', '武安市');
INSERT INTO `lo_areas` VALUES ('508', '43', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('509', '43', '3', '桥东区');
INSERT INTO `lo_areas` VALUES ('510', '43', '3', '桥西区');
INSERT INTO `lo_areas` VALUES ('511', '43', '3', '邢台县');
INSERT INTO `lo_areas` VALUES ('512', '43', '3', '临城县');
INSERT INTO `lo_areas` VALUES ('513', '43', '3', '内丘县');
INSERT INTO `lo_areas` VALUES ('514', '43', '3', '柏乡县');
INSERT INTO `lo_areas` VALUES ('515', '43', '3', '隆尧县');
INSERT INTO `lo_areas` VALUES ('516', '43', '3', '任县');
INSERT INTO `lo_areas` VALUES ('517', '43', '3', '南和县');
INSERT INTO `lo_areas` VALUES ('518', '43', '3', '宁晋县');
INSERT INTO `lo_areas` VALUES ('519', '43', '3', '巨鹿县');
INSERT INTO `lo_areas` VALUES ('520', '43', '3', '新河县');
INSERT INTO `lo_areas` VALUES ('521', '43', '3', '广宗县');
INSERT INTO `lo_areas` VALUES ('522', '43', '3', '平乡县');
INSERT INTO `lo_areas` VALUES ('523', '43', '3', '威县');
INSERT INTO `lo_areas` VALUES ('524', '43', '3', '清河县');
INSERT INTO `lo_areas` VALUES ('525', '43', '3', '临西县');
INSERT INTO `lo_areas` VALUES ('526', '43', '3', '南宫市');
INSERT INTO `lo_areas` VALUES ('527', '43', '3', '沙河市');
INSERT INTO `lo_areas` VALUES ('528', '44', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('529', '44', '3', '新市区');
INSERT INTO `lo_areas` VALUES ('530', '44', '3', '北市区');
INSERT INTO `lo_areas` VALUES ('531', '44', '3', '南市区');
INSERT INTO `lo_areas` VALUES ('532', '44', '3', '满城县');
INSERT INTO `lo_areas` VALUES ('533', '44', '3', '清苑县');
INSERT INTO `lo_areas` VALUES ('534', '44', '3', '涞水县');
INSERT INTO `lo_areas` VALUES ('535', '44', '3', '阜平县');
INSERT INTO `lo_areas` VALUES ('536', '44', '3', '徐水县');
INSERT INTO `lo_areas` VALUES ('537', '44', '3', '定兴县');
INSERT INTO `lo_areas` VALUES ('538', '44', '3', '唐县');
INSERT INTO `lo_areas` VALUES ('539', '44', '3', '高阳县');
INSERT INTO `lo_areas` VALUES ('540', '44', '3', '容城县');
INSERT INTO `lo_areas` VALUES ('541', '44', '3', '涞源县');
INSERT INTO `lo_areas` VALUES ('542', '44', '3', '望都县');
INSERT INTO `lo_areas` VALUES ('543', '44', '3', '安新县');
INSERT INTO `lo_areas` VALUES ('544', '44', '3', '易县');
INSERT INTO `lo_areas` VALUES ('545', '44', '3', '曲阳县');
INSERT INTO `lo_areas` VALUES ('546', '44', '3', '蠡县');
INSERT INTO `lo_areas` VALUES ('547', '44', '3', '顺平县');
INSERT INTO `lo_areas` VALUES ('548', '44', '3', '博野县');
INSERT INTO `lo_areas` VALUES ('549', '44', '3', '雄县');
INSERT INTO `lo_areas` VALUES ('550', '44', '3', '涿州市');
INSERT INTO `lo_areas` VALUES ('551', '44', '3', '定州市');
INSERT INTO `lo_areas` VALUES ('552', '44', '3', '安国市');
INSERT INTO `lo_areas` VALUES ('553', '44', '3', '高碑店');
INSERT INTO `lo_areas` VALUES ('554', '45', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('555', '45', '3', '桥东区');
INSERT INTO `lo_areas` VALUES ('556', '45', '3', '桥西区');
INSERT INTO `lo_areas` VALUES ('557', '45', '3', '宣化区');
INSERT INTO `lo_areas` VALUES ('558', '45', '3', '下花园区');
INSERT INTO `lo_areas` VALUES ('559', '45', '3', '宣化县');
INSERT INTO `lo_areas` VALUES ('560', '45', '3', '张北县');
INSERT INTO `lo_areas` VALUES ('561', '45', '3', '康保县');
INSERT INTO `lo_areas` VALUES ('562', '45', '3', '沽源县');
INSERT INTO `lo_areas` VALUES ('563', '45', '3', '尚义县');
INSERT INTO `lo_areas` VALUES ('564', '45', '3', '蔚县');
INSERT INTO `lo_areas` VALUES ('565', '45', '3', '阳原县');
INSERT INTO `lo_areas` VALUES ('566', '45', '3', '怀安县');
INSERT INTO `lo_areas` VALUES ('567', '45', '3', '万全县');
INSERT INTO `lo_areas` VALUES ('568', '45', '3', '怀来县');
INSERT INTO `lo_areas` VALUES ('569', '45', '3', '涿鹿县');
INSERT INTO `lo_areas` VALUES ('570', '45', '3', '赤城县');
INSERT INTO `lo_areas` VALUES ('571', '45', '3', '崇礼县');
INSERT INTO `lo_areas` VALUES ('572', '46', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('573', '46', '3', '双桥区');
INSERT INTO `lo_areas` VALUES ('574', '46', '3', '双滦区');
INSERT INTO `lo_areas` VALUES ('575', '46', '3', '鹰手营子矿区');
INSERT INTO `lo_areas` VALUES ('576', '46', '3', '承德县');
INSERT INTO `lo_areas` VALUES ('577', '46', '3', '兴隆县');
INSERT INTO `lo_areas` VALUES ('578', '46', '3', '平泉县');
INSERT INTO `lo_areas` VALUES ('579', '46', '3', '滦平县');
INSERT INTO `lo_areas` VALUES ('580', '46', '3', '隆化县');
INSERT INTO `lo_areas` VALUES ('581', '46', '3', '丰宁满族自治县');
INSERT INTO `lo_areas` VALUES ('582', '46', '3', '宽城满族自治县');
INSERT INTO `lo_areas` VALUES ('583', '46', '3', '围场满族蒙古族自治县');
INSERT INTO `lo_areas` VALUES ('588', '46', '3', '承德县');
INSERT INTO `lo_areas` VALUES ('596', '46', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('597', '46', '3', '双桥区');
INSERT INTO `lo_areas` VALUES ('598', '46', '3', '双滦区');
INSERT INTO `lo_areas` VALUES ('599', '46', '3', '鹰手营子矿区');
INSERT INTO `lo_areas` VALUES ('600', '46', '3', '承德县');
INSERT INTO `lo_areas` VALUES ('601', '46', '3', '兴隆县');
INSERT INTO `lo_areas` VALUES ('602', '46', '3', '平泉县');
INSERT INTO `lo_areas` VALUES ('603', '46', '3', '滦平县');
INSERT INTO `lo_areas` VALUES ('604', '46', '3', '隆化县');
INSERT INTO `lo_areas` VALUES ('605', '46', '3', '丰宁满族自治县');
INSERT INTO `lo_areas` VALUES ('606', '46', '3', '宽城满族自治县');
INSERT INTO `lo_areas` VALUES ('607', '46', '3', '围场满族蒙古族自治县');
INSERT INTO `lo_areas` VALUES ('608', '46', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('609', '46', '3', '双桥区');
INSERT INTO `lo_areas` VALUES ('610', '46', '3', '双滦区');
INSERT INTO `lo_areas` VALUES ('611', '46', '3', '鹰手营子矿区');
INSERT INTO `lo_areas` VALUES ('612', '46', '3', '承德县');
INSERT INTO `lo_areas` VALUES ('613', '46', '3', '兴隆县');
INSERT INTO `lo_areas` VALUES ('614', '46', '3', '平泉县');
INSERT INTO `lo_areas` VALUES ('615', '46', '3', '滦平县');
INSERT INTO `lo_areas` VALUES ('616', '46', '3', '隆化县');
INSERT INTO `lo_areas` VALUES ('617', '46', '3', '丰宁满族自治县');
INSERT INTO `lo_areas` VALUES ('618', '46', '3', '宽城满族自治县');
INSERT INTO `lo_areas` VALUES ('619', '46', '3', '围场满族蒙古族自治县');
INSERT INTO `lo_areas` VALUES ('620', '47', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('621', '47', '3', '新华区');
INSERT INTO `lo_areas` VALUES ('622', '47', '3', '运河区');
INSERT INTO `lo_areas` VALUES ('623', '47', '3', '沧县');
INSERT INTO `lo_areas` VALUES ('624', '47', '3', '青县');
INSERT INTO `lo_areas` VALUES ('625', '47', '3', '东光县');
INSERT INTO `lo_areas` VALUES ('626', '47', '3', '海兴县');
INSERT INTO `lo_areas` VALUES ('627', '47', '3', '盐山县');
INSERT INTO `lo_areas` VALUES ('628', '47', '3', '肃宁县');
INSERT INTO `lo_areas` VALUES ('629', '47', '3', '南皮县');
INSERT INTO `lo_areas` VALUES ('630', '47', '3', '吴桥县');
INSERT INTO `lo_areas` VALUES ('631', '47', '3', '献县');
INSERT INTO `lo_areas` VALUES ('632', '47', '3', '孟村回族自治县');
INSERT INTO `lo_areas` VALUES ('633', '47', '3', '泊头市');
INSERT INTO `lo_areas` VALUES ('634', '47', '3', '任丘市');
INSERT INTO `lo_areas` VALUES ('635', '47', '3', '黄骅市');
INSERT INTO `lo_areas` VALUES ('636', '47', '3', '河间市');
INSERT INTO `lo_areas` VALUES ('637', '48', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('638', '48', '3', '安次区');
INSERT INTO `lo_areas` VALUES ('639', '48', '3', '广阳区');
INSERT INTO `lo_areas` VALUES ('640', '48', '3', '固安县');
INSERT INTO `lo_areas` VALUES ('641', '48', '3', '永清县');
INSERT INTO `lo_areas` VALUES ('642', '48', '3', '香河县');
INSERT INTO `lo_areas` VALUES ('643', '48', '3', '大城县');
INSERT INTO `lo_areas` VALUES ('644', '48', '3', '文安县');
INSERT INTO `lo_areas` VALUES ('645', '48', '3', '大厂回族自治县');
INSERT INTO `lo_areas` VALUES ('646', '48', '3', '霸州市');
INSERT INTO `lo_areas` VALUES ('647', '48', '3', '三河市');
INSERT INTO `lo_areas` VALUES ('648', '49', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('649', '49', '3', '桃城区');
INSERT INTO `lo_areas` VALUES ('650', '49', '3', '枣强县');
INSERT INTO `lo_areas` VALUES ('651', '49', '3', '武邑县');
INSERT INTO `lo_areas` VALUES ('652', '49', '3', '武强县');
INSERT INTO `lo_areas` VALUES ('653', '49', '3', '饶阳县');
INSERT INTO `lo_areas` VALUES ('654', '49', '3', '安平县');
INSERT INTO `lo_areas` VALUES ('655', '49', '3', '故城县');
INSERT INTO `lo_areas` VALUES ('656', '49', '3', '景县');
INSERT INTO `lo_areas` VALUES ('657', '49', '3', '阜城县');
INSERT INTO `lo_areas` VALUES ('658', '49', '3', '冀州市');
INSERT INTO `lo_areas` VALUES ('659', '49', '3', '深州市');
INSERT INTO `lo_areas` VALUES ('660', '50', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('661', '50', '3', '小店区');
INSERT INTO `lo_areas` VALUES ('662', '50', '3', '迎泽区');
INSERT INTO `lo_areas` VALUES ('663', '50', '3', '杏花岭区');
INSERT INTO `lo_areas` VALUES ('664', '50', '3', '尖草坪区');
INSERT INTO `lo_areas` VALUES ('665', '50', '3', '万柏林区');
INSERT INTO `lo_areas` VALUES ('666', '50', '3', '晋源区');
INSERT INTO `lo_areas` VALUES ('667', '50', '3', '清徐县');
INSERT INTO `lo_areas` VALUES ('668', '50', '3', '阳曲县');
INSERT INTO `lo_areas` VALUES ('669', '50', '3', '娄烦县');
INSERT INTO `lo_areas` VALUES ('670', '50', '3', '古交市');
INSERT INTO `lo_areas` VALUES ('671', '51', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('672', '51', '3', '城区');
INSERT INTO `lo_areas` VALUES ('673', '51', '3', '矿区');
INSERT INTO `lo_areas` VALUES ('674', '51', '3', '南郊区');
INSERT INTO `lo_areas` VALUES ('675', '51', '3', '新荣区');
INSERT INTO `lo_areas` VALUES ('676', '51', '3', '阳高县');
INSERT INTO `lo_areas` VALUES ('677', '51', '3', '天镇县');
INSERT INTO `lo_areas` VALUES ('678', '51', '3', '广灵县');
INSERT INTO `lo_areas` VALUES ('679', '51', '3', '灵丘县');
INSERT INTO `lo_areas` VALUES ('680', '51', '3', '浑源县');
INSERT INTO `lo_areas` VALUES ('681', '51', '3', '左云县');
INSERT INTO `lo_areas` VALUES ('682', '51', '3', '大同县');
INSERT INTO `lo_areas` VALUES ('683', '52', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('684', '52', '3', '城区');
INSERT INTO `lo_areas` VALUES ('685', '52', '3', '矿区');
INSERT INTO `lo_areas` VALUES ('686', '52', '3', '郊区');
INSERT INTO `lo_areas` VALUES ('687', '52', '3', '平定县');
INSERT INTO `lo_areas` VALUES ('688', '52', '3', '盂县');
INSERT INTO `lo_areas` VALUES ('689', '53', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('690', '53', '3', '城区');
INSERT INTO `lo_areas` VALUES ('691', '53', '3', '郊区');
INSERT INTO `lo_areas` VALUES ('692', '53', '3', '长治县');
INSERT INTO `lo_areas` VALUES ('693', '53', '3', '襄垣县');
INSERT INTO `lo_areas` VALUES ('694', '53', '3', '屯留县');
INSERT INTO `lo_areas` VALUES ('695', '53', '3', '平顺县');
INSERT INTO `lo_areas` VALUES ('696', '53', '3', '黎城县');
INSERT INTO `lo_areas` VALUES ('697', '53', '3', '壶关县');
INSERT INTO `lo_areas` VALUES ('698', '53', '3', '长子县');
INSERT INTO `lo_areas` VALUES ('699', '53', '3', '武乡县');
INSERT INTO `lo_areas` VALUES ('700', '53', '3', '沁县');
INSERT INTO `lo_areas` VALUES ('701', '53', '3', '沁源县');
INSERT INTO `lo_areas` VALUES ('702', '53', '3', '潞城市');
INSERT INTO `lo_areas` VALUES ('703', '54', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('704', '54', '3', '城区');
INSERT INTO `lo_areas` VALUES ('705', '54', '3', '沁水县');
INSERT INTO `lo_areas` VALUES ('706', '54', '3', '阳城县');
INSERT INTO `lo_areas` VALUES ('707', '54', '3', '陵川县');
INSERT INTO `lo_areas` VALUES ('708', '54', '3', '泽州县');
INSERT INTO `lo_areas` VALUES ('709', '54', '3', '高平市');
INSERT INTO `lo_areas` VALUES ('710', '55', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('711', '55', '3', '朔城区');
INSERT INTO `lo_areas` VALUES ('712', '55', '3', '平鲁区');
INSERT INTO `lo_areas` VALUES ('713', '55', '3', '山阴县');
INSERT INTO `lo_areas` VALUES ('714', '55', '3', '应县');
INSERT INTO `lo_areas` VALUES ('715', '55', '3', '右玉县');
INSERT INTO `lo_areas` VALUES ('716', '55', '3', '怀仁县');
INSERT INTO `lo_areas` VALUES ('717', '56', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('718', '56', '3', '榆次区');
INSERT INTO `lo_areas` VALUES ('719', '56', '3', '榆社县');
INSERT INTO `lo_areas` VALUES ('720', '56', '3', '左权县');
INSERT INTO `lo_areas` VALUES ('721', '56', '3', '和顺县');
INSERT INTO `lo_areas` VALUES ('722', '56', '3', '昔阳县');
INSERT INTO `lo_areas` VALUES ('723', '56', '3', '寿阳县');
INSERT INTO `lo_areas` VALUES ('724', '56', '3', '太谷县');
INSERT INTO `lo_areas` VALUES ('725', '56', '3', '祁县');
INSERT INTO `lo_areas` VALUES ('726', '56', '3', '平遥县');
INSERT INTO `lo_areas` VALUES ('727', '56', '3', '灵石县');
INSERT INTO `lo_areas` VALUES ('728', '56', '3', '介休市');
INSERT INTO `lo_areas` VALUES ('729', '57', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('730', '57', '3', '盐湖区');
INSERT INTO `lo_areas` VALUES ('731', '57', '3', '临猗县');
INSERT INTO `lo_areas` VALUES ('732', '57', '3', '万荣县');
INSERT INTO `lo_areas` VALUES ('733', '57', '3', '闻喜县');
INSERT INTO `lo_areas` VALUES ('734', '57', '3', '稷山县');
INSERT INTO `lo_areas` VALUES ('735', '57', '3', '新绛县');
INSERT INTO `lo_areas` VALUES ('736', '57', '3', '绛县');
INSERT INTO `lo_areas` VALUES ('737', '57', '3', '垣曲县');
INSERT INTO `lo_areas` VALUES ('738', '57', '3', '夏县');
INSERT INTO `lo_areas` VALUES ('739', '57', '3', '平陆县');
INSERT INTO `lo_areas` VALUES ('740', '57', '3', '芮城县');
INSERT INTO `lo_areas` VALUES ('741', '57', '3', '永济市');
INSERT INTO `lo_areas` VALUES ('742', '57', '3', '河津市');
INSERT INTO `lo_areas` VALUES ('743', '58', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('744', '58', '3', '忻府区');
INSERT INTO `lo_areas` VALUES ('745', '58', '3', '定襄县');
INSERT INTO `lo_areas` VALUES ('746', '58', '3', '五台县');
INSERT INTO `lo_areas` VALUES ('747', '58', '3', '代县');
INSERT INTO `lo_areas` VALUES ('748', '58', '3', '繁峙县');
INSERT INTO `lo_areas` VALUES ('749', '58', '3', '宁武县');
INSERT INTO `lo_areas` VALUES ('750', '58', '3', '静乐县');
INSERT INTO `lo_areas` VALUES ('751', '58', '3', '神池县');
INSERT INTO `lo_areas` VALUES ('752', '58', '3', '五寨县');
INSERT INTO `lo_areas` VALUES ('753', '58', '3', '岢岚县');
INSERT INTO `lo_areas` VALUES ('754', '58', '3', '河曲县');
INSERT INTO `lo_areas` VALUES ('755', '58', '3', '保德县');
INSERT INTO `lo_areas` VALUES ('756', '58', '3', '偏关县');
INSERT INTO `lo_areas` VALUES ('757', '58', '3', '原平市');
INSERT INTO `lo_areas` VALUES ('758', '59', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('759', '59', '3', '尧都区');
INSERT INTO `lo_areas` VALUES ('760', '59', '3', '曲沃县');
INSERT INTO `lo_areas` VALUES ('761', '59', '3', '翼城县');
INSERT INTO `lo_areas` VALUES ('762', '59', '3', '襄汾县');
INSERT INTO `lo_areas` VALUES ('763', '59', '3', '洪洞县');
INSERT INTO `lo_areas` VALUES ('764', '59', '3', '古县');
INSERT INTO `lo_areas` VALUES ('765', '59', '3', '安泽县');
INSERT INTO `lo_areas` VALUES ('766', '59', '3', '浮山县');
INSERT INTO `lo_areas` VALUES ('767', '59', '3', '吉县');
INSERT INTO `lo_areas` VALUES ('768', '59', '3', '乡宁县');
INSERT INTO `lo_areas` VALUES ('769', '59', '3', '大宁县');
INSERT INTO `lo_areas` VALUES ('770', '59', '3', '隰县');
INSERT INTO `lo_areas` VALUES ('771', '59', '3', '永和县');
INSERT INTO `lo_areas` VALUES ('772', '59', '3', '蒲县');
INSERT INTO `lo_areas` VALUES ('773', '59', '3', '汾西县');
INSERT INTO `lo_areas` VALUES ('774', '59', '3', '侯马市');
INSERT INTO `lo_areas` VALUES ('775', '59', '3', '霍州市');
INSERT INTO `lo_areas` VALUES ('776', '60', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('777', '60', '3', '离石区');
INSERT INTO `lo_areas` VALUES ('778', '60', '3', '文水县');
INSERT INTO `lo_areas` VALUES ('779', '60', '3', '交城县');
INSERT INTO `lo_areas` VALUES ('780', '60', '3', '兴县');
INSERT INTO `lo_areas` VALUES ('781', '60', '3', '临县');
INSERT INTO `lo_areas` VALUES ('782', '60', '3', '柳林县');
INSERT INTO `lo_areas` VALUES ('783', '60', '3', '石楼县');
INSERT INTO `lo_areas` VALUES ('784', '60', '3', '岚县');
INSERT INTO `lo_areas` VALUES ('785', '60', '3', '方山县');
INSERT INTO `lo_areas` VALUES ('786', '60', '3', '中阳县');
INSERT INTO `lo_areas` VALUES ('787', '60', '3', '交口县');
INSERT INTO `lo_areas` VALUES ('788', '60', '3', '孝义市');
INSERT INTO `lo_areas` VALUES ('789', '60', '3', '汾阳市');
INSERT INTO `lo_areas` VALUES ('790', '61', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('791', '61', '3', '新城区');
INSERT INTO `lo_areas` VALUES ('792', '61', '3', '回民区');
INSERT INTO `lo_areas` VALUES ('793', '61', '3', '玉泉区');
INSERT INTO `lo_areas` VALUES ('794', '61', '3', '赛罕区');
INSERT INTO `lo_areas` VALUES ('795', '61', '3', '土默特左旗');
INSERT INTO `lo_areas` VALUES ('796', '61', '3', '托克托县');
INSERT INTO `lo_areas` VALUES ('797', '61', '3', '和林格尔县');
INSERT INTO `lo_areas` VALUES ('798', '61', '3', '清水河县');
INSERT INTO `lo_areas` VALUES ('799', '61', '3', '武川县');
INSERT INTO `lo_areas` VALUES ('800', '62', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('801', '62', '3', '东河区');
INSERT INTO `lo_areas` VALUES ('802', '62', '3', '昆都仑区');
INSERT INTO `lo_areas` VALUES ('803', '62', '3', '青山区');
INSERT INTO `lo_areas` VALUES ('804', '62', '3', '石拐区');
INSERT INTO `lo_areas` VALUES ('805', '62', '3', '白云矿区');
INSERT INTO `lo_areas` VALUES ('806', '62', '3', '九原区');
INSERT INTO `lo_areas` VALUES ('807', '62', '3', '土默特右旗');
INSERT INTO `lo_areas` VALUES ('808', '62', '3', '固阳县');
INSERT INTO `lo_areas` VALUES ('809', '62', '3', '达尔罕茂明安联合旗');
INSERT INTO `lo_areas` VALUES ('810', '63', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('811', '63', '3', '海勃湾区');
INSERT INTO `lo_areas` VALUES ('812', '63', '3', '海南区');
INSERT INTO `lo_areas` VALUES ('813', '63', '3', '乌达区');
INSERT INTO `lo_areas` VALUES ('814', '64', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('815', '64', '3', '红山区');
INSERT INTO `lo_areas` VALUES ('816', '64', '3', '元宝山区');
INSERT INTO `lo_areas` VALUES ('817', '64', '3', '松山区');
INSERT INTO `lo_areas` VALUES ('818', '64', '3', '阿鲁科尔沁旗');
INSERT INTO `lo_areas` VALUES ('819', '64', '3', '巴林左旗');
INSERT INTO `lo_areas` VALUES ('820', '64', '3', '巴林右旗');
INSERT INTO `lo_areas` VALUES ('821', '64', '3', '林西县');
INSERT INTO `lo_areas` VALUES ('822', '64', '3', '克什克腾旗');
INSERT INTO `lo_areas` VALUES ('823', '64', '3', '翁牛特旗');
INSERT INTO `lo_areas` VALUES ('824', '64', '3', '喀喇沁旗');
INSERT INTO `lo_areas` VALUES ('825', '64', '3', '宁城县');
INSERT INTO `lo_areas` VALUES ('826', '64', '3', '敖汉旗');
INSERT INTO `lo_areas` VALUES ('827', '65', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('828', '65', '3', '科尔沁区');
INSERT INTO `lo_areas` VALUES ('829', '65', '3', '科尔沁左翼中旗');
INSERT INTO `lo_areas` VALUES ('830', '65', '3', '科尔沁左翼后旗');
INSERT INTO `lo_areas` VALUES ('831', '65', '3', '开鲁县');
INSERT INTO `lo_areas` VALUES ('832', '65', '3', '库伦旗');
INSERT INTO `lo_areas` VALUES ('833', '65', '3', '奈曼旗');
INSERT INTO `lo_areas` VALUES ('834', '65', '3', '扎鲁特旗');
INSERT INTO `lo_areas` VALUES ('835', '65', '3', '霍林郭勒市');
INSERT INTO `lo_areas` VALUES ('836', '66', '3', '东胜区');
INSERT INTO `lo_areas` VALUES ('837', '66', '3', '达拉特旗');
INSERT INTO `lo_areas` VALUES ('838', '66', '3', '准格尔旗');
INSERT INTO `lo_areas` VALUES ('839', '66', '3', '鄂托克前旗');
INSERT INTO `lo_areas` VALUES ('840', '66', '3', '鄂托克旗');
INSERT INTO `lo_areas` VALUES ('841', '66', '3', '杭锦旗');
INSERT INTO `lo_areas` VALUES ('842', '66', '3', '乌审旗');
INSERT INTO `lo_areas` VALUES ('843', '66', '3', '伊金霍洛旗');
INSERT INTO `lo_areas` VALUES ('844', '67', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('845', '67', '3', '海拉尔区');
INSERT INTO `lo_areas` VALUES ('846', '67', '3', '阿荣旗');
INSERT INTO `lo_areas` VALUES ('847', '67', '3', '莫力达瓦达斡尔族自治旗');
INSERT INTO `lo_areas` VALUES ('848', '67', '3', '鄂伦春自治旗');
INSERT INTO `lo_areas` VALUES ('849', '67', '3', '鄂温克族自治旗');
INSERT INTO `lo_areas` VALUES ('850', '67', '3', '陈巴尔虎旗');
INSERT INTO `lo_areas` VALUES ('851', '67', '3', '新巴尔虎左旗');
INSERT INTO `lo_areas` VALUES ('852', '67', '3', '新巴尔虎右旗');
INSERT INTO `lo_areas` VALUES ('853', '67', '3', '满洲里市');
INSERT INTO `lo_areas` VALUES ('854', '67', '3', '牙克石市');
INSERT INTO `lo_areas` VALUES ('855', '67', '3', '扎兰屯市');
INSERT INTO `lo_areas` VALUES ('856', '67', '3', '额尔古纳市');
INSERT INTO `lo_areas` VALUES ('857', '67', '3', '根河市');
INSERT INTO `lo_areas` VALUES ('858', '68', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('859', '68', '3', '临河区');
INSERT INTO `lo_areas` VALUES ('860', '68', '3', '五原县');
INSERT INTO `lo_areas` VALUES ('861', '68', '3', '磴口县');
INSERT INTO `lo_areas` VALUES ('862', '68', '3', '乌拉特前旗');
INSERT INTO `lo_areas` VALUES ('863', '68', '3', '乌拉特中旗');
INSERT INTO `lo_areas` VALUES ('864', '68', '3', '乌拉特后旗');
INSERT INTO `lo_areas` VALUES ('865', '68', '3', '杭锦后旗');
INSERT INTO `lo_areas` VALUES ('866', '69', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('867', '69', '3', '集宁区');
INSERT INTO `lo_areas` VALUES ('868', '69', '3', '卓资县');
INSERT INTO `lo_areas` VALUES ('869', '69', '3', '化德县');
INSERT INTO `lo_areas` VALUES ('870', '69', '3', '商都县');
INSERT INTO `lo_areas` VALUES ('871', '69', '3', '兴和县');
INSERT INTO `lo_areas` VALUES ('872', '69', '3', '凉城县');
INSERT INTO `lo_areas` VALUES ('873', '69', '3', '察哈尔右翼前旗');
INSERT INTO `lo_areas` VALUES ('874', '69', '3', '察哈尔右翼中旗');
INSERT INTO `lo_areas` VALUES ('875', '69', '3', '察哈尔右翼后旗');
INSERT INTO `lo_areas` VALUES ('876', '69', '3', '四子王旗');
INSERT INTO `lo_areas` VALUES ('877', '69', '3', '丰镇市');
INSERT INTO `lo_areas` VALUES ('878', '70', '3', '乌兰浩特市');
INSERT INTO `lo_areas` VALUES ('879', '70', '3', '阿尔山市');
INSERT INTO `lo_areas` VALUES ('880', '70', '3', '科尔沁右翼前旗');
INSERT INTO `lo_areas` VALUES ('881', '70', '3', '科尔沁右翼中旗');
INSERT INTO `lo_areas` VALUES ('882', '70', '3', '扎赉特旗');
INSERT INTO `lo_areas` VALUES ('883', '70', '3', '突泉县');
INSERT INTO `lo_areas` VALUES ('884', '71', '3', '二连浩特市');
INSERT INTO `lo_areas` VALUES ('885', '71', '3', '锡林浩特市');
INSERT INTO `lo_areas` VALUES ('886', '71', '3', '阿巴嘎旗');
INSERT INTO `lo_areas` VALUES ('887', '71', '3', '苏尼特左旗');
INSERT INTO `lo_areas` VALUES ('888', '71', '3', '苏尼特右旗');
INSERT INTO `lo_areas` VALUES ('889', '71', '3', '东乌珠穆沁旗');
INSERT INTO `lo_areas` VALUES ('890', '71', '3', '西乌珠穆沁旗');
INSERT INTO `lo_areas` VALUES ('891', '71', '3', '太仆寺旗');
INSERT INTO `lo_areas` VALUES ('892', '71', '3', '镶黄旗');
INSERT INTO `lo_areas` VALUES ('893', '71', '3', '正镶白旗');
INSERT INTO `lo_areas` VALUES ('894', '71', '3', '正蓝旗');
INSERT INTO `lo_areas` VALUES ('895', '71', '3', '多伦县');
INSERT INTO `lo_areas` VALUES ('896', '72', '3', '阿拉善左旗');
INSERT INTO `lo_areas` VALUES ('897', '72', '3', '阿拉善右旗');
INSERT INTO `lo_areas` VALUES ('898', '72', '3', '额济纳旗');
INSERT INTO `lo_areas` VALUES ('899', '73', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('900', '73', '3', '和平区');
INSERT INTO `lo_areas` VALUES ('901', '73', '3', '沈河区');
INSERT INTO `lo_areas` VALUES ('902', '73', '3', '大东区');
INSERT INTO `lo_areas` VALUES ('903', '73', '3', '皇姑区');
INSERT INTO `lo_areas` VALUES ('904', '73', '3', '铁西区');
INSERT INTO `lo_areas` VALUES ('905', '73', '3', '苏家屯区');
INSERT INTO `lo_areas` VALUES ('906', '73', '3', '东陵区');
INSERT INTO `lo_areas` VALUES ('907', '73', '3', '新城子区');
INSERT INTO `lo_areas` VALUES ('908', '73', '3', '于洪区');
INSERT INTO `lo_areas` VALUES ('909', '73', '3', '辽中县');
INSERT INTO `lo_areas` VALUES ('910', '73', '3', '康平县');
INSERT INTO `lo_areas` VALUES ('911', '73', '3', '法库县');
INSERT INTO `lo_areas` VALUES ('912', '73', '3', '新民市');
INSERT INTO `lo_areas` VALUES ('913', '74', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('914', '74', '3', '中山区');
INSERT INTO `lo_areas` VALUES ('915', '74', '3', '西岗区');
INSERT INTO `lo_areas` VALUES ('916', '74', '3', '沙河口区');
INSERT INTO `lo_areas` VALUES ('917', '74', '3', '甘井子区');
INSERT INTO `lo_areas` VALUES ('918', '74', '3', '旅顺口区');
INSERT INTO `lo_areas` VALUES ('919', '74', '3', '金州区');
INSERT INTO `lo_areas` VALUES ('920', '74', '3', '长海县');
INSERT INTO `lo_areas` VALUES ('921', '74', '3', '瓦房店市');
INSERT INTO `lo_areas` VALUES ('922', '74', '3', '普兰店市');
INSERT INTO `lo_areas` VALUES ('923', '74', '3', '庄河市');
INSERT INTO `lo_areas` VALUES ('924', '75', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('925', '75', '3', '铁东区');
INSERT INTO `lo_areas` VALUES ('926', '75', '3', '铁西区');
INSERT INTO `lo_areas` VALUES ('927', '75', '3', '立山区');
INSERT INTO `lo_areas` VALUES ('928', '75', '3', '千山区');
INSERT INTO `lo_areas` VALUES ('929', '75', '3', '台安县');
INSERT INTO `lo_areas` VALUES ('930', '75', '3', '岫岩满族自治县');
INSERT INTO `lo_areas` VALUES ('931', '75', '3', '海城市');
INSERT INTO `lo_areas` VALUES ('932', '76', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('933', '76', '3', '新抚区');
INSERT INTO `lo_areas` VALUES ('934', '76', '3', '东洲区');
INSERT INTO `lo_areas` VALUES ('935', '76', '3', '望花区');
INSERT INTO `lo_areas` VALUES ('936', '76', '3', '顺城区');
INSERT INTO `lo_areas` VALUES ('937', '76', '3', '抚顺县');
INSERT INTO `lo_areas` VALUES ('938', '76', '3', '新宾满族自治县');
INSERT INTO `lo_areas` VALUES ('939', '76', '3', '清原满族自治县');
INSERT INTO `lo_areas` VALUES ('940', '77', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('941', '77', '3', '平山区');
INSERT INTO `lo_areas` VALUES ('942', '77', '3', '溪湖区');
INSERT INTO `lo_areas` VALUES ('943', '77', '3', '明山区');
INSERT INTO `lo_areas` VALUES ('944', '77', '3', '南芬区');
INSERT INTO `lo_areas` VALUES ('945', '77', '3', '本溪满族自治县');
INSERT INTO `lo_areas` VALUES ('946', '77', '3', '桓仁满族自治县');
INSERT INTO `lo_areas` VALUES ('947', '78', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('948', '78', '3', '元宝区');
INSERT INTO `lo_areas` VALUES ('949', '78', '3', '振兴区');
INSERT INTO `lo_areas` VALUES ('950', '78', '3', '振安区');
INSERT INTO `lo_areas` VALUES ('951', '78', '3', '宽甸满族自治县');
INSERT INTO `lo_areas` VALUES ('952', '78', '3', '东港市');
INSERT INTO `lo_areas` VALUES ('953', '78', '3', '凤城市');
INSERT INTO `lo_areas` VALUES ('954', '79', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('955', '79', '3', '古塔区');
INSERT INTO `lo_areas` VALUES ('956', '79', '3', '凌河区');
INSERT INTO `lo_areas` VALUES ('957', '79', '3', '太和区');
INSERT INTO `lo_areas` VALUES ('958', '79', '3', '黑山县');
INSERT INTO `lo_areas` VALUES ('959', '79', '3', '义县');
INSERT INTO `lo_areas` VALUES ('960', '79', '3', '凌海市');
INSERT INTO `lo_areas` VALUES ('961', '79', '3', '北宁市');
INSERT INTO `lo_areas` VALUES ('962', '80', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('963', '80', '3', '站前区');
INSERT INTO `lo_areas` VALUES ('964', '80', '3', '西市区');
INSERT INTO `lo_areas` VALUES ('965', '80', '3', '鲅鱼圈区');
INSERT INTO `lo_areas` VALUES ('966', '80', '3', '老边区');
INSERT INTO `lo_areas` VALUES ('967', '80', '3', '盖州市');
INSERT INTO `lo_areas` VALUES ('968', '80', '3', '大石桥市');
INSERT INTO `lo_areas` VALUES ('969', '81', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('970', '81', '3', '海州区');
INSERT INTO `lo_areas` VALUES ('971', '81', '3', '新邱区');
INSERT INTO `lo_areas` VALUES ('972', '81', '3', '太平区');
INSERT INTO `lo_areas` VALUES ('973', '81', '3', '清河门区');
INSERT INTO `lo_areas` VALUES ('974', '81', '3', '细河区');
INSERT INTO `lo_areas` VALUES ('975', '81', '3', '阜新蒙古族自治县');
INSERT INTO `lo_areas` VALUES ('976', '81', '3', '彰武县');
INSERT INTO `lo_areas` VALUES ('977', '82', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('978', '82', '3', '白塔区');
INSERT INTO `lo_areas` VALUES ('979', '82', '3', '文圣区');
INSERT INTO `lo_areas` VALUES ('980', '82', '3', '宏伟区');
INSERT INTO `lo_areas` VALUES ('981', '82', '3', '弓长岭区');
INSERT INTO `lo_areas` VALUES ('982', '82', '3', '太子河区');
INSERT INTO `lo_areas` VALUES ('983', '82', '3', '辽阳县');
INSERT INTO `lo_areas` VALUES ('984', '82', '3', '灯塔市');
INSERT INTO `lo_areas` VALUES ('985', '83', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('986', '83', '3', '双台子区');
INSERT INTO `lo_areas` VALUES ('987', '83', '3', '兴隆台区');
INSERT INTO `lo_areas` VALUES ('988', '83', '3', '大洼县');
INSERT INTO `lo_areas` VALUES ('989', '83', '3', '盘山县');
INSERT INTO `lo_areas` VALUES ('990', '84', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('991', '84', '3', '银州区');
INSERT INTO `lo_areas` VALUES ('992', '84', '3', '清河区');
INSERT INTO `lo_areas` VALUES ('993', '84', '3', '铁岭县');
INSERT INTO `lo_areas` VALUES ('994', '84', '3', '西丰县');
INSERT INTO `lo_areas` VALUES ('995', '84', '3', '昌图县');
INSERT INTO `lo_areas` VALUES ('996', '84', '3', '调兵山市');
INSERT INTO `lo_areas` VALUES ('997', '84', '3', '开原市');
INSERT INTO `lo_areas` VALUES ('998', '85', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('999', '85', '3', '双塔区');
INSERT INTO `lo_areas` VALUES ('1000', '85', '3', '龙城区');
INSERT INTO `lo_areas` VALUES ('1001', '85', '3', '朝阳县');
INSERT INTO `lo_areas` VALUES ('1002', '85', '3', '建平县');
INSERT INTO `lo_areas` VALUES ('1003', '85', '3', '喀喇沁左翼蒙古族自治县');
INSERT INTO `lo_areas` VALUES ('1004', '85', '3', '北票市');
INSERT INTO `lo_areas` VALUES ('1005', '85', '3', '凌源市');
INSERT INTO `lo_areas` VALUES ('1006', '86', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('1007', '86', '3', '连山区');
INSERT INTO `lo_areas` VALUES ('1008', '86', '3', '龙港区');
INSERT INTO `lo_areas` VALUES ('1009', '86', '3', '南票区');
INSERT INTO `lo_areas` VALUES ('1010', '86', '3', '绥中县');
INSERT INTO `lo_areas` VALUES ('1011', '86', '3', '建昌县');
INSERT INTO `lo_areas` VALUES ('1012', '86', '3', '兴城市');
INSERT INTO `lo_areas` VALUES ('1013', '87', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('1014', '87', '3', '南关区');
INSERT INTO `lo_areas` VALUES ('1015', '87', '3', '宽城区');
INSERT INTO `lo_areas` VALUES ('1016', '87', '3', '朝阳区');
INSERT INTO `lo_areas` VALUES ('1017', '87', '3', '二道区');
INSERT INTO `lo_areas` VALUES ('1018', '87', '3', '绿园区');
INSERT INTO `lo_areas` VALUES ('1019', '87', '3', '双阳区');
INSERT INTO `lo_areas` VALUES ('1020', '87', '3', '农安县');
INSERT INTO `lo_areas` VALUES ('1021', '87', '3', '九台市');
INSERT INTO `lo_areas` VALUES ('1022', '87', '3', '榆树市');
INSERT INTO `lo_areas` VALUES ('1023', '87', '3', '德惠市');
INSERT INTO `lo_areas` VALUES ('1024', '88', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('1025', '88', '3', '昌邑区');
INSERT INTO `lo_areas` VALUES ('1026', '88', '3', '龙潭区');
INSERT INTO `lo_areas` VALUES ('1027', '88', '3', '船营区');
INSERT INTO `lo_areas` VALUES ('1028', '88', '3', '丰满区');
INSERT INTO `lo_areas` VALUES ('1029', '88', '3', '永吉县');
INSERT INTO `lo_areas` VALUES ('1030', '88', '3', '蛟河市');
INSERT INTO `lo_areas` VALUES ('1031', '88', '3', '桦甸市');
INSERT INTO `lo_areas` VALUES ('1032', '88', '3', '舒兰市');
INSERT INTO `lo_areas` VALUES ('1033', '88', '3', '磐石市');
INSERT INTO `lo_areas` VALUES ('1034', '89', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('1035', '89', '3', '铁西区');
INSERT INTO `lo_areas` VALUES ('1036', '89', '3', '铁东区');
INSERT INTO `lo_areas` VALUES ('1037', '89', '3', '梨树县');
INSERT INTO `lo_areas` VALUES ('1038', '89', '3', '伊通满族自治县');
INSERT INTO `lo_areas` VALUES ('1039', '89', '3', '公主岭市');
INSERT INTO `lo_areas` VALUES ('1040', '89', '3', '双辽市');
INSERT INTO `lo_areas` VALUES ('1041', '90', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('1042', '90', '3', '龙山区');
INSERT INTO `lo_areas` VALUES ('1043', '90', '3', '西安区');
INSERT INTO `lo_areas` VALUES ('1044', '90', '3', '东丰县');
INSERT INTO `lo_areas` VALUES ('1045', '90', '3', '东辽县');
INSERT INTO `lo_areas` VALUES ('1046', '91', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('1047', '91', '3', '东昌区');
INSERT INTO `lo_areas` VALUES ('1048', '91', '3', '二道江区');
INSERT INTO `lo_areas` VALUES ('1049', '91', '3', '通化县');
INSERT INTO `lo_areas` VALUES ('1050', '91', '3', '辉南县');
INSERT INTO `lo_areas` VALUES ('1051', '91', '3', '柳河县');
INSERT INTO `lo_areas` VALUES ('1052', '91', '3', '梅河口市');
INSERT INTO `lo_areas` VALUES ('1053', '91', '3', '集安市');
INSERT INTO `lo_areas` VALUES ('1054', '92', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('1055', '92', '3', '八道江区');
INSERT INTO `lo_areas` VALUES ('1056', '92', '3', '抚松县');
INSERT INTO `lo_areas` VALUES ('1057', '92', '3', '靖宇县');
INSERT INTO `lo_areas` VALUES ('1058', '92', '3', '长白朝鲜族自治县');
INSERT INTO `lo_areas` VALUES ('1059', '92', '3', '江源县');
INSERT INTO `lo_areas` VALUES ('1060', '92', '3', '临江市');
INSERT INTO `lo_areas` VALUES ('1061', '93', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('1062', '93', '3', '宁江区');
INSERT INTO `lo_areas` VALUES ('1063', '93', '3', '前郭尔罗斯蒙古族自治县');
INSERT INTO `lo_areas` VALUES ('1064', '93', '3', '长岭县');
INSERT INTO `lo_areas` VALUES ('1065', '93', '3', '乾安县');
INSERT INTO `lo_areas` VALUES ('1066', '93', '3', '扶余县');
INSERT INTO `lo_areas` VALUES ('1067', '94', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('1068', '94', '3', '洮北区');
INSERT INTO `lo_areas` VALUES ('1069', '94', '3', '镇赉县');
INSERT INTO `lo_areas` VALUES ('1070', '94', '3', '通榆县');
INSERT INTO `lo_areas` VALUES ('1071', '94', '3', '洮南市');
INSERT INTO `lo_areas` VALUES ('1072', '94', '3', '大安市');
INSERT INTO `lo_areas` VALUES ('1073', '95', '3', '延吉市');
INSERT INTO `lo_areas` VALUES ('1074', '95', '3', '图们市');
INSERT INTO `lo_areas` VALUES ('1075', '95', '3', '敦化市');
INSERT INTO `lo_areas` VALUES ('1076', '95', '3', '珲春市');
INSERT INTO `lo_areas` VALUES ('1077', '95', '3', '龙井市');
INSERT INTO `lo_areas` VALUES ('1078', '95', '3', '和龙市');
INSERT INTO `lo_areas` VALUES ('1079', '95', '3', '汪清县');
INSERT INTO `lo_areas` VALUES ('1080', '95', '3', '安图县');
INSERT INTO `lo_areas` VALUES ('1081', '96', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('1082', '96', '3', '道里区');
INSERT INTO `lo_areas` VALUES ('1083', '96', '3', '南岗区');
INSERT INTO `lo_areas` VALUES ('1084', '96', '3', '道外区');
INSERT INTO `lo_areas` VALUES ('1085', '96', '3', '香坊区');
INSERT INTO `lo_areas` VALUES ('1086', '96', '3', '动力区');
INSERT INTO `lo_areas` VALUES ('1087', '96', '3', '平房区');
INSERT INTO `lo_areas` VALUES ('1088', '96', '3', '松北区');
INSERT INTO `lo_areas` VALUES ('1089', '96', '3', '呼兰区');
INSERT INTO `lo_areas` VALUES ('1090', '96', '3', '依兰县');
INSERT INTO `lo_areas` VALUES ('1091', '96', '3', '方正县');
INSERT INTO `lo_areas` VALUES ('1092', '96', '3', '宾县');
INSERT INTO `lo_areas` VALUES ('1093', '96', '3', '巴彦县');
INSERT INTO `lo_areas` VALUES ('1094', '96', '3', '木兰县');
INSERT INTO `lo_areas` VALUES ('1095', '96', '3', '通河县');
INSERT INTO `lo_areas` VALUES ('1096', '96', '3', '延寿县');
INSERT INTO `lo_areas` VALUES ('1097', '96', '3', '阿城市');
INSERT INTO `lo_areas` VALUES ('1098', '96', '3', '双城市');
INSERT INTO `lo_areas` VALUES ('1099', '96', '3', '尚志市');
INSERT INTO `lo_areas` VALUES ('1100', '96', '3', '五常市');
INSERT INTO `lo_areas` VALUES ('1101', '97', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('1102', '97', '3', '龙沙区');
INSERT INTO `lo_areas` VALUES ('1103', '97', '3', '建华区');
INSERT INTO `lo_areas` VALUES ('1104', '97', '3', '铁锋区');
INSERT INTO `lo_areas` VALUES ('1105', '97', '3', '昂昂溪区');
INSERT INTO `lo_areas` VALUES ('1106', '97', '3', '富拉尔基区');
INSERT INTO `lo_areas` VALUES ('1107', '97', '3', '碾子山区');
INSERT INTO `lo_areas` VALUES ('1108', '97', '3', '梅里斯达斡尔族区');
INSERT INTO `lo_areas` VALUES ('1109', '97', '3', '龙江县');
INSERT INTO `lo_areas` VALUES ('1110', '97', '3', '依安县');
INSERT INTO `lo_areas` VALUES ('1111', '97', '3', '泰来县');
INSERT INTO `lo_areas` VALUES ('1112', '97', '3', '甘南县');
INSERT INTO `lo_areas` VALUES ('1113', '97', '3', '富裕县');
INSERT INTO `lo_areas` VALUES ('1114', '97', '3', '克山县');
INSERT INTO `lo_areas` VALUES ('1115', '97', '3', '克东县');
INSERT INTO `lo_areas` VALUES ('1116', '97', '3', '拜泉县');
INSERT INTO `lo_areas` VALUES ('1117', '97', '3', '讷河市');
INSERT INTO `lo_areas` VALUES ('1118', '98', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('1119', '98', '3', '鸡冠区');
INSERT INTO `lo_areas` VALUES ('1120', '98', '3', '恒山区');
INSERT INTO `lo_areas` VALUES ('1121', '98', '3', '滴道区');
INSERT INTO `lo_areas` VALUES ('1122', '98', '3', '梨树区');
INSERT INTO `lo_areas` VALUES ('1123', '98', '3', '城子河区');
INSERT INTO `lo_areas` VALUES ('1124', '98', '3', '麻山区');
INSERT INTO `lo_areas` VALUES ('1125', '98', '3', '鸡东县');
INSERT INTO `lo_areas` VALUES ('1126', '98', '3', '虎林市');
INSERT INTO `lo_areas` VALUES ('1127', '98', '3', '密山市');
INSERT INTO `lo_areas` VALUES ('1128', '99', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('1129', '99', '3', '向阳区');
INSERT INTO `lo_areas` VALUES ('1130', '99', '3', '工农区');
INSERT INTO `lo_areas` VALUES ('1131', '99', '3', '南山区');
INSERT INTO `lo_areas` VALUES ('1132', '99', '3', '兴安区');
INSERT INTO `lo_areas` VALUES ('1133', '99', '3', '东山区');
INSERT INTO `lo_areas` VALUES ('1134', '99', '3', '兴山区');
INSERT INTO `lo_areas` VALUES ('1135', '99', '3', '萝北县');
INSERT INTO `lo_areas` VALUES ('1136', '99', '3', '绥滨县');
INSERT INTO `lo_areas` VALUES ('1137', '100', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('1138', '100', '3', '尖山区');
INSERT INTO `lo_areas` VALUES ('1139', '100', '3', '岭东区');
INSERT INTO `lo_areas` VALUES ('1140', '100', '3', '四方台区');
INSERT INTO `lo_areas` VALUES ('1141', '100', '3', '宝山区');
INSERT INTO `lo_areas` VALUES ('1142', '100', '3', '集贤县');
INSERT INTO `lo_areas` VALUES ('1143', '100', '3', '友谊县');
INSERT INTO `lo_areas` VALUES ('1144', '100', '3', '宝清县');
INSERT INTO `lo_areas` VALUES ('1145', '100', '3', '饶河县');
INSERT INTO `lo_areas` VALUES ('1146', '101', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('1147', '101', '3', '萨尔图区');
INSERT INTO `lo_areas` VALUES ('1148', '101', '3', '龙凤区');
INSERT INTO `lo_areas` VALUES ('1149', '101', '3', '让胡路区');
INSERT INTO `lo_areas` VALUES ('1150', '101', '3', '红岗区');
INSERT INTO `lo_areas` VALUES ('1151', '101', '3', '大同区');
INSERT INTO `lo_areas` VALUES ('1152', '101', '3', '肇州县');
INSERT INTO `lo_areas` VALUES ('1153', '101', '3', '肇源县');
INSERT INTO `lo_areas` VALUES ('1154', '101', '3', '林甸县');
INSERT INTO `lo_areas` VALUES ('1155', '101', '3', '杜尔伯特蒙古族自治县');
INSERT INTO `lo_areas` VALUES ('1156', '102', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('1157', '102', '3', '伊春区');
INSERT INTO `lo_areas` VALUES ('1158', '102', '3', '南岔区');
INSERT INTO `lo_areas` VALUES ('1159', '102', '3', '友好区');
INSERT INTO `lo_areas` VALUES ('1160', '102', '3', '西林区');
INSERT INTO `lo_areas` VALUES ('1161', '102', '3', '翠峦区');
INSERT INTO `lo_areas` VALUES ('1162', '102', '3', '新青区');
INSERT INTO `lo_areas` VALUES ('1163', '102', '3', '美溪区');
INSERT INTO `lo_areas` VALUES ('1164', '102', '3', '金山屯区');
INSERT INTO `lo_areas` VALUES ('1165', '102', '3', '五营区');
INSERT INTO `lo_areas` VALUES ('1166', '102', '3', '乌马河区');
INSERT INTO `lo_areas` VALUES ('1167', '102', '3', '汤旺河区');
INSERT INTO `lo_areas` VALUES ('1168', '102', '3', '带岭区');
INSERT INTO `lo_areas` VALUES ('1169', '102', '3', '乌伊岭区');
INSERT INTO `lo_areas` VALUES ('1170', '102', '3', '红星区');
INSERT INTO `lo_areas` VALUES ('1171', '102', '3', '上甘岭区');
INSERT INTO `lo_areas` VALUES ('1172', '102', '3', '嘉荫县');
INSERT INTO `lo_areas` VALUES ('1173', '102', '3', '铁力市');
INSERT INTO `lo_areas` VALUES ('1174', '103', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('1175', '103', '3', '永红区');
INSERT INTO `lo_areas` VALUES ('1176', '103', '3', '向阳区');
INSERT INTO `lo_areas` VALUES ('1177', '103', '3', '前进区');
INSERT INTO `lo_areas` VALUES ('1178', '103', '3', '东风区');
INSERT INTO `lo_areas` VALUES ('1179', '103', '3', '郊区');
INSERT INTO `lo_areas` VALUES ('1180', '103', '3', '桦南县');
INSERT INTO `lo_areas` VALUES ('1181', '103', '3', '桦川县');
INSERT INTO `lo_areas` VALUES ('1182', '103', '3', '汤原县');
INSERT INTO `lo_areas` VALUES ('1183', '103', '3', '抚远县');
INSERT INTO `lo_areas` VALUES ('1184', '103', '3', '同江市');
INSERT INTO `lo_areas` VALUES ('1185', '103', '3', '富锦市');
INSERT INTO `lo_areas` VALUES ('1186', '104', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('1187', '104', '3', '新兴区');
INSERT INTO `lo_areas` VALUES ('1188', '104', '3', '桃山区');
INSERT INTO `lo_areas` VALUES ('1189', '104', '3', '茄子河区');
INSERT INTO `lo_areas` VALUES ('1190', '104', '3', '勃利县');
INSERT INTO `lo_areas` VALUES ('1202', '106', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('1203', '106', '3', '爱辉区');
INSERT INTO `lo_areas` VALUES ('1204', '106', '3', '嫩江县');
INSERT INTO `lo_areas` VALUES ('1205', '106', '3', '逊克县');
INSERT INTO `lo_areas` VALUES ('1206', '106', '3', '孙吴县');
INSERT INTO `lo_areas` VALUES ('1207', '106', '3', '北安市');
INSERT INTO `lo_areas` VALUES ('1208', '106', '3', '五大连池市');
INSERT INTO `lo_areas` VALUES ('1209', '107', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('1210', '107', '3', '北林区');
INSERT INTO `lo_areas` VALUES ('1211', '107', '3', '望奎县');
INSERT INTO `lo_areas` VALUES ('1212', '107', '3', '兰西县');
INSERT INTO `lo_areas` VALUES ('1213', '107', '3', '青冈县');
INSERT INTO `lo_areas` VALUES ('1214', '107', '3', '庆安县');
INSERT INTO `lo_areas` VALUES ('1215', '107', '3', '明水县');
INSERT INTO `lo_areas` VALUES ('1216', '107', '3', '绥棱县');
INSERT INTO `lo_areas` VALUES ('1217', '107', '3', '安达市');
INSERT INTO `lo_areas` VALUES ('1218', '107', '3', '肇东市');
INSERT INTO `lo_areas` VALUES ('1219', '107', '3', '海伦市');
INSERT INTO `lo_areas` VALUES ('1220', '108', '3', '呼玛县');
INSERT INTO `lo_areas` VALUES ('1221', '108', '3', '塔河县');
INSERT INTO `lo_areas` VALUES ('1222', '108', '3', '漠河县');
INSERT INTO `lo_areas` VALUES ('1223', '109', '3', '黄浦区');
INSERT INTO `lo_areas` VALUES ('1224', '109', '3', '卢湾区');
INSERT INTO `lo_areas` VALUES ('1225', '109', '3', '徐汇区');
INSERT INTO `lo_areas` VALUES ('1226', '109', '3', '长宁区');
INSERT INTO `lo_areas` VALUES ('1227', '109', '3', '静安区');
INSERT INTO `lo_areas` VALUES ('1228', '109', '3', '普陀区');
INSERT INTO `lo_areas` VALUES ('1229', '109', '3', '闸北区');
INSERT INTO `lo_areas` VALUES ('1230', '109', '3', '虹口区');
INSERT INTO `lo_areas` VALUES ('1231', '109', '3', '杨浦区');
INSERT INTO `lo_areas` VALUES ('1232', '109', '3', '闵行区');
INSERT INTO `lo_areas` VALUES ('1233', '109', '3', '宝山区');
INSERT INTO `lo_areas` VALUES ('1234', '109', '3', '嘉定区');
INSERT INTO `lo_areas` VALUES ('1235', '109', '3', '浦东新区');
INSERT INTO `lo_areas` VALUES ('1236', '109', '3', '金山区');
INSERT INTO `lo_areas` VALUES ('1237', '109', '3', '松江区');
INSERT INTO `lo_areas` VALUES ('1238', '109', '3', '青浦区');
INSERT INTO `lo_areas` VALUES ('1239', '109', '3', '南汇区');
INSERT INTO `lo_areas` VALUES ('1240', '109', '3', '奉贤区');
INSERT INTO `lo_areas` VALUES ('1241', '110', '3', '崇明县');
INSERT INTO `lo_areas` VALUES ('1242', '111', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('1243', '111', '3', '玄武区');
INSERT INTO `lo_areas` VALUES ('1244', '111', '3', '白下区');
INSERT INTO `lo_areas` VALUES ('1245', '111', '3', '秦淮区');
INSERT INTO `lo_areas` VALUES ('1246', '111', '3', '建邺区');
INSERT INTO `lo_areas` VALUES ('1247', '111', '3', '鼓楼区');
INSERT INTO `lo_areas` VALUES ('1248', '111', '3', '下关区');
INSERT INTO `lo_areas` VALUES ('1249', '111', '3', '浦口区');
INSERT INTO `lo_areas` VALUES ('1250', '111', '3', '栖霞区');
INSERT INTO `lo_areas` VALUES ('1251', '111', '3', '雨花台区');
INSERT INTO `lo_areas` VALUES ('1252', '111', '3', '江宁区');
INSERT INTO `lo_areas` VALUES ('1253', '111', '3', '六合区');
INSERT INTO `lo_areas` VALUES ('1254', '111', '3', '溧水县');
INSERT INTO `lo_areas` VALUES ('1255', '111', '3', '高淳县');
INSERT INTO `lo_areas` VALUES ('1256', '112', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('1257', '112', '3', '崇安区');
INSERT INTO `lo_areas` VALUES ('1258', '112', '3', '南长区');
INSERT INTO `lo_areas` VALUES ('1259', '112', '3', '北塘区');
INSERT INTO `lo_areas` VALUES ('1260', '112', '3', '锡山区');
INSERT INTO `lo_areas` VALUES ('1261', '112', '3', '惠山区');
INSERT INTO `lo_areas` VALUES ('1262', '112', '3', '滨湖区');
INSERT INTO `lo_areas` VALUES ('1263', '112', '3', '江阴市');
INSERT INTO `lo_areas` VALUES ('1264', '112', '3', '宜兴市');
INSERT INTO `lo_areas` VALUES ('1265', '113', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('1266', '113', '3', '鼓楼区');
INSERT INTO `lo_areas` VALUES ('1267', '113', '3', '云龙区');
INSERT INTO `lo_areas` VALUES ('1268', '113', '3', '九里区');
INSERT INTO `lo_areas` VALUES ('1269', '113', '3', '贾汪区');
INSERT INTO `lo_areas` VALUES ('1270', '113', '3', '泉山区');
INSERT INTO `lo_areas` VALUES ('1271', '113', '3', '丰县');
INSERT INTO `lo_areas` VALUES ('1272', '113', '3', '沛县');
INSERT INTO `lo_areas` VALUES ('1273', '113', '3', '铜山县');
INSERT INTO `lo_areas` VALUES ('1274', '113', '3', '睢宁县');
INSERT INTO `lo_areas` VALUES ('1275', '113', '3', '新沂市');
INSERT INTO `lo_areas` VALUES ('1276', '113', '3', '邳州市');
INSERT INTO `lo_areas` VALUES ('1278', '114', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('1279', '114', '3', '天宁区');
INSERT INTO `lo_areas` VALUES ('1280', '114', '3', '钟楼区');
INSERT INTO `lo_areas` VALUES ('1281', '114', '3', '戚墅堰区');
INSERT INTO `lo_areas` VALUES ('1282', '114', '3', '新北区');
INSERT INTO `lo_areas` VALUES ('1283', '114', '3', '武进区');
INSERT INTO `lo_areas` VALUES ('1284', '114', '3', '溧阳市');
INSERT INTO `lo_areas` VALUES ('1285', '114', '3', '金坛市');
INSERT INTO `lo_areas` VALUES ('1286', '115', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('1287', '115', '3', '沧浪区');
INSERT INTO `lo_areas` VALUES ('1288', '115', '3', '平江区');
INSERT INTO `lo_areas` VALUES ('1289', '115', '3', '金阊区');
INSERT INTO `lo_areas` VALUES ('1290', '115', '3', '虎丘区');
INSERT INTO `lo_areas` VALUES ('1291', '115', '3', '吴中区');
INSERT INTO `lo_areas` VALUES ('1292', '115', '3', '相城区');
INSERT INTO `lo_areas` VALUES ('1293', '115', '3', '常熟市');
INSERT INTO `lo_areas` VALUES ('1294', '115', '3', '张家港市');
INSERT INTO `lo_areas` VALUES ('1295', '115', '3', '昆山市');
INSERT INTO `lo_areas` VALUES ('1296', '115', '3', '吴江市');
INSERT INTO `lo_areas` VALUES ('1297', '115', '3', '太仓市');
INSERT INTO `lo_areas` VALUES ('1298', '116', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('1299', '116', '3', '崇川区');
INSERT INTO `lo_areas` VALUES ('1300', '116', '3', '港闸区');
INSERT INTO `lo_areas` VALUES ('1301', '116', '3', '海安县');
INSERT INTO `lo_areas` VALUES ('1302', '116', '3', '如东县');
INSERT INTO `lo_areas` VALUES ('1303', '116', '3', '启东市');
INSERT INTO `lo_areas` VALUES ('1304', '116', '3', '如皋市');
INSERT INTO `lo_areas` VALUES ('1305', '116', '3', '通州市');
INSERT INTO `lo_areas` VALUES ('1306', '116', '3', '海门市');
INSERT INTO `lo_areas` VALUES ('1307', '117', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('1308', '117', '3', '连云区');
INSERT INTO `lo_areas` VALUES ('1309', '117', '3', '新浦区');
INSERT INTO `lo_areas` VALUES ('1310', '117', '3', '海州区');
INSERT INTO `lo_areas` VALUES ('1311', '117', '3', '赣榆县');
INSERT INTO `lo_areas` VALUES ('1312', '117', '3', '东海县');
INSERT INTO `lo_areas` VALUES ('1313', '117', '3', '灌云县');
INSERT INTO `lo_areas` VALUES ('1314', '117', '3', '灌南县');
INSERT INTO `lo_areas` VALUES ('1315', '118', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('1316', '118', '3', '清河区');
INSERT INTO `lo_areas` VALUES ('1317', '118', '3', '楚州区');
INSERT INTO `lo_areas` VALUES ('1318', '118', '3', '淮阴区');
INSERT INTO `lo_areas` VALUES ('1319', '118', '3', '清浦区');
INSERT INTO `lo_areas` VALUES ('1320', '118', '3', '涟水县');
INSERT INTO `lo_areas` VALUES ('1321', '118', '3', '洪泽县');
INSERT INTO `lo_areas` VALUES ('1322', '118', '3', '盱眙县');
INSERT INTO `lo_areas` VALUES ('1323', '118', '3', '金湖县');
INSERT INTO `lo_areas` VALUES ('1324', '119', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('1325', '119', '3', '亭湖区');
INSERT INTO `lo_areas` VALUES ('1326', '119', '3', '盐都区');
INSERT INTO `lo_areas` VALUES ('1327', '119', '3', '响水县');
INSERT INTO `lo_areas` VALUES ('1328', '119', '3', '滨海县');
INSERT INTO `lo_areas` VALUES ('1329', '119', '3', '阜宁县');
INSERT INTO `lo_areas` VALUES ('1330', '119', '3', '射阳县');
INSERT INTO `lo_areas` VALUES ('1331', '119', '3', '建湖县');
INSERT INTO `lo_areas` VALUES ('1332', '119', '3', '东台市');
INSERT INTO `lo_areas` VALUES ('1333', '119', '3', '大丰市');
INSERT INTO `lo_areas` VALUES ('1334', '120', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('1335', '120', '3', '广陵区');
INSERT INTO `lo_areas` VALUES ('1336', '120', '3', '邗江区');
INSERT INTO `lo_areas` VALUES ('1337', '120', '3', '郊区');
INSERT INTO `lo_areas` VALUES ('1338', '120', '3', '宝应县');
INSERT INTO `lo_areas` VALUES ('1339', '120', '3', '仪征市');
INSERT INTO `lo_areas` VALUES ('1340', '120', '3', '高邮市');
INSERT INTO `lo_areas` VALUES ('1341', '120', '3', '江都市');
INSERT INTO `lo_areas` VALUES ('1342', '121', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('1343', '121', '3', '京口区');
INSERT INTO `lo_areas` VALUES ('1344', '121', '3', '润州区');
INSERT INTO `lo_areas` VALUES ('1345', '121', '3', '丹徒区');
INSERT INTO `lo_areas` VALUES ('1346', '121', '3', '丹阳市');
INSERT INTO `lo_areas` VALUES ('1347', '121', '3', '扬中市');
INSERT INTO `lo_areas` VALUES ('1348', '121', '3', '句容市');
INSERT INTO `lo_areas` VALUES ('1349', '122', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('1350', '122', '3', '海陵区');
INSERT INTO `lo_areas` VALUES ('1351', '122', '3', '高港区');
INSERT INTO `lo_areas` VALUES ('1352', '122', '3', '兴化市');
INSERT INTO `lo_areas` VALUES ('1353', '122', '3', '靖江市');
INSERT INTO `lo_areas` VALUES ('1354', '122', '3', '泰兴市');
INSERT INTO `lo_areas` VALUES ('1355', '122', '3', '姜堰市');
INSERT INTO `lo_areas` VALUES ('1356', '123', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('1357', '123', '3', '宿城区');
INSERT INTO `lo_areas` VALUES ('1358', '123', '3', '宿豫区');
INSERT INTO `lo_areas` VALUES ('1359', '123', '3', '沭阳县');
INSERT INTO `lo_areas` VALUES ('1360', '123', '3', '泗阳县');
INSERT INTO `lo_areas` VALUES ('1361', '123', '3', '泗洪县');
INSERT INTO `lo_areas` VALUES ('1362', '124', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('1363', '124', '3', '上城区');
INSERT INTO `lo_areas` VALUES ('1364', '124', '3', '下城区');
INSERT INTO `lo_areas` VALUES ('1365', '124', '3', '江干区');
INSERT INTO `lo_areas` VALUES ('1366', '124', '3', '拱墅区');
INSERT INTO `lo_areas` VALUES ('1367', '124', '3', '西湖区');
INSERT INTO `lo_areas` VALUES ('1368', '124', '3', '滨江区');
INSERT INTO `lo_areas` VALUES ('1369', '124', '3', '萧山区');
INSERT INTO `lo_areas` VALUES ('1370', '124', '3', '余杭区');
INSERT INTO `lo_areas` VALUES ('1371', '124', '3', '桐庐县');
INSERT INTO `lo_areas` VALUES ('1372', '124', '3', '淳安县');
INSERT INTO `lo_areas` VALUES ('1373', '124', '3', '建德市');
INSERT INTO `lo_areas` VALUES ('1374', '124', '3', '富阳市');
INSERT INTO `lo_areas` VALUES ('1375', '124', '3', '临安市');
INSERT INTO `lo_areas` VALUES ('1376', '125', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('1377', '125', '3', '海曙区');
INSERT INTO `lo_areas` VALUES ('1378', '125', '3', '江东区');
INSERT INTO `lo_areas` VALUES ('1379', '125', '3', '江北区');
INSERT INTO `lo_areas` VALUES ('1380', '125', '3', '北仑区');
INSERT INTO `lo_areas` VALUES ('1381', '125', '3', '镇海区');
INSERT INTO `lo_areas` VALUES ('1382', '125', '3', '鄞州区');
INSERT INTO `lo_areas` VALUES ('1383', '125', '3', '象山县');
INSERT INTO `lo_areas` VALUES ('1384', '125', '3', '宁海县');
INSERT INTO `lo_areas` VALUES ('1385', '125', '3', '余姚市');
INSERT INTO `lo_areas` VALUES ('1386', '125', '3', '慈溪市');
INSERT INTO `lo_areas` VALUES ('1387', '125', '3', '奉化市');
INSERT INTO `lo_areas` VALUES ('1388', '126', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('1389', '126', '3', '鹿城区');
INSERT INTO `lo_areas` VALUES ('1390', '126', '3', '龙湾区');
INSERT INTO `lo_areas` VALUES ('1391', '126', '3', '瓯海区');
INSERT INTO `lo_areas` VALUES ('1392', '126', '3', '洞头县');
INSERT INTO `lo_areas` VALUES ('1393', '126', '3', '永嘉县');
INSERT INTO `lo_areas` VALUES ('1394', '126', '3', '平阳县');
INSERT INTO `lo_areas` VALUES ('1395', '126', '3', '苍南县');
INSERT INTO `lo_areas` VALUES ('1396', '126', '3', '文成县');
INSERT INTO `lo_areas` VALUES ('1397', '126', '3', '泰顺县');
INSERT INTO `lo_areas` VALUES ('1398', '126', '3', '瑞安市');
INSERT INTO `lo_areas` VALUES ('1399', '126', '3', '乐清市');
INSERT INTO `lo_areas` VALUES ('1400', '127', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('1401', '127', '3', '秀城区');
INSERT INTO `lo_areas` VALUES ('1402', '127', '3', '秀洲区');
INSERT INTO `lo_areas` VALUES ('1403', '127', '3', '嘉善县');
INSERT INTO `lo_areas` VALUES ('1404', '127', '3', '海盐县');
INSERT INTO `lo_areas` VALUES ('1405', '127', '3', '海宁市');
INSERT INTO `lo_areas` VALUES ('1406', '127', '3', '平湖市');
INSERT INTO `lo_areas` VALUES ('1407', '127', '3', '桐乡市');
INSERT INTO `lo_areas` VALUES ('1408', '128', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('1409', '128', '3', '吴兴区');
INSERT INTO `lo_areas` VALUES ('1410', '128', '3', '南浔区');
INSERT INTO `lo_areas` VALUES ('1411', '128', '3', '德清县');
INSERT INTO `lo_areas` VALUES ('1412', '128', '3', '长兴县');
INSERT INTO `lo_areas` VALUES ('1413', '128', '3', '安吉县');
INSERT INTO `lo_areas` VALUES ('1414', '129', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('1415', '129', '3', '越城区');
INSERT INTO `lo_areas` VALUES ('1416', '129', '3', '绍兴县');
INSERT INTO `lo_areas` VALUES ('1417', '129', '3', '新昌县');
INSERT INTO `lo_areas` VALUES ('1418', '129', '3', '诸暨市');
INSERT INTO `lo_areas` VALUES ('1419', '129', '3', '上虞市');
INSERT INTO `lo_areas` VALUES ('1420', '129', '3', '嵊州市');
INSERT INTO `lo_areas` VALUES ('1421', '130', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('1422', '130', '3', '婺城区');
INSERT INTO `lo_areas` VALUES ('1423', '130', '3', '金东区');
INSERT INTO `lo_areas` VALUES ('1424', '130', '3', '武义县');
INSERT INTO `lo_areas` VALUES ('1425', '130', '3', '浦江县');
INSERT INTO `lo_areas` VALUES ('1426', '130', '3', '磐安县');
INSERT INTO `lo_areas` VALUES ('1427', '130', '3', '兰溪市');
INSERT INTO `lo_areas` VALUES ('1428', '130', '3', '义乌市');
INSERT INTO `lo_areas` VALUES ('1429', '130', '3', '东阳市');
INSERT INTO `lo_areas` VALUES ('1430', '131', '3', '永康市');
INSERT INTO `lo_areas` VALUES ('1431', '131', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('1432', '131', '3', '柯城区');
INSERT INTO `lo_areas` VALUES ('1433', '131', '3', '衢江区');
INSERT INTO `lo_areas` VALUES ('1434', '131', '3', '常山县');
INSERT INTO `lo_areas` VALUES ('1435', '131', '3', '开化县');
INSERT INTO `lo_areas` VALUES ('1436', '131', '3', '龙游县');
INSERT INTO `lo_areas` VALUES ('1437', '131', '3', '江山市');
INSERT INTO `lo_areas` VALUES ('1438', '132', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('1439', '132', '3', '定海区');
INSERT INTO `lo_areas` VALUES ('1440', '132', '3', '普陀区');
INSERT INTO `lo_areas` VALUES ('1441', '132', '3', '岱山县');
INSERT INTO `lo_areas` VALUES ('1442', '132', '3', '嵊泗县');
INSERT INTO `lo_areas` VALUES ('1443', '133', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('1444', '133', '3', '椒江区');
INSERT INTO `lo_areas` VALUES ('1445', '133', '3', '黄岩区');
INSERT INTO `lo_areas` VALUES ('1446', '133', '3', '路桥区');
INSERT INTO `lo_areas` VALUES ('1447', '133', '3', '玉环县');
INSERT INTO `lo_areas` VALUES ('1448', '133', '3', '三门县');
INSERT INTO `lo_areas` VALUES ('1449', '133', '3', '天台县');
INSERT INTO `lo_areas` VALUES ('1450', '133', '3', '仙居县');
INSERT INTO `lo_areas` VALUES ('1451', '133', '3', '温岭市');
INSERT INTO `lo_areas` VALUES ('1452', '133', '3', '临海市');
INSERT INTO `lo_areas` VALUES ('1453', '134', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('1454', '134', '3', '莲都区');
INSERT INTO `lo_areas` VALUES ('1455', '134', '3', '青田县');
INSERT INTO `lo_areas` VALUES ('1456', '134', '3', '缙云县');
INSERT INTO `lo_areas` VALUES ('1457', '134', '3', '遂昌县');
INSERT INTO `lo_areas` VALUES ('1458', '134', '3', '松阳县');
INSERT INTO `lo_areas` VALUES ('1459', '134', '3', '云和县');
INSERT INTO `lo_areas` VALUES ('1460', '134', '3', '庆元县');
INSERT INTO `lo_areas` VALUES ('1461', '134', '3', '景宁畲族自治县');
INSERT INTO `lo_areas` VALUES ('1462', '134', '3', '龙泉市');
INSERT INTO `lo_areas` VALUES ('1463', '135', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('1464', '135', '3', '瑶海区');
INSERT INTO `lo_areas` VALUES ('1465', '135', '3', '庐阳区');
INSERT INTO `lo_areas` VALUES ('1466', '135', '3', '蜀山区');
INSERT INTO `lo_areas` VALUES ('1467', '135', '3', '包河区');
INSERT INTO `lo_areas` VALUES ('1468', '135', '3', '长丰县');
INSERT INTO `lo_areas` VALUES ('1469', '135', '3', '肥东县');
INSERT INTO `lo_areas` VALUES ('1470', '135', '3', '肥西县');
INSERT INTO `lo_areas` VALUES ('1471', '136', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('1472', '136', '3', '镜湖区');
INSERT INTO `lo_areas` VALUES ('1473', '136', '3', '马塘区');
INSERT INTO `lo_areas` VALUES ('1474', '136', '3', '新芜区');
INSERT INTO `lo_areas` VALUES ('1475', '136', '3', '鸠江区');
INSERT INTO `lo_areas` VALUES ('1476', '136', '3', '芜湖县');
INSERT INTO `lo_areas` VALUES ('1477', '136', '3', '繁昌县');
INSERT INTO `lo_areas` VALUES ('1478', '136', '3', '南陵县');
INSERT INTO `lo_areas` VALUES ('1479', '137', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('1480', '137', '3', '龙子湖区');
INSERT INTO `lo_areas` VALUES ('1481', '137', '3', '蚌山区');
INSERT INTO `lo_areas` VALUES ('1482', '137', '3', '禹会区');
INSERT INTO `lo_areas` VALUES ('1483', '137', '3', '淮上区');
INSERT INTO `lo_areas` VALUES ('1484', '137', '3', '怀远县');
INSERT INTO `lo_areas` VALUES ('1485', '137', '3', '五河县');
INSERT INTO `lo_areas` VALUES ('1486', '137', '3', '固镇县');
INSERT INTO `lo_areas` VALUES ('1487', '138', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('1488', '138', '3', '大通区');
INSERT INTO `lo_areas` VALUES ('1489', '138', '3', '田家庵区');
INSERT INTO `lo_areas` VALUES ('1490', '138', '3', '谢家集区');
INSERT INTO `lo_areas` VALUES ('1491', '138', '3', '八公山区');
INSERT INTO `lo_areas` VALUES ('1492', '138', '3', '潘集区');
INSERT INTO `lo_areas` VALUES ('1493', '138', '3', '凤台县');
INSERT INTO `lo_areas` VALUES ('1494', '139', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('1495', '139', '3', '金家庄区');
INSERT INTO `lo_areas` VALUES ('1496', '139', '3', '花山区');
INSERT INTO `lo_areas` VALUES ('1497', '139', '3', '雨山区');
INSERT INTO `lo_areas` VALUES ('1498', '139', '3', '当涂县');
INSERT INTO `lo_areas` VALUES ('1499', '140', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('1500', '140', '3', '杜集区');
INSERT INTO `lo_areas` VALUES ('1501', '140', '3', '相山区');
INSERT INTO `lo_areas` VALUES ('1502', '140', '3', '烈山区');
INSERT INTO `lo_areas` VALUES ('1503', '140', '3', '濉溪县');
INSERT INTO `lo_areas` VALUES ('1504', '141', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('1505', '141', '3', '铜官山区');
INSERT INTO `lo_areas` VALUES ('1506', '141', '3', '狮子山区');
INSERT INTO `lo_areas` VALUES ('1507', '141', '3', '郊区');
INSERT INTO `lo_areas` VALUES ('1508', '141', '3', '铜陵县');
INSERT INTO `lo_areas` VALUES ('1509', '142', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('1510', '142', '3', '迎江区');
INSERT INTO `lo_areas` VALUES ('1511', '142', '3', '大观区');
INSERT INTO `lo_areas` VALUES ('1512', '142', '3', '郊区');
INSERT INTO `lo_areas` VALUES ('1513', '142', '3', '怀宁县');
INSERT INTO `lo_areas` VALUES ('1514', '142', '3', '枞阳县');
INSERT INTO `lo_areas` VALUES ('1515', '142', '3', '潜山县');
INSERT INTO `lo_areas` VALUES ('1516', '142', '3', '太湖县');
INSERT INTO `lo_areas` VALUES ('1517', '142', '3', '宿松县');
INSERT INTO `lo_areas` VALUES ('1518', '142', '3', '望江县');
INSERT INTO `lo_areas` VALUES ('1519', '142', '3', '岳西县');
INSERT INTO `lo_areas` VALUES ('1520', '142', '3', '桐城市');
INSERT INTO `lo_areas` VALUES ('1521', '143', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('1522', '143', '3', '屯溪区');
INSERT INTO `lo_areas` VALUES ('1523', '143', '3', '黄山区');
INSERT INTO `lo_areas` VALUES ('1524', '143', '3', '徽州区');
INSERT INTO `lo_areas` VALUES ('1525', '143', '3', '歙县');
INSERT INTO `lo_areas` VALUES ('1526', '143', '3', '休宁县');
INSERT INTO `lo_areas` VALUES ('1527', '143', '3', '黟县');
INSERT INTO `lo_areas` VALUES ('1528', '143', '3', '祁门县');
INSERT INTO `lo_areas` VALUES ('1529', '144', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('1530', '144', '3', '琅琊区');
INSERT INTO `lo_areas` VALUES ('1531', '144', '3', '南谯区');
INSERT INTO `lo_areas` VALUES ('1532', '144', '3', '来安县');
INSERT INTO `lo_areas` VALUES ('1533', '144', '3', '全椒县');
INSERT INTO `lo_areas` VALUES ('1534', '144', '3', '定远县');
INSERT INTO `lo_areas` VALUES ('1535', '144', '3', '凤阳县');
INSERT INTO `lo_areas` VALUES ('1536', '144', '3', '天长市');
INSERT INTO `lo_areas` VALUES ('1537', '144', '3', '明光市');
INSERT INTO `lo_areas` VALUES ('1538', '145', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('1539', '145', '3', '颍州区');
INSERT INTO `lo_areas` VALUES ('1540', '145', '3', '颍东区');
INSERT INTO `lo_areas` VALUES ('1541', '145', '3', '颍泉区');
INSERT INTO `lo_areas` VALUES ('1542', '145', '3', '临泉县');
INSERT INTO `lo_areas` VALUES ('1543', '145', '3', '太和县');
INSERT INTO `lo_areas` VALUES ('1544', '145', '3', '阜南县');
INSERT INTO `lo_areas` VALUES ('1545', '145', '3', '颍上县');
INSERT INTO `lo_areas` VALUES ('1546', '145', '3', '界首市');
INSERT INTO `lo_areas` VALUES ('1547', '146', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('1548', '146', '3', '墉桥区');
INSERT INTO `lo_areas` VALUES ('1549', '146', '3', '砀山县');
INSERT INTO `lo_areas` VALUES ('1550', '146', '3', '萧县');
INSERT INTO `lo_areas` VALUES ('1551', '146', '3', '灵璧县');
INSERT INTO `lo_areas` VALUES ('1552', '146', '3', '泗县');
INSERT INTO `lo_areas` VALUES ('1553', '147', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('1554', '147', '3', '居巢区');
INSERT INTO `lo_areas` VALUES ('1555', '147', '3', '庐江县');
INSERT INTO `lo_areas` VALUES ('1556', '147', '3', '无为县');
INSERT INTO `lo_areas` VALUES ('1557', '147', '3', '含山县');
INSERT INTO `lo_areas` VALUES ('1558', '147', '3', '和县');
INSERT INTO `lo_areas` VALUES ('1559', '148', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('1560', '148', '3', '金安区');
INSERT INTO `lo_areas` VALUES ('1561', '148', '3', '裕安区');
INSERT INTO `lo_areas` VALUES ('1562', '148', '3', '寿县');
INSERT INTO `lo_areas` VALUES ('1563', '148', '3', '霍邱县');
INSERT INTO `lo_areas` VALUES ('1564', '148', '3', '舒城县');
INSERT INTO `lo_areas` VALUES ('1565', '148', '3', '金寨县');
INSERT INTO `lo_areas` VALUES ('1566', '148', '3', '霍山县');
INSERT INTO `lo_areas` VALUES ('1567', '149', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('1568', '149', '3', '谯城区');
INSERT INTO `lo_areas` VALUES ('1569', '149', '3', '涡阳县');
INSERT INTO `lo_areas` VALUES ('1570', '149', '3', '蒙城县');
INSERT INTO `lo_areas` VALUES ('1571', '149', '3', '利辛县');
INSERT INTO `lo_areas` VALUES ('1572', '150', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('1573', '150', '3', '贵池区');
INSERT INTO `lo_areas` VALUES ('1574', '150', '3', '东至县');
INSERT INTO `lo_areas` VALUES ('1575', '150', '3', '石台县');
INSERT INTO `lo_areas` VALUES ('1576', '150', '3', '青阳县');
INSERT INTO `lo_areas` VALUES ('1577', '150', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('1578', '150', '3', '贵池区');
INSERT INTO `lo_areas` VALUES ('1579', '150', '3', '东至县');
INSERT INTO `lo_areas` VALUES ('1580', '150', '3', '石台县');
INSERT INTO `lo_areas` VALUES ('1581', '150', '3', '青阳县');
INSERT INTO `lo_areas` VALUES ('1582', '151', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('1583', '151', '3', '宣州区');
INSERT INTO `lo_areas` VALUES ('1584', '151', '3', '郎溪县');
INSERT INTO `lo_areas` VALUES ('1585', '151', '3', '广德县');
INSERT INTO `lo_areas` VALUES ('1586', '151', '3', '泾县');
INSERT INTO `lo_areas` VALUES ('1587', '151', '3', '绩溪县');
INSERT INTO `lo_areas` VALUES ('1588', '151', '3', '旌德县');
INSERT INTO `lo_areas` VALUES ('1589', '151', '3', '宁国市');
INSERT INTO `lo_areas` VALUES ('1590', '152', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('1591', '152', '3', '鼓楼区');
INSERT INTO `lo_areas` VALUES ('1592', '152', '3', '台江区');
INSERT INTO `lo_areas` VALUES ('1593', '152', '3', '仓山区');
INSERT INTO `lo_areas` VALUES ('1594', '152', '3', '马尾区');
INSERT INTO `lo_areas` VALUES ('1595', '152', '3', '晋安区');
INSERT INTO `lo_areas` VALUES ('1596', '152', '3', '闽侯县');
INSERT INTO `lo_areas` VALUES ('1597', '152', '3', '连江县');
INSERT INTO `lo_areas` VALUES ('1598', '152', '3', '罗源县');
INSERT INTO `lo_areas` VALUES ('1599', '152', '3', '闽清县');
INSERT INTO `lo_areas` VALUES ('1600', '152', '3', '永泰县');
INSERT INTO `lo_areas` VALUES ('1601', '152', '3', '平潭县');
INSERT INTO `lo_areas` VALUES ('1602', '152', '3', '福清市');
INSERT INTO `lo_areas` VALUES ('1603', '152', '3', '长乐市');
INSERT INTO `lo_areas` VALUES ('1604', '153', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('1605', '153', '3', '思明区');
INSERT INTO `lo_areas` VALUES ('1606', '153', '3', '海沧区');
INSERT INTO `lo_areas` VALUES ('1607', '153', '3', '湖里区');
INSERT INTO `lo_areas` VALUES ('1608', '153', '3', '集美区');
INSERT INTO `lo_areas` VALUES ('1609', '153', '3', '同安区');
INSERT INTO `lo_areas` VALUES ('1610', '153', '3', '翔安区');
INSERT INTO `lo_areas` VALUES ('1611', '154', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('1612', '154', '3', '城厢区');
INSERT INTO `lo_areas` VALUES ('1613', '154', '3', '涵江区');
INSERT INTO `lo_areas` VALUES ('1614', '154', '3', '荔城区');
INSERT INTO `lo_areas` VALUES ('1615', '154', '3', '秀屿区');
INSERT INTO `lo_areas` VALUES ('1616', '154', '3', '仙游县');
INSERT INTO `lo_areas` VALUES ('1617', '155', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('1618', '155', '3', '梅列区');
INSERT INTO `lo_areas` VALUES ('1619', '155', '3', '三元区');
INSERT INTO `lo_areas` VALUES ('1620', '155', '3', '明溪县');
INSERT INTO `lo_areas` VALUES ('1621', '155', '3', '清流县');
INSERT INTO `lo_areas` VALUES ('1622', '155', '3', '宁化县');
INSERT INTO `lo_areas` VALUES ('1623', '155', '3', '大田县');
INSERT INTO `lo_areas` VALUES ('1624', '155', '3', '尤溪县');
INSERT INTO `lo_areas` VALUES ('1625', '155', '3', '沙县');
INSERT INTO `lo_areas` VALUES ('1626', '155', '3', '将乐县');
INSERT INTO `lo_areas` VALUES ('1627', '155', '3', '泰宁县');
INSERT INTO `lo_areas` VALUES ('1628', '155', '3', '建宁县');
INSERT INTO `lo_areas` VALUES ('1629', '155', '3', '永安市');
INSERT INTO `lo_areas` VALUES ('1630', '156', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('1631', '156', '3', '鲤城区');
INSERT INTO `lo_areas` VALUES ('1632', '156', '3', '丰泽区');
INSERT INTO `lo_areas` VALUES ('1633', '156', '3', '洛江区');
INSERT INTO `lo_areas` VALUES ('1634', '156', '3', '泉港区');
INSERT INTO `lo_areas` VALUES ('1635', '156', '3', '惠安县');
INSERT INTO `lo_areas` VALUES ('1636', '156', '3', '安溪县');
INSERT INTO `lo_areas` VALUES ('1637', '156', '3', '永春县');
INSERT INTO `lo_areas` VALUES ('1638', '156', '3', '德化县');
INSERT INTO `lo_areas` VALUES ('1639', '156', '3', '金门县');
INSERT INTO `lo_areas` VALUES ('1640', '156', '3', '石狮市');
INSERT INTO `lo_areas` VALUES ('1641', '156', '3', '晋江市');
INSERT INTO `lo_areas` VALUES ('1642', '156', '3', '南安市');
INSERT INTO `lo_areas` VALUES ('1643', '157', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('1644', '157', '3', '芗城区');
INSERT INTO `lo_areas` VALUES ('1645', '157', '3', '龙文区');
INSERT INTO `lo_areas` VALUES ('1646', '157', '3', '云霄县');
INSERT INTO `lo_areas` VALUES ('1647', '157', '3', '漳浦县');
INSERT INTO `lo_areas` VALUES ('1648', '157', '3', '诏安县');
INSERT INTO `lo_areas` VALUES ('1649', '157', '3', '长泰县');
INSERT INTO `lo_areas` VALUES ('1650', '157', '3', '东山县');
INSERT INTO `lo_areas` VALUES ('1651', '157', '3', '南靖县');
INSERT INTO `lo_areas` VALUES ('1652', '157', '3', '平和县');
INSERT INTO `lo_areas` VALUES ('1653', '157', '3', '华安县');
INSERT INTO `lo_areas` VALUES ('1654', '157', '3', '龙海市');
INSERT INTO `lo_areas` VALUES ('1655', '158', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('1656', '158', '3', '延平区');
INSERT INTO `lo_areas` VALUES ('1657', '158', '3', '顺昌县');
INSERT INTO `lo_areas` VALUES ('1658', '158', '3', '浦城县');
INSERT INTO `lo_areas` VALUES ('1659', '158', '3', '光泽县');
INSERT INTO `lo_areas` VALUES ('1660', '158', '3', '松溪县');
INSERT INTO `lo_areas` VALUES ('1661', '158', '3', '政和县');
INSERT INTO `lo_areas` VALUES ('1662', '158', '3', '邵武市');
INSERT INTO `lo_areas` VALUES ('1663', '158', '3', '武夷山市');
INSERT INTO `lo_areas` VALUES ('1664', '158', '3', '建瓯市');
INSERT INTO `lo_areas` VALUES ('1665', '158', '3', '建阳市');
INSERT INTO `lo_areas` VALUES ('1666', '159', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('1667', '159', '3', '新罗区');
INSERT INTO `lo_areas` VALUES ('1668', '159', '3', '长汀县');
INSERT INTO `lo_areas` VALUES ('1669', '159', '3', '永定县');
INSERT INTO `lo_areas` VALUES ('1670', '159', '3', '上杭县');
INSERT INTO `lo_areas` VALUES ('1671', '159', '3', '武平县');
INSERT INTO `lo_areas` VALUES ('1672', '159', '3', '连城县');
INSERT INTO `lo_areas` VALUES ('1673', '159', '3', '漳平市');
INSERT INTO `lo_areas` VALUES ('1674', '160', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('1675', '160', '3', '蕉城区');
INSERT INTO `lo_areas` VALUES ('1676', '160', '3', '霞浦县');
INSERT INTO `lo_areas` VALUES ('1677', '160', '3', '古田县');
INSERT INTO `lo_areas` VALUES ('1678', '160', '3', '屏南县');
INSERT INTO `lo_areas` VALUES ('1679', '160', '3', '寿宁县');
INSERT INTO `lo_areas` VALUES ('1680', '160', '3', '周宁县');
INSERT INTO `lo_areas` VALUES ('1681', '160', '3', '柘荣县');
INSERT INTO `lo_areas` VALUES ('1682', '160', '3', '福安市');
INSERT INTO `lo_areas` VALUES ('1683', '160', '3', '福鼎市');
INSERT INTO `lo_areas` VALUES ('1684', '161', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('1685', '161', '3', '东湖区');
INSERT INTO `lo_areas` VALUES ('1686', '161', '3', '西湖区');
INSERT INTO `lo_areas` VALUES ('1687', '161', '3', '青云谱区');
INSERT INTO `lo_areas` VALUES ('1688', '161', '3', '湾里区');
INSERT INTO `lo_areas` VALUES ('1689', '161', '3', '青山湖区');
INSERT INTO `lo_areas` VALUES ('1690', '161', '3', '南昌县');
INSERT INTO `lo_areas` VALUES ('1691', '161', '3', '新建县');
INSERT INTO `lo_areas` VALUES ('1692', '161', '3', '安义县');
INSERT INTO `lo_areas` VALUES ('1693', '161', '3', '进贤县');
INSERT INTO `lo_areas` VALUES ('1694', '162', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('1695', '162', '3', '昌江区');
INSERT INTO `lo_areas` VALUES ('1696', '162', '3', '珠山区');
INSERT INTO `lo_areas` VALUES ('1697', '162', '3', '浮梁县');
INSERT INTO `lo_areas` VALUES ('1698', '162', '3', '乐平市');
INSERT INTO `lo_areas` VALUES ('1699', '163', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('1700', '163', '3', '安源区');
INSERT INTO `lo_areas` VALUES ('1701', '163', '3', '湘东区');
INSERT INTO `lo_areas` VALUES ('1702', '163', '3', '莲花县');
INSERT INTO `lo_areas` VALUES ('1703', '163', '3', '上栗县');
INSERT INTO `lo_areas` VALUES ('1704', '163', '3', '芦溪县');
INSERT INTO `lo_areas` VALUES ('1718', '164', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('1719', '164', '3', '庐山区');
INSERT INTO `lo_areas` VALUES ('1720', '164', '3', '浔阳区');
INSERT INTO `lo_areas` VALUES ('1721', '164', '3', '九江县');
INSERT INTO `lo_areas` VALUES ('1722', '164', '3', '武宁县');
INSERT INTO `lo_areas` VALUES ('1723', '164', '3', '修水县');
INSERT INTO `lo_areas` VALUES ('1724', '164', '3', '永修县');
INSERT INTO `lo_areas` VALUES ('1725', '164', '3', '德安县');
INSERT INTO `lo_areas` VALUES ('1726', '164', '3', '星子县');
INSERT INTO `lo_areas` VALUES ('1727', '164', '3', '都昌县');
INSERT INTO `lo_areas` VALUES ('1728', '164', '3', '湖口县');
INSERT INTO `lo_areas` VALUES ('1729', '164', '3', '彭泽县');
INSERT INTO `lo_areas` VALUES ('1730', '164', '3', '瑞昌市');
INSERT INTO `lo_areas` VALUES ('1731', '165', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('1732', '165', '3', '渝水区');
INSERT INTO `lo_areas` VALUES ('1733', '165', '3', '分宜县');
INSERT INTO `lo_areas` VALUES ('1734', '166', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('1735', '166', '3', '月湖区');
INSERT INTO `lo_areas` VALUES ('1736', '166', '3', '余江县');
INSERT INTO `lo_areas` VALUES ('1737', '166', '3', '贵溪市');
INSERT INTO `lo_areas` VALUES ('1738', '167', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('1739', '167', '3', '章贡区');
INSERT INTO `lo_areas` VALUES ('1740', '167', '3', '赣县');
INSERT INTO `lo_areas` VALUES ('1741', '167', '3', '信丰县');
INSERT INTO `lo_areas` VALUES ('1742', '167', '3', '大余县');
INSERT INTO `lo_areas` VALUES ('1743', '167', '3', '上犹县');
INSERT INTO `lo_areas` VALUES ('1744', '167', '3', '崇义县');
INSERT INTO `lo_areas` VALUES ('1745', '167', '3', '安远县');
INSERT INTO `lo_areas` VALUES ('1746', '167', '3', '龙南县');
INSERT INTO `lo_areas` VALUES ('1747', '167', '3', '定南县');
INSERT INTO `lo_areas` VALUES ('1748', '167', '3', '全南县');
INSERT INTO `lo_areas` VALUES ('1749', '167', '3', '宁都县');
INSERT INTO `lo_areas` VALUES ('1750', '167', '3', '于都县');
INSERT INTO `lo_areas` VALUES ('1751', '167', '3', '兴国县');
INSERT INTO `lo_areas` VALUES ('1752', '167', '3', '会昌县');
INSERT INTO `lo_areas` VALUES ('1753', '167', '3', '寻乌县');
INSERT INTO `lo_areas` VALUES ('1754', '167', '3', '石城县');
INSERT INTO `lo_areas` VALUES ('1755', '167', '3', '瑞金市');
INSERT INTO `lo_areas` VALUES ('1756', '167', '3', '南康市');
INSERT INTO `lo_areas` VALUES ('1757', '167', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('1758', '167', '3', '章贡区');
INSERT INTO `lo_areas` VALUES ('1759', '167', '3', '赣县');
INSERT INTO `lo_areas` VALUES ('1760', '167', '3', '信丰县');
INSERT INTO `lo_areas` VALUES ('1761', '167', '3', '大余县');
INSERT INTO `lo_areas` VALUES ('1762', '167', '3', '上犹县');
INSERT INTO `lo_areas` VALUES ('1763', '167', '3', '崇义县');
INSERT INTO `lo_areas` VALUES ('1764', '167', '3', '安远县');
INSERT INTO `lo_areas` VALUES ('1765', '167', '3', '龙南县');
INSERT INTO `lo_areas` VALUES ('1766', '167', '3', '定南县');
INSERT INTO `lo_areas` VALUES ('1767', '167', '3', '全南县');
INSERT INTO `lo_areas` VALUES ('1768', '167', '3', '宁都县');
INSERT INTO `lo_areas` VALUES ('1769', '167', '3', '于都县');
INSERT INTO `lo_areas` VALUES ('1770', '167', '3', '兴国县');
INSERT INTO `lo_areas` VALUES ('1771', '167', '3', '会昌县');
INSERT INTO `lo_areas` VALUES ('1772', '167', '3', '寻乌县');
INSERT INTO `lo_areas` VALUES ('1773', '167', '3', '石城县');
INSERT INTO `lo_areas` VALUES ('1774', '167', '3', '瑞金市');
INSERT INTO `lo_areas` VALUES ('1775', '167', '3', '南康市');
INSERT INTO `lo_areas` VALUES ('1776', '168', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('1777', '168', '3', '吉州区');
INSERT INTO `lo_areas` VALUES ('1778', '168', '3', '青原区');
INSERT INTO `lo_areas` VALUES ('1779', '168', '3', '吉安县');
INSERT INTO `lo_areas` VALUES ('1780', '168', '3', '吉水县');
INSERT INTO `lo_areas` VALUES ('1781', '168', '3', '峡江县');
INSERT INTO `lo_areas` VALUES ('1782', '168', '3', '新干县');
INSERT INTO `lo_areas` VALUES ('1783', '168', '3', '永丰县');
INSERT INTO `lo_areas` VALUES ('1784', '168', '3', '泰和县');
INSERT INTO `lo_areas` VALUES ('1785', '168', '3', '遂川县');
INSERT INTO `lo_areas` VALUES ('1786', '168', '3', '万安县');
INSERT INTO `lo_areas` VALUES ('1787', '168', '3', '安福县');
INSERT INTO `lo_areas` VALUES ('1788', '168', '3', '永新县');
INSERT INTO `lo_areas` VALUES ('1789', '168', '3', '井冈山市');
INSERT INTO `lo_areas` VALUES ('1790', '169', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('1791', '169', '3', '袁州区');
INSERT INTO `lo_areas` VALUES ('1792', '169', '3', '奉新县');
INSERT INTO `lo_areas` VALUES ('1793', '169', '3', '万载县');
INSERT INTO `lo_areas` VALUES ('1794', '169', '3', '上高县');
INSERT INTO `lo_areas` VALUES ('1795', '169', '3', '宜丰县');
INSERT INTO `lo_areas` VALUES ('1796', '169', '3', '靖安县');
INSERT INTO `lo_areas` VALUES ('1797', '169', '3', '铜鼓县');
INSERT INTO `lo_areas` VALUES ('1798', '169', '3', '丰城市');
INSERT INTO `lo_areas` VALUES ('1799', '169', '3', '樟树市');
INSERT INTO `lo_areas` VALUES ('1800', '169', '3', '高安市');
INSERT INTO `lo_areas` VALUES ('1801', '170', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('1802', '170', '3', '临川区');
INSERT INTO `lo_areas` VALUES ('1803', '170', '3', '南城县');
INSERT INTO `lo_areas` VALUES ('1804', '170', '3', '黎川县');
INSERT INTO `lo_areas` VALUES ('1805', '170', '3', '南丰县');
INSERT INTO `lo_areas` VALUES ('1806', '170', '3', '崇仁县');
INSERT INTO `lo_areas` VALUES ('1807', '170', '3', '乐安县');
INSERT INTO `lo_areas` VALUES ('1808', '170', '3', '宜黄县');
INSERT INTO `lo_areas` VALUES ('1809', '170', '3', '金溪县');
INSERT INTO `lo_areas` VALUES ('1810', '170', '3', '资溪县');
INSERT INTO `lo_areas` VALUES ('1811', '170', '3', '东乡县');
INSERT INTO `lo_areas` VALUES ('1812', '170', '3', '广昌县');
INSERT INTO `lo_areas` VALUES ('1813', '171', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('1814', '171', '3', '信州区');
INSERT INTO `lo_areas` VALUES ('1815', '171', '3', '上饶县');
INSERT INTO `lo_areas` VALUES ('1816', '171', '3', '广丰县');
INSERT INTO `lo_areas` VALUES ('1817', '171', '3', '玉山县');
INSERT INTO `lo_areas` VALUES ('1818', '171', '3', '铅山县');
INSERT INTO `lo_areas` VALUES ('1819', '171', '3', '横峰县');
INSERT INTO `lo_areas` VALUES ('1820', '171', '3', '弋阳县');
INSERT INTO `lo_areas` VALUES ('1821', '171', '3', '余干县');
INSERT INTO `lo_areas` VALUES ('1822', '171', '3', '鄱阳县');
INSERT INTO `lo_areas` VALUES ('1823', '171', '3', '万年县');
INSERT INTO `lo_areas` VALUES ('1824', '171', '3', '婺源县');
INSERT INTO `lo_areas` VALUES ('1825', '171', '3', '德兴市');
INSERT INTO `lo_areas` VALUES ('1826', '172', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('1827', '172', '3', '历下区');
INSERT INTO `lo_areas` VALUES ('1828', '172', '3', '市中区');
INSERT INTO `lo_areas` VALUES ('1829', '172', '3', '槐荫区');
INSERT INTO `lo_areas` VALUES ('1830', '172', '3', '天桥区');
INSERT INTO `lo_areas` VALUES ('1831', '172', '3', '历城区');
INSERT INTO `lo_areas` VALUES ('1832', '172', '3', '长清区');
INSERT INTO `lo_areas` VALUES ('1833', '172', '3', '平阴县');
INSERT INTO `lo_areas` VALUES ('1834', '172', '3', '济阳县');
INSERT INTO `lo_areas` VALUES ('1835', '172', '3', '商河县');
INSERT INTO `lo_areas` VALUES ('1836', '172', '3', '章丘市');
INSERT INTO `lo_areas` VALUES ('1837', '173', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('1838', '173', '3', '市南区');
INSERT INTO `lo_areas` VALUES ('1839', '173', '3', '市北区');
INSERT INTO `lo_areas` VALUES ('1840', '173', '3', '四方区');
INSERT INTO `lo_areas` VALUES ('1841', '173', '3', '黄岛区');
INSERT INTO `lo_areas` VALUES ('1842', '173', '3', '崂山区');
INSERT INTO `lo_areas` VALUES ('1843', '173', '3', '李沧区');
INSERT INTO `lo_areas` VALUES ('1844', '173', '3', '城阳区');
INSERT INTO `lo_areas` VALUES ('1845', '173', '3', '胶州市');
INSERT INTO `lo_areas` VALUES ('1846', '173', '3', '即墨市');
INSERT INTO `lo_areas` VALUES ('1847', '173', '3', '平度市');
INSERT INTO `lo_areas` VALUES ('1848', '173', '3', '胶南市');
INSERT INTO `lo_areas` VALUES ('1849', '173', '3', '莱西市');
INSERT INTO `lo_areas` VALUES ('1850', '174', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('1851', '174', '3', '淄川区');
INSERT INTO `lo_areas` VALUES ('1852', '174', '3', '张店区');
INSERT INTO `lo_areas` VALUES ('1853', '174', '3', '博山区');
INSERT INTO `lo_areas` VALUES ('1854', '174', '3', '临淄区');
INSERT INTO `lo_areas` VALUES ('1855', '174', '3', '周村区');
INSERT INTO `lo_areas` VALUES ('1856', '174', '3', '桓台县');
INSERT INTO `lo_areas` VALUES ('1857', '174', '3', '高青县');
INSERT INTO `lo_areas` VALUES ('1858', '174', '3', '沂源县');
INSERT INTO `lo_areas` VALUES ('1859', '175', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('1860', '175', '3', '市中区');
INSERT INTO `lo_areas` VALUES ('1861', '175', '3', '薛城区');
INSERT INTO `lo_areas` VALUES ('1862', '175', '3', '峄城区');
INSERT INTO `lo_areas` VALUES ('1863', '175', '3', '台儿庄区');
INSERT INTO `lo_areas` VALUES ('1864', '175', '3', '山亭区');
INSERT INTO `lo_areas` VALUES ('1865', '175', '3', '滕州市');
INSERT INTO `lo_areas` VALUES ('1866', '176', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('1867', '176', '3', '东营区');
INSERT INTO `lo_areas` VALUES ('1868', '176', '3', '河口区');
INSERT INTO `lo_areas` VALUES ('1869', '176', '3', '垦利县');
INSERT INTO `lo_areas` VALUES ('1870', '176', '3', '利津县');
INSERT INTO `lo_areas` VALUES ('1871', '176', '3', '广饶县');
INSERT INTO `lo_areas` VALUES ('1872', '177', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('1873', '177', '3', '芝罘区');
INSERT INTO `lo_areas` VALUES ('1874', '177', '3', '福山区');
INSERT INTO `lo_areas` VALUES ('1875', '177', '3', '牟平区');
INSERT INTO `lo_areas` VALUES ('1876', '177', '3', '莱山区');
INSERT INTO `lo_areas` VALUES ('1877', '177', '3', '长岛县');
INSERT INTO `lo_areas` VALUES ('1878', '177', '3', '龙口市');
INSERT INTO `lo_areas` VALUES ('1879', '177', '3', '莱阳市');
INSERT INTO `lo_areas` VALUES ('1880', '177', '3', '莱州市');
INSERT INTO `lo_areas` VALUES ('1881', '177', '3', '蓬莱市');
INSERT INTO `lo_areas` VALUES ('1882', '177', '3', '招远市');
INSERT INTO `lo_areas` VALUES ('1883', '177', '3', '栖霞市');
INSERT INTO `lo_areas` VALUES ('1884', '177', '3', '海阳市');
INSERT INTO `lo_areas` VALUES ('1885', '178', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('1886', '178', '3', '潍城区');
INSERT INTO `lo_areas` VALUES ('1887', '178', '3', '寒亭区');
INSERT INTO `lo_areas` VALUES ('1888', '178', '3', '坊子区');
INSERT INTO `lo_areas` VALUES ('1889', '178', '3', '奎文区');
INSERT INTO `lo_areas` VALUES ('1890', '178', '3', '临朐县');
INSERT INTO `lo_areas` VALUES ('1891', '178', '3', '昌乐县');
INSERT INTO `lo_areas` VALUES ('1892', '178', '3', '青州市');
INSERT INTO `lo_areas` VALUES ('1893', '178', '3', '诸城市');
INSERT INTO `lo_areas` VALUES ('1894', '178', '3', '寿光市');
INSERT INTO `lo_areas` VALUES ('1895', '178', '3', '安丘市');
INSERT INTO `lo_areas` VALUES ('1896', '178', '3', '高密市');
INSERT INTO `lo_areas` VALUES ('1897', '178', '3', '昌邑市');
INSERT INTO `lo_areas` VALUES ('1898', '179', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('1899', '179', '3', '市中区');
INSERT INTO `lo_areas` VALUES ('1900', '179', '3', '任城区');
INSERT INTO `lo_areas` VALUES ('1901', '179', '3', '微山县');
INSERT INTO `lo_areas` VALUES ('1902', '179', '3', '鱼台县');
INSERT INTO `lo_areas` VALUES ('1903', '179', '3', '金乡县');
INSERT INTO `lo_areas` VALUES ('1904', '179', '3', '嘉祥县');
INSERT INTO `lo_areas` VALUES ('1905', '179', '3', '汶上县');
INSERT INTO `lo_areas` VALUES ('1906', '179', '3', '泗水县');
INSERT INTO `lo_areas` VALUES ('1907', '179', '3', '梁山县');
INSERT INTO `lo_areas` VALUES ('1908', '179', '3', '曲阜市');
INSERT INTO `lo_areas` VALUES ('1909', '179', '3', '兖州市');
INSERT INTO `lo_areas` VALUES ('1910', '179', '3', '邹城市');
INSERT INTO `lo_areas` VALUES ('1911', '180', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('1912', '180', '3', '泰山区');
INSERT INTO `lo_areas` VALUES ('1913', '180', '3', '岱岳区');
INSERT INTO `lo_areas` VALUES ('1914', '180', '3', '宁阳县');
INSERT INTO `lo_areas` VALUES ('1915', '180', '3', '东平县');
INSERT INTO `lo_areas` VALUES ('1916', '180', '3', '新泰市');
INSERT INTO `lo_areas` VALUES ('1917', '180', '3', '肥城市');
INSERT INTO `lo_areas` VALUES ('1918', '181', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('1919', '181', '3', '环翠区');
INSERT INTO `lo_areas` VALUES ('1920', '181', '3', '文登市');
INSERT INTO `lo_areas` VALUES ('1921', '181', '3', '荣成市');
INSERT INTO `lo_areas` VALUES ('1922', '181', '3', '乳山市');
INSERT INTO `lo_areas` VALUES ('1923', '182', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('1924', '182', '3', '东港区');
INSERT INTO `lo_areas` VALUES ('1925', '182', '3', '岚山区');
INSERT INTO `lo_areas` VALUES ('1926', '182', '3', '五莲县');
INSERT INTO `lo_areas` VALUES ('1927', '182', '3', '莒县');
INSERT INTO `lo_areas` VALUES ('1928', '183', '3', '市辖区');
INSERT INTO `lo_areas` VALUES ('1929', '183', '3', '莱城区');
INSERT INTO `lo_areas` VALUES ('1930', '183', '3', '钢城区');
INSERT INTO `lo_areas` VALUES ('1931', '184', '3', '兰山区');
INSERT INTO `lo_areas` VALUES ('1932', '184', '3', '罗庄区');
INSERT INTO `lo_areas` VALUES ('1933', '184', '3', '河东区');
INSERT INTO `lo_areas` VALUES ('1934', '184', '3', '沂南县');
INSERT INTO `lo_areas` VALUES ('1935', '184', '3', '郯城县');
INSERT INTO `lo_areas` VALUES ('1936', '184', '3', '沂水县');
INSERT INTO `lo_areas` VALUES ('1937', '184', '3', '苍山县');
INSERT INTO `lo_areas` VALUES ('1938', '184', '3', '费县');
INSERT INTO `lo_areas` VALUES ('1939', '184', '3', '平邑县');
INSERT INTO `lo_areas` VALUES ('1940', '184', '3', '莒南县');
INSERT INTO `lo_areas` VALUES ('1941', '184', '3', '蒙阴县');
INSERT INTO `lo_areas` VALUES ('1942', '184', '3', '临沭县');

-- ----------------------------
-- Table structure for `lo_case`
-- ----------------------------
DROP TABLE IF EXISTS `lo_case`;
CREATE TABLE `lo_case` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  `class` varchar(20) DEFAULT NULL,
  `num` int(10) DEFAULT NULL,
  `price` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=80 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of lo_case
-- ----------------------------
INSERT INTO `lo_case` VALUES ('61', '18246164589', '塑料生活用品', '111', '55.5');
INSERT INTO `lo_case` VALUES ('66', 'zhang12311', '塑料生活用品', '1111', '555.5');
INSERT INTO `lo_case` VALUES ('67', 'zhang12311', '废报纸', '10467', '8373.6');
INSERT INTO `lo_case` VALUES ('68', 'zhang12311', '废书纸', '100000', '60000');
INSERT INTO `lo_case` VALUES ('69', 'zhang12311', '废衣物', '111', '33.3');
INSERT INTO `lo_case` VALUES ('70', 'zhang12311', '废报纸', '22', '17.6');
INSERT INTO `lo_case` VALUES ('71', 'zhang12311', '废报纸', '3', '2.4');
INSERT INTO `lo_case` VALUES ('72', 'zhang12311', '废报纸', '32', '25.6');
INSERT INTO `lo_case` VALUES ('73', 'zhang12311', '床垫', '50', '0');
INSERT INTO `lo_case` VALUES ('74', 'zhang12311', '塑料瓶', '2', '3.2');
INSERT INTO `lo_case` VALUES ('75', 'zhang12311', '废纸木制家具', '24', '0');
INSERT INTO `lo_case` VALUES ('76', 'zhang12311', '', '0', '0');
INSERT INTO `lo_case` VALUES ('77', 'zhang12311', '', '0', '0');
INSERT INTO `lo_case` VALUES ('78', 'zhang12311', '塑料生活用品', '111', '55.5');
INSERT INTO `lo_case` VALUES ('79', 'zhang12311', '', '0', '0');

-- ----------------------------
-- Table structure for `lo_cc`
-- ----------------------------
DROP TABLE IF EXISTS `lo_cc`;
CREATE TABLE `lo_cc` (
  `id` int(11) NOT NULL,
  `a` int(11) DEFAULT NULL,
  `b` int(11) DEFAULT NULL,
  `c` int(11) DEFAULT NULL,
  `aa` varchar(10) DEFAULT NULL,
  `bb` varchar(10) DEFAULT NULL,
  `cc` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of lo_cc
-- ----------------------------
INSERT INTO `lo_cc` VALUES ('1', '8', '96', '1085', '黑龙江', '哈尔滨', '香坊区');

-- ----------------------------
-- Table structure for `lo_class`
-- ----------------------------
DROP TABLE IF EXISTS `lo_class`;
CREATE TABLE `lo_class` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `classname` varchar(100) DEFAULT NULL COMMENT '栏目名称',
  `pic` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of lo_class
-- ----------------------------
INSERT INTO `lo_class` VALUES ('1', '', '../upload/class/15203202314084920180306.png');

-- ----------------------------
-- Table structure for `lo_config`
-- ----------------------------
DROP TABLE IF EXISTS `lo_config`;
CREATE TABLE `lo_config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `webname` varchar(100) DEFAULT NULL,
  `weburl` varchar(100) DEFAULT NULL,
  `keyword` varchar(200) DEFAULT NULL,
  `description` text,
  `contact` varchar(100) DEFAULT NULL,
  `copyright` varchar(100) DEFAULT NULL,
  `icp` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of lo_config
-- ----------------------------
INSERT INTO `lo_config` VALUES ('1', '解忧回收', 'www.zhuifengzhe.cn', '回收，解忧回收', '联系方式与地址', '追风者团队', '联系人：张先生联系电话：18246164589', '黑icp备-20171204');

-- ----------------------------
-- Table structure for `lo_hsuser`
-- ----------------------------
DROP TABLE IF EXISTS `lo_hsuser`;
CREATE TABLE `lo_hsuser` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `pwd` varchar(20) DEFAULT NULL,
  `idcard` varchar(20) DEFAULT NULL,
  `star` varchar(5) DEFAULT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `isfree` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `lng` varchar(20) DEFAULT NULL,
  `lat` varchar(20) DEFAULT NULL,
  `addname` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `run` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of lo_hsuser
-- ----------------------------
INSERT INTO `lo_hsuser` VALUES ('4', '张博文', '1111111', '230106199709091411', '4.9', '?', '否', 'zhang09090606', '124.86306', '46.649229', '黑龙江省大庆市让胡路区', '');
INSERT INTO `lo_hsuser` VALUES ('6', '天命', '1111111', '230106199709081411', '5', '18246164589', '否', 'zhang12311', '124.868949', '46.646772', '黑龙江省大庆市让胡路区', '');
INSERT INTO `lo_hsuser` VALUES ('8', '张博文', '11111111', '230106199709091412', '5', '18246164589', '否', 'zhang1111', '124.868949', '46.646772', '黑龙江省大庆市让胡路区', '');
INSERT INTO `lo_hsuser` VALUES ('9', '刘硕', 'shuo525', '230182199705062346', '3', '15645851931', '否', 'victory', '126.62346', '45.78685', '黑龙江省哈尔滨市道里区斯大林街', '');

-- ----------------------------
-- Table structure for `lo_info`
-- ----------------------------
DROP TABLE IF EXISTS `lo_info`;
CREATE TABLE `lo_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cid` int(11) DEFAULT NULL COMMENT '栏目ID',
  `cname` varchar(100) DEFAULT NULL COMMENT '栏目名称',
  `picurl` varchar(100) DEFAULT NULL,
  `description` text,
  `content` text,
  `postime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of lo_info
-- ----------------------------

-- ----------------------------
-- Table structure for `lo_jfshop`
-- ----------------------------
DROP TABLE IF EXISTS `lo_jfshop`;
CREATE TABLE `lo_jfshop` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `num` int(10) DEFAULT NULL,
  `need` int(10) DEFAULT NULL,
  `pic` varchar(100) DEFAULT NULL,
  `postime` datetime DEFAULT NULL,
  `isfinish` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of lo_jfshop
-- ----------------------------
INSERT INTO `lo_jfshop` VALUES ('5', '手机', '78', '110', 'upload/jfshop/15233677015268120180410.jpeg', '2018-04-10 21:41:41', null);
INSERT INTO `lo_jfshop` VALUES ('6', '家电', '11', '266', 'upload/jfshop/15233677137810620180410.jpeg', '2018-04-10 21:41:53', null);

-- ----------------------------
-- Table structure for `lo_jfshop_order`
-- ----------------------------
DROP TABLE IF EXISTS `lo_jfshop_order`;
CREATE TABLE `lo_jfshop_order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(20) DEFAULT NULL,
  `name` varchar(11) DEFAULT NULL,
  `addid` varchar(11) DEFAULT NULL,
  `num` varchar(20) DEFAULT NULL,
  `price` varchar(20) DEFAULT NULL,
  `isfinish` varchar(5) DEFAULT NULL,
  `pic` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of lo_jfshop_order
-- ----------------------------
INSERT INTO `lo_jfshop_order` VALUES ('13', 'zhang12311', '手机', '26', '10', '1100', '否', 'upload/jfshop/15233677015268120180410.jpeg');
INSERT INTO `lo_jfshop_order` VALUES ('14', '18246164589', '手机', '30', '11', '1210', '否', 'upload/jfshop/15233677015268120180410.jpeg');

-- ----------------------------
-- Table structure for `lo_link`
-- ----------------------------
DROP TABLE IF EXISTS `lo_link`;
CREATE TABLE `lo_link` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `l_url` varchar(255) DEFAULT NULL,
  `l_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of lo_link
-- ----------------------------
INSERT INTO `lo_link` VALUES ('2', 'http://www.qq.com', '腾讯');
INSERT INTO `lo_link` VALUES ('3', 'http://www.baidu.com', '百度');
INSERT INTO `lo_link` VALUES ('4', 'http://www.sina.com.cn', '新浪');

-- ----------------------------
-- Table structure for `lo_marks`
-- ----------------------------
DROP TABLE IF EXISTS `lo_marks`;
CREATE TABLE `lo_marks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL COMMENT '标题',
  `content` text COMMENT '内容',
  `postime` datetime DEFAULT NULL COMMENT '提交时间',
  `cname` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of lo_marks
-- ----------------------------

-- ----------------------------
-- Table structure for `lo_menu`
-- ----------------------------
DROP TABLE IF EXISTS `lo_menu`;
CREATE TABLE `lo_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `postime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of lo_menu
-- ----------------------------
INSERT INTO `lo_menu` VALUES ('1', '锅包肉', '35', '2018-01-17 09:21:33');
INSERT INTO `lo_menu` VALUES ('2', '鱼香肉丝', '38', '2018-01-17 09:25:08');
INSERT INTO `lo_menu` VALUES ('3', '北京烤鸭', '98', '2018-01-18 08:59:16');
INSERT INTO `lo_menu` VALUES ('4', '鸡蛋炒韭菜', '18', '2018-01-18 08:59:33');
INSERT INTO `lo_menu` VALUES ('5', '肥肠土豆片', '88', '2018-01-18 08:59:53');
INSERT INTO `lo_menu` VALUES ('6', '阿斯达', '11', '2018-02-09 10:01:14');

-- ----------------------------
-- Table structure for `lo_message`
-- ----------------------------
DROP TABLE IF EXISTS `lo_message`;
CREATE TABLE `lo_message` (
  `id` int(11) NOT NULL,
  `user` varchar(20) DEFAULT NULL,
  `con` varchar(255) DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of lo_message
-- ----------------------------

-- ----------------------------
-- Table structure for `lo_news`
-- ----------------------------
DROP TABLE IF EXISTS `lo_news`;
CREATE TABLE `lo_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cid` int(11) DEFAULT NULL COMMENT '栏目ID',
  `cname` varchar(255) DEFAULT NULL COMMENT '栏目名称',
  `title` varchar(255) DEFAULT NULL COMMENT '标题',
  `author` varchar(255) DEFAULT NULL COMMENT '作者\r\n',
  `picurl` varchar(255) DEFAULT NULL COMMENT '图片',
  `content` text COMMENT '内容',
  `postime` datetime DEFAULT NULL COMMENT '提交时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of lo_news
-- ----------------------------
INSERT INTO `lo_news` VALUES ('1', '1', 'sdasda', '是发发发', '阿萨斯', '', '撒大沙发沙发', '2018-01-29 14:52:42');
INSERT INTO `lo_news` VALUES ('2', '1', '公司简介', '大夫都说', '大法师的v', '', '大夫说的', '2018-01-30 10:50:36');
INSERT INTO `lo_news` VALUES ('3', '8', 'fdfef', 'fefesfs', 'dasdas', '/upload/image/20180208/20180208141404_57757.png', 'wqeqweqwe', '2018-02-08 14:14:14');
INSERT INTO `lo_news` VALUES ('4', '8', 'fdfef', 'wqeq', 'wqeqweqwe', '', 'eqweqweqweqwe', '2018-02-08 14:45:49');
INSERT INTO `lo_news` VALUES ('5', '1', '公司简介', '我闻到味道', '小编1', '/upload/image/20180210/20180210084830_50657.png', 'wdwa', '2018-02-10 08:48:35');
INSERT INTO `lo_news` VALUES ('6', '3', '物资车辆', '我闻到味道', '小编1', '/upload/image/20180210/20180210084830_50657.png', 'wdwa', '2018-02-10 08:48:35');
INSERT INTO `lo_news` VALUES ('7', '4', '大车', '我闻到味道', '小编1', '/upload/image/20180210/20180210084830_50657.png', 'wdwa', '2018-02-10 08:48:35');

-- ----------------------------
-- Table structure for `lo_order`
-- ----------------------------
DROP TABLE IF EXISTS `lo_order`;
CREATE TABLE `lo_order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  `hsuser` varchar(20) DEFAULT NULL,
  `jtime` datetime DEFAULT NULL,
  `ytime` varchar(255) DEFAULT NULL,
  `stime` datetime DEFAULT NULL,
  `conid` int(11) DEFAULT NULL,
  `ftime` datetime DEFAULT NULL,
  `isfinish` varchar(10) DEFAULT NULL,
  `isstart` varchar(10) DEFAULT NULL,
  `lastprice` varchar(20) DEFAULT NULL,
  `addname` varchar(100) DEFAULT NULL,
  `addpeo` varchar(20) DEFAULT NULL,
  `addtel` varchar(20) DEFAULT NULL,
  `addinf` varchar(100) DEFAULT NULL,
  `addlng` varchar(20) DEFAULT NULL,
  `addlat` varchar(20) DEFAULT NULL,
  `usershow` varchar(5) DEFAULT NULL,
  `hsshow` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `conid` (`conid`)
) ENGINE=InnoDB AUTO_INCREMENT=112 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of lo_order
-- ----------------------------
INSERT INTO `lo_order` VALUES ('103', '18246164589', null, null, '', '2018-04-18 02:13:17', '103', null, '否', '否', null, '黑龙江省哈尔滨市道里区斯大林街', '张博文', '18246164589', '防洪纪念塔', '126.62346', '45.78685', '是', '是');
INSERT INTO `lo_order` VALUES ('104', '18246164589', null, null, '', '2018-04-18 02:16:54', '104', null, '否', '否', null, '黑龙江省哈尔滨市道里区斯大林街', '张博文', '18246164589', '防洪纪念塔', '126.62346', '45.78685', '是', '是');
INSERT INTO `lo_order` VALUES ('107', 'zhang12311', 'zhang12311', '2018-04-19 07:00:54', '2018-04-27 06:59:58', '2018-04-19 07:00:05', '107', '2018-04-19 12:23:53', '是', '是', '111', '黑龙江省大庆市让胡路区', '张博文', '18246164589', '大庆师范学院10舍', '124.868949', '46.646772', '否', '是');
INSERT INTO `lo_order` VALUES ('110', 'zhang12311', null, null, '', '2018-04-19 07:20:00', '110', null, '否', '否', null, '黑龙江省大庆市让胡路区', '张博文', '18246164589', '大庆师范学院10舍', '124.868949', '46.646772', '否', '是');
INSERT INTO `lo_order` VALUES ('111', 'zhang12311', 'zhang12311', '2018-04-19 12:24:15', '2018-04-11 12:22:23', '2018-04-19 12:22:39', '111', '2018-04-19 12:24:51', '是', '是', '1111', '黑龙江省大庆市让胡路区', '张博文', '18246164589', '大庆师范学院10舍', '124.868949', '46.646772', '否', '是');

-- ----------------------------
-- Table structure for `lo_ordercon`
-- ----------------------------
DROP TABLE IF EXISTS `lo_ordercon`;
CREATE TABLE `lo_ordercon` (
  `id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `num` int(10) DEFAULT NULL,
  `price` varchar(20) DEFAULT NULL,
  `zid` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`zid`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=110 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of lo_ordercon
-- ----------------------------
INSERT INTO `lo_ordercon` VALUES ('103', '塑料生活用品', '111', '55.5', '98');
INSERT INTO `lo_ordercon` VALUES ('104', '塑料生活用品', '111', '55.5', '99');
INSERT INTO `lo_ordercon` VALUES ('107', '废报纸', '111', '88.8', '102');
INSERT INTO `lo_ordercon` VALUES ('110', '废报纸', '11', '8.8', '107');
INSERT INTO `lo_ordercon` VALUES ('111', '废报纸', '11', '8.8', '108');
INSERT INTO `lo_ordercon` VALUES ('111', '塑料生活用品', '111', '55.5', '109');

-- ----------------------------
-- Table structure for `lo_shop`
-- ----------------------------
DROP TABLE IF EXISTS `lo_shop`;
CREATE TABLE `lo_shop` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `m_id` int(11) DEFAULT NULL,
  `m_name` varchar(30) DEFAULT NULL,
  `buy_people` varchar(30) DEFAULT NULL,
  `num` int(11) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `zprice` float DEFAULT NULL,
  `postime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of lo_shop
-- ----------------------------
INSERT INTO `lo_shop` VALUES ('1', '1', '锅包肉', '张飞', '3', '35', '105', '2018-01-17 09:58:49');
INSERT INTO `lo_shop` VALUES ('2', '2', '鱼香肉丝', '貂蝉', '7', '38', '266', '2018-01-17 10:02:00');
INSERT INTO `lo_shop` VALUES ('3', '1', '锅包肉', '高兴超', '89', '35', '3115', '2018-01-16 10:14:04');
INSERT INTO `lo_shop` VALUES ('4', '5', '肥肠土豆片', '高兴超', '10', '88', '880', '2018-01-18 09:00:05');

-- ----------------------------
-- Table structure for `lo_user`
-- ----------------------------
DROP TABLE IF EXISTS `lo_user`;
CREATE TABLE `lo_user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  `pwd` varchar(20) DEFAULT NULL,
  `sex` varchar(3) CHARACTER SET utf8 DEFAULT NULL,
  `nickname` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `point` varchar(10) DEFAULT NULL,
  `isadd` varchar(3) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of lo_user
-- ----------------------------
INSERT INTO `lo_user` VALUES ('4', 'zhang12311', '1111111', '男', '手打', '152849', '是');
INSERT INTO `lo_user` VALUES ('6', 'asdasdas', '11111111', '女', '发的', '11111', '否');
INSERT INTO `lo_user` VALUES ('7', '18246164589', 'zhang5219', '男', '张博文', '99998789', '是');
INSERT INTO `lo_user` VALUES ('9', '13796639782', 'KEKE777', '男', '撒旦', '112', '否');
INSERT INTO `lo_user` VALUES ('10', '15776548173', '123456', '女', '刘硕', '1000000', '否');

-- ----------------------------
-- Table structure for `lo_userlog`
-- ----------------------------
DROP TABLE IF EXISTS `lo_userlog`;
CREATE TABLE `lo_userlog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `u_name` varchar(255) DEFAULT NULL,
  `u_ip` varchar(255) DEFAULT NULL,
  `u_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=147 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of lo_userlog
-- ----------------------------
INSERT INTO `lo_userlog` VALUES ('36', 'admin', '127.0.0.1', '1517205260');
INSERT INTO `lo_userlog` VALUES ('37', 'admin', '127.0.0.1', '1517231330');
INSERT INTO `lo_userlog` VALUES ('38', 'admin', '127.0.0.1', '1517271435');
INSERT INTO `lo_userlog` VALUES ('39', 'zhang', '127.0.0.1', '1518237215');
INSERT INTO `lo_userlog` VALUES ('40', 'zhang', '127.0.0.1', '1518256106');
INSERT INTO `lo_userlog` VALUES ('41', 'zhang', '127.0.0.1', '1518257480');
INSERT INTO `lo_userlog` VALUES ('42', 'zhang', '127.0.0.1', '1518308281');
INSERT INTO `lo_userlog` VALUES ('43', 'zhang', '127.0.0.1', '1518317504');
INSERT INTO `lo_userlog` VALUES ('44', 'zhang', '127.0.0.1', '1518317844');
INSERT INTO `lo_userlog` VALUES ('45', 'zhang', '127.0.0.1', '1518318010');
INSERT INTO `lo_userlog` VALUES ('46', 'zhang', '127.0.0.1', '1518318687');
INSERT INTO `lo_userlog` VALUES ('47', 'zhang', '127.0.0.1', '1518322581');
INSERT INTO `lo_userlog` VALUES ('48', 'admin', '127.0.0.1', '1518395211');
INSERT INTO `lo_userlog` VALUES ('49', 'admin', '127.0.0.1', '1518397136');
INSERT INTO `lo_userlog` VALUES ('50', 'admin', '127.0.0.1', '1518423639');
INSERT INTO `lo_userlog` VALUES ('51', 'admin', '127.0.0.1', '1518429868');
INSERT INTO `lo_userlog` VALUES ('52', 'admin', '127.0.0.1', '1518439673');
INSERT INTO `lo_userlog` VALUES ('53', 'admin', '127.0.0.1', '1518440261');
INSERT INTO `lo_userlog` VALUES ('54', 'admin', '127.0.0.1', '1518480937');
INSERT INTO `lo_userlog` VALUES ('55', 'admin', '127.0.0.1', '1518494743');
INSERT INTO `lo_userlog` VALUES ('56', 'admin', '127.0.0.1', '1518496056');
INSERT INTO `lo_userlog` VALUES ('57', 'admin', '127.0.0.1', '1518568280');
INSERT INTO `lo_userlog` VALUES ('58', 'zhang', '127.0.0.1', '1518569723');
INSERT INTO `lo_userlog` VALUES ('59', 'zhang', '127.0.0.1', '1518571500');
INSERT INTO `lo_userlog` VALUES ('60', 'zhang', '127.0.0.1', '1518573393');
INSERT INTO `lo_userlog` VALUES ('61', 'admin', '127.0.0.1', '1518581517');
INSERT INTO `lo_userlog` VALUES ('62', 'admin', '127.0.0.1', '1518581742');
INSERT INTO `lo_userlog` VALUES ('63', 'zhang', '127.0.0.1', '1518583543');
INSERT INTO `lo_userlog` VALUES ('64', 'zhang', '127.0.0.1', '1518599129');
INSERT INTO `lo_userlog` VALUES ('65', 'zhang', '127.0.0.1', '1518600149');
INSERT INTO `lo_userlog` VALUES ('66', 'zhang', '127.0.0.1', '1518600249');
INSERT INTO `lo_userlog` VALUES ('67', 'admin', '127.0.0.1', '1518651709');
INSERT INTO `lo_userlog` VALUES ('68', 'zhang', '127.0.0.1', '1519638159');
INSERT INTO `lo_userlog` VALUES ('69', 'zhang', '127.0.0.1', '1519955390');
INSERT INTO `lo_userlog` VALUES ('70', 'zhang', '127.0.0.1', '1519956031');
INSERT INTO `lo_userlog` VALUES ('71', 'zhang', '127.0.0.1', '1519958235');
INSERT INTO `lo_userlog` VALUES ('72', 'zhang', '127.0.0.1', '1519958810');
INSERT INTO `lo_userlog` VALUES ('73', 'zhang', '127.0.0.1', '1519966714');
INSERT INTO `lo_userlog` VALUES ('74', 'zhang', '127.0.0.1', '1519967497');
INSERT INTO `lo_userlog` VALUES ('75', 'zhang', '127.0.0.1', '1520125738');
INSERT INTO `lo_userlog` VALUES ('76', 'zhang', '127.0.0.1', '1520136585');
INSERT INTO `lo_userlog` VALUES ('77', 'zhang', '127.0.0.1', '1520138362');
INSERT INTO `lo_userlog` VALUES ('78', 'zhang', '127.0.0.1', '1520141423');
INSERT INTO `lo_userlog` VALUES ('79', 'zhang', '127.0.0.1', '1520141815');
INSERT INTO `lo_userlog` VALUES ('80', 'zhang', '127.0.0.1', '1520149979');
INSERT INTO `lo_userlog` VALUES ('81', 'zhuifengzhe', '127.0.0.1', '1520150155');
INSERT INTO `lo_userlog` VALUES ('82', 'zhang', '127.0.0.1', '1520150204');
INSERT INTO `lo_userlog` VALUES ('83', 'zhang', '127.0.0.1', '1520213955');
INSERT INTO `lo_userlog` VALUES ('84', 'zhang', '127.0.0.1', '1520314361');
INSERT INTO `lo_userlog` VALUES ('85', 'zhang', '127.0.0.1', '1520315306');
INSERT INTO `lo_userlog` VALUES ('86', 'zhang', '127.0.0.1', '1520485307');
INSERT INTO `lo_userlog` VALUES ('87', 'zhang', '127.0.0.1', '1520499438');
INSERT INTO `lo_userlog` VALUES ('88', 'zhang', '127.0.0.1', '1520553991');
INSERT INTO `lo_userlog` VALUES ('89', 'zhang', '127.0.0.1', '1520731355');
INSERT INTO `lo_userlog` VALUES ('90', 'zhang', '127.0.0.1', '1520813183');
INSERT INTO `lo_userlog` VALUES ('91', 'zhang', '127.0.0.1', '1520816428');
INSERT INTO `lo_userlog` VALUES ('92', 'zhang', '127.0.0.1', '1520902728');
INSERT INTO `lo_userlog` VALUES ('93', 'zhang', '127.0.0.1', '1520917472');
INSERT INTO `lo_userlog` VALUES ('94', 'zhang', '127.0.0.1', '1520923245');
INSERT INTO `lo_userlog` VALUES ('95', 'zhang', '127.0.0.1', '1520923520');
INSERT INTO `lo_userlog` VALUES ('96', 'zhang', '127.0.0.1', '1520949684');
INSERT INTO `lo_userlog` VALUES ('97', 'zhang', '127.0.0.1', '1520982856');
INSERT INTO `lo_userlog` VALUES ('98', 'zhang', '127.0.0.1', '1520985640');
INSERT INTO `lo_userlog` VALUES ('99', 'zhang', '127.0.0.1', '1521036376');
INSERT INTO `lo_userlog` VALUES ('100', 'zhang', '127.0.0.1', '1521037242');
INSERT INTO `lo_userlog` VALUES ('101', 'zhang', '127.0.0.1', '1521037463');
INSERT INTO `lo_userlog` VALUES ('102', 'zhang', '127.0.0.1', '1521037697');
INSERT INTO `lo_userlog` VALUES ('103', 'zhang', '127.0.0.1', '1521038051');
INSERT INTO `lo_userlog` VALUES ('104', 'zhang', '127.0.0.1', '1521070220');
INSERT INTO `lo_userlog` VALUES ('105', 'zhang', '127.0.0.1', '1521073610');
INSERT INTO `lo_userlog` VALUES ('106', 'zhang', '127.0.0.1', '1521073763');
INSERT INTO `lo_userlog` VALUES ('107', 'zhang', '127.0.0.1', '1521123791');
INSERT INTO `lo_userlog` VALUES ('108', 'zhang', '127.0.0.1', '1521165326');
INSERT INTO `lo_userlog` VALUES ('109', 'zhang', '127.0.0.1', '1521460455');
INSERT INTO `lo_userlog` VALUES ('110', 'zhang', '127.0.0.1', '1521542658');
INSERT INTO `lo_userlog` VALUES ('111', 'zhang', '127.0.0.1', '1521776982');
INSERT INTO `lo_userlog` VALUES ('112', 'zhang', '127.0.0.1', '1521814381');
INSERT INTO `lo_userlog` VALUES ('113', 'zhang', '127.0.0.1', '1521851980');
INSERT INTO `lo_userlog` VALUES ('114', 'zhang', '127.0.0.1', '1521853288');
INSERT INTO `lo_userlog` VALUES ('115', 'zhang', '127.0.0.1', '1523110724');
INSERT INTO `lo_userlog` VALUES ('116', 'zhang', '127.0.0.1', '1523156301');
INSERT INTO `lo_userlog` VALUES ('117', 'zhang', '127.0.0.1', '1523163271');
INSERT INTO `lo_userlog` VALUES ('118', 'zhang', '127.0.0.1', '1523166667');
INSERT INTO `lo_userlog` VALUES ('119', 'zhang', '127.0.0.1', '1523167854');
INSERT INTO `lo_userlog` VALUES ('120', 'zhang', '127.0.0.1', '1523167907');
INSERT INTO `lo_userlog` VALUES ('121', 'zhang', '127.0.0.1', '1523366742');
INSERT INTO `lo_userlog` VALUES ('122', 'zhang', '127.0.0.1', '1523512648');
INSERT INTO `lo_userlog` VALUES ('123', 'zhang', '127.0.0.1', '1523532255');
INSERT INTO `lo_userlog` VALUES ('124', 'zhang', '127.0.0.1', '1523532309');
INSERT INTO `lo_userlog` VALUES ('125', 'zhang', '127.0.0.1', '1523532370');
INSERT INTO `lo_userlog` VALUES ('126', 'zhang', '127.0.0.1', '1523592748');
INSERT INTO `lo_userlog` VALUES ('127', 'zhang', '127.0.0.1', '1523632805');
INSERT INTO `lo_userlog` VALUES ('128', 'zhang', '127.0.0.1', '1523633419');
INSERT INTO `lo_userlog` VALUES ('129', 'admin', '117.136.7.124', '1523682933');
INSERT INTO `lo_userlog` VALUES ('130', 'zhang', '111.43.18.223', '1523715587');
INSERT INTO `lo_userlog` VALUES ('131', 'zhang', '111.41.218.235', '1523715831');
INSERT INTO `lo_userlog` VALUES ('132', 'zhang', '111.43.18.223', '1523749845');
INSERT INTO `lo_userlog` VALUES ('133', 'admin', '203.90.137.139', '1523802658');
INSERT INTO `lo_userlog` VALUES ('134', 'zhang', '203.90.137.139', '1523805468');
INSERT INTO `lo_userlog` VALUES ('135', 'admin', '203.90.137.139', '1523814614');
INSERT INTO `lo_userlog` VALUES ('136', 'zhang', '203.90.137.139', '1523942510');
INSERT INTO `lo_userlog` VALUES ('137', 'zhang', '203.90.137.139', '1523953708');
INSERT INTO `lo_userlog` VALUES ('138', 'zhang', '203.90.137.139', '1523953766');
INSERT INTO `lo_userlog` VALUES ('139', 'admin', '203.90.137.139', '1523954894');
INSERT INTO `lo_userlog` VALUES ('140', 'admin', '203.90.137.139', '1523954899');
INSERT INTO `lo_userlog` VALUES ('141', 'aaa', '203.90.137.139', '1523955145');
INSERT INTO `lo_userlog` VALUES ('142', 'zhang', '203.90.137.139', '1523976201');
INSERT INTO `lo_userlog` VALUES ('143', 'zhang', '111.26.33.145', '1524915543');
INSERT INTO `lo_userlog` VALUES ('144', 'zhang', '203.90.137.139', '1525498928');
INSERT INTO `lo_userlog` VALUES ('145', 'zhang', '223.104.17.213', '1530065976');
INSERT INTO `lo_userlog` VALUES ('146', 'zhang', '124.235.152.82', '1533347996');

-- ----------------------------
-- Table structure for `lo_waste`
-- ----------------------------
DROP TABLE IF EXISTS `lo_waste`;
CREATE TABLE `lo_waste` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `class` int(1) DEFAULT NULL,
  `name` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `pic` varchar(100) DEFAULT NULL,
  `inf` varchar(1000) CHARACTER SET utf8 DEFAULT NULL,
  `price` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of lo_waste
-- ----------------------------
INSERT INTO `lo_waste` VALUES ('23', '1', '废报纸', '../upload/waste/15199745623268920180302.jpeg', '', '0.8');
INSERT INTO `lo_waste` VALUES ('24', '1', '废书纸', '../upload/waste/15199739516868820180302.jpeg', '', '0.6');
INSERT INTO `lo_waste` VALUES ('25', '1', '废纸箱', '../upload/waste/15201257965554920180304.jpeg', '', '0.5');
INSERT INTO `lo_waste` VALUES ('26', '4', '废钢铁', '../upload/waste/15202196253514120180305.jpeg', '', '0.3');
INSERT INTO `lo_waste` VALUES ('27', '4', '铜制品', '../upload/waste/15202196778614720180305.png', '', '10');
INSERT INTO `lo_waste` VALUES ('28', '4', '铜线铜缆', '../upload/waste/15202197485251920180305.jpeg', '', '7');
INSERT INTO `lo_waste` VALUES ('29', '4', '铁质易拉罐', '../upload/waste/15202197954520220180305.jpeg', '', '0.3');
INSERT INTO `lo_waste` VALUES ('30', '4', '铝合金', '../upload/waste/15202198318043520180305.jpeg', '', '2');
INSERT INTO `lo_waste` VALUES ('31', '4', '铝制品', '../upload/waste/15202198612413420180305.jpeg', '', '3');
INSERT INTO `lo_waste` VALUES ('32', '4', '铝线铝缆', '../upload/waste/15202199293510120180305.png', '', '2');
INSERT INTO `lo_waste` VALUES ('33', '4', '废不锈钢', '../upload/waste/15202200145326720180305.jpeg', '', '1');
INSERT INTO `lo_waste` VALUES ('34', '6', '智能手机', '../upload/waste/15202373427089720180305.jpeg', '我们将会在收到废品的24小时内找专业人员进行鉴定其价格，并第一时间将钱转到您的账户', '0');
INSERT INTO `lo_waste` VALUES ('35', '6', '小灵通', '../upload/waste/15202373745727120180305.png', '', '5');
INSERT INTO `lo_waste` VALUES ('36', '2', '塑料瓶', '../upload/waste/15207488265349920180311.pjpeg', '', '1.6');
INSERT INTO `lo_waste` VALUES ('37', '2', '塑料生活用品', '../upload/waste/15207490274094820180311.pjpeg', '', '0.5');
INSERT INTO `lo_waste` VALUES ('38', '3', '废衣物', '../upload/waste/15207491439618420180311.pjpeg', '', '0.3');
INSERT INTO `lo_waste` VALUES ('39', '3', '鞋帽', '../upload/waste/15207491711208420180311.pjpeg', '', '0.3');
INSERT INTO `lo_waste` VALUES ('40', '3', '床上用品', '../upload/waste/15207492084624920180311.pjpeg', '', '0.3');
INSERT INTO `lo_waste` VALUES ('41', '3', '地毯', '../upload/waste/15207492387974720180311.pjpeg', '', '0.3');
INSERT INTO `lo_waste` VALUES ('42', '3', '其他纺织品', '../upload/waste/15207493011387720180311.pjpeg', '', '0.3');
INSERT INTO `lo_waste` VALUES ('43', '3', '废纺织材料', '../upload/waste/15207493448978520180311.pjpeg', '', '0.3');
INSERT INTO `lo_waste` VALUES ('44', '5', '废纸木制家具', '../upload/waste/15207496047887020180311.pjpeg', '我们将会在收到废品的24小时内找专业人员进行鉴定其价格，并第一时间将钱转到您的账户', '0');
INSERT INTO `lo_waste` VALUES ('45', '5', '床垫', '../upload/waste/15207496383101520180311.pjpeg', '我们将会在收到废品的24小时内找专业人员进行鉴定其价格，并第一时间将钱转到您的账户', '0');
INSERT INTO `lo_waste` VALUES ('46', '5', '废旧餐盘', '../upload/waste/15207496687849420180311.pjpeg', '我们将会在收到废品的24小时内找专业人员进行鉴定其价格，并第一时间将钱转到您的账户', '0');
INSERT INTO `lo_waste` VALUES ('47', '5', '其他生活家具', '../upload/waste/15207497097253120180311.pjpeg', '我们将会在收到废品的24小时内找专业人员进行鉴定其价格，并第一时间将钱转到您的账户', '0');
INSERT INTO `lo_waste` VALUES ('48', '7', '废家电', '../upload/waste/15207500033515320180311.pjpeg', '我们将会在收到废品的24小时内找专业人员进行鉴定其价格，并第一时间将钱转到您的账户', '0');
INSERT INTO `lo_waste` VALUES ('49', '2', '保鲜膜/保鲜袋', '../upload/waste/15207521282924320180311.pjpeg', '', '0.3');
INSERT INTO `lo_waste` VALUES ('50', '2', '塑料容器', '../upload/waste/15207521661089620180311.pjpeg', '', '0.3');

-- ----------------------------
-- Table structure for `message`
-- ----------------------------
DROP TABLE IF EXISTS `message`;
CREATE TABLE `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `author` varchar(20) DEFAULT NULL,
  `picurl` varchar(100) DEFAULT NULL,
  `content` text,
  `postime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of message
-- ----------------------------
INSERT INTO `message` VALUES ('2', '3441', '34341', 'upload/15123721527931220171204.jpeg', 'sdfsdf1', '2017-12-04 14:58:37');
INSERT INTO `message` VALUES ('3', 'sdfsd', 'sdfsdf', 'upload/15124559186122120171205.jpeg', 'sdfsd', '2017-12-05 14:38:38');
INSERT INTO `message` VALUES ('4', '454', '4545', '../upload/15124564066985920171205.jpeg', '454', '2017-12-05 14:46:46');
INSERT INTO `message` VALUES ('5', 'dfdf', 'dfdf', '../upload/15124564186322620171205.jpeg', 'dfd', '2017-12-05 14:46:58');
INSERT INTO `message` VALUES ('6', 'sdfdsf', 'sdfsdf', '../upload/15124564329257320171205.jpeg', 'sdfsd', '2017-12-05 14:47:12');
INSERT INTO `message` VALUES ('7', '0909', 'dfd', '../upload/15124565729624820171205.jpeg', 'dfd', '2017-12-05 14:49:32');
INSERT INTO `message` VALUES ('8', '0909', 'dfd', '../upload/15124565816688920171205.jpeg', 'dfd', '2017-12-05 14:49:41');
INSERT INTO `message` VALUES ('9', 'sdf', 'sdf', '../upload/15124565954839420171205.jpeg', 'sdf', '2017-12-05 14:49:55');
INSERT INTO `message` VALUES ('10', 'sdf', 'sdf', '../upload/15124578908168020171205.jpeg', 'sdf', '2017-12-05 15:11:30');
INSERT INTO `message` VALUES ('11', '23232131', '23232131', '../upload/15125423453151620171206.jpeg', '2323131', '2017-12-05 15:12:17');

-- ----------------------------
-- Table structure for `upload_file`
-- ----------------------------
DROP TABLE IF EXISTS `upload_file`;
CREATE TABLE `upload_file` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `picurl` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of upload_file
-- ----------------------------
INSERT INTO `upload_file` VALUES ('1', 'upload/15121173081688820171201.jpeg');
INSERT INTO `upload_file` VALUES ('2', 'upload/15121177051287020171201.jpeg');
