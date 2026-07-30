<?php
session_start();

$nama = $_SESSION['nama'] ?? "";
$ic = $_SESSION['ic'] ?? "";
$telefon = $_SESSION['telefon'] ?? "";
$email = $_SESSION['email'] ?? "";
$alamat = $_SESSION['alamat'] ?? "";
$jantina = $_SESSION['jantina'] ?? "";
$program = $_SESSION['program'] ?? "";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Maklumat Pelajar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

<h2 class="text-center mb-4">Maklumat Pelajar</h2>

<table class="table table-bordered w-75 mx-auto">

<tr class="table-success">
    <th>Maklumat</th>
    <th>Butiran</th>
</tr>

<tr>
    <td>Nama Pelajar</td>
    <td><?= htmlspecialchars($nama) ?></td>
</tr>

<tr>
    <td>No Kad Pengenalan</td>
    <td><?= htmlspecialchars($ic) ?></td>
</tr>

<tr>
    <td>No Telefon</td>
    <td><?= htmlspecialchars($telefon) ?></td>
</tr>

<tr>
    <td>Email</td>
    <td><?= htmlspecialchars($email) ?></td>
</tr>

<tr>
    <td>Alamat</td>
    <td><?= htmlspecialchars($alamat) ?></td>
</tr>

<tr>
    <td>Jantina</td>
    <td><?= htmlspecialchars($jantina) ?></td>
</tr>

<tr>
    <td>Program</td>
    <td><?= htmlspecialchars($program) ?></td>
</tr>

</table>

<div class="text-center">
    <a href="borang.php" class="btn btn-primary">Kembali</a>
</div>

</div>

</body>
</html>