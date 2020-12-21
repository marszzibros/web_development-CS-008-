<?php
include 'main_structure/top.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$dataValid = false;
$getInfo = false;

$userID = "";

$email = "";
$firstName = "";
$lastName = "";

$birthday = "";

$reason = array();
$count = 0;

$IDcheck='';
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $dataValid = true;
    $getInfo = true;
    $userID = getData("txtID");

    // Sanitize email
    $email = getData("txtEmail");
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);

    // Sanitize First name
    $firstName = getData("txtFirstName");

    // Sanitize Last name
    $lastName = getData("txtLastName");
    
    // Sanitize Birthday
    $birthday = getData("datBirthday");

    // For checking if there is same ID in the table
    $sql = 'SELECT pmkPersonalID FROM tblPersonalInfo WHERE pmkPersonalID = ?;';
    $statement = $pdo->prepare($sql);
    $params = array($userID);
    $statement->execute($params);
    $IDcheck = $statement -> fetchAll();
    foreach ($records as $record) $IDcheck = $record['pmkPersonalID'];

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
    elseif (strlen($userID) > 10 AND strlen($userID) < 3)
    {
        $reason[$count] = '<p class ="message">The ID should be 4-9 lengths! Please choose it again!</p>';
        $count++;
        $dataValid = false;
    }
    elseif ($IDcheck == $userID)
    {
        $reason[$count] = '<p class ="message">'.$userID.' is already used by others!</p>';
        $count++;
        $dataValid = false;
    }
    // Validate email
    if ($email == "")
    {
        $reason[$count] = '<p class = "message"> Please enter your email address. </p>';
        $count++;
        $dataValid = false;
    }
    elseif (!filter_var($email, FILTER_SANITIZE_EMAIL))
    {   
        $reason[$count] = '<p class = "message">Your email address appears to be incorrect.</p>';
        $count++;
        $dataValid = false;
    }
    // Validate first name
    if ($firstName == "")
    {
        $reason[$count] = '<p class = "message">Please enter your first name</p>';
        $count++;                
        $dataValid = false;
    }
    elseif (!verifyAlphaNum($firstName))
    {
        $reason[$count] = '<p class = "message">Your first name appears to be incorrect.</p>';
        $count++;    
        $dataValid = false;
    }
    // Validate lastname
    if ($lastName == "")
    {
        $reason[$count] = '<p class = "message">Please enter your last name</p>';
        $count++;    
        $dataValid = false;
    }
    elseif (!verifyAlphaNum($lastName))
    {
        $reason[$count] = '<p class = "message">Your last name appears to be incorrect.</p>';
        $count++;    
        $dataValid = false;
    }
    // Validate Birthday
    
    if ($birthday == "")
    {
        $reason[$count] = '<p class = "message">Please Type Your Birthday</p>';
        $count++;    
        $dataValid = false;
    }
    elseif ($birthday > date('Y-m-d') OR $birthday < date('1900-01-01'))
    {
        $reason[$count] = '<p class = "message">Your Birthday appears to be invalid</p>';
        $count++;    
        $dataValid = false;
    }
    //https://stackoverflow.com/questions/13194322/php-regex-to-check-date-is-in-yyyy-mm-dd-format
    elseif(!preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/", $birthday))
    {
        $reason[$count] = '<p class = "message">Your Birthday appears to be invalid</p>';
        $count++;    
        $dataValid = false;
    }
}
function getData($field) 
{
    if (!isset($_POST[$field])) $data = "";
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
    <h2>Register and Record Your Exercise!</h2>
    <section id = "registration">
        <h3>Register form</h3>
        <form action = "#" method = "POST" id = "frmRegister">
            <fieldset id = "basic_info">
                <legend> Basic Information</legend>
                <p>
                    <label for="txtID" class="require">user ID </label>
                    <input type="text" name="txtID" id="txtID" value = "<?php print $userID;?>" placeholder ="4-9 lengths" required>
                </p>
                <p class = "message">Do not forget your ID!</p>
                <p>
                    <label for="txtFirstName" class="require">First Name </label>
                    <input type="text" name="txtFirstName" id="txtFirstName" placeholder="first name" value = "<?php print $firstName;?>" required>
                </p>
                <p>
                    <label for="txtLastName" class="require">Last Name </label>
                    <input type="text" name="txtLastName" id="txtLastName" placeholder="last name" value = "<?php print $lastName;?>" required>
                </p>

            </fieldset>
            <fieldset id = "additional">
                <legend> Detail Info</legend>
                <p>
                    <label for="txtEmail" class="require">Email</label>
                    <input type="email" name="txtEmail" id="txtEmail" placeholder="name@domain.com" value = "<?php print $email;?>" required>
                </p>

                <p>
                    <label for="datBirthday" class="require">Birthday</label>
                    <input type="date" name="datBirthday" id="datBirthday" min = "1900-01-01" max = "<?php print date('Y-m-d');?>" value = "<?php print $birthday;?>" required>
                </p>
            </fieldset>
            <fieldset id="submitbutton">

                <input type="submit" name="btnRegister" value="Register">
            </fieldset>
        </form>
    </section>
    <aside class = "confirm_message">
    <?php
    if ($getInfo)
    {
        if($dataValid)
        {
            try 
            {
                $sql = 'INSERT INTO tblPersonalInfo(pmkPersonalID,fldFirstName,fldLastName,fldEmail,fldBirthday)
                VALUES (?, ?, ?, ?, ?)';
                $statement = $pdo->prepare($sql);
                $params = array($userID, $firstName, $lastName, $email, $birthday);
                if ($statement->execute($params)){
                    print '<h2 class="form">Thank you, your information has been received. </h2>';
                    $from = "MY MUSCLE TEAM <jjung2@uvm.edu>";
                    $subject = "Thank you for your Registration!";
                    
                    $message = "
                    <figure>
                        <img src='https://jjung2.w3.uvm.edu/cs008/final/image/MY_MUSCLE.png' alt='MY MUSCLE logo' width='240'>
                    </figure>
                    <h1>Thank you for your registration!</h1>
                    <h2 style='display:inline;'>Hello, ".$firstName." ".$lastName.".</h2>
                    <br>
                    <p> We have successfully enrolled you in our recording system. This email is to inform you about it.</p>
                    <p> Below is your ID that you should remember. </p><br>
                    <p style='background-color:yellow;font-size:Large;display:inline;'>".$userID."</p>
                    <h4 style='font-family:\'Courier New\', Courier, monospace;'>These are the key features of our website!</h4>
                    <ul> 
                        <li style='text-decoration: underline;padding-bottom:0.5em;padding-top:1em;'>Effectively store your exercise routine</li>
                        <li style='text-decoration: underline;padding-bottom:0.5em;'>Well-organized routine table generator</li>
                        <li style='text-decoration: underline;padding-bottom:0.5em;'>Teach you how to do certain exercise (try out the 'routine' page in our website!)</li>
                        <li style='text-decoration: underline;padding-bottom:0.5em;'>Straightforward to use</li> 
                    </ul><br>
                    <p>hope you have a nice day!</p>
                    <p><a href='https://jjung2.w3.uvm.edu/cs008/final/index.php'>To go to Website...</a></p>";

                    $header = "MIME-Version: 1.0\r\n";
                    $header.= "Content-type: text/html; charset=utf-8\r\n";
                    $header.= "From: ".$from."\r\n";
                    $check = mail($email, $subject, $message, $header);
                    if($check)print '<p class="message" class = "indent"> Check your email! We have sent you the copy of your user name!</p>';
                    else print '<p class="message" class = "indent"> falied to send an email! </p>';
                }
                else print '<h2> Record was NOT successfully saved.</h2>';
            }
            catch(PDOException $e)
            {
                print '<p class="message">Couldn\'t insert the record, please contact someone </p>';
            } //end try
        }        
        else
        {
            print '<h2 class="form">Sorry, your information has not been received. </h2>';
            print '<h3 class="form"> We have found several mistakes in your form</h3>';
            print '<ul>';
            for ($i = 0; $i < count($reason);$i++)print '<li>'.$reason[$i].'</li>';
            print '</ul>';
            print '<h3 class="form">Please Try it again</h3>';
        }

    } // ends data is good
    ?>    
    </aside> 
    <section class = "chooseOption">
        <h3>Record and Show Your Data </h3>
        <nav id="readOrwrite">
            <a href = "createTable.php">Create Table</a>
            <a href = "recordExercise.php">Record Exercise</a>                
        </nav>
    </section>

</main>

<?php
include 'main_structure/footer.php';
?>
</body>
</html>
