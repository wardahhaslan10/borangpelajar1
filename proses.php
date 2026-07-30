<?php
session_start();

$kosong = false;

// Nama
if (empty($_POST['nama'])) {
    $_SESSION['err_nama'] = "Nama belum diisi";
    $kosong = true;
} else {
    $_SESSION['nama'] = $_POST['nama'];
}

// IC
if (empty($_POST['ic'])) {
    $_SESSION['err_ic'] = "Kad Pengenalan belum diisi";
    $kosong = true;
} else {
    $_SESSION['ic'] = $_POST['ic'];
}

// Telefon
if (empty($_POST['telefon'])) {
    $_SESSION['err_telefon'] = "Nombor Telefon belum diisi";
    $kosong = true;
} else {
    $_SESSION['telefon'] = $_POST['telefon'];
}

// Email
if (empty($_POST['email'])) {
    $_SESSION['err_email'] = "Email belum diisi";
    $kosong = true;
} else {
    $_SESSION['email'] = $_POST['email'];
}

// Alamat
if (empty($_POST['alamat'])) {
    $_SESSION['err_alamat'] = "Alamat belum diisi";
    $kosong = true;
} else {
    $_SESSION['alamat'] = $_POST['alamat'];
}

// Jantina
if (empty($_POST['jantina'])) {
    $_SESSION['err_jantina'] = "Jantina belum dipilih";
    $kosong = true;
} else {
    $_SESSION['jantina'] = $_POST['jantina'];
}

// Program
if (empty($_POST['program'])) {
    $_SESSION['err_program'] = "Program belum dipilih";
    $kosong = true;
} else {
    $_SESSION['program'] = $_POST['program'];
}

// Jika ada ralat
if ($kosong) {
    header("Location: borang.php");
    exit();
}

// Jika berjaya
header("Location: papardata.php");
exit();