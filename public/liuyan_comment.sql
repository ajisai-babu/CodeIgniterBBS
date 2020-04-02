/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50096
Source Host           : localhost:3306
Source Database       : test

Target Server Type    : MYSQL
Target Server Version : 50096
File Encoding         : 65001

Date: 2020-04-02 14:55:31
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for liuyan_comment
-- ----------------------------
DROP TABLE IF EXISTS `liuyan_comment`;
CREATE TABLE `liuyan_comment` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `date` datetime NOT NULL,
  `poster` varchar(20) NOT NULL,
  `comment` text NOT NULL,
  `reply` text NOT NULL,
  `mail` varchar(60) NOT NULL,
  `ip` varchar(15) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of liuyan_comment
-- ----------------------------
INSERT INTO `liuyan_comment` VALUES ('1', '2020-04-02 14:16:05', 'admin', '“粮食危机”来了？专家：中国主粮充足', '', 'admin@qq.com', '127.0.0.1');
INSERT INTO `liuyan_comment` VALUES ('2', '2020-04-02 14:16:19', '', '决战决胜脱贫攻坚 多部门组合拳再发力', '', '', '127.0.0.1');
INSERT INTO `liuyan_comment` VALUES ('3', '2020-04-02 14:16:33', 'admin', '9部门联合开展第32个爱国卫生月活动', '', '', '127.0.0.1');
INSERT INTO `liuyan_comment` VALUES ('4', '2020-04-02 14:16:42', 'admin', '“车都”武汉点燃复工引擎', '', '', '127.0.0.1');
INSERT INTO `liuyan_comment` VALUES ('5', '2020-04-02 14:16:54', 'admin', '“解锁”线上求职 应届生准备好了吗', '', '', '127.0.0.1');
INSERT INTO `liuyan_comment` VALUES ('6', '2020-04-02 14:17:18', 'admin', '今年中央财政扶贫资金已下达1396亿', '怎么没有我的', '', '127.0.0.1');
INSERT INTO `liuyan_comment` VALUES ('7', '2020-04-02 14:17:28', '', '3月31日，教育部发布公告，经党中央、国务院同意，2020年全国普通高等学校招生统一考试延期一个月举行，考试时间为7月7日至8日。湖北省、北京市可根据疫情防控情况，研究提出本地区高考时间安排的意见，商教育部同意后及时向社会发布', '妙啊', '', '127.0.0.1');
INSERT INTO `liuyan_comment` VALUES ('8', '2020-04-02 14:17:43', '', '经过两个月的严控，我国本土新冠肺炎疫情传播基本阻断，这来之不易的成果，来自于对各个环节的严厉把控。作为疫情防控的最后一道关口，医疗废物能否安全处置，关系着切断病毒传播途径、防止二次污染的关键。', '', '', '127.0.0.1');
INSERT INTO `liuyan_comment` VALUES ('9', '2020-04-02 14:17:51', '', '新冠肺炎疫情加速了人工智能产品在各应用场景的落地速度。但除了市场需求外，资金、技术同样是制约着人工智能落地的关键因素。', '', '', '127.0.0.1');
INSERT INTO `liuyan_comment` VALUES ('10', '2020-04-02 14:17:57', '', '近日监管部门查处了一批虚假违法广告案件。防疫不是生意，蹭疫情热点，借机发布虚假广告赚黑心钱，违法又坑人，还给抗疫工作添乱，绝不能姑息。对这类违法行为，必须快出手、出重拳，依法严厉打击，让违法者付出应有代价，切实保护消费者合法权益。', '', '', '127.0.0.1');
INSERT INTO `liuyan_comment` VALUES ('11', '2020-04-02 14:18:04', '', '记者30日从商务部获悉，商务部会同相关部门建立工作机制，在满足国内疫情防控需要基础上,鼓励企业扩大产能,有序出口,为国际社会抗击疫情提供力所能及的帮助。', '', '', '127.0.0.1');
INSERT INTO `liuyan_comment` VALUES ('12', '2020-04-02 14:18:10', '', '3月16日，小汤山定点医院正式启用，主要用于境外来（返）京人员中需筛查人员、疑似人员及轻型、普通型确诊患者的治疗。截至3月29日24时，该院累计接收境外来（返）京需筛查人员2002人，最多一天接待需筛查人员394人。', '', '', '127.0.0.1');
INSERT INTO `liuyan_comment` VALUES ('14', '2020-04-02 14:18:23', '', '今年以来，在各方努力下，21家中央企业定点帮扶的35个县陆续宣布退出贫困县序列，约占全年目标总数的三分之一。在592个国家扶贫开发工作重点县中，中央企业定点帮扶了246个。截至目前，已有219个宣布脱贫“摘帽”或正在接受检查验收。', '', '', '127.0.0.1');
