<!DOCTYPE html>
<html lang="en">

<head>

  <?php include 'cdn.php'; ?>
  <title>Tugas Keamanan Informasi | Registrasi</title>
  <link rel="stylesheet" href="css/style.css" />
</head>

<body>
  <div class="container">
    <div class="alert"></div>

    <form action="App/insertuser.php" method="post">
      <i class="fas fa-moon icon" id="theme-toggle"></i>
      <h1>Registrasi</h1>
      <div class="input-group">
        <input type="text" name="nama" required placeholder="Nama Lengkap" autocomplete="off" />
      </div>

      <div class="input-group">
        <input type="email" name="email" required placeholder="Alamat Email" autocomplete="off" />
      </div>

      <div class="input-group">
        <input type="password" name="password1" required placeholder="Password" autocomplete="off" />
      </div>

      <div class="input-group">
        <input type="password" name="password2" required placeholder="Password Verifikasi" />
      </div>

      <button type="submit">Daftar</button>

      <div class="title">
        <span></span>
        <p>Atau</p>
        <span></span>
      </div>

      <p>Sudah Punya Akun?<a href="index.php">Login</a></p>
    </form>
  </div>

  <script src="js/dark-mode.js"></script>
</body>

</html>