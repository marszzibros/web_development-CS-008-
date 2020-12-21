<?php
include 'top.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$dataValid = false;
$email = "";
$firstName="";
$lastName="";

$checkWellbeing = "1";
$checkOceanTrash = "";
$checkRecycle = "";
$checkSupportOrgan = "";

$radiobutton = "phone";

$address = "";

$selectMoney ="$5";

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
<main>
    <article>
        <h2>Thanks for your interest!</h2>
        <section id="php">
            <h6> php print </h6>
            <?php
            print "<p>Post Array:</p><pre>";
            print_r($_POST);
            print "</pre>";
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $dataValid = true;
                // Sanitize email
                $email = getData("txtEmail");
                $email = filter_var($email, FILTER_SANITIZE_EMAIL);

                // Sanitize First name
                $firstName = getData("txtFirstName");
                // Sanitize Last name
                $lastName = getData("txtLastName");

                // Sanitize Checkbox                
                $radiobutton = getData("radNotification");
        
                // Sanitize Checkbox
                $checkWellbeing = getData("chkWellbeing");
                $checkOceanTrash = getData("chkOceanTrash");
                $checkRecycle = getData("chkRecycle");
                $checkSupportOrgan = getData("chkFinacialSupport");

                //Sanitize textarea
                $address = getData("txtAddress");

                //Sanitize list
                $selectMoney = getData("lstMoney");
                
                // Validate email
                if ($email == "")
                {
                    print '<p class = "wrong_request">Please enter your email address.</p>';
                    $dataValid = false;
                }
                elseif (!filter_var($email, FILTER_SANITIZE_EMAIL))
                {   
                    print '<p class = "wrong_request">Your email address appears to be incorrect.</p>';
                    $dataValid = false;
                }
                // Validate first name
                if ($firstName == "")
                {
                    print '<p class = "wrong_request">Please enter your first name</p>';
                    $dataValid = false;
                }
                elseif (!verifyAlphaNum($firstName))
                {
                    print '<p class = "wrong_request">Your first name appears to be incorrect.</p>';
                    $dataValid = false;
                }
                // Validate lastname
                if ($lastName == "")
                {
                    print '<p class = "wrong_request">Please enter your last name</p>';
                    $dataValid = false;
                }
                elseif (!verifyAlphaNum($lastName))
                {
                    print '<p class = "wrong_request">Your last name appears to be incorrect.</p>';
                    $dataValid = false;
                }
                // Validate radio
                if ($radiobutton != "email" AND $radiobutton !="phone" AND $radiobutton!="both" AND $radiobutton != "None")
                {
                    print '<p class = "wrong_request">Your notification preference appears to be incorrect.</p>';
                    $dataValid = false;
                }
                
                //Validate check box
                $count = 0;
                if ($checkOceanTrash == "1") $count++;
                if ($checkRecycle == "1") $count++;
                if ($checkSupportOrgan == "1") $count++;
                if ($checkWellbeing == "1") $count++;
                if ($count < 1)
                {
                    print '<p class = "wrong_request">You need to press at least one checkbox</p>';
                    $dataValid = false;
                }
                //Validate list
                if ($selectMoney != "$5" AND $selectMoney !="$10" AND $selectMoney!="$15" AND $selectMoney != "$20")
                {
                    print '<p class = "wrong_request">You choose the wrong amount of money</p>';
                    $dataValid = false;
                }
                // Validate address
                if ($address == "")
                {
                    print '<p class = "wrong_request">Please enter your address</p>';
                    $dataValid = false;
                }                
                elseif (!verifyAlphaNum($address))
                {
                    print '<p class = "wrong_request">Your address appears to be incorrect.</p>';
                    $dataValid = false;
                }    

                if ($dataValid)
                {
                    try 
                    {
                        $sql = 'INSERT INTO tblGetDonation(fldEmail,fldFirstName,fldLastName,fldAddress, fldContactPre,fldWellbing,fldOceanTrash,fldRecycle,fldOrganization,fldAmount)
                        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ? ,?)';
                        $statement = $pdo->prepare($sql);
                        $params = array($email, $firstName, $lastName, $address, $radiobutton, $checkWellbeing, $checkOceanTrash, $checkRecycle, $checkSupportOrgan, $selectMoney);
                        if ($statement->execute($params)) print '<p> Record was successfully saved.</p>';
                        else print '<p> Record was NOT successfully saved.</p>';
                    }
                    catch(PDOException $e)
                    {
                        print '<p>Couldn\'t insert the record, please contact someone </p>';
                    } //end try
                } // ends data is good
            }// ends form was submitted
            if($dataValid){
                print '<h2 class="form">Thank you, your information has been received. </h2>';
                $from = "CS 008 Team <jjung2@uvm.edu>";
                $subject = "CS 008 Research Project";
                $message1 = "<br><h1 class ='email' style='background-color: yellow; display:inline;'>Hello, ".$firstName." ".$lastName.".</h1><br>";
                $message2 = "<p class ='email' style='font-family: \"Times New Roman\"'><strong class ='email' style='font-color:red;'>You have donated ".$selectMoney."</strong><br> to our website in a purpose of ";
                if($checkOceanTrash == "1") $message2 = $message2. "solving ocean trash,";
                if($checkRecycle == "1") $message2 = $message2. "solving recycle, ";
                if($checkSupportOrgan== "1") $message2 = $message2. "helping our website, ";
                if($checkWellbeing== "1") $message2 = $message2. "wellbeing of animals, ";
                $message2 = $message2."</p>";
                $message = $message1. "<h2 class ='email' style='background-color:yellow;display:inline;'>Thank you for your interest!</h2>". $message2;
                $message = $message."<p class ='email'>Best regards,<br></p>";
                $message = $message."<p class ='email'>Jay Hwasung Jung(OL1)</p>";
                $header = "MIME-Version: 1.0\r\n";
                $header.= "Content-type: text/html; charset=utf-8\r\n";
                $header.= "From: ".$from."\r\n";
                $check = mail($email,$subject, $message, $header);
                if($check){
                    print '<p> Check your email! you will see the email below</p>';
                    print '<aside class="email">'.$message.'</aside>';
                }
                else print '<p> falied to send an email! </p>';
            }
        
            ?>
            <figure>
                <img class="rounded" alt="ocean_activist" src="image/ocean_activist-small.jpg" srcset="image/ocean_activist-medium.jpg 2x,image/ocean_activist-large.jpg 3x">
                <figcaption>we are here to help marine life <cite><a href="https://belize-travel-blog.chaacreek.com/2012/06/actress-and-ocean-activist-kate-walsh-visits-belize-to-raise-awareness-on-belizes-sea-heritage/" target="_blank">photo by OCEANA (Tony Rath)/</a></cite></figcaption>
            </figure>
        </section>
        <form action="#" method="POST" id="frmRegistar">
            <fieldset class="txtName">
                <legend>Name information</legend>
                <!-- textbox -> First name & Last Name-->
                <p>
                    <label for="txtFirstName" class="require">First Name</label>
                    <input type="text" name="txtFirstName" id="txtFirstName" placeholder="first name" value = "<?php print $firstName;?>" required>
                </p>
                <p>
                    <label for="txtLastName" class="require">Last Name</label>
                    <input type="text" name="txtLastName" id="txtLastName" placeholder="last name" value = "<?php print $lastName;?>" required>
                </p>
            </fieldset>
            <fieldset class="txtContact">
                <!-- 
                    textbox -> Email & phone number + Names (textbox total: 4)
                    radio -> notification options (radio total: 4)
                    textarea -> address (textarea total: 1)
                    checkbox -> money usage with the value of 1 (checkbox total : 4)
                    listbox -> amounts of money (list total : 4)
                    submit button -> (total: 1)
                -->
                <!--textbox id: txtEmail, txtPhone-->
                <legend>Personal information</legend>
                <p>
                    <label for="txtEmail" class="require">Email</label>
                    <input type="email" name="txtEmail" id="txtEmail" placeholder="name@domain.com" value = "<?php print $email;?>" required>
                </p>
                <p>
                    <textarea name="txtAddress" rows="4" cols="50" placeholder="type your address" required><?php print $address;?></textarea>
                </p>
            </fieldset>
            <fieldset class="radio">
                <legend>Contact preferences</legend>
                <!--radio id: radNotificationEmail, radNotificationPhone, radNotificationBoth, radNotificationNone-->
                <h4>How would you like to receive further notice about the events? (email or phone)</h4>
                <p>
                    <input type="radio" name="radNotification" value="email" id="radNotificationEmail" <?php if($radiobutton=="email") print 'checked';?> required>
                    <label for="radNotificationEmail">Email</label>
                </p>
                <p>
                    <input type="radio" name="radNotification" value="phone" id="radNotificationPhone" <?php if($radiobutton=="phone") print 'checked';?> required>
                    <label for="radNotificationPhone">Phone</label>
                </p>
                <p>
                    <input type="radio" name="radNotification" value="both" id="radNotificationBoth" <?php if($radiobutton=="both") print 'checked';?> required>
                    <label for="radNotificationBoth">Both Email and Phone</label>
                </p>
                <p>
                    <input type="radio" name="radNotification" value="None" id="radNotificationNone" <?php if($radiobutton=="None") print 'checked';?> required>
                    <label for="radNotificationNone">nothing</label>
                </p>
            </fieldset>
            <fieldset class="checkbox">
                <legend>checkbox</legend>
                <!--checkbox id: chkWellbeing, chkOceanTrash, chkRecycle, chkFinacialSupport-->
                <h4>What would you expect us to use your money?</h4>
                <p>
                    <label for="chkWellbeing">Well-bing of Animals</label>
                    <input type="checkbox" name="chkWellbeing" value = "1" <?php if($checkWellbeing == "1") print 'checked';?> id="chkWellbeing">
                </p>
                <p>
                    <label for="chkOceanTrash">Ocean Trash</label>
                    <input type="checkbox" name="chkOceanTrash" value = "1" <?php if($checkOceanTrash=="1") print 'checked';?> id="chkOceanTrash">&nbsp;
                </p>
                <p>    
                    <label for="chkRecycle">Recycle Facility</label>
                    <input type="checkbox" name="chkRecycle" value = "1" <?php if($checkRecycle=="1") print 'checked';?> id="chkRecycle">&nbsp;
                </p>
                <p>    
                    <label for="chkFinacialSupport">For Our Organization</label>
                    <input type="checkbox" name="chkFinacialSupport" value = "1" <?php if($checkSupportOrgan=="1") print 'checked';?> id="chkFinacialSupport">
                </p>
            </fieldset>
            <fieldset class="listmenu">
                <!--listbox options: $5,$10,$15,$20-->
                <legend>money donation</legend>
                <h4>How much money would you want to donate?</h4>
                <p>
                    <label for="lstMoney">Select Money</label>
                    <select name="lstMoney" id="lstMoney">
                        <option value="$5" <?php if($selectMoney == "$5") print 'selected';?>>$5</option>
                        <option value="$10" <?php if($selectMoney == "$10") print 'selected';?>>$10</option>
                        <option value="$15" <?php if($selectMoney == "$15") print 'selected';?>>$15</option>
                        <option value="$20"<?php if($selectMoney == "$20") print 'selected';?>>$20</option>
                    </select>
                </p>
            </fieldset>
            <fieldset class="submitbutton">
                <!--submit button: $5,$10,$15,$20-->
                <input type="submit" name="btnSubmit">
            </fieldset>
        </form>
    </article>
</main>

<?php
include 'footer.php';
?> 
</body>
</html>
