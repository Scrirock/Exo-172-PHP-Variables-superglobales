<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modif cookie</title>
</head>
<body>

    <form action="page3.php" method="POST">
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

    <a href="index.php">Retour page index</a>
    <a href='page2.php'>aller a la page 2</a>
</body>
</html>
