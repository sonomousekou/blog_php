<?php

require_once "ConnexionDB.class.php";
require_once "Blog.class.php";

class BlogManager extends ConnexionDB {
    private $blogs; // tableau de Blog

    public function ajoutBlog(Blog $blog) {
        $this->blogs[] = $blog;
    }

    public function getBlogs() {
        return $this->blogs;
    }

    public function chargementBlogs() {
        $req = $this->getBdd()->prepare("SELECT * FROM blogs");
        $req->execute();
        $mesBlogs = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();

        foreach ($mesBlogs as $blog) {
            $b = new Blog(
                $blog['id'],
                $blog['categorie'],
                $blog['titre'],
                $blog['image'],
                $blog['auteur'],
                $blog['created'],
                $blog['contenu'],
                $blog['photo_auteur'],
                $blog['active']
            );
            $this->ajoutBlog($b);
        }
    }

    // méthode pour récupérer les blogs actifs
    public function getBlogsActifs() {
        return array_filter($this->blogs, function($blog) {
            return $blog->isActive();
        });
    }


    public function getBlogById($id) {
        foreach ($this->blogs as $blog) {
            if ($blog->getId() === $id) {
                return $blog;
            }
        }
        throw new Exception("Le blog n'existe pas");
    }

    public function ajoutBlogBd($categorie, $titre, $image, $auteur, $created, $contenu, $photo_auteur, $active) {
        $req = "INSERT INTO blogs (titre, image, auteur, created, contenu, photo_auteur, active)
                VALUES (:image, :auteur, :created, :contenu, :photo_auteur, :active)";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":categorie", $categorie, PDO::PARAM_STR);
        $stmt->bindValue(":titre", $titre, PDO::PARAM_STR);
        $stmt->bindValue(":image", $image, PDO::PARAM_STR);
        $stmt->bindValue(":auteur", $auteur, PDO::PARAM_STR);
        $stmt->bindValue(":created", $created, PDO::PARAM_STR);
        $stmt->bindValue(":contenu", $contenu, PDO::PARAM_STR);
        $stmt->bindValue(":photo_auteur", $photo_auteur, PDO::PARAM_STR);
        $stmt->bindValue(":active", $active, PDO::PARAM_INT);
        $resultat = $stmt->execute();
        $stmt->closeCursor();

        if ($resultat > 0) {
            $blog = new Blog(
                $this->getBdd()->lastInsertId(),
                $categorie,
                $titre,
                $image,
                $auteur,
                $created,
                $contenu,
                $photo_auteur,
                $active
            );
            $this->ajoutBlog($blog);
        }
    }

    public function suppressionBlogBD($id) {
        $req = "DELETE FROM blogs WHERE id = :idBlog";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":idBlog", $id, PDO::PARAM_INT);
        $resultat = $stmt->execute();
        $stmt->closeCursor();

        if ($resultat > 0) {
            $blog = $this->getBlogById($id);
            unset($blog);
        }
    }

    public function modificationBlogBD($id, $categorie, $titre, $image, $auteur, $created, $contenu, $photo_auteur, $active) {
        $req = "UPDATE blogs 
                SET image = :image, titre= :titre, auteur = :auteur, created = :created, contenu = :contenu, photo_auteur = :photo_auteur, active = :active
                WHERE id = :id";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":id", $id, PDO::PARAM_INT);
        $stmt->bindValue(":categorie", $categorie, PDO::PARAM_STR);
        $stmt->bindValue(":titre", $titre, PDO::PARAM_STR);
        $stmt->bindValue(":image", $image, PDO::PARAM_STR);
        $stmt->bindValue(":auteur", $auteur, PDO::PARAM_STR);
        $stmt->bindValue(":created", $created, PDO::PARAM_STR);
        $stmt->bindValue(":contenu", $contenu, PDO::PARAM_STR);
        $stmt->bindValue(":photo_auteur", $photo_auteur, PDO::PARAM_STR);
        $stmt->bindValue(":active", $active, PDO::PARAM_INT);
        $resultat = $stmt->execute();
        $stmt->closeCursor();

        if ($resultat > 0) {
            $this->getBlogById($id)->setTitre($categorie);
            $this->getBlogById($id)->setTitre($titre);
            $this->getBlogById($id)->setImage($image);
            $this->getBlogById($id)->setAuteur($auteur);
            $this->getBlogById($id)->setCreated($created);
            $this->getBlogById($id)->setContenu($contenu);
            $this->getBlogById($id)->setPhotoAuteur($photo_auteur);
            $this->getBlogById($id)->setActive($active);
        }
    }
}

?>
