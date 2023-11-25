<?php
require('lib/checkSession.php');
require('db/connex.php');
$sql  = "SELECT * FROM article
INNER JOIN utilisateur on utilisateur.id = article.utilisateur_id ORDER BY date desc LIMIT 5; ";
$result =  mysqli_query($connex, $sql);

?>

<?php
if ($_SESSION) {

?>
    <div class="data-article">
        <h2>Hello <?= $_SESSION['nom']; ?></h2>
        <h3>Voici les dernières posts</h3>

    <?php

} else {
    ?>
        <div class="data-article">
            <h3>Voici les dernières posts</h3>
        <?php
    }
        ?>

        <?php
        foreach ($result as $row) {

        ?>
            <div class="forum-post">
                <div class="forum-titre"><?= $row['titre']; ?></div>
                <div class="forum-date"><?= $row['date']; ?></div>
                <div class="forum-article"><?= $row['article']; ?></div>
                <div class="forum-nom"><?= $row['nom']; ?></div>

                <div class="boutons-article">
                    <a href=""><button type="submit" class="boutonarticle">Editer</button></a>
                    <a href=""><button type="submit" class="boutonarticle">Éffacé</button></a>
                </div>
            </div>
        <?php
        }
        ?>
        </div>