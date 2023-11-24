<div class="data-main">
    <h2>Créer votre compte</h2>


    <form action="index.php?controller=utilisateur&function=newUtilisateur" method="post">
        <div class="champ">
            <label> Nom :
                <input name="nom" type="text" maxlength="25">
            </label>
        </div>

        <div class="champ">
            <label> Courriel :
                <input name="email" type="email">
            </label>
        </div>

        <div class="champ">
            <label> Mot de passe:
                <input name="motdepasse" type="password" minlength="6" maxlength="20">
            </label>
        </div>

        <div class="champ">
            <label> Naissance :
                <input name="naissance" type="date">
            </label>
        </div>

        <div class="champ">
            <input type="submit" value="Save" class="btn">
        </div>

    </form>
</div>