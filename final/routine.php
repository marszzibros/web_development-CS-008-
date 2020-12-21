<?php
include 'main_structure/top.php';

$routine = array(
    array('Squats','https://www.youtube.com/embed/aclHkVaku9U','Leg Press','https://www.youtube.com/embed/IZxyjW7MPJQ','Leg Extension','https://www.youtube.com/embed/YyvSfVjQeL0'),
    array('DeadLift','https://www.youtube.com/embed/1ZXobu7JvvE','Dumbbell Row','https://www.youtube.com/embed/HE5IBnWYEq4','Pull-up','https://www.youtube.com/embed/HRV5YKKaeVw'),
    array('Bench Press','https://www.youtube.com/embed/SCVCLChPQFY','Push-up','https://www.youtube.com/embed/0pkjOk0EiAk','Incline Bench Press','https://www.youtube.com/embed/DbFgADa2PL8'),
);

if($_GET['display_routine'] == 'Legs')$index = 0;
elseif($_GET['display_routine'] == 'Back')$index = 1;
elseif($_GET['display_routine'] == 'Chest')$index = 2;
?>

<main>
    <nav>
        <a href = "detail.php" class="backButton">Back To Routine Page</a>
    </nav>
    <article>
    <?php
        print "<h2>What Kinds of Exercise Can I do for ".$_GET['display_routine']."?</h2>";
        for($i = 0; $i < 6; $i+=2)
        {
            print '<section class="routine_display_grid">';
            print "<h3>How to Do ".$routine[$index][$i]."?</h3>";
            print "<p class='video_container'><iframe src='".$routine[$index][$i + 1]."?autoplay=0&mute=1&rel=0'></iframe>";
            print '<p class="source"><cite><a href="'.$routine[$index][$i + 1].'" target = "_blank">[Source]Youtube</a></cite></p>';
            print '<section class = "routine_steps">';
            print '<h3>Written steps for '.$routine[$index][$i].'</h3>';
            print '<ol>';

            $sql = 'SELECT fldStepsExplain FROM tblExerciseSteps WHERE fldExercise = "' . $routine[$index][$i] . '" ORDER BY fldOrder ASC';
            $statement = $pdo->prepare($sql);
            $statement->execute();
            $records = $statement->fetchAll();
            $count = 0;
            foreach ($records as $step)
            {
                $count++;
                if (count($records) != $count)print '<li>'.$step['fldStepsExplain'].'</li>';
                elseif (count($records) == $count)print '<li><a href = "'.$step['fldStepsExplain'].'" target = "_blank">[Source]How to do '.$routine[$index][$i].'</a></li>';
            }
            print '</ol></section>';
            print '</section>';
        }
        ?>
    </article>
</main>
<?php
include 'main_structure/footer.php';
?>
</body>
</html>
