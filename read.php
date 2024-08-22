<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Dashboard</title>
</head>
<body>
    <?php
    $koneksi = mysqli_connect("localhost","root","","news");
    $perintah = mysqli_query($koneksi, "SELECT * FROM berita");
    ?>
                <?php
                foreach($perintah as $r) {
                ?>
                    <div style="width: 80%; margin-left:30px;">
                    <h3 style="margin-top: 20px;">Judul Berita:<?= $r['judul'] ?></h3>
                    <h3>Nama Penulis :<?= $r['penulis'] ?></h3>
                    <h3 >Tanggal Berita :<?= $r['date'] ?></h3>
                        <p style="margin-top:50px;"><?= $r['berita'] ?></p>
                    </div>

                <?php
                }
                ?>
        <br>
        <button style="margin-left:30px; margin-top:5px; border:1px solid;" type="button"><a href="index.php" style="color: black; text-decoration:none;">kembali</a></button>
</body>
</html>
