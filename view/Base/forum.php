<?php
require('lib/checkSession.php');
require('db/connex.php');
$sql  = "SELECT * FROM article
INNER JOIN utilisateur on utilisateur.id = article.utilisateur_id ORDER BY date; ";
$result =  mysqli_query($connex, $sql);

?>
<div class="data-article">
    <h2>Hello <?= $_SESSION['nom']; ?></h2>
    <div class="article">
        <div>

        </div>
    </div>
</div>