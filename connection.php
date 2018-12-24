<?php

$servername = localhost;
$username = mikle;
$password = PassWord123!;
$dbname = first_database;

$connection = mysqli_connect($servername, $username, $password) || die('Error con');
$select_bd = mysqli_select_db($connection, $dbname) || die('Error bd');


?>