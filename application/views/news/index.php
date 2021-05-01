<!--
Name: Michael Perron
Coding 08
Purpose: To display news clips
-->
<h2><?= $title; ?></h2>

<div>
	<h3>Home Page</h3>
	<a href="/stories">Go to stories page</a><br>
	<br>
	<a href="story/1">Go to story 1 page</a><br>
	<br>
	<a href="story/2">Go to story 2 page</a><br>
	<br>
	<a href="story/3">Go to story 3 page</a><br>
	<br>
</div>




<?php foreach ($news as $news_item): ?>

        <h3><?= $news_item['title']; ?></h3>
        <div class="main">
                <?= $news_item['text']; ?>
        </div>
        <p><a href="<?= '/news/'.$news_item['slug'] ?>">View article</a></p>

<?php endforeach; ?>
<script src=/assets/js/jquery.min.js></script>
<script src=/assets/js/bootstrap.min.js></script>