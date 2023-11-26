<?php
// Note to self: require necessaire pour envoyer les info de qui est loggedin
require_once('lib/checkSession.php');

?>

<div class="data-article">

    <h1>Écrire un article, <?= $_SESSION['nom']; ?></h1>

    <form action="index.php?controller=article&function=newArticle" method="post">

        <div class="champ-article">
            <label> Titre :
                <input name="titre" type="text" class="input-area">
            </label>
        </div>
        <div class="champ-article">
            <label> Article :
                <textarea name="article" maxlength="1000" class="textarea" rows="5" cols="100"></textarea>
            </label>
        </div>
        <div class="champ-article">
            <label> Date :
                <input name="date" type="date" class="areadate">
            </label>
        </div>

        <input name="utilisateur_id" type="hidden" value="<?= $_SESSION['id']; ?>">

        <div class="champ">
            <input type="submit" value="Save" class="btn">
        </div>
    </form>
</div>