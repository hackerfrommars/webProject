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
        <table class = "main_bar">
          <tr>
            <td id = "main_pic_container"><a href="index.php"><img src="mainPic.gif" id = "main_pic"></a></td>
            <td id="main_menu_container">
              <span>
                <p style="margin-left: 5px; display:inline; font-weight:bold;">Login</p>
              </span>
            </td>
          </tr>
        </table>
      </tr>
      <br>
      <tr>
        <div id = "profile_container">
        <form role="form" style="width: 20%; font-size: 12px;" action="index.php" style="margin-left: 20px;">
           <div class="form-group">
             <label for="newpassword">New Password</label>
             <input type="password" class="form-control" id="new_psw" style="height: 25px;" placeholder="Enter new password">
           </div>
           <div class="form-group">
             <label for="re_newpassword">Repeat new password</label>
             <input type="password" class="form-control" id="new_psw" style="height: 25px;" placeholder="Repeat new password">
           </div>
           <button type="submit" class="btn btn-default" style="background-color:#FF8C05;color:white;">Save</button>
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
