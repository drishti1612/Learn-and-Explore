
CREATE DATABASE quiz;

CREATE TABLE user(user_id INT PRIMARY KEY,
name VARCHAR(200),
user_name VARCHAR(200) UNIQUE KEY,
password VARCHAR(200) UNIQUE KEY);


 CREATE TABLE html(user_name VARCHAR(200),
beginner INT,
intermediate INT);




CREATE TABLE css(user_name VARCHAR(200),
beginner INT,
intermediate INT);





CREATE TABLE python(user_name VARCHAR(200),
beginner INT,
intermediate INT);