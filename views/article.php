<?php
    include 'header.php';
?>

<div class="container">
        <div class="articles rounded">
            <div class="row article">
                <h2 class="col-lg-8"><?=$article['title']?></h2>
                <h3 class="col-lg-4">Рубрика: <?=$article['category']?></h3>
            </div>
            <p class="font-italic date">Опубликовано: <?=$article['date']?></p>
            <hr>
            <p class="art_text"><?=$article['text']?></p>
        </div>
</div>

<?php
    include 'footer.php';
?>