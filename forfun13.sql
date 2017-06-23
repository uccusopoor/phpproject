-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- 主機: 127.0.0.1
-- 產生時間： 2017-06-22 10:06:32
-- 伺服器版本: 5.7.14
-- PHP 版本： 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `forfun13`
--

-- --------------------------------------------------------

--
-- 資料表結構 `invoice`
--

CREATE TABLE `invoice` (
  `inv_id` int(10) NOT NULL,
  `user_account` varchar(40) NOT NULL,
  `date1` timestamp NOT NULL,
  `pro_id` int(10) NOT NULL,
  `quantity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `invoice`
--

INSERT INTO `invoice` (`inv_id`, `user_account`, `date1`, `pro_id`, `quantity`) VALUES
(1, 'disabili23130', '2017-06-22 04:08:21', 2, 4),
(6, 'disabili23130', '2017-06-22 04:08:22', 1, 2),
(7, 'disabili23130', '2017-06-22 04:08:22', 6, 3),
(8, 'disabili23130', '2017-06-22 04:08:22', 1, 0),
(9, 'disabili23130', '2017-06-22 04:08:33', 6, 3),
(10, 'michael', '2017-06-22 04:08:22', 1, 1),
(11, 'michael', '2017-06-22 04:08:22', 1, 0),
(12, 'michael', '2017-06-22 04:08:22', 6, 2),
(13, 'michael', '2017-06-22 07:40:10', 1, 0),
(14, 'michael', '2017-06-22 07:40:10', 6, 12);

-- --------------------------------------------------------

--
-- 資料表結構 `message`
--

CREATE TABLE `message` (
  `message_id` int(10) NOT NULL,
  `user_account` varchar(40) NOT NULL,
  `pro_id` int(10) NOT NULL,
  `content` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `message`
--

INSERT INTO `message` (`message_id`, `user_account`, `pro_id`, `content`) VALUES
(1, 'disabili23130', 1, '還不錯'),
(2, 'disabili23130', 2, 'nice'),
(3, 'disabili23130', 1, 'forfun');

-- --------------------------------------------------------

--
-- 資料表結構 `product`
--

CREATE TABLE `product` (
  `pro_id` int(10) NOT NULL,
  `pro_name` varchar(40) NOT NULL,
  `pro_descript` varchar(200) NOT NULL,
  `pro_price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `product`
--

INSERT INTO `product` (`pro_id`, `pro_name`, `pro_descript`, `pro_price`) VALUES
(1, '嫩薑檸檬汁', '汽水未帶薑辣口感 驅寒飲品', 65),
(2, '草莓桑葚汁', '有機食材 酸中帶甜 健康飲品', 65),
(3, '有機黃梅汁', '有機食材 原汁原味 濃度高 口感濃厚', 65),
(4, '紫蘇洛神汁', '特殊口感 養身飲品', 65),
(5, '紅蔘蜜柑汁', '有機食材 護眼飲品', 65),
(6, '桂圓紅棗汁', '養身飲品 女性喜愛', 65);

-- --------------------------------------------------------

--
-- 資料表結構 `user`
--

CREATE TABLE `user` (
  `user_id` int(10) NOT NULL,
  `user_account` varchar(40) NOT NULL,
  `user_pwd` varchar(40) NOT NULL,
  `user_name` varchar(40) NOT NULL,
  `user_phone` varchar(10) NOT NULL,
  `user_address` varchar(40) NOT NULL,
  `user_authority` int(3) NOT NULL,
  `user_email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `user`
--

INSERT INTO `user` (`user_id`, `user_account`, `user_pwd`, `user_name`, `user_phone`, `user_address`, `user_authority`, `user_email`) VALUES
(1, 'disabili23130', 'asd7326689', 'chan undoler', '0987654322', 'jo.oo', 1, 'xxxxd@gmail.com'),
(2, 'disabili231301', 'openvas', 'dseff', '0973362334', '地球的某一處', 1, 'disabili23130@gmail.com'),
(3, 'username', 's123456', 'ddddd', '0987654322', 'jo.hh', 1, 'jcidsnjcnd@gmail.com'),
(4, 'michael', 'michsu1995', 'michaelhsu', '0932858673', '地球的某一處', 1, 'qqwweerr1013@gmail.com'),
(5, 'q1', 'q12345', 'ㄚㄚㄚ', '0988888888', 'qweqwr', 1, 'q1q3333@gmail.com'),
(6, 'dada', 'svxcv', 'root', '0937654321', 'vvvv', 1, 'idsii@gmail'),
(7, 'root', 'root', 'root', '0987654321', 'dsa', 2, 'iii@gmail'),
(8, 'michael', 'michsu1995', 'michael', '0932858673', '台南市東區裕農二街六號', 1, 'qqwweerr1013@gmail.com');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`inv_id`,`pro_id`),
  ADD KEY `user_id` (`user_account`),
  ADD KEY `pro_id` (`pro_id`);

--
-- 資料表索引 `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`message_id`,`user_account`,`pro_id`),
  ADD KEY `pro_id` (`pro_id`);

--
-- 資料表索引 `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pro_id`);

--
-- 資料表索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `invoice`
--
ALTER TABLE `invoice`
  MODIFY `inv_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- 使用資料表 AUTO_INCREMENT `message`
--
ALTER TABLE `message`
  MODIFY `message_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- 使用資料表 AUTO_INCREMENT `product`
--
ALTER TABLE `product`
  MODIFY `pro_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- 使用資料表 AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- 已匯出資料表的限制(Constraint)
--

--
-- 資料表的 Constraints `invoice`
--
ALTER TABLE `invoice`
  ADD CONSTRAINT `invoice_ibfk_2` FOREIGN KEY (`pro_id`) REFERENCES `product` (`pro_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 資料表的 Constraints `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `message_ibfk_1` FOREIGN KEY (`pro_id`) REFERENCES `product` (`pro_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
