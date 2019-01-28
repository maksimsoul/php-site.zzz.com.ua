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

    <script src="js/jquery-3.3.1.min.js"></script>
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
                    <a class="nav-link" href="index.php">Главная<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contr_dannie.php">Данные</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contr_funkcii.php">Функции</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contr_cikli.php">Циклы</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contr_oop.php">ООП</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>

    </nav>
</div>
