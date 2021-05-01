<!-- 
This is an html template. Notice the file is named with .php so we can use
the PHP print 'tag' but other than that, everything in here will be HTML
-->
<div>
<!-- notice that {stories}{/stories} creates a 'loop' to loop
     through all the the stories from the $stories array -->
{stories}
    <hr>
    id: {id}<br>
    <br>
    title: {title}<br>
    <br>
    text: {text}<br>
{/stories}
<hr>
<br>
<div>

