-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- ホスト: 127.0.0.1
-- 生成日時: 2013 年 11 月 10 日 13:00
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
-- テーブルの構造 `gl_ledger`
--

CREATE TABLE IF NOT EXISTS `gl_ledger` (
  `USERID` varchar(5) NOT NULL,
  `KAMOKU1` varchar(3) NOT NULL,
  `AMOUNT1` int(11) NOT NULL,
  `KAMOKU2` varchar(3) NOT NULL,
  `AMOUNT2` int(11) NOT NULL,
  `KAMOKU3` varchar(3) NOT NULL,
  `AMOUNT3` int(11) NOT NULL,
  `KAMOKU4` varchar(3) NOT NULL,
  `AMOUNT4` int(11) NOT NULL,
  `KAMOKU5` varchar(3) NOT NULL,
  `AMOUNT5` int(11) NOT NULL,
  `KAMOKU6` varchar(3) NOT NULL,
  `AMOUNT6` int(11) NOT NULL,
  `KAMOKU7` varchar(3) NOT NULL,
  `AMOUNT7` int(11) NOT NULL,
  `PLAN_VALUE` int(11) NOT NULL,
  `PLAN_KEY` varchar(3) NOT NULL,
  `NOW_VALUE` int(11) NOT NULL,
  `TOTAL_THIS_MONTH` int(11) NOT NULL,
  `TOTAL_THIS_YEAR` int(11) NOT NULL,
  `TOTAL_ALL` int(11) NOT NULL,
  PRIMARY KEY (`USERID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='元帳';

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
