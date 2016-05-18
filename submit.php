<?php
if(!isset($_COOKIE['username'])){
  header("Location:index.php");
}
else{
  $notSet = "hidden";
  $isSet = "";
}
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

  </head>
  <body>
    <br>
    <table>
      <tr>
      <?php include 'mainBar.php';?>
      </tr>
      <br>
      <tr>
        <div id="profile_container">

          <form role="form" style="width: 20%; font-size: 12px;" action="toSubmit.php" style="margin-left: 20px;" method="post">
            <input type="text" name="username" value="<?php echo $_COOKIE['username']; ?>" hidden>
             <div class="form-group">
               <label for="title">Title</label>
               <input type="text" class="form-control" id="title" style="height: 25px;" name="title">
             </div>
             <div class="form-group">
               <label for="url">Url</label>
               <input type="text" class="form-control" id="url" style="height: 25px;" name="url">
             </div>
             <input type="submit" class="btn btn-default" style="background-color:#FF8C05;color:white;" value="Submit" name="submit">
           </form>

      </div>
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
  </body>
</html>
