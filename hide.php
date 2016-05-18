<?php
if(!isset($_POST['hide'])){
  header("Location:index.php");
}
include 'functions.php';
$id = $_POST["id"];
$result = toHide($id);
header("Location:index.php");
?>
