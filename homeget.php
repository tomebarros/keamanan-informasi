<?php
require_once 'App/functions.php';
session_start();

$username = htmlspecialchars($_GET['username']);
$password = mysqli_real_escape_string($koneksi, $_GET['password']);
$result = getData("SELECT * FROM users WHERE username = '$username' OR email = '$username'");

if ($result > 0) {
  $row = query("SELECT password FROM users WHERE username = '$username' OR email = '$username'")[0];
  if (password_verify($password, $row["password"])) {
    $_SESSION['usernameUser'] = $username;
    $_SESSION['statusUser'] = 'login';
  } else {
    echo "
      <script>
      alert('username atau password salah');
      history.go(-1);
      </script>
      ";
  }
} else {
  echo "
    <script>
      alert('username atau password salah');
      history.go(-1);
    </script>";
  die;
}

if ($_SESSION['statusUser'] != "login") {
  header("location: index2.php?pesan=belumlogin");
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
    <a href="App/logout2.php">Logout</a>
    <p class="copy">GET&copy;</p>
  </div>


  <script src="js/script.js"></script>
</body>

</html>