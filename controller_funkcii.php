<?php
require_once "components/database.php";
require_once "models/articles_all.php";

$category = 'Функции';
$articles = categoryArticles($link, $category);

include "views/funkcii.php";