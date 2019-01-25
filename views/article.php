<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>PHP и MySQL</title>
</head>

<body>

    <header>
        <h1>Статьи о PHP и MySQL</h1>
    </header>

    <div class="container">

            <div>
                <h2>Тема статьи: <?=$article['title']?></h2>
                <h3>Рубрика: <?=$article['category']?></h3>
                <em>Опубликовано: <?=$article['date']?></em>
                <p><?=$article['text']?></p>
            </div>

    </div>

    <footer>
        <p>
            PHP - programming language
        </p>
    </footer>
</body>
</html>
