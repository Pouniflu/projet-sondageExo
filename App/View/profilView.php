<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profil</title>
</head>
<body>

<header>
    <h2>Profil de <?php echo $_SESSION['pseudo']; ?></h2>
    <br>
    <h3>Nom = <?php echo $_SESSION['lastName']; ?></h3>
    <br>
    <h3>Prénom = <?php echo $_SESSION['firstName']; ?></h3>
    <br>
    <h3>Pseudo = <?php echo $_SESSION['pseudo']; ?></h3>
    <br>
    <h3>Mail = <?php echo $_SESSION['email']; ?></h3>
    <br>
    <h3>Password = <?php echo $_SESSION['password']; ?></h3>
</header>

<a href="?">Aller à la page d'accueil</a>

</body>
</html>
