<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>PHP и MySQL</title>
</head>

<body>

<header>
    <div id="headphp" col-lg-6 col-lg-offset-0>
        Статьи о PHP и MySQL
    </div>

    <div class="head" col-lg-6>
        <img src="images/php-00441489844a0103eae71ba2fe15244c.png" alt="PHP + MySQL" class="imgphp">
    </div>
</header>

<nav>
    <ul>
        <li><a href="">Главная</a></li>
        <li><a href="">Переменные</a></li>
        <li><a href="">Функции</a></li>
        <li><a href="">Циклы</a></li>
        <li><a href="">ООП</a></li>
    </ul>
</nav>
<div class="container">
    <?php foreach ($articles as $article): ?>
        <div>
            <h2><a href="controllers/article.php?id=<?=$article['id']?>">Тема статьи: <?=$article['title']?></a></h2>
            <h3>Рубрика: <?=$article['category']?></h3>
            <em>Опубликовано: <?=$article['date']?></em>
            <p><?=$article['text']?></p>
        </div>
    <?php endforeach ?>
</div>
<footer>
    <p>
        PHP - programming language
    </p>
</footer>
</body>
</html>
