<?php
define('PRIVATE_PATH', '../../private/');
require PRIVATE_PATH . 'database/connector/config.php';
session_start();
error_reporting(0);
$email=$_SESSION['email'];
$customerQuery=$database->performQuery("SELECT * FROM Users,Laundry_User WHERE Users.email='$email' AND Users.email=Laundry_User.email");
$database->fetch_data($results,$customerQuery);
?>