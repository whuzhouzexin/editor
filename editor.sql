-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2015-06-30 05:58:14
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `editor`
--

-- --------------------------------------------------------

--
-- 表的结构 `new`
--

CREATE TABLE IF NOT EXISTS `new` (
  `new_id` int(8) NOT NULL AUTO_INCREMENT,
  `new_title` varchar(40) COLLATE utf8_bin NOT NULL,
  `new_ahtor` varchar(20) COLLATE utf8_bin NOT NULL,
  `new_content` mediumtext COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`new_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `new`
--

INSERT INTO `new` (`new_id`, `new_title`, `new_ahtor`, `new_content`) VALUES
(1, 'sss', 'ssds', '&lt;p&gt;&lt;img src=&quot;/editor/ueditor/Uploads/ueditor/image/20150630/5591e67ccdbc3.jpg&quot; title=&quot;5591e67ccdbc3.jpg&quot; alt=&quot;aaa.jpg&quot;/&gt;&lt;/p&gt;'),
(2, 'aaa', 'aaaaa', '&lt;p style=&quot;text-align: justify;&quot;&gt;&lt;img width=&quot;530&quot; height=&quot;340&quot; src=&quot;http://api.map.baidu.com/staticimage?center=116.413554,39.911013&amp;zoom=13&amp;width=530&amp;height=340&amp;markers=116.413554,39.911013&quot;/&gt;&lt;/p&gt;'),
(3, 'aaaaa', 'aaaaa', '&lt;pre class=&quot;brush:js;toolbar:false&quot;&gt;&amp;lt;script&amp;gt;\r\n&amp;nbsp;&amp;nbsp;alert(&amp;quot;ni&amp;nbsp;shi&amp;nbsp;sb&amp;quot;);\r\n&amp;lt;/script&amp;gt;&lt;/pre&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
