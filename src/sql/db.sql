CREATE DATABASE ctf;
USE ctf;

CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50),
  password VARCHAR(50),
  role ENUM('user', 'admin')
);

CREATE TABLE food (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100),
  price INT,
  image VARCHAR(100)
);

CREATE TABLE cart (
  id INT AUTO_INCREMENT PRIMARY KEY,
  user_id VARCHAR(50),
  food_id INT,
  price INT
);

INSERT INTO users (username, password, role) VALUES ('admin', 'admin123', 'admin');
