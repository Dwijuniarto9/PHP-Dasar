<?php

require_once "content.php";

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title> <?= $titel ?> </title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Responsive navbar-->
        <?php
            require_once "pages/nav.php";
        ?>

        <h1>materi selanjutnya ada di youtube playlist php untuk siswa smk</h1>
        <!-- Page container-->
        <?php
            require_once "pages/container.php";
        ?>
        <!-- Footer-->
        <?php
            require_once "pages/footer.php";
        ?>
        <!-- Bootstrap core JS-->
        <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
