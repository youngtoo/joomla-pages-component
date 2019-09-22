DROP TABLE IF EXISTS `__posts`;

CREATE TABLE `__posts` (
	`id`       INT(11)     NOT NULL AUTO_INCREMENT,
	`title` VARCHAR(250) NOT NULL,
	`catid`	    int(11)    NOT NULL DEFAULT '0',
	`alias`  VARCHAR(40)  NOT NULL DEFAULT '',
    `content` TEXT,
	`featured` TEXT,
	`published` tinyint(4) NOT NULL DEFAULT '1',
	`created`  DATETIME    NOT NULL DEFAULT '0000-00-00 00:00:00',
	`created_by`  INT(10) UNSIGNED NOT NULL DEFAULT '0',
	PRIMARY KEY (`id`)
)
	ENGINE =MyISAM
	AUTO_INCREMENT =0
	DEFAULT CHARSET =utf8;

CREATE UNIQUE INDEX `aliasindex` ON `__posts` (`alias`);

INSERT INTO `__posts` (`title`) VALUES
('This is a sample title - 1'),
('This is a sample title - 2');