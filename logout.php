<?php
  setcookie('username', $_COOKIE['username'], time() - 3600, "/");
  // echo "cookie deleted // well at least let's hope so";
  header("Location:index.php");
 ?>
