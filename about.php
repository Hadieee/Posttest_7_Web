<?php
session_start();
require("connect.php");

if (!isset($_SESSION['Username'])) {
    echo "<script>
        alert('Akses Ditolak, Silahkan Login Terlebih Dahulu !');
        document.location.href = 'index.php';
    </script>";
}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>About Me</title>
        <link rel="browser tab icon" href="img/coffe-logo.png">
        <link rel="stylesheet" href="style.css">
        <link href='http://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'> 
    </head>

    
    <body>
      <nav class="navbar">
        <div class="container">
          <div class="navbar-menu">
            <a href="user.php">home</a>
            <a href="menu.php">menu</a>
            <a href="about.php">about me</a>
            <a href="user-logout.php" >logout</a>
          </div>
        </div>
      </nav>

      <div class="box_about">
        <img src="img/About me.jpg" alt="" class="box-img">
        <h1>Hadie Pratama Tulili</h1>
      <h5>
      2109106043</h5>
      <p id="word"><br>Jika memang dia maka jodohkanlah, tetapi jika tidak gamau tau.</p>
      <button id="btn-info">Tekan Ini</button>
      <p id="info" style="display: none;">Teruntuk kamu yang membaca ini, semoga harimu selasa terus :)</p>
      </div>

      <script>
        const button = document.getElementById("btn-info");
        button.addEventListener("click",function showInfo() {
          const isDisplay = document.getElementById("info");
          if(isDisplay.style.display == "none"){
            isDisplay.style.display = "block"
          } else {
            isDisplay.style.display = "none"
          }
        });
      </script>


    <footer id="footer">
        Copyright &copy; 2022
        Designed by Hadiee
    </footer>

</body>