<?php
session_start();

$err_nama = "";
$err_ic = "";
$err_telefon = "";
$err_email = "";
$err_alamat = "";
$err_jantina = "";
$err_program = "";

// Ambil error daripada session
if (isset($_SESSION['nama'])) {
    $err_nama = $_SESSION['nama'];
    unset($_SESSION['nama']);
}
if (isset($_SESSION['ic'])) {
    $err_ic = $_SESSION['ic'];
    unset($_SESSION['ic']);
}
if (isset($_SESSION['telefon'])) {
    $err_telefon = $_SESSION['telefon'];
    unset($_SESSION['telefon']);
}
if (isset($_SESSION['email'])) {
    $err_email = $_SESSION['email'];
    unset($_SESSION['email']);
}
if (isset($_SESSION['alamat'])) {
    $err_alamat = $_SESSION['alamat'];
    unset($_SESSION['alamat']);
}
if (isset($_SESSION['jantina'])) {
    $err_jantina = $_SESSION['jantina'];
    unset($_SESSION['jantina']);
}
if (isset($_SESSION['program'])) {
    $err_program = $_SESSION['program'];
    unset($_SESSION['program']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borang Maklumat Pelajar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2 class="text-center mb-4">
        Borang Maklumat Pelajar
    </h2>
    <form action="proses.php" method="POST">
        <div class="row border p-4">

            <!-- Nama -->
            <div class="col-md-4 mb-3 border p-3">
                <label for="nama" class="form-label">Nama Pelajar</label>
                <input
                    type="text"
                    id="nama"
                    name="nama"
                    class="form-control">
                <p class="text-danger">
                    <?= $err_nama ?>
                </p>
            </div>

            <!-- IC -->
            <div class="col-md-4 mb-3 border p-3">
                <label for="ic" class="form-label">No Kad Pengenalan</label>
                <input
                    type="text"
                    id="ic"
                    name="ic"
                    class="form-control">
                <p class="text-danger">
                    <?= $err_ic ?>
                </p>
            </div>

            <!-- Telefon -->
            <div class="col-md-4 mb-3 border p-3">
                <label for="telefon" class="form-label">No Telefon</label>
                <input
                    type="number"
                    id="telefon"
                    name="telefon"
                    class="form-control">
                <p class="text-danger">
                    <?= $err_telefon ?>
                </p>
            </div>

            <!-- Email -->
            <div class="col-md-4 mb-3 border p-3">
                <label for="email" class="form-label">Email</label>
                <input
                    type="email"
                    id="email"
                    name="email"
                    class="form-control">
                <p class="text-danger">
                    <?= $err_email ?>
                </p>
            </div>

            <!-- Alamat -->
            <div class="col-md-4 mb-3 border p-3">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea
                    id="alamat"
                    name="alamat"
                    rows="4"
                    class="form-control"></textarea>
                <p class="text-danger">
                    <?= $err_alamat ?>
                </p>
            </div>

            <!-- Jantina -->
            <div class="col-md-4 mb-3 border p-3">
                <p class="mb-2">Jantina</p>
                <input
                    type="radio"
                    id="lelaki"
                    name="jantina"
                    value="Lelaki">
                <label for="lelaki">Lelaki</label>
                <input
                    type="radio"
                    id="perempuan"
                    name="jantina"
                    value="Perempuan"
                    class="ms-3">
                <label for="perempuan">Perempuan</label>
                <p class="text-danger">
                    <?= $err_jantina ?>
                </p>
            </div>

            <!-- Program -->
            <div class="col-md-4 mb-3 border p-3">
                <label for="program" class="form-label">Program</label>
                <select
                    id="program"
                    name="program"
                    class="form-select">
                    <option value="">
                        -- Pilih Program --
                    </option>
                    <option value="Diploma Teknologi Maklumat">
                        Diploma Teknologi Maklumat
                    </option>

                    <option value="Diploma Kejuruteraan">
                        Diploma Kejuruteraan
                    </option>

                    <option value="Diploma Perniagaan">
                        Diploma Perniagaan
                    </option>
                </select>

                <p class="text-danger">
                    <?= $err_program ?>
                </p>
            </div>
        </div>

        <div class="text-center mt-4">
            <button
                type="submit"
                class="btn btn-primary">
                Hantar
            </button>
        </div>
    </form>
</div>
</body>
</html>