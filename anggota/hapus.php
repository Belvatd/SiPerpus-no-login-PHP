<?php

    include '../koneksi.php';

    $id_anggota = $_GET['id_anggota'];

    $query = "DELETE FROM anggota WHERE id_anggota = $id_anggota";

    $hasil = mysqli_query($kon, $query);

    $cek = mysqli_affected_rows($kon);

    if($cek == 1)
    {
        header("Location: index.php");
    }
    else {
        echo "Gagal menghapus data";
    }

?>