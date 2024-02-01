<?php ob_start() ?>

<?php
$titre = "detailBlog";
$content = ob_get_clean();
require_once "./views/templates.php";
?>