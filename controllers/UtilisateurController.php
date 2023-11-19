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

    $saltMotdepasse = $motdepasse . $salt;
    error_log("chegando a variavel : " . $saltMotdepasse);

    // $motdepasse = password_hash($saltMotdepasse, PASSWORD_BCRYPT, ['cost' => 10]);

    $sql = "INSERT INTO utilisateur (nom, email, motdepasse, naissance) VALUES ('$nom', '$email', '$motdepasse', '$naissance')";

    if (mysqli_query($connex, $sql)) {

        header('location:index.php');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connex);
    }
}


function authentication()
{
    session_start();
    require('db/connex.php');

    foreach ($_POST as $key => $value) {
        $$key = mysqli_real_escape_string($connex, $value);
    }

    $sql = "SELECT * FROM utilisateur WHERE email = '$username'";

    $result = mysqli_query($connex, $sql);

    $count = mysqli_num_rows($result);
    if ($count == 1) {
        $info_user = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $info_user['motdepasse'];
        $salt = ")><U%EF65";
        $x = $motdepasse . $salt;

        error_log("salt" . $x);
        error_log("mot de passe" . $motdepasse);
        // $motdepasse = password_hash($x, PASSWORD_BCRYPT, ['cost' => 10]);


        error_log("password" . $motdepasse);
        error_log("info_user" . $info_user['motdepasse']);

        if ($motdepasse == $info_user['motdepasse']) {

            session_regenerate_id();
            $_SESSION['id'] = $info_user['id'];
            $_SESSION['nom'] = $info_user['nom'];
            $_SESSION['fingerPrint'] = md5($_SERVER['HTTP_USER_AGENT'] . $_SERVER['REMOTE_ADDR']);

            header('location:index.php?controller=forum&function=index');
        } else {
            header('location:login.php?msg=2');
        }
    } else {
        header('location:login.php?msg=1');
    }
}
