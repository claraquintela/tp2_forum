<?php

$msg = null;
if (isset($_GET['msg'])) {
    if ($_GET['msg'] == 1) {
        $msg = "Verifier le nom de l'utilisateur";
    } elseif ($_GET['msg'] == 2) {
        $msg = "Verifier le mot de passe";
    }
}

?>

<div class="data-main">

    <h1>The Knitting Forum</h1>

    <form action="index.php?controller=utilisateur&function=authentication" method="post">
        <h3>Login</h3>
        <span class="text-danger"><?= $msg; ?></span>
        <div class="champ"><label> Username :
                <input name="username" type="email">
            </label>
        </div>
        <div class="champ">
            <label> Mot de passe :
                <input name="motdepasse" type="password">
            </label>
        </div>
        <div class="champ">
            <input type="submit" value="Login" class="btn">
        </div>
    </form>
</div>