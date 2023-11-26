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

function formedit($request)
{
    require_once("models/article.php");
    $result = ouvrirFormEditer($request);

    render('/forum/editer-article.php', $result);
}

function editer()
{
    require_once("models/article.php");
    $result = updateArticle();
    render("/forum/forum.php");
}

function deletearticle($request)
{
    require_once("models/article.php");
    $result = delete($request);
    render("/forum/forum.php");
}
