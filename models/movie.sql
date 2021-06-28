CREATE TABLE movies(
    movie_id INT(11) AUTO_INCREMENT NOT NULL,
    movie_title VARCHAR(255) NOT NULL,
    movie_desc TEXT,
    movie_rating VARCHAR(20),
    PRIMARY KEY(movie_id)
);