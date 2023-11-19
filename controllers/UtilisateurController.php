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
    error_log("NU1");
    foreach ($_POST as $key => $value) {
        $$key = mysqli_real_escape_string($connex, $value);
    }
    error_log("NU2" . $$key);

    $sql = "INSERT INTO utilisateur (nom, email, motdepasse, naissance) VALUES ('$nom', '$email', '$motdepasse', '$naissance')";

    error_log("NU3" . $sql);

    if (mysqli_query($connex, $sql)) {

        header('location: index.php');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connex);
    }
}
