-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 2018-09-27 17:01:16
-- 服务器版本： 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- 表的结构 `art`
--

DROP TABLE IF EXISTS `art`;
CREATE TABLE IF NOT EXISTS `art` (
  `art_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `cat_id` smallint(5) UNSIGNED DEFAULT '0',
  `user_id` int(10) UNSIGNED DEFAULT '0',
  `nick` varchar(45) DEFAULT '',
  `title` varchar(45) DEFAULT '',
  `content` text,
  `pic` varchar(50) NOT NULL DEFAULT '',
  `thumb` varchar(50) NOT NULL DEFAULT '',
  `pubtime` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `lastup` int(10) UNSIGNED DEFAULT '0',
  `comm` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `tag` varchar(30) NOT NULL DEFAULT '',
  PRIMARY KEY (`art_id`)
) ENGINE=MyISAM AUTO_INCREMENT=113 DEFAULT CHARSET=utf8 COMMENT='文章表';

--
-- 转存表中的数据 `art`
--

INSERT INTO `art` (`art_id`, `cat_id`, `user_id`, `nick`, `title`, `content`, `pic`, `thumb`, `pubtime`, `lastup`, `comm`, `tag`) VALUES
(60, 1, 0, '', '《后汉书.十三》', '侯非侯，王非王，千乘万骑上北芒。', '', '', 1538051141, 0, 0, ''),
(77, 1, 0, '', 'picture1', '', '/upload/2018/09/27/An2hzV.jpg', '/upload/2018/09/27/pvS4R9.png', 1538053869, 0, 0, ''),
(79, 1, 0, '', 'picture2', '', '/upload/2018/09/27/POMuJW.jpg', '/upload/2018/09/27/6T8p9b.png', 1538053995, 0, 0, ''),
(85, 3, 0, '', 'http_build_query', 'http_build_query根据数组产生一个urlencode之后的请求字符串', '', '', 1538055926, 0, 0, ''),
(107, 1, 0, '', '罗斯公国', '罗斯公国打得最精彩的战役就是楚德湖战役。\r\n　　对手是称霸普鲁士的赫赫有名的三大骑士团之一，条顿骑士团，欧洲强大到令人恐怖的军事组织。\r\n　　罗斯的最高指挥官是亚历山大诺夫格罗德公爵。\r\n　　俄罗斯联军一方有1.5万到1.7万，主要是步兵。而条顿骑士团的大约有1万人，以重骑兵为主，其中大骑士应该不下千人，这是一支让整个欧洲都发抖的军队。\r\n　　罗斯联军的步兵排成密集队形，据守冰湖东岸。骑士团的重骑兵以楔形阵发起冲锋。按常理看这是一场毫无悬念的战斗，罗斯步兵在强大的世界第一军事组织面前应该不堪一击。\r\n　　但是亚历山大诺夫格罗德公爵是军事天才，军事才能相当于中国的乐毅。这位乐毅公爵仔细研究了重骑兵的楔形阵，认为弱点在于两翼的防御力量有限，如果重骑不能迅速撕开步兵防线，重骑的两翼会慢慢被侵蚀。\r\n　　亚历山大同志于是把联军中主要的轻步兵安排在中间，列成加厚的方阵，消磨条顿重骑的突击能力，然后把他自己的诺夫格罗德精锐步兵放在两翼。\r\n　　条顿骑士团的攻击开始还是成功的，但无法撕开罗斯步兵的军阵。最惨的还是条顿骑士狂妄自大，非要在楚德湖的冰面上发起冲锋（冬天结了冰），可想而知重骑兵跑到冰面上冲锋是什么样的效果，战争逐渐陷入僵持。\r\n　　亚历山大的精锐步兵攻击骑士团的两翼，骑士团被包围了。亚历山大同志果断的派出最精锐的骑士亲兵卫队，从右翼后方包抄攻击骑士团。\r\n　　可怜的条顿骑士，拥有世界上最强悍的战力，但在湖面上根本发挥不出来，大量的重装甲骑士掉进冰窟窿里，条顿骑士大团长也被俘虏了。\r\n　　每次看这段历史，都为条顿骑士团唏嘘不已。', '', '', 1538059756, 0, 0, ''),
(108, 1, 0, '', '条顿骑士团的惨败', '条顿骑士团败的最惨的是另一场战役，塔能堡。是中世纪欧洲最大规模的战争。\r\n　　对手是波兰、立陶宛联军。\r\n　　著名的波兰小说“十字军骑士”就是讲的这段历史。\r\n　　骑士团的大团长是荣金根，大概有投入1万多名士兵。\r\n　　波兰、立陶宛联军大约有3万名士兵。\r\n　　联军方面指挥官是波兰国王Jagiello和立陶宛大侯爵Witold。\r\n　　条顿骑士大团长荣金根是一个位标准的日耳曼大骑士，开战前，骑居然给波兰国王Jagiello送去两把剑，表示要进行一场骑士之间的较量。斯拉夫人是不敢这么玩命的，立刻拒绝了日耳曼骑士的要求。\r\n　　条顿骑士团的骑士拥有强大的武力，真不是盖的，荣团长挥动旗枪组织冲锋，立陶宛军立刻溃败，波兰的翼骑兵也根本无法抵挡日耳曼骑士强大的冲击力，准备开始溃逃。这时一个意外发生了，大团长兼倒霉蛋荣金根同志在奋勇冲锋时突然遭了冷箭挂掉了，骑士团缺了指挥官陷入混乱，无法阻止有效的进攻，波兰立陶宛联军乘机组织起冲锋，条顿骑士团莫名其妙的大败。\r\n　　真是谋事在人，成事在天。强大的条顿骑士的惨遭溃败居然因为一个意外。', '', '', 1538059815, 0, 0, ''),
(109, 1, 0, '', '红胡子腓特烈一世', '荣金根团长的挂掉会不会跟命运之矛有关呢？1189年，神圣罗马帝国皇帝红胡子腓特烈一世在与教皇和解后，与狮心王理查一世、腓力二世·奥古斯都开始了第三次十字军东征。然而，红胡子腓特烈一世在小亚细亚渡过萨列法河时竟然意外溺死。原因是他突然丢失了传说中的命运之矛。\r\n 命运之矛也叫郎基努斯之枪。正是一个叫郎基努斯的罗马士兵用这杆抢刺入了十字架上耶稣的身体，这只枪因沾有圣血成为圣物。传说持有命运之矛的人可以主宰世界的命运，但失去的人会即时毙命，神圣罗马帝国的皇帝红胡子腓特烈一世就拥有这只命运之矛。', '', '', 1538059930, 0, 0, ''),
(110, 1, 0, '', '希特勒的命运之矛', '二战时期，希特勒从维也纳博物馆夺取了命运之矛，差不多占领了整个欧洲。但是在1945年4月30日下午2点10分，命运之矛又被美军夺走了，不到2小时，希特勒便吞枪自杀而亡，死时是下午3点30分，这难道仅仅是巧合？ 荣金根是否也拥有过这只命运之矛？', '', '', 1538059992, 0, 0, ''),
(112, 1, 0, '', '郎基努斯之枪', '我以为我们每个人都有一把属于自己的命运之矛，当你得到它的时候，你的事业、家庭、健康、财富都相当不错，但是当你失去它的时候，一切都将离你而去。 每个人对生命之矛都有自己的理解，希望我们都能够找到它。', '', '', 1538060224, 0, 0, '');

-- --------------------------------------------------------

--
-- 表的结构 `cat`
--

DROP TABLE IF EXISTS `cat`;
CREATE TABLE IF NOT EXISTS `cat` (
  `cat_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `catname` char(30) NOT NULL DEFAULT '',
  `num` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  PRIMARY KEY (`cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `cat`
--

INSERT INTO `cat` (`cat_id`, `catname`, `num`) VALUES
(1, '杂谈', 71),
(2, '新闻', 0),
(3, '技术', 4);

-- --------------------------------------------------------

--
-- 表的结构 `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `comment_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `art_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `nick` varchar(45) NOT NULL DEFAULT '',
  `email` varchar(30) NOT NULL DEFAULT '',
  `content` varchar(1000) NOT NULL DEFAULT '',
  `ip` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `pubtime` int(10) UNSIGNED NOT NULL DEFAULT '0',
  PRIMARY KEY (`comment_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `comment`
--

INSERT INTO `comment` (`comment_id`, `art_id`, `user_id`, `nick`, `email`, `content`, `ip`, `pubtime`) VALUES
(4, 9, 0, 'jcak', 'Jack@qq.com', '第三条留言', 0, 1537367891),
(9, 59, 0, 'rose', 'rose@qq.com', '一般般', 2130706433, 1538049881);

-- --------------------------------------------------------

--
-- 表的结构 `tag`
--

DROP TABLE IF EXISTS `tag`;
CREATE TABLE IF NOT EXISTS `tag` (
  `tag_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `art_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `tag` char(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`tag_id`),
  KEY `at` (`art_id`,`tag`),
  KEY `ta` (`tag`,`art_id`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tag`
--

INSERT INTO `tag` (`tag_id`, `art_id`, `tag`) VALUES
(31, 33, '33'),
(29, 33, '11'),
(43, 36, 'c'),
(42, 36, 'b'),
(30, 33, '22'),
(41, 36, 'a');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` char(20) NOT NULL DEFAULT '',
  `nick` char(20) NOT NULL DEFAULT '',
  `email` char(30) NOT NULL DEFAULT '',
  `password` char(32) NOT NULL DEFAULT '',
  `lastlogin` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `salt` char(8) DEFAULT '',
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`user_id`, `name`, `nick`, `email`, `password`, `lastlogin`, `salt`) VALUES
(1, 'admin', '', '', '123456', 0, '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
