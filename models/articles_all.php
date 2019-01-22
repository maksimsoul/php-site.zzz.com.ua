<?php
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

    function get_articles($link, $id_article) {
        $query = sprintf("SELECT * FROM articles WHERE id=%d", (int)$id_article);
        $result = mysqli_query($link, $query);

        if (!$result)
            die(mysqli_error($link));

        $article = mysqli_fetch_assoc($result);

        return $article;
    }

    $article = get_articles($link, $_GET['id']);