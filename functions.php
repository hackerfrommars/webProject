<?php
function toUploadPhoto($uid, $url){
  include "connection.php";

  $sql = "INSERT INTO images(uid, url) VALUES ($uid,'$url')";
  $result = mysqli_query($connection, $sql);
}
function countPhoto($uid){
  include "connection.php";
  $sql = "SELECT id FROM images WHERE uid = $uid";
  $result = mysqli_query($connection, $sql);
  return mysqli_num_rows($result);
}
function toShowPhoto($uid){
  include "connection.php";
  $sql = "SELECT url FROM image WHERE uid = $id";
  $result = mysqli_query($connection, $sql);
    if(mysqli_num_rows($result) > 0){
      $row = mysqli_fetch_assoc($result);
      return $row["url"];
    }
    else {
      return "no_photo";
    }
}
function checkLogin($username, $password){
  include "connection.php";
  $sql = "SELECT username, password FROM users WHERE username = '$username' AND password = '$password' AND banned = 0";
  $result = mysqli_query($connection, $sql);
    if(mysqli_num_rows($result) > 0){
      $row = mysqli_fetch_assoc($result);
      return true;
    }
    else {
      return false;
    }
}
function toRegister($username, $email, $password){
  include "connection.php";
  $sql = "INSERT INTO users(username, email, password) VALUES ('$username', '$email', '$password')";
  $result = mysqli_query($connection, $sql);
}
function toFindByLogin($uid){
  include "connection.php";
  $sql = "SELECT url FROM images  WHERE uid = $uid";
  $result = mysqli_query($connection, $sql);
    if(mysqli_num_rows($result) > 0){
      // $row = mysqli_fetch_assoc($result);
      // return $row;
      return $result;
    }
    else {
      return "no photo";
    }
}
function toSubmit($uid, $title, $url){
  include "connection.php";
  $sql = "INSERT INTO posts(uid, title, url, score) VALUES ($uid, '$title', '$url', 0)";
  $result = mysqli_query($connection, $sql);
}
function returnUid($username){
  include "connection.php";
  $sql = "SELECT id FROM users WHERE username = '$username'";
  $result = mysqli_query($connection, $sql);
  if(mysqli_num_rows($result) > 0){
    $row = mysqli_fetch_assoc($result);

    return $row['id'];
  }
}
function findByUid($uid){
  include "connection.php";
  $sql = "SELECT username FROM users WHERE id = $uid";
  $result = mysqli_query($connection, $sql);
  if(mysqli_num_rows($result) > 0){
    $row = mysqli_fetch_assoc($result);

    return $row['username'];
  }
}
function returnByTime(){
  include "connection.php";
  $sql = "SELECT * FROM posts WHERE hidden = 0 ORDER BY timeline DESC";
  $result = mysqli_query($connection, $sql);
  return $result;
}
function returnByScore(){
  include "connection.php";
  $sql = "SELECT * FROM posts WHERE hidden = 0 ORDER BY score DESC";
  $result = mysqli_query($connection, $sql);
  return $result;
}
function toHide($id){
  include "connection.php";
  $sql = "UPDATE posts SET hidden = 1 WHERE id = $id";
  $result = mysqli_query($connection, $sql);
  return $result;
}
function returnUser($name){
  include "connection.php";
  $sql = "SELECT * FROM users WHERE username = '$name'";
  $result = mysqli_query($connection, $sql);
  return $result;
}
function toBan($username){
  include "connection.php";
  $sql = "UPDATE users SET banned = 1 WHERE username = '$username'";
  $result = mysqli_query($connection, $sql);
  return $result;
}
function toUnBan($username){
  include "connection.php";
  $sql = "UPDATE users SET banned = 0 WHERE username = '$username'";
  $result = mysqli_query($connection, $sql);
  return $result;
}
 ?>
