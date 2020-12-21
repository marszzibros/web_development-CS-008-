<?php
include 'top.php';

$joesPondWinners=array(
    array(2020, 'Angela Buttura & Nancy Durand', 'Essex Junction, VT & Hardwick, VT','04/15/20','6:07 a.m.'),
    array(2019, 'Robynn L. Albert Durand', 'Essex Jct, VT','04/25/19','5:39 a.m.'),
    array(2018, 'Michael S. Cody', 'Barre, VT','05/04/18','11:27 a.m.'),
    array(2017, 'Emily Wiggett', 'North Danville, VT','04/23/17','4:32 p.m.'),
    array(2016, 'Pamela Swift', 'Barre, VT','04/12/16','05:03 p.m.')
);

?>
<main>
    <article>
        <h2>Joes Pond Winners</h2>
        <section>
            <h3>Last <?php print count($joesPondWinners);?> Winners.</h3>
            <ol>
                <?php
                foreach($joesPondWinners as $joesPondWinners)
                {
                    print '<li>';
                    for($i = 0; $i < 5; $i++) print $joesPondWinners[$i] .', ';
                    print '</li>';
                    print PHP_EOL;
                }
                ?>
            </ol>
        </section>
    </article>
</main>
<?php
include 'footer.php';
?> 
</body>
</html>
