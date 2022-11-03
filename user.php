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
        <title>Kingston's Coffee</title>
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

      <div class="description">
        <h2> Welcome To</h2>
        <h1>Kingston's Coffee</h1>
        <p>Leveraging our network and experience, we use the latest technology and the best coffee blends. Coffee from selected farmers, high quality coffee beans processed and roasted to perfection and passed on by skilled baristas. Who is always eager to prepare a special glass of happiness for you. </p>
        <a href="menu.php">
          <button>taste the tasty </button>
        </a>
      </div>

      <script>
        function changeBtn() {
        let change = document.getElementById("surprise");
        change.style.transform = "rotate(50deg)";
        change.style.margin = "10px";
    
      }
      </script>

    <footer id="footer">
        Copyright &copy; 2022
        Designed by Hadiee<br>
        <button onclick="changeBtn()" id="surprise">sstt!!</button>
    </footer>
    </body>
</html>