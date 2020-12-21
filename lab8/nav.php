<nav id="menuLine">
    <?php
//index.php
    print '<a class="';
    if($path_parts['filename'] == "index") print 'activePage';
    print '" href="index.php">';
    print 'Home</a>';
    print PHP_EOL;
    
//detail.php
    print '<a class="';
    if($path_parts['filename'] == "detail") print 'activePage';
    print '" href="detail.php">';
    print 'Solutions</a>';
    print PHP_EOL;
    
//form.php
    print '<a class="';
    if($path_parts['filename'] == "form") print 'activePage';
    print '" href="form.php">';
    print 'Donation form</a>';
    print PHP_EOL;
    
//extra.php
    print '<a class="';
    if($path_parts['filename'] == "extra") print 'activePage';
    print '" href="extra.php">';
    print 'About me</a>';
    print PHP_EOL;
    
//contest.php
    print '<a class="';
    if($path_parts['filename'] == "contest") print 'activePage';
    print '" href="contest.php">';
    print 'Contest</a>';
    print PHP_EOL;
    ?>
    

</nav>