DROP TABLE IF EXISTS `#__helloworld`;

CREATE TABLE `__posts` (
	`id`       INT(11)     NOT NULL AUTO_INCREMENT,
	`title` VARCHAR(25) NOT NULL,
    `content` TEXT,
	`published` tinyint(4) NOT NULL DEFAULT '1',
	PRIMARY KEY (`id`)
)
	ENGINE =MyISAM
	AUTO_INCREMENT =0
	DEFAULT CHARSET =utf8;

INSERT INTO `__posts` (`title`) VALUES
('This is a sample title - 1'),
('This is a sample title - 2');