CREATE TABLE
    IF NOT EXISTS `user` (
        `id` int (11) NOT NULL AUTO_INCREMENT,
        `password` varchar(100) NOT NULL DEFAULT '',
        `email` varchar(100) NOT NULL UNIQUE,
        `rols` varchar(100) NOT NULL DEFAULT '',
        PRIMARY KEY (`id`)
    );

    /*mayashi*/
INSERT IGNORE INTO `user` (`password`, `email`)
VALUES
    ('password', 'admin@localhost');

CREATE TABLE
    IF NOT EXISTS `admin` (
        `id` int (11) NOT NULL AUTO_INCREMENT,
        `first_name` varchar(100) NOT NULL DEFAULT '',
        `last_name` varchar(100) NOT NULL DEFAULT '',
        `user_id` int (11) NOT NULL UNIQUE,
        `reg_date` int (11) NOT NULL DEFAULT '0',
        PRIMARY KEY (`id`)
    );

INSERT IGNORE INTO `admin` (`first_name`, `last_name`, `user_id`, `reg_date`)
VALUES
    ('Admin', 'Admin', 1, 0);


CREATE TABLE
    IF NOT EXISTS `manager` (
        `id` int (11) NOT NULL AUTO_INCREMENT,
        `first_name` varchar(100) NOT NULL DEFAULT '',
        `last_name` varchar(100) NOT NULL DEFAULT '',
        `user_id` int (11) NOT NULL UNIQUE,
        `reg_date` int (11) NOT NULL DEFAULT '0',
        PRIMARY KEY (`id`)
    );

INSERT IGNORE INTO `manager` (`first_name`, `last_name`, `user_id`, `reg_date`)
VALUES
    ('manager1', 'manager1', 1, 0);

INSERT IGNORE INTO `manager` (`first_name`, `last_name`, `user_id`, `reg_date`)
VALUES
    ('manager2', 'manager2', 2, 0);

INSERT IGNORE INTO `manager` (`first_name`, `last_name`, `user_id`, `reg_date`)
VALUES
    ('manager3', 'manager3', 3, 0);



CREATE TABLE
    IF NOT EXISTS `editor` (
        `id` int (11) NOT NULL AUTO_INCREMENT,
        `first_name` varchar(100) NOT NULL DEFAULT '',
        `last_name` varchar(100) NOT NULL DEFAULT '',
        `user_id` int (11) NOT NULL UNIQUE,
        `reg_date` int (11) NOT NULL DEFAULT '0',
        PRIMARY KEY (`id`)
    );

    INSERT IGNORE INTO `editor` (`first_name`, `last_name`, `user_id`, `reg_date`)
    VALUES
    ('editor1', 'editor1', 1, 0);

    INSERT IGNORE INTO `editor` (`first_name`, `last_name`, `user_id`, `reg_date`)
    VALUES
    ('editor2', 'editor2', 2, 0);

    INSERT IGNORE INTO `editor` (`first_name`, `last_name`, `user_id`, `reg_date`)
    VALUES
    ('editor3', 'editor3', 3, 0);

CREATE TABLE
    IF NOT EXISTS `photographer` (
        `id` int (11) NOT NULL AUTO_INCREMENT,
        `first_name` varchar(100) NOT NULL DEFAULT '',
        `last_name` varchar(100) NOT NULL DEFAULT '',
        `user_id` int (11) NOT NULL UNIQUE,
        `reg_date` int (11) NOT NULL DEFAULT '0',
        PRIMARY KEY (`id`)
    );

    INSERT IGNORE INTO `photographer`(`first_name`, `last_name`, `user_id`, `reg_date`)
    VALUES
        ('photography1','photography1',1,0);

        INSERT IGNORE INTO `photographer`(`first_name`, `last_name`, `user_id`, `reg_date`)
    VALUES
        ('photography2','photography2',2,0);

        INSERT IGNORE INTO `photographer`(`first_name`, `last_name`, `user_id`, `reg_date`)
    VALUES
        ('photography3','photography3',3,0);
    

CREATE TABLE
    IF NOT EXISTS `custormer` (
        `id` int (11) NOT NULL AUTO_INCREMENT,
        `first_name` varchar(100) NOT NULL DEFAULT '',
        `last_name` varchar(100) NOT NULL DEFAULT '',
        `user_id` int (11) NOT NULL UNIQUE,
        `reg_date` int (11) NOT NULL DEFAULT '0',
        PRIMARY KEY (`id`)
    );

INSERT IGNORE INTO `custormer`(`first_name`, `last_name`, `user_id`, `reg_date`)
      VALUES
        ('custormer1','custormer1',1,0);

        INSERT IGNORE INTO `custormer`(`first_name`, `last_name`, `user_id`, `reg_date`)
    VALUES
        ('custormer2','custormer2',2,0);

INSERT IGNORE INTO `custormer`(`first_name`, `last_name`, `user_id`, `reg_date`)
    VALUES
        ('custormer3','custormer3',3,0);

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

INSERT IGNORE INTO `payment`(`user_id`,`amount`,`payment_date`)
VALUES
    (1,200,0);

INSERT IGNORE INTO `payment`(`user_id`,`amount`,`payment_date`)
VALUES
    (2,300,0);

INSERT IGNORE INTO `payment`(`user_id`,`amount`,`payment_date`)
VALUES
    (3,400,0);



CREATE TABLE
    IF NOT EXISTS `booking` (
        `book_id` int (11) NOT NULL AUTO_INCREMENT,
        `event_type` varchar(100) NOT NULL DEFAULT '',
        `book_date` int (11) NOT NULL DEFAULT '0',
        `event_date` int (11) NOT NULL DEFAULT '0',
        `event_id` int (11) NOT NULL DEFAULT '0',
        `photo_code` int(11) NOT NULL UNIQUE ,
        `payment_id` int(11) NOT NULL UNIQUE ,
        `pack_code` int(11) NOT NULL UNIQUE ,
        PRIMARY KEY (`book_id`)
    );

    INSERT IGNORE INTO `booking`(`event_type`,`book_date`,`event_date`,`event_id`,`photo_code`,`payment_id`,`pack_code`)
    VALUES
    ('event1',0,0,001,01,100);

    INSERT IGNORE INTO `booking`(`event_type`,`book_date`,`event_date`,`event_id`,`photo_code`,`payment_id`,`pack_code`)
    VALUES
    ('event2',0,0,002,02,101);

    INSERT IGNORE INTO `booking`(`event_type`,`book_date`,`event_date`,`event_id`,`photo_code`,`payment_id`,`pack_code`)
    VALUES
    ('event3',0,0,003,03,102);

CREATE TABLE
    IF NOT EXISTS `photo` (
        `photo_code` int (11) NOT NULL AUTO_INCREMENT,
        `url` varchar(100) NOT NULL DEFAULT '',
        `date` int (11) NOT NULL DEFAULT '0',
        `album_code` int (11) NOT NULL DEFAULT '0',
        PRIMARY KEY (`photo_code`)
    );

    INSERT IGNORE INTO `photo` (`photo_code`,`url`,`date`,`album_code`)
    VALUES
      (001,`img_url1`,0,0001);

    INSERT IGNORE INTO `photo` (`photo_code`,`url`,`date`,`album_code`)
    VALUES
      (002,`img_url2`,0,0002);

    INSERT IGNORE INTO `photo` (`photo_code`,`url`,`date`,`album_code`)
    VALUES
      (003,`img_url3`,0,0031);


CREATE TABLE
    IF NOT EXISTS `organization` (
        `organi_id` int (11) NOT NULL AUTO_INCREMENT,
        `name` varchar(100) NOT NULL DEFAULT '',
        `description` varchar(100) NOT NULL DEFAULT '',
        `oimg_url` varchar(100) NOT NULL DEFAULT '',
        `feedback_code` int(11) NOT NULL  UNIQUE,
        `manager_id` int(11) NOT NULL UNIQUE,
        `accpeted` boolean NOT NULL DEFAULT '0',
         PRIMARY KEY (`organi_id`)
    );

INSERT IGNORE INTO `organization` (`name`, `description`, `img_url`)
VALUES
    ('Organization1', 'Organization1', 'Organization1');

INSERT IGNORE INTO `organization` (`name`, `description`, `img_url`)
VALUES
    ('Organization2', 'Organization2', 'Organization2');
    
INSERT IGNORE INTO `organization` (`name`, `description`, `img_url`)
VALUES
    ('Organization3', 'Organization3', 'Organization3');
INSERT IGNORE INTO `organization` (`name`, `description`, `img_url`)
VALUES
    ('Organization4', 'Organization4', 'Organizatio4');

CREATE TABLE
   IF NOT EXISTS `organization_photographer` (
        `organi_id` int (11) NOT NULL DEFAULT '0',
        `photographer_id` int (11) NOT NULL DEFAULT '0',
        PRIMARY KEY (`organi_id`, `photographer_id`),
      
    );

    INSERT IGNORE INTO `organization_photographer`(`organi_id`,`photographer_id`)
    VALUES 
    (1,1);

    INSERT IGNORE INTO `organization_photographer`(`organi_id`,`photographer_id`)
    VALUES 
    (2,2);

     INSERT IGNORE INTO `organization_photographer`(`organi_id`,`photographer_id`)
    VALUES 
    (3,3);

    CREATE TABLE
   IF NOT EXISTS `organization_editor` (
        `organi_id` int (11) NOT NULL DEFAULT '0',
        `editor_id` int (11) NOT NULL DEFAULT '0',
        PRIMARY KEY (`organi_id`, `editor_id`),
      
    );

    INSERT IGNORE INTO `organization_editor`(`organi_id`,`editor_id`)
    VALUES 
    (1,1);

    INSERT IGNORE INTO `organization_editor`(`organi_id`,`editor_id`)
    VALUES 
    (2,2);

    INSERT IGNORE INTO `organization_editor`(`organi_id`,`editor_id`)
    VALUES 
    (3,3);


CREATE TABLE
    IF NOT EXISTS `package` (
        `pack_code` int (11) NOT NULL AUTO_INCREMENT,
        `pack_name` varchar(100) NOT NULL DEFAULT '',
        `soft_copy_price` int (11) NOT NULL DEFAULT '0',
        `hard_copy_price` int (11) NOT NULL DEFAULT '0',
        PRIMARY KEY (`pack_code`)
    );

    INSERT IGNORE INTO `package`(`pack_code`,`pack_name`,`soft_copy_price`,`hard_copy_price`)
    VALUES
    (100,'wedding',200000,600000);

     INSERT IGNORE INTO `package`(`pack_code`,`pack_name`,`soft_copy_price`,`hard_copy_price`)
    VALUES
    (101,'birthday',50000,200000);

     INSERT IGNORE INTO `package`(`pack_code`,`pack_name`,`soft_copy_price`,`hard_copy_price`)
    VALUES
    (100,'shoot',40000,100000);



CREATE TABLE
    IF NOT EXISTS `feedback` (
        `comment` varchar(100) NOT NULL DEFAULT '0',
        `rate` int (11) NOT NULL DEFAULT '0',
        `organi_id` int (11) NOT NULL DEFAULT '0',
        `user_id` int (11) NOT NULL DEFAULT '0',
        PRIMARY KEY (`organi_id`, `user_id`),
       
    );

    INSERT IGNORE INTO `feedback`(`comment`,`rate`,`organi_id`,`user_id`)
    VALUES
     ('good',0,1,1);

     INSERT IGNORE INTO `feedback`(`comment`,`rate`,`organi_id`,`user_id`)
    VALUES
     ('very good',0,2,2);

     INSERT IGNORE INTO `feedback`(`comment`,`rate`,`organi_id`,`user_id`)
    VALUES
     ('good',0,3,3);


    
    