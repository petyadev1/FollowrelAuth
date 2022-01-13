<?php
$mail = $_POST['email'];
$user = $_POST['username'];
?>
<!DOCTYPE html>
<html>
<head>
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
  <link href="https://loginapibtn.followrel.repl.co/style.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
  <div id="gSignInWrapper">
    <span class="label">Sign in with:</span>
    <div onclick="goToFRL()" id="customBtn" class="customGPlusSignIn">
      <span class="icon"><img class="FollowrelImg" src="assets/faviconpng.png"></span>
      <span class="buttonText">Followrel</span>
    </div>
  </div>
  <script>
    function goToFRL() {
   window.location.replace("http://followrel.ga/auth.php?app=YOURAPPNAME&uri=YOURAPPURL/this.php");
    }
  </script>
</body>
</html>
