<?php

/* membuat koneksi */
$koneksi = mysqli_connect("localhost", "root", "", "2106186_Isma Suryani");

/* cek koneksi */
if ($koneksi) {
    // echo "database terhubung 😍";
    echo "<script> alert('sukses database terhubung!!!') </script>";
}


// $query = "INSERT INTO tamu VALUES(NULL, 'zamzam', 'zamzam@itg.ac.id')";
// mysqli_query($koneksi, $query);
