CREATE TABLE users(
    user_id INT(11) AUTO_INCREMENT NOT NULL,
    user_name VARCHAR(255) NOT NULL,
    user_email VARCHAR(255) NOT NULL,
    user_pass VARCHAR(255) NOT NULL,
    PRIMARY KEY(user_id)
);