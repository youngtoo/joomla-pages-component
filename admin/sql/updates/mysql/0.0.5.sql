ALTER TABLE`__posts` ADD COLUMN `created` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER `published`;
ALTER TABLE`__posts` ADD COLUMN `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' AFTER `created`;