<?php 

// $db = mysqli_connect('localhost', 'root', '', 'regestration')
// or die('Error connecting to mysql');




$db_user = "root";
$db_pass = "";
$db_name = "regestration";

$db = new PDO('mysql:host=localhost;dbname ='.$db_name , $db_user, $db_pass);

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>
