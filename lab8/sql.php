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

</pre>
</main>
<?php
include 'footer.php';
?>
</body>
</html>
