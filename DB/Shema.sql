CREATE DATABASE mabagnole;
use mabagnole;

create table utilisateur (
    id_utilisateur INT PRIMARY KEY AUTO_INCREMENT,
    nom varchar(50),
    email varchar(200) unique,
    `role` enum('admin', 'client') default 'client'
);

create table categorie (
    id_categorie int PRIMARY key AUTO_INCREMENT,
    titre varchar(50),
    `description` text
);

create table vehicule (
    id_vehicule INT PRIMARY KEY AUTO_INCREMENT,
    modele varchar(40),
    marque varchar(40),
    prix_par_jour decimal(10,2) unsigned,
    disponible boolean default 1,
    `image` varchar(256),
    id_categorie int,
    foreign key (id_categorie) references categorie(id_categorie)
);



CREATE TABLE reservation (
    id_utilisateur INT,
    id_vehicule INT,
    date_debut DATE,
    date_fin DATE,
    statut_reservation ENUM('en_attente', 'confirmee', 'annulee') DEFAULT 'en_attente',
    PRIMARY KEY (id_utilisateur, id_vehicule),
    FOREIGN KEY (id_utilisateur) REFERENCES utilisateur(id_utilisateur),
    FOREIGN KEY (id_vehicule) REFERENCES vehicule(id_vehicule)
);


create table avis (
    id_utilisateur INT,
    id_vehicule INT,
    commentaire text,
    date_avis date,
    PRIMARY KEY (id_utilisateur,id_vehicule),
    FOREIGN KEY (id_utilisateur) REFERENCES utilisateur(id_utilisateur),
    FOREIGN KEY (id_vehicule) REFERENCES vehicule(id_vehicule)
);