ALTER TABLE`__posts` ADD COLUMN `alias` VARCHAR(40) NOT NULL DEFAULT '' AFTER `title`;
UPDATE `__posts` AS h1
SET alias = (SELECT CONCAT('id-', ID) FROM (SELECT * FROM `__posts`) AS h2 WHERE h1.id = h2.id);
CREATE UNIQUE INDEX `aliasindex` ON `__posts` (`alias`);