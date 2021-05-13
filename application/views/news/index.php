<!--
Name: Michael Perron
Final Project
Purpose: Display news archive 
-->

<div class="egg-text">
    <h1 class="mainColorTitle">News Archive</h1>
    <div class="container">
        <div class="row">
            {stories}
                <div class= "col-sm-4">
                    <div class="newsArchTitle">{title}<br>
                        <img src="/assets/images/{slug}.jpg" class="img-fluid">
                        <p><a href="/news/{slug}">View article</a></p>
                    </div>
                </div>
            {/stories}
        </div>
    </div>
</div>

<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>