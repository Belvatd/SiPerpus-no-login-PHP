<?php

    include '../koneksi.php';

    $id_buku = $_GET['id_buku'];

    $query = "DELETE FROM buku WHERE id_buku = $id_buku";

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