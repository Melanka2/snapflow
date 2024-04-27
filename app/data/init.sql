CREATE TABLE
    IF NOT EXISTS `user` (
        `id` int (11) NOT NULL AUTO_INCREMENT,
        `email` varchar(100) NOT NULL UNIQUE,
        `password` varchar(100) NOT NULL DEFAULT '',
        `role` enum (
            'ADMIN',
            'MANAGER',
            'EDITOR',
            'PHOTOGRAPHER',
            'CUSTOMER'
        ) NOT NULL DEFAULT 'CUSTOMER',
        PRIMARY KEY (`id`)
    );

/*mayashi*/
INSERT IGNORE INTO `user` (`email`, `password`, `role`)
VALUES
    (
        'admin@localhost',
        '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5',
        'ADMIN'
    ),
    (
        'manager1@localhost',
        '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5',
        'MANAGER'
    ),
    (
        'manager2@localhost',
        '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5',
        'MANAGER'
    ),
    (
        'manager3@localhost',
        '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5',
        'MANAGER'
    ),
    (
        'manager4@localhost',
        '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5',
        'MANAGER'
    ),
    (
        'manager5@gmail.com',
        '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5',
        'MANAGER'
    ),
    (
        'editor1@localhost',
        '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5',
        'EDITOR'
    ),
    (
        'editor2@localhost',
        '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5',
        'EDITOR'
    ),
    (
        'editor3@localhost',
        '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5',
        'EDITOR'
    ),
    (
        'editor4@localhost',
        '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5',
        'EDITOR'
    ),
    (
        'editor5@localhost',
        '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5',
        'EDITOR'
    ),
    (
        'photography1@localhost',
        '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5',
        'PHOTOGRAPHER'
    ),
    (
        'photography2@localhost',
        '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5',
        'PHOTOGRAPHER'
    ),
    (
        'photography3@localhost',
        '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5',
        'PHOTOGRAPHER'
    ),
    (
        'photography4@localhost',
        '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5',
        'PHOTOGRAPHER'
    ),
    (
        'photography5@localhost',
        '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5',
        'PHOTOGRAPHER'
    ),
    (
        'custormer1@localhost',
        '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5',
        'CUSTOMER'
    ),
    (
        'custormer2@localhost',
        '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5',
        'CUSTOMER'
    ),
    (
        'custormer3@localhost',
        '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5',
        'CUSTOMER'
    ),
    (
        'custormer4@localhost',
        '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5',
        'CUSTOMER'
    ),
    (
        'custormer5@localhost',
        '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5',
        'CUSTOMER'
    ),
    (
        'custormer6@localhost',
        '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5',
        'CUSTOMER'
    ),
    (
        'custormer7@localhost',
        '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5',
        'CUSTOMER'
    ),
    (
        'custormer8@localhost',
        '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5',
        'CUSTOMER'
    ),
    (
        'custormer9@localhost',
        '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5',
        'CUSTOMER'
    ),
    (
        'custormer10@localhost',
        '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5',
        'CUSTOMER'
    );

CREATE TABLE
    IF NOT EXISTS `admin` (
        `id` int (11) NOT NULL AUTO_INCREMENT,
        `first_name` varchar(100) NOT NULL DEFAULT '',
        `last_name` varchar(100) NOT NULL DEFAULT '',
        `user_id` int (11) NOT NULL UNIQUE,
        `reg_date` date,
        PRIMARY KEY (`id`)
    );

INSERT IGNORE INTO `admin` (`first_name`, `last_name`, `user_id`, `reg_date`)
VALUES
    ('admin1', 'admin1', 1, '2024-01-01');

CREATE TABLE
    IF NOT EXISTS `manager` (
        `id` int (11) NOT NULL AUTO_INCREMENT,
        `first_name` varchar(100) NOT NULL DEFAULT '',
        `last_name` varchar(100) NOT NULL DEFAULT '',
        `user_id` int (11) NOT NULL UNIQUE,
        `reg_date` date,
        PRIMARY KEY (`id`)
    );

INSERT IGNORE INTO `manager` (`first_name`, `last_name`, `user_id`, `reg_date`)
VALUES
    ('manager1', 'manager1', 2, '2024-01-01'),
    ('manager2', 'manager2', 3, '2024-01-02'),
    ('manager3', 'manager3', 4, '2024-01-03'),
    ('manager4', 'manager4', 5, '2024-01-04'),
    ('manager5', 'manager5', 6, '2024-01-05');

CREATE TABLE
    IF NOT EXISTS `editor` (
        `id` int (11) NOT NULL AUTO_INCREMENT,
        `first_name` varchar(100) NOT NULL DEFAULT '',
        `last_name` varchar(100) NOT NULL DEFAULT '',
        `user_id` int (11) NOT NULL UNIQUE,
        `reg_date` date,
        PRIMARY KEY (`id`)
    );

INSERT IGNORE INTO `editor` (`first_name`, `last_name`, `user_id`, `reg_date`)
VALUES
    ('editor1', 'editor1', 1, '2024-01-01'),
    ('editor2', 'editor2', 2, '2024-01-02'),
    ('editor3', 'editor3', 3, '2024-01-03'),
    ('editor4', 'editor4', 4, '2024-01-04'),
    ('editor5', 'editor5', 5, '2024-01-05');

CREATE TABLE
    IF NOT EXISTS `photographer` (
        `id` int (11) NOT NULL AUTO_INCREMENT,
        `first_name` varchar(100) NOT NULL DEFAULT '',
        `last_name` varchar(100) NOT NULL DEFAULT '',
        `user_id` int (11) NOT NULL UNIQUE,
        `reg_date` date,
        PRIMARY KEY (`id`)
    );

INSERT IGNORE INTO `photographer` (`first_name`, `last_name`, `user_id`, `reg_date`)
VALUES
    ('photography1', 'photography1', 1, '2024-01-01'),
    ('photography2', 'photography2', 2, '2024-01-02'),
    ('photography3', 'photography3', 3, '2024-01-03'),
    ('photography4', 'photography4', 4, '2024-01-04'),
    ('photography5', 'photography5', 5, '2024-01-05');

CREATE TABLE
    IF NOT EXISTS `custormer` (
        `id` int (11) NOT NULL AUTO_INCREMENT,
        `first_name` varchar(100) NOT NULL DEFAULT '',
        `last_name` varchar(100) NOT NULL DEFAULT '',
        `user_id` int (11) NOT NULL UNIQUE,
        `reg_date` date,
        PRIMARY KEY (`id`)
    );

INSERT IGNORE INTO `custormer` (`first_name`, `last_name`, `user_id`, `reg_date`)
VALUES
    ('custormer1', 'custormer1', 1, '2024-01-01'),
    ('custormer2', 'custormer2', 2, '2024-01-02'),
    ('custormer3', 'custormer3', 3, '2024-01-03'),
    ('custormer4', 'custormer4', 4, '2024-01-04'),
    ('custormer5', 'custormer5', 5, '2024-01-05'),
    ('custormer6', 'custormer6', 6, '2024-01-06'),
    ('custormer7', 'custormer7', 7, '2024-01-07'),
    ('custormer8', 'custormer8', 8, '2024-01-08'),
    ('custormer9', 'custormer9', 9, '2024-01-09'),
    ('custormer10', 'custormer10', 10, '2024-01-10');

CREATE TABLE
    IF NOT EXISTS `payment` (
        `payment_id` int (11) NOT NULL AUTO_INCREMENT,
        `user_id` int (11) NOT NULL DEFAULT '0',
        `amount` int (11) NOT NULL DEFAULT '0',
        `payment_date` date,
        PRIMARY KEY (`payment_id`),
        KEY `user_id` (`user_id`),
        KEY `payment_date` (`payment_date`)
    );

INSERT IGNORE INTO `payment` (`user_id`, `amount`, `payment_date`)
VALUES
    (1, 100000, '2024-01-01'),
    (2, 200000, '2024-01-02'),
    (3, 300000, '2024-01-03'),
    (4, 400000, '2024-01-04'),
    (5, 500000, '2024-01-05');

CREATE TABLE
    IF NOT EXISTS `booking` (
        `book_id` int (11) NOT NULL AUTO_INCREMENT,
        `event_type` varchar(100) NOT NULL DEFAULT '',
        `book_date` date,
        `event_date` date,
        `event_id` int (11) NOT NULL DEFAULT '0',
        `photo_code` int (11) NOT NULL UNIQUE,
        `payment_id` int (11) NOT NULL UNIQUE,
        `pack_code` int (11) NOT NULL UNIQUE,
        PRIMARY KEY (`book_id`)
    );

INSERT IGNORE INTO `booking` (
    `event_type`,
    `book_date`,
    `event_date`,
    `event_id`,
    `photo_code`,
    `payment_id`,
    `pack_code`
)
VALUES
    (
        'wedding',
        '2024-01-01',
        '2024-01-01',
        1,
        1,
        1,
        100
    ),
    (
        'birthday',
        '2024-01-02',
        '2024-01-02',
        2,
        2,
        2,
        101
    ),
    ('shoot', '2024-01-03', '2024-01-03', 3, 3, 3, 102);

CREATE TABLE
    IF NOT EXISTS `photo` (
        `photo_code` int (11) NOT NULL AUTO_INCREMENT,
        `url` varchar(100) NOT NULL DEFAULT '',
        `date` int (11) NOT NULL DEFAULT '0',
        `album_code` int (11) NOT NULL DEFAULT '0',
        PRIMARY KEY (`photo_code`)
    );

INSERT IGNORE INTO `photo` (`photo_code`, `url`, `date`, `album_code`)
VALUES
    (1, 'photo1', 2024, 1),
    (2, 'photo2', 2024, 2),
    (3, 'photo3', 2024, 3);

CREATE TABLE
    IF NOT EXISTS `organization` (
        `organi_id` int (11) NOT NULL AUTO_INCREMENT,
        `name` varchar(100) UNIQUE NOT NULL DEFAULT '',
        `description` varchar(100) NOT NULL DEFAULT '',
        `img_url` varchar(100) NOT NULL DEFAULT '',
        `manager_id` int (11) NOT NULL DEFAULT 1,
        `accpeted` boolean NOT NULL DEFAULT '0',
        PRIMARY KEY (`organi_id`)
    );

INSERT IGNORE INTO `organization` (`name`, `description`, `img_url`)
VALUES
    ('organi1', 'organi1', 'img1'),
    ('organi2', 'organi2', 'img2'),
    ('organi3', 'organi3', 'img3'),
    ('organi4', 'organi4', 'img4'),
    ('organi5', 'organi5', 'img5');

CREATE TABLE
    IF NOT EXISTS `organization_photographer` (
        `organi_id` int (11) NOT NULL,
        `photographer_id` int (11) NOT NULL,
        PRIMARY KEY (`organi_id`, `photographer_id`)
    );

INSERT IGNORE INTO `organization_photographer` (`organi_id`, `photographer_id`)
VALUES
    (1, 2),
    (2, 3),
    (3, 1);

CREATE TABLE
    IF NOT EXISTS `organization_editor` (
        `organi_id` int (11) NOT NULL DEFAULT '0',
        `editor_id` int (11) NOT NULL DEFAULT '0',
        PRIMARY KEY (`organi_id`, `editor_id`)
    );

INSERT IGNORE INTO `organization_editor` (`organi_id`, `editor_id`)
VALUES
    (1, 1),
    (2, 2),
    (3, 3);

CREATE TABLE
    IF NOT EXISTS `package` (
        `pack_code` int (11) NOT NULL AUTO_INCREMENT,
        `pack_name` varchar(100) NOT NULL DEFAULT '',
        `soft_copy_price` int (11) NOT NULL DEFAULT '0',
        `hard_copy_price` int (11) NOT NULL DEFAULT '0',
        PRIMARY KEY (`pack_code`)
    );

INSERT IGNORE INTO `package` (
    `pack_code`,
    `pack_name`,
    `soft_copy_price`,
    `hard_copy_price`
)
VALUES
    (100, 'wedding', 200000, 600000),
    (101, 'birthday', 50000, 200000),
    (102, 'shoot', 40000, 100000);

CREATE TABLE
    IF NOT EXISTS `feedback` (
        `comment` varchar(100) DEFAULT NULL,
        `rate` int (11) NOT NULL,
        `organi_id` int (11) NOT NULL,
        `user_id` int (11) NOT NULL,
        PRIMARY KEY (`organi_id`, `user_id`)
    );

INSERT IGNORE INTO `feedback` (`comment`, `rate`, `organi_id`, `user_id`)
VALUES
    ('good', 5, 1, 1),
    ('bad', 1, 2, 2),
    ('good', 4, 3, 3);