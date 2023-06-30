<?php
include 'functions.php';

$nama = input($_POST['nama']);
$email = input($_POST['email']);
$password1 = mysqli_real_escape_string($koneksi, $_POST['password1']);
$password2 = mysqli_real_escape_string($koneksi, $_POST['password2']);

// cek duplikasi data
$cekDuplikasi = getData("SELECT * FROM users WHERE email = '$email'");
if ($cekDuplikasi > 0) {
  echo "<script>
    alert('Email Sudah Tersedia');
    history.go(-1);
  </script>";
  die;
}

// cek verifikasi password
if ($password1 !== $password2) {
  echo "<script>
    alert('Password Verifikasi Tidak Sama');
    history.go(-1);
  </script>";
  die;
}

// password hass 
$passwordhash = password_hash($password1, PASSWORD_DEFAULT);

// gemerate username
$username = explode("@", $email)[0];
$randomNumber = rand(1, 1000000);
$username .= $randomNumber;


$sql = "INSERT INTO users VALUE('','$nama','$email','$username','$passwordhash')";
mysqli_query($koneksi, $sql);
$cek = mysqli_affected_rows($koneksi);
if ($cek > 0) {
  header("location: ../index.php?pesan=daftar");
} else {
  header("location: ../");
}
