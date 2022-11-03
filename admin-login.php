<?php 
    session_start(); 
    require "connect.php";    
           
    if(isset($_POST['submit_admin'])){
        
        $User = $_POST['username_admin'];
        $Password = $_POST['password_admin'];
    
        $result = mysqli_query($conn, "SELECT * FROM akun WHERE username = '$User' OR email='$User'");
        $row = mysqli_fetch_array($result);
        $Username = $row['username'];
    
        if (password_verify($Password, $row['pass'])) {
            $_SESSION['submit_admin'] = true;
            $_SESSION['Username'] = true;
            echo "<script>
                    alert('Selamat Datang, $Username');
                    document.location.href = 'admin.php';
                    </script>";
            session_start();
        } else {
            $failed = True;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Kingston's Coffee</title>
        <link rel="browser tab icon" href="img/coffe-logo.png">
        <style>
            <?php include "style.css" ?>
        </style>
        <link href='http://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'> 
    </head>

    
    <body>
      <nav class="navbar">
        <div class="container">
          <div class="navbar-menu">
            <a href="index.php">User Login</a>
          </div>
        </div>
      </nav>

      <div class="description">
        <h2> Welcome To</h2>
        <h1>Kingston's Coffee</h1>
      </div>

      <div class="login-form">
        <form action="" method="post" name="login_admin" autocomplete="off">
                <table  align=center width='100%' id='tab'>
                    <tr>
                        <th colspan=2 style="background: brown" align=center>Login Admin</th>
                    </tr>
                    <tr>
                        <th colspan=2 align=center style="background: brown;"><?php if (isset($failed)) { ?>
                                                                                <div style="color: antiquewhite">Wrong Username or Password</div>
                                                                            <?php } ?>
                        </th>
                    </tr>
                    <tr>
                        <th colspan=2>Username</th>
                    </tr>
                    <tr>
                        <td colspan=2 align=center><input style='font-size: 20px' type='text' name='username_admin' placeholder='Username' class='form'></td>
                    </tr>
                    <tr>
                        <th colspan=2 >Password</th>
                    </tr>
                    <tr>
                        <td colspan=2 align=center><input style='font-size: 20px'  type='password' name='password_admin' placeholder='Password' class='form'></td>
                    </tr>
                    <tr>
                        <td align=center ><input name='submit_admin' type="submit" value="Login" class="Button2"></td>
                    </tr>
                    <tr class=register>
                    <td>belum punya akun ?</td>
                </tr>
                <tr class=register>
                    <td><a href="admin-register.php"><br>daftar disini</a></td>
                </tr>
                </table>
            </form>
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