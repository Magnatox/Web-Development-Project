<?php
$isSent = false;
if(isset($_POST['email'])){
    $userName = $_POST['name'];
    $userEmail = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $to = "19032002i@gmail.com";
    $body = "";

    $body .= "From: ".$userName."\r\n";
    $body .= "Email: ".$userEmail."\r\n";
    $body .= "Message: ".$message."\r\n";

   // mail($to, $subject, $body);

    $isSent = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet" />
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <link rel="stylesheet" href="app.css" />
  <title>Project</title>
</head>
<body>
  <div class="container">
    <div class="left">
      <img src="./imgs/pic.jpeg" class="pic" alt="" />
      <p class="name">Ilyes Saidi</p>
      <p class="occ">Computer Engineer | Turkey</p>
      <ul class="menu">
        <li><a href="#home">home</a></li>
        <li><a href="#about">about</a></li>
        <li><a href="#skills">skills</a></li>
        <li><a href="#education">education</a></li>
        <li><a href="#experience">experience</a></li>
        <li><a href="#contact">contact</a></li>
      </ul>
      <div class="footer">
        <small>&copy; <?php echo date('Y'); ?> All rights reserved | This website is made by <strong>Ilyes Saidi</strong></small>
      </div>
    </div>
    
    <div class="right">
      <div class="mailSent">
      <?php
      if($isSent) {
      ?>
      
      <h1>Thanks for contacting us! We'll be back to you soon.</h1>
      <h1>Back to <a href="/index.html">homepage</a>.</h1>
      
      <?php
      } else {
      ?>
      <h1>Something went wrong! Back to <a href="/index.html">homepage</a>.</h1>
      <?php
      }
      ?>
      </div>
    </div>
  </div>
</body>
</html>
