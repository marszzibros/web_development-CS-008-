<nav id="menuLine">
    <?php
//index.php
    print '<a class="';
    if($path_parts['filename'] == "index") print 'activePage';
    print '" href="index.php">';
    print 'HOME</a>';
    print PHP_EOL;
    
//detail.php
    print '<a class="';
    if($path_parts['filename'] == "detail" || $path_parts['filename'] == "routine") print 'activePage';
    print '" href="detail.php">';
    print 'ROUTINE</a>';
    print PHP_EOL;
    
//form.php
    print '<a class="';
    if($path_parts['filename'] == "form" || $path_parts['filename'] == "createTable" || $path_parts['filename'] == "recordExercise") print 'activePage';
    print '" href="form.php">';
    print 'RECORDER</a>';
    print PHP_EOL;
    
//extra.php
    print '<a class="';
    if($path_parts['filename'] == "runningWeather") print 'activePage';
    print '" href="runningWeather.php">';
    print 'RUNNING WEATHER</a>';
    print PHP_EOL;

    ?>
    

</nav>