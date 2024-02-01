drop DATABASE db_blog;

CREATE DATABASE db_blog charset=utf8 collate=utf8_general_ci;
use db_blog

-- Création de la table "blogs"
CREATE TABLE blogs (
    id INT PRIMARY KEY,
    titre VARCHAR(255),
    categorie VARCHAR(255),
    image VARCHAR(255),
    auteur VARCHAR(255),
    created TIMESTAMP,
    contenu TEXT,
    photo_auteur VARCHAR(255),
    active BOOLEAN
) DEFAULT CHARSET=utf8;

-- Insertions pour la table "blogs"
INSERT INTO blogs (id, image, titre, categorie, auteur, created, contenu, photo_auteur, active)
VALUES
    (1, 'blogpost-1.jpg', 'titre 1', 'Developpement web', 'Auteur1', '2024-01-29 12:00:00', 'Contenu du blog 1', 'avatar-1.jpg', true),
    (2, 'blogpost-2.jpg', 'titre 2', 'Reseau systeme', 'Auteur2', '2024-01-29 12:30:00', 'Contenu du blog 2', 'avatar-2.jpg', false),
    (3, 'blogpost-3.jpg', 'titre 3', 'Securite', 'Auteur3', '2024-01-29 13:00:00', 'Contenu du blog 3', 'avatar-3.jpg', true),
    (4, 'blogpost-4.jpg', 'titre 4', 'Developpement web', 'Auteur4', '2024-01-29 13:30:00', 'Contenu du blog 4', 'avatar-4.jpg', false),
    (5, 'blogpost-5.jpg', 'titre 5', 'Developpement web', 'Auteur5', '2024-01-29 14:00:00', 'Contenu du blog 5', 'avatar-5.jpg', true);
