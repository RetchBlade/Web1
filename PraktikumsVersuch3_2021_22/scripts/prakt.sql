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

CREATE TABLE Task
(
	id INT PRIMARY KEY AUTO_INCREMENT,
	due_date DATE NOT NULL,
	description VARCHAR(150) NOT NULL,
	priority INT
);

CREATE TABLE Product
(
	product_id INT PRIMARY KEY,
	product_name VARCHAR(60) NOT NULL,
	unit_price DECIMAL(4,2) NOT NULL
);

CREATE TABLE Customer
(
	customer_id INT PRIMARY KEY AUTO_INCREMENT,
	customer_name VARCHAR(60) NOT NULL,
	customer_profit DECIMAL(6,2) NOT NULL
);

CREATE TABLE Message
(
	id INT PRIMARY KEY AUTO_INCREMENT,
	msg VARCHAR(250) NOT NULL,
	sender VARCHAR(60) NOT NULL
);



INSERT INTO Task VALUES(NULL, '2020-01-01', 'Bug Fix des Warenkorbs-Problem', 3);
INSERT INTO Task VALUES(NULL, '2020-01-05', 'Laden der Backend-Pages auf AJAX umstellen', 2);
INSERT INTO Task VALUES(NULL, '2020-03-10', 'Frontend-UI ansprechender gestalten', 1);
INSERT INTO Task VALUES(NULL, '2020-02-21', 'Restliche DerbyDB auf PostgreSQL umstellen', 2);

INSERT INTO Product VALUES('1259723', 'Antivirensoftware', 20.00);
INSERT INTO Product VALUES('2938712', 'Lautsprecher', 21.34);
INSERT INTO Product VALUES('3937236', 'Kopfhörer', 9.99);
INSERT INTO Product VALUES('8459238', 'Netzwerkkabel-Set', 31.99);

INSERT INTO Customer VALUES(NULL, 'John Smith', 1002.34);
INSERT INTO Customer VALUES(NULL, 'Vanessa Luck', 3489.21);
INSERT INTO Customer VALUES(NULL, 'Marvin Lars', 3092.89);
INSERT INTO Customer VALUES(NULL, 'Nadine Johanson', 90.21);

INSERT INTO Message VALUES(NULL, 'Lorem ipsum dolor sit amet...', 'John Smith');
INSERT INTO Message VALUES(NULL, 'Das war ein erfolgreicher Test!', 'Vanessa Luck');
INSERT INTO Message VALUES(NULL, 'Auch dieser Test hat funktioniert und ist persistiert.', 'WT1 Nutzer');
INSERT INTO Message VALUES(NULL, 'Dann kann es ja losgehen.', 'John Smith');





