CREATE TABLE screenings(
    screening_id INT(11) AUTO_INCREMENT NOT NULL,
    screening_time VARCHAR(255),
    screening_price FLOAT,
    movie_id INT(11),
    PRIMARY KEY(screening_id),
    CONSTRAINT fk1 FOREIGN KEY (movie_id) REFERENCES movies(movie_id) ON DELETE CASCADE
); 