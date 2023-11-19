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

<div class="welcome">

    <form action="/lib/auth.php" method="post">
        <h3>Login</h3>
        <span class="text-danger"><?= $msg; ?></span>
        <label> Username :
            <input name="username" type="email">
        </label>
        <label> Mot de passe :
            <input name="password" type="password">
        </label>
        <input type="submit" value="Save">
    </form>

</div>