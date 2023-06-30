<?php
include 'App/functions.php';
session_start();

if (isset($_GET['submit'])) {
  $username = htmlspecialchars($_GET['username']);
  $password = mysqli_real_escape_string($koneksi, $_GET['password']);
  $result = getData("SELECT * FROM users WHERE username = '$username' OR email = '$username'");

  if ($result > 0) {
    $row = query("SELECT password FROM users WHERE username = '$username' OR email = '$username'")[0];
    if (password_verify($password, $row["password"])) {
      $_SESSION['usernameUser'] = $username;
      $_SESSION['statusUser'] = 'login';
      header("location: home.php?username=$username&pass=$password");
    } else {
      echo "
      <script>
      alert('username atau password salah')
      </script>
      ";
    }
  } else {
    echo "
      <script>
      alert('username atau password salah')
      </script>
      ";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <?php include 'cdn.php'; ?>
  <title>Keamanan Informasi | login GET</title>
  <link rel="stylesheet" href="css/style.css" />
</head>

<body>

  <div class="container">
    <div class="alert"></div>
    <form action="homeget.php" method="GET">

      <i class="fas fa-moon icon" id="theme-toggle"></i>
      <h1>Login</h1>
      <div class="input-group">
        <input type="text" id="username" name="username" required autocomplete="off" />
        <span>Email / Username</span>
      </div>

      <div class="input-group">
        <input type="password" id="password" name="password" required />
        <span>Password</span>
        <i class="fa-solid fa-lock" id="lock"></i>
      </div>
      <div class="lupa-password">
        <a href="#">Lupa Password?</a>
      </div>
      <button type="submit" name="submit">Login</button>

      <div class="title">
        <span></span>
        <a href="index.php">Get</a>
        <span></span>
      </div>

      <p>Belum punya Akun?<a href="daftar.php">Daftar</a></p>
    </form>
  </div>


  <script src="js/dark-mode.js"></script>
  <script src="js/pesan.js"></script>
  <script>
    const lock = document.querySelector('#lock');

    lock.addEventListener('click', function() {
      const inputPassword = document.querySelector('#password');

      if (inputPassword.type == 'password') {
        inputPassword.type = 'text'
      } else {
        inputPassword.type = 'password'
      }

    });
  </script>
</body>

</html>