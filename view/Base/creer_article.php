<div class="data-main">

    <h1>Écrire un article</h1>

    <form action="index.php?controller=article&function=newArticle" method="post">
        <span class="text-danger"><?= $msg; ?></span>
        <div class="champ"><label> Titre
                <input name="titre" type="text">
            </label>
        </div>
        <div class="champ">
            <label> Article :
                <input name="article" type="textarea" maxlength="1000">
            </label>
        </div>
        <div class="champ">
            <label> Date :
                <input name="date" type="date">
            </label>
        </div>
        <div class="champ">
            <input type="submit" value="Save" class="btn">
        </div>
    </form>
</div>