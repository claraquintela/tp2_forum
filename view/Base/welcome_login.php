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

    <form action="/lib/auth.php" method="post">
        <h3>Login</h3>
        <span class="text-danger"><?= $msg; ?></span>
        <div class="champ"><label> Username :
                <input name="username" type="email">
            </label>
        </div>
        <div class="champ">
            <label> Mot de passe :
                <input name="password" type="password">
            </label>
        </div>
        <div class="champ">
            <input type="submit" value="Login">
        </div>
    </form>
</div>

</div>