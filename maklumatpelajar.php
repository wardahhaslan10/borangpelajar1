<?php
session_start();

$kosong = false;

// Nama
if (isset($_POST['nama']) && $_POST['nama'] != "") {
    $nama = $_POST['nama'];
} else {
    $_SESSION['nama'] = "Nama belum diisi";
    $kosong = true;
}
// IC
if (isset($_POST['ic']) && $_POST['ic'] != "") {
    $ic = $_POST['ic'];
} else {
    $_SESSION['ic'] = "Kad Pengenalan belum diisi";
    $kosong = true;
}
// Telefon
if (isset($_POST['telefon']) && $_POST['telefon'] != "") {
    $telefon = $_POST['telefon'];
} else {
    $_SESSION['telefon'] = "Nombor Telefon belum diisi";
    $kosong = true;
}
// Email
if (isset($_POST['email']) && $_POST['email'] != "") {
    $email = $_POST['email'];
} else {
    $_SESSION['email'] = "Email belum diisi";
    $kosong = true;
}
// Alamat
if (isset($_POST['alamat']) && $_POST['alamat'] != "") {
    $alamat = $_POST['alamat'];
} else {
    $_SESSION['alamat'] = "Alamat belum diisi";
    $kosong = true;
}
// Jantina
if (isset($_POST['jantina'])) {
    $jantina = $_POST['jantina'];
} else {
    $_SESSION['jantina'] = "Jantina belum dipilih";
    $kosong = true;
}
// Program
if (isset($_POST['program']) && $_POST['program'] != "") {
    $program = $_POST['program'];
} else {
    $_SESSION['program'] = "Program belum dipilih";
    $kosong = true;
}
// Jika kosong balik borang
if ($kosong) {
    header("Location: borang.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Maklumat Pelajar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">
            Maklumat Pelajar
        </h2>

        <table class="table table-bordered w-75 mx-auto">
            <tr class="table-success">

                <th>
                    Maklumat
                </th>

                <th>
                    Butiran
                </th>

            </tr>

            <tr>
                <td>Nama Pelajar</td>
                <td><?= $nama ?></td>
            </tr>

            <tr>
                <td>No Kad Pengenalan</td>
                <td><?= $ic ?></td>
            </tr>

            <tr>
                <td>No Telefon</td>
                <td><?= $telefon ?></td>
            </tr>

            <tr>
                <td>Email</td>
                <td><?= $email ?></td>
            </tr>

            <tr>
                <td>Alamat</td>
                <td><?= $alamat ?></td>
            </tr>

            <tr>
                <td>Jantina</td>
                <td><?= $jantina ?></td>
            </tr>

            <tr>
                <td>Program</td>
                <td><?= $program ?></td>
            </tr>

        </table>
        <div class="text-center">
            <a href="borang.php" class="btn btn-primary">
                Kembali
            </a>
        </div>
    </div>
</body>
</html>