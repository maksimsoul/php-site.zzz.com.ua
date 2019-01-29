<?php
require_once "components/database.php";
require_once "models/articles_all.php";

$category = 'ООП';
$articles = categoryArticles($link, $category);

include "views/oop.php";