<?php

function index()
{
    render("/utilisateur/login.php");
}

function create()
{
    render("/utilisateur/creer_utilisateur.php");
}

function newUtilisateur()
{
    require_once("models/utilisateur.php");
    return nouveauUtilisateur();
}


function authentication()
{
    require_once("models/utilisateur.php");
    $login = auth();
    // return $login;
    // if($login) {
    //     render('index.php?controller=forum&function=index');
    // } elseif($login == 'message1') {

    // }
}

function logout()
{
    require('lib/checkSession.php');
    session_start();
    session_destroy();
    session_start();
    render("/utilisateur/login.php");
}
