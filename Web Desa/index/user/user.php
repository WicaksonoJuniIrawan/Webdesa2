<?php
$conn = mysqli_connect("localhost", "root", "", "webdesa");
function query($query) {
  global $conn;
  $result = mysqli_query($conn, $query);
  $rows = [];
  while($row = mysqli_fetch_assoc($result)){
    $rows[] = $row;
  }
  return $rows;
}
$user = query("SELECT * FROM pengguna")
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Daftar User</title>
     <link rel="stylesheet" href="assets/css/font-awesome.min.css">
     <style media="screen">

       .tabel{
         text-align: center;
       }
       .header{
         max-height: 200px;
         background: rgb(27, 33, 45);
       }
       .header::after{
         clear: both;
         content: '';
         display: block;
       }
       .profil{
         background: linear-gradient(-30deg, rgb(36, 46, 51),rgb(1, 127, 155));
         width: 10%;
         float:left;
         font-size: 1em;
         text-align: center;
         line-height: 50px;
       }

 .profil> a{
   padding-left: 2%;
   color:white;
   text-decoration: none;
 }

 .profil > a:hover{
   text-decoration: underline;
   color:black;
   transform: scale(1.2);
 }
     </style>
   </head>
   <body>
     <div class="header">
       <div class="profil">
         <a href="#"><i class="fa fa-home" aria-hidden="true" style="font-size:50pt;color:rgb(34, 42, 43);"></i></a>
        </div>
        <div style="width: 20%; text-align:center;float:left; line-height: 76px; background:rgb(1, 127, 155);color:black;font-size:20pt;">
          <a href="index.html" style="color:black;text-decoration:none;">Dashboard</a>
        </div>
        <div style="text-align:center; font-size:20pt; color:white; font-family:italic;line-height: 76px;">
          Daftar User
        </div>
     </div>
    <div class="tabel">
     <table border="0" cellpadding="10" cellspacing="0" style="width:100%;">
       <tr style="background:rgb(183, 183, 183);;">
         <th>No</th>
         <th>Nama</th>
         <th>Email</th>
         <th>Password</th>
         <th>Action</th>
       </tr>
       <?php $i=1 ?>
       <?php foreach ($user as $key ) :?>
       <tr>
         <td><?= $i++; ?></td>
         <td><?= $key["Nama"]?></td>
         <td><?= $key["Email"]?></td>
         <td><?= $key["Password"]?></td>
         <td><a href="delete.php?id=<?= $key["ID"]?>" class="delate" style="background:grey;padding:5px;color:black;">DELATE</a></td>
       </tr>
     <?php endforeach; ?>
     </table>
    </div>
   </body>
 </html>
