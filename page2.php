<?php session_start(); ?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Affichage information</title>
</head>
<body>

    <?php

        echo "\$_SESSION<br><br>";
        echo $_SESSION["nom"]."<br>";
        echo $_SESSION["prenom"]."<br>";
        echo $_SESSION["age"]."<br>";

        echo "<br><br>";

        echo "\$_COOKIE<br><br>";
        echo $_COOKIE["login"]."<br>";
        echo $_COOKIE["password"]."<br>";

    ?>

    <a href="index.php">Retour page index</a>
    <a href='page3.php'>aller a la page 3</a>

</body>
</html>
