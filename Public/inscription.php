<?php

use Core\Database;

    if(isset($_POST['formInscription']))
    {

        $firstName = htmlspecialchars($_POST['firstName']);
        $lastName = htmlspecialchars($_POST['lastName']);
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $email = htmlspecialchars($_POST['email']);
        $email2 = htmlspecialchars($_POST['email2']);
        $mdp = sha1($_POST['mdp']);
        $mdp2 = sha1($_POST['mdp2']);


        if(!empty($_POST['lastName']) AND !empty($_POST['firstName']) AND !empty($_POST['pseudo']) AND !empty($_POST['email']) AND !empty($_POST['email2']) AND !empty($_POST['mdp']) AND !empty($_POST['mdp2'])) {

            $lastNamelength = strlen($lastName);
            $firstNamelength = strlen($firstName);
            $pseudolength = strlen($pseudo);
            
            if($lastNamelength <= 60){
                if($firstNamelength <= 65) {
                    if($pseudolength <= 60){
                
                        if($email == $email2) {

                            if(filter_var($email, FILTER_VALIDATE_EMAIL)) {

                                if($mdp == $mdp2) {

                                    // $insertmbr = $pdo->prepare("INSERT INTO t_utilisateurs(lastName, firstName, pseudo, email, mdp) VALUES(?, ?, ?, ?, ?)");
                                    // $insertmbr->execute(array($lastName, $firstName, $pseudo, $email, $mdp));
                                    // $erreur = "Votre compte a bien été créé";

                                } else {
                                    $erreur = "Vos mdp sont différents";
                                }
                            } else {
                                $erreur = "Ton adresse mail n'est pas valide !";
                            }

                        } else {
                            $erreur = "Vos adresses emails sont différentes";
                        }

                    } else {
                        $erreur = "Votre pseudo ne doit pas dépasser 60 caractères";
                    }
                } else {
                    $erreur = "Votre Prénom ne doit pas dépasser 65 caractères";
                }
            } else {
                $erreur = "Votre Nom ne doit pas dépasser 60 caractères";
            }



        } else {
            $erreur = "*Tous les champs doivent être complétés";
        }
    }


?>

<!DOCTYPE html>
<html lang="en">
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
                        <label for="mdp">Mot de Passe</label>
                    </td>
                    <td>
                        <input type="password" placeholder="Votre mot de passe" id="mdp" name="mdp">
                    </td>
                </tr>

                <tr>
                    <td>
                        <label for="mdp2">Confirmation Mot de Passe :</label>
                    </td>
                    <td>
                        <input type="password" placeholder="Confirmer votre mdp" id="mdp2" name="mdp2">
                    </td>
                </tr>

                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="formInscription" value="Je m'inscris !">
                    </td>
                </tr>

            </table>
        </form>

        <?php

            if(isset($erreur)) {
                echo '<font color="red">' . $erreur . "</font>";
            }

        ?>

    </div>
    
</body>
</html>