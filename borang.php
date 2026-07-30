<?php
session_start();

$err_nama = $_SESSION['err_nama'] ?? "";
$err_ic = $_SESSION['err_ic'] ?? "";
$err_telefon = $_SESSION['err_telefon'] ?? "";
$err_email = $_SESSION['err_email'] ?? "";
$err_alamat = $_SESSION['err_alamat'] ?? "";
$err_jantina = $_SESSION['err_jantina'] ?? "";
$err_program = $_SESSION['err_program'] ?? "";

unset($_SESSION['err_nama']);
unset($_SESSION['err_ic']);
unset($_SESSION['err_telefon']);
unset($_SESSION['err_email']);
unset($_SESSION['err_alamat']);
unset($_SESSION['err_jantina']);
unset($_SESSION['err_program']);
?>