<?php 
session_start();
error_reporting(0);
define('PRIVATE_PATH','../');
define('VIEW_PATH','../../public/view/');
require PRIVATE_PATH.'database/connector/config.php';
require PRIVATE_PATH.'library/validation/input-validator.php';

if (isset($_POST['submit'])) {
    $validate=new InputValidation();
	$name = $validate->post_sanitise_regular_input('name');
    $email=new EmailValidator($validate->post_sanitise_email('email'));
    $password=new PasswordValidator($validate->post_sanitise_password('password'));
    $user_selection=$_POST['userSelection'];
    $confirm_password= $validate->post_sanitise_password('confirmPassword');
    $exists = "SELECT * FROM users WHERE email = '".$email->get_email()."'";
    $result=$database->performQuery($exists);
    if ($result->rowCount()> 0) {
        $email='';
        $password='';
        $_REQUEST['password']='';
        $_SESSION['error']="An account already exists with this email";
    }
    else{
        $insertusers = "INSERT INTO users(email,username,password) VALUES ('".$email->get_email()."', '$name','".$password->get_password()."')";
        $_SESSION['email']=$email->get_email();
        unset($_POST['password']);
        unset($_POST['confirmPassword']);
        unset($confirm_password);
        unset($name);
        unset($password);
        unset($validate);
        $newInsert=$database->performQuery($insertusers);
        $database->fetch_results($row,$exists);
        $insertTable="INSERT INTO $user_selection(email) VALUES('".$_SESSION['email']."')";
        $database->performQuery($insertTable);
        unset($_SESSION['error']);
        if($user_selection==="Laundry_Manager"){
            header('Location: '.VIEW_PATH.'laundry-register.php');
        }
        else{
            header('Location: '.VIEW_PATH.'dashboard-customer.php');
        }
    }   
}
else{
    $_SESSION['error']="Invalid form data";
    header('Location: index.php');
}
?>