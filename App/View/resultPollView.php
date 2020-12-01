<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Résultat</title>
    </head>
    <body>
        <!-- Titre -->
        <h2>Sondage et résultat</h2>

        <!-- Affichage de la question --> 
        <p><?php echo $question[0]['question']?></p>

        <!-- Affichage du temps --> 
        <p><?= $time[0]['duree'] ?></p>

        <!-- Affichage de toutes les réponses possibles -->
        <table>
            <thead>
                <tr>
                    <th>Réponses</th>
                    <th>Vote</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($answers as $answer):?>
                <tr>
                    <th><?= $answer->reponse?></th>
                    <th><button id="sendVote">Je vote</button></th>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

<?php include 'footer.php'?>