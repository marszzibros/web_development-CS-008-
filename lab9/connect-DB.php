<?php
$databaseName = 'JJUNG2_labs';
$dsn = 'mysql:host=webdb.uvm.edu;dbname='. $databaseName;
$username = 'jjung2_writer';
$password = '1ueXykreV3rA1AQR';

$pdo = new PDO($dsn, $username, $password);
?>