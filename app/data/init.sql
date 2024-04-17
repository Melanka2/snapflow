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

    CREATE TABLE
    IF NOT EXISTS `manager` (
        `id` int (11) NOT NULL AUTO_INCREMENT,
        `first_name` varchar(100) NOT NULL DEFAULT '',
        `last_name` varchar(100) NOT NULL DEFAULT '',
        `user_id` int (11) NOT NULL UNIQUE ,
        `reg_date` int (11) NOT NULL DEFAULT '0', 
        PRIMARY KEY (`id`),
        FOREIGN KEY (`user_id`) REFERENCES `user` (`id`)
    );

    CREATE TABLE
    IF NOT EXISTS `editor` (
        `id` int (11) NOT NULL AUTO_INCREMENT,
        `first_name` varchar(100) NOT NULL DEFAULT '',
        `last_name` varchar(100) NOT NULL DEFAULT '',
        `user_id` int (11) NOT NULL UNIQUE ,
        `reg_date` int (11) NOT NULL DEFAULT '0', 
        PRIMARY KEY (`id`),
        FOREIGN KEY (`user_id`) REFERENCES `user` (`id`)
    );

    CREATE TABLE
    IF NOT EXISTS `photographer` (
        `id` int (11) NOT NULL AUTO_INCREMENT,
        `first_name` varchar(100) NOT NULL DEFAULT '',
        `last_name` varchar(100) NOT NULL DEFAULT '',
        `user_id` int (11) NOT NULL UNIQUE ,
        `reg_date` int (11) NOT NULL DEFAULT '0', 
        PRIMARY KEY (`id`),
        FOREIGN KEY (`user_id`) REFERENCES `user` (`id`)
    );

    CREATE TABLE
    IF NOT EXISTS `custormer` (
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

CREATE TABLE
    IF NOT EXISTS `booking` (
        `book_id` int(11) NOT NULL AUTO_INCREMENT,
        `event_type` varchar(100) NOT NULL DEFAULT '',
        `book_date` int(11) NOT NULL DEFAULT '0',
        `event_date` int(11) NOT NULL DEFAULT '0',
        `event_id` int(11) NOT NULL DEFAULT '0',
        PRIMARY KEY (`book_id`)
    );

CREATE TABLE
    IF NOT EXISTS `photo`(
        `photo_code` int(11) NOT NULL AUTO_INCREMENT,
        `url` varchar(100) NOT NULL DEFAULT '',
        `date` int(11) NOT NULL DEFAULT '0',
        `album_code` int(11) NOT NULL DEFAULT '0',
        PRIMARY KEY (`photo_code`)
    );

CREATE TABLE
    IF NOT EXISTS `organization`(
        `organi_id` int(11) NOT NULL AUTO_INCREMENT,
        `name` varchar(100) NOT NULL DEFAULT '',
         PRIMARY KEY (`organi_id`)
    );

CREATE TABLE
    IF NOT EXISTS `package`(
        `pack_code` int(11) NOT NULL AUTO_INCREMENT,
        `pack_name` varchar(100) NOT NULL DEFAULT '',
        `soft_copy_price` int(11) NOT NULL DEFAULT '0',
        `hard_copy_price` int(11) NOT NULL DEFAULT '0',
        PRIMARY KEY (`pack_code`)
    );

CREATE TABLE
    IF NOT EXISTS `feedback`(
        `fd_id` int(11) NOT NULL AUTO_INCREMENT,
        `comment` varchar(100) NOT NULL DEFAULT '0',
        `rate` int(11) NOT NULL DEFAULT '0',  
         PRIMARY KEY (`fd_id`)

    );



  