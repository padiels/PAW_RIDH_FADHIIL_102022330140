<?php
include 'connect.php';

// Cek Apakah ada data yang dikirim
if (isset($_POST['create'])) {



    // Definisikan query untuk insert data

    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $tahun_terbit = $_POST['tahun_terbit'];

    mysqli_query($conn, $query);

    if (mysqli_affected_rows($conn) > 0) {
        header("location: katalog_buku.php");
    } else {
        echo "<script>alert('Data gagal ditambahkan');</script>";
    }
}
?>