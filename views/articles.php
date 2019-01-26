<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="shortcut icon" href="images/php_logo.jpg" type="image/jpg">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>PHP и MySQL</title>
</head>

<body>
<header>
    <div class="container">

        <div class="row">

            <div class="col-lg-5 col-lg-offset-0">
                <a href="index.php"><img src="images/php.png" alt="PHP + MySQL" id="imgphp"></a>
            </div>

            <div id="headphp" class="col-lg-7 align-self-center">
                Статьи о PHP и MySQL
            </div>

        </div>

    </div>
</header>

<div id="navphp">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark container">

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Главная<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Переменные</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Функции</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Циклы</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">ООП</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>

    </nav>
</div>

<div class="container">
    <?php foreach ($articles as $article): ?>
        <div class="articles rounded">
            <div class="row article">
                <h2 class="col-lg-8"><a href="controllers/article.php?id=<?=$article['id']?>"><?=$article['title']?></a></h2>
                <h3 class="col-lg-4">Рубрика: <?=$article['category']?></h3>
            </div>
            <p class="font-italic date">Опубликовано: <?=$article['date']?></p>
            <p class="art_text"><?=$article['text']?></p>
        </div>
    <?php endforeach ?>
</div>
<footer>
    <p>
        Copyright © 2019 The PHP-site Group
    </p>
</footer>
</body>
</html>
