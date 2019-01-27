<?php
include 'header.php';
?>

<div class="container">
    <?php foreach ($articles as $article): ?>
        <div class="articles rounded">
            <div class="row article">
                <h2 class="col-lg-8"><a href="article.php?id=<?=$article['id']?>"><?=$article['title']?></a></h2>
                <h3 class="col-lg-4">Рубрика: <?=$article['category']?></h3>
            </div>
            <p class="font-italic date">Опубликовано: <?=$article['date']?></p>
            <hr>
            <p class="art_text"><?=$article['text']?></p>
        </div>
    <?php endforeach ?>
</div>

<?php
include 'footer.php';
?>