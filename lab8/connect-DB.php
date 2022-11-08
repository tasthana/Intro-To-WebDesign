

<! -- Connecting --> 

<?php
// mistakes are misspelling database name , username, or passwords
$databaseName = 'TASTHANA_labs';
$dsn = 'mysql:host=webdb.uvm.edu;dbname=' . $databaseName;
$username = 'tasthana_writer';
$password = '901YImcQv6gW'; 

$pdo = new PDO($dsn, $username, $password); 
?>

