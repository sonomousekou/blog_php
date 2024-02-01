<?php ob_start() ?>

<?php
$titre = "";
$content = ob_get_clean();
require_once "./views/templates.php";
?>