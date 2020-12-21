<?php
include 'main_structure/top.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$dataValid = False;
$userID = '';
$startDate = '';
$endDate = '';
$IDcheck ='';
$parts = array();

$reason = array();

$count  = 0;
$sql = 'SELECT fldPart FROM tblExerciseInfo GROUP BY fldPart';
$statement = $pdo->prepare($sql);
$statement -> execute();
$records = $statement -> fetchAll();
$radiobutton = $records[0]['fldPart'];

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
    <article>
        <h2>Your Exercise Record is Here!</h2>
        <section id = "type_id_date">
            <?php
            if($_SERVER["REQUEST_METHOD"] == "POST")
            {
                $dataValid = true;

                $userID = getData("txtIDsubmit");
                $sql = 'SELECT pmkPersonalID FROM tblPersonalInfo WHERE pmkPersonalID = ?;';
                
                $statement = $pdo->prepare($sql);
                $params = array($userID);
                $statement->execute($params);
                $IDcheck = $statement -> fetchAll();

                $startDate = getData("datStart");
                $endDate = getData("datEnd");
                $radiobutton = getData("radParts");

                if ($userID == "")
                {
                    $reason[$count] = '<p class = "message"> Please enter your userID. </p>';
                    $count++;
                    $dataValid = false;
                }
                elseif (!verifyAlphaNum($userID))
                {
                    $reason[$count] = '<p class = "message">Your User id appears to be incorrect.</p>';
                    $count++;    
                    $dataValid = false;
                }
                elseif (count($IDcheck) == 0)
                {
                    $reason[$count] = '<p class ="message">'.$userID.' is not on the database!</p>';
                    $count++;
                    $dataValid = false;
                }

                if ($startDate == "")
                {
                    $reason[$count] = '<p class = "message">Please Type Your starting day</p>';
                    $count++;    
                    $dataValid = false;
                }
                elseif ($startDate > date('Y-m-d') OR $startDate < date('1900-01-01'))
                {
                    $reason[$count] = '<p class = "message">Your starting day appears to be invalid</p>';
                    $count++;    
                    $dataValid = false;
                }
                //https://stackoverflow.com/questions/13194322/php-regex-to-check-date-is-in-yyyy-mm-dd-format
                elseif(!preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/", $startDate))
                {
                    $reason[$count] = '<p class = "message">Your starting day appears to be invalid</p>';
                    $count++;    
                    $dataValid = false;
                }
                if ($endDate == "")
                {
                    $reason[$count] = '<p class = "message">Please Type Your ending day</p>';
                    $count++;    
                    $dataValid = false;
                }
                elseif ($endDate > date('Y-m-d') OR $endDate < date('1900-01-01'))
                {
                    $reason[$count] = '<p class = "message">Your ending day appears to be invalid</p>';
                    $count++;    
                    $dataValid = false;
                }
                //https://stackoverflow.com/questions/13194322/php-regex-to-check-date-is-in-yyyy-mm-dd-format
                elseif(!preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/", $endDate))
                {
                    $reason[$count] = '<p class = "message">Your ending day appears to be invalid</p>';
                    $count++;    
                    $dataValid = false;
                }
                if(date($endDate) < date($startDate))
                {
                    $reason[$count] = '<p class = "message">Your starting day should not be bigger than the ending day</p>';
                    $count++;    
                    $dataValid = false;
                }
                if($radiobutton == '')
                {
                    $reason[$count] = '<p class = "message"> Please type your parts that you want to see </p>';
                    $count++;
                    $dataValid = false;
                    $finalValid = false;
                }
                $i = 0;
                $countValid = 0;
                foreach($records as $record)
                {
                    $parts[$i] = $record['fldPart'];
                    $i ++;
                }
                for($i = 0; $i < count($parts); $i++)
                {
                    if($radiobutton == $parts[$i])$countValid ++;
                }
                if($countValid == 0)
                {
                    $reason[$count] = '<p class = "message"> Your inputs are not on a list! </p>';
                    $count++;
                    $dataValid = false;
                    $finalValid = false;
                }
            }
            ?>
            <h3>Type Your ID and Periods</h3>
            <form action = "#" method = "POST" id = "frmTable">
                <fieldset id = "IDsubmit">
                    <p>
                        <label for="txtIDsubmit" class="require">User ID: </label>
                        <input type="text" name="txtIDsubmit" id="txtIDsubmit" value = "<?php print $userID;?>" required>
                    </p>
                </fieldset>
                <fieldset id = "radioParts">         
                    <?php 
                    foreach($records as $record)
                    {
                        print '<p style="display: block; margin: auto;">';
                        print '<input type="radio" name="radParts" id = "radParts'.$record['fldPart'].'" value = "'.$record['fldPart'].'"';
                        if ($radiobutton == $record['fldPart']) print ' checked>';
                        else print '>';
                        print '<label for="radParts'.$record['fldPart'].'" class="require">'.$record['fldPart'].'</label></p>';
                    }
                    ?>
                </fieldset>
                <fieldset id = "SortMethods">

                    <p id="startDate">
                        <label for="datStart" class="require">Starting date:</label>
                        <input type="date" name="datStart" id="datStart" min = "1900-01-01" max = "<?php print date('Y-m-d');?>" value = "<?php print $startDate;?>" required>
                    </p>
                    <p id="endDate">
                        <label for="datEnd" class="require">Ending date:</label>
                        <input type="date" name="datEnd" id="datEnd" min = "1900-01-01" max = "<?php print date('Y-m-d');?>" value = "<?php print $endDate;?>" required>
                    </p>       


                </fieldset>
                <fieldset id="submitIDandPeriods">
                    <input type="submit" name="btnTable" value="submit">
                </fieldset>
            </form>
        </section>
        <?php
        if($dataValid)
        {
            $sql = 'SELECT fldExerciseName, fldExerciseRepsPerSet, fldSetRepeat,fldWeight, fldDate, fldPart
            FROM tblPersonalExercise
            WHERE fldPersonalID = ? AND fldDate >= ? AND fldDate <= ? AND fldPart = ? ORDER BY fldDate DESC';
            $statement = $pdo->prepare($sql);
            $params = array($userID,$startDate,$endDate,$radiobutton);
            $statement->execute($params);
    
            $records = $statement->fetchAll();

            if(count($records) >= 1)
            {
                print '<section id="tableGenerator">';
                print '<h3>Records of '.$startDate.' ~ '.$endDate.'</h3>';
                print '<table id="exerciseRecords">';
                print '<tr><th id="date"> Date </th><th> Exercise </th><th> Part </th><th> Reps </th><th> Sets </th><th> Weights </th></tr>';
                foreach ($records as $record)
                {
                    print('<tr>');
                    print PHP_EOL;
                    print('<td>'.$record['fldDate'].'</td>');
                    print PHP_EOL;    
                    print('<td>'.$record['fldExerciseName'].'</td>');
                    print PHP_EOL;
                    print('<td>'.$record['fldPart'].'</td>');
                    print PHP_EOL;
                    print('<td>'.$record['fldExerciseRepsPerSet'].'</td>');
                    print PHP_EOL;
                    print('<td>'.$record['fldSetRepeat'].'</td>');
                    print PHP_EOL;
                    $weightRound = round($record['fldWeight'],2);
                    print('<td>'.$weightRound.' lbs</td>');

                    print PHP_EOL;
                    print('</tr>');
                    print PHP_EOL;
                }
                print '</table>';
                print '</section>';
            }
        }
        else
        {
            print '<aside>';
            print '<ul>';
            for ($i = 0; $i < count($reason);$i++)print '<li>'.$reason[$i].'</li>';
            print '</ul>';
            print '</aside>';
        }
        ?>
    </article>
</main>
<?php
include 'main_structure/footer.php';
?>
</body>
</html>