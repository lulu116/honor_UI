-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2017-11-02 10:17:38
-- 服务器版本： 5.7.17-log
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `honor`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL COMMENT '主键',
  `realname` char(16) NOT NULL COMMENT '管理员的姓名',
  `passwd` char(32) NOT NULL COMMENT '密码',
  `tel` char(11) DEFAULT NULL COMMENT '手机号',
  `loginnum` int(11) NOT NULL DEFAULT '0' COMMENT '登录次数',
  `lastlogin` datetime DEFAULT NULL COMMENT '最后一次登录时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`admin_id`, `realname`, `passwd`, `tel`, `loginnum`, `lastlogin`) VALUES
(2, '宋遥', 'e10adc3949ba59abbe56e057f20f883e', '123456789', 50, '2017-10-28 00:23:42'),
(3, '王涛', 'e10adc3949ba59abbe56e057f20f883e', NULL, 40, '2017-10-28 00:23:42'),
(4, '超级管理员', 'e10adc3949ba59abbe56e057f20f883e', NULL, 38, '2017-10-28 00:23:42');

-- --------------------------------------------------------

--
-- 表的结构 `car`
--

CREATE TABLE `car` (
  `car_id` int(11) NOT NULL COMMENT '主键',
  `product_name` char(120) DEFAULT NULL COMMENT '产品名',
  `product_img` char(240) DEFAULT NULL COMMENT '产品图片路径',
  `product_price` float DEFAULT NULL COMMENT '产品价格',
  `product_num` int(12) DEFAULT '1' COMMENT '产品数量',
  `fare` float DEFAULT NULL COMMENT '产品运费',
  `user_id` int(11) DEFAULT NULL COMMENT '用户id',
  `color_id` int(11) DEFAULT NULL COMMENT '颜色',
  `product_id` int(11) DEFAULT NULL COMMENT '产品ID',
  `size_id` int(11) DEFAULT NULL COMMENT '型号ID'
) ENGINE=MEMORY DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `color`
--

CREATE TABLE `color` (
  `color_id` int(11) NOT NULL COMMENT '主键  颜色',
  `product_id` int(11) DEFAULT NULL COMMENT '产品ID',
  `color_name` char(24) NOT NULL COMMENT '颜色名称'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `color`
--

INSERT INTO `color` (`color_id`, `product_id`, `color_name`) VALUES
(1, NULL, '玫瑰金'),
(2, NULL, '玄金黑');

-- --------------------------------------------------------

--
-- 表的结构 `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL COMMENT '主键  订单号',
  `product_name` char(16) NOT NULL COMMENT '产品名',
  `product_img` char(240) NOT NULL COMMENT '产品图片路径',
  `product_price` int(32) NOT NULL COMMENT '产品价格',
  `product_num` int(11) NOT NULL COMMENT '产品数量',
  `user_address` char(240) NOT NULL COMMENT '用户收货地址',
  `order_time` datetime NOT NULL COMMENT '下订单时间',
  `user_tel` char(11) NOT NULL COMMENT '联系电话',
  `user_id` int(11) NOT NULL COMMENT '用户id',
  `product_id` int(11) NOT NULL COMMENT '产品 id',
  `color_id` int(11) NOT NULL COMMENT '颜色',
  `size_id` int(11) NOT NULL COMMENT '型号',
  `status` int(11) NOT NULL COMMENT '1:未支付；2：已支付； 3:未发货,已发货,发货中, 收货中,已收货,退款,退货等等'
) ENGINE=MEMORY DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL COMMENT '主键',
  `productname` char(240) DEFAULT NULL COMMENT '产品名',
  `introduced` char(120) DEFAULT NULL COMMENT '产品介绍',
  `productprice` float DEFAULT NULL COMMENT '原价',
  `discover` float DEFAULT NULL COMMENT '现价 90%',
  `detail` text COMMENT '产品详情',
  `recommend` int(10) DEFAULT '0' COMMENT '1:用户的推荐',
  `product_img` text COMMENT '主图：多张',
  `views` int(11) DEFAULT '200' COMMENT '浏览次数',
  `product_time` datetime DEFAULT NULL COMMENT '添加时间',
  `username` char(24) DEFAULT NULL COMMENT '添加人',
  `user_id` int(11) DEFAULT NULL COMMENT '用户id',
  `assess` int(24) DEFAULT '0' COMMENT '用户评价'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `product`
--

INSERT INTO `product` (`product_id`, `productname`, `introduced`, `productprice`, `discover`, `detail`, `recommend`, `product_img`, `views`, `product_time`, `username`, `user_id`, `assess`) VALUES
(54, '荣耀V9 play 全网通标配版（铂光金）', '北欧极简设计/大内存', 999, 888, '规格参数\n传播名荣耀V9 play\n上市时间2017年9月\nCPU型号MT6750\nCPU核数八核\n4G网络制式移动4G（TD-LTE）/联通4G（TD-LTE/LTE FDD）/电信 4G（TD-LTE/LTE FDD）\n屏幕尺寸5.2英寸\n屏幕色彩1600万色，色彩饱和度(NTSC)：65%（典型值）\n分辨率HD/720 x 1280pixels\n运行内存（RAM）3GB （备注：可使用的内存容量小于此值，因为手机软件占用的空间）\n机身内存（ROM）32GB （备注：可使用的内存容量小于此值，因为手机软件占用的空间）\n最大支持扩展128GB（非标配）\n主摄像头1300万像素，F/2.2光圈，支持自动对焦（相位对焦）。 备注：不同拍照模式的照片像素可能有差异，请以实际为准\n副摄像头800万像素，F/2.2光圈，支持固定焦距。备注：不同拍照模式的照片像素可能有差异，请以实际为准\n电池容量3000mAh （典型值）/2900mAh （最小值）\n', 1, ',http://localhost/project/upload/image/20170922/1506070078__prd-changwan6.jpg,http://localhost/project/upload/image/20170922/1506070078__prd-honor-magic.jpg,http://localhost/project/upload/image/20170922/1506070078__prd-honor-pad2.jpg', 200, '2017-09-22 16:48:38', '刘婷', NULL, 80),
(55, '荣耀Magic 4GB+64GB 全网通版（玄金黑）', '【限时特惠：下单立减300元，赠价值599元专属真皮皮套】 荣耀magic——灵动八曲面2K屏，双1200W摄像头，人脸识别等智能体验。', 3699, 3500, '规格参数\n传播名荣耀V9 play\n上市时间2017年9月\nCPU型号MT6750\nCPU核数八核\n4G网络制式移动4G（TD-LTE）/联通4G（TD-LTE/LTE FDD）/电信 4G（TD-LTE/LTE FDD）\n屏幕尺寸5.2英寸\n屏幕色彩1600万色，色彩饱和度(NTSC)：65%（典型值）\n分辨率HD/720 x 1280pixels\n运行内存（RAM）3GB （备注：可使用的内存容量小于此值，因为手机软件占用的空间）\n机身内存（ROM）32GB （备注：可使用的内存容量小于此值，因为手机软件占用的空间）\n最大支持扩展128GB（非标配）\n主摄像头1300万像素，F/2.2光圈，支持自动对焦（相位对焦）。 备注：不同拍照模式的照片像素可能有差异，请以实际为准\n副摄像头800万像素，F/2.2光圈，支持固定焦距。备注：不同拍照模式的照片像素可能有差异，请以实际为准\n电池容量3000mAh （典型值）/2900mAh （最小值）\n', 1, ',http://localhost/project/upload/image/20170922/1506070242__800_800_1505353249913.jpg,http://localhost/project/upload/image/20170922/1506070242__800_800_1505721299023.jpg,http://localhost/project/upload/image/20170922/1506070242__800_800_1505353224863.jpg', 200, '2017-09-22 16:50:45', '刘婷', NULL, 160),
(56, '荣耀 NOTE 8 4GB+64GB 全网通版（铂光金）', '【仅限19-23日，下单立减200，领券可再减100】 2K大屏长续航，大开眼界！', 2499, 3500, '\r\n传播名荣耀 NOTE 8\r\nCPU型号麒麟955\r\nCPU核数8核\r\n双卡支持\r\n4G网络制式主卡：移动4G（TDD-LTE）/联通4G（TDD-LTE/FDD-LTE）/电信4G（TDD-LTE/FDD-LTE）\r\n屏幕尺寸6.6英寸\r\n屏幕色彩1670万色\r\n分辨率WQHD(2K) 2560×1440\r\n运行内存（RAM）4GB\r\n机身内存（ROM）64GB\r\n最大支持扩展最高支持128GB（非标配）\r\n主摄像头1300万像素 光学防抖\r\n副摄像头800万像素\r\n电池容量4500mAh（典型值）', 1, ',http://localhost/project/upload/image/20170922/1506070333__prd-honor-9.jpg,http://localhost/project/upload/image/20170922/1506070345__prd-honor-6x.jpg,http://localhost/project/upload/image/20170922/1506070345__prd-honor-8-lite.jpg', 200, '2017-09-22 16:52:27', '刘婷', NULL, 160),
(57, '荣耀8 4GB+64GB 全网通版（魅海蓝）', '【限时特惠：下单立减300元，赠价值599元专属真皮皮套】 荣耀magic——灵动八曲面2K屏，双1200W摄像头，人脸识别等智能体验。', 2500, 2300, '传播名荣耀Magic\r\n上市时间2016年12月\r\nCPU型号麒麟950\r\nCPU核数八核\r\n双卡支持\r\n4G网络制式移动4G（TDD-LTE）/联通4G（TDD-LTE/FDD-LTE）/电信4G（TDD-LTE/FDD-LTE）\r\n屏幕尺寸5.09英寸\r\n屏幕色彩1670万色\r\n分辨率2560*1440 WQHD\r\n运行内存（RAM）4G（备注：可使用的内存容量小于此值，因为手机软件占用的空间）\r\n机身内存（ROM）64G（备注：可使用的内存容量小于此值，因为手机软件占用的空间）\r\n主摄像头1200万*2，F2.2光圈。备注：不同拍照模式的照片像素会有差异\r\n副摄像头800万，F2.4光圈，固定焦点。备注：不同拍照模式的照片像素会有差异\r\n电池容量2900mAh（典型值），2820mAh（最小值）', 1, ',http://localhost/project/upload/image/20170922/1506078439__prd-changwan6.jpg,http://localhost/project/upload/image/20170922/1506078440__prd-honor-6a.jpg,http://localhost/project/upload/image/20170922/1506078440__prd-honor-6x.jpg', 200, '2017-09-22 19:08:00', '刘婷', NULL, 90),
(58, '荣耀畅玩手环 A2（白色）', 'OLED大屏，多点触控；续航长达9天；全天候运动监控，连续心率监测；防尘防水；支持主流Android与IOS系统手机； 9.21-10.21评价赢取移动电源，详见页面活动规则', 256, 189, '主体\r\n品牌	荣耀（Honor）\r\n型号	AW61\r\n规格\r\n匹配系统	操作系统版本Android4.4/IOS8.0以上并支持蓝牙4.2的智能手机\r\n材质	PC面盖，不锈钢边框， TPU表带\r\n电池容量	锂离子聚合物电池（95mAh）\r\n蓝牙	蓝牙4.2\r\n充电接口	吸附式充电座\r\n充电电压	5V\r\n理论充电时间	约1.5H\r\n传感器	重力传感器\r\n屏幕	0.96英寸PMOLED屏，支持三点触控\r\n安全防护	防水防尘等级 IP67\r\n存储温度	\r\n属性\r\n尺寸	主体：约46.8*20.5*11.2mm不含表带；充电底座：约38*19.6*8mm\r\n重量	约22g(含表带)', 1, ',http://localhost/project/upload/image/20170923/1506146804__prd-honora2.jpg,http://localhost/project/upload/image/20170923/1506146818__prd-honora2.jpg', 200, '2017-09-23 14:07:30', '刘婷', NULL, 150),
(59, '荣耀8青春版 全网通标配版（流光金）', '高配/尊享版领券减50元。送PPTV会员权益，点此领取。 双2.5D玻璃/10级美肤自拍。', 2600, 1200, '<p><img src="http://localhost/project/upload/image/20170923/1506147312__800_800_1505353249913.jpg" title="1506147312__800_800_1505353249913.jpg"/></p><p><img src="http://localhost/project/upload/image/20170923/1506147312__800_800_1505721299023.jpg" title="1506147312__800_800_1505721299023.jpg"/></p><p><br/></p>', 1, ',http://localhost/project/upload/image/20170923/1506147289__honor5x.jpg,http://localhost/project/upload/image/20170923/1506147290__honor4A.jpg,http://localhost/project/upload/image/20170923/1506147290__honor7.jpg', 200, '2017-09-23 14:15:16', '刘婷', NULL, 10),
(60, '荣耀V9 全网通高配版 6GB+64GB（极光蓝）', '【仅限19-23日领券下单，标配版省100，高配版省300，尊享版省500】 精致外观，黑白+彩色双1200万像素平行镜头，5.7英寸2K屏，搭载麒麟960芯片，4000mAh电池长久续航，EMUI 5.1操作系统，我想要的快！', 3600, 3500, '<p><img src="http://localhost/project/upload/image/20170923/1506149067__index_lbaner2.jpg" title="1506149067__index_lbaner2.jpg" alt="1506149067__index_lbaner2.jpg" width="920" height="955"/></p><ul class=" list-paddingleft-2"><li><p>传播名<span style="float: left; width: 854px; margin-left: 20px;">荣耀V9</span></p></li><li><p>上市时间<span style="float: left; width: 854px; margin-left: 20px;">2017年02月</span></p></li><li><p>CPU型号<span style="float: left; width: 854px; margin-left: 20px;">麒麟960</span></p></li><li><p>CPU核数<span style="float: left; width: 854px; margin-left: 20px;">八核+微智核i6</span></p></li><li><p>双卡<span style="float: left; width: 854px; margin-left: 20px;">双卡双待单通，主副卡不区分卡槽，Nano SIM</span></p></li><li><p>4G网络制式<span style="float: left; width: 854px; margin-left: 20px;">移动4G（TD-LTE）/联通4G（TD-LTE/LTE FDD）/电信4G（TD-LTE/LTE FDD）</span></p></li><li><p>屏幕尺寸<span style="float: left; width: 854px; margin-left: 20px;">5.7英寸</span></p></li><li><p>屏幕色彩<span style="float: left; width: 854px; margin-left: 20px;">1670万色</span></p></li><li><p>分辨率<span style="float: left; width: 854px; margin-left: 20px;">2560*1440</span></p></li><li><p>运行内存（RAM）<span style="float: left; width: 854px; margin-left: 20px;">6GB（备注：可使用的内存容量小于此值，因为手机软件占用的空间）</span></p></li><li><p>机身内存（ROM）<span style="float: left; width: 854px; margin-left: 20px;">64GB（备注：可使用的内存容量小于此值，因为手机软件占用的空间）</span></p></li><li><p>最大支持扩展<span style="float: left; width: 854px; margin-left: 20px;">最高支持128GB（非标配）</span></p></li><li><p>主摄像头<span style="float: left; width: 854px; margin-left: 20px;">1200万黑白+1200万彩色，F2.2光圈</span></p></li><li><p>副摄像头<span style="float: left; width: 854px; margin-left: 20px;">800万，F2.0光圈</span></p></li><li><p>电池容量<span style="float: left; width: 854px; margin-left: 20px;">4000mAh（典型容量）/3900mAh（最小容量）；支持9V/2A快速充电</span></p></li></ul><p><br/></p>', 1, ',http://localhost/project/upload/image/20170923/1506148980__428_428_1505115798704mp.jpg,http://localhost/project/upload/image/20170923/1506148980__800_800_1503976958522 (1).jpg,http://localhost/project/upload/image/20170923/1506148980__800_800_1503976958525.jpg', 200, '2017-09-23 14:45:07', '刘婷', NULL, 800),
(61, '华为铂金3（A51dk565）', '体格较小，轻便', 3200, 3100, '', 1, ',http://localhost/project/upload/image/20170926/1506388679__800_800_1476778823909.jpg,http://localhost/project/upload/image/20170926/1506388696__800_800_1476778823909 (2).jpg,http://localhost/project/upload/image/20170926/1506388696__800_800_1476778849411mp.jpg', 200, '2017-09-26 09:18:22', '刘婷', NULL, 300),
(62, '111', '介绍', 1200, 8, '<p>111</p>', 0, ',http://localhost/project/upload/image/20170926/1506414006__55_55_1491796092449mp.jpg,http://localhost/project/upload/image/20170926/1506414006__40_40_1505721345559mp.jpg,http://localhost/project/upload/image/20170926/1506414006__55_55_1491796092449mp - 副本.jpg,http://localhost/project/upload/image/20170926/1506414006__40_40_1505721345559mp.jpg', 200, '2017-09-26 16:20:23', '刘婷', NULL, 1500),
(63, '荣耀9 全网通标配版 4GB+64GB（幻夜黑）', '购机赠流量券，免费享受价值128元天际通1GB全球流量，还可参与抽奖（荣耀手环3等您拿），现货速发。 2000万变焦双摄，拍照就像用单反；3D沉浸式Hi-Fi音质，听歌就像听现场。', 3500, 2500, '<p><img src="http://localhost/project/upload/image/20170927/1506476041__201703281221266604483.jpg" title="1506476041__201703281221266604483.jpg"/></p><p><img src="http://localhost/project/upload/image/20170927/1506476041__201709201555479992041.jpg" title="1506476041__201709201555479992041.jpg"/></p><p><img src="http://localhost/project/upload/image/20170927/1506476041__20170904190518056931.jpg" title="1506476041__20170904190518056931.jpg"/></p><h2 style="margin: 0px; padding: 0px; font-size: 22px; width: 100px; float: left; position: relative; top: -1px;">主要参数</h2><ul style="list-style-type: none;" class=" list-paddingleft-2"><li><p>传播名<span style="float: left; width: 854px; margin-left: 20px;">荣耀9</span></p></li><li><p>上市时间<span style="float: left; width: 854px; margin-left: 20px;">2017年6月</span></p></li><li><p>CPU型号<span style="float: left; width: 854px; margin-left: 20px;">麒麟960</span></p></li><li><p>CPU核数<span style="float: left; width: 854px; margin-left: 20px;">八核 + 微智核i6</span></p></li><li><p>双卡<span style="float: left; width: 854px; margin-left: 20px;">双卡双待单通，Nano SIM</span></p></li><li><p>4G网络制式<span style="float: left; width: 854px; margin-left: 20px;">移动4G（TD-LTE）/联通4G（TD-LTE/LTE FDD）/电信4G（TD-LTE/LTE FDD）</span></p></li><li><p>屏幕尺寸<span style="float: left; width: 854px; margin-left: 20px;">5.15英寸</span></p></li><li><p>屏幕色彩<span style="float: left; width: 854px; margin-left: 20px;">1670万色</span></p></li><li><p>分辨率<span style="float: left; width: 854px; margin-left: 20px;">1920×1080</span></p></li><li><p>运行内存（RAM）<span style="float: left; width: 854px; margin-left: 20px;">4GB（备注：可使用的内存容量小于此值，因为手机软件占用的空间）</span></p></li><li><p>机身内存（ROM）<span style="float: left; width: 854px; margin-left: 20px;">64GB（备注：可使用的内存容量小于此值，因为手机软件占用的空间）</span></p></li><li><p>最大支持扩展<span style="float: left; width: 854px; margin-left: 20px;">最高支持256GB（非标配）</span></p></li><li><p>主摄像头<span style="float: left; width: 854px; margin-left: 20px;">2000万像素（黑白）+1200万像素（彩色），F2.2光圈（备注：不同拍照模式的照片像素会有差异）</span></p></li><li><p>副摄像头<span style="float: left; width: 854px; margin-left: 20px;">800万，F2.0光圈</span></p></li><li><p>电池容量<span style="float: left; width: 854px; margin-left: 20px;">3200mAh（典型容量）/3100mAh（额定容量）；支持9V/2A充电</span></p></li></ul><p style="margin-top: 0px; margin-bottom: 0px; padding: 0px; position: absolute; bottom: 1px; width: 1349px; text-align: center;"><a class="product-detail-btn" style="cursor: pointer; font-size: 14px; padding: 11px 38px; border: 1px solid rgb(164, 164, 164); background: rgb(255, 255, 255); border-radius: 2px; position: relative; top: -10px;">查看全部参数</a></p><h2 style="margin: 0px; padding: 0px; font-size: 22px; width: 100px; float: left; position: relative; top: -1px;">主体</h2><ul style="list-style-type: none;" class=" list-paddingleft-2"><li><p>品牌<span style="float: left; width: 854px; margin-left: 20px;">Honor</span></p></li><li><p>型号<span style="float: left; width: 854px; margin-left: 20px;">STF-AL00</span></p></li></ul><p><br/></p>', 1, ',http://localhost/project/upload/image/20170927/1506475981__800_800_1505721299023.jpg,http://localhost/project/upload/image/20170927/1506475981__800_800_1505470143841.jpg,http://localhost/project/upload/image/20170927/1506475982__800_800_1505353249913.jpg', 200, '2017-09-27 09:34:25', '刘婷', NULL, 1000),
(64, '华为荣耀v2', 'dsfdskjlfjasdklfds', 3000, 2000, '<p><img src="http://localhost/project/upload/image/20170927/1506495697__800_800_1476778849411mp.jpg" title="1506495697__800_800_1476778849411mp.jpg"/></p><p><img src="http://localhost/project/upload/image/20170927/1506495697__800_800_1503976958522 (1).jpg" title="1506495697__800_800_1503976958522 (1).jpg"/></p><p><img src="http://localhost/project/upload/image/20170927/1506495697__800_800_1503976958522.jpg" title="1506495697__800_800_1503976958522.jpg"/></p><p><br/></p>', 1, ',http://localhost/project/upload/image/20170927/1506495681__800_800_1503976958525.jpg,http://localhost/project/upload/image/20170927/1506495681__800_800_1505353224863.jpg,http://localhost/project/upload/image/20170927/1506495681__800_800_1505353239075.jpg', 200, '2017-09-27 15:01:46', '宋遥', NULL, 300),
(67, 'HUAWEI 麦芒5 全网通高配版（香槟金）', '16日10点~22日22点，微信支付单笔满200元，随机立减最高100元。', 2399, 2299, '<p><img src="http://localhost/project/upload/image/20171022/1508654197__201702220950493791839.jpg" title="1508654197__201702220950493791839.jpg"/></p><p><img src="http://localhost/project/upload/image/20171022/1508654197__201610181616383163089.jpg" title="1508654197__201610181616383163089.jpg"/></p><p><img src="http://localhost/project/upload/image/20171022/1508654197__201703141101595554595.jpg" title="1508654197__201703141101595554595.jpg"/></p><p><img src="http://localhost/project/upload/image/20171022/1508654197__201703141101599052646.jpg" title="1508654197__201703141101599052646.jpg"/></p><p><br/></p>', 1, ',http://localhost/project/upload/image/20171022/1508654070__800_800_1467859442793.jpg,http://localhost/project/upload/image/20171022/1508654070__800_800_1467859642209mp.jpg,http://localhost/project/upload/image/20171022/1508654070__800_800_1467859445524.jpg', 200, '2017-10-22 14:37:50', '超级管理员', NULL, 4257),
(68, '21', '11', 11, 1, '<p>2323</p>', 1, ',http://localhost/project/upload/image/20171023/1508766417__428_428_1505115798704mp.jpg,http://localhost/project/upload/image/20171023/1508766417__800_800_1467859442793.jpg,http://localhost/project/upload/image/20171023/1508766417__800_800_1467859445524.jpg', 200, '2017-10-23 21:47:01', '宋遥', NULL, 1),
(70, '华为荣耀8', '11111', 1111, 0.8, '<p>这是<br/></p>', 1, ',http://localhost/project/upload/image/20171023/1508768280__d_s1.jpg,http://localhost/project/upload/image/20171023/1508768280__d_s.jpg', 200, '2017-10-23 22:19:50', '宋遥', NULL, 1111),
(71, '华为荣耀v8红色版', '这是一款非常轻量级的手机，大多数的女性朋友应该非常喜欢', 3200, 3100, '<p><img src="http://localhost/project/upload/image/20171026/1509014073__201703141101595554595.jpg" title="1509014073__201703141101595554595.jpg"/></p><p><img src="http://localhost/project/upload/image/20171026/1509014073__201707121430113509412.jpg" title="1509014073__201707121430113509412.jpg"/></p><p><img src="http://localhost/project/upload/image/20171026/1509014073__201703141101599052646.jpg" title="1509014073__201703141101599052646.jpg"/></p><p><br/></p>', 1, ',http://localhost/project/upload/image/20171026/1509014036__800_800_1503976958525.jpg,http://localhost/project/upload/image/20171026/1509014056__prd-honor-9.jpg,http://localhost/project/upload/image/20171026/1509014056__prd-honor-v9.jpg', 200, '2017-10-26 18:34:42', '宋遥', NULL, 3000),
(91, '测试的产品', '测试的产品', 1990, 0.9, '<p><img src="http://localhost//project/upload/image/20170920/1505875309__55_55_1491796095597.jpg"/></p><p><img src="http://localhost//project/upload/image/20170920/1505872964__55_55_1491796095591.jpg"/></p><p><br/></p>', 1, ',http://localhost//project/upload/image/20170920/1505875309__55_55_1491796095598.jpg,http://localhost//project/upload/image/20170920/1505875309__55_55_1491796095597.jpg', 200, '2017-10-28 00:24:26', '宋遥', NULL, 300);

-- --------------------------------------------------------

--
-- 表的结构 `size`
--

CREATE TABLE `size` (
  `size_id` int(11) NOT NULL COMMENT '主键  型号',
  `product_id` int(11) DEFAULT NULL COMMENT '产品ID',
  `size_name` char(24) NOT NULL COMMENT '型号名称'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `size`
--

INSERT INTO `size` (`size_id`, `product_id`, `size_name`) VALUES
(1, NULL, '4GB+64GB'),
(2, NULL, '128GB'),
(3, NULL, '16GB');

-- --------------------------------------------------------

--
-- 表的结构 `stock`
--

CREATE TABLE `stock` (
  `stock_id` int(11) NOT NULL COMMENT '主键  库存',
  `product_id` int(11) DEFAULT NULL COMMENT '产品ID',
  `size_id` int(11) DEFAULT NULL COMMENT '主键  型号',
  `color_id` int(11) DEFAULT NULL COMMENT '主键  颜色',
  `stock_num` int(24) NOT NULL COMMENT '库存数量'
) ENGINE=MEMORY DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL COMMENT '主键',
  `username` char(16) NOT NULL COMMENT '用户的姓名',
  `userpwd` char(32) NOT NULL COMMENT '密码',
  `user_img` char(240) DEFAULT NULL COMMENT '头像：保存图片路径',
  `usertel` char(11) DEFAULT NULL COMMENT '手机号',
  `loginnum` int(11) DEFAULT NULL COMMENT '登录次数',
  `registime` datetime DEFAULT NULL COMMENT '注册时间',
  `userip` text COMMENT '用户IP',
  `loginout` datetime DEFAULT NULL COMMENT '下线时间',
  `reciveaddress` char(240) DEFAULT NULL COMMENT '用户收货地址',
  `usercode` int(12) DEFAULT NULL COMMENT '验证码',
  `logintimes` datetime DEFAULT NULL COMMENT '用户登录时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`user_id`, `username`, `userpwd`, `user_img`, `usertel`, `loginnum`, `registime`, `userip`, `loginout`, `reciveaddress`, `usercode`, `logintimes`) VALUES
(1, '刘婷', '123456', NULL, '15881328936', NULL, NULL, NULL, NULL, NULL, 91582, '2017-10-28 00:26:38'),
(2, '刘婷', '123456', NULL, '15881328936', NULL, NULL, NULL, NULL, NULL, 91582, '2017-10-28 00:26:38'),
(3, '', 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-10-28 00:26:38'),
(4, '王小三', '123456', NULL, '123456789', 106, NULL, NULL, NULL, NULL, 55243, '2017-10-28 00:26:38'),
(5, '王小三', '123456', NULL, '123456789', 106, NULL, NULL, NULL, NULL, 55243, '2017-10-28 00:26:38'),
(6, '王小三', '123456', NULL, '123456789', 106, NULL, NULL, NULL, NULL, 55243, '2017-10-28 00:26:38'),
(7, '王小三', '123456', NULL, '123456789', 106, NULL, NULL, NULL, NULL, 55243, '2017-10-28 00:26:38'),
(8, '王小三', '123456', NULL, '123456789', 106, NULL, NULL, NULL, NULL, 55243, '2017-10-28 00:26:38'),
(9, '王小三', '123456', NULL, '123456789', 106, NULL, NULL, NULL, NULL, 55243, '2017-10-28 00:26:38'),
(10, '刘婷', '123456', NULL, '123456789', 106, NULL, NULL, NULL, '四川省成都市科华北路52号', 72054, '2017-10-28 00:26:38'),
(11, '刘婷', '123456', NULL, '123456789', 106, NULL, NULL, NULL, '四川省成都市科华北路52号', 72054, '2017-10-28 00:26:38'),
(12, '刘婷', '123456', NULL, '123456789', 106, NULL, NULL, NULL, '四川省成都市科华北路52号', 72054, '2017-10-28 00:26:38'),
(13, '刘婷', '123456', NULL, '123456789', 106, NULL, NULL, NULL, '四川省成都市科华北路52号', 72054, '2017-10-28 00:26:38'),
(14, '刘婷', '123456', NULL, '123456789', 106, NULL, NULL, NULL, '四川省成都市科华北路52号', 72054, '2017-10-28 00:26:38'),
(15, '刘婷', '123456', NULL, '123456789', 106, NULL, NULL, NULL, '四川省成都市科华北路52号', 72054, '2017-10-28 00:26:38'),
(16, '11', '555', NULL, '55555', 106, NULL, NULL, NULL, '4242', 53262, '2017-10-28 00:26:38'),
(17, '424', '424', NULL, '424', 106, NULL, NULL, NULL, '4242', 65509, '2017-10-28 00:26:38'),
(18, '1', '2', NULL, '12', 106, NULL, NULL, NULL, '11', 12345, '2017-10-28 00:26:38'),
(19, '1212', '121', NULL, '121', 106, '2017-09-20 17:30:57', NULL, NULL, '23234', 20257, '2017-10-28 00:26:38'),
(20, '刘在', 'e10adc3949ba59abbe56e057f20f883e', NULL, '1254877', 106, '2017-09-20 17:43:48', NULL, NULL, '4545', 99736, '2017-10-28 00:26:38'),
(22, '刘婷婷', 'e10adc3949ba59abbe56e057f20f883e', NULL, '123456789', NULL, '2017-09-20 20:18:41', NULL, NULL, '自贡市', 77548, '2017-10-28 00:26:38'),
(23, '小李', 'e10adc3949ba59abbe56e057f20f883e', NULL, '123456789', NULL, '2017-09-21 11:07:03', NULL, NULL, '科华北路99号', 25678, '2017-10-28 00:26:38'),
(24, '刘婷', '96e79218965eb72c92a549dd5a330112', NULL, '111111', NULL, '2017-09-21 13:25:56', NULL, NULL, '11', 39589, '2017-10-28 00:26:38'),
(26, '伍文', 'e10adc3949ba59abbe56e057f20f883e', NULL, '123456789', NULL, '2017-09-27 09:53:35', NULL, NULL, '四川省广元市', 24903, '2017-10-28 00:26:38'),
(27, '涛哥', 'e10adc3949ba59abbe56e057f20f883e', NULL, '15846671544', NULL, '2017-09-27 14:21:06', NULL, NULL, '四川省成都市', 9042, '2017-10-28 00:26:38'),
(28, '刘婷123', 'e10adc3949ba59abbe56e057f20f883e', NULL, '111111111', NULL, '2017-09-27 15:03:10', NULL, NULL, '成都市科华北路99号', 44424, '2017-10-28 00:26:38'),
(29, '刘婷', 'e10adc3949ba59abbe56e057f20f883e', NULL, '11111', NULL, '2017-10-10 22:45:11', NULL, NULL, '正日', 4157, '2017-10-28 00:26:38'),
(30, '1', '96e79218965eb72c92a549dd5a330112', NULL, '111111', NULL, '2017-10-10 22:46:05', NULL, NULL, '旧路', 39083, '2017-10-28 00:26:38'),
(31, '刘婷111', 'e10adc3949ba59abbe56e057f20f883e', NULL, '111111', NULL, '2017-10-10 22:47:14', NULL, NULL, '压顶', 46165, '2017-10-28 00:26:38'),
(32, 'user', '25f9e794323b453885f5181f1b624d0b', NULL, '123456789', NULL, '2017-10-22 14:41:39', NULL, NULL, '四川省武侯区望江路棕竹街', 10106, '2017-10-28 00:26:38'),
(33, '刘婷123', '25f9e794323b453885f5181f1b624d0b', NULL, '111111111', NULL, '2017-10-22 14:44:03', NULL, NULL, '四川省成都市', 13350, '2017-10-28 00:26:38'),
(34, '刘婷1111', '25f9e794323b453885f5181f1b624d0b', NULL, '15881328936', NULL, '2017-10-26 18:36:19', NULL, NULL, '四川省成都市武侯区科华中路', 37099, '2017-10-28 00:26:38'),
(35, '随便写', 'e10adc3949ba59abbe56e057f20f883e', NULL, '1518467849', NULL, '2017-10-27 22:59:30', NULL, NULL, '随便填', 73449, '2017-10-28 00:26:38'),
(36, '宋遥', 'e10adc3949ba59abbe56e057f20f883e', NULL, '15181308720', NULL, '2017-10-27 23:14:23', NULL, NULL, '四川自贡', 38855, '2017-10-28 00:26:38'),
(37, '宋遥', 'e10adc3949ba59abbe56e057f20f883e', NULL, '15181308721', NULL, '2017-10-27 23:25:07', NULL, NULL, '四川自贡', 59292, '2017-10-28 00:26:38'),
(38, '宋遥22', 'e10adc3949ba59abbe56e057f20f883e', NULL, '15181308721', NULL, '2017-10-27 23:45:06', NULL, NULL, '四川', 17856, '2017-10-28 00:26:38'),
(39, '宋遥', 'e10adc3949ba59abbe56e057f20f883e', NULL, '158837245', NULL, '2017-10-27 23:50:03', NULL, NULL, '四川自贡', 51007, '2017-10-28 00:26:38'),
(40, '宋遥1', 'e10adc3949ba59abbe56e057f20f883e', NULL, '15181308721', NULL, '2017-10-27 23:56:41', NULL, NULL, '四川自贡', 73488, '2017-10-28 00:26:38'),
(41, '宋遥112', 'e10adc3949ba59abbe56e057f20f883e', NULL, '15181308721', NULL, '2017-10-28 00:01:42', NULL, NULL, '四川自贡', 42779, '2017-10-28 00:26:38'),
(42, '宋遥22', 'e10adc3949ba59abbe56e057f20f883e', NULL, '15181308721', NULL, '2017-10-28 00:13:55', NULL, NULL, '四川自贡', 14116, '2017-10-28 00:26:38'),
(43, '宋遥1号', 'e10adc3949ba59abbe56e057f20f883e', NULL, '15181308721', NULL, '2017-10-28 00:26:01', NULL, NULL, '四川自贡', 95031, '2017-10-28 00:26:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`car_id`);

--
-- Indexes for table `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`color_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`size_id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`stock_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键', AUTO_INCREMENT=5;
--
-- 使用表AUTO_INCREMENT `car`
--
ALTER TABLE `car`
  MODIFY `car_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键';
--
-- 使用表AUTO_INCREMENT `color`
--
ALTER TABLE `color`
  MODIFY `color_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键  颜色', AUTO_INCREMENT=3;
--
-- 使用表AUTO_INCREMENT `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键  订单号';
--
-- 使用表AUTO_INCREMENT `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键', AUTO_INCREMENT=92;
--
-- 使用表AUTO_INCREMENT `size`
--
ALTER TABLE `size`
  MODIFY `size_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键  型号', AUTO_INCREMENT=4;
--
-- 使用表AUTO_INCREMENT `stock`
--
ALTER TABLE `stock`
  MODIFY `stock_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键  库存';
--
-- 使用表AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键', AUTO_INCREMENT=44;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
