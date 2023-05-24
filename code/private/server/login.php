<?php 
session_start();
error_reporting(0);
define('PRIVATE_PATH','../');
define('VIEW_PATH','../../public/view/');
require PRIVATE_PATH.'database/connector/config.php';
require PRIVATE_PATH.'library/validation/input-validator.php';


if(isset($_POST['submit'])){
  $validate=new InputValidation();
  echo "comes here";
  $email=new EmailValidator($validate->post_sanitise_email('email'));
  $password=new PasswordValidator($validate->post_sanitise_password('password'));
  echo $email->get_email();
  echo $password->get_store_password();
  try{
    $resultCustomer=$database->performQuery("SELECT * FROM users,Laundry_User WHERE users.email=Laundry_User.email AND users.email='".$email->get_email()."'");
  $resultManager=$database->performQuery("SELECT * FROM users,Laundry_Manager WHERE users.email=Laundry_Manager.email AND users.email='".$email->get_email()."'");
  }
  catch(Exception $e){
    echo $e->getMessage();
  }
  if($resultCustomer->rowCount()>0){
    $database->fetch_data($customerData,$resultCustomer);
    if(password_verify($password->get_store_password(),$customerData['password'])){
      $_SESSION['email']=$email->get_email();
      header('Location: '.VIEW_PATH.'dashboard-customer.php');
    }
    else{
      $_SESSION['error']="Password is invalid";
      header('Location: '.VIEW_PATH.'login.php');
    }
  }
  else if($resultManager->rowCount()>0){
    $database->fetch_data($managerData,$resultManager);
    if(password_verify($password->get_store_password(),$managerData['password'])){
      $_SESSION['email']=$email->get_email();
      header('Location: '.VIEW_PATH.'dashboard-manager.php');
    }
    else{
      $_SESSION['error']="Password is invalid";
      header('Location: '.VIEW_PATH.'login.php');
    }
  }
  else{
    $_SESSION['error']="Account does not exist";
    header('Location: '.VIEW_PATH.'login.php');
  }
  
}

?>