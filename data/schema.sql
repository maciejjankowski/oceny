CREATE TABLE Kurs (
    kurs_id INT PRIMARY KEY AUTO_INCREMENT,
    Kursname VARCHAR(255) NOT NULL,
    Lehrer VARCHAR(255),
    Aktiv BOOLEAN DEFAULT TRUE
);

CREATE TABLE Bewertung (
    Bewertung_id INT PRIMARY KEY AUTO_INCREMENT,
    kurs_id INT,
    Komentar TEXT,
    Data DATE,
    Ocena INT,
    FOREIGN KEY (kurs_id) REFERENCES Kurs(kurs_id)
);

CREATE TABLE User (
    User_id INT PRIMARY KEY AUTO_INCREMENT,
    login VARCHAR(255) NOT NULL UNIQUE,
    passwort VARCHAR(255) NOT NULL,
    Rola VARCHAR(50) 
);