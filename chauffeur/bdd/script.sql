CREATE DATABASE IF NOT EXISTS vtc_;
USE vtc_;

CREATE TABLE chauffeur (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50) NOT NULL,
    prenom VARCHAR(50) NOT NULL,
    age INT CHECK (age > 18),
    experience INT CHECK (experience >= 0),
    disponible BOOLEAN DEFAULT TRUE
);

CREATE TABLE vehicule (
    ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    model VARCHAR(50) NOT NULL,
    immatriculation VARCHAR(50) NOT NULL UNIQUE,
    couleur VARCHAR(50) NOT NULL,
    nbplace INT
);

CREATE TABLE utilisateur (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50) NOT NULL,
    prenom VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    motdepasse VARCHAR(255) NOT NULL
);