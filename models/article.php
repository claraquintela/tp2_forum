<?php

function createArticle()
{

    require_once("db/connex.php");

    foreach ($_POST as $key => $value) {
        $$key = mysqli_real_escape_string($connex, $value);

        error_log("key : " . $key . " value : " . $value);
    }


    $sql = "INSERT INTO article (titre, article, date, utilisateur_id) VALUES ('$titre', '$article', '$date', '$utilisateur_id')";


    if (mysqli_query($connex, $sql)) {

        header('location:index.php?controller=forum&function=index');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connex);
    }
}

function ouvrirFormEditer($request)
{
    require_once("lib/checkSession.php");
    require('db/connex.php');

    $id = mysqli_real_escape_string($connex, $request['id']);

    $sql  = "SELECT article.id, article.titre, article.date, article.article, article.utilisateur_id, utilisateur.nom FROM article INNER JOIN utilisateur on utilisateur.id = article.utilisateur_id where article.id = " . $id . "; ";
    $result =  mysqli_query($connex, $sql);

    $count = mysqli_num_rows($result);

    if ($count == 1) {
        $articleTrouve = mysqli_fetch_array($result, MYSQLI_ASSOC);
    } else {

        echo "Article pas trouvé";
    }

    if ($articleTrouve['utilisateur_id'] != $_SESSION['id']) {
        echo "Vous pouvez editer seulement vos propres articles";
    } else {
        return $articleTrouve;
    }
}


function updateArticle()
{
    require_once("db/connex.php");

    foreach ($_POST as $key => $value) {
        $$key = mysqli_real_escape_string($connex, $value);
    }

    $sql = "UPDATE article SET titre = '$titre', article = '$article' WHERE id = '$id' ";


    if (mysqli_query($connex, $sql)) {
        return true;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connex);
    }
}


function delete($request)
{
    require_once("db/connex.php");

    $id = mysqli_real_escape_string($connex, $request['id']);

    foreach ($_POST as $key => $value) {
        $$key = mysqli_real_escape_string($connex, $value);
    }


    $sql = "DELETE FROM article WHERE id = '$id' ";


    if (mysqli_query($connex, $sql)) {
        return true;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connex);
    }
}
