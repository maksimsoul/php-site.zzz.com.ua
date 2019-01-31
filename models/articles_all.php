<?php
    function getAllArticles($link)
    {
        $query = "SELECT * FROM articles ORDER BY id DESC LIMIT 5";
        $result = mysqli_query($link, $query);

        $n = mysqli_num_rows($result);
        $articles = array();

        for($i = 0; $i < $n; $i++) {
            $row = mysqli_fetch_assoc($result);
            $articles[] = $row;
        }

        return $articles;
    }

    function categoryArticles($link, $category)
    {
        $query = "SELECT * FROM articles WHERE category = '$category' ORDER BY id DESC";
        $result = mysqli_query($link, $query);

        $n = mysqli_num_rows($result);
        $articles = array();

        for($i = 0; $i < $n; $i++) {
            $row = mysqli_fetch_assoc($result);
            $articles[] = $row;
        }

        return $articles;
    }

    function getArticle($link, $id_article)
    {
        $query = sprintf("SELECT * FROM articles WHERE id=%d", (int)$id_article);
        $result = mysqli_query($link, $query);

        if (!$result)
            die(mysqli_error($link));

        $article = mysqli_fetch_assoc($result);

        return $article;
    }

    function newArticle($link, $title, $category, $date, $text)
    {
        $t = "INSERT INTO articles (title, category, date, text) VALUES ('%s', '%s', '%s', '%s')";

        $query = sprintf($t, mysqli_real_escape_string($link, $title),
            mysqli_real_escape_string($link, $category),
            mysqli_real_escape_string($link, $date),
            mysqli_real_escape_string($link, $text));

        mysqli_query($link, $query);

        return true;
    }