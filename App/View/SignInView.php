<?php

/**
 * @var $message;
 */

?>

<?php include 'header.php'?>

    <body>
        <h1>Inscription</h1>

        <!-- Formulaire d'inscription -->
        <form method="POST" action="">
            <table>

                <!-- Nom -->
                <tr>
                    <td>
                        <label for="lastName">Nom :</label>
                    </td>
                    <td>
                        <input type="text" placeholder="Votre nom" id="lastName" name="lastName" value="<?php if(isset($lastName)) { echo $lastName; } ?>">
                    </td>
                </tr>

                <!-- Prénom -->
                <tr>
                    <td>
                        <label for="firstName">Prénom :</label>
                    </td>
                    <td>
                        <input type="text" placeholder="Votre prénom" id="firstName" name="firstName" value="<?php if(isset($firstName)) { echo $firstName; } ?>">
                    </td>
                </tr>

                <!-- Pseudo -->
                <tr>
                    <td>
                        <label for="pseudo">Pseudo :</label>
                    </td>
                    <td>
                        <input type="text" placeholder="Votre pseudo" id="pseudo" name="pseudo" value="<?php if(isset($pseudo)) { echo $pseudo; } ?>">
                    </td>
                </tr>

                <!-- Email -->
                <tr>
                    <td>
                        <label for="email">Email :</label>
                    </td>
                    <td>
                        <input type="email" placeholder="Votre email" id="email" name="email" value="<?php if(isset($email)) { echo $email; } ?>">
                    </td>
                </tr>

                <!-- Confirmation de l'email -->
                <tr>
                    <td>
                        <label for="email2">Confirmation Email :</label>
                    </td>
                    <td>
                        <input type="email" placeholder="Confirmer votre email" id="email2" name="email2" value="<?php if(isset($email2)) { echo $email2; } ?>">
                    </td>
                </tr>

                <!-- Mot de passe -->
                <tr>
                    <td>
                        <label for="password">Mot de Passe</label>
                    </td>
                    <td>
                        <input type="password" placeholder="Votre mot de passe" id="password" name="password">
                    </td>
                </tr>

                <!-- Confirmation du mot de passe -->
                <tr>
                    <td>
                        <label for="password2">Confirmation Mot de Passe :</label>
                    </td>
                    <td>
                        <input type="password" placeholder="Confirmer votre mdp" id="password2" name="password2">
                    </td>
                </tr>

                <!-- Validation de l'inscription -->
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="formInscription" value="Je m'inscris !">
                    </td>
                </tr>
                <?php if (!is_null($message)) { ?>
                    <p id="red"><?= $message ?></p>
                <?php  } ?>
            </table>
        </form>

        <!-- Bouton pour revenir à la page d'accueil -->
        <a href="?">Aller à la page d'accueil</a>
    </body>
</html>