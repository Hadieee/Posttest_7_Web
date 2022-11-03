<?php
session_start();
require("connect.php");

if (!isset($_SESSION['Username'])) {
    echo "<script>
        alert('Akses Ditolak, Silahkan Login Terlebih Dahulu !');
        document.location.href = 'admin-login.php';
    </script>";
}

if (isset($_GET['submit-search'])) {
    $keyword = $_GET['search-keyword'];
    $result = mysqli_query($conn, "SELECT * FROM barang WHERE nama LIKE '%$keyword%' OR merek LIKE '%$keyword%'");
} else {
    $result = mysqli_query($conn, "SELECT * FROM barang");
}

$barang = [];

while ($baris = mysqli_fetch_assoc($result)) {
    $barang[] = $baris;
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
    <script src="https://kit.fontawesome.com/d13bcdbd21.js" crossorigin="anonymous"></script>
</head>


<body>
    <nav class="navbar">
        <div class="container">
            <div class="navbar-menu">
                <a href="admin-input.php" class="create-items"">Create Items</a>
                <a href=" admin-logout.php">Logout</a>
            </div>
        </div>
    </nav>
    <div class="description-admin">
        <div>
            <h2>Welcome To</h2>
            <h1>Kingston's Coffee</h1>
        </div>
    </div>

    <div class="search">
        <form action="" method="get">
            <table>
                <tr>
                    <td>
                        <button class="search-btn" type="submit" name="submit-search"><i class="fas fa-search"></i></button>
                    </td>
                    <td>
                        <div class="search-bar">
                            <input type="text" placeholder="Search Here..." class="search-input" name="search-keyword">
                        </div>
                    </td>
                </tr>
            </table>
        </form>
    </div>


    <div class="content read">
        <div id=tabel>
            <table>
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Merek</td>
                        <td>Nama</td>
                        <td>Tipe</td>
                        <td>Harga</td>
                        <td>Ketersediaan</td>
                        <td>Gambar</td>
                        <td>Histori</td>
                        <td colspan="2">Modifikasi</td>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($barang as $data) : ?>
                        <tr>
                            <td><?= $data['id'] ?></td>
                            <td><?= $data['merek'] ?></td>
                            <td><?= $data['nama'] ?></td>
                            <td><?= $data['tipe'] ?></td>
                            <td><?= $data['harga'] ?></td>
                            <td><?= $data['stok'] ?></td>
                            <td><img width="100px" src="img/<?php echo $data['gambar']; ?>" alt=""></td>
                            <td><?= $data['tanggal'] ?></td>
                            <td class="actions">
                                <a href="admin-update.php?id=<?php echo $data['id']; ?>" class="edit"><i class="fa-solid fa-pencil"></i></a>
                                <a href="admin-delete.php?id=<?php echo $data['id']; ?>" class="trash"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <script>
        function form_muncul() {
            var form = document.getElementById("input_form");
            if (form.style.display == "none") {
                form.style.display = "flex";
            } else {
                form.style.display = "none";
            }
        }

        function changeBtn() {
            let change = document.getElementById("surprise");
            change.style.transform = "rotate(50deg)";
            change.style.margin = "10px";

        }
    </script>

    <footer id="footer-admin">
        Copyright &copy; 2022
        Designed by Hadiee<br>
        <button onclick="changeBtn()" id="surprise">sstt!!</button>
    </footer>
</body>

</html>