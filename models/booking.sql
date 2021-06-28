CREATE TABLE bookings(
    booking_id INT(11) AUTO_INCREMENT NOT NULL,
    booking_name VARCHAR(255),
    booking_seats INT(2),
    booking_price FLOAT,
    screening_id INT(11),
    PRIMARY KEY(booking_id),
    CONSTRAINT fk2 FOREIGN KEY (screening_id) REFERENCES screenings(screening_id) ON DELETE CASCADE
);