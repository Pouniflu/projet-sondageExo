<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Résultat</title>
    </head>
    <body>
        <!-- Titre -->
        <h2>Résultat du sondage</h2>

        <!-- Affichage de la question --> 
        <p><?php echo $question[0]['question']?></p>

        <!-- Affichage de toutes les réponses possibles -->
        <table>
            <thead>
                <tr>
                    <th>Réponses</th>
                    <th>Résultats pour chaque réponse</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($answers as $answer):?>
                <tr>
                    <th><?= $answer->reponse?></th>
                    <th>10%</th>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

<?php include 'footer.php'?>