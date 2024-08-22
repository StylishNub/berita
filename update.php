<?php
$id = $_GET['id'];

$koneksi = mysqli_connect("localhost","root","","news");
$perintah = mysqli_query($koneksi, "SELECT * FROM berita where id = $id")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Edit</title>
</head>
<body>
<h1 style="margin-left: 30px;">Edit Berita </h1>

<?php
        foreach($perintah as $r) {
        ?>
    <form action="update.php?id=<?php echo $r['id'];?>" method="post" style="margin-left: 30px;">
    <div class="form-group row mb-3" >
      <label class="col-sm-2 col-form-label ">judul</label>   
      <div class="col-sm-4">
       <div class="custom-file">   
         <input class="form-control" type="text"  name="judul" style="border-color: black;" required value="<?php echo $r['judul']?>">
      </div>
     </div>
   </div>

   <div class="form-group row mb-3">
      <label for="nama" class="col-sm-2 col-form-label">Berita</label>   
      <div class="col-sm-4">   
       <input class="form-control" type="text" name="berita" style="border-color: black;" required value="<?php echo $r['berita']?>">
     </div> 
   </div>

   <div class="form-group row mb-3">
      <label for="nama" class="col-sm-2 col-form-label">Penulis</label>   
      <div class="col-sm-4">   
       <input class="form-control" type="text" name="penulis" style="border-color: black;" required value="<?php echo $r['penulis']?>">
     </div> 
   </div>

   <div class="form-group row mb-3">
      <label for="tanggal" class="col-sm-2 col-form-label">Tanggal Berita</label>   
      <div class="col-sm-3">   
        <input class="form-control" type="date" name="date" style="border-color: black;" required value="<?php echo $r['date']?>">
     </div>
   </div>
<?php
        }
        ?>
   <input type="submit" name="submit" value="Update">
</form>
<button style="margin-left:30px; margin-top:5px; border:1px solid; " type="button"><a href="index.php" style="color: black; text-decoration:none;">kembali</a></button>
    <br>
    <?php
    if (isset($_POST['submit'])){
        $judul = $_POST['judul'];
        $berita = $_POST['berita'];
        $penulis = $_POST['penulis'];
        $date = $_POST['date'];

        $koneksi = mysqli_connect("localhost","root","","news");
        mysqli_query($koneksi, "UPDATE berita SET judul = '$judul', berita = '$berita', penulis = '$penulis', date = '$date' WHERE id = '$id'");
        header('Location:index.php');
    }
    ?>
</body>
</html>