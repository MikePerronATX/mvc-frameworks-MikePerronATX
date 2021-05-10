<!--
Name: Michael Perron
Final Project
Purpose: 
-->
<div class="egg-text">
    <h1 class="mainColorTitle">News Archive</h1>
    {stories}<hr><br>
        <div class="newsArchTitle">{title}</div>
        <br>
        <img src="/assets/images/{slug}.jpg" class="img-fluid">
        <p><a href="/news/{slug}">View article</a></p>
    {/stories}
</div>
<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>