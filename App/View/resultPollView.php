<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Résultat</title>
    </head>
    <body>
        <header>
            <!-- Titre -->
            <h2>Sondage et résultat</h2>
        </header>

        <main>
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

            <div>
                <button id="sendVote1">Je vote pour le choix 1</button><div id="result1"></div>
                <button id="sendVote2">Je vote pour le choix 2</button><div id="result2"></div>
                <button id="sendVote3">Je vote pour le choix 3</button><div id="result3"></div>
                <button id="sendVote4">Je vote pour le choix 4</button><div id="result4"></div>
            </div>
            <!-- Bouton pour revenir à la page d'accueil -->
            <a href="?">Aller à la page d'accueil</a>
        </main>
        
<?php include 'footer.php'?>