<?php
if(!isset($_COOKIE['username'])){
  $notSet = "";
  $isSet = "hidden";
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
    <script src="jquery.js"></script>
    <style media="screen">
      #here{
        margin-left: 44%;
      }
      #search{
        margin-left: 44%;
      }
    </style>
    <script>
    $(document).ready(function(e){
      $("#search").keyup(function(){
        $("#here").show();
        var x = $(this).val();
        $.ajax({
          type:"GET",
          url:'fetch.php',
          data:'que='+x,
          success:function(data)
          {
              $("#here").html(data);
          }
        });
      });
    });
    </script>
  </head>
  <body>
    <br>
    <table>
      <tr>
        <?php include 'mainBar.php' ?>
      </tr>
      <br>
      <tr>
        <center><h2>Searching users</h2></center>
        <input type="search" name="search" id = "search" value="">
        <div id = "here">
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
