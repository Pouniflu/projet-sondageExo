<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>modifProfil</title>
    </head>
    <body>

    <header>
        <h1>Profil de <?php echo $_SESSION['pseudo']; ?></h1>
    </header>

    <main>
    <!-- Titre -->
    <h2>Modifier le profil</h2>

    <!-- Form pour modifier le profil -->
    <form method="POST">
        <p>Nom <input type="text" name="lastName" placeholder="<?php echo $_SESSION['lastName']; ?>"></p>
        <p>Prénom <input type="text" name="firstname" placeholder="<?php echo $_SESSION['firstName']; ?>"></p>
        <p>Pseudo <input type="text" name="pseudo" placeholder="<?php echo $_SESSION['pseudo']; ?>"></p>
        <button id="modifProfil" name="modifProfil">Modifier le profil</button>
    </form>

        <!-- Bouton pour revenir à la page d'accueil -->
        <a href="?">Aller à la page d'accueil</a>
    </main>

    </body>
</html>
