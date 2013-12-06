-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- ホスト: 127.0.0.1
-- 生成日時: 2013 年 12 月 06 日 13:10
-- サーバのバージョン: 5.5.32
-- PHP のバージョン: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- データベース: `account_books`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gl_interface`
--

CREATE TABLE IF NOT EXISTS `gl_interface` (
  `USER_ID` varchar(5) NOT NULL,
  `REG_DATE` date NOT NULL,
  `TRX_DATE` date NOT NULL,
  `KAMOKU_CD` varchar(3) NOT NULL,
  `AMOUNT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `gl_interface`
--

INSERT INTO `gl_interface` (`USER_ID`, `REG_DATE`, `TRX_DATE`, `KAMOKU_CD`, `AMOUNT`) VALUES
('99999', '2013-11-24', '2013-11-12', '111', 111),
('99999', '2013-11-24', '2013-11-25', '111', 1000),
('99999', '2013-11-24', '2013-11-13', '111', 1222),
('99999', '2013-11-24', '2013-11-13', '111', 1222),
('99999', '2013-11-24', '2013-11-05', '111', 10000),
('99999', '2013-12-06', '2013-12-11', '111', 100),
('99999', '2013-12-06', '2013-12-06', '444', 1000);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
