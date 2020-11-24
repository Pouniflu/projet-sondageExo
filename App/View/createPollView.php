<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Créer un sondage</title>
    </head>
    <body>
        <!-- Titre -->
        <h2>Créer un sondage</h2>

        <!-- Form pour créer un sondage -->
        <form method="POST">
            <p>Question <input type="text" name="question"></p>
            <p>Réponse 1 <input type="text" name="answer1"></p>
            <p>Réponse 2 <input type="text" name="answer2"></p>
            <p>Réponse 3 <input type="text" name="answer3"></p>
            <p>Réponse 4 <input type="text" name="answer4"></p>
            <p>Durée <input type="time" name="duree"></p>
            <button id="sendData" name="createPoll">Valider le sondage</button>
        </form>

<?php include 'footer.php'?>