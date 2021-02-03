<?php
    session_start();
    session_name("pafSessionExo2");
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Superglobal</title>
</head>
<body>

    <?php

        echo $_SERVER['HTTP_USER_AGENT']."<br>";
        echo $_SERVER['REMOTE_ADDR']."<br>";
        echo $_SERVER['SERVER_NAME']."<br>";

        $_SESSION["nom"] = "Doe";
        $_SESSION["prenom"] = "John";
        $_SESSION["age"] = 37;

    ?>

    <a href='page2.php'>aller a la page 2</a>

    <form action="index.php" method="POST">
        <label for="login">Peudo: </label>
        <input type="text" name="login" id="login">
        <label for="password">Mot de passe: </label>
        <input type="password" name="password" id="password">
        <input type="submit">
    </form>

    <?php
        if (isset($_POST["login"], $_POST["password"])){
            setcookie("login", $_POST["login"]);
            setcookie("password", $_POST["password"]);
        }
    ?>

    <a href="page3.php">Modifier les cookie formulaire</a>

</body>
</html>
