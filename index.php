<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .error { color: red; }
    </style>
</head>
<body>

<h2>Formulir Data Mahasiswa</h2>
<form method="post" action="proses_input.php">
    NIM: <input type="text" name="nim">
    <span class="error"><?php echo isset($errors["nim"]) ? $errors["nim"] : ""; ?></span>
    <br><br>

    Nama Depan: <input type="text" name="namadepan">
    <span class="error"><?php echo isset($errors["namadepan"]) ? $errors["namadepan"] : ""; ?></span>
    <br><br>

    Nomor Telepon: <input type="number" name="no_telepon">
    <span class="error"><?php echo isset($errors["no_telepon"]) ? $errors["no_telepon"] : ""; ?></span>
    <br><br>

    Alamat: <textarea name="alamat"></textarea>
    <span class="error"><?php echo isset($errors["alamat"]) ? $errors["alamat"] : ""; ?></span>
    <br><br>

    <input type="submit" name="submit" value="Submit">
</form>

</body>
</html>
