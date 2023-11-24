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
