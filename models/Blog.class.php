<?php

class Blog {
    private $id;
    private $image;
    private $titre;
    private $categorie;
    private $auteur;
    private $created;
    private $contenu;
    private $photo_auteur;
    private $active;

    // Constructeur
    public function __construct($id, $categorie, $titre, $image, $auteur, $created, $contenu, $photo_auteur, $active) {
        $this->id = $id;
        $this->image = $image;
        $this->titre = $titre;
        $this->categorie = $categorie;
        $this->auteur = $auteur;
        $this->created = $created;
        $this->contenu = $contenu;
        $this->photo_auteur = $photo_auteur;
        $this->active = $active;
    }

    // Getters
    public function getId() {
        return $this->id;
    }

    public function getImage() {
        return $this->image;
    }

    public function getTitre() {
        return $this->titre;
    }

    public function getCategorie() {
        return $this->categorie;
    }

    public function getAuteur() {
        return $this->auteur;
    }

    public function getCreated() {
        return $this->created;
    }

    public function getContenu() {
        return $this->contenu;
    }

    public function getPhotoAuteur() {
        return $this->photo_auteur;
    }

    public function isActive() {
        return $this->active;
    }

    // Setters
    public function setId($id) {
        $this->id = $id;
    }

    public function setTitre($titre) {
        $this->titre = $titre;
    }

    public function setCategorie($categorie) {
        $this->categorie = $categorie;
    }

    public function setImage($image) {
        $this->image = $image;
    }

    public function setAuteur($auteur) {
        $this->auteur = $auteur;
    }

    public function setCreated($created) {
        $this->created = $created;
    }

    public function setContenu($contenu) {
        $this->contenu = $contenu;
    }

    public function setPhotoAuteur($photo_auteur) {
        $this->photo_auteur = $photo_auteur;
    }

    public function setActive($active) {
        $this->active = $active;
    }
}

?>
