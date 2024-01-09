DROP DATABASE IF EXISTS onlineshop;
CREATE DATABASE onlineshop;

CREATE USER IF NOT EXISTS 'wt1_prakt'@'localhost' IDENTIFIED BY 'abcd';

GRANT ALL PRIVILEGES ON onlineshop.* TO 'wt1_prakt'@'localhost' IDENTIFIED BY 'abcd';
FLUSH PRIVILEGES;

USE onlineshop;

DROP TABLE IF EXISTS Product;
DROP TABLE IF EXISTS Customer;

CREATE TABLE Product
(
	product_id INT PRIMARY KEY,
	short_name VARCHAR(60) NOT NULL,
	manufacturer VARCHAR(60) NOT NULL,
	unit_price DECIMAL(6,2) NOT NULL,
	vat_rate_percent DECIMAL(2) NOT NULL
);

CREATE TABLE Customer
(
	customer_id INT PRIMARY KEY,
	first_name VARCHAR(60) NOT NULL,
	last_name VARCHAR(60) NOT NULL,
	gender CHAR(1) NOT NULL,
	birth_date CHAR(10) NOT NULL,
	email VARCHAR(60) NOT NULL
);

INSERT INTO Product VALUES('1259723', 'Antivirensoftware', 'Symantec', 19.99, '19');
INSERT INTO Product VALUES('9284612', '"Netzwerklehre" (Buch)', 'Springer Vieweg', 9.99, '7');
INSERT INTO Product VALUES('3729238', 'Netzwerkkabel', 'Kabelmeister', 11.50, '19');
INSERT INTO Product VALUES('2389012', 'Switch', 'Cisco', 123.99, '19');

INSERT INTO Customer VALUES('1493403', 'John', 'Smith', 'm', '01.10.1986', 'johnsmith@email.com');
INSERT INTO Customer VALUES('3849012', 'Verena', 'Schauer', 'w', '12.04.1991', 'veri.mails@anbieter.de');
INSERT INTO Customer VALUES('2491292', 'Lesley', 'Angus', 'd', '30.09.2001', 'lesleylesangus@example.org');
INSERT INTO Customer VALUES('2382304', 'Hannah', 'Smith', 'w', '08.02.1988', 'hannahsmith@email.com');






