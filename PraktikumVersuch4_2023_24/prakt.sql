DROP DATABASE IF EXISTS realdb;
CREATE DATABASE realdb;

CREATE USER IF NOT EXISTS 'wt1_prakt'@'localhost' IDENTIFIED BY 'abcd';

GRANT ALL PRIVILEGES ON realdb.* TO 'wt1_prakt'@'localhost' IDENTIFIED BY 'abcd';
FLUSH PRIVILEGES;

USE realdb;

DROP TABLE IF EXISTS Task;
DROP TABLE IF EXISTS Product;
DROP TABLE IF EXISTS Customer;
DROP TABLE IF EXISTS Message;

CREATE TABLE Product
(
	product_id INT PRIMARY KEY AUTO_INCREMENT,
	short_name VARCHAR(60) NOT NULL,
	manufacturer VARCHAR(60) NOT NULL,
	unit_price VARCHAR(60) NOT NULL,
	vat_rate_percent VARCHAR(60) NOT NULL
);


INSERT INTO Product VALUES(NULL, 'Kaffeevollautomat', 'De Shorthi', '279,99', '19');
INSERT INTO Product VALUES(NULL, 'Waschmaschine', 'Scheff', '538,90', '19');