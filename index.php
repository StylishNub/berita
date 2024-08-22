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
    <br>
    <button style="margin-left: 30px;"><a href="create.php" style="color:black; text-decoration:none;">Tambah Data</a></button>
    <div class="table-responsive mt-3" style="margin-left: 30px; margin-right:30px;">
        <table class="table table-striped table-hover table-bordered">
            <thead>
                <tr>
                    <th>No.</th>
                    <th style="max-width: 200px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">Judul Berita</th>
                    <th style="max-width: 200px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">Berita</th>
                    <th>Penulis</th>
                    <th>Tanggal Berita</th>
                    <th>Ubah Data</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 0;
                foreach($perintah as $r) {
                    $no++;
                ?>
                <tr>

                    <td><?php echo $no ?></td>
                    <td class="text-truncate" style="max-width: 200px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;"><a href="read.php" style="text-decoration: none; color:black;"><?= $r['judul'] ?></a></td>
                    <td class="text-truncate" style="max-width: 200px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;"><?= $r['berita'] ?></td>
                    <td><?= $r['penulis'] ?></td>
                    <td><?= $r['date'] ?></td>
                    <td>
                        <a class="btn btn-sm " href="update.php?id=<?php echo $r['id'];?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-up-right" style="color:green;" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M6.364 13.5a.5.5 0 0 0 .5.5H13.5a1.5 1.5 0 0 0 1.5-1.5v-10A1.5 1.5 0 0 0 13.5 1h-10A1.5 1.5 0 0 0 2 2.5v6.636a.5.5 0 1 0 1 0V2.5a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v10a.5.5 0 0 1-.5.5H6.864a.5.5 0 0 0-.5.5"/>
                            <path fill-rule="evenodd" d="M11 5.5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793l-8.147 8.146a.5.5 0 0 0 .708.708L10 6.707V10.5a.5.5 0 0 0 1 0z"/>
                        </svg></i></a>
                        <a class="btn btn-sm " href="delete.php?id=<?php echo $r['id'];?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" style="color:red;" viewBox="0 0 16 16">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                            <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                        </svg></a>
                    </td>
                </tr>
            
                <?php
                }
                ?>
            </tbody>
        </table>
        <br>
    </div>
</body>
</html>
