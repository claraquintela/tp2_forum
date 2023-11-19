<?php

function index()
{
    echo "Hello! is it me you're looking for?";
}

function create()
{
    render("/base/creer_utilisateur.php");
}

function newUtilisateur()
{
    require_once("db/connex.php");

    foreach ($_POST as $key => $value) {
        $$key = mysqli_real_escape_string($connex, $value);
    }

    $salt = ")><U%EF65";

    $saltPassword = $password . $salt;

    error_log("senha1:" . $saltPassword);

    $password = password_hash($saltPassword, PASSWORD_BCRYPT, ['cost' => 10]);

    error_log("senha2:" . $password);

    $sql = "INSERT INTO utilisateur (nom, email, motdepasse, naissance) VALUES ('$nom', '$email', '$password', '$naissance')";



    if (mysqli_query($connex, $sql)) {

        header('location: index.php');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connex);
    }
}
