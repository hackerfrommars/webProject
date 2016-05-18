<table class = "main_bar">
  <tr>
    <td id = "main_pic_container"><a href="index.php"><img src="mainPic.gif" id = "main_pic"></a></td>
    <td id="main_menu_container">
      <span>
        <a href="index.php" id = "hot" style="color:black;">Hacker News</a>&nbsp;<span>|</span>
        <!-- <a href="welcome_page.php">Welcome page </a> | -->
        <a href="index.php?page=new" id = "others">new</a> <span <?php echo $isSet; ?>>|</span>
        <a href="index.php?page=comments"id = "others"<?php echo $isSet; ?>>comments</a> <span <?php echo $isSet; ?>>|</span>
        <a href="index.php?page=submit" id = "others" <?php echo $isSet; ?>>submit</a> <span <?php echo $isSet; ?>>|</span>
        <a href="index.php?page=profile"id = "others" <?php echo $isSet; ?>>profile</a><span>|</span>
        <a href="index.php?page=search" id = "others">search</a>
      </span>
    </td>
    <td id = "login">
    <!-- <div class="row">
        <div class="col-md-4 col-md-offset-3">
            <form action="" class="search-form">
                <div class="form-group has-feedback">
            		<label for="search" class="sr-only">Search</label>
            		<input type="text" class="form-control" name="search" id="search" placeholder="search users">
              		<span class="glyphicon glyphicon-search form-control-feedback"></span>
            	</div>
            </form>
        </div>
    </div> -->


      <!-- <img src="searchIcon.png" alt="searchIcon" width="20px" height="20px" style="margin-right: 20px;"/> -->
      <!-- <div class="container"> -->
      <a href="index.php?page=profile" <?php echo $isSet; ?>><span><?php echo $_COOKIE['username'];?></span></a>
      <span <?php echo $isSet;?>>|</span>
      <a href="logout.php" <?php echo $isSet; ?>><span>logout</span></a>
        <span class="" data-toggle = "modal" data-target = "#modal-1" <?php echo $notSet ?>>Register</span>
        <div class="modal" id = "modal-1">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button class = "close" type="button" name="button" data-dismiss = "modal">&times;</button>
                  <h4 class="modal-title" style="text-align:center;background-color:#FF8C05;border-radius:6px;color:white;padding-top:7px;padding-bottom:5px;">Registration</h4>
                  <form role="form" action="toRegister.php" method="post" onsubmit="return validateForm()" name="registration">
                   <div class="form-group">
                     <label for="username">Username:</label>
                     <input type="text" class="form-control" id="email" placeholder="Enter username" name="username" required>
                   </div>
                    <div class="form-group">
                      <label for="email">Email address:</label>
                      <input type="email" class="form-control" id="email" placeholder="Enter email" name="eMail" required>
                    </div>
                   <div class="form-group">
                     <label for="pwd">Password:</label>
                     <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" required>
                   </div>
                   <div class="form-group">
                     <label for="pwd">Repeat-Password:</label>
                     <input type="password" class="form-control" id="re_pwd" placeholder="Repeat password" name="rePassword" required>
                   </div>
                   <input type="submit" class="btn btn-default" style="background-color:#FF8C05;color:white;" name="register">
                  </form>
                </div>
              </div>
            </div>
        </div>
      <!-- </div> -->
       <span <?php echo $notSet; ?>>|</span>
       <span class="" data-toggle = "modal" data-target = "#modal-2" <?php echo $notSet;?>>Login</span>
       <div class="modal" id = "modal-2">
           <div class="modal-dialog">
             <div class="modal-content">
               <div class="modal-header">
                 <button class = "close" type="button" name="button" data-dismiss = "modal">&times;</button>
                 <h4 class="modal-title" style="text-align:center;background-color:#FF8C05;border-radius:6px;color:white;padding-top:7px;padding-bottom:5px;">Login</h4>
                 <form role="form" method="post" action="toLogin.php" name="login" onsubmit="return validateLogin()">
                   <div class="form-group">
                     <label for="username">username</label>
                     <input type="text" class="form-control" id="username" name="username" required>
                   </div>
                   <div class="form-group">
                     <label for="pwd">Password:</label>
                     <input type="password" class="form-control" id="pwd" name="password" required>
                   </div>
                   <div class="checkbox">
                     <label><input type="checkbox"> Remember me</label>
                   </div>
                   <input type="submit" class="btn btn-default" style="background-color: #FF8C05;color:white;" name="login" required>
                  </form>
               </div>
             </div>
           </div>
       </div>
    </td>
  </tr>
</table>
<script src="validation.js"></script>
