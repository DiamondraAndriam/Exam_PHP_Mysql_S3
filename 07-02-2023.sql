CREATE DATABASE takalo;
USE takalo;

CREATE TABLE Admin(
    id INT AUTO_INCREMENT,
    nom VARCHAR(20) NOT NULL,
    mdp VARCHAR(10) NOT NULL,
    email VARCHAR(20) UNIQUE NOT NULL,
    PRIMARY KEY(id)
);

CREATE TABLE Utilisateur(
    id INT AUTO_INCREMENT,
    nom VARCHAR(20) NOT NULL,
    mdp VARCHAR(10) NOT NULL,
    email VARCHAR(20) UNIQUE NOT NULL,
    date_inscription DATETIME NOT NULL,
    PRIMARY KEY(id)
);

CREATE TABLE Category(
    id INT AUTO_INCREMENT,
    nom VARCHAR(20) NOT NULL,
    PRIMARY KEY(id)
);

CREATE TABLE Objet(
    id INT AUTO_INCREMENT,
    nom VARCHAR(50) NOT NULL,
    idUser INT NOT NULL,
    idCategory INT,
    descriptions VARCHAR(350),
    estimation DOUBLE,
    PRIMARY KEY(id),
    FOREIGN KEY(idUser) REFERENCES Utilisateur(id),
    FOREIGN KEY(idCategory) REFERENCES Category(id)
);

CREATE TABLE Echange(
    id INT AUTO_INCREMENT,
    idObjet1 INT NOT NULL,
    idObjet2 INT NOT NULL,
    etat ENUM('attente','accepte','annule') NOT NULL,
    PRIMARY KEY(id),
    FOREIGN KEY(idObjet1) REFERENCES Objet(id),
    FOREIGN KEY(idObjet2) REFERENCES Objet(id)
);

CREATE TABLE Photo(
    id INT AUTO_INCREMENT,
    idObjet INT NOT NULL,
    lien VARCHAR(50),
    PRIMARY KEY(id)
);

INSERT INTO Admin(nom, mdp, email) VALUES('Admin1', '1', 'admin1@gmail.com');


INSERT INTO Utilisateur(nom, mdp, email, date_inscription) VALUES('Aline', '0123456', 'aline@gmail.com','2023-02-06 10:02:01');
INSERT INTO Utilisateur(nom, mdp, email, date_inscription) VALUES('Annie', '000000', 'annieraz@gmail.com','2023-02-06 14:22:41');
INSERT INTO Utilisateur(nom, mdp, email, date_inscription) VALUES('Eric', '123456', 'eric@outlook.fr','2023-02-06 09:12:07');
INSERT INTO Utilisateur(nom, mdp, email, date_inscription) VALUES('Tom', 'as000', 'tom@gmail.com','2023-02-07 05:02:51');
INSERT INTO Utilisateur(nom, mdp, email, date_inscription) VALUES('Karina', '123', 'karina@gmail.com','2023-02-07 09:12:03');
INSERT INTO Utilisateur(nom, mdp, email, date_inscription) VALUES('John', '0000', 'john@gmail.com','2023-02-07 19:04:31');

INSERT INTO Category(nom) VALUES('Accessoires');
INSERT INTO Category(nom) VALUES('Electroniques');
INSERT INTO Category(nom) VALUES('Parfums');
INSERT INTO Category(nom) VALUES('Chaussures');
INSERT INTO Category(nom) VALUES('Vêtements');  
INSERT INTO Category(nom) VALUES('Maquillage'); 
INSERT INTO Category(nom) VALUES('Lecture');  
INSERT INTO Category(nom) VALUES('Divers');
INSERT INTO Category(nom) VALUES('Sacs'); 
INSERT INTO Category(nom) VALUES('Cuisine'); 

INSERT INTO Objet(nom, idUser, idCategory, descriptions, estimation) VALUES("Boucles d'oreilles Dior", 1, 1, "Paire de boucles d'oreilles Dior", 15000);
INSERT INTO Objet(nom, idUser, idCategory, descriptions, estimation) VALUES('Blouson Prada', 1, 5, 'Blousons hiver prada, disponible en deux couleurs', 60000);
INSERT INTO Objet(nom, idUser, idCategory, descriptions, estimation) VALUES('Collier Dior', 1, 1, 'Mini collier Dior', 15000);
INSERT INTO Objet(nom, idUser, idCategory, descriptions, estimation) VALUES('Sacs Lady Diors', 1, 9, 'Sacs Lady Dior. Disponible en quatres couleurs', 45000);
INSERT INTO Objet(nom, idUser, idCategory, descriptions, estimation) VALUES('Bague Pandora', 1, 1, 'Bijou Pandora', 18000);

INSERT INTO Objet(nom, idUser, idCategory, descriptions, estimation) VALUES('Ipad pro', 2, 2, 'Ipad pro. Disponible en gris avec stylet blanc', 100000);
INSERT INTO Objet(nom, idUser, idCategory, descriptions, estimation) VALUES('Airpods Max', 2, 2, 'Ecouteurs Apple : Airpods max. Disponible en plusieurs couleurs', 150000);
INSERT INTO Objet(nom, idUser, idCategory, descriptions, estimation) VALUES('Gloss', 2, 6, 'Gloss rose brillant', 5000);
INSERT INTO Objet(nom, idUser, idCategory, descriptions, estimation) VALUES('Parfum Channel', 2, 3, 'Parfum COCO Channel', 15000);
INSERT INTO Objet(nom, idUser, idCategory, descriptions, estimation) VALUES('Parfum Miss Dior', 2, 3, 'Miss Dior', 25000);
INSERT INTO Objet(nom, idUser, idCategory, descriptions, estimation) VALUES('Accessoires papillons', 2, 1, "Colliers et boucles d'oreilles en motifs papillons", 20000);

INSERT INTO Objet(nom, idUser, idCategory, descriptions, estimation) VALUES('Rouges à lèvres', 3, 6, 'Set de rouges à lèvres, disponibles en modèles de cinq', 20000);
INSERT INTO Objet(nom, idUser, idCategory, descriptions, estimation) VALUES('Colliers', 3, 1, 'Set de colliers', 15000);
INSERT INTO Objet(nom, idUser, idCategory, descriptions, estimation) VALUES('Brosses a cheveux', 3, 8, 'Brosses a cheveux, disponible en deux models', 40000);
INSERT INTO Objet(nom, idUser, idCategory, descriptions, estimation) VALUES('Converses marrons', 3, 4, 'Paire de converses marrons', 20000);
INSERT INTO Objet(nom, idUser, idCategory, descriptions, estimation) VALUES('Sweat shirt', 3, 5, 'Sweat shirt gris oversize', 15000);

INSERT INTO Objet(nom, idUser, idCategory, descriptions, estimation) VALUES('Airpods Max', 4, 2, 'Airpods max occasion avec motifs', 12000);
INSERT INTO Objet(nom, idUser, idCategory, descriptions, estimation) VALUES('Nike Air', 4, 4, 'Nike air couleur marron', 20000);
INSERT INTO Objet(nom, idUser, idCategory, descriptions, estimation) VALUES('Petit sac blanc', 4, 9, 'Mini sac blanc', 20000);
INSERT INTO Objet(nom, idUser, idCategory, descriptions, estimation) VALUES('Coque Iphone 11', 4, 2, 'Coques Iphone 11, disponible en deux modeles', 25000);
INSERT INTO Objet(nom, idUser, idCategory, descriptions, estimation) VALUES('Apple watch', 4, 2, 'Apple watch', 35000);

INSERT INTO Objet(nom, idUser, idCategory, descriptions, estimation) VALUES('Machine a café', 5, 10, 'Machine a café style vintage', 30000);
INSERT INTO Objet(nom, idUser, idCategory, descriptions, estimation) VALUES('Mini ventilateur portable', 5, 8, 'Mini ventilateur portable', 50000);
INSERT INTO Objet(nom, idUser, idCategory, descriptions, estimation) VALUES('Nike Air Force', 5, 4, 'Nike Air Force blanche', 20000);
INSERT INTO Objet(nom, idUser, idCategory, descriptions, estimation) VALUES('Nike Air', 5, 4, 'Nike Air de couleur verte', 25000);
INSERT INTO Objet(nom, idUser, idCategory, descriptions, estimation) VALUES('Sac a dos', 5, 9, 'Sac a dos simple', 12000);
INSERT INTO Objet(nom, idUser, idCategory, descriptions, estimation) VALUES('Iphone 11', 5, 2, 'Iphone 11', 80000);
INSERT INTO Objet(nom, idUser, idCategory, descriptions, estimation) VALUES('Bottines en cuir', 5, 4, 'Bottines en cuir. Disponibles en deux couleurs', 50000);

INSERT INTO Objet(nom, idUser, idCategory, descriptions, estimation) VALUES('Iphone 11', 6, 2, 'Iphone 11, trois couleurs disponibles', 90000);
INSERT INTO Objet(nom, idUser, idCategory, descriptions, estimation) VALUES('Lunettes de soleil', 6, 1, 'Lunettes de soleil noires', 10000);

INSERT INTO Photo(idObjet, lien) VALUES(1, 'assets/imgs/im1.jfif');
INSERT INTO Photo(idObjet, lien) VALUES(2, 'assets/imgs/im2.jfif');
INSERT INTO Photo(idObjet, lien) VALUES(3, 'assets/imgs/im3.jfif');
INSERT INTO Photo(idObjet, lien) VALUES(4, 'assets/imgs/im4.jfif');
INSERT INTO Photo(idObjet, lien) VALUES(5, 'assets/imgs/im5.jfif');
INSERT INTO Photo(idObjet, lien) VALUES(6, 'assets/imgs/im6.jfif');
INSERT INTO Photo(idObjet, lien) VALUES(7, 'assets/imgs/im7.jfif');
INSERT INTO Photo(idObjet, lien) VALUES(8, 'assets/imgs/im8.jfif');
INSERT INTO Photo(idObjet, lien) VALUES(9, 'assets/imgs/im9.jfif');
INSERT INTO Photo(idObjet, lien) VALUES(10, 'assets/imgs/im10.jfif');

INSERT INTO Photo(idObjet, lien) VALUES(11, 'assets/imgs/im11.jfif');
INSERT INTO Photo(idObjet, lien) VALUES(12, 'assets/imgs/im12.jfif');
INSERT INTO Photo(idObjet, lien) VALUES(13, 'assets/imgs/im13.jfif');
INSERT INTO Photo(idObjet, lien) VALUES(14, 'assets/imgs/im14.jfif');
INSERT INTO Photo(idObjet, lien) VALUES(15, 'assets/imgs/im15.jfif');
INSERT INTO Photo(idObjet, lien) VALUES(16, 'assets/imgs/im16.jfif');
INSERT INTO Photo(idObjet, lien) VALUES(17, 'assets/imgs/im17.jfif');
INSERT INTO Photo(idObjet, lien) VALUES(18, 'assets/imgs/im18.jfif');
INSERT INTO Photo(idObjet, lien) VALUES(19, 'assets/imgs/im19.jfif');
INSERT INTO Photo(idObjet, lien) VALUES(20, 'assets/imgs/im20.jfif');

INSERT INTO Photo(idObjet, lien) VALUES(21, 'assets/imgs/im21.jfif');
INSERT INTO Photo(idObjet, lien) VALUES(22, 'assets/imgs/im22.jfif');
INSERT INTO Photo(idObjet, lien) VALUES(23, 'assets/imgs/im23.jfif');
INSERT INTO Photo(idObjet, lien) VALUES(24, 'assets/imgs/im24.jfif');
INSERT INTO Photo(idObjet, lien) VALUES(25, 'assets/imgs/im25.jfif');
INSERT INTO Photo(idObjet, lien) VALUES(26, 'assets/imgs/im26.jfif');
INSERT INTO Photo(idObjet, lien) VALUES(27, 'assets/imgs/im27.jfif');
INSERT INTO Photo(idObjet, lien) VALUES(28, 'assets/imgs/im28.jfif');
INSERT INTO Photo(idObjet, lien) VALUES(29, 'assets/imgs/im29.jfif');
INSERT INTO Photo(idObjet, lien) VALUES(30, 'assets/imgs/im30.jfif');



