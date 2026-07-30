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
<!DOCTYPE html>
<html>
<head>
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
<label class="form-label">
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
<label class="form-label">
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
<label class="form-label">
No Telefon
</label>
<input type="text" 
name="telefon" 
class="form-control">
<p class="text-danger">
<?= $err_telefon ?>
</p>

</div>
<!-- Email -->
<div class="col-md-4 mb-3 border p-3">
<label class="form-label">
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
<label class="form-label">
Alamat
</label>
<textarea 
name="alamat"
rows="4"
class="form-control"></textarea>
<p class="text-danger">
<?= $err_alamat ?>
</p>

</div>
<!-- Jantina -->
<div class="col-md-4 mb-3 border p-3">
<label class="form-label">
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
<label class="form-label">
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
<div class="text-center mt-4">
<button type="submit" class="btn btn-primary">
Hantar
</button>
</div>
</form>
</div>
</body>
</html><?php

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