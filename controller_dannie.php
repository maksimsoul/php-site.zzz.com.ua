<?php
require_once "components/database.php";
require_once "models/articles_all.php";

$category = 'Данные';
$articles = categoryArticles($link, $category);

include "views/dannie.php";