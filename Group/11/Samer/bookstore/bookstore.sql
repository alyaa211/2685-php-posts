	CREATE DATABASE IF NOT EXISTS samer_bookstore DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ;
    
    
    CREATE TABLE IF NOT EXISTS `Authors` (
    `id` INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    `name` VARCHAR(100),
    `bio` TEXT ,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `updated_at` DATETIME ,
    `deleted_at` DATETIME
    )
    ENGINE = InnoDB;
    
    CREATE TABLE IF NOT EXISTS `Publishers` (
    `id` INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    `name` VARCHAR(100),
    address TEXT,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `updated_at` DATETIME ,
    `deleted_at` DATETIME 
    )
    ENGINE = InnoDB;
    
    CREATE TABLE IF NOT EXISTS `Books` (
    `id` INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    `title` VARCHAR(100),
    `author_id` INT UNSIGNED,
    `publishers_id` INT UNSIGNED,
    `genre` VARCHAR(100),
    `price` INT,
    `published_date` DATE,
    CONSTRAINT books_authoe_id_foreign FOREIGN KEY (author_id) REFERENCES Authors (id),
    CONSTRAINT books_publisher_id_foreign FOREIGN KEY (publishers_id) REFERENCES Publishers (id),
	`created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `updated_at` DATETIME ,
    `deleted_at` DATETIME  )
    ENGINE = InnoDB;
    
    CREATE TABLE IF NOT EXISTS `Customers` (
    `id` INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    `name` VARCHAR(100),
    `email` VARCHAR(100) UNIQUE ,
    `phone` VARCHAR(50),
    `text` TEXT,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `updated_at` DATETIME ,
    `deleted_at` DATETIME )
    ENGINE = InnoDB;
    
    CREATE TABLE IF NOT EXISTS `Orders` (
    `id` INT UNSIGNED PRIMARY KEY AUTO_INCREMENT ,
    `customer_id` INT UNSIGNED,
    `order_date` DATE ,
    `total_amount` VARCHAR(50),
    CONSTRAINT order_customer_id_foreign FOREIGN KEY (customer_id) REFERENCES Customers (id),
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `updated_at` DATETIME ,
    `deleted_at` DATETIME )
    ENGINE = InnoDB;
    
    
    CREATE TABLE IF NOT EXISTS `Order_Items` (
    `id` INT UNSIGNED PRIMARY KEY AUTO_INCREMENT ,
    `order_id` INT UNSIGNED ,
    `book_id` INT UNSIGNED,
    `quantity` INT ,
    `price` VARCHAR(50),
    CONSTRAINT order_items_order_id_foreign FOREIGN KEY (order_id) REFERENCES Orders (id),
    CONSTRAINT order_item_book_id_foreign FOREIGN KEY (book_id) REFERENCES Books (id),
     `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `updated_at` DATETIME ,
    `deleted_at` DATETIME )
    ENGINE = InnoDB;
    
    
    
    
    
    
    
    
    