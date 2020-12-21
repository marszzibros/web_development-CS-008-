<?php
include 'main_structure/top.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$dataValid = False;
$userID = '';
$IDvalid = False;
$finalValid = false;
$listvalid = true;
$dataCount = 0;

// left
$exerciseParts = 'Back';
$IDcheck ='';
$exercises = '';

//right
$radiobutton = 1;
$exerciseNameArray = array();
$exerciseID = array();
$exerciseReps = 1;
$weight = "0";
$checkOrder = 0;

$reason = array();

$count = 0;

$sql = 'SELECT fldPart FROM tblExerciseInfo GROUP BY fldPart';
$statement = $pdo->prepare($sql);
$statement -> execute();
$records = $statement -> fetchAll();
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $dataValid = true;
    $listvalid = true;
    $checkOrder = getData("check");
    if($checkOrder == 1)$userID = getData("txtIDSearch");
    elseif($checkOrder == 2)$userID = getData("SaveID");
    $exerciseParts = getData("lstExerciseParts");
    $weight = getData("txtWeight");

    $sql = 'SELECT pmkPersonalID FROM tblPersonalInfo WHERE pmkPersonalID = ?;';

    $statement = $pdo->prepare($sql);
    $params = array($userID);
    $statement->execute($params);
    $IDcheck = $statement -> fetchAll();


    if ($userID == "")
    {
        $reason[$count] = '<p class = "message"> Please enter your userID. </p>';
        $count++;
        $dataValid = false;
    }
    if (count($IDcheck) == 0)
    {
        $reason[$count] = '<p class ="message">'.$userID.' is not on the database!</p>';
        $count++;
        $dataValid = false;
    }
    elseif (count($IDcheck) == 1)$IDvalid = True;

    foreach($records as $record)
    {
        if($record['fldPart'] == $exerciseParts) 
        {
            $listvalid = True;
            break;
        }
    }
    if($exerciseParts =='')
    {
        $reason[$count] = '<p class ="message">Please choose at least one of the options on the list</p>';
        $count++;
        $dataValid = false;
    }
    elseif($listvalid == False)
    {
        $reason[$count] = '<p class ="message">'.$exerciseParts.'is not on the given list!</p>';
        $count++;
        $dataValid = false;
    }
    if($listvalid == true AND getData("check") == "2")
    {
        $finalValid = true;
        $i = 0;
        $sql = 'SELECT fldExercise, fldExercisID FROM tblExerciseInfo WHERE fldPart = ?';
        $statement = $pdo->prepare($sql);
        $params = array($exerciseParts);
        $statement->execute($params);
        $exercises = $statement -> fetchAll();
        foreach ($exercises as $exercise)
        {
            if(getData("chk".$exercise['fldExercisID']) == '1')
            {
                $exerciseNameArray[$i] = $exercise['fldExercise'];
                $exerciseID[$i] = $exercise['fldExercisID'];
                $i ++;
            }
        }
        $radiobutton = getData("radSets");
        $exerciseReps = getData("radReps");
        if(count($exerciseNameArray) < 1)
        {
            $reason[$count] = '<p class = "message"> Please check at least one exercise </p>';
            $count++;
            $dataValid = false;
            $finalValid = false;
        }
        if($radiobutton == '')
        {
            $reason[$count] = '<p class = "message"> Please type your sets </p>';
            $count++;
            $dataValid = false;
            $finalValid = false;
        }
        elseif($radiobutton != 1 AND $radiobutton != 2 AND $radiobutton != 3 AND $radiobutton != 4 AND $radiobutton != 5)
        {
            $reason[$count] = '<p class = "message"> Your sets are not on a list! </p>';
            $count++;
            $dataValid = false;
            $finalValid = false;
        }
        if($exerciseReps == '')
        {
            $reason[$count] = '<p class = "message"> Please type your reps </p>';
            $count++;
            $dataValid = false;
            $finalValid = false;
        }
        elseif($exerciseReps < 1 OR $exerciseReps > 20)
        {
            $reason[$count] = '<p class = "message"> Your reps are wrong! please check!</p>';
            $count++;
            $dataValid = false;
            $finalValid = false;
        }

        if(!preg_match("/^[0-9]+(\.[0-9]+)?$/", $weight))
        {
            $reason[$count] = '<p class = "message"> You cannot enter the weight other than number (type 0 if none)</p>';
            $count++;
            $dataValid = false;
            $finalValid = false;
        }
        elseif($weight < 0 OR $weight > 500)
        {
            $reason[$count] = '<p class = "message"> Please Enter the valid weight </p>';
            $count++;
            $dataValid = false;
            $finalValid = false;
        }
    }
}

function getData($field) 
{
    if (!isset($_POST[$field])) $data ="";
    else{
        $data = trim($_POST[$field]);
        $data = htmlspecialchars($data);
    }
    return $data;
}
function verifyAlphaNum($testString) {
    // Check for letters, numbers and dash, period, space and single quote only.
    // added & ; and # as a single quote sanitized with html entities will have 
    // this in it bob's will be come bob&#039;s
    return (preg_match ("/^([[:alnum:]]|-|\.| |\'|&|;|#)+$/", $testString));
}
?>
<link href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.0/jquery-ui.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
<script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"></script>

<script>

$(function() {
    if (!Modernizr.inputtypes['date']) {
        $('input[type=date]').datepicker({ 
            dateFormat: 'yy-mm-dd'
        });
    }
});
</script>

<main>
    <nav>
        <a href = "form.php" class="backButton">Back To Register Page</a>
    </nav>
    <article id = "recording">
        <h2>Record your Exercise</h2>
        
        <section id = "IDandPart">
            <h3>Record</h3>
            <form action = "#" method = "POST" id = "frmRecord">
            <fieldset>
                <p>
                    <label for="txtIDSearch" class="require">User ID: </label>
                    <?php
                        print'<input type="text" name="txtIDSearch" id="txtIDSearch" value = "'.$userID.'" required>';
                    ?>
                </p>
                <p>
                    <label for="lstExerciseParts">Parts</label>
                    <select name="lstExerciseParts" id="lstExerciseParts">
                        <?php 
                            foreach ($records as $record){
                                if ($record['fldPart'] == $exerciseParts)print '<option value = "'.$record['fldPart'].'" selected>'.$record['fldPart'].'</option>';
                                else print '<option value = "'.$record['fldPart'].'">'.$record['fldPart'].'</option>';
                            }
                        ?>
                    </select>
                </p>
                <p>
                    <input type="hidden" name="check" value="1">
                    <input type="submit" name="btnRecord" value="next step">
                </p>
            </fieldset>
            </form>
        </section>
        <section id = "Routines">
            <?php 
            if($IDvalid == True){ 
                print '<h3>Select your Routines</h3>';
                print '<form action = "#" method = "POST" id = "frmDetailRecord">';
                print '<fieldset id = "ExerciseCheck">';
                print '<legend>Exercise</legend>';
                $sql = 'SELECT fldExercise, fldExercisID FROM tblExerciseInfo WHERE fldPart= ?;';
                
                $statement = $pdo->prepare($sql);
                $params = array($exerciseParts);
                $statement->execute($params);
                $exercises = $statement -> fetchAll();
                foreach ($exercises as $exercise)
                {
                    print '<p>';
                    print '<label for="chk'.$exercise['fldExercisID'].'" class="require">'.$exercise['fldExercise'].'</label>';
                    print '<input type="checkbox" name="chk'.$exercise['fldExercisID'].'" value = "1" ';
                    print 'id="chk'.$exercise['fldExercisID'].'"';
                    $checked = False;
                    for ($i = 0; $i < count($exerciseID); $i ++)
                    {
                        if($exerciseID[$i] == $exercise['fldExercisID'])
                        {
                            print ' checked>';
                            $checked = True;
                            break;
                        }
                    }
                    if ($checked == False) print '>';
                    print '</p>';
                }
                print '<p>';
                print '<label for="txtWeight" class="require">Weight(LBS): </label>';
                if ($weight == 0)print '<input type="text" name="txtWeight" id="txtWeight" value="0" required>';
                else print '<input type="text" name="txtWeight" id="txtWeight" value="'.$weight.'" required>';
                print '</p>';
                print '<p>Enter 0 if you did not use weight</p>';
                print '</fieldset>';
                print '<fieldset id = "ExerciseReps">';
                print '<legend>sets</legend>';
                for($i = 1; $i <= 5; $i++)
                {
                    print '<p>';
                    print '<input type="radio" name="radSets" id = "radSets" value = "'.$i.'"';
                    if ($radiobutton == $i) print 'checked>';
                    else print '>';
                    print '<label for="radSets" class="require">'.$i.'</label>';
                }
                print '</fieldset>';
                print '<fieldset id = "ExerciseSets">';
                print '<legend>Reps per set</legend>';
                print '<label for="radReps" class="require">1 to 20 is available: </label>';
                print '<input type="number" name="radReps" id = "radReps" min = 1 max = 20 step = 1 value = "'.$exerciseReps.'">';
                
                print '</fieldset>';
                print '<input type = "hidden" name = "SaveID" value ="'.$userID.'">';
                print '<input type = "hidden" name = "lstExerciseParts" value ="'.$exerciseParts.'">';
                print '<input type="hidden" name="check" value="2">';
                print '<input type="submit" name="btnRecordtoDB" value="Record"></form>';
            }
            else{
                print '<h3>Type your userID to record</h3>';
            }
            ?>
        </section>
        <aside id = "DBresults">
        <?php
            if(($dataValid == false AND $checkOrder == '1') OR ($finalValid == false AND $checkOrder == '2'))
            {
                print "<h3>Failed to record your data!</h3>";
                print '<ul>';
                for ($i = 0; $i < count($reason);$i++)print '<li>'.$reason[$i].'</li>';
                print '</ul>';
            }
            elseif($finalValid == true AND $dataValid == true AND $checkOrder == '2')
            {
                $sql = 'INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldExerciseRepsPerSet, fldSetRepeat, fldDate, fldPart, fldWeight)
                VALUES (?,?,?,?,?,?,?)';
                $statement = $pdo->prepare($sql);
                $dataCount = 0;
                for ($i = 0; $i < count($exerciseNameArray); $i++)
                {
                    $params = array($userID, $exerciseNameArray[$i], $radiobutton, $exerciseReps, date("Y-m-d"),$exerciseParts,$weight);
                    if ($statement->execute($params)) $dataCount ++;
                }
                if($dataCount == count($exerciseNameArray))print '<p class ="message"> Record was successfully saved.</p>';
                else print '<p class ="message"> Record was NOT successfully saved.</p>';
            }

        ?>
        </aside>
    </article>
</main>
<?php
include 'main_structure/footer.php';
?>
</body>
</html>