<?php
require_once "components/database.php";
require_once "models/articles_all.php";

if (!empty($_POST)) {
    new_article($link, $_POST['title'], $_POST['category'], $_POST['date'], $_POST['text']);
}

include 'views/admin.php';