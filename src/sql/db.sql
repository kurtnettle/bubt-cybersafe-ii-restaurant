CREATE DATABASE IF NOT EXISTS ctf;
USE ctf;

CREATE TABLE IF NOT EXISTS users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50),
  password VARCHAR(50),
  role ENUM('user', 'admin')
);

CREATE TABLE IF NOT EXISTS food (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100),
  price INT,
  image VARCHAR(100)
);

CREATE TABLE IF NOT EXISTS cart (
  id INT AUTO_INCREMENT PRIMARY KEY,
  user_id VARCHAR(50),
  food_id INT,
  price INT
);

INSERT IGNORE INTO users (username, password, role) VALUES ('admin', 'admin123', 'admin');

INSERT IGNORE INTO food (name, price, image) VALUES ('PIzza', '499', 'pizza.jpg');
INSERT IGNORE INTO food (name, price, image) VALUES ('Burger', '299', 'burger.jpg');
INSERT IGNORE INTO food (name, price, image) VALUES ('Meat Box', '299', 'meatbox.jpg');
