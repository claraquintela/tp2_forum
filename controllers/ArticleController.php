<?php

function index()
{
    render("/forum/creer_article.php");
}

function newArticle()
{
    require_once("models/article.php");
    $create = createArticle();
    render("/forum/forum.php");
}

// function editArticle(){

//     require_once("lib/checkSession.php");

//     if(!$_SESSION) {
//         echo "Vous devez faire votre login pour pouvoir modifier les articles écrits par vous même";
//     } elseif ($_SESSION==true & id== .article)
//     require_once("models/article.php");
//     $edit = edit();
// }
