/*관리자 로그인*/
DROP TABLE IF EXISTS `maTable`;
CREATE TABLE `maTable`(
	`maNum` TINYINT(5) auto_increment,
	`maPw` CHAR(18)NOT NULL,
	
PRIMARY KEY(`maNum`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO `maTable` (`maNum`, `maId`) VALUE (1, 'phoenix2020');
/*뉴스 페이지*/
DROP TABLE IF EXISTS `newsTable`;
CREATE TABLE `newsTable`(
	`nNum` TINYINT(5) auto_increment,
	`nTitle` CHAR(12) NOT NULL,
	`nContents` TEXT NOT NULL,
	`nImg` MEDIUMTEXT NOT NULL,
PRIMARY KEY(`nNum`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO `newsTable`(`nNum`, `nTitle`, `nContents`, `nImg`) VALUE(1, '근엄한 제목', '용맹한 내용', './test_img_1.jpg');