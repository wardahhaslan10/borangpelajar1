<?php
session_start();

$kosong = false;

// Nama
if (isset($_POST['nama']) && $_POST['nama'] != "") {
    $_SESSION['nama'] = $_POST['nama'];
} else {
    $_SESSION['err_nama'] = "Nama belum diisi";
    $kosong = true;
}
// IC
if (isset($_POST['ic']) && $_POST['ic'] != "") {
    $_SESSION['ic'] = $_POST['ic'];
} else {
    $_SESSION['err_ic'] = "Kad Pengenalan belum diisi";
    $kosong = true;
}
// Telefon
if (isset($_POST['telefon']) && $_POST['telefon'] != "") {
    $_SESSION['telefon'] = $_POST['telefon'];
} else {
    $_SESSION['err_telefon'] = "Nombor Telefon belum diisi";
    $kosong = true;
}
// Email
if (isset($_POST['email']) && $_POST['email'] != "") {
    $_SESSION['email'] = $_POST['email'];
} else {
    $_SESSION['err_email'] = "Email belum diisi";
    $kosong = true;
}
// Alamat
if (isset($_POST['alamat']) && $_POST['alamat'] != "") {
    $_SESSION['alamat'] = $_POST['alamat'];
} else {
    $_SESSION['err_alamat'] = "Alamat belum diisi";
    $kosong = true;
}
// Jantina
if (isset($_POST['jantina'])) {
    $_SESSION['jantina'] = $_POST['jantina'];
} else {
    $_SESSION['err_jantina'] = "Jantina belum dipilih";
    $kosong = true;
}
// Program
if (isset($_POST['program']) && $_POST['program'] != "") {
    $_SESSION['program'] = $_POST['program'];
} else {
    $_SESSION['err_program'] = "Program belum dipilih";
    $kosong = true;
}
// Jika ada kesalahan
if ($kosong) {
    header("Location: borang.php");
    exit();
}
// Jika semua lengkap
header("Location: papardata.php");
exit();
?>