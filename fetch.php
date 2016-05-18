<?php
  if(isset($_GET['que'])){
    include "connection.php";

    $que = $_GET['que'];
    $sql = "SELECT username FROM users WHERE username like '%$que%'";
    $result = mysqli_query($connection, $sql);
    while ($row = mysqli_fetch_assoc($result)){
      $user = $row['username'];
      echo "<a href='index.php?page=profile&user=$user'>".$row['username']."</a><br>";
    }
  }
 ?>
