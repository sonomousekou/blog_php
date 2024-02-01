<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <?php include('views/includes/head.inc.php'); ?>
    <title><?= $titre ?> | DevNetSec</title>
</head>

<body class="bg-white">
    <!-- Page content -->
    <main>

        <?php 
        include('views/includes/navbar.inc.php'); 
        ?>

        <?= $content ?>

        <!-- Footer -->
        <!-- Footer -->
    <?php include('views/includes/footer.inc.php'); ?>

    </main>

    <!-- Scroll top -->
    <div class="btn-scroll-top">
        <svg class="progress-square svg-content" width="100%" height="100%" viewBox="0 0 40 40">
            <path
                d="M8 1H32C35.866 1 39 4.13401 39 8V32C39 35.866 35.866 39 32 39H8C4.13401 39 1 35.866 1 32V8C1 4.13401 4.13401 1 8 1Z" />
        </svg>
    </div>

    <!-- Scripts -->
    <?php include('views/includes/scripts.inc.php'); ?>

</body>

</html>