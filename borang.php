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
    <title>Borang Pelajar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container mt-5">
        <h2 class="text-center mb-4">
            Borang Maklumat Pelajar
        </h2>

        <form action="maklumatpelajar.php" method="POST">
            <div class="row border p-4">

                <!-- Nama -->
                <div class="col-md-4 mb-3 border p-3">
                    <label>
                        Nama Pelajar
                    </label>

                    <input type="text"
                        name="nama"
                        class="form-control">
                    <p class="text-danger">
                        <?= $err_nama ?>
                    </p>
                </div>

                <!-- IC -->
                <div class="col-md-4 mb-3 border p-3">
                    <label>
                        No Kad Pengenalan
                    </label>

                    <input type="text"
                        name="ic"
                        class="form-control">
                    <p class="text-danger">
                        <?= $err_ic ?>
                    </p>
                </div>

                <!-- Telefon -->
                <div class="col-md-4 mb-3 border p-3">
                    <label>
                        No Telefon
                    </label>

                    <input type="number"
                        name="telefon"
                        class="form-control">
                    <p class="text-danger">
                        <?= $err_telefon ?>
                    </p>
                </div>

                <!-- Email -->
                <div class="col-md-4 mb-3 border p-3">
                    <label>
                        Email
                    </label>

                    <input type="email"
                        name="email"
                        class="form-control">
                    <p class="text-danger">
                        <?= $err_email ?>
                    </p>
                </div>

                <!-- Alamat -->
                <div class="col-md-4 mb-3 border p-3">
                    <label>
                        Alamat
                    </label>

                    <textarea name="alamat"
                        class="form-control"
                        rows="4"></textarea>
                    <p class="text-danger">
                        <?= $err_alamat ?>
                    </p>
                </div>

                <!-- Jantina -->
                <div class="col-md-4 mb-3 border p-3">
                    <label>
                        Jantina
                    </label>
                    <br>
                    <input type="radio"
                        name="jantina"
                        value="Lelaki">
                    Lelaki
                    <input type="radio"
                        name="jantina"
                        value="Perempuan"
                        class="ms-3">
                    Perempuan
                    <p class="text-danger">
                        <?= $err_jantina ?>
                    </p>
                </div>

                <!-- Program -->
                <div class="col-md-4 mb-3 border p-3">
                    <label>
                        Program
                    </label>

                    <select name="program" class="form-select">
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
            <br>
            <div class="text-center">
                <button type="submit"
                    class="btn btn-primary">
                    Hantar
                </button>
            </div>
        </form>
    </div>
</body>
</html>