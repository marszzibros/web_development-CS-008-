<?php
include 'top.php';
?>
<main>
    <p>Create Table SQL</p>
<pre>
CREATE TABLE tblOrganization(
    pmkOrganizationID INT AUTO_INCREMENT PRIMARY KEY,
    fldName VARCHAR(40),
    fldLocation VARCHAR(200),
    fldContact VARCHAR(200),
    fldTopic VARCHAR(20)
)

INSERT INTO tblOrganization
(fldName,fldLocation,fldContact,fldTopic)
VALUES
('National Waste& Recycling Association','Washington, D.C.','(800) 424-2869','waste'),
('Californias Against Waste','California.','(916) 443-5422','waste'),
('Keep America Beautiful','Connecticut.','(203) 659-3000','recycle'),
('Greenpeace','International.','(202) 462-1177','environment'),
('worldwildlife','Washington, D.C..','www.worldwildlife.org','wildlife')

SELECT fldName, fldLocation, fldContact
                FROM tblOrganization
                INNER JOIN tblTopic ON tblOrganization.fldTopic = tblTopic.fldTopic

--- EXTRA ---
CREATE TABLE tblTopic(
    pmkTopicID INT AUTO_INCREMENT PRIMARY KEY,
    fldTopic VARCHAR(20)
)

INSERT INTO tblTopic
(fldTopic) 
VALUES
('waste'),
('recycle')

---LAB 09---
CREATE TABLE tblGetDonation(
	pmkDonationList INT AUTO_INCREMENT PRIMARY KEY,
    fldEmail VARCHAR(25),
    fldFirstName VARCHAR(15),
    fldLastName VARCHAR(15),
    fldAddress text,
    fldContactPre VARCHAR(10),
    fldWellbing tinyint(1),
    fldOceanTrash tinyint(1),
    fldRecycle tinyint(1),
    fldOrganization tinyint(1),
    fldAmount VARCHAR(3)
)

INSERT INTO tblGetDonation(fldEmail,fldFirstName,fldLastName,fldAddress,fldContactPre,fldWellbing,fldOceanTrash,fldRecycle,fldOrganization,fldAmount)
VALUES("hwasungishungry@gmail.com","Jay Hwasung", "Jung", "31 Spear St", "phone","1","1","1","","$10")


</pre>
</main>
<?php
include 'footer.php';
?>
</body>
</html>
