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
                <a href="admin-login.php">Admin Login</a>
                <a href="index.php">User Login</a>
            </div>
        </div>
    </nav>

    <div class="description">
        <h2> Welcome To</h2>
        <h1>Kingston's Coffee</h1>
    </div>

    <div class="login-form">
        <form action="" method="post" autocomplete="off">
            <table align=center width='100%' id='tab'>
                <tr>
                    <th colspan=2 style="background: brown" align=center>Register</th>
                </tr>
                </tr>
                <tr>
                    <th colspan=2>Username</th>
                </tr>
                <tr>
                    <td colspan=2 align=center><input style='font-size: 20px' type='text' name='username_user' placeholder='Username' class='form'></td>
                </tr>
                <tr>
                    <th colspan=2>Email</th>
                </tr>
                <tr>
                    <td colspan=2 align=center><input style='font-size: 20px' type='text' name='username_email' placeholder='Email' class='form'></td>
                </tr>
                <tr>
                    <th colspan=2>Password</th>
                </tr>
                <tr>
                    <td colspan=2 align=center><input style='font-size: 20px' type='password' name='password_register' placeholder='Password' class='form'></td>
                </tr>
                <tr>
                    <td align=center><input name='submit_register' type="submit" value="Submit" class="Button2"></td>
                </tr>
        </form>
        < </div>

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

<?php 
    require 'connect.php';

    if (isset($_POST['submit_register'])) 
    {
        
    $Username = $_POST['username_user'];
    $Email = $_POST['username_email'];
    $Password = $_POST['password_register'];

        // cek username telah digunakan atau belum
        $user = mysqli_query($conn, "SELECT * FROM akun WHERE username = '$Username'");

        if(mysqli_num_rows($user) > 0)
        {
            echo "<script>
                alert('Username telah digunakan, silahkan gunakan username lain')
            </script>";
        }


        else
        {
            $Password = password_hash($Password, PASSWORD_DEFAULT);
            $psw = password_verify("", $Password);
            $query = "insert into akun (email, username, pass) values ('$Email', '$Username', '$Password')";
            $result = mysqli_query($conn, $query);
        
            if($result)
            {
                echo "<script>
                    alert('Registrasi Berhasil !');
                </script>";
            }

            else
            {
                echo "<script>
                    alert('Registrasi Gagal !');
                </script>";
            }
        }
}
?>