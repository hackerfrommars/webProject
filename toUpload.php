<?php

  if(!isset($_POST['uploadFile'])){
    header("Location:index.php?page=profile");
  }
  include 'functions.php';
  // echo exec('whoami');
  $username = $_COOKIE['username'];
  $uid = returnUid($username);
  $counter = countPhoto($uid);
  // echo $counter."HELLO";
  $counter = $counter + 1;
  // echo $counter." Later";
  $path = "images/";
  $im_name = $uid."_".$counter."_image.jpg";
  // echo $im_name;
  $full_path = $path.$im_name;
  // echo $full_path;
  if(is_uploaded_file($_FILES['img']['tmp_name'])){
      move_uploaded_file($_FILES['img']['tmp_name'], $full_path);
      toUploadPhoto($uid, $full_path);
      // echo "$id $full_path";
      header("Location:index.php?page=profile");
  }

 ?>
