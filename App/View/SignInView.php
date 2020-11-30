<?php

/**
 * @var $message;
 */

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>
<body>

<div>
    <h1>Inscription</h1>

    <form method="POST" action="">
        <table>

            <tr>
                <td>
                    <label for="lastName">Nom :</label>
                </td>
                <td>
                    <input type="text" placeholder="Votre nom" id="lastName" name="lastName" value="<?php if(isset($lastName)) { echo $lastName; } ?>">
                </td>
            </tr>

            <tr>
                <td>
                    <label for="firstName">Prénom :</label>
                </td>
                <td>
                    <input type="text" placeholder="Votre prénom" id="firstName" name="firstName" value="<?php if(isset($firstName)) { echo $firstName; } ?>">
                </td>
            </tr>

            <tr>
                <td>
                    <label for="pseudo">Pseudo :</label>
                </td>
                <td>
                    <input type="text" placeholder="Votre pseudo" id="pseudo" name="pseudo" value="<?php if(isset($pseudo)) { echo $pseudo; } ?>">
                </td>
            </tr>

            <tr>
                <td>
                    <label for="email">Email :</label>
                </td>
                <td>
                    <input type="email" placeholder="Votre email" id="email" name="email" value="<?php if(isset($email)) { echo $email; } ?>">
                </td>
            </tr>

            <tr>
                <td>
                    <label for="email2">Confirmation Email :</label>
                </td>
                <td>
                    <input type="email" placeholder="Confirmer votre email" id="email2" name="email2" value="<?php if(isset($email2)) { echo $email2; } ?>">
                </td>
            </tr>

            <tr>
                <td>
                    <label for="password">Mot de Passe</label>
                </td>
                <td>
                    <input type="password" placeholder="Votre mot de passe" id="password" name="password">
                </td>
            </tr>

            <tr>
                <td>
                    <label for="password2">Confirmation Mot de Passe :</label>
                </td>
                <td>
                    <input type="password" placeholder="Confirmer votre mdp" id="password2" name="password2">
                </td>
            </tr>

            <tr>
                <td></td>
                <td>
                    <input type="submit" name="formInscription" value="Je m'inscris !">
                </td>
            </tr>
            <?php if (!is_null($message)) { ?>
                <p><?= $message ?></p>
            <?php  } ?>

        </table>
    </form>

</div>

</body>
</html>