<?php
session_start();

$_SESSION['usernameUser'] = '';
$_SESSION['statusUser'] = '';

unset($_SESSION['usernameUser']);
unset($_SESSION['statusUser']);

session_destroy();
session_unset();

header("location:../index2.php?pesan=logout");
