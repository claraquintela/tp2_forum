<?php
require('lib/checkSession.php');
require('db/connex.php');

?>

<div class="data-article">

    <h1>Écrire un article</h1>

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

        <div class="champ-article">

            <input name="utilisateur_id" type="hidden" value="<?= $_SESSION['id']; ?>">



        </div>
        <div class="champ">
            <input type="submit" value="Save" class="btn">
        </div>
    </form>
</div>