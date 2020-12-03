  
<?php include 'header.php'?>

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
                    <th><?= $poll->pseudo?></th>
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
                <?php foreach($closedPolls as $closedPoll): ?>
                <tr>
                    <th><?= $closedPoll->question ?></th>
                    <th><a href="?page=results&sondage_id=<?= $closedPoll->sondage_id ?>">Lien</a></th>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </section>

            <!-- Affichage de mes amis Online -->
            <h2> Amis en ligne </2>

<section class="friendsonline">
<script>
$(document).ready(function() {
    setInterval(function () {
        
    
    
<?php
    $sql = "SELECT * FROM t_utilisateurs WHERE online IS TRUE";
$result = mysqli_query($dbConfig, $sql);
if(mysqli_num_rows($result) > 0){
    while ($row = mysqli_fetch_assoc($result)){
        echo "<p>"; 
        echo $row['pseudo'];
        echo "<br>";
        echo "En ligne";
        echo "</p>";
    }

} else {
    echo "Vous n'avez pas d'amis connectés!";
}
?>
}, 1000);
    
});
</script>




</section>


    <!-- Titre des liens -->
    <h2>Liens</h2>
    <!-- Accès page création de sondage -->
    <a href="?page=createPoll">Créer un sondage</a>
    <br>

    <!-- Se connecter -->
    <a href="?page=logIn">Se connecter</a>
    <br>

    <!-- S'inscrire -->
    <a href="?page=signIn">S'inscrire</a>
    <br>

    <!-- Accéder à la page profil -->
    <a href="?page=profil">Profil</a>
    <br>

<?php include 'footer.php'?>

