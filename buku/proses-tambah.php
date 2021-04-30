<?php
include '../koneksi.php';

    if(isset($_POST['simpan']))
    {
        $judul = $_POST['judul'];
        $penerbit = $_POST['penerbit'];
        $pengarang = $_POST['pengarang'];
        $ringkasan = $_POST['ringkasan'];
        $stok = $_POST['stok']; 
        $id_kategori = $_POST['id_kategori'];;
    }
        
        $sql_tambah = "INSERT INTO buku (judul, penerbit, pengarang, ringkasan, stok, id_kategori) 
                        VALUES ('$judul', '$penerbit', '$pengarang', '$ringkasan', $stok, $id_kategori)";

        $hasil_tambah = mysqli_query($kon, $sql_tambah);

        $count = mysqli_affected_rows($kon);

        if($count == 1)
        {
            header("Location: index.php");
        }
        else{
            header("Location: tambah.php");
        }
?>