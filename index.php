<?php
include 'App/functions.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php include "cdn.php"; ?>
  <title>Tugas Keamanan Informasi</title>
  <link rel="stylesheet" href="css/style.css" />
</head>

<body class="da">

  <div class="container">
    <div class="alert"></div>
    <form action="App/ceklogin.php" method="post">
      <i class="fas fa-moon icon" id="theme-toggle"></i>

      <h1>Login</h1>
      <div class="input-group">
        <input type="text" id="email" name="username" required autocomplete="off" />
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
      <button type="submit">Login</button>

      <div class="title">
        <span></span>
        <a href="index2.php">POST</a>
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