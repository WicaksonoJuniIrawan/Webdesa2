<?php
  $conn = mysqli_connect("localhost", "root", "", "webdesa");
  if( isset($_POST["submit"])){
    $Nama = $_POST["Nama"];
    $Email = $_POST["Email"];
    $Password = $_POST["Password"];
    $query = "INSERT INTO pengguna VALUES ('', '$Nama', '$Email', '$Password')";
    mysqli_query($conn, $query);
    if ( ($_POST) > 0) {
      echo "
      <script>
        alert('Akun Berhasil Ditambah!!!');
        document.location.href= 'login.php';
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
    <title>Login</title>
  </head>
    <link rel="stylesheet" href="login.css">
  <body>
        <div class="login-page">
          <div class="form">
              <form class="login-form" action="" method="post">
              <input type="text" placeholder="Nama" name="Nama" required/>
              <input type="text" placeholder="Email Addres" name="Email" required/>
              <input type="password" placeholder="Password" name="Password" required/>
              <button type="submit" name="submit">Buat</button>
              <p class="message">Sudah Punya Akun? <a href="login.php">Masuk</a></p>
            </form>
          </div>
        </div>
  </body>
</html>
