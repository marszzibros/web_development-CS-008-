<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Let's Recycle!-Donation</title>
        <meta name="author" content="Jay Hwasung Jung">
        <meta name="description" content="breifly introducing how we, human, can make a better world by recycling.">
        <link rel="stylesheet" href="css/custom.css?version=<?php print time(); ?>" type="text/css">
    </head>

    <body>
        <!-- introduction with two turtles pics.-->
        <!-- Q: I wanted to be organized, but if I do not use table, I could not make it organized... is CSS the only way to design/organize? -->
        <header>
            <h1>Let's save the earth!</h1>
        </header>
        <nav>
            <a href="index.php">Home&nbsp;</a>
            <a href="detail.php">Solutions&nbsp;</a>
            <a href="form.php">Donation form&nbsp;</a>
        </nav>
        <main>
            <article>
                <h2>Thanks for your interest!</h2>
                <section>

                    <?php
                        print '<p>Post Array:</p><pre>';
                        print_r($_POST);
                        print '</pre>';
                    ?>
                </section>
                <form action="#" method="POST" id="frmRegistar">
                    <fieldset>
                        <legend>Name information</legend>
                        <!-- textbox -> First name & Last Name-->
                        <p>
                            <label for="txtFirstName">First Name</label>
                            <input type="text" name="txtFirstName" id="txtFirstName" placeholder="first name" required>
                        </p>
                        <p>
                            <label for="txtLastName">Last Name</label>
                            <input type="text" name="txtLastName" id="txtLastName" placeholder="last name" required>
                        </p>
                    </fieldset>
                    <fieldset>
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
                            <label for="txtEmail">Email</label>
                            <input type="email" name="txtEmail" id="txtEmail" placeholder="name@domain.com" required>
                        </p>
                        <p>
                            <label for="txtPhone">Phone Number</label>
                            <input type="tel" name="txtPhone" id="txtPhone" placeholder="(###) ###-####" required>
                        </p>
                        <!--radio id: radNotificationEmail, radNotificationPhone, radNotificationBoth, radNotificationNone-->
                        <h4>How would you like to receive further notice about the events? (email or phone)</h4>
                        <p>
                            <input type="radio" name="radNotification" value="email" id="radNotificationEmail" required>
                            <label for="radNotificationEmail">Email</label>
                        </p>
                        <p>
                            <input type="radio" name="radNotification" value="phone" id="radNotificationPhone" required>
                            <label for="radNotificationPhone">Phone</label>
                        </p>
                        <p>
                            <input type="radio" name="radNotification" value="both" id="radNotificationBoth" required>
                            <label for="radNotificationBoth">Both Email and Phone</label>
                        </p>
                        <p>
                            <input type="radio" name="radNotification" value="None" id="radNotificationNone" required>
                            <label for="radNotificationNone">nothing</label>
                        </p>
                        <!--textarea id: txtAddress-->
                        <p>
                            <textarea name="txtAddress" rows="4" cols="50" placeholder="type your address" required></textarea>
                        </p>
                    </fieldset>
                    <section>
                        <!--checkbox id: chkWellbeing, chkOceanTrash, chkRecycle, chkFinacialSupport-->
                        <h3>What would you expect us to use your money?</h3>
                        <p>
                            <label for="chkWellbeing">Well-bing of Animals</label>
                            <input type="checkbox" name="chkWellbeing" value ="1" id="chkWellbeing">
                        </p>
                        <p>
                            <label for="chkOceanTrash">Ocean Trash</label>
                            <input type="checkbox" name="chkOceanTrash" value ="1" id="chkOceanTrash">&nbsp;
                        </p>
                        <p>    
                            <label for="chkRecycle">Recycle Facility</label>
                            <input type="checkbox" name="chkRecycle" value ="1" id="chkRecycle">&nbsp;
                        </p>
                        <p>    
                            <label for="chkFinacialSupport">For Our Organization</label>
                            <input type="checkbox" name="chkFinacialSupport" value ="1" id="chkFinacialSupport">
                        </p>
                        <!--listbox options: $5,$10,$15,$20-->
                        <h4>How much money would you want to donate?</h4>
                        <p>
                            <select name="lstMoney">
                                <option value="$5">$5</option>
                                <option value="$10">$10</option>
                                <option value="$15">$15</option>
                                <option value="$20">$20</option>
                            </select>
                        </p>
                        <!--submit button: $5,$10,$15,$20-->
                        <input type="submit" name="btnSubmit">
                    </section>
                </form>
            </article>
        </main>
        <footer>
            <p><a href="../index.php">Site map (Main index)</a></p>
        </footer>
    </body>
</html>
