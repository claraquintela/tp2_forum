<?php
require('lib/checkSession.php');
require('db/connex.php');
$sql  = "SELECT article.id, article.titre, article.date, article.article, article.utilisateur_id, utilisateur.nom FROM article
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

    foreach ($result as $row) {


        ?>
            <div class="forum-post">
                <div class="forum-titre"><?= $row['titre']; ?></div>
                <div class="forum-date"><?= $row['date']; ?></div>
                <div class="forum-article"><?= $row['article']; ?></div>
                <div class="forum-nom"><?= $row['nom']; ?></div>

                <?php

                if ($_SESSION) {

                    if ($_SESSION['id'] == $row['utilisateur_id']) {
                ?>
                        <div class="boutons-article">
                            <a href="index.php?controller=article&function=formedit&id=<?= $row['id']; ?>"><button type="submit" class="btn">Editer</button></a>
                            <a href="index.php?controller=article&function=deletearticle&id=<?= $row['id']; ?>"><button type="submit" class="btn">Éffacé</button></a>
                        </div>
            </div>
        <?php
                    } else {
        ?>
            <div class="boutons-article">
                <label class="danger">Vous pouvez éditer/éffacer seulement les articles que vous avez écrit</label><br>
                <button type="submit" class="btn" disabled>Editer</button>
                <button type="submit" class="btn" disabled>Éffacé</button>
            </div>
        </div>
    <?php
                    }
                } else {
    ?>
    <div class="boutons-article">
        <label class="danger">Faites le login pour pouvoir éditer/éffacer vos articles</label><Br>
        <button type="submit" class="btn" disabled>Editer</button>
        <button type="submit" class="btn" disabled>Éffacé</button>
    </div>
    </div>
<?php
                }
            }
?>
</div>