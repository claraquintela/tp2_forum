<?php

function index()
{
    render("/base/creer_article.php");
}

function newArticle()
{
    require_once("db/connex.php");

    foreach ($_POST as $key => $value) {
        $$key = mysqli_real_escape_string($connex, $value);
    }

    $sql = "INSERT INTO article (titre, article, date) VALUES ('$titre', '$article', '$date'       )";


    if (mysqli_query($connex, $sql)) {

        header('location:/base/forum.php');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connex);
    }
}
