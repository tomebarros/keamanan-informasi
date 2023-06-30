<?php
$koneksi = mysqli_connect("localhost", "root", "", "dbKeamananInformasi");
if (mysqli_connect_errno()) {
  echo "Koneksi DB Gagal : " . mysqli_connect_error();
}

function query($query)
{
  global $koneksi;
  $result = mysqli_query($koneksi, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function getData($query)
{
  global $koneksi;
  $result = mysqli_query($koneksi, $query);
  return mysqli_num_rows($result);
}

function input($data)
{
  $sting_replace = array('\'', ';', '[', ']', '{', '}', '|', '~', '<', '>', '+', '&', '#', '!');
  $data = str_replace($sting_replace, '', $data);
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
