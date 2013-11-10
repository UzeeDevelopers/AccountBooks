-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- ホスト: 127.0.0.1
-- 生成日時: 2013 年 11 月 08 日 18:21
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
-- テーブルの構造 `kamoku_mst`
--

CREATE TABLE IF NOT EXISTS `kamoku_mst` (
  `KAMOKU_CD` varchar(3) NOT NULL COMMENT '科目コード',
  `KAMOKU_NM` varchar(50) NOT NULL COMMENT '科目名称',
  `VALIDATE_FLG` tinyint(4) NOT NULL COMMENT '論理削除フラグ',
  `CREATED_BY` varchar(10) NOT NULL,
  `CREATION_DATE` date NOT NULL,
  `UPDATED_BY` varchar(10) DEFAULT NULL,
  `UPDATE_DATE` date DEFAULT NULL,
  PRIMARY KEY (`KAMOKU_CD`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='科目マスタ';

--
-- テーブルのデータのダンプ `kamoku_mst`
--

INSERT INTO `kamoku_mst` (`KAMOKU_CD`, `KAMOKU_NM`, `VALIDATE_FLG`, `CREATED_BY`, `CREATION_DATE`, `UPDATED_BY`, `UPDATE_DATE`) VALUES
('000', 'テスト', 0, 'sakamoto', '2013-11-08', NULL, NULL),
('001', 'TEST', 0, 'sakamoto', '2013-11-08', NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
