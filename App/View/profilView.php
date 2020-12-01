<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Profil</title>
    </head>
    <body>

    <header>
        <h1>Profil de <?php echo $_SESSION['pseudo']; ?></h1>
    </header>

    <main>
        <p>Nom = <?php echo $_SESSION['lastName']; ?></p>
        <br>
        <p>Prénom = <?php echo $_SESSION['firstName']; ?></p>
        <br>
        <p>Pseudo = <?php echo $_SESSION['pseudo']; ?></p>
        <br>
        <p>Mail = <?php echo $_SESSION['email']; ?></p>
        <br>
        <p>Password = <?php echo $_SESSION['password']; ?></p>

        <!-- Bouton pour revenir à la page d'accueil -->
        <a href="?">Aller à la page d'accueil</a>
    </main>

    </body>
</html>
