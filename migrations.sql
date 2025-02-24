DROP DATABASE IF EXISTS fruits;
CREATE DATABASE fruits;
USE fruits;

/* Izveido fruits tabulu */
CREATE TABLE fruits (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    fruit_name VARCHAR(255) NOT NULL
);

/* Ievieto kategorijas */
INSERT INTO fruits (fruit_name) VALUES 
("ābols"), 
("banans"), 
("ananas"); 

/* Izveido posts tabulu ar saiti uz fruits */
CREATE TABLE posts (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    content VARCHAR(5200) NOT NULL,
    category_id INT NULL,
    FOREIGN KEY (category_id) REFERENCES fruits(id) ON DELETE SET NULL
);

SELECT * FROM fruits;

/* Ievieto bloga ierakstus */
INSERT INTO posts (content) VALUES 
("ābols"), 
("banans"), 
("ananas");