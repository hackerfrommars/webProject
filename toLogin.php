<?php
if(!isset($_POST['login'])){
  header("Location:index.php");
}
session_start();
include 'functions.php';
// echo exec('whoami');
$username = $_POST["username"];
$password = $_POST['password'];
$result = checkLogin($username, $password);
if($result == true){
  $cookie_name = "username";
  $cookie_value = $username;
  setcookie($cookie_name, $cookie_value, time() + 3600, "/");
  header("Location:index.php");
}
else{
  header("Location:index.php");
  // echo "yeas";
}
?>
