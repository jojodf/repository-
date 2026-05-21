CREATE DATABASE IF NOT EXISTS mijn_app;
USE mijn_app;

CREATE TABLE jouw_tabel (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titel VARCHAR(255) NOT NULL,
    beschrijving TEXT NOT NULL
);

INSERT INTO jouw_tabel (titel, beschrijving) VALUES
('Laptop', 'Een krachtige laptop voor school en werk.'),
('Telefoon', 'Een moderne smartphone met goede camera.'),
('Boek', 'Een interessant boek om te lezen.');