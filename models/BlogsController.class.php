<?php
require_once "BlogManager.class.php";

class BlogsController {
    private $blogManager;

    public function __construct() {
        $this->blogManager = new BlogManager();
        $this->blogManager->chargementBlogs();
    }

    public function displayBlogs() {
        $blogs = $this->blogManager->getBlogsActifs();
        require "views/pages/blogs.view.php";
    }

    public function displayBlog($id) {
        $blog = $this->blogManager->getBlogById($id);
        require "views/pages/displayBlog.view.php";
    }

    public function addBlog() {
        require "views/addBlog.view.php";
    }

    public function addBlogValidation() {
        // Handle form validation and data insertion here

        // Example: $this->blogManager->addBlog($_POST['auteur'], $_POST['contenu'], ...);

        // Redirect to the blogs list page after adding a blog
        header('Location: ' . URL . "blogs");
    }

    public function deleteBlog($id) {
        // Handle blog deletion here

        // Example: $this->blogManager->deleteBlog($id);

        // Redirect to the blogs list page after deleting a blog
        header('Location: ' . URL . "blogs");
    }

    public function editBlog($id) {
        $blog = $this->blogManager->getBlogById($id);
        require "views/editBlog.view.php";
    }

    public function editBlogValidation() {
        // Handle form validation and data modification here

        // Example: $this->blogManager->editBlog($_POST['id'], $_POST['auteur'], $_POST['contenu'], ...);

        // Redirect to the blogs list page after editing a blog
        header('Location: ' . URL . "blogs");
    }

    private function uploadImage($file, $dir) {
		if (!isset($file['name']) || empty($file['name'])) {
			throw new Exception("You must provide an image");
		}

		if (!file_exists($dir)) {
			mkdir($dir, 0777, true);
		}

		$extension = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
		$random = rand(0, 99999);
		$targetFile = $dir . $random . "_" . $file['name'];

		if (!getimagesize($file["tmp_name"])) {
			throw new Exception("The file is not an image");
		}

		$allowedExtensions = ["jpg", "jpeg", "png", "gif"];
		if (!in_array($extension, $allowedExtensions)) {
			throw new Exception("Unsupported file extension");
		}

		if (file_exists($targetFile)) {
			throw new Exception("File already exists");
		}

		if ($file['size'] > 500000) {
			throw new Exception("File is too large");
		}

		if (!move_uploaded_file($file['tmp_name'], $targetFile)) {
			throw new Exception("Image upload failed");
		}

		return $random . "_" . $file['name'];
	}
}
?>
