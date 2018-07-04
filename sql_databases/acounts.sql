CREATE TABLE `accounts` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`userName` TINYTEXT NOT NULL,
	`passHash` TINYTEXT NOT NULL,
	`email` TINYTEXT NOT NULL,
	PRIMARY KEY (`id`)
)
COLLATE='latin1_swedish_ci'
ENGINE=InnoDB
;
