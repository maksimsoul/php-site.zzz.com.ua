<?php
require_once "components/database.php";
require_once "models/articles_all.php";

$articles = all_articles_cikli($link);

include "views/cikli.php";