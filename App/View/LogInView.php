<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Log In</title>
    </head>
    <body>

    <!-- Formulaire pour se connecter -->
    <form method="POST" action="">
        <table>

            <!-- Pseudo -->
            <tr>
                <td>
                    <label for="pseudo">Pseudo :</label>
                </td>
                <td>
                    <input type="text" placeholder="Pseudo" id="pseudo" name="pseudoConnect" value="<?php if(isset($pseudo)) { echo $pseudo; } ?>">
                </td>
            </tr>

            <!-- Mot de passe -->
            <tr>
                <td>
                    <label for="password">Password :</label>
                </td>
                <td>
                    <input type="password" placeholder="Votre Mot de Passe" id="password" name="passwordConnect">
                </td>
            </tr>

            <!-- Bouton de validation -->
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="formConnexion" value="Je me connecte !">
                </td>
            </tr>
    </body>
</html>
