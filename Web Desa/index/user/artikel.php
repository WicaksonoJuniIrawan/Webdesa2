<?php
  require'proses_berita.php';
  $artikel = query("SELECT * FROM artikel");
   ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>web desa</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
  </head>
  <style media="screen">

.box {
  position: relative;
  z-index: 1;
  background: grey;
  width: 1010px;
  height: auto;
  margin: 0 0 0 290PX;
  padding: 15px;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}

  </style>

  <body style="background-image: url(image1.jpg);">
      <header style="position:relative">
        <div class="row1">
          <h1>Artikel</h1>
        </div>
        <div class="row2">
          <div class="row2">
            <div style="position:absolute;right:20px;height:60px">
            <a href="logout.php?logout=true" class="centerY logout" style="text-decoration:none;float:left;">
              Logout<i class="fa fa-power-off" style="font-size:15pt;margin:5px;"></i>
            </a>
            <div class="clear" style="clear:both">
            </div>
          </div>
            </header>

       <div class="left">
         <div class="profilebox">
               <div class="centerY">
                   <div class="circle">
                       <div class="centerY" align="center" >
                         <a href="#"><i class="fa fa-home" aria-hidden="true" style="font-size:50pt;color:rgb(34, 42, 43);"></i></a>
                       </div>
                   </div>
               </div>
         </div>
          <div class="navigasi">
            <ul>
              <li><a href="index.html">Dashboard</a></li>
              <li><a href="artikel.php">Artikel</a></li>
              <li><a href="admin/login.php">User</a></i></span></li>
            </ul>
          </div>
      </div>
      <?php foreach ($artikel as $row ) :?>
        <div class="box">
          <h3 style="color:white; font-size:30pt;text-align:center;"><?= $row['judul']; ?></h3>
          <div class="artikel">
          <?php
                if (isset($_POST["submit"])) {
                  echo "Penulis Artikel : "; echo  $row["penulis"]; echo "<br><br>";
                  echo "Isi Artikel : "; echo "<br>"; echo$row["isi"];
                }
               ?>
            <br><br>
            <a href="deletee.php?id=<?= $row["id"]?>" style="text-decoration:none; color:black; padding:10px 10px 10px 10px;background:white;">Delete</a>
         </div>
        </div>
      <?php endforeach;  ?>
      <div style="margin:100px 25% 0 40% ;float: right;background:rgb(43, 49, 66);">
        <form class="" action="" method="post">
          <button type="submit" name="submit" style=";font-size:20px; padding:20px 20px 20px 20px" >Tampilkan  isi artikel</button>
          <a href="Tambah artikel.php"
            style="color:white;  padding:50px 50px 50px 50px; text-decoration:none; font-size:20px; font-family:italic;text-align:center;">
            Tambah Artikel
          </a>
        </form>
      </div>
  </body>
</html>
