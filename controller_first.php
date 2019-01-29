<?php
    require_once "components/database.php";
    require_once "models/articles_all.php";

    $articles = getAllArticles($link);

    include "views/articles.php";