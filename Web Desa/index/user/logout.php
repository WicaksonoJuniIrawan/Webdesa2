<!DOCTYPE html>
<html>
  <head>

    <meta charset="utf-8">
    <title>logout</title>
  </head>
  <body>


          <?php
            session_start();
            session_unset();
            session_destroy();

            header("location:../../home.php");
           ?>
  </body>

</html>
