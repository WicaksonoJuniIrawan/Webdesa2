<?php if (isset($_GET['error'])): ?>
  <script>
    alert("Gagal Login!!!");
    document.location.href='login.php'
  </script>
<?php endif; ?>
