-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2018-02-07 02:23:51
-- 服务器版本： 5.7.20
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dianshang`
--

-- --------------------------------------------------------

--
-- 表的结构 `DS_Address`
--

CREATE TABLE `DS_Address` (
  `uid` int(3) NOT NULL,
  `id` int(11) NOT NULL,
  `region` varchar(200) CHARACTER SET utf8mb4 NOT NULL,
  `address` varchar(15) CHARACTER SET utf8mb4 NOT NULL,
  `number_this` int(15) NOT NULL,
  `name_` varchar(10) CHARACTER SET utf8mb4 NOT NULL,
  `phone` int(13) NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `DS_Address`
--

INSERT INTO `DS_Address` (`uid`, `id`, `region`, `address`, `number_this`, `name_`, `phone`, `type`) VALUES
(1, 3, '111', '111', 111, '111', 111, 0),
(22, 5, '重庆市重庆市万盛区', '1', 2, '1', 1, 0),
(22, 6, '上海市上海市普陀区', '万盟家纺城', 466333, '王', 2147483647, 0),
(22, 15, '省份地级市市、县级市', '11', 2, '2', 2, 0),
(22, 16, '山西省阳泉市平定县', '万盟', 1234, '王~~', 2147483647, 0),
(22, 17, '重庆市重庆市渝中区', '12', 12, '12', 12, 0),
(24, 22, '省份地级市市、县级市', '121', 12, '12', 0, 1),
(27, 23, '天津市天津市河东区', '1', 1, '1', 11, 0),
(27, 24, '北京市北京市西城区', '121', 12, '1', 1, 0),
(30, 42, '河北省廊坊市固安县', '1', 1, '11', 11, 0),
(30, 45, '上海市上海市卢湾区', '2', 2, '2', 2, 0),
(30, 48, '重庆市重庆市巴南区', '1', 1, '1', 11, 0),
(30, 49, '山西省长治市潞城市', '1', 1, '1', 1, 0),
(30, 50, '重庆市重庆市九龙坡区', '2', 2, '2', 2, 0);

-- --------------------------------------------------------

--
-- 表的结构 `DS_Admin`
--

CREATE TABLE `DS_Admin` (
  `id` smallint(2) NOT NULL COMMENT 'id',
  `nickname` varchar(25) CHARACTER SET utf8mb4 NOT NULL COMMENT '昵称',
  `Ip` varchar(16) CHARACTER SET utf8mb4 NOT NULL COMMENT 'ip',
  `number` int(20) NOT NULL COMMENT '账号',
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '时间',
  `HP` int(11) DEFAULT '0' COMMENT ' 头像地址',
  `pwd` varchar(100) CHARACTER SET utf8mb4 NOT NULL COMMENT ' 密码',
  `name` varchar(25) CHARACTER SET utf8mb4 NOT NULL,
  `introduce` varchar(200) CHARACTER SET utf8 NOT NULL COMMENT '自我介绍',
  `position` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT '职位'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `DS_Admin`
--

INSERT INTO `DS_Admin` (`id`, `nickname`, `Ip`, `number`, `time`, `HP`, `pwd`, `name`, `introduce`, `position`) VALUES
(1, 'DSPT', '127.0.0.1', 20171218, '2017-12-22 09:32:09', 0, '$2y$10$8HTHS28/qhX/bxkv8q9KLOMg1Xw2cdqQKgz29EVmUucjQf53OGdzu', 'DSPT', '好品质，好店铺！', '店长');

-- --------------------------------------------------------

--
-- 表的结构 `DS_Advise`
--

CREATE TABLE `DS_Advise` (
  `name` varchar(11) CHARACTER SET utf8mb4 NOT NULL,
  `email` varchar(25) CHARACTER SET utf8mb4 NOT NULL,
  `advise` text CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `DS_Advise`
--

INSERT INTO `DS_Advise` (`name`, `email`, `advise`) VALUES
('111', '11', '11'),
('111', '1111', '11124124121324'),
('1212', '1212', '1212'),
('121', '121', '12'),
('1121', '12312', '12312312'),
('121', '121', '121'),
('?', '?', '?'),
('q', 'q', 'q');

-- --------------------------------------------------------

--
-- 表的结构 `DS_Carousel`
--

CREATE TABLE `DS_Carousel` (
  `id` smallint(2) NOT NULL,
  `ad_name` int(11) NOT NULL COMMENT '名字',
  `enabled` tinyint(1) NOT NULL COMMENT '是否开启',
  `imgpath` varchar(50) CHARACTER SET utf8mb4 NOT NULL COMMENT '图片地址'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `DS_Carousel`
--

INSERT INTO `DS_Carousel` (`id`, `ad_name`, `enabled`, `imgpath`) VALUES
(1, 12, 1, '/Carouselfigure/轮播图1514165686.png'),
(2, 0, 1, '/Carouselfigure/轮播图1514166561.png'),
(3, 1, 1, '/Carouselfigure/轮播图1514166594.png');

-- --------------------------------------------------------

--
-- 表的结构 `DS_Checkout`
--

CREATE TABLE `DS_Checkout` (
  `aid` int(20) NOT NULL COMMENT '账号id',
  `cid` int(2) NOT NULL COMMENT '商品id'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 表的结构 `DS_Color`
--

CREATE TABLE `DS_Color` (
  `id` smallint(3) NOT NULL,
  `name` varchar(15) NOT NULL COMMENT ' 名称',
  `rgb` varchar(20) NOT NULL COMMENT '颜色',
  `ename` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='颜色表';

--
-- 转存表中的数据 `DS_Color`
--

INSERT INTO `DS_Color` (`id`, `name`, `rgb`, `ename`) VALUES
(1, '红色', '#FF0000', 'red'),
(2, '黄色', '#FFFF00', 'yellow'),
(3, '绿色', '#008000', 'green'),
(4, '蓝色', '#0000FF', 'blue');

-- --------------------------------------------------------

--
-- 表的结构 `DS_Comlist`
--

CREATE TABLE `DS_Comlist` (
  `id` int(11) NOT NULL,
  `图片地址` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `商品名称` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `货号` int(9) NOT NULL,
  `作为商品` int(2) NOT NULL,
  `是否包邮` int(2) NOT NULL,
  `商家备注` varchar(15) CHARACTER SET utf8mb4 NOT NULL,
  `上架` int(1) NOT NULL,
  `精品` int(1) NOT NULL,
  `新品` int(1) NOT NULL,
  `热销` int(1) NOT NULL,
  `商品标识` varchar(10) NOT NULL,
  `价格` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `DS_Comlist`
--

INSERT INTO `DS_Comlist` (`id`, `图片地址`, `商品名称`, `货号`, `作为商品`, `是否包邮`, `商家备注`, `上架`, `精品`, `新品`, `热销`, `商品标识`, `价格`) VALUES
(27, '/commodity/商品1514270196.png', '【Jill大姐姐】拼色双面羊毛呢子大衣狐狸毛领过膝中长款外套', 29, 1, 0, '【Jill大姐姐】拼色双面羊毛', 1, 1, 1, 1, '1514510568', 0),
(28, '/commodity/商品1514270219.png', '冬季男士中长款羊毛呢大衣男装羊绒双面呢爸爸装加厚妮子风衣外套', 30, 1, 0, '冬季男士中长款羊毛呢大衣男装羊', 1, 0, 0, 0, '1514510619', 0);

-- --------------------------------------------------------

--
-- 表的结构 `DS_Comment`
--

CREATE TABLE `DS_Comment` (
  `id` int(9) NOT NULL,
  `user` varchar(20) CHARACTER SET utf8 NOT NULL,
  `cloth` int(9) NOT NULL,
  `grade` int(3) NOT NULL,
  `image` int(3) NOT NULL,
  `comment` varchar(200) CHARACTER SET utf8 NOT NULL,
  `star` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `DS_Comment`
--

INSERT INTO `DS_Comment` (`id`, `user`, `cloth`, `grade`, `image`, `comment`, `star`) VALUES
(1, 'admin', 1, 1, 1, 'asfdadsfa', 5),
(2, '王亮亮', 2, 2, 1, '设计费会计按时间', 5);

-- --------------------------------------------------------

--
-- 表的结构 `DS_Comtype`
--

CREATE TABLE `DS_Comtype` (
  `id` int(4) NOT NULL COMMENT 'id',
  `typename` varchar(20) CHARACTER SET utf8mb4 NOT NULL COMMENT '商品分类名称',
  `pid` int(4) NOT NULL COMMENT '父级 id',
  `typedescribe` varchar(200) CHARACTER SET utf8mb4 NOT NULL COMMENT '商品描述'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='商品分类表';

--
-- 转存表中的数据 `DS_Comtype`
--

INSERT INTO `DS_Comtype` (`id`, `typename`, `pid`, `typedescribe`) VALUES
(15, '女装', 0, '女士穿着的衣物统称为女装。服饰的变迁是一部历史，是一个时代发展的缩影。它是这个时代进步、文明、兴旺发达、繁荣昌盛的象征。它在记录历史变革的同时，也映衬着一种民族的文化，传承着当地的历史文化风俗，女装更是其中不可缺少的一部分。女装品牌与款式的多元化推动了时装的发展。'),
(16, '童装', 0, '儿童服装简称童装，指适合儿童穿着的服装。按照年龄段分包括婴儿服装、幼儿服装、小童服装、中童服装、大童服装等。还包括中小学的校园服装等。按照衣服的类型分为：连体服，外套，裤子，卫衣，套装，T恤衫，鞋等。'),
(18, '男装', 0, '男装，是指男性穿于人体起保护和装饰作用的服饰制品。包括上装和下装，男装会根据季节和个人的不同有不同的款式和作用。'),
(26, '女装卫衣', 15, '卫衣'),
(27, '童装卫衣', 16, '卫衣'),
(28, '男装卫衣', 18, '卫衣'),
(29, '女装风衣', 15, '风衣 ，一种防风雨的薄型大衣，又称风雨衣。风衣是服饰中的一种，适合于春、秋、冬季外出穿着，近二三十年来比较流行的服装。由于造型灵活多变、健美潇洒、美观实用、款式新颖、携带方便、富有魅力等特点，深受中青年男女的喜爱，现在老年人也爱穿着。'),
(30, '男装风衣', 18, '风衣 ，一种防风雨的薄型大衣，又称风雨衣。风衣是服饰中的一种，适合于春、秋、冬季外出穿着，近二三十年来比较流行的服装。由于造型灵活多变、健美潇洒、美观实用、款式新颖、携带方便、富有魅力等特点，深受中青年男女的喜爱，现在老年人也爱穿着。');

-- --------------------------------------------------------

--
-- 表的结构 `DS_Log`
--

CREATE TABLE `DS_Log` (
  `id` int(11) NOT NULL,
  `msg` varchar(500) CHARACTER SET utf8mb4 NOT NULL,
  `source` tinyint(1) NOT NULL COMMENT '前台后台',
  `uid` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `DS_Log`
--

INSERT INTO `DS_Log` (`id`, `msg`, `source`, `uid`) VALUES
(1, '店长DSPT于1514171454局域网IP登录本系统', 1, 1),
(2, '店长DSPT于1514173749局域网登录本系统', 1, 1),
(3, '店长DSPT于2017-12-25 03:50:31局域网登录本系统', 1, 1),
(4, '店长DSPT于2017-12-25 08:19:48局域网登录本系统', 1, 1),
(5, '店长DSPT于2017-12-25 08:42:19局域网登录本系统', 1, 1),
(6, '店长DSPT于2017-12-25 08:46:31局域网登录本系统', 1, 1),
(7, '店长DSPT于2017-12-25 09:18:27局域网登录本系统', 1, 1),
(8, '店长DSPT于2017-12-25 09:25:06局域网登录本系统', 1, 1),
(9, '店长DSPT于2017-12-25 11:29:11局域网登录本系统', 1, 1),
(10, '店长DSPT于2017-12-25 11:32:57局域网登录本系统', 1, 1),
(11, '店长DSPT于2017-12-25 11:35:31局域网登录本系统', 1, 1),
(12, '店长DSPT于2017-12-25 11:56:26局域网登录本系统', 1, 1),
(13, '店长DSPT于2017-12-25 12:13:02局域网登录本系统', 1, 1),
(14, '店长DSPT于2017-12-25 12:13:44局域网登录本系统', 1, 1),
(15, '店长DSPT于2017-12-25 12:13:55局域网登录本系统', 1, 1),
(16, '店长DSPT于2017-12-25 12:14:50局域网登录本系统', 1, 1),
(17, '店长DSPT于2017-12-25 12:15:54局域网登录本系统', 1, 1),
(18, '店长DSPT于2017-12-25 12:16:22局域网登录本系统', 1, 1),
(19, '店长DSPT于2017-12-26 03:07:12局域网登录本系统', 1, 1),
(20, '店长DSPT于2017-12-26 03:11:41局域网登录本系统', 1, 1),
(21, '店长DSPT于2017-12-26 03:15:33局域网登录本系统', 1, 1),
(22, '店长DSPT于2017-12-26 03:39:33局域网登录本系统', 1, 1),
(23, '店长DSPT于2017-12-26 03:48:31局域网登录本系统', 1, 1),
(24, '店长DSPT于2017-12-26 03:53:36局域网登录本系统', 1, 1),
(25, '店长DSPT于2017-12-26 03:57:38局域网登录本系统', 1, 1),
(26, '店长DSPT于2017-12-26 06:11:08局域网登录本系统', 1, 1),
(27, '店长DSPT于2017-12-27 06:13:12局域网登录本系统', 1, 1),
(28, '店长DSPT于2017-12-27 07:01:14局域网登录本系统', 1, 1),
(29, '店长DSPT于2017-12-27 07:04:48局域网登录本系统', 1, 1),
(30, '店长DSPT于2017-12-27 07:24:41局域网登录本系统', 1, 1),
(31, '店长DSPT于2017-12-27 07:29:13局域网登录本系统', 1, 1),
(32, '店长DSPT于2017-12-27 07:30:21局域网登录本系统', 1, 1),
(33, '店长DSPT于2017-12-27 07:31:35局域网登录本系统', 1, 1),
(34, '店长DSPT于2017-12-27 07:31:48局域网登录本系统', 1, 1),
(35, '店长DSPT于2017-12-27 07:36:37局域网登录本系统', 1, 1),
(36, '店长DSPT于2017-12-27 07:37:20局域网登录本系统', 1, 1),
(37, '店长DSPT于2017-12-27 07:43:05局域网登录本系统', 1, 1),
(38, '店长DSPT于2017-12-27 07:45:07局域网登录本系统', 1, 1),
(39, '店长DSPT于2017-12-27 07:51:06局域网登录本系统', 1, 1),
(40, '店长DSPT于2017-12-27 07:59:04局域网登录本系统', 1, 1),
(41, '店长DSPT于2017-12-27 07:59:35局域网登录本系统', 1, 1),
(42, '店长DSPT于2017-12-27 08:03:06局域网登录本系统', 1, 1),
(43, '店长DSPT于2017-12-27 08:03:50局域网登录本系统', 1, 1),
(44, '店长DSPT于2017-12-27 08:04:58局域网登录本系统', 1, 1),
(45, '店长DSPT于2017-12-27 08:09:01局域网登录本系统', 1, 1),
(46, '店长DSPT于2017-12-27 08:14:40局域网登录本系统', 1, 1),
(47, '店长DSPT于2017-12-27 08:14:43局域网登录本系统', 1, 1),
(48, '店长DSPT于2017-12-27 11:56:34局域网登录本系统', 1, 1),
(49, '店长DSPT于2017-12-27 12:04:41局域网登录本系统', 1, 1),
(50, '店长DSPT于2017-12-27 12:05:03局域网登录本系统', 1, 1),
(51, '店长DSPT于2017-12-27 12:09:57局域网登录本系统', 1, 1),
(52, '店长DSPT于2017-12-27 12:20:38局域网登录本系统', 1, 1),
(53, '店长DSPT于2017-12-27 12:21:01局域网登录本系统', 1, 1),
(54, '店长DSPT于2017-12-27 12:27:33局域网登录本系统', 1, 1),
(55, '店长DSPT于2017-12-28 00:36:00局域网登录本系统', 1, 1),
(56, '店长DSPT于2017-12-28 00:45:47局域网登录本系统', 1, 1),
(57, '店长DSPT于2017-12-28 00:57:18局域网登录本系统', 1, 1),
(58, '店长DSPT于2017-12-28 00:58:19局域网登录本系统', 1, 1),
(59, '店长DSPT于2017-12-28 01:08:16局域网登录本系统', 1, 1),
(60, '店长DSPT于2017-12-28 01:11:13局域网登录本系统', 1, 1),
(61, '店长DSPT于2017-12-28 01:11:48局域网登录本系统', 1, 1),
(62, '店长DSPT于2017-12-28 01:15:07局域网登录本系统', 1, 1),
(63, '店长DSPT于2017-12-28 01:22:40局域网登录本系统', 1, 1),
(64, '店长DSPT于2017-12-28 01:44:19局域网登录本系统', 1, 1),
(65, '店长DSPT于2017-12-28 01:48:51局域网登录本系统', 1, 1),
(66, '店长DSPT于2017-12-28 01:52:20局域网登录本系统', 1, 1),
(67, '店长DSPT于2017-12-28 01:56:59局域网登录本系统', 1, 1),
(68, '店长DSPT于2017-12-28 02:02:45局域网登录本系统', 1, 1),
(69, '店长DSPT于2017-12-28 02:06:10局域网登录本系统', 1, 1),
(70, '店长DSPT于2017-12-28 02:22:46局域网登录本系统', 1, 1),
(71, '店长DSPT于2017-12-28 02:23:21局域网登录本系统', 1, 1),
(72, '店长DSPT于2017-12-28 02:23:43局域网登录本系统', 1, 1),
(73, '店长DSPT于2017-12-28 02:57:37局域网登录本系统', 1, 1),
(74, '店长DSPT于2017-12-28 03:07:30局域网登录本系统', 1, 1),
(75, '店长DSPT于2017-12-28 03:17:38局域网登录本系统', 1, 1),
(76, '店长DSPT于2017-12-28 09:50:54局域网登录本系统', 1, 1),
(77, '店长DSPT于2017-12-28 09:52:44局域网登录本系统', 1, 1),
(78, '店长DSPT于2017-12-29 00:51:56局域网登录本系统', 1, 1),
(79, '店长DSPT于2017-12-29 01:23:21局域网登录本系统', 1, 1),
(80, '店长DSPT于2018-01-04 09:23:33局域网登录本系统', 1, 1);

-- --------------------------------------------------------

--
-- 表的结构 `DS_oidrid`
--

CREATE TABLE `DS_oidrid` (
  `id` int(3) NOT NULL,
  `oid` int(3) NOT NULL COMMENT '角色id',
  `rid` int(3) NOT NULL COMMENT '权限id'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 表的结构 `DS_rule`
--

CREATE TABLE `DS_rule` (
  `id` int(3) NOT NULL,
  `rid` int(3) DEFAULT NULL COMMENT '权限id',
  `road` varchar(100) CHARACTER SET utf8mb4 DEFAULT NULL COMMENT '权限路径'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 表的结构 `DS_Shoop`
--

CREATE TABLE `DS_Shoop` (
  `id` int(20) NOT NULL,
  `uid` int(20) NOT NULL COMMENT '用户ID',
  `goods_id` int(20) NOT NULL COMMENT '商品ID',
  `num` int(20) NOT NULL COMMENT '商品数量',
  `money` int(20) NOT NULL COMMENT '价钱',
  `comname` varchar(20) NOT NULL COMMENT '商品名称',
  `color` int(10) NOT NULL COMMENT '商品颜色',
  `model` int(10) NOT NULL COMMENT '商品型号'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 表的结构 `DS_Specification`
--

CREATE TABLE `DS_Specification` (
  `cid` smallint(3) NOT NULL COMMENT ' 商品 id',
  `color` varchar(20) CHARACTER SET utf8mb4 NOT NULL COMMENT ' 颜色',
  `size` varchar(10) CHARACTER SET utf8mb4 NOT NULL COMMENT ' 型号',
  `money` tinyint(10) NOT NULL COMMENT '价钱',
  `stock` int(4) NOT NULL COMMENT '库存'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `DS_Specification`
--

INSERT INTO `DS_Specification` (`cid`, `color`, `size`, `money`, `stock`) VALUES
(26, '红色', 'S', 100, 100),
(26, '红色', 'M', 100, 100),
(26, '红色', 'XL', 100, 100),
(26, '红色', 'XXL', 100, 100),
(26, '黄色', 'S', 100, 100),
(26, '黄色', 'M', 100, 100),
(26, '黄色', 'XL', 100, 100),
(26, '黄色', 'XXL', 100, 100),
(26, '蓝色', 'S', 127, 100),
(26, '蓝色', 'M', 100, 100),
(26, '蓝色', 'XL', 100, 100),
(26, '蓝色', 'XXL', 100, 100),
(27, '红色', 'M', 100, 100),
(27, '红色', 'XL', 100, 100),
(27, '红色', 'X', 100, 100),
(27, '黄色', 'M', 100, 100),
(27, '黄色', 'XL', 100, 100),
(27, '黄色', 'X', 100, 100),
(28, '红色', 'XL', 100, 100),
(28, '红色', 'S', 100, 100),
(28, '黄色', 'XL', 100, 100),
(28, '黄色', 'S', 100, 100),
(27, '红色', 'S', 100, 100),
(27, '黄色', 'S', 100, 100),
(27, '绿色', 'S', 100, 100),
(27, '蓝色', 'S', 100, 100);

-- --------------------------------------------------------

--
-- 表的结构 `DS_Store`
--

CREATE TABLE `DS_Store` (
  `store_id` int(1) NOT NULL COMMENT '商铺id',
  `backgroundpic` varchar(100) CHARACTER SET utf8mb4 NOT NULL COMMENT '商铺背景图片',
  `logopic` varchar(100) CHARACTER SET utf8mb4 NOT NULL COMMENT '扇铺logo',
  `business_time` varchar(100) CHARACTER SET utf8mb4 DEFAULT NULL COMMENT '营业时间',
  `cstelephone` varchar(20) CHARACTER SET utf8mb4 NOT NULL COMMENT '客服电话',
  `shop_notice` varchar(200) CHARACTER SET utf8mb4 NOT NULL COMMENT '店铺公告',
  `shop_description` varchar(200) CHARACTER SET utf8mb4 NOT NULL COMMENT '店铺简介',
  `express_assign_auto` int(1) NOT NULL COMMENT '自动派单'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='店铺添加';

--
-- 转存表中的数据 `DS_Store`
--

INSERT INTO `DS_Store` (`store_id`, `backgroundpic`, `logopic`, `business_time`, `cstelephone`, `shop_notice`, `shop_description`, `express_assign_auto`) VALUES
(1, '/commodity/商铺1513928806.png', '/commodity/LOGO1513928806.png', NULL, '123', '123', '123', 0),
(2, '/commodity/商铺1513928892.png', '/commodity/LOGO1513928892.png', NULL, '123', '123', '123', 0),
(3, '/commodity/商铺1513928997.png', '/commodity/LOGO1513928997.png', NULL, '12123', '12321', '1231', 0);

-- --------------------------------------------------------

--
-- 表的结构 `DS_Type`
--

CREATE TABLE `DS_Type` (
  `id` smallint(2) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `DS_Type`
--

INSERT INTO `DS_Type` (`id`, `type`) VALUES
(1, 'S'),
(2, 'M'),
(9, 'X'),
(10, 'XL'),
(11, 'XXL');

-- --------------------------------------------------------

--
-- 表的结构 `DS_User`
--

CREATE TABLE `DS_User` (
  `account` varchar(25) CHARACTER SET utf8mb4 DEFAULT NULL COMMENT '账号',
  `id` int(20) NOT NULL,
  `id_number` char(18) CHARACTER SET utf8mb4 DEFAULT NULL COMMENT '身份证',
  `email` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL COMMENT '邮箱',
  `tel` char(11) CHARACTER SET utf8mb4 DEFAULT NULL COMMENT '电话',
  `password` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL COMMENT '密码',
  `nickname` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL COMMENT '昵称',
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '注册时间',
  `Ip` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(200) COLLATE utf8_unicode_ci NOT NULL COMMENT '地址',
  `age` int(3) NOT NULL,
  `oid` int(3) NOT NULL COMMENT '角色id'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `DS_User`
--

INSERT INTO `DS_User` (`account`, `id`, `id_number`, `email`, `tel`, `password`, `nickname`, `addtime`, `Ip`, `address`, `age`, `oid`) VALUES
('12345678999', 22, '12345678999', '12345678999', '12345678999', '$2y$10$2/vrmbDEgDddDf6owaPZbezXWlaloyoJ./hndL8olKe1Dhqtw2PFK', '1234567899', '2017-12-23 03:53:13', '', '', 11, 0),
('111', 29, '111', '111', '111', '$2y$10$nnoTTa5oJw22z4pQOyFYCuBRtgZaN8hw2ny9pgBjEke67bIK7gp/W', '111', '2017-12-28 01:39:03', '', '', 111, 0),
('123456789', 30, '123456789', '123456789', '12345678901', '$2y$10$p.6VbufMB87M.Mf4ZPhvjup7f9df8oWsYYMEnHzOqqWnWoOisx8G2', NULL, '2017-12-28 02:12:53', '', '', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `DS_Address`
--
ALTER TABLE `DS_Address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `DS_Admin`
--
ALTER TABLE `DS_Admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `DS_Carousel`
--
ALTER TABLE `DS_Carousel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `DS_Color`
--
ALTER TABLE `DS_Color`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `DS_Comlist`
--
ALTER TABLE `DS_Comlist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `DS_Comment`
--
ALTER TABLE `DS_Comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `DS_Comtype`
--
ALTER TABLE `DS_Comtype`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `DS_Log`
--
ALTER TABLE `DS_Log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `DS_oidrid`
--
ALTER TABLE `DS_oidrid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `DS_rule`
--
ALTER TABLE `DS_rule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `DS_Store`
--
ALTER TABLE `DS_Store`
  ADD PRIMARY KEY (`store_id`);

--
-- Indexes for table `DS_Type`
--
ALTER TABLE `DS_Type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `DS_User`
--
ALTER TABLE `DS_User`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `DS_Address`
--
ALTER TABLE `DS_Address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- 使用表AUTO_INCREMENT `DS_Admin`
--
ALTER TABLE `DS_Admin`
  MODIFY `id` smallint(2) NOT NULL AUTO_INCREMENT COMMENT 'id', AUTO_INCREMENT=3;

--
-- 使用表AUTO_INCREMENT `DS_Carousel`
--
ALTER TABLE `DS_Carousel`
  MODIFY `id` smallint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用表AUTO_INCREMENT `DS_Color`
--
ALTER TABLE `DS_Color`
  MODIFY `id` smallint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用表AUTO_INCREMENT `DS_Comlist`
--
ALTER TABLE `DS_Comlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- 使用表AUTO_INCREMENT `DS_Comment`
--
ALTER TABLE `DS_Comment`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用表AUTO_INCREMENT `DS_Comtype`
--
ALTER TABLE `DS_Comtype`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT COMMENT 'id', AUTO_INCREMENT=31;

--
-- 使用表AUTO_INCREMENT `DS_Log`
--
ALTER TABLE `DS_Log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- 使用表AUTO_INCREMENT `DS_oidrid`
--
ALTER TABLE `DS_oidrid`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- 使用表AUTO_INCREMENT `DS_rule`
--
ALTER TABLE `DS_rule`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- 使用表AUTO_INCREMENT `DS_Store`
--
ALTER TABLE `DS_Store`
  MODIFY `store_id` int(1) NOT NULL AUTO_INCREMENT COMMENT '商铺id', AUTO_INCREMENT=4;

--
-- 使用表AUTO_INCREMENT `DS_Type`
--
ALTER TABLE `DS_Type`
  MODIFY `id` smallint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- 使用表AUTO_INCREMENT `DS_User`
--
ALTER TABLE `DS_User`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
