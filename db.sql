CREATE TABLE beers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL UNIQUE,
    country VARCHAR(50) NOT NULL,
    price INT NOT NULL
);

CREATE TABLE countries (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50),
    short_term VARCHAR(20)
);

INSERT INTO countries(name,short_term)
VALUES ('Norway','NW'),
        ('Myanmar','MM'),
        ('Thailand','Thai'),
        ('United Stated','US');