<?php
  include "functions.php";
  session_start();
  if(!isset($_GET['user'])){
  $name = $_COOKIE['username'];
  $result = returnUser($name);
  $row = mysqli_fetch_array($result);
  $created = $row['created'];
  $about = $row['about'];
  }
  else{
    $name = $_GET['user'];
    $result = returnUser($name);
    $row = mysqli_fetch_array($result);
    $created = $row['created'];
    $about = $row['about'];
  }
  if(!isset($_COOKIE['username'])){
    $notSet = "";
    $isSet = "hidden";
    $isAdmin = "hidden";
  }
  else if($_COOKIE['username'] == 'admin'){
    $notSet = "hidden";
    $isSet = "";
    $isAdmin = "";
  }
  else{
  $notSet = "hidden";
  $isSet = "";
  $isAdmin = "hidden";
}

  if(!isset($_GET['user']) || $_GET['user'] == $_COOKIE['username']){
    $isUser = "";
  }
  else{
    $isUser = "hidden";
  }
  $uid = returnUid($name);
  $result = toFindByLogin($uid);
  $numRow = mysqli_num_rows($result);

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Hacker News</title>
    <link rel="icon" href="icon.ico">
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script type="text/javascript" src = "jquery.js"></script>
    <script type="text/javascript">
      var arr = [];
      var counter = 0;
      function nextPhoto(){
        if(counter != arr.length - 1){
        counter = counter + 1;
        $('#profile_img').attr('src', arr[counter]);}
        else{
          counter = 0;
        $('#profile_img').attr('src', arr[counter]);}

      }
      function prevPhoto(){
        if(counter != 0){
          counter = counter - 1;}
        else{
          counter = arr.length - 1;
        }
        $('#profile_img').attr('src', arr[counter]);
      }
    </script>
    <style>
    .carousel-inner > .item > img,
    .carousel-inner > .item > a > img {
        width: 70%;
        margin: auto;
    }
    </style>
  </head>
  <body>
    <br>
    <?php include 'mainBar.php'; ?>
          </tr>
      </tr>
      <br>
      <tr>
        <div id = "profile_container">
        <table class="profile">
          <tr>
            <td>
              user:
            </td>
            <td>
              <?php echo $name;?>
            </td>
          </tr>
          <tr>
            <td>
              created:
            </td>
            <td>
              <?php echo $created; ?>
            </td>
          </tr>
          <tr>
            <td>
              about:
            </td>
            <td>
              <textarea name="name" rows="4" cols="40" placeholder="Type information about you"><?php echo $about; ?></textarea>
            </td>
          </tr>
          <tr>
            <td id = "tabbed" <?php echo $isUser; ?>>
              <a href="login.php">change password</a>
            </td>
          </tr>
          <tr >
            <td id = "tabbed" <?php echo $isUser; ?>>
              <a href="index.php">change email</a>
            </td>
          </tr>
          <tr>
            <td id = "tabbed" <?php echo $isUser; ?>>
              <a href="index.php">submissions</a>
            </td>
          </tr>
          <tr>
            <td id = "tabbed" <?php echo $isUser; ?>>
              <a href="comments.php">comments</a>
            </td>
          </tr>
        </table>
        <form action="index.html" method="post" <?php echo $isUser; ?>>
          <input type="submit" name="save" value="Save"type="submit" class="btn btn-default" style="background-color:#FF8C05;color:white;margin-left:5%;margin-top:1%;">
        </form>
        <form action="ban.php" method="post" <?php echo $isAdmin; ?>>
          <input type="text" name="username" value="<?php echo $_GET['user'];?>" hidden>
          <input type="submit" name="ban" value="Ban This user">
          <input type="text" name="username" value="<?php echo $_GET['user'];?>" hidden>
        </form>
        <form action="ban.php" method="post" <?php echo $isAdmin; ?>>
          <input type="submit" name="unban" value="Unban This user">
        </form>
        <form method="post" enctype="multipart/form-data" action="toUpload.php" <?php echo $isUser; ?>>
          <span><b>Upload Photo:</b></span>
          <input type="file" name="img" value="">
          <input type="submit" name="uploadFile" value="Upload_file">
        </form>
      </div>
    <!-- this is bootstrap -->
    <div class="container">
      <br>
      <div id="myCarousel" class="carousel slide" data-ride="carousel">

        <ol class="carousel-indicators">
    <?php
      $counter = 0;
      echo "<li data-target=\"#myCarousel\" data-slide-to=\"$counter\" class=\"active\"></li>";
      $counter = $counter + 1;
      while($counter < $numRow){
        echo "<li data-target=\"#myCarousel\" data-slide-to=\"$counter\"></li>";
        $counter = $counter + 1;
      }

     ?>
        </ol>

        <div class="carousel-inner" role="listbox">
          <?php
            $row = mysqli_fetch_assoc($result);
            $path = $row['url'];
            ?>
            <script type="text/javascript">
              arr[arr.length] = "<?php echo $path; ?>";
            </script>
            <?php
            echo "<div class='item active'>";
            echo "<img src='$path' alt='Chania' width='460' height='345'>";
            echo "</div>";

            while($row = mysqli_fetch_assoc($result)) {
            ?>
            <script type="text/javascript">
              arr[arr.length] = "<?php echo $path; ?>";
            </script>
            <?php
            $path = $row['url'];
            echo "<div class='item'>";
            echo "<img src='$path' alt='Chania' width='460' height='345'>";
            echo "</div>";
          }
          ?>
        </div>
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <table style="margin:auto; margin-top:100px;">
      <tr>
        <td>
          <button type="button" name="button-left" onclick="prevPhoto()">Previous</button>
        </td>
        <td>
          <img src="" alt="" id = "profile_img" style="width:400px; height:400px; border-radius:8px;"/>
        </td>
        <td>
          <button type="button" name="button-right" onclick="nextPhoto()" >Next</button>
        </td>
      </tr>
    </table>
      </tr>
      <tr>
        <hr>
      </tr>
      <tr>
        <footer>
            &copy 2016 Yerbolat Amangeldi Inc.</br> All Rights Reserved.
          </footer>
      </tr>
    </table>
    <script type="text/javascript">
    $('#profile_img').attr('src', arr[0]);
    window.setInterval(nextPhoto,3000);
    </script>
  </body>

</html>
