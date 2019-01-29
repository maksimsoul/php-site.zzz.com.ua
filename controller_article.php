<?php
    require_once "components/database.php";
    require_once "models/articles_all.php";

    $article = getArticle($link, $_GET['id']);

    include "views/article.php";