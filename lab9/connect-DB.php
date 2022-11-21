



<?php
// mistakes are misspelling database name , username, or passwords
$databaseName = 'TASTHANA_labs';
$dsn = 'mysql:host=webdb.uvm.edu;dbname=' . $databaseName;
$username = 'tasthana_writer';
$password = 'o1L49ZF54w0s'; 

$pdo = new PDO($dsn, $username, $password); 
?>

