<?php

function index()
{
    render("/base/creer_article.php");
}

function newArticle()
{
    require_once("db/connex.php");
    var_dump($_POST);

    foreach ($_POST as $key => $value) {
        $$key = mysqli_real_escape_string($connex, $value);
    }

    $sql = "INSERT INTO article (titre, article, date, utilisateur_id) VALUES ('$titre', '$article', '$date', '$utilisateur_id')";


    if (mysqli_query($connex, $sql)) {

        header('location:index.php?controller=forum&function=index');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connex);
    }
}
