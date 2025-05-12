<?php
$dbms= "mysql";
$host = "localhost";
 $dbname = "mydata";
 $username = "root";
 $password = "";
 // ini code Muhammad Averroes
try {
 $db = new PDO("$dbms:host={$host};dbname={$dbname}", $username, $password);
 $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 } 
catch (PDOException $exception){
die("Connection error: " . $exception->getMessage());
 }
?>