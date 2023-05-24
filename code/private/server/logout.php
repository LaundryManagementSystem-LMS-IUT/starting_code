<?php 
  define('PRIVATE_PATH','../');
  define('VIEW_PATH','../../public/view/');
  session_start();
  error_reporting(0);
  session_destroy();
  header('Location: '.VIEW_PATH.'login.php');
?>