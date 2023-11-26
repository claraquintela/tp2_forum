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
    return auth();
}

function logout()
{
    require('lib/checkSession.php');
    session_start();
    session_destroy();

    render("/utilisateur/login.php");
}
