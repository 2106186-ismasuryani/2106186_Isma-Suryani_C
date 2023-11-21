<?php
// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validasi input di sini (contoh: harus diisi)
    $errors = array();

    if (empty($_POST["nim"])) {
        $errors["nim"] = "NIM harus diisi";
    }

    if (empty($_POST["namadepan"])) {
        $errors["namadepan"] = "Nama Depan harus diisi";
    }

    if (empty($_POST["no_telepon"])) {
        $errors["no_telepon"] = "Nomor Telepon harus diisi";
    }

    if (empty($_POST["alamat"])) {
        $errors["alamat"] = "Alamat harus diisi";
    }

    // Jika tidak ada kesalahan, simpan data ke database
    if (empty($errors)) {
        // Lakukan koneksi ke database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "2106186_Isma Suryani";

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Periksa koneksi
        if ($conn->connect_error) {
            die("Koneksi Gagal: " . $conn->connect_error);
        }

        // Ambil nilai dari formulir
        $nim = $_POST["nim"];
        $namadepan = $_POST["namadepan"];
        $no_telepon = $_POST["no_telepon"];
        $alamat = $_POST["alamat"];

        // Masukkan data ke database
        $sql = "INSERT INTO data_mahasiswa (nim, namadepan, no_telepon, alamat) VALUES ('$nim', '$namadepan', '$no_telepon', '$alamat')";

        if ($conn->query($sql) === TRUE) {
            echo "Data berhasil disimpan ke database";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        // Tutup koneksi
        $conn->close();
    }
}
?>