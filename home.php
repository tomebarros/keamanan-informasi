<?php
require_once 'App/functions.php';
session_start();
if ($_SESSION['statusUser'] != "login") {
  header("location: index.php?pesan=belumlogin");
}

$username = $_SESSION['usernameUser'];
$dataUser = query("SELECT * FROM users WHERE username = '$username' OR email = '$username'")[0];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'cdn.php'; ?>
  <title>Home</title>

  <link rel="stylesheet" href="css/home.css">
</head>

<body>
  <div class="content">
    <p class="username"><?= "@" . $dataUser['username']; ?></p>
    <h3>Halo Selamat Datang <?= $dataUser['nama']; ?></h3>
    <a href="App/logout.php">Logout</a>
    <p class="copy">&copy;</p>
  </div>

  <script src="js/dark-mode.js"></script>
</body>

</html>