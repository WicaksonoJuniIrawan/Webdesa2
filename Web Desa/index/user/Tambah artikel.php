<?php

$conn = mysqli_connect("localhost", "root", "", "webdesa");
if( isset($_POST["submit"])){
  $judul = $_POST["judul"];
  $penulis = $_POST["penulis"];
  $isi = $_POST["isi"];
  $query = "INSERT INTO artikel VALUES ('', '$judul', '$penulis', '$isi')";
  mysqli_query($conn, $query);
  if ( ($_POST) > 0) {
    echo "
    <script>
      alert('Berita Berhasil Ditambah!!!');
      document.location.href= 'artikel.php';
    </script>
    ";
  }else {
    echo "
    <script>
      alert('Mohon Cek Lagi');
      document.location.href='daftar.php';
    </script>
    ";
    }

}

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Tulis Artikel</title>
  </head>
    <link rel="stylesheet" href="login.css">
  <body>
    <div class="login-page">
      <div class="form">
        <form class="login-form" action="" method="post">
          <input type="text" name="id" value="id" hidden="">
          <input type="text" placeholder="judul" name="judul" required/>
          <input type="text" placeholder="penulis " name="penulis" required/>
          <input type="text" placeholder="isi" name="isi" required/>
          <button type="submit" name="submit">Buat</button>
          <p class="message"><a href="berita.php" style="padding-left:50%;">kembali</a></p>
        </form>
      </div>
    </div>
  </body>
</html>
