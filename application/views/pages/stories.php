<!-- 
This is an html template. Notice the file is named with .php so we can use
the PHP print 'tag' but other than that, everything in here will be HTML
-->

        <div>
            <h3>Stories Page</h3>
            <a href="/">Go to home page</a><br>
            <br>
            <!-- print out the story with the PHP print 'tag' -->
            <?= $stories ?><br>
            <br>
        </div>
