<?php
if(!isset($_POST['submit'])){
  header("Location:index.php");
}
session_start();
include 'functions.php';
// echo exec('whoami');
$username = $_POST["username"];
$title = $_POST['title'];
$url = $_POST['url'];
$uid = returnUid($username);
$result = toSubmit($uid, $title, $url);
header("Location:index.php");
?>
