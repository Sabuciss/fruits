-- Dzēš esošo datu bāzi, ja tāda pastāv
DROP DATABASE IF EXISTS fruits;
CREATE DATABASE fruits;
USE fruits;

-- Izveido tabulu augļiem
CREATE TABLE fruits (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL
);

-- Ievieto augļus
INSERT INTO fruits (name) VALUES 
("ābols"), 
("banans"), 
("ananas");

-- Pārskata visu informāciju no tabulas fruits
SELECT * FROM fruits;

-- Meklē augļus, kuru nosaukums satur "o"
SELECT * FROM fruits WHERE name LIKE "%o%";
