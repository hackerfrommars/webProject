<?php
if(isset($_POST['ban'])){
include 'functions.php';
// echo exec('whoami');
$username = $_POST["username"];
$result = toBan($username);
header("Location:index.php");
}
else if(isset($_POST['unban'])){
  include 'functions.php';
  // echo exec('whoami');
  $username = $_POST["username"];
  $result = toUnBan($username);
  header("Location:index.php");
}
else{
  header("Location:index.php?page=profile");
}
?>
