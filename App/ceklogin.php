<?php
session_start();
include "functions.php";

$username = htmlspecialchars($_POST['username']);
$password = mysqli_real_escape_string($koneksi, $_POST['password']);

$result = getData("SELECT * FROM users WHERE username = '$username' OR email = '$username'");

if ($result > 0) {
  $row = query("SELECT password FROM users WHERE username = '$username' OR email = '$username'")[0];

  if (password_verify($password, $row["password"])) {
    $_SESSION['usernameUser'] = $username;
    $_SESSION['statusUser'] = 'login';
    header("location: ../home.php");
  } else {
    header("location: ../index.php?pesan=gagal");
  }
} else {
  header("location: ../index.php?pesan=gagal");
}
