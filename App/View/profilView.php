<?php include 'header.php'?>

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

        <!-- Bouton pour modifier le profil -->
        <a href="?page=modifProfil">Modifier le profil</a>

        <!-- Bouton pour revenir à la page d'accueil -->
        <a href="?">Aller à la page d'accueil</a>
    </main>

    </body>
</html>
