<div class="data-article">

    <h1>Éditer l'article</h1>

    <form action="index.php?controller=article&function=editer" method="post">

        <div class="champ-article">
            <label> Titre :
                <input name="titre" type="text" class="input-area" value="<?= $data['titre']; ?>">
            </label>
        </div>
        <div class="champ-article">
            <label> Article :
                <textarea name="article" maxlength="1000" class="textarea" rows="5" cols="100"><?= $data['article']; ?></textarea>
            </label>
        </div>
        <div class="champ-article">
            <label> Date :
                <input name="date" type="date" class="areadate" value="<?= $data['date']; ?>">
            </label>
        </div>

        <input name="id" type="hidden" value="<?= $data['id']; ?>">

        <div class="champ">
            <input type="submit" value="Mettre à jour" class="btn">
        </div>
    </form>
</div>