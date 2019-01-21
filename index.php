<?php
    require_once 'database.php';

    function all_articles($link) {
        $query = "SELECT * FROM articles ORDER BY id DESC";
        $result = mysqli_query($link, $query);

        $n = mysqli_num_rows($result);
        $articles = array();

        for($i = 0; $i < $n; $i++) {
            $row = mysqli_fetch_assoc($result);
            $articles[] = $row;
        }

        return $articles;
    }

    $articles = all_articles($link);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Создание блога на PHP</title>
</head>
<body>
    <h1>Уроки по созданию блога на PHP</h1>

    <?php foreach ($articles as $article): ?>
        <div>
            <h2>Тема статьи: <?=$article['title']?></h2>
            <h3>Рубрика: <?=$article['category']?></h3>
            <em>Опубликовано: <?=$article['date']?></em>
            <p><?=$article['text']?></p>
        </div>
    <?php endforeach ?>
</body>
</html>
