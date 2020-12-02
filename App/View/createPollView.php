<?php include 'header.php'?>

    <body>
        <!-- Titre -->
        <h1>Créer un sondage</h1>

        <!-- Message pour avertir l'utilisateur si son sondage a bien été enregistré ou non -->
        <p id="red"><?php echo $createPollMessage ?></p>
        <!-- Form pour créer un sondage -->
        <form method="POST">
            <p>Question <input type="text" name="question"></p>
            <p>Réponse 1 <input type="text" name="answer1"></p>
            <p>Réponse 2 <input type="text" name="answer2"></p>
            <p>Réponse 3 <input type="text" name="answer3"></p>
            <p>Réponse 4 <input type="text" name="answer4"></p>
            <p>Durée <input type="time" name="duree"></p>
            <button id="sendData" name="createPoll">Valider le sondage</button>
            <div id="test2"></div>
        </form>
        <!-- Bouton pour revenir à la page d'accueil -->
        <a href="?">Aller à la page d'accueil</a>

<?php include 'footer.php'?>