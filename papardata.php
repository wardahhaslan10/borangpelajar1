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
            <td><?= $err_nama ?></td>
        </tr>

        <tr>
            <td>No Kad Pengenalan</td>
            <td><?= $err_ic ?></td>
        </tr>

        <tr>
            <td>No Telefon</td>
            <td><?= $err_telefon ?></td>
        </tr>

        <tr>
            <td>Email</td>
            <td><?= $err_email ?></td>
        </tr>

        <tr>
            <td>Alamat</td>
            <td><?= $err_alamat ?></td>
        </tr>

        <tr>
            <td>Jantina</td>
            <td><?= $err_jantina ?></td>
        </tr>

        <tr>
            <td>Program</td>
            <td><?= $err_program ?></td>
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