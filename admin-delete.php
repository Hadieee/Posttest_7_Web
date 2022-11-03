<?php
    require "connect.php";
    
    $id = $_GET['id'];

    $hapus = mysqli_query($conn, "SELECT gambar from barang WHERE id=$id");
    $del = mysqli_fetch_assoc($hapus);
    unlink('img/'.$del['gambar']);


    $result = mysqli_query($conn, "DELETE FROM barang WHERE id=$id");

    if ($result){
        echo "
        <script> 
            alert ('Data Berhasil Dihapus ! ');
            document.location.href = 'admin.php';
        </script>";
    } else {
        echo "
        <script> 
            alert ('Gagal Dihapus ! ');
            document.location.href = 'admin.php';
        </script>";
    }


?>  