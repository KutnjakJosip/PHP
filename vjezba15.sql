-- Kreiranje baze podataka
CREATE DATABASE IF NOT EXISTS RegistracijaKorisnika;
USE RegistracijaKorisnika;

-- Kreiranje entiteta za registraciju korisnika
CREATE TABLE IF NOT EXISTS Korisnici (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(255) NOT NULL,
    last_name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    username VARCHAR(10) NOT NULL,
    password VARCHAR(255) NOT NULL,
    country VARCHAR(255),
    CONSTRAINT unique_email UNIQUE (email),
    CONSTRAINT unique_username UNIQUE (username)
);

-- Unos testnih podataka
INSERT INTO Korisnici (first_name, last_name, email, username, password, country) VALUES
('John', 'Doe', 'john.doe@example.com', 'john123', 'password123', 'US'),
('Jane', 'Smith', 'jane.smith@example.com', 'jane456', 'securepass', 'CA');
