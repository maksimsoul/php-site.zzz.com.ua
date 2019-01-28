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


<div class="container">
    <form method="post" action="controller_admin.php">

        <h2 class="add_art text-center">Добавить статью</h2>

        <div class="form-group">
            <label for="exampleInputText1">Заголовок</label>
            <input type="text" class="form-control" id="exampleInputText1" placeholder="Название статьи" name="title">
        </div>

        <div class="form-group">
            <label for="exampleInputText1">Рубрика</label>
            <input type="text" class="form-control" id="exampleInputText1" name="category">
        </div>

        <div class="form-group">
            <label for="exampleInputText1">Дата</label>
            <input type="date" class="form-control" id="exampleInputText1" name="date">
        </div>

        <div class="form-group">
            <label for="exampleInputText1">Текст статьи</label>
            <input type="textarea" class="form-control" id="exampleInputText1" name="text">
        </div>

        <button type="submit" class="btn btn-primary save">Сохранить</button>

    </form>
</div>
<footer>
    <p class="text-center">
        Copyright © 2019 The PHP-site Group
    </p>
</footer>
</body>
</html>
