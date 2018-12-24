<?php

session_start();
include_once "connection.php";

$login = $_POST['name'];
$password = $_POST['password'];
$query = "SELECT * FROM users WHERE (last_login = '".$login."') && (user_password = '".$password."')";
$result = mysqli_query($mysqli_connection, $query)
$user = mysqli_fetch_array ($result);

$_SESSION['id'] = $user['id'];
$_SESSION['login'] = $user['last_login'];
$_SESSION['name'] = $user['user_name'];
$_SESSION['status'] = "login";

header("Location: /");

?>