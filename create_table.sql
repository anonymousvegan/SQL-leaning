CREATE TABLE users (
    id int PRIMARY KEY NOT NULL AUTO_INCREMENT,
    first_name VARCHAR(30) NOT NULL,
    last_name VARCHAR(30) NOT NULL,
    age int, 
    yes TINYINT
);

Describe users;