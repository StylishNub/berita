<?php
$id = $_GET['id'];

$koneksi = mysqli_connect("localhost","root","","news");
mysqli_query($koneksi, "DELETE from berita where id = $id");
echo "<script>alert('Data berhasil dihapus! tekan ok untuk melihat'); window.location = 'index.php'</script>";
?>