<?php
    $link = mysqli_connect('localhost', 'root', '', 'maksimisgreat')
    or die(mysqli_error($link));

    mysqli_set_charset($link, "utf8") or die("Не установлена кодировка соединения");