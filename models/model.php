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