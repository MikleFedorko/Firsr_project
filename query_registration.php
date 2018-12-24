<?php

include_once "header.php";

$query = "INSERT INTO users VALUE(0, '".$_POST['login']."', '".$_POST['password']."', '".$_POST['name']."', 
                                  '".$_POST['birhday']."', '".$_POST['email']."') ";
$result = mysqli_query($connection, $query);

header('Location: /');
?>