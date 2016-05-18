<?php
if(!isset($_POST['register'])){
  header("Location:index.php");
}
session_start();
include 'functions.php';
// echo exec('whoami');
$username = $_POST["username"];
$email = $_POST['eMail'];
$password = $_POST['password'];
$result = toRegister($username, $email, $password);
header("Location:index.php");
// echo $result."<be>";
// echo "$username.username<br>";
// echo "$email.email<br>";
// echo "$password.password<br>";

?>
