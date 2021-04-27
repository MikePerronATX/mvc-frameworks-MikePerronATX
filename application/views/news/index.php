<h2><?= $title; ?></h2>

<?php foreach ($news as $news_item): ?>

        <h3><?= $news_item['title']; ?></h3>
        <div class="main">
                <?= $news_item['text']; ?>
        </div>
        <p><a href="<?= '/news/'.$news_item['slug'] ?>">View article</a></p>

<?php endforeach; ?>
<script src=/assets/js/jquery.min.js></script>
<script src=/assets/js/bootstrap.min.js></script>