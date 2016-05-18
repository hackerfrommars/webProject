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

  </head>
  <body>
    <br>
    <table>
      <tr>
        <?php include 'mainBar.php' ?>
      </tr>
      <br>
      <tr>
        <div id = "profile_container">
        <div id = "comm_container">
          <img src="upvote_big.gif" alt="upvote-sign" id = "upvote_pic" onclick = "dosmt();"/>
          <div id = "thread_title">
            <a href="https://gogameguru.com/alphago-4/">Lee Sedol Beats AlphaGo in Game 4</a>
          <br>
           <p id = "thread_footer" >456 points by <a href="profile.php">jsw4324</a>
              4 hours ago | <a href="new.php">155 comments</a></p></div>
        </div>
        <form id = "comm_container" action="index.php" method="post">
          <textarea name="comment" rows="8" cols="40" placeholder="Write a comment here"></textarea><br>
          <button type="submit" class="btn btn-default" style="background-color: #FF8C05;color:white; margin-left: 23%;margin-top:1%;">Submit</button>
        </form>
      </div>
      </tr>
      <tr>
        <div class="threads" style="padding-top: 5%;">
          <div id = "comments">
            <img src="upvote_big.gif" alt="up" id = "upvote_pic" onclick = "dosmt();"/>
            <div id = "thread_title">
            <p id = "thread_footer" >by <a href="profile.php">johnthebest</a>
                40 hours ago</p>
            <div id = "comment_content">
              <p>
                I almost overlooked this article because I got turned off by the opening description in base 10, as there is a lot of math trivia out there that is specific to base 10 which holds little general significance.
                <br>But a little further down, the article discusses how this was discovered originally in base 3, and I think it's much simpler to understand in that context, since all primes except 3 (aka 10 base 3) end in just either 1 or 2:
                "Looking at prime numbers written in base 3 — in which roughly half the primes end in 1 and half end in 2 — he found that among primes smaller than 1,000, a prime ending in 1 is more than twice as likely to be followed by a prime ending in 2 than by another prime ending in 1."
              </p>
              <a href="comments.php" style="font-size:10px;">reply</a>
            </div>
            <div id = "comments">
              <img src="upvote_big.gif" alt="up" id = "upvote_pic" onclick = "dosmt();"/>
              <div id = "thread_title">
              <p id = "thread_footer" >by <a href="profile.php">mikey12</a>
                  20 hours ago</p>
              <div id = "comment_content">
                <p>
                  Indeed, they conjecture that the primes' last digits "conspire" in every base > 2, which is very interesting.
                </p>
                <a href="comments.php" style="font-size:10px;">reply</a>
              </div>
              <div id = "comments">
                <img src="upvote_big.gif" alt="up" id = "upvote_pic" onclick = "dosmt();"/>
                <div id = "thread_title">
                <p id = "thread_footer" >by <a href="profile.php">mefisto</a>
                    19 minutes ago</p>
                <div id = "comment_content">
                  <p>
                    I give you credit.
                  </p>
                  <a href="comments.php" style="font-size:10px;">reply</a>
                </div>
              </div>

            </div>
            </div>
          </div>

          </div>
        </div>
        <div id = "comments">
          <img src="upvote_big.gif" alt="up" id = "upvote_pic" onclick = "dosmt();"/>
          <div id = "thread_title">
          <p id = "thread_footer" >by <a href="profile.php">metalGear</a>
              15 hours ago</p>
          <div id = "comment_content">
            <p>
              "If Alice tosses a coin until she sees a head followed by a tail, and Bob tosses a coin until he sees two heads in a row, then on average, Alice will require four tosses while Bob will require six tosses (try this at home!), even though head-tail and head-head have an equal chance of appearing after two coin tosses."
              <br>How does this work?
            </p>
            <a href="comments.php" style="font-size:10px;">reply</a>
          </div>
          <div id = "comments">
            <img src="upvote_big.gif" alt="up" id = "upvote_pic" onclick = "dosmt();"/>
            <div id = "thread_title">
            <p id = "thread_footer" >by <a href="profile.php">freeman</a>
                20 minutes ago</p>
            <div id = "comment_content">
              <p>
                Correct, but the point is if Alice doesn't get a tail, that means she got a head, so she is still in the same position as she was before the flip, only needing a single tail to complete the sequence. If Bob gets a head, then a tail, he now needs two consecutive heads to complete his sequence.
              </p>
              <a href="comments.php" style="font-size:10px;">reply</a>
            </div>
          </div>
        </div>
        </div>
      </div>
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
