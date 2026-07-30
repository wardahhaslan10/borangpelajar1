<?php
session_start();

$kosong = false;


// Nama
if (!empty($_POST['nama'])) {
    $_SESSION['nama'] = $_POST['nama'];
} else {
    $_SESSION['err_nama'] = "Nama belum diisi";
    $kosong = true;
}


// IC
if (!empty($_POST['ic'])) {
    $_SESSION['ic'] = $_POST['ic'];
} else {
    $_SESSION['err_ic'] = "Kad Pengenalan belum diisi";
    $kosong = true;
}


// Telefon
if (!empty($_POST['telefon'])) {
    $_SESSION['telefon'] = $_POST['telefon'];
} else {
    $_SESSION['err_telefon'] = "Telefon belum diisi";
    $kosong = true;
}


// Email
if (!empty($_POST['email'])) {
    $_SESSION['email'] = $_POST['email'];
} else {
    $_SESSION['err_email'] = "Email belum diisi";
    $kosong = true;
}


// Alamat
if (!empty($_POST['alamat'])) {
    $_SESSION['alamat'] = $_POST['alamat'];
} else {
    $_SESSION['err_alamat'] = "Alamat belum diisi";
    $kosong = true;
}


// Jantina
if (isset($_POST['jantina'])) {
    $_SESSION['jantina'] = $_POST['jantina'];
} else {
    $_SESSION['err_jantina'] = "Sila pilih jantina";
    $kosong = true;
}


// Program
if (!empty($_POST['program'])) {
    $_SESSION['program'] = $_POST['program'];
} else {
    $_SESSION['err_program'] = "Sila pilih program";
    $kosong = true;
}


// Jika ada kesalahan
if ($kosong == true) {

    header("Location: borang.php");
    exit();

}


// Jika semua lengkap
header("Location: papardata.php");
exit();

?>