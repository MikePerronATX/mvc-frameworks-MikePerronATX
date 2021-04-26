<?php foreach ($news as $news_item): ?>
        <div class="newsTitleColor">
                <?= $news_item['title']; ?>
        </div>
        <div class="centered">
                <?= $news_item['descr']; ?>
                <p><a href="<?= '/news/'.$news_item['slug'] ?>">View article</a></p>
        </div>
<?php endforeach; ?>

<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>