<?php
session_start();
$err_jantina="";

if(isset($_SESSION['jantina'])) $err_jantina=$_SESSION['jantina'];
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
                </div>

                <!-- IC -->
                <div class="col-md-4 mb-3 border p-3">
                    <label>
                        No Kad Pengenalan
                    </label>
                    <input type="text"
                        name="ic"
                        class="form-control">
                </div>

                <!-- Telefon -->
                <div class="col-md-4 mb-3 border p-3">
                    <label>
                        No Telefon
                    </label>
                    <input type="number"
                        name="telefon"
                        class="form-control">
                </div>

                <!-- Email -->
                <div class="col-md-4 mb-3 border p-3">
                    <label>
                        Email
                    </label>
                    <input type="email"
                        name="email"
                        class="form-control">
                </div>

                <!-- Alamat -->
                <div class="col-md-4 mb-3 border p-3">
                    <label>
                        Alamat
                    </label>
                    <textarea name="alamat"
                        class="form-control"
                        rows="4"></textarea>
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
                    <p class="text-danger"><?= $err_jantina ?></p>
                </div>

                <!-- Program -->
                <div class="col-md-4 mb-3 border p-3">
                    <label>
                        Program
                    </label>
                    <select name="program" class="form-select">
                        <option></option>
                        <option>
                            Diploma Teknologi Maklumat
                        </option>
                        <option>
                            Diploma Kejuruteraan
                        </option>
                        <option>
                            Diploma Perniagaan
                        </option>
                    </select>
                </div>
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