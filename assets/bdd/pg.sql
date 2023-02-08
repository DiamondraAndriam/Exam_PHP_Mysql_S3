
CREATE TABLE Admin(
    id serial PRIMARY KEY,
    nom VARCHAR(20) NOT NULL,
    mdp VARCHAR(10) NOT NULL,
    email VARCHAR(20) UNIQUE NOT NULL
    
);

CREATE TABLE Utilisateur(
    id serial PRIMARY KEY,
    nom VARCHAR(20) NOT NULL,
    mdp VARCHAR(10) NOT NULL,
    email VARCHAR(20) UNIQUE NOT NULL
    
);

CREATE TABLE Category(
    id serial PRIMARY KEY,
    nom VARCHAR(20) NOT NULL
    
);
 table_name
CREATE TABLE Objet(
    id serial PRIMARY KEY,
    nom VARCHAR(20) NOT NULL,
    idUser INTEGER NOT NULL,
    idCategory INTEGER,
    descriptions VARCHAR(250),
    estimation REAL,
    FOREIGN KEY(idUser) REFERENCES Utilisateur(id),
    FOREIGN KEY(idCategory) REFERENCES Category(id)
);
CREATE TYPE etat_enum AS ENUM (
    'attente',
    'accepte',
    'annule'
);
CREATE TABLE Echange(
    id serial PRIMARY KEY,
    idObjet1 INTEGER NOT NULL,
    idObjet2 INTEGER NOT NULL,
    etat etat_enum NOT NULL,
    FOREIGN KEY(idObjet1) REFERENCES Objet(id),
    FOREIGN KEY(idObjet2) REFERENCES Objet(id)
);

CREATE TABLE Photo(
    id serial PRIMARY KEY,
    idObjet INTEGER NOT NULL,
    lien VARCHAR(50)
    
);

INSERT INTO admin(nom,mdp,email) values ('diamondra','andriam','diamondra@gmail.com');
INSERT INTO admin(nom,mdp,email) values ('laura','ophelie','laura@gmail.com');
INSERT INTO admin(nom,mdp,email) values ('mirenty','yvannio','mirenty@gmail.com');

insert INTO utilisateur(nom,mdp,email) VALUES ('mickael','jean1','mickael@gmial.com');
insert INTO utilisateur(nom,mdp,email) VALUES ('harena','jean2','harena@gmial.com');
insert INTO utilisateur(nom,mdp,email) VALUES ('nomena','jean3','nomena@gmial.com');
insert INTO utilisateur(nom,mdp,email) VALUES ('devoly','jean4','devoly@gmial.com');

insert INTO category(nom) VALUES ('electronique');
insert INTO category(nom) VALUES ('cosmetique');
insert INTO category(nom) VALUES ('decoration');
insert INTO category(nom) VALUES ('bijout');
insert INTO category(nom) VALUES ('accessoire');

INSERT INTO objet (nom,iduser,idcategory,descriptions,estimation)
VALUES             ('chargeur',1,1,'bien',100);

INSERT INTO objet (nom,iduser,idcategory,descriptions,estimation)
VALUES             ('telephone',1,1,'assez bien',200);

INSERT INTO objet (nom,iduser,idcategory,descriptions,estimation)
VALUES             ('vernis',2,2,'tres bien',200);
INSERT INTO objet (nom,iduser,idcategory,descriptions,estimation)
VALUES             ('vase',3,3,'excellent',300);
INSERT INTO objet (nom,iduser,idcategory,descriptions,estimation)
VALUES             ('collier',4,4,'honorable',400);
INSERT INTO objet (nom,iduser,idcategory,descriptions,estimation)
VALUES             ('acessoir',4,5,'tres honorable',500);


INSERT INTO Photo(idObjet, lien) VALUES(1, 'assets/imgs/im1.jfif');--
INSERT INTO Photo(idObjet, lien) VALUES(2, 'assets/imgs/im2.jfif');
INSERT INTO Photo(idObjet, lien) VALUES(3, 'assets/imgs/im5.jfif');--
INSERT INTO Photo(idObjet, lien) VALUES(4, 'assets/imgs/im6.jfif');--

INSERT INTO Photo(idObjet, lien) VALUES(5, 'assets/imgs/im3.jfif');--collier
INSERT INTO Photo(idObjet, lien) VALUES(6, 'assets/imgs/im4.jfif');--sac
