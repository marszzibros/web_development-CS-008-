<?php
include 'top.php';
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
                    <input type="text" name="txtFirstName" id="txtFirstName" placeholder="first name" required>
                </p>
                <p>
                    <label for="txtLastName" class="require">Last Name</label>
                    <input type="text" name="txtLastName" id="txtLastName" placeholder="last name" required>
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
                    <input type="email" name="txtEmail" id="txtEmail" placeholder="name@domain.com" required>
                </p>
                <p>
                    <label for="txtPhone" class="require">Phone Number</label>
                    <input type="tel" name="txtPhone" id="txtPhone" placeholder="(###) ###-####" required>
                </p>
                <p>
                    <textarea name="txtAddress" rows="4" cols="50" placeholder="type your address" required></textarea>
                </p>
            </fieldset>
            <fieldset class="radio">
                <legend>Contact preferences</legend>
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
            </fieldset>
            <fieldset class="checkbox">
                <legend>checkbox</legend>
                <!--checkbox id: chkWellbeing, chkOceanTrash, chkRecycle, chkFinacialSupport-->
                <h4>What would you expect us to use your money?</h4>
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
            </fieldset>
            <fieldset class="listmenu">
                <!--listbox options: $5,$10,$15,$20-->
                <h4>How much money would you want to donate?</h4>
                <p>
                    <label for="lstMoney">Select Money</label>
                    <select name="lstMoney" id="lstMoney">
                        <option value="$5">$5</option>
                        <option value="$10">$10</option>
                        <option value="$15">$15</option>
                        <option value="$20">$20</option>
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
