<?php include 'header.php'?>

    <body>
        <header>
            <!-- Titre -->
            <h1>Sondage et résultat</h1>
        </header>

        <main>
            <!-- Affichage de la question --> 
            <h2><?php echo $question[0]['question']?></h2>

            <!-- Affichage du temps --> 
            <p>Durée du sondage : <?= $time[0]['duree'] ?></p>

            <!-- Affichage de toutes les réponses possibles -->
            <table>
                <thead>
                    <tr>
                        <th>Réponse 1</th>
                        <th>Réponse 2</th>
                        <th>Réponse 3</th>
                        <th>Réponse 4</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php foreach ($answers as $answer):?>
                        <th><?= $answer->reponse?></th>
                        <?php endforeach; ?>
                    </tr>
                    <tr>
                        <th id="nbVote1">0</th>
                        <th id="nbVote2">0</th>
                        <th id="nbVote3">0</th>
                        <th id="nbVote4">0</th>
                    </tr>

                </tbody>
            </table>

            <div id="vote">
                <button id="sendVote1">Je vote pour la réponse 1</button><div id="result1"></div>
                <button id="sendVote2">Je vote pour la réponse 2</button><div id="result2"></div>
                <button id="sendVote3">Je vote pour la réponse 3</button><div id="result3"></div>
                <button id="sendVote4">Je vote pour la réponse 4</button><div id="result4"></div>
            </div>
            <!-- Bouton pour revenir à la page d'accueil -->
            <a href="?">Aller à la page d'accueil</a>
        </main>
        
<?php include 'footer.php'?>