<?php
require_once "components/database.php";
require_once "models/articles_all.php";

$category = 'Циклы';
$articles = categoryArticles($link, $category);

include "views/cikli.php";