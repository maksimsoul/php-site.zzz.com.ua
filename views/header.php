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
    <title>PHP</title>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</head>

<body>
<header>
    <div class="container">

        <div class="row">

            <div class="col-lg-5 col-lg-offset-0">
                <a href="index.php"><img src="images/php.png" alt="PHP" id="imgphp"></a>
            </div>

            <div id="headphp" class="col-lg-7 align-self-center text-center">
                Статьи о PHP
            </div>

        </div>

    </div>
</header>

<div id="navphp">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark container">
        <a class="navbar-brand" href="index.php">Главная</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

                <li class="nav-item active">
                    <a class="nav-link" href="controller_dannie.php">Данные</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="controller_funkcii.php">Функции</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="controller_cikli.php">Циклы</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="controller_oop.php">ООП</a>
                </li>
            </ul>
        </div>

    </nav>
</div>
