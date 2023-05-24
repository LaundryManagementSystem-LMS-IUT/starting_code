<?php 
session_start();
error_reporting(0);
define('PRIVATE_PATH','../');
define('VIEW_PATH','../../public/view/');
require PRIVATE_PATH.'database/connector/config.php';
require PRIVATE_PATH.'library/validation/input-validator.php';

if(isset($_POST['submit'])){
  $validate=new InputValidation();
  $name = $validate->post_sanitise_regular_input('laundry_name');
  $address=$validate->post_sanitise_regular_input('address');
  if(!empty($name) && !empty($address)){
    try{
      $database->performQuery("INSERT INTO LAUNDRY(laundryname,laundryaddress) VALUES ('$name','$address')");
      $database->fetch_results($result,"SELECT * FROM Laundry WHERE laundryName='$name' AND laundryAddress='$address'");
      $database->performQuery("UPDATE LAUNDRY_MANAGER SET laundryID='".$result['laundryid']."' WHERE email='".$_SESSION['email']."'");
      header('Location: '.VIEW_PATH.'dashboard-customer.php');

    }
    catch(Exception $e){
      echo $e->getMessage();
    }
  }
}

?>