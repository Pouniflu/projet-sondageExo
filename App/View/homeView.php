<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Accueil</title>
    </head>
    <body>
        <!-- Titre -->
        <h1>Page d'accueil</h1>

        

        <!-- Affichage des sondages en cours des amis -->
        <h2>Sondages en cours de mes amis</h2>
        <section class="Ongoing">
            <table>
                <thead>
                    <tr>
                        <th>Créateur du sondage</th>
                        <th>Question</th>
                        <th>Accès au sondage</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($polls as $poll): ?>
                    <tr>
                        <th><?= $poll->creator_id?></th>
                        <th><?= $poll->question ?></th>
                        <th><a href="?page=results&sondage_id=<?= $poll->sondage_id ?>">Lien</a></th>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </section>

        <!-- Affichage des sondages passés de l'utilisateur -->
        <h2>Mes sondages passés</h2>
        <section class="Past">
            <table>
                <thead>
                    <tr>
                        <th>Question</th>
                        <th>Accès au sondage</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th></th>
                        <th></th>
                    </tr>
                </tbody>
            </table>
        </section>

        <!-- Accès page création de sondage -->
        <p><a href="?page=createPoll">Créer un sondage</a></p>

        <!-- Se connecter -->
        <p><a href="?page=logIn">Se connecter</a></p>

        <!-- S'inscrire -->
        <p><a href="?page=signIn">S'inscrire</a></p>

<?php include 'footer.php'?>
