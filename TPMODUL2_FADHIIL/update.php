<!-- BUAT FUNGSI EDIT DATA ( ketika data berhasil di tambahkan maka akan dialihkan ke halaman katalog buku) -->
<?php
include 'connect.php';

if (isset($_GET['id']) && $_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_GET['id'];
    $judul = mysqli_real_escape_string($conn, $_POST['judul']);
    $penulis = mysqli_real_escape_string($conn, $_POST['penulis']);
    $tahun_terbit = mysqli_real_escape_string($conn, $_POST['tahun_terbit']);

    
    $query = "UPDATE tb_buku SET 
                judul = '$judul', 
                penulis = '$penulis', 
                tahun_terbit = '$tahun_terbit' 
              WHERE id = '$id'";

    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "<script>
                alert('Data buku berhasil diperbarui!');
                window.location.href='katalog_buku.php';
              </script>";
    } else {
        echo "<script>
                alert('Gagal memperbarui data buku!');
                window.history.back();
              </script>";
    }
} else {
    echo "<script>
            alert('Akses tidak valid!');
            window.location.href='katalog_buku.php';
          </script>";
}
?>
