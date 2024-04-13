CREATE TABLE
    IF NOT EXISTS `user` (
        `id` int (11) NOT NULL AUTO_INCREMENT,
        `password` varchar(100) NOT NULL DEFAULT '',
        `email` varchar(100) NOT NULL UNIQUE,
        PRIMARY KEY (`id`)
    );

CREATE TABLE
    IF NOT EXISTS `admin` (
        `id` int (11) NOT NULL AUTO_INCREMENT,
        `first_name` varchar(100) NOT NULL DEFAULT '',
        `last_name` varchar(100) NOT NULL DEFAULT '',
        `user_id` int (11) NOT NULL UNIQUE ,
        `reg_date` int (11) NOT NULL DEFAULT '0', 
        PRIMARY KEY (`id`),
        FOREIGN KEY (`user_id`) REFERENCES `user` (`id`)
    );

/*mayashi*/
INSERT IGNORE INTO `user` (`password`, `email`) VALUES
    ( 'password', 'admin@localhost');
INSERT IGNORE INTO `admin` (`first_name`, `last_name`, `user_id`, `reg_date`) VALUES
    ( 'Admin', 'Admin', 1, 0);


CREATE TABLE
    IF NOT EXISTS `payment` (
        `payment_id` int (11) NOT NULL AUTO_INCREMENT,
        `user_id` int (11) NOT NULL DEFAULT '0',
        `amount` int (11) NOT NULL DEFAULT '0',
        `payment_date` int (11) NOT NULL DEFAULT '0',
        PRIMARY KEY (`payment_id`),
        KEY `user_id` (`user_id`),
        KEY `payment_date` (`payment_date`)
    );